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
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in) 
 * 22-Dec-2017 4:04:36 pm
 *
 */
@Entity
@Table(name="saa_sec_c_child_details")
public class SaaSectionCChildDeatails {
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column
	private Integer saaSecCChildDeatailsId;
	
	@Column
	private String c_nameOfChild;
	
	@Column
	private String c_dateOfBirth;
	
	@Column
	private Integer c_age;
	
	@Column
	private Integer c_gender;
	
	@Column
	private String c_dateOfAdmission;
	
	@Column
	private String c_caringRegNoDate;
	
	@Column
	private Integer c_saaCategoryName;
	
	@Column
	private Integer c_typeOfChild;
	
	@Column
	private Integer c_referredByCwc;
	
	@Column
	private String c_dateOfpublication;
	
	@Column
	private String c_remarks;
	
	@ManyToOne
	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	private SaaDetails saaId;

	public Integer getSaaSecCChildDeatailsId() {
		return saaSecCChildDeatailsId;
	}

	public String getC_nameOfChild() {
		return c_nameOfChild;
	}

	public String getC_dateOfBirth() {
		return c_dateOfBirth;
	}

	public Integer getC_age() {
		return c_age;
	}

	public Integer getC_gender() {
		return c_gender;
	}

	public String getC_dateOfAdmission() {
		return c_dateOfAdmission;
	}

	public String getC_caringRegNoDate() {
		return c_caringRegNoDate;
	}

	public Integer getC_saaCategoryName() {
		return c_saaCategoryName;
	}

	public Integer getC_typeOfChild() {
		return c_typeOfChild;
	}

	public Integer getC_referredByCwc() {
		return c_referredByCwc;
	}

	public String getC_dateOfpublication() {
		return c_dateOfpublication;
	}

	public String getC_remarks() {
		return c_remarks;
	}

	public SaaDetails getSaaId() {
		return saaId;
	}

	public void setSaaSecCChildDeatailsId(Integer saaSecCChildDeatailsId) {
		this.saaSecCChildDeatailsId = saaSecCChildDeatailsId;
	}

	public void setC_nameOfChild(String c_nameOfChild) {
		this.c_nameOfChild = c_nameOfChild;
	}

	public void setC_dateOfBirth(String c_dateOfBirth) {
		this.c_dateOfBirth = c_dateOfBirth;
	}

	public void setC_age(Integer c_age) {
		this.c_age = c_age;
	}

	public void setC_gender(Integer c_gender) {
		this.c_gender = c_gender;
	}

	public void setC_dateOfAdmission(String c_dateOfAdmission) {
		this.c_dateOfAdmission = c_dateOfAdmission;
	}

	public void setC_caringRegNoDate(String c_caringRegNoDate) {
		this.c_caringRegNoDate = c_caringRegNoDate;
	}

	public void setC_saaCategoryName(Integer c_saaCategoryName) {
		this.c_saaCategoryName = c_saaCategoryName;
	}

	public void setC_typeOfChild(Integer c_typeOfChild) {
		this.c_typeOfChild = c_typeOfChild;
	}

	public void setC_referredByCwc(Integer c_referredByCwc) {
		this.c_referredByCwc = c_referredByCwc;
	}

	public void setC_dateOfpublication(String c_dateOfpublication) {
		this.c_dateOfpublication = c_dateOfpublication;
	}

	public void setC_remarks(String c_remarks) {
		this.c_remarks = c_remarks;
	}

	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	}

}
