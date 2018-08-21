package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.cwc.CwcDetailsTraining;
import org.sdrc.cpmisweb.repository.CwcDetailsTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

public interface SpringDataCwcDetailsTrainingRepository extends
CwcDetailsTrainingRepository, Repository<CwcDetailsTraining, Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from cwc_details_training td where td.training_id not in(:remainingIds) and td.parent_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);
}
