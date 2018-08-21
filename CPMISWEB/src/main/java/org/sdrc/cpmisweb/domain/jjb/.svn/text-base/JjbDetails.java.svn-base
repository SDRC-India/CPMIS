package org.sdrc.cpmisweb.domain.jjb;

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

@Entity
@Table(name = "jjb_details")
public class JjbDetails {
	/**
	 * Biswa Ranjan
	 */
	// Extra columns add starts
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column(name = "id")
	private Integer id;

	@OneToMany(fetch = FetchType.EAGER, mappedBy = "jjbId")
	private List<JjbDetailsTraining> jjbDetailsTraining;

	// Section Starts

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionA jjbSectionA;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionB jjbSectionB;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionC jjbSectionC;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionD jjbSectionD;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionE jjbSectionE;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionF jjbSectionF;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionG jjbSectionG;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionH jjbSectionH;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionI jjbSectionI;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionJ jjbSectionJ;

	@OneToOne(cascade = CascadeType.ALL)
	private JjbSectionK jjbSectionK;

	// Section Ends

	@Column(name = "name_of_authorized_person")
	private String nameOfAuthorizedPerson;

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

	@Column(name = "month_and_year")
	private Date monthyear;

	@Column(name = "designation")
	private String designation;

	@Column(name = "district_id")
	private Integer districtId;

	@Column(name = "no_of_members")
	private Integer noOfMembers;

	@Column(name = "no_of_male_members")
	private Integer noOfMaleMembers;

	@Column(name = "no_of_female_members")
	private Integer noOfFemaleMembers;

	@Column(name = "no_of_po")
	private Integer noOfProbationOfficers;

	@Column(name = "place_of_sittings")
	private String placeOfJjbSittings;

	@Column(name="l1_Was_Training_Held_JJSysytem")
	private Boolean l1WasTrainingHeldJJSysytem;
	
	@Column(name="i1a_NoOfTraining")
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

	public List<JjbDetailsTraining> getJjbDetailsTraining() {
		return jjbDetailsTraining;
	}

	public void setJjbDetailsTraining(List<JjbDetailsTraining> jjbDetailsTraining) {
		this.jjbDetailsTraining = jjbDetailsTraining;
	}

	public JjbSectionA getJjbSectionA() {
		return jjbSectionA;
	}

	public void setJjbSectionA(JjbSectionA jjbSectionA) {
		this.jjbSectionA = jjbSectionA;
	}

	public JjbSectionB getJjbSectionB() {
		return jjbSectionB;
	}

	public void setJjbSectionB(JjbSectionB jjbSectionB) {
		this.jjbSectionB = jjbSectionB;
	}

	public JjbSectionC getJjbSectionC() {
		return jjbSectionC;
	}

	public void setJjbSectionC(JjbSectionC jjbSectionC) {
		this.jjbSectionC = jjbSectionC;
	}

	public JjbSectionD getJjbSectionD() {
		return jjbSectionD;
	}

	public void setJjbSectionD(JjbSectionD jjbSectionD) {
		this.jjbSectionD = jjbSectionD;
	}

	public JjbSectionE getJjbSectionE() {
		return jjbSectionE;
	}

	public void setJjbSectionE(JjbSectionE jjbSectionE) {
		this.jjbSectionE = jjbSectionE;
	}

	public JjbSectionF getJjbSectionF() {
		return jjbSectionF;
	}

	public void setJjbSectionF(JjbSectionF jjbSectionF) {
		this.jjbSectionF = jjbSectionF;
	}

	public JjbSectionG getJjbSectionG() {
		return jjbSectionG;
	}

	public void setJjbSectionG(JjbSectionG jjbSectionG) {
		this.jjbSectionG = jjbSectionG;
	}

	public JjbSectionH getJjbSectionH() {
		return jjbSectionH;
	}

	public void setJjbSectionH(JjbSectionH jjbSectionH) {
		this.jjbSectionH = jjbSectionH;
	}

	public JjbSectionI getJjbSectionI() {
		return jjbSectionI;
	}

	public void setJjbSectionI(JjbSectionI jjbSectionI) {
		this.jjbSectionI = jjbSectionI;
	}

	public JjbSectionJ getJjbSectionJ() {
		return jjbSectionJ;
	}

	public void setJjbSectionJ(JjbSectionJ jjbSectionJ) {
		this.jjbSectionJ = jjbSectionJ;
	}

	public JjbSectionK getJjbSectionK() {
		return jjbSectionK;
	}

	public void setJjbSectionK(JjbSectionK jjbSectionK) {
		this.jjbSectionK = jjbSectionK;
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

	public void setDesignation(String designation) {
		this.designation = designation;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public Integer getNoOfMembers() {
		return noOfMembers;
	}

	public void setNoOfMembers(Integer noOfMembers) {
		this.noOfMembers = noOfMembers;
	}

	public Integer getNoOfMaleMembers() {
		return noOfMaleMembers;
	}

	public void setNoOfMaleMembers(Integer noOfMaleMembers) {
		this.noOfMaleMembers = noOfMaleMembers;
	}

	public Integer getNoOfFemaleMembers() {
		return noOfFemaleMembers;
	}

	public void setNoOfFemaleMembers(Integer noOfFemaleMembers) {
		this.noOfFemaleMembers = noOfFemaleMembers;
	}

	public Integer getNoOfProbationOfficers() {
		return noOfProbationOfficers;
	}

	public void setNoOfProbationOfficers(Integer noOfProbationOfficers) {
		this.noOfProbationOfficers = noOfProbationOfficers;
	}

	public String getPlaceOfJjbSittings() {
		return placeOfJjbSittings;
	}

	public void setPlaceOfJjbSittings(String placeOfJjbSittings) {
		this.placeOfJjbSittings = placeOfJjbSittings;
	}

	public Boolean getL1WasTrainingHeldJJSysytem() {
		return l1WasTrainingHeldJJSysytem;
	}

	public void setL1WasTrainingHeldJJSysytem(Boolean l1WasTrainingHeldJJSysytem) {
		this.l1WasTrainingHeldJJSysytem = l1WasTrainingHeldJJSysytem;
	}

	public Integer getL1aNoOfTraining() {
		return l1aNoOfTraining;
	}

	public void setL1aNoOfTraining(Integer l1aNoOfTraining) {
		this.l1aNoOfTraining = l1aNoOfTraining;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}

}