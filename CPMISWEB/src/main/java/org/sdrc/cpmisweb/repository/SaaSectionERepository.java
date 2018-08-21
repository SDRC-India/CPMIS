/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaSectionE;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:15:21 pm
 *
 */
public interface SaaSectionERepository {
	@Transactional
    SaaSectionE save(SaaSectionE saaSectionE);
    SaaSectionE findBySaaSectionEId(Integer id);
}
