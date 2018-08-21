package org.sdrc.cpmisweb.controller;

import java.sql.Date;
import java.sql.Timestamp;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.sdrc.core.Authorize;
import org.sdrc.cpmisweb.job.MonthlyAggregationJob;
import org.sdrc.cpmisweb.job.QuaterlyAggreationJob;
import org.sdrc.cpmisweb.model.JjbModel;
import org.sdrc.cpmisweb.service.JjbService;
import org.sdrc.cpmisweb.service.UserService;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.PathConstants;
import org.sdrc.cpmisweb.util.StateManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;

@Controller
public class JjbController {

	@Autowired
	private StateManager stateManager;
	@Autowired
	JjbService jjbService;
	@Autowired
	private UserService userService;
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value = PathConstants.JJB_CONTROLLER_SAVE, method = RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> saveJJB(@RequestBody JjbModel jjbModel) {
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			jjbModel.setLive(true);
			jjbService.save(jjbModel);
			return null;
		}	
	}
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value = PathConstants.AUTO_SAVE_JJB, method = RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> autoSaveJJBMethod(@RequestBody JjbModel jjbModel,HttpServletRequest request, HttpServletResponse resp) throws ServletException{
		
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			jjbModel.setLive(true);
			jjbService.save(jjbModel);
			HttpSession session=request.getSession(false);
			if(session !=null)
			{
				//Updating logout information to login meta data table
				Long  userLoginMetaId = (Long) stateManager.getValue(Constant.LOGIN_META_ID);
				if(userLoginMetaId != null)
				{
					userService.updateLoggedOutStatus(userLoginMetaId,  new Timestamp(new java.util.Date().getTime()));
				}
				stateManager.setValue(Constant.LOGIN_META_ID, null);
				
	
			AdminController.referrer = null;
			stateManager.setValue(Constant.USER_PRINCIPAL, null);
			request.getSession().setAttribute(Constant.USER_PRINCIPAL, null);
			request.getSession().invalidate();
			ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder.currentRequestAttributes();
			attr.getRequest().getSession(true).removeAttribute(Constant.USER_PRINCIPAL);
			attr.getRequest().getSession(true).invalidate();
			request.logout();}
			return null;
		}
	}
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value = PathConstants.JJB_CONTROLLER_SUBMIT, method = RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> submitJJB(@RequestBody JjbModel jjbModel) {
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			jjbModel.setLive(false);
			jjbModel.setSubmitted(true);
			jjbModel.setDateOfSubmimission(new Date(new java.util.Date().getTime()));
			jjbService.save(jjbModel);
			return null;
		}	
	}

	@RequestMapping(value = PathConstants.JJB_CONTROLLER_GET_DATA, method = RequestMethod.POST)
	@ResponseBody
	public JjbModel getLastSavedJJBData(@RequestBody Integer userId) {

		return jjbService.findLastSavedData(userId);

	}

}
