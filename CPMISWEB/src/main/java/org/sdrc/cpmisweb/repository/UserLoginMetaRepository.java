package org.sdrc.cpmisweb.repository;

import java.sql.Timestamp;

import org.sdrc.cpmisweb.domain.UserLoginMeta;



/**
 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 21-04-2018 
 *
 */
public interface UserLoginMetaRepository 
{
	

	UserLoginMeta save(UserLoginMeta userLoginMeta);

	void updateStatus(Timestamp loggedOutDateTime, long userLogInMetaId);
	
	UserLoginMeta findByCpmisUserUserIdAndIsLoggedInTrue(Integer userId);
	
	UserLoginMeta findByCpmisUserUserIdAndUserLogInMetaIdAndIsLoggedInTrue(Integer userId,long userLogInMetaId);

	void updateStatusForAll(Timestamp loggedOutDateTime);
}
