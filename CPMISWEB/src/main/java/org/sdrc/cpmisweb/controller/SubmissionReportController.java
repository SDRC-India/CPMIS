/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 06-Mar-2018 5:57:46 pm
 */
package org.sdrc.cpmisweb.controller;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.sdrc.cpmisweb.model.SubmissionReportModel;
import org.sdrc.cpmisweb.model.TimeperiodModel;
import org.sdrc.cpmisweb.model.UserTypeDomainModel;
import org.sdrc.cpmisweb.service.SubmissionReportService;
import org.sdrc.cpmisweb.util.PathConstants;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 06-Mar-2018 5:57:46 pm
 */
@Controller
public class SubmissionReportController {

	@Autowired
	SubmissionReportService submissionReportService; 
	
	@RequestMapping(value =PathConstants.STATUS_REPORT_SUBMISSIONREPORT)
	@ResponseBody
	public List<SubmissionReportModel> findSubmissionStatusLastMonth() {
		
		return submissionReportService.findSubmittedStatusOfLastMonthData();
	}
	
	@RequestMapping(value =PathConstants.STATUS_REPORT_SUBMISSIONREPORT_TIMEPERIOD)
	@ResponseBody
	public List<SubmissionReportModel> findSubmissionStatusTimeperiod(@RequestParam Integer timeperiodId) {
		if(timeperiodId==0){
			return submissionReportService.findSubmittedStatusOfLastMonthData();
		}
		else{
			return submissionReportService.findSubmittedStatusData(timeperiodId);
		}
	}

	@RequestMapping(value =PathConstants.STATUS_REPORT_TIMEPERIOD)
	@ResponseBody
	public List<TimeperiodModel> findTimeperiod() {
		return	submissionReportService.getTimeperiod();
	}
	
	@RequestMapping(value =PathConstants.STATUS_REPORT_STATUS_INSTITUTION_TYPE)
	@ResponseBody
	public List<UserTypeDomainModel> findInstitutionType() {
		return	submissionReportService.findAllInstitutionType();
	}
	
	@RequestMapping(value =PathConstants.STATUS_REPORT_CURRENT_MONTH_STATUS)
	@ResponseBody
	public Map<String,Object> getCurrentMonthStatusMethod() {
		Map<String, Object> modelMap = new HashMap<String, Object>();
		modelMap.put("dataJson", submissionReportService.findSubmittedStatusOfLastMonthData());
		modelMap.put("timeperiodJson", submissionReportService.getTimeperiod());
		modelMap.put("instituteTypeJson", submissionReportService.findAllInstitutionType());
		return modelMap;
	}

}
