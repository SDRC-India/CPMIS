package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.sjpu.SjpuSectionE;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 02-Nov-2017 4:40:59 pm
 */
public interface SjpuSectionERepository {

	@Transactional
	SjpuSectionE save(SjpuSectionE jjbSectionE);
	SjpuSectionE findBySjpuSectionEId(Integer id);
}
