package org.sdrc.cpmisweb.springdatarepository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import org.sdrc.cpmisweb.domain.CciOH;
import org.sdrc.cpmisweb.repository.CciOHRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataCciOHRepository extends CciOHRepository,Repository<CciOH, Integer> {

	@Override
	@Query("select ccihome from CciOH ccihome where ccihome.userId=:userId and ccihome.timeperiod="
			+ "(select max (ccihome.timeperiod) from CciOH ccihome where ccihome.isSubmitted is true and ccihome.userId=:userId)")
	CciOH findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from cci_oh where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
