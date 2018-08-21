package org.sdrc.cpmisweb.domain;

import java.io.Serializable;
import java.sql.Timestamp;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name="user_type_view")
public class UserDomain implements Serializable{
	private static final long serialVersionUID = 5022920526248391539L;

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="user_type_id")
	private Integer userTypeId;
	
	@Column(name="user_type_name")
	private String userTypeName;
	
	@Column(name="screen_name")
	private String screenName;
	
	@OneToMany(mappedBy = "userTypeId", fetch = FetchType.LAZY)
	private List<CPMISUserDetails> cpmisUserDetails;

	@Column(name="description")
	private String description;

	@Column(name = "created_date")
	private Timestamp createdDate;

	@Column(name = "last_updated_date")
	private Timestamp lastUpdatedDate;

	public Integer getUserTypeId() {
		return userTypeId;
	}

	public String getUserTypeName() {
		return userTypeName;
	}

	public String getScreenName() {
		return screenName;
	}

	public List<CPMISUserDetails> getCpmisUserDetails() {
		return cpmisUserDetails;
	}

	public String getDescription() {
		return description;
	}

	public Timestamp getCreatedDate() {
		return createdDate;
	}

	public Timestamp getLastUpdatedDate() {
		return lastUpdatedDate;
	}

	public void setUserTypeId(Integer userTypeId) {
		this.userTypeId = userTypeId;
	}

	public void setUserTypeName(String userTypeName) {
		this.userTypeName = userTypeName;
	}

	public void setScreenName(String screenName) {
		this.screenName = screenName;
	}

	public void setCpmisUserDetails(List<CPMISUserDetails> cpmisUserDetails) {
		this.cpmisUserDetails = cpmisUserDetails;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public void setCreatedDate(Timestamp createdDate) {
		this.createdDate = createdDate;
	}

	public void setLastUpdatedDate(Timestamp lastUpdatedDate) {
		this.lastUpdatedDate = lastUpdatedDate;
	}

}
