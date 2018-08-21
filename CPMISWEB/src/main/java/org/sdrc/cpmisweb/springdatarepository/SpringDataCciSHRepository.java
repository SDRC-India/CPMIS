package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.CciSH;
import org.sdrc.cpmisweb.repository.CciSHRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 08-Mar-2018 5:21:36 pm
 */
public interface SpringDataCciSHRepository extends CciSHRepository,Repository<CciSH, Integer> {

	@Override
	@Query("select ccihome from CciSH ccihome where ccihome.userId=:userId and ccihome.timeperiod="
			+ "(select max (ccihome.timeperiod) from CciSH ccihome where ccihome.isSubmitted is true and ccihome.userId=:userId)")
	CciSH findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from cci_sh where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
