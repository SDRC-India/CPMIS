package org.sdrc.cpmisweb.domain.cwc;

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
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 * created on: 20-Oct-2017
 */
@Entity
@Table(name="Cwc_Section_H")
public class CwcSectionH {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	@Column
	private Integer cwcSectionHId;
	
	@Column(name="h1")
	private Integer h1;

	@Column(name="h2")
	private Integer h2;

	@Column(name="h3")
	private Integer h3;

	@Column(name="h4")
	private Integer h4;

	@Column(name= "h5")
	private String h5;

	@Column(name="h6")
	private Integer h6;

	@Column(name="h7a")
	private Integer h7a;

	@Column(name="h7b")
	private String h7b;

	@Column(name="h8a")
	private Integer h8a;

	@Column(name="h8b")
	private String h8b;
	
	@Column
	private Integer h9Boys;

	@Column
	private Integer h9Girls;

	@Column
	private Integer h9Total;

	@Column
	private Integer h10Boys;

	@Column
	private Integer h10Girls;

	@Column
	private Integer h10Total;

	@Column
	private Integer h11Boys;

	@Column
	private Integer h11Girls;

	@Column
	private Integer h11Total;

	@Column
	private Integer h12Boys;

	@Column
	private Integer h12Girls;

	@Column
	private Integer h12Total;

	@Column
	private Integer h13Boys;

	@Column
	private Integer h13Girls;

	@Column
	private Integer h13Total;

	@Column
	private Integer h14Boys;

	@Column
	private Integer h14Girls;

	@Column
	private Integer h14Total;

	@Column
	private Integer h15Boys;

	@Column
	private Integer h15Girls;

	@Column
	private Integer h15Total;

	@Column
	private Integer h16Boys;

	@Column
	private Integer h16Girls;

	@Column
	private Integer h16Total;

	@Column
	private Integer h17Boys;

	@Column
	private Integer h17Girls;

	@Column
	private Integer h17Total;

	@Column
	private Integer h18Boys;

	@Column
	private Integer h18Girls;

	@Column
	private Integer h18Total;

	@Column
	private Integer h19Boys;

	@Column
	private Integer h19Girls;

	@Column
	private Integer h19Total;

	@Column
	private Integer h20Boys;

	@Column
	private Integer h20Girls;

	@Column
	private Integer h20Total;

	@Column
	private Integer h21Boys;

	@Column
	private Integer h21Girls;

	@Column
	private Integer h21Total;

	@Column
	private Integer h22Boys;

	@Column
	private Integer h22Girls;

	@Column
	private Integer h22Total;

	@Column
	private Integer h23Boys;

	@Column
	private Integer h23Girls;

	@Column
	private Integer h23Total;

	@Column
	private Integer h24Boys;

	@Column
	private Integer h24Girls;

	@Column
	private Integer h24Total;

	@Column
	private Integer h25Boys;

	@Column
	private Integer h25Girls;

	@Column
	private Integer h25Total;

	@Column
	private Integer h26Boys;

	@Column
	private Integer h26Girls;

	@Column
	private Integer h26Total;

	@Column
	private Integer h27Boys;

	@Column
	private Integer h27Girls;

	@Column
	private Integer h27Total;

	@Column
	private Integer h28Boys;

	@Column
	private Integer h28Girls;

	@Column
	private Integer h28Total;

	@Column
	private String  h29Remarks;

		
	@OneToOne(cascade=CascadeType.ALL)
	@JoinColumn(name="parent_id")
	private CwcDetails cwcDetails;

	public Integer getCwcSectionHId() {
		return cwcSectionHId;
	}

	public void setCwcSectionHId(Integer cwcSectionHId) {
		this.cwcSectionHId = cwcSectionHId;
	}

	public Integer getH1() {
		return h1;
	}

	public void setH1(Integer h1) {
		this.h1 = h1;
	}

	public Integer getH2() {
		return h2;
	}

	public void setH2(Integer h2) {
		this.h2 = h2;
	}

	public Integer getH3() {
		return h3;
	}

	public void setH3(Integer h3) {
		this.h3 = h3;
	}

	public Integer getH4() {
		return h4;
	}

	public void setH4(Integer h4) {
		this.h4 = h4;
	}

	public String getH5() {
		return h5;
	}

	public void setH5(String h5) {
		this.h5 = h5;
	}

	public Integer getH6() {
		return h6;
	}

	public void setH6(Integer h6) {
		this.h6 = h6;
	}

	public Integer getH7a() {
		return h7a;
	}

	public void setH7a(Integer h7a) {
		this.h7a = h7a;
	}

	public String getH7b() {
		return h7b;
	}

	public void setH7b(String h7b) {
		this.h7b = h7b;
	}

	public Integer getH8a() {
		return h8a;
	}

	public void setH8a(Integer h8a) {
		this.h8a = h8a;
	}

	public String getH8b() {
		return h8b;
	}

	public void setH8b(String h8b) {
		this.h8b = h8b;
	}

	public Integer getH9Boys() {
		return h9Boys;
	}

	public void setH9Boys(Integer h9Boys) {
		this.h9Boys = h9Boys;
	}

	public Integer getH9Girls() {
		return h9Girls;
	}

	public void setH9Girls(Integer h9Girls) {
		this.h9Girls = h9Girls;
	}

	public Integer getH9Total() {
		return h9Total;
	}

	public void setH9Total(Integer h9Total) {
		this.h9Total = h9Total;
	}

	public Integer getH10Boys() {
		return h10Boys;
	}

	public void setH10Boys(Integer h10Boys) {
		this.h10Boys = h10Boys;
	}

	public Integer getH10Girls() {
		return h10Girls;
	}

	public void setH10Girls(Integer h10Girls) {
		this.h10Girls = h10Girls;
	}

	public Integer getH10Total() {
		return h10Total;
	}

	public void setH10Total(Integer h10Total) {
		this.h10Total = h10Total;
	}

	public Integer getH11Boys() {
		return h11Boys;
	}

	public void setH11Boys(Integer h11Boys) {
		this.h11Boys = h11Boys;
	}

	public Integer getH11Girls() {
		return h11Girls;
	}

	public void setH11Girls(Integer h11Girls) {
		this.h11Girls = h11Girls;
	}

	public Integer getH11Total() {
		return h11Total;
	}

	public void setH11Total(Integer h11Total) {
		this.h11Total = h11Total;
	}

	public Integer getH12Boys() {
		return h12Boys;
	}

	public void setH12Boys(Integer h12Boys) {
		this.h12Boys = h12Boys;
	}

	public Integer getH12Girls() {
		return h12Girls;
	}

	public void setH12Girls(Integer h12Girls) {
		this.h12Girls = h12Girls;
	}

	public Integer getH12Total() {
		return h12Total;
	}

	public void setH12Total(Integer h12Total) {
		this.h12Total = h12Total;
	}

	public Integer getH13Boys() {
		return h13Boys;
	}

	public void setH13Boys(Integer h13Boys) {
		this.h13Boys = h13Boys;
	}

	public Integer getH13Girls() {
		return h13Girls;
	}

	public void setH13Girls(Integer h13Girls) {
		this.h13Girls = h13Girls;
	}

	public Integer getH13Total() {
		return h13Total;
	}

	public void setH13Total(Integer h13Total) {
		this.h13Total = h13Total;
	}

	public Integer getH14Boys() {
		return h14Boys;
	}

	public void setH14Boys(Integer h14Boys) {
		this.h14Boys = h14Boys;
	}

	public Integer getH14Girls() {
		return h14Girls;
	}

	public void setH14Girls(Integer h14Girls) {
		this.h14Girls = h14Girls;
	}

	public Integer getH14Total() {
		return h14Total;
	}

	public void setH14Total(Integer h14Total) {
		this.h14Total = h14Total;
	}

	public Integer getH15Boys() {
		return h15Boys;
	}

	public void setH15Boys(Integer h15Boys) {
		this.h15Boys = h15Boys;
	}

	public Integer getH15Girls() {
		return h15Girls;
	}

	public void setH15Girls(Integer h15Girls) {
		this.h15Girls = h15Girls;
	}

	public Integer getH15Total() {
		return h15Total;
	}

	public void setH15Total(Integer h15Total) {
		this.h15Total = h15Total;
	}

	public Integer getH16Boys() {
		return h16Boys;
	}

	public void setH16Boys(Integer h16Boys) {
		this.h16Boys = h16Boys;
	}

	public Integer getH16Girls() {
		return h16Girls;
	}

	public void setH16Girls(Integer h16Girls) {
		this.h16Girls = h16Girls;
	}

	public Integer getH16Total() {
		return h16Total;
	}

	public void setH16Total(Integer h16Total) {
		this.h16Total = h16Total;
	}

	public Integer getH17Boys() {
		return h17Boys;
	}

	public void setH17Boys(Integer h17Boys) {
		this.h17Boys = h17Boys;
	}

	public Integer getH17Girls() {
		return h17Girls;
	}

	public void setH17Girls(Integer h17Girls) {
		this.h17Girls = h17Girls;
	}

	public Integer getH17Total() {
		return h17Total;
	}

	public void setH17Total(Integer h17Total) {
		this.h17Total = h17Total;
	}

	public Integer getH18Boys() {
		return h18Boys;
	}

	public void setH18Boys(Integer h18Boys) {
		this.h18Boys = h18Boys;
	}

	public Integer getH18Girls() {
		return h18Girls;
	}

	public void setH18Girls(Integer h18Girls) {
		this.h18Girls = h18Girls;
	}

	public Integer getH18Total() {
		return h18Total;
	}

	public void setH18Total(Integer h18Total) {
		this.h18Total = h18Total;
	}

	public Integer getH19Boys() {
		return h19Boys;
	}

	public void setH19Boys(Integer h19Boys) {
		this.h19Boys = h19Boys;
	}

	public Integer getH19Girls() {
		return h19Girls;
	}

	public void setH19Girls(Integer h19Girls) {
		this.h19Girls = h19Girls;
	}

	public Integer getH19Total() {
		return h19Total;
	}

	public void setH19Total(Integer h19Total) {
		this.h19Total = h19Total;
	}

	public Integer getH20Boys() {
		return h20Boys;
	}

	public void setH20Boys(Integer h20Boys) {
		this.h20Boys = h20Boys;
	}

	public Integer getH20Girls() {
		return h20Girls;
	}

	public void setH20Girls(Integer h20Girls) {
		this.h20Girls = h20Girls;
	}

	public Integer getH20Total() {
		return h20Total;
	}

	public void setH20Total(Integer h20Total) {
		this.h20Total = h20Total;
	}

	public Integer getH21Boys() {
		return h21Boys;
	}

	public void setH21Boys(Integer h21Boys) {
		this.h21Boys = h21Boys;
	}

	public Integer getH21Girls() {
		return h21Girls;
	}

	public void setH21Girls(Integer h21Girls) {
		this.h21Girls = h21Girls;
	}

	public Integer getH21Total() {
		return h21Total;
	}

	public void setH21Total(Integer h21Total) {
		this.h21Total = h21Total;
	}

	public Integer getH22Boys() {
		return h22Boys;
	}

	public void setH22Boys(Integer h22Boys) {
		this.h22Boys = h22Boys;
	}

	public Integer getH22Girls() {
		return h22Girls;
	}

	public void setH22Girls(Integer h22Girls) {
		this.h22Girls = h22Girls;
	}

	public Integer getH22Total() {
		return h22Total;
	}

	public void setH22Total(Integer h22Total) {
		this.h22Total = h22Total;
	}

	public Integer getH23Boys() {
		return h23Boys;
	}

	public void setH23Boys(Integer h23Boys) {
		this.h23Boys = h23Boys;
	}

	public Integer getH23Girls() {
		return h23Girls;
	}

	public void setH23Girls(Integer h23Girls) {
		this.h23Girls = h23Girls;
	}

	public Integer getH23Total() {
		return h23Total;
	}

	public void setH23Total(Integer h23Total) {
		this.h23Total = h23Total;
	}

	public Integer getH24Boys() {
		return h24Boys;
	}

	public void setH24Boys(Integer h24Boys) {
		this.h24Boys = h24Boys;
	}

	public Integer getH24Girls() {
		return h24Girls;
	}

	public void setH24Girls(Integer h24Girls) {
		this.h24Girls = h24Girls;
	}

	public Integer getH24Total() {
		return h24Total;
	}

	public void setH24Total(Integer h24Total) {
		this.h24Total = h24Total;
	}

	public Integer getH25Boys() {
		return h25Boys;
	}

	public void setH25Boys(Integer h25Boys) {
		this.h25Boys = h25Boys;
	}

	public Integer getH25Girls() {
		return h25Girls;
	}

	public void setH25Girls(Integer h25Girls) {
		this.h25Girls = h25Girls;
	}

	public Integer getH25Total() {
		return h25Total;
	}

	public void setH25Total(Integer h25Total) {
		this.h25Total = h25Total;
	}

	public Integer getH26Boys() {
		return h26Boys;
	}

	public void setH26Boys(Integer h26Boys) {
		this.h26Boys = h26Boys;
	}

	public Integer getH26Girls() {
		return h26Girls;
	}

	public void setH26Girls(Integer h26Girls) {
		this.h26Girls = h26Girls;
	}

	public Integer getH26Total() {
		return h26Total;
	}

	public void setH26Total(Integer h26Total) {
		this.h26Total = h26Total;
	}

	public Integer getH27Boys() {
		return h27Boys;
	}

	public void setH27Boys(Integer h27Boys) {
		this.h27Boys = h27Boys;
	}

	public Integer getH27Girls() {
		return h27Girls;
	}

	public void setH27Girls(Integer h27Girls) {
		this.h27Girls = h27Girls;
	}

	public Integer getH27Total() {
		return h27Total;
	}

	public void setH27Total(Integer h27Total) {
		this.h27Total = h27Total;
	}

	public Integer getH28Boys() {
		return h28Boys;
	}

	public void setH28Boys(Integer h28Boys) {
		this.h28Boys = h28Boys;
	}

	public Integer getH28Girls() {
		return h28Girls;
	}

	public void setH28Girls(Integer h28Girls) {
		this.h28Girls = h28Girls;
	}

	public Integer getH28Total() {
		return h28Total;
	}

	public void setH28Total(Integer h28Total) {
		this.h28Total = h28Total;
	}

	
	public CwcDetails getCwcDetails() {
		return cwcDetails;
	}

	public void setCwcDetails(CwcDetails cwcDetails) {
		this.cwcDetails = cwcDetails;
	}

	public String getH29Remarks() {
		return h29Remarks;
	}

	public void setH29Remarks(String h29Remarks) {
		this.h29Remarks = h29Remarks;
	}
	
}
