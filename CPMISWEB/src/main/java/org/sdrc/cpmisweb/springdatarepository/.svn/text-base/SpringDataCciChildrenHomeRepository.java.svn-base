package org.sdrc.cpmisweb.springdatarepository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import org.sdrc.cpmisweb.domain.CciChildrenHome;
import org.sdrc.cpmisweb.repository.CciChildrenHomeRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataCciChildrenHomeRepository extends CciChildrenHomeRepository,Repository<CciChildrenHome, Integer> {

	@Override
	@Query("select ccich from CciChildrenHome ccich where ccich.userId=:userId and ccich.timeperiod="
			+ "(select max (ccich.timeperiod) from CciChildrenHome ccich where ccich.isSubmitted is true and ccich.userId=:userId)")
	CciChildrenHome findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from cci_children_home where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
