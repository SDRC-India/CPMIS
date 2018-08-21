/**
 * 
 */
package org.sdrc.cpmisweb.domain.sjpu;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;
import javax.persistence.Table;

/**
 * @author Biswa Ranjan CPMISWEB 20-Oct-2017 11:21:36 am
 *
 */
@Entity
@Table(name = "sjpu_section_d")
public class SjpuSectionD {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer sjpuSectionDId;

	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name = "parent_id")
	private SjpuDetails sjpuDetails;

	@Column
	private Integer d1NewCases;
	@Column
	private Integer d1NewBoys;
	@Column
	private Integer d1NewGirls;
	@Column
	private Integer d1OldCases;
	@Column
	private Integer d1OldBoys;
	@Column
	private Integer d1OldGirls;
	@Column
	private Integer d1Total;

	@Column
	private Integer d2NewCases;
	@Column
	private Integer d2NewBoys;
	@Column
	private Integer d2NewGirls;
	@Column
	private Integer d2OldCases;
	@Column
	private Integer d2OldBoys;
	@Column
	private Integer d2OldGirls;
	@Column
	private Integer d2Total;

	@Column
	private Integer d3NewCases;
	@Column
	private Integer d3NewBoys;
	@Column
	private Integer d3NewGirls;
	@Column
	private Integer d3OldCases;
	@Column
	private Integer d3OldBoys;
	@Column
	private Integer d3OldGirls;
	@Column
	private Integer d3Total;

	@Column
	private Integer d4NewCases;
	@Column
	private Integer d4NewBoys;
	@Column
	private Integer d4NewGirls;
	@Column
	private Integer d4OldCases;
	@Column
	private Integer d4OldBoys;
	@Column
	private Integer d4OldGirls;
	@Column
	private Integer d4Total;

	@Column
	private Integer d5NewCases;
	@Column
	private Integer d5NewBoys;
	@Column
	private Integer d5NewGirls;
	@Column
	private Integer d5OldCases;
	@Column
	private Integer d5OldBoys;
	@Column
	private Integer d5OldGirls;
	@Column
	private Integer d5Total;

	@Column
	private Integer d6NewCases;
	@Column
	private Integer d6NewBoys;
	@Column
	private Integer d6NewGirls;
	@Column
	private Integer d6OldCases;
	@Column
	private Integer d6OldBoys;
	@Column
	private Integer d6OldGirls;
	@Column
	private Integer d6Total;
	public Integer getSjpuSectionDId() {
		return sjpuSectionDId;
	}
	public SjpuDetails getSjpuDetails() {
		return sjpuDetails;
	}
	public Integer getD1NewCases() {
		return d1NewCases;
	}
	public Integer getD1NewBoys() {
		return d1NewBoys;
	}
	public Integer getD1NewGirls() {
		return d1NewGirls;
	}
	public Integer getD1OldCases() {
		return d1OldCases;
	}
	public Integer getD1OldBoys() {
		return d1OldBoys;
	}
	public Integer getD1OldGirls() {
		return d1OldGirls;
	}
	public Integer getD1Total() {
		return d1Total;
	}
	public Integer getD2NewCases() {
		return d2NewCases;
	}
	public Integer getD2NewBoys() {
		return d2NewBoys;
	}
	public Integer getD2NewGirls() {
		return d2NewGirls;
	}
	public Integer getD2OldCases() {
		return d2OldCases;
	}
	public Integer getD2OldBoys() {
		return d2OldBoys;
	}
	public Integer getD2OldGirls() {
		return d2OldGirls;
	}
	public Integer getD2Total() {
		return d2Total;
	}
	public Integer getD3NewCases() {
		return d3NewCases;
	}
	public Integer getD3NewBoys() {
		return d3NewBoys;
	}
	public Integer getD3NewGirls() {
		return d3NewGirls;
	}
	public Integer getD3OldCases() {
		return d3OldCases;
	}
	public Integer getD3OldBoys() {
		return d3OldBoys;
	}
	public Integer getD3OldGirls() {
		return d3OldGirls;
	}
	public Integer getD3Total() {
		return d3Total;
	}
	public Integer getD4NewCases() {
		return d4NewCases;
	}
	public Integer getD4NewBoys() {
		return d4NewBoys;
	}
	public Integer getD4NewGirls() {
		return d4NewGirls;
	}
	public Integer getD4OldCases() {
		return d4OldCases;
	}
	public Integer getD4OldBoys() {
		return d4OldBoys;
	}
	public Integer getD4OldGirls() {
		return d4OldGirls;
	}
	public Integer getD4Total() {
		return d4Total;
	}
	public Integer getD5NewCases() {
		return d5NewCases;
	}
	public Integer getD5NewBoys() {
		return d5NewBoys;
	}
	public Integer getD5NewGirls() {
		return d5NewGirls;
	}
	public Integer getD5OldCases() {
		return d5OldCases;
	}
	public Integer getD5OldBoys() {
		return d5OldBoys;
	}
	public Integer getD5OldGirls() {
		return d5OldGirls;
	}
	public Integer getD5Total() {
		return d5Total;
	}
	public Integer getD6NewCases() {
		return d6NewCases;
	}
	public Integer getD6NewBoys() {
		return d6NewBoys;
	}
	public Integer getD6NewGirls() {
		return d6NewGirls;
	}
	public Integer getD6OldCases() {
		return d6OldCases;
	}
	public Integer getD6OldBoys() {
		return d6OldBoys;
	}
	public Integer getD6OldGirls() {
		return d6OldGirls;
	}
	public Integer getD6Total() {
		return d6Total;
	}
	public void setSjpuSectionDId(Integer sjpuSectionDId) {
		this.sjpuSectionDId = sjpuSectionDId;
	}
	public void setSjpuDetails(SjpuDetails sjpuDetails) {
		this.sjpuDetails = sjpuDetails;
	}
	public void setD1NewCases(Integer d1NewCases) {
		this.d1NewCases = d1NewCases;
	}
	public void setD1NewBoys(Integer d1NewBoys) {
		this.d1NewBoys = d1NewBoys;
	}
	public void setD1NewGirls(Integer d1NewGirls) {
		this.d1NewGirls = d1NewGirls;
	}
	public void setD1OldCases(Integer d1OldCases) {
		this.d1OldCases = d1OldCases;
	}
	public void setD1OldBoys(Integer d1OldBoys) {
		this.d1OldBoys = d1OldBoys;
	}
	public void setD1OldGirls(Integer d1OldGirls) {
		this.d1OldGirls = d1OldGirls;
	}
	public void setD1Total(Integer d1Total) {
		this.d1Total = d1Total;
	}
	public void setD2NewCases(Integer d2NewCases) {
		this.d2NewCases = d2NewCases;
	}
	public void setD2NewBoys(Integer d2NewBoys) {
		this.d2NewBoys = d2NewBoys;
	}
	public void setD2NewGirls(Integer d2NewGirls) {
		this.d2NewGirls = d2NewGirls;
	}
	public void setD2OldCases(Integer d2OldCases) {
		this.d2OldCases = d2OldCases;
	}
	public void setD2OldBoys(Integer d2OldBoys) {
		this.d2OldBoys = d2OldBoys;
	}
	public void setD2OldGirls(Integer d2OldGirls) {
		this.d2OldGirls = d2OldGirls;
	}
	public void setD2Total(Integer d2Total) {
		this.d2Total = d2Total;
	}
	public void setD3NewCases(Integer d3NewCases) {
		this.d3NewCases = d3NewCases;
	}
	public void setD3NewBoys(Integer d3NewBoys) {
		this.d3NewBoys = d3NewBoys;
	}
	public void setD3NewGirls(Integer d3NewGirls) {
		this.d3NewGirls = d3NewGirls;
	}
	public void setD3OldCases(Integer d3OldCases) {
		this.d3OldCases = d3OldCases;
	}
	public void setD3OldBoys(Integer d3OldBoys) {
		this.d3OldBoys = d3OldBoys;
	}
	public void setD3OldGirls(Integer d3OldGirls) {
		this.d3OldGirls = d3OldGirls;
	}
	public void setD3Total(Integer d3Total) {
		this.d3Total = d3Total;
	}
	public void setD4NewCases(Integer d4NewCases) {
		this.d4NewCases = d4NewCases;
	}
	public void setD4NewBoys(Integer d4NewBoys) {
		this.d4NewBoys = d4NewBoys;
	}
	public void setD4NewGirls(Integer d4NewGirls) {
		this.d4NewGirls = d4NewGirls;
	}
	public void setD4OldCases(Integer d4OldCases) {
		this.d4OldCases = d4OldCases;
	}
	public void setD4OldBoys(Integer d4OldBoys) {
		this.d4OldBoys = d4OldBoys;
	}
	public void setD4OldGirls(Integer d4OldGirls) {
		this.d4OldGirls = d4OldGirls;
	}
	public void setD4Total(Integer d4Total) {
		this.d4Total = d4Total;
	}
	public void setD5NewCases(Integer d5NewCases) {
		this.d5NewCases = d5NewCases;
	}
	public void setD5NewBoys(Integer d5NewBoys) {
		this.d5NewBoys = d5NewBoys;
	}
	public void setD5NewGirls(Integer d5NewGirls) {
		this.d5NewGirls = d5NewGirls;
	}
	public void setD5OldCases(Integer d5OldCases) {
		this.d5OldCases = d5OldCases;
	}
	public void setD5OldBoys(Integer d5OldBoys) {
		this.d5OldBoys = d5OldBoys;
	}
	public void setD5OldGirls(Integer d5OldGirls) {
		this.d5OldGirls = d5OldGirls;
	}
	public void setD5Total(Integer d5Total) {
		this.d5Total = d5Total;
	}
	public void setD6NewCases(Integer d6NewCases) {
		this.d6NewCases = d6NewCases;
	}
	public void setD6NewBoys(Integer d6NewBoys) {
		this.d6NewBoys = d6NewBoys;
	}
	public void setD6NewGirls(Integer d6NewGirls) {
		this.d6NewGirls = d6NewGirls;
	}
	public void setD6OldCases(Integer d6OldCases) {
		this.d6OldCases = d6OldCases;
	}
	public void setD6OldBoys(Integer d6OldBoys) {
		this.d6OldBoys = d6OldBoys;
	}
	public void setD6OldGirls(Integer d6OldGirls) {
		this.d6OldGirls = d6OldGirls;
	}
	public void setD6Total(Integer d6Total) {
		this.d6Total = d6Total;
	}

	// D ends
}
