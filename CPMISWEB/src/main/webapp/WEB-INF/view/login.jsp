<!-- 
@author Swarna (swarnaprava@sdrc.co.in)
 -->
 <%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@taglib prefix="serror" uri="/WEB-INF/ErrorDescripter.tld"%>
<%@ page import="org.sdrc.cpmisweb.util.Constant"%>
<%@ page import="org.sdrc.cpmisweb.model.UserModel"%>
<%
	UserModel user = null;
	user = (UserModel) request.getSession().getAttribute(
		Constant.USER_PRINCIPAL);
%>
<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon">
<title>CPMISWEB</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link href="https://fonts.googleapis.com/css?family=Oxygen:300"
	rel="stylesheet">
<!-- <link rel="stylesheet" href="resources/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="resources/css/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">

<style>
    .textbox_fixed {
            width: 303px !important;
      
    }
    </style>
</head>

<body ng-app="loginApp" ng-controller="LoginController">
	<!-- spinner -->
	<div id="spinner" class="loader" style="display: none;"></div>
	<div id="loader-mask" class="loader" style="display: none;"></div>
	<!-- /spinner -->
	<div id="errMsg" class="text-center" style="margin-top: 5px;">
		<serror:Error id="msgBox" errorList="${formError}"
			cssInfClass="${className}">
		</serror:Error>
	</div>
<%-- 	<jsp:include page="fragments/header.jsp"></jsp:include> --%>

<!-- Data Entry login design -->
	<div class="container divMarginBottom">
		<div class="row">
			<div class="col-md-12 marginBottom">
				<div class="marginBottom text-center img-responsive">
					<img class="svgButtom" 
					src="resources/image/svgIcons/stakeholders_logo.png"
						width="100" height="100" />
				</div>
				<h3 class="headingDesign text-center">Stakeholder's Login</h3>
			</div>
			
		

			<form  class="col-md-offset-4 modern-p-form p-form-modern-purple">
						<div class="row">
							<div class="col-md-1 backgrndClr boxAlign">
							<span class="input-group-icon backimg" style="background-color:#41c484;">
							<img src="resources/image/svgIcons/SVG_username_icon.svg"
							class="svgIconsUser" width="17" height="17" />
							</span>
							</div>
						
							<div class="col-md-6  form-group boxAlign1">
								<div class="input-group p-has-icon">
									<input type="username" id="username" name="userName"
										ng-model="userName"
										placeholder="username" class="textbox_fixed form-control" required
										oninvalid="this.setCustomValidity('Please input your username')"
										oninput="setCustomValidity('')"> <span
										class="input-group-state"><span class="p-position"><span
											class="p-text"><span class="p-valid-text"><i
													class="fa fa-check"></i></span> <span class="p-error-text"><i
													class="fa fa-times"></i></span></span> </span> </span> <span class="p-field-cb"></span>
									<span class="input-group-icon" style="background-color: #f0b569;"><i class="fa fa-user"></i></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-1  backgrndClr boxAlign">
							<span class="input-group-icon backimg" style="background-color:#41c484" >
							<img src="resources/image/svgIcons/SVG_password_icon.svg" class="svgIconsinmiddle"
							 width="15" height="15" />
							</span>
							</div>
							<div class="col-md-6 form-group boxAlign1">
								<div class="input-group p-has-icon">
									<input type="password" id="password" name="password"
										ng-model="password"
										placeholder="password" class="textbox_fixed form-control" required
										oninvalid="this.setCustomValidity('Please input your password')"
										oninput="setCustomValidity('')"> <span
										class="input-group-state"><span class="p-position"><span
											class="p-text"><span class="p-valid-text"><i
													class="fa fa-check"></i></span> <span class="p-error-text"><i
													class="fa fa-times"></i></span></span> </span> </span> <span class="p-field-cb"></span>
									<span class="input-group-icon" style="background-color: #f0b569"><i class="fa fa-lock"></i></span>
								</div>
							</div>
						</div>
						<div class="row">
						<div class="col-md-6 form-group marginLeftofLoginBtn">
							<div class="input-group text-center">
								<button class="btn loginbtn" type="submit" onmouseout="resetCSS(this)" ng-click="doLogin(userName, password)">LOGIN</button>
								<br>
								<br>
								<a href="" ng-click="forgotPassword()">Forgot Password?</a><br>
								<a href="https://www.cpmis.org/" class="backHome"><i style="font-size:15px;color:#41c484;font-weight:bold; font-style: normal; text-decoration: none;" class="fa">&#10229; Back to Home page </i></a>
							</div>
						</div>
						</div>
						
						
						<!-- Added by Prakash Sahoo(prakash@sdrc.co.in)  on 21-04-2018  -->
						<!-- This div is used for showing for error message, when if at any point of time when two same user tries to log in the system  -->
						
						<div class="row input-group" id="errMsgId" style="color: red"></div>
						
						<!--  -->
						
						
						
						<div class="row">
						<div class="col-md-6 form-group">
							<div class="input-group text-center errorMsg" ng-cloak>
								{{errorMessage}}
							</div>
						</div>
						</div>
					</form>
		</div>
	</div>
	
	<div class="modal fade" id="forgotPasswordModal" data-keyboard="false" data-backdrop="static"
		tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="col-md-12 modal-content changePwModal">
				<div class="modal-header succesmodal ">
				<label class="modalMsg">Forgot Password</label>
				</div>
				<div class="modal-body">
				<h4 class="modal-title" id="myModalLabel"></h4>
				<form name="myForm" style="text-align: center;">
					<div class="form-group labelFont forgotPwEmailId">
						<label class="control-label" for="textinput" style="padding-right: 10px;"> 
							Email ID <sup style="color: #cc0000;">*</sup>
						</label>
						<input type="text" class="mailText" name="email" ng-model="emailId" placeholder=" Enter Email ID" ng-keyup="validateEmail(emailId)"
						ng-pattern="/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/" autocomplete="off" required>
					</div>
					<span ng-show="myForm.email.$error.pattern" class="error-style">
						Please provide correct Email ID
					</span>
					<div id="fprgotPasswordError" class="error-style" style="text-align:center;"></div>
					<p style="text-align: center">
						<button id="button1id" name="button3id" class="btn btn-info bigbutton"
						type="submit" class="close" ng-click="myForm.$invalid ? '' : checkEmail(emailId)"
						aria-hidden="true">SEND</button>
						
						<button id="button2id" name="button3id" class="btn btn-info bigbutton"
						type="submit" class="close" ng-click="clearObj()"
						data-dismiss="modal" aria-hidden="true">CANCEL</button>
					</p>
				</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="successPopUp" data-keyboard="false"
         data-backdrop="static" tabindex="-1" role="dialog">
         <div class="modal-dialog">
              <div class="col-md-12 modal-content modalView">
                   <div class="modal-header succesmodal ">
                        <span class="glyphicon glyphicon glyphicon-ok"
                             style="font-size: 21px; top: 3px;"></span> <label class="modalMsg">SUCCESS</label>
                   </div>
                   <div class="modal-body">
                        <h4 class="modal-title" id="myModalLabel">{{modalMessage}}</h4>
                        <p style="text-align: center">
                             <a class="btn btn-default btn-info bigbutton" href="login">OK</a>     
                        </p>
                   </div>
              </div>
         </div>
     </div>
     
     <div class="modal fade" id="errorPopup" data-keyboard="false"
         data-backdrop="static" tabindex="-1" role="dialog">
         <div class="modal-dialog">
              <div class="col-md-12 modal-content modalView">
                   <div class="modal-header errorsmodal ">
                        <span class="glyphicon glyphicon glyphicon-info-sign"
                             style="font-size: 21px; top: 3px;"></span> <label class="modalMsg">INFO</label>
                   </div>
                   <div class="modal-body">
                        <h4 class="modal-title" id="myModalLabel">{{modalMessage}}</h4>
                        <p style="text-align: center">
                             <a class="btn btn-info errorModalClosebtn" href="login">OK</a>     
                        </p>
                   </div>
              </div>
         </div>
     </div>
<!-----------------------------End Data Entry login design --------------------------------->

<%-- 	<jsp:include page="fragments/footer.jsp"></jsp:include> --%>

	<script src="resources/js/jquery.min.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/js/angular.min.js"></script>
	<script src="resources/js/angular-md5.js"></script>
</body>
<script src="resources/js/controllers/loginController.js"></script>
<script type="text/javascript">
	$("#msgBox").show().delay(2000).fadeOut(400);
	
	function resetCSS(x){
		x.style.color = "#fff";
	}
	
	
</script>


</html>