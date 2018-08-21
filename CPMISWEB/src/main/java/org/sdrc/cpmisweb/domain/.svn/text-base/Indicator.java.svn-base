package org.sdrc.cpmisweb.domain;

import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Transient;
/**
 * @author Biswa Ranjan CPMISWEB, Pratyush
 * 06-Jan-2018 5:02:56 pm
 *
 */
@Entity
public class Indicator  implements Serializable  {

	private static final long serialVersionUID = -6978224585617319796L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "indicator_id")
	private Integer indicatorId;

	@Column(name = "indicator_name")
	private String indicatorName;

	@Column(name = "indicator_metadata", length = 65536)
	private String indicatorMetadata;

	@Column(name = "high_is_good")
	private boolean highIsGood;

	@ManyToOne
	@JoinColumn(name = "indicator_classification_id")
	private IndicatorClassification indicatorClassification;
	
	@Transient
	private double normalalizedValue;

	public Integer getIndicatorId() {
		return indicatorId;
	}

	public void setIndicatorId(Integer indicatorId) {
		this.indicatorId = indicatorId;
	}

	public String getIndicatorName() {
		return indicatorName;
	}

	public void setIndicatorName(String indicatorName) {
		this.indicatorName = indicatorName;
	}

	public String getIndicatorMetadata() {
		return indicatorMetadata;
	}

	public void setIndicatorMetadata(String indicatorMetadata) {
		this.indicatorMetadata = indicatorMetadata;
	}

	public boolean isHighIsGood() {
		return highIsGood;
	}

	public void setHighIsGood(boolean highIsGood) {
		this.highIsGood = highIsGood;
	}

	public IndicatorClassification getIndicatorClassification() {
		return indicatorClassification;
	}

	public void setIndicatorClassification(
			IndicatorClassification indicatorClassification) {
		this.indicatorClassification = indicatorClassification;
	}

	public double getNormalalizedValue() {
		return normalalizedValue;
	}

	public void setNormalalizedValue(double normalalizedValue) {
		this.normalalizedValue = normalalizedValue;
	}
	
}
