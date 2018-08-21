/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:50:07 am
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
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:50:07 am
 */
@Entity
@Table(name="feature_permission_mapping")
public class FeaturePermissionMapping implements Serializable{
	/**
	 * 
	 */
	private static final long serialVersionUID = 8260061259501548330L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name="feature_permission_mapping_id")
	private Integer featurePermissionId;
	
	@ManyToOne
	@JoinColumn(name="feature_id_fk")
	private Feature feature;
	
	@ManyToOne
	@JoinColumn(name="permission_id_fk")
	private Permission permission;
	
	@Column(name="updated_date")
	private Timestamp updatedDate;
	
	@Column(name="updated_by")
	private String updatedBy;
	
	
	@Column(name="description")
	private String description;
	
	@OneToMany(mappedBy="featurePermissionMapping",fetch=FetchType.LAZY)
	private List<UserTypeFeaturePermissionScheme> userTypeFeaturePermissionScheme;

	public Integer getFeaturePermissionId() {
		return featurePermissionId;
	}

	public Feature getFeature() {
		return feature;
	}

	public Permission getPermission() {
		return permission;
	}

	public Timestamp getUpdatedDate() {
		return updatedDate;
	}

	public String getUpdatedBy() {
		return updatedBy;
	}

	public String getDescription() {
		return description;
	}

	public List<UserTypeFeaturePermissionScheme> getUserTypeFeaturePermissionScheme() {
		return userTypeFeaturePermissionScheme;
	}

	public void setFeaturePermissionId(Integer featurePermissionId) {
		this.featurePermissionId = featurePermissionId;
	}

	public void setFeature(Feature feature) {
		this.feature = feature;
	}

	public void setPermission(Permission permission) {
		this.permission = permission;
	}

	public void setUpdatedDate(Timestamp updatedDate) {
		this.updatedDate = updatedDate;
	}

	public void setUpdatedBy(String updatedBy) {
		this.updatedBy = updatedBy;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public void setUserTypeFeaturePermissionScheme(
			List<UserTypeFeaturePermissionScheme> userTypeFeaturePermissionScheme) {
		this.userTypeFeaturePermissionScheme = userTypeFeaturePermissionScheme;
	}

}
