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
import org.sdrc.cpmisweb.model.SjpuModel;
import org.sdrc.cpmisweb.service.SjpuService;
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

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 3:50:24 pm
 */
@Controller
public class SjpuController {
	
	@Autowired
	private StateManager stateManager;
	@Autowired
	private SjpuService sjpuService;
	@Autowired
	private UserService userService;
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value=PathConstants.SJPU_CONTROLLER_SAVE, method=RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> saveSJPU(@RequestBody SjpuModel sjpuModel){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			sjpuModel.setLive(true);
			sjpuService.save(sjpuModel);
			return null;
		}	
	}
	
	@RequestMapping(value=PathConstants.AUTO_SAVE_SJPU, method=RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> autoSaveSJPUMethod(@RequestBody SjpuModel sjpuModel,HttpServletRequest request, HttpServletResponse resp) throws ServletException{
			
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			sjpuModel.setLive(true);
			sjpuService.save(sjpuModel);
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
	@RequestMapping(value=PathConstants.SJPU_CONTROLLER_SUBMIT, method=RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> submitSJPU(@RequestBody SjpuModel sjpuModel){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			sjpuModel.setLive(false);
			sjpuModel.setSubmitted(true);
			sjpuModel.setDateOfSubmimission(new Date(new java.util.Date().getTime()));
			sjpuService.save(sjpuModel);
			return null;
		}	
	}
	
	@RequestMapping(value=PathConstants.SJPU_CONTROLLER_GET_DATA, method=RequestMethod.POST)
	@ResponseBody
	public SjpuModel getLastSavedSJPUData(@RequestBody Integer userId){
		return sjpuService.findLastSavedData(userId);
	}
}
