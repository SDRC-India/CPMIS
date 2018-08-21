/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionC;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:00:37 pm
 *
 */
public interface CwcSectionCRepository {
	
	@Transactional
	CwcSectionC save(CwcSectionC cwcSectionC);
	CwcSectionC findByCwcSectionCId(Integer id);
}
