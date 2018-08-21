package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciOHTraining;


public interface CciOHTrainingRepository {


	@Transactional
	Iterable<CciOHTraining> save(Iterable<CciOHTraining> cciHomeTraining);
	
/*	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);*/
	
	@Transactional
	void deleteByTrainingIdNotInAndHomeIdId(List<Integer> remainingIds, Integer parentId);
}
