package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcDetailsTraining;


public interface CwcDetailsTrainingRepository {

	@Transactional
	Iterable<CwcDetailsTraining> save(Iterable<CwcDetailsTraining> cwcDetailsTraining);

	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);
	
	/*@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);
*/
}
