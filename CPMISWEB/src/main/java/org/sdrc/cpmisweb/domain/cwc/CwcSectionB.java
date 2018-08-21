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
@Table(name = "cwc_Section_b")
public class CwcSectionB {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer cwcSectionBId;
	
	@Column(name="b1_a_Boys_0to6")
	private Integer b1aBoys0to6;

	@Column(name="b1_a_Boys_7to11")
	private Integer b1aBoys7to11;

	@Column(name="b1_a_Boys12to15")
	private Integer b1aBoys12to15;

	@Column(name="b1_a_Boys_16to18")
	private Integer b1aBoys16to18;

	@Column(name="b1_a_Boys_GreaterThan_18")
	private Integer b1aBoysGreaterThan18;

	@Column(name="b1_a_Boys_Total")
	private Integer b1aBoysTotal;

	@Column(name="b1_a_Girls_0to6")
	private Integer b1aGirls0to6;

	@Column(name="b1_a_Girls_7to11")
	private Integer b1aGirls7to11;

	@Column(name="b1_a_Girls_12to15")
	private Integer b1aGirls12to15;

	@Column(name="b1_a_Girls_16to18")
	private Integer b1aGirls16to18;

	@Column(name="b1_a_Girls_GreaterThan18")
	private Integer b1aGirlsGreaterThan18;

	@Column(name="b1_a_Girls_Total")
	private Integer b1aGirlsTotal;

	@Column(name="b1_a_Grand_Total")
	private Integer b1aGrandTotal;
	
	@Column(name="b1_b_Boys_0to6")
	private Integer b1bBoys0to6;

	@Column(name="b1_b_Boys_7to11")
	private Integer b1bBoys7to11;

	@Column(name="b1_b_Boys12to15")
	private Integer b1bBoys12to15;

	@Column(name="b1_b_Boys_16to18")
	private Integer b1bBoys16to18;

	@Column(name="b1_b_Boys_GreaterThan_18")
	private Integer b1bBoysGreaterThan18;

	@Column(name="b1_b_Boys_Total")
	private Integer b1bBoysTotal;

	@Column(name="b1_b_Girls_0to6")
	private Integer b1bGirls0to6;

	@Column(name="b1_b_Girls_7to11")
	private Integer b1bGirls7to11;

	@Column(name="b1_b_Girls_12to15")
	private Integer b1bGirls12to15;

	@Column(name="b1_b_Girls_16to18")
	private Integer b1bGirls16to18;

	@Column(name="b1_b_Girls_GreaterThan18")
	private Integer b1bGirlsGreaterThan18;

	@Column(name="b1_b_Girls_Total")
	private Integer b1bGirlsTotal;

	@Column(name="b1_b_Grand_Total")
	private Integer b1bGrandTotal;

	@Column(name="b1_c_Boys_0to6")
	private Integer b1cBoys0to6;

	@Column(name="b1_c_Boys_7to11")
	private Integer b1cBoys7to11;

	@Column(name="b1_c_Boys12to15")
	private Integer b1cBoys12to15;

	@Column(name="b1_c_Boys_16to18")
	private Integer b1cBoys16to18;

	@Column(name="b1_c_Boys_GreaterThan_18")
	private Integer b1cBoysGreaterThan18;

	@Column(name="b1_c_Boys_Total")
	private Integer b1cBoysTotal;

	@Column(name="b1_c_Girls_0to6")
	private Integer b1cGirls0to6;

	@Column(name="b1_c_Girls_7to11")
	private Integer b1cGirls7to11;

	@Column(name="b1_c_Girls_12to15")
	private Integer b1cGirls12to15;

	@Column(name="b1_c_Girls_16to18")
	private Integer b1cGirls16to18;

	@Column(name="b1_c_Girls_GreaterThan18")
	private Integer b1cGirlsGreaterThan18;

	@Column(name="b1_c_Girls_Total")
	private Integer b1cGirlsTotal;

	@Column(name="b1_c_Grand_Total")
	private Integer b1cGrandTotal;

	@Column(name="b1_d_Boys_0to6")
	private Integer b1dBoys0to6;

	@Column(name="b1_d_Boys_7to11")
	private Integer b1dBoys7to11;

	@Column(name="b1_d_Boys12to15")
	private Integer b1dBoys12to15;

	@Column(name="b1_d_Boys_16to18")
	private Integer b1dBoys16to18;

	@Column(name="b1_d_Boys_GreaterThan_18")
	private Integer b1dBoysGreaterThan18;

	@Column(name="b1_d_Boys_Total")
	private Integer b1dBoysTotal;

	@Column(name="b1_d_Girls_0to6")
	private Integer b1dGirls0to6;

	@Column(name="b1_d_Girls_7to11")
	private Integer b1dGirls7to11;

	@Column(name="b1_d_Girls_12to15")
	private Integer b1dGirls12to15;

	@Column(name="b1_d_Girls_16to18")
	private Integer b1dGirls16to18;

	@Column(name="b1_d_Girls_GreaterThan18")
	private Integer b1dGirlsGreaterThan18;

	@Column(name="b1_d_Girls_Total")
	private Integer b1dGirlsTotal;

	@Column(name="b1_d_Grand_Total")
	private Integer b1dGrandTotal;

	@Column(name="b1_Boys_0to6")
	private Integer b1Boys0to6;

	@Column(name="b1_Boys_7to11")
	private Integer b1Boys7to11;

	@Column(name="b1_Boys12to15")
	private Integer b1Boys12to15;

	@Column(name="b1_Boys_16to18")
	private Integer b1Boys16to18;

	@Column(name="b1_Boys_GreaterThan_18")
	private Integer b1BoysGreaterThan18;

	@Column(name="b1_Boys_Total")
	private Integer b1BoysTotal;

	@Column(name="b1_Girls_0to6")
	private Integer b1Girls0to6;

	@Column(name="b1_Girls_7to11")
	private Integer b1Girls7to11;

	@Column(name="b1_Girls_12to15")
	private Integer b1Girls12to15;

	@Column(name="b1_Girls_16to18")
	private Integer b1Girls16to18;

	@Column(name="b1_Girls_GreaterThan18")
	private Integer b1GirlsGreaterThan18;

	@Column(name="b1_Girls_Total")
	private Integer b1GirlsTotal;

	@Column(name="b1_Grand_Total")
	private Integer b1GrandTotal;

	@Column(name="b2_Boys_0to6")
	private Integer b2Boys0to6;

	@Column(name="b2_Boys_7to11")
	private Integer b2Boys7to11;

	@Column(name="b2_Boys12to15")
	private Integer b2Boys12to15;

	@Column(name="b2_Boys_16to18")
	private Integer b2Boys16to18;

	@Column(name="b2_Boys_GreaterThan_18")
	private Integer b2BoysGreaterThan18;

	@Column(name="b2_Boys_Total")
	private Integer b2BoysTotal;

	@Column(name="b2_Girls_0to6")
	private Integer b2Girls0to6;

	@Column(name="b2_Girls_7to11")
	private Integer b2Girls7to11;

	@Column(name="b2_Girls_12to15")
	private Integer b2Girls12to15;

	@Column(name="b2_Girls_16to18")
	private Integer b2Girls16to18;

	@Column(name="b2_Girls_GreaterThan18")
	private Integer b2GirlsGreaterThan18;

	@Column(name="b2_Girls_Total")
	private Integer b2GirlsTotal;

	@Column(name="b2_Grand_Total")
	private Integer b2GrandTotal;

	@Column(name="b3_Boys_0to6")
	private Integer b3Boys0to6;

	@Column(name="b3_Boys_7to11")
	private Integer b3Boys7to11;

	@Column(name="b3_Boys12to15")
	private Integer b3Boys12to15;

	@Column(name="b3_Boys_16to18")
	private Integer b3Boys16to18;

	@Column(name="b3_Boys_GreaterThan_18")
	private Integer b3BoysGreaterThan18;

	@Column(name="b3_Boys_Total")
	private Integer b3BoysTotal;

	@Column(name="b3_Girls_0to6")
	private Integer b3Girls0to6;

	@Column(name="b3_Girls_7to11")
	private Integer b3Girls7to11;

	@Column(name="b3_Girls_12to15")
	private Integer b3Girls12to15;

	@Column(name="b3_Girls_16to18")
	private Integer b3Girls16to18;

	@Column(name="b3_Girls_GreaterThan18")
	private Integer b3GirlsGreaterThan18;

	@Column(name="b3_Girls_Total")
	private Integer b3GirlsTotal;

	@Column(name="b3_Grand_Total")
	private Integer b3GrandTotal;
	
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name="parent_id")
	private CwcDetails cwcDetails;

	public Integer getCwcSectionBId() {
		return cwcSectionBId;
	}

	public void setCwcSectionBId(Integer cwcSectionBId) {
		this.cwcSectionBId = cwcSectionBId;
	}

	public Integer getB1aBoys0to6() {
		return b1aBoys0to6;
	}

	public void setB1aBoys0to6(Integer b1aBoys0to6) {
		this.b1aBoys0to6 = b1aBoys0to6;
	}

	public Integer getB1aBoys7to11() {
		return b1aBoys7to11;
	}

	public void setB1aBoys7to11(Integer b1aBoys7to11) {
		this.b1aBoys7to11 = b1aBoys7to11;
	}

	public Integer getB1aBoys12to15() {
		return b1aBoys12to15;
	}

	public void setB1aBoys12to15(Integer b1aBoys12to15) {
		this.b1aBoys12to15 = b1aBoys12to15;
	}

	public Integer getB1aBoys16to18() {
		return b1aBoys16to18;
	}

	public void setB1aBoys16to18(Integer b1aBoys16to18) {
		this.b1aBoys16to18 = b1aBoys16to18;
	}

	public Integer getB1aBoysGreaterThan18() {
		return b1aBoysGreaterThan18;
	}

	public void setB1aBoysGreaterThan18(Integer b1aBoysGreaterThan18) {
		this.b1aBoysGreaterThan18 = b1aBoysGreaterThan18;
	}

	public Integer getB1aBoysTotal() {
		return b1aBoysTotal;
	}

	public void setB1aBoysTotal(Integer b1aBoysTotal) {
		this.b1aBoysTotal = b1aBoysTotal;
	}

	public Integer getB1aGirls0to6() {
		return b1aGirls0to6;
	}

	public void setB1aGirls0to6(Integer b1aGirls0to6) {
		this.b1aGirls0to6 = b1aGirls0to6;
	}

	public Integer getB1aGirls7to11() {
		return b1aGirls7to11;
	}

	public void setB1aGirls7to11(Integer b1aGirls7to11) {
		this.b1aGirls7to11 = b1aGirls7to11;
	}

	public Integer getB1aGirls12to15() {
		return b1aGirls12to15;
	}

	public void setB1aGirls12to15(Integer b1aGirls12to15) {
		this.b1aGirls12to15 = b1aGirls12to15;
	}

	public Integer getB1aGirls16to18() {
		return b1aGirls16to18;
	}

	public void setB1aGirls16to18(Integer b1aGirls16to18) {
		this.b1aGirls16to18 = b1aGirls16to18;
	}

	public Integer getB1aGirlsGreaterThan18() {
		return b1aGirlsGreaterThan18;
	}

	public void setB1aGirlsGreaterThan18(Integer b1aGirlsGreaterThan18) {
		this.b1aGirlsGreaterThan18 = b1aGirlsGreaterThan18;
	}

	public Integer getB1aGirlsTotal() {
		return b1aGirlsTotal;
	}

	public void setB1aGirlsTotal(Integer b1aGirlsTotal) {
		this.b1aGirlsTotal = b1aGirlsTotal;
	}

	public Integer getB1aGrandTotal() {
		return b1aGrandTotal;
	}

	public void setB1aGrandTotal(Integer b1aGrandTotal) {
		this.b1aGrandTotal = b1aGrandTotal;
	}

	public Integer getB1bBoys0to6() {
		return b1bBoys0to6;
	}

	public void setB1bBoys0to6(Integer b1bBoys0to6) {
		this.b1bBoys0to6 = b1bBoys0to6;
	}

	public Integer getB1bBoys7to11() {
		return b1bBoys7to11;
	}

	public void setB1bBoys7to11(Integer b1bBoys7to11) {
		this.b1bBoys7to11 = b1bBoys7to11;
	}

	public Integer getB1bBoys12to15() {
		return b1bBoys12to15;
	}

	public void setB1bBoys12to15(Integer b1bBoys12to15) {
		this.b1bBoys12to15 = b1bBoys12to15;
	}

	public Integer getB1bBoys16to18() {
		return b1bBoys16to18;
	}

	public void setB1bBoys16to18(Integer b1bBoys16to18) {
		this.b1bBoys16to18 = b1bBoys16to18;
	}

	public Integer getB1bBoysGreaterThan18() {
		return b1bBoysGreaterThan18;
	}

	public void setB1bBoysGreaterThan18(Integer b1bBoysGreaterThan18) {
		this.b1bBoysGreaterThan18 = b1bBoysGreaterThan18;
	}

	public Integer getB1bBoysTotal() {
		return b1bBoysTotal;
	}

	public void setB1bBoysTotal(Integer b1bBoysTotal) {
		this.b1bBoysTotal = b1bBoysTotal;
	}

	public Integer getB1bGirls0to6() {
		return b1bGirls0to6;
	}

	public void setB1bGirls0to6(Integer b1bGirls0to6) {
		this.b1bGirls0to6 = b1bGirls0to6;
	}

	public Integer getB1bGirls7to11() {
		return b1bGirls7to11;
	}

	public void setB1bGirls7to11(Integer b1bGirls7to11) {
		this.b1bGirls7to11 = b1bGirls7to11;
	}

	public Integer getB1bGirls12to15() {
		return b1bGirls12to15;
	}

	public void setB1bGirls12to15(Integer b1bGirls12to15) {
		this.b1bGirls12to15 = b1bGirls12to15;
	}

	public Integer getB1bGirls16to18() {
		return b1bGirls16to18;
	}

	public void setB1bGirls16to18(Integer b1bGirls16to18) {
		this.b1bGirls16to18 = b1bGirls16to18;
	}

	public Integer getB1bGirlsGreaterThan18() {
		return b1bGirlsGreaterThan18;
	}

	public void setB1bGirlsGreaterThan18(Integer b1bGirlsGreaterThan18) {
		this.b1bGirlsGreaterThan18 = b1bGirlsGreaterThan18;
	}

	public Integer getB1bGirlsTotal() {
		return b1bGirlsTotal;
	}

	public void setB1bGirlsTotal(Integer b1bGirlsTotal) {
		this.b1bGirlsTotal = b1bGirlsTotal;
	}

	public Integer getB1bGrandTotal() {
		return b1bGrandTotal;
	}

	public void setB1bGrandTotal(Integer b1bGrandTotal) {
		this.b1bGrandTotal = b1bGrandTotal;
	}

	public Integer getB1cBoys0to6() {
		return b1cBoys0to6;
	}

	public void setB1cBoys0to6(Integer b1cBoys0to6) {
		this.b1cBoys0to6 = b1cBoys0to6;
	}

	public Integer getB1cBoys7to11() {
		return b1cBoys7to11;
	}

	public void setB1cBoys7to11(Integer b1cBoys7to11) {
		this.b1cBoys7to11 = b1cBoys7to11;
	}

	public Integer getB1cBoys12to15() {
		return b1cBoys12to15;
	}

	public void setB1cBoys12to15(Integer b1cBoys12to15) {
		this.b1cBoys12to15 = b1cBoys12to15;
	}

	public Integer getB1cBoys16to18() {
		return b1cBoys16to18;
	}

	public void setB1cBoys16to18(Integer b1cBoys16to18) {
		this.b1cBoys16to18 = b1cBoys16to18;
	}

	public Integer getB1cBoysGreaterThan18() {
		return b1cBoysGreaterThan18;
	}

	public void setB1cBoysGreaterThan18(Integer b1cBoysGreaterThan18) {
		this.b1cBoysGreaterThan18 = b1cBoysGreaterThan18;
	}

	public Integer getB1cBoysTotal() {
		return b1cBoysTotal;
	}

	public void setB1cBoysTotal(Integer b1cBoysTotal) {
		this.b1cBoysTotal = b1cBoysTotal;
	}

	public Integer getB1cGirls0to6() {
		return b1cGirls0to6;
	}

	public void setB1cGirls0to6(Integer b1cGirls0to6) {
		this.b1cGirls0to6 = b1cGirls0to6;
	}

	public Integer getB1cGirls7to11() {
		return b1cGirls7to11;
	}

	public void setB1cGirls7to11(Integer b1cGirls7to11) {
		this.b1cGirls7to11 = b1cGirls7to11;
	}

	public Integer getB1cGirls12to15() {
		return b1cGirls12to15;
	}

	public void setB1cGirls12to15(Integer b1cGirls12to15) {
		this.b1cGirls12to15 = b1cGirls12to15;
	}

	public Integer getB1cGirls16to18() {
		return b1cGirls16to18;
	}

	public void setB1cGirls16to18(Integer b1cGirls16to18) {
		this.b1cGirls16to18 = b1cGirls16to18;
	}

	public Integer getB1cGirlsGreaterThan18() {
		return b1cGirlsGreaterThan18;
	}

	public void setB1cGirlsGreaterThan18(Integer b1cGirlsGreaterThan18) {
		this.b1cGirlsGreaterThan18 = b1cGirlsGreaterThan18;
	}

	public Integer getB1cGirlsTotal() {
		return b1cGirlsTotal;
	}

	public void setB1cGirlsTotal(Integer b1cGirlsTotal) {
		this.b1cGirlsTotal = b1cGirlsTotal;
	}

	public Integer getB1cGrandTotal() {
		return b1cGrandTotal;
	}

	public void setB1cGrandTotal(Integer b1cGrandTotal) {
		this.b1cGrandTotal = b1cGrandTotal;
	}

	public Integer getB1dBoys0to6() {
		return b1dBoys0to6;
	}

	public void setB1dBoys0to6(Integer b1dBoys0to6) {
		this.b1dBoys0to6 = b1dBoys0to6;
	}

	public Integer getB1dBoys7to11() {
		return b1dBoys7to11;
	}

	public void setB1dBoys7to11(Integer b1dBoys7to11) {
		this.b1dBoys7to11 = b1dBoys7to11;
	}

	public Integer getB1dBoys12to15() {
		return b1dBoys12to15;
	}

	public void setB1dBoys12to15(Integer b1dBoys12to15) {
		this.b1dBoys12to15 = b1dBoys12to15;
	}

	public Integer getB1dBoys16to18() {
		return b1dBoys16to18;
	}

	public void setB1dBoys16to18(Integer b1dBoys16to18) {
		this.b1dBoys16to18 = b1dBoys16to18;
	}

	public Integer getB1dBoysGreaterThan18() {
		return b1dBoysGreaterThan18;
	}

	public void setB1dBoysGreaterThan18(Integer b1dBoysGreaterThan18) {
		this.b1dBoysGreaterThan18 = b1dBoysGreaterThan18;
	}

	public Integer getB1dBoysTotal() {
		return b1dBoysTotal;
	}

	public void setB1dBoysTotal(Integer b1dBoysTotal) {
		this.b1dBoysTotal = b1dBoysTotal;
	}

	public Integer getB1dGirls0to6() {
		return b1dGirls0to6;
	}

	public void setB1dGirls0to6(Integer b1dGirls0to6) {
		this.b1dGirls0to6 = b1dGirls0to6;
	}

	public Integer getB1dGirls7to11() {
		return b1dGirls7to11;
	}

	public void setB1dGirls7to11(Integer b1dGirls7to11) {
		this.b1dGirls7to11 = b1dGirls7to11;
	}

	public Integer getB1dGirls12to15() {
		return b1dGirls12to15;
	}

	public void setB1dGirls12to15(Integer b1dGirls12to15) {
		this.b1dGirls12to15 = b1dGirls12to15;
	}

	public Integer getB1dGirls16to18() {
		return b1dGirls16to18;
	}

	public void setB1dGirls16to18(Integer b1dGirls16to18) {
		this.b1dGirls16to18 = b1dGirls16to18;
	}

	public Integer getB1dGirlsGreaterThan18() {
		return b1dGirlsGreaterThan18;
	}

	public void setB1dGirlsGreaterThan18(Integer b1dGirlsGreaterThan18) {
		this.b1dGirlsGreaterThan18 = b1dGirlsGreaterThan18;
	}

	public Integer getB1dGirlsTotal() {
		return b1dGirlsTotal;
	}

	public void setB1dGirlsTotal(Integer b1dGirlsTotal) {
		this.b1dGirlsTotal = b1dGirlsTotal;
	}

	public Integer getB1dGrandTotal() {
		return b1dGrandTotal;
	}

	public void setB1dGrandTotal(Integer b1dGrandTotal) {
		this.b1dGrandTotal = b1dGrandTotal;
	}

	public Integer getB1Boys0to6() {
		return b1Boys0to6;
	}

	public void setB1Boys0to6(Integer b1Boys0to6) {
		this.b1Boys0to6 = b1Boys0to6;
	}

	public Integer getB1Boys7to11() {
		return b1Boys7to11;
	}

	public void setB1Boys7to11(Integer b1Boys7to11) {
		this.b1Boys7to11 = b1Boys7to11;
	}

	public Integer getB1Boys12to15() {
		return b1Boys12to15;
	}

	public void setB1Boys12to15(Integer b1Boys12to15) {
		this.b1Boys12to15 = b1Boys12to15;
	}

	public Integer getB1Boys16to18() {
		return b1Boys16to18;
	}

	public void setB1Boys16to18(Integer b1Boys16to18) {
		this.b1Boys16to18 = b1Boys16to18;
	}

	public Integer getB1BoysGreaterThan18() {
		return b1BoysGreaterThan18;
	}

	public void setB1BoysGreaterThan18(Integer b1BoysGreaterThan18) {
		this.b1BoysGreaterThan18 = b1BoysGreaterThan18;
	}

	public Integer getB1BoysTotal() {
		return b1BoysTotal;
	}

	public void setB1BoysTotal(Integer b1BoysTotal) {
		this.b1BoysTotal = b1BoysTotal;
	}

	public Integer getB1Girls0to6() {
		return b1Girls0to6;
	}

	public void setB1Girls0to6(Integer b1Girls0to6) {
		this.b1Girls0to6 = b1Girls0to6;
	}

	public Integer getB1Girls7to11() {
		return b1Girls7to11;
	}

	public void setB1Girls7to11(Integer b1Girls7to11) {
		this.b1Girls7to11 = b1Girls7to11;
	}

	public Integer getB1Girls12to15() {
		return b1Girls12to15;
	}

	public void setB1Girls12to15(Integer b1Girls12to15) {
		this.b1Girls12to15 = b1Girls12to15;
	}

	public Integer getB1Girls16to18() {
		return b1Girls16to18;
	}

	public void setB1Girls16to18(Integer b1Girls16to18) {
		this.b1Girls16to18 = b1Girls16to18;
	}

	public Integer getB1GirlsGreaterThan18() {
		return b1GirlsGreaterThan18;
	}

	public void setB1GirlsGreaterThan18(Integer b1GirlsGreaterThan18) {
		this.b1GirlsGreaterThan18 = b1GirlsGreaterThan18;
	}

	public Integer getB1GirlsTotal() {
		return b1GirlsTotal;
	}

	public void setB1GirlsTotal(Integer b1GirlsTotal) {
		this.b1GirlsTotal = b1GirlsTotal;
	}

	public Integer getB1GrandTotal() {
		return b1GrandTotal;
	}

	public void setB1GrandTotal(Integer b1GrandTotal) {
		this.b1GrandTotal = b1GrandTotal;
	}

	public Integer getB2Boys0to6() {
		return b2Boys0to6;
	}

	public void setB2Boys0to6(Integer b2Boys0to6) {
		this.b2Boys0to6 = b2Boys0to6;
	}

	public Integer getB2Boys7to11() {
		return b2Boys7to11;
	}

	public void setB2Boys7to11(Integer b2Boys7to11) {
		this.b2Boys7to11 = b2Boys7to11;
	}

	public Integer getB2Boys12to15() {
		return b2Boys12to15;
	}

	public void setB2Boys12to15(Integer b2Boys12to15) {
		this.b2Boys12to15 = b2Boys12to15;
	}

	public Integer getB2Boys16to18() {
		return b2Boys16to18;
	}

	public void setB2Boys16to18(Integer b2Boys16to18) {
		this.b2Boys16to18 = b2Boys16to18;
	}

	public Integer getB2BoysGreaterThan18() {
		return b2BoysGreaterThan18;
	}

	public void setB2BoysGreaterThan18(Integer b2BoysGreaterThan18) {
		this.b2BoysGreaterThan18 = b2BoysGreaterThan18;
	}

	public Integer getB2BoysTotal() {
		return b2BoysTotal;
	}

	public void setB2BoysTotal(Integer b2BoysTotal) {
		this.b2BoysTotal = b2BoysTotal;
	}

	public Integer getB2Girls0to6() {
		return b2Girls0to6;
	}

	public void setB2Girls0to6(Integer b2Girls0to6) {
		this.b2Girls0to6 = b2Girls0to6;
	}

	public Integer getB2Girls7to11() {
		return b2Girls7to11;
	}

	public void setB2Girls7to11(Integer b2Girls7to11) {
		this.b2Girls7to11 = b2Girls7to11;
	}

	public Integer getB2Girls12to15() {
		return b2Girls12to15;
	}

	public void setB2Girls12to15(Integer b2Girls12to15) {
		this.b2Girls12to15 = b2Girls12to15;
	}

	public Integer getB2Girls16to18() {
		return b2Girls16to18;
	}

	public void setB2Girls16to18(Integer b2Girls16to18) {
		this.b2Girls16to18 = b2Girls16to18;
	}

	public Integer getB2GirlsGreaterThan18() {
		return b2GirlsGreaterThan18;
	}

	public void setB2GirlsGreaterThan18(Integer b2GirlsGreaterThan18) {
		this.b2GirlsGreaterThan18 = b2GirlsGreaterThan18;
	}

	public Integer getB2GirlsTotal() {
		return b2GirlsTotal;
	}

	public void setB2GirlsTotal(Integer b2GirlsTotal) {
		this.b2GirlsTotal = b2GirlsTotal;
	}

	public Integer getB2GrandTotal() {
		return b2GrandTotal;
	}

	public void setB2GrandTotal(Integer b2GrandTotal) {
		this.b2GrandTotal = b2GrandTotal;
	}

	public Integer getB3Boys0to6() {
		return b3Boys0to6;
	}

	public void setB3Boys0to6(Integer b3Boys0to6) {
		this.b3Boys0to6 = b3Boys0to6;
	}

	public Integer getB3Boys7to11() {
		return b3Boys7to11;
	}

	public void setB3Boys7to11(Integer b3Boys7to11) {
		this.b3Boys7to11 = b3Boys7to11;
	}

	public Integer getB3Boys12to15() {
		return b3Boys12to15;
	}

	public void setB3Boys12to15(Integer b3Boys12to15) {
		this.b3Boys12to15 = b3Boys12to15;
	}

	public Integer getB3Boys16to18() {
		return b3Boys16to18;
	}

	public void setB3Boys16to18(Integer b3Boys16to18) {
		this.b3Boys16to18 = b3Boys16to18;
	}

	public Integer getB3BoysGreaterThan18() {
		return b3BoysGreaterThan18;
	}

	public void setB3BoysGreaterThan18(Integer b3BoysGreaterThan18) {
		this.b3BoysGreaterThan18 = b3BoysGreaterThan18;
	}

	public Integer getB3BoysTotal() {
		return b3BoysTotal;
	}

	public void setB3BoysTotal(Integer b3BoysTotal) {
		this.b3BoysTotal = b3BoysTotal;
	}

	public Integer getB3Girls0to6() {
		return b3Girls0to6;
	}

	public void setB3Girls0to6(Integer b3Girls0to6) {
		this.b3Girls0to6 = b3Girls0to6;
	}

	public Integer getB3Girls7to11() {
		return b3Girls7to11;
	}

	public void setB3Girls7to11(Integer b3Girls7to11) {
		this.b3Girls7to11 = b3Girls7to11;
	}

	public Integer getB3Girls12to15() {
		return b3Girls12to15;
	}

	public void setB3Girls12to15(Integer b3Girls12to15) {
		this.b3Girls12to15 = b3Girls12to15;
	}

	public Integer getB3Girls16to18() {
		return b3Girls16to18;
	}

	public void setB3Girls16to18(Integer b3Girls16to18) {
		this.b3Girls16to18 = b3Girls16to18;
	}

	public Integer getB3GirlsGreaterThan18() {
		return b3GirlsGreaterThan18;
	}

	public void setB3GirlsGreaterThan18(Integer b3GirlsGreaterThan18) {
		this.b3GirlsGreaterThan18 = b3GirlsGreaterThan18;
	}

	public Integer getB3GirlsTotal() {
		return b3GirlsTotal;
	}

	public void setB3GirlsTotal(Integer b3GirlsTotal) {
		this.b3GirlsTotal = b3GirlsTotal;
	}

	public Integer getB3GrandTotal() {
		return b3GrandTotal;
	}

	public void setB3GrandTotal(Integer b3GrandTotal) {
		this.b3GrandTotal = b3GrandTotal;
	}

	public CwcDetails getCwcDetails() {
		return cwcDetails;
	}

	public void setCwcDetails(CwcDetails cwcDetails) {
		this.cwcDetails = cwcDetails;
	}

}
