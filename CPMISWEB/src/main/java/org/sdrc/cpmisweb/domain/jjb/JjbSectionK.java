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
@Table(name = "jjb_Section_k")
public class JjbSectionK {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer jjbSectionKId;

	// K. Functions and Types of Orders of the Board (in the reporting month
	// -----starts

	@Column()
	private Integer k1;
	@Column()
	private Integer k2a;
	@Column()
	private Integer k2b;
	@Column()
	private Boolean k3a;
	@Column()
	private Integer k3b;
	@Column()
	private Boolean k4a;
	@Column()
	private Integer k4b;
	@Column()
	private Integer k4c;

	@Column()
	private Integer k5aCases;
	@Column()
	private Integer k5aBoys;
	@Column()
	private Integer k5aGirls;
	@Column()
	private Integer k5aTotalCICL;
	@Column()
	private String k5b;

	@Column()
	private Integer k6Cases;
	@Column()
	private Integer k6Boys;
	@Column()
	private Integer k6Girls;
	@Column()
	private Integer k6TotalCICL;

	@Column()
	private Integer k7Cases;
	@Column()
	private Integer k7Boys;
	@Column()
	private Integer k7Girls;
	@Column()
	private Integer k7TotalCICL;

	@Column()
	private Integer k8Cases;
	@Column()
	private Integer k8Boys;
	@Column()
	private Integer k8Girls;
	@Column()
	private Integer k8TotalCICL;

	@Column()
	private Integer k9Cases;
	@Column()
	private Integer k9Boys;
	@Column()
	private Integer k9Girls;
	@Column()
	private Integer k9TotalCICL;

	@Column()
	private Integer k10a;
	@Column()
	private String k10b;
	@Column()
	private Integer k10cCases;
	@Column()
	private Integer k10cBoys;
	@Column()
	private Integer k10cGirls;
	@Column()
	private Integer k10cTotalCICL;
	@Column()
	private Integer k11a;
	@Column()
	private String k11b;
	@Column()
	private Integer k11cCases;
	@Column()
	private Integer k11cBoys;
	@Column()
	private Integer k11cGirls;
	@Column()
	private Integer k11cTotalCICL;

	@Column()
	private Integer k12aCases;
	@Column()
	private Integer k12aBoys;
	@Column()
	private Integer k12aGirls;
	@Column()
	private Integer k12aTotalCICL;

	@Column()
	private Integer k12bCases;
	@Column()
	private Integer k12bBoys;
	@Column()
	private Integer k12bGirls;
	@Column()
	private Integer k12bTotalCICL;

	@Column()
	private Integer k12cCases;
	@Column()
	private Integer k12cBoys;
	@Column()
	private Integer k12cGirls;
	@Column()
	private Integer k12cTotalCICL;

	@Column()
	private Integer k12Cases;
	@Column()
	private Integer k12Boys;
	@Column()
	private Integer k12Girls;
	@Column()
	private Integer k12TotalCICL;
	// ---------

	@Column()
	private Integer k13aCases;
	@Column()
	private Integer k13aBoys;
	@Column()
	private Integer k13aGirls;
	@Column()
	private Integer k13aTotalCICL;

	@Column()
	private Integer k13bCases;
	@Column()
	private Integer k13bBoys;
	@Column()
	private Integer k13bGirls;
	@Column()
	private Integer k13bTotalCICL;

	@Column()
	private Integer k13cCases;
	@Column()
	private Integer k13cBoys;
	@Column()
	private Integer k13cGirls;
	@Column()
	private Integer k13cTotalCICL;

	@Column()
	private Integer k13dCases;
	@Column()
	private Integer k13dBoys;
	@Column()
	private Integer k13dGirls;
	@Column()
	private Integer k13dTotalCICL;

	@Column()
	private Integer k14aCases;
	@Column()
	private Integer k14aBoys;
	@Column()
	private Integer k14aGirls;
	@Column()
	private Integer k14aTotalCICL;

	@Column()
	private Integer k14bCases;
	@Column()
	private Integer k14bBoys;
	@Column()
	private Integer k14bGirls;
	@Column()
	private Integer k14bTotalCICL;

	@Column()
	private Integer k14cCases;
	@Column()
	private Integer k14cBoys;
	@Column()
	private Integer k14cGirls;
	@Column()
	private Integer k14cTotalCICL;

	@Column()
	private Integer k14dCases;
	@Column()
	private Integer k14dBoys;
	@Column()
	private Integer k14dGirls;
	@Column()
	private Integer k14dTotalCICL;

	@Column()
	private Integer k15aCases;
	@Column()
	private Integer k15aBoys;
	@Column()
	private Integer k15aGirls;
	@Column()
	private Integer k15aTotalCICL;

	@Column()
	private Integer k15bCases;
	@Column()
	private Integer k15bBoys;
	@Column()
	private Integer k15bGirls;
	@Column()
	private Integer k15bTotalCICL;

	@Column()
	private Integer k15cCases;
	@Column()
	private Integer k15cBoys;
	@Column()
	private Integer k15cGirls;
	@Column()
	private Integer k15cTotalCICL;

	@Column()
	private Integer k15dCases;
	@Column()
	private Integer k15dBoys;
	@Column()
	private Integer k15dGirls;
	@Column()
	private Integer k15dTotalCICL;

	// -----

	@Column()
	private Integer k16aCases;
	@Column()
	private Integer k16aBoys;
	@Column()
	private Integer k16aGirls;
	@Column()
	private Integer k16aTotalCICL;

	@Column()
	private Integer k16bCases;
	@Column()
	private Integer k16bBoys;
	@Column()
	private Integer k16bGirls;
	@Column()
	private Integer k16bTotalCICL;

	@Column()
	private Integer k16cCases;
	@Column()
	private Integer k16cBoys;
	@Column()
	private Integer k16cGirls;
	@Column()
	private Integer k16cTotalCICL;

	@Column()
	private Integer k16dCases;
	@Column()
	private Integer k16dBoys;
	@Column()
	private Integer k16dGirls;
	@Column()
	private Integer k16dTotalCICL;

	@Column()
	private Integer k16eCases;
	@Column()
	private Integer k16eBoys;
	@Column()
	private Integer k16eGirls;
	@Column()
	private Integer k16eTotalCICL;

	@Column()
	private Integer k16fCases;
	@Column()
	private Integer k16fBoys;
	@Column()
	private Integer k16fGirls;
	@Column()
	private Integer k16fTotalCICL;

	@Column()
	private Integer k17aCases;
	@Column()
	private Integer k17aBoys;
	@Column()
	private Integer k17aGirls;
	@Column()
	private Integer k17aTotalCICL;

	@Column()
	private Integer k17bCases;
	@Column()
	private Integer k17bBoys;
	@Column()
	private Integer k17bGirls;
	@Column()
	private Integer k17bTotalCICL;

	@Column()
	private Integer k17cCases;
	@Column()
	private Integer k17cBoys;
	@Column()
	private Integer k17cGirls;
	@Column()
	private Integer k17cTotalCICL;

	@Column()
	private Integer k17dCases;
	@Column()
	private Integer k17dBoys;
	@Column()
	private Integer k17dGirls;
	@Column()
	private Integer k17dTotalCICL;

	@Column()
	private Integer k17eCases;
	@Column()
	private Integer k17eBoys;
	@Column()
	private Integer k17eGirls;
	@Column()
	private Integer k17eTotalCICL;

	// K ends

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private JjbDetails jjbDetails;

	public Integer getJjbSectionKId() {
		return jjbSectionKId;
	}

	public Integer getK1() {
		return k1;
	}

	public Integer getK2a() {
		return k2a;
	}

	public Integer getK2b() {
		return k2b;
	}

	public Boolean getK3a() {
		return k3a;
	}

	public Integer getK3b() {
		return k3b;
	}

	public Boolean getK4a() {
		return k4a;
	}

	public Integer getK4b() {
		return k4b;
	}

	public Integer getK4c() {
		return k4c;
	}

	public Integer getK5aCases() {
		return k5aCases;
	}

	public Integer getK5aBoys() {
		return k5aBoys;
	}

	public Integer getK5aGirls() {
		return k5aGirls;
	}

	public Integer getK5aTotalCICL() {
		return k5aTotalCICL;
	}

	public String getK5b() {
		return k5b;
	}

	public Integer getK6Cases() {
		return k6Cases;
	}

	public Integer getK6Boys() {
		return k6Boys;
	}

	public Integer getK6Girls() {
		return k6Girls;
	}

	public Integer getK6TotalCICL() {
		return k6TotalCICL;
	}

	public Integer getK7Cases() {
		return k7Cases;
	}

	public Integer getK7Boys() {
		return k7Boys;
	}

	public Integer getK7Girls() {
		return k7Girls;
	}

	public Integer getK7TotalCICL() {
		return k7TotalCICL;
	}

	public Integer getK8Cases() {
		return k8Cases;
	}

	public Integer getK8Boys() {
		return k8Boys;
	}

	public Integer getK8Girls() {
		return k8Girls;
	}

	public Integer getK8TotalCICL() {
		return k8TotalCICL;
	}

	public Integer getK9Cases() {
		return k9Cases;
	}

	public Integer getK9Boys() {
		return k9Boys;
	}

	public Integer getK9Girls() {
		return k9Girls;
	}

	public Integer getK9TotalCICL() {
		return k9TotalCICL;
	}

	public Integer getK10a() {
		return k10a;
	}

	public String getK10b() {
		return k10b;
	}

	public Integer getK10cCases() {
		return k10cCases;
	}

	public Integer getK10cBoys() {
		return k10cBoys;
	}

	public Integer getK10cGirls() {
		return k10cGirls;
	}

	public Integer getK10cTotalCICL() {
		return k10cTotalCICL;
	}

	public Integer getK11a() {
		return k11a;
	}

	public String getK11b() {
		return k11b;
	}

	public Integer getK11cCases() {
		return k11cCases;
	}

	public Integer getK11cBoys() {
		return k11cBoys;
	}

	public Integer getK11cGirls() {
		return k11cGirls;
	}

	public Integer getK11cTotalCICL() {
		return k11cTotalCICL;
	}

	public Integer getK12aCases() {
		return k12aCases;
	}

	public Integer getK12aBoys() {
		return k12aBoys;
	}

	public Integer getK12aGirls() {
		return k12aGirls;
	}

	public Integer getK12aTotalCICL() {
		return k12aTotalCICL;
	}

	public Integer getK12bCases() {
		return k12bCases;
	}

	public Integer getK12bBoys() {
		return k12bBoys;
	}

	public Integer getK12bGirls() {
		return k12bGirls;
	}

	public Integer getK12bTotalCICL() {
		return k12bTotalCICL;
	}

	public Integer getK12cCases() {
		return k12cCases;
	}

	public Integer getK12cBoys() {
		return k12cBoys;
	}

	public Integer getK12cGirls() {
		return k12cGirls;
	}

	public Integer getK12cTotalCICL() {
		return k12cTotalCICL;
	}

	public Integer getK12Cases() {
		return k12Cases;
	}

	public Integer getK12Boys() {
		return k12Boys;
	}

	public Integer getK12Girls() {
		return k12Girls;
	}

	public Integer getK12TotalCICL() {
		return k12TotalCICL;
	}

	public Integer getK13aCases() {
		return k13aCases;
	}

	public Integer getK13aBoys() {
		return k13aBoys;
	}

	public Integer getK13aGirls() {
		return k13aGirls;
	}

	public Integer getK13aTotalCICL() {
		return k13aTotalCICL;
	}

	public Integer getK13bCases() {
		return k13bCases;
	}

	public Integer getK13bBoys() {
		return k13bBoys;
	}

	public Integer getK13bGirls() {
		return k13bGirls;
	}

	public Integer getK13bTotalCICL() {
		return k13bTotalCICL;
	}

	public Integer getK13cCases() {
		return k13cCases;
	}

	public Integer getK13cBoys() {
		return k13cBoys;
	}

	public Integer getK13cGirls() {
		return k13cGirls;
	}

	public Integer getK13cTotalCICL() {
		return k13cTotalCICL;
	}

	public Integer getK13dCases() {
		return k13dCases;
	}

	public Integer getK13dBoys() {
		return k13dBoys;
	}

	public Integer getK13dGirls() {
		return k13dGirls;
	}

	public Integer getK13dTotalCICL() {
		return k13dTotalCICL;
	}

	public Integer getK14aCases() {
		return k14aCases;
	}

	public Integer getK14aBoys() {
		return k14aBoys;
	}

	public Integer getK14aGirls() {
		return k14aGirls;
	}

	public Integer getK14aTotalCICL() {
		return k14aTotalCICL;
	}

	public Integer getK14bCases() {
		return k14bCases;
	}

	public Integer getK14bBoys() {
		return k14bBoys;
	}

	public Integer getK14bGirls() {
		return k14bGirls;
	}

	public Integer getK14bTotalCICL() {
		return k14bTotalCICL;
	}

	public Integer getK14cCases() {
		return k14cCases;
	}

	public Integer getK14cBoys() {
		return k14cBoys;
	}

	public Integer getK14cGirls() {
		return k14cGirls;
	}

	public Integer getK14cTotalCICL() {
		return k14cTotalCICL;
	}

	public Integer getK14dCases() {
		return k14dCases;
	}

	public Integer getK14dBoys() {
		return k14dBoys;
	}

	public Integer getK14dGirls() {
		return k14dGirls;
	}

	public Integer getK14dTotalCICL() {
		return k14dTotalCICL;
	}

	public Integer getK15aCases() {
		return k15aCases;
	}

	public Integer getK15aBoys() {
		return k15aBoys;
	}

	public Integer getK15aGirls() {
		return k15aGirls;
	}

	public Integer getK15aTotalCICL() {
		return k15aTotalCICL;
	}

	public Integer getK15bCases() {
		return k15bCases;
	}

	public Integer getK15bBoys() {
		return k15bBoys;
	}

	public Integer getK15bGirls() {
		return k15bGirls;
	}

	public Integer getK15bTotalCICL() {
		return k15bTotalCICL;
	}

	public Integer getK15cCases() {
		return k15cCases;
	}

	public Integer getK15cBoys() {
		return k15cBoys;
	}

	public Integer getK15cGirls() {
		return k15cGirls;
	}

	public Integer getK15cTotalCICL() {
		return k15cTotalCICL;
	}

	public Integer getK15dCases() {
		return k15dCases;
	}

	public Integer getK15dBoys() {
		return k15dBoys;
	}

	public Integer getK15dGirls() {
		return k15dGirls;
	}

	public Integer getK15dTotalCICL() {
		return k15dTotalCICL;
	}

	public Integer getK16aCases() {
		return k16aCases;
	}

	public Integer getK16aBoys() {
		return k16aBoys;
	}

	public Integer getK16aGirls() {
		return k16aGirls;
	}

	public Integer getK16aTotalCICL() {
		return k16aTotalCICL;
	}

	public Integer getK16bCases() {
		return k16bCases;
	}

	public Integer getK16bBoys() {
		return k16bBoys;
	}

	public Integer getK16bGirls() {
		return k16bGirls;
	}

	public Integer getK16bTotalCICL() {
		return k16bTotalCICL;
	}

	public Integer getK16cCases() {
		return k16cCases;
	}

	public Integer getK16cBoys() {
		return k16cBoys;
	}

	public Integer getK16cGirls() {
		return k16cGirls;
	}

	public Integer getK16cTotalCICL() {
		return k16cTotalCICL;
	}

	public Integer getK16dCases() {
		return k16dCases;
	}

	public Integer getK16dBoys() {
		return k16dBoys;
	}

	public Integer getK16dGirls() {
		return k16dGirls;
	}

	public Integer getK16dTotalCICL() {
		return k16dTotalCICL;
	}

	public Integer getK16eCases() {
		return k16eCases;
	}

	public Integer getK16eBoys() {
		return k16eBoys;
	}

	public Integer getK16eGirls() {
		return k16eGirls;
	}

	public Integer getK16eTotalCICL() {
		return k16eTotalCICL;
	}

	public Integer getK16fCases() {
		return k16fCases;
	}

	public Integer getK16fBoys() {
		return k16fBoys;
	}

	public Integer getK16fGirls() {
		return k16fGirls;
	}

	public Integer getK16fTotalCICL() {
		return k16fTotalCICL;
	}

	public Integer getK17aCases() {
		return k17aCases;
	}

	public Integer getK17aBoys() {
		return k17aBoys;
	}

	public Integer getK17aGirls() {
		return k17aGirls;
	}

	public Integer getK17aTotalCICL() {
		return k17aTotalCICL;
	}

	public Integer getK17bCases() {
		return k17bCases;
	}

	public Integer getK17bBoys() {
		return k17bBoys;
	}

	public Integer getK17bGirls() {
		return k17bGirls;
	}

	public Integer getK17bTotalCICL() {
		return k17bTotalCICL;
	}

	public Integer getK17cCases() {
		return k17cCases;
	}

	public Integer getK17cBoys() {
		return k17cBoys;
	}

	public Integer getK17cGirls() {
		return k17cGirls;
	}

	public Integer getK17cTotalCICL() {
		return k17cTotalCICL;
	}

	public Integer getK17dCases() {
		return k17dCases;
	}

	public Integer getK17dBoys() {
		return k17dBoys;
	}

	public Integer getK17dGirls() {
		return k17dGirls;
	}

	public Integer getK17dTotalCICL() {
		return k17dTotalCICL;
	}

	public Integer getK17eCases() {
		return k17eCases;
	}

	public Integer getK17eBoys() {
		return k17eBoys;
	}

	public Integer getK17eGirls() {
		return k17eGirls;
	}

	public Integer getK17eTotalCICL() {
		return k17eTotalCICL;
	}

	public JjbDetails getJjbDetails() {
		return jjbDetails;
	}

	public void setJjbSectionKId(Integer jjbSectionKId) {
		this.jjbSectionKId = jjbSectionKId;
	}

	public void setK1(Integer k1) {
		this.k1 = k1;
	}

	public void setK2a(Integer k2a) {
		this.k2a = k2a;
	}

	public void setK2b(Integer k2b) {
		this.k2b = k2b;
	}

	public void setK3a(Boolean k3a) {
		this.k3a = k3a;
	}

	public void setK3b(Integer k3b) {
		this.k3b = k3b;
	}

	public void setK4a(Boolean k4a) {
		this.k4a = k4a;
	}

	public void setK4b(Integer k4b) {
		this.k4b = k4b;
	}

	public void setK4c(Integer k4c) {
		this.k4c = k4c;
	}

	public void setK5aCases(Integer k5aCases) {
		this.k5aCases = k5aCases;
	}

	public void setK5aBoys(Integer k5aBoys) {
		this.k5aBoys = k5aBoys;
	}

	public void setK5aGirls(Integer k5aGirls) {
		this.k5aGirls = k5aGirls;
	}

	public void setK5aTotalCICL(Integer k5aTotalCICL) {
		this.k5aTotalCICL = k5aTotalCICL;
	}

	public void setK5b(String k5b) {
		this.k5b = k5b;
	}

	public void setK6Cases(Integer k6Cases) {
		this.k6Cases = k6Cases;
	}

	public void setK6Boys(Integer k6Boys) {
		this.k6Boys = k6Boys;
	}

	public void setK6Girls(Integer k6Girls) {
		this.k6Girls = k6Girls;
	}

	public void setK6TotalCICL(Integer k6TotalCICL) {
		this.k6TotalCICL = k6TotalCICL;
	}

	public void setK7Cases(Integer k7Cases) {
		this.k7Cases = k7Cases;
	}

	public void setK7Boys(Integer k7Boys) {
		this.k7Boys = k7Boys;
	}

	public void setK7Girls(Integer k7Girls) {
		this.k7Girls = k7Girls;
	}

	public void setK7TotalCICL(Integer k7TotalCICL) {
		this.k7TotalCICL = k7TotalCICL;
	}

	public void setK8Cases(Integer k8Cases) {
		this.k8Cases = k8Cases;
	}

	public void setK8Boys(Integer k8Boys) {
		this.k8Boys = k8Boys;
	}

	public void setK8Girls(Integer k8Girls) {
		this.k8Girls = k8Girls;
	}

	public void setK8TotalCICL(Integer k8TotalCICL) {
		this.k8TotalCICL = k8TotalCICL;
	}

	public void setK9Cases(Integer k9Cases) {
		this.k9Cases = k9Cases;
	}

	public void setK9Boys(Integer k9Boys) {
		this.k9Boys = k9Boys;
	}

	public void setK9Girls(Integer k9Girls) {
		this.k9Girls = k9Girls;
	}

	public void setK9TotalCICL(Integer k9TotalCICL) {
		this.k9TotalCICL = k9TotalCICL;
	}

	public void setK10a(Integer k10a) {
		this.k10a = k10a;
	}

	public void setK10b(String k10b) {
		this.k10b = k10b;
	}

	public void setK10cCases(Integer k10cCases) {
		this.k10cCases = k10cCases;
	}

	public void setK10cBoys(Integer k10cBoys) {
		this.k10cBoys = k10cBoys;
	}

	public void setK10cGirls(Integer k10cGirls) {
		this.k10cGirls = k10cGirls;
	}

	public void setK10cTotalCICL(Integer k10cTotalCICL) {
		this.k10cTotalCICL = k10cTotalCICL;
	}

	public void setK11a(Integer k11a) {
		this.k11a = k11a;
	}

	public void setK11b(String k11b) {
		this.k11b = k11b;
	}

	public void setK11cCases(Integer k11cCases) {
		this.k11cCases = k11cCases;
	}

	public void setK11cBoys(Integer k11cBoys) {
		this.k11cBoys = k11cBoys;
	}

	public void setK11cGirls(Integer k11cGirls) {
		this.k11cGirls = k11cGirls;
	}

	public void setK11cTotalCICL(Integer k11cTotalCICL) {
		this.k11cTotalCICL = k11cTotalCICL;
	}

	public void setK12aCases(Integer k12aCases) {
		this.k12aCases = k12aCases;
	}

	public void setK12aBoys(Integer k12aBoys) {
		this.k12aBoys = k12aBoys;
	}

	public void setK12aGirls(Integer k12aGirls) {
		this.k12aGirls = k12aGirls;
	}

	public void setK12aTotalCICL(Integer k12aTotalCICL) {
		this.k12aTotalCICL = k12aTotalCICL;
	}

	public void setK12bCases(Integer k12bCases) {
		this.k12bCases = k12bCases;
	}

	public void setK12bBoys(Integer k12bBoys) {
		this.k12bBoys = k12bBoys;
	}

	public void setK12bGirls(Integer k12bGirls) {
		this.k12bGirls = k12bGirls;
	}

	public void setK12bTotalCICL(Integer k12bTotalCICL) {
		this.k12bTotalCICL = k12bTotalCICL;
	}

	public void setK12cCases(Integer k12cCases) {
		this.k12cCases = k12cCases;
	}

	public void setK12cBoys(Integer k12cBoys) {
		this.k12cBoys = k12cBoys;
	}

	public void setK12cGirls(Integer k12cGirls) {
		this.k12cGirls = k12cGirls;
	}

	public void setK12cTotalCICL(Integer k12cTotalCICL) {
		this.k12cTotalCICL = k12cTotalCICL;
	}

	public void setK12Cases(Integer k12Cases) {
		this.k12Cases = k12Cases;
	}

	public void setK12Boys(Integer k12Boys) {
		this.k12Boys = k12Boys;
	}

	public void setK12Girls(Integer k12Girls) {
		this.k12Girls = k12Girls;
	}

	public void setK12TotalCICL(Integer k12TotalCICL) {
		this.k12TotalCICL = k12TotalCICL;
	}

	public void setK13aCases(Integer k13aCases) {
		this.k13aCases = k13aCases;
	}

	public void setK13aBoys(Integer k13aBoys) {
		this.k13aBoys = k13aBoys;
	}

	public void setK13aGirls(Integer k13aGirls) {
		this.k13aGirls = k13aGirls;
	}

	public void setK13aTotalCICL(Integer k13aTotalCICL) {
		this.k13aTotalCICL = k13aTotalCICL;
	}

	public void setK13bCases(Integer k13bCases) {
		this.k13bCases = k13bCases;
	}

	public void setK13bBoys(Integer k13bBoys) {
		this.k13bBoys = k13bBoys;
	}

	public void setK13bGirls(Integer k13bGirls) {
		this.k13bGirls = k13bGirls;
	}

	public void setK13bTotalCICL(Integer k13bTotalCICL) {
		this.k13bTotalCICL = k13bTotalCICL;
	}

	public void setK13cCases(Integer k13cCases) {
		this.k13cCases = k13cCases;
	}

	public void setK13cBoys(Integer k13cBoys) {
		this.k13cBoys = k13cBoys;
	}

	public void setK13cGirls(Integer k13cGirls) {
		this.k13cGirls = k13cGirls;
	}

	public void setK13cTotalCICL(Integer k13cTotalCICL) {
		this.k13cTotalCICL = k13cTotalCICL;
	}

	public void setK13dCases(Integer k13dCases) {
		this.k13dCases = k13dCases;
	}

	public void setK13dBoys(Integer k13dBoys) {
		this.k13dBoys = k13dBoys;
	}

	public void setK13dGirls(Integer k13dGirls) {
		this.k13dGirls = k13dGirls;
	}

	public void setK13dTotalCICL(Integer k13dTotalCICL) {
		this.k13dTotalCICL = k13dTotalCICL;
	}

	public void setK14aCases(Integer k14aCases) {
		this.k14aCases = k14aCases;
	}

	public void setK14aBoys(Integer k14aBoys) {
		this.k14aBoys = k14aBoys;
	}

	public void setK14aGirls(Integer k14aGirls) {
		this.k14aGirls = k14aGirls;
	}

	public void setK14aTotalCICL(Integer k14aTotalCICL) {
		this.k14aTotalCICL = k14aTotalCICL;
	}

	public void setK14bCases(Integer k14bCases) {
		this.k14bCases = k14bCases;
	}

	public void setK14bBoys(Integer k14bBoys) {
		this.k14bBoys = k14bBoys;
	}

	public void setK14bGirls(Integer k14bGirls) {
		this.k14bGirls = k14bGirls;
	}

	public void setK14bTotalCICL(Integer k14bTotalCICL) {
		this.k14bTotalCICL = k14bTotalCICL;
	}

	public void setK14cCases(Integer k14cCases) {
		this.k14cCases = k14cCases;
	}

	public void setK14cBoys(Integer k14cBoys) {
		this.k14cBoys = k14cBoys;
	}

	public void setK14cGirls(Integer k14cGirls) {
		this.k14cGirls = k14cGirls;
	}

	public void setK14cTotalCICL(Integer k14cTotalCICL) {
		this.k14cTotalCICL = k14cTotalCICL;
	}

	public void setK14dCases(Integer k14dCases) {
		this.k14dCases = k14dCases;
	}

	public void setK14dBoys(Integer k14dBoys) {
		this.k14dBoys = k14dBoys;
	}

	public void setK14dGirls(Integer k14dGirls) {
		this.k14dGirls = k14dGirls;
	}

	public void setK14dTotalCICL(Integer k14dTotalCICL) {
		this.k14dTotalCICL = k14dTotalCICL;
	}

	public void setK15aCases(Integer k15aCases) {
		this.k15aCases = k15aCases;
	}

	public void setK15aBoys(Integer k15aBoys) {
		this.k15aBoys = k15aBoys;
	}

	public void setK15aGirls(Integer k15aGirls) {
		this.k15aGirls = k15aGirls;
	}

	public void setK15aTotalCICL(Integer k15aTotalCICL) {
		this.k15aTotalCICL = k15aTotalCICL;
	}

	public void setK15bCases(Integer k15bCases) {
		this.k15bCases = k15bCases;
	}

	public void setK15bBoys(Integer k15bBoys) {
		this.k15bBoys = k15bBoys;
	}

	public void setK15bGirls(Integer k15bGirls) {
		this.k15bGirls = k15bGirls;
	}

	public void setK15bTotalCICL(Integer k15bTotalCICL) {
		this.k15bTotalCICL = k15bTotalCICL;
	}

	public void setK15cCases(Integer k15cCases) {
		this.k15cCases = k15cCases;
	}

	public void setK15cBoys(Integer k15cBoys) {
		this.k15cBoys = k15cBoys;
	}

	public void setK15cGirls(Integer k15cGirls) {
		this.k15cGirls = k15cGirls;
	}

	public void setK15cTotalCICL(Integer k15cTotalCICL) {
		this.k15cTotalCICL = k15cTotalCICL;
	}

	public void setK15dCases(Integer k15dCases) {
		this.k15dCases = k15dCases;
	}

	public void setK15dBoys(Integer k15dBoys) {
		this.k15dBoys = k15dBoys;
	}

	public void setK15dGirls(Integer k15dGirls) {
		this.k15dGirls = k15dGirls;
	}

	public void setK15dTotalCICL(Integer k15dTotalCICL) {
		this.k15dTotalCICL = k15dTotalCICL;
	}

	public void setK16aCases(Integer k16aCases) {
		this.k16aCases = k16aCases;
	}

	public void setK16aBoys(Integer k16aBoys) {
		this.k16aBoys = k16aBoys;
	}

	public void setK16aGirls(Integer k16aGirls) {
		this.k16aGirls = k16aGirls;
	}

	public void setK16aTotalCICL(Integer k16aTotalCICL) {
		this.k16aTotalCICL = k16aTotalCICL;
	}

	public void setK16bCases(Integer k16bCases) {
		this.k16bCases = k16bCases;
	}

	public void setK16bBoys(Integer k16bBoys) {
		this.k16bBoys = k16bBoys;
	}

	public void setK16bGirls(Integer k16bGirls) {
		this.k16bGirls = k16bGirls;
	}

	public void setK16bTotalCICL(Integer k16bTotalCICL) {
		this.k16bTotalCICL = k16bTotalCICL;
	}

	public void setK16cCases(Integer k16cCases) {
		this.k16cCases = k16cCases;
	}

	public void setK16cBoys(Integer k16cBoys) {
		this.k16cBoys = k16cBoys;
	}

	public void setK16cGirls(Integer k16cGirls) {
		this.k16cGirls = k16cGirls;
	}

	public void setK16cTotalCICL(Integer k16cTotalCICL) {
		this.k16cTotalCICL = k16cTotalCICL;
	}

	public void setK16dCases(Integer k16dCases) {
		this.k16dCases = k16dCases;
	}

	public void setK16dBoys(Integer k16dBoys) {
		this.k16dBoys = k16dBoys;
	}

	public void setK16dGirls(Integer k16dGirls) {
		this.k16dGirls = k16dGirls;
	}

	public void setK16dTotalCICL(Integer k16dTotalCICL) {
		this.k16dTotalCICL = k16dTotalCICL;
	}

	public void setK16eCases(Integer k16eCases) {
		this.k16eCases = k16eCases;
	}

	public void setK16eBoys(Integer k16eBoys) {
		this.k16eBoys = k16eBoys;
	}

	public void setK16eGirls(Integer k16eGirls) {
		this.k16eGirls = k16eGirls;
	}

	public void setK16eTotalCICL(Integer k16eTotalCICL) {
		this.k16eTotalCICL = k16eTotalCICL;
	}

	public void setK16fCases(Integer k16fCases) {
		this.k16fCases = k16fCases;
	}

	public void setK16fBoys(Integer k16fBoys) {
		this.k16fBoys = k16fBoys;
	}

	public void setK16fGirls(Integer k16fGirls) {
		this.k16fGirls = k16fGirls;
	}

	public void setK16fTotalCICL(Integer k16fTotalCICL) {
		this.k16fTotalCICL = k16fTotalCICL;
	}

	public void setK17aCases(Integer k17aCases) {
		this.k17aCases = k17aCases;
	}

	public void setK17aBoys(Integer k17aBoys) {
		this.k17aBoys = k17aBoys;
	}

	public void setK17aGirls(Integer k17aGirls) {
		this.k17aGirls = k17aGirls;
	}

	public void setK17aTotalCICL(Integer k17aTotalCICL) {
		this.k17aTotalCICL = k17aTotalCICL;
	}

	public void setK17bCases(Integer k17bCases) {
		this.k17bCases = k17bCases;
	}

	public void setK17bBoys(Integer k17bBoys) {
		this.k17bBoys = k17bBoys;
	}

	public void setK17bGirls(Integer k17bGirls) {
		this.k17bGirls = k17bGirls;
	}

	public void setK17bTotalCICL(Integer k17bTotalCICL) {
		this.k17bTotalCICL = k17bTotalCICL;
	}

	public void setK17cCases(Integer k17cCases) {
		this.k17cCases = k17cCases;
	}

	public void setK17cBoys(Integer k17cBoys) {
		this.k17cBoys = k17cBoys;
	}

	public void setK17cGirls(Integer k17cGirls) {
		this.k17cGirls = k17cGirls;
	}

	public void setK17cTotalCICL(Integer k17cTotalCICL) {
		this.k17cTotalCICL = k17cTotalCICL;
	}

	public void setK17dCases(Integer k17dCases) {
		this.k17dCases = k17dCases;
	}

	public void setK17dBoys(Integer k17dBoys) {
		this.k17dBoys = k17dBoys;
	}

	public void setK17dGirls(Integer k17dGirls) {
		this.k17dGirls = k17dGirls;
	}

	public void setK17dTotalCICL(Integer k17dTotalCICL) {
		this.k17dTotalCICL = k17dTotalCICL;
	}

	public void setK17eCases(Integer k17eCases) {
		this.k17eCases = k17eCases;
	}

	public void setK17eBoys(Integer k17eBoys) {
		this.k17eBoys = k17eBoys;
	}

	public void setK17eGirls(Integer k17eGirls) {
		this.k17eGirls = k17eGirls;
	}

	public void setK17eTotalCICL(Integer k17eTotalCICL) {
		this.k17eTotalCICL = k17eTotalCICL;
	}

	public void setJjbDetails(JjbDetails jjbDetails) {
		this.jjbDetails = jjbDetails;
	}
}
