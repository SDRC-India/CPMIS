/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionO;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 6:16:28 pm
 *
 */
public interface DCPUSectionORepository {

	@Transactional
	DCPUSectionO save(DCPUSectionO dcpuSectionO);
	DCPUSectionO findByDcpuSectionOId(Integer id);
}
