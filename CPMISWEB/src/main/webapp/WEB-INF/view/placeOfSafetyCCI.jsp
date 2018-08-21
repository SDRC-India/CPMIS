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
<title>CCI Place of Safety</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans"
	rel="stylesheet">
<link rel="stylesheet" href="resources/css/style.css">
<style type="text/css">
.table>tbody>tr>td {
    vertical-align: middle !important;
}
.nopersonsTrainedCCI {
    padding-left: 30px !important;
}
.table>thead>tr>th{
	vertical-align: middle !important;
}
.autoSaveModal{
   z-index: 9998; 
}

</style>
</head>
<body ng-app="placeofSafetyApp" ng-controller="placeofSafetyontroller" id="placeofSafetyontroller"
	ng-cloak data-spy="scroll" data-target="#myScrollspy" data-offset="20" class="ng-cloak">
	<!-- spinner -->
	<div id="spinner" class="loader" style="display: none;"></div>
	<div id="loader-mask" class="loader" style="display: none;"></div>
	<!-- /spinner -->
	<jsp:include page="fragments/header.jsp" />
	<div class="b4sectionheading" id="gInfo"></div>
	<!-- 	<div class="container"> -->
	<div class="row marginspc" >
	<form class="form-horizontal" name="placeofSafetyFormDetails"
							id="placeofSafetyFormDetails" data-toggle="validator" role="form">
		<nav class="col-md-3 sectionBoxShdw" id="myScrollspy">
			<h5 class="cwcHeading">Place Of Safety <br> Monthly Report</h5>

			<ul class="nav nav-pills nav-stacked sectionListCCI flexcroll" id="sectionindctr">
				<li id="gi" class="active sectionUlist"><a href="#gInfo"
					class="active1">General Information </a></li>

				<li id="casea" class="sectionUlist"><a href="#caseA">A.
						Children Residing on the First day of the Month</a></li>
				<li id="caseb" class="sectionUlist"><a href="#caseB">B. New
						Children Admitted in the Month</a></li>
				<li id="casec" class="sectionUlist"><a href="#caseC">C.
						Total Children in the month</a></li>
				<li id="cased" class="sectionUlist"><a href="#caseD">D.
						Institutions/Persons where Children Referred</a></li>
				<li id="casee" class="sectionUlist"><a href="#caseE">E.
						Children on the Last day of the Reporting Month</a></li>
				<li id="casef" class="sectionUlist"><a href="#caseF">F.
						Category wise break up of cases pending as on last day of month </a></li>
				<li id="caseg" class="sectionUlist"><a href="#caseG">G.
						Educational Details of Children in CCI</a></li>
				<li id="caseh" class="sectionUlist"><a href="#caseH">H.
						Health Status of the Children residing in the CCI</a></li>
				<li id="casei" class="sectionUlist"><a href="#caseI">I.
						Children Residing in the CCI by duration and Nature of Offense</a></li>
				<li id="casej" class="sectionUlist"><a href="#caseJ">J.
						Children Residing in the CCI by duration</a></li>	
				<li id="casek" class="sectionUlist"><a href="#caseK">K.
						Details of Cases dealt with (In the reporting month)</a></li>
				<li id="casel" class="sectionUlist"><a href="#caseL">L.
						Training on JJ System</a></li>
			</ul>

			<div ng-hide="placeofSafety.submitted">
				<a href=""><div class="col-md-6 savebtn locline" ng-click="checkSave()">
					<img class="saveSvg" 
						src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
						height="18" /> <h5 class="borderright1">SAVE</h5>
				</div></a>
				<button style="cursor: pointer;" type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit" ng-click="placeofSafetyFormDetails.$invalid ? '' : checkSubmit()">
					<img class="saveSvg" 
						src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
						ng-disabled="placeofSafety.submitted"
						height="18" /> <h5 class="borderright1 sbmtbtn">SUBMIT</h5>
				</button>
			</div>
			<div ng-show="placeofSafety.submitted">
				<div class="col-md-12 savebtn"></div>
			</div>
		</nav>


		<div class="col-md-9 formDetailsTopMargin" >

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
							Place Of Safety Monthly Report for Month of <b
								style="color: #41c484">&nbsp;{{placeofSafety.timeperiod.timePeriod}}</b>
						</h4>
							<!-- Biswa starts -->
							<div id="gInfo" style="margin-bottom: 10px">
								<div class="form-group labelFont">

									<div class="col-md-6">
										<input type="hidden" ng-model="placeofSafety.userId"
											class="form-control inputBackground">
									</div>
								</div>

								<div class="col-md-6" style="display: none;">
									<input name="userId" type="number" id="uId" value='${userId}'>${userId}
									<input type="number" id="monthDays" value='<%=daysInMonth%>'>
									<input type="text" id="typeOfHomeId" value='${typeOfHome}'>${typeOfHome}
								</div>
								<!-- Biswa ends -->
								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Name of the Authorized Person </label>
									<div class="col-md-6">
										<input type="text" ng-model="placeofSafety.nameOfPerson"
											fifty-characters-validation required
											ng-disabled="placeofSafety.submitted"
											class="form-control inputBackgroundgeneral">
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Designation </label>
									<div class="col-md-6">
										<input type="text" ng-model="placeofSafety.designation"
											address-validation required
											ng-disabled="placeofSafety.submitted"
											class="form-control inputBackgroundgeneral">
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Date of Reporting </label>
									<div class="col-md-6 " style="display: inline-flex;">
										<%
											Date dNow = new Date();
											SimpleDateFormat ft = new SimpleDateFormat("dd-MM-yyyy");
										%>
										<input type="text" readonly tabindex= -1
											class="form-control inputBackgroundgeneral readonlyStyle"
											value="<%=ft.format(dNow)%>">
									</div>
									<!-- 	<div class="col-md-6 calenderInline">
									<input type="text" readonly id="datepicker"
										class="form-control inputBackgroundgeneral"> 
								</div>
								<div class="col-md-6">
									<input type="text" ng-model="placeofSafety.monthAndYear" id="datepicker"
										class="form-control inputBackground">
								</div> -->
								</div>

								<div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of the District</label>
                                        <div class="col-md-6">
                                             <input type="text" id="district" tabindex= -1
                                                  disabled ng-model="selectedDistrict.areaName"
                                                  class="form-control inputBackgroundgeneral readonlyStyle">
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
									<div class="col-md-6">
										<!-- <select
											ng-options="nameCCI as nameCCI.cciName for nameCCI in cciNameList"
											ng-model="selectedCciName" ng-value="nameCCI.cciName"
											class="form-control inputBackgroundgeneral"
											ng-disabled="placeofSafety.submitted||(cciNameList.length==0)">
											<option value="" disabled selected>Select</option>
										</select> -->
										<input type="text" id="cciName" tabindex=-1
                                                  disabled ng-model="cciNameList.cciName"
                                                  class="form-control  inputBackgroundgeneral">
									</div>
									<!-- <div class="col-md-6" ng-show="cciNameList.length==0">
	                                <input type="text" value="No CCIs Found" disabled
											class="form-control inputBackgroundgeneral">
									</div> -->
									
									<!-- <input type="text" ng-model="placeofSafety.nameOfCCI"
											fifty-characters-validation
											ng-disabled="placeofSafety.submitted"
											class="form-control inputBackgroundgeneral"> -->
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Type of Institution </label>
									<div class="col-md-6">
										<select required
											ng-options="item as item.typeDetailsName for item in childSex"
											ng-model="selectedChildSex" ng-value="item.typeDetailsId"
											class="form-control inputBackgroundgeneral"
											ng-disabled="placeofSafety.submitted">
											<option value="" disabled selected>Select</option>
										</select>
										<!-- 										<input type="text" ng-model="placeofSafety.typeOfInstitutions" -->

									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Run By </label>
									<div class="col-md-6">
										<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType" ng-value="item.typeDetailsId"
											class="form-control inputBackgroundgeneral"
											ng-disabled="placeofSafety.submitted">
											<option value="" disabled selected>Select</option>
										</select>
										<!-- 										<input type="text" ng-model="placeofSafety.govtNonGovt" -->
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Capacity of Home/CCI </label>
									<div class="col-md-6">
										<input type="number" required 
											ng-disabled="placeofSafety.submitted" 
											id="capacityOfHome"
                                            ng-keyup="testCapacity('capacityOfHome')"
											ng-model="placeofSafety.capacityOfHome"
											class="form-control inputBackgroundgeneral removeExponentialValueE">
									</div>
								</div>
							</div>
							<div class="b4sectionheading" id="caseA"></div>
							<div class="grey-header headMarg">A.
								Children Residing on the First Day of the Month</div>

							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign"> A.1.
													Age distribution of Children on the first day of the reporting month</label></td>
											<td><input type="number" disabled
												id="aYears16to18 " tabindex= -1 only-four-digits
												ng-model="placeofSafety.aYears16to18"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" disabled id="aYears18to21 " only-four-digits
												ng-model="placeofSafety.aYears18to21" tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" disabled id="aYearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.aYearsGreaterThan21" tabindex= -1
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" id="aTotal" tabindex= -1
												ng-model="placeofSafety.aTotal"
												disabled only-four-digits
												ng-init="placeofSafety.aTotal=0"
												class="form-control inputBackground tableinputWidth">
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
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total New Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.1.
														Referred by JJB </label>

												</div>
											</td>

											<td><input type="number" required id="b1Years16to18"
												 only-four-digits
												ng-model="placeofSafety.b1Years16to18"
												ng-disabled="placeofSafety.submitted"
												ng-blur="validateWithE(placeofSafety.b1Years16to18, placeofSafety.b2Years16to18, 'b1Years16to18', 'e1Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required id="b1Years18to21"
											    only-four-digits
												ng-model="placeofSafety.b1Years18to21"
												ng-disabled="placeofSafety.submitted"
												ng-blur="validateWithE(placeofSafety.b1Years18to21, placeofSafety.b2Years18to21, 'b1Years18to21', 'e1Years18to21', '18-21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required id="b1YearsGreaterThan21"
											    only-four-digits
												ng-model="placeofSafety.b1YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												ng-blur="validateWithE(placeofSafety.b1YearsGreaterThan21, placeofSafety.b2YearsGreaterThan21, 'b1YearsGreaterThan21', 'e1YearsGreaterThan21', '> 21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>

											<td><input type="text" readonly id="b1Total" tabindex= -1
												value="{{Number(placeofSafety.b1Years16to18-0)+Number(placeofSafety.b1Years18to21-0)+Number(placeofSafety.b1YearsGreaterThan21-0)}}"
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
											<td><input type="number" required
												id="b2Years16to18" only-four-digits
												ng-model="placeofSafety.b2Years16to18"
												ng-disabled="placeofSafety.submitted"
												ng-blur="validateWithE(placeofSafety.b1Years16to18, placeofSafety.b2Years16to18, 'b2Years16to18', 'e1Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required
												id="b2Years18to21" only-four-digits
												ng-model="placeofSafety.b2Years18to21"
												ng-disabled="placeofSafety.submitted"
												ng-blur="validateWithE(placeofSafety.b1Years18to21, placeofSafety.b2Years18to21, 'b2Years18to21', 'e1Years18to21', '18-21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="number" required
												id="b2YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.b2YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												ng-blur="validateWithE(placeofSafety.b1YearsGreaterThan21, placeofSafety.b2YearsGreaterThan21, 'b2YearsGreaterThan21', 'e1YearsGreaterThan21', '> 21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
											</td>
											<td><input type="text" readonly id="b2Total" tabindex= -1
												value="{{Number(placeofSafety.b2Years16to18-0)+Number(placeofSafety.b2Years18to21-0)+Number(placeofSafety.b2YearsGreaterThan21-0)}}"
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
											
											<td><input type="text" ng-disabled="true" id="b3Years16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(placeofSafety.b1Years16to18-0)+Number(placeofSafety.b2Years16to18-0)}}">
											</td>
											<td><input type="text" ng-disabled="true" id="b3Years18to21" tabindex= -1
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(placeofSafety.b1Years18to21-0)+Number(placeofSafety.b2Years18to21-0)}}">
											</td>
											<td><input type="text" ng-disabled="true" id="b3YearsGreaterThan21" tabindex= -1
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(placeofSafety.b1YearsGreaterThan21-0)+Number(placeofSafety.b2YearsGreaterThan21-0)}}">
											</td>
											<td><input type="text" readonly id="b3Total" tabindex= -1
												value="{{Number(placeofSafety.b1Years16to18-0)+Number(placeofSafety.b2Years16to18-0)+
														Number(placeofSafety.b1Years18to21-0)+Number(placeofSafety.b2Years18to21-0)+
														Number(placeofSafety.b1YearsGreaterThan21-0)+Number(placeofSafety.b2YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>


							<div class="b4sectionheading" id="caseC"></div>
							<div class="grey-header headMarg">C.
								Total Children in the Month</div>

							<!-- <div class="form-group labelFont sectionMarginTop">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop totalFont"
									for="textinput"> C.1. Total No. of Children In the
									Month (Sum of children on 1st day and new children in the
									month) </label>
								<div class="col-md-6 marginBottomTop">
									<input type="text" readonly id="c1TotalChildren" tabindex= -1
										value="{{Number(placeofSafety.aYears16to18-0)+Number(placeofSafety.aYears18to21-0)+
											 	Number(placeofSafety.aYearsGreaterThan21-0)+Number(placeofSafety.b1Years16to18-0)+
											 	Number(placeofSafety.b2Years16to18-0)+Number(placeofSafety.b1Years18to21-0)+
											 	Number(placeofSafety.b2Years18to21-0)+Number(placeofSafety.b1YearsGreaterThan21-0)+
											 	Number(placeofSafety.b2YearsGreaterThan21-0)}}"
										class="form-control inputBackground readonlyStyle totalFont">
								</div>
							</div> -->

							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total New Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> C.1.
													Age distribution of Children in the reporting month </label></td>
											<td><input type="text" id="c2Years16to18"
												ng-disabled="placeofSafety.submitted" readonly tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(placeofSafety.aYears16to18-0)+Number(placeofSafety.b1Years16to18-0)+
											 			Number(placeofSafety.b2Years16to18-0)}}">
											</td>
											<td><input type="text" id="c2Years18to21"
												ng-disabled="placeofSafety.submitted" readonly tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(placeofSafety.aYears18to21-0)+Number(placeofSafety.b1Years18to21-0)+
											 			Number(placeofSafety.b2Years18to21-0)}}">
											</td>
											<td><input type="text" id="c2YearsGreaterThan21" tabindex= -1
												ng-disabled="placeofSafety.submitted" readonly 
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(placeofSafety.aYearsGreaterThan21-0)+Number(placeofSafety.b1YearsGreaterThan21-0)+
											 	Number(placeofSafety.b2YearsGreaterThan21-0)}}">
											</td>
											<td><input type="text" id="c2Total" tabindex= -1
												ng-disabled="placeofSafety.submitted" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(placeofSafety.aYears16to18-0)+Number(placeofSafety.aYears18to21-0)+
											 	Number(placeofSafety.aYearsGreaterThan21-0)+Number(placeofSafety.b1Years16to18-0)+
											 	Number(placeofSafety.b2Years16to18-0)+Number(placeofSafety.b1Years18to21-0)+
											 	Number(placeofSafety.b2Years18to21-0)+Number(placeofSafety.b1YearsGreaterThan21-0)+
											 	Number(placeofSafety.b2YearsGreaterThan21-0)}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>

							<!-- --------------------End Of C Section---------------------------- -->

							<div class="b4sectionheading" id="caseD"></div>
							<div class="grey-header headMarg">
								D. Institutions/Persons Where Children Referred</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableD">
									<thead>
										<tr>
											<th>Children Referred in the reporting month</th>
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total New Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.1. Children Released on Bail</label>
												</div>
											</td>

											<td><input type="number" required id="d1Years16to18"
												 only-four-digits
												 ng-keyup="calculateWithC('c2Years16to18', 'd1Years16to18', '16-18')"
												ng-model="placeofSafety.d1Years16to18"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required id="d1Years18to21"
											    only-four-digits ng-keyup="calculateWithC('c2Years18to21', 'd1Years18to21', '18-21')"
												ng-model="placeofSafety.d1Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required id="d1YearsGreaterThan21"
											    only-four-digits
												ng-model="placeofSafety.d1YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd1YearsGreaterThan21', '>21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>

											<td><input type="text" readonly id="d1Total" tabindex= -1
												value="{{Number(placeofSafety.d1Years16to18-0)+Number(placeofSafety.d1Years18to21-0)+Number(placeofSafety.d1YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.2. Transferred to Other Home</label>
												</div>
											</td>
											<td><input type="number" required
												id="d2Years16to18" only-four-digits
												ng-model="placeofSafety.d2Years16to18" ng-keyup="calculateWithC('c2Years16to18', 'd2Years16to18', '16-18')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d2Years18to21" only-four-digits
												ng-model="placeofSafety.d2Years18to21" ng-keyup="calculateWithC('c2Years18to21', 'd2Years18to21', '18-21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d2YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d2YearsGreaterThan21" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd2YearsGreaterThan21', '>21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d2Total" tabindex= -1
												value="{{Number(placeofSafety.d2Years16to18-0)+Number(placeofSafety.d2Years18to21-0)+Number(placeofSafety.d2YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.3. Runaway/Missing</label>
												</div>
											</td>
											<td><input type="number" required
												id="d3Years16to18" only-four-digits
												ng-model="placeofSafety.d3Years16to18" ng-keyup="calculateWithC('c2Years16to18', 'd3Years16to18', '16-18')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d3Years18to21" only-four-digits
												ng-model="placeofSafety.d3Years18to21" ng-keyup="calculateWithC('c2Years18to21', 'd3Years18to21', '18-21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d3YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d3YearsGreaterThan21" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd3YearsGreaterThan21', '>21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d3Total" tabindex= -1
												value="{{Number(placeofSafety.d3Years16to18-0)+Number(placeofSafety.d3Years18to21-0)+Number(placeofSafety.d3YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.4. Death</label>
												</div>
											</td>
											<td><input type="number" required
												id="d4Years16to18" only-four-digits
												ng-model="placeofSafety.d4Years16to18" ng-keyup="calculateWithC('c2Years16to18', 'd4Years16to18', '16-18')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d4Years18to21" only-four-digits
												ng-model="placeofSafety.d4Years18to21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years18to21', 'd4Years18to21', '18-21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d4YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d4YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd4YearsGreaterThan21', '>21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d4Total" tabindex= -1
												value="{{Number(placeofSafety.d4Years16to18-0)+Number(placeofSafety.d4Years18to21-0)+Number(placeofSafety.d4YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.5. Case Disposed / Restored to Family</label>
												</div>
											</td>
											<td><input type="number" required
												id="d5Years16to18" only-four-digits
												ng-model="placeofSafety.d5Years16to18"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years16to18', 'd5Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d5Years18to21" only-four-digits
												ng-model="placeofSafety.d5Years18to21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years18to21', 'd5Years18to21', '18-21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d5YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d5YearsGreaterThan21" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd5YearsGreaterThan21', '>21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d5Total" tabindex= -1
												value="{{Number(placeofSafety.d5Years16to18-0)+Number(placeofSafety.d5Years18to21-0)+Number(placeofSafety.d5YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.6. Transferred to Place of Safety</label>
												</div>
											</td>
											<td><input type="number" required
												id="d6Years16to18" only-four-digits
												ng-model="placeofSafety.d6Years16to18" ng-keyup="calculateWithC('c2Years16to18', 'd6Years16to18', '16-18')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d6Years18to21" only-four-digits
												ng-model="placeofSafety.d6Years18to21" ng-keyup="calculateWithC('c2Years18to21', 'd6Years18to21', '18-21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d6YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d6YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd6YearsGreaterThan21', '>21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d6Total" tabindex= -1
												value="{{Number(placeofSafety.d6Years16to18-0)+Number(placeofSafety.d6Years18to21-0)+Number(placeofSafety.d6YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.7. Transferred to Jail</label>
												</div>
											</td>
											<td><input type="number" required
												id="d7Years16to18" only-four-digits
												ng-model="placeofSafety.d7Years16to18"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years16to18', 'd7Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d7Years18to21" only-four-digits
												ng-model="placeofSafety.d7Years18to21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years18to21', 'd7Years18to21', '18-21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d7YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d7YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd7YearsGreaterThan21', '>21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d7Total" tabindex= -1
												value="{{Number(placeofSafety.d7Years16to18-0)+Number(placeofSafety.d7Years18to21-0)+Number(placeofSafety.d7YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.8. Sent for Alternative Care</label>
												</div>
											</td>
											<td><input type="number" required
												id="d8Years16to18" only-four-digits
												ng-model="placeofSafety.d8Years16to18"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years16to18', 'd8Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d8Years18to21" only-four-digits
												ng-model="placeofSafety.d8Years18to21"
												ng-disabled="placeofSafety.submitted" ng-keyup="calculateWithC('c2Years18to21', 'd8Years18to21', '18-21')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d8YearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d8YearsGreaterThan21" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd8YearsGreaterThan21', '>21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d8Total" tabindex= -1
												value="{{Number(placeofSafety.d8Years16to18-0)+Number(placeofSafety.d8Years18to21-0)+Number(placeofSafety.d8YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.9. Any other Institution/Program</label>
												</div>
											</td>
											<td><input type="number" required
												id="d9aYears16to18" only-four-digits
												ng-model="placeofSafety.d9aYears16to18" ng-keyup="calculateWithC('c2Years16to18', 'd9aYears16to18', '16-18')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d9aYears18to21" only-four-digits
												ng-model="placeofSafety.d9aYears18to21" ng-keyup="calculateWithC('c2Years18to21', 'd9aYears18to21', '18-21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												id="d9aYearsGreaterThan21" only-four-digits
												ng-model="placeofSafety.d9aYearsGreaterThan21" ng-keyup="calculateWithC('c2YearsGreaterThan21', 'd9aYearsGreaterThan21', '>21')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="d9aTotal" tabindex= -1
												value="{{Number(placeofSafety.d9aYears16to18-0)+Number(placeofSafety.d9aYears18to21-0)+Number(placeofSafety.d9aYearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										<tr ng-show="showHideBasedOnFlag('d9aTotal','d9bOthersSpecify')">
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.9.a.  Please specify, if other</label>
												</div>
											</td>
											<td colspan="4"><input type="text" 
												id="d9bOthersSpecify" 
												ng-required="Number(placeofSafety.d9aYears16to18-0)+Number(placeofSafety.d9aYears18to21-0)+Number(placeofSafety.d9aYearsGreaterThan21-0)>0"
												ng-model="placeofSafety.d9bOthersSpecify"
												ng-disabled="placeofSafety.submitted" address-validation
												class="form-control inputBackground tableinputWidth ">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">D.10. Total no. of children referred</label>
												</div>
											</td>
											<td><input type="text"
												id="d10Years16to18" readonly tabindex= -1
												ng-disabled="placeofSafety.submitted"
												value="{{Number(placeofSafety.d1Years16to18-0)+
														 Number(placeofSafety.d2Years16to18-0)+
														 Number(placeofSafety.d3Years16to18-0)+
														 Number(placeofSafety.d4Years16to18-0)+
														 Number(placeofSafety.d5Years16to18-0)+
														 Number(placeofSafety.d6Years16to18-0)+
														 Number(placeofSafety.d7Years16to18-0)+
														 Number(placeofSafety.d8Years16to18-0)+
														 Number(placeofSafety.d9aYears16to18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text"
												id="d10Years18to21" readonly
												ng-disabled="placeofSafety.submitted" tabindex= -1
												value="{{Number(placeofSafety.d1Years18to21-0)+
														 Number(placeofSafety.d2Years18to21-0)+
														 Number(placeofSafety.d3Years18to21-0)+
														 Number(placeofSafety.d4Years18to21-0)+
														 Number(placeofSafety.d5Years18to21-0)+
														 Number(placeofSafety.d6Years18to21-0)+
														 Number(placeofSafety.d7Years18to21-0)+
														 Number(placeofSafety.d8Years18to21-0)+
														 Number(placeofSafety.d9aYears18to21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text"
												id="d10YearsGreaterThan21" readonly tabindex= -1
												value="{{Number(placeofSafety.d1YearsGreaterThan21-0)+
														 Number(placeofSafety.d2YearsGreaterThan21-0)+
														 Number(placeofSafety.d3YearsGreaterThan21-0)+
														 Number(placeofSafety.d4YearsGreaterThan21-0)+
														 Number(placeofSafety.d5YearsGreaterThan21-0)+
														 Number(placeofSafety.d6YearsGreaterThan21-0)+
														 Number(placeofSafety.d7YearsGreaterThan21-0)+
														 Number(placeofSafety.d8YearsGreaterThan21-0)+
														 Number(placeofSafety.d9aYearsGreaterThan21-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="d10Total" tabindex= -1
												value="{{Number(placeofSafety.d1Years16to18-0)+
														 Number(placeofSafety.d2Years16to18-0)+
														 Number(placeofSafety.d3Years16to18-0)+
														 Number(placeofSafety.d4Years16to18-0)+
														 Number(placeofSafety.d5Years16to18-0)+
														 Number(placeofSafety.d6Years16to18-0)+
														 Number(placeofSafety.d7Years16to18-0)+
														 Number(placeofSafety.d8Years16to18-0)+
														 Number(placeofSafety.d9aYears16to18-0)+
														 Number(placeofSafety.d1Years18to21-0)+
														 Number(placeofSafety.d2Years18to21-0)+
														 Number(placeofSafety.d3Years18to21-0)+
														 Number(placeofSafety.d4Years18to21-0)+
														 Number(placeofSafety.d5Years18to21-0)+
														 Number(placeofSafety.d6Years18to21-0)+
														 Number(placeofSafety.d7Years18to21-0)+
														 Number(placeofSafety.d8Years18to21-0)+
														 Number(placeofSafety.d9aYears18to21-0)+
														 Number(placeofSafety.d1YearsGreaterThan21-0)+
														 Number(placeofSafety.d2YearsGreaterThan21-0)+
														 Number(placeofSafety.d3YearsGreaterThan21-0)+
														 Number(placeofSafety.d4YearsGreaterThan21-0)+
														 Number(placeofSafety.d5YearsGreaterThan21-0)+
														 Number(placeofSafety.d6YearsGreaterThan21-0)+
														 Number(placeofSafety.d7YearsGreaterThan21-0)+
														 Number(placeofSafety.d8YearsGreaterThan21-0)+
														 Number(placeofSafety.d9aYearsGreaterThan21-0)
														 }}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<!-- ----------------------------End Of D Section------------------------------------ -->



							<div class="b4sectionheading" id="caseE"></div>
							<div class="grey-header headMarg">E.
								Children on the Last Day of the Reporting Month</div>

							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableE">
									<thead>
										<tr>
											<th>Description</th>
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total New Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> E.1.
													 Age distribution of Children on the last day of the reporting month </label></td>
											<td><input type="text" id="e1Years16to18"
												ng-disabled="placeofSafety.submitted" readonly tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(placeofSafety.aYears16to18-0)+Number(placeofSafety.b1Years16to18-0)+Number(placeofSafety.b2Years16to18-0)
												-
												Number(Number(placeofSafety.d1Years16to18-0)+Number(placeofSafety.d2Years16to18-0)+
												Number(placeofSafety.d3Years16to18-0)+Number(placeofSafety.d4Years16to18-0)+
												Number(placeofSafety.d5Years16to18-0)+Number(placeofSafety.d6Years16to18-0)+
												Number(placeofSafety.d7Years16to18-0)+Number(placeofSafety.d8Years16to18-0)+
												Number(placeofSafety.d9aYears16to18-0)-0)}}">
											</td>
											<td><input type="text" id="e1Years18to21" tabindex= -1
												ng-disabled="placeofSafety.submitted" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(placeofSafety.aYears18to21-0)+Number(placeofSafety.b1Years18to21-0)+Number(placeofSafety.b2Years18to21-0)
						                        -
						                        Number(Number(placeofSafety.d1Years18to21-0)+Number(placeofSafety.d2Years18to21-0)+
						                        Number(placeofSafety.d3Years18to21-0)+Number(placeofSafety.d4Years18to21-0)+
						                        Number(placeofSafety.d5Years18to21-0)+Number(placeofSafety.d6Years18to21-0)+
						                        Number(placeofSafety.d7Years18to21-0)+Number(placeofSafety.d8Years18to21-0)+
						                        Number(placeofSafety.d9aYears18to21-0)-0)
												
												}}">
											</td>
											<td><input type="text" id="e1YearsGreaterThan21" tabindex= -1
												ng-disabled="placeofSafety.submitted" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(placeofSafety.aYearsGreaterThan21-0)+Number(placeofSafety.b1YearsGreaterThan21-0)+Number(placeofSafety.b2YearsGreaterThan21-0)
						                        -
						                        Number(Number(placeofSafety.d1YearsGreaterThan21-0)+Number(placeofSafety.d2YearsGreaterThan21-0)+
						                        Number(placeofSafety.d3YearsGreaterThan21-0)+Number(placeofSafety.d4YearsGreaterThan21-0)+
						                        Number(placeofSafety.d5YearsGreaterThan21-0)+Number(placeofSafety.d6YearsGreaterThan21-0)+
						                        Number(placeofSafety.d7YearsGreaterThan21-0)+Number(placeofSafety.d8YearsGreaterThan21-0)+
						                        Number(placeofSafety.d9aYearsGreaterThan21-0)-0)}}">
											</td>
											<td><input type="text" id="e1Total" tabindex= -1
												ng-disabled="placeofSafety.submitted" readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												
												Number(placeofSafety.aYears16to18-0)+Number(placeofSafety.b1Years16to18-0)+Number(placeofSafety.b2Years16to18-0)+
												Number(placeofSafety.aYears18to21-0)+Number(placeofSafety.b1Years18to21-0)+Number(placeofSafety.b2Years18to21-0)+
												Number(placeofSafety.aYearsGreaterThan21-0)+Number(placeofSafety.b1YearsGreaterThan21-0)+Number(placeofSafety.b2YearsGreaterThan21-0)
												-
												Number(Number(placeofSafety.d1Years16to18-0)+Number(placeofSafety.d2Years16to18-0)+
												Number(placeofSafety.d3Years16to18-0)+Number(placeofSafety.d4Years16to18-0)+
												Number(placeofSafety.d5Years16to18-0)+Number(placeofSafety.d6Years16to18-0)+
												Number(placeofSafety.d7Years16to18-0)+Number(placeofSafety.d8Years16to18-0)+
												Number(placeofSafety.d9aYears16to18-0)+Number(placeofSafety.d1Years18to21-0)+Number(placeofSafety.d2Years18to21-0)+
						                        Number(placeofSafety.d3Years18to21-0)+Number(placeofSafety.d4Years18to21-0)+
						                        Number(placeofSafety.d5Years18to21-0)+Number(placeofSafety.d6Years18to21-0)+
						                        Number(placeofSafety.d7Years18to21-0)+Number(placeofSafety.d8Years18to21-0)+
						                        Number(placeofSafety.d9aYears18to21-0)+Number(placeofSafety.d1YearsGreaterThan21-0)+Number(placeofSafety.d2YearsGreaterThan21-0)+
						                        Number(placeofSafety.d3YearsGreaterThan21-0)+Number(placeofSafety.d4YearsGreaterThan21-0)+
						                        Number(placeofSafety.d5YearsGreaterThan21-0)+Number(placeofSafety.d6YearsGreaterThan21-0)+
						                        Number(placeofSafety.d7YearsGreaterThan21-0)+Number(placeofSafety.d8YearsGreaterThan21-0)+
						                        Number(placeofSafety.d9aYearsGreaterThan21-0)-0)
												}}">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- ------------------------End Of E Section -------------------------------------- -->

							<div class="b4sectionheading" id="caseF"></div>
							<div class="grey-header headMarg">
								F. Category wise break up of cases pending as on last day of month</div>
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
													<label class="control-label" for="textinput">F.1.Total Children </label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="fST"
												ng-model="placeofSafety.fST" ng-keyup="validateF('fST')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fSC"
												ng-model="placeofSafety.fSC" ng-keyup="validateF('fSC')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fEBC"
												ng-model="placeofSafety.fEBC" ng-keyup="validateF('fEBC')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fOBC"
												ng-model="placeofSafety.fOBC" ng-keyup="validateF('fOBC')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fOthers"
												ng-model="placeofSafety.fOthers" ng-keyup="validateF('fOthers')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required only-four-digits id="fNotKnown"
												ng-model="placeofSafety.fNotKnown" ng-keyup="validateF('fNotKnown')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly id="fTotal" tabindex= -1
												value="{{Number(placeofSafety.fST-0)+ 
														 Number(placeofSafety.fSC-0)+
														 Number(placeofSafety.fOBC-0)+
														 Number(placeofSafety.fEBC-0)+
														 Number(placeofSafety.fOthers-0)+
														 Number(placeofSafety.fNotKnown-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
											<td><input type="number" required only-four-digits id="fMinority"
												ng-model="placeofSafety.fMinority"
												ng-keyup="validateMinority('fMinority')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							
					<div class="b4sectionheading" id="caseG"></div>
							<div class="grey-header headMarg">
								G. Educational Details of Children in CCI</div>
							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableG">
									<thead>
										<tr>
											<th>Educational description</th>
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total Children</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.1.
														Children enrolled in Special training (RTE)/ Bridge course
													</label>

												</div>
											</td>
											<td><input type="number" required
												 only-four-digits
												id="g1Years16to18" ng-keyup="validateG16to18('g1Years16to18')"
												ng-model="placeofSafety.g1Years16to18"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="g1Years18to21" ng-keyup="validateG18to21('g1Years18to21')"
												ng-model="placeofSafety.g1Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
											    only-four-digits 
												id="g1YearsGreaterThan21"	 ng-keyup="validateGreaterThan21('g1YearsGreaterThan21')"
												ng-model="placeofSafety.g1YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly tabindex= -1
											    value="{{Number(placeofSafety.g1Years16to18-0)+
											    		 Number(placeofSafety.g1Years18to21-0)+
											    		 Number(placeofSafety.g1YearsGreaterThan21-0)}}"
												id="g1Total"	
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.2.
														Attending non-formal education classes within home</label>
												</div>
											</td>

											<td><input type="number" required
												 only-four-digits
												id="g2Years16to18"  ng-keyup="validateG16to18('g2Years16to18')"
												ng-model="placeofSafety.g2Years16to18"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												  only-four-digits
												id="g2Years18to21"	 ng-keyup="validateG18to21('g2Years18to21')"
												ng-model="placeofSafety.g2Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												  only-four-digits
												id="g2YearsGreaterThan21"	 ng-keyup="validateGreaterThan21('g2YearsGreaterThan21')"
												ng-model="placeofSafety.g2YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly
												 id="g2Total" tabindex= -1
												 value="{{Number(placeofSafety.g2Years16to18-0)+
											    		 Number(placeofSafety.g2Years18to21-0)+
											    		 Number(placeofSafety.g2YearsGreaterThan21-0)}}"	
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonly">
											</td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.3.
														Not enrolled in any educational programme </label>
												</div>
											</td>

											<td><input type="number" required
											 only-four-digits
												id="g3Years16to18"	 ng-keyup="validateG16to18('g3Years16to18')"
												ng-model="placeofSafety.g3Years16to18"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="g3Years18to21"	 ng-keyup="validateG18to21('g3Years18to21')"
												ng-model="placeofSafety.g3Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="g3YearsGreaterThan21"	 ng-keyup="validateGreaterThan21('g3YearsGreaterThan21')"
												ng-model="placeofSafety.g3YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly
												id="g3Total"	 tabindex= -1
												value="{{Number(placeofSafety.g3Years16to18-0)+
											    		 Number(placeofSafety.g3Years18to21-0)+
											    		 Number(placeofSafety.g3YearsGreaterThan21-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.4.
														 Enrolled for Vocational Training </label>
												</div>
											</td>

											<td><input type="number" required
												 only-four-digits
												id="g4Years16to18"	 ng-keyup="validateG16to18('g4Years16to18')"
												ng-model="placeofSafety.g4Years16to18"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="g4Years18to21" ng-keyup="validateG18to21('g4Years18to21')"
												ng-model="placeofSafety.g4Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="g4YearsGreaterThan21"	 ng-keyup="validateGreaterThan21('g4YearsGreaterThan21')"
												ng-model="placeofSafety.g4YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly
												id="g4Total"	 tabindex= -1
												value="{{Number(placeofSafety.g4Years16to18-0)+
											    		 Number(placeofSafety.g4Years18to21-0)+
											    		 Number(placeofSafety.g4YearsGreaterThan21-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										<tr>
											<td>
												<div class=" textAlign">
													<label class="control-label totalFont" for="textinput">G.5.
														Total no. of children attending any educational Program </label>
												</div>
											</td>

											<td><input type="text" readonly id="g5Years16to18" tabindex= -1
												value="{{Number(placeofSafety.g1Years16to18-0)+
														 Number(placeofSafety.g2Years16to18-0)+
														 Number(placeofSafety.g3Years16to18-0)+
														 Number(placeofSafety.g4Years16to18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="g5Years18to21" tabindex= -1
												value="{{Number(placeofSafety.g1Years18to21-0)+
														 Number(placeofSafety.g2Years18to21-0)+
														 Number(placeofSafety.g3Years18to21-0)+
														 Number(placeofSafety.g4Years18to21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="g5YearsGreaterThan21" tabindex= -1
												value="{{Number(placeofSafety.g1YearsGreaterThan21-0)+
														 Number(placeofSafety.g2YearsGreaterThan21-0)+
														 Number(placeofSafety.g3YearsGreaterThan21-0)+
														 Number(placeofSafety.g4YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="g5Total" tabindex= -1
												value="{{
														Number(placeofSafety.g1Years16to18-0)+
														 Number(placeofSafety.g2Years16to18-0)+
														 Number(placeofSafety.g3Years16to18-0)+
														 Number(placeofSafety.g4Years16to18-0)+
														 Number(placeofSafety.g1Years18to21-0)+
														 Number(placeofSafety.g2Years18to21-0)+
														 Number(placeofSafety.g3Years18to21-0)+
														 Number(placeofSafety.g4Years18to21-0)+
														 Number(placeofSafety.g1YearsGreaterThan21-0)+
														 Number(placeofSafety.g2YearsGreaterThan21-0)+
														 Number(placeofSafety.g3YearsGreaterThan21-0)+
														 Number(placeofSafety.g4YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<!-- --------------------------End Of F Section ------------------------------- -->
							<div class="b4sectionheading" id="caseH"></div>
							<div class="grey-header headMarg">
								H. Health Status of the Children Residing in the CCI.</div>
								<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableH">
									<thead>
										<tr>
											<th>Description</th>
											<th>16-18 years</th>
											<th>18-21 years</th>
											<th>>21 years</th>
											<th>Total Children</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.1. Children Mentally Challenged
													</label>

												</div>
											</td>
											<td><input type="number" required
												 only-four-digits
												id="h1Years16to18"	
												ng-model="placeofSafety.h1Years16to18"
												ng-disabled="placeofSafety.submitted" ng-keyup="validateH16to18('h1Years16to18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="h1Years18to21"	ng-keyup="validateH18to21('h1Years18to21')"
												ng-model="placeofSafety.h1Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
											    only-four-digits
												id="h1YearsGreaterThan21"	ng-keyup="validateHGreaterThan21('h1YearsGreaterThan21')"
												ng-model="placeofSafety.h1YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly tabindex= -1
											   value="{{Number(placeofSafety.h1Years16to18-0)+
											   			Number(placeofSafety.h1Years18to21-0)+
											   			Number(placeofSafety.h1YearsGreaterThan21-0)}}"
												id="h1Total"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.2. Children Physically Challenged</label>
												</div>
											</td>

											<td><input type="number" required
												 only-four-digits
												id="h2Years16to18"
												ng-model="placeofSafety.h2Years16to18"
												ng-disabled="placeofSafety.submitted" ng-keyup="validateH16to18('h2Years16to18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												  only-four-digits
												id="h2Years18to21"	ng-keyup="validateH18to21('h2Years18to21')"
												ng-model="placeofSafety.h2Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												  only-four-digits
												id="h2YearsGreaterThan21"	ng-keyup="validateHGreaterThan21('h2YearsGreaterThan21')"
												ng-model="placeofSafety.h2YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly tabindex= -1
												 value="{{Number(placeofSafety.h2Years16to18-0)+
											   			Number(placeofSafety.h2Years18to21-0)+
											   			Number(placeofSafety.h2YearsGreaterThan21-0)}}"
												id="h2Total"	
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.3. Children suffering with critical illness (TB, HIV/AIDS etc)</label>
												</div>
											</td>

											<td><input type="number" required
											 only-four-digits
												id="h3Years16to18"	
												ng-model="placeofSafety.h3Years16to18" ng-keyup="validateH16to18('h3Years16to18')"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="h3Years18to21"	ng-keyup="validateH18to21('h3Years18to21')"
												ng-model="placeofSafety.h3Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="h3YearsGreaterThan21"	ng-keyup="validateHGreaterThan21('h3YearsGreaterThan21')"
												ng-model="placeofSafety.h3YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text" readonly tabindex= -1
												  value="{{Number(placeofSafety.h3Years16to18-0)+
											   			Number(placeofSafety.h3Years18to21-0)+
											   			Number(placeofSafety.h3YearsGreaterThan21-0)}}"
												id="h3Total" 
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>
										</tr>
										
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.4. Children with Multiple Disability</label>
												</div>
											</td>

											<td><input type="number" required
												 only-four-digits
												id="h4Years16to18"	ng-keyup="validateH16to18('h4Years16to18')"
												ng-model="placeofSafety.h4Years16to18"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="h4Years18to21"	ng-keyup="validateH18to21('h4Years18to21')"
												ng-model="placeofSafety.h4Years18to21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="number" required
												 only-four-digits
												id="h4YearsGreaterThan21"	 ng-keyup="validateHGreaterThan21('h4YearsGreaterThan21')"
												ng-model="placeofSafety.h4YearsGreaterThan21"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE">
											</td>
											<td><input type="text"
												  readonly
												  value="{{Number(placeofSafety.h4Years16to18-0)+
											   			Number(placeofSafety.h4Years18to21-0)+
											   			Number(placeofSafety.h4YearsGreaterThan21-0)}}"
												id="h4Total"  tabindex= -1
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle">
											</td>

										</tr>
										<tr>
											<td>
												<div class=" textAlign">
													<label class="control-label totalFont" for="textinput">H.5 Total Children</label>
												</div>
											</td>

											<td><input type="text" readonly id="h5Years16to18" tabindex= -1
												value="{{Number(placeofSafety.h1Years16to18-0)+
														 Number(placeofSafety.h2Years16to18-0)+
														 Number(placeofSafety.h3Years16to18-0)+
														 Number(placeofSafety.h4Years16to18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="h5Years18to21" tabindex= -1
												value="{{Number(placeofSafety.h1Years18to21-0)+
														 Number(placeofSafety.h2Years18to21-0)+
														 Number(placeofSafety.h3Years18to21-0)+
														 Number(placeofSafety.h4Years18to21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="h5YearsGreaterThan21" tabindex= -1
												value="{{Number(placeofSafety.h1YearsGreaterThan21-0)+
														 Number(placeofSafety.h2YearsGreaterThan21-0)+
														 Number(placeofSafety.h3YearsGreaterThan21-0)+
														 Number(placeofSafety.h4YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
											<td><input type="text" readonly id="h5Total" tabindex= -1
												value="{{
														Number(placeofSafety.h1Years16to18-0)+
														 Number(placeofSafety.h2Years16to18-0)+
														 Number(placeofSafety.h3Years16to18-0)+
														 Number(placeofSafety.h4Years16to18-0)+
														 Number(placeofSafety.h1Years18to21-0)+
														 Number(placeofSafety.h2Years18to21-0)+
														 Number(placeofSafety.h3Years18to21-0)+
														 Number(placeofSafety.h4Years18to21-0)+
														 Number(placeofSafety.h1YearsGreaterThan21-0)+
														 Number(placeofSafety.h2YearsGreaterThan21-0)+
														 Number(placeofSafety.h3YearsGreaterThan21-0)+
														 Number(placeofSafety.h4YearsGreaterThan21-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
															 
							<!-- --------------------------  End Of H Section------------------------------------ -->
							
<!----------------------------------------------- Modified--------------------------------->
							<div class="b4sectionheading" id="caseI"></div>
							<div class="grey-header headMarg">I. Children Residing in the CCI by duration and Nature of Offense</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableI">
									<thead>
										<tr>
											<th>Type of Offense</th>
											<th>< 3 months</th>
											<th>3-6 months</th>
											<th>6-12 months</th>
											<th>> 12 months</th>
											<th>Total Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.1. Petty
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="iPettyLessThan3m" ng-model="placeofSafety.iPettyLessThan3m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPetty3to6m" ng-model="placeofSafety.iPetty3to6m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPetty6to12m" ng-model="placeofSafety.iPetty6to12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
												
											<td><input type="number" required only-four-digits
												id="iPettyGreaterThan12m"
												ng-model="placeofSafety.iPettyGreaterThan12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="iPettyTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
 												value="{{Number(placeofSafety.iPettyLessThan3m-0)+
														Number(placeofSafety.iPetty3to6m-0)+
														Number(placeofSafety.iPetty6to12m-0)+
														Number(placeofSafety.iPettyGreaterThan12m-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.2. Serious
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="iSeriousLessThan3m" ng-model="placeofSafety.iSeriousLessThan3m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSerious3to6m" ng-model="placeofSafety.iSerious3to6m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSerious6to12m" ng-model="placeofSafety.iSerious6to12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSeriousGreaterThan12m"
												ng-model="placeofSafety.iSeriousGreaterThan12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
												
											<td><input type="text" readonly id="iSeriousTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(placeofSafety.iSeriousLessThan3m-0)+
														Number(placeofSafety.iSerious3to6m-0)+
														Number(placeofSafety.iSerious6to12m-0)+
														Number(placeofSafety.iSeriousGreaterThan12m-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.3. Heinous
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="iHeinousLessThan3m" ng-model="placeofSafety.iHeinousLessThan3m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinous3to6m" ng-model="placeofSafety.iHeinous3to6m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinous6to12m" ng-model="placeofSafety.iHeinous6to12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinousGreaterThan12m"
												ng-model="placeofSafety.iHeinousGreaterThan12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
												
											<td><input type="text" readonly id="iHeinousTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(placeofSafety.iHeinousLessThan3m-0)+
														Number(placeofSafety.iHeinous3to6m-0)+
														Number(placeofSafety.iHeinous6to12m-0)+
														Number(placeofSafety.iHeinousGreaterThan12m-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">I.4. Total
													</label>
												</div>
											</td>
											<td><input type="text"  readonly
												id="iTotalLessThan3m"  tabindex= -1
												value="{{Number(placeofSafety.iPettyLessThan3m-0)+
														Number(placeofSafety.iSeriousLessThan3m-0)+
														Number(placeofSafety.iHeinousLessThan3m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
											<td><input type="text"   readonly
												id="iTotal3to6m"  tabindex= -1
												value="{{Number(placeofSafety.iPetty3to6m-0)+
														Number(placeofSafety.iSerious3to6m-0)+
														Number(placeofSafety.iHeinous3to6m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
											<td><input type="text"  readonly
												id="iTotal6to12m" tabindex= -1
												value="{{Number(placeofSafety.iPetty6to12m-0)+
														Number(placeofSafety.iSerious6to12m-0)+
														Number(placeofSafety.iHeinous6to12m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont" 
												></td>
											<td><input type="text"  readonly
												id="iTotalGreaterThan12m" tabindex= -1
												value="{{Number(placeofSafety.iPettyGreaterThan12m-0)+
														Number(placeofSafety.iSeriousGreaterThan12m-0)+
														Number(placeofSafety.iHeinousGreaterThan12m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly id="iTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(placeofSafety.iPettyLessThan3m-0)+
														Number(placeofSafety.iPetty3to6m-0)+
														Number(placeofSafety.iPetty6to12m-0)+
														Number(placeofSafety.iPettyGreaterThan12m-0)+
														Number(placeofSafety.iSeriousLessThan3m-0)+
														Number(placeofSafety.iSerious3to6m-0)+
														Number(placeofSafety.iSerious6to12m-0)+
														Number(placeofSafety.iSeriousGreaterThan12m-0)+
														Number(placeofSafety.iHeinousLessThan3m-0)+
														Number(placeofSafety.iHeinous3to6m-0)+
														Number(placeofSafety.iHeinous6to12m-0)+
														Number(placeofSafety.iHeinousGreaterThan12m-0)}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>
								
								
<!-- 							<div class="b4sectionheading" id="caseI"></div> -->
<!-- 							<div class="grey-header headMarg">I. Children -->
<!-- 								Residing in the CCI by Duration</div> -->
<!-- 							<div class="labelFont"> -->
<!-- 								<table class="table table-bordered table-margintop" id="tableI"> -->
<!-- 									<thead> -->
<!-- 										<tr> -->
<!-- 											<th>Description</th> -->
<!-- 											<th>< 3 months</th> -->
<!-- 											<th>3-6 months</th> -->
<!-- 											<th>6-12 months</th> -->
<!-- 											<th>> 12 months</th> -->
<!-- 											<th>Total no. of children</th> -->
<!-- 										</tr> -->
<!-- 									</thead> -->
<!-- 									<tbody> -->
<!-- 										<tr> -->
<!-- 										<td> -->
<!-- 												<div class=" textAlign"> -->
<!-- 													<label class="control-label" for="textinput">Children Residing in the CCI by duration</label> -->
<!-- 												</div> -->
<!-- 											</td> -->
<!-- 											<td><input type="number" required only-four-digits -->
<!-- 												id="iMonthsLessThan3" -->
<!-- 												ng-model="placeofSafety.iMonthsLessThan3" -->
<!-- 												ng-disabled="placeofSafety.submitted" -->
<!-- 												class="form-control inputBackground tableinputWidth removeExponentialValueE"> -->
<!-- 											</td> -->
<!-- 											<td><input type="number" required only-four-digits -->
<!-- 												id="iMonths3to6" -->
<!-- 												ng-model="placeofSafety.iMonths3to6" -->
<!-- 												ng-disabled="placeofSafety.submitted" -->
<!-- 												class="form-control inputBackground tableinputWidth removeExponentialValueE"> -->
<!-- 											</td> -->
<!-- 											<td><input type="number" required only-four-digits -->
<!-- 												id="iMonths6to12" -->
<!-- 												ng-model="placeofSafety.iMonths6to12" -->
<!-- 												ng-disabled="placeofSafety.submitted" -->
<!-- 												class="form-control inputBackground tableinputWidth removeExponentialValueE"> -->
<!-- 											</td> -->
<!-- 											<td><input type="number" required only-four-digits -->
<!-- 												id="iMonthsgreaterThan12" -->
<!-- 												ng-model="placeofSafety.iMonthsgreaterThan12" -->
<!-- 												ng-disabled="placeofSafety.submitted" -->
<!-- 												class="form-control inputBackground tableinputWidth removeExponentialValueE"> -->
<!-- 											</td> -->
<!-- 											<td><input type="text" readonly id="iTotalMonths" tabindex= -1 -->
<!-- 												value="{{Number(placeofSafety.iMonthsLessThan3-0)+ -->
<!-- 														 Number(placeofSafety.iMonths3to6-0)+ -->
<!-- 														 Number(placeofSafety.iMonths6to12-0)+ -->
<!-- 														 Number(placeofSafety.iMonthsgreaterThan12-0)}}" -->
<!-- 												class="form-control inputBackground tableinputWidth readonlyStyle"> -->
<!-- 											</td> -->
<!-- 										</tr> -->
<!-- 									</tbody> -->
<!-- 								</table> -->
<!-- 							</div> -->

							<!-- --------------------End Of H Section------------------------------- -->
							
							
							
							
							
							
							<div class="b4sectionheading" id="caseJ"></div>
							<div class="grey-header headMarg">
								J. Children Residing in the CCI by duration</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableJ">
									<thead>
										<tr>
											<th>Type of Offense</th>
											<th> < 3 months </th>
											<th>3-6 months </th>
											<th>6-12 months </th>
											<th>> 12 months </th>
											<th>Total Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">J.1. Children on the First day of the month
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="j1LessThan3m" ng-model="placeofSafety.j1LessThan3m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive1('j1LessThan3m','j3LessThan3m','j4LessThan3m','(<3 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1_3to6m" ng-model="placeofSafety.j1_3to6m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive1('j3_3to6m','j3_3to6m','j4_3to6m','(3-6 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1_6to12m" ng-model="placeofSafety.j1_6to12m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive1('j1_6to12m','j3_6to12m','j4_6to12m','(6-12 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1GreaterThan12m" ng-keyup="checkJNegetive1('j1GreaterThan12m','j3GreaterThan12m','j4GreaterThan12m','(>12 months)')"
												ng-model="placeofSafety.j1GreaterThan12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											
												
											<td><input type="text" readonly id="j1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(placeofSafety.j1LessThan3m-0)+
														Number(placeofSafety.j1_3to6m-0)+
														Number(placeofSafety.j1_6to12m-0)+
														Number(placeofSafety.j1GreaterThan12m-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">J.2. New Children Admitted in the Month
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="j2LessThan3m" ng-model="placeofSafety.j2LessThan3m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive1('j2LessThan3m','j3LessThan3m','j4LessThan3m','(<3 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												 
											<td colspan="3"><input type="number" required only-four-digits readonly 
												id="iSeriousMonths1to2" placeholder="Not Applicable" tabindex= -1
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
												
											<td><input type="text" readonly id="j2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(placeofSafety.j2LessThan3m-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">J.3. Children moved out in the month
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="j3LessThan3m" ng-model="placeofSafety.j3LessThan3m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive('j3LessThan3m','j4LessThan3m','(<3 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3_3to6m" ng-model="placeofSafety.j3_3to6m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive('j3_3to6m','j4_3to6m','(3-6 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3_6to12m" ng-model="placeofSafety.j3_6to12m"
												ng-disabled="placeofSafety.submitted" ng-keyup="checkJNegetive('j3_6to12m','j4_6to12m','(6-12 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3GreaterThan12m"  ng-keyup="checkJNegetive('j3GreaterThan12m','j4GreaterThan12m','(>12 months)')"
												ng-model="placeofSafety.j3GreaterThan12m"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
												
											<td><input type="text" readonly id="j3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(placeofSafety.j3LessThan3m-0)+
														Number(placeofSafety.j3_3to6m-0)+
														Number(placeofSafety.j3_6to12m-0)+
														Number(placeofSafety.j3GreaterThan12m-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">J.4.  Total  children on the Last day of the month
													</label>
												</div>
											</td>

											<td><input type="text"  readonly
												id="j4LessThan3m"  tabindex= -1
												value="{{Number(placeofSafety.j1LessThan3m-0)+
														Number(placeofSafety.j2LessThan3m-0)-
														Number(placeofSafety.j3LessThan3m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text"   readonly
												id="j4_3to6m" tabindex= -1
												value="{{Number(placeofSafety.j1_3to6m-0)-
														Number(placeofSafety.j3_3to6m-0)}}"  
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="j4_6to12m" tabindex= -1
												value="{{Number(placeofSafety.j1_6to12m-0)-
														Number(placeofSafety.j3_6to12m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont" 
												></td>
												
											<td><input type="text"  readonly
												id="j4GreaterThan12m" tabindex= -1
												value="{{Number(placeofSafety.j1GreaterThan12m-0)-
														Number(placeofSafety.j3GreaterThan12m-0)}}"
												ng-disabled="placeofSafety.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly 
												id="j4Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(placeofSafety.j1LessThan3m-0)+
														Number(placeofSafety.j1_3to6m-0)+
														Number(placeofSafety.j1_6to12m-0)+
														Number(placeofSafety.j1GreaterThan12m-0)+
														Number(placeofSafety.j2LessThan3m-0)-
														(Number(placeofSafety.j3LessThan3m-0)+
														Number(placeofSafety.j3_3to6m-0)+
														Number(placeofSafety.j3_6to12m-0)+
														Number(placeofSafety.j3GreaterThan12m-0))}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>
							
							
							
							
							
							
							
							
							<div class="b4sectionheading" id="caseK"></div>
							<div class="grey-header headMarg">
								K. Details of cases dealt With (In the Reporting Month)</div>

							<div class="form-group labelFont sectionMarginTop
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> K.1. No. of children with single
									parent </label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required
										  only-four-digits
										  id="k1" onkeyup="checkK1()"
										ng-model="placeofSafety.k1"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>

							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.2. No. of children without parental
									care/without adult support </label>
								<div class="col-md-6">
									<input type="number" required
										 only-four-digits  id="k2" onkeyup="checkK2()"
										ng-model="placeofSafety.k2"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.3. No. of children referred to
									Hospital/PHC/Clinics </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k3"  id="k3" onkeyup="checkK3()"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
							borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.4. No. of children transferred to
									home within the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k4"  id="k4"
										ng-disabled="placeofSafety.submitted" onkeyup="checkK4()"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.5. No. of children transferred to
									home outside the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k5"  id="k5" onkeyup="checkK5()"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.6. No. of children transferred to
									Jail </label>
								<div class="col-md-6">
									<input type="number" required
										 only-four-digits
										ng-model="placeofSafety.k6"  id="k6" onkeyup="checkK6()"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.7. No. of Case History Formats
									filled </label>
								<div class="col-md-6">
									<input type="number" required
										 only-four-digits
										ng-model="placeofSafety.k7"  id="k7"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.8. No. of Individual Care Plan (ICP)
									prepared </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k8"  id="k8"
										ng-disabled="placeofSafety.submitted"
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
										ng-model="placeofSafety.k9"  id="k9" onkeyup="checkK9()"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.10. No. of children sent for After
									care </label>
								<div class="col-md-6">
									<input type="number" required
										  only-four-digits
										ng-model="placeofSafety.k10"  id="k10"
										ng-disabled="placeofSafety.submitted" onkeyup="checkK10()"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.11. No. of first-time offender
									children </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k11"  id="k11" onkeyup="checkK11n12()"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.12. No. of repeat-offender children</label>
								<div class="col-md-6">
									<input type="number" required
										  only-four-digits onkeyup="checkK11n12()"
										ng-model="placeofSafety.k12"  id="k12"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.13. No. of children charged for
									Petty offences </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k13"  id="k13"
										ng-disabled="placeofSafety.submitted" onkeyup="checkK13()"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.14. No. of Runaway/Missing children
									returned to the CCI in the reporting month </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k14" id="k14"
										ng-disabled="placeofSafety.submitted"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.15. No. of children sent for
									Sponsorship </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										ng-model="placeofSafety.k15"  id="k15"
										ng-disabled="placeofSafety.submitted" onkeyup="checkK15()"
										class="form-control inputBackground removeExponentialValueE">
								</div>
							</div>
							<div class="form-group labelFont ">

								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.16.a Was the meeting of Children's
									Committee held ? </label>
								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select class="form-control inputBackground" required
										ng-disabled="placeofSafety.submitted"
										ng-model="placeofSafety.k16aMeetingChildrenCommitte"
										ng-change="resetDate('meetingdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont "
								ng-show="placeofSafety.k16aMeetingChildrenCommitte == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.16.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="meetingdatepicker"
										ng-model="placeofSafety.k16bDate"
										ng-disabled="placeofSafety.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="meetingdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont ">
								<label class="col-md-6 control-label labelLeftAlign txtalgn1 "
									for="textinput"> K.17.a Was the Home Management
									Committee meeting held ? </label>
								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select class="form-control inputBackground bxalgn" required
										ng-disabled="placeofSafety.submitted"
										ng-model="placeofSafety.k17aMeetingHomeManagementCommitte"
										ng-change="resetDate('homeManagementdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont"
								ng-show="placeofSafety.k17aMeetingHomeManagementCommitte == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.17.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="homeManagementdatepicker"
										ng-model="placeofSafety.k17bDate"
										ng-disabled="placeofSafety.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x"  id="homeManagementdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont ">
								<label class="col-md-6 control-label labelLeftAlign txtalgn1"
									for="textinput"> K.18.a Any other details ? </label>
								<div class="col-md-6">
									<!-- 									<input type="text" > -->
									<select class="form-control inputBackground bxalgn" required
										ng-disabled="placeofSafety.submitted"
										ng-model="placeofSafety.k18aAnyOtherDetails"
										ng-change="resetDate('Othermeetingdatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont"
								ng-show="placeofSafety.k18aAnyOtherDetails == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.18.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="Othermeetingdatepicker"
										ng-model="placeofSafety.k18bDate"
										ng-disabled="placeofSafety.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="Othermeetingdatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<!-- --------------------------- End Of I Section  ----------------------------- -->
							<div class="b4sectionheading" id="caseL"></div>
							<div class="grey-header headMarg">
								L. Training on JJ System</div>

							<div class="form-group labelFont sectionMarginTop
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.1. Was the training held on JJ
									system ? </label>
								<div class="col-md-6 marginBottomTop">
									<!-- 									<input type="text" > -->
									<select 
									    ng-change=resetToZeroaccdpos(placeofSafety.k1TrainingJJSystem)
									    class="form-control inputBackground" required
										ng-disabled="placeofSafety.submitted"
										ng-model="placeofSafety.k1TrainingJJSystem">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div ng-show="placeofSafety.k1TrainingJJSystem == 'true'">
								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> L.1.a. Number of Training held</label>
									<div class="col-md-6">
										<input type="number" 
											ng-blur="validateNoOfTraining(placeofSafety.k1aNoTrainingHeld)"
											limit-to="2" ng-model="placeofSafety.k1aNoTrainingHeld"
											ng-disabled="placeofSafety.submitted" id="j1aNoTrainingHeld"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>
								<div class="panel-group" id="accordion" role="tablist"
									aria-multiselectable="true">

									<div class="panel panel-default"
										ng-repeat="posTrainingDetails in posTrainingDetailsRepetitionArray">
										<div class="panel-heading" role="tab"
											onclick="changeIcon(this)" id="{{'heading'+$index}}">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse"
													ng-click="initializeDatePicker($index)"
													data-parent="#accordion" href="{{'#collapse'+$index}}"
													aria-expanded="true" aria-controls="collapseOne"> <i
													class="more-less glyphicon glyphicon-plus"></i>Training
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
														<input type="number" only-four-digits
															ng-disabled="placeofSafety.submitted"
															ng-model="posTrainingDetailsRepetitionArray[$index].durationTraining" limit-to="2"
                                                            onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
															class="form-control inputBackgroundgeneral removeExponentialValueE">
													</div>
												</div>
												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c. Training From</label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingFromDatepicker{{$index}}"
															ng-model="posTrainingDetailsRepetitionArray[$index].trainingFromDate"
															ng-disabled="placeofSafety.submitted" readonly
															ng-click="openFromDatePicker($index)"
															class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>

												</div>
												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c.i. Training To </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingToDatepicker{{$index}}"
															ng-model="posTrainingDetailsRepetitionArray[$index].trainingToDate"
															ng-disabled="placeofSafety.submitted" readonly
															ng-click="openToDatePicker($index)"
															class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x"  id="trainingToDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>

												</div>

												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.d. Training organised by </label>
													<div class="col-md-6 topicOftrainingListJJb">
                                                     <ul class="topicOftrainingList">
                                                     <li>
														<div class="cb checkboxstyle">
															<input id="tobHighCourt{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
															ng-model="posTrainingDetailsRepetitionArray[$index].tobHighCourt"> <label
																for="tobHighCourt"> High court </label>
														</div>
													</li>
													 <li>
														<div class="cb checkboxstyle">
															<input id="tobBySLSA{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
															ng-model="posTrainingDetailsRepetitionArray[$index].tobBySLSA"> <label
																for="tobBySLSA"> By the state legal service authority (SLSA)</label>
														</div>
													</li>
													 <li>
														<div class="cb checkboxstyle">
															<input id="tobStateGovt{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
															ng-model="posTrainingDetailsRepetitionArray[$index].tobStateGovt"> <label
																for="tobStateGovt"> State Govt.</label>
														</div>
													</li>
													<li>
														<div class="cb checkboxstyle">
															<input id="tobOthers{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
															ng-change="resetAccOthers(posTrainingDetailsRepetitionArray[$index], 'tobOthers')"
															ng-model="posTrainingDetailsRepetitionArray[$index].tobOthers"> <label
																for="tobOthers">Others </label>
														</div>
													</li>
													</ul>
                                                    </div>
												</div>
												<div class="form-group labelFont"
													ng-show="posTrainingDetailsRepetitionArray[$index].tobOthers">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput">Please specify,If Other
													</label>
													<div class="col-md-6">
														<input type="text"
															ng-model="posTrainingDetailsRepetitionArray[$index].tobOthersSpecify"
															address-validation
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
												
												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e. Topic of training </label>
													<div class="col-md-6 topicOftrainingListJJb">
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="cb checkboxstyle">
																		<input id="chJJActRule{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totJJAct"> <label
																			for="chJJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="cLawsandICPS{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totChildRelatedLawsICPS"> <label
																			for="cLawsandICPS"> Child related Laws and ICPS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="POCSOAct{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totPOCSOAct"> <label
																			for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Combinedtraining{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
																			for="Combinedtraining"> Combined training </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="CPMIS{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totCPMIS"> <label
																			for="CPMIS"> CPMIS </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CPMISTrackchild{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totTrackChild"> <label
																			for="CPMISTrackchild"> Track child </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input id="CLTS{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totCLTS"> <label
																			for="CLTS"> CLTS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="totOthers{{$index}}" type="checkbox" ng-disabled="placeofSafety.submitted"
																		ng-change="resetAccOthers(posTrainingDetailsRepetitionArray[$index], 'totOthers')"
																		ng-model="posTrainingDetailsRepetitionArray[$index].totOthers"> <label
																			for="totOthers"> Others </label>
																	</div>
																</li>
																	</ul>
                                                                 </div>
												</div>

												<div class="form-group labelFonts"
													ng-show="posTrainingDetailsRepetitionArray[$index].totOthers">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e.i. Please specify,If Other
													</label>
													<div class="col-md-6">
														<input type="text" address-validation
															ng-model="posTrainingDetailsRepetitionArray[$index].totOthersSpecify"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
												<div class="form-group labelFont">
												<div class="col-md-12">
													<label class="col-md-6 control-label labelLeftAlign paddingLeftLable"
														for="textinput"><b>l.1.f. Training attended by </b> </label>
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrainedCCI"
														for="textinput"><b>Number of persons trained</b></label>
														</div>
														<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">CWC Member </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="posTrainingDetailsRepetitionArray[$index].tabCwcMember"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> JJB Staff </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="posTrainingDetailsRepetitionArray[$index].tabJjbStaff"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">DCPU Staff</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="posTrainingDetailsRepetitionArray[$index].tabDcpuStaff"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">SJPU Staff</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="posTrainingDetailsRepetitionArray[$index].tabSjpuStaff"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> CCI Staff</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="posTrainingDetailsRepetitionArray[$index].tabCciStaff"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Staff of Children's  Court</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits
															ng-model="posTrainingDetailsRepetitionArray[$index].tabStaffOfChildrenCourt"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Others </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-keyup="resetAccG($index)"
															ng-model="posTrainingDetailsRepetitionArray[$index].tabOthers"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div ng-show="posTrainingDetailsRepetitionArray[$index].tabOthers>0"
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">L.1.g.i  If training attended by other, Please specify</label>
													<div class="col-md-6 marginBottomTop">
														<input type="text" address-validation
															ng-model="posTrainingDetailsRepetitionArray[$index].tabOthersSpecify"
															ng-disabled="placeofSafety.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
												</div>
												<!-- --------------------------------------------- -->

											</div>
										</div>
									</div>



								</div>
								<!-- --------panel-group------- -->

								<div class="col-md-12 text-left">
									<div class="addingnewdetails-container">
										<div id="familydetailserror" class="error-style"></div>
										<button type="button" class="addingnewdetails" ng-disabled="placeofSafety.submitted"
											ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
										<button type="button" class="addingnewdetails" ng-disabled="placeofSafety.submitted"
											ng-show="posTrainingDetailsRepetitionArray.length > 1"
											ng-click="deleteConfirm()">-</button>
										<div id="maximumLimit10Error" class="error-style"></div>
									</div>
								</div>
							</div>
 <br> <br> <br> <br>&nbsp;<br> <br>
							<!-- ---------------------------- -->
							<br> &nbsp; <br>&nbsp; <a href="#" class="back-to-top"
								style="display: inline;" class="fa fa-arrow-circle-up"></a>
						</form>


					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- ------------------Confirmation Modal-------------------------- -->

	<div class="modal fade" id="confirmationModalForPOCSAVE"
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
	
	<div class="modal fade autoSaveModal" id="successModalForAutoSavePOS"
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
	<div class="modal fade" id="confirmationModalForPOCSUBMIT"
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
							ng-click="savePos(placeofSafety, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
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
	<!-- ------------------------------------------------------------------ -->
	<script src="resources/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/angular.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		var app = angular.module('placeofSafetyApp', ['angular-md5']);
		var cpmisApp = angular.module('placeofSafetyApp');
	</script>
	<script src="resources/js/controllers/cciPlaceOfSafety.js"></script>
	<script src="resources/js/jsFunctions/cciPosJsFunctions.js"></script>
	<script src="resources/services/commonService.js"></script>
    <script src="resources/js/angular-md5.js"></script>
    <jsp:include page="fragments/footer.jsp" />
    
	<script type='text/javascript'>
		$(document).ready(function() {
			$("input[type='number']").bind('copy paste', function (e) {
	            e.preventDefault();
	         });
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
						scrollTop : 98
					}, 0);
				} else if ($('#cased').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 135
					}, 0);
				} else if ($('#casee').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 177
					}, 0);
				}else if ($('#casef').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 217
					}, 0);
				}else if ($('#caseg').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 271
					}, 0);
				}else if ($('#caseh').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 316
					}, 0);
				}else if ($('#casei').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 359
					}, 0);
				}else if ($('#casej').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 400
					}, 0);
				}
				else if ($('#casek').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 420
					}, 0);
				}
				else if ($('#casel').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 450
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
	 $('#placeofSafetyFormDetails').on('focus', 'input[type=number]', function (e) {
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



	<!-- ------------------------------- Fixed Part-------------------------------------- -->
</body>
</html>