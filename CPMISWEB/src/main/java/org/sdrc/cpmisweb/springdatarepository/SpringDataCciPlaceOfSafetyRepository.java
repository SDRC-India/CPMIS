package org.sdrc.cpmisweb.springdatarepository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import org.sdrc.cpmisweb.domain.CciPlaceOfSafety;
import org.sdrc.cpmisweb.repository.CciPlaceOfSafetyRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataCciPlaceOfSafetyRepository extends CciPlaceOfSafetyRepository,Repository<CciPlaceOfSafety, Integer> {

	@Override
	@Query("select ccipos from CciPlaceOfSafety ccipos where ccipos.userId=:userId and ccipos.timeperiod="
			+ "(select max (ccipos.timeperiod) from CciPlaceOfSafety ccipos where ccipos.isSubmitted is true and ccipos.userId=:userId)")
	CciPlaceOfSafety findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from cci_place_of_safety where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
