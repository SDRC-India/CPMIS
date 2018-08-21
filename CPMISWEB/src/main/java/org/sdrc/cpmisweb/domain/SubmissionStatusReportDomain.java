/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 7:27:02 pm
 */
package org.sdrc.cpmisweb.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan(biswaranjan@sdrc.co.in) created on : 09-Mar-2018 7:27:02 pm
 */
@Entity
@Table(name="submission_status_report_domain")
public class SubmissionStatusReportDomain {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="status_id")
	private Integer statusId;
	
	@Column(name="district_name")
	private String districtName;
	
	@Column(name="user_type_name")
	private String userTypeName;
	
	@Column(name="user_type_id")
	private Integer userTypeId; 
	
	@Column(name="institution_name")
	private String  institutionName;
	
	@Column(name="submission_status")
	private Boolean submissionStatus;
	
	@Column(name="submission_date")
	private String submissionDate;
	
	@Column(name="timeperiod_id")
	private Integer timeperiodId;
	
	@Column(name="timeperiod_name")
	private String timeperiodName;
	
	public Integer getStatusId() {
		return statusId;
	}
	public String getDistrictName() {
		return districtName;
	}
	public String getUserTypeName() {
		return userTypeName;
	}
	public String getInstitutionName() {
		return institutionName;
	}
	public Boolean getSubmissionStatus() {
		return submissionStatus;
	}
	public String getSubmissionDate() {
		return submissionDate;
	}
	public Integer getTimeperiodId() {
		return timeperiodId;
	}
	public String getTimeperiodName() {
		return timeperiodName;
	}
	public void setStatusId(Integer statusId) {
		this.statusId = statusId;
	}
	public void setDistrictName(String districtName) {
		this.districtName = districtName;
	}
	public void setUserTypeName(String userTypeName) {
		this.userTypeName = userTypeName;
	}
	public void setInstitutionName(String institutionName) {
		this.institutionName = institutionName;
	}
	public void setSubmissionStatus(Boolean submissionStatus) {
		this.submissionStatus = submissionStatus;
	}
	public void setSubmissionDate(String submissionDate) {
		this.submissionDate = submissionDate;
	}
	public void setTimeperiodId(Integer timeperiodId) {
		this.timeperiodId = timeperiodId;
	}
	public void setTimeperiodName(String timeperiodName) {
		this.timeperiodName = timeperiodName;
	}
	public Integer getUserTypeId() {
		return userTypeId;
	}
	public void setUserTypeId(Integer userTypeId) {
		this.userTypeId = userTypeId;
	}
	
}
