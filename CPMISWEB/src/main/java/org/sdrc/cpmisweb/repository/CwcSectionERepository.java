/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionE;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:01:33 pm
 *
 */
public interface CwcSectionERepository {

	@Transactional
	CwcSectionE save(CwcSectionE cwcSectionE);
	CwcSectionE findByCwcSectionEId(Integer id);
}
