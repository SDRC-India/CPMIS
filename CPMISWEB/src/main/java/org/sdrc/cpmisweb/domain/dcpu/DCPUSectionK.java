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
@Table(name="DCPU_Section_K")
public class DCPUSectionK {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer dcpuSectionKId;
	
	@Column
	private Integer k1Boys;

	@Column
	private Integer k1Girls;

	@Column
	private Integer k1Total;

	@Column
	private Integer k2aBoys;

	@Column
	private Integer k2aGirls;

	@Column
	private Integer k2aTotal;

	@Column
	private Integer k2bBoys;

	@Column
	private Integer k2bGirls;

	@Column
	private Integer k2bTotal;

	@Column
	private Integer k2cBoys;

	@Column
	private Integer k2cGirls;

	@Column
	private Integer k2cTotal;

	@Column
	private Integer k2dBoys;

	@Column
	private Integer k2dGirls;

	@Column
	private Integer k2dTotal;

	@Column
	private Integer k2Boys;

	@Column
	private Integer k2Girls;

	@Column
	private Integer k2Total;

	@Column
	private Integer k3Boys;

	@Column
	private Integer k3Girls;

	@Column
	private Integer k3Total;

	@Column
	private Integer k4Boys;

	@Column
	private Integer k4Girls;

	@Column
	private Integer k4Total;
	
	@OneToOne
	@JoinColumn(name="parent_id")
	private DcpuDetails dcpuDetails;

	public Integer getDcpuSectionKId() {
		return dcpuSectionKId;
	}

	public void setDcpuSectionKId(Integer dcpuSectionKId) {
		this.dcpuSectionKId = dcpuSectionKId;
	}

	public Integer getK1Boys() {
		return k1Boys;
	}

	public void setK1Boys(Integer k1Boys) {
		this.k1Boys = k1Boys;
	}

	public Integer getK1Girls() {
		return k1Girls;
	}

	public void setK1Girls(Integer k1Girls) {
		this.k1Girls = k1Girls;
	}

	public Integer getK1Total() {
		return k1Total;
	}

	public void setK1Total(Integer k1Total) {
		this.k1Total = k1Total;
	}

	public Integer getK2aBoys() {
		return k2aBoys;
	}

	public void setK2aBoys(Integer k2aBoys) {
		this.k2aBoys = k2aBoys;
	}

	public Integer getK2aGirls() {
		return k2aGirls;
	}

	public void setK2aGirls(Integer k2aGirls) {
		this.k2aGirls = k2aGirls;
	}

	public Integer getK2aTotal() {
		return k2aTotal;
	}

	public void setK2aTotal(Integer k2aTotal) {
		this.k2aTotal = k2aTotal;
	}

	public Integer getK2bBoys() {
		return k2bBoys;
	}

	public void setK2bBoys(Integer k2bBoys) {
		this.k2bBoys = k2bBoys;
	}

	public Integer getK2bGirls() {
		return k2bGirls;
	}

	public void setK2bGirls(Integer k2bGirls) {
		this.k2bGirls = k2bGirls;
	}

	public Integer getK2bTotal() {
		return k2bTotal;
	}

	public void setK2bTotal(Integer k2bTotal) {
		this.k2bTotal = k2bTotal;
	}

	public Integer getK2cBoys() {
		return k2cBoys;
	}

	public void setK2cBoys(Integer k2cBoys) {
		this.k2cBoys = k2cBoys;
	}

	public Integer getK2cGirls() {
		return k2cGirls;
	}

	public void setK2cGirls(Integer k2cGirls) {
		this.k2cGirls = k2cGirls;
	}

	public Integer getK2cTotal() {
		return k2cTotal;
	}

	public void setK2cTotal(Integer k2cTotal) {
		this.k2cTotal = k2cTotal;
	}

	public Integer getK2dBoys() {
		return k2dBoys;
	}

	public void setK2dBoys(Integer k2dBoys) {
		this.k2dBoys = k2dBoys;
	}

	public Integer getK2dGirls() {
		return k2dGirls;
	}

	public void setK2dGirls(Integer k2dGirls) {
		this.k2dGirls = k2dGirls;
	}

	public Integer getK2dTotal() {
		return k2dTotal;
	}

	public void setK2dTotal(Integer k2dTotal) {
		this.k2dTotal = k2dTotal;
	}

	public Integer getK2Boys() {
		return k2Boys;
	}

	public void setK2Boys(Integer k2Boys) {
		this.k2Boys = k2Boys;
	}

	public Integer getK2Girls() {
		return k2Girls;
	}

	public void setK2Girls(Integer k2Girls) {
		this.k2Girls = k2Girls;
	}

	public Integer getK2Total() {
		return k2Total;
	}

	public void setK2Total(Integer k2Total) {
		this.k2Total = k2Total;
	}

	public Integer getK3Boys() {
		return k3Boys;
	}

	public void setK3Boys(Integer k3Boys) {
		this.k3Boys = k3Boys;
	}

	public Integer getK3Girls() {
		return k3Girls;
	}

	public void setK3Girls(Integer k3Girls) {
		this.k3Girls = k3Girls;
	}

	public Integer getK3Total() {
		return k3Total;
	}

	public void setK3Total(Integer k3Total) {
		this.k3Total = k3Total;
	}

	public Integer getK4Boys() {
		return k4Boys;
	}

	public void setK4Boys(Integer k4Boys) {
		this.k4Boys = k4Boys;
	}

	public Integer getK4Girls() {
		return k4Girls;
	}

	public void setK4Girls(Integer k4Girls) {
		this.k4Girls = k4Girls;
	}

	public Integer getK4Total() {
		return k4Total;
	}

	public void setK4Total(Integer k4Total) {
		this.k4Total = k4Total;
	}

	public DcpuDetails getDcpuDetails() {
		return dcpuDetails;
	}

	public void setDcpuDetails(DcpuDetails dcpuDetails) {
		this.dcpuDetails = dcpuDetails;
	}
	
}
