package org.sdrc.cpmisweb.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
/**
 * 
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in) 
 * 23-Nov-2017 2:14:21 pm
 *
 */
@Entity
@Table(name = "cci_place_of_safety_training")
public class CciPlaceOfSafetyTraining {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "training_id")
	private Integer trainingId;
	
	@Column(name = "duration_training")
	private Integer durationTraining;
	
	@Column(name = "training_from_date")
	private String trainingFromDate;
	
	@Column(name = "training_to_date")
	private String trainingToDate;
	
	@Column(name="tob_high_Court")
	private Boolean tobHighCourt;

	@Column(name="tob_by_SLSA")
	private Boolean tobBySLSA;

	@Column(name="tob_state_Govt")
	private Boolean tobStateGovt;

	@Column(name="tob_others")
	private Boolean tobOthers;
	
	@Column(name="tob_others_specify")
	private String tobOthersSpecify;
	
	@Column(name="tot_JJAct")
	private Boolean totJJAct;

	@Column(name="tot_POCSOAct")
	private Boolean totPOCSOAct;

	@Column(name="tot_ChildRelatedLawsICPS")
	private Boolean totChildRelatedLawsICPS;

	@Column(name="tot_CombinedTraining")
	private Boolean totCombinedTraining;

	@Column(name="tot_CPMIS")
	private Boolean totCPMIS;

	@Column(name="tot_TrackChild")
	private Boolean totTrackChild;

	@Column(name="tot_CLTS")
	private Boolean totCLTS;

	@Column(name="tot_Others")
	private Boolean totOthers;
	
	@Column(name="tot_Others_specify")
	private String totOthersSpecify;
	
	@Column(name="tab_Cwc_Member")
	private Integer tabCwcMember;

	@Column(name="tab_Jjb_Staff")
	private Integer tabJjbStaff;

	@Column(name="tab_Dcpu_Staff")
	private Integer tabDcpuStaff;

	@Column(name="tab_Sjpu_Staff")
	private Integer tabSjpuStaff;

	@Column(name="tab_Cci_Staff")
	private Integer tabCciStaff;

	@Column(name="tab_StaffOfChildren_Court")
	private Integer tabStaffOfChildrenCourt;

	@Column(name="tab_Others")
	private Integer tabOthers;

	@Column(name="tab_Others_specify")
	private String tabOthersSpecify;
	
	@ManyToOne
	@JoinColumn(name = "parent_id")
	private CciPlaceOfSafety posId;

	public Integer getTrainingId() {
		return trainingId;
	}

	public void setTrainingId(Integer trainingId) {
		this.trainingId = trainingId;
	}

	public Integer getDurationTraining() {
		return durationTraining;
	}

	public void setDurationTraining(Integer durationTraining) {
		this.durationTraining = durationTraining;
	}

	public String getTrainingFromDate() {
		return trainingFromDate;
	}

	public void setTrainingFromDate(String trainingFromDate) {
		this.trainingFromDate = trainingFromDate;
	}

	public String getTrainingToDate() {
		return trainingToDate;
	}

	public void setTrainingToDate(String trainingToDate) {
		this.trainingToDate = trainingToDate;
	}

	public Boolean getTobHighCourt() {
		return tobHighCourt;
	}

	public void setTobHighCourt(Boolean tobHighCourt) {
		this.tobHighCourt = tobHighCourt;
	}

	public Boolean getTobBySLSA() {
		return tobBySLSA;
	}

	public void setTobBySLSA(Boolean tobBySLSA) {
		this.tobBySLSA = tobBySLSA;
	}

	public Boolean getTobStateGovt() {
		return tobStateGovt;
	}

	public void setTobStateGovt(Boolean tobStateGovt) {
		this.tobStateGovt = tobStateGovt;
	}

	public Boolean getTobOthers() {
		return tobOthers;
	}

	public void setTobOthers(Boolean tobOthers) {
		this.tobOthers = tobOthers;
	}

	public String getTobOthersSpecify() {
		return tobOthersSpecify;
	}

	public void setTobOthersSpecify(String tobOthersSpecify) {
		this.tobOthersSpecify = tobOthersSpecify;
	}

	public Boolean getTotJJAct() {
		return totJJAct;
	}

	public void setTotJJAct(Boolean totJJAct) {
		this.totJJAct = totJJAct;
	}

	public Boolean getTotPOCSOAct() {
		return totPOCSOAct;
	}

	public void setTotPOCSOAct(Boolean totPOCSOAct) {
		this.totPOCSOAct = totPOCSOAct;
	}

	public Boolean getTotChildRelatedLawsICPS() {
		return totChildRelatedLawsICPS;
	}

	public void setTotChildRelatedLawsICPS(Boolean totChildRelatedLawsICPS) {
		this.totChildRelatedLawsICPS = totChildRelatedLawsICPS;
	}

	public Boolean getTotCombinedTraining() {
		return totCombinedTraining;
	}

	public void setTotCombinedTraining(Boolean totCombinedTraining) {
		this.totCombinedTraining = totCombinedTraining;
	}

	public Boolean getTotCPMIS() {
		return totCPMIS;
	}

	public void setTotCPMIS(Boolean totCPMIS) {
		this.totCPMIS = totCPMIS;
	}

	public Boolean getTotTrackChild() {
		return totTrackChild;
	}

	public void setTotTrackChild(Boolean totTrackChild) {
		this.totTrackChild = totTrackChild;
	}

	public Boolean getTotCLTS() {
		return totCLTS;
	}

	public void setTotCLTS(Boolean totCLTS) {
		this.totCLTS = totCLTS;
	}

	public Boolean getTotOthers() {
		return totOthers;
	}

	public void setTotOthers(Boolean totOthers) {
		this.totOthers = totOthers;
	}

	public String getTotOthersSpecify() {
		return totOthersSpecify;
	}

	public void setTotOthersSpecify(String totOthersSpecify) {
		this.totOthersSpecify = totOthersSpecify;
	}

	public Integer getTabCwcMember() {
		return tabCwcMember;
	}

	public void setTabCwcMember(Integer tabCwcMember) {
		this.tabCwcMember = tabCwcMember;
	}

	public Integer getTabJjbStaff() {
		return tabJjbStaff;
	}

	public void setTabJjbStaff(Integer tabJjbStaff) {
		this.tabJjbStaff = tabJjbStaff;
	}

	public Integer getTabDcpuStaff() {
		return tabDcpuStaff;
	}

	public void setTabDcpuStaff(Integer tabDcpuStaff) {
		this.tabDcpuStaff = tabDcpuStaff;
	}

	public Integer getTabSjpuStaff() {
		return tabSjpuStaff;
	}

	public void setTabSjpuStaff(Integer tabSjpuStaff) {
		this.tabSjpuStaff = tabSjpuStaff;
	}

	public Integer getTabCciStaff() {
		return tabCciStaff;
	}

	public void setTabCciStaff(Integer tabCciStaff) {
		this.tabCciStaff = tabCciStaff;
	}

	public Integer getTabStaffOfChildrenCourt() {
		return tabStaffOfChildrenCourt;
	}

	public void setTabStaffOfChildrenCourt(Integer tabStaffOfChildrenCourt) {
		this.tabStaffOfChildrenCourt = tabStaffOfChildrenCourt;
	}

	public Integer getTabOthers() {
		return tabOthers;
	}

	public void setTabOthers(Integer tabOthers) {
		this.tabOthers = tabOthers;
	}

	public String getTabOthersSpecify() {
		return tabOthersSpecify;
	}

	public void setTabOthersSpecify(String tabOthersSpecify) {
		this.tabOthersSpecify = tabOthersSpecify;
	}

	public CciPlaceOfSafety getPosId() {
		return posId;
	}

	public void setPosId(CciPlaceOfSafety posId) {
		this.posId = posId;
	}

}
