package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.CciPlaceOfSafetyTraining;
import org.sdrc.cpmisweb.repository.CciPlaceOfSafetyTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

public interface SpringDataCciPlaceOfSafetyTrainingRepository extends
		CciPlaceOfSafetyTrainingRepository,
		Repository<CciPlaceOfSafetyTraining, Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from cci_place_of_safety_training td where td.training_id not in(:remainingIds) and td.parent_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);

}
