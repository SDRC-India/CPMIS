package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciChildrenHomeTraining;


public interface CciChildrenHomeTrainingRepository {


	@Transactional
	Iterable<CciChildrenHomeTraining> save(Iterable<CciChildrenHomeTraining> cciChildrenHomeTraining);

	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer id);
	
}
