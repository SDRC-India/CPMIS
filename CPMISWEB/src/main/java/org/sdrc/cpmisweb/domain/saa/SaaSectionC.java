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
 * 12-Dec-2017 11:19:01 am
 *
 */
@Entity
@Table(name="saa_section_c")
public class SaaSectionC {
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column
	private Integer saaSectionCId;
	
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	private SaaDetails saaId;
	
    @Column
    private Integer c1_BoysZeroToTwo;
    @Column
    private Integer c1_BoysTwoToFour;
    @Column
    private Integer c1_BoysFourToSix;
    @Column
    private Integer c1_BoysGreaterThanSix;
    @Column
    private Integer c1_BoysTotal;
    @Column
    private Integer c1_GirlsZeroToTwo;
    @Column
    private Integer c1_GirlsTwoToFour;
    @Column
    private Integer c1_GirlsFourToSix;
    @Column
    private Integer c1_GirlsGreaterThanSix;
    @Column
    private Integer c1_GirlsTotal;
    @Column
    private Integer c1_GrandTotal;
    @Column
    private Integer c2_BoysZeroToTwo;
    @Column
    private Integer c2_BoysTwoToFour;
    @Column
    private Integer c2_BoysFourToSix;
    @Column
    private Integer c2_BoysGreaterThanSix;
    @Column
    private Integer c2_BoysTotal;
    @Column
    private Integer c2_GirlsZeroToTwo;
    @Column
    private Integer c2_GirlsTwoToFour;
    @Column
    private Integer c2_GirlsFourToSix;
    @Column
    private Integer c2_GirlsGreaterThanSix;
    @Column
    private Integer c2_GirlsTotal;
    @Column
    private Integer c2_GrandTotal;
    @Column
    private Integer c3_BoysZeroToTwo;
    @Column
    private Integer c3_BoysTwoToFour;
    @Column
    private Integer c3_BoysFourToSix;
    @Column
    private Integer c3_BoysGreaterThanSix;
    @Column
    private Integer c3_BoysTotal;
    @Column
    private Integer c3_GirlsZeroToTwo;
    @Column
    private Integer c3_GirlsTwoToFour;
    @Column
    private Integer c3_GirlsFourToSix;
    @Column
    private Integer c3_GirlsGreaterThanSix;
    @Column
    private Integer c3_GirlsTotal;
    @Column
    private Integer c3_GrandTotal;
    @Column
    private Integer c4_BoysZeroToTwo;
    @Column
    private Integer c4_BoysTwoToFour;
    @Column
    private Integer c4_BoysFourToSix;
    @Column
    private Integer c4_BoysGreaterThanSix;
    @Column
    private Integer c4_BoysTotal;
    @Column
    private Integer c4_GirlsZeroToTwo;
    @Column
    private Integer c4_GirlsTwoToFour;
    @Column
    private Integer c4_GirlsFourToSix;
    @Column
    private Integer c4_GirlsGreaterThanSix;
    @Column
    private Integer c4_GirlsTotal;
    @Column
    private Integer c4_GrandTotal;
    @Column
    private Integer c5_BoysZeroToTwo;
    @Column
    private Integer c5_BoysTwoToFour;
    @Column
    private Integer c5_BoysFourToSix;
    @Column
    private Integer c5_BoysGreaterThanSix;
    @Column
    private Integer c5_BoysTotal;
    @Column
    private Integer c5_GirlsZeroToTwo;
    @Column
    private Integer c5_GirlsTwoToFour;
    @Column
    private Integer c5_GirlsFourToSix;
    @Column
    private Integer c5_GirlsGreaterThanSix;
    @Column
    private Integer c5_GirlsTotal;
    @Column
    private Integer c5_GrandTotal;
    @Column
    private Integer c6_BoysZeroToTwo;
    @Column
    private Integer c6_BoysTwoToFour;
    @Column
    private Integer c6_BoysFourToSix;
    @Column
    private Integer c6_BoysGreaterThanSix;
    @Column
    private Integer c6_BoysTotal;
    @Column
    private Integer c6_GirlsZeroToTwo;
    @Column
    private Integer c6_GirlsTwoToFour;
    @Column
    private Integer c6_GirlsFourToSix;
    @Column
    private Integer c6_GirlsGreaterThanSix;
    @Column
    private Integer c6_GirlsTotal;
    @Column
    private Integer c6_GrandTotal;
    @Column
    private Integer c1_ABoysZeroToTwo;
    @Column
    private Integer c1_ABoysTwoToFour;
    @Column
    private Integer c1_ABoysFourToSix;
    @Column
    private Integer c1_ABoysGreaterThanSix;
    @Column
    private Integer c1_ABoysTotal;
    @Column
    private Integer c1_AGirlsZeroToTwo;
    @Column
    private Integer c1_AGirlsTwoToFour;
    @Column
    private Integer c1_AGirlsFourToSix;
    @Column
    private Integer c1_AGirlsGreaterThanSix;
    @Column
    private Integer c1_AGirlsTotal;
    @Column
    private Integer c1_AGrandTotal;
    @Column
    private Integer c2_ABoysZeroToTwo;
    @Column
    private Integer c2_ABoysTwoToFour;
    @Column
    private Integer c2_ABoysFourToSix;
    @Column
    private Integer c2_ABoysGreaterThanSix;
    @Column
    private Integer c2_ABoysTotal;
    @Column
    private Integer c2_AGirlsZeroToTwo;
    @Column
    private Integer c2_AGirlsTwoToFour;
    @Column
    private Integer c2_AGirlsFourToSix;
    @Column
    private Integer c2_AGirlsGreaterThanSix;
    @Column
    private Integer c2_AGirlsTotal;
    @Column
    private Integer c2_AGrandTotal;
    @Column
    private Integer c3_ABoysZeroToTwo;
    @Column
    private Integer c3_ABoysTwoToFour;
    @Column
    private Integer c3_ABoysFourToSix;
    @Column
    private Integer c3_ABoysGreaterThanSix;
    @Column
    private Integer c3_ABoysTotal;
    @Column
    private Integer c3_AGirlsZeroToTwo;
    @Column
    private Integer c3_AGirlsTwoToFour;
    @Column
    private Integer c3_AGirlsFourToSix;
    @Column
    private Integer c3_AGirlsGreaterThanSix;
    @Column
    private Integer c3_AGirlsTotal;
    @Column
    private Integer c3_AGrandTotal;
    @Column
    private Integer c4_ABoysZeroToTwo;
    @Column
    private Integer c4_ABoysTwoToFour;
    @Column
    private Integer c4_ABoysFourToSix;
    @Column
    private Integer c4_ABoysGreaterThanSix;
    @Column
    private Integer c4_ABoysTotal;
    @Column
    private Integer c4_AGirlsZeroToTwo;
    @Column
    private Integer c4_AGirlsTwoToFour;
    @Column
    private Integer c4_AGirlsFourToSix;
    @Column
    private Integer c4_AGirlsGreaterThanSix;
    @Column
    private Integer c4_AGirlsTotal;
    @Column
    private Integer c4_AGrandTotal;
    @Column
    private Integer c5_ABoysZeroToTwo;
    @Column
    private Integer c5_ABoysTwoToFour;
    @Column
    private Integer c5_ABoysFourToSix;
    @Column
    private Integer c5_ABoysGreaterThanSix;
    @Column
    private Integer c5_ABoysTotal;
    @Column
    private Integer c5_AGirlsZeroToTwo;
    @Column
    private Integer c5_AGirlsTwoToFour;
    @Column
    private Integer c5_AGirlsFourToSix;
    @Column
    private Integer c5_AGirlsGreaterThanSix;
    @Column
    private Integer c5_AGirlsTotal;
    @Column
    private Integer c5_AGrandTotal;
    @Column
    private Integer c6_ABoysZeroToTwo;
    @Column
    private Integer c6_ABoysTwoToFour;
    @Column
    private Integer c6_ABoysFourToSix;
    @Column
    private Integer c6_ABoysGreaterThanSix;
    @Column
    private Integer c6_ABoysTotal;
    @Column
    private Integer c6_AGirlsZeroToTwo;
    @Column
    private Integer c6_AGirlsTwoToFour;
    @Column
    private Integer c6_AGirlsFourToSix;
    @Column
    private Integer c6_AGirlsGreaterThanSix;
    @Column
    private Integer c6_AGirlsTotal;
    @Column
    private Integer c6_AGrandTotal;
    
	public Integer getSaaSectionCId() {
		return saaSectionCId;
	}
	public Integer getC1_BoysZeroToTwo() {
		return c1_BoysZeroToTwo;
	}
	public Integer getC1_BoysTwoToFour() {
		return c1_BoysTwoToFour;
	}
	public Integer getC1_BoysFourToSix() {
		return c1_BoysFourToSix;
	}
	public Integer getC1_BoysGreaterThanSix() {
		return c1_BoysGreaterThanSix;
	}
	public Integer getC1_BoysTotal() {
		return c1_BoysTotal;
	}
	public Integer getC1_GirlsZeroToTwo() {
		return c1_GirlsZeroToTwo;
	}
	public Integer getC1_GirlsTwoToFour() {
		return c1_GirlsTwoToFour;
	}
	public Integer getC1_GirlsFourToSix() {
		return c1_GirlsFourToSix;
	}
	public Integer getC1_GirlsGreaterThanSix() {
		return c1_GirlsGreaterThanSix;
	}
	public Integer getC1_GirlsTotal() {
		return c1_GirlsTotal;
	}
	public Integer getC1_GrandTotal() {
		return c1_GrandTotal;
	}
	public Integer getC2_BoysZeroToTwo() {
		return c2_BoysZeroToTwo;
	}
	public Integer getC2_BoysTwoToFour() {
		return c2_BoysTwoToFour;
	}
	public Integer getC2_BoysFourToSix() {
		return c2_BoysFourToSix;
	}
	public Integer getC2_BoysGreaterThanSix() {
		return c2_BoysGreaterThanSix;
	}
	public Integer getC2_BoysTotal() {
		return c2_BoysTotal;
	}
	public Integer getC2_GirlsZeroToTwo() {
		return c2_GirlsZeroToTwo;
	}
	public Integer getC2_GirlsTwoToFour() {
		return c2_GirlsTwoToFour;
	}
	public Integer getC2_GirlsFourToSix() {
		return c2_GirlsFourToSix;
	}
	public Integer getC2_GirlsGreaterThanSix() {
		return c2_GirlsGreaterThanSix;
	}
	public Integer getC2_GirlsTotal() {
		return c2_GirlsTotal;
	}
	public Integer getC2_GrandTotal() {
		return c2_GrandTotal;
	}
	public Integer getC3_BoysZeroToTwo() {
		return c3_BoysZeroToTwo;
	}
	public Integer getC3_BoysTwoToFour() {
		return c3_BoysTwoToFour;
	}
	public Integer getC3_BoysFourToSix() {
		return c3_BoysFourToSix;
	}
	public Integer getC3_BoysGreaterThanSix() {
		return c3_BoysGreaterThanSix;
	}
	public Integer getC3_BoysTotal() {
		return c3_BoysTotal;
	}
	public Integer getC3_GirlsZeroToTwo() {
		return c3_GirlsZeroToTwo;
	}
	public Integer getC3_GirlsTwoToFour() {
		return c3_GirlsTwoToFour;
	}
	public Integer getC3_GirlsFourToSix() {
		return c3_GirlsFourToSix;
	}
	public Integer getC3_GirlsGreaterThanSix() {
		return c3_GirlsGreaterThanSix;
	}
	public Integer getC3_GirlsTotal() {
		return c3_GirlsTotal;
	}
	public Integer getC3_GrandTotal() {
		return c3_GrandTotal;
	}
	public Integer getC4_BoysZeroToTwo() {
		return c4_BoysZeroToTwo;
	}
	public Integer getC4_BoysTwoToFour() {
		return c4_BoysTwoToFour;
	}
	public Integer getC4_BoysFourToSix() {
		return c4_BoysFourToSix;
	}
	public Integer getC4_BoysGreaterThanSix() {
		return c4_BoysGreaterThanSix;
	}
	public Integer getC4_BoysTotal() {
		return c4_BoysTotal;
	}
	public Integer getC4_GirlsZeroToTwo() {
		return c4_GirlsZeroToTwo;
	}
	public Integer getC4_GirlsTwoToFour() {
		return c4_GirlsTwoToFour;
	}
	public Integer getC4_GirlsFourToSix() {
		return c4_GirlsFourToSix;
	}
	public Integer getC4_GirlsGreaterThanSix() {
		return c4_GirlsGreaterThanSix;
	}
	public Integer getC4_GirlsTotal() {
		return c4_GirlsTotal;
	}
	public Integer getC4_GrandTotal() {
		return c4_GrandTotal;
	}
	public Integer getC5_BoysZeroToTwo() {
		return c5_BoysZeroToTwo;
	}
	public Integer getC5_BoysTwoToFour() {
		return c5_BoysTwoToFour;
	}
	public Integer getC5_BoysFourToSix() {
		return c5_BoysFourToSix;
	}
	public Integer getC5_BoysGreaterThanSix() {
		return c5_BoysGreaterThanSix;
	}
	public Integer getC5_BoysTotal() {
		return c5_BoysTotal;
	}
	public Integer getC5_GirlsZeroToTwo() {
		return c5_GirlsZeroToTwo;
	}
	public Integer getC5_GirlsTwoToFour() {
		return c5_GirlsTwoToFour;
	}
	public Integer getC5_GirlsFourToSix() {
		return c5_GirlsFourToSix;
	}
	public Integer getC5_GirlsGreaterThanSix() {
		return c5_GirlsGreaterThanSix;
	}
	public Integer getC5_GirlsTotal() {
		return c5_GirlsTotal;
	}
	public Integer getC5_GrandTotal() {
		return c5_GrandTotal;
	}
	public Integer getC6_BoysZeroToTwo() {
		return c6_BoysZeroToTwo;
	}
	public Integer getC6_BoysTwoToFour() {
		return c6_BoysTwoToFour;
	}
	public Integer getC6_BoysFourToSix() {
		return c6_BoysFourToSix;
	}
	public Integer getC6_BoysGreaterThanSix() {
		return c6_BoysGreaterThanSix;
	}
	public Integer getC6_BoysTotal() {
		return c6_BoysTotal;
	}
	public Integer getC6_GirlsZeroToTwo() {
		return c6_GirlsZeroToTwo;
	}
	public Integer getC6_GirlsTwoToFour() {
		return c6_GirlsTwoToFour;
	}
	public Integer getC6_GirlsFourToSix() {
		return c6_GirlsFourToSix;
	}
	public Integer getC6_GirlsGreaterThanSix() {
		return c6_GirlsGreaterThanSix;
	}
	public Integer getC6_GirlsTotal() {
		return c6_GirlsTotal;
	}
	public Integer getC6_GrandTotal() {
		return c6_GrandTotal;
	}
	public Integer getC1_ABoysZeroToTwo() {
		return c1_ABoysZeroToTwo;
	}
	public Integer getC1_ABoysTwoToFour() {
		return c1_ABoysTwoToFour;
	}
	public Integer getC1_ABoysFourToSix() {
		return c1_ABoysFourToSix;
	}
	public Integer getC1_ABoysGreaterThanSix() {
		return c1_ABoysGreaterThanSix;
	}
	public Integer getC1_ABoysTotal() {
		return c1_ABoysTotal;
	}
	public Integer getC1_AGirlsZeroToTwo() {
		return c1_AGirlsZeroToTwo;
	}
	public Integer getC1_AGirlsTwoToFour() {
		return c1_AGirlsTwoToFour;
	}
	public Integer getC1_AGirlsFourToSix() {
		return c1_AGirlsFourToSix;
	}
	public Integer getC1_AGirlsGreaterThanSix() {
		return c1_AGirlsGreaterThanSix;
	}
	public Integer getC1_AGirlsTotal() {
		return c1_AGirlsTotal;
	}
	public Integer getC1_AGrandTotal() {
		return c1_AGrandTotal;
	}
	public Integer getC2_ABoysZeroToTwo() {
		return c2_ABoysZeroToTwo;
	}
	public Integer getC2_ABoysTwoToFour() {
		return c2_ABoysTwoToFour;
	}
	public Integer getC2_ABoysFourToSix() {
		return c2_ABoysFourToSix;
	}
	public Integer getC2_ABoysGreaterThanSix() {
		return c2_ABoysGreaterThanSix;
	}
	public Integer getC2_ABoysTotal() {
		return c2_ABoysTotal;
	}
	public Integer getC2_AGirlsZeroToTwo() {
		return c2_AGirlsZeroToTwo;
	}
	public Integer getC2_AGirlsTwoToFour() {
		return c2_AGirlsTwoToFour;
	}
	public Integer getC2_AGirlsFourToSix() {
		return c2_AGirlsFourToSix;
	}
	public Integer getC2_AGirlsGreaterThanSix() {
		return c2_AGirlsGreaterThanSix;
	}
	public Integer getC2_AGirlsTotal() {
		return c2_AGirlsTotal;
	}
	public Integer getC2_AGrandTotal() {
		return c2_AGrandTotal;
	}
	public Integer getC3_ABoysZeroToTwo() {
		return c3_ABoysZeroToTwo;
	}
	public Integer getC3_ABoysTwoToFour() {
		return c3_ABoysTwoToFour;
	}
	public Integer getC3_ABoysFourToSix() {
		return c3_ABoysFourToSix;
	}
	public Integer getC3_ABoysGreaterThanSix() {
		return c3_ABoysGreaterThanSix;
	}
	public Integer getC3_ABoysTotal() {
		return c3_ABoysTotal;
	}
	public Integer getC3_AGirlsZeroToTwo() {
		return c3_AGirlsZeroToTwo;
	}
	public Integer getC3_AGirlsTwoToFour() {
		return c3_AGirlsTwoToFour;
	}
	public Integer getC3_AGirlsFourToSix() {
		return c3_AGirlsFourToSix;
	}
	public Integer getC3_AGirlsGreaterThanSix() {
		return c3_AGirlsGreaterThanSix;
	}
	public Integer getC3_AGirlsTotal() {
		return c3_AGirlsTotal;
	}
	public Integer getC3_AGrandTotal() {
		return c3_AGrandTotal;
	}
	public Integer getC4_ABoysZeroToTwo() {
		return c4_ABoysZeroToTwo;
	}
	public Integer getC4_ABoysTwoToFour() {
		return c4_ABoysTwoToFour;
	}
	public Integer getC4_ABoysFourToSix() {
		return c4_ABoysFourToSix;
	}
	public Integer getC4_ABoysGreaterThanSix() {
		return c4_ABoysGreaterThanSix;
	}
	public Integer getC4_ABoysTotal() {
		return c4_ABoysTotal;
	}
	public Integer getC4_AGirlsZeroToTwo() {
		return c4_AGirlsZeroToTwo;
	}
	public Integer getC4_AGirlsTwoToFour() {
		return c4_AGirlsTwoToFour;
	}
	public Integer getC4_AGirlsFourToSix() {
		return c4_AGirlsFourToSix;
	}
	public Integer getC4_AGirlsGreaterThanSix() {
		return c4_AGirlsGreaterThanSix;
	}
	public Integer getC4_AGirlsTotal() {
		return c4_AGirlsTotal;
	}
	public Integer getC4_AGrandTotal() {
		return c4_AGrandTotal;
	}
	public Integer getC5_ABoysZeroToTwo() {
		return c5_ABoysZeroToTwo;
	}
	public Integer getC5_ABoysTwoToFour() {
		return c5_ABoysTwoToFour;
	}
	public Integer getC5_ABoysFourToSix() {
		return c5_ABoysFourToSix;
	}
	public Integer getC5_ABoysGreaterThanSix() {
		return c5_ABoysGreaterThanSix;
	}
	public Integer getC5_ABoysTotal() {
		return c5_ABoysTotal;
	}
	public Integer getC5_AGirlsZeroToTwo() {
		return c5_AGirlsZeroToTwo;
	}
	public Integer getC5_AGirlsTwoToFour() {
		return c5_AGirlsTwoToFour;
	}
	public Integer getC5_AGirlsFourToSix() {
		return c5_AGirlsFourToSix;
	}
	public Integer getC5_AGirlsGreaterThanSix() {
		return c5_AGirlsGreaterThanSix;
	}
	public Integer getC5_AGirlsTotal() {
		return c5_AGirlsTotal;
	}
	public Integer getC5_AGrandTotal() {
		return c5_AGrandTotal;
	}
	public Integer getC6_ABoysZeroToTwo() {
		return c6_ABoysZeroToTwo;
	}
	public Integer getC6_ABoysTwoToFour() {
		return c6_ABoysTwoToFour;
	}
	public Integer getC6_ABoysFourToSix() {
		return c6_ABoysFourToSix;
	}
	public Integer getC6_ABoysGreaterThanSix() {
		return c6_ABoysGreaterThanSix;
	}
	public Integer getC6_ABoysTotal() {
		return c6_ABoysTotal;
	}
	public Integer getC6_AGirlsZeroToTwo() {
		return c6_AGirlsZeroToTwo;
	}
	public Integer getC6_AGirlsTwoToFour() {
		return c6_AGirlsTwoToFour;
	}
	public Integer getC6_AGirlsFourToSix() {
		return c6_AGirlsFourToSix;
	}
	public Integer getC6_AGirlsGreaterThanSix() {
		return c6_AGirlsGreaterThanSix;
	}
	public Integer getC6_AGirlsTotal() {
		return c6_AGirlsTotal;
	}
	public Integer getC6_AGrandTotal() {
		return c6_AGrandTotal;
	}
	public void setSaaSectionCId(Integer saaSectionCId) {
		this.saaSectionCId = saaSectionCId;
	}
	public void setC1_BoysZeroToTwo(Integer c1_BoysZeroToTwo) {
		this.c1_BoysZeroToTwo = c1_BoysZeroToTwo;
	}
	public void setC1_BoysTwoToFour(Integer c1_BoysTwoToFour) {
		this.c1_BoysTwoToFour = c1_BoysTwoToFour;
	}
	public void setC1_BoysFourToSix(Integer c1_BoysFourToSix) {
		this.c1_BoysFourToSix = c1_BoysFourToSix;
	}
	public void setC1_BoysGreaterThanSix(Integer c1_BoysGreaterThanSix) {
		this.c1_BoysGreaterThanSix = c1_BoysGreaterThanSix;
	}
	public void setC1_BoysTotal(Integer c1_BoysTotal) {
		this.c1_BoysTotal = c1_BoysTotal;
	}
	public void setC1_GirlsZeroToTwo(Integer c1_GirlsZeroToTwo) {
		this.c1_GirlsZeroToTwo = c1_GirlsZeroToTwo;
	}
	public void setC1_GirlsTwoToFour(Integer c1_GirlsTwoToFour) {
		this.c1_GirlsTwoToFour = c1_GirlsTwoToFour;
	}
	public void setC1_GirlsFourToSix(Integer c1_GirlsFourToSix) {
		this.c1_GirlsFourToSix = c1_GirlsFourToSix;
	}
	public void setC1_GirlsGreaterThanSix(Integer c1_GirlsGreaterThanSix) {
		this.c1_GirlsGreaterThanSix = c1_GirlsGreaterThanSix;
	}
	public void setC1_GirlsTotal(Integer c1_GirlsTotal) {
		this.c1_GirlsTotal = c1_GirlsTotal;
	}
	public void setC1_GrandTotal(Integer c1_GrandTotal) {
		this.c1_GrandTotal = c1_GrandTotal;
	}
	public void setC2_BoysZeroToTwo(Integer c2_BoysZeroToTwo) {
		this.c2_BoysZeroToTwo = c2_BoysZeroToTwo;
	}
	public void setC2_BoysTwoToFour(Integer c2_BoysTwoToFour) {
		this.c2_BoysTwoToFour = c2_BoysTwoToFour;
	}
	public void setC2_BoysFourToSix(Integer c2_BoysFourToSix) {
		this.c2_BoysFourToSix = c2_BoysFourToSix;
	}
	public void setC2_BoysGreaterThanSix(Integer c2_BoysGreaterThanSix) {
		this.c2_BoysGreaterThanSix = c2_BoysGreaterThanSix;
	}
	public void setC2_BoysTotal(Integer c2_BoysTotal) {
		this.c2_BoysTotal = c2_BoysTotal;
	}
	public void setC2_GirlsZeroToTwo(Integer c2_GirlsZeroToTwo) {
		this.c2_GirlsZeroToTwo = c2_GirlsZeroToTwo;
	}
	public void setC2_GirlsTwoToFour(Integer c2_GirlsTwoToFour) {
		this.c2_GirlsTwoToFour = c2_GirlsTwoToFour;
	}
	public void setC2_GirlsFourToSix(Integer c2_GirlsFourToSix) {
		this.c2_GirlsFourToSix = c2_GirlsFourToSix;
	}
	public void setC2_GirlsGreaterThanSix(Integer c2_GirlsGreaterThanSix) {
		this.c2_GirlsGreaterThanSix = c2_GirlsGreaterThanSix;
	}
	public void setC2_GirlsTotal(Integer c2_GirlsTotal) {
		this.c2_GirlsTotal = c2_GirlsTotal;
	}
	public void setC2_GrandTotal(Integer c2_GrandTotal) {
		this.c2_GrandTotal = c2_GrandTotal;
	}
	public void setC3_BoysZeroToTwo(Integer c3_BoysZeroToTwo) {
		this.c3_BoysZeroToTwo = c3_BoysZeroToTwo;
	}
	public void setC3_BoysTwoToFour(Integer c3_BoysTwoToFour) {
		this.c3_BoysTwoToFour = c3_BoysTwoToFour;
	}
	public void setC3_BoysFourToSix(Integer c3_BoysFourToSix) {
		this.c3_BoysFourToSix = c3_BoysFourToSix;
	}
	public void setC3_BoysGreaterThanSix(Integer c3_BoysGreaterThanSix) {
		this.c3_BoysGreaterThanSix = c3_BoysGreaterThanSix;
	}
	public void setC3_BoysTotal(Integer c3_BoysTotal) {
		this.c3_BoysTotal = c3_BoysTotal;
	}
	public void setC3_GirlsZeroToTwo(Integer c3_GirlsZeroToTwo) {
		this.c3_GirlsZeroToTwo = c3_GirlsZeroToTwo;
	}
	public void setC3_GirlsTwoToFour(Integer c3_GirlsTwoToFour) {
		this.c3_GirlsTwoToFour = c3_GirlsTwoToFour;
	}
	public void setC3_GirlsFourToSix(Integer c3_GirlsFourToSix) {
		this.c3_GirlsFourToSix = c3_GirlsFourToSix;
	}
	public void setC3_GirlsGreaterThanSix(Integer c3_GirlsGreaterThanSix) {
		this.c3_GirlsGreaterThanSix = c3_GirlsGreaterThanSix;
	}
	public void setC3_GirlsTotal(Integer c3_GirlsTotal) {
		this.c3_GirlsTotal = c3_GirlsTotal;
	}
	public void setC3_GrandTotal(Integer c3_GrandTotal) {
		this.c3_GrandTotal = c3_GrandTotal;
	}
	public void setC4_BoysZeroToTwo(Integer c4_BoysZeroToTwo) {
		this.c4_BoysZeroToTwo = c4_BoysZeroToTwo;
	}
	public void setC4_BoysTwoToFour(Integer c4_BoysTwoToFour) {
		this.c4_BoysTwoToFour = c4_BoysTwoToFour;
	}
	public void setC4_BoysFourToSix(Integer c4_BoysFourToSix) {
		this.c4_BoysFourToSix = c4_BoysFourToSix;
	}
	public void setC4_BoysGreaterThanSix(Integer c4_BoysGreaterThanSix) {
		this.c4_BoysGreaterThanSix = c4_BoysGreaterThanSix;
	}
	public void setC4_BoysTotal(Integer c4_BoysTotal) {
		this.c4_BoysTotal = c4_BoysTotal;
	}
	public void setC4_GirlsZeroToTwo(Integer c4_GirlsZeroToTwo) {
		this.c4_GirlsZeroToTwo = c4_GirlsZeroToTwo;
	}
	public void setC4_GirlsTwoToFour(Integer c4_GirlsTwoToFour) {
		this.c4_GirlsTwoToFour = c4_GirlsTwoToFour;
	}
	public void setC4_GirlsFourToSix(Integer c4_GirlsFourToSix) {
		this.c4_GirlsFourToSix = c4_GirlsFourToSix;
	}
	public void setC4_GirlsGreaterThanSix(Integer c4_GirlsGreaterThanSix) {
		this.c4_GirlsGreaterThanSix = c4_GirlsGreaterThanSix;
	}
	public void setC4_GirlsTotal(Integer c4_GirlsTotal) {
		this.c4_GirlsTotal = c4_GirlsTotal;
	}
	public void setC4_GrandTotal(Integer c4_GrandTotal) {
		this.c4_GrandTotal = c4_GrandTotal;
	}
	public void setC5_BoysZeroToTwo(Integer c5_BoysZeroToTwo) {
		this.c5_BoysZeroToTwo = c5_BoysZeroToTwo;
	}
	public void setC5_BoysTwoToFour(Integer c5_BoysTwoToFour) {
		this.c5_BoysTwoToFour = c5_BoysTwoToFour;
	}
	public void setC5_BoysFourToSix(Integer c5_BoysFourToSix) {
		this.c5_BoysFourToSix = c5_BoysFourToSix;
	}
	public void setC5_BoysGreaterThanSix(Integer c5_BoysGreaterThanSix) {
		this.c5_BoysGreaterThanSix = c5_BoysGreaterThanSix;
	}
	public void setC5_BoysTotal(Integer c5_BoysTotal) {
		this.c5_BoysTotal = c5_BoysTotal;
	}
	public void setC5_GirlsZeroToTwo(Integer c5_GirlsZeroToTwo) {
		this.c5_GirlsZeroToTwo = c5_GirlsZeroToTwo;
	}
	public void setC5_GirlsTwoToFour(Integer c5_GirlsTwoToFour) {
		this.c5_GirlsTwoToFour = c5_GirlsTwoToFour;
	}
	public void setC5_GirlsFourToSix(Integer c5_GirlsFourToSix) {
		this.c5_GirlsFourToSix = c5_GirlsFourToSix;
	}
	public void setC5_GirlsGreaterThanSix(Integer c5_GirlsGreaterThanSix) {
		this.c5_GirlsGreaterThanSix = c5_GirlsGreaterThanSix;
	}
	public void setC5_GirlsTotal(Integer c5_GirlsTotal) {
		this.c5_GirlsTotal = c5_GirlsTotal;
	}
	public void setC5_GrandTotal(Integer c5_GrandTotal) {
		this.c5_GrandTotal = c5_GrandTotal;
	}
	public void setC6_BoysZeroToTwo(Integer c6_BoysZeroToTwo) {
		this.c6_BoysZeroToTwo = c6_BoysZeroToTwo;
	}
	public void setC6_BoysTwoToFour(Integer c6_BoysTwoToFour) {
		this.c6_BoysTwoToFour = c6_BoysTwoToFour;
	}
	public void setC6_BoysFourToSix(Integer c6_BoysFourToSix) {
		this.c6_BoysFourToSix = c6_BoysFourToSix;
	}
	public void setC6_BoysGreaterThanSix(Integer c6_BoysGreaterThanSix) {
		this.c6_BoysGreaterThanSix = c6_BoysGreaterThanSix;
	}
	public void setC6_BoysTotal(Integer c6_BoysTotal) {
		this.c6_BoysTotal = c6_BoysTotal;
	}
	public void setC6_GirlsZeroToTwo(Integer c6_GirlsZeroToTwo) {
		this.c6_GirlsZeroToTwo = c6_GirlsZeroToTwo;
	}
	public void setC6_GirlsTwoToFour(Integer c6_GirlsTwoToFour) {
		this.c6_GirlsTwoToFour = c6_GirlsTwoToFour;
	}
	public void setC6_GirlsFourToSix(Integer c6_GirlsFourToSix) {
		this.c6_GirlsFourToSix = c6_GirlsFourToSix;
	}
	public void setC6_GirlsGreaterThanSix(Integer c6_GirlsGreaterThanSix) {
		this.c6_GirlsGreaterThanSix = c6_GirlsGreaterThanSix;
	}
	public void setC6_GirlsTotal(Integer c6_GirlsTotal) {
		this.c6_GirlsTotal = c6_GirlsTotal;
	}
	public void setC6_GrandTotal(Integer c6_GrandTotal) {
		this.c6_GrandTotal = c6_GrandTotal;
	}
	public void setC1_ABoysZeroToTwo(Integer c1_ABoysZeroToTwo) {
		this.c1_ABoysZeroToTwo = c1_ABoysZeroToTwo;
	}
	public void setC1_ABoysTwoToFour(Integer c1_ABoysTwoToFour) {
		this.c1_ABoysTwoToFour = c1_ABoysTwoToFour;
	}
	public void setC1_ABoysFourToSix(Integer c1_ABoysFourToSix) {
		this.c1_ABoysFourToSix = c1_ABoysFourToSix;
	}
	public void setC1_ABoysGreaterThanSix(Integer c1_ABoysGreaterThanSix) {
		this.c1_ABoysGreaterThanSix = c1_ABoysGreaterThanSix;
	}
	public void setC1_ABoysTotal(Integer c1_ABoysTotal) {
		this.c1_ABoysTotal = c1_ABoysTotal;
	}
	public void setC1_AGirlsZeroToTwo(Integer c1_AGirlsZeroToTwo) {
		this.c1_AGirlsZeroToTwo = c1_AGirlsZeroToTwo;
	}
	public void setC1_AGirlsTwoToFour(Integer c1_AGirlsTwoToFour) {
		this.c1_AGirlsTwoToFour = c1_AGirlsTwoToFour;
	}
	public void setC1_AGirlsFourToSix(Integer c1_AGirlsFourToSix) {
		this.c1_AGirlsFourToSix = c1_AGirlsFourToSix;
	}
	public void setC1_AGirlsGreaterThanSix(Integer c1_AGirlsGreaterThanSix) {
		this.c1_AGirlsGreaterThanSix = c1_AGirlsGreaterThanSix;
	}
	public void setC1_AGirlsTotal(Integer c1_AGirlsTotal) {
		this.c1_AGirlsTotal = c1_AGirlsTotal;
	}
	public void setC1_AGrandTotal(Integer c1_AGrandTotal) {
		this.c1_AGrandTotal = c1_AGrandTotal;
	}
	public void setC2_ABoysZeroToTwo(Integer c2_ABoysZeroToTwo) {
		this.c2_ABoysZeroToTwo = c2_ABoysZeroToTwo;
	}
	public void setC2_ABoysTwoToFour(Integer c2_ABoysTwoToFour) {
		this.c2_ABoysTwoToFour = c2_ABoysTwoToFour;
	}
	public void setC2_ABoysFourToSix(Integer c2_ABoysFourToSix) {
		this.c2_ABoysFourToSix = c2_ABoysFourToSix;
	}
	public void setC2_ABoysGreaterThanSix(Integer c2_ABoysGreaterThanSix) {
		this.c2_ABoysGreaterThanSix = c2_ABoysGreaterThanSix;
	}
	public void setC2_ABoysTotal(Integer c2_ABoysTotal) {
		this.c2_ABoysTotal = c2_ABoysTotal;
	}
	public void setC2_AGirlsZeroToTwo(Integer c2_AGirlsZeroToTwo) {
		this.c2_AGirlsZeroToTwo = c2_AGirlsZeroToTwo;
	}
	public void setC2_AGirlsTwoToFour(Integer c2_AGirlsTwoToFour) {
		this.c2_AGirlsTwoToFour = c2_AGirlsTwoToFour;
	}
	public void setC2_AGirlsFourToSix(Integer c2_AGirlsFourToSix) {
		this.c2_AGirlsFourToSix = c2_AGirlsFourToSix;
	}
	public void setC2_AGirlsGreaterThanSix(Integer c2_AGirlsGreaterThanSix) {
		this.c2_AGirlsGreaterThanSix = c2_AGirlsGreaterThanSix;
	}
	public void setC2_AGirlsTotal(Integer c2_AGirlsTotal) {
		this.c2_AGirlsTotal = c2_AGirlsTotal;
	}
	public void setC2_AGrandTotal(Integer c2_AGrandTotal) {
		this.c2_AGrandTotal = c2_AGrandTotal;
	}
	public void setC3_ABoysZeroToTwo(Integer c3_ABoysZeroToTwo) {
		this.c3_ABoysZeroToTwo = c3_ABoysZeroToTwo;
	}
	public void setC3_ABoysTwoToFour(Integer c3_ABoysTwoToFour) {
		this.c3_ABoysTwoToFour = c3_ABoysTwoToFour;
	}
	public void setC3_ABoysFourToSix(Integer c3_ABoysFourToSix) {
		this.c3_ABoysFourToSix = c3_ABoysFourToSix;
	}
	public void setC3_ABoysGreaterThanSix(Integer c3_ABoysGreaterThanSix) {
		this.c3_ABoysGreaterThanSix = c3_ABoysGreaterThanSix;
	}
	public void setC3_ABoysTotal(Integer c3_ABoysTotal) {
		this.c3_ABoysTotal = c3_ABoysTotal;
	}
	public void setC3_AGirlsZeroToTwo(Integer c3_AGirlsZeroToTwo) {
		this.c3_AGirlsZeroToTwo = c3_AGirlsZeroToTwo;
	}
	public void setC3_AGirlsTwoToFour(Integer c3_AGirlsTwoToFour) {
		this.c3_AGirlsTwoToFour = c3_AGirlsTwoToFour;
	}
	public void setC3_AGirlsFourToSix(Integer c3_AGirlsFourToSix) {
		this.c3_AGirlsFourToSix = c3_AGirlsFourToSix;
	}
	public void setC3_AGirlsGreaterThanSix(Integer c3_AGirlsGreaterThanSix) {
		this.c3_AGirlsGreaterThanSix = c3_AGirlsGreaterThanSix;
	}
	public void setC3_AGirlsTotal(Integer c3_AGirlsTotal) {
		this.c3_AGirlsTotal = c3_AGirlsTotal;
	}
	public void setC3_AGrandTotal(Integer c3_AGrandTotal) {
		this.c3_AGrandTotal = c3_AGrandTotal;
	}
	public void setC4_ABoysZeroToTwo(Integer c4_ABoysZeroToTwo) {
		this.c4_ABoysZeroToTwo = c4_ABoysZeroToTwo;
	}
	public void setC4_ABoysTwoToFour(Integer c4_ABoysTwoToFour) {
		this.c4_ABoysTwoToFour = c4_ABoysTwoToFour;
	}
	public void setC4_ABoysFourToSix(Integer c4_ABoysFourToSix) {
		this.c4_ABoysFourToSix = c4_ABoysFourToSix;
	}
	public void setC4_ABoysGreaterThanSix(Integer c4_ABoysGreaterThanSix) {
		this.c4_ABoysGreaterThanSix = c4_ABoysGreaterThanSix;
	}
	public void setC4_ABoysTotal(Integer c4_ABoysTotal) {
		this.c4_ABoysTotal = c4_ABoysTotal;
	}
	public void setC4_AGirlsZeroToTwo(Integer c4_AGirlsZeroToTwo) {
		this.c4_AGirlsZeroToTwo = c4_AGirlsZeroToTwo;
	}
	public void setC4_AGirlsTwoToFour(Integer c4_AGirlsTwoToFour) {
		this.c4_AGirlsTwoToFour = c4_AGirlsTwoToFour;
	}
	public void setC4_AGirlsFourToSix(Integer c4_AGirlsFourToSix) {
		this.c4_AGirlsFourToSix = c4_AGirlsFourToSix;
	}
	public void setC4_AGirlsGreaterThanSix(Integer c4_AGirlsGreaterThanSix) {
		this.c4_AGirlsGreaterThanSix = c4_AGirlsGreaterThanSix;
	}
	public void setC4_AGirlsTotal(Integer c4_AGirlsTotal) {
		this.c4_AGirlsTotal = c4_AGirlsTotal;
	}
	public void setC4_AGrandTotal(Integer c4_AGrandTotal) {
		this.c4_AGrandTotal = c4_AGrandTotal;
	}
	public void setC5_ABoysZeroToTwo(Integer c5_ABoysZeroToTwo) {
		this.c5_ABoysZeroToTwo = c5_ABoysZeroToTwo;
	}
	public void setC5_ABoysTwoToFour(Integer c5_ABoysTwoToFour) {
		this.c5_ABoysTwoToFour = c5_ABoysTwoToFour;
	}
	public void setC5_ABoysFourToSix(Integer c5_ABoysFourToSix) {
		this.c5_ABoysFourToSix = c5_ABoysFourToSix;
	}
	public void setC5_ABoysGreaterThanSix(Integer c5_ABoysGreaterThanSix) {
		this.c5_ABoysGreaterThanSix = c5_ABoysGreaterThanSix;
	}
	public void setC5_ABoysTotal(Integer c5_ABoysTotal) {
		this.c5_ABoysTotal = c5_ABoysTotal;
	}
	public void setC5_AGirlsZeroToTwo(Integer c5_AGirlsZeroToTwo) {
		this.c5_AGirlsZeroToTwo = c5_AGirlsZeroToTwo;
	}
	public void setC5_AGirlsTwoToFour(Integer c5_AGirlsTwoToFour) {
		this.c5_AGirlsTwoToFour = c5_AGirlsTwoToFour;
	}
	public void setC5_AGirlsFourToSix(Integer c5_AGirlsFourToSix) {
		this.c5_AGirlsFourToSix = c5_AGirlsFourToSix;
	}
	public void setC5_AGirlsGreaterThanSix(Integer c5_AGirlsGreaterThanSix) {
		this.c5_AGirlsGreaterThanSix = c5_AGirlsGreaterThanSix;
	}
	public void setC5_AGirlsTotal(Integer c5_AGirlsTotal) {
		this.c5_AGirlsTotal = c5_AGirlsTotal;
	}
	public void setC5_AGrandTotal(Integer c5_AGrandTotal) {
		this.c5_AGrandTotal = c5_AGrandTotal;
	}
	public void setC6_ABoysZeroToTwo(Integer c6_ABoysZeroToTwo) {
		this.c6_ABoysZeroToTwo = c6_ABoysZeroToTwo;
	}
	public void setC6_ABoysTwoToFour(Integer c6_ABoysTwoToFour) {
		this.c6_ABoysTwoToFour = c6_ABoysTwoToFour;
	}
	public void setC6_ABoysFourToSix(Integer c6_ABoysFourToSix) {
		this.c6_ABoysFourToSix = c6_ABoysFourToSix;
	}
	public void setC6_ABoysGreaterThanSix(Integer c6_ABoysGreaterThanSix) {
		this.c6_ABoysGreaterThanSix = c6_ABoysGreaterThanSix;
	}
	public void setC6_ABoysTotal(Integer c6_ABoysTotal) {
		this.c6_ABoysTotal = c6_ABoysTotal;
	}
	public void setC6_AGirlsZeroToTwo(Integer c6_AGirlsZeroToTwo) {
		this.c6_AGirlsZeroToTwo = c6_AGirlsZeroToTwo;
	}
	public void setC6_AGirlsTwoToFour(Integer c6_AGirlsTwoToFour) {
		this.c6_AGirlsTwoToFour = c6_AGirlsTwoToFour;
	}
	public void setC6_AGirlsFourToSix(Integer c6_AGirlsFourToSix) {
		this.c6_AGirlsFourToSix = c6_AGirlsFourToSix;
	}
	public void setC6_AGirlsGreaterThanSix(Integer c6_AGirlsGreaterThanSix) {
		this.c6_AGirlsGreaterThanSix = c6_AGirlsGreaterThanSix;
	}
	public void setC6_AGirlsTotal(Integer c6_AGirlsTotal) {
		this.c6_AGirlsTotal = c6_AGirlsTotal;
	}
	public void setC6_AGrandTotal(Integer c6_AGrandTotal) {
		this.c6_AGrandTotal = c6_AGrandTotal;
	}
	public SaaDetails getSaaId() {
		return saaId;
	}
	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	}
   
}
