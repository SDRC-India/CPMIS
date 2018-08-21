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
@Table(name = "jjb_Section_h")
public class JjbSectionH {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionHId;

	// -- H. Cases pending as on last day of month by nature of offence starts

	@Column()
	private Integer h1TotalCases;
	@Column()
	private Integer h1Boys7to11;
	@Column()
	private Integer h1Boys12to15;
	@Column()
	private Integer h1Boys16to18;
	@Column()
	private Integer h1BoysGreaterThan18;
	@Column()
	private Integer h1BoysTotal;

	@Column()
	private Integer h1Girls7to11;
	@Column()
	private Integer h1Girls12to15;
	@Column()
	private Integer h1Girls16to18;
	@Column()
	private Integer h1GirlsGreaterThan18;
	@Column()
	private Integer h1GirlsTotal;

	@Column()
	private Integer h1GrandTotal;

	@Column()
	private Integer h2TotalCases;
	@Column()
	private Integer h2Boys7to11;
	@Column()
	private Integer h2Boys12to15;
	@Column()
	private Integer h2Boys16to18;
	@Column()
	private Integer h2BoysGreaterThan18;
	@Column()
	private Integer h2BoysTotal;

	@Column()
	private Integer h2Girls7to11;
	@Column()
	private Integer h2Girls12to15;
	@Column()
	private Integer h2Girls16to18;
	@Column()
	private Integer h2GirlsGreaterThan18;
	@Column()
	private Integer h2GirlsTotal;

	@Column()
	private Integer h2GrandTotal;

	@Column()
	private Integer h3TotalCases;
	@Column()
	private Integer h3Boys7to11;
	@Column()
	private Integer h3Boys12to15;
	@Column()
	private Integer h3Boys16to18;
	@Column()
	private Integer h3BoysGreaterThan18;
	@Column()
	private Integer h3BoysTotal;

	@Column()
	private Integer h3Girls7to11;
	@Column()
	private Integer h3Girls12to15;
	@Column()
	private Integer h3Girls16to18;
	@Column()
	private Integer h3GirlsGreaterThan18;
	@Column()
	private Integer h3GirlsTotal;

	@Column()
	private Integer h3GrandTotal;
	@Column
	private Integer h4TotalCases;
	@Column
	private Integer h4Boys7to11;
	@Column
	private Integer h4Boys12to15;
	@Column
	private Integer h4Boys16to18;
	@Column
	private Integer h4BoysGreaterThan18;
	@Column
	private Integer h4BoysTotal;
	@Column
	private Integer h4Girls7to11;
	@Column
	private Integer h4Girls12to15;
	@Column
	private Integer h4Girls16to18;
	@Column
	private Integer h4GirlsGreaterThan18;
	@Column
	private Integer h4GirlsTotal;
	@Column
	private Integer h4GrandTotal;
	// --- H ends

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionHId() {
		return jjbSectionHId;
	}

	public Integer getH1TotalCases() {
		return h1TotalCases;
	}

	public Integer getH1Boys7to11() {
		return h1Boys7to11;
	}

	public Integer getH1Boys12to15() {
		return h1Boys12to15;
	}

	public Integer getH1Boys16to18() {
		return h1Boys16to18;
	}

	public Integer getH1BoysGreaterThan18() {
		return h1BoysGreaterThan18;
	}

	public Integer getH1BoysTotal() {
		return h1BoysTotal;
	}

	public Integer getH1Girls7to11() {
		return h1Girls7to11;
	}

	public Integer getH1Girls12to15() {
		return h1Girls12to15;
	}

	public Integer getH1Girls16to18() {
		return h1Girls16to18;
	}

	public Integer getH1GirlsGreaterThan18() {
		return h1GirlsGreaterThan18;
	}

	public Integer getH1GirlsTotal() {
		return h1GirlsTotal;
	}

	public Integer getH1GrandTotal() {
		return h1GrandTotal;
	}

	public Integer getH2TotalCases() {
		return h2TotalCases;
	}

	public Integer getH2Boys7to11() {
		return h2Boys7to11;
	}

	public Integer getH2Boys12to15() {
		return h2Boys12to15;
	}

	public Integer getH2Boys16to18() {
		return h2Boys16to18;
	}

	public Integer getH2BoysGreaterThan18() {
		return h2BoysGreaterThan18;
	}

	public Integer getH2BoysTotal() {
		return h2BoysTotal;
	}

	public Integer getH2Girls7to11() {
		return h2Girls7to11;
	}

	public Integer getH2Girls12to15() {
		return h2Girls12to15;
	}

	public Integer getH2Girls16to18() {
		return h2Girls16to18;
	}

	public Integer getH2GirlsGreaterThan18() {
		return h2GirlsGreaterThan18;
	}

	public Integer getH2GirlsTotal() {
		return h2GirlsTotal;
	}

	public Integer getH2GrandTotal() {
		return h2GrandTotal;
	}

	public Integer getH3TotalCases() {
		return h3TotalCases;
	}

	public Integer getH3Boys7to11() {
		return h3Boys7to11;
	}

	public Integer getH3Boys12to15() {
		return h3Boys12to15;
	}

	public Integer getH3Boys16to18() {
		return h3Boys16to18;
	}

	public Integer getH3BoysGreaterThan18() {
		return h3BoysGreaterThan18;
	}

	public Integer getH3BoysTotal() {
		return h3BoysTotal;
	}

	public Integer getH3Girls7to11() {
		return h3Girls7to11;
	}

	public Integer getH3Girls12to15() {
		return h3Girls12to15;
	}

	public Integer getH3Girls16to18() {
		return h3Girls16to18;
	}

	public Integer getH3GirlsGreaterThan18() {
		return h3GirlsGreaterThan18;
	}

	public Integer getH3GirlsTotal() {
		return h3GirlsTotal;
	}

	public Integer getH3GrandTotal() {
		return h3GrandTotal;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionHId(Integer jjbSectionHId) {
		this.jjbSectionHId = jjbSectionHId;
	}

	public void setH1TotalCases(Integer h1TotalCases) {
		this.h1TotalCases = h1TotalCases;
	}

	public void setH1Boys7to11(Integer h1Boys7to11) {
		this.h1Boys7to11 = h1Boys7to11;
	}

	public void setH1Boys12to15(Integer h1Boys12to15) {
		this.h1Boys12to15 = h1Boys12to15;
	}

	public void setH1Boys16to18(Integer h1Boys16to18) {
		this.h1Boys16to18 = h1Boys16to18;
	}

	public void setH1BoysGreaterThan18(Integer h1BoysGreaterThan18) {
		this.h1BoysGreaterThan18 = h1BoysGreaterThan18;
	}

	public void setH1BoysTotal(Integer h1BoysTotal) {
		this.h1BoysTotal = h1BoysTotal;
	}

	public void setH1Girls7to11(Integer h1Girls7to11) {
		this.h1Girls7to11 = h1Girls7to11;
	}

	public void setH1Girls12to15(Integer h1Girls12to15) {
		this.h1Girls12to15 = h1Girls12to15;
	}

	public void setH1Girls16to18(Integer h1Girls16to18) {
		this.h1Girls16to18 = h1Girls16to18;
	}

	public void setH1GirlsGreaterThan18(Integer h1GirlsGreaterThan18) {
		this.h1GirlsGreaterThan18 = h1GirlsGreaterThan18;
	}

	public void setH1GirlsTotal(Integer h1GirlsTotal) {
		this.h1GirlsTotal = h1GirlsTotal;
	}

	public void setH1GrandTotal(Integer h1GrandTotal) {
		this.h1GrandTotal = h1GrandTotal;
	}

	public void setH2TotalCases(Integer h2TotalCases) {
		this.h2TotalCases = h2TotalCases;
	}

	public void setH2Boys7to11(Integer h2Boys7to11) {
		this.h2Boys7to11 = h2Boys7to11;
	}

	public void setH2Boys12to15(Integer h2Boys12to15) {
		this.h2Boys12to15 = h2Boys12to15;
	}

	public void setH2Boys16to18(Integer h2Boys16to18) {
		this.h2Boys16to18 = h2Boys16to18;
	}

	public void setH2BoysGreaterThan18(Integer h2BoysGreaterThan18) {
		this.h2BoysGreaterThan18 = h2BoysGreaterThan18;
	}

	public void setH2BoysTotal(Integer h2BoysTotal) {
		this.h2BoysTotal = h2BoysTotal;
	}

	public void setH2Girls7to11(Integer h2Girls7to11) {
		this.h2Girls7to11 = h2Girls7to11;
	}

	public void setH2Girls12to15(Integer h2Girls12to15) {
		this.h2Girls12to15 = h2Girls12to15;
	}

	public void setH2Girls16to18(Integer h2Girls16to18) {
		this.h2Girls16to18 = h2Girls16to18;
	}

	public void setH2GirlsGreaterThan18(Integer h2GirlsGreaterThan18) {
		this.h2GirlsGreaterThan18 = h2GirlsGreaterThan18;
	}

	public void setH2GirlsTotal(Integer h2GirlsTotal) {
		this.h2GirlsTotal = h2GirlsTotal;
	}

	public void setH2GrandTotal(Integer h2GrandTotal) {
		this.h2GrandTotal = h2GrandTotal;
	}

	public void setH3TotalCases(Integer h3TotalCases) {
		this.h3TotalCases = h3TotalCases;
	}

	public void setH3Boys7to11(Integer h3Boys7to11) {
		this.h3Boys7to11 = h3Boys7to11;
	}

	public void setH3Boys12to15(Integer h3Boys12to15) {
		this.h3Boys12to15 = h3Boys12to15;
	}

	public void setH3Boys16to18(Integer h3Boys16to18) {
		this.h3Boys16to18 = h3Boys16to18;
	}

	public void setH3BoysGreaterThan18(Integer h3BoysGreaterThan18) {
		this.h3BoysGreaterThan18 = h3BoysGreaterThan18;
	}

	public void setH3BoysTotal(Integer h3BoysTotal) {
		this.h3BoysTotal = h3BoysTotal;
	}

	public void setH3Girls7to11(Integer h3Girls7to11) {
		this.h3Girls7to11 = h3Girls7to11;
	}

	public void setH3Girls12to15(Integer h3Girls12to15) {
		this.h3Girls12to15 = h3Girls12to15;
	}

	public void setH3Girls16to18(Integer h3Girls16to18) {
		this.h3Girls16to18 = h3Girls16to18;
	}

	public void setH3GirlsGreaterThan18(Integer h3GirlsGreaterThan18) {
		this.h3GirlsGreaterThan18 = h3GirlsGreaterThan18;
	}

	public void setH3GirlsTotal(Integer h3GirlsTotal) {
		this.h3GirlsTotal = h3GirlsTotal;
	}

	public void setH3GrandTotal(Integer h3GrandTotal) {
		this.h3GrandTotal = h3GrandTotal;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}

	public Integer getH4TotalCases() {
		return h4TotalCases;
	}

	public Integer getH4Boys7to11() {
		return h4Boys7to11;
	}

	public Integer getH4Boys12to15() {
		return h4Boys12to15;
	}

	public Integer getH4Boys16to18() {
		return h4Boys16to18;
	}

	public Integer getH4BoysGreaterThan18() {
		return h4BoysGreaterThan18;
	}

	public Integer getH4BoysTotal() {
		return h4BoysTotal;
	}

	public Integer getH4Girls7to11() {
		return h4Girls7to11;
	}

	public Integer getH4Girls12to15() {
		return h4Girls12to15;
	}

	public Integer getH4Girls16to18() {
		return h4Girls16to18;
	}

	public Integer getH4GirlsGreaterThan18() {
		return h4GirlsGreaterThan18;
	}

	public Integer getH4GirlsTotal() {
		return h4GirlsTotal;
	}

	public Integer getH4GrandTotal() {
		return h4GrandTotal;
	}

	public void setH4TotalCases(Integer h4TotalCases) {
		this.h4TotalCases = h4TotalCases;
	}

	public void setH4Boys7to11(Integer h4Boys7to11) {
		this.h4Boys7to11 = h4Boys7to11;
	}

	public void setH4Boys12to15(Integer h4Boys12to15) {
		this.h4Boys12to15 = h4Boys12to15;
	}

	public void setH4Boys16to18(Integer h4Boys16to18) {
		this.h4Boys16to18 = h4Boys16to18;
	}

	public void setH4BoysGreaterThan18(Integer h4BoysGreaterThan18) {
		this.h4BoysGreaterThan18 = h4BoysGreaterThan18;
	}

	public void setH4BoysTotal(Integer h4BoysTotal) {
		this.h4BoysTotal = h4BoysTotal;
	}

	public void setH4Girls7to11(Integer h4Girls7to11) {
		this.h4Girls7to11 = h4Girls7to11;
	}

	public void setH4Girls12to15(Integer h4Girls12to15) {
		this.h4Girls12to15 = h4Girls12to15;
	}

	public void setH4Girls16to18(Integer h4Girls16to18) {
		this.h4Girls16to18 = h4Girls16to18;
	}

	public void setH4GirlsGreaterThan18(Integer h4GirlsGreaterThan18) {
		this.h4GirlsGreaterThan18 = h4GirlsGreaterThan18;
	}

	public void setH4GirlsTotal(Integer h4GirlsTotal) {
		this.h4GirlsTotal = h4GirlsTotal;
	}

	public void setH4GrandTotal(Integer h4GrandTotal) {
		this.h4GrandTotal = h4GrandTotal;
	}
}
