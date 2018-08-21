package org.sdrc.cpmisweb.domain.dcpu;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 20-Oct-2017
 */
@Entity
@Table(name="DCPU_Details_Training")
public class DCPUDetailsTraining {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "training_id")
	private Integer trainingId;

	@Column(name = "duration_of_training")
	private Integer durationOfTraining;

	@Column(name = "training_from")
	private String trainingFrom;

	@Column(name = "training_to")
	private String trainingTo;

	@Column(name = "training_organised_by")
	private Integer trainingOrganisedBy;

	@Column(name = "training_organised_by_others")
	private String trainingOrganisedByOthers;

	@Column(name="tot_jj_Act")
	private Boolean totJjAct;

	@Column(name="tot_posco")
	private Boolean totPosco;

	@Column(name="tot_child_Related_Laws_ICPS")
	private Boolean totChildRelatedLawsICPS;

	@Column(name="tot_combined_Training")
	private Boolean totCombinedTraining;

	@Column(name="tot_cpmis")
	private Boolean totCpmis;
	
	@Column(name="tot_TrackChild")
	private Boolean totTrackChild;
	
	@Column(name="tot_Clts")
	private Boolean totClts;

	@Column(name="tot_others")
	private Boolean totOthers;

	@Column(name = "tot_others_specify")
	private String totOthersSpecify;

	@Column(name="tab_CWC_members_Staff")
	private Integer tabCWCMembersStaff;

	@Column(name="tab_JJB_Members_Staff")
	private Integer tabJJBMembersStaff;

	@Column(name="tab_DCPU_Functionaries")
	private Integer tabDCPUFunctionaries;

	@Column(name="tab_SJPU_Functionaries")
	private Integer tabSJPUFunctionaries;

	@Column(name="tab_CCI_Functionaries")
	private Integer tabCCIFunctionaries;

	@Column(name="tab_Children_Court_Functionaries")
	private Integer tabChildrenCourtFunctionaries;

	@Column(name="tab_others")
	private Integer tabOthers;
	
	@Column(name = "training_attendedBy_others")
	private String trainingAttendedByOthers;

	@ManyToOne
	@JoinColumn(name="parent_id")
	private DcpuDetails dcpuId;

	public Integer getTrainingId() {
		return trainingId;
	}

	public void setTrainingId(Integer trainingId) {
		this.trainingId = trainingId;
	}

	public Integer getDurationOfTraining() {
		return durationOfTraining;
	}

	public void setDurationOfTraining(Integer durationOfTraining) {
		this.durationOfTraining = durationOfTraining;
	}

	public String getTrainingFrom() {
		return trainingFrom;
	}

	public void setTrainingFrom(String trainingFrom) {
		this.trainingFrom = trainingFrom;
	}

	public String getTrainingTo() {
		return trainingTo;
	}

	public void setTrainingTo(String trainingTo) {
		this.trainingTo = trainingTo;
	}

	public Integer getTrainingOrganisedBy() {
		return trainingOrganisedBy;
	}

	public void setTrainingOrganisedBy(Integer trainingOrganisedBy) {
		this.trainingOrganisedBy = trainingOrganisedBy;
	}

	public String getTrainingOrganisedByOthers() {
		return trainingOrganisedByOthers;
	}

	public void setTrainingOrganisedByOthers(String trainingOrganisedByOthers) {
		this.trainingOrganisedByOthers = trainingOrganisedByOthers;
	}

	public Boolean getTotJjAct() {
		return totJjAct;
	}

	public void setTotJjAct(Boolean totJjAct) {
		this.totJjAct = totJjAct;
	}

	public Boolean getTotPosco() {
		return totPosco;
	}

	public void setTotPosco(Boolean totPosco) {
		this.totPosco = totPosco;
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

	public Boolean getTotCpmis() {
		return totCpmis;
	}

	public void setTotCpmis(Boolean totCpmis) {
		this.totCpmis = totCpmis;
	}

	public Boolean getTotTrackChild() {
		return totTrackChild;
	}

	public void setTotTrackChild(Boolean totTrackChild) {
		this.totTrackChild = totTrackChild;
	}

	public Boolean getTotClts() {
		return totClts;
	}

	public void setTotClts(Boolean totClts) {
		this.totClts = totClts;
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

	public Integer getTabCWCMembersStaff() {
		return tabCWCMembersStaff;
	}

	public void setTabCWCMembersStaff(Integer tabCWCMembersStaff) {
		this.tabCWCMembersStaff = tabCWCMembersStaff;
	}

	public Integer getTabJJBMembersStaff() {
		return tabJJBMembersStaff;
	}

	public void setTabJJBMembersStaff(Integer tabJJBMembersStaff) {
		this.tabJJBMembersStaff = tabJJBMembersStaff;
	}

	public Integer getTabDCPUFunctionaries() {
		return tabDCPUFunctionaries;
	}

	public void setTabDCPUFunctionaries(Integer tabDCPUFunctionaries) {
		this.tabDCPUFunctionaries = tabDCPUFunctionaries;
	}

	public Integer getTabSJPUFunctionaries() {
		return tabSJPUFunctionaries;
	}

	public void setTabSJPUFunctionaries(Integer tabSJPUFunctionaries) {
		this.tabSJPUFunctionaries = tabSJPUFunctionaries;
	}

	public Integer getTabCCIFunctionaries() {
		return tabCCIFunctionaries;
	}

	public void setTabCCIFunctionaries(Integer tabCCIFunctionaries) {
		this.tabCCIFunctionaries = tabCCIFunctionaries;
	}

	public Integer getTabChildrenCourtFunctionaries() {
		return tabChildrenCourtFunctionaries;
	}

	public void setTabChildrenCourtFunctionaries(
			Integer tabChildrenCourtFunctionaries) {
		this.tabChildrenCourtFunctionaries = tabChildrenCourtFunctionaries;
	}

	public Integer getTabOthers() {
		return tabOthers;
	}

	public void setTabOthers(Integer tabOthers) {
		this.tabOthers = tabOthers;
	}

	public String getTrainingAttendedByOthers() {
		return trainingAttendedByOthers;
	}

	public void setTrainingAttendedByOthers(String trainingAttendedByOthers) {
		this.trainingAttendedByOthers = trainingAttendedByOthers;
	}

	public DcpuDetails getDcpuId() {
		return dcpuId;
	}

	public void setDcpuId(DcpuDetails dcpuId) {
		this.dcpuId = dcpuId;
	}
			
}
