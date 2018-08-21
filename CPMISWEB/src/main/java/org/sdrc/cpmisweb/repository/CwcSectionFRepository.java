/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionF;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:01:46 pm
 *
 */
public interface CwcSectionFRepository {
	
	@Transactional
	CwcSectionF save(CwcSectionF cwcSectionF);
	CwcSectionF findByCwcSectionFId(Integer id);

}
