/**
 * 
 */
package org.sdrc.cpmisweb.service;

import java.util.List;

import org.sdrc.cpmisweb.model.SubmissionReportModel;
import org.sdrc.cpmisweb.model.TimeperiodModel;
import org.sdrc.cpmisweb.model.UserTypeDomainModel;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 06-Mar-2018 5:53:20 pm
 */
public interface SubmissionReportService {

	public List<SubmissionReportModel> findSubmittedStatusOfLastMonthData();

	/**
	 * 
	 */
	public List<TimeperiodModel> getTimeperiod();
	public List<SubmissionReportModel> findSubmittedStatusData(Integer timeperiodId);
	public void aggregationSubmittedStatus();
	public List<UserTypeDomainModel> findAllInstitutionType();
}
