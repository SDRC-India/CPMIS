package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionA;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:32:26 pm
 */
public interface SjpuSectionARepository {

	@Transactional
	SjpuSectionA save(SjpuSectionA jjbSectionA);
	SjpuSectionA findBySjpuSectionAId(Integer id);
}
