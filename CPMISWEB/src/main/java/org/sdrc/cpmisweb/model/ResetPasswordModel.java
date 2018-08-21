/**
 * 
 */
package org.sdrc.cpmisweb.model;

import java.io.Serializable;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 15-Jan-2018 4:30:30 pm
 */
public class ResetPasswordModel implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 4110632438793417736L;
	private String redirectTo;
	private String uniqueKey;

	public String getRedirectTo() {
		return redirectTo;
	}

	public void setRedirectTo(String redirectTo) {
		this.redirectTo = redirectTo;
	}

	public String getUniqueKey() {
		return uniqueKey;
	}

	public void setUniqueKey(String uniqueKey) {
		this.uniqueKey = uniqueKey;
	}
}
