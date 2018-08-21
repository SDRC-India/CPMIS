/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:55:04 am
 */
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
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:55:04 am
 */
@Entity
@Table(name="user_area_mapping")
public class UserAreaMapping implements Serializable{
	/**
	 * 
	 */
	private static final long serialVersionUID = 2445631030549740464L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "user_area_mapping_id")
	private Integer userAreaMappingId;
	
	@Column(name="created_date", nullable = false)
	private Timestamp createdDate;
	
	@Column(name="is_active")
	private Boolean isActive;

	@ManyToOne
	@JoinColumn(name="area_id_fk")
	private Area area;

	@ManyToOne
	@JoinColumn(name="user_fk")
	private CPMISUserDetails user;

	@OneToMany(mappedBy="userAreaMapping",fetch=FetchType.LAZY)
	private List<UserUserTypeFeaturePermissionMapping> userUserTypeFeaturePermissionMapping;

	public Integer getUserAreaMappingId() {
		return userAreaMappingId;
	}

	public Timestamp getCreatedDate() {
		return createdDate;
	}

	public Boolean getIsActive() {
		return isActive;
	}

	public Area getArea() {
		return area;
	}

	public CPMISUserDetails getUser() {
		return user;
	}

	public List<UserUserTypeFeaturePermissionMapping> getUserUserTypeFeaturePermissionMapping() {
		return userUserTypeFeaturePermissionMapping;
	}

	public void setUserAreaMappingId(Integer userAreaMappingId) {
		this.userAreaMappingId = userAreaMappingId;
	}

	public void setCreatedDate(Timestamp createdDate) {
		this.createdDate = createdDate;
	}

	public void setIsActive(Boolean isActive) {
		this.isActive = isActive;
	}

	public void setArea(Area area) {
		this.area = area;
	}

	public void setUser(CPMISUserDetails user) {
		this.user = user;
	}

	public void setUserUserTypeFeaturePermissionMapping(
			List<UserUserTypeFeaturePermissionMapping> userUserTypeFeaturePermissionMapping) {
		this.userUserTypeFeaturePermissionMapping = userUserTypeFeaturePermissionMapping;
	}
}
