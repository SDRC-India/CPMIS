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
@Table(name = "jjb_Section_j")
public class JjbSectionJ {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionJId;

	// J. Cases pending as on last day of month administered by Juvenile Justice
	// Act 2000 (Cases Registered before 15th January 2016)--- starts

	@Column()
	private Integer j1NonHeinousTotalCases;
	@Column()
	private Integer j1NonHeinousBoys7to11;
	@Column()
	private Integer j1NonHeinousBoys12to15;
	@Column()
	private Integer j1NonHeinousBoys16to18;
	@Column()
	private Integer j1NonHeinousBoysGreaterThan18;
	@Column()
	private Integer j1NonHeinousBoysTotal;

	@Column()
	private Integer j1NonHeinousGirls7to11;
	@Column()
	private Integer j1NonHeinousGirls12to15;
	@Column()
	private Integer j1NonHeinousGirls16to18;
	@Column()
	private Integer j1NonHeinousGirlsGreaterThan18;
	@Column()
	private Integer j1NonHeinousGirlsTotal;

	@Column()
	private Integer j1NonHeinousGrandTotal;

	@Column()
	private Integer j2HeinousTotalCases;
	@Column()
	private Integer j2HeinousBoys7to11;
	@Column()
	private Integer j2HeinousBoys12to15;
	@Column()
	private Integer j2HeinousBoys16to18;
	@Column()
	private Integer j2HeinousBoysGreaterThan18;
	@Column()
	private Integer j2HeinousBoysTotal;

	@Column()
	private Integer j2HeinousGirls7to11;
	@Column()
	private Integer j2HeinousGirls12to15;
	@Column()
	private Integer j2HeinousGirls16to18;
	@Column()
	private Integer j2HeinousGirlsGreaterThan18;
	@Column()
	private Integer j2HeinousGirlsTotal;

	@Column()
	private Integer j2HeinousGrandTotal;

	@Column
	private Integer j3TotalCases;
	@Column
	private Integer j3TotalBoys7to11;
	@Column
	private Integer j3TotalBoys12to15;
	@Column
	private Integer j3TotalBoys16to18;
	@Column
	private Integer j3TotalBoysGreaterThan18;
	@Column
	private Integer j3TotalBoysTotal;
	@Column
	private Integer j3TotalGirls7to11;
	@Column
	private Integer j3TotalGirls12to15;
	@Column
	private Integer j3TotalGirls16to18;
	@Column
	private Integer j3TotalGirlsGreaterThan18;
	@Column
	private Integer j3TotalGirlsTotal;
	@Column
	private Integer j3TotalGrandTotal;

	// J ends

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionJId() {
		return jjbSectionJId;
	}

	public Integer getJ1NonHeinousTotalCases() {
		return j1NonHeinousTotalCases;
	}

	public Integer getJ1NonHeinousBoys7to11() {
		return j1NonHeinousBoys7to11;
	}

	public Integer getJ1NonHeinousBoys12to15() {
		return j1NonHeinousBoys12to15;
	}

	public Integer getJ1NonHeinousBoys16to18() {
		return j1NonHeinousBoys16to18;
	}

	public Integer getJ1NonHeinousBoysGreaterThan18() {
		return j1NonHeinousBoysGreaterThan18;
	}

	public Integer getJ1NonHeinousBoysTotal() {
		return j1NonHeinousBoysTotal;
	}

	public Integer getJ1NonHeinousGirls7to11() {
		return j1NonHeinousGirls7to11;
	}

	public Integer getJ1NonHeinousGirls12to15() {
		return j1NonHeinousGirls12to15;
	}

	public Integer getJ1NonHeinousGirls16to18() {
		return j1NonHeinousGirls16to18;
	}

	public Integer getJ1NonHeinousGirlsGreaterThan18() {
		return j1NonHeinousGirlsGreaterThan18;
	}

	public Integer getJ1NonHeinousGirlsTotal() {
		return j1NonHeinousGirlsTotal;
	}

	public Integer getJ1NonHeinousGrandTotal() {
		return j1NonHeinousGrandTotal;
	}

	public Integer getJ2HeinousTotalCases() {
		return j2HeinousTotalCases;
	}

	public Integer getJ2HeinousBoys7to11() {
		return j2HeinousBoys7to11;
	}

	public Integer getJ2HeinousBoys12to15() {
		return j2HeinousBoys12to15;
	}

	public Integer getJ2HeinousBoys16to18() {
		return j2HeinousBoys16to18;
	}

	public Integer getJ2HeinousBoysGreaterThan18() {
		return j2HeinousBoysGreaterThan18;
	}

	public Integer getJ2HeinousBoysTotal() {
		return j2HeinousBoysTotal;
	}

	public Integer getJ2HeinousGirls7to11() {
		return j2HeinousGirls7to11;
	}

	public Integer getJ2HeinousGirls12to15() {
		return j2HeinousGirls12to15;
	}

	public Integer getJ2HeinousGirls16to18() {
		return j2HeinousGirls16to18;
	}

	public Integer getJ2HeinousGirlsGreaterThan18() {
		return j2HeinousGirlsGreaterThan18;
	}

	public Integer getJ2HeinousGirlsTotal() {
		return j2HeinousGirlsTotal;
	}

	public Integer getJ2HeinousGrandTotal() {
		return j2HeinousGrandTotal;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionJId(Integer jjbSectionJId) {
		this.jjbSectionJId = jjbSectionJId;
	}

	public void setJ1NonHeinousTotalCases(Integer j1NonHeinousTotalCases) {
		this.j1NonHeinousTotalCases = j1NonHeinousTotalCases;
	}

	public void setJ1NonHeinousBoys7to11(Integer j1NonHeinousBoys7to11) {
		this.j1NonHeinousBoys7to11 = j1NonHeinousBoys7to11;
	}

	public void setJ1NonHeinousBoys12to15(Integer j1NonHeinousBoys12to15) {
		this.j1NonHeinousBoys12to15 = j1NonHeinousBoys12to15;
	}

	public void setJ1NonHeinousBoys16to18(Integer j1NonHeinousBoys16to18) {
		this.j1NonHeinousBoys16to18 = j1NonHeinousBoys16to18;
	}

	public void setJ1NonHeinousBoysGreaterThan18(
			Integer j1NonHeinousBoysGreaterThan18) {
		this.j1NonHeinousBoysGreaterThan18 = j1NonHeinousBoysGreaterThan18;
	}

	public void setJ1NonHeinousBoysTotal(Integer j1NonHeinousBoysTotal) {
		this.j1NonHeinousBoysTotal = j1NonHeinousBoysTotal;
	}

	public void setJ1NonHeinousGirls7to11(Integer j1NonHeinousGirls7to11) {
		this.j1NonHeinousGirls7to11 = j1NonHeinousGirls7to11;
	}

	public void setJ1NonHeinousGirls12to15(Integer j1NonHeinousGirls12to15) {
		this.j1NonHeinousGirls12to15 = j1NonHeinousGirls12to15;
	}

	public void setJ1NonHeinousGirls16to18(Integer j1NonHeinousGirls16to18) {
		this.j1NonHeinousGirls16to18 = j1NonHeinousGirls16to18;
	}

	public void setJ1NonHeinousGirlsGreaterThan18(
			Integer j1NonHeinousGirlsGreaterThan18) {
		this.j1NonHeinousGirlsGreaterThan18 = j1NonHeinousGirlsGreaterThan18;
	}

	public void setJ1NonHeinousGirlsTotal(Integer j1NonHeinousGirlsTotal) {
		this.j1NonHeinousGirlsTotal = j1NonHeinousGirlsTotal;
	}

	public void setJ1NonHeinousGrandTotal(Integer j1NonHeinousGrandTotal) {
		this.j1NonHeinousGrandTotal = j1NonHeinousGrandTotal;
	}

	public void setJ2HeinousTotalCases(Integer j2HeinousTotalCases) {
		this.j2HeinousTotalCases = j2HeinousTotalCases;
	}

	public void setJ2HeinousBoys7to11(Integer j2HeinousBoys7to11) {
		this.j2HeinousBoys7to11 = j2HeinousBoys7to11;
	}

	public void setJ2HeinousBoys12to15(Integer j2HeinousBoys12to15) {
		this.j2HeinousBoys12to15 = j2HeinousBoys12to15;
	}

	public void setJ2HeinousBoys16to18(Integer j2HeinousBoys16to18) {
		this.j2HeinousBoys16to18 = j2HeinousBoys16to18;
	}

	public void setJ2HeinousBoysGreaterThan18(Integer j2HeinousBoysGreaterThan18) {
		this.j2HeinousBoysGreaterThan18 = j2HeinousBoysGreaterThan18;
	}

	public void setJ2HeinousBoysTotal(Integer j2HeinousBoysTotal) {
		this.j2HeinousBoysTotal = j2HeinousBoysTotal;
	}

	public void setJ2HeinousGirls7to11(Integer j2HeinousGirls7to11) {
		this.j2HeinousGirls7to11 = j2HeinousGirls7to11;
	}

	public void setJ2HeinousGirls12to15(Integer j2HeinousGirls12to15) {
		this.j2HeinousGirls12to15 = j2HeinousGirls12to15;
	}

	public void setJ2HeinousGirls16to18(Integer j2HeinousGirls16to18) {
		this.j2HeinousGirls16to18 = j2HeinousGirls16to18;
	}

	public void setJ2HeinousGirlsGreaterThan18(Integer j2HeinousGirlsGreaterThan18) {
		this.j2HeinousGirlsGreaterThan18 = j2HeinousGirlsGreaterThan18;
	}

	public void setJ2HeinousGirlsTotal(Integer j2HeinousGirlsTotal) {
		this.j2HeinousGirlsTotal = j2HeinousGirlsTotal;
	}

	public void setJ2HeinousGrandTotal(Integer j2HeinousGrandTotal) {
		this.j2HeinousGrandTotal = j2HeinousGrandTotal;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}

	public Integer getJ3TotalCases() {
		return j3TotalCases;
	}

	public Integer getJ3TotalBoys7to11() {
		return j3TotalBoys7to11;
	}

	public Integer getJ3TotalBoys12to15() {
		return j3TotalBoys12to15;
	}

	public Integer getJ3TotalBoys16to18() {
		return j3TotalBoys16to18;
	}

	public Integer getJ3TotalBoysGreaterThan18() {
		return j3TotalBoysGreaterThan18;
	}

	public Integer getJ3TotalBoysTotal() {
		return j3TotalBoysTotal;
	}

	public Integer getJ3TotalGirls7to11() {
		return j3TotalGirls7to11;
	}

	public Integer getJ3TotalGirls12to15() {
		return j3TotalGirls12to15;
	}

	public Integer getJ3TotalGirls16to18() {
		return j3TotalGirls16to18;
	}

	public Integer getJ3TotalGirlsGreaterThan18() {
		return j3TotalGirlsGreaterThan18;
	}

	public Integer getJ3TotalGirlsTotal() {
		return j3TotalGirlsTotal;
	}

	public Integer getJ3TotalGrandTotal() {
		return j3TotalGrandTotal;
	}

	public void setJ3TotalCases(Integer j3TotalCases) {
		this.j3TotalCases = j3TotalCases;
	}

	public void setJ3TotalBoys7to11(Integer j3TotalBoys7to11) {
		this.j3TotalBoys7to11 = j3TotalBoys7to11;
	}

	public void setJ3TotalBoys12to15(Integer j3TotalBoys12to15) {
		this.j3TotalBoys12to15 = j3TotalBoys12to15;
	}

	public void setJ3TotalBoys16to18(Integer j3TotalBoys16to18) {
		this.j3TotalBoys16to18 = j3TotalBoys16to18;
	}

	public void setJ3TotalBoysGreaterThan18(Integer j3TotalBoysGreaterThan18) {
		this.j3TotalBoysGreaterThan18 = j3TotalBoysGreaterThan18;
	}

	public void setJ3TotalBoysTotal(Integer j3TotalBoysTotal) {
		this.j3TotalBoysTotal = j3TotalBoysTotal;
	}

	public void setJ3TotalGirls7to11(Integer j3TotalGirls7to11) {
		this.j3TotalGirls7to11 = j3TotalGirls7to11;
	}

	public void setJ3TotalGirls12to15(Integer j3TotalGirls12to15) {
		this.j3TotalGirls12to15 = j3TotalGirls12to15;
	}

	public void setJ3TotalGirls16to18(Integer j3TotalGirls16to18) {
		this.j3TotalGirls16to18 = j3TotalGirls16to18;
	}

	public void setJ3TotalGirlsGreaterThan18(Integer j3TotalGirlsGreaterThan18) {
		this.j3TotalGirlsGreaterThan18 = j3TotalGirlsGreaterThan18;
	}

	public void setJ3TotalGirlsTotal(Integer j3TotalGirlsTotal) {
		this.j3TotalGirlsTotal = j3TotalGirlsTotal;
	}

	public void setJ3TotalGrandTotal(Integer j3TotalGrandTotal) {
		this.j3TotalGrandTotal = j3TotalGrandTotal;
	}
}
