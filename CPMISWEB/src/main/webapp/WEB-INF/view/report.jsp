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
<title>MIS Report</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
     href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/reportCss.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans"
     rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">  

     
</head>
<body ng-app="cpmisApp" ng-controller="report_Controller" id="report_Controller" class="ng-cloak"
     data-spy="scroll" data-target="#myScrollspy" data-offset="20" ng-cloak>
     <!-- spinner -->
     <div id="spinner" class="loader" style="display: none;"></div>
     <div id="loader-mask" class="loader" style="display: none;"></div>
     <!-- /spinner -->
     <jsp:include page="fragments/header.jsp" />


	<div class="container margin-top">
		<div class="row margin-bottm-box">
			<div class="col-md-12 padding-zero">
				<h4 class="mandatory-fields">
					 All fields are mandatory
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="container text-center section-separator">
					<img alt=""
						src="resources/images/horizontal_separator_cpmis_svg_1.svg">
				</div>
			</div>
		</div>

		<div class="row margin-tab">
			<div class="col-md-12">
				<div class="col-md-1"></div>
				<div class="form-group col-md-10 padding-left">
					<label class="form-group col-md-2 padding-right">Institution
						Type <sup><span class="mandatory_star">&#42;</span></sup> :
					</label>
					<div class="form-group col-md-9 select-container text-center">
						<div class="input-group">
							<input type="text" class="form-control input-background "
								name="user-name" readonly="" ng-model="userName"
								placeholder="Select Institution Type">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu reportName1-dropdown" role="menu">
									<li ng-repeat="user in users" title="{{reportuser.value}}"
										ng-click="selectUser(user)"><a href="">{{user.value}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="col-md-1"></div>
				<div class="form-group col-md-10 padding-left">
					<label class="form-group col-md-2 padding-right">Report
						Type <sup><span class="mandatory_star">&#42;</span></sup> :
					</label>
					<div class="form-group col-md-9 select-container text-center">
						<div class="input-group">
							<input type="text" class="form-control input-background "
								name="reportType-name" readonly="" ng-model="reportTypename"
								placeholder="Select Report Name">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu reportName1-dropdown" role="menu">
									<li ng-repeat="type in reportTypes"
										title="{{type.value}}"
										ng-click="selectReportType(type)"><a href="">{{type.value}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-1"></div>
				<div class="form-group col-md-10 padding-left">
					<label class="form-group col-md-2 padding-right">Report
						Name <sup><span class="mandatory_star">&#42;</span></sup> :
					</label>
					<div
						class="form-group col-md-9 select-container text-center tooltipBox">
						<div class="input-group">
							<input type="text" class="form-control input-background "
								name="report-name" readonly="" ng-model="reportName"
								placeholder="Select Report Name">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu reportName-dropdown" role="menu">
									<li ng-repeat="report in reports"
										title="{{report.value}}" ng-click="selectReport(report)"><a
										href="">{{report.value}}</a></li>
								</ul>
							</div>
						</div>
						<span class="tooltiptext" ng-hide="reportName == undefined || reportName == '' ">{{reportName}}</span>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12">
				<div class="col-md-1"></div>
				<div class="form-group col-md-5 periodicity-row padding-left">
					<div class="col-md-4">
						<label class="form-group padding-right">Periodicity <sup><span
								class="mandatory_star">&#42;</span></sup> :
						</label>
					</div>
					<div class="form-group col-md-7 text-center">
						<div class="input-group" style="margin: auto; left: -5px;">
							<input type="text" class="form-control input-background "
								name="periodicity" readonly="" ng-model="periodicity.time_name"
								placeholder="Select Periodicity">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu report-dropdown" role="menu">
									<li ng-repeat="time in periodicities"
										title="{{time.time_name}}" ng-click="selectPeriodicity(time)"><a
										href="">{{time.time_name}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group col-md-5 padding-zero" ng-show="showMonth">
					<div class="col-md-4 padding-left">
						<label class="form-group padding-right">Select Month <sup><span
								class="mandatory_star">&#42;</span></sup> :
						</label>
					</div>
					<div
						class="form-group col-md-6 select-container text-center timeperiod-inputBox">
						<div class="input-group width-month"
							style="margin: auto; width: 123%;">
							<input type="text" class="form-control input-background "
								name="month" readonly="" ng-model="monthName.value"
								placeholder="Select Month">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu reports-dropdown" role="menu">
									<li ng-repeat="month in timePeriod" title="{{month.value}}"
										ng-click="selectMonth(month)"><a href="">{{month.value}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group col-md-5 padding-zero" ng-show="showQuarter">
					<div class="col-md-4 padding-left quarter-Box-left">
						<label class="form-group padding-right">Select Quarter <sup><span
								class="mandatory_star">&#42;</span></sup> :
						</label>
					</div>
					<div
						class="form-group col-md-6 select-container text-center timeperiod-inputBox">
						<div class="input-group width-month"
							style="margin: auto; width: 123%; left: -37px;">
							<input type="text" class="form-control input-background "
								name="month" readonly="" ng-model="quarterName.value"
								placeholder="Select Quarter">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu reports-dropdowns" role="menu">
									<li ng-repeat="quarter in timePeriod"
										title="{{quarter.value}}"
										ng-click="selectQuarter(quarter)"><a href="">{{quarter.value}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row margin-tab">
								<div class="form-group col-md-12">
									<div class="col-md-12 text-center">
										<div class="form-group">
											<button type="button" class="btn submit_btn border-btn"
												ng-click="submitReport()">Submit</button>
										</div>
									</div>
								</div>
							</div>
		<!-- category tabs section -->

<div ng-hide="tableDetails.length == 0">
		<div class="row" ng-show="showReportTable">
			<div class="col-md-12">
				<div class="container text-center section-separator padding-left">
					<img alt=""
						src="resources/images/horizontal_separator_cpmis_svg_1.svg">
				</div>
			</div>
		</div>
		
		
		<div class="row" ng-show="showReportTable">
			<div class="col-md-12">
				<div class="container section-separator padding-left">
					<h3 class="indicator-heading">MIS Report of {{reportName}}</h3>
				</div>
			</div>
		</div>


		<div class="row margin-table" ng-show="showReportTable">
			<div class="col-md-12">
				<div class="col-md-6 padding-zero">
					<button type="button" ng-click="exportTableData('report-history')"
						class="btn btn-default btn-grp download-excelBtn"
						title="Download excel">
						<i class="fa fa-file-excel-o iconsGrp" aria-hidden="true"></i>Download
						Excel
					</button>
				</div>
				
				<div class="col-md-6 padding-zero">
				<div class="form-group col-md-12 padding-zero">
					<div class="form-group col-md-5 padding-zero search-bar">
						<div id="imaginary_container">
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control searchbar-box" ng-change="searchResults()" ng-model="searchText"
									placeholder="Search" style="border-radius: 0;"> <span class="input-group-addon serach-background">
									<button type="submit" class="glyphicon-btn">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		<div class="col-md-12" ng-show="showReportTable">
			<div class="row">
			
				<div class="col-md-6 padding-left">
					<div class="col-md-2 display-box padding-left">
						<p class="numberLegend"></p>Number
					</div>
					<div class="col-md-3 display-box padding-left margin-box">
						<p class="rowPercentLegend"></p>Row Percent
					</div>
					<div class="col-md-3 display-box padding-zero">
						<p class="columnPercentLegend"></p>Column Percent
					</div>
				</div>
				
				<div class="col-md-6  float-right right-align">
									<div class="col-md-12" id="listResults">
									<label class="form-group col-md-2 padding-zero unit-label">Unit <sup><i class="fa fa-info-circle tooltip" ><span class="tooltiptext">Select Unit </span></i></sup>    :
									</label>
										<div class="padding-zero" >
											<div class="col-md-2 text-center padding-numberUnit">
												<div class="checkbox checkbox-square">
													<input id="checkbox4" ng-model="numberUnit" ng-init="numberUnit=true" type="checkbox" ng-click="showUnit()"> <label>Number</label>
												</div>
											</div>
											<div class="col-md-4 text-center padding-rowPercentUnit">
												<div class="checkbox checkbox-square ">
													<input id="checkbox5" ng-model="rowPercentUnit" ng-init="rowPercentUnit=true" type="checkbox" ng-click="showUnit()"> <label>Row
														Percent</label>
												</div>
											</div>
											<div class="col-md-4 text-center">
												<div class="checkbox checkbox-square">
													<input id="checkbox6" ng-model="columnPercentUnit" ng-init="columnPercentUnit=true" type="checkbox" ng-click="showUnit()"> <label class="columnPercent" style="min-width: 108px !important;">Column
														Percent</label>
												</div>
											</div>
										</div>
										<div id="errorsCheckbox" class="error-style"></div>
									</div>
								</div>

			</div>
		</div>
		<div class="col-md-12 table-responsive padding-zero" ng-show="showReportTable">
<div
				class="tableMargin table-responsive fix-level-table header-fixed-table"
				style="width: 100%; max-height: 450px; overflow: auto;"
				sdrc-table-header-fix tableuniqueclass="'fix-level-table'"
				tabledata="tableDetails">
			
			    		<table id="report-history" class="table table-striped mis-report"
							cellspacing="0" width="100%">
                                             <thead>
                                                  <tr>
                                                       <th >Sl. No.</th>
                                                       <th>Area Name</th>
<!--                                                        <th ng-click="order('districtName')">Area Name -->
<!--                                                        <div -->
<!-- 														class="sorting1"> -->
<!-- 														<i class="fa fa-caret-up asc" aria-hidden="true" -->
<!-- 															></i> -->
<!-- 														<i class="fa fa-caret-down dsc" aria-hidden="true" -->
<!-- 															></i> -->
<!-- 													</div> -->
													</th>
													<th ng-repeat="header in headers">{{header}}</th>
<!--                                                        <th ng-repeat="header in headers" ng-click="order(header)">{{header}} -->
<!--                                                        <div class="sorting1"> -->
<!-- 														<i class="fa fa-caret-up asc" aria-hidden="true" -->
<!-- 															ng-class="{'hiding': !(sortType != header || sortReverse == true)}"></i> -->
<!-- 														<i class="fa fa-caret-down dsc" aria-hidden="true" -->
<!-- 															ng-class="{'hiding': !(sortType != header || sortReverse == false)}"></i> -->
<!-- 													</div> -->
                                                       </th>
                                                  </tr>
                                             </thead>
                                             <tbody ng-hide="numberUnit == false && rowPercentUnit == false && columnPercentUnit == false">
                                                  <tr ng-repeat="reportdetails in tableDetails | filter:searchText  | orderBy:filterType:sortReverse" class="{{index}}">
                                                       <td>{{reportdetails.serialNo}}</td>
                                                       <td>{{reportdetails.districtName}}</td>
														<td ng-repeat="indicators in tableDetails[$index].valueArray"
															class="padding-zero">
															<table class="table table-striped number-Row-Column" cellspacing="0" width="100%">
																<tr ng-if="numberUnit">
																	<td ng-class="{numberUnitColor:numberUnit}" bgcolor="#79addc"
																		class="margin-bottom-number" ng-if="numberUnit">{{indicators.number=='-'?(indicators.number):(indicators.number|number)}}</td>
																</tr>
																<tr ng-if="rowPercentUnit">
																	<td ng-class="{rowUnitColor:rowPercentUnit}" bgcolor="#adf7b6"
																		class="margin-bottom-row" ng-if="rowPercentUnit">{{indicators.row_per}}</td>
																</tr>
																<tr ng-if="columnPercentUnit">
																	<td ng-class="{columnUnitColor:columnPercentUnit}"
																		bgcolor="#ffc09f" class="margin-bottom"
																		ng-if="columnPercentUnit">{{indicators.col_per}}</td>
																</tr>
															</table>
														</td>
												</tr>
                                             </tbody>
               				</table>
               				
</div>

				<div class="col-md-12" id="no-data-search" ng-show="(tableDetails | filter:searchText).length == 0">
				<div class="container-fluid">
					<div class="col-md-12">
						<section class="profile-section col-md-12 col-sm-12 col-xs-12">
							<div class="col-md-12 profile-entry">
								<div id="profileTable"
									class="col-md-12 accordion-content expanded">
									<div class='content'>
										<h2 class="col-md-12 no_records">No Results Found.</h2>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
				
<!-- 		</div> -->
		
	</div>
	
	</div>
	
	
	<div class="col-md-12" id="no-data-search" ng-show="tableDetails.length == 0">
				<div class="container-fluid">
					<div class="col-md-12">
						<section class="profile-section col-md-12 col-sm-12 col-xs-12">
							<div class="col-md-12 profile-entry">
								<div id="profileTable"
									class="col-md-12 accordion-content expanded">
									<div class='content'>
										<h2 class="col-md-12 no_records">Data not available for {{reportName}}</h2>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
 </div>
		

	<div class="height-bottom">
	
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
                         <h4 class="modal-title" id="myModalLabel">Form successfully
                              saved</h4>
                         <p style="text-align: center">
                              <button id="button3id" name="button3id"
                                   class="btn btn-info bigbutton" type="submit" class="close"
                                   ng-click="refreshPage()" data-dismiss="modal" aria-hidden="true">OK</button>
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
                         <h4 class="modal-title" id="myModalLabel">{{alertMessage}}</h4>
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

     

     <script src="resources/js/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="resources/js/bootstrap.min.js"></script>
     <script src="resources/js/angular.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="resources/js/controllers/reportController.js"></script>
       <script src="resources/services/commonService.js"></script>
	 <script src="resources/js/jsFunctions/cwcJsFunctions.js"></script>
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

  
     <!-- -------------------for fixed section -------------------------------------->
</body>
</html>