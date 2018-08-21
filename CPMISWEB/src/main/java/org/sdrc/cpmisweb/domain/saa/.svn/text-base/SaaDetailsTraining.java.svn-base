/**
 * 
 */
package org.sdrc.cpmisweb.domain.saa;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 12-Dec-2017 11:18:27 am
 *
 */
@Entity
@Table(name="saa_details_training")
public class SaaDetailsTraining {

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
	
	@Column(name = "training_organisedby")
	private Integer trainingOrganisedBy;
	
	@Column(name = "training_organisedby_others")
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
	private Boolean totCPMIS;
	
	@Column(name="tot_track_child")
	private Boolean totTrackChild;
	
	@Column(name="tot_clts")
	private Boolean totCLTS;
	
	@Column(name="tot_adoption_regualation")
	private Boolean totAdoptionRegualation;
	
	@Column(name="tot_cairing")
	private Boolean totCairing;
	
	@Column(name="tot_others")
	private Boolean totOthers;
	
	@Column(name="tot_others_specify")
	private String totOthersSpecify;
	
	@Column(name="tab_manager_coordinator")
	private Boolean tabManagerCoordinator;
	
	@Column(name="tab_social_worker_childhood_educator")
	private Boolean tabSocialWorkerChildhoodEducator;
	
	@Column(name="tab_nurse")
	private Boolean tabNurse;
	
	@Column(name="tab_doctor")
	private Boolean tabDoctor;
	
	@Column(name="tab_ayah")
	private Boolean tabAyah;
	
	@Column(name="tab_chowkidar")
	private Boolean tabChowkidar;
	
	@Column(name="tab_others")
	private Boolean tabOthers;
	
	@Column(name="tab_others_specify")
	private String tabOthersSpecify;
	
	@ManyToOne
//	@JoinColumn(referencedColumnName="id", name="saa_details_id")
	@JoinColumn(name="saa_details_id")
	private SaaDetails saaId;

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

	public Boolean getTotAdoptionRegualation() {
		return totAdoptionRegualation;
	}

	public void setTotAdoptionRegualation(Boolean totAdoptionRegualation) {
		this.totAdoptionRegualation = totAdoptionRegualation;
	}

	public Boolean getTotCairing() {
		return totCairing;
	}

	public void setTotCairing(Boolean totCairing) {
		this.totCairing = totCairing;
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

	public Boolean getTabManagerCoordinator() {
		return tabManagerCoordinator;
	}

	public void setTabManagerCoordinator(Boolean tabManagerCoordinator) {
		this.tabManagerCoordinator = tabManagerCoordinator;
	}

	public Boolean getTabSocialWorkerChildhoodEducator() {
		return tabSocialWorkerChildhoodEducator;
	}

	public void setTabSocialWorkerChildhoodEducator(
			Boolean tabSocialWorkerChildhoodEducator) {
		this.tabSocialWorkerChildhoodEducator = tabSocialWorkerChildhoodEducator;
	}

	public Boolean getTabNurse() {
		return tabNurse;
	}

	public void setTabNurse(Boolean tabNurse) {
		this.tabNurse = tabNurse;
	}

	public Boolean getTabDoctor() {
		return tabDoctor;
	}

	public void setTabDoctor(Boolean tabDoctor) {
		this.tabDoctor = tabDoctor;
	}

	public Boolean getTabAyah() {
		return tabAyah;
	}

	public void setTabAyah(Boolean tabAyah) {
		this.tabAyah = tabAyah;
	}

	public Boolean getTabChowkidar() {
		return tabChowkidar;
	}

	public void setTabChowkidar(Boolean tabChowkidar) {
		this.tabChowkidar = tabChowkidar;
	}

	public Boolean getTabOthers() {
		return tabOthers;
	}

	public void setTabOthers(Boolean tabOthers) {
		this.tabOthers = tabOthers;
	}

	public String getTabOthersSpecify() {
		return tabOthersSpecify;
	}

	public void setTabOthersSpecify(String tabOthersSpecify) {
		this.tabOthersSpecify = tabOthersSpecify;
	}

	public SaaDetails getSaaId() {
		return saaId;
	}

	public void setSaaId(SaaDetails saaId) {
		this.saaId = saaId;
	}

}
