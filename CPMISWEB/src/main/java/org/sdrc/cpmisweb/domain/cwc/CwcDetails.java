package org.sdrc.cpmisweb.domain.cwc;

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
import javax.persistence.PrePersist;
import javax.persistence.PreUpdate;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

import org.sdrc.cpmisweb.domain.Timeperiod;
/**
 * Biswa Ranjan
 */
@Entity
@Table(name = "cwc_details")
public class CwcDetails {
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer id;
	
	@OneToMany(fetch = FetchType.EAGER, mappedBy="cwcId")
	private List<CwcDetailsTraining> cwcDetailsTrainings;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionA cwcSectionA;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionB cwcSectionB;

	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionC cwcSectionC;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionD cwcSectionD;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionE cwcSectionE;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionF cwcSectionF;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionG cwcSectionG;
	
	@OneToOne(cascade=CascadeType.ALL)
	private CwcSectionH cwcSectionH;
	
	@Column(name="name_Of_authorized_person")
	private String nameOfAuthorizedPerson;
	
	@Column(name = "is_live")
	private boolean isLive;

	@Column(name = "user_id")
	private Integer userId;

	@Column(name = "is_submitted")
	private boolean isSubmitted;

	@Column(name = "date_of_submission")
	private Date dateOfSubmimission;

	@Temporal(value = TemporalType.TIMESTAMP)
	@Column(name = "last_save_date", nullable = false)
	private Date lastSaveDate;
	
	// Biswa new changes
	
	@Temporal(TemporalType.TIMESTAMP)
    @Column(name = "first_save_date", updatable = false)
    private Date firstSaveDate;

    @PrePersist
    private void onCreate() {
    	lastSaveDate = firstSaveDate = new Date();
    }

    @PreUpdate
    private void onUpdate() {
    	lastSaveDate = new Date();
    }
	
	//
	
	
	@Column(name = "month_and_year")
	private Date monthyear;
    @ManyToOne
    @JoinColumn(name="timeperiod_id_fk")
	private Timeperiod timeperiod;
	
	@Column(name="designation")
	private String designation;

	@Column(name = "district_id")
	private Integer districtId;

	@Column(name = "total_members")
	private Integer totalMembers;

	@Column(name = "no_of_female")
	private Integer noOfFemale;

	@Column(name = "no_of_male")
	private Integer noOfMale;

	@Column(name = "place_of_sitting")
	private String placeOfSitting;
	
	@Column(name="i1_Training")
	private String i1Training;

	@Column(name="i1a_NoOfTrainings")
	private Integer i1aNoOfTrainings;

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public List<CwcDetailsTraining> getCwcDetailsTrainings() {
		return cwcDetailsTrainings;
	}

	public void setCwcDetailsTrainings(List<CwcDetailsTraining> cwcDetailsTrainings) {
		this.cwcDetailsTrainings = cwcDetailsTrainings;
	}

	public CwcSectionA getCwcSectionA() {
		return cwcSectionA;
	}

	public void setCwcSectionA(CwcSectionA cwcSectionA) {
		this.cwcSectionA = cwcSectionA;
	}

	public CwcSectionB getCwcSectionB() {
		return cwcSectionB;
	}

	public void setCwcSectionB(CwcSectionB cwcSectionB) {
		this.cwcSectionB = cwcSectionB;
	}

	public CwcSectionC getCwcSectionC() {
		return cwcSectionC;
	}

	public void setCwcSectionC(CwcSectionC cwcSectionC) {
		this.cwcSectionC = cwcSectionC;
	}

	public CwcSectionD getCwcSectionD() {
		return cwcSectionD;
	}

	public void setCwcSectionD(CwcSectionD cwcSectionD) {
		this.cwcSectionD = cwcSectionD;
	}

	public CwcSectionE getCwcSectionE() {
		return cwcSectionE;
	}

	public void setCwcSectionE(CwcSectionE cwcSectionE) {
		this.cwcSectionE = cwcSectionE;
	}

	public CwcSectionF getCwcSectionF() {
		return cwcSectionF;
	}

	public void setCwcSectionF(CwcSectionF cwcSectionF) {
		this.cwcSectionF = cwcSectionF;
	}

	public CwcSectionG getCwcSectionG() {
		return cwcSectionG;
	}

	public void setCwcSectionG(CwcSectionG cwcSectionG) {
		this.cwcSectionG = cwcSectionG;
	}

	public CwcSectionH getCwcSectionH() {
		return cwcSectionH;
	}

	public void setCwcSectionH(CwcSectionH cwcSectionH) {
		this.cwcSectionH = cwcSectionH;
	}

	public String getNameOfAuthorizedPerson() {
		return nameOfAuthorizedPerson;
	}

	public void setNameOfAuthorizedPerson(String nameOfAuthorizedPerson) {
		this.nameOfAuthorizedPerson = nameOfAuthorizedPerson;
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

	public Date getMonthyear() {
		return monthyear;
	}

	public void setMonthyear(Date monthyear) {
		this.monthyear = monthyear;
	}

	public String getDesignation() {
		return designation;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public Integer getTotalMembers() {
		return totalMembers;
	}

	public void setTotalMembers(Integer totalMembers) {
		this.totalMembers = totalMembers;
	}

	public Integer getNoOfFemale() {
		return noOfFemale;
	}

	public void setNoOfFemale(Integer noOfFemale) {
		this.noOfFemale = noOfFemale;
	}

	public Integer getNoOfMale() {
		return noOfMale;
	}

	public void setNoOfMale(Integer noOfMale) {
		this.noOfMale = noOfMale;
	}

	public String getPlaceOfSitting() {
		return placeOfSitting;
	}

	public void setPlaceOfSitting(String placeOfSitting) {
		this.placeOfSitting = placeOfSitting;
	}

	public String getI1Training() {
		return i1Training;
	}

	public void setI1Training(String i1Training) {
		this.i1Training = i1Training;
	}

	public Integer getI1aNoOfTrainings() {
		return i1aNoOfTrainings;
	}

	public void setI1aNoOfTrainings(Integer i1aNoOfTrainings) {
		this.i1aNoOfTrainings = i1aNoOfTrainings;
	}

	public Date getFirstSaveDate() {
		return firstSaveDate;
	}

	

}
