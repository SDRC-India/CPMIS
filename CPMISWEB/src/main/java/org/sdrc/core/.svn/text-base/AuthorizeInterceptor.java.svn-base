package org.sdrc.core;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.sdrc.cpmisweb.domain.FeaturePermissionMapping;
import org.sdrc.cpmisweb.domain.UserAreaMapping;
import org.sdrc.cpmisweb.domain.UserUserTypeFeaturePermissionMapping;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.repository.UserAreaMappingRepository;
import org.sdrc.cpmisweb.repository.UserUserTypeFeaturePermissionMappingRepository;
import org.sdrc.cpmisweb.service.UserService;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.DuplicateLoginUserException;
import org.sdrc.cpmisweb.util.StateManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.security.access.AccessDeniedException;
import org.springframework.stereotype.Component;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;
import org.springframework.web.method.HandlerMethod;
import org.springframework.web.servlet.handler.HandlerInterceptorAdapter;
/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) updated on : 26-Mar-2018 3:20:45 pm
 */
@Component
public class AuthorizeInterceptor extends HandlerInterceptorAdapter {
	private final StateManager stateManager;
	private final ResourceBundleMessageSource messages;
	
	@Autowired
	UserUserTypeFeaturePermissionMappingRepository userUserTypeFeaturePermissionMappingRepository;
	@Autowired
	UserAreaMappingRepository userAreaMappingRepository;
	
	@Autowired
	private UserService userService;

	@Autowired
	public AuthorizeInterceptor(StateManager stateManager,ResourceBundleMessageSource messages) 
	{
		this.stateManager = stateManager;
		this.messages = messages;
	}

	/**
	 * Updated by Prakash Sahoo(prakash@sdrc.co.in) on 23-04-2018 
	 *  
	 * Adding statement to prevent when two same user tries to log in the system
	 */
	@Override
	public boolean preHandle(HttpServletRequest request,
			HttpServletResponse response, Object handler) {
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		
		if (!(handler instanceof HandlerMethod))
		{
			// if at any point of time when two same user tries to log in the system
			// then an error message will be shown as "The user is already logged in
			// from a different system Logout to continue"
			// when s(he) will click on this logout it will log out the other
			// user also.
			// any further action will invalidate the session
			if (user != null) {
				Long sameUserLoginMeta = userService.findByUserIdAndLoginMetaId(user.getUserId(),user.getUserLoginMetaId());
				if (sameUserLoginMeta == null) {
					invalidateSession(request);
					response.setStatus(403);
					throw new DuplicateLoginUserException(messages.getMessage(Constant.DUPLICATELOGIN_UNAUTHORIZED, null, null));
				}
			}
			return true;
		}

		Authorize authorize = ((HandlerMethod) handler)
				.getMethodAnnotation(Authorize.class);

		if (authorize == null)
		{
			// if at any point of time when two same user tries to log in the system
			// then an error message will be shown as "The user is already logged in
			// from a different system Logout to continue"
			// when s(he) will click on this logout it will log out the other
			// user also.
			// any further action will invalidate the session
			if (user != null) {
				Long sameUserLoginMeta = userService.findByUserIdAndLoginMetaId(user.getUserId(),user.getUserLoginMetaId());
				if (sameUserLoginMeta == null) {
					invalidateSession(request);
					response.setStatus(403);
					throw new DuplicateLoginUserException(messages.getMessage(Constant.DUPLICATELOGIN_UNAUTHORIZED, null, null));
				}
			}
			return true;
		}
		
		if (user == null)
		{
			response.setStatus(401);
			throw new AccessDeniedException(messages.getMessage(Constant.ACCESS_DENIED, null, null));
		}
		// if at any point of time when two same user tries to log in the system
		// then an error message will be shown as "The user is already logged in
		// from a different system Logout to continue"
		// when s(he) will click on this logout it will log out the other
		// user also.
		// any further action will invalidate the session
		Long sameUserLoginMeta = userService.findByUserIdAndLoginMetaId(user.getUserId(),user.getUserLoginMetaId());
		if (sameUserLoginMeta == null) {
			invalidateSession(request);
			response.setStatus(403);
			throw new DuplicateLoginUserException(messages.getMessage(Constant.DUPLICATELOGIN_UNAUTHORIZED, null, null));
		}
		UserAreaMapping uam=userAreaMappingRepository.findByUserUserId(user.getUserId());
		List<UserUserTypeFeaturePermissionMapping> mappingList=userUserTypeFeaturePermissionMappingRepository.findByUserAreaMappingUserAreaMappingId(uam.getUserAreaMappingId());
		List<UserUserTypeFeaturePermissionMapping> convertedList=new ArrayList<>();
		for(int i=0;i<mappingList.size();i++){
			convertedList.add(mappingList.get(i));
		}
		user.setUserUserTypeFeaturePermissionMapping(convertedList);
		
		List<String> feature = new ArrayList<String>();
		feature =	Arrays.asList(authorize.feature().split(","));
		String permission = authorize.permission();
		
		
		if (user != null && user.getUserUserTypeFeaturePermissionMapping() != null) {
			for (int i = 0; i < user.getUserUserTypeFeaturePermissionMapping().size(); i++) {
				FeaturePermissionMapping fpMapping = user.getUserUserTypeFeaturePermissionMapping().get(i).getUserTypeFeaturePermissionScheme().getFeaturePermissionMapping();
				if (feature.contains(fpMapping.getFeature().getFeatureName())
						&& permission.equals(fpMapping.getPermission()
								.getPermissionName())) {
					return true;
				}
			}
		}
		
		throw new AccessDeniedException(messages.getMessage(Constant.ACCESS_DENIED, null, null));
	}
	
	/**
	 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 23-04-2018 
	 * 
	 * This method is used to invalidate the session.	    
	 */
	private void invalidateSession(HttpServletRequest request) 
	{
		request.getSession().setAttribute(Constant.USER_PRINCIPAL, null);
		request.getSession().invalidate();
		ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder.currentRequestAttributes();
		attr.getRequest().getSession(true).removeAttribute(Constant.USER_PRINCIPAL);
		attr.getRequest().getSession(true).invalidate();

		try {
			request.logout();
		} catch (ServletException e) {
			e.printStackTrace();
		}
	}

}
