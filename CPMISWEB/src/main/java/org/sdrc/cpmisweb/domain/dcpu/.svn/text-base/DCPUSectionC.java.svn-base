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
@Table(name="DCPU_Section_C")
public class DCPUSectionC {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer dcpuSectionCId;
	
	@Column
	private Integer c1;
	
	@Column
	private Integer c2;
	
	@Column
	private Integer c3;
	
	@Column
	private Integer c4a;

	@Column
	private Integer c4b;

	@Column
	private Integer c4c;

	@Column
	private Integer c4d;
	
	@OneToOne
	@JoinColumn(name="parent_id")
	private DcpuDetails dcpuDetails;

	public Integer getDcpuSectionCId() {
		return dcpuSectionCId;
	}

	public void setDcpuSectionCId(Integer dCPUSectionCId) {
		dcpuSectionCId = dCPUSectionCId;
	}

	public Integer getC1() {
		return c1;
	}

	public void setC1(Integer c1) {
		this.c1 = c1;
	}

	public Integer getC2() {
		return c2;
	}

	public void setC2(Integer c2) {
		this.c2 = c2;
	}

	public Integer getC3() {
		return c3;
	}

	public void setC3(Integer c3) {
		this.c3 = c3;
	}

	public Integer getC4a() {
		return c4a;
	}

	public void setC4a(Integer c4a) {
		this.c4a = c4a;
	}

	public Integer getC4b() {
		return c4b;
	}

	public void setC4b(Integer c4b) {
		this.c4b = c4b;
	}

	public Integer getC4c() {
		return c4c;
	}

	public void setC4c(Integer c4c) {
		this.c4c = c4c;
	}

	public Integer getC4d() {
		return c4d;
	}

	public void setC4d(Integer c4d) {
		this.c4d = c4d;
	}

	public DcpuDetails getDcpuDetails() {
		return dcpuDetails;
	}

	public void setDcpuDetails(DcpuDetails dcpuDetails) {
		this.dcpuDetails = dcpuDetails;
	}
	
}
