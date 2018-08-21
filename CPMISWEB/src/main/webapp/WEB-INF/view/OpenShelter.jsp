<!-- 
@author Shree (sswayamprava@sdrc.co.in)
 -->
<!DOCTYPE html>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ page import="java.io.*,java.util.*"%>
<%@ page import="javax.servlet.*,java.text.*"%>
<%@ page import="java.time.YearMonth"%>
<%@ page import="java.time.format.DateTimeFormatter"%>

<html lang="en">
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon"> 
<title>CCI Open Shelter</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans"
	rel="stylesheet">
<style type="text/css">
.table>tbody>tr>td {
    vertical-align: middle !important;
}
.table>thead>tr>th{
	vertical-align: middle !important;
}
.nopersonsTrainedCCI {
    padding-left: 30px !important;
}
.autoSaveModal{
   z-index: 9998; 
}

</style>
</head>
<body ng-app="openShelterApp" ng-controller="cciOpenShelterController" id="cciOpenShelterController"
	ng-cloak data-spy="scroll" data-target="#myScrollspy" data-offset="20" class="ng-cloak">
	<!-- spinner -->
	<div id="spinner" class="loader" style="display: none;"></div>
	<div id="loader-mask" class="loader" style="display: none;"></div>
	<!-- /spinner -->
	<jsp:include page="fragments/header.jsp" />
	<div class="b4sectionheading" id="gInfo"></div>
	<!-- 	<div class="container"> -->
	<div class="row marginspc">
	<form class="form-horizontal" name="openShelterFormDetails"
						id="openShelterFormDetails" data-toggle="validator" role="form">
	<div id="scroll1">
		<nav class="col-md-3 sectionBoxShdw" id="myScrollspy">
			<h5 class="cwcHeading">CCI Open Shelter <br> Monthly Report</h5>
			<ul class="nav nav-pills nav-stacked sectionListCCI flexcroll" id="sectionindctr">
				<li id="gi" class="active sectionUlist"><a href="#gInfo"
					class="active1">General Information </a></li>

				<li id="casea" class="sectionUlist"><a href="#caseA">A. Children
						Residing on the First day of the Month</a></li>
				<li id="caseb" class="sectionUlist"><a href="#caseB">B. New Children
						Admitted in the Month</a></li>
				<li id="casec" class="sectionUlist"><a href="#caseC">C. Total Children
						in the Month</a></li>
				<li id="cased" class="sectionUlist"><a href="#caseD">D.
						Institutions/Persons where Children Referred</a></li>
				<li id="casee" class="sectionUlist"><a href="#caseE">E. Children on
						the Last day of the reporting Month</a></li>
				<li id="casef" class="sectionUlist"><a href="#caseF">F. Category wise break up of cases as on last day of month</a></li>
				<li id="caseg" class="sectionUlist"><a href="#caseG">G.  Educational status of Children in the CCI</a></li>
				<li id="caseh" class="sectionUlist"><a href="#caseH">H.  Health Status of the Children residing in the CCI</a></li>
				<li id="casei" class="sectionUlist"><a href="#caseI">I.  Children Residing in the CCI by duration</a></li>
				<li id="casej" class="sectionUlist"><a href="#caseJ">J.  Average length of association as on last day of the month</a></li>
				<li id="casek" class="sectionUlist"><a href="#caseK">K. Details of cases dealt with (In the reporting month)</a></li>
				<li id="casel"class="sectionUlist"><a href="#caseL">L. Training on JJ System</a></li>
			</ul>

			
			
			<div ng-hide="openShelterCCI.submitted" id="saveSubmitId">
                   <a href=""> <div class="col-md-6 savebtn locline" ng-click="checkSave()">
                         <img class="saveSvg" 
                              ng-disabled="cwcForm.submitted"
                              src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                              height="18" /> <h5 class="borderright1">SAVE</h5>
                    </div></a>
                    <button type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit"  ng-click="openShelterFormDetails.$invalid ? '' : checkSubmit()">
                         <img class="saveSvg"
                              ng-disabled="openShelterCCI.submitted"
                              src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
                              height="18" /><h5 class="borderright1 sbmtbtn">SUBMIT</h5>
                    </button>
               </div>
               
               
 			<div ng-show="openShelterCCI.submitted">
				<div class="col-md-12 savebtn"></div>
			</div>
		</nav>
    </div>
		<div class="col-md-9 col-xs-12 formDetailsTopMargin">
			<div class="formHeading">
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
						<div></div>

						<div class="col-md-12">
							<h4 class="headingBottom1">
								Open Shelter&nbsp; Monthly Report for Month of <b
									style="color: #41c484">&nbsp;{{openShelterCCI.timeperiod.timePeriod}}</b>
							</h4>


							<!-- Biswa starts -->
							<div class="form-group labelFont">

								<div class="col-md-6">
									<input type="hidden" ng-model="openShelterCCI.userId"
										class="form-control inputBackground">
								</div>

							</div>

							<div class="col-md-6" style="display: none;">
								<input name="userId" type="number"  id="uId" value='${userId}'>${userId}
								<input type="number" id="monthDays" value='<%=daysInMonth%>'>
								<input type="text" id="typeOfHomeId" value='${typeOfHome}'>${typeOfHome}
								
							</div>
							<!-- Biswa ends -->

							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Name of the Authorized Person </label>
								<div class="col-md-6">
									<input type="text" ng-model="openShelterCCI.nameOfPerson"
										fifty-characters-validation
										ng-disabled="openShelterCCI.submitted"
										required class="form-control inputBackgroundgeneral">
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 control-label  labelLeftAlign"
									for="textinput"> Designation </label>
								<div class="col-md-6">
									<input type="text" id="childHomedesignation"
										ng-model="openShelterCCI.designation"
										address-validation
										ng-disabled="openShelterCCI.submitted"
										required class="form-control inputBackgroundgeneral">
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Date of Reporting</label>
								<div class="col-md-6 " style="display: inline-flex;">
									<%
										Date dNow = new Date();
										SimpleDateFormat ft = new SimpleDateFormat("dd-MM-yyyy");
									%>
									<input type="text" readonly tabindex= -1
										class="form-control inputBackgroundgeneral readonlyStyle"
										value="<%=ft.format(dNow)%>">
								</div>
								<!-- <div class="col-md-6 calenderInline">
									<input type="text" readonly id="datepicker"
										required class="form-control inputBackgroundgeneral"> 
								</div> -->
								<!-- <div class="col-md-6">
									<input type="text" ng-model="openShelterCCI.monthyear" id="datepicker"
										required class="form-control inputBackground">
								</div> -->
							</div>
							<div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of the District</label>
                                        <div class="col-md-6">
                                             <input type="text" id="district" tabindex= -1
                                                  disabled ng-model="selectedDistrict.areaName"
                                                  class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>

							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Type of Home </label>
								<div class="col-md-6">
									<input type="text" id="typeOfHome" disabled
										 value="${typeOfHome}" class="form-control inputBackgroundgeneral">
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Name of CCI </label>
								<div class="col-md-6" ng-show="cciNameList.length!=0">
								<input type="text" id="cciName" tabindex=-1
                                                  disabled ng-model="cciNameList.cciName"
                                                  class="form-control  inputBackgroundgeneral">
								<!-- <select 
											ng-options="nameCCI as nameCCI.cciName for nameCCI in cciNameList"
											ng-model="selectedCciName" ng-value="nameCCI.cciName"
											required class="form-control inputBackgroundgeneral"
											ng-disabled="openShelterCCI.submitted||(cciNameList.length==0)">
											<option value="" disabled selected>Select</option>
										</select> -->
								</div>
								<!-- <div class="col-md-6" ng-show="cciNameList.length==0">
                                <input type="text" value="No CCIs Found" disabled
										required class="form-control inputBackgroundgeneral">
								</div> -->
								<!-- <input type="text" ng-int="openShelterCCI.nameOfCCI"
										ng-model="openShelterCCI.nameOfCCI"
										fifty-characters-validation
										ng-disabled="openShelterCCI.submitted"
										required class="form-control inputBackgroundgeneral"> -->
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Type of Institution </label>
								<div class="col-md-6">
									<select
										ng-options="item as item.typeDetailsName for item in childSex"
										ng-model="selectedChildSex" ng-value="item.typeDetailsId"
										required class="form-control inputBackgroundgeneral"
										ng-disabled="openShelterCCI.submitted">
										<option value="" disabled selected>Select</option>
									</select>
									<!-- ng-model="openShelterCCI.typeOfInstitutions" -->
								</div>
							</div>

							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Run By </label>
								<div class="col-md-6">
									<select
										ng-options="item as item.typeDetailsName for item in osType"
										ng-model="selectedOsType" ng-value="item.typeDetailsId"
										required class="form-control inputBackgroundgeneral"
										ng-disabled="openShelterCCI.submitted">
										<option value="" disabled selected>Select</option>
									</select>
									<!-- <input type="text" ng-model="openShelterCCI.govtNonGovt" -->
								</div>
							</div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Capacity of Home/CCI </label>
								<div class="col-md-6">
									<input type="number" 
										id="capacityOfHome"
                                        ng-keyup="testCapacity('capacityOfHome')"
										ng-model="openShelterCCI.capacityOfHome"
										ng-disabled="openShelterCCI.submitted"
										required class="form-control inputBackgroundgeneral removeExponentialValueE">
								</div>
							</div>
							<!-- <div class="grey-header marginTop"
								style="border-top: none; margin-top: 4px; margin-bottom: 20px;"> -->
								<div class="b4sectionheading" id="caseA"></div>
								
							<div class="grey-header headMarg">

								A. Children Residing on the First day of the month</div>
							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop">

									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> A.1.
													Age distribution of Children on the first day of the
													reporting month</label></td>
											<td><input type="number" id="aYears0to6"
												ng-model="openShelterCCI.aYears0to6" tabindex= -1
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" id="aYears7to11"
												ng-model="openShelterCCI.aYears7to11" tabindex= -1
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" id="aYears12to15"
												ng-model="openShelterCCI.aYears12to15" tabindex= -1
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" id="aYears16to18"
												ng-model="openShelterCCI.aYears16to18" tabindex= -1
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" id="aYearsGreaterThan18"
												ng-model="openShelterCCI.aYearsGreaterThan18" tabindex= -1
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" only-four-digits
												id="aTotal" disabled 
												ng-model="openShelterCCI.aTotal"
												ng-init="openShelterCCI.aTotal=0"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- --------------------------------   End Of A Section     ---------------------------------------------------- -->
							<div class="b4sectionheading" id="caseB"></div>
							<div class="grey-header headMarg">B. New Children Admitted in the month</div>

							<div class="labelFont ">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Children admitted in the reporting month</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.1.
														Referred by CWC </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="b1Years0to6"
												ng-model="openShelterCCI.b1Years0to6"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years0to6, openShelterCCI.b2Years0to6, 'b1Years0to6', 'eYears0to6', '0-6')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1Years7to11"
												ng-model="openShelterCCI.b1Years7to11"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years7to11, openShelterCCI.b2Years7to11, 'b1Years7to11', 'eYears7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1Years12to15"
												ng-model="openShelterCCI.b1Years12to15"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years12to15, openShelterCCI.b2Years12to15, 'b1Years12to15', 'eYears12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1Years16to18"
												ng-model="openShelterCCI.b1Years16to18"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years16to18, openShelterCCI.b2Years16to18, 'b1Years16to18', 'eYears16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1YearsGreaterThan18"
												ng-model="openShelterCCI.b1YearsGreaterThan18"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1YearsGreaterThan18, openShelterCCI.b2YearsGreaterThan18, 'b1YearsGreaterThan18', 'eYearsGreaterThan18', '> 18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>

											<td><input type="text" readonly id="b1Total" tabindex= -1
												value="{{Number(openShelterCCI.b1Years0to6-0)+Number(openShelterCCI.b1Years7to11-0)+Number(openShelterCCI.b1Years12to15-0)+
												Number(openShelterCCI.b1Years16to18-0)+Number(openShelterCCI.b1YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.2.
														Referred by Others</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="b2Years0to6"
												ng-model="openShelterCCI.b2Years0to6"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years0to6, openShelterCCI.b2Years0to6, 'b2Years0to6', 'eYears0to6', '0-6')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2Years7to11"
												ng-model="openShelterCCI.b2Years7to11"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years7to11, openShelterCCI.b2Years7to11, 'b2Years7to11', 'eYears7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2Years12to15"
												ng-model="openShelterCCI.b2Years12to15"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years12to15, openShelterCCI.b2Years12to15, 'b2Years12to15', 'eYears12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2Years16to18"
												ng-model="openShelterCCI.b2Years16to18"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1Years16to18, openShelterCCI.b2Years16to18, 'b2Years16to18', 'eYears16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2YearsGreaterThan18"
												ng-model="openShelterCCI.b2YearsGreaterThan18"
												ng-disabled="openShelterCCI.submitted"
												ng-blur="validateWithE(openShelterCCI.b1YearsGreaterThan18, openShelterCCI.b2YearsGreaterThan18, 'b2YearsGreaterThan18', 'eYearsGreaterThan18', '> 18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="text" readonly id="b2Total" tabindex= -1
												value="{{Number(openShelterCCI.b2Years0to6-0)+Number(openShelterCCI.b2Years7to11-0)+Number(openShelterCCI.b2Years12to15-0)+
												Number(openShelterCCI.b2Years16to18-0)+Number(openShelterCCI.b2YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">B.3.
														Total No. of Children Referred</label>
												</div>
											</td>
											<!-- ng-model="openShelterCCI.b3Age0to6"
												ng-init="openShelterCCI.b3Age0to6=0" -->
											<td><input type="text" ng-disabled="true" id="b3Years0to6" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
												value="{{Number(openShelterCCI.b1Years0to6-0)+Number(openShelterCCI.b2Years0to6-0)}}">
											</td>
											<td><input type="text" ng-disabled="true" id="b3Years7to11" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
												value="{{Number(openShelterCCI.b1Years7to11-0)+Number(openShelterCCI.b2Years7to11-0)}}">
											</td>
											<td><input type="text" ng-disabled="true" id="b3Years12to15" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
												value="{{Number(openShelterCCI.b1Years12to15-0)+Number(openShelterCCI.b2Years12to15-0)}}">
											</td>
											<td><input type="text" ng-disabled="true" id="b3Years16to18" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
												value="{{Number(openShelterCCI.b1Years16to18-0)+Number(openShelterCCI.b2Years16to18-0)}}">
											</td>
											<td><input type="text" ng-disabled="true" id="b3YearsGreaterThan18" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
												value="{{Number(openShelterCCI.b1YearsGreaterThan18-0)+Number(openShelterCCI.b2YearsGreaterThan18-0)}}">
											</td>
											<td><input type="text" readonly id="b3Total" tabindex= -1
												value="{{Number(openShelterCCI.b1Years0to6-0)+Number(openShelterCCI.b1Years7to11-0)+Number(openShelterCCI.b1Years12to15-0)+
														Number(openShelterCCI.b1Years16to18-0)+Number(openShelterCCI.b1YearsGreaterThan18-0)+
														Number(openShelterCCI.b2Years0to6-0)+Number(openShelterCCI.b2Years7to11-0)+Number(openShelterCCI.b2Years12to15-0)+
														Number(openShelterCCI.b2Years16to18-0)+Number(openShelterCCI.b2YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- ------------------------End Of B Section ---------------------------------------- -->
							
                       <div class="b4sectionheading" id="caseC"></div>
							<div class="grey-header headMarg">
								C. Total Children in the Month</div>

							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> C.1.
													 Age distribution of Children in the reporting month</label></td>
											<td><input type="text" disabled id="cYears0to6" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.aYears0to6-0)+Number(openShelterCCI.b1Years0to6-0)+Number(openShelterCCI.b2Years0to6-0)}}">
											</td>
											<td><input type="text" disabled id="cYears7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.aYears7to11-0)+Number(openShelterCCI.b1Years7to11-0)+Number(openShelterCCI.b2Years7to11-0)}}">
											</td>
											<td><input type="text" disabled id="cYears12to15" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.aYears12to15-0)+Number(openShelterCCI.b1Years12to15-0)+Number(openShelterCCI.b2Years12to15-0)}}">
											</td>
											<td><input type="text" disabled id="cYears16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.aYears16to18-0)+Number(openShelterCCI.b1Years16to18-0)+Number(openShelterCCI.b2Years16to18-0)}}">
											</td>
											<td><input type="text" disabled  id="cYearsGreaterThan18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.aYearsGreaterThan18-0)+Number(openShelterCCI.b1YearsGreaterThan18-0)+Number(openShelterCCI.b2YearsGreaterThan18-0)}}">
											</td>
											<td><input type="text" disabled id="cTotal" tabindex= -1
											 class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.aYears0to6-0)+Number(openShelterCCI.aYears7to11-0)+Number(openShelterCCI.aYears12to15-0)+
														Number(openShelterCCI.aYears16to18-0)+Number(openShelterCCI.aYearsGreaterThan18-0)+
														Number(openShelterCCI.b1Years0to6-0)+Number(openShelterCCI.b1Years7to11-0)+Number(openShelterCCI.b1Years12to15-0)+
														Number(openShelterCCI.b1Years16to18-0)+Number(openShelterCCI.b1YearsGreaterThan18-0)+
														Number(openShelterCCI.b2Years0to6-0)+Number(openShelterCCI.b2Years7to11-0)+Number(openShelterCCI.b2Years12to15-0)+
														Number(openShelterCCI.b2Years16to18-0)+Number(openShelterCCI.b2YearsGreaterThan18-0)}}">
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- ----------------------- End Of  C Section  ---------------------------------- -->
							<div class="b4sectionheading" id="caseD"></div>

							<div class="grey-header headMarg">
								D. Institutions/Persons Where Children Referred</div>
									
							<div class="labelFont ">
								<table class="table table-bordered table-margintop" id="tableD">
									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.1.
														Transferred to Other Home </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="d1Years0to6"
												ng-model="openShelterCCI.d1Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd1Years0to6', '0-6')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d1Years7to11"
												ng-model="openShelterCCI.d1Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd1Years7to11', '7-11')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d1Years12to15"
												ng-model="openShelterCCI.d1Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd1Years12to15', '12-15')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d1Years16to18"
												ng-model="openShelterCCI.d1Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd1Years16to18', '16-18')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d1YearsGreaterThan18"
												ng-model="openShelterCCI.d1YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd1YearsGreaterThan18', '>18')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>

											<td><input type="text" readonly id="d1Total" tabindex= -1
												value="{{Number(openShelterCCI.d1Years0to6-0)+
														 Number(openShelterCCI.d1Years7to11-0)+
														 Number(openShelterCCI.d1Years12to15-0)+
														 Number(openShelterCCI.d1Years16to18-0)+
														 Number(openShelterCCI.d1YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.2.
														Restored to Family</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="d2Years0to6"
												ng-model="openShelterCCI.d2Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd2Years0to6', '0-6')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d2Years7to11"
												ng-model="openShelterCCI.d2Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd2Years7to11', '7-11')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d2Years12to15"
												ng-model="openShelterCCI.d2Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd2Years12to15', '12-15')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d2Years16to18"
												ng-model="openShelterCCI.d2Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd2Years16to18', '16-18')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="d2YearsGreaterThan18"
												ng-model="openShelterCCI.d2YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd2YearsGreaterThan18', '>18')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d2Total" tabindex= -1
												value="{{Number(openShelterCCI.d2Years0to6-0)+
														 Number(openShelterCCI.d2Years7to11-0)+
														 Number(openShelterCCI.d2Years12to15-0)+
														 Number(openShelterCCI.d2Years16to18-0)+
														 Number(openShelterCCI.d2YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.3.
														Admitted to Residential School</label>
												</div>
											</td>
											
											<td><input type="number" ng-disabled=openShelterCCI.submitted id="d3Years0to6" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears0to6', 'd3Years0to6', '0-6')"
												ng-model="openShelterCCI.d3Years0to6">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d3Years7to11" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears7to11', 'd3Years7to11', '7-11')"
												ng-model="openShelterCCI.d3Years7to11">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d3Years12to15" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears12to15', 'd3Years12to15', '12-15')"
												ng-model="openShelterCCI.d3Years12to15">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d3Years16to18" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears16to18', 'd3Years16to18', '16-18')"
												ng-model="openShelterCCI.d3Years16to18">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d3YearsGreaterThan18" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd3YearsGreaterThan18', '>18')"
												ng-model="openShelterCCI.d3YearsGreaterThan18">
											</td>
											<td><input type="text" readonly id="d3Total" tabindex= -1
												value="{{Number(openShelterCCI.d3Years0to6-0)+
														 Number(openShelterCCI.d3Years7to11-0)+
														 Number(openShelterCCI.d3Years12to15-0)+
														 Number(openShelterCCI.d3Years16to18-0)+
														 Number(openShelterCCI.d3YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.4.
														Runaway/Missing</label>
												</div>
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d4Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd4Years0to6', '0-6')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits required
												ng-model="openShelterCCI.d4Years0to6">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d4Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd4Years7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits required
												ng-model="openShelterCCI.d4Years7to11">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d4Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd4Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits required
												ng-model="openShelterCCI.d4Years12to15">
											</td> 
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d4Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd4Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits required
												ng-model="openShelterCCI.d4Years16to18">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d4YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd4YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits required
												ng-model="openShelterCCI.d4YearsGreaterThan18">
											</td>
											<td><input type="text" readonly id="d4Total" tabindex= -1
												value="{{Number(openShelterCCI.d4Years0to6-0)+
														 Number(openShelterCCI.d4Years7to11-0)+
														 Number(openShelterCCI.d4Years12to15-0)+
														 Number(openShelterCCI.d4Years16to18-0)+
														 Number(openShelterCCI.d4YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.5.
														Death</label>
												</div>
											</td>
											
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d5Years0to6" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears0to6', 'd5Years0to6', '0-6')"
												ng-model="openShelterCCI.d5Years0to6">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d5Years7to11" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears7to11', 'd5Years7to11', '7-11')"
												ng-model="openShelterCCI.d5Years7to11">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d5Years12to15" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears12to15', 'd5Years12to15', '12-15')"
												ng-model="openShelterCCI.d5Years12to15">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d5Years16to18" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears16to18', 'd5Years16to18', '16-18')"
												ng-model="openShelterCCI.d5Years16to18">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d5YearsGreaterThan18" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd5YearsGreaterThan18', '>18')"
												ng-model="openShelterCCI.d5YearsGreaterThan18"> 
											</td>
											<td><input type="text" readonly id="d5Total" tabindex= -1
												value="{{Number(openShelterCCI.d5Years0to6-0)+
														 Number(openShelterCCI.d5Years7to11-0)+
														 Number(openShelterCCI.d5Years12to15-0)+
														 Number(openShelterCCI.d5Years16to18-0)+
														 Number(openShelterCCI.d5YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.6.
														 Any other Institution/Program</label>
												</div>
											</td>
											<!-- ng-model="openShelterCCI.b3Age0to6"
												ng-init="openShelterCCI.b3Age0to6=0" -->
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d6Years0to6" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"  ng-keyup="calculateWithC('cYears0to6', 'd6Years0to6', '0-6')"
												ng-keyup="resetD6a(Number(openShelterCCI.d6Years0to6-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0));"
												ng-keyup="resetD6();"
												ng-model="openShelterCCI.d6Years0to6">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d6Years7to11" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears7to11', 'd6Years7to11', '7-11')"
												ng-keyup="resetD6a(Number(openShelterCCI.d6Years0to6-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0))"
														 ng-keyup="resetD6();"
												ng-model="openShelterCCI.d6Years7to11">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d6Years12to15" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears12to15', 'd6Years12to15', '12-15')"
												ng-keyup="resetD6a(Number(openShelterCCI.d6Years0to6-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0))"
														 ng-keyup="resetD6();"
												ng-model="openShelterCCI.d6Years12to15">
											</td> 
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d6Years16to18" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYears16to18', 'd6Years16to18', '16-18')"
												ng-keyup="resetD6a(Number(openShelterCCI.d6Years0to6-0)+ 
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0));"
														 ng-keyup="resetD6();"
												ng-model="openShelterCCI.d6Years16to18">
											</td>
											<td><input type="number" ng-disabled="openShelterCCI.submitted" id="d6YearsGreaterThan18" only-four-digits required
												class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd6YearsGreaterThan18', '>18')"
												ng-keyup="resetD6a(Number(openShelterCCI.d6Years0to6-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0));"
														 ng-keyup="resetD6();"
												ng-model="openShelterCCI.d6YearsGreaterThan18">
											</td>
											<td><input type="text" readonly id="d6Total" tabindex= -1 
												value="{{Number(openShelterCCI.d6Years0to6-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr ng-show="showHideBasedOnFlag('d6Total','d6aSpecifyothers')">
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.6.a
														 Please specify, if other</label>
												</div>
											</td>
											<td colspan="6"><input type="text" ng-disabled="openShelterCCI.submitted" id="d6aSpecifyothers"
												ng-required="Number(openShelterCCI.d6Years0to6-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0) > 0"
											    class="form-control inputBackground tableinputWidth " address-validation
												ng-model="openShelterCCI.d6aSpecifyothers">
											</td>
											
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">D.7.
														  Total no. of children referred</label>
												</div>
											</td>
											
											<td><input type="text" readonly id="d7Years0to6" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(openShelterCCI.d1Years0to6-0)+
														 Number(openShelterCCI.d2Years0to6-0)+
														 Number(openShelterCCI.d3Years0to6-0)+
														 Number(openShelterCCI.d4Years0to6-0)+
														 Number(openShelterCCI.d5Years0to6-0)+
														 Number(openShelterCCI.d6Years0to6-0)}}">
											</td>
											<td><input type="text" readonly id="d7Years7to11" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(openShelterCCI.d1Years7to11-0)+
														 Number(openShelterCCI.d2Years7to11-0)+
														 Number(openShelterCCI.d3Years7to11-0)+
														 Number(openShelterCCI.d4Years7to11-0)+
														 Number(openShelterCCI.d5Years7to11-0)+
														 Number(openShelterCCI.d6Years7to11-0)}}">
											</td>
											<td><input type="text" readonly id="d7Years12to15" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(openShelterCCI.d1Years12to15-0)+
														 Number(openShelterCCI.d2Years12to15-0)+
														 Number(openShelterCCI.d3Years12to15-0)+
														 Number(openShelterCCI.d4Years12to15-0)+
														 Number(openShelterCCI.d5Years12to15-0)+
														 Number(openShelterCCI.d6Years12to15-0)}}">
											</td>
											<td><input type="text" readonly id="d7Years16to18" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(openShelterCCI.d1Years16to18-0)+
														 Number(openShelterCCI.d2Years16to18-0)+
														 Number(openShelterCCI.d3Years16to18-0)+
														 Number(openShelterCCI.d4Years16to18-0)+
														 Number(openShelterCCI.d5Years16to18-0)+
														 Number(openShelterCCI.d6Years16to18-0)}}">
											</td>
											<td><input type="text" readonly  id="d7YearsGreaterThan18" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(openShelterCCI.d1YearsGreaterThan18-0)+
														 Number(openShelterCCI.d2YearsGreaterThan18-0)+
														 Number(openShelterCCI.d3YearsGreaterThan18-0)+
														 Number(openShelterCCI.d4YearsGreaterThan18-0)+
														 Number(openShelterCCI.d5YearsGreaterThan18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0)}}">
											</td>
											<td><input type="text" readonly id="d7Total" tabindex= -1
												value="{{Number(openShelterCCI.d1Years0to6-0)+
														 Number(openShelterCCI.d2Years0to6-0)+
														 Number(openShelterCCI.d3Years0to6-0)+
														 Number(openShelterCCI.d4Years0to6-0)+
														 Number(openShelterCCI.d5Years0to6-0)+
														 Number(openShelterCCI.d6Years0to6-0)+
														 
														 Number(openShelterCCI.d1Years7to11-0)+
														 Number(openShelterCCI.d2Years7to11-0)+
														 Number(openShelterCCI.d3Years7to11-0)+
														 Number(openShelterCCI.d4Years7to11-0)+
														 Number(openShelterCCI.d5Years7to11-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 
														 Number(openShelterCCI.d1Years12to15-0)+
														 Number(openShelterCCI.d2Years12to15-0)+
														 Number(openShelterCCI.d3Years12to15-0)+
														 Number(openShelterCCI.d4Years12to15-0)+
														 Number(openShelterCCI.d5Years12to15-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 
														 Number(openShelterCCI.d1Years16to18-0)+
														 Number(openShelterCCI.d2Years16to18-0)+
														 Number(openShelterCCI.d3Years16to18-0)+
														 Number(openShelterCCI.d4Years16to18-0)+
														 Number(openShelterCCI.d5Years16to18-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 
														 Number(openShelterCCI.d1YearsGreaterThan18-0)+
														 Number(openShelterCCI.d2YearsGreaterThan18-0)+
														 Number(openShelterCCI.d3YearsGreaterThan18-0)+
														 Number(openShelterCCI.d4YearsGreaterThan18-0)+
														 Number(openShelterCCI.d5YearsGreaterThan18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0)}}"
														 
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- ---------------------- End Of D Section   ------------------------- -->
							<div class="b4sectionheading" id="caseE"></div>

							<div class="grey-header headMarg">E.
								Children on the Last Day of the Reporting Month</div>

							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableE">
									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> E.1.
													Age distribution of Children on the last day of the reporting month</label></td>
											<td><input type="text"  readonly
												id="eYears0to6" tabindex= -1
												value="{{
												Number( Number(openShelterCCI.aYears0to6-0)+
														Number(openShelterCCI.b1Years0to6-0)+
														Number(openShelterCCI.b2Years0to6-0)-0)
												-
												Number(Number(openShelterCCI.d1Years0to6-0)+
														 Number(openShelterCCI.d2Years0to6-0)+
														 Number(openShelterCCI.d3Years0to6-0)+
														 Number(openShelterCCI.d4Years0to6-0)+
														 Number(openShelterCCI.d5Years0to6-0)+
														 Number(openShelterCCI.d6Years0to6-0)-0)
												}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
												
											<td><input type="text"  readonly
												 id="eYears7to11" tabindex= -1
												 value="{{
												 Number(Number(openShelterCCI.aYears7to11-0)+
												 Number(openShelterCCI.b1Years7to11-0)+
												 Number(openShelterCCI.b2Years7to11-0)-0)
												 -
												 Number(Number(openShelterCCI.d1Years7to11-0)+
														 Number(openShelterCCI.d2Years7to11-0)+
														 Number(openShelterCCI.d3Years7to11-0)+
														 Number(openShelterCCI.d4Years7to11-0)+
														 Number(openShelterCCI.d5Years7to11-0)+
														 Number(openShelterCCI.d6Years7to11-0)-0)
												 
												 }}"
												 ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
												
											<td><input type="text"  readonly tabindex= -1
												value="{{
												Number(Number(openShelterCCI.aYears12to15-0)+
												Number(openShelterCCI.b1Years12to15-0)+
												Number(openShelterCCI.b2Years12to15-0)-0)
												-
												Number(Number(openShelterCCI.d1Years12to15-0)+
														 Number(openShelterCCI.d2Years12to15-0)+
														 Number(openShelterCCI.d3Years12to15-0)+
														 Number(openShelterCCI.d4Years12to15-0)+
														 Number(openShelterCCI.d5Years12to15-0)+
														 Number(openShelterCCI.d6Years12to15-0)-0)
												}}"
												id="eYears12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
												
											<td><input type="text"  readonly tabindex= -1
												value="{{
												Number(Number(openShelterCCI.aYears16to18-0)+
												Number(openShelterCCI.b1Years16to18-0)+
												Number(openShelterCCI.b2Years16to18-0)-0)
												-
												Number(Number(openShelterCCI.d1Years16to18-0)+
														 Number(openShelterCCI.d2Years16to18-0)+
														 Number(openShelterCCI.d3Years16to18-0)+
														 Number(openShelterCCI.d4Years16to18-0)+
														 Number(openShelterCCI.d5Years16to18-0)+
														 Number(openShelterCCI.d6Years16to18-0)-0)
												}}"
												 id="eYears16to18"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
												
											<td><input type="text"  readonly tabindex= -1
												value="{{
												Number(Number(openShelterCCI.aYearsGreaterThan18-0)+
												Number(openShelterCCI.b1YearsGreaterThan18-0)+
												Number(openShelterCCI.b2YearsGreaterThan18-0)-0)												
												-
												Number(Number(openShelterCCI.d1YearsGreaterThan18-0)+
												 Number(openShelterCCI.d2YearsGreaterThan18-0)+
												 Number(openShelterCCI.d3YearsGreaterThan18-0)+
												 Number(openShelterCCI.d4YearsGreaterThan18-0)+
												 Number(openShelterCCI.d5YearsGreaterThan18-0)+
												 Number(openShelterCCI.d6YearsGreaterThan18-0)-0)
												
												}}"
												id="eYearsGreaterThan18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
												
											<td><input type="text"  readonly
												id="eTotal" tabindex= -1
												value="{{
												Number(Number(openShelterCCI.aYears0to6-0)+Number(openShelterCCI.aYears7to11-0)+Number(openShelterCCI.aYears12to15-0)+
														Number(openShelterCCI.aYears16to18-0)+Number(openShelterCCI.aYearsGreaterThan18-0)+
														Number(openShelterCCI.b1Years0to6-0)+Number(openShelterCCI.b1Years7to11-0)+Number(openShelterCCI.b1Years12to15-0)+
														Number(openShelterCCI.b1Years16to18-0)+Number(openShelterCCI.b1YearsGreaterThan18-0)+
														Number(openShelterCCI.b2Years0to6-0)+Number(openShelterCCI.b2Years7to11-0)+Number(openShelterCCI.b2Years12to15-0)+
														Number(openShelterCCI.b2Years16to18-0)+Number(openShelterCCI.b2YearsGreaterThan18-0)-0)
														-
												Number(Number(openShelterCCI.d1Years0to6-0)+
														 Number(openShelterCCI.d2Years0to6-0)+
														 Number(openShelterCCI.d3Years0to6-0)+
														 Number(openShelterCCI.d4Years0to6-0)+
														 Number(openShelterCCI.d5Years0to6-0)+
														 Number(openShelterCCI.d6Years0to6-0)+
														 
														 Number(openShelterCCI.d1Years7to11-0)+
														 Number(openShelterCCI.d2Years7to11-0)+
														 Number(openShelterCCI.d3Years7to11-0)+
														 Number(openShelterCCI.d4Years7to11-0)+
														 Number(openShelterCCI.d5Years7to11-0)+
														 Number(openShelterCCI.d6Years7to11-0)+
														 
														 Number(openShelterCCI.d1Years12to15-0)+
														 Number(openShelterCCI.d2Years12to15-0)+
														 Number(openShelterCCI.d3Years12to15-0)+
														 Number(openShelterCCI.d4Years12to15-0)+
														 Number(openShelterCCI.d5Years12to15-0)+
														 Number(openShelterCCI.d6Years12to15-0)+
														 
														 Number(openShelterCCI.d1Years16to18-0)+
														 Number(openShelterCCI.d2Years16to18-0)+
														 Number(openShelterCCI.d3Years16to18-0)+
														 Number(openShelterCCI.d4Years16to18-0)+
														 Number(openShelterCCI.d5Years16to18-0)+
														 Number(openShelterCCI.d6Years16to18-0)+
														 
														 Number(openShelterCCI.d1YearsGreaterThan18-0)+
														 Number(openShelterCCI.d2YearsGreaterThan18-0)+
														 Number(openShelterCCI.d3YearsGreaterThan18-0)+
														 Number(openShelterCCI.d4YearsGreaterThan18-0)+
														 Number(openShelterCCI.d5YearsGreaterThan18-0)+
														 Number(openShelterCCI.d6YearsGreaterThan18-0)-0)
												}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth  readonlyStyle">
												</td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- -------------------------End Of E Section------------------------------------------ -->

							<div class="b4sectionheading" id="caseF"></div>
							<div class="grey-header headMarg">
								F.  Category wise break up of cases as on last day of month </div>
							<div class="labelFont ">
								<table class="table table-bordered table-margintop" id="tableF">
									<thead>
										<tr>
											<th>Description</th>
											<th>ST</th>
											<th>SC</th>
											<th>EBC</th>
											<th>OBC</th>
											<th>Others</th>
											<th>Not Known</th>
											<th>Total</th>
											<th>Minority</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">F.1.
														Total Children </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="fST"
												ng-model="openShelterCCI.fST"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fSC"
												ng-model="openShelterCCI.fSC"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fEBC"
												ng-model="openShelterCCI.fEBC"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fOBC"
												ng-model="openShelterCCI.fOBC"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fOthers"
												ng-model="openShelterCCI.fOthers"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fNotKnown"
												ng-model="openShelterCCI.fNotKnown"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="fTotal" tabindex= -1
												value="{{Number(openShelterCCI.fST-0)+Number(openShelterCCI.fSC-0)+Number(openShelterCCI.fOBC-0)+
												Number(openShelterCCI.fEBC-0)+Number(openShelterCCI.fOthers-0)+Number(openShelterCCI.fNotKnown-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
											<td><input type="number" required only-four-digits id="fMinority"
												ng-model="openShelterCCI.fMinority"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<!-- --------------------------- End Of F Section  ---------------------------------- -->

							<div class="b4sectionheading" id="caseG"></div>
							<div class="grey-header headMarg">
								G.  Educational status of Children in the CCI</div>
								
								<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableG">
									<thead>
										<tr>
											<th>Educational description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> G.1.
													Children enrolled in Special training (RTE)/ Bridge course</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g1Years0to6" id="g1Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g1Years7to11" id="g1Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g1Years12to15" id="g1Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g1Years16to18" id="g1Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g1YearsGreaterThan18"
												id="g1YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text"  readonly
												id="g1Total"  tabindex= -1
												value="{{Number(openShelterCCI.g1Years0to6-0)+Number(openShelterCCI.g1Years7to11-0)+
														Number(openShelterCCI.g1Years12to15-0)+Number(openShelterCCI.g1Years16to18-0)+
														Number(openShelterCCI.g1YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
												</td>
										</tr>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> G.2.
													Attending pre-school</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g2Years0to6" id="g2Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g2Years7to11" id="g2Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g2Years12to15" id="g2Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g2Years16to18" id="g2Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g2YearsGreaterThan18"
												id="g2YearsGreaterThan18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text" readonly
												id="g2Total" tabindex= -1
												value="{{Number(openShelterCCI.g2Years0to6-0)+Number(openShelterCCI.g2Years7to11-0)+
														Number(openShelterCCI.g2Years12to15-0)+Number(openShelterCCI.g2Years16to18-0)+
														Number(openShelterCCI.g2YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> G.3.
													Attending non-formal education classes within home</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g3Years0to6" id="g3Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g3Years7to11" id="g3Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g3Years12to15" id="g3Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g3Years16to18" id="g3Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g3YearsGreaterThan18"
												id="g3YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text"  readonly
												id="g3Total" tabindex= -1
												value="{{Number(openShelterCCI.g3Years0to6-0)+Number(openShelterCCI.g3Years7to11-0)+
														Number(openShelterCCI.g3Years12to15-0)+Number(openShelterCCI.g3Years16to18-0)+
														Number(openShelterCCI.g3YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth  readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> G.4.
													Attending formal education in regular school</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g4Years0to6" id="g4Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g4Years7to11" id="g4Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g4Years12to15" id="g4Years12to15"
												ng-keyup="validateE('e3')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g4Years16to18" id="g4Years16to18"
												ng-keyup="validateE('e4')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g4YearsGreaterThan18"
												id="g4YearsGreaterThan18" ng-keyup="validateE('e5')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text" readonly
												id="g4Total"  tabindex= -1
												value="{{Number(openShelterCCI.g4Years0to6-0)+Number(openShelterCCI.g4Years7to11-0)+
														Number(openShelterCCI.g4Years12to15-0)+Number(openShelterCCI.g4Years16to18-0)+
														Number(openShelterCCI.g4YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> G.5.
													Not enrolled in any educational programme</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g5Years0to6" id="g5Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												<div id="e1" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g5Years7to11" id="g5Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												<div id="e2" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g5Years12to15" id="g5Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												<div id="e3" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g5Years16to18" id="g5Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												<div id="e4" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g5YearsGreaterThan18"
												id="g5YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text"  readonly
												id="g5Total"  tabindex= -1
												value="{{Number(openShelterCCI.g5Years0to6-0)+Number(openShelterCCI.g5Years7to11-0)+
														Number(openShelterCCI.g5Years12to15-0)+Number(openShelterCCI.g5Years16to18-0)+
														Number(openShelterCCI.g5YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
										</tr>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> G.6.
													Enrolled for Vocational Training</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g6Years0to6" id="g6Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g6Years7to11" id="g6Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g6Years12to15" id="g6Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g6Years16to18" id="g6Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.g6YearsGreaterThan18"
												id="g6YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text"  readonly
												id="g6Total"  tabindex= -1
												value="{{Number(openShelterCCI.g6Years0to6-0)+Number(openShelterCCI.g6Years7to11-0)+
														Number(openShelterCCI.g6Years12to15-0)+Number(openShelterCCI.g6Years16to18-0)+
														Number(openShelterCCI.g6YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> G.7.
													Total no. of children attending any educational programme</label></td>
											<td><input type="text" readonly
												 id="g7Years0to6" tabindex= -1
												 value="{{Number(openShelterCCI.g1Years0to6-0)+Number(openShelterCCI.g2Years0to6-0)+
												 Number(openShelterCCI.g3Years0to6-0)+Number(openShelterCCI.g4Years0to6-0)+
												 Number(openShelterCCI.g5Years0to6-0)+Number(openShelterCCI.g6Years0to6-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text"  readonly
												 id="g7Years7to11" tabindex= -1
												 value="{{Number(openShelterCCI.g1Years7to11-0)+Number(openShelterCCI.g2Years7to11-0)+
												 Number(openShelterCCI.g3Years7to11-0)+Number(openShelterCCI.g4Years7to11-0)+
												 Number(openShelterCCI.g5Years7to11-0)+Number(openShelterCCI.g6Years7to11-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												 id="g7Years12to15" tabindex= -1
												 value="{{Number(openShelterCCI.g1Years12to15-0)+Number(openShelterCCI.g2Years12to15-0)+
												 Number(openShelterCCI.g3Years12to15-0)+Number(openShelterCCI.g4Years12to15-0)+
												 Number(openShelterCCI.g5Years12to15-0)+Number(openShelterCCI.g6Years12to15-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												 id="g7Years16to18" tabindex= -1
												 value="{{Number(openShelterCCI.g1Years16to18-0)+Number(openShelterCCI.g2Years16to18-0)+
												 Number(openShelterCCI.g3Years16to18-0)+Number(openShelterCCI.g4Years16to18-0)+
												 Number(openShelterCCI.g5Years16to18-0)+Number(openShelterCCI.g6Years16to18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												id="g7YearsGreaterThan18" tabindex= -1
												value="{{Number(openShelterCCI.g1YearsGreaterThan18-0)+Number(openShelterCCI.g2YearsGreaterThan18-0)+
												Number(openShelterCCI.g3YearsGreaterThan18-0)+Number(openShelterCCI.g4YearsGreaterThan18-0)+
												Number(openShelterCCI.g5YearsGreaterThan18-0)+Number(openShelterCCI.g6YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												id="g7Total"  tabindex= -1
												value="{{Number(openShelterCCI.g1Years0to6-0)+Number(openShelterCCI.g2Years0to6-0)+
												 Number(openShelterCCI.g3Years0to6-0)+Number(openShelterCCI.g4Years0to6-0)+
												 Number(openShelterCCI.g5Years0to6-0)+Number(openShelterCCI.g6Years0to6-0)+
												 Number(openShelterCCI.g1Years7to11-0)+Number(openShelterCCI.g2Years7to11-0)+
												 Number(openShelterCCI.g3Years7to11-0)+Number(openShelterCCI.g4Years7to11-0)+
												 Number(openShelterCCI.g5Years7to11-0)+Number(openShelterCCI.g6Years7to11-0)+
												 Number(openShelterCCI.g1Years12to15-0)+Number(openShelterCCI.g2Years12to15-0)+
												 Number(openShelterCCI.g3Years12to15-0)+Number(openShelterCCI.g4Years12to15-0)+
												 Number(openShelterCCI.g5Years12to15-0)+Number(openShelterCCI.g6Years12to15-0)+
												 Number(openShelterCCI.g1Years16to18-0)+Number(openShelterCCI.g2Years16to18-0)+
												 Number(openShelterCCI.g3Years16to18-0)+Number(openShelterCCI.g4Years16to18-0)+
												 Number(openShelterCCI.g5Years16to18-0)+Number(openShelterCCI.g6Years16to18-0)+
												 Number(openShelterCCI.g1YearsGreaterThan18-0)+Number(openShelterCCI.g2YearsGreaterThan18-0)+
												 Number(openShelterCCI.g3YearsGreaterThan18-0)+Number(openShelterCCI.g4YearsGreaterThan18-0)+
												 Number(openShelterCCI.g5YearsGreaterThan18-0)+Number(openShelterCCI.g6YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<!-- ------------------------------- Section H -------------------------------- -->
							
							<div class="b4sectionheading" id="caseH"></div>
							<div class="grey-header headMarg">H. Health Status of the Children residing in the CCI</div>
							
							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableH">
									<thead>
										<tr>
											<th>Health Status of Children in CCI</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> H.1.
													Children Mentally Challenged</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h1Years0to6" id="h1Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h1Years7to11" id="h1Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h1Years12to15" id="h1Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h1Years16to18" id="h1Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h1YearsGreaterThan18"
												id="h1YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text"  readonly
												id="h1Total"  tabindex= -1
												value="{{Number(openShelterCCI.h1Years0to6-0)+
														Number(openShelterCCI.h1Years7to11-0)+
														Number(openShelterCCI.h1Years12to15-0)+
														Number(openShelterCCI.h1Years16to18-0)+
														Number(openShelterCCI.h1YearsGreaterThan18-0)
														}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth  readonlyStyle">
												</td>
										</tr>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> H.2.
													Children Physically Challenged</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h2Years0to6" id="h2Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h2Years7to11" id="h2Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h2Years12to15" id="h2Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h2Years16to18" id="h2Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h2YearsGreaterThan18"
												id="h2YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text" readonly
												id="h2Total"  tabindex= -1
												value="{{Number(openShelterCCI.h2Years0to6-0)+
														Number(openShelterCCI.h2Years7to11-0)+
														Number(openShelterCCI.h2Years12to15-0)+
														Number(openShelterCCI.h2Years16to18-0)+
														Number(openShelterCCI.h2YearsGreaterThan18-0)
														}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> H.3.
													Children suffering with critical illness (TB, HIV/AIDS etc)</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h3Years0to6" id="h3Years0to6"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h3Years7to11" id="h3Years7to11"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h3Years12to15" id="h3Years12to15"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h3Years16to18" id="h3Years16to18"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h3YearsGreaterThan18"
												id="h3YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text" readonly
												id="h3Total"  tabindex= -1
												value="{{Number(openShelterCCI.h3Years0to6-0)+
														Number(openShelterCCI.h3Years7to11-0)+
														Number(openShelterCCI.h3Years12to15-0)+
														Number(openShelterCCI.h3Years16to18-0)+
														Number(openShelterCCI.h3YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> H.4.
													Children with Multiple Disability</label></td>
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h4Years0to6" id="h4Years0to6"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h4Years7to11" id="h4Years7to11"
												
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h4Years12to15" id="h4Years12to15"
												
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h4Years16to18" id="h4Years16to18"
												
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="number" required only-four-digits
												ng-model="openShelterCCI.h4YearsGreaterThan18"
												id="h4YearsGreaterThan18" 
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
												</td>
												
											<td><input type="text" readonly
												id="h4Total" tabindex= -1
												value="{{Number(openShelterCCI.h4Years0to6-0)+
														Number(openShelterCCI.h4Years7to11-0)+
														Number(openShelterCCI.h4Years12to15-0)+
														Number(openShelterCCI.h4Years16to18-0)+
														Number(openShelterCCI.h4YearsGreaterThan18-0)}}" 
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
												</td>
										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> H.5.
													Total Children</label></td>
											<td><input type="text" readonly
												 id="h5Years0to6" tabindex= -1
												 value="{{Number(openShelterCCI.h1Years0to6-0)+
												 		  Number(openShelterCCI.h2Years0to6-0)+
												 		  Number(openShelterCCI.h3Years0to6-0)+
												 		  Number(openShelterCCI.h4Years0to6-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												 id="h5Years7to11" tabindex= -1
												 value="{{Number(openShelterCCI.h1Years7to11-0)+
												 		  Number(openShelterCCI.h2Years7to11-0)+
												 		  Number(openShelterCCI.h3Years7to11-0)+
												 		  Number(openShelterCCI.h4Years7to11-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												 id="h5Years12to15" tabindex= -1
												 value="{{Number(openShelterCCI.h1Years12to15-0)+
												          Number(openShelterCCI.h2Years12to15-0)+
												          Number(openShelterCCI.h3Years12to15-0)+
												          Number(openShelterCCI.h4Years12to15-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												 id="h5Years16to18" tabindex= -1
												 value="{{Number(openShelterCCI.h1Years16to18-0)+
												 		  Number(openShelterCCI.h2Years16to18-0)+
												 		  Number(openShelterCCI.h3Years16to18-0)+
												 		  Number(openShelterCCI.h4Years16to18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												id="h5YearsGreaterThan18"  tabindex= -1
												value="{{Number(openShelterCCI.h1YearsGreaterThan18-0)+
														Number(openShelterCCI.h2YearsGreaterThan18-0)+
														Number(openShelterCCI.h3YearsGreaterThan18-0)+
														Number(openShelterCCI.h4YearsGreaterThan18-0)}}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												id="h5Total"  tabindex= -1
												value="{{Number(openShelterCCI.h1Years0to6-0)+
												 		  Number(openShelterCCI.h2Years0to6-0)+
												 		  Number(openShelterCCI.h3Years0to6-0)+
												 		  Number(openShelterCCI.h4Years0to6-0)+
												 		  Number(openShelterCCI.h1Years7to11-0)+
												 		  Number(openShelterCCI.h2Years7to11-0)+
												 		  Number(openShelterCCI.h3Years7to11-0)+
												 		  Number(openShelterCCI.h4Years7to11-0)+
												 		  Number(openShelterCCI.h1Years12to15-0)+
												          Number(openShelterCCI.h2Years12to15-0)+
												          Number(openShelterCCI.h3Years12to15-0)+
												          Number(openShelterCCI.h4Years12to15-0)+
												          Number(openShelterCCI.h1Years16to18-0)+
												 		  Number(openShelterCCI.h2Years16to18-0)+
												 		  Number(openShelterCCI.h3Years16to18-0)+
												 		  Number(openShelterCCI.h4Years16to18-0)+
												 		  Number(openShelterCCI.h1YearsGreaterThan18-0)+
														  Number(openShelterCCI.h2YearsGreaterThan18-0)+
														  Number(openShelterCCI.h3YearsGreaterThan18-0)+
														  Number(openShelterCCI.h4YearsGreaterThan18-0)
												 		  }}"
												ng-disabled="openShelterCCI.submitted"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							
							<div class="b4sectionheading" id="caseI"></div>
							<div class="grey-header headMarg">I. Children
								Residing in the CCI by Duration</div>

							<div class="labelFont ">
								<table class="table table-bordered table-margintop" id="tableI">
									<thead>
										<tr>
											<th>Duration</th>
											<th>< 15 days</th>
											<th>16-30 days</th>
											<th>1-3 months</th>
											<th>> 3 months</th>
											<th>Total no. of children</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign">I.1. Children on the First day of the month</label></td>
											<td><input type="number" required only-four-digits id="i1DaysLessThan15" 
												ng-model="openShelterCCI.i1DaysLessThan15" ng-keyup="checkINegetive1('i1DaysLessThan15','i3DaysLessThan15','i4DaysLessThan15','(<15 days)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="i1Days16to30" 
												ng-model="openShelterCCI.i1Days16to30" ng-keyup="checkINegetive1('i1Days16to30','i3Days16to30','i4Days16to30','(16-30 days)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="i1Months1to3" 
												ng-model="openShelterCCI.i1Months1to3" ng-keyup="checkINegetive1('i1Months1to3','i3Months1to3','i4Months1to3','(1-3 months)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits  id="i1MonthsgreaterThan3" 
												ng-model="openShelterCCI.i1MonthsgreaterThan3"   ng-keyup="checkINegetive1('i1MonthsgreaterThan3','i3MonthsgreaterThan3','i4MonthsgreaterThan3','(>3 months)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="i1Total" tabindex= -1
												value="{{Number(openShelterCCI.i1DaysLessThan15-0)+Number(openShelterCCI.i1Days16to30-0)+Number(openShelterCCI.i1Months1to3-0)+
														Number(openShelterCCI.i1MonthsgreaterThan3-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign">I.2. New Children Admitted in the Month</label></td>
											<td><input type="number" required only-four-digits id="i2DaysLessThan15" 
												ng-model="openShelterCCI.i2DaysLessThan15" ng-keyup="checkINegetive1('i2DaysLessThan15','i3DaysLessThan15','i4DaysLessThan15','(<15 days)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="i2Days16to30" 
												ng-model="openShelterCCI.i2Days16to30" ng-keyup="checkINegetive1('i2Days16to30','i3Days16to30','i4Days16to30','(16-30 days)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td colspan="2"><input type="number" only-four-digits disabled 
												placeholder="Not Applicable"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
											</td>
											
											<td><input type="text" readonly id="i2Total" tabindex= -1
												value="{{Number(openShelterCCI.i2DaysLessThan15-0)+Number(openShelterCCI.i2Days16to30-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign">I.3. Children moved out in the month</label></td>
											<td><input type="number" required only-four-digits id="i3DaysLessThan15" 
												ng-model="openShelterCCI.i3DaysLessThan15" ng-keyup="checkINegetive('i3DaysLessThan15','i4DaysLessThan15','(<15 days)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="i3Days16to30" 
												ng-model="openShelterCCI.i3Days16to30"  ng-keyup="checkINegetive('i3Days16to30','i4Days16to30','(16-30 days)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="i3Months1to3" 
												ng-model="openShelterCCI.i3Months1to3" ng-keyup="checkINegetive('i3Months1to3','i4Months1to3','(1-3 months)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="i3MonthsgreaterThan3"  
												ng-model="openShelterCCI.i3MonthsgreaterThan3"  ng-keyup="checkINegetive('i3MonthsgreaterThan3','i4MonthsgreaterThan3','(>3 months)')"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="i3Total" tabindex= -1
												value="{{Number(openShelterCCI.i3DaysLessThan15-0)+Number(openShelterCCI.i3Days16to30-0)+Number(openShelterCCI.i3Months1to3-0)+
														Number(openShelterCCI.i3MonthsgreaterThan3-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont">l.4. Total  children on the Last day of the month</label></td>
											<td><input type="text"  id="i4DaysLessThan15"  tabindex= -1
												ng-disabled="openShelterCCI.submitted" readonly
												value="{{Number(openShelterCCI.i1DaysLessThan15-0)+Number(openShelterCCI.i2DaysLessThan15-0)-Number(openShelterCCI.i3DaysLessThan15-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text"  id="i4Days16to30"  readonly
												ng-disabled="openShelterCCI.submitted" tabindex= -1
												value="{{Number(openShelterCCI.i1Days16to30-0)+Number(openShelterCCI.i2Days16to30-0)-Number(openShelterCCI.i3Days16to30-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont">
											</td>
											<td><input type="text"  id="i4Months1to3"  readonly
												ng-disabled="openShelterCCI.submitted" tabindex= -1
												value="{{Number(openShelterCCI.i1Months1to3-0)-Number(openShelterCCI.i3Months1to3-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont">
											</td>
											<td><input type="text"  id="i4MonthsgreaterThan3"  readonly
												ng-disabled="openShelterCCI.submitted" tabindex= -1
												value="{{Number(openShelterCCI.i1MonthsgreaterThan3-0)-Number(openShelterCCI.i3MonthsgreaterThan3-0)}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont">
											</td>
											<td><input type="text"  id="i4Total" readonly tabindex= -1
												value="{{Number(openShelterCCI.i1DaysLessThan15-0)+Number(openShelterCCI.i2DaysLessThan15-0)-Number(openShelterCCI.i3DaysLessThan15-0)+
														Number(openShelterCCI.i1Days16to30-0)+Number(openShelterCCI.i2Days16to30-0)-Number(openShelterCCI.i3Days16to30-0)+
														Number(openShelterCCI.i1Months1to3-0)-Number(openShelterCCI.i3Months1to3-0)+
														Number(openShelterCCI.i1MonthsgreaterThan3-0)-Number(openShelterCCI.i3MonthsgreaterThan3-0)}}"
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- -----------------------End Of Section I---------------------------------- -->
							
							<div class="b4sectionheading" id="caseJ"></div>
							<div class="grey-header headMarg">
								J. Average length of association as on last day of the month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableJ">

									<thead>
										<tr>
											<th>Type of Children</th>
											<th>0-30 days </th>
											<th>1-2 months </th>
											<th>2-3 months</th>
											<th>3-4 months </th>
											<th>4-12 months  </th>
											<th>More than 1 Year</th>
											<th>Total no. of children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														J.1.Availing services only during the day</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="j1Total0to30Days"
												ng-model="openShelterCCI.j1Total0to30Days"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths1to2"
												ng-model="openShelterCCI.j1TotalMonths1to2"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths2to3"
												ng-model="openShelterCCI.j1TotalMonths2to3"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths3to4"
												ng-model="openShelterCCI.j1TotalMonths3to4"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths4to12"
												ng-model="openShelterCCI.j1TotalMonths4to12"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonthsMoreThan1Year"
												ng-model="openShelterCCI.j1TotalMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="j1TotalNumberTotal" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.j1Total0to30Days-0)+Number(openShelterCCI.j1TotalMonths1to2-0)+
												Number(openShelterCCI.j1TotalMonths2to3-0)+Number(openShelterCCI.j1TotalMonths3to4-0)+Number(openShelterCCI.j1TotalMonths4to12-0)+
												Number(openShelterCCI.j1TotalMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														J.2. Availing services only during the night</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="j2Total0to30Days"
												ng-model="openShelterCCI.j2Total0to30Days"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j2TotalMonths1to2"
												ng-model="openShelterCCI.j2TotalMonths1to2"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j2TotalMonths2to3"
												ng-model="openShelterCCI.j2TotalMonths2to3"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j2TotalMonths3to4"
												ng-model="openShelterCCI.j2TotalMonths3to4"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j2TotalMonths4to12"
												ng-model="openShelterCCI.j2TotalMonths4to12"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j2TotalMonthsMoreThan1Year"
												ng-model="openShelterCCI.j2TotalMonthsMoreThan1Year"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="j2TotalNumberTotal" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.j2Total0to30Days-0)+Number(openShelterCCI.j2TotalMonths1to2-0)+
												Number(openShelterCCI.j2TotalMonths2to3-0)+Number(openShelterCCI.j2TotalMonths3to4-0)+Number(openShelterCCI.j2TotalMonths4to12-0)+
												Number(openShelterCCI.j2TotalMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														J.3. Availing services  during both day and night</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="j3Total0to30Days"
												ng-model="openShelterCCI.j3Total0to30Days"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths1to2"
												ng-model="openShelterCCI.j3TotalMonths1to2"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths2to3"
												ng-model="openShelterCCI.j3TotalMonths2to3"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths3to4"
												ng-model="openShelterCCI.j3TotalMonths3to4"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths4to12"
												ng-model="openShelterCCI.j3TotalMonths4to12"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonthsMoreThan1Year"
												ng-model="openShelterCCI.j3TotalMonthsMoreThan1Year"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="j3TotalNumberTotal" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(openShelterCCI.j3Total0to30Days-0)+Number(openShelterCCI.j3TotalMonths1to2-0)+
												Number(openShelterCCI.j3TotalMonths2to3-0)+Number(openShelterCCI.j3TotalMonths3to4-0)+Number(openShelterCCI.j3TotalMonths4to12-0)+
												Number(openShelterCCI.j3TotalMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														J.4. Total</label>
												</div>
											</td>
											<td><input type="text" tabindex= -1
												id="j4Total0to30Days" readonly
												value="{{Number(openShelterCCI.j1Total0to30Days-0)+Number(openShelterCCI.j2Total0to30Days-0)+Number(openShelterCCI.j3Total0to30Days-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly
												id="j4TotalMonths1to2"  tabindex= -1
												value="{{Number(openShelterCCI.j1TotalMonths1to2-0)+Number(openShelterCCI.j2TotalMonths1to2-0)+Number(openShelterCCI.j3TotalMonths1to2-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly
												id="j4TotalMonths2to3"  tabindex= -1
												value="{{Number(openShelterCCI.j1TotalMonths2to3-0)+Number(openShelterCCI.j2TotalMonths2to3-0)+Number(openShelterCCI.j3TotalMonths2to3-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly
												id="j4TotalMonths3to4"  tabindex= -1
												value="{{Number(openShelterCCI.j1TotalMonths3to4-0)+Number(openShelterCCI.j2TotalMonths3to4-0)+Number(openShelterCCI.j3TotalMonths3to4-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly
												id="j4TotalMonths4to12"  tabindex= -1
												value="{{Number(openShelterCCI.j1TotalMonths4to12-0)+Number(openShelterCCI.j2TotalMonths4to12-0)+Number(openShelterCCI.j3TotalMonths4to12-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly
												id="j4TotalMonthsMoreThan1Year"  tabindex= -1
												value="{{Number(openShelterCCI.j1TotalMonthsMoreThan1Year-0)+Number(openShelterCCI.j2TotalMonthsMoreThan1Year-0)+Number(openShelterCCI.j3TotalMonthsMoreThan1Year-0)}}"
												ng-disabled="openShelterCCI.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="j4TotalNumberTotal" tabindex= -1
												 class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(openShelterCCI.j1Total0to30Days-0)+Number(openShelterCCI.j1TotalMonths1to2-0)+
												Number(openShelterCCI.j1TotalMonths2to3-0)+Number(openShelterCCI.j1TotalMonths3to4-0)+Number(openShelterCCI.j1TotalMonths4to12-0)+
												Number(openShelterCCI.j1TotalMonthsMoreThan1Year-0)+
												
												Number(openShelterCCI.j2Total0to30Days-0)+Number(openShelterCCI.j2TotalMonths1to2-0)+
												Number(openShelterCCI.j2TotalMonths2to3-0)+Number(openShelterCCI.j2TotalMonths3to4-0)+Number(openShelterCCI.j2TotalMonths4to12-0)+
												Number(openShelterCCI.j2TotalMonthsMoreThan1Year-0)+
												
												Number(openShelterCCI.j3Total0to30Days-0)+Number(openShelterCCI.j3TotalMonths1to2-0)+
												Number(openShelterCCI.j3TotalMonths2to3-0)+Number(openShelterCCI.j3TotalMonths3to4-0)+Number(openShelterCCI.j3TotalMonths4to12-0)+
												Number(openShelterCCI.j3TotalMonthsMoreThan1Year-0)
												}}">
											</td>
										</tr>
										</tbody>
									</table>
								</div>
								
								

							<div class="b4sectionheading" id="caseK"></div>
							<div class="grey-header headMarg">
								K. Details of cases dealt with (In the Reporting Month)</div>

							<div class="form-group labelFont sectionMarginTop
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> K.1. No. of adoptable children </label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k1" id="k1" onkeyup="checkK1()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.2. No. of children with single
									parent </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k2" id="k2" onkeyup="checkK2()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.3. No. of children without parental
									care/without adult support </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k3" id="k3" onkeyup="checkK3()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
							borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.4. No. of children referred to
									Hospital/PHC/Clinics </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k4" id="k4" onkeyup="checkK4()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.5. No. of children transferred to
									home within the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k5" id="k5" onkeyup="checkK5()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.6. No. of children transferred to
									home outside the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k6" id="k6" onkeyup="checkK6()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.7. No. of Case History Formats
									filled </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k7" id="k7" onkeyup="checkK7()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.8. No. of Individual Care Plan (ICP)
									prepared </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k8" id="k8" onkeyup="checkK8()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.9. No. of children referred for
									Psychiatric treatment </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k9" id="k9" onkeyup="checkK9()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.10. No. of entries on Track Child
									Portal </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k10" id="k10" onkeyup="checkK10()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.11. No. of Runaway/Missing children
									returned to the CCI in the reporting month </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k11" id="k11"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.12. Average no. of children visiting
									the center during the day</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k12" id="k12"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.13. Average no. of children using
									the center at night </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k13" id="k13"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.14. Average no. of children visiting the center at day and night both
								</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="openShelterCCI.k14" id="k14" onkeyup="checkK14()"
										ng-disabled="openShelterCCI.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>


							<div class="form-group labelFont">

								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.15.a. Was the meeting of Children's
									Committee held ? </label>
								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select required class="form-control inputBackground"
										ng-disabled="openShelterCCI.submitted"
										ng-model="openShelterCCI.k15aMeetingChildrenCommittee"
										ng-change="resetDate(openShelterCCI.k15aMeetingChildrenCommittee, 'meetingdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont"
								ng-show="openShelterCCI.k15aMeetingChildrenCommittee == 'true'">
								<label class="col-md-6 control-label labelLeftAlign "
									for="textinput">K.15.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="meetingdatepicker"
										ng-model="openShelterCCI.k15bCcMeetingDate"
										ng-disabled="openShelterCCI.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="meetingdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont ">
								<label class="col-md-6 control-label labelLeftAlign txtalgn1"
									for="textinput"> K.16.a. Was the Home Management
									Committee meeting held ? </label>

								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select required class="form-control inputBackground bxalgn"
										ng-disabled="openShelterCCI.submitted"
										ng-model="openShelterCCI.k16aMeetingHomeManagementCommittee"
										ng-change="resetDate(openShelterCCI.k16aMeetingHomeManagementCommittee, 'homeManagementdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont"
								ng-show="openShelterCCI.k16aMeetingHomeManagementCommittee == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.16.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="homeManagementdatepicker"
										ng-model="openShelterCCI.k16bHmMeetingDate"
										ng-disabled="openShelterCCI.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="homeManagementdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign txtalgn1"
									for="textinput"> K.17.a. Any other details ? </label>
								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select required class="form-control inputBackground bxalgn"
										ng-disabled="openShelterCCI.submitted"
										ng-model="openShelterCCI.k17aAnyOthersDetails"
										ng-change="resetDate(openShelterCCI.k17aAnyOthersDetails, 'Othermeetingdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont "
								ng-show="openShelterCCI.k17aAnyOthersDetails == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.17.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="Othermeetingdatepicker"
										ng-model="openShelterCCI.k17bOtherDetailsDate"
										ng-disabled="openShelterCCI.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x"  id="Othermeetingdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div>
<div class="borderBottom"></div>
							<!-- -----------------------------------End Of I Section----------------------------------------------- -->

							<div class="b4sectionheading" id="caseL"></div>
							<div class="grey-header headMarg">
								L. Training on JJ System</div>

							<div class="form-group labelFont sectionMarginTop
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.1. Was the training held on JJ
									system ? </label>
								<div class="col-md-6 marginBottomTop">
									<select 
									    ng-change=resetToZeroaccdopn(openShelterCCI.l1WastrainingHeld)
									    required class="form-control inputBackground"
										ng-disabled="openShelterCCI.submitted"
										ng-model="openShelterCCI.l1WastrainingHeld">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div ng-show="openShelterCCI.l1WastrainingHeld == 'true'">

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> L.1.a. Number of Training held</label>
									<div class="col-md-6">
										<input type="number" 
											ng-blur="validateNoOfTraining(openShelterCCI.l1aNoTrainingHeld)"
											ng-model="openShelterCCI.l1aNoTrainingHeld" limit-to="2"
											ng-disabled="openShelterCCI.submitted"  id="l1aNoTrainingHeld"
											 class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div class="panel-group" id="accordion" role="tablist"
									aria-multiselectable="true">

									<div class="panel panel-default"
										ng-repeat="trainingDetails in trainingDetailsRepetitionArray track by $index">
										<div class="panel-heading" role="tab"
											onclick="changeIcon(this)" id="{{'heading'+$index}}">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse"
													ng-click="initializeDatePicker($index)"
													data-parent="#accordion" href="{{'#collapse'+$index}}"
													aria-expanded="true" aria-controls="collapseOne"> <i
													class="more-less glyphicon glyphicon-plus"></i> Training
													Details {{$index+1}}

												</a>
											</h4>
										</div>
										<div id="{{'collapse'+$index}}"
											class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="headingOne">
											<div class="panel-body">


												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.b. Duration of Training (no.
														of days) </label>
													<div class="col-md-6">
														<input type="number" max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
 
															id="30days"
															ng-model="trainingDetailsRepetitionArray[$index].durationTraining"
															ng-disabled="openShelterCCI.submitted" limit-to="2"
															 class="form-control inputBackgroundgeneral removeExponentialValueE">
													</div>
												</div>
												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c. Training From </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingFromDatepicker{{$index}}"
															readonly ng-click="openFromDatePicker($index)"
															ng-model="trainingDetailsRepetitionArray[$index].trainingFromDate"
															ng-disabled="openShelterCCI.submitted"
															 class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>

												</div>
												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c.i. Training To </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingToDatepicker{{$index}}"
															readonly ng-click="openToDatePicker($index)"
															ng-model="trainingDetailsRepetitionArray[$index].trainingToDate"
															ng-disabled="openShelterCCI.submitted"
															 class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x" id="trainingToDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>

												</div>
												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.d. Training organised by </label>
													<div class="col-md-6">
														<select
															ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
															ng-model="trainingDetailsRepetitionArray[$index].trainingOrganisedBy"
															ng-value="item.typeDetailsId"
															 class="form-control inputBackgroundgeneral"
															ng-disabled="openShelterCCI.submitted"
															ng-change="resetAccordionOthers(trainingDetails)">
															<option value="" disabled selected>Select</option>
														</select>
													</div>
												</div>
												<div class="form-group labelFont"
													ng-show="trainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.d.i. If training organised by
														Others, Please specify </label>
													<div class="col-md-6">
														<input type="text"
															ng-model="trainingDetailsRepetitionArray[$index].traingOrganisedbyOthers"
															address-validation
															 class="form-control inputBackgroundgeneral"
															ng-disabled="openShelterCCI.submitted">
													</div>
												</div>
												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e. Topic of training </label>
													<div class="col-md-6 topicOftrainingListJJb">
														 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="cb checkboxstyle">
																		<input id="chJJActRule" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totJjAct"> <label
																			for="chJJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="cLawsandICPS" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totChildRelatedLaws"> <label
																			for="LawsandICPS"> Child related Laws and ICPS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="POCSOAct" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totPosco"> <label
																			for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Combinedtraining" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
																			for="Combinedtraining"> Combined training </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="CPMIS" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totCpmis"> <label
																			for="CPMIS"> CPMIS </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CPMISTrackchild" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totTrackChild"> <label
																			for="CPMISTrackchild"> Track child </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CLTS" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-model="trainingDetailsRepetitionArray[$index].totClts"> <label
																			for="CLTS"> CLTS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Others" type="checkbox" ng-disabled="openShelterCCI.submitted"
																		ng-click="clearTopicOfTrainingOthers(trainingDetailsRepetitionArray[$index])"
																		ng-model="trainingDetailsRepetitionArray[$index].totOthers"> <label
																			for="Others"> Others </label>
																	</div>
																</li>
															</ul>
													</div>
												</div>

												<div class="form-group labelFonts"
													ng-show="trainingDetailsRepetitionArray[$index].totOthers">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e.i. If topic of training is
														other, Please specify </label>
													<div class="col-md-6">
														<input type="text"
															ng-model="trainingDetailsRepetitionArray[$index].totOthersSpecify"
															address-validation
															 class="form-control inputBackgroundgeneral"
															ng-disabled="openShelterCCI.submitted">
													</div>
												</div>
												<div class="form-group labelFont">
												<div class="col-md-12">
													<label class="col-md-6 control-label labelLeftAlign paddingLeftLable"
														for="textinput"><b>L.1.f. Training attended by </b> </label>
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrainedCCI"
														for="textinput"><b>Number of persons trained</b></label>
														</div>
														<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">Project Coordinator cum Counselor</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="trainingDetailsRepetitionArray[$index].tabProjectCoordinatorCounsellor"
															ng-disabled="openShelterCCI.submitted"
															 class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Social Worker </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="trainingDetailsRepetitionArray[$index].tabSocialWorker"
															ng-disabled="openShelterCCI.submitted"
															 class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">Care Givers cum Bridge Course Educators</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="trainingDetailsRepetitionArray[$index].tabCareGiversBridgeCourseEducators"
															ng-disabled="openShelterCCI.submitted"
															 class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">Outreach Worker</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="trainingDetailsRepetitionArray[$index].tabOutreachWorker"
															ng-disabled="openShelterCCI.submitted"
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
															ng-model="trainingDetailsRepetitionArray[$index].tabOthers"
															ng-disabled="openShelterCCI.submitted" ng-keyup="resetTABOthers($index);"
															 class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div ng-show="trainingDetailsRepetitionArray[$index].tabOthers>0" 
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">If training attended by other, Please specify</label>
													<div class="col-md-6 marginBottomTop">
														<input type="text" address-validation
															ng-model="trainingDetailsRepetitionArray[$index].tabOthersSpecify"
															ng-disabled="openShelterCCI.submitted"
															 class="form-control inputBackgroundgeneral">
													</div>
												</div>
												</div>

											</div>
										</div>
									</div>



								</div>

								<!---------   panel-group   ---- ------->

								<div class="col-md-12 text-left">
									<div class="addingnewdetails-container">
										<div id="familydetailserror" class="error-style"></div>
										<button type="button" class="addingnewdetails" ng-disabled="openShelterCCI.submitted"
											ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
										<button type="button" class="addingnewdetails" ng-disabled="openShelterCCI.submitted"
											ng-click="deleteConfirm()">-</button>
										<div id="maximumLimit10Error" class="error-style"></div>
									</div>
								</div>
							</div>
<br> <br> <br> <br>&nbsp;<br> <br>
							<!-- --------------------------------------s -->
							<br> &nbsp;<br> &nbsp; <a href="#" class="back-to-top"
								style="display: inline;" class="fa fa-arrow-circle-up"></a>
						</div>
					</form>


				</div>
			</div>
		</div>
		<br>&nbsp;

	</div>
	</div>


	<!-- Modal for confirm adding indicator -->


	<div class="modal fade" id="confirmationModalForCCCH"
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

<div class="modal fade autoSaveModal" id="successModalForAutoSaveOS"
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
	<div class="modal fade" id="confirmationModalForCHSUBMIT"
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
							ng-click="saveOs(openShelterCCI, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- -----------------Delete accordion Modal-------------------------- -->

	<div class="modal fade" id="deleteAccordion" data-keyboard="false"
		data-backdrop="static" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
					<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
					<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">Are you sure you
						want to Delete ?</h4>
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
                         {{messageField1}}
                        <span style="color:red;">
                        {{alertMessage}}
                        </span>
                         {{messageField2}}</h4>
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
                                   ng-click="checkSave()" data-dismiss="modal" aria-hidden="true">SAVE</button>
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

	<!-- ----------------------------------------------------------------------------- -->

	<script src="resources/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/angular.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		var app = angular.module('openShelterApp', ['angular-md5']);
		var cpmisApp = angular.module('openShelterApp');
	</script>
	<script src="resources/js/controllers/cciOpenShelterController.js"></script>
	<script src="resources/js/jsFunctions/cciOsJsFunctions.js"></script>
	<script src="resources/services/commonService.js"></script>
    <script src="resources/js/angular-md5.js"></script>
    <jsp:include page="fragments/footer.jsp" />
	
	<script>
		$(document).ready(function() {
			$("input[type='number']").on('drop', function(event) {
			    event.preventDefault();
			});
			$("input[type='number']").keypress(function(event) {
	        	 if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
	     			return false;
	     		}
		    });
			$("input[type=number]").on("keydown", function(event) {
				//38=up arrow, 40=down arrow
		        if (event.keyCode === 38 || event.keyCode === 40) {
		            event.preventDefault();
		        }
		    });
		});
		
	</script>

	<script>
		$(function() {
			$("input[type='number']").prop('min', 0);
		});
	</script>

	<script type="text/javascript">
		$("#sectionindctr li a").click(function() {
			$(this).parent().addClass('active').siblings().removeClass('active');
		});
	</script>
	<script type="text/javascript">
		{
			window.addEventListener("hashchange", function() {
				scrollBy(0, 0);
			});
		}
	</script>
	
<script type='text/javascript'>
		$(function() {
			$(window).scroll(function(event) {
				if ($('#gi').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 0
					}, 0);
				} else if ($('#casea').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 18
					}, 0);
				} else if ($('#caseb').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 57
					}, 0);
				} else if ($('#casec').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 101
					}, 0);
				} else if ($('#cased').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 141
					}, 0);
				} else if ($('#casee').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 185
					}, 0);
				}else if ($('#casef').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 225
					}, 0);
				}else if ($('#caseg').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 281
					}, 0);
				}else if ($('#caseh').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 322
					}, 0);
				}else if ($('#casei').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 365
					}, 0);
				}else if ($('#casej').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 400
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
	<script type="text/javascript">
	$(document).ready(function () {
         $("input[type='number']").bind('copy paste', function (e) {
            e.preventDefault();
         }); });
	</script>
	<script type="text/javascript">
	  $('#openShelterFormDetails').on('focus', 'input[type=number]', function (e) {
    	  $(this).on('DOMMouseScroll mousewheel.disableScroll', function (e) {
    	    e.preventDefault()
    	  })
    	})
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
		function changeIcon(div) {
			$(div).find(".more-less").toggleClass(
					'glyphicon-plus glyphicon-minus');
			$(div).parent().siblings().find(".more-less").addClass(
					'glyphicon-plus');
			$(div).parent().siblings().find(".more-less").removeClass(
					'glyphicon-minus');
		}
		
	</script>
	<!-- ------------------- fixed section -------------------------------------->
</body>
</html>