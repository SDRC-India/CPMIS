package org.sdrc.cpmisweb.service;

import java.util.List;
import java.util.Map;

import org.json.simple.JSONObject;
import org.sdrc.cpmisweb.model.AreaModel;
import org.sdrc.cpmisweb.model.DistrictCciNameListModel;
import org.sdrc.cpmisweb.model.Error;
import org.sdrc.cpmisweb.model.ForgotPasswordModel;
import org.sdrc.cpmisweb.model.ResetPasswordModel;
import org.sdrc.cpmisweb.model.TypeDetailsModel;

public interface WebService {

	public List<AreaModel> getAreas();

	public Map<String, List<TypeDetailsModel>> getTypeDetails();
	
	public AreaModel getUserArea();
	
	public DistrictCciNameListModel getCciNameList();
	
	public Error changePassword(String currentPw, String newPw);
	
	public ForgotPasswordModel forgotPassword(String email);
	
	ResetPasswordModel resetPassword(String ecrypt);
	
	public Error changeForgotPassword(JSONObject passwordModel);

	public boolean configureIndicatorsUnitSubgroups();
	
	public JSONObject getReportdata(Integer indicatorId, Integer timeperiodId);
	
	public boolean configureUsers();
	
	public boolean importExcelForIndicatorHighIsGood();
}
