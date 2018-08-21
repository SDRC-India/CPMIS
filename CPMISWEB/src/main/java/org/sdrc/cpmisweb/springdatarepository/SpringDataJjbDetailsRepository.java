package org.sdrc.cpmisweb.springdatarepository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import org.sdrc.cpmisweb.domain.jjb.JjbDetails;
import org.sdrc.cpmisweb.repository.JjbDetailsRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataJjbDetailsRepository extends JjbDetailsRepository,Repository<JjbDetails, Integer>{
	
	@Override
	@Query("select jd from JjbDetails jd where jd.userId=:userId and jd.timeperiod="
			+ "(select max (jd.timeperiod) from JjbDetails jd where jd.isSubmitted is true and jd.userId=:userId)")
	JjbDetails findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from jjb_details where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
