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
<title>Special Juvenile Police Unit</title>
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
<body ng-app="sjpuApp" ng-controller="SJPU_Controller" 
     data-spy="scroll" data-target="#myScrollspy" data-offset="20" class="ng-cloak">
     <!-- spinner -->
     <div id="spinner" class="loader" style="display: none;"></div>
     <div id="loader-mask" class="loader" style="display: none;"></div>
     <!-- /spinner -->
     <jsp:include page="fragments/header.jsp" />
     <div class="b4sectionheading" id="gInfo"></div>
     <!--      <div class="container"> -->
     <div class="row marginspc">
     
     <!-- section for sticky nav menu -->
      <form class="form-horizontal" name="sjpuFormDetails"
                              id="sjpuFormDetails" data-toggle="validator" role="form">
          <nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
               <h5 class="cwcHeading">Special Juvenile Police Unit <br> Monthly Report</h5>
               <ul class="nav nav-pills nav-stacked sectionList flexcroll" id="sectionindctr">
                    <li id="gi" class="active sectionUlist active1"><a
                         href="#gInfo"><span class="leftmargin"></span>General
                              Information </a></li>
                    <li id="casea" class="sectionUlist"><a href="#caseA">A.
                              Cases of Children in Need of Care and Protection (CNCP) in the reporting month</a></li>
                              
                    <li id="caseb" class="sectionUlist"><a href="#caseB">B. Cases Reported and Actions Taken (in the Reporting Month) for CNCP cases </a></li>
                              
                    <li id="casec" class="sectionUlist"><a href="#caseC">C.
                              No. of Children in Conflict with Law (CICL) handled</a></li>

                    <li id="cased" class="sectionUlist"><a href="#caseD">D.
                              Types of Function and Order SJPU (In the reporting month) for CICL Cases Only</a></li>

                    <li id="casee" class="sectionUlist"><a href="#caseE">E.
                              Participation of SJPU in Other Programs and Details of Cases Registered under various Acts (In the reporting month)</a></li>

                    <li id="casef" class="sectionUlist"><a href="#caseF">F.
                              Cases registered under Different Acts</a></li>

                    <li id="caseg" class="sectionUlist"><a href="#caseG">G.
                             Training on JJ System </a></li>

               </ul>

               <!--           <div class="row">
               <div class="col-md-6 savebtn">
                    <img class="saveSvg"
                         src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                         height="18" />
                    <a href="saveCWC"><h5 class="borderright">SAVE</h5></a>
               </div> -->
               <div ng-hide="sjpuForm.submitted">
                   <a href=""> <div class="col-md-6 savebtn locline" ng-click="saveSJPU(sjpuForm, 'save')">
                         <img class="saveSvg" 
                              ng-disabled="sjpuForm.submitted"
                              src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                              height="18" /> <h5 class="borderright1">SAVE</h5>
                    </div></a>
                    <button type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit" ng-click="sjpuFormDetails.$invalid ? '' : saveSJPU(sjpuForm, 'submit')">
                         <img class="saveSvg" 
                              ng-disabled="sjpuForm.submitted"
                              src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
                              height="18" /> <h5 class="borderright1 sbmtbtn">SUBMIT</h5>
                    </button>
               </div>
               <div ng-show="sjpuForm.submitted">
                <div class="col-md-12 savebtn"></div>
            </div>
          </nav>
          
     <!-- end sticky nav menu -->
     
     <!-- start data entry for sjpu  --> 
     
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
                                        Special Juvenile Police Unit(SJPU) Monthly Report for Month of <b
                                             style="color: #41c484">&nbsp;{{sjpuForm.timeperiod.timePeriod}}</b>
                                   </h4>

                                   <div class="form-group labelFont">

                                        <div class="col-md-6">
                                             <input type="hidden" ng-model="sjpuForm.userId"
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
                                             <input type="text" ng-model="sjpuForm.nameOfAuthorisedPerson" required
                                                  fifty-characters-validation ng-disabled="sjpuForm.submitted"
                                                  class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>

                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Designation </label>
                                        <div class="col-md-6">
                                             <input type="text" id="designation" required
                                                  ng-disabled="sjpuForm.submitted" ng-model="sjpuForm.designation"
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
                                             <input type="text" readonly tabindex= -1
                                                  class="form-control inputBackgroundgeneral readonlyStyle"
                                                  value="<%=ft.format(dNow)%>">

                                        </div>
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
                                             for="textinput"> Office address</label>
                                        <div class="col-md-6" rows="6" cols="80">
                                             <textarea type="text" id="officeAddress" style="resize:none;"
                                                  ng-disabled="sjpuForm.submitted" address-validation required
                                                  ng-model="sjpuForm.officeAddress"
                                                  class="form-control inputBackgroundgeneral">
                                        </textarea>
                                        </div>
                                   </div>
                                   
                                     <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Office Telephone No. </label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="sjpuForm.officeTelephoneNo" id="officeTelephoneNo"
                                             ng-blur="resetPhoneNumber11Digits('ofcTelError')"
                                             ng-keyup="resetPhoneMsg()" required
                                             ng-disabled="sjpuForm.submitted" eleven-digits-phone
                                             class="form-control inputBackgroundgeneral ">
                                         <div id="ofcTelError" class="error-style"></div>
                                        </div>
                                   </div>
                                   
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Office Email id </label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="sjpuForm.officeEmailId" id="emailIdofPerson"
                                                  ng-disabled="sjpuForm.submitted" name="emailIdofPerson" required
                                                  onKeyUp="this.value=this.value.trim()"
                                                  maxlength="100" ng-keyUp="validateName(sjpuForm.officeEmailId,'emailidError')"
                                                  class="form-control inputBackgroundgeneral ">
                                                  <div id="emailidError" class="error-style"></div>
                                        </div>
                                   </div>
                                   
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Total No. of Police Stations (PS) in the district </label>
                                        <div class="col-md-6">
                                             <input type="number" required ng-disabled="sjpuForm.submitted" 
                                                  id="noOfPoliceStations" limit-to="2"
                                                  ng-model="sjpuForm.noOfPoliceStations"
                                                  class="form-control inputBackgroundgeneral removeExponentialValueE">
                                        </div>
                                   </div>
                                   
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> No. of PS submitted the report   </label>
                                        <div class="col-md-6">
                                             <input type="number" required ng-model="sjpuForm.noOfPsSubmittedReport"
                                                   ng-disabled="sjpuForm.submitted" limit-to="2"
                                                    onKeyUp="if(Number(this.value)>Number(document.getElementById('noOfPoliceStations').value)){this.value=document.getElementById('noOfPoliceStations').value;}"
                                                  class="form-control inputBackgroundgeneral removeExponentialValueE">
                                        </div>
                                   </div>
                                   
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of  Dy. SP. (HQ)   </label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="sjpuForm.nameOfDySp" required
                                                  fifty-characters-validation ng-disabled="sjpuForm.submitted"
                                                  class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>
                                   
                                    <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Mobile No   </label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="sjpuForm.mobileNumber" id="mobileNumber"
                                                   ng-disabled="sjpuForm.submitted" only-ten-digits required
                                                   ng-keyup="resetPhoneNumber(sjpuForm.mobileNumber, 'mobileNoError')"
                                                  class="form-control inputBackgroundgeneral removeExponentialValueE">
                                                  <div id="mobileNoError" class="error-style"></div>
                                        </div>
                                   </div>
                                  
                                  
                                  
                    <!-- end general information -->   
                    
                    <!-- Start A section  -->     
                                   
                                   <div class="b4sectionheading" id="caseA"></div>
                                   <div class="grey-header headMarg">A. Cases of Children in Need of Care and Protection (CNCP) in the reporting month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th rowspan="2">Total Cases</th>
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
                                                                       Missing Children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a1TotalCases" 
                                                            ng-model="sjpuForm.a1TotalCases" ng-keyup="resetA1(sjpuForm.a1TotalCases)"
                                                            ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.a1TotalCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                            only-four-digits></td>
                                                            
                                                         <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1BoysYears0to6"
                                                            ng-model="sjpuForm.a1BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1BoysYears7to11"
                                                            ng-model="sjpuForm.a1BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1BoysYears12to15"
                                                            ng-model="sjpuForm.a1BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1BoysYears16to18"
                                                            ng-model="sjpuForm.a1BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a1BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="text" id="a1BoysTotal" 
                                                           value="{{Number(sjpuForm.a1BoysYears0to6-0)+
                                                                    Number(sjpuForm.a1BoysYears7to11-0)+
                                                                    Number(sjpuForm.a1BoysYears12to15-0)+
                                                                    Number(sjpuForm.a1BoysYears16to18-0)+
                                                                    Number(sjpuForm.a1BoysYearsGreaterThan18-0)}}"
                                                            disabled class="form-control inputBackground tableinputWidth"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1GirlsYears0to6"
                                                            ng-model="sjpuForm.a1GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1GirlsYears7to11"
                                                            ng-model="sjpuForm.a1GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1GirlsYears12to15"
                                                            ng-model="sjpuForm.a1GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1GirlsYears16to18"
                                                            ng-model="sjpuForm.a1GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a1TotalCases" id="a1GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a1GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a1TotalCases<1)||(sjpuForm.a1TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                        <td><input type="text" id="a1GirlsTotal" 
                                                            value="{{Number(sjpuForm.a1GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a1GirlsYears7to11-0)+
                                                                        Number(sjpuForm.a1GirlsYears12to15-0)+
                                                                        Number(sjpuForm.a1GirlsYears16to18-0)+
                                                                        Number(sjpuForm.a1GirlsYearsGreaterThan18-0)}}"
                                                           disabled class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a1GrandTotal" disabled
                                                            value="{{Number(sjpuForm.a1BoysYears0to6-0)+
                                                                     Number(sjpuForm.a1BoysYears7to11-0)+
                                                                     Number(sjpuForm.a1BoysYears12to15-0)+
                                                                     Number(sjpuForm.a1BoysYears16to18-0)+
                                                                     Number(sjpuForm.a1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a1GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a1GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a1GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.
                                                                      Found Children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a2TotalCases" 
                                                            ng-model="sjpuForm.a2TotalCases"
                                                            ng-init="sjpuForm.a2TotalCases=null"
                                                            ng-disabled="sjpuForm.submitted" ng-keyup="resetA2(sjpuForm.a2TotalCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                        <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2BoysYears0to6"
                                                            ng-model="sjpuForm.a2BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2BoysYears7to11"
                                                            ng-model="sjpuForm.a2BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2BoysYears12to15"
                                                            ng-model="sjpuForm.a2BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2BoysYears16to18"
                                                            ng-model="sjpuForm.a2BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a2BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a2BoysTotal"
                                                            value="{{Number(sjpuForm.a2BoysYears0to6-0)+
                                                                     Number(sjpuForm.a2BoysYears7to11-0)+
                                                                     Number(sjpuForm.a2BoysYears12to15-0)+
                                                                     Number(sjpuForm.a2BoysYears16to18-0)+
                                                                     Number(sjpuForm.a2BoysYearsGreaterThan18-0)}}" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2GirlsYears0to6"
                                                            ng-model="sjpuForm.a2GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2GirlsYears7to11"
                                                            ng-model="sjpuForm.a2GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2GirlsYears12to15"
                                                            ng-model="sjpuForm.a2GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2GirlsYears16to18"
                                                            ng-model="sjpuForm.a2GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a2TotalCases" id="a2GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a2GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a2TotalCases<1)||(sjpuForm.a2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a2GirlsTotal"
                                                            value="{{Number(sjpuForm.a2GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a2GirlsYearsGreaterThan18-0)}}" disabled
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       <td><input type="text" id="a2GrandTotal" disabled
                                                            value="{{Number(sjpuForm.a2BoysYears0to6-0)+
                                                                     Number(sjpuForm.a2BoysYears7to11-0)+
                                                                     Number(sjpuForm.a2BoysYears12to15-0)+
                                                                     Number(sjpuForm.a2BoysYears16to18-0)+
                                                                     Number(sjpuForm.a2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a2GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a2GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.3.
                                                                     Abandoned Children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a3TotalCases" 
                                                            ng-model="sjpuForm.a3TotalCases" ng-keyup="resetA3(sjpuForm.a3TotalCases)"
                                                            ng-init="sjpuForm.a3TotalCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                            only-four-digits></td>
                                                            
                                                         <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3BoysYears0to6"
                                                            ng-model="sjpuForm.a3BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3BoysYears7to11"
                                                            ng-model="sjpuForm.a3BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3BoysYears12to15"
                                                            ng-model="sjpuForm.a3BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3BoysYears16to18"
                                                            ng-model="sjpuForm.a3BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a3BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="text" id="a3BoysTotal" readonly 
                                                            value="{{Number(sjpuForm.a3BoysYears0to6-0)+
                                                                     Number(sjpuForm.a3BoysYears7to11-0)+
                                                                     Number(sjpuForm.a3BoysYears12to15-0)+
                                                                     Number(sjpuForm.a3BoysYears16to18-0)+
                                                                     Number(sjpuForm.a3BoysYearsGreaterThan18-0)}}" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3GirlsYears0to6"
                                                            ng-model="sjpuForm.a3GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3GirlsYears7to11"
                                                            ng-model="sjpuForm.a3GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3GirlsYears12to15"
                                                            ng-model="sjpuForm.a3GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3GirlsYears16to18"
                                                            ng-model="sjpuForm.a3GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.a3TotalCases" id="a3GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a3GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a3TotalCases<1)||(sjpuForm.a3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                            
                                                       <td><input type="text" id="a3GirlsTotal" disabled
                                                            value="{{Number(sjpuForm.a3GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a3GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" disabled id="a3GrandTotal"
                                                            value="{{Number(sjpuForm.a3BoysYears0to6-0)+
                                                                     Number(sjpuForm.a3BoysYears7to11-0)+
                                                                     Number(sjpuForm.a3BoysYears12to15-0)+
                                                                     Number(sjpuForm.a3BoysYears16to18-0)+
                                                                     Number(sjpuForm.a3BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a3GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a3GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.4.
                                                                      Child Labour/Working Children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a4TotalCases" 
                                                            ng-model="sjpuForm.a4TotalCases" 
                                                            ng-init="sjpuForm.a4TotalCases=null"
                                                             ng-disabled="sjpuForm.submitted" ng-keyup="resetA4(sjpuForm.a4TotalCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                        <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4BoysYears0to6"
                                                            ng-model="sjpuForm.a4BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4BoysYears7to11"
                                                            ng-model="sjpuForm.a4BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4BoysYears12to15"
                                                            ng-model="sjpuForm.a4BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4BoysYears16to18"
                                                            ng-model="sjpuForm.a4BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a4BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a4BoysTotal" disabled
                                                            value="{{Number(sjpuForm.a4BoysYears0to6-0)+
                                                                     Number(sjpuForm.a4BoysYears7to11-0)+
                                                                     Number(sjpuForm.a4BoysYears12to15-0)+
                                                                     Number(sjpuForm.a4BoysYears16to18-0)+
                                                                     Number(sjpuForm.a4BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4GirlsYears0to6"
                                                            ng-model="sjpuForm.a4GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4GirlsYears7to11"
                                                            ng-model="sjpuForm.a4GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4GirlsYears12to15"
                                                            ng-model="sjpuForm.a4GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4GirlsYears16to18"
                                                            ng-model="sjpuForm.a4GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a4TotalCases" id="a4GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a4GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a4TotalCases<1)||(sjpuForm.a4TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a4GirlsTotal" disabled
                                                             value="{{Number(sjpuForm.a4GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a4GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a4GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a4GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a4GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="text" disabled id="a4GrandTotal" 
                                                            value="{{Number(sjpuForm.a4BoysYears0to6-0)+
                                                                     Number(sjpuForm.a4BoysYears7to11-0)+
                                                                     Number(sjpuForm.a4BoysYears12to15-0)+
                                                                     Number(sjpuForm.a4BoysYears16to18-0)+
                                                                     Number(sjpuForm.a4BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a4GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a4GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a4GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a4GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a4GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class=" textAlign">
                                                                 <label class="control-label" for="textinput">A.5.
                                                                      Victims of Trafficking</label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a5TotalCases"
                                                            ng-init="sjpuForm.a5TotalCases=null" 
                                                            ng-model="sjpuForm.a5TotalCases" ng-keyup="resetA5(sjpuForm.a5TotalCases)"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5BoysYears0to6"
                                                            ng-model="sjpuForm.a5BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>                                                                                              
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5BoysYears7to11"
                                                            ng-model="sjpuForm.a5BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5BoysYears12to15"
                                                            ng-model="sjpuForm.a5BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5BoysYears16to18"
                                                            ng-model="sjpuForm.a5BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a5BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a5BoysTotal" disabled
                                                            value="{{Number(sjpuForm.a5BoysYears0to6-0)+
                                                                     Number(sjpuForm.a5BoysYears7to11-0)+
                                                                     Number(sjpuForm.a5BoysYears12to15-0)+
                                                                     Number(sjpuForm.a5BoysYears16to18-0)+
                                                                     Number(sjpuForm.a5BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5GirlsYears0to6"
                                                            ng-model="sjpuForm.a5GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5GirlsYears7to11"
                                                            ng-model="sjpuForm.a5GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5GirlsYears12to15"
                                                            ng-model="sjpuForm.a5GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5GirlsYears16to18"
                                                            ng-model="sjpuForm.a5GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a5TotalCases" id="a5GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a5GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a5TotalCases<1)||(sjpuForm.a5TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a5GirlsTotal" disabled
                                                            value="{{Number(sjpuForm.a5GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a5GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a5GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a5GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a5GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="text" disabled id="a5GrandTotal"
                                                            value="{{Number(sjpuForm.a5BoysYears0to6-0)+
                                                                     Number(sjpuForm.a5BoysYears7to11-0)+
                                                                     Number(sjpuForm.a5BoysYears12to15-0)+
                                                                     Number(sjpuForm.a5BoysYears16to18-0)+
                                                                     Number(sjpuForm.a5BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a5GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a5GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a5GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a5GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a5GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class=" textAlign">
                                                                 <label class="control-label" for="textinput">A.6.
                                                                       Victims of Sexual Abuse </label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a6TotalCases" 
                                                            ng-init="sjpuForm.a6TotalCases=null"
                                                            ng-model="sjpuForm.a6TotalCases" ng-keyup="resetA6(sjpuForm.a6TotalCases)"
                                                             ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                        <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6BoysYears0to6"
                                                            ng-model="sjpuForm.a6BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6BoysYears7to11"
                                                            ng-model="sjpuForm.a6BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6BoysYears12to15"
                                                            ng-model="sjpuForm.a6BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6BoysYears16to18"
                                                            ng-model="sjpuForm.a6BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a6BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a6BoysTotal" disabled
                                                             value="{{Number(sjpuForm.a6BoysYears0to6-0)+
                                                                     Number(sjpuForm.a6BoysYears7to11-0)+
                                                                     Number(sjpuForm.a6BoysYears12to15-0)+
                                                                     Number(sjpuForm.a6BoysYears16to18-0)+
                                                                     Number(sjpuForm.a6BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6GirlsYears0to6"
                                                            ng-model="sjpuForm.a6GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6GirlsYears7to11"
                                                            ng-model="sjpuForm.a6GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6GirlsYears12to15"
                                                            ng-model="sjpuForm.a6GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6GirlsYears16to18"
                                                            ng-model="sjpuForm.a6GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a6TotalCases" id="a6GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a6GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a6TotalCases<1)||(sjpuForm.a6TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a6GirlsTotal" disabled
                                                             value="{{Number(sjpuForm.a6GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a6GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a6GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a6GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a6GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="text" disabled id="a6GrandTotal" 
                                                            value="{{Number(sjpuForm.a6BoysYears0to6-0)+
                                                                     Number(sjpuForm.a6BoysYears7to11-0)+
                                                                     Number(sjpuForm.a6BoysYears12to15-0)+
                                                                     Number(sjpuForm.a6BoysYears16to18-0)+
                                                                     Number(sjpuForm.a6BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a6GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a6GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a6GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a6GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a6GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.7.
                                                                      Other CNCP Children</label>

                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="a7TotalCases" 
                                                            ng-model="sjpuForm.a7TotalCases" ng-keyup="resetA7(sjpuForm.a7TotalCases)"
                                                            ng-init="sjpuForm.a7TotalCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7BoysYears0to6"
                                                            ng-model="sjpuForm.a7BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7BoysYears7to11"
                                                            ng-model="sjpuForm.a7BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7BoysYears12to15"
                                                            ng-model="sjpuForm.a7BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7BoysYears16to18"
                                                            ng-model="sjpuForm.a7BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.a7BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a7BoysTotal" disabled
                                                            value="{{Number(sjpuForm.a7BoysYears0to6-0)+
                                                                     Number(sjpuForm.a7BoysYears7to11-0)+
                                                                     Number(sjpuForm.a7BoysYears12to15-0)+
                                                                     Number(sjpuForm.a7BoysYears16to18-0)+
                                                                     Number(sjpuForm.a7BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7GirlsYears0to6"
                                                            ng-model="sjpuForm.a7GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7GirlsYears7to11"
                                                            ng-model="sjpuForm.a7GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7GirlsYears12to15"
                                                            ng-model="sjpuForm.a7GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7GirlsYears16to18"
                                                            ng-model="sjpuForm.a7GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.a7TotalCases" id="a7GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.a7GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.a7TotalCases<1)||(sjpuForm.a7TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="a7GirlsTotal" disabled
                                                             value="{{Number(sjpuForm.a7GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a7GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a7GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a7GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a7GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       <td><input type="text" disabled id="a7GrandTotal" 
                                                            value="{{Number(sjpuForm.a7BoysYears0to6-0)+
                                                                     Number(sjpuForm.a7BoysYears7to11-0)+
                                                                     Number(sjpuForm.a7BoysYears12to15-0)+
                                                                     Number(sjpuForm.a7BoysYears16to18-0)+
                                                                     Number(sjpuForm.a7BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a7GirlsYears0to6-0)+
                                                                     Number(sjpuForm.a7GirlsYears7to11-0)+
                                                                     Number(sjpuForm.a7GirlsYears12to15-0)+
                                                                     Number(sjpuForm.a7GirlsYears16to18-0)+
                                                                     Number(sjpuForm.a7GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td class="tabletdWidthfourCol borderRight">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">A.8.
                                                                      Total CNCP cases handled</label>

                                                            </div>
                                                       </td>
                                                       <!--      ng-model="sjpuForm.aGirls"
                                                  sjpuForm.aGirls
                                                  aTotal -->
                                                       <td><input type="text" name="aValue" id="a8TotalCases" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1TotalCases-0)+
                                                                    Number(sjpuForm.a2TotalCases-0)+
                                                                    Number(sjpuForm.a3TotalCases-0)+
                                                                    Number(sjpuForm.a4TotalCases-0)+
                                                                    Number(sjpuForm.a5TotalCases-0)+
                                                                    Number(sjpuForm.a6TotalCases-0)+
                                                                    Number(sjpuForm.a7TotalCases-0)}}">
                                                       </td>
                                                       
                                                       <td><input type="text" name="aValue" id="a8BoysYears0to6" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1BoysYears0to6-0)+
                                                                    Number(sjpuForm.a2BoysYears0to6-0)+
                                                                    Number(sjpuForm.a3BoysYears0to6-0)+
                                                                    Number(sjpuForm.a4BoysYears0to6-0)+
                                                                    Number(sjpuForm.a5BoysYears0to6-0)+
                                                                    Number(sjpuForm.a6BoysYears0to6-0)+
                                                                    Number(sjpuForm.a7BoysYears0to6-0)}}">
                                                       </td>
                                                     <td><input type="text" name="aValue" id="a8BoysYears7to11" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1BoysYears7to11-0)+
                                                                     Number(sjpuForm.a2BoysYears7to11-0)+
                                                                     Number(sjpuForm.a3BoysYears7to11-0)+
                                                                     Number(sjpuForm.a4BoysYears7to11-0)+
                                                                     Number(sjpuForm.a5BoysYears7to11-0)+
                                                                     Number(sjpuForm.a6BoysYears7to11-0)+
                                                                     Number(sjpuForm.a7BoysYears7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8BoysYears12to15" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1BoysYears12to15-0)+
                                                                     Number(sjpuForm.a2BoysYears12to15-0)+
                                                                     Number(sjpuForm.a3BoysYears12to15-0)+
                                                                     Number(sjpuForm.a4BoysYears12to15-0)+
                                                                     Number(sjpuForm.a5BoysYears12to15-0)+
                                                                     Number(sjpuForm.a6BoysYears12to15-0)+
                                                                     Number(sjpuForm.a7BoysYears12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8BoysYears16to18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1BoysYears16to18-0)+
                                                                     Number(sjpuForm.a2BoysYears16to18-0)+
                                                                     Number(sjpuForm.a3BoysYears16to18-0)+
                                                                     Number(sjpuForm.a4BoysYears16to18-0)+
                                                                     Number(sjpuForm.a5BoysYears16to18-0)+
                                                                     Number(sjpuForm.a6BoysYears16to18-0)+
                                                                     Number(sjpuForm.a7BoysYears16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8BoysYearsGreaterThan18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a3BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a4BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a5BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a6BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.a7BoysYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8BoysTotal" disabled	
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1BoysYears0to6-0)+
                                                                    Number(sjpuForm.a2BoysYears0to6-0)+
                                                                    Number(sjpuForm.a3BoysYears0to6-0)+
                                                                    Number(sjpuForm.a4BoysYears0to6-0)+
                                                                    Number(sjpuForm.a5BoysYears0to6-0)+
                                                                    Number(sjpuForm.a6BoysYears0to6-0)+
                                                                    Number(sjpuForm.a7BoysYears0to6-0)+
                                                                    Number(sjpuForm.a1BoysYears7to11-0)+
                                                                    Number(sjpuForm.a2BoysYears7to11-0)+
                                                                    Number(sjpuForm.a3BoysYears7to11-0)+
                                                                    Number(sjpuForm.a4BoysYears7to11-0)+
                                                                    Number(sjpuForm.a5BoysYears7to11-0)+
                                                                    Number(sjpuForm.a6BoysYears7to11-0)+
                                                                    Number(sjpuForm.a7BoysYears7to11-0)+
                                                                    Number(sjpuForm.a1BoysYears12to15-0)+
                                                                    Number(sjpuForm.a2BoysYears12to15-0)+
                                                                    Number(sjpuForm.a3BoysYears12to15-0)+
                                                                    Number(sjpuForm.a4BoysYears12to15-0)+
                                                                    Number(sjpuForm.a5BoysYears12to15-0)+
                                                                    Number(sjpuForm.a6BoysYears12to15-0)+
                                                                    Number(sjpuForm.a7BoysYears12to15-0)+ 
                                                                    Number(sjpuForm.a1BoysYears16to18-0)+
                                                                    Number(sjpuForm.a2BoysYears16to18-0)+
                                                                    Number(sjpuForm.a3BoysYears16to18-0)+
                                                                    Number(sjpuForm.a4BoysYears16to18-0)+
                                                                    Number(sjpuForm.a5BoysYears16to18-0)+
                                                                    Number(sjpuForm.a6BoysYears16to18-0)+
                                                                    Number(sjpuForm.a7BoysYears16to18-0)+
                                                                    Number(sjpuForm.a1BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a2BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a3BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a4BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a5BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a6BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a7BoysYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8GirlsYears0to6" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a2GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a3GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a4GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a5GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a6GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a7GirlsYears0to6-0)}}">
                                                       </td>
                                                          <td><input type="text" name="aValue" id="a8GirlsYears7to11" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a2GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a3GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a4GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a5GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a6GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a7GirlsYears7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8GirlsYears12to15" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a2GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a3GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a4GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a5GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a6GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a7GirlsYears12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8GirlsYears16to18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a2GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a3GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a4GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a5GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a6GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a7GirlsYears16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" name="aValue" id="a8GirlsYearsGreaterThan18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a2GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a3GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a4GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a5GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a6GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a7GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                      <td><input type="text" name="aValue" id="a8GirlsTotal" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.a1GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a2GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a3GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a4GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a5GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a6GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a7GirlsYears0to6-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a2GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a3GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a4GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a5GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a6GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a7GirlsYears7to11-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a2GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a3GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a4GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a5GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a6GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a7GirlsYears12to15-0)+ 
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a2GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a3GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a4GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a5GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a6GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a7GirlsYears16to18-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a2GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a3GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a4GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a5GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a6GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a7GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="a8GrandTotal" disabled
                                                            value="{{Number(sjpuForm.a1BoysYears0to6-0)+
                                                                    Number(sjpuForm.a2BoysYears0to6-0)+
                                                                    Number(sjpuForm.a3BoysYears0to6-0)+
                                                                    Number(sjpuForm.a4BoysYears0to6-0)+
                                                                    Number(sjpuForm.a5BoysYears0to6-0)+
                                                                    Number(sjpuForm.a6BoysYears0to6-0)+
                                                                    Number(sjpuForm.a7BoysYears0to6-0)+
                                                                    Number(sjpuForm.a1BoysYears7to11-0)+
                                                                    Number(sjpuForm.a2BoysYears7to11-0)+
                                                                    Number(sjpuForm.a3BoysYears7to11-0)+
                                                                    Number(sjpuForm.a4BoysYears7to11-0)+
                                                                    Number(sjpuForm.a5BoysYears7to11-0)+
                                                                    Number(sjpuForm.a6BoysYears7to11-0)+
                                                                    Number(sjpuForm.a7BoysYears7to11-0)+
                                                                    Number(sjpuForm.a1BoysYears12to15-0)+
                                                                    Number(sjpuForm.a2BoysYears12to15-0)+
                                                                    Number(sjpuForm.a3BoysYears12to15-0)+
                                                                    Number(sjpuForm.a4BoysYears12to15-0)+
                                                                    Number(sjpuForm.a5BoysYears12to15-0)+
                                                                    Number(sjpuForm.a6BoysYears12to15-0)+
                                                                    Number(sjpuForm.a7BoysYears12to15-0)+ 
                                                                    Number(sjpuForm.a1BoysYears16to18-0)+
                                                                    Number(sjpuForm.a2BoysYears16to18-0)+
                                                                    Number(sjpuForm.a3BoysYears16to18-0)+
                                                                    Number(sjpuForm.a4BoysYears16to18-0)+
                                                                    Number(sjpuForm.a5BoysYears16to18-0)+
                                                                    Number(sjpuForm.a6BoysYears16to18-0)+
                                                                    Number(sjpuForm.a7BoysYears16to18-0)+
                                                                    Number(sjpuForm.a1BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a2BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a3BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a4BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a5BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a6BoysYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a7BoysYearsGreaterThan18-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a2GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a3GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a4GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a5GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a6GirlsYears0to6-0)+
                                                                    Number(sjpuForm.a7GirlsYears0to6-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a2GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a3GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a4GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a5GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a6GirlsYears7to11-0)+
                                                                    Number(sjpuForm.a7GirlsYears7to11-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a2GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a3GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a4GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a5GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a6GirlsYears12to15-0)+
                                                                    Number(sjpuForm.a7GirlsYears12to15-0)+ 
                                                                    
                                                                    Number(sjpuForm.a1GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a2GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a3GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a4GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a5GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a6GirlsYears16to18-0)+
                                                                    Number(sjpuForm.a7GirlsYears16to18-0)+
                                                                    
                                                                    Number(sjpuForm.a1GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a2GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a3GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a4GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a5GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a6GirlsYearsGreaterThan18-0)+
                                                                    Number(sjpuForm.a7GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>

                                                  </tr>
                                                  
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   <!-- -------------------------------- End A section-------------------------- -->

                                   <!-- -------------------------------- Start B section-------------------------- -->
                                   
                                   <div class="b4sectionheading" id="caseB"></div>
                                   <div class="grey-header headMarg">B. Cases Reported and Actions Taken (in the Reporting Month) for CNCP cases</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th rowspan="2">Total Cases</th>
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
                                                                 <label class="control-label" for="textinput">B.1. Cases Produced before CWC</label>
                                                            </div>
                                                       </td>
                                                       <td><input ng-disabled="sjpuForm.submitted" type="number" required
                                                            id="b1TotalCases"  ng-keyup="resetB1(sjpuForm.b1TotalCases)"
                                                            ng-model="sjpuForm.b1TotalCases"
                                                            ng-init="sjpuForm.b1TotalCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       </td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1BoysYears0to6" ng-model="sjpuForm.b1BoysYears0to6"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1BoysYears7to11" ng-model="sjpuForm.b1BoysYears7to11"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1BoysYears12to15" ng-model="sjpuForm.b1BoysYears12to15"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1BoysYears16to18" ng-model="sjpuForm.b1BoysYears16to18"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1BoysYearsGreaterThan18" ng-model="sjpuForm.b1BoysYearsGreaterThan18"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" disabled
                                                            id="b1BoysTotal" 
                                                            value="{{Number(sjpuForm.b1BoysYears0to6-0)+
                                                                     Number(sjpuForm.b1BoysYears7to11-0)+
                                                                     Number(sjpuForm.b1BoysYears12to15-0)+
                                                                     Number(sjpuForm.b1BoysYears16to18-0)+
                                                                     Number(sjpuForm.b1BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1GirlsYears0to6" ng-model="sjpuForm.b1GirlsYears0to6"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1GirlsYears7to11" ng-model="sjpuForm.b1GirlsYears7to11"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1GirlsYears12to15" ng-model="sjpuForm.b1GirlsYears12to15"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1GirlsYears16to18" ng-model="sjpuForm.b1GirlsYears16to18"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input ng-disabled="sjpuForm.submitted||(sjpuForm.b1TotalCases<1)||(sjpuForm.b1TotalCases==null)" type="number" ng-required="sjpuForm.b1TotalCases"
                                                            id="b1GirlsYearsGreaterThan18" ng-model="sjpuForm.b1GirlsYearsGreaterThan18"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                       <td><input type="text" id="b1GirlsTotal" disabled
                                                            value="{{Number(sjpuForm.b1GirlsYears0to6-0)+
                                                                     Number(sjpuForm.b1GirlsYears7to11-0)+
                                                                     Number(sjpuForm.b1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.b1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.b1GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       <td><input disabled type="text" id="b1GrandTotal"
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.b1BoysYears0to6-0)+
                                                                     Number(sjpuForm.b1BoysYears7to11-0)+
                                                                     Number(sjpuForm.b1BoysYears12to15-0)+
                                                                     Number(sjpuForm.b1BoysYears16to18-0)+
                                                                     Number(sjpuForm.b1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.b1GirlsYears0to6-0)+
                                                                     Number(sjpuForm.b1GirlsYears7to11-0)+
                                                                     Number(sjpuForm.b1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.b1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.b1GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.2. Children sent to Children Home (SAA, Special Home, Any Institution)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id=b2TotalCases ng-model="sjpuForm.b2TotalCases"
                                                             ng-disabled="sjpuForm.submitted" ng-keyup="resetB2(sjpuForm.b2TotalCases)"
                                                              ng-init="sjpuForm.b2TotalCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                         <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2BoysYears0to6"
                                                            ng-model="sjpuForm.b2BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2BoysYears7to11"
                                                            ng-model="sjpuForm.b2BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2BoysYears12to15"
                                                            ng-model="sjpuForm.b2BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2BoysYears16to18"
                                                            ng-model="sjpuForm.b2BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.b2BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="b2BoysTotal" disabled
                                                            value="{{Number(sjpuForm.b2BoysYears0to6-0)+
                                                                     Number(sjpuForm.b2BoysYears7to11-0)+
                                                                     Number(sjpuForm.b2BoysYears12to15-0)+
                                                                     Number(sjpuForm.b2BoysYears16to18-0)+
                                                                     Number(sjpuForm.b2BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             ></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2GirlsYears0to6"
                                                            ng-model="sjpuForm.b2GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2GirlsYears7to11"
                                                            ng-model="sjpuForm.b2GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2GirlsYears12to15"
                                                            ng-model="sjpuForm.b2GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2GirlsYears16to18"
                                                            ng-model="sjpuForm.b2GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b2TotalCases" id="b2GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.b2GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.b2TotalCases<1)||(sjpuForm.b2TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="b2GirlsTotal" disabled
                                                            value="{{Number(sjpuForm.b2GirlsYears0to6-0)+
                                                                     Number(sjpuForm.b2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.b2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.b2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.b2GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input disabled type="text" id="b2GrandTotal"
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.b2BoysYears0to6-0)+
                                                                     Number(sjpuForm.b2BoysYears7to11-0)+
                                                                     Number(sjpuForm.b2BoysYears12to15-0)+
                                                                     Number(sjpuForm.b2BoysYears16to18-0)+
                                                                     Number(sjpuForm.b2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.b2GirlsYears0to6-0)+
                                                                     Number(sjpuForm.b2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.b2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.b2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.b2GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.3.Children sent to others</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="b3TotalCases"  ng-keyup="resetB3(sjpuForm.b3TotalCases)"
                                                            ng-model="sjpuForm.b3TotalCases" ng-disabled="sjpuForm.submitted"
                                                             ng-init="sjpuForm.b3TotalCases=null" required
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3BoysYears0to6"
                                                            ng-model="sjpuForm.b3BoysYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3BoysYears7to11"
                                                            ng-model="sjpuForm.b3BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3BoysYears12to15"
                                                            ng-model="sjpuForm.b3BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3BoysYears16to18"
                                                            ng-model="sjpuForm.b3BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3BoysYearsGreaterThan18"
                                                            ng-model="sjpuForm.b3BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="b3BoysTotal" disabled
                                                            value="{{Number(sjpuForm.b3BoysYears0to6-0)+
                                                                     Number(sjpuForm.b3BoysYears7to11-0)+
                                                                     Number(sjpuForm.b3BoysYears12to15-0)+
                                                                     Number(sjpuForm.b3BoysYears16to18-0)+
                                                                     Number(sjpuForm.b3BoysYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3GirlsYears0to6"
                                                            ng-model="sjpuForm.b3GirlsYears0to6" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3GirlsYears7to11"
                                                            ng-model="sjpuForm.b3GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3GirlsYears12to15"
                                                            ng-model="sjpuForm.b3GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3GirlsYears16to18"
                                                            ng-model="sjpuForm.b3GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.b3TotalCases" id="b3GirlsYearsGreaterThan18"
                                                            ng-model="sjpuForm.b3GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.b3TotalCases<1)||(sjpuForm.b3TotalCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="b3GirlsTotal" disabled
                                                            value="{{Number(sjpuForm.b3GirlsYears0to6-0)+
                                                                     Number(sjpuForm.b3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.b3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.b3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.b3GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       <td><input disabled type="text" id="b3GrandTotal"
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.b3BoysYears0to6-0)+
                                                                     Number(sjpuForm.b3BoysYears7to11-0)+
                                                                     Number(sjpuForm.b3BoysYears12to15-0)+
                                                                     Number(sjpuForm.b3BoysYears16to18-0)+
                                                                     Number(sjpuForm.b3BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.b3GirlsYears0to6-0)+
                                                                     Number(sjpuForm.b3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.b3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.b3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.b3GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                   <div class="grey-header headMarg">B.4.  Children escorted to their native place by the order of CWC</div>

                                     <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Category</th>
                                                       <th>Boys</th>
                                                       <th>Girls</th>
                                                       <th>Grand Total</th>
                                                  </tr>
                                                 
                                             </thead>
                                             <tbody>
                                                  <!-- ng-model="sjpuForm.cGirls" -->
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.4.
                                                                      Children escorted to their native place by the order of CWC</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="b4Boys"  only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.b4Boys">
                                                       </td>
                                                       <td><input type="text" id="b4Girls" only-four-digits  required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.b4Girls">
                                                       </td>
                                                       <td><input type="text" id="b4Total" disabled 
                                                            class="form-control inputBackground tableinputWidth readonlyStyle"
                                                            value="{{Number(sjpuForm.b4Boys-0)+Number(sjpuForm.b4Girls-0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                    <div class="grey-header headMarg">B.5. Children escorted to their native place by the order of CWC</div>

                                     <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Category</th>
                                                       <th>Boys</th>
                                                       <th>Girls</th>
                                                       <th>Grand Total</th>
                                                  </tr>
                                                 
                                             </thead>
                                             <tbody>
                                                  <!-- ng-model="sjpuForm.cGirls" -->
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.5.a.
                                                                      Total Missing Cases in the District (Till Date)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="b5aBoys"  ng-model="sjpuForm.b5aBoys" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5aGirls"  ng-model="sjpuForm.b5aGirls" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5aTotal" disabled
                                                            value="{{Number(sjpuForm.b5aBoys-0)+Number(sjpuForm.b5aGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth readonlyStyle">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.5.b.
                                                                      Total no. of Data entered in the Track Child Portal (Missing Children) Till Date</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="b5bBoys"  ng-model="sjpuForm.b5bBoys" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5bGirls"  ng-model="sjpuForm.b5bGirls" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5bTotal" disabled
                                                       value="{{Number(sjpuForm.b5bBoys-0)+Number(sjpuForm.b5bGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth readonlyStyle">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.5.c.
                                                                      Total no. of Data entered in the Track Child Portal (Recovered Children) Till Date</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="b5cBoys"  ng-model="sjpuForm.b5cBoys" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5cGirls"  ng-model="sjpuForm.b5cGirls" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5cTotal" disabled
                                                       value="{{Number(sjpuForm.b5cBoys-0)+Number(sjpuForm.b5cGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth readonlyStyle">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.5.d.
                                                                      Total no. of Data entered in the Track Child Portal (Still Missing) Till Date</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="b5dBoys"  ng-model="sjpuForm.b5dBoys" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5dGirls"  ng-model="sjpuForm.b5dGirls" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5dTotal" disabled
                                                       value="{{Number(sjpuForm.b5dBoys-0)+Number(sjpuForm.b5dGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth readonlyStyle">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.5.e.
                                                                     Total no. of Data entered in the Track Child Portal, Till Date</label>
                                                            </div>
                                                       </td> 
                                                       <td><input type="text" id="b5eBoys"  ng-model="sjpuForm.b5eBoys" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5eGirls"  ng-model="sjpuForm.b5eGirls" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                       </td>
                                                       <td><input type="text" id="b5eTotal" disabled
                                                       value="{{Number(sjpuForm.b5eBoys-0)+Number(sjpuForm.b5eGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth readonlyStyle">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                   
                                   
                                   <!-- -----------------------------------------End B section---------------------------------------- -->


                                   <!-------------------------------------- C section ------------------------------------------>
                                   
                                   <div class="b4sectionheading" id="caseC"></div>
                                   <div class="grey-header headMarg">C. No. of Children in Conflict with Law (CICL) handled</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                        <th rowspan="2">Total Cases</th>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>7-11</th>
                                                  <th>12-15</th>
                                                  <th>16-18</th>
                                                  <th>> 18</th>
                                                  <th>Total</th>
                                                  <th>7-11</th>
                                                  <th>12-15</th>
                                                  <th>16-18</th>
                                                  <th>> 18</th>
                                                  <th>Total</th>
                                                  </tr>
                                                  
                                             </thead>
                                             <tbody>
                                                  <!-- ng-model="sjpuForm.cGirls" -->
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.1.
                                                                      Petty Cases</label>
                                                            </div>
                                                       </td>
                                                      <td><input type="number" id="c1TotalCases" ng-keyup="resetC1(sjpuForm.c1TotalCases)"
                                                            ng-init="sjpuForm.c1TotalCases=null" required
                                                            ng-model="sjpuForm.c1TotalCases"  only-four-digits ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE">
                                                           
                                                       </td>
                                                       <td><input type="number" id="c1BoysYears7to11" ng-model="sjpuForm.c1BoysYears7to11"  only-four-digits  ng-required="sjpuForm.c1TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)" >
                                                       </td>
                                                       <td><input type="number" id="c1BoysYears12to15"  ng-model="sjpuForm.c1BoysYears12to15" only-four-digits ng-required="sjpuForm.c1TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)" >
                                                       </td> 
                                                       <td><input type="number" id="c1BoysYears16to18"  ng-model="sjpuForm.c1BoysYears16to18" only-four-digits ng-required="sjpuForm.c1TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c1BoysYearsGreaterThan18"  ng-model="sjpuForm.c1BoysYearsGreaterThan18" ng-required="sjpuForm.c1TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)">
                                                       </td>
                                                       <td><input type="text" id="c1BoysTotal" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c1BoysYears7to11-0)+Number(sjpuForm.c1BoysYears12to15-0)+Number(sjpuForm.c1BoysYears16to18-0)
                                                            +Number(sjpuForm.c1BoysYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="number" id="c1GirlsYears7to11" ng-model="sjpuForm.c1GirlsYears7to11" ng-required="sjpuForm.c1TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)"
                                                            >
                                                       </td>
                                                       <td><input type="number" id="c1GirlsYears12to15" ng-model="sjpuForm.c1GirlsYears12to15"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits ng-required="sjpuForm.c1TotalCases"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c1GirlsYears16to18" ng-model="sjpuForm.c1GirlsYears16to18"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits ng-required="sjpuForm.c1TotalCases"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c1GirlsYearsGreaterThan18" ng-model="sjpuForm.c1GirlsYearsGreaterThan18" ng-required="sjpuForm.c1TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.c1TotalCases<1)||(sjpuForm.c1TotalCases==null)">
                                                       </td>
                                                       <td><input type="text" id="c1GirlsTotal" disabled
                                                            value="{{Number(sjpuForm.c1GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c1GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                       <td><input  type="text" id="c1GrandTotal" disabled
                                                            value="{{Number(sjpuForm.c1BoysYears7to11-0)+
                                                                     Number(sjpuForm.c1BoysYears12to15-0)+
                                                                     Number(sjpuForm.c1BoysYears16to18-0)+
                                                                     Number(sjpuForm.c1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c1GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c1GirlsYearsGreaterThan18-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.2.
                                                                      Serious Cases</label>
                                                            </div>
                                                       </td>
                                                      <td><input type="number" id="c2TotalCases"  required
                                                            ng-init="sjpuForm.c2TotalCases=null" ng-keyup="resetC2(sjpuForm.c2TotalCases)" ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-model="sjpuForm.c2TotalCases">
                                                       </td>
                                                       <td><input type="number" id="c2BoysYears7to11" ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-model="sjpuForm.c2BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c2BoysYears12to15"  ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                             ng-model=" sjpuForm.c2BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c2BoysYears16to18" ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-model="sjpuForm.c2BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c2BoysYearsGreaterThan18" ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-model="sjpuForm.c2BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="text" id="c2BoysTotal" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c2BoysYears7to11-0)+
                                                                     Number(sjpuForm.c2BoysYears12to15-0)+
                                                                     Number(sjpuForm.c2BoysYears16to18-0)+
                                                                     Number(sjpuForm.c2BoysYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="number" id="c2GirlsYears7to11" ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                           ng-model="sjpuForm.c2GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c2GirlsYears12to15" ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                            ng-model="sjpuForm.c2GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c2GirlsYears16to18" ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                             ng-model="sjpuForm.c2GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c2GirlsYearsGreaterThan18"  only-four-digits ng-required="sjpuForm.c2TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c2GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.c2TotalCases<1)||(sjpuForm.c2TotalCases==null)">
                                                       </td>
                                                       <td><input type="text" id="c2GirlsTotal" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c2GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input disabled type="text" id="c2GrandTotal"
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c2BoysYears7to11-0)+
                                                                     Number(sjpuForm.c2BoysYears12to15-0)+
                                                                     Number(sjpuForm.c2BoysYears16to18-0)+
                                                                     Number(sjpuForm.c2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c2GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.3.
                                                                      Heinous Cases</label>
                                                            </div>
                                                       </td>
                                                      <td><input type="number" id="c3TotalCases" only-four-digits required ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.c3TotalCases=null" ng-keyup="resetC3(sjpuForm.c3TotalCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3TotalCases">
                                                       </td>
                                                       <td><input type="number" id="c3BoysYears7to11"  only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3BoysYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c3BoysYears12to15" only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3BoysYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c3BoysYears16to18"  only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3BoysYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c3BoysYearsGreaterThan18"  only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3BoysYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="text" id="c3BoysTotal" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c3BoysYears7to11-0)+
                                                                     Number(sjpuForm.c3BoysYears12to15-0)+
                                                                     Number(sjpuForm.c3BoysYears16to18-0)+
                                                                     Number(sjpuForm.c3BoysYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="number" id="c3GirlsYears7to11"  only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3GirlsYears7to11" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c3GirlsYears12to15"  only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3GirlsYears12to15" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c3GirlsYears16to18" only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3GirlsYears16to18" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="number" id="c3GirlsYearsGreaterThan18"  only-four-digits ng-required="sjpuForm.c3TotalCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.c3GirlsYearsGreaterThan18" ng-disabled="sjpuForm.submitted||(sjpuForm.c3TotalCases<1)||(sjpuForm.c3TotalCases==null)">
                                                       </td>
                                                       <td><input type="text" id="c3GirlsTotal" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c3GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input disabled type="text" id="c3GrandTotal"
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.c3BoysYears7to11-0)+
                                                                     Number(sjpuForm.c3BoysYears12to15-0)+
                                                                     Number(sjpuForm.c3BoysYears16to18-0)+
                                                                     Number(sjpuForm.c3BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c3GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr>
                                                       <td class="tabletdWidthfourCol">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">C.4.
                                                                      Total no. of CICL cases handled</label>
                                                            </div>
                                                       </td>
                                                      <td><input type="text" id="c4TotalCases" disabled  
                                                            class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                            value="{{Number(sjpuForm.c1TotalCases-0)+Number(sjpuForm.c2TotalCases-0)+Number(sjpuForm.c3TotalCases-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4BoysYears7to11" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1BoysYears7to11-0)+
                                                                     Number(sjpuForm.c2BoysYears7to11-0)+
                                                                     Number(sjpuForm.c3BoysYears7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4BoysYears12to15" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1BoysYears12to15-0)+
                                                                     Number(sjpuForm.c2BoysYears12to15-0)+
                                                                     Number(sjpuForm.c3BoysYears12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4BoysYears16to18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1BoysYears16to18-0)+
                                                                     Number(sjpuForm.c2BoysYears16to18-0)+
                                                                     Number(sjpuForm.c3BoysYears16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4BoysYearsGreaterThan18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c3BoysYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4BoysTotal" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1BoysYears7to11-0)+
                                                                     Number(sjpuForm.c2BoysYears7to11-0)+
                                                                     Number(sjpuForm.c3BoysYears7to11-0)+
                                                                     Number(sjpuForm.c1BoysYears12to15-0)+
                                                                     Number(sjpuForm.c2BoysYears12to15-0)+
                                                                     Number(sjpuForm.c3BoysYears12to15-0)+
                                                                     Number(sjpuForm.c1BoysYears16to18-0)+
                                                                     Number(sjpuForm.c2BoysYears16to18-0)+
                                                                     Number(sjpuForm.c3BoysYears16to18-0)+
                                                                     Number(sjpuForm.c1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c3BoysYearsGreaterThan18-0)
                                                                     }}">
                                                       </td>
                                                       <td><input type="text" id="c4GirlsYears7to11" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{ Number(sjpuForm.c1GirlsYears7to11-0)+
                                                                      Number(sjpuForm.c2GirlsYears7to11-0)+
                                                                      Number(sjpuForm.c3GirlsYears7to11-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4GirlsYears12to15" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c3GirlsYears12to15-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4GirlsYears16to18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c3GirlsYears16to18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4GirlsYearsGreaterThan18" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1GirlsYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c2GirlsYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c3GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input type="text" id="c4GirlsTotal" disabled
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1GirlsYears7to11-0)+
                                                                      Number(sjpuForm.c2GirlsYears7to11-0)+
                                                                      Number(sjpuForm.c3GirlsYears7to11-0)+
                                                                      Number(sjpuForm.c1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c1GirlsYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c2GirlsYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c3GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                       <td><input disabled type="text" id="c4GrandTotal"
                                                            class="form-control inputBackground tableinputWidth totalFont"
                                                            value="{{Number(sjpuForm.c1BoysYears7to11-0)+
                                                                     Number(sjpuForm.c1BoysYears12to15-0)+
                                                                     Number(sjpuForm.c1BoysYears16to18-0)+
                                                                     Number(sjpuForm.c1BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c1GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c1GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c1GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c1GirlsYearsGreaterThan18-0)
                                                                     +
                                                                     Number(sjpuForm.c2BoysYears7to11-0)+
                                                                     Number(sjpuForm.c2BoysYears12to15-0)+
                                                                     Number(sjpuForm.c2BoysYears16to18-0)+
                                                                     Number(sjpuForm.c2BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c2GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c2GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c2GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c2GirlsYearsGreaterThan18-0)
                                                                     +
                                                                     Number(sjpuForm.c3BoysYears7to11-0)+
                                                                     Number(sjpuForm.c3BoysYears12to15-0)+
                                                                     Number(sjpuForm.c3BoysYears16to18-0)+
                                                                     Number(sjpuForm.c3BoysYearsGreaterThan18-0)+
                                                                     Number(sjpuForm.c3GirlsYears7to11-0)+
                                                                     Number(sjpuForm.c3GirlsYears12to15-0)+
                                                                     Number(sjpuForm.c3GirlsYears16to18-0)+
                                                                     Number(sjpuForm.c3GirlsYearsGreaterThan18-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                             </tbody>
                                        </table>
                                   </div>
                                   <!-------------------------------------- End of C section ------------------------------------------>


                                   <!-------------------------------------- D section ------------------------------------------>
                                   <div class="b4sectionheading" id="caseD"></div>
                                   <div class="grey-header headMarg">D. Types of Function and Order SJPU (In the reporting month) for CICL Cases Only</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Category</th>
                                                       <th colspan="3">New cases</th>
                                                       <th colspan="3">Old Cases</th>
                                                       <th rowspan="2">Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>Cases</th>
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  <th>Cases</th>
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  </tr>
                                             </thead>
                                             <tbody>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.1.
                                                                      Bail Granted at Police Station Level in the reporting month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d1NewCases" required
                                                            ng-model="sjpuForm.d1NewCases"  ng-keyup="resetD1New(sjpuForm.d1NewCases)"
                                                            ng-init="sjpuForm.d1NewCases=null"
                                                            ng-disabled="sjpuForm.submitted" only-four-digits
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d1NewCases" id="d1NewBoys"
                                                            ng-model="sjpuForm.d1NewBoys" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d1NewCases<1)||(sjpuForm.d1NewCases==null)" 
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d1NewCases" id="d1NewGirls"
                                                            ng-model="sjpuForm.d1NewGirls"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d1NewCases<1)||(sjpuForm.d1NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" required id="d1OldCases"
                                                            ng-model="sjpuForm.d1OldCases" ng-keyup="resetD1Old(sjpuForm.d1OldCases)"
                                                            ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.d1OldCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d1OldCases" id="d1OldBoys"
                                                            ng-model="sjpuForm.d1OldBoys" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d1OldCases<1)||(sjpuForm.d1OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                            <td><input type="number" ng-required="sjpuForm.d1OldCases" id="d1OldGirls"
                                                            ng-model="sjpuForm.d1OldGirls"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d1OldCases<1)||(sjpuForm.d1OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="d1Total" disabled
                                                            value="{{Number(sjpuForm.d1NewBoys-0)+
                                                                     Number(sjpuForm.d1NewGirls-0)+
                                                                     Number(sjpuForm.d1OldBoys-0)+
                                                                     Number(sjpuForm.d1OldGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.2.
                                                                        CICL produced before JJB in the reporting month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="d2NewCases"
                                                            ng-model="sjpuForm.d2NewCases"  ng-keyup="resetD2New(sjpuForm.d2NewCases)"
                                                            ng-init="sjpuForm.d2NewCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d2NewCases" id="d2NewBoys"
                                                            ng-model="sjpuForm.d2NewBoys" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d2NewCases<1)||(sjpuForm.d2NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d2NewCases" id="d2NewGirls"
                                                            ng-model="sjpuForm.d2NewGirls"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d2NewCases<1)||(sjpuForm.d2NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" required id="d2OldCases"
                                                            ng-model="sjpuForm.d2OldCases" ng-keyup="resetD2Old(sjpuForm.d2OldCases)"
                                                            ng-disabled="sjpuForm.submitted" ng-init="sjpuForm.d2OldCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d2OldCases" id="d2OldBoys"
                                                            ng-model="sjpuForm.d2OldBoys" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d2OldCases<1)||(sjpuForm.d2OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                         <td><input type="number" ng-required="sjpuForm.d2OldCases" id="d2OldGirls"
                                                            ng-model="sjpuForm.d2OldGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d2OldCases<1)||(sjpuForm.d2OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="d2Total" disabled
                                                            value="{{Number(sjpuForm.d2NewBoys-0)+
                                                                     Number(sjpuForm.d2NewGirls-0)+
                                                                     Number(sjpuForm.d2OldBoys-0)+
                                                                     Number(sjpuForm.d2OldGirls-0)}}" 
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                            
                                                      
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.3. CICL produced before Other Authority/Court (If not produced before JJB) in the reporting month</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="d3NewCases"
                                                            ng-model="sjpuForm.d3NewCases" 
                                                            ng-keyup="resetD3New(sjpuForm.d3NewCases)"
                                                            ng-init="sjpuForm.d3NewCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d3NewCases" id="d3NewBoys"
                                                            ng-model="sjpuForm.d3NewBoys"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d3NewCases<1)||(sjpuForm.d3NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d3NewCases" id="d3NewGirls"
                                                            ng-model="sjpuForm.d3NewGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d3NewCases<1)||(sjpuForm.d3NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" required id="d3OldCases"
                                                            ng-model="sjpuForm.d3OldCases"
                                                            ng-init="sjpuForm.d3OldCases=null"
                                                            ng-keyup="resetD3Old(sjpuForm.d3OldCases)" 
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d3OldCases" id="d3OldBoys"
                                                            ng-model="sjpuForm.d3OldBoys"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d3OldCases<1)||(sjpuForm.d3OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d3OldCases" id="d3OldGirls"
                                                            ng-model="sjpuForm.d3OldGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d3OldCases<1)||(sjpuForm.d3OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                         <td><input type="text" id="d3Total" disabled
                                                            value="{{Number(sjpuForm.d3NewBoys-0)+
                                                                     Number(sjpuForm.d3NewGirls-0)+
                                                                     Number(sjpuForm.d3OldBoys-0)+
                                                                     Number(sjpuForm.d3OldGirls-0)}}" 
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                      
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.4. Social Background Report (SBR) produced before JJB</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="d4NewCases"
                                                            ng-model="sjpuForm.d4NewCases"
                                                            ng-keyup="resetD4New(sjpuForm.d4NewCases)"
                                                            ng-init="sjpuForm.d4NewCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d4NewCases" id="d4NewBoys"
                                                            ng-model="sjpuForm.d4NewBoys"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d4NewCases<1)||(sjpuForm.d4NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d4NewCases" id="d4NewGirls"
                                                            ng-model="sjpuForm.d4NewGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d4NewCases<1)||(sjpuForm.d4NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" required id="d4OldCases"
                                                            ng-model="sjpuForm.d4OldCases" 
                                                            ng-init="sjpuForm.d4OldCases=null"
                                                            ng-keyup="resetD4Old(sjpuForm.d4OldCases)"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d4OldCases" id="d4OldBoys"
                                                            ng-model="sjpuForm.d4OldBoys" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d4OldCases<1)||(sjpuForm.d4OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d4OldCases" id="d4OldGirls"
                                                            ng-model="sjpuForm.d4OldGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d4OldCases<1)||(sjpuForm.d4OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="text" id="d4Total" disabled
                                                            value="{{Number(sjpuForm.d4NewBoys-0)+
                                                                     Number(sjpuForm.d4NewGirls-0)+
                                                                     Number(sjpuForm.d4OldBoys-0)+
                                                                     Number(sjpuForm.d4OldGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                            
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.5.
                                                                      Case Diary Submitted</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="d5NewCases"
                                                            ng-model="sjpuForm.d5NewCases" 
                                                            ng-keyup="resetD5New(sjpuForm.d5NewCases)"
                                                            ng-init="sjpuForm.d5NewCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d5NewCases" id="d5NewBoys"
                                                            ng-model="sjpuForm.d5NewBoys"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d5NewCases<1)||(sjpuForm.d5NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d5NewCases" id="d5NewGirls"
                                                            ng-model="sjpuForm.d5NewGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d5NewCases<1)||(sjpuForm.d5NewCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" required id="d5OldCases"
                                                            ng-model="sjpuForm.d5OldCases" 
                                                            ng-keyup="resetD5Old(sjpuForm.d5OldCases)"
                                                            ng-init="sjpuForm.d5OldCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d5OldCases" id="d5OldBoys"
                                                            ng-model="sjpuForm.d5OldBoys"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d5OldCases<1)||(sjpuForm.d5OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                       <td><input type="number" ng-required="sjpuForm.d5OldCases" id="d5OldGirls"
                                                            ng-model="sjpuForm.d5OldGirls" 
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d5OldCases<1)||(sjpuForm.d5OldCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                            
                                                         <td><input type="text" id="d5Total" disabled
                                                            value="{{Number(sjpuForm.d5NewBoys-0)+
                                                                     Number(sjpuForm.d5NewGirls-0)+
                                                                     Number(sjpuForm.d5OldBoys-0)+
                                                                     Number(sjpuForm.d5OldGirls-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">D.6.
                                                                     Final Report submitted in JJB</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="d6NewCases" only-four-digits
                                                            ng-model="sjpuForm.d6NewCases" required
                                                            ng-keyup="resetD6New(sjpuForm.d6NewCases)"
                                                             ng-init="sjpuForm.d6NewCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth  removeExponentialValueE" >
                                                       </td>
                                                       <td><input type="number" id="d6NewBoys"  only-four-digits
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                            ng-model="sjpuForm.d6NewBoys" ng-required="sjpuForm.d6NewCases"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d6NewCases<1)||(sjpuForm.d6NewCases==null)">
                                                       </td>
                                                       <td><input type="number" id="d6NewGirls" only-four-digits
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                            ng-model="sjpuForm.d6NewGirls" ng-required="sjpuForm.d6NewCases"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d6NewCases<1)||(sjpuForm.d6NewCases==null)">
                                                       </td>
                                                       <td><input type="number" id="d6OldCases"  only-four-digits
                                                            ng-init="sjpuForm.d6OldCases=null"
                                                            class="form-control inputBackground tableinputWidth  removeExponentialValueE"
                                                            ng-keyup="resetD6Old(sjpuForm.d6OldCases)"
                                                            ng-model="sjpuForm.d6OldCases" required
                                                            ng-disabled="sjpuForm.submitted">
                                                       </td>
                                                       <td><input type="number" id="d6OldBoys"  only-four-digits
                                                            class="form-control inputBackground tableinputWidth  removeExponentialValueE"
                                                            ng-model="sjpuForm.d6OldBoys" ng-required="sjpuForm.d6OldCases"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.d6OldCases<1)||(sjpuForm.d6OldCases==null)">
                                                       </td>
                                                       
                                                       <td><input type="number" id="d6OldGirls" only-four-digits
                                                            class="form-control inputBackground tableinputWidth  removeExponentialValueE"
                                                             ng-model="sjpuForm.d6OldGirls" ng-required="sjpuForm.d6OldCases"
                                                             ng-disabled="sjpuForm.submitted||(sjpuForm.d6OldCases<1)||(sjpuForm.d6OldCases==null)">
                                                       </td>
                                                       
                                                       <td><input type="text" id="d6Total" disabled 
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.d6NewBoys-0)+Number(sjpuForm.d6NewGirls-0)+
                                                                    Number(sjpuForm.d6OldBoys-0)+Number(sjpuForm.d6OldGirls-0)}}">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!--------------------------------------End of D section ------------------------------------------>

                                   <!-------------------------------------- E section ------------------------------------------>
                                   <div class="b4sectionheading" id="caseE"></div>
                                   <div class="grey-header headMarg">E. Participation of SJPU in Other Programs and Details of Cases Registered under various Acts (In the reporting month)</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Participation of SJPU in Programs</th>
                                                       <th style="width:15%">Yes/No/NA</th>
                                                       <th>If yes, please specify the date in the reporting month</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.1.
                                                        Participated in District Child Protection Committee (DCPC)
                                                        meeting held in the month</label>
                                                </div>
                                            </td>
                                            <td><select class="form-control selectWIdth" ng-change="resetDate(sjpuForm.e1aName, 1)" required
                                                ng-disabled="sjpuForm.submitted" ng-model="sjpuForm.e1aName">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="notavailable">Not Available</option>
                                            </select></td>

                                            <td>
                                                <div ng-show="sjpuForm.e1aName == 'yes'"
                                                    style="display: inline-flex;">
                                                    <input type="text" id="e1bDate"
                                                        ng-disabled="sjpuForm.submitted" readonly
                                                        ng-model="sjpuForm.e1bDate"
                                                        class="form-control calenderWidth"><i
                                                        class="fa fa-calendar fa-5x" id="e1bDate1"
                                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.2.
                                                        Participated in Child Line Advisory Board Meeting in the
                                                        month</label>
                                                </div>
                                            </td>
                                            <td><select class="form-control selectWIdth" ng-change="resetDate(sjpuForm.e2aName, 2)" required
                                                ng-disabled="sjpuForm.submitted"
                                                ng-model="sjpuForm.e2aName">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="notavailable">Not Available</option>
                                            </select></td>

                                            <td >
                                                <div  ng-show="sjpuForm.e2aName == 'yes'"
                                                    style="display: inline-flex;">
                                                    <input type="text" id="e2bDate"
                                                        ng-disabled="sjpuForm.submitted" readonly
                                                        ng-model="sjpuForm.e2bDate"
                                                        class="form-control calenderWidth"><i
                                                        class="fa fa-calendar fa-5x" id="e2bDate1"
                                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                </div>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.3.
                                                        Participated in the meeting organized by District Judge on
                                                        the issues of Child Protection in the month</label>
                                                </div>
                                            </td>
                                            <td><select class="form-control selectWIdth" ng-change="resetDate(sjpuForm.e3aName, 3)" required
                                                ng-disabled="sjpuForm.submitted"
                                                ng-model="sjpuForm.e3aName">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="notavailable">Not Available</option>
                                            </select></td>

                                            <td >
                                                <div   ng-show="sjpuForm.e3aName == 'yes'"
                                                    style="display: inline-flex;">
                                                    <input type="text" id="e3bDate"
                                                        ng-disabled="sjpuForm.submitted" readonly
                                                        ng-click="openDatePicker($index)"
                                                        ng-model="sjpuForm.e3bDate"
                                                        class="form-control calenderWidth"><i
                                                        class="fa fa-calendar fa-5x" id="e3bDate1"
                                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                </div>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.4.
                                                        Participated in Coordination meeting with DCPU in the
                                                        month</label>
                                                </div>
                                            </td>
                                            <td><select class="form-control selectWIdth" ng-change="resetDate(sjpuForm.e4aName, 4)" required
                                                ng-disabled="sjpuForm.submitted"
                                                ng-model="sjpuForm.e4aName">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="notavailable">Not Available</option>
                                            </select></td>

                                            <td >
                                                <div   ng-show="sjpuForm.e4aName == 'yes'"
                                                    style="display: inline-flex;">
                                                    <input type="text" id="e4bDate"
                                                        ng-disabled="sjpuForm.submitted" readonly
                                                        ng-click="openDatePicker($index)"
                                                        ng-model="sjpuForm.e4bDate"
                                                        class="form-control calenderWidth"><i
                                                        class="fa fa-calendar fa-5x" id="e4bDate1"
                                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                </div>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.5.
                                                        Participated in AHTU meeting in the month</label>
                                                </div>
                                            </td>
                                            <td><select class="form-control selectWIdth" ng-change="resetDate(sjpuForm.e5aName, 5)" required
                                                ng-change="resetToZeroaccd1(sjpuForm.g1Training)"
                                                ng-disabled="sjpuForm.submitted"
                                                ng-model="sjpuForm.e5aName">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="notavailable">Not Available</option>
                                            </select></td>

                                            <td >
                                                <div  ng-show="sjpuForm.e5aName == 'yes'"
                                                    style="display: inline-flex;">
                                                    <input type="text" id="e5bDate"
                                                        ng-disabled="sjpuForm.submitted" readonly
                                                        ng-click="openDatePicker($index)"
                                                        ng-model="sjpuForm.e5bDate"
                                                        class="form-control calenderWidth"><i
                                                        class="fa fa-calendar fa-5x" id="e5bDate1"
                                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                </div>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.6.
                                                        Participated in any other child related meeting in the
                                                        month</label>
                                                </div>
                                            </td>
                                            <td><select class="form-control selectWIdth" ng-change="resetDate(sjpuForm.e6aName, 6)" required
                                                ng-disabled="sjpuForm.submitted"
                                                ng-model="sjpuForm.e6aName">
                                                    <option value="" disabled selected>Select</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="notavailable">Not Available</option>
                                            </select></td>
                                            <td >
                                                <div   ng-show="sjpuForm.e6aName == 'yes'"
                                                    style="display: inline-flex;">
                                                    <input type="text" id="e6bDate"
                                                        ng-disabled="sjpuForm.submitted" readonly
                                                        ng-click="openDatePicker($index)"
                                                        ng-model="sjpuForm.e6bDate"
                                                        class="form-control calenderWidth"><i
                                                        class="fa fa-calendar fa-5x" id="e6bDate1"
                                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                </div>
                                        </tr>

                                        <tr ng-show="sjpuForm.e6aName == 'yes'">
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">E.6.a.
                                                        Please specify the name of the meeting</label>
                                                </div>
                                            </td>
                                            <td colspan="2"><input type="text" id="e6NameOfMeeting"
                                                ng-model="sjpuForm.e6NameOfMeeting" ng-required="sjpuForm.e6aName=='yes'"
                                                ng-disabled="sjpuForm.submitted" address-validation
                                                class="form-control inputBackground tableinputWidth">
                                            </td>
                                        </tr></table>
                                   </div>
                                   <!--------------------------------------End of E section ------------------------------------------>

                                   <!---------------------------------------F Section--------------------------------->
                                   <div class="b4sectionheading" id="caseF"></div>
                                   <div class="grey-header headMarg">F. 
                                   Cases registered under Different Acts</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Description</th>
                                                       <th>Cases</th>
                                                       <th>Male</th>
                                                       <th>Female</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.1. No. of cases registered under IPC</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f1Cases" 
                                                            ng-keyup="resetF1(sjpuForm.f1Cases)"
                                                            ng-init="sjpuForm.f1Cases=null"
                                                            ng-model="sjpuForm.f1Cases" ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f1Cases" id="f1Male"  
                                                            ng-model="sjpuForm.f1Male" ng-disabled="sjpuForm.submitted||(sjpuForm.f1Cases<1)||(sjpuForm.f1Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f1Cases" id="f1Female" 
                                                            ng-model="sjpuForm.f1Female" ng-disabled="sjpuForm.submitted||(sjpuForm.f1Cases<1)||(sjpuForm.f1Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f1Total" disabled
                                                            value="{{Number(sjpuForm.f1Male-0)+
                                                                     Number(sjpuForm.f1Female-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.2. No. of cases registered under JJ Act</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f2Cases" 
                                                            ng-keyup="resetF2(sjpuForm.f2Cases)"
                                                            ng-init="sjpuForm.f2Cases=null"
                                                            ng-model="sjpuForm.f2Cases" ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f2Cases" id="f2Male" 
                                                            ng-model="sjpuForm.f2Male" ng-disabled="sjpuForm.submitted||(sjpuForm.f2Cases<1)||(sjpuForm.f2Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f2Cases" id="f2Female" 
                                                            ng-model="sjpuForm.f2Female" ng-disabled="sjpuForm.submitted||(sjpuForm.f2Cases<1)||(sjpuForm.f2Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f2Total" disabled
                                                            value="{{Number(sjpuForm.f2Male-0)+
                                                                     Number(sjpuForm.f2Female-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.3.
                                                                      No. of cases registered under CLPR Act</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f3Cases"  
                                                            ng-model="sjpuForm.f3Cases" ng-disabled="sjpuForm.submitted"
                                                            ng-keyup="resetF3(sjpuForm.f3Cases)"
                                                            ng-init="sjpuForm.f3Cases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f3Cases" id="f3Male" 
                                                            ng-model="sjpuForm.f3Male" ng-disabled="sjpuForm.submitted||(sjpuForm.f3Cases<1)||(sjpuForm.f3Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f3Cases" id="f3Female"  
                                                            ng-model="sjpuForm.f3Female" ng-disabled="sjpuForm.submitted||(sjpuForm.f3Cases<1)||(sjpuForm.f3Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f3Total" disabled
                                                            value="{{Number(sjpuForm.f3Male-0)+
                                                                     Number(sjpuForm.f3Female-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.4.
                                                                       No. of cases registered under Child Marriage Prevention Act</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f4Cases" 
                                                            ng-model="sjpuForm.f4Cases" ng-disabled="sjpuForm.submitted"
                                                            ng-keyup="resetF4(sjpuForm.f4Cases)"
                                                            ng-init="sjpuForm.f4Cases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f4Cases" id="f4Male" 
                                                            ng-model="sjpuForm.f4Male" ng-disabled="sjpuForm.submitted||(sjpuForm.f4Cases<1)||(sjpuForm.f4Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f4Cases" id="f4Female" 
                                                            ng-model="sjpuForm.f4Female" ng-disabled="sjpuForm.submitted||(sjpuForm.f4Cases<1)||(sjpuForm.f4Cases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f4Total" disabled
                                                            value="{{Number(sjpuForm.f4Male-0)+
                                                                     Number(sjpuForm.f4Female-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.5.
                                                                      No. of cases registered under other Special and Local Laws</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f5Cases" only-four-digits required
                                                            ng-keyup="resetF5(sjpuForm.f5Cases)"
                                                            ng-init="sjpuForm.f5Cases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.f5Cases" ng-disabled="sjpuForm.submitted">
                                                       </td>
                                                       <td><input type="number" id="f5Male"  only-four-digits ng-required="sjpuForm.f5Cases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                           ng-model="sjpuForm.f5Male" ng-disabled="sjpuForm.submitted||(sjpuForm.f5Cases<1)||(sjpuForm.f5Cases==null)">
                                                       </td>
                                                       <td><input type="number" id="f5Female"  only-four-digits ng-required="sjpuForm.f5Cases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-model="sjpuForm.f5Female" ng-disabled="sjpuForm.submitted||(sjpuForm.f5Cases<1)||(sjpuForm.f5Cases==null)">
                                                       </td>
                                                       <td><input type="text" id="f5Total" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.f5Male-0)+
                                                                     Number(sjpuForm.f5Female-0)}}">
                                                       </td>
                                                  </tr>

                                             </tbody>
                                        </table>
                                   </div>

                                   <!---------------------------------------End of F section ---------------------------------- -->

                                   <!---------------------------------------Start of F2 section ---------------------------------- -->

                                   <div class="grey-header headMarg">F.6.1 Total number of POCSO Cases registered (Till Date) </div>
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Type of Cases registered</th>
                                                       <th rowspan="2">No. of cases</th>
                                                       <th colspan="3">No. of Victims involved</th>
                                                       <th colspan="3">No. of Accused</th>
                                                       
                                                  </tr>
                                                  <tr>
                                                  <th>Male</th>
                                                  <th>Female</th>
                                                  <th>Total</th>
                                                  <th>Male</th>
                                                  <th>Female</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.a. Total number of cases registered u/S 3 of POCSO Act 2012 for the offence of penetrative sexual assault</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iaCases" 
                                                            ng-model="sjpuForm.f6iaCases"
                                                            ng-keyup="resetF6ia(sjpuForm.f6iaCases)"
                                                            ng-init="sjpuForm.f6iaCases=null"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iaCases" id="f6iaVictimsMale" 
                                                            ng-model="sjpuForm.f6iaVictimsMale"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iaCases" id="f6iaVictimsFemale" 
                                                            ng-model="sjpuForm.f6iaVictimsFemale"
                                                           ng-disabled="sjpuForm.submitted||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iaVictimsTotal" disabled
                                                            value="{{Number(sjpuForm.f6iaVictimsMale-0)+Number(sjpuForm.f6iaVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iaCases" id="f6iaAccusedMale" 
                                                             ng-model="sjpuForm.f6iaAccusedMale"
                                                             ng-disabled="sjpuForm.submitted||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases==null)"
                                                             class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iaCases" id="f6iaAccusedFemale" 
                                                             ng-model="sjpuForm.f6iaAccusedFemale"
                                                            ng-disabled="sjpuForm.submitted||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases<1)||(sjpuForm.f6iaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iaAccusedTotal" disabled
                                                            value="{{Number(sjpuForm.f6iaAccusedMale-0)+Number(sjpuForm.f6iaAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.b. Number of cases registered u/S 5 of POCSO Act 2012 for the offence of aggravated penetrative sexual assault</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6ibCases" 
                                                            ng-keyup="resetF6ib(sjpuForm.f6ibCases)"
                                                            ng-init="sjpuForm.f6ibCases=null"
                                                            ng-model="sjpuForm.f6ibCases" ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ibCases" id="f6ibVictimsMale"  
                                                            ng-model="sjpuForm.f6ibVictimsMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ibCases<1)||(sjpuForm.f6ibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ibCases" id="f6ibVictimsFemale" 
                                                            ng-model="sjpuForm.f6ibVictimsFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ibCases<1)||(sjpuForm.f6ibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6ibVictimsTotal" disabled
                                                            value="{{Number(sjpuForm.f6ibVictimsMale-0)+Number(sjpuForm.f6ibVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ibCases" id="f6ibAccusedMale"
                                                            ng-model="sjpuForm.f6ibAccusedMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ibCases<1)||(sjpuForm.f6ibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ibCases" id="f6ibAccusedFemale"  
                                                            ng-model="sjpuForm.f6ibAccusedFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ibCases<1)||(sjpuForm.f6ibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6ibAccusedTotal" disabled
                                                            value="{{Number(sjpuForm.f6ibAccusedMale-0)+Number(sjpuForm.f6ibAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.c. Number of cases registered u/S 7 of POCSO Act 2012 for the offence of sexual assault</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6icCases" 
                                                            ng-keyup="resetF6ic(sjpuForm.f6icCases)"
                                                            ng-init="sjpuForm.f6icCases=null"
                                                            ng-model="sjpuForm.f6icCases" ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6icCases" id="f6icVictimsMale"  
                                                            ng-model="sjpuForm.f6icVictimsMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6icCases<1)||(sjpuForm.f6icCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6icCases" id="f6icVictimsFemale" 
                                                            ng-model="sjpuForm.f6icVictimsFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6icCases<1)||(sjpuForm.f6icCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6icVictimsTotal" disabled
                                                            value="{{Number(sjpuForm.f6icVictimsMale-0)+Number(sjpuForm.f6icVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6icCases" id="f6icAccusedMale"  
                                                            ng-model="sjpuForm.f6icAccusedMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6icCases<1)||(sjpuForm.f6icCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6icCases" id="f6icAccusedFemale"  
                                                            ng-model="sjpuForm.f6icAccusedFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6icCases<1)||(sjpuForm.f6icCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6icAccusedTotal" disabled
                                                           value="{{Number(sjpuForm.f6icAccusedMale-0)+Number(sjpuForm.f6icAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.d. Number of cases registered u/S 9 of POCSO Act 2012 for the offence of aggravated sexual assault</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6idCases"  
                                                            ng-model="sjpuForm.f6idCases" ng-disabled="sjpuForm.submitted"
                                                            ng-keyup="resetF6id(sjpuForm.f6idCases)"
                                                            ng-init="sjpuForm.f6idCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6idCases" id="f6idVictimsMale"  
                                                            ng-model="sjpuForm.f6idVictimsMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6idCases<1)||(sjpuForm.f6idCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6idCases" id="f6idVictimsFemale" 
                                                            ng-model="sjpuForm.f6idVictimsFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6idCases<1)||(sjpuForm.f6idCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6idVictimsTotal" disabled
                                                            value="{{Number(sjpuForm.f6idVictimsMale-0)+Number(sjpuForm.f6idVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6idCases" id="f6idAccusedMale"  
                                                            ng-model="sjpuForm.f6idAccusedMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6idCases<1)||(sjpuForm.f6idCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6idCases" id="f6idAccusedFemale" 
                                                            ng-model="sjpuForm.f6idAccusedFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6idCases<1)||(sjpuForm.f6idCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6idAccusedTotal" disabled
                                                            value="{{Number(sjpuForm.f6idAccusedMale-0)+Number(sjpuForm.f6idAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.e. Number of cases registered u/S 11 of POCSO Act 2012 for the offence of sexual harassment</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6ieCases" 
                                                            ng-model="sjpuForm.f6ieCases" ng-disabled="sjpuForm.submitted"
                                                            ng-keyup="resetF6ie(sjpuForm.f6ieCases)"
                                                            ng-init="sjpuForm.f6ieCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ieCases" id="f6ieVictimsMale" 
                                                            ng-model="sjpuForm.f6ieVictimsMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ieCases<1)||(sjpuForm.f6ieCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ieCases" id="f6ieVictimsFemale" 
                                                            ng-model="sjpuForm.f6ieVictimsFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ieCases<1)||(sjpuForm.f6ieCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6ieVictimsTotal" disabled
                                                            value="{{Number(sjpuForm.f6ieVictimsMale-0)+Number(sjpuForm.f6ieVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ieCases" id="f6ieAccusedMale" 
                                                            ng-model="sjpuForm.f6ieAccusedMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ieCases<1)||(sjpuForm.f6ieCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ieCases" id="f6ieAccusedFemale"  
                                                            ng-model="sjpuForm.f6ieAccusedFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ieCases<1)||(sjpuForm.f6ieCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6ieAccusedTotal" disabled
                                                            value="{{Number(sjpuForm.f6ieAccusedMale-0)+Number(sjpuForm.f6ieAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.f. Number of cases registered u/S 13 & 15 of POCSO Act 2012 for the offence of pornography</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6ifCases" 
                                                            ng-model="sjpuForm.f6ifCases" ng-disabled="sjpuForm.submitted"
                                                            ng-keyup="resetF6if(sjpuForm.f6ifCases)"
                                                            ng-init="sjpuForm.f6ifCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ifCases" id="f6ifVictimsMale"  
                                                            ng-model="sjpuForm.f6ifVictimsMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ifCases<1)||(sjpuForm.f6ifCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ifCases" id="f6ifVictimsFemale" 
                                                            ng-model="sjpuForm.f6ifVictimsFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ifCases<1)||(sjpuForm.f6ifCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6ifVictimsTotal" disabled
                                                            value="{{Number(sjpuForm.f6ifVictimsMale-0)+Number(sjpuForm.f6ifVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ifCases" id="f6ifAccusedMale" 
                                                            ng-model="sjpuForm.f6ifAccusedMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ifCases<1)||(sjpuForm.f6ifCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6ifCases" id="f6ifAccusedFemale"  
                                                            ng-model="sjpuForm.f6ifAccusedFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6ifCases<1)||(sjpuForm.f6ifCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6ifAccusedTotal" disabled
                                                            value="{{Number(sjpuForm.f6ifAccusedMale-0)+Number(sjpuForm.f6ifAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.1.g. Number of Other cases registered under POCSO Act 2012 </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6igCases" 
                                                            ng-model="sjpuForm.f6igCases" ng-disabled="sjpuForm.submitted"
                                                            ng-keyup="resetF6ig(sjpuForm.f6igCases)"
                                                            ng-init="sjpuForm.f6igCases=null"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6igCases" id="f6igVictimsMale" 
                                                            ng-model="sjpuForm.f6igVictimsMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6igCases<1)||(sjpuForm.f6igCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6igCases" id="f6igVictimsFemale"  
                                                            ng-model="sjpuForm.f6igVictimsFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6igCases<1)||(sjpuForm.f6igCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6igVictimsTotal" disabled
                                                       value="{{Number(sjpuForm.f6igVictimsMale-0)+Number(sjpuForm.f6igVictimsFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6igCases" id="f6igAccusedMale" 
                                                            ng-model="sjpuForm.f6igAccusedMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6igCases<1)||(sjpuForm.f6igCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6igCases" id="f6igAccusedFemale"  
                                                            ng-model="sjpuForm.f6igAccusedFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6igCases<1)||(sjpuForm.f6igCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6igAccusedTotal" disabled
                                                            value="{{Number(sjpuForm.f6igAccusedMale-0)+Number(sjpuForm.f6igAccusedFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"
                                                             only-four-digits></td>
                                                  </tr>
                                                  
                                                   <tr>
                                                       <td class="tabletdWidthmoreThannfour">
                                                            <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">F.6. Total Cases registered under POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="f6iTotalCases" disabled 
                                                           value="{{Number(sjpuForm.f6iaCases-0)+
                                                                    Number(sjpuForm.f6ibCases-0)+
                                                                    Number(sjpuForm.f6icCases-0)+
                                                                    Number(sjpuForm.f6idCases-0)+
                                                                    Number(sjpuForm.f6ieCases-0)+
                                                                    Number(sjpuForm.f6ifCases-0)+
                                                                    Number(sjpuForm.f6igCases-0)}}" 
                                                            class="form-control inputBackground tableinputWidth totalFont"></td>
                                                             
                                                       <td><input type="text" id="f6iTotalVictimsMale" disabled
                                                             value="{{Number(sjpuForm.f6iaVictimsMale-0)+
                                                                      Number(sjpuForm.f6ibVictimsMale-0)+
                                                                      Number(sjpuForm.f6icVictimsMale-0)+
                                                                      Number(sjpuForm.f6idVictimsMale-0)+
                                                                      Number(sjpuForm.f6ieVictimsMale-0)+
                                                                      Number(sjpuForm.f6ifVictimsMale-0)+
                                                                      Number(sjpuForm.f6igVictimsMale-0)}}" 
                                                             class="form-control inputBackground tableinputWidth totalFont"></td>
                                                             
                                                       <td><input type="text" id="f6iTotalVictimsFemale" disabled
                                                             value="{{Number(sjpuForm.f6iaVictimsFemale-0)+
                                                                      Number(sjpuForm.f6ibVictimsFemale-0)+
                                                                      Number(sjpuForm.f6icVictimsFemale-0)+
                                                                      Number(sjpuForm.f6idVictimsFemale-0)+
                                                                      Number(sjpuForm.f6ieVictimsFemale-0)+
                                                                      Number(sjpuForm.f6ifVictimsFemale-0)+
                                                                      Number(sjpuForm.f6igVictimsFemale-0)}}" 
                                                             class="form-control inputBackground tableinputWidth totalFont"></td>
                                                             
                                                       <td><input type="text" id="f6iTotalVictimsTotal" disabled
                                                             value="{{Number(sjpuForm.f6iaVictimsMale-0)+
                                                                      Number(sjpuForm.f6ibVictimsMale-0)+
                                                                      Number(sjpuForm.f6icVictimsMale-0)+
                                                                      Number(sjpuForm.f6idVictimsMale-0)+
                                                                      Number(sjpuForm.f6ieVictimsMale-0)+
                                                                      Number(sjpuForm.f6ifVictimsMale-0)+
                                                                      Number(sjpuForm.f6igVictimsMale-0)+
                                                                      Number(sjpuForm.f6iaVictimsFemale-0)+
                                                                      Number(sjpuForm.f6ibVictimsFemale-0)+
                                                                      Number(sjpuForm.f6icVictimsFemale-0)+
                                                                      Number(sjpuForm.f6idVictimsFemale-0)+
                                                                      Number(sjpuForm.f6ieVictimsFemale-0)+
                                                                      Number(sjpuForm.f6ifVictimsFemale-0)+
                                                                      Number(sjpuForm.f6igVictimsFemale-0)}}" 
                                                             class="form-control inputBackground tableinputWidth totalFont"></td>
                                                              
                                                       <td><input type="text" id="f6iTotalAccusedMale" disabled
                                                             value="{{Number(sjpuForm.f6iaAccusedMale-0)+
                                                                      Number(sjpuForm.f6ibAccusedMale-0)+
                                                                      Number(sjpuForm.f6icAccusedMale-0)+
                                                                      Number(sjpuForm.f6idAccusedMale-0)+
                                                                      Number(sjpuForm.f6ieAccusedMale-0)+
                                                                      Number(sjpuForm.f6ifAccusedMale-0)+
                                                                      Number(sjpuForm.f6igAccusedMale-0)}}" 
                                                             class="form-control inputBackground tableinputWidth totalFont"></td>
                                                             
                                                       <td><input type="text" id="f6iTotalAccusedFemale" disabled
                                                             value="{{Number(sjpuForm.f6iaAccusedFemale-0)+
                                                                      Number(sjpuForm.f6ibAccusedFemale-0)+
                                                                      Number(sjpuForm.f6icAccusedFemale-0)+
                                                                      Number(sjpuForm.f6idAccusedFemale-0)+
                                                                      Number(sjpuForm.f6ieAccusedFemale-0)+
                                                                      Number(sjpuForm.f6ifAccusedFemale-0)+
                                                                      Number(sjpuForm.f6igAccusedFemale-0)}}" 
                                                             class="form-control inputBackground tableinputWidth totalFont"></td>
                                                             
                                                       <td><input type="text" id="f6iTotalAccusedTotal" disabled
                                                             value="{{Number(sjpuForm.f6iaAccusedMale-0)+
                                                                      Number(sjpuForm.f6ibAccusedMale-0)+
                                                                      Number(sjpuForm.f6icAccusedMale-0)+
                                                                      Number(sjpuForm.f6idAccusedMale-0)+
                                                                      Number(sjpuForm.f6ieAccusedMale-0)+
                                                                      Number(sjpuForm.f6ifAccusedMale-0)+
                                                                      Number(sjpuForm.f6igAccusedMale-0)+
                                                                      Number(sjpuForm.f6iaAccusedFemale-0)+
                                                                      Number(sjpuForm.f6ibAccusedFemale-0)+
                                                                      Number(sjpuForm.f6icAccusedFemale-0)+
                                                                      Number(sjpuForm.f6idAccusedFemale-0)+
                                                                      Number(sjpuForm.f6ieAccusedFemale-0)+
                                                                      Number(sjpuForm.f6ifAccusedFemale-0)+
                                                                      Number(sjpuForm.f6igAccusedFemale-0)}}"
                                                             class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
                                                  </tr>
                                                  
                                             </tbody>
                                        </table>
                                   </div>

                                   
                                    
                                   <div class="grey-header headMarg">F.6.2. Process under POCSO Act 2012</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Category</th>
                                                       <th>Cases</th>
                                                       <th>Male</th>
                                                       <th>Female</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.2.a. Number of offenders apprehended in the district u/Ss  3,5,7,9,11,13 & 15 of POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiaCases"  
                                                            ng-init="sjpuForm.f6iiaCases=null"
                                                            ng-keyup="resetF6iia(sjpuForm.f6iiaCases)"
                                                            ng-model="sjpuForm.f6iiaCases" ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiaCases" id="f6iiaMale" 
                                                            ng-model="sjpuForm.f6iiaMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiaCases<1)||(sjpuForm.f6iiaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiaCases" id="f6iiaFemale" 
                                                            ng-model="sjpuForm.f6iiaFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiaCases<1)||(sjpuForm.f6iiaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiaTotal" disabled
                                                            value="{{Number(sjpuForm.f6iiaMale-0)+Number(sjpuForm.f6iiaFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.2.b. Number of victim/children sent for emergency medical care u/r-5 of the POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iibCases"  
                                                            ng-model="sjpuForm.f6iibCases" ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.f6iibCases=null"
                                                            ng-keyup="resetF6iib(sjpuForm.f6iibCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iibCases" id="f6iibMale" 
                                                            ng-model="sjpuForm.f6iibMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iibCases<1)||(sjpuForm.f6iibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iibCases" id="f6iibFemale" 
                                                            ng-model="sjpuForm.f6iibFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iibCases<1)||(sjpuForm.f6iibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iibTotal" disabled
                                                            value="{{Number(sjpuForm.f6iibMale-0)+Number(sjpuForm.f6iibFemale-0)}}" 
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.2.c. Number of MLC obtained u/S 27 of the POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iicCases" 
                                                            ng-model="sjpuForm.f6iicCases" ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.f6iicCases=null"
                                                            ng-keyup="resetF6iic(sjpuForm.f6iicCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iicCases" id="f6iicMale" 
                                                            ng-model="sjpuForm.f6iicMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iicCases<1)||(sjpuForm.f6iicCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iicCases" id="f6iicFemale"  
                                                            ng-model="sjpuForm.f6iicFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iicCases<1)||(sjpuForm.f6iicCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iicTotal" disabled
                                                            value="{{Number(sjpuForm.f6iicMale-0)+Number(sjpuForm.f6iicFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.2.d. Number of cases for non-reporting or non-recording u/S 19 and u/S 20 of the POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iidCases"  
                                                            ng-model="sjpuForm.f6iidCases" ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.f6iidCases=null"
                                                            ng-keyup="resetF6iid(sjpuForm.f6iidCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iidCases" id="f6iidMale" 
                                                            ng-model="sjpuForm.f6iidMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iidCases<1)||(sjpuForm.f6iidCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iidCases" id="f6iidFemale"  
                                                            ng-model="sjpuForm.f6iidFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iidCases<1)||(sjpuForm.f6iidCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iidTotal" disabled
                                                            value="{{Number(sjpuForm.f6iidMale-0)+Number(sjpuForm.f6iidFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.2.e. Number of Children declared as CNCP as per police record u/S- 19(5) of POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f6iieCases"  only-four-digits required
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                            ng-init="sjpuForm.f6iieCases=null"
                                                            ng-keyup="resetF6iie(sjpuForm.f6iieCases)"
                                                            ng-model="sjpuForm.f6iieCases" ng-disabled="sjpuForm.submitted">
                                                       </td>
                                                       <td><input type="number" id="f6iieMale"  ng-required="sjpuForm.f6iieCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                             ng-model="sjpuForm.f6iieMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iieCases<1)||(sjpuForm.f6iieCases==null)">
                                                       </td>
                                                       <td><input type="number" id="f6iieFemale"  ng-required="sjpuForm.f6iieCases"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE" only-four-digits
                                                             ng-model="sjpuForm.f6iieFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iieCases<1)||(sjpuForm.f6iieCases==null)">
                                                       </td>
                                                       <td><input type="text" id="f6iieTotal" disabled
                                                            class="form-control inputBackground tableinputWidth"
                                                            value="{{Number(sjpuForm.f6iieMale-0)+Number(sjpuForm.f6iieFemale-0)}}">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.2.f. Number of cases of offences committed by Children under the JJAct 2015 & as per S.34 of the POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" id="f6iifCases"  only-four-digits required
                                                            ng-init="sjpuForm.f6iifCases=null"
                                                            ng-keyup="resetF6iif(sjpuForm.f6iifCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                            ng-model="sjpuForm.f6iifCases" ng-disabled="sjpuForm.submitted">
                                                       </td>
                                                       <td><input type="number" id="f6iifMale"   only-four-digits ng-required="sjpuForm.f6iifCases"
                                                            class="form-control inputBackground tableinputWidth  removeExponentialValueE"
                                                            ng-model="sjpuForm.f6iifMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iifCases<1)||(sjpuForm.f6iifCases==null)">
                                                       </td>
                                                       <td><input type="number" id="f6iifFemale"  only-four-digits ng-required="sjpuForm.f6iifCases"
                                                            class="form-control inputBackground tableinputWidth  removeExponentialValueE"
                                                            ng-model="sjpuForm.f6iifFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iifCases<1)||(sjpuForm.f6iifCases==null)">
                                                       </td>
                                                       <td><input type="text" id="f6iifTotal"  disabled
                                                            value="{{Number(sjpuForm.f6iifMale-0)+Number(sjpuForm.f6iifFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth">
                                                       </td>
                                                  </tr>
                                                  

                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   <div class="grey-header headMarg">F.6.3. Disposal of Cases</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th>Category</th>
                                                       <th>Cases</th>
                                                       <th>Male</th>
                                                       <th>Female</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.a. Number of cases under which charge sheet was filed</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiiaCases"  
                                                            ng-model="sjpuForm.f6iiiaCases" ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.f6iiiaCases=null"
                                                            ng-keyup="resetF6iiia(sjpuForm.f6iiiaCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiiaCases" id="f6iiiaMale" 
                                                            ng-model="sjpuForm.f6iiiaMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiiaCases<1)||(sjpuForm.f6iiiaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiiaCases" id="f6iiiaFemale" 
                                                            ng-model="sjpuForm.f6iiiaFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiiaCases<1)||(sjpuForm.f6iiiaCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiiaTotal" disabled
                                                            value="{{Number(sjpuForm.f6iiiaMale-0)+Number(sjpuForm.f6iiiaFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                       
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.b. Number of cases under which closure was filed</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiibCases" 
                                                            ng-model="sjpuForm.f6iiibCases" ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.f6iiibCases=null"
                                                            ng-keyup="resetF6iiib(sjpuForm.f6iiibCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiibCases" id="f6iiibMale"  
                                                            ng-model="sjpuForm.f6iiibMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiibCases<1)||(sjpuForm.f6iiibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiibCases" id="f6iiibFemale" 
                                                            ng-model="sjpuForm.f6iiibFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiibCases<1)||(sjpuForm.f6iiibCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiibTotal"  disabled
                                                         value="{{Number(sjpuForm.f6iiibMale-0)+Number(sjpuForm.f6iiibFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.c. Number of cases of convictions</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiicCases" 
                                                            ng-model="sjpuForm.f6iiicCases" ng-disabled="sjpuForm.submitted"
                                                             ng-init="sjpuForm.f6iiicCases=null"
                                                            ng-keyup="resetF6iiic(sjpuForm.f6iiicCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiicCases" id="f6iiicMale" 
                                                            ng-model="sjpuForm.f6iiicMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiicCases<1)||(sjpuForm.f6iiicCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiicCases" id="f6iiicFemale" 
                                                            ng-model="sjpuForm.f6iiicFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiicCases<1)||(sjpuForm.f6iiicCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiicTotal" disabled
                                                              value="{{Number(sjpuForm.f6iiicMale-0)+Number(sjpuForm.f6iiicFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.d. Number of cases of acquittal</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiidCases" 
                                                            ng-model="sjpuForm.f6iiidCases" ng-disabled="sjpuForm.submitted"
                                                             ng-init="sjpuForm.f6iiidCases=null"
                                                            ng-keyup="resetF6iiid(sjpuForm.f6iiidCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiidCases" id="f6iiidMale"  
                                                            ng-model="sjpuForm.f6iiidMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiidCases<1)||(sjpuForm.f6iiidCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiidCases" id="f6iiidFemale" 
                                                            ng-model="sjpuForm.f6iiidFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiidCases<1)||(sjpuForm.f6iiidCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiidTotal" disabled
                                                              value="{{Number(sjpuForm.f6iiidMale-0)+Number(sjpuForm.f6iiidFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>

                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.e. Number of cases of discharged</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiieCases" 
                                                            ng-model="sjpuForm.f6iiieCases" ng-disabled="sjpuForm.submitted"
                                                             ng-init="sjpuForm.f6iiieCases=null"
                                                            ng-keyup="resetF6iiie(sjpuForm.f6iiieCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiieCases" id="f6iiieMale"  
                                                            ng-model="sjpuForm.f6iiieMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiieCases<1)||(sjpuForm.f6iiieCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiieCases" id="f6iiieFemale" 
                                                            ng-model="sjpuForm.f6iiieFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiieCases<1)||(sjpuForm.f6iiieCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiieTotal" disabled
                                                         value="{{Number(sjpuForm.f6iiieMale-0)+Number(sjpuForm.f6iiieFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.f. Cases pending with the Special Courts under POCSO Act 2012</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" required id="f6iiifCases" 
                                                            ng-model="sjpuForm.f6iiifCases" ng-disabled="sjpuForm.submitted"
                                                            ng-init="sjpuForm.f6iiifCases=null"
                                                            ng-keyup="resetF6iiif(sjpuForm.f6iiifCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiifCases" id="f6iiifMale"  
                                                            ng-model="sjpuForm.f6iiifMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiifCases<1)||(sjpuForm.f6iiifCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiifCases" id="f6iiifFemale" 
                                                            ng-model="sjpuForm.f6iiifFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiifCases<1)||(sjpuForm.f6iiifCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiifTotal" disabled
                                                         value="{{Number(sjpuForm.f6iiifMale-0)+Number(sjpuForm.f6iiifFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.6.3.g. Total number of Pending Cases more than one month with the State Police during the period of report</label>
                                                            </div>
                                                       </td>
                                                      <td><input type="number" required id="f6iiigCases" 
                                                            ng-model="sjpuForm.f6iiigCases" ng-disabled="sjpuForm.submitted"
                                                             ng-init="sjpuForm.f6iiigCases=null"
                                                            ng-keyup="resetF6iiig(sjpuForm.f6iiigCases)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiigCases" id="f6iiigMale"  
                                                            ng-model="sjpuForm.f6iiigMale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiigCases<1)||(sjpuForm.f6iiigCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" ng-required="sjpuForm.f6iiigCases" id="f6iiigFemale" 
                                                            ng-model="sjpuForm.f6iiigFemale" ng-disabled="sjpuForm.submitted||(sjpuForm.f6iiigCases<1)||(sjpuForm.f6iiigCases==null)"
                                                            class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="text" id="f6iiigTotal" disabled
                                                                value="{{Number(sjpuForm.f6iiigMale-0)+Number(sjpuForm.f6iiigFemale-0)}}"
                                                            class="form-control inputBackground tableinputWidth"></td>
                                                  </tr>
                                                  

                                             </tbody>
                                        </table>
                                   </div>
                                    
                                   <!-- ---------------------------- End of F Section------------------------------- -->
                                   
                                   
                                   
                                   <!--------------------------------------- Start G section---------------------------------->
                                   <div class="b4sectionheading" id="caseG"></div>
                                   <div class="grey-header headMarg">G.
                                   Training on JJ System</div>
                                   <div class="form-group labelFont sectionMarginTop borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                             for="textinput"> G.1.  Was the Training held on JJ
                                             system?</label>
                                        <div class="col-md-6 marginBottomTop">
                                             <select class="form-control inputBackground" required
                                             ng-change="resetToZeroaccd1(sjpuForm.g1Training)"
                                                  ng-disabled="sjpuForm.submitted" ng-model="sjpuForm.g1Training">
                                                  <option value="" disabled selected>Select</option>
                                                  <option value="true">Yes</option>
                                                  <option value="false">No</option>
                                             </select>
                                        </div>
                                   </div>


                                   <div ng-show="sjpuForm.g1Training == 'true'">
                                        <div class="form-group labelFont ">
                                             <label class="col-md-6 control-label labelLeftAlign"
                                                  for="textinput"> G.1.a. Number of Trainings Held</label>
                                             <div class="col-md-6">
                                                  <input type="number" required ng-model="sjpuForm.g1aNoOfTrainings"
                                                       ng-blur="validateNoOfTraining(sjpuForm.g1aNoOfTrainings)"
                                                       ng-disabled="sjpuForm.submitted" id="g1aNoOfTrainings"
                                                       class="form-control inputBackground removeExponentialValueE"
                                                       limit-to="2">
                                             </div>
                                        </div>



                                        <div class="panel-group" id="accordion" role="tablist"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default"
                                                  ng-repeat="sjpuTrainingDetails in sjpuTrainingDetailsRepetitionArray track by $index">
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
                                                                      for="textinput"> G.1.b. Duration of Training (no.
                                                                      of days)</label>
                                                                 <div class="col-md-6">
                                                                      <input type="number"  ng-disabled="sjpuForm.submitted" limit-to="2"
                                                                           onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
                                                                           ng-model="sjpuTrainingDetailsRepetitionArray[$index].durationTraining"
                                                                           class="form-control inputBackgroundgeneral removeExponentialValueE">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> G.1.c. Training From </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="trainingFromDatepicker{{$index}}"
                                                                           ng-disabled="sjpuForm.submitted" readonly
                                                                           ng-click="openFromDatePicker($index)"
                                                                           ng-model="sjpuTrainingDetailsRepetitionArray[$index].trainingFromDate"
                                                                           class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
                                                                           class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> G.1.d. Training To </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="trainingToDatepicker{{$index}}"
                                                                           ng-disabled="sjpuForm.submitted" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="sjpuTrainingDetailsRepetitionArray[$index].trainingToDate"
                                                                           class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
                                                                           class="fa fa-calendar fa-5x" id="trainingToDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> G.1.e. Training Organised by</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-change="resetAccordionOthers2(sjpuTrainingDetails)"
                                                                           ng-disabled="sjpuForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
                                                                           ng-model="sjpuTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground inputBackgroundgeneral">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="sjpuTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput">If Training Organised by
                                                                      Others, Please Specify</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="sjpuForm.submitted" address-validation
                                                                           ng-model="sjpuTrainingDetailsRepetitionArray[$index].traingOrganisedbyOthers"
                                                                           class="form-control inputBackgroundgeneral">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> G.1.f. Topic of Training</label>
                                                                 <div class="col-md-6">
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="JJActRule" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totJjAct"> <label
                                                                            for="JJActRule"> JJ Act/Rule </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="LawsandICPS" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totChildRelatedLaws"> <label
                                                                            for="LawsandICPS"> Child related Laws and ICPS </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="POCSOAct" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totPosco"> <label
                                                                            for="POCSOAct"> POCSO Act </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="Combinedtraining" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
                                                                            for="Combinedtraining"> Combined training </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="CPMIS" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totCpmis"> <label
                                                                            for="CPMIS"> CPMIS</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="Trackchild" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totTrackChild"> <label
                                                                            for="Trackchild"> Track child</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="CLTS" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totClts"> <label
                                                                            for="CLTS"> CLTS  </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="cb checkboxstyle">
                                                                        <input id="Others" type="checkbox" ng-disabled="sjpuForm.submitted"
                                                                        ng-click="clearTopicOfTrainingOthers(sjpuTrainingDetailsRepetitionArray[$index])"
                                                                        ng-model="sjpuTrainingDetailsRepetitionArray[$index].totOthers"> <label
                                                                            for="Others"> Others </label>
                                                                    </div>
                                                                </li>
                                                                    </ul>
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="sjpuTrainingDetailsRepetitionArray[$index].totOthers">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> If topic of Training is
                                                                      Other, Please specify </label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="sjpuForm.submitted" address-validation
                                                                           ng-model="sjpuTrainingDetailsRepetitionArray[$index].totOthersSpecify"
                                                                           class="form-control inputBackgroundgeneral">
                                                                 </div>
                                                            </div>


                                                <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend margin-zero"
                                                        for="textinput"><b>G.1.g. Training Attended by :</b></label>
                                                        
                                                        <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrained"
                                                        for="textinput"><b>Number of persons trained</b></label>
                                                        
                                                        
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> S.P. of police </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabSpPolice"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> Dy. S.P of police </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabDySpPolice"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> S.H.O </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabSHO"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">  CWPO </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabCWPO"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">  Social Workers </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabSocialWorker"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">  Other Police Officials </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabOtherPoliceOfficial"
                                                            ng-disabled="sjpuForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">  Chowkidars </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digits
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabChowkidar"
                                                            ng-disabled="sjpuForm.submitted"
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
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabOthers"
                                                            ng-disabled="sjpuForm.submitted"  ng-keyup="resetAccG($index);"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div ng-show="sjpuTrainingDetailsRepetitionArray[$index].tabOthers>0"
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">If training attended by other, Please specify</label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="text" address-validation
                                                            ng-model="sjpuTrainingDetailsRepetitionArray[$index].tabOthersSpecify"
                                                            ng-disabled="sjpuForm.submitted"
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
                                                       <button type="button" class="addingnewdetails" ng-disabled="sjpuForm.submitted"
                                                            ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
                                                       <button type="button" class="addingnewdetails" ng-disabled="sjpuForm.submitted"
                                                            ng-show="sjpuTrainingDetailsRepetitionArray.length > 1"
                                                            ng-click="deleteConfirm()">-</button>
                                                       <div id="maximumLimit10Error" class="error-style"></div>
                                                  </div>
                                             </div>
                                             </div>

                                             <!-- end ---------------------------- -->

                                        </div>

                                   </div>



                                   <!-----------------------------End of H section ------------------ -------------------->


                                   <br> <br> <br> <br> <br> <br>&nbsp;<br>
                                   <br> <br>&nbsp;<br> <br> <br>&nbsp;
                                   <!--                               <a href="#" class="back-to-top" -->
                                   <!--                                    style="display: inline;float:"> <i class="fa fa-arrow-circle-up"></i> -->
                                   <!--                               </a> -->
                              </div>
                         </form>
                    </div>
               </div>
          </div>
          
          
          <!-- end data entry for sjpu  -->   
          
          <div></div>
     </div>
     <div class="modal fade" id="successModalForSJPUSave"
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
     
     <div class="modal fade autoSaveModal" id="successModalForAutoSaveSJPU"
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

     <div class="modal fade" id="successModalForSJPUSubmit"
          data-keyboard="false" data-backdrop="static" tabindex="-1"
          role="dialog">
          <div class="modal-dialog">
               <div class="col-md-12 modal-content modalView">
                    <div class="modal-header succesmodal">
                         <img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
                         <label class="modalMsg">Confirm</label>
                    </div>
                    <div class="modal-body">
                         <h4 class="modal-title" id="myModalLabel">Are you sure you
                              want to submit this form ?</h4>
                         <p style="text-align: center">
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   ng-click="saveSJPU(sjpuForm, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
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
                         <h4 class="modal-title" id="myModalLabel">{{alertMessageShow}}</h4>
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
                                   ng-click="saveSJPU(sjpuForm, 'save')" data-dismiss="modal" aria-hidden="true">SAVE</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="confirmationModalForSJPUdeleteAccordion"
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

     
     <script src="resources/js/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="resources/js/bootstrap.min.js"></script>
     <script src="resources/js/angular.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script>
		var app = angular.module('sjpuApp', ['angular-md5']);
		var cpmisApp = angular.module('sjpuApp');
	</script>
    <script src="resources/js/controllers/sjpuController.js"></script>
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
                        scrollTop : 16
                    }, 0);
                } else if ($('#caseb').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 78
                    }, 0);
                } else if ($('#casec').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 145
                    }, 0);
                } else if ($('#cased').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 195
                    }, 0);
                } else if ($('#casee').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 260
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
         });
         $("input[type='number']").keypress(function(event) {
             if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
                return false;
            }
         });
      });
      </script>

     <script type="text/javascript">
          window.addEventListener("hashchange", function() {
               scrollBy(0, 0);
          });
     </script>

     <script type="text/javascript">
     $('#sjpuFormDetails').on('focus', 'input[type=number]', function (e) {
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



     <!-- -------------------for fixed section -------------------------------------->
</body>
</html>