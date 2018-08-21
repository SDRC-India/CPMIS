package org.sdrc.cpmisweb.service;

import java.sql.Timestamp;
import java.util.Date;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.domain.UserLoginMeta;
import org.sdrc.cpmisweb.repository.AreaRepository;
import org.sdrc.cpmisweb.repository.CpmisUserDetailsRepository;
import org.sdrc.cpmisweb.repository.UserLoginMetaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.security.authentication.encoding.MessageDigestPasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 21-04-2018 
 *         all the methods related to user / login
 */
@Service
public class UserServiceImpl implements UserService {

	@Autowired
	private CpmisUserDetailsRepository mSTUserRepository;

	@Autowired
	private AreaRepository areaRepository;

	@Autowired
	private UserLoginMetaRepository userLoginMetaRepository;

	@Autowired
	private MessageDigestPasswordEncoder passwordEncoder;
	
	@Autowired
	private ResourceBundleMessageSource applicationMessageSource;
	
	// save login meta of user log txn
	@Override
	@Transactional
	public long saveUserLoginMeta(String ipAddress, Integer userId, String userAgent) 
	{
		UserLoginMeta userLoginMeta = new UserLoginMeta();
		userLoginMeta.setUserIpAddress(ipAddress);
		CPMISUserDetails user=new CPMISUserDetails();
		user.setUserId(userId);
		userLoginMeta.setCpmisUser(user);
		userLoginMeta.setLoggedInDateTime(new Timestamp(new Date().getTime()));
		userLoginMeta.setUserAgent(userAgent);
		userLoginMeta.setLoggedIn(true);
		return userLoginMetaRepository.save(userLoginMeta).getUserLogInMetaId();
	}

	// update login meta while signing out
	@Override
	@Transactional
	public void updateLoggedOutStatus(long userLoginMetaId, Timestamp loggedOutDateTime) {

		// while server start up
		if (userLoginMetaId == -1) {
			userLoginMetaRepository.updateStatusForAll(loggedOutDateTime);
		} else
			userLoginMetaRepository.updateStatus(loggedOutDateTime, userLoginMetaId);
	}

	@Override
	public UserLoginMeta findActiveUserLoginMeta(Integer userId) {
		return userLoginMetaRepository.findByCpmisUserUserIdAndIsLoggedInTrue(userId);
	}
	
	@Override
	public Long findByUserId(Integer userId){
		UserLoginMeta ulm = userLoginMetaRepository.findByCpmisUserUserIdAndIsLoggedInTrue(userId);
		return ulm!=null ? ulm.getUserLogInMetaId() : null;
	}
	@Override
	public Long findByUserIdAndLoginMetaId(Integer userId,long loginMetaId){
		UserLoginMeta ulm = userLoginMetaRepository.findByCpmisUserUserIdAndUserLogInMetaIdAndIsLoggedInTrue(userId,loginMetaId);
		return ulm!=null ? ulm.getUserLogInMetaId() : null;
	}
	
	
	

}
