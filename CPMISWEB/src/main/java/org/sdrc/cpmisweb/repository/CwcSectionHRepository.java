/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionH;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:02:06 pm
 *
 */
public interface CwcSectionHRepository {

	
	@Transactional
	CwcSectionH save(CwcSectionH cwcSectionH);
	CwcSectionH findByCwcSectionHId(Integer id);
}
