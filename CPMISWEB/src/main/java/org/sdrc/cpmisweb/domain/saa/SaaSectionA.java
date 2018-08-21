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
 * @author Biswa Ranjan CPMISWEB 12-Dec-2017 11:18:48 am
 *
 */
 @Entity
 @Table(name="saa_section_a")
public class SaaSectionA {
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	@Column
	private Integer saaSectionAId;
	
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	private SaaDetails saaId;
	@Column
	private Integer a_1BoysZeroToTwo;
	@Column
	private Integer a_1BoysTwoToFour;
	@Column
	private Integer a_1BoysFourToSix;
	@Column
	private Integer a_1BoysGreaterThanSix;
	@Column
	private Integer a_1BoysTotal;
	@Column
	private Integer a_1GirlsZeroToTwo;
	@Column
	private Integer a_1GirlsTwoToFour;
	@Column
	private Integer a_1GirlsFourToSix;
	@Column
	private Integer a_1GirlsGreaterThanSix;
	@Column
	private Integer a_1GirlsTotal;
	@Column
	private Integer a_1GrandTotal;
	@Column
	private Integer a_2BoysZeroToTwo;
	@Column
	private Integer a_2BoysTwoToFour;
	@Column
	private Integer a_2BoysFourToSix;
	@Column
	private Integer a_2BoysGreaterThanSix;
	@Column
	private Integer a_2BoysTotal;
	@Column
	private Integer a_2GirlsZeroToTwo;
	@Column
	private Integer a_2GirlsTwoToFour;
	@Column
	private Integer a_2GirlsFourToSix;
	@Column
	private Integer a_2GirlsGreaterThanSix;
	@Column
	private Integer a_2GirlsTotal;
	@Column
	private Integer a_2GrandTotal;
	@Column
	private Integer a_3BoysZeroToTwo;
	@Column
	private Integer a_3BoysTwoToFour;
	@Column
	private Integer a_3BoysFourToSix;
	@Column
	private Integer a_3BoysGreaterThanSix;
	@Column
	private Integer a_3BoysTotal;
	@Column
	private Integer a_3GirlsZeroToTwo;
	@Column
	private Integer a_3GirlsTwoToFour;
	@Column
	private Integer a_3GirlsFourToSix;
	@Column
	private Integer a_3GirlsGreaterThanSix;
	@Column
	private Integer a_3GirlsTotal;
	@Column
	private Integer a_3GrandTotal;
	@Column
	private Integer a_A1BoysZeroToTwo;
	@Column
	private Integer a_A1BoysTwoToFour;
	@Column
	private Integer a_A1BoysFourToSix;
	@Column
	private Integer a_A1BoysGreaterThanSix;
	@Column
	private Integer a_A1BoysTotal;
	@Column
	private Integer a_A1GirlsZeroToTwo;
	@Column
	private Integer a_A1GirlsTwoToFour;
	@Column
	private Integer a_A1GirlsFourToSix;
	@Column
	private Integer a_A1GirlsGreaterThanSix;
	@Column
	private Integer a_A1GirlsTotal;
	@Column
	private Integer a_A1GrandTotal;
	@Column
	private Integer a_A2BoysZeroToTwo;
	@Column
	private Integer a_A2BoysTwoToFour;
	@Column
	private Integer a_A2BoysFourToSix;
	@Column
	private Integer a_A2BoysGreaterThanSix;
	@Column
	private Integer a_A2BoysTotal;
	@Column
	private Integer a_A2GirlsZeroToTwo;
	@Column
	private Integer a_A2GirlsTwoToFour;
	@Column
	private Integer a_A2GirlsFourToSix;
	@Column
	private Integer a_A2GirlsGreaterThanSix;
	@Column
	private Integer a_A2GirlsTotal;
	@Column
	private Integer a_A2GrandTotal;
	@Column
	private Integer a_A3BoysZeroToTwo;
	@Column
	private Integer a_A3BoysTwoToFour;
	@Column
	private Integer a_A3BoysFourToSix;
	@Column
	private Integer a_A3BoysGreaterThanSix;
	@Column
	private Integer a_A3BoysTotal;
	@Column
	private Integer a_A3GirlsZeroToTwo;
	@Column
	private Integer a_A3GirlsTwoToFour;
	@Column
	private Integer a_A3GirlsFourToSix;
	@Column
	private Integer a_A3GirlsGreaterThanSix;
	@Column
	private Integer a_A3GirlsTotal;
	@Column
	private Integer a_A3GrandTotal;
	@Column
    private Integer a1_1BoysZeroToTwo;
    @Column
    private Integer a1_1BoysTwoToFour;
    @Column
    private Integer a1_1BoysFourToSix;
    @Column
    private Integer a1_1BoysGreaterThanSix;
    @Column
    private Integer a1_1BoysTotal;
    @Column
    private Integer a1_1GirlsZeroToTwo;
    @Column
    private Integer a1_1GirlsTwoToFour;
    @Column
    private Integer a1_1GirlsFourToSix;
    @Column
    private Integer a1_1GirlsGreaterThanSix;
    @Column
    private Integer a1_1GirlsTotal;
    @Column
    private Integer a1_1GrandTotal;
    @Column
    private Integer a1_2BoysZeroToTwo;
    @Column
    private Integer a1_2BoysTwoToFour;
    @Column
    private Integer a1_2BoysFourToSix;
    @Column
    private Integer a1_2BoysGreaterThanSix;
    @Column
    private Integer a1_2BoysTotal;
    @Column
    private Integer a1_2GirlsZeroToTwo;
    @Column
    private Integer a1_2GirlsTwoToFour;
    @Column
    private Integer a1_2GirlsFourToSix;
    @Column
    private Integer a1_2GirlsGreaterThanSix;
    @Column
    private Integer a1_2GirlsTotal;
    @Column
    private Integer a1_2GrandTotal;
    @Column
    private Integer a1_3BoysZeroToTwo;
    @Column
    private Integer a1_3BoysTwoToFour;
    @Column
    private Integer a1_3BoysFourToSix;
    @Column
    private Integer a1_3BoysGreaterThanSix;
    @Column
    private Integer a1_3BoysTotal;
    @Column
    private Integer a1_3GirlsZeroToTwo;
    @Column
    private Integer a1_3GirlsTwoToFour;
    @Column
    private Integer a1_3GirlsFourToSix;
    @Column
    private Integer a1_3GirlsGreaterThanSix;
    @Column
    private Integer a1_3GirlsTotal;
    @Column
    private Integer a1_3GrandTotal;
    @Column
    private Integer a1_A1BoysZeroToTwo;
    @Column
    private Integer a1_A1BoysTwoToFour;
    @Column
    private Integer a1_A1BoysFourToSix;
    @Column
    private Integer a1_A1BoysGreaterThanSix;
    @Column
    private Integer a1_A1BoysTotal;
    @Column
    private Integer a1_A1GirlsZeroToTwo;
    @Column
    private Integer a1_A1GirlsTwoToFour;
    @Column
    private Integer a1_A1GirlsFourToSix;
    @Column
    private Integer a1_A1GirlsGreaterThanSix;
    @Column
    private Integer a1_A1GirlsTotal;
    @Column
    private Integer a1_A1GrandTotal;
    @Column
    private Integer a1_A2BoysZeroToTwo;
    @Column
    private Integer a1_A2BoysTwoToFour;
    @Column
    private Integer a1_A2BoysFourToSix;
    @Column
    private Integer a1_A2BoysGreaterThanSix;
    @Column
    private Integer a1_A2BoysTotal;
    @Column
    private Integer a1_A2GirlsZeroToTwo;
    @Column
    private Integer a1_A2GirlsTwoToFour;
    @Column
    private Integer a1_A2GirlsFourToSix;
    @Column
    private Integer a1_A2GirlsGreaterThanSix;
    @Column
    private Integer a1_A2GirlsTotal;
    @Column
    private Integer a1_A2GrandTotal;
    @Column
    private Integer a1_A3BoysZeroToTwo;
    @Column
    private Integer a1_A3BoysTwoToFour;
    @Column
    private Integer a1_A3BoysFourToSix;
    @Column
    private Integer a1_A3BoysGreaterThanSix;
    @Column
    private Integer a1_A3BoysTotal;
    @Column
    private Integer a1_A3GirlsZeroToTwo;
    @Column
    private Integer a1_A3GirlsTwoToFour;
    @Column
    private Integer a1_A3GirlsFourToSix;
    @Column
    private Integer a1_A3GirlsGreaterThanSix;
    @Column
    private Integer a1_A3GirlsTotal;
    @Column
    private Integer a1_A3GrandTotal;
    @Column
    private Integer a2_1BoysZeroToTwo;
    @Column
    private Integer a2_1BoysTwoToFour;
    @Column
    private Integer a2_1BoysFourToSix;
    @Column
    private Integer a2_1BoysGreaterThanSix;
    @Column
    private Integer a2_1BoysTotal;
    @Column
    private Integer a2_1GirlsZeroToTwo;
    @Column
    private Integer a2_1GirlsTwoToFour;
    @Column
    private Integer a2_1GirlsFourToSix;
    @Column
    private Integer a2_1GirlsGreaterThanSix;
    @Column
    private Integer a2_1GirlsTotal;
    @Column
    private Integer a2_1GrandTotal;
    @Column
    private Integer a2_2BoysZeroToTwo;
    @Column
    private Integer a2_2BoysTwoToFour;
    @Column
    private Integer a2_2BoysFourToSix;
    @Column
    private Integer a2_2BoysGreaterThanSix;
    @Column
    private Integer a2_2BoysTotal;
    @Column
    private Integer a2_2GirlsZeroToTwo;
    @Column
    private Integer a2_2GirlsTwoToFour;
    @Column
    private Integer a2_2GirlsFourToSix;
    @Column
    private Integer a2_2GirlsGreaterThanSix;
    @Column
    private Integer a2_2GirlsTotal;
    @Column
    private Integer a2_2GrandTotal;
    @Column
    private Integer a2_3BoysZeroToTwo;
    @Column
    private Integer a2_3BoysTwoToFour;
    @Column
    private Integer a2_3BoysFourToSix;
    @Column
    private Integer a2_3BoysGreaterThanSix;
    @Column
    private Integer a2_3BoysTotal;
    @Column
    private Integer a2_3GirlsZeroToTwo;
    @Column
    private Integer a2_3GirlsTwoToFour;
    @Column
    private Integer a2_3GirlsFourToSix;
    @Column
    private Integer a2_3GirlsGreaterThanSix;
    @Column
    private Integer a2_3GirlsTotal;
    @Column
    private Integer a2_3GrandTotal;
    @Column
    private Integer a2_4BoysZeroToTwo;
    @Column
    private Integer a2_4BoysTwoToFour;
    @Column
    private Integer a2_4BoysFourToSix;
    @Column
    private Integer a2_4BoysGreaterThanSix;
    @Column
    private Integer a2_4BoysTotal;
    @Column
    private Integer a2_4GirlsZeroToTwo;
    @Column
    private Integer a2_4GirlsTwoToFour;
    @Column
    private Integer a2_4GirlsFourToSix;
    @Column
    private Integer a2_4GirlsGreaterThanSix;
    @Column
    private Integer a2_4GirlsTotal;
    @Column
    private Integer a2_4GrandTotal;
    @Column
    private Integer a2_5BoysZeroToTwo;
    @Column
    private Integer a2_5BoysTwoToFour;
    @Column
    private Integer a2_5BoysFourToSix;
    @Column
    private Integer a2_5BoysGreaterThanSix;
    @Column
    private Integer a2_5BoysTotal;
    @Column
    private Integer a2_5GirlsZeroToTwo;
    @Column
    private Integer a2_5GirlsTwoToFour;
    @Column
    private Integer a2_5GirlsFourToSix;
    @Column
    private Integer a2_5GirlsGreaterThanSix;
    @Column
    private Integer a2_5GirlsTotal;
    @Column
    private Integer a2_5GrandTotal;
    @Column
    private Integer a2_A1BoysZeroToTwo;
    @Column
    private Integer a2_A1BoysTwoToFour;
    @Column
    private Integer a2_A1BoysFourToSix;
    @Column
    private Integer a2_A1BoysGreaterThanSix;
    @Column
    private Integer a2_A1BoysTotal;
    @Column
    private Integer a2_A1GirlsZeroToTwo;
    @Column
    private Integer a2_A1GirlsTwoToFour;
    @Column
    private Integer a2_A1GirlsFourToSix;
    @Column
    private Integer a2_A1GirlsGreaterThanSix;
    @Column
    private Integer a2_A1GirlsTotal;
    @Column
    private Integer a2_A1GrandTotal;
    @Column
    private Integer a2_A2BoysZeroToTwo;
    @Column
    private Integer a2_A2BoysTwoToFour;
    @Column
    private Integer a2_A2BoysFourToSix;
    @Column
    private Integer a2_A2BoysGreaterThanSix;
    @Column
    private Integer a2_A2BoysTotal;
    @Column
    private Integer a2_A2GirlsZeroToTwo;
    @Column
    private Integer a2_A2GirlsTwoToFour;
    @Column
    private Integer a2_A2GirlsFourToSix;
    @Column
    private Integer a2_A2GirlsGreaterThanSix;
    @Column
    private Integer a2_A2GirlsTotal;
    @Column
    private Integer a2_A2GrandTotal;
    @Column
    private Integer a2_A3BoysZeroToTwo;
    @Column
    private Integer a2_A3BoysTwoToFour;
    @Column
    private Integer a2_A3BoysFourToSix;
    @Column
    private Integer a2_A3BoysGreaterThanSix;
    @Column
    private Integer a2_A3BoysTotal;
    @Column
    private Integer a2_A3GirlsZeroToTwo;
    @Column
    private Integer a2_A3GirlsTwoToFour;
    @Column
    private Integer a2_A3GirlsFourToSix;
    @Column
    private Integer a2_A3GirlsGreaterThanSix;
    @Column
    private Integer a2_A3GirlsTotal;
    @Column
    private Integer a2_A3GrandTotal;
    @Column
    private Integer a2_A4BoysZeroToTwo;
    @Column
    private Integer a2_A4BoysTwoToFour;
    @Column
    private Integer a2_A4BoysFourToSix;
    @Column
    private Integer a2_A4BoysGreaterThanSix;
    @Column
    private Integer a2_A4BoysTotal;
    @Column
    private Integer a2_A4GirlsZeroToTwo;
    @Column
    private Integer a2_A4GirlsTwoToFour;
    @Column
    private Integer a2_A4GirlsFourToSix;
    @Column
    private Integer a2_A4GirlsGreaterThanSix;
    @Column
    private Integer a2_A4GirlsTotal;
    @Column
    private Integer a2_A4GrandTotal;
    @Column
    private Integer a2_A5BoysZeroToTwo;
    @Column
    private Integer a2_A5BoysTwoToFour;
    @Column
    private Integer a2_A5BoysFourToSix;
    @Column
    private Integer a2_A5BoysGreaterThanSix;
    @Column
    private Integer a2_A5BoysTotal;
    @Column
    private Integer a2_A5GirlsZeroToTwo;
    @Column
    private Integer a2_A5GirlsTwoToFour;
    @Column
    private Integer a2_A5GirlsFourToSix;
    @Column
    private Integer a2_A5GirlsGreaterThanSix;
    @Column
    private Integer a2_A5GirlsTotal;
    @Column
    private Integer a2_A5GrandTotal;
    
	public Integer getSaaSectionAId() {
		return saaSectionAId;
	}
	public Integer getA_1BoysZeroToTwo() {
		return a_1BoysZeroToTwo;
	}
	public Integer getA_1BoysTwoToFour() {
		return a_1BoysTwoToFour;
	}
	public Integer getA_1BoysFourToSix() {
		return a_1BoysFourToSix;
	}
	public Integer getA_1BoysGreaterThanSix() {
		return a_1BoysGreaterThanSix;
	}
	public Integer getA_1BoysTotal() {
		return a_1BoysTotal;
	}
	public Integer getA_1GirlsZeroToTwo() {
		return a_1GirlsZeroToTwo;
	}
	public Integer getA_1GirlsTwoToFour() {
		return a_1GirlsTwoToFour;
	}
	public Integer getA_1GirlsFourToSix() {
		return a_1GirlsFourToSix;
	}
	public Integer getA_1GirlsGreaterThanSix() {
		return a_1GirlsGreaterThanSix;
	}
	public Integer getA_1GirlsTotal() {
		return a_1GirlsTotal;
	}
	public Integer getA_1GrandTotal() {
		return a_1GrandTotal;
	}
	public Integer getA_2BoysZeroToTwo() {
		return a_2BoysZeroToTwo;
	}
	public Integer getA_2BoysTwoToFour() {
		return a_2BoysTwoToFour;
	}
	public Integer getA_2BoysFourToSix() {
		return a_2BoysFourToSix;
	}
	public Integer getA_2BoysGreaterThanSix() {
		return a_2BoysGreaterThanSix;
	}
	public Integer getA_2BoysTotal() {
		return a_2BoysTotal;
	}
	public Integer getA_2GirlsZeroToTwo() {
		return a_2GirlsZeroToTwo;
	}
	public Integer getA_2GirlsTwoToFour() {
		return a_2GirlsTwoToFour;
	}
	public Integer getA_2GirlsFourToSix() {
		return a_2GirlsFourToSix;
	}
	public Integer getA_2GirlsGreaterThanSix() {
		return a_2GirlsGreaterThanSix;
	}
	public Integer getA_2GirlsTotal() {
		return a_2GirlsTotal;
	}
	public Integer getA_2GrandTotal() {
		return a_2GrandTotal;
	}
	public Integer getA_3BoysZeroToTwo() {
		return a_3BoysZeroToTwo;
	}
	public Integer getA_3BoysTwoToFour() {
		return a_3BoysTwoToFour;
	}
	public Integer getA_3BoysFourToSix() {
		return a_3BoysFourToSix;
	}
	public Integer getA_3BoysGreaterThanSix() {
		return a_3BoysGreaterThanSix;
	}
	public Integer getA_3BoysTotal() {
		return a_3BoysTotal;
	}
	public Integer getA_3GirlsZeroToTwo() {
		return a_3GirlsZeroToTwo;
	}
	public Integer getA_3GirlsTwoToFour() {
		return a_3GirlsTwoToFour;
	}
	public Integer getA_3GirlsFourToSix() {
		return a_3GirlsFourToSix;
	}
	public Integer getA_3GirlsGreaterThanSix() {
		return a_3GirlsGreaterThanSix;
	}
	public Integer getA_3GirlsTotal() {
		return a_3GirlsTotal;
	}
	public Integer getA_3GrandTotal() {
		return a_3GrandTotal;
	}
	public Integer getA_A1BoysZeroToTwo() {
		return a_A1BoysZeroToTwo;
	}
	public Integer getA_A1BoysTwoToFour() {
		return a_A1BoysTwoToFour;
	}
	public Integer getA_A1BoysFourToSix() {
		return a_A1BoysFourToSix;
	}
	public Integer getA_A1BoysGreaterThanSix() {
		return a_A1BoysGreaterThanSix;
	}
	public Integer getA_A1BoysTotal() {
		return a_A1BoysTotal;
	}
	public Integer getA_A1GirlsZeroToTwo() {
		return a_A1GirlsZeroToTwo;
	}
	public Integer getA_A1GirlsTwoToFour() {
		return a_A1GirlsTwoToFour;
	}
	public Integer getA_A1GirlsFourToSix() {
		return a_A1GirlsFourToSix;
	}
	public Integer getA_A1GirlsGreaterThanSix() {
		return a_A1GirlsGreaterThanSix;
	}
	public Integer getA_A1GirlsTotal() {
		return a_A1GirlsTotal;
	}
	public Integer getA_A1GrandTotal() {
		return a_A1GrandTotal;
	}
	public Integer getA_A2BoysZeroToTwo() {
		return a_A2BoysZeroToTwo;
	}
	public Integer getA_A2BoysTwoToFour() {
		return a_A2BoysTwoToFour;
	}
	public Integer getA_A2BoysFourToSix() {
		return a_A2BoysFourToSix;
	}
	public Integer getA_A2BoysGreaterThanSix() {
		return a_A2BoysGreaterThanSix;
	}
	public Integer getA_A2BoysTotal() {
		return a_A2BoysTotal;
	}
	public Integer getA_A2GirlsZeroToTwo() {
		return a_A2GirlsZeroToTwo;
	}
	public Integer getA_A2GirlsTwoToFour() {
		return a_A2GirlsTwoToFour;
	}
	public Integer getA_A2GirlsFourToSix() {
		return a_A2GirlsFourToSix;
	}
	public Integer getA_A2GirlsGreaterThanSix() {
		return a_A2GirlsGreaterThanSix;
	}
	public Integer getA_A2GirlsTotal() {
		return a_A2GirlsTotal;
	}
	public Integer getA_A2GrandTotal() {
		return a_A2GrandTotal;
	}
	public Integer getA_A3BoysZeroToTwo() {
		return a_A3BoysZeroToTwo;
	}
	public Integer getA_A3BoysTwoToFour() {
		return a_A3BoysTwoToFour;
	}
	public Integer getA_A3BoysFourToSix() {
		return a_A3BoysFourToSix;
	}
	public Integer getA_A3BoysGreaterThanSix() {
		return a_A3BoysGreaterThanSix;
	}
	public Integer getA_A3BoysTotal() {
		return a_A3BoysTotal;
	}
	public Integer getA_A3GirlsZeroToTwo() {
		return a_A3GirlsZeroToTwo;
	}
	public Integer getA_A3GirlsTwoToFour() {
		return a_A3GirlsTwoToFour;
	}
	public Integer getA_A3GirlsFourToSix() {
		return a_A3GirlsFourToSix;
	}
	public Integer getA_A3GirlsGreaterThanSix() {
		return a_A3GirlsGreaterThanSix;
	}
	public Integer getA_A3GirlsTotal() {
		return a_A3GirlsTotal;
	}
	public Integer getA_A3GrandTotal() {
		return a_A3GrandTotal;
	}
	public Integer getA1_1BoysZeroToTwo() {
		return a1_1BoysZeroToTwo;
	}
	public Integer getA1_1BoysTwoToFour() {
		return a1_1BoysTwoToFour;
	}
	public Integer getA1_1BoysFourToSix() {
		return a1_1BoysFourToSix;
	}
	public Integer getA1_1BoysGreaterThanSix() {
		return a1_1BoysGreaterThanSix;
	}
	public Integer getA1_1BoysTotal() {
		return a1_1BoysTotal;
	}
	public Integer getA1_1GirlsZeroToTwo() {
		return a1_1GirlsZeroToTwo;
	}
	public Integer getA1_1GirlsTwoToFour() {
		return a1_1GirlsTwoToFour;
	}
	public Integer getA1_1GirlsFourToSix() {
		return a1_1GirlsFourToSix;
	}
	public Integer getA1_1GirlsGreaterThanSix() {
		return a1_1GirlsGreaterThanSix;
	}
	public Integer getA1_1GirlsTotal() {
		return a1_1GirlsTotal;
	}
	public Integer getA1_1GrandTotal() {
		return a1_1GrandTotal;
	}
	public Integer getA1_2BoysZeroToTwo() {
		return a1_2BoysZeroToTwo;
	}
	public Integer getA1_2BoysTwoToFour() {
		return a1_2BoysTwoToFour;
	}
	public Integer getA1_2BoysFourToSix() {
		return a1_2BoysFourToSix;
	}
	public Integer getA1_2BoysGreaterThanSix() {
		return a1_2BoysGreaterThanSix;
	}
	public Integer getA1_2BoysTotal() {
		return a1_2BoysTotal;
	}
	public Integer getA1_2GirlsZeroToTwo() {
		return a1_2GirlsZeroToTwo;
	}
	public Integer getA1_2GirlsTwoToFour() {
		return a1_2GirlsTwoToFour;
	}
	public Integer getA1_2GirlsFourToSix() {
		return a1_2GirlsFourToSix;
	}
	public Integer getA1_2GirlsGreaterThanSix() {
		return a1_2GirlsGreaterThanSix;
	}
	public Integer getA1_2GirlsTotal() {
		return a1_2GirlsTotal;
	}
	public Integer getA1_2GrandTotal() {
		return a1_2GrandTotal;
	}
	public Integer getA1_3BoysZeroToTwo() {
		return a1_3BoysZeroToTwo;
	}
	public Integer getA1_3BoysTwoToFour() {
		return a1_3BoysTwoToFour;
	}
	public Integer getA1_3BoysFourToSix() {
		return a1_3BoysFourToSix;
	}
	public Integer getA1_3BoysGreaterThanSix() {
		return a1_3BoysGreaterThanSix;
	}
	public Integer getA1_3BoysTotal() {
		return a1_3BoysTotal;
	}
	public Integer getA1_3GirlsZeroToTwo() {
		return a1_3GirlsZeroToTwo;
	}
	public Integer getA1_3GirlsTwoToFour() {
		return a1_3GirlsTwoToFour;
	}
	public Integer getA1_3GirlsFourToSix() {
		return a1_3GirlsFourToSix;
	}
	public Integer getA1_3GirlsGreaterThanSix() {
		return a1_3GirlsGreaterThanSix;
	}
	public Integer getA1_3GirlsTotal() {
		return a1_3GirlsTotal;
	}
	public Integer getA1_3GrandTotal() {
		return a1_3GrandTotal;
	}
	public Integer getA1_A1BoysZeroToTwo() {
		return a1_A1BoysZeroToTwo;
	}
	public Integer getA1_A1BoysTwoToFour() {
		return a1_A1BoysTwoToFour;
	}
	public Integer getA1_A1BoysFourToSix() {
		return a1_A1BoysFourToSix;
	}
	public Integer getA1_A1BoysGreaterThanSix() {
		return a1_A1BoysGreaterThanSix;
	}
	public Integer getA1_A1BoysTotal() {
		return a1_A1BoysTotal;
	}
	public Integer getA1_A1GirlsZeroToTwo() {
		return a1_A1GirlsZeroToTwo;
	}
	public Integer getA1_A1GirlsTwoToFour() {
		return a1_A1GirlsTwoToFour;
	}
	public Integer getA1_A1GirlsFourToSix() {
		return a1_A1GirlsFourToSix;
	}
	public Integer getA1_A1GirlsGreaterThanSix() {
		return a1_A1GirlsGreaterThanSix;
	}
	public Integer getA1_A1GirlsTotal() {
		return a1_A1GirlsTotal;
	}
	public Integer getA1_A1GrandTotal() {
		return a1_A1GrandTotal;
	}
	public Integer getA1_A2BoysZeroToTwo() {
		return a1_A2BoysZeroToTwo;
	}
	public Integer getA1_A2BoysTwoToFour() {
		return a1_A2BoysTwoToFour;
	}
	public Integer getA1_A2BoysFourToSix() {
		return a1_A2BoysFourToSix;
	}
	public Integer getA1_A2BoysGreaterThanSix() {
		return a1_A2BoysGreaterThanSix;
	}
	public Integer getA1_A2BoysTotal() {
		return a1_A2BoysTotal;
	}
	public Integer getA1_A2GirlsZeroToTwo() {
		return a1_A2GirlsZeroToTwo;
	}
	public Integer getA1_A2GirlsTwoToFour() {
		return a1_A2GirlsTwoToFour;
	}
	public Integer getA1_A2GirlsFourToSix() {
		return a1_A2GirlsFourToSix;
	}
	public Integer getA1_A2GirlsGreaterThanSix() {
		return a1_A2GirlsGreaterThanSix;
	}
	public Integer getA1_A2GirlsTotal() {
		return a1_A2GirlsTotal;
	}
	public Integer getA1_A2GrandTotal() {
		return a1_A2GrandTotal;
	}
	public Integer getA1_A3BoysZeroToTwo() {
		return a1_A3BoysZeroToTwo;
	}
	public Integer getA1_A3BoysTwoToFour() {
		return a1_A3BoysTwoToFour;
	}
	public Integer getA1_A3BoysFourToSix() {
		return a1_A3BoysFourToSix;
	}
	public Integer getA1_A3BoysGreaterThanSix() {
		return a1_A3BoysGreaterThanSix;
	}
	public Integer getA1_A3BoysTotal() {
		return a1_A3BoysTotal;
	}
	public Integer getA1_A3GirlsZeroToTwo() {
		return a1_A3GirlsZeroToTwo;
	}
	public Integer getA1_A3GirlsTwoToFour() {
		return a1_A3GirlsTwoToFour;
	}
	public Integer getA1_A3GirlsFourToSix() {
		return a1_A3GirlsFourToSix;
	}
	public Integer getA1_A3GirlsGreaterThanSix() {
		return a1_A3GirlsGreaterThanSix;
	}
	public Integer getA1_A3GirlsTotal() {
		return a1_A3GirlsTotal;
	}
	public Integer getA1_A3GrandTotal() {
		return a1_A3GrandTotal;
	}
	public Integer getA2_1BoysZeroToTwo() {
		return a2_1BoysZeroToTwo;
	}
	public Integer getA2_1BoysTwoToFour() {
		return a2_1BoysTwoToFour;
	}
	public Integer getA2_1BoysFourToSix() {
		return a2_1BoysFourToSix;
	}
	public Integer getA2_1BoysGreaterThanSix() {
		return a2_1BoysGreaterThanSix;
	}
	public Integer getA2_1BoysTotal() {
		return a2_1BoysTotal;
	}
	public Integer getA2_1GirlsZeroToTwo() {
		return a2_1GirlsZeroToTwo;
	}
	public Integer getA2_1GirlsTwoToFour() {
		return a2_1GirlsTwoToFour;
	}
	public Integer getA2_1GirlsFourToSix() {
		return a2_1GirlsFourToSix;
	}
	public Integer getA2_1GirlsGreaterThanSix() {
		return a2_1GirlsGreaterThanSix;
	}
	public Integer getA2_1GirlsTotal() {
		return a2_1GirlsTotal;
	}
	public Integer getA2_1GrandTotal() {
		return a2_1GrandTotal;
	}
	public Integer getA2_2BoysZeroToTwo() {
		return a2_2BoysZeroToTwo;
	}
	public Integer getA2_2BoysTwoToFour() {
		return a2_2BoysTwoToFour;
	}
	public Integer getA2_2BoysFourToSix() {
		return a2_2BoysFourToSix;
	}
	public Integer getA2_2BoysGreaterThanSix() {
		return a2_2BoysGreaterThanSix;
	}
	public Integer getA2_2BoysTotal() {
		return a2_2BoysTotal;
	}
	public Integer getA2_2GirlsZeroToTwo() {
		return a2_2GirlsZeroToTwo;
	}
	public Integer getA2_2GirlsTwoToFour() {
		return a2_2GirlsTwoToFour;
	}
	public Integer getA2_2GirlsFourToSix() {
		return a2_2GirlsFourToSix;
	}
	public Integer getA2_2GirlsGreaterThanSix() {
		return a2_2GirlsGreaterThanSix;
	}
	public Integer getA2_2GirlsTotal() {
		return a2_2GirlsTotal;
	}
	public Integer getA2_2GrandTotal() {
		return a2_2GrandTotal;
	}
	public Integer getA2_3BoysZeroToTwo() {
		return a2_3BoysZeroToTwo;
	}
	public Integer getA2_3BoysTwoToFour() {
		return a2_3BoysTwoToFour;
	}
	public Integer getA2_3BoysFourToSix() {
		return a2_3BoysFourToSix;
	}
	public Integer getA2_3BoysGreaterThanSix() {
		return a2_3BoysGreaterThanSix;
	}
	public Integer getA2_3BoysTotal() {
		return a2_3BoysTotal;
	}
	public Integer getA2_3GirlsZeroToTwo() {
		return a2_3GirlsZeroToTwo;
	}
	public Integer getA2_3GirlsTwoToFour() {
		return a2_3GirlsTwoToFour;
	}
	public Integer getA2_3GirlsFourToSix() {
		return a2_3GirlsFourToSix;
	}
	public Integer getA2_3GirlsGreaterThanSix() {
		return a2_3GirlsGreaterThanSix;
	}
	public Integer getA2_3GirlsTotal() {
		return a2_3GirlsTotal;
	}
	public Integer getA2_3GrandTotal() {
		return a2_3GrandTotal;
	}
	public Integer getA2_4BoysZeroToTwo() {
		return a2_4BoysZeroToTwo;
	}
	public Integer getA2_4BoysTwoToFour() {
		return a2_4BoysTwoToFour;
	}
	public Integer getA2_4BoysFourToSix() {
		return a2_4BoysFourToSix;
	}
	public Integer getA2_4BoysGreaterThanSix() {
		return a2_4BoysGreaterThanSix;
	}
	public Integer getA2_4BoysTotal() {
		return a2_4BoysTotal;
	}
	public Integer getA2_4GirlsZeroToTwo() {
		return a2_4GirlsZeroToTwo;
	}
	public Integer getA2_4GirlsTwoToFour() {
		return a2_4GirlsTwoToFour;
	}
	public Integer getA2_4GirlsFourToSix() {
		return a2_4GirlsFourToSix;
	}
	public Integer getA2_4GirlsGreaterThanSix() {
		return a2_4GirlsGreaterThanSix;
	}
	public Integer getA2_4GirlsTotal() {
		return a2_4GirlsTotal;
	}
	public Integer getA2_4GrandTotal() {
		return a2_4GrandTotal;
	}
	public Integer getA2_5BoysZeroToTwo() {
		return a2_5BoysZeroToTwo;
	}
	public Integer getA2_5BoysTwoToFour() {
		return a2_5BoysTwoToFour;
	}
	public Integer getA2_5BoysFourToSix() {
		return a2_5BoysFourToSix;
	}
	public Integer getA2_5BoysGreaterThanSix() {
		return a2_5BoysGreaterThanSix;
	}
	public Integer getA2_5BoysTotal() {
		return a2_5BoysTotal;
	}
	public Integer getA2_5GirlsZeroToTwo() {
		return a2_5GirlsZeroToTwo;
	}
	public Integer getA2_5GirlsTwoToFour() {
		return a2_5GirlsTwoToFour;
	}
	public Integer getA2_5GirlsFourToSix() {
		return a2_5GirlsFourToSix;
	}
	public Integer getA2_5GirlsGreaterThanSix() {
		return a2_5GirlsGreaterThanSix;
	}
	public Integer getA2_5GirlsTotal() {
		return a2_5GirlsTotal;
	}
	public Integer getA2_5GrandTotal() {
		return a2_5GrandTotal;
	}
	public Integer getA2_A1BoysZeroToTwo() {
		return a2_A1BoysZeroToTwo;
	}
	public Integer getA2_A1BoysTwoToFour() {
		return a2_A1BoysTwoToFour;
	}
	public Integer getA2_A1BoysFourToSix() {
		return a2_A1BoysFourToSix;
	}
	public Integer getA2_A1BoysGreaterThanSix() {
		return a2_A1BoysGreaterThanSix;
	}
	public Integer getA2_A1BoysTotal() {
		return a2_A1BoysTotal;
	}
	public Integer getA2_A1GirlsZeroToTwo() {
		return a2_A1GirlsZeroToTwo;
	}
	public Integer getA2_A1GirlsTwoToFour() {
		return a2_A1GirlsTwoToFour;
	}
	public Integer getA2_A1GirlsFourToSix() {
		return a2_A1GirlsFourToSix;
	}
	public Integer getA2_A1GirlsGreaterThanSix() {
		return a2_A1GirlsGreaterThanSix;
	}
	public Integer getA2_A1GirlsTotal() {
		return a2_A1GirlsTotal;
	}
	public Integer getA2_A1GrandTotal() {
		return a2_A1GrandTotal;
	}
	public Integer getA2_A2BoysZeroToTwo() {
		return a2_A2BoysZeroToTwo;
	}
	public Integer getA2_A2BoysTwoToFour() {
		return a2_A2BoysTwoToFour;
	}
	public Integer getA2_A2BoysFourToSix() {
		return a2_A2BoysFourToSix;
	}
	public Integer getA2_A2BoysGreaterThanSix() {
		return a2_A2BoysGreaterThanSix;
	}
	public Integer getA2_A2BoysTotal() {
		return a2_A2BoysTotal;
	}
	public Integer getA2_A2GirlsZeroToTwo() {
		return a2_A2GirlsZeroToTwo;
	}
	public Integer getA2_A2GirlsTwoToFour() {
		return a2_A2GirlsTwoToFour;
	}
	public Integer getA2_A2GirlsFourToSix() {
		return a2_A2GirlsFourToSix;
	}
	public Integer getA2_A2GirlsGreaterThanSix() {
		return a2_A2GirlsGreaterThanSix;
	}
	public Integer getA2_A2GirlsTotal() {
		return a2_A2GirlsTotal;
	}
	public Integer getA2_A2GrandTotal() {
		return a2_A2GrandTotal;
	}
	public Integer getA2_A3BoysZeroToTwo() {
		return a2_A3BoysZeroToTwo;
	}
	public Integer getA2_A3BoysTwoToFour() {
		return a2_A3BoysTwoToFour;
	}
	public Integer getA2_A3BoysFourToSix() {
		return a2_A3BoysFourToSix;
	}
	public Integer getA2_A3BoysGreaterThanSix() {
		return a2_A3BoysGreaterThanSix;
	}
	public Integer getA2_A3BoysTotal() {
		return a2_A3BoysTotal;
	}
	public Integer getA2_A3GirlsZeroToTwo() {
		return a2_A3GirlsZeroToTwo;
	}
	public Integer getA2_A3GirlsTwoToFour() {
		return a2_A3GirlsTwoToFour;
	}
	public Integer getA2_A3GirlsFourToSix() {
		return a2_A3GirlsFourToSix;
	}
	public Integer getA2_A3GirlsGreaterThanSix() {
		return a2_A3GirlsGreaterThanSix;
	}
	public Integer getA2_A3GirlsTotal() {
		return a2_A3GirlsTotal;
	}
	public Integer getA2_A3GrandTotal() {
		return a2_A3GrandTotal;
	}
	public Integer getA2_A4BoysZeroToTwo() {
		return a2_A4BoysZeroToTwo;
	}
	public Integer getA2_A4BoysTwoToFour() {
		return a2_A4BoysTwoToFour;
	}
	public Integer getA2_A4BoysFourToSix() {
		return a2_A4BoysFourToSix;
	}
	public Integer getA2_A4BoysGreaterThanSix() {
		return a2_A4BoysGreaterThanSix;
	}
	public Integer getA2_A4BoysTotal() {
		return a2_A4BoysTotal;
	}
	public Integer getA2_A4GirlsZeroToTwo() {
		return a2_A4GirlsZeroToTwo;
	}
	public Integer getA2_A4GirlsTwoToFour() {
		return a2_A4GirlsTwoToFour;
	}
	public Integer getA2_A4GirlsFourToSix() {
		return a2_A4GirlsFourToSix;
	}
	public Integer getA2_A4GirlsGreaterThanSix() {
		return a2_A4GirlsGreaterThanSix;
	}
	public Integer getA2_A4GirlsTotal() {
		return a2_A4GirlsTotal;
	}
	public Integer getA2_A4GrandTotal() {
		return a2_A4GrandTotal;
	}
	public Integer getA2_A5BoysZeroToTwo() {
		return a2_A5BoysZeroToTwo;
	}
	public Integer getA2_A5BoysTwoToFour() {
		return a2_A5BoysTwoToFour;
	}
	public Integer getA2_A5BoysFourToSix() {
		return a2_A5BoysFourToSix;
	}
	public Integer getA2_A5BoysGreaterThanSix() {
		return a2_A5BoysGreaterThanSix;
	}
	public Integer getA2_A5BoysTotal() {
		return a2_A5BoysTotal;
	}
	public Integer getA2_A5GirlsZeroToTwo() {
		return a2_A5GirlsZeroToTwo;
	}
	public Integer getA2_A5GirlsTwoToFour() {
		return a2_A5GirlsTwoToFour;
	}
	public Integer getA2_A5GirlsFourToSix() {
		return a2_A5GirlsFourToSix;
	}
	public Integer getA2_A5GirlsGreaterThanSix() {
		return a2_A5GirlsGreaterThanSix;
	}
	public Integer getA2_A5GirlsTotal() {
		return a2_A5GirlsTotal;
	}
	public Integer getA2_A5GrandTotal() {
		return a2_A5GrandTotal;
	}
	public void setSaaSectionAId(Integer saaSectionAId) {
		this.saaSectionAId = saaSectionAId;
	}
	public void setA_1BoysZeroToTwo(Integer a_1BoysZeroToTwo) {
		this.a_1BoysZeroToTwo = a_1BoysZeroToTwo;
	}
	public void setA_1BoysTwoToFour(Integer a_1BoysTwoToFour) {
		this.a_1BoysTwoToFour = a_1BoysTwoToFour;
	}
	public void setA_1BoysFourToSix(Integer a_1BoysFourToSix) {
		this.a_1BoysFourToSix = a_1BoysFourToSix;
	}
	public void setA_1BoysGreaterThanSix(Integer a_1BoysGreaterThanSix) {
		this.a_1BoysGreaterThanSix = a_1BoysGreaterThanSix;
	}
	public void setA_1BoysTotal(Integer a_1BoysTotal) {
		this.a_1BoysTotal = a_1BoysTotal;
	}
	public void setA_1GirlsZeroToTwo(Integer a_1GirlsZeroToTwo) {
		this.a_1GirlsZeroToTwo = a_1GirlsZeroToTwo;
	}
	public void setA_1GirlsTwoToFour(Integer a_1GirlsTwoToFour) {
		this.a_1GirlsTwoToFour = a_1GirlsTwoToFour;
	}
	public void setA_1GirlsFourToSix(Integer a_1GirlsFourToSix) {
		this.a_1GirlsFourToSix = a_1GirlsFourToSix;
	}
	public void setA_1GirlsGreaterThanSix(Integer a_1GirlsGreaterThanSix) {
		this.a_1GirlsGreaterThanSix = a_1GirlsGreaterThanSix;
	}
	public void setA_1GirlsTotal(Integer a_1GirlsTotal) {
		this.a_1GirlsTotal = a_1GirlsTotal;
	}
	public void setA_1GrandTotal(Integer a_1GrandTotal) {
		this.a_1GrandTotal = a_1GrandTotal;
	}
	public void setA_2BoysZeroToTwo(Integer a_2BoysZeroToTwo) {
		this.a_2BoysZeroToTwo = a_2BoysZeroToTwo;
	}
	public void setA_2BoysTwoToFour(Integer a_2BoysTwoToFour) {
		this.a_2BoysTwoToFour = a_2BoysTwoToFour;
	}
	public void setA_2BoysFourToSix(Integer a_2BoysFourToSix) {
		this.a_2BoysFourToSix = a_2BoysFourToSix;
	}
	public void setA_2BoysGreaterThanSix(Integer a_2BoysGreaterThanSix) {
		this.a_2BoysGreaterThanSix = a_2BoysGreaterThanSix;
	}
	public void setA_2BoysTotal(Integer a_2BoysTotal) {
		this.a_2BoysTotal = a_2BoysTotal;
	}
	public void setA_2GirlsZeroToTwo(Integer a_2GirlsZeroToTwo) {
		this.a_2GirlsZeroToTwo = a_2GirlsZeroToTwo;
	}
	public void setA_2GirlsTwoToFour(Integer a_2GirlsTwoToFour) {
		this.a_2GirlsTwoToFour = a_2GirlsTwoToFour;
	}
	public void setA_2GirlsFourToSix(Integer a_2GirlsFourToSix) {
		this.a_2GirlsFourToSix = a_2GirlsFourToSix;
	}
	public void setA_2GirlsGreaterThanSix(Integer a_2GirlsGreaterThanSix) {
		this.a_2GirlsGreaterThanSix = a_2GirlsGreaterThanSix;
	}
	public void setA_2GirlsTotal(Integer a_2GirlsTotal) {
		this.a_2GirlsTotal = a_2GirlsTotal;
	}
	public void setA_2GrandTotal(Integer a_2GrandTotal) {
		this.a_2GrandTotal = a_2GrandTotal;
	}
	public void setA_3BoysZeroToTwo(Integer a_3BoysZeroToTwo) {
		this.a_3BoysZeroToTwo = a_3BoysZeroToTwo;
	}
	public void setA_3BoysTwoToFour(Integer a_3BoysTwoToFour) {
		this.a_3BoysTwoToFour = a_3BoysTwoToFour;
	}
	public void setA_3BoysFourToSix(Integer a_3BoysFourToSix) {
		this.a_3BoysFourToSix = a_3BoysFourToSix;
	}
	public void setA_3BoysGreaterThanSix(Integer a_3BoysGreaterThanSix) {
		this.a_3BoysGreaterThanSix = a_3BoysGreaterThanSix;
	}
	public void setA_3BoysTotal(Integer a_3BoysTotal) {
		this.a_3BoysTotal = a_3BoysTotal;
	}
	public void setA_3GirlsZeroToTwo(Integer a_3GirlsZeroToTwo) {
		this.a_3GirlsZeroToTwo = a_3GirlsZeroToTwo;
	}
	public void setA_3GirlsTwoToFour(Integer a_3GirlsTwoToFour) {
		this.a_3GirlsTwoToFour = a_3GirlsTwoToFour;
	}
	public void setA_3GirlsFourToSix(Integer a_3GirlsFourToSix) {
		this.a_3GirlsFourToSix = a_3GirlsFourToSix;
	}
	public void setA_3GirlsGreaterThanSix(Integer a_3GirlsGreaterThanSix) {
		this.a_3GirlsGreaterThanSix = a_3GirlsGreaterThanSix;
	}
	public void setA_3GirlsTotal(Integer a_3GirlsTotal) {
		this.a_3GirlsTotal = a_3GirlsTotal;
	}
	public void setA_3GrandTotal(Integer a_3GrandTotal) {
		this.a_3GrandTotal = a_3GrandTotal;
	}
	public void setA_A1BoysZeroToTwo(Integer a_A1BoysZeroToTwo) {
		this.a_A1BoysZeroToTwo = a_A1BoysZeroToTwo;
	}
	public void setA_A1BoysTwoToFour(Integer a_A1BoysTwoToFour) {
		this.a_A1BoysTwoToFour = a_A1BoysTwoToFour;
	}
	public void setA_A1BoysFourToSix(Integer a_A1BoysFourToSix) {
		this.a_A1BoysFourToSix = a_A1BoysFourToSix;
	}
	public void setA_A1BoysGreaterThanSix(Integer a_A1BoysGreaterThanSix) {
		this.a_A1BoysGreaterThanSix = a_A1BoysGreaterThanSix;
	}
	public void setA_A1BoysTotal(Integer a_A1BoysTotal) {
		this.a_A1BoysTotal = a_A1BoysTotal;
	}
	public void setA_A1GirlsZeroToTwo(Integer a_A1GirlsZeroToTwo) {
		this.a_A1GirlsZeroToTwo = a_A1GirlsZeroToTwo;
	}
	public void setA_A1GirlsTwoToFour(Integer a_A1GirlsTwoToFour) {
		this.a_A1GirlsTwoToFour = a_A1GirlsTwoToFour;
	}
	public void setA_A1GirlsFourToSix(Integer a_A1GirlsFourToSix) {
		this.a_A1GirlsFourToSix = a_A1GirlsFourToSix;
	}
	public void setA_A1GirlsGreaterThanSix(Integer a_A1GirlsGreaterThanSix) {
		this.a_A1GirlsGreaterThanSix = a_A1GirlsGreaterThanSix;
	}
	public void setA_A1GirlsTotal(Integer a_A1GirlsTotal) {
		this.a_A1GirlsTotal = a_A1GirlsTotal;
	}
	public void setA_A1GrandTotal(Integer a_A1GrandTotal) {
		this.a_A1GrandTotal = a_A1GrandTotal;
	}
	public void setA_A2BoysZeroToTwo(Integer a_A2BoysZeroToTwo) {
		this.a_A2BoysZeroToTwo = a_A2BoysZeroToTwo;
	}
	public void setA_A2BoysTwoToFour(Integer a_A2BoysTwoToFour) {
		this.a_A2BoysTwoToFour = a_A2BoysTwoToFour;
	}
	public void setA_A2BoysFourToSix(Integer a_A2BoysFourToSix) {
		this.a_A2BoysFourToSix = a_A2BoysFourToSix;
	}
	public void setA_A2BoysGreaterThanSix(Integer a_A2BoysGreaterThanSix) {
		this.a_A2BoysGreaterThanSix = a_A2BoysGreaterThanSix;
	}
	public void setA_A2BoysTotal(Integer a_A2BoysTotal) {
		this.a_A2BoysTotal = a_A2BoysTotal;
	}
	public void setA_A2GirlsZeroToTwo(Integer a_A2GirlsZeroToTwo) {
		this.a_A2GirlsZeroToTwo = a_A2GirlsZeroToTwo;
	}
	public void setA_A2GirlsTwoToFour(Integer a_A2GirlsTwoToFour) {
		this.a_A2GirlsTwoToFour = a_A2GirlsTwoToFour;
	}
	public void setA_A2GirlsFourToSix(Integer a_A2GirlsFourToSix) {
		this.a_A2GirlsFourToSix = a_A2GirlsFourToSix;
	}
	public void setA_A2GirlsGreaterThanSix(Integer a_A2GirlsGreaterThanSix) {
		this.a_A2GirlsGreaterThanSix = a_A2GirlsGreaterThanSix;
	}
	public void setA_A2GirlsTotal(Integer a_A2GirlsTotal) {
		this.a_A2GirlsTotal = a_A2GirlsTotal;
	}
	public void setA_A2GrandTotal(Integer a_A2GrandTotal) {
		this.a_A2GrandTotal = a_A2GrandTotal;
	}
	public void setA_A3BoysZeroToTwo(Integer a_A3BoysZeroToTwo) {
		this.a_A3BoysZeroToTwo = a_A3BoysZeroToTwo;
	}
	public void setA_A3BoysTwoToFour(Integer a_A3BoysTwoToFour) {
		this.a_A3BoysTwoToFour = a_A3BoysTwoToFour;
	}
	public void setA_A3BoysFourToSix(Integer a_A3BoysFourToSix) {
		this.a_A3BoysFourToSix = a_A3BoysFourToSix;
	}
	public void setA_A3BoysGreaterThanSix(Integer a_A3BoysGreaterThanSix) {
		this.a_A3BoysGreaterThanSix = a_A3BoysGreaterThanSix;
	}
	public void setA_A3BoysTotal(Integer a_A3BoysTotal) {
		this.a_A3BoysTotal = a_A3BoysTotal;
	}
	public void setA_A3GirlsZeroToTwo(Integer a_A3GirlsZeroToTwo) {
		this.a_A3GirlsZeroToTwo = a_A3GirlsZeroToTwo;
	}
	public void setA_A3GirlsTwoToFour(Integer a_A3GirlsTwoToFour) {
		this.a_A3GirlsTwoToFour = a_A3GirlsTwoToFour;
	}
	public void setA_A3GirlsFourToSix(Integer a_A3GirlsFourToSix) {
		this.a_A3GirlsFourToSix = a_A3GirlsFourToSix;
	}
	public void setA_A3GirlsGreaterThanSix(Integer a_A3GirlsGreaterThanSix) {
		this.a_A3GirlsGreaterThanSix = a_A3GirlsGreaterThanSix;
	}
	public void setA_A3GirlsTotal(Integer a_A3GirlsTotal) {
		this.a_A3GirlsTotal = a_A3GirlsTotal;
	}
	public void setA_A3GrandTotal(Integer a_A3GrandTotal) {
		this.a_A3GrandTotal = a_A3GrandTotal;
	}
	public void setA1_1BoysZeroToTwo(Integer a1_1BoysZeroToTwo) {
		this.a1_1BoysZeroToTwo = a1_1BoysZeroToTwo;
	}
	public void setA1_1BoysTwoToFour(Integer a1_1BoysTwoToFour) {
		this.a1_1BoysTwoToFour = a1_1BoysTwoToFour;
	}
	public void setA1_1BoysFourToSix(Integer a1_1BoysFourToSix) {
		this.a1_1BoysFourToSix = a1_1BoysFourToSix;
	}
	public void setA1_1BoysGreaterThanSix(Integer a1_1BoysGreaterThanSix) {
		this.a1_1BoysGreaterThanSix = a1_1BoysGreaterThanSix;
	}
	public void setA1_1BoysTotal(Integer a1_1BoysTotal) {
		this.a1_1BoysTotal = a1_1BoysTotal;
	}
	public void setA1_1GirlsZeroToTwo(Integer a1_1GirlsZeroToTwo) {
		this.a1_1GirlsZeroToTwo = a1_1GirlsZeroToTwo;
	}
	public void setA1_1GirlsTwoToFour(Integer a1_1GirlsTwoToFour) {
		this.a1_1GirlsTwoToFour = a1_1GirlsTwoToFour;
	}
	public void setA1_1GirlsFourToSix(Integer a1_1GirlsFourToSix) {
		this.a1_1GirlsFourToSix = a1_1GirlsFourToSix;
	}
	public void setA1_1GirlsGreaterThanSix(Integer a1_1GirlsGreaterThanSix) {
		this.a1_1GirlsGreaterThanSix = a1_1GirlsGreaterThanSix;
	}
	public void setA1_1GirlsTotal(Integer a1_1GirlsTotal) {
		this.a1_1GirlsTotal = a1_1GirlsTotal;
	}
	public void setA1_1GrandTotal(Integer a1_1GrandTotal) {
		this.a1_1GrandTotal = a1_1GrandTotal;
	}
	public void setA1_2BoysZeroToTwo(Integer a1_2BoysZeroToTwo) {
		this.a1_2BoysZeroToTwo = a1_2BoysZeroToTwo;
	}
	public void setA1_2BoysTwoToFour(Integer a1_2BoysTwoToFour) {
		this.a1_2BoysTwoToFour = a1_2BoysTwoToFour;
	}
	public void setA1_2BoysFourToSix(Integer a1_2BoysFourToSix) {
		this.a1_2BoysFourToSix = a1_2BoysFourToSix;
	}
	public void setA1_2BoysGreaterThanSix(Integer a1_2BoysGreaterThanSix) {
		this.a1_2BoysGreaterThanSix = a1_2BoysGreaterThanSix;
	}
	public void setA1_2BoysTotal(Integer a1_2BoysTotal) {
		this.a1_2BoysTotal = a1_2BoysTotal;
	}
	public void setA1_2GirlsZeroToTwo(Integer a1_2GirlsZeroToTwo) {
		this.a1_2GirlsZeroToTwo = a1_2GirlsZeroToTwo;
	}
	public void setA1_2GirlsTwoToFour(Integer a1_2GirlsTwoToFour) {
		this.a1_2GirlsTwoToFour = a1_2GirlsTwoToFour;
	}
	public void setA1_2GirlsFourToSix(Integer a1_2GirlsFourToSix) {
		this.a1_2GirlsFourToSix = a1_2GirlsFourToSix;
	}
	public void setA1_2GirlsGreaterThanSix(Integer a1_2GirlsGreaterThanSix) {
		this.a1_2GirlsGreaterThanSix = a1_2GirlsGreaterThanSix;
	}
	public void setA1_2GirlsTotal(Integer a1_2GirlsTotal) {
		this.a1_2GirlsTotal = a1_2GirlsTotal;
	}
	public void setA1_2GrandTotal(Integer a1_2GrandTotal) {
		this.a1_2GrandTotal = a1_2GrandTotal;
	}
	public void setA1_3BoysZeroToTwo(Integer a1_3BoysZeroToTwo) {
		this.a1_3BoysZeroToTwo = a1_3BoysZeroToTwo;
	}
	public void setA1_3BoysTwoToFour(Integer a1_3BoysTwoToFour) {
		this.a1_3BoysTwoToFour = a1_3BoysTwoToFour;
	}
	public void setA1_3BoysFourToSix(Integer a1_3BoysFourToSix) {
		this.a1_3BoysFourToSix = a1_3BoysFourToSix;
	}
	public void setA1_3BoysGreaterThanSix(Integer a1_3BoysGreaterThanSix) {
		this.a1_3BoysGreaterThanSix = a1_3BoysGreaterThanSix;
	}
	public void setA1_3BoysTotal(Integer a1_3BoysTotal) {
		this.a1_3BoysTotal = a1_3BoysTotal;
	}
	public void setA1_3GirlsZeroToTwo(Integer a1_3GirlsZeroToTwo) {
		this.a1_3GirlsZeroToTwo = a1_3GirlsZeroToTwo;
	}
	public void setA1_3GirlsTwoToFour(Integer a1_3GirlsTwoToFour) {
		this.a1_3GirlsTwoToFour = a1_3GirlsTwoToFour;
	}
	public void setA1_3GirlsFourToSix(Integer a1_3GirlsFourToSix) {
		this.a1_3GirlsFourToSix = a1_3GirlsFourToSix;
	}
	public void setA1_3GirlsGreaterThanSix(Integer a1_3GirlsGreaterThanSix) {
		this.a1_3GirlsGreaterThanSix = a1_3GirlsGreaterThanSix;
	}
	public void setA1_3GirlsTotal(Integer a1_3GirlsTotal) {
		this.a1_3GirlsTotal = a1_3GirlsTotal;
	}
	public void setA1_3GrandTotal(Integer a1_3GrandTotal) {
		this.a1_3GrandTotal = a1_3GrandTotal;
	}
	public void setA1_A1BoysZeroToTwo(Integer a1_A1BoysZeroToTwo) {
		this.a1_A1BoysZeroToTwo = a1_A1BoysZeroToTwo;
	}
	public void setA1_A1BoysTwoToFour(Integer a1_A1BoysTwoToFour) {
		this.a1_A1BoysTwoToFour = a1_A1BoysTwoToFour;
	}
	public void setA1_A1BoysFourToSix(Integer a1_A1BoysFourToSix) {
		this.a1_A1BoysFourToSix = a1_A1BoysFourToSix;
	}
	public void setA1_A1BoysGreaterThanSix(Integer a1_A1BoysGreaterThanSix) {
		this.a1_A1BoysGreaterThanSix = a1_A1BoysGreaterThanSix;
	}
	public void setA1_A1BoysTotal(Integer a1_A1BoysTotal) {
		this.a1_A1BoysTotal = a1_A1BoysTotal;
	}
	public void setA1_A1GirlsZeroToTwo(Integer a1_A1GirlsZeroToTwo) {
		this.a1_A1GirlsZeroToTwo = a1_A1GirlsZeroToTwo;
	}
	public void setA1_A1GirlsTwoToFour(Integer a1_A1GirlsTwoToFour) {
		this.a1_A1GirlsTwoToFour = a1_A1GirlsTwoToFour;
	}
	public void setA1_A1GirlsFourToSix(Integer a1_A1GirlsFourToSix) {
		this.a1_A1GirlsFourToSix = a1_A1GirlsFourToSix;
	}
	public void setA1_A1GirlsGreaterThanSix(Integer a1_A1GirlsGreaterThanSix) {
		this.a1_A1GirlsGreaterThanSix = a1_A1GirlsGreaterThanSix;
	}
	public void setA1_A1GirlsTotal(Integer a1_A1GirlsTotal) {
		this.a1_A1GirlsTotal = a1_A1GirlsTotal;
	}
	public void setA1_A1GrandTotal(Integer a1_A1GrandTotal) {
		this.a1_A1GrandTotal = a1_A1GrandTotal;
	}
	public void setA1_A2BoysZeroToTwo(Integer a1_A2BoysZeroToTwo) {
		this.a1_A2BoysZeroToTwo = a1_A2BoysZeroToTwo;
	}
	public void setA1_A2BoysTwoToFour(Integer a1_A2BoysTwoToFour) {
		this.a1_A2BoysTwoToFour = a1_A2BoysTwoToFour;
	}
	public void setA1_A2BoysFourToSix(Integer a1_A2BoysFourToSix) {
		this.a1_A2BoysFourToSix = a1_A2BoysFourToSix;
	}
	public void setA1_A2BoysGreaterThanSix(Integer a1_A2BoysGreaterThanSix) {
		this.a1_A2BoysGreaterThanSix = a1_A2BoysGreaterThanSix;
	}
	public void setA1_A2BoysTotal(Integer a1_A2BoysTotal) {
		this.a1_A2BoysTotal = a1_A2BoysTotal;
	}
	public void setA1_A2GirlsZeroToTwo(Integer a1_A2GirlsZeroToTwo) {
		this.a1_A2GirlsZeroToTwo = a1_A2GirlsZeroToTwo;
	}
	public void setA1_A2GirlsTwoToFour(Integer a1_A2GirlsTwoToFour) {
		this.a1_A2GirlsTwoToFour = a1_A2GirlsTwoToFour;
	}
	public void setA1_A2GirlsFourToSix(Integer a1_A2GirlsFourToSix) {
		this.a1_A2GirlsFourToSix = a1_A2GirlsFourToSix;
	}
	public void setA1_A2GirlsGreaterThanSix(Integer a1_A2GirlsGreaterThanSix) {
		this.a1_A2GirlsGreaterThanSix = a1_A2GirlsGreaterThanSix;
	}
	public void setA1_A2GirlsTotal(Integer a1_A2GirlsTotal) {
		this.a1_A2GirlsTotal = a1_A2GirlsTotal;
	}
	public void setA1_A2GrandTotal(Integer a1_A2GrandTotal) {
		this.a1_A2GrandTotal = a1_A2GrandTotal;
	}
	public void setA1_A3BoysZeroToTwo(Integer a1_A3BoysZeroToTwo) {
		this.a1_A3BoysZeroToTwo = a1_A3BoysZeroToTwo;
	}
	public void setA1_A3BoysTwoToFour(Integer a1_A3BoysTwoToFour) {
		this.a1_A3BoysTwoToFour = a1_A3BoysTwoToFour;
	}
	public void setA1_A3BoysFourToSix(Integer a1_A3BoysFourToSix) {
		this.a1_A3BoysFourToSix = a1_A3BoysFourToSix;
	}
	public void setA1_A3BoysGreaterThanSix(Integer a1_A3BoysGreaterThanSix) {
		this.a1_A3BoysGreaterThanSix = a1_A3BoysGreaterThanSix;
	}
	public void setA1_A3BoysTotal(Integer a1_A3BoysTotal) {
		this.a1_A3BoysTotal = a1_A3BoysTotal;
	}
	public void setA1_A3GirlsZeroToTwo(Integer a1_A3GirlsZeroToTwo) {
		this.a1_A3GirlsZeroToTwo = a1_A3GirlsZeroToTwo;
	}
	public void setA1_A3GirlsTwoToFour(Integer a1_A3GirlsTwoToFour) {
		this.a1_A3GirlsTwoToFour = a1_A3GirlsTwoToFour;
	}
	public void setA1_A3GirlsFourToSix(Integer a1_A3GirlsFourToSix) {
		this.a1_A3GirlsFourToSix = a1_A3GirlsFourToSix;
	}
	public void setA1_A3GirlsGreaterThanSix(Integer a1_A3GirlsGreaterThanSix) {
		this.a1_A3GirlsGreaterThanSix = a1_A3GirlsGreaterThanSix;
	}
	public void setA1_A3GirlsTotal(Integer a1_A3GirlsTotal) {
		this.a1_A3GirlsTotal = a1_A3GirlsTotal;
	}
	public void setA1_A3GrandTotal(Integer a1_A3GrandTotal) {
		this.a1_A3GrandTotal = a1_A3GrandTotal;
	}
	public void setA2_1BoysZeroToTwo(Integer a2_1BoysZeroToTwo) {
		this.a2_1BoysZeroToTwo = a2_1BoysZeroToTwo;
	}
	public void setA2_1BoysTwoToFour(Integer a2_1BoysTwoToFour) {
		this.a2_1BoysTwoToFour = a2_1BoysTwoToFour;
	}
	public void setA2_1BoysFourToSix(Integer a2_1BoysFourToSix) {
		this.a2_1BoysFourToSix = a2_1BoysFourToSix;
	}
	public void setA2_1BoysGreaterThanSix(Integer a2_1BoysGreaterThanSix) {
		this.a2_1BoysGreaterThanSix = a2_1BoysGreaterThanSix;
	}
	public void setA2_1BoysTotal(Integer a2_1BoysTotal) {
		this.a2_1BoysTotal = a2_1BoysTotal;
	}
	public void setA2_1GirlsZeroToTwo(Integer a2_1GirlsZeroToTwo) {
		this.a2_1GirlsZeroToTwo = a2_1GirlsZeroToTwo;
	}
	public void setA2_1GirlsTwoToFour(Integer a2_1GirlsTwoToFour) {
		this.a2_1GirlsTwoToFour = a2_1GirlsTwoToFour;
	}
	public void setA2_1GirlsFourToSix(Integer a2_1GirlsFourToSix) {
		this.a2_1GirlsFourToSix = a2_1GirlsFourToSix;
	}
	public void setA2_1GirlsGreaterThanSix(Integer a2_1GirlsGreaterThanSix) {
		this.a2_1GirlsGreaterThanSix = a2_1GirlsGreaterThanSix;
	}
	public void setA2_1GirlsTotal(Integer a2_1GirlsTotal) {
		this.a2_1GirlsTotal = a2_1GirlsTotal;
	}
	public void setA2_1GrandTotal(Integer a2_1GrandTotal) {
		this.a2_1GrandTotal = a2_1GrandTotal;
	}
	public void setA2_2BoysZeroToTwo(Integer a2_2BoysZeroToTwo) {
		this.a2_2BoysZeroToTwo = a2_2BoysZeroToTwo;
	}
	public void setA2_2BoysTwoToFour(Integer a2_2BoysTwoToFour) {
		this.a2_2BoysTwoToFour = a2_2BoysTwoToFour;
	}
	public void setA2_2BoysFourToSix(Integer a2_2BoysFourToSix) {
		this.a2_2BoysFourToSix = a2_2BoysFourToSix;
	}
	public void setA2_2BoysGreaterThanSix(Integer a2_2BoysGreaterThanSix) {
		this.a2_2BoysGreaterThanSix = a2_2BoysGreaterThanSix;
	}
	public void setA2_2BoysTotal(Integer a2_2BoysTotal) {
		this.a2_2BoysTotal = a2_2BoysTotal;
	}
	public void setA2_2GirlsZeroToTwo(Integer a2_2GirlsZeroToTwo) {
		this.a2_2GirlsZeroToTwo = a2_2GirlsZeroToTwo;
	}
	public void setA2_2GirlsTwoToFour(Integer a2_2GirlsTwoToFour) {
		this.a2_2GirlsTwoToFour = a2_2GirlsTwoToFour;
	}
	public void setA2_2GirlsFourToSix(Integer a2_2GirlsFourToSix) {
		this.a2_2GirlsFourToSix = a2_2GirlsFourToSix;
	}
	public void setA2_2GirlsGreaterThanSix(Integer a2_2GirlsGreaterThanSix) {
		this.a2_2GirlsGreaterThanSix = a2_2GirlsGreaterThanSix;
	}
	public void setA2_2GirlsTotal(Integer a2_2GirlsTotal) {
		this.a2_2GirlsTotal = a2_2GirlsTotal;
	}
	public void setA2_2GrandTotal(Integer a2_2GrandTotal) {
		this.a2_2GrandTotal = a2_2GrandTotal;
	}
	public void setA2_3BoysZeroToTwo(Integer a2_3BoysZeroToTwo) {
		this.a2_3BoysZeroToTwo = a2_3BoysZeroToTwo;
	}
	public void setA2_3BoysTwoToFour(Integer a2_3BoysTwoToFour) {
		this.a2_3BoysTwoToFour = a2_3BoysTwoToFour;
	}
	public void setA2_3BoysFourToSix(Integer a2_3BoysFourToSix) {
		this.a2_3BoysFourToSix = a2_3BoysFourToSix;
	}
	public void setA2_3BoysGreaterThanSix(Integer a2_3BoysGreaterThanSix) {
		this.a2_3BoysGreaterThanSix = a2_3BoysGreaterThanSix;
	}
	public void setA2_3BoysTotal(Integer a2_3BoysTotal) {
		this.a2_3BoysTotal = a2_3BoysTotal;
	}
	public void setA2_3GirlsZeroToTwo(Integer a2_3GirlsZeroToTwo) {
		this.a2_3GirlsZeroToTwo = a2_3GirlsZeroToTwo;
	}
	public void setA2_3GirlsTwoToFour(Integer a2_3GirlsTwoToFour) {
		this.a2_3GirlsTwoToFour = a2_3GirlsTwoToFour;
	}
	public void setA2_3GirlsFourToSix(Integer a2_3GirlsFourToSix) {
		this.a2_3GirlsFourToSix = a2_3GirlsFourToSix;
	}
	public void setA2_3GirlsGreaterThanSix(Integer a2_3GirlsGreaterThanSix) {
		this.a2_3GirlsGreaterThanSix = a2_3GirlsGreaterThanSix;
	}
	public void setA2_3GirlsTotal(Integer a2_3GirlsTotal) {
		this.a2_3GirlsTotal = a2_3GirlsTotal;
	}
	public void setA2_3GrandTotal(Integer a2_3GrandTotal) {
		this.a2_3GrandTotal = a2_3GrandTotal;
	}
	public void setA2_4BoysZeroToTwo(Integer a2_4BoysZeroToTwo) {
		this.a2_4BoysZeroToTwo = a2_4BoysZeroToTwo;
	}
	public void setA2_4BoysTwoToFour(Integer a2_4BoysTwoToFour) {
		this.a2_4BoysTwoToFour = a2_4BoysTwoToFour;
	}
	public void setA2_4BoysFourToSix(Integer a2_4BoysFourToSix) {
		this.a2_4BoysFourToSix = a2_4BoysFourToSix;
	}
	public void setA2_4BoysGreaterThanSix(Integer a2_4BoysGreaterThanSix) {
		this.a2_4BoysGreaterThanSix = a2_4BoysGreaterThanSix;
	}
	public void setA2_4BoysTotal(Integer a2_4BoysTotal) {
		this.a2_4BoysTotal = a2_4BoysTotal;
	}
	public void setA2_4GirlsZeroToTwo(Integer a2_4GirlsZeroToTwo) {
		this.a2_4GirlsZeroToTwo = a2_4GirlsZeroToTwo;
	}
	public void setA2_4GirlsTwoToFour(Integer a2_4GirlsTwoToFour) {
		this.a2_4GirlsTwoToFour = a2_4GirlsTwoToFour;
	}
	public void setA2_4GirlsFourToSix(Integer a2_4GirlsFourToSix) {
		this.a2_4GirlsFourToSix = a2_4GirlsFourToSix;
	}
	public void setA2_4GirlsGreaterThanSix(Integer a2_4GirlsGreaterThanSix) {
		this.a2_4GirlsGreaterThanSix = a2_4GirlsGreaterThanSix;
	}
	public void setA2_4GirlsTotal(Integer a2_4GirlsTotal) {
		this.a2_4GirlsTotal = a2_4GirlsTotal;
	}
	public void setA2_4GrandTotal(Integer a2_4GrandTotal) {
		this.a2_4GrandTotal = a2_4GrandTotal;
	}
	public void setA2_5BoysZeroToTwo(Integer a2_5BoysZeroToTwo) {
		this.a2_5BoysZeroToTwo = a2_5BoysZeroToTwo;
	}
	public void setA2_5BoysTwoToFour(Integer a2_5BoysTwoToFour) {
		this.a2_5BoysTwoToFour = a2_5BoysTwoToFour;
	}
	public void setA2_5BoysFourToSix(Integer a2_5BoysFourToSix) {
		this.a2_5BoysFourToSix = a2_5BoysFourToSix;
	}
	public void setA2_5BoysGreaterThanSix(Integer a2_5BoysGreaterThanSix) {
		this.a2_5BoysGreaterThanSix = a2_5BoysGreaterThanSix;
	}
	public void setA2_5BoysTotal(Integer a2_5BoysTotal) {
		this.a2_5BoysTotal = a2_5BoysTotal;
	}
	public void setA2_5GirlsZeroToTwo(Integer a2_5GirlsZeroToTwo) {
		this.a2_5GirlsZeroToTwo = a2_5GirlsZeroToTwo;
	}
	public void setA2_5GirlsTwoToFour(Integer a2_5GirlsTwoToFour) {
		this.a2_5GirlsTwoToFour = a2_5GirlsTwoToFour;
	}
	public void setA2_5GirlsFourToSix(Integer a2_5GirlsFourToSix) {
		this.a2_5GirlsFourToSix = a2_5GirlsFourToSix;
	}
	public void setA2_5GirlsGreaterThanSix(Integer a2_5GirlsGreaterThanSix) {
		this.a2_5GirlsGreaterThanSix = a2_5GirlsGreaterThanSix;
	}
	public void setA2_5GirlsTotal(Integer a2_5GirlsTotal) {
		this.a2_5GirlsTotal = a2_5GirlsTotal;
	}
	public void setA2_5GrandTotal(Integer a2_5GrandTotal) {
		this.a2_5GrandTotal = a2_5GrandTotal;
	}
	public void setA2_A1BoysZeroToTwo(Integer a2_A1BoysZeroToTwo) {
		this.a2_A1BoysZeroToTwo = a2_A1BoysZeroToTwo;
	}
	public void setA2_A1BoysTwoToFour(Integer a2_A1BoysTwoToFour) {
		this.a2_A1BoysTwoToFour = a2_A1BoysTwoToFour;
	}
	public void setA2_A1BoysFourToSix(Integer a2_A1BoysFourToSix) {
		this.a2_A1BoysFourToSix = a2_A1BoysFourToSix;
	}
	public void setA2_A1BoysGreaterThanSix(Integer a2_A1BoysGreaterThanSix) {
		this.a2_A1BoysGreaterThanSix = a2_A1BoysGreaterThanSix;
	}
	public void setA2_A1BoysTotal(Integer a2_A1BoysTotal) {
		this.a2_A1BoysTotal = a2_A1BoysTotal;
	}
	public void setA2_A1GirlsZeroToTwo(Integer a2_A1GirlsZeroToTwo) {
		this.a2_A1GirlsZeroToTwo = a2_A1GirlsZeroToTwo;
	}
	public void setA2_A1GirlsTwoToFour(Integer a2_A1GirlsTwoToFour) {
		this.a2_A1GirlsTwoToFour = a2_A1GirlsTwoToFour;
	}
	public void setA2_A1GirlsFourToSix(Integer a2_A1GirlsFourToSix) {
		this.a2_A1GirlsFourToSix = a2_A1GirlsFourToSix;
	}
	public void setA2_A1GirlsGreaterThanSix(Integer a2_A1GirlsGreaterThanSix) {
		this.a2_A1GirlsGreaterThanSix = a2_A1GirlsGreaterThanSix;
	}
	public void setA2_A1GirlsTotal(Integer a2_A1GirlsTotal) {
		this.a2_A1GirlsTotal = a2_A1GirlsTotal;
	}
	public void setA2_A1GrandTotal(Integer a2_A1GrandTotal) {
		this.a2_A1GrandTotal = a2_A1GrandTotal;
	}
	public void setA2_A2BoysZeroToTwo(Integer a2_A2BoysZeroToTwo) {
		this.a2_A2BoysZeroToTwo = a2_A2BoysZeroToTwo;
	}
	public void setA2_A2BoysTwoToFour(Integer a2_A2BoysTwoToFour) {
		this.a2_A2BoysTwoToFour = a2_A2BoysTwoToFour;
	}
	public void setA2_A2BoysFourToSix(Integer a2_A2BoysFourToSix) {
		this.a2_A2BoysFourToSix = a2_A2BoysFourToSix;
	}
	public void setA2_A2BoysGreaterThanSix(Integer a2_A2BoysGreaterThanSix) {
		this.a2_A2BoysGreaterThanSix = a2_A2BoysGreaterThanSix;
	}
	public void setA2_A2BoysTotal(Integer a2_A2BoysTotal) {
		this.a2_A2BoysTotal = a2_A2BoysTotal;
	}
	public void setA2_A2GirlsZeroToTwo(Integer a2_A2GirlsZeroToTwo) {
		this.a2_A2GirlsZeroToTwo = a2_A2GirlsZeroToTwo;
	}
	public void setA2_A2GirlsTwoToFour(Integer a2_A2GirlsTwoToFour) {
		this.a2_A2GirlsTwoToFour = a2_A2GirlsTwoToFour;
	}
	public void setA2_A2GirlsFourToSix(Integer a2_A2GirlsFourToSix) {
		this.a2_A2GirlsFourToSix = a2_A2GirlsFourToSix;
	}
	public void setA2_A2GirlsGreaterThanSix(Integer a2_A2GirlsGreaterThanSix) {
		this.a2_A2GirlsGreaterThanSix = a2_A2GirlsGreaterThanSix;
	}
	public void setA2_A2GirlsTotal(Integer a2_A2GirlsTotal) {
		this.a2_A2GirlsTotal = a2_A2GirlsTotal;
	}
	public void setA2_A2GrandTotal(Integer a2_A2GrandTotal) {
		this.a2_A2GrandTotal = a2_A2GrandTotal;
	}
	public void setA2_A3BoysZeroToTwo(Integer a2_A3BoysZeroToTwo) {
		this.a2_A3BoysZeroToTwo = a2_A3BoysZeroToTwo;
	}
	public void setA2_A3BoysTwoToFour(Integer a2_A3BoysTwoToFour) {
		this.a2_A3BoysTwoToFour = a2_A3BoysTwoToFour;
	}
	public void setA2_A3BoysFourToSix(Integer a2_A3BoysFourToSix) {
		this.a2_A3BoysFourToSix = a2_A3BoysFourToSix;
	}
	public void setA2_A3BoysGreaterThanSix(Integer a2_A3BoysGreaterThanSix) {
		this.a2_A3BoysGreaterThanSix = a2_A3BoysGreaterThanSix;
	}
	public void setA2_A3BoysTotal(Integer a2_A3BoysTotal) {
		this.a2_A3BoysTotal = a2_A3BoysTotal;
	}
	public void setA2_A3GirlsZeroToTwo(Integer a2_A3GirlsZeroToTwo) {
		this.a2_A3GirlsZeroToTwo = a2_A3GirlsZeroToTwo;
	}
	public void setA2_A3GirlsTwoToFour(Integer a2_A3GirlsTwoToFour) {
		this.a2_A3GirlsTwoToFour = a2_A3GirlsTwoToFour;
	}
	public void setA2_A3GirlsFourToSix(Integer a2_A3GirlsFourToSix) {
		this.a2_A3GirlsFourToSix = a2_A3GirlsFourToSix;
	}
	public void setA2_A3GirlsGreaterThanSix(Integer a2_A3GirlsGreaterThanSix) {
		this.a2_A3GirlsGreaterThanSix = a2_A3GirlsGreaterThanSix;
	}
	public void setA2_A3GirlsTotal(Integer a2_A3GirlsTotal) {
		this.a2_A3GirlsTotal = a2_A3GirlsTotal;
	}
	public void setA2_A3GrandTotal(Integer a2_A3GrandTotal) {
		this.a2_A3GrandTotal = a2_A3GrandTotal;
	}
	public void setA2_A4BoysZeroToTwo(Integer a2_A4BoysZeroToTwo) {
		this.a2_A4BoysZeroToTwo = a2_A4BoysZeroToTwo;
	}
	public void setA2_A4BoysTwoToFour(Integer a2_A4BoysTwoToFour) {
		this.a2_A4BoysTwoToFour = a2_A4BoysTwoToFour;
	}
	public void setA2_A4BoysFourToSix(Integer a2_A4BoysFourToSix) {
		this.a2_A4BoysFourToSix = a2_A4BoysFourToSix;
	}
	public void setA2_A4BoysGreaterThanSix(Integer a2_A4BoysGreaterThanSix) {
		this.a2_A4BoysGreaterThanSix = a2_A4BoysGreaterThanSix;
	}
	public void setA2_A4BoysTotal(Integer a2_A4BoysTotal) {
		this.a2_A4BoysTotal = a2_A4BoysTotal;
	}
	public void setA2_A4GirlsZeroToTwo(Integer a2_A4GirlsZeroToTwo) {
		this.a2_A4GirlsZeroToTwo = a2_A4GirlsZeroToTwo;
	}
	public void setA2_A4GirlsTwoToFour(Integer a2_A4GirlsTwoToFour) {
		this.a2_A4GirlsTwoToFour = a2_A4GirlsTwoToFour;
	}
	public void setA2_A4GirlsFourToSix(Integer a2_A4GirlsFourToSix) {
		this.a2_A4GirlsFourToSix = a2_A4GirlsFourToSix;
	}
	public void setA2_A4GirlsGreaterThanSix(Integer a2_A4GirlsGreaterThanSix) {
		this.a2_A4GirlsGreaterThanSix = a2_A4GirlsGreaterThanSix;
	}
	public void setA2_A4GirlsTotal(Integer a2_A4GirlsTotal) {
		this.a2_A4GirlsTotal = a2_A4GirlsTotal;
	}
	public void setA2_A4GrandTotal(Integer a2_A4GrandTotal) {
		this.a2_A4GrandTotal = a2_A4GrandTotal;
	}
	public void setA2_A5BoysZeroToTwo(Integer a2_A5BoysZeroToTwo) {
		this.a2_A5BoysZeroToTwo = a2_A5BoysZeroToTwo;
	}
	public void setA2_A5BoysTwoToFour(Integer a2_A5BoysTwoToFour) {
		this.a2_A5BoysTwoToFour = a2_A5BoysTwoToFour;
	}
	public void setA2_A5BoysFourToSix(Integer a2_A5BoysFourToSix) {
		this.a2_A5BoysFourToSix = a2_A5BoysFourToSix;
	}
	public void setA2_A5BoysGreaterThanSix(Integer a2_A5BoysGreaterThanSix) {
		this.a2_A5BoysGreaterThanSix = a2_A5BoysGreaterThanSix;
	}
	public void setA2_A5BoysTotal(Integer a2_A5BoysTotal) {
		this.a2_A5BoysTotal = a2_A5BoysTotal;
	}
	public void setA2_A5GirlsZeroToTwo(Integer a2_A5GirlsZeroToTwo) {
		this.a2_A5GirlsZeroToTwo = a2_A5GirlsZeroToTwo;
	}
	public void setA2_A5GirlsTwoToFour(Integer a2_A5GirlsTwoToFour) {
		this.a2_A5GirlsTwoToFour = a2_A5GirlsTwoToFour;
	}
	public void setA2_A5GirlsFourToSix(Integer a2_A5GirlsFourToSix) {
		this.a2_A5GirlsFourToSix = a2_A5GirlsFourToSix;
	}
	public void setA2_A5GirlsGreaterThanSix(Integer a2_A5GirlsGreaterThanSix) {
		this.a2_A5GirlsGreaterThanSix = a2_A5GirlsGreaterThanSix;
	}
	public void setA2_A5GirlsTotal(Integer a2_A5GirlsTotal) {
		this.a2_A5GirlsTotal = a2_A5GirlsTotal;
	}
	public void setA2_A5GrandTotal(Integer a2_A5GrandTotal) {
		this.a2_A5GrandTotal = a2_A5GrandTotal;
	}
	public SaaDetails getSaaId() {
		return saaId;
	}
	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	} 
	
}
