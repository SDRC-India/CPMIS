package org.sdrc.cpmisweb.domain;
/*
 * @author - Pratyush(pratyush@sdrc.co.in) created on 19-06-2007(10:58)
 */
import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name="cpmis_user_details")
public class CPMISUserDetails implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 175817613906251970L;

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="id")
	private Integer userId;
	
	@Column(name="user_name")
	private String userName;
	
	@Column(name="password")
	private String password;

	@Column(name="email_id")
	private String emailId;
	
	@Column(name = "is_live")
	private Boolean isLive;

	@Column(name = "is_active")
	private Boolean isActive;

	@Column(name = "is_approved")
	private Boolean isApproved;
	
	@Column(name = "sjpu_access")
	private Boolean sjpuAccess;
	
	/**
	 * @return the sjpuAccess
	 */
	public Boolean getSjpuAccess() {
		return sjpuAccess;
	}

	/**
	 * @param sjpuAccess the sjpuAccess to set
	 */
	public void setSjpuAccess(Boolean sjpuAccess) {
		this.sjpuAccess = sjpuAccess;
	}

	@ManyToOne
	@JoinColumn(name = "user_type_id", nullable = false)
	private UserDomain userTypeId;

	@ManyToOne
	@JoinColumn(name="district_id")
	private Area area;

	public Integer getUserId() {
		return userId;
	}

	public String getUserName() {
		return userName;
	}

	public String getPassword() {
		return password;
	}

	public String getEmailId() {
		return emailId;
	}

	public Boolean getIsLive() {
		return isLive;
	}

	public Boolean getIsActive() {
		return isActive;
	}

	public Boolean getIsApproved() {
		return isApproved;
	}

	public UserDomain getUserTypeId() {
		return userTypeId;
	}

	public Area getArea() {
		return area;
	}

	public void setUserId(Integer userId) {
		this.userId = userId;
	}

	public void setUserName(String userName) {
		this.userName = userName;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public void setEmailId(String emailId) {
		this.emailId = emailId;
	}

	public void setIsLive(Boolean isLive) {
		this.isLive = isLive;
	}

	public void setIsActive(Boolean isActive) {
		this.isActive = isActive;
	}

	public void setIsApproved(Boolean isApproved) {
		this.isApproved = isApproved;
	}

	public void setUserTypeId(UserDomain userTypeId) {
		this.userTypeId = userTypeId;
	}

	public void setArea(Area area) {
		this.area = area;
	}
		
	
}
