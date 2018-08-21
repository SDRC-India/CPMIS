package org.sdrc.cpmisweb.domain;
/*
 * @author - Pratyush(pratyush@sdrc.co.in) created on 17-06-2007(18:20)
 */
import java.io.Serializable;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name="type_details")
public class TypeDetails implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = 5195104148865477057L;

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="id")
	Integer typeDetailsId;
	
	@Column(name="type_details_name")
	String typeDetailsName;
	
	@ManyToOne
	@JoinColumn(name="type_id")
	Type typeId;

	public Integer getTypeDetailsId() {
		return typeDetailsId;
	}

	public void setTypeDetailsId(Integer typeDetailsId) {
		this.typeDetailsId = typeDetailsId;
	}

	public String getTypeDetailsName() {
		return typeDetailsName;
	}

	public void setTypeDetailsName(String typeDetailsName) {
		this.typeDetailsName = typeDetailsName;
	}

	public Type getTypeId() {
		return typeId;
	}

	public void setTypeId(Type typeId) {
		this.typeId = typeId;
	}
	
}
