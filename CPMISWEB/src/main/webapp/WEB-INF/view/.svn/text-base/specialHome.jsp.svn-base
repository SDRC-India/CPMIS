
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
<title>CCI Special Home</title>
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
<body ng-app="cciApp" ng-controller="CCIController" ng-cloak id="CCIController"
	data-spy="scroll" data-target="#myScrollspy" data-offset="20" class="ng-cloak">
	<!-- spinner -->
	<div id="spinner" class="loader" style="display: none;"></div>
	<div id="loader-mask" class="loader" style="display: none;"></div>
	<!-- /spinner -->
	<jsp:include page="fragments/header.jsp" />
	<div class="b4sectionheading" id="gInfo"></div>
	<!-- 	<div class="container"> -->
	<div class="row marginspc">
	<form class="form-horizontal" name="cciFormDetails"
							id="cciFormDetails" data-toggle="validator" role="form">
		<nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
			<h5 class="cwcHeading">Special Home  <br>  Monthly Report</h5>

			<ul class="nav nav-pills nav-stacked sectionList flexcroll" id="sectionindctr">
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
						Children on the Last day of the reporting month</a></li>
				<li id="casef" class="sectionUlist"><a href="#caseF">F. Category wise break up of cases pending as on last day of month </a></li>
				<li id="caseg" class="sectionUlist"><a href="#caseG">G. Educational Details of Children in CCI</a></li>
				<li id="caseh" class="sectionUlist"><a href="#caseH">H.
						Health Status of the Children Residing in the CCI.</a></li>
				<li id="casei" class="sectionUlist"><a href="#caseI">I.
						Children Residing in the CCI by duration and Nature of Offense</a></li>
				<li id="casej" class="sectionUlist"><a href="#caseJ">J.
						 Children Residing in the CCI by duration</a></li>
				<li id="casek" class="sectionUlist"><a href="#caseK">K.
						 Details of cases dealt with (In the reporting month)</a></li>
				<li id="casel" class="sectionUlist"><a href="#caseL">L.
						 Training on JJ System</a></li>
			</ul>

			<div  ng-hide="cciForm.submitted">
				<a href=""><div class="col-md-6 savebtn locline" ng-click="checkSave()">
					<img class="saveSvg" 
						src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
						height="18" /> <h5 class="borderright1">SAVE</h5>
				</div></a>
				<button type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit" ng-click="cciFormDetails.$invalid ? '' : checkSubmit()">
					<img class="saveSvg"  
						src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
						height="18" /> <a href=""><h5 class="borderright1">SUBMIT</h5></a>
				</button>
			</div>
			<div ng-show="cciForm.submitted">
				<div class="col-md-12 savebtn"></div>
			</div>
		</nav>


		<div class="col-md-10 formDetailsTopMargin" id="gInfo">
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

					<div class="col-md-12">
						<h4 class="headingBottom1">
							Special Home&nbsp;Monthly Report for Month of <b
								style="color: #41c484">&nbsp;{{cciForm.timeperiod.timePeriod}}</b>
						</h4>
							<!-- Biswa starts -->
							<div>
								<div class="form-group labelFont">


									<div class="col-md-6">
										<input type="hidden" ng-model="cciForm.userId"
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
										<input type="text" id="nameOfPerson" required
											fifty-characters-validation ng-model="cciForm.nameOfPerson"
											ng-disabled="cciForm.submitted"
											class="form-control inputBackgroundgeneral">
									</div>
								</div>

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Designation </label>
									<div class="col-md-6">
										<input type="text" id="designation" required
											address-validation ng-model="cciForm.designation"
											ng-disabled="cciForm.submitted"
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
										<input type="text" readonly tabindex=-1
											class="form-control inputBackgroundgeneral readonlyStyle"
											value="<%=ft.format(dNow)%>">
									</div>
									<!-- <div class="col-md-6 calenderInline">
									<input type="text" readonly id="datepicker"
										class="form-control inputBackgroundgeneral">
								</div> -->
									<!-- <div class="col-md-6">
									<input type="text" id="monthAndYear" ng-model="cciForm.monthAndYear" id="datepicker"
										class="form-control inputBackground">
								</div> -->
								</div>
								<div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of the District</label>
                                        <div class="col-md-6">
                                             <input type="text" id="district" tabindex=-1
                                                  disabled ng-model="selectedDistrict.areaName"
                                                  class="form-control  inputBackgroundgeneral">
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
										<!-- <select 
											ng-options="nameCCI as nameCCI.cciName for nameCCI in cciNameList"
											ng-model="selectedCciName" ng-value="nameCCI.cciName"
											class="form-control inputBackgroundgeneral"
											ng-disabled="cciForm.submitted||(cciNameList.length==0)">
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
									<!-- <input type="text" id="nameOfCCI" fifty-characters-validation
											ng-model="cciForm.nameOfCCI" ng-disabled="cciForm.submitted"
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
											ng-disabled="cciForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
									</div>
								</div>
								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Run By (Govt. / NGO) </label>
									<div class="col-md-6">
										<select required
											ng-options="item as item.typeDetailsName for item in osType"
											ng-model="selectedOsType" ng-value="item.typeDetailsId"
											class="form-control inputBackgroundgeneral"
											ng-disabled="cciForm.submitted">
											<option value="" disabled selected>Select</option>
										</select>
									</div>
								</div>
								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> Capacity of Home/CCI </label>
									<div class="col-md-6">
										<input type="number" required id="capacityOfHome"
											id="capacityOfHome"
                                           	ng-keyup="testCapacity('capacityOfHome')"
											ng-model="cciForm.capacityOfHome"
											ng-disabled="cciForm.submitted"
											class="form-control inputBackgroundgeneral removeExponentialValueE">
									</div>
								</div>
							</div>
							<div class="b4sectionheading" id="caseA"></div>
							<div class="grey-header headMarg">
								A.Children Residing on the First day of the month</div>
							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th>Description</th>
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
													Age distribution of Children on the first day of the reporting month </label></td>
											<td><input type="number" 
												id="aYears7to11Id" ng-model="cciForm.aYears7to11"
												only-four-digits disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number"
												id="aYears12to15Id" ng-model="cciForm.aYears12to15"
												only-four-digits disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" 
												id="aYears16to18Id" ng-model="cciForm.aYears16to18"
												only-four-digits disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE" 
												></td>

											<td><input type="number" 
												id="aYearsGreaterThan18Id" ng-model="cciForm.aYearsGreaterThan18"
												only-four-digits disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" only-four-digits
												id="aTotal" disabled
												ng-model="cciForm.aTotal"
												ng-init="cciForm.aTotal=0"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
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
											<th>7-11 years</th>
											<th>12-15years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
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
											<td><input type="number" required only-four-digits
												id="b1Years7to11" ng-model="cciForm.b1Years7to11"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1Years7to11, cciForm.b2Years7to11, 'b1Years7to11', 'e1Years7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="number" required only-four-digits
												id="b1Years12to15" ng-model="cciForm.b1Years12to15"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1Years12to15, cciForm.b2Years12to15, 'b1Years12to15', 'e1Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="number" required only-four-digits
												id="b1Years16to18" ng-model="cciForm.b1Years16to18"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1Years16to18, cciForm.b2Years16to18, 'b1Years16to18', 'e1Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="number" required only-four-digits
												id="b1YearsGreaterThan18" ng-model="cciForm.b1YearsGreaterThan18"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1YearsGreaterThan18, cciForm.b2YearsGreaterThan18, 'b1YearsGreaterThan18', 'e1YearsGreaterThan18', '> 18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="text"  readonly
												id="b1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.b1Years7to11-0)+Number(cciForm.b1Years12to15-0)+Number(cciForm.b1Years16to18-0)+
														Number(cciForm.b1YearsGreaterThan18-0)}}">
											</td>
										</tr>

										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">B.2.
														Referred by Others</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="b2Years7to11"
												ng-model="cciForm.b2Years7to11"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1Years7to11, cciForm.b2Years7to11, 'b2Years7to11', 'e1Years7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="number" required only-four-digits
												id="b2Years12to15" ng-model="cciForm.b2Years12to15"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1Years12to15, cciForm.b2Years12to15, 'b2Years12to15', 'e1Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="number" required only-four-digits
												id="b2Years16to18" ng-model="cciForm.b2Years16to18"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1Years16to18, cciForm.b2Years16to18, 'b2Years16to18', 'e1Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="number" required only-four-digits
												id="b2YearsGreaterThan18" ng-model="cciForm.b2YearsGreaterThan18"
												ng-disabled="cciForm.submitted"
												ng-blur="validateWithE(cciForm.b1YearsGreaterThan18, cciForm.b2YearsGreaterThan18, 'b2YearsGreaterThan18', 'e1YearsGreaterThan18', '> 18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
												></td>

											<td><input type="text" readonly id="b2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.b2Years7to11-0)+Number(cciForm.b2Years12to15-0)+Number(cciForm.b2Years16to18-0)+
														Number(cciForm.b2YearsGreaterThan18-0)}}">
											</td>

										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">B.3.
														Total No. of Children Referred</label>
												</div>
											</td>
											<td><input type="text" ng-disabled="true" id="b3Years7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(cciForm.b1Years7to11-0)+Number(cciForm.b2Years7to11-0)}}">
											</td>
											<td><input type="text" id="b3Years12to15"
												ng-disabled="true"
												class="form-control inputBackground tableinputWidth totalFont" tabindex= -1
												value="{{Number(cciForm.b1Years12to15-0)+Number(cciForm.b2Years12to15-0)}}">
											</td>
											<td><input type="text" ng-disabled="true"
												id="b3Years16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(cciForm.b1Years16to18-0)+Number(cciForm.b2Years16to18-0)}}">

											</td>
											<td><input type="text" id="b3YearsGreaterThan18"
												ng-disabled="true" tabindex= -1
												class="form-control inputBackground tableinputWidth totalFont"
												value="{{Number(cciForm.b1YearsGreaterThan18-0)+Number(cciForm.b2YearsGreaterThan18-0)}}">

											</td>
											<td><input type="text" readonly id="b3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.b1Years7to11-0)+Number(cciForm.b2Years7to11-0)+
														Number(cciForm.b1Years12to15-0)+Number(cciForm.b2Years12to15-0)+
														Number(cciForm.b1Years16to18-0)+Number(cciForm.b2Years16to18-0)+
														Number(cciForm.b1YearsGreaterThan18-0)+Number(cciForm.b2YearsGreaterThan18-0)}}">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							
							<div class="b4sectionheading" id="caseC"></div>
							<div class="grey-header headMarg">
								C.  Total Children in the month</div>

								<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop">
									<thead>
										<tr>
											<th> Age distribution of Children in the reporting month  </th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total New Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> C.1.
													Total children in the month by age</label></td>
											<td><input type="text" readonly id="cYears7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.aYears7to11-0)+Number(cciForm.b1Years7to11-0)+Number(cciForm.b2Years7to11-0)}}"></td>
														 
											<td><input type="text" readonly id="cYears12to15" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.aYears12to15-0)+Number(cciForm.b1Years12to15-0)+Number(cciForm.b2Years12to15-0)}}"></td>
														 
											<td><input type="text" readonly id="cYears16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.aYears16to18-0)+Number(cciForm.b1Years16to18-0)+Number(cciForm.b2Years16to18-0)}}"></td>
														 
											<td><input type="text" readonly
												id="cYearsGreaterThan18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.aYearsGreaterThan18-0)+Number(cciForm.b1YearsGreaterThan18-0)+Number(cciForm.b2YearsGreaterThan18-0)}}"></td>
														 
											<td><input type="text" readonly id="cTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.aYears7to11-0)+Number(cciForm.aYears12to15-0)+Number(cciForm.aYears16to18-0)+
														Number(cciForm.aYearsGreaterThan18-0)+Number(cciForm.b1Years7to11-0)+Number(cciForm.b2Years7to11-0)+
														Number(cciForm.b1Years12to15-0)+Number(cciForm.b2Years12to15-0)+
														Number(cciForm.b1Years16to18-0)+Number(cciForm.b2Years16to18-0)+
														Number(cciForm.b1YearsGreaterThan18-0)+Number(cciForm.b2YearsGreaterThan18-0)}}"></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							<div class="b4sectionheading" id="caseD"></div>
							<div class="grey-header headMarg">D.
								 Institutions/Persons where Children Referred</div>
							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableD">
									<thead>
										<tr>
											<th>Children referred in the reporting month </th>
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
													<label class="control-label" for="textinput">D.1. Children Released on Bail</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d1Years7to11"
												ng-model="cciForm.d1Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd1Years7to11', '7-11')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d1Years12to15" ng-model="cciForm.d1Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd1Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d1Years16to18" ng-model="cciForm.d1Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd1Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d1YearsGreaterThan18" ng-model="cciForm.d1YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd1YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d1Years7to11-0)+Number(cciForm.d1Years12to15-0)+Number(cciForm.d1Years16to18-0)+
												Number(cciForm.d1YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.2. Transferred to Other Home</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d2Years7to11"
												ng-model="cciForm.d2Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd2Years7to11', '7-11')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d2Years12to15" ng-model="cciForm.d2Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd2Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d2Years16to18" ng-model="cciForm.d2Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd2Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d2YearsGreaterThan18" ng-model="cciForm.d2YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd2YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d2Years7to11-0)+Number(cciForm.d2Years12to15-0)+Number(cciForm.d2Years16to18-0)+
												Number(cciForm.d2YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.3. Runaway/Missing</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d3Years7to11"
												ng-model="cciForm.d3Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd3Years7to11', '7-11')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d3Years12to15" ng-model="cciForm.d3Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd3Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d3Years16to18" ng-model="cciForm.d3Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd3Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d3YearsGreaterThan18" ng-model="cciForm.d3YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd3YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d3Years7to11-0)+Number(cciForm.d3Years12to15-0)+Number(cciForm.d3Years16to18-0)+
														Number(cciForm.d3YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.4. Death</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits id="d4Years7to11"
												ng-model="cciForm.d4Years7to11"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears7to11', 'd4Years7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d4Years12to15" ng-model="cciForm.d4Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd4Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d4Years16to18" ng-model="cciForm.d4Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd4Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d4YearsGreaterThan18" ng-model="cciForm.d4YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd4YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d4Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d4Years7to11-0)+Number(cciForm.d4Years12to15-0)+Number(cciForm.d4Years16to18-0)+
														Number(cciForm.d4YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.5. Case Disposed / Restored to Family</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d5Years7to11"
												ng-model="cciForm.d5Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd5Years7to11', '7-11')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d5Years12to15" ng-model="cciForm.d5Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd5Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d5Years16to18" ng-model="cciForm.d5Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd5Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d5YearsGreaterThan18" ng-model="cciForm.d5YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd5YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d5Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d5Years7to11-0)+Number(cciForm.d5Years12to15-0)+Number(cciForm.d5Years16to18-0)+
														Number(cciForm.d5YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.6. Transferred to Place of Safety</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d6Years7to11"
												ng-model="cciForm.d6Years7to11"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears7to11', 'd6Years7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d6Years12to15" ng-model="cciForm.d6Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd6Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d6Years16to18" ng-model="cciForm.d6Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd6Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d6YearsGreaterThan18" ng-model="cciForm.d6YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd6YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d6Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d6Years7to11-0)+Number(cciForm.d6Years12to15-0)+Number(cciForm.d6Years16to18-0)+
														Number(cciForm.d6YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.7. Transferred to Jail</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d7Years7to11"
												ng-model="cciForm.d7Years7to11" ng-keyup="calculateWithC('cYears7to11', 'd7Years7to11', '7-11')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d7Years12to15" ng-model="cciForm.d7Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd7Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d7Years16to18" ng-model="cciForm.d7Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd7Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d7YearsGreaterThan18" ng-model="cciForm.d7YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd7YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d7Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d7Years7to11-0)+Number(cciForm.d7Years12to15-0)+Number(cciForm.d7Years16to18-0)+
														Number(cciForm.d7YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.8. Sent for Alternative Care (Foster care, Sponsorship & After Care)</label>
												</div>
											</td>
										
											<td><input type="number" required only-four-digits id="d8Years7to11"
												ng-model="cciForm.d8Years7to11"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears7to11', 'd8Years7to11', '7-11')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d8Years12to15" ng-model="cciForm.d8Years12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd8Years12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d8Years16to18" ng-model="cciForm.d8Years16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd8Years16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d8YearsGreaterThan18" ng-model="cciForm.d8YearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd8YearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d8Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d8Years7to11-0)+Number(cciForm.d8Years12to15-0)+Number(cciForm.d8Years16to18-0)+
														Number(cciForm.d8YearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.9. Any other Institution/Program</label>
												</div>
											</td>
											
											<td><input type="number" required only-four-digits id="d9aYears7to11"
												ng-model="cciForm.d9aYears7to11"  ng-keyup="calculateWithC('cYears7to11', 'd9aYears7to11', '7-11')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
											<td><input type="number" required only-four-digits
												id="d9aYears12to15" ng-model="cciForm.d9aYears12to15"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears12to15', 'd9aYears12to15', '12-15')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d9aYears16to18" ng-model="cciForm.d9aYears16to18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYears16to18', 'd9aYears16to18', '16-18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="number" required only-four-digits
												id="d9aYearsGreaterThan18" ng-model="cciForm.d9aYearsGreaterThan18"
												ng-disabled="cciForm.submitted" ng-keyup="calculateWithC('cYearsGreaterThan18', 'd9aYearsGreaterThan18', '>18')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>

											<td><input type="text" readonly id="d9aTotal" tabindex= -1 ng-keyup="validateDwithC('d9aTotal')"
												class="form-control inputBackground tableinputWidth readonlyStyle "
												value="{{Number(cciForm.d9aYears7to11-0)+Number(cciForm.d9aYears12to15-0)+Number(cciForm.d9aYears16to18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)}}">
											</td>
										</tr>
										
										<tr ng-show="Number(cciForm.d9aYears7to11-0)+Number(cciForm.d9aYears12to15-0)+Number(cciForm.d9aYears16to18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)>0">
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">D.9.a. Please specify, if other</label>
												</div>
											</td>
											
											<td colspan="5"><input type="text" ng-disabled="cciForm.submitted" id="d9Others"
											ng-model="cciForm.d9Others" ng-required="Number(cciForm.d9aYears7to11-0)+Number(cciForm.d9aYears12to15-0)+Number(cciForm.d9aYears16to18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)>0"
											class="form-control inputBackground tableinputWidth" address-validation >
											</td>
										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">D.10. Total no. of children referred</label>
												</div>
											</td>
											
											<td><input type="text"  id="d10Years7to11" readonly tabindex= -1
												value="{{Number(cciForm.d1Years7to11-0)+
														Number(cciForm.d2Years7to11-0)+
														Number(cciForm.d3Years7to11-0)+
														Number(cciForm.d4Years7to11-0)+
														Number(cciForm.d5Years7to11-0)+
														Number(cciForm.d6Years7to11-0)+
														Number(cciForm.d7Years7to11-0)+
														Number(cciForm.d8Years7to11-0)+
														Number(cciForm.d9aYears7to11-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>

											<td><input type="text"  readonly tabindex= -1
												value="{{Number(cciForm.d1Years12to15-0)+
														Number(cciForm.d2Years12to15-0)+
														Number(cciForm.d3Years12to15-0)+
														Number(cciForm.d4Years12to15-0)+
														Number(cciForm.d5Years12to15-0)+
														Number(cciForm.d6Years12to15-0)+
														Number(cciForm.d7Years12to15-0)+
														Number(cciForm.d8Years12to15-0)+
														Number(cciForm.d9aYears12to15-0)}}"
												id="d10Years12to15" 
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>

											<td><input type="text"  readonly tabindex= -1
												id="d10Years16to18" 
												value="{{Number(cciForm.d1Years16to18-0)+
														Number(cciForm.d2Years16to18-0)+
														Number(cciForm.d3Years16to18-0)+
														Number(cciForm.d4Years16to18-0)+
														Number(cciForm.d5Years16to18-0)+
														Number(cciForm.d6Years16to18-0)+
														Number(cciForm.d7Years16to18-0)+
														Number(cciForm.d8Years16to18-0)+
														Number(cciForm.d9aYears16to18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>

											<td><input type="text"  readonly
												id="d10YearsGreaterThan18"  tabindex= -1
												value="{{Number(cciForm.d1YearsGreaterThan18-0)+
														Number(cciForm.d2YearsGreaterThan18-0)+
														Number(cciForm.d3YearsGreaterThan18-0)+
														Number(cciForm.d4YearsGreaterThan18-0)+
														Number(cciForm.d5YearsGreaterThan18-0)+
														Number(cciForm.d6YearsGreaterThan18-0)+
														Number(cciForm.d7YearsGreaterThan18-0)+
														Number(cciForm.d8YearsGreaterThan18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>

											<td><input type="text"  id="d10Total" tabindex= -1 readonly
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
														Number(cciForm.d1Years7to11-0)+
														Number(cciForm.d2Years7to11-0)+
														Number(cciForm.d3Years7to11-0)+
														Number(cciForm.d4Years7to11-0)+
														Number(cciForm.d5Years7to11-0)+
														Number(cciForm.d6Years7to11-0)+
														Number(cciForm.d7Years7to11-0)+
														Number(cciForm.d8Years7to11-0)+
														Number(cciForm.d9aYears7to11-0)+
														Number(cciForm.d1Years12to15-0)+
														Number(cciForm.d2Years12to15-0)+
														Number(cciForm.d3Years12to15-0)+
														Number(cciForm.d4Years12to15-0)+
														Number(cciForm.d5Years12to15-0)+
														Number(cciForm.d6Years12to15-0)+
														Number(cciForm.d7Years12to15-0)+
														Number(cciForm.d8Years12to15-0)+
														Number(cciForm.d9aYears12to15-0)+
														Number(cciForm.d1Years16to18-0)+
														Number(cciForm.d2Years16to18-0)+
														Number(cciForm.d3Years16to18-0)+
														Number(cciForm.d4Years16to18-0)+
														Number(cciForm.d5Years16to18-0)+
														Number(cciForm.d6Years16to18-0)+
														Number(cciForm.d7Years16to18-0)+
														Number(cciForm.d8Years16to18-0)+
														Number(cciForm.d9aYears16to18-0)+
														Number(cciForm.d1YearsGreaterThan18-0)+
														Number(cciForm.d2YearsGreaterThan18-0)+
														Number(cciForm.d3YearsGreaterThan18-0)+
														Number(cciForm.d4YearsGreaterThan18-0)+
														Number(cciForm.d5YearsGreaterThan18-0)+
														Number(cciForm.d6YearsGreaterThan18-0)+
														Number(cciForm.d7YearsGreaterThan18-0)+
														Number(cciForm.d8YearsGreaterThan18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)}}">
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							

							<div class="b4sectionheading" id="caseE"></div>
							<div class="grey-header headMarg">

								E.Children on the Last Day of the Reporting Month</div>

							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableE">
									<thead>
										<tr>
											<th> Age distribution of Children on the last day of the reporting month </th>
											<th>7-11 years</th>
											<th>12-15 years</th>
											<th>16-18 years</th>
											<th>> 18 years</th>
											<th>Total Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><label
												class="col-md-12 control-label labelLeftAlign totalFont"> E.1.
													Total children on the last day the month by age</label></td>
											<td><input type="text" readonly id="e1Years7to11" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												 Number(Number(cciForm.aYears7to11-0)+Number(cciForm.b1Years7to11-0)+Number(cciForm.b2Years7to11-0)-0)
												 		-												 
												 Number(Number(cciForm.d1Years7to11-0)+
														Number(cciForm.d2Years7to11-0)+
														Number(cciForm.d3Years7to11-0)+
														Number(cciForm.d4Years7to11-0)+
														Number(cciForm.d5Years7to11-0)+
														Number(cciForm.d6Years7to11-0)+
														Number(cciForm.d7Years7to11-0)+
														Number(cciForm.d8Years7to11-0)+
														Number(cciForm.d9aYears7to11-0)-0)
												}}"></td>
														 
											<td><input type="text" readonly id="e1Years12to15" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(Number(cciForm.aYears12to15-0)+Number(cciForm.b1Years12to15-0)+Number(cciForm.b2Years12to15-0)-0)
																-
												Number(Number(cciForm.d1Years12to15-0)+
														Number(cciForm.d2Years12to15-0)+
														Number(cciForm.d3Years12to15-0)+
														Number(cciForm.d4Years12to15-0)+
														Number(cciForm.d5Years12to15-0)+
														Number(cciForm.d6Years12to15-0)+
														Number(cciForm.d7Years12to15-0)+
														Number(cciForm.d8Years12to15-0)+
														Number(cciForm.d9aYears12to15-0)-0)}}"></td>
														 
											<td><input type="text" readonly id="e1Years16to18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(Number(cciForm.aYears16to18-0)+Number(cciForm.b1Years16to18-0)+Number(cciForm.b2Years16to18-0)-0)
																-
												Number(Number(cciForm.d1Years16to18-0)+
														Number(cciForm.d2Years16to18-0)+
														Number(cciForm.d3Years16to18-0)+
														Number(cciForm.d4Years16to18-0)+
														Number(cciForm.d5Years16to18-0)+
														Number(cciForm.d6Years16to18-0)+
														Number(cciForm.d7Years16to18-0)+
														Number(cciForm.d8Years16to18-0)+
														Number(cciForm.d9aYears16to18-0)-0)}}"></td>
														 
											<td><input type="text" readonly
												id="e1YearsGreaterThan18" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(Number(cciForm.aYearsGreaterThan18-0)+Number(cciForm.b1YearsGreaterThan18-0)+Number(cciForm.b2YearsGreaterThan18-0)-0)
																-
												Number(Number(cciForm.d1YearsGreaterThan18-0)+
														Number(cciForm.d2YearsGreaterThan18-0)+
														Number(cciForm.d3YearsGreaterThan18-0)+
														Number(cciForm.d4YearsGreaterThan18-0)+
														Number(cciForm.d5YearsGreaterThan18-0)+
														Number(cciForm.d6YearsGreaterThan18-0)+
														Number(cciForm.d7YearsGreaterThan18-0)+
														Number(cciForm.d8YearsGreaterThan18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)-0)}}"></td>
														 
											<td><input type="text" readonly id="e1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{
												Number(Number(cciForm.aYears7to11-0)+Number(cciForm.aYears12to15-0)+Number(cciForm.aYears16to18-0)+
														Number(cciForm.aYearsGreaterThan18-0)+Number(cciForm.b1Years7to11-0)+Number(cciForm.b2Years7to11-0)+
														Number(cciForm.b1Years12to15-0)+Number(cciForm.b2Years12to15-0)+
														Number(cciForm.b1Years16to18-0)+Number(cciForm.b2Years16to18-0)+
														Number(cciForm.b1YearsGreaterThan18-0)+Number(cciForm.b2YearsGreaterThan18-0)-0)
														-
												Number(Number(cciForm.d1Years7to11-0)+
														Number(cciForm.d2Years7to11-0)+
														Number(cciForm.d3Years7to11-0)+
														Number(cciForm.d4Years7to11-0)+
														Number(cciForm.d5Years7to11-0)+
														Number(cciForm.d6Years7to11-0)+
														Number(cciForm.d7Years7to11-0)+
														Number(cciForm.d8Years7to11-0)+
														Number(cciForm.d9aYears7to11-0)+
														Number(cciForm.d1Years12to15-0)+
														Number(cciForm.d2Years12to15-0)+
														Number(cciForm.d3Years12to15-0)+
														Number(cciForm.d4Years12to15-0)+
														Number(cciForm.d5Years12to15-0)+
														Number(cciForm.d6Years12to15-0)+
														Number(cciForm.d7Years12to15-0)+
														Number(cciForm.d8Years12to15-0)+
														Number(cciForm.d9aYears12to15-0)+
														Number(cciForm.d1Years16to18-0)+
														Number(cciForm.d2Years16to18-0)+
														Number(cciForm.d3Years16to18-0)+
														Number(cciForm.d4Years16to18-0)+
														Number(cciForm.d5Years16to18-0)+
														Number(cciForm.d6Years16to18-0)+
														Number(cciForm.d7Years16to18-0)+
														Number(cciForm.d8Years16to18-0)+
														Number(cciForm.d9aYears16to18-0)+
														Number(cciForm.d1YearsGreaterThan18-0)+
														Number(cciForm.d2YearsGreaterThan18-0)+
														Number(cciForm.d3YearsGreaterThan18-0)+
														Number(cciForm.d4YearsGreaterThan18-0)+
														Number(cciForm.d5YearsGreaterThan18-0)+
														Number(cciForm.d6YearsGreaterThan18-0)+
														Number(cciForm.d7YearsGreaterThan18-0)+
														Number(cciForm.d8YearsGreaterThan18-0)+
														Number(cciForm.d9aYearsGreaterThan18-0)-0)}}"></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							
							<div class="b4sectionheading" id="caseF"></div>
							<div class="grey-header headMarg">
								F. Category wise break up of cases pending as on last day of month </div>
								
								<div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableF">
                                             <thead>
                                                  <tr>
                                                  <th>Description</th>
                                                  <th>SC</th>
                                                  <th>ST</th>
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
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">No. of Children </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="fSC" 
                                                            ng-model="cciForm.fSC" ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" required id="fST" 
                                                            ng-model="cciForm.fST" ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" required id="fEBC"
                                                            ng-model="cciForm.fEBC" ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                          
                                                       <td><input type="number" required id="fOBC"
                                                            ng-model="cciForm.fOBC" ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" required id="fOthers" 
                                                            ng-model="cciForm.fOthers" ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" required id="fNotKnown" 
                                                            ng-model="cciForm.fNotKnown" ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="fTotal" readonly tabindex= -1
                                                            value="{{Number(cciForm.fSC-0)+Number(cciForm.fST-0)+Number(cciForm.fOBC-0)+Number(cciForm.fEBC-0)
                                                            		+Number(cciForm.fOthers-0)+Number(cciForm.fNotKnown-0)}}"
                                                            ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                                    
                                                       <td><input type="number" id="fMinority" 
                                                           ng-model="cciForm.fMinority" required
                                                            ng-disabled="cciForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
								
								
								
								

							<div class="b4sectionheading" id="caseG"></div>
							<div class="grey-header headMarg">
									G. Educational Details of Children in CCI 
							</div>
							<div class="labelFont">
								<div class="form-group labelFont"></div>
								<table class="table table-bordered table-margintop" id="tableG">

									<thead>
										<tr>
											<th>Educational description</th>
											<th>07-11 years</th>
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
													<label class="control-label" for="textinput">G.1.
														Enrolled in Special training (RTE)/ Bridge course
													</label>

												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g1Years7to11" ng-model="cciForm.g1Years7to11"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g1Years12to15" ng-model="cciForm.g1Years12to15"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g1Years16to18" ng-model="cciForm.g1Years16to18"
												ng-keyup="validateF1('f72')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f72" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g1YearsGreaterThan18" ng-model="cciForm.g1YearsGreaterThan18"
												ng-keyup="validateF1('f73')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f73" class="errorDisp"></div></td>
												
											<td><input type="text" 
												id="g1Total" readonly tabindex= -1
												ng-keyup="validateF1('f74')"
												value="{{Number(cciForm.g1Years7to11-0)+Number(cciForm.g1Years12to15-0)+Number(cciForm.g1Years16to18-0)
												+Number(cciForm.g1YearsGreaterThan18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.2.
														Attending non-formal education classes within home
													</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g2Years7to11" ng-model="cciForm.g2Years7to11"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g2Years12to15" ng-model="cciForm.g2Years12to15"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g2Years16to18" ng-model="cciForm.g2Years16to18"
												ng-keyup="validateF1('f72')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f72" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g2YearsGreaterThan18" ng-model="cciForm.g2YearsGreaterThan18"
												ng-keyup="validateF1('f73')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f73" class="errorDisp"></div></td>
												
											<td><input type="text" required  readonly tabindex= -1
												value="{{Number(cciForm.g2Years7to11-0)+Number(cciForm.g2Years12to15-0)+Number(cciForm.g2Years16to18-0)
														+Number(cciForm.g2YearsGreaterThan18-0)}}"
												id="g2Total" 
												ng-keyup="validateF1('f74')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												><div id="f74" class="errorDisp"></div></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.3.
														Not enrolled in any educational programme
													</label>
												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g3Years7to11" ng-model="cciForm.g3Years7to11"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g3Years12to15" ng-model="cciForm.g3Years12to15"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g3Years16to18" ng-model="cciForm.g3Years16to18"
												ng-keyup="validateF1('f72')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f72" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g3YearsGreaterThan18" ng-model="cciForm.g3YearsGreaterThan18"
												ng-keyup="validateF1('f73')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f73" class="errorDisp"></div></td>
												
											<td><input type="text" readonly
												id="g3Total"  tabindex= -1
												value="{{Number(cciForm.g3Years7to11-0)+Number(cciForm.g3Years12to15-0)+Number(cciForm.g3Years16to18-0)
														+Number(cciForm.g3YearsGreaterThan18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"
												></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">G.4.
														Enrolled for Vocational Training
													</label>

												</div>
											</td>
											<td><input type="number" required only-four-digits
												id="g4Years7to11" ng-model="cciForm.g4Years7to11"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g4Years12to15" ng-model="cciForm.g4Years12to15"
												ng-keyup="validateF1('f71')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f71" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g4Years16to18" ng-model="cciForm.g4Years16to18"
												ng-keyup="validateF1('f72')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f72" class="errorDisp"></div></td>
												
											<td><input type="number" required only-four-digits
												id="g4YearsGreaterThan18" ng-model="cciForm.g4YearsGreaterThan18"
												ng-keyup="validateF1('f73')"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												><div id="f73" class="errorDisp"></div></td>
												
											<td><input type="text" readonly
												id="g4Total"  tabindex= -1
												value="{{Number(cciForm.g4Years7to11-0)+Number(cciForm.g4Years12to15-0)+Number(cciForm.g4Years16to18-0)
														+Number(cciForm.g4YearsGreaterThan18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle"></td>
										</tr>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">G.5.
														 Total no. of children attending any educational programme
													</label>

												</div>
											</td>
											<td><input type="text" readonly
												id="g5Years7to11"  tabindex= -1
												value="{{Number(cciForm.g1Years7to11-0)+
														Number(cciForm.g2Years7to11-0)+
														Number(cciForm.g3Years7to11-0)+
														Number(cciForm.g4Years7to11-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
												
											<td><input type="text" readonly
												id="g5Years12to15"  tabindex= -1
												value="{{Number(cciForm.g1Years12to15-0)+
														Number(cciForm.g2Years12to15-0)+
														Number(cciForm.g3Years12to15-0)+
														Number(cciForm.g4Years12to15-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
												
											<td><input type="text" readonly
												id="g5Years16to18" tabindex= -1
												value="{{Number(cciForm.g1Years16to18-0)+
														Number(cciForm.g2Years16to18-0)+
														Number(cciForm.g3Years16to18-0)+
														Number(cciForm.g4Years16to18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>	
												
											<td><input type="text" readonly
												id="g5YearsGreaterThan18" tabindex= -1
												value="{{Number(cciForm.g1YearsGreaterThan18-0)+
														Number(cciForm.g2YearsGreaterThan18-0)+
														Number(cciForm.g3YearsGreaterThan18-0)+
														Number(cciForm.g4YearsGreaterThan18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
												
											<td><input type="text" readonly tabindex= -1
												id="g5Total" 
												value="{{Number(cciForm.g1Years7to11-0)+
														Number(cciForm.g2Years7to11-0)+
														Number(cciForm.g3Years7to11-0)+
														Number(cciForm.g4Years7to11-0)+
														Number(cciForm.g1Years12to15-0)+
														Number(cciForm.g2Years12to15-0)+
														Number(cciForm.g3Years12to15-0)+
														Number(cciForm.g4Years12to15-0)+
														Number(cciForm.g1Years16to18-0)+
														Number(cciForm.g2Years16to18-0)+
														Number(cciForm.g3Years16to18-0)+
														Number(cciForm.g4Years16to18-0)+
														Number(cciForm.g1YearsGreaterThan18-0)+
														Number(cciForm.g2YearsGreaterThan18-0)+
														Number(cciForm.g3YearsGreaterThan18-0)+
														Number(cciForm.g4YearsGreaterThan18-0)}}"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="b4sectionheading" id="caseH"></div>
							<div class="grey-header headMarg">
								H. Health Status of the Children Residing in the CCI.</div>
								
								<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableH">
									<thead>
										<tr>
											<th>Description</th>
											<th>07-11 years</th>
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
													<label class="control-label" for="textinput">H.1. Children Mentally Challenged
													</label>
												</div>
											</td>
										
											<td><input type="number" required only-four-digits
												id="h1Years7to11" ng-model="cciForm.h1Years7to11"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h1Years12to15"
												ng-model="cciForm.h1Years12to15"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h1Years16to18"
												ng-model="cciForm.h1Years16to18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h1YearsGreaterThan18"
												ng-model="cciForm.h1YearsGreaterThan18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="h1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.h1Years7to11-0)+
														Number(cciForm.h1Years12to15-0)+
														Number(cciForm.h1Years16to18-0)+
														Number(cciForm.h1YearsGreaterThan18-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.2. Children Physically Challenged
													</label>
												</div>
											</td>
										
											<td><input type="number" required only-four-digits
												id="h2Years7to11" ng-model="cciForm.h2Years7to11"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h2Years12to15"
												ng-model="cciForm.h2Years12to15"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h2Years16to18"
												ng-model="cciForm.h2Years16to18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h2YearsGreaterThan18"
												ng-model="cciForm.h2YearsGreaterThan18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="h2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.h2Years7to11-0)+
														Number(cciForm.h2Years12to15-0)+
														Number(cciForm.h2Years16to18-0)+
														Number(cciForm.h2YearsGreaterThan18-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.3. Children suffering with critical illness (TB, HIV/AIDS etc)
													</label>
												</div>
											</td>
										
											<td><input type="number" required only-four-digits
												id="h3Years7to11" ng-model="cciForm.h3Years7to11"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h3Years12to15"
												ng-model="cciForm.h3Years12to15"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h3Years16to18"
												ng-model="cciForm.h3Years16to18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h3YearsGreaterThan18"
												ng-model="cciForm.h3YearsGreaterThan18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="h3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.h3Years7to11-0)+
														Number(cciForm.h3Years12to15-0)+
														Number(cciForm.h3Years16to18-0)+
														Number(cciForm.h3YearsGreaterThan18-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">H.4. Children with Multiple Disability
													</label>
												</div>
											</td>
										
											<td><input type="number" required only-four-digits
												id="h4Years7to11" ng-model="cciForm.h4Years7to11"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h4Years12to15"
												ng-model="cciForm.h4Years12to15"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h4Years16to18"
												ng-model="cciForm.h4Years16to18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="h4YearsGreaterThan18"
												ng-model="cciForm.h4YearsGreaterThan18"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="h4Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.h4Years7to11-0)+
														Number(cciForm.h4Years12to15-0)+
														Number(cciForm.h4Years16to18-0)+
														Number(cciForm.h4YearsGreaterThan18-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">H.5. Total Children
													</label>
												</div>
											</td>
										
											<td><input type="text" readonly
												id="h5Years7to11" tabindex= -1
												value="{{Number(cciForm.h1Years7to11-0)+
														Number(cciForm.h2Years7to11-0)+
														Number(cciForm.h3Years7to11-0)+
														Number(cciForm.h4Years7to11-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly
												id="h5Years12to15" tabindex= -1
												value="{{Number(cciForm.h1Years12to15-0)+
													Number(cciForm.h2Years12to15-0)+
													Number(cciForm.h3Years12to15-0)+
													Number(cciForm.h4Years12to15-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly
												id="h5Years16to18" tabindex= -1
												value="{{Number(cciForm.h1Years16to18-0)+
														Number(cciForm.h2Years16to18-0)+
														Number(cciForm.h3Years16to18-0)+
														Number(cciForm.h4Years16to18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly
												id="h5YearsGreaterThan18" tabindex= -1
												value="{{Number(cciForm.h1YearsGreaterThan18-0)+
														Number(cciForm.h2YearsGreaterThan18-0)+
														Number(cciForm.h3YearsGreaterThan18-0)+
														Number(cciForm.h4YearsGreaterThan18-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly id="h5Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.h1Years7to11-0)+
														Number(cciForm.h2Years7to11-0)+
														Number(cciForm.h3Years7to11-0)+
														Number(cciForm.h4Years7to11-0)+
														Number(cciForm.h1Years12to15-0)+
														Number(cciForm.h2Years12to15-0)+
														Number(cciForm.h3Years12to15-0)+
														Number(cciForm.h4Years12to15-0)+
														Number(cciForm.h1Years16to18-0)+
														Number(cciForm.h2Years16to18-0)+
														Number(cciForm.h3Years16to18-0)+
														Number(cciForm.h4Years16to18-0)+
														Number(cciForm.h1YearsGreaterThan18-0)+
														Number(cciForm.h2YearsGreaterThan18-0)+
														Number(cciForm.h3YearsGreaterThan18-0)+
														Number(cciForm.h4YearsGreaterThan18-0)}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>
							
							
							
							
							<div class="b4sectionheading" id="caseI"></div>
							<div class="grey-header headMarg">I. Children Residing in the CCI by duration and Nature of Offense</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableI">
									<thead>
										<tr>
											<th>Type of Offense</th>
											<th>0-30 days </th>
											<th>1-2 months </th>
											<th>2-3 months </th>
											<th>3-4 months </th>
											<th>4-12 months  </th>
											<th>More than 1 Year </th>
											<th>Total Children</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.1.Petty
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="iPetty0to30Days" ng-model="cciForm.iPetty0to30Days"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPettyMonths1to2" ng-model="cciForm.iPettyMonths1to2"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPettyMonths2to3" ng-model="cciForm.iPettyMonths2to3"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPettyMonths3to4"
												ng-model="cciForm.iPettyMonths3to4"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPettyMonths4to12"
												ng-model="cciForm.iPettyMonths4to12"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iPettyMonthsMoreThan1Year"
												ng-model="cciForm.iPettyMonthsMoreThan1Year"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="iPettyTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.iPetty0to30Days-0)+
														Number(cciForm.iPettyMonths1to2-0)+
														Number(cciForm.iPettyMonths2to3-0)+
														Number(cciForm.iPettyMonths3to4-0)+
														Number(cciForm.iPettyMonths4to12-0)+
														Number(cciForm.iPettyMonthsMoreThan1Year-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.2.Serious
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="iSerious0to30Days" ng-model="cciForm.iSerious0to30Days"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSeriousMonths1to2" ng-model="cciForm.iSeriousMonths1to2"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSeriousMonths2to3" ng-model="cciForm.iSeriousMonths2to3"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSeriousMonths3to4"
												ng-model="cciForm.iSeriousMonths3to4"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSeriousMonths4to12"
												ng-model="cciForm.iSeriousMonths4to12"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iSeriousMonthsMoreThan1Year"
												ng-model="cciForm.iSeriousMonthsMoreThan1Year"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="iSeriousTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.iSerious0to30Days-0)+
														Number(cciForm.iSeriousMonths1to2-0)+
														Number(cciForm.iSeriousMonths2to3-0)+
														Number(cciForm.iSeriousMonths3to4-0)+
														Number(cciForm.iSeriousMonths4to12-0)+
														Number(cciForm.iSeriousMonthsMoreThan1Year-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label" for="textinput">I.3.Heinous
													</label>
												</div>
											</td>

											<td><input type="number" required only-four-digits
												id="iHeinous0to30Days" ng-model="cciForm.iHeinous0to30Days"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinousMonths1to2" ng-model="cciForm.iHeinousMonths1to2"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinousMonths2to3" ng-model="cciForm.iHeinousMonths2to3"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinousMonths3to4"
												ng-model="cciForm.iHeinousMonths3to4"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinousMonths4to12"
												ng-model="cciForm.iHeinousMonths4to12"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="iHeinousMonthsMoreThan1Year"
												ng-model="cciForm.iHeinousMonthsMoreThan1Year"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="iHeinousTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.iHeinous0to30Days-0)+
														Number(cciForm.iHeinousMonths1to2-0)+
														Number(cciForm.iHeinousMonths2to3-0)+
														Number(cciForm.iHeinousMonths3to4-0)+
														Number(cciForm.iHeinousMonths4to12-0)+
														Number(cciForm.iHeinousMonthsMoreThan1Year-0)}}">
											</td>

										</tr>
										
										<tr>
											<td>
												<div class="textAlign">
													<label class="control-label totalFont" for="textinput">I.4.Total
													</label>
												</div>
											</td>

											<td><input type="text"  readonly
												id="iTotal0to30Days"  tabindex= -1
												value="{{
														Number(cciForm.iPetty0to30Days-0)+
														Number(cciForm.iSerious0to30Days-0)+
														Number(cciForm.iHeinous0to30Days-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text"   readonly
												id="iTotalMonths1to2"  tabindex= -1
												value="{{Number(cciForm.iPettyMonths1to2-0)+
														Number(cciForm.iSeriousMonths1to2-0)+
														Number(cciForm.iHeinousMonths1to2-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="iTotalMonths2to3" tabindex= -1
												value="{{Number(cciForm.iPettyMonths2to3-0)+
														Number(cciForm.iSeriousMonths2to3-0)+
														Number(cciForm.iHeinousMonths2to3-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont" 
												></td>
												
											<td><input type="text"  readonly
												id="iTotalMonths3to4" tabindex= -1
												value="{{Number(cciForm.iPettyMonths3to4-0)+
														Number(cciForm.iSeriousMonths3to4-0)+
														Number(cciForm.iHeinousMonths3to4-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="iTotalMonths4to12" tabindex= -1
												value="{{Number(cciForm.iPettyMonths4to12-0)+
														Number(cciForm.iSeriousMonths4to12-0)+
														Number(cciForm.iHeinousMonths4to12-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="iTotalMonthsMoreThan1Year" tabindex= -1
												value="{{Number(cciForm.iPettyMonthsMoreThan1Year-0)
														+Number(cciForm.iSeriousMonthsMoreThan1Year-0)
														+Number(cciForm.iHeinousMonthsMoreThan1Year-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly id="iTotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.iPetty0to30Days-0)+
														Number(cciForm.iSerious0to30Days-0)+
														Number(cciForm.iHeinous0to30Days-0)+
														Number(cciForm.iPettyMonths1to2-0)+
														Number(cciForm.iSeriousMonths1to2-0)+
														Number(cciForm.iHeinousMonths1to2-0)+
														Number(cciForm.iPettyMonths2to3-0)+
														Number(cciForm.iSeriousMonths2to3-0)+
														Number(cciForm.iHeinousMonths2to3-0)+
														Number(cciForm.iPettyMonths3to4-0)+
														Number(cciForm.iSeriousMonths3to4-0)+
														Number(cciForm.iHeinousMonths3to4-0)+
														Number(cciForm.iPettyMonths4to12-0)+
														Number(cciForm.iSeriousMonths4to12-0)+
														Number(cciForm.iHeinousMonths4to12-0)+
														Number(cciForm.iPettyMonthsMoreThan1Year-0)+
														Number(cciForm.iSeriousMonthsMoreThan1Year-0)+
														Number(cciForm.iHeinousMonthsMoreThan1Year-0)}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>

							<!-- -----------------------End Of I Section--------------------------- -->
							
							
							<div class="b4sectionheading" id="caseJ"></div>
							<div class="grey-header headMarg">
								J. Children Residing in the CCI by duration</div>

							<div class="labelFont">
								<table class="table table-bordered table-margintop" id="tableJ">
									<thead>
										<tr>
											<th>Type of Offense</th>
											<th>0-30 days </th>
											<th>1-2 months </th>
											<th>2-3 months </th>
											<th>3-4 months </th>
											<th>4-12 months  </th>
											<th>More than 1 Year </th>
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
												id="j1FirstDay0to30Days" ng-model="cciForm.j1FirstDay0to30Days"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive1('j1FirstDay0to30Days','j3MovedOut0to30Days','j4Total0to30Days','(0-30 days)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1FirstDayMonths1to2" ng-model="cciForm.j1FirstDayMonths1to2"
												ng-disabled="cciForm.submitted"  ng-keyup="checkJNegetive1('j1FirstDayMonths1to2','j3MovedOutMonths1to2','j4TotalMonths1to2','(1-2 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1FirstDayMonths2to3" ng-model="cciForm.j1FirstDayMonths2to3"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive1('j1FirstDayMonths2to3','j3MovedOutMonths2to3','j4TotalMonths2to3','(2-3 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1FirstDayMonths3to4" ng-keyup="checkJNegetive1('j1FirstDayMonths3to4','j3MovedOutMonths3to4','j4TotalMonths3to4','(3-4 months)')"
												ng-model="cciForm.j1FirstDayMonths3to4"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1FirstDayMonths4to12" ng-keyup="checkJNegetive1('j1FirstDayMonths4to12','j3MovedOutMonths4to12','j4TotalMonths4to12','(4-12 months)')"
												ng-model="cciForm.j1FirstDayMonths4to12"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j1FirstDayMonthsMoreThan1Year"
												ng-model="cciForm.j1FirstDayMonthsMoreThan1Year"
												ng-disabled="cciForm.submitted"  ng-keyup="checkJNegetive1('j1FirstDayMonthsMoreThan1Year','j3MovedOutMonthsMoreThan1Year','j4TotalMonthsMoreThan1Year','(>1 year)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="j1Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.j1FirstDay0to30Days-0)+
														Number(cciForm.j1FirstDayMonths1to2-0)+
														Number(cciForm.j1FirstDayMonths2to3-0)+
														Number(cciForm.j1FirstDayMonths3to4-0)+
														Number(cciForm.j1FirstDayMonths4to12-0)+
														Number(cciForm.j1FirstDayMonthsMoreThan1Year-0)}}">
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
												id="j2NewCh0to30Days" ng-model="cciForm.j2NewCh0to30Days"
												ng-disabled="cciForm.submitted"  ng-keyup="checkJNegetive1('j2NewCh0to30Days','j3MovedOut0to30Days','j4Total0to30Days','(0-30 days)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												 
											<td colspan="5"><input type="number"  only-four-digits readonly 
												placeholder="Not Applicable"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
												></td>
												
											<td><input type="text" readonly id="j2Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.j2NewCh0to30Days-0)}}">
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
												id="j3MovedOut0to30Days" ng-model="cciForm.j3MovedOut0to30Days"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive('j3MovedOut0to30Days','j4Total0to30Days','(0-30 days)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3MovedOutMonths1to2" ng-model="cciForm.j3MovedOutMonths1to2"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive('j3MovedOutMonths1to2','j4TotalMonths1to2','(1-2 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3MovedOutMonths2to3" ng-model="cciForm.j3MovedOutMonths2to3"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive('j3MovedOutMonths2to3','j4TotalMonths2to3','(2-3 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3MovedOutMonths3to4"
												ng-model="cciForm.j3MovedOutMonths3to4"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive('j3MovedOutMonths3to4','j4TotalMonths3to4','(3-4 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3MovedOutMonths4to12"
												ng-model="cciForm.j3MovedOutMonths4to12"
												ng-disabled="cciForm.submitted" ng-keyup="checkJNegetive('j3MovedOutMonths4to12','j4TotalMonths4to12','(4-12 months)')"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="number" required only-four-digits
												id="j3MovedOutMonthsMoreThan1Year"  ng-keyup="checkJNegetive('j3MovedOutMonthsMoreThan1Year','j4TotalMonthsMoreThan1Year','( >1 year)')"
												ng-model="cciForm.j3MovedOutMonthsMoreThan1Year"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												></td>
												
											<td><input type="text" readonly id="j3Total" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle"
												value="{{Number(cciForm.j3MovedOut0to30Days-0)+
														Number(cciForm.j3MovedOutMonths1to2-0)+
														Number(cciForm.j3MovedOutMonths2to3-0)+
														Number(cciForm.j3MovedOutMonths3to4-0)+
														Number(cciForm.j3MovedOutMonths4to12-0)+
														Number(cciForm.j3MovedOutMonthsMoreThan1Year-0)}}">
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
												id="j4Total0to30Days"  tabindex= -1
												value="{{Number(cciForm.j1FirstDay0to30Days-0)+
														Number(cciForm.j2NewCh0to30Days-0)-
														Number(cciForm.j3MovedOut0to30Days-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												></td>
												
											<td><input type="text"   readonly
												id="j4TotalMonths1to2" tabindex= -1
												value="{{Number(cciForm.j1FirstDayMonths1to2-0)-Number(cciForm.j3MovedOutMonths1to2-0)}}"  
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="j4TotalMonths2to3" tabindex= -1
												value="{{Number(cciForm.j1FirstDayMonths2to3-0)-Number(cciForm.j3MovedOutMonths2to3-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont" 
												></td>
												
											<td><input type="text"  readonly
												id="j4TotalMonths3to4" tabindex= -1
												value="{{Number(cciForm.j1FirstDayMonths3to4-0)-Number(cciForm.j3MovedOutMonths3to4-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="j4TotalMonths4to12" tabindex= -1
												value="{{Number(cciForm.j1FirstDayMonths4to12-0)-Number(cciForm.j3MovedOutMonths4to12-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text"  readonly
												id="j4TotalMonthsMoreThan1Year" tabindex= -1
												value="{{Number(cciForm.j1FirstDayMonthsMoreThan1Year-0)-Number(cciForm.j3MovedOutMonthsMoreThan1Year-0)}}"
												ng-disabled="cciForm.submitted"
												class="form-control inputBackground tableinputWidth  readonlyStyle totalFont"
												></td>
												
											<td><input type="text" readonly 
												id="j4TotalNumberTotal" tabindex= -1
												class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
												value="{{Number(cciForm.j1FirstDay0to30Days-0)+
														Number(cciForm.j2NewCh0to30Days-0)-
														Number(cciForm.j3MovedOut0to30Days-0)+
														Number(cciForm.j1FirstDayMonths1to2-0)-
														Number(cciForm.j3MovedOutMonths1to2-0)+
														Number(cciForm.j1FirstDayMonths2to3-0)-
														Number(cciForm.j3MovedOutMonths2to3-0)+
														Number(cciForm.j1FirstDayMonths3to4-0)-
														Number(cciForm.j3MovedOutMonths3to4-0)+
														Number(cciForm.j1FirstDayMonths4to12-0)-
														Number(cciForm.j3MovedOutMonths4to12-0)+
														Number(cciForm.j1FirstDayMonthsMoreThan1Year-0)-
														Number(cciForm.j3MovedOutMonthsMoreThan1Year-0)}}">
											</td>
										</tr>

									</tbody>
								</table>
							</div>
							  
                              
							<!-- ----------------------End Of J Section------------------------------ -->
							
							
							
							<div class="b4sectionheading" id="caseK"></div>
							<div class="grey-header headMarg">
								K. Details of cases dealt with (In the Reporting Month)</div>

							<div class="form-group labelFont sectionMarginTop
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> K.1. No. of children with single
									parent </label>
								<div class="col-md-6 marginBottomTop">
									<input type="number" required only-four-digits id="k1"
										ng-model="cciForm.k1" onkeyup="checkK1()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										>
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.2. No. of children without parental
									care/without adult support </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k2"
										ng-model="cciForm.k2" onkeyup="checkK2()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K3. No. of children referred to
									Hospital/PHC/Clinics</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k3"
										ng-model="cciForm.k3" onkeyup="checkK3()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										>
								</div>
							</div>
							<div class="form-group labelFont
							borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.4. No. of children transferred to
									home within the state </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										id="k4"
										ng-model="cciForm.k4" onkeyup="checkK4()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										>
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.5. No. of children transferred to
									home outside the state</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits
										id="k5"
										ng-model="cciForm.k5" onkeyup="checkK5()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										>
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.6. No. of children transferred to
									Jail</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k6"
										ng-model="cciForm.k6" onkeyup="checkK6()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.7. No. of Case History Formats
									filled</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k7"
										ng-model="cciForm.k7"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.8. No. of Individual Care Plan (ICP)
									prepared</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k8"
										ng-model="cciForm.k8"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.9. No. of children referred for
									Psychiatric treatment</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k9"
										ng-model="cciForm.k9" onkeyup="checkK9()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.10. No. of children sent for After
									care</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k10"
										ng-model="cciForm.k10" onkeyup="checkK10()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.11. No. of first-time offender
									children</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k11"
										ng-model="cciForm.k11" onkeyup="checkK11n12()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.12. No. of repeat-offender children</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k12"
										ng-model="cciForm.k12" onkeyup="checkK11n12()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							
							
							
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.13. No. of entries on Track Child
									Portal</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k13"
										ng-model="cciForm.k13" onkeyup="checkK13()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.14. No. of Runaway/Missing children
									returned to the CCI in the reporting month </label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k14"
										ng-model="cciForm.k14"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										>
								</div>
							</div>

							<div class="form-group labelFont
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.15. No. of children sent for
									Sponsorship</label>
								<div class="col-md-6">
									<input type="number" required only-four-digits id="k15"
										ng-model="cciForm.k15" onkeyup="checkK15()"
										ng-disabled="cciForm.submitted"
										class="form-control inputBackground removeExponentialValueE"
										 >
								</div>
							</div>
							<div class="form-group labelFont ">

								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.16.a. Was the meeting of Children's
									Committee held ? </label>
								<div class="col-md-6">
									<select class="form-control inputBackground" required
										id="k16aMeetingChildrenCommittee" ng-disabled="cciForm.submitted" 
										ng-model="cciForm.k16aMeetingChildrenCommittee"
										ng-change="resetDate('meetingDatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div class="form-group labelFont "
								ng-show="cciForm.k16aMeetingChildrenCommittee == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.16.b. Date of Meeting</label>
								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="meetingDatepicker" 
										ng-model="cciForm.k16CCDate"
										ng-disabled="cciForm.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="meetingDatepicker1" 
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont ">

								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.17.a. Was the Home Management
									Committee meeting held ? </label>
								<div class="col-md-6">
									<select class="form-control inputBackground bxalgn" required
										id="k17aMeetingHomeManagementCommittee" ng-disabled="cciForm.submitted"
										ng-model="cciForm.k17aMeetingHomeManagementCommittee"
										ng-change="resetDate('homeManagementDatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div class="form-group labelFont"
								ng-show="cciForm.k17aMeetingHomeManagementCommittee == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.17.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="homeManagementDatepicker"
										ng-model="cciForm.k17HMDate"
										ng-disabled="cciForm.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="homeManagementDatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div><div class="borderBottom"></div>
							<div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> K.18.a. Any other details ? </label>
								<div class="col-md-6">
									<select class="form-control inputBackground bxalgn" required
										ng-disabled="cciForm.submitted" id="k18aAnyOthersDetails"
										ng-model="cciForm.k18aAnyOthersDetails"
										ng-change="resetDate('otherMeetingDatepicker')">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>
							<div class="form-group labelFont "
								ng-show="cciForm.k18aAnyOthersDetails == 'true'">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput">K.18.b. Date of Meeting</label>

								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="otherMeetingDatepicker"
										ng-model="cciForm.k18OtherDetailsDate"
										ng-disabled="cciForm.submitted" readonly
										class="form-control inputBackground"><i
										class="fa fa-calendar fa-5x" id="otherMeetingDatepicker1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div>
                               <div class="borderBottom"></div>
                               
                               
							
							<div class="b4sectionheading" id="caseL"></div>
							<div class="grey-header headMarg">
								L. Training on JJ System</div>

							<div class="form-group labelFont sectionMarginTop 
								borderBottom">
								<label class="col-md-6 control-label labelLeftAlign marginBottomTop"
									for="textinput"> L.1. Was the training held on JJ
									system ? </label>
								<div class="col-md-6 marginBottomTop">
									<select required
									ng-change=resetToZeroaccdccioh(cciForm.l1WasTrainingHeld)
									 class="form-control inputBackground"
										ng-disabled="cciForm.submitted" id="l1WasTrainingHeld"
										ng-model="cciForm.l1WasTrainingHeld">
										<option value="" disabled selected>Select</option>
										<option value="true">Yes</option>
										<option value="false">No</option>
									</select>
								</div>
							</div>

							<div ng-show="cciForm.l1WasTrainingHeld == 'true'">

								<div class="form-group labelFont">
									<label class="col-md-6 control-label labelLeftAlign"
										for="textinput"> L.1.a. Number of Training held</label>
									<div class="col-md-6">
										<input type="number" 
											id="l1aNoOfTraining" limit-to="2"											
											ng-blur="validateNoOfTraining(cciForm.l1aNoOfTraining)"
											ng-model="cciForm.l1aNoOfTraining" id="l1aNoOfTraining"
											ng-disabled="cciForm.submitted"
											class="form-control inputBackground removeExponentialValueE">
									</div>
								</div>

								<div class="panel-group" id="accordion" role="tablist"
									aria-multiselectable="true">
									<div class="panel panel-default"
										ng-repeat="CciTrainingDetails in cciTrainingDetailsRepetitionArray">
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
														<input type="number" 
															max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
															id="30days{{$index}}" limit-to="2" only-four-digits
															ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].durationTraining"
															class="form-control inputBackgroundgeneral removeExponentialValueE">
													</div>
												</div>
												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c. Training From </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingFromDatepicker{{$index}}"
															ng-model="cciTrainingDetailsRepetitionArray[$index].trainingFromDate"
															ng-disabled="cciForm.submitted" readonly
															ng-click="openFromDatePicker($index)"
															class="form-control accordionFromDatepicker  inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>
												</div>
												<div class="form-group labelFont">

													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.c.i. Training To </label>
													<div class="col-md-6" style="display: inline-flex;">
														<input type="text" id="trainingToDatepicker{{$index}}"
															ng-model="cciTrainingDetailsRepetitionArray[$index].trainingToDate"
															ng-disabled="cciForm.submitted" readonly
															ng-click="openToDatePicker($index)"
															class="form-control accordionFromDatepicker  inputBackgroundgeneral"><i
															class="fa fa-calendar fa-5x"  id="trainingToDatepicker1{{$index}}"
															style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
													</div>

												</div>

												<div class="form-group labelFont">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.d. Training organised by </label>
													<div class="col-md-6">
														<select
															ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
															ng-model="cciTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
															ng-disabled="cciForm.submitted"
															ng-value="item.typeDetailsId"
															class="form-control inputBackgroundgeneral"
															ng-change="resetAccordionOthers(CciTrainingDetails)">
															<option value="" disabled selected>Select</option>
														</select>
													</div>
												</div>
												<div class="form-group labelFont"
													ng-show="cciTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.d.i. Please specify,If Other
													</label>
													<div class="col-md-6">
														<input type="text" address-validation
															ng-model="cciTrainingDetailsRepetitionArray[$index].traingOrganisedbyOthers"
															ng-disabled="cciForm.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
												<div class="form-group labelFont">
													<label class="col-md-6 col-sm-6  control-label labelLeftAlign"
														for="textinput"> L.1.e.&nbsp;Topic of training </label>
														
														 <div class="col-md-6 topicOftrainingListJJb">
  																 
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="checkboxstyle">
																		<input id="JJActRule{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totJjAct"> <label
																			for="JJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																 <li>
																	<div class="checkboxstyle">
																		<input id="LawsandICPS{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totChildRelatedLaws"> <label
																			for="LawsandICPS"> Child related Laws and ICPS </label>
																	</div>
																</li>
																 <li>
																	<div class="checkboxstyle">
																		<input id="POCSOAct{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totPosco"> <label
																			for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																<li>
																	<div class="checkboxstyle">
																		<input id="CPMISTrackchildCLTSTrackchild{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totTrackChild"> <label
																			for="CPMISTrackchildCLTSTrackchild"> Track child</label>
																	</div>
																</li>
																 <li>
																	<div class="checkboxstyle">
																		<input id="Combinedtraining{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
																			for="Combinedtraining"> Combined training </label>
																	</div>
																</li>
																<li>
																	<div class="checkboxstyle">
																		<input id="CPMISTrackchildCLTS{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totClts"> <label
																			for="CPMISTrackchildCLTS"> CLTS </label>
																	</div>
																</li>
																<li>
																	<div class="checkboxstyle">
																		<input id="CPMISTrackchildCPMIS{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totCpmis"> <label
																			for="CPMISTrackchildCPMIS"> CPMIS </label>
																	</div>
																</li>
																 <li>
																	<div class="checkboxstyle">
																		<input id="Others{{$index}}" type="checkbox" ng-disabled="cciForm.submitted"
																		ng-click="clearTopicOfTrainingOthers(cciTrainingDetailsRepetitionArray[$index])"
																		ng-model="cciTrainingDetailsRepetitionArray[$index].totOthers"> <label
																			for="Others"> Others </label>
																	</div>
																</li>
																	</ul>
                                                                 </div>
														
												</div>

												<div class="form-group labelFonts "
													ng-show="cciTrainingDetailsRepetitionArray[$index].totOthers">
													<label class="col-md-6 control-label labelLeftAlign"
														for="textinput"> L.1.e.i. Please specify,If Other
													</label>
													<div class="col-md-6">
														<input type="text" address-validation
															ng-model="cciTrainingDetailsRepetitionArray[$index].totOthersSpecify"
															ng-disabled="cciForm.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
												<div class="form-group labelFont">
												<div class="col-md-12">
													<label class="col-md-6 control-label labelLeftAlign paddingLeftLable" 
														for="textinput"><b>L.1.f.&nbsp;Training attended by</b> </label>
														
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrainedCCI"
														for="textinput"><b>Number of persons trained</b></label></div>
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">Superintendent </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabSuperintendent"
															ng-disabled="cwcForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Probation officer/Case Worker </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabProbationOfficerCaseWorker"
															ng-disabled="cwcForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Counsellor </label>
													<div class="col-md-6 marginBottomTop"> 
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabCounsellor"
															ng-disabled="cwcForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> House Father/Mother</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabHouseFatherMother"
															ng-disabled="cwcForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Store Keeper Cum Accountant</label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabStoreKeeperCumAccountant"
															ng-disabled="cwcForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Paramedical Staff </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabParamedicalStaff"
															ng-disabled="cwcForm.submitted"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Others </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number"  only-four-digits ng-disabled="cciForm.submitted"
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabOthers"
															ng-disabled="cwcForm.submitted" ng-keyup="resetTABOthers($index);"
															class="form-control inputBackground removeExponentialValueE">
													</div>
												</div>
												
												<div ng-show="cciTrainingDetailsRepetitionArray[$index].tabOthers>0" 
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">If training attended by other, Please specify</label>
													<div class="col-md-6 marginBottomTop">
														<input type="text" address-validation
															ng-model="cciTrainingDetailsRepetitionArray[$index].tabOthersSpecify"
															ng-disabled="cciForm.submitted"
															class="form-control inputBackgroundgeneral">
													</div>
												</div>
													</div>	
												<!-- ---------------------------------- -->

											</div>
										</div>
									</div>

								</div>
								<!-- panel-group -->


								<div class="col-md-12 text-left">
									<div class="addingnewdetails-container">
										<div id="familydetailserror" class="error-style"></div>
										<button type="button" class="addingnewdetails" ng-disabled="cciForm.submitted"
											ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
										<button type="button" class="addingnewdetails" ng-disabled="cciForm.submitted"
											ng-show="cciTrainingDetailsRepetitionArray.length > 1"
											ng-click="deleteConfirm()">-</button>
										<div id="maximumLimit10Error" class="error-style"></div>
									</div>
								</div>
							</div>
<br> <br> <br> <br>&nbsp;<br> <br>
							<!-- ------------ -->

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

	<!-- 	</div> -->

	<!-- ------------------Confirmation Modal-------------------------- -->

	<div class="modal fade" id="confirmationModalForCCCI"
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
	<div class="modal fade autoSaveModal" id="successModalForAutoSaveSH"
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
	
	<div class="modal fade" id="confirmationModalForCCISUBMIT"
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
							ng-click="saveOH(cciForm, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
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
	<!-- Modal for temporarily -->
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


	<!-- --------------------------------------------------------- -->
	
	<script src="resources/js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/angular.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		var app = angular.module('cciApp', ['angular-md5']);
		var cpmisApp = angular.module('cciApp');
	</script>
	<script src="resources/js/controllers/cciSpecialHome.js"></script>
	<script src="resources/js/jsFunctions/cciOhJsFunctions.js"></script>
	<script src="resources/services/commonService.js"></script>
    <script src="resources/js/angular-md5.js"></script>
    <jsp:include page="fragments/footer.jsp" />

	<script type='text/javascript'>
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
						scrollTop : 58
					}, 0);
				} else if ($('#casec').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 103
					}, 0);
				} else if ($('#cased').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 143
					}, 0);
				} else if ($('#casee').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 187
					}, 0);
				}else if ($('#casef').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 228
					}, 0);
				}else if ($('#caseg').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 286
					}, 0);
				}else if ($('#caseh').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 327
					}, 0);
				}else if ($('#casei').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 385
					}, 0);
				}else if ($('#casej').hasClass('active')) {
					$('#sectionindctr').animate({
						scrollTop : 419
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
      $(document).ready(function () {
         $("input[type='number']").bind('copy paste', function (e) {
            e.preventDefault();
         }); });
      </script>
	<script type="text/javascript">
		{
			window.addEventListener("hashchange", function() {
				scrollBy(0, 0);
			});
		}
	</script>

	<script type="text/javascript">
	 $('#cciFormDetails').on('focus', 'input[type=number]', function (e) {
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


	<!-- ---------------------------Fixed part---------------------------------- -->
</body>
</html>