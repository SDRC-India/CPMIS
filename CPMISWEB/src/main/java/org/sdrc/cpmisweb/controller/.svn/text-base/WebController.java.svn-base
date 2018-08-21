package org.sdrc.cpmisweb.controller;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.Map;

import org.json.simple.JSONObject;
import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.model.AreaModel;
import org.sdrc.cpmisweb.model.DistrictCciNameListModel;
import org.sdrc.cpmisweb.model.Error;
import org.sdrc.cpmisweb.model.ForgotPasswordModel;
import org.sdrc.cpmisweb.model.ResetPasswordModel;
import org.sdrc.cpmisweb.model.TypeDetailsModel;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.repository.CpmisUserDetailsRepository;
import org.sdrc.cpmisweb.service.WebService;
import org.sdrc.cpmisweb.util.PathConstants;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.scheduling.support.CronSequenceGenerator;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
public class WebController {

	@Autowired
	WebService webService;
	
	@RequestMapping(value=PathConstants.AREA_DETAILS)
	@ResponseBody
	public List<AreaModel> getAreas() throws ParseException{
		
		return webService.getAreas();
	}
	
	@RequestMapping(value=PathConstants.TYPE_DETAILS)
	@ResponseBody
	public Map<String, List<TypeDetailsModel>> getTypeDetails() throws ParseException{
		
		return webService.getTypeDetails();
	}
	
	@RequestMapping(value=PathConstants.USER_AREA_DETAILS)
	@ResponseBody
	public AreaModel getUserArea(){
		return webService.getUserArea();
	}
	
	@RequestMapping(value=PathConstants.CCI_NAME_DETAILS)
	@ResponseBody
	public DistrictCciNameListModel getCciNameList(){
		return webService.getCciNameList();
	}
	
	@RequestMapping(value=PathConstants.WEBCONTROLLER_CHANGE_PASSWORD, method=RequestMethod.POST)
	@ResponseBody
	public Error changePassword(@RequestBody JSONObject passwordModel){
		
		return webService.changePassword(passwordModel.get("currentPw").toString(), passwordModel.get("newPw").toString());
		
	}
	
	@RequestMapping(value=PathConstants.WEBCONTROLLER_CHANGE_FORGET_PASSWORD, method=RequestMethod.POST)
	@ResponseBody
	public Error changeForgotPassword(@RequestBody JSONObject passwordModel){
		
		return webService.changeForgotPassword(passwordModel);
		
	}
	
	@RequestMapping(value =PathConstants.WEBCONTROLLER_FORGET_PASSWORD, method = RequestMethod.POST)
	@ResponseBody
	public ForgotPasswordModel forgotPassword(@RequestBody String email) {
		return webService.forgotPassword(email);
	}
	
	@RequestMapping(value =PathConstants.WEBCONTROLLER_RESET_PASSWORD, method = RequestMethod.GET)
	public String resetPassword(@RequestParam String kZiasLioeWhdn, Model model) {
		ResetPasswordModel resetPasswordModel = webService.resetPassword(kZiasLioeWhdn);
		if (resetPasswordModel.getUniqueKey() != null)
			model.addAttribute("shdjkfh", resetPasswordModel.getUniqueKey());
		return resetPasswordModel.getRedirectTo();
	}
	
	@RequestMapping(value = {"/maintenance"}, method = {RequestMethod.GET})
	public String getMaintenance(){
		return "maintenance";
	}
	
/**
 * Please do not remove following three methods	
 */
//	@RequestMapping(value = "/importExcel")
//	@ResponseBody
//	public boolean importExcel() {
//		return webService.configureIndicatorsUnitSubgroups();
//	}
	
//	@RequestMapping(value = "/importExcelToUserDtlsTable")
//	@ResponseBody
//	public boolean importExcelToUser() {
//		return webService.configureUsers();
//	}
	
//	@RequestMapping(value = "/importExcelForIndicatorHighIsGood")
//	@ResponseBody
//	public boolean importExcelForIndicatorHighIsGood() {
//		return webService.importExcelForIndicatorHighIsGood();
//	}
	
	@Autowired
	CpmisUserDetailsRepository cpmisUserDetailsRepository;
	
	@RequestMapping(value = "/getNullPasswordUsers")
	@ResponseBody
	public List<UserModel> getUsersWithoutpassword() {
		List<CPMISUserDetails> userDetails = cpmisUserDetailsRepository.findByPasswordIsNull();
		List<UserModel> userModels = new ArrayList<UserModel>();
		if(null != userDetails){
			for(CPMISUserDetails detail : userDetails){
				UserModel userModel = new UserModel();
				userModel.setUserId(detail.getUserId());
				userModel.setUserName(detail.getUserName());
				userModels.add(userModel);
			}
		}
		return userModels;
	}
	
	@RequestMapping(value = "insertPassword", method = RequestMethod.POST)
	@ResponseBody
	public boolean insertPassword(@RequestBody List<UserModel> models) {
		for(UserModel model : models){
			cpmisUserDetailsRepository.updateUserPassword(model.getUserId(), model.getUserName(), model.getPassword());
			System.out.println("Password inserted for "+model.getUserName());
		}
		return true;
	}
	
	@RequestMapping(value=PathConstants.LAST_ACCESSED_TIME_CALL)
	@ResponseBody
	public Boolean checkLastAccessedTime() {
		return true;
	}
	
	@RequestMapping(value = "/crontest")
	@ResponseBody
	public String cronTest() {
		
		CronSequenceGenerator cron1 = new CronSequenceGenerator("0 10 0 1 * *");
		CronSequenceGenerator cron2 = new CronSequenceGenerator("0 00 0 1 MAY,AUG,NOV,FEB *");
		Calendar cal = Calendar.getInstance();

		SimpleDateFormat sdf = new SimpleDateFormat("yyyy MMM dd HH:mm:ss"); 
		  
		System.out.println("current date: "+sdf.format(cal.getTime()));
		System.out.println("Next cron trigger for monthly: "+cron1.next(cal.getTime()));
		System.out.println("Next cron trigger for quarterly: "+cron2.next(cal.getTime()));
		
		return "Next 5 quarterly scheduled dates: \n\n"+cron2.next(cal.getTime())+"\n"
		+cron2.next(cron2.next(cal.getTime()))+"\n"
		+cron2.next(cron2.next(cron2.next(cal.getTime())))+"\n"
		+cron2.next(cron2.next(cron2.next(cron2.next(cal.getTime()))))+"\n"
		+cron2.next(cron2.next(cron2.next(cron2.next(cron2.next(cal.getTime())))));
	}
}
