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
@Table(name = "jjb_Section_a")
public class JjbSectionA {
	
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionAId;
	
	@Column(name="a1_total_cases")  
	private Integer a1TotalCases;
	
	@Column(name="a1_boys_7to11")  
	private Integer a1Boys7to11;
	
	@Column(name="a1_boys_12to15")  
	private Integer a1Boys12to15;
	
	@Column(name="a1_boys_16to18")  
	private Integer a1Boys16to18;
	
	@Column(name="a1_boys_greater_than_18")  
	private Integer a1BoysGreaterThan18;
	
	@Column(name="a1_boys_total")  
	private Integer a1BoysTotal;
	
	@Column(name="a1_girls_7to11")  
	private Integer a1Girls7to11;
	
	@Column(name="a1_girls_12to15")  
	private Integer a1Girls12to15;
	
	@Column(name="a1_girls_16to18")  
	private Integer a1Girls16to18;
	
	@Column(name="a1_girls_greater_than_18")  
	private Integer a1GirlsGreaterThan18;
	
	@Column(name="a1_girls_total")  
	private Integer a1GirlsTotal;
	
	@Column(name="a1_grand_total")  
	private Integer a1GrandTotal;
	
	@Column(name="a2_total_cases")  
	private Integer a2TotalCases;
	
	@Column(name="a2_boys_7to11")  
	private Integer a2Boys7to11;
	
	@Column(name="a2_boys_12to15")  
	private Integer a2Boys12to15;
	
	@Column(name="a2_boys_16to18")  
	private Integer a2Boys16to18;
	
	@Column(name="a2_boys_greater_than_18")  
	private Integer a2BoysGreaterThan18;
	
	@Column(name="a2_boys_total")  
	private Integer a2BoysTotal;
	
	@Column(name="a2_girls_7to11")  
	private Integer a2Girls7to11;
	
	@Column(name="a2_girls_12to15")  
	private Integer a2Girls12to15;
	
	@Column(name="a2_girls_16to18")  
	private Integer a2Girls16to18;
	
	@Column(name="a2_girls_greater_than_18")  
	private Integer a2GirlsGreaterThan18;
	
	@Column(name="a2_girls_total")  
	private Integer a2GirlsTotal;
	
	@Column(name="a2_grand_total")  
	private Integer a2GrandTotal;
	
	@Column(name="a_total_cases") 
	private Integer aTotalCases;
	
	@Column(name="a_boys_7to11")  
	private Integer aBoys7to11;
	
	@Column(name="a_boys_12to15")  
	private Integer aBoys12to15;
	
	@Column(name="a_boys_16to18")  
	private Integer aBoys16to18;
	
	@Column(name="a_boys_greater_than_18")  
	private Integer aBoysGreaterThan18;
	
	@Column(name="a_boys_total")  
	private Integer aBoysTotal;
	
	@Column(name="a_girls_7to11")  
	private Integer aGirls7to11;
	
	@Column(name="a_girls_12to15")  
	private Integer aGirls12to15;
	
	@Column(name="a_girls_16to18")  
	private Integer aGirls16to18;
	
	@Column(name="a_girls_greater_than_18")  
	private Integer aGirlsGreaterThan18;
	
	@Column(name="a_girls_total")  
	private Integer aGirlsTotal;
	
	@Column(name="a_grand_total")  
	private Integer aGrandTotal;

	
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name="parent_id")
	private JjbDetails jjbDetails;


	public Integer getJjbSectionAId() {
		return jjbSectionAId;
	}


	public Integer getA1TotalCases() {
		return a1TotalCases;
	}


	public Integer getA1Boys7to11() {
		return a1Boys7to11;
	}


	public Integer getA1Boys12to15() {
		return a1Boys12to15;
	}


	public Integer getA1Boys16to18() {
		return a1Boys16to18;
	}


	public Integer getA1BoysGreaterThan18() {
		return a1BoysGreaterThan18;
	}


	public Integer getA1BoysTotal() {
		return a1BoysTotal;
	}


	public Integer getA1Girls7to11() {
		return a1Girls7to11;
	}


	public Integer getA1Girls12to15() {
		return a1Girls12to15;
	}


	public Integer getA1Girls16to18() {
		return a1Girls16to18;
	}


	public Integer getA1GirlsGreaterThan18() {
		return a1GirlsGreaterThan18;
	}


	public Integer getA1GirlsTotal() {
		return a1GirlsTotal;
	}


	public Integer getA1GrandTotal() {
		return a1GrandTotal;
	}


	public Integer getA2TotalCases() {
		return a2TotalCases;
	}


	public Integer getA2Boys7to11() {
		return a2Boys7to11;
	}


	public Integer getA2Boys12to15() {
		return a2Boys12to15;
	}


	public Integer getA2Boys16to18() {
		return a2Boys16to18;
	}


	public Integer getA2BoysGreaterThan18() {
		return a2BoysGreaterThan18;
	}


	public Integer getA2BoysTotal() {
		return a2BoysTotal;
	}


	public Integer getA2Girls7to11() {
		return a2Girls7to11;
	}


	public Integer getA2Girls12to15() {
		return a2Girls12to15;
	}


	public Integer getA2Girls16to18() {
		return a2Girls16to18;
	}


	public Integer getA2GirlsGreaterThan18() {
		return a2GirlsGreaterThan18;
	}


	public Integer getA2GirlsTotal() {
		return a2GirlsTotal;
	}


	public Integer getA2GrandTotal() {
		return a2GrandTotal;
	}


	public Integer getaTotalCases() {
		return aTotalCases;
	}


	public Integer getaBoys7to11() {
		return aBoys7to11;
	}


	public Integer getaBoys12to15() {
		return aBoys12to15;
	}


	public Integer getaBoys16to18() {
		return aBoys16to18;
	}


	public Integer getaBoysGreaterThan18() {
		return aBoysGreaterThan18;
	}


	public Integer getaBoysTotal() {
		return aBoysTotal;
	}


	public Integer getaGirls7to11() {
		return aGirls7to11;
	}


	public Integer getaGirls12to15() {
		return aGirls12to15;
	}


	public Integer getaGirls16to18() {
		return aGirls16to18;
	}


	public Integer getaGirlsGreaterThan18() {
		return aGirlsGreaterThan18;
	}


	public Integer getaGirlsTotal() {
		return aGirlsTotal;
	}


	public Integer getaGrandTotal() {
		return aGrandTotal;
	}


	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}


	public void setJjbSectionAId(Integer jjbSectionAId) {
		this.jjbSectionAId = jjbSectionAId;
	}


	public void setA1TotalCases(Integer a1TotalCases) {
		this.a1TotalCases = a1TotalCases;
	}


	public void setA1Boys7to11(Integer a1Boys7to11) {
		this.a1Boys7to11 = a1Boys7to11;
	}


	public void setA1Boys12to15(Integer a1Boys12to15) {
		this.a1Boys12to15 = a1Boys12to15;
	}


	public void setA1Boys16to18(Integer a1Boys16to18) {
		this.a1Boys16to18 = a1Boys16to18;
	}


	public void setA1BoysGreaterThan18(Integer a1BoysGreaterThan18) {
		this.a1BoysGreaterThan18 = a1BoysGreaterThan18;
	}


	public void setA1BoysTotal(Integer a1BoysTotal) {
		this.a1BoysTotal = a1BoysTotal;
	}


	public void setA1Girls7to11(Integer a1Girls7to11) {
		this.a1Girls7to11 = a1Girls7to11;
	}


	public void setA1Girls12to15(Integer a1Girls12to15) {
		this.a1Girls12to15 = a1Girls12to15;
	}


	public void setA1Girls16to18(Integer a1Girls16to18) {
		this.a1Girls16to18 = a1Girls16to18;
	}


	public void setA1GirlsGreaterThan18(Integer a1GirlsGreaterThan18) {
		this.a1GirlsGreaterThan18 = a1GirlsGreaterThan18;
	}


	public void setA1GirlsTotal(Integer a1GirlsTotal) {
		this.a1GirlsTotal = a1GirlsTotal;
	}


	public void setA1GrandTotal(Integer a1GrandTotal) {
		this.a1GrandTotal = a1GrandTotal;
	}


	public void setA2TotalCases(Integer a2TotalCases) {
		this.a2TotalCases = a2TotalCases;
	}


	public void setA2Boys7to11(Integer a2Boys7to11) {
		this.a2Boys7to11 = a2Boys7to11;
	}


	public void setA2Boys12to15(Integer a2Boys12to15) {
		this.a2Boys12to15 = a2Boys12to15;
	}


	public void setA2Boys16to18(Integer a2Boys16to18) {
		this.a2Boys16to18 = a2Boys16to18;
	}


	public void setA2BoysGreaterThan18(Integer a2BoysGreaterThan18) {
		this.a2BoysGreaterThan18 = a2BoysGreaterThan18;
	}


	public void setA2BoysTotal(Integer a2BoysTotal) {
		this.a2BoysTotal = a2BoysTotal;
	}


	public void setA2Girls7to11(Integer a2Girls7to11) {
		this.a2Girls7to11 = a2Girls7to11;
	}


	public void setA2Girls12to15(Integer a2Girls12to15) {
		this.a2Girls12to15 = a2Girls12to15;
	}


	public void setA2Girls16to18(Integer a2Girls16to18) {
		this.a2Girls16to18 = a2Girls16to18;
	}


	public void setA2GirlsGreaterThan18(Integer a2GirlsGreaterThan18) {
		this.a2GirlsGreaterThan18 = a2GirlsGreaterThan18;
	}


	public void setA2GirlsTotal(Integer a2GirlsTotal) {
		this.a2GirlsTotal = a2GirlsTotal;
	}


	public void setA2GrandTotal(Integer a2GrandTotal) {
		this.a2GrandTotal = a2GrandTotal;
	}


	public void setaTotalCases(Integer aTotalCases) {
		this.aTotalCases = aTotalCases;
	}


	public void setaBoys7to11(Integer aBoys7to11) {
		this.aBoys7to11 = aBoys7to11;
	}


	public void setaBoys12to15(Integer aBoys12to15) {
		this.aBoys12to15 = aBoys12to15;
	}


	public void setaBoys16to18(Integer aBoys16to18) {
		this.aBoys16to18 = aBoys16to18;
	}


	public void setaBoysGreaterThan18(Integer aBoysGreaterThan18) {
		this.aBoysGreaterThan18 = aBoysGreaterThan18;
	}


	public void setaBoysTotal(Integer aBoysTotal) {
		this.aBoysTotal = aBoysTotal;
	}


	public void setaGirls7to11(Integer aGirls7to11) {
		this.aGirls7to11 = aGirls7to11;
	}


	public void setaGirls12to15(Integer aGirls12to15) {
		this.aGirls12to15 = aGirls12to15;
	}


	public void setaGirls16to18(Integer aGirls16to18) {
		this.aGirls16to18 = aGirls16to18;
	}


	public void setaGirlsGreaterThan18(Integer aGirlsGreaterThan18) {
		this.aGirlsGreaterThan18 = aGirlsGreaterThan18;
	}


	public void setaGirlsTotal(Integer aGirlsTotal) {
		this.aGirlsTotal = aGirlsTotal;
	}


	public void setaGrandTotal(Integer aGrandTotal) {
		this.aGrandTotal = aGrandTotal;
	}


	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}

}
