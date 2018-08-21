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
import org.sdrc.cpmisweb.model.CciOHModel;
import org.sdrc.cpmisweb.service.CciOHService;
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
public class CciOHController {
	
	@Autowired
	private StateManager stateManager;
	@Autowired
	CciOHService cciHomeService;
	@Autowired
	private UserService userService;

	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value =PathConstants.CCI_OBSERVTION_HOME_CONTROLLER_SAVE, method = RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> saveCciHome(@RequestBody CciOHModel cciHomeModel) {
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			cciHomeModel.setLive(true);
			cciHomeService.save(cciHomeModel);
			return null;
		}	
	}
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value =PathConstants.AUTO_SAVE_CCIOH, method = RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> autoSaveCciHomeMethod(@RequestBody CciOHModel cciHomeModel,HttpServletRequest request, HttpServletResponse resp) throws ServletException{
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			cciHomeModel.setLive(true);
			cciHomeService.save(cciHomeModel);
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
				request.logout();
			}
			return null;
		}
	}
	
	@Authorize(feature="data_entry",permission="edit")
	@RequestMapping(value = PathConstants.CCI_OBSERVTION_HOME_CONTROLLER_SUBMIT, method = RequestMethod.POST)
	@ResponseBody
	public ResponseEntity<Object> submitCciHome(@RequestBody CciOHModel cciHomeModel) {
		if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
			return new ResponseEntity<Object>(HttpStatus.TEMPORARY_REDIRECT);
		}else{
			cciHomeModel.setLive(false);
			cciHomeModel.setSubmitted(true);
			cciHomeModel.setDateOfSubmimission(new Date());
			cciHomeService.save(cciHomeModel);
			return null;
		}	
	}
	@RequestMapping(value =PathConstants.CCI_OBSERVTION_HOME_CONTROLLER_GET_DATA, method = RequestMethod.POST)
	@ResponseBody
	public CciOHModel getLastSavedCciHomeData(@RequestBody Integer userId) {

		return cciHomeService.findLastSavedData(userId);

	}

}
