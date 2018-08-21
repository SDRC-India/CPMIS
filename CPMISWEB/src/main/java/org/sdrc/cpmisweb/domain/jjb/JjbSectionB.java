package org.sdrc.cpmisweb.domain.jjb;

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
 * Biswa Ranjan
 */
@Entity
@Table(name = "jjb_Section_b")
public class JjbSectionB {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionBId;

	@Column(name = "b1_total_cases")
	private Integer b1TotalCases;
	
	@Column(name = "b1_boys_7to11")
	private Integer b1Boys7to11;
	
	@Column(name = "b1_boys_12to15")
	private Integer b1Boys12to15;
	
	@Column(name = "b1_boys_16to18")
	private Integer b1Boys16to18;
	
	@Column(name = "b1_boys_greater_than_18")
	private Integer b1BoysGreaterThan18;
	
	@Column(name = "b1_boys_total")
	private Integer b1BoysTotal;
	
	@Column(name = "b1_girls_7to11")
	private Integer b1Girls7to11;
	
	@Column(name = "b1_girls_12to15")
	private Integer b1Girls12to15;
	
	@Column(name = "b1_girls_16to18")
	private Integer b1Girls16to18;
	
	@Column(name = "b1_girls_greater_than_18")
	private Integer b1GirlsGreaterThan18;
	
	@Column(name = "b1_girls_total")
	private Integer b1GirlsTotal;
	
	@Column(name = "b1_grand_total")
	private Integer b1GrandTotal;
	
	@Column(name = "b2_total_cases")
	private Integer b2TotalCases;
	
	@Column(name = "b2_boys_7to11")
	private Integer b2Boys7to11;
	
	@Column(name = "b2_boys_12to15")
	private Integer b2Boys12to15;
	
	@Column(name = "b2_boys_16to18")
	private Integer b2Boys16to18;
	
	@Column(name = "b2_boys_greater_than_18")
	private Integer b2BoysGreaterThan18;
	
	@Column(name = "b2_boys_total")
	private Integer b2BoysTotal;
	
	@Column(name = "b2_girls_7to11")
	private Integer b2Girls7to11;
	
	@Column(name = "b2_girls_12to15")
	private Integer b2Girls12to15;
	
	@Column(name = "b2_girls_16to18")
	private Integer b2Girls16to18;
	
	@Column(name = "b2_girls_greater_than_18")
	private Integer b2GirlsGreaterThan18;
	
	@Column(name = "b2_girls_total")
	private Integer b2GirlsTotal;
	
	@Column(name = "b2_grand_total")
	private Integer b2GrandTotal;
	
	@Column(name = "b3_total_cases")
	private Integer b3TotalCases;
	
	@Column(name = "b3_boys_7to11")
	private Integer b3Boys7to11;
	
	@Column(name = "b3_boys_12to15")
	private Integer b3Boys12to15;
	
	@Column(name = "b3_boys_16to18")
	private Integer b3Boys16to18;
	
	@Column(name = "b3_boys_greater_than_18")
	private Integer b3BoysGreaterThan18;
	
	@Column(name = "b3_boys_total")
	private Integer b3BoysTotal;
	
	@Column(name = "b3_girls_7to11")
	private Integer b3Girls7to11;
	
	@Column(name = "b3_girls_12to15")
	private Integer b3Girls12to15;
	
	@Column(name = "b3_girls_16to18")
	private Integer b3Girls16to18;
	
	@Column(name = "b3_girls_greater_than_18")
	private Integer b3GirlsGreaterThan18;
	
	@Column(name = "b3_girls_total")
	private Integer b3GirlsTotal;
	
	@Column(name = "b3_grand_total")
	private Integer b3GrandTotal;
	
	@Column(name = "b_total_cases")
	private Integer bTotalCases;
	
	@Column(name = "b_boys_7to11")
	private Integer bBoys7to11;
	
	@Column(name = "b_boys_12to15")
	private Integer bBoys12to15;
	
	@Column(name = "b_boys_16to18")
	private Integer bBoys16to18;
	
	@Column(name = "b_boys_greater_than_18")
	private Integer bBoysGreaterThan18;
	
	@Column(name = "b_boys_total")
	private Integer bBoysTotal;
	
	@Column(name = "b_girls_7to11")
	private Integer bGirls7to11;
	
	@Column(name = "b_girls_12to15")
	private Integer bGirls12to15;
	
	@Column(name = "b_girls_16to18")
	private Integer bGirls16to18;
	
	@Column(name = "b_girls_greater_than_18")
	private Integer bGirlsGreaterThan18;
	
	@Column(name = "b_girls_total")
	private Integer bGirlsTotal;
	
	@Column(name = "b_grand_total")
	private Integer bGrandTotal;

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionBId() {
		return jjbSectionBId;
	}

	public Integer getB1TotalCases() {
		return b1TotalCases;
	}

	public Integer getB1Boys7to11() {
		return b1Boys7to11;
	}

	public Integer getB1Boys12to15() {
		return b1Boys12to15;
	}

	public Integer getB1Boys16to18() {
		return b1Boys16to18;
	}

	public Integer getB1BoysGreaterThan18() {
		return b1BoysGreaterThan18;
	}

	public Integer getB1BoysTotal() {
		return b1BoysTotal;
	}

	public Integer getB1Girls7to11() {
		return b1Girls7to11;
	}

	public Integer getB1Girls12to15() {
		return b1Girls12to15;
	}

	public Integer getB1Girls16to18() {
		return b1Girls16to18;
	}

	public Integer getB1GirlsGreaterThan18() {
		return b1GirlsGreaterThan18;
	}

	public Integer getB1GirlsTotal() {
		return b1GirlsTotal;
	}

	public Integer getB1GrandTotal() {
		return b1GrandTotal;
	}

	public Integer getB2TotalCases() {
		return b2TotalCases;
	}

	public Integer getB2Boys7to11() {
		return b2Boys7to11;
	}

	public Integer getB2Boys12to15() {
		return b2Boys12to15;
	}

	public Integer getB2Boys16to18() {
		return b2Boys16to18;
	}

	public Integer getB2BoysGreaterThan18() {
		return b2BoysGreaterThan18;
	}

	public Integer getB2BoysTotal() {
		return b2BoysTotal;
	}

	public Integer getB2Girls7to11() {
		return b2Girls7to11;
	}

	public Integer getB2Girls12to15() {
		return b2Girls12to15;
	}

	public Integer getB2Girls16to18() {
		return b2Girls16to18;
	}

	public Integer getB2GirlsGreaterThan18() {
		return b2GirlsGreaterThan18;
	}

	public Integer getB2GirlsTotal() {
		return b2GirlsTotal;
	}

	public Integer getB2GrandTotal() {
		return b2GrandTotal;
	}

	public Integer getB3TotalCases() {
		return b3TotalCases;
	}

	public Integer getB3Boys7to11() {
		return b3Boys7to11;
	}

	public Integer getB3Boys12to15() {
		return b3Boys12to15;
	}

	public Integer getB3Boys16to18() {
		return b3Boys16to18;
	}

	public Integer getB3BoysGreaterThan18() {
		return b3BoysGreaterThan18;
	}

	public Integer getB3BoysTotal() {
		return b3BoysTotal;
	}

	public Integer getB3Girls7to11() {
		return b3Girls7to11;
	}

	public Integer getB3Girls12to15() {
		return b3Girls12to15;
	}

	public Integer getB3Girls16to18() {
		return b3Girls16to18;
	}

	public Integer getB3GirlsGreaterThan18() {
		return b3GirlsGreaterThan18;
	}

	public Integer getB3GirlsTotal() {
		return b3GirlsTotal;
	}

	public Integer getB3GrandTotal() {
		return b3GrandTotal;
	}

	public Integer getbTotalCases() {
		return bTotalCases;
	}

	public Integer getbBoys7to11() {
		return bBoys7to11;
	}

	public Integer getbBoys12to15() {
		return bBoys12to15;
	}

	public Integer getbBoys16to18() {
		return bBoys16to18;
	}

	public Integer getbBoysGreaterThan18() {
		return bBoysGreaterThan18;
	}

	public Integer getbBoysTotal() {
		return bBoysTotal;
	}

	public Integer getbGirls7to11() {
		return bGirls7to11;
	}

	public Integer getbGirls12to15() {
		return bGirls12to15;
	}

	public Integer getbGirls16to18() {
		return bGirls16to18;
	}

	public Integer getbGirlsGreaterThan18() {
		return bGirlsGreaterThan18;
	}

	public Integer getbGirlsTotal() {
		return bGirlsTotal;
	}

	public Integer getbGrandTotal() {
		return bGrandTotal;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionBId(Integer jjbSectionBId) {
		this.jjbSectionBId = jjbSectionBId;
	}

	public void setB1TotalCases(Integer b1TotalCases) {
		this.b1TotalCases = b1TotalCases;
	}

	public void setB1Boys7to11(Integer b1Boys7to11) {
		this.b1Boys7to11 = b1Boys7to11;
	}

	public void setB1Boys12to15(Integer b1Boys12to15) {
		this.b1Boys12to15 = b1Boys12to15;
	}

	public void setB1Boys16to18(Integer b1Boys16to18) {
		this.b1Boys16to18 = b1Boys16to18;
	}

	public void setB1BoysGreaterThan18(Integer b1BoysGreaterThan18) {
		this.b1BoysGreaterThan18 = b1BoysGreaterThan18;
	}

	public void setB1BoysTotal(Integer b1BoysTotal) {
		this.b1BoysTotal = b1BoysTotal;
	}

	public void setB1Girls7to11(Integer b1Girls7to11) {
		this.b1Girls7to11 = b1Girls7to11;
	}

	public void setB1Girls12to15(Integer b1Girls12to15) {
		this.b1Girls12to15 = b1Girls12to15;
	}

	public void setB1Girls16to18(Integer b1Girls16to18) {
		this.b1Girls16to18 = b1Girls16to18;
	}

	public void setB1GirlsGreaterThan18(Integer b1GirlsGreaterThan18) {
		this.b1GirlsGreaterThan18 = b1GirlsGreaterThan18;
	}

	public void setB1GirlsTotal(Integer b1GirlsTotal) {
		this.b1GirlsTotal = b1GirlsTotal;
	}

	public void setB1GrandTotal(Integer b1GrandTotal) {
		this.b1GrandTotal = b1GrandTotal;
	}

	public void setB2TotalCases(Integer b2TotalCases) {
		this.b2TotalCases = b2TotalCases;
	}

	public void setB2Boys7to11(Integer b2Boys7to11) {
		this.b2Boys7to11 = b2Boys7to11;
	}

	public void setB2Boys12to15(Integer b2Boys12to15) {
		this.b2Boys12to15 = b2Boys12to15;
	}

	public void setB2Boys16to18(Integer b2Boys16to18) {
		this.b2Boys16to18 = b2Boys16to18;
	}

	public void setB2BoysGreaterThan18(Integer b2BoysGreaterThan18) {
		this.b2BoysGreaterThan18 = b2BoysGreaterThan18;
	}

	public void setB2BoysTotal(Integer b2BoysTotal) {
		this.b2BoysTotal = b2BoysTotal;
	}

	public void setB2Girls7to11(Integer b2Girls7to11) {
		this.b2Girls7to11 = b2Girls7to11;
	}

	public void setB2Girls12to15(Integer b2Girls12to15) {
		this.b2Girls12to15 = b2Girls12to15;
	}

	public void setB2Girls16to18(Integer b2Girls16to18) {
		this.b2Girls16to18 = b2Girls16to18;
	}

	public void setB2GirlsGreaterThan18(Integer b2GirlsGreaterThan18) {
		this.b2GirlsGreaterThan18 = b2GirlsGreaterThan18;
	}

	public void setB2GirlsTotal(Integer b2GirlsTotal) {
		this.b2GirlsTotal = b2GirlsTotal;
	}

	public void setB2GrandTotal(Integer b2GrandTotal) {
		this.b2GrandTotal = b2GrandTotal;
	}

	public void setB3TotalCases(Integer b3TotalCases) {
		this.b3TotalCases = b3TotalCases;
	}

	public void setB3Boys7to11(Integer b3Boys7to11) {
		this.b3Boys7to11 = b3Boys7to11;
	}

	public void setB3Boys12to15(Integer b3Boys12to15) {
		this.b3Boys12to15 = b3Boys12to15;
	}

	public void setB3Boys16to18(Integer b3Boys16to18) {
		this.b3Boys16to18 = b3Boys16to18;
	}

	public void setB3BoysGreaterThan18(Integer b3BoysGreaterThan18) {
		this.b3BoysGreaterThan18 = b3BoysGreaterThan18;
	}

	public void setB3BoysTotal(Integer b3BoysTotal) {
		this.b3BoysTotal = b3BoysTotal;
	}

	public void setB3Girls7to11(Integer b3Girls7to11) {
		this.b3Girls7to11 = b3Girls7to11;
	}

	public void setB3Girls12to15(Integer b3Girls12to15) {
		this.b3Girls12to15 = b3Girls12to15;
	}

	public void setB3Girls16to18(Integer b3Girls16to18) {
		this.b3Girls16to18 = b3Girls16to18;
	}

	public void setB3GirlsGreaterThan18(Integer b3GirlsGreaterThan18) {
		this.b3GirlsGreaterThan18 = b3GirlsGreaterThan18;
	}

	public void setB3GirlsTotal(Integer b3GirlsTotal) {
		this.b3GirlsTotal = b3GirlsTotal;
	}

	public void setB3GrandTotal(Integer b3GrandTotal) {
		this.b3GrandTotal = b3GrandTotal;
	}

	public void setbTotalCases(Integer bTotalCases) {
		this.bTotalCases = bTotalCases;
	}

	public void setbBoys7to11(Integer bBoys7to11) {
		this.bBoys7to11 = bBoys7to11;
	}

	public void setbBoys12to15(Integer bBoys12to15) {
		this.bBoys12to15 = bBoys12to15;
	}

	public void setbBoys16to18(Integer bBoys16to18) {
		this.bBoys16to18 = bBoys16to18;
	}

	public void setbBoysGreaterThan18(Integer bBoysGreaterThan18) {
		this.bBoysGreaterThan18 = bBoysGreaterThan18;
	}

	public void setbBoysTotal(Integer bBoysTotal) {
		this.bBoysTotal = bBoysTotal;
	}

	public void setbGirls7to11(Integer bGirls7to11) {
		this.bGirls7to11 = bGirls7to11;
	}

	public void setbGirls12to15(Integer bGirls12to15) {
		this.bGirls12to15 = bGirls12to15;
	}

	public void setbGirls16to18(Integer bGirls16to18) {
		this.bGirls16to18 = bGirls16to18;
	}

	public void setbGirlsGreaterThan18(Integer bGirlsGreaterThan18) {
		this.bGirlsGreaterThan18 = bGirlsGreaterThan18;
	}

	public void setbGirlsTotal(Integer bGirlsTotal) {
		this.bGirlsTotal = bGirlsTotal;
	}

	public void setbGrandTotal(Integer bGrandTotal) {
		this.bGrandTotal = bGrandTotal;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}
}
