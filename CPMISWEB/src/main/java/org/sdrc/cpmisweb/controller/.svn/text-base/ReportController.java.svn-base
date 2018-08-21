package org.sdrc.cpmisweb.controller;

import java.util.ArrayList;
import java.util.List;

import javax.servlet.http.HttpServletRequest;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.sdrc.cpmisweb.model.ValueObject;
import org.sdrc.cpmisweb.service.ReportService;
import org.sdrc.cpmisweb.service.WebService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 15-Mar-2018 6:14:02 pm
 */
@Controller
public class ReportController {
	
	@Autowired
	ReportService reportService;
	
	@Autowired
	WebService webService;

	@RequestMapping(value = { "getSectorsForReport" }, method = { RequestMethod.GET })
	@ResponseBody
	public JSONArray fetchAllSectors() throws Exception {
		return reportService.fetchAllSectors();
	}
	
	@RequestMapping(value = { "getIndicatorsForReport" }, method = { RequestMethod.GET })
	@ResponseBody
	public List<ValueObject> fetchIndicators(@RequestParam(required = false) String sector, HttpServletRequest re) throws Exception {
		List<ValueObject> valueObjects = new ArrayList<>();
		if (sector != null) {
			valueObjects = reportService.fetchIndicatorsForReport(sector);
		}
		return valueObjects;
	}
	
	@RequestMapping(value = { "getTimeperiodForReport" }, method = { RequestMethod.GET })
	@ResponseBody
	public List<ValueObject> fetchUtTimeperiod(@RequestParam(required = false) String iusnid, @RequestParam(required = false) String sourceNid) throws Exception {

		List<ValueObject> valueObjects = new ArrayList<>();
		valueObjects = reportService.fetchTimeperiodForReport();

		return valueObjects;
	}
	
	@RequestMapping(value ="getReports", method = RequestMethod.GET)
	@ResponseBody
	public JSONObject getReports(@RequestParam Integer indicatorId, Integer timeperiodId) {
		
		return webService.getReportdata(indicatorId, timeperiodId);
	}
}
