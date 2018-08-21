/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUDetailsTraining;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 7:18:14 pm
 *
 */
public interface DCPUDetailsTrainingRepository {

	@Transactional
	Iterable<DCPUDetailsTraining> save(Iterable<DCPUDetailsTraining> dcpuDetailsTraining);

	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);
	
}
