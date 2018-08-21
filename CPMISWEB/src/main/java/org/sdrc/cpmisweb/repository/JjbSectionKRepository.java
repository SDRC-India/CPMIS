/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionK;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:07:51 pm
 *
 */
public interface JjbSectionKRepository {

	@Transactional
	JjbSectionK save(JjbSectionK jjbSectionK);
	JjbSectionK findByJjbSectionKId(Integer id);
}
