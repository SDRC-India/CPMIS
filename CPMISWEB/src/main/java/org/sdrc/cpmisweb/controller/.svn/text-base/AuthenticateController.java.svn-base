package org.sdrc.cpmisweb.controller;

import java.io.IOException;

import javax.servlet.http.HttpServletRequest;

import org.sdrc.cpmisweb.domain.UserLoginMeta;
import org.sdrc.cpmisweb.job.MonthlyAggregationJob;
import org.sdrc.cpmisweb.job.QuaterlyAggreationJob;
import org.sdrc.cpmisweb.model.Error;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.service.LoginService;
import org.sdrc.cpmisweb.service.UserService;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.DuplicateLoginUserException;
import org.sdrc.cpmisweb.util.PathConstants;
import org.sdrc.cpmisweb.util.StateManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.authentication.AuthenticationProvider;
import org.springframework.security.authentication.BadCredentialsException;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.AuthenticationException;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.web.authentication.WebAuthenticationDetails;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

@Controller
public class AuthenticateController implements AuthenticationProvider {

	@Autowired
	LoginService loginService;
	
	private StateManager stateManager;
	
	@Autowired
	private UserService userService;
	
	@Autowired
	public AuthenticateController(StateManager stateManager) {
		this.stateManager=stateManager;	
	}
	
	
	/**
	 * Updated by Prakash Sahoo(prakash@sdrc.co.in) on 21-04-2018 
	 *  
	 * Adding catch block to handled DuplicateLoginUserException
	 */
	@RequestMapping(value=PathConstants.AUTH_CONTROLLER_UA, method=RequestMethod.POST)
	@ResponseBody
	public Error authorize(HttpServletRequest request, RedirectAttributes redirectAttributes,@RequestBody UserModel usermodel, Model model) throws IOException
	{
		
		Error error = new Error();
		UserModel user_Model = loginService.findByPasswordAndUsername(usermodel.getUserName(), usermodel.getPassword());
		String username = usermodel.getUserName();
		String password = usermodel.getPassword();
		
		try {
			if(QuaterlyAggreationJob.isAggregationGoingOn || MonthlyAggregationJob.isAggregationGoingOn){
				error.setErrorCode("307");
				error.setErrorMessage("server_busy");
				error.setHasError(true);
				
				return error;
			}
			if(null != user_Model && user_Model.getIsActive()){
				usermodel.setEmilId(user_Model.getEmilId());
				usermodel.setUserTypeId(user_Model.getUserTypeId());
				usermodel.setUserId(user_Model.getUserId());
				usermodel.setViewName(user_Model.getViewName());
				
				UsernamePasswordAuthenticationToken token=new UsernamePasswordAuthenticationToken(username, password);
				token.setDetails(new WebAuthenticationDetails(request));
				Authentication authentication=this.authenticate(token);
				SecurityContextHolder.getContext().setAuthentication(authentication);
				error.setErrorCode("200");
				error.setErrorMessage("Success");
				error.setHasError(false);
				
				return error;
			}else{
				SecurityContextHolder.getContext().setAuthentication(null);
				error.setErrorCode("500");
				error.setErrorMessage(Constant.INVALID_CREDENTIALS);
				error.setHasError(true);
				return error;
			}
		} 
		catch (DuplicateLoginUserException e) {
			error.setErrorCode("401");
			error.setErrorMessage(e.getMessage());
			error.setHasError(true);
			SecurityContextHolder.getContext().setAuthentication(null);
			return error;
		}
		catch (Exception e) {
			error.setErrorCode("500");
			error.setErrorMessage(e.getMessage());
			error.setHasError(true);
			return error;
		}
	}
	/**
	 * Updated by Prakash Sahoo(prakash@sdrc.co.in) on 21-04-2018 
	 *  
	 * Adding statements 
	 * to check if user is already logged-in in any other system, then restrict, 
	 * to save login metadata information, 
	 * to set loginMetaId to the session
	 */
	@Override
	public Authentication authenticate(Authentication authentication) throws AuthenticationException 
	{
		UserModel user = new UserModel();
		UserModel userModel = loginService.findByPasswordAndUsername(authentication.getName(), authentication.getCredentials().toString());
		
		if(!authentication.getName().equals(userModel.getUserName()) || !authentication.getCredentials().toString().equals(userModel.getPassword()))	
			throw new BadCredentialsException(Constant.INVALID_USERS);
		
		ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder.currentRequestAttributes();
		HttpServletRequest request = attr.getRequest();
		String ipAddress = getIpAddr(request);
		
		//if user is already logged-in in any other system, then restrict
		UserLoginMeta userMeta=userService.findActiveUserLoginMeta(userModel.getUserId());
		if(null != userMeta)
		{
			if(ipAddress.equalsIgnoreCase(userMeta.getUserIpAddress()))
			{
				throw new DuplicateLoginUserException(//"You can't logged in now, because this user is already logged in from a different system !");
						"The user is already logged in this system ! Please <a href='webLogoutOfDiffSession?userId="
						+userModel.getUserId() + "'>Logout</a> to continue.");
			}
			else 
			{
				throw new DuplicateLoginUserException(//"You can't logged in now, because this user is already logged in from a different system !");
					"The user is already logged in from a different system ! Please <a href='webLogoutOfDiffSession?userId="
					+userModel.getUserId() + "'>Logout</a> to continue.");
			}
		}
		
		//Saving user login meta information
		String userAgent = request.getHeader("User-Agent");
		long loginMetaId = userService.saveUserLoginMeta(ipAddress, userModel.getUserId(), userAgent);
		//Setting login meta id in session
		stateManager.setValue(Constant.LOGIN_META_ID, loginMetaId);
		user.setUserLoginMetaId(loginMetaId);
		
		
		
		
		
		
		user.setUserName(authentication.getName());
		user.setPassword(authentication.getCredentials().toString());
		user.setEmilId(userModel.getEmilId());
		user.setArea(userModel.getArea());
		user.setUserId(userModel.getUserId());
		user.setUserTypeId(userModel.getUserTypeId());
		user.setViewName(userModel.getViewName());
		user.setSjpuAccess(userModel.getSjpuAccess());
		// Save the user to the Session State Manager, for global access.
		stateManager.setValue(Constant.USER_PRINCIPAL, user);
		
		//Retrieve current request object
//		ServletRequestAttributes attr=(ServletRequestAttributes) RequestContextHolder.getRequestAttributes();
//		HttpServletRequest request = attr.getRequest();
		
		return new UsernamePasswordAuthenticationToken(authentication.getName(), (String)authentication.getCredentials(), null);
	}

	@Override
	public boolean supports(Class<?> authentication) {
		// TODO Auto-generated method stub
		return false;
	}
	/**
	 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 21-04-2018 
	 * 	
	 * This method is used to get IP address of the system	    
	 */
	private String getIpAddr(HttpServletRequest request) 
	{      
	   String ip = request.getHeader("x-forwarded-for");      
	   if(ip == null || ip.length() == 0 || "unknown".equalsIgnoreCase(ip)) {      
	       ip = request.getHeader("Proxy-Client-IP");      
	   }      
	   if(ip == null || ip.length() == 0 || "unknown".equalsIgnoreCase(ip)) {      
	       ip = request.getHeader("WL-Proxy-Client-IP");      
	   }      
	   if(ip == null || ip.length() == 0 || "unknown".equalsIgnoreCase(ip)) {      
	       ip = request.getRemoteAddr();      
	   }      
	   return ip;      
	}

}
