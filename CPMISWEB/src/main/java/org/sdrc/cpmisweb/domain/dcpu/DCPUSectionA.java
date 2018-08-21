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
@Table(name="DCPU_Section_A")
public class DCPUSectionA {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer dcpuSectionAId;
	
	@Column(name="a_BCPC_i")
	private Integer aBCPCi;

	@Column(name="a_BCPC_ii")
	private Integer aBCPCii;

	@Column(name="a_BCPC_iii")
	private Integer aBCPCiii;

	@Column(name="a_PCPC_i")
	private Integer aPCPCi;

	@Column(name="a_PCPC_ii")
	private Integer aPCPCii;

	@Column(name="a_PCPC_iii")
	private Integer aPCPCiii;

	@Column(name="a_WCPC_i")
	private Integer aWCPCi;

	@Column(name="a_WCPC_ii")
	private Integer aWCPCii;

	@Column(name="a_WCPC_iii")
	private Integer aWCPCiii;
	
	@OneToOne
	@JoinColumn(name="parent_id")
	private DcpuDetails dcpuDetails;

	public Integer getDcpuSectionAId() {
		return dcpuSectionAId;
	}

	public void setDcpuSectionAId(Integer dCPUSectionAId) {
		dcpuSectionAId = dCPUSectionAId;
	}

	public Integer getaBCPCi() {
		return aBCPCi;
	}

	public void setaBCPCi(Integer aBCPCi) {
		this.aBCPCi = aBCPCi;
	}

	public Integer getaBCPCii() {
		return aBCPCii;
	}

	public void setaBCPCii(Integer aBCPCii) {
		this.aBCPCii = aBCPCii;
	}

	public Integer getaBCPCiii() {
		return aBCPCiii;
	}

	public void setaBCPCiii(Integer aBCPCiii) {
		this.aBCPCiii = aBCPCiii;
	}

	public Integer getaPCPCi() {
		return aPCPCi;
	}

	public void setaPCPCi(Integer aPCPCi) {
		this.aPCPCi = aPCPCi;
	}

	public Integer getaPCPCii() {
		return aPCPCii;
	}

	public void setaPCPCii(Integer aPCPCii) {
		this.aPCPCii = aPCPCii;
	}

	public Integer getaPCPCiii() {
		return aPCPCiii;
	}

	public void setaPCPCiii(Integer aPCPCiii) {
		this.aPCPCiii = aPCPCiii;
	}

	public Integer getaWCPCi() {
		return aWCPCi;
	}

	public void setaWCPCi(Integer aWCPCi) {
		this.aWCPCi = aWCPCi;
	}

	public Integer getaWCPCii() {
		return aWCPCii;
	}

	public void setaWCPCii(Integer aWCPCii) {
		this.aWCPCii = aWCPCii;
	}

	public Integer getaWCPCiii() {
		return aWCPCiii;
	}

	public void setaWCPCiii(Integer aWCPCiii) {
		this.aWCPCiii = aWCPCiii;
	}

	public DcpuDetails getDcpuDetails() {
		return dcpuDetails;
	}

	public void setDcpuDetails(DcpuDetails dcpuDetails) {
		this.dcpuDetails = dcpuDetails;
	}
	
}
