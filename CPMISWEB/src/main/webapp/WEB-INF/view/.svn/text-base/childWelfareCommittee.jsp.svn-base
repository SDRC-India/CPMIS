<!--
 @author Swarna (swarnaprava@sdrc.co.in)
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
<title>Child Welfare Committee</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
     href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans"
     rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">  

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

</style>
     
</head>
<body ng-app="cpmisApp" ng-controller="CWC_Controller" id="CWC_Controller" class="ng-cloak"
     data-spy="scroll" data-target="#myScrollspy" data-offset="20">
     <!-- spinner -->
     <div id="spinner" class="loader" style="display: none;"></div>
     <div id="loader-mask" class="loader" style="display: none;"></div>
     <!-- /spinner -->
     <jsp:include page="fragments/header.jsp" />
     <div class="b4sectionheading" id="gInfo"></div>
     <!--      <div class="container"> -->
     <div class="row marginspc">
     
     <!-- section for sticky nav menu -->
      <form class="form-horizontal" name="cwcFormDetails" data-toggle="validator" role="form"
                              id="cwcFormDetails">
          <nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
               <h5 class="cwcHeading">Child Welfare Committee<br> Monthly Report</h5>
               
               <ul class="nav nav-pills nav-stacked sectionList flexcroll" id="sectionindctr">
                    <li id="gi" class="active sectionUlist active1"><a
                         href="#gInfo"><span class="leftmargin"></span>General
                              Information </a></li>
                    <li id="casea" class="sectionUlist"><a href="#caseA">A.
                              Case on the first day of the Reporting Month</a></li>
                    <li id="caseb" class="sectionUlist"><a href="#caseB">B. New
                              Cases produced before the CWC in the Reporting Month </a></li>
                    <li id="casec" class="sectionUlist"><a href="#caseC">C.
                              Total No. of cases in the reporting month</a></li>

                    <li id="cased" class="sectionUlist"><a href="#caseD">D.
                              Institutions/Persons where Children referred (in the Reporting
                              month)</a></li>

                    <li id="casee" class="sectionUlist"><a href="#caseE">E.
                              Disposal of cases (Old and New) in the reporting month</a></li>

                    <li id="casef" class="sectionUlist"><a href="#caseF">F.
                              Cases pending on the last day of the reporting month by duration of pendency</a></li>

                    <li id="caseg" class="sectionUlist"><a href="#caseG">G.
                              Pendancy of cases before the CWC for declaring a child free for adoption</a></li>

                    <li id="caseh" class="sectionUlist"><a href="#caseH">H.
                              Functions and Types of Orders by CWCs </a></li>
                              
                    <li id="casei" class="sectionUlist"><a href="#caseI">I.
                              Training on JJ System </a></li>
               </ul>

               <!--           <div class="row">
               <div class="col-md-6 savebtn">
                    <img class="saveSvg"
                         src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                         height="18" />
                    <a href="saveCWC"><h5 class="borderright">SAVE</h5></a>
               </div> -->
               <div ng-hide="cwcForm.submitted" id="saveSubmitId">
                   <a href=""> <div class="col-md-6 savebtn locline" ng-click="checksave()">
                         <img class="saveSvg" 
                              ng-disabled="cwcForm.submitted"
                              src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                              height="18" /> <h5 class="borderright1">SAVE</h5>
                    </div></a>
                    <button type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit"  ng-click="cwcFormDetails.$invalid ? '' : checkSubmit()">
                         <img class="saveSvg"
                              ng-disabled="cwcForm.submitted"
                              src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
                              height="18" /><h5 class="borderright1 sbmtbtn">SUBMIT</h5>
                    </button>
               </div>
               <div ng-show="cwcForm.submitted">
				<div class="col-md-12 savebtn"></div>
			   </div>
          </nav>
          
     <!-- end sticky nav menu -->
     
     <!-- start data entry for cwc  --> 
     
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
                                        Child Welfare Committee (CWC) Monthly Report for Month of <b
                                             style="color: #41c484">&nbsp;{{cwcForm.timeperiod.timePeriod}}</b>
                                   </h4>

                                   <div class="form-group labelFont">

                                        <div class="col-md-6">
                                             <input type="hidden" ng-model="cwcForm.userId"
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
                                             <input type="text" ng-model="cwcForm.nameOfAuthorizedPerson" ondragstart="return false;"
                                                  fifty-characters-validation ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>

                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Designation </label>
                                        <div class="col-md-6">
                                             <input type="text" id="designation" required
                                                  ng-disabled="cwcForm.submitted" ng-model="cwcForm.designation"
                                                  address-validation
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
                                             <input type="text" readonly  tabindex= -1
                                                  class="form-control inputBackgroundgeneral readonlyStyle"
                                                  value="<%=ft.format(dNow)%>">

                                        </div>
                                   </div>

                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of the District</label>
                                        <div class="col-md-6">
                                             <input type="text" id="district"
                                                  disabled ng-model="selectedDistrict.areaName"
                                                   class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>
                                   
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> No.of Male Members</label>
                                        <div class="col-md-6">
                                             <input type="number" ng-disabled="cwcForm.submitted" ng-keyup="validateMembers('noOfMale')"
                                              id="noOfMale" ng-model="cwcForm.noOfMale" limit-to="1"
                                                   required class="form-control inputBackgroundgeneral removeExponentialValueE">
                                        </div>
                                   </div>
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> No. of Female Members</label>
                                        <div class="col-md-6">
                                             <input type="number" id="noOfFemale" ng-keyup="validateMembers('noOfFemale')"
                                                  ng-model="cwcForm.noOfFemale" limit-to="1"
                                                   ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackgroundgeneral removeExponentialValueE" >
                                        </div>
                                        
                                   </div>


                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Total no. of Members</label>
                                        <div class="col-md-6">
                                             <input type="text" disabled
                                                  id="totalMembers" value="{{(cwcForm.noOfMale)+ (cwcForm.noOfFemale)}}"
                                                  class="form-control inputBackgroundgeneral readonlyStyle">
                                        </div>
                                   </div>
                                   

                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Place of CWC Sitting (Address)</label>
                                        <div class="col-md-6" rows="6" cols="80">
                                             <textarea type="text" id="placeOfSitting" style="resize:none;"
                                                  ng-disabled="cwcForm.submitted" address-validation
                                                  ng-model="cwcForm.placeOfSitting"
                                                   required class="form-control inputBackgroundgeneral">
                                        </textarea>
                                        </div>
                                   </div>
                    <!-- end general information -->   
                    
                    <!-- Start A section  -->     
                                   
                                   <div class="b4sectionheading" id="caseA"></div>
                                   <div class="grey-header headMarg">A. Cases on the first day
                                        of the Reporting Month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
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
                                                                 <label class="control-label" for="textinput">A.1.
                                                                      Children residing in Child Care Institutions (CCIs)
                                                                      Excluding SAAs</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a1Boys0to6"
                                                            ng-model="cwcForm.a1Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Boys7to11"
                                                            ng-model="cwcForm.a1Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Boys12to15"
                                                            ng-model="cwcForm.a1Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Boys16to18"
                                                            ng-model="cwcForm.a1Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1BoysGreaterThan18"
                                                            ng-model="cwcForm.a1BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a1BoysTotal" 
                                                            value="{{Number(cwcForm.a1Boys0to6-0)+Number(
                                                                        cwcForm.a1Boys7to11-0)+Number(
                                                                        cwcForm.a1Boys12to15-0)+Number(
                                                                        cwcForm.a1Boys16to18-0)+Number(
                                                                        cwcForm.a1BoysGreaterThan18-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Girls0to6"
                                                            ng-model="cwcForm.a1Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Girls7to11"
                                                            ng-model="cwcForm.a1Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Girls12to15"
                                                            ng-model="cwcForm.a1Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1Girls16to18"
                                                            ng-model="cwcForm.a1Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a1GirlsGreaterThan18"
                                                            ng-model="cwcForm.a1GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a1GirlsTotal" 
                                                             value="{{Number(cwcForm.a1Girls0to6-0)+Number(
                                                                        cwcForm.a1Girls7to11-0)+Number(
                                                                        cwcForm.a1Girls12to15-0)+Number(
                                                                        cwcForm.a1Girls16to18-0)+Number(
                                                                        cwcForm.a1GirlsGreaterThan18-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a1GrandTotal"
                                                            disabled
                                                             value="{{Number(cwcForm.a1Boys0to6-0)+Number(
                                                                        cwcForm.a1Boys7to11-0)+Number(
                                                                        cwcForm.a1Boys12to15-0)+Number(
                                                                        cwcForm.a1Boys16to18-0)+Number(
                                                                        cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a1Girls0to6-0)+Number(
                                                                        cwcForm.a1Girls7to11-0)+Number(
                                                                        cwcForm.a1Girls12to15-0)+Number(
                                                                        cwcForm.a1Girls16to18-0)+Number(
                                                                        cwcForm.a1GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.
                                                                      Children Residing With Fit Persons</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a2Boys0to6"
                                                            ng-model="cwcForm.a2Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Boys7to11"
                                                            ng-model="cwcForm.a2Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Boys12to15"
                                                            ng-model="cwcForm.a2Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Boys16to18"
                                                            ng-model="cwcForm.a2Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2BoysGreaterThan18"
                                                            ng-model="cwcForm.a2BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a2BoysTotal"
                                                             value="{{Number(cwcForm.a2Boys0to6-0)+Number(
                                                                        cwcForm.a2Boys7to11-0)+Number(
                                                                        cwcForm.a2Boys12to15-0)+Number(
                                                                        cwcForm.a2Boys16to18-0)+Number(
                                                                        cwcForm.a2BoysGreaterThan18-0)}}" disabled
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Girls0to6"
                                                            ng-model="cwcForm.a2Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Girls7to11"
                                                            ng-model="cwcForm.a2Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Girls12to15"
                                                            ng-model="cwcForm.a2Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2Girls16to18"
                                                            ng-model="cwcForm.a2Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a2GirlsGreaterThan18"
                                                            ng-model="cwcForm.a2GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a2GirlsTotal"
                                                             value="{{Number(cwcForm.a2Girls0to6-0)+Number(
                                                                        cwcForm.a2Girls7to11-0)+Number(
                                                                        cwcForm.a2Girls12to15-0)+Number(
                                                                        cwcForm.a2Girls16to18-0)+Number(
                                                                        cwcForm.a2GirlsGreaterThan18-0)}}" disabled
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="a2GrandTotal"
                                                            disabled 
                                                             value="{{Number(cwcForm.a2Boys0to6-0)+Number(
                                                                        cwcForm.a2Boys7to11-0)+Number(
                                                                        cwcForm.a2Boys12to15-0)+Number(
                                                                        cwcForm.a2Boys16to18-0)+Number(
                                                                        cwcForm.a2BoysGreaterThan18-0)+Number(cwcForm.a2Girls0to6-0)+Number(
                                                                        cwcForm.a2Girls7to11-0)+Number(
                                                                        cwcForm.a2Girls12to15-0)+Number(
                                                                        cwcForm.a2Girls16to18-0)+Number(
                                                                        cwcForm.a2GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.3.
                                                                      Children residing in Specialized Adoption Agencies (SAA)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a3Boys0to6"
                                                            ng-model="cwcForm.a3Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Boys7to11"
                                                            ng-model="cwcForm.a3Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Boys12to15"
                                                            ng-model="cwcForm.a3Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Boys16to18"
                                                            ng-model="cwcForm.a3Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3BoysGreaterThan18"
                                                            ng-model="cwcForm.a3BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a3BoysTotal" disabled 
                                                             value="{{Number(cwcForm.a3Boys0to6-0)+Number(
                                                                        cwcForm.a3Boys7to11-0)+Number(
                                                                        cwcForm.a3Boys12to15-0)+Number(
                                                                        cwcForm.a3Boys16to18-0)+Number(
                                                                        cwcForm.a3BoysGreaterThan18-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Girls0to6"
                                                            ng-model="cwcForm.a3Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Girls7to11"
                                                            ng-model="cwcForm.a3Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Girls12to15"
                                                            ng-model="cwcForm.a3Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3Girls16to18"
                                                            ng-model="cwcForm.a3Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number" id="a3GirlsGreaterThan18"
                                                            ng-model="cwcForm.a3GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a3GirlsTotal" disabled
                                                             value="{{Number(cwcForm.a3Girls0to6-0)+Number(
                                                                        cwcForm.a3Girls7to11-0)+Number(
                                                                        cwcForm.a3Girls12to15-0)+Number(
                                                                        cwcForm.a3Girls16to18-0)+Number(
                                                                        cwcForm.a3GirlsGreaterThan18-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a3GrandTotal"
                                                             value="{{Number(cwcForm.a3Boys0to6-0)+Number(
                                                                        cwcForm.a3Boys7to11-0)+Number(
                                                                        cwcForm.a3Boys12to15-0)+Number(
                                                                        cwcForm.a3Boys16to18-0)+Number(
                                                                        cwcForm.a3BoysGreaterThan18-0)+Number(cwcForm.a3Girls0to6-0)+Number(
                                                                        cwcForm.a3Girls7to11-0)+Number(
                                                                        cwcForm.a3Girls12to15-0)+Number(
                                                                        cwcForm.a3Girls16to18-0)+Number(
                                                                        cwcForm.a3GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.4.
                                                                      Children Residing in Other Institutions</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a4Boys0to6"
                                                            ng-model="cwcForm.a4Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Boys7to11"
                                                            ng-model="cwcForm.a4Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Boys12to15"
                                                            ng-model="cwcForm.a4Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Boys16to18"
                                                            ng-model="cwcForm.a4Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4BoysGreaterThan18"
                                                            ng-model="cwcForm.a4BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a4BoysTotal" disabled
                                                             value="{{Number(cwcForm.a4Boys0to6-0)+Number(
                                                                        cwcForm.a4Boys7to11-0)+Number(
                                                                        cwcForm.a4Boys12to15-0)+Number(
                                                                        cwcForm.a4Boys16to18-0)+Number(
                                                                        cwcForm.a4BoysGreaterThan18-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Girls0to6"
                                                            ng-model="cwcForm.a4Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Girls7to11"
                                                            ng-model="cwcForm.a4Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Girls12to15"
                                                            ng-model="cwcForm.a4Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4Girls16to18"
                                                            ng-model="cwcForm.a4Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a4GirlsGreaterThan18"
                                                            ng-model="cwcForm.a4GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a4GirlsTotal" disabled
                                                             disabled  value="{{Number(cwcForm.a4Girls0to6-0)+Number(
                                                                                                                cwcForm.a4Girls7to11-0)+Number(
                                                                                                                cwcForm.a4Girls12to15-0)+Number(
                                                                                                                cwcForm.a4Girls16to18-0)+Number(
                                                                                                                cwcForm.a4GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a4GrandTotal" 
                                                             value="{{Number(cwcForm.a4Boys0to6-0)+Number(
                                                                        cwcForm.a4Boys7to11-0)+Number(
                                                                        cwcForm.a4Boys12to15-0)+Number(
                                                                        cwcForm.a4Boys16to18-0)+Number(
                                                                        cwcForm.a4BoysGreaterThan18-0)+Number(cwcForm.a4Girls0to6-0)+Number(
                                                                        cwcForm.a4Girls7to11-0)+Number(
                                                                        cwcForm.a4Girls12to15-0)+Number(
                                                                        cwcForm.a4Girls16to18-0)+Number(
                                                                        cwcForm.a4GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class=" textAlign">
                                                                 <label class="control-label" for="textinput">A.5.
                                                                      Children Residing in Alternative Care (Foster care, Sponsorship and After care)</label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a5Boys0to6"
                                                            ng-model="cwcForm.a5Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Boys7to11"
                                                            ng-model="cwcForm.a5Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Boys12to15"
                                                            ng-model="cwcForm.a5Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Boys16to18"
                                                            ng-model="cwcForm.a5Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5BoysGreaterThan18"
                                                            ng-model="cwcForm.a5BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a5BoysTotal" disabled
                                                             value="{{Number(cwcForm.a5Boys0to6-0)+Number(
                                                                        cwcForm.a5Boys7to11-0)+Number(
                                                                        cwcForm.a5Boys12to15-0)+Number(
                                                                        cwcForm.a5Boys16to18-0)+Number(
                                                                        cwcForm.a5BoysGreaterThan18-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Girls0to6"
                                                            ng-model="cwcForm.a5Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Girls7to11"
                                                            ng-model="cwcForm.a5Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Girls12to15"
                                                            ng-model="cwcForm.a5Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5Girls16to18"
                                                            ng-model="cwcForm.a5Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a5GirlsGreaterThan18"
                                                            ng-model="cwcForm.a5GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a5GirlsTotal" disabled
                                                             value="{{Number(cwcForm.a5Girls0to6-0)+Number(
                                                                   cwcForm.a5Girls7to11-0)+Number(
                                                                   cwcForm.a5Girls12to15-0)+Number(
                                                                   cwcForm.a5Girls16to18-0)+Number(
                                                                   cwcForm.a5GirlsGreaterThan18-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a5GrandTotal"
                                                            
                                                             value="{{Number(cwcForm.a5Boys0to6-0)+Number(
                                                                        cwcForm.a5Boys7to11-0)+Number(
                                                                        cwcForm.a5Boys12to15-0)+Number(
                                                                        cwcForm.a5Boys16to18-0)+Number(
                                                                        cwcForm.a5BoysGreaterThan18-0)+Number(cwcForm.a5Girls0to6-0)+Number(
                                                                        cwcForm.a5Girls7to11-0)+Number(
                                                                        cwcForm.a5Girls12to15-0)+Number(
                                                                        cwcForm.a5Girls16to18-0)+Number(
                                                                        cwcForm.a5GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class=" textAlign">
                                                                 <label class="control-label" for="textinput">A.6.
                                                                      Children residing with parents/ guardians </label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a6Boys0to6"
                                                            ng-model="cwcForm.a6Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Boys7to11"
                                                            ng-model="cwcForm.a6Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Boys12to15"
                                                            ng-model="cwcForm.a6Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Boys16to18"
                                                            ng-model="cwcForm.a6Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6BoysGreaterThan18"
                                                            ng-model="cwcForm.a6BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a6BoysTotal" disabled
                                                             disabled  value="{{Number(cwcForm.a6Boys0to6-0)+Number(
                                                                                                                cwcForm.a6Boys7to11-0)+Number(
                                                                                                                cwcForm.a6Boys12to15-0)+Number(
                                                                                                                cwcForm.a6Boys16to18-0)+Number(
                                                                                                                cwcForm.a6BoysGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Girls0to6"
                                                            ng-model="cwcForm.a6Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Girls7to11"
                                                            ng-model="cwcForm.a6Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Girls12to15"
                                                            ng-model="cwcForm.a6Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6Girls16to18"
                                                            ng-model="cwcForm.a6Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a6GirlsGreaterThan18"
                                                            ng-model="cwcForm.a6GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a6GirlsTotal" disabled
                                                             disabled  value="{{Number(cwcForm.a6Girls0to6-0)+Number(
                                                                                                                cwcForm.a6Girls7to11-0)+Number(
                                                                                                                cwcForm.a6Girls12to15-0)+Number(
                                                                                                                cwcForm.a6Girls16to18-0)+Number(
                                                                                                                cwcForm.a6GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a6GrandTotal" 
                                                             value="{{Number(cwcForm.a6Boys0to6-0)+Number(
                                                                        cwcForm.a6Boys7to11-0)+Number(
                                                                        cwcForm.a6Boys12to15-0)+Number(
                                                                        cwcForm.a6Boys16to18-0)+Number(
                                                                        cwcForm.a6BoysGreaterThan18-0)+Number(cwcForm.a6Girls0to6-0)+Number(
                                                                        cwcForm.a6Girls7to11-0)+Number(
                                                                        cwcForm.a6Girls12to15-0)+Number(
                                                                        cwcForm.a6Girls16to18-0)+Number(
                                                                        cwcForm.a6GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.7.
                                                                      Other Children</label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="a7Boys0to6"
                                                            ng-model="cwcForm.a7Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Boys7to11"
                                                            ng-model="cwcForm.a7Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Boys12to15"
                                                            ng-model="cwcForm.a7Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Boys16to18"
                                                            ng-model="cwcForm.a7Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7BoysGreaterThan18"
                                                            ng-model="cwcForm.a7BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a7BoysTotal" disabled
                                                             value="{{Number(cwcForm.a7Boys0to6-0)+Number(
                                                                        cwcForm.a7Boys7to11-0)+Number(
                                                                        cwcForm.a7Boys12to15-0)+Number(
                                                                        cwcForm.a7Boys16to18-0)+Number(
                                                                        cwcForm.a7BoysGreaterThan18-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Girls0to6"
                                                            ng-model="cwcForm.a7Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Girls7to11"
                                                            ng-model="cwcForm.a7Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Girls12to15"
                                                            ng-model="cwcForm.a7Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7Girls16to18"
                                                            ng-model="cwcForm.a7Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="a7GirlsGreaterThan18"
                                                            ng-model="cwcForm.a7GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="text" id="a7GirlsTotal" disabled
                                                             disabled
                                                              value="{{Number(cwcForm.a7Girls0to6-0)+Number(
                                                                        cwcForm.a7Girls7to11-0)+Number(
                                                                        cwcForm.a7Girls12to15-0)+Number(
                                                                        cwcForm.a7Girls16to18-0)+Number(
                                                                        cwcForm.a7GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="a7GrandTotal" disabled
                                                             value="{{Number(cwcForm.a7Boys0to6-0)+Number(
                                                                        cwcForm.a7Boys7to11-0)+Number(
                                                                        cwcForm.a7Boys12to15-0)+Number(
                                                                        cwcForm.a7Boys16to18-0)+Number(
                                                                        cwcForm.a7BoysGreaterThan18-0)+Number(cwcForm.a7Girls0to6-0)+Number(
                                                                        cwcForm.a7Girls7to11-0)+Number(
                                                                        cwcForm.a7Girls12to15-0)+Number(
                                                                        cwcForm.a7Girls16to18-0)+Number(
                                                                        cwcForm.a7GirlsGreaterThan18-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td class="tabletdWidthfourCol borderRight">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">A.8.
                                                                      Total Number of Children on the first day of the reporting month</label>

                                                            </div>
                                                       </td>
                                                       <!--      ng-model="cwcForm.aGirls"
                                                  cwcForm.aGirls
                                                  aTotal -->
                                                       <td><input type="text" name="aValue" id="a8Boys0to6" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Boys0to6-0)+Number(cwcForm.a2Boys0to6-0)+Number(cwcForm.a3Boys0to6-0)+Number(
                                                                      cwcForm.a4Boys0to6-0)+Number(cwcForm.a5Boys0to6-0)+Number(cwcForm.a6Boys0to6-0)+Number(
                                                                      cwcForm.a7Boys0to6-0)}}">
                                                       </td>
                                                     <td><input type="text" name="aValue" id="a8Boys7to11" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Boys7to11-0)+Number(cwcForm.a2Boys7to11-0)+Number(cwcForm.a3Boys7to11-0)+Number(
                                                                      cwcForm.a4Boys7to11-0)+Number(cwcForm.a5Boys7to11-0)+Number(cwcForm.a6Boys7to11-0)+Number(
                                                                      cwcForm.a7Boys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8Boys12to15" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Boys12to15-0)+Number(cwcForm.a2Boys12to15-0)+Number(cwcForm.a3Boys12to15-0)+Number(
                                                            cwcForm.a4Boys12to15-0)+Number(cwcForm.a5Boys12to15-0)+Number(cwcForm.a6Boys12to15-0)+Number(cwcForm.a7Boys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8Boys16to18" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Boys16to18-0)+Number(cwcForm.a2Boys16to18-0)+Number(cwcForm.a3Boys16to18-0)+Number(
                                                            cwcForm.a4Boys16to18-0)+Number(cwcForm.a5Boys16to18-0)+Number(cwcForm.a6Boys16to18-0)+Number(cwcForm.a7Boys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8BoysGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a2BoysGreaterThan18-0)+Number(cwcForm.a3BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a4BoysGreaterThan18-0)+Number(cwcForm.a5BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a6BoysGreaterThan18-0)+Number(cwcForm.a7BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8BoysTotal" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Boys0to6-0)+Number(cwcForm.a2Boys0to6-0)+Number(cwcForm.a3Boys0to6-0)+Number(cwcForm.a4Boys0to6-0)+Number(
                                                            cwcForm.a5Boys0to6-0)+Number(cwcForm.a6Boys0to6-0)+Number(cwcForm.a7Boys0to6-0)+Number(cwcForm.a1Boys7to11-0)+Number(
                                                            cwcForm.a2Boys7to11-0)+Number(cwcForm.a3Boys7to11-0)+Number(cwcForm.a4Boys7to11-0)+Number(cwcForm.a5Boys7to11-0)+Number(
                                                            cwcForm.a6Boys7to11-0)+Number(cwcForm.a7Boys7to11-0)+Number(cwcForm.a1Boys12to15-0)+Number(cwcForm.a2Boys12to15-0)+Number(
                                                            cwcForm.a3Boys12to15-0)+Number(cwcForm.a4Boys12to15-0)+Number(cwcForm.a5Boys12to15-0)+Number(cwcForm.a6Boys12to15-0)+Number(
                                                            cwcForm.a7Boys12to15-0)+Number(cwcForm.a1Boys16to18-0)+Number(cwcForm.a2Boys16to18-0)+Number(cwcForm.a3Boys16to18-0)+Number(
                                                            cwcForm.a4Boys16to18-0)+Number(cwcForm.a5Boys16to18-0)+Number(cwcForm.a6Boys16to18-0)+Number(cwcForm.a7Boys16to18-0)+Number(
                                                            cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a2BoysGreaterThan18-0)+Number(cwcForm.a3BoysGreaterThan18-0)+Number(
                                                            cwcForm.a4BoysGreaterThan18-0)+Number(cwcForm.a5BoysGreaterThan18-0)+Number(cwcForm.a6BoysGreaterThan18-0)+Number(cwcForm.a7BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8Girls0to6" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Girls0to6-0)+Number(cwcForm.a2Girls0to6-0)+Number(cwcForm.a3Girls0to6-0)+Number(cwcForm.a4Girls0to6-0)+Number(cwcForm.a5Girls0to6-0)+Number(cwcForm.a6Girls0to6-0)+Number(cwcForm.a7Girls0to6-0)}}">
                                                       </td>
                                                          <td><input type="text" name="aValue" id="a8Girls7to11" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Girls7to11-0)+Number(cwcForm.a2Girls7to11-0)+Number(cwcForm.a3Girls7to11-0)+Number(cwcForm.a4Girls7to11-0)+Number(
                                                            cwcForm.a5Girls7to11-0)+Number(cwcForm.a6Girls7to11-0)+Number(cwcForm.a7Girls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8Girls12to15" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Girls12to15-0)+Number(cwcForm.a2Girls12to15-0)+Number(
                                                            cwcForm.a3Girls12to15-0)+Number(cwcForm.a4Girls12to15-0)+Number(cwcForm.a5Girls12to15-0)+Number(
                                                            cwcForm.a6Girls12to15-0)+Number(cwcForm.a7Girls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8Girls16to18" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Girls16to18-0)+Number(cwcForm.a2Girls16to18-0)+Number(cwcForm.a3Girls16to18-0)+Number(
                                                            cwcForm.a4Girls16to18-0)+Number(cwcForm.a5Girls16to18-0)+Number(cwcForm.a6Girls16to18-0)+Number(cwcForm.a7Girls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8GirlsGreaterThan18" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1GirlsGreaterThan18-0)+Number(cwcForm.a2GirlsGreaterThan18-0)+Number(cwcForm.a3GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a4GirlsGreaterThan18-0)+Number(cwcForm.a5GirlsGreaterThan18-0)+Number(cwcForm.a6GirlsGreaterThan18-0)+Number(cwcForm.a7GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="a8GirlsTotal" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             value="{{Number(cwcForm.a1Girls0to6-0)+Number(cwcForm.a2Girls0to6-0)+Number(cwcForm.a3Girls0to6-0)+Number(cwcForm.a4Girls0to6-0)+Number(
                                                            cwcForm.a5Girls0to6-0)+Number(cwcForm.a6Girls0to6-0)+Number(cwcForm.a7Girls0to6-0)+Number(cwcForm.a1Girls7to11-0)+Number(
                                                            cwcForm.a2Girls7to11-0)+Number(cwcForm.a3Girls7to11-0)+Number(cwcForm.a4Girls7to11-0)+Number(cwcForm.a5Girls7to11-0)+Number(
                                                            cwcForm.a6Girls7to11-0)+Number(cwcForm.a7Girls7to11-0)+Number(cwcForm.a1Girls12to15-0)+Number(cwcForm.a2Girls12to15-0)+Number(
                                                            cwcForm.a3Girls12to15-0)+Number(cwcForm.a4Girls12to15-0)+Number(cwcForm.a5Girls12to15-0)+Number(cwcForm.a6Girls12to15-0)+Number(
                                                            cwcForm.a7Girls12to15-0)+Number(cwcForm.a1Girls16to18-0)+Number(cwcForm.a2Girls16to18-0)+Number(cwcForm.a3Girls16to18-0)+Number(
                                                            cwcForm.a4Girls16to18-0)+Number(cwcForm.a5Girls16to18-0)+Number(cwcForm.a6Girls16to18-0)+Number(cwcForm.a7Girls16to18-0)+Number(
                                                            cwcForm.a1GirlsGreaterThan18-0)+Number(cwcForm.a2GirlsGreaterThan18-0)+Number(cwcForm.a3GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a4GirlsGreaterThan18-0)+Number(cwcForm.a5GirlsGreaterThan18-0)+Number(cwcForm.a6GirlsGreaterThan18-0)+Number(cwcForm.a7GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" disabled id="a8GrandTotal"
                                                             value="{{Number(cwcForm.a1Boys0to6-0)+Number(cwcForm.a2Boys0to6-0)+Number(cwcForm.a3Boys0to6-0)+Number(cwcForm.a4Boys0to6-0)+Number(cwcForm.a5Boys0to6-0)+Number(
                                                            cwcForm.a6Boys0to6-0)+Number(cwcForm.a7Boys0to6-0)+Number(cwcForm.a1Boys7to11-0)+Number(cwcForm.a2Boys7to11-0)+Number(cwcForm.a3Boys7to11-0)+Number(cwcForm.a4Boys7to11-0)+Number(
                                                            cwcForm.a5Boys7to11-0)+Number(cwcForm.a6Boys7to11-0)+Number(cwcForm.a7Boys7to11-0)+Number(cwcForm.a1Boys12to15-0)+Number(cwcForm.a2Boys12to15-0)+Number(
                                                            cwcForm.a3Boys12to15-0)+Number(cwcForm.a4Boys12to15-0)+Number(cwcForm.a5Boys12to15-0)+Number(cwcForm.a6Boys12to15-0)+Number(cwcForm.a7Boys12to15-0)+Number(
                                                            cwcForm.a1Boys16to18-0)+Number(cwcForm.a2Boys16to18-0)+Number(cwcForm.a3Boys16to18-0)+Number(cwcForm.a4Boys16to18-0)+Number(cwcForm.a5Boys16to18-0)+Number(
                                                            cwcForm.a6Boys16to18-0)+Number(cwcForm.a7Boys16to18-0)+Number(cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a2BoysGreaterThan18-0)+Number(
                                                            cwcForm.a3BoysGreaterThan18-0)+Number(cwcForm.a4BoysGreaterThan18-0)+Number(cwcForm.a5BoysGreaterThan18-0)+Number(cwcForm.a6BoysGreaterThan18-0)+Number(
                                                            cwcForm.a7BoysGreaterThan18-0)+Number(cwcForm.a1Girls0to6-0)+Number(cwcForm.a2Girls0to6-0)+Number(cwcForm.a3Girls0to6-0)+Number(cwcForm.a4Girls0to6-0)+Number(
                                                            cwcForm.a5Girls0to6-0)+Number(cwcForm.a6Girls0to6-0)+Number(cwcForm.a7Girls0to6-0)+Number(cwcForm.a1Girls7to11-0)+Number(cwcForm.a2Girls7to11-0)+Number(
                                                            cwcForm.a3Girls7to11-0)+Number(cwcForm.a4Girls7to11-0)+Number(cwcForm.a5Girls7to11-0)+Number(cwcForm.a6Girls7to11-0)+Number(cwcForm.a7Girls7to11-0)+Number(
                                                            cwcForm.a1Girls12to15-0)+Number(cwcForm.a2Girls12to15-0)+Number(cwcForm.a3Girls12to15-0)+Number(cwcForm.a4Girls12to15-0)+Number(cwcForm.a5Girls12to15-0)+Number(
                                                            cwcForm.a6Girls12to15-0)+Number(cwcForm.a7Girls12to15-0)+Number(cwcForm.a1Girls16to18-0)+Number(cwcForm.a2Girls16to18-0)+Number(cwcForm.a3Girls16to18-0)+Number(
                                                            cwcForm.a4Girls16to18-0)+Number(cwcForm.a5Girls16to18-0)+Number(cwcForm.a6Girls16to18-0)+Number(cwcForm.a7Girls16to18-0)+Number(cwcForm.a1GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a2GirlsGreaterThan18-0)+Number(cwcForm.a3GirlsGreaterThan18-0)+Number(cwcForm.a4GirlsGreaterThan18-0)+Number(cwcForm.a5GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a6GirlsGreaterThan18-0)+Number(cwcForm.a7GirlsGreaterThan18
                                                                 -0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>

                                                  </tr>
                                                  
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   <!-- -------------------------------- End A section-------------------------- -->

                                   <!-- -------------------------------- Start B section-------------------------- -->
                                   
                                   <div class="b4sectionheading" id="caseB"></div>
                                   <div class="grey-header headMarg">B. New Cases Produced
                                        Before the CWC in the Reporting Month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
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
                                                                 <label class="control-label" for="textinput">B.1.a
                                                                      Cases Produced Before CWC By Police/SJPU/CWPO</label>
                                                            </div>
                                                       </td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aBoys0to6" ng-model="cwcForm.b1aBoys0to6"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aBoys7to11" ng-model="cwcForm.b1aBoys7to11"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aBoys12to15" ng-model="cwcForm.b1aBoys12to15"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aBoys16to18" ng-model="cwcForm.b1aBoys16to18"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aBoysGreaterThan18" ng-model="cwcForm.b1aBoysGreaterThan18"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="text" readonly
                                                            id="b1aBoysTotal" tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(
                                                                                            cwcForm.b1aBoys7to11-0)+Number(
                                                                                            cwcForm.b1aBoys12to15-0)+Number(
                                                                                            cwcForm.b1aBoys16to18-0)+Number(
                                                                                            cwcForm.b1aBoysGreaterThan18-0)}}"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aGirls0to6" ng-model="cwcForm.b1aGirls0to6"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aGirls7to11" ng-model="cwcForm.b1aGirls7to11"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aGirls12to15" ng-model="cwcForm.b1aGirls12to15"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aGirls16to18" ng-model="cwcForm.b1aGirls16to18"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="cwcForm.submitted" type="number"
                                                            id="b1aGirlsGreaterThan18" ng-model="cwcForm.b1aGirlsGreaterThan18"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1aGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls0to6-0)+Number(
                                                                        cwcForm.b1aGirls7to11-0)+Number(
                                                                        cwcForm.b1aGirls12to15-0)+Number(
                                                                        cwcForm.b1aGirls16to18-0)+Number(
                                                                        cwcForm.b1aGirlsGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input readonly type="text" id="b1aGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(
                                                                        cwcForm.b1aBoys7to11-0)+Number(
                                                                        cwcForm.b1aBoys12to15-0)+Number(
                                                                        cwcForm.b1aBoys16to18-0)+Number(
                                                                        cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1aGirls0to6-0)+Number(
                                                                        cwcForm.b1aGirls7to11-0)+Number(
                                                                        cwcForm.b1aGirls12to15-0)+Number(
                                                                        cwcForm.b1aGirls16to18-0)+Number(
                                                                        cwcForm.b1aGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.1.b
                                                                      Cases Produced Before CWC By Child Line</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="b1bBoys0to6"
                                                            ng-model="cwcForm.b1bBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bBoys7to11"
                                                            ng-model="cwcForm.b1bBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bBoys12to15"
                                                            ng-model="cwcForm.b1bBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bBoys16to18"
                                                            ng-model="cwcForm.b1bBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bBoysGreaterThan18"
                                                            ng-model="cwcForm.b1bBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1bBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1bBoys0to6-0)+Number( 
                                                                        cwcForm.b1bBoys7to11-0)+Number(
                                                                        cwcForm.b1bBoys12to15-0)+Number(
                                                                        cwcForm.b1bBoys16to18-0)+Number(
                                                                        cwcForm.b1bBoysGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bGirls0to6"
                                                            ng-model="cwcForm.b1bGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bGirls7to11"
                                                            ng-model="cwcForm.b1bGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bGirls12to15"
                                                            ng-model="cwcForm.b1bGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bGirls16to18"
                                                            ng-model="cwcForm.b1bGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1bGirlsGreaterThan18"
                                                            ng-model="cwcForm.b1bGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1bGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1bGirls0to6-0)+Number(
                                                                        cwcForm.b1bGirls7to11-0)+Number(
                                                                        cwcForm.b1bGirls12to15-0)+Number(
                                                                        cwcForm.b1bGirls16to18-0)+Number(
                                                                        cwcForm.b1bGirlsGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input readonly type="text" id="b1bGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.b1bBoys0to6-0)+Number(
                                                                        cwcForm.b1bBoys7to11-0)+Number(
                                                                        cwcForm.b1bBoys12to15-0)+Number(
                                                                        cwcForm.b1bBoys16to18-0)+Number(
                                                                        cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1bGirls0to6-0)+Number(
                                                                        cwcForm.b1bGirls7to11-0)+Number(
                                                                        cwcForm.b1bGirls12to15-0)+Number(
                                                                        cwcForm.b1bGirls16to18-0)+Number(
                                                                        cwcForm.b1bGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.1.c
                                                                      Cases Produced Before CWC By Others (Public Servant/ NGOs/
                                                                      Citizens/CPC)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="b1cBoys0to6"
                                                            ng-model="cwcForm.b1cBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cBoys7to11"
                                                            ng-model="cwcForm.b1cBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cBoys12to15"
                                                            ng-model="cwcForm.b1cBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cBoys16to18"
                                                            ng-model="cwcForm.b1cBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cBoysGreaterThan18"
                                                            ng-model="cwcForm.b1cBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1cBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1cBoys0to6-0)+Number(
                                                                        cwcForm.b1cBoys7to11-0)+Number(
                                                                        cwcForm.b1cBoys12to15-0)+Number(
                                                                        cwcForm.b1cBoys16to18-0)+Number(
                                                                        cwcForm.b1cBoysGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cGirls0to6"
                                                            ng-model="cwcForm.b1cGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cGirls7to11"
                                                            ng-model="cwcForm.b1cGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cGirls12to15"
                                                            ng-model="cwcForm.b1cGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cGirls16to18"
                                                            ng-model="cwcForm.b1cGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1cGirlsGreaterThan18"
                                                            ng-model="cwcForm.b1cGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1cGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1cGirls0to6-0)+Number(
                                                                        cwcForm.b1cGirls7to11-0)+Number(
                                                                        cwcForm.b1cGirls12to15-0)+Number(
                                                                        cwcForm.b1cGirls16to18-0)+Number(
                                                                        cwcForm.b1cGirlsGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle" 
                                                             only-four-digits></td>
                                                       <td><input readonly type="text" id="b1cGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.b1cBoys0to6-0)+Number(
                                                                        cwcForm.b1cBoys7to11-0)+Number(
                                                                        cwcForm.b1cBoys12to15-0)+Number(
                                                                        cwcForm.b1cBoys16to18-0)+Number(
                                                                        cwcForm.b1cBoysGreaterThan18-0)+Number(cwcForm.b1cGirls0to6-0)+Number(
                                                                        cwcForm.b1cGirls7to11-0)+Number(
                                                                        cwcForm.b1cGirls12to15-0)+Number(
                                                                        cwcForm.b1cGirls16to18-0)+Number(
                                                                        cwcForm.b1cGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class=" textAlign">
                                                                 <label class="control-label" for="textinput">B.1.d
                                                                      Cases Produced Before CWC By the Child Herself/Himself</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="b1dBoys0to6"
                                                            ng-model="cwcForm.b1dBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dBoys7to11"
                                                            ng-model="cwcForm.b1dBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dBoys12to15"
                                                            ng-model="cwcForm.b1dBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dBoys16to18"
                                                            ng-model="cwcForm.b1dBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dBoysGreaterThan18"
                                                            ng-model="cwcForm.b1dBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1dBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1dBoys0to6-0)+Number(
                                                                        cwcForm.b1dBoys7to11-0)+Number(
                                                                        cwcForm.b1dBoys12to15-0)+Number(
                                                                        cwcForm.b1dBoys16to18-0)+Number(
                                                                        cwcForm.b1dBoysGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dGirls0to6"
                                                            ng-model="cwcForm.b1dGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dGirls7to11"
                                                            ng-model="cwcForm.b1dGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                        <td><input type="number" id="b1dGirls12to15"
                                                            ng-model="cwcForm.b1dGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dGirls16to18"
                                                            ng-model="cwcForm.b1dGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="number" id="b1dGirlsGreaterThan18"
                                                            ng-model="cwcForm.b1dGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1dGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b1dGirls0to6-0)+Number(
                                                                        cwcForm.b1dGirls7to11-0)+Number(
                                                                        cwcForm.b1dGirls12to15-0)+Number(
                                                                        cwcForm.b1dGirls16to18-0)+Number(
                                                                        cwcForm.b1dGirlsGreaterThan18-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                            only-four-digits></td>
                                                       <td><input readonly type="text" id="b1dGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.b1dBoys0to6-0)+Number(
                                                                        cwcForm.b1dBoys7to11-0)+Number(
                                                                        cwcForm.b1dBoys12to15-0)+Number(
                                                                        cwcForm.b1dBoys16to18-0)+Number(
                                                                        cwcForm.b1dBoysGreaterThan18-0)+Number(cwcForm.b1dGirls0to6-0)+Number(
                                                                        cwcForm.b1dGirls7to11-0)+Number(
                                                                        cwcForm.b1dGirls12to15-0)+Number(
                                                                        cwcForm.b1dGirls16to18-0)+Number(
                                                                        cwcForm.b1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">B.1
                                                                      Total New Cases Produced Before CWC</label>
                                                            </div>
                                                       </td>
                                                       <!-- cwcForm.b1Boys
                                                  cwcForm.b1Girls
                                                  b1Total -->

                                                       <td><input type="text" id="b1Boys0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)}}">
                                                       </td>
                                                     <td><input type="text" id="b1Boys7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1Boys12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys12to15-0)+Number(cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1Boys16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(cwcForm.b1dBoys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1BoysGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(cwcForm.b1dBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1BoysTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(
                                                                      cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(
                                                                      cwcForm.b1aBoys12to15-0)+Number(cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(
                                                                      cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(cwcForm.b1dBoys16to18-0)+Number(
                                                                      cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1dBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1Girls0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(cwcForm.b1dGirls0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1Girls7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1Girls12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1Girls16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls16to18-0)+Number(cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1GirlsGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirlsGreaterThan18-0)+Number(cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(cwcForm.b1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b1GirlsTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(cwcForm.b1dGirls0to6-0)+Number(
                                                                      cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(
                                                                      cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(
                                                                      cwcForm.b1aGirls16to18-0)+Number(cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(
                                                                      cwcForm.b1aGirlsGreaterThan18-0)+Number(cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(
                                                                      cwcForm.b1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="b1GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(
                                                                      cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(
                                                                      cwcForm.b1aBoys12to15-0)+Number(cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(
                                                                      cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(cwcForm.b1dBoys16to18-0)+Number(
                                                                      cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1dBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(cwcForm.b1dGirls0to6-0)+Number(
                                                                      cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(
                                                                      cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(
                                                                      cwcForm.b1aGirls16to18-0)+Number(cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(
                                                                      cwcForm.b1aGirlsGreaterThan18-0)+Number(cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(
                                                                      cwcForm.b1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>


                                                  <tr>
                                                       <td>
                                                            <div class=" textAlign">
                                                                 <label class="control-label" for="textinput">B.2.
                                                                      New Cases Transferred From Other CWC/JJB/Court </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="b2Boys0to6"
                                                            ng-model="cwcForm.b2Boys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2Boys7to11"
                                                            ng-model="cwcForm.b2Boys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                     <td><input type="number" id="b2Boys12to15"
                                                            ng-model="cwcForm.b2Boys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                     <td><input type="number" id="b2Boys16to18"
                                                            ng-model="cwcForm.b2Boys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2BoysGreaterThan18"
                                                            ng-model="cwcForm.b2BoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                            only-four-digits></td>
                                                       <td><input type="text" id="b2BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b2Boys0to6-0)+Number(
                                                                        cwcForm.b2Boys7to11-0)+Number(
                                                                        cwcForm.b2Boys12to15-0)+Number(
                                                                        cwcForm.b2Boys16to18-0)+Number(
                                                                        cwcForm.b2BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2Girls0to6"
                                                            ng-model="cwcForm.b2Girls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2Girls7to11"
                                                            ng-model="cwcForm.b2Girls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2Girls12to15"
                                                            ng-model="cwcForm.b2Girls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2Girls16to18"
                                                            ng-model="cwcForm.b2Girls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="number" id="b2GirlsGreaterThan18"
                                                            ng-model="cwcForm.b2GirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                       <td><input type="text" id="b2GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.b2Girls0to6-0)+Number(
                                                                        cwcForm.b2Girls7to11-0)+Number(
                                                                        cwcForm.b2Girls12to15-0)+Number(
                                                                        cwcForm.b2Girls16to18-0)+Number(
                                                                        cwcForm.b2GirlsGreaterThan18-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                       <td><input readonly type="text" id="b2GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.b2Boys0to6-0)+Number(
                                                                        cwcForm.b2Boys7to11-0)+Number(
                                                                        cwcForm.b2Boys12to15-0)+Number(
                                                                        cwcForm.b2Boys16to18-0)+Number(
                                                                        cwcForm.b2BoysGreaterThan18-0)+Number(cwcForm.b2Girls0to6-0)+Number(
                                                                        cwcForm.b2Girls7to11-0)+Number(
                                                                        cwcForm.b2Girls12to15-0)+Number(
                                                                        cwcForm.b2Girls16to18-0)+Number(
                                                                        cwcForm.b2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">B.3.
                                                                      Total no. of New Cases in the Reporting Month</label>
                                                            </div>
                                                       </td>
                                                       <!-- ng-model="cwcForm.bBoys"
                                                  ng-model="cwcForm.bGirls"
                                                  bTotal -->

                                                       <td><input type="text" id="b3Boys0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(cwcForm.b2Boys0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Boys7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(cwcForm.b2Boys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Boys12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys12to15-0)+Number(cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(cwcForm.b2Boys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Boys16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys16to18-0)+Number(
                                                                      cwcForm.b1bBoys16to18-0)+Number(
                                                                      cwcForm.b1cBoys16to18-0)+Number(
                                                                      cwcForm.b1dBoys16to18-0)+Number(
                                                                      cwcForm.b2Boys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3BoysGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(cwcForm.b1dBoysGreaterThan18-0)+Number(cwcForm.b2BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3BoysTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(
                                                                      cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(
                                                                      cwcForm.b1aBoys12to15-0)+Number(cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(
                                                                      cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(cwcForm.b1dBoys16to18-0)+Number(
                                                                      cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1dBoysGreaterThan18-0)+Number(cwcForm.b2Boys0to6-0)+Number(
                                                                      cwcForm.b2Boys7to11-0)+Number(
                                                                      cwcForm.b2Boys12to15-0)+Number(
                                                                      cwcForm.b2Boys16to18-0)+Number(
                                                                      cwcForm.b2BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Girls0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(cwcForm.b1dGirls0to6-0)+Number(cwcForm.b2Girls0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Girls7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(cwcForm.b2Girls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Girls12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(cwcForm.b2Girls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3Girls16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls16to18-0)+Number(cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(cwcForm.b2Girls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3GirlsGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirlsGreaterThan18-0)+Number(cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(cwcForm.b1dGirlsGreaterThan18-0)+Number(cwcForm.b2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="b3GirlsTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(cwcForm.b1dGirls0to6-0)+Number(
                                                                      cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(
                                                                      cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(
                                                                      cwcForm.b1aGirls16to18-0)+Number(cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(
                                                                      cwcForm.b1aGirlsGreaterThan18-0)+Number(cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(
                                                                      cwcForm.b1dGirlsGreaterThan18-0)+Number(cwcForm.b2Girls0to6-0)+Number(
                                                                      cwcForm.b2Girls7to11-0)+Number(
                                                                      cwcForm.b2Girls12to15-0)+Number(
                                                                      cwcForm.b2Girls16to18-0)+Number(
                                                                      cwcForm.b2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="b3GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(
                                                                      cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(cwcForm.b1aBoys12to15-0)+Number(
                                                                      cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(
                                                                      cwcForm.b1cBoys16to18-0)+Number(cwcForm.b1dBoys16to18-0)+Number(cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1cBoysGreaterThan18-0)+Number(cwcForm.b1dBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(cwcForm.b1dGirls0to6-0)+Number(
                                                                      cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(
                                                                      cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(
                                                                      cwcForm.b1aGirls16to18-0)+Number(cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(
                                                                      cwcForm.b1aGirlsGreaterThan18-0)+Number(cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(
                                                                      cwcForm.b1dGirlsGreaterThan18-0)+Number(cwcForm.b2Boys0to6-0)+Number(
                                                                      cwcForm.b2Boys7to11-0)+Number(
                                                                      cwcForm.b2Boys12to15-0)+Number(
                                                                      cwcForm.b2Boys16to18-0)+Number(
                                                                      cwcForm.b2BoysGreaterThan18-0)+Number(cwcForm.b2Girls0to6-0)+Number(
                                                                      cwcForm.b2Girls7to11-0)+Number(
                                                                      cwcForm.b2Girls12to15-0)+Number(
                                                                      cwcForm.b2Girls16to18-0)+Number(
                                                                      cwcForm.b2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  

                                             </tbody>
                                        </table>
                                   </div>


                                   <!-- -----------------------------------------End B section---------------------------------------- -->


                                   <!-------------------------------------- C section ------------------------------------------>
                                   
                                   <div class="b4sectionheading" id="caseC"></div>
                                   <div class="grey-header headMarg">C. Total No. of Cases in
                                        the Reporting Month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
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
                                                  <!-- ng-model="cwcForm.cGirls" -->
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">C.
                                                                     Total No. of Cases With the CWC in the Reporting Month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="cBoys0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Boys0to6-0)+Number(cwcForm.a2Boys0to6-0)+Number(cwcForm.a3Boys0to6-0)+Number(cwcForm.a4Boys0to6-0)+Number(cwcForm.a5Boys0to6-0)+Number(cwcForm.a6Boys0to6-0)+Number(
                                                            cwcForm.a7Boys0to6-0)+Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(cwcForm.b2Boys0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cBoys7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Boys7to11-0)+Number(cwcForm.a2Boys7to11-0)+Number(cwcForm.a3Boys7to11-0)+Number(cwcForm.a4Boys7to11-0)+Number(cwcForm.a5Boys7to11-0)+Number(cwcForm.a6Boys7to11-0)+Number(cwcForm.a7Boys7to11-0)+Number(
                                                            cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(cwcForm.b2Boys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cBoys12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Boys12to15-0)+Number(cwcForm.a2Boys12to15-0)+Number(cwcForm.a3Boys12to15-0)+Number(
                                                            cwcForm.a4Boys12to15-0)+Number(cwcForm.a5Boys12to15-0)+Number(cwcForm.a6Boys12to15-0)+Number(cwcForm.a7Boys12to15-0)+Number(cwcForm.b1aBoys12to15-0)+Number(
                                                            cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(cwcForm.b2Boys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cBoys16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Boys16to18-0)+Number(cwcForm.a2Boys16to18-0)+Number(cwcForm.a3Boys16to18-0)+Number(cwcForm.a4Boys16to18-0)+Number(cwcForm.a5Boys16to18-0)+Number(
                                                            cwcForm.a6Boys16to18-0)+Number(cwcForm.a7Boys16to18-0)+Number(cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(
                                                            cwcForm.b1dBoys16to18-0)+Number(cwcForm.b2Boys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cBoysGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a2BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a3BoysGreaterThan18-0)+Number(cwcForm.a4BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a5BoysGreaterThan18-0)+Number(cwcForm.a6BoysGreaterThan18-0)+Number(cwcForm.a7BoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1dBoysGreaterThan18-0)+Number(cwcForm.b2BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cBoysTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Boys0to6-0)+Number(cwcForm.a2Boys0to6-0)+Number(cwcForm.a3Boys0to6-0)+Number(cwcForm.a4Boys0to6-0)+Number(cwcForm.a5Boys0to6-0)+Number(cwcForm.a6Boys0to6-0)+Number(
                                                            cwcForm.a7Boys0to6-0)+Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(cwcForm.b2Boys0to6-0)+Number(
                                                            cwcForm.a1Boys7to11-0)+Number(cwcForm.a2Boys7to11-0)+Number(cwcForm.a3Boys7to11-0)+Number(cwcForm.a4Boys7to11-0)+Number(cwcForm.a5Boys7to11-0)+Number(cwcForm.a6Boys7to11-0)+Number(cwcForm.a7Boys7to11-0)+Number(
                                                            cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(cwcForm.b2Boys7to11-0)+Number(
                                                            cwcForm.a1Boys12to15-0)+Number(cwcForm.a2Boys12to15-0)+Number(cwcForm.a3Boys12to15-0)+Number(
                                                            cwcForm.a4Boys12to15-0)+Number(cwcForm.a5Boys12to15-0)+Number(cwcForm.a6Boys12to15-0)+Number(cwcForm.a7Boys12to15-0)+Number(cwcForm.b1aBoys12to15-0)+Number(
                                                            cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(cwcForm.b2Boys12to15-0)+Number(cwcForm.a1Boys16to18-0)+Number(cwcForm.a2Boys16to18-0)+Number(cwcForm.a3Boys16to18-0)+Number(cwcForm.a4Boys16to18-0)+Number(cwcForm.a5Boys16to18-0)+Number(
                                                            cwcForm.a6Boys16to18-0)+Number(cwcForm.a7Boys16to18-0)+Number(cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(
                                                            cwcForm.b1dBoys16to18-0)+Number(cwcForm.b2Boys16to18-0)+Number(cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a2BoysGreaterThan18-0)+Number(
                                                            cwcForm.a3BoysGreaterThan18-0)+Number(cwcForm.a4BoysGreaterThan18-0)+Number(
                                                            cwcForm.a5BoysGreaterThan18-0)+Number(cwcForm.a6BoysGreaterThan18-0)+Number(cwcForm.a7BoysGreaterThan18-0)+Number(
                                                            cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(
                                                            cwcForm.b1dBoysGreaterThan18-0)+Number(cwcForm.b2BoysGreaterThan18
                                                            -0)}}">
                                                       </td>
                                                       <td><input type="text" id="cGirls0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Girls0to6-0)+Number(cwcForm.a2Girls0to6-0)+Number(cwcForm.a3Girls0to6-0)+Number(cwcForm.a4Girls0to6-0)+Number(cwcForm.a5Girls0to6-0)+Number(
                                                            cwcForm.a6Girls0to6-0)+Number(cwcForm.a7Girls0to6-0)+Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(
                                                            cwcForm.b1dGirls0to6-0)+Number(cwcForm.b2Girls0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cGirls7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Girls7to11-0)+Number(cwcForm.a2Girls7to11-0)+Number(cwcForm.a3Girls7to11-0)+Number(cwcForm.a4Girls7to11-0)+Number(cwcForm.a5Girls7to11
                                                            -0)+Number(cwcForm.a6Girls7to11-0)+Number(cwcForm.a7Girls7to11-0)+Number(cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(
                                                            cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(cwcForm.b2Girls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cGirls12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Girls12to15-0)+Number(cwcForm.a2Girls12to15-0)+Number(cwcForm.a3Girls12to15-0)+Number(cwcForm.a4Girls12to15-0)+Number(
                                                            cwcForm.a5Girls12to15-0)+Number(cwcForm.a6Girls12to15-0)+Number(cwcForm.a7Girls12to15-0)+Number(cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(
                                                            cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(cwcForm.b2Girls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cGirls16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Girls16to18-0)+Number(cwcForm.a2Girls16to18-0)+Number(cwcForm.a3Girls16to18-0)+Number(cwcForm.a4Girls16to18-0)+Number(
                                                            cwcForm.a5Girls16to18-0)+Number(cwcForm.a6Girls16to18-0)+Number(cwcForm.a7Girls16to18-0)+Number(cwcForm.b1aGirls16to18-0)+Number(
                                                            cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(cwcForm.b2Girls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cGirlsGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1GirlsGreaterThan18-0)+Number(cwcForm.a2GirlsGreaterThan18-0)+Number(cwcForm.a3GirlsGreaterThan18-0)+Number(cwcForm.a4GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a5GirlsGreaterThan18-0)+Number(cwcForm.a6GirlsGreaterThan18-0)+Number(cwcForm.a7GirlsGreaterThan18-0)+Number(cwcForm.b1aGirlsGreaterThan18-0)+Number(
                                                            cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(cwcForm.b1dGirlsGreaterThan18-0)+Number(
                                                            cwcForm.b2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="cGirlsTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Girls0to6-0)+Number(cwcForm.a2Girls0to6-0)+Number(cwcForm.a3Girls0to6-0)+Number(cwcForm.a4Girls0to6-0)+Number(cwcForm.a5Girls0to6-0)+Number(
                                                            cwcForm.a6Girls0to6-0)+Number(cwcForm.a7Girls0to6-0)+Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(
                                                            cwcForm.b1dGirls0to6-0)+Number(cwcForm.b2Girls0to6-0)+Number(cwcForm.a1Girls7to11-0)+Number(cwcForm.a2Girls7to11-0)+Number(cwcForm.a3Girls7to11-0)+Number(cwcForm.a4Girls7to11-0)+Number(cwcForm.a5Girls7to11
                                                            -0)+Number(cwcForm.a6Girls7to11-0)+Number(cwcForm.a7Girls7to11-0)+Number(cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(
                                                            cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(cwcForm.b2Girls7to11-0)+Number(
                                                            cwcForm.a1Girls12to15-0)+Number(cwcForm.a2Girls12to15-0)+Number(cwcForm.a3Girls12to15-0)+Number(cwcForm.a4Girls12to15-0)+Number(
                                                            cwcForm.a5Girls12to15-0)+Number(cwcForm.a6Girls12to15-0)+Number(cwcForm.a7Girls12to15-0)+Number(cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(
                                                            cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(cwcForm.b2Girls12to15-0)+Number(
                                                            cwcForm.a1Girls16to18-0)+Number(cwcForm.a2Girls16to18-0)+Number(cwcForm.a3Girls16to18-0)+Number(cwcForm.a4Girls16to18-0)+Number(
                                                            cwcForm.a5Girls16to18-0)+Number(cwcForm.a6Girls16to18-0)+Number(cwcForm.a7Girls16to18-0)+Number(cwcForm.b1aGirls16to18-0)+Number(
                                                            cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(cwcForm.b2Girls16to18-0)+Number(
                                                            cwcForm.a1GirlsGreaterThan18-0)+Number(cwcForm.a2GirlsGreaterThan18-0)+Number(cwcForm.a3GirlsGreaterThan18-0)+Number(cwcForm.a4GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a5GirlsGreaterThan18-0)+Number(cwcForm.a6GirlsGreaterThan18-0)+Number(cwcForm.a7GirlsGreaterThan18-0)+Number(cwcForm.b1aGirlsGreaterThan18-0)+Number(
                                                            cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(cwcForm.b1dGirlsGreaterThan18-0)+Number(
                                                            cwcForm.b2GirlsGreaterThan18
                                                            -0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="cGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.a1Boys0to6-0)+Number(cwcForm.a2Boys0to6-0)+Number(cwcForm.a3Boys0to6-0)+Number(cwcForm.a4Boys0to6-0)+Number(cwcForm.a5Boys0to6-0)+Number(cwcForm.a6Boys0to6-0)+Number(
                                                            cwcForm.a7Boys0to6-0)+Number(cwcForm.b1aBoys0to6-0)+Number(cwcForm.b1bBoys0to6-0)+Number(cwcForm.b1cBoys0to6-0)+Number(cwcForm.b1dBoys0to6-0)+Number(cwcForm.b2Boys0to6-0)+Number(
                                                            cwcForm.a1Boys7to11-0)+Number(cwcForm.a2Boys7to11-0)+Number(cwcForm.a3Boys7to11-0)+Number(cwcForm.a4Boys7to11-0)+Number(cwcForm.a5Boys7to11-0)+Number(cwcForm.a6Boys7to11-0)+Number(cwcForm.a7Boys7to11-0)+Number(
                                                            cwcForm.b1aBoys7to11-0)+Number(cwcForm.b1bBoys7to11-0)+Number(cwcForm.b1cBoys7to11-0)+Number(cwcForm.b1dBoys7to11-0)+Number(cwcForm.b2Boys7to11-0)+Number(
                                                            cwcForm.a1Boys12to15-0)+Number(cwcForm.a2Boys12to15-0)+Number(cwcForm.a3Boys12to15-0)+Number(
                                                            cwcForm.a4Boys12to15-0)+Number(cwcForm.a5Boys12to15-0)+Number(cwcForm.a6Boys12to15-0)+Number(cwcForm.a7Boys12to15-0)+Number(cwcForm.b1aBoys12to15-0)+Number(
                                                            cwcForm.b1bBoys12to15-0)+Number(cwcForm.b1cBoys12to15-0)+Number(cwcForm.b1dBoys12to15-0)+Number(cwcForm.b2Boys12to15-0)+Number(cwcForm.a1Boys16to18-0)+Number(cwcForm.a2Boys16to18-0)+Number(cwcForm.a3Boys16to18-0)+Number(cwcForm.a4Boys16to18-0)+Number(cwcForm.a5Boys16to18-0)+Number(
                                                            cwcForm.a6Boys16to18-0)+Number(cwcForm.a7Boys16to18-0)+Number(cwcForm.b1aBoys16to18-0)+Number(cwcForm.b1bBoys16to18-0)+Number(cwcForm.b1cBoys16to18-0)+Number(
                                                            cwcForm.b1dBoys16to18-0)+Number(cwcForm.b2Boys16to18-0)+Number(cwcForm.a1BoysGreaterThan18-0)+Number(cwcForm.a2BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a3BoysGreaterThan18-0)+Number(cwcForm.a4BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a5BoysGreaterThan18-0)+Number(cwcForm.a6BoysGreaterThan18-0)+Number(cwcForm.a7BoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1aBoysGreaterThan18-0)+Number(cwcForm.b1bBoysGreaterThan18-0)+Number(cwcForm.b1cBoysGreaterThan18-0)+Number(
                                                                      cwcForm.b1dBoysGreaterThan18-0)+Number(cwcForm.b2BoysGreaterThan18-0)+Number(
                                                                      cwcForm.a1Girls0to6-0)+Number(cwcForm.a2Girls0to6-0)+Number(cwcForm.a3Girls0to6-0)+Number(cwcForm.a4Girls0to6-0)+Number(cwcForm.a5Girls0to6-0)+Number(
                                                            cwcForm.a6Girls0to6-0)+Number(cwcForm.a7Girls0to6-0)+Number(cwcForm.b1aGirls0to6-0)+Number(cwcForm.b1bGirls0to6-0)+Number(cwcForm.b1cGirls0to6-0)+Number(
                                                            cwcForm.b1dGirls0to6-0)+Number(cwcForm.b2Girls0to6-0)+Number(cwcForm.a1Girls7to11-0)+Number(cwcForm.a2Girls7to11-0)+Number(cwcForm.a3Girls7to11-0)+Number(cwcForm.a4Girls7to11-0)+Number(cwcForm.a5Girls7to11
                                                            -0)+Number(cwcForm.a6Girls7to11-0)+Number(cwcForm.a7Girls7to11-0)+Number(cwcForm.b1aGirls7to11-0)+Number(cwcForm.b1bGirls7to11-0)+Number(
                                                            cwcForm.b1cGirls7to11-0)+Number(cwcForm.b1dGirls7to11-0)+Number(cwcForm.b2Girls7to11-0)+Number(
                                                            cwcForm.a1Girls12to15-0)+Number(cwcForm.a2Girls12to15-0)+Number(cwcForm.a3Girls12to15-0)+Number(cwcForm.a4Girls12to15-0)+Number(
                                                            cwcForm.a5Girls12to15-0)+Number(cwcForm.a6Girls12to15-0)+Number(cwcForm.a7Girls12to15-0)+Number(cwcForm.b1aGirls12to15-0)+Number(cwcForm.b1bGirls12to15-0)+Number(
                                                            cwcForm.b1cGirls12to15-0)+Number(cwcForm.b1dGirls12to15-0)+Number(cwcForm.b2Girls12to15-0)+Number(
                                                            cwcForm.a1Girls16to18-0)+Number(cwcForm.a2Girls16to18-0)+Number(cwcForm.a3Girls16to18-0)+Number(cwcForm.a4Girls16to18-0)+Number(
                                                            cwcForm.a5Girls16to18-0)+Number(cwcForm.a6Girls16to18-0)+Number(cwcForm.a7Girls16to18-0)+Number(cwcForm.b1aGirls16to18-0)+Number(
                                                            cwcForm.b1bGirls16to18-0)+Number(cwcForm.b1cGirls16to18-0)+Number(cwcForm.b1dGirls16to18-0)+Number(cwcForm.b2Girls16to18-0)+Number(
                                                            cwcForm.a1GirlsGreaterThan18-0)+Number(cwcForm.a2GirlsGreaterThan18-0)+Number(cwcForm.a3GirlsGreaterThan18-0)+Number(cwcForm.a4GirlsGreaterThan18-0)+Number(
                                                            cwcForm.a5GirlsGreaterThan18-0)+Number(cwcForm.a6GirlsGreaterThan18-0)+Number(cwcForm.a7GirlsGreaterThan18-0)+Number(cwcForm.b1aGirlsGreaterThan18-0)+Number(
                                                            cwcForm.b1bGirlsGreaterThan18-0)+Number(cwcForm.b1cGirlsGreaterThan18-0)+Number(cwcForm.b1dGirlsGreaterThan18-0)+Number(
                                                            cwcForm.b2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!-------------------------------------- End of C section ------------------------------------------>


                                   <!-------------------------------------- D section ------------------------------------------>
                                   <div class="b4sectionheading" id="caseD"></div>
                                   <div class="grey-header headMarg">D. Institutions/Persons
                                        Where Children Referred (in the Reporting Month)</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableD">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
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
                                                                 <label class="control-label" for="textinput">D.1.a
                                                                      No. of Children Sent to Children's Homes</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d1aBoys0to6"
                                                            ng-model="cwcForm.d1aBoys0to6" ng-keyup="testEqualBoys('d1aBoys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1aBoys7to11"
                                                            ng-model="cwcForm.d1aBoys7to11" ng-keyup="testEqualBoys('d1aBoys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aBoys12to15"
                                                            ng-model="cwcForm.d1aBoys12to15" ng-keyup="testEqualBoys('d1aBoys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aBoys16to18"
                                                            ng-model="cwcForm.d1aBoys16to18" ng-keyup="testEqualBoys('d1aBoys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aBoysGreaterThan18"
                                                            ng-model="cwcForm.d1aBoysGreaterThan18" ng-keyup="testEqualBoys('d1aBoysGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="d1aBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(
                                                                        cwcForm.d1aBoys7to11-0)+Number(
                                                                        cwcForm.d1aBoys12to15-0)+Number(
                                                                        cwcForm.d1aBoys16to18-0)+Number(
                                                                        cwcForm.d1aBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aGirls0to6"
                                                            ng-model="cwcForm.d1aGirls0to6" ng-keyup="testEqualGirls('d1aGirls0to6')"
                                                            ng-disabled="cwcForm.submitted" only-four-digits
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                                                            
                                                       <td><input type="number" id="d1aGirls7to11"
                                                            ng-model="cwcForm.d1aGirls7to11" ng-keyup="testEqualGirls('d1aGirls7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aGirls12to15"
                                                            ng-model="cwcForm.d1aGirls12to15" ng-keyup="testEqualGirls('d1aGirls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aGirls16to18"
                                                            ng-model="cwcForm.d1aGirls16to18" ng-keyup="testEqualGirls('d1aGirls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1aGirlsGreaterThan18"
                                                            ng-model="cwcForm.d1aGirlsGreaterThan18" ng-keyup="testEquald1aGirls16to18('d1aGirlsGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d1aGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls0to6-0)+Number(
                                                                        cwcForm.d1aGirls7to11-0)+Number(
                                                                        cwcForm.d1aGirls12to15-0)+Number(
                                                                        cwcForm.d1aGirls16to18-0)+Number(
                                                                        cwcForm.d1aGirlsGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
                                                           </td>
                                                            
                                                       <td><input readonly type="text" id="d1aGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(
                                                                        cwcForm.d1aBoys7to11-0)+Number(
                                                                        cwcForm.d1aBoys12to15-0)+Number(
                                                                        cwcForm.d1aBoys16to18-0)+Number(
                                                                        cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1aGirls0to6-0)+Number(
                                                                        cwcForm.d1aGirls7to11-0)+Number(
                                                                        cwcForm.d1aGirls12to15-0)+Number(
                                                                        cwcForm.d1aGirls16to18-0)+Number(
                                                                        cwcForm.d1aGirlsGreaterThan18-0)}}">
                                                       </td>
                                                      
                                                  </tr>
                                                  
                                                  <tr ng-show="showHideBasedOnFlag('d1aGrandTotal','d1aNameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of CCIs</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d1aNameOfCCIs" 
                                                            ng-model="cwcForm.d1aNameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d1aGrandTotal','d1aNameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                         <!-- <td colspan="13"><input type="text" id="d1aNameOfCCIs" 
                                                            ng-model="cwcForm.d1aNameOfCCIs" hundred-fifty-characters-validation
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackgroundofText tableinputWidth">
                                                       </td> -->
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.1.b
                                                                       No. of Children sent to Specialized Adoption Agency (SAA)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d1bBoys0to6"
                                                            ng-model="cwcForm.d1bBoys0to6" ng-keyup="testEqualBoys('d1bBoys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1bBoys7to11"
                                                            ng-model="cwcForm.d1bBoys7to11" ng-keyup="testEqualBoys('d1bBoys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1bBoys12to15"
                                                            ng-model="cwcForm.d1bBoys12to15" ng-keyup="testEqualBoys('d1bBoys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1bBoys16to18"
                                                            ng-model="cwcForm.d1bBoys16to18" ng-keyup="testEqualBoys('d1bBoys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1bBoysGreaterThan18"
                                                            ng-model="cwcForm.d1bBoysGreaterThan18" ng-keyup="testEqualBoys('d1bBoysGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d1bBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1bBoys0to6-0)+Number(
                                                                        cwcForm.d1bBoys7to11-0)+Number(
                                                                        cwcForm.d1bBoys12to15-0)+Number(
                                                                        cwcForm.d1bBoys16to18-0)+Number(
                                                                        cwcForm.d1bBoysGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth  readonlyStyle"
                                                             >
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1bGirls0to6"
                                                            ng-model="cwcForm.d1bGirls0to6" ng-keyup="testEqualGirls('d1bGirls0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1bGirls7to11"
                                                            ng-model="cwcForm.d1bGirls7to11" ng-keyup="testEqualGirls('d1bGirls7to11')"
                                                            ng-disabled="cwcForm.submitted" 
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1bGirls12to15"
                                                            ng-model="cwcForm.d1bGirls12to15" ng-keyup="testEqualGirls('d1bGirls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1bGirls16to18"
                                                            ng-model="cwcForm.d1bGirls16to18" ng-keyup="testEqualGirls('d1bGirls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1bGirlsGreaterThan18"
                                                            ng-model="cwcForm.d1bGirlsGreaterThan18" ng-keyup="testEqualGirls('d1bGirlsGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d1bGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1bGirls0to6-0)+Number(
                                                                        cwcForm.d1bGirls7to11-0)+Number(
                                                                        cwcForm.d1bGirls12to15-0)+Number(
                                                                        cwcForm.d1bGirls16to18-0)+Number(
                                                                        cwcForm.d1bGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth  readonlyStyle">
                                                            </td>
                                                            
                                                       <td><input readonly type="text" id="d1bGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d1bBoys0to6-0)+Number(
                                                                        cwcForm.d1bBoys7to11-0)+Number(
                                                                        cwcForm.d1bBoys12to15-0)+Number(
                                                                        cwcForm.d1bBoys16to18-0)+Number(
                                                                        cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1bGirls0to6-0)+Number(
                                                                        cwcForm.d1bGirls7to11-0)+Number(
                                                                        cwcForm.d1bGirls12to15-0)+Number(
                                                                        cwcForm.d1bGirls16to18-0)+Number(
                                                                        cwcForm.d1bGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr ng-show="showHideBasedOnFlag('d1bGrandTotal','d1bNameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of CCIs</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d1bNameOfCCIs"
                                                            ng-model="cwcForm.d1bNameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d1bGrandTotal','d1bNameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.1.c
                                                                      No. of Children Sent to Open Shelter</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d1cBoys0to6"
                                                            ng-model="cwcForm.d1cBoys0to6" ng-keyup="testEqualBoys('d1cBoys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1cBoys7to11"
                                                            ng-model="cwcForm.d1cBoys7to11" ng-keyup="testEqualBoys('d1cBoys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1cBoys12to15"
                                                            ng-model="cwcForm.d1cBoys12to15" ng-keyup="testEqualBoys('d1cBoys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1cBoys16to18"
                                                            ng-model="cwcForm.d1cBoys16to18" ng-keyup="testEqualBoys('d1cBoys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1cBoysGreaterThan18"
                                                            ng-model="cwcForm.d1cBoysGreaterThan18" ng-keyup="testEqualBoys('d1cBoysGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d1cBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1cBoys0to6-0)+Number(
                                                                        cwcForm.d1cBoys7to11-0)+Number(
                                                                        cwcForm.d1cBoys12to15-0)+Number(
                                                                        cwcForm.d1cBoys16to18-0)+Number(
                                                                        cwcForm.d1cBoysGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1cGirls0to6"
                                                            ng-model="cwcForm.d1cGirls0to6" ng-keyup="testEqualGirls('d1cGirls0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1cGirls7to11"
                                                            ng-model="cwcForm.d1cGirls7to11" ng-keyup="testEqualGirls('d1cGirls7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="d1cGirls12to15"
                                                            ng-model="cwcForm.d1cGirls12to15" ng-keyup="testEqualGirls('d1cGirls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="d1cGirls16to18"
                                                            ng-model="cwcForm.d1cGirls16to18" ng-keyup="testEqualGirls('d1cGirls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1cGirlsGreaterThan18"
                                                            ng-model="cwcForm.d1cGirlsGreaterThan18" ng-keyup="testEqualGirls('d1cGirlsGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d1cGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1cGirls0to6-0)+Number(
                                                                        cwcForm.d1cGirls7to11-0)+Number(
                                                                        cwcForm.d1cGirls12to15-0)+Number(
                                                                        cwcForm.d1cGirls16to18-0)+Number(
                                                                        cwcForm.d1cGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input readonly type="text" id="d1cGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d1cBoys0to6-0)+Number(
                                                                        cwcForm.d1cBoys7to11-0)+Number(
                                                                        cwcForm.d1cBoys12to15-0)+Number(
                                                                        cwcForm.d1cBoys16to18-0)+Number(
                                                                        cwcForm.d1cBoysGreaterThan18-0)+Number(cwcForm.d1cGirls0to6-0)+Number(
                                                                        cwcForm.d1cGirls7to11-0)+Number(
                                                                        cwcForm.d1cGirls12to15-0)+Number(
                                                                        cwcForm.d1cGirls16to18-0)+Number(
                                                                        cwcForm.d1cGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                    <tr ng-show="showHideBasedOnFlag('d1cGrandTotal','d1cNameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of CCIs</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d1cNameOfCCIs"
                                                            ng-model="cwcForm.d1cNameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d1cGrandTotal','d1cNameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.1.d
                                                                      No. of Children Sent to Fit Facility</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d1dBoys0to6"
                                                            ng-model="cwcForm.d1dBoys0to6" ng-keyup="testEqualBoys('d1dBoys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dBoys7to11"
                                                            ng-model="cwcForm.d1dBoys7to11" ng-keyup="testEqualBoys('d1dBoys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dBoys12to15"
                                                            ng-model="cwcForm.d1dBoys12to15" ng-keyup="testEqualBoys('d1dBoys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dBoys16to18"
                                                            ng-model="cwcForm.d1dBoys16to18" ng-keyup="testEqualBoys('d1dBoys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dBoysGreaterThan18"
                                                            ng-model="cwcForm.d1dBoysGreaterThan18" ng-keyup="testEqualBoys('d1dBoysGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="d1dBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1dBoys0to6-0)+Number(
                                                                   cwcForm.d1dBoys7to11-0)+Number(
                                                                   cwcForm.d1dBoys12to15-0)+Number(
                                                                   cwcForm.d1dBoys16to18-0)+Number(
                                                                   cwcForm.d1dBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dGirls0to6"
                                                            ng-model="cwcForm.d1dGirls0to6" ng-keyup="testEqualGirls('d1dGirls0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dGirls7to11"
                                                            ng-model="cwcForm.d1dGirls7to11" ng-keyup="testEqualGirls('d1dGirls7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dGirls12to15"
                                                            ng-model="cwcForm.d1dGirls12to15" ng-keyup="testEqualGirls('d1dGirls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dGirls16to18"
                                                            ng-model="cwcForm.d1dGirls16to18" ng-keyup="testEqualGirls('d1dGirls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1dGirlsGreaterThan18"
                                                            ng-model="cwcForm.d1dGirlsGreaterThan18" ng-keyup="testEqualGirls('d1dGirlsGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="d1dGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1dGirls0to6-0)+Number(
                                                                        cwcForm.d1dGirls7to11-0)+Number(
                                                                        cwcForm.d1dGirls12to15-0)+Number(
                                                                        cwcForm.d1dGirls16to18-0)+Number(
                                                                        cwcForm.d1dGirlsGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
                                                           </td>
                                                            
                                                       <td><input readonly type="text" id="d1dGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d1dBoys0to6-0)+Number(
                                                                   cwcForm.d1dBoys7to11-0)+Number(
                                                                   cwcForm.d1dBoys12to15-0)+Number(
                                                                   cwcForm.d1dBoys16to18-0)+Number(
                                                                   cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1dGirls0to6-0)+Number(
                                                                   cwcForm.d1dGirls7to11-0)+Number(
                                                                   cwcForm.d1dGirls12to15-0)+Number(
                                                                   cwcForm.d1dGirls16to18-0)+Number(
                                                                   cwcForm.d1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                    <tr ng-show="showHideBasedOnFlag('d1dGrandTotal','d1dNameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of CCIs</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d1dNameOfCCIs"
                                                            ng-model="cwcForm.d1dNameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d1dGrandTotal','d1dNameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.1.e
                                                                      No. of Children Sent to Institutions Registered (under JJ
                                                                      Act)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d1eBoys0to6"
                                                            ng-model="cwcForm.d1eBoys0to6" ng-keyup="testEqualBoys('d1eBoys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1eBoys7to11"
                                                            ng-model="cwcForm.d1eBoys7to11" ng-keyup="testEqualBoys('d1eBoys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1eBoys12to15"
                                                            ng-model="cwcForm.d1eBoys12to15" ng-keyup="testEqualBoys('d1eBoys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                          </td>
                                                            
                                                       <td><input type="number" id="d1eBoys16to18"
                                                            ng-model="cwcForm.d1eBoys16to18" ng-keyup="testEqualBoys('d1eBoys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1eBoysGreaterThan18"
                                                            ng-model="cwcForm.d1eBoysGreaterThan18" ng-keyup="testEqualBoys('d1eBoysGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d1eBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1eBoys0to6-0)+Number(
                                                                        cwcForm.d1eBoys7to11-0)+Number(
                                                                        cwcForm.d1eBoys12to15-0)+Number(
                                                                        cwcForm.d1eBoys16to18-0)+Number(
                                                                        cwcForm.d1eBoysGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1eGirls0to6"
                                                            ng-model="cwcForm.d1eGirls0to6" ng-keyup="testEqualGirls('d1eGirls0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1eGirls7to11"
                                                            ng-model="cwcForm.d1eGirls7to11" ng-keyup="testEqualGirls('d1eGirls7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1eGirls12to15"
                                                            ng-model="cwcForm.d1eGirls12to15" ng-keyup="testEqualGirls('d1eGirls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d1eGirls16to18"
                                                            ng-model="cwcForm.d1eGirls16to18" ng-keyup="testEqualGirls('d1eGirls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d1eGirlsGreaterThan18"
                                                            ng-model="cwcForm.d1eGirlsGreaterThan18" ng-keyup="testEqualGirls('d1eGirlsGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="d1eGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d1eGirls0to6-0)+Number(
                                                                        cwcForm.d1eGirls7to11-0)+Number(
                                                                        cwcForm.d1eGirls12to15-0)+Number(
                                                                        cwcForm.d1eGirls16to18-0)+Number(
                                                                        cwcForm.d1eGirlsGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input readonly type="text" id="d1eGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d1eBoys0to6-0)+Number(
                                                              cwcForm.d1eBoys7to11-0)+Number(
                                                              cwcForm.d1eBoys12to15-0)+Number(
                                                              cwcForm.d1eBoys16to18-0)+Number(
                                                              cwcForm.d1eBoysGreaterThan18-0)+Number(cwcForm.d1eGirls0to6-0)+Number(
                                                              cwcForm.d1eGirls7to11-0)+Number(
                                                              cwcForm.d1eGirls12to15-0)+Number(
                                                              cwcForm.d1eGirls16to18-0)+Number(
                                                              cwcForm.d1eGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                    <tr ng-show="showHideBasedOnFlag('d1eGrandTotal','d1eNameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of CCIs</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d1eNameOfCCIs"
                                                            ng-model="cwcForm.d1eNameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d1eGrandTotal','d1eNameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">D.1.
                                                                      Total Children Sent to Child Care Institutions (CCIs)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="d1Boys0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(cwcForm.d1bBoys0to6-0)+Number(cwcForm.d1cBoys0to6-0)+Number(cwcForm.d1dBoys0to6-0)+Number(cwcForm.d1eBoys0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Boys7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys7to11-0)+Number(cwcForm.d1bBoys7to11-0)+Number(cwcForm.d1cBoys7to11-0)+Number(cwcForm.d1dBoys7to11-0)+Number(cwcForm.d1eBoys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Boys12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys12to15-0)+Number(cwcForm.d1bBoys12to15-0)+Number(cwcForm.d1cBoys12to15-0)+Number(cwcForm.d1dBoys12to15-0)+Number(cwcForm.d1eBoys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Boys16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys16to18-0)+Number(cwcForm.d1bBoys16to18-0)+Number(cwcForm.d1cBoys16to18-0)+Number(cwcForm.d1dBoys16to18-0)+Number(cwcForm.d1eBoys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1BoysGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1cBoysGreaterThan18-0)+Number(cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1eBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1BoysTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(cwcForm.d1bBoys0to6-0)+Number(cwcForm.d1cBoys0to6-0)+Number(cwcForm.d1dBoys0to6-0)+Number(cwcForm.d1eBoys0to6-0)+Number(cwcForm.d1aBoys7to11-0)+Number(cwcForm.d1bBoys7to11-0)+Number(cwcForm.d1cBoys7to11-0)+Number(cwcForm.d1dBoys7to11-0)+Number(cwcForm.d1eBoys7to11
                                                            -0)+Number(cwcForm.d1aBoys12to15-0)+Number(cwcForm.d1bBoys12to15-0)+Number(cwcForm.d1cBoys12to15-0)+Number(cwcForm.d1dBoys12to15-0)+Number(cwcForm.d1eBoys12to15-0)+Number(
                                                            cwcForm.d1aBoys16to18-0)+Number(cwcForm.d1bBoys16to18-0)+Number(cwcForm.d1cBoys16to18-0)+Number(cwcForm.d1dBoys16to18-0)+Number(cwcForm.d1eBoys16to18-0)+Number(
                                                            cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1cBoysGreaterThan18-0)+Number(cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1eBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Girls0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls0to6-0)+Number(cwcForm.d1bGirls0to6-0)+Number(cwcForm.d1cGirls0to6-0)+Number(cwcForm.d1dGirls0to6-0)+Number(cwcForm.d1eGirls0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Girls7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls7to11-0)+Number(cwcForm.d1bGirls7to11-0)+Number(cwcForm.d1cGirls7to11-0)+Number(cwcForm.d1dGirls7to11-0)+Number(cwcForm.d1eGirls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Girls12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls12to15-0)+Number(cwcForm.d1bGirls12to15-0)+Number(cwcForm.d1cGirls12to15-0)+Number(cwcForm.d1dGirls12to15-0)+Number(cwcForm.d1eGirls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1Girls16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls16to18-0)+Number(cwcForm.d1bGirls16to18-0)+Number(cwcForm.d1cGirls16to18-0)+Number(cwcForm.d1dGirls16to18-0)+Number(cwcForm.d1eGirls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1GirlsGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirlsGreaterThan18-0)+Number(cwcForm.d1bGirlsGreaterThan18-0)+Number(cwcForm.d1cGirlsGreaterThan18-0)+Number(cwcForm.d1dGirlsGreaterThan18-0)+Number(cwcForm.d1eGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d1GirlsTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls0to6-0)+Number(cwcForm.d1bGirls0to6-0)+Number(cwcForm.d1cGirls0to6-0)+Number(cwcForm.d1dGirls0to6-0)+Number(cwcForm.d1eGirls0to6-0)+Number(
                                                            cwcForm.d1aGirls7to11-0)+Number(cwcForm.d1bGirls7to11-0)+Number(cwcForm.d1cGirls7to11-0)+Number(cwcForm.d1dGirls7to11-0)+Number(cwcForm.d1eGirls7to11-0)+Number(
                                                            cwcForm.d1aGirls12to15-0)+Number(cwcForm.d1bGirls12to15-0)+Number(cwcForm.d1cGirls12to15-0)+Number(cwcForm.d1dGirls12to15-0)+Number(cwcForm.d1eGirls12to15-0)+Number(
                                                            cwcForm.d1aGirls16to18-0)+Number(cwcForm.d1bGirls16to18-0)+Number(cwcForm.d1cGirls16to18-0)+Number(cwcForm.d1dGirls16to18-0)+Number(cwcForm.d1eGirls16to18-0)+Number(
                                                            cwcForm.d1aGirlsGreaterThan18-0)+Number(cwcForm.d1bGirlsGreaterThan18-0)+Number(cwcForm.d1cGirlsGreaterThan18-0)+Number(cwcForm.d1dGirlsGreaterThan18-0)+Number(cwcForm.d1eGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="d1GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(cwcForm.d1bBoys0to6-0)+Number(cwcForm.d1cBoys0to6-0)+Number(cwcForm.d1dBoys0to6-0)+Number(cwcForm.d1eBoys0to6-0)+Number(cwcForm.d1aBoys7to11-0)+Number(cwcForm.d1bBoys7to11-0)+Number(cwcForm.d1cBoys7to11-0)+Number(cwcForm.d1dBoys7to11-0)+Number(cwcForm.d1eBoys7to11
                                                            -0)+Number(cwcForm.d1aBoys12to15-0)+Number(cwcForm.d1bBoys12to15-0)+Number(cwcForm.d1cBoys12to15-0)+Number(cwcForm.d1dBoys12to15-0)+Number(cwcForm.d1eBoys12to15-0)+Number(
                                                            cwcForm.d1aBoys16to18-0)+Number(cwcForm.d1bBoys16to18-0)+Number(cwcForm.d1cBoys16to18-0)+Number(cwcForm.d1dBoys16to18-0)+Number(cwcForm.d1eBoys16to18-0)+Number(
                                                            cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1cBoysGreaterThan18-0)+Number(cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1eBoysGreaterThan18-0)+Number(
                                                            cwcForm.d1aGirls0to6-0)+Number(cwcForm.d1bGirls0to6-0)+Number(cwcForm.d1cGirls0to6-0)+Number(cwcForm.d1dGirls0to6-0)+Number(cwcForm.d1eGirls0to6-0)+Number(
                                                            cwcForm.d1aGirls7to11-0)+Number(cwcForm.d1bGirls7to11-0)+Number(cwcForm.d1cGirls7to11-0)+Number(cwcForm.d1dGirls7to11-0)+Number(cwcForm.d1eGirls7to11-0)+Number(
                                                            cwcForm.d1aGirls12to15-0)+Number(cwcForm.d1bGirls12to15-0)+Number(cwcForm.d1cGirls12to15-0)+Number(cwcForm.d1dGirls12to15-0)+Number(cwcForm.d1eGirls12to15-0)+Number(
                                                            cwcForm.d1aGirls16to18-0)+Number(cwcForm.d1bGirls16to18-0)+Number(cwcForm.d1cGirls16to18-0)+Number(cwcForm.d1dGirls16to18-0)+Number(cwcForm.d1eGirls16to18-0)+Number(
                                                            cwcForm.d1aGirlsGreaterThan18-0)+Number(cwcForm.d1bGirlsGreaterThan18-0)+Number(cwcForm.d1cGirlsGreaterThan18-0)+Number(cwcForm.d1dGirlsGreaterThan18-0)+Number(cwcForm.d1eGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.2.
                                                                      No. of Children Sent to Fit Person</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d2Boys0to6"
                                                            ng-model="cwcForm.d2Boys0to6" ng-keyup="testEqualBoys('d2Boys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d2Boys7to11"
                                                            ng-model="cwcForm.d2Boys7to11" ng-keyup="testEqualBoys('d2Boys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d2Boys12to15"
                                                            ng-model="cwcForm.d2Boys12to15" ng-keyup="testEqualBoys('d2Boys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d2Boys16to18"
                                                            ng-model="cwcForm.d2Boys16to18" ng-keyup="testEqualBoys('d2Boys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d2BoysGreaterThan18" ng-keyup="testEqualBoys('d2BoysGreaterThan18')"
                                                            ng-model="cwcForm.d2BoysGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d2BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d2Boys0to6-0)+Number(
                                                                        cwcForm.d2Boys7to11-0)+Number(
                                                                        cwcForm.d2Boys12to15-0)+Number(
                                                                        cwcForm.d2Boys16to18-0)+Number(
                                                                        cwcForm.d2BoysGreaterThan18-0)}}"
                                                            
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d2Girls0to6"
                                                            ng-model="cwcForm.d2Girls0to6" ng-keyup="testEqualGirls('d2Girls0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d2Girls7to11"
                                                            ng-model="cwcForm.d2Girls7to11" ng-keyup="testEqualGirls('d2Girls7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d2Girls12to15"
                                                            ng-model="cwcForm.d2Girls12to15" ng-keyup="testEqualGirls('d2Girls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d2Girls16to18"
                                                            ng-model="cwcForm.d2Girls16to18" ng-keyup="testEqualGirls('d2Girls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d2GirlsGreaterThan18"
                                                            ng-model="cwcForm.d2GirlsGreaterThan18" ng-keyup="testEqualGirls('d2GirlsGreaterThan18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="d2GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d2Girls0to6-0)+Number(
                                                                        cwcForm.d2Girls7to11-0)+Number(
                                                                        cwcForm.d2Girls12to15-0)+Number(
                                                                        cwcForm.d2Girls16to18-0)+Number(
                                                                        cwcForm.d2GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input readonly type="text" id="d2GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d2Boys0to6-0)+Number(
                                                                        cwcForm.d2Boys7to11-0)+Number(
                                                                        cwcForm.d2Boys12to15-0)+Number(
                                                                        cwcForm.d2Boys16to18-0)+Number(
                                                                        cwcForm.d2BoysGreaterThan18-0)+Number(cwcForm.d2Girls0to6-0)+Number(
                                                                        cwcForm.d2Girls7to11-0)+Number(
                                                                        cwcForm.d2Girls12to15-0)+Number(
                                                                        cwcForm.d2Girls16to18-0)+Number(
                                                                        cwcForm.d2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr ng-show="showHideBasedOnFlag('d2GrandTotal','d2NameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of fit persons</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d2NameOfCCIs"
                                                            ng-model="cwcForm.d2NameOfCCIs" spellcheck="false"
                                                            ng-disabled="cwcForm.submitted" two-fifty-characters-validation-comma
                                                            ng-required="showHideBasedOnFlag('d2GrandTotal','d2NameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.3.
                                                                      Children sent to Alternative Care (Foster care, sponsorship and After care)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d3Boys0to6"
                                                            ng-model="cwcForm.d3Boys0to6" ng-keyup="testEqualBoys('d3Boys0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d3Boys7to11"
                                                            ng-model="cwcForm.d3Boys7to11" ng-keyup="testEqualBoys('d3Boys7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d3Boys12to15"
                                                            ng-model="cwcForm.d3Boys12to15" ng-keyup="testEqualBoys('d3Boys12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            <div id="d6b" class="errorDisp"></div></td>
                                                            
                                                       <td><input type="number" id="d3Boys16to18"
                                                            ng-model="cwcForm.d3Boys16to18" ng-keyup="testEqualBoys('d3Boys16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                          </td>
                                                            
                                                       <td><input type="number" id="d3BoysGreaterThan18" ng-keyup="testEqualBoys('d3BoysGreaterThan18')"
                                                            ng-model="cwcForm.d3BoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="d3BoysTotal" readonly
                                                       tabindex= -1 value="{{Number(cwcForm.d3Boys0to6-0)+Number(
                                                                   cwcForm.d3Boys7to11-0)+Number(
                                                                   cwcForm.d3Boys12to15-0)+Number(
                                                                   cwcForm.d3Boys16to18-0)+Number(
                                                                   cwcForm.d3BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
                                                          </td>
                                                            
                                                       <td><input type="number" id="d3Girls0to6"
                                                            ng-model="cwcForm.d3Girls0to6" ng-keyup="testEqualGirls('d3Girls0to6')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d3Girls7to11"
                                                            ng-model="cwcForm.d3Girls7to11" ng-keyup="testEqualGirls('d3Girls7to11')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d3Girls12to15"
                                                            ng-model="cwcForm.d3Girls12to15" ng-keyup="testEqualGirls('d3Girls12to15')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d3Girls16to18"
                                                            ng-model="cwcForm.d3Girls16to18" ng-keyup="testEqualGirls('d3Girls16to18')"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d3GirlsGreaterThan18" ng-keyup="testEqualGirls('d3GirlsGreaterThan18')"
                                                            ng-model="cwcForm.d3GirlsGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d3GirlsTotal" readonly
                                                            
                                                            tabindex= -1 value="{{Number(cwcForm.d3Girls0to6-0)+Number(
                                                                        cwcForm.d3Girls7to11-0)+Number(
                                                                        cwcForm.d3Girls12to15-0)+Number(
                                                                        cwcForm.d3Girls16to18-0)+Number(
                                                                        cwcForm.d3GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
                                                           </td>
                                                            
                                                       <td><input readonly type="text" id="d3GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d3Boys0to6-0)+Number(
                                                                        cwcForm.d3Boys7to11-0)+Number(
                                                                        cwcForm.d3Boys12to15-0)+Number(
                                                                        cwcForm.d3Boys16to18-0)+Number(
                                                                        cwcForm.d3BoysGreaterThan18-0)+Number(cwcForm.d3Girls0to6-0)+Number(
                                                                        cwcForm.d3Girls7to11-0)+Number(
                                                                        cwcForm.d3Girls12to15-0)+Number(
                                                                        cwcForm.d3Girls16to18-0)+Number(
                                                                        cwcForm.d3GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                    <tr ng-show="showHideBasedOnFlag('d3GrandTotal','d3NameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      Names of institutions</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d3NameOfCCIs"
                                                            ng-model="cwcForm.d3NameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d3GrandTotal','d3NameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.4.
                                                                      Other Institutions Where Children sent</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d4Boys0to6"  ng-keyup="testEqualBoys('d4Boys0to6')"
                                                            ng-model="cwcForm.d4Boys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d4Boys7to11"  ng-keyup="testEqualBoys('d4Boys7to11')"
                                                            ng-model="cwcForm.d4Boys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                          </td>
                                                            
                                                       <td><input type="number" id="d4Boys12to15"  ng-keyup="testEqualBoys('d4Boys12to15')"
                                                            ng-model="cwcForm.d4Boys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d4Boys16to18"  ng-keyup="testEqualBoys('d4Boys16to18')"
                                                            ng-model="cwcForm.d4Boys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d4BoysGreaterThan18"  ng-keyup="testEqualBoys('d4BoysGreaterThan18')"
                                                            ng-model="cwcForm.d4BoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="text" id="d4BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d4Boys0to6-0)+Number(
                                                                        cwcForm.d4Boys7to11-0)+Number(
                                                                        cwcForm.d4Boys12to15-0)+Number(
                                                                        cwcForm.d4Boys16to18-0)+Number(
                                                                        cwcForm.d4BoysGreaterThan18-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d4Girls0to6"  ng-keyup="testEqualGirls('d4Girls0to6')"
                                                            ng-model="cwcForm.d4Girls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="d4Girls7to11"  ng-keyup="testEqualGirls('d4Girls7to11')"
                                                            ng-model="cwcForm.d4Girls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                             
                                                       <td><input type="number" id="d4Girls12to15"  ng-keyup="testEqualGirls('d4Girls12to15')"
                                                            ng-model="cwcForm.d4Girls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d4Girls16to18"  ng-keyup="testEqualGirls('d4Girls16to18')"
                                                            ng-model="cwcForm.d4Girls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="d4GirlsGreaterThan18"  ng-keyup="testEqualGirls('d4GirlsGreaterThan18')"
                                                            ng-model="cwcForm.d4GirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="d4GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.d4Girls0to6-0)+Number(
                                                                        cwcForm.d4Girls7to11-0)+Number(
                                                                        cwcForm.d4Girls12to15-0)+Number(
                                                                        cwcForm.d4Girls16to18-0)+Number(
                                                                        cwcForm.d4GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle">
                                                            </td>
                                                            
                                                       <td><input readonly type="text" id="d4GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.d4Boys0to6-0)+Number(
                                                                        cwcForm.d4Boys7to11-0)+Number(
                                                                        cwcForm.d4Boys12to15-0)+Number(
                                                                        cwcForm.d4Boys16to18-0)+Number(
                                                                        cwcForm.d4BoysGreaterThan18-0)+Number(cwcForm.d4Girls0to6-0)+Number(
                                                                        cwcForm.d4Girls7to11-0)+Number(
                                                                        cwcForm.d4Girls12to15-0)+Number(
                                                                        cwcForm.d4Girls16to18-0)+Number(
                                                                        cwcForm.d4GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr ng-show="showHideBasedOnFlag('d4GrandTotal','d4NameOfCCIs')">
                                                  		<td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                     Names of institutions</label>
                                                            </div>
                                                       </td>
                                                        <td colspan="13"><input type="text" id="d4NameOfCCIs"
                                                            ng-model="cwcForm.d4NameOfCCIs" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted" spellcheck="false"
                                                            ng-required="showHideBasedOnFlag('d4GrandTotal','d4NameOfCCIs')" class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                             <tr>
                                                  <td class="tabletdWidthfourCol">
                                                       <div class="textAlign">
                                                            <label class="control-label totalFont" for="textinput">D.5.
                                                                 Total No. Cases Referred in the Reporting Month</label>
                                                       </div>
                                                  </td>
                                                  <td><input type="text" id="d5Boys0to6"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(
                                                       cwcForm.d1bBoys0to6-0)+Number(
                                                       cwcForm.d1cBoys0to6-0)+Number(
                                                       cwcForm.d1dBoys0to6-0)+Number(
                                                       cwcForm.d1eBoys0to6-0)+Number(
                                                       cwcForm.d2Boys0to6-0)+Number(
                                                       cwcForm.d3Boys0to6-0)+Number(
                                                       cwcForm.d4Boys0to6-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Boys7to11"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aBoys7to11-0)+Number(cwcForm.d1bBoys7to11-0)+Number(cwcForm.d1cBoys7to11-0)+Number(cwcForm.d1dBoys7to11-0)+Number(cwcForm.d1eBoys7to11-0)+Number(cwcForm.d2Boys7to11-0)+Number(cwcForm.d3Boys7to11-0)+Number(cwcForm.d4Boys7to11-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Boys12to15" readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aBoys12to15-0)+Number(cwcForm.d1bBoys12to15-0)+Number(cwcForm.d1cBoys12to15-0)+Number(cwcForm.d1dBoys12to15-0)+Number(cwcForm.d1eBoys12to15-0)+Number(cwcForm.d2Boys12to15-0)+Number(cwcForm.d3Boys12to15-0)+Number(cwcForm.d4Boys12to15-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Boys16to18"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aBoys16to18-0)+Number(cwcForm.d1bBoys16to18-0)+Number(cwcForm.d1cBoys16to18-0)+Number(cwcForm.d1dBoys16to18-0)+Number(cwcForm.d1eBoys16to18-0)+Number(cwcForm.d2Boys16to18-0)+Number(cwcForm.d3Boys16to18-0)+Number(cwcForm.d4Boys16to18-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5BoysGreaterThan18"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1cBoysGreaterThan18-0)+Number(cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1eBoysGreaterThan18-0)+Number(cwcForm.d2BoysGreaterThan18-0)+Number(cwcForm.d3BoysGreaterThan18-0)+Number(cwcForm.d4BoysGreaterThan18-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5BoysTotal"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(
                                                       cwcForm.d1bBoys0to6-0)+Number(
                                                       cwcForm.d1cBoys0to6-0)+Number(
                                                       cwcForm.d1dBoys0to6-0)+Number(
                                                       cwcForm.d1eBoys0to6-0)+Number(
                                                       cwcForm.d2Boys0to6-0)+Number(
                                                       cwcForm.d3Boys0to6-0)+Number(
                                                       cwcForm.d4Boys0to6-0)+Number(
                                                       cwcForm.d1aBoys7to11-0)+Number(cwcForm.d1bBoys7to11-0)+Number(cwcForm.d1cBoys7to11-0)+Number(
                                                       cwcForm.d1dBoys7to11-0)+Number(cwcForm.d1eBoys7to11-0)+Number(cwcForm.d2Boys7to11-0)+Number(
                                                       cwcForm.d3Boys7to11-0)+Number(cwcForm.d4Boys7to11-0)+Number(
                                                       cwcForm.d1aBoys12to15-0)+Number(cwcForm.d1bBoys12to15-0)+Number(cwcForm.d1cBoys12to15-0)+Number(
                                                       cwcForm.d1dBoys12to15-0)+Number(cwcForm.d1eBoys12to15-0)+Number(cwcForm.d2Boys12to15-0)+Number(cwcForm.d3Boys12to15-0)+Number(cwcForm.d4Boys12to15-0)+Number(
                                                       cwcForm.d1aBoys16to18-0)+Number(cwcForm.d1bBoys16to18-0)+Number(cwcForm.d1cBoys16to18-0)+Number(
                                                       cwcForm.d1dBoys16to18-0)+Number(cwcForm.d1eBoys16to18-0)+Number(cwcForm.d2Boys16to18-0)+Number(
                                                       cwcForm.d3Boys16to18-0)+Number(cwcForm.d4Boys16to18-0)+Number(
                                                       cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1cBoysGreaterThan18-0)+Number(
                                                       cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1eBoysGreaterThan18-0)+Number(cwcForm.d2BoysGreaterThan18-0)+Number(
                                                       cwcForm.d3BoysGreaterThan18-0)+Number(cwcForm.d4BoysGreaterThan18
                                                       -0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Girls0to6"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aGirls0to6-0)+Number(cwcForm.d1bGirls0to6-0)+Number(cwcForm.d1cGirls0to6-0)+Number(cwcForm.d1dGirls0to6-0)+Number(cwcForm.d1eGirls0to6-0)+Number(cwcForm.d2Girls0to6-0)+Number(cwcForm.d3Girls0to6-0)+Number(cwcForm.d4Girls0to6-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Girls7to11"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aGirls7to11-0)+Number(cwcForm.d1bGirls7to11-0)+Number(cwcForm.d1cGirls7to11-0)+Number(cwcForm.d1dGirls7to11-0)+Number(cwcForm.d1eGirls7to11-0)+Number(cwcForm.d2Girls7to11-0)+Number(cwcForm.d3Girls7to11-0)+Number(cwcForm.d4Girls7to11-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Girls12to15"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aGirls12to15-0)+Number(cwcForm.d1bGirls12to15-0)+Number(cwcForm.d1cGirls12to15-0)+Number(cwcForm.d1dGirls12to15-0)+Number(cwcForm.d1eGirls12to15-0)+Number(cwcForm.d2Girls12to15-0)+Number(cwcForm.d3Girls12to15-0)+Number(cwcForm.d4Girls12to15-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5Girls16to18"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aGirls16to18-0)+Number(cwcForm.d1bGirls16to18-0)+Number(cwcForm.d1cGirls16to18-0)+Number(cwcForm.d1dGirls16to18-0)+Number(cwcForm.d1eGirls16to18-0)+Number(cwcForm.d2Girls16to18-0)+Number(cwcForm.d3Girls16to18-0)+Number(cwcForm.d4Girls16to18-0)}}">
                                                       </td>
                                                  <td><input type="text" id="d5GirlsGreaterThan18"  readonly
                                                        required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                       tabindex= -1 value="{{Number(cwcForm.d1aGirlsGreaterThan18-0)+Number(cwcForm.d1bGirlsGreaterThan18-0)+Number(cwcForm.d1cGirlsGreaterThan18-0)+Number(cwcForm.d1dGirlsGreaterThan18-0)+Number(cwcForm.d1eGirlsGreaterThan18-0)+Number(cwcForm.d2GirlsGreaterThan18-0)+Number(cwcForm.d3GirlsGreaterThan18-0)+Number(cwcForm.d4GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="d5GirlsTotal"
                                                            readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aGirls0to6-0)+Number(cwcForm.d1bGirls0to6-0)+Number(cwcForm.d1cGirls0to6-0)+Number(cwcForm.d1dGirls0to6-0)+Number(cwcForm.d1eGirls0to6-0)+Number(cwcForm.d2Girls0to6-0)+Number(cwcForm.d3Girls0to6-0)+Number(cwcForm.d4Girls0to6-0)+Number(
                                                            cwcForm.d1aGirls7to11-0)+Number(cwcForm.d1bGirls7to11-0)+Number(cwcForm.d1cGirls7to11-0)+Number(cwcForm.d1dGirls7to11-0)+Number(cwcForm.d1eGirls7to11-0)+Number(cwcForm.d2Girls7to11-0)+Number(cwcForm.d3Girls7to11-0)+Number(cwcForm.d4Girls7to11-0)+Number(
                                                            cwcForm.d1aGirls12to15-0)+Number(cwcForm.d1bGirls12to15-0)+Number(cwcForm.d1cGirls12to15-0)+Number(cwcForm.d1dGirls12to15-0)+Number(cwcForm.d1eGirls12to15-0)+Number(cwcForm.d2Girls12to15-0)+Number(cwcForm.d3Girls12to15-0)+Number(cwcForm.d4Girls12to15-0)+Number(
                                                            cwcForm.d1aGirls16to18-0)+Number(cwcForm.d1bGirls16to18-0)+Number(cwcForm.d1cGirls16to18-0)+Number(cwcForm.d1dGirls16to18-0)+Number(cwcForm.d1eGirls16to18-0)+Number(cwcForm.d2Girls16to18-0)+Number(cwcForm.d3Girls16to18-0)+Number(cwcForm.d4Girls16to18-0)+Number(
                                                            cwcForm.d1aGirlsGreaterThan18-0)+Number(cwcForm.d1bGirlsGreaterThan18-0)+Number(cwcForm.d1cGirlsGreaterThan18-0)+Number(cwcForm.d1dGirlsGreaterThan18-0)+Number(cwcForm.d1eGirlsGreaterThan18-0)+Number(cwcForm.d2GirlsGreaterThan18-0)+Number(cwcForm.d3GirlsGreaterThan18-0)+Number(cwcForm.d4GirlsGreaterThan18
                                                            -0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="d5GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.d1aBoys0to6-0)+Number(
                                                       cwcForm.d1bBoys0to6-0)+Number(
                                                       cwcForm.d1cBoys0to6-0)+Number(
                                                       cwcForm.d1dBoys0to6-0)+Number(
                                                       cwcForm.d1eBoys0to6-0)+Number(
                                                       cwcForm.d2Boys0to6-0)+Number(
                                                       cwcForm.d3Boys0to6-0)+Number(
                                                       cwcForm.d4Boys0to6-0)+Number(
                                                       cwcForm.d1aBoys7to11-0)+Number(cwcForm.d1bBoys7to11-0)+Number(cwcForm.d1cBoys7to11-0)+Number(
                                                       cwcForm.d1dBoys7to11-0)+Number(cwcForm.d1eBoys7to11-0)+Number(cwcForm.d2Boys7to11-0)+Number(
                                                       cwcForm.d3Boys7to11-0)+Number(cwcForm.d4Boys7to11-0)+Number(
                                                       cwcForm.d1aBoys12to15-0)+Number(cwcForm.d1bBoys12to15-0)+Number(cwcForm.d1cBoys12to15-0)+Number(
                                                       cwcForm.d1dBoys12to15-0)+Number(cwcForm.d1eBoys12to15-0)+Number(cwcForm.d2Boys12to15-0)+Number(cwcForm.d3Boys12to15-0)+Number(cwcForm.d4Boys12to15-0)+Number(
                                                       cwcForm.d1aBoys16to18-0)+Number(cwcForm.d1bBoys16to18-0)+Number(cwcForm.d1cBoys16to18-0)+Number(
                                                       cwcForm.d1dBoys16to18-0)+Number(cwcForm.d1eBoys16to18-0)+Number(cwcForm.d2Boys16to18-0)+Number(
                                                       cwcForm.d3Boys16to18-0)+Number(cwcForm.d4Boys16to18-0)+Number(
                                                       cwcForm.d1aBoysGreaterThan18-0)+Number(cwcForm.d1bBoysGreaterThan18-0)+Number(cwcForm.d1cBoysGreaterThan18-0)+Number(
                                                       cwcForm.d1dBoysGreaterThan18-0)+Number(cwcForm.d1eBoysGreaterThan18-0)+Number(cwcForm.d2BoysGreaterThan18-0)+Number(
                                                       cwcForm.d3BoysGreaterThan18-0)+Number(cwcForm.d4BoysGreaterThan18-0)+Number(cwcForm.d1aGirls0to6-0)+Number(cwcForm.d1bGirls0to6-0)+Number(cwcForm.d1cGirls0to6-0)+Number(cwcForm.d1dGirls0to6-0)+Number(cwcForm.d1eGirls0to6-0)+Number(cwcForm.d2Girls0to6-0)+Number(cwcForm.d3Girls0to6-0)+Number(cwcForm.d4Girls0to6-0)+Number(
                                                       cwcForm.d1aGirls7to11-0)+Number(cwcForm.d1bGirls7to11-0)+Number(cwcForm.d1cGirls7to11-0)+Number(cwcForm.d1dGirls7to11-0)+Number(cwcForm.d1eGirls7to11-0)+Number(cwcForm.d2Girls7to11-0)+Number(cwcForm.d3Girls7to11-0)+Number(cwcForm.d4Girls7to11-0)+Number(
                                                       cwcForm.d1aGirls12to15-0)+Number(cwcForm.d1bGirls12to15-0)+Number(cwcForm.d1cGirls12to15-0)+Number(cwcForm.d1dGirls12to15-0)+Number(cwcForm.d1eGirls12to15-0)+Number(cwcForm.d2Girls12to15-0)+Number(cwcForm.d3Girls12to15-0)+Number(cwcForm.d4Girls12to15-0)+Number(
                                                       cwcForm.d1aGirls16to18-0)+Number(cwcForm.d1bGirls16to18-0)+Number(cwcForm.d1cGirls16to18-0)+Number(cwcForm.d1dGirls16to18-0)+Number(cwcForm.d1eGirls16to18-0)+Number(cwcForm.d2Girls16to18-0)+Number(cwcForm.d3Girls16to18-0)+Number(cwcForm.d4Girls16to18-0)+Number(
                                                       cwcForm.d1aGirlsGreaterThan18-0)+Number(cwcForm.d1bGirlsGreaterThan18-0)+Number(cwcForm.d1cGirlsGreaterThan18-0)+Number(cwcForm.d1dGirlsGreaterThan18-0)+Number(cwcForm.d1eGirlsGreaterThan18-0)+Number(cwcForm.d2GirlsGreaterThan18-0)+Number(cwcForm.d3GirlsGreaterThan18-0)+Number(cwcForm.d4GirlsGreaterThan18
                                                       -0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!--------------------------------------End of D section ------------------------------------------>

                                   <!-------------------------------------- E section ------------------------------------------>
                                   <div class="b4sectionheading" id="caseE"></div>
                                   <div class="grey-header headMarg">E. Disposal of Cases (Old
                                        and New) in the Reporting Month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableE">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
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
                                                                 <label class="control-label" for="textinput">E.1.
                                                                      No. of Cases Transferred to Other District/State/Country</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e1Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Boys0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="e1Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Boys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="e1Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Boys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="number" id="e1Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Boys16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            </td>
                                                            
                                                       <td><input type="number" id="e1BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1BoysGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                           </td>
                                                            
                                                       <td><input type="text" id="e1BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys0to6-0)+Number(
                                                                        cwcForm.e1Boys7to11-0)+Number(
                                                                        cwcForm.e1Boys12to15-0)+Number(
                                                                        cwcForm.e1Boys16to18-0)+Number(
                                                                        cwcForm.e1BoysGreaterThan18-0)}}"
                                                             ng-keyup="validateEboys('e1b'-0)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits>
                                                            <div id="e1b" class="errorDisp"></div></td>
                                                            
                                                       <td><input type="number" id="e1Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Girls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e1Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Girls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e1Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Girls12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e1Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1Girls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e1GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e1GirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e1GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e1Girls0to6-0)+Number(
                                                                        cwcForm.e1Girls7to11-0)+Number(
                                                                        cwcForm.e1Girls12to15-0)+Number(
                                                                        cwcForm.e1Girls16to18-0)+Number(
                                                                        cwcForm.e1GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                            
                                                       <td><input readonly type="text" id="e1GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys0to6-0)+Number(
                                                                        cwcForm.e1Boys7to11-0)+Number(
                                                                        cwcForm.e1Boys12to15-0)+Number(
                                                                        cwcForm.e1Boys16to18-0)+Number(
                                                                        cwcForm.e1BoysGreaterThan18-0)+Number(cwcForm.e1Girls0to6-0)+Number(
                                                                        cwcForm.e1Girls7to11-0)+Number(
                                                                        cwcForm.e1Girls12to15-0)+Number(
                                                                        cwcForm.e1Girls16to18-0)+Number(
                                                                        cwcForm.e1GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.2.
                                                                      No. of Children Restored to their Family</label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e2Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Boys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Boys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Boys12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Boys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2BoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e2BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e2Boys0to6-0)+Number(
                                                                        cwcForm.e2Boys7to11-0)+Number(
                                                                        cwcForm.e2Boys12to15-0)+Number(
                                                                        cwcForm.e2Boys16to18-0)+Number(
                                                                        cwcForm.e2BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Girls0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Girls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Girls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2Girls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e2GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e2GirlsGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e2GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e2Girls0to6-0)+Number(
                                                                        cwcForm.e2Girls7to11-0)+Number(
                                                                        cwcForm.e2Girls12to15-0)+Number(
                                                                        cwcForm.e2Girls16to18-0)+Number(
                                                                        cwcForm.e2GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e2GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e2Boys0to6-0)+Number(
                                                                        cwcForm.e2Boys7to11-0)+Number(
                                                                        cwcForm.e2Boys12to15-0)+Number(
                                                                        cwcForm.e2Boys16to18-0)+Number(
                                                                        cwcForm.e2BoysGreaterThan18-0)+Number(cwcForm.e2Girls0to6-0)+Number(
                                                                        cwcForm.e2Girls7to11-0)+Number(
                                                                        cwcForm.e2Girls12to15-0)+Number(
                                                                        cwcForm.e2Girls16to18-0)+Number(
                                                                        cwcForm.e2GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.3.
                                                                      No. of children disposed declared legally free for adoption</label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e3Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Boys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Boys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Boys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Boys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3BoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e3BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e3Boys0to6-0)+Number(
                                                                        cwcForm.e3Boys7to11-0)+Number(
                                                                        cwcForm.e3Boys12to15-0)+Number(
                                                                        cwcForm.e3Boys16to18-0)+Number(
                                                                        cwcForm.e3BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Girls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Girls7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Girls12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3Girls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e3GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e3GirlsGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e3GirlsTotal" readonly
                                                            
                                                            tabindex= -1 value="{{Number(cwcForm.e3Girls0to6-0)+Number(
                                                                        cwcForm.e3Girls7to11-0)+Number(
                                                                        cwcForm.e3Girls12to15-0)+Number(
                                                                        cwcForm.e3Girls16to18-0)+Number(
                                                                        cwcForm.e3GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e3GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e3Boys0to6-0)+Number(
                                                                        cwcForm.e3Boys7to11-0)+Number(
                                                                        cwcForm.e3Boys12to15-0)+Number(
                                                                        cwcForm.e3Boys16to18-0)+Number(
                                                                        cwcForm.e3BoysGreaterThan18-0)+Number(cwcForm.e3Girls0to6-0)+Number(
                                                                        cwcForm.e3Girls7to11-0)+Number(
                                                                        cwcForm.e3Girls12to15-0)+Number(
                                                                        cwcForm.e3Girls16to18-0)+Number(
                                                                        cwcForm.e3GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.4.
                                                                      No. of Children Referred to Sponsorship</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e4Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Boys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Boys7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Boys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Boys16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4BoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e4BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e4Boys0to6-0)+Number(
                                                                        cwcForm.e4Boys7to11-0)+Number(
                                                                        cwcForm.e4Boys12to15-0)+Number(
                                                                        cwcForm.e4Boys16to18-0)+Number(
                                                                        cwcForm.e4BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e4Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Girls0to6" 
                                                            ng-disabled="cwcForm.submitted" only-four-digits
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                                                            
                                                       <td><input type="number" id="e4Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Girls7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Girls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4Girls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e4GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e4GirlsGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e4GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e4Girls0to6-0)+Number(
                                                                        cwcForm.e4Girls7to11-0)+Number(
                                                                        cwcForm.e4Girls12to15-0)+Number(
                                                                        cwcForm.e4Girls16to18-0)+Number(
                                                                        cwcForm.e4GirlsGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e4GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e4Boys0to6-0)+Number(
                                                                        cwcForm.e4Boys7to11-0)+Number(
                                                                        cwcForm.e4Boys12to15-0)+Number(
                                                                        cwcForm.e4Boys16to18-0)+Number(
                                                                        cwcForm.e4BoysGreaterThan18-0)+Number(cwcForm.e4Girls0to6-0)+Number(
                                                                        cwcForm.e4Girls7to11-0)+Number(
                                                                        cwcForm.e4Girls12to15-0)+Number(
                                                                        cwcForm.e4Girls16to18-0)+Number(
                                                                        cwcForm.e4GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.5.
                                                                      No. of Children Referred to Foster Care</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e5Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Boys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Boys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Boys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Boys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5BoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e5BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e5Boys0to6-0)+Number(
                                                                        cwcForm.e5Boys7to11-0)+Number(
                                                                        cwcForm.e5Boys12to15-0)+Number(
                                                                        cwcForm.e5Boys16to18-0)+Number(
                                                                        cwcForm.e5BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e5Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Girls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Girls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Girls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5Girls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e5GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e5GirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e5GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e5Girls0to6-0)+Number(
                                                                        cwcForm.e5Girls7to11-0)+Number(
                                                                        cwcForm.e5Girls12to15-0)+Number(
                                                                        cwcForm.e5Girls16to18-0)+Number(
                                                                        cwcForm.e5GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e5GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e5Boys0to6-0)+Number(
                                                                        cwcForm.e5Boys7to11-0)+Number(
                                                                        cwcForm.e5Boys12to15-0)+Number(
                                                                        cwcForm.e5Boys16to18-0)+Number(
                                                                        cwcForm.e5BoysGreaterThan18-0)+Number(cwcForm.e5Girls0to6-0)+Number(
                                                                        cwcForm.e5Girls7to11-0)+Number(
                                                                        cwcForm.e5Girls12to15-0)+Number(
                                                                        cwcForm.e5Girls16to18-0)+Number(
                                                                        cwcForm.e5GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.6.
                                                                      No. of Children Referred to After Care</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e6Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Boys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Boys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Boys12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Boys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6BoysGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e6BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e6Boys0to6-0)+Number(
                                                                        cwcForm.e6Boys7to11-0)+Number(
                                                                        cwcForm.e6Boys12to15-0)+Number(
                                                                        cwcForm.e6Boys16to18-0)+Number(
                                                                        cwcForm.e6BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e6Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Girls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Girls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Girls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6Girls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e6GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e6GirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e6GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e6Girls0to6-0)+Number(
                                                                        cwcForm.e6Girls7to11-0)+Number(
                                                                        cwcForm.e6Girls12to15-0)+Number(
                                                                        cwcForm.e6Girls16to18-0)+Number(
                                                                        cwcForm.e6GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e6GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e6Boys0to6-0)+Number(
                                                                        cwcForm.e6Boys7to11-0)+Number(
                                                                        cwcForm.e6Boys12to15-0)+Number(
                                                                        cwcForm.e6Boys16to18-0)+Number(
                                                                        cwcForm.e6BoysGreaterThan18-0)+Number(cwcForm.e6Girls0to6-0)+Number(
                                                                        cwcForm.e6Girls7to11-0)+Number(
                                                                        cwcForm.e6Girls12to15-0)+Number(
                                                                        cwcForm.e6Girls16to18-0)+Number(
                                                                        cwcForm.e6GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.7.
                                                                      No. of Children Sent for Long Term Institutional Care</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e7Boys0to6"
                                                            ng-model="cwcForm.e7Boys0to6" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7Boys7to11"
                                                            ng-model="cwcForm.e7Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7Boys12to15"
                                                            ng-model="cwcForm.e7Boys12to15"  ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7Boys16to18"
                                                            ng-model="cwcForm.e7Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7BoysGreaterThan18"
                                                            ng-model="cwcForm.e7BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e7BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e7Boys0to6-0)+Number(
                                                                        cwcForm.e7Boys7to11-0)+Number(
                                                                        cwcForm.e7Boys12to15-0)+Number(
                                                                        cwcForm.e7Boys16to18-0)+Number(
                                                                        cwcForm.e7BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e7Girls0to6"
                                                            ng-model="cwcForm.e7Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7Girls7to11"
                                                            ng-model="cwcForm.e7Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7Girls12to15"
                                                            ng-model="cwcForm.e7Girls12to15" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7Girls16to18"
                                                            ng-model="cwcForm.e7Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e7GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e7GirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e7GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e7Girls0to6-0)+Number(
                                                                        cwcForm.e7Girls7to11-0)+Number(
                                                                        cwcForm.e7Girls12to15-0)+Number(
                                                                        cwcForm.e7Girls16to18-0)+Number(
                                                                        cwcForm.e7GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e7GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e7Boys0to6-0)+Number(
                                                                        cwcForm.e7Boys7to11-0)+Number(
                                                                        cwcForm.e7Boys12to15-0)+Number(
                                                                        cwcForm.e7Boys16to18-0)+Number(
                                                                        cwcForm.e7BoysGreaterThan18-0)+Number(cwcForm.e7Girls0to6-0)+Number(
                                                                        cwcForm.e7Girls7to11-0)+Number(
                                                                        cwcForm.e7Girls12to15-0)+Number(
                                                                        cwcForm.e7Girls16to18-0)+Number(
                                                                        cwcForm.e7GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.8.
                                                                      No. of Children Sent for (Other Orders)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e8Boys0to6"
                                                            ng-model="cwcForm.e8Boys0to6" ng-keyup="testEqualCE($event);resetE8a();"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8Boys7to11"
                                                            ng-model="cwcForm.e8Boys7to11" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8Boys12to15"
                                                            ng-model="cwcForm.e8Boys12to15" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8Boys16to18"
                                                            ng-model="cwcForm.e8Boys16to18" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8BoysGreaterThan18"
                                                            ng-model="cwcForm.e8BoysGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e8BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e8Boys0to6-0)+Number(
                                                                        cwcForm.e8Boys7to11-0)+Number(
                                                                        cwcForm.e8Boys12to15-0)+Number(
                                                                        cwcForm.e8Boys16to18-0)+Number(
                                                                        cwcForm.e8BoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e8Girls0to6"
                                                            ng-model="cwcForm.e8Girls0to6" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8Girls7to11"
                                                            ng-model="cwcForm.e8Girls7to11" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8Girls12to15"
                                                            ng-model="cwcForm.e8Girls12to15"  ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8Girls16to18"
                                                            ng-model="cwcForm.e8Girls16to18" ng-keyup="testEqualCE($event)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e8GirlsGreaterThan18" ng-keyup="testEqualCE($event)"
                                                            ng-model="cwcForm.e8GirlsGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e8GirlsTotal" readonly ng-keyup="testEqualCE($event)"
                                                            tabindex= -1 value="{{Number(cwcForm.e8Girls0to6-0)+Number(
                                                                        cwcForm.e8Girls7to11-0)+Number(
                                                                        cwcForm.e8Girls12to15-0)+Number(
                                                                        cwcForm.e8Girls16to18-0)+Number(
                                                                        cwcForm.e8GirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input readonly type="text" id="e8GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.e8Boys0to6-0)+Number(
                                                                        cwcForm.e8Boys7to11-0)+Number(
                                                                        cwcForm.e8Boys12to15-0)+Number(
                                                                        cwcForm.e8Boys16to18-0)+Number(
                                                                        cwcForm.e8BoysGreaterThan18-0)+Number(cwcForm.e8Girls0to6-0)+Number(
                                                                        cwcForm.e8Girls7to11-0)+Number(
                                                                        cwcForm.e8Girls12to15-0)+Number(
                                                                        cwcForm.e8Girls16to18-0)+Number(
                                                                        cwcForm.e8GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr ng-show="(Number(cwcForm.e8Boys0to6-0)+Number(
                                                                        cwcForm.e8Boys7to11-0)+Number(
                                                                        cwcForm.e8Boys12to15-0)+Number(
                                                                        cwcForm.e8Boys16to18-0)+Number(
                                                                        cwcForm.e8BoysGreaterThan18-0)+Number(cwcForm.e8Girls0to6-0)+Number(
                                                                        cwcForm.e8Girls7to11-0)+Number(
                                                                        cwcForm.e8Girls12to15-0)+Number(
                                                                        cwcForm.e8Girls16to18-0)+Number(
                                                                        cwcForm.e8GirlsGreaterThan18-0))!='0'">
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.8.a.
                                                                      Please specify</label>
                                                            </div>
                                                       </td>
                                                       <td colspan="13"><input type="text" id="e8OtherOrder"
                                                            ng-model="cwcForm.e8OtherOrder" two-fifty-characters-validation-comma
                                                            ng-disabled="cwcForm.submitted"
                                                            class="form-control inputBackground tableinputWidth"
                                                            ng-required="(Number(cwcForm.e8Boys0to6-0)+Number(
                                                                        cwcForm.e8Boys7to11-0)+Number(
                                                                        cwcForm.e8Boys12to15-0)+Number(
                                                                        cwcForm.e8Boys16to18-0)+Number(
                                                                        cwcForm.e8BoysGreaterThan18-0)+Number(cwcForm.e8Girls0to6-0)+Number(
                                                                        cwcForm.e8Girls7to11-0)+Number(
                                                                        cwcForm.e8Girls12to15-0)+Number(
                                                                        cwcForm.e8Girls16to18-0)+Number(
                                                                        cwcForm.e8GirlsGreaterThan18-0))!='0'">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">E.9.
                                                                      Total No. of Cases Disposed/ Children Restored</label>
                                                            </div>
                                                       </td>

                                                       <td><input type="text" id="e9Boys0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys0to6-0)+Number(cwcForm.e2Boys0to6-0)+Number(cwcForm.e3Boys0to6-0)+Number(cwcForm.e4Boys0to6-0)+Number(cwcForm.e5Boys0to6-0)+Number(cwcForm.e6Boys0to6-0)+Number(cwcForm.e7Boys0to6-0)+Number(cwcForm.e8Boys0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Boys7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys7to11-0)+Number(cwcForm.e2Boys7to11-0)+Number(cwcForm.e3Boys7to11-0)+Number(cwcForm.e4Boys7to11-0)+Number(cwcForm.e5Boys7to11-0)+Number(cwcForm.e6Boys7to11-0)+Number(cwcForm.e7Boys7to11-0)+Number(cwcForm.e8Boys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Boys12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys12to15-0)+Number(cwcForm.e2Boys12to15-0)+Number(cwcForm.e3Boys12to15-0)+Number(cwcForm.e4Boys12to15-0)+Number(cwcForm.e5Boys12to15-0)+Number(cwcForm.e6Boys12to15-0)+Number(cwcForm.e7Boys12to15-0)+Number(cwcForm.e8Boys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Boys16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys16to18-0)+Number(cwcForm.e2Boys16to18-0)+Number(cwcForm.e3Boys16to18-0)+Number(cwcForm.e4Boys16to18-0)+Number(cwcForm.e5Boys16to18-0)+Number(cwcForm.e6Boys16to18-0)+Number(cwcForm.e7Boys16to18-0)+Number(cwcForm.e8Boys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9BoysGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1BoysGreaterThan18-0)+Number(cwcForm.e2BoysGreaterThan18-0)+Number(cwcForm.e3BoysGreaterThan18-0)+Number(cwcForm.e4BoysGreaterThan18-0)+Number(cwcForm.e5BoysGreaterThan18-0)+Number(cwcForm.e6BoysGreaterThan18-0)+Number(cwcForm.e7BoysGreaterThan18-0)+Number(cwcForm.e8BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9BoysTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys0to6-0)+Number(cwcForm.e2Boys0to6-0)+Number(cwcForm.e3Boys0to6-0)+Number(cwcForm.e4Boys0to6-0)+Number(cwcForm.e5Boys0to6-0)+Number(cwcForm.e6Boys0to6-0)+Number(cwcForm.e7Boys0to6-0)+Number(cwcForm.e8Boys0to6-0)+Number(cwcForm.e1Boys7to11-0)+Number(cwcForm.e2Boys7to11-0)+Number(cwcForm.e3Boys7to11-0)+Number(cwcForm.e4Boys7to11-0)+Number(
                                                            cwcForm.e5Boys7to11-0)+Number(cwcForm.e6Boys7to11-0)+Number(cwcForm.e7Boys7to11-0)+Number(cwcForm.e8Boys7to11-0)+Number(cwcForm.e1Boys12to15-0)+Number(cwcForm.e2Boys12to15-0)+Number(cwcForm.e3Boys12to15-0)+Number(cwcForm.e4Boys12to15-0)+Number(cwcForm.e5Boys12to15-0)+Number(cwcForm.e6Boys12to15-0)+Number(cwcForm.e7Boys12to15-0)+Number(cwcForm.e8Boys12to15-0)+Number(
                                                            cwcForm.e1Boys16to18-0)+Number(cwcForm.e2Boys16to18-0)+Number(cwcForm.e3Boys16to18-0)+Number(cwcForm.e4Boys16to18-0)+Number(cwcForm.e5Boys16to18-0)+Number(cwcForm.e6Boys16to18-0)+Number(cwcForm.e7Boys16to18-0)+Number(cwcForm.e8Boys16to18-0)+Number(cwcForm.e1BoysGreaterThan18-0)+Number(cwcForm.e2BoysGreaterThan18-0)+Number(cwcForm.e3BoysGreaterThan18-0)+Number(
                                                            cwcForm.e4BoysGreaterThan18-0)+Number(cwcForm.e5BoysGreaterThan18-0)+Number(cwcForm.e6BoysGreaterThan18-0)+Number(cwcForm.e7BoysGreaterThan18-0)+Number(cwcForm.e8BoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Girls0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Girls0to6-0)+Number(cwcForm.e2Girls0to6-0)+Number(cwcForm.e3Girls0to6-0)+Number(cwcForm.e4Girls0to6-0)+Number(cwcForm.e5Girls0to6-0)+Number(cwcForm.e6Girls0to6-0)+Number(cwcForm.e7Girls0to6-0)+Number(cwcForm.e8Girls0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Girls7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Girls7to11-0)+Number(cwcForm.e2Girls7to11-0)+Number(cwcForm.e3Girls7to11-0)+Number(cwcForm.e4Girls7to11-0)+Number(cwcForm.e5Girls7to11-0)+Number(cwcForm.e6Girls7to11-0)+Number(cwcForm.e7Girls7to11-0)+Number(cwcForm.e8Girls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Girls12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Girls12to15-0)+Number(cwcForm.e2Girls12to15-0)+Number(cwcForm.e3Girls12to15-0)+Number(cwcForm.e4Girls12to15-0)+Number(cwcForm.e5Girls12to15-0)+Number(cwcForm.e6Girls12to15-0)+Number(cwcForm.e7Girls12to15-0)+Number(cwcForm.e8Girls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9Girls16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Girls16to18-0)+Number(cwcForm.e2Girls16to18-0)+Number(cwcForm.e3Girls16to18-0)+Number(cwcForm.e4Girls16to18-0)+Number(cwcForm.e5Girls16to18-0)+Number(cwcForm.e6Girls16to18-0)+Number(cwcForm.e7Girls16to18-0)+Number(cwcForm.e8Girls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="e9GirlsGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1GirlsGreaterThan18-0)+Number(cwcForm.e2GirlsGreaterThan18-0)+Number(cwcForm.e3GirlsGreaterThan18-0)+Number(cwcForm.e4GirlsGreaterThan18-0)+Number(cwcForm.e5GirlsGreaterThan18-0)+Number(cwcForm.e6GirlsGreaterThan18-0)+Number(cwcForm.e7GirlsGreaterThan18-0)+Number(cwcForm.e8GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       
                                                       <td><input type="text" id="e9GirlsTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Girls0to6-0)+Number(cwcForm.e2Girls0to6-0)+Number(cwcForm.e3Girls0to6-0)+Number(cwcForm.e4Girls0to6-0)+Number(cwcForm.e5Girls0to6-0)+Number(cwcForm.e6Girls0to6-0)+Number(cwcForm.e7Girls0to6-0)+Number(cwcForm.e8Girls0to6-0)+Number(cwcForm.e1Girls7to11-0)+Number(cwcForm.e2Girls7to11-0)+Number(cwcForm.e3Girls7to11-0)+Number(cwcForm.e4Girls7to11-0)+Number(
                                                            cwcForm.e5Girls7to11-0)+Number(cwcForm.e6Girls7to11-0)+Number(cwcForm.e7Girls7to11-0)+Number(cwcForm.e8Girls7to11-0)+Number(cwcForm.e1Girls12to15-0)+Number(cwcForm.e2Girls12to15-0)+Number(cwcForm.e3Girls12to15-0)+Number(cwcForm.e4Girls12to15-0)+Number(cwcForm.e5Girls12to15-0)+Number(cwcForm.e6Girls12to15-0)+Number(cwcForm.e7Girls12to15-0)+Number(cwcForm.e8Girls12to15-0)+Number(
                                                            cwcForm.e1Girls16to18-0)+Number(cwcForm.e2Girls16to18-0)+Number(cwcForm.e3Girls16to18-0)+Number(cwcForm.e4Girls16to18-0)+Number(cwcForm.e5Girls16to18-0)+Number(cwcForm.e6Girls16to18-0)+Number(cwcForm.e7Girls16to18-0)+Number(cwcForm.e8Girls16to18-0)+Number(cwcForm.e1GirlsGreaterThan18-0)+Number(cwcForm.e2GirlsGreaterThan18-0)+Number(cwcForm.e3GirlsGreaterThan18-0)+Number(
                                                            cwcForm.e4GirlsGreaterThan18-0)+Number(cwcForm.e5GirlsGreaterThan18-0)+Number(cwcForm.e6GirlsGreaterThan18-0)+Number(cwcForm.e7GirlsGreaterThan18-0)+Number(cwcForm.e8GirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e9GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e1Boys0to6-0)+Number(cwcForm.e2Boys0to6-0)+Number(cwcForm.e3Boys0to6-0)+Number(cwcForm.e4Boys0to6-0)+Number(cwcForm.e5Boys0to6-0)+Number(cwcForm.e6Boys0to6-0)+Number(cwcForm.e7Boys0to6-0)+Number(cwcForm.e8Boys0to6-0)+Number(cwcForm.e1Boys7to11-0)+Number(cwcForm.e2Boys7to11-0)+Number(cwcForm.e3Boys7to11-0)+Number(cwcForm.e4Boys7to11-0)+Number(cwcForm.e5Boys7to11-0)+Number(
                                                            cwcForm.e6Boys7to11-0)+Number(cwcForm.e7Boys7to11-0)+Number(cwcForm.e8Boys7to11-0)+Number(cwcForm.e1Boys12to15-0)+Number(cwcForm.e2Boys12to15-0)+Number(cwcForm.e3Boys12to15-0)+Number(cwcForm.e4Boys12to15-0)+Number(cwcForm.e5Boys12to15-0)+Number(cwcForm.e6Boys12to15-0)+Number(cwcForm.e7Boys12to15-0)+Number(cwcForm.e8Boys12to15-0)+Number(cwcForm.e1Boys16to18-0)+Number(cwcForm.e2Boys16to18-0)+Number(
                                                            cwcForm.e3Boys16to18-0)+Number(cwcForm.e4Boys16to18-0)+Number(cwcForm.e5Boys16to18-0)+Number(cwcForm.e6Boys16to18-0)+Number(cwcForm.e7Boys16to18-0)+Number(cwcForm.e8Boys16to18-0)+Number(cwcForm.e1BoysGreaterThan18-0)+Number(cwcForm.e2BoysGreaterThan18-0)+Number(cwcForm.e3BoysGreaterThan18-0)+Number(cwcForm.e4BoysGreaterThan18-0)+Number(cwcForm.e5BoysGreaterThan18-0)+Number(
                                                            cwcForm.e6BoysGreaterThan18-0)+Number(cwcForm.e7BoysGreaterThan18-0)+Number(cwcForm.e8BoysGreaterThan18-0)+Number(cwcForm.e1Girls0to6-0)+Number(cwcForm.e2Girls0to6-0)+Number(cwcForm.e3Girls0to6-0)+Number(cwcForm.e4Girls0to6-0)+Number(cwcForm.e5Girls0to6-0)+Number(cwcForm.e6Girls0to6-0)+Number(cwcForm.e7Girls0to6-0)+Number(cwcForm.e8Girls0to6-0)+Number(cwcForm.e1Girls7to11-0)+Number(
                                                            cwcForm.e2Girls7to11-0)+Number(cwcForm.e3Girls7to11-0)+Number(cwcForm.e4Girls7to11-0)+Number(cwcForm.e5Girls7to11-0)+Number(cwcForm.e6Girls7to11-0)+Number(cwcForm.e7Girls7to11-0)+Number(cwcForm.e8Girls7to11-0)+Number(cwcForm.e1Girls12to15-0)+Number(cwcForm.e2Girls12to15-0)+Number(cwcForm.e3Girls12to15-0)+Number(cwcForm.e4Girls12to15-0)+Number(cwcForm.e5Girls12to15-0)+Number(cwcForm.e6Girls12to15-0)+Number(
                                                            cwcForm.e7Girls12to15-0)+Number(cwcForm.e8Girls12to15-0)+Number(cwcForm.e1Girls16to18-0)+Number(cwcForm.e2Girls16to18-0)+Number(cwcForm.e3Girls16to18-0)+Number(cwcForm.e4Girls16to18-0)+Number(cwcForm.e5Girls16to18-0)+Number(cwcForm.e6Girls16to18-0)+Number(cwcForm.e7Girls16to18-0)+Number(cwcForm.e8Girls16to18-0)+Number(cwcForm.e1GirlsGreaterThan18-0)+Number(cwcForm.e2GirlsGreaterThan18-0)+Number(
                                                            cwcForm.e3GirlsGreaterThan18-0)+Number(cwcForm.e4GirlsGreaterThan18-0)+Number(cwcForm.e5GirlsGreaterThan18-0)+Number(cwcForm.e6GirlsGreaterThan18-0)+Number(cwcForm.e7GirlsGreaterThan18-0)+Number(cwcForm.e8GirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!--------------------------------------End of E9 section ------------------------------------------>


                                   <!-------------------------------------- E10 section ------------------------------------------>

                                   <div class="grey-header1 headMarg">E.10. Cases on the last day of the Reporting Month </div>
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableE10">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
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
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.a 
                                                                 Children residing in Child Care Institutions (CCIs) excluding SAAs </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10aBoys0to6"
                                                            ng-model="cwcForm.e10aBoys0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aBoys7to11"
                                                            ng-model="cwcForm.e10aBoys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aBoys12to15"
                                                            ng-model="cwcForm.e10aBoys12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aBoys16to18"
                                                            ng-model="cwcForm.e10aBoys16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aBoysGreaterThan18"
                                                            ng-model="cwcForm.e10aBoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10aBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys0to6-0)+Number(
                                                                        cwcForm.e10aBoys7to11-0)+Number(
                                                                        cwcForm.e10aBoys12to15-0)+Number(
                                                                        cwcForm.e10aBoys16to18-0)+Number(
                                                                        cwcForm.e10aBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10aGirls0to6"
                                                            ng-model="cwcForm.e10aGirls0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aGirls7to11"
                                                            ng-model="cwcForm.e10aGirls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aGirls12to15"
                                                            ng-model="cwcForm.e10aGirls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aGirls16to18"
                                                            ng-model="cwcForm.e10aGirls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10aGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10aGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10aGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirls0to6-0)+Number(
                                                                        cwcForm.e10aGirls7to11-0)+Number(
                                                                        cwcForm.e10aGirls12to15-0)+Number(
                                                                        cwcForm.e10aGirls16to18-0)+Number(
                                                                        cwcForm.e10aGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="text" id="e10aGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys0to6-0)+Number(
                                                                        cwcForm.e10aBoys7to11-0)+Number(
                                                                        cwcForm.e10aBoys12to15-0)+Number(
                                                                        cwcForm.e10aBoys16to18-0)+Number(
                                                                        cwcForm.e10aBoysGreaterThan18-0)+Number(cwcForm.e10aGirls0to6-0)+Number(
                                                                        cwcForm.e10aGirls7to11-0)+Number(
                                                                        cwcForm.e10aGirls12to15-0)+Number(
                                                                        cwcForm.e10aGirls16to18-0)+Number(
                                                                        cwcForm.e10aGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                  </tr>
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.b 
                                                                 Children residing with Fit Persons </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10bBoys0to6"
                                                            ng-model="cwcForm.e10bBoys0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bBoys7to11"
                                                            ng-model="cwcForm.e10bBoys7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bBoys12to15"
                                                            ng-model="cwcForm.e10bBoys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bBoys16to18"
                                                            ng-model="cwcForm.e10bBoys16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bBoysGreaterThan18"
                                                            ng-model="cwcForm.e10bBoysGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10bBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10bBoys0to6-0)+Number(
                                                                        cwcForm.e10bBoys7to11-0)+Number(
                                                                        cwcForm.e10bBoys12to15-0)+Number(
                                                                        cwcForm.e10bBoys16to18-0)+Number(
                                                                        cwcForm.e10bBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10bGirls0to6"
                                                            ng-model="cwcForm.e10bGirls0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bGirls7to11"
                                                            ng-model="cwcForm.e10bGirls7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bGirls12to15"
                                                            ng-model="cwcForm.e10bGirls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bGirls16to18"
                                                            ng-model="cwcForm.e10bGirls16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10bGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10bGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10bGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10bGirls0to6-0)+Number(
                                                                        cwcForm.e10bGirls7to11-0)+Number(
                                                                        cwcForm.e10bGirls12to15-0)+Number(
                                                                        cwcForm.e10bGirls16to18-0)+Number(
                                                                        cwcForm.e10bGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10bGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10bBoys0to6-0)+Number(
                                                                        cwcForm.e10bBoys7to11-0)+Number(
                                                                        cwcForm.e10bBoys12to15-0)+Number(
                                                                        cwcForm.e10bBoys16to18-0)+Number(
                                                                        cwcForm.e10bBoysGreaterThan18-0)+Number(cwcForm.e10bGirls0to6-0)+Number(
                                                                        cwcForm.e10bGirls7to11-0)+Number(
                                                                        cwcForm.e10bGirls12to15-0)+Number(
                                                                        cwcForm.e10bGirls16to18-0)+Number(
                                                                        cwcForm.e10bGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.c. 
                                                                 Children residing in Specialized Adoption Agencies (SAA) </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10cBoys0to6"
                                                            ng-model="cwcForm.e10cBoys0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cBoys7to11"
                                                            ng-model="cwcForm.e10cBoys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cBoys12to15"
                                                            ng-model="cwcForm.e10cBoys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cBoys16to18"
                                                            ng-model="cwcForm.e10cBoys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cBoysGreaterThan18"
                                                            ng-model="cwcForm.e10cBoysGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10cBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10cBoys0to6-0)+Number(
                                                                        cwcForm.e10cBoys7to11-0)+Number(
                                                                        cwcForm.e10cBoys12to15-0)+Number(
                                                                        cwcForm.e10cBoys16to18-0)+Number(
                                                                        cwcForm.e10cBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10cGirls0to6"
                                                            ng-model="cwcForm.e10cGirls0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cGirls7to11"
                                                            ng-model="cwcForm.e10cGirls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cGirls12to15"
                                                            ng-model="cwcForm.e10cGirls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cGirls16to18"
                                                            ng-model="cwcForm.e10cGirls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10cGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10cGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10cGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10cGirls0to6-0)+Number(
                                                                        cwcForm.e10cGirls7to11-0)+Number(
                                                                        cwcForm.e10cGirls12to15-0)+Number(
                                                                        cwcForm.e10cGirls16to18-0)+Number(
                                                                        cwcForm.e10cGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10cGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10cBoys0to6-0)+Number(
                                                                        cwcForm.e10cBoys7to11-0)+Number(
                                                                        cwcForm.e10cBoys12to15-0)+Number(
                                                                        cwcForm.e10cBoys16to18-0)+Number(
                                                                        cwcForm.e10cBoysGreaterThan18-0)+Number(cwcForm.e10cGirls0to6-0)+Number(
                                                                        cwcForm.e10cGirls7to11-0)+Number(
                                                                        cwcForm.e10cGirls12to15-0)+Number(
                                                                        cwcForm.e10cGirls16to18-0)+Number(
                                                                        cwcForm.e10cGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.d. Children residing in Other Institutions </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10dBoys0to6"
                                                            ng-model="cwcForm.e10dBoys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dBoys7to11"
                                                            ng-model="cwcForm.e10dBoys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dBoys12to15"
                                                            ng-model="cwcForm.e10dBoys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dBoys16to18"
                                                            ng-model="cwcForm.e10dBoys16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dBoysGreaterThan18"
                                                            ng-model="cwcForm.e10dBoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10dBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10dBoys0to6-0)+Number(
                                                                        cwcForm.e10dBoys7to11-0)+Number(
                                                                        cwcForm.e10dBoys12to15-0)+Number(
                                                                        cwcForm.e10dBoys16to18-0)+Number(
                                                                        cwcForm.e10dBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10dGirls0to6"
                                                            ng-model="cwcForm.e10dGirls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dGirls7to11"
                                                            ng-model="cwcForm.e10dGirls7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dGirls12to15"
                                                            ng-model="cwcForm.e10dGirls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dGirls16to18"
                                                            ng-model="cwcForm.e10dGirls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10dGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10dGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10dGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10dGirls0to6-0)+Number(
                                                                        cwcForm.e10dGirls7to11-0)+Number(
                                                                        cwcForm.e10dGirls12to15-0)+Number(
                                                                        cwcForm.e10dGirls16to18-0)+Number(
                                                                        cwcForm.e10dGirlsGreaterThan18-0)}}" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="text" id="e10dGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10dBoys0to6-0)+Number(
                                                                        cwcForm.e10dBoys7to11-0)+Number(
                                                                        cwcForm.e10dBoys12to15-0)+Number(
                                                                        cwcForm.e10dBoys16to18-0)+Number(
                                                                        cwcForm.e10dBoysGreaterThan18-0)+Number(cwcForm.e10dGirls0to6-0)+Number(
                                                                        cwcForm.e10dGirls7to11-0)+Number(
                                                                        cwcForm.e10dGirls12to15-0)+Number(
                                                                        cwcForm.e10dGirls16to18-0)+Number(
                                                                        cwcForm.e10dGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.e. 
                                                                 Children residing in Alternative Care  </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10eBoys0to6"
                                                            ng-model="cwcForm.e10eBoys0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10eBoys7to11"
                                                            ng-model="cwcForm.e10eBoys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            <div id="e91" class="errorDisp"></div></td>
                                                            
                                                       <td><input type="number" id="e10eBoys12to15"
                                                            ng-model="cwcForm.e10eBoys12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10eBoys16to18"
                                                            ng-model="cwcForm.e10eBoys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10eBoysGreaterThan18"
                                                            ng-model="cwcForm.e10eBoysGreaterThan18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10eBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10eBoys0to6-0)+Number(
                                                                        cwcForm.e10eBoys7to11-0)+Number(
                                                                        cwcForm.e10eBoys12to15-0)+Number(
                                                                        cwcForm.e10eBoys16to18-0)+Number(
                                                                        cwcForm.e10eBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10eGirls0to6"
                                                            ng-model="cwcForm.e10eGirls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10eGirls7to11"
                                                            ng-model="cwcForm.e10eGirls7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            <div id="e91" class="errorDisp"></div></td>
                                                            
                                                       <td><input type="number" id="e10eGirls12to15"
                                                            ng-model="cwcForm.e10eGirls12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10eGirls16to18"
                                                            ng-model="cwcForm.e10eGirls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10eGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10eGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10eGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10eGirls0to6-0)+Number(
                                                                        cwcForm.e10eGirls7to11-0)+Number(
                                                                        cwcForm.e10eGirls12to15-0)+Number(
                                                                        cwcForm.e10eGirls16to18-0)+Number(
                                                                        cwcForm.e10eGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="text" id="e10eGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10eBoys0to6-0)+Number(
                                                                        cwcForm.e10eBoys7to11-0)+Number(
                                                                        cwcForm.e10eBoys12to15-0)+Number(
                                                                        cwcForm.e10eBoys16to18-0)+Number(
                                                                        cwcForm.e10eBoysGreaterThan18-0)+Number(cwcForm.e10eGirls0to6-0)+Number(
                                                                        cwcForm.e10eGirls7to11-0)+Number(
                                                                        cwcForm.e10eGirls12to15-0)+Number(
                                                                        cwcForm.e10eGirls16to18-0)+Number(
                                                                        cwcForm.e10eGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.f. 
                                                                 Children residing with parents/ guardians  </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10fBoys0to6"
                                                            ng-model="cwcForm.e10fBoys0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fBoys7to11"
                                                            ng-model="cwcForm.e10fBoys7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fBoys12to15"
                                                            ng-model="cwcForm.e10fBoys12to15" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fBoys16to18"
                                                            ng-model="cwcForm.e10fBoys16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fBoysGreaterThan18"
                                                            ng-model="cwcForm.e10fBoysGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10fBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10fBoys0to6-0)+Number(
                                                                        cwcForm.e10fBoys7to11-0)+Number(
                                                                        cwcForm.e10fBoys12to15-0)+Number(
                                                                        cwcForm.e10fBoys16to18-0)+Number(
                                                                        cwcForm.e10fBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10fGirls0to6"
                                                            ng-model="cwcForm.e10fGirls0to6" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fGirls7to11"
                                                            ng-model="cwcForm.e10fGirls7to11" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fGirls12to15"
                                                            ng-model="cwcForm.e10fGirls12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fGirls16to18"
                                                            ng-model="cwcForm.e10fGirls16to18" 
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10fGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10fGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10fGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10fGirls0to6-0)+Number(
                                                                        cwcForm.e10fGirls7to11-0)+Number(
                                                                        cwcForm.e10fGirls12to15-0)+Number(
                                                                        cwcForm.e10fGirls16to18-0)+Number(
                                                                        cwcForm.e10fGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10fGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10fBoys0to6-0)+Number(
                                                                        cwcForm.e10fBoys7to11-0)+Number(
                                                                        cwcForm.e10fBoys12to15-0)+Number(
                                                                        cwcForm.e10fBoys16to18-0)+Number(
                                                                        cwcForm.e10fBoysGreaterThan18-0)+Number(cwcForm.e10fGirls0to6-0)+Number(
                                                                        cwcForm.e10fGirls7to11-0)+Number(
                                                                        cwcForm.e10fGirls12to15-0)+Number(
                                                                        cwcForm.e10fGirls16to18-0)+Number(
                                                                        cwcForm.e10fGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                  </tr>
                                                  

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.10.g. Other Children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="e10gBoys0to6"
                                                            ng-model="cwcForm.e10gBoys0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gBoys7to11"
                                                            ng-model="cwcForm.e10gBoys7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gBoys12to15"
                                                            ng-model="cwcForm.e10gBoys12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gBoys16to18"
                                                            ng-model="cwcForm.e10gBoys16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gBoysGreaterThan18"
                                                            ng-model="cwcForm.e10gBoysGreaterThan18"
                                                            ng-keyup="validateE9girls('e9g1'-0)"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits>
                                                            <div id="e9g1" class="errorDisp"></div></td>
                                                            
                                                       <td><input type="text" id="e10gBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10gBoys0to6-0)+Number(
                                                                        cwcForm.e10gBoys7to11-0)+Number(
                                                                        cwcForm.e10gBoys12to15-0)+Number(
                                                                        cwcForm.e10gBoys16to18-0)+Number(
                                                                        cwcForm.e10gBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="number" id="e10gGirls0to6"
                                                            ng-model="cwcForm.e10gGirls0to6"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gGirls7to11"
                                                            ng-model="cwcForm.e10gGirls7to11"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gGirls12to15"
                                                            ng-model="cwcForm.e10gGirls12to15"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gGirls16to18"
                                                            ng-model="cwcForm.e10gGirls16to18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" id="e10gGirlsGreaterThan18"
                                                            ng-model="cwcForm.e10gGirlsGreaterThan18"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="e10gGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10gGirls0to6-0)+Number(
                                                                        cwcForm.e10gGirls7to11-0)+Number(
                                                                        cwcForm.e10gGirls12to15-0)+Number(
                                                                        cwcForm.e10gGirls16to18-0)+Number(
                                                                        cwcForm.e10gGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                            
                                                       <td><input type="text" id="e10gGrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.e10gBoys0to6-0)+Number(
                                                                        cwcForm.e10gBoys7to11-0)+Number(
                                                                        cwcForm.e10gBoys12to15-0)+Number(
                                                                        cwcForm.e10gBoys16to18-0)+Number(
                                                                        cwcForm.e10gBoysGreaterThan18-0)+Number(cwcForm.e10gGirls0to6-0)+Number(
                                                                        cwcForm.e10gGirls7to11-0)+Number(
                                                                        cwcForm.e10gGirls12to15-0)+Number(
                                                                        cwcForm.e10gGirls16to18-0)+Number(
                                                                        cwcForm.e10gGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">E.10. 
                                                                 Total Number of Children on the last day of the reporting month</label>
                                                            </div>
                                                       </td>
                                                       <td><input readonly type="text" id="e10Boys0to6"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys0to6-0)+Number(
                                                                        cwcForm.e10bBoys0to6-0)+Number(
                                                                        cwcForm.e10cBoys0to6-0)+Number(
                                                                        cwcForm.e10dBoys0to6-0)+Number(
                                                                        cwcForm.e10eBoys0to6-0)+Number(
                                                                        cwcForm.e10fBoys0to6-0)+Number(
                                                                        cwcForm.e10gBoys0to6-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Boys7to11"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys7to11-0)+Number(
                                                                        cwcForm.e10bBoys7to11-0)+Number(
                                                                        cwcForm.e10cBoys7to11-0)+Number(
                                                                        cwcForm.e10dBoys7to11-0)+Number(
                                                                        cwcForm.e10eBoys7to11-0)+Number(
                                                                        cwcForm.e10fBoys7to11-0)+Number(
                                                                        cwcForm.e10gBoys7to11-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Boys12to15"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys12to15-0)+Number(
                                                                        cwcForm.e10bBoys12to15-0)+Number(
                                                                        cwcForm.e10cBoys12to15-0)+Number(
                                                                        cwcForm.e10dBoys12to15-0)+Number(
                                                                        cwcForm.e10eBoys12to15-0)+Number(
                                                                        cwcForm.e10fBoys12to15-0)+Number(
                                                                        cwcForm.e10gBoys12to15-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Boys16to18"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys16to18-0)+Number(
                                                                        cwcForm.e10bBoys16to18-0)+Number(
                                                                        cwcForm.e10cBoys16to18-0)+Number(
                                                                        cwcForm.e10dBoys16to18-0)+Number(
                                                                        cwcForm.e10eBoys16to18-0)+Number(
                                                                        cwcForm.e10fBoys16to18-0)+Number(
                                                                        cwcForm.e10gBoys16to18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10BoysGreaterThan18"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10bBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10cBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10dBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10eBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10fBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10gBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10BoysTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys0to6-0)+Number(
                                                                        cwcForm.e10bBoys0to6-0)+Number(
                                                                        cwcForm.e10cBoys0to6-0)+Number(
                                                                        cwcForm.e10dBoys0to6-0)+Number(
                                                                        cwcForm.e10eBoys0to6-0)+Number(
                                                                        cwcForm.e10fBoys0to6-0)+Number(
                                                                        cwcForm.e10gBoys0to6-0)+Number(
                                                                        cwcForm.e10aBoys7to11-0)+Number(
                                                                        cwcForm.e10bBoys7to11-0)+Number(
                                                                        cwcForm.e10cBoys7to11-0)+Number(
                                                                        cwcForm.e10dBoys7to11-0)+Number(
                                                                        cwcForm.e10eBoys7to11-0)+Number(
                                                                        cwcForm.e10fBoys7to11-0)+Number(
                                                                        cwcForm.e10gBoys7to11-0)+Number(
                                                                        cwcForm.e10aBoys12to15-0)+Number(
                                                                        cwcForm.e10bBoys12to15-0)+Number(
                                                                        cwcForm.e10cBoys12to15-0)+Number(
                                                                        cwcForm.e10dBoys12to15-0)+Number(
                                                                        cwcForm.e10eBoys12to15-0)+Number(
                                                                        cwcForm.e10fBoys12to15-0)+Number(
                                                                        cwcForm.e10gBoys12to15-0)+Number(
                                                                        cwcForm.e10aBoys16to18-0)+Number(
                                                                        cwcForm.e10bBoys16to18-0)+Number(
                                                                        cwcForm.e10cBoys16to18-0)+Number(
                                                                        cwcForm.e10dBoys16to18-0)+Number(
                                                                        cwcForm.e10eBoys16to18-0)+Number(
                                                                        cwcForm.e10fBoys16to18-0)+Number(
                                                                        cwcForm.e10gBoys16to18-0)+Number(
                                                                        cwcForm.e10aBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10bBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10cBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10dBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10eBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10fBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10gBoysGreaterThan18
                                                                        -0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Girls0to6"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirls0to6-0)+Number(
                                                                        cwcForm.e10bGirls0to6-0)+Number(
                                                                        cwcForm.e10cGirls0to6-0)+Number(
                                                                        cwcForm.e10dGirls0to6-0)+Number(
                                                                        cwcForm.e10eGirls0to6-0)+Number(
                                                                        cwcForm.e10fGirls0to6-0)+Number(
                                                                        cwcForm.e10gGirls0to6-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Girls7to11"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirls7to11-0)+Number(
                                                                        cwcForm.e10bGirls7to11-0)+Number(
                                                                        cwcForm.e10cGirls7to11-0)+Number(
                                                                        cwcForm.e10dGirls7to11-0)+Number(
                                                                        cwcForm.e10eGirls7to11-0)+Number(
                                                                        cwcForm.e10fGirls7to11-0)+Number(
                                                                        cwcForm.e10gGirls7to11-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Girls12to15"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirls12to15-0)+Number(
                                                                        cwcForm.e10bGirls12to15-0)+Number(
                                                                        cwcForm.e10cGirls12to15-0)+Number(
                                                                        cwcForm.e10dGirls12to15-0)+Number(
                                                                        cwcForm.e10eGirls12to15-0)+Number(
                                                                        cwcForm.e10fGirls12to15-0)+Number(
                                                                        cwcForm.e10gGirls12to15-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10Girls16to18"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirls16to18-0)+Number(
                                                                        cwcForm.e10bGirls16to18-0)+Number(
                                                                        cwcForm.e10cGirls16to18-0)+Number(
                                                                        cwcForm.e10dGirls16to18-0)+Number(
                                                                        cwcForm.e10eGirls16to18-0)+Number(
                                                                        cwcForm.e10fGirls16to18-0)+Number(
                                                                        cwcForm.e10gGirls16to18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10GirlsGreaterThan18"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10bGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10cGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10dGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10eGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10fGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10gGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text"
                                                            id="e10GirlsTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aGirls0to6-0)+Number(
                                                                        cwcForm.e10bGirls0to6-0)+Number(
                                                                        cwcForm.e10cGirls0to6-0)+Number(
                                                                        cwcForm.e10dGirls0to6-0)+Number(
                                                                        cwcForm.e10eGirls0to6-0)+Number(
                                                                        cwcForm.e10fGirls0to6-0)+Number(
                                                                        cwcForm.e10gGirls0to6-0)+Number(
                                                                        
                                                                        cwcForm.e10aGirls7to11-0)+Number(
                                                                        cwcForm.e10bGirls7to11-0)+Number(
                                                                        cwcForm.e10cGirls7to11-0)+Number(
                                                                        cwcForm.e10dGirls7to11-0)+Number(
                                                                        cwcForm.e10eGirls7to11-0)+Number(
                                                                        cwcForm.e10fGirls7to11-0)+Number(
                                                                        cwcForm.e10gGirls7to11-0)+Number(
                                                                        
                                                                        cwcForm.e10aGirls12to15-0)+Number(
                                                                        cwcForm.e10bGirls12to15-0)+Number(
                                                                        cwcForm.e10cGirls12to15-0)+Number(
                                                                        cwcForm.e10dGirls12to15-0)+Number(
                                                                        cwcForm.e10eGirls12to15-0)+Number(
                                                                        cwcForm.e10fGirls12to15-0)+Number(
                                                                        cwcForm.e10gGirls12to15-0)+Number(
                                                                        
                                                                        cwcForm.e10aGirls16to18-0)+Number(
                                                                        cwcForm.e10bGirls16to18-0)+Number(
                                                                        cwcForm.e10cGirls16to18-0)+Number(
                                                                        cwcForm.e10dGirls16to18-0)+Number(
                                                                        cwcForm.e10eGirls16to18-0)+Number(
                                                                        cwcForm.e10fGirls16to18-0)+Number(
                                                                        cwcForm.e10gGirls16to18-0)+Number(
                                                                        
                                                                        cwcForm.e10aGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10bGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10cGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10dGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10eGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10fGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10gGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="e10GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.e10aBoys0to6-0)+Number(
                                                                        cwcForm.e10bBoys0to6-0)+Number(
                                                                        cwcForm.e10cBoys0to6-0)+Number(
                                                                        cwcForm.e10dBoys0to6-0)+Number(
                                                                        cwcForm.e10eBoys0to6-0)+Number(
                                                                        cwcForm.e10fBoys0to6-0)+Number(
                                                                        cwcForm.e10gBoys0to6-0)+Number(
                                                                        cwcForm.e10aBoys7to11-0)+Number(
                                                                        cwcForm.e10bBoys7to11-0)+Number(
                                                                        cwcForm.e10cBoys7to11-0)+Number(
                                                                        cwcForm.e10dBoys7to11-0)+Number(
                                                                        cwcForm.e10eBoys7to11-0)+Number(
                                                                        cwcForm.e10fBoys7to11-0)+Number(
                                                                        cwcForm.e10gBoys7to11-0)+Number(
                                                                        cwcForm.e10aBoys12to15-0)+Number(
                                                                        cwcForm.e10bBoys12to15-0)+Number(
                                                                        cwcForm.e10cBoys12to15-0)+Number(
                                                                        cwcForm.e10dBoys12to15-0)+Number(
                                                                        cwcForm.e10eBoys12to15-0)+Number(
                                                                        cwcForm.e10fBoys12to15-0)+Number(
                                                                        cwcForm.e10gBoys12to15-0)+Number(
                                                                        cwcForm.e10aBoys16to18-0)+Number(
                                                                        cwcForm.e10bBoys16to18-0)+Number(
                                                                        cwcForm.e10cBoys16to18-0)+Number(
                                                                        cwcForm.e10dBoys16to18-0)+Number(
                                                                        cwcForm.e10eBoys16to18-0)+Number(
                                                                        cwcForm.e10fBoys16to18-0)+Number(
                                                                        cwcForm.e10gBoys16to18-0)+Number(
                                                                        cwcForm.e10aBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10bBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10cBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10dBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10eBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10fBoysGreaterThan18-0)+Number(
                                                                        cwcForm.e10gBoysGreaterThan18-0)+Number(
                                                                        
                                                                        cwcForm.e10aGirls0to6-0)+Number(
                                                                        cwcForm.e10bGirls0to6-0)+Number(
                                                                        cwcForm.e10cGirls0to6-0)+Number(
                                                                        cwcForm.e10dGirls0to6-0)+Number(
                                                                        cwcForm.e10eGirls0to6-0)+Number(
                                                                        cwcForm.e10fGirls0to6-0)+Number(
                                                                        cwcForm.e10gGirls0to6-0)+Number(
                                                                        cwcForm.e10aGirls7to11-0)+Number(
                                                                        cwcForm.e10bGirls7to11-0)+Number(
                                                                        cwcForm.e10cGirls7to11-0)+Number(
                                                                        cwcForm.e10dGirls7to11-0)+Number(
                                                                        cwcForm.e10eGirls7to11-0)+Number(
                                                                        cwcForm.e10fGirls7to11-0)+Number(
                                                                        cwcForm.e10gGirls7to11-0)+Number(
                                                                        cwcForm.e10aGirls12to15-0)+Number(
                                                                        cwcForm.e10bGirls12to15-0)+Number(
                                                                        cwcForm.e10cGirls12to15-0)+Number(
                                                                        cwcForm.e10dGirls12to15-0)+Number(
                                                                        cwcForm.e10eGirls12to15-0)+Number(
                                                                        cwcForm.e10fGirls12to15-0)+Number(
                                                                        cwcForm.e10gGirls12to15-0)+Number(
                                                                        cwcForm.e10aGirls16to18-0)+Number(
                                                                        cwcForm.e10bGirls16to18-0)+Number(
                                                                        cwcForm.e10cGirls16to18-0)+Number(
                                                                        cwcForm.e10dGirls16to18-0)+Number(
                                                                        cwcForm.e10eGirls16to18-0)+Number(
                                                                        cwcForm.e10fGirls16to18-0)+Number(
                                                                        cwcForm.e10gGirls16to18-0)+Number(
                                                                        cwcForm.e10aGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10bGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10cGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10dGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10eGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10fGirlsGreaterThan18-0)+Number(
                                                                        cwcForm.e10gGirlsGreaterThan18
                                                                        -0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!--------------------------------------End of E10 section ------------------------------------------>

                                   <!---------------------------------------F Section--------------------------------->
                                   <div class="b4sectionheading" id="caseF"></div>
                                   <div class="grey-header headMarg">F. 
                                   Cases pending on the last day of the reporting month by duration of pendency</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableF1">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2" class="firstrowWidth">Description</th>
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
                                                                 <label class="control-label" for="textinput">F.1.a
                                                                      Cases pending with CWCs for < 4 month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f1aBoys0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aBoys7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aBoys12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aBoys16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aBoysGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1aBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys0to6-0)+Number(
                                                                        cwcForm.f1aBoys7to11-0)+Number(
                                                                        cwcForm.f1aBoys12to15-0)+Number(
                                                                        cwcForm.f1aBoys16to18-0)+Number(
                                                                        cwcForm.f1aBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aGirls0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aGirls7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aGirls12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aGirls16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1aGirlsGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1aGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1aGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirls0to6-0)+Number(
                                                                        cwcForm.f1aGirls7to11-0)+Number(
                                                                        cwcForm.f1aGirls12to15-0)+Number(
                                                                        cwcForm.f1aGirls16to18-0)+Number(
                                                                        cwcForm.f1aGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="f1aGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys0to6-0)+Number(
                                                                        cwcForm.f1aBoys7to11-0)+Number(
                                                                        cwcForm.f1aBoys12to15-0)+Number(
                                                                        cwcForm.f1aBoys16to18-0)+Number(
                                                                        cwcForm.f1aBoysGreaterThan18-0)+Number(
                                                                        cwcForm.f1aGirls0to6-0)+Number(
                                                                        cwcForm.f1aGirls7to11-0)+Number(
                                                                        cwcForm.f1aGirls12to15-0)+Number(
                                                                        cwcForm.f1aGirls16to18-0)+Number(
                                                                        cwcForm.f1aGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.1.b
                                                                      Cases pending with CWCs for 4-6 months</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f1bBoys0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bBoys7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bBoys12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bBoys16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bBoysGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1bBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1bBoys0to6-0)+Number(
                                                                        cwcForm.f1bBoys7to11-0)+Number(
                                                                        cwcForm.f1bBoys12to15-0)+Number(
                                                                        cwcForm.f1bBoys16to18-0)+Number(
                                                                        cwcForm.f1bBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bGirls0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bGirls7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bGirls12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bGirls16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1bGirlsGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1bGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1bGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1bGirls0to6-0)+Number(
                                                                        cwcForm.f1bGirls7to11-0)+Number(
                                                                        cwcForm.f1bGirls12to15-0)+Number(
                                                                        cwcForm.f1bGirls16to18-0)+Number(
                                                                        cwcForm.f1bGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="f1bGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.f1bBoys0to6-0)+Number(
                                                                        cwcForm.f1bBoys7to11-0)+Number(
                                                                        cwcForm.f1bBoys12to15-0)+Number(
                                                                        cwcForm.f1bBoys16to18-0)+Number(
                                                                        cwcForm.f1bBoysGreaterThan18-0)+Number(cwcForm.f1bGirls0to6-0)+Number(
                                                                        cwcForm.f1bGirls7to11-0)+Number(
                                                                        cwcForm.f1bGirls12to15-0)+Number(
                                                                        cwcForm.f1bGirls16to18-0)+Number(
                                                                        cwcForm.f1bGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.1.c
                                                                      Cases pending with CWCs for 6-12 months</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f1cBoys0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cBoys7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cBoys12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cBoys16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cBoysGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1cBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1cBoys0to6-0)+Number(
                                                                        cwcForm.f1cBoys7to11-0)+Number(
                                                                        cwcForm.f1cBoys12to15-0)+Number(
                                                                        cwcForm.f1cBoys16to18-0)+Number(
                                                                        cwcForm.f1cBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cGirls0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cGirls7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cGirls12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cGirls16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1cGirlsGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1cGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1cGirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1cGirls0to6-0)+Number(
                                                                        cwcForm.f1cGirls7to11-0)+Number(
                                                                        cwcForm.f1cGirls12to15-0)+Number(
                                                                        cwcForm.f1cGirls16to18-0)+Number(
                                                                        cwcForm.f1cGirlsGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="f1cGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.f1cBoys0to6-0)+Number(
                                                                        cwcForm.f1cBoys7to11-0)+Number(
                                                                        cwcForm.f1cBoys12to15-0)+Number(
                                                                        cwcForm.f1cBoys16to18-0)+Number(
                                                                        cwcForm.f1cBoysGreaterThan18-0)+Number(
                                                                        cwcForm.f1cGirls0to6-0)+Number(
                                                                        cwcForm.f1cGirls7to11-0)+Number(
                                                                        cwcForm.f1cGirls12to15-0)+Number(
                                                                        cwcForm.f1cGirls16to18-0)+Number(
                                                                        cwcForm.f1cGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.1.d
                                                                      Cases pending with CWCs for > 12 months</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f1dBoys0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dBoys0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dBoys7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dBoys7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dBoys12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dBoys12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dBoys16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dBoys16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dBoysGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dBoysGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1dBoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f1dBoys0to6-0)+Number(
                                                                        cwcForm.f1dBoys7to11-0)+Number(
                                                                        cwcForm.f1dBoys12to15-0)+Number(
                                                                        cwcForm.f1dBoys16to18-0)+Number(
                                                                        cwcForm.f1dBoysGreaterThan18-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dGirls0to6" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dGirls0to6" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dGirls7to11" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dGirls7to11" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dGirls12to15" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dGirls12to15" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dGirls16to18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dGirls16to18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f1dGirlsGreaterThan18" ng-keyup="testEqualFE10($event)"
                                                            ng-model="cwcForm.f1dGirlsGreaterThan18" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1dGirlsTotal"
                                                            tabindex= -1 value="{{Number(cwcForm.f1dGirls0to6-0)+Number(
                                                                        cwcForm.f1dGirls7to11-0)+Number(
                                                                        cwcForm.f1dGirls12to15-0)+Number(
                                                                        cwcForm.f1dGirls16to18-0)+Number(
                                                                        cwcForm.f1dGirlsGreaterThan18-0)}}" readonly
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="f1dGrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.f1dBoys0to6-0)+Number(
                                                                        cwcForm.f1dBoys7to11-0)+Number(
                                                                        cwcForm.f1dBoys12to15-0)+Number(
                                                                        cwcForm.f1dBoys16to18-0)+Number(
                                                                        cwcForm.f1dBoysGreaterThan18-0)+Number(
                                                                        cwcForm.f1dGirls0to6-0)+Number(
                                                                        cwcForm.f1dGirls7to11-0)+Number(
                                                                        cwcForm.f1dGirls12to15-0)+Number(
                                                                        cwcForm.f1dGirls16to18-0)+Number(
                                                                        cwcForm.f1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">F.1.
                                                                      Total Number of Cases pending on the last day of the month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="f1Boys0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys0to6-0)+Number(cwcForm.f1bBoys0to6-0)+Number(cwcForm.f1cBoys0to6-0)+Number(cwcForm.f1dBoys0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Boys7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys7to11-0)+Number(cwcForm.f1bBoys7to11-0)+Number(cwcForm.f1cBoys7to11-0)+Number(cwcForm.f1dBoys7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Boys12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys12to15-0)+Number(cwcForm.f1bBoys12to15-0)+Number(cwcForm.f1cBoys12to15-0)+Number(cwcForm.f1dBoys12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Boys16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys16to18-0)+Number(cwcForm.f1bBoys16to18-0)+Number(cwcForm.f1cBoys16to18-0)+Number(cwcForm.f1dBoys16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1BoysGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoysGreaterThan18-0)+Number(cwcForm.f1bBoysGreaterThan18-0)+Number(cwcForm.f1cBoysGreaterThan18-0)+Number(cwcForm.f1dBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1BoysTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys0to6-0)+Number(cwcForm.f1bBoys0to6-0)+Number(cwcForm.f1cBoys0to6-0)+Number(cwcForm.f1dBoys0to6-0)+Number(cwcForm.f1aBoys7to11-0)+Number(cwcForm.f1bBoys7to11-0)+Number(cwcForm.f1cBoys7to11-0)+Number(cwcForm.f1dBoys7to11-0)+Number(cwcForm.f1aBoys12to15-0)+Number(cwcForm.f1bBoys12to15-0)+Number(cwcForm.f1cBoys12to15-0)+Number(cwcForm.f1dBoys12to15-0)+Number(cwcForm.f1aBoys16to18-0)+Number(cwcForm.f1bBoys16to18-0)+Number(cwcForm.f1cBoys16to18-0)+Number(cwcForm.f1dBoys16to18-0)+Number(cwcForm.f1aBoysGreaterThan18-0)+Number(cwcForm.f1bBoysGreaterThan18-0)+Number(cwcForm.f1cBoysGreaterThan18-0)+Number(cwcForm.f1dBoysGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Girls0to6" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirls0to6-0)+Number(cwcForm.f1bGirls0to6-0)+Number(cwcForm.f1cGirls0to6-0)+Number(cwcForm.f1dGirls0to6-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Girls7to11" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirls7to11-0)+Number(cwcForm.f1bGirls7to11-0)+Number(cwcForm.f1cGirls7to11-0)+Number(cwcForm.f1dGirls7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Girls12to15" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirls12to15-0)+Number(cwcForm.f1bGirls12to15-0)+Number(cwcForm.f1cGirls12to15-0)+Number(cwcForm.f1dGirls12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1Girls16to18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirls16to18-0)+Number(cwcForm.f1bGirls16to18-0)+Number(cwcForm.f1cGirls16to18-0)+Number(cwcForm.f1dGirls16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1GirlsGreaterThan18" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirlsGreaterThan18-0)+Number(cwcForm.f1bGirlsGreaterThan18-0)+Number(cwcForm.f1cGirlsGreaterThan18-0)+Number(cwcForm.f1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="f1GirlsTotal" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aGirls0to6-0)+Number(cwcForm.f1bGirls0to6-0)+Number(cwcForm.f1cGirls0to6-0)+Number(cwcForm.f1dGirls0to6-0)+Number(cwcForm.f1aGirls7to11-0)+Number(cwcForm.f1bGirls7to11-0)+Number(cwcForm.f1cGirls7to11-0)+Number(cwcForm.f1dGirls7to11-0)+Number(cwcForm.f1aGirls12to15-0)+Number(cwcForm.f1bGirls12to15-0)+Number(cwcForm.f1cGirls12to15-0)+Number(cwcForm.f1dGirls12to15-0)+Number(cwcForm.f1aGirls16to18-0)+Number(cwcForm.f1bGirls16to18-0)+Number(cwcForm.f1cGirls16to18-0)+Number(cwcForm.f1dGirls16to18-0)+Number(cwcForm.f1aGirlsGreaterThan18-0)+Number(cwcForm.f1bGirlsGreaterThan18-0)+Number(cwcForm.f1cGirlsGreaterThan18-0)+Number(cwcForm.f1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="f1GrandTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.f1aBoys0to6-0)+Number(cwcForm.f1bBoys0to6-0)+Number(cwcForm.f1cBoys0to6-0)+Number(cwcForm.f1dBoys0to6-0)+Number(cwcForm.f1aBoys7to11-0)+Number(cwcForm.f1bBoys7to11-0)+Number(cwcForm.f1cBoys7to11-0)+Number(cwcForm.f1dBoys7to11-0)+Number(cwcForm.f1aBoys12to15-0)+Number(cwcForm.f1bBoys12to15-0)+Number(cwcForm.f1cBoys12to15-0)+Number(cwcForm.f1dBoys12to15-0)+Number(cwcForm.f1aBoys16to18-0)+Number(cwcForm.f1bBoys16to18-0)+Number(cwcForm.f1cBoys16to18-0)+Number(cwcForm.f1dBoys16to18-0)+Number(cwcForm.f1aBoysGreaterThan18-0)+Number(cwcForm.f1bBoysGreaterThan18-0)+Number(cwcForm.f1cBoysGreaterThan18-0)+Number(cwcForm.f1dBoysGreaterThan18-0)+Number(cwcForm.f1aGirls0to6-0)+Number(cwcForm.f1bGirls0to6-0)+Number(cwcForm.f1cGirls0to6-0)+Number(cwcForm.f1dGirls0to6-0)+Number(cwcForm.f1aGirls7to11-0)+Number(cwcForm.f1bGirls7to11-0)+Number(cwcForm.f1cGirls7to11-0)+Number(cwcForm.f1dGirls7to11-0)+Number(cwcForm.f1aGirls12to15-0)+Number(cwcForm.f1bGirls12to15-0)+Number(cwcForm.f1cGirls12to15-0)+Number(cwcForm.f1dGirls12to15-0)+Number(cwcForm.f1aGirls16to18-0)+Number(cwcForm.f1bGirls16to18-0)+Number(cwcForm.f1cGirls16to18-0)+Number(cwcForm.f1dGirls16to18-0)+Number(cwcForm.f1aGirlsGreaterThan18-0)+Number(cwcForm.f1bGirlsGreaterThan18-0)+Number(cwcForm.f1cGirlsGreaterThan18-0)+Number(cwcForm.f1dGirlsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>

                                   <!---------------------------------------End of F section ---------------------------------- -->

                                   <!---------------------------------------Start of F2 section ---------------------------------- -->

                                   <div class="grey-header1 headMarg">F.2. Cateogary wise breakup of Children  last day of the Reporting Month </div>
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableF2">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2" >Description</th>
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
                                                                 <label class="control-label" for="textinput">F.2. No. of Children </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f2BoysSC" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2BoysSC" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2BoysST" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2BoysST" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2BoysEBC" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2BoysEBC" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                      
                                                       <td><input type="number" id="f2BoysOBC" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2BoysOBC" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2BoysOthers" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2BoysOthers" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2BoysNotKnown" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2BoysNotKnown" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f2BoysTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f2BoysSC-0)+Number(cwcForm.f2BoysST-0)+Number(
                                                                        cwcForm.f2BoysOBC-0)+Number(
                                                                        cwcForm.f2BoysEBC-0)+Number(
                                                                        cwcForm.f2BoysOthers-0)+Number(
                                                                        cwcForm.f2BoysNotKnown-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2GirlsSC" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2GirlsSC" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2GirlsST" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2GirlsST" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2GirlsEBC" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2GirlsEBC" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2GirlsOBC" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2GirlsOBC" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2GirlsOthers" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2GirlsOthers" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2GirlsNotKnown" ng-keyup="testEqualF2E10($event)"
                                                            ng-model="cwcForm.f2GirlsNotKnown" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f2GirlsTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f2GirlsSC-0)+Number(
                                                                        cwcForm.f2GirlsST-0)+Number(
                                                                        cwcForm.f2GirlsOBC-0)+Number(
                                                                        cwcForm.f2GirlsEBC-0)+Number(
                                                                        cwcForm.f2GirlsOthers-0)+Number(
                                                                        cwcForm.f2GirlsNotKnown-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f2GrandTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f2BoysSC-0)+Number(cwcForm.f2BoysST-0)+Number(
                                                                        cwcForm.f2BoysOBC-0)+Number(
                                                                        cwcForm.f2BoysEBC-0)+Number(
                                                                        cwcForm.f2BoysOthers-0)+Number(
                                                                        cwcForm.f2BoysNotKnown-0)+Number(cwcForm.f2GirlsSC-0)+Number(
                                                                        cwcForm.f2GirlsST-0)+Number(
                                                                        cwcForm.f2GirlsOBC-0)+Number(
                                                                        cwcForm.f2GirlsEBC-0)+Number(
                                                                        cwcForm.f2GirlsOthers-0)+Number(
                                                                        cwcForm.f2GirlsNotKnown-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
 								 <div class="grey-header1 headMarg">F.2.a. Total number of Minority Children last day of the Reporting Month </div>
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop minortableWidth" id="tableMinority">
                                             <thead>
                                                  <tr>
                                                  <th style="width:200px !important">Description</th>
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                  <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"> No. of Minority Children </label>
                                                            </div>
                                                       </td>
                                                  <td><input type="number" id="f2MinorityBoys" ng-keyup="testEqualF2Minority($event)"
                                                            ng-model="cwcForm.f2MinorityBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="f2MinorityGirls" ng-keyup="testEqualF2Minority($event)"
                                                            ng-model="cwcForm.f2MinorityGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f2MinorityTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.f2MinorityBoys-0)+Number(cwcForm.f2MinorityGirls-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>

                                   <!-- ---------------------------- End of F3 Section------------------------------- -->
                                   
                                   
                                   
                                   <!--------------------------------------- Start G section---------------------------------->
                                   <div class="b4sectionheading" id="caseG"></div>
                                   <div class="grey-header headMarg">G.
                                    Pendancy of cases before the CWC for declaring a child free for adoption</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableG1">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2" >Type of cases</th>
                                                       
                                                       <th colspan="3" class="gSectionHead">G1. Number of children on the first day of the reporting month</th>
                                                       
                                                       <th colspan="3" class="gSectionHead">G2. Number of new children on the reporting month</th>
                                                        
                                                       <th colspan="3" class="gSectionHead">G3. Number of children disposed on the reporting month</th>
                                                       
                                                       <th colspan="3" class="gSectionHead">G4. Number of children on the last day of the reporting month</th>
                                                        
                                                       <th colspan="3" class="gSectionHead">G5. Number of children <2 years on the last day of the reporting month </th>
                                                       
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
                                                                 <label class="control-label" for="textinput">Abandoned</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="g1AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g1AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g1AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g1AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g1AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g1AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g2AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g2AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g2AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g2AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g2AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g2AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g3AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g3AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g3AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g3AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g3AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g3AbandonedBoys-0)+Number(cwcForm.g3AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g4AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g4AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g4AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g4AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g4AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g4AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g5AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g5AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="g5AbandonedTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g5AbandonedGirls-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">Orphaned</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="g1OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g1OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g1OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g1OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g1OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g1OrphanedGirls-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g2OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g2OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g2OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g2OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g2OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g2OrphanedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g3OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g3OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g3OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g3OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g3OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g3OrphanedBoys-0)+Number(cwcForm.g3OrphanedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g4OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g4OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g4OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g4OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g4OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g4OrphanedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g5OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g5OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="g5OrphanedTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g5OrphanedGirls-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">Others</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="g1OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g1OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g1OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g1OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                              
                                                       <td><input type="text" id="g1OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1OthersBoys-0)+Number(cwcForm.g1OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g2OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g2OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g2OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g2OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g2OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g2OthersBoys-0)+Number(cwcForm.g2OthersGirls-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g3OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g3OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g3OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g3OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g3OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g3OthersBoys-0)+Number(cwcForm.g3OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g4OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g4OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g4OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g4OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g4OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g4OthersBoys-0)+Number(cwcForm.g4OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g5OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g5OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="g5OthersTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.g5OthersBoys-0)+Number(cwcForm.g5OthersGirls-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">
                                                                      Total</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="g1TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g1OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g1TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedGirls-0)+Number(cwcForm.g1OrphanedGirls-0)+Number(cwcForm.g1OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g1Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g1OthersBoys-0)+Number(cwcForm.g1AbandonedGirls-0)+Number(cwcForm.g1OrphanedGirls-0)+Number(cwcForm.g1OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g2TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g2OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g2TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g2AbandonedGirls-0)+Number(cwcForm.g2OrphanedGirls-0)+Number(cwcForm.g2OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g2Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g2OthersBoys-0)+Number(cwcForm.g2AbandonedGirls-0)+Number(cwcForm.g2OrphanedGirls-0)+Number(cwcForm.g2OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g3TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g3AbandonedBoys-0)+Number(cwcForm.g3OrphanedBoys-0)+Number(cwcForm.g3OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g3TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g3AbandonedGirls-0)+Number(cwcForm.g3OrphanedGirls-0)+Number(cwcForm.g3OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g3Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g3AbandonedBoys-0)+Number(cwcForm.g3OrphanedBoys-0)+Number(cwcForm.g3OthersBoys-0)+Number(cwcForm.g3AbandonedGirls-0)+Number(cwcForm.g3OrphanedGirls-0)+Number(cwcForm.g3OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g4TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g4OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g4TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g4AbandonedGirls-0)+Number(cwcForm.g4OrphanedGirls-0)+Number(cwcForm.g4OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g4Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g4OthersBoys-0)+Number(cwcForm.g4AbandonedGirls-0)+Number(cwcForm.g4OrphanedGirls-0)+Number(cwcForm.g4OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g5TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g5OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g5TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g5AbandonedGirls-0)+Number(cwcForm.g5OrphanedGirls-0)+Number(cwcForm.g5OthersGirls-0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="g5Total"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g5OthersBoys-0)+Number(cwcForm.g5AbandonedGirls-0)+Number(cwcForm.g5OrphanedGirls-0)+Number(cwcForm.g5OthersGirls-0)}}">
                                                       </td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableG2">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2" class="firstrowWidth">Type of cases</th>
                                                       
                                                       <th colspan="3" class="gSectionHead">G6.Number of children <2 years pending for more than 2 months on the last day of the reporting month</th>
                                                       
                                                       <th colspan="3" class="gSectionHead">G7.Number of children<br> >2 years <br>on the last day of the reporting month </th>
                                                        
                                                       <th colspan="3" class="gSectionHead">G8.Number of children >2 years pending for more than 4 months on the last day of the reporting month</th>
                                                       
                                                       <th colspan="3" class="gSectionHead">G9. Total no. of Pendancy of cases before the CWC for declaring a child free for adoption</th>
                                                       
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
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">Abandoned</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="g6AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g6AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g6AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g6AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g6AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g6AbandonedBoys-0)+Number(cwcForm.g6AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g7AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g7AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g7AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g7AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g7AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g7AbandonedBoys-0)+Number(cwcForm.g7AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g8AbandonedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g8AbandonedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g8AbandonedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g8AbandonedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g8AbandonedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g8AbandonedBoys-0)+Number(cwcForm.g8AbandonedGirls-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g9AbandonedBoys" readonly
                                                            
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g3AbandonedBoys
                                                            -0)+Number(cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g6AbandonedBoys-0)+Number(
                                                            cwcForm.g7AbandonedBoys-0)+Number(cwcForm.g8AbandonedBoys-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g9AbandonedGirls" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedGirls-0)+Number(cwcForm.g2AbandonedGirls-0)+Number(cwcForm.g3AbandonedGirls
                                                            -0)+Number(cwcForm.g4AbandonedGirls-0)+Number(cwcForm.g5AbandonedGirls-0)+Number(cwcForm.g6AbandonedGirls-0)+Number(
                                                            cwcForm.g7AbandonedGirls-0)+Number(cwcForm.g8AbandonedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="g9AbandonedTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g3AbandonedBoys
                                                            -0)+Number(cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g6AbandonedBoys-0)+Number(
                                                            cwcForm.g7AbandonedBoys-0)+Number(cwcForm.g8AbandonedBoys-0)+Number(
                                                            cwcForm.g1AbandonedGirls-0)+Number(cwcForm.g2AbandonedGirls-0)+Number(cwcForm.g3AbandonedGirls
                                                            -0)+Number(cwcForm.g4AbandonedGirls-0)+Number(cwcForm.g5AbandonedGirls-0)+Number(cwcForm.g6AbandonedGirls-0)+Number(
                                                            cwcForm.g7AbandonedGirls-0)+Number(cwcForm.g8AbandonedGirls-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">Orphaned</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="g6OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g6OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g6OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g6OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g6OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g6OrphanedBoys-0)+Number(cwcForm.g6OrphanedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g7OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g7OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g7OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g7OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g7OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g7OrphanedBoys-0)+Number(cwcForm.g7OrphanedGirls-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g8OrphanedBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g8OrphanedBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g8OrphanedGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g8OrphanedGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g8OrphanedTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g8OrphanedBoys-0)+Number(cwcForm.g8OrphanedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g9OrphanedBoys" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g3OrphanedBoys
                                                            -0)+Number(cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g6OrphanedBoys
                                                            -0)+Number(cwcForm.g7OrphanedBoys-0)+Number(cwcForm.g8OrphanedBoys-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g9OrphanedGirls" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1OrphanedGirls-0)+Number(cwcForm.g2OrphanedGirls-0)+Number(cwcForm.g3OrphanedGirls
                                                            -0)+Number(cwcForm.g4OrphanedGirls-0)+Number(cwcForm.g5OrphanedGirls-0)+Number(cwcForm.g6OrphanedGirls
                                                            -0)+Number(cwcForm.g7OrphanedGirls-0)+Number(cwcForm.g8OrphanedGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="g9OrphanedTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g3OrphanedBoys
                                                            -0)+Number(cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g6OrphanedBoys
                                                            -0)+Number(cwcForm.g7OrphanedBoys-0)+Number(cwcForm.g8OrphanedBoys-0)+Number(
                                                            cwcForm.g1OrphanedGirls-0)+Number(cwcForm.g2OrphanedGirls-0)+Number(cwcForm.g3OrphanedGirls
                                                            -0)+Number(cwcForm.g4OrphanedGirls-0)+Number(cwcForm.g5OrphanedGirls-0)+Number(cwcForm.g6OrphanedGirls
                                                            -0)+Number(cwcForm.g7OrphanedGirls-0)+Number(cwcForm.g8OrphanedGirls-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">Others</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="g6OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g6OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g6OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g6OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g6OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g6OthersBoys-0)+Number(cwcForm.g6OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g7OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g7OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g7OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g7OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g7OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g7OthersBoys-0)+Number(cwcForm.g7OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g8OthersBoys" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g8OthersBoys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g8OthersGirls" ng-keyup="testEqualGC($event)"
                                                            ng-model="cwcForm.g8OthersGirls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g8OthersTotal" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g8OthersBoys-0)+Number(cwcForm.g8OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g9OthersBoys" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1OthersBoys-0)+Number(cwcForm.g2OthersBoys-0)+Number(cwcForm.g3OthersBoys-0)+Number(
                                                            cwcForm.g4OthersBoys-0)+Number(cwcForm.g5OthersBoys-0)+Number(cwcForm.g6OthersBoys
                                                            -0)+Number(cwcForm.g7OthersBoys-0)+Number(cwcForm.g8OthersBoys-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="g9OthersGirls" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.g1OthersGirls-0)+Number(cwcForm.g2OthersGirls-0)+Number(cwcForm.g3OthersGirls-0)+Number(
                                                            cwcForm.g4OthersGirls-0)+Number(cwcForm.g5OthersGirls-0)+Number(cwcForm.g6OthersGirls
                                                            -0)+Number(cwcForm.g7OthersGirls-0)+Number(cwcForm.g8OthersGirls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                             
                                                       <td><input readonly type="text" id="g9OthersTotal"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            tabindex= -1 value="{{Number(cwcForm.g1OthersBoys-0)+Number(cwcForm.g2OthersBoys-0)+Number(cwcForm.g3OthersBoys-0)+Number(
                                                            cwcForm.g4OthersBoys-0)+Number(cwcForm.g5OthersBoys-0)+Number(cwcForm.g6OthersBoys
                                                            -0)+Number(cwcForm.g7OthersBoys-0)+Number(cwcForm.g8OthersBoys-0)+Number(
                                                            cwcForm.g1OthersGirls-0)+Number(cwcForm.g2OthersGirls-0)+Number(cwcForm.g3OthersGirls-0)+Number(
                                                            cwcForm.g4OthersGirls-0)+Number(cwcForm.g5OthersGirls-0)+Number(cwcForm.g6OthersGirls
                                                            -0)+Number(cwcForm.g7OthersGirls-0)+Number(cwcForm.g8OthersGirls-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">Total</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="g6TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g6AbandonedBoys-0)+Number(
                                                                      cwcForm.g6OrphanedBoys-0)+Number(
                                                                      cwcForm.g6OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g6TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g6AbandonedGirls-0)+Number(
                                                                      cwcForm.g6OrphanedGirls-0)+Number(
                                                                      cwcForm.g6OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g6Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g6AbandonedBoys-0)+Number(
                                                                      cwcForm.g6OrphanedBoys-0)+Number(
                                                                      cwcForm.g6OthersBoys-0)+Number(
                                                                      cwcForm.g6AbandonedGirls-0)+Number(
                                                                      cwcForm.g6OrphanedGirls-0)+Number(
                                                                      cwcForm.g6OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g7TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g7AbandonedBoys-0)+Number(
                                                                      cwcForm.g7OrphanedBoys-0)+Number(
                                                                      cwcForm.g7OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g7TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g7AbandonedGirls-0)+Number(
                                                                      cwcForm.g7OrphanedGirls-0)+Number(
                                                                      cwcForm.g7OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g7Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g7AbandonedBoys-0)+Number(
                                                                      cwcForm.g7OrphanedBoys-0)+Number(
                                                                      cwcForm.g7OthersBoys-0)+Number(
                                                                      cwcForm.g7AbandonedGirls-0)+Number(
                                                                      cwcForm.g7OrphanedGirls-0)+Number(
                                                                      cwcForm.g7OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g8TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g8AbandonedBoys-0)+Number(
                                                                      cwcForm.g8OrphanedBoys-0)+Number(
                                                                      cwcForm.g8OthersBoys-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g8TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g8AbandonedGirls-0)+Number(
                                                                      cwcForm.g8OrphanedGirls-0)+Number(
                                                                      cwcForm.g8OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g8Total" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g8AbandonedBoys-0)+Number(
                                                                      cwcForm.g8OrphanedBoys-0)+Number(
                                                                      cwcForm.g8OthersBoys-0)+Number(
                                                                      cwcForm.g8AbandonedGirls-0)+Number(
                                                                      cwcForm.g8OrphanedGirls-0)+Number(
                                                                      cwcForm.g8OthersGirls-0)}}">
                                                       </td>
                                                       <td><input type="text" id="g9TotalBoys" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g3AbandonedBoys-0)+Number(
                                                                      cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g6AbandonedBoys-0)+Number(
                                                                      cwcForm.g7AbandonedBoys-0)+Number(cwcForm.g8AbandonedBoys-0)+Number(
                                                                      cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g3OrphanedBoys-0)+Number(
                                                                      cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g6OrphanedBoys-0)+Number(
                                                                      cwcForm.g7OrphanedBoys-0)+Number(cwcForm.g8OrphanedBoys-0)+Number(
                                                                      cwcForm.g1OthersBoys-0)+Number(cwcForm.g2OthersBoys-0)+Number(cwcForm.g3OthersBoys-0)+Number(                                          
                                                                      cwcForm.g4OthersBoys-0)+Number(cwcForm.g5OthersBoys-0)+Number(cwcForm.g6OthersBoys-0)+Number(
                                                                      cwcForm.g7OthersBoys-0)+Number(cwcForm.g8OthersBoys
                                                                      -0)}}">
                                                       </td>
                                                       <td><input type="text" id="g9TotalGirls" readonly
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedGirls-0)+Number(cwcForm.g2AbandonedGirls-0)+Number(cwcForm.g3AbandonedGirls-0)+Number(
                                                                      cwcForm.g4AbandonedGirls-0)+Number(cwcForm.g5AbandonedGirls-0)+Number(cwcForm.g6AbandonedGirls-0)+Number(
                                                                      cwcForm.g7AbandonedGirls-0)+Number(cwcForm.g8AbandonedGirls-0)+Number(
                                                                      cwcForm.g1OrphanedGirls-0)+Number(cwcForm.g2OrphanedGirls-0)+Number(cwcForm.g3OrphanedGirls-0)+Number(
                                                                      cwcForm.g4OrphanedGirls-0)+Number(cwcForm.g5OrphanedGirls-0)+Number(cwcForm.g6OrphanedGirls-0)+Number(
                                                                      cwcForm.g7OrphanedGirls-0)+Number(cwcForm.g8OrphanedGirls-0)+Number(
                                                                      cwcForm.g1OthersGirls-0)+Number(cwcForm.g2OthersGirls-0)+Number(cwcForm.g3OthersGirls-0)+Number(
                                                                      cwcForm.g4OthersGirls-0)+Number(cwcForm.g5OthersGirls-0)+Number(cwcForm.g6OthersGirls-0)+Number(
                                                                      cwcForm.g7OthersGirls-0)+Number(cwcForm.g8OthersGirls
                                                                      -0)}}">
                                                       </td>
                                                       <td><input readonly type="text" id="g9Total"
                                                             required class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            tabindex= -1 value="{{Number(cwcForm.g1AbandonedBoys-0)+Number(cwcForm.g2AbandonedBoys-0)+Number(cwcForm.g3AbandonedBoys-0)+Number(
                                                                      cwcForm.g4AbandonedBoys-0)+Number(cwcForm.g5AbandonedBoys-0)+Number(cwcForm.g6AbandonedBoys-0)+Number(
                                                                      cwcForm.g7AbandonedBoys-0)+Number(cwcForm.g8AbandonedBoys-0)+Number(
                                                                      cwcForm.g1OrphanedBoys-0)+Number(cwcForm.g2OrphanedBoys-0)+Number(cwcForm.g3OrphanedBoys-0)+Number(
                                                                      cwcForm.g4OrphanedBoys-0)+Number(cwcForm.g5OrphanedBoys-0)+Number(cwcForm.g6OrphanedBoys-0)+Number(
                                                                      cwcForm.g7OrphanedBoys-0)+Number(cwcForm.g8OrphanedBoys-0)+Number(
                                                                      cwcForm.g1OthersBoys-0)+Number(cwcForm.g2OthersBoys-0)+Number(cwcForm.g3OthersBoys-0)+Number(                                          
                                                                      cwcForm.g4OthersBoys-0)+Number(cwcForm.g5OthersBoys-0)+Number(cwcForm.g6OthersBoys-0)+Number(
                                                                      cwcForm.g7OthersBoys-0)+Number(cwcForm.g8OthersBoys-0)+Number(
                                                                      cwcForm.g1AbandonedGirls-0)+Number(cwcForm.g2AbandonedGirls-0)+Number(cwcForm.g3AbandonedGirls-0)+Number(
                                                                      cwcForm.g4AbandonedGirls-0)+Number(cwcForm.g5AbandonedGirls-0)+Number(cwcForm.g6AbandonedGirls-0)+Number(
                                                                      cwcForm.g7AbandonedGirls-0)+Number(cwcForm.g8AbandonedGirls-0)+Number(
                                                                      cwcForm.g1OrphanedGirls-0)+Number(cwcForm.g2OrphanedGirls-0)+Number(cwcForm.g3OrphanedGirls-0)+Number(
                                                                      cwcForm.g4OrphanedGirls-0)+Number(cwcForm.g5OrphanedGirls-0)+Number(cwcForm.g6OrphanedGirls-0)+Number(
                                                                      cwcForm.g7OrphanedGirls-0)+Number(cwcForm.g8OrphanedGirls-0)+Number(
                                                                      cwcForm.g1OthersGirls-0)+Number(cwcForm.g2OthersGirls-0)+Number(cwcForm.g3OthersGirls-0)+Number(
                                                                      cwcForm.g4OthersGirls-0)+Number(cwcForm.g5OthersGirls-0)+Number(cwcForm.g6OthersGirls-0)+Number(
                                                                      cwcForm.g7OthersGirls-0)+Number(cwcForm.g8OthersGirls-0)}}">
                                                       </td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
                                   <!------------------------------------------ End G section------------------------------->


                                   <!----------------------------------------------Start H section------------------------------------------->
                                   <div class="b4sectionheading" id="caseH"></div>
                                   <div class="grey-header headMarg">H. Functions and Types of
                                        Orders by CWCs</div>

                                   <div class="form-group labelFont sectionMarginTop borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                             for="textinput"> H.1. No. of sittings Held in the
                                             Reporting Month</label>
                                        <div class="col-md-6 marginBottomTop">
                                             <input type="number" id="h1"
                                                  ng-model="cwcForm.h1"
                                                  ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackground removeExponentialValueE"
                                                   only-four-digits>
                                        </div>
                                   </div>

                                   <div class="form-group labelFont borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.2. No. of Cases in Which Hearing was
                                             done in the Reporting Month</label>
                                        <div class="col-md-6">
                                             <input type="number" ng-model="cwcForm.h2"
                                                  ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackground removeExponentialValueE"
                                                   only-four-digits>
                                        </div>
                                   </div>

                                   <div class="form-group labelFont borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.3. No. of Cases in which hearing was done more 
                                             than 2 times in the reporting month</label>
                                        <div class="col-md-6">
                                             <input type="number"
                                                  ng-model="cwcForm.h3"
                                                  ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackground removeExponentialValueE"
                                                  only-four-digits>
                                        </div>
                                   </div>
                                   
                                   
                                   <div class="form-group labelFont ">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.4. No. of visits made to institutions for CNCP in this month</label>
                                        <div class="col-md-6">
                                             <input type="number" ng-model="cwcForm.h4"
                                                  ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackground removeExponentialValueE"
                                                   only-four-digits>
                                        </div>
                                   </div>

                                   <div class="form-group labelFont ">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.5. Names of institutions for CNCP visited in this month</label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="cwcForm.h5" address-validation
                                                  ng-disabled="cwcForm.submitted" spellcheck="false"
                                                   required class="form-control  inputBackgroundgeneral">
                                        </div>
                                   </div>

                                   <div class="form-group labelFont borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.6.  No. of visits made to block HQ/ villages to outreach  
                                             CNCP children or for any meeting in the reporting month</label>
                                        <div class="col-md-6">
                                             <input type="number" limit-to="2" max="31" 
                                             onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
                                             ng-disabled="cwcForm.submitted" ng-model="cwcForm.h6"
                                             required class="form-control inputBackground ">
                                        </div>
                                   </div>
                                   
                                   
                                   <div class="form-group labelFont ">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.7.a.  No. of 'Fit Persons' recognized and functional(till date)</label>
                                        <div class="col-md-6">
                                             <input type="number" ng-model="cwcForm.h7a"
                                                  ng-disabled="cwcForm.submitted" ng-keyup="resetHText(cwcForm.h7a, 'h7b')"
                                                   required class="form-control inputBackground removeExponentialValueE"
                                                   only-four-digits>
                                        </div>
                                   </div>

                                   <div class="form-group labelFont borderBottom" ng-show="cwcForm.h7a > 0">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.7.b. Please enter names of fit persons (till date)</label>
                                        <div class="col-md-6">
                                             <textarea type="text" ng-model="cwcForm.h7b" address-validation
                                                  style="resize: none;" spellcheck="false"
                                                  ng-disabled="cwcForm.submitted"
                                                  ng-required="cwcForm.h7a > 0" class="form-control  inputBackgroundgeneral"></textarea>

                                        </div>
                                   </div>


                                   <div class="form-group labelFont ">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.8.a.  No. of 'Fit Facility' Recognized and functional</label>
                                        <div class="col-md-6">
                                             <input type="number" ng-model="cwcForm.h8a"
                                                  ng-disabled="cwcForm.submitted"
                                                   required class="form-control inputBackground removeExponentialValueE"
                                                   only-four-digits>
                                        </div>
                                   </div>

                                   <div class="form-group labelFont borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> H.8.b. Please Enter Names of Fit facilities</label>
                                        <div class="col-md-6">
                                             <textarea type="text" ng-model="cwcForm.h8b"
                                                  style="resize: none;"
                                                  ng-disabled="cwcForm.submitted" address-validation
                                                   required class="form-control  inputBackgroundgeneral"></textarea>

                                        </div>
                                   </div>
                                   
                                   
                                   <div class="grey-header headMarg">Report of Social Investigation Report (SIR) (Cumulative)</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>Description</th>
                                                       
                                                       <th>Boys</th>
                                                       
                                                       <th>Girls </th>
                                                        
                                                       <th>Total</th>
                                                       
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.9. No. of orders issued for filing of SIR (old cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h9Boys"
                                                            ng-model="cwcForm.h9Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h9Girls"
                                                            ng-model="cwcForm.h9Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h9Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h9Boys-0)+Number(cwcForm.h9Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.10. No. of SIR submitted (old cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h10Boys"
                                                            ng-model="cwcForm.h10Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h10Girls"
                                                            ng-model="cwcForm.h10Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h10Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h10Boys-0)+Number(cwcForm.h10Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.11. No. of orders issued for filing of SIR (new cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h11Boys"
                                                            ng-model="cwcForm.h11Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h11Girls"
                                                            ng-model="cwcForm.h11Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h11Total" readonly
                                                       tabindex= -1 value="{{Number(cwcForm.h11Boys-0)+Number(cwcForm.h11Girls-0)}}"
                                                             ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.12. No. of SIR submitted (new cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h12Boys"
                                                            ng-model="cwcForm.h12Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h12Girls"
                                                            ng-model="cwcForm.h12Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h12Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h12Boys-0)+Number(cwcForm.h12Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>

                                   <div class="grey-header headMarg">Report of Individual Care Plan (ICP) (Cumulative)</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH1316">
                                             <thead>
                                                  <tr>
                                                       <th>Description</th>
                                                       
                                                       <th>Boys</th>
                                                       
                                                       <th>Girls </th>
                                                        
                                                       <th>Total</th>
                                                       
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.13. No. of orders issued for ICPs (old cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h13Boys"
                                                            ng-model="cwcForm.h13Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h13Girls"
                                                            ng-model="cwcForm.h13Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h13Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h13Boys-0)+Number(cwcForm.h13Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.14. No. of ICPs submitted (old cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h14Boys"
                                                            ng-model="cwcForm.h14Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h14Girls"
                                                            ng-model="cwcForm.h14Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h14Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h14Boys-0)+Number(cwcForm.h14Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.15. No. of orders issued for ICPs (new cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h15Boys"
                                                            ng-model="cwcForm.h15Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h15Girls"
                                                            ng-model="cwcForm.h15Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h15Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h15Boys-0)+Number(cwcForm.h15Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.16. No. of ICPs submitted (new cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h16Boys"
                                                            ng-model="cwcForm.h16Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h16Girls"
                                                            ng-model="cwcForm.h16Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h16Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h16Boys-0)+Number(cwcForm.h16Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   <div class="grey-header headMarg">Report of Case History Format (Cumulative)</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH1720">
                                             <thead>
                                                  <tr>
                                                       <th>Description</th>
                                                       
                                                       <th>Boys</th>
                                                       
                                                       <th>Girls </th>
                                                        
                                                       <th>Total</th>
                                                       
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.17. No. of orders issued for Case History (old cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h17Boys"
                                                            ng-model="cwcForm.h17Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h17Girls"
                                                            ng-model="cwcForm.h17Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h17Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h17Boys-0)+Number(cwcForm.h17Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.18. No. of Case History Formats submitted (old cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h18Boys"
                                                            ng-model="cwcForm.h18Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h18Girls"
                                                            ng-model="cwcForm.h18Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h18Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h18Boys-0)+Number(cwcForm.h18Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.19. No. of orders issued for Case History (new cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h19Boys"
                                                            ng-model="cwcForm.h19Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h19Girls"
                                                            ng-model="cwcForm.h19Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h19Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h19Boys-0)+Number(cwcForm.h19Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.20. No. of Case History Formats submitted (new cases)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h20Boys"
                                                            ng-model="cwcForm.h20Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h20Girls"
                                                            ng-model="cwcForm.h20Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h20Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h20Boys-0)+Number(cwcForm.h20Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   <div class="grey-header headMarg">Other Order Passed by the Committee (Cumulative)</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Description</th>
                                                       
                                                       <th>Boys</th>
                                                       
                                                       <th>Girls </th>
                                                        
                                                       <th>Total</th>
                                                       
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.21. No. of cases referred to JJB for registration of FIR in cases of offence committed against children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h21Boys"
                                                            ng-model="cwcForm.h21Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h21Girls"
                                                            ng-model="cwcForm.h21Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h21Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h21Boys-0)+Number(cwcForm.h21Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.22. No. of FIRs ordered by the CWC in cases of missing children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h22Boys"
                                                            ng-model="cwcForm.h22Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h22Girls"
                                                            ng-model="cwcForm.h22Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h22Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h22Boys-0)+Number(cwcForm.h22Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.23. No. of cases for which Rehabilitation card has been generated</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h23Boys"
                                                            ng-model="cwcForm.h23Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h23Girls"
                                                            ng-model="cwcForm.h23Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h23Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h23Boys-0)+Number(cwcForm.h23Girls-0)}}"
                                                            ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.24. No. of Cases in which process of compensation initiated</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h24Boys"
                                                            ng-model="cwcForm.h24Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h24Girls"
                                                            ng-model="cwcForm.h24Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h24Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h24Boys-0)+Number(cwcForm.h24Girls-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.25. No. of POCSO cases FIR transferred to CWC for care and protection, by the police in the reporting month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h25Boys"
                                                            ng-model="cwcForm.h25Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h25Girls"
                                                            ng-model="cwcForm.h25Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h25Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h25Boys-0)+Number(cwcForm.h25Girls-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.26. No. of cases in which Case Monitoring sheet maintained in Individual file by CWC</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h26Boys"
                                                            ng-model="cwcForm.h26Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h26Girls"
                                                            ng-model="cwcForm.h26Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h26Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h26Boys-0)+Number(cwcForm.h26Girls-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.27. No. of cases in which Case summary maintained  by CWC</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h27Boys"
                                                            ng-model="cwcForm.h27Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h27Girls"
                                                            ng-model="cwcForm.h27Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h27Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h27Boys-0)+Number(cwcForm.h27Girls-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.28. Total no. of cases linked with Track Child Portal</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="h28Boys"
                                                            ng-model="cwcForm.h28Boys" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="h28Girls"
                                                            ng-model="cwcForm.h28Girls" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="h28Total" readonly
                                                            tabindex= -1 value="{{Number(cwcForm.h28Boys-0)+Number(cwcForm.h28Girls-0)}}" ng-disabled="cwcForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">
                                                                      H.29. Remarks/Suggestions (Please Specify)</label>
                                                            </div>
                                                       </td>
                                                       <td colspan="3"><textarea type="text" id="h29Remarks" style="resize:none;"
                                                            ng-model="cwcForm.h29Remarks" ng-disabled="cwcForm.submitted" address-validation
                                                             required class="form-control inputBackground tableinputWidth "></textarea></td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>
                                   

                                   

                                   <!----------------------------------------------I section----------------------------------------- -->

                                   <div class="b4sectionheading" id="caseI"></div>
                                   <div class="grey-header headMarg">I. Training on JJ System</div>

                                   <div class="form-group labelFont sectionMarginTop borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                             for="textinput"> I.1.  Was the Training held on JJ
                                             system?</label>
                                        <div class="col-md-6 marginBottomTop">
                                             <select  required class="form-control inputBackground"
                                             ng-change="resetToZeroaccd1(cwcForm.i1Training)"
                                                  ng-disabled="cwcForm.submitted" ng-model="cwcForm.i1Training">
                                                  <option value="" disabled selected>Select</option>
                                                  <option value="true">Yes</option>
                                                  <option value="false">No</option>
                                             </select>
                                        </div>
                                   </div>


                                   <div ng-show="cwcForm.i1Training == 'true'">
                                        <div class="form-group labelFont ">
                                             <label class="col-md-6 control-label labelLeftAlign"
                                                  for="textinput"> I.1.a. Numbers of Training Held</label>
                                             <div class="col-md-6">
                                                  <input type="number" ng-model="cwcForm.i1aNoOfTrainings"
                                                       ng-blur="validateNoOfTraining(cwcForm.i1aNoOfTrainings)"
                                                       ng-disabled="cwcForm.submitted" id="i1aNoOfTrainings"
                                                        required class="form-control inputBackground removeExponentialValueE"
                                                        limit-to="2">
                                             </div>
                                        </div>



                                        <div class="panel-group" id="accordion" role="tablist"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default"
                                                  ng-repeat="cwcTrainingDetails in cwcTrainingDetailsRepetitionArray track by $index">
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
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.b. Duration of Training (no.
                                                                      of days)</label>
                                                                 <div class="col-md-6">
                                                                      <input type="number" ng-disabled="cwcForm.submitted" limit-to="2" 
                                                                      max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
                                                                      ng-model="cwcTrainingDetailsRepetitionArray[$index].durationOfTraining" only-four-digits
                                                                      class="form-control inputBackgroundgeneral removeExponentialValueE">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.c. Training From </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="trainingFromDatepicker{{$index}}"
                                                                           ng-disabled="cwcForm.submitted" readonly
                                                                           ng-click="openFromDatePicker($index)"
                                                                           ng-model="cwcTrainingDetailsRepetitionArray[$index].trainingFrom"
                                                                             class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
                                                                           class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.d. Training To </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="trainingToDatepicker{{$index}}"
                                                                           ng-disabled="cwcForm.submitted" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="cwcTrainingDetailsRepetitionArray[$index].trainingTo"
                                                                             class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
                                                                           class="fa fa-calendar fa-5x" id="trainingToDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.e. Training Organised by</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-change="resetAccordionOthers2(cwcTrainingDetails)"
                                                                           ng-disabled="cwcForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
                                                                           ng-model="cwcTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground inputBackgroundgeneral">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                      <!--                               <input type="text" ng-model="cwcForm.h1eTrainingOrganisedBy"  required class="form-control inputBackground"> -->
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="cwcTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.e.i. If Training Organised by
                                                                      Others, Please Specify</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="cwcForm.submitted" address-validation
                                                                           ng-model="cwcTrainingDetailsRepetitionArray[$index].trainingOrganisedByOthers"
                                                                             class="form-control inputBackground inputBackgroundgeneral">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.f. Topic of Training</label>
                                                                 <div class="col-md-6">
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="cb checkboxstyle">
																		<input id="JJActRule" type="checkbox" ng-disabled="cwcForm.submitted"
																		ng-model="cwcTrainingDetailsRepetitionArray[$index].totJjAct"> <label
																			for="JJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="LawsandICPS" type="checkbox" ng-disabled="cwcForm.submitted"
																		ng-model="cwcTrainingDetailsRepetitionArray[$index].totChildRelatedLawsICPS"> <label
																			for="LawsandICPS"> Child related Laws and ICPS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="POCSOAct" type="checkbox" ng-disabled="cwcForm.submitted"
																		ng-model="cwcTrainingDetailsRepetitionArray[$index].totPosco"> <label
																			for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Combinedtraining" type="checkbox" ng-disabled="cwcForm.submitted"
																		ng-model="cwcTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
																			for="Combinedtraining"> Combined training </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="CPMISTrackchildCLTS" type="checkbox" ng-disabled="cwcForm.submitted"
																		ng-model="cwcTrainingDetailsRepetitionArray[$index].totCpmisOrTrackChildOrClts"> <label
																			for="CPMISTrackchildCLTS"> CPMIS/Track child/CLTS </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input id="Others" type="checkbox" ng-disabled="cwcForm.submitted"
																		ng-click="clearTopicOfTrainingOthers(cwcTrainingDetailsRepetitionArray[$index])"
																		ng-model="cwcTrainingDetailsRepetitionArray[$index].totOthers"> <label
																			for="Others"> Others </label>
																	</div>
																</li>
																	</ul>
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="cwcTrainingDetailsRepetitionArray[$index].totOthers">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1.f.i. If topic of Training is
                                                                      Other, Please specify </label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="cwcForm.submitted" address-validation
                                                                           ng-model="cwcTrainingDetailsRepetitionArray[$index].topicOfTrainingOthers"
                                                                             class="form-control inputBackground inputBackgroundgeneral">
                                                                 </div>
                                                            </div>


												<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend totalFont"
														for="textinput">I.1.g. Training Attended by :</label>
														
														<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrained totalFont"
														for="textinput">Number of persons trained</label></div>
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> CWC  Chairperson </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number" only-four-digits
															ng-model="cwcTrainingDetailsRepetitionArray[$index].tabCwcChairperson"
															ng-disabled="cwcForm.submitted"
															  class="form-control inputBackground">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Members </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number" only-four-digits
															ng-model="cwcTrainingDetailsRepetitionArray[$index].tabMembers"
															ng-disabled="cwcForm.submitted"
															  class="form-control inputBackground">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Assistant Cum Data Entry Operator </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number" only-four-digits
															ng-model="cwcTrainingDetailsRepetitionArray[$index].tabAssistantCumDataEntryOperator"
															ng-disabled="cwcForm.submitted"
															  class="form-control inputBackground">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">  Panel Lawyer </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number" only-four-digits
															ng-model="cwcTrainingDetailsRepetitionArray[$index].tabPanelLawyer"
															ng-disabled="cwcForm.submitted"
															  class="form-control inputBackground">
													</div>
												</div>
												
												<div
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput"> Others </label>
													<div class="col-md-6 marginBottomTop">
														<input type="number" only-four-digits ng-keyup="resetAccG($index);"
															ng-model="cwcTrainingDetailsRepetitionArray[$index].tabOthers"
															ng-disabled="cwcForm.submitted"
															  class="form-control inputBackground">
													</div>
												</div>
												
												<div ng-show="cwcTrainingDetailsRepetitionArray[$index].tabOthers>0"
													class="form-group labelFont sectionMarginTop  traningattnedlist">
													<label
														class="col-md-6 control-label labelLeftAlign marginBottomTop"
														for="textinput">I.1.g.i  If training attended by other, Please specify</label>
													<div class="col-md-6 marginBottomTop">
														<input type="text" address-validation
															ng-model="cwcTrainingDetailsRepetitionArray[$index].trainingAttendedByOthers"
															ng-disabled="cwcForm.submitted"
															  class="form-control inputBackgroundgeneral">
													</div>
												</div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <!-- --------Adding training details------- -->

                                             <div class="col-md-12 text-left adddingdetails">
                                                  <div class="addingnewdetails-container">
                                                       <div id="trainingDetailserror" class="error-style"></div>
                                                       <button type="button" class="addingnewdetails" ng-disabled="cwcForm.submitted"
                                                            ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
                                                       <button type="button" class="addingnewdetails" ng-disabled="cwcForm.submitted"
                                                            ng-show="cwcTrainingDetailsRepetitionArray.length > 1"
                                                            ng-click="deleteConfirm()">-</button>
                                                       <div id="maximumLimit10Error" class="error-style"></div>
                                                  </div>
                                             </div>

                                             <!-- end ---------------------------- -->

                                        </div>
                                   </div>
							</form>
                                   <!-----------------------------End of H section ------------------ -------------------->


                                   <br> <br> <br> <br> <br> <br>&nbsp;<br>
                                   <br> <br>&nbsp;<br> <br> <br>&nbsp;
                                   <!--                               <a href="#" class="back-to-top" -->
                                   <!--                                    style="display: inline;float:"> <i class="fa fa-arrow-circle-up"></i> -->
                                   <!--                               </a> -->
                              </div>
                         
                    </div>
               </div>
          </div>
          
          
          <!-- end data entry for cwc  -->   
          
          <div></div>
     </div>
     <div class="modal fade" id="successModalForCWCSave"
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
     
     <div class="modal fade autoSaveModal" id="successModalForAutoSaveCWC"
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

     <div class="modal fade" id="successModalForCWCSubmit"
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
                                   ng-click="saveCWC(cwcForm, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   data-dismiss="modal" aria-hidden="true">Cancel</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="confirmationModalForCWCdeleteAccordion"
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
<!-- <div id="ErrAlertModal" class="modal" role="dialog" data-backdrop="" -->
<!-- 		 data-keyboard="false"> -->
<!-- 		<div class="modal-dialog"> -->
<!-- 			<!-- Modal content --> -->
<!-- 			<div class="modal-content"> -->
<!-- 				<div class="modal-body text-center"> -->
<!-- 					<div class="errorbody">{{alertMessage}}</div> -->
<!-- 					<div class="errorbody" style="height:10px">{{}}</div> -->
<!-- 					<button type="button" class="btn errorOk" data-dismiss="modal" aria-hidden="true">Close</button> -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> -->
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
                                   ng-click="checksave()" data-dismiss="modal" aria-hidden="true">SAVE</button>
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
     <script src="resources/js/controllers/cwcController.js"></script>
	 <script src="resources/js/jsFunctions/cwcJsFunctions.js"></script>
	 <script src="resources/services/commonService.js"></script>
	 <script src="resources/js/angular-md5.js"></script>
	  <jsp:include page="fragments/footer.jsp" />
	 <script type="text/javascript">
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
		
	</script>
	<script type="text/javascript">
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
					scrollTop : 55
				}, 0);
			} else if ($('#casec').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 110
				}, 0);
			} else if ($('#cased').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 150
				}, 0);
			} else if ($('#casee').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 205
				}, 0);
			}
			else if ($('#casef').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 255
				}, 0);
			}else if ($('#caseg').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 300
				}, 0);
			}
		});
	});
	</script>
	<script type="text/javascript">
	$(window).scroll(function() {
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
				else{
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
          $(function(){
               $("#meetingdatepicker").datepicker();
               $("#homeManagementdatepicker").datepicker();
               $("#Othermeetingdatepicker").datepicker();

          });
     </script>
     <script>
          $(function() {
               $("input[type='number']").prop('min', 0);
          });
          $(document).ready(function () {
       	    $("input[type='number']").bind('copy paste', function (e) {
       	       e.preventDefault();
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
          window.addEventListener("hashchange", function() {
               scrollBy(0, 0);
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
	   	    /* 	$($(".invalid")[0]).addClass("invalidBorder"); */
	   	  	window.scrollTo(0, $($(".invalid")[0]).offset().top - offset);
	   	  	}, true);
	   	  	document.addEventListener('change', function(e){
	   	    	$(e.target).removeClass("invalid")
	   	    /* 	$(e.target).removeClass("invalidBorder"); */
	   	  	}, true);

		});
     $('#cwcFormDetails').on('focus', 'input[type=number]', function (e) {
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