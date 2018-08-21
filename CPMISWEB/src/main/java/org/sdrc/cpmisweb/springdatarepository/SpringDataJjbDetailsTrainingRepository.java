package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.jjb.JjbDetailsTraining;
import org.sdrc.cpmisweb.repository.JjbDetailsTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

public interface SpringDataJjbDetailsTrainingRepository extends
JjbDetailsTrainingRepository, Repository<JjbDetailsTraining, Integer>  {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from jjb_details_training td where td.training_id not in(:remainingIds) and td.parent_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);

}
