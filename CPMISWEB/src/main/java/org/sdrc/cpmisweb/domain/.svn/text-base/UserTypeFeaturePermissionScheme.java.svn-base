/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:51:51 am
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
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:51:51 am
 */
@Entity
@Table(name="usertype_feature_permission_scheme")
public class UserTypeFeaturePermissionScheme implements Serializable{
	/**
	 * 
	 */
	private static final long serialVersionUID = -9201286044988401070L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name="usertype_feature_permission_scheme_id")
	private Integer userTypeFeaturePermissionSchemeId;
	
	@Column(name="scheme_name")
	private String schemeName;
	
	@ManyToOne
	@JoinColumn(name="usertype_id_fk", nullable = false)
	private UserDomain userDomain;
	
	@ManyToOne
	@JoinColumn(name="feature_permission_id_fk")
	private FeaturePermissionMapping featurePermissionMapping;
	
	@Column(name="updated_date")
	private Timestamp updatedDate;
	
	@Column(name="updated_by")
	private String updatedBy;
	
	@OneToMany(mappedBy="userTypeFeaturePermissionScheme",fetch=FetchType.LAZY)
	private List<UserUserTypeFeaturePermissionMapping> userUserTypeFeaturePermissionMapping;

	public Integer getUserTypeFeaturePermissionSchemeId() {
		return userTypeFeaturePermissionSchemeId;
	}

	public String getSchemeName() {
		return schemeName;
	}

	public UserDomain getUserDomain() {
		return userDomain;
	}

	public FeaturePermissionMapping getFeaturePermissionMapping() {
		return featurePermissionMapping;
	}

	public Timestamp getUpdatedDate() {
		return updatedDate;
	}

	public String getUpdatedBy() {
		return updatedBy;
	}

	public List<UserUserTypeFeaturePermissionMapping> getUserUserTypeFeaturePermissionMapping() {
		return userUserTypeFeaturePermissionMapping;
	}

	public void setUserTypeFeaturePermissionSchemeId(
			Integer userTypeFeaturePermissionSchemeId) {
		this.userTypeFeaturePermissionSchemeId = userTypeFeaturePermissionSchemeId;
	}

	public void setSchemeName(String schemeName) {
		this.schemeName = schemeName;
	}

	public void setUserDomain(UserDomain userDomain) {
		this.userDomain = userDomain;
	}

	public void setFeaturePermissionMapping(
			FeaturePermissionMapping featurePermissionMapping) {
		this.featurePermissionMapping = featurePermissionMapping;
	}

	public void setUpdatedDate(Timestamp updatedDate) {
		this.updatedDate = updatedDate;
	}

	public void setUpdatedBy(String updatedBy) {
		this.updatedBy = updatedBy;
	}

	public void setUserUserTypeFeaturePermissionMapping(
			List<UserUserTypeFeaturePermissionMapping> userUserTypeFeaturePermissionMapping) {
		this.userUserTypeFeaturePermissionMapping = userUserTypeFeaturePermissionMapping;
	}

}
