/**
 * 
 */
package org.sdrc.cpmisweb.domain.sjpu;

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
 * @author Biswa Ranjan CPMISWEB 20-Oct-2017 11:21:28 am
 *
 */
@Entity
@Table(name = "sjpu_section_c")
public class SjpuSectionC {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer sjpuSectionCId;

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private SjpuDetails sjpuDetails;

	// C starts

	@Column
	private Integer c1TotalCases;
	@Column
	private Integer c1BoysYears7to11;
	@Column
	private Integer c1BoysYears12to15;
	@Column
	private Integer c1BoysYears16to18;
	@Column
	private Integer c1BoysYearsGreaterThan18;
	@Column
	private Integer c1BoysTotal;

	@Column
	private Integer c1GirlsYears7to11;
	@Column
	private Integer c1GirlsYears12to15;
	@Column
	private Integer c1GirlsYears16to18;
	@Column
	private Integer c1GirlsYearsGreaterThan18;
	@Column
	private Integer c1GirlsTotal;

	@Column
	private Integer c1GrandTotal;

	@Column
	private Integer c2TotalCases;
	@Column
	private Integer c2BoysYears7to11;
	@Column
	private Integer c2BoysYears12to15;
	@Column
	private Integer c2BoysYears16to18;
	@Column
	private Integer c2BoysYearsGreaterThan18;
	@Column
	private Integer c2BoysTotal;

	@Column
	private Integer c2GirlsYears7to11;
	@Column
	private Integer c2GirlsYears12to15;
	@Column
	private Integer c2GirlsYears16to18;
	@Column
	private Integer c2GirlsYearsGreaterThan18;
	@Column
	private Integer c2GirlsTotal;

	@Column
	private Integer c2GrandTotal;

	@Column
	private Integer c3TotalCases;
	@Column
	private Integer c3BoysYears7to11;
	@Column
	private Integer c3BoysYears12to15;
	@Column
	private Integer c3BoysYears16to18;
	@Column
	private Integer c3BoysYearsGreaterThan18;
	@Column
	private Integer c3BoysTotal;

	@Column
	private Integer c3GirlsYears7to11;
	@Column
	private Integer c3GirlsYears12to15;
	@Column
	private Integer c3GirlsYears16to18;
	@Column
	private Integer c3GirlsYearsGreaterThan18;
	@Column
	private Integer c3GirlsTotal;

	@Column
	private Integer c3GrandTotal;

	@Column
	private Integer c4TotalCases;
	@Column
	private Integer c4BoysYears7to11;
	@Column
	private Integer c4BoysYears12to15;
	@Column
	private Integer c4BoysYears16to18;
	@Column
	private Integer c4BoysYearsGreaterThan18;
	@Column
	private Integer c4BoysTotal;

	@Column
	private Integer c4GirlsYears7to11;
	@Column
	private Integer c4GirlsYears12to15;
	@Column
	private Integer c4GirlsYears16to18;
	@Column
	private Integer c4GirlsYearsGreaterThan18;
	@Column
	private Integer c4GirlsTotal;

	@Column
	private Integer c4GrandTotal;

	public Integer getSjpuSectionCId() {
		return sjpuSectionCId;
	}

	public SjpuDetails getSjpuDetails() {
		return sjpuDetails;
	}

	public Integer getC1TotalCases() {
		return c1TotalCases;
	}

	public Integer getC1BoysYears7to11() {
		return c1BoysYears7to11;
	}

	public Integer getC1BoysYears12to15() {
		return c1BoysYears12to15;
	}

	public Integer getC1BoysYears16to18() {
		return c1BoysYears16to18;
	}

	public Integer getC1BoysYearsGreaterThan18() {
		return c1BoysYearsGreaterThan18;
	}

	public Integer getC1BoysTotal() {
		return c1BoysTotal;
	}

	public Integer getC1GirlsYears7to11() {
		return c1GirlsYears7to11;
	}

	public Integer getC1GirlsYears12to15() {
		return c1GirlsYears12to15;
	}

	public Integer getC1GirlsYears16to18() {
		return c1GirlsYears16to18;
	}

	public Integer getC1GirlsYearsGreaterThan18() {
		return c1GirlsYearsGreaterThan18;
	}

	public Integer getC1GirlsTotal() {
		return c1GirlsTotal;
	}

	public Integer getC1GrandTotal() {
		return c1GrandTotal;
	}

	public Integer getC2TotalCases() {
		return c2TotalCases;
	}

	public Integer getC2BoysYears7to11() {
		return c2BoysYears7to11;
	}

	public Integer getC2BoysYears12to15() {
		return c2BoysYears12to15;
	}

	public Integer getC2BoysYears16to18() {
		return c2BoysYears16to18;
	}

	public Integer getC2BoysYearsGreaterThan18() {
		return c2BoysYearsGreaterThan18;
	}

	public Integer getC2BoysTotal() {
		return c2BoysTotal;
	}

	public Integer getC2GirlsYears7to11() {
		return c2GirlsYears7to11;
	}

	public Integer getC2GirlsYears12to15() {
		return c2GirlsYears12to15;
	}

	public Integer getC2GirlsYears16to18() {
		return c2GirlsYears16to18;
	}

	public Integer getC2GirlsYearsGreaterThan18() {
		return c2GirlsYearsGreaterThan18;
	}

	public Integer getC2GirlsTotal() {
		return c2GirlsTotal;
	}

	public Integer getC2GrandTotal() {
		return c2GrandTotal;
	}

	public Integer getC3TotalCases() {
		return c3TotalCases;
	}

	public Integer getC3BoysYears7to11() {
		return c3BoysYears7to11;
	}

	public Integer getC3BoysYears12to15() {
		return c3BoysYears12to15;
	}

	public Integer getC3BoysYears16to18() {
		return c3BoysYears16to18;
	}

	public Integer getC3BoysYearsGreaterThan18() {
		return c3BoysYearsGreaterThan18;
	}

	public Integer getC3BoysTotal() {
		return c3BoysTotal;
	}

	public Integer getC3GirlsYears7to11() {
		return c3GirlsYears7to11;
	}

	public Integer getC3GirlsYears12to15() {
		return c3GirlsYears12to15;
	}

	public Integer getC3GirlsYears16to18() {
		return c3GirlsYears16to18;
	}

	public Integer getC3GirlsYearsGreaterThan18() {
		return c3GirlsYearsGreaterThan18;
	}

	public Integer getC3GirlsTotal() {
		return c3GirlsTotal;
	}

	public Integer getC3GrandTotal() {
		return c3GrandTotal;
	}

	public Integer getC4TotalCases() {
		return c4TotalCases;
	}

	public Integer getC4BoysYears7to11() {
		return c4BoysYears7to11;
	}

	public Integer getC4BoysYears12to15() {
		return c4BoysYears12to15;
	}

	public Integer getC4BoysYears16to18() {
		return c4BoysYears16to18;
	}

	public Integer getC4BoysYearsGreaterThan18() {
		return c4BoysYearsGreaterThan18;
	}

	public Integer getC4BoysTotal() {
		return c4BoysTotal;
	}

	public Integer getC4GirlsYears7to11() {
		return c4GirlsYears7to11;
	}

	public Integer getC4GirlsYears12to15() {
		return c4GirlsYears12to15;
	}

	public Integer getC4GirlsYears16to18() {
		return c4GirlsYears16to18;
	}

	public Integer getC4GirlsYearsGreaterThan18() {
		return c4GirlsYearsGreaterThan18;
	}

	public Integer getC4GirlsTotal() {
		return c4GirlsTotal;
	}

	public Integer getC4GrandTotal() {
		return c4GrandTotal;
	}

	public void setSjpuSectionCId(Integer sjpuSectionCId) {
		this.sjpuSectionCId = sjpuSectionCId;
	}

	public void setSjpuDetails(SjpuDetails sjpuDetails) {
		this.sjpuDetails = sjpuDetails;
	}

	public void setC1TotalCases(Integer c1TotalCases) {
		this.c1TotalCases = c1TotalCases;
	}

	public void setC1BoysYears7to11(Integer c1BoysYears7to11) {
		this.c1BoysYears7to11 = c1BoysYears7to11;
	}

	public void setC1BoysYears12to15(Integer c1BoysYears12to15) {
		this.c1BoysYears12to15 = c1BoysYears12to15;
	}

	public void setC1BoysYears16to18(Integer c1BoysYears16to18) {
		this.c1BoysYears16to18 = c1BoysYears16to18;
	}

	public void setC1BoysYearsGreaterThan18(Integer c1BoysYearsGreaterThan18) {
		this.c1BoysYearsGreaterThan18 = c1BoysYearsGreaterThan18;
	}

	public void setC1BoysTotal(Integer c1BoysTotal) {
		this.c1BoysTotal = c1BoysTotal;
	}

	public void setC1GirlsYears7to11(Integer c1GirlsYears7to11) {
		this.c1GirlsYears7to11 = c1GirlsYears7to11;
	}

	public void setC1GirlsYears12to15(Integer c1GirlsYears12to15) {
		this.c1GirlsYears12to15 = c1GirlsYears12to15;
	}

	public void setC1GirlsYears16to18(Integer c1GirlsYears16to18) {
		this.c1GirlsYears16to18 = c1GirlsYears16to18;
	}

	public void setC1GirlsYearsGreaterThan18(Integer c1GirlsYearsGreaterThan18) {
		this.c1GirlsYearsGreaterThan18 = c1GirlsYearsGreaterThan18;
	}

	public void setC1GirlsTotal(Integer c1GirlsTotal) {
		this.c1GirlsTotal = c1GirlsTotal;
	}

	public void setC1GrandTotal(Integer c1GrandTotal) {
		this.c1GrandTotal = c1GrandTotal;
	}

	public void setC2TotalCases(Integer c2TotalCases) {
		this.c2TotalCases = c2TotalCases;
	}

	public void setC2BoysYears7to11(Integer c2BoysYears7to11) {
		this.c2BoysYears7to11 = c2BoysYears7to11;
	}

	public void setC2BoysYears12to15(Integer c2BoysYears12to15) {
		this.c2BoysYears12to15 = c2BoysYears12to15;
	}

	public void setC2BoysYears16to18(Integer c2BoysYears16to18) {
		this.c2BoysYears16to18 = c2BoysYears16to18;
	}

	public void setC2BoysYearsGreaterThan18(Integer c2BoysYearsGreaterThan18) {
		this.c2BoysYearsGreaterThan18 = c2BoysYearsGreaterThan18;
	}

	public void setC2BoysTotal(Integer c2BoysTotal) {
		this.c2BoysTotal = c2BoysTotal;
	}

	public void setC2GirlsYears7to11(Integer c2GirlsYears7to11) {
		this.c2GirlsYears7to11 = c2GirlsYears7to11;
	}

	public void setC2GirlsYears12to15(Integer c2GirlsYears12to15) {
		this.c2GirlsYears12to15 = c2GirlsYears12to15;
	}

	public void setC2GirlsYears16to18(Integer c2GirlsYears16to18) {
		this.c2GirlsYears16to18 = c2GirlsYears16to18;
	}

	public void setC2GirlsYearsGreaterThan18(Integer c2GirlsYearsGreaterThan18) {
		this.c2GirlsYearsGreaterThan18 = c2GirlsYearsGreaterThan18;
	}

	public void setC2GirlsTotal(Integer c2GirlsTotal) {
		this.c2GirlsTotal = c2GirlsTotal;
	}

	public void setC2GrandTotal(Integer c2GrandTotal) {
		this.c2GrandTotal = c2GrandTotal;
	}

	public void setC3TotalCases(Integer c3TotalCases) {
		this.c3TotalCases = c3TotalCases;
	}

	public void setC3BoysYears7to11(Integer c3BoysYears7to11) {
		this.c3BoysYears7to11 = c3BoysYears7to11;
	}

	public void setC3BoysYears12to15(Integer c3BoysYears12to15) {
		this.c3BoysYears12to15 = c3BoysYears12to15;
	}

	public void setC3BoysYears16to18(Integer c3BoysYears16to18) {
		this.c3BoysYears16to18 = c3BoysYears16to18;
	}

	public void setC3BoysYearsGreaterThan18(Integer c3BoysYearsGreaterThan18) {
		this.c3BoysYearsGreaterThan18 = c3BoysYearsGreaterThan18;
	}

	public void setC3BoysTotal(Integer c3BoysTotal) {
		this.c3BoysTotal = c3BoysTotal;
	}

	public void setC3GirlsYears7to11(Integer c3GirlsYears7to11) {
		this.c3GirlsYears7to11 = c3GirlsYears7to11;
	}

	public void setC3GirlsYears12to15(Integer c3GirlsYears12to15) {
		this.c3GirlsYears12to15 = c3GirlsYears12to15;
	}

	public void setC3GirlsYears16to18(Integer c3GirlsYears16to18) {
		this.c3GirlsYears16to18 = c3GirlsYears16to18;
	}

	public void setC3GirlsYearsGreaterThan18(Integer c3GirlsYearsGreaterThan18) {
		this.c3GirlsYearsGreaterThan18 = c3GirlsYearsGreaterThan18;
	}

	public void setC3GirlsTotal(Integer c3GirlsTotal) {
		this.c3GirlsTotal = c3GirlsTotal;
	}

	public void setC3GrandTotal(Integer c3GrandTotal) {
		this.c3GrandTotal = c3GrandTotal;
	}

	public void setC4TotalCases(Integer c4TotalCases) {
		this.c4TotalCases = c4TotalCases;
	}

	public void setC4BoysYears7to11(Integer c4BoysYears7to11) {
		this.c4BoysYears7to11 = c4BoysYears7to11;
	}

	public void setC4BoysYears12to15(Integer c4BoysYears12to15) {
		this.c4BoysYears12to15 = c4BoysYears12to15;
	}

	public void setC4BoysYears16to18(Integer c4BoysYears16to18) {
		this.c4BoysYears16to18 = c4BoysYears16to18;
	}

	public void setC4BoysYearsGreaterThan18(Integer c4BoysYearsGreaterThan18) {
		this.c4BoysYearsGreaterThan18 = c4BoysYearsGreaterThan18;
	}

	public void setC4BoysTotal(Integer c4BoysTotal) {
		this.c4BoysTotal = c4BoysTotal;
	}

	public void setC4GirlsYears7to11(Integer c4GirlsYears7to11) {
		this.c4GirlsYears7to11 = c4GirlsYears7to11;
	}

	public void setC4GirlsYears12to15(Integer c4GirlsYears12to15) {
		this.c4GirlsYears12to15 = c4GirlsYears12to15;
	}

	public void setC4GirlsYears16to18(Integer c4GirlsYears16to18) {
		this.c4GirlsYears16to18 = c4GirlsYears16to18;
	}

	public void setC4GirlsYearsGreaterThan18(Integer c4GirlsYearsGreaterThan18) {
		this.c4GirlsYearsGreaterThan18 = c4GirlsYearsGreaterThan18;
	}

	public void setC4GirlsTotal(Integer c4GirlsTotal) {
		this.c4GirlsTotal = c4GirlsTotal;
	}

	public void setC4GrandTotal(Integer c4GrandTotal) {
		this.c4GrandTotal = c4GrandTotal;
	}

	
}
