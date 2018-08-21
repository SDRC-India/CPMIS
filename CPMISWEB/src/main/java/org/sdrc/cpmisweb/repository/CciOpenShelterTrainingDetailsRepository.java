package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciOpenShelterTraining;

public interface CciOpenShelterTrainingDetailsRepository {

	@Transactional
	Iterable<CciOpenShelterTraining> save(Iterable<CciOpenShelterTraining> cciOpenShelterTraining);
	
	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);
}
