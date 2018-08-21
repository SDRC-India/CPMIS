package org.sdrc.cpmisweb.domain.cwc;

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
 * modified on: 27-Oct-2017 5:40:56 pm
 */
@Entity
@Table(name = "cwc_details_training")
public class CwcDetailsTraining {

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

	@Column(name="tot_cpmis_TrackChild_Clts")
	private Boolean totCpmisOrTrackChildOrClts;

	@Column(name="tot_others")
	private Boolean totOthers;

	@Column(name = "topic_of_training_others")
	private String topicOfTrainingOthers;

	@Column(name="tab_cwc_Chairperson")
	private Integer tabCwcChairperson;

	@Column(name="tab_members")
	private Integer tabMembers;

	@Column(name="tab_assistant_DataEntry_Operator")
	private Integer tabAssistantCumDataEntryOperator;

	@Column(name="tab_panel_Lawyer")
	private Integer tabPanelLawyer;

	@Column(name="tab_others")
	private Integer tabOthers;
	
	@Column(name = "training_attendedBy_others")
	private String trainingAttendedByOthers;

	@ManyToOne
	@JoinColumn(name = "parent_id")
	private CwcDetails cwcId;

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

	public Boolean getTotCpmisOrTrackChildOrClts() {
		return totCpmisOrTrackChildOrClts;
	}

	public void setTotCpmisOrTrackChildOrClts(Boolean totCpmisOrTrackChildOrClts) {
		this.totCpmisOrTrackChildOrClts = totCpmisOrTrackChildOrClts;
	}

	public Boolean getTotOthers() {
		return totOthers;
	}

	public void setTotOthers(Boolean totOthers) {
		this.totOthers = totOthers;
	}

	public String getTopicOfTrainingOthers() {
		return topicOfTrainingOthers;
	}

	public void setTopicOfTrainingOthers(String topicOfTrainingOthers) {
		this.topicOfTrainingOthers = topicOfTrainingOthers;
	}

	public Integer getTabCwcChairperson() {
		return tabCwcChairperson;
	}

	public void setTabCwcChairperson(Integer tabCwcChairperson) {
		this.tabCwcChairperson = tabCwcChairperson;
	}

	public Integer getTabMembers() {
		return tabMembers;
	}

	public void setTabMembers(Integer tabMembers) {
		this.tabMembers = tabMembers;
	}

	public Integer getTabAssistantCumDataEntryOperator() {
		return tabAssistantCumDataEntryOperator;
	}

	public void setTabAssistantCumDataEntryOperator(
			Integer tabAssistantCumDataEntryOperator) {
		this.tabAssistantCumDataEntryOperator = tabAssistantCumDataEntryOperator;
	}

	public Integer getTabPanelLawyer() {
		return tabPanelLawyer;
	}

	public void setTabPanelLawyer(Integer tabPanelLawyer) {
		this.tabPanelLawyer = tabPanelLawyer;
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

	public CwcDetails getCwcId() {
		return cwcId;
	}

	public void setCwcId(CwcDetails cwcId) {
		this.cwcId = cwcId;
	}

}
