package org.sdrc.cpmisweb.service;

import org.sdrc.cpmisweb.domain.CPMISUserDetails;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.repository.LoginRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class LoginServiceImpl implements LoginService {

	@Autowired
	LoginRepository loginRepository;
	
	@Override
	public UserModel findByPasswordAndUsername(String userName, String password) {
		CPMISUserDetails user = loginRepository.findByPasswordAndUsername(userName, password);
		UserModel userModel = new UserModel();
		if(user != null){
			userModel.setUserId(user.getUserId());
			userModel.setUserName(user.getUserName());
			userModel.setPassword(user.getPassword());
			userModel.setEmilId(user.getEmailId());
			userModel.setUserTypeId(user.getUserTypeId().getUserTypeId());
			userModel.setViewName(user.getUserTypeId().getScreenName());
			userModel.setSjpuAccess(user.getSjpuAccess());
			userModel.setArea(user.getArea());
			userModel.setIsActive(user.getIsActive());
			userModel.setIsApproved(user.getIsApproved());
			userModel.setIsLive(user.getIsLive());
			return userModel;
		}else{
			return null;
		}
	}

}
