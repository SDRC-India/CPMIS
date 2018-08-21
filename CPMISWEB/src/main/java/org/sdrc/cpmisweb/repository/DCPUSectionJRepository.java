/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionJ;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:50:54 pm
 *
 */
public interface DCPUSectionJRepository {
	@Transactional
	DCPUSectionJ save(DCPUSectionJ dcpuSectionJ);
	DCPUSectionJ findByDcpuSectionJId(Integer id);
}
