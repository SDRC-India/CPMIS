/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionB;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:49:40 pm
 *
 */
public interface DCPUSectionBRepository {
	@Transactional
	DCPUSectionB save(DCPUSectionB dcpuSectionB);
	DCPUSectionB findByDcpuSectionBId(Integer id);
}
