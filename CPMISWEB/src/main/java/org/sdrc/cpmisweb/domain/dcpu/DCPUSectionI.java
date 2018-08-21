package org.sdrc.cpmisweb.domain.dcpu;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 20-Oct-2017
 */
@Entity
@Table(name="DCPU_Section_I")
public class DCPUSectionI {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer dcpuSectionIId;
	
	@Column
	private Integer i1Boys;

	@Column
	private Integer i1Girls;

	@Column
	private Integer i1Total;

	@Column
	private Integer i2Boys;

	@Column
	private Integer i2Girls;

	@Column
	private Integer i2Total;

	@Column
	private Integer i3Boys;

	@Column
	private Integer i3Girls;

	@Column
	private Integer i3Total;
	
	@OneToOne
	@JoinColumn(name="parent_id")
	private DcpuDetails dcpuDetails;

	public Integer getDcpuSectionIId() {
		return dcpuSectionIId;
	}

	public void setDcpuSectionIId(Integer dcpuSectionIId) {
		this.dcpuSectionIId = dcpuSectionIId;
	}

	public Integer getI1Boys() {
		return i1Boys;
	}

	public void setI1Boys(Integer i1Boys) {
		this.i1Boys = i1Boys;
	}

	public Integer getI1Girls() {
		return i1Girls;
	}

	public void setI1Girls(Integer i1Girls) {
		this.i1Girls = i1Girls;
	}

	public Integer getI1Total() {
		return i1Total;
	}

	public void setI1Total(Integer i1Total) {
		this.i1Total = i1Total;
	}

	public Integer getI2Boys() {
		return i2Boys;
	}

	public void setI2Boys(Integer i2Boys) {
		this.i2Boys = i2Boys;
	}

	public Integer getI2Girls() {
		return i2Girls;
	}

	public void setI2Girls(Integer i2Girls) {
		this.i2Girls = i2Girls;
	}

	public Integer getI2Total() {
		return i2Total;
	}

	public void setI2Total(Integer i2Total) {
		this.i2Total = i2Total;
	}

	public Integer getI3Boys() {
		return i3Boys;
	}

	public void setI3Boys(Integer i3Boys) {
		this.i3Boys = i3Boys;
	}

	public Integer getI3Girls() {
		return i3Girls;
	}

	public void setI3Girls(Integer i3Girls) {
		this.i3Girls = i3Girls;
	}

	public Integer getI3Total() {
		return i3Total;
	}

	public void setI3Total(Integer i3Total) {
		this.i3Total = i3Total;
	}

	public DcpuDetails getDcpuDetails() {
		return dcpuDetails;
	}

	public void setDcpuDetails(DcpuDetails dcpuDetails) {
		this.dcpuDetails = dcpuDetails;
	}
	
}
