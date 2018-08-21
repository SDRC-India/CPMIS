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
@Table(name = "jjb_Section_f")
public class JjbSectionF {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionFId;

	@Column(name = "f1_total_cases")
	private Integer f1TotalCases;
	
	@Column(name = "f1_boys_7to11")
	private Integer f1Boys7to11;
	
	@Column(name = "f1_boys_12to15")
	private Integer f1Boys12to15;
	
	@Column(name = "f1_boys_16to18")
	private Integer f1Boys16to18;
	
	@Column(name = "f1_boys_greater_than_18")
	private Integer f1BoysGreaterThan18;
	
	@Column(name = "f1_boys_total")
	private Integer f1BoysTotal;
	
	
	
	
	

	@Column(name = "f1_girls_7to11")
	private Integer f1Girls7to11;
	
	@Column(name = "f1_girls_12to15")
	private Integer f1Girls12to15;
	
	@Column(name = "f1_girls_16to18")
	private Integer f1Girls16to18;
	
	@Column(name = "f1_girls_greater_than_18")
	private Integer f1GirlsGreaterThan18;
	
	@Column(name = "f1_girls_total")
	private Integer f1GirlsTotal;

	@Column(name = "f1_grand_total")
	private Integer f1GrandTotal;
	
	
	
	

	@Column(name = "f2_total_cases")
	private Integer f2TotalCases;
	
	@Column(name = "f2_boys_7to11")
	private Integer f2Boys7to11;
	
	@Column(name = "f2_boys_12to15")
	private Integer f2Boys12to15;
	
	@Column(name = "f2_boys_16to18")
	private Integer f2Boys16to18;
	
	@Column(name = "f2_boys_greater_than_18")
	private Integer f2BoysGreaterThan18;
	
	@Column(name = "f2_boys_total")
	private Integer f2BoysTotal;
	
	
	
	

	@Column(name = "f2_girls_7to11")
	private Integer f2Girls7to11;
	
	@Column(name = "f2_girls_12to15")
	private Integer f2Girls12to15;
	
	@Column(name = "f2_girls_16to18")
	private Integer f2Girls16to18;
	
	@Column(name = "f2_girls_greater_than_18")
	private Integer f2GirlsGreaterThan18;
	
	@Column(name = "f2_girls_total")
	private Integer f2GirlsTotal;
	
	
	

	@Column(name = "f2_grand_total")
	private Integer f2GrandTotal;
	
	@Column(name = "f3_total_cases")
	private Integer f3TotalCases;
	
	@Column(name = "f3_boys_7to11")
	private Integer f3Boys7to11;
	
	@Column(name = "f3_boys_12to15")
	private Integer f3Boys12to15;
	
	@Column(name = "f3_boys_16to18")
	private Integer f3Boys16to18;
	
	@Column(name = "f3_boys_greater_than_18")
	private Integer f3BoysGreaterThan18;
	
	@Column(name = "f3_boys_total")
	private Integer f3BoysTotal;
	
	
	
	
	
	

	@Column(name = "f3_girls_7to11")
	private Integer f3Girls7to11;
	
	@Column(name = "f3_girls_12to15")
	private Integer f3Girls12to15;
	
	@Column(name = "f3_girls_16to18")
	private Integer f3Girls16to18;
	
	@Column(name = "f3_girls_greater_than_18")
	private Integer f3GirlsGreaterThan18;
	
	@Column(name = "f3_girls_total")
	private Integer f3GirlsTotal;

	@Column(name = "f3_grand_total")
	private Integer f3GrandTotal;
	
	


	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;


	public Integer getJjbSectionFId() {
		return jjbSectionFId;
	}


	public Integer getF1TotalCases() {
		return f1TotalCases;
	}


	public Integer getF1Boys7to11() {
		return f1Boys7to11;
	}


	public Integer getF1Boys12to15() {
		return f1Boys12to15;
	}


	public Integer getF1Boys16to18() {
		return f1Boys16to18;
	}


	public Integer getF1BoysGreaterThan18() {
		return f1BoysGreaterThan18;
	}


	public Integer getF1BoysTotal() {
		return f1BoysTotal;
	}


	public Integer getF1Girls7to11() {
		return f1Girls7to11;
	}


	public Integer getF1Girls12to15() {
		return f1Girls12to15;
	}


	public Integer getF1Girls16to18() {
		return f1Girls16to18;
	}


	public Integer getF1GirlsGreaterThan18() {
		return f1GirlsGreaterThan18;
	}


	public Integer getF1GirlsTotal() {
		return f1GirlsTotal;
	}


	public Integer getF1GrandTotal() {
		return f1GrandTotal;
	}


	public Integer getF2TotalCases() {
		return f2TotalCases;
	}


	public Integer getF2Boys7to11() {
		return f2Boys7to11;
	}


	public Integer getF2Boys12to15() {
		return f2Boys12to15;
	}


	public Integer getF2Boys16to18() {
		return f2Boys16to18;
	}


	public Integer getF2BoysGreaterThan18() {
		return f2BoysGreaterThan18;
	}


	public Integer getF2BoysTotal() {
		return f2BoysTotal;
	}


	public Integer getF2Girls7to11() {
		return f2Girls7to11;
	}


	public Integer getF2Girls12to15() {
		return f2Girls12to15;
	}


	public Integer getF2Girls16to18() {
		return f2Girls16to18;
	}


	public Integer getF2GirlsGreaterThan18() {
		return f2GirlsGreaterThan18;
	}


	public Integer getF2GirlsTotal() {
		return f2GirlsTotal;
	}


	public Integer getF2GrandTotal() {
		return f2GrandTotal;
	}


	public Integer getF3TotalCases() {
		return f3TotalCases;
	}


	public Integer getF3Boys7to11() {
		return f3Boys7to11;
	}


	public Integer getF3Boys12to15() {
		return f3Boys12to15;
	}


	public Integer getF3Boys16to18() {
		return f3Boys16to18;
	}


	public Integer getF3BoysGreaterThan18() {
		return f3BoysGreaterThan18;
	}


	public Integer getF3BoysTotal() {
		return f3BoysTotal;
	}


	public Integer getF3Girls7to11() {
		return f3Girls7to11;
	}


	public Integer getF3Girls12to15() {
		return f3Girls12to15;
	}


	public Integer getF3Girls16to18() {
		return f3Girls16to18;
	}


	public Integer getF3GirlsGreaterThan18() {
		return f3GirlsGreaterThan18;
	}


	public Integer getF3GirlsTotal() {
		return f3GirlsTotal;
	}


	public Integer getF3GrandTotal() {
		return f3GrandTotal;
	}


	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}


	public void setJjbSectionFId(Integer jjbSectionFId) {
		this.jjbSectionFId = jjbSectionFId;
	}


	public void setF1TotalCases(Integer f1TotalCases) {
		this.f1TotalCases = f1TotalCases;
	}


	public void setF1Boys7to11(Integer f1Boys7to11) {
		this.f1Boys7to11 = f1Boys7to11;
	}


	public void setF1Boys12to15(Integer f1Boys12to15) {
		this.f1Boys12to15 = f1Boys12to15;
	}


	public void setF1Boys16to18(Integer f1Boys16to18) {
		this.f1Boys16to18 = f1Boys16to18;
	}


	public void setF1BoysGreaterThan18(Integer f1BoysGreaterThan18) {
		this.f1BoysGreaterThan18 = f1BoysGreaterThan18;
	}


	public void setF1BoysTotal(Integer f1BoysTotal) {
		this.f1BoysTotal = f1BoysTotal;
	}


	public void setF1Girls7to11(Integer f1Girls7to11) {
		this.f1Girls7to11 = f1Girls7to11;
	}


	public void setF1Girls12to15(Integer f1Girls12to15) {
		this.f1Girls12to15 = f1Girls12to15;
	}


	public void setF1Girls16to18(Integer f1Girls16to18) {
		this.f1Girls16to18 = f1Girls16to18;
	}


	public void setF1GirlsGreaterThan18(Integer f1GirlsGreaterThan18) {
		this.f1GirlsGreaterThan18 = f1GirlsGreaterThan18;
	}


	public void setF1GirlsTotal(Integer f1GirlsTotal) {
		this.f1GirlsTotal = f1GirlsTotal;
	}


	public void setF1GrandTotal(Integer f1GrandTotal) {
		this.f1GrandTotal = f1GrandTotal;
	}


	public void setF2TotalCases(Integer f2TotalCases) {
		this.f2TotalCases = f2TotalCases;
	}


	public void setF2Boys7to11(Integer f2Boys7to11) {
		this.f2Boys7to11 = f2Boys7to11;
	}


	public void setF2Boys12to15(Integer f2Boys12to15) {
		this.f2Boys12to15 = f2Boys12to15;
	}


	public void setF2Boys16to18(Integer f2Boys16to18) {
		this.f2Boys16to18 = f2Boys16to18;
	}


	public void setF2BoysGreaterThan18(Integer f2BoysGreaterThan18) {
		this.f2BoysGreaterThan18 = f2BoysGreaterThan18;
	}


	public void setF2BoysTotal(Integer f2BoysTotal) {
		this.f2BoysTotal = f2BoysTotal;
	}


	public void setF2Girls7to11(Integer f2Girls7to11) {
		this.f2Girls7to11 = f2Girls7to11;
	}


	public void setF2Girls12to15(Integer f2Girls12to15) {
		this.f2Girls12to15 = f2Girls12to15;
	}


	public void setF2Girls16to18(Integer f2Girls16to18) {
		this.f2Girls16to18 = f2Girls16to18;
	}


	public void setF2GirlsGreaterThan18(Integer f2GirlsGreaterThan18) {
		this.f2GirlsGreaterThan18 = f2GirlsGreaterThan18;
	}


	public void setF2GirlsTotal(Integer f2GirlsTotal) {
		this.f2GirlsTotal = f2GirlsTotal;
	}


	public void setF2GrandTotal(Integer f2GrandTotal) {
		this.f2GrandTotal = f2GrandTotal;
	}


	public void setF3TotalCases(Integer f3TotalCases) {
		this.f3TotalCases = f3TotalCases;
	}


	public void setF3Boys7to11(Integer f3Boys7to11) {
		this.f3Boys7to11 = f3Boys7to11;
	}


	public void setF3Boys12to15(Integer f3Boys12to15) {
		this.f3Boys12to15 = f3Boys12to15;
	}


	public void setF3Boys16to18(Integer f3Boys16to18) {
		this.f3Boys16to18 = f3Boys16to18;
	}


	public void setF3BoysGreaterThan18(Integer f3BoysGreaterThan18) {
		this.f3BoysGreaterThan18 = f3BoysGreaterThan18;
	}


	public void setF3BoysTotal(Integer f3BoysTotal) {
		this.f3BoysTotal = f3BoysTotal;
	}


	public void setF3Girls7to11(Integer f3Girls7to11) {
		this.f3Girls7to11 = f3Girls7to11;
	}


	public void setF3Girls12to15(Integer f3Girls12to15) {
		this.f3Girls12to15 = f3Girls12to15;
	}


	public void setF3Girls16to18(Integer f3Girls16to18) {
		this.f3Girls16to18 = f3Girls16to18;
	}


	public void setF3GirlsGreaterThan18(Integer f3GirlsGreaterThan18) {
		this.f3GirlsGreaterThan18 = f3GirlsGreaterThan18;
	}


	public void setF3GirlsTotal(Integer f3GirlsTotal) {
		this.f3GirlsTotal = f3GirlsTotal;
	}


	public void setF3GrandTotal(Integer f3GrandTotal) {
		this.f3GrandTotal = f3GrandTotal;
	}


	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}
}
