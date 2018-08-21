package org.sdrc.cpmisweb.model;

import java.io.Serializable;
/*
 * @author - Pratyush(pratyush@sdrc.co.in) created on 30-06-2007(13:31)
 */

public class TypeDetailsModel implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = -4384150318710496974L;
	private Integer typeDetailsId;
	private String typeDetailsName;
	
	public Integer getTypeDetailsId() {
		return typeDetailsId;
	}
	public void setTypeDetailsId(Integer typeDetailsId) {
		this.typeDetailsId = typeDetailsId;
	}
	public String getTypeDetailsName() {
		return typeDetailsName;
	}
	public void setTypeDetailsName(String typeDetailsName) {
		this.typeDetailsName = typeDetailsName;
	}
	
}
