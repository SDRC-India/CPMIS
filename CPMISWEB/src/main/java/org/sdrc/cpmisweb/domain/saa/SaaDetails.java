/**
 * 
 */
package org.sdrc.cpmisweb.domain.saa;

import java.util.Date;
import java.util.LinkedHashSet;
import java.util.Set;

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
 * @author Biswa Ranjan CPMISWEB 12-Dec-2017 10:52:07 am
 *
 */
@Entity
@Table(name = "saa_details")
public class SaaDetails {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer id;
	
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
	@Column(name = "month_and_year")
	private Date monthyear;
	@Column(name = "state_name")
	private String stateName;
	
	@Column(name = "district_name")
	private String districtName;
	
	@Column(name="district_id")
	private Integer districtId;
	
	@Column(name = "name_of_authorised_person")
	private String nameOfAuthorizedPerson;
	
	@Column(name="designation")
	private String designation;
	
	@Column(name = "name_of_saa")
	private String nameOfSAA;
	
	@Column(name = "total_capacity")
	private Integer totalCapacity;
	
	@Column(name = "address_of_saa")
	private String addressOfSAA;
	
	@Column(name = "month_name")
	private String monthName;
	
	@Column(name = "date_of_visit")
	private String dateOfVisit;
	
	// Section Starts
	@OneToMany(fetch=FetchType.EAGER,mappedBy="saaId")
	private Set<SaaDetailsTraining> saaDetailsTrainings=new LinkedHashSet<SaaDetailsTraining>();
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionA saaSectionA;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionB saaSectionB;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionC saaSectionC;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionD saaSectionD;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionE saaSectionE;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionF saaSectionF;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionG saaSectionG;
	
	@OneToOne(cascade=CascadeType.ALL)
	private SaaSectionH saaSectionH;

	@OneToMany(fetch=FetchType.EAGER,mappedBy="saaId")
	private Set<SaaSectionCChildDeatails> saaSectionCChildDeatails=new LinkedHashSet<SaaSectionCChildDeatails>();

	@OneToMany(fetch=FetchType.EAGER,mappedBy="saaId")
	private Set<SaaSectionJ> saaSectionJ=new LinkedHashSet<SaaSectionJ>();
	
	@Column(name="k1_Was_Training_Held_JJSysytem")
	private Boolean k1WasTrainingHeldJJSysytem;
	
	@Column(name="k1a_NoOfTraining")
	private Integer k1aNoOfTraining;
	
	@ManyToOne
    @JoinColumn(name="timeperiod_id_fk")
	private Timeperiod timeperiod;
	//section ends

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
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

	public void setLastSaveDate(Date lastSaveDate) {
		this.lastSaveDate = lastSaveDate;
	}

	public Date getFirstSaveDate() {
		return firstSaveDate;
	}

	public void setFirstSaveDate(Date firstSaveDate) {
		this.firstSaveDate = firstSaveDate;
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

	public String getDistrictName() {
		return districtName;
	}

	public void setDistrictName(String districtName) {
		this.districtName = districtName;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public String getNameOfAuthorizedPerson() {
		return nameOfAuthorizedPerson;
	}

	public void setNameOfAuthorizedPerson(String nameOfAuthorizedPerson) {
		this.nameOfAuthorizedPerson = nameOfAuthorizedPerson;
	}

	public String getDesignation() {
		return designation;
	}

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public String getNameOfSAA() {
		return nameOfSAA;
	}

	public void setNameOfSAA(String nameOfSAA) {
		this.nameOfSAA = nameOfSAA;
	}

	public Integer getTotalCapacity() {
		return totalCapacity;
	}

	public void setTotalCapacity(Integer totalCapacity) {
		this.totalCapacity = totalCapacity;
	}

	public String getAddressOfSAA() {
		return addressOfSAA;
	}

	public void setAddressOfSAA(String addressOfSAA) {
		this.addressOfSAA = addressOfSAA;
	}

	public String getMonthName() {
		return monthName;
	}

	public void setMonthName(String monthName) {
		this.monthName = monthName;
	}

	public String getDateOfVisit() {
		return dateOfVisit;
	}

	public void setDateOfVisit(String dateOfVisit) {
		this.dateOfVisit = dateOfVisit;
	}

	public Set<SaaDetailsTraining> getSaaDetailsTrainings() {
		return saaDetailsTrainings;
	}

	public void setSaaDetailsTrainings(Set<SaaDetailsTraining> saaDetailsTrainings) {
		this.saaDetailsTrainings = saaDetailsTrainings;
	}

	public SaaSectionA getSaaSectionA() {
		return saaSectionA;
	}

	public void setSaaSectionA(SaaSectionA saaSectionA) {
		this.saaSectionA = saaSectionA;
	}

	public SaaSectionB getSaaSectionB() {
		return saaSectionB;
	}

	public void setSaaSectionB(SaaSectionB saaSectionB) {
		this.saaSectionB = saaSectionB;
	}

	public SaaSectionC getSaaSectionC() {
		return saaSectionC;
	}

	public void setSaaSectionC(SaaSectionC saaSectionC) {
		this.saaSectionC = saaSectionC;
	}

	public SaaSectionD getSaaSectionD() {
		return saaSectionD;
	}

	public void setSaaSectionD(SaaSectionD saaSectionD) {
		this.saaSectionD = saaSectionD;
	}

	public SaaSectionE getSaaSectionE() {
		return saaSectionE;
	}

	public void setSaaSectionE(SaaSectionE saaSectionE) {
		this.saaSectionE = saaSectionE;
	}

	public SaaSectionF getSaaSectionF() {
		return saaSectionF;
	}

	public void setSaaSectionF(SaaSectionF saaSectionF) {
		this.saaSectionF = saaSectionF;
	}

	public SaaSectionG getSaaSectionG() {
		return saaSectionG;
	}

	public void setSaaSectionG(SaaSectionG saaSectionG) {
		this.saaSectionG = saaSectionG;
	}

	public SaaSectionH getSaaSectionH() {
		return saaSectionH;
	}

	public void setSaaSectionH(SaaSectionH saaSectionH) {
		this.saaSectionH = saaSectionH;
	}

	public Set<SaaSectionCChildDeatails> getSaaSectionCChildDeatails() {
		return saaSectionCChildDeatails;
	}

	public void setSaaSectionCChildDeatails(
			Set<SaaSectionCChildDeatails> saaSectionCChildDeatails) {
		this.saaSectionCChildDeatails = saaSectionCChildDeatails;
	}

	public Set<SaaSectionJ> getSaaSectionJ() {
		return saaSectionJ;
	}

	public void setSaaSectionJ(Set<SaaSectionJ> saaSectionJ) {
		this.saaSectionJ = saaSectionJ;
	}

	public Boolean getK1WasTrainingHeldJJSysytem() {
		return k1WasTrainingHeldJJSysytem;
	}

	public void setK1WasTrainingHeldJJSysytem(Boolean k1WasTrainingHeldJJSysytem) {
		this.k1WasTrainingHeldJJSysytem = k1WasTrainingHeldJJSysytem;
	}

	public Integer getK1aNoOfTraining() {
		return k1aNoOfTraining;
	}

	public void setK1aNoOfTraining(Integer k1aNoOfTraining) {
		this.k1aNoOfTraining = k1aNoOfTraining;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}
	
}
