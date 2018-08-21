/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.dcpu.DcpuDetails;
import org.sdrc.cpmisweb.repository.DcpuDetailsRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 3:08:04 pm
 *
 */
public interface SpringDataDcpuDetailsRepository extends DcpuDetailsRepository,Repository<DcpuDetails, Integer>{

	@Override
	@Query("select dd from DcpuDetails dd where dd.userId=:userId and dd.timeperiod="
			+ "(select max (dd.timeperiod) from DcpuDetails dd where dd.isSubmitted is true and dd.userId=:userId)")
	DcpuDetails findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from dcpu_details where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
