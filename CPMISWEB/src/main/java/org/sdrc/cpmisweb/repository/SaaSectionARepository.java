/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaSectionA;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:14:33 pm
 *
 */
public interface SaaSectionARepository {
	@Transactional
    SaaSectionA save(SaaSectionA saaSectionA);
    SaaSectionA findBySaaSectionAId(Integer id);
}
