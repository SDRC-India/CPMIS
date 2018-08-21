/**
 * 
 */
package org.sdrc.cpmisweb.domain.sjpu;

import java.util.Date;
import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

import org.sdrc.cpmisweb.domain.Timeperiod;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 20-Oct-2017 11:20:50 am
 *
 */
@Entity
@Table(name = "sjpu_details")
public class SjpuDetails {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer id;
	
	@Column
	private boolean isLive;
	
	@Column
	private Integer userId;
	
	@Column
	private boolean isSubmitted;
	
	@OneToMany(fetch = FetchType.EAGER, mappedBy="sjpuId")
	private List<SjpuTraining> sjpuTrainings;

	// Section Starts

	@OneToOne(cascade = CascadeType.ALL)
	private SjpuSectionA sjpuSectionA;

	@OneToOne(cascade = CascadeType.ALL)
	private SjpuSectionB sjpuSectionB;

	@OneToOne(cascade = CascadeType.ALL)
	private SjpuSectionC sjpuSectionC;

	@OneToOne(cascade = CascadeType.ALL)
	private SjpuSectionD sjpuSectionD;

	@OneToOne(cascade = CascadeType.ALL)
	private SjpuSectionE sjpuSectionE;

	@OneToOne(cascade = CascadeType.ALL)
	private SjpuSectionF sjpuSectionF;
	
	@Column(name="date_of_submission")
	private Date dateOfSubmimission;
	
	@Column(name="last_save_date")
	@Temporal(value = TemporalType.TIMESTAMP)
	private Date lastSaveDate = new Date();
	
	@Column(name="month_year")
	private Date monthyear;
	
	@Column(name="district_Id")
	private Integer districtId;
	
	@Column(name="name_of_authorised_person")
	private String nameOfAuthorisedPerson;
	
	@Column(name="designation")
	private String designation;
	
	@Column(name="date_of_entry")
	private Date dateOfEntry;
	
	@Column(name="office_address")
	private String officeAddress;
	
	@Column(name="office_telephone_no")
	private String officeTelephoneNo;
	
	@Column(name="office_email_id")
	private String officeEmailId;
	
	@Column(name="no_of_police_stations")
	private Integer noOfPoliceStations;
	
	@Column(name="no_of_ps_submitted_report")
	private Integer noOfPsSubmittedReport;
	
	@Column(name="name_of_dy_sp")
	private String nameOfDySp;
	
	@Column(name="mobile_number")
	private String mobileNumber;
	
	@Column(name="g1_Training")
	private Boolean g1Training;
	
	@Column(name="g1a_NoOfTrainings")
	private Integer g1aNoOfTrainings;
	
	@ManyToOne
    @JoinColumn(name="timeperiod_id_fk")
	private Timeperiod timeperiod;

	public Integer getId() {
		return id;
	}

	public boolean isLive() {
		return isLive;
	}

	public void setLive(boolean isLive) {
		this.isLive = isLive;
	}

	public Integer getUserId() {
		return userId;
	}

	public void setUserId(Integer userId) {
		this.userId = userId;
	}

	public boolean isSubmitted() {
		return isSubmitted;
	}

	public void setSubmitted(boolean isSubmitted) {
		this.isSubmitted = isSubmitted;
	}

	public List<SjpuTraining> getSjpuTrainings() {
		return sjpuTrainings;
	}

	public void setSjpuTrainings(List<SjpuTraining> sjpuTrainings) {
		this.sjpuTrainings = sjpuTrainings;
	}

	public SjpuSectionA getSjpuSectionA() {
		return sjpuSectionA;
	}

	public void setSjpuSectionA(SjpuSectionA sjpuSectionA) {
		this.sjpuSectionA = sjpuSectionA;
	}

	public SjpuSectionB getSjpuSectionB() {
		return sjpuSectionB;
	}

	public void setSjpuSectionB(SjpuSectionB sjpuSectionB) {
		this.sjpuSectionB = sjpuSectionB;
	}

	public SjpuSectionC getSjpuSectionC() {
		return sjpuSectionC;
	}

	public void setSjpuSectionC(SjpuSectionC sjpuSectionC) {
		this.sjpuSectionC = sjpuSectionC;
	}

	public SjpuSectionD getSjpuSectionD() {
		return sjpuSectionD;
	}

	public void setSjpuSectionD(SjpuSectionD sjpuSectionD) {
		this.sjpuSectionD = sjpuSectionD;
	}

	public SjpuSectionE getSjpuSectionE() {
		return sjpuSectionE;
	}

	public void setSjpuSectionE(SjpuSectionE sjpuSectionE) {
		this.sjpuSectionE = sjpuSectionE;
	}

	public SjpuSectionF getSjpuSectionF() {
		return sjpuSectionF;
	}

	public void setSjpuSectionF(SjpuSectionF sjpuSectionF) {
		this.sjpuSectionF = sjpuSectionF;
	}

	public Date getDateOfSubmimission() {
		return dateOfSubmimission;
	}

	public void setDateOfSubmimission(Date dateOfSubmimission) {
		this.dateOfSubmimission = dateOfSubmimission;
	}

	public Date getLastSaveDate() {
		return lastSaveDate;
	}

	public Date getMonthyear() {
		return monthyear;
	}

	public void setMonthyear(Date monthyear) {
		this.monthyear = monthyear;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public String getNameOfAuthorisedPerson() {
		return nameOfAuthorisedPerson;
	}

	public void setNameOfAuthorisedPerson(String nameOfAuthorisedPerson) {
		this.nameOfAuthorisedPerson = nameOfAuthorisedPerson;
	}

	public String getDesignation() {
		return designation;
	}

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public Date getDateOfEntry() {
		return dateOfEntry;
	}

	public void setDateOfEntry(Date dateOfEntry) {
		this.dateOfEntry = dateOfEntry;
	}

	public String getOfficeAddress() {
		return officeAddress;
	}

	public void setOfficeAddress(String officeAddress) {
		this.officeAddress = officeAddress;
	}

	public String getOfficeTelephoneNo() {
		return officeTelephoneNo;
	}

	public void setOfficeTelephoneNo(String officeTelephoneNo) {
		this.officeTelephoneNo = officeTelephoneNo;
	}

	public String getOfficeEmailId() {
		return officeEmailId;
	}

	public void setOfficeEmailId(String officeEmailId) {
		this.officeEmailId = officeEmailId;
	}

	public Integer getNoOfPoliceStations() {
		return noOfPoliceStations;
	}

	public void setNoOfPoliceStations(Integer noOfPoliceStations) {
		this.noOfPoliceStations = noOfPoliceStations;
	}

	public Integer getNoOfPsSubmittedReport() {
		return noOfPsSubmittedReport;
	}

	public void setNoOfPsSubmittedReport(Integer noOfPsSubmittedReport) {
		this.noOfPsSubmittedReport = noOfPsSubmittedReport;
	}

	public String getNameOfDySp() {
		return nameOfDySp;
	}

	public void setNameOfDySp(String nameOfDySp) {
		this.nameOfDySp = nameOfDySp;
	}

	public String getMobileNumber() {
		return mobileNumber;
	}

	public void setMobileNumber(String mobileNumber) {
		this.mobileNumber = mobileNumber;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public Boolean getG1Training() {
		return g1Training;
	}

	public void setG1Training(Boolean g1Training) {
		this.g1Training = g1Training;
	}

	public Integer getG1aNoOfTrainings() {
		return g1aNoOfTrainings;
	}

	public void setG1aNoOfTrainings(Integer g1aNoOfTrainings) {
		this.g1aNoOfTrainings = g1aNoOfTrainings;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}
	
}
