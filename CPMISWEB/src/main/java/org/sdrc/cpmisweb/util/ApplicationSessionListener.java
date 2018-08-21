package org.sdrc.cpmisweb.util;

import java.sql.Timestamp;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.concurrent.atomic.AtomicInteger;

import javax.servlet.http.HttpSessionEvent;
import javax.servlet.http.HttpSessionListener;

import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.ApplicationEvent;
import org.springframework.context.annotation.Scope;
import org.springframework.context.event.ContextRefreshedEvent;
import org.springframework.security.web.session.HttpSessionDestroyedEvent;
import org.springframework.stereotype.Component;
/**
 * @author Prakash(prakash@sdrc.co.in) created on : 25-Apr-2018 11:24:10 am
 * This class is used to listen session related event. 
 */
public class ApplicationSessionListener implements HttpSessionListener{
	
	 
    public ApplicationSessionListener() {
        super();
    }
 
    public void sessionCreated(final HttpSessionEvent event) {
    }
    
    public void sessionDestroyed(final HttpSessionEvent event) {
    	
    	 /**
    	 * Below statement will update the login meta data on every destruction of session
    	 * Means when web.xml will destroy the session then also this method will be called
    	 */
		if(event != null)
		{
			UserModel user=(UserModel)(((HttpSessionEvent) event).getSession().getAttribute(Constant.USER_PRINCIPAL));
			if(user!=null)
			{
				UserService userService=BeanUtil.getBean(UserService.class);
				userService.updateLoggedOutStatus(user.getUserLoginMetaId(), new Timestamp(new Date().getTime()));
			}
		}
    	
    }
	
}
