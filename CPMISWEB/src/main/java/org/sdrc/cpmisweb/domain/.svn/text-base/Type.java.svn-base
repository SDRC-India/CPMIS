package org.sdrc.cpmisweb.domain;
/*
 * @author - Pratyush(pratyush@sdrc.co.in) created on 17-06-2007(18:20)
 */
import java.io.Serializable;
import java.util.List;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name="type")
public class Type implements Serializable {

	/**
	 * 
	 */
	private static final long serialVersionUID = -9088008529832978789L;

	@Id
	@Column(name="id", columnDefinition = "serial")
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	Integer typeId;
	
	@Column(name="type_name")
	String typeName;
	
	@OneToMany(mappedBy="typeId")
	List<TypeDetails> typeDetails;

	public Integer getTypeId() {
		return typeId;
	}

	public void setTypeId(Integer typeId) {
		this.typeId = typeId;
	}

	public String getTypeName() {
		return typeName;
	}

	public void setTypeName(String typeName) {
		this.typeName = typeName;
	}
	
}
