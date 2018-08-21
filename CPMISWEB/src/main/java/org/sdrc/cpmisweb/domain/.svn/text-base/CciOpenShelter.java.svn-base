package org.sdrc.cpmisweb.domain;

import java.util.Date;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
/**
 * Biswa Ranjan, Pratyush
 */
@Entity
@Table(name="cci_open_shelter")
public class CciOpenShelter {
	
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private Integer id;

	@OneToMany(fetch = FetchType.EAGER, mappedBy="id")
	List<CciOpenShelterTraining> cciOpenShelterTrainings;
	
	// Extra columns add starts
	@Column(name = "is_live")
	private boolean isLive;

	@Column(name = "user_id")
	private Integer userId;

	@Column(name = "is_submitted")
	private boolean isSubmitted;

	@Column(name = "date_of_submission")
	private Date dateOfSubmimission;

	@Column(name = "last_save_date")
	@Temporal(value = TemporalType.TIMESTAMP)
	private Date lastSaveDate = new Date();
	// Extra columns add ends

	@Column(name = "name_of_person")
	private String nameOfPerson;

	@Column(name = "designation")
	private String designation;

	@Column(name = "month_and_year")
	private Date monthyear;

	@Column(name = "state_name")
	private String stateName;

	@Column(name = "district_id")
	private Integer districtId;

	@Column(name = "type_of_home")
	private String typeOfHome;

	@Column(name = "name_of_cci")
	private String nameOfCCI;

	@Column(name = "type_of_institutions")
	private Integer typeOfInstitutions;

	@Column(name = "govt_nongovt")
	private Integer govtNonGovt;

	@Column(name = "capacity_of_home")
	private Integer capacityOfHome;

	@Column
	private Integer aYears0to6;

	@Column
	private Integer aYears7to11;

	@Column
	private Integer aYears12to15;

	@Column
	private Integer aYears16to18;

	@Column
	private Integer aYearsGreaterThan18;

	@Column
	private Integer aTotal;						

	@Column
	private Integer b1Years0to6;

	@Column
	private Integer b1Years7to11;

	@Column
	private Integer b1Years12to15;

	@Column
	private Integer b1Years16to18;

	@Column
	private Integer b1YearsGreaterThan18;

	@Column
	private Integer b1Total;						

	@Column
	private Integer b2Years0to6;

	@Column
	private Integer b2Years7to11;

	@Column
	private Integer b2Years12to15;

	@Column
	private Integer b2Years16to18;

	@Column
	private Integer b2YearsGreaterThan18;

	@Column
	private Integer b2Total;						

	@Column
	private Integer b3Years0to6;

	@Column
	private Integer b3Years7to11;

	@Column
	private Integer b3Years12to15;

	@Column
	private Integer b3Years16to18;

	@Column
	private Integer b3YearsGreaterThan18;

	@Column
	private Integer b3Total;						

	@Column
	private Integer cYears0to6;

	@Column
	private Integer cYears7to11;

	@Column
	private Integer cYears12to15;

	@Column
	private Integer cYears16to18;

	@Column
	private Integer cYearsGreaterThan18;

	@Column
	private Integer cTotal;

	@Column
	private Integer d1Years0to6;

	@Column
	private Integer d1Years7to11;

	@Column
	private Integer d1Years12to15;

	@Column
	private Integer d1Years16to18;

	@Column
	private Integer d1YearsGreaterThan18;

	@Column
	private Integer d1Total;

	@Column
	private Integer d2Years0to6;

	@Column
	private Integer d2Years7to11;

	@Column
	private Integer d2Years12to15;

	@Column
	private Integer d2Years16to18;

	@Column
	private Integer d2YearsGreaterThan18;

	@Column
	private Integer d2Total;

	@Column
	private Integer d3Years0to6;

	@Column
	private Integer d3Years7to11;

	@Column
	private Integer d3Years12to15;

	@Column
	private Integer d3Years16to18;

	@Column
	private Integer d3YearsGreaterThan18;

	@Column
	private Integer d3Total;

	@Column
	private Integer d4Years0to6;

	@Column
	private Integer d4Years7to11;

	@Column
	private Integer d4Years12to15;

	@Column
	private Integer d4Years16to18;

	@Column
	private Integer d4YearsGreaterThan18;

	@Column
	private Integer d4Total;

	@Column
	private Integer d5Years0to6;

	@Column
	private Integer d5Years7to11;

	@Column
	private Integer d5Years12to15;

	@Column
	private Integer d5Years16to18;

	@Column
	private Integer d5YearsGreaterThan18;

	@Column
	private Integer d5Total;

	@Column
	private Integer d6Years0to6;

	@Column
	private Integer d6Years7to11;

	@Column
	private Integer d6Years12to15;

	@Column
	private Integer d6Years16to18;

	@Column
	private Integer d6YearsGreaterThan18;

	@Column
	private Integer d6Total;

	@Column
	private String d6aSpecifyothers;

	@Column
	private Integer d7Years0to6;

	@Column
	private Integer d7Years7to11;

	@Column
	private Integer d7Years12to15;

	@Column
	private Integer d7Years16to18;

	@Column
	private Integer d7YearsGreaterThan18;

	@Column
	private Integer d7Total;

	@Column
	private Integer eYears0to6;

	@Column
	private Integer eYears7to11;

	@Column
	private Integer eYears12to15;

	@Column
	private Integer eYears16to18;

	@Column
	private Integer eYearsGreaterThan18;

	@Column
	private Integer eTotal;

	@Column
	private Integer fST;

	@Column
	private Integer fSC;

	@Column
	private Integer fOBC;

	@Column
	private Integer fEBC;

	@Column
	private Integer fOthers;

	@Column
	private Integer fNotKnown;

	@Column
	private Integer fTotal;

	@Column
	private Integer fMinority;

	@Column
	private Integer g1Years0to6;

	@Column
	private Integer g1Years7to11;

	@Column
	private Integer g1Years12to15;

	@Column
	private Integer g1Years16to18;

	@Column
	private Integer g1YearsGreaterThan18;

	@Column
	private Integer g1Total;

	@Column
	private Integer g2Years0to6;

	@Column
	private Integer g2Years7to11;

	@Column
	private Integer g2Years12to15;

	@Column
	private Integer g2Years16to18;

	@Column
	private Integer g2YearsGreaterThan18;

	@Column
	private Integer g2Total;

	@Column
	private Integer g3Years0to6;

	@Column
	private Integer g3Years7to11;

	@Column
	private Integer g3Years12to15;

	@Column
	private Integer g3Years16to18;

	@Column
	private Integer g3YearsGreaterThan18;

	@Column
	private Integer g3Total;

	@Column
	private Integer g4Years0to6;

	@Column
	private Integer g4Years7to11;

	@Column
	private Integer g4Years12to15;

	@Column
	private Integer g4Years16to18;

	@Column
	private Integer g4YearsGreaterThan18;

	@Column
	private Integer g4Total;

	@Column
	private Integer g5Years0to6;

	@Column
	private Integer g5Years7to11;

	@Column
	private Integer g5Years12to15;

	@Column
	private Integer g5Years16to18;

	@Column
	private Integer g5YearsGreaterThan18;

	@Column
	private Integer g5Total;

	@Column
	private Integer g6Years0to6;

	@Column
	private Integer g6Years7to11;

	@Column
	private Integer g6Years12to15;

	@Column
	private Integer g6Years16to18;

	@Column
	private Integer g6YearsGreaterThan18;

	@Column
	private Integer g6Total;

	@Column
	private Integer g7Years0to6;

	@Column
	private Integer g7Years7to11;

	@Column
	private Integer g7Years12to15;

	@Column
	private Integer g7Years16to18;

	@Column
	private Integer g7YearsGreaterThan18;

	@Column
	private Integer g7Total;

	@Column
	private Integer h1Years0to6;

	@Column
	private Integer h1Years7to11;

	@Column
	private Integer h1Years12to15;

	@Column
	private Integer h1Years16to18;

	@Column
	private Integer h1YearsGreaterThan18;

	@Column
	private Integer h1Total;

	@Column
	private Integer h2Years0to6;

	@Column
	private Integer h2Years7to11;

	@Column
	private Integer h2Years12to15;

	@Column
	private Integer h2Years16to18;

	@Column
	private Integer h2YearsGreaterThan18;

	@Column
	private Integer h2Total;

	@Column
	private Integer h3Years0to6;

	@Column
	private Integer h3Years7to11;

	@Column
	private Integer h3Years12to15;

	@Column
	private Integer h3Years16to18;

	@Column
	private Integer h3YearsGreaterThan18;

	@Column
	private Integer h3Total;

	@Column
	private Integer h4Years0to6;

	@Column
	private Integer h4Years7to11;

	@Column
	private Integer h4Years12to15;

	@Column
	private Integer h4Years16to18;

	@Column
	private Integer h4YearsGreaterThan18;

	@Column
	private Integer h4Total;

	@Column
	private Integer h5Years0to6;

	@Column
	private Integer h5Years7to11;

	@Column
	private Integer h5Years12to15;

	@Column
	private Integer h5Years16to18;

	@Column
	private Integer h5YearsGreaterThan18;

	@Column
	private Integer h5Total;

	@Column
	private Integer i1DaysLessThan15;

	@Column
	private Integer i1Days16to30;

	@Column
	private Integer i1Months1to3;

	@Column
	private Integer i1MonthsgreaterThan3;

	@Column
	private Integer i1Total;

	@Column
	private Integer i2DaysLessThan15;

	@Column
	private Integer i2Days16to30;

	@Column
	private Integer i2Total;

	@Column
	private Integer i3DaysLessThan15;

	@Column
	private Integer i3Days16to30;

	@Column
	private Integer i3Months1to3;

	@Column
	private Integer i3MonthsgreaterThan3;

	@Column
	private Integer i3Total;

	@Column
	private Integer i4DaysLessThan15;

	@Column
	private Integer i4Days16to30;

	@Column
	private Integer i4Months1to3;

	@Column
	private Integer i4MonthsgreaterThan3;

	@Column
	private Integer i4Total;

	@Column
	private Integer j1Total0to30Days;

	@Column
	private Integer j1TotalMonths1to2;

	@Column
	private Integer j1TotalMonths2to3;

	@Column
	private Integer j1TotalMonths3to4;

	@Column
	private Integer j1TotalMonths4to12;

	@Column
	private Integer j1TotalMonthsMoreThan1Year;

	@Column
	private Integer j1TotalNumberTotal;

	@Column
	private Integer j2Total0to30Days;

	@Column
	private Integer j2TotalMonths1to2;

	@Column
	private Integer j2TotalMonths2to3;

	@Column
	private Integer j2TotalMonths3to4;

	@Column
	private Integer j2TotalMonths4to12;

	@Column
	private Integer j2TotalMonthsMoreThan1Year;

	@Column
	private Integer j2TotalNumberTotal;

	@Column
	private Integer j3Total0to30Days;

	@Column
	private Integer j3TotalMonths1to2;

	@Column
	private Integer j3TotalMonths2to3;

	@Column
	private Integer j3TotalMonths3to4;

	@Column
	private Integer j3TotalMonths4to12;

	@Column
	private Integer j3TotalMonthsMoreThan1Year;

	@Column
	private Integer j3TotalNumberTotal;

	@Column
	private Integer j4Total0to30Days;

	@Column
	private Integer j4TotalMonths1to2;

	@Column
	private Integer j4TotalMonths2to3;

	@Column
	private Integer j4TotalMonths3to4;

	@Column
	private Integer j4TotalMonths4to12;

	@Column
	private Integer j4TotalMonthsMoreThan1Year;

	@Column
	private Integer j4TotalNumberTotal;

	@Column
	private Integer k1;

	@Column
	private Integer k2;

	@Column
	private Integer k3;

	@Column
	private Integer k4;

	@Column
	private Integer k5;

	@Column
	private Integer k6;

	@Column
	private Integer k7;

	@Column
	private Integer k8;

	@Column
	private Integer k9;

	@Column
	private Integer k10;

	@Column
	private Integer k11;

	@Column
	private Integer k12;

	@Column
	private Integer k13;

	@Column
	private Integer k14;

	@Column
	private Boolean k15aMeetingChildrenCommittee;

	@Column
	private String k15bCcMeetingDate;

	@Column
	private Boolean k16aMeetingHomeManagementCommittee;

	@Column
	private String k16bHmMeetingDate;

	@Column
	private Boolean k17aAnyOthersDetails;

	@Column
	private String k17bOtherDetailsDate;
	
	@Column
	private Boolean l1WastrainingHeld;
	
	@ManyToOne
    @JoinColumn(name="timeperiod_id_fk")
	private Timeperiod timeperiod;
	
	public Boolean getL1WastrainingHeld() {
		return l1WastrainingHeld;
	}

	public void setL1WastrainingHeld(Boolean l1WastrainingHeld) {
		this.l1WastrainingHeld = l1WastrainingHeld;
	}

	@Column
	private Integer l1aNoTrainingHeld;

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public List<CciOpenShelterTraining> getCciOpenShelterTrainings() {
		return cciOpenShelterTrainings;
	}

	public void setCciOpenShelterTrainings(
			List<CciOpenShelterTraining> cciOpenShelterTrainings) {
		this.cciOpenShelterTrainings = cciOpenShelterTrainings;
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

	public Date getDateOfSubmimission() {
		return dateOfSubmimission;
	}

	public void setDateOfSubmimission(Date dateOfSubmimission) {
		this.dateOfSubmimission = dateOfSubmimission;
	}

	public Date getLastSaveDate() {
		return lastSaveDate;
	}

	public String getNameOfPerson() {
		return nameOfPerson;
	}

	public void setNameOfPerson(String nameOfPerson) {
		this.nameOfPerson = nameOfPerson;
	}

	public String getDesignation() {
		return designation;
	}

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public Date getMonthyear() {
		return monthyear;
	}

	public void setMonthyear(Date monthyear) {
		this.monthyear = monthyear;
	}

	public String getStateName() {
		return stateName;
	}

	public void setStateName(String stateName) {
		this.stateName = stateName;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public String getTypeOfHome() {
		return typeOfHome;
	}

	public void setTypeOfHome(String typeOfHome) {
		this.typeOfHome = typeOfHome;
	}

	public String getNameOfCCI() {
		return nameOfCCI;
	}

	public void setNameOfCCI(String nameOfCCI) {
		this.nameOfCCI = nameOfCCI;
	}

	public Integer getTypeOfInstitutions() {
		return typeOfInstitutions;
	}

	public void setTypeOfInstitutions(Integer typeOfInstitutions) {
		this.typeOfInstitutions = typeOfInstitutions;
	}

	public Integer getGovtNonGovt() {
		return govtNonGovt;
	}

	public void setGovtNonGovt(Integer govtNonGovt) {
		this.govtNonGovt = govtNonGovt;
	}

	public Integer getCapacityOfHome() {
		return capacityOfHome;
	}

	public void setCapacityOfHome(Integer capacityOfHome) {
		this.capacityOfHome = capacityOfHome;
	}

	public Integer getaYears0to6() {
		return aYears0to6;
	}

	public void setaYears0to6(Integer aYears0to6) {
		this.aYears0to6 = aYears0to6;
	}

	public Integer getaYears7to11() {
		return aYears7to11;
	}

	public void setaYears7to11(Integer aYears7to11) {
		this.aYears7to11 = aYears7to11;
	}

	public Integer getaYears12to15() {
		return aYears12to15;
	}

	public void setaYears12to15(Integer aYears12to15) {
		this.aYears12to15 = aYears12to15;
	}

	public Integer getaYears16to18() {
		return aYears16to18;
	}

	public void setaYears16to18(Integer aYears16to18) {
		this.aYears16to18 = aYears16to18;
	}

	public Integer getaYearsGreaterThan18() {
		return aYearsGreaterThan18;
	}

	public void setaYearsGreaterThan18(Integer aYearsGreaterThan18) {
		this.aYearsGreaterThan18 = aYearsGreaterThan18;
	}

	public Integer getaTotal() {
		return aTotal;
	}

	public void setaTotal(Integer aTotal) {
		this.aTotal = aTotal;
	}

	public Integer getB1Years0to6() {
		return b1Years0to6;
	}

	public void setB1Years0to6(Integer b1Years0to6) {
		this.b1Years0to6 = b1Years0to6;
	}

	public Integer getB1Years7to11() {
		return b1Years7to11;
	}

	public void setB1Years7to11(Integer b1Years7to11) {
		this.b1Years7to11 = b1Years7to11;
	}

	public Integer getB1Years12to15() {
		return b1Years12to15;
	}

	public void setB1Years12to15(Integer b1Years12to15) {
		this.b1Years12to15 = b1Years12to15;
	}

	public Integer getB1Years16to18() {
		return b1Years16to18;
	}

	public void setB1Years16to18(Integer b1Years16to18) {
		this.b1Years16to18 = b1Years16to18;
	}

	public Integer getB1YearsGreaterThan18() {
		return b1YearsGreaterThan18;
	}

	public void setB1YearsGreaterThan18(Integer b1YearsGreaterThan18) {
		this.b1YearsGreaterThan18 = b1YearsGreaterThan18;
	}

	public Integer getB1Total() {
		return b1Total;
	}

	public void setB1Total(Integer b1Total) {
		this.b1Total = b1Total;
	}

	public Integer getB2Years0to6() {
		return b2Years0to6;
	}

	public void setB2Years0to6(Integer b2Years0to6) {
		this.b2Years0to6 = b2Years0to6;
	}

	public Integer getB2Years7to11() {
		return b2Years7to11;
	}

	public void setB2Years7to11(Integer b2Years7to11) {
		this.b2Years7to11 = b2Years7to11;
	}

	public Integer getB2Years12to15() {
		return b2Years12to15;
	}

	public void setB2Years12to15(Integer b2Years12to15) {
		this.b2Years12to15 = b2Years12to15;
	}

	public Integer getB2Years16to18() {
		return b2Years16to18;
	}

	public void setB2Years16to18(Integer b2Years16to18) {
		this.b2Years16to18 = b2Years16to18;
	}

	public Integer getB2YearsGreaterThan18() {
		return b2YearsGreaterThan18;
	}

	public void setB2YearsGreaterThan18(Integer b2YearsGreaterThan18) {
		this.b2YearsGreaterThan18 = b2YearsGreaterThan18;
	}

	public Integer getB2Total() {
		return b2Total;
	}

	public void setB2Total(Integer b2Total) {
		this.b2Total = b2Total;
	}

	public Integer getB3Years0to6() {
		return b3Years0to6;
	}

	public void setB3Years0to6(Integer b3Years0to6) {
		this.b3Years0to6 = b3Years0to6;
	}

	public Integer getB3Years7to11() {
		return b3Years7to11;
	}

	public void setB3Years7to11(Integer b3Years7to11) {
		this.b3Years7to11 = b3Years7to11;
	}

	public Integer getB3Years12to15() {
		return b3Years12to15;
	}

	public void setB3Years12to15(Integer b3Years12to15) {
		this.b3Years12to15 = b3Years12to15;
	}

	public Integer getB3Years16to18() {
		return b3Years16to18;
	}

	public void setB3Years16to18(Integer b3Years16to18) {
		this.b3Years16to18 = b3Years16to18;
	}

	public Integer getB3YearsGreaterThan18() {
		return b3YearsGreaterThan18;
	}

	public void setB3YearsGreaterThan18(Integer b3YearsGreaterThan18) {
		this.b3YearsGreaterThan18 = b3YearsGreaterThan18;
	}

	public Integer getB3Total() {
		return b3Total;
	}

	public void setB3Total(Integer b3Total) {
		this.b3Total = b3Total;
	}

	public Integer getcYears0to6() {
		return cYears0to6;
	}

	public void setcYears0to6(Integer cYears0to6) {
		this.cYears0to6 = cYears0to6;
	}

	public Integer getcYears7to11() {
		return cYears7to11;
	}

	public void setcYears7to11(Integer cYears7to11) {
		this.cYears7to11 = cYears7to11;
	}

	public Integer getcYears12to15() {
		return cYears12to15;
	}

	public void setcYears12to15(Integer cYears12to15) {
		this.cYears12to15 = cYears12to15;
	}

	public Integer getcYears16to18() {
		return cYears16to18;
	}

	public void setcYears16to18(Integer cYears16to18) {
		this.cYears16to18 = cYears16to18;
	}

	public Integer getcYearsGreaterThan18() {
		return cYearsGreaterThan18;
	}

	public void setcYearsGreaterThan18(Integer cYearsGreaterThan18) {
		this.cYearsGreaterThan18 = cYearsGreaterThan18;
	}

	public Integer getcTotal() {
		return cTotal;
	}

	public void setcTotal(Integer cTotal) {
		this.cTotal = cTotal;
	}

	public Integer getD1Years0to6() {
		return d1Years0to6;
	}

	public void setD1Years0to6(Integer d1Years0to6) {
		this.d1Years0to6 = d1Years0to6;
	}

	public Integer getD1Years7to11() {
		return d1Years7to11;
	}

	public void setD1Years7to11(Integer d1Years7to11) {
		this.d1Years7to11 = d1Years7to11;
	}

	public Integer getD1Years12to15() {
		return d1Years12to15;
	}

	public void setD1Years12to15(Integer d1Years12to15) {
		this.d1Years12to15 = d1Years12to15;
	}

	public Integer getD1Years16to18() {
		return d1Years16to18;
	}

	public void setD1Years16to18(Integer d1Years16to18) {
		this.d1Years16to18 = d1Years16to18;
	}

	public Integer getD1YearsGreaterThan18() {
		return d1YearsGreaterThan18;
	}

	public void setD1YearsGreaterThan18(Integer d1YearsGreaterThan18) {
		this.d1YearsGreaterThan18 = d1YearsGreaterThan18;
	}

	public Integer getD1Total() {
		return d1Total;
	}

	public void setD1Total(Integer d1Total) {
		this.d1Total = d1Total;
	}

	public Integer getD2Years0to6() {
		return d2Years0to6;
	}

	public void setD2Years0to6(Integer d2Years0to6) {
		this.d2Years0to6 = d2Years0to6;
	}

	public Integer getD2Years7to11() {
		return d2Years7to11;
	}

	public void setD2Years7to11(Integer d2Years7to11) {
		this.d2Years7to11 = d2Years7to11;
	}

	public Integer getD2Years12to15() {
		return d2Years12to15;
	}

	public void setD2Years12to15(Integer d2Years12to15) {
		this.d2Years12to15 = d2Years12to15;
	}

	public Integer getD2Years16to18() {
		return d2Years16to18;
	}

	public void setD2Years16to18(Integer d2Years16to18) {
		this.d2Years16to18 = d2Years16to18;
	}

	public Integer getD2YearsGreaterThan18() {
		return d2YearsGreaterThan18;
	}

	public void setD2YearsGreaterThan18(Integer d2YearsGreaterThan18) {
		this.d2YearsGreaterThan18 = d2YearsGreaterThan18;
	}

	public Integer getD2Total() {
		return d2Total;
	}

	public void setD2Total(Integer d2Total) {
		this.d2Total = d2Total;
	}

	public Integer getD3Years0to6() {
		return d3Years0to6;
	}

	public void setD3Years0to6(Integer d3Years0to6) {
		this.d3Years0to6 = d3Years0to6;
	}

	public Integer getD3Years7to11() {
		return d3Years7to11;
	}

	public void setD3Years7to11(Integer d3Years7to11) {
		this.d3Years7to11 = d3Years7to11;
	}

	public Integer getD3Years12to15() {
		return d3Years12to15;
	}

	public void setD3Years12to15(Integer d3Years12to15) {
		this.d3Years12to15 = d3Years12to15;
	}

	public Integer getD3Years16to18() {
		return d3Years16to18;
	}

	public void setD3Years16to18(Integer d3Years16to18) {
		this.d3Years16to18 = d3Years16to18;
	}

	public Integer getD3YearsGreaterThan18() {
		return d3YearsGreaterThan18;
	}

	public void setD3YearsGreaterThan18(Integer d3YearsGreaterThan18) {
		this.d3YearsGreaterThan18 = d3YearsGreaterThan18;
	}

	public Integer getD3Total() {
		return d3Total;
	}

	public void setD3Total(Integer d3Total) {
		this.d3Total = d3Total;
	}

	public Integer getD4Years0to6() {
		return d4Years0to6;
	}

	public void setD4Years0to6(Integer d4Years0to6) {
		this.d4Years0to6 = d4Years0to6;
	}

	public Integer getD4Years7to11() {
		return d4Years7to11;
	}

	public void setD4Years7to11(Integer d4Years7to11) {
		this.d4Years7to11 = d4Years7to11;
	}

	public Integer getD4Years12to15() {
		return d4Years12to15;
	}

	public void setD4Years12to15(Integer d4Years12to15) {
		this.d4Years12to15 = d4Years12to15;
	}

	public Integer getD4Years16to18() {
		return d4Years16to18;
	}

	public void setD4Years16to18(Integer d4Years16to18) {
		this.d4Years16to18 = d4Years16to18;
	}

	public Integer getD4YearsGreaterThan18() {
		return d4YearsGreaterThan18;
	}

	public void setD4YearsGreaterThan18(Integer d4YearsGreaterThan18) {
		this.d4YearsGreaterThan18 = d4YearsGreaterThan18;
	}

	public Integer getD4Total() {
		return d4Total;
	}

	public void setD4Total(Integer d4Total) {
		this.d4Total = d4Total;
	}

	public Integer getD5Years0to6() {
		return d5Years0to6;
	}

	public void setD5Years0to6(Integer d5Years0to6) {
		this.d5Years0to6 = d5Years0to6;
	}

	public Integer getD5Years7to11() {
		return d5Years7to11;
	}

	public void setD5Years7to11(Integer d5Years7to11) {
		this.d5Years7to11 = d5Years7to11;
	}

	public Integer getD5Years12to15() {
		return d5Years12to15;
	}

	public void setD5Years12to15(Integer d5Years12to15) {
		this.d5Years12to15 = d5Years12to15;
	}

	public Integer getD5Years16to18() {
		return d5Years16to18;
	}

	public void setD5Years16to18(Integer d5Years16to18) {
		this.d5Years16to18 = d5Years16to18;
	}

	public Integer getD5YearsGreaterThan18() {
		return d5YearsGreaterThan18;
	}

	public void setD5YearsGreaterThan18(Integer d5YearsGreaterThan18) {
		this.d5YearsGreaterThan18 = d5YearsGreaterThan18;
	}

	public Integer getD5Total() {
		return d5Total;
	}

	public void setD5Total(Integer d5Total) {
		this.d5Total = d5Total;
	}

	public Integer getD6Years0to6() {
		return d6Years0to6;
	}

	public void setD6Years0to6(Integer d6Years0to6) {
		this.d6Years0to6 = d6Years0to6;
	}

	public Integer getD6Years7to11() {
		return d6Years7to11;
	}

	public void setD6Years7to11(Integer d6Years7to11) {
		this.d6Years7to11 = d6Years7to11;
	}

	public Integer getD6Years12to15() {
		return d6Years12to15;
	}

	public void setD6Years12to15(Integer d6Years12to15) {
		this.d6Years12to15 = d6Years12to15;
	}

	public Integer getD6Years16to18() {
		return d6Years16to18;
	}

	public void setD6Years16to18(Integer d6Years16to18) {
		this.d6Years16to18 = d6Years16to18;
	}

	public Integer getD6YearsGreaterThan18() {
		return d6YearsGreaterThan18;
	}

	public void setD6YearsGreaterThan18(Integer d6YearsGreaterThan18) {
		this.d6YearsGreaterThan18 = d6YearsGreaterThan18;
	}

	public Integer getD6Total() {
		return d6Total;
	}

	public void setD6Total(Integer d6Total) {
		this.d6Total = d6Total;
	}

	public String getD6aSpecifyothers() {
		return d6aSpecifyothers;
	}

	public void setD6aSpecifyothers(String d6aSpecifyothers) {
		this.d6aSpecifyothers = d6aSpecifyothers;
	}

	public Integer getD7Years0to6() {
		return d7Years0to6;
	}

	public void setD7Years0to6(Integer d7Years0to6) {
		this.d7Years0to6 = d7Years0to6;
	}

	public Integer getD7Years7to11() {
		return d7Years7to11;
	}

	public void setD7Years7to11(Integer d7Years7to11) {
		this.d7Years7to11 = d7Years7to11;
	}

	public Integer getD7Years12to15() {
		return d7Years12to15;
	}

	public void setD7Years12to15(Integer d7Years12to15) {
		this.d7Years12to15 = d7Years12to15;
	}

	public Integer getD7Years16to18() {
		return d7Years16to18;
	}

	public void setD7Years16to18(Integer d7Years16to18) {
		this.d7Years16to18 = d7Years16to18;
	}

	public Integer getD7YearsGreaterThan18() {
		return d7YearsGreaterThan18;
	}

	public void setD7YearsGreaterThan18(Integer d7YearsGreaterThan18) {
		this.d7YearsGreaterThan18 = d7YearsGreaterThan18;
	}

	public Integer getD7Total() {
		return d7Total;
	}

	public void setD7Total(Integer d7Total) {
		this.d7Total = d7Total;
	}

	public Integer geteYears0to6() {
		return eYears0to6;
	}

	public void seteYears0to6(Integer eYears0to6) {
		this.eYears0to6 = eYears0to6;
	}

	public Integer geteYears7to11() {
		return eYears7to11;
	}

	public void seteYears7to11(Integer eYears7to11) {
		this.eYears7to11 = eYears7to11;
	}

	public Integer geteYears12to15() {
		return eYears12to15;
	}

	public void seteYears12to15(Integer eYears12to15) {
		this.eYears12to15 = eYears12to15;
	}

	public Integer geteYears16to18() {
		return eYears16to18;
	}

	public void seteYears16to18(Integer eYears16to18) {
		this.eYears16to18 = eYears16to18;
	}

	public Integer geteYearsGreaterThan18() {
		return eYearsGreaterThan18;
	}

	public void seteYearsGreaterThan18(Integer eYearsGreaterThan18) {
		this.eYearsGreaterThan18 = eYearsGreaterThan18;
	}

	public Integer geteTotal() {
		return eTotal;
	}

	public void seteTotal(Integer eTotal) {
		this.eTotal = eTotal;
	}

	public Integer getfST() {
		return fST;
	}

	public void setfST(Integer fST) {
		this.fST = fST;
	}

	public Integer getfSC() {
		return fSC;
	}

	public void setfSC(Integer fSC) {
		this.fSC = fSC;
	}

	public Integer getfOBC() {
		return fOBC;
	}

	public void setfOBC(Integer fOBC) {
		this.fOBC = fOBC;
	}

	public Integer getfEBC() {
		return fEBC;
	}

	public void setfEBC(Integer fEBC) {
		this.fEBC = fEBC;
	}

	public Integer getfOthers() {
		return fOthers;
	}

	public void setfOthers(Integer fOthers) {
		this.fOthers = fOthers;
	}

	public Integer getfNotKnown() {
		return fNotKnown;
	}

	public void setfNotKnown(Integer fNotKnown) {
		this.fNotKnown = fNotKnown;
	}

	public Integer getfTotal() {
		return fTotal;
	}

	public void setfTotal(Integer fTotal) {
		this.fTotal = fTotal;
	}

	public Integer getfMinority() {
		return fMinority;
	}

	public void setfMinority(Integer fMinority) {
		this.fMinority = fMinority;
	}

	public Integer getG1Years0to6() {
		return g1Years0to6;
	}

	public void setG1Years0to6(Integer g1Years0to6) {
		this.g1Years0to6 = g1Years0to6;
	}

	public Integer getG1Years7to11() {
		return g1Years7to11;
	}

	public void setG1Years7to11(Integer g1Years7to11) {
		this.g1Years7to11 = g1Years7to11;
	}

	public Integer getG1Years12to15() {
		return g1Years12to15;
	}

	public void setG1Years12to15(Integer g1Years12to15) {
		this.g1Years12to15 = g1Years12to15;
	}

	public Integer getG1Years16to18() {
		return g1Years16to18;
	}

	public void setG1Years16to18(Integer g1Years16to18) {
		this.g1Years16to18 = g1Years16to18;
	}

	public Integer getG1YearsGreaterThan18() {
		return g1YearsGreaterThan18;
	}

	public void setG1YearsGreaterThan18(Integer g1YearsGreaterThan18) {
		this.g1YearsGreaterThan18 = g1YearsGreaterThan18;
	}

	public Integer getG1Total() {
		return g1Total;
	}

	public void setG1Total(Integer g1Total) {
		this.g1Total = g1Total;
	}

	public Integer getG2Years0to6() {
		return g2Years0to6;
	}

	public void setG2Years0to6(Integer g2Years0to6) {
		this.g2Years0to6 = g2Years0to6;
	}

	public Integer getG2Years7to11() {
		return g2Years7to11;
	}

	public void setG2Years7to11(Integer g2Years7to11) {
		this.g2Years7to11 = g2Years7to11;
	}

	public Integer getG2Years12to15() {
		return g2Years12to15;
	}

	public void setG2Years12to15(Integer g2Years12to15) {
		this.g2Years12to15 = g2Years12to15;
	}

	public Integer getG2Years16to18() {
		return g2Years16to18;
	}

	public void setG2Years16to18(Integer g2Years16to18) {
		this.g2Years16to18 = g2Years16to18;
	}

	public Integer getG2YearsGreaterThan18() {
		return g2YearsGreaterThan18;
	}

	public void setG2YearsGreaterThan18(Integer g2YearsGreaterThan18) {
		this.g2YearsGreaterThan18 = g2YearsGreaterThan18;
	}

	public Integer getG2Total() {
		return g2Total;
	}

	public void setG2Total(Integer g2Total) {
		this.g2Total = g2Total;
	}

	public Integer getG3Years0to6() {
		return g3Years0to6;
	}

	public void setG3Years0to6(Integer g3Years0to6) {
		this.g3Years0to6 = g3Years0to6;
	}

	public Integer getG3Years7to11() {
		return g3Years7to11;
	}

	public void setG3Years7to11(Integer g3Years7to11) {
		this.g3Years7to11 = g3Years7to11;
	}

	public Integer getG3Years12to15() {
		return g3Years12to15;
	}

	public void setG3Years12to15(Integer g3Years12to15) {
		this.g3Years12to15 = g3Years12to15;
	}

	public Integer getG3Years16to18() {
		return g3Years16to18;
	}

	public void setG3Years16to18(Integer g3Years16to18) {
		this.g3Years16to18 = g3Years16to18;
	}

	public Integer getG3YearsGreaterThan18() {
		return g3YearsGreaterThan18;
	}

	public void setG3YearsGreaterThan18(Integer g3YearsGreaterThan18) {
		this.g3YearsGreaterThan18 = g3YearsGreaterThan18;
	}

	public Integer getG3Total() {
		return g3Total;
	}

	public void setG3Total(Integer g3Total) {
		this.g3Total = g3Total;
	}

	public Integer getG4Years0to6() {
		return g4Years0to6;
	}

	public void setG4Years0to6(Integer g4Years0to6) {
		this.g4Years0to6 = g4Years0to6;
	}

	public Integer getG4Years7to11() {
		return g4Years7to11;
	}

	public void setG4Years7to11(Integer g4Years7to11) {
		this.g4Years7to11 = g4Years7to11;
	}

	public Integer getG4Years12to15() {
		return g4Years12to15;
	}

	public void setG4Years12to15(Integer g4Years12to15) {
		this.g4Years12to15 = g4Years12to15;
	}

	public Integer getG4Years16to18() {
		return g4Years16to18;
	}

	public void setG4Years16to18(Integer g4Years16to18) {
		this.g4Years16to18 = g4Years16to18;
	}

	public Integer getG4YearsGreaterThan18() {
		return g4YearsGreaterThan18;
	}

	public void setG4YearsGreaterThan18(Integer g4YearsGreaterThan18) {
		this.g4YearsGreaterThan18 = g4YearsGreaterThan18;
	}

	public Integer getG4Total() {
		return g4Total;
	}

	public void setG4Total(Integer g4Total) {
		this.g4Total = g4Total;
	}

	public Integer getG5Years0to6() {
		return g5Years0to6;
	}

	public void setG5Years0to6(Integer g5Years0to6) {
		this.g5Years0to6 = g5Years0to6;
	}

	public Integer getG5Years7to11() {
		return g5Years7to11;
	}

	public void setG5Years7to11(Integer g5Years7to11) {
		this.g5Years7to11 = g5Years7to11;
	}

	public Integer getG5Years12to15() {
		return g5Years12to15;
	}

	public void setG5Years12to15(Integer g5Years12to15) {
		this.g5Years12to15 = g5Years12to15;
	}

	public Integer getG5Years16to18() {
		return g5Years16to18;
	}

	public void setG5Years16to18(Integer g5Years16to18) {
		this.g5Years16to18 = g5Years16to18;
	}

	public Integer getG5YearsGreaterThan18() {
		return g5YearsGreaterThan18;
	}

	public void setG5YearsGreaterThan18(Integer g5YearsGreaterThan18) {
		this.g5YearsGreaterThan18 = g5YearsGreaterThan18;
	}

	public Integer getG5Total() {
		return g5Total;
	}

	public void setG5Total(Integer g5Total) {
		this.g5Total = g5Total;
	}

	public Integer getG6Years0to6() {
		return g6Years0to6;
	}

	public void setG6Years0to6(Integer g6Years0to6) {
		this.g6Years0to6 = g6Years0to6;
	}

	public Integer getG6Years7to11() {
		return g6Years7to11;
	}

	public void setG6Years7to11(Integer g6Years7to11) {
		this.g6Years7to11 = g6Years7to11;
	}

	public Integer getG6Years12to15() {
		return g6Years12to15;
	}

	public void setG6Years12to15(Integer g6Years12to15) {
		this.g6Years12to15 = g6Years12to15;
	}

	public Integer getG6Years16to18() {
		return g6Years16to18;
	}

	public void setG6Years16to18(Integer g6Years16to18) {
		this.g6Years16to18 = g6Years16to18;
	}

	public Integer getG6YearsGreaterThan18() {
		return g6YearsGreaterThan18;
	}

	public void setG6YearsGreaterThan18(Integer g6YearsGreaterThan18) {
		this.g6YearsGreaterThan18 = g6YearsGreaterThan18;
	}

	public Integer getG6Total() {
		return g6Total;
	}

	public void setG6Total(Integer g6Total) {
		this.g6Total = g6Total;
	}

	public Integer getG7Years0to6() {
		return g7Years0to6;
	}

	public void setG7Years0to6(Integer g7Years0to6) {
		this.g7Years0to6 = g7Years0to6;
	}

	public Integer getG7Years7to11() {
		return g7Years7to11;
	}

	public void setG7Years7to11(Integer g7Years7to11) {
		this.g7Years7to11 = g7Years7to11;
	}

	public Integer getG7Years12to15() {
		return g7Years12to15;
	}

	public void setG7Years12to15(Integer g7Years12to15) {
		this.g7Years12to15 = g7Years12to15;
	}

	public Integer getG7Years16to18() {
		return g7Years16to18;
	}

	public void setG7Years16to18(Integer g7Years16to18) {
		this.g7Years16to18 = g7Years16to18;
	}

	public Integer getG7YearsGreaterThan18() {
		return g7YearsGreaterThan18;
	}

	public void setG7YearsGreaterThan18(Integer g7YearsGreaterThan18) {
		this.g7YearsGreaterThan18 = g7YearsGreaterThan18;
	}

	public Integer getG7Total() {
		return g7Total;
	}

	public void setG7Total(Integer g7Total) {
		this.g7Total = g7Total;
	}

	public Integer getH1Years0to6() {
		return h1Years0to6;
	}

	public void setH1Years0to6(Integer h1Years0to6) {
		this.h1Years0to6 = h1Years0to6;
	}

	public Integer getH1Years7to11() {
		return h1Years7to11;
	}

	public void setH1Years7to11(Integer h1Years7to11) {
		this.h1Years7to11 = h1Years7to11;
	}

	public Integer getH1Years12to15() {
		return h1Years12to15;
	}

	public void setH1Years12to15(Integer h1Years12to15) {
		this.h1Years12to15 = h1Years12to15;
	}

	public Integer getH1Years16to18() {
		return h1Years16to18;
	}

	public void setH1Years16to18(Integer h1Years16to18) {
		this.h1Years16to18 = h1Years16to18;
	}

	public Integer getH1YearsGreaterThan18() {
		return h1YearsGreaterThan18;
	}

	public void setH1YearsGreaterThan18(Integer h1YearsGreaterThan18) {
		this.h1YearsGreaterThan18 = h1YearsGreaterThan18;
	}

	public Integer getH1Total() {
		return h1Total;
	}

	public void setH1Total(Integer h1Total) {
		this.h1Total = h1Total;
	}

	public Integer getH2Years0to6() {
		return h2Years0to6;
	}

	public void setH2Years0to6(Integer h2Years0to6) {
		this.h2Years0to6 = h2Years0to6;
	}

	public Integer getH2Years7to11() {
		return h2Years7to11;
	}

	public void setH2Years7to11(Integer h2Years7to11) {
		this.h2Years7to11 = h2Years7to11;
	}

	public Integer getH2Years12to15() {
		return h2Years12to15;
	}

	public void setH2Years12to15(Integer h2Years12to15) {
		this.h2Years12to15 = h2Years12to15;
	}

	public Integer getH2Years16to18() {
		return h2Years16to18;
	}

	public void setH2Years16to18(Integer h2Years16to18) {
		this.h2Years16to18 = h2Years16to18;
	}

	public Integer getH2YearsGreaterThan18() {
		return h2YearsGreaterThan18;
	}

	public void setH2YearsGreaterThan18(Integer h2YearsGreaterThan18) {
		this.h2YearsGreaterThan18 = h2YearsGreaterThan18;
	}

	public Integer getH2Total() {
		return h2Total;
	}

	public void setH2Total(Integer h2Total) {
		this.h2Total = h2Total;
	}

	public Integer getH3Years0to6() {
		return h3Years0to6;
	}

	public void setH3Years0to6(Integer h3Years0to6) {
		this.h3Years0to6 = h3Years0to6;
	}

	public Integer getH3Years7to11() {
		return h3Years7to11;
	}

	public void setH3Years7to11(Integer h3Years7to11) {
		this.h3Years7to11 = h3Years7to11;
	}

	public Integer getH3Years12to15() {
		return h3Years12to15;
	}

	public void setH3Years12to15(Integer h3Years12to15) {
		this.h3Years12to15 = h3Years12to15;
	}

	public Integer getH3Years16to18() {
		return h3Years16to18;
	}

	public void setH3Years16to18(Integer h3Years16to18) {
		this.h3Years16to18 = h3Years16to18;
	}

	public Integer getH3YearsGreaterThan18() {
		return h3YearsGreaterThan18;
	}

	public void setH3YearsGreaterThan18(Integer h3YearsGreaterThan18) {
		this.h3YearsGreaterThan18 = h3YearsGreaterThan18;
	}

	public Integer getH3Total() {
		return h3Total;
	}

	public void setH3Total(Integer h3Total) {
		this.h3Total = h3Total;
	}

	public Integer getH4Years0to6() {
		return h4Years0to6;
	}

	public void setH4Years0to6(Integer h4Years0to6) {
		this.h4Years0to6 = h4Years0to6;
	}

	public Integer getH4Years7to11() {
		return h4Years7to11;
	}

	public void setH4Years7to11(Integer h4Years7to11) {
		this.h4Years7to11 = h4Years7to11;
	}

	public Integer getH4Years12to15() {
		return h4Years12to15;
	}

	public void setH4Years12to15(Integer h4Years12to15) {
		this.h4Years12to15 = h4Years12to15;
	}

	public Integer getH4Years16to18() {
		return h4Years16to18;
	}

	public void setH4Years16to18(Integer h4Years16to18) {
		this.h4Years16to18 = h4Years16to18;
	}

	public Integer getH4YearsGreaterThan18() {
		return h4YearsGreaterThan18;
	}

	public void setH4YearsGreaterThan18(Integer h4YearsGreaterThan18) {
		this.h4YearsGreaterThan18 = h4YearsGreaterThan18;
	}

	public Integer getH4Total() {
		return h4Total;
	}

	public void setH4Total(Integer h4Total) {
		this.h4Total = h4Total;
	}

	public Integer getH5Years0to6() {
		return h5Years0to6;
	}

	public void setH5Years0to6(Integer h5Years0to6) {
		this.h5Years0to6 = h5Years0to6;
	}

	public Integer getH5Years7to11() {
		return h5Years7to11;
	}

	public void setH5Years7to11(Integer h5Years7to11) {
		this.h5Years7to11 = h5Years7to11;
	}

	public Integer getH5Years12to15() {
		return h5Years12to15;
	}

	public void setH5Years12to15(Integer h5Years12to15) {
		this.h5Years12to15 = h5Years12to15;
	}

	public Integer getH5Years16to18() {
		return h5Years16to18;
	}

	public void setH5Years16to18(Integer h5Years16to18) {
		this.h5Years16to18 = h5Years16to18;
	}

	public Integer getH5YearsGreaterThan18() {
		return h5YearsGreaterThan18;
	}

	public void setH5YearsGreaterThan18(Integer h5YearsGreaterThan18) {
		this.h5YearsGreaterThan18 = h5YearsGreaterThan18;
	}

	public Integer getH5Total() {
		return h5Total;
	}

	public void setH5Total(Integer h5Total) {
		this.h5Total = h5Total;
	}

	public Integer getI1DaysLessThan15() {
		return i1DaysLessThan15;
	}

	public void setI1DaysLessThan15(Integer i1DaysLessThan15) {
		this.i1DaysLessThan15 = i1DaysLessThan15;
	}

	public Integer getI1Days16to30() {
		return i1Days16to30;
	}

	public void setI1Days16to30(Integer i1Days16to30) {
		this.i1Days16to30 = i1Days16to30;
	}

	public Integer getI1Months1to3() {
		return i1Months1to3;
	}

	public void setI1Months1to3(Integer i1Months1to3) {
		this.i1Months1to3 = i1Months1to3;
	}

	public Integer getI1MonthsgreaterThan3() {
		return i1MonthsgreaterThan3;
	}

	public void setI1MonthsgreaterThan3(Integer i1MonthsgreaterThan3) {
		this.i1MonthsgreaterThan3 = i1MonthsgreaterThan3;
	}

	public Integer getI1Total() {
		return i1Total;
	}

	public void setI1Total(Integer i1Total) {
		this.i1Total = i1Total;
	}

	public Integer getI2DaysLessThan15() {
		return i2DaysLessThan15;
	}

	public void setI2DaysLessThan15(Integer i2DaysLessThan15) {
		this.i2DaysLessThan15 = i2DaysLessThan15;
	}

	public Integer getI2Days16to30() {
		return i2Days16to30;
	}

	public void setI2Days16to30(Integer i2Days16to30) {
		this.i2Days16to30 = i2Days16to30;
	}

	public Integer getI2Total() {
		return i2Total;
	}

	public void setI2Total(Integer i2Total) {
		this.i2Total = i2Total;
	}

	public Integer getI3DaysLessThan15() {
		return i3DaysLessThan15;
	}

	public void setI3DaysLessThan15(Integer i3DaysLessThan15) {
		this.i3DaysLessThan15 = i3DaysLessThan15;
	}

	public Integer getI3Days16to30() {
		return i3Days16to30;
	}

	public void setI3Days16to30(Integer i3Days16to30) {
		this.i3Days16to30 = i3Days16to30;
	}

	public Integer getI3Months1to3() {
		return i3Months1to3;
	}

	public void setI3Months1to3(Integer i3Months1to3) {
		this.i3Months1to3 = i3Months1to3;
	}

	public Integer getI3MonthsgreaterThan3() {
		return i3MonthsgreaterThan3;
	}

	public void setI3MonthsgreaterThan3(Integer i3MonthsgreaterThan3) {
		this.i3MonthsgreaterThan3 = i3MonthsgreaterThan3;
	}

	public Integer getI3Total() {
		return i3Total;
	}

	public void setI3Total(Integer i3Total) {
		this.i3Total = i3Total;
	}

	public Integer getI4DaysLessThan15() {
		return i4DaysLessThan15;
	}

	public void setI4DaysLessThan15(Integer i4DaysLessThan15) {
		this.i4DaysLessThan15 = i4DaysLessThan15;
	}

	public Integer getI4Days16to30() {
		return i4Days16to30;
	}

	public void setI4Days16to30(Integer i4Days16to30) {
		this.i4Days16to30 = i4Days16to30;
	}

	public Integer getI4Months1to3() {
		return i4Months1to3;
	}

	public void setI4Months1to3(Integer i4Months1to3) {
		this.i4Months1to3 = i4Months1to3;
	}

	public Integer getI4MonthsgreaterThan3() {
		return i4MonthsgreaterThan3;
	}

	public void setI4MonthsgreaterThan3(Integer i4MonthsgreaterThan3) {
		this.i4MonthsgreaterThan3 = i4MonthsgreaterThan3;
	}

	public Integer getI4Total() {
		return i4Total;
	}

	public void setI4Total(Integer i4Total) {
		this.i4Total = i4Total;
	}

	public Integer getJ1Total0to30Days() {
		return j1Total0to30Days;
	}

	public void setJ1Total0to30Days(Integer j1Total0to30Days) {
		this.j1Total0to30Days = j1Total0to30Days;
	}

	public Integer getJ1TotalMonths1to2() {
		return j1TotalMonths1to2;
	}

	public void setJ1TotalMonths1to2(Integer j1TotalMonths1to2) {
		this.j1TotalMonths1to2 = j1TotalMonths1to2;
	}

	public Integer getJ1TotalMonths2to3() {
		return j1TotalMonths2to3;
	}

	public void setJ1TotalMonths2to3(Integer j1TotalMonths2to3) {
		this.j1TotalMonths2to3 = j1TotalMonths2to3;
	}

	public Integer getJ1TotalMonths3to4() {
		return j1TotalMonths3to4;
	}

	public void setJ1TotalMonths3to4(Integer j1TotalMonths3to4) {
		this.j1TotalMonths3to4 = j1TotalMonths3to4;
	}

	public Integer getJ1TotalMonths4to12() {
		return j1TotalMonths4to12;
	}

	public void setJ1TotalMonths4to12(Integer j1TotalMonths4to12) {
		this.j1TotalMonths4to12 = j1TotalMonths4to12;
	}

	public Integer getJ1TotalMonthsMoreThan1Year() {
		return j1TotalMonthsMoreThan1Year;
	}

	public void setJ1TotalMonthsMoreThan1Year(Integer j1TotalMonthsMoreThan1Year) {
		this.j1TotalMonthsMoreThan1Year = j1TotalMonthsMoreThan1Year;
	}

	public Integer getJ1TotalNumberTotal() {
		return j1TotalNumberTotal;
	}

	public void setJ1TotalNumberTotal(Integer j1TotalNumberTotal) {
		this.j1TotalNumberTotal = j1TotalNumberTotal;
	}

	public Integer getJ2Total0to30Days() {
		return j2Total0to30Days;
	}

	public void setJ2Total0to30Days(Integer j2Total0to30Days) {
		this.j2Total0to30Days = j2Total0to30Days;
	}

	public Integer getJ2TotalMonths1to2() {
		return j2TotalMonths1to2;
	}

	public void setJ2TotalMonths1to2(Integer j2TotalMonths1to2) {
		this.j2TotalMonths1to2 = j2TotalMonths1to2;
	}

	public Integer getJ2TotalMonths2to3() {
		return j2TotalMonths2to3;
	}

	public void setJ2TotalMonths2to3(Integer j2TotalMonths2to3) {
		this.j2TotalMonths2to3 = j2TotalMonths2to3;
	}

	public Integer getJ2TotalMonths3to4() {
		return j2TotalMonths3to4;
	}

	public void setJ2TotalMonths3to4(Integer j2TotalMonths3to4) {
		this.j2TotalMonths3to4 = j2TotalMonths3to4;
	}

	public Integer getJ2TotalMonths4to12() {
		return j2TotalMonths4to12;
	}

	public void setJ2TotalMonths4to12(Integer j2TotalMonths4to12) {
		this.j2TotalMonths4to12 = j2TotalMonths4to12;
	}

	public Integer getJ2TotalMonthsMoreThan1Year() {
		return j2TotalMonthsMoreThan1Year;
	}

	public void setJ2TotalMonthsMoreThan1Year(Integer j2TotalMonthsMoreThan1Year) {
		this.j2TotalMonthsMoreThan1Year = j2TotalMonthsMoreThan1Year;
	}

	public Integer getJ2TotalNumberTotal() {
		return j2TotalNumberTotal;
	}

	public void setJ2TotalNumberTotal(Integer j2TotalNumberTotal) {
		this.j2TotalNumberTotal = j2TotalNumberTotal;
	}

	public Integer getJ3Total0to30Days() {
		return j3Total0to30Days;
	}

	public void setJ3Total0to30Days(Integer j3Total0to30Days) {
		this.j3Total0to30Days = j3Total0to30Days;
	}

	public Integer getJ3TotalMonths1to2() {
		return j3TotalMonths1to2;
	}

	public void setJ3TotalMonths1to2(Integer j3TotalMonths1to2) {
		this.j3TotalMonths1to2 = j3TotalMonths1to2;
	}

	public Integer getJ3TotalMonths2to3() {
		return j3TotalMonths2to3;
	}

	public void setJ3TotalMonths2to3(Integer j3TotalMonths2to3) {
		this.j3TotalMonths2to3 = j3TotalMonths2to3;
	}

	public Integer getJ3TotalMonths3to4() {
		return j3TotalMonths3to4;
	}

	public void setJ3TotalMonths3to4(Integer j3TotalMonths3to4) {
		this.j3TotalMonths3to4 = j3TotalMonths3to4;
	}

	public Integer getJ3TotalMonths4to12() {
		return j3TotalMonths4to12;
	}

	public void setJ3TotalMonths4to12(Integer j3TotalMonths4to12) {
		this.j3TotalMonths4to12 = j3TotalMonths4to12;
	}

	public Integer getJ3TotalMonthsMoreThan1Year() {
		return j3TotalMonthsMoreThan1Year;
	}

	public void setJ3TotalMonthsMoreThan1Year(Integer j3TotalMonthsMoreThan1Year) {
		this.j3TotalMonthsMoreThan1Year = j3TotalMonthsMoreThan1Year;
	}

	public Integer getJ3TotalNumberTotal() {
		return j3TotalNumberTotal;
	}

	public void setJ3TotalNumberTotal(Integer j3TotalNumberTotal) {
		this.j3TotalNumberTotal = j3TotalNumberTotal;
	}

	public Integer getJ4Total0to30Days() {
		return j4Total0to30Days;
	}

	public void setJ4Total0to30Days(Integer j4Total0to30Days) {
		this.j4Total0to30Days = j4Total0to30Days;
	}

	public Integer getJ4TotalMonths1to2() {
		return j4TotalMonths1to2;
	}

	public void setJ4TotalMonths1to2(Integer j4TotalMonths1to2) {
		this.j4TotalMonths1to2 = j4TotalMonths1to2;
	}

	public Integer getJ4TotalMonths2to3() {
		return j4TotalMonths2to3;
	}

	public void setJ4TotalMonths2to3(Integer j4TotalMonths2to3) {
		this.j4TotalMonths2to3 = j4TotalMonths2to3;
	}

	public Integer getJ4TotalMonths3to4() {
		return j4TotalMonths3to4;
	}

	public void setJ4TotalMonths3to4(Integer j4TotalMonths3to4) {
		this.j4TotalMonths3to4 = j4TotalMonths3to4;
	}

	public Integer getJ4TotalMonths4to12() {
		return j4TotalMonths4to12;
	}

	public void setJ4TotalMonths4to12(Integer j4TotalMonths4to12) {
		this.j4TotalMonths4to12 = j4TotalMonths4to12;
	}

	public Integer getJ4TotalMonthsMoreThan1Year() {
		return j4TotalMonthsMoreThan1Year;
	}

	public void setJ4TotalMonthsMoreThan1Year(Integer j4TotalMonthsMoreThan1Year) {
		this.j4TotalMonthsMoreThan1Year = j4TotalMonthsMoreThan1Year;
	}

	public Integer getJ4TotalNumberTotal() {
		return j4TotalNumberTotal;
	}

	public void setJ4TotalNumberTotal(Integer j4TotalNumberTotal) {
		this.j4TotalNumberTotal = j4TotalNumberTotal;
	}

	public Integer getK1() {
		return k1;
	}

	public void setK1(Integer k1) {
		this.k1 = k1;
	}

	public Integer getK2() {
		return k2;
	}

	public void setK2(Integer k2) {
		this.k2 = k2;
	}

	public Integer getK3() {
		return k3;
	}

	public void setK3(Integer k3) {
		this.k3 = k3;
	}

	public Integer getK4() {
		return k4;
	}

	public void setK4(Integer k4) {
		this.k4 = k4;
	}

	public Integer getK5() {
		return k5;
	}

	public void setK5(Integer k5) {
		this.k5 = k5;
	}

	public Integer getK6() {
		return k6;
	}

	public void setK6(Integer k6) {
		this.k6 = k6;
	}

	public Integer getK7() {
		return k7;
	}

	public void setK7(Integer k7) {
		this.k7 = k7;
	}

	public Integer getK8() {
		return k8;
	}

	public void setK8(Integer k8) {
		this.k8 = k8;
	}

	public Integer getK9() {
		return k9;
	}

	public void setK9(Integer k9) {
		this.k9 = k9;
	}

	public Integer getK10() {
		return k10;
	}

	public void setK10(Integer k10) {
		this.k10 = k10;
	}

	public Integer getK11() {
		return k11;
	}

	public void setK11(Integer k11) {
		this.k11 = k11;
	}

	public Integer getK12() {
		return k12;
	}

	public void setK12(Integer k12) {
		this.k12 = k12;
	}

	public Integer getK13() {
		return k13;
	}

	public void setK13(Integer k13) {
		this.k13 = k13;
	}

	public Integer getK14() {
		return k14;
	}

	public void setK14(Integer k14) {
		this.k14 = k14;
	}

	public Boolean getK15aMeetingChildrenCommittee() {
		return k15aMeetingChildrenCommittee;
	}

	public void setK15aMeetingChildrenCommittee(Boolean k15aMeetingChildrenCommittee) {
		this.k15aMeetingChildrenCommittee = k15aMeetingChildrenCommittee;
	}

	public String getK15bCcMeetingDate() {
		return k15bCcMeetingDate;
	}

	public void setK15bCcMeetingDate(String k15bCcMeetingDate) {
		this.k15bCcMeetingDate = k15bCcMeetingDate;
	}

	public Boolean getK16aMeetingHomeManagementCommittee() {
		return k16aMeetingHomeManagementCommittee;
	}

	public void setK16aMeetingHomeManagementCommittee(
			Boolean k16aMeetingHomeManagementCommittee) {
		this.k16aMeetingHomeManagementCommittee = k16aMeetingHomeManagementCommittee;
	}

	public String getK16bHmMeetingDate() {
		return k16bHmMeetingDate;
	}

	public void setK16bHmMeetingDate(String k16bHmMeetingDate) {
		this.k16bHmMeetingDate = k16bHmMeetingDate;
	}

	public Boolean getK17aAnyOthersDetails() {
		return k17aAnyOthersDetails;
	}

	public void setK17aAnyOthersDetails(Boolean k17aAnyOthersDetails) {
		this.k17aAnyOthersDetails = k17aAnyOthersDetails;
	}

	public String getK17bOtherDetailsDate() {
		return k17bOtherDetailsDate;
	}

	public void setK17bOtherDetailsDate(String k17bOtherDetailsDate) {
		this.k17bOtherDetailsDate = k17bOtherDetailsDate;
	}

	public Integer getL1aNoTrainingHeld() {
		return l1aNoTrainingHeld;
	}

	public void setL1aNoTrainingHeld(Integer l1aNoTrainingHeld) {
		this.l1aNoTrainingHeld = l1aNoTrainingHeld;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}

}
