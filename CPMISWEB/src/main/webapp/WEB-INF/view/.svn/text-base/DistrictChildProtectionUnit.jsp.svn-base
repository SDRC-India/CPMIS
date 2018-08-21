<!--
 @author Swarna (swarnaprava@sdrc.co.in), Pratyush(pratyush@sdrc.co.in)
 -->

<!DOCTYPE html>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ page import="java.io.*,java.util.*"%>
<%@ page import="javax.servlet.*,java.text.*"%>
<%@ page import="java.time.YearMonth"%>
<%@ page import="java.time.format.DateTimeFormatter"%>

<html lang="en">
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon"> 
<title>District Child Protection Unit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans"
	rel="stylesheet">
<link rel="stylesheet"
	href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<style type="text/css">
.table>tbody>tr>td {
    vertical-align: middle !important;
}
.table>thead>tr>th{
	vertical-align: middle !important;
}
.autoSaveModal{
   z-index: 9998; 
}
.bottomGap{
margin-bottom:20px !important
}

</style>
</head>
<body ng-app="dcpuApp" ng-controller="DCPU_Controller" data-spy="scroll"
	data-target="#myScrollspy" data-offset="20" class="ng-cloak">
	<!-- spinner -->
	<div id="spinner" class="loader" style="display: none;"></div>
	<div id="loader-mask" class="loader" style="display: none;"></div>
	<!-- /spinner -->
	<jsp:include page="fragments/header.jsp" />
	<div class="b4sectionheading" id="gInfo"></div>
	<!--      <div class="container"> -->
	<div class="row marginspc">

		<!-- section for sticky nav menu -->
	<form class="form-horizontal" name="dcpuFormDetails"
						id="dcpuFormDetails" data-toggle="validator" role="form">
		<nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
			<h5 class="cwcHeading">District Child Protection Unit <br> Monthly
				Report</h5>
			<ul class="nav nav-pills nav-stacked sectionList flexcroll" id="sectionindctr">
				<li id="gi" class="active sectionUlist active1"><a
					href="#gInfo"><span class="leftmargin"></span>General
						Information </a></li>
				<li id="casea" class="sectionUlist"><a href="#caseA">A.
						Status of Child Protection Committee (CPC) in the District</a></li>
				<li id="caseb" class="sectionUlist"><a href="#caseB">B.
						Status of Implementation of PARVARISH scheme</a></li>
				<li id="casec" class="sectionUlist"><a href="#caseC">C.
						Status of implementation of "ANTARJATIYA VIVAH PROTSAHAN ANUDAN
						YOJANA"</a></li>
				<li id="cased" class="sectionUlist"><a href="#caseD">D.
						Status of Implementation of "SPONSORSHIP" scheme</a></li>
				<li id="casee" class="sectionUlist"><a href="#caseE">E.
						Status of Implementation of "AFTER CARE" Programme</a></li>
				<li id="casef" class="sectionUlist"><a href="#caseF">F.
						Status of Implementation of "FOSTER CARE" Programme</a></li>
				<li id="caseg" class="sectionUlist"><a href="#caseG">G.
						Details of cases dealt by JJB in the reporting month </a></li>
				<li id="caseh" class="sectionUlist"><a href="#caseH">H.
						Details of cases dealt by CWC in the reporting month </a></li>
				<li id="casei" class="sectionUlist"><a href="#caseI">I.
						Details of cases dealt by SJPU in the reporting month </a></li>
				<li id="casej" class="sectionUlist"><a href="#caseJ"> J.
						Details of cases dealt by Children's Court in the reporting month</a></li>
				<li id="casek" class="sectionUlist"><a href="#caseK"> K.
						Support/Assistance provided to no. of children in the reporting
						month by "CHILD-LINE"</a></li>
				<li id="casel" class="sectionUlist"><a href="#caseL"> L.
						CCIs Type </a></li>
				<li id="casem" class="sectionUlist"><a href="#caseM"> M.
						Details of Other program conducted by DCPU in the reporting month</a></li>
				<li id="casen" class="sectionUlist"><a href="#caseN"> N.
						Training on JJ System (In the Reporting Month)</a></li>
				<li id="caseo" class="sectionUlist"><a href="#caseO"> O.
						Status of Implementation of POCSO Act, 2012 </a></li>
			</ul>

			<div ng-hide="dcpuForm.submitted">
				 <a href=""><div class="col-md-6 savebtn locline" ng-click="savedcpu(dcpuForm, 'save')">
					<img class="saveSvg" 
						ng-disabled="dcpuForm.submitted"
						src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
						height="18" /><h5 class="borderright1">SAVE</h5>
				</div></a>
				<button type="submit" id="clickSubmit" class="col-md-6 savebtn submitbtn" ng-click="dcpuFormDetails.$invalid ? '' : savedcpu(dcpuForm, 'submit')">
					<img class="saveSvg" 
						ng-disabled="dcpuForm.submitted"
						src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
						height="18" /> <a href=""><h5 class="borderright1 sbmtbtn">SUBMIT</h5></a>
				</button>
			</div>
			 <div ng-show="dcpuForm.submitted">
				<div class="col-md-12 savebtn"></div>
			</div>
		</nav>
		<!-- end sticky nav menu -->
		<!-- start data entry for dcpu  -->
		<div class="col-md-10 formDetailsTopMargin">
			<div class="formHeading" id="gInfo">
				<h4 class="headingBottom">State Child Protection Society,</h4>
				<h4 class="headingBottom">Department of Social Welfare
					(Government of Bihar)</h4>
			</div>
			<%
				YearMonth thisMonth = YearMonth.now();
				YearMonth lastMonth = thisMonth.minusMonths(1);
				DateTimeFormatter monthYearFormatter = DateTimeFormatter
						.ofPattern("MMMM");
				DateTimeFormatter yearFormatter = DateTimeFormatter
						.ofPattern("yyyy");
				String monthName = lastMonth.format(monthYearFormatter);
				String year=lastMonth.format(yearFormatter);
				int daysInMonth = lastMonth.lengthOfMonth();
			%>
			<div class="formHeading1">
				<div class="formHeading2">
						<div class="col-md-12">
							<h4 class="headingBottom1">
								District Child Protection Unit(DCPU) Monthly Report for Month of
								<b style="color: #41c484">&nbsp;{{dcpuForm.timeperiod.timePeriod}}</b>
							</h4>

							<div class="form-group labelFont">

								<div class="col-md-6">
									<input type="hidden" ng-model="dcpuForm.userId"
										class="form-control inputBackground">
								</div>
							</div>

							<div class="col-md-6" style="display: none;">
								<input name="userId" type="number" id="uId" value='${userId}'>${userId}
								<input type="number" id="monthDays" value='<%=daysInMonth%>'>
							</div>

							<!-- Start general information -->

							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Name of the Authorized Person </label>
								<div class="col-md-6">
									<input type="text" ng-model="dcpuForm.nameOfAuthorizedPerson" required
										fifty-characters-validation ng-disabled="dcpuForm.submitted"
										class="form-control inputBackgroundgeneral">
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Designation </label>
								<div class="col-md-6">
									<input type="text" id="designation" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.designation" address-validation
										class="form-control inputBackgroundgeneral">
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">Date of Reporting</label>
								<div class="col-md-6 calenderInline">
									<%
										Date dNow = new Date();
										SimpleDateFormat ft = new SimpleDateFormat("dd-MM-yyyy");
									%>
									<input type="text" readonly tabindex= -1
										class="form-control inputBackgroundgeneral readonlyStyle"
										value="<%=ft.format(dNow)%>">

								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Name of the District</label>
								<div class="col-md-6">
									<input type="text" id="districtId" disabled tabindex= -1
										ng-model="selectedDistrict.areaName"
										class="form-control  inputBackgroundgeneral">
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Office Address </label>
								<div class="col-md-6">
										<textarea id="oficeAddress" type="text" required
										ng-disabled="dcpuForm.submitted" address-validation
										ng-model="dcpuForm.oficeAddress"
										class="form-control inputBackgroundgeneral" 
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Office Telephone No. </label>
								<div class="col-md-6">
									<input type="text" ng-model="dcpuForm.oficeTelNo" id="officeTelephoneNo"
										ng-disabled="dcpuForm.submitted" eleven-digits-phone required
										ng-blur="resetPhoneNumber11Digits('ofcTelError')"
                                        ng-keyup="resetPhoneMsg()" 
										class="form-control inputBackgroundgeneral removeExponentialValueE">
								 <div id="ofcTelError" class="error-style"></div>
								</div>
							</div>
							<div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Office Email id </label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="dcpuForm.oficeEmailId" id="emailIdofPerson"
                                             	  onKeyUp="this.value=this.value.trim()" required
                                                  ng-disabled="dcpuForm.submitted" name="emailIdofPerson" 
												  maxlength="100" ng-keyUp="validateName(dcpuForm.oficeEmailId,'emailidError')"
                                                  class="form-control inputBackgroundgeneral ">
                                                  <div id="emailidError" class="error-style"></div>
                                        </div>
                                   </div>
								
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">Type of office Premises</label>
								<div class="col-md-6">
								<select required
											ng-options="ofc as ofc.typeDetailsName for ofc in ofcPremises"
											ng-model="selectedOfcPremises" ng-value="ofc.typeDetailsName"
											class="form-control inputBackgroundgeneral"
											ng-disabled="dcpuForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
								</div>
							</div>
							<div class="b4sectionheading" id="caseA"></div>
							<div class="grey-header headMarg">A. Status of Child
								Protection Committee (CPC) in the District</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th colspan="3">Block Level Child Protection Committee <br>
												(BCPC)</th>
											<th colspan="3">Panchayat Level Child Protection
												Committee <br> (PCPC)</th>
											<th colspan="3">Ward Level Child Protection Committee <br>
												(WCPC)</th>
										</tr>
										<tr>
											<th>No. of Block</th>
											<th>No. of BCPC Formed</th>
											<th>No. of BCPC meeting in the month</th>
											<th>No. of Panchayat</th>
											<th>No. of PCPC Formed</th>
											<th>No. of meeting in the month</th>
											<th>No. of Ward</th>
											<th>No. of WCPC Formed</th>
											<th>No. of meeting in the month</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="number" required id="aBCPCi"
												ng-model="dcpuForm.aBCPCi" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="aBCPCii"
												ng-model="dcpuForm.aBCPCii" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="aBCPCiii"
												ng-model="dcpuForm.aBCPCiii"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" required id="aPCPCi"
												ng-model="dcpuForm.aPCPCi" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" required id="aPCPCii"
												ng-model="dcpuForm.aPCPCii" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" required id="aPCPCiii"
												ng-model="dcpuForm.aPCPCiii"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" required id="aWCPCi"
												ng-model="dcpuForm.aWCPCi" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" required id="aWCPCii"
												ng-model="dcpuForm.aWCPCii" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" required id="aWCPCiii"
												ng-model="dcpuForm.aWCPCiii"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits>
												</div></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- -------------------------------- End A section-------------------------- -->
							<!-- -------------------------------- Start B section-------------------------- -->
							
							<div class="b4sectionheading" id="caseB"></div>
							<div class="grey-header headMarg" style="margin-bottom:-16px;">B. Status of Implementation of PARVARISH scheme</div>
								
							<div class="grey-header1 headMarg">B.1. No. of beneficiaries
								getting benefits under Parvarish scheme on the first day of the
								reporting month</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2">Children benefited</th>
											<th colspan="3">Below 6 years</th>
											<th colspan="3">6-18 years</th>
											<th colspan="3">Total (Auto Calculate)</th>
										</tr>
										<tr>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>

									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.1.a.
														Orphans</label>
												</div>
											</td>
											<td><input disabled
												type="number" id="b1OrphansBoysYearsBelow6"
												ng-model="dcpuForm.b1OrphansBoysYearsBelow6"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input disabled
												type="number" id="b1OrphansGirlsYearsBelow6"
												ng-model="dcpuForm.b1OrphansGirlsYearsBelow6"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input disabled
												type="text" id="b1OrphansTotalYearsBelow6"
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>

											<td><input disabled
												type="number" id="b1OrphansBoysYears6to18"
												ng-model="dcpuForm.b1OrphansBoysYears6to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input disabled
												type="number" id="b1OrphansGirlsYears6to18"
												ng-model="dcpuForm.b1OrphansGirlsYears6to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input disabled
												type="text" id="b1OrphansTotalYears6to18" tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth"></td>
											<td><input disabled type="text"
												readonly id="b1OrphansBoysTotal"  tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)
														 }}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
											<td><input disabled
												type="text" readonly id="b1OrphansGirlsTotal"  tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
											<td><input disabled
												type="text" readonly id="b1OrphansTotal"  tabindex= -1
												value="{{
														 Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+Number(dcpuForm.b1OrphansGirlsYears6to18-0)+Number(dcpuForm.b1OrphansBoysYears6to18-0)
														 }}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.1.b.
														Affected/ Infected with HIV/AIDS</label>
												</div>
											</td>
											<td><input type="number" id=b1HIVBoysYearsBelow6
												" ng-model="dcpuForm.b1HIVBoysYearsBelow6"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="b1HIVGirlsYearsBelow6"
												ng-model="dcpuForm.b1HIVGirlsYearsBelow6"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="b1HIVTotalYearsBelow6"
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+Number(dcpuForm.b1HIVGirlsYearsBelow6-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
											<td><input type="number"  id="b1HIVBoysYears6to18"
												ng-model="dcpuForm.b1HIVBoysYears6to18"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number"  id="b1HIVGirlsYears6to18"
												ng-model="dcpuForm.b1HIVGirlsYears6to18"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="b1HIVTotalYears6to18"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b1HIVBoysYears6to18-0)+Number(dcpuForm.b1HIVGirlsYears6to18-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
											<td><input type="text" id="b1HIVBoysTotal" readonly
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+Number(dcpuForm.b1HIVBoysYears6to18-0)}}" 
												disabled tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
											<td><input type="text" id="b1HIVGirlsTotal" readonly
												value="{{Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+Number(dcpuForm.b1HIVGirlsYears6to18-0)}}" 
												disabled tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="text" id="b1HIVTotal" readonly
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+Number(dcpuForm.b1HIVGirlsYears6to18-0)
														 }}" 
												disabled tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.1.c.
														Affected/ Infected with Leprosy</label>
												</div>
											</td>
											<td><input type="text" id="b1LeprosyBoysYearsBelow6" 
												ng-model="dcpuForm.b1LeprosyBoysYearsBelow6"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number"  id="b1LeprosyGirlsYearsBelow6"
												ng-model="dcpuForm.b1LeprosyGirlsYearsBelow6"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="b1LeprosyTotalYearsBelow6"
												readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number"  id="b1LeprosyBoysYears6to18"
												ng-model="dcpuForm.b1LeprosyBoysYears6to18"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number"  id="b1LeprosyGirlsYears6to18"
												ng-model="dcpuForm.b1LeprosyGirlsYears6to18"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="b1LeprosyTotalYears6to18" tabindex= -1
												readonly value="{{Number(dcpuForm.b1LeprosyBoysYears6to18-0)+Number(dcpuForm.b1LeprosyGirlsYears6to18-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b1LeprosyBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)
														 }}" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b1LeprosyGirlsTotal"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+Number(dcpuForm.b1LeprosyGirlsYears6to18-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b1LeprosyTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+Number(dcpuForm.b1LeprosyGirlsYears6to18-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">B.1.d
														Total</label>
												</div>
											</td>
											<td><input type="text" id="b1TotalBoysYearsBelow6"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+ 
														Number(dcpuForm.b1HIVBoysYearsBelow6-0)+ 
														Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)
														 }}"
												disabled
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b1TotalGirlsYearsBelow6"
												readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+ 
														Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+ 
														Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)
														 }}"
												disabled
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b1TotalTotalYearsBelow6"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+Number(dcpuForm.b1HIVBoysYearsBelow6-0)+Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b1TotalBoysYears6to18"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYears6to18-0)+ 
														Number(dcpuForm.b1HIVBoysYears6to18-0)+ 
														Number(dcpuForm.b1LeprosyBoysYears6to18-0)
														 }}"
												disabled
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b1TotalGirlsYears6to18" readonly
												disabled tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYears6to18-0)+ 
														Number(dcpuForm.b1HIVGirlsYears6to18-0)+ 
														Number(dcpuForm.b1LeprosyGirlsYears6to18-0)
														}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b1TotalTotalYears6to18"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYears6to18-0)+ 
														Number(dcpuForm.b1HIVBoysYears6to18-0)+ 
														Number(dcpuForm.b1LeprosyBoysYears6to18-0)
														+
														Number(dcpuForm.b1OrphansGirlsYears6to18-0)+ 
														Number(dcpuForm.b1HIVGirlsYears6to18-0)+ 
														Number(dcpuForm.b1LeprosyGirlsYears6to18-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b1TotalBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+ 
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVBoysYearsBelow6-0)+ 
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)}}" 
												disabled
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b1TotalGirlsTotal" readonly tabindex= -1
												value="{{
														  Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														  Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														  Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														  Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														  Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														  Number(dcpuForm.b1LeprosyGirlsYears6to18-0)
														  }}"
												disabled
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b1Total" readonly tabindex= -1
												value="{{
														 Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)
														 +
														 Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)
														 +
														 Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)
														 }}"
												disabled
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="grey-header1 headMarg">B.2. No. of
								beneficiaries started getting benefits under Parvarish scheme in
								the reporting month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2">Children benefited</th>
											<th colspan="3">Below 6 years</th>
											<th colspan="3">6-18 years</th>
											<th colspan="3">Total (Auto Calculate)</th>
										</tr>
										<tr>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>

									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.2.a.
														Orphans</label>
												</div>
											</td>
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="b2OrphansBoysYearsBelow6"
												ng-model="dcpuForm.b2OrphansBoysYearsBelow6"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="b2OrphansGirlsYearsBelow6"
												ng-model="dcpuForm.b2OrphansGirlsYearsBelow6"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="b2OrphansTotalYearsBelow6" readonly tabindex=-1
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="b2OrphansBoysYears6to18"
												ng-model="dcpuForm.b2OrphansBoysYears6to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="b2OrphansGirlsYears6to18"
												ng-model="dcpuForm.b2OrphansGirlsYears6to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted" tabindex= -1
												type="text" id="b2OrphansTotalYears6to18" readonly
												value="{{Number(dcpuForm.b2OrphansBoysYears6to18-0)+Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted" type="text"
												readonly id="b2OrphansBoysTotal"  tabindex= -1
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+Number(dcpuForm.b2OrphansBoysYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted" readonly
												type="text" id="b2OrphansGirlsTotal" tabindex= -1
												value="{{Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input disabled
												type="text" id="b2OrphansTotal"
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth"></td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.2.b.
														Affected/ Infected with HIV/AIDS</label>
												</div>
											</td>
											<td><input type="number" required id=b2HIVBoysYearsBelow6
                                                              ng-model="dcpuForm.b2HIVBoysYearsBelow6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="b2HIVGirlsYearsBelow6"
												ng-model="dcpuForm.b2HIVGirlsYearsBelow6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="b2HIVTotalYearsBelow6"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b2HIVBoysYearsBelow6-0)+Number(dcpuForm.b2HIVGirlsYearsBelow6-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="number" required id="b2HIVBoysYears6to18"
												ng-model="dcpuForm.b2HIVBoysYears6to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="b2HIVGirlsYears6to18"
												ng-model="dcpuForm.b2HIVGirlsYears6to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="b2HIVTotalYears6to18" tabindex= -1
												readonly value="{{Number(dcpuForm.b2HIVBoysYears6to18-0)+Number(dcpuForm.b2HIVGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input type="text" id="b2HIVBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2HIVBoysYearsBelow6-0)+Number(dcpuForm.b2HIVBoysYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input type="text" id="b2HIVGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+Number(dcpuForm.b2HIVGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input type="text" id="b2HIVTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2HIVBoysYearsBelow6-0)+Number(dcpuForm.b2HIVBoysYears6to18-0)+
												Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+Number(dcpuForm.b2HIVGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.2.c.
														Affected/ Infected with Leprosy</label>
												</div>
											</td>
											<td><input type="text" id="b2LeprosyBoysYearsBelow6" required
												ng-model="dcpuForm.b2LeprosyBoysYearsBelow6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>

											<td><input type="number" required id="b2LeprosyGirlsYearsBelow6"
												ng-model="dcpuForm.b2LeprosyGirlsYearsBelow6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="b2LeprosyTotalYearsBelow6"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="number" required id="b2LeprosyBoysYears6to18"
												ng-model="dcpuForm.b2LeprosyBoysYears6to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="b2LeprosyGirlsYears6to18"
												ng-model="dcpuForm.b2LeprosyGirlsYears6to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="b2LeprosyTotalYears6to18" tabindex= -1
												readonly 
												value="{{Number(dcpuForm.b2LeprosyBoysYears6to18-0)+Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b2LeprosyBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+Number(dcpuForm.b2LeprosyBoysYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b2LeprosyGirlsTotal"
												readonly  tabindex= -1
												value="{{Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b2LeprosyTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+Number(dcpuForm.b2LeprosyBoysYears6to18-0)
														+Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput"><b>B.2.d
														Total</b></label>
												</div>
											</td>
											<td><input type="text" id="b2TotalBoysYearsBelow6"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+ 
														Number(dcpuForm.b2HIVBoysYearsBelow6-0)+ 
														Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)
														 }}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalGirlsYearsBelow6"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+ 
														Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+ 
														Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalTotalYearsBelow6"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+ 
														Number(dcpuForm.b2HIVBoysYearsBelow6-0)+ 
														Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)
														+
														Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+ 
														Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+ 
														Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)
														}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalBoysYears6to18"
												readonly tabindex= -1 
												value="{{
															Number(dcpuForm.b2OrphansBoysYears6to18-0)+ 
															Number(dcpuForm.b2HIVBoysYears6to18-0)+ 
															Number(dcpuForm.b2LeprosyBoysYears6to18-0)
															 
														}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalGirlsYears6to18"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b2OrphansGirlsYears6to18-0)+ 
														Number(dcpuForm.b2HIVGirlsYears6to18-0)+ 
														Number(dcpuForm.b2LeprosyGirlsYears6to18-0)
														}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalTotalYears6to18"
												readonly tabindex= -1 
												value="{{
														Number(dcpuForm.b2OrphansBoysYears6to18-0)+ 
														Number(dcpuForm.b2HIVBoysYears6to18-0)+ 
														Number(dcpuForm.b2LeprosyBoysYears6to18-0)
														+
														Number(dcpuForm.b2OrphansGirlsYears6to18-0)+ 
														Number(dcpuForm.b2HIVGirlsYears6to18-0)+ 
														Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+ 
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+ 
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2TotalGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														  Number(dcpuForm.b2OrphansGirlsYears6to18-0)+
														  Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														  Number(dcpuForm.b2HIVGirlsYears6to18-0)+
														  Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+
														  Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												></td>

											<td><input type="text" id="b2Total" readonly tabindex= -1 
												value="{{Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)
														 +
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)
														 +
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg">B.3. Total no. of
								beneficiaries under Parvarish scheme at the end of the reporting
								month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2">Children benefited</th>
											<th colspan="3">Below 6 years</th>
											<th colspan="3">6-18 years</th>
											<th colspan="3">Total (Auto Calculate)</th>
										</tr>
										<tr>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>

									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.3.a.
														Orphans</label>
												</div>
											</td>
											<td><input ng-disabled="dcpuForm.submitted" readonly tabindex= -1
												type="text" id="b3OrphansBoysYearsBelow6"
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted" readonly tabindex= -1
												type="text" id="b3OrphansGirlsYearsBelow6"
												value="{{Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted" readonly tabindex= -1
												type="text"  id="b3OrphansTotalYearsBelow6"
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted" readonly tabindex= -1
												type="text" id="b3OrphansBoysYears6to18"
												value="{{Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted" readonly tabindex= -1
												type="text" id="b3OrphansGirlsYears6to18"
												value="{{Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="text" 
												value="{{Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}" 
												id="b3OrphansTotalYears6to18"
												readonly tabindex= -1
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted" type="text"
												readonly tabindex= -1 id="b3OrphansBoysTotal"
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="b3OrphansGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="b3OrphansTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.3.b.
														Affected/ Infected with HIV/AIDS</label>
												</div>
											</td>
											<td><input type="text" id=b3HIVBoysYearsBelow6 readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3HIVGirlsYearsBelow6" readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3HIVTotalYearsBelow6"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="text" id="b3HIVBoysYears6to18" readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3HIVGirlsYears6to18" readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle "
												only-four-digits></td>

											<td><input type="text" id="b3HIVTotalYears6to18"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3HIVBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3HIVGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3HIVTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle"
												only-four-digits></td>


										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.3.c.
														Affected/ Infected with Leprosy</label>
												</div>
											</td>
											<td><input type="text" id="b3LeprosyBoysYearsBelow6" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle "
												only-four-digits></td>

											<td><input type="text" id="b3LeprosyGirlsYearsBelow6" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3LeprosyTotalYearsBelow6"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="text" id="b3LeprosyBoysYears6to18" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3LeprosyGirlsYears6to18" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="b3LeprosyTotalYears6to18"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="text" id="b3LeprosyBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="text" id="b3LeprosyGirlsTotal"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="text" id="b3LeprosyTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">B.3.d
														Total</label>
												</div>
											</td>
											<td><input type="text" id="b3TotalBoysYearsBelow6" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalGirlsYearsBelow6" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalTotalYearsBelow6"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalBoysYears6to18" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalGirlsYears6to18" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalTotalYears6to18"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 
														 Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 
														 Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)
														 
														 }}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>

											<td><input type="text" id="b3TotalGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)+
														 
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)+
														 
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)
														 
														 }}" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>

											<td><input type="text" id="b3Total" readonly tabindex= -1 
												value="{{Number(dcpuForm.b1OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansBoysYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b2OrphansBoysYears6to18-0)+
														 Number(dcpuForm.b1OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2OrphansGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1OrphansGirlsYears6to18-0)+
														 Number(dcpuForm.b2OrphansGirlsYears6to18-0)+
														 
														 Number(dcpuForm.b1HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b2HIVBoysYearsBelow6-0)+
														 Number(dcpuForm.b1HIVBoysYears6to18-0)+
														 Number(dcpuForm.b2HIVBoysYears6to18-0)+
														 Number(dcpuForm.b1HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2HIVGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1HIVGirlsYears6to18-0)+
														 Number(dcpuForm.b2HIVGirlsYears6to18-0)+
														 
														 Number(dcpuForm.b1LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyBoysYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b2LeprosyBoysYears6to18-0)+
														 Number(dcpuForm.b1LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b2LeprosyGirlsYearsBelow6-0)+
														 Number(dcpuForm.b1LeprosyGirlsYears6to18-0)+
														 Number(dcpuForm.b2LeprosyGirlsYears6to18-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>



							<div class="grey-header1 headMarg">B.4. Statement of
								Expenditure for PARVARISH Scheme in the reporting month</div>
							<div class="form-group labelFont sectionMarginTopDCPU ">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">B.4.a. Opening balance on the first day
									of the month (Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number"  limit-to="7" ng-model="dcpuForm.b4a"
										disabled 
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>


							<div class="form-group labelFont ">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">B.4.b. Amount received in the month
									(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required  ng-model="dcpuForm.b4b"
										ng-disabled="dcpuForm.submitted" limit-to="7" ng-keyup="calculateTotal('b4c')"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont ">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">B.4.c. Total amount spent in the month
									(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required limit-to="7" ng-model="dcpuForm.b4c" id="b4c"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('b4c')"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont ">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">B.4.d. Closing balance on the last day
									of the month</label>
								<div class="col-md-6 marginBottomTop">
<!-- 								value="{{Number(dcpuForm.b4a-0)+Number(dcpuForm.b4b-0)-Number(dcpuForm.b4c-0)}}" -->
									<input type="text"  id="b4d" readonly tabindex= -1
										ng-model="dcpuForm.b4d"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground readonlyStyle">
								</div>
							</div>
							<!-------------------------------------- C section ------------------------------------------>

							<div class="b4sectionheading" id="caseC"></div>
							<div class="grey-header headMarg">C. Status of
								implementation of "ANTARJATIYA VIVAH PROTSAHAN ANUDAN YOJANA"</div>

							<div class="form-group labelFont sectionMarginTopDCPU">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.1. No. of beneficiaries getting
									benefits under the scheme on the first day of the reporting
									month (Please enter only the number benefited for the Financial
									Year)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required only-four-digits ng-model="dcpuForm.c1"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.2. No. of applicants received grant
									in the reporting month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required only-four-digits ng-model="dcpuForm.c2"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont ">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.3. Total no. of beneficiaries at the
									end of the reporting month</label>
								<div class="col-md-6 marginBottomTop"> 
									<input type="text"  id="c3" value="{{Number(dcpuForm.c1-0)+Number(dcpuForm.c2-0)}}"
										ng-disabled="dcpuForm.submitted" readonly tabindex= -1
										class="form-control inputBackground readonlyStyle">
								</div>
							</div>


							<div class="grey-header1 headMarg">C.4. Statement of
								Expenditure for ANTARJATIYA VIVAH PROTSAHAN ANUDAN YOJANA in the
								reporting month</div>

							<div class="form-group labelFont sectionMarginTopDCPU">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.4.a. Opening balance on the first day
									of the month:(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number"  limit-to="7" ng-model="dcpuForm.c4a"
										disabled
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.4.b. Amount received in the month:
									(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required limit-to="7" ng-model="dcpuForm.c4b"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('c4c')"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.4.c. Total amount spent in the month:
									(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required limit-to="7" ng-model="dcpuForm.c4c" id="c4c"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('c4c')"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">C.4.d. Closing balance on the last day
									of the month</label>
								<div class="col-md-6 marginBottomTop"> 
									<input type="text"  id="c4d" readonly tabindex= -1
									ng-model="dcpuForm.c4d"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground readonlyStyle">
								</div>
							</div>
							<!-------------------------------------- End of C section ------------------------------------------>


							<!-------------------------------------- D section ------------------------------------------>
							<div class="b4sectionheading" id="caseD"></div>
							<div class="grey-header headMarg">D. Status of
								Implementation of "SPONSORSHIP" scheme</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2">Beneficiaries under Sponsorship Scheme</th>
											<th colspan="6">Boys</th>
											<th colspan="6">Girls</th>
											<th rowspan="2">Grand Total</th>
										</tr>
										<tr>
											<th>0-6</th>
											<th>7-11</th>
											<th>12-15</th>
											<th>16-18</th>
											<th>> 18</th>
											<th>Total</th>
											<th>0-6</th>
											<th>7-11</th>
											<th>12-15</th>
											<th>16-18</th>
											<th>> 18</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.1.
														Beneficiaries getting benefits under the scheme on the
														first day of the reporting month</label>
												</div>
											</td>
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1BoysYears0to6"
												ng-model="dcpuForm.d1BoysYears0to6"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											</td>
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1BoysYears7to11"
												ng-model="dcpuForm.d1BoysYears7to11"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1BoysYears12to15"
												ng-model="dcpuForm.d1BoysYears12to15"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1BoysYears16to18"
												ng-model="dcpuForm.d1BoysYears16to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1BoysYearsgreaterThan18"
												ng-model="dcpuForm.d1BoysYearsgreaterThan18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="d1BoysTotal" readonly tabindex= -1 
												value="{{Number(dcpuForm.d1BoysYears0to6-0)+
														 Number(dcpuForm.d1BoysYears7to11-0)+
														 Number(dcpuForm.d1BoysYears12to15-0)+
														 Number(dcpuForm.d1BoysYears16to18-0)+
														 Number(dcpuForm.d1BoysYearsgreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input ng-disabled="dcpuForm.submitted" type="text" required
												id="d1GirlsYears0to6" ng-model="dcpuForm.d1GirlsYears0to6"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1GirlsYears7to11"
												ng-model="dcpuForm.d1GirlsYears7to11"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1GirlsYears12to15"
												ng-model="dcpuForm.d1GirlsYears12to15"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1GirlsYears16to18"
												ng-model="dcpuForm.d1GirlsYears16to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="d1GirlsYearsgreaterThan18"
												ng-model="dcpuForm.d1GirlsYearsgreaterThan18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="d1GirlsTotal" 
												value="{{Number(dcpuForm.d1GirlsYears0to6-0)+
														 Number(dcpuForm.d1GirlsYears7to11-0)+
														 Number(dcpuForm.d1GirlsYears12to15-0)+
														 Number(dcpuForm.d1GirlsYears16to18-0)+
														 Number(dcpuForm.d1GirlsYearsgreaterThan18-0)}}" 
												readonly tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>

											<td><input type="text" id="d1GrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.d1BoysYears0to6-0)+
														 Number(dcpuForm.d1BoysYears7to11-0)+
														 Number(dcpuForm.d1BoysYears12to15-0)+
														 Number(dcpuForm.d1BoysYears16to18-0)+
														 Number(dcpuForm.d1BoysYearsgreaterThan18-0)+
														 Number(dcpuForm.d1GirlsYears0to6-0)+
														 Number(dcpuForm.d1GirlsYears7to11-0)+
														 Number(dcpuForm.d1GirlsYears12to15-0)+
														 Number(dcpuForm.d1GirlsYears16to18-0)+
														 Number(dcpuForm.d1GirlsYearsgreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.2.
														Beneficiaries started getting benefits in the reporting
														month</label>
												</div>
											</td>
											<td><input type="number" required id=d2BoysYears0to6
                                                            ng-model="dcpuForm.d2BoysYears0to6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2BoysYears7to11"
												ng-model="dcpuForm.d2BoysYears7to11"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2BoysYears12to15"
												ng-model="dcpuForm.d2BoysYears12to15"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2BoysYears16to18"
												ng-model="dcpuForm.d2BoysYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2BoysYearsgreaterThan18"
												ng-model="dcpuForm.d2BoysYearsgreaterThan18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="d2BoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.d2BoysYears0to6-0)+
														Number(dcpuForm.d2BoysYears7to11-0)+
														Number(dcpuForm.d2BoysYears12to15-0)+
														Number(dcpuForm.d2BoysYears16to18-0)+
														Number(dcpuForm.d2BoysYearsgreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="number" required id="d2GirlsYears0to6"
												ng-model="dcpuForm.d2GirlsYears0to6" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>

											<td><input type="number" required id="d2GirlsYears7to11"
												ng-model="dcpuForm.d2GirlsYears7to11"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2GirlsYears12to15"
												ng-model="dcpuForm.d2GirlsYears12to15"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2GirlsYears16to18"
												ng-model="dcpuForm.d2GirlsYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="d2GirlsYearsgreaterThan18"
												ng-model="dcpuForm.d2GirlsYearsgreaterThan18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="d2GirlsTotal" disabled
												value="{{Number(dcpuForm.d2GirlsYears0to6-0)+
														Number(dcpuForm.d2GirlsYears7to11-0)+
														Number(dcpuForm.d2GirlsYears12to15-0)+
														Number(dcpuForm.d2GirlsYears16to18-0)+
														Number(dcpuForm.d2GirlsYearsgreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth"></td>

											<td><input type="text" id="d2GrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.d2BoysYears0to6-0)+
														Number(dcpuForm.d2BoysYears7to11-0)+
														Number(dcpuForm.d2BoysYears12to15-0)+
														Number(dcpuForm.d2BoysYears16to18-0)+
														Number(dcpuForm.d2BoysYearsgreaterThan18-0)+
														Number(dcpuForm.d2GirlsYears0to6-0)+
														Number(dcpuForm.d2GirlsYears7to11-0)+
														Number(dcpuForm.d2GirlsYears12to15-0)+
														Number(dcpuForm.d2GirlsYears16to18-0)+
														Number(dcpuForm.d2GirlsYearsgreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">D.3.
														Beneficiaries at the end of the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="d3BoysYears0to6" disabled
												value="{{Number(dcpuForm.d1BoysYears0to6-0)+Number(dcpuForm.d2BoysYears0to6-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3BoysYears7to11" disabled
												value="{{Number(dcpuForm.d1BoysYears7to11-0)+Number(dcpuForm.d2BoysYears7to11-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3BoysYears12to15" disabled
												value="{{Number(dcpuForm.d1BoysYears12to15-0)+Number(dcpuForm.d2BoysYears12to15-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3BoysYears16to18" disabled
												value="{{Number(dcpuForm.d1BoysYears16to18-0)+Number(dcpuForm.d2BoysYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3BoysYearsgreaterThan18" disabled
												value="{{Number(dcpuForm.d1BoysYearsgreaterThan18-0)+Number(dcpuForm.d2BoysYearsgreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3BoysTotal" disabled
												value="{{Number(dcpuForm.d1BoysYears0to6-0)+
														Number(dcpuForm.d1BoysYears7to11-0)+
														Number(dcpuForm.d1BoysYears12to15-0)+
														Number(dcpuForm.d1BoysYears16to18-0)+
														Number(dcpuForm.d1BoysYearsgreaterThan18-0)+
														Number(dcpuForm.d2BoysYears0to6-0)+
														Number(dcpuForm.d2BoysYears7to11-0)+
														Number(dcpuForm.d2BoysYears12to15-0)+
														Number(dcpuForm.d2BoysYears16to18-0)+
														Number(dcpuForm.d2BoysYearsgreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3GirlsYears0to6" disabled
												value="{{Number(dcpuForm.d1GirlsYears0to6-0)+Number(dcpuForm.d2GirlsYears0to6-0)}}" 
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3GirlsYears7to11" disabled
												value="{{Number(dcpuForm.d1GirlsYears7to11-0)+Number(dcpuForm.d2GirlsYears7to11-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>
 
											<td><input type="text" id="d3GirlsYears12to15" disabled
												value="{{Number(dcpuForm.d1GirlsYears12to15-0)+Number(dcpuForm.d2GirlsYears12to15-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3GirlsYears16to18" disabled
												value="{{Number(dcpuForm.d1GirlsYears16to18-0)+Number(dcpuForm.d2GirlsYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3GirlsYearsgreaterThan18" disabled
												value="{{Number(dcpuForm.d1GirlsYearsgreaterThan18-0)+Number(dcpuForm.d2GirlsYearsgreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="d3GirlsTotal" disabled
												value="{{Number(dcpuForm.d1GirlsYears0to6-0)+
														Number(dcpuForm.d1GirlsYears7to11-0)+
														Number(dcpuForm.d1GirlsYears12to15-0)+
														Number(dcpuForm.d1GirlsYears16to18-0)+
														Number(dcpuForm.d1GirlsYearsgreaterThan18-0)+
														Number(dcpuForm.d2GirlsYears0to6-0)+
														Number(dcpuForm.d2GirlsYears7to11-0)+
														Number(dcpuForm.d2GirlsYears12to15-0)+
														Number(dcpuForm.d2GirlsYears16to18-0)+
														Number(dcpuForm.d2GirlsYearsgreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>
											<td><input disabled type="text" id="d3GrandTotal"
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(dcpuForm.d1BoysYears0to6-0)+
														Number(dcpuForm.d1BoysYears7to11-0)+
														Number(dcpuForm.d1BoysYears12to15-0)+
														Number(dcpuForm.d1BoysYears16to18-0)+
														Number(dcpuForm.d1BoysYearsgreaterThan18-0)+
														Number(dcpuForm.d1GirlsYears0to6-0)+
														Number(dcpuForm.d1GirlsYears7to11-0)+
														Number(dcpuForm.d1GirlsYears12to15-0)+
														Number(dcpuForm.d1GirlsYears16to18-0)+
														Number(dcpuForm.d1GirlsYearsgreaterThan18-0)+
														
														Number(dcpuForm.d2BoysYears0to6-0)+
														Number(dcpuForm.d2BoysYears7to11-0)+
														Number(dcpuForm.d2BoysYears12to15-0)+
														Number(dcpuForm.d2BoysYears16to18-0)+
														Number(dcpuForm.d2BoysYearsgreaterThan18-0)+
														Number(dcpuForm.d2GirlsYears0to6-0)+
														Number(dcpuForm.d2GirlsYears7to11-0)+
														Number(dcpuForm.d2GirlsYears12to15-0)+
														Number(dcpuForm.d2GirlsYears16to18-0)+
														Number(dcpuForm.d2GirlsYearsgreaterThan18-0)}}"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--------------------------------------End of D section ------------------------------------------>

							<!-------------------------------------- E section ------------------------------------------>
							<div class="b4sectionheading" id="caseE"></div>
							<div class="grey-header headMarg">E. Status of Implementation of "AFTER CARE" Programme</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2">Beneficiaries under After Care Programme</th>
											<th colspan="4">Boys</th>
											<th colspan="4">Girls</th>
											<th rowspan="2">Grand Total</th>
										</tr>
										<tr>
											<th>16-18</th>
											<th>18-21</th>
											<th>> 21</th>
											<th>Total</th>
											<th>16-18</th>
											<th>18-21</th>
											<th>> 21</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">E.1.
														Beneficiaries getting benefits under the scheme on the
														first day of the reporting month</label>
												</div>
											</td>
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="e1BoysYears16to18" ng-model="dcpuForm.e1BoysYears16to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="e1BoysYears18to21"
												ng-model="dcpuForm.e1BoysYears18to21"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="e1BoysYearsGreaterThan21"
												ng-model="dcpuForm.e1BoysYearsGreaterThan21"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="e1BoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.e1BoysYears16to18-0)+Number(dcpuForm.e1BoysYears18to21-0)
														+Number(dcpuForm.e1BoysYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
												
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="e1GirlsYears16to18"
												ng-model="dcpuForm.e1GirlsYears16to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input ng-disabled="dcpuForm.submitted"
												type="number" required id="e1GirlsYears18to21"
												ng-model="dcpuForm.e1GirlsYears18to21"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input ng-disabled="dcpuForm.submitted" type="text"
												 id="e1GirlsYearsGreaterThan21" required
												ng-model="dcpuForm.e1GirlsYearsGreaterThan21"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>
												
											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="e1GirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.e1GirlsYears16to18-0)+
														Number(dcpuForm.e1GirlsYears18to21-0)+
														Number(dcpuForm.e1GirlsYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>
												
											<td><input ng-disabled="dcpuForm.submitted"
												type="text" id="e1GrandTotal"
												value="{{Number(dcpuForm.e1BoysYears16to18-0)+
														Number(dcpuForm.e1BoysYears18to21-0)+
														Number(dcpuForm.e1BoysYearsGreaterThan21-0)
														+
														Number(dcpuForm.e1GirlsYears16to18-0)+
														Number(dcpuForm.e1GirlsYears18to21-0)+
														Number(dcpuForm.e1GirlsYearsGreaterThan21-0)
														}}" 
												readonly tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">E.2.
														Beneficiaries started getting benefits in the reporting
														month</label>
												</div>
											</td>
											<td><input type="number" required id=e2BoysYears16to18" ng-model="dcpuForm.e2BoysYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="e2BoysYears18to21"
												ng-model="dcpuForm.e2BoysYears18to21"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="e2BoysYearsGreaterThan21"
												ng-model="dcpuForm.e2BoysYearsGreaterThan21"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="e2BoysTotal" disabled
												value="{{Number(dcpuForm.e2BoysYears16to18-0)+
														Number(dcpuForm.e2BoysYears18to21-0)+
														Number(dcpuForm.e2BoysYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth"></td>

											<td><input type="number" required id="e2GirlsYears16to18"
												ng-model="dcpuForm.e2GirlsYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="e2GirlsYears18to21"
												ng-model="dcpuForm.e2GirlsYears18to21"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="e2GirlsYearsGreaterThan21" ng-model="dcpuForm.e2GirlsYearsGreaterThan21"
												 ng-disabled="dcpuForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>

											<td><input type="text" id="e2GirlsTotal"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.e2GirlsYears16to18-0)+
														Number(dcpuForm.e2GirlsYears18to21-0)+
														Number(dcpuForm.e2GirlsYearsGreaterThan21-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>

											<td><input type="text" id="e2GrandTotal"
												readonly tabindex= -1 
												value="{{Number(dcpuForm.e2BoysYears16to18-0)+
														Number(dcpuForm.e2BoysYears18to21-0)+
														Number(dcpuForm.e2BoysYearsGreaterThan21-0)
														+
														Number(dcpuForm.e2GirlsYears16to18-0)+
														Number(dcpuForm.e2GirlsYears18to21-0)+
														Number(dcpuForm.e2GirlsYearsGreaterThan21-0)
														}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">E.3.
														Beneficiaries at the end of the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="e3BoysYears16to18" disabled
												value="{{Number(dcpuForm.e1BoysYears16to18-0)+Number(dcpuForm.e2BoysYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3BoysYears18to21" disabled
												value="{{Number(dcpuForm.e1BoysYears18to21-0)+Number(dcpuForm.e2BoysYears18to21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3BoysYearsGreaterThan21" disabled
												value="{{Number(dcpuForm.e1BoysYearsGreaterThan21-0)+Number(dcpuForm.e2BoysYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3BoysTotal" disabled
												value="{{Number(dcpuForm.e1BoysYears16to18-0)+
														Number(dcpuForm.e1BoysYears18to21-0)+
														Number(dcpuForm.e1BoysYearsGreaterThan21-0) +
														Number(dcpuForm.e2BoysYears16to18-0)+
														Number(dcpuForm.e2BoysYears18to21-0)+
														Number(dcpuForm.e2BoysYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3GirlsYears16to18" disabled
												value="{{Number(dcpuForm.e1GirlsYears16to18-0)+Number(dcpuForm.e2GirlsYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="e3GirlsYears18to21" disabled
												value="{{Number(dcpuForm.e1GirlsYears18to21-0)+Number(dcpuForm.e2GirlsYears18to21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3GirlsYearsGreaterThan21" disabled
												value="{{Number(dcpuForm.e1GirlsYearsGreaterThan21-0)+Number(dcpuForm.e2GirlsYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3GirlsTotal" disabled
												value="{{Number(dcpuForm.e1GirlsYears16to18-0)+
														Number(dcpuForm.e1GirlsYears18to21-0)+
														Number(dcpuForm.e1GirlsYearsGreaterThan21-0) +
														Number(dcpuForm.e2GirlsYears16to18-0)+
														Number(dcpuForm.e2GirlsYears18to21-0)+
														Number(dcpuForm.e2GirlsYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="e3GrandTotal" disabled
												value="{{Number(dcpuForm.e1BoysYears16to18-0)+
														Number(dcpuForm.e1BoysYears18to21-0)+
														Number(dcpuForm.e1BoysYearsGreaterThan21-0) +
														Number(dcpuForm.e1GirlsYears16to18-0)+
														Number(dcpuForm.e1GirlsYears18to21-0)+
														Number(dcpuForm.e1GirlsYearsGreaterThan21-0) +
														Number(dcpuForm.e2BoysYears16to18-0)+
														Number(dcpuForm.e2BoysYears18to21-0)+
														Number(dcpuForm.e2BoysYearsGreaterThan21-0) +
														Number(dcpuForm.e2GirlsYears16to18-0)+
														Number(dcpuForm.e2GirlsYears18to21-0)+
														Number(dcpuForm.e2GirlsYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--------------------------------------End of E section ------------------------------------------>

							<!---------------------------------------F Section--------------------------------->
							<div class="b4sectionheading" id="caseF"></div>
							<div class="grey-header headMarg">F. Status of
								Implementation of "FOSTER CARE" Programme</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2">Beneficiaries under Foster Care
												Programme</th>
											<th colspan="6">Boys</th>
											<th colspan="6">Girls</th>
											<th rowspan="2">Grand Total</th>
										</tr>
										<tr>
											<th>0-6</th>
											<th>7-11</th>
											<th>12-15</th>
											<th>16-18</th>
											<th>> 18</th>
											<th>Total</th>
											<th>0-6</th>
											<th>7-11</th>
											<th>12-15</th>
											<th>16-18</th>
											<th>> 18</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">F.1.
														Beneficiaries getting benefits under the program on the
														first day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id=f1BoysYears0to6
                                                            ng-model="dcpuForm.f1BoysYears0to6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1BoysYears7to11"
												ng-model="dcpuForm.f1BoysYears7to11"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1BoysYears12to15"
												ng-model="dcpuForm.f1BoysYears12to15"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1BoysYears16to18"
												ng-model="dcpuForm.f1BoysYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1BoysYearsGreaterThan18"
												ng-model="dcpuForm.f1BoysYearsGreaterThan18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f1BoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f1BoysYears0to6-0)+
														 Number(dcpuForm.f1BoysYears7to11-0)+
														 Number(dcpuForm.f1BoysYears12to15-0)+
														 Number(dcpuForm.f1BoysYears16to18-0)+
														 Number(dcpuForm.f1BoysYearsGreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="text" required id="f1GirlsYears0to6"
												ng-model="dcpuForm.f1GirlsYears0to6" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1GirlsYears7to11"
												ng-model="dcpuForm.f1GirlsYears7to11"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1GirlsYears12to15"
												ng-model="dcpuForm.f1GirlsYears12to15"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1GirlsYears16to18"
												ng-model="dcpuForm.f1GirlsYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f1GirlsYearsGreaterThan18"
												ng-model="dcpuForm.f1GirlsYearsGreaterThan18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f1GirlsTotal"  readonly tabindex= -1
											value="{{Number(dcpuForm.f1GirlsYears0to6-0)+
													 Number(dcpuForm.f1GirlsYears7to11-0)+
													 Number(dcpuForm.f1GirlsYears12to15-0)+
													 Number(dcpuForm.f1GirlsYears16to18-0)+
													 Number(dcpuForm.f1GirlsYearsGreaterThan18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="text" id="f1GrandTotal" readonly tabindex= -1
												value="{{
														 Number(dcpuForm.f1BoysYears0to6-0)+
														 Number(dcpuForm.f1BoysYears7to11-0)+
														 Number(dcpuForm.f1BoysYears12to15-0)+
														 Number(dcpuForm.f1BoysYears16to18-0)+
														 Number(dcpuForm.f1BoysYearsGreaterThan18-0)
														 +
														 Number(dcpuForm.f1GirlsYears0to6-0)+
														 Number(dcpuForm.f1GirlsYears7to11-0)+
														 Number(dcpuForm.f1GirlsYears12to15-0)+
														 Number(dcpuForm.f1GirlsYears16to18-0)+
														 Number(dcpuForm.f1GirlsYearsGreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">F.2. .
														Beneficiaries started getting benefits in the reporting
														month</label>
												</div>
											</td>
											<td><input type="number" required id=f2BoysYears0to6
                                                            ng-model="dcpuForm.f2BoysYears0to6"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2BoysYears7to11"
												ng-model="dcpuForm.f2BoysYears7to11"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2BoysYears12to15"
												ng-model="dcpuForm.f2BoysYears12to15"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2BoysYears16to18"
												ng-model="dcpuForm.f2BoysYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2BoysYearsGreaterThan18"
												ng-model="dcpuForm.f2BoysYearsGreaterThan18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f2BoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f2BoysYears0to6-0)+
														 Number(dcpuForm.f2BoysYears7to11-0)+
														 Number(dcpuForm.f2BoysYears12to15-0)+
														 Number(dcpuForm.f2BoysYears16to18-0)+
														 Number(dcpuForm.f2BoysYearsGreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="text" required id="f2GirlsYears0to6"
												ng-model="dcpuForm.f2GirlsYears0to6" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2GirlsYears7to11"
												ng-model="dcpuForm.f2GirlsYears7to11"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2GirlsYears12to15"
												ng-model="dcpuForm.f2GirlsYears12to15"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2GirlsYears16to18"
												ng-model="dcpuForm.f2GirlsYears16to18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f2GirlsYearsGreaterThan18"
												ng-model="dcpuForm.f2GirlsYearsGreaterThan18"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f2GirlsTotal"  readonly tabindex= -1
												value="{{Number(dcpuForm.f2GirlsYears0to6-0)+
														 Number(dcpuForm.f2GirlsYears7to11-0)+
														 Number(dcpuForm.f2GirlsYears12to15-0)+
														 Number(dcpuForm.f2GirlsYears16to18-0)+
														 Number(dcpuForm.f2GirlsYearsGreaterThan18-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="text" id="f2GrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f2BoysYears0to6-0)+
														 Number(dcpuForm.f2BoysYears7to11-0)+
														 Number(dcpuForm.f2BoysYears12to15-0)+
														 Number(dcpuForm.f2BoysYears16to18-0)+
														 Number(dcpuForm.f2BoysYearsGreaterThan18-0)
														 +
														 Number(dcpuForm.f2GirlsYears0to6-0)+
														 Number(dcpuForm.f2GirlsYears7to11-0)+
														 Number(dcpuForm.f2GirlsYears12to15-0)+
														 Number(dcpuForm.f2GirlsYears16to18-0)+
														 Number(dcpuForm.f2GirlsYearsGreaterThan18-0)}}" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">F.3.
														Beneficiaries at the end of the reporting month</label>
												</div>
											</td>
											<td><input type="text" id=f3BoysYears0to6 disabled
                                                 value="{{Number(dcpuForm.f1BoysYears0to6-0)+Number(dcpuForm.f2BoysYears0to6-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3BoysYears7to11" disabled
												value="{{ Number(dcpuForm.f1BoysYears7to11-0)+ Number(dcpuForm.f2BoysYears7to11-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3BoysYears12to15" disabled
												value="{{Number(dcpuForm.f1BoysYears12to15-0)+Number(dcpuForm.f2BoysYears12to15-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="f3BoysYears16to18" disabled
												value="{{Number(dcpuForm.f1BoysYears16to18-0)+Number(dcpuForm.f2BoysYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>
												
										   <td><input type="text" id="f3BoysYearsGreaterThan18" disabled
												value="{{Number(dcpuForm.f1BoysYearsGreaterThan18-0)+Number(dcpuForm.f2BoysYearsGreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"
												only-four-digits></td>

											<td><input type="text" id="f3BoysTotal" disabled
												value="{{Number(dcpuForm.f1BoysYears0to6-0)+
														 Number(dcpuForm.f1BoysYears7to11-0)+
														 Number(dcpuForm.f1BoysYears12to15-0)+
														 Number(dcpuForm.f1BoysYears16to18-0)+
														 Number(dcpuForm.f1BoysYearsGreaterThan18-0)+
														 Number(dcpuForm.f2BoysYears0to6-0)+
														 Number(dcpuForm.f2BoysYears7to11-0)+
														 Number(dcpuForm.f2BoysYears12to15-0)+
														 Number(dcpuForm.f2BoysYears16to18-0)+
														 Number(dcpuForm.f2BoysYearsGreaterThan18-0)}}" 
												class="form-control inputBackground tableinputWidth totalFont"></td>
												
											

											<td><input type="text" id="f3GirlsYears0to6" disabled
												value="{{Number(dcpuForm.f1GirlsYears0to6-0)+Number(dcpuForm.f2GirlsYears0to6-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3GirlsYears7to11" disabled
												value="{{Number(dcpuForm.f1GirlsYears7to11-0)+Number(dcpuForm.f2GirlsYears7to11-0)}}"
 												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3GirlsYears12to15" disabled
												value="{{Number(dcpuForm.f1GirlsYears12to15-0)+Number(dcpuForm.f2GirlsYears12to15-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3GirlsYears16to18" disabled
												value="{{Number(dcpuForm.f1GirlsYears16to18-0)+Number(dcpuForm.f2GirlsYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3GirlsYearsGreaterThan18" disabled
												value="{{Number(dcpuForm.f1GirlsYearsGreaterThan18-0)+Number(dcpuForm.f2GirlsYearsGreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="f3GirlsTotal" disabled
												value="{{Number(dcpuForm.f1GirlsYears0to6-0)+
														 Number(dcpuForm.f1GirlsYears7to11-0)+
														 Number(dcpuForm.f1GirlsYears12to15-0)+
														 Number(dcpuForm.f1GirlsYears16to18-0)+
														 Number(dcpuForm.f1GirlsYearsGreaterThan18-0) +
														 Number(dcpuForm.f2GirlsYears0to6-0)+
														 Number(dcpuForm.f2GirlsYears7to11-0)+
														 Number(dcpuForm.f2GirlsYears12to15-0)+
														 Number(dcpuForm.f2GirlsYears16to18-0)+
														 Number(dcpuForm.f2GirlsYearsGreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="f3GrandTotal" disabled
												value="{{Number(dcpuForm.f1BoysYears0to6-0)+
														 Number(dcpuForm.f1BoysYears7to11-0)+
														 Number(dcpuForm.f1BoysYears12to15-0)+
														 Number(dcpuForm.f1BoysYears16to18-0)+
														 Number(dcpuForm.f1BoysYearsGreaterThan18-0)
														 +
														 Number(dcpuForm.f1GirlsYears0to6-0)+
														 Number(dcpuForm.f1GirlsYears7to11-0)+
														 Number(dcpuForm.f1GirlsYears12to15-0)+
														 Number(dcpuForm.f1GirlsYears16to18-0)+
														 Number(dcpuForm.f1GirlsYearsGreaterThan18-0)
														 +
														 Number(dcpuForm.f2BoysYears0to6-0)+
														 Number(dcpuForm.f2BoysYears7to11-0)+
														 Number(dcpuForm.f2BoysYears12to15-0)+
														 Number(dcpuForm.f2BoysYears16to18-0)+
														 Number(dcpuForm.f2BoysYearsGreaterThan18-0)
														 +
														 Number(dcpuForm.f2GirlsYears0to6-0)+
														 Number(dcpuForm.f2GirlsYears7to11-0)+
														 Number(dcpuForm.f2GirlsYears12to15-0)+
														 Number(dcpuForm.f2GirlsYears16to18-0)+
														 Number(dcpuForm.f2GirlsYearsGreaterThan18-0)}}" 
												class="form-control inputBackground tableinputWidth totalFont"
												></td>
										</tr>
									</tbody>
								</table>
							</div>

							<!---------------------------------------End of F section ---------------------------------- -->

							<!---------------------------------------Start of F2 section ---------------------------------- -->

							<div class="grey-header1 headMarg">F.4. Category  wise
								breakup of Children benefited on the last day of the Reporting Month</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th rowspan="2" class="firstrowWidth">Description</th>
											<th colspan="7">Boys</th>
											<th colspan="7">Girls</th>
											<th rowspan="2">Grand Total</th>
										</tr>
										<tr>
											<th>SC</th>
											<th>ST</th>
											<th>EBC</th>
											<th>OBC</th>
											<th>Others</th>
											<th>Not Known</th>
											<th>Total</th>
											<th>SC</th>
											<th>ST</th>
											<th>EBC</th>
											<th>OBC</th>
											<th>Others</th>
											<th>Not known</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Parvarish</label>
												</div>
											</td>
											<td><input type="number" required id="f4ParvarishBoysSC"
												ng-model="dcpuForm.f4ParvarishBoysSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishBoysST"
												ng-model="dcpuForm.f4ParvarishBoysST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishBoysEBC"
												ng-model="dcpuForm.f4ParvarishBoysEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input type="number" required id="f4ParvarishBoysOBC"
												ng-model="dcpuForm.f4ParvarishBoysOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishBoysOthers"
												ng-model="dcpuForm.f4ParvarishBoysOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishBoysNotKnown"
												ng-model="dcpuForm.f4ParvarishBoysNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4ParvarishBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4ParvarishBoysSC-0)+
														 Number(dcpuForm.f4ParvarishBoysST-0)+
														 Number(dcpuForm.f4ParvarishBoysOBC-0)+
														 Number(dcpuForm.f4ParvarishBoysEBC-0)+
														 Number(dcpuForm.f4ParvarishBoysOthers-0)+
														 Number(dcpuForm.f4ParvarishBoysNotKnown-0)
														}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishGirlsSC"
												ng-model="dcpuForm.f4ParvarishGirlsSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishGirlsST"
												ng-model="dcpuForm.f4ParvarishGirlsST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input type="number" required id="f4ParvarishGirlsEBC"
												ng-model="dcpuForm.f4ParvarishGirlsEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishGirlsOBC"
												ng-model="dcpuForm.f4ParvarishGirlsOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishGirlsOthers"
												ng-model="dcpuForm.f4ParvarishGirlsOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishGirlsNotKnown"
												ng-model="dcpuForm.f4ParvarishGirlsNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4ParvarishGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4ParvarishGirlsSC-0)+
														 Number(dcpuForm.f4ParvarishGirlsST-0)+
														 Number(dcpuForm.f4ParvarishGirlsOBC-0)+
														 Number(dcpuForm.f4ParvarishGirlsEBC-0)+
														 Number(dcpuForm.f4ParvarishGirlsOthers-0)+
														 Number(dcpuForm.f4ParvarishGirlsNotKnown-0)
														}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

											<td><input type="text" id="f4ParvarishGrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4ParvarishBoysSC-0)+
														 Number(dcpuForm.f4ParvarishBoysST-0)+
														 Number(dcpuForm.f4ParvarishBoysOBC-0)+
														 Number(dcpuForm.f4ParvarishBoysEBC-0)+
														 Number(dcpuForm.f4ParvarishBoysOthers-0)+
														 Number(dcpuForm.f4ParvarishBoysNotKnown-0)+
														 Number(dcpuForm.f4ParvarishGirlsSC-0)+
														 Number(dcpuForm.f4ParvarishGirlsST-0)+
														 Number(dcpuForm.f4ParvarishGirlsOBC-0)+
														 Number(dcpuForm.f4ParvarishGirlsEBC-0)+
														 Number(dcpuForm.f4ParvarishGirlsOthers-0)+
														 Number(dcpuForm.f4ParvarishGirlsNotKnown-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Sponshorship</label>
												</div>
											</td>
											<td><input type="number" required id="f4SponshorshipBoysSC"
												ng-model="dcpuForm.f4SponshorshipBoysSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipBoysST"
												ng-model="dcpuForm.f4SponshorshipBoysST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipBoysOBC"
												ng-model="dcpuForm.f4SponshorshipBoysOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipBoysEBC"
												ng-model="dcpuForm.f4SponshorshipBoysEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipBoysOthers"
												ng-model="dcpuForm.f4SponshorshipBoysOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipBoysNotKnown"
												ng-model="dcpuForm.f4SponshorshipBoysNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4SponshorshipBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4SponshorshipBoysSC-0)+
														 Number(dcpuForm.f4SponshorshipBoysST-0)+
														 Number(dcpuForm.f4SponshorshipBoysOBC-0)+
														 Number(dcpuForm.f4SponshorshipBoysEBC-0)+
														 Number(dcpuForm.f4SponshorshipBoysOthers-0)+
														 Number(dcpuForm.f4SponshorshipBoysNotKnown-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipGirlsSC"
												ng-model="dcpuForm.f4SponshorshipGirlsSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipGirlsST"
												ng-model="dcpuForm.f4SponshorshipGirlsST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipGirlsOBC"
												ng-model="dcpuForm.f4SponshorshipGirlsOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipGirlsEBC"
												ng-model="dcpuForm.f4SponshorshipGirlsEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipGirlsOthers"
												ng-model="dcpuForm.f4SponshorshipGirlsOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipGirlsNotKnown"
												ng-model="dcpuForm.f4SponshorshipGirlsNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4SponshorshipGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4SponshorshipGirlsSC-0)+
														 Number(dcpuForm.f4SponshorshipGirlsST-0)+
														 Number(dcpuForm.f4SponshorshipGirlsOBC-0)+
														 Number(dcpuForm.f4SponshorshipGirlsEBC-0)+
														 Number(dcpuForm.f4SponshorshipGirlsOthers-0)+
														 Number(dcpuForm.f4SponshorshipGirlsNotKnown-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="f4SponshorshipGrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4SponshorshipBoysSC-0)+
														 Number(dcpuForm.f4SponshorshipBoysST-0)+
														 Number(dcpuForm.f4SponshorshipBoysOBC-0)+
														 Number(dcpuForm.f4SponshorshipBoysEBC-0)+
														 Number(dcpuForm.f4SponshorshipBoysOthers-0)+
														 Number(dcpuForm.f4SponshorshipBoysNotKnown-0)+
														 
														 Number(dcpuForm.f4SponshorshipGirlsSC-0)+
														 Number(dcpuForm.f4SponshorshipGirlsST-0)+
														 Number(dcpuForm.f4SponshorshipGirlsOBC-0)+
														 Number(dcpuForm.f4SponshorshipGirlsEBC-0)+
														 Number(dcpuForm.f4SponshorshipGirlsOthers-0)+
														 Number(dcpuForm.f4SponshorshipGirlsNotKnown-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Foster
														Care</label>
												</div>
											</td>
											<td><input type="number" required id="f4FosterCareBoysSC"
												ng-model="dcpuForm.f4FosterCareBoysSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareBoysST"
												ng-model="dcpuForm.f4FosterCareBoysST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareBoysOBC"
												ng-model="dcpuForm.f4FosterCareBoysOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareBoysEBC"
												ng-model="dcpuForm.f4FosterCareBoysEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareBoysOthers"
												ng-model="dcpuForm.f4FosterCareBoysOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareBoysNotKnown"
												ng-model="dcpuForm.f4FosterCareBoysNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4FosterCareBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4FosterCareBoysSC-0)+
														 Number(dcpuForm.f4FosterCareBoysST-0)+
														 Number(dcpuForm.f4FosterCareBoysOBC-0)+
														 Number(dcpuForm.f4FosterCareBoysEBC-0)+
														 Number(dcpuForm.f4FosterCareBoysOthers-0)+
														 Number(dcpuForm.f4FosterCareBoysNotKnown-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareGirlsSC"
												ng-model="dcpuForm.f4FosterCareGirlsSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareGirlsST"
												ng-model="dcpuForm.f4FosterCareGirlsST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareGirlsOBC"
												ng-model="dcpuForm.f4FosterCareGirlsOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareGirlsEBC"
												ng-model="dcpuForm.f4FosterCareGirlsEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareGirlsOthers"
												ng-model="dcpuForm.f4FosterCareGirlsOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareGirlsNotKnown"
												ng-model="dcpuForm.f4FosterCareGirlsNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4FosterCareGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4FosterCareGirlsSC-0)+
														 Number(dcpuForm.f4FosterCareGirlsST-0)+
														 Number(dcpuForm.f4FosterCareGirlsOBC-0)+
														 Number(dcpuForm.f4FosterCareGirlsEBC-0)+
														 Number(dcpuForm.f4FosterCareGirlsOthers-0)+
														 Number(dcpuForm.f4FosterCareGirlsNotKnown-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="f4FosterCareGrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4FosterCareBoysSC-0)+
														 Number(dcpuForm.f4FosterCareBoysST-0)+
														 Number(dcpuForm.f4FosterCareBoysOBC-0)+
														 Number(dcpuForm.f4FosterCareBoysEBC-0)+
														 Number(dcpuForm.f4FosterCareBoysOthers-0)+
														 Number(dcpuForm.f4FosterCareBoysNotKnown-0)+
														 
														 Number(dcpuForm.f4FosterCareGirlsSC-0)+
														 Number(dcpuForm.f4FosterCareGirlsST-0)+
														 Number(dcpuForm.f4FosterCareGirlsOBC-0)+
														 Number(dcpuForm.f4FosterCareGirlsEBC-0)+
														 Number(dcpuForm.f4FosterCareGirlsOthers-0)+
														 Number(dcpuForm.f4FosterCareGirlsNotKnown-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
												<label class="control-label" for="textinput">Others (Pls Specify)</label>
												<input type="text" id="f4OthersName" required
													ng-model="dcpuForm.f4OthersName"
													ng-disabled="dcpuForm.submitted" fifty-characters-validation
													class="form-control inputBackground tableinputWidth">
												</div>
											</td>
											
											<td><input type="number" required id="f4OthersBoysSC"
												ng-model="dcpuForm.f4OthersBoysSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersBoysST"
												ng-model="dcpuForm.f4OthersBoysST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersBoysOBC"
												ng-model="dcpuForm.f4OthersBoysOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersBoysEBC"
												ng-model="dcpuForm.f4OthersBoysEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersBoysOthers"
												ng-model="dcpuForm.f4OthersBoysOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input type="number" required id="f4OthersBoysNotKnown"
												ng-model="dcpuForm.f4OthersBoysNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
												
											<td><input type="text" id="f4OthersBoysTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4OthersBoysSC-0)+
														 Number(dcpuForm.f4OthersBoysST-0)+
														 Number(dcpuForm.f4OthersBoysOBC-0)+
														 Number(dcpuForm.f4OthersBoysEBC-0)+
														 Number(dcpuForm.f4OthersBoysOthers-0)+
														 Number(dcpuForm.f4OthersBoysNotKnown-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersGirlsSC"
												ng-model="dcpuForm.f4OthersGirlsSC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersGirlsST"
												ng-model="dcpuForm.f4OthersGirlsST"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersGirlsOBC"
												ng-model="dcpuForm.f4OthersGirlsOBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersGirlsEBC"
												ng-model="dcpuForm.f4OthersGirlsEBC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersGirlsOthers"
												ng-model="dcpuForm.f4OthersGirlsOthers"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersGirlsNotKnown"
												ng-model="dcpuForm.f4OthersGirlsNotKnown"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4OthersGirlsTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4OthersGirlsSC-0)+
														 Number(dcpuForm.f4OthersGirlsST-0)+
														 Number(dcpuForm.f4OthersGirlsOBC-0)+
														 Number(dcpuForm.f4OthersGirlsEBC-0)+
														 Number(dcpuForm.f4OthersGirlsOthers-0)+
														 Number(dcpuForm.f4OthersGirlsNotKnown-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="f4OthersGrandTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4OthersBoysSC-0)+
														 Number(dcpuForm.f4OthersBoysST-0)+
														 Number(dcpuForm.f4OthersBoysOBC-0)+
														 Number(dcpuForm.f4OthersBoysEBC-0)+
														 Number(dcpuForm.f4OthersBoysOthers-0)+
														 Number(dcpuForm.f4OthersBoysNotKnown-0)+
														 
														 Number(dcpuForm.f4OthersGirlsSC-0)+
														 Number(dcpuForm.f4OthersGirlsST-0)+
														 Number(dcpuForm.f4OthersGirlsOBC-0)+
														 Number(dcpuForm.f4OthersGirlsEBC-0)+
														 Number(dcpuForm.f4OthersGirlsOthers-0)+
														 Number(dcpuForm.f4OthersGirlsNotKnown-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

									</tbody>
								</table>
							</div>

							<div class="labelFont">
								<table
									class="table table-bordered table-margintop minortableWidth">
									<thead>
										<tr>
											<th colspan="4">Minority</th>
										</tr>
										<tr>
											<th>Description</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Parvarish</label>
												</div>
											</td>

											<td><input type="number" required id="f4ParvarishMinorityBoys"
												ng-model="dcpuForm.f4ParvarishMinorityBoys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4ParvarishMinorityGirls"
												ng-model="dcpuForm.f4ParvarishMinorityGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4ParvarishMinorityTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4ParvarishMinorityBoys-0)+Number(dcpuForm.f4ParvarishMinorityGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>
										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Sponshorship</label>
												</div>
											</td>

											<td><input type="number" required id="f4SponshorshipMinorityBoys"
												ng-model="dcpuForm.f4SponshorshipMinorityBoys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4SponshorshipMinorityGirls"
												ng-model="dcpuForm.f4SponshorshipMinorityGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4SponshorshipMinorityTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4SponshorshipMinorityBoys-0)+Number(dcpuForm.f4SponshorshipMinorityGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>
										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Foster
														Care</label>
												</div>
											</td>

											<td><input type="number" required id="f4FosterCareMinorityBoys"
												ng-model="dcpuForm.f4FosterCareMinorityBoys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4FosterCareMinorityGirls"
												ng-model="dcpuForm.f4FosterCareMinorityGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4FosterCareMinorityTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4FosterCareMinorityBoys-0)+Number(dcpuForm.f4FosterCareMinorityGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>
										<tr>
											<td class="tabletdWidthmoreThannfour">
												<div class="textAlign">
													<label class="control-label" for="textinput">Others
														(Pls Specify)</label>
														<input type="text" id="f4OthersMinorityName"
												ng-model="dcpuForm.f4OthersMinorityName" fifty-characters-validation
												ng-disabled="dcpuForm.submitted" required
												class="form-control inputBackground tableinputWidth">
												</div>
											</td>

											<td><input type="number" required id="f4OthersMinorityBoys"
												ng-model="dcpuForm.f4OthersMinorityBoys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="f4OthersMinorityGirls"
												ng-model="dcpuForm.f4OthersMinorityGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="f4OthersMinorityTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.f4OthersMinorityBoys-0)+Number(dcpuForm.f4OthersMinorityGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

									</tbody>
								</table>
							</div>


							<!-- ---------------------------- End of F Section------------------------------- -->



							<!--------------------------------------- Start G section---------------------------------->
							<div class="b4sectionheading" id="caseG"></div>
							<div class="grey-header headMarg">G. Details of cases dealt
								by JJB in the reporting month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Cases dealt by the JJB in the reporting month</th>

											<th>Cases</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total CICL</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.1.a.
														Cases on the first day of the month</label>
												</div>
											</td>
											<td><input type="number"  id="g1aCases"
												ng-model="dcpuForm.g1aCases" disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>

											<td><input type="number"  id="g1aBoys" 
												ng-model="dcpuForm.g1aBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number"  id="g1aGirls"
												ng-model="dcpuForm.g1aGirls"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="g1aTotalCICL" disabled
												value="{{Number(dcpuForm.g1aBoys-0)+Number(dcpuForm.g1aGirls-0)}}"
												class="form-control inputBackground tableinputWidth"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.1.b.
														New cases enrolled in the month</label>
												</div>
											</td>
											<td><input type="number" required id="g1bCases"
												ng-model="dcpuForm.g1bCases" ng-disabled="dcpuForm.submitted"
												ng-init="dcpuForm.g1bCases=null"
												ng-keyup="resetG1b(dcpuForm.g1bCases)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.g1bCases" id="g1bBoys"
												ng-model="dcpuForm.g1bBoys" 
												ng-keyup="resetG1bBoys(dcpuForm.g1bBoys)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.g1bCases<1)||(dcpuForm.g1bCases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.g1bCases" id="g1bGirls"
												ng-model="dcpuForm.g1bGirls"
												ng-keyup="resetG1bGirls(dcpuForm.g1bGirls)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.g1bCases<1)||(dcpuForm.g1bCases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="g1bTotalCICL" disabled
												value="{{Number(dcpuForm.g1bBoys-0)+Number(dcpuForm.g1bGirls-0)}}"
												class="form-control inputBackground tableinputWidth"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														G.1.c. Total cases dealt by the JJB in the reporting
														month</label>
												</div>
											</td>
											<td><input type="text" id="g1cCases" disabled
												value="{{Number(dcpuForm.g1aCases-0)+Number(dcpuForm.g1bCases-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="g1cBoys" disabled
												value="{{Number(dcpuForm.g1aBoys-0)+Number(dcpuForm.g1bBoys-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="g1cGirls" disabled
												value="{{Number(dcpuForm.g1aGirls-0)+Number(dcpuForm.g1bGirls-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="g1cTotalCICL" disabled
												value="{{Number(dcpuForm.g1aBoys-0)+Number(dcpuForm.g1aGirls-0)+
														 Number(dcpuForm.g1bBoys-0)+Number(dcpuForm.g1bGirls-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>
										</tr>



										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput"> G.2.
														Cases disposed by the JJB in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="g2Cases"
												ng-model="dcpuForm.g2Cases" ng-disabled="dcpuForm.submitted"
												ng-keyup="resetG2(dcpuForm.g2Cases)"
												ng-init="dcpuForm.g2Cases=null"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.g2Cases" id="g2Boys"
												ng-model="dcpuForm.g2Boys"
												ng-keyup="resetG2Boys(dcpuForm.g2Boys)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.g2Cases<1)||(dcpuForm.g2Cases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.g2Cases" id="g2Girls"
												ng-model="dcpuForm.g2Girls"
												ng-keyup="resetG2Girls(dcpuForm.g2Girls)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.g2Cases<1)||(dcpuForm.g2Cases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="g2TotalCICL" disabled
												value="{{Number(dcpuForm.g2Boys-0)+Number(dcpuForm.g2Girls-0)}}"
												class="form-control inputBackground tableinputWidth"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput"> G.3.
														Cases with the JJB on the last day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" id="g3Cases" disabled
												ng-model="dcpuForm.g3Cases"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="number" id="g3Boys" disabled
												ng-model="dcpuForm.g3Boys"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="number" id="g3Girls" disabled
												ng-model="dcpuForm.g3Girls"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="g3TotalCICL" disabled
												value="{{Number(dcpuForm.g1aBoys-0)+Number(dcpuForm.g1aGirls-0)+
														 Number(dcpuForm.g1bBoys-0)+Number(dcpuForm.g1bGirls-0)-
														 (Number(dcpuForm.g2Boys-0)+Number(dcpuForm.g2Girls-0))}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg">G.4. Statement of
								Expenditure for JJB in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> G.4.a. Opening balance on the first
									day of the month:(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" id="g4a" ng-model="dcpuForm.g4a"
										disabled
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> G.4.b. Amount received in the month:
									(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="g4b" ng-model="dcpuForm.g4b"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('g4c')"
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> G.4.c. Total amount spent in the
									month: (Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="g4c" ng-model="dcpuForm.g4c" id="g4c"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('g4c')"
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> G.4.d. Closing balance on the last day
									of the month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="text" id="g4d" disabled
									ng-model="dcpuForm.g4d"
										class="form-control inputBackground">
								</div>
							</div>


							<div class="b4sectionheading" id="caseH"></div>
							<div class="grey-header headMarg">H. Details of cases dealt
								by CWC in the reporting month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Cases dealt by the CWC in the reporting month</th>

											<th>Cases</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total CICL</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.1.a.
														Cases on the first day of the month</label>
												</div>
											</td>
											<td><input type="number" id="h1aCases"
												ng-model="dcpuForm.h1aCases" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="h1aBoys"
												ng-model="dcpuForm.h1aBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="h1aGirls"
												ng-model="dcpuForm.h1aGirls"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="h1aTotalCICL" 
												value="{{Number(dcpuForm.h1aBoys-0)+Number(dcpuForm.h1aGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.1.b.
														New cases enrolled in the month</label>
												</div>
											</td>
											<td><input type="number" required id="h1bCases"
												ng-model="dcpuForm.h1bCases" ng-disabled="dcpuForm.submitted"
												ng-keyup="resetH1b(dcpuForm.h1bCases)"
												ng-init="dcpuForm.h1bCases=null"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.h1bCases" id="h1bBoys"
												ng-keyup="resetH1bBoys(dcpuForm.h1bBoys)"
												ng-model="dcpuForm.h1bBoys"
												ng-disabled="dcpuForm.submitted||(dcpuForm.h1bCases<1)||(dcpuForm.h1bCases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.h1bCases" id="h1bGirls"
												ng-model="dcpuForm.h1bGirls"
												ng-keyup="resetH1bGirls(dcpuForm.h1bGirls)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.h1bCases<1)||(dcpuForm.h1bCases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="h1bTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.h1bBoys-0)+Number(dcpuForm.h1bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														H.1.c. Total cases dealt by the CWC in the reporting
														month</label>
												</div>
											</td>
											<td><input type="text" id="h1cCases" readonly tabindex= -1
												value="{{Number(dcpuForm.h1aCases-0)+Number(dcpuForm.h1bCases-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="h1cBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.h1aBoys-0)+Number(dcpuForm.h1bBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="h1cGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.h1aGirls-0)+Number(dcpuForm.h1bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="h1cTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.h1aBoys-0)+Number(dcpuForm.h1bBoys-0)+
														 Number(dcpuForm.h1aGirls-0)+Number(dcpuForm.h1bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>



										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput"> H.2.
														Cases disposed by the CWC in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="h2Cases"
												ng-model="dcpuForm.h2Cases" ng-disabled="dcpuForm.submitted"
												ng-keyup="resetH2(dcpuForm.h2Cases)"
												ng-init="dcpuForm.h2Cases=null"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.h2Cases" id="h2Boys"
												ng-model="dcpuForm.h2Boys"
												ng-keyup="resetH2Boys(dcpuForm.h2Boys)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.h2Cases<1)||(dcpuForm.h2Cases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.h2Cases" id="h2Girls"
												ng-model="dcpuForm.h2Girls"
												ng-keyup="resetH2Girls(dcpuForm.h2Girls)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.h2Cases<1)||(dcpuForm.h2Cases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="h2TotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.h2Boys-0)+Number(dcpuForm.h2Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">H.3.
														Cases with the CWC on the last day of the reporting
														month</label>
												</div>
											</td>
											<td><input type="text" id="h3Cases" readonly tabindex= -1
												ng-model="dcpuForm.h3Cases"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="h3Boys" readonly tabindex= -1
												ng-model="dcpuForm.h3Boys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="h3Girls" readonly tabindex= -1
												ng-model="dcpuForm.h3Girls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="h3TotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.h1aBoys-0)+Number(dcpuForm.h1bBoys-0)+
													   Number(dcpuForm.h1aGirls-0)+Number(dcpuForm.h1bGirls-0)-
													   Number(Number(dcpuForm.h2Boys-0)+Number(dcpuForm.h2Girls-0)-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg">H.4. Statement of
								Expenditure for CWC in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> H.4.a. Opening balance on the first
									day of the month:(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" id="h4a" ng-model="dcpuForm.h4a"
										disabled
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> H.4.b. Amount received in the month:
									(Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="h4b" ng-model="dcpuForm.h4b"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('h4c')"
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> H.4.c. Total amount spent in the
									month: (Rs.)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="h4c" ng-model="dcpuForm.h4c"
										ng-disabled="dcpuForm.submitted" ng-keyup="calculateTotal('h4c')"
										class="form-control inputBackground removeExponentialValueE" limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> H.4.d. Closing balance on the last day
									of the month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="text" id="h4d"  readonly tabindex= -1
										ng-model="dcpuForm.h4d"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground  readonlyStyle">
								</div>
							</div>


							<div class="b4sectionheading" id="caseI"></div>
							<div class="grey-header headMarg">I. Details of cases dealt
								by SJPU in the reporting month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Cases dealt by the SJPU</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.1.
														CNCP cases dealt by SJPU in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="i1Boys"
												ng-model="dcpuForm.i1Boys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="i1Girls"
												ng-model="dcpuForm.i1Girls" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="i1Total" readonly tabindex= -1
												value="{{Number(dcpuForm.i1Boys-0)+Number(dcpuForm.i1Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.2.
														JCL cases dealt by the SJPU in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="i2Boys"
												ng-model="dcpuForm.i2Boys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="i2Girls"
												ng-model="dcpuForm.i2Girls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="i2Total" readonly tabindex= -1
												value="{{Number(dcpuForm.i2Boys-0)+Number(dcpuForm.i2Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">I.3.
														Total cases dealt by SJPU in the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="i3Boys" readonly tabindex= -1
												value="{{Number(dcpuForm.i1Boys-0)+Number(dcpuForm.i2Boys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="i3Girls" readonly tabindex= -1
												value="{{Number(dcpuForm.i1Girls-0)+Number(dcpuForm.i2Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="i3Total" readonly tabindex= -1
												value="{{Number(dcpuForm.i1Boys-0)+Number(dcpuForm.i1Girls-0)+
														 Number(dcpuForm.i2Boys-0)+Number(dcpuForm.i2Girls-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>


							<div class="b4sectionheading" id="caseJ"></div>
							<div class="grey-header headMarg" style="margin-bottom:-16px;">J. Details of cases
								dealt by Children's Court in the reporting month</div>
							<div class="grey-header1 headMarg">J1. Cases dealt by the Children's Court in the reporting month</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>Cases</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total CICL</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">J.1.a.
														Cases on the first day of the month</label>
												</div>
											</td>
											<td><input type="number"  id="j1aCases"
												ng-model="dcpuForm.j1aCases" disabled
												class="form-control inputBackground tableinputWidth "
												only-four-digits></td>

											<td><input type="number"  id="j1aBoys"
												ng-model="dcpuForm.j1aBoys" disabled
												class="form-control inputBackground tableinputWidth "
												only-four-digits></td>

											<td><input type="number"  id="j1aGirls"
												ng-model="dcpuForm.j1aGirls"
												disabled
												class="form-control inputBackground tableinputWidth "
												only-four-digits></td>

											<td><input type="text" id="j1aTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.j1aBoys-0)+Number(dcpuForm.j1aGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">J.1.b.
														New cases enrolled in the month</label>
												</div>
											</td>
											<td><input type="number" required id="j1bCases"
												ng-model="dcpuForm.j1bCases" ng-disabled="dcpuForm.submitted"
												ng-keyup="resetJ1b(dcpuForm.j1bCases)"
												ng-init="dcpuForm.j1bCases=null"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.j1bCases" id="j1bBoys"
												ng-model="dcpuForm.j1bBoys"
												ng-keyup="resetJ1bBoys(dcpuForm.j1bBoys)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.j1bCases<1)||(dcpuForm.j1bCases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.j1bCases" id="j1bGirls"
												ng-model="dcpuForm.j1bGirls"
												ng-keyup="resetJ1bGirls(dcpuForm.j1bGirls)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.j1bCases<1)||(dcpuForm.j1bCases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="j1bTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.j1bBoys-0)+Number(dcpuForm.j1bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														J.1.c. Total cases dealt by the Children's Court in the
														reporting month</label>
												</div>
											</td>
											<td><input type="text" id="j1cCases" readonly tabindex= -1
												value="{{Number(dcpuForm.j1aCases-0)+Number(dcpuForm.j1bCases-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="j1cBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.j1aBoys-0)+Number(dcpuForm.j1bBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="j1cGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.j1aGirls-0)+Number(dcpuForm.j1bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="j1cTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.j1aBoys-0)+Number(dcpuForm.j1bBoys-0)+
														 Number(dcpuForm.j1aGirls-0)+Number(dcpuForm.j1bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>



										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput"> J.2.
														Cases disposed by the Children's Court in the reporting
														month</label>
												</div>
											</td>
											<td><input type="number" required id="j2Cases"
												ng-model="dcpuForm.j2Cases" ng-disabled="dcpuForm.submitted"
												ng-keyup="resetJ2(dcpuForm.j2Cases)"
												ng-init="dcpuForm.j2Cases=null"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.j2Cases" id="j2Boys"
												ng-model="dcpuForm.j2Boys"
												ng-keyup="resetJ2Boys(dcpuForm.j2Boys)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.j2Cases<1)||(dcpuForm.j2Cases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" ng-required="dcpuForm.j2Cases" id="j2Girls"
												ng-model="dcpuForm.j2Girls"
												ng-keyup="resetJ2Girls(dcpuForm.j2Girls)"
												ng-disabled="dcpuForm.submitted||(dcpuForm.j2Cases<1)||(dcpuForm.j2Cases==null)"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="j2TotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.j2Boys-0)+Number(dcpuForm.j2Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput"> J.3.
														Cases with the Children's Court on the last day of the
														month</label>
												</div>
											</td>
											<td><input type="number" id="j3Cases" readonly tabindex= -1
												ng-model="dcpuForm.j3Cases"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="number" id="j3Boys" readonly tabindex= -1
												ng-model="dcpuForm.j3Boys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="number" id="j3Girls" readonly tabindex= -1
												ng-model="dcpuForm.j3Girls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>

											<td><input type="text" id="j3TotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.j1aBoys-0)+Number(dcpuForm.j1bBoys-0)+
														 Number(dcpuForm.j1aGirls-0)+Number(dcpuForm.j1bGirls-0)-
														 Number(Number(dcpuForm.j2Boys-0)+Number(dcpuForm.j2Girls-0)-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>


							<div class="b4sectionheading" id="caseK"></div>
							<div class="grey-header headMarg">K. Support/Assistance
								provided to no. of children in the reporting month by
								"CHILD-LINE"</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Calls received for assistance</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.1.
														No. of calls received for assistance</label>
												</div>
											</td>
											<td><input type="number" required id="k1Boys"
												ng-model="dcpuForm.k1Boys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k1Girls"
												ng-model="dcpuForm.k1Girls" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k1Total" readonly tabindex= -1
												value="{{Number(dcpuForm.k1Boys-0)+Number(dcpuForm.k1Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.2.a.
														Calls received for protection against child marriage</label>
												</div>
											</td>
											<td><input type="number" required id="k2aBoys"
												ng-model="dcpuForm.k2aBoys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k2aGirls"
												ng-model="dcpuForm.k2aGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k2aTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.k2aBoys-0)+Number(dcpuForm.k2aGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.2.b.
														Calls received for protection against child labour</label>
												</div>
											</td>
											<td><input type="number" required id="k2bBoys"
												ng-model="dcpuForm.k2bBoys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k2bGirls"
												ng-model="dcpuForm.k2bGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k2bTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.k2bBoys-0)+Number(dcpuForm.k2bGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.2.c.
														Calls received for protection against child abuse</label>
												</div>
											</td>
											<td><input type="number" required id="k2cBoys"
												ng-model="dcpuForm.k2cBoys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k2cGirls"
												ng-model="dcpuForm.k2cGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k2cTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.k2cBoys-0)+Number(dcpuForm.k2cGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.2.d.
														Calls received for protection against other types of abuse</label>
												</div>
											</td>
											<td><input type="number" required id="k2dBoys"
												ng-model="dcpuForm.k2dBoys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k2dGirls"
												ng-model="dcpuForm.k2dGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k2dTotal" readonly tabindex= -1
												value="{{Number(dcpuForm.k2dBoys-0)+Number(dcpuForm.k2dGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">K.2.
															Total calls received for assistance by CHILD-LINE</label>
												</div>
											</td>
											<td><input type="text" id="k2Boys" readonly tabindex= -1
												value="{{Number(dcpuForm.k2aBoys-0)+Number(dcpuForm.k2bBoys-0)+Number(dcpuForm.k2cBoys-0)+Number(dcpuForm.k2dBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="k2Girls" readonly tabindex= -1
												value="{{Number(dcpuForm.k2aGirls-0)+Number(dcpuForm.k2bGirls-0)+Number(dcpuForm.k2cGirls-0)+Number(dcpuForm.k2dGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="k2Total" readonly tabindex= -1
												value="{{Number(dcpuForm.k2aBoys-0)+Number(dcpuForm.k2aGirls-0)+
														 Number(dcpuForm.k2bBoys-0)+Number(dcpuForm.k2bGirls-0)+
														 Number(dcpuForm.k2cBoys-0)+Number(dcpuForm.k2cGirls-0)+
														 Number(dcpuForm.k2dBoys-0)+Number(dcpuForm.k2dGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.3.
														Number of children assisted</label>
												</div>
											</td>
											<td><input type="number" required id="k3Boys"
												ng-model="dcpuForm.k3Boys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k3Girls"
												ng-model="dcpuForm.k3Girls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k3Total" readonly tabindex= -1
												value="{{Number(dcpuForm.k3Boys-0)+Number(dcpuForm.k3Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">K.4.
														Children referred to CWC by CHILD-LINE</label>
												</div>
											</td>
											<td><input type="number" required id="k4Boys"
												ng-model="dcpuForm.k4Boys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="k4Girls"
												ng-model="dcpuForm.k4Girls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="k4Total" readonly tabindex= -1
												value="{{Number(dcpuForm.k4Boys-0)+Number(dcpuForm.k4Girls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>
									</tbody>
								</table>
							</div>


							<div class="b4sectionheading" id="caseL"></div>
							<div class="grey-header headMarg">L. CCIs Type</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Children in Observation Home in the reporting
												month</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.1.i.a.
														Children on the first day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" id="l1iaBoys"
												ng-model="dcpuForm.l1iaBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="l1iaGirls"
												ng-model="dcpuForm.l1iaGirls" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l1iaTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iaBoys-0)+Number(dcpuForm.l1iaGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.1.i.b.
														Children admitted in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l1ibBoys"
												ng-keyup="resetL1ibBoys()"
												ng-model="dcpuForm.l1ibBoys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l1ibGirls"
												ng-model="dcpuForm.l1ibGirls"
												ng-keyup="resetL1ibGirls()"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l1ibTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l1ibBoys-0)+Number(dcpuForm.l1ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.1.i.c.
															Total Children in the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l1icBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iaBoys-0)+Number(dcpuForm.l1ibBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l1icGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iaGirls-0)+Number(dcpuForm.l1ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l1icTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iaBoys-0)+Number(dcpuForm.l1iaGirls-0)+
														 Number(dcpuForm.l1ibBoys-0)+Number(dcpuForm.l1ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.1.i.d.
														Children moved from the home in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l1idBoys"
												ng-keyup="resetL1idBoys(dcpuForm.l1idBoys)"
												ng-model="dcpuForm.l1idBoys" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l1idGirls"
												ng-keyup="resetL1idGirls(dcpuForm.l1idGirls)"
												ng-model="dcpuForm.l1idGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l1idTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l1idBoys-0)+Number(dcpuForm.l1idGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.1.i.e.
															Total children in the home on the last day of the
															reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l1ieBoys" readonly tabindex= -1
												ng-model="dcpuForm.l1ieBoys"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l1ieGirls" readonly tabindex= -1
												ng-model="dcpuForm.l1ieGirls"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l1ieTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iaBoys-0)+Number(dcpuForm.l1iaGirls-0)+
														 Number(dcpuForm.l1ibBoys-0)+Number(dcpuForm.l1ibGirls-0)-
														 Number(Number(dcpuForm.l1idBoys-0)+Number(dcpuForm.l1idGirls-0)-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>


									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.1.ii. Statement of
								Expenditure for Observation Home in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.1.ii.a. No. of Observation Homes</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="l1iiaNoObsHomes" ng-model="dcpuForm.l1iiaNoObsHomes"
										ng-disabled="dcpuForm.submitted" only-four-digits
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.1.ii.b. Name (s) of the OH</label>
								<div class="col-md-6 marginBottomTop">
								<textarea id="l1iibNoOfOH" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.l1iibNoOfOH"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>


							<div class="grey-header1 headMarg totalFont">L.1.iii. Statement of
								Expenditure for Observation Home</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>Establishment Cost<br>(Allotment by DSW)</th>

											<th>Programme Cost<br>(Allotment under ICPS)</th>

											<th>Total Cost</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.1.iii.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number" id="l1iiiaEcost"
												ng-model="dcpuForm.l1iiiaEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" id="l1iiiaPcost"
												ng-model="dcpuForm.l1iiiaPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l1iiiaTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iiiaEcost-0)+Number(dcpuForm.l1iiiaPcost-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.1.iii.b.
														Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l1iiibEcost"
												ng-keyup="calculateTotal('l1iiicEcost')"
												ng-model="dcpuForm.l1iiibEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l1iiibPcost"
												ng-keyup="calculateTotal('l1iiicPcost')"
												ng-model="dcpuForm.l1iiibPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l1iiibTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iiibEcost-0)+Number(dcpuForm.l1iiibPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.1.iii.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l1iiicEcost"
												ng-keyup="calculateTotal('l1iiicEcost')"
												ng-model="dcpuForm.l1iiicEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l1iiicPcost"
												ng-keyup="calculateTotal('l1iiicPcost')"
												ng-model="dcpuForm.l1iiicPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l1iiicTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iiicEcost-0)+Number(dcpuForm.l1iiicPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.1.iii.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l1iiidEcost" readonly tabindex= -1
												ng-model="dcpuForm.l1iiidEcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l1iiidPcost" readonly tabindex= -1
												ng-model="dcpuForm.l1iiidPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l1iiidTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l1iiiaEcost-0)+Number(dcpuForm.l1iiiaPcost-0)+
														 Number(dcpuForm.l1iiibEcost-0)+Number(dcpuForm.l1iiibPcost-0)-
														 Number(Number(dcpuForm.l1iiicEcost-0)+Number(dcpuForm.l1iiicPcost-0)-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="grey-header1 headMarg totalFont">L.2.i. Children in
								Special Home in the reporting month</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Children in Special Home in the reporting
												month</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.2.i.a.
														Children on the first day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" id="l2iaBoys"
												ng-model="dcpuForm.l2iaBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="l2iaGirls"
												ng-model="dcpuForm.l2iaGirls" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l2iaTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iaBoys-0)+Number(dcpuForm.l2iaGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.2.i.b.
														Children admitted in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l2ibBoys"
												ng-model="dcpuForm.l2ibBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l2idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l2ibGirls"
												ng-model="dcpuForm.l2ibGirls"
												ng-keyup="calculateTotal('l2idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l2ibTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l2ibBoys-0)+Number(dcpuForm.l2ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.2.i.c.
															Total Children in the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l2icBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iaBoys-0)+Number(dcpuForm.l2ibBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l2icGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iaGirls-0)+Number(dcpuForm.l2ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l2icTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iaBoys-0)+Number(dcpuForm.l2iaGirls-0)+
														 Number(dcpuForm.l2ibBoys-0)+Number(dcpuForm.l2ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.2.i.d.
														Children moved from the home in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l2idBoys"
												ng-model="dcpuForm.l2idBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l2idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l2idGirls"
												ng-model="dcpuForm.l2idGirls"
												ng-keyup="calculateTotal('l2idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l2idTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l2idBoys-0)+Number(dcpuForm.l2idGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.2.i.e.
															Total children in the home on the last day of the
															reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l2ieBoys" disabled
												ng-model="dcpuForm.l2ieBoys"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l2ieGirls" disabled
												ng-model="dcpuForm.l2ieGirls"
												class="form-control inputBackground tableinputWidth totalFont"
												only-four-digits></td>

											<td><input type="text" id="l2ieTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iaBoys-0)+Number(dcpuForm.l2iaGirls-0)+
														 Number(dcpuForm.l2ibBoys-0)+Number(dcpuForm.l2ibGirls-0)-
														 Number(Number(dcpuForm.l2idBoys-0)+Number(dcpuForm.l2idGirls-0)-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.2.ii. Statement of
								Expenditure for Special Home in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.2.ii.a. No. of Special Homes</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="l2iiaNoSplHomes" ng-model="dcpuForm.l2iiaNoSplHomes"
										ng-disabled="dcpuForm.submitted" 
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>
							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.2.ii.b. Name(s) of the Special Home</label>
								<div class="col-md-6 marginBottomTop">
								<textarea id="l2iibNoOfOH" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.l2iibNoOfOH"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>

							<div class="grey-header1 headMarg totalFont">L.2.iii. Statement of
								Expenditure for Special Home</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>Establishment Cost<br>(Allotment by DSW)</th>

											<th>Programme Cost<br>(Allotment under ICPS)</th>

											<th>Total Cost</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.2.iii.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number" id="l2iiiaEcost"
												ng-model="dcpuForm.l2iiiaEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" id="l2iiiaPcost"
												ng-model="dcpuForm.l2iiiaPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l2iiiaTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iiiaEcost-0)+Number(dcpuForm.l2iiiaPcost-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.2.iii.b.
														Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l2iiibEcost"
												ng-keyup="calculateTotal('l2iiicEcost')"
												ng-model="dcpuForm.l2iiibEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l2iiibPcost"
												ng-model="dcpuForm.l2iiibPcost"
												ng-keyup="calculateTotal('l2iiicPcost')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l2iiibTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iiibEcost-0)+Number(dcpuForm.l2iiibPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.2.iii.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l2iiicEcost"
												ng-keyup="calculateTotal('l2iiicEcost')"
												ng-model="dcpuForm.l2iiicEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required id="l2iiicPcost"
												ng-keyup="calculateTotal('l2iiicPcost')"
												ng-model="dcpuForm.l2iiicPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" id="l2iiicTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iiicEcost-0)+Number(dcpuForm.l2iiicPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.2.iii.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l2iiidEcost" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iiiaEcost-0)+Number(dcpuForm.l2iiibEcost-0)-Number(dcpuForm.l2iiicEcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l2iiidPcost" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iiiaPcost-0)+Number(dcpuForm.l2iiibPcost-0)-Number(dcpuForm.l2iiicPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l2iiidTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l2iiiaEcost-0)+Number(dcpuForm.l2iiiaPcost-0)+
														 Number(dcpuForm.l2iiibEcost-0)+Number(dcpuForm.l2iiibPcost-0)-
														 Number(Number(dcpuForm.l2iiicEcost-0)+Number(dcpuForm.l2iiicPcost-0)-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>



							<div class="grey-header1 headMarg totalFont">L.3.i. Children in After
								Care Home (ACH) in the reporting month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>Boys</th>

											<th>Girls</th>

											<th>Total</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.3.i.a.
														Children on the first day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" id="l3iaBoys"
												ng-model="dcpuForm.l3iaBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="l3iaGirls"
												ng-model="dcpuForm.l3iaGirls" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l3iaTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iaBoys-0)+Number(dcpuForm.l3iaGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.3.i.b.
														Children admitted in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l3ibBoys"
												ng-model="dcpuForm.l3ibBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l3idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l3ibGirls"
												ng-model="dcpuForm.l3ibGirls"
												ng-keyup="calculateTotal('l3idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l3ibTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l3ibBoys-0)+Number(dcpuForm.l3ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.3.i.c.
															Total Children in the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l3icBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iaBoys-0)+Number(dcpuForm.l3ibBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l3icGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iaGirls-0)+Number(dcpuForm.l3ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l3icTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iaBoys-0)+Number(dcpuForm.l3iaGirls-0)+
														 Number(dcpuForm.l3ibBoys-0)+Number(dcpuForm.l3ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.3.i.d.
														Children moved from the home in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l3idBoys"
												ng-model="dcpuForm.l3idBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l3idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l3idGirls"
												ng-model="dcpuForm.l3idGirls"
												ng-keyup="calculateTotal('l3idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l3idTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l3idBoys-0)+Number(dcpuForm.l3idGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.3.i.e.
															Total children in the home on the last day of the
															reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l3ieBoys" disabled
												ng-model="dcpuForm.l3ieBoys"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l3ieGirls" disabled
												ng-model="dcpuForm.l3ieGirls"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l3ieTotalCICL" disabled
												value="{{Number(dcpuForm.l3iaBoys-0)+Number(dcpuForm.l3iaGirls-0)+
														 Number(dcpuForm.l3ibBoys-0)+Number(dcpuForm.l3ibGirls-0)-
														 Number(Number(dcpuForm.l3idBoys-0)+Number(dcpuForm.l3idGirls-0)-0)
														 }}"
												class="form-control inputBackground tableinputWidth totalFont"
												only-four-digits></td>
										</tr>


									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.3.ii. Statement of
								Expenditure for After Care Home in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.3.ii.a. No. of After Care Homes</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="l3iiaNoAfterCareHomes" ng-model="dcpuForm.l3iiaNoAfterCareHomes"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.3.ii.b. Name (s) of the After Care Home</label>
								<div class="col-md-6 marginBottomTop">
								<textarea id="l3iibNameACH" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.l3iibNameACH"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>

							<div class="grey-header1 headMarg totalFont">L.3.iii. Statement of
								Expenditure for After Care Home</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>Establishment Cost <br>(Allotment by DSW)</th>

											<th>Programme Cost <br>(Allotment under ICPS)</th>

											<th>Total Cost</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.3.iii.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number" id="l3iiiaEcost"
												ng-model="dcpuForm.l3iiiaEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" id="l3iiiaPcost"
												ng-model="dcpuForm.l3iiiaPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l3iiiaTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iiiaEcost-0)+Number(dcpuForm.l3iiiaPcost-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.3.iii.b.
														Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l3iiibEcost"
												ng-keyup="calculateTotal('l3iiicEcost')"
												ng-model="dcpuForm.l3iiibEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l3iiibPcost"
												ng-keyup="calculateTotal('l3iiicPcost')"
												ng-model="dcpuForm.l3iiibPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l3iiibTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iiibEcost-0)+Number(dcpuForm.l3iiibPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.3.iii.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l3iiicEcost"
												ng-keyup="calculateTotal('l3iiicEcost')"
												ng-model="dcpuForm.l3iiicEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required id="l3iiicPcost"
												ng-keyup="calculateTotal('l3iiicPcost')"
												ng-model="dcpuForm.l3iiicPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" id="l3iiicTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iiicEcost-0)+Number(dcpuForm.l3iiicPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.3.iii.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l3iiidEcost" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iiiaEcost-0)+Number(dcpuForm.l3iiibEcost-0)-Number(dcpuForm.l3iiicEcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="l3iiidPcost" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iiiaPcost-0)+Number(dcpuForm.l3iiibPcost-0)-Number(dcpuForm.l3iiicPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"
												only-four-digits></td>

											<td><input type="text" id="l3iiidTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l3iiiaEcost-0)+Number(dcpuForm.l3iiiaPcost-0)+
														 Number(dcpuForm.l3iiibEcost-0)+Number(dcpuForm.l3iiibPcost-0)-
														 Number(Number(dcpuForm.l3iiicEcost-0)+Number(dcpuForm.l3iiicPcost-0)-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>


							<div class="grey-header1 headMarg totalFont">L.4.i. Children in
								Children's Home (CH) Boys, in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<div class="col-md-12">
									<label
										class="col-md-6 control-label labelLeftAlign paddingLeftLable marginBottomTop"
										for="textinput"><b>Children in Children's Home
											(CH) Boys, in the reporting month</b> </label> <label
										class="col-md-6 control-label labelLeftAlign paddingLeftLable marginBottomTop totalHeading"
										for="textinput"><b>Total CNCP</b></label>
								</div>
								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">L.4.i.a. Children on the first day of
										the reporting month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" only-four-digits
											ng-model="dcpuForm.l4iaChildrenOnFirstDay"
											disabled
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> L.4.i.b. Children admitted in the
										reporting month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required only-four-digits
											ng-model="dcpuForm.l4ibChildrenAdmitted"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"><b> L.4.i.c. Total Children in the
										reporting month </b></label>
									<div class="col-md-6 marginBottomTop">
										<input type="text" id="l4iaTotalChildren" disabled
											value="{{Number(dcpuForm.l4iaChildrenOnFirstDay-0)+Number(dcpuForm.l4ibChildrenAdmitted-0)}}"
											class="form-control inputBackground">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> L.4.i.d. Children moved from the home
										in the reporting month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required only-four-digits id="l4iaChildrenMovedFromHome"
											ng-keyup="calculateTotal('l4iaChildrenMovedFromHome')"
											ng-model="dcpuForm.l4iaChildrenMovedFromHome"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>


								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"><b> L.4.i.e. Total children in the home
										on the last day of the reporting month</b></label>
									<div class="col-md-6 marginBottomTop">
										<input type="text" id="l4iaTotalChildrenLastday" disabled
											ng-model="dcpuForm.l4iaTotalChildrenLastday"
											class="form-control inputBackground">
									</div>
								</div>
							</div>

							<div class="grey-header1 headMarg totalFont">L.4.ii. Statement of
								Expenditure for Children's Home (Boys) in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.4.ii.a. No. of Children's Homes
									(Boys)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="l4iiaNoChildrenHomesBoys" ng-model="dcpuForm.l4iiaNoChildrenHomesBoys"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.4.ii.b. Name(s) of the Children's Home(Boys)</label>
								<div class="col-md-6 marginBottomTop">
								<textarea id="l4iibNamesOfBoys" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.l4iibNamesOfBoys"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.4.ii.c. Type of Children's Home</label>
								<div class="col-md-6 marginBottomTop">
								
										<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType" ng-value="item.typeDetailsId"
											class="form-control inputBackground"
											ng-disabled="dcpuForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
								</div>
							</div>


							<div class="grey-header1 headMarg totalFont">L.4.iii.1 Statement of
								Expenditure for Children's Home(Boys)</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>Establishment Cost<br> (Allotment by DSW)</th>

											<th>Programme Cost <br>(Allotment under ICPS)</th>

											<th>Total Cost</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.4.iii.1.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number"  id="l4iii1aEcost"
												ng-model="dcpuForm.l4iii1aEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number"  id="l4iii1aPcost"
												ng-model="dcpuForm.l4iii1aPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l4iii1aTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l4iii1aEcost-0)+Number(dcpuForm.l4iii1aPcost-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.4.iii.1.b.
														Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l4iii1bEcost"
												ng-keyup="calculateTotal('l4iii1cEcost')"
												ng-model="dcpuForm.l4iii1bEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l4iii1bPcost"
												ng-keyup="calculateTotal('l4iii1cPcost')"
												ng-model="dcpuForm.l4iii1bPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l4iii1bTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l4iii1bEcost-0)+Number(dcpuForm.l4iii1bPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.4.iii.1.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l4iii1cEcost"
												ng-keyup="calculateTotal('l4iii1cEcost')"
												ng-model="dcpuForm.l4iii1cEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required id="l4iii1cPcost"
												ng-keyup="calculateTotal('l4iii1cPcost')"
												ng-model="dcpuForm.l4iii1cPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" id="l4iii1cTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l4iii1cEcost-0)+Number(dcpuForm.l4iii1cPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.4.iii.1.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l4iii1dEcost" readonly tabindex= -1
												value="{{Number(dcpuForm.l4iii1aEcost-0)+Number(dcpuForm.l4iii1bEcost-0)-Number(dcpuForm.l4iii1cEcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l4iii1dPcost" readonly tabindex= -1
												value="{{Number(dcpuForm.l4iii1aPcost-0)+Number(dcpuForm.l4iii1bPcost-0)-Number(dcpuForm.l4iii1cPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l4iii1dTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l4iii1aEcost-0)+Number(dcpuForm.l4iii1aPcost-0)+
														 Number(dcpuForm.l4iii1bEcost-0)+Number(dcpuForm.l4iii1bPcost-0)
														 -
														 Number(Number(dcpuForm.l4iii1cEcost-0)+Number(dcpuForm.l4iii1cPcost-0)-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>



							<div class="grey-header1 headMarg totalFont">L.4.iii.2. Expenditure
								(If type of home is NGO)</div>
							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.4.iii.2.a. Total opening balance on
									the first day of the month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" id="l4iii2aOpeningBalanceFirstDay" ng-model="dcpuForm.l4iii2aOpeningBalanceFirstDay"
										disabled
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.4.iii.2.b. Total amount received in
									the month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7"
										ng-keyup="calculateTotal('l4iii2aTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l4iii2aTotalAmountReceived"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.4.iii.2.c. Total amount spent in the
									month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7"
										type="number" required ng-model="dcpuForm.l4iii2aTotalAmountSpent" id="l4iii2aTotalAmountSpent"
										ng-keyup="calculateTotal('l4iii2aTotalAmountSpent')"
										class="form-control inputBackground ">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput"><b>L.4.iii.2.d. Closing balance on the
									last day of the month</b> </label>
								<div class="col-md-6">
									<input disabled
										type="text" 
										id="l4iii2aClosingBalanceLastday"
										value="{{Number(dcpuForm.l4iii2aOpeningBalanceFirstDay-0)+Number(dcpuForm.l4iii2aTotalAmountReceived-0)-Number(dcpuForm.l4iii2aTotalAmountSpent-0)}}"
										class="form-control inputBackground ">
								</div>
							</div>


							<div class="grey-header1 headMarg totalFont">L.5.i. Children in
								Children's Home (CH) - Girls, in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<div class="col-md-12">
									<label
										class="col-md-6 control-label labelLeftAlign paddingLeftLable marginBottomTop"
										for="textinput"><b>Children in Children's Home
											(CH) - Girls, in the reporting month</b> </label> <label
										class="col-md-6 control-label labelLeftAlign paddingLeftLable marginBottomTop totalHeading"
										for="textinput"><b>Total CNCP</b></label>
								</div>
								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">L.5.i.a. Children on the first day of
										the reporting month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" only-four-digits
											ng-model="dcpuForm.l5iaChildrenFirstDay"
											disabled
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> L.5.i.b. Children admitted in the
										reporting month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required only-four-digits
											ng-model="dcpuForm.l5ibChildrenAdmitted"
											ng-keyup="calculateTotal('l5idChildrenMovedFromHome')"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"><b> L.5.i.c. Total Children in the
										reporting month</b> </label>
									<div class="col-md-6 marginBottomTop">
										<input type="text" id="l5icTotalChildren" disabled
											value="{{Number(dcpuForm.l5iaChildrenFirstDay-0)+Number(dcpuForm.l5ibChildrenAdmitted-0)}}"
											class="form-control inputBackground">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> L.5.i.d. Children moved from the home
										in the reporting month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required only-four-digits
											ng-model="dcpuForm.l5idChildrenMovedFromHome" id="l5idChildrenMovedFromHome"
											ng-keyup="calculateTotal('l5idChildrenMovedFromHome')"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>


								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"><b> L.5.i.e. Total children in the home
										on the last day of the reporting month</b></label>
									<div class="col-md-6 marginBottomTop">
										<input type="text" id="l5ieTotalChildrenOnLastday" disabled
											ng-model="dcpuForm.l5ieTotalChildrenOnLastday"
											class="form-control inputBackground">
									</div>
								</div>
							</div>


							<div class="grey-header1 headMarg totalFont">L.5.ii. Statement of
								Expenditure for Children's Home (Girls) in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.5.ii.a. No. of Children's Homes
									(Girls)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="l5iiaNoGirls" ng-model="dcpuForm.l5iiaNoGirls"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.5.ii.b. Name (s) of the Children's Home(Girls)</label>
								<div class="col-md-6 marginBottomTop">
								<textarea id="l5iibNamesOfCH" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.l5iibNamesOfCH"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.5.ii.c. Type of Children's Home</label>
								<div class="col-md-6 marginBottomTop">
									<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType1" ng-value="item.typeDetailsId"
											class="form-control inputBackground"
											ng-disabled="dcpuForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
								</div>
							</div>
							<div class="grey-header1 headMarg totalFont">L.5.iii.1 Statement of
								Expenditure for Children's Home(Girls)</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>Establishment Cost<br> (Allotment by DSW)</th>
											<th>Programme Cost <br>(Allotment under ICPS)</th>
											<th>Total Cost</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.5.iii.1.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number" id="l5iii1aEcost"
												ng-model="dcpuForm.l5iii1aEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" id="l5iii1aPcost" 
												ng-model="dcpuForm.l5iii1aPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l5iii1aTotalCost" disabled 
												value="{{Number(dcpuForm.l5iii1aEcost-0)+Number(dcpuForm.l5iii1aPcost-0)}}"
												class="form-control inputBackground tableinputWidth"
												></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.5.iii.1.b.
														Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l5iii1bEcost"
												ng-keyup="calculateTotal('l5iii1cEcost')"
												ng-model="dcpuForm.l5iii1bEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l5iii1bPcost"
												ng-model="dcpuForm.l5iii1bPcost" ng-keyup="calculateTotal('l5iii1cPcost')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l5iii1bTotalCost" disabled readonly
												value="{{Number(dcpuForm.l5iii1bEcost-0)+Number(dcpuForm.l5iii1bPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.5.iii.1.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l5iii1cEcost" ng-keyup="calculateTotal('l5iii1cEcost')"
												ng-model="dcpuForm.l5iii1cEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required id="l5iii1cPcost"
												ng-model="dcpuForm.l5iii1cPcost" ng-keyup="calculateTotal('l5iii1cPcost')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" id="l5iii1cTotalCost" disabled
												value="{{Number(dcpuForm.l5iii1cEcost-0)+Number(dcpuForm.l5iii1cPcost-0)}}"
												class="form-control inputBackground tableinputWidth"
												></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.5.iii.1.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l5iii1dEcost"
												ng-model="dcpuForm.l5iii1dEcost" disabled
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l5iii1dPcost"
												ng-model="dcpuForm.l5iii1dPcost" disabled
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l5iii1dTotalCost" disabled
												value="{{Number(dcpuForm.l5iii1aEcost-0)+Number(dcpuForm.l5iii1aPcost-0)+
														 Number(dcpuForm.l5iii1bEcost-0)+Number(dcpuForm.l5iii1bPcost-0) -
														 Number(Number(dcpuForm.l5iii1cEcost-0)+Number(dcpuForm.l5iii1cPcost-0)-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.5.iii.2. Expenditure (If type of home is NGO)</div>
							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.5.iii.2.a. Total opening balance on
									the first day of the month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" id="l5iii2aOpeningBalanceFirstDay" 
										ng-model="dcpuForm.l5iii2aOpeningBalanceFirstDay"
										disabled
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.5.iii.2.b. Total amount received in
									the month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7"
										ng-keyup="calculateTotal('l5iii2cTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l5iii2bTotalAmountReceived"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.5.iii.2.c. Total amount spent in the
									month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7" ng-keyup="calculateTotal('l5iii2cTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l5iii2cTotalAmountSpent" id="l5iii2cTotalAmountSpent"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput"><b>L.5.iii.2.d. Closing balance on the
									last day of the month </b></label>
								<div class="col-md-6">
									<input disabled
										type="text" id="l5iii2dClosingBalanceLastday"
										ng-model="dcpuForm.l5iii2dClosingBalanceLastday"
										class="form-control inputBackground">
								</div>
							</div>
							<div class="grey-header1 headMarg totalFont">L.6.i. Children in Open
								Shelter (OS) in the reporting month</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.6.i.a.
														Children on the first day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" id="l6iaBoys"
												ng-model="dcpuForm.l6iaBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="l6iaGirls"
												ng-model="dcpuForm.l6iaGirls" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l6iaTotalCICL"
												value="{{Number(dcpuForm.l6iaBoys-0)+Number(dcpuForm.l6iaGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.6.i.b.
														Children admitted in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l6ibBoys"
												ng-model="dcpuForm.l6ibBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l6idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l6ibGirls"
												ng-model="dcpuForm.l6ibGirls"
												ng-keyup="calculateTotal('l6idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l6ibTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l6ibBoys-0)+Number(dcpuForm.l6ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.6.i.c.
															Total Children in the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l6icBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iaBoys-0)+Number(dcpuForm.l6ibBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l6icGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iaGirls-0)+Number(dcpuForm.l6ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l6icTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iaBoys-0)+Number(dcpuForm.l6iaGirls-0)+
														 Number(dcpuForm.l6ibBoys-0)+Number(dcpuForm.l6ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.6.i.d.
														Children moved from the home in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l6idBoys"
												ng-model="dcpuForm.l6idBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l6idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l6idGirls"
												ng-model="dcpuForm.l6idGirls"
												ng-keyup="calculateTotal('l6idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l6idTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l6idBoys-0)+Number(dcpuForm.l6idGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.6.i.e.
															Total children in the home on the last day of the
															reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l6ieBoys" disabled
												ng-model="dcpuForm.l6ieBoys"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="l6ieGirls" disabled
												ng-model="dcpuForm.l6ieGirls"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="l6ieTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iaBoys-0)+Number(dcpuForm.l6iaGirls-0)+
														 Number(dcpuForm.l6ibBoys-0)+Number(dcpuForm.l6ibGirls-0)-
														 Number(Number(dcpuForm.l6idBoys-0)+Number(dcpuForm.l6idGirls-0)-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>


									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.6.ii. Statement of
								Expenditure for Open Shelter in the reporting month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.6.ii.a. No. of Open Shelters</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="i6iiaNoOS" ng-model="dcpuForm.i6iiaNoOS"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>
							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.6.ii.b. Name (s) of the Open Shelter</label>
								<div class="col-md-6 marginBottomTop">
								<textarea id="i6iibNamesOfOS" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.i6iibNamesOfOS"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>
							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.6.ii.c. Type of Open Shelter</label>
								<div class="col-md-6 marginBottomTop">
									<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType2" ng-value="item.typeDetailsId"
											class="form-control inputBackground"
											ng-disabled="dcpuForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
								</div>
							</div>
							<div class="grey-header1 headMarg totalFont">L.6.iii.1. Statement of Expenditure for Open Shelter</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>Establishment Cost<br>(Allotment by DSW)</th>
											<th>Programme Cost<br>(Allotment under ICPS)</th>
											<th>Total Cost</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.6.iii.1.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number" id="l6iii1aEcost"
												ng-model="dcpuForm.l6iii1aEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" id="l6iii1aPcost"
												ng-model="dcpuForm.l6iii1aPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l6iii1aTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iii1aEcost-0)+Number(dcpuForm.l6iii1aPcost-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.6.iii.1.b. Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l6iii1bEcost"
												ng-model="dcpuForm.l6iii1bEcost" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l6iii1cEcost')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l6iii1bPcost"
												ng-model="dcpuForm.l6iii1bPcost"
												ng-keyup="calculateTotal('l6iii1cPcost')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l6iii1bTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iii1bEcost-0)+Number(dcpuForm.l6iii1bPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												limit-to="7"></td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.6.iii.1.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l6iii1cEcost"
												ng-model="dcpuForm.l6iii1cEcost" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l6iii1cEcost')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required id="l6iii1cPcost"
												ng-model="dcpuForm.l6iii1cPcost"
												ng-keyup="calculateTotal('l6iii1cPcost')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" id="l6iii1cTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l6iii1cEcost-0)+Number(dcpuForm.l6iii1cPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.6.iii.1.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l6iii1dEcost" disabled
												ng-model="dcpuForm.l6iii1dEcost"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="l6iii1dPcost" disabled
												ng-model="dcpuForm.l6iii1dPcost"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="l6iii1dTotalCost" disabled
												value="{{Number(dcpuForm.l6iii1aEcost-0)+Number(dcpuForm.l6iii1aPcost-0)+
												  		 Number(dcpuForm.l6iii1bEcost-0)+Number(dcpuForm.l6iii1bPcost-0) -
												  		 Number(Number(dcpuForm.l6iii1cEcost-0)+Number(dcpuForm.l6iii1cPcost-0)-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.6.iii.2. Expenditure (If type of home is NGO)</div>
							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.6.iii.2.a. Total opening balance on
									the first day of the month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" id="l6iii2aOpeningBalanceFirstDay" 
										ng-model="dcpuForm.l6iii2aOpeningBalanceFirstDay"
										disabled
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.6.iii.2.b. Total amount received in
									the month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7"
										ng-keyup="calculateTotal('l6iii2cTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l6iii2bTotalAmountReceived"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.6.iii.2.c. Total amount spent in the
									month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7" 
										ng-keyup="calculateTotal('l6iii2cTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l6iii2cTotalAmountSpent" id="l6iii2cTotalAmountSpent"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput"><b>L.6.iii.2.d. Closing balance on the
									last day of the month</b> </label>
								<div class="col-md-6">
									<input type="text" id="l6iii2dClosingBalanceLastday" disabled
										ng-model="dcpuForm.l6iii2dClosingBalanceLastday"
										class="form-control inputBackground">
								</div>
							</div>
							<div class="grey-header1 headMarg totalFont">L.7.i. Children in
								Specialized Adoption Agency (SAA) in the reporting month</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>Boys</th>
											<th>Girls</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.7.i.a.
														Children on the first day of the reporting month</label>
												</div>
											</td>
											<td><input type="number" id="l7iaBoys"
												ng-model="dcpuForm.l7iaBoys" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="l7iaGirls"
												ng-model="dcpuForm.l7iaGirls" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="l7iaTotalCICL"
												value="{{Number(dcpuForm.l7iaBoys-0)+Number(dcpuForm.l7iaGirls-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.7.i.b.
														Children admitted in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l7ibBoys"
												ng-model="dcpuForm.l7ibBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l7idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l7ibGirls"
												ng-model="dcpuForm.l7ibGirls"
												ng-keyup="calculateTotal('l7idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l7ibTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l7ibBoys-0)+Number(dcpuForm.l7ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.7.i.c.
															Total Children in the reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l7icBoys" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iaBoys-0)+Number(dcpuForm.l7ibBoys-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l7icGirls" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iaGirls-0)+Number(dcpuForm.l7ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>

											<td><input type="text" id="l7icTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iaBoys-0)+Number(dcpuForm.l7iaGirls-0)+
														 Number(dcpuForm.l7ibBoys-0)+Number(dcpuForm.l7ibGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.7.i.d.
														Children moved from the home in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="l7idBoys"
												ng-model="dcpuForm.l7idBoys" ng-disabled="dcpuForm.submitted"
												ng-keyup="calculateTotal('l7idBoys')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" required id="l7idGirls"
												ng-model="dcpuForm.l7idGirls"
												ng-keyup="calculateTotal('l7idGirls')"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="text" id="l7idTotalCICL" readonly tabindex= -1
												value="{{Number(dcpuForm.l7idBoys-0)+Number(dcpuForm.l7idGirls-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												only-four-digits></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.7.i.e.
															Total children in the home on the last day of the
															reporting month</label>
												</div>
											</td>
											<td><input type="text" id="l7ieBoys" disabled
												ng-model="dcpuForm.l7ieBoys"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="l7ieGirls" disabled
												ng-model="dcpuForm.l7ieGirls"
												class="form-control inputBackground tableinputWidth totalFont"></td>

											<td><input type="text" id="l7ieTotalCICL" disabled
												value="{{Number(dcpuForm.l7iaBoys-0)+Number(dcpuForm.l7iaGirls-0)+
														 Number(dcpuForm.l7ibBoys-0)+Number(dcpuForm.l7ibGirls-0) -
														 Number(Number(dcpuForm.l7idBoys-0)+Number(dcpuForm.l7idGirls-0)-0)}}"
												class="form-control inputBackground tableinputWidth totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.7.ii. Statement of
								Expenditure for Specialized Adoption Agency in the reporting
								month</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.7.ii.a. No. of SAAs</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="l7iiaNoSAA" ng-model="dcpuForm.l7iiaNoSAA"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.7.ii.b. Name(s) of the SAA</label>
								<div class="col-md-6 marginBottomTop">
								
								<textarea id="l7iibNameSAA" type="text" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.l7iibNameSAA"
										class="form-control inputBackgroundgeneral" address-validation
										style="text-align: left !important; resize: none;"></textarea>
								</div>
							</div>


							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.7.ii.c. Type of SAA</label>
								<div class="col-md-6 marginBottomTop">
									<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType3" ng-value="item.typeDetailsId"
											class="form-control inputBackground"
											ng-disabled="dcpuForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
								</div>
							</div>
							<div class="grey-header1 headMarg totalFont">L.7.iii.1. Statement of
								Expenditure for SAA</div>
							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>Establishment Cost<br>(Allotment by DSW)</th>
											<th>Programme Cost<br>(Allotment under ICPS)</th>
											<th>Total Cost</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.7.iii.1.a.
														Opening balance on the 1st day of the month </label>
												</div>
											</td>
											<td><input type="number" id="l7iii1aEcost"
												ng-model="dcpuForm.l7iii1aEcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>
											<td><input type="number" id="l7iii1aPcost"
												ng-model="dcpuForm.l7iii1aPcost" disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>
											<td><input type="text" id="l7iii1aTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iii1aEcost-0)+Number(dcpuForm.l7iii1aPcost-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.7.iii.1.b.
														Amount received in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l7iii1bEcost"
												ng-keyup="calculateTotal('l7iii1cEcost')"
												ng-model="dcpuForm.l7iii1bEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="number" required id="l7iii1bPcost"
												ng-keyup="calculateTotal('l7iii1cPcost')"
												ng-model="dcpuForm.l7iii1bPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												limit-to="7"></td>

											<td><input type="text" id="l7iii1bTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iii1bEcost-0)+Number(dcpuForm.l7iii1bPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">L.7.iii.1.c.
														Total amount spent in the month</label>
												</div>
											</td>
											<td><input type="number" required id="l7iii1cEcost"
												ng-keyup="calculateTotal('l7iii1cEcost')"
												ng-model="dcpuForm.l7iii1cEcost" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required id="l7iii1cPcost"
												ng-keyup="calculateTotal('l7iii1cPcost')"
												ng-model="dcpuForm.l7iii1cPcost"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" id="l7iii1cTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iii1cEcost-0)+Number(dcpuForm.l7iii1cPcost-0)}}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">L.7.iii.1.d.
															Closing balance on the last day of the month</label>
												</div>
											</td>
											<td><input type="text" id="l7iii1dEcost" disabled
												ng-model="dcpuForm.l7iii1dEcost"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l7iii1dPcost" disabled
												ng-model="dcpuForm.l7iii1dPcost"
												class="form-control inputBackground tableinputWidth totalFont"
												></td>

											<td><input type="text" id="l7iii1dTotalCost" readonly tabindex= -1
												value="{{Number(dcpuForm.l7iii1aEcost-0)+Number(dcpuForm.l7iii1aPcost-0)+
														 Number(dcpuForm.l7iii1bEcost-0)+Number(dcpuForm.l7iii1bPcost-0)-
														 Number(Number(dcpuForm.l7iii1cEcost-0)+Number(dcpuForm.l7iii1cPcost-0)-0)
														 }}"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle"></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="grey-header1 headMarg totalFont">L.7.iii.2. Expenditure
								(If type of home is NGO)</div>
							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.7.iii.2.a. Total opening balance on
									the first day of the month</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" id="l7ii2aOpeningBalanceFirstDay" 
										ng-model="dcpuForm.l7ii2aOpeningBalanceFirstDay"
										disabled
										class="form-control inputBackground removeExponentialValueE"
										limit-to="7">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.7.iii.2.b. Total amount received in
									the month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7"
										ng-keyup="calculateTotal('l7ii2cTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l7ii2bTotalAmountReceived"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.7.iii.2.c. Total amount spent in the
									month </label>
								<div class="col-md-6">
									<input ng-disabled="dcpuForm.submitted" limit-to="7"
										ng-keyup="calculateTotal('l7ii2cTotalAmountSpent')"
										type="number" required ng-model="dcpuForm.l7ii2cTotalAmountSpent" id="l7ii2cTotalAmountSpent"
										class="form-control inputBackground ">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
									for="textinput">L.7.iii.2.d. Closing balance on the
									last day of the month </label>
								<div class="col-md-6">
									<input type="text" id="l7ii2dClosingBalanceLastday" disabled
										ng-model="dcpuForm.l7ii2dClosingBalanceLastday"
										class="form-control inputBackground">
								</div>
							</div>

							<div class="b4sectionheading" id="caseM"></div>
							<div class="grey-header headMarg">M. Details of Other
								program conducted by DCPU in the reporting month</div>


							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Other programs conducted in the reporting month</th>

											<th>No. of meetings</th>

											<th>Date of meetings</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.1.
														District Child Protection Committee (DCPC) meeting</label>
												</div>
											</td>

											<td><input type="number" required id="m1aNoMeetingDCPC" ng-change="resetDate(dcpuForm.m1aNoMeetingDCPC,'m1bDatesMeetingDCPC')"
												ng-model="dcpuForm.m1aNoMeetingDCPC" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m1aNoMeetingDCPC > 0"
													style="display: inline-flex;">
													<input type="text" id="m1bDatesMeetingDCPC" 
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m1bDatesMeetingDCPC"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m1bDatesMeetingDCPC1" 
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>

											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.2.
														District Sponsorship & Foster Care Approval Committee
														meeting</label>
												</div>
											</td>

											<td><input type="number" required id="m2aNoMeetingDSFCAC" ng-change="resetDate(dcpuForm.m2aNoMeetingDSFCAC,'m2bDatesMeetingDSFCAC')"
												ng-model="dcpuForm.m2aNoMeetingDSFCAC"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td>
												<div ng-show="dcpuForm.m2aNoMeetingDSFCAC > 0" 
													style="display: inline-flex;">
													<input type="text" id="m2bDatesMeetingDSFCAC"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m2bDatesMeetingDSFCAC"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m2bDatesMeetingDSFCAC1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>

											</td>
										</tr>


										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.3.
														Participation in Child-Line Advisory Board meeting</label>
												</div>
											</td>
											<td><input type="number" required id="m3aNoMeetingChildLineAdvisory" ng-change="resetDate(dcpuForm.m3aNoMeetingChildLineAdvisory, 'm3bDatesMeetingChildLineAdvisory')"
												ng-model="dcpuForm.m3aNoMeetingChildLineAdvisory"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m3aNoMeetingChildLineAdvisory > 0"   
													style="display: inline-flex;">
													<input type="text" id="m3bDatesMeetingChildLineAdvisory"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m3bDatesMeetingChildLineAdvisory"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m3bDatesMeetingChildLineAdvisory1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>

											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.4.
														Participation in the meeting organized by District Judge
														on the issues of Child Protection</label>
												</div>
											</td>
											<td><input type="number" required id="m4aNoMeetingDistrictJudges"  ng-change="resetDate(dcpuForm.m4aNoMeetingDistrictJudges, 'm4bDatesMeetingDistrictJudges')"
												ng-model="dcpuForm.m4aNoMeetingDistrictJudges"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m4aNoMeetingDistrictJudges > 0" 
													style="display: inline-flex;">
													<input type="text" id="m4bDatesMeetingDistrictJudges"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m4bDatesMeetingDistrictJudges"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m4bDatesMeetingDistrictJudges1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>

											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.5.
														Participation in Coordination meeting with SJPU, 
														JJB,CWC & other CP stake holders</label>
												</div>
											</td>
											<td><input type="number" required id="m5aNoMeetingCoordination" ng-change="resetDate( dcpuForm.m5aNoMeetingCoordination, 'm5bDatesMeetingCoordination')"
												ng-model="dcpuForm.m5aNoMeetingCoordination"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m5aNoMeetingCoordination > 0" 
													style="display: inline-flex;">
													<input type="text" id="m5bDatesMeetingCoordination"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m5bDatesMeetingCoordination"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x"  id="m5bDatesMeetingCoordination1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>

											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.6.
														Participation in AHTU meeting</label>
												</div>
											</td>
											<td><input type="number" required id="m6aNoMeetingAHTU" ng-change="resetDate( dcpuForm.m6aNoMeetingAHTU, 'm6bDatesMeetingAHTU')"
												ng-model="dcpuForm.m6aNoMeetingAHTU"
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m6aNoMeetingAHTU > 0"   
													style="display: inline-flex;">
													<input type="text" id="m6bDatesMeetingAHTU"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m6bDatesMeetingAHTU"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m6bDatesMeetingAHTU1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>

											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.7.
														Meetings of CDPO / Anganwadi Sevikas / Sahayikas on the
														issue of Child Protection / Parvarish attended at block
														level</label>
												</div>
											</td>
											<td><input type="number" required id="m7aNoMeetingCDPO" ng-change="resetDate( dcpuForm.m7aNoMeetingCDPO, 'm7bDatesMeetingCDPO')"
												ng-model="dcpuForm.m7aNoMeetingCDPO" 
												ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m7aNoMeetingCDPO > 0"
													style="display: inline-flex;">
													<input type="text" id="m7bDatesMeetingCDPO"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m7bDatesMeetingCDPO"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m7bDatesMeetingCDPO1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.8.
														Quarterly review of pendency in
									CWC done by DM u/s (8) of JJ Act 2015 in the reporting month
									</label>
												</div>
											</td>
											<td><select class="form-control selectWIdth" ng-change="resetDateonSelect( dcpuForm.m8aNoMeetingQuarterlyCWC , 'm8bDatesMeetingQuarterlyCWC')"
												ng-disabled="dcpuForm.submitted" ng-model="dcpuForm.m8aNoMeetingQuarterlyCWC" required>
													<option value="" disabled selected>Select</option>
													<option value="true">Yes</option>
													<option value="false">No</option>
											</select></td>
											<td>
												<div ng-show="dcpuForm.m8aNoMeetingQuarterlyCWC == 'true'"
													style="display: inline-flex;">
													<input type="text" id="m8bDatesMeetingQuarterlyCWC"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m8bDatesMeetingQuarterlyCWC"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m8bDatesMeetingQuarterlyCWC1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.9.
														Review report of pendency of cases
									sent to DM by CJM/CMM u/s 16(1) and 16(3) of JJ Act 2015 in the
									reporting month</label>
												</div>
											</td>
											<td><select class="form-control selectWIdth" ng-change="resetDateonSelect( dcpuForm.m9aNoMeetingReportDM , 'm9bDatesMeetingReportDM')"
												ng-disabled="dcpuForm.submitted" ng-model="dcpuForm.m9aNoMeetingReportDM" required>
													<option value="" disabled selected>Select</option>
													<option value="true">Yes</option>
													<option value="false">No</option>
											</select></td>

											<td>
												<div ng-show="dcpuForm.m9aNoMeetingReportDM == 'true'"
													style="display: inline-flex;">
													<input type="text" id="m9bDatesMeetingReportDM"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m9bDatesMeetingReportDM"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m9bDatesMeetingReportDM1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>


							<!--                                  <div class="grey-header1 headMarg">M.10. School visits & awareness programs conducted with students/teachers in the reporting month</div> -->


							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>No. of visits</th>

											<th>Date of Visit</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.10.
														School visits & awareness programs conducted with
														students/teachers in the reporting month</label>
												</div>
											</td>
											<td><input type="number" required id="m10aNoOfVisits" ng-change="resetDate( dcpuForm.m10aNoOfVisits, 'm10bDatesOfVisits')"
												ng-model="dcpuForm.m10aNoOfVisits" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m10aNoOfVisits > 0"
													style="display: inline-flex;">
													<input type="text" id="m10bDatesOfVisits"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m10bDatesOfVisits"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m10bDatesOfVisits1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.11.
														Visit to CCIs by District Inspection Committee (DIC)</label>
												</div>
											</td>
											<td><input type="number" required id="m11aNoOfVisits" ng-change="resetDate( dcpuForm.m11aNoOfVisits, 'm11bDatesOfVisits')"
												ng-model="dcpuForm.m11aNoOfVisits" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m11aNoOfVisits > 0"
													style="display: inline-flex;">
													<input type="text" id="m11bDatesOfVisits"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m11bDatesOfVisits"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m11bDatesOfVisits1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>


							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>No. of Programs</th>

											<th>Date of program</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.12.
														Program (Training Workshop / Mela / Special Day etc.)
														organized for stakeholders by DCPU</label>
												</div>
											</td>
											<td><input type="number" required id="m12aNoOfPrograms" ng-change="resetDate( dcpuForm.m12aNoOfPrograms, 'm12bDatesOfPrograms')"
												ng-model="dcpuForm.m12aNoOfPrograms" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td>
												<div ng-show="dcpuForm.m12aNoOfPrograms > 0"
													style="display: inline-flex;">
													<input type="text" id="m12bDatesOfPrograms"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m12bDatesOfPrograms"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m12bDatesOfPrograms1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>



							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>

											<th>No. of activities</th>

											<th>Date of activities</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">M.13.
														Special activities with children (Workshop / Mela / Sports
														/ competition etc.) organized by DCPU in the reporting
														month</label>
												</div>
											</td>
											<td><input type="number" required id="m13aNoOfActivities" ng-change="resetDate( dcpuForm.m13aNoOfActivities, 'm13bDatesOfActivities')"
												ng-model="dcpuForm.m13aNoOfActivities" ng-disabled="dcpuForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td>
												<div ng-show="dcpuForm.m13aNoOfActivities > 0"
													style="display: inline-flex;">
													<input type="text" id="m13bDatesOfActivities"
														ng-disabled="dcpuForm.submitted" readonly
														ng-model="dcpuForm.m13bDatesOfActivities"
														class="form-control  calenderWidth"><i
														class="fa fa-calendar fa-5x" id="m13bDatesOfActivities1"
														style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="form-group labelFont sectionMarginTop">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> M.14. Number of data entry in the
									Track Child Portal (Missing / Recovered / CNCP / CICL)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m14NoDataEntryTCP" ng-model="dcpuForm.m14NoDataEntryTCP"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>



							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> M.15. Number of SIRs submitted by the
									staff of DCPU in the cases of Children in Conflict With Law
									(CICL)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m15NoSIRsSubmittedCICL" ng-model="dcpuForm.m15NoSIRsSubmittedCICL"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.16. Number of SIRs submitted by the
									staff of DCPU in the cases of Children in need of Care and
									Protection (CNCP)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m16NoSIRsSubmittedCNCP" ng-model="dcpuForm.m16NoSIRsSubmittedCNCP"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.17. Number of case history formats
									filled up by staff of DCPU</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m17NoFilledStaffDCPU" ng-model="dcpuForm.m17NoFilledStaffDCPU"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.18. Number of Individual Care Plan
									followed up by staff of DCPU in the cases of Children in
									Conflict With Law (CICL)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m18NoCarePlanCICL" ng-model="dcpuForm.m18NoCarePlanCICL"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.19. Number of Individual Care Plan
									followed up by staff of DCPU in the cases of Children in need
									of Care and Protection (CNCP)</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m19NoCarePlanCNCP" ng-model="dcpuForm.m19NoCarePlanCNCP"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.20. Number of Form Case History
									Format filled up in Track Child Portal</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m20NoHistroyTCP" ng-model="dcpuForm.m20NoHistroyTCP"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.21. Number of Form Individual Care
									Plan filled up in Track Child Portal</label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required id="m21NoIndividualTCP" ng-model="dcpuForm.m21NoIndividualTCP"
										ng-disabled="dcpuForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										only-four-digits>
								</div>
							</div>

							<div class="form-group labelFont">
								<label
									class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput">M.22. Is there any other program
									conducted by DCPU?</label>
								<div class="col-md-6 marginBottomTop">
									<select class="form-control inputBackground" required
										ng-disabled="dcpuForm.submitted"
										ng-model="dcpuForm.m22ProgramConductedDCPU">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont sectionMarginTop">
								<div class="col-md-12">
									<label
										class="col-md-6 control-label labelLeftAlign paddingLeftLable marginBottomTop"
										for="textinput"><b>M.23. Monthly Statement of
											Expenditure for DCPU in the reporting month</b> </label> <label
										class="col-md-6 control-label labelLeftAlign paddingLeftLable marginBottomTop totalHeading"
										for="textinput"><b>In Rupees</b></label>
								</div>
								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">M.23.a. Opening balance on the first
										day of the month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required limit-to="7"
											ng-keyup="calculateTotal('m23cTotalAmountSpent')"
											ng-model="dcpuForm.m23aOpeningBalanceFirstDay"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>
								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">M.23.b. Amount received in the month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required limit-to="7"
											ng-keyup="calculateTotal('m23cTotalAmountSpent')"
											ng-model="dcpuForm.m23bTotalAmountReceived"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> M.23.c. Total amount spent in the
										month </label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required limit-to="7"
											ng-keyup="calculateTotal('m23cTotalAmountSpent')"
											ng-model="dcpuForm.m23cTotalAmountSpent" id="m23cTotalAmountSpent"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div
									class="form-group labelFont sectionMarginTop  traningattnedlist">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> M.23.d. Closing balance on the last
										day of the month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="text" id="m23dClosingBalanceLastday" disabled
											ng-model="dcpuForm.m23dClosingBalanceLastday"
											class="form-control inputBackground">
									</div>
								</div>

							</div>

								<div class="b4sectionheading " id="caseN"></div>
								<div class="grey-header headMarg ">N. Training on JJ System
									(In the Reporting Month)</div>

								<div class="form-group labelFont sectionMarginTop borderBottom">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> N.1. Was the Training held on JJ
										system?</label>
									<div class="col-md-6 marginBottomTop">
										<select class="form-control inputBackground" required
											ng-change="resetToZeroaccd1(dcpuForm.n1Training)"
											ng-disabled="dcpuForm.submitted"
											ng-model="dcpuForm.n1Training">
											<option value="" disabled selected>Select</option>
											<option value="true">Yes</option>
											<option value="false">No</option>
										</select>
									</div>
								</div>


								<div ng-show="dcpuForm.n1Training == 'true'">
									<div class="form-group labelFont ">
										<label class="col-md-6 control-label labelLeftAlign"
											for="textinput"> N.1.a. Number of Trainings Held</label>
										<div class="col-md-6">
											<input type="number" ng-model="dcpuForm.n1aNoOfTrainings"
												ng-blur="validateNoOfTraining(dcpuForm.n1aNoOfTrainings)"
												ng-disabled="dcpuForm.submitted" id="n1aNoOfTrainings"
												class="form-control inputBackground removeExponentialValueE"
												limit-to="2">
										</div>
									</div>


									<div class="panel-group" id="accordion" role="tablist"
										aria-multiselectable="true">
										<div class="panel panel-default"
											ng-repeat="dcpuTrainingDetails in dcpuTrainingDetailsRepetitionArray track by $index">
											<div class="panel-heading" role="tab"
												onclick="changeIcon(this)" id="{{'heading'+$index}}">
												<h4 class="panel-title">
													<a role="button" data-toggle="collapse"
														ng-click="initializeDatePicker($index)"
														data-parent="#accordion" href="{{'#collapse'+$index}}"
														aria-expanded="true" aria-controls="collapseOne"> <i
														class="more-less glyphicon glyphicon-plus"></i> Traning
														Details {{$index+1}}
													</a>
												</h4>
											</div>


											<div id="{{'collapse'+$index}}"
												class="panel-collapse collapse" role="tabpanel"
												aria-labelledby="headingOne">
												<div class="panel-body">
													<div class="form-group labelFont marginBottomInAccordion">
														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.b. Duration of Trainings
															(no. of days)</label>
														<div class="col-md-6">
															<input type="number"  ng-disabled="dcpuForm.submitted" limit-to="2"
                                                                max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
																ng-model="dcpuTrainingDetailsRepetitionArray[$index].durationOfTraining"
																class="form-control inputBackground inputBackgroundgeneral removeExponentialValueE">
														</div>
													</div>

													<div class="form-group labelFont">

														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.c. Training From </label>
														<div class="col-md-6" style="display: inline-flex;">
															<input type="text" id="trainingFromDatepicker{{$index}}"
																ng-disabled="dcpuForm.submitted" readonly
																ng-click="openFromDatePicker($index)"
																ng-model="dcpuTrainingDetailsRepetitionArray[$index].trainingFrom"
																class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
																class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
																style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
														</div>

													</div>
													<div class="form-group labelFont">

														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.d. Training To </label>
														<div class="col-md-6" style="display: inline-flex;">
															<input type="text" id="trainingToDatepicker{{$index}}"
																ng-disabled="dcpuForm.submitted" readonly
																ng-click="openToDatePicker($index)"
																ng-model="dcpuTrainingDetailsRepetitionArray[$index].trainingTo"
																class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
																class="fa fa-calendar fa-5x" id="trainingToDatepicker1{{$index}}"
																style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
														</div>

													</div>

													<div class="form-group labelFont marginBottomInAccordion">
														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.e. Training Organised by</label>
														<div class="col-md-6">
															<select
																ng-change="resetAccordionOthers2(dcpuTrainingDetails)"
																ng-disabled="dcpuForm.submitted"
																ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
																ng-model="dcpuTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
																ng-value="item.typeDetailsId"
																class="form-control inputBackground inputBackgroundgeneral">
																<option value="" disabled selected>Select</option>
															</select>
														</div>
													</div>

													<div class="form-group labelFont marginBottomInAccordion"
														ng-show="dcpuTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.e.i. If Training Organised
															by Others, Please Specify</label>
														<div class="col-md-6">
															<input type="text" ng-disabled="dcpuForm.submitted" address-validation
																ng-model="dcpuTrainingDetailsRepetitionArray[$index].trainingOrganisedByOthers"
																class="form-control inputBackground inputBackgroundgeneral">
														</div>
													</div>

													<div class="form-group labelFont marginBottomInAccordion">
														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.f. Topic of Training</label>
														<div class="col-md-6">
															<ul class="topicOftrainingList">
																<li>
																	<div class="cb checkboxstyle">
																		<input id="JJActRule" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totJjAct">
																		<label for="JJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="LawsandICPS" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totChildRelatedLawsICPS">
																		<label for="LawsandICPS"> Child related Laws
																			and ICPS </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="POCSOAct" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totPosco">
																		<label for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="Combinedtraining" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totCombinedTraining">
																		<label for="Combinedtraining"> Combined
																			training </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CPMIS" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totCpmis">
																		<label for="CPMIS"> CPMIS</label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="Trackchild" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totTrackChild">
																		<label for="Trackchild"> Track child</label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CLTS" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totClts">
																		<label for="CLTS"> CLTS </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="Others" type="checkbox" ng-disabled="dcpuForm.submitted"
																			ng-click="clearTopicOfTrainingOthers(dcpuTrainingDetailsRepetitionArray[$index])"
																			ng-model="dcpuTrainingDetailsRepetitionArray[$index].totOthers">
																		<label for="Others"> Others </label>
																	</div>
																</li>
															</ul>
														</div>
													</div>

													<div class="form-group labelFont marginBottomInAccordion"
														ng-show="dcpuTrainingDetailsRepetitionArray[$index].totOthers">
														<label class="col-md-6 control-label labelLeftAlign"
															for="textinput"> N.1.f.i. If topic of Training is
															Other, Please specify </label>
														<div class="col-md-6">
															<input type="text" ng-disabled="dcpuForm.submitted" address-validation
																ng-model="dcpuTrainingDetailsRepetitionArray[$index].totOthersSpecify"
																class="form-control inputBackground inputBackgroundgeneral">
														</div>
													</div>


													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend"
														for="textinput"><b>N.1.g. Training Attended by
															:</b></label> <label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrained"
														for="textinput"><b>Number of persons trained</b></label>
												</div>
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> CWC members and Staff </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabCWCMembersStaff"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>

												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> JJB Members and Staff </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabJJBMembersStaff"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>

												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> DCPU Functionaries </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabDCPUFunctionaries"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>

												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> SJPU Functionaries </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabSJPUFunctionaries"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>

												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> CCI Functionaries </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabCCIFunctionaries"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Children's Court Functionaries </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabChildrenCourtFunctionaries"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Others </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-change="resetTABOthers(dcpuTrainingDetailsRepetitionArray[$index])"
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].tabOthers"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												<div ng-show="dcpuTrainingDetailsRepetitionArray[$index].tabOthers > 0"
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">If training attended by
														other, Please specify</label>
													<div class="col-md-6 marginBottomTop">
														<input type="text" address-validation
															ng-model="dcpuTrainingDetailsRepetitionArray[$index].trainingAttendedByOthers"
															ng-disabled="dcpuForm.submitted"
															class="form-control inputBackground">
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- --------Adding training details------- -->
									<div class="col-md-12 text-left adddingdetails bottomGap">
										<div class="addingnewdetails-container">
											<div id="trainingDetailserror" class="error-style"></div>
											<button type="button" class="addingnewdetails" ng-disabled="dcpuForm.submitted"
												ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
											<button type="button" class="addingnewdetails" ng-disabled="dcpuForm.submitted"
												ng-show="dcpuTrainingDetailsRepetitionArray.length > 1"
												ng-click="deleteConfirm()">-</button>
											<div id="maximumLimit10Error" class="error-style"></div>
										</div>
									</div>
									<!-- end ---------------------------- -->
								</div>

								<div class="b4sectionheading" id="caseO"></div>
								<div class="grey-header headMarg">O. Status of
									Implementation of POCSO Act, 2012</div>


								<div class="form-group labelFont sectionMarginTop">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.1. Total Number of Publicity/
										Awareness campaigns organized on POCSO Act 2012</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required id="o1" ng-model="dcpuForm.o1"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.1.a. Number of POCSO victim
										provided compensation</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required id="o1a" ng-model="dcpuForm.o1a"
											ng-disabled="dcpuForm.submitted"
											ng-keyup = "resetOs(dcpuForm.o1a, 'all')"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont marginBottomInAccordion typeofrelief_dcpu" ng-show="dcpuForm.o1a > 0">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> O.1.b. Type of Relief </label>
									<div class="col-md-6">
										<ul class="topicOftrainingList">
											<li>
												<div class="cb checkboxstyle">
													<input id="interimRelief" type="checkbox"
														ng-model="dcpuForm.o1bIR" ng-change="resetOs(dcpuForm.o1bIR, 'interim')">
													<label for="interimRelief"> Interim Relief </label>
												</div>
											</li>
											<li>
												<div class="cb checkboxstyle">
													<input id="finalRelief" type="checkbox"
														ng-model="dcpuForm.o1bFR" ng-change="resetOs(dcpuForm.o1bFR, 'final')">
													<label for="finalRelief"> Final Relief </label>
												</div>
											</li>	
										</ul>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o1bIR">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.1.c. Number of victims given
										interim relief during the month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" ng-required="dcpuForm.o1bIR" id="o1c" ng-model="dcpuForm.o1c"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o1bFR">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.1.d. Number of victims given final
										relief during the month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" ng-required="dcpuForm.o1bFR" id="o1d" ng-model="dcpuForm.o1d"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o1bIR">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.1.e. Amount (In Rs.) for interim
										relief during the month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" ng-required="dcpuForm.o1bIR" id="o1e" ng-model="dcpuForm.o1e"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE"
											limit-to="7">
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o1bFR">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.1.f. Amount (In Rs.) for final
										relief during the month</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" ng-required="dcpuForm.o1bFR" id="o1f" ng-model="dcpuForm.o1f"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE"
											limit-to="7">
									</div>
								</div>


								<div class="form-group labelFont">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.2. Availability of Special court in
										the district</label>
									<div class="col-md-6 marginBottomTop">
										<select class="form-control inputBackground" required
											ng-disabled="dcpuForm.submitted"
											ng-change="resetO2a(dcpuForm.o2)"
											ng-model="dcpuForm.o2">
											<option value="" disabled selected>Select</option>
											<option value="true">Yes</option>
											<option value="false">No</option>
										</select>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o2=='true'">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.2.a. Special Court is
										located in the premises of Adult Court</label>
									<div class="col-md-6 marginBottomTop">
										<select class="form-control inputBackground" ng-required="dcpuForm.o2=='true'"
											ng-disabled="dcpuForm.submitted"
											ng-model="dcpuForm.o2a">
											<option value="" disabled selected>Select</option>
											<option value="true">Yes</option>
											<option value="false">No</option>
										</select>
									</div>
								</div>


								<div class="form-group labelFont">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.3. Number of Special Public
										Prosecutors appointed in the district</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" required id="o3" ng-model="dcpuForm.o3"
											ng-disabled="dcpuForm.submitted"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput"> O.4. Interpreters, Translators &
										special educators for the purpose of POCSO Act 2012 is
										available</label>
									<div class="col-md-6 marginBottomTop">
										<select class="form-control inputBackground" required
											ng-change="resetO4abc(dcpuForm.o4)"
											ng-disabled="dcpuForm.submitted"
											ng-model="dcpuForm.o4">
											<option value="" disabled selected>Select</option>
											<option value="true">Yes</option>
											<option value="false">No</option>
										</select>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o4=='true'">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">O.4.a. Number of Interpreters
										available</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" id="o4a" ng-model="dcpuForm.o4a"
											ng-disabled="dcpuForm.submitted" ng-required="dcpuForm.o4=='true'"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o4=='true'">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">O.4.b. Number of Translators available</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" id="o4b" ng-model="dcpuForm.o4b"
											ng-disabled="dcpuForm.submitted" ng-required="dcpuForm.o4=='true'"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="form-group labelFont" ng-show="dcpuForm.o4=='true'">
									<label
										class="col-md-6 control-label labelLeftAlign marginBottomTop"
										for="textinput">O.4.c. Number of Special Educators
										available</label>
									<div class="col-md-6 marginBottomTop">
										<input type="number" id="o4c" ng-model="dcpuForm.o4c"
											ng-disabled="dcpuForm.submitted" ng-required="dcpuForm.o4=='true'"
											class="form-control inputBackground removeExponentialValueE"
											only-four-digits>
									</div>
								</div>

								<div class="grey-header1 headMarg">O.a. Cases under
									Special Court</div>

								<div class="labelFont">
									<table class="table table-bordered table-margintop">
										<thead>
											<tr>
												<th>Category</th>

												<th>No. of Cases</th>

												<th>Male</th>

												<th>Female</th>

												<th>Total</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">O.a.1.
															Total number of cases Pending with Special Court On the
															First day of the Month</label>
													</div>
												</td>
												<td><input type="number" required id="oA1Cases"
													ng-model="dcpuForm.oA1Cases" 
													ng-keyup="resetOA1(dcpuForm.oA1Cases)"
													ng-init="dcpuForm.oA1Cases=null"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oA1Cases" id="oA1Male"
													ng-model="dcpuForm.oA1Male"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oA1Cases<1)||(dcpuForm.oA1Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oA1Cases" id="oA1Female"
													ng-model="dcpuForm.oA1Female"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oA1Cases<1)||(dcpuForm.oA1Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="text" id="oA1Total" disabled
													value="{{Number(dcpuForm.oA1Male-0)+Number(dcpuForm.oA1Female-0)}}"
													class="form-control inputBackground tableinputWidth"></td>
											</tr>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">O.a.2.
															Total number of new cases filled in Special Court during
															the Month</label>
													</div>
												</td>
												<td><input type="number" required id="oA2Cases"
													ng-model="dcpuForm.oA2Cases"
													ng-keyup="resetOA2(dcpuForm.oA2Cases)"
													ng-init="dcpuForm.oA2Cases=null"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oA2Cases" id="oA2Male"
													ng-model="dcpuForm.oA2Male"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oA2Cases<1)||(dcpuForm.oA2Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oA2Cases" id="oA2Female"
													ng-model="dcpuForm.oA2Female"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oA2Cases<1)||(dcpuForm.oA2Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="text" id="oA2Total" disabled
													value="{{Number(dcpuForm.oA2Male-0)+Number(dcpuForm.oA2Female-0)}}"
													class="form-control inputBackground tableinputWidth"></td>
											</tr>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label totalFont" for="textinput">
															O.a.3. Total number of cases in the month</label>
													</div>
												</td>
												<td><input type="text"  id="oA3Cases" disabled
													value="{{Number(dcpuForm.oA1Cases-0)+Number(dcpuForm.oA2Cases-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>

												<td><input type="text"  id="oA3Male" disabled
													value="{{Number(dcpuForm.oA1Male-0)+Number(dcpuForm.oA2Male-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>

												<td><input type="text"  id="oA3Female" disabled
													value="{{Number(dcpuForm.oA1Female-0)+Number(dcpuForm.oA2Female-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>

												<td><input type="text" id="oA3Total" disabled
													value="{{Number(dcpuForm.oA1Male-0)+Number(dcpuForm.oA2Male-0)+Number(dcpuForm.oA1Female-0)+Number(dcpuForm.oA2Female-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>
											</tr>



											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">
															O.a.4. Total number of cases in which bail was granted by
															Special courts u/Ss 3,5,7,9,11,13 & 15 of POCSO Act 2012</label>
													</div>
												</td>
												<td><input type="number" required id="oA4Cases"
													ng-model="dcpuForm.oA4Cases"
													ng-keyup="resetOA4(dcpuForm.oA4Cases)"
													ng-init="dcpuForm.oA4Cases=null"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oA4Cases" id="oA4Male"
													ng-model="dcpuForm.oA4Male"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oA4Cases<1)||(dcpuForm.oA4Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oA4Cases" id="oA4Female"
													ng-model="dcpuForm.oA4Female"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oA4Cases<1)||(dcpuForm.oA4Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="text" id="oA4Total" disabled
													value="{{Number(dcpuForm.oA4Male-0)+Number(dcpuForm.oA4Female-0)}}"
													class="form-control inputBackground tableinputWidth"
													only-four-digits></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="grey-header1 headMarg">O.b. Cases disposed off
									by Special Courts under POCSO Act 2012</div>

								<div class="labelFont">
									<table class="table table-bordered table-margintop">
										<thead>
											<tr>
												<th>Category</th>

												<th>No. of Cases</th>

												<th>Male</th>

												<th>Female</th>

												<th>Total</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">O.b.1.
															Total number of cases discharged by Special courts u/Ss
															3,5,7,9,11,13,15 & others of POCSO Act 2012</label>
													</div>
												</td>
												<td><input type="number" required id="oB1Cases"
													ng-model="dcpuForm.oB1Cases"
													ng-change="resetOB1(dcpuForm.oB1Cases, dcpuForm.oB2Cases, dcpuForm.oB3Cases, 'oB1Cases')"
													ng-init="dcpuForm.oB1Cases=null"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oB1Cases" id="oB1Male"
													ng-model="dcpuForm.oB1Male"
													ng-change="resetOBMaleFemale(dcpuForm.oB1Male, dcpuForm.oB2Male, dcpuForm.oB3Male, 'oB1Male', 'oA3Male')"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB1Cases<1)||(dcpuForm.oB1Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oB1Cases" id="oB1Female"
													ng-model="dcpuForm.oB1Female"
													ng-change="resetOBMaleFemale(dcpuForm.oB1Female, dcpuForm.oB2Female, dcpuForm.oB3Female, 'oB1Female', 'oA3Female')"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB1Cases<1)||(dcpuForm.oB1Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="text" id="oB1Total" disabled
													value="{{Number(dcpuForm.oB1Male-0)+Number(dcpuForm.oB1Female-0)}}"
													class="form-control inputBackground tableinputWidth"
													only-four-digits></td>
											</tr>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">O.b.2.
															Total number of cases acquitted by Special courts u/Ss
															3,5,7,9,11,13,15 & others of POCSO Act 2012</label>
													</div>
												</td>
												<td><input type="number" required id="oB2Cases"
													ng-model="dcpuForm.oB2Cases"
													ng-change="resetOB2(dcpuForm.oB2Cases, dcpuForm.oB1Cases, dcpuForm.oB3Cases, 'oB2Cases')"
													ng-init="dcpuForm.oB2Cases=null"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>
												<td><input type="number" ng-required="dcpuForm.oB2Cases" id="oB2Male"
													ng-model="dcpuForm.oB2Male"
													ng-change="resetOBMaleFemale(dcpuForm.oB1Male, dcpuForm.oB2Male, dcpuForm.oB3Male, 'oB2Male', 'oA3Male')"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB2Cases<1)||(dcpuForm.oB2Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>
												<td><input type="number" ng-required="dcpuForm.oB2Cases" id="oB2Female"
													ng-model="dcpuForm.oB2Female"
													ng-change="resetOBMaleFemale(dcpuForm.oB1Female, dcpuForm.oB2Female, dcpuForm.oB3Female, 'oB2Female', 'oA3Female')"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB2Cases<1)||(dcpuForm.oB2Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>
												<td><input type="text" id="oB2Total" disabled
													value="{{Number(dcpuForm.oB2Male-0)+Number(dcpuForm.oB2Female-0)}}"
													class="form-control inputBackground tableinputWidth"
													only-four-digits></td>
											</tr>
											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">
															O.b.3. Total number of cases convicted by Special courts
															u/Ss 3,5,7,9,11,13,15 & others of POCSO Act 2012</label>
													</div>
												</td>
												<td><input type="number" required id="oB3Cases"
													ng-model="dcpuForm.oB3Cases"
													ng-change="resetOB3(dcpuForm.oB3Cases, dcpuForm.oB1Cases, dcpuForm.oB2Cases, 'oB3Cases')"
													ng-init="dcpuForm.oB3Cases=null"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>
												<td><input type="number" ng-required="dcpuForm.oB3Cases" id="oB3Male"
													ng-model="dcpuForm.oB3Male"
													ng-change="resetOBMaleFemale(dcpuForm.oB1Male, dcpuForm.oB2Male, dcpuForm.oB3Male, 'oB3Male', 'oA3Male')"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB3Cases<1)||(dcpuForm.oB3Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>
												<td><input type="number" ng-required="dcpuForm.oB3Cases" id="oB3Female"
													ng-model="dcpuForm.oB3Female"
													ng-change="resetOBMaleFemale(dcpuForm.oB1Female, dcpuForm.oB2Female, dcpuForm.oB3Female, 'oB3Female', 'oA3Female')"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB3Cases<1)||(dcpuForm.oB3Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>
												<td><input type="text" id="oB3Total" disabled
													value="{{Number(dcpuForm.oB3Male-0)+Number(dcpuForm.oB3Female-0)}}"
													class="form-control inputBackground tableinputWidth"
													only-four-digits></td>
											</tr>
											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">
															O.b.4. Total number of cases disposed off by Special
															Courts u/Ss 3,5,7,9,11,13,15 & others of POCSO Act 2012</label>
													</div>
												</td>
												<td><input type="text" id="oB4Cases"
													disabled
													value="{{Number(dcpuForm.oB1Cases-0)+Number(dcpuForm.oB2Cases-0)+Number(dcpuForm.oB3Cases-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>

												<td><input type="text" id="oB4Male"
													disabled
													value="{{Number(dcpuForm.oB1Male-0)+Number(dcpuForm.oB2Male-0)+Number(dcpuForm.oB3Male-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>

												<td><input type="text" id="oB4Female"
													disabled
													value="{{Number(dcpuForm.oB1Female-0)+Number(dcpuForm.oB2Female-0)+Number(dcpuForm.oB3Female-0)}}"
													class="form-control inputBackground tableinputWidth totalFont"></td>

												<td><input type="text" id="oB4Total"
													value="{{Number(dcpuForm.oB1Male-0)+Number(dcpuForm.oB2Male-0)+Number(dcpuForm.oB3Male-0)+
															 Number(dcpuForm.oB1Female-0)+Number(dcpuForm.oB2Female-0)+Number(dcpuForm.oB3Female-0)}}"
													disabled
													class="form-control inputBackground tableinputWidth  totalFont"></td>
											</tr>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">
															O.b.5. Total number of cases pending with Special Court</label>
													</div>
												</td>
												<td><input type="text" id="oB5Cases"
													disabled
													value="{{Number(dcpuForm.oA1Cases-0)+Number(dcpuForm.oA2Cases-0)
													-(Number(dcpuForm.oB1Cases-0)+Number(dcpuForm.oB2Cases-0)+Number(dcpuForm.oB3Cases-0))
													}}"
													class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>

												<td><input type="text" id="oB5Male"
													disabled
													value="{{Number(dcpuForm.oA1Male-0)+Number(dcpuForm.oA2Male-0)
													-(Number(dcpuForm.oB1Male-0)+Number(dcpuForm.oB2Male-0)+Number(dcpuForm.oB3Male-0))
													}}"
													class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>

												<td><input type="text" id="oB5Female"
													disabled
													value="{{Number(dcpuForm.oA1Female-0)+Number(dcpuForm.oA2Female-0)
													-(Number(dcpuForm.oB1Female-0)+Number(dcpuForm.oB2Female-0)+Number(dcpuForm.oB3Female-0))
													}}"
													class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>

												<td><input type="text" id="oB5Total"
													value="{{Number(dcpuForm.oA1Male-0)+Number(dcpuForm.oA2Male-0)+Number(dcpuForm.oA1Female-0)+Number(dcpuForm.oA2Female-0)
													-(Number(dcpuForm.oB1Male-0)+Number(dcpuForm.oB2Male-0)+Number(dcpuForm.oB3Male-0)+
															 Number(dcpuForm.oB1Female-0)+Number(dcpuForm.oB2Female-0)+Number(dcpuForm.oB3Female-0))
													}}"
													disabled
													class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
											</tr>

											<tr>
												<td>
													<div class="textAlign">
														<label class="control-label" for="textinput">
															O.b.6. Total number of pending cases more than one month
															with the police during the reporting period</label>
													</div>
												</td>
												<td><input type="number" required id="oB6Cases"
													ng-model="dcpuForm.oB6Cases"
													ng-change="resetOB6(dcpuForm.oB6Cases)"
													ng-init="dcpuForm.oB6Cases<1"
													ng-disabled="dcpuForm.submitted"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oB6Cases" id="oB6Male"
													ng-model="dcpuForm.oB6Male"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB6Cases<1)||(dcpuForm.oB6Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="number" ng-required="dcpuForm.oB6Cases" id="oB6Female"
													ng-model="dcpuForm.oB6Female"
													ng-disabled="dcpuForm.submitted||(dcpuForm.oB6Cases<1)||(dcpuForm.oB6Cases==null)"
													class="form-control inputBackground tableinputWidth removeExponentialValueE"
													only-four-digits></td>

												<td><input type="text" id="oB6Total" disabled
													value="{{Number(dcpuForm.oB6Male-0)+Number(dcpuForm.oB6Female-0)}}"
													class="form-control inputBackground tableinputWidth"
													only-four-digits></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<br> <br>&nbsp;<br> <br> <br>&nbsp;
							<!--                               <a href="#" class="back-to-top" -->
							<!--                                    style="display: inline;float:"> <i class="fa fa-arrow-circle-up"></i> -->
							<!--                               </a> -->
						</div>
					</form>
				</div>
			</div>
		</div>


		<!-- end data entry for dcpu  -->

		<div></div>
	</div>
	<div class="modal fade" id="successModalFordcpuSave"
		data-keyboard="false" data-backdrop="static" tabindex="-1"
		role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
					<img src="resources/image/svgIcons/success_icon.svg" height="25px" />
					<label class="modalMsg">Success</label>
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">{{success_msg}}</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							ng-click="refreshPage()" data-dismiss="modal" aria-hidden="true">OK</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade autoSaveModal" id="successModalForAutoSaveDCPU"
          data-keyboard="false" data-backdrop="static" tabindex="-1"
          role="dialog">
          <div class="modal-dialog">
               <div class="col-md-12 modal-content modalView">
                    <div class="modal-header succesmodal ">
                         <img src="resources/image/svgIcons/success_icon.svg" height="25px" />
                         <label class="modalMsg">Success</label>
                    </div>
                    <div class="modal-body">
                         <h4 class="modal-title" id="myModalLabel">Form successfully auto saved .<br>
                          Your session has expired.<br>
                          Please login again</h4>
                         <p style="text-align: center">
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   ng-click="logout()" data-dismiss="modal" aria-hidden="true">OK</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>

	<div class="modal fade" id="successModalFordcpuSubmit"
		data-keyboard="false" data-backdrop="static" tabindex="-1"
		role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
					<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
					<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">Are you sure you
						want to submit this form ?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							ng-click="savedcpu(dcpuForm, 'submit', 'ok')"
							data-dismiss="modal" aria-hidden="true">OK</button>
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="modal fade" id="ErrAlertModal"
          data-keyboard="false" data-backdrop="static" tabindex="-1"
          role="dialog">
          <div class="modal-dialog">
               <div class="col-md-12 modal-content modalView">
                    <div class="modal-header errorsmodal ">
                         <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                         <label class="modalMsg">Error</label>
                    </div>
                    <div class="modal-body">
                         <h4 class="modal-title" id="myModalLabel">
                         	{{label1}}
                         		<span style="color: red">{{alertMessage}}</span>
                         	{{label2}}
                         </h4>
                         <p style="text-align: center">
                              <button id="button3id" name="button3id"
                                   class="btn btn-info errorModalClosebtn" type="submit" class="close"
                                   data-dismiss="modal"
                                   aria-hidden="true">OK</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
	<div class="modal fade" id="confirmationModalFordcpudeleteAccordion"
		data-keyboard="false" data-backdrop="static" tabindex="-1"
		role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
					<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
					<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">Are you sure you
						want to delete this record ?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							ng-click="deleteNewDetails()" data-dismiss="modal"
							aria-hidden="true">OK</button>
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
 <div class="modal fade" id="successModalForcedSaveSAA" data-keyboard="false"
          data-backdrop="static" tabindex="-1" role="dialog">
          <div class="modal-dialog">
               <div class="col-md-12 modal-content modalView">
                    <div class="modal-header succesmodal ">
                         <span class="glyphicon glyphicon glyphicon-info-sign"
                              style="font-size: 21px; top: 3px;"></span> <label class="modalMsg">Info</label>
                    </div>
                    <div class="modal-body">
                         <h4 class="modal-title" id="myModalLabel">{{alertMessage}}</h4>
                         <p style="text-align: center">
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   ng-click="savedcpu(dcpuForm, 'save')" data-dismiss="modal" aria-hidden="true">SAVE</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
	<div class="modal fade" id="alertModal" data-keyboard="false"
		data-backdrop="static" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
					<span class="glyphicon glyphicon glyphicon-info-sign"
						style="font-size: 21px; top: 3px;"></span> <label class="modalMsg">Info</label>
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">{{alertMessage}}</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							ng-click="clearMsg()" data-dismiss="modal" aria-hidden="true">OK</button>
					</p>
				</div>
			</div>
		</div>
	</div>

	<script src="resources/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/angular.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		var app = angular.module('dcpuApp', ['angular-md5']);
		var cpmisApp = angular.module('dcpuApp');
	</script>
	<script src="resources/js/controllers/dcpuController.js"></script>
	<script src="resources/services/commonService.js"></script>
	<script src="resources/js/angular-md5.js"></script>
	<jsp:include page="fragments/footer.jsp" />
	
	<script type='text/javascript'>
		$(document).ready(function() {
			$("input[type='number']").on('drop', function(event) {
			    event.preventDefault();
			});
			$("input[type=number]").on("keydown", function(event) {
				//38=up arrow, 40=down arrow
		        if (event.keyCode === 38 || event.keyCode === 40) {
		            event.preventDefault();
		        }
		    });
		});
		$(function() {
			$(window).scroll(function(event) {
				if ($('#gi').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 0
					}, 0);
				} else if ($('#casea').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 19
					}, 0);
				} else if ($('#caseb').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 82
					}, 0);
				} else if ($('#casec').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 145
					}, 0);
				} else if ($('#cased').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 237
					}, 0);
				} else if ($('#casee').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 304
					}, 0);
				}else if ($('#casef').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 364
					}, 0);
				}else if ($('#caseg').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 444
					}, 0);
				}else if ($('#caseh').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 489
					}, 0);
				}else if ($('#casei').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 555
					}, 0);
				}else if ($('#casej').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 618
					}, 0);
				}else if ($('#casek').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 680
					}, 0);
				}else if ($('#casel').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 760
					}, 0);
				}else if ($('#casem').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 791
					}, 0);
				}else if ($('#casen').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 870
					}, 0);
				}
			});
		});
	</script>
	<script type="text/javascript">
	 $(window).scroll(
               function() {
                	var windowHeight = $(window).scrollTop()+ $(window).height();
                	if (windowHeight == $(document).height())
					{
                		 $(".sectionBoxShdw").css({
                             "position" : "relative",
                             "top" : "10px",
                             "margin-bottom" : "66px"
                         });
                         $(".footerArea").css({
                             "position" : "fixed"                                    
                         });
					} 
					else
						{
						$(".sectionBoxShdw").css({
							"position" : "fixed",
							"top" : "82px",
							"margin-bottom" : "6px"
						});
						$(".footerArea").css({
							"position" : "relative"
						});

				}});
	
	</script>
	
	<script>
		$(function() {
			$("input[type='number']").prop('min', 0);
		});
	</script>

	<script type="text/javascript">
	$(document).on('mousedown', 'button, input[type="button"], input[type="submit"]', function(e) {
  	  e.preventDefault();
  	});
   	$(document).on('focus', 'button, input[type="button"], input[type="submit"]', function(e) {
 	  e.preventDefault();
 	});
	 $("#clickSubmit").click(function(){
	   	  	var offset = 150;
	   		document.addEventListener('invalid', function(e){
	   	    	 $(e.target).addClass("invalid");
	   	  	window.scrollTo(0, $($(".invalid")[0]).offset().top - offset);
	   	  	}, true);
	   	  	document.addEventListener('change', function(e){
	   	    	 $(e.target).removeClass("invalid")
	   	  	}, true);

		});
		$("#sectionindctr li a").click(
				function() {
					$(this).parent().addClass('active').siblings().removeClass(
							'active');
				});
	</script>

	<script type="text/javascript">
		window.addEventListener("hashchange", function() {
			scrollBy(0, 0);
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function () {
         $("input[type='number']").bind('copy paste', function (e) {
            e.preventDefault();
         });
         $("input[type='number']").keypress(function(event) {
        	 if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
     			return false;
     		}
	     });
     });
	</script>

	<script type="text/javascript">
	 $('#dcpuFormDetails').on('focus', 'input[type=number]', function (e) {
    	  $(this).on('DOMMouseScroll mousewheel.disableScroll', function (e) {
    	    e.preventDefault()
    	  })
    	})
		function changeIcon(div) {
			$(div).find(".more-less").toggleClass(
					'glyphicon-plus glyphicon-minus');
			$(div).parent().siblings().find(".more-less").addClass(
					'glyphicon-plus');
			$(div).parent().siblings().find(".more-less").removeClass(
					'glyphicon-minus');
		}
	</script>
	<!-- -------------------for fixed section -------------------------------------->
</body>
</html>