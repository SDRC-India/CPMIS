/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.CciSHTraining;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 08-Mar-2018 5:19:27 pm
 */
public interface CciSHTrainingRepository {

	@Transactional
	Iterable<CciSHTraining> save(Iterable<CciSHTraining> cciHomeTraining);
	
	@Transactional
	void deleteByTrainingIdNotInAndHomeIdId(List<Integer> remainingIds, Integer parentId);
}
