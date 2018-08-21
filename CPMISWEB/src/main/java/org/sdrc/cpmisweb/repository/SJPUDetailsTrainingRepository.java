package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.sjpu.SjpuTraining;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:26:06 pm
 */
public interface SJPUDetailsTrainingRepository {

	@Transactional
	Iterable<SjpuTraining> save(Iterable<SjpuTraining> sjpuTraining);

	@Transactional
	void deleteByTrainingId(List<Integer> remainingIds, Integer id);
}
