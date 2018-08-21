package org.sdrc.cpmisweb.model;

import java.io.Serializable;
import java.util.Date;
import java.util.List;

import org.sdrc.cpmisweb.domain.CciChildrenHomeTraining;
import org.sdrc.cpmisweb.domain.Timeperiod;

public class CciChildrenHomeModel implements Serializable {
	
    /**
	 * 
	 */
	private static final long serialVersionUID = 2502085137299931229L;
	private Integer id;     
    private List<CciChildrenHomeTraining> cciChildrenHomeTrainings;
    private boolean isLive;    
    private String  nameOfAuthorizedPerson;
    private Integer userId;
    private boolean isSubmitted;
    private Date    dateOfSubmimission;
    private String  nameOfPerson;
    private String  designation;
    private Date    monthyear;
    private String  stateName;
    private Integer districtId;
    private String  typeOfHome;
    private String  nameOfCCI;
    private Integer typeOfInstitutions;
    private Integer govtNonGovt;
    private Integer capacityOfHome;    
    private Integer aYears0to6;
    private Integer aYears7to11;
    private Integer aYears12to15;
    private Integer aYears16to18;
    private Integer aYearsGreaterThan18;
    private Integer aTotal;                     
    private Integer b1Years0to6;
    private Integer b1Years7to11;
    private Integer b1Years12to15;
    private Integer b1Years16to18;
    private Integer b1YearsGreaterThan18;
    private Integer b1Total;                        
    private Integer b2Years0to6;
    private Integer b2Years7to11;
    private Integer b2Years12to15;
    private Integer b2Years16to18;
    private Integer b2YearsGreaterThan18;
    private Integer b2Total;                        
    private Integer b3Years0to6;
    private Integer b3Years7to11;
    private Integer b3Years12to15;
    private Integer b3Years16to18;
    private Integer b3YearsGreaterThan18;
    private Integer b3Total;                        
    private Integer cYears0to6;
    private Integer cYears7to11;
    private Integer cYears12to15;
    private Integer cYears16to18;
    private Integer cYearsGreaterThan18;
    private Integer cTotal;
    private Integer d1Years0to6;
    private Integer d1Years7to11;
    private Integer d1Years12to15;
    private Integer d1Years16to18;
    private Integer d1YearsGreaterThan18;
    private Integer d1Total;
    private Integer d2Years0to6;
    private Integer d2Years7to11;
    private Integer d2Years12to15;
    private Integer d2Years16to18;
    private Integer d2YearsGreaterThan18;
    private Integer d2Total;
    private Integer d3Years0to6;
    private Integer d3Years7to11;
    private Integer d3Years12to15;
    private Integer d3Years16to18;
    private Integer d3YearsGreaterThan18;
    private Integer d3Total;
    private Integer d4Years0to6;
    private Integer d4Years7to11;
    private Integer d4Years12to15;
    private Integer d4Years16to18;
    private Integer d4YearsGreaterThan18;
    private Integer d4Total;
    private Integer d5Years0to6;
    private Integer d5Years7to11;
    private Integer d5Years12to15;
    private Integer d5Years16to18;
    private Integer d5YearsGreaterThan18;
    private Integer d5Total;
    private Integer d6Years0to6;
    private Integer d6Years7to11;
    private Integer d6Years12to15;
    private Integer d6Years16to18;
    private Integer d6YearsGreaterThan18;
    private Integer d6Total;
    private Integer d7aYears0to6;
    private Integer d7aYears7to11;
    private Integer d7aYears12to15;
    private Integer d7aYears16to18;
    private Integer d7aYearsGreaterThan18;
    private Integer d7aTotal;
    private String  d7bOtherdetails;    
    private Integer d8Years0to6;
    private Integer d8Years7to11;
    private Integer d8Years12to15;
    private Integer d8Years16to18;
    private Integer d8YearsGreaterThan18;
    private Integer d8Total;
    private Integer e1Years0to6;
    private Integer e1Years7to11;
    private Integer e1Years12to15;
    private Integer e1Years16to18;
    private Integer e1YearsGreaterThan18;
    private Integer e1Total;
    private Integer fST;
    private Integer fSC;
    private Integer fOBC;
    private Integer fEBC;
    private Integer fOthers;
    private Integer fNotKnown;
    private Integer fTotal;
    private Integer fMinority;
    private Integer g1Years0to6;
    private Integer g1Years7to11;
    private Integer g1Years12to15;
    private Integer g1Years16to18;
    private Integer g1YearsGreaterThan18;
    private Integer g1Total;
    private Integer g2Years0to6;
    private Integer g2Years7to11;
    private Integer g2Years12to15;
    private Integer g2Years16to18;
    private Integer g2YearsGreaterThan18;
    private Integer g2Total;
    private Integer g3Years0to6;
    private Integer g3Years7to11;
    private Integer g3Years12to15;
    private Integer g3Years16to18;
    private Integer g3YearsGreaterThan18;
    private Integer g3Total;
    private Integer g4Years0to6;
    private Integer g4Years7to11;
    private Integer g4Years12to15;
    private Integer g4Years16to18;
    private Integer g4YearsGreaterThan18;
    private Integer g4Total;
    private Integer g5Years0to6;
    private Integer g5Years7to11;
    private Integer g5Years12to15;
    private Integer g5Years16to18;
    private Integer g5YearsGreaterThan18;
    private Integer g5Total;
    private Integer g6Years0to6;
    private Integer g6Years7to11;
    private Integer g6Years12to15;
    private Integer g6Years16to18;
    private Integer g6YearsGreaterThan18;
    private Integer g6Total;
    private Integer g7Years0to6;
    private Integer g7Years7to11;
    private Integer g7Years12to15;
    private Integer g7Years16to18;
    private Integer g7YearsGreaterThan18;
    private Integer g7Total;
    private Integer g8Years0to6;
    private Integer g8Years7to11;
    private Integer g8Years12to15;
    private Integer g8Years16to18;
    private Integer g8YearsGreaterThan18;
    private Integer g8Total;
    private Integer h1Years0to6;
    private Integer h1Years7to11;
    private Integer h1Years12to15;
    private Integer h1Years16to18;
    private Integer h1YearsGreaterThan18;
    private Integer h1Total;
    private Integer h2Years0to6;
    private Integer h2Years7to11;
    private Integer h2Years12to15;
    private Integer h2Years16to18;
    private Integer h2YearsGreaterThan18;
    private Integer h2Total;
    private Integer h3Years0to6;
    private Integer h3Years7to11;
    private Integer h3Years12to15;
    private Integer h3Years16to18;
    private Integer h3YearsGreaterThan18;
    private Integer h3Total;
    private Integer h4Years0to6;
    private Integer h4Years7to11;
    private Integer h4Years12to15;
    private Integer h4Years16to18;
    private Integer h4YearsGreaterThan18;
    private Integer h4Total;
    private Integer h5Years0to6;
    private Integer h5Years7to11;
    private Integer h5Years12to15;
    private Integer h5Years16to18;
    private Integer h5YearsGreaterThan18;
    private Integer h5Total;
    private Integer iOrphan0to30Days;
    private Integer iOrphanMonths1to2;
    private Integer iOrphanMonths2to3;
    private Integer iOrphanMonths3to4;
    private Integer iOrphanMonths4to12;
    private Integer iOrphanMonthsMoreThan1Year;
    private Integer iOrphanTotal;
    private Integer iRunAway0to30Days;
    private Integer iRunAwayMonths1to2;
    private Integer iRunAwayMonths2to3;
    private Integer iRunAwayMonths3to4;
    private Integer iRunAwayMonths4to12;
    private Integer iRunAwayMonthsMoreThan1Year;
    private Integer iRunAwayTotal;
    private Integer iLegallYFreeForAdoption0to30Days;
    private Integer iLegallYFreeForAdoptionMonths1to2;
    private Integer iLegallYFreeForAdoptionMonths2to3;
    private Integer iLegallYFreeForAdoptionMonths3to4;
    private Integer iLegallYFreeForAdoptionMonths4to12;
    private Integer iLegallYFreeForAdoptionMonthsMoreThan1Year;
    private Integer iLegallYFreeForAdoptionTotal;
    private Integer iChildLabour0to30Days;
    private Integer iChildLabourMonths1to2;
    private Integer iChildLabourMonths2to3;
    private Integer iChildLabourMonths3to4;
    private Integer iChildLabourMonths4to12;
    private Integer iChildLabourMonthsMoreThan1Year;
    private Integer iChildLabourTotal;
    private Integer iTrafficked0to30Days;
    private Integer iTraffickedMonths1to2;
    private Integer iTraffickedMonths2to3;
    private Integer iTraffickedMonths3to4;
    private Integer iTraffickedMonths4to12;
    private Integer iTraffickedMonthsMoreThan1Year;
    private Integer iTraffickedTotal;
    private Integer iVicxtimOfSexual0to30Days;
    private Integer iVicxtimOfSexualMonths1to2;
    private Integer iVicxtimOfSexualMonths2to3;
    private Integer iVicxtimOfSexualMonths3to4;
    private Integer iVicxtimOfSexualMonths4to12;
    private Integer iVicxtimOfSexualMonthsMoreThan1Year;
    private Integer iVicxtimOfSexualTotal;
    private Integer iOtherChildren0to30Days;
    private Integer iOtherChildrenMonths1to2;
    private Integer iOtherChildrenMonths2to3;
    private Integer iOtherChildrenMonths3to4;
    private Integer iOtherChildrenMonths4to12;
    private Integer iOtherChildrenMonthsMoreThan1Year;
    private String i7aOtherSpecify;
    private Integer iOtherChildrenTotal;
    private Integer iTotal0to30Days;
    private Integer iTotalMonths1to2;
    private Integer iTotalMonths2to3;
    private Integer iTotalMonths3to4;
    private Integer iTotalMonths4to12;
    private Integer iTotalMonthsMoreThan1Year;
    private Integer iTotalNumberTotal;
    private Integer j1Total0to30Days;
    private Integer j1TotalMonths1to2;
    private Integer j1TotalMonths2to3;
    private Integer j1TotalMonths3to4;
    private Integer j1TotalMonths4to12;
    private Integer j1TotalMonthsMoreThan1Year;
    private Integer j1TotalNumberTotal;
    private Integer j2Total0to30Days;
    private Integer j2TotalNumberTotal;
    private Integer j3Total0to30Days;
    private Integer j3TotalMonths1to2;
    private Integer j3TotalMonths2to3;
    private Integer j3TotalMonths3to4;
    private Integer j3TotalMonths4to12;
    private Integer j3TotalMonthsMoreThan1Year;
    private Integer j3TotalNumberTotal;
    private Integer j4Total0to30Days;
    private Integer j4TotalMonths1to2;
    private Integer j4TotalMonths2to3;
    private Integer j4TotalMonths3to4;
    private Integer j4TotalMonths4to12;
    private Integer j4TotalMonthsMoreThan1Year;
    private Integer j4TotalNumberTotal;
    private Integer k1;
    private Integer k2;
    private Integer k3;
    private Integer k4;
    private Integer k5;
    private Integer k6;
    private Integer k7;
    private Integer k8;
    private Integer k9;
    private Integer k10;
    private Integer k11;
    private Integer k12;
    private Integer k13;
    private Integer k14;
    private Integer k15;
    private Integer k16;
    private Integer k17;
    private Integer k18;
    private Integer k19;
    private Boolean k19aMeetingChildrenCommittee;
    private String    k19ccMeetingDate;
    private Boolean k20aMeetingHomeManagementCommittee;
    private String    k20hmMeetingDate;
    private Boolean k21aAnyOthersDetails;
    private String    k21OtherDetailsDate;
    private Boolean l1wasTrainingHeld;
    private Integer l1aNoTrainingHeld;
    private Timeperiod timeperiod;
    
    
   //getters and setters starts 
	public Integer getId() {
		return id;
	}
	public void setId(Integer id) {
		this.id = id;
	}
	public List<CciChildrenHomeTraining> getCciChildrenHomeTrainings() {
		return cciChildrenHomeTrainings;
	}
	public void setCciChildrenHomeTrainings(
			List<CciChildrenHomeTraining> cciChildrenHomeTrainings) {
		this.cciChildrenHomeTrainings = cciChildrenHomeTrainings;
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
	public Integer getD7aYears0to6() {
		return d7aYears0to6;
	}
	public void setD7aYears0to6(Integer d7aYears0to6) {
		this.d7aYears0to6 = d7aYears0to6;
	}
	public Integer getD7aYears7to11() {
		return d7aYears7to11;
	}
	public void setD7aYears7to11(Integer d7aYears7to11) {
		this.d7aYears7to11 = d7aYears7to11;
	}
	public Integer getD7aYears12to15() {
		return d7aYears12to15;
	}
	public void setD7aYears12to15(Integer d7aYears12to15) {
		this.d7aYears12to15 = d7aYears12to15;
	}
	public Integer getD7aYears16to18() {
		return d7aYears16to18;
	}
	public void setD7aYears16to18(Integer d7aYears16to18) {
		this.d7aYears16to18 = d7aYears16to18;
	}
	public Integer getD7aYearsGreaterThan18() {
		return d7aYearsGreaterThan18;
	}
	public void setD7aYearsGreaterThan18(Integer d7aYearsGreaterThan18) {
		this.d7aYearsGreaterThan18 = d7aYearsGreaterThan18;
	}
	public Integer getD7aTotal() {
		return d7aTotal;
	}
	public void setD7aTotal(Integer d7aTotal) {
		this.d7aTotal = d7aTotal;
	}
	public String getD7bOtherdetails() {
		return d7bOtherdetails;
	}
	public void setD7bOtherdetails(String d7bOtherdetails) {
		this.d7bOtherdetails = d7bOtherdetails;
	}
	public Integer getD8Years0to6() {
		return d8Years0to6;
	}
	public void setD8Years0to6(Integer d8Years0to6) {
		this.d8Years0to6 = d8Years0to6;
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
	public Integer getE1Years0to6() {
		return e1Years0to6;
	}
	public void setE1Years0to6(Integer e1Years0to6) {
		this.e1Years0to6 = e1Years0to6;
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
	public Integer getG8Years0to6() {
		return g8Years0to6;
	}
	public void setG8Years0to6(Integer g8Years0to6) {
		this.g8Years0to6 = g8Years0to6;
	}
	public Integer getG8Years7to11() {
		return g8Years7to11;
	}
	public void setG8Years7to11(Integer g8Years7to11) {
		this.g8Years7to11 = g8Years7to11;
	}
	public Integer getG8Years12to15() {
		return g8Years12to15;
	}
	public void setG8Years12to15(Integer g8Years12to15) {
		this.g8Years12to15 = g8Years12to15;
	}
	public Integer getG8Years16to18() {
		return g8Years16to18;
	}
	public void setG8Years16to18(Integer g8Years16to18) {
		this.g8Years16to18 = g8Years16to18;
	}
	public Integer getG8YearsGreaterThan18() {
		return g8YearsGreaterThan18;
	}
	public void setG8YearsGreaterThan18(Integer g8YearsGreaterThan18) {
		this.g8YearsGreaterThan18 = g8YearsGreaterThan18;
	}
	public Integer getG8Total() {
		return g8Total;
	}
	public void setG8Total(Integer g8Total) {
		this.g8Total = g8Total;
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
	public Integer getiOrphan0to30Days() {
		return iOrphan0to30Days;
	}
	public void setiOrphan0to30Days(Integer iOrphan0to30Days) {
		this.iOrphan0to30Days = iOrphan0to30Days;
	}
	public Integer getiOrphanMonths1to2() {
		return iOrphanMonths1to2;
	}
	public void setiOrphanMonths1to2(Integer iOrphanMonths1to2) {
		this.iOrphanMonths1to2 = iOrphanMonths1to2;
	}
	public Integer getiOrphanMonths2to3() {
		return iOrphanMonths2to3;
	}
	public void setiOrphanMonths2to3(Integer iOrphanMonths2to3) {
		this.iOrphanMonths2to3 = iOrphanMonths2to3;
	}
	public Integer getiOrphanMonths3to4() {
		return iOrphanMonths3to4;
	}
	public void setiOrphanMonths3to4(Integer iOrphanMonths3to4) {
		this.iOrphanMonths3to4 = iOrphanMonths3to4;
	}
	public Integer getiOrphanMonths4to12() {
		return iOrphanMonths4to12;
	}
	public void setiOrphanMonths4to12(Integer iOrphanMonths4to12) {
		this.iOrphanMonths4to12 = iOrphanMonths4to12;
	}
	public Integer getiOrphanMonthsMoreThan1Year() {
		return iOrphanMonthsMoreThan1Year;
	}
	public void setiOrphanMonthsMoreThan1Year(Integer iOrphanMonthsMoreThan1Year) {
		this.iOrphanMonthsMoreThan1Year = iOrphanMonthsMoreThan1Year;
	}
	public Integer getiOrphanTotal() {
		return iOrphanTotal;
	}
	public void setiOrphanTotal(Integer iOrphanTotal) {
		this.iOrphanTotal = iOrphanTotal;
	}
	public Integer getiRunAway0to30Days() {
		return iRunAway0to30Days;
	}
	public void setiRunAway0to30Days(Integer iRunAway0to30Days) {
		this.iRunAway0to30Days = iRunAway0to30Days;
	}
	public Integer getiRunAwayMonths1to2() {
		return iRunAwayMonths1to2;
	}
	public void setiRunAwayMonths1to2(Integer iRunAwayMonths1to2) {
		this.iRunAwayMonths1to2 = iRunAwayMonths1to2;
	}
	public Integer getiRunAwayMonths2to3() {
		return iRunAwayMonths2to3;
	}
	public void setiRunAwayMonths2to3(Integer iRunAwayMonths2to3) {
		this.iRunAwayMonths2to3 = iRunAwayMonths2to3;
	}
	public Integer getiRunAwayMonths3to4() {
		return iRunAwayMonths3to4;
	}
	public void setiRunAwayMonths3to4(Integer iRunAwayMonths3to4) {
		this.iRunAwayMonths3to4 = iRunAwayMonths3to4;
	}
	public Integer getiRunAwayMonths4to12() {
		return iRunAwayMonths4to12;
	}
	public void setiRunAwayMonths4to12(Integer iRunAwayMonths4to12) {
		this.iRunAwayMonths4to12 = iRunAwayMonths4to12;
	}
	public Integer getiRunAwayMonthsMoreThan1Year() {
		return iRunAwayMonthsMoreThan1Year;
	}
	public void setiRunAwayMonthsMoreThan1Year(Integer iRunAwayMonthsMoreThan1Year) {
		this.iRunAwayMonthsMoreThan1Year = iRunAwayMonthsMoreThan1Year;
	}
	public Integer getiRunAwayTotal() {
		return iRunAwayTotal;
	}
	public void setiRunAwayTotal(Integer iRunAwayTotal) {
		this.iRunAwayTotal = iRunAwayTotal;
	}
	public Integer getiLegallYFreeForAdoption0to30Days() {
		return iLegallYFreeForAdoption0to30Days;
	}
	public void setiLegallYFreeForAdoption0to30Days(
			Integer iLegallYFreeForAdoption0to30Days) {
		this.iLegallYFreeForAdoption0to30Days = iLegallYFreeForAdoption0to30Days;
	}
	public Integer getiLegallYFreeForAdoptionMonths1to2() {
		return iLegallYFreeForAdoptionMonths1to2;
	}
	public void setiLegallYFreeForAdoptionMonths1to2(
			Integer iLegallYFreeForAdoptionMonths1to2) {
		this.iLegallYFreeForAdoptionMonths1to2 = iLegallYFreeForAdoptionMonths1to2;
	}
	public Integer getiLegallYFreeForAdoptionMonths2to3() {
		return iLegallYFreeForAdoptionMonths2to3;
	}
	public void setiLegallYFreeForAdoptionMonths2to3(
			Integer iLegallYFreeForAdoptionMonths2to3) {
		this.iLegallYFreeForAdoptionMonths2to3 = iLegallYFreeForAdoptionMonths2to3;
	}
	public Integer getiLegallYFreeForAdoptionMonths3to4() {
		return iLegallYFreeForAdoptionMonths3to4;
	}
	public void setiLegallYFreeForAdoptionMonths3to4(
			Integer iLegallYFreeForAdoptionMonths3to4) {
		this.iLegallYFreeForAdoptionMonths3to4 = iLegallYFreeForAdoptionMonths3to4;
	}
	public Integer getiLegallYFreeForAdoptionMonths4to12() {
		return iLegallYFreeForAdoptionMonths4to12;
	}
	public void setiLegallYFreeForAdoptionMonths4to12(
			Integer iLegallYFreeForAdoptionMonths4to12) {
		this.iLegallYFreeForAdoptionMonths4to12 = iLegallYFreeForAdoptionMonths4to12;
	}
	public Integer getiLegallYFreeForAdoptionMonthsMoreThan1Year() {
		return iLegallYFreeForAdoptionMonthsMoreThan1Year;
	}
	public void setiLegallYFreeForAdoptionMonthsMoreThan1Year(
			Integer iLegallYFreeForAdoptionMonthsMoreThan1Year) {
		this.iLegallYFreeForAdoptionMonthsMoreThan1Year = iLegallYFreeForAdoptionMonthsMoreThan1Year;
	}
	public Integer getiLegallYFreeForAdoptionTotal() {
		return iLegallYFreeForAdoptionTotal;
	}
	public void setiLegallYFreeForAdoptionTotal(Integer iLegallYFreeForAdoptionTotal) {
		this.iLegallYFreeForAdoptionTotal = iLegallYFreeForAdoptionTotal;
	}
	public Integer getiChildLabour0to30Days() {
		return iChildLabour0to30Days;
	}
	public void setiChildLabour0to30Days(Integer iChildLabour0to30Days) {
		this.iChildLabour0to30Days = iChildLabour0to30Days;
	}
	public Integer getiChildLabourMonths1to2() {
		return iChildLabourMonths1to2;
	}
	public void setiChildLabourMonths1to2(Integer iChildLabourMonths1to2) {
		this.iChildLabourMonths1to2 = iChildLabourMonths1to2;
	}
	public Integer getiChildLabourMonths2to3() {
		return iChildLabourMonths2to3;
	}
	public void setiChildLabourMonths2to3(Integer iChildLabourMonths2to3) {
		this.iChildLabourMonths2to3 = iChildLabourMonths2to3;
	}
	public Integer getiChildLabourMonths3to4() {
		return iChildLabourMonths3to4;
	}
	public void setiChildLabourMonths3to4(Integer iChildLabourMonths3to4) {
		this.iChildLabourMonths3to4 = iChildLabourMonths3to4;
	}
	public Integer getiChildLabourMonths4to12() {
		return iChildLabourMonths4to12;
	}
	public void setiChildLabourMonths4to12(Integer iChildLabourMonths4to12) {
		this.iChildLabourMonths4to12 = iChildLabourMonths4to12;
	}
	public Integer getiChildLabourMonthsMoreThan1Year() {
		return iChildLabourMonthsMoreThan1Year;
	}
	public void setiChildLabourMonthsMoreThan1Year(
			Integer iChildLabourMonthsMoreThan1Year) {
		this.iChildLabourMonthsMoreThan1Year = iChildLabourMonthsMoreThan1Year;
	}
	public Integer getiChildLabourTotal() {
		return iChildLabourTotal;
	}
	public void setiChildLabourTotal(Integer iChildLabourTotal) {
		this.iChildLabourTotal = iChildLabourTotal;
	}
	public Integer getiTrafficked0to30Days() {
		return iTrafficked0to30Days;
	}
	public void setiTrafficked0to30Days(Integer iTrafficked0to30Days) {
		this.iTrafficked0to30Days = iTrafficked0to30Days;
	}
	public Integer getiTraffickedMonths1to2() {
		return iTraffickedMonths1to2;
	}
	public void setiTraffickedMonths1to2(Integer iTraffickedMonths1to2) {
		this.iTraffickedMonths1to2 = iTraffickedMonths1to2;
	}
	public Integer getiTraffickedMonths2to3() {
		return iTraffickedMonths2to3;
	}
	public void setiTraffickedMonths2to3(Integer iTraffickedMonths2to3) {
		this.iTraffickedMonths2to3 = iTraffickedMonths2to3;
	}
	public Integer getiTraffickedMonths3to4() {
		return iTraffickedMonths3to4;
	}
	public void setiTraffickedMonths3to4(Integer iTraffickedMonths3to4) {
		this.iTraffickedMonths3to4 = iTraffickedMonths3to4;
	}
	public Integer getiTraffickedMonths4to12() {
		return iTraffickedMonths4to12;
	}
	public void setiTraffickedMonths4to12(Integer iTraffickedMonths4to12) {
		this.iTraffickedMonths4to12 = iTraffickedMonths4to12;
	}
	public Integer getiTraffickedMonthsMoreThan1Year() {
		return iTraffickedMonthsMoreThan1Year;
	}
	public void setiTraffickedMonthsMoreThan1Year(
			Integer iTraffickedMonthsMoreThan1Year) {
		this.iTraffickedMonthsMoreThan1Year = iTraffickedMonthsMoreThan1Year;
	}
	public Integer getiTraffickedTotal() {
		return iTraffickedTotal;
	}
	public void setiTraffickedTotal(Integer iTraffickedTotal) {
		this.iTraffickedTotal = iTraffickedTotal;
	}
	public Integer getiVicxtimOfSexual0to30Days() {
		return iVicxtimOfSexual0to30Days;
	}
	public void setiVicxtimOfSexual0to30Days(Integer iVicxtimOfSexual0to30Days) {
		this.iVicxtimOfSexual0to30Days = iVicxtimOfSexual0to30Days;
	}
	public Integer getiVicxtimOfSexualMonths1to2() {
		return iVicxtimOfSexualMonths1to2;
	}
	public void setiVicxtimOfSexualMonths1to2(Integer iVicxtimOfSexualMonths1to2) {
		this.iVicxtimOfSexualMonths1to2 = iVicxtimOfSexualMonths1to2;
	}
	public Integer getiVicxtimOfSexualMonths2to3() {
		return iVicxtimOfSexualMonths2to3;
	}
	public void setiVicxtimOfSexualMonths2to3(Integer iVicxtimOfSexualMonths2to3) {
		this.iVicxtimOfSexualMonths2to3 = iVicxtimOfSexualMonths2to3;
	}
	public Integer getiVicxtimOfSexualMonths3to4() {
		return iVicxtimOfSexualMonths3to4;
	}
	public void setiVicxtimOfSexualMonths3to4(Integer iVicxtimOfSexualMonths3to4) {
		this.iVicxtimOfSexualMonths3to4 = iVicxtimOfSexualMonths3to4;
	}
	public Integer getiVicxtimOfSexualMonths4to12() {
		return iVicxtimOfSexualMonths4to12;
	}
	public void setiVicxtimOfSexualMonths4to12(Integer iVicxtimOfSexualMonths4to12) {
		this.iVicxtimOfSexualMonths4to12 = iVicxtimOfSexualMonths4to12;
	}
	public Integer getiVicxtimOfSexualMonthsMoreThan1Year() {
		return iVicxtimOfSexualMonthsMoreThan1Year;
	}
	public void setiVicxtimOfSexualMonthsMoreThan1Year(
			Integer iVicxtimOfSexualMonthsMoreThan1Year) {
		this.iVicxtimOfSexualMonthsMoreThan1Year = iVicxtimOfSexualMonthsMoreThan1Year;
	}
	public Integer getiVicxtimOfSexualTotal() {
		return iVicxtimOfSexualTotal;
	}
	public void setiVicxtimOfSexualTotal(Integer iVicxtimOfSexualTotal) {
		this.iVicxtimOfSexualTotal = iVicxtimOfSexualTotal;
	}
	public Integer getiOtherChildren0to30Days() {
		return iOtherChildren0to30Days;
	}
	public void setiOtherChildren0to30Days(Integer iOtherChildren0to30Days) {
		this.iOtherChildren0to30Days = iOtherChildren0to30Days;
	}
	public Integer getiOtherChildrenMonths1to2() {
		return iOtherChildrenMonths1to2;
	}
	public void setiOtherChildrenMonths1to2(Integer iOtherChildrenMonths1to2) {
		this.iOtherChildrenMonths1to2 = iOtherChildrenMonths1to2;
	}
	public Integer getiOtherChildrenMonths2to3() {
		return iOtherChildrenMonths2to3;
	}
	public void setiOtherChildrenMonths2to3(Integer iOtherChildrenMonths2to3) {
		this.iOtherChildrenMonths2to3 = iOtherChildrenMonths2to3;
	}
	public Integer getiOtherChildrenMonths3to4() {
		return iOtherChildrenMonths3to4;
	}
	public void setiOtherChildrenMonths3to4(Integer iOtherChildrenMonths3to4) {
		this.iOtherChildrenMonths3to4 = iOtherChildrenMonths3to4;
	}
	public Integer getiOtherChildrenMonths4to12() {
		return iOtherChildrenMonths4to12;
	}
	public void setiOtherChildrenMonths4to12(Integer iOtherChildrenMonths4to12) {
		this.iOtherChildrenMonths4to12 = iOtherChildrenMonths4to12;
	}
	public Integer getiOtherChildrenMonthsMoreThan1Year() {
		return iOtherChildrenMonthsMoreThan1Year;
	}
	public void setiOtherChildrenMonthsMoreThan1Year(
			Integer iOtherChildrenMonthsMoreThan1Year) {
		this.iOtherChildrenMonthsMoreThan1Year = iOtherChildrenMonthsMoreThan1Year;
	}
	public Integer getiOtherChildrenTotal() {
		return iOtherChildrenTotal;
	}
	public void setiOtherChildrenTotal(Integer iOtherChildrenTotal) {
		this.iOtherChildrenTotal = iOtherChildrenTotal;
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
	public Integer getK15() {
		return k15;
	}
	public void setK15(Integer k15) {
		this.k15 = k15;
	}
	public Integer getK16() {
		return k16;
	}
	public void setK16(Integer k16) {
		this.k16 = k16;
	}
	public Integer getK17() {
		return k17;
	}
	public void setK17(Integer k17) {
		this.k17 = k17;
	}
	public Integer getK18() {
		return k18;
	}
	public void setK18(Integer k18) {
		this.k18 = k18;
	}
	public Integer getK19() {
		return k19;
	}
	public void setK19(Integer k19) {
		this.k19 = k19;
	}
	public Boolean getK19aMeetingChildrenCommittee() {
		return k19aMeetingChildrenCommittee;
	}
	public void setK19aMeetingChildrenCommittee(Boolean k19aMeetingChildrenCommittee) {
		this.k19aMeetingChildrenCommittee = k19aMeetingChildrenCommittee;
	}
	public String getK19ccMeetingDate() {
		return k19ccMeetingDate;
	}
	public void setK19ccMeetingDate(String k19ccMeetingDate) {
		this.k19ccMeetingDate = k19ccMeetingDate;
	}
	public Boolean getK20aMeetingHomeManagementCommittee() {
		return k20aMeetingHomeManagementCommittee;
	}
	public void setK20aMeetingHomeManagementCommittee(
			Boolean k20aMeetingHomeManagementCommittee) {
		this.k20aMeetingHomeManagementCommittee = k20aMeetingHomeManagementCommittee;
	}
	public String getK20hmMeetingDate() {
		return k20hmMeetingDate;
	}
	public void setK20hmMeetingDate(String k20hmMeetingDate) {
		this.k20hmMeetingDate = k20hmMeetingDate;
	}
	public Boolean getK21aAnyOthersDetails() {
		return k21aAnyOthersDetails;
	}
	public void setK21aAnyOthersDetails(Boolean k21aAnyOthersDetails) {
		this.k21aAnyOthersDetails = k21aAnyOthersDetails;
	}
	public String getK21OtherDetailsDate() {
		return k21OtherDetailsDate;
	}
	public void setK21OtherDetailsDate(String k21OtherDetailsDate) {
		this.k21OtherDetailsDate = k21OtherDetailsDate;
	}
	public Boolean getL1wasTrainingHeld() {
		return l1wasTrainingHeld;
	}
	public void setL1wasTrainingHeld(Boolean l1wasTrainingHeld) {
		this.l1wasTrainingHeld = l1wasTrainingHeld;
	}
	public Integer getL1aNoTrainingHeld() {
		return l1aNoTrainingHeld;
	}
	public void setL1aNoTrainingHeld(Integer l1aNoTrainingHeld) {
		this.l1aNoTrainingHeld = l1aNoTrainingHeld;
	}
	public String getI7aOtherSpecify() {
		return i7aOtherSpecify;
	}
	public void setI7aOtherSpecify(String i7aOtherSpecify) {
		this.i7aOtherSpecify = i7aOtherSpecify;
	}
	public Timeperiod getTimeperiod() {
		return timeperiod;
	}
	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}
	
	//getters and setters ends
}
