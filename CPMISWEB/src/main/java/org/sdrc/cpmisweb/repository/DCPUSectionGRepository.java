/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionG;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:50:31 pm
 *
 */
public interface DCPUSectionGRepository {
	@Transactional
	DCPUSectionG save(DCPUSectionG dcpuSectionG);
	DCPUSectionG findByDcpuSectionGId(Integer id);
}
