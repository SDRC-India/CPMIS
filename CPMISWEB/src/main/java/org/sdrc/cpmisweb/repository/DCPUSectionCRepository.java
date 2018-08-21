/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionC;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:49:52 pm
 *
 */
public interface DCPUSectionCRepository {
	@Transactional
	DCPUSectionC save(DCPUSectionC dcpuSectionC);
	DCPUSectionC findByDcpuSectionCId(Integer id);
}
