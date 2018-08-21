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
@Table(name = "jjb_Section_c")
public class JjbSectionC {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionCId;
	@Column(name = "c_total_cases")
	private Integer cTotalCases;
	
	@Column(name = "c_boys_7to11")
	private Integer cBoys7to11;
	
	@Column(name = "c_boys_12to15")
	private Integer cBoys12to15;
	
	@Column(name = "c_boys_16to18")
	private Integer cBoys16to18;
	
	@Column(name = "c_boys_greater_than_18")
	private Integer cBoysGreaterThan18;
	
	@Column(name = "c_boys_total")
	private Integer cBoysTotal;
	
	@Column(name = "c_girls_7to11")
	private Integer cGirls7to11;
	
	@Column(name = "c_girls_12to15")
	private Integer cGirls12to15;
	
	@Column(name = "c_girls_16to18")
	private Integer cGirls16to18;
	
	@Column(name = "c_girls_greater_than_18")
	private Integer cGirlsGreaterThan18;
	
	@Column(name = "c_girls_total")
	private Integer cGirlsTotal;
	
	@Column(name = "c_grand_total")
	private Integer cGrandTotal;

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionCId() {
		return jjbSectionCId;
	}

	public Integer getcTotalCases() {
		return cTotalCases;
	}

	public Integer getcBoys7to11() {
		return cBoys7to11;
	}

	public Integer getcBoys12to15() {
		return cBoys12to15;
	}

	public Integer getcBoys16to18() {
		return cBoys16to18;
	}

	public Integer getcBoysGreaterThan18() {
		return cBoysGreaterThan18;
	}

	public Integer getcBoysTotal() {
		return cBoysTotal;
	}

	public Integer getcGirls7to11() {
		return cGirls7to11;
	}

	public Integer getcGirls12to15() {
		return cGirls12to15;
	}

	public Integer getcGirls16to18() {
		return cGirls16to18;
	}

	public Integer getcGirlsGreaterThan18() {
		return cGirlsGreaterThan18;
	}

	public Integer getcGirlsTotal() {
		return cGirlsTotal;
	}

	public Integer getcGrandTotal() {
		return cGrandTotal;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionCId(Integer jjbSectionCId) {
		this.jjbSectionCId = jjbSectionCId;
	}

	public void setcTotalCases(Integer cTotalCases) {
		this.cTotalCases = cTotalCases;
	}

	public void setcBoys7to11(Integer cBoys7to11) {
		this.cBoys7to11 = cBoys7to11;
	}

	public void setcBoys12to15(Integer cBoys12to15) {
		this.cBoys12to15 = cBoys12to15;
	}

	public void setcBoys16to18(Integer cBoys16to18) {
		this.cBoys16to18 = cBoys16to18;
	}

	public void setcBoysGreaterThan18(Integer cBoysGreaterThan18) {
		this.cBoysGreaterThan18 = cBoysGreaterThan18;
	}

	public void setcBoysTotal(Integer cBoysTotal) {
		this.cBoysTotal = cBoysTotal;
	}

	public void setcGirls7to11(Integer cGirls7to11) {
		this.cGirls7to11 = cGirls7to11;
	}

	public void setcGirls12to15(Integer cGirls12to15) {
		this.cGirls12to15 = cGirls12to15;
	}

	public void setcGirls16to18(Integer cGirls16to18) {
		this.cGirls16to18 = cGirls16to18;
	}

	public void setcGirlsGreaterThan18(Integer cGirlsGreaterThan18) {
		this.cGirlsGreaterThan18 = cGirlsGreaterThan18;
	}

	public void setcGirlsTotal(Integer cGirlsTotal) {
		this.cGirlsTotal = cGirlsTotal;
	}

	public void setcGrandTotal(Integer cGrandTotal) {
		this.cGrandTotal = cGrandTotal;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}
}
