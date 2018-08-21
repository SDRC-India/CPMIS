/**
 * 
 */
package org.sdrc.cpmisweb.model;

import java.io.Serializable;


/**
 * @author Biswa Ranjan CPMISWEB 
 * 27-Nov-2017 4:24:21 pm
 *
 */
public class DistrictCciNameListModel implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 8127422643212797739L;
	private Integer id;
	private Integer districtId;
	private Integer userTypeId;
	private String cciName;
	public Integer getId() {
		return id;
	}
	public Integer getDistrictId() {
		return districtId;
	}
	public Integer getUserTypeId() {
		return userTypeId;
	}
	public String getCciName() {
		return cciName;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}
	public void setUserTypeId(Integer userTypeId) {
		this.userTypeId = userTypeId;
	}
	public void setCciName(String cciName) {
		this.cciName = cciName;
	}
	
}
