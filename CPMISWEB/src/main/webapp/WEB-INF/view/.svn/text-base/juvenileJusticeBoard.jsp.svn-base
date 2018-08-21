
<!-- -@author Reena (reena@sdrc.co.in)--->

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
<title>Juvenile Justice Board</title>
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
<body ng-app="jjbApp" ng-controller="JJBController" id="JJBController" class="ng-cloak"
    data-spy="scroll" data-target="#myScrollspy" data-offset="20">

    <!-- spinner -->
    <div id="spinner" class="loader" style="display: none;"></div>
    <div id="loader-mask" class="loader" style="display: none;"></div>
    <!-- /spinner -->

    <jsp:include page="fragments/header.jsp" />
            <div class=" menuSlideBtn ">
                <button>
                    Menu <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
    <div class="b4sectionheading" id="gInfo"></div>
    <!--    <div class="container"> -->
    <div class="row marginspc">
    <form class="form-horizontal" name="jjbFormDetails"
                            id="jjbFormDetails" data-toggle="validator" role="form">
    <nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
            <h5 class="cwcHeading">Juvenile Justice Board <br> Monthly
                Report</h5>
            <ul class="nav nav-pills nav-stacked sectionList flexcroll" id="sectionindctr">
                <li id="gi" class="active sectionUlist active1"><a
                    href="#gInfo"><span class="leftmargin"></span>General
                        Information </a></li>
                <li id="casea" class="sectionUlist"><a href="#caseA">A. Cases on the
                            First day of the month</a></li>
                <li id="caseb" class="sectionUlist"><a href="#caseB">B. New cases
                            filed in the month and the CICL involved in the case</a></li>
                <li id="casec" class="sectionUlist"><a href="#caseC">C. Total no. of
                            cases in the month and CICL involved</a></li>

                <li id="cased" class="sectionUlist"><a href="#caseD">D. CICL Granted
                            Bail</a></li>

                <li id="casee" class="sectionUlist"><a href="#caseE">E.Type of Orders</a></li>

                <li id="casef" class="sectionUlist"><a href="#caseF">F. Cases on the
                            last day of the month and the CICL involved</a></li>

                <li id="caseg" class="sectionUlist"><a href="#caseG">G. Cases pending
                            as on last day of month (By Duration)</a></li>

                <li id="caseh" class="sectionUlist"><a href="#caseH">H. Cases pending
                            as on last day of month by nature of offence</a></li>
                        
                <li id="casei" class="sectionUlist"><a href="#caseI">I. Category wise breakup of Children last day of the Reporting Month</a></li>

                <li id="casej" class="sectionUlist"><a href="#caseJ">J. Cases pending as on last day of month administered by Juvenile Justice Act 2000 (Cases Registered before 15th January 2016)</a></li>
                            
                <li id="casek" class="sectionUlist"><a href="#caseK">K. Functions and Types of Orders of the 
                            Board (in the reporting month) </a></li>
                            
                <li id="casel" class="sectionUlist"><a href="#caseL">L. Training on JJ System (In the Reporting Month)</a></li>
            </ul>

            <!--        <div class="row">
            <div class="col-md-6 savebtn">
                <img class="saveSvg"
                    src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                    height="18" />
                <a href="saveCWC"><h5 class="borderright">SAVE</h5></a>
            </div> -->
            <div ng-hide="jjbForm.submitted">
                <a href=""><div class="col-md-6 savebtn locline" ng-click="test()">
                    <img class="saveSvg" 
                        src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                        ng-disabled="jjbForm.submitted" height="18" /> <h5
                        class="borderright1">SAVE</h5>
                </div></a>
                <button type="submit" class="col-md-6 savebtn locline1 submitbtn" id="clickSubmit"  ng-click="jjbFormDetails.$invalid ? '' : checkSubmit()">
                    <img class="saveSvg"
                        ng-disabled="jjbForm.submitted"
                        src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
                        height="18" /> 
                        <h5 class="borderright1 sbmtbtn">SUBMIT</h5>
                </button>
            </div>
             <div ng-show="jjbForm.submitted">
                <div class="col-md-12 savebtn"></div>
            </div>
        </nav>
        
    

        <div class="col-md-10 formDetailsTopMargin jjbFormTopSpace" id="gInfo">
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
                            Juvenile Justice Board(JJB)&nbsp;Monthly Report for Month
                            of <b style="color: #41c484">&nbsp;{{jjbForm.timeperiod.timePeriod}}</b>
                        </h4>
                        
                            <!-- Biswa starts -->
                            <div class="form-group labelFont">
                                <div class="col-md-6">
                                    <input type="hidden" ng-model="jjbForm.userId"
                                        class="form-control inputBackground">
                                </div>
                            </div>
                            <div class="form-group labelFont">
                                <label class="col-md-6 col-sm-3 control-label  labelLeftAlign"
                                    for="textinput"> Name of the Authorized Person </label>
                                <div class="col-md-6">
                                    <input type="text" ng-model="jjbForm.nameOfAuthorizedPerson" required
                                        ng-disabled="jjbForm.submitted" fifty-characters-validation
                                        class="form-control control-labelmd inputBackgroundgeneral">
                                </div>
                            </div>

                            <div class="col-md-6" style="display: none;">
                                <input name="userId" type="number" required id="uId" value='${userId}'>${userId}
                                <input type="number" id="monthDays" value='<%=daysInMonth%>'>
                            </div>
                            <!-- Biswa ends -->
                            <div class="form-group labelFont">
                                <label class="col-md-6 col-sm-3  control-label control-labelmd labelLeftAlign"
                                    for="textinput"> Designation </label>
                                <div class="col-md-6">
                                    <input type="text" id="" ng-disabled="jjbForm.submitted" required
                                        address-validation ng-model="jjbForm.designation"
                                        class="form-control inputBackgroundgeneral"
                                        style="text-align: left !important;">
                                </div>
                            </div>

                            <div class="form-group labelFont">

                                <label readonly class="col-md-6 col-sm-3  control-label labelLeftAlign"
                                    for="textinput">Date of Reporting</label>

                                <%-- <div class="col-md-6" style="display: inline-flex;">
                                    <input type="text" 
                                        class="form-control inputBackgroundgeneral" value=""> --%>
                                <div class="col-md-6" style="display: inline-flex;">
                                    <%
                                        Date dNow = new Date();
                                        SimpleDateFormat ft = new SimpleDateFormat("dd-MM-yyyy");
                                    %>
                                    <input type="text" readonly tabindex= -1
                                        class="form-control inputBackgroundgeneral readonlyStyle"
                                        value="<%=ft.format(dNow)%>">

                                    <!--  <i E yyyy.MM.dd 'at' hh:mm:ss a zzz" 
<!--                                        class="fa fa-calendar fa-5x" -->
                                    <!--                                        style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i> -->
                                </div>
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
                                <label class="col-md-6 col-sm-3  control-label labelLeftAlign"
                                    for="textinput"> No. of Male Members</label>
                                <div class="col-md-6">
                                    <input type="number" required limit-to="1" id="noOfMaleMembers"
                                        ng-model="jjbForm.noOfMaleMembers" 
                                        ng-disabled="jjbForm.submitted"
                                        ng-keyup="validateMembers('noOfMaleMembers')"
                                        class="form-control inputBackgroundgeneral removeExponentialValueE">
                                </div>
                            </div>

                            <div class="form-group labelFont">
                                <label class="col-md-6 col-sm-3  control-label labelLeftAlign"
                                    for="textinput"> No. of Female Members</label>
                                <div class="col-md-6">
                                    <input type="number" required limit-to="1" id="noOfFemaleMembers"
                                        ng-model="jjbForm.noOfFemaleMembers" 
                                        ng-disabled="jjbForm.submitted"
                                        ng-keyup="validateMembers('noOfFemaleMembers')"
                                        class="form-control inputBackgroundgeneral removeExponentialValueE">
                                </div>
                            </div>

                            <div class="form-group labelFont">
                                <label class="col-md-6 col-sm-3  control-label labelLeftAlign"
                                    for="textinput"> Total no. of Members</label>
                                <div class="col-md-6 inlineError">
                                    <input readonly type="text" id="noOfMembers"
                                        ng-disabled="jjbForm.submitted" tabindex= -1    
                                        class="form-control inputBackgroundgeneral readonlyStyle"
                                        value="{{Number(jjbForm.noOfMaleMembers-0)+Number(jjbForm.noOfFemaleMembers-0)}}">

                                </div>

                            </div>

                            <div class="form-group labelFont">
                                <label class="col-md-6 col-sm-3  control-label labelLeftAlign"
                                    for="textinput"> Number of Probation officers available
                                </label>
                                <div class="col-md-6">
                                    <input type="number" required ng-model="jjbForm.noOfProbationOfficers"
                                        ng-disabled="jjbForm.submitted" onKeyup="if(this.value>10){this.value=10};" 
                                        ng-disabled="jjbForm.submitted"
                                        class="form-control inputBackgroundgeneral removeExponentialValueE">
                                </div>
                            </div>

                            <div class="form-group labelFont">
                                <label class="col-md-6 col-sm-3 control-label labelLeftAlign"
                                    for="textinput"> Place of JJB Sitting (Address)</label>
                                <div class="col-md-6" rows="6" cols="80">
                                    <textarea id="placeOfJJBSitting" type="text" required
                                        ng-disabled="jjbForm.submitted" address-validation
                                        ng-model="jjbForm.placeOfJjbSittings"
                                        class="form-control inputBackgroundgeneral"
                                        style="text-align: left !important; resize: none;"></textarea>
                                </div>
                            </div>

                            <div class="b4sectionheading" id="caseA"></div>
                            <div class="grey-header headMarg">A.&nbsp;Cases on the First Day of
                the Reporting Month</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop">
                  <thead>
                    <tr>
                      <th rowspan="2">Description</th>
                      <th rowspan="2">Total cases</th>
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
                  <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">A. Cases on the First day of the reporting month       
 </label>

                        </div>
                      </td>
                      <td><input id="aTotalCases"
                        type="text" readonly
                        ng-model="jjbForm.aTotalCases" disabled tabindex= -1    
                        class="form-control inputBackground tableinputWidth readonlyStyle"></td>
<!--                         value="{{Number(jjbForm.a1TotalCases-0)+Number(jjbForm.a2TotalCases-0)}}" -->
                        
                      <td><input id="aBoys7to11"
                        type="text" readonly disabled
                        ng-model="jjbForm.aBoys7to11" tabindex= -1  
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.a2Boys7to11-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aBoys12to15"
                         type="text" readonly disabled
                        ng-model="jjbForm.aBoys12to15" tabindex= -1 
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Boys12to15-0)+Number(jjbForm.a2Boys12to15-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aBoys16to18"
                        type="text" readonly disabled
                        ng-model="jjbForm.aBoys16to18" tabindex= -1 
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Boys16to18-0)+Number(jjbForm.a2Boys16to18-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aBoysGreaterThan18"
                        type="text" readonly disabled
                        ng-model="jjbForm.aBoysGreaterThan18" tabindex= -1  
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1BoysGreaterThan18-0)+Number(jjbForm.a2BoysGreaterThan18-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aBoysTotal"
                        type="text" readonly disabled
                        ng-model="jjbForm.aBoysTotal" tabindex= -1  
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.a1Boys12to15-0)+Number(jjbForm.a1Boys16to18-0)+Number(jjbForm.a1BoysGreaterThan18-0)+Number( -->
<!--                         jjbForm.a2Boys7to11-0)+Number(jjbForm.a2Boys12to15-0)+Number(jjbForm.a2Boys16to18-0)+Number(jjbForm.a2BoysGreaterThan18 -->
<!--                         -0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aGirls7to11"
                         type="text" readonly disabled
                        ng-model="jjbForm.aGirls7to11" tabindex= -1 
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Girls7to11-0)+Number(jjbForm.a2Girls7to11-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aGirls12to15"
                        type="text" readonly disabled
                      ng-model="jjbForm.aGirls12to15" tabindex= -1  
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Girls12to15-0)+Number(jjbForm.a2Girls12to15-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aGirls16to18"
                         type="text" readonly disabled
                        ng-model="jjbForm.aGirls16to18" tabindex= -1    
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Girls16to18-0)+Number(jjbForm.a2Girls16to18-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aGirlsGreaterThan18"
                         type="text"  readonly disabled
                         ng-model="jjbForm.aGirlsGreaterThan18" tabindex= -1    
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1GirlsGreaterThan18-0)+Number(jjbForm.a2GirlsGreaterThan18-0)}}" -->
                      <td><input ng-disabled="jjbForm.submitted" id="aGirlsTotal"
                         type="text" readonly disabled
                         ng-model="jjbForm.aGirlsTotal" tabindex= -1    
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Girls7to11-0)+Number(jjbForm.a1Girls12to15-0)+Number(jjbForm.a1Girls16to18-0)+Number(jjbForm.a1GirlsGreaterThan18-0)+Number( -->
<!--                          jjbForm.a2Girls7to11-0)+Number(jjbForm.a2Girls12to15-0)+Number(jjbForm.a2Girls16to18-0)+Number(jjbForm.a2GirlsGreaterThan18-0)}}" -->
                      <td><input readonly type="text" id="aGrandTotal"  tabindex= -1    
                       ng-model="jjbForm.aGrandTotal" disabled
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
<!--                        value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.a1Boys12to15-0)+Number(jjbForm.a1Boys16to18-0)+Number(jjbForm.a1BoysGreaterThan18-0)+Number( -->
<!--                         jjbForm.a1Girls7to11-0)+Number(jjbForm.a1Girls12to15-0)+Number(jjbForm.a1Girls16to18-0)+Number(jjbForm.a1GirlsGreaterThan18-0)+Number(                         -->
<!--                         jjbForm.a2Boys7to11-0)+Number(jjbForm.a2Boys12to15-0)+Number(jjbForm.a2Boys16to18-0)+Number(jjbForm.a2BoysGreaterThan18-0)+Number( -->
<!--                         jjbForm.a2Girls7to11-0)+Number(jjbForm.a2Girls12to15-0)+Number(jjbForm.a2Girls16to18-0)+Number(jjbForm.a2GirlsGreaterThan18 -->
<!--                         -0)}}" -->
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">A.1. Children
                            in Conflict with Law (CICL) Already on Bail </label>

                        </div>
                      </td>
                      <td><input disabled id="a1TotalCases"
                        type="number"  tabindex= -1 
                        ng-model="jjbForm.a1TotalCases"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1Boys7to11" tabindex= -1 
                        type="number" 
                        ng-model="jjbForm.a1Boys7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1Boys12to15" tabindex= -1    
                        type="number" 
                        ng-model="jjbForm.a1Boys12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1Boys16to18" tabindex= -1    
                        type="number" 
                        ng-model="jjbForm.a1Boys16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1BoysGreaterThan18" tabindex= -1 
                        only-four-digit type="number" 
                        ng-model="jjbForm.a1BoysGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1BoysTotal"
                         type="text" readonly tabindex= -1  
                        ng-model="jjbForm.a1BoysTotal"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.a1Boys12to15-0)+Number(jjbForm.a1Boys16to18-0)+Number(jjbForm.a1BoysGreaterThan18-0)}}" -->
                      <td><input disabled id="a1Girls7to11"
                        type="number"  tabindex= -1 
                        ng-model="jjbForm.a1Girls7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1Girls12to15"
                        type="number"  tabindex= -1 
                        ng-model="jjbForm.a1Girls12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1Girls16to18" tabindex= -1   
                        only-four-digit type="number" 
                        ng-model="jjbForm.a1Girls16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a1GirlsGreaterThan18"
                        type="number"   tabindex= -1    
                        ng-model="jjbForm.a1GirlsGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input id="a1GirlsTotal"
                         type="text"  readonly tabindex= -1 
                        ng-model="jjbForm.a1GirlsTotal"
                        class="form-control inputBackground tableinputWidth  readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a1Girls7to11-0)+Number(jjbForm.a1Girls12to15-0)+Number(jjbForm.a1Girls16to18-0)+Number(jjbForm.a1GirlsGreaterThan18-0)}}" -->
                      <td><input readonly type="text" id="a1GrandTotal"
                        ng-model="jjbForm.a1GrandTotal" tabindex= -1    
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
<!--                       value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.a1Boys12to15-0)+Number(jjbForm.a1Boys16to18-0)+Number(jjbForm.a1BoysGreaterThan18-0)+Number( -->
<!--                         jjbForm.a1Girls7to11-0)+Number(jjbForm.a1Girls12to15-0)+Number(jjbForm.a1Girls16to18-0)+Number(jjbForm.a1GirlsGreaterThan18-0)}}" -->
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">A.2.&nbsp;CICL
                            Reporting Absent for Two Consecutive Hearing </label>
                        </div>
                      </td>
                      <td><input disabled id="a2TotalCases"
                        type="number"  tabindex= -1 
                        ng-model="jjbForm.a2TotalCases"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled
                        type="number" 
                        ng-model="jjbForm.a2Boys7to11" tabindex= -1 
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2Boys12to15"
                        type="number" 
                        ng-model="jjbForm.a2Boys12to15" tabindex= -1    
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2Boys16to18"
                        type="number" 
                        ng-model="jjbForm.a2Boys16to18" tabindex= -1    
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2BoysGreaterThan18"
                        type="number" 
                        ng-model="jjbForm.a2BoysGreaterThan18" tabindex= -1 
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2BoysTotal"
                        type="text" readonly
                        ng-model="jjbForm.a2BoysTotal" tabindex= -1 
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a2Boys7to11-0)+Number(jjbForm.a2Boys12to15-0)+Number(jjbForm.a2Boys16to18-0)+Number(jjbForm.a2BoysGreaterThan18-0)}}" -->
                      <td><input disabled id="a2Girls7to11"
                        type="number" 
                        ng-model="jjbForm.a2Girls7to11" tabindex= -1    
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2Girls12to15"
                        type="number" 
                        ng-model="jjbForm.a2Girls12to15" tabindex= -1   
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2Girls16to18"
                        type="number" 
                        ng-model="jjbForm.a2Girls16to18" tabindex= -1   
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2GirlsGreaterThan18" tabindex= -1    
                        type="number"  ng-model="jjbForm.a2GirlsGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="a2GirlsTotal"
                        type="text" ng-model="jjbForm.a2GirlsTotal" tabindex= -1    
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
<!--                         value="{{Number(jjbForm.a2Girls7to11-0)+Number(jjbForm.a2Girls12to15-0)+Number(jjbForm.a2Girls16to18-0)+Number(jjbForm.a2GirlsGreaterThan18-0)}}" -->
<!--                          -->
                      <td><input readonly type="text" readonly id="a2GrandTotal" tabindex= -1   
                       ng-model="jjbForm.a2GrandTotal" disabled
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
<!--                        value="{{Number(jjbForm.a2Boys7to11-0)+Number(jjbForm.a2Boys12to15-0)+Number(jjbForm.a2Boys16to18-0)+Number(jjbForm.a2BoysGreaterThan18-0)+Number( -->
<!--                         jjbForm.a2Girls7to11-0)+Number(jjbForm.a2Girls12to15-0)+Number(jjbForm.a2Girls16to18-0)+Number(jjbForm.a2GirlsGreaterThan18-0)}}" -->
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              
              <div class="b4sectionheading" id="caseB"></div>
              <div class="grey-header headMarg">B.&nbsp;New Cases Filed in the
                Month and the CICL Involved in the Case</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop">
                  <thead>
                    <tr>
                      <th rowspan="2">Description</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">B.1. No.
                            of Cases Filed/Produced Directly by Police</label>

                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" id="b1TotalCases"
                        only-four-digit type="number" required ng-init="jjbForm.b1TotalCases=null"
                        ng-model="jjbForm.b1TotalCases" ng-keyup="resetB1(jjbForm.b1TotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                        <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1Boys7to11"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1Boys7to11" 
                        ng-blur="validateWithF('b1Boys7to11', 'f1Boys7to11', 'Boys, 7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1Boys12to15"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1Boys12to15"
                        ng-blur="validateWithF('b1Boys12to15', 'f1Boys12to15', 'Boys, 12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1Boys16to18"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1Boys16to18"
                        ng-blur="validateWithF('b1Boys16to18', 'f1Boys16to18', 'Boys, 16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1BoysGreaterThan18"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1BoysGreaterThan18"
                        ng-blur="validateWithF('b1BoysGreaterThan18', 'f1BoysGreaterThan18', 'Boys, > 18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                       
                      <td><input ng-disabled="jjbForm.submitted" id="b1BoysTotal" readonly
                         type="text"  tabindex= -1 
                        value="{{Number(jjbForm.b1Boys7to11-0)+Number(
                              jjbForm.b1Boys12to15-0)+Number(
                              jjbForm.b1Boys16to18-0)+Number(
                              jjbForm.b1BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1Girls7to11"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1Girls7to11"
                        ng-blur="validateWithF('b1Girls7to11', 'f1Girls7to11', 'Girls, 7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1Girls12to15"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1Girls12to15"
                        ng-blur="validateWithF('b1Girls12to15', 'f1Girls12to15', 'Girls, 12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1Girls16to18"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases"
                        ng-model="jjbForm.b1Girls16to18"
                        ng-blur="validateWithF('b1Girls16to18', 'f1Girls16to18', 'Girls, 16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.b1TotalCases<1)||(jjbForm.b1TotalCases==null)" id="b1GirlsGreaterThan18"
                        only-four-digit type="number" ng-required="jjbForm.b1TotalCases" ng-model="jjbForm.b1GirlsGreaterThan18"
                        ng-blur="validateWithF('b1GirlsGreaterThan18', 'f1GirlsGreaterThan18', 'Girls, > 18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" id="b1GirlsTotal" readonly
                        type="text"   tabindex= -1
                        value="{{Number(jjbForm.b1Girls7to11-0)+Number(
                              jjbForm.b1Girls12to15-0)+Number(
                              jjbForm.b1Girls16to18-0)+Number(
                              jjbForm.b1GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" id="b1GrandTotal"  tabindex= -1
                        value="{{Number(jjbForm.b1Boys7to11-0)+Number(
                              jjbForm.b1Boys12to15-0)+Number(
                              jjbForm.b1Boys16to18-0)+Number(
                              jjbForm.b1BoysGreaterThan18-0)+Number(
                              jjbForm.b1Girls7to11-0)+Number(
                              jjbForm.b1Girls12to15-0)+Number(
                              jjbForm.b1Girls16to18-0)+Number(
                              jjbForm.b1GirlsGreaterThan18
                              -0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">B.2. No.
                            of Cases Transferred from other Court</label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="b2TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetB2(jjbForm.b2TotalCases)"
                        ng-init="jjbForm.b2TotalCases=null"
                        ng-model="jjbForm.b2TotalCases"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2Boys7to11"
                        ng-blur="validateWithF('b2Boys7to11', 'f1Boys7to11', 'Boys, 7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2Boys12to15"
                        ng-blur="validateWithF('b2Boys12to15', 'f1Boys12to15', 'Boys, 12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2Boys16to18"
                        ng-blur="validateWithF('b2Boys16to18', 'f1Boys16to18', 'Boys, 16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2BoysGreaterThan18"
                        ng-blur="validateWithF('b2BoysGreaterThan18', 'f1BoysGreaterThan18', 'Boys, > 18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input type="text" id="b2BoysTotal" readonly
                        ng-disabled="jjbForm.submitted"  tabindex= -1
                        value="{{Number(jjbForm.b2Boys7to11-0)+Number(
                              jjbForm.b2Boys12to15-0)+Number(
                              jjbForm.b2Boys16to18-0)+Number(
                              jjbForm.b2BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2Girls7to11"
                        ng-blur="validateWithF('b2Girls7to11', 'f1Girls7to11', 'Girls, 7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2Girls12to15"
                        ng-blur="validateWithF('b2Girls12to15', 'f1Girls12to15', 'Girls, 12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-model="jjbForm.b2Girls16to18"
                        ng-blur="validateWithF('b2Girls16to18', 'f1Girls16to18', 'Girls, 16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b2TotalCases" id="b2GirlsGreaterThan18"
                        ng-model="jjbForm.b2GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.b2TotalCases<1)||(jjbForm.b2TotalCases==null)"
                        ng-blur="validateWithF('b2GirlsGreaterThan18', 'f1GirlsGreaterThan18', 'Girls, > 18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" id="b2GirlsTotal" readonly
                        type="text"  tabindex= -1
                        value="{{Number(jjbForm.b2Girls7to11-0)+Number(
                              jjbForm.b2Girls12to15-0)+Number(
                              jjbForm.b2Girls16to18-0)+Number(
                              jjbForm.b2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" id="b2GrandTotal"  tabindex= -1
                        value="{{Number(jjbForm.b2Boys7to11-0)+Number(
                              jjbForm.b2Boys12to15-0)+Number(
                              jjbForm.b2Boys16to18-0)+Number(
                              jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b2Girls7to11-0)+Number(
                              jjbForm.b2Girls12to15-0)+Number(
                              jjbForm.b2Girls16to18-0)+Number(
                              jjbForm.b2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">

                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">B.3.  No. of cases surrendered in JJB</label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="b3TotalCases"
                        ng-disabled="jjbForm.submitted"  ng-keyup="resetB3(jjbForm.b3TotalCases)"
                        ng-model="jjbForm.b3TotalCases"
                        ng-init="jjbForm.b3TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3Boys7to11"
                        ng-blur="validateWithF('b3Boys7to11', 'f1Boys7to11', 'Boys, 7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3Boys12to15"
                        ng-blur="validateWithF('b3Boys12to15', 'f1Boys12to15', 'Boys, 12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3Boys16to18"
                        ng-blur="validateWithF('b3Boys16to18', 'f1Boys16to18', 'Boys, 16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3BoysGreaterThan18"
                        ng-blur="validateWithF('b3BoysGreaterThan18', 'f1BoysGreaterThan18', 'Boys, > 18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input type="text" id="b3BoysTotal" readonly
                        ng-disabled="jjbForm.submitted"  tabindex= -1
                        value="{{Number(jjbForm.b3Boys7to11-0)+Number(
                              jjbForm.b3Boys12to15-0)+Number(
                              jjbForm.b3Boys16to18-0)+Number(
                              jjbForm.b3BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3Girls7to11"
                        ng-blur="validateWithF('b3Girls7to11', 'f1Girls7to11', 'Girls, 7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3Girls12to15"
                        ng-blur="validateWithF('b3Girls12to15', 'f1Girls12to15', 'Girls, 12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-model="jjbForm.b3Girls16to18"
                        ng-blur="validateWithF('b3Girls16to18', 'f1Girls16to18', 'Girls, 16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.b3TotalCases" id="b3GirlsGreaterThan18"
                        ng-model="jjbForm.b3GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.b3TotalCases<1)||(jjbForm.b3TotalCases==null)"
                        ng-blur="validateWithF('b3GirlsGreaterThan18', 'f1GirlsGreaterThan18', 'Girls, > 18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE bInput"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" id="b3GirlsTotal" readonly
                        type="text"  tabindex= -1
                        value="{{Number(jjbForm.b3Girls7to11-0)+Number(
                              jjbForm.b3Girls12to15-0)+Number(
                              jjbForm.b3Girls16to18-0)+Number(
                              jjbForm.b3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" id="b3GrandTotal"  tabindex= -1
                        value="{{Number(jjbForm.b3Boys7to11-0)+Number(
                              jjbForm.b3Boys12to15-0)+Number(
                              jjbForm.b3Boys16to18-0)+Number(
                              jjbForm.b3BoysGreaterThan18-0)+Number(jjbForm.b3Girls7to11-0)+Number(
                              jjbForm.b3Girls12to15-0)+Number(
                              jjbForm.b3Girls16to18-0)+Number(
                              jjbForm.b3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">

                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">B. Total
                            new Cases Filed in the Month</label>

                        </div>
                      </td>
                      <!-- jjbForm.bTotalCases jjbForm.bBoys jjbForm.bGirls jjbForm.bTotalCICL -->
                      <td><input ng-disabled="jjbForm.submitted" readonly  tabindex= -1
                        type="text" id="bTotalCases"
                        value="{{Number(jjbForm.b1TotalCases-0)+Number(jjbForm.b2TotalCases-0)+Number(jjbForm.b3TotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly  tabindex= -1
                        type="text" id="bBoys7to11"
                        value="{{Number(jjbForm.b1Boys7to11-0)+Number(jjbForm.b2Boys7to11-0)+Number(jjbForm.b3Boys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly  tabindex= -1
                        type="text" id="bBoys12to15"
                        value="{{Number(jjbForm.b1Boys12to15-0)+Number(jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly tabindex= -1
                        type="text" id="bBoys16to18"
                        value="{{Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(jjbForm.b3Boys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bBoysGreaterThan18"  tabindex= -1
                        value="{{Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b3BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bBoysTotal"  tabindex= -1
                        value="{{Number(jjbForm.b1Boys7to11-0)+Number(jjbForm.b2Boys7to11-0)+Number(jjbForm.b3Boys7to11-0)+Number(jjbForm.b1Boys12to15-0)+Number(jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)+Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(jjbForm.b3Boys16to18-0)+Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b3BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bGirls7to11"  tabindex= -1
                        value="{{Number(jjbForm.b1Girls7to11-0)+Number(jjbForm.b2Girls7to11-0)+Number(jjbForm.b3Girls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bGirls12to15"  tabindex= -1
                        value="{{Number(jjbForm.b1Girls12to15-0)+Number(jjbForm.b2Girls12to15-0)+Number(jjbForm.b3Girls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bGirls16to18"  tabindex= -1
                        value="{{Number(jjbForm.b1Girls16to18-0)+Number(jjbForm.b2Girls16to18-0)+Number(jjbForm.b3Girls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bGirlsGreaterThan18"  tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.b1GirlsGreaterThan18-0)+Number(jjbForm.b2GirlsGreaterThan18-0)+Number(jjbForm.b3GirlsGreaterThan18-0)}}"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="bGirlsTotal"  tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.b1Girls7to11-0)+Number(jjbForm.b2Girls7to11-0)+Number(jjbForm.b3Girls7to11-0)+Number(jjbForm.b1Girls12to15-0)+Number(jjbForm.b2Girls12to15-0)+Number(jjbForm.b3Girls12to15-0)+Number(jjbForm.b1Girls16to18-0)+Number(jjbForm.b2Girls16to18-0)+Number(jjbForm.b3Girls16to18-0)+Number(jjbForm.b1GirlsGreaterThan18-0)+Number(jjbForm.b2GirlsGreaterThan18-0)+Number(jjbForm.b3GirlsGreaterThan18-0)}}"></td>

                      <td><input readonly type="text" id="bGrandTotal"  tabindex= -1
                        value="{{Number(jjbForm.b1Boys7to11-0)+Number(jjbForm.b2Boys7to11-0)+Number(jjbForm.b3Boys7to11-0)+Number(jjbForm.b1Boys12to15-0)+Number(jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)+Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(jjbForm.b3Boys16to18-0)+Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b3BoysGreaterThan18-0)+Number(jjbForm.b1Girls7to11-0)+Number(jjbForm.b2Girls7to11-0)+Number(jjbForm.b3Girls7to11-0)+Number(jjbForm.b1Girls12to15-0)+Number(jjbForm.b2Girls12to15-0)+Number(jjbForm.b3Girls12to15-0)+Number(jjbForm.b1Girls16to18-0)+Number(jjbForm.b2Girls16to18-0)+Number(jjbForm.b3Girls16to18-0)+Number(jjbForm.b1GirlsGreaterThan18-0)+Number(jjbForm.b2GirlsGreaterThan18-0)+Number(jjbForm.b3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              
              <div class="b4sectionheading" id="caseC"></div>
              <div class="grey-header headMarg">C. Total no. of Cases in the
                Month and CICL Involved</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop">
                  <thead>
                    <tr>
                      <th rowspan="2">Description</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">C.1. Total
                            number of cases and CICL involved with the JJB in the reporting month </label>
                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cTotalCases" tabindex= -1
                        value="{{Number(jjbForm.aTotalCases-0)+Number(jjbForm.b1TotalCases-0)+Number(jjbForm.b2TotalCases-0)+Number(jjbForm.b3TotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cBoys7to11" tabindex= -1
                        value="{{Number(jjbForm.aBoys7to11-0)+Number(jjbForm.b1Boys7to11-0)+Number(jjbForm.b2Boys7to11-0)+Number(jjbForm.b3Boys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cBoys12to15" tabindex= -1
                        value="{{Number(jjbForm.aBoys12to15-0)+Number(jjbForm.b1Boys12to15-0)+Number(jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cBoys16to18" tabindex= -1
                        value="{{Number(jjbForm.aBoys16to18-0)+Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(jjbForm.b3Boys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cBoysGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.aBoysGreaterThan18-0)+Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b3BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cBoysTotal" tabindex= -1
                        value="{{Number(jjbForm.aBoys7to11-0)+Number(jjbForm.aBoys12to15-0)+Number(jjbForm.aBoys16to18-0)+Number(jjbForm.aBoysGreaterThan18-0)+Number(
                        jjbForm.b1Boys7to11-0)+Number(jjbForm.b2Boys7to11-0)+Number(jjbForm.b3Boys7to11-0)+Number(jjbForm.b1Boys12to15-0)+Number(
                        jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)+Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(
                        jjbForm.b3Boys16to18-0)+Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b3BoysGreaterThan18
                        
                        -0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cGirls7to11" tabindex= -1
                        value="{{Number(jjbForm.aGirls7to11-0)+Number(jjbForm.b1Girls7to11-0)+Number(jjbForm.b2Girls7to11-0)+Number(jjbForm.b3Girls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cGirls12to15" tabindex= -1
                        value="{{Number(jjbForm.aGirls12to15-0)+Number(jjbForm.b1Girls12to15-0)+Number(jjbForm.b2Girls12to15-0)+Number(jjbForm.b3Girls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cGirls16to18" tabindex= -1
                        value="{{Number(jjbForm.aGirls16to18-0)+Number(jjbForm.b1Girls16to18-0)+Number(jjbForm.b2Girls16to18-0)+Number(jjbForm.b3Girls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cGirlsGreaterThan18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.aGirlsGreaterThan18-0)+Number(jjbForm.b1GirlsGreaterThan18-0)+Number(jjbForm.b2GirlsGreaterThan18-0)+Number(jjbForm.b3GirlsGreaterThan18-0)}}"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="cGirlsTotal" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.aGirls7to11-0)+Number(jjbForm.aGirls12to15-0)+Number(jjbForm.aGirls16to18-0)+Number(jjbForm.aGirlsGreaterThan18-0)+Number(
                        jjbForm.b1Girls7to11-0)+Number(jjbForm.b2Girls7to11-0)+Number(jjbForm.b3Girls7to11-0)+Number(jjbForm.b1Girls12to15-0)+Number(jjbForm.b2Girls12to15-0)+Number(
                        jjbForm.b3Girls12to15-0)+Number(jjbForm.b1Girls16to18-0)+Number(jjbForm.b2Girls16to18-0)+Number(jjbForm.b3Girls16to18-0)+Number(
                        jjbForm.b1GirlsGreaterThan18-0)+Number(jjbForm.b2GirlsGreaterThan18-0)+Number(jjbForm.b3GirlsGreaterThan18
                        -0)}}"></td>
                        
                      <td><input readonly type="text" id="cGrandTotal" tabindex= -1
                        value="{{Number(jjbForm.aBoys7to11-0)+Number(jjbForm.aBoys12to15-0)+Number(jjbForm.aBoys16to18-0)+Number(jjbForm.aBoysGreaterThan18-0)+Number(jjbForm.aGirls7to11-0)+
						Number(jjbForm.aGirls12to15-0)+Number(jjbForm.aGirls16to18-0)+Number(jjbForm.aGirlsGreaterThan18-0)+
						Number(
                        jjbForm.b1Boys7to11-0)+Number(jjbForm.b2Boys7to11-0)+Number(jjbForm.b3Boys7to11-0)+Number(jjbForm.b1Boys12to15-0)+Number(
                        jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)+Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(
                        jjbForm.b3Boys16to18-0)+Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+Number(jjbForm.b3BoysGreaterThan18-0)+Number(
                        jjbForm.b1Girls7to11-0)+Number(jjbForm.b2Girls7to11-0)+Number(jjbForm.b3Girls7to11-0)+Number(jjbForm.b1Girls12to15-0)+Number(jjbForm.b2Girls12to15-0)+Number(
                        jjbForm.b3Girls12to15-0)+Number(jjbForm.b1Girls16to18-0)+Number(jjbForm.b2Girls16to18-0)+Number(jjbForm.b3Girls16to18-0)+Number(
                        jjbForm.b1GirlsGreaterThan18-0)+Number(jjbForm.b2GirlsGreaterThan18-0)+Number(jjbForm.b3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="b4sectionheading" id="caseD"></div>
              <div class="grey-header headMarg">D.&nbsp;CICL Granted Bail</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableD">
                  <thead>
                    <tr>
                      <th rowspan="2">Description</th>
                      <th rowspan="2">Total cases</th>
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

                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">D.1. No.
                            of CICL Granted Bail from the Cases Filed/Produced in the
                            Reporting Month </label>

                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted"
                        only-four-digit type="number" required id="d1TotalCases"
                        ng-model="jjbForm.d1TotalCases" ng-keyup="resetD1(jjbForm.d1TotalCases)"
                         ng-init="jjbForm.d1TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1Boys7to11"
                        ng-model="jjbForm.d1Boys7to11" 
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1Boys12to15"
                        ng-model="jjbForm.d1Boys12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1Boys16to18"
                        ng-model="jjbForm.d1Boys16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1BoysGreaterThan18"
                        ng-model="jjbForm.d1BoysGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        type="text" id="d1BoysTotal" readonly tabindex= -1
                        value="{{Number(jjbForm.d1Boys7to11-0)+Number(
                            jjbForm.d1Boys12to15-0)+Number(
                            jjbForm.d1Boys16to18-0)+Number(
                            jjbForm.d1BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1Girls7to11"
                        ng-model="jjbForm.d1Girls7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1Girls12to15"
                        ng-model="jjbForm.d1Girls12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" id="d1Girls16to18"
                        ng-model="jjbForm.d1Girls16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d1TotalCases" ng-model="jjbForm.d1GirlsGreaterThan18"
                        id="d1GirlsGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d1TotalCases<1)||(jjbForm.d1TotalCases==null)"
                        type="text" readonly tabindex= -1
                        value="{{Number(jjbForm.d1Girls7to11-0)+Number(
                              jjbForm.d1Girls12to15-0)+Number(
                              jjbForm.d1Girls16to18-0)+Number(
                              jjbForm.d1GirlsGreaterThan18-0)}}"
                        id="d1GirlsTotal" 
                        class="form-control inputBackground tableinputWidth readonlyStyle"></td>
                        
                      <td><input readonly type="text" id="d1GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.d1Boys7to11-0)+Number(
                              jjbForm.d1Boys12to15-0)+Number(
                              jjbForm.d1Boys16to18-0)+Number(
                              jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d1Girls7to11-0)+Number(
                              jjbForm.d1Girls12to15-0)+Number(
                              jjbForm.d1Girls16to18-0)+Number(
                              jjbForm.d1GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">D.2. No.
                            of CICL Granted Bail from Cases Filed in the (Old Cases)
                            Previous Months </label>

                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted"
                        only-four-digit type="number" required id="d2TotalCases"
                        ng-model="jjbForm.d2TotalCases" ng-keyup="resetD2(jjbForm.d2TotalCases)"
                         ng-init="jjbForm.d2TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2Boys7to11"
                        ng-model="jjbForm.d2Boys7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        <div id="d27" class="errorDisp"></div></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2Boys12to15"
                        ng-model="jjbForm.d2Boys12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2Boys16to18"
                        ng-model="jjbForm.d2Boys16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2BoysGreaterThan18"
                        ng-model="jjbForm.d2BoysGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)" tabindex= -1
                        type="text" id="d2BoysTotal" readonly
                        value="{{Number(jjbForm.d2Boys7to11-0)+Number(
                              jjbForm.d2Boys12to15-0)+Number(
                              jjbForm.d2Boys16to18-0)+Number(
                              jjbForm.d2BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2Girls7to11"
                        ng-model="jjbForm.d2Girls7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2Girls12to15"
                        ng-model="jjbForm.d2Girls12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" id="d2Girls16to18"
                        ng-model="jjbForm.d2Girls16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)"
                        only-four-digit type="number" ng-required="jjbForm.d2TotalCases" ng-model="jjbForm.d2GirlsGreaterThan18"
                        id="d2GirlsGreaterThan18" 
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.d2TotalCases<1)||(jjbForm.d2TotalCases==null)" tabindex= -1
                        type="text" readonly
                        value="{{Number(jjbForm.d2Girls7to11-0)+Number(
                              jjbForm.d2Girls12to15-0)+Number(
                              jjbForm.d2Girls16to18-0)+Number(
                              jjbForm.d2GirlsGreaterThan18-0)}}"
                        id="d2GirlsTotal"
                        class="form-control inputBackground tableinputWidth readonlyStyle"></td>
                        
                      <td><input readonly type="text" id="d2GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.d2Boys7to11-0)+Number(
                              jjbForm.d2Boys12to15-0)+Number(
                              jjbForm.d2Boys16to18-0)+Number(
                              jjbForm.d2BoysGreaterThan18-0)+Number(jjbForm.d2Girls7to11-0)+Number(
                              jjbForm.d2Girls12to15-0)+Number(
                              jjbForm.d2Girls16to18-0)+Number(
                              jjbForm.d2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">D. Total
                            no. of CICL Granted Bail in the Reporting Month</label>

                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dTotalCases" tabindex= -1
                        value="{{Number(jjbForm.d1TotalCases-0)+Number(jjbForm.d2TotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dBoys7to11" tabindex= -1
                        value="{{Number(jjbForm.d1Boys7to11-0)+Number(jjbForm.d2Boys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly 
                        type="text" id="dBoys12to15" tabindex= -1
                        value="{{Number(jjbForm.d1Boys12to15-0)+Number(jjbForm.d2Boys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dBoys16to18" tabindex= -1
                        value="{{Number(jjbForm.d1Boys16to18-0)+Number(jjbForm.d2Boys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dBoysGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d2BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dBoysTotal" tabindex= -1
                        value="{{Number(jjbForm.d1Boys7to11-0)+Number(jjbForm.d2Boys7to11-0)+Number(jjbForm.d1Boys12to15-0)+Number(jjbForm.d2Boys12to15-0)+Number(jjbForm.d1Boys16to18-0)+Number(jjbForm.d2Boys16to18-0)+Number(jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d2BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dGirls7to11" tabindex= -1
                        value="{{Number(jjbForm.d1Girls7to11-0)+Number(jjbForm.d2Girls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dGirls12to15" tabindex= -1
                        value="{{Number(jjbForm.d1Girls12to15-0)+Number(jjbForm.d2Girls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dGirls16to18" tabindex= -1
                        value="{{Number(jjbForm.d1Girls16to18-0)+Number(jjbForm.d2Girls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" readonly
                        type="text" id="dGirlsGreaterThan18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.d1GirlsGreaterThan18-0)+Number(jjbForm.d2GirlsGreaterThan18-0)}}"></td>
                        
                      <td><input ng-disabled="jjbForm.submitted"
                        readonly type="text" id="dGirlsTotal" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.d1Girls7to11-0)+Number(jjbForm.d2Girls7to11-0)+Number(jjbForm.d1Girls12to15-0)+Number(jjbForm.d2Girls12to15-0)+Number(jjbForm.d1Girls16to18-0)+Number(jjbForm.d2Girls16to18-0)+Number(jjbForm.d1GirlsGreaterThan18-0)+Number(jjbForm.d2GirlsGreaterThan18-0)}}"></td>
                        
                      <td><input readonly type="text" id="dGrandTotal" tabindex= -1
                        value="{{Number(jjbForm.d1Boys7to11-0)+Number(jjbForm.d2Boys7to11-0)+Number(jjbForm.d1Boys12to15-0)+Number(jjbForm.d2Boys12to15-0)+Number(jjbForm.d1Boys16to18-0)+Number(jjbForm.d2Boys16to18-0)+Number(jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d2BoysGreaterThan18-0)+Number(jjbForm.d1Girls7to11-0)+Number(jjbForm.d2Girls7to11-0)+Number(jjbForm.d1Girls12to15-0)+Number(jjbForm.d2Girls12to15-0)+Number(jjbForm.d1Girls16to18-0)+Number(jjbForm.d2Girls16to18-0)+Number(jjbForm.d1GirlsGreaterThan18-0)+Number(jjbForm.d2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="b4sectionheading" id="caseE"></div>
              <div class="grey-header headMarg">E. Type of Orders (No. of CICL released after disposal of case)</div>
              
              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableE">
                  <thead>
                    <tr>
                      <th rowspan="2">Type of Order and CICL involved</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label " for="textinput">E.1. CICL discharged to family</label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e1TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE1(jjbForm.e1TotalCases)"
                        ng-model="jjbForm.e1TotalCases"
                        ng-init="jjbForm.e1TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1Boys7to11"
                        ng-model="jjbForm.e1Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e1Boys7to11', '7-11')"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        ng-model="jjbForm.e1Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e1Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        ng-model="jjbForm.e1Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e1Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)" tabindex= -1
                        ng-model="jjbForm.e1BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e1BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                         
                      <td><input type="text" id="e1BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e1Boys7to11-0)+Number(
                            jjbForm.e1Boys12to15-0)+Number(jjbForm.e1Boys16to18-0)+Number(
                            jjbForm.e1BoysGreaterThan18-0)}}"
                        disabled
                        class="form-control inputBackground tableinputWidth">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        ng-model="jjbForm.e1Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e1Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        ng-model="jjbForm.e1Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e1Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                        <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        ng-model="jjbForm.e1Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e1Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e1TotalCases" id="e1GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e1GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e1GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e1TotalCases<1)||(jjbForm.e1TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e1GirlsTotal" disabled tabindex= -1
                        value="{{Number(jjbForm.e1Girls7to11-0)+Number(jjbForm.e1Girls12to15-0)+Number(
                            jjbForm.e1Girls16to18-0)+Number(jjbForm.e1GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                       </td>
                        
                      <td><input type="text" disabled
                        id="e1GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.e1Boys7to11-0)+Number(
                            jjbForm.e1Boys12to15-0)+Number(
                            jjbForm.e1Boys16to18-0)+Number(
                            jjbForm.e1BoysGreaterThan18-0)+Number(jjbForm.e1Girls7to11-0)+Number(
                            jjbForm.e1Girls12to15-0)+Number(
                            jjbForm.e1Girls16to18-0)+Number(
                            jjbForm.e1GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                      </td>

                    </tr>

                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E2. CICL allowed to go home after advice / admonition </label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e2TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE2(jjbForm.e2TotalCases)"
                        ng-model="jjbForm.e2TotalCases"
                        ng-init="jjbForm.e2TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e2Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e2Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e2Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e2BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input type="text" id="e2BoysTotal" disabled tabindex= -1
                        value="{{Number(jjbForm.e2Boys7to11-0)+Number(jjbForm.e2Boys12to15-0)+Number(
                            jjbForm.e2Boys16to18-0)+Number(jjbForm.e2BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e2Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e2Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        ng-model="jjbForm.e2Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e2Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e2TotalCases" id="e2GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e2GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e2GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e2TotalCases<1)||(jjbForm.e2TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e2GirlsTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e2Girls7to11-0)+Number(
                            jjbForm.e2Girls12to15-0)+Number(
                            jjbForm.e2Girls16to18-0)+Number(
                            jjbForm.e2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                       </td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="e2GrandTotal"
                        value="{{Number(jjbForm.e2Boys7to11-0)+Number(
                              jjbForm.e2Boys12to15-0)+Number(
                              jjbForm.e2Boys16to18-0)+Number(
                              jjbForm.e2BoysGreaterThan18-0)+Number(jjbForm.e2Girls7to11-0)+Number(
                              jjbForm.e2Girls12to15-0)+Number(
                              jjbForm.e2Girls16to18-0)+Number(
                              jjbForm.e2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.3. CICL
                            Directed to go for Group Counselling </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e3TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE3(jjbForm.e3TotalCases)"
                        ng-model="jjbForm.e3TotalCases"
                        ng-init="jjbForm.e3TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e3Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e3Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e3Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e3BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input type="text" id="e3BoysTotal"
                        disabled tabindex= -1
                        value="{{Number(jjbForm.e3Boys7to11-0)+Number(
                              jjbForm.e3Boys12to15-0)+Number(
                              jjbForm.e3Boys16to18-0)+Number(
                              jjbForm.e3BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e3Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e3Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        ng-model="jjbForm.e3Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e3Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e3TotalCases" id="e3GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e3GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e3GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e3TotalCases<1)||(jjbForm.e3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e3GirlsTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e3Girls7to11-0)+Number(
                            jjbForm.e3Girls12to15-0)+Number(
                            jjbForm.e3Girls16to18-0)+Number(
                            jjbForm.e3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input type="text" id="e3GrandTotal" readonly tabindex= -1
                        value="{{Number(jjbForm.e3Boys7to11-0)+Number(
                              jjbForm.e3Boys12to15-0)+Number(
                              jjbForm.e3Boys16to18-0)+Number(
                              jjbForm.e3BoysGreaterThan18-0)+Number(jjbForm.e3Girls7to11-0)+Number(
                              jjbForm.e3Girls12to15-0)+Number(
                              jjbForm.e3Girls16to18-0)+Number(
                              jjbForm.e3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.4.&nbsp;CICL
                            Directed to Perform Community Service </label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e4TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE4(jjbForm.e4TotalCases)"
                        ng-model="jjbForm.e4TotalCases"
                        ng-init="jjbForm.e4TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e4Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e4Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e4Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e4BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e4BoysTotal"
                        disabled tabindex= -1
                        value="{{Number(jjbForm.e4Boys7to11-0)+Number(
                            jjbForm.e4Boys12to15-0)+Number(
                            jjbForm.e4Boys16to18-0)+Number(
                            jjbForm.e4BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e4Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e4Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        ng-model="jjbForm.e4Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e4Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e4TotalCases" id="e4GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e4GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e4GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e4TotalCases<1)||(jjbForm.e4TotalCases<1)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e4GirlsTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e4Girls7to11-0)+Number(
                            jjbForm.e4Girls12to15-0)+Number(
                            jjbForm.e4Girls16to18-0)+Number(
                            jjbForm.e4GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="e4GrandTotal"
                        value="{{Number(jjbForm.e4Boys7to11-0)+Number(
                            jjbForm.e4Boys12to15-0)+Number(
                            jjbForm.e4Boys16to18-0)+Number(
                            jjbForm.e4BoysGreaterThan18-0)+Number(jjbForm.e4Girls7to11-0)+Number(
                            jjbForm.e4Girls12to15-0)+Number(
                            jjbForm.e4Girls16to18-0)+Number(
                            jjbForm.e4GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.5. CICL
                            Directed to Pay Fine </label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e5TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE5(jjbForm.e5TotalCases)"
                        ng-model="jjbForm.e5TotalCases"
                        ng-init="jjbForm.e5TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e5Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e5Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                         
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e5Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e5BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e5BoysTotal"
                        disabled tabindex= -1
                        value="{{Number(jjbForm.e5Boys7to11-0)+Number(
                            jjbForm.e5Boys12to15-0)+Number(
                            jjbForm.e5Boys16to18-0)+Number(
                            jjbForm.e5BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e5Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e5Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        ng-model="jjbForm.e5Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e5Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e5TotalCases" id="e5GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e5GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e5GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e5TotalCases<1)||(jjbForm.e5TotalCases<1)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input type="text" id="e5GirlsTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e5Girls7to11-0)+Number(
                            jjbForm.e5Girls12to15-0)+Number(
                            jjbForm.e5Girls16to18-0)+Number(
                            jjbForm.e5GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input readonly type="text"  tabindex= -1
                        id="e5GrandTotal"
                        value="{{Number(jjbForm.e5Boys7to11-0)+Number(
                            jjbForm.e5Boys12to15-0)+Number(
                            jjbForm.e5Boys16to18-0)+Number(
                            jjbForm.e5BoysGreaterThan18-0)+Number(jjbForm.e5Girls7to11-0)+Number(
                            jjbForm.e5Girls12to15-0)+Number(
                            jjbForm.e5Girls16to18-0)+Number(
                            jjbForm.e5GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=" textAlign">
                          <label class="control-label" for="textinput">E.6. CICL
                            Directed to be Released on Probation for Good Conduct </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e6TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE6(jjbForm.e6TotalCases)"
                        ng-model="jjbForm.e6TotalCases"
                        ng-init="jjbForm.e6TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                        <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e6Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e6Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e6Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e6BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e6BoysTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e6Boys7to11-0)+Number(
                            jjbForm.e6Boys12to15-0)+Number(
                            jjbForm.e6Boys16to18-0)+Number(
                            jjbForm.e6BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e6Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e6Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        ng-model="jjbForm.e6Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e6Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e6TotalCases" id="e6GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e6GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e6GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e6TotalCases<1)||(jjbForm.e6TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e6GirlsTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e6Girls7to11-0)+Number(
                            jjbForm.e6Girls12to15-0)+Number(
                            jjbForm.e6Girls16to18-0)+Number(
                            jjbForm.e6GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth"
                         
                        >
                       </td>
                        
                      <td><input readonly type="text" id="e6GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.e6Boys7to11-0)+Number(
                            jjbForm.e6Boys12to15-0)+Number(
                            jjbForm.e6Boys16to18-0)+Number(
                            jjbForm.e6BoysGreaterThan18-0)+Number(jjbForm.e6Girls7to11-0)+Number(
                            jjbForm.e6Girls12to15-0)+Number(
                            jjbForm.e6Girls16to18-0)+Number(
                            jjbForm.e6GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class=" textAlign">
                          <label class="control-label" for="textinput">E.7. Cases
                            Disposed of on the Basis of Compromise / Under Section 320
                            Cr.PC. </label>

                        </div>
                      </td>
                      <td><input type="number" required id="e7TotalCases" only-four-digit
                        ng-model="jjbForm.e7TotalCases" ng-keyup="resetE7(jjbForm.e7TotalCases)"
                        ng-init="jjbForm.e7TotalCases=null" ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7Boys7to11" only-four-digit
                        ng-keyup="calculateWithCBoys('cBoys7to11', 'e7Boys7to11', '7-11')"
                        ng-model="jjbForm.e7Boys7to11" ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7Boys12to15" only-four-digit
                        ng-keyup="calculateWithCBoys('cBoys12to15', 'e7Boys12to15', '12-15')"
                        ng-model="jjbForm.e7Boys12to15" ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                         
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7Boys16to18" only-four-digit
                        ng-keyup="calculateWithCBoys('cBoys16to18', 'e7Boys16to18', '16-18')"
                        ng-model="jjbForm.e7Boys16to18" ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7BoysGreaterThan18" only-four-digit
                        ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e7BoysGreaterThan18', '>18')"
                        ng-model="jjbForm.e7BoysGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                       <td><input type="text" id="e7BoysTotal" disabled tabindex= -1
                          value="{{Number(jjbForm.e7Boys7to11-0)+Number(
                            jjbForm.e7Boys12to15-0)+Number(
                            jjbForm.e7Boys16to18-0)+Number(
                            jjbForm.e7BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth ">
                        </td>
                        
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7Girls7to11"
                        ng-keyup="calculateWithCGirls('cGirls7to11', 'e7Girls7to11', '7-11')"
                        ng-model="jjbForm.e7Girls7to11" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7Girls12to15"
                        ng-keyup="calculateWithCGirls('cGirls12to15', 'e7Girls12to15', '12-15')"
                        ng-model="jjbForm.e7Girls12to15" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="number" ng-required="jjbForm.e7TotalCases" id="e7Girls16to18"
                        ng-keyup="calculateWithCGirls('cGirls16to18', 'e7Girls16to18', '16-18')"
                        ng-model="jjbForm.e7Girls16to18" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e7TotalCases" id="e7GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e7GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e7GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e7TotalCases<1)||(jjbForm.e7TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e7GirlsTotal" tabindex= -1
                        disabled
                        value="{{Number(jjbForm.e7Girls7to11-0)+Number(
                            jjbForm.e7Girls12to15-0)+Number(
                            jjbForm.e7Girls16to18-0)+Number(
                            jjbForm.e7GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth"
                        >
                        </td>
                      <td><input type="text" readonly tabindex= -1
                        id="e7GrandTotal"
                        value="{{Number(jjbForm.e7Boys7to11-0)+Number(
                            jjbForm.e7Boys12to15-0)+Number(
                            jjbForm.e7Boys16to18-0)+Number(
                            jjbForm.e7BoysGreaterThan18-0)+Number(jjbForm.e7Girls7to11-0)+Number(
                            jjbForm.e7Girls12to15-0)+Number(
                            jjbForm.e7Girls16to18-0)+Number(
                            jjbForm.e7GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.8. Cases
                            Disposed of on the Basis of 'Plead Guilty' </label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE8(jjbForm.e8TotalCases)"
                        ng-model="jjbForm.e8TotalCases"
                        ng-init="jjbForm.e8TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e8Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e8Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e8Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e8BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" disabled id="e8BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e8Boys7to11-0)+Number(
                            jjbForm.e8Boys12to15-0)+Number(
                            jjbForm.e8Boys16to18-0)+Number(
                            jjbForm.e8BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e8Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e8Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        ng-model="jjbForm.e8Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e8Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e8TotalCases" id="e8GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e8GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e8GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e8TotalCases<1)||(jjbForm.e8TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input type="text" id="e8GirlsTotal" disabled tabindex= -1
                        value="{{Number(jjbForm.e8Girls7to11-0)+Number(
                            jjbForm.e8Girls12to15-0)+Number(
                            jjbForm.e8Girls16to18-0)+Number(
                            jjbForm.e8GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                      <td><input readonly type="text"
                        id="e8GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.e8Boys7to11-0)+Number(
                            jjbForm.e8Boys12to15-0)+Number(
                            jjbForm.e8Boys16to18-0)+Number(
                            jjbForm.e8BoysGreaterThan18-0)+Number(jjbForm.e8Girls7to11-0)+Number(
                            jjbForm.e8Girls12to15-0)+Number(
                            jjbForm.e8Girls16to18-0)+Number(
                            jjbForm.e8GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.9. CICL
                            Transferred to CWC </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e9TotalCases"
                        ng-disabled="jjbForm.submitted"
                        ng-model="jjbForm.e9TotalCases" ng-keyup="resetE9(jjbForm.e9TotalCases)"
                        ng-init="jjbForm.e9TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e9Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e9Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e9Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e9BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" disabled id="e9BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e9Boys7to11-0)+Number(
                            jjbForm.e9Boys12to15-0)+Number(
                            jjbForm.e9Boys16to18-0)+Number(
                            jjbForm.e9BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e9Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e9Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        ng-model="jjbForm.e9Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e9Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e9TotalCases" id="e9GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e9GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e9GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e9TotalCases<1)||(jjbForm.e9TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text"
                        id="e9GirlsTotal" disabled tabindex= -1
                        class="form-control inputBackground tableinputWidth"
                        value="{{Number(jjbForm.e9Girls7to11-0)+Number(
                            jjbForm.e9Girls12to15-0)+Number(
                            jjbForm.e9Girls16to18-0)+Number(
                            jjbForm.e9GirlsGreaterThan18-0)}}"
                        >
                       </td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="e9GrandTotal"
                        value="{{Number(jjbForm.e9Boys7to11-0)+Number(
                            jjbForm.e9Boys12to15-0)+Number(
                            jjbForm.e9Boys16to18-0)+Number(
                            jjbForm.e9BoysGreaterThan18-0)+Number(jjbForm.e9Girls7to11-0)+Number(
                            jjbForm.e9Girls12to15-0)+Number(
                            jjbForm.e9Girls16to18-0)+Number(
                            jjbForm.e9GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.10 CICL
                            Sent to Special Home </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e10TotalCases"
                        ng-disabled="jjbForm.submitted"
                        ng-model="jjbForm.e10TotalCases" ng-keyup="resetE10(jjbForm.e10TotalCases)"
                        ng-init="jjbForm.e10TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                       </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e10Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e10Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e10Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e10BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" disabled id="e10BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e10Boys7to11-0)+Number(
                            jjbForm.e10Boys12to15-0)+Number(
                            jjbForm.e10Boys16to18-0)+Number(
                            jjbForm.e10BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e10Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e10Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        ng-model="jjbForm.e10Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e10Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e10TotalCases" id="e10GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e10GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e10GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e10TotalCases<1)||(jjbForm.e10TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e10GirlsTotal" disabled tabindex= -1
                        class="form-control inputBackground tableinputWidth"
                        value="{{Number(jjbForm.e10Girls7to11-0)+Number(
                            jjbForm.e10Girls12to15-0)+Number(
                            jjbForm.e10Girls16to18-0)+Number(
                            jjbForm.e10GirlsGreaterThan18-0)}}">
                        
                        </td> 
                      <td><input readonly type="text" tabindex= -1
                        id="e10GrandTotal"
                        value="{{Number(jjbForm.e10Boys7to11-0)+Number(
                            jjbForm.e10Boys12to15-0)+Number(
                            jjbForm.e10Boys16to18-0)+Number(
                            jjbForm.e10BoysGreaterThan18-0)+Number(jjbForm.e10Girls7to11-0)+Number(
                            jjbForm.e10Girls12to15-0)+Number(
                            jjbForm.e10Girls16to18-0)+Number(
                            jjbForm.e10GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.11.&nbsp;Cases
                            Transferred to other Board/Court and CICL Involved </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e11TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE11(jjbForm.e11TotalCases)"
                        ng-model="jjbForm.e11TotalCases"
                        ng-init="jjbForm.e11TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e11Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e11Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e11Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e11BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" disabled id="e11BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e11Boys7to11-0)+Number(
                            jjbForm.e11Boys12to15-0)+Number(
                            jjbForm.e11Boys16to18-0)+Number(
                            jjbForm.e11BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e11Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e11Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        ng-model="jjbForm.e11Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e11Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e11TotalCases" id="e11GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e11GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e11GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e11TotalCases<1)||(jjbForm.e11TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text"
                        id="e11GirlsTotal" disabled tabindex= -1
                        class="form-control inputBackground tableinputWidth"
                        value="{{Number(jjbForm.e11Girls7to11-0)+Number(
                            jjbForm.e11Girls12to15-0)+Number(
                            jjbForm.e11Girls16to18-0)+Number(
                            jjbForm.e11GirlsGreaterThan18-0)}}">
                        </td>
                      <td><input readonly type="text" tabindex= -1
                        id="e11GrandTotal"
                        value="{{Number(jjbForm.e11Boys7to11-0)+Number(
                            jjbForm.e11Boys12to15-0)+Number(
                            jjbForm.e11Boys16to18-0)+Number(
                            jjbForm.e11BoysGreaterThan18-0)+Number(jjbForm.e11Girls7to11-0)+Number(
                            jjbForm.e11Girls12to15-0)+Number(
                            jjbForm.e11Girls16to18-0)+Number(
                            jjbForm.e11GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.12. Cases
                            Transferred to Children's Court and CICL Involved </label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e12TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE12(jjbForm.e12TotalCases)"
                        ng-model="jjbForm.e12TotalCases"
                        ng-init="jjbForm.e12TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e12Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e12Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e12Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e12BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" disabled id="e12BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e12Boys7to11-0)+Number(
                            jjbForm.e12Boys12to15-0)+Number(
                            jjbForm.e12Boys16to18-0)+Number(
                            jjbForm.e12BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e12Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e12Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        ng-model="jjbForm.e12Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e12Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e12TotalCases" id="e12GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e12GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e12GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e12TotalCases<1)||(jjbForm.e12TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text"
                        id="e12GirlsTotal" disabled tabindex= -1
                        class="form-control inputBackground tableinputWidth"
                        value="{{Number(jjbForm.e12Girls7to11-0)+Number(
                            jjbForm.e12Girls12to15-0)+Number(
                            jjbForm.e12Girls16to18-0)+Number(
                            jjbForm.e12GirlsGreaterThan18-0)}}">
                        </td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="e12GrandTotal"
                        value="{{Number(jjbForm.e12Boys7to11-0)+Number(
                            jjbForm.e12Boys12to15-0)+Number(
                            jjbForm.e12Boys16to18-0)+Number(
                            jjbForm.e12BoysGreaterThan18-0)+Number(jjbForm.e12Girls7to11-0)+Number(
                            jjbForm.e12Girls12to15-0)+Number(
                            jjbForm.e12Girls16to18-0)+Number(
                            jjbForm.e12GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">E.13. Other
                            Orders Passed by JJB </label>
                        </div>
                      </td>
                      <td><input only-four-digit type="number" required id="e13TotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetE13(jjbForm.e13TotalCases)"
                        ng-model="jjbForm.e13TotalCases"
                        ng-init="jjbForm.e13TotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13Boys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13Boys7to11" ng-keyup="calculateWithCBoys('cBoys7to11', 'e13Boys7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13Boys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13Boys12to15" ng-keyup="calculateWithCBoys('cBoys12to15', 'e13Boys12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13Boys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13Boys16to18" ng-keyup="calculateWithCBoys('cBoys16to18', 'e13Boys16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13BoysGreaterThan18" ng-keyup="calculateWithCBoys('cBoysGreaterThan18', 'e13BoysGreaterThan18', '>18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" disabled id="e13BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.e13Boys7to11-0)+Number(
                            jjbForm.e13Boys12to15-0)+Number(
                            jjbForm.e13Boys16to18-0)+Number(
                            jjbForm.e13BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13Girls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13Girls7to11" ng-keyup="calculateWithCGirls('cGirls7to11', 'e13Girls7to11', '7-11')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13Girls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13Girls12to15" ng-keyup="calculateWithCGirls('cGirls12to15', 'e13Girls12to15', '12-15')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13Girls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        ng-model="jjbForm.e13Girls16to18" ng-keyup="calculateWithCGirls('cGirls16to18', 'e13Girls16to18', '16-18')"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input only-four-digit type="number" ng-required="jjbForm.e13TotalCases" id="e13GirlsGreaterThan18"
                        ng-keyup="calculateWithCGirls('cGirlsGreaterThan18', 'e13GirlsGreaterThan18', '>18')"
                        ng-model="jjbForm.e13GirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.e13TotalCases<1)||(jjbForm.e13TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                        </td>
                        
                      <td><input type="text" id="e13GirlsTotal" disabled tabindex= -1
                        class="form-control inputBackground tableinputWidth"
                        value="{{Number(jjbForm.e13Girls7to11-0)+Number(
                            jjbForm.e13Girls12to15-0)+Number(
                            jjbForm.e13Girls16to18-0)+Number(
                            jjbForm.e13GirlsGreaterThan18-0)}}">
                        </td>
                      <td><input readonly type="text" tabindex= -1
                        id="e13GrandTotal"
                        value="{{Number(jjbForm.e13Boys7to11-0)+Number(
                            jjbForm.e13Boys12to15-0)+Number(
                            jjbForm.e13Boys16to18-0)+Number(
                            jjbForm.e13BoysGreaterThan18-0)+Number(jjbForm.e13Girls7to11-0)+Number(
                            jjbForm.e13Girls12to15-0)+Number(
                            jjbForm.e13Girls16to18-0)+Number(
                            jjbForm.e13GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">E. Total
                            no. of Cases Disposed and the no. of CICL involved</label>

                        </div>
                      </td>
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eTotalCases" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1TotalCases-0)+Number(jjbForm.e2TotalCases-0)+Number(jjbForm.e3TotalCases-0)+Number(
                            jjbForm.e4TotalCases-0)+Number(jjbForm.e5TotalCases-0)+Number(jjbForm.e6TotalCases-0)+Number(
                            jjbForm.e7TotalCases-0)+Number(jjbForm.e8TotalCases-0)+Number(jjbForm.e9TotalCases-0)+Number(
                            jjbForm.e10TotalCases-0)+Number(jjbForm.e11TotalCases-0)+Number(jjbForm.e12TotalCases-0)+Number(jjbForm.e13TotalCases-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eBoys7to11" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Boys7to11-0)+Number(jjbForm.e2Boys7to11-0)+Number(jjbForm.e3Boys7to11-0)+Number(
                          jjbForm.e4Boys7to11-0)+Number(jjbForm.e5Boys7to11-0)+Number(jjbForm.e6Boys7to11-0)+Number(
                          jjbForm.e7Boys7to11-0)+Number(jjbForm.e8Boys7to11-0)+Number(jjbForm.e9Boys7to11-0)+Number(
                          jjbForm.e10Boys7to11-0)+Number(jjbForm.e11Boys7to11-0)+Number(jjbForm.e12Boys7to11-0)+Number(jjbForm.e13Boys7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eBoys12to15" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Boys12to15-0)+Number(jjbForm.e2Boys12to15-0)+Number(jjbForm.e3Boys12to15-0)+Number(jjbForm.e4Boys12to15-0)+Number(
                        jjbForm.e5Boys12to15-0)+Number(jjbForm.e6Boys12to15-0)+Number(jjbForm.e7Boys12to15-0)+Number(jjbForm.e8Boys12to15-0)+Number(
                        jjbForm.e9Boys12to15-0)+Number(jjbForm.e10Boys12to15-0)+Number(jjbForm.e11Boys12to15-0)+Number(jjbForm.e12Boys12to15-0)+Number(jjbForm.e13Boys12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eBoys16to18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Boys16to18-0)+Number(jjbForm.e2Boys16to18-0)+Number(jjbForm.e3Boys16to18-0)+Number(
                        jjbForm.e4Boys16to18-0)+Number(jjbForm.e5Boys16to18-0)+Number(jjbForm.e6Boys16to18-0)+Number(
                        jjbForm.e7Boys16to18-0)+Number(jjbForm.e8Boys16to18-0)+Number(jjbForm.e9Boys16to18-0)+Number(
                        jjbForm.e10Boys16to18-0)+Number(jjbForm.e11Boys16to18-0)+Number(jjbForm.e12Boys16to18-0)+Number(jjbForm.e13Boys16to18-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eBoysGreaterThan18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1BoysGreaterThan18-0)+Number(jjbForm.e2BoysGreaterThan18-0)+Number(
                            jjbForm.e3BoysGreaterThan18-0)+Number(jjbForm.e4BoysGreaterThan18-0)+Number(
                            jjbForm.e5BoysGreaterThan18-0)+Number(jjbForm.e6BoysGreaterThan18-0)+Number(
                            jjbForm.e7BoysGreaterThan18-0)+Number(jjbForm.e8BoysGreaterThan18-0)+Number(
                            jjbForm.e9BoysGreaterThan18-0)+Number(jjbForm.e10BoysGreaterThan18-0)+Number(
                            jjbForm.e11BoysGreaterThan18-0)+Number(jjbForm.e12BoysGreaterThan18-0)+Number(
                            jjbForm.e13BoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eBoysTotal" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Boys7to11-0)+Number(jjbForm.e2Boys7to11-0)+Number(
                            jjbForm.e3Boys7to11-0)+Number(jjbForm.e4Boys7to11-0)+Number(
                            jjbForm.e5Boys7to11-0)+Number(jjbForm.e6Boys7to11-0)+Number(
                            jjbForm.e7Boys7to11-0)+Number(jjbForm.e8Boys7to11-0)+Number(
                            jjbForm.e9Boys7to11-0)+Number(jjbForm.e10Boys7to11-0)+Number(
                            jjbForm.e11Boys7to11-0)+Number(jjbForm.e12Boys7to11-0)+Number(
                            jjbForm.e13Boys7to11-0)+Number(jjbForm.e1Boys12to15-0)+Number(
                            jjbForm.e2Boys12to15-0)+Number(jjbForm.e3Boys12to15-0)+Number(
                            jjbForm.e4Boys12to15-0)+Number(jjbForm.e5Boys12to15-0)+Number(
                            jjbForm.e6Boys12to15-0)+Number(jjbForm.e7Boys12to15-0)+Number(
                            jjbForm.e8Boys12to15-0)+Number(jjbForm.e9Boys12to15-0)+Number(
                            jjbForm.e10Boys12to15-0)+Number(jjbForm.e11Boys12to15-0)+Number(
                            jjbForm.e12Boys12to15-0)+Number(jjbForm.e13Boys12to15-0)+Number(
                            jjbForm.e1Boys16to18-0)+Number(jjbForm.e2Boys16to18-0)+Number(
                            jjbForm.e3Boys16to18-0)+Number(jjbForm.e4Boys16to18-0)+Number(
                            jjbForm.e5Boys16to18-0)+Number(jjbForm.e6Boys16to18-0)+Number(
                            jjbForm.e7Boys16to18-0)+Number(jjbForm.e8Boys16to18-0)+Number(
                            jjbForm.e9Boys16to18-0)+Number(jjbForm.e10Boys16to18-0)+Number(
                            jjbForm.e11Boys16to18-0)+Number(jjbForm.e12Boys16to18-0)+Number(
                            jjbForm.e13Boys16to18-0)+Number(jjbForm.e1BoysGreaterThan18-0)+Number(
                            jjbForm.e2BoysGreaterThan18-0)+Number(jjbForm.e3BoysGreaterThan18-0)+Number(
                            jjbForm.e4BoysGreaterThan18-0)+Number(jjbForm.e5BoysGreaterThan18-0)+Number(
                            jjbForm.e6BoysGreaterThan18-0)+Number(jjbForm.e7BoysGreaterThan18-0)+Number(
                            jjbForm.e8BoysGreaterThan18-0)+Number(jjbForm.e9BoysGreaterThan18-0)+Number(
                            jjbForm.e10BoysGreaterThan18-0)+Number(jjbForm.e11BoysGreaterThan18-0)+Number(
                            jjbForm.e12BoysGreaterThan18-0)+Number(jjbForm.e13BoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eGirls7to11" tabindex= -1 
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Girls7to11-0)+Number(jjbForm.e2Girls7to11-0)+Number(
                            jjbForm.e3Girls7to11-0)+Number(jjbForm.e4Girls7to11-0)+Number(
                            jjbForm.e5Girls7to11-0)+Number(jjbForm.e6Girls7to11-0)+Number(
                            jjbForm.e7Girls7to11-0)+Number(jjbForm.e8Girls7to11-0)+Number(
                            jjbForm.e9Girls7to11-0)+Number(jjbForm.e10Girls7to11-0)+Number(
                            jjbForm.e11Girls7to11-0)+Number(jjbForm.e12Girls7to11-0)+Number(
                            jjbForm.e13Girls7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eGirls12to15" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Girls12to15-0)+Number(jjbForm.e2Girls12to15-0)+Number(
                            jjbForm.e3Girls12to15-0)+Number(jjbForm.e4Girls12to15-0)+Number(
                            jjbForm.e5Girls12to15-0)+Number(jjbForm.e6Girls12to15-0)+Number(
                            jjbForm.e7Girls12to15-0)+Number(jjbForm.e8Girls12to15-0)+Number(
                            jjbForm.e9Girls12to15-0)+Number(jjbForm.e10Girls12to15-0)+Number(
                            jjbForm.e11Girls12to15-0)+Number(jjbForm.e12Girls12to15-0)+Number(
                            jjbForm.e13Girls12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        ng-disabled="jjbForm.submitted" id="eGirls16to18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Girls16to18-0)+Number(jjbForm.e2Girls16to18-0)+Number(
                            jjbForm.e3Girls16to18-0)+Number(jjbForm.e4Girls16to18-0)+Number(
                            jjbForm.e5Girls16to18-0)+Number(jjbForm.e6Girls16to18-0)+Number(
                            jjbForm.e7Girls16to18-0)+Number(jjbForm.e8Girls16to18-0)+Number(
                            jjbForm.e9Girls16to18-0)+Number(jjbForm.e10Girls16to18-0)+Number(
                            jjbForm.e11Girls16to18-0)+Number(jjbForm.e12Girls16to18-0)+Number(
                            jjbForm.e13Girls16to18-0)}}">
                      </td>
                      
                      
                      <td><input readonly type="text" id="eGirlsGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1GirlsGreaterThan18-0)+Number(jjbForm.e2GirlsGreaterThan18-0)+Number(
                            jjbForm.e3GirlsGreaterThan18-0)+Number(jjbForm.e4GirlsGreaterThan18-0)+Number(
                            jjbForm.e5GirlsGreaterThan18-0)+Number(jjbForm.e6GirlsGreaterThan18-0)+Number(
                            jjbForm.e7GirlsGreaterThan18-0)+Number(jjbForm.e8GirlsGreaterThan18-0)+Number(
                            jjbForm.e9GirlsGreaterThan18-0)+Number(jjbForm.e10GirlsGreaterThan18-0)+Number(
                            jjbForm.e11GirlsGreaterThan18-0)+Number(jjbForm.e12GirlsGreaterThan18-0)+Number(
                            jjbForm.e13GirlsGreaterThan18-0)}}">
                      </td>
                      <td><input readonly type="text" id="eGirlsTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.e1Girls7to11-0)+Number(jjbForm.e2Girls7to11-0)+Number(
                            jjbForm.e3Girls7to11-0)+Number(jjbForm.e4Girls7to11-0)+Number(
                            jjbForm.e5Girls7to11-0)+Number(jjbForm.e6Girls7to11-0)+Number(
                            jjbForm.e7Girls7to11-0)+Number(jjbForm.e8Girls7to11-0)+Number(
                            jjbForm.e9Girls7to11-0)+Number(jjbForm.e10Girls7to11-0)+Number(
                            jjbForm.e11Girls7to11-0)+Number(jjbForm.e12Girls7to11-0)+Number(
                            jjbForm.e13Girls7to11-0)+Number(jjbForm.e1Girls12to15-0)+Number(
                            jjbForm.e2Girls12to15-0)+Number(jjbForm.e3Girls12to15-0)+Number(
                            jjbForm.e4Girls12to15-0)+Number(jjbForm.e5Girls12to15-0)+Number(
                            jjbForm.e6Girls12to15-0)+Number(jjbForm.e7Girls12to15-0)+Number(
                            jjbForm.e8Girls12to15-0)+Number(jjbForm.e9Girls12to15-0)+Number(
                            jjbForm.e10Girls12to15-0)+Number(jjbForm.e11Girls12to15-0)+Number(
                            jjbForm.e12Girls12to15-0)+Number(jjbForm.e13Girls12to15-0)+Number(
                            jjbForm.e1Girls16to18-0)+Number(jjbForm.e2Girls16to18-0)+Number(
                            jjbForm.e3Girls16to18-0)+Number(jjbForm.e4Girls16to18-0)+Number(
                            jjbForm.e5Girls16to18-0)+Number(jjbForm.e6Girls16to18-0)+Number(
                            jjbForm.e7Girls16to18-0)+Number(jjbForm.e8Girls16to18-0)+Number(
                            jjbForm.e9Girls16to18-0)+Number(jjbForm.e10Girls16to18-0)+Number(
                            jjbForm.e11Girls16to18-0)+Number(jjbForm.e12Girls16to18-0)+Number(
                            jjbForm.e13Girls16to18-0)+Number(jjbForm.e1GirlsGreaterThan18-0)+Number(
                            jjbForm.e2GirlsGreaterThan18-0)+Number(jjbForm.e3GirlsGreaterThan18-0)+Number(
                            jjbForm.e4GirlsGreaterThan18-0)+Number(jjbForm.e5GirlsGreaterThan18-0)+Number(
                            jjbForm.e6GirlsGreaterThan18-0)+Number(jjbForm.e7GirlsGreaterThan18-0)+Number(
                            jjbForm.e8GirlsGreaterThan18-0)+Number(jjbForm.e9GirlsGreaterThan18-0)+Number(
                            jjbForm.e10GirlsGreaterThan18-0)+Number(jjbForm.e11GirlsGreaterThan18-0)+Number(
                            jjbForm.e12GirlsGreaterThan18-0)+Number(jjbForm.e13GirlsGreaterThan18-0)}}">
                      </td>
                      <td><input readonly type="text" id="eGrandTotal" tabindex= -1
                        value="{{Number(jjbForm.e1Boys7to11-0)+Number(jjbForm.e2Boys7to11-0)+Number(jjbForm.e3Boys7to11-0)+Number(
                            jjbForm.e4Boys7to11-0)+Number(jjbForm.e5Boys7to11-0)+Number(jjbForm.e6Boys7to11-0)+Number(
                            jjbForm.e7Boys7to11-0)+Number(jjbForm.e8Boys7to11-0)+Number(jjbForm.e9Boys7to11-0)+Number(
                            jjbForm.e10Boys7to11-0)+Number(jjbForm.e11Boys7to11-0)+Number(jjbForm.e12Boys7to11-0)+Number(
                            jjbForm.e13Boys7to11-0)+Number(jjbForm.e1Boys12to15-0)+Number(jjbForm.e2Boys12to15-0)+Number(
                            jjbForm.e3Boys12to15-0)+Number(jjbForm.e4Boys12to15-0)+Number(jjbForm.e5Boys12to15-0)+Number(
                            jjbForm.e6Boys12to15-0)+Number(jjbForm.e7Boys12to15-0)+Number(jjbForm.e8Boys12to15-0)+Number(
                            jjbForm.e9Boys12to15-0)+Number(jjbForm.e10Boys12to15-0)+Number(jjbForm.e11Boys12to15-0)+Number(
                            jjbForm.e12Boys12to15-0)+Number(jjbForm.e13Boys12to15-0)+Number(jjbForm.e1Boys16to18-0)+Number(
                            jjbForm.e2Boys16to18-0)+Number(jjbForm.e3Boys16to18-0)+Number(jjbForm.e4Boys16to18-0)+Number(
                            jjbForm.e5Boys16to18-0)+Number(jjbForm.e6Boys16to18-0)+Number(jjbForm.e7Boys16to18-0)+Number(
                            jjbForm.e8Boys16to18-0)+Number(jjbForm.e9Boys16to18-0)+Number(jjbForm.e10Boys16to18-0)+Number(
                            jjbForm.e11Boys16to18-0)+Number(jjbForm.e12Boys16to18-0)+Number(jjbForm.e13Boys16to18-0)+Number(
                            jjbForm.e1BoysGreaterThan18-0)+Number(jjbForm.e2BoysGreaterThan18-0)+Number(jjbForm.e3BoysGreaterThan18-0)+Number(
                            jjbForm.e4BoysGreaterThan18-0)+Number(jjbForm.e5BoysGreaterThan18-0)+Number(jjbForm.e6BoysGreaterThan18-0)+Number(
                            jjbForm.e7BoysGreaterThan18-0)+Number(jjbForm.e8BoysGreaterThan18-0)+Number(jjbForm.e9BoysGreaterThan18-0)+Number(
                            jjbForm.e10BoysGreaterThan18-0)+Number(jjbForm.e11BoysGreaterThan18-0)+Number(jjbForm.e12BoysGreaterThan18-0)+Number(
                            jjbForm.e13BoysGreaterThan18-0)+Number(jjbForm.e1Girls7to11-0)+Number(jjbForm.e2Girls7to11-0)+Number(
                            jjbForm.e3Girls7to11-0)+Number(jjbForm.e4Girls7to11-0)+Number(jjbForm.e5Girls7to11-0)+Number(
                            jjbForm.e6Girls7to11-0)+Number(jjbForm.e7Girls7to11-0)+Number(jjbForm.e8Girls7to11-0)+Number(
                            jjbForm.e9Girls7to11-0)+Number(jjbForm.e10Girls7to11-0)+Number(jjbForm.e11Girls7to11-0)+Number(
                            jjbForm.e12Girls7to11-0)+Number(jjbForm.e13Girls7to11-0)+Number(jjbForm.e1Girls12to15-0)+Number(
                            jjbForm.e2Girls12to15-0)+Number(jjbForm.e3Girls12to15-0)+Number(jjbForm.e4Girls12to15-0)+Number(
                            jjbForm.e5Girls12to15-0)+Number(jjbForm.e6Girls12to15-0)+Number(jjbForm.e7Girls12to15-0)+Number(
                            jjbForm.e8Girls12to15-0)+Number(jjbForm.e9Girls12to15-0)+Number(jjbForm.e10Girls12to15-0)+Number(
                            jjbForm.e11Girls12to15-0)+Number(jjbForm.e12Girls12to15-0)+Number(jjbForm.e13Girls12to15-0)+Number(
                            jjbForm.e1Girls16to18-0)+Number(jjbForm.e2Girls16to18-0)+Number(jjbForm.e3Girls16to18-0)+Number(
                            jjbForm.e4Girls16to18-0)+Number(jjbForm.e5Girls16to18-0)+Number(jjbForm.e6Girls16to18-0)+Number(
                            jjbForm.e7Girls16to18-0)+Number(jjbForm.e8Girls16to18-0)+Number(jjbForm.e9Girls16to18-0)+Number(
                            jjbForm.e10Girls16to18-0)+Number(jjbForm.e11Girls16to18-0)+Number(jjbForm.e12Girls16to18-0)+Number(
                            jjbForm.e13Girls16to18-0)+Number(jjbForm.e1GirlsGreaterThan18-0)+Number(jjbForm.e2GirlsGreaterThan18-0)+Number(
                            jjbForm.e3GirlsGreaterThan18-0)+Number(jjbForm.e4GirlsGreaterThan18-0)+Number(jjbForm.e5GirlsGreaterThan18-0)+Number(
                            jjbForm.e6GirlsGreaterThan18-0)+Number(jjbForm.e7GirlsGreaterThan18-0)+Number(jjbForm.e8GirlsGreaterThan18-0)+Number(
                            jjbForm.e9GirlsGreaterThan18-0)+Number(jjbForm.e10GirlsGreaterThan18-0)+Number(jjbForm.e11GirlsGreaterThan18-0)+Number(
                            jjbForm.e12GirlsGreaterThan18-0)+Number(jjbForm.e13GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              

              <div class="b4sectionheading" id="caseF"></div>
              <div class="grey-header headMarg">F. Cases on the Last Day of
                the Month and the CICL Involved</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableF">
                  <thead>
                    <tr>
                      <th rowspan="2">Description</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">F.1. Total
                            no. of Cases on the Last Day of the Reporting Month and
                            the CICL Involved</label>

                        </div>
                      </td>
                      <td><input type="text" disabled id="f1TotalCases" tabindex= -1
                        class="form-control inputBackground tableinputWidth totalFont"
                        value="{{	Number(Number(jjbForm.aTotalCases-0)+
                                        Number(jjbForm.b1TotalCases-0)+
                                        Number(jjbForm.b2TotalCases-0)+
                                        Number(jjbForm.b3TotalCases-0)-0)
                                        -
                                 Number(Number(jjbForm.e1TotalCases-0)+
                                        Number(jjbForm.e2TotalCases-0)+
                                        Number(jjbForm.e3TotalCases-0)+
                                        Number(jjbForm.e4TotalCases-0)+
                                        Number(jjbForm.e5TotalCases-0)+
                                        Number(jjbForm.e6TotalCases-0)+
                                        Number(jjbForm.e7TotalCases-0)+
                                        Number(jjbForm.e8TotalCases-0)+
                                        Number(jjbForm.e9TotalCases-0)+
                                        Number(jjbForm.e10TotalCases-0)+
                                        Number(jjbForm.e11TotalCases-0)+
                                        Number(jjbForm.e12TotalCases-0)+
                                        Number(jjbForm.e13TotalCases-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f1Boys7to11"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(Number(jjbForm.aBoys7to11-0)+
                                        Number(jjbForm.b1Boys7to11-0)+
                                        Number(jjbForm.b2Boys7to11-0)+
                                        Number(jjbForm.b3Boys7to11-0)-0)
                            -
                                 Number(Number(jjbForm.e1Boys7to11-0)+
                                        Number(jjbForm.e2Boys7to11-0)+
                                        Number(jjbForm.e3Boys7to11-0)+
                                        Number(jjbForm.e4Boys7to11-0)+
                                        Number(jjbForm.e5Boys7to11-0)+
                                        Number(jjbForm.e6Boys7to11-0)+
                                        Number(jjbForm.e7Boys7to11-0)+
                                        Number(jjbForm.e8Boys7to11-0)+
                                        Number(jjbForm.e9Boys7to11-0)+
                                        Number(jjbForm.e10Boys7to11-0)+
                                        Number(jjbForm.e11Boys7to11-0)+
                                        Number(jjbForm.e12Boys7to11-0)+
                                        Number(jjbForm.e13Boys7to11-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f1Boys12to15"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(Number(jjbForm.aBoys12to15-0)+Number(jjbForm.b1Boys12to15-0)+Number(jjbForm.b2Boys12to15-0)+Number(jjbForm.b3Boys12to15-0)-0)
                            -
                            Number(Number(jjbForm.e1Boys12to15-0)+Number(jjbForm.e2Boys12to15-0)+Number(jjbForm.e3Boys12to15-0)+Number(jjbForm.e4Boys12to15-0)+
                            Number(jjbForm.e5Boys12to15-0)+Number(jjbForm.e6Boys12to15-0)+Number(jjbForm.e7Boys12to15-0)+Number(jjbForm.e8Boys12to15-0)+
                            Number(jjbForm.e9Boys12to15-0)+Number(jjbForm.e10Boys12to15-0)+Number(jjbForm.e11Boys12to15-0)+Number(jjbForm.e12Boys12to15-0)+
                            Number(jjbForm.e13Boys12to15-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f1Boys16to18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(Number(jjbForm.aBoys16to18-0)+Number(jjbForm.b1Boys16to18-0)+Number(jjbForm.b2Boys16to18-0)+Number(jjbForm.b3Boys16to18-0)-0)
                            -Number(
                            Number(jjbForm.e1Boys16to18-0)+Number(jjbForm.e2Boys16to18-0)+Number(jjbForm.e3Boys16to18-0)+Number(jjbForm.e4Boys16to18-0)+Number(jjbForm.e5Boys16to18-0)+
                            Number(jjbForm.e6Boys16to18-0)+Number(jjbForm.e7Boys16to18-0)+Number(jjbForm.e8Boys16to18-0)+Number(jjbForm.e9Boys16to18-0)+Number(jjbForm.e10Boys16to18-0)+
                            Number(jjbForm.e11Boys16to18-0)+Number(jjbForm.e12Boys16to18-0)+Number(jjbForm.e13Boys16to18-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f1BoysGreaterThan18"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(Number(jjbForm.aBoysGreaterThan18-0)+Number(jjbForm.b1BoysGreaterThan18-0)+Number(jjbForm.b2BoysGreaterThan18-0)+
                                Number(jjbForm.b3BoysGreaterThan18-0)-0)
                            -
                            Number(
                            Number(jjbForm.e1BoysGreaterThan18-0)+
                            Number(jjbForm.e2BoysGreaterThan18-0)+
                            Number(jjbForm.e3BoysGreaterThan18-0)+
                            Number(jjbForm.e4BoysGreaterThan18-0)+
                            Number(jjbForm.e5BoysGreaterThan18-0)+
                            Number(jjbForm.e6BoysGreaterThan18-0)+
                            Number(jjbForm.e7BoysGreaterThan18-0)+
                            Number(jjbForm.e8BoysGreaterThan18-0)+
                            Number(jjbForm.e9BoysGreaterThan18-0)+
                            Number(jjbForm.e10BoysGreaterThan18-0)+
                            Number(jjbForm.e11BoysGreaterThan18-0)+
                            Number(jjbForm.e12BoysGreaterThan18-0)+
                            Number(jjbForm.e13BoysGreaterThan18-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f1BoysTotal"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(
                                Number(jjbForm.aBoys7to11-0)+
								Number(jjbForm.aBoys12to15-0)+
								Number(jjbForm.aBoys16to18-0)+
								Number(jjbForm.aBoysGreaterThan18-0)+
                                Number(jjbForm.b1Boys7to11-0)+
                                Number(jjbForm.b2Boys7to11-0)+
                                Number(jjbForm.b3Boys7to11-0)+
                                Number(jjbForm.b1Boys12to15-0)+
                                Number(jjbForm.b2Boys12to15-0)+
                                Number(jjbForm.b3Boys12to15-0)+
                                Number(jjbForm.b1Boys16to18-0)+
                                Number(jjbForm.b2Boys16to18-0)+
                                Number(jjbForm.b3Boys16to18-0)+
                                Number(jjbForm.b1BoysGreaterThan18-0)+
                                Number(jjbForm.b2BoysGreaterThan18-0)+
                                Number(jjbForm.b3BoysGreaterThan18-0)-0)

                            -Number(
                              Number(jjbForm.e1Boys7to11-0)+
                              Number(jjbForm.e2Boys7to11-0)+
                              Number(jjbForm.e3Boys7to11-0)+
                              Number(jjbForm.e4Boys7to11-0)+
                              Number(jjbForm.e5Boys7to11-0)+
                              Number(jjbForm.e6Boys7to11-0)+
                              Number(jjbForm.e7Boys7to11-0)+
                              Number(jjbForm.e8Boys7to11-0)+
                              Number(jjbForm.e9Boys7to11-0)+
                              Number(jjbForm.e10Boys7to11-0)+
                              Number(jjbForm.e11Boys7to11-0)+
                              Number(jjbForm.e12Boys7to11-0)+
                              Number(jjbForm.e13Boys7to11-0)+

                              Number(jjbForm.e1Boys12to15-0)+
                              Number(jjbForm.e2Boys12to15-0)+
                              Number(jjbForm.e3Boys12to15-0)+
                              Number(jjbForm.e4Boys12to15-0)+
                              Number(jjbForm.e5Boys12to15-0)+
                              Number(jjbForm.e6Boys12to15-0)+
                              Number(jjbForm.e7Boys12to15-0)+
                              Number(jjbForm.e8Boys12to15-0)+
                              Number(jjbForm.e9Boys12to15-0)+
                              Number(jjbForm.e10Boys12to15-0)+
                              Number(jjbForm.e11Boys12to15-0)+
                              Number(jjbForm.e12Boys12to15-0)+
                              Number(jjbForm.e13Boys12to15-0)+

                              Number(jjbForm.e1Boys16to18-0)+
                              Number(jjbForm.e2Boys16to18-0)+
                              Number(jjbForm.e3Boys16to18-0)+
                              Number(jjbForm.e4Boys16to18-0)+
                              Number(jjbForm.e5Boys16to18-0)+
                              Number(jjbForm.e6Boys16to18-0)+
                              Number(jjbForm.e7Boys16to18-0)+
                              Number(jjbForm.e8Boys16to18-0)+
                              Number(jjbForm.e9Boys16to18-0)+
                              Number(jjbForm.e10Boys16to18-0)+
                              Number(jjbForm.e11Boys16to18-0)+
                              Number(jjbForm.e12Boys16to18-0)+
                              Number(jjbForm.e13Boys16to18-0)+

                              Number(jjbForm.e1BoysGreaterThan18-0)+
                              Number(jjbForm.e2BoysGreaterThan18-0)+
                              Number(jjbForm.e3BoysGreaterThan18-0)+
                              Number(jjbForm.e4BoysGreaterThan18-0)+
                              Number(jjbForm.e5BoysGreaterThan18-0)+
                              Number(jjbForm.e6BoysGreaterThan18-0)+
                              Number(jjbForm.e7BoysGreaterThan18-0)+
                              Number(jjbForm.e8BoysGreaterThan18-0)+
                              Number(jjbForm.e9BoysGreaterThan18-0)+
                              Number(jjbForm.e10BoysGreaterThan18-0)+
                              Number(jjbForm.e11BoysGreaterThan18-0)+
                              Number(jjbForm.e12BoysGreaterThan18-0)+
                              Number(jjbForm.e13BoysGreaterThan18-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f1Girls7to11"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{
                            Number(
                            Number(jjbForm.aGirls7to11-0)+
                            Number(jjbForm.b1Girls7to11-0)+
                            Number(jjbForm.b2Girls7to11-0)+
                            Number(jjbForm.b3Girls7to11-0))
                                                        -
                            Number( 
                            Number(jjbForm.e1Girls7to11-0)+
                            Number(jjbForm.e2Girls7to11-0)+
                            Number(jjbForm.e3Girls7to11-0)+
                            Number(jjbForm.e4Girls7to11-0)+
                            Number(jjbForm.e5Girls7to11-0)+
                            Number(jjbForm.e6Girls7to11-0)+
                            Number(jjbForm.e7Girls7to11-0)+
                            Number(jjbForm.e8Girls7to11-0)+
                            Number(jjbForm.e9Girls7to11-0)+
                            Number(jjbForm.e10Girls7to11-0)+
                            Number(jjbForm.e11Girls7to11-0)+
                            Number(jjbForm.e12Girls7to11-0)+
                            Number(jjbForm.e13Girls7to11-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f1Girls12to15" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(
                                        Number(jjbForm.aGirls12to15-0)+
                                        Number(jjbForm.b1Girls12to15-0)+
                                        Number(jjbForm.b2Girls12to15-0)+
                                        Number(jjbForm.b3Girls12to15-0)-0)
                                                                    -
                                        Number(
                                          Number(jjbForm.e1Girls12to15-0)+
                                          Number(jjbForm.e2Girls12to15-0)+
                                          Number(jjbForm.e3Girls12to15-0)+
                                          Number(jjbForm.e4Girls12to15-0)+
                                          Number(jjbForm.e5Girls12to15-0)+
                                          Number(jjbForm.e6Girls12to15-0)+
                                          Number(jjbForm.e7Girls12to15-0)+
                                          Number(jjbForm.e8Girls12to15-0)+
                                          Number(jjbForm.e9Girls12to15-0)+
                                          Number(jjbForm.e10Girls12to15-0)+
                                          Number(jjbForm.e11Girls12to15-0)+
                                          Number(jjbForm.e12Girls12to15-0)+
                                          Number(jjbForm.e13Girls12to15-0)-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f1Girls16to18"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(
                                        Number(jjbForm.aGirls16to18-0)+
                                        Number(jjbForm.b1Girls16to18-0)+
                                        Number(jjbForm.b2Girls16to18-0)+
                                        Number(jjbForm.b3Girls16to18-0)-0)
                                                                    -
                                        Number(
                                        Number(jjbForm.e1Girls16to18-0)+
                                        Number(jjbForm.e2Girls16to18-0)+
                                        Number(jjbForm.e3Girls16to18-0)+
                                        Number(jjbForm.e4Girls16to18-0)+
                                        Number(jjbForm.e5Girls16to18-0)+
                                        Number(jjbForm.e6Girls16to18-0)+
                                        Number(jjbForm.e7Girls16to18-0)+
                                        Number(jjbForm.e8Girls16to18-0)+
                                        Number(jjbForm.e9Girls16to18-0)+
                                        Number(jjbForm.e10Girls16to18-0)+
                                        Number(jjbForm.e11Girls16to18-0)+
                                        Number(jjbForm.e12Girls16to18-0)+
                                        Number(jjbForm.e13Girls16to18-0)-0)}}">
                      </td>
                      <td><input readonly type="text" id="f1GirlsGreaterThan18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(
                                        Number(jjbForm.aGirlsGreaterThan18-0)+
                                        Number(jjbForm.b1GirlsGreaterThan18-0)+
                                        Number(jjbForm.b2GirlsGreaterThan18-0)+
                                        Number(jjbForm.b3GirlsGreaterThan18-0)-0)
                                                                    -
                                        Number(
                                        Number(jjbForm.e1GirlsGreaterThan18-0)+
                                        Number(jjbForm.e2GirlsGreaterThan18-0)+
                                        Number(jjbForm.e3GirlsGreaterThan18-0)+
                                        Number(jjbForm.e4GirlsGreaterThan18-0)+
                                        Number(jjbForm.e5GirlsGreaterThan18-0)+
                                        Number(jjbForm.e6GirlsGreaterThan18-0)+
                                        Number(jjbForm.e7GirlsGreaterThan18-0)+
                                        Number(jjbForm.e8GirlsGreaterThan18-0)+
                                        Number(jjbForm.e9GirlsGreaterThan18-0)+
                                        Number(jjbForm.e10GirlsGreaterThan18-0)+
                                        Number(jjbForm.e11GirlsGreaterThan18-0)+
                                        Number(jjbForm.e12GirlsGreaterThan18-0)+
                                        Number(jjbForm.e13GirlsGreaterThan18-0)-0)}}"></td>
                      <td><input readonly type="text" id="f1GirlsTotal" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(
                        		Number(jjbForm.aGirls7to11-0)+
								Number(jjbForm.aGirls12to15-0)+
								Number(jjbForm.aGirls16to18-0)+
								Number(jjbForm.aGirlsGreaterThan18-0)+
                                Number(jjbForm.b1Girls7to11-0)+
                                Number(jjbForm.b2Girls7to11-0)+
                                Number(jjbForm.b3Girls7to11-0)+
                                Number(jjbForm.b1Girls12to15-0)+
                                Number(jjbForm.b2Girls12to15-0)+
                                Number(jjbForm.b3Girls12to15-0)+
                                Number(jjbForm.b1Girls16to18-0)+
                                Number(jjbForm.b2Girls16to18-0)+
                                Number(jjbForm.b3Girls16to18-0)+
                                Number(jjbForm.b1GirlsGreaterThan18-0)+
                                Number(jjbForm.b2GirlsGreaterThan18-0)+
                                Number(jjbForm.b3GirlsGreaterThan18-0)-0)

                            -Number(
                              Number(jjbForm.e1Girls7to11-0)+
                              Number(jjbForm.e2Girls7to11-0)+
                              Number(jjbForm.e3Girls7to11-0)+
                              Number(jjbForm.e4Girls7to11-0)+
                              Number(jjbForm.e5Girls7to11-0)+
                              Number(jjbForm.e6Girls7to11-0)+
                              Number(jjbForm.e7Girls7to11-0)+
                              Number(jjbForm.e8Girls7to11-0)+
                              Number(jjbForm.e9Girls7to11-0)+
                              Number(jjbForm.e10Girls7to11-0)+
                              Number(jjbForm.e11Girls7to11-0)+
                              Number(jjbForm.e12Girls7to11-0)+
                              Number(jjbForm.e13Girls7to11-0)+

                              Number(jjbForm.e1Girls12to15-0)+
                              Number(jjbForm.e2Girls12to15-0)+
                              Number(jjbForm.e3Girls12to15-0)+
                              Number(jjbForm.e4Girls12to15-0)+
                              Number(jjbForm.e5Girls12to15-0)+
                              Number(jjbForm.e6Girls12to15-0)+
                              Number(jjbForm.e7Girls12to15-0)+
                              Number(jjbForm.e8Girls12to15-0)+
                              Number(jjbForm.e9Girls12to15-0)+
                              Number(jjbForm.e10Girls12to15-0)+
                              Number(jjbForm.e11Girls12to15-0)+
                              Number(jjbForm.e12Girls12to15-0)+
                              Number(jjbForm.e13Girls12to15-0)+

                              Number(jjbForm.e1Girls16to18-0)+
                              Number(jjbForm.e2Girls16to18-0)+
                              Number(jjbForm.e3Girls16to18-0)+
                              Number(jjbForm.e4Girls16to18-0)+
                              Number(jjbForm.e5Girls16to18-0)+
                              Number(jjbForm.e6Girls16to18-0)+
                              Number(jjbForm.e7Girls16to18-0)+
                              Number(jjbForm.e8Girls16to18-0)+
                              Number(jjbForm.e9Girls16to18-0)+
                              Number(jjbForm.e10Girls16to18-0)+
                              Number(jjbForm.e11Girls16to18-0)+
                              Number(jjbForm.e12Girls16to18-0)+
                              Number(jjbForm.e13Girls16to18-0)+

                              Number(jjbForm.e1GirlsGreaterThan18-0)+
                              Number(jjbForm.e2GirlsGreaterThan18-0)+
                              Number(jjbForm.e3GirlsGreaterThan18-0)+
                              Number(jjbForm.e4GirlsGreaterThan18-0)+
                              Number(jjbForm.e5GirlsGreaterThan18-0)+
                              Number(jjbForm.e6GirlsGreaterThan18-0)+
                              Number(jjbForm.e7GirlsGreaterThan18-0)+
                              Number(jjbForm.e8GirlsGreaterThan18-0)+
                              Number(jjbForm.e9GirlsGreaterThan18-0)+
                              Number(jjbForm.e10GirlsGreaterThan18-0)+
                              Number(jjbForm.e11GirlsGreaterThan18-0)+
                              Number(jjbForm.e12GirlsGreaterThan18-0)+
                              Number(jjbForm.e13GirlsGreaterThan18-0)-0)}}"></td>
                                
                      <td><input readonly type="text" id="f1GrandTotal" tabindex= -1
                        value="{{Number(
                                Number(jjbForm.aBoys7to11-0)+
								Number(jjbForm.aBoys12to15-0)+
								Number(jjbForm.aBoys16to18-0)+
								Number(jjbForm.aBoysGreaterThan18-0)+
                                Number(jjbForm.b1Boys7to11-0)+
                                Number(jjbForm.b2Boys7to11-0)+
                                Number(jjbForm.b3Boys7to11-0)+
                                Number(jjbForm.b1Boys12to15-0)+
                                Number(jjbForm.b2Boys12to15-0)+
                                Number(jjbForm.b3Boys12to15-0)+
                                Number(jjbForm.b1Boys16to18-0)+
                                Number(jjbForm.b2Boys16to18-0)+
                                Number(jjbForm.b3Boys16to18-0)+
                                Number(jjbForm.b1BoysGreaterThan18-0)+
                                Number(jjbForm.b2BoysGreaterThan18-0)+
                                Number(jjbForm.b3BoysGreaterThan18-0)+
                                Number(jjbForm.aGirls7to11-0)+
								Number(jjbForm.aGirls12to15-0)+
								Number(jjbForm.aGirls16to18-0)+
								Number(jjbForm.aGirlsGreaterThan18-0)+
                                Number(jjbForm.b1Girls7to11-0)+
                                Number(jjbForm.b2Girls7to11-0)+
                                Number(jjbForm.b3Girls7to11-0)+
                                Number(jjbForm.b1Girls12to15-0)+
                                Number(jjbForm.b2Girls12to15-0)+
                                Number(jjbForm.b3Girls12to15-0)+
                                Number(jjbForm.b1Girls16to18-0)+
                                Number(jjbForm.b2Girls16to18-0)+
                                Number(jjbForm.b3Girls16to18-0)+
                                Number(jjbForm.b1GirlsGreaterThan18-0)+
                                Number(jjbForm.b2GirlsGreaterThan18-0)+
                                Number(jjbForm.b3GirlsGreaterThan18-0)-0)
                                -
                                Number(
                              Number(jjbForm.e1Boys7to11-0)+
                              Number(jjbForm.e2Boys7to11-0)+
                              Number(jjbForm.e3Boys7to11-0)+
                              Number(jjbForm.e4Boys7to11-0)+
                              Number(jjbForm.e5Boys7to11-0)+
                              Number(jjbForm.e6Boys7to11-0)+
                              Number(jjbForm.e7Boys7to11-0)+
                              Number(jjbForm.e8Boys7to11-0)+
                              Number(jjbForm.e9Boys7to11-0)+
                              Number(jjbForm.e10Boys7to11-0)+
                              Number(jjbForm.e11Boys7to11-0)+
                              Number(jjbForm.e12Boys7to11-0)+
                              Number(jjbForm.e13Boys7to11-0)+

                              Number(jjbForm.e1Boys12to15-0)+
                              Number(jjbForm.e2Boys12to15-0)+
                              Number(jjbForm.e3Boys12to15-0)+
                              Number(jjbForm.e4Boys12to15-0)+
                              Number(jjbForm.e5Boys12to15-0)+
                              Number(jjbForm.e6Boys12to15-0)+
                              Number(jjbForm.e7Boys12to15-0)+
                              Number(jjbForm.e8Boys12to15-0)+
                              Number(jjbForm.e9Boys12to15-0)+
                              Number(jjbForm.e10Boys12to15-0)+
                              Number(jjbForm.e11Boys12to15-0)+
                              Number(jjbForm.e12Boys12to15-0)+
                              Number(jjbForm.e13Boys12to15-0)+

                              Number(jjbForm.e1Boys16to18-0)+
                              Number(jjbForm.e2Boys16to18-0)+
                              Number(jjbForm.e3Boys16to18-0)+
                              Number(jjbForm.e4Boys16to18-0)+
                              Number(jjbForm.e5Boys16to18-0)+
                              Number(jjbForm.e6Boys16to18-0)+
                              Number(jjbForm.e7Boys16to18-0)+
                              Number(jjbForm.e8Boys16to18-0)+
                              Number(jjbForm.e9Boys16to18-0)+
                              Number(jjbForm.e10Boys16to18-0)+
                              Number(jjbForm.e11Boys16to18-0)+
                              Number(jjbForm.e12Boys16to18-0)+
                              Number(jjbForm.e13Boys16to18-0)+

                              Number(jjbForm.e1BoysGreaterThan18-0)+
                              Number(jjbForm.e2BoysGreaterThan18-0)+
                              Number(jjbForm.e3BoysGreaterThan18-0)+
                              Number(jjbForm.e4BoysGreaterThan18-0)+
                              Number(jjbForm.e5BoysGreaterThan18-0)+
                              Number(jjbForm.e6BoysGreaterThan18-0)+
                              Number(jjbForm.e7BoysGreaterThan18-0)+
                              Number(jjbForm.e8BoysGreaterThan18-0)+
                              Number(jjbForm.e9BoysGreaterThan18-0)+
                              Number(jjbForm.e10BoysGreaterThan18-0)+
                              Number(jjbForm.e11BoysGreaterThan18-0)+
                              Number(jjbForm.e12BoysGreaterThan18-0)+
                              Number(jjbForm.e13BoysGreaterThan18-0)+
                               Number(jjbForm.e1Girls7to11-0)+
                              Number(jjbForm.e2Girls7to11-0)+
                              Number(jjbForm.e3Girls7to11-0)+
                              Number(jjbForm.e4Girls7to11-0)+
                              Number(jjbForm.e5Girls7to11-0)+
                              Number(jjbForm.e6Girls7to11-0)+
                              Number(jjbForm.e7Girls7to11-0)+
                              Number(jjbForm.e8Girls7to11-0)+
                              Number(jjbForm.e9Girls7to11-0)+
                              Number(jjbForm.e10Girls7to11-0)+
                              Number(jjbForm.e11Girls7to11-0)+
                              Number(jjbForm.e12Girls7to11-0)+
                              Number(jjbForm.e13Girls7to11-0)+

                              Number(jjbForm.e1Girls12to15-0)+
                              Number(jjbForm.e2Girls12to15-0)+
                              Number(jjbForm.e3Girls12to15-0)+
                              Number(jjbForm.e4Girls12to15-0)+
                              Number(jjbForm.e5Girls12to15-0)+
                              Number(jjbForm.e6Girls12to15-0)+
                              Number(jjbForm.e7Girls12to15-0)+
                              Number(jjbForm.e8Girls12to15-0)+
                              Number(jjbForm.e9Girls12to15-0)+
                              Number(jjbForm.e10Girls12to15-0)+
                              Number(jjbForm.e11Girls12to15-0)+
                              Number(jjbForm.e12Girls12to15-0)+
                              Number(jjbForm.e13Girls12to15-0)+

                              Number(jjbForm.e1Girls16to18-0)+
                              Number(jjbForm.e2Girls16to18-0)+
                              Number(jjbForm.e3Girls16to18-0)+
                              Number(jjbForm.e4Girls16to18-0)+
                              Number(jjbForm.e5Girls16to18-0)+
                              Number(jjbForm.e6Girls16to18-0)+
                              Number(jjbForm.e7Girls16to18-0)+
                              Number(jjbForm.e8Girls16to18-0)+
                              Number(jjbForm.e9Girls16to18-0)+
                              Number(jjbForm.e10Girls16to18-0)+
                              Number(jjbForm.e11Girls16to18-0)+
                              Number(jjbForm.e12Girls16to18-0)+
                              Number(jjbForm.e13Girls16to18-0)+

                              Number(jjbForm.e1GirlsGreaterThan18-0)+
                              Number(jjbForm.e2GirlsGreaterThan18-0)+
                              Number(jjbForm.e3GirlsGreaterThan18-0)+
                              Number(jjbForm.e4GirlsGreaterThan18-0)+
                              Number(jjbForm.e5GirlsGreaterThan18-0)+
                              Number(jjbForm.e6GirlsGreaterThan18-0)+
                              Number(jjbForm.e7GirlsGreaterThan18-0)+
                              Number(jjbForm.e8GirlsGreaterThan18-0)+
                              Number(jjbForm.e9GirlsGreaterThan18-0)+
                              Number(jjbForm.e10GirlsGreaterThan18-0)+
                              Number(jjbForm.e11GirlsGreaterThan18-0)+
                              Number(jjbForm.e12GirlsGreaterThan18-0)+
                              Number(jjbForm.e13GirlsGreaterThan18-0)-0)  
                                
                                
                                
                                }}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>
                    
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">F.2. Children in Conflict with Law 
                          (CICL) already on bail</label>
                        </div>
                      </td>
                      <td><input readonly type="text"
                        id="f2TotalCases"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
                        value="{{Number(jjbForm.a1TotalCases-0)+Number(jjbForm.d1TotalCases-0)+Number(jjbForm.d2TotalCases-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2Boys7to11"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
                        value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.d1Boys7to11-0)+Number(jjbForm.d2Boys7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2Boys12to15"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont" tabindex= -1
                        value="{{Number(jjbForm.a1Boys12to15-0)+Number(jjbForm.d1Boys12to15-0)+Number(jjbForm.d2Boys12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2Boys16to18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1Boys16to18-0)+Number(jjbForm.d1Boys16to18-0)+Number(jjbForm.d2Boys16to18-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2BoysGreaterThan18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1BoysGreaterThan18-0)+Number(jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d2BoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="f2BoysTotal"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.d1Boys7to11-0)+Number(jjbForm.d2Boys7to11-0)+Number(
                            jjbForm.a1Boys12to15-0)+Number(jjbForm.d1Boys12to15-0)+Number(jjbForm.d2Boys12to15-0)+Number(
                            jjbForm.a1Boys16to18-0)+Number(jjbForm.d1Boys16to18-0)+Number(jjbForm.d2Boys16to18-0)+Number(
                            jjbForm.a1BoysGreaterThan18-0)+Number(jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d2BoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2Girls7to11" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1Girls7to11-0)+Number(jjbForm.d1Girls7to11-0)+Number(jjbForm.d2Girls7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2Girls12to15" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1Girls12to15-0)+Number(jjbForm.d1Girls12to15-0)+Number(jjbForm.d2Girls12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text"
                        id="f2Girls16to18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1Girls16to18-0)+Number(jjbForm.d1Girls16to18-0)+Number(jjbForm.d2Girls16to18-0)}}">
                      </td>
                      <td><input readonly type="text" id="f2GirlsGreaterThan18" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1GirlsGreaterThan18-0)+Number(jjbForm.d1GirlsGreaterThan18-0)+Number(jjbForm.d2GirlsGreaterThan18-0)}}"></td>
                                  
                      <td><input readonly type="text" id="f2GirlsTotal" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.a1Girls7to11-0)+Number(jjbForm.d1Girls7to11-0)+Number(jjbForm.d2Girls7to11-0)+Number(
                            jjbForm.a1Girls12to15-0)+Number(jjbForm.d1Girls12to15-0)+Number(jjbForm.d2Girls12to15-0)+Number(
                            jjbForm.a1Girls16to18-0)+Number(jjbForm.d1Girls16to18-0)+Number(jjbForm.d2Girls16to18-0)+Number(
                            jjbForm.a1GirlsGreaterThan18-0)+Number(jjbForm.d1GirlsGreaterThan18-0)+Number(jjbForm.d2GirlsGreaterThan18-0)}}"></td>
                                
                      <td><input readonly type="text" id="f2GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.a1Boys7to11-0)+Number(jjbForm.d1Boys7to11-0)+Number(jjbForm.d2Boys7to11-0)+Number(
                            jjbForm.a1Boys12to15-0)+Number(jjbForm.d1Boys12to15-0)+Number(jjbForm.d2Boys12to15-0)+Number(
                            jjbForm.a1Boys16to18-0)+Number(jjbForm.d1Boys16to18-0)+Number(jjbForm.d2Boys16to18-0)+Number(
                            jjbForm.a1BoysGreaterThan18-0)+Number(jjbForm.d1BoysGreaterThan18-0)+Number(jjbForm.d2BoysGreaterThan18-0)+Number(
                            jjbForm.a1Girls7to11-0)+Number(jjbForm.d1Girls7to11-0)+Number(jjbForm.d2Girls7to11-0)+Number(
                            jjbForm.a1Girls12to15-0)+Number(jjbForm.d1Girls12to15-0)+Number(jjbForm.d2Girls12to15-0)+Number(
                            jjbForm.a1Girls16to18-0)+Number(jjbForm.d1Girls16to18-0)+Number(jjbForm.d2Girls16to18-0)+Number(
                            jjbForm.a1GirlsGreaterThan18-0)+Number(jjbForm.d1GirlsGreaterThan18-0)+Number(jjbForm.d2GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>
                    
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">F.3. CICL reporting absent for two consecutive hearing </label>

                        </div>
                      </td>
                      <td><input  type="number" required 
                        id="f3TotalCases" ng-keyup="resetF3(jjbForm.f3TotalCases)"
                        ng-model="jjbForm.f3TotalCases" only-four-digit
                        ng-init="jjbForm.f3TotalCases=null"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases"  id="f3Boys7to11"
                        ng-model="jjbForm.f3Boys7to11" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases" id="f3Boys12to15" 
                        ng-model="jjbForm.f3Boys12to15" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases" id="f3Boys16to18"
                        ng-model="jjbForm.f3Boys16to18" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases"  id="f3BoysGreaterThan18"
                        ng-model="jjbForm.f3BoysGreaterThan18" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="text" id="f3BoysTotal" disabled tabindex= -1
                        value="{{Number(jjbForm.f3Boys7to11-0)+Number(jjbForm.f3Boys12to15-0)+Number(jjbForm.f3Boys16to18-0)+Number(jjbForm.f3BoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases"  id="f3Girls7to11"
                        ng-model="jjbForm.f3Girls7to11" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases"  id="f3Girls12to15"
                        ng-model="jjbForm.f3Girls12to15" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases" id="f3Girls16to18"
                        ng-model="jjbForm.f3Girls16to18" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input  type="number" ng-required="jjbForm.f3TotalCases"  id="f3GirlsGreaterThan18"
                        ng-model="jjbForm.f3GirlsGreaterThan18" only-four-digit
                        ng-disabled="jjbForm.submitted||(jjbForm.f3TotalCases<1)||(jjbForm.f3TotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        

                      <td><input  type="text" id="f3GirlsTotal" disabled tabindex= -1
                        value="{{Number(jjbForm.f3Girls7to11-0)+Number(jjbForm.f3Girls12to15-0)+Number(jjbForm.f3Girls16to18-0)+Number(jjbForm.f3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth"
                        ></td>
                        
                      <td><input  type="text" id="f3GrandTotal" disabled tabindex= -1
                        value="{{Number(jjbForm.f3Boys7to11-0)+Number(jjbForm.f3Boys12to15-0)+Number(jjbForm.f3Boys16to18-0)+Number(jjbForm.f3BoysGreaterThan18-0)+Number(
                            jjbForm.f3Girls7to11-0)+Number(jjbForm.f3Girls12to15-0)+Number(jjbForm.f3Girls16to18-0)+Number(jjbForm.f3GirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth"
                        ></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              
              <div class="b4sectionheading" id="caseG"></div>
              <div class="grey-header headMarg">G. Cases Pending as on Last
                Day of Month (By Duration)</div>
              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableG1">
                  <thead>
                    <tr>
                      <th rowspan="2" class="jjbgsection1stth">Cases pending < 4 months</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td width="20%">
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Petty
                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required 
                        ng-model="jjbForm.g1PettyTotalCases" ng-disabled="jjbForm.submitted" ng-keyup="resetG1Petty(jjbForm.g1PettyTotalCases)"
                        ng-init="jjbForm.g1PettyTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyBoys7to11"
                        ng-model="jjbForm.g1PettyBoys7to11" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyBoys12to15"
                        ng-model="jjbForm.g1PettyBoys12to15" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyBoys16to18"
                        ng-model="jjbForm.g1PettyBoys16to18" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyBoysGreaterThan18"
                        ng-model="jjbForm.g1PettyBoysGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input type="text" readonly id="g1PettyBoysTotal" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number( 
                                jjbForm.g1PettyBoys12to15-0)+Number(  
                                jjbForm.g1PettyBoys16to18-0)+Number(  
                                jjbForm.g1PettyBoysGreaterThan18-0)}}"
                         ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyGirls7to11"
                        ng-model="jjbForm.g1PettyGirls7to11" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyGirls12to15"
                        ng-model="jjbForm.g1PettyGirls12to15" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyGirls16to18"
                        ng-model="jjbForm.g1PettyGirls16to18" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1PettyTotalCases" id="g1PettyGirlsGreaterThan18"
                        ng-model="jjbForm.g1PettyGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g1PettyTotalCases<1)||(jjbForm.g1PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input type="text" id="g1PettyGirlsTotal"  tabindex= -1
                        value="{{Number(jjbForm.g1PettyGirls7to11-0)+Number( 
                              jjbForm.g1PettyGirls12to15-0)+Number( 
                              jjbForm.g1PettyGirls16to18-0)+Number( 
                              jjbForm.g1PettyGirlsGreaterThan18-0)}}" readonly
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g1PettyGrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number( 
                              jjbForm.g1PettyBoys12to15-0)+Number(  
                              jjbForm.g1PettyBoys16to18-0)+Number(  
                              jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g1PettyGirls7to11-0)+Number( 
                              jjbForm.g1PettyGirls12to15-0)+Number( 
                              jjbForm.g1PettyGirls16to18-0)+Number( 
                              jjbForm.g1PettyGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Serious

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g1SeriousTotalCases"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG1Serious(jjbForm.g1SeriousTotalCases)"
                        ng-init="jjbForm.g1SeriousTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input type="text" id="g1SeriousBoysTotal" readonly tabindex= -1
                        value="{{Number(  
                              jjbForm.g1SeriousBoys7to11-0)+Number( 
                              jjbForm.g1SeriousBoys12to15-0)+Number(  
                              jjbForm.g1SeriousBoys16to18-0)+Number(  
                              jjbForm.g1SeriousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1SeriousTotalCases"
                        ng-model="jjbForm.g1SeriousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g1SeriousTotalCases<1)||(jjbForm.g1SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                         
                      <td><input type="text" readonly id="g1SeriousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g1SeriousGirls7to11-0)+Number( 
                              jjbForm.g1SeriousGirls12to15-0)+Number( 
                              jjbForm.g1SeriousGirls16to18-0)+Number( 
                              jjbForm.g1SeriousGirlsGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"  tabindex= -1
                        id="g1SeriousGrandTotal"
                        value="{{Number(jjbForm.g1SeriousBoys7to11-0)+Number( 
                              jjbForm.g1SeriousBoys12to15-0)+Number(  
                              jjbForm.g1SeriousBoys16to18-0)+Number(  
                              jjbForm.g1SeriousBoysGreaterThan18-0)+Number(jjbForm.g1SeriousGirls7to11-0)+Number( 
                              jjbForm.g1SeriousGirls12to15-0)+Number( 
                              jjbForm.g1SeriousGirls16to18-0)+Number( 
                              jjbForm.g1SeriousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Heinous

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g1HeinousTotalCases"
                        ng-init="jjbForm.g1HeinousTotalCases=null"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG1Heinous(jjbForm.g1HeinousTotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input type="text" readonly id="g1HeinousBoysTotal" tabindex= -1
                        value="{{Number(jjbForm.g1HeinousBoys7to11-0)+Number( 
                              jjbForm.g1HeinousBoys12to15-0)+Number(  
                              jjbForm.g1HeinousBoys16to18-0)+Number(  
                              jjbForm.g1HeinousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g1HeinousTotalCases"
                        ng-model="jjbForm.g1HeinousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g1HeinousTotalCases<1)||(jjbForm.g1HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input type="text" readonly id="g1HeinousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g1HeinousGirls7to11-0)+Number( 
                              jjbForm.g1HeinousGirls12to15-0)+Number( 
                              jjbForm.g1HeinousGirls16to18-0)+Number( 
                              jjbForm.g1HeinousGirlsGreaterThan18-0)}}"
                         ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="g1HeinousGrandTotal"
                        value="{{Number(
                              jjbForm.g1HeinousBoys7to11-0)+Number( 
                              jjbForm.g1HeinousBoys12to15-0)+Number(  
                              jjbForm.g1HeinousBoys16to18-0)+Number(  
                              jjbForm.g1HeinousBoysGreaterThan18-0)+Number(
                              jjbForm.g1HeinousGirls7to11-0)+Number(  
                              jjbForm.g1HeinousGirls12to15-0)+Number( 
                              jjbForm.g1HeinousGirls16to18-0)+Number( 
                              jjbForm.g1HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">G.1. Total Pending Cases < 4 Months</label>

                        </div>
                      </td>
                      <td><input readonly type="text"
                        id="g1TotalCases" tabindex= -1
                        value="{{Number(jjbForm.g1PettyTotalCases-0)+Number(jjbForm.g1SeriousTotalCases-0)+Number(jjbForm.g1HeinousTotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g1Boys7to11" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number(jjbForm.g1SeriousBoys7to11-0)+Number(jjbForm.g1HeinousBoys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle  totalFont">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g1Boys12to15" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys12to15-0)+Number(jjbForm.g1SeriousBoys12to15-0)+Number(jjbForm.g1HeinousBoys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g1Boys16to18" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys16to18-0)+Number(jjbForm.g1SeriousBoys16to18-0)+Number(jjbForm.g1HeinousBoys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g1BoysGreaterThan18"
                        value="{{Number(jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g1SeriousBoysGreaterThan18-0)+Number(jjbForm.g1HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g1BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number(jjbForm.g1SeriousBoys7to11-0)+Number(jjbForm.g1HeinousBoys7to11-0)+Number(jjbForm.g1PettyBoys12to15-0)+Number(
                        jjbForm.g1SeriousBoys12to15-0)+Number(jjbForm.g1HeinousBoys12to15-0)+Number(jjbForm.g1PettyBoys16to18-0)+Number(jjbForm.g1SeriousBoys16to18-0)+Number(
                        jjbForm.g1HeinousBoys16to18-0)+Number(jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g1SeriousBoysGreaterThan18-0)+Number(jjbForm.g1HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g1Girls7to11"
                        value="{{Number(jjbForm.g1PettyGirls7to11-0)+Number(jjbForm.g1SeriousGirls7to11-0)+Number(jjbForm.g1HeinousGirls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g1Girls12to15"
                        value="{{Number(jjbForm.g1PettyGirls12to15-0)+Number(jjbForm.g1SeriousGirls12to15-0)+Number(jjbForm.g1HeinousGirls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g1Girls16to18" tabindex= -1
                        value="{{Number(jjbForm.g1PettyGirls16to18-0)+Number(jjbForm.g1SeriousGirls16to18-0)+Number(jjbForm.g1HeinousGirls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle  totalFont">
                      </td>
                      
                      
                      <td><input readonly type="text" id="g1GirlsGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.g1PettyGirlsGreaterThan18-0)+Number(jjbForm.g1SeriousGirlsGreaterThan18-0)+Number(jjbForm.g1HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" tabindex= -1
                        id="g1GirlsTotal"
                        value="{{Number(jjbForm.g1PettyGirls7to11-0)+Number(jjbForm.g1SeriousGirls7to11-0)+Number(jjbForm.g1HeinousGirls7to11-0)+Number(jjbForm.g1PettyGirls12to15-0)+Number(
                        jjbForm.g1SeriousGirls12to15-0)+Number(jjbForm.g1HeinousGirls12to15-0)+Number(jjbForm.g1PettyGirls16to18-0)+Number(jjbForm.g1SeriousGirls16to18-0)+Number(
                        jjbForm.g1HeinousGirls16to18-0)+Number(jjbForm.g1PettyGirlsGreaterThan18-0)+Number(jjbForm.g1SeriousGirlsGreaterThan18-0)+Number(jjbForm.g1HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" id="g1GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number(jjbForm.g1SeriousBoys7to11-0)+Number(jjbForm.g1HeinousBoys7to11-0)+Number(jjbForm.g1PettyBoys12to15-0)+Number(
                        jjbForm.g1SeriousBoys12to15-0)+Number(jjbForm.g1HeinousBoys12to15-0)+Number(jjbForm.g1PettyBoys16to18-0)+Number(jjbForm.g1SeriousBoys16to18-0)+Number(
                        jjbForm.g1HeinousBoys16to18-0)+Number(jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g1SeriousBoysGreaterThan18-0)+Number(
                        jjbForm.g1HeinousBoysGreaterThan18-0)+Number(jjbForm.g1PettyGirls7to11-0)+Number(jjbForm.g1SeriousGirls7to11-0)+Number(jjbForm.g1HeinousGirls7to11-0)+Number(
                        jjbForm.g1PettyGirls12to15-0)+Number(jjbForm.g1SeriousGirls12to15-0)+Number(jjbForm.g1HeinousGirls12to15-0)+Number(jjbForm.g1PettyGirls16to18-0)+Number(
                        jjbForm.g1SeriousGirls16to18-0)+Number(jjbForm.g1HeinousGirls16to18-0)+Number(jjbForm.g1PettyGirlsGreaterThan18-0)+Number(
                        jjbForm.g1SeriousGirlsGreaterThan18-0)+Number(jjbForm.g1HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>

                  </tbody>
                </table>
              </div>


              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableG2">
                  <thead>
                    <tr>
                      <th rowspan="2" class="jjbgsection1stth">Cases pending 4-6 months</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td width="20%">
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Petty
                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required ng-keyup="resetG2Petty(jjbForm.g2PettyTotalCases)"
                        ng-model="jjbForm.g2PettyTotalCases" ng-disabled="jjbForm.submitted"
                        ng-init="jjbForm.g2PettyTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyBoys7to11" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyBoys12to15" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyBoys16to18" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyBoysGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input readonly type="text" id="g2PettyBoysTotal" tabindex= -1
                        value="{{Number(jjbForm.g2PettyBoys7to11-0)+Number( 
                              jjbForm.g2PettyBoys12to15-0)+Number(  
                              jjbForm.g2PettyBoys16to18-0)+Number(  
                              jjbForm.g2PettyBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyGirls7to11" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyGirls12to15" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyGirls16to18" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2PettyTotalCases"
                        ng-model="jjbForm.g2PettyGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g2PettyTotalCases<1)||(jjbForm.g2PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input type="text" id="g2PettyGirlsTotal" readonly tabindex= -1
                        value="{{Number(jjbForm.g2PettyGirls7to11-0)+Number( 
                                jjbForm.g2PettyGirls12to15-0)+Number( 
                                jjbForm.g2PettyGirls16to18-0)+Number( 
                                jjbForm.g2PettyGirlsGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g2PettyGrandTotal" tabindex= -1
                        value="{{Number(
                                jjbForm.g2PettyBoys7to11-0)+Number( 
                                jjbForm.g2PettyBoys12to15-0)+Number(  
                                jjbForm.g2PettyBoys16to18-0)+Number(  
                                jjbForm.g2PettyBoysGreaterThan18-0)+Number(jjbForm.g2PettyGirls7to11-0)+Number( 
                                jjbForm.g2PettyGirls12to15-0)+Number( 
                                jjbForm.g2PettyGirls16to18-0)+Number( 
                                jjbForm.g2PettyGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Serious

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g2SeriousTotalCases"
                        ng-init="jjbForm.g2SeriousTotalCases=null"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG2Serious(jjbForm.g2SeriousTotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input type="text" readonly id="g2SeriousBoysTotal" tabindex= -1
                        value="{{Number( 
                              jjbForm.g2SeriousBoys7to11-0)+Number( 
                              jjbForm.g2SeriousBoys12to15-0)+Number(  
                              jjbForm.g2SeriousBoys16to18-0)+Number(  
                              jjbForm.g2SeriousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases"
                        ng-model="jjbForm.g2SeriousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2SeriousTotalCases" 
                        ng-model="jjbForm.g2SeriousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g2SeriousTotalCases<1)||(jjbForm.g2SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input readonly type="text" id="g2SeriousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g2SeriousGirls7to11-0)+Number( 
                              jjbForm.g2SeriousGirls12to15-0)+Number( 
                              jjbForm.g2SeriousGirls16to18-0)+Number( 
                              jjbForm.g2SeriousGirlsGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g2SeriousGrandTotal" tabindex= -1
                        value="{{Number(
                              jjbForm.g2SeriousBoys7to11-0)+Number( 
                              jjbForm.g2SeriousBoys12to15-0)+Number(  
                              jjbForm.g2SeriousBoys16to18-0)+Number(  
                              jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number( 
                              jjbForm.g2SeriousGirls12to15-0)+Number( 
                              jjbForm.g2SeriousGirls16to18-0)+Number( 
                              jjbForm.g2SeriousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Heinous

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g2HeinousTotalCases"
                        ng-init="jjbForm.g2HeinousTotalCases=null"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG2Heinous(jjbForm.g2HeinousTotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input type="text" id="g2HeinousBoysTotal" readonly tabindex= -1
                        value="{{Number(  
                              jjbForm.g2HeinousBoys7to11-0)+Number( 
                              jjbForm.g2HeinousBoys12to15-0)+Number(  
                              jjbForm.g2HeinousBoys16to18-0)+Number(  
                              jjbForm.g2HeinousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g2HeinousTotalCases"
                        ng-model="jjbForm.g2HeinousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g2HeinousTotalCases<1)||(jjbForm.g2HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input type="text" readonly id="g2HeinousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g2HeinousGirls7to11-0)+Number( 
                              jjbForm.g2HeinousGirls12to15-0)+Number( 
                              jjbForm.g2HeinousGirls16to18-0)+Number( 
                              jjbForm.g2HeinousGirlsGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="g2HeinousGrandTotal"
                        value="{{Number( 
                              jjbForm.g2HeinousBoys7to11-0)+Number( 
                              jjbForm.g2HeinousBoys12to15-0)+Number(  
                              jjbForm.g2HeinousBoys16to18-0)+Number(  
                              jjbForm.g2HeinousBoysGreaterThan18-0)+Number(
                              jjbForm.g2HeinousGirls7to11-0)+Number(  
                              jjbForm.g2HeinousGirls12to15-0)+Number( 
                              jjbForm.g2HeinousGirls16to18-0)+Number( 
                              jjbForm.g2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">G.2. Total Pending Cases  4-6  Months
                          </label>

                        </div>
                      </td>
                      <td><input readonly type="text"
                        id="g2TotalCases" tabindex= -1
                        value="{{Number(jjbForm.g2PettyTotalCases-0)+Number(jjbForm.g2SeriousTotalCases-0)+Number(jjbForm.g2HeinousTotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle  totalFont">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g2Boys7to11" tabindex= -1
                        value="{{Number(jjbForm.g2PettyBoys7to11-0)+Number(jjbForm.g2SeriousBoys7to11-0)+Number(jjbForm.g2HeinousBoys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g2Boys12to15" tabindex= -1
                        value="{{Number(jjbForm.g2PettyBoys12to15-0)+Number(jjbForm.g2SeriousBoys12to15-0)+Number(jjbForm.g2HeinousBoys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"  tabindex= -1
                        id="g2Boys16to18"
                        value="{{Number(jjbForm.g2PettyBoys16to18-0)+Number(jjbForm.g2SeriousBoys16to18-0)+Number(jjbForm.g2HeinousBoys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g2BoysGreaterThan18"
                        value="{{Number(jjbForm.g2PettyBoysGreaterThan18-0)+Number(jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g2HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g2BoysTotal"
                        value="{{Number(jjbForm.g2PettyBoys7to11-0)+Number(jjbForm.g2SeriousBoys7to11-0)+Number(jjbForm.g2HeinousBoys7to11-0)+Number(jjbForm.g2PettyBoys12to15-0)+Number(jjbForm.g2SeriousBoys12to15-0)+Number(
                        jjbForm.g2HeinousBoys12to15-0)+Number(jjbForm.g2PettyBoys16to18-0)+Number(jjbForm.g2SeriousBoys16to18-0)+Number(jjbForm.g2HeinousBoys16to18-0)+Number(jjbForm.g2PettyBoysGreaterThan18-0)+Number(
                        jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g2HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g2Girls7to11"
                        value="{{Number(jjbForm.g2PettyGirls7to11-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number(jjbForm.g2HeinousGirls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g2Girls12to15"
                        value="{{Number(jjbForm.g2PettyGirls12to15-0)+Number(jjbForm.g2SeriousGirls12to15-0)+Number(jjbForm.g2HeinousGirls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g2Girls16to18"
                        value="{{Number(jjbForm.g2PettyGirls16to18-0)+Number(jjbForm.g2SeriousGirls16to18-0)+Number(jjbForm.g2HeinousGirls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      
                      <td><input readonly type="text" id="g2GirlsGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.g2PettyGirlsGreaterThan18-0)+Number(jjbForm.g2SeriousGirlsGreaterThan18-0)+Number(jjbForm.g2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" tabindex= -1
                        id="g2GirlsTotal"
                        value="{{Number(jjbForm.g2PettyGirls7to11-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number(jjbForm.g2HeinousGirls7to11-0)+Number(jjbForm.g2PettyGirls12to15-0)+Number(jjbForm.g2SeriousGirls12to15-0)+Number(
                        jjbForm.g2HeinousGirls12to15-0)+Number(jjbForm.g2PettyGirls16to18-0)+Number(jjbForm.g2SeriousGirls16to18-0)+Number(jjbForm.g2HeinousGirls16to18-0)+Number(jjbForm.g2PettyGirlsGreaterThan18-0)+Number(
                        jjbForm.g2SeriousGirlsGreaterThan18-0)+Number(jjbForm.g2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" id="g2GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g2PettyBoys7to11-0)+Number(jjbForm.g2SeriousBoys7to11-0)+Number(jjbForm.g2HeinousBoys7to11-0)+Number(jjbForm.g2PettyBoys12to15-0)+Number(jjbForm.g2SeriousBoys12to15-0)+Number(
                        jjbForm.g2HeinousBoys12to15-0)+Number(jjbForm.g2PettyBoys16to18-0)+Number(jjbForm.g2SeriousBoys16to18-0)+Number(jjbForm.g2HeinousBoys16to18-0)+Number(jjbForm.g2PettyBoysGreaterThan18-0)+Number(
                        jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g2HeinousBoysGreaterThan18-0)+Number(jjbForm.g2PettyGirls7to11-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number(jjbForm.g2HeinousGirls7to11-0)+Number(
                        jjbForm.g2PettyGirls12to15-0)+Number(jjbForm.g2SeriousGirls12to15-0)+Number(jjbForm.g2HeinousGirls12to15-0)+Number(jjbForm.g2PettyGirls16to18-0)+Number(jjbForm.g2SeriousGirls16to18-0)+Number(
                        jjbForm.g2HeinousGirls16to18-0)+Number(jjbForm.g2PettyGirlsGreaterThan18-0)+Number(jjbForm.g2SeriousGirlsGreaterThan18-0)+Number(jjbForm.g2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>

                  </tbody>
                </table>
              </div>
              
              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableG3">
                  <thead>
                    <tr>
                      <th rowspan="2" class="jjbgsection1stth">Cases pending 6-12 months</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td width="20%">
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Petty
                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required ng-keyup="resetG3Petty(jjbForm.g3PettyTotalCases)"
                        ng-model="jjbForm.g3PettyTotalCases" ng-disabled="jjbForm.submitted"
                        ng-init="jjbForm.g3PettyTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyBoys7to11" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyBoys12to15" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyBoys16to18" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyBoysGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input readonly type="text" id="g3PettyBoysTotal" tabindex= -1
                        value="{{Number( 
                              jjbForm.g3PettyBoys7to11-0)+Number( 
                              jjbForm.g3PettyBoys12to15-0)+Number(  
                              jjbForm.g3PettyBoys16to18-0)+Number(  
                              jjbForm.g3PettyBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyGirls7to11" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyGirls12to15" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyGirls16to18" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3PettyTotalCases"
                        ng-model="jjbForm.g3PettyGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g3PettyTotalCases<1)||(jjbForm.g3PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input type="text" id="g3PettyGirlsTotal" readonly tabindex= -1
                        value="{{Number(jjbForm.g3PettyGirls7to11-0)+Number( 
                              jjbForm.g3PettyGirls12to15-0)+Number( 
                              jjbForm.g3PettyGirls16to18-0)+Number( 
                              jjbForm.g3PettyGirlsGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="g3PettyGrandTotal"
                        value="{{Number( 
                              jjbForm.g3PettyBoys7to11-0)+Number( 
                              jjbForm.g3PettyBoys12to15-0)+Number(  
                              jjbForm.g3PettyBoys16to18-0)+Number(  
                              jjbForm.g3PettyBoysGreaterThan18-0)+Number(jjbForm.g3PettyGirls7to11-0)+Number( 
                              jjbForm.g3PettyGirls12to15-0)+Number( 
                              jjbForm.g3PettyGirls16to18-0)+Number( 
                              jjbForm.g3PettyGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Serious

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g3SeriousTotalCases"
                        ng-init="jjbForm.g3SeriousTotalCases=null"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG3Serious(jjbForm.g3SeriousTotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input readonly type="text" id="g3SeriousBoysTotal" tabindex= -1
                        value="{{Number(  
                                jjbForm.g3SeriousBoys7to11-0)+Number( 
                                jjbForm.g3SeriousBoys12to15-0)+Number(  
                                jjbForm.g3SeriousBoys16to18-0)+Number(  
                          jjbForm.g3SeriousBoysGreaterThan18-0)}}"   
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3SeriousTotalCases"
                        ng-model="jjbForm.g3SeriousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g3SeriousTotalCases<1)||(jjbForm.g3SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input readonly type="text" id="g3SeriousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g3SeriousGirls7to11-0)+Number( 
                              jjbForm.g3SeriousGirls12to15-0)+Number( 
                              jjbForm.g3SeriousGirls16to18-0)+Number( 
                              jjbForm.g3SeriousGirlsGreaterThan18-0)}}" 
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" tabindex= -1
                        id="g3SeriousGrandTotal"
                        value="{{Number(
                              jjbForm.g3SeriousBoys7to11-0)+Number( 
                              jjbForm.g3SeriousBoys12to15-0)+Number(  
                              jjbForm.g3SeriousBoys16to18-0)+Number(  
                              jjbForm.g3SeriousBoysGreaterThan18-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number( 
                              jjbForm.g3SeriousGirls12to15-0)+Number( 
                              jjbForm.g3SeriousGirls16to18-0)+Number( 
                              jjbForm.g3SeriousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Heinous
                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g3HeinousTotalCases"
                        ng-init="jjbForm.g3HeinousTotalCases=null"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG3Heinous(jjbForm.g3HeinousTotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input readonly type="text" readonly id="g3HeinousBoysTotal" tabindex= -1
                        value="{{Number(  
                              jjbForm.g3HeinousBoys7to11-0)+Number( 
                              jjbForm.g3HeinousBoys12to15-0)+Number(  
                              jjbForm.g3HeinousBoys16to18-0)+Number(  
                              jjbForm.g3HeinousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g3HeinousTotalCases"
                        ng-model="jjbForm.g3HeinousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g3HeinousTotalCases<1)||(jjbForm.g3HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                         
                      <td><input readonly type="text" id="g3HeinousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g3HeinousGirls7to11-0)+Number( 
                              jjbForm.g3HeinousGirls12to15-0)+Number( 
                              jjbForm.g3HeinousGirls16to18-0)+Number( 
                              jjbForm.g3HeinousGirlsGreaterThan18-0)}}" 
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g3HeinousGrandTotal" tabindex= -1
                        value="{{Number( 
                              jjbForm.g3HeinousBoys7to11-0)+Number( 
                              jjbForm.g3HeinousBoys12to15-0)+Number(  
                              jjbForm.g3HeinousBoys16to18-0)+Number(  
                              jjbForm.g3HeinousBoysGreaterThan18-0)+Number(
                              jjbForm.g3HeinousGirls7to11-0)+Number(  
                              jjbForm.g3HeinousGirls12to15-0)+Number( 
                              jjbForm.g3HeinousGirls16to18-0)+Number( 
                              jjbForm.g3HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">G.3. Total Pending Cases 6-12 Months
                          </label>

                        </div>
                      </td>
                      <td><input readonly type="text" tabindex= -1
                        id="g3TotalCases"
                        value="{{Number(jjbForm.g3PettyTotalCases-0)+Number(jjbForm.g3SeriousTotalCases-0)+Number(jjbForm.g3HeinousTotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g3Boys7to11"
                        value="{{Number(jjbForm.g3PettyBoys7to11-0)+Number(jjbForm.g3SeriousBoys7to11-0)+Number(jjbForm.g3HeinousBoys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g3Boys12to15"
                        value="{{Number(jjbForm.g3PettyBoys12to15-0)+Number(jjbForm.g3SeriousBoys12to15-0)+Number(jjbForm.g3HeinousBoys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g3Boys16to18"
                        value="{{Number(jjbForm.g3PettyBoys16to18-0)+Number(jjbForm.g3SeriousBoys16to18-0)+Number(jjbForm.g3HeinousBoys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle  totalFont">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g3BoysGreaterThan18"
                        value="{{Number(jjbForm.g3PettyBoysGreaterThan18-0)+Number(jjbForm.g3SeriousBoysGreaterThan18-0)+Number(jjbForm.g3HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle  totalFont">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g3BoysTotal"
                        value="{{Number(jjbForm.g3PettyBoys7to11-0)+Number(jjbForm.g3SeriousBoys7to11-0)+Number(jjbForm.g3HeinousBoys7to11-0)+Number(jjbForm.g3PettyBoys12to15-0)+Number(
                        jjbForm.g3SeriousBoys12to15-0)+Number(jjbForm.g3HeinousBoys12to15-0)+Number(jjbForm.g3PettyBoys16to18-0)+Number(jjbForm.g3SeriousBoys16to18-0)+Number(
                        jjbForm.g3HeinousBoys16to18-0)+Number(jjbForm.g3PettyBoysGreaterThan18-0)+Number(jjbForm.g3SeriousBoysGreaterThan18-0)+Number(jjbForm.g3HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text" tabindex= -1
                        id="g3Girls7to11"
                        value="{{Number(jjbForm.g3PettyGirls7to11-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number(jjbForm.g3HeinousGirls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g3Girls12to15" tabindex= -1
                        value="{{Number(jjbForm.g3PettyGirls12to15-0)+Number(jjbForm.g3SeriousGirls12to15-0)+Number(jjbForm.g3HeinousGirls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g3Girls16to18" tabindex= -1
                        value="{{Number(jjbForm.g3PettyGirls16to18-0)+Number(jjbForm.g3SeriousGirls16to18-0)+Number(jjbForm.g3HeinousGirls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      
                      <td><input readonly type="text" id="g3GirlsGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.g3PettyGirlsGreaterThan18-0)+Number(jjbForm.g3SeriousGirlsGreaterThan18-0)+Number(jjbForm.g3HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" tabindex= -1
                        id="g3GirlsTotal"
                        value="{{Number(jjbForm.g3PettyGirls7to11-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number(jjbForm.g3HeinousGirls7to11-0)+Number(jjbForm.g3PettyGirls12to15-0)+Number(
                        jjbForm.g3SeriousGirls12to15-0)+Number(jjbForm.g3HeinousGirls12to15-0)+Number(jjbForm.g3PettyGirls16to18-0)+Number(jjbForm.g3SeriousGirls16to18-0)+Number(
                        jjbForm.g3HeinousGirls16to18-0)+Number(jjbForm.g3PettyGirlsGreaterThan18-0)+Number(jjbForm.g3SeriousGirlsGreaterThan18-0)+Number(
                        jjbForm.g3HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" id="g3GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g3PettyBoys7to11-0)+Number(jjbForm.g3SeriousBoys7to11-0)+Number(jjbForm.g3HeinousBoys7to11-0)+Number(jjbForm.g3PettyBoys12to15-0)+Number(
                        jjbForm.g3SeriousBoys12to15-0)+Number(jjbForm.g3HeinousBoys12to15-0)+Number(jjbForm.g3PettyBoys16to18-0)+Number(jjbForm.g3SeriousBoys16to18-0)+Number(
                        jjbForm.g3HeinousBoys16to18-0)+Number(jjbForm.g3PettyBoysGreaterThan18-0)+Number(jjbForm.g3SeriousBoysGreaterThan18-0)+Number(
                        jjbForm.g3HeinousBoysGreaterThan18-0)+Number(jjbForm.g3PettyGirls7to11-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number(jjbForm.g3HeinousGirls7to11-0)+Number(
                        jjbForm.g3PettyGirls12to15-0)+Number(jjbForm.g3SeriousGirls12to15-0)+Number(jjbForm.g3HeinousGirls12to15-0)+Number(jjbForm.g3PettyGirls16to18-0)+Number(
                        jjbForm.g3SeriousGirls16to18-0)+Number(jjbForm.g3HeinousGirls16to18-0)+Number(jjbForm.g3PettyGirlsGreaterThan18-0)+Number(jjbForm.g3SeriousGirlsGreaterThan18-0)+Number(
                        jjbForm.g3HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>

                  </tbody>
                </table>
              </div>
              
              
              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableG4">
                  <thead>
                    <tr>
                      <th rowspan="2" class="jjbgsection1stth">Cases pending >12 months</th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td width="20%">
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Petty
                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required ng-keyup="resetG4Petty(jjbForm.g4PettyTotalCases)"
                        ng-model="jjbForm.g4PettyTotalCases" ng-disabled="jjbForm.submitted"
                        ng-init="jjbForm.g4PettyTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyBoys7to11" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyBoys12to15" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyBoys16to18" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyBoysGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input type="text" readonly id="g4PettyBoysTotal" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoys7to11-0)+Number( 
                              jjbForm.g4PettyBoys12to15-0)+Number(  
                              jjbForm.g4PettyBoys16to18-0)+Number(  
                              jjbForm.g4PettyBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyGirls7to11" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyGirls12to15" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyGirls16to18" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4PettyTotalCases"
                        ng-model="jjbForm.g4PettyGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g4PettyTotalCases<1)||(jjbForm.g4PettyTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input readonly type="text" id="g4PettyGirlsTotal" tabindex= -1
                      value="{{Number(jjbForm.g4PettyGirls7to11-0)+Number( 
                            jjbForm.g4PettyGirls12to15-0)+Number( 
                            jjbForm.g4PettyGirls16to18-0)+Number( 
                            jjbForm.g4PettyGirlsGreaterThan18-0)}}"
                        
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g4PettyGrandTotal" tabindex= -1
                        value="{{Number( 
                            jjbForm.g4PettyBoys7to11-0)+Number( 
                            jjbForm.g4PettyBoys12to15-0)+Number(  
                            jjbForm.g4PettyBoys16to18-0)+Number(  
                            jjbForm.g4PettyBoysGreaterThan18-0)+Number(jjbForm.g4PettyGirls7to11-0)+Number( 
                            jjbForm.g4PettyGirls12to15-0)+Number( 
                            jjbForm.g4PettyGirls16to18-0)+Number( 
                            jjbForm.g4PettyGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Serious

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g4SeriousTotalCases"
                        ng-init="jjbForm.g4SeriousTotalCases=null"
                        ng-disabled="jjbForm.submitted" ng-keyup="resetG4Serious(jjbForm.g4SeriousTotalCases)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input readonly type="text" id="g4SeriousBoysTotal" tabindex= -1
                        value="{{Number(  
                              jjbForm.g4SeriousBoys7to11-0)+Number( 
                              jjbForm.g4SeriousBoys12to15-0)+Number(  
                              jjbForm.g4SeriousBoys16to18-0)+Number(  
                              jjbForm.g4SeriousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4SeriousTotalCases"
                        ng-model="jjbForm.g4SeriousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g4SeriousTotalCases<1)||(jjbForm.g4SeriousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input readonly type="text" id="g4SeriousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g4SeriousGirls7to11-0)+Number( 
                              jjbForm.g4SeriousGirls12to15-0)+Number( 
                              jjbForm.g4SeriousGirls16to18-0)+Number( 
                              jjbForm.g4SeriousGirlsGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g4SeriousGrandTotal" tabindex= -1
                        value="{{Number( 
                              jjbForm.g4SeriousBoys7to11-0)+Number( 
                              jjbForm.g4SeriousBoys12to15-0)+Number(  
                              jjbForm.g4SeriousBoys16to18-0)+Number(  
                              jjbForm.g4SeriousBoysGreaterThan18-0)+Number(jjbForm.g4SeriousGirls7to11-0)+Number( 
                              jjbForm.g4SeriousGirls12to15-0)+Number( 
                              jjbForm.g4SeriousGirls16to18-0)+Number( 
                              jjbForm.g4SeriousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Heinous

                          </label>

                        </div>
                      </td>
                      <td><input only-four-digit type="number" required
                        ng-model="jjbForm.g4HeinousTotalCases" ng-keyup="resetG4Heinous(jjbForm.g4HeinousTotalCases)"
                        ng-disabled="jjbForm.submitted"
                        ng-init="jjbForm.g4HeinousTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousBoys7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousBoys12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousBoys16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousBoysGreaterThan18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input readonly type="text" id="g4HeinousBoysTotal" tabindex= -1
                        value="{{Number(  
                              jjbForm.g4HeinousBoys7to11-0)+Number( 
                              jjbForm.g4HeinousBoys12to15-0)+Number(  
                              jjbForm.g4HeinousBoys16to18-0)+Number(  
                              jjbForm.g4HeinousBoysGreaterThan18-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousGirls7to11"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousGirls12to15"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousGirls16to18"
                        ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE">
                      </td>
                      
                      
                      <td><input only-four-digit type="number" ng-required="jjbForm.g4HeinousTotalCases"
                        ng-model="jjbForm.g4HeinousGirlsGreaterThan18" ng-disabled="jjbForm.submitted||(jjbForm.g4HeinousTotalCases<1)||(jjbForm.g4HeinousTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input readonly type="text" id="g4HeinousGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.g4HeinousGirls7to11-0)+Number( 
                              jjbForm.g4HeinousGirls12to15-0)+Number( 
                              jjbForm.g4HeinousGirls16to18-0)+Number( 
                              jjbForm.g4HeinousGirlsGreaterThan18-0)}}" 
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text"
                        id="g4HeinousGrandTotal" tabindex= -1
                        value="{{Number( 
                              jjbForm.g4HeinousBoys7to11-0)+Number( 
                              jjbForm.g4HeinousBoys12to15-0)+Number(  
                              jjbForm.g4HeinousBoys16to18-0)+Number(  
                              jjbForm.g4HeinousBoysGreaterThan18-0)+Number(
                              jjbForm.g4HeinousGirls7to11-0)+Number(  
                              jjbForm.g4HeinousGirls12to15-0)+Number( 
                              jjbForm.g4HeinousGirls16to18-0)+Number( 
                              jjbForm.g4HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">G.4. Total Pending Cases > 12 Months
                          </label>

                        </div>
                      </td>
                      <td><input readonly type="text"
                        id="g4TotalCases" tabindex= -1
                        value="{{Number(jjbForm.g4PettyTotalCases-0)+Number(jjbForm.g4SeriousTotalCases-0)+Number(jjbForm.g4HeinousTotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4Boys7to11" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoys7to11-0)+Number(jjbForm.g4SeriousBoys7to11-0)+Number(jjbForm.g4HeinousBoys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4Boys12to15" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoys12to15-0)+Number(jjbForm.g4SeriousBoys12to15-0)+Number(jjbForm.g4HeinousBoys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4Boys16to18" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoys16to18-0)+Number(jjbForm.g4SeriousBoys16to18-0)+Number(jjbForm.g4HeinousBoys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4BoysGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoysGreaterThan18-0)+Number(jjbForm.g4SeriousBoysGreaterThan18-0)+Number(jjbForm.g4HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4BoysTotal" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoys7to11-0)+Number(jjbForm.g4SeriousBoys7to11-0)+Number(jjbForm.g4HeinousBoys7to11-0)+Number(jjbForm.g4PettyBoys12to15-0)+Number(
                        jjbForm.g4SeriousBoys12to15-0)+Number(jjbForm.g4HeinousBoys12to15-0)+Number(jjbForm.g4PettyBoys16to18-0)+Number(jjbForm.g4SeriousBoys16to18-0)+Number(
                        jjbForm.g4HeinousBoys16to18-0)+Number(jjbForm.g4PettyBoysGreaterThan18-0)+Number(jjbForm.g4SeriousBoysGreaterThan18-0)+Number(jjbForm.g4HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4Girls7to11" tabindex= -1
                        value="{{Number(jjbForm.g4PettyGirls7to11-0)+Number(jjbForm.g4SeriousGirls7to11-0)+Number(jjbForm.g4HeinousGirls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4Girls12to15" tabindex= -1
                        value="{{Number(jjbForm.g4PettyGirls12to15-0)+Number(jjbForm.g4SeriousGirls12to15-0)+Number(jjbForm.g4HeinousGirls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle  totalFont">
                      </td>
                      
                      <td><input readonly type="text"
                        id="g4Girls16to18" tabindex= -1
                        value="{{Number(jjbForm.g4PettyGirls16to18-0)+Number(jjbForm.g4SeriousGirls16to18-0)+Number(jjbForm.g4HeinousGirls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont ">
                      </td>
                      
                      
                      <td><input readonly type="text" id="g4GirlsGreaterThan18" tabindex= -1
                        value="{{Number(jjbForm.g4PettyGirlsGreaterThan18-0)+Number(jjbForm.g4SeriousGirlsGreaterThan18-0)+Number(jjbForm.g4HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" tabindex= -1
                        id="g4GirlsTotal"
                        value="{{Number(jjbForm.g4PettyGirls7to11-0)+Number(jjbForm.g4SeriousGirls7to11-0)+Number(jjbForm.g4HeinousGirls7to11-0)+Number(jjbForm.g4PettyGirls12to15-0)+Number(
                        jjbForm.g4SeriousGirls12to15-0)+Number(jjbForm.g4HeinousGirls12to15-0)+Number(jjbForm.g4PettyGirls16to18-0)+Number(jjbForm.g4SeriousGirls16to18-0)+Number(
                        jjbForm.g4HeinousGirls16to18-0)+Number(jjbForm.g4PettyGirlsGreaterThan18-0)+Number(jjbForm.g4SeriousGirlsGreaterThan18-0)+Number(
                        jjbForm.g4HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      <td><input readonly type="text" id="g4GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g4PettyBoys7to11-0)+Number(jjbForm.g4SeriousBoys7to11-0)+Number(jjbForm.g4HeinousBoys7to11-0)+Number(jjbForm.g4PettyBoys12to15-0)+Number(
                        jjbForm.g4SeriousBoys12to15-0)+Number(jjbForm.g4HeinousBoys12to15-0)+Number(jjbForm.g4PettyBoys16to18-0)+Number(jjbForm.g4SeriousBoys16to18-0)+Number(
                        jjbForm.g4HeinousBoys16to18-0)+Number(jjbForm.g4PettyBoysGreaterThan18-0)+Number(jjbForm.g4SeriousBoysGreaterThan18-0)+Number(
                        jjbForm.g4HeinousBoysGreaterThan18-0)+Number(jjbForm.g4PettyGirls7to11-0)+Number(jjbForm.g4SeriousGirls7to11-0)+Number(jjbForm.g4HeinousGirls7to11-0)+Number(
                        jjbForm.g4PettyGirls12to15-0)+Number(jjbForm.g4SeriousGirls12to15-0)+Number(jjbForm.g4HeinousGirls12to15-0)+Number(jjbForm.g4PettyGirls16to18-0)+Number(
                        jjbForm.g4SeriousGirls16to18-0)+Number(jjbForm.g4HeinousGirls16to18-0)+Number(jjbForm.g4PettyGirlsGreaterThan18-0)+Number(
                        jjbForm.g4SeriousGirlsGreaterThan18-0)+Number(jjbForm.g4HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>

                  </tbody>
                </table>
              </div>


              <div class="b4sectionheading" id="caseH"></div>
              <div class="grey-header headMarg">H. Cases Pending as on Last
                Day of Month by Nature of Offence</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop">
                  <thead>
                    <tr>
                      <th rowspan="2" class="jjbgsection1stth">Total Pending Cases </th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">H.1. Petty
                          </label>
                        </div>
                      </td>
                      <td><input readonly type="text" id="h1TotalCases"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyTotalCases-0)+Number(jjbForm.g2PettyTotalCases-0)+Number(jjbForm.g3PettyTotalCases-0)+Number(jjbForm.g4PettyTotalCases-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1Boys7to11"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number(jjbForm.g2PettyBoys7to11-0)+Number(jjbForm.g3PettyBoys7to11-0)+Number(jjbForm.g4PettyBoys7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1Boys12to15"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyBoys12to15-0)+Number(jjbForm.g2PettyBoys12to15-0)+Number(jjbForm.g3PettyBoys12to15-0)+Number(jjbForm.g4PettyBoys12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1Boys16to18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyBoys16to18-0)+Number(jjbForm.g2PettyBoys16to18-0)+Number(jjbForm.g3PettyBoys16to18-0)+Number(jjbForm.g4PettyBoys16to18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g2PettyBoysGreaterThan18-0)+Number(jjbForm.g3PettyBoysGreaterThan18-0)+Number(jjbForm.g4PettyBoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1BoysTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyBoys7to11-0)+Number(
                        jjbForm.g2PettyBoys7to11-0)+Number(jjbForm.g3PettyBoys7to11-0)+Number(jjbForm.g4PettyBoys7to11-0)+Number(jjbForm.g1PettyBoys12to15-0)+Number(jjbForm.g2PettyBoys12to15-0)+Number(
                        jjbForm.g3PettyBoys12to15-0)+Number(jjbForm.g4PettyBoys12to15-0)+Number(jjbForm.g1PettyBoys16to18-0)+Number(jjbForm.g2PettyBoys16to18-0)+Number(jjbForm.g3PettyBoys16to18-0)+Number(
                        jjbForm.g4PettyBoys16to18-0)+Number(jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g2PettyBoysGreaterThan18-0)+Number(jjbForm.g3PettyBoysGreaterThan18-0)+Number(jjbForm.g4PettyBoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1Girls7to11"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyGirls7to11-0)+Number(jjbForm.g2PettyGirls7to11-0)+Number(jjbForm.g3PettyGirls7to11-0)+Number(jjbForm.g4PettyGirls7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1Girls12to15"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyGirls12to15-0)+Number(jjbForm.g2PettyGirls12to15-0)+Number(jjbForm.g3PettyGirls12to15-0)+Number(jjbForm.g4PettyGirls12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h1Girls16to18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyGirls16to18-0)+Number(jjbForm.g2PettyGirls16to18-0)+Number(jjbForm.g3PettyGirls16to18-0)+Number(jjbForm.g4PettyGirls16to18-0)}}">
                      </td>
                      <td><input readonly type="text" id="h1GirlsGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyGirlsGreaterThan18-0)+Number(jjbForm.g2PettyGirlsGreaterThan18-0)+Number(jjbForm.g3PettyGirlsGreaterThan18-0)+Number(jjbForm.g4PettyGirlsGreaterThan18-0)}}"></td>
                        
                      <td><input readonly type="text" id="h1GirlsTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1PettyGirls7to11-0)+Number(jjbForm.g2PettyGirls7to11-0)+Number(jjbForm.g3PettyGirls7to11-0)+Number(jjbForm.g4PettyGirls7to11-0)+Number(
                        jjbForm.g1PettyGirls12to15-0)+Number(jjbForm.g2PettyGirls12to15-0)+Number(jjbForm.g3PettyGirls12to15-0)+Number(jjbForm.g4PettyGirls12to15-0)+Number(
                        jjbForm.g1PettyGirls16to18-0)+Number(jjbForm.g2PettyGirls16to18-0)+Number(jjbForm.g3PettyGirls16to18-0)+Number(jjbForm.g4PettyGirls16to18-0)+Number(
                        jjbForm.g1PettyGirlsGreaterThan18-0)+Number(jjbForm.g2PettyGirlsGreaterThan18-0)+Number(
                        jjbForm.g3PettyGirlsGreaterThan18-0)+Number(jjbForm.g4PettyGirlsGreaterThan18-0)}}"></td>
                      <td><input readonly type="text" tabindex= -1
                        id="h1GrandTotal"
                        value="{{Number(
                        jjbForm.g1PettyBoys7to11-0)+Number(jjbForm.g2PettyBoys7to11-0)+Number(jjbForm.g3PettyBoys7to11-0)+Number(jjbForm.g4PettyBoys7to11-0)+Number(
                        jjbForm.g1PettyBoys12to15-0)+Number(jjbForm.g2PettyBoys12to15-0)+Number(jjbForm.g3PettyBoys12to15-0)+Number(jjbForm.g4PettyBoys12to15-0)+Number(
                        jjbForm.g1PettyBoys16to18-0)+Number(jjbForm.g2PettyBoys16to18-0)+Number(jjbForm.g3PettyBoys16to18-0)+Number(jjbForm.g4PettyBoys16to18-0)+Number(
                        jjbForm.g1PettyBoysGreaterThan18-0)+Number(jjbForm.g2PettyBoysGreaterThan18-0)+Number(jjbForm.g3PettyBoysGreaterThan18-0)+Number(
                        jjbForm.g4PettyBoysGreaterThan18-0)+Number(jjbForm.g1PettyGirls7to11-0)+Number(jjbForm.g2PettyGirls7to11-0)+Number(jjbForm.g3PettyGirls7to11-0)+Number(
                        jjbForm.g4PettyGirls7to11-0)+Number(jjbForm.g1PettyGirls12to15-0)+Number(jjbForm.g2PettyGirls12to15-0)+Number(jjbForm.g3PettyGirls12to15-0)+Number(
                        jjbForm.g4PettyGirls12to15-0)+Number(jjbForm.g1PettyGirls16to18-0)+Number(jjbForm.g2PettyGirls16to18-0)+Number(jjbForm.g3PettyGirls16to18-0)+Number(
                        jjbForm.g4PettyGirls16to18-0)+Number(jjbForm.g1PettyGirlsGreaterThan18-0)+Number(jjbForm.g2PettyGirlsGreaterThan18-0)+Number(
                        jjbForm.g3PettyGirlsGreaterThan18-0)+Number(jjbForm.g4PettyGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>

                    </tr>

                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">H.2. Serious
                          </label>
                        </div>
                      </td>
                      <td><input readonly type="text" id="h2TotalCases"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousTotalCases-0)+Number(jjbForm.g2SeriousTotalCases-0)+Number(jjbForm.g3SeriousTotalCases-0)+Number(jjbForm.g4SeriousTotalCases-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2Boys7to11" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousBoys7to11-0)+Number(jjbForm.g2SeriousBoys7to11-0)+Number(jjbForm.g3SeriousBoys7to11-0)+Number(jjbForm.g4SeriousBoys7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2Boys12to15" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousBoys12to15-0)+Number(jjbForm.g2SeriousBoys12to15-0)+Number(jjbForm.g3SeriousBoys12to15-0)+Number(jjbForm.g4SeriousBoys12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2Boys16to18" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousBoys16to18-0)+Number(jjbForm.g2SeriousBoys16to18-0)+Number(jjbForm.g3SeriousBoys16to18-0)+Number(jjbForm.g4SeriousBoys16to18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2BoysGreaterThan18" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousBoysGreaterThan18-0)+Number(jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g3SeriousBoysGreaterThan18-0)+Number(jjbForm.g4SeriousBoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2BoysTotal" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(
                        jjbForm.g1SeriousBoys7to11-0)+Number(jjbForm.g2SeriousBoys7to11-0)+Number(jjbForm.g3SeriousBoys7to11-0)+Number(jjbForm.g4SeriousBoys7to11-0)+Number(
                        jjbForm.g1SeriousBoys12to15-0)+Number(jjbForm.g2SeriousBoys12to15-0)+Number(jjbForm.g3SeriousBoys12to15-0)+Number(jjbForm.g4SeriousBoys12to15-0)+Number(
                        jjbForm.g1SeriousBoys16to18-0)+Number(jjbForm.g2SeriousBoys16to18-0)+Number(jjbForm.g3SeriousBoys16to18-0)+Number(jjbForm.g4SeriousBoys16to18-0)+Number(
                          jjbForm.g1SeriousBoysGreaterThan18-0)+Number(jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g3SeriousBoysGreaterThan18-0)+Number(jjbForm.g4SeriousBoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2Girls7to11" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousGirls7to11-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number(jjbForm.g4SeriousGirls7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h2Girls12to15" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousGirls12to15-0)+Number(jjbForm.g2SeriousGirls12to15-0)+Number(jjbForm.g3SeriousGirls12to15-0)+Number(jjbForm.g4SeriousGirls12to15-0)}}">
                      </td>
                      <td><input readonly type="text" id="h2Girls16to18" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousGirls16to18-0)+Number(jjbForm.g2SeriousGirls16to18-0)+Number(jjbForm.g3SeriousGirls16to18-0)+Number(jjbForm.g4SeriousGirls16to18-0)}}">
                      </td>
                      <td><input readonly type="text" id="h2GirlsGreaterThan18" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousGirlsGreaterThan18-0)+Number(jjbForm.g2SeriousGirlsGreaterThan18-0)+Number(jjbForm.g3SeriousGirlsGreaterThan18-0)+Number(jjbForm.g4SeriousGirlsGreaterThan18-0)}}"></td>
                      <td><input readonly type="text" id="h2GirlsTotal" tabindex= -1
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1SeriousGirls7to11-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number(jjbForm.g4SeriousGirls7to11-0)+Number(
                        jjbForm.g1SeriousGirls12to15-0)+Number(jjbForm.g2SeriousGirls12to15-0)+Number(jjbForm.g3SeriousGirls12to15-0)+Number(jjbForm.g4SeriousGirls12to15-0)+Number(
                        jjbForm.g1SeriousGirls16to18-0)+Number(jjbForm.g2SeriousGirls16to18-0)+Number(jjbForm.g3SeriousGirls16to18-0)+Number(jjbForm.g4SeriousGirls16to18-0)+Number(
                        jjbForm.g1SeriousGirlsGreaterThan18-0)+Number(jjbForm.g2SeriousGirlsGreaterThan18-0)+Number(jjbForm.g3SeriousGirlsGreaterThan18-0)+Number(jjbForm.g4SeriousGirlsGreaterThan18-0)}}"></td>
                      <td><input readonly type="text"
                        id="h2GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g1SeriousGirls7to11-0)+Number(jjbForm.g2SeriousGirls7to11-0)+Number(jjbForm.g3SeriousGirls7to11-0)+Number(jjbForm.g4SeriousGirls7to11-0)+Number(
                        jjbForm.g1SeriousGirls12to15-0)+Number(jjbForm.g2SeriousGirls12to15-0)+Number(jjbForm.g3SeriousGirls12to15-0)+Number(jjbForm.g4SeriousGirls12to15-0)+Number(
                        jjbForm.g1SeriousGirls16to18-0)+Number(jjbForm.g2SeriousGirls16to18-0)+Number(jjbForm.g3SeriousGirls16to18-0)+Number(jjbForm.g4SeriousGirls16to18-0)+Number(
                        jjbForm.g1SeriousGirlsGreaterThan18-0)+Number(jjbForm.g2SeriousGirlsGreaterThan18-0)+Number(jjbForm.g3SeriousGirlsGreaterThan18-0)+Number(
                        jjbForm.g4SeriousGirlsGreaterThan18-0)+Number(jjbForm.g1SeriousBoys7to11-0)+Number(jjbForm.g2SeriousBoys7to11-0)+Number(jjbForm.g3SeriousBoys7to11-0)+Number(jjbForm.g4SeriousBoys7to11-0)+Number(
                        jjbForm.g1SeriousBoys12to15-0)+Number(jjbForm.g2SeriousBoys12to15-0)+Number(jjbForm.g3SeriousBoys12to15-0)+Number(jjbForm.g4SeriousBoys12to15-0)+Number(
                        jjbForm.g1SeriousBoys16to18-0)+Number(jjbForm.g2SeriousBoys16to18-0)+Number(jjbForm.g3SeriousBoys16to18-0)+Number(jjbForm.g4SeriousBoys16to18-0)+Number(
                          jjbForm.g1SeriousBoysGreaterThan18-0)+Number(jjbForm.g2SeriousBoysGreaterThan18-0)+Number(jjbForm.g3SeriousBoysGreaterThan18-0)+Number(jjbForm.g4SeriousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">H.3. Heinous
                          </label>
                        </div>
                      </td>
                      <td><input readonly type="text" id="h3TotalCases"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousTotalCases-0)+Number(jjbForm.g2HeinousTotalCases-0)+Number(jjbForm.g3HeinousTotalCases-0)+Number(jjbForm.g4HeinousTotalCases-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3Boys7to11"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousBoys7to11-0)+Number(jjbForm.g2HeinousBoys7to11-0)+Number(jjbForm.g3HeinousBoys7to11-0)+Number(jjbForm.g4HeinousBoys7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3Boys12to15"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousBoys12to15-0)+Number(jjbForm.g2HeinousBoys12to15-0)+Number(jjbForm.g3HeinousBoys12to15-0)+Number(jjbForm.g4HeinousBoys12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3Boys16to18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousBoys16to18-0)+Number(jjbForm.g2HeinousBoys16to18-0)+Number(jjbForm.g3HeinousBoys16to18-0)+Number(jjbForm.g4HeinousBoys16to18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousBoysGreaterThan18-0)+Number(jjbForm.g2HeinousBoysGreaterThan18-0)+Number(jjbForm.g3HeinousBoysGreaterThan18-0)+Number(jjbForm.g4HeinousBoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3BoysTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousBoys7to11-0)+Number(
                        jjbForm.g2HeinousBoys7to11-0)+Number(jjbForm.g3HeinousBoys7to11-0)+Number(jjbForm.g4HeinousBoys7to11-0)+Number(jjbForm.g1HeinousBoys12to15-0)+Number(jjbForm.g2HeinousBoys12to15-0)+Number(
                        jjbForm.g3HeinousBoys12to15-0)+Number(jjbForm.g4HeinousBoys12to15-0)+Number(jjbForm.g1HeinousBoys16to18-0)+Number(jjbForm.g2HeinousBoys16to18-0)+Number(jjbForm.g3HeinousBoys16to18-0)+Number(
                        jjbForm.g4HeinousBoys16to18-0)+Number(jjbForm.g1HeinousBoysGreaterThan18-0)+Number(jjbForm.g2HeinousBoysGreaterThan18-0)+Number(jjbForm.g3HeinousBoysGreaterThan18-0)+Number(jjbForm.g4HeinousBoysGreaterThan18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3Girls7to11"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousGirls7to11-0)+Number(jjbForm.g2HeinousGirls7to11-0)+Number(jjbForm.g3HeinousGirls7to11-0)+Number(jjbForm.g4HeinousGirls7to11-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3Girls12to15"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousGirls12to15-0)+Number(jjbForm.g2HeinousGirls12to15-0)+Number(jjbForm.g3HeinousGirls12to15-0)+Number(jjbForm.g4HeinousGirls12to15-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3Girls16to18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousGirls16to18-0)+Number(jjbForm.g2HeinousGirls16to18-0)+Number(jjbForm.g3HeinousGirls16to18-0)+Number(jjbForm.g4HeinousGirls16to18-0)}}">
                      </td>
                      
                      <td><input readonly type="text" id="h3GirlsGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousGirlsGreaterThan18-0)+Number(jjbForm.g2HeinousGirlsGreaterThan18-0)+Number(jjbForm.g3HeinousGirlsGreaterThan18-0)+Number(jjbForm.g4HeinousGirlsGreaterThan18-0)}}"></td>
                      <td><input readonly type="text" id="h3GirlsTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                        value="{{Number(jjbForm.g1HeinousGirls7to11-0)+Number(jjbForm.g2HeinousGirls7to11-0)+Number(jjbForm.g3HeinousGirls7to11-0)+Number(jjbForm.g4HeinousGirls7to11-0)+Number(jjbForm.g1HeinousGirls12to15-0)+Number(
                        jjbForm.g2HeinousGirls12to15-0)+Number(jjbForm.g3HeinousGirls12to15-0)+Number(jjbForm.g4HeinousGirls12to15-0)+Number(jjbForm.g1HeinousGirls16to18-0)+Number(jjbForm.g2HeinousGirls16to18-0)+Number(
                        jjbForm.g3HeinousGirls16to18-0)+Number(jjbForm.g4HeinousGirls16to18-0)+Number(jjbForm.g1HeinousGirlsGreaterThan18-0)+Number(jjbForm.g2HeinousGirlsGreaterThan18-0)+Number(
                        jjbForm.g3HeinousGirlsGreaterThan18-0)+Number(jjbForm.g4HeinousGirlsGreaterThan18-0)}}"></td>
                      <td><input readonly type="text"
                        id="h3GrandTotal" tabindex= -1
                        value="{{Number(jjbForm.g1HeinousBoys7to11-0)+Number(
                        jjbForm.g2HeinousBoys7to11-0)+Number(jjbForm.g3HeinousBoys7to11-0)+Number(jjbForm.g4HeinousBoys7to11-0)+Number(jjbForm.g1HeinousBoys12to15-0)+Number(jjbForm.g2HeinousBoys12to15-0)+Number(
                        jjbForm.g3HeinousBoys12to15-0)+Number(jjbForm.g4HeinousBoys12to15-0)+Number(jjbForm.g1HeinousBoys16to18-0)+Number(jjbForm.g2HeinousBoys16to18-0)+Number(jjbForm.g3HeinousBoys16to18-0)+Number(
                        jjbForm.g4HeinousBoys16to18-0)+Number(jjbForm.g1HeinousBoysGreaterThan18-0)+Number(jjbForm.g2HeinousBoysGreaterThan18-0)+Number(jjbForm.g3HeinousBoysGreaterThan18-0)+Number(
                        jjbForm.g4HeinousBoysGreaterThan18-0)+Number(jjbForm.g1HeinousGirls7to11-0)+Number(jjbForm.g2HeinousGirls7to11-0)+Number(jjbForm.g3HeinousGirls7to11-0)+Number(jjbForm.g4HeinousGirls7to11-0)+Number(
                        jjbForm.g1HeinousGirls12to15-0)+Number(jjbForm.g2HeinousGirls12to15-0)+Number(jjbForm.g3HeinousGirls12to15-0)+Number(jjbForm.g4HeinousGirls12to15-0)+Number(jjbForm.g1HeinousGirls16to18-0)+Number(
                        jjbForm.g2HeinousGirls16to18-0)+Number(jjbForm.g3HeinousGirls16to18-0)+Number(jjbForm.g4HeinousGirls16to18-0)+Number(jjbForm.g1HeinousGirlsGreaterThan18-0)+Number(
                        jjbForm.g2HeinousGirlsGreaterThan18-0)+Number(jjbForm.g3HeinousGirlsGreaterThan18-0)+Number(jjbForm.g4HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label totalFont" for="textinput">H.4. Total Cases
                          </label>
                        </div>
                      </td>
                      <td><input readonly type="text" id="h4TotalCases"
                        ng-disabled="jjbForm.submitted" tabindex= -1 value="{{h4SectionValue1()}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4Boys7to11"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4Boys12to15"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4Boys16to18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4BoysGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4BoysTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4Girls7to11"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4Girls12to15"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4Girls16to18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                      
                      <td><input readonly type="text" id="h4GirlsGreaterThan18"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
                      <td><input readonly type="text" id="h4GirlsTotal"
                        ng-disabled="jjbForm.submitted" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont"></td>
                      <td><input readonly type="text"
                        id="h4GrandTotal" tabindex= -1
                        class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              
              <div class="b4sectionheading" id="caseI"></div>
              
              <div class="grey-header headMarg">I. category wise breakup of
                Children last day of the Reporting Month</div>
              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableI">
                  <thead>
                    <tr>
                      <th rowspan="2">Total Cases</th>
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
                      
                      <td><input type="number" required id="iTotalCasesId"  ng-keyup="resetIFields(jjbForm.iTotalCases)"
                        ng-model="jjbForm.iTotalCases" ng-disabled="jjbForm.submitted"
                        ng-init="jjbForm.iTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iBoysSCId" 
                        ng-model="jjbForm.iBoysSC" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iBoysSTId" 
                        ng-model="jjbForm.iBoysST" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iBoysEBCId"
                        ng-model="jjbForm.iBoysEBC" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                       <td><input type="number" ng-required="jjbForm.iTotalCases" id="iBoysOBCId" 
                        ng-model="jjbForm.iBoysOBC" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iBoysOthersId"
                        ng-model="jjbForm.iBoysOthers" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iBoysNotKnownId"
                        ng-model="jjbForm.iBoysNotKnown" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="text" id="iBoysTotal" readonly tabindex= -1
                        value="{{Number(jjbForm.iBoysSC-0)+Number(  
                              jjbForm.iBoysST-0)+Number(  
                              jjbForm.iBoysOBC-0)+Number( 
                              jjbForm.iBoysEBC-0)+Number( 
                              jjbForm.iBoysOthers-0)+Number(  
                              jjbForm.iBoysNotKnown-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                         ></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iGirlsSCId"
                        ng-model="jjbForm.iGirlsSC" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iGirlsSTId" 
                        ng-model="jjbForm.iGirlsST" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iGirlsEBCId"
                        ng-model="jjbForm.iGirlsEBC" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iGirlsOBCId"
                        ng-model="jjbForm.iGirlsOBC" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iGirlsOthersId"
                        ng-model="jjbForm.iGirlsOthers" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iGirlsNotKnownId"
                        ng-model="jjbForm.iGirlsNotKnown" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="text" id="iGirlsTotal" tabindex= -1
                        value="{{Number(jjbForm.iGirlsSC-0)+Number(  
                              jjbForm.iGirlsST-0)+Number( 
                              jjbForm.iGirlsOBC-0)+Number(  
                              jjbForm.iGirlsEBC-0)+Number(  
                              jjbForm.iGirlsOthers-0)+Number( 
                              jjbForm.iGirlsNotKnown-0)}}"
                        ng-disabled="jjbForm.submitted" readonly
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                         ></td>
                         
                      <td><input type="text" id="iGrandTotal" readonly tabindex= -1
                        value="{{Number(jjbForm.iBoysSC-0)+Number( 
                              jjbForm.iBoysST-0)+Number(  
                              jjbForm.iBoysOBC-0)+Number( 
                              jjbForm.iBoysEBC-0)+Number( 
                              jjbForm.iBoysOthers-0)+Number(  
                              jjbForm.iBoysNotKnown-0)+Number(jjbForm.iGirlsSC-0)+Number( 
                              jjbForm.iGirlsST-0)+Number( 
                              jjbForm.iGirlsOBC-0)+Number(  
                              jjbForm.iGirlsEBC-0)+Number(  
                              jjbForm.iGirlsOthers-0)+Number( 
                              jjbForm.iGirlsNotKnown-0)}}"
                        ng-disabled="jjbForm.submitted"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                         ></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            <div class="grey-header1 headMarg">I.a. Total number of Minority Children Cases last day of the Reporting Month </div>
              <div class="labelFont">
                <table class="table table-bordered table-margintop minortableWidth" id="tableI2">
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
                            <label class="control-label" for="textinput"> No. of Minority Cases </label>
                       </div>
                    </td>
                    <td><input type="number" ng-required="jjbForm.iTotalCases" id="iMinorityBoysId" 
                        ng-model="jjbForm.iMinorityBoys" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        ng-init="jjbForm.iMinorityBoys=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="number" ng-required="jjbForm.iTotalCases" id="iMinorityGirlsId"
                        ng-model="jjbForm.iMinorityGirls" ng-disabled="jjbForm.submitted||(jjbForm.iTotalCases<1)||(jjbForm.iTotalCases==null)"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                         only-four-digit></td>
                         
                      <td><input type="text" id="iMinorityTotal" tabindex= -1
                        value="{{Number(jjbForm.iMinorityBoys-0)+Number(jjbForm.iMinorityGirls-0)}}"
                        ng-disabled="jjbForm.submitted" readonly
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                         ></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              

              <div class="b4sectionheading" id="caseJ"></div>
              <div class="grey-header headMarg">J. Cases pending as on last day of month administered by Juvenile Justice 
              Act 2000 (Cases Registered before 15th January 2016)</div>

              <div class="labelFont">
                <table class="table table-bordered table-margintop" id="tableJ">
                  <thead>
                    <tr>
                      <th rowspan="2" class="jjbgsection1stth">Total Pending Cases </th>
                      <th rowspan="2">Total cases</th>
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
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Non Heinous</label>

                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" id="j1NonHeinousTotalCasesId"
                        only-four-digit type="number" required ng-keyup="resetJ1fields(jjbForm.j1NonHeinousTotalCases)"
                        ng-model="jjbForm.j1NonHeinousTotalCases"
                        ng-init="jjbForm.j1NonHeinousTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousBoys7to11Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousBoys7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousBoys12to15Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousBoys12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousBoys16to18Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousBoys16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousBoysGreaterThan18Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousBoysGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" id="j1NonHeinousBoysTotal"
                        type="text" readonly tabindex= -1
                        value="{{Number(jjbForm.j1NonHeinousBoys7to11-0)+Number(jjbForm.j1NonHeinousBoys12to15-0)+Number(jjbForm.j1NonHeinousBoys16to18-0)+Number(jjbForm.j1NonHeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousGirls7to11Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousGirls7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousGirls12to15Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousGirls12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousGirls16to18Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases"
                        ng-model="jjbForm.j1NonHeinousGirls16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j1NonHeinousTotalCases<1)||(jjbForm.j1NonHeinousTotalCases==null)" id="j1NonHeinousGirlsGreaterThan18Id"
                        only-four-digit type="number" ng-required="jjbForm.j1NonHeinousTotalCases" 
                        ng-model="jjbForm.j1NonHeinousGirlsGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" id="j1NonHeinousGirlsTotal" tabindex= -1
                        type="text" readonly
                        value="{{Number(jjbForm.j1NonHeinousGirls7to11-0)+Number(jjbForm.j1NonHeinousGirls12to15-0)+Number(jjbForm.j1NonHeinousGirls16to18-0)+Number(jjbForm.j1NonHeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" id="j1NonHeinousGrandTotal" tabindex= -1
                        value="{{Number(jjbForm.j1NonHeinousBoys7to11-0)+Number(jjbForm.j1NonHeinousBoys12to15-0)+Number(jjbForm.j1NonHeinousBoys16to18-0)+Number(  
  jjbForm.j1NonHeinousBoysGreaterThan18-0)+Number(jjbForm.j1NonHeinousGirls7to11-0)+Number(jjbForm.j1NonHeinousGirls12to15-0)+Number(jjbForm.j1NonHeinousGirls16to18-0)+Number(jjbForm.j1NonHeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Heinous</label>
                        </div>
                      </td>
                      <td><input ng-disabled="jjbForm.submitted" id="j2HeinousTotalCasesId"
                        only-four-digit type="number" required ng-keyup="resetJ2Heinous(jjbForm.j2HeinousTotalCases)"
                        ng-model="jjbForm.j2HeinousTotalCases"
                        ng-init="jjbForm.j2HeinousTotalCases=null"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousBoys7to11Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousBoys7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousBoys12to15Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousBoys12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousBoys16to18Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousBoys16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousBoysGreaterThan18Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousBoysGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousBoysTotal" tabindex= -1
                        type="text" readonly
                        value="{{Number(jjbForm.j2HeinousBoys7to11-0)+Number(jjbForm.j2HeinousBoys12to15-0)+Number(jjbForm.j2HeinousBoys16to18-0)+Number(jjbForm.j2HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousGirls7to11Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousGirls7to11"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousGirls12to15Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousGirls12to15"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousGirls16to18Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases"
                        ng-model="jjbForm.j2HeinousGirls16to18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted||(jjbForm.j2HeinousTotalCases<1)||(jjbForm.j2HeinousTotalCases==null)" id="j2HeinousGirlsGreaterThan18Id"
                        only-four-digit type="number" ng-required="jjbForm.j2HeinousTotalCases" ng-model="jjbForm.j2HeinousGirlsGreaterThan18"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input ng-disabled="jjbForm.submitted" id="j2HeinousGirlsTotal" tabindex= -1
                        type="text" readonly
                        value="{{Number(jjbForm.j2HeinousGirls7to11-0)+Number(jjbForm.j2HeinousGirls12to15-0)+Number(jjbForm.j2HeinousGirls16to18-0)+Number(jjbForm.j2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle"
                        ></td>
                        
                      <td><input readonly type="text" readonly id="j2HeinousGrandTotal" tabindex= -1
                        value="{{Number(jjbForm.j2HeinousBoys7to11-0)+Number(jjbForm.j2HeinousBoys12to15-0)+Number(jjbForm.j2HeinousBoys16to18-0)+Number(jjbForm.j2HeinousBoysGreaterThan18-0)+Number(jjbForm.j2HeinousGirls7to11-0)+Number(jjbForm.j2HeinousGirls12to15-0)+Number(jjbForm.j2HeinousGirls16to18-0)+Number(jjbForm.j2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth readonlyStyle">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="textAlign">
                          <label class="control-label" for="textinput">Total</label>

                        </div>
                      </td>
                      <td><input disabled id="j3TotalCases"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousTotalCases-0)+Number(jjbForm.j2HeinousTotalCases-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="j3TotalBoys7to11"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousBoys7to11-0)+Number(jjbForm.j2HeinousBoys7to11-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="j3TotalBoys12to15"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousBoys12to15-0)+Number(jjbForm.j2HeinousBoys12to15-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                     <td><input disabled id="j3TotalBoys16to18"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousBoys16to18-0)+Number(jjbForm.j2HeinousBoys16to18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="j3TotalBoysGreaterThan18"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousBoysGreaterThan18-0)+Number(jjbForm.j2HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                      <td><input disabled id="j3TotalBoysTotal"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousBoys7to11-0)+Number(jjbForm.j2HeinousBoys7to11-0)+
                                Number(jjbForm.j1NonHeinousBoys12to15-0)+Number(jjbForm.j2HeinousBoys12to15-0)+
                                Number(jjbForm.j1NonHeinousBoys16to18-0)+Number(jjbForm.j2HeinousBoys16to18-0)+
                                Number(jjbForm.j1NonHeinousBoysGreaterThan18-0)+Number(jjbForm.j2HeinousBoysGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                     <td><input disabled id="j3TotalGirls7to11"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousGirls7to11-0)+Number(jjbForm.j2HeinousGirls7to11-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                     <td><input disabled id="j3TotalGirls12to15"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousGirls12to15-0)+Number(jjbForm.j2HeinousGirls12to15-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                     <td><input disabled id="j3TotalGirls16to18"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousGirls16to18-0)+Number(jjbForm.j2HeinousGirls16to18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                    <td><input disabled id="j3TotalGirlsGreaterThan18"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousGirlsGreaterThan18-0)+Number(jjbForm.j2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                     <td><input disabled id="j3TotalGirlsTotal"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousGirls7to11-0)+Number(jjbForm.j2HeinousGirls7to11-0)+
                                Number(jjbForm.j1NonHeinousGirls12to15-0)+Number(jjbForm.j2HeinousGirls12to15-0)+
                                Number(jjbForm.j1NonHeinousGirls16to18-0)+Number(jjbForm.j2HeinousGirls16to18-0)+
                                Number(jjbForm.j1NonHeinousGirlsGreaterThan18-0)+Number(jjbForm.j2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                        
                     <td><input disabled id="j3TotalGrandTotal"
                        type="text" required 
                        value="{{Number(jjbForm.j1NonHeinousBoys7to11-0)+Number(jjbForm.j2HeinousBoys7to11-0)+
                                Number(jjbForm.j1NonHeinousBoys12to15-0)+Number(jjbForm.j2HeinousBoys12to15-0)+
                                Number(jjbForm.j1NonHeinousBoys16to18-0)+Number(jjbForm.j2HeinousBoys16to18-0)+
                                Number(jjbForm.j1NonHeinousBoysGreaterThan18-0)+Number(jjbForm.j2HeinousBoysGreaterThan18-0)+
                                Number(jjbForm.j1NonHeinousGirls7to11-0)+Number(jjbForm.j2HeinousGirls7to11-0)+
                                Number(jjbForm.j1NonHeinousGirls12to15-0)+Number(jjbForm.j2HeinousGirls12to15-0)+
                                Number(jjbForm.j1NonHeinousGirls16to18-0)+Number(jjbForm.j2HeinousGirls16to18-0)+
                                Number(jjbForm.j1NonHeinousGirlsGreaterThan18-0)+Number(jjbForm.j2HeinousGirlsGreaterThan18-0)}}"
                        class="form-control inputBackground tableinputWidth removeExponentialValueE"
                        ></td>
                    </tr>
                  </tbody>
                </table>
              </div>
                    <div class="b4sectionheading" id="caseK"></div>
                            <div class="grey-header headMarg">K. Functions and Types of Orders of the
                             Board (in the reporting month)</div>   
                             
                             
                             
                             <div class="form-group labelFont spaceTop">
                                <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                    for="textinput">K.1. No. of sittings held in the month</label>
                                <div class="col-md-6">
                                    <input only-four-digit type="number" required id="k1id"
                                        ng-disabled="jjbForm.submitted"
                                        ng-model="jjbForm.k1"
                                        class="form-control inputBackground removeExponentialValueE"
                                        >
                                </div>
                            </div>  
                            <div class="borderBottomJJBsectionK"></div>
                            <div class="form-group labelFont spaceTopBorderBottom">
                                <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                    for="textinput">K.2.a. No. of Cases in which hearing was done</label>
                                <div class="col-md-6">
                                    <input only-four-digit type="number" required id="k2aId"
                                        ng-disabled="jjbForm.submitted"
                                        ng-model="jjbForm.k2a"
                                        class="form-control inputBackground removeExponentialValueE bxalgn1"
                                        >
                                </div>
                            </div>
                            <div class="borderBottomJJBsectionK"></div>
                            <div class="form-group labelFont spaceTopBorderBottom">
                                <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                    for="textinput">K.2.b. No. of Cases in which
                                    hearing was done more than 2 times </label>
                                <div class="col-md-6">
                                    <input only-four-digit type="number" required id="k2bId"
                                        ng-disabled="jjbForm.submitted"
                                        ng-model="jjbForm.k2b"
                                        class="form-control inputBackground removeExponentialValueE bxalgn1"
                                        >
                                </div>
                            </div>

                            <div class="borderBottomJJBsectionK"></div>
                            <div class="form-group labelFont spaceTopBorderBottom">
                                <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                    for="textinput">K.3.a. Inspection visit of
                                    residential facilities for children done in the reporting month
                                </label>
                                <div class="col-md-6 ">
                                    <select ng-model="jjbForm.k3a" id="k3aId" ng-disabled="jjbForm.submitted" required
                                        ng-change="resetToZerok3b(jjbForm.k3a)"
                                        class="form-control inputBackground bxalgn1">
                                        <option value="" disabled selected style="align: center;">Select</option>
                                        <option value="true">Yes</option>

                                        <option value="false">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div ng-show="jjbForm.k3a =='true'">
                                <div class="form-group labelFont ">
                                    <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                        for="textinput">K.3.b. Number of residential
                                        facilities for which inspection visit was done </label>
                                    <div class="col-md-6">
                                        <input only-four-digit ng-disabled="jjbForm.submitted" ng-required="jjbForm.k3a =='true'"
                                            type="number" ng-model="jjbForm.k3b" id="k3bId"
                                            class="form-control inputBackground">
                                    </div>
                                </div>
                            </div>
                            <div class="borderBottomJJBsectionK"></div>
                            
                            <div class="form-group labelFont spaceTopBorderBottom">
                                <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                    for="textinput">K.4.a. Regular inspection of
                                    adult jails conducted, (For verification of Children)</label>
                                <div class="col-md-6">
                                    <select ng-model="jjbForm.k4a" id="k4aId" ng-disabled="jjbForm.submitted"
                                        ng-change="resetToZerok4b(jjbForm.k4a)" required
                                        class="form-control inputBackground bxalgn1 ">
                                        <option value="" disabled selected style="align: center;">Select</option>
                                        <option value="true">Yes</option>
                                        <option value="false">No</option>
                                    </select>
                                </div>
                            </div>
                            <div ng-show="jjbForm.k4a == 'true'">
                                <div class="form-group labelFont ">
                                    <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                        for="textinput">K.4.b. Number of Regular
                                        inspection of adult jails conducted </label>
                                    <div class="col-md-6">
                                        <input ng-disabled="jjbForm.submitted" only-four-digit
                                            ng-change="resetToZeroK4c(jjbForm.k4b)" ng-required="jjbForm.k4a == 'true'"
                                            type="number" ng-model="jjbForm.k4b"
                                            class="form-control inputBackground removeExponentialValueE"
                                            >
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div ng-show="jjbForm.k4b>0">
                                <div class="form-group labelFont ">
                                    <label class="col-md-6 col-sm-6 control-label labelLeftAlign"
                                        for="textinput">K.4.c. Number of Children identified residing in adult jails</label>
                                    <div class="col-md-6">
                                        <input ng-disabled="jjbForm.submitted" only-four-digit
                                            type="number" ng-model="jjbForm.k4c" ng-required="jjbForm.k4b>0"
                                            class="form-control inputBackground removeExponentialValueE bxalgn1"
                                            >
                                    </div>
                                </div>
                            </div>
                            <div class="borderBottomJJBsectionK"></div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop" id="tableK59">
                                    <thead>
                                        <tr>
                                            <th>Details of CICL in these cases (Cumulative)</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.5. 
                                                    No. of CICL from the JJB currently residing in Observation Home</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k5aCases" ng-keyup="resetk5a(jjbForm.k5aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k5aCases"
                                                ng-init="jjbForm.k5aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k5aCases<1)||(jjbForm.k5aCases==null)" id="k5aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k5aCases" ng-model="jjbForm.k5aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k5aCases<1)||(jjbForm.k5aCases==null)" id="k5aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k5aCases"
                                                ng-model="jjbForm.k5aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k5aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k5aBoys-0)+Number(jjbForm.k5aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>

                                        <tr ng-show="jjbForm.k5aBoys+jjbForm.k5aGirls!='0'&& jjbForm.k5aCases!=0">
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.5.a. 
                                                    Name of Observation Home where CICL sent</label>
                                                </div>
                                            </td>
                                            <td colspan="4"><input ng-disabled="jjbForm.submitted" id="k5bId"
                                                address-validation ng-required="jjbForm.k5aBoys+jjbForm.k5aGirls!='0'&& jjbForm.k5aCases!=0"
                                                ng-model="jjbForm.k5b" type="text"
                                                class="form-control inputBackground tableinputWidth1">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.6. 
                                                    No. of CICL currently residing in Place of Safety</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k6Cases" ng-keyup="resetk6(jjbForm.k6Cases)"
                                                only-four-digit ng-model="jjbForm.k6Cases" type="number" required
                                                ng-init="jjbForm.k6Cases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                 
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k6Cases<1)||(jjbForm.k6Cases==null)" id="k6Boys"
                                                only-four-digit ng-model="jjbForm.k6Boys" type="number" ng-required="jjbForm.k6Cases"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k6Cases<1)||(jjbForm.k6Cases==null)" id="k6Girls"
                                                only-four-digit type="number" ng-required="jjbForm.k6Cases" ng-model="jjbForm.k6Girls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k6TotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k6Boys-0)+Number(jjbForm.k6Girls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.7. 
                                                    No. of CICL charged with more than one case</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" ng-keyup="resetk7(jjbForm.k7Cases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k7Cases" id="k7Cases"
                                                ng-init="jjbForm.k7Cases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k7Cases<1)||(jjbForm.k7Cases==null)" id="k7Boys" 
                                                only-four-digit type="number" ng-required="jjbForm.k7Cases" ng-model="jjbForm.k7Boys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k7Cases<1)||(jjbForm.k7Cases==null)" id="k7Girls"
                                                only-four-digit type="number" ng-required="jjbForm.k7Cases" ng-model="jjbForm.k7Girls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k7TotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k7Boys-0)+Number(jjbForm.k7Girls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.8. 
                                                    No. of Cases in which Adult involved</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k8Cases" ng-keyup="resetk8(jjbForm.k8Cases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k8Cases"
                                                ng-init="jjbForm.k8Cases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k8Cases<1)||(jjbForm.k8Cases==null)" id="k8Boys"
                                                only-four-digit type="number" ng-required="jjbForm.k8Cases" ng-model="jjbForm.k8Boys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k8Cases<1)||(jjbForm.k8Cases==null)" id="k8Girls"
                                                only-four-digit type="number" ng-required="jjbForm.k8Cases" ng-model="jjbForm.k8Girls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k8TotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k8Boys-0)+Number(jjbForm.k8Girls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.9. 
                                                    No. of CICL provided Free Legal Aid</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k9Cases" ng-keyup="resetk9(jjbForm.k9Cases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k9Cases"
                                                ng-init="jjbForm.k9Cases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                 ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k9Cases<1)||(jjbForm.k9Cases==null)" id="k9Boys"
                                                only-four-digit type="number" ng-required="jjbForm.k9Cases" ng-model="jjbForm.k9Boys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                 ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k9Cases<1)||(jjbForm.k9Cases==null)" id="k9Girls"
                                                only-four-digit type="number" ng-required="jjbForm.k9Cases" ng-model="jjbForm.k9Girls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                 ></td>
                                                
                                            <td><input readonly type="text" id="k9TotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k9Boys-0)+Number(jjbForm.k9Girls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.10.a. 
                                                    No. of 'Fit Persons' recognized (till date)</label>
                                                </div>
                                            </td>
                                            <td colspan="4"><input ng-disabled="jjbForm.submitted" id="k10a"
                                                only-four-digit type="number" required ng-model="jjbForm.k10a"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                 ></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.10.b.
                                                     Please enter names of fit persons (till date)</label>
                                                </div>
                                            </td>
                                            <td colspan="4"><input ng-disabled="jjbForm.submitted" id="k10b" required
                                                type="text" ng-model="jjbForm.k10b" address-validation
                                                class="form-control inputBackground tableinputWidth"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.10.c. 
                                                    No. of CICL from the JJB currently residing with fit persons </label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k10cCases" ng-keyup="resetk10c(jjbForm.k10cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k10cCases"
                                                ng-init="jjbForm.k10cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k10cCases<1)||(jjbForm.k10cCases==null)" id="k10cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k10cCases" ng-model="jjbForm.k10cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k10cCases<1)||(jjbForm.k10cCases==null)" id="k10cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k10cCases" ng-model="jjbForm.k10cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k10cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k10cBoys-0)+Number(jjbForm.k10cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.11.a. 
                                                    No. of 'Fit facility' recognized (till date)</label>
                                                </div>
                                            </td>
                                            <td colspan="4"><input ng-disabled="jjbForm.submitted" id="k11aId"
                                                only-four-digit type="number" required ng-model="jjbForm.k11a"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                 ></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.11.b. 
                                                    Please enter names of fit facilities (till date)</label>
                                                </div>
                                            </td>
                                            <td colspan="4"><input ng-disabled="jjbForm.submitted" id="k11bId"
                                                type="text" required ng-model="jjbForm.k11b" address-validation
                                                class="form-control inputBackground tableinputWidth"
                                                ></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class=" textAlign">
                                                    <label class="control-label" for="textinput">K.11.c. 
                                                    No. of CICL from the JJB currently residing with fit facility</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k11cCases" ng-keyup="resetk11c(jjbForm.k11cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k11cCases"
                                                ng-init="jjbForm.k11cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k11cCases<1)||(jjbForm.k11cCases==null)" id="k11cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k11cCases" ng-model="jjbForm.k11cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k11cCases<1)||(jjbForm.k11cCases==null)" id="k11cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k11cCases" ng-model="jjbForm.k11cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k11cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k11cBoys-0)+Number(jjbForm.k11cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="grey-header1 headMarg">K.12. CICL whose Juvenility got determined (Cumulative)</div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop" id="tableK12">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.12.a. 
                                                    No. of CICL whose juvenility got determined on the basis of Prima Facie</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k12aCases" ng-keyup="resetk12a(jjbForm.k12aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k12aCases"
                                                ng-init="jjbForm.k12aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k12aCases<1)||(jjbForm.k12aCases==null)" id="k12aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k12aCases" ng-model="jjbForm.k12aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k12aCases<1)||(jjbForm.k12aCases==null)" id="k12aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k12aCases"
                                                ng-model="jjbForm.k12aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k12aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k12aBoys-0)+Number(jjbForm.k12aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.12.b. 
                                                    No. of CICL whose juvenility got determined on the basis of Certificate</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k12bCases" ng-keyup="resetk12b(jjbForm.k12bCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k12bCases"
                                                ng-init="jjbForm.k12bCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k12bCases<1)||(jjbForm.k12bCases==null)" id="k12bBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k12bCases" ng-model="jjbForm.k12bBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k12bCases<1)||(jjbForm.k12bCases==null)" id="k12bGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k12bCases"
                                                ng-model="jjbForm.k12bGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                 
                                            <td><input readonly type="text" id="k12bTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k12bBoys-0)+Number(jjbForm.k12bGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.12.c. 
                                                    No. of CICL whose juvenility got determined on the basis of Medical Report</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k12cCases" ng-keyup="resetk12c(jjbForm.k12cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k12cCases"
                                                ng-init="jjbForm.k12cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k12cCases<1)||(jjbForm.k12cCases==null)" id="k12cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k12cCases" ng-model="jjbForm.k12cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k12cCases<1)||(jjbForm.k12cCases==null)" id="k12cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k12cCases"
                                                ng-model="jjbForm.k12cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k12cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k12cBoys-0)+Number(jjbForm.k12cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label totalFont" for="textinput">K.12. 
                                                    Total No. of CICL whose Juvenility got determined</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k12Cases" tabindex= -1 readonly
                                                type="text" value="{{Number(jjbForm.k12aCases-0)+Number(jjbForm.k12bCases-0)+Number(jjbForm.k12cCases-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted" id="k12Boys" tabindex= -1 readonly
                                                type="text" value="{{Number(jjbForm.k12aBoys-0)+Number(jjbForm.k12bBoys-0)+Number(jjbForm.k12cBoys-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted" id="k12Girls" tabindex= -1 readonly
                                                type="text"
                                                value="{{Number(jjbForm.k12aGirls-0)+Number(jjbForm.k12bGirls-0)+Number(jjbForm.k12cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle totalFont"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k12TotalCICL" tabindex= -1 readonly
                                                value="{{Number(jjbForm.k12aBoys-0)+Number(jjbForm.k12aGirls-0)+Number(jjbForm.k12bBoys-0)+Number(jjbForm.k12bGirls-0)+Number(jjbForm.k12cBoys-0)+Number(jjbForm.k12cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle totalFont">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="grey-header1 headMarg">K.13. Report of Social Investigation Report (SIR)  (Cumulative)</div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop" id="tableK13">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.13.a.
                                                     No. of SIR asked for old cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k13aCases" ng-keyup="resetk13a(jjbForm.k13aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k13aCases"
                                                ng-init="jjbForm.k13aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13aCases<1)||(jjbForm.k13aCases==null)" id="k13aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k13aCases" ng-model="jjbForm.k13aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13aCases<1)||(jjbForm.k13aCases==null)" id="k13aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k13aCases"
                                                ng-model="jjbForm.k13aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k13aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k13aBoys-0)+Number(jjbForm.k13aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.13.b.
                                                     No. of SIR submitted for old cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k13bCases" ng-keyup="resetk13b(jjbForm.k13bCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k13bCases"
                                                ng-init="jjbForm.k13bCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13bCases<1)||(jjbForm.k13bCases==null)" id="k13bBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k13bCases" ng-model="jjbForm.k13bBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13bCases<1)||(jjbForm.k13bCases==null)" id="k13bGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k13bCases"
                                                ng-model="jjbForm.k13bGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k13bTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k13bBoys-0)+Number(jjbForm.k13bGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.13.c. No. of SIR asked for new cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k13cCases" ng-keyup="resetk13c(jjbForm.k13cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k13cCases"
                                                ng-init="jjbForm.k13cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13cCases<1)||(jjbForm.k13cCases==null)" id="k13cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k13cCases" ng-model="jjbForm.k13cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13cCases<1)||(jjbForm.k13cCases==null)" id="k13cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k13cCases"
                                                ng-model="jjbForm.k13cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k13cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k13cBoys-0)+Number(jjbForm.k13cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.13.d. 
                                                    No. of SIR submitted for new cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k13dCases" ng-keyup="resetk13d(jjbForm.k13dCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k13dCases"
                                                ng-init="jjbForm.k13dCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13dCases<1)||(jjbForm.k13dCases==null)" id="k13dBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k13dCases" ng-model="jjbForm.k13dBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k13dCases<1)||(jjbForm.k13dCases==null)" id="k13dGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k13dCases"
                                                ng-model="jjbForm.k13dGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k13dTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k13dBoys-0)+Number(jjbForm.k13dGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="grey-header1 headMarg">K.14. Report of Individual Care Plan (ICP)  (Cumulative)</div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop" id="tableK14">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.14.a.  
                                                    No. of orders issued for ICP for old cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k14aCases" ng-keyup="resetk14a(jjbForm.k14aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k14aCases"
                                                ng-init="jjbForm.k14aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14aCases<1)||(jjbForm.k14aCases==null)" id="k14aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k14aCases" ng-model="jjbForm.k14aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14aCases<1)||(jjbForm.k14aCases==null)" id="k14aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k14aCases"
                                                ng-model="jjbForm.k14aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k14aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k14aBoys-0)+Number(jjbForm.k14aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.14.b. 
                                                    No. of ICPs submitted for old cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k14bCases" ng-keyup="resetk14b(jjbForm.k14bCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k14bCases"
                                                ng-init="jjbForm.k14bCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14bCases<1)||(jjbForm.k14bCases==null)" id="k14bBoys" 
                                                only-four-digit type="number" ng-required="jjbForm.k14bCases" ng-model="jjbForm.k14bBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14bCases<1)||(jjbForm.k14bCases==null)" id="k14bGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k14bCases"
                                                ng-model="jjbForm.k14bGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k14bTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k14bBoys-0)+Number(jjbForm.k14bGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.14.c. 
                                                    No. of orders issued for ICP for new cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k14cCases" ng-keyup="resetk14c(jjbForm.k14cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k14cCases"
                                                ng-init="jjbForm.k14cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14cCases<1)||(jjbForm.k14cCases==null)" id="k14cBoys" 
                                                only-four-digit type="number" ng-required="jjbForm.k14cCases" ng-model="jjbForm.k14cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14cCases<1)||(jjbForm.k14cCases==null)" id="k14cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k14cCases"
                                                ng-model="jjbForm.k14cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k14cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k14cBoys-0)+Number(jjbForm.k14cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.14.d. 
                                                    No. of ICPs submitted for new cases</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k14dCases" ng-keyup="resetk14d(jjbForm.k14dCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k14dCases"
                                                ng-init="jjbForm.k14dCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14dCases<1)||(jjbForm.k14dCases==null)" id="k14dBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k14dCases" ng-model="jjbForm.k14dBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k14dCases<1)||(jjbForm.k14dCases==null)" id="k14dGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k14dCases" 
                                                ng-model="jjbForm.k14dGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k14dTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k14dBoys-0)+Number(jjbForm.k14dGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="grey-header1 headMarg">K.15. Report of Case History Format (Cumulative)</div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop" id="tableK15">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.15.a. 
                                                    No. of orders issued for Case History (old cases)</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k15aCases" ng-keyup="resetk15a(jjbForm.k15aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k15aCases"
                                                ng-init="jjbForm.k15aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15aCases<1)||(jjbForm.k15aCases==null)" id="k15aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k15aCases" ng-model="jjbForm.k15aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                 
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15aCases<1)||(jjbForm.k15aCases==null)" id="k15aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k15aCases"
                                                ng-model="jjbForm.k15aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k15aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k15aBoys-0)+Number(jjbForm.k15aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.15.b. 
                                                    No. of Case History Formats submitted (old cases)</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k15bCases" ng-keyup="resetk15b(jjbForm.k15bCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k15bCases"
                                                ng-init="jjbForm.k15bCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15bCases<1)||(jjbForm.k15bCases==null)" id="k15bBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k15bCases" ng-model="jjbForm.k15bBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15bCases<1)||(jjbForm.k15bCases==null)" id="k15bGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k15bCases"
                                                ng-model="jjbForm.k15bGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k15bTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k15bBoys-0)+Number(jjbForm.k15bGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.15.c. 
                                                    No. of orders issued for Case History (new cases)</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k15cCases" ng-keyup="resetk15c(jjbForm.k15cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k15cCases"
                                                ng-init="jjbForm.k15cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15cCases<1)||(jjbForm.k15cCases==null)" id="k15cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k15cCases" ng-model="jjbForm.k15cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15cCases<1)||(jjbForm.k15cCases==null)" id="k15cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k15cCases"
                                                ng-model="jjbForm.k15cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k15cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k15cBoys-0)+Number(jjbForm.k15cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.15.d. 
                                                    No. of Case History Formats submitted (new cases)</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k15dCases"  ng-keyup="resetk15d(jjbForm.k15dCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k15dCases"
                                                ng-init="jjbForm.k15dCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15dCases<1)||(jjbForm.k15dCases==null)" id="k15dBoys" 
                                                only-four-digit type="number" ng-required="jjbForm.k15dCases" ng-model="jjbForm.k15dBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k15dCases<1)||(jjbForm.k15dCases==null)" id="k15dGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k15dCases"
                                                ng-model="jjbForm.k15dGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k15dTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k15dBoys-0)+Number(jjbForm.k15dGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="grey-header1 headMarg">K.16. Other Order Passed by the Board  (In the reporting month)</div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.16.a. 
                                                    No. of CICL referred for After Care</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k16aCases" ng-keyup="resetk16a(jjbForm.k16aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k16aCases"
                                                ng-init="jjbForm.k16aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16aCases<1)||(jjbForm.k16aCases==null)" id="k16aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k16aCases" ng-model="jjbForm.k16aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16aCases<1)||(jjbForm.k16aCases==null)" id="k16aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k16aCases"
                                                ng-model="jjbForm.k16aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                 
                                            <td><input readonly type="text" id="k16aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k16aBoys-0)+Number(jjbForm.k16aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.16.b. 
                                                    No. of CICL referred for Sponsorship</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k16bCases" ng-keyup="resetk16b(jjbForm.k16bCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k16bCases"
                                                ng-init="jjbForm.k16bCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16bCases<1)||(jjbForm.k16bCases==null)" id="k16bBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k16bCases" ng-model="jjbForm.k16bBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16bCases<1)||(jjbForm.k16bCases==null)" id="k16bGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k16bCases"
                                                ng-model="jjbForm.k16bGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k16bTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k16bBoys-0)+Number(jjbForm.k16bGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.16.c. 
                                                    No. of cases in which order was given to register 
                                                    FIR for offences committed against CICL</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k16cCases" ng-keyup="resetk16c(jjbForm.k16cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k16cCases"
                                                ng-init="jjbForm.k16cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16cCases<1)||(jjbForm.k16cCases==null)" id="k16cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k16cCases" ng-model="jjbForm.k16cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16cCases<1)||(jjbForm.k16cCases==null)" id="k16cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k16cCases"
                                                ng-model="jjbForm.k16cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k16cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k16cBoys-0)+Number(jjbForm.k16cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.16.d. 
                                                    No. of cases in which request was received from Child Welfare
                                                     Committee to register FIR for offences committed against CNCP </label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k16dCases" ng-keyup="resetk16d(jjbForm.k16dCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k16dCases"
                                                ng-init="jjbForm.k16dCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16dCases<1)||(jjbForm.k16dCases==null)" id="k16dBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k16dCases" ng-model="jjbForm.k16dBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16dCases<1)||(jjbForm.k16dCases==null)" id="k16dGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k16dCases"
                                                ng-model="jjbForm.k16dGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k16dTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k16dBoys-0)+Number(jjbForm.k16dGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.16.e.
                                                     No. of cases in which order was given to register FIR for 
                                                     offences committed against CNCP as requested by Child Welfare Committee</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k16eCases" ng-keyup="resetk16e(jjbForm.k16eCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k16eCases"
                                                ng-init="jjbForm.k16eCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16eCases<1)||(jjbForm.k16eCases==null)" id="k16eBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k16eCases" ng-model="jjbForm.k16eBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16eCases<1)||(jjbForm.k16eCases==null)" id="k16eGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k16eCases"
                                                ng-model="jjbForm.k16eGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k16eTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k16eBoys-0)+Number(jjbForm.k16eGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.16.f. 
                                                    No. of cases for which Rehabilitation card has been generated</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k16fCases" ng-keyup="resetk16f(jjbForm.k16fCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k16fCases"
                                                ng-init="jjbForm.k16fCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16fCases<1)||(jjbForm.k16fCases==null)" id="k16fBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k16fCases" ng-model="jjbForm.k16fBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k16fCases<1)||(jjbForm.k16fCases==null)" id="k16fGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k16fCases"
                                                ng-model="jjbForm.k16fGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k16fTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k16fBoys-0)+Number(jjbForm.k16fGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="grey-header1 headMarg">K.17. Other Order Passed by the Board  (Cumulative)</div>
                            <div class="labelFont">
                                <table class="table table-bordered table-margintop">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Cases</th>
                                            <th>Boys</th>
                                            <th>Girls</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.17.a. 
                                                    No. of CICL in whose cases Social Background Reports submitted</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k17aCases" ng-keyup="resetk17a(jjbForm.k17aCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k17aCases"
                                                ng-init="jjbForm.k17aCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17aCases<1)||(jjbForm.k17aCases==null)" id="k17aBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k17aCases" ng-model="jjbForm.k17aBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17aCases<1)||(jjbForm.k17aCases==null)" id="k17aGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k17aCases"
                                                ng-model="jjbForm.k17aGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k17aTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k17aBoys-0)+Number(jjbForm.k17aGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.17.b. 
                                                    No. of Cases in which police has submitted the Final Form</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k17bCases"  ng-keyup="resetk17b(jjbForm.k17bCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k17bCases"
                                                ng-init="jjbForm.k17bCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17bCases<1)||(jjbForm.k17bCases==null)" id="k17bBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k17bCases" ng-model="jjbForm.k17bBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17bCases<1)||(jjbForm.k17bCases==null)" id="k17bGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k17bCases"
                                                ng-model="jjbForm.k17bGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k17bTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k17bBoys-0)+Number(jjbForm.k17bGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.17.c. 
                                                    No. of CICL residing in Observation Home found to be above 18 years by the Board</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k17cCases" ng-keyup="resetk17c(jjbForm.k17cCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k17cCases"
                                                ng-init="jjbForm.k17cCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17cCases<1)||(jjbForm.k17cCases==null)" id="k17cBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k17cCases" ng-model="jjbForm.k17cBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17cCases<1)||(jjbForm.k17cCases==null)" id="k17cGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k17cCases"
                                                ng-model="jjbForm.k17cGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k17cTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k17cBoys-0)+Number(jjbForm.k17cGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.17.d. 
                                                    No. of cases in which Case Monitoring sheet maintained in 
                                                    Individual file by JJB</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k17dCases" ng-keyup="resetk17d(jjbForm.k17dCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k17dCases"
                                                ng-init="jjbForm.k17dCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17dCases<1)||(jjbForm.k17dCases==null)" id="k17dBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k17dCases" ng-model="jjbForm.k17dBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17dCases<1)||(jjbForm.k17dCases==null)" id="k17dGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k17dCases"
                                                ng-model="jjbForm.k17dGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k17dTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k17dBoys-0)+Number(jjbForm.k17dGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="textAlign">
                                                    <label class="control-label" for="textinput">K.17.e. 
                                                    Total no. of cases linked with Track Child Portal (cumulative)</label>
                                                </div>
                                            </td>
                                            <td><input ng-disabled="jjbForm.submitted" id="k17eCases" ng-keyup="resetk17e(jjbForm.k17eCases)"
                                                only-four-digit type="number" required ng-model="jjbForm.k17eCases"
                                                ng-init="jjbForm.k17eCases=null"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17eCases<1)||(jjbForm.k17eCases==null)" id="k17eBoys"
                                                only-four-digit type="number" ng-required="jjbForm.k17eCases" ng-model="jjbForm.k17eBoys"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input ng-disabled="jjbForm.submitted||(jjbForm.k17eCases<1)||(jjbForm.k17eCases==null)" id="k17eGirls"
                                                only-four-digit type="number" ng-required="jjbForm.k17eCases"
                                                ng-model="jjbForm.k17eGirls"
                                                class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                ></td>
                                                
                                            <td><input readonly type="text" id="k17eTotalCICL" tabindex= -1
                                                value="{{Number(jjbForm.k17eBoys-0)+Number(jjbForm.k17eGirls-0)}}"
                                                class="form-control inputBackground tableinputWidth readonlyStyle">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="b4sectionheading" id="caseL"></div>
                            <div class="grey-header headMarg">L. Training on JJ System (In the Reporting Month)</div>
                            <div class="form-group labelFont sectionMarginTop borderBottom">
                                <label
                                    class="col-md-6 col-sm-6  control-label labelLeftAlign marginBottomTop "
                                    for="textinput">L.1. Was the training held on JJ system ?</label>
                                <div class="col-md-6 marginBottomTop">
                                    <select  ng-disabled="jjbForm.submitted" required
                                       ng-change=resetToZeroaccd(jjbForm.l1WasTrainingHeldJJSysytem)
                                        ng-model="jjbForm.l1WasTrainingHeldJJSysytem"
                                        class="form-control inputBackground">
                                        <option value="" disabled selected>Select</option>
                                        <option value="true">Yes</option>
                                        <option value="false">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div ng-show="jjbForm.l1WasTrainingHeldJJSysytem =='true'">
                                    <div class="form-group labelFont">
                                        <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                            for="textinput"> L.1.a. Number of Training held (Should be more than zero)
                                        </label>
                                        <div class="col-md-6"> 
                                            <input ng-disabled="jjbForm.submitted" limit-to="2" only-four-digit
                                                type="number" required  ng-model="jjbForm.l1aNoOfTraining"
                                                ng-blur="validateNoOfTraining(jjbForm.l1aNoOfTraining)"
                                                class="form-control inputBackground removeExponentialValueE"
                                                id="l1aNoOfTraining">
                                        </div>
                                    </div>
                                
                                <!-- -Accordion Starting -->
                                <div class="panel-group" id="accordion" role="tablist"
                                    aria-multiselectable="true"  >
                                    <div class="panel panel-default"
                                        ng-repeat="jjbTrainingDetails in jjbTrainingDetailsRepetitionArray track by $index">
                                        <div class="panel-heading" role="tab"
                                            onclick="changeIcon(this)" id="{{'heading'+$index}}">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse"
                                                    ng-click="initializeDatePicker($index)"
                                                    data-parent="#accordion" href="{{'#collapse'+$index}}"
                                                    aria-expanded="true" aria-controls="collapseOne"> <i
                                                    class="more-less glyphicon glyphicon-plus"></i>Traning
                                                    Details {{$index+1}}
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="{{'collapse'+$index}}"
                                            class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="form-group labelFont marginBottomInAccordion">
                                                    <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                                        for="textinput"> L.1.b.&nbsp;Duration of Training
                                                        (no. of days) </label>
                                                    <div class="col-md-6">
                                                        <input limit-to="2" type="number" 
                                                            ng-disabled="jjbForm.submitted" only-four-digits
                                                            max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].durationTraining"
                                                            class="form-control inputBackgroundgeneral removeExponentialValueE">
                                                    </div>
                                                </div>
                                                <div class="form-group labelFont">

                                                    <label class="col-md-6  col-sm-6  control-label labelLeftAlign"
                                                        for="textinput"> L.1.c. Training From </label>
                                                    <div class="col-md-6" style="display: inline-flex;">
                                                        <input type="text" id="trainingFromDatepicker{{$index}}"
                                                            readonly ng-click="openFromDatePicker1($index)"
                                                            ng-disabled="jjbForm.submitted"
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].trainingFromDate"
                                                            class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
                                                            class="fa fa-calendar fa-5x"  id="trainingFromDatepicker1{{$index}}"
                                                            style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                    </div>

                                                </div>
                                                <div class="form-group labelFont">

                                                    <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                                        for="textinput"> L.1.d. Training To </label>
                                                    <div class="col-md-6" style="display: inline-flex;">
                                                        <input type="text" id="trainingToDatepicker{{$index}}"
                                                        	ng-disabled="jjbForm.submitted"
                                                            readonly ng-click="openToDatePicker1($index)"
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].trainingToDate"
                                                            class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
                                                            class="fa fa-calendar fa-5x" id="trainingToDatepicker1{{$index}}"
                                                            style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                    </div>

                                                </div>
                                                <div class="form-group labelFont">
                                                    <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                                        for="textinput"> L.1.e.&nbsp;Training organised by
                                                    </label>
                                                    <div class="col-md-6">
                                                        <select
                                                            ng-change="resetAccordionOthers1(jjbTrainingDetails)"
                                                            ng-disabled="jjbForm.submitted"
                                                            ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
                                                            ng-value="item.typeDetailsId"
                                                            class="form-control inputBackgroundgeneral">
                                                            <option value="" disabled selected>Select</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group labelFont"
                                                    ng-show="jjbTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 4">
                                                    <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                                        for="textinput">If training
                                                        organised by other, Please specify </label>
                                                    <div class="col-md-6">
                                                        <input type="text" ng-disabled="jjbForm.submitted" address-validation
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].traingOrganisedbyOthers"
                                                            class="form-control inputBackgroundgeneral">
                                                    </div>
                                                </div>

                                                <div class="form-group labelFont">
                                                    <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                                        for="textinput"> L.1.f.&nbsp;Topic of training </label>
                                                        
                                                         <div class="col-md-6 topicOftrainingListJJb">
                                                                 
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="JJActRule" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totJjAct"> <label
                                                                            for="JJActRule"> JJ Act/Rule </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="LawsandICPS" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totChildRelatedLaws"> <label
                                                                            for="LawsandICPS"> Child related Laws and ICPS </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="POCSOAct" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totPosco"> <label
                                                                            for="POCSOAct"> POCSO Act </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="CPMISTrackchildCLTSTrackchild" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totTrackChild"> <label
                                                                            for="CPMISTrackchildCLTSTrackchild"> Track child</label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="Combinedtraining" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
                                                                            for="Combinedtraining"> Combined training </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="CPMISTrackchildCLTS" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totClts"> <label
                                                                            for="CPMISTrackchildCLTS"> CLTS </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="CPMISTrackchildCPMIS" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totCpmis"> <label
                                                                            for="CPMISTrackchildCPMIS"> CPMIS </label>
                                                                    </div>
                                                                </li>
                                                                 <li>
                                                                    <div class="checkboxstyle">
                                                                        <input id="Others" type="checkbox" ng-disabled="jjbForm.submitted"
                                                                        ng-click="clearTopicOfTrainingOthers(jjbTrainingDetailsRepetitionArray[$index])"
                                                                        ng-model="jjbTrainingDetailsRepetitionArray[$index].totOthers"> <label
                                                                            for="Others"> Others </label>
                                                                    </div>
                                                                </li>
                                                                    </ul>
                                                                 </div>
                                                        
                                                </div>

                                                <div class="form-group labelFont"
                                                    ng-show="jjbTrainingDetailsRepetitionArray[$index].totOthers">
                                                    <label class="col-md-6 col-sm-6  control-label labelLeftAlign"
                                                        for="textinput">If topic of training
                                                        is other, Please specify </label>
                                                    <div class="col-md-6">
                                                        <input type="text" ng-disabled="jjbForm.submitted" address-validation
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].totOthersSpecify"
                                                            class="form-control inputBackgroundgeneral">
                                                    </div>
                                                </div>

                                                <div class="form-group labelFont">
                                                <div class="col-md-12">
                                                    <label class="col-md-6 control-label labelLeftAlign paddingLeftLable totalFont" 
                                                        for="textinput">L.1.g.&nbsp;Training attended by</label>
                                                        
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop trainigAttend nopersonsTrainedCCI totalFont"
                                                        for="textinput">Number of persons trained</label></div>
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">PM </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digit
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabPm"
                                                            ng-disabled="jjbForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> Members </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digit
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabMembers"
                                                            ng-disabled="jjbForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> Bench Clerk </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digit
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabBenchClerk"
                                                            ng-disabled="jjbForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> Assistant cum Data entry Operator</label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digit
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabAssistantCumDataEntryOperator"
                                                            ng-disabled="jjbForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> Panel Lawyer</label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digit
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabPanelLawyer"
                                                            ng-disabled="jjbForm.submitted"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput"> Others </label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="number"  only-four-digit
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabOthers"
                                                            ng-disabled="jjbForm.submitted" ng-keyup="resetAccG($index);"
                                                            class="form-control inputBackground removeExponentialValueE">
                                                    </div>
                                                </div>
                                                
                                                <div ng-show="jjbTrainingDetailsRepetitionArray[$index].tabOthers>0"
                                                    class="form-group labelFont sectionMarginTop  traningattnedlist">
                                                    <label
                                                        class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                                        for="textinput">If training attended by other, Please specify</label>
                                                    <div class="col-md-6 marginBottomTop">
                                                        <input type="text" address-validation
                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].tabOthersSpecify"
                                                            ng-disabled="jjbForm.submitted"
                                                            class="form-control inputBackgroundgeneral">
                                                    </div>
                                                </div>
                                                    </div>  
                                                        
                                                        
                                                        
                                                        
<!--                                                    <div class="col-md-6"> -->
<!--                                                        <select ng-disabled="jjbForm.submitted" -->
<!--                                                            ng-options="item as item.typeDetailsName for item in trainingAttendedBy" -->
<!--                                                            ng-model="jjbTrainingDetailsRepetitionArray[$index].j1fTrainingAttenedBy" -->
<!--                                                            ng-value="item.typeDetailsId" -->
<!--                                                            class="form-control inputBackgroundgeneral"><option -->
<!--                                                                value="" disabled selected>Select</option> -->
<!--                                                        </select> -->
<!--                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left adddingdetails">
                                    <div class="addingnewdetails-container">
                                        <div id="trainingDetailserror" class="error-style"></div>
                                        <button type="button" class="addingnewdetails" ng-disabled="jjbForm.submitted"
                                            ng-click="addNewDetails()" style="margin-left: 0px;">
                                            +</button>
                                        <button type="button" class="addingnewdetails" ng-disabled="jjbForm.submitted"
                                            ng-show="jjbTrainingDetailsRepetitionArray.length > 1"
                                            ng-click="deleteConfirm()">-</button>
                                        <div id="maximumLimit10Error" class="error-style"></div>
                                    </div>
                                </div>
                                </div>

                                <!--                            <!- --Accordion End -->
                            </div>
                            <br> <br> <br> <br>&nbsp;<br> <br>
                            <br> <br> 
                            
                            <br>
                        </form>
                    </div>
                </div>
                <!-- ---type -->
            </div>
        </div>
    </div>

    <!-- -Modal Start -->
    <div class="modal fade" id="confirmationModalForJJB"
        data-keyboard="false" data-backdrop="static" tabindex="-1"
        role="dialog">
        <div class="modal-dialog">

            <div class="col-md-12 modal-content modalView">
                <div class="modal-header succesmodal">
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
    
    <div class="modal fade autoSaveModal" id="successModalForAutoSaveJJB"
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
    <!-- --Modal for Submit  -->
    <div class="modal fade" id="confirmationModalForJJBSUBMIT"
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
                            ng-click="saveJJB(jjbForm, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
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
                            ng-click="deleteAccordion()" data-dismiss="modal"
                            aria-hidden="true">OK</button>
                        <button id="button3id" name="button3id"
                            class="btn btn-info bigbutton" type="submit" class="close"
                            data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="ErrAlertModal" class="modal" role="dialog" data-backdrop=""
         data-keyboard="false">
        <div class="modal-dialog">
            Modal content
            <div class="modal-content">
                <div class="modal-body text-center">
                    
                    <div class="errorbody">{{alertMessage}}</div>
                    <div class="errorbody" style="height:10px">{{}}</div>
                    <button type="button" class="btn errorOk" data-dismiss="modal" aria-hidden="true">close</button>
                </div>
            </div>
        </div>
    </div> -->

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
                                   ng-click="test()" data-dismiss="modal" aria-hidden="true">SAVE</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
    <!-- ends -->
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
        var app = angular.module('jjbApp', ['angular-md5']);
        var cpmisApp = angular.module('jjbApp');
    </script>
    <script src="resources/js/controllers/jjbController.js"></script>
    <script src="resources/js/jsFunctions/jjbJsFunctions.js"></script>
    <script src="resources/services/commonService.js"></script>
    <script src="resources/js/angular-md5.js"></script>
    <jsp:include page="fragments/footer.jsp" />

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
    
    <script type='text/javascript'>
        $(function() {
            $(window).scroll(function(event) {
                if ($('#gi').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 0
                    }, 0);
                } else if ($('#casea').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 29
                    }, 0);
                } else if ($('#caseb').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 69
                    }, 0);
                } else if ($('#casec').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 125
                    }, 0);
                } else if ($('#cased').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 165
                    }, 0);
                } else if ($('#casee').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 195
                    }, 0);
                }else if ($('#casef').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 220
                    }, 0);
                }else if ($('#caseg').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 263
                    }, 0);
                }else if ($('#caseh').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 305
                    }, 0);
                }else if ($('#casei').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 360
                    }, 0);
                }else if ($('#casej').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 415
                    }, 0);
                }else if ($('#casek').hasClass('active')) {
                    $('#sectionindctr').animate({
                        scrollTop : 460
                    }, 0);
                }
            });
        });
    </script>
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
    $('#jjbFormDetails').on('focus', 'input[type=number]', function (e) {
          $(this).on('DOMMouseScroll mousewheel.disableScroll', function (e) {
            e.preventDefault()
          })
        })
        $(document).ready(function() {
            
            
            //$(".slideMenu").css("height", $(window).height() - 75);
            if($(window).width() <= 1024){
                $(".slideMenu").css("height", "auto");
            }
            $(".menuSlideBtn button").click(function(e) {
                $(".slideMenu").animate({
                    left : 0
                }, 500);
                e.stopPropagation();
            });
            $('body').click(function(evt){    
                   if(evt.target.id == "slideMenu")
                      return;
                   //For descendants of menu_content being clicked, remove this check if you do not want to put constraint on descendants.
                   else if($(evt.target).closest('#slideMenu').length)
                      return;             

                  //Do processing of click event here for every element except with id menu_content
                   else{
                       $("#slideMenu").animate({
                            left: "-250px"
                        }, 500);
                   }
            });
            $(".slide-menu-icon").click(function(){
                $(".slideMenu").animate({
                    left:"-250px"
                }, 500);
            });
        
                 $("input[type='number']").bind('copy paste', function (e) {
                    e.preventDefault();
                 }); 
                 
             $("input[type='number']").keypress(function(event) {
                 if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57) && (event.which < 96 || event.which > 105)) {
                    return false;
                }
              }); 
            });
    
    </script>
</body>
</html>