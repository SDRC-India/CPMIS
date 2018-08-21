/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 7:33:01 pm
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.SubmissionStatusReportDomain;
import org.sdrc.cpmisweb.repository.SubmissionStatusReportDomainRepository;
import org.springframework.data.repository.Repository;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 7:33:01 pm
 */
public interface SpringDataSubmissionStatusReportDomainRepository extends SubmissionStatusReportDomainRepository,Repository<SubmissionStatusReportDomain, Integer>{

}
