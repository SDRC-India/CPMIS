package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.sjpu.SjpuTraining;
import org.sdrc.cpmisweb.repository.SJPUDetailsTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:28:08 pm
 */
public interface SpringDataSJPUDetailsTrainingRepository extends SJPUDetailsTrainingRepository, Repository<SjpuTraining, Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from sjpu_training st where st.training_id not in(:remainingIds) and st.parent_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);
}
