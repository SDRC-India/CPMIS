/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.dcpu.DCPUDetailsTraining;
import org.sdrc.cpmisweb.repository.DCPUDetailsTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Biswa Ranjan CPMISWEB , Pratyush
 * 06-Nov-2017 7:20:27 pm
 *
 */
public interface SpringDataDCPUDetailsTrainingRepository extends DCPUDetailsTrainingRepository,Repository<DCPUDetailsTraining, Integer>{

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from dcpu_details_training td where td.training_id not in(:remainingIds) and td.parent_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);
}
