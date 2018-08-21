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
 * @author Biswa Ranjan CPMISWEB, Pratyush
 * 06-Jan-2018 5:02:05 pm
 */
@Entity
@Table(name = "indicator_unit_subgroup", 
		indexes = { 
		@Index(name = "i_indicator_id_fk", columnList = "indicator_id_fk"), 
		@Index(name = "i_unit_id_fk", columnList = "unit_id_fk"), 
		@Index(name = "i_subgroup_id_fk", columnList = "subgroup_id_fk"), 
		@Index(name = "i_ius", columnList = "indicator_id_fk,unit_id_fk,subgroup_id_fk") },
		
		uniqueConstraints = @UniqueConstraint(columnNames={"indicator_id_fk", "unit_id_fk","subgroup_id_fk"}))
public class IndicatorUnitSubgroup  implements Serializable {

	private static final long serialVersionUID = 5980417262459598566L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name="indicator_unit_subgroup_id")
	private Integer indicatorUnitSubgroupId;

	@ManyToOne
	@JoinColumn(name = "indicator_id_fk")
	private Indicator indicator;

	@ManyToOne
	@JoinColumn(name = "unit_id_fk")
	private Unit unit;

	@ManyToOne
	@JoinColumn(name = "subgroup_id_fk")
	private Subgroup subgroup;
	
	@Column(name="value_table_name")
	private String valueTableName;
	
	@Column(name="value_column_name")
	private String valueColumnName;
	
	@Column(name="deno_column_name")
	private String denoColumnName;
	
	@Column(name="section_tbl")
	private String sectionTable;
	
	@Column(name="section_pk")
	private String sectionPk;
	
	@Column(name="ref_col_name")
	private String refColName;
	
	@Column(name="table_type")
	private String tableType;

	public Integer getIndicatorUnitSubgroupId() {
		return indicatorUnitSubgroupId;
	}

	public void setIndicatorUnitSubgroupId(Integer indicatorUnitSubgroupId) {
		this.indicatorUnitSubgroupId = indicatorUnitSubgroupId;
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

	public String getValueTableName() {
		return valueTableName;
	}

	public void setValueTableName(String valueTableName) {
		this.valueTableName = valueTableName;
	}

	public String getValueColumnName() {
		return valueColumnName;
	}

	public void setValueColumnName(String valueColumnName) {
		this.valueColumnName = valueColumnName;
	}

	public String getDenoColumnName() {
		return denoColumnName;
	}

	public void setDenoColumnName(String denoColumnName) {
		this.denoColumnName = denoColumnName;
	}

	public String getSectionTable() {
		return sectionTable;
	}

	public void setSectionTable(String sectionTable) {
		this.sectionTable = sectionTable;
	}

	public String getSectionPk() {
		return sectionPk;
	}

	public void setSectionPk(String sectionPk) {
		this.sectionPk = sectionPk;
	}

	public String getRefColName() {
		return refColName;
	}

	public void setRefColName(String refColName) {
		this.refColName = refColName;
	}

	public String getTableType() {
		return tableType;
	}

	public void setTableType(String tableType) {
		this.tableType = tableType;
	}

}
