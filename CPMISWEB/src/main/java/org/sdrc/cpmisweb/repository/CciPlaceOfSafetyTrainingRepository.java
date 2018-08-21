package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciPlaceOfSafetyTraining;


public interface CciPlaceOfSafetyTrainingRepository {

	@Transactional
	Iterable<CciPlaceOfSafetyTraining> save(Iterable<CciPlaceOfSafetyTraining> cciPlaceOfSafetyTraining);
	
	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);

}
