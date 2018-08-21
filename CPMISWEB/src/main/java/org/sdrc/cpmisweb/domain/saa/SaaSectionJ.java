/**
 * 
 */
package org.sdrc.cpmisweb.domain.saa;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 22-Dec-2017 4:04:52 pm
 *
 */
@Entity
@Table(name="saa_section_j")
public class SaaSectionJ {

	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column
	private Integer saaSectionJId;
	
	@Column
	private String j_nameOfChild;
	
	@Column
	private String j_dateOfBirth;
	
	@Column
	private Integer j_age;
	
	@Column
	private Integer j_gender;
	
	@Column
	private String j_dateOfAdmission;
	
	@Column
	private String j_caringRegNoDate;
	
	@Column
	private Integer j_saaCategoryName;
		
	@Column
	private Integer j_typeOfChild;
	
	@Column
	private Integer j_referredByCwc;
	
	@Column
	private String j_dateOfpublication;
	
	@Column
	private Integer j_reasonOfPendency;
	
	@Column
	private String j_reasonOfPendencyOther;

	@ManyToOne
	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	private SaaDetails saaId;

	public Integer getSaaSectionJId() {
		return saaSectionJId;
	}

	public String getJ_nameOfChild() {
		return j_nameOfChild;
	}

	public String getJ_dateOfBirth() {
		return j_dateOfBirth;
	}

	public Integer getJ_age() {
		return j_age;
	}

	public Integer getJ_gender() {
		return j_gender;
	}

	public String getJ_dateOfAdmission() {
		return j_dateOfAdmission;
	}

	public String getJ_caringRegNoDate() {
		return j_caringRegNoDate;
	}

	public Integer getJ_saaCategoryName() {
		return j_saaCategoryName;
	}

	public Integer getJ_typeOfChild() {
		return j_typeOfChild;
	}

	public Integer getJ_referredByCwc() {
		return j_referredByCwc;
	}

	public String getJ_dateOfpublication() {
		return j_dateOfpublication;
	}

	public Integer getJ_reasonOfPendency() {
		return j_reasonOfPendency;
	}

	public String getJ_reasonOfPendencyOther() {
		return j_reasonOfPendencyOther;
	}

	public SaaDetails getSaaId() {
		return saaId;
	}

	public void setSaaSectionJId(Integer saaSectionJId) {
		this.saaSectionJId = saaSectionJId;
	}

	public void setJ_nameOfChild(String j_nameOfChild) {
		this.j_nameOfChild = j_nameOfChild;
	}

	public void setJ_dateOfBirth(String j_dateOfBirth) {
		this.j_dateOfBirth = j_dateOfBirth;
	}

	public void setJ_age(Integer j_age) {
		this.j_age = j_age;
	}

	public void setJ_gender(Integer j_gender) {
		this.j_gender = j_gender;
	}

	public void setJ_dateOfAdmission(String j_dateOfAdmission) {
		this.j_dateOfAdmission = j_dateOfAdmission;
	}

	public void setJ_caringRegNoDate(String j_caringRegNoDate) {
		this.j_caringRegNoDate = j_caringRegNoDate;
	}

	public void setJ_saaCategoryName(Integer j_saaCategoryName) {
		this.j_saaCategoryName = j_saaCategoryName;
	}

	public void setJ_typeOfChild(Integer j_typeOfChild) {
		this.j_typeOfChild = j_typeOfChild;
	}

	public void setJ_referredByCwc(Integer j_referredByCwc) {
		this.j_referredByCwc = j_referredByCwc;
	}

	public void setJ_dateOfpublication(String j_dateOfpublication) {
		this.j_dateOfpublication = j_dateOfpublication;
	}

	public void setJ_reasonOfPendency(Integer j_reasonOfPendency) {
		this.j_reasonOfPendency = j_reasonOfPendency;
	}

	public void setJ_reasonOfPendencyOther(String j_reasonOfPendencyOther) {
		this.j_reasonOfPendencyOther = j_reasonOfPendencyOther;
	}

	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	}

}
