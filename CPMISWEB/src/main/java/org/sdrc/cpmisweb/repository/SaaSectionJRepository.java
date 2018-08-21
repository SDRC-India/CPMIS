/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaSectionJ;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:16:20 pm
 *
 */
public interface SaaSectionJRepository {

	@Transactional
    Iterable<SaaSectionJ> save(Iterable<SaaSectionJ> saaSectionJ);
	
	@Transactional
	void deleteBySectionJId(List<Integer> remainingIds, Integer parentId);

}
