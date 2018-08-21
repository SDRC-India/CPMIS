/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.saa.SaaSectionCChildDeatails;
import org.sdrc.cpmisweb.repository.SaaSectionCChildDeatailsRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 25-Dec-2017 1:21:43 pm
 *
 */
public interface SpringDataSaaSectionCChildDeatailsRepository extends SaaSectionCChildDeatailsRepository,Repository<SaaSectionCChildDeatails,Integer> {

	@Override
	@Modifying
	@Transactional
	@Query(value="delete from saa_sec_c_child_details td where td.saaseccchilddeatailsid not in(:remainingIds) and td.saa_details_id = :parentId", nativeQuery = true)
	void deleteBySecCChildDeatailsId(@Param(value = "remainingIds") List<Integer> remainingIds, @Param(value="parentId") Integer parentId);
}
