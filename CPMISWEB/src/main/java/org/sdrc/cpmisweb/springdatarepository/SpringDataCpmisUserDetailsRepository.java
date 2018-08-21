/**
 * 
 */
package org.sdrc.cpmisweb.springdatarepository;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.repository.CpmisUserDetailsRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.Repository;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Pratyush Kumar Rath
 * 28-Dec-2017 6:04:40 pm
 *
 */
public interface SpringDataCpmisUserDetailsRepository extends CpmisUserDetailsRepository, Repository<CPMISUserDetails, Integer>{

	@Override
	@Modifying
	@Transactional
	@Query("update CPMISUserDetails set password=:newPassword where userId=:userId")
	void changePassword(@Param(value="userId") Integer userId, @Param(value="newPassword") String newPassword);
	
	
	@Override
	@Modifying
	@Transactional
	@Query("update CPMISUserDetails set password=:password where userId=:userId and userName=:userName")
	void updateUserPassword(@Param(value="userId") Integer userId, @Param(value="userName") String userName, @Param(value="password") String password);
	
	
	@Override
	@Transactional
	@Modifying
	@Query("UPDATE CPMISUserDetails user SET user.password = :password WHERE user.userId = :userId")
	void updateByUserId(@Param("userId") Integer userId, @Param("password") String password);
}
