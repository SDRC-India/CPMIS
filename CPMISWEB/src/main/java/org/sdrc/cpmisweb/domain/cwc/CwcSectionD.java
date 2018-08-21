package org.sdrc.cpmisweb.domain.cwc;
/**
 * @author Pratyush(pratyush@sdrc.co.in) created on: 18.10.2107
 */
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name="Cwc_Section_D")
public class CwcSectionD {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer cwcSectionDId;
	
	@Column(name="d1a_Boys_0to6")
	private Integer d1aBoys0to6;

	@Column(name="d1a_Boys_7to11")
	private Integer d1aBoys7to11;

	@Column(name="d1a_Boys_12to15")
	private Integer d1aBoys12to15;

	@Column(name="d1a_Boys_16to18")
	private Integer d1aBoys16to18;

	@Column(name="d1a_Boys_GreaterThan18")
	private Integer d1aBoysGreaterThan18;

	@Column(name="d1a_Boys_Total")
	private Integer d1aBoysTotal;

	@Column(name="d1a_Girls_0to6")
	private Integer d1aGirls0to6;

	@Column(name="d1a_Girls_7to11")
	private Integer d1aGirls7to11;

	@Column(name="d1a_Girls_12to15")
	private Integer d1aGirls12to15;

	@Column(name="d1a_Girls_16to18")
	private Integer d1aGirls16to18;

	@Column(name="d1a_Girls_GreaterThan18")
	private Integer d1aGirlsGreaterThan18;

	@Column(name="d1a_Girls_Total")
	private Integer d1aGirlsTotal;

	@Column(name="d1a_Grand_Total")
	private Integer d1aGrandTotal;

	@Column(name="d1a_Name_Of_CCIs")
	private String  d1aNameOfCCIs;
	
	@Column(name="d1b_Boys_0to6")
	private Integer d1bBoys0to6;

	@Column(name="d1b_Boys_7to11")
	private Integer d1bBoys7to11;

	@Column(name="d1b_Boys_12to15")
	private Integer d1bBoys12to15;

	@Column(name="d1b_Boys_16to18")
	private Integer d1bBoys16to18;

	@Column(name="d1b_Boys_GreaterThan18")
	private Integer d1bBoysGreaterThan18;

	@Column(name="d1b_Boys_Total")
	private Integer d1bBoysTotal;

	@Column(name="d1b_Girls_0to6")
	private Integer d1bGirls0to6;

	@Column(name="d1b_Girls_7to11")
	private Integer d1bGirls7to11;

	@Column(name="d1b_Girls_12to15")
	private Integer d1bGirls12to15;

	@Column(name="d1b_Girls_16to18")
	private Integer d1bGirls16to18;

	@Column(name="d1b_Girls_GreaterThan18")
	private Integer d1bGirlsGreaterThan18;

	@Column(name="d1b_Girls_Total")
	private Integer d1bGirlsTotal;

	@Column(name="d1b_Grand_Total")
	private Integer d1bGrandTotal;

	@Column(name="d1b_Name_Of_CCIs")
	private String  d1bNameOfCCIs;
	
	@Column(name="d1c_Boys_0to6")
	private Integer d1cBoys0to6;

	@Column(name="d1c_Boys_7to11")
	private Integer d1cBoys7to11;

	@Column(name="d1c_Boys_12to15")
	private Integer d1cBoys12to15;

	@Column(name="d1c_Boys_16to18")
	private Integer d1cBoys16to18;

	@Column(name="d1c_Boys_GreaterThan18")
	private Integer d1cBoysGreaterThan18;

	@Column(name="d1c_Boys_Total")
	private Integer d1cBoysTotal;

	@Column(name="d1c_Girls_0to6")
	private Integer d1cGirls0to6;

	@Column(name="d1c_Girls_7to11")
	private Integer d1cGirls7to11;

	@Column(name="d1c_Girls_12to15")
	private Integer d1cGirls12to15;

	@Column(name="d1c_Girls_16to18")
	private Integer d1cGirls16to18;

	@Column(name="d1c_Girls_GreaterThan18")
	private Integer d1cGirlsGreaterThan18;

	@Column(name="d1c_Girls_Total")
	private Integer d1cGirlsTotal;

	@Column(name="d1c_Grand_Total")
	private Integer d1cGrandTotal;

	@Column(name="d1c_Name_Of_CCIs")
	private String  d1cNameOfCCIs;
	
	@Column(name="d1d_Boys_0to6")
	private Integer d1dBoys0to6;

	@Column(name="d1d_Boys_7to11")
	private Integer d1dBoys7to11;

	@Column(name="d1d_Boys_12to15")
	private Integer d1dBoys12to15;

	@Column(name="d1d_Boys_16to18")
	private Integer d1dBoys16to18;

	@Column(name="d1d_Boys_GreaterThan18")
	private Integer d1dBoysGreaterThan18;

	@Column(name="d1d_Boys_Total")
	private Integer d1dBoysTotal;

	@Column(name="d1d_Girls_0to6")
	private Integer d1dGirls0to6;

	@Column(name="d1d_Girls_7to11")
	private Integer d1dGirls7to11;

	@Column(name="d1d_Girls_12to15")
	private Integer d1dGirls12to15;

	@Column(name="d1d_Girls_16to18")
	private Integer d1dGirls16to18;

	@Column(name="d1d_Girls_GreaterThan18")
	private Integer d1dGirlsGreaterThan18;

	@Column(name="d1d_Girls_Total")
	private Integer d1dGirlsTotal;

	@Column(name="d1d_Grand_Total")
	private Integer d1dGrandTotal;
	@Column(name="d1d_Name_Of_CCIs")
	private String  d1dNameOfCCIs;
	
	@Column(name="d1e_Boys_0to6")
	private Integer d1eBoys0to6;
	@Column(name="d1e_Boys_7to11")
	private Integer d1eBoys7to11;
	@Column(name="d1e_Boys_12to15")
	private Integer d1eBoys12to15;
	@Column(name="d1e_Boys_16to18")
	private Integer d1eBoys16to18;
	@Column(name="d1e_Boys_GreaterThan18")
	private Integer d1eBoysGreaterThan18;
	@Column(name="d1e_Boys_Total")
	private Integer d1eBoysTotal;
	@Column(name="d1e_Girls_0to6")
	private Integer d1eGirls0to6;
	@Column(name="d1e_Girls_7to11")
	private Integer d1eGirls7to11;
	@Column(name="d1e_Girls_12to15")
	private Integer d1eGirls12to15;
	@Column(name="d1e_Girls_16to18")
	private Integer d1eGirls16to18;
	@Column(name="d1e_Girls_GreaterThan18")
	private Integer d1eGirlsGreaterThan18;
	@Column(name="d1e_Girls_Total")
	private Integer d1eGirlsTotal;
	@Column(name="d1e_Grand_Total")
	private Integer d1eGrandTotal;
	@Column(name="d1e_Name_Of_CCIs")
	private String  d1eNameOfCCIs;


	@Column(name="d1_Boys_0to6")
	private Integer d1Boys0to6;

	@Column(name="d1_Boys_7to11")
	private Integer d1Boys7to11;

	@Column(name="d1_Boys_12to15")
	private Integer d1Boys12to15;

	@Column(name="d1_Boys_16to18")
	private Integer d1Boys16to18;

	@Column(name="d1_Boys_GreaterThan18")
	private Integer d1BoysGreaterThan18;

	@Column(name="d1_Boys_Total")
	private Integer d1BoysTotal;

	@Column(name="d1_Girls_0to6")
	private Integer d1Girls0to6;

	@Column(name="d1_Girls_7to11")
	private Integer d1Girls7to11;

	@Column(name="d1_Girls_12to15")
	private Integer d1Girls12to15;

	@Column(name="d1_Girls_16to18")
	private Integer d1Girls16to18;

	@Column(name="d1_Girls_GreaterThan18")
	private Integer d1GirlsGreaterThan18;

	@Column(name="d1_Girls_Total")
	private Integer d1GirlsTotal;

	@Column(name="d1_Grand_Total")
	private Integer d1GrandTotal;
	
	@Column(name="d2_Boys_0to6")
	private Integer d2Boys0to6;

	@Column(name="d2_Boys_7to11")
	private Integer d2Boys7to11;

	@Column(name="d2_Boys_12to15")
	private Integer d2Boys12to15;

	@Column(name="d2_Boys_16to18")
	private Integer d2Boys16to18;

	@Column(name="d2_Boys_GreaterThan18")
	private Integer d2BoysGreaterThan18;

	@Column(name="d2_Boys_Total")
	private Integer d2BoysTotal;

	@Column(name="d2_Girls_0to6")
	private Integer d2Girls0to6;

	@Column(name="d2_Girls_7to11")
	private Integer d2Girls7to11;

	@Column(name="d2_Girls_12to15")
	private Integer d2Girls12to15;

	@Column(name="d2_Girls_16to18")
	private Integer d2Girls16to18;

	@Column(name="d2_Girls_GreaterThan18")
	private Integer d2GirlsGreaterThan18;

	@Column(name="d2_Girls_Total")
	private Integer d2GirlsTotal;

	@Column(name="d2_Grand_Total")
	private Integer d2GrandTotal;

	@Column(name="d2_Name_Of_CCIs")
	private String  d2NameOfCCIs;
	
	@Column(name="d3_Boys_0to6")
	private Integer d3Boys0to6;

	@Column(name="d3_Boys_7to11")
	private Integer d3Boys7to11;

	@Column(name="d3_Boys_12to15")
	private Integer d3Boys12to15;

	@Column(name="d3_Boys_16to18")
	private Integer d3Boys16to18;

	@Column(name="d3_Boys_GreaterThan18")
	private Integer d3BoysGreaterThan18;

	@Column(name="d3_Boys_Total")
	private Integer d3BoysTotal;

	@Column(name="d3_Girls_0to6")
	private Integer d3Girls0to6;

	@Column(name="d3_Girls_7to11")
	private Integer d3Girls7to11;

	@Column(name="d3_Girls_12to15")
	private Integer d3Girls12to15;

	@Column(name="d3_Girls_16to18")
	private Integer d3Girls16to18;

	@Column(name="d3_Girls_GreaterThan18")
	private Integer d3GirlsGreaterThan18;

	@Column(name="d3_Girls_Total")
	private Integer d3GirlsTotal;

	@Column(name="d3_Grand_Total")
	private Integer d3GrandTotal;

	@Column(name="d3_Name_Of_CCIs")
	private String  d3NameOfCCIs;
	
	@Column(name="d4_Boys_0to6")
	private Integer d4Boys0to6;

	@Column(name="d4_Boys_7to11")
	private Integer d4Boys7to11;

	@Column(name="d4_Boys_12to15")
	private Integer d4Boys12to15;

	@Column(name="d4_Boys_16to18")
	private Integer d4Boys16to18;

	@Column(name="d4_Boys_GreaterThan18")
	private Integer d4BoysGreaterThan18;

	@Column(name="d4_Boys_Total")
	private Integer d4BoysTotal;

	@Column(name="d4_Girls_0to6")
	private Integer d4Girls0to6;

	@Column(name="d4_Girls_7to11")
	private Integer d4Girls7to11;

	@Column(name="d4_Girls_12to15")
	private Integer d4Girls12to15;

	@Column(name="d4_Girls_16to18")
	private Integer d4Girls16to18;

	@Column(name="d4_Girls_GreaterThan18")
	private Integer d4GirlsGreaterThan18;

	@Column(name="d4_Girls_Total")
	private Integer d4GirlsTotal;

	@Column(name="d4_Grand_Total")
	private Integer d4GrandTotal;

	@Column(name="d4_Name_Of_CCIs")
	private String  d4NameOfCCIs;
	
	@Column(name="d5_Boys_0to6")
	private Integer d5Boys0to6;

	@Column(name="d5_Boys_7to11")
	private Integer d5Boys7to11;

	@Column(name="d5_Boys_12to15")
	private Integer d5Boys12to15;

	@Column(name="d5_Boys_16to18")
	private Integer d5Boys16to18;

	@Column(name="d5_Boys_GreaterThan18")
	private Integer d5BoysGreaterThan18;

	@Column(name="d5_Boys_Total")
	private Integer d5BoysTotal;

	@Column(name="d5_Girls_0to6")
	private Integer d5Girls0to6;

	@Column(name="d5_Girls_7to11")
	private Integer d5Girls7to11;

	@Column(name="d5_Girls_12to15")
	private Integer d5Girls12to15;

	@Column(name="d5_Girls_16to18")
	private Integer d5Girls16to18;

	@Column(name="d5_Girls_GreaterThan18")
	private Integer d5GirlsGreaterThan18;

	@Column(name="d5_Girls_Total")
	private Integer d5GirlsTotal;

	@Column(name="d5_Grand_Total")
	private Integer d5GrandTotal;

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name="parent_id")
	private CwcDetails cwcDetails;

	public Integer getCwcSectionDId() {
		return cwcSectionDId;
	}

	public void setCwcSectionDId(Integer cwcSectionDId) {
		this.cwcSectionDId = cwcSectionDId;
	}

	public Integer getD1aBoys0to6() {
		return d1aBoys0to6;
	}

	public void setD1aBoys0to6(Integer d1aBoys0to6) {
		this.d1aBoys0to6 = d1aBoys0to6;
	}

	public Integer getD1aBoys7to11() {
		return d1aBoys7to11;
	}

	public void setD1aBoys7to11(Integer d1aBoys7to11) {
		this.d1aBoys7to11 = d1aBoys7to11;
	}

	public Integer getD1aBoys12to15() {
		return d1aBoys12to15;
	}

	public void setD1aBoys12to15(Integer d1aBoys12to15) {
		this.d1aBoys12to15 = d1aBoys12to15;
	}

	public Integer getD1aBoys16to18() {
		return d1aBoys16to18;
	}

	public void setD1aBoys16to18(Integer d1aBoys16to18) {
		this.d1aBoys16to18 = d1aBoys16to18;
	}

	public Integer getD1aBoysGreaterThan18() {
		return d1aBoysGreaterThan18;
	}

	public void setD1aBoysGreaterThan18(Integer d1aBoysGreaterThan18) {
		this.d1aBoysGreaterThan18 = d1aBoysGreaterThan18;
	}

	public Integer getD1aBoysTotal() {
		return d1aBoysTotal;
	}

	public void setD1aBoysTotal(Integer d1aBoysTotal) {
		this.d1aBoysTotal = d1aBoysTotal;
	}

	public Integer getD1aGirls0to6() {
		return d1aGirls0to6;
	}

	public void setD1aGirls0to6(Integer d1aGirls0to6) {
		this.d1aGirls0to6 = d1aGirls0to6;
	}

	public Integer getD1aGirls7to11() {
		return d1aGirls7to11;
	}

	public void setD1aGirls7to11(Integer d1aGirls7to11) {
		this.d1aGirls7to11 = d1aGirls7to11;
	}

	public Integer getD1aGirls12to15() {
		return d1aGirls12to15;
	}

	public void setD1aGirls12to15(Integer d1aGirls12to15) {
		this.d1aGirls12to15 = d1aGirls12to15;
	}

	public Integer getD1aGirls16to18() {
		return d1aGirls16to18;
	}

	public void setD1aGirls16to18(Integer d1aGirls16to18) {
		this.d1aGirls16to18 = d1aGirls16to18;
	}

	public Integer getD1aGirlsGreaterThan18() {
		return d1aGirlsGreaterThan18;
	}

	public void setD1aGirlsGreaterThan18(Integer d1aGirlsGreaterThan18) {
		this.d1aGirlsGreaterThan18 = d1aGirlsGreaterThan18;
	}

	public Integer getD1aGirlsTotal() {
		return d1aGirlsTotal;
	}

	public void setD1aGirlsTotal(Integer d1aGirlsTotal) {
		this.d1aGirlsTotal = d1aGirlsTotal;
	}

	public Integer getD1aGrandTotal() {
		return d1aGrandTotal;
	}

	public void setD1aGrandTotal(Integer d1aGrandTotal) {
		this.d1aGrandTotal = d1aGrandTotal;
	}

	public String getD1aNameOfCCIs() {
		return d1aNameOfCCIs;
	}

	public void setD1aNameOfCCIs(String d1aNameOfCCIs) {
		this.d1aNameOfCCIs = d1aNameOfCCIs;
	}

	public Integer getD1bBoys0to6() {
		return d1bBoys0to6;
	}

	public void setD1bBoys0to6(Integer d1bBoys0to6) {
		this.d1bBoys0to6 = d1bBoys0to6;
	}

	public Integer getD1bBoys7to11() {
		return d1bBoys7to11;
	}

	public void setD1bBoys7to11(Integer d1bBoys7to11) {
		this.d1bBoys7to11 = d1bBoys7to11;
	}

	public Integer getD1bBoys12to15() {
		return d1bBoys12to15;
	}

	public void setD1bBoys12to15(Integer d1bBoys12to15) {
		this.d1bBoys12to15 = d1bBoys12to15;
	}

	public Integer getD1bBoys16to18() {
		return d1bBoys16to18;
	}

	public void setD1bBoys16to18(Integer d1bBoys16to18) {
		this.d1bBoys16to18 = d1bBoys16to18;
	}

	public Integer getD1bBoysGreaterThan18() {
		return d1bBoysGreaterThan18;
	}

	public void setD1bBoysGreaterThan18(Integer d1bBoysGreaterThan18) {
		this.d1bBoysGreaterThan18 = d1bBoysGreaterThan18;
	}

	public Integer getD1bBoysTotal() {
		return d1bBoysTotal;
	}

	public void setD1bBoysTotal(Integer d1bBoysTotal) {
		this.d1bBoysTotal = d1bBoysTotal;
	}

	public Integer getD1bGirls0to6() {
		return d1bGirls0to6;
	}

	public void setD1bGirls0to6(Integer d1bGirls0to6) {
		this.d1bGirls0to6 = d1bGirls0to6;
	}

	public Integer getD1bGirls7to11() {
		return d1bGirls7to11;
	}

	public void setD1bGirls7to11(Integer d1bGirls7to11) {
		this.d1bGirls7to11 = d1bGirls7to11;
	}

	public Integer getD1bGirls12to15() {
		return d1bGirls12to15;
	}

	public void setD1bGirls12to15(Integer d1bGirls12to15) {
		this.d1bGirls12to15 = d1bGirls12to15;
	}

	public Integer getD1bGirls16to18() {
		return d1bGirls16to18;
	}

	public void setD1bGirls16to18(Integer d1bGirls16to18) {
		this.d1bGirls16to18 = d1bGirls16to18;
	}

	public Integer getD1bGirlsGreaterThan18() {
		return d1bGirlsGreaterThan18;
	}

	public void setD1bGirlsGreaterThan18(Integer d1bGirlsGreaterThan18) {
		this.d1bGirlsGreaterThan18 = d1bGirlsGreaterThan18;
	}

	public Integer getD1bGirlsTotal() {
		return d1bGirlsTotal;
	}

	public void setD1bGirlsTotal(Integer d1bGirlsTotal) {
		this.d1bGirlsTotal = d1bGirlsTotal;
	}

	public Integer getD1bGrandTotal() {
		return d1bGrandTotal;
	}

	public void setD1bGrandTotal(Integer d1bGrandTotal) {
		this.d1bGrandTotal = d1bGrandTotal;
	}

	public String getD1bNameOfCCIs() {
		return d1bNameOfCCIs;
	}

	public void setD1bNameOfCCIs(String d1bNameOfCCIs) {
		this.d1bNameOfCCIs = d1bNameOfCCIs;
	}

	public Integer getD1cBoys0to6() {
		return d1cBoys0to6;
	}

	public void setD1cBoys0to6(Integer d1cBoys0to6) {
		this.d1cBoys0to6 = d1cBoys0to6;
	}

	public Integer getD1cBoys7to11() {
		return d1cBoys7to11;
	}

	public void setD1cBoys7to11(Integer d1cBoys7to11) {
		this.d1cBoys7to11 = d1cBoys7to11;
	}

	public Integer getD1cBoys12to15() {
		return d1cBoys12to15;
	}

	public void setD1cBoys12to15(Integer d1cBoys12to15) {
		this.d1cBoys12to15 = d1cBoys12to15;
	}

	public Integer getD1cBoys16to18() {
		return d1cBoys16to18;
	}

	public void setD1cBoys16to18(Integer d1cBoys16to18) {
		this.d1cBoys16to18 = d1cBoys16to18;
	}

	public Integer getD1cBoysGreaterThan18() {
		return d1cBoysGreaterThan18;
	}

	public void setD1cBoysGreaterThan18(Integer d1cBoysGreaterThan18) {
		this.d1cBoysGreaterThan18 = d1cBoysGreaterThan18;
	}

	public Integer getD1cBoysTotal() {
		return d1cBoysTotal;
	}

	public void setD1cBoysTotal(Integer d1cBoysTotal) {
		this.d1cBoysTotal = d1cBoysTotal;
	}

	public Integer getD1cGirls0to6() {
		return d1cGirls0to6;
	}

	public void setD1cGirls0to6(Integer d1cGirls0to6) {
		this.d1cGirls0to6 = d1cGirls0to6;
	}

	public Integer getD1cGirls7to11() {
		return d1cGirls7to11;
	}

	public void setD1cGirls7to11(Integer d1cGirls7to11) {
		this.d1cGirls7to11 = d1cGirls7to11;
	}

	public Integer getD1cGirls12to15() {
		return d1cGirls12to15;
	}

	public void setD1cGirls12to15(Integer d1cGirls12to15) {
		this.d1cGirls12to15 = d1cGirls12to15;
	}

	public Integer getD1cGirls16to18() {
		return d1cGirls16to18;
	}

	public void setD1cGirls16to18(Integer d1cGirls16to18) {
		this.d1cGirls16to18 = d1cGirls16to18;
	}

	public Integer getD1cGirlsGreaterThan18() {
		return d1cGirlsGreaterThan18;
	}

	public void setD1cGirlsGreaterThan18(Integer d1cGirlsGreaterThan18) {
		this.d1cGirlsGreaterThan18 = d1cGirlsGreaterThan18;
	}

	public Integer getD1cGirlsTotal() {
		return d1cGirlsTotal;
	}

	public void setD1cGirlsTotal(Integer d1cGirlsTotal) {
		this.d1cGirlsTotal = d1cGirlsTotal;
	}

	public Integer getD1cGrandTotal() {
		return d1cGrandTotal;
	}

	public void setD1cGrandTotal(Integer d1cGrandTotal) {
		this.d1cGrandTotal = d1cGrandTotal;
	}

	public String getD1cNameOfCCIs() {
		return d1cNameOfCCIs;
	}

	public void setD1cNameOfCCIs(String d1cNameOfCCIs) {
		this.d1cNameOfCCIs = d1cNameOfCCIs;
	}

	public Integer getD1dBoys0to6() {
		return d1dBoys0to6;
	}

	public void setD1dBoys0to6(Integer d1dBoys0to6) {
		this.d1dBoys0to6 = d1dBoys0to6;
	}

	public Integer getD1dBoys7to11() {
		return d1dBoys7to11;
	}

	public void setD1dBoys7to11(Integer d1dBoys7to11) {
		this.d1dBoys7to11 = d1dBoys7to11;
	}

	public Integer getD1dBoys12to15() {
		return d1dBoys12to15;
	}

	public void setD1dBoys12to15(Integer d1dBoys12to15) {
		this.d1dBoys12to15 = d1dBoys12to15;
	}

	public Integer getD1dBoys16to18() {
		return d1dBoys16to18;
	}

	public void setD1dBoys16to18(Integer d1dBoys16to18) {
		this.d1dBoys16to18 = d1dBoys16to18;
	}

	public Integer getD1dBoysGreaterThan18() {
		return d1dBoysGreaterThan18;
	}

	public void setD1dBoysGreaterThan18(Integer d1dBoysGreaterThan18) {
		this.d1dBoysGreaterThan18 = d1dBoysGreaterThan18;
	}

	public Integer getD1dBoysTotal() {
		return d1dBoysTotal;
	}

	public void setD1dBoysTotal(Integer d1dBoysTotal) {
		this.d1dBoysTotal = d1dBoysTotal;
	}

	public Integer getD1dGirls0to6() {
		return d1dGirls0to6;
	}

	public void setD1dGirls0to6(Integer d1dGirls0to6) {
		this.d1dGirls0to6 = d1dGirls0to6;
	}

	public Integer getD1dGirls7to11() {
		return d1dGirls7to11;
	}

	public void setD1dGirls7to11(Integer d1dGirls7to11) {
		this.d1dGirls7to11 = d1dGirls7to11;
	}

	public Integer getD1dGirls12to15() {
		return d1dGirls12to15;
	}

	public void setD1dGirls12to15(Integer d1dGirls12to15) {
		this.d1dGirls12to15 = d1dGirls12to15;
	}

	public Integer getD1dGirls16to18() {
		return d1dGirls16to18;
	}

	public void setD1dGirls16to18(Integer d1dGirls16to18) {
		this.d1dGirls16to18 = d1dGirls16to18;
	}

	public Integer getD1dGirlsGreaterThan18() {
		return d1dGirlsGreaterThan18;
	}

	public void setD1dGirlsGreaterThan18(Integer d1dGirlsGreaterThan18) {
		this.d1dGirlsGreaterThan18 = d1dGirlsGreaterThan18;
	}

	public Integer getD1dGirlsTotal() {
		return d1dGirlsTotal;
	}

	public void setD1dGirlsTotal(Integer d1dGirlsTotal) {
		this.d1dGirlsTotal = d1dGirlsTotal;
	}

	public Integer getD1dGrandTotal() {
		return d1dGrandTotal;
	}

	public void setD1dGrandTotal(Integer d1dGrandTotal) {
		this.d1dGrandTotal = d1dGrandTotal;
	}

	public String getD1dNameOfCCIs() {
		return d1dNameOfCCIs;
	}

	public void setD1dNameOfCCIs(String d1dNameOfCCIs) {
		this.d1dNameOfCCIs = d1dNameOfCCIs;
	}

	public Integer getD1Boys0to6() {
		return d1Boys0to6;
	}

	public void setD1Boys0to6(Integer d1Boys0to6) {
		this.d1Boys0to6 = d1Boys0to6;
	}

	public Integer getD1Boys7to11() {
		return d1Boys7to11;
	}

	public void setD1Boys7to11(Integer d1Boys7to11) {
		this.d1Boys7to11 = d1Boys7to11;
	}

	public Integer getD1Boys12to15() {
		return d1Boys12to15;
	}

	public void setD1Boys12to15(Integer d1Boys12to15) {
		this.d1Boys12to15 = d1Boys12to15;
	}

	public Integer getD1Boys16to18() {
		return d1Boys16to18;
	}

	public void setD1Boys16to18(Integer d1Boys16to18) {
		this.d1Boys16to18 = d1Boys16to18;
	}

	public Integer getD1BoysGreaterThan18() {
		return d1BoysGreaterThan18;
	}

	public void setD1BoysGreaterThan18(Integer d1BoysGreaterThan18) {
		this.d1BoysGreaterThan18 = d1BoysGreaterThan18;
	}

	public Integer getD1BoysTotal() {
		return d1BoysTotal;
	}

	public void setD1BoysTotal(Integer d1BoysTotal) {
		this.d1BoysTotal = d1BoysTotal;
	}

	public Integer getD1Girls0to6() {
		return d1Girls0to6;
	}

	public void setD1Girls0to6(Integer d1Girls0to6) {
		this.d1Girls0to6 = d1Girls0to6;
	}

	public Integer getD1Girls7to11() {
		return d1Girls7to11;
	}

	public void setD1Girls7to11(Integer d1Girls7to11) {
		this.d1Girls7to11 = d1Girls7to11;
	}

	public Integer getD1Girls12to15() {
		return d1Girls12to15;
	}

	public void setD1Girls12to15(Integer d1Girls12to15) {
		this.d1Girls12to15 = d1Girls12to15;
	}

	public Integer getD1Girls16to18() {
		return d1Girls16to18;
	}

	public void setD1Girls16to18(Integer d1Girls16to18) {
		this.d1Girls16to18 = d1Girls16to18;
	}

	public Integer getD1GirlsGreaterThan18() {
		return d1GirlsGreaterThan18;
	}

	public void setD1GirlsGreaterThan18(Integer d1GirlsGreaterThan18) {
		this.d1GirlsGreaterThan18 = d1GirlsGreaterThan18;
	}

	public Integer getD1GirlsTotal() {
		return d1GirlsTotal;
	}

	public void setD1GirlsTotal(Integer d1GirlsTotal) {
		this.d1GirlsTotal = d1GirlsTotal;
	}

	public Integer getD1GrandTotal() {
		return d1GrandTotal;
	}

	public void setD1GrandTotal(Integer d1GrandTotal) {
		this.d1GrandTotal = d1GrandTotal;
	}

	public Integer getD2Boys0to6() {
		return d2Boys0to6;
	}

	public void setD2Boys0to6(Integer d2Boys0to6) {
		this.d2Boys0to6 = d2Boys0to6;
	}

	public Integer getD2Boys7to11() {
		return d2Boys7to11;
	}

	public void setD2Boys7to11(Integer d2Boys7to11) {
		this.d2Boys7to11 = d2Boys7to11;
	}

	public Integer getD2Boys12to15() {
		return d2Boys12to15;
	}

	public void setD2Boys12to15(Integer d2Boys12to15) {
		this.d2Boys12to15 = d2Boys12to15;
	}

	public Integer getD2Boys16to18() {
		return d2Boys16to18;
	}

	public void setD2Boys16to18(Integer d2Boys16to18) {
		this.d2Boys16to18 = d2Boys16to18;
	}

	public Integer getD2BoysGreaterThan18() {
		return d2BoysGreaterThan18;
	}

	public void setD2BoysGreaterThan18(Integer d2BoysGreaterThan18) {
		this.d2BoysGreaterThan18 = d2BoysGreaterThan18;
	}

	public Integer getD2BoysTotal() {
		return d2BoysTotal;
	}

	public void setD2BoysTotal(Integer d2BoysTotal) {
		this.d2BoysTotal = d2BoysTotal;
	}

	public Integer getD2Girls0to6() {
		return d2Girls0to6;
	}

	public void setD2Girls0to6(Integer d2Girls0to6) {
		this.d2Girls0to6 = d2Girls0to6;
	}

	public Integer getD2Girls7to11() {
		return d2Girls7to11;
	}

	public void setD2Girls7to11(Integer d2Girls7to11) {
		this.d2Girls7to11 = d2Girls7to11;
	}

	public Integer getD2Girls12to15() {
		return d2Girls12to15;
	}

	public void setD2Girls12to15(Integer d2Girls12to15) {
		this.d2Girls12to15 = d2Girls12to15;
	}

	public Integer getD2Girls16to18() {
		return d2Girls16to18;
	}

	public void setD2Girls16to18(Integer d2Girls16to18) {
		this.d2Girls16to18 = d2Girls16to18;
	}

	public Integer getD2GirlsGreaterThan18() {
		return d2GirlsGreaterThan18;
	}

	public void setD2GirlsGreaterThan18(Integer d2GirlsGreaterThan18) {
		this.d2GirlsGreaterThan18 = d2GirlsGreaterThan18;
	}

	public Integer getD2GirlsTotal() {
		return d2GirlsTotal;
	}

	public void setD2GirlsTotal(Integer d2GirlsTotal) {
		this.d2GirlsTotal = d2GirlsTotal;
	}

	public Integer getD2GrandTotal() {
		return d2GrandTotal;
	}

	public void setD2GrandTotal(Integer d2GrandTotal) {
		this.d2GrandTotal = d2GrandTotal;
	}

	public String getD2NameOfCCIs() {
		return d2NameOfCCIs;
	}

	public void setD2NameOfCCIs(String d2NameOfCCIs) {
		this.d2NameOfCCIs = d2NameOfCCIs;
	}

	public Integer getD3Boys0to6() {
		return d3Boys0to6;
	}

	public void setD3Boys0to6(Integer d3Boys0to6) {
		this.d3Boys0to6 = d3Boys0to6;
	}

	public Integer getD3Boys7to11() {
		return d3Boys7to11;
	}

	public void setD3Boys7to11(Integer d3Boys7to11) {
		this.d3Boys7to11 = d3Boys7to11;
	}

	public Integer getD3Boys12to15() {
		return d3Boys12to15;
	}

	public void setD3Boys12to15(Integer d3Boys12to15) {
		this.d3Boys12to15 = d3Boys12to15;
	}

	public Integer getD3Boys16to18() {
		return d3Boys16to18;
	}

	public void setD3Boys16to18(Integer d3Boys16to18) {
		this.d3Boys16to18 = d3Boys16to18;
	}

	public Integer getD3BoysGreaterThan18() {
		return d3BoysGreaterThan18;
	}

	public void setD3BoysGreaterThan18(Integer d3BoysGreaterThan18) {
		this.d3BoysGreaterThan18 = d3BoysGreaterThan18;
	}

	public Integer getD3BoysTotal() {
		return d3BoysTotal;
	}

	public void setD3BoysTotal(Integer d3BoysTotal) {
		this.d3BoysTotal = d3BoysTotal;
	}

	public Integer getD3Girls0to6() {
		return d3Girls0to6;
	}

	public void setD3Girls0to6(Integer d3Girls0to6) {
		this.d3Girls0to6 = d3Girls0to6;
	}

	public Integer getD3Girls7to11() {
		return d3Girls7to11;
	}

	public void setD3Girls7to11(Integer d3Girls7to11) {
		this.d3Girls7to11 = d3Girls7to11;
	}

	public Integer getD3Girls12to15() {
		return d3Girls12to15;
	}

	public void setD3Girls12to15(Integer d3Girls12to15) {
		this.d3Girls12to15 = d3Girls12to15;
	}

	public Integer getD3Girls16to18() {
		return d3Girls16to18;
	}

	public void setD3Girls16to18(Integer d3Girls16to18) {
		this.d3Girls16to18 = d3Girls16to18;
	}

	public Integer getD3GirlsGreaterThan18() {
		return d3GirlsGreaterThan18;
	}

	public void setD3GirlsGreaterThan18(Integer d3GirlsGreaterThan18) {
		this.d3GirlsGreaterThan18 = d3GirlsGreaterThan18;
	}

	public Integer getD3GirlsTotal() {
		return d3GirlsTotal;
	}

	public void setD3GirlsTotal(Integer d3GirlsTotal) {
		this.d3GirlsTotal = d3GirlsTotal;
	}

	public Integer getD3GrandTotal() {
		return d3GrandTotal;
	}

	public void setD3GrandTotal(Integer d3GrandTotal) {
		this.d3GrandTotal = d3GrandTotal;
	}

	public String getD3NameOfCCIs() {
		return d3NameOfCCIs;
	}

	public void setD3NameOfCCIs(String d3NameOfCCIs) {
		this.d3NameOfCCIs = d3NameOfCCIs;
	}

	public Integer getD4Boys0to6() {
		return d4Boys0to6;
	}

	public void setD4Boys0to6(Integer d4Boys0to6) {
		this.d4Boys0to6 = d4Boys0to6;
	}

	public Integer getD4Boys7to11() {
		return d4Boys7to11;
	}

	public void setD4Boys7to11(Integer d4Boys7to11) {
		this.d4Boys7to11 = d4Boys7to11;
	}

	public Integer getD4Boys12to15() {
		return d4Boys12to15;
	}

	public void setD4Boys12to15(Integer d4Boys12to15) {
		this.d4Boys12to15 = d4Boys12to15;
	}

	public Integer getD4Boys16to18() {
		return d4Boys16to18;
	}

	public void setD4Boys16to18(Integer d4Boys16to18) {
		this.d4Boys16to18 = d4Boys16to18;
	}

	public Integer getD4BoysGreaterThan18() {
		return d4BoysGreaterThan18;
	}

	public void setD4BoysGreaterThan18(Integer d4BoysGreaterThan18) {
		this.d4BoysGreaterThan18 = d4BoysGreaterThan18;
	}

	public Integer getD4BoysTotal() {
		return d4BoysTotal;
	}

	public void setD4BoysTotal(Integer d4BoysTotal) {
		this.d4BoysTotal = d4BoysTotal;
	}

	public Integer getD4Girls0to6() {
		return d4Girls0to6;
	}

	public void setD4Girls0to6(Integer d4Girls0to6) {
		this.d4Girls0to6 = d4Girls0to6;
	}

	public Integer getD4Girls7to11() {
		return d4Girls7to11;
	}

	public void setD4Girls7to11(Integer d4Girls7to11) {
		this.d4Girls7to11 = d4Girls7to11;
	}

	public Integer getD4Girls12to15() {
		return d4Girls12to15;
	}

	public void setD4Girls12to15(Integer d4Girls12to15) {
		this.d4Girls12to15 = d4Girls12to15;
	}

	public Integer getD4Girls16to18() {
		return d4Girls16to18;
	}

	public void setD4Girls16to18(Integer d4Girls16to18) {
		this.d4Girls16to18 = d4Girls16to18;
	}

	public Integer getD4GirlsGreaterThan18() {
		return d4GirlsGreaterThan18;
	}

	public void setD4GirlsGreaterThan18(Integer d4GirlsGreaterThan18) {
		this.d4GirlsGreaterThan18 = d4GirlsGreaterThan18;
	}

	public Integer getD4GirlsTotal() {
		return d4GirlsTotal;
	}

	public void setD4GirlsTotal(Integer d4GirlsTotal) {
		this.d4GirlsTotal = d4GirlsTotal;
	}

	public Integer getD4GrandTotal() {
		return d4GrandTotal;
	}

	public void setD4GrandTotal(Integer d4GrandTotal) {
		this.d4GrandTotal = d4GrandTotal;
	}

	public String getD4NameOfCCIs() {
		return d4NameOfCCIs;
	}

	public void setD4NameOfCCIs(String d4NameOfCCIs) {
		this.d4NameOfCCIs = d4NameOfCCIs;
	}

	public Integer getD5Boys0to6() {
		return d5Boys0to6;
	}

	public void setD5Boys0to6(Integer d5Boys0to6) {
		this.d5Boys0to6 = d5Boys0to6;
	}

	public Integer getD5Boys7to11() {
		return d5Boys7to11;
	}

	public void setD5Boys7to11(Integer d5Boys7to11) {
		this.d5Boys7to11 = d5Boys7to11;
	}

	public Integer getD5Boys12to15() {
		return d5Boys12to15;
	}

	public void setD5Boys12to15(Integer d5Boys12to15) {
		this.d5Boys12to15 = d5Boys12to15;
	}

	public Integer getD5Boys16to18() {
		return d5Boys16to18;
	}

	public void setD5Boys16to18(Integer d5Boys16to18) {
		this.d5Boys16to18 = d5Boys16to18;
	}

	public Integer getD5BoysGreaterThan18() {
		return d5BoysGreaterThan18;
	}

	public void setD5BoysGreaterThan18(Integer d5BoysGreaterThan18) {
		this.d5BoysGreaterThan18 = d5BoysGreaterThan18;
	}

	public Integer getD5BoysTotal() {
		return d5BoysTotal;
	}

	public void setD5BoysTotal(Integer d5BoysTotal) {
		this.d5BoysTotal = d5BoysTotal;
	}

	public Integer getD5Girls0to6() {
		return d5Girls0to6;
	}

	public void setD5Girls0to6(Integer d5Girls0to6) {
		this.d5Girls0to6 = d5Girls0to6;
	}

	public Integer getD5Girls7to11() {
		return d5Girls7to11;
	}

	public void setD5Girls7to11(Integer d5Girls7to11) {
		this.d5Girls7to11 = d5Girls7to11;
	}

	public Integer getD5Girls12to15() {
		return d5Girls12to15;
	}

	public void setD5Girls12to15(Integer d5Girls12to15) {
		this.d5Girls12to15 = d5Girls12to15;
	}

	public Integer getD5Girls16to18() {
		return d5Girls16to18;
	}

	public void setD5Girls16to18(Integer d5Girls16to18) {
		this.d5Girls16to18 = d5Girls16to18;
	}

	public Integer getD5GirlsGreaterThan18() {
		return d5GirlsGreaterThan18;
	}

	public void setD5GirlsGreaterThan18(Integer d5GirlsGreaterThan18) {
		this.d5GirlsGreaterThan18 = d5GirlsGreaterThan18;
	}

	public Integer getD5GirlsTotal() {
		return d5GirlsTotal;
	}

	public void setD5GirlsTotal(Integer d5GirlsTotal) {
		this.d5GirlsTotal = d5GirlsTotal;
	}

	public Integer getD5GrandTotal() {
		return d5GrandTotal;
	}

	public void setD5GrandTotal(Integer d5GrandTotal) {
		this.d5GrandTotal = d5GrandTotal;
	}

	public CwcDetails getCwcDetails() {
		return cwcDetails;
	}

	public void setCwcDetails(CwcDetails cwcDetails) {
		this.cwcDetails = cwcDetails;
	}

	public Integer getD1eBoys0to6() {
		return d1eBoys0to6;
	}

	public Integer getD1eBoys7to11() {
		return d1eBoys7to11;
	}

	public Integer getD1eBoys12to15() {
		return d1eBoys12to15;
	}

	public Integer getD1eBoys16to18() {
		return d1eBoys16to18;
	}

	public Integer getD1eBoysGreaterThan18() {
		return d1eBoysGreaterThan18;
	}

	public Integer getD1eBoysTotal() {
		return d1eBoysTotal;
	}

	public Integer getD1eGirls0to6() {
		return d1eGirls0to6;
	}

	public Integer getD1eGirls7to11() {
		return d1eGirls7to11;
	}

	public Integer getD1eGirls12to15() {
		return d1eGirls12to15;
	}

	public Integer getD1eGirls16to18() {
		return d1eGirls16to18;
	}

	public Integer getD1eGirlsGreaterThan18() {
		return d1eGirlsGreaterThan18;
	}

	public Integer getD1eGirlsTotal() {
		return d1eGirlsTotal;
	}

	public Integer getD1eGrandTotal() {
		return d1eGrandTotal;
	}

	public String getD1eNameOfCCIs() {
		return d1eNameOfCCIs;
	}

	public void setD1eBoys0to6(Integer d1eBoys0to6) {
		this.d1eBoys0to6 = d1eBoys0to6;
	}

	public void setD1eBoys7to11(Integer d1eBoys7to11) {
		this.d1eBoys7to11 = d1eBoys7to11;
	}

	public void setD1eBoys12to15(Integer d1eBoys12to15) {
		this.d1eBoys12to15 = d1eBoys12to15;
	}

	public void setD1eBoys16to18(Integer d1eBoys16to18) {
		this.d1eBoys16to18 = d1eBoys16to18;
	}

	public void setD1eBoysGreaterThan18(Integer d1eBoysGreaterThan18) {
		this.d1eBoysGreaterThan18 = d1eBoysGreaterThan18;
	}

	public void setD1eBoysTotal(Integer d1eBoysTotal) {
		this.d1eBoysTotal = d1eBoysTotal;
	}

	public void setD1eGirls0to6(Integer d1eGirls0to6) {
		this.d1eGirls0to6 = d1eGirls0to6;
	}

	public void setD1eGirls7to11(Integer d1eGirls7to11) {
		this.d1eGirls7to11 = d1eGirls7to11;
	}

	public void setD1eGirls12to15(Integer d1eGirls12to15) {
		this.d1eGirls12to15 = d1eGirls12to15;
	}

	public void setD1eGirls16to18(Integer d1eGirls16to18) {
		this.d1eGirls16to18 = d1eGirls16to18;
	}

	public void setD1eGirlsGreaterThan18(Integer d1eGirlsGreaterThan18) {
		this.d1eGirlsGreaterThan18 = d1eGirlsGreaterThan18;
	}

	public void setD1eGirlsTotal(Integer d1eGirlsTotal) {
		this.d1eGirlsTotal = d1eGirlsTotal;
	}

	public void setD1eGrandTotal(Integer d1eGrandTotal) {
		this.d1eGrandTotal = d1eGrandTotal;
	}

	public void setD1eNameOfCCIs(String d1eNameOfCCIs) {
		this.d1eNameOfCCIs = d1eNameOfCCIs;
	}
	
}
