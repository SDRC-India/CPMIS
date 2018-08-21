/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 7:32:34 pm
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.SubmissionStatusReportDomain;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 7:32:34 pm
 */
public interface SubmissionStatusReportDomainRepository {

	public List<SubmissionStatusReportDomain> findByTimeperiodIdOrderByDistrictNameAscUserTypeIdAsc(Integer timeperiodId);
	
	public List<SubmissionStatusReportDomain> findByTimeperiodIdAndUserTypeIdIsNotOrderByDistrictNameAscUserTypeIdAsc(Integer timeperiodId,Integer userTypeId);
	
	void save(SubmissionStatusReportDomain submissionStatusReportDomain);
}
