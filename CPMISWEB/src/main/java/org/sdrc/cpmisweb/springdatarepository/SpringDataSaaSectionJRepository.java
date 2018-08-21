/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.saa.SaaSectionJ;
import org.sdrc.cpmisweb.repository.SaaSectionJRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 25-Dec-2017 1:21:54 pm
 *
 */
public interface SpringDataSaaSectionJRepository extends SaaSectionJRepository,Repository<SaaSectionJ,Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from saa_section_j td where td.saasectionjid not in(:remainingIds) and td.saa_details_id = :parentId", nativeQuery = true)
	void deleteBySectionJId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);
}
