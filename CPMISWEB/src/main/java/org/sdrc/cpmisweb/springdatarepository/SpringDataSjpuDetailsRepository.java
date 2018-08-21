package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.sjpu.SjpuDetails;
import org.sdrc.cpmisweb.repository.SjpuDetailsRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:21:48 pm
 */
public interface SpringDataSjpuDetailsRepository extends SjpuDetailsRepository,Repository<SjpuDetails, Integer> {

	@Override
	@Query(value="select max (timeperiod_id_fk) from sjpu_details where userid=:userId", nativeQuery=true)
	Integer findMaxTimePeriod(@Param("userId") int userId);
}
