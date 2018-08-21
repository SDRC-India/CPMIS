/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionJ;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:07:42 pm
 *
 */
public interface JjbSectionJRepository {

	@Transactional
	JjbSectionJ save(JjbSectionJ jjbSectionJ);
	JjbSectionJ findByJjbSectionJId(Integer id);
}
