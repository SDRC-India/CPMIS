package org.sdrc.cpmisweb.domain;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Index;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
import javax.persistence.UniqueConstraint;

/**
 * @author Biswa Ranjan CPMISWEB , Pratyush
 * 06-Jan-2018 5:00:46 pm
 *
 */
@Entity
@Table(name = "data",

indexes = { @Index(name = "i_indicator_unit_subgroup_id_fk", columnList = "indicator_unit_subgroup_id_fk"), @Index(name = "i_indicator_id_fk", columnList = "indicator_id_fk"),
		@Index(name = "i_unit_id_fk", columnList = "unit_id_fk"), @Index(name = "i_subgroup_id_fk", columnList = "subgroup_id_fk"),
		@Index(name = "i_ius", columnList = "indicator_unit_subgroup_id_fk,indicator_id_fk,unit_id_fk,subgroup_id_fk")

},

		uniqueConstraints={@UniqueConstraint(name="unq_ius_i_u_s_source_time_area",
		columnNames={"indicator_unit_subgroup_id_fk","indicator_id_fk","unit_id_fk",
				"subgroup_id_fk","time_period_id_fk","district_id_fk","source_id_or_ic_id_fk"})}
		)
public class Data implements Serializable {

	private static final long serialVersionUID = -6229820287253572295L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "data_id")
	private Integer dataId;

	@ManyToOne
	@JoinColumn(name = "indicator_unit_subgroup_id_fk")
	private IndicatorUnitSubgroup indicatorUnitSubgroup;

	@ManyToOne
	@JoinColumn(name = "indicator_id_fk")
	private Indicator indicator;

	@ManyToOne
	@JoinColumn(name = "unit_id_fk")
	private Unit unit;

	@ManyToOne
	@JoinColumn(name = "subgroup_id_fk")
	private Subgroup subgroup;

	@ManyToOne
	@JoinColumn(name = "time_period_id_fk")
	private Timeperiod timePeriod;

	@ManyToOne
	@JoinColumn(name = "source_id_or_ic_id_fk")
	private IndicatorClassification source;

	@ManyToOne
	@JoinColumn(name = "district_id_fk")
	private Area area;
	
	private Double percentage;

	@Column(name = "published",columnDefinition="boolean default 'true'")
	private boolean published;

	public Integer getDataId() {
		return dataId;
	}

	public void setDataId(Integer dataId) {
		this.dataId = dataId;
	}

	public IndicatorUnitSubgroup getIndicatorUnitSubgroup() {
		return indicatorUnitSubgroup;
	}

	public void setIndicatorUnitSubgroup(IndicatorUnitSubgroup indicatorUnitSubgroup) {
		this.indicatorUnitSubgroup = indicatorUnitSubgroup;
	}

	public Indicator getIndicator() {
		return indicator;
	}

	public void setIndicator(Indicator indicator) {
		this.indicator = indicator;
	}

	public Unit getUnit() {
		return unit;
	}

	public void setUnit(Unit unit) {
		this.unit = unit;
	}

	public Subgroup getSubgroup() {
		return subgroup;
	}

	public void setSubgroup(Subgroup subgroup) {
		this.subgroup = subgroup;
	}

	public Timeperiod getTimePeriod() {
		return timePeriod;
	}

	public void setTimePeriod(Timeperiod timePeriod) {
		this.timePeriod = timePeriod;
	}

	public IndicatorClassification getSource() {
		return source;
	}

	public void setSource(IndicatorClassification source) {
		this.source = source;
	}

	public Area getArea() {
		return area;
	}

	public void setArea(Area area) {
		this.area = area;
	}

	public Double getPercentage() {
		return percentage;
	}

	public void setPercentage(Double percentage) {
		this.percentage = percentage;
	}

}
