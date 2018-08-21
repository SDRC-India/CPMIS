package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.CciChildrenHomeTraining;
import org.sdrc.cpmisweb.repository.CciChildrenHomeTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

public interface SpringDataCciChildrenHomeTrainingRepository extends
CciChildrenHomeTrainingRepository,Repository<CciChildrenHomeTraining, Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from cci_children_home_training td where td.training_id not in(:remainingIds) and td.parent_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);

}
