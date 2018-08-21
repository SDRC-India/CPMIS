/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:45:48 am
 */
package org.sdrc.cpmisweb.domain;

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

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:45:48 am
 */
@Entity
@Table(name="permission")
public class Permission {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name="permission_id")
	private Integer permissionId;
	
	@Column(name="permission_code")
	private String permissionCode;
	
	@Column(name="permission_name")
	private String permissionName;
	
	@Column(name="description")
	private String description;
	
	@Column(name="updated_date")
	private Timestamp updatedDate;
	
	@Column(name="updated_by")
	private String updatedBy;
	
	@OneToMany(mappedBy="permission",fetch=FetchType.LAZY)
	private List<FeaturePermissionMapping> featurePermissionMappings;

	public Integer getPermissionId() {
		return permissionId;
	}

	public String getPermissionCode() {
		return permissionCode;
	}

	public String getPermissionName() {
		return permissionName;
	}

	public String getDescription() {
		return description;
	}

	public Timestamp getUpdatedDate() {
		return updatedDate;
	}

	public String getUpdatedBy() {
		return updatedBy;
	}

	public List<FeaturePermissionMapping> getFeaturePermissionMappings() {
		return featurePermissionMappings;
	}

	public void setPermissionId(Integer permissionId) {
		this.permissionId = permissionId;
	}

	public void setPermissionCode(String permissionCode) {
		this.permissionCode = permissionCode;
	}

	public void setPermissionName(String permissionName) {
		this.permissionName = permissionName;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public void setUpdatedDate(Timestamp updatedDate) {
		this.updatedDate = updatedDate;
	}

	public void setUpdatedBy(String updatedBy) {
		this.updatedBy = updatedBy;
	}

	public void setFeaturePermissionMappings(
			List<FeaturePermissionMapping> featurePermissionMappings) {
		this.featurePermissionMappings = featurePermissionMappings;
	}

}
