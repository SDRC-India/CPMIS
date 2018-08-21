/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:57:28 am
 */
package org.sdrc.cpmisweb.domain;

import java.io.Serializable;
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
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:57:28 am
 */
@Entity
@Table(name="user_usertype_feature_permission_mapping")
public class UserUserTypeFeaturePermissionMapping implements Serializable 
{
	/**
	 * 
	 */
	private static final long serialVersionUID = 6870634456070178127L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name="user_usertype_feature_permission_mapping_id")
	private Integer userUserTypeFeaturePermissionMappingId;
	
	@ManyToOne
	@JoinColumn(name="usertype_feature_permission_scheme_id_fk")
	private UserTypeFeaturePermissionScheme userTypeFeaturePermissionScheme;
	
	@ManyToOne
	@JoinColumn(name="user_area_mapping_id_fk")
	private UserAreaMapping userAreaMapping;
	
	@Column(name="updated_date")
	private Timestamp updatedDate;
	
	@Column(name="updated_by")
	private String updatedBy;

	public Integer getUserUserTypeFeaturePermissionMappingId() {
		return userUserTypeFeaturePermissionMappingId;
	}

	public UserTypeFeaturePermissionScheme getUserTypeFeaturePermissionScheme() {
		return userTypeFeaturePermissionScheme;
	}

	public UserAreaMapping getUserAreaMapping() {
		return userAreaMapping;
	}

	public Timestamp getUpdatedDate() {
		return updatedDate;
	}

	public String getUpdatedBy() {
		return updatedBy;
	}

	public void setUserUserTypeFeaturePermissionMappingId(
			Integer userUserTypeFeaturePermissionMappingId) {
		this.userUserTypeFeaturePermissionMappingId = userUserTypeFeaturePermissionMappingId;
	}

	public void setUserTypeFeaturePermissionScheme(
			UserTypeFeaturePermissionScheme userTypeFeaturePermissionScheme) {
		this.userTypeFeaturePermissionScheme = userTypeFeaturePermissionScheme;
	}

	public void setUserAreaMapping(UserAreaMapping userAreaMapping) {
		this.userAreaMapping = userAreaMapping;
	}

	public void setUpdatedDate(Timestamp updatedDate) {
		this.updatedDate = updatedDate;
	}

	public void setUpdatedBy(String updatedBy) {
		this.updatedBy = updatedBy;
	}

	
}
