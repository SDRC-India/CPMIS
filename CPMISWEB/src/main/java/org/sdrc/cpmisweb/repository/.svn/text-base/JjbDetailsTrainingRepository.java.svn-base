package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbDetailsTraining;


public interface JjbDetailsTrainingRepository {

	@Transactional
	Iterable<JjbDetailsTraining> save(Iterable<JjbDetailsTraining> jjbDetailsTraining);

	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer id);
	
/*	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);*/

}
