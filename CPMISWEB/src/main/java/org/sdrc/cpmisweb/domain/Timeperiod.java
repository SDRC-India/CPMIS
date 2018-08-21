package org.sdrc.cpmisweb.domain;

import java.io.Serializable;
import java.util.Date;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Index;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 * @author Biswa Ranjan CPMISWEB, Pratyush(pratyush@sdrc.co.in)
 * 06-Jan-2018 5:17:12 pm
 *
 */
@Entity
@Table(name = "time_period",indexes = { @Index(name = "i_timeperiod", columnList = "timeperiod") })
public class Timeperiod  implements Serializable {

	private static final long serialVersionUID = -6441399448796828834L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "timeperiod_id")
	private Integer timeperiodId;

	@Column(name = "timeperiod")
	private String timePeriod;

	@Column(name = "start_date")
	@Temporal(TemporalType.TIMESTAMP)
	private Date startDate;

	@Column(name = "end_date")
	@Temporal(TemporalType.TIMESTAMP)
	private Date endDate;

	@Column(name = "periodicity")
	private Integer periodicity;
	
	@ManyToOne
	@JoinColumn(name="quarter_id")
	private Timeperiod quarter;
	
	@OneToMany(mappedBy="quarter")
	private List<Timeperiod> months;
	

	public Integer getTimeperiodId() {
		return timeperiodId;
	}

	public void setTimeperiodId(Integer timeperiodId) {
		this.timeperiodId = timeperiodId;
	}

	public String getTimePeriod() {
		return timePeriod;
	}

	public void setTimePeriod(String timePeriod) {
		this.timePeriod = timePeriod;
	}

	public Date getStartDate() {
		return startDate;
	}

	public void setStartDate(Date startDate) {
		this.startDate = startDate;
	}

	public Date getEndDate() {
		return endDate;
	}

	public void setEndDate(Date endDate) {
		this.endDate = endDate;
	}

	public Integer getPeriodicity() {
		return periodicity;
	}

	public void setPeriodicity(Integer periodicity) {
		this.periodicity = periodicity;
	}

	public Timeperiod getQuarter() {
		return quarter;
	}

	public void setQuarter(Timeperiod quarter) {
		this.quarter = quarter;
	}
}
