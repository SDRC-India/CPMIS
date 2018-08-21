package org.sdrc.cpmisweb.domain.dcpu;

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
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 20-Oct-2017
 */
@Entity
@Table(name="dcpu_details")
public class DcpuDetails {


	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer id;
	
	@Column
	private Boolean n1Training;
	@Column
	private Integer n1aNoOfTrainings;
	
	
	@Column(name = "district_id")
	private Integer districtId;
	
	@Column(name="type_of_ofice_premises")
	private String typeOfOficePremises;
	
	@Column(name = "month_and_year")
	private Date monthyear;
	
	@Column(name="name_Of_authorized_person")
	private String nameOfAuthorizedPerson;
	
	@Column(name="designation")
	private String designation;
	
	@Column(name="ofice_address")
	private String oficeAddress;
	
	@Column(name="ofice_tel_no")
	private String oficeTelNo;
	
	@Column(name="ofice_email_id")
	private String oficeEmailId;
	
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

	@OneToOne(cascade=CascadeType.ALL)
	private DCPUSectionA dcpuSectionA;
	
	@OneToOne(cascade=CascadeType.ALL)
	private DCPUSectionB dcpuSectionB;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionC dcpuSectionC;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionD dcpuSectionD;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionE dcpuSectionE;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionF dcpuSectionF;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionG dcpuSectionG;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionH dcpuSectionH;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionI dcpuSectionI;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionJ dcpuSectionJ;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionK dcpuSectionK;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionL dcpuSectionL;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionM dcpuSectionM;
	
	@OneToOne(cascade = CascadeType.ALL)
	private DCPUSectionO dcpuSectionO;
	
	@OneToMany(fetch = FetchType.EAGER, mappedBy="dcpuId")
	private List<DCPUDetailsTraining> dcpuDetailsTrainings;
	
	@ManyToOne
    @JoinColumn(name="timeperiod_id_fk")
	private Timeperiod timeperiod;

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public Integer getDistrictId() {
		return districtId;
	}

	public void setDistrictId(Integer districtId) {
		this.districtId = districtId;
	}

	public Date getMonthyear() {
		return monthyear;
	}

	public void setMonthyear(Date monthyear) {
		this.monthyear = monthyear;
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

	public DCPUSectionA getDcpuSectionA() {
		return dcpuSectionA;
	}

	public void setDcpuSectionA(DCPUSectionA dcpuSectionA) {
		this.dcpuSectionA = dcpuSectionA;
	}

	public DCPUSectionB getDcpuSectionB() {
		return dcpuSectionB;
	}

	public void setDcpuSectionB(DCPUSectionB dcpuSectionB) {
		this.dcpuSectionB = dcpuSectionB;
	}

	public DCPUSectionC getDcpuSectionC() {
		return dcpuSectionC;
	}

	public void setDcpuSectionC(DCPUSectionC dcpuSectionC) {
		this.dcpuSectionC = dcpuSectionC;
	}

	public DCPUSectionD getDcpuSectionD() {
		return dcpuSectionD;
	}

	public void setDcpuSectionD(DCPUSectionD dcpuSectionD) {
		this.dcpuSectionD = dcpuSectionD;
	}

	public DCPUSectionE getDcpuSectionE() {
		return dcpuSectionE;
	}

	public void setDcpuSectionE(DCPUSectionE dcpuSectionE) {
		this.dcpuSectionE = dcpuSectionE;
	}

	public DCPUSectionF getDcpuSectionF() {
		return dcpuSectionF;
	}

	public void setDcpuSectionF(DCPUSectionF dcpuSectionF) {
		this.dcpuSectionF = dcpuSectionF;
	}

	public DCPUSectionG getDcpuSectionG() {
		return dcpuSectionG;
	}

	public void setDcpuSectionG(DCPUSectionG dcpuSectionG) {
		this.dcpuSectionG = dcpuSectionG;
	}

	public DCPUSectionH getDcpuSectionH() {
		return dcpuSectionH;
	}

	public void setDcpuSectionH(DCPUSectionH dcpuSectionH) {
		this.dcpuSectionH = dcpuSectionH;
	}

	public DCPUSectionI getDcpuSectionI() {
		return dcpuSectionI;
	}

	public void setDcpuSectionI(DCPUSectionI dcpuSectionI) {
		this.dcpuSectionI = dcpuSectionI;
	}

	public DCPUSectionJ getDcpuSectionJ() {
		return dcpuSectionJ;
	}

	public void setDcpuSectionJ(DCPUSectionJ dcpuSectionJ) {
		this.dcpuSectionJ = dcpuSectionJ;
	}

	public DCPUSectionK getDcpuSectionK() {
		return dcpuSectionK;
	}

	public void setDcpuSectionK(DCPUSectionK dcpuSectionK) {
		this.dcpuSectionK = dcpuSectionK;
	}

	public DCPUSectionL getDcpuSectionL() {
		return dcpuSectionL;
	}

	public void setDcpuSectionL(DCPUSectionL dcpuSectionL) {
		this.dcpuSectionL = dcpuSectionL;
	}

	public DCPUSectionM getDcpuSectionM() {
		return dcpuSectionM;
	}

	public void setDcpuSectionM(DCPUSectionM dcpuSectionM) {
		this.dcpuSectionM = dcpuSectionM;
	}

	public List<DCPUDetailsTraining> getDcpuDetailsTrainings() {
		return dcpuDetailsTrainings;
	}

	public void setDcpuDetailsTrainings(
			List<DCPUDetailsTraining> dcpuDetailsTrainings) {
		this.dcpuDetailsTrainings = dcpuDetailsTrainings;
	}

	public Boolean getN1Training() {
		return n1Training;
	}

	public void setN1Training(Boolean n1Training) {
		this.n1Training = n1Training;
	}

	public Integer getN1aNoOfTrainings() {
		return n1aNoOfTrainings;
	}

	public void setN1aNoOfTrainings(Integer n1aNoOfTrainings) {
		this.n1aNoOfTrainings = n1aNoOfTrainings;
	}

	public DCPUSectionO getDcpuSectionO() {
		return dcpuSectionO;
	}

	public void setDcpuSectionO(DCPUSectionO dcpuSectionO) {
		this.dcpuSectionO = dcpuSectionO;
	}

	public String getTypeOfOficePremises() {
		return typeOfOficePremises;
	}

	public String getOficeAddress() {
		return oficeAddress;
	}

	public String getOficeTelNo() {
		return oficeTelNo;
	}

	public String getOficeEmailId() {
		return oficeEmailId;
	}

	public void setTypeOfOficePremises(String typeOfOficePremises) {
		this.typeOfOficePremises = typeOfOficePremises;
	}

	public void setOficeAddress(String oficeAddress) {
		this.oficeAddress = oficeAddress;
	}

	public void setOficeTelNo(String oficeTelNo) {
		this.oficeTelNo = oficeTelNo;
	}

	public void setOficeEmailId(String oficeEmailId) {
		this.oficeEmailId = oficeEmailId;
	}

	public Timeperiod getTimeperiod() {
		return timeperiod;
	}

	public void setTimeperiod(Timeperiod timeperiod) {
		this.timeperiod = timeperiod;
	}
	
}
