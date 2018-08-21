<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Forgot Password</title>
		<!-- <link rel="icon" href="resources/images/icon.png" type="image/png" sizes="16x16"> -->
		<link rel="stylesheet"
			href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="resources/css/style.css">
		<link rel="stylesheet" href="resources/css/customLoader.css">
		<link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans"
			rel="stylesheet">
		<link rel="stylesheet"
			href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
		<style type="text/css">
			.footerArea {
				position: fixed !important;
			}
		</style>
	</head>
	
	<body ng-app="resetPasswordApp" ng-controller="resetPasswordController" ng-cloak>
		<jsp:include page="fragments/header.jsp"></jsp:include>
	
		<div class="container">
			<input type="hidden" id="shdjkfh" value="${shdjkfh}">
			<div class="row">
				<div class="container divMarginBottom">
					<form role="form" class="" name="resPass" id="resPass">
						<h2 class="sign_up_title">Reset password</h2>
<!-- 						<p class="resetPwInput">Please enter your new password and click on reset.</p><br> -->
						<div class="form-group resetPwInput" style="display: -webkit-box !important">
							<input type="password" ng-pattern="/^([a-zA-Z0-9]){6,12}$/" ng-model="user.password" required 
								class="form-control input-lg pwd" placeholder="New Password" onpaste="return false"
								ng-keyup="matchPasswords(user.password, confirmPassword)"
								tabindex="4">
								<div id="newpass" class="error-style"></div>
						</div>
						<div class="form-group resetPwInput" style="display: -webkit-box !important">
							<input type="password" id="confirmPassword" ng-model="confirmPassword" required autocomplete="off"
								class="form-control input-lg pwd" placeholder="Confirm Password" onpaste="return false"
								ng-keyup="matchPasswords(user.password, confirmPassword)"
								tabindex="4">
							
						</div>
						<div id="confirmPass" class="error-style resetPwInput" style="display:block; margin-top:-10px !important;"></div>
						<div class="row">
							<div class="col-xs-12 col-md-12" style="padding-top:10px !important;">
								<button class="btn btn-block btn-lg btn-reset" onmouseout="resetCSS(this)" ng-click="resPass.$invalid ? '' : resetPassword()">Reset</button>
							</div>
						</div>
					</form>
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
		
		<div id="errorPopup" class="modal fade" role="dialog" style="margin: 100px auto; z-index: 12000;"
			data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog">
				<!-- Modal content -->
				<div class="modal-content">
					<div class="modal-body text-center">
						<div class="errorhead">INFO</div>
						<div class="errorbody">{{modalMessage}}</div>
						<a class="btn btn-default" href="home">Ok</a>
					</div>
				</div>
			</div>
		</div>
		
		<jsp:include page="fragments/footer.jsp"></jsp:include>
		<script src="resources/js/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="resources/js/bootstrap.min.js"></script>
		<script src="resources/js/angular.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			var app = angular.module('resetPasswordApp', ['angular-md5']);
			var cpmisApp = angular.module('resetPasswordApp');
		</script>
		<script src="resources/js/controllers/resetPasswordController.js"></script>
		<script src="resources/services/commonService.js"></script>
		<script src="resources/js/angular-md5.js"></script>
		
		<script type="text/javascript">
		function resetCSS(x){
			x.style.color = "#fff";
		}
		/* for not allowing space(Pratyush) */
		$(document).ready(function() {
			$(".pwd").keypress(function (evt) {
			  var keycode = evt.charCode || evt.keyCode;
			  if (keycode  == 32 || keycode  == 47 || keycode  == 92) { 
			    return false;
			  }
			});
		});
		</script>
	</body>
</html>