/**
 * 
 */
package org.sdrc.cpmisweb.repository;

import java.util.List;

import javax.transaction.Transactional;

import org.sdrc.cpmisweb.domain.saa.SaaDetailsTraining;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:17:50 pm
 *
 */
public interface SaaDetailsTrainingRepository {
	@Transactional
    Iterable<SaaDetailsTraining> save(Iterable<SaaDetailsTraining> saaDetailsTraining);

    @Transactional
    void deleteByTrainingId(List<Integer> remainingIds, Integer parentId);
    
}
