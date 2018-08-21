/**
 * 
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
import javax.persistence.OneToOne;
import javax.persistence.Table;


/**
 * @author Biswa Ranjan CPMISWEB 
 * 27-Nov-2017 3:54:33 pm
 *
 */
@Entity
@Table(name="institution_user_mapping")
public class InstitutionUserMapping implements Serializable{

	/**
	 * 
	 */
	private static final long serialVersionUID = 4356144026540763773L;

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="institution_user_mapping_id")
	private Integer institutionUserMappingId;
		
	@OneToOne
	@JoinColumn(name="institution_id_fk", nullable = false)
	private InstitutionDetails institutionId;
	
	@OneToOne
	@JoinColumn(name = "user_id_fk", nullable = false)
	private CPMISUserDetails userId;
	
	@ManyToOne
	@JoinColumn(name="area_id_fk")
	private Area area;
	
	@Column(name = "created_date")
	private Timestamp createdDate;

	public Integer getInstitutionUserMappingId() {
		return institutionUserMappingId;
	}

	public InstitutionDetails getInstitutionId() {
		return institutionId;
	}

	public CPMISUserDetails getUserId() {
		return userId;
	}

	public void setInstitutionUserMappingId(Integer institutionUserMappingId) {
		this.institutionUserMappingId = institutionUserMappingId;
	}

	public void setInstitutionId(InstitutionDetails institutionId) {
		this.institutionId = institutionId;
	}

	public void setUserId(CPMISUserDetails userId) {
		this.userId = userId;
	}

	public Timestamp getCreatedDate() {
		return createdDate;
	}

	public void setCreatedDate(Timestamp createdDate) {
		this.createdDate = createdDate;
	}

	public Area getArea() {
		return area;
	}

	public void setArea(Area area) {
		this.area = area;
	}

	
}
