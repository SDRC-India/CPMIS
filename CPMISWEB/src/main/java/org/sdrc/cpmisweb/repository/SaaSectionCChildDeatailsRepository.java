/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaSectionCChildDeatails;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:16:08 pm
 *
 */
public interface SaaSectionCChildDeatailsRepository {

	@Transactional
    Iterable<SaaSectionCChildDeatails> save(Iterable<SaaSectionCChildDeatails> saaSectionCChildDeatails);

	@Transactional
	void deleteBySecCChildDeatailsId(List<Integer> remainingIds, Integer parentId);
}
