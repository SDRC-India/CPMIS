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
@Table(name = "jjb_Section_d")
public class JjbSectionD {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionDId;

	@Column(name = "d1_total_cases")
	private Integer d1TotalCases;
	
	@Column(name = "d1_boys_7to11")
	private Integer d1Boys7to11;
	
	@Column(name = "d1_boys_12to15")
	private Integer d1Boys12to15;
	
	@Column(name = "d1_boys_16to18")
	private Integer d1Boys16to18;
	
	@Column(name = "d1_boys_greater_than_18")
	private Integer d1BoysGreaterThan18;
	
	@Column(name = "d1_boys_total")
	private Integer d1BoysTotal;
	
	@Column(name = "d1_girls_7to11")
	private Integer d1Girls7to11;
	
	@Column(name = "d1_girls_12to15")
	private Integer d1Girls12to15;
	
	@Column(name = "d1_girls_16to18")
	private Integer d1Girls16to18;
	
	@Column(name = "d1_girls_greater_than_18")
	private Integer d1GirlsGreaterThan18;
	
	@Column(name = "d1_girls_total")
	private Integer d1GirlsTotal;
	
	@Column(name = "d1_grand_total")
	private Integer d1GrandTotal;
	
	@Column(name = "d2_total_cases")
	private Integer d2TotalCases;
	
	@Column(name = "d2_boys_7to11")
	private Integer d2Boys7to11;
	
	@Column(name = "d2_boys_12to15")
	private Integer d2Boys12to15;
	
	@Column(name = "d2_boys_16to18")
	private Integer d2Boys16to18;
	
	@Column(name = "d2_boys_greater_than_18")
	private Integer d2BoysGreaterThan18;
	
	@Column(name = "d2_boys_total")
	private Integer d2BoysTotal;
	
	@Column(name = "d2_girls_7to11")
	private Integer d2Girls7to11;
	
	@Column(name = "d2_girls_12to15")
	private Integer d2Girls12to15;
	
	@Column(name = "d2_girls_16to18")
	private Integer d2Girls16to18;
	
	@Column(name = "d2_girls_greater_than_18")
	private Integer d2GirlsGreaterThan18;
	
	@Column(name = "d2_girls_total")
	private Integer d2GirlsTotal;
	
	@Column(name = "d2_grand_total")
	private Integer d2GrandTotal;
	
	@Column(name = "d_total_cases")
	private Integer dTotalCases;
	
	@Column(name = "d_boys_7to11")
	private Integer dBoys7to11;
	
	@Column(name = "d_boys_12to15")
	private Integer dBoys12to15;
	
	@Column(name = "d_boys_16to18")
	private Integer dBoys16to18;
	
	@Column(name = "d_boys_greater_than_18")
	private Integer dBoysGreaterThan18;
	
	@Column(name = "d_boys_total")
	private Integer dBoysTotal;
	
	@Column(name = "d_girls_7to11")
	private Integer dGirls7to11;
	
	@Column(name = "d_girls_12to15")
	private Integer dGirls12to15;
	
	@Column(name = "d_girls_16to18")
	private Integer dGirls16to18;
	
	@Column(name = "d_girls_greater_than_18")
	private Integer dGirlsGreaterThan18;
	
	@Column(name = "d_girls_total")
	private Integer dGirlsTotal;
	
	@Column(name = "d_grand_total")
	private Integer dGrandTotal;

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionDId() {
		return jjbSectionDId;
	}

	public Integer getD1TotalCases() {
		return d1TotalCases;
	}

	public Integer getD1Boys7to11() {
		return d1Boys7to11;
	}

	public Integer getD1Boys12to15() {
		return d1Boys12to15;
	}

	public Integer getD1Boys16to18() {
		return d1Boys16to18;
	}

	public Integer getD1BoysGreaterThan18() {
		return d1BoysGreaterThan18;
	}

	public Integer getD1BoysTotal() {
		return d1BoysTotal;
	}

	public Integer getD1Girls7to11() {
		return d1Girls7to11;
	}

	public Integer getD1Girls12to15() {
		return d1Girls12to15;
	}

	public Integer getD1Girls16to18() {
		return d1Girls16to18;
	}

	public Integer getD1GirlsGreaterThan18() {
		return d1GirlsGreaterThan18;
	}

	public Integer getD1GirlsTotal() {
		return d1GirlsTotal;
	}

	public Integer getD1GrandTotal() {
		return d1GrandTotal;
	}

	public Integer getD2TotalCases() {
		return d2TotalCases;
	}

	public Integer getD2Boys7to11() {
		return d2Boys7to11;
	}

	public Integer getD2Boys12to15() {
		return d2Boys12to15;
	}

	public Integer getD2Boys16to18() {
		return d2Boys16to18;
	}

	public Integer getD2BoysGreaterThan18() {
		return d2BoysGreaterThan18;
	}

	public Integer getD2BoysTotal() {
		return d2BoysTotal;
	}

	public Integer getD2Girls7to11() {
		return d2Girls7to11;
	}

	public Integer getD2Girls12to15() {
		return d2Girls12to15;
	}

	public Integer getD2Girls16to18() {
		return d2Girls16to18;
	}

	public Integer getD2GirlsGreaterThan18() {
		return d2GirlsGreaterThan18;
	}

	public Integer getD2GirlsTotal() {
		return d2GirlsTotal;
	}

	public Integer getD2GrandTotal() {
		return d2GrandTotal;
	}

	public Integer getdTotalCases() {
		return dTotalCases;
	}

	public Integer getdBoys7to11() {
		return dBoys7to11;
	}

	public Integer getdBoys12to15() {
		return dBoys12to15;
	}

	public Integer getdBoys16to18() {
		return dBoys16to18;
	}

	public Integer getdBoysGreaterThan18() {
		return dBoysGreaterThan18;
	}

	public Integer getdBoysTotal() {
		return dBoysTotal;
	}

	public Integer getdGirls7to11() {
		return dGirls7to11;
	}

	public Integer getdGirls12to15() {
		return dGirls12to15;
	}

	public Integer getdGirls16to18() {
		return dGirls16to18;
	}

	public Integer getdGirlsGreaterThan18() {
		return dGirlsGreaterThan18;
	}

	public Integer getdGirlsTotal() {
		return dGirlsTotal;
	}

	public Integer getdGrandTotal() {
		return dGrandTotal;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionDId(Integer jjbSectionDId) {
		this.jjbSectionDId = jjbSectionDId;
	}

	public void setD1TotalCases(Integer d1TotalCases) {
		this.d1TotalCases = d1TotalCases;
	}

	public void setD1Boys7to11(Integer d1Boys7to11) {
		this.d1Boys7to11 = d1Boys7to11;
	}

	public void setD1Boys12to15(Integer d1Boys12to15) {
		this.d1Boys12to15 = d1Boys12to15;
	}

	public void setD1Boys16to18(Integer d1Boys16to18) {
		this.d1Boys16to18 = d1Boys16to18;
	}

	public void setD1BoysGreaterThan18(Integer d1BoysGreaterThan18) {
		this.d1BoysGreaterThan18 = d1BoysGreaterThan18;
	}

	public void setD1BoysTotal(Integer d1BoysTotal) {
		this.d1BoysTotal = d1BoysTotal;
	}

	public void setD1Girls7to11(Integer d1Girls7to11) {
		this.d1Girls7to11 = d1Girls7to11;
	}

	public void setD1Girls12to15(Integer d1Girls12to15) {
		this.d1Girls12to15 = d1Girls12to15;
	}

	public void setD1Girls16to18(Integer d1Girls16to18) {
		this.d1Girls16to18 = d1Girls16to18;
	}

	public void setD1GirlsGreaterThan18(Integer d1GirlsGreaterThan18) {
		this.d1GirlsGreaterThan18 = d1GirlsGreaterThan18;
	}

	public void setD1GirlsTotal(Integer d1GirlsTotal) {
		this.d1GirlsTotal = d1GirlsTotal;
	}

	public void setD1GrandTotal(Integer d1GrandTotal) {
		this.d1GrandTotal = d1GrandTotal;
	}

	public void setD2TotalCases(Integer d2TotalCases) {
		this.d2TotalCases = d2TotalCases;
	}

	public void setD2Boys7to11(Integer d2Boys7to11) {
		this.d2Boys7to11 = d2Boys7to11;
	}

	public void setD2Boys12to15(Integer d2Boys12to15) {
		this.d2Boys12to15 = d2Boys12to15;
	}

	public void setD2Boys16to18(Integer d2Boys16to18) {
		this.d2Boys16to18 = d2Boys16to18;
	}

	public void setD2BoysGreaterThan18(Integer d2BoysGreaterThan18) {
		this.d2BoysGreaterThan18 = d2BoysGreaterThan18;
	}

	public void setD2BoysTotal(Integer d2BoysTotal) {
		this.d2BoysTotal = d2BoysTotal;
	}

	public void setD2Girls7to11(Integer d2Girls7to11) {
		this.d2Girls7to11 = d2Girls7to11;
	}

	public void setD2Girls12to15(Integer d2Girls12to15) {
		this.d2Girls12to15 = d2Girls12to15;
	}

	public void setD2Girls16to18(Integer d2Girls16to18) {
		this.d2Girls16to18 = d2Girls16to18;
	}

	public void setD2GirlsGreaterThan18(Integer d2GirlsGreaterThan18) {
		this.d2GirlsGreaterThan18 = d2GirlsGreaterThan18;
	}

	public void setD2GirlsTotal(Integer d2GirlsTotal) {
		this.d2GirlsTotal = d2GirlsTotal;
	}

	public void setD2GrandTotal(Integer d2GrandTotal) {
		this.d2GrandTotal = d2GrandTotal;
	}

	public void setdTotalCases(Integer dTotalCases) {
		this.dTotalCases = dTotalCases;
	}

	public void setdBoys7to11(Integer dBoys7to11) {
		this.dBoys7to11 = dBoys7to11;
	}

	public void setdBoys12to15(Integer dBoys12to15) {
		this.dBoys12to15 = dBoys12to15;
	}

	public void setdBoys16to18(Integer dBoys16to18) {
		this.dBoys16to18 = dBoys16to18;
	}

	public void setdBoysGreaterThan18(Integer dBoysGreaterThan18) {
		this.dBoysGreaterThan18 = dBoysGreaterThan18;
	}

	public void setdBoysTotal(Integer dBoysTotal) {
		this.dBoysTotal = dBoysTotal;
	}

	public void setdGirls7to11(Integer dGirls7to11) {
		this.dGirls7to11 = dGirls7to11;
	}

	public void setdGirls12to15(Integer dGirls12to15) {
		this.dGirls12to15 = dGirls12to15;
	}

	public void setdGirls16to18(Integer dGirls16to18) {
		this.dGirls16to18 = dGirls16to18;
	}

	public void setdGirlsGreaterThan18(Integer dGirlsGreaterThan18) {
		this.dGirlsGreaterThan18 = dGirlsGreaterThan18;
	}

	public void setdGirlsTotal(Integer dGirlsTotal) {
		this.dGirlsTotal = dGirlsTotal;
	}

	public void setdGrandTotal(Integer dGrandTotal) {
		this.dGrandTotal = dGrandTotal;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}
}
