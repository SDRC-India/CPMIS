package org.sdrc.cpmisweb.springdatarepository;

import java.sql.Timestamp;

import org.sdrc.cpmisweb.domain.UserLoginMeta;
import org.sdrc.cpmisweb.repository.UserLoginMetaRepository;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
* @author Prakash Sahoo(prakash@sdrc.co.in) Created on 21-04-2018 
* 
*/
public interface SpringDataUserLoginMetaRepository extends UserLoginMetaRepository, JpaRepository<UserLoginMeta, Integer> {


	@Override
	@Modifying 
	@Transactional
	@Query("UPDATE UserLoginMeta logInMeta SET logInMeta.loggedOutDateTime = :loggedOutDateTime , "
			+ "logInMeta.isLoggedIn =FALSE WHERE logInMeta.userLogInMetaId = :userLogInMetaId ")
	void updateStatus(@Param("loggedOutDateTime")Timestamp loggedOutDateTime, @Param("userLogInMetaId")long userLogInMetaId);
	
	@Override
	@Modifying 
	@Transactional
	@Query("UPDATE"
			+ " UserLoginMeta logInMeta SET "
			+ "logInMeta.loggedOutDateTime = :loggedOutDateTime , "
			+ "logInMeta.isLoggedIn =FALSE ")
	void updateStatusForAll(@Param("loggedOutDateTime")Timestamp loggedOutDateTime);
}
