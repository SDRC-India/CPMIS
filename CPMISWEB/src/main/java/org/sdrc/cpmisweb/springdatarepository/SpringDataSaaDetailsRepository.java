package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.saa.SaaDetails;
import org.sdrc.cpmisweb.repository.SaaDetailsRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 25-Dec-2017 1:19:10 pm
 */
public interface SpringDataSaaDetailsRepository  extends SaaDetailsRepository,Repository<SaaDetails,Integer> {
	
	@Override
	@Query("select saa from SaaDetails saa where saa.userId=:userId and saa.timeperiod="
			+ "(select max (saa.timeperiod) from SaaDetails saa where saa.isSubmitted is true and saa.userId=:userId)")
	SaaDetails findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from saa_details where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);

}
