package org.sdrc.cpmisweb.controller;

import java.io.IOException;
import java.sql.Timestamp;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.service.UserService;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.PathConstants;
import org.sdrc.cpmisweb.util.StateManager;
import org.sdrc.cpmisweb.util.UnauthorizedException;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;
import org.springframework.web.servlet.view.RedirectView;

/*
 * @author - Pratyush(pratyush@sdrc.co.in) created on - 19-06-2007(13:02)
 */
@Controller
public class LoginController {
	
	@Autowired
	private StateManager stateManager;
	
	@Autowired
	private UserService userService;
	
	@Autowired
	private ResourceBundleMessageSource messages;
	 
	@RequestMapping(value=PathConstants.ALL_URL)
	  public String homepage(HttpServletRequest request, HttpServletResponse resp) throws ServletException{
		
	    return PathConstants.PNF;
			
	  }
	 @RequestMapping(value=PathConstants.ONLY_URL)
	  public String homepage33(HttpServletRequest request, HttpServletResponse resp) throws ServletException{
		 UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		 if(user != null){
			 return PathConstants.REDIRECT_DASHBOARD;
		 }
		 else{
			 return PathConstants.REDIRECT_LOGIN;
		 }
			
	  }
	 
	 @RequestMapping(value=PathConstants.LOG_IN)
	  public String homepage45(HttpServletRequest request, HttpServletResponse resp) throws ServletException{
		 
		 UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		 if(user != null){
			 return PathConstants.REDIRECT_DASHBOARD;
		 }
		 else{
			 return PathConstants.LOG_IN;
		 }
		 
	  }
	 @RequestMapping(value=PathConstants.HOME_PAGE)
	 public RedirectView localRedirect(HttpServletRequest request, HttpServletResponse resp) throws ServletException {
		 HttpSession session=request.getSession(false);
			if(session !=null){
				Long  userLoginMetaId = (Long) stateManager.getValue(Constant.LOGIN_META_ID);
				if(userLoginMetaId != null)
				{
					userService.updateLoggedOutStatus(userLoginMetaId,  new Timestamp(new Date().getTime()));
				}
				stateManager.setValue(Constant.LOGIN_META_ID, null);
				AdminController.referrer = null;
				stateManager.setValue(Constant.USER_PRINCIPAL, null);
				request.getSession().setAttribute(Constant.USER_PRINCIPAL, null);
				request.getSession().invalidate();
				ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder.currentRequestAttributes();
				attr.getRequest().getSession(true).removeAttribute(Constant.USER_PRINCIPAL);
				attr.getRequest().getSession(true).invalidate();
//				request.logout();
			}
	     RedirectView redirectView = new RedirectView();
	     redirectView.setUrl(PathConstants.HOME_PAGE_LINK);
	     return redirectView;
	 }
	 // footer links starts
	 
	 @RequestMapping(value=PathConstants.TERMS_PAGE)
	 public RedirectView localRedirect1(HttpServletRequest request, HttpServletResponse resp) throws ServletException {
	     RedirectView redirectView = new RedirectView();
	     redirectView.setUrl(PathConstants.TERMS_PAGE_LINK);
	     return redirectView;
	 }
	 @RequestMapping(value=PathConstants.DISCLAIMER_PAGE)
	 public RedirectView localRedirect2(HttpServletRequest request, HttpServletResponse resp) throws ServletException {
	     RedirectView redirectView = new RedirectView();
	     redirectView.setUrl(PathConstants.DISCLAIMER_PAGE_LINK);
	     return redirectView;
	 }
	 @RequestMapping(value=PathConstants.PRIVACY_PAGE)
	 public RedirectView localRedirect3(HttpServletRequest request, HttpServletResponse resp) throws ServletException {
	     RedirectView redirectView = new RedirectView();
	     redirectView.setUrl(PathConstants.PRIVACY_PAGE_LINK);
	     return redirectView;
	 }
	 @RequestMapping(value=PathConstants.SITEMAP_PAGE)
	 public RedirectView localRedirect4(HttpServletRequest request, HttpServletResponse resp) throws ServletException {
	     RedirectView redirectView = new RedirectView();
	     redirectView.setUrl(PathConstants.SITEMAP_PAGE_LINK);
	     return redirectView;
	 }
	 
	 //footer links ends
	 
	
	 /**
	 * Updated by Prakash Sahoo(prakash@sdrc.co.in) on 21-04-2018 
	 *  
	 * Adding statements 
	 * to update user logout information to login metadata table
	 */
	@RequestMapping(value=PathConstants.LOG_OUT, method=RequestMethod.POST)
	public String logout(HttpServletRequest request, HttpServletResponse resp)
			throws IOException, ServletException {
		/**
		 * Update the Log out Info i.e update 
		 */
		HttpSession session=request.getSession(false);
		if(session !=null){
			
			//Updating logout information to login meta data table
			Long  userLoginMetaId = (Long) stateManager.getValue(Constant.LOGIN_META_ID);
			if(userLoginMetaId != null)
			{
				userService.updateLoggedOutStatus(userLoginMetaId,  new Timestamp(new Date().getTime()));
			}
			stateManager.setValue(Constant.LOGIN_META_ID, null);
			
			AdminController.referrer = null;
			stateManager.setValue(Constant.USER_PRINCIPAL, null);
			request.getSession().setAttribute(Constant.USER_PRINCIPAL, null);
			request.getSession().invalidate();
			ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder.currentRequestAttributes();
			attr.getRequest().getSession(true).removeAttribute(Constant.USER_PRINCIPAL);
			attr.getRequest().getSession(true).invalidate();
	//		request.logout();
			return PathConstants.REDIRECT;
		}
		else{
			request.getSession().invalidate();
			return PathConstants.REDIRECT;
		}
	}
	/**
	 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 24-04-2018 
	 * 
	 * When two same user tries to log in the system then they send request to logout.
	 * Then this method is used to logout the user and update the user login meta data. 
	 */
	@RequestMapping(value = "/webLogoutOfDiffSession", method = RequestMethod.GET)
	public String logout(HttpServletRequest request, HttpServletResponse resp, RedirectAttributes redirectAttributes, 
			@RequestParam("userId") Integer userId)
			throws IOException, ServletException {
		
		HttpSession session=request.getSession(false);
		if(session !=null){
			Long userLoginMetaId = userService.findByUserId(userId);
			if(userLoginMetaId != null ){
				userService.updateLoggedOutStatus(userLoginMetaId,  new Timestamp(new Date().getTime()));
			}
			stateManager.setValue(Constant.USER_PRINCIPAL, null);
	
			List<String> errMessgs = new ArrayList<>();
			errMessgs.add(messages.getMessage(Constant.SUCCESS_LOGGED_OUT, null, null));
			redirectAttributes.addFlashAttribute("formError", errMessgs);
			redirectAttributes.addFlashAttribute("className",messages.getMessage("bootstrap.alert.success",null, null));
			return PathConstants.REDIRECT_LOGIN;
		}
		else{
			request.getSession().invalidate();
			return PathConstants.REDIRECT_LOGIN;
		}
	}
	
	
	

}
