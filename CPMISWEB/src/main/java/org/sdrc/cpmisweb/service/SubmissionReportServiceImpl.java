/**
 * 
 */
package org.sdrc.cpmisweb.service;

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.domain.CciChildrenHome;
import org.sdrc.cpmisweb.domain.CciOH;
import org.sdrc.cpmisweb.domain.CciOpenShelter;
import org.sdrc.cpmisweb.domain.CciPlaceOfSafety;
import org.sdrc.cpmisweb.domain.CciSH;
import org.sdrc.cpmisweb.domain.InstitutionUserMapping;
import org.sdrc.cpmisweb.domain.SubmissionStatusReportDomain;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.UserDomain;
import org.sdrc.cpmisweb.domain.cwc.CwcDetails;
import org.sdrc.cpmisweb.domain.dcpu.DcpuDetails;
import org.sdrc.cpmisweb.domain.jjb.JjbDetails;
import org.sdrc.cpmisweb.domain.saa.SaaDetails;
import org.sdrc.cpmisweb.domain.sjpu.SjpuDetails;
import org.sdrc.cpmisweb.model.SubmissionReportModel;
import org.sdrc.cpmisweb.model.TimeperiodModel;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.model.UserTypeDomainModel;
import org.sdrc.cpmisweb.repository.CciChildrenHomeRepository;
import org.sdrc.cpmisweb.repository.CciOHRepository;
import org.sdrc.cpmisweb.repository.CciOpenShelterRepository;
import org.sdrc.cpmisweb.repository.CciPlaceOfSafetyRepository;
import org.sdrc.cpmisweb.repository.CciSHRepository;
import org.sdrc.cpmisweb.repository.CpmisUserDetailsRepository;
import org.sdrc.cpmisweb.repository.CwcDetailsRepository;
import org.sdrc.cpmisweb.repository.DcpuDetailsRepository;
import org.sdrc.cpmisweb.repository.InstitutionUserMappingRepository;
import org.sdrc.cpmisweb.repository.JjbDetailsRepository;
import org.sdrc.cpmisweb.repository.SaaDetailsRepository;
import org.sdrc.cpmisweb.repository.SjpuDetailsRepository;
import org.sdrc.cpmisweb.repository.SubmissionStatusReportDomainRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.sdrc.cpmisweb.repository.UserDomainRepository;
import org.sdrc.cpmisweb.util.CPMISDate;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.StateManager;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.scheduling.annotation.EnableScheduling;
import org.springframework.scheduling.annotation.Scheduled;
import org.springframework.stereotype.Service;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in)  created on : 06-Mar-2018 5:53:35 pm
 */

@Service
@EnableScheduling
public class SubmissionReportServiceImpl implements SubmissionReportService {

	@Autowired
	CpmisUserDetailsRepository cpmisUserDetailsRepository;
	@Autowired
	InstitutionUserMappingRepository institutionUserMappingRepository;
	@Autowired
	CwcDetailsRepository cwcDetailsRepository;
	@Autowired
	JjbDetailsRepository jjbDetailsRepository;
	@Autowired
	DcpuDetailsRepository dcpuDetailsRepository;
	@Autowired
	SjpuDetailsRepository sjpuDetailsRepository;
	@Autowired
	SaaDetailsRepository saaDetailsRepository;
	@Autowired
	CciOHRepository cciOHRepository;
	@Autowired
	CciSHRepository cciSHRepository;
	@Autowired
	CciPlaceOfSafetyRepository cciPlaceOfSafetyRepository;
	@Autowired
	CciChildrenHomeRepository cciChildrenHomeRepository;
	@Autowired
	CciOpenShelterRepository cciOpenShelterRepository;
	@Autowired
	TimePeriodRepository  timePeriodRepository;
	@Autowired
	SubmissionStatusReportDomainRepository submissionStatusReportDomainRepository;
	@Autowired
	UserDomainRepository userDomainRepository;
	@Autowired
	ResourceBundleMessageSource messages;
	@Autowired
	StateManager stateManager;
	
	private static final Logger logger=LoggerFactory.getLogger(SubmissionReportServiceImpl.class);
	
	@Override
	public List<SubmissionReportModel> findSubmittedStatusOfLastMonthData(){
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		CPMISDate preDate = new CPMISDate();
		Date firstDateOfCurrentMonth = preDate.currentMonthFirstDate();
		Date lastDateOfCurrentMonth = preDate.currentMonthLastDate();
		SimpleDateFormat sdformatter = new SimpleDateFormat("dd-MM-yyyy hh:mm:ss");
			
		CPMISUserDetails userIdentity=cpmisUserDetailsRepository.findByUserId(user.getUserId());
		List<CPMISUserDetails> userDetailsList=null;
		List<SubmissionReportModel> submissionReportModelList=new ArrayList<SubmissionReportModel>();
		if(userIdentity.getSjpuAccess()==true)
		{
			userDetailsList=cpmisUserDetailsRepository.findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrueAndUserTypeIdUserTypeIdIsNot(Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SLU, null, null)));	
		}
		
		else
		{
			userDetailsList=cpmisUserDetailsRepository.findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrueAndUserTypeIdUserTypeIdIsNotAndUserTypeIdUserTypeIdIsNot(Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SJPU, null, null)),Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SLU, null, null)));
		}
			
		
		if(userDetailsList.isEmpty())
			{
				return null;
			}
	
		else{
			
			for(CPMISUserDetails cud:userDetailsList)
			{
				SubmissionReportModel submissionReportModel=new SubmissionReportModel();
					CwcDetails cwcDetails = null;
					JjbDetails jjbDetails = null;
					DcpuDetails dcpuDetails = null;
					SjpuDetails sjpuDetails = null;
					SaaDetails saaDetails = null;
					CciOH cciOH = null;
					CciSH cciSH = null;
					CciChildrenHome cciChildrenHome = null;
					CciPlaceOfSafety cciPlaceOfSafety = null;
					CciOpenShelter cciOpenShelter = null;
				
				if(cud.getUserTypeId().getUserTypeId()==Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CWC, null, null)))
					cwcDetails=cwcDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_JJB, null, null)))
					jjbDetails=jjbDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_DCPU, null, null)))
					dcpuDetails=dcpuDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SJPU, null, null)))
					sjpuDetails=sjpuDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SAA, null, null)))
					saaDetails=saaDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIOH, null, null)))
					cciOH=cciOHRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCISH, null, null)))
					cciSH=cciSHRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCICH, null, null)))
					cciChildrenHome=cciChildrenHomeRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIPOS, null, null)))
					cciPlaceOfSafety=cciPlaceOfSafetyRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIOS, null, null)))
					cciOpenShelter=cciOpenShelterRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfCurrentMonth, lastDateOfCurrentMonth);
				
				if(cwcDetails!=null){
					submissionReportModel.setSubmissionStatus(cwcDetails.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(cwcDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);	
				}
				
				else if(jjbDetails!=null){
					submissionReportModel.setSubmissionStatus(jjbDetails.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(jjbDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				else if(dcpuDetails!=null){
					submissionReportModel.setSubmissionStatus(dcpuDetails.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(dcpuDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				else if(sjpuDetails!=null){
					submissionReportModel.setSubmissionStatus(sjpuDetails.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(sjpuDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				
				else if(saaDetails!=null){
					submissionReportModel.setSubmissionStatus(saaDetails.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(saaDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				
				else if(cciOH!=null){
					submissionReportModel.setSubmissionStatus(cciOH.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(cciOH.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				
				else if(cciSH!=null){
					submissionReportModel.setSubmissionStatus(cciSH.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(cciSH.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				
				else if(cciPlaceOfSafety!=null){
					submissionReportModel.setSubmissionStatus(cciPlaceOfSafety.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(cciPlaceOfSafety.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				
				else if(cciChildrenHome!=null){
					submissionReportModel.setSubmissionStatus(cciChildrenHome.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(cciChildrenHome.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				
				else if(cciOpenShelter!=null){
					submissionReportModel.setSubmissionStatus(cciOpenShelter.isSubmitted());
					submissionReportModel.setSubmissionDate(sdformatter.format(cciOpenShelter.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
				else{
					submissionReportModel.setSubmissionStatus(false);
					submissionReportModel.setSubmissionDate("");
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					submissionReportModel.setDistrictName(institutionUserMapping.getArea().getAreaName());
					submissionReportModel.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					submissionReportModel.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					submissionReportModel.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					submissionReportModelList.add(submissionReportModel);
				}
		
			}
		
		return submissionReportModelList;
		}
			
			
	}
	public List<TimeperiodModel> getTimeperiod(){

		String currentTimeperiod=messages.getMessage(Constant.STATUS_REPORT_CURRENT_MONTH,null,null);
		List<TimeperiodModel> timeperiodModelList=new ArrayList<TimeperiodModel>();
		TimeperiodModel tpModel1=new TimeperiodModel();
		tpModel1.setTimeperiodId(Integer.parseInt(messages.getMessage(Constant.SET_CURRENT_TIMEPERIOD_VALUE, null, null)));
		tpModel1.setTimeperiodName(currentTimeperiod);
		timeperiodModelList.add(tpModel1);
		List<Timeperiod> timeperiodList=timePeriodRepository.findByPeriodicityOrderByTimeperiodIdDesc(Integer.parseInt(messages.getMessage(Constant.MONTHLY_PERIODICITY_VALUE, null, null)));
		for(Timeperiod tpDomain:timeperiodList){
			TimeperiodModel tpModel=new TimeperiodModel();
			tpModel.setTimeperiodId(tpDomain.getTimeperiodId());
			tpModel.setTimeperiodName(tpDomain.getTimePeriod());
			timeperiodModelList.add(tpModel);
		}
		
		return timeperiodModelList;
	}

	@Override
	public List<SubmissionReportModel> findSubmittedStatusData(Integer timeperiodId) {
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		CPMISUserDetails userIdentity=cpmisUserDetailsRepository.findByUserId(user.getUserId());
		
		List<SubmissionReportModel> submissionReportModel=new ArrayList<SubmissionReportModel>();
		List<SubmissionStatusReportDomain> getStatusReportDomainData=null;
		
		if(userIdentity.getSjpuAccess()==true)
		{
			getStatusReportDomainData=submissionStatusReportDomainRepository.findByTimeperiodIdOrderByDistrictNameAscUserTypeIdAsc(timeperiodId);
		}
		
		else
		{
			getStatusReportDomainData=submissionStatusReportDomainRepository.findByTimeperiodIdAndUserTypeIdIsNotOrderByDistrictNameAscUserTypeIdAsc(timeperiodId,Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SJPU, null, null)));
		}
		
		if(getStatusReportDomainData.isEmpty()){
			return null;
		}
		else{
			for(SubmissionStatusReportDomain submissionStatusReportDomain:getStatusReportDomainData){
				SubmissionReportModel srModel=new SubmissionReportModel();
				srModel.setDistrictName(submissionStatusReportDomain.getDistrictName());
				srModel.setUserTypeId(submissionStatusReportDomain.getUserTypeId());
				srModel.setInstitutionName(submissionStatusReportDomain.getInstitutionName());
				srModel.setSubmissionDate(submissionStatusReportDomain.getSubmissionDate());
				srModel.setSubmissionStatus(submissionStatusReportDomain.getSubmissionStatus());
				srModel.setUserTypeName(submissionStatusReportDomain.getUserTypeName());
				submissionReportModel.add(srModel);
			}
			
			return submissionReportModel;
			
			}
		}

	@Transactional
	@Scheduled(cron = "0 1 1 1 * *")
	@Override
	public void aggregationSubmittedStatus() {
		CPMISDate preDate = new CPMISDate();
		Date firstDateOfPreviousMonth = preDate.previousMonthFirstDate();
		Date lastDateOfPreviousMonth = preDate.previousMonthLastDate();
		SimpleDateFormat sdformatter = new SimpleDateFormat("dd-MM-yyyy hh:mm:ss");
		try{
		Timeperiod timeId=timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(Integer.parseInt(messages.getMessage(Constant.MONTHLY_PERIODICITY_VALUE, null, null)));
		Integer timeperiodIdforSave=timeId.getTimeperiodId();
		String currentTimeperiod=timeId.getTimePeriod();
		
		List<CPMISUserDetails> userDetailsList=cpmisUserDetailsRepository.findByIsActiveTrueAndIsLiveTrueAndIsApprovedTrueAndUserTypeIdUserTypeIdIsNot(Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SLU, null, null)));
		for(CPMISUserDetails cud:userDetailsList)
			{
				SubmissionStatusReportDomain domainsave=new SubmissionStatusReportDomain();
					CwcDetails cwcDetails = null;
					JjbDetails jjbDetails = null;
					DcpuDetails dcpuDetails = null;
					SjpuDetails sjpuDetails = null;
					SaaDetails saaDetails = null;
					CciOH cciOH = null;
					CciSH cciSH = null;
					CciChildrenHome cciChildrenHome = null;
					CciPlaceOfSafety cciPlaceOfSafety = null;
					CciOpenShelter cciOpenShelter = null;
				
				if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CWC, null, null)))
					cwcDetails=cwcDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_JJB, null, null)))
					jjbDetails=jjbDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_DCPU, null, null)))
					dcpuDetails=dcpuDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SJPU, null, null)))
					sjpuDetails=sjpuDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SAA, null, null)))
					saaDetails=saaDetailsRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIOH, null, null)))
					cciOH=cciOHRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCISH, null, null)))
					cciSH=cciSHRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()== Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCICH, null, null)))
					cciChildrenHome=cciChildrenHomeRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()==Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIPOS, null, null)))
					cciPlaceOfSafety=cciPlaceOfSafetyRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				else if(cud.getUserTypeId().getUserTypeId()==Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIOS, null, null)))
					cciOpenShelter=cciOpenShelterRepository.findByUserIdAndIsSubmittedTrueAndDateOfSubmimissionAfterAndDateOfSubmimissionBefore(cud.getUserId(), firstDateOfPreviousMonth, lastDateOfPreviousMonth);
				
				if(cwcDetails!=null){
					domainsave.setSubmissionStatus(cwcDetails.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(cwcDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(jjbDetails!=null){
					domainsave.setSubmissionStatus(jjbDetails.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(jjbDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				else if(dcpuDetails!=null){
					domainsave.setSubmissionStatus(dcpuDetails.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(dcpuDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				else if(sjpuDetails!=null){
					domainsave.setSubmissionStatus(sjpuDetails.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(sjpuDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(saaDetails!=null){
					domainsave.setSubmissionStatus(saaDetails.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(saaDetails.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(cciOH!=null){
					domainsave.setSubmissionStatus(cciOH.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(cciOH.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(cciSH!=null){
					domainsave.setSubmissionStatus(cciSH.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(cciSH.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(cciPlaceOfSafety!=null){
					domainsave.setSubmissionStatus(cciPlaceOfSafety.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(cciPlaceOfSafety.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(cciChildrenHome!=null){
					domainsave.setSubmissionStatus(cciChildrenHome.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(cciChildrenHome.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				
				else if(cciOpenShelter!=null){
					domainsave.setSubmissionStatus(cciOpenShelter.isSubmitted());
					domainsave.setSubmissionDate(sdformatter.format(cciOpenShelter.getDateOfSubmimission()).toString());
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
				else{
					domainsave.setSubmissionStatus(false);
					domainsave.setSubmissionDate("");
					InstitutionUserMapping institutionUserMapping=institutionUserMappingRepository.findByUserIdUserId(cud.getUserId());
					domainsave.setDistrictName(institutionUserMapping.getArea().getAreaName());
					domainsave.setInstitutionName(institutionUserMapping.getInstitutionId().getInstitutionName());
					domainsave.setUserTypeName(institutionUserMapping.getUserId().getUserTypeId().getUserTypeName());
					domainsave.setUserTypeId(institutionUserMapping.getUserId().getUserTypeId().getUserTypeId());
					domainsave.setTimeperiodId(timeperiodIdforSave);
					domainsave.setTimeperiodName(currentTimeperiod);
					submissionStatusReportDomainRepository.save(domainsave);
				}
			}
			}catch(Exception e){
				logger.error("Error in submission status report service aggregartion!! ",e);
				e.printStackTrace();
			}
		
	}

	@Override
	public List<UserTypeDomainModel> findAllInstitutionType() {

		List<UserTypeDomainModel> userTypeDomainModel=new ArrayList<UserTypeDomainModel>();
		List<UserDomain> userDomain=userDomainRepository.findAll();

		for(UserDomain ud:userDomain){
			UserTypeDomainModel utdm=new UserTypeDomainModel();
			utdm.setInstitution_type_id(ud.getUserTypeId());
			utdm.setInstitution_type_name(ud.getDescription());
			userTypeDomainModel.add(utdm);
		}
		return userTypeDomainModel;
	}
	
}
