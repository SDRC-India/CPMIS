/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaSectionD;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:15:11 pm
 *
 */
public interface SaaSectionDRepository {

	@Transactional
    SaaSectionD save(SaaSectionD saaSectionD);
    SaaSectionD findBySaaSectionDId(Integer id);
}
