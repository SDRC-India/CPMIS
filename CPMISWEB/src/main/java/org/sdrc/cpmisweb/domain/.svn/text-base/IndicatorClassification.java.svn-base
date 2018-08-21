package org.sdrc.cpmisweb.domain;

import java.io.Serializable;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;

import org.sdrc.core.IndicatorClassificationType;

/**
 * @author Biswa Ranjan CPMISWEB
 * 06-Jan-2018 5:06:19 pm
 * Pratyush(pratyush@sdrc.co.in) updated on 25-04-2018
 */
@Entity
@Table(name = "indicator_classification")
public class IndicatorClassification  implements Serializable {

	private static final long serialVersionUID = -8021111869423599522L;

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	@Column(name = "indicator_classification_id")
	private Integer indicatorClassificationId;

	@ManyToOne
	@JoinColumn(name = "parent_id")
	private IndicatorClassification parent;

	@OneToMany(mappedBy = "parent")
	private List<IndicatorClassification> children;

	@Column(name = "classification_name")
	private String name;

	@Column(name="classification_short_name")
	private String shortName;

	@Column
	@Enumerated(EnumType.STRING)
	private IndicatorClassificationType indicatorClassificationType;

	@Column(name = "ic_order")
	private int icOrder;
	
	@Column(name = "user_type")
	private Integer userType;
	
	public IndicatorClassification(){
	
	}

	public IndicatorClassification(int id){
		this.indicatorClassificationId = id;
	}
	
	
	public Integer getIndicatorClassificationId() {
		return indicatorClassificationId;
	}

	public void setIndicatorClassificationId(Integer indicatorClassificationId) {
		this.indicatorClassificationId = indicatorClassificationId;
	}

	public IndicatorClassification getParent() {
		return parent;
	}

	public void setParent(IndicatorClassification parent) {
		this.parent = parent;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getShortName() {
		return shortName;
	}

	public void setShortName(String shortName) {
		this.shortName = shortName;
	}

	public IndicatorClassificationType getIndicatorClassificationType() {
		return indicatorClassificationType;
	}

	public void setIndicatorClassificationType(IndicatorClassificationType indicatorClassificationType) {
		this.indicatorClassificationType = indicatorClassificationType;
	}

	public int getIcOrder() {
		return icOrder;
	}

	public void setIcOrder(int icOrder) {
		this.icOrder = icOrder;
	}

	public List<IndicatorClassification> getChildren() {
		return children;
	}

	public void setChildren(List<IndicatorClassification> children) {
		this.children = children;
	}

	public Integer getUserType() {
		return userType;
	}

	public void setUserType(Integer userType) {
		this.userType = userType;
	}

}
