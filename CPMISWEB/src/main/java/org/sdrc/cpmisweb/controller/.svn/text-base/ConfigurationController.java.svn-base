package org.sdrc.cpmisweb.controller;

import java.io.IOException;

import org.apache.poi.openxml4j.exceptions.InvalidFormatException;
import org.sdrc.cpmisweb.service.ConfigurationService;
import org.sdrc.cpmisweb.util.PathConstants;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller
public class ConfigurationController {

	@Autowired
	private ConfigurationService configurationService;


	@RequestMapping(value=PathConstants.READ_INSERT_DATA_FROM_EXCEL)
	@ResponseBody
	public boolean readAndInsertAgencyDataFromExcel() throws InvalidFormatException, IOException {
		try {
			return configurationService.readAndInsertDataFromExcelFileForAgency();
		} catch (Exception e) {
			e.printStackTrace();
		}
		return false;
	}
//

}
