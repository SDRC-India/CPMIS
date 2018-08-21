/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 16-Mar-2018 5:10:57 pm
 */
package org.sdrc.cpmisweb.util;

import java.io.IOException;
import java.util.HashMap;
import java.util.Map;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import org.sdrc.cpmisweb.model.UserModel;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.support.ResourceBundleMessageSource;
import org.springframework.stereotype.Component;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.servlet.ModelAndView;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 16-Mar-2018 5:10:57 pm
 */
@Component
@ControllerAdvice(basePackages="org.sdrc.cpmisweb")
public class CpmisException{

	@Autowired
	private StateManager stateManager;
	@Autowired
	private ResourceBundleMessageSource messages;
	
	private Logger logger=LoggerFactory.getLogger(CpmisException.class);
	
	@ExceptionHandler(value = Exception.class)
	public ModelAndView  defaultErrorHandler(HttpServletResponse res,Exception e) 
	{
		 long ref = System.currentTimeMillis();
		 UserModel user=(UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		 if(user!=null)
		 {
			 String userDesc="\n\tUSER_NAME : "+user.getUserName()+
					 		 "\n\tUSER_ID : "+user.getUserId()+
				 		 	 "\n\tUSER_TYPE_ID : "+user.getUserTypeId()+
			 		 	 	 "\n\tDISTRICT_NAME : "+user.getArea().getAreaName();
			
			 logger.error("Error. Reference #:" + ref+", User details: "+userDesc, e);
			 res.setStatus(HttpServletResponse.SC_INTERNAL_SERVER_ERROR);
			 Map<String, Object> model = new HashMap<String, Object>();
			 model.put("exception", e);
			 model.put(Constant.USER_VIEW_NAME,user.getViewName());
			 return new ModelAndView("ServerErrorException",model);
		 }
		 else
		 {
			 logger.error("Error. Reference #:" + ref, e);
			 res.setStatus(HttpServletResponse.SC_INTERNAL_SERVER_ERROR);
			 Map<String, Object> model = new HashMap<String, Object>();
			 model.put("exception", e);
			 return new ModelAndView("exception",model);
		 }
		
    }
	@ExceptionHandler(value = DuplicateLoginUserException.class)
	public ModelAndView  handleDuplicateLoginException(HttpServletResponse response,HttpServletRequest request,Exception e) throws Exception 
	{
		 long ref = System.currentTimeMillis();
		 logger.error("DuplicateLoginException. Reference #:" + ref, e);
		 if(isAjaxRequest(request))
		 {
			 response.sendError(HttpServletResponse.SC_FORBIDDEN, messages.getMessage(Constant.DUPLICATELOGIN_UNAUTHORIZED_MODAL, null, null));
			 return null;
		 }
		 else
		 {
			 Map<String, Object> model = new HashMap<String, Object>();
			 model.put("exception", e);
			 return new ModelAndView("DuplicateLoginUserException",model);
		 }
	}
	private static boolean isAjaxRequest(HttpServletRequest request)
	{
		if(request.getHeader("content-type") == null && request.getHeader("X-Requested-With") == null)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}
