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
 * 12-Dec-2017 11:18:55 am
 *
 */
@Entity
@Table(name="saa_section_b")
public class SaaSectionB {
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column
	private Integer saaSectionBId;
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	private SaaDetails saaId;
    @Column
    private Integer b1_BoysZeroToTwo;
    @Column
    private Integer b1_BoysTwoToFour;
    @Column
    private Integer b1_BoysFourToSix;
    @Column
    private Integer b1_BoysGreaterThanSix;
    @Column
    private Integer b1_BoysTotal;
    @Column
    private Integer b1_GirlsZeroToTwo;
    @Column
    private Integer b1_GirlsTwoToFour;
    @Column
    private Integer b1_GirlsFourToSix;
    @Column
    private Integer b1_GirlsGreaterThanSix;
    @Column
    private Integer b1_GirlsTotal;
    @Column
    private Integer b1_GrandTotal;
    @Column
    private Integer b1_ABoysZeroToTwo;
    @Column
    private Integer b1_ABoysTwoToFour;
    @Column
    private Integer b1_ABoysFourToSix;
    @Column
    private Integer b1_ABoysGreaterThanSix;
    @Column
    private Integer b1_ABoysTotal;
    @Column
    private Integer b1_AGirlsZeroToTwo;
    @Column
    private Integer b1_AGirlsTwoToFour;
    @Column
    private Integer b1_AGirlsFourToSix;
    @Column
    private Integer b1_AGirlsGreaterThanSix;
    @Column
    private Integer b1_AGirlsTotal;
    @Column
    private Integer b1_AGrandTotal;
    
	public Integer getSaaSectionBId() {
		return saaSectionBId;
	}
	public Integer getB1_BoysZeroToTwo() {
		return b1_BoysZeroToTwo;
	}
	public Integer getB1_BoysTwoToFour() {
		return b1_BoysTwoToFour;
	}
	public Integer getB1_BoysFourToSix() {
		return b1_BoysFourToSix;
	}
	public Integer getB1_BoysGreaterThanSix() {
		return b1_BoysGreaterThanSix;
	}
	public Integer getB1_BoysTotal() {
		return b1_BoysTotal;
	}
	public Integer getB1_GirlsZeroToTwo() {
		return b1_GirlsZeroToTwo;
	}
	public Integer getB1_GirlsTwoToFour() {
		return b1_GirlsTwoToFour;
	}
	public Integer getB1_GirlsFourToSix() {
		return b1_GirlsFourToSix;
	}
	public Integer getB1_GirlsGreaterThanSix() {
		return b1_GirlsGreaterThanSix;
	}
	public Integer getB1_GirlsTotal() {
		return b1_GirlsTotal;
	}
	public Integer getB1_GrandTotal() {
		return b1_GrandTotal;
	}
	public Integer getB1_ABoysZeroToTwo() {
		return b1_ABoysZeroToTwo;
	}
	public Integer getB1_ABoysTwoToFour() {
		return b1_ABoysTwoToFour;
	}
	public Integer getB1_ABoysFourToSix() {
		return b1_ABoysFourToSix;
	}
	public Integer getB1_ABoysGreaterThanSix() {
		return b1_ABoysGreaterThanSix;
	}
	public Integer getB1_ABoysTotal() {
		return b1_ABoysTotal;
	}
	public Integer getB1_AGirlsZeroToTwo() {
		return b1_AGirlsZeroToTwo;
	}
	public Integer getB1_AGirlsTwoToFour() {
		return b1_AGirlsTwoToFour;
	}
	public Integer getB1_AGirlsFourToSix() {
		return b1_AGirlsFourToSix;
	}
	public Integer getB1_AGirlsGreaterThanSix() {
		return b1_AGirlsGreaterThanSix;
	}
	public Integer getB1_AGirlsTotal() {
		return b1_AGirlsTotal;
	}
	public Integer getB1_AGrandTotal() {
		return b1_AGrandTotal;
	}
	public void setSaaSectionBId(Integer saaSectionBId) {
		this.saaSectionBId = saaSectionBId;
	}
	public void setB1_BoysZeroToTwo(Integer b1_BoysZeroToTwo) {
		this.b1_BoysZeroToTwo = b1_BoysZeroToTwo;
	}
	public void setB1_BoysTwoToFour(Integer b1_BoysTwoToFour) {
		this.b1_BoysTwoToFour = b1_BoysTwoToFour;
	}
	public void setB1_BoysFourToSix(Integer b1_BoysFourToSix) {
		this.b1_BoysFourToSix = b1_BoysFourToSix;
	}
	public void setB1_BoysGreaterThanSix(Integer b1_BoysGreaterThanSix) {
		this.b1_BoysGreaterThanSix = b1_BoysGreaterThanSix;
	}
	public void setB1_BoysTotal(Integer b1_BoysTotal) {
		this.b1_BoysTotal = b1_BoysTotal;
	}
	public void setB1_GirlsZeroToTwo(Integer b1_GirlsZeroToTwo) {
		this.b1_GirlsZeroToTwo = b1_GirlsZeroToTwo;
	}
	public void setB1_GirlsTwoToFour(Integer b1_GirlsTwoToFour) {
		this.b1_GirlsTwoToFour = b1_GirlsTwoToFour;
	}
	public void setB1_GirlsFourToSix(Integer b1_GirlsFourToSix) {
		this.b1_GirlsFourToSix = b1_GirlsFourToSix;
	}
	public void setB1_GirlsGreaterThanSix(Integer b1_GirlsGreaterThanSix) {
		this.b1_GirlsGreaterThanSix = b1_GirlsGreaterThanSix;
	}
	public void setB1_GirlsTotal(Integer b1_GirlsTotal) {
		this.b1_GirlsTotal = b1_GirlsTotal;
	}
	public void setB1_GrandTotal(Integer b1_GrandTotal) {
		this.b1_GrandTotal = b1_GrandTotal;
	}
	public void setB1_ABoysZeroToTwo(Integer b1_ABoysZeroToTwo) {
		this.b1_ABoysZeroToTwo = b1_ABoysZeroToTwo;
	}
	public void setB1_ABoysTwoToFour(Integer b1_ABoysTwoToFour) {
		this.b1_ABoysTwoToFour = b1_ABoysTwoToFour;
	}
	public void setB1_ABoysFourToSix(Integer b1_ABoysFourToSix) {
		this.b1_ABoysFourToSix = b1_ABoysFourToSix;
	}
	public void setB1_ABoysGreaterThanSix(Integer b1_ABoysGreaterThanSix) {
		this.b1_ABoysGreaterThanSix = b1_ABoysGreaterThanSix;
	}
	public void setB1_ABoysTotal(Integer b1_ABoysTotal) {
		this.b1_ABoysTotal = b1_ABoysTotal;
	}
	public void setB1_AGirlsZeroToTwo(Integer b1_AGirlsZeroToTwo) {
		this.b1_AGirlsZeroToTwo = b1_AGirlsZeroToTwo;
	}
	public void setB1_AGirlsTwoToFour(Integer b1_AGirlsTwoToFour) {
		this.b1_AGirlsTwoToFour = b1_AGirlsTwoToFour;
	}
	public void setB1_AGirlsFourToSix(Integer b1_AGirlsFourToSix) {
		this.b1_AGirlsFourToSix = b1_AGirlsFourToSix;
	}
	public void setB1_AGirlsGreaterThanSix(Integer b1_AGirlsGreaterThanSix) {
		this.b1_AGirlsGreaterThanSix = b1_AGirlsGreaterThanSix;
	}
	public void setB1_AGirlsTotal(Integer b1_AGirlsTotal) {
		this.b1_AGirlsTotal = b1_AGirlsTotal;
	}
	public void setB1_AGrandTotal(Integer b1_AGrandTotal) {
		this.b1_AGrandTotal = b1_AGrandTotal;
	}
	public SaaDetails getSaaId() {
		return saaId;
	}
	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	}
   
   
}
