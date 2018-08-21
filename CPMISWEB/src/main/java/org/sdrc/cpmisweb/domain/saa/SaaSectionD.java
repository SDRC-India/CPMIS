/**
 * 
 */
package org.sdrc.cpmisweb.domain.saa;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 12-Dec-2017 11:19:08 am
 *
 */
@Entity
@Table(name="saa_section_d")
public class SaaSectionD {

	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column
	private Integer saaSectionDId;
	
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	private SaaDetails saaId;
	@Column
	private Integer d1_BoysZeroToTwo;
	@Column
	private Integer d1_BoysTwoToFour;
	@Column
	private Integer d1_BoysFourToSix;
	@Column
	private Integer d1_BoysGreaterThanSix;
	@Column
	private Integer d1_BoysTotal;
	@Column
	private Integer d1_GirlsZeroToTwo;
	@Column
	private Integer d1_GirlsTwoToFour;
	@Column
	private Integer d1_GirlsFourToSix;
	@Column
	private Integer d1_GirlsGreaterThanSix;
	@Column
	private Integer d1_GirlsTotal;
	@Column
	private Integer d1_GrandTotal;
	@Column
	private Integer d2_BoysZeroToTwo;
	@Column
	private Integer d2_BoysTwoToFour;
	@Column
	private Integer d2_BoysFourToSix;
	@Column
	private Integer d2_BoysGreaterThanSix;
	@Column
	private Integer d2_BoysTotal;
	@Column
	private Integer d2_GirlsZeroToTwo;
	@Column
	private Integer d2_GirlsTwoToFour;
	@Column
	private Integer d2_GirlsFourToSix;
	@Column
	private Integer d2_GirlsGreaterThanSix;
	@Column
	private Integer d2_GirlsTotal;
	@Column
	private Integer d2_GrandTotal;
	
	public Integer getSaaSectionDId() {
		return saaSectionDId;
	}
	public Integer getD1_BoysZeroToTwo() {
		return d1_BoysZeroToTwo;
	}
	public Integer getD1_BoysTwoToFour() {
		return d1_BoysTwoToFour;
	}
	public Integer getD1_BoysFourToSix() {
		return d1_BoysFourToSix;
	}
	public Integer getD1_BoysGreaterThanSix() {
		return d1_BoysGreaterThanSix;
	}
	public Integer getD1_BoysTotal() {
		return d1_BoysTotal;
	}
	public Integer getD1_GirlsZeroToTwo() {
		return d1_GirlsZeroToTwo;
	}
	public Integer getD1_GirlsTwoToFour() {
		return d1_GirlsTwoToFour;
	}
	public Integer getD1_GirlsFourToSix() {
		return d1_GirlsFourToSix;
	}
	public Integer getD1_GirlsGreaterThanSix() {
		return d1_GirlsGreaterThanSix;
	}
	public Integer getD1_GirlsTotal() {
		return d1_GirlsTotal;
	}
	public Integer getD1_GrandTotal() {
		return d1_GrandTotal;
	}
	public Integer getD2_BoysZeroToTwo() {
		return d2_BoysZeroToTwo;
	}
	public Integer getD2_BoysTwoToFour() {
		return d2_BoysTwoToFour;
	}
	public Integer getD2_BoysFourToSix() {
		return d2_BoysFourToSix;
	}
	public Integer getD2_BoysGreaterThanSix() {
		return d2_BoysGreaterThanSix;
	}
	public Integer getD2_BoysTotal() {
		return d2_BoysTotal;
	}
	public Integer getD2_GirlsZeroToTwo() {
		return d2_GirlsZeroToTwo;
	}
	public Integer getD2_GirlsTwoToFour() {
		return d2_GirlsTwoToFour;
	}
	public Integer getD2_GirlsFourToSix() {
		return d2_GirlsFourToSix;
	}
	public Integer getD2_GirlsGreaterThanSix() {
		return d2_GirlsGreaterThanSix;
	}
	public Integer getD2_GirlsTotal() {
		return d2_GirlsTotal;
	}
	public Integer getD2_GrandTotal() {
		return d2_GrandTotal;
	}
	public void setSaaSectionDId(Integer saaSectionDId) {
		this.saaSectionDId = saaSectionDId;
	}
	public void setD1_BoysZeroToTwo(Integer d1_BoysZeroToTwo) {
		this.d1_BoysZeroToTwo = d1_BoysZeroToTwo;
	}
	public void setD1_BoysTwoToFour(Integer d1_BoysTwoToFour) {
		this.d1_BoysTwoToFour = d1_BoysTwoToFour;
	}
	public void setD1_BoysFourToSix(Integer d1_BoysFourToSix) {
		this.d1_BoysFourToSix = d1_BoysFourToSix;
	}
	public void setD1_BoysGreaterThanSix(Integer d1_BoysGreaterThanSix) {
		this.d1_BoysGreaterThanSix = d1_BoysGreaterThanSix;
	}
	public void setD1_BoysTotal(Integer d1_BoysTotal) {
		this.d1_BoysTotal = d1_BoysTotal;
	}
	public void setD1_GirlsZeroToTwo(Integer d1_GirlsZeroToTwo) {
		this.d1_GirlsZeroToTwo = d1_GirlsZeroToTwo;
	}
	public void setD1_GirlsTwoToFour(Integer d1_GirlsTwoToFour) {
		this.d1_GirlsTwoToFour = d1_GirlsTwoToFour;
	}
	public void setD1_GirlsFourToSix(Integer d1_GirlsFourToSix) {
		this.d1_GirlsFourToSix = d1_GirlsFourToSix;
	}
	public void setD1_GirlsGreaterThanSix(Integer d1_GirlsGreaterThanSix) {
		this.d1_GirlsGreaterThanSix = d1_GirlsGreaterThanSix;
	}
	public void setD1_GirlsTotal(Integer d1_GirlsTotal) {
		this.d1_GirlsTotal = d1_GirlsTotal;
	}
	public void setD1_GrandTotal(Integer d1_GrandTotal) {
		this.d1_GrandTotal = d1_GrandTotal;
	}
	public void setD2_BoysZeroToTwo(Integer d2_BoysZeroToTwo) {
		this.d2_BoysZeroToTwo = d2_BoysZeroToTwo;
	}
	public void setD2_BoysTwoToFour(Integer d2_BoysTwoToFour) {
		this.d2_BoysTwoToFour = d2_BoysTwoToFour;
	}
	public void setD2_BoysFourToSix(Integer d2_BoysFourToSix) {
		this.d2_BoysFourToSix = d2_BoysFourToSix;
	}
	public void setD2_BoysGreaterThanSix(Integer d2_BoysGreaterThanSix) {
		this.d2_BoysGreaterThanSix = d2_BoysGreaterThanSix;
	}
	public void setD2_BoysTotal(Integer d2_BoysTotal) {
		this.d2_BoysTotal = d2_BoysTotal;
	}
	public void setD2_GirlsZeroToTwo(Integer d2_GirlsZeroToTwo) {
		this.d2_GirlsZeroToTwo = d2_GirlsZeroToTwo;
	}
	public void setD2_GirlsTwoToFour(Integer d2_GirlsTwoToFour) {
		this.d2_GirlsTwoToFour = d2_GirlsTwoToFour;
	}
	public void setD2_GirlsFourToSix(Integer d2_GirlsFourToSix) {
		this.d2_GirlsFourToSix = d2_GirlsFourToSix;
	}
	public void setD2_GirlsGreaterThanSix(Integer d2_GirlsGreaterThanSix) {
		this.d2_GirlsGreaterThanSix = d2_GirlsGreaterThanSix;
	}
	public void setD2_GirlsTotal(Integer d2_GirlsTotal) {
		this.d2_GirlsTotal = d2_GirlsTotal;
	}
	public void setD2_GrandTotal(Integer d2_GrandTotal) {
		this.d2_GrandTotal = d2_GrandTotal;
	}
	public SaaDetails getSaaId() {
		return saaId;
	}
	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	}
	
	
}
