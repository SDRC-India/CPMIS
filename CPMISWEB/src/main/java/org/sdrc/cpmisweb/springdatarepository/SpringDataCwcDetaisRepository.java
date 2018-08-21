package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.cwc.CwcDetails;
import org.sdrc.cpmisweb.repository.CwcDetailsRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataCwcDetaisRepository extends CwcDetailsRepository,Repository<CwcDetails, Integer> {

//	@Override
//	@Query("select cd from CwcDetails cd where cd.userId=:userId and cd.dateOfSubmimission="
//			+ "(select max (cd.dateOfSubmimission) from CwcDetails cd where cd.isSubmitted is true and cd.userId=:userId)")
//	CwcDetails findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query("select cd from CwcDetails cd where cd.userId=:userId and cd.timeperiod="
			+ "(select max (cd.timeperiod) from CwcDetails cd where cd.isSubmitted is true and cd.userId=:userId)")
	CwcDetails findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from cwc_details where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
