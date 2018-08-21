package org.sdrc.cpmisweb.controller;

import java.util.HashMap;
import java.util.Map;

import org.sdrc.cpmisweb.job.MonthlyAggregationJob;
import org.sdrc.cpmisweb.job.QuaterlyAggreationJob;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.service.LoginService;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.PathConstants;
import org.sdrc.cpmisweb.util.StateManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class AdminController {

	public static String referrer;
	@Autowired
	private StateManager stateManager;
	
	@Autowired
	LoginService loginService;

	@Autowired
	private ResourceBundleMessageSource messages;
	
	
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_CWC)
	@ResponseBody
	public ModelAndView redirectPage1(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CWC, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_CWC,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_JJB)
	@ResponseBody
	public ModelAndView redirectPage2(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_JJB, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_JJB,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_CCI_HOME)
	@ResponseBody
	public ModelAndView redirectPage3(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIOH, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put(Constant.TYPE_OF_HOME,Constant.HOME_TYPE_OH);
						
			return new ModelAndView(PathConstants.VIEW_CCI_HOME,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_CCI_CH)
	@ResponseBody
	public ModelAndView redirectPage4(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCICH, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put(Constant.TYPE_OF_HOME,Constant.HOME_TYPE_CH);
			
			return new ModelAndView(PathConstants.VIEW_CCI_CH,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_CCI_OS)
	@ResponseBody
	public ModelAndView redirectPage5(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIOS, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put(Constant.TYPE_OF_HOME,Constant.HOME_TYPE_OS);
			
			return new ModelAndView(PathConstants.VIEW_CCI_OS,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_CCI_POS)
	@ResponseBody
	public ModelAndView redirectPage6(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCIPOS, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put(Constant.TYPE_OF_HOME,Constant.HOME_TYPE_POS);
			return new ModelAndView(PathConstants.VIEW_CCI_POS,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_CCI_SH)
	@ResponseBody
	public ModelAndView redirectPage7(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_CCISH, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put(Constant.TYPE_OF_HOME,Constant.HOME_TYPE_SH);
			return new ModelAndView(PathConstants.VIEW_CCI_SH,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_SJPU)
	@ResponseBody
	public ModelAndView redirectPage8(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SJPU, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_SJPU,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_DCPU)
	@ResponseBody
	public ModelAndView redirectPage9(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_DCPU, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_DCPU,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_SAA)
	@ResponseBody
	public ModelAndView redirectPage10(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null)
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
		if(user != null && user.getUserTypeId() == Integer.parseInt(messages.getMessage(Constant.TYPECODE_VALUE_SAA, null, null))){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_SAA,model);
		}
		else
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
	}
	
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_REPORT)
	@ResponseBody
	public ModelAndView redirectPage11(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null && user.getUserTypeId() == PathConstants.STATE_LEVEL_USER_TYPE_ID){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_REPORT,model);
		}
		else{
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
		}
	}
	
	@RequestMapping(PathConstants.ADMIN_CONTROLLER_STATUSREPORT)
	@ResponseBody
	public ModelAndView redirectPage12(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			return new ModelAndView(PathConstants.VIEW_STATUSREPORT,model);
		}
		else{
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
		}
	}
	
	@RequestMapping(value="/dashboard")
	@ResponseBody
	public ModelAndView redirectPageDashboard(){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn)
			return new ModelAndView("maintenance");
		
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put("showPublish", false);
			return new ModelAndView("dashboard",model);
		}
		else{
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
		}
	}
	
	@RequestMapping(value="/userManual")
	@ResponseBody
	public ModelAndView redirectPageUserManual(){
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		if(user != null){
			user = loginService.findByPasswordAndUsername(user.getUserName(), user.getPassword());
			Map<String, Object> model = new HashMap<String, Object>();
			model.put(Constant.USER_ID, user.getUserId());
			model.put(Constant.USER_NAME,user.getUserName());
			model.put(Constant.USER_VIEW_NAME,user.getViewName());
			model.put("showPublish", false);
			return new ModelAndView("userManual",model);
		}
		else{
			return new ModelAndView(PathConstants.VIEW_EXCEPTION);
		}
	}
	
	public static String getReferrer() {
		return referrer;
	}
	public void setReferrer(String referrer) {
		this.referrer = referrer;
	}

}
