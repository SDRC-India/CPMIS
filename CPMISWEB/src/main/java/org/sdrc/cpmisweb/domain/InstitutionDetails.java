/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 07-Mar-2018 4:32:08 pm
 */
package org.sdrc.cpmisweb.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 07-Mar-2018 4:32:08 pm
 */
@Entity
@Table(name="institution_details")
public class InstitutionDetails {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="institution_id")
	private Integer institutionId;
	
	@Column(name="institution_name")
	private String institutionName;

	@ManyToOne
	@JoinColumn(name = "district_id_fk")
	private Area districtId;
	
	@Column(name = "cci_type")
	private String cciType;
	
	@ManyToOne
	@JoinColumn(name="institution_type_id_fk")
	private UserDomain userDomain;
	
	@OneToOne(mappedBy="institutionId")
	private InstitutionUserMapping institutionUserMapping;

	public Integer getInstitutionId() {
		return institutionId;
	}

	public String getInstitutionName() {
		return institutionName;
	}

	public Area getDistrictId() {
		return districtId;
	}

	public String getCciType() {
		return cciType;
	}

	public UserDomain getUserDomain() {
		return userDomain;
	}

	public InstitutionUserMapping getInstitutionUserMapping() {
		return institutionUserMapping;
	}

	public void setInstitutionId(Integer institutionId) {
		this.institutionId = institutionId;
	}

	public void setInstitutionName(String institutionName) {
		this.institutionName = institutionName;
	}

	public void setDistrictId(Area districtId) {
		this.districtId = districtId;
	}

	public void setCciType(String cciType) {
		this.cciType = cciType;
	}

	public void setUserDomain(UserDomain userDomain) {
		this.userDomain = userDomain;
	}

	public void setInstitutionUserMapping(
			InstitutionUserMapping institutionUserMapping) {
		this.institutionUserMapping = institutionUserMapping;
	}

	
}
