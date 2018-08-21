/**
 * 
 */
package org.sdrc.cpmisweb.util;

import java.io.IOException;

import javax.servlet.Filter;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.http.HttpServletResponse;

/**
 * @author Prakash(prakash@sdrc.co.in) created on : 16-May-2018 4:26:42 pm
 */
public class XFrameOptionsFilter implements Filter 
{

	@Override
	public void init(FilterConfig filterConfig) throws ServletException {
	}

	@Override
	public void doFilter(ServletRequest request, ServletResponse response,
							FilterChain chain) throws IOException, ServletException 
	{

		((HttpServletResponse) response).addHeader("X-Frame-Options", "DENY");
		((HttpServletResponse) response).addHeader("X-XSS-Protection", "1; mode=block"); 
		((HttpServletResponse) response).addHeader("X-Content-Type-Options", "nosniff"); 
		chain.doFilter(request, response);
	}

	@Override
	public void destroy() {
	}

}
