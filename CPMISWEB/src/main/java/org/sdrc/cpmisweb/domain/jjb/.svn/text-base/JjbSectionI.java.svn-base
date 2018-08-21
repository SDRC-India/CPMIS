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
@Table(name = "jjb_Section_i")
public class JjbSectionI {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionIId;

	// I. Category wise break up of cases pending as on last day of month starts

	@Column()
	private Integer iTotalCases;
	@Column()
	private Integer iBoysSC;
	@Column()
	private Integer iBoysST;
	@Column()
	private Integer iBoysOBC;
	@Column()
	private Integer iBoysEBC;
	@Column()
	private Integer iBoysOthers;
	@Column()
	private Integer iBoysNotKnown;
	@Column()
	private Integer iBoysTotal;

	@Column()
	private Integer iGirlsSC;
	@Column()
	private Integer iGirlsST;
	@Column()
	private Integer iGirlsOBC;
	@Column()
	private Integer iGirlsEBC;
	@Column()
	private Integer iGirlsOthers;
	@Column()
	private Integer iGirlsNotKnown;
	@Column()
	private Integer iGirlsTotal;

	@Column()
	private Integer iGrandTotal;

	@Column()
	private Integer iMinorityBoys;
	@Column()
	private Integer iMinorityGirls;
	@Column()
	private Integer iMinorityTotal;

	// I ends

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionIId() {
		return jjbSectionIId;
	}

	public Integer getiTotalCases() {
		return iTotalCases;
	}

	public Integer getiBoysSC() {
		return iBoysSC;
	}

	public Integer getiBoysST() {
		return iBoysST;
	}

	public Integer getiBoysOBC() {
		return iBoysOBC;
	}

	public Integer getiBoysEBC() {
		return iBoysEBC;
	}

	public Integer getiBoysOthers() {
		return iBoysOthers;
	}

	public Integer getiBoysNotKnown() {
		return iBoysNotKnown;
	}

	public Integer getiBoysTotal() {
		return iBoysTotal;
	}

	public Integer getiGirlsSC() {
		return iGirlsSC;
	}

	public Integer getiGirlsST() {
		return iGirlsST;
	}

	public Integer getiGirlsOBC() {
		return iGirlsOBC;
	}

	public Integer getiGirlsEBC() {
		return iGirlsEBC;
	}

	public Integer getiGirlsOthers() {
		return iGirlsOthers;
	}

	public Integer getiGirlsNotKnown() {
		return iGirlsNotKnown;
	}

	public Integer getiGirlsTotal() {
		return iGirlsTotal;
	}

	public Integer getiGrandTotal() {
		return iGrandTotal;
	}

	public Integer getiMinorityBoys() {
		return iMinorityBoys;
	}

	public Integer getiMinorityGirls() {
		return iMinorityGirls;
	}

	public Integer getiMinorityTotal() {
		return iMinorityTotal;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionIId(Integer jjbSectionIId) {
		this.jjbSectionIId = jjbSectionIId;
	}

	public void setiTotalCases(Integer iTotalCases) {
		this.iTotalCases = iTotalCases;
	}

	public void setiBoysSC(Integer iBoysSC) {
		this.iBoysSC = iBoysSC;
	}

	public void setiBoysST(Integer iBoysST) {
		this.iBoysST = iBoysST;
	}

	public void setiBoysOBC(Integer iBoysOBC) {
		this.iBoysOBC = iBoysOBC;
	}

	public void setiBoysEBC(Integer iBoysEBC) {
		this.iBoysEBC = iBoysEBC;
	}

	public void setiBoysOthers(Integer iBoysOthers) {
		this.iBoysOthers = iBoysOthers;
	}

	public void setiBoysNotKnown(Integer iBoysNotKnown) {
		this.iBoysNotKnown = iBoysNotKnown;
	}

	public void setiBoysTotal(Integer iBoysTotal) {
		this.iBoysTotal = iBoysTotal;
	}

	public void setiGirlsSC(Integer iGirlsSC) {
		this.iGirlsSC = iGirlsSC;
	}

	public void setiGirlsST(Integer iGirlsST) {
		this.iGirlsST = iGirlsST;
	}

	public void setiGirlsOBC(Integer iGirlsOBC) {
		this.iGirlsOBC = iGirlsOBC;
	}

	public void setiGirlsEBC(Integer iGirlsEBC) {
		this.iGirlsEBC = iGirlsEBC;
	}

	public void setiGirlsOthers(Integer iGirlsOthers) {
		this.iGirlsOthers = iGirlsOthers;
	}

	public void setiGirlsNotKnown(Integer iGirlsNotKnown) {
		this.iGirlsNotKnown = iGirlsNotKnown;
	}

	public void setiGirlsTotal(Integer iGirlsTotal) {
		this.iGirlsTotal = iGirlsTotal;
	}

	public void setiGrandTotal(Integer iGrandTotal) {
		this.iGrandTotal = iGrandTotal;
	}

	public void setiMinorityBoys(Integer iMinorityBoys) {
		this.iMinorityBoys = iMinorityBoys;
	}

	public void setiMinorityGirls(Integer iMinorityGirls) {
		this.iMinorityGirls = iMinorityGirls;
	}

	public void setiMinorityTotal(Integer iMinorityTotal) {
		this.iMinorityTotal = iMinorityTotal;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}
}
