/**
 * 
 */
package org.sdrc.cpmisweb.domain;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Jan-2018 5:45:39 pm
 *
 */
@Entity
@Table(name = "ic_ius_mapping")
public class IndicatorClassificationIndicatorUnitSubgroupMapping  implements Serializable  {


	/**
	 * 
	 */
	private static final long serialVersionUID = 4819868296768894662L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "ic_ius_id")
	private Integer iCIusId;

	@ManyToOne
	@JoinColumn(name = "ic_fk")
	private IndicatorClassification indicatorClassification;

	@ManyToOne
	@JoinColumn(name = "ius_fk")
	private IndicatorUnitSubgroup indicatorUnitSubgroup;

	public Integer getiCIusId() {
		return iCIusId;
	}

	public void setiCIusId(Integer iCIusId) {
		this.iCIusId = iCIusId;
	}

	public IndicatorClassification getIndicatorClassification() {
		return indicatorClassification;
	}

	public void setIndicatorClassification(IndicatorClassification indicatorClassification) {
		this.indicatorClassification = indicatorClassification;
	}

	public IndicatorUnitSubgroup getIndicatorUnitSubgroup() {
		return indicatorUnitSubgroup;
	}

	public void setIndicatorUnitSubgroup(IndicatorUnitSubgroup indicatorUnitSubgroup) {
		this.indicatorUnitSubgroup = indicatorUnitSubgroup;
	}

}
