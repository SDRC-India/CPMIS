/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionG;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:07:02 pm
 *
 */
public interface JjbSectionGRepository {

	@Transactional
	JjbSectionG save(JjbSectionG jjbSectionG);
	JjbSectionG findByJjbSectionGId(Integer id);
}
