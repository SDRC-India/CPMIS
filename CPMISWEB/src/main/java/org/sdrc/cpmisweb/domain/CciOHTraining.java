package org.sdrc.cpmisweb.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
@Entity
@Table(name="cci_oh_training")
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 31-Oct-2017 6:06:47 pm
 */
public class CciOHTraining {

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
		
		@Column(name = "traing_organisedby_others")
		private String traingOrganisedbyOthers;
		
		@Column(name="tot_jj_Act")
		private Boolean totJjAct;

		@Column(name="tot_posco")
		private Boolean totPosco;
		
		@Column(name="tot_child_Related_Laws")
		private Boolean totChildRelatedLaws;
		
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
		
		@Column(name="tab_superintendent")
		private Integer tabSuperintendent;

		@Column(name="tab_probationOfficer_CaseWorker")
		private Integer tabProbationOfficerCaseWorker;

		@Column(name="tab_counsellor")
		private Integer tabCounsellor;

		@Column(name="tab_house_Father_Mother")
		private Integer tabHouseFatherMother;

		@Column(name="tab_storeKeeperCumAccountant")
		private Integer tabStoreKeeperCumAccountant;

		@Column(name="tab_paramedicalStaff")
		private Integer tabParamedicalStaff;

		@Column(name="tab_others")
		private Integer tabOthers;
		
		@Column(name="tab_others_specify")
		private String tabOthersSpecify;
		
		@ManyToOne
		@JoinColumn(name="parent_id")
		CciOH homeId;

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

		public String getTraingOrganisedbyOthers() {
			return traingOrganisedbyOthers;
		}

		public void setTraingOrganisedbyOthers(String traingOrganisedbyOthers) {
			this.traingOrganisedbyOthers = traingOrganisedbyOthers;
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

		public Boolean getTotChildRelatedLaws() {
			return totChildRelatedLaws;
		}

		public void setTotChildRelatedLaws(Boolean totChildRelatedLaws) {
			this.totChildRelatedLaws = totChildRelatedLaws;
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

		public Integer getTabSuperintendent() {
			return tabSuperintendent;
		}

		public void setTabSuperintendent(Integer tabSuperintendent) {
			this.tabSuperintendent = tabSuperintendent;
		}

		public Integer getTabProbationOfficerCaseWorker() {
			return tabProbationOfficerCaseWorker;
		}

		public void setTabProbationOfficerCaseWorker(
				Integer tabProbationOfficerCaseWorker) {
			this.tabProbationOfficerCaseWorker = tabProbationOfficerCaseWorker;
		}

		public Integer getTabCounsellor() {
			return tabCounsellor;
		}

		public void setTabCounsellor(Integer tabCounsellor) {
			this.tabCounsellor = tabCounsellor;
		}

		public Integer getTabHouseFatherMother() {
			return tabHouseFatherMother;
		}

		public void setTabHouseFatherMother(Integer tabHouseFatherMother) {
			this.tabHouseFatherMother = tabHouseFatherMother;
		}

		public Integer getTabStoreKeeperCumAccountant() {
			return tabStoreKeeperCumAccountant;
		}

		public void setTabStoreKeeperCumAccountant(Integer tabStoreKeeperCumAccountant) {
			this.tabStoreKeeperCumAccountant = tabStoreKeeperCumAccountant;
		}

		public Integer getTabParamedicalStaff() {
			return tabParamedicalStaff;
		}

		public void setTabParamedicalStaff(Integer tabParamedicalStaff) {
			this.tabParamedicalStaff = tabParamedicalStaff;
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

		public CciOH getHomeId() {
			return homeId;
		}

		public void setHomeId(CciOH homeId) {
			this.homeId = homeId;
		}
		
}
