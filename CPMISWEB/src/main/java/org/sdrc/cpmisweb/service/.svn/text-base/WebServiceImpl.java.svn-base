package org.sdrc.cpmisweb.service;

import java.io.File;
import java.io.FileInputStream;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Base64;
import java.util.HashMap;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.Properties;
import java.util.UUID;
import java.util.stream.Collectors;

import javax.mail.BodyPart;
import javax.mail.Message;
import javax.mail.PasswordAuthentication;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeBodyPart;
import javax.mail.internet.MimeMessage;
import javax.mail.internet.MimeMultipart;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import org.json.simple.JSONObject;
import org.sdrc.core.IndicatorClassificationType;
import org.sdrc.core.TableType;
import org.sdrc.cpmisweb.domain.Area;
import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.domain.Indicator;
import org.sdrc.cpmisweb.domain.IndicatorClassification;
import org.sdrc.cpmisweb.domain.IndicatorClassificationIndicatorUnitSubgroupMapping;
import org.sdrc.cpmisweb.domain.IndicatorUnitSubgroup;
import org.sdrc.cpmisweb.domain.InstitutionUserMapping;
import org.sdrc.cpmisweb.domain.Subgroup;
import org.sdrc.cpmisweb.domain.TypeDetails;
import org.sdrc.cpmisweb.domain.Unit;
import org.sdrc.cpmisweb.domain.UserAreaMapping;
import org.sdrc.cpmisweb.domain.UserCredentialsMetaData;
import org.sdrc.cpmisweb.domain.UserDomain;
import org.sdrc.cpmisweb.model.AreaModel;
import org.sdrc.cpmisweb.model.DistrictCciNameListModel;
import org.sdrc.cpmisweb.model.Error;
import org.sdrc.cpmisweb.model.ForgotPasswordModel;
import org.sdrc.cpmisweb.model.MailModel;
import org.sdrc.cpmisweb.model.ResetPasswordModel;
import org.sdrc.cpmisweb.model.TypeDetailsModel;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.repository.AreaRepository;
import org.sdrc.cpmisweb.repository.CpmisUserDetailsRepository;
import org.sdrc.cpmisweb.repository.DataEntryRepository;
import org.sdrc.cpmisweb.repository.IndicatorClassificationRepository;
import org.sdrc.cpmisweb.repository.IndicatorClassification_Ius_Mapping_Repository;
import org.sdrc.cpmisweb.repository.IndicatorRepository;
import org.sdrc.cpmisweb.repository.IndicatorUnitSubgroupRepository;
import org.sdrc.cpmisweb.repository.InstitutionUserMappingRepository;
import org.sdrc.cpmisweb.repository.SubgroupRepository;
import org.sdrc.cpmisweb.repository.TypeDetailsRepository;
import org.sdrc.cpmisweb.repository.UnitRepository;
import org.sdrc.cpmisweb.repository.UserAreaMappingRepository;
import org.sdrc.cpmisweb.repository.UserCredentialsMetaDataRepository;
import org.sdrc.cpmisweb.repository.UserDomainRepository;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.StateManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.PropertySource;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.core.env.Environment;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;
/**
 * @author Pratyush(Pratyush@sdrc.co.in)
 */
@Service
@PropertySource(ignoreResourceNotFound = true, value = "file:${catalina.base}/conf/cpmisweb_application.properties")
public class WebServiceImpl implements WebService {
	
	@Autowired
    private Environment environment;

	@Autowired
	AreaRepository areaRepository;
	
	@Autowired
	InstitutionUserMappingRepository institutionUserMappingRepository;
	
	@Autowired
	TypeDetailsRepository typeDetailsRepository;
	
	@Autowired
	StateManager stateManager;
	
	@Autowired
	CpmisUserDetailsRepository cpmisUserDetailsRepository;
	
	@Autowired
	MailService mailService;
	
	@Autowired
	private ResourceBundleMessageSource applicationMessageSource;
	
	@Autowired
	private UserCredentialsMetaDataRepository userCredentialsMetaDataRepository;
	
	@Autowired
	UserAreaMappingRepository userAreaMappingRepository;
	
	@Override
	public List<AreaModel> getAreas() {
		List<Area> areas = areaRepository.findAll();
		List<AreaModel> areaModels = new ArrayList<AreaModel>();
		
		for (Area area : areas){
			AreaModel areaModel = new AreaModel();
			areaModel.setAreaId(area.getAreaId());
			areaModel.setAreaLevel(area.getLevel());
			areaModel.setAreaName(area.getAreaName());
			areaModel.setParentAreaId(area.getParentAreaId());
			areaModels.add(areaModel);
		}
		return areaModels;
	}

	@Override
	public Map<String, List<TypeDetailsModel>> getTypeDetails() {
		List<TypeDetails> typeDetails = typeDetailsRepository.findAll();
		Map<String, List<TypeDetailsModel>> typeDetailsModelMap = new HashMap<String, List<TypeDetailsModel>>();
		List<TypeDetailsModel> trainingOrganisedBy = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> trainingOrganisedByForSAA = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> topicOfTraining = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> trainingAttendedBy = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> childSex = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> osType = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> ofcPremises = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> childGender = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> childCategory = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> typeOfChild = new ArrayList<TypeDetailsModel>();
		List<TypeDetailsModel> reasonOfPendency = new ArrayList<TypeDetailsModel>();
		
		for(TypeDetails tDetails : typeDetails){
			TypeDetailsModel typeDetailsModel = new TypeDetailsModel();
			typeDetailsModel.setTypeDetailsId(tDetails.getTypeDetailsId());
			typeDetailsModel.setTypeDetailsName(tDetails.getTypeDetailsName());
			
			switch (tDetails.getTypeId().getTypeId()) {
			case 1:
				trainingOrganisedBy.add(typeDetailsModel);
				break;
			case 2:
				topicOfTraining.add(typeDetailsModel);
				break;
			case 3:
				trainingAttendedBy.add(typeDetailsModel);
				break;
			case 4:
				childSex.add(typeDetailsModel);
				break;
			case 5:
				osType.add(typeDetailsModel);
				break;
			case 6:
				ofcPremises.add(typeDetailsModel);
				break;
			case 7:
				trainingOrganisedByForSAA.add(typeDetailsModel);
				break;
			case 8:
				childGender.add(typeDetailsModel);
				break;
			case 9:
				childCategory.add(typeDetailsModel);
				break;
			case 10:
				typeOfChild.add(typeDetailsModel);
				break;
			case 11:
				reasonOfPendency.add(typeDetailsModel);
				break;	
			default:
				break;
			}
		}
		typeDetailsModelMap.put("trainingOrganisedBy", trainingOrganisedBy);
		typeDetailsModelMap.put("topicOfTraining", topicOfTraining);
		typeDetailsModelMap.put("trainingAttendedBy", trainingAttendedBy);
		typeDetailsModelMap.put("childSex", childSex);
		typeDetailsModelMap.put("osType", osType);
		typeDetailsModelMap.put("ofcPremises", ofcPremises);
		typeDetailsModelMap.put("trainingOrganisedByForSAA", trainingOrganisedByForSAA);
		typeDetailsModelMap.put("childGender", childGender);
		typeDetailsModelMap.put("childCategory", childCategory);
		typeDetailsModelMap.put("typeOfChild", typeOfChild);
		typeDetailsModelMap.put("reasonOfPendency", reasonOfPendency);
		
		return typeDetailsModelMap;
	}
	
	@Override
	public AreaModel getUserArea() {
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(null != user){
			Area area = user.getArea();
			AreaModel areaModel  = new AreaModel();
			areaModel.setAreaId(area.getAreaId());
			areaModel.setAreaLevel(area.getLevel());
			areaModel.setAreaName(area.getAreaName());
			areaModel.setAreaId(area.getAreaId());
			areaModel.setParentAreaId(area.getParentAreaId());
			return areaModel;
		}else{
			return null;
		}
		
	}

	@Override
	public Error changePassword(String currentPw, String newPw){
		org.sdrc.cpmisweb.model.Error error = new org.sdrc.cpmisweb.model.Error();
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(null != user){
			try {
				if (user.getPassword().equals(currentPw)) {
					user.setPassword(newPw);
					cpmisUserDetailsRepository.changePassword(user.getUserId(), newPw);
					
					/**
					 *if email notification needed in furure then uncomment the following code.
					  Note: Be sure every user have there email ids(in user table) 
					 */
//					MailModel mailModel = new MailModel();
//					mailModel.setToEmailIds(Arrays.asList(user.getEmilId()));
//					
//					mailModel.setFromUserName("eSS Admin" + "<br><br><p style=" + "font-size:10px" + ">"
//							+ "CPMIS" + "</p>");
//					mailModel.setSubject("CPMISWEB: Password changed");
//					mailModel.setMessage("Dear "+user.getUserName()+" "+user.getArea().getAreaName()+", <br><br>your password has been changed.<br><br>"
//							+ "Regards,<br>CPMIS Admin");
//					mailModel.setToUserName("Pratyush");
					
//					Thread thread = new Thread(){
//					@Override
//					public void run() {
//						try {
//							mailService.sendMail(mailModel);
//						} catch (Exception e) {
//							// TODO Auto-generated catch block
//							e.printStackTrace();
//						}
//					};
//					};
//					thread.start();
					
					error.setErrorCode("200");
					error.setErrorMessage(Constant.PASSWORD_CHANGED_SUCCESSFULLY);
//					System.out.println("Mail sent");
					return error;
				} else {
					error.setErrorCode("201");
					error.setErrorMessage(Constant.INCORRECT_PASSWORD);
					return error;	
				}
			}catch(Exception e){
				e.printStackTrace();
				error.setErrorCode("500");
				error.setErrorMessage(e.getMessage());
				return error;
			}
		}else{
			error.setErrorCode("500");
			error.setErrorMessage(Constant.SESSION_OUT_ERROR);
			System.out.println(Constant.SESSION_OUT_ERROR);
			return error;
		}
		
		
	}
	
	@Override
	public Error changeForgotPassword(JSONObject passwordModel){
		String newPw = passwordModel.get("newPw").toString();
		org.sdrc.cpmisweb.model.Error error = new org.sdrc.cpmisweb.model.Error();
		UserCredentialsMetaData metaData = userCredentialsMetaDataRepository.findByActivationCode(passwordModel.get("uKey").toString());
		if(null != metaData && metaData.getIsActive() 
				&& metaData.getCpmisUser() != null && metaData.getCpmisUser().getIsActive()){
			try {
					cpmisUserDetailsRepository.changePassword(metaData.getCpmisUser().getUserId(), newPw);
					
					MailModel mailModel = new MailModel();
					mailModel.setToEmailIds(Arrays.asList(metaData.getCpmisUser().getEmailId()));
					
					mailModel.setSubject("CPMISWEB: Password changed");
					mailModel.setMessage("Dear "+metaData.getCpmisUser().getUserName()+" "+metaData.getCpmisUser().getArea().getAreaName()+", <br><br>your password has been changed.<br><br>"
							+ "Regards,<br>CPMIS Admin");
					mailModel.setToUserName("Pratyush");
					
					Thread thread = new Thread(){
					@Override
					public void run() {
						try {
							mailService.sendMail(mailModel);
						} catch (Exception e) {
							e.printStackTrace();
						}
					};
					};
					thread.start();
					
					error.setHasError(false);
					error.setErrorMessage(Constant.PASSWORD_CHANGED_SUCCESSFULLY);
					System.out.println("Mail sent");
					return error;
			}catch(Exception e){
				e.printStackTrace();
				error.setHasError(true);
				error.setErrorMessage(e.getMessage());
				return error;
			}
		}else{
			if(metaData == null || metaData.getCpmisUser() == null){
				error.setHasError(true);
				error.setErrorMessage(Constant.ERROR_RESETPASSWORD_UNAUTHORIZED);
			}else if(!metaData.getIsActive() || !metaData.getCpmisUser().getIsActive()){
				error.setHasError(true);
				error.setErrorMessage(Constant.ERROR_RESETPASSWORD_LINK_EXPIRED);
			}
			return error;
		}
		
	}

	@Override
	public DistrictCciNameListModel getCciNameList() {

		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(null != user){
			InstitutionUserMapping institutionUserMappingDomain =institutionUserMappingRepository.findByUserIdUserId(user.getUserId());
			
			DistrictCciNameListModel districtCciNameListModel=new DistrictCciNameListModel();
				districtCciNameListModel.setId(institutionUserMappingDomain.getInstitutionUserMappingId());
				districtCciNameListModel.setCciName(institutionUserMappingDomain.getInstitutionId().getInstitutionName());
				districtCciNameListModel.setDistrictId(user.getArea().getAreaId());
				districtCciNameListModel.setUserTypeId(user.getUserTypeId());
			
			return districtCciNameListModel;
		}
		else{
			return null;
		}
		
	}
	
	@Override
	@Transactional
	public ForgotPasswordModel forgotPassword(String email) {
		ForgotPasswordModel response = new ForgotPasswordModel();
		List<CPMISUserDetails> userList = cpmisUserDetailsRepository.findByEmailId(email);
		CPMISUserDetails user = null;
		
		if(userList != null && !userList.isEmpty()){
			
			for(CPMISUserDetails userObject : userList){
				if(userObject.getIsApproved() == null || userObject.getIsApproved())
					user = userObject;
			}
			
			if(user != null && user.getIsApproved() != null && 
					user.getIsActive() != null && user.getIsActive() && user.getIsLive()){
				
				List<UserCredentialsMetaData> userCredentialsMetaDataList = userCredentialsMetaDataRepository.findByCpmisUserUserIdAndIsActiveTrue(user.getUserId());
				
				if(userCredentialsMetaDataList != null && !userCredentialsMetaDataList.isEmpty()){
					for(UserCredentialsMetaData userCredentialsMetaData : userCredentialsMetaDataList){
						userCredentialsMetaData.setIsActive(false);
					}
				}
				
				UUID uniqueKey = UUID.randomUUID();
				byte[] byt = uniqueKey.toString().getBytes();
				String api = Base64.getEncoder().encodeToString(byt);
				
				UserCredentialsMetaData userCredentialsMetaData = new UserCredentialsMetaData();
				userCredentialsMetaData.setActivationCode(uniqueKey.toString());
				userCredentialsMetaData.setCpmisUser(user);
				userCredentialsMetaData.setCreatedDate(new Timestamp(System.currentTimeMillis()));
				userCredentialsMetaData.setIsActive(true);
				
				userCredentialsMetaDataRepository.save(userCredentialsMetaData);
				
				try {
					String actIp = environment.getProperty("domain.name") + 
							"resetPassword?kZiasLioeWhdn="+api;
					/*String actIp = applicationMessageSource.getMessage("domain.name", null, null) + 
									"resetPassword?kZiasLioeWhdn="+api;*/
					
					Properties props = new Properties();
					props.setProperty("mail.transport.protocol", "smtp");
					props.put("mail.smtp.host", "smtp.gmail.com");
					props.put("mail.smtp.socketFactory.port", "587");
					props.put("mail.smtp.socketFactory.class", "avax.net.ssl.SSLSocketFactory");
					props.put("mail.smtp.auth", "true");
					props.put("mail.smtp.port", "587");
					props.put("mail.smtp.starttls.enable", "true");
					
					javax.mail.Session session = javax.mail.Session.getDefaultInstance(
						props, new javax.mail.Authenticator() {
							@Override
							protected PasswordAuthentication getPasswordAuthentication() {
								return new PasswordAuthentication(
								"noreplycpmishelp@gmail.com",
								"noreplycpmishelp123#!");
							}
					});
					
					Message message = new MimeMessage(session);
					message.setFrom(new InternetAddress());
					message.setRecipients(Message.RecipientType.TO,InternetAddress.parse(user.getEmailId()));
					message.setSubject("Reset Password");
					
					String msg = "Dear "+user.getUserName()+" "+user.getArea().getAreaName()+",<br><br>Please click on the link below to reset your password :-<br><br><a href="+actIp+">"
							+actIp+"</a><br><br> <b>Note : Link will expire after 30 minutes<b> <br><br>Regards,<br>CPMIS Tech Team";
					
					BodyPart messageBodyPart;
					
			        MimeMultipart multipart = new MimeMultipart("related");
			        messageBodyPart = new MimeBodyPart();
			        String htmlText = msg;
			        messageBodyPart.setContent(htmlText, "text/html");
			        multipart.addBodyPart(messageBodyPart);
			        
					message.setContent(multipart);
					Transport.send(message);
					response.setHasError(false);
					response.setMessage("successfull");
					
				}catch (Exception e) {
					e.printStackTrace();
					response.setHasError(true);
					response.setMessage("Failed");
					return response;
				}
			}else if(user != null && user.getIsApproved() == null){
				response.setHasError(true);
				response.setMessage("ERROR_USER_NOT_APPROVED");
			}else if(user != null && (user.getIsActive() == null || !user.getIsActive())){
				response.setHasError(true);
				response.setMessage("ERROR_USER_INACTIVE");
			}else{
				response.setHasError(true);
				response.setMessage("ERROR_USER_REJECTED");
			}
		}else{
			response.setHasError(true);
			response.setMessage(Constant.INVALID_EMAIL_ID_ERROR);
		}
		
		return response;
	}
	
	/**
	 * @author Pratyush(pratyush@sdrc.co.in)
	 * Copied from eSS(originally written by Naseem)
	 * The following method is to redirect user to resetPassord view if the link is not expired(30 min).
	 */
	@Transactional
	@Override
	public ResetPasswordModel resetPassword(String ecrypt) {
		byte[] decode = Base64.getDecoder().decode(ecrypt);
		String byteToString = new String(decode);
		ResetPasswordModel resetPasswordModel = new ResetPasswordModel();
		
		UserCredentialsMetaData userCredentialsMetaData = userCredentialsMetaDataRepository.findByActivationCodeAndIsActiveTrue(byteToString);
		
		if(userCredentialsMetaData != null && userCredentialsMetaData.getIsActive() 
				&& userCredentialsMetaData.getCpmisUser() != null && userCredentialsMetaData.getCpmisUser().getIsActive()){
			Timestamp currentDate = new Timestamp(System.currentTimeMillis());
			long difference = currentDate.getTime() - userCredentialsMetaData.getCreatedDate().getTime();
			long minuteDifference = difference / (60 * 1000) % 60;
			long hourDifference = difference / (60 * 60 * 1000) % 24;
			long dayDifference = difference / (24 * 60 * 60 * 1000);
			
			if(dayDifference > 1 || hourDifference > 1 || minuteDifference >  30){
				userCredentialsMetaData.setIsActive(false);
				resetPasswordModel.setRedirectTo("linkExpired");
			}else{
					resetPasswordModel.setRedirectTo("resetPassword");
					resetPasswordModel.setUniqueKey(byteToString);
			}
				
		}else{
			resetPasswordModel.setRedirectTo("linkExpired");
		}
			
		return resetPasswordModel;
	}
	
	@Autowired
	IndicatorClassificationRepository indicatorClassificationRepository;
	
	@Autowired
	UnitRepository unitRepository;
	
	@Autowired
	IndicatorRepository indicatorRepository;
	
	@Autowired
	SubgroupRepository subgroupRepository;
	
	@Autowired
	IndicatorUnitSubgroupRepository indicatorUnitSubgroupRepository;
	
	@Autowired
	IndicatorClassification_Ius_Mapping_Repository indicatorClassification_Ius_Mapping_Repository;
	
	/**
	 * @author Pratyush(pratyush@sdrc.co.in), under guidance of Azar
	 * The following method is responsible for inserting data in various tables from excel
	 */
	@SuppressWarnings("resource")
	@Override
	@Transactional
	public boolean configureIndicatorsUnitSubgroups() {
		FileInputStream fis = null;
		XSSFWorkbook workbook = null;
		try{
			fis = new FileInputStream(new File("D:\\Pratyush\\CPMIS\\report configuration.xlsx"));
			workbook = new XSSFWorkbook(fis);

			XSSFSheet sheet = workbook.getSheetAt(0);

			for (int row = 0; row < sheet.getLastRowNum(); row++) {
				XSSFRow xssfRow = sheet.getRow(row);
				System.out.println("Row :" + row);
				// Starting cells
				Iterator<Cell> cellIterator = xssfRow.cellIterator();
				int cols = 0;
				
				Indicator indicator = null;
				IndicatorClassification icSector = null;
				IndicatorClassification icSubSector = null;
				Subgroup subgroup = null;
				IndicatorClassificationIndicatorUnitSubgroupMapping icius;
				Unit unit = null;
				IndicatorUnitSubgroup ius = null;
				Cell cell = null;
				String valTblName = null;
				String valColName = null;
				String denoColName = null;
				String sectionTable = null;
				String sectionPk = null;
				String refColName = null;
				String tableType = null;
				
				while (cellIterator.hasNext()) {
					cell = cellIterator.next();
					switch (cols) {
					case 0:
						icSector = indicatorClassificationRepository.findByNameAndParentIsNull(cell.getStringCellValue());
						System.out.println("icSector: "+icSector);
						if(null == icSector && !cell.getStringCellValue().trim().isEmpty()){
							IndicatorClassification icl = new IndicatorClassification();
							
							icl.setIndicatorClassificationType(IndicatorClassificationType.SC);
							icl.setName(cell.getStringCellValue());
							
							indicatorClassificationRepository.save(icl);
						}
						icSector = indicatorClassificationRepository.findByNameAndParentIsNull(cell.getStringCellValue());
						break;
					case 1:
						icSubSector = indicatorClassificationRepository.findByNameAndParent(cell.getStringCellValue(), icSector);

						if(null == icSubSector && !cell.getStringCellValue().trim().isEmpty()){
							IndicatorClassification icl = new IndicatorClassification();
							
							icl.setIndicatorClassificationType(IndicatorClassificationType.SC);
							icl.setName(cell.getStringCellValue());
							icl.setParent(icSector);
							
							indicatorClassificationRepository.save(icl);
						}
						icSubSector = indicatorClassificationRepository.findByNameAndParent(cell.getStringCellValue(), icSector);
						break;
					case 2:
						if (cell.getStringCellValue().isEmpty()) {
							System.out.println("Rows::" + sheet.getLastRowNum());
							System.out.println("Indicator Name is Empty");
							return true;
						}
						indicator = indicatorRepository.findByIndicatorName(cell.getStringCellValue());
						if (indicator == null) {
							 indicator = new Indicator();
							 indicator.setHighIsGood(true);
							 indicator.setIndicatorClassification(icSubSector);
							 indicator.setIndicatorMetadata(null);
							 indicator.setIndicatorName(cell.getStringCellValue());
							 
							 indicator = indicatorRepository.save(indicator);

							System.out.println("Indicator Name :" + cell.getStringCellValue());
							System.out.println("Row : :" + row);
						}
						break;
					case 3:
						System.out.println("Unit Name :" + cell.getStringCellValue());
						unit = unitRepository.findByUnitName(cell.getStringCellValue());
						break;	
					case 4:
						System.out.println("Subgroup::::fromexcel::::" + cell.getStringCellValue().trim());
						subgroup = subgroupRepository.findBySubgroupVal(cell.getStringCellValue().trim());
						
						if(null == subgroup){
							Subgroup subg = new Subgroup();
							
							subg.setSubgroupVal(cell.getStringCellValue().trim());
							subg.setSubgroupValOrder(row);
							
							subgroupRepository.save(subg);
						}
						subgroup = subgroupRepository.findBySubgroupVal(cell.getStringCellValue().trim());
						break;
					case 5:
						valTblName = cell.getStringCellValue().trim();
						break;
					case 6:
						valColName = cell.getStringCellValue().trim();
						break;
					case 7:
						refColName = cell.getStringCellValue().trim();
						if(cell.getStringCellValue().trim().equals("NA"))
							tableType = TableType.FLAT.toString();
						else
							tableType = TableType.SECSUBSEC.toString();
						break;
					case 8:
						sectionTable = cell.getStringCellValue().trim();
						break;
					case 9:
						sectionPk = cell.getStringCellValue().trim();
						break;	
					case 11:
						if(cell.getStringCellValue().trim().equals("row percent"))
							denoColName = xssfRow.getCell(cols-1).getStringCellValue();
						break;
					}
					cols++;

				}
				// start persisting

				ius = new IndicatorUnitSubgroup();
				ius.setIndicator(indicator);
				ius.setSubgroup(subgroup);
				ius.setUnit(unit);
				ius.setValueTableName(valTblName);
				ius.setValueColumnName(valColName);
				ius.setDenoColumnName(denoColName);
				ius.setSectionTable(sectionTable);
				ius.setSectionPk(sectionPk);
				ius.setRefColName(refColName);
				ius.setTableType(tableType);

				if (indicatorUnitSubgroupRepository.findByIndicatorAndUnitAndSubgroup(indicator, unit, subgroup) == null){
					
					ius = indicatorUnitSubgroupRepository.save(ius);
					
					if(unit.getUnitId() == 1){
						Unit newUnitTotalNum = unitRepository.findByUnitId(4);
						IndicatorUnitSubgroup newIUSTotalNum = new IndicatorUnitSubgroup();
						
						newIUSTotalNum.setIndicator(indicator);
						newIUSTotalNum.setSubgroup(subgroup);
						newIUSTotalNum.setUnit(newUnitTotalNum);
						newIUSTotalNum.setValueTableName(valTblName);
						newIUSTotalNum.setValueColumnName(valColName);
						newIUSTotalNum.setDenoColumnName(denoColName);
						newIUSTotalNum.setSectionTable(sectionTable);
						newIUSTotalNum.setSectionPk(sectionPk);
						newIUSTotalNum.setRefColName(refColName);
						newIUSTotalNum.setTableType(tableType);
						
						newIUSTotalNum = indicatorUnitSubgroupRepository.save(newIUSTotalNum);
						
						IndicatorClassificationIndicatorUnitSubgroupMapping newIcius = new IndicatorClassificationIndicatorUnitSubgroupMapping();
						newIcius.setIndicatorClassification(icSubSector);
						newIcius.setIndicatorUnitSubgroup(newIUSTotalNum);
			
						if (indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, newIUSTotalNum) == null)
							newIcius = indicatorClassification_Ius_Mapping_Repository.save(newIcius);
						else
							newIcius = indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, newIUSTotalNum);
					}else if(unit.getUnitId() == 2){
						Unit newUnitTotalRowPer = unitRepository.findByUnitId(5);
						IndicatorUnitSubgroup newIUSTotalRowPer = new IndicatorUnitSubgroup();
						
						newIUSTotalRowPer.setIndicator(indicator);
						newIUSTotalRowPer.setSubgroup(subgroup);
						newIUSTotalRowPer.setUnit(newUnitTotalRowPer);
						newIUSTotalRowPer.setValueTableName(valTblName);
						newIUSTotalRowPer.setValueColumnName(valColName);
						newIUSTotalRowPer.setDenoColumnName(denoColName);
						newIUSTotalRowPer.setSectionTable(sectionTable);
						newIUSTotalRowPer.setSectionPk(sectionPk);
						newIUSTotalRowPer.setRefColName(refColName);
						newIUSTotalRowPer.setTableType(tableType);
						
						newIUSTotalRowPer = indicatorUnitSubgroupRepository.save(newIUSTotalRowPer);
						
						IndicatorClassificationIndicatorUnitSubgroupMapping newIcius = new IndicatorClassificationIndicatorUnitSubgroupMapping();
						newIcius.setIndicatorClassification(icSubSector);
						newIcius.setIndicatorUnitSubgroup(newIUSTotalRowPer);
			
						if (indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, newIUSTotalRowPer) == null)
							newIcius = indicatorClassification_Ius_Mapping_Repository.save(newIcius);
						else
							newIcius = indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, newIUSTotalRowPer);
					}else if(unit.getUnitId() == 3){
						Unit newUnitTotalColPer = unitRepository.findByUnitId(6);
						IndicatorUnitSubgroup newIUSTotalColPer = new IndicatorUnitSubgroup();
						
						newIUSTotalColPer.setIndicator(indicator);
						newIUSTotalColPer.setSubgroup(subgroup);
						newIUSTotalColPer.setUnit(newUnitTotalColPer);
						newIUSTotalColPer.setValueTableName(valTblName);
						newIUSTotalColPer.setValueColumnName(valColName);
						newIUSTotalColPer.setDenoColumnName(denoColName);
						newIUSTotalColPer.setSectionTable(sectionTable);
						newIUSTotalColPer.setSectionPk(sectionPk);
						newIUSTotalColPer.setRefColName(refColName);
						newIUSTotalColPer.setTableType(tableType);
						
						newIUSTotalColPer = indicatorUnitSubgroupRepository.save(newIUSTotalColPer);
						
						IndicatorClassificationIndicatorUnitSubgroupMapping newIcius = new IndicatorClassificationIndicatorUnitSubgroupMapping();
						newIcius.setIndicatorClassification(icSubSector);
						newIcius.setIndicatorUnitSubgroup(newIUSTotalColPer);
			
						if (indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, newIUSTotalColPer) == null)
							newIcius = indicatorClassification_Ius_Mapping_Repository.save(newIcius);
						else
							newIcius = indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, newIUSTotalColPer);
					}
				}
					
				else
					ius = indicatorUnitSubgroupRepository.findByIndicatorAndUnitAndSubgroup(indicator, unit, subgroup);
	
				icius = new IndicatorClassificationIndicatorUnitSubgroupMapping();
				icius.setIndicatorClassification(icSubSector);
				icius.setIndicatorUnitSubgroup(ius);
	
				if (indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, ius) == null)
					icius = indicatorClassification_Ius_Mapping_Repository.save(icius);
				else
					icius = indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, ius);
			}
			return true;
	}catch(Exception e){
		e.printStackTrace();
	}
		return false;
	}

	@Autowired
	DataEntryRepository dataEntryRepository;
	
	/**
	 * @author Pratyush(pratyush@sdrc.co.in)
	 * The following method is for returning JSON to front end based on the parameters received(For MIS Report)
	 */
	@SuppressWarnings("unchecked")
	@Override
	public JSONObject getReportdata(Integer indicatorId, Integer timeperiodId) {
		
		List<Object[]> report = dataEntryRepository.findReportData(indicatorId, timeperiodId);
		
		JSONObject reportObj = new JSONObject();
		List<String> headers = new ArrayList<String>();
		List<String> districts = new ArrayList<String>();
		
		for(Object[] obj : report){
			headers.add(obj[4].toString());
			headers = headers.stream().distinct().collect(Collectors.toList());
			
			districts.add(obj[5].toString());
			districts = districts.stream().distinct().collect(Collectors.toList());
		}
		
		List<JSONObject> tableDetailsArr = new ArrayList<JSONObject>();
		
		for(int i=0; i<districts.size(); i++){
			JSONObject tableDetails = new JSONObject();
			List<JSONObject> valueArray = new ArrayList<JSONObject>();
			tableDetails.put("serialNo", i+1);
			tableDetails.put("districtName", districts.get(i));
			
			for(Object[] obj : report){
				JSONObject valueObj = new JSONObject();
				valueObj.put("col_name", obj[4].toString());
				for(Object[] obj1 : report){
					if(obj[4].toString().equals(obj1[4].toString()) && obj1[5].toString().equals(tableDetails.get("districtName"))
							&& null != obj1[0]){
						switch (obj1[3].toString()) {
						case "1":
							valueObj.put("number", obj1[0].toString());
							break;
						case "2":
							valueObj.put("row_per", obj1[0].toString());
							break;
						case "3":
							valueObj.put("col_per", obj1[0].toString());
							break;
						case "4":
							valueObj.put("number", obj1[0].toString());
							break;
						case "5":
							valueObj.put("row_per", obj1[0].toString());
							break;
						case "6":
							valueObj.put("col_per", obj1[0].toString());
							break;	
						default:
							break;
						}
					}
				}
				if(!valueArray.contains(valueObj))
					valueArray.add(valueObj);
			}
			//null value will be set to '-' here
			for(int j=0; j<valueArray.size();j++){
				if(null==valueArray.get(j).get("number") && (int)Double.parseDouble(String.valueOf(valueArray.get(j).get("row_per")))==0){
					valueArray.get(j).put("number", "-");
					valueArray.get(j).put("col_per", "-");
				}else if(null==valueArray.get(j).get("row_per")){
					valueArray.get(j).put("number", "-");
					valueArray.get(j).put("row_per", "-");
					valueArray.get(j).put("col_per", "-");
				}
			}
			tableDetails.put("valueArray", valueArray);
			tableDetailsArr.add(tableDetails);
		}
		reportObj.put("headers", headers);
		reportObj.put("tableDetails", tableDetailsArr);
		
		return reportObj;
	}

	/* 
	 * @author(Pratyush Kumar  Rath)
	 * The following method implementation is responsible for inserting data in user and user_area mapping from excel.
	 */
	@Autowired
	UserDomainRepository userDomainRepository;
	
	@SuppressWarnings("resource")
	@Override
	public boolean configureUsers() {
		FileInputStream fis = null;
		XSSFWorkbook workbook = null;
		try{
			fis = new FileInputStream(new File("D:\\userdtls.xlsx"));
			workbook = new XSSFWorkbook(fis);
			XSSFSheet sheet = workbook.getSheetAt(0);

			for (int row = 0; row < sheet.getLastRowNum(); row++) {
				XSSFRow xssfRow = sheet.getRow(row);
				// Starting cells
				Iterator<Cell> cellIterator = xssfRow.cellIterator();
				int cols = 0;
				Cell cell = null;
				String userName = null;
				String password = null;
				String encodedPass = null;
				String emailId = null;
				UserDomain userTypeId = null;
				Area area = null;
				
				while (cellIterator.hasNext()) {
					cell = cellIterator.next();
					switch (cols) {
					case 0:
						System.out.println(cell.getStringCellValue());
						area = areaRepository.findByAreaName(cell.getStringCellValue());
						break;
					case 1:
						System.out.println(cell.getStringCellValue());
						break;
					case 2:
						System.out.println(cell.getStringCellValue());
						userName = cell.getStringCellValue();
						break;	
					case 3:
						System.out.println(cell.getStringCellValue());
						password = cell.getStringCellValue();
						
						MessageDigest messageDigest = MessageDigest.getInstance("MD5");
					    messageDigest.reset();
					    messageDigest.update(password.getBytes());
					    byte[] digest = messageDigest.digest();
					    BigInteger bigInt = new BigInteger(1, digest);
					    encodedPass = bigInt.toString(16);
						break;
					case 4:
						System.out.println(cell.getStringCellValue());
						emailId = cell.getStringCellValue();
						break;
					case 5:
						userTypeId = userDomainRepository.findByUserTypeName(cell.getStringCellValue());
						break;
					default:
						break;
					}
					cols++;
				}
				// start persisting
				CPMISUserDetails cud = new CPMISUserDetails();
				
				cud.setUserName(userName);
				cud.setPassword(encodedPass);
				cud.setEmailId(emailId);
				cud.setArea(area);
				cud.setUserTypeId(userTypeId);
				cud.setIsActive(true);
				cud.setIsApproved(true);
				cud.setIsLive(true);
				cud.setSjpuAccess(true);
				
				if(null != cud.getUserName())
					cud = cpmisUserDetailsRepository.save(cud);

				UserAreaMapping userAreamapping = new UserAreaMapping();
				userAreamapping.setArea(area);
				userAreamapping.setUser(cud);
				userAreamapping.setIsActive(true);
				userAreamapping.setCreatedDate(new Timestamp(System.currentTimeMillis()));
				
				userAreaMappingRepository.save(userAreamapping);
			}
			return true;
	}catch(Exception e){
		e.printStackTrace();
	}
		return false;
	
		
	}

	/* @author Pratyush
	 * @see org.sdrc.cpmisweb.service.WebService#importExcelForIndicatorHighIsGood()
	 * The following method is for setting the value of "highIsGood" in indicator table by reading from excel.
	 */
	@SuppressWarnings("resource")
	@Override
	public boolean importExcelForIndicatorHighIsGood() {
		FileInputStream fis = null;
		XSSFWorkbook workbook = null;
		try{
			fis = new FileInputStream(new File("D:\\Indicator list _r1.xlsx"));
			workbook = new XSSFWorkbook(fis);
			XSSFSheet sheet = workbook.getSheetAt(0);

			for (int row = 0; row < sheet.getLastRowNum(); row++) {
				XSSFRow xssfRow = sheet.getRow(row);
				// Starting cells
				Iterator<Cell> cellIterator = xssfRow.cellIterator();
				int cols = 0;
				Cell cell = null;
				Indicator indicator = null;
				Boolean highIsGood = null;
				
				while (cellIterator.hasNext()) {
					cell = cellIterator.next();
					switch (cols) {
					case 0:
						indicator = indicatorRepository.findByIndicatorName(cell.getStringCellValue());
						break;
					case 1:
						highIsGood = cell.getStringCellValue().equals("Yes")?true:false;
						break;
					default:
						break;
					}
					cols++;
				}
				// start persisting
				indicator.setHighIsGood(highIsGood);
				indicatorRepository.save(indicator);
			}
			return true;
		}catch(Exception e){
			e.printStackTrace();
		}
		return false;
	}
}
