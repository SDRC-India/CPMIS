/**
 * 
 */
package org.sdrc.cpmisweb.domain;

import javax.persistence.Column;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 13-Feb-2018 3:47:04 pm
 */
//@Entity
//@Table(name="report_data")
public class ReportData {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="report_id")
	private Integer reportId;
	
	@Column(name = "area_id")
	private Area areaId;
	
	@Column(name = "time_period")
	private Timeperiod timePeriod;
	
	@Column(name = "indicator_id")
	private int indicatorId;
	
	@Column(name = "indicator_value")
	private int indicatorValue;
}