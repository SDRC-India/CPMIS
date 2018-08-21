/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 6:57:26 pm
 */
package org.sdrc.cpmisweb.model;

import java.io.Serializable;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 6:57:26 pm
 */
public class TimeperiodModel implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 8747358794863969755L;
	private Integer timeperiodId;
	private String timeperiodName;
	public Integer getTimeperiodId() {
		return timeperiodId;
	}
	public String getTimeperiodName() {
		return timeperiodName;
	}
	public void setTimeperiodId(Integer timeperiodId) {
		this.timeperiodId = timeperiodId;
	}
	public void setTimeperiodName(String timeperiodName) {
		this.timeperiodName = timeperiodName;
	}
	
}
