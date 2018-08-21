package org.sdrc.cpmisweb.service;

import java.sql.Timestamp;

import org.sdrc.cpmisweb.domain.UserLoginMeta;

/**
* @author Prakash Sahoo(prakash@sdrc.co.in) Created on 21-04-2018 
*
*/
public interface UserService {

	long saveUserLoginMeta(String ipAddress, Integer userId, String userAgent);

	void updateLoggedOutStatus(long userLoginMetaId, Timestamp loggedOutDateTime);

	UserLoginMeta findActiveUserLoginMeta(Integer userId);
	
	Long findByUserId(Integer userId);
	
	public Long findByUserIdAndLoginMetaId(Integer userId,long loginMetaId);


}
