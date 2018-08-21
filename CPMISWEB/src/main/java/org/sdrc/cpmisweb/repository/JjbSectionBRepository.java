/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.jjb.JjbSectionB;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 23-Oct-2017 5:05:40 pm
 *
 */
public interface JjbSectionBRepository {

	@Transactional
	JjbSectionB save(JjbSectionB jjbSectionB);
	JjbSectionB findByJjbSectionBId(Integer id);
}
