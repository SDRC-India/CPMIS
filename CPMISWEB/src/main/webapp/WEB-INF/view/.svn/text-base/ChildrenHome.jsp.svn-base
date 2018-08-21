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
<title>CCI Children Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
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
<body ng-app="cciChildrenHomeApp" id="cciChildrenHomeController"
	ng-controller="cciChildrenHomeController" ng-cloak data-spy="scroll"
	data-target="#myScrollspy" data-offset="20" class="ng-cloak">
	<!-- spinner -->
	<div id="spinner" class="loader" style="display: none;"></div>
	<div id="loader-mask" class="loader" style="display: none;"></div>
	<!-- /spinner -->
	<jsp:include page="fragments/header.jsp" />
	<div class="b4sectionheading" id="gInfo"></div>
	<!-- 	<div class="container"> -->
	<div class="row marginspc">
	<form class="form-horizontal" name="cciChildrenHomeFormDetails" data-toggle="validator" role="form"
							id="cciChildrenHomeFormDetails">
		<nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
			<h5 class="cwcHeading">Children Home <br> Monthly Report</h5>

			<ul class="nav nav-pills nav-stacked sectionListCCI flexcroll" id="sectionindctr">
				<li id="gi" class="active sectionUlist active1"><a href="#gInfo"
					class="active1">General Information </a></li>

				<li id="casea" class="sectionUlist"><a href="#caseA">A.
						Children Residing on the First Day of the Month</a></li>
				<li id="caseb" class="sectionUlist"><a href="#caseB">B. New
						Children Admitted in the month</a></li>
				<li id="casec" class="sectionUlist"><a href="#caseC">C.
						Total Children in the Month</a></li>
				<li id="cased" class="sectionUlist"><a href="#caseD">D.
						Institutions/Persons where Children Referred</a></li>
				<li id="casee" class="sectionUlist"><a href="#caseE">E.
						Children on the Last day of the reporting month</a></li>
				<li id="casef" class="sectionUlist"><a href="#caseF">F.
						Category wise break up of cases pending as on last day of month </a></li>
				<li id="caseg" class="sectionUlist"><a href="#caseG">G.
						Educational Details of Children in CCI</a></li>
				<li id="caseh" class="sectionUlist"><a href="#caseH">H.
						Health Status of the Children residing in the CCI</a></li>
				<li id="casei" class="sectionUlist"><a href="#caseI">I.
						Children Residing in the CCI by duration and Type</a></li>
				<li id="casej" class="sectionUlist"><a href="#caseJ">J.
						Children Residing in the CCI by duration</a></li>
				<li id="casek" class="sectionUlist"><a href="#caseK">K.
						Details of cases dealt with (In the reporting month)</a></li>
				<li id="casel" class="sectionUlist"><a href="#caseL">L.
						Training on JJ System</a></li>
			</ul>



				<div ng-hide="childrenHome.submitted">
					<a href=""><div class="col-md-6 savebtn locline"
							ng-click="checkSave()">
							<img class="saveSvg"
								src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
								height="18" />
							<h5 class="borderright1">SAVE</h5>
						</div></a>
						<button ng-click="cciChildrenHomeFormDetails.$invalid ? '' : checkSubmit()"
							type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit">
							<img class="saveSvg"
								src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
								height="18" />
							<h5 class="borderright1">SUBMIT</h5>
						</button>
				</div>


				<div ng-show="childrenHome.submitted">
				<div class="col-md-12 savebtn"></div>
			</div>
		</nav>
		<div class="col-md-10 formDetailsTopMargin">
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
							Children Home Monthly Report for Month of <b
								style="color: #41c484">&nbsp;{{childrenHome.timeperiod.timePeriod}}</b>
						</h4>
							<!-- Biswa starts -->
							<div id="gInfo">
								<div class="form-group labelFont">

									<div class="col-md-6">
										<input type="hidden" ng-model="childrenHome.userId"
											class="form-control inputBackground">
									</div>
								</div>
								<div class="col-md-6" style="display: none;">
									<input name="userId" type="number" id="uId" value='${userId}'>${userId}
									<input type="number" id="monthDays" value='<%=daysInMonth%>'>
									<input type="text" id="typeOfHomeId" value='${typeOfHome}'>${typeOfHome}
								</div>
								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Name of the Authorized Person </label>
									<div class="col-md-6">
										<input type="text" id="nameofPerson" required
											ng-model="childrenHome.nameOfPerson"
											fifty-characters-validation
											ng-disabled="childrenHome.submitted"
											class="form-control inputBackgroundgeneral">
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label  labelLeftAlign"
										for="textinput"> Designation </label>
									<div class="col-md-6">
										<input type="text" id="childHomedesignation" required
											ng-model="childrenHome.designation"
											ng-disabled="childrenHome.submitted"
											address-validation
											class="form-control inputBackgroundgeneral">
									</div>
								</div>
								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput">Date Of Reporting</label>
									<div class="col-md-6 " style="display: inline-flex;">
										<%
											Date dNow = new Date();
											SimpleDateFormat ft = new SimpleDateFormat("dd-MM-yyyy");
										%>
										<input type="text" readonly tabindex= -1
											class="form-control inputBackgroundgeneral readonlyStyle"
											value="<%=ft.format(dNow)%>">
									</div>
								</div>


								<!-- Biswa starts  -->
								<div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of the District</label>
                                        <div class="col-md-6">
                                             <input type="text" id="district" tabindex= -1
                                                  disabled ng-model="selectedDistrict.areaName"
                                                  class="form-control inputBackgroundgeneral readonlyStyle">
                                        </div>
                                   </div>
								<!-- <div class="form-group labelFont">
								<label class="col-md-6 control-label  labelLeftAlign" for="textinput">
									Date :</label>
								<div class="col-md-6">
									<input type="text" ng-model="childrenHome.monthAndYear" id="datepicker"
										class="form-control inputBackground">
								</div>
							</div> -->

								<div class="form-group labelFont">
									<label class="col-md-6 control-label   labelLeftAlign"
										for="textinput"> Type of Home </label>
									<div class="col-md-6">
										<input type="text" id="typeOfHome" disabled
										 value="${typeOfHome}" class="form-control inputBackgroundgeneral">
									</div>
								</div>
								<div class="form-group labelFont">
									<label class="col-md-6 control-label  labelLeftAlign"
										for="textinput"> Name of CCI </label>
									<div class="col-md-6">
									<input type="text" id="cciName" tabindex=-1
                                                  disabled ng-model="cciNameList.cciName"
                                                  class="form-control  inputBackgroundgeneral">
									<!-- <select 
											ng-options="nameCCI as nameCCI.cciName for nameCCI in cciNameList"
											ng-model="selectedCciName" ng-value="nameCCI.cciName"
											class="form-control inputBackgroundgeneral"
											ng-disabled="childrenHome.submitted||(cciNameList.length==0)">
											<option value="" disabled selected>Select</option>
										</select> -->
									</div>
									<!-- <div class="col-md-6" ng-show="cciNameList.length==0">
                                		<input type="text" value="No CCIs Found" disabled
											class="form-control inputBackgroundgeneral">
									</div> -->
									<!-- <input type="text" id="chNameofCCI"
											ng-model="childrenHome.nameOfCCI" fifty-characters-validation
											ng-disabled="childrenHome.submitted"
											class="form-control inputBackgroundgeneral"> -->
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label  labelLeftAlign"
										for="textinput"> Type of Institution </label>
									<div class="col-md-6">
										<select required
											ng-options="item as item.typeDetailsName for item in childSex"
											ng-model="selectedChildSex" ng-value="item.typeDetailsId"
											class="form-control inputBackgroundgeneral"
											ng-disabled="childrenHome.submitted">
											<option value="" disabled selected>Select</option>
										</select>
										<!-- 											ng-model="childrenHome.typeOfInstitutions" -->
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label  labelLeftAlign"
										for="textinput"> Run By </label>
									<div class="col-md-6">
										<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType" ng-value="item.typeDetailsId"
											class="form-control inputBackgroundgeneral"
											ng-disabled="childrenHome.submitted">
											<option value="" disabled selected>Select</option>
										</select>
										<!-- 											ng-model="childrenHome.govtNonGovt" -->
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Capacity of Home/CCI </label>
									<div class="col-md-6">
										<input type="number" required 
											ng-model="childrenHome.capacityOfHome"
											ng-disabled="childrenHome.submitted"
											id="capacityOfHome"  ng-keyup="testCapacity('capacityOfHome')"
											class="form-control inputBackgroundgeneral removeExponentialValueE">
									</div>
								</div>
							</div>
							 <div class="b4sectionheading" id="caseA"></div>
							<div class="grey-header headMarg ">A.
								Children Residing on the First Day of the Month</div>
							<div class="labelFont sectionATop">
								<table class="table table-bordered ">
									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> A.1.
													Age distribution of Children on the First day of the
													reporting month</label></td>

											<td><input type="number" id="aYears0to6Id"
												ng-model="childrenHome.aYears0to6" only-four-digits
												disabled 
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											
											<td><input type="number" id="aYears7to11Id"
												ng-model="childrenHome.aYears7to11" 
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											
											<td><input type="number" id="aYears12to15Id"
												ng-model="childrenHome.aYears12to15" 
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											
											<td><input type="number" id="aYears16to18Id"
												ng-model="childrenHome.aYears16to18" 
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											
											<td><input type="number" id="aYearsGreaterThan18Id"
												ng-model="childrenHome.aYearsGreaterThan18" tabindex= -1
												disabled only-four-digits
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											
											<td><input type="number" id="aTotal" disabled only-four-digits
												ng-model="childrenHome.aTotal" tabindex= -1 
												ng-init="childrenHome.aTotal=0"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="b4sectionheading" id="caseB"></div>
							<div class="grey-header headMarg">B. New Children
								Admitted in the Month</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Children admitted in the reporting month</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total New Children</th>
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
											<td><input type="number" required only-four-digits id="b1Years0to6Id"
												ng-model="childrenHome.b1Years0to6"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years0to6, childrenHome.b2Years0to6, 'b1Years0to6', 'e1Years0to6', '0-6', 'b1Years0to6Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1Years7to11Id"
												ng-model="childrenHome.b1Years7to11"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years7to11, childrenHome.b2Years7to11, 'b1Years7to11', 'e1Years7to11', '7-11', 'b1Years7to11Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1Years12to15Id"
												ng-model="childrenHome.b1Years12to15"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years12to15, childrenHome.b2Years12to15, 'b1Years12to15', 'e1Years12to15', '12-15', 'b1Years12to15Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1Years16to18Id"
												ng-model="childrenHome.b1Years16to18"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years16to18, childrenHome.b2Years16to18, 'b1Years16to18', 'e1Years16to18', '16-18', 'b1Years16to18Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b1YearsGreaterThan18Id"
												ng-model="childrenHome.b1YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1YearsGreaterThan18, childrenHome.b2YearsGreaterThan18, 'b1YearsGreaterThan18', 'e1YearsGreaterThan18', '> 18', 'b1YearsGreaterThan18Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>

											<td><input type="text" readonly id="b1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b1YearsGreaterThan18-0)}}">
											</td>

										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.2.
														Referred by Others</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="b2Years0to6Id"
												ng-model="childrenHome.b2Years0to6"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years0to6, childrenHome.b2Years0to6, 'b2Years0to6', 'e1Years0to6', '0-6', 'b2Years0to6Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2Years7to11Id"
												ng-model="childrenHome.b2Years7to11"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years7to11, childrenHome.b2Years7to11, 'b2Years7to11', 'e1Years7to11', '7-11', 'b2Years7to11Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2Years12to15Id"
												ng-model="childrenHome.b2Years12to15"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years12to15, childrenHome.b2Years12to15, 'b2Years12to15', 'e1Years12to15', '12-15', 'b2Years12to15Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2Years16to18Id"
												ng-model="childrenHome.b2Years16to18"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1Years16to18, childrenHome.b2Years16to18, 'b2Years16to18', 'e1Years16to18', '16-18', 'b2Years16to18Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required only-four-digits id="b2YearsGreaterThan18Id"
												ng-model="childrenHome.b2YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												ng-blur="validateWithE(childrenHome.b1YearsGreaterThan18, childrenHome.b2YearsGreaterThan18, 'b2YearsGreaterThan18', 'e1YearsGreaterThan18', '> 18', 'b2YearsGreaterThan18Id')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="text" readonly id="b2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.b2Years0to6-0)+Number(childrenHome.b2Years7to11-0)+Number(childrenHome.b2Years12to15-0)+Number(childrenHome.b2Years16to18-0)+Number(childrenHome.b2YearsGreaterThan18-0)}}">
											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">B.3.
														Total No. of Children Admitted</label>
												</div>
											</td>
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="b3Years0to6" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b2Years0to6-0)}}">
												</td>
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="b3Years7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b2Years7to11-0)}}">
											</td>
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="b3Years12to15" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b2Years12to15-0)}}">
											</td>
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="b3Years16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b2Years16to18-0)}}">
											</td>
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="b3YearsGreaterThan18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.b1YearsGreaterThan18-0)+Number(childrenHome.b2YearsGreaterThan18-0)}}">
											</td>
											<td><input type="text" readonly id="b3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b2Years0to6-0)+Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b2Years7to11-0)+Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b2Years12to15-0)+Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b2Years16to18-0)+Number(childrenHome.b1YearsGreaterThan18-0)+Number(childrenHome.b2YearsGreaterThan18-0)}}">
											</td>

										</tr>

									</tbody>
								</table>
							</div>


								<div class="b4sectionheading" id="caseC"></div>
							<div class="grey-header headMarg">C. Total
								Children in the Month</div>
							<div class="labelFont">
								<div class="form-group labelFont sectionCTop"></div>
								<table class="table table-bordered ">
									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> C.1. Age distribution of Children in the reporting month </label></td>
											<!-- childrenHome.c2Age0to6
													childrenHome.c2Age7to11
													childrenHome.c2Age12to15
													childrenHome.c2Age16to18
													"childrenHome.c2GreaterThan18" -->
											<td><input type="text" id="cYears0to6"
												ng-disabled="childrenHome.submitted" tabindex= -1 readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.aYears0to6-0)+Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b2Years0to6-0)}}">
											</td>
											
											<td><input type="text" id="cYears7to11" readonly
												ng-disabled="childrenHome.submitted" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.aYears7to11-0)+Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b2Years7to11-0)}}">
											</td>
											
											<td><input type="text" id="cYears12to15" readonly
												ng-disabled="childrenHome.submitted" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.aYears12to15-0)+Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b2Years12to15-0)}}">
											</td>
											
											<td><input type="text" id="cYears16to18" readonly
												ng-disabled="childrenHome.submitted" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.aYears16to18-0)+Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b2Years16to18-0)}}">
											</td>
											<td><input type="text" id="cYearsGreaterThan18" readonly
												ng-disabled="childrenHome.submitted" tabindex= -1
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												value="{{Number(childrenHome.aYearsGreaterThan18-0)+Number(childrenHome.b1YearsGreaterThan18-0)+Number(childrenHome.b2YearsGreaterThan18-0)}}">
											</td>
											
											<td><input type="text" id="cTotal" readonly
												ng-disabled="childrenHome.submitted" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.aYears0to6-0)+Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b2Years0to6-0)+Number(childrenHome.aYears7to11-0)+Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b2Years7to11-0)+Number(childrenHome.aYears12to15-0)+Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b2Years12to15-0)+Number(childrenHome.aYears16to18-0)+Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b2Years16to18-0)+Number(childrenHome.aYearsGreaterThan18-0)+Number(childrenHome.b1YearsGreaterThan18-0)+Number(childrenHome.b2YearsGreaterThan18-0)}}">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="b4sectionheading" id="caseD"></div>
							<div class="grey-header headMarg">
								D. Institutions/Persons where Children Referred</div>
								
									<div class="labelFont">
								<div class="form-group labelFont sectionCTop"></div>
								<table class="table table-bordered " id="tableD">
									<thead>
										<tr>
											<th>Children referred in the reporting month</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.1. Transferred to Other Home</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d1Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd1Years0to6', '0-6')"
												ng-model="childrenHome.d1Years0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d1Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd1Years7to11', '7-11')"
												ng-model="childrenHome.d1Years7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d1Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd1Years12to15', '12-15')"
												ng-model="childrenHome.d1Years12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d1Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd1Years16to18', '16-18')"
												ng-model="childrenHome.d1Years16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d1YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd1YearsGreaterThan18', '>18')"
												ng-model="childrenHome.d1YearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="text" readonly id="d1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d1Years0to6-0)+Number(childrenHome.d1Years7to11-0)+Number(childrenHome.d1Years12to15-0)+Number(childrenHome.d1Years16to18-0)+Number(childrenHome.d1YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.2. Restored to Family</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d2Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd2Years0to6', '0-6')"
												ng-model="childrenHome.d2Years0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d2Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd2Years7to11', '7-11')"
												ng-model="childrenHome.d2Years7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d2Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd2Years12to15', '12-15')"
												ng-model="childrenHome.d2Years12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d2Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd2Years16to18', '16-18')"
												ng-model="childrenHome.d2Years16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d2YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd2YearsGreaterThan18', '>18')"
												ng-model="childrenHome.d2YearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="text" readonly id="d2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d2Years0to6-0)+Number(childrenHome.d2Years7to11-0)+Number(childrenHome.d2Years12to15-0)+Number(childrenHome.d2Years16to18-0)+
												Number(childrenHome.d2YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.3. Admitted to Residential School</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d3Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd3Years0to6', '0-6')"
												ng-model="childrenHome.d3Years0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												 
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d3Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd3Years7to11', '7-11')"
												ng-model="childrenHome.d3Years7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											 
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d3Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd3Years12to15', '12-15')"
												ng-model="childrenHome.d3Years12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d3Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd3Years16to18', '16-18')"
												ng-model="childrenHome.d3Years16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d3YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd3YearsGreaterThan18', '>18')"
												ng-model="childrenHome.d3YearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											 
											<td><input type="text" readonly id="d3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d3Years0to6-0)+Number(childrenHome.d3Years7to11-0)+Number(childrenHome.d3Years12to15-0)+Number(childrenHome.d3Years16to18-0)+
												Number(childrenHome.d3YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.4. Runaway/Missing</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d4Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd4Years0to6', '0-6')"
												ng-model="childrenHome.d4Years0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d4Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd4Years7to11', '7-11')"
												ng-model="childrenHome.d4Years7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d4Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd4Years12to15', '12-15')"
												ng-model="childrenHome.d4Years12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d4Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd4Years16to18', '16-18')"
												ng-model="childrenHome.d4Years16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d4YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd4YearsGreaterThan18', '>18')"
												ng-model="childrenHome.d4YearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="text" readonly id="d4Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d4Years0to6-0)+Number(childrenHome.d4Years7to11-0)+Number(childrenHome.d4Years12to15-0)+Number(childrenHome.d4Years16to18-0)+
												Number(childrenHome.d4YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.5. Death</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d5Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd5Years0to6', '0-6')"
												ng-model="childrenHome.d5Years0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d5Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd5Years7to11', '7-11')"
												ng-model="childrenHome.d5Years7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d5Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd5Years12to15', '12-15')"
												ng-model="childrenHome.d5Years12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d5Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd5Years16to18', '16-18')"
												ng-model="childrenHome.d5Years16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d5YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd5YearsGreaterThan18', '>18')"
												ng-model="childrenHome.d5YearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="text" readonly id="d5Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d5Years0to6-0)+Number(childrenHome.d5Years7to11-0)+Number(childrenHome.d5Years12to15-0)+Number(childrenHome.d5Years16to18-0)+
												Number(childrenHome.d5YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.6. Sent for Alternative Care 
													(Foster care,Sponsorship & After Care)</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d6Years0to6" ng-keyup="calculateWithC('cYears0to6', 'd6Years0to6', '0-6')"
												ng-model="childrenHome.d6Years0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d6Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd6Years7to11', '7-11')"
												ng-model="childrenHome.d6Years7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d6Years12to15" ng-keyup="calculateWithC('cYears12to15', 'd6Years12to15', '12-15')"
												ng-model="childrenHome.d6Years12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d6Years16to18" ng-keyup="calculateWithC('cYears16to18', 'd6Years16to18', '16-18')"
												ng-model="childrenHome.d6Years16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d6YearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd6YearsGreaterThan18', '>18')"
												ng-model="childrenHome.d6YearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="text" readonly id="d6Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d6Years0to6-0)+Number(childrenHome.d6Years7to11-0)+Number(childrenHome.d6Years12to15-0)+Number(childrenHome.d6Years16to18-0)+
												Number(childrenHome.d6YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.7. Any other 
													Institution/Program</label>
												</div>
											</td>
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d7aYears0to6" ng-keyup="calculateWithC('cYears0to6', 'd7aYears0to6', '0-6')"
												ng-model="childrenHome.d7aYears0to6" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
												</td>
												
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d7aYears7to11" ng-keyup="calculateWithC('cYears7to11', 'd7aYears7to11', '7-11')"
												ng-model="childrenHome.d7aYears7to11" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d7aYears12to15" ng-keyup="calculateWithC('cYears12to15', 'd7aYears12to15', '12-15')"
												ng-model="childrenHome.d7aYears12to15" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="number"  required
												ng-disabled="childrenHome.submitted" id="d7aYears16to18" ng-keyup="calculateWithC('cYears16to18', 'd7aYears16to18', '16-18')"
												ng-model="childrenHome.d7aYears16to18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
											</td>
											
											<td><input type="number" required
												ng-disabled="childrenHome.submitted" id="d7aYearsGreaterThan18" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd7aYearsGreaterThan18', '>18')"
												ng-model="childrenHome.d7aYearsGreaterThan18" only-four-digits
												class="form-control inputBackground tableinputWidth  removeExponentialValueE">
											</td>
											
											<td><input type="text" readonly id="d7aTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.d7aYears0to6-0)+Number(childrenHome.d7aYears7to11-0)+Number(childrenHome.d7aYears12to15-0)+Number(childrenHome.d7aYears16to18-0)+
												Number(childrenHome.d7aYearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr ng-show="showHideBasedOnFlag('d7aTotal','d7bOtherdetails')">
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
													D.7.a. Please specify, if other</label>
												</div>
											</td>
											<td colspan="6"><input type="text"
												ng-disabled="childrenHome.submitted" id="d7bOtherdetails" 
												ng-required="Number(childrenHome.d7aYears0to6-0)+
															Number(childrenHome.d7aYears7to11-0)+
															Number(childrenHome.d7aYears12to15-0)+
															Number(childrenHome.d7aYears16to18-0)+
															Number(childrenHome.d7aYearsGreaterThan18-0) > 0"
												ng-model="childrenHome.d7bOtherdetails" address-validation
												class="form-control inputBackground tableinputWidth ">
												</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">D.8. Total no. of children referred</label>
												</div>
											</td>
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="d8Years0to6"  tabindex= -1
												value="{{Number(childrenHome.d1Years0to6-0)+Number(childrenHome.d2Years0to6-0)+Number(childrenHome.d3Years0to6-0)+
												Number(childrenHome.d4Years0to6-0)+Number(childrenHome.d5Years0to6-0)+Number(childrenHome.d6Years0to6-0)+Number(childrenHome.d7aYears0to6-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
												</td>
												
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="d8Years7to11"  tabindex= -1
												value="{{Number(childrenHome.d1Years7to11-0)+Number(childrenHome.d2Years7to11-0)+Number(childrenHome.d3Years7to11-0)+
												Number(childrenHome.d4Years7to11-0)+Number(childrenHome.d5Years7to11-0)+Number(childrenHome.d6Years7to11-0)+Number(childrenHome.d7aYears7to11-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="d8Years12to15" tabindex= -1
												value="{{Number(childrenHome.d1Years12to15-0)+Number(childrenHome.d2Years12to15-0)+Number(childrenHome.d3Years12to15-0)+
												Number(childrenHome.d4Years12to15-0)+Number(childrenHome.d5Years12to15-0)+Number(childrenHome.d6Years12to15-0)+Number(childrenHome.d7aYears12to15-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											
											<td><input type="text"  tabindex= -1 readonly
												ng-disabled="childrenHome.submitted" id="d8Years16to18"
												value="{{Number(childrenHome.d1Years16to18-0)+Number(childrenHome.d2Years16to18-0)+Number(childrenHome.d3Years16to18-0)+
												Number(childrenHome.d4Years16to18-0)+Number(childrenHome.d5Years16to18-0)+Number(childrenHome.d6Years16to18-0)+Number(childrenHome.d7aYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" >
											</td>
											
											<td><input type="text" readonly
												ng-disabled="childrenHome.submitted" id="d8YearsGreaterThan18"  tabindex= -1
												value="{{Number(childrenHome.d1YearsGreaterThan18-0)+Number(childrenHome.d2YearsGreaterThan18-0)+Number(childrenHome.d3YearsGreaterThan18-0)+
												Number(childrenHome.d4YearsGreaterThan18-0)+Number(childrenHome.d5YearsGreaterThan18-0)+Number(childrenHome.d6YearsGreaterThan18-0)+Number(childrenHome.d7aYearsGreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											
											<td><input type="text" readonly id="d8Total"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
												value="{{Number(childrenHome.d1Years0to6-0)+Number(childrenHome.d2Years0to6-0)+Number(childrenHome.d3Years0to6-0)+Number(childrenHome.d4Years0to6-0)+
												Number(childrenHome.d5Years0to6-0)+Number(childrenHome.d6Years0to6-0)+Number(childrenHome.d7aYears0to6-0)+
												Number(childrenHome.d1Years7to11-0)+Number(childrenHome.d2Years7to11-0)+Number(childrenHome.d3Years7to11-0)+
												Number(childrenHome.d4Years7to11-0)+Number(childrenHome.d5Years7to11-0)+Number(childrenHome.d6Years7to11-0)+Number(childrenHome.d7aYears7to11-0)+
												Number(childrenHome.d1Years12to15-0)+Number(childrenHome.d2Years12to15-0)+
												Number(childrenHome.d3Years12to15-0)+Number(childrenHome.d4Years12to15-0)+Number(childrenHome.d5Years12to15-0)+Number(childrenHome.d6Years12to15-0)+Number(childrenHome.d7aYears12to15-0)+
												Number(childrenHome.d1Years16to18-0)+
												Number(childrenHome.d2Years16to18-0)+Number(childrenHome.d3Years16to18-0)+Number(childrenHome.d4Years16to18-0)+Number(childrenHome.d5Years16to18-0)+Number(childrenHome.d6Years16to18-0)+Number(childrenHome.d7aYears16to18-0)+
												Number(childrenHome.d1YearsGreaterThan18-0)+Number(childrenHome.d2YearsGreaterThan18-0)+Number(childrenHome.d3YearsGreaterThan18-0)+Number(childrenHome.d4YearsGreaterThan18-0)+
												Number(childrenHome.d5YearsGreaterThan18-0)+Number(childrenHome.d6YearsGreaterThan18-0)+Number(childrenHome.d7aYearsGreaterThan18-0)}}">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
													
							<div class="b4sectionheading" id="caseE"></div>
							<div class="grey-header headMarg">E.
								Children on the Last day of the reporting month</div>
							
							<div class="labelFont">
								<div class="form-group labelFont sectionCTop"></div>
								<table class="table table-bordered " id="tableE">
									<thead>
										<tr>
											<th>Description</th>
											<th>0-6 years</th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> E.1.
													Age distribution of Children on the last day of the reporting month</label></td>
													
											<td><input type="text"  id="e1Years0to6" readonly
												tabindex= -1
												value="{{Number(Number(childrenHome.aYears0to6-0)+Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b2Years0to6-0)-0)-Number(Number(childrenHome.d1Years0to6-0)+Number(childrenHome.d2Years0to6-0)+Number(childrenHome.d3Years0to6-0)+
												Number(childrenHome.d4Years0to6-0)+Number(childrenHome.d5Years0to6-0)+Number(childrenHome.d6Years0to6-0)+Number(childrenHome.d7aYears0to6-0)-0)
														}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
												
											<td><input type="text"  readonly
												id="e1Years7to11" tabindex= -1
												value="{{Number(Number(childrenHome.aYears7to11-0)+Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b2Years7to11-0)-0)-Number(Number(childrenHome.d1Years7to11-0)+Number(childrenHome.d2Years7to11-0)+Number(childrenHome.d3Years7to11-0)+
												Number(childrenHome.d4Years7to11-0)+Number(childrenHome.d5Years7to11-0)+Number(childrenHome.d6Years7to11-0)+Number(childrenHome.d7aYears7to11-0)-0)
														}}"
												ng-disabled="childrenHome.submitted" 
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
												
											<td><input type="text"  readonly
												id="e1Years12to15" tabindex= -1
												value="{{Number(Number(childrenHome.aYears12to15-0)+Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b2Years12to15-0)-0)-Number(Number(childrenHome.d1Years12to15-0)+Number(childrenHome.d2Years12to15-0)+Number(childrenHome.d3Years12to15-0)+
												Number(childrenHome.d4Years12to15-0)+Number(childrenHome.d5Years12to15-0)+Number(childrenHome.d6Years12to15-0)+Number(childrenHome.d7aYears12to15-0)-0)
														
														}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
												
											<td><input type="text"  readonly
												id="e1Years16to18" tabindex= -1
												ng-disabled="childrenHome.submitted"
												value="{{Number(Number(childrenHome.aYears16to18-0)+Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b2Years16to18-0)-0)-Number(Number(childrenHome.d1Years16to18-0)+Number(childrenHome.d2Years16to18-0)+Number(childrenHome.d3Years16to18-0)+
												Number(childrenHome.d4Years16to18-0)+Number(childrenHome.d5Years16to18-0)+Number(childrenHome.d6Years16to18-0)+Number(childrenHome.d7aYears16to18-0)-0)
														}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
												
											<td><input type="text"  readonly
												 id="e1YearsGreaterThan18" tabindex= -1
												ng-disabled="childrenHome.submitted"
												value="{{Number(Number(childrenHome.aYearsGreaterThan18-0)+Number(childrenHome.b1YearsGreaterThan18-0)+Number(childrenHome.b2YearsGreaterThan18-0)-0)-Number(Number(childrenHome.d1YearsGreaterThan18-0)+Number(childrenHome.d2YearsGreaterThan18-0)+Number(childrenHome.d3YearsGreaterThan18-0)+
												Number(childrenHome.d4YearsGreaterThan18-0)+Number(childrenHome.d5YearsGreaterThan18-0)+Number(childrenHome.d6YearsGreaterThan18-0)+Number(childrenHome.d7aYearsGreaterThan18-0)-0)
														}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
												
											<td><input type="text"  readonly
												id="e1Total" tabindex= -1
												ng-disabled="childrenHome.submitted"
												value="{{Number(Number(childrenHome.aYears0to6-0)+Number(childrenHome.b1Years0to6-0)+Number(childrenHome.b2Years0to6-0)-0)-Number(Number(childrenHome.d1Years0to6-0)+Number(childrenHome.d2Years0to6-0)+Number(childrenHome.d3Years0to6-0)+
												Number(childrenHome.d4Years0to6-0)+Number(childrenHome.d5Years0to6-0)+Number(childrenHome.d6Years0to6-0)+Number(childrenHome.d7aYears0to6-0)-0)+
												Number(Number(childrenHome.aYears7to11-0)+Number(childrenHome.b1Years7to11-0)+Number(childrenHome.b2Years7to11-0)-0)-Number(Number(childrenHome.d1Years7to11-0)+Number(childrenHome.d2Years7to11-0)+Number(childrenHome.d3Years7to11-0)+
												Number(childrenHome.d4Years7to11-0)+Number(childrenHome.d5Years7to11-0)+Number(childrenHome.d6Years7to11-0)+Number(childrenHome.d7aYears7to11-0)-0)+
												Number(Number(childrenHome.aYears12to15-0)+Number(childrenHome.b1Years12to15-0)+Number(childrenHome.b2Years12to15-0)-0)-Number(Number(childrenHome.d1Years12to15-0)+Number(childrenHome.d2Years12to15-0)+Number(childrenHome.d3Years12to15-0)+
												Number(childrenHome.d4Years12to15-0)+Number(childrenHome.d5Years12to15-0)+Number(childrenHome.d6Years12to15-0)+Number(childrenHome.d7aYears12to15-0)-0)+
												Number(Number(childrenHome.aYears16to18-0)+Number(childrenHome.b1Years16to18-0)+Number(childrenHome.b2Years16to18-0)-0)-Number(Number(childrenHome.d1Years16to18-0)+Number(childrenHome.d2Years16to18-0)+Number(childrenHome.d3Years16to18-0)+
												Number(childrenHome.d4Years16to18-0)+Number(childrenHome.d5Years16to18-0)+Number(childrenHome.d6Years16to18-0)+Number(childrenHome.d7aYears16to18-0)-0)+
												Number(Number(childrenHome.aYearsGreaterThan18-0)+Number(childrenHome.b1YearsGreaterThan18-0)+Number(childrenHome.b2YearsGreaterThan18-0)-0)-Number(Number(childrenHome.d1YearsGreaterThan18-0)+Number(childrenHome.d2YearsGreaterThan18-0)+Number(childrenHome.d3YearsGreaterThan18-0)+
												Number(childrenHome.d4YearsGreaterThan18-0)+Number(childrenHome.d5YearsGreaterThan18-0)+Number(childrenHome.d6YearsGreaterThan18-0)+Number(childrenHome.d7aYearsGreaterThan18-0)-0)
														}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							<div class="b4sectionheading" id="caseF"></div>
							<div class="grey-header headMarg">F. Category wise break up of cases pending as on last day of month </div>
							
							<div class="labelFont">
								<div class="form-group labelFont sectionCTop"></div>
								<table class="table table-bordered " id="tableF">
									<thead>
										<tr>
											<th style="width:165px !important">Description</th>
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
											<td><label
												class="col-md-12 control-label labelLeftAlign">F.1. Total Children</label></td>
												
											<td><input type="number" required only-four-digits id="fST" 
												ng-model="childrenHome.fST"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "></td>
												
											<td><input type="number" required only-four-digits 
												id="fSC"
												ng-model="childrenHome.fSC"
												ng-disabled="childrenHome.submitted" 
												class="form-control inputBackground tableinputWidth removeExponentialValueE "></td>
												
											<td><input type="number" required only-four-digits 
												id="fEBC"
												ng-model="childrenHome.fEBC"
												ng-disabled="childrenHome.submitted" 
												class="form-control inputBackground tableinputWidth removeExponentialValueE "></td>
												
											<td><input type="number" required only-four-digits 
												id="fOBC"
												ng-model="childrenHome.fOBC"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "></td>
												
											<td><input type="number" required only-four-digits 
												id="fOthers"
												ng-model="childrenHome.fOthers"
												ng-disabled="childrenHome.submitted" 
												class="form-control inputBackground tableinputWidth removeExponentialValueE "></td>
												
											<td><input type="number" required only-four-digits 
												id="fNotKnown"
												ng-disabled="childrenHome.submitted"
												ng-model="childrenHome.fNotKnown"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "></td>
												
											<td><input type="text" readonly tabindex=-1
												id="fTotal" ng-disabled="childrenHome.submitted"
												value="{{Number(childrenHome.fST-0)+Number(childrenHome.fSC-0)+Number(childrenHome.fOBC-0)+Number(childrenHome.fEBC-0)+
												Number(childrenHome.fOthers-0)+Number(childrenHome.fNotKnown-0)
												}}"
												class="form-control inputBackground tableinputWidth  readonlyStyle"></td>
												
											<td><input type="number" only-four-digits 
												id="fMinority" required
												ng-disabled="childrenHome.submitted"
												ng-model="childrenHome.fMinority"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							
							<div class="b4sectionheading" id="caseG"></div>
							<div class="grey-header headMarg">
								G. Educational Details of Children in CCI</div>
							
							<div class="labelFont sectionCTop">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered" id="tableG">


									<thead>
										<tr>
											<th>Educational description</th>
											<th>0-6 years</th>
											<th>07-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														G.1.Children enrolled in Special training (RTE)/ Bridge course </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g1Years0to6Id"
												ng-model="childrenHome.g1Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g1Years7to11Id"
												ng-model="childrenHome.g1Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g1Years12to15Id"
												ng-model="childrenHome.g1Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g1Years16to18Id"
												ng-model="childrenHome.g1Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g1YearsGreaterThan18Id"
												ng-model="childrenHome.g1YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" only-four-digits tabindex= -1 readonly
												id="g1Total" 
												value="{{Number(childrenHome.g1Years0to6-0)+Number(childrenHome.g1Years7to11-0)+Number(childrenHome.g1Years12to15-0)+
												Number(childrenHome.g1Years16to18-0)+Number(childrenHome.g1YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														G.2.  Attending non-formal education classes within home</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												 id="g2Years0to6Id"
												ng-model="childrenHome.g2Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g2Years7to11Id"
												ng-model="childrenHome.g2Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g2Years12to15Id"
												ng-model="childrenHome.g2Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g2Years16to18Id"
												ng-model="childrenHome.g2Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g2YearsGreaterThan18Id"
												ng-model="childrenHome.g2YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" only-four-digits tabindex= -1 readonly
												id="g2Total" 
												value="{{Number(childrenHome.g2Years0to6-0)+Number(childrenHome.g2Years7to11-0)+Number(childrenHome.g2Years12to15-0)+Number(childrenHome.g2Years16to18-0)+Number(childrenHome.g2YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														G.3. Attending formal education in regular school</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g3Years0to6Id"
												ng-model="childrenHome.g3Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g3Years7to11id"
												ng-model="childrenHome.g3Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g3Years12to15Id"
												ng-model="childrenHome.g3Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g3Years16to18Id"
												ng-model="childrenHome.g3Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="g3YearsGreaterThan18Id"
												ng-model="childrenHome.g3YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text"  readonly tabindex= -1
												id="g3Total" 
												value="{{Number(childrenHome.g3Years0to6-0)+Number(childrenHome.g3Years7to11-0)+Number(childrenHome.g3Years12to15-0)+Number(childrenHome.g3Years16to18-0)+Number(childrenHome.g3YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														G.4. Children in Residential School</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g4Years0to6Id"
												ng-model="childrenHome.g4Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g4Years7to11Id"
												ng-model="childrenHome.g4Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g4Years12to15"
												ng-model="childrenHome.g4Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="g4Years16to18"
												ng-model="childrenHome.g4Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="g4YearsGreaterThan18Id"
												ng-model="childrenHome.g4YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" readonly
												id="g4Total"  tabindex= -1
												value="{{Number(childrenHome.g4Years0to6-0)+Number(childrenHome.g4Years7to11-0)+Number(childrenHome.g4Years12to15-0)+
														Number(childrenHome.g4Years16to18-0)+Number(childrenHome.g4YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>

										</tr>
										<tr>
											<td>
												<div class=" textAlign">
													<label class="control-label" for="textinput">
														G.5. Children with special need attending special school
													</label>

												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g5Years0to6Id"
												ng-model="childrenHome.g5Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g5Years7to11Id"
												ng-model="childrenHome.g5Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g5Years12to15Id"
												ng-model="childrenHome.g5Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g5Years16to18" id="g5Years16to18Id"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="g5YearsGreaterThan18Id"
												ng-model="childrenHome.g5YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" readonly
												id="g5Total"  tabindex= -1
												value="{{Number(childrenHome.g5Years0to6-0)+Number(childrenHome.g5Years7to11-0)+Number(childrenHome.g5Years12to15-0)+Number(childrenHome.g5Years16to18-0)+Number(childrenHome.g5YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>


										<tr>
											<td>
												<div class=" textAlign">
													<label class="control-label" for="textinput">
														G.6. Not enrolled in any educational programme </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												 id="g6Years0to6"
												ng-model="childrenHome.g6Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="g6Years7to11"
												ng-model="childrenHome.g6Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="g6Years12to15" 
												ng-model="childrenHome.g6Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="g6Years16to18Id"
												ng-model="childrenHome.g6Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g6YearsGreaterThan18"
												 id="g6YearsGreaterThan18Id"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" 
												id="g6Total"  tabindex= -1 readonly
												value="{{Number(childrenHome.g6Years0to6-0)+Number(childrenHome.g6Years7to11-0)+Number(childrenHome.g6Years12to15-0)+Number(childrenHome.g6Years16to18-0)+Number(childrenHome.g6YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														G.7. Enrolled for Vocational Training </label>

												</div>
											</td>
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g7Years0to6" id="g7Years0to6Id"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g7Years7to11" id="g7Years7to11Id"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g7Years12to15" id="g7Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g7Years16to18" id="g7Years16to18Id"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												ng-model="childrenHome.g7YearsGreaterThan18" id="g7YearsGreaterThan18Id"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text"  readonly
												id="g7Total"  tabindex= -1
												value="{{Number(childrenHome.g7Years0to6-0)+Number(childrenHome.g7Years7to11-0)+Number(childrenHome.g7Years12to15-0)+Number(childrenHome.g7Years16to18-0)+Number(childrenHome.g7YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>

										</tr>

										

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														G.8. Total no. of children attending any educational programme</label>
												</div>
											</td>

											<td><input type="text" readonly id="g8Years0to6" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.g1Years0to6-0)+Number(childrenHome.g2Years0to6-0)+Number(childrenHome.g3Years0to6-0)+
												Number(childrenHome.g4Years0to6-0)+Number(childrenHome.g5Years0to6-0)+Number(childrenHome.g6Years0to6-0)+
												Number(childrenHome.g7Years0to6-0)}}">
											</td>
											
											<td><input type="text" readonly id="g8Years7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.g1Years7to11-0)+Number(childrenHome.g2Years7to11-0)+Number(childrenHome.g3Years7to11-0)+
												Number(childrenHome.g4Years7to11-0)+Number(childrenHome.g5Years7to11-0)+Number(childrenHome.g6Years7to11-0)+
												Number(childrenHome.g7Years7to11-0)}}">
											</td>
											
											<td><input type="text" readonly id="g8Years12to15" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.g1Years12to15-0)+Number(childrenHome.g2Years12to15-0)+Number(childrenHome.g3Years12to15-0)+
												Number(childrenHome.g4Years12to15-0)+Number(childrenHome.g5Years12to15-0)+Number(childrenHome.g6Years12to15-0)+
												Number(childrenHome.g7Years12to15-0)}}">
											</td>
											<td><input type="text" readonly id="g8Years16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.g1Years16to18-0)+Number(childrenHome.g2Years16to18-0)+Number(childrenHome.g3Years16to18-0)+
												Number(childrenHome.g4Years16to18-0)+Number(childrenHome.g5Years16to18-0)+Number(childrenHome.g6Years16to18-0)+
												Number(childrenHome.g7Years16to18-0)}}">
											</td>
											<td><input type="text" readonly id="g8YearsGreaterThan18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.g1YearsGreaterThan18-0)+Number(childrenHome.g2YearsGreaterThan18-0)+
												Number(childrenHome.g3YearsGreaterThan18-0)+Number(childrenHome.g4YearsGreaterThan18-0)+
												Number(childrenHome.g5YearsGreaterThan18-0)+Number(childrenHome.g6YearsGreaterThan18-0)+
												Number(childrenHome.g7YearsGreaterThan18-0)}}">
											</td>
											<td><input type="text" readonly id="g8Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.g1Years0to6-0)+Number(childrenHome.g2Years0to6-0)+Number(childrenHome.g3Years0to6-0)+
												Number(childrenHome.g4Years0to6-0)+Number(childrenHome.g5Years0to6-0)+Number(childrenHome.g6Years0to6-0)+
												Number(childrenHome.g7Years0to6-0)+Number(childrenHome.g1Years7to11-0)+Number(childrenHome.g2Years7to11-0)+
												Number(childrenHome.g3Years7to11-0)+Number(childrenHome.g4Years7to11-0)+Number(childrenHome.g5Years7to11-0)+
												Number(childrenHome.g6Years7to11-0)+Number(childrenHome.g7Years7to11-0)+Number(childrenHome.g1Years12to15-0)+
												Number(childrenHome.g2Years12to15-0)+Number(childrenHome.g3Years12to15-0)+Number(childrenHome.g4Years12to15-0)+
												Number(childrenHome.g5Years12to15-0)+Number(childrenHome.g6Years12to15-0)+Number(childrenHome.g7Years12to15-0)+
												Number(childrenHome.g1Years16to18-0)+Number(childrenHome.g2Years16to18-0)+Number(childrenHome.g3Years16to18-0)+
												Number(childrenHome.g4Years16to18-0)+Number(childrenHome.g5Years16to18-0)+Number(childrenHome.g6Years16to18-0)+
												Number(childrenHome.g7Years16to18-0)+Number(childrenHome.g1YearsGreaterThan18-0)+Number(childrenHome.g2YearsGreaterThan18-0)+
												Number(childrenHome.g3YearsGreaterThan18-0)+Number(childrenHome.g4YearsGreaterThan18-0)+
												Number(childrenHome.g5YearsGreaterThan18-0)+Number(childrenHome.g6YearsGreaterThan18-0)+
												Number(childrenHome.g7YearsGreaterThan18-0)}}">
											</td>
									</tbody>
								</table>
							</div>
								<div class="b4sectionheading" id="caseH"></div>
							<div class="grey-header headMarg">
								H. Health Status of the Children Residing in the CCI.</div>

								<div class="labelFont sectionCTop">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered" id="tableH">
									<thead>
										<tr>
											<th>Description </th>
											<th>0-6 years</th>
											<th>07-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>>18 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														H.1.  Children Mentally Challenged </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="h1Years0to6Id"
												ng-model="childrenHome.h1Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h1Years7to11Id"
												ng-model="childrenHome.h1Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h1Years12to15Id"
												ng-model="childrenHome.h1Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h1Years16to18Id"
												ng-model="childrenHome.h1Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h1YearsGreaterThan18Id"
												ng-model="childrenHome.h1YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" only-four-digits
												id="h1Total"  tabindex= -1 readonly
												value="{{Number(childrenHome.h1Years0to6-0)+Number(childrenHome.h1Years7to11-0)+Number(childrenHome.h1Years12to15-0)+Number(childrenHome.h1Years16to18-0)+Number(childrenHome.h1YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														H.2. Children Physically Challenged</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												 id="h2Years0to6"
												ng-model="childrenHome.h2Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h2Years7to11"
												ng-model="childrenHome.h2Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h2Years12to15"
												ng-model="childrenHome.h2Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h2Years16to18"
												ng-model="childrenHome.h2Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h2YearsGreaterThan18"
												ng-model="childrenHome.h2YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" only-four-digits
												id="h2Total" tabindex= -1 readonly
												value="{{Number(childrenHome.h2Years0to6-0)+Number(childrenHome.h2Years7to11-0)+Number(childrenHome.h2Years12to15-0)+Number(childrenHome.h2Years16to18-0)+Number(childrenHome.h2YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														H.3. Children suffering with critical illness (TB,HIV/AIDS etc)</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="h3Years0to6Id"
												ng-model="childrenHome.h3Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h3Years7to11Id"
												ng-model="childrenHome.h3Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h3Years12to15Id"
												ng-model="childrenHome.h3Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h3Years16to18Id"
												ng-model="childrenHome.h3Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="h3YearsGreaterThan18Id"
												ng-model="childrenHome.h3YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text" only-four-digits readonly
												id="h3Total"  tabindex= -1
												value="{{Number(childrenHome.h3Years0to6-0)+Number(childrenHome.h3Years7to11-0)+Number(childrenHome.h3Years12to15-0)+Number(childrenHome.h3Years16to18-0)+Number(childrenHome.h3YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														H.4. Children with Multiple Disability</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="h4Years0to6Id"
												ng-model="childrenHome.h4Years0to6"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h4Years7to11Id"
												ng-model="childrenHome.h4Years7to11"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h4Years12to15Id"
												ng-model="childrenHome.h4Years12to15"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												id="h4Years16to18Id"
												ng-model="childrenHome.h4Years16to18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="number" required only-four-digits
												 id="h4YearsGreaterThan18Id"
												ng-model="childrenHome.h4YearsGreaterThan18"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											
											<td><input type="text"  readonly
												id="h4Total"  tabindex= -1
												value="{{Number(childrenHome.h4Years0to6-0)+Number(childrenHome.h4Years7to11-0)+Number(childrenHome.h4Years12to15-0)+Number(childrenHome.h4Years16to18-0)+Number(childrenHome.h4YearsGreaterThan18-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>

										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														H.5. Total Children</label>
												</div>
											</td>

											<td><input type="text" readonly id="h5Years0to6" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.h1Years0to6-0)+Number(childrenHome.h2Years0to6-0)+Number(childrenHome.h3Years0to6-0)+Number(childrenHome.h4Years0to6-0)}}">
											</td>
											
											<td><input type="text" readonly id="h5Years7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.h1Years7to11-0)+Number(childrenHome.h2Years7to11-0)+Number(childrenHome.h3Years7to11-0)+Number(childrenHome.h4Years7to11-0)}}">
											</td>
											
											<td><input type="text" readonly id="h5Years12to15" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.h1Years12to15-0)+Number(childrenHome.h2Years12to15-0)+Number(childrenHome.h3Years12to15-0)+Number(childrenHome.h4Years12to15-0)}}">
											</td>
											<td><input type="text" readonly id="h5Years16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.h1Years16to18-0)+Number(childrenHome.h2Years16to18-0)+Number(childrenHome.h3Years16to18-0)+Number(childrenHome.h4Years16to18-0)}}">
											</td>
											<td><input type="text" readonly id="h5YearsGreaterThan18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.h1YearsGreaterThan18-0)+Number(childrenHome.h2YearsGreaterThan18-0)+Number(childrenHome.h3YearsGreaterThan18-0)+Number(childrenHome.h4YearsGreaterThan18-0)}}">
											</td>
											<td><input type="text" readonly id="h5Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.h1Years0to6-0)+Number(childrenHome.h2Years0to6-0)+Number(childrenHome.h3Years0to6-0)+Number(childrenHome.h4Years0to6-0)+Number(childrenHome.h1Years7to11-0)+Number(
														childrenHome.h2Years7to11-0)+Number(childrenHome.h3Years7to11-0)+Number(childrenHome.h4Years7to11-0)+Number(childrenHome.h1Years12to15-0)+Number(childrenHome.h2Years12to15-0)+Number(childrenHome.h3Years12to15-0)+Number(
														childrenHome.h4Years12to15-0)+Number(childrenHome.h1Years16to18-0)+Number(childrenHome.h2Years16to18-0)+Number(childrenHome.h3Years16to18-0)+Number(childrenHome.h4Years16to18-0)+Number(
														childrenHome.h1YearsGreaterThan18-0)+Number(childrenHome.h2YearsGreaterThan18-0)+Number(childrenHome.h3YearsGreaterThan18-0)+Number(childrenHome.h4YearsGreaterThan18-0)}}">
											</td>
									</tbody>
								</table>
							</div>
							
							
							
							<div class="b4sectionheading" id="caseI"></div>
							<div class="grey-header headMarg">I. Children Residing in the CCI by duration and Type</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableI">

									<thead>
										<tr>
											<th style="width:215px !important">Description</th>
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
														I.1. Orphan/Abandoned</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iOrphan0to30Daysid"
												ng-model="childrenHome.iOrphan0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOrphanMonths1to2Id"
												ng-model="childrenHome.iOrphanMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOrphanMonths2to3Id"
												ng-model="childrenHome.iOrphanMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOrphanMonths3to4Id"
												ng-model="childrenHome.iOrphanMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOrphanMonths4to12Id"
												ng-model="childrenHome.iOrphanMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOrphanMonthsMoreThan1Yearid"
												ng-model="childrenHome.iOrphanMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iOrphanTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iOrphan0to30Days-0)+Number(childrenHome.iOrphanMonths1to2-0)+
												Number(childrenHome.iOrphanMonths2to3-0)+Number(childrenHome.iOrphanMonths3to4-0)+Number(childrenHome.iOrphanMonths4to12-0)+
												Number(childrenHome.iOrphanMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.2. Run Away /Missing</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iRunAway0to30DaysId"
												ng-model="childrenHome.iRunAway0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iRunAwayMonths1to2Id"
												ng-model="childrenHome.iRunAwayMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iRunAwayMonths2to3Id"
												ng-model="childrenHome.iRunAwayMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iRunAwayMonths3to4Id"
												ng-model="childrenHome.iRunAwayMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iRunAwayMonths4to12Id"
												ng-model="childrenHome.iRunAwayMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iRunAwayMonthsMoreThan1YearId"
												ng-model="childrenHome.iRunAwayMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iRunAwayTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iRunAway0to30Days-0)+Number(childrenHome.iRunAwayMonths1to2-0)+
												Number(childrenHome.iRunAwayMonths2to3-0)+Number(childrenHome.iRunAwayMonths3to4-0)+
												Number(childrenHome.iRunAwayMonths4to12-0)+Number(childrenHome.iRunAwayMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.3. Legally Free For Adoption</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iLegallYFreeForAdoption0to30DaysId"
												ng-model="childrenHome.iLegallYFreeForAdoption0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iLegallYFreeForAdoptionMonths1to2Id"
												ng-model="childrenHome.iLegallYFreeForAdoptionMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iLegallYFreeForAdoptionMonths2to3Id"
												ng-model="childrenHome.iLegallYFreeForAdoptionMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iLegallYFreeForAdoptionMonths3to4Id"
												ng-model="childrenHome.iLegallYFreeForAdoptionMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iLegallYFreeForAdoptionMonths4to12Id"
												ng-model="childrenHome.iLegallYFreeForAdoptionMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iLegallYFreeForAdoptionMonthsMoreThan1YearId"
												ng-model="childrenHome.iLegallYFreeForAdoptionMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iLegallYFreeForAdoptionTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iLegallYFreeForAdoption0to30Days-0)+Number(childrenHome.iLegallYFreeForAdoptionMonths1to2-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths2to3-0)+Number(childrenHome.iLegallYFreeForAdoptionMonths3to4-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths4to12-0)+Number(childrenHome.iLegallYFreeForAdoptionMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.4. Child Labour</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iChildLabour0to30DaysId"
												ng-model="childrenHome.iChildLabour0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iChildLabourMonths1to2Id"
												ng-model="childrenHome.iChildLabourMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iChildLabourMonths2to3Id"
												ng-model="childrenHome.iChildLabourMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iChildLabourMonths3to4Id"
												ng-model="childrenHome.iChildLabourMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iChildLabourMonths4to12Id"
												ng-model="childrenHome.iChildLabourMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iChildLabourMonthsMoreThan1YearId"
												ng-model="childrenHome.iChildLabourMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iChildLabourTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iChildLabour0to30Days-0)+Number(childrenHome.iChildLabourMonths1to2-0)+
												Number(childrenHome.iChildLabourMonths2to3-0)+Number(childrenHome.iChildLabourMonths3to4-0)+
												Number(childrenHome.iChildLabourMonths4to12-0)+Number(childrenHome.iChildLabourMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.5. Trafficked Children</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iTrafficked0to30DaysId"
												ng-model="childrenHome.iTrafficked0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iTraffickedMonths1to2Id"
												ng-model="childrenHome.iTraffickedMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iTraffickedMonths2to3Id"
												ng-model="childrenHome.iTraffickedMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iTraffickedMonths3to4Id"
												ng-model="childrenHome.iTraffickedMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iTraffickedMonths4to12Id"
												ng-model="childrenHome.iTraffickedMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iTraffickedMonthsMoreThan1YearId"
												ng-model="childrenHome.iTraffickedMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iTraffickedTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iTrafficked0to30Days-0)+Number(childrenHome.iTraffickedMonths1to2-0)+
												Number(childrenHome.iTraffickedMonths2to3-0)+Number(childrenHome.iTraffickedMonths3to4-0)+
												Number(childrenHome.iTraffickedMonths4to12-0)+Number(childrenHome.iTraffickedMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.6. Victim of Sexual offense</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iVicxtimOfSexual0to30DaysId"
												ng-model="childrenHome.iVicxtimOfSexual0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iVicxtimOfSexualMonths1to2Id"
												ng-model="childrenHome.iVicxtimOfSexualMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iVicxtimOfSexualMonths2to3Id"
												ng-model="childrenHome.iVicxtimOfSexualMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iVicxtimOfSexualMonths3to4Id"
												ng-model="childrenHome.iVicxtimOfSexualMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iVicxtimOfSexualMonths4to12Id"
												ng-model="childrenHome.iVicxtimOfSexualMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iVicxtimOfSexualMonthsMoreThan1YearId"
												ng-model="childrenHome.iVicxtimOfSexualMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iVicxtimOfSexualTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iVicxtimOfSexual0to30Days-0)+Number(childrenHome.iVicxtimOfSexualMonths1to2-0)+
												Number(childrenHome.iVicxtimOfSexualMonths2to3-0)+Number(childrenHome.iVicxtimOfSexualMonths3to4-0)+
												Number(childrenHome.iVicxtimOfSexualMonths4to12-0)+Number(childrenHome.iVicxtimOfSexualMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.7. Other Children</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="iOtherChildren0to30DaysId"
												ng-model="childrenHome.iOtherChildren0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOtherChildrenMonths1to2Id"
												ng-model="childrenHome.iOtherChildrenMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOtherChildrenMonths2to3Id"
												ng-model="childrenHome.iOtherChildrenMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOtherChildrenMonths3to4Id"
												ng-model="childrenHome.iOtherChildrenMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOtherChildrenMonths4to12Id"
												ng-model="childrenHome.iOtherChildrenMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="iOtherChildrenMonthsMoreThan1YearId"
												ng-model="childrenHome.iOtherChildrenMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="iOtherChildrenTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.iOtherChildren0to30Days-0)+Number(childrenHome.iOtherChildrenMonths1to2-0)+
												Number(childrenHome.iOtherChildrenMonths2to3-0)+Number(childrenHome.iOtherChildrenMonths3to4-0)+
												Number(childrenHome.iOtherChildrenMonths4to12-0)+Number(childrenHome.iOtherChildrenMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr ng-show="showHideBasedOnFlag('iOtherChildrenTotal','i7aOtherSpecify')">
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														I.7.a. If Other Children, Specify</label>
												</div>
											</td>
											<td colspan="7"><input type="text"  id="i7aOtherSpecify"
												ng-model="childrenHome.i7aOtherSpecify" fifty-characters-validation
												ng-disabled="childrenHome.submitted" ng-required="Number(childrenHome.iOtherChildren0to30Days-0)+
																								Number(childrenHome.iOtherChildrenMonths1to2-0)+
																								Number(childrenHome.iOtherChildrenMonths2to3-0)+
																								Number(childrenHome.iOtherChildrenMonths3to4-0)+
																								Number(childrenHome.iOtherChildrenMonths4to12-0)+
																								Number(childrenHome.iOtherChildrenMonthsMoreThan1Year-0)>0"
												class="form-control inputBackground tableinputWidth ">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														I.8.Total</label>
												</div>
											</td>
											<td><input type="text"  readonly
												id="iTotal0to30Days" tabindex= -1
												value="{{Number(childrenHome.iOrphan0to30Days-0)+Number(childrenHome.iRunAway0to30Days-0)+
												Number(childrenHome.iLegallYFreeForAdoption0to30Days-0)+Number(childrenHome.iChildLabour0to30Days-0)+
												Number(childrenHome.iTrafficked0to30Days-0)+Number(childrenHome.iVicxtimOfSexual0to30Days-0)+
												Number(childrenHome.iOtherChildren0to30Days-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="iTotalMonths1to2" tabindex= -1
												value="{{Number(childrenHome.iOrphanMonths1to2-0)+Number(childrenHome.iRunAwayMonths1to2-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths1to2-0)+Number(childrenHome.iChildLabourMonths1to2-0)+
												Number(childrenHome.iTraffickedMonths1to2-0)+Number(childrenHome.iVicxtimOfSexualMonths1to2-0)+
												Number(childrenHome.iOtherChildrenMonths1to2-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="iTotalMonths2to3" tabindex= -1
												value="{{Number(childrenHome.iOrphanMonths2to3-0)+Number(childrenHome.iRunAwayMonths2to3-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths2to3-0)+Number(childrenHome.iChildLabourMonths2to3-0)+
												Number(childrenHome.iTraffickedMonths2to3-0)+Number(childrenHome.iVicxtimOfSexualMonths2to3-0)+
												Number(childrenHome.iOtherChildrenMonths2to3-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="iTotalMonths3to4" tabindex= -1
												value="{{Number(childrenHome.iOrphanMonths3to4-0)+Number(childrenHome.iRunAwayMonths3to4-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths3to4-0)+Number(childrenHome.iChildLabourMonths3to4-0)+
												Number(childrenHome.iTraffickedMonths3to4-0)+Number(childrenHome.iVicxtimOfSexualMonths3to4-0)+
												Number(childrenHome.iOtherChildrenMonths3to4-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="iTotalMonths4to12" tabindex= -1
												value="{{Number(childrenHome.iOrphanMonths4to12-0)+Number(childrenHome.iRunAwayMonths4to12-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths4to12-0)+Number(childrenHome.iChildLabourMonths4to12-0)+
												Number(childrenHome.iTraffickedMonths4to12-0)+Number(childrenHome.iVicxtimOfSexualMonths4to12-0)+
												Number(childrenHome.iOtherChildrenMonths4to12-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="iTotalMonthsMoreThan1Year" tabindex= -1
												value="{{Number(childrenHome.iOrphanMonthsMoreThan1Year-0)+Number(childrenHome.iRunAwayMonthsMoreThan1Year-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonthsMoreThan1Year-0)+Number(childrenHome.iChildLabourMonthsMoreThan1Year-0)+
												Number(childrenHome.iTraffickedMonthsMoreThan1Year-0)+Number(childrenHome.iVicxtimOfSexualMonthsMoreThan1Year-0)+
												Number(childrenHome.iOtherChildrenMonthsMoreThan1Year-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text" readonly id="iTotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.iOrphan0to30Days-0)+Number(childrenHome.iRunAway0to30Days-0)+
												Number(childrenHome.iLegallYFreeForAdoption0to30Days-0)+Number(childrenHome.iChildLabour0to30Days-0)+
												Number(childrenHome.iTrafficked0to30Days-0)+Number(childrenHome.iVicxtimOfSexual0to30Days-0)+
												Number(childrenHome.iOtherChildren0to30Days-0)+Number(childrenHome.iOrphanMonths1to2-0)+
												Number(childrenHome.iRunAwayMonths1to2-0)+Number(childrenHome.iLegallYFreeForAdoptionMonths1to2-0)+
												Number(childrenHome.iChildLabourMonths1to2-0)+Number(childrenHome.iTraffickedMonths1to2-0)+
												Number(childrenHome.iVicxtimOfSexualMonths1to2-0)+Number(childrenHome.iOtherChildrenMonths1to2-0)+
												Number(childrenHome.iOrphanMonths2to3-0)+Number(childrenHome.iRunAwayMonths2to3-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths2to3-0)+Number(childrenHome.iChildLabourMonths2to3-0)+
												Number(childrenHome.iTraffickedMonths2to3-0)+Number(childrenHome.iVicxtimOfSexualMonths2to3-0)+
												Number(childrenHome.iOtherChildrenMonths2to3-0)+Number(childrenHome.iOrphanMonths3to4-0)+
												Number(childrenHome.iRunAwayMonths3to4-0)+Number(childrenHome.iLegallYFreeForAdoptionMonths3to4-0)+
												Number(childrenHome.iChildLabourMonths3to4-0)+Number(childrenHome.iTraffickedMonths3to4-0)+
												Number(childrenHome.iVicxtimOfSexualMonths3to4-0)+Number(childrenHome.iOtherChildrenMonths3to4-0)+
												Number(childrenHome.iOrphanMonths4to12-0)+Number(childrenHome.iRunAwayMonths4to12-0)+
												Number(childrenHome.iLegallYFreeForAdoptionMonths4to12-0)+Number(childrenHome.iChildLabourMonths4to12-0)+
												Number(childrenHome.iTraffickedMonths4to12-0)+Number(childrenHome.iVicxtimOfSexualMonths4to12-0)+
												Number(childrenHome.iOtherChildrenMonths4to12-0)+Number(childrenHome.iOrphanMonthsMoreThan1Year-0)+
												Number(childrenHome.iRunAwayMonthsMoreThan1Year-0)+Number(childrenHome.iLegallYFreeForAdoptionMonthsMoreThan1Year-0)+
												Number(childrenHome.iChildLabourMonthsMoreThan1Year-0)+Number(childrenHome.iTraffickedMonthsMoreThan1Year-0)+
												Number(childrenHome.iVicxtimOfSexualMonthsMoreThan1Year-0)+Number(childrenHome.iOtherChildrenMonthsMoreThan1Year-0)}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>
							
							
							<div class="b4sectionheading" id="caseJ"></div>
							<div class="grey-header headMarg">J. Children Residing in the CCI by duration</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableJ">

									<thead>
										<tr>
											<th>Description</th>
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
														J.1. Children on the First day of the month</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="j1Total0to30Days"
												ng-model="childrenHome.j1Total0to30Days"
												ng-disabled="childrenHome.submitted"  ng-keyup="checkJNegetive1('j1Total0to30Days','j3Total0to30Days','j4Total0to30Days','(0-30 days)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths1to2" ng-keyup="checkJNegetive1('j1TotalMonths1to2','j3TotalMonths1to2','j4TotalMonths1to2','(1-2 months)')"
												ng-model="childrenHome.j1TotalMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths2to3" ng-keyup="checkJNegetive1('j1TotalMonths2to3','j3TotalMonths2to3','j4TotalMonths2to3','(2-3 months)')"
												ng-model="childrenHome.j1TotalMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths3to4" ng-keyup="checkJNegetive1('j1TotalMonths3to4','j3TotalMonths3to4','j4TotalMonths3to4','(3-4 months)')"
												ng-model="childrenHome.j1TotalMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonths4to12" ng-keyup="checkJNegetive1('j1TotalMonths4to12','j3TotalMonths4to12','j4TotalMonths4to12','(4-12 months)')"
												ng-model="childrenHome.j1TotalMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j1TotalMonthsMoreThan1Year" ng-keyup="checkJNegetive1('j1TotalMonthsMoreThan1Year','j3TotalMonthsMoreThan1Year','j4TotalMonthsMoreThan1Year','(>1 year)')"
												ng-model="childrenHome.j1TotalMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="j1TotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.j1Total0to30Days-0)+Number(childrenHome.j1TotalMonths1to2-0)+Number(childrenHome.j1TotalMonths2to3-0)+Number(childrenHome.j1TotalMonths3to4-0)+Number(childrenHome.j1TotalMonths4to12-0)+Number(childrenHome.j1TotalMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														J.2. New Children Admitted in the Month</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="j2Total0to30Days" ng-keyup="checkJNegetive1('j2Total0to30Days','j3Total0to30Days','j4Total0to30Days','(0-30 days)')"
												ng-model="childrenHome.j2Total0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td colspan="5"><input type="number" readonly
												placeholder="Not Applicable" tabindex= -1
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
											</td>
											
											<td><input type="text" readonly id="j2TotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.j2Total0to30Days-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">
														J.3. Children moved out in the month</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="j3Total0to30Days"  ng-keyup="checkJNegetive('j3Total0to30Days','j4Total0to30Days','(0-30 days)')"
												ng-model="childrenHome.j3Total0to30Days"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths1to2" ng-keyup="checkJNegetive('j3TotalMonths1to2','j4TotalMonths1to2','(1-2 months)')"
												ng-model="childrenHome.j3TotalMonths1to2"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths2to3"  ng-keyup="checkJNegetive('j3TotalMonths2to3','j4TotalMonths2to3','(2-3 months)')"
												ng-model="childrenHome.j3TotalMonths2to3"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths3to4"  ng-keyup="checkJNegetive('j3TotalMonths3to4','j4TotalMonths3to4','(3-4 months)')"
												ng-model="childrenHome.j3TotalMonths3to4"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonths4to12" ng-keyup="checkJNegetive('j3TotalMonths4to12','j4TotalMonths4to12','(4-12 months)')"
												ng-model="childrenHome.j3TotalMonths4to12"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits
												id="j3TotalMonthsMoreThan1Year" ng-keyup="checkJNegetive('j3TotalMonthsMoreThan1Year','j4TotalMonthsMoreThan1Year','( >1 year)')"
												ng-model="childrenHome.j3TotalMonthsMoreThan1Year"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="j3TotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(childrenHome.j3Total0to30Days-0)+Number(childrenHome.j3TotalMonths1to2-0)+
												Number(childrenHome.j3TotalMonths2to3-0)+Number(childrenHome.j3TotalMonths3to4-0)+
												Number(childrenHome.j3TotalMonths4to12-0)+Number(childrenHome.j3TotalMonthsMoreThan1Year-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">
														J.4.Total  children on the Last day of the month</label>
												</div>
											</td>
											<td><input type="text"  readonly
												id="j4Total0to30Days" tabindex= -1
												value="{{Number(childrenHome.j1Total0to30Days-0)+Number(childrenHome.j2Total0to30Days-0)-Number(childrenHome.j3Total0to30Days-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="j4TotalMonths1to2" tabindex= -1
												value="{{Number(childrenHome.j1TotalMonths1to2-0)-Number(childrenHome.j3TotalMonths1to2-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="j4TotalMonths2to3" tabindex= -1
												value="{{Number(childrenHome.j1TotalMonths2to3-0)-Number(childrenHome.j3TotalMonths2to3-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="j4TotalMonths3to4" tabindex= -1
												value="{{Number(childrenHome.j1TotalMonths3to4-0)-Number(childrenHome.j3TotalMonths3to4-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="j4TotalMonths4to12" tabindex= -1
												value="{{Number(childrenHome.j1TotalMonths4to12-0)-Number(childrenHome.j3TotalMonths4to12-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text"  readonly
												id="j4TotalMonthsMoreThan1Year" tabindex= -1
												value="{{Number(childrenHome.j1TotalMonthsMoreThan1Year-0)-Number(childrenHome.j3TotalMonthsMoreThan1Year-0)}}"
												ng-disabled="childrenHome.submitted"
												class="form-control inputBackground tableinputWidth totalFont readonlyStyle">
											</td>
											<td><input type="text" readonly id="j4TotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(childrenHome.j1Total0to30Days-0)+Number(childrenHome.j2Total0to30Days-0)-Number(childrenHome.j3Total0to30Days-0)+
												Number(childrenHome.j1TotalMonths1to2-0)-Number(childrenHome.j3TotalMonths1to2-0)+Number(childrenHome.j1TotalMonths2to3-0)-
												Number(childrenHome.j3TotalMonths2to3-0)+Number(childrenHome.j1TotalMonths3to4-0)-Number(childrenHome.j3TotalMonths3to4-0)+
												Number(childrenHome.j1TotalMonths4to12-0)-Number(childrenHome.j3TotalMonths4to12-0)+
												Number(childrenHome.j1TotalMonthsMoreThan1Year-0)-Number(childrenHome.j3TotalMonthsMoreThan1Year-0)}}">
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
									<input type="number" required only-four-digits id="k1"
										ng-model="childrenHome.k1" onkeyup="checkK1()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.2. No. of children with single
									parent </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k2"
										ng-model="childrenHome.k2" onkeyup="checkK2()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.3. No. of children without parental
									care/without adult support </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k3"
										ng-model="childrenHome.k3" onkeyup="checkK3()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
							borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.4. No. of children referred by Dhawa
									Dal </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k4"
										ng-model="childrenHome.k4" onkeyup="checkK4()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.5. No. of children referred by
									Childline </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k5"
										ng-model="childrenHome.k5" onkeyup="checkK5()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.6. No. of children referred by
									NGO/Others </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k6"
										ng-model="childrenHome.k6"  onkeyup="checkK6()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.7. No. of children referred by
									SJPU/Police/CWPO </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="childrenHome.k7" onkeyup="checkK7()"
										ng-disabled="childrenHome.submitted" id="k7"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.8. No. of children referred to
									Hospital/PHC/Clinics </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="childrenHome.k8" onkeyup="checkK8()"
										ng-disabled="childrenHome.submitted" id="k8"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.9. No. of children transferred to
									home within the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="childrenHome.k9" onkeyup="checkK9()"
										ng-disabled="childrenHome.submitted" id="k9"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.10. No. of children transferred to
									home outside the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k10"
										ng-model="childrenHome.k10" onkeyup="checkK10()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.11. No. of Case History Formats
									filled (Till Date) </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="childrenHome.k11" id="k11"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.12. No. of Individual Care Plan
									(ICP) prepared (Till Date) </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k12"
										ng-model="childrenHome.k12"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.13. No. of children referred for
									Psychiatric treatment </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k13"
										ng-model="childrenHome.k13" onkeyup="checkK13()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.14. No. of First Time admissions </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k14"
										ng-model="childrenHome.k14"    onkeyup="checkK14n15()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">

								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.15. No. of Multiple admissions </label>
								<div class="col-md-6"> 
									<input type="number" required only-four-digits id="k15"
										ng-model="childrenHome.k15"  onkeyup="checkK14n15()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">

								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.16. No. of children sent for After
									care </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k16"
										ng-model="childrenHome.k16" onkeyup="checkK16()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.17. No. of entries on Track Child
									Portal </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k17"
										ng-model="childrenHome.k17" onkeyup="checkK17()"
										ng-disabled="childrenHome.submitted" 
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.18. No. of Runaway/Missing children
									returned to the CCI in the reporting month </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="childrenHome.k18" id="k18"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.19. No. of children sent for
									Sponsorship </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k19"
										ng-model="childrenHome.k19"  onkeyup="checkK19()"
										ng-disabled="childrenHome.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont">

								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.19.a Was the meeting of Children's
									Committee held? </label>
								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select class="form-control inputBackground" required
										ng-disabled="childrenHome.submitted"
										ng-model="childrenHome.k19aMeetingChildrenCommittee"
										ng-change="resetDate('meetingdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont"
								ng-show="childrenHome.k19aMeetingChildrenCommittee == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.19.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="meetingdatepicker"
										ng-model="childrenHome.k19ccMeetingDate"
										ng-disabled="childrenHome.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="meetingdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div>
							<div></div><div class="borderBottom"></div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.20.a Was the Home Management
									Committee meeting held ? </label>
								<div class="col-md-6">
									<select class="form-control inputBackground bxalgn" required
										ng-disabled="childrenHome.submitted"
										ng-model="childrenHome.k20aMeetingHomeManagementCommittee"
										ng-change="resetDate('homeManagementdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div class="form-group labelFont"
								ng-show="childrenHome.k20aMeetingHomeManagementCommittee == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.20.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="homeManagementdatepicker"
									ng-model="childrenHome.k20hmMeetingDate"
										ng-disabled="childrenHome.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="homeManagementdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.21.a Any other details ? </label>
								<div class="col-md-6">
									<select required
									    class="form-control inputBackground bxalgn"
										ng-disabled="childrenHome.submitted"
										ng-model="childrenHome.k21aAnyOthersDetails"
										ng-change="resetDate('Othermeetingdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div class="form-group labelFont"
								ng-show="childrenHome.k21aAnyOthersDetails == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.21.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="Othermeetingdatepicker"
									ng-model="childrenHome.k21OtherDetailsDate"
										ng-disabled="childrenHome.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="Othermeetingdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div>
									<div class="borderBottom"></div>
							<!-- -------------------------End Of K Section--------------------------------------- -->
								<div class="b4sectionheading" id="caseL"></div>
							<div class="grey-header headMarg">
								L. Training on JJ System</div>

							<div class="form-group labelFont sectionMarginTop
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.1. Was the training held on JJ
									system? </label>
								<div class="col-md-6 marginBottomTop">
									<select required
									    ng-change=resetToZeroaccdhome(childrenHome.l1wasTrainingHeld)
									    class="form-control inputBackground"
										ng-disabled="childrenHome.submitted"
										ng-model="childrenHome.l1wasTrainingHeld">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div ng-show="childrenHome.l1wasTrainingHeld == 'true'">

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> L.1.a. Number of Training held</label>
									<div class="col-md-6">
										<input type="number" 
											ng-blur="validateNoOfTraining(childrenHome.l1aNoTrainingHeld)"
											ng-init="childrenHome.l1aNoTrainingHeld=0" id="l1aNoTrainingHeld"
											ng-model="childrenHome.l1aNoTrainingHeld"
											ng-disabled="childrenHome.submitted" limit-to="2"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div class="panel-group" id="accordion" role="tablist"
									aria-multiselectable="true">

									<div class="panel panel-default"
										ng-repeat="cciChTrainingDetails in cciChTrainingDetailsRepetitionArray track by $index">
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
														<input type="number"  max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
															id="30days" limit-to="2"
															ng-model="cciChTrainingDetailsRepetitionArray[$index].durationTraining"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackgroundgeneral removeExponentialValueE">
													</div>
												</div>

												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c. Training From </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingFromDatepicker{{$index}}"
															ng-model="cciChTrainingDetailsRepetitionArray[$index].trainingFromDate"
															ng-disabled="childrenHome.submitted" readonly
															ng-click="openFromDatePicker($index)"
															class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x"  id="trainingFromDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>
												</div>


												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c.i. Training To </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingToDatepicker{{$index}}"
															ng-model="cciChTrainingDetailsRepetitionArray[$index].trainingToDate"
															ng-disabled="childrenHome.submitted" readonly
															ng-click="openToDatePicker($index)"
															class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
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
															ng-model="cciChTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
															ng-value="item.typeDetailsId"
															class="form-control inputBackgroundgeneral"
															ng-disabled="childrenHome.submitted"
															ng-change="resetAccordionOthers(cciChTrainingDetails)">
															<option value="" disabled selected>Select</option>
														</select>
													</div>
												</div>
												<div class="form-group labelFont"
													ng-show="cciChTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.d.i. Please specify,If Other
													</label>
													<div class="col-md-6">
														<input type="text" address-validation
															ng-model="cciChTrainingDetailsRepetitionArray[$index].traingOrganisedbyOthers"
															class="form-control inputBackgroundgeneral"
															ng-disabled="childrenHome.submitted">
													</div>
												</div>
												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e. Topic of training </label>
														
														<div class="col-md-6 topicOftrainingListJJb">
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="cb checkboxstyle">
																		<input id="chJJActRule" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totJjAct"> <label
																			for="chJJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="cLawsandICPS" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totChildRelatedLaws"> <label
																			for="LawsandICPS"> Child related Laws and ICPS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="POCSOAct" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totPosco"> <label
																			for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Combinedtraining" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
																			for="Combinedtraining"> Combined training </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="CPMIS" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totCpmis"> <label
																			for="CPMIS"> CPMIS </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CPMISTrackchild" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totTrackChild"> <label
																			for="CPMISTrackchild"> Track child </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CLTS" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totClts"> <label
																			for="CLTS"> CLTS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Others" type="checkbox" ng-disabled="childrenHome.submitted"
																		ng-click="clearTopicOfTrainingOthers(cciChTrainingDetailsRepetitionArray[$index])"
																		ng-model="cciChTrainingDetailsRepetitionArray[$index].totOthers"> <label
																			for="Others"> Others </label>
																	</div>
																</li>
																	</ul>
                                                                 </div>
														
												</div>
												<div class="form-group labelFonts"
													ng-show="cciChTrainingDetailsRepetitionArray[$index].totOthers">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e.i. Please specify,If Other
													</label>
													<div class="col-md-6">
														<input type="text" address-validation
															ng-model="cciChTrainingDetailsRepetitionArray[$index].totOthersSpecify"
															class="form-control inputBackgroundgeneral"
															ng-disabled="childrenHome.submitted">
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
														for="textinput">Superintendent </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabSuperintendent"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Probation officer/Case Worker </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabProbationOfficerCaseWorker"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">Counsellor</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabCounsellor"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">House Father/Mother</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabHouseFatherMother"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Store Keeper Cum Accountant</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabStoreKeeperCumAccountant"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Paramedical Staff</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabParamedicalStaff"
															ng-disabled="childrenHome.submitted"
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
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabOthers"
															ng-disabled="childrenHome.submitted" ng-keyup="resetTABOthers($index);"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div ng-show="cciChTrainingDetailsRepetitionArray[$index].tabOthers>0" 
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">If training attended by other, Please specify</label>
													<div class="col-md-6 marginBottomTop">
														<input type="text" address-validation
															ng-model="cciChTrainingDetailsRepetitionArray[$index].tabOthersSpecify"
															ng-disabled="childrenHome.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
												</div>
												<!-- ------------------------------------------------------ -->

											</div>
										</div>
									</div>
								</div>
								<!-- panel-group -->

								<div class="col-md-12 text-left">
									<div class="addingnewdetails-container">
										<div id="familydetailserror" class="error-style"></div>
										<button type="button" class="addingnewdetails" ng-disabled="childrenHome.submitted"
											ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
										<button type="button" class="addingnewdetails" ng-disabled="childrenHome.submitted"
											ng-show="cciChTrainingDetailsRepetitionArray.length > 1"
											ng-click="deleteConfirm()">-</button>
										<div id="maximumLimit10Error" class="error-style"></div>
									</div>
								</div>
							</div>
<br> <br> <br> <br>&nbsp;<br> <br>
							<!-- ------------------- -->

							<br> <br>&nbsp;<br> <br> &nbsp; <a href="#"
								class="back-to-top" style="display: inline;"
								class="fa fa-arrow-circle-up"></a>
						</form>


					</div>
				</div>
			</div>
			<br>&nbsp;

		</div>
	</div>


	<!-- -----------------------Confirmation Modal------------------------ -->


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
	
	<div class="modal fade autoSaveModal" id="successModalForAutoSaveCH"
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
							ng-click="saveCH(childrenHome, 'submit','ok')" data-dismiss="modal" aria-hidden="true">OK</button>
						<button id="button3id" name="button3id"
							class="btn btn-info bigbutton" type="submit" class="close"
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- -----------------Delete accordion Modal----------------------- -->

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




	<!-- ---------------------------------------------------------------- -->
	<script src="resources/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/angular.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		var app = angular.module('cciChildrenHomeApp', ['angular-md5']);
		var cpmisApp = angular.module('cciChildrenHomeApp');
	</script>
	<script src="resources/js/controllers/cciChildrenHomeController.js"></script>
	<script src="resources/js/jsFunctions/cciChJsFunctions.js"></script>
	<script src="resources/services/commonService.js"></script>
    <script src="resources/js/angular-md5.js"></script>
    <jsp:include page="fragments/footer.jsp" />

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
						scrollTop : 100
					}, 0);
				} else if ($('#cased').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 140
					}, 0);
				} else if ($('#casee').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 183
					}, 0);
				}else if ($('#casef').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 223
					}, 0);
				}else if ($('#caseg').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 279
					}, 0);
				}else if ($('#caseh').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 319
					}, 0);
				}else if ($('#casei').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 360
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
      $(document).ready(function () {
    	  $("input[type='number']").on('drop', function(event) {
  		    event.preventDefault();
  		});
         $("input[type='number']").bind('copy paste', function (e) {
            e.preventDefault();
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

	<script type="text/javascript">
		$("#sectionindctr li a").click(
				function() {
					$(this).parent().addClass('active').siblings().removeClass(
							'active');
				});
	</script>
	<script type="text/javascript">
		{
			window.addEventListener("hashchange", function() {
				scrollBy(0, 0);
			});
		}
	</script>
	<script type="text/javascript">
	  $('#cciChildrenHomeFormDetails').on('focus', 'input[type=number]', function (e) {
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



	<!-- ------------------------------- Fixed Part ---------------------------------------- -->
</body>
</html>