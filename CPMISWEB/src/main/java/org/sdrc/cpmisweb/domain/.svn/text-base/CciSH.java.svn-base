/**
 * 
 */
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
 * @author Pratyush(pratyush@sdrc.co.in) created on : 08-Mar-2018 5:10:25 pm
 */
@Entity
@Table(name = "cci_sh")
public class CciSH {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private Integer id;
	
	@Column(name="home_type")
	private String homeType;
	
	@OneToMany(fetch = FetchType.EAGER, mappedBy="homeId")
	private List<CciSHTraining> cciHomeTrainings;
	
	@Column(name = "is_live")
	private boolean isLive;
	
	@Column(name="name_of_authorized_person")
	private String nameOfAuthorizedPerson;

	@Column(name = "user_id")
	private Integer userId;

	@Column(name = "is_submitted")
	private boolean isSubmitted;

	@Column(name = "date_of_submission")
	private Date dateOfSubmimission;

	@Column(name = "last_save_date")
	@Temporal(value = TemporalType.TIMESTAMP)
	private Date lastSaveDate = new Date();
	
	@Column(name = "month_and_year")
	private Date monthyear;

	@Column(name = "district_id")
	private Integer districtId;

	@Column(name = "name_of_person")
	private String nameOfPerson;

	@Column(name = "designation")
	private String designation;

	@Column(name = "state_name")
	private String stateName;

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
	private Integer d8Years7to11;

	@Column
	private Integer d8Years12to15;

	@Column
	private Integer d8Years16to18;

	@Column
	private Integer d8YearsGreaterThan18;

	@Column
	private Integer d8Total;

	@Column
	private Integer d9aYears7to11;

	@Column
	private Integer d9aYears12to15;

	@Column
	private Integer d9aYears16to18;

	@Column
	private Integer d9aYearsGreaterThan18;

	@Column
	private Integer d9aTotal;

	@Column
	private String d9Others;
	
	@Column
	private Integer d10Years7to11;

	@Column
	private Integer d10Years12to15;

	@Column
	private Integer d10Years16to18;

	@Column
	private Integer d10YearsGreaterThan18;

	@Column
	private Integer d10Total;

	@Column
	private Integer e1Years7to11;

	@Column
	private Integer e1Years12to15;

	@Column
	private Integer e1Years16to18;

	@Column
	private Integer e1YearsGreaterThan18;

	@Column
	private Integer e1Total;

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
	private Integer iPetty0to30Days;

	@Column
	private Integer iPettyMonths1to2;

	@Column
	private Integer iPettyMonths2to3;

	@Column
	private Integer iPettyMonths3to4;

	@Column
	private Integer iPettyMonths4to12;

	@Column
	private Integer iPettyMonthsMoreThan1Year;

	@Column
	private Integer iPettyTotal;

	@Column
	private Integer iSerious0to30Days;

	@Column
	private Integer iSeriousMonths1to2;

	@Column
	private Integer iSeriousMonths2to3;

	@Column
	private Integer iSeriousMonths3to4;

	@Column
	private Integer iSeriousMonths4to12;

	@Column
	private Integer iSeriousMonthsMoreThan1Year;

	@Column
	private Integer iSeriousTotal;

	@Column
	private Integer iHeinous0to30Days;

	@Column
	private Integer iHeinousMonths1to2;

	@Column
	private Integer iHeinousMonths2to3;

	@Column
	private Integer iHeinousMonths3to4;

	@Column
	private Integer iHeinousMonths4to12;

	@Column
	private Integer iHeinousMonthsMoreThan1Year;

	@Column
	private Integer iHeinousTotal;

	@Column
	private Integer iTotal0to30Days;

	@Column
	private Integer iTotalMonths1to2;

	@Column
	private Integer iTotalMonths2to3;

	@Column
	private Integer iTotalMonths3to4;

	@Column
	private Integer iTotalMonths4to12;

	@Column
	private Integer iTotalMonthsMoreThan1Year;

	@Column
	private Integer iTotalNumberTotal;

	@Column
	private Integer j1FirstDay0to30Days;

	@Column
	private Integer j1FirstDayMonths1to2;

	@Column
	private Integer j1FirstDayMonths2to3;

	@Column
	private Integer j1FirstDayMonths3to4;

	@Column
	private Integer j1FirstDayMonths4to12;

	@Column
	private Integer j1FirstDayMonthsMoreThan1Year;

	@Column
	private Integer j1Total;

	@Column
	private Integer j2NewCh0to30Days;

	@Column
	private Integer j2Total;

	@Column
	private Integer j3MovedOut0to30Days;

	@Column
	private Integer j3MovedOutMonths1to2;

	@Column
	private Integer j3MovedOutMonths2to3;

	@Column
	private Integer j3MovedOutMonths3to4;

	@Column
	private Integer j3MovedOutMonths4to12;

	@Column
	private Integer j3MovedOutMonthsMoreThan1Year;

	@Column
	private Integer j3Total;

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
	private Integer k15;

	@Column
	private Boolean k16aMeetingChildrenCommittee;

	@Column
	private String k16CCDate;

	@Column
	private Boolean k17aMeetingHomeManagementCommittee;

	@Column
	private String k17HMDate;

	@Column
	private Boolean k18aAnyOthersDetails;

	@Column
	private String k18OtherDetailsDate;
	
	@Column
	private Boolean l1WasTrainingHeld;
	
	@Column
    private Integer l1aNoOfTraining;
	
	@ManyToOne
    @JoinColumn(name="timeperiod_id_fk")
	private Timeperiod timeperiod;

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public String getHomeType() {
		return homeType;
	}

	public void setHomeType(String homeType) {
		this.homeType = homeType;
	}

	public List<CciSHTraining> getCciHomeTrainings() {
		return cciHomeTrainings;
	}

	public void setCciHomeTrainings(List<CciSHTraining> cciHomeTrainings) {
		this.cciHomeTrainings = cciHomeTrainings;
	}

	public boolean isLive() {
		return isLive;
	}

	public void setLive(boolean isLive) {
		this.isLive = isLive;
	}

	public String getNameOfAuthorizedPerson() {
		return nameOfAuthorizedPerson;
	}

	public void setNameOfAuthorizedPerson(String nameOfAuthorizedPerson) {
		this.nameOfAuthorizedPerson = nameOfAuthorizedPerson;
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

	public String getStateName() {
		return stateName;
	}

	public void setStateName(String stateName) {
		this.stateName = stateName;
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

	public Integer getD8Years7to11() {
		return d8Years7to11;
	}

	public void setD8Years7to11(Integer d8Years7to11) {
		this.d8Years7to11 = d8Years7to11;
	}

	public Integer getD8Years12to15() {
		return d8Years12to15;
	}

	public void setD8Years12to15(Integer d8Years12to15) {
		this.d8Years12to15 = d8Years12to15;
	}

	public Integer getD8Years16to18() {
		return d8Years16to18;
	}

	public void setD8Years16to18(Integer d8Years16to18) {
		this.d8Years16to18 = d8Years16to18;
	}

	public Integer getD8YearsGreaterThan18() {
		return d8YearsGreaterThan18;
	}

	public void setD8YearsGreaterThan18(Integer d8YearsGreaterThan18) {
		this.d8YearsGreaterThan18 = d8YearsGreaterThan18;
	}

	public Integer getD8Total() {
		return d8Total;
	}

	public void setD8Total(Integer d8Total) {
		this.d8Total = d8Total;
	}

	public Integer getD9aYears7to11() {
		return d9aYears7to11;
	}

	public void setD9aYears7to11(Integer d9aYears7to11) {
		this.d9aYears7to11 = d9aYears7to11;
	}

	public Integer getD9aYears12to15() {
		return d9aYears12to15;
	}

	public void setD9aYears12to15(Integer d9aYears12to15) {
		this.d9aYears12to15 = d9aYears12to15;
	}

	public Integer getD9aYears16to18() {
		return d9aYears16to18;
	}

	public void setD9aYears16to18(Integer d9aYears16to18) {
		this.d9aYears16to18 = d9aYears16to18;
	}

	public Integer getD9aYearsGreaterThan18() {
		return d9aYearsGreaterThan18;
	}

	public void setD9aYearsGreaterThan18(Integer d9aYearsGreaterThan18) {
		this.d9aYearsGreaterThan18 = d9aYearsGreaterThan18;
	}

	public Integer getD9aTotal() {
		return d9aTotal;
	}

	public void setD9aTotal(Integer d9aTotal) {
		this.d9aTotal = d9aTotal;
	}

	public String getD9Others() {
		return d9Others;
	}

	public void setD9Others(String d9Others) {
		this.d9Others = d9Others;
	}

	public Integer getD10Years7to11() {
		return d10Years7to11;
	}

	public void setD10Years7to11(Integer d10Years7to11) {
		this.d10Years7to11 = d10Years7to11;
	}

	public Integer getD10Years12to15() {
		return d10Years12to15;
	}

	public void setD10Years12to15(Integer d10Years12to15) {
		this.d10Years12to15 = d10Years12to15;
	}

	public Integer getD10Years16to18() {
		return d10Years16to18;
	}

	public void setD10Years16to18(Integer d10Years16to18) {
		this.d10Years16to18 = d10Years16to18;
	}

	public Integer getD10YearsGreaterThan18() {
		return d10YearsGreaterThan18;
	}

	public void setD10YearsGreaterThan18(Integer d10YearsGreaterThan18) {
		this.d10YearsGreaterThan18 = d10YearsGreaterThan18;
	}

	public Integer getD10Total() {
		return d10Total;
	}

	public void setD10Total(Integer d10Total) {
		this.d10Total = d10Total;
	}

	public Integer getE1Years7to11() {
		return e1Years7to11;
	}

	public void setE1Years7to11(Integer e1Years7to11) {
		this.e1Years7to11 = e1Years7to11;
	}

	public Integer getE1Years12to15() {
		return e1Years12to15;
	}

	public void setE1Years12to15(Integer e1Years12to15) {
		this.e1Years12to15 = e1Years12to15;
	}

	public Integer getE1Years16to18() {
		return e1Years16to18;
	}

	public void setE1Years16to18(Integer e1Years16to18) {
		this.e1Years16to18 = e1Years16to18;
	}

	public Integer getE1YearsGreaterThan18() {
		return e1YearsGreaterThan18;
	}

	public void setE1YearsGreaterThan18(Integer e1YearsGreaterThan18) {
		this.e1YearsGreaterThan18 = e1YearsGreaterThan18;
	}

	public Integer getE1Total() {
		return e1Total;
	}

	public void setE1Total(Integer e1Total) {
		this.e1Total = e1Total;
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

	public Integer getiPetty0to30Days() {
		return iPetty0to30Days;
	}

	public void setiPetty0to30Days(Integer iPetty0to30Days) {
		this.iPetty0to30Days = iPetty0to30Days;
	}

	public Integer getiPettyMonths1to2() {
		return iPettyMonths1to2;
	}

	public void setiPettyMonths1to2(Integer iPettyMonths1to2) {
		this.iPettyMonths1to2 = iPettyMonths1to2;
	}

	public Integer getiPettyMonths2to3() {
		return iPettyMonths2to3;
	}

	public void setiPettyMonths2to3(Integer iPettyMonths2to3) {
		this.iPettyMonths2to3 = iPettyMonths2to3;
	}

	public Integer getiPettyMonths3to4() {
		return iPettyMonths3to4;
	}

	public void setiPettyMonths3to4(Integer iPettyMonths3to4) {
		this.iPettyMonths3to4 = iPettyMonths3to4;
	}

	public Integer getiPettyMonths4to12() {
		return iPettyMonths4to12;
	}

	public void setiPettyMonths4to12(Integer iPettyMonths4to12) {
		this.iPettyMonths4to12 = iPettyMonths4to12;
	}

	public Integer getiPettyMonthsMoreThan1Year() {
		return iPettyMonthsMoreThan1Year;
	}

	public void setiPettyMonthsMoreThan1Year(Integer iPettyMonthsMoreThan1Year) {
		this.iPettyMonthsMoreThan1Year = iPettyMonthsMoreThan1Year;
	}

	public Integer getiPettyTotal() {
		return iPettyTotal;
	}

	public void setiPettyTotal(Integer iPettyTotal) {
		this.iPettyTotal = iPettyTotal;
	}

	public Integer getiSerious0to30Days() {
		return iSerious0to30Days;
	}

	public void setiSerious0to30Days(Integer iSerious0to30Days) {
		this.iSerious0to30Days = iSerious0to30Days;
	}

	public Integer getiSeriousMonths1to2() {
		return iSeriousMonths1to2;
	}

	public void setiSeriousMonths1to2(Integer iSeriousMonths1to2) {
		this.iSeriousMonths1to2 = iSeriousMonths1to2;
	}

	public Integer getiSeriousMonths2to3() {
		return iSeriousMonths2to3;
	}

	public void setiSeriousMonths2to3(Integer iSeriousMonths2to3) {
		this.iSeriousMonths2to3 = iSeriousMonths2to3;
	}

	public Integer getiSeriousMonths3to4() {
		return iSeriousMonths3to4;
	}

	public void setiSeriousMonths3to4(Integer iSeriousMonths3to4) {
		this.iSeriousMonths3to4 = iSeriousMonths3to4;
	}

	public Integer getiSeriousMonths4to12() {
		return iSeriousMonths4to12;
	}

	public void setiSeriousMonths4to12(Integer iSeriousMonths4to12) {
		this.iSeriousMonths4to12 = iSeriousMonths4to12;
	}

	public Integer getiSeriousMonthsMoreThan1Year() {
		return iSeriousMonthsMoreThan1Year;
	}

	public void setiSeriousMonthsMoreThan1Year(Integer iSeriousMonthsMoreThan1Year) {
		this.iSeriousMonthsMoreThan1Year = iSeriousMonthsMoreThan1Year;
	}

	public Integer getiSeriousTotal() {
		return iSeriousTotal;
	}

	public void setiSeriousTotal(Integer iSeriousTotal) {
		this.iSeriousTotal = iSeriousTotal;
	}

	public Integer getiHeinous0to30Days() {
		return iHeinous0to30Days;
	}

	public void setiHeinous0to30Days(Integer iHeinous0to30Days) {
		this.iHeinous0to30Days = iHeinous0to30Days;
	}

	public Integer getiHeinousMonths1to2() {
		return iHeinousMonths1to2;
	}

	public void setiHeinousMonths1to2(Integer iHeinousMonths1to2) {
		this.iHeinousMonths1to2 = iHeinousMonths1to2;
	}

	public Integer getiHeinousMonths2to3() {
		return iHeinousMonths2to3;
	}

	public void setiHeinousMonths2to3(Integer iHeinousMonths2to3) {
		this.iHeinousMonths2to3 = iHeinousMonths2to3;
	}

	public Integer getiHeinousMonths3to4() {
		return iHeinousMonths3to4;
	}

	public void setiHeinousMonths3to4(Integer iHeinousMonths3to4) {
		this.iHeinousMonths3to4 = iHeinousMonths3to4;
	}

	public Integer getiHeinousMonths4to12() {
		return iHeinousMonths4to12;
	}

	public void setiHeinousMonths4to12(Integer iHeinousMonths4to12) {
		this.iHeinousMonths4to12 = iHeinousMonths4to12;
	}

	public Integer getiHeinousMonthsMoreThan1Year() {
		return iHeinousMonthsMoreThan1Year;
	}

	public void setiHeinousMonthsMoreThan1Year(Integer iHeinousMonthsMoreThan1Year) {
		this.iHeinousMonthsMoreThan1Year = iHeinousMonthsMoreThan1Year;
	}

	public Integer getiHeinousTotal() {
		return iHeinousTotal;
	}

	public void setiHeinousTotal(Integer iHeinousTotal) {
		this.iHeinousTotal = iHeinousTotal;
	}

	public Integer getiTotal0to30Days() {
		return iTotal0to30Days;
	}

	public void setiTotal0to30Days(Integer iTotal0to30Days) {
		this.iTotal0to30Days = iTotal0to30Days;
	}

	public Integer getiTotalMonths1to2() {
		return iTotalMonths1to2;
	}

	public void setiTotalMonths1to2(Integer iTotalMonths1to2) {
		this.iTotalMonths1to2 = iTotalMonths1to2;
	}

	public Integer getiTotalMonths2to3() {
		return iTotalMonths2to3;
	}

	public void setiTotalMonths2to3(Integer iTotalMonths2to3) {
		this.iTotalMonths2to3 = iTotalMonths2to3;
	}

	public Integer getiTotalMonths3to4() {
		return iTotalMonths3to4;
	}

	public void setiTotalMonths3to4(Integer iTotalMonths3to4) {
		this.iTotalMonths3to4 = iTotalMonths3to4;
	}

	public Integer getiTotalMonths4to12() {
		return iTotalMonths4to12;
	}

	public void setiTotalMonths4to12(Integer iTotalMonths4to12) {
		this.iTotalMonths4to12 = iTotalMonths4to12;
	}

	public Integer getiTotalMonthsMoreThan1Year() {
		return iTotalMonthsMoreThan1Year;
	}

	public void setiTotalMonthsMoreThan1Year(Integer iTotalMonthsMoreThan1Year) {
		this.iTotalMonthsMoreThan1Year = iTotalMonthsMoreThan1Year;
	}

	public Integer getiTotalNumberTotal() {
		return iTotalNumberTotal;
	}

	public void setiTotalNumberTotal(Integer iTotalNumberTotal) {
		this.iTotalNumberTotal = iTotalNumberTotal;
	}

	public Integer getJ1FirstDay0to30Days() {
		return j1FirstDay0to30Days;
	}

	public void setJ1FirstDay0to30Days(Integer j1FirstDay0to30Days) {
		this.j1FirstDay0to30Days = j1FirstDay0to30Days;
	}

	public Integer getJ1FirstDayMonths1to2() {
		return j1FirstDayMonths1to2;
	}

	public void setJ1FirstDayMonths1to2(Integer j1FirstDayMonths1to2) {
		this.j1FirstDayMonths1to2 = j1FirstDayMonths1to2;
	}

	public Integer getJ1FirstDayMonths2to3() {
		return j1FirstDayMonths2to3;
	}

	public void setJ1FirstDayMonths2to3(Integer j1FirstDayMonths2to3) {
		this.j1FirstDayMonths2to3 = j1FirstDayMonths2to3;
	}

	public Integer getJ1FirstDayMonths3to4() {
		return j1FirstDayMonths3to4;
	}

	public void setJ1FirstDayMonths3to4(Integer j1FirstDayMonths3to4) {
		this.j1FirstDayMonths3to4 = j1FirstDayMonths3to4;
	}

	public Integer getJ1FirstDayMonths4to12() {
		return j1FirstDayMonths4to12;
	}

	public void setJ1FirstDayMonths4to12(Integer j1FirstDayMonths4to12) {
		this.j1FirstDayMonths4to12 = j1FirstDayMonths4to12;
	}

	public Integer getJ1FirstDayMonthsMoreThan1Year() {
		return j1FirstDayMonthsMoreThan1Year;
	}

	public void setJ1FirstDayMonthsMoreThan1Year(
			Integer j1FirstDayMonthsMoreThan1Year) {
		this.j1FirstDayMonthsMoreThan1Year = j1FirstDayMonthsMoreThan1Year;
	}

	public Integer getJ1Total() {
		return j1Total;
	}

	public void setJ1Total(Integer j1Total) {
		this.j1Total = j1Total;
	}

	public Integer getJ2NewCh0to30Days() {
		return j2NewCh0to30Days;
	}

	public void setJ2NewCh0to30Days(Integer j2NewCh0to30Days) {
		this.j2NewCh0to30Days = j2NewCh0to30Days;
	}

	public Integer getJ2Total() {
		return j2Total;
	}

	public void setJ2Total(Integer j2Total) {
		this.j2Total = j2Total;
	}

	public Integer getJ3MovedOut0to30Days() {
		return j3MovedOut0to30Days;
	}

	public void setJ3MovedOut0to30Days(Integer j3MovedOut0to30Days) {
		this.j3MovedOut0to30Days = j3MovedOut0to30Days;
	}

	public Integer getJ3MovedOutMonths1to2() {
		return j3MovedOutMonths1to2;
	}

	public void setJ3MovedOutMonths1to2(Integer j3MovedOutMonths1to2) {
		this.j3MovedOutMonths1to2 = j3MovedOutMonths1to2;
	}

	public Integer getJ3MovedOutMonths2to3() {
		return j3MovedOutMonths2to3;
	}

	public void setJ3MovedOutMonths2to3(Integer j3MovedOutMonths2to3) {
		this.j3MovedOutMonths2to3 = j3MovedOutMonths2to3;
	}

	public Integer getJ3MovedOutMonths3to4() {
		return j3MovedOutMonths3to4;
	}

	public void setJ3MovedOutMonths3to4(Integer j3MovedOutMonths3to4) {
		this.j3MovedOutMonths3to4 = j3MovedOutMonths3to4;
	}

	public Integer getJ3MovedOutMonths4to12() {
		return j3MovedOutMonths4to12;
	}

	public void setJ3MovedOutMonths4to12(Integer j3MovedOutMonths4to12) {
		this.j3MovedOutMonths4to12 = j3MovedOutMonths4to12;
	}

	public Integer getJ3MovedOutMonthsMoreThan1Year() {
		return j3MovedOutMonthsMoreThan1Year;
	}

	public void setJ3MovedOutMonthsMoreThan1Year(
			Integer j3MovedOutMonthsMoreThan1Year) {
		this.j3MovedOutMonthsMoreThan1Year = j3MovedOutMonthsMoreThan1Year;
	}

	public Integer getJ3Total() {
		return j3Total;
	}

	public void setJ3Total(Integer j3Total) {
		this.j3Total = j3Total;
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

	public Integer getK15() {
		return k15;
	}

	public void setK15(Integer k15) {
		this.k15 = k15;
	}

	public Boolean getK16aMeetingChildrenCommittee() {
		return k16aMeetingChildrenCommittee;
	}

	public void setK16aMeetingChildrenCommittee(Boolean k16aMeetingChildrenCommittee) {
		this.k16aMeetingChildrenCommittee = k16aMeetingChildrenCommittee;
	}

	public Boolean getK17aMeetingHomeManagementCommittee() {
		return k17aMeetingHomeManagementCommittee;
	}

	public void setK17aMeetingHomeManagementCommittee(
			Boolean k17aMeetingHomeManagementCommittee) {
		this.k17aMeetingHomeManagementCommittee = k17aMeetingHomeManagementCommittee;
	}

	public Boolean getK18aAnyOthersDetails() {
		return k18aAnyOthersDetails;
	}

	public void setK18aAnyOthersDetails(Boolean k18aAnyOthersDetails) {
		this.k18aAnyOthersDetails = k18aAnyOthersDetails;
	}
	
	public Boolean getL1WasTrainingHeld() {
		return l1WasTrainingHeld;
	}

	public void setL1WasTrainingHeld(Boolean l1WasTrainingHeld) {
		this.l1WasTrainingHeld = l1WasTrainingHeld;
	}

	public Integer getL1aNoOfTraining() {
		return l1aNoOfTraining;
	}

	public void setL1aNoOfTraining(Integer l1aNoOfTraining) {
		this.l1aNoOfTraining = l1aNoOfTraining;
	}

	public String getK16CCDate() {
		return k16CCDate;
	}

	public void setK16CCDate(String k16ccDate) {
		k16CCDate = k16ccDate;
	}

	public String getK17HMDate() {
		return k17HMDate;
	}

	public void setK17HMDate(String k17hmDate) {
		k17HMDate = k17hmDate;
	}

	public String getK18OtherDetailsDate() {
		return k18OtherDetailsDate;
	}

	public void setK18OtherDetailsDate(String k18OtherDetailsDate) {
		this.k18OtherDetailsDate = k18OtherDetailsDate;
	}

	public Integer getH3Years16to18() {
		return h3Years16to18;
	}

	public void setH3Years16to18(Integer h3Years16to18) {
		this.h3Years16to18 = h3Years16to18;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}

}
