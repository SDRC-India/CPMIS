
<!-- 
@author Swarna (swarnaprava@sdrc.co.in)
 -->
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@page import="java.util.ArrayList"%>
<%@page import="java.util.List"%>
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon"> 
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans"
	rel="stylesheet">
<script src="resources/js/modernizr.custom.js"></script>
<script type="text/javascript"
	src="resources/js/bootstrap-multiselect.js"></script>
<style type="text/css">
a:hover, a:visited, a:link, a:active
{
    text-decoration: none;
}
[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak,
	.x-ng-cloak {
	display: none !important;
}

</style>

<link href="https://fonts.googleapis.com/css?family=Open+Sans"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<!-- Navigation bar starts  -->
<div class="navbar navbar-default navbar-top nav-heading navBottom"
	style="border-radius: 0;">

	<!--logo part end-->
	<div class="headerHeight"
		style="background-color: #41C484;">
		<div class="header-area">
			<div class="container">
				<div class="row headerMargin">
					<div class="col-md-2">
						<div class="logo">
							<h1>
								<a href="#" ng-click="confirmNavigate()"> <img class="imageAlign"
									src="resources/image/CPMIS_logo_white-6.png"></a>
							</h1>
							<div class="navbar-header mobileView">
								<button type="button" class="navbar-toggle"
									data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span> <span
										class="icon-bar"></span> <span class="icon-bar"></span> <span
										class="icon-bar"></span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-2 welcomeuser padding-zero">
						<ul class="nav navbar-nav navListInblock">
							<li ng-show="${userName!=null}"><a class="welcomeuser username">Welcome <b>${userName.toUpperCase()}</b></a></li>
						</ul>
					</div>

					<div class="col-md-8" ng-hide="${userViewName=='slu'}">
						<nav class="mainmenu">
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav navWidth">
									<li class="home"><a ng-click="confirmNavigate()" ><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
									<li><a href="dashboard">Dashboard</a></li>
									<li><a href="${userViewName}" >Data Entry</a></li>
									<li><a href="userManual">User Manual</a></li>
									<li class="dropdown settingIcon"><a
										data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-cog setting-icon"></span> <span
											class="caret setting-caret"></span></a>
										<ul class="dropdown-menu setting-menus">
											<li><a href="" ng-click="cpModal()">Change Password</a></li>
											<li><a href="" ng-click="logout()">Logout</a></li>
										</ul></li>
								</ul>
							</div>
						</nav>
					</div>
					<!-- biiiiii -->
					<div class="col-md-8" ng-show="${userViewName=='slu'}">
						<nav class="mainmenu">
							<div class="collapse navbar-collapse" id="myNavbar">
								<ul class="nav navbar-nav navWidth">
<!-- 									<li ><a href="#"  >Change Password</a></li> -->
									<li class="home"><a ng-click="confirmNavigate()" ><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
									<li><a href="dashboard">Dashboard</a></li>
									<li><a href="report" >Report</a></li>
									<li><a href="statusReport">Status Report</a></li>
									<li><a href="userManual">User Manual</a></li>
									<li class="dropdown settingIcon"><a
										data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-cog setting-icon"></span> <span
											class="caret setting-caret"></span></a>
										<ul class="dropdown-menu setting-menus">
											<li><a href="" ng-click="cpModal()">Change Password</a></li>
											<li><a href="" ng-click="logout()">Logout</a></li>
										</ul></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end  header row -->
	<style>
.openNavMenu {
	padding: 15px 5px;
	color: #FFF;
}
</style>

</div>
<!-- -Modal Start homePage -->
	<div class="modal fade" id="confirmationModalHomePage" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content modalView">
				<div class="modal-header succesmodal ">
				<img src="resources/image/svgIcons/confirm_icon.svg" height="25px" />
				<label class="modalMsg">Confirm</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel">Are you sure you want to leave?</h4>
					<p style="text-align: center">
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="button" class="close" data-dismiss="modal" aria-hidden="true" 
							onclick="location.href='cpmishomepage'">
							OK</button>
							<button id="button3id" name="button3id" class="btn btn-info bigbutton"
							type="submit" class="close" 
							data-dismiss="modal" aria-hidden="true">Cancel</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- --Modal for homePage  -->
	
	<!-- change password modal -->
	<div class="modal fade" id="changePasswordModal" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content changePwModal">
				<div class="modal-header succesmodal ">
				<label class="modalMsg">Change Password</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel"></h4>
					<div class="form-group labelFont">
						<label class="col-md-6 control-label labelLeftAlign" style="margin-top: 2px;" for="textinput"> 
							Current Password <sup style="color: #cc0000;">*</sup>
						</label>
						<input type="password" ng-model="password.currentPw" ng-keyup="checkBlankAndValidate(password, 'currentPw')" required>
					</div>
					<div class="form-group labelFont">
						<label class="col-md-6 control-label labelLeftAlign" style="margin-top: 2px;" for="textinput">
						 	New Password <sup style="color: #cc0000;">*</sup>
						 </label>
						<input type="password" ng-model="password.newPw" ng-pattern="/^([a-zA-Z0-9]){6,12}$/" ng-keyup="checkBlankAndValidate(password, 'newPw')" required>
					</div>
					<div class="form-group labelFont">
						<label class="col-md-6 control-label labelLeftAlign" style="margin-top: 2px;" for="textinput">
						 	Confirm Password <sup style="color: #cc0000;">*</sup>
						 </label>
						<input type="password" ng-model="password.confirmPw" ng-keyup="checkBlankAndValidate(password, 'confirmPw')" required>
					</div>
					<div id="changePasswordError" class="error-style" style="text-align:center;"></div>
					<p style="text-align: center">
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
						type="submit" class="close" ng-click="changePassword(password)"
						aria-hidden="true">SUBMIT</button>
						
						<button id="button3id" name="button3id" class="btn btn-info bigbutton"
						type="submit" class="close"
						data-dismiss="modal" aria-hidden="true">CANCEL</button>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- --------------------- -->


