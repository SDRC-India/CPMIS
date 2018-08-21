package org.sdrc.cpmisweb.util;

import java.sql.Timestamp;

import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpSession;

import org.sdrc.cpmisweb.model.Error;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.ApplicationEvent;
import org.springframework.context.ApplicationListener;
import org.springframework.context.annotation.Scope;
import org.springframework.context.event.ContextRefreshedEvent;
import org.springframework.security.web.session.HttpSessionDestroyedEvent;
import org.springframework.stereotype.Component;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;
@Component
@Scope(value = "singleton")
public class SessionStateManager implements StateManager, ApplicationListener<ApplicationEvent> {
	
	@Autowired 
	private UserService userService;

	public SessionStateManager() {
	}

	@Override
	public Object getValue(String key) {
		return session().getAttribute(key);
	}

	@Override
	public void setValue(String key, Object value) {
		session().setAttribute(key, value);
	}
	


	@SuppressWarnings("unchecked")
	@Override
	public List<Error> getError() {
		return (List<Error>) (session().getAttribute(Constant.ERROR_LIST));
	}

	private HttpSession session() {
		ServletRequestAttributes attr = (ServletRequestAttributes) RequestContextHolder
				.currentRequestAttributes();
		return attr.getRequest().getSession(true);
	}

	@Override
	public void setError(List<Error> errModels) {

		if (getError() != null && !errModels.isEmpty()) {
			List<Error> errorList = getError();
			errorList.addAll(errModels);
		} else {
			setValue(Constant.ERROR_LIST, errModels);
		}
	
		// TODO Auto-generated method stub
		
	}
	/**
	 * @author Prakash Sahoo(prakash@sdrc.co.in) Created on 25-04-2018 
	 * 
	 * This method will update the login meta data when the server will startup 
	 * to set all the login metadata to false or both case
	 */
	@Override
	public void onApplicationEvent(ApplicationEvent event) 
	{
		// if server is starting up
		if(event instanceof ContextRefreshedEvent )
		{
			userService.updateLoggedOutStatus(-1, new Timestamp(new Date().getTime()));
		}
		
	}

}
