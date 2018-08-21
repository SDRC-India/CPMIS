var app = angular.module('loginApp', ['angular-md5']);
app.controller('LoginController', function($scope, $http, md5, $timeout) {
	/*
	 * Update by Prakash Sahoo(prakash@sdrc.co.in)  on 21-04-2018
	 * 
	 * Statements added 
	 * to showing the error when if at any point of time when two same user tries to log in the system
	 */
	$scope.doLogin = function(userName, password){
		if(userName != undefined && password  != undefined && password  != ""){
			$(".loader").show();
			$scope.password = md5.createHash(password);
			var loginData = {
				'userName' : userName,
        		'password' : $scope.password
			};
			$http.post('userAuthenticate', loginData).
			then(function(result){
				if(!result.data.hasError)
					window.location ="dashboard";
				else{
					//This condition is checked to showing the error when if at any point of time when two same user tries to log in the system 
					if(result.data.errorCode=="401")// && result.data.errorMessage=="You can't logged in now, because this user is already logged in from a different system !")
					{
						$("#errMsgId").html(result.data.errorMessage);
					}
					//307 will come during aggregation
					else if(result.data.errorCode=="307"){
						window.location ="maintenance";
					}
					else
					{
						$scope.errorMessage = "Invalid username or password !";
						$timeout(function(){
							loginData.password = "";
							$scope.password = "";
							$scope.errorMessage = "";
						},3000);
					}
				}
				$(".loader").fadeOut();
			},function(error){
				console.log(error);
				if(error.status==-1){
					alert("Something is amiss. Please try after some time.");
				}else if(error.status==500)
				{
					alert("Error Occured ! Please try after some time.");
				}
				$(".loader").fadeOut();
			});
		}
	};
//forgot password starts	
	$scope.forgotPassword = function(){
		$('#forgotPasswordModal').modal('show');
	};
	
	$scope.validateEmail = function(name){
		return angular.isUndefined(name)?false:true;
	};
	
	$scope.checkEmail = function(email){
		if(!angular.isUndefined(email)){
			$scope.send(email);
		}
	};
	
	$scope.send = function(email){
		$(".loader").show();
		$('#forgotPasswordModal').css("z-index","200");
		$http.post('forgotPassword', email)
		.then(function(result){
			if(result.data.hasError == true){
				$scope.modalMessage = result.data.message;
				$("#errorPopup").modal("show");
				$('#forgotPasswordModal').css("z-index","1050");
				$(".loader").fadeOut();
			}else{
				$scope.modalMessage = "Password reset link has been sent to your Email ID.";
				$("#forgotPasswordModal").modal("hide");
				$("#successPopUp").modal("show");
				$('#forgotPasswordModal').css("z-index","1050");
				$(".loader").fadeOut();
			}
			$('#forgotPasswordModal').css("z-index","1050");
			$(".loader").fadeOut();
		}),function(err){
			$('#forgotPasswordModal').css("z-index","1050");
			$(".loader").fadeOut();
		};
	};
	
	$scope.clearObj = function(){
		$scope.emailId = null;
	};
	//forgot password ends	
	
	/**
	 * @author Pratyush
	 * function for inserting password if not avalable(Please do not remove the code)
	 */
//	$http.get("getNullPasswordUsers").then(function(result) {
//		var users = result.data;
//		
//		for(var i=0; i<users.length;i++){
//			users[i].password = md5.createHash(users[i].userName);
//		}
//		console.log(users);
//		$http.post("insertPassword", users).then(function(result) {
//			console.log(result);
//		}, function(error) {
//			console.log(error);
//		});
//	}, function(error) {
//		console.log(error);
//	});
});