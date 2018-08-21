/**
 * 
 */
package org.sdrc.cpmisweb.controller;

import java.sql.Timestamp;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.sdrc.core.Authorize;
import org.sdrc.cpmisweb.job.MonthlyAggregationJob;
import org.sdrc.cpmisweb.job.QuaterlyAggreationJob;
import org.sdrc.cpmisweb.model.DcpuModel;
import org.sdrc.cpmisweb.service.DcpuService;
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
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:54:34 pm
 *
 */
@Controller
public class DcpuController {

	@Autowired
	private StateManager stateManager;
	@Autowired
	DcpuService dcpuService;
	@Autowired
	private UserService userService;
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value=PathConstants.DCPU_CONTROLLER_SAVE, method=RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> saveDCPU(@RequestBody DcpuModel dcpuModel){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			dcpuModel.setLive(true);
			dcpuService.save(dcpuModel);
			return null;
		}	
	}
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value=PathConstants.AUTO_SAVE_DCPU, method=RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> autoSaveDCPUMethod(@RequestBody DcpuModel dcpuModel,HttpServletRequest request, HttpServletResponse resp) throws ServletException{
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			dcpuModel.setLive(true);
			dcpuService.save(dcpuModel);
			HttpSession session=request.getSession(false);
			if(session !=null)
			{
				//Updating logout information to login meta data table
				Long  userLoginMetaId = (Long) stateManager.getValue(Constant.LOGIN_META_ID);
				if(userLoginMetaId != null)
				{
					userService.updateLoggedOutStatus(userLoginMetaId,  new Timestamp(new Date().getTime()));
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
	@RequestMapping(value=PathConstants.DCPU_CONTROLLER_SUBMIT, method=RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> submitDCPU(@RequestBody DcpuModel dcpuModel){
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			dcpuModel.setLive(false);
			dcpuModel.setSubmitted(true);
			dcpuModel.setDateOfSubmimission(new Date());
			dcpuService.save(dcpuModel);
			return null;
		}	
	}
	
	@RequestMapping(value=PathConstants.DCPU_CONTROLLER_GET_DATA, method=RequestMethod.POST)
	@ResponseBody
	public DcpuModel getLastSavedData(@RequestBody Integer userId){
		return dcpuService.findLastSavedData(userId);
		
	}
}
