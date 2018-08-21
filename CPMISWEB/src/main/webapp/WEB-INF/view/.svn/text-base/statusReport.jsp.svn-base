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
<title>Status Report</title>
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
<body ng-app="cpmisApp" ng-controller="statusReport_Controller" id="statusReport_Controller" class="ng-cloak"
     data-spy="scroll" data-target="#myScrollspy" data-offset="20">
     <!-- spinner -->
     <div id="spinner" class="loader" style="display: none;"></div>
     <div id="loader-mask" class="loader" style="display: none;"></div>
     <!-- /spinner -->
     <jsp:include page="fragments/header.jsp" />


	<div class="container margin-top">
		

		<div class="row margin-tab">
			<div class="col-md-12">
				<div class="col-md-3"></div>
				<div class="form-group col-md-5 periodicity-row padding-left">
					<div class="col-md-4">
						<label class="form-group padding-right">Timeperiod :
						</label>
					</div>
					<div class="form-group col-md-7 text-center">
						<div class="input-group" style="margin: auto; left: -5px;">
							<input type="text" class="form-control input-background "
								name="periodicity" readonly="" ng-model="timePeriodsDetails"
								placeholder="Select Timeperiod">
							<div class="input-group-btn" style="position: relative;">
								<button data-toggle="dropdown"
									class="btn btn-color dropdown-toggle report_dropdownBTn"
									type="button">
									<span class="glyphicon glyphicon-th-list icon_color"></span>
								</button>
								<ul class="dropdown-menu report-dropdown" role="menu">
									<li ng-repeat="time in timeperiods"
										title="{{time.timeperiodName}}" ng-click="selectPeriodicity(time)"><a
										href="">{{time.timeperiodName}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="form-group col-md-12">
				<div class="col-md-12 text-center">
					<div class="form-group">
						<button type="button" class="btn submit_btn border-btn"
							ng-click="showReportWithTimeperiod()">Submit</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row" ng-show="showReportTable">
			<div class="col-md-12">
				<div class="container text-center section-separator padding-left">
					<img alt=""
						src="resources/images/horizontal_separator_cpmis_svg_1.svg">
				</div>
			</div>
		</div>


<div ng-hide="statusReports.length == 0">
		
		<div class="row margin-tab" ng-show="showReportTable">
			<div class="col-md-12">
				<div class="col-md-6 padding-zero">
					<button type="button"
						class="btn btn-default btn-grp download-excelBtn"
						title="Download excel" ng-click="exportTableData('report-history')">
						<i class="fa fa-file-excel-o iconsGrp" aria-hidden="true"></i>Download
						Excel
					</button>
				</div>
				
				<div class="col-md-6 padding-zero">
				<div class="form-group col-md-12 padding-zero">
					<div class="form-group col-md-5 padding-zero search-bar">
						<div id="imaginary_container">
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control searchbar-box" ng-model="searchText" ng-change="searchBox()"
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

		<div class="col-md-12 table-responsive status-report-details  padding-zero" ng-show="showReportTable">
		<div
				class="tableMargin table-responsive fix-level-table header-fixed-table"
				style="width: 100%; max-height: 450px; overflow: auto;"
				sdrc-table-header-fix tableuniqueclass="'fix-level-table'"
				tabledata="statusReports">
			
    		<table id="report-history" class="table table-striped status-report"
				cellspacing="0" width="100%">
                                             <thead>
                                                  <tr>
                                                       <th>Sl. No.</th>
                                                       <th>Area Name</th>
                                                       <th>Institution Type</th>
                                                       <th>Institution</th>
                                                       <th>Submission Status</th>
                                                       <th>Submission Date</th>
                                                  </tr>
                                             </thead>
                                             <tbody style="border: 2px solid #9e9e9e2e;">
                                                  <tr ng-repeat="reportdetails in statusReports | filter:searchText">
                                                       <td>{{$index+1}}</td>
                                                       <td>{{reportdetails.districtName}}</td>
                                                       <td>{{reportdetails.userTypeName}}</td>
                                                       <td>{{reportdetails.institutionName}}</td>
                                                       <td><span ng-if="reportdetails.submissionStatus == true">{{status}}</span>
															<span  ng-if="reportdetails.submissionStatus == false">{{status1}}</span></td>
                                                       <td>{{reportdetails.submissionDate}}</td>
													</tr>
                                             </tbody>
               </table>
</div>

				<div class="col-md-12" id="no-data-search" ng-show="(statusReports | filter:searchText).length == 0">
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
			
		</div>
		</div>
		
		
		<div class="col-md-12" id="no-data-search" ng-show="statusReports.length == 0">
				<div class="container-fluid">
					<div class="col-md-12">
						<section class="profile-section col-md-12 col-sm-12 col-xs-12">
							<div class="col-md-12 profile-entry">
								<div id="profileTable"
									class="col-md-12 accordion-content expanded">
									<div class='content'>
										<h2 class="col-md-12 no_records">Data not available for {{timePeriodsDetails}}</h2>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
 </div>
		

	<div class="height-bottomStatus">
	
	</div>

     <script src="resources/js/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="resources/js/bootstrap.min.js"></script>
     <script src="resources/js/angular.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="resources/js/controllers/statusReportController.js"></script>
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