
cpmisApp.controller("resetPasswordController", function($scope, $http, $timeout, $window, md5){
	$scope.confirmNavigate=function(){
		$('#confirmationModalHomePage').modal('show');
	};
	
	$scope.modalMessage = null;
	$scope.user = {
			uKey : $('#shdjkfh').val(),
			password : undefined
	};
	
	$scope.type = "password";
	
	$scope.changeToText = function(id){
		document.getElementById(id).type = "text";
	};
	
	$scope.changeToPass = function(id){
		document.getElementById(id).type = "password";
	};

	//Pratyush
	var pwMatchedFlag = false;
	$scope.matchPasswords = function(password, confirmPassword){
		if(password == undefined){
			document.getElementById('confirmPass').innerHTML = "Please enter a vaild password (6-12 characters, only numbers and alphabets)";
		}else if(password != undefined && confirmPassword != undefined && password != confirmPassword){
			document.getElementById('confirmPass').innerHTML = "Passwords don't match";
			pwMatchedFlag = false;
		}else{
			document.getElementById('confirmPass').innerHTML = "";
			pwMatchedFlag = true;
		}
	};
	
	$scope.resetPassword = function(){
		if(pwMatchedFlag){
			$("#loader-mask").show();
			$scope.user.newPw = md5.createHash($scope.user.password);
			$http.post("changeForgotPassword", $scope.user)
			.then(function(result){
				$scope.modalMessage = result.data.errorMessage;
				if(result.data.hasError == false){
					$("#successPopUp").modal("show");
				}else if(result.data.hasError == true){
					$scope.failFlag = true;
					$("#errorPopup").modal("show");
				}
				$("#loader-mask").fadeOut();
			}, function(err){
				$("#loader-mask").fadeOut();
			});
		}	
	};
});