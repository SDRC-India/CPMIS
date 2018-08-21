package org.sdrc.cpmisweb.domain.dcpu;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 20-Oct-2017
 */
@Entity
@Table(name="DCPU_Section_M")
public class DCPUSectionM {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer dcpuSectionMId;
	
	@Column
	private Integer m1aNoMeetingDCPC;

	@Column
	private String m1bDatesMeetingDCPC;

	@Column
	private Integer m2aNoMeetingDSFCAC;

	@Column
	private String  m2bDatesMeetingDSFCAC;

	@Column
	private Integer m3aNoMeetingChildLineAdvisory;

	@Column
	private String  m3bDatesMeetingChildLineAdvisory;

	@Column
	private Integer m4aNoMeetingDistrictJudges;

	@Column
	private String  m4bDatesMeetingDistrictJudges;

	@Column
	private Integer m5aNoMeetingCoordination;

	@Column
	private String  m5bDatesMeetingCoordination;

	@Column
	private Integer m6aNoMeetingAHTU;

	@Column
	private String  m6bDatesMeetingAHTU;

	@Column
	private Integer m7aNoMeetingCDPO;

	@Column
	private String  m7bDatesMeetingCDPO;

	@Column
	private Boolean m8aNoMeetingQuarterlyCWC;

	@Column
	private String  m8bDatesMeetingQuarterlyCWC;

	@Column
	private Boolean m9aNoMeetingReportDM;

	@Column
	private String  m9bDatesMeetingReportDM;

	@Column
	private Integer m10aNoOfVisits;

	@Column
	private String  m10bDatesOfVisits;

	@Column
	private Integer m11aNoOfVisits;

	@Column
	private String  m11bDatesOfVisits;

	@Column
	private Integer m12aNoOfPrograms;

	@Column
	private String  m12bDatesOfPrograms;

	@Column
	private Integer m13aNoOfActivities;

	@Column
	private String  m13bDatesOfActivities;

	@Column
	private Integer m14NoDataEntryTCP;

	@Column
	private Integer m15NoSIRsSubmittedCICL;

	@Column
	private Integer m16NoSIRsSubmittedCNCP;

	@Column
	private Integer m17NoFilledStaffDCPU;

	@Column
	private Integer m18NoCarePlanCICL;

	@Column
	private Integer m19NoCarePlanCNCP;

	@Column
	private Integer m20NoHistroyTCP;

	@Column
	private Integer m21NoIndividualTCP;

	@Column
	private Boolean m22ProgramConductedDCPU;

	@Column
	private Integer m23aOpeningBalanceFirstDay;

	@Column
	private Integer m23bTotalAmountReceived;

	@Column
	private Integer m23cTotalAmountSpent;

	@Column
	private Integer m23dClosingBalanceLastday;
	
	@OneToOne
	@JoinColumn(name="parent_id")
	private DcpuDetails dcpuDetails;

	public Integer getDcpuSectionMId() {
		return dcpuSectionMId;
	}

	public void setDcpuSectionMId(Integer dcpuSectionMId) {
		this.dcpuSectionMId = dcpuSectionMId;
	}

	public Integer getM1aNoMeetingDCPC() {
		return m1aNoMeetingDCPC;
	}

	public void setM1aNoMeetingDCPC(Integer m1aNoMeetingDCPC) {
		this.m1aNoMeetingDCPC = m1aNoMeetingDCPC;
	}

	public String getM1bDatesMeetingDCPC() {
		return m1bDatesMeetingDCPC;
	}

	public void setM1bDatesMeetingDCPC(String m1bDatesMeetingDCPC) {
		this.m1bDatesMeetingDCPC = m1bDatesMeetingDCPC;
	}

	public Integer getM2aNoMeetingDSFCAC() {
		return m2aNoMeetingDSFCAC;
	}

	public void setM2aNoMeetingDSFCAC(Integer m2aNoMeetingDSFCAC) {
		this.m2aNoMeetingDSFCAC = m2aNoMeetingDSFCAC;
	}

	public String getM2bDatesMeetingDSFCAC() {
		return m2bDatesMeetingDSFCAC;
	}

	public void setM2bDatesMeetingDSFCAC(String m2bDatesMeetingDSFCAC) {
		this.m2bDatesMeetingDSFCAC = m2bDatesMeetingDSFCAC;
	}

	public Integer getM3aNoMeetingChildLineAdvisory() {
		return m3aNoMeetingChildLineAdvisory;
	}

	public void setM3aNoMeetingChildLineAdvisory(
			Integer m3aNoMeetingChildLineAdvisory) {
		this.m3aNoMeetingChildLineAdvisory = m3aNoMeetingChildLineAdvisory;
	}

	public String getM3bDatesMeetingChildLineAdvisory() {
		return m3bDatesMeetingChildLineAdvisory;
	}

	public void setM3bDatesMeetingChildLineAdvisory(
			String m3bDatesMeetingChildLineAdvisory) {
		this.m3bDatesMeetingChildLineAdvisory = m3bDatesMeetingChildLineAdvisory;
	}

	public Integer getM4aNoMeetingDistrictJudges() {
		return m4aNoMeetingDistrictJudges;
	}

	public void setM4aNoMeetingDistrictJudges(Integer m4aNoMeetingDistrictJudges) {
		this.m4aNoMeetingDistrictJudges = m4aNoMeetingDistrictJudges;
	}

	public String getM4bDatesMeetingDistrictJudges() {
		return m4bDatesMeetingDistrictJudges;
	}

	public void setM4bDatesMeetingDistrictJudges(
			String m4bDatesMeetingDistrictJudges) {
		this.m4bDatesMeetingDistrictJudges = m4bDatesMeetingDistrictJudges;
	}

	public Integer getM5aNoMeetingCoordination() {
		return m5aNoMeetingCoordination;
	}

	public void setM5aNoMeetingCoordination(Integer m5aNoMeetingCoordination) {
		this.m5aNoMeetingCoordination = m5aNoMeetingCoordination;
	}

	public String getM5bDatesMeetingCoordination() {
		return m5bDatesMeetingCoordination;
	}

	public void setM5bDatesMeetingCoordination(String m5bDatesMeetingCoordination) {
		this.m5bDatesMeetingCoordination = m5bDatesMeetingCoordination;
	}

	public Integer getM6aNoMeetingAHTU() {
		return m6aNoMeetingAHTU;
	}

	public void setM6aNoMeetingAHTU(Integer m6aNoMeetingAHTU) {
		this.m6aNoMeetingAHTU = m6aNoMeetingAHTU;
	}

	public String getM6bDatesMeetingAHTU() {
		return m6bDatesMeetingAHTU;
	}

	public void setM6bDatesMeetingAHTU(String m6bDatesMeetingAHTU) {
		this.m6bDatesMeetingAHTU = m6bDatesMeetingAHTU;
	}

	public Integer getM7aNoMeetingCDPO() {
		return m7aNoMeetingCDPO;
	}

	public void setM7aNoMeetingCDPO(Integer m7aNoMeetingCDPO) {
		this.m7aNoMeetingCDPO = m7aNoMeetingCDPO;
	}

	public String getM7bDatesMeetingCDPO() {
		return m7bDatesMeetingCDPO;
	}

	public void setM7bDatesMeetingCDPO(String m7bDatesMeetingCDPO) {
		this.m7bDatesMeetingCDPO = m7bDatesMeetingCDPO;
	}

	public Boolean getM8aNoMeetingQuarterlyCWC() {
		return m8aNoMeetingQuarterlyCWC;
	}

	public void setM8aNoMeetingQuarterlyCWC(Boolean m8aNoMeetingQuarterlyCWC) {
		this.m8aNoMeetingQuarterlyCWC = m8aNoMeetingQuarterlyCWC;
	}

	public String getM8bDatesMeetingQuarterlyCWC() {
		return m8bDatesMeetingQuarterlyCWC;
	}

	public void setM8bDatesMeetingQuarterlyCWC(String m8bDatesMeetingQuarterlyCWC) {
		this.m8bDatesMeetingQuarterlyCWC = m8bDatesMeetingQuarterlyCWC;
	}

	public Boolean getM9aNoMeetingReportDM() {
		return m9aNoMeetingReportDM;
	}

	public void setM9aNoMeetingReportDM(Boolean m9aNoMeetingReportDM) {
		this.m9aNoMeetingReportDM = m9aNoMeetingReportDM;
	}

	public String getM9bDatesMeetingReportDM() {
		return m9bDatesMeetingReportDM;
	}

	public void setM9bDatesMeetingReportDM(String m9bDatesMeetingReportDM) {
		this.m9bDatesMeetingReportDM = m9bDatesMeetingReportDM;
	}

	public Integer getM10aNoOfVisits() {
		return m10aNoOfVisits;
	}

	public void setM10aNoOfVisits(Integer m10aNoOfVisits) {
		this.m10aNoOfVisits = m10aNoOfVisits;
	}

	public String getM10bDatesOfVisits() {
		return m10bDatesOfVisits;
	}

	public void setM10bDatesOfVisits(String m10bDatesOfVisits) {
		this.m10bDatesOfVisits = m10bDatesOfVisits;
	}

	public Integer getM11aNoOfVisits() {
		return m11aNoOfVisits;
	}

	public void setM11aNoOfVisits(Integer m11aNoOfVisits) {
		this.m11aNoOfVisits = m11aNoOfVisits;
	}

	public String getM11bDatesOfVisits() {
		return m11bDatesOfVisits;
	}

	public void setM11bDatesOfVisits(String m11bDatesOfVisits) {
		this.m11bDatesOfVisits = m11bDatesOfVisits;
	}

	public Integer getM12aNoOfPrograms() {
		return m12aNoOfPrograms;
	}

	public void setM12aNoOfPrograms(Integer m12aNoOfPrograms) {
		this.m12aNoOfPrograms = m12aNoOfPrograms;
	}

	public String getM12bDatesOfPrograms() {
		return m12bDatesOfPrograms;
	}

	public void setM12bDatesOfPrograms(String m12bDatesOfPrograms) {
		this.m12bDatesOfPrograms = m12bDatesOfPrograms;
	}

	public Integer getM13aNoOfActivities() {
		return m13aNoOfActivities;
	}

	public void setM13aNoOfActivities(Integer m13aNoOfActivities) {
		this.m13aNoOfActivities = m13aNoOfActivities;
	}

	public String getM13bDatesOfActivities() {
		return m13bDatesOfActivities;
	}

	public void setM13bDatesOfActivities(String m13bDatesOfActivities) {
		this.m13bDatesOfActivities = m13bDatesOfActivities;
	}

	public Integer getM14NoDataEntryTCP() {
		return m14NoDataEntryTCP;
	}

	public void setM14NoDataEntryTCP(Integer m14NoDataEntryTCP) {
		this.m14NoDataEntryTCP = m14NoDataEntryTCP;
	}

	public Integer getM15NoSIRsSubmittedCICL() {
		return m15NoSIRsSubmittedCICL;
	}

	public void setM15NoSIRsSubmittedCICL(Integer m15NoSIRsSubmittedCICL) {
		this.m15NoSIRsSubmittedCICL = m15NoSIRsSubmittedCICL;
	}

	public Integer getM16NoSIRsSubmittedCNCP() {
		return m16NoSIRsSubmittedCNCP;
	}

	public void setM16NoSIRsSubmittedCNCP(Integer m16NoSIRsSubmittedCNCP) {
		this.m16NoSIRsSubmittedCNCP = m16NoSIRsSubmittedCNCP;
	}

	public Integer getM17NoFilledStaffDCPU() {
		return m17NoFilledStaffDCPU;
	}

	public void setM17NoFilledStaffDCPU(Integer m17NoFilledStaffDCPU) {
		this.m17NoFilledStaffDCPU = m17NoFilledStaffDCPU;
	}

	public Integer getM18NoCarePlanCICL() {
		return m18NoCarePlanCICL;
	}

	public void setM18NoCarePlanCICL(Integer m18NoCarePlanCICL) {
		this.m18NoCarePlanCICL = m18NoCarePlanCICL;
	}

	public Integer getM19NoCarePlanCNCP() {
		return m19NoCarePlanCNCP;
	}

	public void setM19NoCarePlanCNCP(Integer m19NoCarePlanCNCP) {
		this.m19NoCarePlanCNCP = m19NoCarePlanCNCP;
	}

	public Integer getM20NoHistroyTCP() {
		return m20NoHistroyTCP;
	}

	public void setM20NoHistroyTCP(Integer m20NoHistroyTCP) {
		this.m20NoHistroyTCP = m20NoHistroyTCP;
	}

	public Integer getM21NoIndividualTCP() {
		return m21NoIndividualTCP;
	}

	public void setM21NoIndividualTCP(Integer m21NoIndividualTCP) {
		this.m21NoIndividualTCP = m21NoIndividualTCP;
	}

	public Boolean getM22ProgramConductedDCPU() {
		return m22ProgramConductedDCPU;
	}

	public void setM22ProgramConductedDCPU(Boolean m22ProgramConductedDCPU) {
		this.m22ProgramConductedDCPU = m22ProgramConductedDCPU;
	}

	public Integer getM23aOpeningBalanceFirstDay() {
		return m23aOpeningBalanceFirstDay;
	}

	public void setM23aOpeningBalanceFirstDay(Integer m23aOpeningBalanceFirstDay) {
		this.m23aOpeningBalanceFirstDay = m23aOpeningBalanceFirstDay;
	}

	public Integer getM23bTotalAmountReceived() {
		return m23bTotalAmountReceived;
	}

	public void setM23bTotalAmountReceived(Integer m23bTotalAmountReceived) {
		this.m23bTotalAmountReceived = m23bTotalAmountReceived;
	}

	public Integer getM23cTotalAmountSpent() {
		return m23cTotalAmountSpent;
	}

	public void setM23cTotalAmountSpent(Integer m23cTotalAmountSpent) {
		this.m23cTotalAmountSpent = m23cTotalAmountSpent;
	}

	public Integer getM23dClosingBalanceLastday() {
		return m23dClosingBalanceLastday;
	}

	public void setM23dClosingBalanceLastday(Integer m23dClosingBalanceLastday) {
		this.m23dClosingBalanceLastday = m23dClosingBalanceLastday;
	}

	public DcpuDetails getDcpuDetails() {
		return dcpuDetails;
	}

	public void setDcpuDetails(DcpuDetails dcpuDetails) {
		this.dcpuDetails = dcpuDetails;
	}

	
}
