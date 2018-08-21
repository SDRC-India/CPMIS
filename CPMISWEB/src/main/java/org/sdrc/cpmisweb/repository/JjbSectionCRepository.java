/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionC;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:05:49 pm
 *
 */
public interface JjbSectionCRepository {

	@Transactional
	JjbSectionC save(JjbSectionC jjbSectionC);
	JjbSectionC findByJjbSectionCId(Integer id);
}
