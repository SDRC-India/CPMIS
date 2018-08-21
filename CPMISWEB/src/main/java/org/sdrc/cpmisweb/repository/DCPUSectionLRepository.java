/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionL;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:51:11 pm
 *
 */
public interface DCPUSectionLRepository {
	@Transactional
	DCPUSectionL save(DCPUSectionL dcpuSectionL);
	DCPUSectionL findByDcpuSectionLId(Integer id);
}
