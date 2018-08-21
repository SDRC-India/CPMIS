/**
 * 
 */
package org.sdrc.cpmisweb.domain;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import org.sdrc.core.UnitType;


/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Jan-2018 5:14:52 pm
 *
 */
@Entity
@Table(name = "unit")
public class Unit  implements Serializable {


	/**
	 * 
	 */
	private static final long serialVersionUID = 754158890468538081L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	
	private Integer unitId;
	
	@Column(name="unit_name")
	private String unitName;
	
	
	@Column(name="unit_type")
	@Enumerated(EnumType.STRING)
	private UnitType unitType;

	
	
	public Unit() {
		super();
	}

	public Unit(int unitId) {
		this.unitId = unitId;	
	}

	public Integer getUnitId() {
		return unitId;
	}

	public void setUnitId(Integer unitId) {
		this.unitId = unitId;
	}

	public String getUnitName() {
		return unitName;
	}

	public void setUnitName(String unitName) {
		this.unitName = unitName;
	}

	public UnitType getUnitType() {
		return unitType;
	}

	public void setUnitType(UnitType unitType) {
		this.unitType = unitType;
	}
}
