/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionF;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:50:25 pm
 *
 */
public interface DCPUSectionFRepository {
	@Transactional
	DCPUSectionF save(DCPUSectionF dcpuSectionF);
	DCPUSectionF findByDcpuSectionFId(Integer id);
}
