/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.cwc.CwcSectionG;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 1:01:57 pm
 *
 */
public interface CwcSectionGRepository {

	@Transactional
	CwcSectionG save(CwcSectionG cwcSectionG);
	CwcSectionG findByCwcSectionGId(Integer id);

}
