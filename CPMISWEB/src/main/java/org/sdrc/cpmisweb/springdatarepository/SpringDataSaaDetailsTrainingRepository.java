/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.saa.SaaDetailsTraining;
import org.sdrc.cpmisweb.repository.SaaDetailsTrainingRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:23:01 pm
 *
 */
public interface SpringDataSaaDetailsTrainingRepository extends SaaDetailsTrainingRepository,Repository<SaaDetailsTraining,Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from saa_details_training td where td.training_id not in(:remainingIds) and td.saa_details_id = :parentId", nativeQuery = true)
	void deleteByTrainingId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);
}
