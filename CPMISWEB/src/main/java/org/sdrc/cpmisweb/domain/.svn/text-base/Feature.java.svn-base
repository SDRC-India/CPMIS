/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:43:31 am
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
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 08-Mar-2018 9:43:31 am
 */
@Entity
@Table(name="feature")
public class Feature {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "feature_id")
	private int featureId;

	@Column(name = "feature_code")
	private String featureCode;

	@Column(name = "feature_name")
	private String featureName;

	@Column(name = "description")
	private String description;

	@Column(name = "updated_date")
	private Timestamp updatedDate;

	@Column(name = "updated_by")
	private String updatedBy;

	@OneToMany(mappedBy = "feature", fetch = FetchType.LAZY)
	private List<FeaturePermissionMapping> featurePermissionMappings;

	public int getFeatureId() {
		return featureId;
	}

	public String getFeatureCode() {
		return featureCode;
	}

	public String getFeatureName() {
		return featureName;
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

	public void setFeatureId(int featureId) {
		this.featureId = featureId;
	}

	public void setFeatureCode(String featureCode) {
		this.featureCode = featureCode;
	}

	public void setFeatureName(String featureName) {
		this.featureName = featureName;
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
