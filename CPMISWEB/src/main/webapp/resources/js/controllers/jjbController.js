cpmisApp.controller('JJBController', function($scope, $http, $timeout, $window, commonService) {
	$(".loader").show();
	$scope.Number = Number;
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
	var currentUserId = Number(document.getElementById("uId").value);

	$http.get("getDropdownItems").then(function(result){
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
	},function(error){
		console.log(error);
	});

	$scope.logout = function(){
		$http.post('logout').then(function(result) {
			if (result.status == 200) {
				window.location = "login";
			}
		},function(error){
			console.log(error);
			if(error.status == -1) {
				alert("Server error.");
			}
		});
	};
	$scope.h4SectionValue1=function(){
		document.getElementById('h4TotalCases').value = Number(document.getElementById('h1TotalCases').value - 0) + Number(document.getElementById('h2TotalCases').value - 0) + Number(document.getElementById('h3TotalCases').value - 0);
		document.getElementById('h4Boys7to11').value = Number(document.getElementById('h1Boys7to11').value - 0) + Number(document.getElementById('h2Boys7to11').value - 0) + Number(document.getElementById('h3Boys7to11').value - 0);
		document.getElementById('h4Boys12to15').value = Number(document.getElementById('h1Boys12to15').value - 0) + Number(document.getElementById('h2Boys12to15').value - 0) + Number(document.getElementById('h3Boys12to15').value - 0);
		document.getElementById('h4Boys16to18').value = Number(document.getElementById('h1Boys16to18').value - 0) + Number(document.getElementById('h2Boys16to18').value - 0) + Number(document.getElementById('h3Boys16to18').value - 0);
		document.getElementById('h4BoysGreaterThan18').value = Number(document.getElementById('h1BoysGreaterThan18').value - 0) + Number(document.getElementById('h2BoysGreaterThan18').value - 0) + Number(document.getElementById('h3BoysGreaterThan18').value - 0);
		document.getElementById('h4BoysTotal').value = Number(document.getElementById('h4Boys7to11').value - 0) + Number(document.getElementById('h4Boys12to15').value - 0) + Number(document.getElementById('h4Boys16to18').value - 0) + Number(document.getElementById('h4BoysGreaterThan18').value - 0);
		document.getElementById('h4Girls7to11').value = Number(document.getElementById('h1Girls7to11').value - 0) + Number(document.getElementById('h2Girls7to11').value - 0) + Number(document.getElementById('h3Girls7to11').value - 0);
		document.getElementById('h4Girls12to15').value = Number(document.getElementById('h1Girls12to15').value - 0) + Number(document.getElementById('h2Girls12to15').value - 0) + Number(document.getElementById('h3Girls12to15').value - 0);
		document.getElementById('h4Girls16to18').value = Number(document.getElementById('h1Girls16to18').value - 0) + Number(document.getElementById('h2Girls16to18').value - 0) + Number(document.getElementById('h3Girls16to18').value - 0);
		document.getElementById('h4GirlsGreaterThan18').value = Number(document.getElementById('h1GirlsGreaterThan18').value - 0) + Number(document.getElementById('h2GirlsGreaterThan18').value - 0) + Number(document.getElementById('h3GirlsGreaterThan18').value - 0);
		document.getElementById('h4GirlsTotal').value = Number(document.getElementById('h4Girls7to11').value - 0) + Number(document.getElementById('h4Girls12to15').value - 0) + Number(document.getElementById('h4Girls16to18').value - 0) + Number(document.getElementById('h4GirlsGreaterThan18').value - 0);
		document.getElementById('h4GrandTotal').value = Number(document.getElementById('h4BoysTotal').value - 0) + Number(document.getElementById('h4GirlsTotal').value - 0);
	};
	 $("input[type='number']").keyup(function(){
		 checkD1Cases();checkD1Boys();checkD1Girls();checkD2Cases();checkD2Boys();checkD2Girls();checkEwithCCases();checkEwithCBoys();checkEwithCGirls();
		 checkF3withCCases();checkF3withCBoys();checkF3withCGirls();checkICases();checkIBoys();checkIGirls();checkMinorityBoys();checkMinorityGirls();
		 checkH4Cases();checkH4Boys();checkH4Girls();checkH4Cases();checkH4Boys();checkH4Girls();checkH4Cases();checkH4Boys();checkH4Girls();checkH4Cases();
		 checkH4Boys();checkH4Girls();checkJ3Cases();checkJ3Boys();checkJ3Girls();checkK5Cases();checkK5Boys();checkK5Girls();checkK6Cases();checkK6Boys();
		 checkK6Girls();checkK7Cases();checkK7Boys();checkK7Girls();checkK8Cases();checkK8Boys();checkK8Girls();checkK9Cases();checkK9Boys();checkK9Girls();
		 checkK12Cases();checkK12Boys();checkK12Girls();checkK13aCases();checkK13bCases();checkK13cCases();checkK13dCases();checkK13aBoys();checkK13aGirls();
		 checkK13bBoys();checkK13bGirls();checkK13cBoys();checkK13cGirls();checkK13dBoys();checkK13dGirls();checkK14aCases();checkK14bCases();checkK14cCases();
		 checkK14dCases();checkK14aBoys();checkK14aGirls();checkK14bBoys();checkK14bGirls();checkK14cBoys();checkK14cGirls();checkK14dBoys();checkK14dGirls();
		 checkK15aCases();checkK15bCases();checkK15cCases();checkK15dCases();checkK15aBoys();checkK15aGirls();checkK15bBoys();checkK15bGirls();checkK15cBoys();
		 checkK15cGirls();checkK15dBoys();checkK15dGirls();removeNegetiveColor();
	});

	// ends
	$scope.resetAccG = function(value) {
		if ($scope.jjbTrainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.jjbTrainingDetailsRepetitionArray[value].tabOthers == null){
			$scope.jjbTrainingDetailsRepetitionArray[value].tabOthersSpecify = null;
		}
	};
	$scope.validateMembers = function(id){
		var bgc = document.getElementById(id);
		var secondInput = parseInt(document.getElementById("noOfMembers").value);
		var firstInput = parseInt(3);
		$scope.label1="Sum of male and female members";
		$scope.label2="";
		$scope.alertMessage = "should not be more than 3";
		if(!commonFunctionBody(firstInput, secondInput, bgc)){
			$scope.jjbForm[id] = null;
		}
	};

	var commonFunctionBody = function(firstInput, secondInput, bgc){
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
	var commonFunctionBodyEqual = function(firstInput, secondInput, bgc) {
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
	$scope.checkD1Cases = function() {
		var bgc = document.getElementById('d1TotalCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("d1TotalCases").value - 0);
		$scope.label1="D.1. No. of CICL granted bail from the Cases filed/produced in the reporting month: total cases";
		$scope.label2="B. Total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
		

	};
	$scope.checkD1Boys = function() {
		var bgc = document.getElementById('d1BoysTotal');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("d1BoysTotal").value - 0);
		$scope.label1="D. Total no. of CICL granted bail in the reporting month: total boys";
		$scope.label2="total number of CICl boys involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkD1Girls = function() {
		var bgc = document.getElementById('d1GirlsTotal');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("d1GirlsTotal").value - 0);
		$scope.label1="D. Total no. of CICL granted bail in the reporting month: total girls";
		$scope.label2="total number of CICl girls involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkD2Cases = function() {
		var bgc = document.getElementById('d2TotalCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("d2TotalCases").value - 0);
		$scope.label1="D.2. No. of CICL granted bail from cases filed in the (old cases) previous months: total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkD2Boys = function() {
		var bgc = document.getElementById('d2BoysTotal');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("d2BoysTotal").value - 0);
		$scope.label1="D. Total no. of CICL granted bail in the reporting month: total boys";
		$scope.label2="total number of CICl boys involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkD2Girls = function() {
		var bgc = document.getElementById('d2GirlsTotal');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("d2GirlsTotal").value - 0);
		$scope.label1="D. Total no. of CICL granted bail in the reporting month: total girls";
		$scope.label2="total number of CICl girls involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkEwithCCases = function() {
		var bgc = document.getElementById('eTotalCases');
		var firstInput = Number(document.getElementById("cTotalCases").value - 0);
		var secondInput = Number(document.getElementById("eTotalCases").value - 0);
		$scope.label1="E. Total no. of cases disposed and the no. of CICL involved";
		$scope.label2="C. total no. of cases in the month and CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkEwithCBoys = function() {
		var bgc = document.getElementById('eBoysTotal');
		var firstInput = Number(document.getElementById("cBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("eBoysTotal").value - 0);
		$scope.label1="Total number of CICL boys released after disposal of case";
		$scope.label2="total number of CICl boys involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkEwithCGirls = function() {
		var bgc = document.getElementById('eGirlsTotal');
		var firstInput = Number(document.getElementById("cGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("eGirlsTotal").value - 0);
		$scope.label1="Total Number of CICL girls released after disposal of case";
		$scope.label2="total number of CICl girls involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkF3withCCases = function() {
		var bgc = document.getElementById('f3TotalCases');
		var firstInput = Number(document.getElementById("cTotalCases").value - 0);
		var secondInput = Number(document.getElementById("f3TotalCases").value - 0);
		$scope.label1="F.3. CICL reporting absent for two consecutive hearing: total cases";
		$scope.label2="C. total no. of cases in the month and CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkF3withCBoys = function() {
		var bgc = document.getElementById('f3BoysTotal');
		var firstInput = Number(document.getElementById("cBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("f3BoysTotal").value - 0);
		$scope.label1="F.3. CICL reporting absent for two consecutive hearing: total boys";
		$scope.label2="total number of CICl boys involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkF3withCGirls = function() {
		var bgc = document.getElementById('f3GirlsTotal');
		var firstInput = Number(document.getElementById("cGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("f3GirlsTotal").value - 0);
		$scope.label1="F.3. CICL reporting absent for two consecutive hearing: total girls";
		$scope.label2="total number of CICl girls involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkICases = function() {
		var bgc = document.getElementById('iTotalCasesId');
		var firstInput = Number(document.getElementById("cTotalCases").value - 0);
		var secondInput = Number(document.getElementById("iTotalCasesId").value - 0);
		$scope.label1="I. Category wise breakup of children last day of the reporting month: total cases";
		$scope.label2="C. total no. of cases in the month and CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkIBoys = function() {
		var bgc = document.getElementById('iBoysTotal');
		var firstInput = Number(document.getElementById("cBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("iBoysTotal").value - 0);
		$scope.label1="I. Category wise breakup of children last day of the reporting month: total boys";
		$scope.label2="total number of CICl boys involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkIGirls = function() {
		var bgc = document.getElementById('iGirlsTotal');
		var firstInput = Number(document.getElementById("cGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("iGirlsTotal").value - 0);
		$scope.label1="I. Category wise breakup of children last day of the reporting month: total girls";
		$scope.label2="total number of CICl girls involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkMinorityBoys = function() {
		var bgc = document.getElementById('iMinorityBoysId');
		var firstInput = Number(document.getElementById("iBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("iMinorityBoysId").value - 0);
		$scope.label1="Total number of minority boys";
		$scope.label2="total number of boys in the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkMinorityGirls = function() {
		var bgc = document.getElementById('iMinorityGirlsId');
		var firstInput = Number(document.getElementById("iGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("iMinorityGirlsId").value - 0);
		$scope.label1="Total Number of Minority girls";
		$scope.label2="total number of girls in the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK5Cases = function() {
		var bgc = document.getElementById('k5aCases');
		var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
		var secondInput = Number(document.getElementById("k5aCases").value - 0);
		$scope.label1="K.5. No. of CICL from the JJB currently residing in observation home: total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK5Boys = function() {
		var bgc = document.getElementById('k5aBoys');
		var firstInput = Number(document.getElementById("f1BoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k5aBoys").value - 0);
		$scope.label1="K.5. No. of CICL from the JJB currently residing in observation home: total boys";
		$scope.label2="total boys on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK5Girls = function() {
		var bgc = document.getElementById('k5aGirls');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k5aGirls").value - 0);
		$scope.label1="K.5. No. of CICL from the JJB currently residing in observation home: total girls";
		$scope.label2="total girls on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK6Cases = function() {
		var bgc = document.getElementById('k6Cases');
		var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
		var secondInput = Number(document.getElementById("k6Cases").value - 0);
		$scope.label1="K.6. No. of CICL currently residing in place of safety: total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK6Boys = function() {
		var bgc = document.getElementById('k6Boys');
		var firstInput = Number(document.getElementById("f1BoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k6Boys").value - 0);
		$scope.label1="K.6. No. of CICL currently residing in place of safety: total boys";
		$scope.label2="total boys on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK6Girls = function() {
		var bgc = document.getElementById('k6Girls');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k6Girls").value - 0);
		$scope.label1="K.6. No. of CICL currently residing in place of safety: total girls";
		$scope.label2="total girls on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK7Cases = function() {
		var bgc = document.getElementById('k7Cases');
		var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
		var secondInput = Number(document.getElementById("k7Cases").value - 0);
		$scope.label1="K.7. No. of CICL charged with more than one case: total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK7Boys = function() {
		var bgc = document.getElementById('k7Boys');
		var firstInput = Number(document.getElementById("f1BoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k7Boys").value - 0);
		$scope.label1="K.7. No. of CICL charged with more than one case: total boys";
		$scope.label2="total boys on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK7Girls = function() {
		var bgc = document.getElementById('k7Girls');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k7Girls").value - 0);
		$scope.label1="K.7. No. of CICL charged with more than one case: total girls";
		$scope.label2="total girls on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK8Cases = function() {
		var bgc = document.getElementById('k8Cases');
		var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
		var secondInput = Number(document.getElementById("k8Cases").value - 0);
		$scope.label1="K.8. No. of cases in which adult involved: total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK8Boys = function() {
		var bgc = document.getElementById('k8Boys');
		var firstInput = Number(document.getElementById("f1BoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k8Boys").value - 0);
		$scope.label1="K.8. No. of cases in which adult involved boys";
		$scope.label2="total boys on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK8Girls = function() {
		var bgc = document.getElementById('k8Girls');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k8Girls").value - 0);
		$scope.label1="K.8. No. of cases in which adult involved girls";
		$scope.label2="total girls on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK9Cases = function() {
		var bgc = document.getElementById('k9Cases');
		var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
		var secondInput = Number(document.getElementById("k9Cases").value - 0);
		$scope.label1="K.9. No. of CICL provided free legal aid: total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK9Boys = function() {
		var bgc = document.getElementById('k9Boys');
		var firstInput = Number(document.getElementById("f1BoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k9Boys").value - 0);
		$scope.label1="K.9. No. of CICL provided free legal aid boys";
		$scope.label2="total boys on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK9Girls = function() {
		var bgc = document.getElementById('k9Girls');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k9Girls").value - 0);
		$scope.label1="K.9. No. of CICL provided free legal aid girls";
		$scope.label2="total girls on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK12Cases = function() {
		var bgc = document.getElementById('k12Cases');
		var firstInput = Number(document.getElementById("f1TotalCases").value - 0);
		var secondInput = Number(document.getElementById("k12Cases").value - 0);
		$scope.label1="K.12. Total No. of CICL whose juvenility got determined: total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK12Boys = function() {
		var bgc = document.getElementById('k12Boys');
		var firstInput = Number(document.getElementById("f1BoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k9Boys").value - 0);
		$scope.label1="K.12. Total No. of CICL whose juvenility got determined boys";
		$scope.label2="total boys on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK12Girls = function() {
		var bgc = document.getElementById('k12Girls');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k12Girls").value - 0);
		$scope.label1="K.12. Total No. of CICL whose juvenility got determined girls ";
		$scope.label2="total girls on the last day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13aCases = function() {
		var bgc = document.getElementById('k13aCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k13aCases").value - 0);
		$scope.label1="K.13.a. No. of SIR asked for old cases: total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13aBoys = function() {
		var bgc = document.getElementById('k13aBoys');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k13aBoys").value - 0);
		$scope.label1="K.13.a. No. of SIR asked for old cases: total boys";
		$scope.label2="total boys on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13aGirls = function() {
		var bgc = document.getElementById('k13aGirls');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k13aGirls").value - 0);
		$scope.label1="K.13.a. No. of SIR asked for old cases: total girls";
		$scope.label2="total girls on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13bCases = function() {
		var bgc = document.getElementById('k13bCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k13bCases").value - 0);
		$scope.label1="K.13.b. No. of SIR submitted for old cases: total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13bBoys = function() {
		var bgc = document.getElementById('k13bBoys');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k13bBoys").value - 0);
		$scope.label1="K.13.b. No. of SIR submitted for old cases: total boys";
		$scope.label2="total boys on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13bGirls = function() {
		var bgc = document.getElementById('k13bGirls');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k13bGirls").value - 0);
		$scope.label1="K.13.b. No. of SIR submitted for old cases: total girls";
		$scope.label2="total girls on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13cCases = function() {
		var bgc = document.getElementById('k13cCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k13cCases").value - 0);
		$scope.label1="K.13.c. No. of SIR asked for new cases: total cases";
		$scope.label2="B. total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13cBoys = function() {
		var bgc = document.getElementById('k13cBoys');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k13cBoys").value - 0);
		$scope.label1="K.13.c. No. of SIR asked for new cases: total boys";
		$scope.label2="B. total new cases filed in the month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13cGirls = function() {
		var bgc = document.getElementById('k13cGirls');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k13cGirls").value - 0);
		$scope.label1="K.13.c. No. of SIR asked for new cases: total girls";
		$scope.label2="B. total new cases filed in the month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13dCases = function() {
		var bgc = document.getElementById('k13dCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k13dCases").value - 0);
		$scope.label1="K.13.d. No. of SIR submitted for new cases: total cases";
		$scope.label2="B. total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13dBoys = function() {
		var bgc = document.getElementById('k13dBoys');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k13dBoys").value - 0);
		$scope.label1="K.13.d. No. of SIR submitted for new cases: total boys";
		$scope.label2="B. total new cases filed in the month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK13dGirls = function() {
		var bgc = document.getElementById('k13dGirls');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k13dGirls").value - 0);
		$scope.label1="K.13.d. No. of SIR submitted for new cases: total girls";
		$scope.label2="B. total new cases filed in the month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14aCases = function() {
		var bgc = document.getElementById('k14aCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k14aCases").value - 0);
		$scope.label1="K.14.a. No. of orders issued for ICP for old cases: total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14aBoys = function() {
		var bgc = document.getElementById('k14aBoys');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k14aBoys").value - 0);
		$scope.label1="K.14.a. No. of orders issued for ICP for old cases: total boys";
		$scope.label2="total boys on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14aGirls = function() {
		var bgc = document.getElementById('k14aGirls');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k14aGirls").value - 0);
		$scope.label1="K.14.a. No. of orders issued for ICP for old cases: total girls";
		$scope.label2="total girls on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14bCases = function() {
		var bgc = document.getElementById('k14bCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k14bCases").value - 0);
		$scope.label1="K.14.b. No. of ICPs submitted for old cases: total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14bBoys = function() {
		var bgc = document.getElementById('k14bBoys');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k14bBoys").value - 0);
		$scope.label1="K.14.b. No. of ICPs submitted for old cases: total boys";
		$scope.label2="total boys on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14bGirls = function() {
		var bgc = document.getElementById('k14bGirls');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k14bGirls").value - 0);
		$scope.label1="K.14.b. No. of ICPs submitted for old cases: total girls";
		$scope.label2="total girls on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14cCases = function() {
		var bgc = document.getElementById('k14cCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k14cCases").value - 0);
		$scope.label1="K.14.c. No. of orders issued for ICP for new cases: total cases";
		$scope.label2="B. total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14cBoys = function() {
		var bgc = document.getElementById('k14cBoys');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k14cBoys").value - 0);
		$scope.label1="K.14.c. No. of orders issued for ICP for new cases: total boys";
		$scope.label2="B. total new cases filed in the month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14cGirls = function() {
		var bgc = document.getElementById('k14cGirls');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k14cGirls").value - 0);
		$scope.label1="K.14.c. No. of orders issued for ICP for new cases: total girls";
		$scope.label2="B. total new cases filed in the month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14dCases = function() {
		var bgc = document.getElementById('k14dCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k14dCases").value - 0);
		$scope.label1="K.14.d. No. of ICPs submitted for new cases: total cases";
		$scope.label2="B. total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14dBoys = function() {
		var bgc = document.getElementById('k14dBoys');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k14dBoys").value - 0);
		$scope.label1="K.14.d. No. of ICPs submitted for new cases: total boys";
		$scope.label2="B. total new cases filed in the month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK14dGirls = function() {
		var bgc = document.getElementById('k14dGirls');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k14dGirls").value - 0);
		$scope.label1="K.14.d. No. of ICPs submitted for new cases: total girls";
		$scope.label2="B. total new cases filed in the month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15aCases = function() {
		var bgc = document.getElementById('k15aCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k15aCases").value - 0);
		$scope.label1="K.15.a. No. of orders issued for Case History (old cases): total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15aBoys = function() {
		var bgc = document.getElementById('k15aBoys');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k15aBoys").value - 0);
		$scope.label1="K.15.a. No. of orders issued for Case History (old cases): total boys";
		$scope.label2="total boys on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15aGirls = function() {
		var bgc = document.getElementById('k15aGirls');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k15aGirls").value - 0);
		$scope.label1="K.15.a. No. of orders issued for Case History (old cases): total girls";
		$scope.label2="total girls on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15bCases = function() {
		var bgc = document.getElementById('k15bCases');
		var firstInput = Number(document.getElementById("aTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k15bCases").value - 0);
		$scope.label1="K.15.b. No. of Case History Formats submitted (old cases): total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15bBoys = function() {
		var bgc = document.getElementById('k15bBoys');
		var firstInput = Number(document.getElementById("aBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k15bBoys").value - 0);
		$scope.label1="K.15.b. No. of Case History Formats submitted (old cases): total boys";
		$scope.label2="total boys on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15bGirls = function() {
		var bgc = document.getElementById('k15bGirls');
		var firstInput = Number(document.getElementById("aGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k15bGirls").value - 0);
		$scope.label1="K.15.b. No. of Case History Formats submitted (old cases): total girls";
		$scope.label2="total girls on the first day of the month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15cCases = function() {
		var bgc = document.getElementById('k15cCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k15cCases").value - 0);
		$scope.label1="K.15.c. No. of orders issued for Case History (new cases): total cases";
		$scope.label2="B. total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15cBoys = function() {
		var bgc = document.getElementById('k15cBoys');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k15cBoys").value - 0);
		$scope.label1="K.15.c. No. of orders issued for Case History (new cases): total boys";
		$scope.label2="B. total new cases filed in the month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15cGirls = function() {
		var bgc = document.getElementById('k15cGirls');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k15cGirls").value - 0);
		$scope.label1="K.15.c. No. of orders issued for Case History (new cases): total girls";
		$scope.label2="B. total new cases filed in the month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15dCases = function() {
		var bgc = document.getElementById('k15dCases');
		var firstInput = Number(document.getElementById("bTotalCases").value - 0);
		var secondInput = Number(document.getElementById("k15dCases").value - 0);
		$scope.label1="K.15.d. No. of Case History Formats submitted (new cases): total cases";
		$scope.label2="B. total new cases filed in the month";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15dBoys = function() {
		var bgc = document.getElementById('k15dBoys');
		var firstInput = Number(document.getElementById("bBoysTotal").value - 0);
		var secondInput = Number(document.getElementById("k15dBoys").value - 0);
		$scope.label1="K.15.d. No. of Case History Formats submitted (new cases): total boys";
		$scope.label2="B. total new cases filed in the month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15dGirls = function() {
		var bgc = document.getElementById('k15dGirls');
		var firstInput = Number(document.getElementById("bGirlsTotal").value - 0);
		var secondInput = Number(document.getElementById("k15dGirls").value - 0);
		$scope.label1="K.15.d. No. of Case History Formats submitted (new cases): total girls";
		$scope.label2="B. total new cases filed in the month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkH4Cases = function() {
		var bgc = document.getElementById('h4TotalCases');
		var firstInput = parseInt(document.getElementById("f1TotalCases").value);
		var secondInput = parseInt(document.getElementById("h4TotalCases").value);
		$scope.label1="H.4. Total cases";
		$scope.label2="F.1. total no. of cases on the last day of the reporting month and the CICL involved";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqual(firstInput, secondInput, bgc);
	};
	$scope.checkH4Boys = function() {
		var bgc = document.getElementById('h4BoysTotal');
		var firstInput = parseInt(document.getElementById("f1BoysTotal").value);
		var secondInput = parseInt(document.getElementById("h4BoysTotal").value);
		$scope.label1="H.4. Total cases boys";
		$scope.label2="F.1. total no. of cases on the Last Day of the Reporting month and the CICL involved boys";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqual(firstInput, secondInput, bgc);
	};
	$scope.checkH4Girls = function() {
		var bgc = document.getElementById('h4GirlsTotal');
		var firstInput = Number(document.getElementById("f1GirlsTotal").value-0);
		var secondInput = Number(document.getElementById("h4GirlsTotal").value-0);
		$scope.label1="H.4. Total cases girls";
		$scope.label2="F.1. total no. of cases on the Last Day of the Reporting month and the CICL involved girls";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqual(firstInput, secondInput, bgc);
	};
	//j3
	$scope.checkJ3Cases = function() {
		var bgc = document.getElementById('j3TotalCases');
		var firstInput = Number(document.getElementById("aTotalCases").value-0);
		var secondInput = Number(document.getElementById("j3TotalCases").value-0);
		$scope.label1="J. Cases pending as on last day of month administered by Juvenile Justice Act 2000: total cases";
		$scope.label2="A. cases on the first day of the reporting month: total cases";
		$scope.alertMessage = "value should be less than";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkJ3Boys = function() {
		var bgc = document.getElementById('j3TotalBoysTotal');
		var firstInput = Number(document.getElementById("aBoysTotal").value-0);
		var secondInput = Number(document.getElementById("j3TotalBoysTotal").value-0);
		$scope.label1="J. Cases pending as on last day of month administered by Juvenile Justice Act 2000: total boys";
		$scope.label2="A. Cases on the First Day of the Reporting Month: total boys";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkJ3Girls = function() {
		var bgc = document.getElementById('j3TotalGirlsTotal');
		var firstInput = parseInt(document.getElementById("aGirlsTotal").value);
		var secondInput = parseInt(document.getElementById("j3TotalGirlsTotal").value);
		$scope.label1="J. Cases pending as on last day of month administered by Juvenile Justice Act 2000: total girls";
		$scope.label2="A. Cases on the First Day of the Reporting Month: total girls";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	
	//F section -ve value validation starts(Pratyush)
	var valObj = {
		oldVal:null,
		newVal:null
	};
	//here oldVal property will hold the data at the time of focus for future use.
	$('.bInput').on('focusin', function(){
	    $(this).data('val', $(this).val());
	    valObj.oldVal = Number($(this).val());
	});
	//here newVal property will hold the changed value during change in the input field.
	$('.bInput').on('change', function(){
	    var current = $(this).val();
	    valObj.newVal = current==""?null:current;
	});

	/**
	 *In the following function, if any change in 'B section' will cause negetive number in 'F section'
	  then it will reset the value of the current input field with the value of valObj.oldVal(which was stored during focus) 
	  along with a message showing in a modal. 
	 */
	$scope.validateWithF = function(thisId, fId, yearRange){
		if(!$('#ErrAlertModal').hasClass('in')){
			var fVal = Number(document.getElementById(fId).value);
			if(fVal < 0){
				$scope.label1 = commonService.jjb_f_negetive_err_msg(yearRange);
				$scope.label2 = "";
				$scope.alertMessage = "";
				
				$scope.jjbForm[thisId] = valObj.oldVal;
				$('html,body').animate({scrollTop : $('#'+thisId).offset().top - 250}, 'slow');
				$('#ErrAlertModal').modal('show');
			}
		}	
	};
	//F section -ve value validation ends
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
	angular.forEach($scope.jjbForm, function(value, index) {
		if ($scope.negetiveTestVariable == true) {
			if (Number(value - 0) < 0) {
				$scope.negetiveTestVariable = false;
				document.getElementById(index).style.setProperty("background-color", "#DC143C", "important");
				document.getElementById(index).style.setProperty("color", "#FFFAF0", "important");
				document.getElementById(index).style.setProperty("border-color", "red", "important");
				enamo=index;
				$scope.label1 = "";
				$scope.label2 = "";
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
	$scope.test = function() {
		
			$scope.saveJJB($scope.jjbForm, 'save');
	};

	$scope.checkSubmit = function() {
		if (!$scope.checkD1Cases()) {
		} else if (!$scope.checkD1Boys()) {
		} else if (!$scope.checkD1Girls()) {
		} else if (!$scope.checkD2Cases()) {
		} else if (!$scope.checkD2Boys()) {
		} else if (!$scope.checkD2Girls()) {
		} else if (!$scope.checkEwithCCases()) {
		} else if (!$scope.checkEwithCBoys()) {
		} else if (!$scope.checkEwithCGirls()) {
		} else if (!$scope.checkF3withCCases()) {	
		} else if (!$scope.checkF3withCBoys()) {
		} else if (!$scope.checkF3withCGirls()) {
		} else if (!$scope.checkH4Cases()) {	
		} else if (!$scope.checkH4Boys()) {
		} else if (!$scope.checkH4Girls()) {	
		} else if (!$scope.checkICases()) {	
		} else if (!$scope.checkIBoys()) {
		} else if (!$scope.checkIGirls()) {		
		} else if (!$scope.checkMinorityBoys()) {
		} else if (!$scope.checkMinorityGirls()) {
		} else if (!$scope.checkJ3Cases()) {	
		} else if (!$scope.checkJ3Boys()) {
		} else if (!$scope.checkJ3Girls()) {
		} else if (!$scope.checkK5Cases()) {
		} else if (!$scope.checkK5Boys()) {
		} else if (!$scope.checkK5Girls()) {
		} else if (!$scope.checkK6Cases()) {	
		} else if (!$scope.checkK6Boys()) {
		} else if (!$scope.checkK6Girls()) {
		} else if (!$scope.checkK7Cases()) {	
		} else if (!$scope.checkK7Boys()) {
		} else if (!$scope.checkK7Girls()) {
		} else if (!$scope.checkK8Cases()) {	
		} else if (!$scope.checkK8Boys()) {
		} else if (!$scope.checkK8Girls()) {
		} else if (!$scope.checkK9Cases()) {	
		} else if (!$scope.checkK9Boys()) {
		} else if (!$scope.checkK9Girls()) {
		} else if (!$scope.checkK12Cases()) {	
		} else if (!$scope.checkK12Boys()) {
		} else if (!$scope.checkK12Girls()) {
		} else if (!$scope.checkK13aCases()) {	
		} else if (!$scope.checkK13aBoys()) {
		} else if (!$scope.checkK13aGirls()) {
		} else if (!$scope.checkK13bCases()) {	
		} else if (!$scope.checkK13bBoys()) {
		} else if (!$scope.checkK13bGirls()) {
		} else if (!$scope.checkK13cCases()) {	
		} else if (!$scope.checkK13cBoys()) {
		} else if (!$scope.checkK13cGirls()) {
		} else if (!$scope.checkK13dCases()) {	
		} else if (!$scope.checkK13dBoys()) {
		} else if (!$scope.checkK13dGirls()) {
		} else if (!$scope.checkK14aCases()) {	
		} else if (!$scope.checkK14aBoys()) {
		} else if (!$scope.checkK14aGirls()) {
		} else if (!$scope.checkK14bCases()) {	
		} else if (!$scope.checkK14bBoys()) {
		} else if (!$scope.checkK14bGirls()) {
		} else if (!$scope.checkK14cCases()) {	
		} else if (!$scope.checkK14cBoys()) {
		} else if (!$scope.checkK14cGirls()) {
		} else if (!$scope.checkK14dCases()) {	
		} else if (!$scope.checkK14dBoys()) {
		} else if (!$scope.checkK14dGirls()) {
		} else if (!$scope.checkK15aCases()) {	
		} else if (!$scope.checkK15aBoys()) {
		} else if (!$scope.checkK15aGirls()) {
		} else if (!$scope.checkK15bCases()) {	
		} else if (!$scope.checkK15bBoys()) {
		} else if (!$scope.checkK15bGirls()) {
		} else if (!$scope.checkK15cCases()) {	
		} else if (!$scope.checkK15cBoys()) {
		} else if (!$scope.checkK15cGirls()) {
		} else if (!$scope.checkK15dCases()) {	
		} else if (!$scope.checkK15dBoys()) {
		} else if (!$scope.checkK15dGirls()) {
		} else {
			$scope.saveJJB($scope.jjbForm, 'submit');
		}
	};

	$scope.resetB1 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.b1Boys7to11 = null;
			$scope.jjbForm.b1Boys12to15 = null;
			$scope.jjbForm.b1Boys16to18 = null;
			$scope.jjbForm.b1BoysGreaterThan18 = null;
			$scope.jjbForm.b1Girls7to11 = null;
			$scope.jjbForm.b1Girls12to15 = null;
			$scope.jjbForm.b1Girls16to18 = null;
			$scope.jjbForm.b1GirlsGreaterThan18 = null;
		}
	};
	$scope.resetB2 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.b2Boys7to11 = null;
			$scope.jjbForm.b2Boys12to15 = null;
			$scope.jjbForm.b2Boys16to18 = null;
			$scope.jjbForm.b2BoysGreaterThan18 = null;
			$scope.jjbForm.b2Girls7to11 = null;
			$scope.jjbForm.b2Girls12to15 = null;
			$scope.jjbForm.b2Girls16to18 = null;
			$scope.jjbForm.b2GirlsGreaterThan18 = null;
		}
	};
	$scope.resetB3 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.b3Boys7to11 = null;
			$scope.jjbForm.b3Boys12to15 = null;
			$scope.jjbForm.b3Boys16to18 = null;
			$scope.jjbForm.b3BoysGreaterThan18 = null;
			$scope.jjbForm.b3Girls7to11 = null;
			$scope.jjbForm.b3Girls12to15 = null;
			$scope.jjbForm.b3Girls16to18 = null;
			$scope.jjbForm.b3GirlsGreaterThan18 = null;
		}
	};

	$scope.resetD1 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.d1Boys7to11 = null;
			$scope.jjbForm.d1Boys12to15 = null;
			$scope.jjbForm.d1Boys16to18 = null;
			$scope.jjbForm.d1BoysGreaterThan18 = null;
			$scope.jjbForm.d1Girls7to11 = null;
			$scope.jjbForm.d1Girls12to15 = null;
			$scope.jjbForm.d1Girls16to18 = null;
			$scope.jjbForm.d1GirlsGreaterThan18 = null;
		}
	};
	$scope.resetD2 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.d2Boys7to11 = null;
			$scope.jjbForm.d2Boys12to15 = null;
			$scope.jjbForm.d2Boys16to18 = null;
			$scope.jjbForm.d2BoysGreaterThan18 = null;
			$scope.jjbForm.d2Girls7to11 = null;
			$scope.jjbForm.d2Girls12to15 = null;
			$scope.jjbForm.d2Girls16to18 = null;
			$scope.jjbForm.d2GirlsGreaterThan18 = null;
		}
	};
	//
	$scope.resetE1 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e1Boys7to11 = null;
			$scope.jjbForm.e1Boys12to15 = null;
			$scope.jjbForm.e1Boys16to18 = null;
			$scope.jjbForm.e1BoysGreaterThan18 = null;
			$scope.jjbForm.e1Girls7to11 = null;
			$scope.jjbForm.e1Girls12to15 = null;
			$scope.jjbForm.e1Girls16to18 = null;
			$scope.jjbForm.e1GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE2 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e2Boys7to11 = null;
			$scope.jjbForm.e2Boys12to15 = null;
			$scope.jjbForm.e2Boys16to18 = null;
			$scope.jjbForm.e2BoysGreaterThan18 = null;
			$scope.jjbForm.e2Girls7to11 = null;
			$scope.jjbForm.e2Girls12to15 = null;
			$scope.jjbForm.e2Girls16to18 = null;
			$scope.jjbForm.e2GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE3 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e3Boys7to11 = null;
			$scope.jjbForm.e3Boys12to15 = null;
			$scope.jjbForm.e3Boys16to18 = null;
			$scope.jjbForm.e3BoysGreaterThan18 = null;
			$scope.jjbForm.e3Girls7to11 = null;
			$scope.jjbForm.e3Girls12to15 = null;
			$scope.jjbForm.e3Girls16to18 = null;
			$scope.jjbForm.e3GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE4 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e4Boys7to11 = null;
			$scope.jjbForm.e4Boys12to15 = null;
			$scope.jjbForm.e4Boys16to18 = null;
			$scope.jjbForm.e4BoysGreaterThan18 = null;
			$scope.jjbForm.e4Girls7to11 = null;
			$scope.jjbForm.e4Girls12to15 = null;
			$scope.jjbForm.e4Girls16to18 = null;
			$scope.jjbForm.e4GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE5 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e5Boys7to11 = null;
			$scope.jjbForm.e5Boys12to15 = null;
			$scope.jjbForm.e5Boys16to18 = null;
			$scope.jjbForm.e5BoysGreaterThan18 = null;
			$scope.jjbForm.e5Girls7to11 = null;
			$scope.jjbForm.e5Girls12to15 = null;
			$scope.jjbForm.e5Girls16to18 = null;
			$scope.jjbForm.e5GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE6 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e6Boys7to11 = null;
			$scope.jjbForm.e6Boys12to15 = null;
			$scope.jjbForm.e6Boys16to18 = null;
			$scope.jjbForm.e6BoysGreaterThan18 = null;
			$scope.jjbForm.e6Girls7to11 = null;
			$scope.jjbForm.e6Girls12to15 = null;
			$scope.jjbForm.e6Girls16to18 = null;
			$scope.jjbForm.e6GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE7 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e7Boys7to11 = null;
			$scope.jjbForm.e7Boys12to15 = null;
			$scope.jjbForm.e7Boys16to18 = null;
			$scope.jjbForm.e7BoysGreaterThan18 = null;
			$scope.jjbForm.e7Girls7to11 = null;
			$scope.jjbForm.e7Girls12to15 = null;
			$scope.jjbForm.e7Girls16to18 = null;
			$scope.jjbForm.e7GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE8 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e8Boys7to11 = null;
			$scope.jjbForm.e8Boys12to15 = null;
			$scope.jjbForm.e8Boys16to18 = null;
			$scope.jjbForm.e8BoysGreaterThan18 = null;
			$scope.jjbForm.e8Girls7to11 = null;
			$scope.jjbForm.e8Girls12to15 = null;
			$scope.jjbForm.e8Girls16to18 = null;
			$scope.jjbForm.e8GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE9 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e9Boys7to11 = null;
			$scope.jjbForm.e9Boys12to15 = null;
			$scope.jjbForm.e9Boys16to18 = null;
			$scope.jjbForm.e9BoysGreaterThan18 = null;
			$scope.jjbForm.e9Girls7to11 = null;
			$scope.jjbForm.e9Girls12to15 = null;
			$scope.jjbForm.e9Girls16to18 = null;
			$scope.jjbForm.e9GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE10 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e10Boys7to11 = null;
			$scope.jjbForm.e10Boys12to15 = null;
			$scope.jjbForm.e10Boys16to18 = null;
			$scope.jjbForm.e10BoysGreaterThan18 = null;
			$scope.jjbForm.e10Girls7to11 = null;
			$scope.jjbForm.e10Girls12to15 = null;
			$scope.jjbForm.e10Girls16to18 = null;
			$scope.jjbForm.e10GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE11 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e11Boys7to11 = null;
			$scope.jjbForm.e11Boys12to15 = null;
			$scope.jjbForm.e11Boys16to18 = null;
			$scope.jjbForm.e11BoysGreaterThan18 = null;
			$scope.jjbForm.e11Girls7to11 = null;
			$scope.jjbForm.e11Girls12to15 = null;
			$scope.jjbForm.e11Girls16to18 = null;
			$scope.jjbForm.e11GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE12 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e12Boys7to11 = null;
			$scope.jjbForm.e12Boys12to15 = null;
			$scope.jjbForm.e12Boys16to18 = null;
			$scope.jjbForm.e12BoysGreaterThan18 = null;
			$scope.jjbForm.e12Girls7to11 = null;
			$scope.jjbForm.e12Girls12to15 = null;
			$scope.jjbForm.e12Girls16to18 = null;
			$scope.jjbForm.e12GirlsGreaterThan18 = null;
		}
	};
	$scope.resetE13 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.e13Boys7to11 = null;
			$scope.jjbForm.e13Boys12to15 = null;
			$scope.jjbForm.e13Boys16to18 = null;
			$scope.jjbForm.e13BoysGreaterThan18 = null;
			$scope.jjbForm.e13Girls7to11 = null;
			$scope.jjbForm.e13Girls12to15 = null;
			$scope.jjbForm.e13Girls16to18 = null;
			$scope.jjbForm.e13GirlsGreaterThan18 = null;
		}
	};

	$scope.resetF3 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.f3Boys7to11 = null;
			$scope.jjbForm.f3Boys12to15 = null;
			$scope.jjbForm.f3Boys16to18 = null;
			$scope.jjbForm.f3BoysGreaterThan18 = null;
			$scope.jjbForm.f3Girls7to11 = null;
			$scope.jjbForm.f3Girls12to15 = null;
			$scope.jjbForm.f3Girls16to18 = null;
			$scope.jjbForm.f3GirlsGreaterThan18 = null;
		}
	};
	// G
	$scope.resetG1Petty = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g1PettyBoys7to11 = null;
			$scope.jjbForm.g1PettyBoys12to15 = null;
			$scope.jjbForm.g1PettyBoys16to18 = null;
			$scope.jjbForm.g1PettyBoysGreaterThan18 = null;
			$scope.jjbForm.g1PettyGirls7to11 = null;
			$scope.jjbForm.g1PettyGirls12to15 = null;
			$scope.jjbForm.g1PettyGirls16to18 = null;
			$scope.jjbForm.g1PettyGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG1Serious = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g1SeriousBoys7to11 = null;
			$scope.jjbForm.g1SeriousBoys12to15 = null;
			$scope.jjbForm.g1SeriousBoys16to18 = null;
			$scope.jjbForm.g1SeriousBoysGreaterThan18 = null;
			$scope.jjbForm.g1SeriousGirls7to11 = null;
			$scope.jjbForm.g1SeriousGirls12to15 = null;
			$scope.jjbForm.g1SeriousGirls16to18 = null;
			$scope.jjbForm.g1SeriousGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG1Heinous = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g1HeinousBoys7to11 = null;
			$scope.jjbForm.g1HeinousBoys12to15 = null;
			$scope.jjbForm.g1HeinousBoys16to18 = null;
			$scope.jjbForm.g1HeinousBoysGreaterThan18 = null;
			$scope.jjbForm.g1HeinousGirls7to11 = null;
			$scope.jjbForm.g1HeinousGirls12to15 = null;
			$scope.jjbForm.g1HeinousGirls16to18 = null;
			$scope.jjbForm.g1HeinousGirlsGreaterThan18 = null;
		}
	};
	// g2

	$scope.resetG2Petty = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g2PettyBoys7to11 = null;
			$scope.jjbForm.g2PettyBoys12to15 = null;
			$scope.jjbForm.g2PettyBoys16to18 = null;
			$scope.jjbForm.g2PettyBoysGreaterThan18 = null;
			$scope.jjbForm.g2PettyGirls7to11 = null;
			$scope.jjbForm.g2PettyGirls12to15 = null;
			$scope.jjbForm.g2PettyGirls16to18 = null;
			$scope.jjbForm.g2PettyGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG2Serious = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g2SeriousBoys7to11 = null;
			$scope.jjbForm.g2SeriousBoys12to15 = null;
			$scope.jjbForm.g2SeriousBoys16to18 = null;
			$scope.jjbForm.g2SeriousBoysGreaterThan18 = null;
			$scope.jjbForm.g2SeriousGirls7to11 = null;
			$scope.jjbForm.g2SeriousGirls12to15 = null;
			$scope.jjbForm.g2SeriousGirls16to18 = null;
			$scope.jjbForm.g2SeriousGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG2Heinous = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g2HeinousBoys7to11 = null;
			$scope.jjbForm.g2HeinousBoys12to15 = null;
			$scope.jjbForm.g2HeinousBoys16to18 = null;
			$scope.jjbForm.g2HeinousBoysGreaterThan18 = null;
			$scope.jjbForm.g2HeinousGirls7to11 = null;
			$scope.jjbForm.g2HeinousGirls12to15 = null;
			$scope.jjbForm.g2HeinousGirls16to18 = null;
			$scope.jjbForm.g2HeinousGirlsGreaterThan18 = null;
		}
	};
	// g3
	$scope.resetG3Petty = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g3PettyBoys7to11 = null;
			$scope.jjbForm.g3PettyBoys12to15 = null;
			$scope.jjbForm.g3PettyBoys16to18 = null;
			$scope.jjbForm.g3PettyBoysGreaterThan18 = null;
			$scope.jjbForm.g3PettyGirls7to11 = null;
			$scope.jjbForm.g3PettyGirls12to15 = null;
			$scope.jjbForm.g3PettyGirls16to18 = null;
			$scope.jjbForm.g3PettyGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG3Serious = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g3SeriousBoys7to11 = null;
			$scope.jjbForm.g3SeriousBoys12to15 = null;
			$scope.jjbForm.g3SeriousBoys16to18 = null;
			$scope.jjbForm.g3SeriousBoysGreaterThan18 = null;
			$scope.jjbForm.g3SeriousGirls7to11 = null;
			$scope.jjbForm.g3SeriousGirls12to15 = null;
			$scope.jjbForm.g3SeriousGirls16to18 = null;
			$scope.jjbForm.g3SeriousGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG3Heinous = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g3HeinousBoys7to11 = null;
			$scope.jjbForm.g3HeinousBoys12to15 = null;
			$scope.jjbForm.g3HeinousBoys16to18 = null;
			$scope.jjbForm.g3HeinousBoysGreaterThan18 = null;
			$scope.jjbForm.g3HeinousGirls7to11 = null;
			$scope.jjbForm.g3HeinousGirls12to15 = null;
			$scope.jjbForm.g3HeinousGirls16to18 = null;
			$scope.jjbForm.g3HeinousGirlsGreaterThan18 = null;
		}
	};
	// g4
	$scope.resetG4Petty = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g4PettyBoys7to11 = null;
			$scope.jjbForm.g4PettyBoys12to15 = null;
			$scope.jjbForm.g4PettyBoys16to18 = null;
			$scope.jjbForm.g4PettyBoysGreaterThan18 = null;
			$scope.jjbForm.g4PettyGirls7to11 = null;
			$scope.jjbForm.g4PettyGirls12to15 = null;
			$scope.jjbForm.g4PettyGirls16to18 = null;
			$scope.jjbForm.g4PettyGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG4Serious = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g4SeriousBoys7to11 = null;
			$scope.jjbForm.g4SeriousBoys12to15 = null;
			$scope.jjbForm.g4SeriousBoys16to18 = null;
			$scope.jjbForm.g4SeriousBoysGreaterThan18 = null;
			$scope.jjbForm.g4SeriousGirls7to11 = null;
			$scope.jjbForm.g4SeriousGirls12to15 = null;
			$scope.jjbForm.g4SeriousGirls16to18 = null;
			$scope.jjbForm.g4SeriousGirlsGreaterThan18 = null;
		}
	};
	$scope.resetG4Heinous = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.g4HeinousBoys7to11 = null;
			$scope.jjbForm.g4HeinousBoys12to15 = null;
			$scope.jjbForm.g4HeinousBoys16to18 = null;
			$scope.jjbForm.g4HeinousBoysGreaterThan18 = null;
			$scope.jjbForm.g4HeinousGirls7to11 = null;
			$scope.jjbForm.g4HeinousGirls12to15 = null;
			$scope.jjbForm.g4HeinousGirls16to18 = null;
			$scope.jjbForm.g4HeinousGirlsGreaterThan18 = null;
		}
	};
	// I

	$scope.resetIFields = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.iBoysSC = null;
			$scope.jjbForm.iBoysST = null;
			$scope.jjbForm.iBoysOBC = null;
			$scope.jjbForm.iBoysEBC = null;
			$scope.jjbForm.iBoysOthers = null;
			$scope.jjbForm.iBoysNotKnown = null;

			$scope.jjbForm.iGirlsSC = null;
			$scope.jjbForm.iGirlsST = null;
			$scope.jjbForm.iGirlsOBC = null;
			$scope.jjbForm.iGirlsEBC = null;
			$scope.jjbForm.iGirlsOthers = null;
			$scope.jjbForm.iGirlsNotKnown = null;

			$scope.jjbForm.iMinorityBoys = null;
			$scope.jjbForm.iMinorityGirls = null;
		}
	};
	// j
	$scope.resetJ1fields = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.j1NonHeinousBoys7to11 = null;
			$scope.jjbForm.j1NonHeinousBoys12to15 = null;
			$scope.jjbForm.j1NonHeinousBoys16to18 = null;
			$scope.jjbForm.j1NonHeinousBoysGreaterThan18 = null;
			$scope.jjbForm.j1NonHeinousGirls7to11 = null;
			$scope.jjbForm.j1NonHeinousGirls12to15 = null;
			$scope.jjbForm.j1NonHeinousGirls16to18 = null;
			$scope.jjbForm.j1NonHeinousGirlsGreaterThan18 = null;
		}
	};
	$scope.resetJ2Heinous = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.j2HeinousBoys7to11 = null;
			$scope.jjbForm.j2HeinousBoys12to15 = null;
			$scope.jjbForm.j2HeinousBoys16to18 = null;
			$scope.jjbForm.j2HeinousBoysGreaterThan18 = null;
			$scope.jjbForm.j2HeinousGirls7to11 = null;
			$scope.jjbForm.j2HeinousGirls12to15 = null;
			$scope.jjbForm.j2HeinousGirls16to18 = null;
			$scope.jjbForm.j2HeinousGirlsGreaterThan18 = null;
		}
	};
	$scope.resetk5a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k5aBoys = null;
			$scope.jjbForm.k5aGirls = null;
		}
	};
	$scope.resetk6 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k6Boys = null;
			$scope.jjbForm.k6Girls = null;
		}
	};
	$scope.resetk7 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k7Boys = null;
			$scope.jjbForm.k7Girls = null;
		}
	};
	$scope.resetk8 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k8Boys = null;
			$scope.jjbForm.k8Girls = null;
		}
	};
	$scope.resetk9 = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k9Boys = null;
			$scope.jjbForm.k9Girls = null;
		}
	};
	$scope.resetk10c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k10cBoys = null;
			$scope.jjbForm.k10cGirls = null;
		}
	};
	$scope.resetk11c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k11cBoys = null;
			$scope.jjbForm.k11cGirls = null;
		}
	};
	$scope.resetk12a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k12aBoys = null;
			$scope.jjbForm.k12aGirls = null;
		}
	};
	$scope.resetk12b = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k12bBoys = null;
			$scope.jjbForm.k12bGirls = null;
		}
	};
	$scope.resetk12c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k12cBoys = null;
			$scope.jjbForm.k12cGirls = null;
		}
	};
	$scope.resetk13a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k13aBoys = null;
			$scope.jjbForm.k13aGirls = null;
		}
	};
	$scope.resetk13b = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k13bBoys = null;
			$scope.jjbForm.k13bGirls = null;
		}
	};
	$scope.resetk13c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k13cBoys = null;
			$scope.jjbForm.k13cGirls = null;
		}
	};
	$scope.resetk13d = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k13dBoys = null;
			$scope.jjbForm.k13dGirls = null;
		}
	};
	$scope.resetk14a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k14aBoys = null;
			$scope.jjbForm.k14aGirls = null;
		}
	};
	$scope.resetk14b = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k14bBoys = null;
			$scope.jjbForm.k14bGirls = null;
		}
	};
	$scope.resetk14c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k14cBoys = null;
			$scope.jjbForm.k14cGirls = null;
		}
	};
	$scope.resetk14d = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k14dBoys = null;
			$scope.jjbForm.k14dGirls = null;
		}
	};
	$scope.resetk15a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k15aBoys = null;
			$scope.jjbForm.k15aGirls = null;
		}
	};
	$scope.resetk15b = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k15bBoys = null;
			$scope.jjbForm.k15bGirls = null;
		}
	};
	$scope.resetk15c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k15cBoys = null;
			$scope.jjbForm.k15cGirls = null;
		}
	};
	$scope.resetk15d = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k15dBoys = null;
			$scope.jjbForm.k15dGirls = null;
		}
	};
	$scope.resetk16a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k16aBoys = null;
			$scope.jjbForm.k16aGirls = null;
		}
	};
	$scope.resetk16b = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k16bBoys = null;
			$scope.jjbForm.k16bGirls = null;
		}
	};
	$scope.resetk16c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k16cBoys = null;
			$scope.jjbForm.k16cGirls = null;
		}
	};
	$scope.resetk16d = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k16dBoys = null;
			$scope.jjbForm.k16dGirls = null;
		}
	};
	$scope.resetk16e = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k16eBoys = null;
			$scope.jjbForm.k16eGirls = null;
		}
	};
	$scope.resetk16f = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k16fBoys = null;
			$scope.jjbForm.k16fGirls = null;
		}
	};
	// 17

	$scope.resetk17a = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k17aBoys = null;
			$scope.jjbForm.k17aGirls = null;
		}
	};
	$scope.resetk17b = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k17bBoys = null;
			$scope.jjbForm.k17bGirls = null;
		}
	};
	$scope.resetk17c = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k17cBoys = null;
			$scope.jjbForm.k17cGirls = null;
		}
	};
	$scope.resetk17d = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k17dBoys = null;
			$scope.jjbForm.k17dGirls = null;
		}
	};
	$scope.resetk17e = function(value) {
		if (value == 0 || value == null) {
			$scope.jjbForm.k17eBoys = null;
			$scope.jjbForm.k17eGirls = null;
		}
	};

	$scope.clearTopicOfTrainingOthers = function(model) {
		model.totOthersSpecify = null;
	};
	
	$scope.calculateWithC = function(event) {
		
	};
	$scope.calculateWithCBoys = function(id, modelId, yearRange) {
		var sum = modelValue = 0;
		if (yearRange == '7-11') {
			sum = Number(document.getElementById('eBoys7to11').value-0);
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case) 7-11 years boys";
			$scope.label2="C. total no. of cases in the month and CICL involved 7-11 years boys";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '12-15') {
			sum = Number(document.getElementById('eBoys12to15').value-0);
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case) 12-15 years boys";
			$scope.label2="C. total no. of cases in the month and CICL involved 12-15 years boys";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '16-18') {
			sum = Number(document.getElementById('eBoys16to18').value-0);
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case) 16-18 years boys";
			$scope.label2="C. total no. of cases in the month and CICL involved 16-18 years boys";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '>18') {
			sum = Number(document.getElementById('eBoysGreaterThan18').value-0);
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case)  grater than 18 years boys";
			$scope.label2="C. total no. of cases in the month and CICL involved grater than 18 years boys";
			$scope.alertMessage = "value can not exceed";
		}

		if (Number(sum) > Number(modelValue)) {
			$scope.jjbForm[modelId] = null;
			$('#ErrAlertModal').modal('show');
		}
	};

	$scope.calculateWithCGirls = function(id, modelId, yearRange) {
		var sum = modelValue = 0;
		if (yearRange == '7-11') {
			sum = Number(document.getElementById('eGirls7to11').value-0);
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case) 7-11 years girls";
			$scope.label2="C. total no. of cases in the month and CICL involved 7-11 years girls";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '12-15') {
			sum = document.getElementById('eGirls12to15').value;
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case) 12-15 years girls";
			$scope.label2="C. total no. of cases in the month and CICL involved 12-15 years girls";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '16-18') {
			sum = document.getElementById('eGirls16to18').value;
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case) 16-18 years girls";
			$scope.label2="C. total no. of cases in the month and CICL involved 16-18 years girls";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '>18') {
			sum = document.getElementById('eGirlsGreaterThan18').value;
			modelValue =Number(document.getElementById(id).value-0);
			$scope.label1="E. Type of Orders (No. of CICL released after disposal of case)  grater than 18 years girls";
			$scope.label2="C. total no. of cases in the month and CICL involved grater than 18 years girls";
			$scope.alertMessage = "value can not exceed";
		}

		if (sum > modelValue) {
			$scope.jjbForm[modelId] = null;
			$('#ErrAlertModal').modal('show');
		}
	};
	//
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

	var prepareObject = function(jjbForm){
		jjbForm.a1BoysTotal = parseInt(document.getElementById('a1BoysTotal').value);
		jjbForm.a1GirlsTotal = parseInt(document.getElementById('a1GirlsTotal').value);
		jjbForm.a1GrandTotal = parseInt(document.getElementById('a1GrandTotal').value);
		jjbForm.a2BoysTotal = parseInt(document.getElementById('a2BoysTotal').value);
		jjbForm.a2GirlsTotal = parseInt(document.getElementById('a2GirlsTotal').value);
		jjbForm.a2GrandTotal = parseInt(document.getElementById('a2GrandTotal').value);
		jjbForm.aTotalCases = parseInt(document.getElementById('aTotalCases').value);
		jjbForm.aBoys7to11 = parseInt(document.getElementById('aBoys7to11').value);
		jjbForm.aBoys12to15 = parseInt(document.getElementById('aBoys12to15').value);
		jjbForm.aBoys16to18 = parseInt(document.getElementById('aBoys16to18').value);
		jjbForm.aBoysGreaterThan18 = parseInt(document.getElementById('aBoysGreaterThan18').value);
		jjbForm.aBoysTotal = parseInt(document.getElementById('aBoysTotal').value);
		jjbForm.aGirls7to11 = parseInt(document.getElementById('aGirls7to11').value);
		jjbForm.aGirls12to15 = parseInt(document.getElementById('aGirls12to15').value);
		jjbForm.aGirls16to18 = parseInt(document.getElementById('aGirls16to18').value);
		jjbForm.aGirlsGreaterThan18 = parseInt(document.getElementById('aGirlsGreaterThan18').value);
		jjbForm.aGirlsTotal = parseInt(document.getElementById('aGirlsTotal').value);
		jjbForm.aGrandTotal = parseInt(document.getElementById('aGrandTotal').value);
		jjbForm.b1BoysTotal = parseInt(document.getElementById('b1BoysTotal').value);
		jjbForm.b1GirlsTotal = parseInt(document.getElementById('b1GirlsTotal').value);
		jjbForm.b1GrandTotal = parseInt(document.getElementById('b1GrandTotal').value);
		jjbForm.b2BoysTotal = parseInt(document.getElementById('b2BoysTotal').value);
		jjbForm.b2GirlsTotal = parseInt(document.getElementById('b2GirlsTotal').value);
		jjbForm.b2GrandTotal = parseInt(document.getElementById('b2GrandTotal').value);
		jjbForm.b3BoysTotal = parseInt(document.getElementById('b3BoysTotal').value);
		jjbForm.b3GirlsTotal = parseInt(document.getElementById('b3GirlsTotal').value);
		jjbForm.b3GrandTotal = parseInt(document.getElementById('b3GrandTotal').value);
		jjbForm.bTotalCases = parseInt(document.getElementById('bTotalCases').value);
		jjbForm.bBoys7to11 = parseInt(document.getElementById('bBoys7to11').value);
		jjbForm.bBoys12to15 = parseInt(document.getElementById('bBoys12to15').value);
		jjbForm.bBoys16to18 = parseInt(document.getElementById('bBoys16to18').value);
		jjbForm.bBoysGreaterThan18 = parseInt(document.getElementById('bBoysGreaterThan18').value);
		jjbForm.bBoysTotal = parseInt(document.getElementById('bBoysTotal').value);
		jjbForm.bGirls7to11 = parseInt(document.getElementById('bGirls7to11').value);
		jjbForm.bGirls12to15 = parseInt(document.getElementById('bGirls12to15').value);
		jjbForm.bGirls16to18 = parseInt(document.getElementById('bGirls16to18').value);
		jjbForm.bGirlsGreaterThan18 = parseInt(document.getElementById('bGirlsGreaterThan18').value);
		jjbForm.bGirlsTotal = parseInt(document.getElementById('bGirlsTotal').value);
		jjbForm.bGrandTotal = parseInt(document.getElementById('bGrandTotal').value);
		jjbForm.cTotalCases = parseInt(document.getElementById('cTotalCases').value);
		jjbForm.cBoys7to11 = parseInt(document.getElementById('cBoys7to11').value);
		jjbForm.cBoys12to15 = parseInt(document.getElementById('cBoys12to15').value);
		jjbForm.cBoys16to18 = parseInt(document.getElementById('cBoys16to18').value);
		jjbForm.cBoysGreaterThan18 = parseInt(document.getElementById('cBoysGreaterThan18').value);
		jjbForm.cBoysTotal = parseInt(document.getElementById('cBoysTotal').value);
		jjbForm.cGirls7to11 = parseInt(document.getElementById('cGirls7to11').value);
		jjbForm.cGirls12to15 = parseInt(document.getElementById('cGirls12to15').value);
		jjbForm.cGirls16to18 = parseInt(document.getElementById('cGirls16to18').value);
		jjbForm.cGirlsGreaterThan18 = parseInt(document.getElementById('cGirlsGreaterThan18').value);
		jjbForm.cGirlsTotal = parseInt(document.getElementById('cGirlsTotal').value);
		jjbForm.cGrandTotal = parseInt(document.getElementById('cGrandTotal').value);
		jjbForm.d1BoysTotal = parseInt(document.getElementById('d1BoysTotal').value);
		jjbForm.d1GirlsTotal = parseInt(document.getElementById('d1GirlsTotal').value);
		jjbForm.d1GrandTotal = parseInt(document.getElementById('d1GrandTotal').value);
		jjbForm.d2BoysTotal = parseInt(document.getElementById('d2BoysTotal').value);
		jjbForm.d2GirlsTotal = parseInt(document.getElementById('d2GirlsTotal').value);
		jjbForm.d2GrandTotal = parseInt(document.getElementById('d2GrandTotal').value);
		jjbForm.dTotalCases = parseInt(document.getElementById('dTotalCases').value);
		jjbForm.dBoys7to11 = parseInt(document.getElementById('dBoys7to11').value);
		jjbForm.dBoys12to15 = parseInt(document.getElementById('dBoys12to15').value);
		jjbForm.dBoys16to18 = parseInt(document.getElementById('dBoys16to18').value);
		jjbForm.dBoysGreaterThan18 = parseInt(document.getElementById('dBoysGreaterThan18').value);
		jjbForm.dBoysTotal = parseInt(document.getElementById('dBoysTotal').value);
		jjbForm.dGirls7to11 = parseInt(document.getElementById('dGirls7to11').value);
		jjbForm.dGirls12to15 = parseInt(document.getElementById('dGirls12to15').value);
		jjbForm.dGirls16to18 = parseInt(document.getElementById('dGirls16to18').value);
		jjbForm.dGirlsGreaterThan18 = parseInt(document.getElementById('dGirlsGreaterThan18').value);
		jjbForm.dGirlsTotal = parseInt(document.getElementById('dGirlsTotal').value);
		jjbForm.dGrandTotal = parseInt(document.getElementById('dGrandTotal').value);
		jjbForm.e1BoysTotal = parseInt(document.getElementById('e1BoysTotal').value);
		jjbForm.e1GirlsTotal = parseInt(document.getElementById('e1GirlsTotal').value);
		jjbForm.e1GrandTotal = parseInt(document.getElementById('e1GrandTotal').value);
		jjbForm.e2BoysTotal = parseInt(document.getElementById('e2BoysTotal').value);
		jjbForm.e2GirlsTotal = parseInt(document.getElementById('e2GirlsTotal').value);
		jjbForm.e2GrandTotal = parseInt(document.getElementById('e2GrandTotal').value);
		jjbForm.e3BoysTotal = parseInt(document.getElementById('e3BoysTotal').value);
		jjbForm.e3GirlsTotal = parseInt(document.getElementById('e3GirlsTotal').value);
		jjbForm.e3GrandTotal = parseInt(document.getElementById('e3GrandTotal').value);
		jjbForm.e4BoysTotal = parseInt(document.getElementById('e4BoysTotal').value);
		jjbForm.e4GirlsTotal = parseInt(document.getElementById('e4GirlsTotal').value);
		jjbForm.e4GrandTotal = parseInt(document.getElementById('e4GrandTotal').value);
		jjbForm.e5BoysTotal = parseInt(document.getElementById('e5BoysTotal').value);
		jjbForm.e5GirlsTotal = parseInt(document.getElementById('e5GirlsTotal').value);
		jjbForm.e5GrandTotal = parseInt(document.getElementById('e5GrandTotal').value);
		jjbForm.e6BoysTotal = parseInt(document.getElementById('e6BoysTotal').value);
		jjbForm.e6GirlsTotal = parseInt(document.getElementById('e6GirlsTotal').value);
		jjbForm.e6GrandTotal = parseInt(document.getElementById('e6GrandTotal').value);
		jjbForm.e7BoysTotal = parseInt(document.getElementById('e7BoysTotal').value);
		jjbForm.e7GirlsTotal = parseInt(document.getElementById('e7GirlsTotal').value);
		jjbForm.e7GrandTotal = parseInt(document.getElementById('e7GrandTotal').value);
		jjbForm.e8BoysTotal = parseInt(document.getElementById('e8BoysTotal').value);
		jjbForm.e8GirlsTotal = parseInt(document.getElementById('e8GirlsTotal').value);
		jjbForm.e8GrandTotal = parseInt(document.getElementById('e8GrandTotal').value);
		jjbForm.e9BoysTotal = parseInt(document.getElementById('e9BoysTotal').value);
		jjbForm.e9GirlsTotal = parseInt(document.getElementById('e9GirlsTotal').value);
		jjbForm.e9GrandTotal = parseInt(document.getElementById('e9GrandTotal').value);
		jjbForm.e10BoysTotal = parseInt(document.getElementById('e10BoysTotal').value);
		jjbForm.e10GirlsTotal = parseInt(document.getElementById('e10GirlsTotal').value);
		jjbForm.e10GrandTotal = parseInt(document.getElementById('e10GrandTotal').value);
		jjbForm.e11BoysTotal = parseInt(document.getElementById('e11BoysTotal').value);
		jjbForm.e11GirlsTotal = parseInt(document.getElementById('e11GirlsTotal').value);
		jjbForm.e11GrandTotal = parseInt(document.getElementById('e11GrandTotal').value);
		jjbForm.e12BoysTotal = parseInt(document.getElementById('e12BoysTotal').value);
		jjbForm.e12GirlsTotal = parseInt(document.getElementById('e12GirlsTotal').value);
		jjbForm.e12GrandTotal = parseInt(document.getElementById('e12GrandTotal').value);
		jjbForm.e13BoysTotal = parseInt(document.getElementById('e13BoysTotal').value);
		jjbForm.e13GirlsTotal = parseInt(document.getElementById('e13GirlsTotal').value);
		jjbForm.e13GrandTotal = parseInt(document.getElementById('e13GrandTotal').value);
		jjbForm.eTotalCases = parseInt(document.getElementById('eTotalCases').value);
		jjbForm.eBoys7to11 = parseInt(document.getElementById('eBoys7to11').value);
		jjbForm.eBoys12to15 = parseInt(document.getElementById('eBoys12to15').value);
		jjbForm.eBoys16to18 = parseInt(document.getElementById('eBoys16to18').value);
		jjbForm.eBoysGreaterThan18 = parseInt(document.getElementById('eBoysGreaterThan18').value);
		jjbForm.eBoysTotal = parseInt(document.getElementById('eBoysTotal').value);
		jjbForm.eGirls7to11 = parseInt(document.getElementById('eGirls7to11').value);
		jjbForm.eGirls12to15 = parseInt(document.getElementById('eGirls12to15').value);
		jjbForm.eGirls16to18 = parseInt(document.getElementById('eGirls16to18').value);
		jjbForm.eGirlsGreaterThan18 = parseInt(document.getElementById('eGirlsGreaterThan18').value);
		jjbForm.eGirlsTotal = parseInt(document.getElementById('eGirlsTotal').value);
		jjbForm.eGrandTotal = parseInt(document.getElementById('eGrandTotal').value);
		jjbForm.f1TotalCases = parseInt(document.getElementById('f1TotalCases').value);
		jjbForm.f1Boys7to11 = parseInt(document.getElementById('f1Boys7to11').value);
		jjbForm.f1Boys12to15 = parseInt(document.getElementById('f1Boys12to15').value);
		jjbForm.f1Boys16to18 = parseInt(document.getElementById('f1Boys16to18').value);
		jjbForm.f1BoysGreaterThan18 = parseInt(document.getElementById('f1BoysGreaterThan18').value);
		jjbForm.f1BoysTotal = parseInt(document.getElementById('f1BoysTotal').value);
		jjbForm.f1Girls7to11 = parseInt(document.getElementById('f1Girls7to11').value);
		jjbForm.f1Girls12to15 = parseInt(document.getElementById('f1Girls12to15').value);
		jjbForm.f1Girls16to18 = parseInt(document.getElementById('f1Girls16to18').value);
		jjbForm.f1GirlsGreaterThan18 = parseInt(document.getElementById('f1GirlsGreaterThan18').value);
		jjbForm.f1GirlsTotal = parseInt(document.getElementById('f1GirlsTotal').value);
		jjbForm.f1GrandTotal = parseInt(document.getElementById('f1GrandTotal').value);
		jjbForm.f2TotalCases = parseInt(document.getElementById('f2TotalCases').value);
		jjbForm.f2Boys7to11 = parseInt(document.getElementById('f2Boys7to11').value);
		jjbForm.f2Boys12to15 = parseInt(document.getElementById('f2Boys12to15').value);
		jjbForm.f2Boys16to18 = parseInt(document.getElementById('f2Boys16to18').value);
		jjbForm.f2BoysGreaterThan18 = parseInt(document.getElementById('f2BoysGreaterThan18').value);
		jjbForm.f2BoysTotal = parseInt(document.getElementById('f2BoysTotal').value);
		jjbForm.f2Girls7to11 = parseInt(document.getElementById('f2Girls7to11').value);
		jjbForm.f2Girls12to15 = parseInt(document.getElementById('f2Girls12to15').value);
		jjbForm.f2Girls16to18 = parseInt(document.getElementById('f2Girls16to18').value);
		jjbForm.f2GirlsGreaterThan18 = parseInt(document.getElementById('f2GirlsGreaterThan18').value);
		jjbForm.f2GirlsTotal = parseInt(document.getElementById('f2GirlsTotal').value);
		jjbForm.f2GrandTotal = parseInt(document.getElementById('f2GrandTotal').value);
		jjbForm.f3BoysTotal = parseInt(document.getElementById('f3BoysTotal').value);
		jjbForm.f3GirlsTotal = parseInt(document.getElementById('f3GirlsTotal').value);
		jjbForm.f3GrandTotal = parseInt(document.getElementById('f3GrandTotal').value);
		jjbForm.g1PettyBoysTotal = parseInt(document.getElementById('g1PettyBoysTotal').value);
		jjbForm.g1PettyGirlsTotal = parseInt(document.getElementById('g1PettyGirlsTotal').value);
		jjbForm.g1PettyGrandTotal = parseInt(document.getElementById('g1PettyGrandTotal').value);
		jjbForm.g1SeriousBoysTotal = parseInt(document.getElementById('g1SeriousBoysTotal').value);
		jjbForm.g1SeriousGirlsTotal = parseInt(document.getElementById('g1SeriousGirlsTotal').value);
		jjbForm.g1SeriousGrandTotal = parseInt(document.getElementById('g1SeriousGrandTotal').value);
		jjbForm.g1HeinousBoysTotal = parseInt(document.getElementById('g1HeinousBoysTotal').value);
		jjbForm.g1HeinousGirlsTotal = parseInt(document.getElementById('g1HeinousGirlsTotal').value);
		jjbForm.g1HeinousGrandTotal = parseInt(document.getElementById('g1HeinousGrandTotal').value);
		jjbForm.g1TotalCases = parseInt(document.getElementById('g1TotalCases').value);
		jjbForm.g1Boys7to11 = parseInt(document.getElementById('g1Boys7to11').value);
		jjbForm.g1Boys12to15 = parseInt(document.getElementById('g1Boys12to15').value);
		jjbForm.g1Boys16to18 = parseInt(document.getElementById('g1Boys16to18').value);
		jjbForm.g1BoysGreaterThan18 = parseInt(document.getElementById('g1BoysGreaterThan18').value);
		jjbForm.g1BoysTotal = parseInt(document.getElementById('g1BoysTotal').value);
		jjbForm.g1Girls7to11 = parseInt(document.getElementById('g1Girls7to11').value);
		jjbForm.g1Girls12to15 = parseInt(document.getElementById('g1Girls12to15').value);
		jjbForm.g1Girls16to18 = parseInt(document.getElementById('g1Girls16to18').value);
		jjbForm.g1GirlsGreaterThan18 = parseInt(document.getElementById('g1GirlsGreaterThan18').value);
		jjbForm.g1GirlsTotal = parseInt(document.getElementById('g1GirlsTotal').value);
		jjbForm.g1GrandTotal = parseInt(document.getElementById('g1GrandTotal').value);
		jjbForm.g2PettyBoysTotal = parseInt(document.getElementById('g2PettyBoysTotal').value);
		jjbForm.g2PettyGirlsTotal = parseInt(document.getElementById('g2PettyGirlsTotal').value);
		jjbForm.g2PettyGrandTotal = parseInt(document.getElementById('g2PettyGrandTotal').value);
		jjbForm.g2SeriousBoysTotal = parseInt(document.getElementById('g2SeriousBoysTotal').value);
		jjbForm.g2SeriousGirlsTotal = parseInt(document.getElementById('g2SeriousGirlsTotal').value);
		jjbForm.g2SeriousGrandTotal = parseInt(document.getElementById('g2SeriousGrandTotal').value);
		jjbForm.g2HeinousBoysTotal = parseInt(document.getElementById('g2HeinousBoysTotal').value);
		jjbForm.g2HeinousGirlsTotal = parseInt(document.getElementById('g2HeinousGirlsTotal').value);
		jjbForm.g2HeinousGrandTotal = parseInt(document.getElementById('g2HeinousGrandTotal').value);
		jjbForm.g2TotalCases = parseInt(document.getElementById('g2TotalCases').value);
		jjbForm.g2Boys7to11 = parseInt(document.getElementById('g2Boys7to11').value);
		jjbForm.g2Boys12to15 = parseInt(document.getElementById('g2Boys12to15').value);
		jjbForm.g2Boys16to18 = parseInt(document.getElementById('g2Boys16to18').value);
		jjbForm.g2BoysGreaterThan18 = parseInt(document.getElementById('g2BoysGreaterThan18').value);
		jjbForm.g2BoysTotal = parseInt(document.getElementById('g2BoysTotal').value);
		jjbForm.g2Girls7to11 = parseInt(document.getElementById('g2Girls7to11').value);
		jjbForm.g2Girls12to15 = parseInt(document.getElementById('g2Girls12to15').value);
		jjbForm.g2Girls16to18 = parseInt(document.getElementById('g2Girls16to18').value);
		jjbForm.g2GirlsGreaterThan18 = parseInt(document.getElementById('g2GirlsGreaterThan18').value);
		jjbForm.g2GirlsTotal = parseInt(document.getElementById('g2GirlsTotal').value);
		jjbForm.g2GrandTotal = parseInt(document.getElementById('g2GrandTotal').value);
		jjbForm.g3PettyBoysTotal = parseInt(document.getElementById('g3PettyBoysTotal').value);
		jjbForm.g3PettyGirlsTotal = parseInt(document.getElementById('g3PettyGirlsTotal').value);
		jjbForm.g3PettyGrandTotal = parseInt(document.getElementById('g3PettyGrandTotal').value);
		jjbForm.g3SeriousBoysTotal = parseInt(document.getElementById('g3SeriousBoysTotal').value);
		jjbForm.g3SeriousGirlsTotal = parseInt(document.getElementById('g3SeriousGirlsTotal').value);
		jjbForm.g3SeriousGrandTotal = parseInt(document.getElementById('g3SeriousGrandTotal').value);
		jjbForm.g3HeinousBoysTotal = parseInt(document.getElementById('g3HeinousBoysTotal').value);
		jjbForm.g3HeinousGirlsTotal = parseInt(document.getElementById('g3HeinousGirlsTotal').value);
		jjbForm.g3HeinousGrandTotal = parseInt(document.getElementById('g3HeinousGrandTotal').value);
		jjbForm.g3TotalCases = parseInt(document.getElementById('g3TotalCases').value);
		jjbForm.g3Boys7to11 = parseInt(document.getElementById('g3Boys7to11').value);
		jjbForm.g3Boys12to15 = parseInt(document.getElementById('g3Boys12to15').value);
		jjbForm.g3Boys16to18 = parseInt(document.getElementById('g3Boys16to18').value);
		jjbForm.g3BoysGreaterThan18 = parseInt(document.getElementById('g3BoysGreaterThan18').value);
		jjbForm.g3BoysTotal = parseInt(document.getElementById('g3BoysTotal').value);
		jjbForm.g3Girls7to11 = parseInt(document.getElementById('g3Girls7to11').value);
		jjbForm.g3Girls12to15 = parseInt(document.getElementById('g3Girls12to15').value);
		jjbForm.g3Girls16to18 = parseInt(document.getElementById('g3Girls16to18').value);
		jjbForm.g3GirlsGreaterThan18 = parseInt(document.getElementById('g3GirlsGreaterThan18').value);
		jjbForm.g3GirlsTotal = parseInt(document.getElementById('g3GirlsTotal').value);
		jjbForm.g3GrandTotal = parseInt(document.getElementById('g3GrandTotal').value);
		jjbForm.g4PettyBoysTotal = parseInt(document.getElementById('g4PettyBoysTotal').value);
		jjbForm.g4PettyGirlsTotal = parseInt(document.getElementById('g4PettyGirlsTotal').value);
		jjbForm.g4PettyGrandTotal = parseInt(document.getElementById('g4PettyGrandTotal').value);
		jjbForm.g4SeriousBoysTotal = parseInt(document.getElementById('g4SeriousBoysTotal').value);
		jjbForm.g4SeriousGirlsTotal = parseInt(document.getElementById('g4SeriousGirlsTotal').value);
		jjbForm.g4SeriousGrandTotal = parseInt(document.getElementById('g4SeriousGrandTotal').value);
		jjbForm.g4HeinousBoysTotal = parseInt(document.getElementById('g4HeinousBoysTotal').value);
		jjbForm.g4HeinousGirlsTotal = parseInt(document.getElementById('g4HeinousGirlsTotal').value);
		jjbForm.g4HeinousGrandTotal = parseInt(document.getElementById('g4HeinousGrandTotal').value);
		jjbForm.g4TotalCases = parseInt(document.getElementById('g4TotalCases').value);
		jjbForm.g4Boys7to11 = parseInt(document.getElementById('g4Boys7to11').value);
		jjbForm.g4Boys12to15 = parseInt(document.getElementById('g4Boys12to15').value);
		jjbForm.g4Boys16to18 = parseInt(document.getElementById('g4Boys16to18').value);
		jjbForm.g4BoysGreaterThan18 = parseInt(document.getElementById('g4BoysGreaterThan18').value);
		jjbForm.g4BoysTotal = parseInt(document.getElementById('g4BoysTotal').value);
		jjbForm.g4Girls7to11 = parseInt(document.getElementById('g4Girls7to11').value);
		jjbForm.g4Girls12to15 = parseInt(document.getElementById('g4Girls12to15').value);
		jjbForm.g4Girls16to18 = parseInt(document.getElementById('g4Girls16to18').value);
		jjbForm.g4GirlsGreaterThan18 = parseInt(document.getElementById('g4GirlsGreaterThan18').value);
		jjbForm.g4GirlsTotal = parseInt(document.getElementById('g4GirlsTotal').value);
		jjbForm.g4GrandTotal = parseInt(document.getElementById('g4GrandTotal').value);
		jjbForm.h1TotalCases = parseInt(document.getElementById('h1TotalCases').value);
		jjbForm.h1Boys7to11 = parseInt(document.getElementById('h1Boys7to11').value);
		jjbForm.h1Boys12to15 = parseInt(document.getElementById('h1Boys12to15').value);
		jjbForm.h1Boys16to18 = parseInt(document.getElementById('h1Boys16to18').value);
		jjbForm.h1BoysGreaterThan18 = parseInt(document.getElementById('h1BoysGreaterThan18').value);
		jjbForm.h1BoysTotal = parseInt(document.getElementById('h1BoysTotal').value);
		jjbForm.h1Girls7to11 = parseInt(document.getElementById('h1Girls7to11').value);
		jjbForm.h1Girls12to15 = parseInt(document.getElementById('h1Girls12to15').value);
		jjbForm.h1Girls16to18 = parseInt(document.getElementById('h1Girls16to18').value);
		jjbForm.h1GirlsGreaterThan18 = parseInt(document.getElementById('h1GirlsGreaterThan18').value);
		jjbForm.h1GirlsTotal = parseInt(document.getElementById('h1GirlsTotal').value);
		jjbForm.h1GrandTotal = parseInt(document.getElementById('h1GrandTotal').value);
		jjbForm.h2TotalCases = parseInt(document.getElementById('h2TotalCases').value);
		jjbForm.h2Boys7to11 = parseInt(document.getElementById('h2Boys7to11').value);
		jjbForm.h2Boys12to15 = parseInt(document.getElementById('h2Boys12to15').value);
		jjbForm.h2Boys16to18 = parseInt(document.getElementById('h2Boys16to18').value);
		jjbForm.h2BoysGreaterThan18 = parseInt(document.getElementById('h2BoysGreaterThan18').value);
		jjbForm.h2BoysTotal = parseInt(document.getElementById('h2BoysTotal').value);
		jjbForm.h2Girls7to11 = parseInt(document.getElementById('h2Girls7to11').value);
		jjbForm.h2Girls12to15 = parseInt(document.getElementById('h2Girls12to15').value);
		jjbForm.h2Girls16to18 = parseInt(document.getElementById('h2Girls16to18').value);
		jjbForm.h2GirlsGreaterThan18 = parseInt(document.getElementById('h2GirlsGreaterThan18').value);
		jjbForm.h2GirlsTotal = parseInt(document.getElementById('h2GirlsTotal').value);
		jjbForm.h2GrandTotal = parseInt(document.getElementById('h2GrandTotal').value);
		jjbForm.h3TotalCases = parseInt(document.getElementById('h3TotalCases').value);
		jjbForm.h3Boys7to11 = parseInt(document.getElementById('h3Boys7to11').value);
		jjbForm.h3Boys12to15 = parseInt(document.getElementById('h3Boys12to15').value);
		jjbForm.h3Boys16to18 = parseInt(document.getElementById('h3Boys16to18').value);
		jjbForm.h3BoysGreaterThan18 = parseInt(document.getElementById('h3BoysGreaterThan18').value);
		jjbForm.h3BoysTotal = parseInt(document.getElementById('h3BoysTotal').value);
		jjbForm.h3Girls7to11 = parseInt(document.getElementById('h3Girls7to11').value);
		jjbForm.h3Girls12to15 = parseInt(document.getElementById('h3Girls12to15').value);
		jjbForm.h3Girls16to18 = parseInt(document.getElementById('h3Girls16to18').value);
		jjbForm.h3GirlsGreaterThan18 = parseInt(document.getElementById('h3GirlsGreaterThan18').value);
		jjbForm.h3GirlsTotal = parseInt(document.getElementById('h3GirlsTotal').value);
		jjbForm.h3GrandTotal = parseInt(document.getElementById('h3GrandTotal').value);
		jjbForm.h4TotalCases= parseInt(document.getElementById('h4TotalCases').value);
		jjbForm.h4Boys7to11= parseInt(document.getElementById('h4Boys7to11').value);
		jjbForm.h4Boys12to15= parseInt(document.getElementById('h4Boys12to15').value);
		jjbForm.h4Boys16to18= parseInt(document.getElementById('h4Boys16to18').value);
		jjbForm.h4BoysGreaterThan18= parseInt(document.getElementById('h4BoysGreaterThan18').value);
		jjbForm.h4BoysTotal= parseInt(document.getElementById('h4BoysTotal').value);
		jjbForm.h4Girls7to11= parseInt(document.getElementById('h4Girls7to11').value);
		jjbForm.h4Girls12to15= parseInt(document.getElementById('h4Girls12to15').value);
		jjbForm.h4Girls16to18= parseInt(document.getElementById('h4Girls16to18').value);
		jjbForm.h4GirlsGreaterThan18= parseInt(document.getElementById('h4GirlsGreaterThan18').value);
		jjbForm.h4GirlsTotal= parseInt(document.getElementById('h4GirlsTotal').value);
		jjbForm.h4GrandTotal= parseInt(document.getElementById('h4GrandTotal').value);
		
		jjbForm.iBoysTotal = parseInt(document.getElementById('iBoysTotal').value);
		jjbForm.iGirlsTotal = parseInt(document.getElementById('iGirlsTotal').value);
		jjbForm.iGrandTotal = parseInt(document.getElementById('iGrandTotal').value);
		jjbForm.iMinorityTotal = parseInt(document.getElementById('iMinorityTotal').value);
		jjbForm.j1NonHeinousBoysTotal = parseInt(document.getElementById('j1NonHeinousBoysTotal').value);
		jjbForm.j1NonHeinousGirlsTotal = parseInt(document.getElementById('j1NonHeinousGirlsTotal').value);
		jjbForm.j1NonHeinousGrandTotal = parseInt(document.getElementById('j1NonHeinousGrandTotal').value);
		jjbForm.j2HeinousBoysTotal = parseInt(document.getElementById('j2HeinousBoysTotal').value);
		jjbForm.j2HeinousGirlsTotal = parseInt(document.getElementById('j2HeinousGirlsTotal').value);
		jjbForm.j2HeinousGrandTotal = parseInt(document.getElementById('j2HeinousGrandTotal').value);
		jjbForm.j3TotalCases= parseInt(document.getElementById('j3TotalCases').value);
		jjbForm.j3TotalBoys7to11= parseInt(document.getElementById('j3TotalBoys7to11').value);
		jjbForm.j3TotalBoys12to15= parseInt(document.getElementById('j3TotalBoys12to15').value);
		jjbForm.j3TotalBoys16to18= parseInt(document.getElementById('j3TotalBoys16to18').value);
		jjbForm.j3TotalBoysGreaterThan18= parseInt(document.getElementById('j3TotalBoysGreaterThan18').value);
		jjbForm.j3TotalBoysTotal= parseInt(document.getElementById('j3TotalBoysTotal').value);
		jjbForm.j3TotalGirls7to11= parseInt(document.getElementById('j3TotalGirls7to11').value);
		jjbForm.j3TotalGirls12to15= parseInt(document.getElementById('j3TotalGirls12to15').value);
		jjbForm.j3TotalGirls16to18= parseInt(document.getElementById('j3TotalGirls16to18').value);
		jjbForm.j3TotalGirlsGreaterThan18= parseInt(document.getElementById('j3TotalGirlsGreaterThan18').value);
		jjbForm.j3TotalGirlsTotal= parseInt(document.getElementById('j3TotalGirlsTotal').value);
		jjbForm.j3TotalGrandTotal= parseInt(document.getElementById('j3TotalGrandTotal').value);	
		jjbForm.k5aTotalCICL = parseInt(document.getElementById('k5aTotalCICL').value);
		jjbForm.k6TotalCICL = parseInt(document.getElementById('k6TotalCICL').value);
		jjbForm.k7TotalCICL = parseInt(document.getElementById('k7TotalCICL').value);
		jjbForm.k8TotalCICL = parseInt(document.getElementById('k8TotalCICL').value);
		jjbForm.k9TotalCICL = parseInt(document.getElementById('k9TotalCICL').value);
		jjbForm.k10cTotalCICL = parseInt(document.getElementById('k10cTotalCICL').value);
		jjbForm.k11cTotalCICL = parseInt(document.getElementById('k11cTotalCICL').value);
		jjbForm.k12aTotalCICL = parseInt(document.getElementById('k12aTotalCICL').value);
		jjbForm.k12bTotalCICL = parseInt(document.getElementById('k12bTotalCICL').value);
		jjbForm.k12cTotalCICL = parseInt(document.getElementById('k12cTotalCICL').value);
		jjbForm.k12Cases = parseInt(document.getElementById('k12Cases').value);
		jjbForm.k12Boys = parseInt(document.getElementById('k12Boys').value);
		jjbForm.k12Girls = parseInt(document.getElementById('k12Girls').value);
		jjbForm.k12TotalCICL = parseInt(document.getElementById('k12TotalCICL').value);
		jjbForm.k13aTotalCICL = parseInt(document.getElementById('k13aTotalCICL').value);
		jjbForm.k13bTotalCICL = parseInt(document.getElementById('k13bTotalCICL').value);
		jjbForm.k13cTotalCICL = parseInt(document.getElementById('k13cTotalCICL').value);
		jjbForm.k13dTotalCICL = parseInt(document.getElementById('k13dTotalCICL').value);
		jjbForm.k14aTotalCICL = parseInt(document.getElementById('k14aTotalCICL').value);
		jjbForm.k14bTotalCICL = parseInt(document.getElementById('k14bTotalCICL').value);
		jjbForm.k14cTotalCICL = parseInt(document.getElementById('k14cTotalCICL').value);
		jjbForm.k14dTotalCICL = parseInt(document.getElementById('k14dTotalCICL').value);
		jjbForm.k15aTotalCICL = parseInt(document.getElementById('k15aTotalCICL').value);
		jjbForm.k15bTotalCICL = parseInt(document.getElementById('k15bTotalCICL').value);
		jjbForm.k15cTotalCICL = parseInt(document.getElementById('k15cTotalCICL').value);
		jjbForm.k15dTotalCICL = parseInt(document.getElementById('k15dTotalCICL').value);
		jjbForm.k16aTotalCICL = parseInt(document.getElementById('k16aTotalCICL').value);
		jjbForm.k16bTotalCICL = parseInt(document.getElementById('k16bTotalCICL').value);
		jjbForm.k16cTotalCICL = parseInt(document.getElementById('k16cTotalCICL').value);
		jjbForm.k16dTotalCICL = parseInt(document.getElementById('k16dTotalCICL').value);
		jjbForm.k16eTotalCICL = parseInt(document.getElementById('k16eTotalCICL').value);
		jjbForm.k16fTotalCICL = parseInt(document.getElementById('k16fTotalCICL').value);
		jjbForm.k17aTotalCICL = parseInt(document.getElementById('k17aTotalCICL').value);
		jjbForm.k17bTotalCICL = parseInt(document.getElementById('k17bTotalCICL').value);
		jjbForm.k17cTotalCICL = parseInt(document.getElementById('k17cTotalCICL').value);
		jjbForm.k17dTotalCICL = parseInt(document.getElementById('k17dTotalCICL').value);
		jjbForm.k17eTotalCICL = parseInt(document.getElementById('k17eTotalCICL').value);
		for (var i = 0; i < jjbForm.jjbDetailsTraining.length; i++) {
			if (jjbForm.jjbDetailsTraining[i].trainingOrganisedBy != null || jjbForm.jjbDetailsTraining[i].trainingOrganisedBy != undefined)
				jjbForm.jjbDetailsTraining[i].trainingOrganisedBy = jjbForm.jjbDetailsTraining[i].trainingOrganisedBy.typeDetailsId;
		}
		jjbForm.userId = Number(document.getElementById("uId").value);
	};
	var submitted = false;
	$scope.saveJJB = function(jjbForm, clickType, submitConfirm) {
		$(".loader").show();
		if ($scope.selectedDistrict != undefined)
			jjbForm.districtId = $scope.selectedDistrict.areaId;

		jjbForm.jjbDetailsTraining = $scope.jjbTrainingDetailsRepetitionArray;

		if (clickType == 'save') {
			prepareObject(jjbForm);
			$http.post('saveJJB', jjbForm).then(function(result) {
				if (result.status == 200) {
					$(".loader").fadeOut();
					$scope.success_msg = commonService.messages.save_success_msg;
					$('#confirmationModalForJJB').modal('show');
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSaveHttpFunction(error);
				console.log(error);
			});
		} else if (clickType == 'submit' && submitted == false) {
			$(".loader").fadeOut();
			if(!$scope.jjbForm.jjbDetailsTraining.length<1){
				for(var i=0;i<$scope.jjbForm.jjbDetailsTraining.length;i++){
					if (!accordionValidation($scope.jjbForm.jjbDetailsTraining[i])) {
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
			
			if (!accordionValidation($scope.jjbForm.jjbDetailsTraining[$scope.jjbForm.jjbDetailsTraining.length - 1])) {
				$scope.label1 = commonService.messages.add_all_training_details;
				$scope.label2 = "";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop: $('#accordion').offset().top - 250},'slow');
			}else{
				$('#confirmationModalForJJBSUBMIT').modal('show');
			}
			if(allNegetiveTest() ==false){
	 			return false;
	 		 }
		}
		if (submitConfirm == 'ok') {
			prepareObject(jjbForm);
			$http.post('submitJJB', jjbForm).then(function(result) {
				if (result.status == 200) {
					$scope.success_msg = commonService.messages.submit_success_msg+jjbForm.timeperiod.timePeriod;
					$('#confirmationModalForJJB').modal('show');
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
	
	$scope.autoSaveJJB = function(jjbForm, clickType) {
		if ($scope.selectedDistrict != undefined)
			jjbForm.districtId = $scope.selectedDistrict.areaId;

		jjbForm.jjbDetailsTraining = $scope.jjbTrainingDetailsRepetitionArray;

		if (clickType == 'save') {
				prepareObject(jjbForm);
				$http.post('autoSaveJJB', jjbForm).then(function(result) {
					if (result.status == 200) {
						$(".loader").fadeOut();
						$('#successModalForAutoSaveJJB').modal('show');
					}
				}, function(error) {
					commonService.checkSessionOut(error);
					console.log(error);
				});
		}
	};	
	// getting refresh on saving

	$scope.refreshPage = function() {
		$window.location.reload();
	};

	// type number will not accept exponential(e) @Swarna
	$(".removeExponentialValueE").keypress(function(event) {
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
			return false;
		}
	});

	$http.get("getUserArea").then(function(result) {
		$scope.selectedDistrict = result.data;
	}, function(error) {
		console.log(error);
	});
	$scope.testLastAccessedTime=function(){
		$http.post('testSeverCall').then(function(result) {
		}, function(error) {
			console.log(error);
		});
	}
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
	    	if($scope.counterSeconds==300 && !$('#confirmationModalForJJB').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#confirmationModalForJJB').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSaveJJB($scope.jjbForm, 'save');
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
	$http.post("getLastSavedJJBData", currentUserId).then(function(result) {
		if (result.data != "")
			$scope.jjbForm = result.data;
		if(!$scope.jjbForm.submitted)
			$scope.timerForSave($scope,$timeout);
		if ($scope.jjbForm.submitted) {
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		todaysDate = new Date($scope.jjbForm.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
	    $(".accordionFromDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if(this.id.startsWith("trainingFromDatepicker")){
					if($scope.jjbTrainingDetailsRepetitionArray[0].trainingToDate != null && $scope.jjbTrainingDetailsRepetitionArray[0].trainingToDate != undefined){
						var fromDay = new Date(dateConvert(date));
						var toDay = new Date(dateConvert($scope.jjbTrainingDetailsRepetitionArray[0].trainingToDate));
						if(toDay < fromDay){
							var index = this.id.split('trainingFromDatepicker')[1];
							$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
							$scope.label2 = "";
			            	$scope.alertMessage = "";
			            	$scope.$apply();
			    			$('#ErrAlertModal').modal('show');
			    			$("#trainingToDatepicker"+index).val(null);
			    			$scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate = null;
			            }
					}
					$scope.jjbTrainingDetailsRepetitionArray[0].trainingFromDate = date;
	            }else if(this.id.startsWith("trainingToDatepicker")){
	            	checkDate(date, 0);
	            }
	        },
		});
		$timeout(function() {
			if ($scope.jjbForm.jjbDetailsTraining != null && $scope.jjbForm.jjbDetailsTraining != undefined && $scope.jjbForm.jjbDetailsTraining.length != 0) {
				$scope.jjbTrainingDetailsRepetitionArray = $scope.jjbForm.jjbDetailsTraining;
			}

			if ($scope.jjbForm.jjbDetailsTraining != undefined) {
				for (var i = 0; i < $scope.jjbForm.jjbDetailsTraining.length; i++) {
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
						if ($scope.trainingOrganisedBy[j].typeDetailsId == $scope.jjbForm.jjbDetailsTraining[i].trainingOrganisedBy) {
							$scope.jjbTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			$scope.jjbForm.l1WasTrainingHeldJJSysytem = $scope.jjbForm.l1WasTrainingHeldJJSysytem == null ? null : $scope.jjbForm.l1WasTrainingHeldJJSysytem.toString();
			$scope.jjbForm.l1aNoOfTraining = $scope.jjbTrainingDetailsRepetitionArray.length;
			$(".loader").fadeOut();
		}, 500);
		$timeout(function() {
			$scope.jjbForm.l1aNoOfTraining = $scope.jjbTrainingDetailsRepetitionArray.length;
			$scope.jjbForm.k3a = $scope.jjbForm.k3a==null?null:$scope.jjbForm.k3a.toString();
			$scope.jjbForm.k4a = $scope.jjbForm.k4a==null?null:$scope.jjbForm.k4a.toString();
			$(".loader").fadeOut();
		}, 500);
	}, function(error) {
		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});

	// Adding new Accordion

	$scope.jjbTrainingDetailsObject = {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		trainingOrganisedBy : null,
		traingOrganisedbyOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLaws : null,
		totICPS : null,
		totCombinedTraining : null,
		totCpmis : null,
		totTrackChild : null,
		totClts : null,
		totOthers : null,
		totOthersSpecify : null,
		tabPm : null,
		tabMembers : null,
		tabBenchClerk : null,
		tabAssistantCumDataEntryOperator : null,
		tabPanelLawyer : null,
		tabOthers : null,
		tabOthersSpecify : null,
		jjbId : null
	};
	$scope.jjbTrainingDetailsRepetitionArray = [ {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		trainingOrganisedBy : null,
		traingOrganisedbyOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLaws : null,
		totICPS : null,
		totCombinedTraining : null,
		totCpmis : null,
		totTrackChild : null,
		totClts : null,
		totOthers : null,
		totOthersSpecify : null,
		tabPm : null,
		tabMembers : null,
		tabBenchClerk : null,
		tabAssistantCumDataEntryOperator : null,
		tabPanelLawyer : null,
		tabOthers : null,
		tabOthersSpecify : null,
		jjbId : null
	} ];
	
	var topicOfTrainingValidation = function(training){
		if(training.totJjAct != true &&
				training.totPosco != true &&
				training.totChildRelatedLaws != true &&
				training.totICPS != true &&
				training.totCombinedTraining != true &&
				training.totCpmis != true &&
				training.totTrackChild != true &&
				training.totClts != true &&
				training.totOthers != true){
			return false;
		}else if(training.totOthers == true && (training.totOthersSpecify == null || training.totOthersSpecify.trim()=="")){
			return false;
		}else{
			return true;
		}
	};
	var accordionValidation = function(training){
		if($scope.jjbForm.l1WasTrainingHeldJJSysytem == 'true'){
			if((training.durationTraining == null ||
					training.trainingFromDate == null ||
					training.trainingToDate == null ||
					training.trainingOrganisedBy == null ||
					training.tabPm == null ||
					training.tabMembers == null ||
					training.tabBenchClerk == null ||
					training.tabAssistantCumDataEntryOperator == null ||
					training.tabPanelLawyer == null ||
					training.tabOthers == null)){
				return false;
			}else if((training.trainingOrganisedBy.typeDetailsId == 4 && (training.traingOrganisedbyOthers == null || training.traingOrganisedbyOthers.trim() == "")) ||
					(training.tabOthers > 0 && (training.tabOthersSpecify == null || training.tabOthersSpecify.trim()==""))){
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
		if($scope.validateNoOfTraining($scope.jjbForm.l1aNoOfTraining)){
			if (!accordionValidation($scope.jjbTrainingDetailsRepetitionArray[$scope.jjbTrainingDetailsRepetitionArray.length - 1])) {
				$scope.label1 = commonService.messages.add_all_training_details;
				$scope.label2 = "";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.jjbForm.l1aNoOfTraining!=undefined && $scope.jjbForm.l1aNoOfTraining <= 10){
					if ($scope.jjbTrainingDetailsRepetitionArray.length < $scope.jjbForm.l1aNoOfTraining) {
						$scope.jjbTrainingDetailsRepetitionArray[($scope.jjbTrainingDetailsRepetitionArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.jjbTrainingDetailsObject));
					} else {
						document.getElementById('maximumLimit10Error').innerHTML = "You can add details of maximum <b>" + $scope.jjbForm.l1aNoOfTraining + "</b> Training Details";
					}
					$timeout(function(){
						document.getElementById('maximumLimit10Error').innerHTML = "";
					},2000);
				}
			}
		}
	};
	$scope.deleteConfirm = function() {
		document.getElementById("l1aNoOfTraining").blur();
		if ($scope.jjbTrainingDetailsRepetitionArray.length > 1 && $scope.jjbForm.l1aNoOfTraining >= $scope.jjbTrainingDetailsRepetitionArray.length
				&& $scope.jjbForm.l1aNoOfTraining!=undefined && $scope.jjbForm.l1aNoOfTraining <= 10) {
			$('#deleteAccordion').modal('show');
		}
	};

	$scope.deleteAccordion = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
		if ($scope.jjbTrainingDetailsRepetitionArray.length > 1) {
			$scope.jjbTrainingDetailsRepetitionArray.pop();
		}
	};

	$scope.openDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.trainingDetailsRepetitionArray[id].trainingToDate = date;
			}
		});
	};
	$scope.openData = function() {
		if ($scope.jjbForm.i21CasesRegisteredForFIR == 'true')
			document.getElementById("borderBottom1").style.display = "none";
	};
	$scope.openData1 = function() {
		if ($scope.jjbForm.i22FirAgainstCNCP == 'true')
			document.getElementById("borderBottom2").style.display = "none";
	};

	// the following function is for initialization and setting the dates in
	
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
 		$scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate = date;
 		if($scope.jjbTrainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.jjbTrainingDetailsRepetitionArray[index].trainingFromDate != undefined){
 			var fromDay = new Date(dateConvert($scope.jjbTrainingDetailsRepetitionArray[index].trainingFromDate));
 			var toDay = new Date(dateConvert(date));
 			if(toDay < fromDay){
 				$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
 				$scope.label2 = "";
             	$scope.alertMessage = "";
             	$scope.$apply();
     			$('#ErrAlertModal').modal('show');
     			$("#trainingToDatepicker"+index).val(null);
     			$scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate = null;
             }
 		}else{
 			$scope.label1 = commonService.messages.select_training_from;
 			$scope.label2 = "";
 			$scope.alertMessage = "";
         	$scope.$apply();
 			$('#ErrAlertModal').modal('show');
 			$("#trainingToDatepicker"+index).val(null);
 			$scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate = null;
 		}
 	};
 		
	$scope.initializeDatePicker = function(index) {
		$("#trainingFromDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
	            if($scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate != null && $scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
						$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
						$scope.label2 = "";
		            	$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.jjbTrainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.jjbTrainingDetailsRepetitionArray[index].trainingFromDate = date;
	        },
		});
		
		$("#trainingFromDatepicker1" + index).on("click", function(){
			$("#trainingFromDatepicker" + index).focus();
		});
		
		$("#trainingToDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				checkDate(date, index);
	        },
		});
		
		$("#trainingToDatepicker1" + index).on("click", function(){
			$("#trainingToDatepicker" + index).focus();
		});
	};
	// (Pratyush)the following two functions are for set date for from and to
	// dates dynamically respectively.
	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.jjbTrainingDetailsRepetitionArray[id].j1cTrainingFromDate = date;
			}
		});
	};
	$scope.openToDatePicker1 = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				jjbTrainingDetailsRepetitionArray[id].j1cTrainingToDate = date;
			}
		});
	};
	$scope.validateNoOfTraining = function(val) {
		if (val == 0 || val == null) {
			$scope.alertMessage = "Number of Trainings Held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.jjbForm.l1aNoOfTraining = $scope.jjbTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val > 10) {
			$scope.alertMessage = "Number of Trainings Held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.jjbForm.l1aNoOfTraining = $scope.jjbTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val < $scope.jjbTrainingDetailsRepetitionArray.length) {
			$scope.alertMessage = "Number of Trainings Held value should not be less than the number of trainings you added";
			$('#alertModal').modal('show');
			$scope.jjbForm.l1aNoOfTraining = $scope.jjbTrainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	$scope.clearMsg = function() {
		$scope.alertMessage = undefined;
		$scope.label1 = undefined;
		$scope.label2 = undefined;
	};
	// for reset to zero
	$scope.resetToZeroaccd = function(value) {
		if (value == 'false') {
			$scope.jjbTrainingDetailsRepetitionArray = [ {
				trainingId : null,
				durationTraining : null,
				trainingFromDate : null,
				trainingToDate : null,
				trainingOrganisedBy : null,
				traingOrganisedbyOthers : null,
				totJjAct : null,
				totPosco : null,
				totChildRelatedLaws : null,
				totICPS : null,
				totCombinedTraining : null,
				totCpmis : null,
				totTrackChild : null,
				totClts : null,
				totOthers : null,
				totOthersSpecify : null,
				tabPm : null,
				tabMembers : null,
				tabBenchClerk : null,
				tabAssistantCumDataEntryOperator : null,
				tabPanelLawyer : null,
				tabOthers : null,
				tabOthersSpecify : null,
				jjbId : null
			} ];
		}
		$scope.jjbForm.l1aNoOfTraining = $scope.jjbTrainingDetailsRepetitionArray.length;
	};

	$scope.resetToZero = function(value) {
		if (value == 'false') {
			$scope.jjbForm.i22aiNoFirAgainstBoysOld = 0;
			$scope.jjbForm.i22aiiNoFirAgainstGirlsOld = 0;
			$scope.jjbForm.i22biNoFirAgainstBoysNew = 0;
			$scope.jjbForm.i22biiNoFirAgainstGirlsNew = 0;
		}
	};
	$scope.resetToZero21 = function(value) {
		if (value == 'false') {
			$scope.jjbForm.i21aiNoFirAgainstBoysOld = 0;
			$scope.jjbForm.i21aiiNoFirAgainstGirlsOld = 0;
			$scope.jjbForm.i21biNoFirAgainstBoysNew = 0;
			$scope.jjbForm.i21biiNoFirAgainstGirlsNew = 0;
		}
	};
	$scope.resetToZerok3b = function(value) {
		if (value == 'false') {
			$scope.jjbForm.k3b = null;

		}
	};
	$scope.resetToZerok4b = function(value) {
		if (value == 'false') {
			$scope.jjbForm.k4b = null;
			$scope.jjbForm.k4c = null;

		}
	};
	$scope.resetToZeroK4c= function(value) {
		var testKb=value;
		if ( testKb== null || testKb =="" || testKb==undefined || testKb==0) {
			$scope.jjbForm.k4c = null;

		}
	};

	$scope.resetk5b = function(value) {
		if (value == 0) {
			$scope.jjbForm.k5b = null;

		}
	};
	// the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers1 = function(trainingDetails) {
		if (trainingDetails.trainingOrganisedBy.typeDetailsId != 4)
			trainingDetails.traingOrganisedbyOthers = null;
	};

});
