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
<title>Specialized Adoption Agency</title>
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
.accordbtn {
	text-align: center;
	background-color: #41c484;
	color: #fff;
	text-decoration: none !important;
    width: 144px !important;
    height:35px !important;
}

.accordbtn:disabled,
.accordbtn[disabled]{
  border: 1px solid #333;
  background-color: #eee;
  color: #666666;
  cursor:no-drop;
}
.autoSaveModal{
   z-index: 9998; 
}

</style>
     
</head>
<body ng-app="cpmisApp" ng-controller="saaController" id="SAA_Controller" class="ng-cloak"
     data-spy="scroll" data-target="#myScrollspy" data-offset="20">
     <!-- spinner -->
     <div id="spinner" class="loader" style="display: none;"></div>
     <div id="loader-mask" class="loader" style="display: none;"></div>
     <!-- /spinner -->
     <jsp:include page="fragments/header.jsp" />
     <div class="b4sectionheading" id="gInfo"></div>
     <!--      <div class="container"> -->
     <div class="row marginspc">
     
     <!---------------- section for sticky nav menu ----------------------------->
     
      <form class="form-horizontal" name="saaFormDetails" data-toggle="validator" role="form"
                              id="saaFormDetails">
          <nav class="col-md-2 sectionBoxShdw" id="myScrollspy">
               <h5 class="cwcHeading">Specialized Adoption Agency<br> Monthly Report</h5>
               
               <ul class="nav nav-pills nav-stacked sectionList flexcroll" id="sectionindctr">
                    <li id="gi" class="active sectionUlist active1"><a
                         href="#gInfo"><span class="leftmargin"></span>General
                              Information </a></li>
                    <li id="casea" class="sectionUlist"><a href="#caseA">A.
                              Details of Adoption</a></li>
                    <li id="caseb" class="sectionUlist"><a href="#caseB">B. Children on the First day of the reporting month </a></li>
                    <li id="casec" class="sectionUlist"><a href="#caseC">C.
                              New Admissions during the month</a></li>

                    <li id="cased" class="sectionUlist"><a href="#caseD">D.
                              Total Children in the reporting month</a></li>

                    <li id="casee" class="sectionUlist"><a href="#caseE">E.
                              Children moved out during the reporting month  </a></li>

                    <li id="casef" class="sectionUlist"><a href="#caseF">F.
                              Children on the Last day of the Reporting Month</a></li>

                    <li id="caseg" class="sectionUlist"><a href="#caseG">G.
                               Pendency of Cases before the CWC for Declaring a Child Legally Free for Adoption </a></li>

                    <li id="caseh" class="sectionUlist"><a href="#caseH">H.
                              Prospective Adoptive Parents (PAPs)</a></li>
                              
                     <li id="casei" class="sectionUlist"><a href="#caseI">I.
                              Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)</a></li>
                              
                    <li id="casej" class="sectionUlist"><a href="#caseJ">J.
                              Training on JJ System </a></li>
               </ul>

              
               <div ng-hide="saaForm.submitted" id="saveSubmitId">
                   <a href=""> <div class="col-md-6 savebtn locline" ng-click="checksave()">
                         <img class="saveSvg" ng-disabled="saaForm.submitted"
                              src="resources/image/svgIcons/SVG_save_icon.svg" width="18"
                              height="18" /> <h5 class="borderright1">SAVE</h5>
                    </div></a>
                    <button type="submit" class="col-md-6 savebtn submitbtn" id="clickSubmit"
                    		ng-click="saaFormDetails.$invalid ? '' : checkSubmit()">
                         <img class="saveSvg" ng-disabled="saaForm.submitted"
                         	  src="resources/image/svgIcons/SVG_submit_icon.svg" width="18"
                              height="18" /> <h5 class="borderright1 sbmtbtn">SUBMIT</h5>
                    </button>
               </div>
               <div ng-show="saaForm.submitted || saveSubmitStatus==false">
				<div class="col-md-12 savebtn"></div>
			   </div>
          </nav>
          
     <!----------------------------------------- end sticky nav menu ------------------------------->
     
     <!------------------------------------------ start data entry for saa  ----------------------------------------> 
     
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
				String sName="Bihar";
			%>
             
               <div class="formHeading1">
                    <div class="formHeading2">
                        
                              <div class="col-md-12">
                                   <h4 class="headingBottom1">
                                        Specialized Adoption Agency (SAA) Monthly Report for Month of  <b
								style="color: #41c484">&nbsp;{{saaForm.timeperiod.timePeriod}}</b>
                                   </h4>

                                  <div class="form-group labelFont">

                                        <div class="col-md-6">
                                             <input type="hidden" ng-model="saaForm.userId"
                                                   class="form-control inputBackground">
                                                   
                                              <input type="hidden" id="monName" value="<%=monthName%>"
                                              class="form-control inputBackground">
                                        </div>
                                   </div>

                         <!-- Start general information -->
                         
                          <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> State Name </label>
                                        <div class="col-md-6">
                                             <input type="text" 
                                                   disabled class="form-control inputBackgroundgeneral" value='<%=sName%>'>
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
                                             for="textinput"> Name of the Authorized Person </label>
                                        <div class="col-md-6">
                                             <input type="text" ng-model="saaForm.nameOfAuthorizedPerson" ondragstart="return false;"
                                                  fifty-characters-validation ng-disabled="saaForm.submitted"
                                                   required class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>

                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Designation </label>
                                        <div class="col-md-6">
                                             <input type="text" id="designation" required
                                                  ng-disabled="saaForm.submitted" ng-model="saaForm.designation"
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
                                             <input type="text" disabled
                                                  class="form-control inputBackgroundgeneral"
                                                  value="<%=ft.format(dNow)%>">

                                        </div>
                                   </div>
                                   
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Name of the SAA </label>
                                        <div class="col-md-6">
                                       		 <input type="text" id="institutionName" tabindex=-1
                                                  disabled ng-model="institutionNameList.cciName"
                                                  class="form-control  inputBackgroundgeneral">
                                             <!-- <input type="text" id="nameOfSAA" required 
                                                   ng-model="saaForm.nameOfSAA" ng-disabled="saaForm.submitted"
                                                  address-validation
                                                  class="form-control inputBackgroundgeneral"> -->
                                        </div>
                                   </div>
								<div class="col-md-6" style="display: none;">
									<input name="userId" type="number" id="uId" value='${userId}'>${userId}
									<input type="number" id="monthDays" value='<%=daysInMonth%>'>
								</div>

                                  
                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Total capacity</label>
                                        <div class="col-md-6">
                                             <input type="number"  ng-disabled="saaForm.submitted" id="totalCapacity" only-four-digits
                                                   ng-model="saaForm.totalCapacity" required
                                                   class="form-control inputBackgroundgeneral">
                                        </div>
                                   </div>

                                   <div class="form-group labelFont">
                                        <label class="col-md-6 control-label labelLeftAlign"
                                             for="textinput"> Address of the SAA</label>
                                        <div class="col-md-6" rows="6" cols="80">
                                             <textarea type="text" id="addressOfSaa" style="resize:none;"
                                                  ng-disabled="saaForm.submitted" address-validation
                                                  ng-model="saaForm.addressOfSAA"
                                                  required class="form-control inputBackgroundgeneral">
                                        </textarea>
                                        </div>
                                   </div>

							<!-- <div class="form-group labelFont">
								<label class="col-md-6 control-label labelLeftAlign"
									for="textinput"> Date of visit </label>
								<div class="col-md-6" style="display: inline-flex;">
									<input type="text" id="dataOfVisit" readonly
										ng-model="saaForm.dateOfVisit" ng-disabled="saaForm.submitted"
										class="form-control inputBackgroundgeneral"><i
										class="fa fa-calendar fa-5x" id="dataOfVisit1"
										style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
								</div>
							</div> -->
							<!-- end general information -->   
                    
                    <!-- Start A section  -->     
                                   
                                   <div class="b4sectionheading" id="caseA"></div>
                                   <div class="grey-header headMarg">A. Details of Adoption</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Total Number of Adoption</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>A. Adoption</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                     <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.1. No. of Adoptions (u/s 58/59) - In Country</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1BoysZeroToTwo" only-four-digits
                                                            ng-model="saaForm.a_1BoysZeroToTwo" required  ng-change="checkAll1Boys0to2()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1BoysTwoToFour" only-four-digits
                                                            ng-model="saaForm.a_1BoysTwoToFour" required ng-change="checkAll1Boys2to4()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1BoysFourToSix" only-four-digits
                                                            ng-model="saaForm.a_1BoysFourToSix" required ng-change="checkAll1Boys4to6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1BoysGreaterThanSix" only-four-digits
                                                            ng-model="saaForm.a_1BoysGreaterThanSix" required ng-change="checkAll1BoysgreaterThan6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a_1BoysTotal" 
                                                            disabled value ="{{Number(saaForm.a_1BoysZeroToTwo-0) +Number(saaForm.a_1BoysTwoToFour-0) + Number(saaForm.a_1BoysFourToSix-0) + Number(saaForm.a_1BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth"
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1GirlsZeroToTwo"  only-four-digits
                                                       		ng-model="saaForm.a_1GirlsZeroToTwo" required ng-change="checkAll1Girls0to2()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1GirlsTwoToFour" required
                                                            ng-model="saaForm.a_1GirlsTwoToFour"  only-four-digits ng-change="checkAll1Girls2to4()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1GirlsFourToSix" required
                                                            ng-model="saaForm.a_1GirlsFourToSix"  only-four-digits ng-change="checkAll1Girls4to6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_1GirlsGreaterThanSix" only-four-digits
                                                            ng-model="saaForm.a_1GirlsGreaterThanSix" required ng-change="checkAll1GirlsgreaterThan6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a_1GirlsTotal" 
                                                             value ="{{Number(saaForm.a_1GirlsZeroToTwo-0) +Number(saaForm.a_1GirlsTwoToFour-0) +Number(saaForm.a_1GirlsFourToSix-0) + Number(saaForm.a_1GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="a_1GrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.a_1BoysZeroToTwo-0) +Number(saaForm.a_1BoysTwoToFour-0) + Number(saaForm.a_1BoysFourToSix-0) + Number(saaForm.a_1BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a_1GirlsZeroToTwo-0) +Number(saaForm.a_1GirlsTwoToFour-0) +Number(saaForm.a_1GirlsFourToSix-0) + Number(saaForm.a_1GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2. No. of Adoptions (u/s 58/59) - Inter Country</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_2BoysZeroToTwo" only-four-digits
                                                            ng-model="saaForm.a_2BoysZeroToTwo" required ng-change="checkAll2Boys0to2()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_2BoysTwoToFour" only-four-digits
                                                            ng-model="saaForm.a_2BoysTwoToFour" required ng-change="checkAll2Boys2to4()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_2BoysFourToSix" only-four-digits
                                                            ng-model="saaForm.a_2BoysFourToSix" required ng-change="checkAll2Boys4to6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_2BoysGreaterThanSix" only-four-digits
                                                            ng-model="saaForm.a_2BoysGreaterThanSix" required ng-change="checkAll2BoysgreaterThan6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a_2BoysTotal" 
                                                             value ="{{Number(saaForm.a_2BoysZeroToTwo-0) + Number(saaForm.a_2BoysTwoToFour-0) + Number(saaForm.a_2BoysFourToSix-0) + Number(saaForm.a_2BoysGreaterThanSix-0)}}" 
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_2GirlsZeroToTwo" only-four-digits
                                                            ng-model="saaForm.a_2GirlsZeroToTwo" required ng-change="checkAll2Girls0to2()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="a_2GirlsTwoToFour" only-four-digits
                                                            ng-model="saaForm.a_2GirlsTwoToFour" required ng-change="checkAll2Girls2to4()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_2GirlsFourToSix"
                                                            ng-model="saaForm.a_2GirlsFourToSix" required ng-change="checkAll2Girls4to6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_2GirlsGreaterThanSix"
                                                            ng-model="saaForm.a_2GirlsGreaterThanSix" required ng-change="checkAll2GirlsgreaterThan6()"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a_2GirlsTotal" 
                                                             value ="{{Number(saaForm.a_2GirlsZeroToTwo-0) +Number(saaForm.a_2GirlsTwoToFour-0) + Number(saaForm.a_2GirlsFourToSix-0) + Number(saaForm.a_2GirlsGreaterThanSix-0)}}" 
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a_2GrandTotal"
                                                             value="{{Number(saaForm.a_2BoysZeroToTwo-0) + Number(saaForm.a_2BoysTwoToFour-0) + Number(saaForm.a_2BoysFourToSix-0) + Number(saaForm.a_2BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a_2GirlsZeroToTwo-0) +Number(saaForm.a_2GirlsTwoToFour-0) + Number(saaForm.a_2GirlsFourToSix-0) + Number(saaForm.a_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>A.3. Total no. of Adoptions</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="a_3BoysZeroToTwo"
                                                             disabled value ="{{Number(saaForm.a_1BoysZeroToTwo-0) + Number(saaForm.a_2BoysZeroToTwo-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3BoysTwoToFour"
                                                             disabled value ="{{Number(saaForm.a_1BoysTwoToFour-0) +Number(saaForm.a_2BoysTwoToFour-0) }}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3BoysFourToSix"
                                                            value ="{{Number(saaForm.a_1BoysFourToSix-0) + Number(saaForm.a_2BoysFourToSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3BoysGreaterThanSix"
                                                            value ="{{Number(saaForm.a_1BoysGreaterThanSix-0)+ Number(saaForm.a_2BoysGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3BoysTotal"  
                                                             value ="{{Number(saaForm.a_1BoysZeroToTwo-0) +Number(saaForm.a_1BoysTwoToFour-0) + Number(saaForm.a_1BoysFourToSix-0) + Number(saaForm.a_1BoysGreaterThanSix-0)+
                                                             		   Number(saaForm.a_2BoysZeroToTwo-0) + Number(saaForm.a_2BoysTwoToFour-0) + Number(saaForm.a_2BoysFourToSix-0) + Number(saaForm.a_2BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                            ></td>
                                                       <td><input type="text" id="a_3GirlsZeroToTwo"
                                                            value ="{{Number(saaForm.a_1GirlsZeroToTwo-0) +Number(saaForm.a_2GirlsZeroToTwo-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3GirlsTwoToFour"
                                                            value ="{{Number(saaForm.a_1GirlsTwoToFour-0) + Number(saaForm.a_2GirlsTwoToFour-0)}}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3GirlsFourToSix"
                                                            value ="{{Number(saaForm.a_1GirlsFourToSix-0) + Number(saaForm.a_2GirlsFourToSix-0)}}" disabled 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3GirlsGreaterThanSix"
                                                            value ="{{Number(saaForm.a_1GirlsGreaterThanSix-0)+Number(saaForm.a_2GirlsGreaterThanSix-0) }}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_3GirlsTotal" disabled
                                                             value ="{{Number(saaForm.a_1GirlsZeroToTwo-0) +Number(saaForm.a_1GirlsTwoToFour-0) +Number(saaForm.a_1GirlsFourToSix-0) + Number(saaForm.a_1GirlsGreaterThanSix-0)+
                                                             		   Number(saaForm.a_2GirlsZeroToTwo-0) +Number(saaForm.a_2GirlsTwoToFour-0) + Number(saaForm.a_2GirlsFourToSix-0) + Number(saaForm.a_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                       <td><input type="text" disabled id="a_3GrandTotal"
                                                             value="{{Number(saaForm.a_1BoysZeroToTwo-0) +Number(saaForm.a_1BoysTwoToFour-0) + Number(saaForm.a_1BoysFourToSix-0) + Number(saaForm.a_1BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a_1GirlsZeroToTwo-0) +Number(saaForm.a_1GirlsTwoToFour-0) +Number(saaForm.a_1GirlsFourToSix-0) + Number(saaForm.a_1GirlsGreaterThanSix-0)+
                                                             		  Number(saaForm.a_2BoysZeroToTwo-0) + Number(saaForm.a_2BoysTwoToFour-0) + Number(saaForm.a_2BoysFourToSix-0) + Number(saaForm.a_2BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a_2GirlsZeroToTwo-0) +Number(saaForm.a_2GirlsTwoToFour-0) + Number(saaForm.a_2GirlsFourToSix-0) + Number(saaForm.a_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Adoption of Children with special needs</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>A.a. Adoption</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.a.1. No. of Adoptions (u/s 58/59) - In Country</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1BoysZeroToTwo"
                                                            ng-model="saaForm.a_A1BoysZeroToTwo" required ng-change="check1AA1for0To2Boys('a_A1BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1BoysTwoToFour"
                                                            ng-model="saaForm.a_A1BoysTwoToFour" required ng-change="check1AA1for2To4Boys('a_A1BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1BoysFourToSix"
                                                            ng-model="saaForm.a_A1BoysFourToSix" required ng-change="check1AA1for4To6Boys('a_A1BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1BoysGreaterThanSix"
                                                            ng-model="saaForm.a_A1BoysGreaterThanSix" required ng-change="check1AA1forGreaterThan6Boys('a_A1BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a_A1BoysTotal" 
                                                            value ="{{Number(saaForm.a_A1BoysZeroToTwo-0) + Number(saaForm.a_A1BoysTwoToFour-0) + Number(saaForm.a_A1BoysFourToSix-0) + Number(saaForm.a_A1BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1GirlsZeroToTwo"
                                                            ng-model="saaForm.a_A1GirlsZeroToTwo" required ng-change="check1AA1for0To2Girls('a_A1GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1GirlsTwoToFour"
                                                            ng-model="saaForm.a_A1GirlsTwoToFour" required ng-change="check1AA1for2To4Girls('a_A1GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1GirlsFourToSix"
                                                            ng-model="saaForm.a_A1GirlsFourToSix" required ng-change="check1AA1for4To6Girls('a_A1GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A1GirlsGreaterThanSix"
                                                            ng-model="saaForm.a_A1GirlsGreaterThanSix" required ng-change="check1AA1forGreaterThan6Girls('a_A1GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a_A1GirlsTotal" 
                                                             value ="{{Number(saaForm.a_A1GirlsZeroToTwo-0) + Number(saaForm.a_A1GirlsTwoToFour-0) +Number(saaForm.a_A1GirlsFourToSix-0) + Number(saaForm.a_A1GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="a_A1GrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.a_A1BoysZeroToTwo-0) + Number(saaForm.a_A1BoysTwoToFour-0) + Number(saaForm.a_A1BoysFourToSix-0) + Number(saaForm.a_A1BoysGreaterThanSix-0) +
                                                             		  Number(saaForm.a_A1GirlsZeroToTwo-0) + Number(saaForm.a_A1GirlsTwoToFour-0) +Number(saaForm.a_A1GirlsFourToSix-0) + Number(saaForm.a_A1GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.a.2. No. of Adoptions (u/s 58/59) - Inter Country</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2BoysZeroToTwo"
                                                            ng-model="saaForm.a_A2BoysZeroToTwo" required ng-change="check2AA1for0To2Boys('a_A2BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2BoysTwoToFour"
                                                            ng-model="saaForm.a_A2BoysTwoToFour" required ng-change="check2AA1for2To4Boys('a_A2BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2BoysFourToSix"
                                                            ng-model="saaForm.a_A2BoysFourToSix" required ng-change="check2AA1for4To6Boys('a_A2BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2BoysGreaterThanSix"
                                                            ng-model="saaForm.a_A2BoysGreaterThanSix" required ng-change="check2AA1forGreaterThan6Boys('a_A2BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a_A2BoysTotal" disabled
                                                              value ="{{Number(saaForm.a_A2BoysZeroToTwo-0)+Number(saaForm.a_A2BoysTwoToFour-0)+Number(saaForm.a_A2BoysFourToSix-0)+Number(saaForm.a_A2BoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2GirlsZeroToTwo"
                                                            ng-model="saaForm.a_A2GirlsZeroToTwo" required ng-change="check2AA1for0To2Girls('a_A2GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2GirlsTwoToFour"
                                                            ng-model="saaForm.a_A2GirlsTwoToFour" required ng-change="check2AA1for2To4Girls('a_A2GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2GirlsFourToSix"
                                                            ng-model="saaForm.a_A2GirlsFourToSix" required ng-change="check2AA1for4To6Girls('a_A2GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a_A2GirlsGreaterThanSix"
                                                            ng-model="saaForm.a_A2GirlsGreaterThanSix" required ng-change="check2AA1forGreaterThan6Girls('a_A2GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a_A2GirlsTotal"
                                                             value ="{{Number(saaForm.a_A2GirlsZeroToTwo-0)+Number(saaForm.a_A2GirlsTwoToFour-0)+Number(saaForm.a_A2GirlsFourToSix-0)+Number(saaForm.a_A2GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a_A2GrandTotal"
                                                             value="{{Number(saaForm.a_A2BoysZeroToTwo-0)+Number(saaForm.a_A2BoysTwoToFour-0)+Number(saaForm.a_A2BoysFourToSix-0)+Number(saaForm.a_A2BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a_A2GirlsZeroToTwo-0)+Number(saaForm.a_A2GirlsTwoToFour-0)+Number(saaForm.a_A2GirlsFourToSix-0)+Number(saaForm.a_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                        <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>A.a.3. Total no. of Adoptions</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="a_A3BoysZeroToTwo"
                                                            disabled value ="{{Number(saaForm.a_A1BoysZeroToTwo-0) + Number(saaForm.a_A2BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3BoysTwoToFour"
                                                            disabled value ="{{Number(saaForm.a_A1BoysTwoToFour-0) +Number(saaForm.a_A2BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3BoysFourToSix"
                                                            value ="{{Number(saaForm.a_A1BoysFourToSix-0) +Number(saaForm.a_A2BoysFourToSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3BoysGreaterThanSix"
                                                            value ="{{Number(saaForm.a_A1BoysGreaterThanSix-0) +Number(saaForm.a_A2BoysGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3BoysTotal"  
                                                             value ="{{Number(saaForm.a_A1BoysZeroToTwo-0) + Number(saaForm.a_A1BoysTwoToFour-0) + Number(saaForm.a_A1BoysFourToSix-0) + Number(saaForm.a_A1BoysGreaterThanSix-0) +
                                                            		   Number(saaForm.a_A2BoysZeroToTwo-0)+Number(saaForm.a_A2BoysTwoToFour-0)+Number(saaForm.a_A2BoysFourToSix-0)+Number(saaForm.a_A2BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3GirlsZeroToTwo"
                                                           value ="{{Number(saaForm.a_A1GirlsZeroToTwo-0) + Number(saaForm.a_A2GirlsZeroToTwo-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3GirlsTwoToFour"
                                                            value ="{{Number(saaForm.a_A1GirlsTwoToFour-0) + Number(saaForm.a_A2GirlsTwoToFour-0)}}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3GirlsFourToSix"
                                                           value ="{{Number(saaForm.a_A1GirlsFourToSix-0) + Number(saaForm.a_A2GirlsFourToSix-0)}}" disabled 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3GirlsGreaterThanSix"
                                                           value ="{{Number(saaForm.a_A1GirlsGreaterThanSix-0)+Number(saaForm.a_A2GirlsGreaterThanSix-0)}}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a_A3GirlsTotal" disabled
                                                            value ="{{Number(saaForm.a_A1GirlsZeroToTwo-0) + Number(saaForm.a_A1GirlsTwoToFour-0) +Number(saaForm.a_A1GirlsFourToSix-0) + Number(saaForm.a_A1GirlsGreaterThanSix-0)+
                                                           			  Number(saaForm.a_A2GirlsZeroToTwo-0)+Number(saaForm.a_A2GirlsTwoToFour-0)+Number(saaForm.a_A2GirlsFourToSix-0)+Number(saaForm.a_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                       <td><input type="text" disabled id="a_A3GrandTotal"
                                                             value="{{Number(saaForm.a_A1BoysZeroToTwo-0) + Number(saaForm.a_A1BoysTwoToFour-0) + Number(saaForm.a_A1BoysFourToSix-0) + Number(saaForm.a_A1BoysGreaterThanSix-0) +
                                                             		  Number(saaForm.a_A1GirlsZeroToTwo-0) + Number(saaForm.a_A1GirlsTwoToFour-0) +Number(saaForm.a_A1GirlsFourToSix-0) + Number(saaForm.a_A1GirlsGreaterThanSix-0)+
                                                             		  Number(saaForm.a_A2BoysZeroToTwo-0)+Number(saaForm.a_A2BoysTwoToFour-0)+Number(saaForm.a_A2BoysFourToSix-0)+Number(saaForm.a_A2BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a_A2GirlsZeroToTwo-0)+Number(saaForm.a_A2GirlsTwoToFour-0)+Number(saaForm.a_A2GirlsFourToSix-0)+Number(saaForm.a_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Relative Adoption</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>A.1. Adoption</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.1.1. No. of Adoptions (u/s 58/59) - In Country</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1BoysZeroToTwo"
                                                            ng-model="saaForm.a1_1BoysZeroToTwo" required ng-change="check1AA1for0To2Boys('a1_1BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1BoysTwoToFour"
                                                            ng-model="saaForm.a1_1BoysTwoToFour" required ng-change="check1AA1for2To4Boys('a1_1BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1BoysFourToSix"
                                                            ng-model="saaForm.a1_1BoysFourToSix" required ng-change="check1AA1for4To6Boys('a1_1BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1BoysGreaterThanSix"
                                                            ng-model="saaForm.a1_1BoysGreaterThanSix" required ng-change="check1AA1forGreaterThan6Boys('a1_1BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a1_1BoysTotal" 
                                                            value ="{{Number(saaForm.a1_1BoysZeroToTwo-0)+Number(saaForm.a1_1BoysTwoToFour-0)+Number(saaForm.a1_1BoysFourToSix-0)+Number(saaForm.a1_1BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1GirlsZeroToTwo"
                                                            ng-model="saaForm.a1_1GirlsZeroToTwo" required ng-change="check1AA1for0To2Girls('a1_1GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1GirlsTwoToFour"
                                                            ng-model="saaForm.a1_1GirlsTwoToFour" required ng-change="check1AA1for2To4Girls('a1_1GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1GirlsFourToSix"
                                                            ng-model="saaForm.a1_1GirlsFourToSix" required ng-change="check1AA1for4To6Girls('a1_1GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_1GirlsGreaterThanSix"
                                                            ng-model="saaForm.a1_1GirlsGreaterThanSix" required ng-change="check1AA1forGreaterThan6Girls('a1_1GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a1_1GirlsTotal" 
                                                            value ="{{Number(saaForm.a1_1GirlsZeroToTwo-0)+Number(saaForm.a1_1GirlsTwoToFour-0)+Number(saaForm.a1_1GirlsFourToSix-0)+Number(saaForm.a1_1GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="a1_1GrandTotal"
                                                            disabled
                                                            value="{{Number(saaForm.a1_1BoysZeroToTwo-0)+Number(saaForm.a1_1BoysTwoToFour-0)+Number(saaForm.a1_1BoysFourToSix-0)+Number(saaForm.a1_1BoysGreaterThanSix-0)+
                                                            		 Number(saaForm.a1_1GirlsZeroToTwo-0)+Number(saaForm.a1_1GirlsTwoToFour-0)+Number(saaForm.a1_1GirlsFourToSix-0)+Number(saaForm.a1_1GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.1.2. No. of Adoptions (u/s 58/59) - Inter Country</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2BoysZeroToTwo"
                                                            ng-model="saaForm.a1_2BoysZeroToTwo" required ng-change="check2AA1for0To2Boys('a1_2BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2BoysTwoToFour"
                                                            ng-model="saaForm.a1_2BoysTwoToFour" required ng-change="check2AA1for2To4Boys('a1_2BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2BoysFourToSix"
                                                            ng-model="saaForm.a1_2BoysFourToSix" required ng-change="check2AA1for4To6Boys('a1_2BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2BoysGreaterThanSix"
                                                            ng-model="saaForm.a1_2BoysGreaterThanSix" required ng-change="check2AA1forGreaterThan6Boys('a1_2BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a1_2BoysTotal"
                                                             value ="{{Number(saaForm.a1_2BoysZeroToTwo-0)+Number(saaForm.a1_2BoysTwoToFour-0)+Number(saaForm.a1_2BoysFourToSix-0)+Number(saaForm.a1_2BoysGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2GirlsZeroToTwo"
                                                            ng-model="saaForm.a1_2GirlsZeroToTwo" required ng-change="check2AA1for0To2Girls('a1_2GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2GirlsTwoToFour"
                                                            ng-model="saaForm.a1_2GirlsTwoToFour" required ng-change="check2AA1for2To4Girls('a1_2GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2GirlsFourToSix"
                                                            ng-model="saaForm.a1_2GirlsFourToSix" required ng-change="check2AA1for4To6Girls('a1_2GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_2GirlsGreaterThanSix"
                                                            ng-model="saaForm.a1_2GirlsGreaterThanSix" required ng-change="check2AA1forGreaterThan6Girls('a1_2GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a1_2GirlsTotal"
                                                              value ="{{Number(saaForm.a1_2GirlsZeroToTwo-0)+Number(saaForm.a1_2GirlsTwoToFour-0)+Number(saaForm.a1_2GirlsFourToSix-0)+Number(saaForm.a1_2GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a1_2GrandTotal"
                                                            value="{{Number(saaForm.a1_2BoysZeroToTwo-0)+Number(saaForm.a1_2BoysTwoToFour-0)+Number(saaForm.a1_2BoysFourToSix-0)+Number(saaForm.a1_2BoysGreaterThanSix-0)+
                                                            		 Number(saaForm.a1_2GirlsZeroToTwo-0)+Number(saaForm.a1_2GirlsTwoToFour-0)+Number(saaForm.a1_2GirlsFourToSix-0)+Number(saaForm.a1_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                        <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>A.1.3. Total no. of Adoptions</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="a1_3BoysZeroToTwo"
                                                            disabled value ="{{Number(saaForm.a1_1BoysZeroToTwo-0)+Number(saaForm.a1_2BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3BoysTwoToFour"
                                                            disabled value ="{{Number(saaForm.a1_1BoysTwoToFour-0)+Number(saaForm.a1_2BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3BoysFourToSix"
                                                             value ="{{Number(saaForm.a1_1BoysFourToSix-0)+Number(saaForm.a1_2BoysFourToSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3BoysGreaterThanSix"
                                                            value ="{{Number(saaForm.a1_1BoysGreaterThanSix-0)+Number(saaForm.a1_2BoysGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3BoysTotal"  
                                                            value ="{{Number(saaForm.a1_1BoysZeroToTwo-0)+Number(saaForm.a1_1BoysTwoToFour-0)+Number(saaForm.a1_1BoysFourToSix-0)+Number(saaForm.a1_1BoysGreaterThanSix-0)+
                                                            		  Number(saaForm.a1_2BoysZeroToTwo-0)+Number(saaForm.a1_2BoysTwoToFour-0)+Number(saaForm.a1_2BoysFourToSix-0)+Number(saaForm.a1_2BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3GirlsZeroToTwo"
                                                           value ="{{Number(saaForm.a1_1GirlsZeroToTwo-0)+Number(saaForm.a1_2GirlsZeroToTwo-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3GirlsTwoToFour"
                                                            value ="{{Number(saaForm.a1_1GirlsTwoToFour-0)+Number(saaForm.a1_2GirlsTwoToFour-0)}}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3GirlsFourToSix"
                                                             value ="{{Number(saaForm.a1_1GirlsFourToSix-0)+Number(saaForm.a1_2GirlsFourToSix-0)}}" disabled 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3GirlsGreaterThanSix"
                                                            value ="{{Number(saaForm.a1_1GirlsGreaterThanSix-0)+Number(saaForm.a1_2GirlsGreaterThanSix-0)}}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_3GirlsTotal" disabled
                                                             value ="{{Number(saaForm.a1_1GirlsZeroToTwo-0)+Number(saaForm.a1_1GirlsTwoToFour-0)+Number(saaForm.a1_1GirlsFourToSix-0)+Number(saaForm.a1_1GirlsGreaterThanSix-0)+
                                                             		   Number(saaForm.a1_2GirlsZeroToTwo-0)+Number(saaForm.a1_2GirlsTwoToFour-0)+Number(saaForm.a1_2GirlsFourToSix-0)+Number(saaForm.a1_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                       <td><input type="text" disabled id="a1_3GrandTotal"
                                                             value="{{Number(saaForm.a1_1BoysZeroToTwo-0)+Number(saaForm.a1_1BoysTwoToFour-0)+Number(saaForm.a1_1BoysFourToSix-0)+Number(saaForm.a1_1BoysGreaterThanSix-0)+
                                                            		 Number(saaForm.a1_1GirlsZeroToTwo-0)+Number(saaForm.a1_1GirlsTwoToFour-0)+Number(saaForm.a1_1GirlsFourToSix-0)+Number(saaForm.a1_1GirlsGreaterThanSix-0)+
                                                            		 Number(saaForm.a1_2BoysZeroToTwo-0)+Number(saaForm.a1_2BoysTwoToFour-0)+Number(saaForm.a1_2BoysFourToSix-0)+Number(saaForm.a1_2BoysGreaterThanSix-0)+
                                                            		 Number(saaForm.a1_2GirlsZeroToTwo-0)+Number(saaForm.a1_2GirlsTwoToFour-0)+Number(saaForm.a1_2GirlsFourToSix-0)+Number(saaForm.a1_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Adoption through SAA-CCIs Linkage</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>A.1.a. Adoption</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.1.a.1. No. of Adoptions (u/s 58/59) - In Country</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1BoysZeroToTwo"
                                                            ng-model="saaForm.a1_A1BoysZeroToTwo" required ng-change="check1AA1for0To2Boys('a1_A1BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1BoysTwoToFour"
                                                            ng-model="saaForm.a1_A1BoysTwoToFour" required ng-change="check1AA1for2To4Boys('a1_A1BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1BoysFourToSix"
                                                            ng-model="saaForm.a1_A1BoysFourToSix" required ng-change="check1AA1for4To6Boys('a1_A1BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1BoysGreaterThanSix"
                                                            ng-model="saaForm.a1_A1BoysGreaterThanSix"  required ng-change="check1AA1forGreaterThan6Boys('a1_A1BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a1_A1BoysTotal" 
                                                            value ="{{Number(saaForm.a1_A1BoysZeroToTwo-0)+Number(saaForm.a1_A1BoysTwoToFour-0)+Number(saaForm.a1_A1BoysFourToSix-0)+Number(saaForm.a1_A1BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1GirlsZeroToTwo"
                                                            ng-model="saaForm.a1_A1GirlsZeroToTwo" required ng-change="check1AA1for0To2Girls('a1_A1GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1GirlsTwoToFour"
                                                            ng-model="saaForm.a1_A1GirlsTwoToFour" required ng-change="check1AA1for2To4Girls('a1_A1GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1GirlsFourToSix"
                                                            ng-model="saaForm.a1_A1GirlsFourToSix" required ng-change="check1AA1for4To6Girls('a1_A1GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A1GirlsGreaterThanSix"
                                                            ng-model="saaForm.a1_A1GirlsGreaterThanSix" required ng-change="check1AA1forGreaterThan6Girls('a1_A1GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a1_A1GirlsTotal" 
                                                              value ="{{Number(saaForm.a1_A1GirlsZeroToTwo-0)+Number(saaForm.a1_A1GirlsTwoToFour-0)+Number(saaForm.a1_A1GirlsFourToSix-0)+Number(saaForm.a1_A1GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="a1_A1GrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.a1_A1BoysZeroToTwo-0)+Number(saaForm.a1_A1BoysTwoToFour-0)+Number(saaForm.a1_A1BoysFourToSix-0)+Number(saaForm.a1_A1BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a1_A1GirlsZeroToTwo-0)+Number(saaForm.a1_A1GirlsTwoToFour-0)+Number(saaForm.a1_A1GirlsFourToSix-0)+Number(saaForm.a1_A1GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.1.a.2. No. of Adoptions (u/s 58/59) - Inter Country</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2BoysZeroToTwo"
                                                            ng-model="saaForm.a1_A2BoysZeroToTwo" required ng-change="check2AA1for0To2Boys('a1_A2BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2BoysTwoToFour"
                                                            ng-model="saaForm.a1_A2BoysTwoToFour" required ng-change="check2AA1for2To4Boys('a1_A2BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2BoysFourToSix"
                                                            ng-model="saaForm.a1_A2BoysFourToSix" required ng-change="check2AA1for4To6Boys('a1_A2BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2BoysGreaterThanSix"
                                                            ng-model="saaForm.a1_A2BoysGreaterThanSix" required ng-change="check2AA1forGreaterThan6Boys('a1_A2BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a1_A2BoysTotal" disabled
                                                             value ="{{Number(saaForm.a1_A2BoysZeroToTwo-0)+Number(saaForm.a1_A2BoysTwoToFour-0)+Number(saaForm.a1_A2BoysFourToSix-0)+Number(saaForm.a1_A2BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2GirlsZeroToTwo"
                                                            ng-model="saaForm.a1_A2GirlsZeroToTwo" required ng-change="check2AA1for0To2Girls('a1_A2GirlsZeroToTwo')"
                                                            
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2GirlsTwoToFour"
                                                            ng-model="saaForm.a1_A2GirlsTwoToFour" required ng-change="check2AA1for2To4Girls('a1_A2GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2GirlsFourToSix"
                                                            ng-model="saaForm.a1_A2GirlsFourToSix" required ng-change="check2AA1for4To6Girls('a1_A2GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a1_A2GirlsGreaterThanSix"
                                                            ng-model="saaForm.a1_A2GirlsGreaterThanSix" required ng-change="check2AA1forGreaterThan6Girls('a1_A2GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a1_A2GirlsTotal"
                                                             value ="{{Number(saaForm.a1_A2GirlsZeroToTwo-0)+Number(saaForm.a1_A2GirlsTwoToFour-0)+Number(saaForm.a1_A2GirlsFourToSix-0)+Number(saaForm.a1_A2GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a1_A2GrandTotal"
                                                             value="{{Number(saaForm.a1_A2BoysZeroToTwo-0)+Number(saaForm.a1_A2BoysTwoToFour-0)+Number(saaForm.a1_A2BoysFourToSix-0)+Number(saaForm.a1_A2BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a1_A2GirlsZeroToTwo-0)+Number(saaForm.a1_A2GirlsTwoToFour-0)+Number(saaForm.a1_A2GirlsFourToSix-0)+Number(saaForm.a1_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>A.1.a.3. Total no. of Adoptions</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="a1_A3BoysZeroToTwo" 
                                                            disabled value ="{{Number(saaForm.a1_A1BoysZeroToTwo-0)+Number(saaForm.a1_A2BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3BoysTwoToFour"
                                                             disabled value ="{{Number(saaForm.a1_A1BoysTwoToFour-0)+Number(saaForm.a1_A2BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3BoysFourToSix"
                                                           value ="{{Number(saaForm.a1_A1BoysFourToSix-0)+Number(saaForm.a1_A2BoysFourToSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3BoysGreaterThanSix"
                                                             value ="{{Number(saaForm.a1_A1BoysGreaterThanSix-0)+Number(saaForm.a1_A2BoysGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3BoysTotal"  
                                                            value ="{{Number(saaForm.a1_A1BoysZeroToTwo-0)+Number(saaForm.a1_A1BoysTwoToFour-0)+Number(saaForm.a1_A1BoysFourToSix-0)+Number(saaForm.a1_A1BoysGreaterThanSix-0)+
                                                            		 Number(saaForm.a1_A2BoysZeroToTwo-0)+Number(saaForm.a1_A2BoysTwoToFour-0)+Number(saaForm.a1_A2BoysFourToSix-0)+Number(saaForm.a1_A2BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3GirlsZeroToTwo"
                                                            value ="{{Number(saaForm.a1_A1GirlsZeroToTwo-0)+Number(saaForm.a1_A2GirlsZeroToTwo-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3GirlsTwoToFour"
                                                            value ="{{Number(saaForm.a1_A1GirlsTwoToFour-0)+Number(saaForm.a1_A2GirlsTwoToFour-0)}}"  disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3GirlsFourToSix"
                                                           value ="{{Number(saaForm.a1_A1GirlsFourToSix-0)+Number(saaForm.a1_A2GirlsFourToSix-0)}}" disabled 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3GirlsGreaterThanSix"
                                                            value ="{{Number(saaForm.a1_A1GirlsGreaterThanSix-0)+Number(saaForm.a1_A2GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="a1_A3GirlsTotal" disabled
                                                             value ="{{Number(saaForm.a1_A1GirlsZeroToTwo-0)+Number(saaForm.a1_A1GirlsTwoToFour-0)+Number(saaForm.a1_A1GirlsFourToSix-0)+Number(saaForm.a1_A1GirlsGreaterThanSix-0)+
                                                             		   Number(saaForm.a1_A2GirlsZeroToTwo-0)+Number(saaForm.a1_A2GirlsTwoToFour-0)+Number(saaForm.a1_A2GirlsFourToSix-0)+Number(saaForm.a1_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                       <td><input type="text" disabled id="a1_A3GrandTotal"
                                                             value="{{Number(saaForm.a1_A1BoysZeroToTwo-0)+Number(saaForm.a1_A1BoysTwoToFour-0)+Number(saaForm.a1_A1BoysFourToSix-0)+Number(saaForm.a1_A1BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a1_A1GirlsZeroToTwo-0)+Number(saaForm.a1_A1GirlsTwoToFour-0)+Number(saaForm.a1_A1GirlsFourToSix-0)+Number(saaForm.a1_A1GirlsGreaterThanSix-0)+
                                                             		  Number(saaForm.a1_A2BoysZeroToTwo-0)+Number(saaForm.a1_A2BoysTwoToFour-0)+Number(saaForm.a1_A2BoysFourToSix-0)+Number(saaForm.a1_A2BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a1_A2GirlsZeroToTwo-0)+Number(saaForm.a1_A2GirlsTwoToFour-0)+Number(saaForm.a1_A2GirlsFourToSix-0)+Number(saaForm.a1_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Total Number of Pre-Adoption Foster Care</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>A.2. Pre Adoption Foster Care</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                      <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.1. No. of Pre-adoption Foster Care - In State</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1BoysZeroToTwo"
                                                            ng-model="saaForm.a2_1BoysZeroToTwo" required ng-change="checkSectionA2Boys1Zeroto2('a2_1BoysZeroToTwo','a2_A1BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1BoysTwoToFour"
                                                            ng-model="saaForm.a2_1BoysTwoToFour" required ng-change="checkSectionA2Boys1twoTofour('a2_1BoysTwoToFour','a2_A1BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1BoysFourToSix"
                                                            ng-model="saaForm.a2_1BoysFourToSix" required ng-change="checkSectionA2Boys1fourTosix('a2_1BoysFourToSix','a2_A1BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_1BoysGreaterThanSix" required ng-change="checkSectionA2Boys1greaterThansix('a2_1BoysGreaterThanSix','a2_A1BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a2_1BoysTotal" 
                                                            value ="{{Number(saaForm.a2_1BoysZeroToTwo-0) + Number(saaForm.a2_1BoysTwoToFour-0) + Number(saaForm.a2_1BoysFourToSix-0) + Number(saaForm.a2_1BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_1GirlsZeroToTwo" required ng-change="checkSectionA2Girls1Zeroto2('a2_1GirlsZeroToTwo','a2_A1GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1GirlsTwoToFour"
                                                            ng-model="saaForm.a2_1GirlsTwoToFour" required ng-change="checkSectionA2Girls1twoTofour('a2_1GirlsTwoToFour','a2_A1GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1GirlsFourToSix"
                                                            ng-model="saaForm.a2_1GirlsFourToSix" required ng-change="checkSectionA2Girls1fourTosix('a2_1GirlsFourToSix','a2_A1GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_1GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_1GirlsGreaterThanSix" required ng-change="checkSectionA2Girls1greaterThansix('a2_1GirlsGreaterThanSix','a2_A1GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="a2_1GirlsTotal" 
                                                           value ="{{Number(saaForm.a2_1GirlsZeroToTwo-0) + Number(saaForm.a2_1GirlsTwoToFour-0) + Number(saaForm.a2_1GirlsFourToSix-0) + Number(saaForm.a2_1GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="a2_1GrandTotal"
                                                            disabled
                                                            value="{{Number(saaForm.a2_1BoysZeroToTwo-0) + Number(saaForm.a2_1BoysTwoToFour-0) + Number(saaForm.a2_1BoysFourToSix-0) + Number(saaForm.a2_1BoysGreaterThanSix-0)+
                                                            		 Number(saaForm.a2_1GirlsZeroToTwo-0) + Number(saaForm.a2_1GirlsTwoToFour-0) + Number(saaForm.a2_1GirlsFourToSix-0) + Number(saaForm.a2_1GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                        <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.2. No. of Pre-adoption Foster Care - Out State</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2BoysZeroToTwo"
                                                            ng-model="saaForm.a2_2BoysZeroToTwo" required ng-change="checkSectionA2Boys2Zeroto2('a2_2BoysZeroToTwo','a2_A2BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2BoysTwoToFour"
                                                            ng-model="saaForm.a2_2BoysTwoToFour" required ng-change="checkSectionA2Boys2twoTofour('a2_2BoysTwoToFour','a2_A2BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2BoysFourToSix"
                                                            ng-model="saaForm.a2_2BoysFourToSix" required ng-change="checkSectionA2Boys2fourTosix('a2_2BoysFourToSix','a2_A2BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_2BoysGreaterThanSix"  required ng-change="checkSectionA2Boys2greaterThansix('a2_2BoysGreaterThanSix','a2_A2BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a2_2BoysTotal" disabled
                                                            value ="{{Number(saaForm.a2_2BoysZeroToTwo-0) +
																	Number(saaForm.a2_2BoysTwoToFour-0) +
																	Number(saaForm.a2_2BoysFourToSix-0) +
																	Number(saaForm.a2_2BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_2GirlsZeroToTwo" required ng-change="checkSectionA2Girls2Zeroto2('a2_2GirlsZeroToTwo','a2_A2GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2GirlsTwoToFour"
                                                            ng-model="saaForm.a2_2GirlsTwoToFour" required ng-change="checkSectionA2Girls2twoTofour('a2_2GirlsTwoToFour','a2_A2GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2GirlsFourToSix"
                                                            ng-model="saaForm.a2_2GirlsFourToSix" required ng-change="checkSectionA2Girls2fourTosix('a2_2GirlsFourToSix','a2_A2GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_2GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_2GirlsGreaterThanSix" required ng-change="checkSectionA2Girls2greaterThansix('a2_2GirlsGreaterThanSix','a2_A2GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a2_2GirlsTotal"
                                                             value ="{{
																	Number(saaForm.a2_2GirlsZeroToTwo-0) +
																	Number(saaForm.a2_2GirlsTwoToFour-0) +
																	Number(saaForm.a2_2GirlsFourToSix-0) +
																	Number(saaForm.a2_2GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a2_2GrandTotal"
                                                             value="{{Number(saaForm.a2_2BoysZeroToTwo-0) +
																	Number(saaForm.a2_2BoysTwoToFour-0) +
																	Number(saaForm.a2_2BoysFourToSix-0) +
																	Number(saaForm.a2_2BoysGreaterThanSix-0)+
																	Number(saaForm.a2_2GirlsZeroToTwo-0) +
																	Number(saaForm.a2_2GirlsTwoToFour-0) +
																	Number(saaForm.a2_2GirlsFourToSix-0) +
																	Number(saaForm.a2_2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.3. No. of Pre-adoptions Foster Care - Inter Country</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3BoysZeroToTwo"
                                                            ng-model="saaForm.a2_3BoysZeroToTwo" required ng-change="checkSectionA2Boys3Zeroto2('a2_3BoysZeroToTwo','a2_A3BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3BoysTwoToFour"
                                                            ng-model="saaForm.a2_3BoysTwoToFour" required ng-change="checkSectionA2Boys3twoTofour('a2_3BoysTwoToFour','a2_A3BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3BoysFourToSix"
                                                            ng-model="saaForm.a2_3BoysFourToSix" required ng-change="checkSectionA2Boys3fourTosix('a2_3BoysFourToSix','a2_A3BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_3BoysGreaterThanSix" required ng-change="checkSectionA2Boys3greaterThansix('a2_3BoysGreaterThanSix','a2_A3BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a2_3BoysTotal" disabled
                                                            value ="{{Number(saaForm.a2_3BoysZeroToTwo-0) +
																	Number(saaForm.a2_3BoysTwoToFour-0) +
																	Number(saaForm.a2_3BoysFourToSix-0) +
																	Number(saaForm.a2_3BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_3GirlsZeroToTwo"  required ng-change="checkSectionA2Girls3Zeroto2('a2_3GirlsZeroToTwo','a2_A3GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3GirlsTwoToFour"
                                                            ng-model="saaForm.a2_3GirlsTwoToFour" required ng-change="checkSectionA2Girls3twoTofour('a2_3GirlsTwoToFour','a2_A3GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3GirlsFourToSix"
                                                            ng-model="saaForm.a2_3GirlsFourToSix" required ng-change="checkSectionA2Girls3fourTosix('a2_3GirlsFourToSix','a2_A3GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_3GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_3GirlsGreaterThanSix" required ng-change="checkSectionA2Girls3greaterThansix('a2_3GirlsGreaterThanSix','a2_A3GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a2_3GirlsTotal"
                                                            value ="{{Number(saaForm.a2_3GirlsZeroToTwo-0) +
																	Number(saaForm.a2_3GirlsTwoToFour-0) +
																	Number(saaForm.a2_3GirlsFourToSix-0) +
																	Number(saaForm.a2_3GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a2_3GrandTotal"
                                                             value="{{Number(saaForm.a2_3BoysZeroToTwo-0) +
																	Number(saaForm.a2_3BoysTwoToFour-0) +
																	Number(saaForm.a2_3BoysFourToSix-0) +
																	Number(saaForm.a2_3BoysGreaterThanSix-0)+
																	Number(saaForm.a2_3GirlsZeroToTwo-0) +
																	Number(saaForm.a2_3GirlsTwoToFour-0) +
																	Number(saaForm.a2_3GirlsFourToSix-0) +
																	Number(saaForm.a2_3GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                  
                                                    <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>A.2.4. Total no. of Pre-adoptions Foster Care</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="a2_4BoysZeroToTwo"
                                                           disabled value ="{{Number(saaForm.a2_1BoysZeroToTwo-0) +Number(saaForm.a2_2BoysZeroToTwo-0) +Number(saaForm.a2_3BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4BoysTwoToFour"
                                                            disabled value ="{{Number(saaForm.a2_1BoysTwoToFour-0) +Number(saaForm.a2_2BoysTwoToFour-0) +Number(saaForm.a2_3BoysTwoToFour-0) }}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4BoysFourToSix"
                                                            disabled value ="{{Number(saaForm.a2_1BoysFourToSix-0) +Number(saaForm.a2_2BoysFourToSix-0) +Number(saaForm.a2_3BoysFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4BoysGreaterThanSix"
                                                            disabled value ="{{Number(saaForm.a2_1BoysGreaterThanSix-0)+Number(saaForm.a2_2BoysGreaterThanSix-0)+Number(saaForm.a2_3BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4BoysTotal" disabled
                                                             value ="{{Number(saaForm.a2_1BoysZeroToTwo-0) +
																	Number(saaForm.a2_1BoysTwoToFour-0) +
																	Number(saaForm.a2_1BoysFourToSix-0) +
																	Number(saaForm.a2_1BoysGreaterThanSix-0)+
																	Number(saaForm.a2_2BoysZeroToTwo-0) +
																	Number(saaForm.a2_2BoysTwoToFour-0) +
																	Number(saaForm.a2_2BoysFourToSix-0) +
																	Number(saaForm.a2_2BoysGreaterThanSix-0)+
																	Number(saaForm.a2_3BoysZeroToTwo-0) +
																	Number(saaForm.a2_3BoysTwoToFour-0) +
																	Number(saaForm.a2_3BoysFourToSix-0) +
																	Number(saaForm.a2_3BoysGreaterThanSix-0)
																	}}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4GirlsZeroToTwo"
                                                            disabled value ="{{Number(saaForm.a2_1GirlsZeroToTwo-0) +Number(saaForm.a2_2GirlsZeroToTwo-0) +Number(saaForm.a2_3GirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4GirlsTwoToFour"
                                                            disabled value ="{{Number(saaForm.a2_1GirlsTwoToFour-0) +Number(saaForm.a2_2GirlsTwoToFour-0) +Number(saaForm.a2_3GirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4GirlsFourToSix"
                                                            disabled value ="{{Number(saaForm.a2_1GirlsFourToSix-0) +Number(saaForm.a2_2GirlsFourToSix-0) +Number(saaForm.a2_3GirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4GirlsGreaterThanSix"
                                                            disabled value ="{{Number(saaForm.a2_1GirlsGreaterThanSix-0)+Number(saaForm.a2_2GirlsGreaterThanSix-0)+Number(saaForm.a2_3GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="a2_4GirlsTotal" disabled
                                                             value ="{{Number(saaForm.a2_1GirlsZeroToTwo-0) +
																	Number(saaForm.a2_1GirlsTwoToFour-0) +
																	Number(saaForm.a2_1GirlsFourToSix-0) +
																	Number(saaForm.a2_1GirlsGreaterThanSix-0)+
																	Number(saaForm.a2_2GirlsZeroToTwo-0) +
																	Number(saaForm.a2_2GirlsTwoToFour-0) +
																	Number(saaForm.a2_2GirlsFourToSix-0) +
																	Number(saaForm.a2_2GirlsGreaterThanSix-0)+
																	Number(saaForm.a2_3GirlsZeroToTwo-0) +
																	Number(saaForm.a2_3GirlsTwoToFour-0) +
																	Number(saaForm.a2_3GirlsFourToSix-0) +
																	Number(saaForm.a2_3GirlsGreaterThanSix-0)
																	}}" disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" disabled id="a2_4GrandTotal"
                                                            value="{{Number(saaForm.a2_1BoysZeroToTwo-0) +
																	Number(saaForm.a2_1BoysTwoToFour-0) +
																	Number(saaForm.a2_1BoysFourToSix-0) +
																	Number(saaForm.a2_1BoysGreaterThanSix-0)+
																	
																	Number(saaForm.a2_1GirlsZeroToTwo-0) +
																	Number(saaForm.a2_1GirlsTwoToFour-0) +
																	Number(saaForm.a2_1GirlsFourToSix-0) +
																	Number(saaForm.a2_1GirlsGreaterThanSix-0)+
																	
																	Number(saaForm.a2_2BoysZeroToTwo-0) +
																	Number(saaForm.a2_2BoysTwoToFour-0) +
																	Number(saaForm.a2_2BoysFourToSix-0) +
																	Number(saaForm.a2_2BoysGreaterThanSix-0)+
																	
																	Number(saaForm.a2_2GirlsZeroToTwo-0) +
																	Number(saaForm.a2_2GirlsTwoToFour-0) +
																	Number(saaForm.a2_2GirlsFourToSix-0) +
																	Number(saaForm.a2_2GirlsGreaterThanSix-0)+
																	
																	Number(saaForm.a2_3BoysZeroToTwo-0) +
																	Number(saaForm.a2_3BoysTwoToFour-0) +
																	Number(saaForm.a2_3BoysFourToSix-0) +
																	Number(saaForm.a2_3BoysGreaterThanSix-0)+
																	
																	Number(saaForm.a2_3GirlsZeroToTwo-0) +
																	Number(saaForm.a2_3GirlsTwoToFour-0) +
																	Number(saaForm.a2_3GirlsFourToSix-0) +
																	Number(saaForm.a2_3GirlsGreaterThanSix-0)
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages (Hint- Out of Total)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5BoysZeroToTwo"
                                                            ng-model="saaForm.a2_5BoysZeroToTwo" required ng-change="checkA2s4with5('a2_4BoysZeroToTwo','a2_5BoysZeroToTwo','A2.5 Boys(0-2)', 'A2.4 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5BoysTwoToFour"
                                                            ng-model="saaForm.a2_5BoysTwoToFour" required ng-change="checkA2s4with5('a2_4BoysTwoToFour','a2_5BoysTwoToFour','A2.5 Boys(2-4)', 'A2.4 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5BoysFourToSix"
                                                            ng-model="saaForm.a2_5BoysFourToSix" required ng-change="checkA2s4with5('a2_4BoysFourToSix','a2_5BoysFourToSix','A2.5 Boys(4-6)', 'A2.4 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_5BoysGreaterThanSix" required ng-change="checkA2s4with5('a2_4BoysGreaterThanSix','a2_5BoysGreaterThanSix','A2.5 Boys(>6)', 'A2.4 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a2_5BoysTotal" disabled
                                                             value="{{Number(saaForm.a2_5BoysZeroToTwo-0)+ Number(saaForm.a2_5BoysTwoToFour-0)+ Number(saaForm.a2_5BoysFourToSix-0)+Number(saaForm.a2_5BoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_5GirlsZeroToTwo" required ng-change="checkA2s4with5('a2_4GirlsZeroToTwo','a2_5GirlsZeroToTwo',' A2.5 Girls(0-2)', 'A2.4 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5GirlsTwoToFour"
                                                            ng-model="saaForm.a2_5GirlsTwoToFour" required ng-change="checkA2s4with5('a2_4GirlsTwoToFour','a2_5GirlsTwoToFour',' A2.5 Girls(2-4)', 'A2.4 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5GirlsFourToSix"
                                                            ng-model="saaForm.a2_5GirlsFourToSix" required ng-change="checkA2s4with5('a2_4GirlsFourToSix','a2_5GirlsFourToSix',' A2.5 Girls(4-6)', 'A2.4 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_5GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_5GirlsGreaterThanSix" required ng-change="checkA2s4with5('a2_4GirlsGreaterThanSix','a2_5GirlsGreaterThanSix',' A2.5 Girls(>6)', 'A2.4 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="a2_5GirlsTotal"
                                                             value="{{Number(saaForm.a2_5GirlsZeroToTwo-0)+ Number(saaForm.a2_5GirlsTwoToFour-0)+ Number(saaForm.a2_5GirlsFourToSix-0)+Number(saaForm.a2_5GirlsGreaterThanSix-0)}}" 
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="a2_5GrandTotal"
                                                             value="{{Number(saaForm.a2_5BoysZeroToTwo-0)+ Number(saaForm.a2_5BoysTwoToFour-0)+ Number(saaForm.a2_5BoysFourToSix-0)+Number(saaForm.a2_5BoysGreaterThanSix-0)+
                                                             Number(saaForm.a2_5GirlsZeroToTwo-0)+ Number(saaForm.a2_5GirlsTwoToFour-0)+ Number(saaForm.a2_5GirlsFourToSix-0)+Number(saaForm.a2_5GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Children with special needs</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>A.2.a. Pre Adoption Foster Care</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.a.1. No. of Pre-adoption Foster Care - In State</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1BoysZeroToTwo"
                                                            ng-model="saaForm.a2_A1BoysZeroToTwo"   ng-change="checkSectionA2ABoys1Zeroto2('a2_1BoysZeroToTwo','a2_A1BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1BoysTwoToFour"
                                                            ng-model="saaForm.a2_A1BoysTwoToFour" ng-change="checkSectionA2ABoys1twoTofour('a2_1BoysTwoToFour','a2_A1BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1BoysFourToSix"
                                                            ng-model="saaForm.a2_A1BoysFourToSix"  ng-change="checkSectionA2ABoys1fourTosix('a2_1BoysFourToSix','a2_A1BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_A1BoysGreaterThanSix"  ng-change="checkSectionA2ABoys1greaterThansix('a2_1BoysGreaterThanSix','a2_A1BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="a2_A1BoysTotal" 
                                                            value="{{Number(saaForm.a2_A1BoysZeroToTwo-0)+
																	Number(saaForm.a2_A1BoysTwoToFour-0)+
																	Number(saaForm.a2_A1BoysFourToSix-0)+
																	Number(saaForm.a2_A1BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_A1GirlsZeroToTwo"  ng-change="checkSectionA2AGirls1Zeroto2('a2_1GirlsZeroToTwo','a2_A1GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1GirlsTwoToFour"
                                                            ng-model="saaForm.a2_A1GirlsTwoToFour" ng-change="checkSectionA2AGirls1twoTofour('a2_1GirlsTwoToFour','a2_A1GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1GirlsFourToSix"
                                                            ng-model="saaForm.a2_A1GirlsFourToSix"  ng-change="checkSectionA2AGirls1fourTosix('a2_1GirlsFourToSix','a2_A1GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A1GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_A1GirlsGreaterThanSix"  ng-change="checkSectionA2AGirls1greaterThansix('a2_1GirlsGreaterThanSix','a2_A1GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="a2_A1GirlsTotal" 
                                                             value="{{Number(saaForm.a2_A1GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A1GirlsTwoToFour-0)+
																	Number(saaForm.a2_A1GirlsFourToSix-0)+
																	Number(saaForm.a2_A1GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="a2_A1GrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.a2_A1BoysZeroToTwo-0)+
																	Number(saaForm.a2_A1BoysTwoToFour-0)+
																	Number(saaForm.a2_A1BoysFourToSix-0)+
																	Number(saaForm.a2_A1BoysGreaterThanSix-0)+
																	Number(saaForm.a2_A1GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A1GirlsTwoToFour-0)+
																	Number(saaForm.a2_A1GirlsFourToSix-0)+
																	Number(saaForm.a2_A1GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.a.2. No. of Pre-adoption Foster Care - Out State</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2BoysZeroToTwo"
                                                            ng-model="saaForm.a2_A2BoysZeroToTwo" ng-change="checkSectionA2ABoys2Zeroto2('a2_2BoysZeroToTwo','a2_A2BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2BoysTwoToFour"
                                                            ng-model="saaForm.a2_A2BoysTwoToFour" ng-change="checkSectionA2ABoys2twoTofour('a2_2BoysTwoToFour','a2_A2BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2BoysFourToSix"
                                                            ng-model="saaForm.a2_A2BoysFourToSix"  ng-change="checkSectionA2ABoys2fourTosix('a2_2BoysFourToSix','a2_A2BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_A2BoysGreaterThanSix"  ng-change="checkSectionA2ABoys2greaterThansix('a2_2BoysGreaterThanSix','a2_A2BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="text" id="a2_A2BoysTotal" disabled
                                                             	value="{{Number(saaForm.a2_A2BoysZeroToTwo-0)+
																	Number(saaForm.a2_A2BoysTwoToFour-0)+
																	Number(saaForm.a2_A2BoysFourToSix-0)+
																	Number(saaForm.a2_A2BoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_A2GirlsZeroToTwo" ng-change="checkSectionA2AGirls2Zeroto2('a2_2GirlsZeroToTwo','a2_A2GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2GirlsTwoToFour"
                                                            ng-model="saaForm.a2_A2GirlsTwoToFour" ng-change="checkSectionA2AGirls2twoTofour('a2_2GirlsTwoToFour','a2_A2GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2GirlsFourToSix"
                                                            ng-model="saaForm.a2_A2GirlsFourToSix"  ng-change="checkSectionA2AGirls2fourTosix('a2_2GirlsFourToSix','a2_A2GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A2GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_A2GirlsGreaterThanSix"  ng-change="checkSectionA2AGirls2greaterThansix('a2_2GirlsGreaterThanSix','a2_A2GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                      
                                                       <td><input type="text" id="a2_A2GirlsTotal"
                                                             value="{{Number(saaForm.a2_A2GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A2GirlsTwoToFour-0)+
																	Number(saaForm.a2_A2GirlsFourToSix-0)+
																	Number(saaForm.a2_A2GirlsGreaterThanSix-0)}}" disabled
                                                             
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="a2_A2GrandTotal"
                                                             
                                                             value="{{Number(saaForm.a2_A2BoysZeroToTwo-0)+
																	Number(saaForm.a2_A2BoysTwoToFour-0)+
																	Number(saaForm.a2_A2BoysFourToSix-0)+
																	Number(saaForm.a2_A2BoysGreaterThanSix-0)+
																	Number(saaForm.a2_A2GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A2GirlsTwoToFour-0)+
																	Number(saaForm.a2_A2GirlsFourToSix-0)+
																	Number(saaForm.a2_A2GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.a.3. No. of Pre-adoptions Foster Care - Inter Country </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3BoysZeroToTwo"
                                                            ng-model="saaForm.a2_A3BoysZeroToTwo" ng-change="checkSectionA2ABoys3Zeroto2('a2_3BoysZeroToTwo','a2_A3BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3BoysTwoToFour"
                                                            ng-model="saaForm.a2_A3BoysTwoToFour"  ng-change="checkSectionA2ABoys3twoTofour('a2_3BoysTwoToFour','a2_A3BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3BoysFourToSix"
                                                            ng-model="saaForm.a2_A3BoysFourToSix"  ng-change="checkSectionA2ABoys3fourTosix('a2_3BoysFourToSix','a2_A3BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_A3BoysGreaterThanSix"  ng-change="checkSectionA2ABoys3greaterThansix('a2_3BoysGreaterThanSix','a2_A3BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A3BoysTotal"  
                                                             value="{{Number(saaForm.a2_A3BoysZeroToTwo-0)+
																	Number(saaForm.a2_A3BoysTwoToFour-0)+
																	Number(saaForm.a2_A3BoysFourToSix-0)+
																	Number(saaForm.a2_A3BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_A3GirlsZeroToTwo"  ng-change="checkSectionA2AGirls3Zeroto2('a2_3GirlsZeroToTwo','a2_A3GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3GirlsTwoToFour"
                                                            ng-model="saaForm.a2_A3GirlsTwoToFour" ng-change="checkSectionA2AGirls3twoTofour('a2_3GirlsTwoToFour','a2_A3GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3GirlsFourToSix"
                                                            ng-model="saaForm.a2_A3GirlsFourToSix" ng-change="checkSectionA2AGirls3fourTosix('a2_3GirlsFourToSix','a2_A3GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A3GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_A3GirlsGreaterThanSix" ng-change="checkSectionA2AGirls3greaterThansix('a2_3GirlsGreaterThanSix','a2_A3GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="a2_A3GirlsTotal" disabled
                                                             value="{{Number(saaForm.a2_A3GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A3GirlsTwoToFour-0)+
																	Number(saaForm.a2_A3GirlsFourToSix-0)+
																	Number(saaForm.a2_A3GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a2_A3GrandTotal"
                                                             value="{{Number(saaForm.a2_A3BoysZeroToTwo-0)+
																	Number(saaForm.a2_A3BoysTwoToFour-0)+
																	Number(saaForm.a2_A3BoysFourToSix-0)+
																	Number(saaForm.a2_A3BoysGreaterThanSix-0)+
																	Number(saaForm.a2_A3GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A3GirlsTwoToFour-0)+
																	Number(saaForm.a2_A3GirlsFourToSix-0)+
																	Number(saaForm.a2_A3GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>A.2.a.4. Total no. of Pre-adoptions Foster Care</b> </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="text" id="a2_A4BoysZeroToTwo" disabled
                                                              value="{{Number(saaForm.a2_A1BoysZeroToTwo-0)+Number(saaForm.a2_A2BoysZeroToTwo-0)+Number(saaForm.a2_A3BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4BoysTwoToFour" disabled
                                                              value="{{Number(saaForm.a2_A1BoysTwoToFour-0)+Number(saaForm.a2_A2BoysTwoToFour-0)+Number(saaForm.a2_A3BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                             
                                                       <td><input type="text" id="a2_A4BoysFourToSix" disabled
                                                              value="{{Number(saaForm.a2_A1BoysFourToSix-0)+Number(saaForm.a2_A2BoysFourToSix-0)+Number(saaForm.a2_A3BoysFourToSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4BoysGreaterThanSix" disabled
                                                              value="{{Number(saaForm.a2_A1BoysGreaterThanSix-0)+Number(saaForm.a2_A2BoysGreaterThanSix-0)+Number(saaForm.a2_A3BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4BoysTotal"  
                                                           value="{{Number(saaForm.a2_A1BoysZeroToTwo-0)+
																	Number(saaForm.a2_A1BoysTwoToFour-0)+
																	Number(saaForm.a2_A1BoysFourToSix-0)+
																	Number(saaForm.a2_A1BoysGreaterThanSix-0)+
																	Number(saaForm.a2_A2BoysZeroToTwo-0)+
																	Number(saaForm.a2_A2BoysTwoToFour-0)+
																	Number(saaForm.a2_A2BoysFourToSix-0)+
																	Number(saaForm.a2_A2BoysGreaterThanSix-0)+
																	Number(saaForm.a2_A3BoysZeroToTwo-0)+
																	Number(saaForm.a2_A3BoysTwoToFour-0)+
																	Number(saaForm.a2_A3BoysFourToSix-0)+
																	Number(saaForm.a2_A3BoysGreaterThanSix-0)
																	}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4GirlsZeroToTwo" disabled
                                                            value="{{Number(saaForm.a2_A1GirlsZeroToTwo-0)+Number(saaForm.a2_A2GirlsZeroToTwo-0)+Number(saaForm.a2_A3GirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4GirlsTwoToFour" disabled
                                                            value="{{Number(saaForm.a2_A1GirlsTwoToFour-0)+Number(saaForm.a2_A2GirlsTwoToFour-0)+Number(saaForm.a2_A3GirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4GirlsFourToSix" disabled
                                                            value="{{Number(saaForm.a2_A1GirlsFourToSix-0)+Number(saaForm.a2_A2GirlsFourToSix-0)+Number(saaForm.a2_A3GirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A4GirlsGreaterThanSix" disabled
                                                            value="{{Number(saaForm.a2_A1GirlsGreaterThanSix-0)+Number(saaForm.a2_A2GirlsGreaterThanSix-0)+Number(saaForm.a2_A3GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                     
                                                       <td><input type="text" id="a2_A4GirlsTotal" disabled
                                                             value="{{Number(saaForm.a2_A1GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A1GirlsTwoToFour-0)+
																	Number(saaForm.a2_A1GirlsFourToSix-0)+
																	Number(saaForm.a2_A1GirlsGreaterThanSix-0)+
																	Number(saaForm.a2_A2GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A2GirlsTwoToFour-0)+
																	Number(saaForm.a2_A2GirlsFourToSix-0)+
																	Number(saaForm.a2_A2GirlsGreaterThanSix-0)+
																	Number(saaForm.a2_A3GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A3GirlsTwoToFour-0)+
																	Number(saaForm.a2_A3GirlsFourToSix-0)+
																	Number(saaForm.a2_A3GirlsGreaterThanSix-0)
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a2_A4GrandTotal"
                                                             value="{{
                                                             		Number(saaForm.a2_A1BoysZeroToTwo-0)+
																	Number(saaForm.a2_A1BoysTwoToFour-0)+
																	Number(saaForm.a2_A1BoysFourToSix-0)+
																	Number(saaForm.a2_A1BoysGreaterThanSix-0)+
																	
																	Number(saaForm.a2_A1GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A1GirlsTwoToFour-0)+
																	Number(saaForm.a2_A1GirlsFourToSix-0)+
																	Number(saaForm.a2_A1GirlsGreaterThanSix-0)+
																	                                                             
                                                             		Number(saaForm.a2_A2BoysZeroToTwo-0)+
																	Number(saaForm.a2_A2BoysTwoToFour-0)+
																	Number(saaForm.a2_A2BoysFourToSix-0)+
																	Number(saaForm.a2_A2BoysGreaterThanSix-0)+
																	
																	Number(saaForm.a2_A2GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A2GirlsTwoToFour-0)+
																	Number(saaForm.a2_A2GirlsFourToSix-0)+
																	Number(saaForm.a2_A2GirlsGreaterThanSix-0)+
                                                             
                                                             		Number(saaForm.a2_A3BoysZeroToTwo-0)+
																	Number(saaForm.a2_A3BoysTwoToFour-0)+
																	Number(saaForm.a2_A3BoysFourToSix-0)+
																	Number(saaForm.a2_A3BoysGreaterThanSix-0)+
																	
																	Number(saaForm.a2_A3GirlsZeroToTwo-0)+
																	Number(saaForm.a2_A3GirlsTwoToFour-0)+
																	Number(saaForm.a2_A3GirlsFourToSix-0)+
																	Number(saaForm.a2_A3GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages</label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5BoysZeroToTwo"
                                                            ng-model="saaForm.a2_A5BoysZeroToTwo"  ng-change="checkA2s4with5('a2_A4BoysZeroToTwo','a2_A5BoysZeroToTwo','A2.a.5 Boys(0-2)','A2.a.4 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5BoysTwoToFour"
                                                            ng-model="saaForm.a2_A5BoysTwoToFour"  ng-change="checkA2s4with5('a2_A4BoysTwoToFour','a2_A5BoysTwoToFour','A2.a.5 Boys(2-4)','A2.a.4 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5BoysFourToSix"
                                                            ng-model="saaForm.a2_A5BoysFourToSix"  ng-change="checkA2s4with5('a2_A4BoysFourToSix','a2_A5BoysFourToSix','A2.a.5 Boys(4-6)','A2.a.4 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5BoysGreaterThanSix"
                                                            ng-model="saaForm.a2_A5BoysGreaterThanSix"  ng-change="checkA2s4with5('a2_A4BoysGreaterThanSix','a2_A5BoysGreaterThanSix','A2.a.5 Boys(>6)','A2.a.4 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="a2_A5BoysTotal"  
                                                             value="{{Number(saaForm.a2_A5BoysZeroToTwo-0)+Number(saaForm.a2_A5BoysTwoToFour-0)+Number(saaForm.a2_A5BoysFourToSix-0)+Number(saaForm.a2_A5BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5GirlsZeroToTwo"
                                                            ng-model="saaForm.a2_A5GirlsZeroToTwo"  ng-change="checkA2s4with5('a2_A4GirlsZeroToTwo','a2_A5GirlsZeroToTwo','A2.a.5 Girls(0-2)','A2.a.4 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5GirlsTwoToFour"
                                                            ng-model="saaForm.a2_A5GirlsTwoToFour"  ng-change="checkA2s4with5('a2_A4GirlsTwoToFour','a2_A5GirlsTwoToFour','A2.a.5 Girls(2-4)','A2.a.4 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5GirlsFourToSix"
                                                            ng-model="saaForm.a2_A5GirlsFourToSix"  ng-change="checkA2s4with5('a2_A4GirlsFourToSix','a2_A5GirlsFourToSix','A2.a.5 Girls(4-6)','A2.a.4 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="a2_A5GirlsGreaterThanSix"
                                                            ng-model="saaForm.a2_A5GirlsGreaterThanSix"  ng-change="checkA2s4with5('a2_A4GirlsGreaterThanSix','a2_A5GirlsGreaterThanSix','A2.a.5 Girls(>6)','A2.a.4 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="a2_A5GirlsTotal" disabled
                                                             value="{{Number(saaForm.a2_A5GirlsZeroToTwo-0)+Number(saaForm.a2_A5GirlsTwoToFour-0)+Number(saaForm.a2_A5GirlsFourToSix-0)+Number(saaForm.a2_A5GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  " 
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="a2_A5GrandTotal"
                                                             value="{{Number(saaForm.a2_A5BoysZeroToTwo-0)+Number(saaForm.a2_A5BoysTwoToFour-0)+Number(saaForm.a2_A5BoysFourToSix-0)+Number(saaForm.a2_A5BoysGreaterThanSix-0)+
                                                             		  Number(saaForm.a2_A5GirlsZeroToTwo-0)+Number(saaForm.a2_A5GirlsTwoToFour-0)+Number(saaForm.a2_A5GirlsFourToSix-0)+Number(saaForm.a2_A5GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                   <!-- -------------------------------- End A section-------------------------- -->

                                   <!-- -------------------------------- Start B section-------------------------- -->
                                   
                                   <div class="b4sectionheading" id="caseB"></div>
                                   <div class="grey-header headMarg">B. Children on the First day of the reporting month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Children on the First day of the reporting month</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>B. Children on the First day of the reporting month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.1. No. of Children on the First day of the reporting month(All Children SAA)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number" only-four-digits id="b1_BoysZeroToTwo"
                                                            ng-model="saaForm.b1_BoysZeroToTwo"  ng-disabled="saaForm.submitted||(saaForm.b1_BoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_BoysTwoToFour"
                                                            ng-model="saaForm.b1_BoysTwoToFour"  ng-disabled="saaForm.submitted||(saaForm.b1_BoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_BoysFourToSix"
                                                            ng-model="saaForm.b1_BoysFourToSix"  ng-disabled="saaForm.submitted||(saaForm.b1_BoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_BoysGreaterThanSix"
                                                            ng-model="saaForm.b1_BoysGreaterThanSix"  ng-disabled="saaForm.submitted||(saaForm.b1_BoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" id="b1_BoysTotal" 
                                                          	ng-model="saaForm.b1_BoysTotal"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_GirlsZeroToTwo"
                                                            ng-model="saaForm.b1_GirlsZeroToTwo"  ng-disabled="saaForm.submitted||(saaForm.b1_GirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_GirlsTwoToFour"
                                                            ng-model="saaForm.b1_GirlsTwoToFour"  ng-disabled="saaForm.submitted||(saaForm.b1_GirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_GirlsFourToSix"
                                                            ng-model="saaForm.b1_GirlsFourToSix"  ng-disabled="saaForm.submitted||(saaForm.b1_GirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" only-four-digits id="b1_GirlsGreaterThanSix"
                                                            ng-model="saaForm.b1_GirlsGreaterThanSix"  ng-disabled="saaForm.submitted||(saaForm.b1_GirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number" id="b1_GirlsTotal" 
                                                      		ng-model="saaForm.b1_GirlsTotal"
                                                           	disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number" id="b1_GrandTotal"
                                                            disabled
                                                            ng-model="saaForm.b1_GrandTotal"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">B.2. No. of  Special Need Children on the First day of the reporting month (Out of Total)</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_ABoysZeroToTwo"
                                                            ng-model="saaForm.b1_ABoysZeroToTwo"  ng-disabled="saaForm.submitted||(saaForm.b1_ABoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_ABoysTwoToFour"
                                                            ng-model="saaForm.b1_ABoysTwoToFour"  ng-disabled="saaForm.submitted||(saaForm.b1_ABoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_ABoysFourToSix"
                                                            ng-model="saaForm.b1_ABoysFourToSix"  ng-disabled="saaForm.submitted||(saaForm.b1_ABoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_ABoysGreaterThanSix"
                                                            ng-model="saaForm.b1_ABoysGreaterThanSix"  ng-disabled="saaForm.submitted||(saaForm.b1_ABoysTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" id="b1_ABoysTotal"
                                                            ng-model="saaForm.b1_ABoysTotal"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_AGirlsZeroToTwo"
                                                            ng-model="saaForm.b1_AGirlsZeroToTwo"  ng-disabled="saaForm.submitted||(saaForm.b1_AGirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_AGirlsTwoToFour"
                                                            ng-model="saaForm.b1_AGirlsTwoToFour"  ng-disabled="saaForm.submitted||(saaForm.b1_AGirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_AGirlsFourToSix"
                                                            ng-model="saaForm.b1_AGirlsFourToSix"  ng-disabled="saaForm.submitted||(saaForm.b1_AGirlsTotal<1)"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                       <td><input type="number" only-four-digits id="b1_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.b1_AGirlsGreaterThanSix" ng-disabled="saaForm.submitted||(saaForm.b1_AGirlsTotal<1)" 
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                             
                                                      
                                                       <td><input type="number"  id="b1_AGirlsTotal"
                                                            disabled
                                                          ng-model="saaForm.b1_AGirlsTotal"
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled id="b1_AGrandTotal"
                                                           ng-model="saaForm.b1_AGrandTotal"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                             </tbody>
                                        </table>
                                   </div>
                                   


                                   <!-- -----------------------------------------End B section---------------------------------------- -->


                                   <!-------------------------------------- C section ------------------------------------------>
                                   
                                   <div class="b4sectionheading" id="caseC"></div>
                                   <div class="grey-header headMarg">C. New Admissions during the month</div>
                                   
                                    <!----------------------------------------------I section----------------------------------------- -->
                                  
                                   <div class="panel-group sectionMarginTopDCPU" id="accordion1" role="tablist" ng-show="!showCDetails"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default sectionMarginTop no-child-in">
												<h3>There are no children admitted in SAA during the month</h3>
											 </div>
                                   </div>  
                                   
                                   <div class="panel-group sectionMarginTopDCPU" id="accordion" role="tablist" ng-show="showCDetails"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default sectionMarginTop" 
                                                  ng-repeat="saaSectionCDetails in saaFormCSectionRepeatationArray track by $index">
                                                  <div class="panel-heading" role="tab"
                                                       onclick="changeIcon(this)" id="{{'heading'+$index}}">
                                                       <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse"
                                                                 ng-click="initializeIDatePickers($index)"
                                                                 data-parent="#accordion" href="{{'#collapse'+$index}}"
                                                                 aria-expanded="true" aria-controls="collapseOne"> <i
                                                                 class="more-less glyphicon glyphicon-plus"></i> Child - {{$index+1}}
                                                            </a>
                                                       </h4>
                                                  </div>

                                                  <div id="{{'collapse'+$index}}"
                                                       class="panel-collapse collapse" role="tabpanel"
                                                       aria-labelledby="headingOne">
                                                      
                                                       <div class="panel-body">
                                                        <div class="row iSection-table">
                                                        <div class="col-md-6">
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.1. Name of the Child</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text"  ng-disabled="saaForm.submitted || addListStatus[$index]==false" fifty-characters-validation
                                                                      ng-model="saaFormCSectionRepeatationArray[$index].c_nameOfChild"
                                                                      class="form-control inputBackgroundgeneral_i removeExponentialValueE">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.2. Date of Birth </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="dobDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false" readonly
                                                                           ng-click="openFromDatePicker($index)"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_dateOfBirth"
                                                                           class="form-control  dobDatepicker inputBackgroundgeneral_i"><i
                                                                           class="fa fa-calendar fa-5x" id="dobDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                  <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.3. Age</label>
                                                                 <div class="col-md-6">
                                                                      <input type="number"  ng-disabled="saaForm.submitted || addListStatus[$index]==false"  
                                                                      only-two-digits 
                                                                      ng-change="changeAccordingToAge($index)"
                                                                       max="18" onKeyUp="if(Number(this.value)>Number(17)){this.value=Number(17-0);}"
                                                                      ng-model="saaFormCSectionRepeatationArray[$index].c_age" 
                                                                      class="form-control inputBackgroundgeneral inputBackgroundgeneral_i removeExponentialValueE">
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.4. Gender of the Child</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false"
                                                                           ng-options="item as item.typeDetailsName for item in childGender"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_gender"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.5. Date of Admission in SAA </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="admissionDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_dateOfAdmission"
                                                                           class="form-control dateOfAdmission inputBackgroundgeneral_i"><i
                                                                           class="fa fa-calendar fa-5x" id="admissionDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                             
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.6. Caring Registration Number</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="saaForm.submitted || addListStatus[$index]==false"
                                                                      ng-model="saaFormCSectionRepeatationArray[$index].c_caringRegNoDate"
                                                                      fifty-characters-validation-saa
                                                                      class="form-control inputBackgroundgeneral_i removeExponentialValueE">
                                                                 </div>
                                                            </div>
                                                             <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.7. Category of the Child came to SAA</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false"
                                                                           ng-options="item as item.typeDetailsName for item in childCategory"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_saaCategoryName"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                           
															<div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.8. Type of the Child</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false"
                                                                           ng-options="item as item.typeDetailsName for item in typeOfChild"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_typeOfChild"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.9. Referred by CWC (District)</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false"
                                                                           ng-options="item as item.areaName for item in district"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_referredByCwc"
                                                                           ng-value="item.areaId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.10. Date of Paper Publication </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="paperPublicationDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted || addListStatus[$index]==false" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="saaFormCSectionRepeatationArray[$index].c_dateOfpublication"
                                                                           class="form-control dateOfpublication inputBackgroundgeneral_i"><i
                                                                           class="fa fa-calendar fa-5x" id="paperPublicationDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                           
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> C.11. Remarks</label>
                                                                 <div class="col-md-6">
                                                                      <textarea type="text"  ng-disabled="saaForm.submitted || addListStatus[$index]==false"
                                                                      hundred-fifty-characters-validation-saa
                                                                      ng-model="saaFormCSectionRepeatationArray[$index].c_remarks"
                                                                      class="form-control inputBackgroundgeneral_i removeExponentialValueE"></textarea>
                                                                 </div>
                                                            </div>
                                                            <div style="height:30px !important">
                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion" >
                                                            
                                                            <button type="button" class="col-md-4 accordbtn submitbtn" 
                                                            ng-disabled="saaForm.submitted  || addListStatus[$index]==false || testbuttons[$index]==false"
										                    		 ng-click="addListChildrenOprn($index);" >
										                          <h5 >Add</h5>
										                    </button>
										                    <button type="button" class="col-md-4 accordbtn submitbtn" ng-disabled="saaForm.submitted || addListStatus[$index]==true || testbuttons[$index]==false"
		                                                            style="margin-left:10px !important"
		                                                            ng-click="checkIdStatus($index);"><h5 >Edit</h5></button>
										                     <button type="button" class="col-md-4 accordbtn submitbtn" ng-disabled="saaForm.submitted || addListStatus[$index]==true || testbuttons[$index]==false"
		                                                            ng-show="saaFormCSectionRepeatationArray.length > 1" style="margin-left:10px !important"
		                                                            ng-click="deleteConfirmC($index);"><h5 >Delete</h5></button>
                                                      		<div id="maximumLimitErrorC" class="error-style"></div>
										                   
                                                            </div>
                                                            </div>
												
                                                       </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <!-- --------Adding training details------- -->

                                             <div class="col-md-12 text-left">
                                                  <div class="addingnewdetails-container">
                                                       <div id="trainingDetailserror" class="error-style"></div>
                                                       <button type="button" class="addingnewdetails" ng-disabled="saaForm.submitted"
		                                                       ng-show="testC==true || saaForm.c6_GrandTotal>0" ng-hide="hidePlus==false"
		                                                       ng-click="loadStatusTest();addNewDetailsC();" style="margin-left: 0px;">+</button>
                                                       <button type="button" class="addingnewdetails"
	                                                           ng-show="saaFormCSectionRepeatationArray.length > 1 && addListStatus[saaFormCSectionRepeatationArray.length-1]==true"  ng-disabled="saaForm.submitted"
	                                                           ng-click="deleteConfirmCdetails()">-</button>
                                                       <div id="maximumLimitErrorI" class="error-style"></div>     
                                                      
                                                  </div>
                                             </div>
                                

                                             <!-- end ---------------------------- -->

                                        </div>
                                   <br><br>
                                   
                                    <!----------------------------------------------End I section----------------------------------------- -->
                                    
                                    
                                   
                                   <div class="labelFont">
                                        <table class="table table-bordered" id="table-c">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">All Children in SAA</th>
                                                       
                                                  </tr>
                                                  <tr>
                                                       
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>C. New Admissions during the month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  
                                                  </tr>
                                                  
                                             </thead>
                                             <tbody>

                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.1. Orphaned or Abandoned</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  disabled only-four-digits id="c1_BoysZeroToTwo" 
                                                            ng-model="saaForm.c1_BoysZeroToTwo" ng-change="checkCwithCa('c1_BoysZeroToTwo','c1_ABoysZeroToTwo','C.a.1 Boys(0-2)','C.1 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_BoysTwoToFour" 
                                                            ng-model="saaForm.c1_BoysTwoToFour" ng-change="checkCwithCa('c1_BoysTwoToFour','c1_ABoysTwoToFour','C.a.1 Boys(2-4)','C.1 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_BoysFourToSix" 
                                                            ng-model="saaForm.c1_BoysFourToSix" ng-change="checkCwithCa('c1_BoysFourToSix','c1_ABoysFourToSix','C.a.1 Boys(4-6)','C.1 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_BoysGreaterThanSix" 
                                                            ng-model="saaForm.c1_BoysGreaterThanSix" ng-change="checkCwithCa('c1_BoysGreaterThanSix','c1_ABoysGreaterThanSix','C.a.1 Boys(>6)','C.1 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c1_BoysTotal" 
                                                            value="{{Number(saaForm.c1_BoysZeroToTwo-0)+
                                                           			 Number(saaForm.c1_BoysTwoToFour-0)+
                                                           			 Number(saaForm.c1_BoysFourToSix-0)+
                                                           			 Number(saaForm.c1_BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_GirlsZeroToTwo" 
                                                            ng-model="saaForm.c1_GirlsZeroToTwo" ng-change="checkCwithCa('c1_GirlsZeroToTwo','c1_AGirlsZeroToTwo','C.a.1 Girls(0-2)','C.1 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_GirlsTwoToFour" 
                                                            ng-model="saaForm.c1_GirlsTwoToFour" ng-change="checkCwithCa('c1_GirlsTwoToFour','c1_AGirlsTwoToFour','C.a.1 Girls(2-4)','C.1 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_GirlsFourToSix"
                                                            ng-model="saaForm.c1_GirlsFourToSix"  ng-change="checkCwithCa('c1_GirlsFourToSix','c1_AGirlsFourToSix','C.a.1 Girls(4-6)','C.1 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_GirlsGreaterThanSix"
                                                            ng-model="saaForm.c1_GirlsGreaterThanSix"  ng-change="checkCwithCa('c1_GirlsGreaterThanSix','c1_AGirlsGreaterThanSix','C.a.1 Girls(>6)','C.1 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c1_GirlsTotal" 
                                                             value="{{Number(saaForm.c1_GirlsZeroToTwo-0)+
																	Number(saaForm.c1_GirlsTwoToFour-0)+
																	Number(saaForm.c1_GirlsFourToSix-0)+
																	Number(saaForm.c1_GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c1_GrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.c1_BoysZeroToTwo-0)+
                                                           			 Number(saaForm.c1_BoysTwoToFour-0)+
                                                           			 Number(saaForm.c1_BoysFourToSix-0)+
                                                           			 Number(saaForm.c1_BoysGreaterThanSix-0)+
                                                           			 Number(saaForm.c1_GirlsZeroToTwo-0)+
																	 Number(saaForm.c1_GirlsTwoToFour-0)+
																	 Number(saaForm.c1_GirlsFourToSix-0)+
																	 Number(saaForm.c1_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.2. Surrendered Children</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  disabled only-four-digits id="c2_BoysZeroToTwo"
                                                            ng-model="saaForm.c2_BoysZeroToTwo"  ng-change="checkCwithCa('c2_BoysZeroToTwo','c2_ABoysZeroToTwo','C.a.2 Boys(0-2)','C.2 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_BoysTwoToFour"
                                                            ng-model="saaForm.c2_BoysTwoToFour" ng-change="checkCwithCa('c2_BoysTwoToFour','c2_ABoysTwoToFour','C.a.2 Boys(2-4)','C.2 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_BoysFourToSix"
                                                            ng-model="saaForm.c2_BoysFourToSix"  ng-change="checkCwithCa('c2_BoysFourToSix','c2_ABoysFourToSix','C.a.2 Boys(4-6)','C.2 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td> 
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_BoysGreaterThanSix"
                                                            ng-model="saaForm.c2_BoysGreaterThanSix" ng-change="checkCwithCa('c2_BoysGreaterThanSix','c2_ABoysGreaterThanSix','C.a.2 Boys(>6)','C.2 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="text" id="c2_BoysTotal" disabled
                                                             value="{{Number(saaForm.c2_BoysZeroToTwo-0)+
																	Number(saaForm.c2_BoysTwoToFour-0)+
																	Number(saaForm.c2_BoysFourToSix-0)+
																	Number(saaForm.c2_BoysGreaterThanSix-0)}}" 
                                                             
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_GirlsZeroToTwo"
                                                            ng-model="saaForm.c2_GirlsZeroToTwo" ng-change="checkCwithCa('c2_GirlsZeroToTwo','c2_AGirlsZeroToTwo','C.a.2 Girls(0-2)','C.2 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_GirlsTwoToFour"
                                                            ng-model="saaForm.c2_GirlsTwoToFour"  ng-change="checkCwithCa('c2_GirlsTwoToFour','c2_AGirlsTwoToFour','C.a.2 Girls(2-4)','C.2 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_GirlsFourToSix"
                                                            ng-model="saaForm.c2_GirlsFourToSix" ng-change="checkCwithCa('c2_GirlsFourToSix','c2_AGirlsFourToSix','C.a.2 Girls(4-6)','C.2 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_GirlsGreaterThanSix"
                                                            ng-model="saaForm.c2_GirlsGreaterThanSix" ng-change="checkCwithCa('c2_GirlsGreaterThanSix','c2_AGirlsGreaterThanSix','C.a.2 Girls(>6)','C.2 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                      
                                                       <td><input type="text" id="c2_GirlsTotal"
                                                             value="{{Number(saaForm.c2_GirlsZeroToTwo-0)+
																	  Number(saaForm.c2_GirlsTwoToFour-0)+
																	  Number(saaForm.c2_GirlsFourToSix-0)+
																	  Number(saaForm.c2_GirlsGreaterThanSix-0)}}" 
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="c2_GrandTotal"
                                                             value="{{Number(saaForm.c2_BoysZeroToTwo-0)+
																	Number(saaForm.c2_BoysTwoToFour-0)+
																	Number(saaForm.c2_BoysFourToSix-0)+
																	Number(saaForm.c2_BoysGreaterThanSix-0)+
																	Number(saaForm.c2_GirlsZeroToTwo-0)+
																	Number(saaForm.c2_GirlsTwoToFour-0)+
																	Number(saaForm.c2_GirlsFourToSix-0)+
																	Number(saaForm.c2_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.3. Dropped in cradles</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_BoysZeroToTwo"
                                                            ng-model="saaForm.c3_BoysZeroToTwo" ng-change="checkCwithCa('c3_BoysZeroToTwo','c3_ABoysZeroToTwo','C.a.3 Boys(0-2)','C.3 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_BoysTwoToFour"
                                                            ng-model="saaForm.c3_BoysTwoToFour" ng-change="checkCwithCa('c3_BoysTwoToFour','c3_ABoysTwoToFour','C.a.3 Boys(2-4)','C.3 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_BoysFourToSix"
                                                            ng-model="saaForm.c3_BoysFourToSix" ng-change="checkCwithCa('c3_BoysFourToSix','c3_ABoysFourToSix','C.a.3 Boys(4-6)','C.3 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_BoysGreaterThanSix"
                                                            ng-model="saaForm.c3_BoysGreaterThanSix" ng-change="checkCwithCa('c3_BoysGreaterThanSix','c3_ABoysGreaterThanSix','C.a.3 Boys(>6)','C.3 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="text" id="c3_BoysTotal"  
                                                             value="{{Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c3_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_GirlsZeroToTwo"
                                                            ng-model="saaForm.c3_GirlsZeroToTwo"  ng-change="checkCwithCa('c3_GirlsZeroToTwo','c3_AGirlsZeroToTwo','C.a.3 Girls(0-2)','C.3 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_GirlsTwoToFour"
                                                            ng-model="saaForm.c3_GirlsTwoToFour" ng-change="checkCwithCa('c3_GirlsTwoToFour','c3_AGirlsTwoToFour','C.a.3 Girls(2-4)','C.3 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_GirlsFourToSix"
                                                            ng-model="saaForm.c3_GirlsFourToSix" ng-change="checkCwithCa('c3_GirlsFourToSix','c3_AGirlsFourToSix','C.a.3 Girls(4-6)','C.3 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_GirlsGreaterThanSix"
                                                            ng-model="saaForm.c3_GirlsGreaterThanSix" ng-change="checkCwithCa('c3_GirlsGreaterThanSix','c3_AGirlsGreaterThanSix','C.a.3 Girls(>6)','C.3 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="text" id="c3_GirlsTotal" disabled
                                                             value="{{Number(saaForm.c3_GirlsZeroToTwo-0)+
																	Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c3_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="c3_GrandTotal"
                                                             value="{{Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c3_GirlsZeroToTwo-0)+
																	Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c3_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                  
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.4. Received on Transfers</label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_BoysZeroToTwo"
                                                            ng-model="saaForm.c4_BoysZeroToTwo" ng-change="checkCwithCa('c4_BoysZeroToTwo','c4_ABoysZeroToTwo','C.a.4 Boys(0-2)','C.4 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_BoysTwoToFour"
                                                            ng-model="saaForm.c4_BoysTwoToFour" ng-change="checkCwithCa('c4_BoysTwoToFour','c4_ABoysTwoToFour','C.a.4 Boys(2-4)','C.4 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_BoysFourToSix"
                                                            ng-model="saaForm.c4_BoysFourToSix" ng-change="checkCwithCa('c4_BoysFourToSix','c4_ABoysFourToSix','C.a.4 Boys(4-6)','C.4 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_BoysGreaterThanSix"
                                                            ng-model="saaForm.c4_BoysGreaterThanSix" ng-change="checkCwithCa('c4_BoysGreaterThanSix','c4_ABoysGreaterThanSix','C.a.4 Boys(>6)','C.4 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c4_BoysTotal"  
                                                             value="{{Number(saaForm.c4_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_GirlsZeroToTwo"
                                                            ng-model="saaForm.c4_GirlsZeroToTwo" ng-change="checkCwithCa('c4_GirlsZeroToTwo','c4_AGirlsZeroToTwo','C.a.4 Girls(0-2)','C.4 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_GirlsTwoToFour"
                                                            ng-model="saaForm.c4_GirlsTwoToFour" ng-change="checkCwithCa('c4_GirlsTwoToFour','c4_AGirlsTwoToFour','C.a.4 Girls(2-4)','C.4 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td> 
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_GirlsFourToSix"
                                                            ng-model="saaForm.c4_GirlsFourToSix"  ng-change="checkCwithCa('c4_GirlsFourToSix','c4_AGirlsFourToSix','C.a.4 Girls(4-6)','C.4 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_GirlsGreaterThanSix"
                                                            ng-model="saaForm.c4_GirlsGreaterThanSix" ng-change="checkCwithCa('c4_GirlsGreaterThanSix','c4_AGirlsGreaterThanSix','C.a.4 Girls(>6)','C.4 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="c4_GirlsTotal" disabled
                                                             value="{{Number(saaForm.c4_GirlsZeroToTwo-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c4_GrandTotal"
                                                             value="{{Number(saaForm.c4_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_GirlsZeroToTwo-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                  
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.5. Disruptions, if any<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup></label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_BoysZeroToTwo"
                                                            ng-model="saaForm.c5_BoysZeroToTwo" ng-change="checkCwithCa('c5_BoysZeroToTwo','c5_ABoysZeroToTwo','C.a.5 Boys(0-2)','C.5 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_BoysTwoToFour"
                                                            ng-model="saaForm.c5_BoysTwoToFour"  ng-change="checkCwithCa('c5_BoysTwoToFour','c5_ABoysTwoToFour','C.a.5 Boys(2-4)','C.5 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_BoysFourToSix"
                                                            ng-model="saaForm.c5_BoysFourToSix" ng-change="checkCwithCa('c5_BoysFourToSix','c5_ABoysFourToSix','C.a.5 Boys(4-6)','C.5 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_BoysGreaterThanSix"
                                                            ng-model="saaForm.c5_BoysGreaterThanSix"  ng-change="checkCwithCa('c5_BoysGreaterThanSix','c5_ABoysGreaterThanSix','C.a.5 Boys(>6)','C.5 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c5_BoysTotal"  
                                                             value="{{Number(saaForm.c5_BoysZeroToTwo-0)+
																	Number(saaForm.c5_BoysTwoToFour-0)+
																	Number(saaForm.c5_BoysFourToSix-0)+
																	Number(saaForm.c5_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_GirlsZeroToTwo"
                                                            ng-model="saaForm.c5_GirlsZeroToTwo"  ng-change="checkCwithCa('c5_GirlsZeroToTwo','c5_AGirlsZeroToTwo','C.a.5 Girls(0-2)','C.5 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_GirlsTwoToFour"
                                                            ng-model="saaForm.c5_GirlsTwoToFour" ng-change="checkCwithCa('c5_GirlsTwoToFour','c5_AGirlsTwoToFour','C.a.5 Girls(2-4)','C.5 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_GirlsFourToSix"
                                                            ng-model="saaForm.c5_GirlsFourToSix" ng-change="checkCwithCa('c5_GirlsFourToSix','c5_AGirlsFourToSix','C.a.5 Girls(4-6)','C.5 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_GirlsGreaterThanSix"
                                                            ng-model="saaForm.c5_GirlsGreaterThanSix" ng-change="checkCwithCa('c5_GirlsGreaterThanSix','c5_AGirlsGreaterThanSix','C.a.5 Girls(>6)','C.5 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="c5_GirlsTotal" disabled
                                                             value="{{Number(saaForm.c5_GirlsZeroToTwo-0)+
																	Number(saaForm.c5_GirlsTwoToFour-0)+
																	Number(saaForm.c5_GirlsFourToSix-0)+
																	Number(saaForm.c5_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c5_GrandTotal"
                                                             value="{{Number(saaForm.c5_BoysZeroToTwo-0)+
																	Number(saaForm.c5_BoysTwoToFour-0)+
																	Number(saaForm.c5_BoysFourToSix-0)+
																	Number(saaForm.c5_BoysGreaterThanSix-0)+
																	Number(saaForm.c5_GirlsZeroToTwo-0)+
																	Number(saaForm.c5_GirlsTwoToFour-0)+
																	Number(saaForm.c5_GirlsFourToSix-0)+
																	Number(saaForm.c5_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>C.6. Total New admissions in the reporting month</b> </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="text" id="c6_BoysZeroToTwo" disabled
                                                            value="{{Number(saaForm.c1_BoysZeroToTwo-0)+Number(saaForm.c2_BoysZeroToTwo-0)+Number(saaForm.c3_BoysZeroToTwo-0)+
                                                            		Number(saaForm.c4_BoysZeroToTwo-0)+Number(saaForm.c5_BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_BoysTwoToFour" disabled
                                                            value="{{Number(saaForm.c1_BoysTwoToFour-0)+Number(saaForm.c2_BoysTwoToFour-0)+Number(saaForm.c3_BoysTwoToFour-0)+
                                                            		 Number(saaForm.c4_BoysTwoToFour-0)+Number(saaForm.c5_BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_BoysFourToSix" disabled
                                                            value="{{Number(saaForm.c1_BoysFourToSix-0)+Number(saaForm.c2_BoysFourToSix-0)+Number(saaForm.c3_BoysFourToSix-0)+
                                                           			 Number(saaForm.c4_BoysFourToSix-0)+Number(saaForm.c5_BoysFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_BoysGreaterThanSix" disabled
                                                            value="{{Number(saaForm.c1_BoysGreaterThanSix-0)+Number(saaForm.c2_BoysGreaterThanSix-0)+Number(saaForm.c3_BoysGreaterThanSix-0)+
                                                           			 Number(saaForm.c4_BoysGreaterThanSix-0)+Number(saaForm.c5_BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_BoysTotal"  
                                                             value="{{
                                                             		Number(saaForm.c1_BoysZeroToTwo-0)+
																	Number(saaForm.c1_BoysTwoToFour-0)+
																	Number(saaForm.c1_BoysFourToSix-0)+
																	Number(saaForm.c1_BoysGreaterThanSix-0)+
																	Number(saaForm.c2_BoysZeroToTwo-0)+
																	Number(saaForm.c2_BoysTwoToFour-0)+
																	Number(saaForm.c2_BoysFourToSix-0)+
																	Number(saaForm.c2_BoysGreaterThanSix-0)+
																	Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+
																	Number(saaForm.c5_BoysZeroToTwo-0)+
																	Number(saaForm.c5_BoysTwoToFour-0)+
																	Number(saaForm.c5_BoysFourToSix-0)+
																	Number(saaForm.c5_BoysGreaterThanSix-0)
                                                             }}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_GirlsZeroToTwo" disabled
                                                            value="{{Number(saaForm.c1_GirlsZeroToTwo-0)+Number(saaForm.c2_GirlsZeroToTwo-0)+Number(saaForm.c3_GirlsZeroToTwo-0)+
                                                            Number(saaForm.c4_GirlsZeroToTwo-0)+Number(saaForm.c5_GirlsZeroToTwo-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_GirlsTwoToFour" disabled
                                                            value="{{Number(saaForm.c1_GirlsTwoToFour-0)+Number(saaForm.c2_GirlsTwoToFour-0)+Number(saaForm.c3_GirlsTwoToFour-0)+
                                                            Number(saaForm.c4_GirlsTwoToFour-0)+Number(saaForm.c5_GirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_GirlsFourToSix" disabled
                                                            value="{{Number(saaForm.c1_GirlsFourToSix-0)+Number(saaForm.c2_GirlsFourToSix-0)+Number(saaForm.c3_GirlsFourToSix-0)+
                                                            Number(saaForm.c4_GirlsFourToSix-0)+Number(saaForm.c5_GirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_GirlsGreaterThanSix" disabled
                                                            value="{{Number(saaForm.c1_GirlsGreaterThanSix-0)+Number(saaForm.c2_GirlsGreaterThanSix-0)+Number(saaForm.c3_GirlsGreaterThanSix-0)+
                                                            Number(saaForm.c4_GirlsGreaterThanSix-0)+Number(saaForm.c5_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="c6_GirlsTotal" disabled
                                                             value="{{
                                                             	Number(saaForm.c1_GirlsZeroToTwo-0)+
																Number(saaForm.c1_GirlsTwoToFour-0)+
																Number(saaForm.c1_GirlsFourToSix-0)+
																Number(saaForm.c1_GirlsGreaterThanSix-0)+
                                                             	Number(saaForm.c2_GirlsZeroToTwo-0)+
																Number(saaForm.c2_GirlsTwoToFour-0)+
																Number(saaForm.c2_GirlsFourToSix-0)+
																Number(saaForm.c2_GirlsGreaterThanSix-0)+
                                                             	Number(saaForm.c3_GirlsZeroToTwo-0)+
																Number(saaForm.c3_GirlsTwoToFour-0)+
																Number(saaForm.c3_GirlsFourToSix-0)+
																Number(saaForm.c3_GirlsGreaterThanSix-0)+
																Number(saaForm.c4_GirlsZeroToTwo-0)+
																Number(saaForm.c4_GirlsTwoToFour-0)+
																Number(saaForm.c4_GirlsFourToSix-0)+
																Number(saaForm.c4_GirlsGreaterThanSix-0)+
																Number(saaForm.c5_GirlsZeroToTwo-0)+
																Number(saaForm.c5_GirlsTwoToFour-0)+
																Number(saaForm.c5_GirlsFourToSix-0)+
																Number(saaForm.c5_GirlsGreaterThanSix-0)
                                                             }}"
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c6_GrandTotal"
                                                             value="{{
                                                            	Number(saaForm.c1_BoysZeroToTwo-0)+
																Number(saaForm.c1_BoysTwoToFour-0)+
																Number(saaForm.c1_BoysFourToSix-0)+
																Number(saaForm.c1_BoysGreaterThanSix-0)+
																Number(saaForm.c1_GirlsZeroToTwo-0)+
																Number(saaForm.c1_GirlsTwoToFour-0)+
																Number(saaForm.c1_GirlsFourToSix-0)+
																Number(saaForm.c1_GirlsGreaterThanSix-0)+
																
                                                             	Number(saaForm.c2_BoysZeroToTwo-0)+
																Number(saaForm.c2_BoysTwoToFour-0)+
																Number(saaForm.c2_BoysFourToSix-0)+
																Number(saaForm.c2_BoysGreaterThanSix-0)+
																Number(saaForm.c2_GirlsZeroToTwo-0)+
																Number(saaForm.c2_GirlsTwoToFour-0)+
																Number(saaForm.c2_GirlsFourToSix-0)+
																Number(saaForm.c2_GirlsGreaterThanSix-0)+
                                                             
                                                             	Number(saaForm.c3_BoysZeroToTwo-0)+
																Number(saaForm.c3_BoysTwoToFour-0)+
																Number(saaForm.c3_BoysFourToSix-0)+
																Number(saaForm.c3_BoysGreaterThanSix-0)+
																Number(saaForm.c3_GirlsZeroToTwo-0)+
																Number(saaForm.c3_GirlsTwoToFour-0)+
																Number(saaForm.c3_GirlsFourToSix-0)+
																Number(saaForm.c3_GirlsGreaterThanSix-0)+
																
	                                                            Number(saaForm.c4_BoysZeroToTwo-0)+
																Number(saaForm.c4_BoysTwoToFour-0)+
																Number(saaForm.c4_BoysFourToSix-0)+
																Number(saaForm.c4_BoysGreaterThanSix-0)+
																Number(saaForm.c4_GirlsZeroToTwo-0)+
																Number(saaForm.c4_GirlsTwoToFour-0)+
																Number(saaForm.c4_GirlsFourToSix-0)+
																Number(saaForm.c4_GirlsGreaterThanSix-0)+
                                                             
                                                                Number(saaForm.c5_BoysZeroToTwo-0)+
																Number(saaForm.c5_BoysTwoToFour-0)+
																Number(saaForm.c5_BoysFourToSix-0)+
																Number(saaForm.c5_BoysGreaterThanSix-0)+
																Number(saaForm.c5_GirlsZeroToTwo-0)+
																Number(saaForm.c5_GirlsTwoToFour-0)+
																Number(saaForm.c5_GirlsFourToSix-0)+
																Number(saaForm.c5_GirlsGreaterThanSix-0)
                                                             
                                                             }}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Children with special needs</th>
                                                       
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>C.a. New Admissions during the month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  
                                                  </tr>
                                                  
                                             </thead>
                                             <tbody>

                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.a.1. Orphaned or Abandoned</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  disabled only-four-digits id="c1_ABoysZeroToTwo"
                                                            ng-model="saaForm.c1_ABoysZeroToTwo" ng-change="checkCwithCa('c1_BoysZeroToTwo','c1_ABoysZeroToTwo','C.a.1 Boys(0-2)','C.1 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_ABoysTwoToFour"
                                                            ng-model="saaForm.c1_ABoysTwoToFour" ng-change="checkCwithCa('c1_BoysTwoToFour','c1_ABoysTwoToFour','C.a.1 Boys(2-4)','C.1 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_ABoysFourToSix"
                                                            ng-model="saaForm.c1_ABoysFourToSix" ng-change="checkCwithCa('c1_BoysFourToSix','c1_ABoysFourToSix','C.a.1 Boys(4-6)','C.1 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_ABoysGreaterThanSix"
                                                            ng-model="saaForm.c1_ABoysGreaterThanSix" ng-change="checkCwithCa('c1_BoysGreaterThanSix','c1_ABoysGreaterThanSix','C.a.1 Boys(>6)','C.1 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth "  
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c1_ABoysTotal" 
                                                            value="{{Number(saaForm.c1_ABoysZeroToTwo-0)+
																	Number(saaForm.c1_ABoysTwoToFour-0)+
																	Number(saaForm.c1_ABoysFourToSix-0)+
																	Number(saaForm.c1_ABoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_AGirlsZeroToTwo"
                                                            ng-model="saaForm.c1_AGirlsZeroToTwo" ng-change="checkCwithCa('c1_GirlsZeroToTwo','c1_AGirlsZeroToTwo','C.a.1 Girls(0-2)','C.1 Girls(0-2)')" 
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_AGirlsTwoToFour"
                                                            ng-model="saaForm.c1_AGirlsTwoToFour"  ng-change="checkCwithCa('c1_GirlsTwoToFour','c1_AGirlsTwoToFour','C.a.1 Girls(2-4)','C.1 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_AGirlsFourToSix"
                                                            ng-model="saaForm.c1_AGirlsFourToSix"  ng-change="checkCwithCa('c1_GirlsFourToSix','c1_AGirlsFourToSix','C.a.1 Girls(4-6)','C.1 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c1_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.c1_AGirlsGreaterThanSix"  ng-change="checkCwithCa('c1_GirlsGreaterThanSix','c1_AGirlsGreaterThanSix','C.a.1 Girls(>6)','C.1 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                      
                                                            
                                                       <td><input type="text" id="c1_AGirlsTotal" 
                                                             value="{{Number(saaForm.c1_AGirlsZeroToTwo-0)+
																	Number(saaForm.c1_AGirlsTwoToFour-0)+
																	Number(saaForm.c1_AGirlsFourToSix-0)+
																	Number(saaForm.c1_AGirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c1_AGrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.c1_ABoysZeroToTwo-0)+
																	Number(saaForm.c1_ABoysTwoToFour-0)+
																	Number(saaForm.c1_ABoysFourToSix-0)+
																	Number(saaForm.c1_ABoysGreaterThanSix-0)+
																	Number(saaForm.c1_AGirlsZeroToTwo-0)+
																	Number(saaForm.c1_AGirlsTwoToFour-0)+
																	Number(saaForm.c1_AGirlsFourToSix-0)+
																	Number(saaForm.c1_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.a.2. Surrendered Children</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_ABoysZeroToTwo"
                                                            ng-model="saaForm.c2_ABoysZeroToTwo"  ng-change="checkCwithCa('c2_BoysZeroToTwo','c2_ABoysZeroToTwo','C.a.2 Boys(0-2)','C.2 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_ABoysTwoToFour"
                                                            ng-model="saaForm.c2_ABoysTwoToFour"  ng-change="checkCwithCa('c2_BoysTwoToFour','c2_ABoysTwoToFour','C.a.2 Boys(2-4)','C.2 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_ABoysFourToSix"
                                                            ng-model="saaForm.c2_ABoysFourToSix" ng-change="checkCwithCa('c2_BoysFourToSix','c2_ABoysFourToSix','C.a.2 Boys(4-6)','C.2 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_ABoysGreaterThanSix"
                                                            ng-model="saaForm.c2_ABoysGreaterThanSix"  ng-change="checkCwithCa('c2_BoysGreaterThanSix','c2_ABoysGreaterThanSix','C.a.2 Boys(>6)','C.2 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                              
                                                       <td><input type="text" id="c2_ABoysTotal" disabled
                                                             value="{{Number(saaForm.c2_ABoysZeroToTwo-0)+
																	Number(saaForm.c2_ABoysTwoToFour-0)+
																	Number(saaForm.c2_ABoysFourToSix-0)+
																	Number(saaForm.c2_ABoysGreaterThanSix-0)}}" 
                                                             
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_AGirlsZeroToTwo"
                                                            ng-model="saaForm.c2_AGirlsZeroToTwo"  ng-change="checkCwithCa('c2_GirlsZeroToTwo','c2_AGirlsZeroToTwo','C.a.2 Girls(0-2)','C.2 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_AGirlsTwoToFour"
                                                            ng-model="saaForm.c2_AGirlsTwoToFour"  ng-change="checkCwithCa('c2_GirlsTwoToFour','c2_AGirlsTwoToFour','C.a.2 Girls(2-4)','C.2 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_AGirlsFourToSix"
                                                            ng-model="saaForm.c2_AGirlsFourToSix"  ng-change="checkCwithCa('c2_GirlsFourToSix','c2_AGirlsFourToSix','C.a.2 Girls(4-6)','C.2 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                       <td><input type="number"  disabled only-four-digits id="c2_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.c2_AGirlsGreaterThanSix" ng-change="checkCwithCa('c2_GirlsGreaterThanSix','c2_AGirlsGreaterThanSix','C.a.2 Girls(>6)','C.2 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                             ></td>
                                                             
                                                      
                                                       <td><input type="text" id="c2_AGirlsTotal"
                                                             value="{{
                                                             			Number(saaForm.c2_AGirlsZeroToTwo-0)+
																		Number(saaForm.c2_AGirlsTwoToFour-0)+
																		Number(saaForm.c2_AGirlsFourToSix-0)+
																		Number(saaForm.c2_AGirlsGreaterThanSix-0)
                                                             		}}" disabled
                                                             
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="c2_AGrandTotal"
                                                             
                                                             value="{{Number(saaForm.c2_ABoysZeroToTwo-0)+
																		Number(saaForm.c2_ABoysTwoToFour-0)+
																		Number(saaForm.c2_ABoysFourToSix-0)+
																		Number(saaForm.c2_ABoysGreaterThanSix-0)+
																		Number(saaForm.c2_AGirlsZeroToTwo-0)+
																		Number(saaForm.c2_AGirlsTwoToFour-0)+
																		Number(saaForm.c2_AGirlsFourToSix-0)+
																		Number(saaForm.c2_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.a.3. Dropped in cradles </label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_ABoysZeroToTwo"
                                                            ng-model="saaForm.c3_ABoysZeroToTwo" ng-change="checkCwithCa('c3_BoysZeroToTwo','c3_ABoysZeroToTwo','C.a.3 Boys(0-2)','C.3 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_ABoysTwoToFour"
                                                            ng-model="saaForm.c3_ABoysTwoToFour" ng-change="checkCwithCa('c3_BoysTwoToFour','c3_ABoysTwoToFour','C.a.3 Boys(2-4)','C.3 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_ABoysFourToSix"
                                                            ng-model="saaForm.c3_ABoysFourToSix"  ng-change="checkCwithCa('c3_BoysFourToSix','c3_ABoysFourToSix','C.a.3 Boys(4-6)','C.3 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_ABoysGreaterThanSix"
                                                            ng-model="saaForm.c3_ABoysGreaterThanSix" ng-change="checkCwithCa('c3_BoysGreaterThanSix','c3_ABoysGreaterThanSix','C.a.3 Boys(>6)','C.3 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="text" id="c3_ABoysTotal"  
                                                             value="{{Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c3_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_AGirlsZeroToTwo"
                                                            ng-model="saaForm.c3_AGirlsZeroToTwo"  ng-change="checkCwithCa('c3_GirlsZeroToTwo','c3_AGirlsZeroToTwo','C.a.3 Girls(0-2)','C.3 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_AGirlsTwoToFour"
                                                            ng-model="saaForm.c3_AGirlsTwoToFour" ng-change="checkCwithCa('c3_GirlsTwoToFour','c3_AGirlsTwoToFour','C.a.3 Girls(2-4)','C.3 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_AGirlsFourToSix"
                                                            ng-model="saaForm.c3_AGirlsFourToSix" ng-change="checkCwithCa('c3_GirlsFourToSix','c3_AGirlsFourToSix','C.a.3 Girls(4-6)','C.3 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                       <td><input type="number"  disabled only-four-digits id="c3_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.c3_AGirlsGreaterThanSix"  ng-change="checkCwithCa('c3_GirlsGreaterThanSix','c3_AGirlsGreaterThanSix','C.a.3 Girls(>6)','C.3 Girls(>6)')"
                                                            
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="c3_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c3_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="c3_AGrandTotal"
                                                             value="{{Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c3_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.a.4. Received on Transfers  </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_ABoysZeroToTwo"
                                                            ng-model="saaForm.c4_ABoysZeroToTwo" ng-change="checkCwithCa('c4_BoysZeroToTwo','c4_ABoysZeroToTwo','C.a.4 Boys(0-2)','C.4 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_ABoysTwoToFour"
                                                            ng-model="saaForm.c4_ABoysTwoToFour"  ng-change="checkCwithCa('c4_BoysTwoToFour','c4_ABoysTwoToFour','C.a.4 Boys(2-4)','C.4 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_ABoysFourToSix"
                                                            ng-model="saaForm.c4_ABoysFourToSix" ng-change="checkCwithCa('c4_BoysFourToSix','c4_ABoysFourToSix','C.a.4 Boys(4-6)','C.4 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_ABoysGreaterThanSix"
                                                            ng-model="saaForm.c4_ABoysGreaterThanSix" ng-change="checkCwithCa('c4_BoysGreaterThanSix','c4_ABoysGreaterThanSix','C.a.4 Boys(>6)','C.4 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c4_ABoysTotal"  
                                                             value="{{Number(saaForm.c4_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_AGirlsZeroToTwo"
                                                            ng-model="saaForm.c4_AGirlsZeroToTwo" ng-change="checkCwithCa('c4_GirlsZeroToTwo','c4_AGirlsZeroToTwo','C.a.4 Girls(0-2)','C.4 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_AGirlsTwoToFour"
                                                            ng-model="saaForm.c4_AGirlsTwoToFour"  ng-change="checkCwithCa('c4_GirlsTwoToFour','c4_AGirlsTwoToFour','C.a.4 Girls(2-4)','C.4 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_AGirlsFourToSix"
                                                            ng-model="saaForm.c4_AGirlsFourToSix" ng-change="checkCwithCa('c4_GirlsFourToSix','c4_AGirlsFourToSix','C.a.4 Girls(4-6)','C.4 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c4_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.c4_AGirlsGreaterThanSix" ng-change="checkCwithCa('c4_GirlsGreaterThanSix','c4_AGirlsGreaterThanSix','C.a.4 Girls(>6)','C.4 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="c4_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.c4_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c4_AGrandTotal"
                                                             value="{{Number(saaForm.c4_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">C.a.5. Disruptions, if any<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every monthGive details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup> </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_ABoysZeroToTwo"
                                                            ng-model="saaForm.c5_ABoysZeroToTwo" ng-change="checkCwithCa('c5_BoysZeroToTwo','c5_ABoysZeroToTwo','C.a.5 Boys(0-2)','C.5 Boys(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_ABoysTwoToFour"
                                                            ng-model="saaForm.c5_ABoysTwoToFour" ng-change="checkCwithCa('c5_BoysTwoToFour','c5_ABoysTwoToFour','C.a.5 Boys(2-4)','C.5 Boys(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_ABoysFourToSix"
                                                            ng-model="saaForm.c5_ABoysFourToSix" ng-change="checkCwithCa('c5_BoysFourToSix','c5_ABoysFourToSix','C.a.5 Boys(4-6)','C.5 Boys(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_ABoysGreaterThanSix"
                                                            ng-model="saaForm.c5_ABoysGreaterThanSix" ng-change="checkCwithCa('c5_BoysGreaterThanSix','c5_ABoysGreaterThanSix','C.a.5 Boys(>6)','C.5 Boys(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c5_ABoysTotal"  
                                                             value="{{Number(saaForm.c5_ABoysZeroToTwo-0)+
																	Number(saaForm.c5_ABoysTwoToFour-0)+
																	Number(saaForm.c5_ABoysFourToSix-0)+
																	Number(saaForm.c5_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_AGirlsZeroToTwo"
                                                            ng-model="saaForm.c5_AGirlsZeroToTwo"  ng-change="checkCwithCa('c5_GirlsZeroToTwo','c5_AGirlsZeroToTwo','C.a.5 Girls(0-2)','C.5 Girls(0-2)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_AGirlsTwoToFour"
                                                            ng-model="saaForm.c5_AGirlsTwoToFour"  ng-change="checkCwithCa('c5_GirlsTwoToFour','c5_AGirlsTwoToFour','C.a.5 Girls(2-4)','C.5 Girls(2-4)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_AGirlsFourToSix"
                                                            ng-model="saaForm.c5_AGirlsFourToSix" ng-change="checkCwithCa('c5_GirlsFourToSix','c5_AGirlsFourToSix','C.a.5 Girls(4-6)','C.5 Girls(4-6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                       <td><input type="number"  disabled only-four-digits id="c5_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.c5_AGirlsGreaterThanSix" ng-change="checkCwithCa('c5_GirlsGreaterThanSix','c5_AGirlsGreaterThanSix','C.a.5 Girls(>6)','C.5 Girls(>6)')"
                                                              class="form-control inputBackground tableinputWidth " 
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="c5_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.c5_AGirlsZeroToTwo-0)+
																	Number(saaForm.c5_AGirlsTwoToFour-0)+
																	Number(saaForm.c5_AGirlsFourToSix-0)+
																	Number(saaForm.c5_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c5_AGrandTotal"
                                                             value="{{Number(saaForm.c5_ABoysZeroToTwo-0)+
																	Number(saaForm.c5_ABoysTwoToFour-0)+
																	Number(saaForm.c5_ABoysFourToSix-0)+
																	Number(saaForm.c5_ABoysGreaterThanSix-0)+
																	Number(saaForm.c5_AGirlsZeroToTwo-0)+
																	Number(saaForm.c5_AGirlsTwoToFour-0)+
																	Number(saaForm.c5_AGirlsFourToSix-0)+
																	Number(saaForm.c5_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                      <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>C.a.6. Total New admissions in the reporting month</b> </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="text" id="c6_ABoysZeroToTwo" disabled
                                                            value="{{Number(saaForm.c1_ABoysZeroToTwo-0)+Number(saaForm.c2_ABoysZeroToTwo-0)+Number(saaForm.c3_ABoysZeroToTwo-0)+
                                                            Number(saaForm.c4_ABoysZeroToTwo-0)+Number(saaForm.c5_ABoysZeroToTwo-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_ABoysTwoToFour" disabled
                                                             value="{{Number(saaForm.c1_ABoysTwoToFour-0)+Number(saaForm.c2_ABoysTwoToFour-0)+Number(saaForm.c3_ABoysTwoToFour-0)+
                                                             Number(saaForm.c4_ABoysTwoToFour-0)+Number(saaForm.c5_ABoysTwoToFour-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_ABoysFourToSix" disabled
                                                             value="{{Number(saaForm.c1_ABoysFourToSix-0)+Number(saaForm.c2_ABoysFourToSix-0)+Number(saaForm.c3_ABoysFourToSix-0)+
                                                             Number(saaForm.c4_ABoysFourToSix-0)+Number(saaForm.c5_ABoysFourToSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_ABoysGreaterThanSix" disabled
                                                             value="{{Number(saaForm.c1_ABoysGreaterThanSix-0)+Number(saaForm.c2_ABoysGreaterThanSix-0)+Number(saaForm.c3_ABoysGreaterThanSix-0)+
                                                             Number(saaForm.c4_ABoysGreaterThanSix-0)+Number(saaForm.c5_ABoysGreaterThanSix-0)}}"  
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_ABoysTotal"   disabled
                                                             value="{{
                                                             	Number(saaForm.c1_ABoysZeroToTwo-0)+
																Number(saaForm.c1_ABoysTwoToFour-0)+
																Number(saaForm.c1_ABoysFourToSix-0)+
																Number(saaForm.c1_ABoysGreaterThanSix-0)+
																
																Number(saaForm.c2_ABoysZeroToTwo-0)+
																Number(saaForm.c2_ABoysTwoToFour-0)+
																Number(saaForm.c2_ABoysFourToSix-0)+
																Number(saaForm.c2_ABoysGreaterThanSix-0)+
																
																Number(saaForm.c3_ABoysZeroToTwo-0)+
																Number(saaForm.c3_ABoysTwoToFour-0)+
																Number(saaForm.c3_ABoysFourToSix-0)+
																Number(saaForm.c3_ABoysGreaterThanSix-0)+
																
																Number(saaForm.c4_ABoysZeroToTwo-0)+
																Number(saaForm.c4_ABoysTwoToFour-0)+
																Number(saaForm.c4_ABoysFourToSix-0)+
																Number(saaForm.c4_ABoysGreaterThanSix-0)+
																
																Number(saaForm.c5_ABoysZeroToTwo-0)+
																Number(saaForm.c5_ABoysTwoToFour-0)+
																Number(saaForm.c5_ABoysFourToSix-0)+
																Number(saaForm.c5_ABoysGreaterThanSix-0)
                                                             }}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_AGirlsZeroToTwo" disabled
                                                            value="{{Number(saaForm.c1_AGirlsZeroToTwo-0)+Number(saaForm.c2_AGirlsZeroToTwo-0)+Number(saaForm.c3_AGirlsZeroToTwo-0)+
                                                            Number(saaForm.c4_AGirlsZeroToTwo-0)+Number(saaForm.c5_AGirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_AGirlsTwoToFour" disabled
                                                            value="{{Number(saaForm.c1_AGirlsTwoToFour-0)+Number(saaForm.c2_AGirlsTwoToFour-0)+Number(saaForm.c3_AGirlsTwoToFour-0)+
                                                            Number(saaForm.c4_AGirlsTwoToFour-0)+Number(saaForm.c5_AGirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_AGirlsFourToSix" disabled
                                                            value="{{Number(saaForm.c1_AGirlsFourToSix-0)+Number(saaForm.c2_AGirlsFourToSix-0)+Number(saaForm.c3_AGirlsFourToSix-0)+
                                                            Number(saaForm.c4_AGirlsFourToSix-0)+Number(saaForm.c5_AGirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="c6_AGirlsGreaterThanSix" disabled
                                                            value="{{Number(saaForm.c1_AGirlsGreaterThanSix-0)+Number(saaForm.c2_AGirlsGreaterThanSix-0)+Number(saaForm.c3_AGirlsGreaterThanSix-0)+
                                                            Number(saaForm.c4_AGirlsGreaterThanSix-0)+Number(saaForm.c5_AGirlsGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                     
                                                       <td><input type="text" id="c6_AGirlsTotal" disabled
                                                             value="{{
                                                             	Number(saaForm.c1_AGirlsZeroToTwo-0)+
																Number(saaForm.c1_AGirlsTwoToFour-0)+
																Number(saaForm.c1_AGirlsFourToSix-0)+
																Number(saaForm.c1_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c2_AGirlsZeroToTwo-0)+
																Number(saaForm.c2_AGirlsTwoToFour-0)+
																Number(saaForm.c2_AGirlsFourToSix-0)+
																Number(saaForm.c2_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c3_AGirlsZeroToTwo-0)+
																Number(saaForm.c3_AGirlsTwoToFour-0)+
																Number(saaForm.c3_AGirlsFourToSix-0)+
																Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c4_AGirlsZeroToTwo-0)+
																Number(saaForm.c4_AGirlsTwoToFour-0)+
																Number(saaForm.c4_AGirlsFourToSix-0)+
																Number(saaForm.c4_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c5_AGirlsZeroToTwo-0)+
																Number(saaForm.c5_AGirlsTwoToFour-0)+
																Number(saaForm.c5_AGirlsFourToSix-0)+
																Number(saaForm.c5_AGirlsGreaterThanSix-0)
                                                             }}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="c6_AGrandTotal"
                                                             value="{{
                                                             	Number(saaForm.c1_ABoysZeroToTwo-0)+
																Number(saaForm.c1_ABoysTwoToFour-0)+
																Number(saaForm.c1_ABoysFourToSix-0)+
																Number(saaForm.c1_ABoysGreaterThanSix-0)+
																Number(saaForm.c1_AGirlsZeroToTwo-0)+
																Number(saaForm.c1_AGirlsTwoToFour-0)+
																Number(saaForm.c1_AGirlsFourToSix-0)+
																Number(saaForm.c1_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c2_ABoysZeroToTwo-0)+
																Number(saaForm.c2_ABoysTwoToFour-0)+
																Number(saaForm.c2_ABoysFourToSix-0)+
																Number(saaForm.c2_ABoysGreaterThanSix-0)+
																Number(saaForm.c2_AGirlsZeroToTwo-0)+
																Number(saaForm.c2_AGirlsTwoToFour-0)+
																Number(saaForm.c2_AGirlsFourToSix-0)+
																Number(saaForm.c2_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c3_ABoysZeroToTwo-0)+
																Number(saaForm.c3_ABoysTwoToFour-0)+
																Number(saaForm.c3_ABoysFourToSix-0)+
																Number(saaForm.c3_ABoysGreaterThanSix-0)+
																Number(saaForm.c3_AGirlsZeroToTwo-0)+
																Number(saaForm.c3_AGirlsTwoToFour-0)+
																Number(saaForm.c3_AGirlsFourToSix-0)+
																Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c4_ABoysZeroToTwo-0)+
																Number(saaForm.c4_ABoysTwoToFour-0)+
																Number(saaForm.c4_ABoysFourToSix-0)+
																Number(saaForm.c4_ABoysGreaterThanSix-0)+
																Number(saaForm.c4_AGirlsZeroToTwo-0)+
																Number(saaForm.c4_AGirlsTwoToFour-0)+
																Number(saaForm.c4_AGirlsFourToSix-0)+
																Number(saaForm.c4_AGirlsGreaterThanSix-0)+
																
																Number(saaForm.c5_ABoysZeroToTwo-0)+
																Number(saaForm.c5_ABoysTwoToFour-0)+
																Number(saaForm.c5_ABoysFourToSix-0)+
																Number(saaForm.c5_ABoysGreaterThanSix-0)+
																Number(saaForm.c5_AGirlsZeroToTwo-0)+
																Number(saaForm.c5_AGirlsTwoToFour-0)+
																Number(saaForm.c5_AGirlsFourToSix-0)+
																Number(saaForm.c5_AGirlsGreaterThanSix-0)
                                                             }}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                
                                                
                                             </tbody>
                                        </table>
                                   </div>
                                   <!-------------------------------------- End of C section ------------------------------------------>


                                   <!-------------------------------------- D section ------------------------------------------>
                                   <div class="b4sectionheading" id="caseD"></div>
                                   <div class="grey-header headMarg">D. Total Children in the reporting month</div>
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="table-d">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Total Children in the reporting month</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>D. Total Children in the reporting month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>D.1. Children in the reporting month (All Children in SAA)</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="d1_BoysZeroToTwo"
                                                            disabled 
                                                            value="{{Number(saaForm.c1_BoysZeroToTwo-0)+Number(saaForm.c2_BoysZeroToTwo-0)+Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysZeroToTwo-0)+Number(saaForm.c5_BoysZeroToTwo-0)+Number(saaForm.b1_BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_BoysTwoToFour"
                                                            disabled
                                                            value="{{Number(saaForm.c1_BoysTwoToFour-0)+Number(saaForm.c2_BoysTwoToFour-0)+Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+Number(saaForm.c5_BoysTwoToFour-0)+Number(saaForm.b1_BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_BoysFourToSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_BoysFourToSix-0)+Number(saaForm.c2_BoysFourToSix-0)+Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+Number(saaForm.c5_BoysFourToSix-0)+Number(saaForm.b1_BoysFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_BoysGreaterThanSix"
                                                           disabled
                                                           value="{{Number(saaForm.c1_BoysGreaterThanSix-0)+Number(saaForm.c2_BoysGreaterThanSix-0)+Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+Number(saaForm.c5_BoysGreaterThanSix-0)+Number(saaForm.b1_BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_BoysTotal" 
                                                            value="{{
																	Number(saaForm.c1_BoysZeroToTwo-0)+
																	Number(saaForm.c1_BoysTwoToFour-0)+
																	Number(saaForm.c1_BoysFourToSix-0)+
																	Number(saaForm.c1_BoysGreaterThanSix-0)+
																	Number(saaForm.c2_BoysZeroToTwo-0)+
																	Number(saaForm.c2_BoysTwoToFour-0)+
																	Number(saaForm.c2_BoysFourToSix-0)+
																	Number(saaForm.c2_BoysGreaterThanSix-0)+
																	Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+
																	Number(saaForm.c5_BoysZeroToTwo-0)+
																	Number(saaForm.c5_BoysTwoToFour-0)+
																	Number(saaForm.c5_BoysFourToSix-0)+
																	Number(saaForm.c5_BoysGreaterThanSix-0)+
																	Number(saaForm.b1_BoysZeroToTwo-0)+
																	Number(saaForm.b1_BoysTwoToFour-0)+
																	Number(saaForm.b1_BoysFourToSix-0)+
																	Number(saaForm.b1_BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_GirlsZeroToTwo"
                                                            disabled
                                                            value="{{Number(saaForm.c1_GirlsZeroToTwo-0)+Number(saaForm.c2_GirlsZeroToTwo-0)+Number(saaForm.c3_GirlsZeroToTwo-0)+
																	Number(saaForm.c4_GirlsZeroToTwo-0)+Number(saaForm.c5_GirlsZeroToTwo-0)+Number(saaForm.b1_GirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_GirlsTwoToFour"
                                                            disabled
                                                            value="{{Number(saaForm.c1_GirlsTwoToFour-0)+Number(saaForm.c2_GirlsTwoToFour-0)+Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+Number(saaForm.c5_GirlsTwoToFour-0)+Number(saaForm.b1_GirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_GirlsFourToSix"
                                                           disabled
                                                           value="{{Number(saaForm.c1_GirlsFourToSix-0)+Number(saaForm.c2_GirlsFourToSix-0)+Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+Number(saaForm.c5_GirlsFourToSix-0)+Number(saaForm.b1_GirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_GirlsGreaterThanSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_GirlsGreaterThanSix-0)+Number(saaForm.c2_GirlsGreaterThanSix-0)+Number(saaForm.c3_GirlsGreaterThanSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)+Number(saaForm.c5_GirlsGreaterThanSix-0)+Number(saaForm.b1_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="d1_GirlsTotal" 
                                                             value="{{
																	Number(saaForm.c1_GirlsZeroToTwo-0)+
																	Number(saaForm.c1_GirlsTwoToFour-0)+
																	Number(saaForm.c1_GirlsFourToSix-0)+
																	Number(saaForm.c1_GirlsGreaterThanSix-0)+
																	Number(saaForm.c2_GirlsZeroToTwo-0)+
																	Number(saaForm.c2_GirlsTwoToFour-0)+
																	Number(saaForm.c2_GirlsFourToSix-0)+
																	Number(saaForm.c2_GirlsGreaterThanSix-0)+
																	Number(saaForm.c3_GirlsZeroToTwo-0)+
																	Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c3_GirlsGreaterThanSix-0)+
																	Number(saaForm.c4_GirlsZeroToTwo-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)+
																	Number(saaForm.c5_GirlsZeroToTwo-0)+
																	Number(saaForm.c5_GirlsTwoToFour-0)+
																	Number(saaForm.c5_GirlsFourToSix-0)+
																	Number(saaForm.c5_GirlsGreaterThanSix-0)+
																	Number(saaForm.b1_GirlsZeroToTwo-0)+
																	Number(saaForm.b1_GirlsTwoToFour-0)+
																	Number(saaForm.b1_GirlsFourToSix-0)+
																	Number(saaForm.b1_GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                       <td><input type="text" disabled id="d1_GrandTotal"
                                                            disabled
                                                             value="{{
																	Number(saaForm.c1_BoysZeroToTwo-0)+
																	Number(saaForm.c1_BoysTwoToFour-0)+
																	Number(saaForm.c1_BoysFourToSix-0)+
																	Number(saaForm.c1_BoysGreaterThanSix-0)+
																	Number(saaForm.c1_GirlsZeroToTwo-0)+
																	Number(saaForm.c1_GirlsTwoToFour-0)+
																	Number(saaForm.c1_GirlsFourToSix-0)+
																	Number(saaForm.c1_GirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c2_BoysZeroToTwo-0)+
																	Number(saaForm.c2_BoysTwoToFour-0)+
																	Number(saaForm.c2_BoysFourToSix-0)+
																	Number(saaForm.c2_BoysGreaterThanSix-0)+
																	Number(saaForm.c2_GirlsZeroToTwo-0)+
																	Number(saaForm.c2_GirlsTwoToFour-0)+
																	Number(saaForm.c2_GirlsFourToSix-0)+
																	Number(saaForm.c2_GirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c3_GirlsZeroToTwo-0)+
																	Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c3_GirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c4_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_GirlsZeroToTwo-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c5_BoysZeroToTwo-0)+
																	Number(saaForm.c5_BoysTwoToFour-0)+
																	Number(saaForm.c5_BoysFourToSix-0)+
																	Number(saaForm.c5_BoysGreaterThanSix-0)+
																	Number(saaForm.c5_GirlsZeroToTwo-0)+
																	Number(saaForm.c5_GirlsTwoToFour-0)+
																	Number(saaForm.c5_GirlsFourToSix-0)+
																	Number(saaForm.c5_GirlsGreaterThanSix-0)+
																	Number(saaForm.b1_BoysZeroToTwo-0)+
																	Number(saaForm.b1_BoysTwoToFour-0)+
																	Number(saaForm.b1_BoysFourToSix-0)+
																	Number(saaForm.b1_BoysGreaterThanSix-0)
																	+
																	Number(saaForm.b1_GirlsZeroToTwo-0)+
																	Number(saaForm.b1_GirlsTwoToFour-0)+
																	Number(saaForm.b1_GirlsFourToSix-0)+
																	Number(saaForm.b1_GirlsGreaterThanSix-0)
                                                             }}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>D.2. Children with Special need in the reporting month (Out of Total)</b></label>
                                                            </div>
                                                       </td>
                                                       <td><input type="text" id="d2_BoysZeroToTwo"
                                                           disabled
                                                           value="{{Number(saaForm.c1_ABoysZeroToTwo-0)+Number(saaForm.c2_ABoysZeroToTwo-0)+Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysZeroToTwo-0)+Number(saaForm.c5_ABoysZeroToTwo-0)+Number(saaForm.b1_ABoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_BoysTwoToFour"
                                                          disabled
                                                          value="{{Number(saaForm.c1_ABoysTwoToFour-0)+Number(saaForm.c2_ABoysTwoToFour-0)+Number(saaForm.c3_ABoysTwoToFour-0)+
																Number(saaForm.c4_ABoysTwoToFour-0)+Number(saaForm.c5_ABoysTwoToFour-0)+Number(saaForm.b1_ABoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_BoysFourToSix"
                                                           disabled
                                                           value="{{Number(saaForm.c1_ABoysFourToSix-0)+Number(saaForm.c2_ABoysFourToSix-0)+Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+Number(saaForm.c5_ABoysFourToSix-0)+Number(saaForm.b1_ABoysFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_BoysGreaterThanSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_ABoysGreaterThanSix-0)+Number(saaForm.c2_ABoysGreaterThanSix-0)+Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+Number(saaForm.c5_ABoysGreaterThanSix-0)+Number(saaForm.b1_ABoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_BoysTotal"
                                                             value="{{
																	Number(saaForm.c1_ABoysZeroToTwo-0)+
																	Number(saaForm.c1_ABoysTwoToFour-0)+
																	Number(saaForm.c1_ABoysFourToSix-0)+
																	Number(saaForm.c1_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.c2_ABoysZeroToTwo-0)+
																	Number(saaForm.c2_ABoysTwoToFour-0)+
																	Number(saaForm.c2_ABoysFourToSix-0)+
																	Number(saaForm.c2_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.c4_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.c5_ABoysZeroToTwo-0)+
																	Number(saaForm.c5_ABoysTwoToFour-0)+
																	Number(saaForm.c5_ABoysFourToSix-0)+
																	Number(saaForm.c5_ABoysGreaterThanSix-0)+
																	Number(saaForm.b1_ABoysZeroToTwo-0)+
																	Number(saaForm.b1_ABoysTwoToFour-0)+
																	Number(saaForm.b1_ABoysFourToSix-0)+
																	Number(saaForm.b1_ABoysGreaterThanSix-0)
                                                             }}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_GirlsZeroToTwo"
                                                            disabled 
                                                            value="{{Number(saaForm.c1_AGirlsZeroToTwo-0)+Number(saaForm.c2_AGirlsZeroToTwo-0)+Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+Number(saaForm.c5_AGirlsZeroToTwo-0)+Number(saaForm.b1_AGirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_GirlsTwoToFour"
                                                           disabled
                                                           value="{{Number(saaForm.c1_AGirlsTwoToFour-0)+Number(saaForm.c2_AGirlsTwoToFour-0)+Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+Number(saaForm.c5_AGirlsTwoToFour-0)+Number(saaForm.b1_AGirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_GirlsFourToSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_AGirlsFourToSix-0)+Number(saaForm.c2_AGirlsFourToSix-0)+Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+Number(saaForm.c5_AGirlsFourToSix-0)+Number(saaForm.b1_AGirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                       <td><input type="text" id="d2_GirlsGreaterThanSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_AGirlsGreaterThanSix-0)+Number(saaForm.c2_AGirlsGreaterThanSix-0)+Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)+Number(saaForm.c5_AGirlsGreaterThanSix-0)+Number(saaForm.b1_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                             
                                                      
                                                       <td><input type="text" id="d2_GirlsTotal"
                                                             disabled
                                                             value="{{
																	Number(saaForm.c1_AGirlsZeroToTwo-0)+
																	Number(saaForm.c1_AGirlsTwoToFour-0)+
																	Number(saaForm.c1_AGirlsFourToSix-0)+
																	Number(saaForm.c1_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c2_AGirlsZeroToTwo-0)+
																	Number(saaForm.c2_AGirlsTwoToFour-0)+
																	Number(saaForm.c2_AGirlsFourToSix-0)+
																	Number(saaForm.c2_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c5_AGirlsZeroToTwo-0)+
																	Number(saaForm.c5_AGirlsTwoToFour-0)+
																	Number(saaForm.c5_AGirlsFourToSix-0)+
																	Number(saaForm.c5_AGirlsGreaterThanSix-0)+
																	Number(saaForm.b1_AGirlsZeroToTwo-0)+
																	Number(saaForm.b1_AGirlsTwoToFour-0)+
																	Number(saaForm.b1_AGirlsFourToSix-0)+
																	Number(saaForm.b1_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="d2_GrandTotal"
                                                             
                                                            value="{{
																	Number(saaForm.c1_ABoysZeroToTwo-0)+
																	Number(saaForm.c1_ABoysTwoToFour-0)+
																	Number(saaForm.c1_ABoysFourToSix-0)+
																	Number(saaForm.c1_ABoysGreaterThanSix-0)+
																	Number(saaForm.c1_AGirlsZeroToTwo-0)+
																	Number(saaForm.c1_AGirlsTwoToFour-0)+
																	Number(saaForm.c1_AGirlsFourToSix-0)+
																	Number(saaForm.c1_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c2_ABoysZeroToTwo-0)+
																	Number(saaForm.c2_ABoysTwoToFour-0)+
																	Number(saaForm.c2_ABoysFourToSix-0)+
																	Number(saaForm.c2_ABoysGreaterThanSix-0)+
																	Number(saaForm.c2_AGirlsZeroToTwo-0)+
																	Number(saaForm.c2_AGirlsTwoToFour-0)+
																	Number(saaForm.c2_AGirlsFourToSix-0)+
																	Number(saaForm.c2_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c4_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c5_ABoysZeroToTwo-0)+
																	Number(saaForm.c5_ABoysTwoToFour-0)+
																	Number(saaForm.c5_ABoysFourToSix-0)+
																	Number(saaForm.c5_ABoysGreaterThanSix-0)+
																	Number(saaForm.c5_AGirlsZeroToTwo-0)+
																	Number(saaForm.c5_AGirlsTwoToFour-0)+
																	Number(saaForm.c5_AGirlsFourToSix-0)+
																	Number(saaForm.c5_AGirlsGreaterThanSix-0)+
																	Number(saaForm.b1_ABoysZeroToTwo-0)+
																	Number(saaForm.b1_ABoysTwoToFour-0)+
																	Number(saaForm.b1_ABoysFourToSix-0)+
																	Number(saaForm.b1_ABoysGreaterThanSix-0)
																	+
																	Number(saaForm.b1_AGirlsZeroToTwo-0)+
																	Number(saaForm.b1_AGirlsTwoToFour-0)+
																	Number(saaForm.b1_AGirlsFourToSix-0)+
																	Number(saaForm.b1_AGirlsGreaterThanSix-0)
                                                            }}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                  
                                             </tbody>
                                        </table>
                                   </div>
                                   <!--------------------------------------End of D section ------------------------------------------>

                                   <!-------------------------------------- E section ------------------------------------------>
                                   <div class="b4sectionheading" id="caseE"></div>
                                   <div class="grey-header headMarg">E. Children moved out during the reporting month  </div>
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">All Children in SAA</th>
                                                       
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>E. Children moved out during the reporting month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>

                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.1. Placed in pre-adoption Foster Care (in-country)</label>
                                                            </div>
                                                       </td>
                                                  
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_BoysZeroToTwo"
                                                            ng-model="saaForm.e1_BoysZeroToTwo" ng-change="checkSectionE1BoysZeroto2('e1_BoysZeroToTwo','e1_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_BoysTwoToFour"
                                                            ng-model="saaForm.e1_BoysTwoToFour" ng-change="checkSectionE1BoystwoTofour('e1_BoysTwoToFour','e1_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td> 
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_BoysFourToSix"
                                                            ng-model="saaForm.e1_BoysFourToSix" ng-change="checkSectionE1BoysfourTosix('e1_BoysFourToSix','e1_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_BoysGreaterThanSix"
                                                            ng-model="saaForm.e1_BoysGreaterThanSix" ng-change="checkSectionE1BoysgreaterThansix('e1_BoysGreaterThanSix','e1_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e1_BoysTotal" 
                                                            value="{{Number(saaForm.e1_BoysZeroToTwo-0)+
																	Number(saaForm.e1_BoysTwoToFour-0)+
																	Number(saaForm.e1_BoysFourToSix-0)+
																	Number(saaForm.e1_BoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_GirlsZeroToTwo"
                                                            ng-model="saaForm.e1_GirlsZeroToTwo" ng-change="checkSectionE1GirlsZeroto2('e1_GirlsZeroToTwo','e1_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_GirlsTwoToFour"
                                                            ng-model="saaForm.e1_GirlsTwoToFour" ng-change="checkSectionE1GirlstwoTofour('e1_GirlsTwoToFour','e1_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_GirlsFourToSix"
                                                            ng-model="saaForm.e1_GirlsFourToSix" ng-change="checkSectionE1GirlsfourTosix('e1_GirlsFourToSix','e1_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_GirlsGreaterThanSix"
                                                            ng-model="saaForm.e1_GirlsGreaterThanSix" ng-change="checkSectionE1GirlsgreaterThansix('e1_GirlsGreaterThanSix','e1_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e1_GirlsTotal" 
                                                             value="{{Number(saaForm.e1_GirlsZeroToTwo-0)+
																	Number(saaForm.e1_GirlsTwoToFour-0)+
																	Number(saaForm.e1_GirlsFourToSix-0)+
																	Number(saaForm.e1_GirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="e1_GrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.e1_BoysZeroToTwo-0)+
																	Number(saaForm.e1_BoysTwoToFour-0)+
																	Number(saaForm.e1_BoysFourToSix-0)+
																	Number(saaForm.e1_BoysGreaterThanSix-0)+
																	
																	Number(saaForm.e1_GirlsZeroToTwo-0)+
																	Number(saaForm.e1_GirlsTwoToFour-0)+
																	Number(saaForm.e1_GirlsFourToSix-0)+
																	Number(saaForm.e1_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.2. Placed in pre-adoption Foster Care (inter-country)</label>
                                                            </div>
                                                       </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_BoysZeroToTwo"
                                                            ng-model="saaForm.e2_BoysZeroToTwo" ng-change="checkSectionE2BoysZeroto2('e2_BoysZeroToTwo','e2_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_BoysTwoToFour"
                                                            ng-model="saaForm.e2_BoysTwoToFour" ng-change="checkSectionE2BoystwoTofour('e2_BoysTwoToFour','e2_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_BoysFourToSix"
                                                            ng-model="saaForm.e2_BoysFourToSix" ng-change="checkSectionE2BoysfourTosix('e2_BoysFourToSix','e2_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_BoysGreaterThanSix"
                                                            ng-model="saaForm.e2_BoysGreaterThanSix" ng-change="checkSectionE2BoysgreaterThansix('e2_BoysGreaterThanSix','e2_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="text" id="e2_BoysTotal" disabled
                                                             value="{{Number(saaForm.e2_BoysZeroToTwo-0)+
																	Number(saaForm.e2_BoysTwoToFour-0)+
																	Number(saaForm.e2_BoysFourToSix-0)+
																	Number(saaForm.e2_BoysGreaterThanSix-0)}}" 
                                                             
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_GirlsZeroToTwo"
                                                            ng-model="saaForm.e2_GirlsZeroToTwo" ng-change="checkSectionE2GirlsZeroto2('e2_GirlsZeroToTwo','e2_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_GirlsTwoToFour"
                                                            ng-model="saaForm.e2_GirlsTwoToFour" ng-change="checkSectionE2GirlstwoTofour('e2_GirlsTwoToFour','e2_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_GirlsFourToSix"
                                                            ng-model="saaForm.e2_GirlsFourToSix" ng-change="checkSectionE2GirlsfourTosix('e2_GirlsFourToSix','e2_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_GirlsGreaterThanSix"
                                                            ng-model="saaForm.e2_GirlsGreaterThanSix" ng-change="checkSectionE2GirlsgreaterThansix('e2_GirlsGreaterThanSix','e2_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="text" id="e2_GirlsTotal"
                                                             value="{{Number(saaForm.e2_GirlsZeroToTwo-0)+
																	Number(saaForm.e2_GirlsTwoToFour-0)+
																	Number(saaForm.e2_GirlsFourToSix-0)+
																	Number(saaForm.e2_GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="e2_GrandTotal"
                                                             value="{{Number(saaForm.e2_BoysZeroToTwo-0)+
																	Number(saaForm.e2_BoysTwoToFour-0)+
																	Number(saaForm.e2_BoysFourToSix-0)+
																	Number(saaForm.e2_BoysGreaterThanSix-0)+
																	
																	Number(saaForm.e2_GirlsZeroToTwo-0)+
																	Number(saaForm.e2_GirlsTwoToFour-0)+
																	Number(saaForm.e2_GirlsFourToSix-0)+
																	Number(saaForm.e2_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.3. Restoration by CWC</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_BoysZeroToTwo"
                                                            ng-model="saaForm.e3_BoysZeroToTwo" ng-change="checkSectionE3BoysZeroto2('e3_BoysZeroToTwo','e3_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_BoysTwoToFour"
                                                            ng-model="saaForm.e3_BoysTwoToFour" ng-change="checkSectionE3BoystwoTofour('e3_BoysTwoToFour','e3_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_BoysFourToSix"
                                                            ng-model="saaForm.e3_BoysFourToSix" ng-change="checkSectionE3BoysfourTosix('e3_BoysFourToSix','e3_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_BoysGreaterThanSix"
                                                            ng-model="saaForm.e3_BoysGreaterThanSix" ng-change="checkSectionE3BoysgreaterThansix('e3_BoysGreaterThanSix','e3_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e3_BoysTotal"  
                                                             value="{{Number(saaForm.e3_BoysZeroToTwo-0)+
																	Number(saaForm.e3_BoysTwoToFour-0)+
																	Number(saaForm.e3_BoysFourToSix-0)+
																	Number(saaForm.e3_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_GirlsZeroToTwo"
                                                            ng-model="saaForm.e3_GirlsZeroToTwo" ng-change="checkSectionE3GirlsZeroto2('e3_GirlsZeroToTwo','e3_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_GirlsTwoToFour"
                                                            ng-model="saaForm.e3_GirlsTwoToFour" ng-change="checkSectionE3GirlstwoTofour('e3_GirlsTwoToFour','e3_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_GirlsFourToSix"
                                                            ng-model="saaForm.e3_GirlsFourToSix" ng-change="checkSectionE3GirlsfourTosix('e3_GirlsFourToSix','e3_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_GirlsGreaterThanSix"
                                                            ng-model="saaForm.e3_GirlsGreaterThanSix" ng-change="checkSectionE3GirlsgreaterThansix('e3_GirlsGreaterThanSix','e3_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e3_GirlsTotal" disabled
                                                             value="{{Number(saaForm.e3_GirlsZeroToTwo-0)+
																	Number(saaForm.e3_GirlsTwoToFour-0)+
																	Number(saaForm.e3_GirlsFourToSix-0)+
																	Number(saaForm.e3_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="e3_GrandTotal"
                                                             value="{{Number(saaForm.e3_BoysZeroToTwo-0)+
																	Number(saaForm.e3_BoysTwoToFour-0)+
																	Number(saaForm.e3_BoysFourToSix-0)+
																	Number(saaForm.e3_BoysGreaterThanSix-0)+
																	
																	Number(saaForm.e3_GirlsZeroToTwo-0)+
																	Number(saaForm.e3_GirlsTwoToFour-0)+
																	Number(saaForm.e3_GirlsFourToSix-0)+
																	Number(saaForm.e3_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.4. Transferred to other CCIs</label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_BoysZeroToTwo"
                                                            ng-model="saaForm.e4_BoysZeroToTwo" ng-change="checkSectionE4BoysZeroto2('e4_BoysZeroToTwo','e4_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_BoysTwoToFour"
                                                            ng-model="saaForm.e4_BoysTwoToFour" ng-change="checkSectionE4BoystwoTofour('e4_BoysTwoToFour','e4_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_BoysFourToSix"
                                                            ng-model="saaForm.e4_BoysFourToSix" ng-change="checkSectionE4BoysfourTosix('e4_BoysFourToSix','e4_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_BoysGreaterThanSix"
                                                            ng-model="saaForm.e4_BoysGreaterThanSix" ng-change="checkSectionE4BoysgreaterThansix('e4_BoysGreaterThanSix','e4_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e4_BoysTotal"  
                                                             value="{{Number(saaForm.e4_BoysZeroToTwo-0)+
																	Number(saaForm.e4_BoysTwoToFour-0)+
																	Number(saaForm.e4_BoysFourToSix-0)+
																	Number(saaForm.e4_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_GirlsZeroToTwo"
                                                            ng-model="saaForm.e4_GirlsZeroToTwo" ng-change="checkSectionE4GirlsZeroto2('e4_GirlsZeroToTwo','e4_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_GirlsTwoToFour"
                                                            ng-model="saaForm.e4_GirlsTwoToFour" ng-change="checkSectionE4GirlstwoTofour('e4_GirlsTwoToFour','e4_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_GirlsFourToSix"
                                                            ng-model="saaForm.e4_GirlsFourToSix" ng-change="checkSectionE4GirlsfourTosix('e4_GirlsFourToSix','e4_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_GirlsGreaterThanSix"
                                                            ng-model="saaForm.e4_GirlsGreaterThanSix" ng-change="checkSectionE4GirlsgreaterThansix('e4_GirlsGreaterThanSix','e4_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e4_GirlsTotal" disabled
                                                             value="{{Number(saaForm.e4_GirlsZeroToTwo-0)+
																	Number(saaForm.e4_GirlsTwoToFour-0)+
																	Number(saaForm.e4_GirlsFourToSix-0)+
																	Number(saaForm.e4_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="e4_GrandTotal"
                                                             value="{{Number(saaForm.e4_BoysZeroToTwo-0)+
																	Number(saaForm.e4_BoysTwoToFour-0)+
																	Number(saaForm.e4_BoysFourToSix-0)+
																	Number(saaForm.e4_BoysGreaterThanSix-0)+
																	
																	Number(saaForm.e4_GirlsZeroToTwo-0)+
																	Number(saaForm.e4_GirlsTwoToFour-0)+
																	Number(saaForm.e4_GirlsFourToSix-0)+
																	Number(saaForm.e4_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.5. Due to Death, if any<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup> </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_BoysZeroToTwo"
                                                            ng-model="saaForm.e5_BoysZeroToTwo" ng-change="checkSectionE5BoysZeroto2('e5_BoysZeroToTwo','e5_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_BoysTwoToFour"
                                                            ng-model="saaForm.e5_BoysTwoToFour" ng-change="checkSectionE5BoystwoTofour('e5_BoysTwoToFour','e5_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_BoysFourToSix"
                                                            ng-model="saaForm.e5_BoysFourToSix" ng-change="checkSectionE5BoysfourTosix('e5_BoysFourToSix','e5_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_BoysGreaterThanSix"
                                                            ng-model="saaForm.e5_BoysGreaterThanSix" ng-change="checkSectionE5BoysgreaterThansix('e5_BoysGreaterThanSix','e5_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e5_BoysTotal"  
                                                             value="{{Number(saaForm.e5_BoysZeroToTwo-0)+
																	Number(saaForm.e5_BoysTwoToFour-0)+
																	Number(saaForm.e5_BoysFourToSix-0)+
																	Number(saaForm.e5_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_GirlsZeroToTwo"
                                                            ng-model="saaForm.e5_GirlsZeroToTwo" ng-change="checkSectionE5GirlsZeroto2('e5_GirlsZeroToTwo','e5_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_GirlsTwoToFour"
                                                            ng-model="saaForm.e5_GirlsTwoToFour" ng-change="checkSectionE5GirlstwoTofour('e5_GirlsTwoToFour','e5_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_GirlsFourToSix"
                                                            ng-model="saaForm.e5_GirlsFourToSix" ng-change="checkSectionE5GirlsfourTosix('e5_GirlsFourToSix','e5_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_GirlsGreaterThanSix"
                                                            ng-model="saaForm.e5_GirlsGreaterThanSix" ng-change="checkSectionE5GirlsgreaterThansix('e5_GirlsGreaterThanSix','e5_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="e5_GirlsTotal" disabled
                                                             value="{{																	
																	Number(saaForm.e5_GirlsZeroToTwo-0)+
																	Number(saaForm.e5_GirlsTwoToFour-0)+
																	Number(saaForm.e5_GirlsFourToSix-0)+
																	Number(saaForm.e5_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="e5_GrandTotal"
                                                             value="{{Number(saaForm.e5_BoysZeroToTwo-0)+
																	Number(saaForm.e5_BoysTwoToFour-0)+
																	Number(saaForm.e5_BoysFourToSix-0)+
																	Number(saaForm.e5_BoysGreaterThanSix-0)+
																	
																	Number(saaForm.e5_GirlsZeroToTwo-0)+
																	Number(saaForm.e5_GirlsTwoToFour-0)+
																	Number(saaForm.e5_GirlsFourToSix-0)+
																	Number(saaForm.e5_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.6. Any other<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup> </label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_BoysZeroToTwo"
                                                            ng-model="saaForm.e6_BoysZeroToTwo" ng-change="checkSectionE6BoysZeroto2('e6_BoysZeroToTwo','e6_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_BoysTwoToFour"
                                                            ng-model="saaForm.e6_BoysTwoToFour" ng-change="checkSectionE6BoystwoTofour('e6_BoysTwoToFour','e6_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_BoysFourToSix"
                                                            ng-model="saaForm.e6_BoysFourToSix" ng-change="checkSectionE6BoysfourTosix('e6_BoysFourToSix','e6_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_BoysGreaterThanSix"
                                                            ng-model="saaForm.e6_BoysGreaterThanSix" ng-change="checkSectionE6BoysgreaterThansix('e6_BoysGreaterThanSix','e6_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e6_BoysTotal"  
                                                             value="{{Number(saaForm.e6_BoysZeroToTwo-0)+
																	Number(saaForm.e6_BoysTwoToFour-0)+
																	Number(saaForm.e6_BoysFourToSix-0)+
																	Number(saaForm.e6_BoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_GirlsZeroToTwo"
                                                            ng-model="saaForm.e6_GirlsZeroToTwo" ng-change="checkSectionE6GirlsZeroto2('e6_GirlsZeroToTwo','e6_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_GirlsTwoToFour"
                                                            ng-model="saaForm.e6_GirlsTwoToFour" ng-change="checkSectionE6GirlstwoTofour('e6_GirlsTwoToFour','e6_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_GirlsFourToSix"
                                                            ng-model="saaForm.e6_GirlsFourToSix" ng-change="checkSectionE6GirlsfourTosix('e6_GirlsFourToSix','e6_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_GirlsGreaterThanSix"
                                                            ng-model="saaForm.e6_GirlsGreaterThanSix" ng-change="checkSectionE6GirlsgreaterThansix('e6_GirlsGreaterThanSix','e6_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                     
                                                       <td><input type="text" id="e6_GirlsTotal" disabled
                                                             value="{{Number(saaForm.e6_GirlsZeroToTwo-0)+
																	Number(saaForm.e6_GirlsTwoToFour-0)+
																	Number(saaForm.e6_GirlsFourToSix-0)+
																	Number(saaForm.e6_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="e6_GrandTotal"
                                                             value="{{Number(saaForm.e6_BoysZeroToTwo-0)+
																	Number(saaForm.e6_BoysTwoToFour-0)+
																	Number(saaForm.e6_BoysFourToSix-0)+
																	Number(saaForm.e6_BoysGreaterThanSix-0)+
																	
																	Number(saaForm.e6_GirlsZeroToTwo-0)+
																	Number(saaForm.e6_GirlsTwoToFour-0)+
																	Number(saaForm.e6_GirlsFourToSix-0)+
																	Number(saaForm.e6_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>E.7. Total children moved out in the reporting month </b></label>
                                                            </div>
                                                       </td>
                                                            
                                                       <td><input type="text" id="e7_BoysZeroToTwo" disabled
                                                            value="{{Number(saaForm.e1_BoysZeroToTwo-0)+Number(saaForm.e2_BoysZeroToTwo-0)+Number(saaForm.e3_BoysZeroToTwo-0)+
                                                            Number(saaForm.e4_BoysZeroToTwo-0)+Number(saaForm.e5_BoysZeroToTwo-0)+Number(saaForm.e6_BoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_BoysTwoToFour" disabled
                                                             value="{{Number(saaForm.e1_BoysTwoToFour-0)+Number(saaForm.e2_BoysTwoToFour-0)+Number(saaForm.e3_BoysTwoToFour-0)+
                                                             Number(saaForm.e4_BoysTwoToFour-0)+Number(saaForm.e5_BoysTwoToFour-0)+Number(saaForm.e6_BoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_BoysFourToSix" disabled
                                                             value="{{Number(saaForm.e1_BoysFourToSix-0)+Number(saaForm.e2_BoysFourToSix-0)+Number(saaForm.e3_BoysFourToSix-0)+
                                                             Number(saaForm.e4_BoysFourToSix-0)+Number(saaForm.e5_BoysFourToSix-0)+Number(saaForm.e6_BoysFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_BoysGreaterThanSix" disabled
                                                             value="{{Number(saaForm.e1_BoysGreaterThanSix-0)+Number(saaForm.e2_BoysGreaterThanSix-0)+Number(saaForm.e3_BoysGreaterThanSix-0)+
                                                             Number(saaForm.e4_BoysGreaterThanSix-0)+Number(saaForm.e5_BoysGreaterThanSix-0)+Number(saaForm.e6_BoysGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_BoysTotal"   
                                                            value="{{Number(saaForm.e1_BoysZeroToTwo-0)+Number(saaForm.e2_BoysZeroToTwo-0)+Number(saaForm.e3_BoysZeroToTwo-0)+
		                                                             Number(saaForm.e4_BoysZeroToTwo-0)+Number(saaForm.e5_BoysZeroToTwo-0)+Number(saaForm.e6_BoysZeroToTwo-0)+
		                                                             Number(saaForm.e1_BoysTwoToFour-0)+Number(saaForm.e2_BoysTwoToFour-0)+Number(saaForm.e3_BoysTwoToFour-0)+
		                                                             Number(saaForm.e4_BoysTwoToFour-0)+Number(saaForm.e5_BoysTwoToFour-0)+Number(saaForm.e6_BoysTwoToFour-0)+
		                                                             Number(saaForm.e1_BoysFourToSix-0)+Number(saaForm.e2_BoysFourToSix-0)+Number(saaForm.e3_BoysFourToSix-0)+
		                                                             Number(saaForm.e4_BoysFourToSix-0)+Number(saaForm.e5_BoysFourToSix-0)+Number(saaForm.e6_BoysFourToSix-0)+
		                                                             Number(saaForm.e1_BoysGreaterThanSix-0)+Number(saaForm.e2_BoysGreaterThanSix-0)+Number(saaForm.e3_BoysGreaterThanSix-0)+
		                                                             Number(saaForm.e4_BoysGreaterThanSix-0)+Number(saaForm.e5_BoysGreaterThanSix-0)+Number(saaForm.e6_BoysGreaterThanSix-0)
                                                            
                                                            }}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_GirlsZeroToTwo" disabled
                                                             value="{{Number(saaForm.e1_GirlsZeroToTwo-0)+Number(saaForm.e2_GirlsZeroToTwo-0)+Number(saaForm.e3_GirlsZeroToTwo-0)+
                                                             Number(saaForm.e4_GirlsZeroToTwo-0)+Number(saaForm.e5_GirlsZeroToTwo-0)+Number(saaForm.e6_GirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_GirlsTwoToFour" disabled
                                                              value="{{Number(saaForm.e1_GirlsTwoToFour-0)+Number(saaForm.e2_GirlsTwoToFour-0)+Number(saaForm.e3_GirlsTwoToFour-0)+
                                                             Number(saaForm.e4_GirlsTwoToFour-0)+Number(saaForm.e5_GirlsTwoToFour-0)+Number(saaForm.e6_GirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_GirlsFourToSix" disabled
                                                             value="{{Number(saaForm.e1_GirlsFourToSix-0)+Number(saaForm.e2_GirlsFourToSix-0)+Number(saaForm.e3_GirlsFourToSix-0)+
                                                             Number(saaForm.e4_GirlsFourToSix-0)+Number(saaForm.e5_GirlsFourToSix-0)+Number(saaForm.e6_GirlsFourToSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td> 
                                                       <td><input type="text" id="e7_GirlsGreaterThanSix" disabled
                                                             value="{{Number(saaForm.e1_GirlsGreaterThanSix-0)+Number(saaForm.e2_GirlsGreaterThanSix-0)+Number(saaForm.e3_GirlsGreaterThanSix-0)
                                                             +Number(saaForm.e4_GirlsGreaterThanSix-0)+Number(saaForm.e5_GirlsGreaterThanSix-0)+Number(saaForm.e6_GirlsGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_GirlsTotal" disabled
                                                             value="{{Number(saaForm.e1_GirlsZeroToTwo-0)+Number(saaForm.e2_GirlsZeroToTwo-0)+Number(saaForm.e3_GirlsZeroToTwo-0)+
																	Number(saaForm.e4_GirlsZeroToTwo-0)+Number(saaForm.e5_GirlsZeroToTwo-0)+Number(saaForm.e6_GirlsZeroToTwo-0)+
																	Number(saaForm.e1_GirlsTwoToFour-0)+Number(saaForm.e2_GirlsTwoToFour-0)+Number(saaForm.e3_GirlsTwoToFour-0)+
																	Number(saaForm.e4_GirlsTwoToFour-0)+Number(saaForm.e5_GirlsTwoToFour-0)+Number(saaForm.e6_GirlsTwoToFour-0)+
																	Number(saaForm.e1_GirlsFourToSix-0)+Number(saaForm.e2_GirlsFourToSix-0)+Number(saaForm.e3_GirlsFourToSix-0)+
																	Number(saaForm.e4_GirlsFourToSix-0)+Number(saaForm.e5_GirlsFourToSix-0)+Number(saaForm.e6_GirlsFourToSix-0)+
																	Number(saaForm.e1_GirlsGreaterThanSix-0)+Number(saaForm.e2_GirlsGreaterThanSix-0)+Number(saaForm.e3_GirlsGreaterThanSix-0)+
																	Number(saaForm.e4_GirlsGreaterThanSix-0)+Number(saaForm.e5_GirlsGreaterThanSix-0)+Number(saaForm.e6_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                       <td><input type="text" disabled id="e7_GrandTotal"
                                                             value="{{Number(saaForm.e1_BoysZeroToTwo-0)+Number(saaForm.e2_BoysZeroToTwo-0)+Number(saaForm.e3_BoysZeroToTwo-0)+
																	Number(saaForm.e4_BoysZeroToTwo-0)+Number(saaForm.e5_BoysZeroToTwo-0)+Number(saaForm.e6_BoysZeroToTwo-0)+
																	Number(saaForm.e1_BoysTwoToFour-0)+Number(saaForm.e2_BoysTwoToFour-0)+Number(saaForm.e3_BoysTwoToFour-0)+
																	Number(saaForm.e4_BoysTwoToFour-0)+Number(saaForm.e5_BoysTwoToFour-0)+Number(saaForm.e6_BoysTwoToFour-0)+
																	Number(saaForm.e1_BoysFourToSix-0)+Number(saaForm.e2_BoysFourToSix-0)+Number(saaForm.e3_BoysFourToSix-0)+
																	Number(saaForm.e4_BoysFourToSix-0)+Number(saaForm.e5_BoysFourToSix-0)+Number(saaForm.e6_BoysFourToSix-0)+
																	Number(saaForm.e1_BoysGreaterThanSix-0)+Number(saaForm.e2_BoysGreaterThanSix-0)+Number(saaForm.e3_BoysGreaterThanSix-0)+
																	Number(saaForm.e4_BoysGreaterThanSix-0)+Number(saaForm.e5_BoysGreaterThanSix-0)+Number(saaForm.e6_BoysGreaterThanSix-0)+
																	Number(saaForm.e1_GirlsZeroToTwo-0)+Number(saaForm.e2_GirlsZeroToTwo-0)+Number(saaForm.e3_GirlsZeroToTwo-0)+
																	Number(saaForm.e4_GirlsZeroToTwo-0)+Number(saaForm.e5_GirlsZeroToTwo-0)+Number(saaForm.e6_GirlsZeroToTwo-0)+
																	Number(saaForm.e1_GirlsTwoToFour-0)+Number(saaForm.e2_GirlsTwoToFour-0)+Number(saaForm.e3_GirlsTwoToFour-0)+
																	Number(saaForm.e4_GirlsTwoToFour-0)+Number(saaForm.e5_GirlsTwoToFour-0)+Number(saaForm.e6_GirlsTwoToFour-0)+
																	Number(saaForm.e1_GirlsFourToSix-0)+Number(saaForm.e2_GirlsFourToSix-0)+Number(saaForm.e3_GirlsFourToSix-0)+
																	Number(saaForm.e4_GirlsFourToSix-0)+Number(saaForm.e5_GirlsFourToSix-0)+Number(saaForm.e6_GirlsFourToSix-0)+
																	Number(saaForm.e1_GirlsGreaterThanSix-0)+Number(saaForm.e2_GirlsGreaterThanSix-0)+Number(saaForm.e3_GirlsGreaterThanSix-0)+
																	Number(saaForm.e4_GirlsGreaterThanSix-0)+Number(saaForm.e5_GirlsGreaterThanSix-0)+Number(saaForm.e6_GirlsGreaterThanSix-0)
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Children with special needs</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>E.a. Children moved out during the reporting month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.a.1. Placed in pre-adoption Foster Care (in-country)</label>
                                                            </div>
                                                       </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_ABoysZeroToTwo"
                                                            ng-model="saaForm.e1_ABoysZeroToTwo" ng-change="checkSectionE1ABoysZeroto2('e1_BoysZeroToTwo','e1_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_ABoysTwoToFour"
                                                            ng-model="saaForm.e1_ABoysTwoToFour" ng-change="checkSectionE1ABoystwoTofour('e1_BoysTwoToFour','e1_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_ABoysFourToSix"
                                                            ng-model="saaForm.e1_ABoysFourToSix" ng-change="checkSectionE1ABoysfourTosix('e1_BoysFourToSix','e1_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_ABoysGreaterThanSix"
                                                            ng-model="saaForm.e1_ABoysGreaterThanSix" ng-change="checkSectionE1ABoysgreaterThansix('e1_BoysGreaterThanSix','e1_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e1_ABoysTotal" 
                                                            value="{{Number(saaForm.e1_ABoysZeroToTwo-0)+
																	Number(saaForm.e1_ABoysTwoToFour-0)+
																	Number(saaForm.e1_ABoysFourToSix-0)+
																	Number(saaForm.e1_ABoysGreaterThanSix-0)}}"
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_AGirlsZeroToTwo"
                                                            ng-model="saaForm.e1_AGirlsZeroToTwo" ng-change="checkSectionE1AGirlsZeroto2('e1_GirlsZeroToTwo','e1_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_AGirlsTwoToFour"
                                                            ng-model="saaForm.e1_AGirlsTwoToFour" ng-change="checkSectionE1AGirlstwoTofour('e1_GirlsTwoToFour','e1_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_AGirlsFourToSix"
                                                            ng-model="saaForm.e1_AGirlsFourToSix" ng-change="checkSectionE1AGirlsfourTosix('e1_GirlsFourToSix','e1_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e1_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.e1_AGirlsGreaterThanSix" ng-change="checkSectionE1AGirlsgreaterThansix('e1_GirlsGreaterThanSix','e1_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e1_AGirlsTotal" 
                                                             value="{{Number(saaForm.e1_AGirlsZeroToTwo-0)+
																	Number(saaForm.e1_AGirlsTwoToFour-0)+
																	Number(saaForm.e1_AGirlsFourToSix-0)+
																	Number(saaForm.e1_AGirlsGreaterThanSix-0)}}"
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="e1_AGrandTotal"
                                                            disabled
                                                             value="{{Number(saaForm.e1_ABoysZeroToTwo-0)+
																	Number(saaForm.e1_ABoysTwoToFour-0)+
																	Number(saaForm.e1_ABoysFourToSix-0)+
																	Number(saaForm.e1_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.e1_AGirlsZeroToTwo-0)+
																	Number(saaForm.e1_AGirlsTwoToFour-0)+
																	Number(saaForm.e1_AGirlsFourToSix-0)+
																	Number(saaForm.e1_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                       <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.a.2. Placed in pre-adoption Foster Care (inter-country)</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_ABoysZeroToTwo"
                                                            ng-model="saaForm.e2_ABoysZeroToTwo" ng-change="checkSectionE2ABoysZeroto2('e2_BoysZeroToTwo','e2_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_ABoysTwoToFour"
                                                            ng-model="saaForm.e2_ABoysTwoToFour" ng-change="checkSectionE2ABoystwoTofour('e2_BoysTwoToFour','e2_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_ABoysFourToSix"
                                                            ng-model="saaForm.e2_ABoysFourToSix" ng-change="checkSectionE2ABoysfourTosix('e2_BoysFourToSix','e2_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_ABoysGreaterThanSix"
                                                            ng-model="saaForm.e2_ABoysGreaterThanSix" ng-change="checkSectionE2ABoysgreaterThansix('e2_BoysGreaterThanSix','e2_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="text" id="e2_ABoysTotal" disabled
                                                             value="{{Number(saaForm.e2_ABoysZeroToTwo-0)+
																	Number(saaForm.e2_ABoysTwoToFour-0)+
																	Number(saaForm.e2_ABoysFourToSix-0)+
																	Number(saaForm.e2_ABoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_AGirlsZeroToTwo"
                                                            ng-model="saaForm.e2_AGirlsZeroToTwo" ng-change="checkSectionE2AGirlsZeroto2('e2_GirlsZeroToTwo','e2_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_AGirlsTwoToFour"
                                                            ng-model="saaForm.e2_AGirlsTwoToFour" ng-change="checkSectionE2AGirlstwoTofour('e2_GirlsTwoToFour','e2_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_AGirlsFourToSix"
                                                            ng-model="saaForm.e2_AGirlsFourToSix" ng-change="checkSectionE2AGirlsfourTosix('e2_GirlsFourToSix','e2_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e2_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.e2_AGirlsGreaterThanSix" ng-change="checkSectionE2AGirlsgreaterThansix('e2_GirlsGreaterThanSix','e2_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                      
                                                       <td><input type="text" id="e2_AGirlsTotal"
                                                             value="{{Number(saaForm.e2_AGirlsZeroToTwo-0)+
																	Number(saaForm.e2_AGirlsTwoToFour-0)+
																	Number(saaForm.e2_AGirlsFourToSix-0)+
																	Number(saaForm.e2_AGirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="text" disabled id="e2_AGrandTotal"
                                                             value="{{Number(saaForm.e2_ABoysZeroToTwo-0)+
																	Number(saaForm.e2_ABoysTwoToFour-0)+
																	Number(saaForm.e2_ABoysFourToSix-0)+
																	Number(saaForm.e2_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.e2_AGirlsZeroToTwo-0)+
																	Number(saaForm.e2_AGirlsTwoToFour-0)+
																	Number(saaForm.e2_AGirlsFourToSix-0)+
																	Number(saaForm.e2_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.a.3. Restoration by CWC</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_ABoysZeroToTwo"
                                                            ng-model="saaForm.e3_ABoysZeroToTwo" ng-change="checkSectionE3ABoysZeroto2('e3_BoysZeroToTwo','e3_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth "  required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_ABoysTwoToFour"
                                                            ng-model="saaForm.e3_ABoysTwoToFour" ng-change="checkSectionE3ABoystwoTofour('e3_BoysTwoToFour','e3_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_ABoysFourToSix"
                                                            ng-model="saaForm.e3_ABoysFourToSix" ng-change="checkSectionE3ABoysfourTosix('e3_BoysFourToSix','e3_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_ABoysGreaterThanSix"
                                                            ng-model="saaForm.e3_ABoysGreaterThanSix" ng-change="checkSectionE3ABoysgreaterThansix('e3_BoysGreaterThanSix','e3_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e3_ABoysTotal"  
                                                             value="{{Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e3_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_AGirlsZeroToTwo"
                                                            ng-model="saaForm.e3_AGirlsZeroToTwo" ng-change="checkSectionE3AGirlsZeroto2('e3_GirlsZeroToTwo','e3_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_AGirlsTwoToFour"
                                                            ng-model="saaForm.e3_AGirlsTwoToFour" ng-change="checkSectionE3AGirlstwoTofour('e3_GirlsTwoToFour','e3_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_AGirlsFourToSix"
                                                            ng-model="saaForm.e3_AGirlsFourToSix" ng-change="checkSectionE3AGirlsfourTosix('e3_GirlsFourToSix','e3_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e3_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.e3_AGirlsGreaterThanSix" ng-change="checkSectionE3AGirlsgreaterThansix('e3_GirlsGreaterThanSix','e3_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e3_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e3_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="text" disabled id="e3_AGrandTotal"
                                                             value="{{Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e3_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                    <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.a.4. Transferred to other CCIs</label>
                                                            </div>
                                                            </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_ABoysZeroToTwo"
                                                            ng-model="saaForm.e4_ABoysZeroToTwo" ng-change="checkSectionE4ABoysZeroto2('e4_BoysZeroToTwo','e4_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_ABoysTwoToFour"
                                                            ng-model="saaForm.e4_ABoysTwoToFour" ng-change="checkSectionE4ABoystwoTofour('e4_BoysTwoToFour','e4_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_ABoysFourToSix"
                                                            ng-model="saaForm.e4_ABoysFourToSix" ng-change="checkSectionE4ABoysfourTosix('e4_BoysFourToSix','e4_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_ABoysGreaterThanSix"
                                                            ng-model="saaForm.e4_ABoysGreaterThanSix" ng-change="checkSectionE4ABoysgreaterThansix('e4_BoysGreaterThanSix','e4_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e4_ABoysTotal"  
                                                             value="{{Number(saaForm.e4_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_AGirlsZeroToTwo"
                                                            ng-model="saaForm.e4_AGirlsZeroToTwo" ng-change="checkSectionE4AGirlsZeroto2('e4_GirlsZeroToTwo','e4_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_AGirlsTwoToFour"
                                                            ng-model="saaForm.e4_AGirlsTwoToFour" ng-change="checkSectionE4AGirlstwoTofour('e4_GirlsTwoToFour','e4_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_AGirlsFourToSix"
                                                            ng-model="saaForm.e4_AGirlsFourToSix" ng-change="checkSectionE4AGirlsfourTosix('e4_GirlsFourToSix','e4_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e4_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.e4_AGirlsGreaterThanSix" ng-change="checkSectionE4AGirlsgreaterThansix('e4_GirlsGreaterThanSix','e4_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                     
                                                       <td><input type="text" id="e4_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.e4_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="e4_AGrandTotal"
                                                             value="{{Number(saaForm.e4_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.a.5. Due to Death, if any<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup> </label>
                                                            </div>
                                                            </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_ABoysZeroToTwo"
                                                            ng-model="saaForm.e5_ABoysZeroToTwo" ng-change="checkSectionE5ABoysZeroto2('e5_BoysZeroToTwo','e5_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_ABoysTwoToFour"
                                                            ng-model="saaForm.e5_ABoysTwoToFour" ng-change="checkSectionE5ABoystwoTofour('e5_BoysTwoToFour','e5_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_ABoysFourToSix"
                                                            ng-model="saaForm.e5_ABoysFourToSix" ng-change="checkSectionE5ABoysfourTosix('e5_BoysFourToSix','e5_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_ABoysGreaterThanSix"
                                                            ng-model="saaForm.e5_ABoysGreaterThanSix" ng-change="checkSectionE5ABoysgreaterThansix('e5_BoysGreaterThanSix','e5_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e5_ABoysTotal"  
                                                             value="{{Number(saaForm.e5_ABoysZeroToTwo-0)+
																	Number(saaForm.e5_ABoysTwoToFour-0)+
																	Number(saaForm.e5_ABoysFourToSix-0)+
																	Number(saaForm.e5_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_AGirlsZeroToTwo"
                                                            ng-model="saaForm.e5_AGirlsZeroToTwo" ng-change="checkSectionE5AGirlsZeroto2('e5_GirlsZeroToTwo','e5_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_AGirlsTwoToFour"
                                                            ng-model="saaForm.e5_AGirlsTwoToFour" ng-change="checkSectionE5AGirlstwoTofour('e5_GirlsTwoToFour','e5_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_AGirlsFourToSix"
                                                            ng-model="saaForm.e5_AGirlsFourToSix" ng-change="checkSectionE5AGirlsfourTosix('e5_GirlsFourToSix','e5_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e5_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.e5_AGirlsGreaterThanSix" ng-change="checkSectionE5AGirlsgreaterThansix('e5_GirlsGreaterThanSix','e5_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                       <td><input type="text" id="e5_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.e5_AGirlsZeroToTwo-0)+
																	Number(saaForm.e5_AGirlsTwoToFour-0)+
																	Number(saaForm.e5_AGirlsFourToSix-0)+
																	Number(saaForm.e5_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="e5_AGrandTotal"
                                                             value="{{Number(saaForm.e5_ABoysZeroToTwo-0)+
																	Number(saaForm.e5_ABoysTwoToFour-0)+
																	Number(saaForm.e5_ABoysFourToSix-0)+
																	Number(saaForm.e5_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.e5_AGirlsZeroToTwo-0)+
																	Number(saaForm.e5_AGirlsTwoToFour-0)+
																	Number(saaForm.e5_AGirlsFourToSix-0)+
																	Number(saaForm.e5_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">E.a.6. Any other<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup> </label>
                                                            </div>
                                                            </td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_ABoysZeroToTwo"
                                                            ng-model="saaForm.e6_ABoysZeroToTwo" ng-change="checkSectionE6ABoysZeroto2('e6_BoysZeroToTwo','e6_ABoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_ABoysTwoToFour"
                                                            ng-model="saaForm.e6_ABoysTwoToFour" ng-change="checkSectionE6ABoystwoTofour('e6_BoysTwoToFour','e6_ABoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_ABoysFourToSix"
                                                            ng-model="saaForm.e6_ABoysFourToSix" ng-change="checkSectionE6ABoysfourTosix('e6_BoysFourToSix','e6_ABoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_ABoysGreaterThanSix"
                                                            ng-model="saaForm.e6_ABoysGreaterThanSix" ng-change="checkSectionE6ABoysgreaterThansix('e6_BoysGreaterThanSix','e6_ABoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e6_ABoysTotal"  
                                                             value="{{Number(saaForm.e6_ABoysZeroToTwo-0)+
																	Number(saaForm.e6_ABoysTwoToFour-0)+
																	Number(saaForm.e6_ABoysFourToSix-0)+
																	Number(saaForm.e6_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_AGirlsZeroToTwo"
                                                            ng-model="saaForm.e6_AGirlsZeroToTwo" ng-change="checkSectionE6AGirlsZeroto2('e6_GirlsZeroToTwo','e6_AGirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_AGirlsTwoToFour"
                                                            ng-model="saaForm.e6_AGirlsTwoToFour" ng-change="checkSectionE6AGirlstwoTofour('e6_GirlsTwoToFour','e6_AGirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_AGirlsFourToSix"
                                                            ng-model="saaForm.e6_AGirlsFourToSix" ng-change="checkSectionE6AGirlsfourTosix('e6_GirlsFourToSix','e6_AGirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                            
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="e6_AGirlsGreaterThanSix"
                                                            ng-model="saaForm.e6_AGirlsGreaterThanSix" ng-change="checkSectionE6AGirlsgreaterThansix('e6_GirlsGreaterThanSix','e6_AGirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                            ></td>
                                                     
                                                       <td><input type="text" id="e6_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.e6_AGirlsZeroToTwo-0)+
																	Number(saaForm.e6_AGirlsTwoToFour-0)+
																	Number(saaForm.e6_AGirlsFourToSix-0)+
																	Number(saaForm.e6_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                             
                                                       <td><input type="text" disabled id="e6_AGrandTotal"
                                                             value="{{Number(saaForm.e6_ABoysZeroToTwo-0)+
																	Number(saaForm.e6_ABoysTwoToFour-0)+
																	Number(saaForm.e6_ABoysFourToSix-0)+
																	Number(saaForm.e6_ABoysGreaterThanSix-0)+
																	
																	Number(saaForm.e6_AGirlsZeroToTwo-0)+
																	Number(saaForm.e6_AGirlsTwoToFour-0)+
																	Number(saaForm.e6_AGirlsFourToSix-0)+
																	Number(saaForm.e6_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                   <tr>
                                                        <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>E.a.7. Total children moved out in the reporting month</b></label>
                                                            </div>
                                                            </td>
                                                       <td><input type="text" id="e7_ABoysZeroToTwo" disabled
                                                            value="{{Number(saaForm.e1_ABoysZeroToTwo-0)+Number(saaForm.e2_ABoysZeroToTwo-0)+Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysZeroToTwo-0)+Number(saaForm.e5_ABoysZeroToTwo-0)+Number(saaForm.e6_ABoysZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_ABoysTwoToFour" disabled
                                                            value="{{Number(saaForm.e1_ABoysTwoToFour-0)+Number(saaForm.e2_ABoysTwoToFour-0)+Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+Number(saaForm.e5_ABoysTwoToFour-0)+Number(saaForm.e6_ABoysTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_ABoysFourToSix" disabled
                                                            value="{{Number(saaForm.e1_ABoysFourToSix-0)+Number(saaForm.e2_ABoysFourToSix-0)+Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+Number(saaForm.e5_ABoysFourToSix-0)+Number(saaForm.e6_ABoysFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                            
                                                       <td><input type="text" id="e7_ABoysGreaterThanSix" disabled
                                                            value="{{Number(saaForm.e1_ABoysGreaterThanSix-0)+Number(saaForm.e2_ABoysGreaterThanSix-0)+Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+Number(saaForm.e5_ABoysGreaterThanSix-0)+Number(saaForm.e6_ABoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_ABoysTotal"  
                                                            value="{{Number(saaForm.e1_ABoysZeroToTwo-0)+Number(saaForm.e2_ABoysZeroToTwo-0)+Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysZeroToTwo-0)+Number(saaForm.e5_ABoysZeroToTwo-0)+Number(saaForm.e6_ABoysZeroToTwo-0)+
																	Number(saaForm.e1_ABoysTwoToFour-0)+Number(saaForm.e2_ABoysTwoToFour-0)+Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+Number(saaForm.e5_ABoysTwoToFour-0)+Number(saaForm.e6_ABoysTwoToFour-0)+
																	Number(saaForm.e1_ABoysFourToSix-0)+Number(saaForm.e2_ABoysFourToSix-0)+Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+Number(saaForm.e5_ABoysFourToSix-0)+Number(saaForm.e6_ABoysFourToSix-0)+
																	Number(saaForm.e1_ABoysGreaterThanSix-0)+Number(saaForm.e2_ABoysGreaterThanSix-0)+Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+Number(saaForm.e5_ABoysGreaterThanSix-0)+Number(saaForm.e6_ABoysGreaterThanSix-0)}}"
                                                             disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_AGirlsZeroToTwo" disabled
                                                            value="{{Number(saaForm.e1_AGirlsZeroToTwo-0)+Number(saaForm.e2_AGirlsZeroToTwo-0)+Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+Number(saaForm.e5_AGirlsZeroToTwo-0)+Number(saaForm.e6_AGirlsZeroToTwo-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_AGirlsTwoToFour" disabled
                                                            value="{{Number(saaForm.e1_AGirlsTwoToFour-0)+Number(saaForm.e2_AGirlsTwoToFour-0)+Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+Number(saaForm.e5_AGirlsTwoToFour-0)+Number(saaForm.e6_AGirlsTwoToFour-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_AGirlsFourToSix" disabled
                                                            value="{{Number(saaForm.e1_AGirlsFourToSix-0)+Number(saaForm.e2_AGirlsFourToSix-0)+Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+Number(saaForm.e5_AGirlsFourToSix-0)+Number(saaForm.e6_AGirlsFourToSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_AGirlsGreaterThanSix" disabled
                                                            value="{{Number(saaForm.e1_AGirlsGreaterThanSix-0)+Number(saaForm.e2_AGirlsGreaterThanSix-0)+Number(saaForm.e3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)+Number(saaForm.e5_AGirlsGreaterThanSix-0)+Number(saaForm.e6_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="e7_AGirlsTotal" disabled
                                                             value="{{Number(saaForm.e1_AGirlsZeroToTwo-0)+Number(saaForm.e2_AGirlsZeroToTwo-0)+Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+Number(saaForm.e5_AGirlsZeroToTwo-0)+Number(saaForm.e6_AGirlsZeroToTwo-0)+
																	Number(saaForm.e1_AGirlsTwoToFour-0)+Number(saaForm.e2_AGirlsTwoToFour-0)+Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+Number(saaForm.e5_AGirlsTwoToFour-0)+Number(saaForm.e6_AGirlsTwoToFour-0)+
																	Number(saaForm.e1_AGirlsFourToSix-0)+Number(saaForm.e2_AGirlsFourToSix-0)+Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+Number(saaForm.e5_AGirlsFourToSix-0)+Number(saaForm.e6_AGirlsFourToSix-0)+
																	Number(saaForm.e1_AGirlsGreaterThanSix-0)+Number(saaForm.e2_AGirlsGreaterThanSix-0)+Number(saaForm.e3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)+Number(saaForm.e5_AGirlsGreaterThanSix-0)+Number(saaForm.e6_AGirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                       <td><input type="text" disabled id="e7_AGrandTotal"
                                                             value="{{Number(saaForm.e1_ABoysZeroToTwo-0)+Number(saaForm.e2_ABoysZeroToTwo-0)+Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysZeroToTwo-0)+Number(saaForm.e5_ABoysZeroToTwo-0)+Number(saaForm.e6_ABoysZeroToTwo-0)+
																	Number(saaForm.e1_ABoysTwoToFour-0)+Number(saaForm.e2_ABoysTwoToFour-0)+Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+Number(saaForm.e5_ABoysTwoToFour-0)+Number(saaForm.e6_ABoysTwoToFour-0)+
																	Number(saaForm.e1_ABoysFourToSix-0)+Number(saaForm.e2_ABoysFourToSix-0)+Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+Number(saaForm.e5_ABoysFourToSix-0)+Number(saaForm.e6_ABoysFourToSix-0)+
																	Number(saaForm.e1_ABoysGreaterThanSix-0)+Number(saaForm.e2_ABoysGreaterThanSix-0)+Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+Number(saaForm.e5_ABoysGreaterThanSix-0)+Number(saaForm.e6_ABoysGreaterThanSix-0)+
																	Number(saaForm.e1_AGirlsZeroToTwo-0)+Number(saaForm.e2_AGirlsZeroToTwo-0)+Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+Number(saaForm.e5_AGirlsZeroToTwo-0)+Number(saaForm.e6_AGirlsZeroToTwo-0)+
																	Number(saaForm.e1_AGirlsTwoToFour-0)+Number(saaForm.e2_AGirlsTwoToFour-0)+Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+Number(saaForm.e5_AGirlsTwoToFour-0)+Number(saaForm.e6_AGirlsTwoToFour-0)+
																	Number(saaForm.e1_AGirlsFourToSix-0)+Number(saaForm.e2_AGirlsFourToSix-0)+Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+Number(saaForm.e5_AGirlsFourToSix-0)+Number(saaForm.e6_AGirlsFourToSix-0)+
																	Number(saaForm.e1_AGirlsGreaterThanSix-0)+Number(saaForm.e2_AGirlsGreaterThanSix-0)+Number(saaForm.e3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)+Number(saaForm.e5_AGirlsGreaterThanSix-0)+Number(saaForm.e6_AGirlsGreaterThanSix-0)
		                                                             }}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   <!--------------------------------------End of E section ------------------------------------------>


                                   
                                   <!---------------------------------------F Section--------------------------------->
                                   <div class="b4sectionheading" id="caseF"></div>
                                   <div class="grey-header headMarg">F. 
                                   Children on the Last day of the Reporting Month</div>

                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Description</th>
                                                       <th colspan="11">Children on the Last day of the Reporting Month</th>
                                                  </tr>
                                                  <tr>
                                                       <th colspan="5">Boys</th>
                                                       <th colspan="5">Girls</th>
                                                       <th rowspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  <th>F. Children on the Last day of the Reporting Month</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  <th>0-2</th>
                                                  <th>2-4</th>
                                                  <th>4-6</th>
                                                  <th>>6</th>
                                                  <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                      <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>F.1. Children on the last day of the reporting month</b></label>
                                                            </div>
                                                            </td>
                                                       <td><input type="text" id="f1_BoysZeroToTwo"
                                                            disabled
                                                            value="{{Number(saaForm.c1_BoysZeroToTwo-0)+Number(saaForm.c2_BoysZeroToTwo-0)+Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysZeroToTwo-0)+Number(saaForm.c5_BoysZeroToTwo-0)+Number(saaForm.b1_BoysZeroToTwo-0)
																	-(Number(saaForm.e1_BoysZeroToTwo-0)+Number(saaForm.e2_BoysZeroToTwo-0)+Number(saaForm.e3_BoysZeroToTwo-0)+
																	Number(saaForm.e4_BoysZeroToTwo-0)+Number(saaForm.e5_BoysZeroToTwo-0)+Number(saaForm.e6_BoysZeroToTwo-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_BoysTwoToFour"
                                                           disabled
                                                           value="{{Number(saaForm.c1_BoysTwoToFour-0)+Number(saaForm.c2_BoysTwoToFour-0)+Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+Number(saaForm.c5_BoysTwoToFour-0)+Number(saaForm.b1_BoysTwoToFour-0)
																	-(Number(saaForm.e1_BoysTwoToFour-0)+Number(saaForm.e2_BoysTwoToFour-0)+Number(saaForm.e3_BoysTwoToFour-0)+
																	Number(saaForm.e4_BoysTwoToFour-0)+Number(saaForm.e5_BoysTwoToFour-0)+Number(saaForm.e6_BoysTwoToFour-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_BoysFourToSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_BoysFourToSix-0)+Number(saaForm.c2_BoysFourToSix-0)+Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+Number(saaForm.c5_BoysFourToSix-0)+Number(saaForm.b1_BoysFourToSix-0)
																	-(Number(saaForm.e1_BoysFourToSix-0)+Number(saaForm.e2_BoysFourToSix-0)+Number(saaForm.e3_BoysFourToSix-0)+
																	Number(saaForm.e4_BoysFourToSix-0)+Number(saaForm.e5_BoysFourToSix-0)+Number(saaForm.e6_BoysFourToSix-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_BoysGreaterThanSix"
                                                           disabled
                                                           value="{{Number(saaForm.c1_BoysGreaterThanSix-0)+Number(saaForm.c2_BoysGreaterThanSix-0)+Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+Number(saaForm.c5_BoysGreaterThanSix-0)+Number(saaForm.b1_BoysGreaterThanSix-0)
																	-(Number(saaForm.e1_BoysGreaterThanSix-0)+Number(saaForm.e2_BoysGreaterThanSix-0)+Number(saaForm.e3_BoysGreaterThanSix-0)+
																	Number(saaForm.e4_BoysGreaterThanSix-0)+Number(saaForm.e5_BoysGreaterThanSix-0)+Number(saaForm.e6_BoysGreaterThanSix-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_BoysTotal" 
                                                            value="{{
																	Number(saaForm.c1_BoysZeroToTwo-0)+
																	Number(saaForm.c1_BoysTwoToFour-0)+
																	Number(saaForm.c1_BoysFourToSix-0)+
																	Number(saaForm.c1_BoysGreaterThanSix-0)+
																	Number(saaForm.c2_BoysZeroToTwo-0)+
																	Number(saaForm.c2_BoysTwoToFour-0)+
																	Number(saaForm.c2_BoysFourToSix-0)+
																	Number(saaForm.c2_BoysGreaterThanSix-0)+
																	Number(saaForm.c3_BoysZeroToTwo-0)+
																	Number(saaForm.c3_BoysTwoToFour-0)+
																	Number(saaForm.c3_BoysFourToSix-0)+
																	Number(saaForm.c3_BoysGreaterThanSix-0)+
																	Number(saaForm.c4_BoysZeroToTwo-0)+
																	Number(saaForm.c4_BoysTwoToFour-0)+
																	Number(saaForm.c4_BoysFourToSix-0)+
																	Number(saaForm.c4_BoysGreaterThanSix-0)+
																	Number(saaForm.c5_BoysZeroToTwo-0)+
																	Number(saaForm.c5_BoysTwoToFour-0)+
																	Number(saaForm.c5_BoysFourToSix-0)+
																	Number(saaForm.c5_BoysGreaterThanSix-0)+
																	Number(saaForm.b1_BoysZeroToTwo-0)+
																	Number(saaForm.b1_BoysTwoToFour-0)+
																	Number(saaForm.b1_BoysFourToSix-0)+
																	Number(saaForm.b1_BoysGreaterThanSix-0)
																	-(Number(saaForm.e1_BoysZeroToTwo-0)+Number(saaForm.e2_BoysZeroToTwo-0)+Number(saaForm.e3_BoysZeroToTwo-0)+
																	Number(saaForm.e4_BoysZeroToTwo-0)+Number(saaForm.e5_BoysZeroToTwo-0)+Number(saaForm.e6_BoysZeroToTwo-0)+
																	Number(saaForm.e1_BoysTwoToFour-0)+Number(saaForm.e2_BoysTwoToFour-0)+Number(saaForm.e3_BoysTwoToFour-0)+
																	Number(saaForm.e4_BoysTwoToFour-0)+Number(saaForm.e5_BoysTwoToFour-0)+Number(saaForm.e6_BoysTwoToFour-0)+
																	Number(saaForm.e1_BoysFourToSix-0)+Number(saaForm.e2_BoysFourToSix-0)+Number(saaForm.e3_BoysFourToSix-0)+
																	Number(saaForm.e4_BoysFourToSix-0)+Number(saaForm.e5_BoysFourToSix-0)+Number(saaForm.e6_BoysFourToSix-0)+
																	Number(saaForm.e1_BoysGreaterThanSix-0)+Number(saaForm.e2_BoysGreaterThanSix-0)+Number(saaForm.e3_BoysGreaterThanSix-0)+
																	Number(saaForm.e4_BoysGreaterThanSix-0)+Number(saaForm.e5_BoysGreaterThanSix-0)+Number(saaForm.e6_BoysGreaterThanSix-0)
																	
																	)
																	}}" 
                                                            disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_GirlsZeroToTwo"
                                                          disabled
                                                          value="{{Number(saaForm.c1_GirlsZeroToTwo-0)+Number(saaForm.c2_GirlsZeroToTwo-0)+Number(saaForm.c3_GirlsZeroToTwo-0)+
																Number(saaForm.c4_GirlsZeroToTwo-0)+Number(saaForm.c5_GirlsZeroToTwo-0)+Number(saaForm.b1_GirlsZeroToTwo-0)
																-(Number(saaForm.e1_GirlsZeroToTwo-0)+Number(saaForm.e2_GirlsZeroToTwo-0)+Number(saaForm.e3_GirlsZeroToTwo-0)+
																Number(saaForm.e4_GirlsZeroToTwo-0)+Number(saaForm.e5_GirlsZeroToTwo-0)+Number(saaForm.e6_GirlsZeroToTwo-0))
																}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_GirlsTwoToFour"
                                                            disabled
                                                            value="{{Number(saaForm.c1_GirlsTwoToFour-0)+Number(saaForm.c2_GirlsTwoToFour-0)+Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+Number(saaForm.c5_GirlsTwoToFour-0)+Number(saaForm.b1_GirlsTwoToFour-0)
																	-(Number(saaForm.e1_GirlsTwoToFour-0)+Number(saaForm.e2_GirlsTwoToFour-0)+Number(saaForm.e3_GirlsTwoToFour-0)+
																	Number(saaForm.e4_GirlsTwoToFour-0)+Number(saaForm.e5_GirlsTwoToFour-0)+Number(saaForm.e6_GirlsTwoToFour-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_GirlsFourToSix"
                                                           disabled
                                                           value="{{Number(saaForm.c1_GirlsFourToSix-0)+Number(saaForm.c2_GirlsFourToSix-0)+Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+Number(saaForm.c5_GirlsFourToSix-0)+Number(saaForm.b1_GirlsFourToSix-0)
																	-(Number(saaForm.e1_GirlsFourToSix-0)+Number(saaForm.e2_GirlsFourToSix-0)+Number(saaForm.e3_GirlsFourToSix-0)+
																	Number(saaForm.e4_GirlsFourToSix-0)+Number(saaForm.e5_GirlsFourToSix-0)+Number(saaForm.e6_GirlsFourToSix-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_GirlsGreaterThanSix"
                                                           disabled
                                                           value="{{Number(saaForm.c1_GirlsGreaterThanSix-0)+Number(saaForm.c2_GirlsGreaterThanSix-0)+Number(saaForm.c3_GirlsGreaterThanSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)+Number(saaForm.c5_GirlsGreaterThanSix-0)+Number(saaForm.b1_GirlsGreaterThanSix-0)
																	-(Number(saaForm.e1_GirlsGreaterThanSix-0)+Number(saaForm.e2_GirlsGreaterThanSix-0)+Number(saaForm.e3_GirlsGreaterThanSix-0)
																	+Number(saaForm.e4_GirlsGreaterThanSix-0)+Number(saaForm.e5_GirlsGreaterThanSix-0)+Number(saaForm.e6_GirlsGreaterThanSix-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                            ></td>
                                                       <td><input type="text" id="f1_GirlsTotal" 
                                                             value="{{
																	Number(saaForm.c1_GirlsZeroToTwo-0)+
																	Number(saaForm.c1_GirlsTwoToFour-0)+
																	Number(saaForm.c1_GirlsFourToSix-0)+
																	Number(saaForm.c1_GirlsGreaterThanSix-0)+
																	Number(saaForm.c2_GirlsZeroToTwo-0)+
																	Number(saaForm.c2_GirlsTwoToFour-0)+
																	Number(saaForm.c2_GirlsFourToSix-0)+
																	Number(saaForm.c2_GirlsGreaterThanSix-0)+
																	Number(saaForm.c3_GirlsZeroToTwo-0)+
																	Number(saaForm.c3_GirlsTwoToFour-0)+
																	Number(saaForm.c3_GirlsFourToSix-0)+
																	Number(saaForm.c3_GirlsGreaterThanSix-0)+
																	Number(saaForm.c4_GirlsZeroToTwo-0)+
																	Number(saaForm.c4_GirlsTwoToFour-0)+
																	Number(saaForm.c4_GirlsFourToSix-0)+
																	Number(saaForm.c4_GirlsGreaterThanSix-0)+
																	Number(saaForm.c5_GirlsZeroToTwo-0)+
																	Number(saaForm.c5_GirlsTwoToFour-0)+
																	Number(saaForm.c5_GirlsFourToSix-0)+
																	Number(saaForm.c5_GirlsGreaterThanSix-0)+
																	Number(saaForm.b1_GirlsZeroToTwo-0)+
																	Number(saaForm.b1_GirlsTwoToFour-0)+
																	Number(saaForm.b1_GirlsFourToSix-0)+
																	Number(saaForm.b1_GirlsGreaterThanSix-0)
																	-(Number(saaForm.e1_GirlsZeroToTwo-0)+Number(saaForm.e2_GirlsZeroToTwo-0)+Number(saaForm.e3_GirlsZeroToTwo-0)+
																	Number(saaForm.e4_GirlsZeroToTwo-0)+Number(saaForm.e5_GirlsZeroToTwo-0)+Number(saaForm.e6_GirlsZeroToTwo-0)+
																	Number(saaForm.e1_GirlsTwoToFour-0)+Number(saaForm.e2_GirlsTwoToFour-0)+Number(saaForm.e3_GirlsTwoToFour-0)+
																	Number(saaForm.e4_GirlsTwoToFour-0)+Number(saaForm.e5_GirlsTwoToFour-0)+Number(saaForm.e6_GirlsTwoToFour-0)+
																	Number(saaForm.e1_GirlsFourToSix-0)+Number(saaForm.e2_GirlsFourToSix-0)+Number(saaForm.e3_GirlsFourToSix-0)+
																	Number(saaForm.e4_GirlsFourToSix-0)+Number(saaForm.e5_GirlsFourToSix-0)+Number(saaForm.e6_GirlsFourToSix-0)+
																	Number(saaForm.e1_GirlsGreaterThanSix-0)+Number(saaForm.e2_GirlsGreaterThanSix-0)+Number(saaForm.e3_GirlsGreaterThanSix-0)+
																	Number(saaForm.e4_GirlsGreaterThanSix-0)+Number(saaForm.e5_GirlsGreaterThanSix-0)+Number(saaForm.e6_GirlsGreaterThanSix-0))
																	}}" 
                                                           disabled
                                                              class="form-control inputBackground tableinputWidth  totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f1_GrandTotal"
                                                            disabled
                                                             value="{{
																		Number(saaForm.c1_BoysZeroToTwo-0)+
																		Number(saaForm.c1_BoysTwoToFour-0)+
																		Number(saaForm.c1_BoysFourToSix-0)+
																		Number(saaForm.c1_BoysGreaterThanSix-0)+
																		Number(saaForm.c1_GirlsZeroToTwo-0)+
																		Number(saaForm.c1_GirlsTwoToFour-0)+
																		Number(saaForm.c1_GirlsFourToSix-0)+
																		Number(saaForm.c1_GirlsGreaterThanSix-0)+
																		
																		Number(saaForm.c2_BoysZeroToTwo-0)+
																		Number(saaForm.c2_BoysTwoToFour-0)+
																		Number(saaForm.c2_BoysFourToSix-0)+
																		Number(saaForm.c2_BoysGreaterThanSix-0)+
																		Number(saaForm.c2_GirlsZeroToTwo-0)+
																		Number(saaForm.c2_GirlsTwoToFour-0)+
																		Number(saaForm.c2_GirlsFourToSix-0)+
																		Number(saaForm.c2_GirlsGreaterThanSix-0)+
																		
																		Number(saaForm.c3_BoysZeroToTwo-0)+
																		Number(saaForm.c3_BoysTwoToFour-0)+
																		Number(saaForm.c3_BoysFourToSix-0)+
																		Number(saaForm.c3_BoysGreaterThanSix-0)+
																		Number(saaForm.c3_GirlsZeroToTwo-0)+
																		Number(saaForm.c3_GirlsTwoToFour-0)+
																		Number(saaForm.c3_GirlsFourToSix-0)+
																		Number(saaForm.c3_GirlsGreaterThanSix-0)+
																		
																		Number(saaForm.c4_BoysZeroToTwo-0)+
																		Number(saaForm.c4_BoysTwoToFour-0)+
																		Number(saaForm.c4_BoysFourToSix-0)+
																		Number(saaForm.c4_BoysGreaterThanSix-0)+
																		Number(saaForm.c4_GirlsZeroToTwo-0)+
																		Number(saaForm.c4_GirlsTwoToFour-0)+
																		Number(saaForm.c4_GirlsFourToSix-0)+
																		Number(saaForm.c4_GirlsGreaterThanSix-0)+
																		
																		Number(saaForm.c5_BoysZeroToTwo-0)+
																		Number(saaForm.c5_BoysTwoToFour-0)+
																		Number(saaForm.c5_BoysFourToSix-0)+
																		Number(saaForm.c5_BoysGreaterThanSix-0)+
																		Number(saaForm.c5_GirlsZeroToTwo-0)+
																		Number(saaForm.c5_GirlsTwoToFour-0)+
																		Number(saaForm.c5_GirlsFourToSix-0)+
																		Number(saaForm.c5_GirlsGreaterThanSix-0)+
																		Number(saaForm.b1_BoysZeroToTwo-0)+
																		Number(saaForm.b1_BoysTwoToFour-0)+
																		Number(saaForm.b1_BoysFourToSix-0)+
																		Number(saaForm.b1_BoysGreaterThanSix-0)
																		+
																		Number(saaForm.b1_GirlsZeroToTwo-0)+
																		Number(saaForm.b1_GirlsTwoToFour-0)+
																		Number(saaForm.b1_GirlsFourToSix-0)+
																		Number(saaForm.b1_GirlsGreaterThanSix-0)
		                                                             	-
		                                                             	(Number(saaForm.e1_BoysZeroToTwo-0)+Number(saaForm.e2_BoysZeroToTwo-0)+Number(saaForm.e3_BoysZeroToTwo-0)+
																		Number(saaForm.e4_BoysZeroToTwo-0)+Number(saaForm.e5_BoysZeroToTwo-0)+Number(saaForm.e6_BoysZeroToTwo-0)+
																		Number(saaForm.e1_BoysTwoToFour-0)+Number(saaForm.e2_BoysTwoToFour-0)+Number(saaForm.e3_BoysTwoToFour-0)+
																		Number(saaForm.e4_BoysTwoToFour-0)+Number(saaForm.e5_BoysTwoToFour-0)+Number(saaForm.e6_BoysTwoToFour-0)+
																		Number(saaForm.e1_BoysFourToSix-0)+Number(saaForm.e2_BoysFourToSix-0)+Number(saaForm.e3_BoysFourToSix-0)+
																		Number(saaForm.e4_BoysFourToSix-0)+Number(saaForm.e5_BoysFourToSix-0)+Number(saaForm.e6_BoysFourToSix-0)+
																		Number(saaForm.e1_BoysGreaterThanSix-0)+Number(saaForm.e2_BoysGreaterThanSix-0)+Number(saaForm.e3_BoysGreaterThanSix-0)+
																		Number(saaForm.e4_BoysGreaterThanSix-0)+Number(saaForm.e5_BoysGreaterThanSix-0)+Number(saaForm.e6_BoysGreaterThanSix-0)+
																		Number(saaForm.e1_GirlsZeroToTwo-0)+Number(saaForm.e2_GirlsZeroToTwo-0)+Number(saaForm.e3_GirlsZeroToTwo-0)+
																		Number(saaForm.e4_GirlsZeroToTwo-0)+Number(saaForm.e5_GirlsZeroToTwo-0)+Number(saaForm.e6_GirlsZeroToTwo-0)+
																		Number(saaForm.e1_GirlsTwoToFour-0)+Number(saaForm.e2_GirlsTwoToFour-0)+Number(saaForm.e3_GirlsTwoToFour-0)+
																		Number(saaForm.e4_GirlsTwoToFour-0)+Number(saaForm.e5_GirlsTwoToFour-0)+Number(saaForm.e6_GirlsTwoToFour-0)+
																		Number(saaForm.e1_GirlsFourToSix-0)+Number(saaForm.e2_GirlsFourToSix-0)+Number(saaForm.e3_GirlsFourToSix-0)+
																		Number(saaForm.e4_GirlsFourToSix-0)+Number(saaForm.e5_GirlsFourToSix-0)+Number(saaForm.e6_GirlsFourToSix-0)+
																		Number(saaForm.e1_GirlsGreaterThanSix-0)+Number(saaForm.e2_GirlsGreaterThanSix-0)+Number(saaForm.e3_GirlsGreaterThanSix-0)+
																		Number(saaForm.e4_GirlsGreaterThanSix-0)+Number(saaForm.e5_GirlsGreaterThanSix-0)+Number(saaForm.e6_GirlsGreaterThanSix-0))
																		                                                             }}" 
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>F.2. Children with Special Need on the last day of the reporting month</b></label>
                                                            </div>
                                                            </td>
                                                       <td><input type="text" id="f2_BoysZeroToTwo"
                                                            disabled
                                                            value="{{Number(saaForm.c1_ABoysZeroToTwo-0)+Number(saaForm.c2_ABoysZeroToTwo-0)+Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysZeroToTwo-0)+Number(saaForm.c5_ABoysZeroToTwo-0)+Number(saaForm.b1_ABoysZeroToTwo-0)
																	-(Number(saaForm.e1_ABoysZeroToTwo-0)+Number(saaForm.e2_ABoysZeroToTwo-0)+Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysZeroToTwo-0)+Number(saaForm.e5_ABoysZeroToTwo-0)+Number(saaForm.e6_ABoysZeroToTwo-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_BoysTwoToFour"
                                                            disabled
                                                            value="{{Number(saaForm.c1_ABoysTwoToFour-0)+Number(saaForm.c2_ABoysTwoToFour-0)+Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+Number(saaForm.c5_ABoysTwoToFour-0)+Number(saaForm.b1_ABoysTwoToFour-0)
																	-(Number(saaForm.e1_ABoysTwoToFour-0)+Number(saaForm.e2_ABoysTwoToFour-0)+Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+Number(saaForm.e5_ABoysTwoToFour-0)+Number(saaForm.e6_ABoysTwoToFour-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_BoysFourToSix"
                                                            disabled 
                                                            value="{{Number(saaForm.c1_ABoysFourToSix-0)+Number(saaForm.c2_ABoysFourToSix-0)+Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+Number(saaForm.c5_ABoysFourToSix-0)+Number(saaForm.b1_ABoysFourToSix-0)
																	-(Number(saaForm.e1_ABoysFourToSix-0)+Number(saaForm.e2_ABoysFourToSix-0)+Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+Number(saaForm.e5_ABoysFourToSix-0)+Number(saaForm.e6_ABoysFourToSix-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_BoysGreaterThanSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_ABoysGreaterThanSix-0)+Number(saaForm.c2_ABoysGreaterThanSix-0)+Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+Number(saaForm.c5_ABoysGreaterThanSix-0)+Number(saaForm.b1_ABoysGreaterThanSix-0)
																	-(Number(saaForm.e1_ABoysGreaterThanSix-0)+Number(saaForm.e2_ABoysGreaterThanSix-0)+Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+Number(saaForm.e5_ABoysGreaterThanSix-0)+Number(saaForm.e6_ABoysGreaterThanSix-0))
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_BoysTotal" disabled
                                                             value="{{
																	Number(saaForm.c1_ABoysZeroToTwo-0)+
																	Number(saaForm.c1_ABoysTwoToFour-0)+
																	Number(saaForm.c1_ABoysFourToSix-0)+
																	Number(saaForm.c1_ABoysGreaterThanSix-0)+
																	Number(saaForm.c2_ABoysZeroToTwo-0)+
																	Number(saaForm.c2_ABoysTwoToFour-0)+
																	Number(saaForm.c2_ABoysFourToSix-0)+
																	Number(saaForm.c2_ABoysGreaterThanSix-0)+
																	Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	Number(saaForm.c4_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+
																	Number(saaForm.c5_ABoysZeroToTwo-0)+
																	Number(saaForm.c5_ABoysTwoToFour-0)+
																	Number(saaForm.c5_ABoysFourToSix-0)+
																	Number(saaForm.c5_ABoysGreaterThanSix-0)+
																	Number(saaForm.b1_ABoysZeroToTwo-0)+
																	Number(saaForm.b1_ABoysTwoToFour-0)+
																	Number(saaForm.b1_ABoysFourToSix-0)+
																	Number(saaForm.b1_ABoysGreaterThanSix-0)
																	-(Number(saaForm.e1_ABoysZeroToTwo-0)+Number(saaForm.e2_ABoysZeroToTwo-0)+Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysZeroToTwo-0)+Number(saaForm.e5_ABoysZeroToTwo-0)+Number(saaForm.e6_ABoysZeroToTwo-0)+
																	Number(saaForm.e1_ABoysTwoToFour-0)+Number(saaForm.e2_ABoysTwoToFour-0)+Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+Number(saaForm.e5_ABoysTwoToFour-0)+Number(saaForm.e6_ABoysTwoToFour-0)+
																	Number(saaForm.e1_ABoysFourToSix-0)+Number(saaForm.e2_ABoysFourToSix-0)+Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+Number(saaForm.e5_ABoysFourToSix-0)+Number(saaForm.e6_ABoysFourToSix-0)+
																	Number(saaForm.e1_ABoysGreaterThanSix-0)+Number(saaForm.e2_ABoysGreaterThanSix-0)+Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+Number(saaForm.e5_ABoysGreaterThanSix-0)+Number(saaForm.e6_ABoysGreaterThanSix-0)
																	)
																	}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                       <td><input type="text" id="f2_GirlsZeroToTwo"
                                                            disabled
                                                            value="{{Number(saaForm.c1_AGirlsZeroToTwo-0)+Number(saaForm.c2_AGirlsZeroToTwo-0)+Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+Number(saaForm.c5_AGirlsZeroToTwo-0)+Number(saaForm.b1_AGirlsZeroToTwo-0)
																	-(Number(saaForm.e1_AGirlsZeroToTwo-0)+Number(saaForm.e2_AGirlsZeroToTwo-0)+Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+Number(saaForm.e5_AGirlsZeroToTwo-0)+Number(saaForm.e6_AGirlsZeroToTwo-0))
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_GirlsTwoToFour"
                                                            disabled 
                                                            value="{{Number(saaForm.c1_AGirlsTwoToFour-0)+Number(saaForm.c2_AGirlsTwoToFour-0)+Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+Number(saaForm.c5_AGirlsTwoToFour-0)+Number(saaForm.b1_AGirlsTwoToFour-0)
																	-(Number(saaForm.e1_AGirlsTwoToFour-0)+Number(saaForm.e2_AGirlsTwoToFour-0)+Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+Number(saaForm.e5_AGirlsTwoToFour-0)+Number(saaForm.e6_AGirlsTwoToFour-0))
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_GirlsFourToSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_AGirlsFourToSix-0)+Number(saaForm.c2_AGirlsFourToSix-0)+Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+Number(saaForm.c5_AGirlsFourToSix-0)+Number(saaForm.b1_AGirlsFourToSix-0)
																	-(Number(saaForm.e1_AGirlsFourToSix-0)+Number(saaForm.e2_AGirlsFourToSix-0)+Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+Number(saaForm.e5_AGirlsFourToSix-0)+Number(saaForm.e6_AGirlsFourToSix-0))
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_GirlsGreaterThanSix"
                                                            disabled
                                                            value="{{Number(saaForm.c1_AGirlsGreaterThanSix-0)+Number(saaForm.c2_AGirlsGreaterThanSix-0)+Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)+Number(saaForm.c5_AGirlsGreaterThanSix-0)+Number(saaForm.b1_AGirlsGreaterThanSix-0)
																	-(Number(saaForm.e1_AGirlsGreaterThanSix-0)+Number(saaForm.e2_AGirlsGreaterThanSix-0)+Number(saaForm.e3_AGirlsGreaterThanSix-0)
																	+Number(saaForm.e4_AGirlsGreaterThanSix-0)+Number(saaForm.e5_AGirlsGreaterThanSix-0)+Number(saaForm.e6_AGirlsGreaterThanSix-0))
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="f2_GirlsTotal"
                                                            disabled
                                                            value="{{
																	Number(saaForm.c1_AGirlsZeroToTwo-0)+
																	Number(saaForm.c1_AGirlsTwoToFour-0)+
																	Number(saaForm.c1_AGirlsFourToSix-0)+
																	Number(saaForm.c1_AGirlsGreaterThanSix-0)+
																	Number(saaForm.c2_AGirlsZeroToTwo-0)+
																	Number(saaForm.c2_AGirlsTwoToFour-0)+
																	Number(saaForm.c2_AGirlsFourToSix-0)+
																	Number(saaForm.c2_AGirlsGreaterThanSix-0)+
																	Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)+
																	Number(saaForm.c5_AGirlsZeroToTwo-0)+
																	Number(saaForm.c5_AGirlsTwoToFour-0)+
																	Number(saaForm.c5_AGirlsFourToSix-0)+
																	Number(saaForm.c5_AGirlsGreaterThanSix-0)+
																	Number(saaForm.b1_AGirlsZeroToTwo-0)+
																	Number(saaForm.b1_AGirlsTwoToFour-0)+
																	Number(saaForm.b1_AGirlsFourToSix-0)+
																	Number(saaForm.b1_AGirlsGreaterThanSix-0)
																	-(Number(saaForm.e1_AGirlsZeroToTwo-0)+Number(saaForm.e2_AGirlsZeroToTwo-0)+Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+Number(saaForm.e5_AGirlsZeroToTwo-0)+Number(saaForm.e6_AGirlsZeroToTwo-0)+
																	Number(saaForm.e1_AGirlsTwoToFour-0)+Number(saaForm.e2_AGirlsTwoToFour-0)+Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+Number(saaForm.e5_AGirlsTwoToFour-0)+Number(saaForm.e6_AGirlsTwoToFour-0)+
																	Number(saaForm.e1_AGirlsFourToSix-0)+Number(saaForm.e2_AGirlsFourToSix-0)+Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+Number(saaForm.e5_AGirlsFourToSix-0)+Number(saaForm.e6_AGirlsFourToSix-0)+
																	Number(saaForm.e1_AGirlsGreaterThanSix-0)+Number(saaForm.e2_AGirlsGreaterThanSix-0)+Number(saaForm.e3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)+Number(saaForm.e5_AGirlsGreaterThanSix-0)+Number(saaForm.e6_AGirlsGreaterThanSix-0))
																	}}"
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                            ></td>
                                                       <td><input type="text" disabled id="f2_GrandTotal"
                                                             value="{{
																	Number(saaForm.c1_ABoysZeroToTwo-0)+
																	Number(saaForm.c1_ABoysTwoToFour-0)+
																	Number(saaForm.c1_ABoysFourToSix-0)+
																	Number(saaForm.c1_ABoysGreaterThanSix-0)+
																	Number(saaForm.c1_AGirlsZeroToTwo-0)+
																	Number(saaForm.c1_AGirlsTwoToFour-0)+
																	Number(saaForm.c1_AGirlsFourToSix-0)+
																	Number(saaForm.c1_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c2_ABoysZeroToTwo-0)+
																	Number(saaForm.c2_ABoysTwoToFour-0)+
																	Number(saaForm.c2_ABoysFourToSix-0)+
																	Number(saaForm.c2_ABoysGreaterThanSix-0)+
																	Number(saaForm.c2_AGirlsZeroToTwo-0)+
																	Number(saaForm.c2_AGirlsTwoToFour-0)+
																	Number(saaForm.c2_AGirlsFourToSix-0)+
																	Number(saaForm.c2_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c3_ABoysZeroToTwo-0)+
																	Number(saaForm.c3_ABoysTwoToFour-0)+
																	Number(saaForm.c3_ABoysFourToSix-0)+
																	Number(saaForm.c3_ABoysGreaterThanSix-0)+
																	Number(saaForm.c3_AGirlsZeroToTwo-0)+
																	Number(saaForm.c3_AGirlsTwoToFour-0)+
																	Number(saaForm.c3_AGirlsFourToSix-0)+
																	Number(saaForm.c3_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c4_ABoysZeroToTwo-0)+
																	Number(saaForm.c4_ABoysTwoToFour-0)+
																	Number(saaForm.c4_ABoysFourToSix-0)+
																	Number(saaForm.c4_ABoysGreaterThanSix-0)+
																	Number(saaForm.c4_AGirlsZeroToTwo-0)+
																	Number(saaForm.c4_AGirlsTwoToFour-0)+
																	Number(saaForm.c4_AGirlsFourToSix-0)+
																	Number(saaForm.c4_AGirlsGreaterThanSix-0)+
																	
																	Number(saaForm.c5_ABoysZeroToTwo-0)+
																	Number(saaForm.c5_ABoysTwoToFour-0)+
																	Number(saaForm.c5_ABoysFourToSix-0)+
																	Number(saaForm.c5_ABoysGreaterThanSix-0)+
																	Number(saaForm.c5_AGirlsZeroToTwo-0)+
																	Number(saaForm.c5_AGirlsTwoToFour-0)+
																	Number(saaForm.c5_AGirlsFourToSix-0)+
																	Number(saaForm.c5_AGirlsGreaterThanSix-0)+
																	Number(saaForm.b1_ABoysZeroToTwo-0)+
																	Number(saaForm.b1_ABoysTwoToFour-0)+
																	Number(saaForm.b1_ABoysFourToSix-0)+
																	Number(saaForm.b1_ABoysGreaterThanSix-0)+
																	Number(saaForm.b1_AGirlsZeroToTwo-0)+
																	Number(saaForm.b1_AGirlsTwoToFour-0)+
																	Number(saaForm.b1_AGirlsFourToSix-0)+
																	Number(saaForm.b1_AGirlsGreaterThanSix-0)
	                                                             	-
	                                                             	(Number(saaForm.e1_ABoysZeroToTwo-0)+Number(saaForm.e2_ABoysZeroToTwo-0)+Number(saaForm.e3_ABoysZeroToTwo-0)+
																	Number(saaForm.e4_ABoysZeroToTwo-0)+Number(saaForm.e5_ABoysZeroToTwo-0)+Number(saaForm.e6_ABoysZeroToTwo-0)+
																	Number(saaForm.e1_ABoysTwoToFour-0)+Number(saaForm.e2_ABoysTwoToFour-0)+Number(saaForm.e3_ABoysTwoToFour-0)+
																	Number(saaForm.e4_ABoysTwoToFour-0)+Number(saaForm.e5_ABoysTwoToFour-0)+Number(saaForm.e6_ABoysTwoToFour-0)+
																	Number(saaForm.e1_ABoysFourToSix-0)+Number(saaForm.e2_ABoysFourToSix-0)+Number(saaForm.e3_ABoysFourToSix-0)+
																	Number(saaForm.e4_ABoysFourToSix-0)+Number(saaForm.e5_ABoysFourToSix-0)+Number(saaForm.e6_ABoysFourToSix-0)+
																	Number(saaForm.e1_ABoysGreaterThanSix-0)+Number(saaForm.e2_ABoysGreaterThanSix-0)+Number(saaForm.e3_ABoysGreaterThanSix-0)+
																	Number(saaForm.e4_ABoysGreaterThanSix-0)+Number(saaForm.e5_ABoysGreaterThanSix-0)+Number(saaForm.e6_ABoysGreaterThanSix-0)+
																	Number(saaForm.e1_AGirlsZeroToTwo-0)+Number(saaForm.e2_AGirlsZeroToTwo-0)+Number(saaForm.e3_AGirlsZeroToTwo-0)+
																	Number(saaForm.e4_AGirlsZeroToTwo-0)+Number(saaForm.e5_AGirlsZeroToTwo-0)+Number(saaForm.e6_AGirlsZeroToTwo-0)+
																	Number(saaForm.e1_AGirlsTwoToFour-0)+Number(saaForm.e2_AGirlsTwoToFour-0)+Number(saaForm.e3_AGirlsTwoToFour-0)+
																	Number(saaForm.e4_AGirlsTwoToFour-0)+Number(saaForm.e5_AGirlsTwoToFour-0)+Number(saaForm.e6_AGirlsTwoToFour-0)+
																	Number(saaForm.e1_AGirlsFourToSix-0)+Number(saaForm.e2_AGirlsFourToSix-0)+Number(saaForm.e3_AGirlsFourToSix-0)+
																	Number(saaForm.e4_AGirlsFourToSix-0)+Number(saaForm.e5_AGirlsFourToSix-0)+Number(saaForm.e6_AGirlsFourToSix-0)+
																	Number(saaForm.e1_AGirlsGreaterThanSix-0)+Number(saaForm.e2_AGirlsGreaterThanSix-0)+Number(saaForm.e3_AGirlsGreaterThanSix-0)+
																	Number(saaForm.e4_AGirlsGreaterThanSix-0)+Number(saaForm.e5_AGirlsGreaterThanSix-0)+Number(saaForm.e6_AGirlsGreaterThanSix-0))
																	                                                             }}"
                                                              class="form-control inputBackground tableinputWidth totalFont">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.3. No. of orphaned/abandoned children on the last day of the reporting month</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_BoysZeroToTwo"
                                                            ng-model="saaForm.f3_BoysZeroToTwo" ng-change="checkBoysZerotoTwof1withf3sumf4('f3_BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_BoysTwoToFour"
                                                            ng-model="saaForm.f3_BoysTwoToFour" ng-change="checkBoysTwotoFourf1withf3sumf4('f3_BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_BoysFourToSix"
                                                            ng-model="saaForm.f3_BoysFourToSix" ng-change="checkBoysFourtoSixf1withf3sumf4('f3_BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_BoysGreaterThanSix"
                                                            ng-model="saaForm.f3_BoysGreaterThanSix" ng-change="checkBoysGreaterThanSixf1withf3sumf4('f3_BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="text" id="f3_BoysTotal" disabled
                                                             value="{{Number(saaForm.f3_BoysZeroToTwo-0)+Number(saaForm.f3_BoysTwoToFour-0)+Number(saaForm.f3_BoysFourToSix-0)+Number(saaForm.f3_BoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth  " 
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_GirlsZeroToTwo"
                                                            ng-model="saaForm.f3_GirlsZeroToTwo" ng-change="checkGirlsZerotoTwof1withf3sumf4('f3_GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_GirlsTwoToFour"
                                                            ng-model="saaForm.f3_GirlsTwoToFour" ng-change="checkGirlsTwotoFourf1withf3sumf4('f3_GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_GirlsFourToSix"
                                                            ng-model="saaForm.f3_GirlsFourToSix" ng-change="checkGirlsFourtoSixf1withf3sumf4('f3_GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f3_GirlsGreaterThanSix"
                                                            ng-model="saaForm.f3_GirlsGreaterThanSix" ng-change="checkGirlsGreaterThanSixf1withf3sumf4('f3_GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="text" id="f3_GirlsTotal"
                                                             value="{{Number(saaForm.f3_GirlsZeroToTwo-0)+Number(saaForm.f3_GirlsTwoToFour-0)+Number(saaForm.f3_GirlsFourToSix-0)+Number(saaForm.f3_GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="f3_GrandTotal"
                                                             value="{{Number(saaForm.f3_BoysZeroToTwo-0)+Number(saaForm.f3_BoysTwoToFour-0)+Number(saaForm.f3_BoysFourToSix-0)+Number(saaForm.f3_BoysGreaterThanSix-0)+
                                                             		Number(saaForm.f3_GirlsZeroToTwo-0)+Number(saaForm.f3_GirlsTwoToFour-0)+Number(saaForm.f3_GirlsFourToSix-0)+Number(saaForm.f3_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                                  
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">F.4. No. of surrendered children on the last day of the reporting month</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_BoysZeroToTwo"
                                                            ng-model="saaForm.f4_BoysZeroToTwo"  ng-change="checkBoysZerotoTwof1withf3sumf4('f4_BoysZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_BoysTwoToFour"
                                                            ng-model="saaForm.f4_BoysTwoToFour" ng-change="checkBoysTwotoFourf1withf3sumf4('f4_BoysTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_BoysFourToSix"
                                                            ng-model="saaForm.f4_BoysFourToSix" ng-change="checkBoysFourtoSixf1withf3sumf4('f4_BoysFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_BoysGreaterThanSix"
                                                            ng-model="saaForm.f4_BoysGreaterThanSix" ng-change="checkBoysGreaterThanSixf1withf3sumf4('f4_BoysGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="text" id="f4_BoysTotal" disabled
                                                             value="{{Number(saaForm.f4_BoysZeroToTwo-0)+Number(saaForm.f4_BoysTwoToFour-0)+Number(saaForm.f4_BoysFourToSix-0)+Number(saaForm.f4_BoysGreaterThanSix-0)}}" 
                                                              class="form-control inputBackground tableinputWidth  " 
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_GirlsZeroToTwo"
                                                            ng-model="saaForm.f4_GirlsZeroToTwo" ng-change="checkGirlsZerotoTwof1withf3sumf4('f4_GirlsZeroToTwo')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_GirlsTwoToFour"
                                                            ng-model="saaForm.f4_GirlsTwoToFour" ng-change="checkGirlsTwotoFourf1withf3sumf4('f4_GirlsTwoToFour')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_GirlsFourToSix"
                                                            ng-model="saaForm.f4_GirlsFourToSix" ng-change="checkGirlsFourtoSixf1withf3sumf4('f4_GirlsFourToSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="f4_GirlsGreaterThanSix"
                                                            ng-model="saaForm.f4_GirlsGreaterThanSix" ng-change="checkGirlsGreaterThanSixf1withf3sumf4('f4_GirlsGreaterThanSix')"
                                                              class="form-control inputBackground tableinputWidth " required
                                                             ></td>
                                                       <td><input type="text" id="f4_GirlsTotal"
                                                             value="{{Number(saaForm.f4_GirlsZeroToTwo-0)+Number(saaForm.f4_GirlsTwoToFour-0)+Number(saaForm.f4_GirlsFourToSix-0)+Number(saaForm.f4_GirlsGreaterThanSix-0)}}" disabled
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="text" disabled id="f4_GrandTotal"
                                                             value="{{Number(saaForm.f4_BoysZeroToTwo-0)+Number(saaForm.f4_BoysTwoToFour-0)+Number(saaForm.f4_BoysFourToSix-0)+Number(saaForm.f4_BoysGreaterThanSix-0)+
                                                             Number(saaForm.f4_GirlsZeroToTwo-0)+Number(saaForm.f4_GirlsTwoToFour-0)+Number(saaForm.f4_GirlsFourToSix-0)+Number(saaForm.f4_GirlsGreaterThanSix-0)}}"
                                                              class="form-control inputBackground tableinputWidth ">
                                                       </td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>

                                   <!---------------------------------------End of F section ---------------------------------- -->
                                   
                                   <!--------------------------------------- Start G section---------------------------------->
                                   <div class="b4sectionheading" id="caseG"></div>
                                   <div class="grey-header headMarg">G.
                                     Pendency of Cases before the CWC for Declaring a Child Legally Free for Adoption </div>

                                  
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Pendency of Cases before the CWC for Declaring a Child Legally Free for Adoption </th>
                                                       <th colspan="2">Orphan</th>
                                                       <th colspan="2">Abandoned</th>
                                                       <th colspan="2">Surrendered</th>
                                                       <th colspan="2">Grand Total</th>
                                                  </tr>
                                                  <tr>
                                                  
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  <th>Boys</th>
                                                  <th>Girls</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.1. Pending on First Day of the month</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g1OrphanBoys"
                                                            ng-model="saaForm.g1OrphanBoys"  required ng-change="checkGNegetive1('g1OrphanBoys','g3OrphanBoys','g4OrphanBoys','Orphan Boys')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g1OrphanGirls"
                                                            ng-model="saaForm.g1OrphanGirls"  required ng-change="checkGNegetive1('g1OrphanGirls','g3OrphanGirls','g4OrphanGirls','Orphan Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g1AbandonedBoys"
                                                            ng-model="saaForm.g1AbandonedBoys"  required ng-change="checkGNegetive1('g1AbandonedBoys','g3AbandonedBoys','g4AbandonedBoys','Abandoned Boys')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g1AbandonedGirls"
                                                            ng-model="saaForm.g1AbandonedGirls"  required  ng-change="checkGNegetive1('g1AbandonedGirls','g3AbandonedGirls','g4AbandonedGirls','Abandoned Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g1SurrenderedBoys" 
                                                       		ng-model="saaForm.g1SurrenderedBoys" required ng-change="checkGNegetive1('g1SurrenderedBoys','g3SurrenderedBoys','g4SurrenderedBoys','Surrendered Boys')"
                                                              class="form-control inputBackground tableinputWidth  "
                                                            ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g1SurrenderedGirls"
                                                            ng-model="saaForm.g1SurrenderedGirls"  required  ng-change="checkGNegetive1('g1SurrenderedGirls','g3SurrenderedGirls','g4SurrenderedGirls','Surrendered Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="g1GrandTotalBoys" disabled
                                                            value="{{Number(saaForm.g1OrphanBoys-0)+
																	Number(saaForm.g1AbandonedBoys-0)+
																	Number(saaForm.g1SurrenderedBoys-0)}}" 
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       <td><input type="text" id="g1GrandTotalGirls"  disabled
                                                            value="{{Number(saaForm.g1OrphanGirls-0)+
																	Number(saaForm.g1AbandonedGirls-0)+
																	Number(saaForm.g1SurrenderedGirls-0)}}"
                                                              class="form-control inputBackground tableinputWidth "
                                                            ></td>
                                                       
                                                  </tr>
                                                  <tr>
                                                  <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.2. Number of new Cases filed  in the month</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g2OrphanBoys"
                                                            ng-model="saaForm.g2OrphanBoys" required  ng-change="checkGNegetive1('g2OrphanBoys','g3OrphanBoys','g4OrphanBoys','Orphan Boys')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g2OrphanGirls"
                                                            ng-model="saaForm.g2OrphanGirls" required ng-change="checkGNegetive1('g2OrphanGirls','g3OrphanGirls','g4OrphanGirls','Orphan Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g2AbandonedBoys"
                                                            ng-model="saaForm.g2AbandonedBoys" required ng-change="checkGNegetive1('g2AbandonedBoys','g3AbandonedBoys','g4AbandonedBoys','Abandoned Boys')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g2AbandonedGirls"
                                                            ng-model="saaForm.g2AbandonedGirls" required  ng-change="checkGNegetive1('g2AbandonedGirls','g3AbandonedGirls','g4AbandonedGirls','Abandoned Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number" id="g2SurrenderedBoys" ng-disabled="saaForm.submitted" only-four-digits
                                                       		ng-model="saaForm.g2SurrenderedBoys" required ng-change="checkGNegetive1('g2SurrenderedBoys','g3SurrenderedBoys','g4SurrenderedBoys','Surrendered Boys')"
                                                              class="form-control inputBackground tableinputWidth"
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g2SurrenderedGirls"
                                                            ng-model="saaForm.g2SurrenderedGirls"  required ng-change="checkGNegetive1('g2SurrenderedGirls','g3SurrenderedGirls','g4SurrenderedGirls','Surrendered Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="g2GrandTotalBoys" disabled
                                                            value="{{Number(saaForm.g2OrphanBoys-0)+
																	Number(saaForm.g2AbandonedBoys-0)+
																	Number(saaForm.g2SurrenderedBoys-0)}}"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="g2GrandTotalGirls" disabled
                                                            value="{{Number(saaForm.g2OrphanGirls-0)+
																	Number(saaForm.g2AbandonedGirls-0)+
																	Number(saaForm.g2SurrenderedGirls-0)}}"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.3. Number of Cases Disposed of in the month</label>
                                                            </div>
                                                            </td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g3OrphanBoys"
                                                            ng-model="saaForm.g3OrphanBoys" required   ng-change="checkGNegetive('g3OrphanBoys','g4OrphanBoys','Orphan Boys')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g3OrphanGirls"
                                                            ng-model="saaForm.g3OrphanGirls"  required  ng-change="checkGNegetive('g3OrphanGirls','g4OrphanGirls','Orphan Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g3AbandonedBoys"
                                                            ng-model="saaForm.g3AbandonedBoys"  required  ng-change="checkGNegetive('g3AbandonedBoys','g4AbandonedBoys','Abandoned Boys')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" only-four-digits id="g3AbandonedGirls"
                                                            ng-model="saaForm.g3AbandonedGirls" required  ng-change="checkGNegetive('g3AbandonedGirls','g4AbandonedGirls','Abandoned Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="number" id="g3SurrenderedBoys" ng-disabled="saaForm.submitted" only-four-digits
                                                             ng-model="saaForm.g3SurrenderedBoys" required   ng-change="checkGNegetive('g3SurrenderedBoys','g4SurrenderedBoys','Surrendered Boys')"
                                                              class="form-control inputBackground tableinputWidth  "
                                                             ></td>
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="g3SurrenderedGirls"
                                                            ng-model="saaForm.g3SurrenderedGirls" only-four-digits required ng-change="checkGNegetive('g3SurrenderedGirls','g4SurrenderedGirls','Surrendered Girls')"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="g3GrandTotalBoys" disabled
                                                            value="{{Number(saaForm.g3OrphanBoys-0)+
																	Number(saaForm.g3AbandonedBoys-0)+
																	Number(saaForm.g3SurrenderedBoys-0)
                                                            		}}"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                       <td><input type="text" id="g3GrandTotalGirls" disabled
                                                            value="{{Number(saaForm.g3OrphanGirls-0)+
																	Number(saaForm.g3AbandonedGirls-0)+
																	Number(saaForm.g3SurrenderedGirls-0)}}"
                                                              class="form-control inputBackground tableinputWidth "
                                                             ></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                   <td>
                                                            <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>G.4. Pending in the Last day of the month</b> </label>
                                                            </div>
                                                            </td>
                                                       <td><input type="text" id="g4OrphanBoys" disabled
                                                            value="{{Number(saaForm.g1OrphanBoys-0)+Number(saaForm.g2OrphanBoys-0)-Number(saaForm.g3OrphanBoys-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="g4OrphanGirls" disabled
                                                            value="{{Number(saaForm.g1OrphanGirls-0)+Number(saaForm.g2OrphanGirls-0)-Number(saaForm.g3OrphanGirls-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="g4AbandonedBoys" disabled
                                                            value="{{Number(saaForm.g1AbandonedBoys-0)+Number(saaForm.g2AbandonedBoys-0)-Number(saaForm.g3AbandonedBoys-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="g4AbandonedGirls" disabled
                                                            value="{{Number(saaForm.g1AbandonedGirls-0)+Number(saaForm.g2AbandonedGirls-0)-Number(saaForm.g3AbandonedGirls-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="g4SurrenderedBoys" disabled
                                                            value="{{Number(saaForm.g1SurrenderedBoys-0)+Number(saaForm.g2SurrenderedBoys-0)-Number(saaForm.g3SurrenderedBoys-0)}}"
                                                              class="form-control inputBackground tableinputWidth totalFont "
                                                             ></td>
                                                       <td><input type="text" id="g4SurrenderedGirls" disabled
                                                            value="{{Number(saaForm.g1SurrenderedGirls-0)+Number(saaForm.g2SurrenderedGirls-0)-Number(saaForm.g3SurrenderedGirls-0)}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="g4GrandTotalBoys" disabled
                                                            value="{{Number(saaForm.g1OrphanBoys-0)+
																	Number(saaForm.g1AbandonedBoys-0)+
																	Number(saaForm.g1SurrenderedBoys-0)+
																	Number(saaForm.g2OrphanBoys-0)+
																	Number(saaForm.g2AbandonedBoys-0)+
																	Number(saaForm.g2SurrenderedBoys-0)
																	-
																	(Number(saaForm.g3OrphanBoys-0)+
																	Number(saaForm.g3AbandonedBoys-0)+
																	Number(saaForm.g3SurrenderedBoys-0))}}" 
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                       <td><input type="text" id="g4GrandTotalGirls" disabled
                                                            value="{{Number(saaForm.g1OrphanGirls-0)+
																	Number(saaForm.g1AbandonedGirls-0)+
																	Number(saaForm.g1SurrenderedGirls-0)+
																	Number(saaForm.g2OrphanGirls-0)+
																	Number(saaForm.g2AbandonedGirls-0)+
																	Number(saaForm.g2SurrenderedGirls-0)
																	-
																	(Number(saaForm.g3OrphanGirls-0)+
																	Number(saaForm.g3AbandonedGirls-0)+
																	Number(saaForm.g3SurrenderedGirls-0))}}"
                                                              class="form-control inputBackground tableinputWidth totalFont"
                                                             ></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                    <div class="grey-header headMarg">G.5. Details of cases pending on the Last Day<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup></div>
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th rowspan="2">Cases Pending before the CWC</th>
                                                       <th colspan="2">Children below the age of 2 years</th>
                                                       <th colspan="2">Children above age of 2 years</th>
                                                  </tr>
                                                  <tr>
                                                  		<th><60 days</th>
                                                    	<th>>60 days</th>
                                                        <th><120 days</th>
                                                        <th>>120 days</th>
                                                  </tr>
                                                  
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                  
                                                  <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.1.a. Orphaned/Abandoned Children </label>
                                                        </div>
                                                   </td>
                                                             
                                                       <td><input type="number"  ng-disabled="saaForm.submitted" id="g5_1LessThan60"
                                                            ng-model="saaForm.g5_1LessThan60" 
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>

													<td><input type="number" id="g5_1greaterThan60" 
														ng-disabled="saaForm.submitted" 
														required ng-model="saaForm.g5_1greaterThan60"
														class="form-control inputBackground tableinputWidth removeExponentialValueE"
														only-four-digits></td>
													<td><input type="number" id="g5_1LessThan120"
														ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_1LessThan120"
														class="form-control inputBackground tableinputWidth removeExponentialValueE "
														only-four-digits></td>
													<td><input type="number" id="g5_1GreaterThan120"
														ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_1GreaterThan120"
														class="form-control inputBackground tableinputWidth removeExponentialValueE"
														only-four-digits></td>
												</tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>Cases Pending before the CWC</th>
                                                       <th>Pending for <60 days</th>
                                                       <th>Pending for >60 days</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.2.a. Surrendered Children</label>
                                                        </div>
                                                   </td>
                                                             
                                                       <td><input type="number" id="g5_2LessThan60"
                                                           	 ng-model="saaForm.g5_2LessThan60"  ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5_2GreaterThan60" 
                                                           	 ng-model="saaForm.g5_2GreaterThan60"
                                                             ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
													<td><input type="text" id="g5_2Total"
													disabled
													value="{{Number(saaForm.g5_2LessThan60)+Number(saaForm.g5_2GreaterThan60-0)}}"
													class="form-control inputBackground tableinputWidth removeExponentialValueE readonlyStyle"></td>
										</tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>Cases Pending before the Court</th>
                                                       <th>Pending for <60 days</th>
                                                       <th>Pending for 60-120 days</th>
                                                       <th>>120 days</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                                <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.3. In Country</label>
                                                        </div>
                                                   </td>
                                                             
                                                       <td><input type="number" id="g5_3LessThan60"
                                                            ng-model="saaForm.g5_3LessThan60" ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5_3Between60To120" 
                                                             ng-model="saaForm.g5_3Between60To120"
                                                            ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
														<td><input type="number" id="g5_3GreaterThan120"  
															ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_3GreaterThan120"
															class="form-control inputBackground tableinputWidth removeExponentialValueE "
															only-four-digits></td>
														<td><input type="text" id="g5_3Total"
															value="{{Number(saaForm.g5_3LessThan60-0)+Number(saaForm.g5_3Between60To120-0)+Number(saaForm.g5_3GreaterThan120-0)}}"
															disabled 
															class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
													</tr>
                                                  
                                                   <tr>
                                                    <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.4. Inter Country</label>
                                                        </div>
                                                   </td>
                                                             
                                                       <td><input type="number" id="g5_4LessThan60"
                                                            ng-model="saaForm.g5_4LessThan60" ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                             
                                                       <td><input type="number" id="g5_4Between60To120" 
                                                             ng-model="saaForm.g5_4Between60To120"
                                                            ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE "
                                                             only-four-digits></td>
											<td><input type="number" id="g5_4GreaterThan120" 
												ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_4GreaterThan120"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>
											<td><input type="text" id="g5_4Total"
												value="{{Number(saaForm.g5_4LessThan60-0)+Number(saaForm.g5_4Between60To120-0)+Number(saaForm.g5_4GreaterThan120-0)}}"
												disabled
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>
										<tr>
										 <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>G.5.5. Total</b></label>
                                                        </div>
                                                   </td>

											<td><input type="text" id="g5_5LessThan60"
												disabled
												value="{{Number(saaForm.g5_3LessThan60-0)+Number(saaForm.g5_4LessThan60-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>

											<td><input type="text" id="g5_5Between60To120" 
												disabled
												value="{{Number(saaForm.g5_3Between60To120-0)+Number(saaForm.g5_4Between60To120-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
											<td><input type="text" id="g5_5GreaterThan120" 
												disabled
												value="{{Number(saaForm.g5_3GreaterThan120-0)+Number(saaForm.g5_4GreaterThan120-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
											<td><input type="text" id="g5_5Total" 
												disabled
												value="{{Number(saaForm.g5_3LessThan60-0)+Number(saaForm.g5_3Between60To120-0)+Number(saaForm.g5_3GreaterThan120-0)+
														Number(saaForm.g5_4LessThan60-0)+Number(saaForm.g5_4Between60To120-0)+Number(saaForm.g5_4GreaterThan120-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
										</tr>
									</tbody>
                                        </table>
                                   </div>
                                   
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>G.5.6. Cases Pending before the Court</th>
                                                       <th>Pending for <30 days</th>
                                                       <th>Pending for >30 days</th>
                                                       <th>Uploaded on Caring's</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
										<tr>
										<td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.6.a. Home study report of PAPs</label>
                                                        </div>
                                                   </td>

											<td><input type="number" id="g5_6LessThan30"
												ng-model="saaForm.g5_6LessThan30"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="g5_6GreaterThan30" 
												ng-model="saaForm.g5_6GreaterThan30"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="g5_6UploadeBy" 
												ng-disabled="saaForm.submitted"
												required ng-model="saaForm.g5_6UploadeBy"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
										</tr>
									</tbody>
                                        </table>
                                   </div>
                                   
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>G.5.7. Cases Pending before the Court</th>
                                                       <th>Up to 10 days</th>
                                                       <th>10-20 days</th>
                                                       <th>20-30 days</th>
                                                       <th>>30 days</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                  <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.7.a. Pending for birth certificate</label>
                                                        </div>
                                                   </td>

											<td><input type="number" id="g5_7DaysUpto10"
												ng-model="saaForm.g5_7DaysUpto10" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="g5_7Days10To20" 
												ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_7Days10To20"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>
											<td><input type="number" id="g5_7Days20To30"
												ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_7Days20To30"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>
											<td><input type="number" id="g5_7DaysGreaterThan30" 
												ng-disabled="saaForm.submitted" required ng-model="saaForm.g5_7DaysGreaterThan30"
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>
											<td><input type="text" id="g5_7Total"
												disabled
												value="{{Number(saaForm.g5_7DaysUpto10-0)+Number(saaForm.g5_7Days10To20-0)+Number(saaForm.g5_7Days20To30-0)+Number(saaForm.g5_7DaysGreaterThan30-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
										</tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                    <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>G.5.8. Number of time children went for outing (Picnic/Excursion/Sightseeing)</th>
                                                       <th>Number</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">G.5.8.a. Number of time children went for outing (Picnic/Excursion/Sightseeing)</label>
                                                        </div>
                                                   </td>
                                                       <td><input type="number" id="g5_8Total" ng-model="saaForm.g5_8Total"
                                                           ng-disabled="saaForm.submitted"
                                                             required class="form-control inputBackground tableinputWidth removeExponentialValueE"
                                                             only-four-digits></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>

                                  
                                   <!------------------------------------------ End G section------------------------------->


                                   <!----------------------------------------------Start H section------------------------------------------->
                                   <div class="b4sectionheading" id="caseH"></div>
                                   <div class="grey-header headMarg">H. Prospective Adoptive Parents (PAPs)<sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Give details in separate sheet, Submit Report to SARA (through e-mail/fax) by 3rd of every month</span></i></sup></div>
                                   
                                   
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>Prospective Adoptive Parents (PAPs)</th>
                                                       <th>Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.1. Number of PAPs on the 1st day of the reporting month</label>
                                                        </div>
                                                   </td>
                                                       <td><input type="number" id="h_h1"
                                                  ng-model="saaForm.h_h1"
                                                  ng-change="checkH5Negetive('h_h1')"
                                                  ng-disabled="saaForm.submitted"
                                                   required class="form-control inputBackground_h removeExponentialValueE"
                                                   only-four-digits></td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.2. Number of PAPs registered during the month</label>
                                                        </div>
                                                   </td>
                                                       <td> <input type="number" id="h_h2"
                                                  ng-model="saaForm.h_h2"
                                                  ng-change="checkH5Negetive('h_h2')"
                                                  ng-disabled="saaForm.submitted"
                                                   required class="form-control inputBackground_h removeExponentialValueE"
                                                   only-four-digits></td>
                                                  </tr>
                                                   <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.3. Number of PAPs having children in Pre-Adoption Foster Care (from any SAA) during the month</label>
                                                        </div>
                                                   </td>
                                                       <td> <input type="number" id="h_h3"
                                                  ng-model="saaForm.h_h3"
                                                  ng-change="checkH5Negetive('h_h3')"
                                                  ng-disabled="saaForm.submitted"
                                                   required class="form-control inputBackground_h removeExponentialValueE"
                                                   only-four-digits></td>
                                                  </tr>
                                                   <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.4. Number of PAPs rejected/withdrawn during the month</label>
                                                        </div>
                                                   </td>
                                                       <td> <input type="number" id="h_h4"
                                                  ng-model="saaForm.h_h4"
                                                  ng-change="checkH5Negetive('h_h4')"
                                                  ng-disabled="saaForm.submitted"
                                                   required class="form-control inputBackground_h removeExponentialValueE"
                                                   only-four-digits></td>
                                                  </tr>
                                                  <tr>
                                                   <td>
                                                     <div class="textAlign">
                                                                 <label class="control-label totalFont" for="textinput">H.5. Number of PAPs registered and on waiting list on last day of the month</label>
                                                        </div>
                                                   </td>
                                                       <td> <input type="text" id="h_h5"
                                                  value="{{Number(saaForm.h_h1-0)+Number(saaForm.h_h2-0)-(Number(saaForm.h_h3-0)+Number(saaForm.h_h4-0))}}"
                                                  disabled
                                                  class="form-control inputBackground_h removeExponentialValueE totalFont"></td>
                                                  </tr>
                                             </tbody>
                                        </table>
                                   </div>
                                   
                                   
                                   <div class="labelFont">
                                        <table class="table table-bordered table-margintop" id="tableH912">
                                             <thead>
                                                  <tr>
                                                       <th>H.1. Preference of PAPs</th>
                                                       <th>No choice</th>
                                                       <th>Girls </th>
                                                       <th>Boys</th>
                                                       <th>Siblings</th>
                                                       <th>Total</th>
                                                       <th>Special Needs</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
										<tr>
											<td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.1.1. Up to 02 years</label>
                                                        </div>
                                                   </td>

											<td><input type="number" id="h1_1NoChoice"
												ng-model="saaForm.h1_1NoChoice"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="h1_1Girls" 
												 ng-model="saaForm.h1_1Girls"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_1Boys"
												ng-model="saaForm.h1_1Boys" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_1Siblings"
												ng-model="saaForm.h1_1Siblings" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="h1_1Total"
												disabled
												value="{{Number(saaForm.h1_1NoChoice-0)+Number(saaForm.h1_1Girls-0)+Number(saaForm.h1_1Boys-0)+Number(saaForm.h1_1Siblings-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											<td><input type="number" id="h1_1SplNeeds"
												ng-model="saaForm.h1_1SplNeeds" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
										</tr>

										<tr>
										<td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.1.2. 02 to 04 years</label>
                                                        </div>
                                                   </td>
										

											<td><input type="number" id="h1_2NoChoice"
												ng-model="saaForm.h1_2NoChoice"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="h1_2Girls" 
												  ng-model="saaForm.h1_2Girls"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_2Boys"
												ng-model="saaForm.h1_2Boys" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_2Siblings"
												ng-model="saaForm.h1_2Siblings" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="h1_2Total"
												disabled
												value="{{Number(saaForm.h1_2NoChoice-0)+Number(saaForm.h1_2Girls-0)+Number(saaForm.h1_2Boys-0)+Number(saaForm.h1_2Siblings-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											<td><input type="number" id="h1_2SplNeeds"
												ng-model="saaForm.h1_2SplNeeds" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
										</tr>

										<tr>
										<td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.1.3. 04 to 06 years</label>
                                                        </div>
                                                   </td>
											<td><input type="number" id="h1_3NoChoice"
												ng-model="saaForm.h1_3NoChoice"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="h1_3Girls" 
												ng-model="saaForm.h1_3Girls"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_3Boys"
												ng-model="saaForm.h1_3Boys" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_3Siblings"
												ng-model="saaForm.h1_3Siblings" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="h1_3Total"
												disabled
												value="{{Number(saaForm.h1_3NoChoice-0)+Number(saaForm.h1_3Girls-0)+Number(saaForm.h1_3Boys-0)+Number(saaForm.h1_3Siblings-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_3SplNeeds"
												ng-model="saaForm.h1_3SplNeeds" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
										</tr>

										<tr>
										<td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput">H.1.4. >6 years</label>
                                                        </div>
                                                   </td>

											<td><input type="number" id="h1_4NoChoice"
												ng-model="saaForm.h1_4NoChoice"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>

											<td><input type="number" id="h1_4Girls" 
												ng-model="saaForm.h1_4Girls"
												ng-disabled="saaForm.submitted" required
												class="form-control inputBackground tableinputWidth removeExponentialValueE "
												only-four-digits></td>
											<td><input type="number" id="h1_4Boys"
												ng-model="saaForm.h1_4Boys" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="number" id="h1_4Siblings"
												ng-model="saaForm.h1_4Siblings" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
											<td><input type="text" id="h1_4Total"
												disabled
												value="{{Number(saaForm.h1_4NoChoice-0)+Number(saaForm.h1_4Girls-0)+Number(saaForm.h1_4Boys-0)+Number(saaForm.h1_4Siblings-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE"></td>
											<td><input type="number" id="h1_4SplNeeds"
												ng-model="saaForm.h1_4SplNeeds" ng-disabled="saaForm.submitted"
												required
												class="form-control inputBackground tableinputWidth removeExponentialValueE"
												only-four-digits></td>
										</tr>

										<tr>
										<td>
                                                     <div class="textAlign">
                                                                 <label class="control-label" for="textinput"><b>H.1.5. Total no. of PAPs (as on last day)</b></label>
                                                        </div>
                                                   </td>
										
											<td><input type="text" id="h1_5NoChoice"
												disabled
												value="{{Number(saaForm.h1_1NoChoice-0)+Number(saaForm.h1_2NoChoice-0)+Number(saaForm.h1_3NoChoice-0)+Number(saaForm.h1_4NoChoice-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>

											<td><input type="text" id="h1_5Girls" 
												disabled
												value="{{Number(saaForm.h1_1Girls-0)+Number(saaForm.h1_2Girls-0)+Number(saaForm.h1_3Girls-0)+Number(saaForm.h1_4Girls-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
											<td><input type="text" id="h1_5Boys"
												disabled
												value="{{Number(saaForm.h1_1Boys-0)+Number(saaForm.h1_2Boys-0)+Number(saaForm.h1_3Boys-0)+Number(saaForm.h1_4Boys-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
											<td><input type="text" id="h1_5Siblings"
												disabled
												value="{{Number(saaForm.h1_1Siblings-0)+Number(saaForm.h1_2Siblings-0)+Number(saaForm.h1_3Siblings-0)+Number(saaForm.h1_4Siblings-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
											<td><input type="text" id="h1_5Total"
												disabled
												value="{{Number(saaForm.h1_1NoChoice-0)+Number(saaForm.h1_2NoChoice-0)+Number(saaForm.h1_3NoChoice-0)+Number(saaForm.h1_4NoChoice-0)+
														Number(saaForm.h1_1Girls-0)+Number(saaForm.h1_2Girls-0)+Number(saaForm.h1_3Girls-0)+Number(saaForm.h1_4Girls-0)+
														Number(saaForm.h1_1Boys-0)+Number(saaForm.h1_2Boys-0)+Number(saaForm.h1_3Boys-0)+Number(saaForm.h1_4Boys-0)+
														Number(saaForm.h1_1Siblings-0)+Number(saaForm.h1_2Siblings-0)+Number(saaForm.h1_3Siblings-0)+Number(saaForm.h1_4Siblings-0)
														}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
											<td><input type="text" id="h1_5SplNeeds"
												disabled
												value="{{Number(saaForm.h1_1SplNeeds-0)+Number(saaForm.h1_2SplNeeds-0)+Number(saaForm.h1_3SplNeeds-0)+Number(saaForm.h1_4SplNeeds-0)}}"
												class="form-control inputBackground tableinputWidth removeExponentialValueE totalFont"></td>
										</tr>

									</tbody>
                                        </table>
                                   </div>


                                  
                                    <!----------------------------------------------J section----------------------------------------- -->
                                   
                                    <div class="b4sectionheading" id="caseI"></div>
                                   <div class="grey-header headMarg">I.
                                      Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days) </div>
                                   <div class="panel-group sectionMarginTopDCPU" id="accordion1" role="tablist" ng-show="!showJ"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default sectionMarginTop no-child-in">
												<h3>There are no cases of legally free for adoption pending before different CWC</h3>
											 </div>
                                   </div>   
                                   <div class="panel-group sectionMarginTopDCPU" id="accordion2" role="tablist" ng-show="showJ"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default sectionMarginTop"
                                                  ng-repeat="saaSectionJ in saaFormJSectionRepeatationArray track by $index">
                                                  <div class="panel-heading" role="tab"
                                                       onclick="changeIcon(this)" id="{{'heading2'+$index}}">
                                                       <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse"
                                                                 ng-click="initializeJDatePickers($index)"
                                                                 data-parent="#accordion2" href="{{'#collapse2'+$index}}"
                                                                 aria-expanded="true" aria-controls="collapseOne"> <i
                                                                 class="more-less glyphicon glyphicon-plus"></i> Child - {{$index+1}}
                                                            </a>
                                                       </h4>
                                                  </div>

                                                  <div id="{{'collapse2'+$index}}"
                                                       class="panel-collapse collapse" role="tabpanel"
                                                       aria-labelledby="headingOne">
                                                       <div class="panel-body">
                                                        <div class="row iSection-table">
                                                        <div class="col-md-6">
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.1. Name of the Child</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text"  ng-disabled="saaForm.submitted" fifty-characters-validation
                                                                      ng-model="saaFormJSectionRepeatationArray[$index].j_nameOfChild"
                                                                      class="form-control inputBackgroundgeneral_i removeExponentialValueE">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.2. Date of Birth </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="jdobDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted" readonly
                                                                           ng-click="openFromDatePicker($index)"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_dateOfBirth"
                                                                           class="form-control  jdobDatepicker inputBackgroundgeneral_i"><i
                                                                           class="fa fa-calendar fa-5x" id="jdobDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                  <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.3. Age</label>
                                                                 <div class="col-md-6">
                                                                      <input type="number"  ng-disabled="saaForm.submitted"  
                                                                      only-two-digits 
                                                                      ng-change="changeAccordingToAgeI($index)"
                                                                       max="18" onKeyUp="if(Number(this.value)>Number(17)){this.value=Number(17-0);}"
                                                                      ng-model="saaFormJSectionRepeatationArray[$index].j_age" 
                                                                      class="form-control inputBackgroundgeneral inputBackgroundgeneral_i removeExponentialValueE">
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.4. Gender of the Child</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in childGender"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_gender"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.5. Date of Admission in SAA </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="jadmissionDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_dateOfAdmission"
                                                                           class="form-control jdateOfAdmission inputBackgroundgeneral_i"><i
                                                                           class="fa fa-calendar fa-5x" id="jadmissionDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                             
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.6. Caring Registration Number</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="saaForm.submitted" fifty-characters-validation-saa
                                                                      ng-model="saaFormJSectionRepeatationArray[$index].j_caringRegNoDate"
                                                                      class="form-control inputBackgroundgeneral_i removeExponentialValueE">
                                                                 </div>
                                                            </div>
                                                            
                                                               <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.7. Category of the Child came to SAA</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in childCategory"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_saaCategoryName"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            </div>
															<div class="col-md-6">
                                                         
															<div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.8. Type of the Child</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in typeOfChild"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_typeOfChild"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.9. Referred by CWC (District)</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-disabled="saaForm.submitted"
                                                                           ng-options="item as item.areaName for item in district"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_referredByCwc"
                                                                           ng-value="item.areaId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.10. Date of Paper Publication </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="jpaperPublicationDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_dateOfpublication"
                                                                           class="form-control jdateOfpublication inputBackgroundgeneral_i"><i
                                                                           class="fa fa-calendar fa-5x" id="jpaperPublicationDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                           
                                                            <div class="form-group labelFont">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.11. Reason of Pendency</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-change="resetJOthers(saaSectionJ, 'j10')"
                                                                           ng-disabled="saaForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in reasonOfPendency"
                                                                           ng-model="saaFormJSectionRepeatationArray[$index].j_reasonOfPendency"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground-select inputBackgroundgeneral_i">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>
                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="saaFormJSectionRepeatationArray[$index].j_reasonOfPendency.typeDetailsId == 42">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> I.11.i. Please Specify</label>
                                                                 <div class="col-md-6">
                                                                       <textarea type="text"  ng-disabled="saaForm.submitted"
                                                                      hundred-fifty-characters-validation-saa
                                                                      ng-model="saaFormJSectionRepeatationArray[$index].j_reasonOfPendencyOther"
                                                                      class="form-control inputBackgroundgeneral_i"></textarea>     
                                                                 </div>
                                                            </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             </div>
                                             <!-- --------Adding training details------- -->

                                             <div class="col-md-12 text-left ">
                                                  <div class="addingnewdetails-container">
                                                       <div id="trainingDetailserror" class="error-style"></div>
                                                       <button type="button" class="addingnewdetails" ng-disabled="saaForm.submitted"
                                                            ng-click="addNewDetailsJ()" style="margin-left: 0px;">+</button>
                                                       <button type="button" class="addingnewdetails"
                                                            ng-show="saaFormJSectionRepeatationArray.length > 1" ng-disabled="saaForm.submitted"
                                                            ng-click="deleteConfirmJ()">-</button>
                                                       <div id="maximumLimitErrorJ" class="error-style"></div>
                                                  </div>
                                             </div>
                                

                                             <!-- end ---------------------------- -->

                                        </div>
                                   <br><br>
                                   
                                    <!----------------------------------------------End J section----------------------------------------- -->
                                   
                                   
                                   <!----------------------------------------------K section----------------------------------------- -->

                                
                                   <div class="b4sectionheading" id="caseJ"></div>
                                   <div class="grey-header headMarg">J. Training on JJ System</div>

                                   <div class="form-group labelFont sectionMarginTop borderBottom">
                                        <label class="col-md-6 control-label labelLeftAlign marginBottomTop"
                                             for="textinput"> J.1.  Was the Training held on JJ
                                             system?</label>
                                        <div class="col-md-6 marginBottomTop">
                                             <select  required class="form-control inputBackground"
                                             ng-change="resetToZeroaccd1(saaForm.k1WasTrainingHeldJJSysytem)"
                                                  ng-disabled="saaForm.submitted" ng-model="saaForm.k1WasTrainingHeldJJSysytem">
                                                  <option value="" disabled selected>Select</option>
                                                  <option value="true">Yes</option>
                                                  <option value="false">No</option>
                                             </select>
                                        </div>
                                   </div>

                                   <div ng-show="saaForm.k1WasTrainingHeldJJSysytem == 'true'">
                                        <div class="form-group labelFont ">
                                             <label class="col-md-6 control-label labelLeftAlign"
                                                  for="textinput"> J.1.a. Numbers of Training Held</label>
                                             <div class="col-md-6">
                                                  <input id="k1aNoOfTraining" type="number" ng-disabled="saaForm.submitted" only-four-digits 
                                                  	   ng-model="saaForm.k1aNoOfTraining" ng-blur="validateNoOfTraining(saaForm.k1aNoOfTraining)"
                                                       ng-disabled="saaForm.submitted"
                                                       required class="form-control inputBackground removeExponentialValueE" limit-to="2">
                                             </div>
                                        </div>

                                        <div class="panel-group" id="accordion33" role="tablist"
                                             aria-multiselectable="true">
                                             <div class="panel panel-default"
                                                  ng-repeat="saaTrainingDetails in saaTrainingDetailsRepetitionArray track by $index">
                                                  <div class="panel-heading" role="tab"
                                                       onclick="changeIcon(this)" id="{{'heading'+$index}}">
                                                       <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse"
                                                                 ng-click="initializeDatePicker($index)"
                                                                 data-parent="#accordion33" href="{{'#collapse33'+$index}}"
                                                                 aria-expanded="true" aria-controls="collapseOne"> <i
                                                                 class="more-less glyphicon glyphicon-plus"></i> Training
                                                                 Details {{$index+1}}
                                                            </a>
                                                       </h4>
                                                  </div>

                                                  <div id="{{'collapse33'+$index}}"
                                                       class="panel-collapse collapse" role="tabpanel"
                                                       aria-labelledby="headingOne">
                                                       <div class="panel-body">
                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.b. Duration of Trainings (no.
                                                                      of days)</label>
                                                                 <div class="col-md-6">
                                                                      <input type="number"  ng-disabled="saaForm.submitted" only-four-digits ng-disabled="saaForm.submitted" limit-to="2"
                                                                      max="31" onKeyUp="if(Number(this.value)>Number(document.getElementById('monthDays').value)){this.value=document.getElementById('monthDays').value;}"
                                                                      ng-model="saaTrainingDetailsRepetitionArray[$index].durationTraining"
                                                                      class="form-control inputBackgroundgeneral removeExponentialValueE">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.c. Training From </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="trainingFromDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted" readonly
                                                                           ng-click="openFromDatePicker($index)"
                                                                           ng-model="saaTrainingDetailsRepetitionArray[$index].trainingFromDate"
                                                                             class="form-control  accordionFromDatepicker inputBackgroundgeneral"><i
                                                                           class="fa fa-calendar fa-5x" id="trainingFromDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>
                                                            <div class="form-group labelFont">

                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.d. Training To </label>
                                                                 <div class="col-md-6" style="display: inline-flex;">
                                                                      <input type="text" id="trainingToDatepicker{{$index}}"
                                                                           ng-disabled="saaForm.submitted" readonly
                                                                           ng-click="openToDatePicker($index)"
                                                                           ng-model="saaTrainingDetailsRepetitionArray[$index].trainingToDate"
                                                                             class="form-control accordionFromDatepicker inputBackgroundgeneral"><i
                                                                           class="fa fa-calendar fa-5x" id="trainingToDatepicker1{{$index}}"
                                                                           style="font-size: 27px !important; margin-top: 3px; color: #41c484; margin-left: 6px;"></i>
                                                                 </div>

                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.e. Training Organised by</label>
                                                                 <div class="col-md-6">
                                                                      <select
                                                                           ng-change="resetAccordionOthers2(saaTrainingDetails)"
                                                                           ng-disabled="saaForm.submitted"
                                                                           ng-options="item as item.typeDetailsName for item in trainingOrganisedBy"
                                                                           ng-model="saaTrainingDetailsRepetitionArray[$index].trainingOrganisedBy"
                                                                           ng-value="item.typeDetailsId"
                                                                           class="form-control inputBackground inputBackgroundgeneral">
                                                                           <option value="" disabled selected>Select</option>
                                                                      </select>
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="saaTrainingDetailsRepetitionArray[$index].trainingOrganisedBy.typeDetailsId == 28">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.e.i. If Training Organised by
                                                                      Others, Please Specify</label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="saaForm.submitted" fifty-characters-validation
                                                                           ng-model="saaTrainingDetailsRepetitionArray[$index].trainingOrganisedByOthers"
                                                                             class="form-control inputBackground inputBackgroundgeneral">
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.f. Topic of Training</label>
                                                                 <div class="col-md-6">
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totJjAct"> <label
																			for="JJActRule"> JJ Act/Rule </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totPosco"> <label
																			for="POCSOAct"> POCSO Act </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totChildRelatedLawsICPS"> <label
																			for="totChildRelatedLawsICPS"> Child related Laws and ICPS </label>
																	</div>
																</li>
																
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totCombinedTraining"> <label
																			for="totCombinedTraining"> Combined training </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totCPMIS"> <label
																			for="totCPMIS"> CPMIS </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totTrackChild"> <label
																			for="totTrackChild"> Track child</label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totCLTS"> <label
																			for="totCLTS"> CLTS</label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totAdoptionRegualation"> <label
																			for="totAdoptionRegualation"> Adoption Regulation</label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totCairing"> <label
																			for="totCairing">Caring </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-click="clearTopicOfTrainingOthers(saaTrainingDetailsRepetitionArray[$index])"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].totOthers"> <label
																			for="totOthers"> Others </label>
																	</div>
																</li>
																	</ul>
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="saaTrainingDetailsRepetitionArray[$index].totOthers">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.f.i. If topic of Training is
                                                                      Other, Please specify </label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="saaForm.submitted" fifty-characters-validation
                                                                           ng-model="saaTrainingDetailsRepetitionArray[$index].totOthersSpecify"
                                                                             class="form-control inputBackground inputBackgroundgeneral">
                                                                 </div>
                                                            </div>
												
															 <div class="form-group labelFont marginBottomInAccordion">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.g. Training attended by</label>
                                                                 <div class="col-md-6">
                                                                 <ul class="topicOftrainingList">
                                                                 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabManagerCoordinator"> <label
																			for="tabManagerCoordinator"> Manager/Coordinator </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabSocialWorkerChildhoodEducator"> <label
																			for="tabSocialWorkerChildhoodEducator"> Social Worker cum early childhood educator </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabNurse"> <label
																			for="tabNurse"> Nurse </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabDoctor"> <label
																		for="tabDoctor"> Doctor </label>
																	</div>
																</li>
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabAyah"> <label
																		for="tabAyah"> Ayah </label>
																	</div>
																</li>
																<li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabChowkidar"> <label
																		for="tabChowkidar"> Chowkidar </label>
																	</div>
																</li>
																
																 <li>
																	<div class="cb checkboxstyle">
																		<input type="checkbox" ng-disabled="saaForm.submitted"
																		ng-click="clearTrainingAtendedByOthers(saaTrainingDetailsRepetitionArray[$index])"
																		ng-model="saaTrainingDetailsRepetitionArray[$index].tabOthers"> <label
																		for="tabOthers"> Others </label>
																	</div>
																</li>
																	</ul>
                                                                 </div>
                                                            </div>

                                                            <div class="form-group labelFont marginBottomInAccordion"
                                                                 ng-show="saaTrainingDetailsRepetitionArray[$index].tabOthers">
                                                                 <label class="col-md-6 control-label labelLeftAlign"
                                                                      for="textinput"> J.1.g.i. If Training attended by is
                                                                      Other, Please specify </label>
                                                                 <div class="col-md-6">
                                                                      <input type="text" ng-disabled="saaForm.submitted" fifty-characters-validation
                                                                           ng-model="saaTrainingDetailsRepetitionArray[$index].tabOthersSpecify"
                                                                             class="form-control inputBackground inputBackgroundgeneral">
                                                                 </div>
                                                            </div>
												
                                                       </div>
                                                  </div>
                                             </div>
                                             <!-- --------Adding training details------- -->

                                             <div class="col-md-12 text-left ">
                                                  <div class="addingnewdetails-container">
                                                       <div id="trainingDetailserror" class="error-style"></div>
                                                       <button type="button" class="addingnewdetails" ng-disabled="saaForm.submitted"
                                                            ng-click="addNewDetails()" style="margin-left: 0px;">+</button>
                                                       <button type="button" class="addingnewdetails" ng-disabled="saaForm.submitted"
                                                            ng-show="saaTrainingDetailsRepetitionArray.length > 1"
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
     <div class="modal fade" id="successModalForSAASave"
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
     
     <div class="modal fade autoSaveModal" id="successModalForAutoSaveSAA"  
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
     <div class="modal fade" id="successModalForChildDetails"
          data-keyboard="false" data-backdrop="static" tabindex="-1"
          role="dialog">
          <div class="modal-dialog">
               <div class="col-md-12 modal-content modalView">
                    <div class="modal-header succesmodal ">
                         <img src="resources/image/svgIcons/success_icon.svg" height="25px" />
                         <label class="modalMsg">Success</label>
                    </div>
                    <div class="modal-body">
                         <h4 class="modal-title" id="myModalLabel">{{alertMessage}}</h4>
                         <p style="text-align: center">
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   data-dismiss="modal" aria-hidden="true">OK</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>

     <div class="modal fade" id="successModalForSAASubmit"
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
                                   ng-click="saveSAA(saaForm, 'submit', 'ok')" data-dismiss="modal" aria-hidden="true">OK</button>
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   data-dismiss="modal" aria-hidden="true">Cancel</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="confirmationModalForSAAdeleteAccordion"
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
     
     <div class="modal fade" id="confirmationModalForSectionI"
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
                                   ng-click="deleteNewDetailsC()" data-dismiss="modal"
                                   aria-hidden="true">OK</button>
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   data-dismiss="modal" aria-hidden="true">Cancel</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="confirmationModalForSectionCdetails"
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
                                   ng-click="deleteNewCdetails()" data-dismiss="modal"
                                   aria-hidden="true">OK</button>
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   data-dismiss="modal" aria-hidden="true">Cancel</button>
                         </p>
                    </div>
               </div>
          </div>
     </div>
     
     <div class="modal fade" id="confirmationModalForSectionJ"
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
                                   ng-click="deleteNewDetailsJ()" data-dismiss="modal"
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
        var app = angular.module('saaApp', ['angular-md5']);
        var cpmisApp = angular.module('saaApp');
    </script>
    <script src="resources/js/controllers/saaController.js"></script>
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
					scrollTop : 26
				}, 0);
			} else if ($('#caseb').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 50
				}, 0);
			} else if ($('#casec').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 90
				}, 0);
			} else if ($('#cased').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 126
				}, 0);
			} else if ($('#casee').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 165
				}, 0);
			}
			else if ($('#casef').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 202
				}, 0);
			}else if ($('#caseg').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 240
				}, 0);
			}
			else if ($('#caseh').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 260
				}, 0);
			}
			else if ($('#casei').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 260
				}, 0);
			}
			else if ($('#casej').hasClass('active')) {
				$('#sectionindctr').animate({
					scrollTop : 260
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
               $("#dataOfVisit").datepicker();

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
     $('#saaFormDetails').on('focus', 'input[type=number]', function (e) {
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