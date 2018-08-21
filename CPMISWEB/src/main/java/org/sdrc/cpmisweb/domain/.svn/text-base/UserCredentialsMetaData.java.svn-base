/**
 * 
 */
package org.sdrc.cpmisweb.domain;

import java.sql.Timestamp;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 15-Jan-2018 2:58:09 pm
 */
@Entity
@Table(name = "user_credentials_meta_data")
public class UserCredentialsMetaData {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "user_credentials_meta_data_pk_id")
	private Long id;

	@Column(name = "ip_address")
	private String ipAddress;

	@Column(name = "created_date")
	private Timestamp createdDate;

	@Column(name = "activation_code", unique = true)
	private String activationCode;

	@Column(name = "is_active")
	private Boolean isActive;

	@ManyToOne
	@JoinColumn(name = "user_id_fk")
	private CPMISUserDetails cpmisUser;

	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public String getIpAddress() {
		return ipAddress;
	}

	public void setIpAddress(String ipAddress) {
		this.ipAddress = ipAddress;
	}

	public Timestamp getCreatedDate() {
		return createdDate;
	}

	public void setCreatedDate(Timestamp createdDate) {
		this.createdDate = createdDate;
	}

	public String getActivationCode() {
		return activationCode;
	}

	public void setActivationCode(String activationCode) {
		this.activationCode = activationCode;
	}

	public Boolean getIsActive() {
		return isActive;
	}

	public void setIsActive(Boolean isActive) {
		this.isActive = isActive;
	}

	public CPMISUserDetails getCpmisUser() {
		return cpmisUser;
	}

	public void setCpmisUser(CPMISUserDetails cpmisUser) {
		this.cpmisUser = cpmisUser;
	}
	
}
