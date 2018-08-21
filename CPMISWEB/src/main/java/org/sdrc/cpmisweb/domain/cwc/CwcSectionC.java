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
@Table(name="Cwc_Section_C")
public class CwcSectionC {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer cwcSectionCId;
	
	@Column(name="c_Boys_0to6")
	private Integer cBoys0to6;

	@Column(name="c_Boys_7to11")
	private Integer cBoys7to11;

	@Column(name="c_Boys_12to15")
	private Integer cBoys12to15;

	@Column(name="c_Boys_16to18")
	private Integer cBoys16to18;

	@Column(name="c_Boys_GreaterThan18")
	private Integer cBoysGreaterThan18;

	@Column(name="c_Boys_Total")
	private Integer cBoysTotal;

	@Column(name="c_Girls_0to6")
	private Integer cGirls0to6;

	@Column(name="c_Girls_7to11")
	private Integer cGirls7to11;

	@Column(name="c_Girls_12to15")
	private Integer cGirls12to15;

	@Column(name="c_Girls_16to18")
	private Integer cGirls16to18;

	@Column(name="c_Girls_GreaterThan18")
	private Integer cGirlsGreaterThan18;

	@Column(name="c_Girls_Total")
	private Integer cGirlsTotal;

	@Column(name="c_Grand_Total")
	private Integer cGrandTotal;
	
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name="parent_id")
	private CwcDetails cwcDetails;

	public Integer getCwcSectionCId() {
		return cwcSectionCId;
	}

	public void setCwcSectionCId(Integer cwcSectionCId) {
		this.cwcSectionCId = cwcSectionCId;
	}

	public Integer getcBoys0to6() {
		return cBoys0to6;
	}

	public void setcBoys0to6(Integer cBoys0to6) {
		this.cBoys0to6 = cBoys0to6;
	}

	public Integer getcBoys7to11() {
		return cBoys7to11;
	}

	public void setcBoys7to11(Integer cBoys7to11) {
		this.cBoys7to11 = cBoys7to11;
	}

	public Integer getcBoys12to15() {
		return cBoys12to15;
	}

	public void setcBoys12to15(Integer cBoys12to15) {
		this.cBoys12to15 = cBoys12to15;
	}

	public Integer getcBoys16to18() {
		return cBoys16to18;
	}

	public void setcBoys16to18(Integer cBoys16to18) {
		this.cBoys16to18 = cBoys16to18;
	}

	public Integer getcBoysGreaterThan18() {
		return cBoysGreaterThan18;
	}

	public void setcBoysGreaterThan18(Integer cBoysGreaterThan18) {
		this.cBoysGreaterThan18 = cBoysGreaterThan18;
	}

	public Integer getcBoysTotal() {
		return cBoysTotal;
	}

	public void setcBoysTotal(Integer cBoysTotal) {
		this.cBoysTotal = cBoysTotal;
	}

	public Integer getcGirls0to6() {
		return cGirls0to6;
	}

	public void setcGirls0to6(Integer cGirls0to6) {
		this.cGirls0to6 = cGirls0to6;
	}

	public Integer getcGirls7to11() {
		return cGirls7to11;
	}

	public void setcGirls7to11(Integer cGirls7to11) {
		this.cGirls7to11 = cGirls7to11;
	}

	public Integer getcGirls12to15() {
		return cGirls12to15;
	}

	public void setcGirls12to15(Integer cGirls12to15) {
		this.cGirls12to15 = cGirls12to15;
	}

	public Integer getcGirls16to18() {
		return cGirls16to18;
	}

	public void setcGirls16to18(Integer cGirls16to18) {
		this.cGirls16to18 = cGirls16to18;
	}

	public Integer getcGirlsGreaterThan18() {
		return cGirlsGreaterThan18;
	}

	public void setcGirlsGreaterThan18(Integer cGirlsGreaterThan18) {
		this.cGirlsGreaterThan18 = cGirlsGreaterThan18;
	}

	public Integer getcGirlsTotal() {
		return cGirlsTotal;
	}

	public void setcGirlsTotal(Integer cGirlsTotal) {
		this.cGirlsTotal = cGirlsTotal;
	}

	public Integer getcGrandTotal() {
		return cGrandTotal;
	}

	public void setcGrandTotal(Integer cGrandTotal) {
		this.cGrandTotal = cGrandTotal;
	}

	public CwcDetails getCwcDetails() {
		return cwcDetails;
	}

	public void setCwcDetails(CwcDetails cwcDetails) {
		this.cwcDetails = cwcDetails;
	}

	
}
