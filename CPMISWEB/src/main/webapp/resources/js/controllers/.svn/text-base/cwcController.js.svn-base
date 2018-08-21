var cpmisApp = angular.module('cpmisApp', ['angular-md5']);
cpmisApp.controller('CWC_Controller', function($scope, $http, $timeout, $window, md5, commonService) {

	$scope.Number = Number;
	var currentUserId;
	try {
		currentUserId = Number(document.getElementById("uId").value);
	} catch (e) {
		console.log(e);
	}

	$http.get("getDropdownItems").then(function(result) {
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
	}, function(error) {
		console.log(error);
	});
	
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
	$(".loader").show();
	$("#datepicker").datepicker({
		dateFormat : "dd-mm-yy",
		maxDate : lastDay,
		minDate : firstDay,
		onSelect : function(date) {
			$scope.cwcForm.monthyear = date;
		}
	});

	$("#trainingDatepicker").datepicker({
		dateFormat : "dd-mm-yy",
		maxDate : lastDay,
		minDate : firstDay,
		onSelect : function(date) {
			$scope.cwcForm.h1dDate = date;
		}
	});
	 $("input[type='number']").keyup(function() {
		checkDBoys();checkDGirls();checkE9Boys();checkE9Girls();checkE10Boys();checkE10Girls();checkFBoys();
		checkFGirls();checkF2Boys();checkF2Girls();checkMinorityBoys();checkMinorityGirls();checkGBoys();
		checkGGirls();checkGBoys();checkGGirls();checkH9Boys();checkH9Girls();checkH10Boys();checkH10Girls();
		checkH11Boys();checkH11Girls();checkH12Boys();checkH12Girls();checkH13Boys();checkH13Girls();
		checkH14Boys();checkH14Girls();checkH15Boys();checkH15Girls();checkH16Boys();checkH16Girls();
		checkH17Boys();checkH17Girls();checkH18Boys();checkH18Girls();checkH19Boys();checkH19Girls();
		checkH20Boys();checkH20Girls();removeNegetiveColor();
	});
	
	$scope.showHideBasedOnFlag=function(id,value){
		var idValue=document.getElementById(id).value;
		if(idValue>0)
			return true;
		else if (idValue == 0 || idValue == null) {
			$scope.cwcForm[value] = null;
			return false;
		}
			
	};
	// resetting textfield values starts
	
	$scope.resetE8a = function(value) {
		if (value == 0 || value == null) {
			$scope.cwcForm.e8OtherOrder = null;
		}
	};
	$scope.resetAccG = function(value) {
		if ($scope.cwcTrainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.cwcTrainingDetailsRepetitionArray[value].tabOthers == null) {
			$scope.cwcTrainingDetailsRepetitionArray[value].trainingAttendedByOthers = null;
		}
	};
	$scope.resetHText = function(parent, child){
		if(parent < 1)
			$scope.cwcForm[child] = null;
	};
	//resetting textfield values ends
	$scope.validateMembers = function(id) {
		var bgc = document.getElementById(id);
		var secondInput = parseInt(document.getElementById('totalMembers').value);
		var firstInput = parseInt(5);
		$scope.label1 = "Sum of male and female members";
		$scope.alertMessage = "value can not exceed 5";
		$scope.label2 = "";
		if(!commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc)){
			$scope.cwcForm[id] = null;
		}
	};

	var commonFunctionBodyLessThanEqual = function(firstInput, secondInput, bgc) {

		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			$('#ErrAlertModal').modal('show');
			bgc.blur();
			return false;
		} else {
			bgc.style.removeProperty("background-color", "#DC143C", "important");
			bgc.style.removeProperty("color", "#FFFAF0", "important");
			bgc.style.removeProperty("border-color", "red", "important");

			return true;
		}

	};

	var commonFunctionBodyEqualTo = function(firstInput, secondInput, bgc) {

		if (!(firstInput == secondInput)) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			$('#ErrAlertModal').modal('show');
			window.setTimeout(function() {
				bgc.focus();
			}, 0);
			return false;
		} else {
			bgc.style.removeProperty("background-color", "#DC143C", "important");
			bgc.style.removeProperty("color", "#FFFAF0", "important");
			bgc.style.removeProperty("border-color", "red", "important");

			return true;
		}

	};

	$scope.checkDBoys = function() {
		var bgc = document.getElementById('d5BoysTotal');
		var firstInput = parseInt(document.getElementById('cBoysTotal').value);
		var secondInput = parseInt(document.getElementById('d5BoysTotal').value);
		$scope.label1 = "D.5. Total no. cases referred in the reporting month: total boys";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "C. total no. of cases with the CWC in the reporting month: total boys";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkDGirls = function() {
		var bgc = document.getElementById('d5GirlsTotal');
		var firstInput = parseInt(document.getElementById('cGirlsTotal').value);
		var secondInput = parseInt(document.getElementById('d5GirlsTotal').value);
		$scope.label1 = "D.5. Total No. cases referred in the reporting month: total girls";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "C. total no. of cases with the CWC in the reporting month: total girls";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkE9Boys = function() {
		var bgc = document.getElementById('e9BoysTotal');
		var firstInput = parseInt(document.getElementById('cBoysTotal').value);
		var secondInput = parseInt(document.getElementById('e9BoysTotal').value);
		$scope.label1 = "E.9. Total no. of cases disposed/ children restored: total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "C. total no. of cases with the CWC in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkE9Girls = function() {
		var bgc = document.getElementById('e9GirlsTotal');
		var firstInput = parseInt(document.getElementById('cGirlsTotal').value);
		var secondInput = parseInt(document.getElementById('e9GirlsTotal').value);
		$scope.label1 = "E.9. Total no. of cases disposed/ children restored: total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "C. total no. of cases with the CWC in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkE10Boys = function() {
		var bgc = document.getElementById('e10BoysTotal');
		var cInput = parseInt(document.getElementById('cBoysTotal').value);
		var e9Input = parseInt(document.getElementById('e9BoysTotal').value);
		var firstInput = parseInt(cInput)-parseInt(e9Input);
		var secondInput = parseInt(document.getElementById('e10BoysTotal').value);
		$scope.label1 = "E.10. Total number of children on the last day of the reporting month: total boys";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "[C : total boys - E.9 : total boys]";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkE10Girls = function() {
		var bgc = document.getElementById('e10GirlsTotal');
		var cInput1 = parseInt(document.getElementById('cGirlsTotal').value);
		var e9Input1 = parseInt(document.getElementById('e9GirlsTotal').value);
		var firstInput = parseInt(cInput1)-parseInt(e9Input1);
		var secondInput = parseInt(document.getElementById('e10GirlsTotal').value);
		$scope.label1 = "E.10. Total number of children on the last day of the reporting month: total girls";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "[C : total girls - E.9 : total girls]";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkFBoys = function() {
		var bgc = document.getElementById('f1BoysTotal');
		var firstInput = parseInt(document.getElementById('e10BoysTotal').value);
		var secondInput = parseInt(document.getElementById('f1BoysTotal').value);
		$scope.label1 = "F.1. Total number of cases pending on the last day of the month: total boys";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "E.10. Total number of children on the last day of the reporting month: total boys";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkFGirls = function() {
		var bgc = document.getElementById('f1GirlsTotal');
		var firstInput = parseInt(document.getElementById('e10GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('f1GirlsTotal').value);
		$scope.label1 = "F.1. Total number of cases pending on the last day of the month: total girls";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "E.10. total number of children on the last day of the reporting month: total girls";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkF2Boys = function() {
		var bgc = document.getElementById('f2BoysTotal');
		var firstInput = parseInt(document.getElementById('e10BoysTotal').value);
		var secondInput = parseInt(document.getElementById('f2BoysTotal').value);
		$scope.label1 = "F.2. No. of children: total boys";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "E.10. total number of children on the last day of the reporting month: total boys";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkF2Girls = function() {
		var bgc = document.getElementById('f2GirlsTotal');
		var firstInput = parseInt(document.getElementById('e10GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('f2GirlsTotal').value);
		$scope.label1 = "F.2. No. of children: total girls";
		$scope.alertMessage = "value should be equal to";
		$scope.label2 = "E.10. total number of children on the last day of the reporting month: total girls";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkMinorityBoys = function() {
		var bgc = document.getElementById('f2MinorityBoys');
		var firstInput = parseInt(document.getElementById('f2BoysTotal').value);
		var secondInput = parseInt(document.getElementById('f2MinorityBoys').value);
		$scope.label1 = "No. of minority children: total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "F.2. no. of children: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkMinorityGirls = function() {
		var bgc = document.getElementById('f2MinorityGirls');
		var firstInput = parseInt(document.getElementById('f2GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('f2MinorityGirls').value);
		$scope.label1 = "No. of minority children: total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "F.2. no. of children: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	// Pendency G validation

	$scope.checkGBoys = function() {
		var bgc = document.getElementById('g9TotalBoys');
		var firstInput = parseInt(document.getElementById('cBoysTotal').value);
		var secondInput = parseInt(document.getElementById('g9TotalBoys').value);
		$scope.label1 = "G9. Total no. of Pendancy of cases before the CWC for declaring a child free for adoption: total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "C. total no. of cases with the CWC in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkGGirls = function() {
		var bgc = document.getElementById('g9TotalGirls');
		var firstInput = parseInt(document.getElementById('cGirlsTotal').value);
		var secondInput = parseInt(document.getElementById('g9TotalGirls').value);
		$scope.label1 = "G9. Total no. of pendancy of cases before the CWC for declaring a child free for adoption: total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "C. total no. of cases with the CWC in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};
	// H section

	$scope.checkH9Boys = function() {
		var bgc = document.getElementById('h9Boys');
		var firstInput = parseInt(document.getElementById('a8BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h9Boys').value);
		$scope.label1 = "H.9. No. of orders issued for filing of SIR (old cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH9Girls = function() {
		var bgc = document.getElementById('h9Girls');
		var firstInput = parseInt(document.getElementById('a8GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h9Girls').value);
		$scope.label1 = "H.9. No. of orders issued for filing of SIR (old cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH10Boys = function() {
		var bgc = document.getElementById('h10Boys');
		var firstInput = parseInt(document.getElementById('a8BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h10Boys').value);
		$scope.label1 = "H.10. No. of SIR submitted (old cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH10Girls = function() {
		var bgc = document.getElementById('h10Girls');
		var firstInput = parseInt(document.getElementById('a8GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h10Girls').value);
		$scope.label1 = "H.10. No. of SIR submitted (old cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH11Boys = function() {
		var bgc = document.getElementById('h11Boys');
		var firstInput = parseInt(document.getElementById('b3BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h11Boys').value);
		$scope.label1 = "H.11. No. of orders issued for filing of SIR (new cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH11Girls = function() {
		var bgc = document.getElementById('h11Girls');
		var firstInput = parseInt(document.getElementById('b3GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h11Girls').value);
		$scope.label1 = "H.11. No. of orders issued for filing of SIR (new cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH12Boys = function() {
		var bgc = document.getElementById('h12Boys');
		var firstInput = parseInt(document.getElementById('b3BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h12Boys').value);
		$scope.label1 = "H.12. No. of SIR submitted (new cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH12Girls = function() {
		var bgc = document.getElementById('h12Girls');
		var firstInput = parseInt(document.getElementById('b3GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h12Girls').value);
		$scope.label1 = "H.12. No. of SIR submitted (new cases) : total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH13Boys = function() {
		var bgc = document.getElementById('h13Boys');
		var firstInput = parseInt(document.getElementById('a8BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h13Boys').value);
		$scope.label1 = "H.13. No. of orders issued for ICPs (old cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH13Girls = function() {
		var bgc = document.getElementById('h13Girls');
		var firstInput = parseInt(document.getElementById('a8GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h13Girls').value);
		$scope.label1 = "H.13. No. of orders issued for ICPs (old cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH14Boys = function() {
		var bgc = document.getElementById('h14Boys');
		var firstInput = parseInt(document.getElementById('a8BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h14Boys').value);
		$scope.label1 = "H.14. No. of ICPs submitted (old cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH14Girls = function() {
		var bgc = document.getElementById('h14Girls');
		var firstInput = parseInt(document.getElementById('a8GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h14Girls').value);
		$scope.label1 = "H.14. No. of ICPs submitted (old cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH15Boys = function() {
		var bgc = document.getElementById('h15Boys');
		var firstInput = parseInt(document.getElementById('b3BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h15Boys').value);
		$scope.label1 = "H.15. No. of orders issued for ICPs (new cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH15Girls = function() {
		var bgc = document.getElementById('h15Girls');
		var firstInput = parseInt(document.getElementById('b3GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h15Girls').value);
		$scope.label1 = "H.15. No. of orders issued for ICPs (new cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH16Boys = function() {
		var bgc = document.getElementById('h16Boys');
		var firstInput = parseInt(document.getElementById('b3BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h16Boys').value);
		$scope.label1 = "H.16. No. of ICPs submitted (new cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH16Girls = function() {
		var bgc = document.getElementById('h16Girls');
		var firstInput = parseInt(document.getElementById('b3GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h16Girls').value);
		$scope.label1 = "H.16. No. of ICPs submitted (new cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH17Boys = function() {
		var bgc = document.getElementById('h17Boys');
		var firstInput = parseInt(document.getElementById('a8BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h17Boys').value);
		$scope.label1 = "H.17. No. of orders issued for ICPs (old cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH17Girls = function() {
		var bgc = document.getElementById('h17Girls');
		var firstInput = parseInt(document.getElementById('a8GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h17Girls').value);
		$scope.label1 = "H.17. No. of orders issued for ICPs (old cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH18Boys = function() {
		var bgc = document.getElementById('h18Boys');
		var firstInput = parseInt(document.getElementById('a8BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h18Boys').value);
		$scope.label1 = "H.18. No. of case history formats submitted (old cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH18Girls = function() {
		var bgc = document.getElementById('h18Girls');
		var firstInput = parseInt(document.getElementById('a8GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h18Girls').value);
		$scope.label1 = "H.18. No. of case history formats submitted (old cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "A.8. total number of children on the first day of the reporting month : total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH19Boys = function() {
		var bgc = document.getElementById('h19Boys');
		var firstInput = parseInt(document.getElementById('b3BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h19Boys').value);
		$scope.label1 = "H.19. No. of orders issued for ICPs (new cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH19Girls = function() {
		var bgc = document.getElementById('h19Girls');
		var firstInput = parseInt(document.getElementById('b3GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h19Girls').value);
		$scope.label1 = "H.19. No. of orders issued for ICPs (new cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH20Boys = function() {
		var bgc = document.getElementById('h20Boys');
		var firstInput = parseInt(document.getElementById('b3BoysTotal').value);
		var secondInput = parseInt(document.getElementById('h20Boys').value);
		$scope.label1 = "H.20. No. of case history formats submitted (new cases): total boys";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total boys";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	$scope.checkH20Girls = function() {
		var bgc = document.getElementById('h20Girls');
		var firstInput = parseInt(document.getElementById('b3GirlsTotal').value);
		var secondInput = parseInt(document.getElementById('h20Girls').value);
		$scope.label1 = "H.20. No. of case hstory formats submitted (new cases): total girls";
		$scope.alertMessage = "value can not exceed";
		$scope.label2 = "B.3. total no. of new cases in the reporting month: total girls";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc);
	};

	// submit validation ends
	//All fields negetive value check starts
	var enamo=null;
	var removeNegetiveColor=function() {
		if(enamo!=null){
			if (!(document.getElementById(enamo).value < 0)) {
				document.getElementById(enamo).style.removeProperty("background-color", "#DC143C", "important");
				document.getElementById(enamo).style.removeProperty("color", "#FFFAF0", "important");
				document.getElementById(enamo).style.removeProperty("border-color", "red", "important");
				return true;
			}	
		}
	};
	
	var allNegetiveTest = function() {
	$scope.negetiveTestVariable = true;
	angular.forEach($scope.cwcForm, function(value, index) {
		if ($scope.negetiveTestVariable == true) {
			if (Number(value - 0) < 0) {
				$scope.negetiveTestVariable = false;
				document.getElementById(index).style.setProperty("background-color", "#DC143C", "important");
				document.getElementById(index).style.setProperty("color", "#FFFAF0", "important");
				document.getElementById(index).style.setProperty("border-color", "red", "important");
				enamo=index;
				$scope.label1="";
			  	$scope.label2="";
				$scope.alertMessage = "Negative values cannot be Submitted";
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
			        scrollTop: $('#'+index).offset().top - 250},'slow');
				return false;
			} else {

				if (document.getElementById(index) != null || document.getElementById(index) != undefined) {
					document.getElementById(index).style.removeProperty("background-color", "#DC143C", "important");
					document.getElementById(index).style.removeProperty("color", "#FFFAF0", "important");
					document.getElementById(index).style.removeProperty("border-color", "red", "important");
					$scope.negetiveTestVariable = true;
					enamo=null

					return true;
				}

			}
		}

	});

	if ($scope.negetiveTestVariable == true) {
		return true;
	} else {
		return false;
	}

};


	
	//All fields negetive value check ends
	// save
	$scope.checksave = function() {
			$scope.saveCWC($scope.cwcForm, 'save');
	};

	// submit function starts
	$scope.checkSubmit = function() {
		if (!$scope.checkDBoys()) {
		} else if (!$scope.checkDGirls()) {
		} else if (!$scope.checkE9Boys()) {
		} else if (!$scope.checkE9Girls()) {
		} else if (!$scope.checkE10Boys()) {
		} else if (!$scope.checkE10Girls()) {
		} else if (!$scope.checkFBoys()) {
		} else if (!$scope.checkFGirls()) {
		} else if (!$scope.checkF2Boys()) {
		} else if (!$scope.checkF2Girls()) {
		} else if (!$scope.checkMinorityBoys()) {
		} else if (!$scope.checkMinorityGirls()) {
		} else if (!$scope.checkGBoys()) {
		} else if (!$scope.checkGGirls()) {
		} else if (!$scope.checkH9Boys()) {
		} else if (!$scope.checkH9Girls()) {
		} else if (!$scope.checkH10Boys()) {
		} else if (!$scope.checkH10Girls()) {
		} else if (!$scope.checkH11Boys()) {
		} else if (!$scope.checkH11Girls()) {
		} else if (!$scope.checkH12Boys()) {
		} else if (!$scope.checkH12Girls()) {
		} else if (!$scope.checkH13Boys()) {
		} else if (!$scope.checkH13Girls()) {
		} else if (!$scope.checkH14Boys()) {
		} else if (!$scope.checkH14Girls()) {
		} else if (!$scope.checkH15Boys()) {
		} else if (!$scope.checkH15Girls()) {
		} else if (!$scope.checkH16Boys()) {
		} else if (!$scope.checkH16Girls()) {
		} else if (!$scope.checkH17Boys()) {
		} else if (!$scope.checkH17Girls()) {
		} else if (!$scope.checkH18Boys()) {
		} else if (!$scope.checkH18Girls()) {
		} else if (!$scope.checkH19Boys()) {
		} else if (!$scope.checkH19Girls()) {
		} else if (!$scope.checkH20Boys()) {
		} else if (!$scope.checkH20Girls()) {
		} else {
			$scope.saveCWC($scope.cwcForm, 'submit');
		}

	};

	// submit function ends
	$scope.cwcForm = {};

	$scope.confirmNavigate = function() {
		$('#confirmationModalHomePage').modal('show');
	};
	$scope.confirmNavigate1 = function() {
		$('#confirmationModalTermsPage').modal('show');
	};
	$scope.confirmNavigate2 = function() {
		$('#confirmationModalDisclaimerPage').modal('show');
	};
	$scope.confirmNavigate3 = function() {
		$('#confirmationModalPrivacyPage').modal('show');
	};
	$scope.confirmNavigate4 = function() {
		$('#confirmationModalSitemapPage').modal('show');
	};
	var preareObject = function(cwcForm) {
		cwcForm.totalMembers = parseInt(cwcForm.noOfMale + cwcForm.noOfFemale);
		// autoCalculation starts
		cwcForm.a1BoysTotal = parseInt(document.getElementById('a1BoysTotal').value);
		cwcForm.a1GirlsTotal = parseInt(document.getElementById('a1GirlsTotal').value);
		cwcForm.a1GrandTotal = parseInt(document.getElementById('a1GrandTotal').value);

		cwcForm.a2BoysTotal = parseInt(document.getElementById('a2BoysTotal').value);
		cwcForm.a2GirlsTotal = parseInt(document.getElementById('a2GirlsTotal').value);
		cwcForm.a2GrandTotal = parseInt(document.getElementById('a2GrandTotal').value);

		cwcForm.a3BoysTotal = parseInt(document.getElementById('a3BoysTotal').value);
		cwcForm.a3GirlsTotal = parseInt(document.getElementById('a3GirlsTotal').value);
		cwcForm.a3GrandTotal = parseInt(document.getElementById('a3GrandTotal').value);

		cwcForm.a4BoysTotal = parseInt(document.getElementById('a4BoysTotal').value);
		cwcForm.a4GirlsTotal = parseInt(document.getElementById('a4GirlsTotal').value);
		cwcForm.a4GrandTotal = parseInt(document.getElementById('a4GrandTotal').value);

		cwcForm.a5BoysTotal = parseInt(document.getElementById('a5BoysTotal').value);
		cwcForm.a5GirlsTotal = parseInt(document.getElementById('a5GirlsTotal').value);
		cwcForm.a5GrandTotal = parseInt(document.getElementById('a5GrandTotal').value);

		cwcForm.a6BoysTotal = parseInt(document.getElementById('a6BoysTotal').value);
		cwcForm.a6GirlsTotal = parseInt(document.getElementById('a6GirlsTotal').value);
		cwcForm.a6GrandTotal = parseInt(document.getElementById('a6GrandTotal').value);

		cwcForm.a7BoysTotal = parseInt(document.getElementById('a7BoysTotal').value);
		cwcForm.a7GirlsTotal = parseInt(document.getElementById('a7GirlsTotal').value);
		cwcForm.a7GrandTotal = parseInt(document.getElementById('a7GrandTotal').value);

		cwcForm.a8Boys0to6 = parseInt(document.getElementById('a8Boys0to6').value);
		cwcForm.a8Boys7to11 = parseInt(document.getElementById('a8Boys7to11').value);
		cwcForm.a8Boys12to15 = parseInt(document.getElementById('a8Boys12to15').value);
		cwcForm.a8Boys16to18 = parseInt(document.getElementById('a8Boys16to18').value);
		cwcForm.a8BoysGreaterThan18 = parseInt(document.getElementById('a8BoysGreaterThan18').value);
		cwcForm.a8BoysTotal = parseInt(document.getElementById('a8BoysTotal').value);
		cwcForm.a8Girls0to6 = parseInt(document.getElementById('a8Girls0to6').value);
		cwcForm.a8Girls7to11 = parseInt(document.getElementById('a8Girls7to11').value);
		cwcForm.a8Girls12to15 = parseInt(document.getElementById('a8Girls12to15').value);
		cwcForm.a8Girls16to18 = parseInt(document.getElementById('a8Girls16to18').value);
		cwcForm.a8GirlsGreaterThan18 = parseInt(document.getElementById('a8GirlsGreaterThan18').value);
		cwcForm.a8GirlsTotal = parseInt(document.getElementById('a8GirlsTotal').value);
		cwcForm.a8GrandTotal = parseInt(document.getElementById('a8GrandTotal').value);

		cwcForm.b1aBoysTotal = parseInt(document.getElementById('b1aBoysTotal').value);
		cwcForm.b1aGirlsTotal = parseInt(document.getElementById('b1aGirlsTotal').value);
		cwcForm.b1aGrandTotal = parseInt(document.getElementById('b1aGrandTotal').value);

		cwcForm.b1bBoysTotal = parseInt(document.getElementById('b1bBoysTotal').value);
		cwcForm.b1bGirlsTotal = parseInt(document.getElementById('b1bGirlsTotal').value);
		cwcForm.b1bGrandTotal = parseInt(document.getElementById('b1bGrandTotal').value);

		cwcForm.b1cBoysTotal = parseInt(document.getElementById('b1cBoysTotal').value);
		cwcForm.b1cGirlsTotal = parseInt(document.getElementById('b1cGirlsTotal').value);
		cwcForm.b1cGrandTotal = parseInt(document.getElementById('b1cGrandTotal').value);

		cwcForm.b1dBoysTotal = parseInt(document.getElementById('b1dBoysTotal').value);
		cwcForm.b1dGirlsTotal = parseInt(document.getElementById('b1dGirlsTotal').value);
		cwcForm.b1dGrandTotal = parseInt(document.getElementById('b1dGrandTotal').value);

		cwcForm.b1Boys0to6 = parseInt(document.getElementById('b1Boys0to6').value);
		cwcForm.b1Boys7to11 = parseInt(document.getElementById('b1Boys7to11').value);
		cwcForm.b1Boys12to15 = parseInt(document.getElementById('b1Boys12to15').value);
		cwcForm.b1Boys16to18 = parseInt(document.getElementById('b1Boys16to18').value);
		cwcForm.b1BoysGreaterThan18 = parseInt(document.getElementById('b1BoysGreaterThan18').value);
		cwcForm.b1BoysTotal = parseInt(document.getElementById('b1BoysTotal').value);
		cwcForm.b1Girls0to6 = parseInt(document.getElementById('b1Girls0to6').value);
		cwcForm.b1Girls7to11 = parseInt(document.getElementById('b1Girls7to11').value);
		cwcForm.b1Girls12to15 = parseInt(document.getElementById('b1Girls12to15').value);
		cwcForm.b1Girls16to18 = parseInt(document.getElementById('b1Girls16to18').value);
		cwcForm.b1GirlsGreaterThan18 = parseInt(document.getElementById('b1GirlsGreaterThan18').value);
		cwcForm.b1GirlsTotal = parseInt(document.getElementById('b1GirlsTotal').value);
		cwcForm.b1GrandTotal = parseInt(document.getElementById('b1GrandTotal').value);

		cwcForm.b2BoysTotal = parseInt(document.getElementById('b2BoysTotal').value);
		cwcForm.b2GirlsTotal = parseInt(document.getElementById('b2GirlsTotal').value);
		cwcForm.b2GrandTotal = parseInt(document.getElementById('b2GrandTotal').value);

		cwcForm.b3Boys0to6 = parseInt(document.getElementById('b3Boys0to6').value);
		cwcForm.b3Boys7to11 = parseInt(document.getElementById('b3Boys7to11').value);
		cwcForm.b3Boys12to15 = parseInt(document.getElementById('b3Boys12to15').value);
		cwcForm.b3Boys16to18 = parseInt(document.getElementById('b3Boys16to18').value);
		cwcForm.b3BoysGreaterThan18 = parseInt(document.getElementById('b3BoysGreaterThan18').value);
		cwcForm.b3BoysTotal = parseInt(document.getElementById('b3BoysTotal').value);
		cwcForm.b3Girls0to6 = parseInt(document.getElementById('b3Girls0to6').value);
		cwcForm.b3Girls7to11 = parseInt(document.getElementById('b3Girls7to11').value);
		cwcForm.b3Girls12to15 = parseInt(document.getElementById('b3Girls12to15').value);
		cwcForm.b3Girls16to18 = parseInt(document.getElementById('b3Girls16to18').value);
		cwcForm.b3GirlsGreaterThan18 = parseInt(document.getElementById('b3GirlsGreaterThan18').value);
		cwcForm.b3GirlsTotal = parseInt(document.getElementById('b3GirlsTotal').value);
		cwcForm.b3GrandTotal = parseInt(document.getElementById('b3GrandTotal').value);

		cwcForm.cBoys0to6 = parseInt(document.getElementById('cBoys0to6').value);
		cwcForm.cBoys7to11 = parseInt(document.getElementById('cBoys7to11').value);
		cwcForm.cBoys12to15 = parseInt(document.getElementById('cBoys12to15').value);
		cwcForm.cBoys16to18 = parseInt(document.getElementById('cBoys16to18').value);
		cwcForm.cBoysGreaterThan18 = parseInt(document.getElementById('cBoysGreaterThan18').value);
		cwcForm.cBoysTotal = parseInt(document.getElementById('cBoysTotal').value);
		cwcForm.cGirls0to6 = parseInt(document.getElementById('cGirls0to6').value);
		cwcForm.cGirls7to11 = parseInt(document.getElementById('cGirls7to11').value);
		cwcForm.cGirls12to15 = parseInt(document.getElementById('cGirls12to15').value);
		cwcForm.cGirls16to18 = parseInt(document.getElementById('cGirls16to18').value);
		cwcForm.cGirlsGreaterThan18 = parseInt(document.getElementById('cGirlsGreaterThan18').value);
		cwcForm.cGirlsTotal = parseInt(document.getElementById('cGirlsTotal').value);
		cwcForm.cGrandTotal = parseInt(document.getElementById('cGrandTotal').value);

		cwcForm.d1aBoysTotal = parseInt(document.getElementById('d1aBoysTotal').value);
		cwcForm.d1aGirlsTotal = parseInt(document.getElementById('d1aGirlsTotal').value);

		cwcForm.d1aGrandTotal = parseInt(document.getElementById('d1aGrandTotal').value);

		cwcForm.d1bBoysTotal = parseInt(document.getElementById('d1bBoysTotal').value);
		cwcForm.d1bGirlsTotal = parseInt(document.getElementById('d1bGirlsTotal').value);
		cwcForm.d1bGrandTotal = parseInt(document.getElementById('d1bGrandTotal').value);

		cwcForm.d1cBoysTotal = parseInt(document.getElementById('d1cBoysTotal').value);
		cwcForm.d1cGirlsTotal = parseInt(document.getElementById('d1cGirlsTotal').value);
		cwcForm.d1cGrandTotal = parseInt(document.getElementById('d1cGrandTotal').value);

		cwcForm.d1dBoysTotal = parseInt(document.getElementById('d1dBoysTotal').value);
		cwcForm.d1dGirlsTotal = parseInt(document.getElementById('d1dGirlsTotal').value);
		cwcForm.d1dGrandTotal = parseInt(document.getElementById('d1dGrandTotal').value);

		cwcForm.d1eBoysTotal = parseInt(document.getElementById('d1eBoysTotal').value);
		cwcForm.d1eGirlsTotal = parseInt(document.getElementById('d1eGirlsTotal').value);
		cwcForm.d1eGrandTotal = parseInt(document.getElementById('d1eGrandTotal').value);

		cwcForm.d1Boys0to6 = parseInt(document.getElementById('d1Boys0to6').value);
		cwcForm.d1Boys7to11 = parseInt(document.getElementById('d1Boys7to11').value);
		cwcForm.d1Boys12to15 = parseInt(document.getElementById('d1Boys12to15').value);
		cwcForm.d1Boys16to18 = parseInt(document.getElementById('d1Boys16to18').value);
		cwcForm.d1BoysGreaterThan18 = parseInt(document.getElementById('d1BoysGreaterThan18').value);
		cwcForm.d1BoysTotal = parseInt(document.getElementById('d1BoysTotal').value);
		cwcForm.d1Girls0to6 = parseInt(document.getElementById('d1Girls0to6').value);
		cwcForm.d1Girls7to11 = parseInt(document.getElementById('d1Girls7to11').value);
		cwcForm.d1Girls12to15 = parseInt(document.getElementById('d1Girls12to15').value);
		cwcForm.d1Girls16to18 = parseInt(document.getElementById('d1Girls16to18').value);
		cwcForm.d1GirlsGreaterThan18 = parseInt(document.getElementById('d1GirlsGreaterThan18').value);
		cwcForm.d1GirlsTotal = parseInt(document.getElementById('d1GirlsTotal').value);
		cwcForm.d1GrandTotal = parseInt(document.getElementById('d1GrandTotal').value);

		cwcForm.d2BoysTotal = parseInt(document.getElementById('d2BoysTotal').value);
		cwcForm.d2GirlsTotal = parseInt(document.getElementById('d2GirlsTotal').value);
		cwcForm.d2GrandTotal = parseInt(document.getElementById('d2GrandTotal').value);

		cwcForm.d3BoysTotal = parseInt(document.getElementById('d3BoysTotal').value);
		cwcForm.d3GirlsTotal = parseInt(document.getElementById('d3GirlsTotal').value);
		cwcForm.d3GrandTotal = parseInt(document.getElementById('d3GrandTotal').value);

		cwcForm.d4BoysTotal = parseInt(document.getElementById('d4BoysTotal').value);
		cwcForm.d4GirlsTotal = parseInt(document.getElementById('d4GirlsTotal').value);
		cwcForm.d4GrandTotal = parseInt(document.getElementById('d4GrandTotal').value);

		cwcForm.d5Boys12to15 = parseInt(document.getElementById('d5Boys12to15').value);
		cwcForm.d5Boys16to18 = parseInt(document.getElementById('d5Boys16to18').value);
		cwcForm.d5BoysGreaterThan18 = parseInt(document.getElementById('d5BoysGreaterThan18').value);
		cwcForm.d5BoysTotal = parseInt(document.getElementById('d5BoysTotal').value);
		cwcForm.d5Girls0to6 = parseInt(document.getElementById('d5Girls0to6').value);
		cwcForm.d5Girls7to11 = parseInt(document.getElementById('d5Girls7to11').value);
		cwcForm.d5Girls12to15 = parseInt(document.getElementById('d5Girls12to15').value);
		cwcForm.d5Girls16to18 = parseInt(document.getElementById('d5Girls16to18').value);
		cwcForm.d5GirlsGreaterThan18 = parseInt(document.getElementById('d5GirlsGreaterThan18').value);
		cwcForm.d5GirlsTotal = parseInt(document.getElementById('d5GirlsTotal').value);
		cwcForm.d5GrandTotal = parseInt(document.getElementById('d5GrandTotal').value);

		cwcForm.e1BoysTotal = parseInt(document.getElementById('e1BoysTotal').value);
		cwcForm.e1GirlsTotal = parseInt(document.getElementById('e1GirlsTotal').value);
		cwcForm.e1GrandTotal = parseInt(document.getElementById('e1GrandTotal').value);

		cwcForm.e2BoysTotal = parseInt(document.getElementById('e2BoysTotal').value);
		cwcForm.e2GirlsTotal = parseInt(document.getElementById('e2GirlsTotal').value);
		cwcForm.e2GrandTotal = parseInt(document.getElementById('e2GrandTotal').value);

		cwcForm.e3BoysTotal = parseInt(document.getElementById('e3BoysTotal').value);
		cwcForm.e3GirlsTotal = parseInt(document.getElementById('e3GirlsTotal').value);
		cwcForm.e3GrandTotal = parseInt(document.getElementById('e3GrandTotal').value);

		cwcForm.e4BoysTotal = parseInt(document.getElementById('e4BoysTotal').value);
		cwcForm.e4GirlsTotal = parseInt(document.getElementById('e4GirlsTotal').value);
		cwcForm.e4GrandTotal = parseInt(document.getElementById('e4GrandTotal').value);

		cwcForm.e5BoysTotal = parseInt(document.getElementById('e5BoysTotal').value);
		cwcForm.e5GirlsTotal = parseInt(document.getElementById('e5GirlsTotal').value);
		cwcForm.e5GrandTotal = parseInt(document.getElementById('e5GrandTotal').value);

		cwcForm.e6BoysTotal = parseInt(document.getElementById('e6BoysTotal').value);
		cwcForm.e6GirlsTotal = parseInt(document.getElementById('e6GirlsTotal').value);
		cwcForm.e6GrandTotal = parseInt(document.getElementById('e6GrandTotal').value);

		cwcForm.e7BoysTotal = parseInt(document.getElementById('e7BoysTotal').value);
		cwcForm.e7GirlsTotal = parseInt(document.getElementById('e7GirlsTotal').value);
		cwcForm.e7GrandTotal = parseInt(document.getElementById('e7GrandTotal').value);

		cwcForm.e8BoysTotal = parseInt(document.getElementById('e8BoysTotal').value);
		cwcForm.e8GirlsTotal = parseInt(document.getElementById('e8GirlsTotal').value);
		cwcForm.e8GrandTotal = parseInt(document.getElementById('e8GrandTotal').value);

		cwcForm.e9Boys0to6 = parseInt(document.getElementById('e9Boys0to6').value);
		cwcForm.e9Boys7to11 = parseInt(document.getElementById('e9Boys7to11').value);
		cwcForm.e9Boys12to15 = parseInt(document.getElementById('e9Boys12to15').value);
		cwcForm.e9Boys16to18 = parseInt(document.getElementById('e9Boys16to18').value);
		cwcForm.e9BoysGreaterThan18 = parseInt(document.getElementById('e9BoysGreaterThan18').value);
		cwcForm.e9BoysTotal = parseInt(document.getElementById('e9BoysTotal').value);
		cwcForm.e9Girls0to6 = parseInt(document.getElementById('e9Girls0to6').value);
		cwcForm.e9Girls7to11 = parseInt(document.getElementById('e9Girls7to11').value);
		cwcForm.e9Girls12to15 = parseInt(document.getElementById('e9Girls12to15').value);
		cwcForm.e9Girls16to18 = parseInt(document.getElementById('e9Girls16to18').value);
		cwcForm.e9GirlsGreaterThan18 = parseInt(document.getElementById('e9GirlsGreaterThan18').value);
		cwcForm.e9GirlsTotal = parseInt(document.getElementById('e9GirlsTotal').value);
		cwcForm.e9GrandTotal = parseInt(document.getElementById('e9GrandTotal').value);

		cwcForm.e10aBoysTotal = parseInt(document.getElementById('e10aBoysTotal').value);
		cwcForm.e10aGirlsTotal = parseInt(document.getElementById('e10aGirlsTotal').value);
		cwcForm.e10aGrandTotal = parseInt(document.getElementById('e10aGrandTotal').value);

		cwcForm.e10bBoysTotal = parseInt(document.getElementById('e10bBoysTotal').value);
		cwcForm.e10bGirlsTotal = parseInt(document.getElementById('e10bGirlsTotal').value);
		cwcForm.e10bGrandTotal = parseInt(document.getElementById('e10bGrandTotal').value);

		cwcForm.e10cBoysTotal = parseInt(document.getElementById('e10cBoysTotal').value);
		cwcForm.e10cGirlsTotal = parseInt(document.getElementById('e10cGirlsTotal').value);
		cwcForm.e10cGrandTotal = parseInt(document.getElementById('e10cGrandTotal').value);

		cwcForm.e10dBoysTotal = parseInt(document.getElementById('e10dBoysTotal').value);
		cwcForm.e10dGirlsTotal = parseInt(document.getElementById('e10dGirlsTotal').value);
		cwcForm.e10dGrandTotal = parseInt(document.getElementById('e10dGrandTotal').value);

		cwcForm.e10eBoysTotal = parseInt(document.getElementById('e10eBoysTotal').value);
		cwcForm.e10eGirlsTotal = parseInt(document.getElementById('e10eGirlsTotal').value);
		cwcForm.e10eGrandTotal = parseInt(document.getElementById('e10eGrandTotal').value);

		cwcForm.e10fBoysTotal = parseInt(document.getElementById('e10fBoysTotal').value);
		cwcForm.e10fGirlsTotal = parseInt(document.getElementById('e10fGirlsTotal').value);
		cwcForm.e10fGrandTotal = parseInt(document.getElementById('e10fGrandTotal').value);

		cwcForm.e10gBoysTotal = parseInt(document.getElementById('e10gBoysTotal').value);
		cwcForm.e10gGirlsTotal = parseInt(document.getElementById('e10gGirlsTotal').value);
		cwcForm.e10gGrandTotal = parseInt(document.getElementById('e10gGrandTotal').value);

		cwcForm.e10Boys0to6 = parseInt(document.getElementById('e10Boys0to6').value);
		cwcForm.e10Boys7to11 = parseInt(document.getElementById('e10Boys7to11').value);
		cwcForm.e10Boys12to15 = parseInt(document.getElementById('e10Boys12to15').value);
		cwcForm.e10Boys16to18 = parseInt(document.getElementById('e10Boys16to18').value);
		cwcForm.e10BoysGreaterThan18 = parseInt(document.getElementById('e10BoysGreaterThan18').value);
		cwcForm.e10BoysTotal = parseInt(document.getElementById('e10BoysTotal').value);
		cwcForm.e10Girls0to6 = parseInt(document.getElementById('e10Girls0to6').value);
		cwcForm.e10Girls7to11 = parseInt(document.getElementById('e10Girls7to11').value);
		cwcForm.e10Girls12to15 = parseInt(document.getElementById('e10Girls12to15').value);
		cwcForm.e10Girls16to18 = parseInt(document.getElementById('e10Girls16to18').value);
		cwcForm.e10GirlsGreaterThan18 = parseInt(document.getElementById('e10GirlsGreaterThan18').value);
		cwcForm.e10GirlsTotal = parseInt(document.getElementById('e10GirlsTotal').value);
		cwcForm.e10GrandTotal = parseInt(document.getElementById('e10GrandTotal').value);

		cwcForm.f1aBoysTotal = parseInt(document.getElementById('f1aBoysTotal').value);
		cwcForm.f1aGirlsTotal = parseInt(document.getElementById('f1aGirlsTotal').value);
		cwcForm.f1aGrandTotal = parseInt(document.getElementById('f1aGrandTotal').value);

		cwcForm.f1bBoysTotal = parseInt(document.getElementById('f1bBoysTotal').value);
		cwcForm.f1bGirlsTotal = parseInt(document.getElementById('f1bGirlsTotal').value);
		cwcForm.f1bGrandTotal = parseInt(document.getElementById('f1bGrandTotal').value);

		cwcForm.f1cBoysTotal = parseInt(document.getElementById('f1cBoysTotal').value);
		cwcForm.f1cGirlsTotal = parseInt(document.getElementById('f1cGirlsTotal').value);
		cwcForm.f1cGrandTotal = parseInt(document.getElementById('f1cGrandTotal').value);

		cwcForm.f1dBoysTotal = parseInt(document.getElementById('f1dBoysTotal').value);
		cwcForm.f1dGirlsTotal = parseInt(document.getElementById('f1dGirlsTotal').value);
		cwcForm.f1dGrandTotal = parseInt(document.getElementById('f1dGrandTotal').value);

		cwcForm.f1Boys0to6 = parseInt(document.getElementById('f1Boys0to6').value);
		cwcForm.f1Boys7to11 = parseInt(document.getElementById('f1Boys7to11').value);
		cwcForm.f1Boys12to15 = parseInt(document.getElementById('f1Boys12to15').value);
		cwcForm.f1Boys16to18 = parseInt(document.getElementById('f1Boys16to18').value);
		cwcForm.f1BoysGreaterThan18 = parseInt(document.getElementById('f1BoysGreaterThan18').value);
		cwcForm.f1BoysTotal = parseInt(document.getElementById('f1BoysTotal').value);
		cwcForm.f1Girls0to6 = parseInt(document.getElementById('f1Girls0to6').value);
		cwcForm.f1Girls7to11 = parseInt(document.getElementById('f1Girls7to11').value);
		cwcForm.f1Girls12to15 = parseInt(document.getElementById('f1Girls12to15').value);
		cwcForm.f1Girls16to18 = parseInt(document.getElementById('f1Girls16to18').value);
		cwcForm.f1GirlsGreaterThan18 = parseInt(document.getElementById('f1GirlsGreaterThan18').value);
		cwcForm.f1GirlsTotal = parseInt(document.getElementById('f1GirlsTotal').value);
		cwcForm.f1GrandTotal = parseInt(document.getElementById('f1GrandTotal').value);

		cwcForm.f2BoysTotal = parseInt(document.getElementById('f2BoysTotal').value);
		cwcForm.f2GirlsTotal = parseInt(document.getElementById('f2GirlsTotal').value);
		cwcForm.f2GrandTotal = parseInt(document.getElementById('f2GrandTotal').value);

		cwcForm.f2MinorityTotal = parseInt(document.getElementById('f2MinorityTotal').value);

		cwcForm.g1AbandonedTotal = parseInt(document.getElementById('g1AbandonedTotal').value);
		cwcForm.g1OrphanedTotal = parseInt(document.getElementById('g1OrphanedTotal').value);
		cwcForm.g1OthersTotal = parseInt(document.getElementById('g1OthersTotal').value);
		cwcForm.g1TotalBoys = parseInt(document.getElementById('g1TotalBoys').value);
		cwcForm.g1TotalGirls = parseInt(document.getElementById('g1TotalGirls').value);
		cwcForm.g1Total = parseInt(document.getElementById('g1Total').value);

		cwcForm.g2AbandonedTotal = parseInt(document.getElementById('g2AbandonedTotal').value);
		cwcForm.g2OrphanedTotal = parseInt(document.getElementById('g2OrphanedTotal').value);
		cwcForm.g2OthersTotal = parseInt(document.getElementById('g2OthersTotal').value);
		cwcForm.g2TotalBoys = parseInt(document.getElementById('g2TotalBoys').value);
		cwcForm.g2TotalGirls = parseInt(document.getElementById('g2TotalGirls').value);
		cwcForm.g2Total = parseInt(document.getElementById('g2Total').value);

		cwcForm.g3AbandonedTotal = parseInt(document.getElementById('g3AbandonedTotal').value);
		cwcForm.g3OrphanedTotal = parseInt(document.getElementById('g3OrphanedTotal').value);
		cwcForm.g3OthersTotal = parseInt(document.getElementById('g3OthersTotal').value);
		cwcForm.g3TotalBoys = parseInt(document.getElementById('g3TotalBoys').value);
		cwcForm.g3TotalGirls = parseInt(document.getElementById('g3TotalGirls').value);
		cwcForm.g3Total = parseInt(document.getElementById('g3Total').value);

		cwcForm.g4AbandonedTotal = parseInt(document.getElementById('g4AbandonedTotal').value);
		cwcForm.g4OrphanedTotal = parseInt(document.getElementById('g4OrphanedTotal').value);
		cwcForm.g4OthersTotal = parseInt(document.getElementById('g4OthersTotal').value);
		cwcForm.g4TotalBoys = parseInt(document.getElementById('g4TotalBoys').value);
		cwcForm.g4TotalGirls = parseInt(document.getElementById('g4TotalGirls').value);
		cwcForm.g4Total = parseInt(document.getElementById('g4Total').value);

		cwcForm.g5AbandonedTotal = parseInt(document.getElementById('g5AbandonedTotal').value);
		cwcForm.g5OrphanedTotal = parseInt(document.getElementById('g5OrphanedTotal').value);
		cwcForm.g5OthersTotal = parseInt(document.getElementById('g5OthersTotal').value);
		cwcForm.g5TotalBoys = parseInt(document.getElementById('g5TotalBoys').value);
		cwcForm.g5TotalGirls = parseInt(document.getElementById('g5TotalGirls').value);
		cwcForm.g5Total = parseInt(document.getElementById('g5Total').value);

		cwcForm.g6AbandonedTotal = parseInt(document.getElementById('g6AbandonedTotal').value);
		cwcForm.g6OrphanedTotal = parseInt(document.getElementById('g6OrphanedTotal').value);
		cwcForm.g6OthersTotal = parseInt(document.getElementById('g6OthersTotal').value);
		cwcForm.g6TotalBoys = parseInt(document.getElementById('g6TotalBoys').value);
		cwcForm.g6TotalGirls = parseInt(document.getElementById('g6TotalGirls').value);
		cwcForm.g6Total = parseInt(document.getElementById('g6Total').value);

		cwcForm.g7AbandonedTotal = parseInt(document.getElementById('g7AbandonedTotal').value);
		cwcForm.g7OrphanedTotal = parseInt(document.getElementById('g7OrphanedTotal').value);
		cwcForm.g7OthersTotal = parseInt(document.getElementById('g7OthersTotal').value);
		cwcForm.g7TotalBoys = parseInt(document.getElementById('g7TotalBoys').value);
		cwcForm.g7TotalGirls = parseInt(document.getElementById('g7TotalGirls').value);
		cwcForm.g7Total = parseInt(document.getElementById('g7Total').value);

		cwcForm.g8AbandonedTotal = parseInt(document.getElementById('g8AbandonedTotal').value);
		cwcForm.g8OrphanedTotal = parseInt(document.getElementById('g8OrphanedTotal').value);
		cwcForm.g8OthersTotal = parseInt(document.getElementById('g8OthersTotal').value);
		cwcForm.g8TotalBoys = parseInt(document.getElementById('g8TotalBoys').value);
		cwcForm.g8TotalGirls = parseInt(document.getElementById('g8TotalGirls').value);
		cwcForm.g8Total = parseInt(document.getElementById('g8Total').value);

		cwcForm.g9AbandonedBoys = parseInt(document.getElementById('g9AbandonedBoys').value);
		cwcForm.g9AbandonedGirls = parseInt(document.getElementById('g9AbandonedGirls').value);
		cwcForm.g9AbandonedTotal = parseInt(document.getElementById('g9AbandonedTotal').value);
		cwcForm.g9OrphanedBoys = parseInt(document.getElementById('g9OrphanedBoys').value);
		cwcForm.g9OrphanedGirls = parseInt(document.getElementById('g9OrphanedGirls').value);
		cwcForm.g9OrphanedTotal = parseInt(document.getElementById('g9OrphanedTotal').value);
		cwcForm.g9OthersBoys = parseInt(document.getElementById('g9OthersBoys').value);
		cwcForm.g9OthersGirls = parseInt(document.getElementById('g9OthersGirls').value);
		cwcForm.g9OthersTotal = parseInt(document.getElementById('g9OthersTotal').value);
		cwcForm.g9TotalBoys = parseInt(document.getElementById('g9TotalBoys').value);
		cwcForm.g9TotalGirls = parseInt(document.getElementById('g9TotalGirls').value);
		cwcForm.g9Total = parseInt(document.getElementById('g9Total').value);

		cwcForm.h9Total = parseInt(document.getElementById('h9Total').value);
		cwcForm.h10Total = parseInt(document.getElementById('h10Total').value);
		cwcForm.h11Total = parseInt(document.getElementById('h11Total').value);
		cwcForm.h12Total = parseInt(document.getElementById('h12Total').value);
		cwcForm.h13Total = parseInt(document.getElementById('h13Total').value);
		cwcForm.h14Total = parseInt(document.getElementById('h14Total').value);
		cwcForm.h15Total = parseInt(document.getElementById('h15Total').value);
		cwcForm.h16Total = parseInt(document.getElementById('h16Total').value);
		cwcForm.h17Total = parseInt(document.getElementById('h17Total').value);
		cwcForm.h18Total = parseInt(document.getElementById('h18Total').value);
		cwcForm.h19Total = parseInt(document.getElementById('h19Total').value);
		cwcForm.h20Total = parseInt(document.getElementById('h20Total').value);
		cwcForm.h21Total = parseInt(document.getElementById('h21Total').value);
		cwcForm.h22Total = parseInt(document.getElementById('h22Total').value);
		cwcForm.h23Total = parseInt(document.getElementById('h23Total').value);
		cwcForm.h24Total = parseInt(document.getElementById('h24Total').value);
		cwcForm.h25Total = parseInt(document.getElementById('h25Total').value);
		cwcForm.h26Total = parseInt(document.getElementById('h26Total').value);
		cwcForm.h27Total = parseInt(document.getElementById('h27Total').value);
		cwcForm.h28Total = parseInt(document.getElementById('h28Total').value);

		cwcForm.userId = Number(document.getElementById("uId").value);
		if ($scope.selectedDistrict != undefined)
			cwcForm.districtId = $scope.selectedDistrict.areaId;

		for (var i = 0; i < $scope.cwcTrainingDetailsRepetitionArray.length; i++) {
			if ($scope.cwcTrainingDetailsRepetitionArray[i].trainingOrganisedBy != null || $scope.cwcTrainingDetailsRepetitionArray[i].trainingOrganisedBy != undefined)
				$scope.cwcTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.cwcTrainingDetailsRepetitionArray[i].trainingOrganisedBy.typeDetailsId;
		}

		cwcForm.cwcDetailsTrainings = $scope.cwcTrainingDetailsRepetitionArray;
	};
	var submitted = false;
	$scope.saveCWC = function(cwcForm, clickType, submitConfirm) {
		$(".loader").show();
		// sending the data to server
		if (clickType == 'save') {
				preareObject(cwcForm);
				$http.post('saveCWC', cwcForm).then(function(result) {
					if (result.status == 200) {
						$(".loader").fadeOut();
						$scope.success_msg = commonService.messages.save_success_msg;
						$('#successModalForCWCSave').modal('show');
					}
				}, function(error) {
					$(".loader").fadeOut();
					commonService.errSaveHttpFunction(error);
					console.log(error);
				});
		} else if (clickType == 'submit' && submitted == false) {
			$(".loader").fadeOut();
			if(!$scope.cwcTrainingDetailsRepetitionArray.length<1){
				for(var i=0;i<$scope.cwcTrainingDetailsRepetitionArray.length;i++){
					if (!accordionValidation($scope.cwcTrainingDetailsRepetitionArray[i])) {
						var sum=i+1;
						$scope.label1 = commonService.messages.add_all_specific_training_details+sum;
						$scope.label2 = "";
						$scope.alertMessage = "";
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						$('html,body').animate({
							scrollTop: $('#accordion').offset().top - 250},'slow');
						return false;
					}
				}
			}
			
			if (!accordionValidation($scope.cwcTrainingDetailsRepetitionArray[$scope.cwcTrainingDetailsRepetitionArray.length - 1])) {
				$scope.label1 = commonService.messages.add_all_training_details;
				$scope.label2 = "";
				$scope.alertMessage = "";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop: $('#accordion').offset().top - 250},'slow');
			}else{	
				$('#successModalForCWCSubmit').modal('show');
			}	
			if(allNegetiveTest() ==false){
	 			return false;
	 		 }
		}
		if (submitConfirm == 'ok') {// here actual submission will be done
			preareObject(cwcForm);

			//do whatever validation before submission here	
			$http.post('submitCWC', cwcForm).then(function(result) {
				$(".loader").show();
				if (result.status == 200) {
					$scope.success_msg = commonService.messages.submit_success_msg+cwcForm.timeperiod.timePeriod;
					$('#successModalForCWCSave').modal('show');
					$(".loader").fadeOut();
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
			
		}
	};

	$scope.autoSaveCWC = function(cwcForm, clickType) {
		// sending the data to server
		if (clickType == 'save') {
				preareObject(cwcForm);
				$http.post('autoSaveCWC', cwcForm).then(function(result) {
					if (result.status == 200) {
						$(".loader").fadeOut();
						$('#successModalForAutoSaveCWC').modal('show');
					}
				}, function(error) {
					commonService.checkSessionOut(error);
					console.log(error);
				});
		} 
		
	};	
	// getting refresh on saving @swarna

	$scope.refreshPage = function() {
		$window.location.reload();
	};

	// the following function is for initialization and setting the dates in
	// date pickers.
//	var todaysDate = new Date();
//	var lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth(), 0);
//    var firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 1);
   
    //validation starts------------------------------------------
	var dateObj = {};
	var dateConvert = function(date) {
		var newDate = null;
		dateObj = {
			month : date.split("-")[1],
			date : date.split("-")[0],
			year : date.split("-")[2]
		};
		newDate = dateObj.year+"-"+dateObj.month+"-"+dateObj.date;
		return newDate;
	};
	var checkDate = function(date, index){
		$scope.cwcTrainingDetailsRepetitionArray[index].trainingTo = date;
		if($scope.cwcTrainingDetailsRepetitionArray[index].trainingFrom != null && $scope.cwcTrainingDetailsRepetitionArray[index].trainingFrom != undefined){
			var fromDay = new Date(dateConvert($scope.cwcTrainingDetailsRepetitionArray[index].trainingFrom));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
				$scope.label2 = "";
            	$scope.alertMessage = "";
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.cwcTrainingDetailsRepetitionArray[index].trainingTo = null;
            }
		}else{
			$scope.label1 = commonService.messages.select_training_from;
			$scope.label2 = "";
			$scope.alertMessage = "";
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.cwcTrainingDetailsRepetitionArray[index].trainingTo = null;
		}
	};
	$scope.initializeDatePicker = function(index) {
		
		$("#trainingFromDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if($scope.cwcTrainingDetailsRepetitionArray[index].trainingTo != null && $scope.cwcTrainingDetailsRepetitionArray[index].trainingTo != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.cwcTrainingDetailsRepetitionArray[index].trainingTo));
					if(toDay < fromDay){
						$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
						$scope.label2 = "";
		            	$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.cwcTrainingDetailsRepetitionArray[index].trainingTo = null;
		            }
				}
	            $scope.cwcTrainingDetailsRepetitionArray[index].trainingFrom = date;
	        },
		});
		$("#trainingFromDatepicker1"+ index).on("click", function(){
			$("#trainingFromDatepicker"+ index).focus();
		});
		$("#trainingToDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				checkDate(date, index);
	        },
		});
		$("#trainingToDatepicker1"+ index).on("click", function(){
			$("#trainingToDatepicker"+ index).focus();
		});
	};

	// Accordion add new Functions @swarna

	$scope.cwcTrainingDetailsObject = {
		trainingId : null,
		durationOfTraining : null,
		trainingFrom : null,
		trainingTo : null,
		trainingOrganisedBy : null,
		trainingOrganisedByOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLawsICPS : null,
		totCombinedTraining : null,
		totCpmisOrTrackChildOrClts : null,
		totOthers : null,
		topicOfTrainingOthers : null,
		tabCwcChairperson : null,
		tabMembers : null,
		tabAssistantCumDataEntryOperator : null,
		tabPanelLawyer : null,
		tabOthers : null,
		trainingAttendedByOthers : null,
		cwcId : null
	};
	$scope.cwcTrainingDetailsRepetitionArray = [ {
		trainingId : null,
		durationOfTraining : null,
		trainingFrom : null,
		trainingTo : null,
		trainingOrganisedBy : null,
		trainingOrganisedByOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLawsICPS : null,
		totCombinedTraining : null,
		totCpmisOrTrackChildOrClts : null,
		totOthers : null,
		topicOfTrainingOthers : null,
		tabCwcChairperson : null,
		tabMembers : null,
		tabAssistantCumDataEntryOperator : null,
		tabPanelLawyer : null,
		tabOthers : null,
		trainingAttendedByOthers : null,
		cwcId : null
	} ];

	var topicOfTrainingValidation = function(training){
		if(training.totJjAct != true &&
				training.totPosco != true &&
				training.totChildRelatedLawsICPS != true &&
				training.totCombinedTraining != true &&
				training.totCpmisOrTrackChildOrClts != true &&
				training.totOthers != true){
			return false;
		}else if(training.totOthers == true && (training.topicOfTrainingOthers == null || training.topicOfTrainingOthers.trim()=="")){
			return false;
		}else{
			return true;
		}
	};
	var accordionValidation = function(training){
		if($scope.cwcForm.i1Training == 'true'){
			if((training.durationOfTraining == null ||
					training.trainingFrom == null ||
					training.trainingTo == null ||
					training.trainingOrganisedBy == null ||
					training.tabCwcChairperson == null ||
					training.tabMembers == null ||
					training.tabAssistantCumDataEntryOperator == null ||
					training.tabPanelLawyer == null ||
					training.tabOthers == null)){
				return false;
			}else if((training.trainingOrganisedBy.typeDetailsId == 4 && (training.trainingOrganisedByOthers == null || training.trainingOrganisedByOthers.trim() == "")) ||
					(training.tabOthers > 0 && training.trainingAttendedByOthers == null)){
				return false;
			}else if(training.tabOthers > 0 && (training.trainingAttendedByOthers == null || training.trainingAttendedByOthers.trim()=="")){
				return false;
			}else if(!topicOfTrainingValidation(training)){
				return false;
			}else{
				return true;
			}
		}else{
			return true;
		}
	};
	
	$scope.addNewDetails = function() {
		if($scope.validateNoOfTraining($scope.cwcForm.i1aNoOfTrainings)){
			if (!accordionValidation($scope.cwcTrainingDetailsRepetitionArray[$scope.cwcTrainingDetailsRepetitionArray.length - 1])) {
				$scope.label1 = commonService.messages.add_all_training_details;
				$scope.label2 = "";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.cwcForm.i1aNoOfTrainings!=undefined && $scope.cwcForm.i1aNoOfTrainings <= 10){
					if ($scope.cwcTrainingDetailsRepetitionArray.length < $scope.cwcForm.i1aNoOfTrainings) {
						$scope.cwcTrainingDetailsRepetitionArray[($scope.cwcTrainingDetailsRepetitionArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.cwcTrainingDetailsObject));
					} else {
						document.getElementById('maximumLimit10Error').innerHTML = "You can add details of maximum <b>" + $scope.cwcForm.i1aNoOfTrainings + "</b> Training Details";
					}
					$timeout(function(){
						document.getElementById('maximumLimit10Error').innerHTML = "";
					},2000);
				}
			}
		}
	};

	$scope.deleteConfirm = function() {
		document.getElementById("i1aNoOfTrainings").blur();
		if ($scope.cwcTrainingDetailsRepetitionArray.length > 1 && $scope.cwcForm.i1aNoOfTrainings >= $scope.cwcTrainingDetailsRepetitionArray.length
				&& $scope.cwcForm.i1aNoOfTrainings!=undefined && $scope.cwcForm.i1aNoOfTrainings <= 10) {
			$('#confirmationModalForCWCdeleteAccordion').modal('show');
		}
	};
	$scope.deleteNewDetails = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
		if ($scope.cwcTrainingDetailsRepetitionArray.length > 1) {
			$scope.cwcTrainingDetailsRepetitionArray.pop();
		}
	};

	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cwcTrainingDetailsRepetitionArray[id].h1dTrainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cwcTrainingDetailsRepetitionArray[id].h1dTrainingToDate = date;
			}
		});
	};

	// @swarna

	$scope.district = [];
	$http.get("getAreas").then(function(result) {
		// Pick out objects with areaLevel '3' for district.
		for (var i = 0; i < result.data.length; i++) {
			if (result.data[i].areaLevel == 3) {
				$scope.district.push(result.data[i]);
			}
		}
	}, function(error) {
		console.log(error);
	});
	$scope.testLastAccessedTime=function(){
		$http.post('testSeverCall').then(function(result) {
		}, function(error) {
			console.log(error);
		});
	};
	$scope.timerForSave=function ($scope,$timeout) {
	    $scope.counterSeconds=1500;
	    $scope.onTimeout = function(){
	    	if( $scope.counterSeconds==0 ){
	    		
	    	}
	    	else{
		        $scope.counterSeconds--;
	    	}
	    	if($scope.counterSeconds==1200){
	    		$scope.testLastAccessedTime();
	    	}
	    	if($scope.counterSeconds==900){
	    		$scope.testLastAccessedTime();
	    	}
	    	if($scope.counterSeconds==600){
	    		$scope.testLastAccessedTime();
	    	}
	    	if($scope.counterSeconds==400){
	    		$scope.testLastAccessedTime();
	    	}
	    	if($scope.counterSeconds==300 && !$('#successModalForCWCSave').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#successModalForCWCSave').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSaveCWC($scope.cwcForm, 'save');
	        return false;
	        }
	        mytimeout = $timeout($scope.onTimeout,1000);
	        $scope.$apply();
	    };
	    var mytimeout = $timeout($scope.onTimeout,1000);

	    $scope.stop = function(){
	        $timeout.cancel(mytimeout);
	        $scope.$apply();
	    };
	};
	var todaysDate;
	var lastDay;
    var firstDay;
	$http.post("getLastSavedData", currentUserId).then(function(result) {
		if (result.data != "") {
			$scope.cwcForm = result.data;
			if($scope.cwcForm.districtId != null){
				angular.forEach($scope.district, function(value, key) {
					if (value.id == $scope.cwcForm.districtId) {
						$scope.selectedDistrict = value;
					}
				});
			}
		}
		todaysDate = new Date($scope.cwcForm.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
	    $(".accordionFromDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if(this.id.startsWith("trainingFromDatepicker")){
					if($scope.cwcTrainingDetailsRepetitionArray[0].trainingTo != null && $scope.cwcTrainingDetailsRepetitionArray[0].trainingTo != undefined){
						var fromDay = new Date(dateConvert(date));
						var toDay = new Date(dateConvert($scope.cwcTrainingDetailsRepetitionArray[0].trainingTo));
						if(toDay < fromDay){
							var index = this.id.split('trainingFromDatepicker')[1];
							$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
							$scope.label2 = "";
							$scope.alertMessage = "";
			            	$scope.$apply();
			    			$('#ErrAlertModal').modal('show');
			    			$("#trainingToDatepicker"+index).val(null);
			    			$scope.cwcTrainingDetailsRepetitionArray[index].trainingTo = null;
			            }
					}
					$scope.cwcTrainingDetailsRepetitionArray[0].trainingFrom = date;
	            }else if(this.id.startsWith("trainingToDatepicker")){
	            	checkDate(date, 0);
	            }
	        },
		});
		if(!$scope.cwcForm.submitted)
			$scope.timerForSave($scope,$timeout);
		if ($scope.cwcForm.submitted) {
			$scope.label1 = "";
			$scope.label2 = "";
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}

		$timeout(function() {
			if ($scope.cwcForm.cwcDetailsTrainings != null && $scope.cwcForm.cwcDetailsTrainings != undefined && $scope.cwcForm.cwcDetailsTrainings.length != 0)
				$scope.cwcTrainingDetailsRepetitionArray = $scope.cwcForm.cwcDetailsTrainings;
			
			if ($scope.cwcForm.cwcDetailsTrainings != undefined) {
				for (var i = 0; i < $scope.cwcForm.cwcDetailsTrainings.length; i++) {
					$("#trainingFromDatepicker" + i).datepicker({
						dateFormat : "dd-mm-yy",
						maxDate : lastDay,
						minDate : firstDay,
					});
					$("#trainingToDatepicker" + i).datepicker({
						dateFormat : "dd-mm-yy",
						maxDate : lastDay,
						minDate : firstDay,
					});

					for (var j = 0; j < $scope.trainingOrganisedBy.length; j++) {
						if ($scope.trainingOrganisedBy[j].typeDetailsId == $scope.cwcForm.cwcDetailsTrainings[i].trainingOrganisedBy) {
							$scope.cwcTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			$(".loader").fadeOut();
		}, 500);
		$timeout(function() {
			$scope.cwcForm.i1aNoOfTrainings = $scope.cwcTrainingDetailsRepetitionArray.length;
			$(".loader").fadeOut();
		}, 500);

	}, function(error) {
		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});

	// division hide and show for H section on click of radio button

	$scope.showOther = function(value) {
		$scope.isVisible = value == "Y";
		if (value == 'Y')
			$scope.cwcForm.i1Training = true;
		else if (value == 'N')
			$scope.cwcForm.i1Training = false;
	};

	// type number will not accept exponential(e) @Swarna

	$(".removeExponentialValueE").keypress(function(event) {
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
			return false;
		}
	});
	$scope.validateNoOfTraining = function(val) {
		if (val == 0 || val == null) {
			$scope.alertMessage = "Number of trainings held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.cwcForm.i1aNoOfTrainings = $scope.cwcTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val > 10) {
			$scope.alertMessage = "Number of trainings held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.cwcForm.i1aNoOfTrainings = $scope.cwcTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val < $scope.cwcTrainingDetailsRepetitionArray.length) {
			$scope.alertMessage = "Number of trainings held value should not be less than the number of trainings you added";
			$('#alertModal').modal('show');
			$scope.cwcForm.i1aNoOfTrainings = $scope.cwcTrainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	$scope.clearMsg = function() {
		$scope.alertMessage = undefined;
		$scope.label1 = undefined;
		$scope.label2 = undefined;
	};

	$scope.clearTopicOfTrainingOthers = function(model) {
		model.topicOfTrainingOthers = null;
	};
	// for reset to zero
	$scope.resetToZeroaccd1 = function(value) {
		if (value == 'false') {
			$scope.cwcTrainingDetailsRepetitionArray = [ {
				trainingId : null,
				durationOfTraining : null,
				trainingFrom : null,
				trainingTo : null,
				trainingOrganisedBy : null,
				trainingOrganisedByOthers : null,
				totJjAct : null,
				totPosco : null,
				totChildRelatedLawsICPS : null,
				totCombinedTraining : null,
				totCpmisOrTrackChildOrClts : null,
				totOthers : null,
				topicOfTrainingOthers : null,
				tabCwcChairperson : null,
				tabMembers : null,
				tabAssistantCumDataEntryOperator : null,
				tabPanelLawyer : null,
				tabOthers : null,
				trainingAttendedByOthers : null,
				cwcId : null
			} ];
		}
		$scope.cwcForm.i1aNoOfTrainings = $scope.cwcTrainingDetailsRepetitionArray.length;
	};

	// the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers2 = function(cwcTrainingDetails) {
		if (cwcTrainingDetails.trainingOrganisedBy.typeDetailsId != 4)
			cwcTrainingDetails.trainingOrganisedByOthers = null;
	};

});