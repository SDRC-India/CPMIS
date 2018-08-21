
/*
 * @author Swarna(swarnaprava@sdrc.co.in) 
 * 
 */

var cpmisApp = angular.module('cpmisApp', ['angular-md5']);
cpmisApp.controller('userManual_Controller', function($scope, $http, $timeout, $window, md5, $filter, commonService) {

	$(".loader").show();
	//change password
	$('#changePasswordModal').on('hidden.bs.modal', function(){
		$scope.password={
			currentPw:null,
			newPw:null,
			confirmPw:null
		};
		document.getElementById('changePasswordError').innerHTML = "";
	});
	
	$scope.cpModal=function(){
		commonService.cpModal();
	};
	$scope.checkBlankAndValidate = function(obj, input){ 
		commonService.checkBlankAndValidate(obj, input);
	};
	$scope.changePassword = function(pwModel){
		commonService.changePassword(pwModel);
	};
	
	//change password
	$http.get("getUserArea").then(function(result) {
		$scope.selectedDistrict = result.data;
	}, function(error) {
		console.log(error);
	});

	$scope.logout = function() {
		$http.post('logout').then(function(result) {
			if (result.status == 200) {
				window.location = "login";
			}
		}, function(error) {
			console.log(error);
			if (error.status == -1) {
				alert("Server error.");
			}
		});
	};

	$scope.confirmNavigate = function() {
		$('#confirmationModalHomePage').modal('show');
	};
	
});



