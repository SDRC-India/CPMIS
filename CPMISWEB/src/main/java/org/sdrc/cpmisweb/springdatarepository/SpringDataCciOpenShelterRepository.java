package org.sdrc.cpmisweb.springdatarepository;
/**
 * @author Pratyush(pratyush@sdrc.co.in)
 */
import org.sdrc.cpmisweb.domain.CciOpenShelter;
import org.sdrc.cpmisweb.repository.CciOpenShelterRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

public interface SpringDataCciOpenShelterRepository extends	CciOpenShelterRepository,Repository<CciOpenShelter,Integer> {

	@Override
	@Query("select ccios from CciOpenShelter ccios where ccios.userId=:userId and ccios.timeperiod="
			+ "(select max (ccios.timeperiod) from CciOpenShelter ccios where ccios.isSubmitted is true and ccios.userId=:userId)")
	CciOpenShelter findLastReportingMonthSubmissionData(@Param(value="userId") Integer userId);
	
	@Override
	@Query(value="select max (timeperiod_id_fk) from cci_open_shelter where user_id=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
