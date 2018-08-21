/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.dcpu.DCPUSectionI;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Nov-2017 2:50:46 pm
 *
 */
public interface DCPUSectionIRepository {
	@Transactional
	DCPUSectionI save(DCPUSectionI dcpuSectionI);
	DCPUSectionI findByDcpuSectionIId(Integer id);
}
