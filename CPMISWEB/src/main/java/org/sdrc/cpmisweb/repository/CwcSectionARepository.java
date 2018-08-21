/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionA;


/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:00:12 pm
 *
 */
public interface CwcSectionARepository {
	
	@Transactional
	CwcSectionA save(CwcSectionA cwcSectionA);
	CwcSectionA findByCwcSectionAId(Integer id);
}
