/*
 * @author Swarna(swarnaprava@sdrc.co.in) 
 */
var cpmisApp = angular.module('cpmisApp', ['angular-md5']);
cpmisApp.controller('saaController', function($scope, $http, $timeout, $window, md5, commonService) {

	$scope.Number = Number;
	var currentUserId = Number(document.getElementById("uId").value);

	$http.get("getDropdownItems").then(function(result) {
		console.log(result);
		$scope.trainingOrganisedBy = result.data.trainingOrganisedByForSAA;
		$scope.childGender = result.data.childGender;
		$scope.childCategory = result.data.childCategory;
		$scope.typeOfChild = result.data.typeOfChild;
		$scope.reasonOfPendency = result.data.reasonOfPendency;
	}, function(error) {
		console.log(error);
	});
	// SAA Name
	$http.get("getCciNameList").
	then(function(result){
		$scope.institutionNameList = result.data;
	},function(error){
		console.log(error);
	});
	
	//change password
	$('#changePasswordModal').on('hidden.bs.modal', function(){
		$scope.password={
			currentPw:null,
			newPw:null,
			confirmPw:null
		};
		document.getElementById('changePasswordError').innerHTML ="";
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
		//console.log("user area: " + result.data.areaName);
		$scope.selectedDistrict = result.data;
	}, function(error) {
		console.log(error);
	});

	$scope.logout = function() {
		$http.post('logout').then(function(result) {
			console.log(result);
			if (result.status == 200) {
				window.location ="login";
			}
		}, function(error) {
			console.log(error);
			if (error.status == -1) {
				alert("Server error.");
			}
		});
	};
	
	$("#datepicker").datepicker({
		dateFormat : "dd-mm-yy",
		maxDate : lastDay,
		minDate : firstDay,
		onSelect : function(date) {
			$scope.saaForm.monthyear = date;
		}
	});

	$("#trainingDatepicker").datepicker({
		dateFormat : "dd-mm-yy",
		maxDate : lastDay,
		minDate : firstDay,
		onSelect : function(date) {
			$scope.saaForm.h1dDate = date;
		}
	});
	 
	 $("#dataOfVisit1").on("click", function(){
		$("#dataOfVisit").focus();
	 });
	 
//	 var todaysDate = new Date();
//	 var lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth(), 0);
//	 var lastDayForJ=new Date(todaysDate.getFullYear(), todaysDate.getMonth(), -60);
//     var firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 1);
//     var currentday=new Date();
     
	 $("#dataOfVisit").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay
		});
	$scope.showHideBasedOnFlag=function(id,value){
		var idValue=document.getElementById(id).value;
		if(idValue>0)
			return true;
		else if (idValue == 0 || idValue == null) {
			$scope.saaForm[value] = null;
			return false;
		}
			
	};
	$scope.messageField1="";
	$scope.messageField2="";
	var commonFunctionBodyLessThanEqual = function(firstInput, secondInput, bgc,colorId) {

		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			
			bgc.value=null;
			$scope.saaForm[colorId] = null;
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
	var commonFunctionBodyLessThanEqualG5 = function(firstInput, secondInput, bgc1,bgc2,bgc3,bgc4) {

		if (firstInput < secondInput) {
			bgc1.style.setProperty("background-color", "#DC143C", "important");
			bgc1.style.setProperty("color", "#FFFAF0", "important");
			bgc1.style.setProperty("border-color", "red", "important");
			
			bgc2.style.setProperty("background-color", "#DC143C", "important");
			bgc2.style.setProperty("color", "#FFFAF0", "important");
			bgc2.style.setProperty("border-color", "red", "important");
			
			bgc3.style.setProperty("background-color", "#DC143C", "important");
			bgc3.style.setProperty("color", "#FFFAF0", "important");
			bgc3.style.setProperty("border-color", "red", "important");
			
			bgc4.style.setProperty("background-color", "#DC143C", "important");
			bgc4.style.setProperty("color", "#FFFAF0", "important");
			bgc4.style.setProperty("border-color", "red", "important");
			
			$('#ErrAlertModal').modal('show');
			window.setTimeout(function() {
				bgc1.focus();
				
			}, 0);
			return false;
		} else {
			bgc1.style.removeProperty("background-color", "#DC143C", "important");
			bgc1.style.removeProperty("color", "#FFFAF0", "important");
			bgc1.style.removeProperty("border-color", "red", "important");
			
			bgc2.style.removeProperty("background-color", "#DC143C", "important");
			bgc2.style.removeProperty("color", "#FFFAF0", "important");
			bgc2.style.removeProperty("border-color", "red", "important");
			
			bgc3.style.removeProperty("background-color", "#DC143C", "important");
			bgc3.style.removeProperty("color", "#FFFAF0", "important");
			bgc3.style.removeProperty("border-color", "red", "important");
			
			bgc4.style.removeProperty("background-color", "#DC143C", "important");
			bgc4.style.removeProperty("color", "#FFFAF0", "important");
			bgc4.style.removeProperty("border-color", "red", "important");

			return true;
		}

	};
	var removeCommonFunctionBodyLessThanEqualG5 = function(firstInput, secondInput, bgc1,bgc2,bgc3,bgc4) {

		if (firstInput >= secondInput) {
			bgc1.style.removeProperty("background-color", "#DC143C", "important");
			bgc1.style.removeProperty("color", "#FFFAF0", "important");
			bgc1.style.removeProperty("border-color", "red", "important");
			
			bgc2.style.removeProperty("background-color", "#DC143C", "important");
			bgc2.style.removeProperty("color", "#FFFAF0", "important");
			bgc2.style.removeProperty("border-color", "red", "important");
			
			bgc3.style.removeProperty("background-color", "#DC143C", "important");
			bgc3.style.removeProperty("color", "#FFFAF0", "important");
			bgc3.style.removeProperty("border-color", "red", "important");
			
			bgc4.style.removeProperty("background-color", "#DC143C", "important");
			bgc4.style.removeProperty("color", "#FFFAF0", "important");
			bgc4.style.removeProperty("border-color", "red", "important");
		}

	};
	var removeCheckG51AwithF3=function(){
		var firstInput=Number(document.getElementById("f3_GrandTotal").value - 0);
		var fstInput = Number(document.getElementById("g5_1LessThan60").value - 0);
		var secInput = Number(document.getElementById("g5_1greaterThan60").value - 0);
		var thirdInput = Number(document.getElementById("g5_1LessThan120").value - 0);
		var fourthInput = Number(document.getElementById("g5_1GreaterThan120").value - 0);
		
		var bgc1 = document.getElementById("g5_1LessThan60");
		var bgc2 = document.getElementById("g5_1greaterThan60");
		var bgc3 = document.getElementById("g5_1LessThan120");
		var bgc4 = document.getElementById("g5_1GreaterThan120");
		
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0)+Number(fourthInput-0);
		return removeCommonFunctionBodyLessThanEqualG5(firstInput, secondInput, bgc1,bgc2,bgc3,bgc4);
	};
	
	$("input[type='number']").keyup(function() {
		removeCheckG51AwithF3();removeNegetiveColor();
	});

	$scope.checkG51AwithF3=function(){
		var firstInput=Number(document.getElementById("f3_GrandTotal").value - 0);
		var fstInput = Number(document.getElementById("g5_1LessThan60").value - 0);
		var secInput = Number(document.getElementById("g5_1greaterThan60").value - 0);
		var thirdInput = Number(document.getElementById("g5_1LessThan120").value - 0);
		var fourthInput = Number(document.getElementById("g5_1GreaterThan120").value - 0);
		
		var bgc1 = document.getElementById("g5_1LessThan60");
		var bgc2 = document.getElementById("g5_1greaterThan60");
		var bgc3 = document.getElementById("g5_1LessThan120");
		var bgc4 = document.getElementById("g5_1GreaterThan120");
		
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0)+Number(fourthInput-0);
		$scope.messageField1="Total number of G.5.1.a. orphaned/abandoned children";
		$scope.messageField2="F.3.No. of orphaned/abandoned children on the last day of the reporting month.[value="+firstInput+"]";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqualG5(firstInput, secondInput, bgc1,bgc2,bgc3,bgc4);
	
	};
	
	//a2a for submit save check
    $scope.checkSaveSubmitBoysA2A5ZerotoTwo = function() {
		var bgc = document.getElementById('a2_A5BoysZeroToTwo');
		var firstInput = Number(document.getElementById("a2_A4BoysZeroToTwo").value - 0);
		var secondInput = Number(document.getElementById("a2_A5BoysZeroToTwo").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5BoysZeroToTwo');
	};
	$scope.checkSaveSubmitBoysA2A5TwoToFour = function() {
		var bgc = document.getElementById('a2_A5BoysTwoToFour');
		var firstInput = Number(document.getElementById("a2_A4BoysTwoToFour").value - 0);
		var secondInput = Number(document.getElementById("a2_A5BoysTwoToFour").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5BoysTwoToFour');
	};
	$scope.checkSaveSubmitBoysA2A5FourToSix = function() {
		var bgc = document.getElementById('a2_A5BoysFourToSix');
		var firstInput = Number(document.getElementById("a2_A4BoysFourToSix").value - 0);
		var secondInput = Number(document.getElementById("a2_A5BoysFourToSix").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5BoysFourToSix');
	};
	$scope.checkSaveSubmitBoysA2A5GreaterThanSix = function() {
		var bgc = document.getElementById('a2_A5BoysGreaterThanSix');
		var firstInput = Number(document.getElementById("a2_A4BoysGreaterThanSix").value - 0);
		var secondInput = Number(document.getElementById("a2_A5BoysGreaterThanSix").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5BoysGreaterThanSix');
	};

	$scope.checkSaveSubmitGirlsA2A5ZerotoTwo = function() {
		var bgc = document.getElementById('a2_A5GirlsZeroToTwo');
		var firstInput = Number(document.getElementById("a2_A4GirlsZeroToTwo").value - 0);
		var secondInput = Number(document.getElementById("a2_A5GirlsZeroToTwo").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5GirlsZeroToTwo');
	};
	$scope.checkSaveSubmitGirlsA2A5TwoToFour = function() {
		var bgc = document.getElementById('a2_A5GirlsTwoToFour');
		var firstInput = Number(document.getElementById("a2_A4GirlsTwoToFour").value - 0);
		var secondInput = Number(document.getElementById("a2_A5GirlsTwoToFour").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5GirlsTwoToFour');
	};
	$scope.checkSaveSubmitGirlsA2A5FourToSix = function() {
		var bgc = document.getElementById('a2_A5GirlsFourToSix');
		var firstInput = Number(document.getElementById("a2_A4GirlsFourToSix").value - 0);
		var secondInput = Number(document.getElementById("a2_A5GirlsFourToSix").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5GirlsFourToSix');
	};
	$scope.checkSaveSubmitGirlsA2A5GreaterThanSix = function() {
		var bgc = document.getElementById('a2_A5GirlsGreaterThanSix');
		var firstInput = Number(document.getElementById("a2_A4GirlsGreaterThanSix").value - 0);
		var secondInput = Number(document.getElementById("a2_A5GirlsGreaterThanSix").value - 0);
		$scope.messageField1="Total number of A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)";
		$scope.messageField2="total number of A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc, 'a2_A5GirlsGreaterThanSix');
	};
	
	
	// -- A section validation starts
	
	$scope.check1AA1for0To2Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1BoysZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysZeroToTwo").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Boys(0-2)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Boys(0-2)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check1AA1for2To4Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1BoysTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysTwoToFour").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Boys(2-4)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Boys(2-4)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check1AA1for4To6Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1BoysFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysFourToSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Boys(4-6)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Boys(4-6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check1AA1forGreaterThan6Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1BoysGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysGreaterThanSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Boys(>6)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Boys(>6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	
	$scope.check1AA1for0To2Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1GirlsZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsZeroToTwo").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Girls(0-2)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Girls(0-2)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check1AA1for2To4Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1GirlsTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsTwoToFour").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Girls(2-4)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Girls(2-4)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check1AA1for4To6Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1GirlsFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsFourToSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Girls(4-6)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Girls(4-6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check1AA1forGreaterThan6Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_1GirlsGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsGreaterThanSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.1)+(A.1.1)+(A.1.a.1) : Girls(>6)";
		$scope.messageField2="A.1. No. of adoptions (u/s 58/59) - in country : Girls(>6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	
	// A Section 1 validation ends

	$scope.check2AA1for0To2Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2BoysZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysZeroToTwo").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Boys(0-2)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(0-2)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check2AA1for2To4Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2BoysTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysTwoToFour").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Boys(2-4)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(2-4)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check2AA1for4To6Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2BoysFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysFourToSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Boys(4-6)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country: Boys(4-6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check2AA1forGreaterThan6Boys=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2BoysGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysGreaterThanSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Boys(>6)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(>6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	
	$scope.check2AA1for0To2Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2GirlsZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsZeroToTwo").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Girls(0-2)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(0-2)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check2AA1for2To4Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2GirlsTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsTwoToFour").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Girls(2-4)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(2-4)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check2AA1for4To6Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2GirlsFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsFourToSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Girls(4-6)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(4-6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	$scope.check2AA1forGreaterThan6Girls=function(colorId){
		var bgc = document.getElementById(colorId);
		var firstInput=Number(document.getElementById("a_2GirlsGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsGreaterThanSix").value - 0);
				
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="Sum of (A.a.2)+(A.1.2)+(A.1.a.2) : Girls(>6)";
		$scope.messageField2="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(>6)";
		$scope.alertMessage ="value should be less than or equal to";
		return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
	};
	// test for All Reverse Testing  starts
	
	var commonFunctionBodyLessThanEqualAll = function(firstInput, secondInput,id1,id2,id3) {

		if (firstInput < secondInput) {
			document.getElementById(id1).style.setProperty("background-color", "#DC143C", "important");
			document.getElementById(id1).style.setProperty("color", "#FFFAF0", "important");
			document.getElementById(id1).style.setProperty("border-color", "red", "important");
			document.getElementById(id1).value=null;
			$scope.saaForm[id1] = null;
			
			document.getElementById(id2).style.setProperty("background-color", "#DC143C", "important");
			document.getElementById(id2).style.setProperty("color", "#FFFAF0", "important");
			document.getElementById(id2).style.setProperty("border-color", "red", "important");
			document.getElementById(id2).value=null;
			$scope.saaForm[id2] = null;
			
			document.getElementById(id3).style.setProperty("background-color", "#DC143C", "important");
			document.getElementById(id3).style.setProperty("color", "#FFFAF0", "important");
			document.getElementById(id3).style.setProperty("border-color", "red", "important");
			document.getElementById(id3).value=null;
			$scope.saaForm[id3] = null;
			
			$('#ErrAlertModal').modal('show');
			return false;
		} else {
			
			document.getElementById(id1).style.removeProperty("background-color", "#DC143C", "important");
			document.getElementById(id1).style.removeProperty("color", "#FFFAF0", "important");
			document.getElementById(id1).style.removeProperty("border-color", "red", "important");
			document.getElementById(id2).style.removeProperty("background-color", "#DC143C", "important");
			document.getElementById(id2).style.removeProperty("color", "#FFFAF0", "important");
			document.getElementById(id2).style.removeProperty("border-color", "red", "important");
			document.getElementById(id3).style.removeProperty("background-color", "#DC143C", "important");
			document.getElementById(id3).style.removeProperty("color", "#FFFAF0", "important");
			document.getElementById(id3).style.removeProperty("border-color", "red", "important");

			return true;
		}

	};
	
	$scope.checkAll1Boys0to2=function(){
		var firstInput=Number(document.getElementById("a_1BoysZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysZeroToTwo").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Boys(0-2)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Boys(0-2)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1BoysZeroToTwo','a1_1BoysZeroToTwo','a1_A1BoysZeroToTwo');
		};
		$scope.checkAll1Boys2to4=function(){
		var firstInput=Number(document.getElementById("a_1BoysTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysTwoToFour").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Boys(2-4)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Boys(2-4)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1BoysTwoToFour','a1_1BoysTwoToFour','a1_A1BoysTwoToFour');
		};
		$scope.checkAll1Boys4to6=function(){
		var firstInput=Number(document.getElementById("a_1BoysFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysFourToSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Boys(4-6)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Boys(4-6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1BoysFourToSix','a1_1BoysFourToSix','a1_A1BoysFourToSix');
		};
		$scope.checkAll1BoysgreaterThan6=function(){
		var firstInput=Number(document.getElementById("a_1BoysGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1BoysGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_1BoysGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1BoysGreaterThanSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Boys(>6)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Boys(>6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1BoysGreaterThanSix','a1_1BoysGreaterThanSix','a1_A1BoysGreaterThanSix');
		};
		$scope.checkAll1Girls0to2=function(){
		var firstInput=Number(document.getElementById("a_1GirlsZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsZeroToTwo").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Girls(0-2)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Girls(0-2)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1GirlsZeroToTwo','a1_1GirlsZeroToTwo','a1_A1GirlsZeroToTwo');
		};
		$scope.checkAll1Girls2to4=function(){
		var firstInput=Number(document.getElementById("a_1GirlsTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsTwoToFour").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Girls(2-4)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Girls(2-4)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1GirlsTwoToFour','a1_1GirlsTwoToFour','a1_A1GirlsTwoToFour');
		};
		$scope.checkAll1Girls4to6=function(){
		var firstInput=Number(document.getElementById("a_1GirlsFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsFourToSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Girls(4-6)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Girls(4-6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1GirlsFourToSix','a1_1GirlsFourToSix','a1_A1GirlsFourToSix');
		};
		$scope.checkAll1GirlsgreaterThan6=function(){
		var firstInput=Number(document.getElementById("a_1GirlsGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A1GirlsGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_1GirlsGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A1GirlsGreaterThanSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.1. No. of adoptions (u/s 58/59) - in country : Girls(>6)";
		$scope.messageField2="sum of (A.a.1 , A.1.1, A.1.a.1) of in country : Girls(>6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A1GirlsGreaterThanSix','a1_1GirlsGreaterThanSix','a1_A1GirlsGreaterThanSix');
		};
		///

		$scope.checkAll2Boys0to2=function(){
		var firstInput=Number(document.getElementById("a_2BoysZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysZeroToTwo").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(0-2)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Boys(0-2)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2BoysZeroToTwo','a1_2BoysZeroToTwo','a1_A2BoysZeroToTwo');
		};
		$scope.checkAll2Boys2to4=function(){
		var firstInput=Number(document.getElementById("a_2BoysTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysTwoToFour").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(2-4)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Boys(2-4)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2BoysTwoToFour','a1_2BoysTwoToFour','a1_A2BoysTwoToFour');
		};
		$scope.checkAll2Boys4to6=function(){
		var firstInput=Number(document.getElementById("a_2BoysFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysFourToSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(4-6)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Boys(4-6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2BoysFourToSix','a1_2BoysFourToSix','a1_A2BoysFourToSix');
		};
		$scope.checkAll2BoysgreaterThan6=function(){
		var firstInput=Number(document.getElementById("a_2BoysGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2BoysGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_2BoysGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2BoysGreaterThanSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Boys(>6)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Boys(>6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2BoysGreaterThanSix','a1_2BoysGreaterThanSix','a1_A2BoysGreaterThanSix');
		};
		$scope.checkAll2Girls0to2=function(){
		var firstInput=Number(document.getElementById("a_2GirlsZeroToTwo").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsZeroToTwo").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsZeroToTwo").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsZeroToTwo").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(0-2)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Girls(0-2)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2GirlsZeroToTwo','a1_2GirlsZeroToTwo','a1_A2GirlsZeroToTwo');
		};
		$scope.checkAll2Girls2to4=function(){
		var firstInput=Number(document.getElementById("a_2GirlsTwoToFour").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsTwoToFour").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsTwoToFour").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsTwoToFour").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(2-4)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Girls(2-4)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2GirlsTwoToFour','a1_2GirlsTwoToFour','a1_A2GirlsTwoToFour');
		};
		$scope.checkAll2Girls4to6=function(){
		var firstInput=Number(document.getElementById("a_2GirlsFourToSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsFourToSix").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsFourToSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsFourToSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(4-6)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Girls(4-6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2GirlsFourToSix','a1_2GirlsFourToSix','a1_A2GirlsFourToSix');
		};
		$scope.checkAll2GirlsgreaterThan6=function(){
		var firstInput=Number(document.getElementById("a_2GirlsGreaterThanSix").value - 0);
		var fstInput = Number(document.getElementById("a_A2GirlsGreaterThanSix").value - 0);
		var secInput = Number(document.getElementById("a1_2GirlsGreaterThanSix").value - 0);
		var thirdInput = Number(document.getElementById("a1_A2GirlsGreaterThanSix").value - 0);
		var secondInput=Number(fstInput-0)+Number(secInput-0)+Number(thirdInput-0);
		$scope.messageField1="A.2. No. of adoptions (u/s 58/59) - inter country : Girls(>6)";
		$scope.messageField2="sum of (A.a.2 , A.1.2 , A.1.a.2) of inter country : Girls(>6)";
		$scope.alertMessage ="value should be greater than";
		return commonFunctionBodyLessThanEqualAll(firstInput, secondInput,'a_A2GirlsGreaterThanSix','a1_2GirlsGreaterThanSix','a1_A2GirlsGreaterThanSix');
		};
	
	//reverse Testing Ends
	//A4-5 Test starts
		//--------
		
		$scope.checkA2s4with5=function(fourId,fiveId,msg,msg1){
			var bgc = document.getElementById(fiveId);
			var firstInput=Number(document.getElementById(fourId).value - 0);
			var secondInput=Number(document.getElementById(fiveId).value - 0);
			$scope.messageField1="Total number of "+msg;
			$scope.messageField2="total number of "+msg1;
			$scope.alertMessage ="value should be less than or equal to";
			
			if (firstInput < secondInput) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				
				bgc.value=null;
				$scope.saaForm[fiveId] = null;
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
		//A.2.1 starts

		$scope.checkSectionA2Boys1Zeroto2 = function(currentId, testId) {
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Boys(0-2)', 'A.2.1. No. of pre-adoption foster care - in state : Boys(0-2)');
			$scope.checkA2s4with5('a2_4BoysZeroToTwo', 'a2_5BoysZeroToTwo', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(0-2)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(0-2)');
			$scope.checkA2s4with5('a2_A4BoysZeroToTwo', 'a2_A5BoysZeroToTwo', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)');
		};
		$scope.checkSectionA2Boys1twoTofour = function(currentId, testId) {
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Boys(2-4)', 'A.2.1. No. of pre-adoption foster care - in state : Boys(2-4)');
			$scope.checkA2s4with5('a2_4BoysTwoToFour', 'a2_5BoysTwoToFour', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(2-4)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(2-4)');
			$scope.checkA2s4with5('a2_A4BoysTwoToFour', 'a2_A5BoysTwoToFour', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)');
		};
		$scope.checkSectionA2Boys1fourTosix = function(currentId, testId) {
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Boys(4-6)', 'A.2.1. No. of pre-adoption foster care - in state : Boys(4-6)');
			$scope.checkA2s4with5('a2_4BoysFourToSix', 'a2_5BoysFourToSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(4-6)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(4-6)');
			$scope.checkA2s4with5('a2_A4BoysFourToSix', 'a2_A5BoysFourToSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)');
		};
		$scope.checkSectionA2Boys1greaterThansix = function(currentId, testId) {
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Boys(>6)', 'A.2.1. No. of pre-adoption foster care - in state : Boys(>6)');
			$scope.checkA2s4with5('a2_4BoysGreaterThanSix', 'a2_5BoysGreaterThanSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(>6)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(>6)');
			$scope.checkA2s4with5('a2_A4BoysGreaterThanSix', 'a2_A5BoysGreaterThanSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)');
		};
		//
		$scope.checkSectionA2Girls1Zeroto2 = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Girls(0-2)', 'A.2.1. No. of pre-adoption foster care - in state : Girls(0-2)');
			$scope.checkA2s4with5('a2_4GirlsZeroToTwo', 'a2_5GirlsZeroToTwo', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(0-2)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(0-2)');
			$scope.checkA2s4with5('a2_A4GirlsZeroToTwo', 'a2_A5GirlsZeroToTwo', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)');
	
		};
		$scope.checkSectionA2Girls1twoTofour = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Girls(2-4)', 'A.2.1. No. of pre-adoption foster care - in state : Girls(2-4)');
			$scope.checkA2s4with5('a2_4GirlsTwoToFour', 'a2_5GirlsTwoToFour', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(2-4)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(2-4)');
			$scope.checkA2s4with5('a2_A4GirlsTwoToFour', 'a2_A5GirlsTwoToFour', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)');
	
		};
		$scope.checkSectionA2Girls1fourTosix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Girls(4-6)', 'A.2.1. No. of pre-adoption foster care - in state : Girls(4-6)');
			$scope.checkA2s4with5('a2_4GirlsFourToSix', 'a2_5GirlsFourToSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(4-6)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(4-6)');
			$scope.checkA2s4with5('a2_A4GirlsFourToSix', 'a2_A5GirlsFourToSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)');
	
		};
		$scope.checkSectionA2Girls1greaterThansix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.1. No. of pre-adoption foster care - in state : Girls(>6)', 'A.2.1. No. of pre-adoption foster care - in state : Girls(>6)');
			$scope.checkA2s4with5('a2_4GirlsGreaterThanSix', 'a2_5GirlsGreaterThanSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(>6)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(>6)');
			$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix', 'a2_A5GirlsGreaterThanSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)');
	
		};
		// for A2
		$scope.checkSectionA2Boys2Zeroto2 = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Boys(0-2)', 'A.2.2. No. of pre-adoption foster care - out state : Boys(0-2)');
			$scope.checkA2s4with5('a2_4BoysZeroToTwo', 'a2_5BoysZeroToTwo', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(0-2)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(0-2)');
			$scope.checkA2s4with5('a2_A4BoysZeroToTwo', 'a2_A5BoysZeroToTwo', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)');
	
		};
		$scope.checkSectionA2Boys2twoTofour = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Boys(2-4)', 'A.2.2. No. of pre-adoption foster care - out state : Boys(2-4)');
			$scope.checkA2s4with5('a2_4BoysTwoToFour', 'a2_5BoysTwoToFour', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(2-4)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(2-4)');
			$scope.checkA2s4with5('a2_A4BoysTwoToFour', 'a2_A5BoysTwoToFour', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)');
	
		};
		$scope.checkSectionA2Boys2fourTosix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Boys(4-6)', 'A.2.2. No. of pre-adoption foster care - out state : Boys(4-6)');
			$scope.checkA2s4with5('a2_4BoysFourToSix', 'a2_5BoysFourToSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(4-6)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(4-6)');
			$scope.checkA2s4with5('a2_A4BoysFourToSix', 'a2_A5BoysFourToSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)');
	
		};
		$scope.checkSectionA2Boys2greaterThansix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Boys(>6)', 'A.2.2. No. of pre-adoption foster care - out state : Boys(>6)');
			$scope.checkA2s4with5('a2_4BoysGreaterThanSix', 'a2_5BoysGreaterThanSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(>6)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(>6)');
			$scope.checkA2s4with5('a2_A4BoysGreaterThanSix', 'a2_A5BoysGreaterThanSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)');
	
		};
		//
		$scope.checkSectionA2Girls2Zeroto2 = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Girls(0-2)', 'A.2.2. No. of pre-adoption foster care - out state : Girls(0-2)');
			$scope.checkA2s4with5('a2_4GirlsZeroToTwo', 'a2_5GirlsZeroToTwo', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(0-2)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(0-2)');
			$scope.checkA2s4with5('a2_A4GirlsZeroToTwo', 'a2_A5GirlsZeroToTwo', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)');
	
		};
		$scope.checkSectionA2Girls2twoTofour = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Girls(2-4)', 'A.2.2. No. of pre-adoption foster care - out state : Girls(2-4)');
			$scope.checkA2s4with5('a2_4GirlsTwoToFour', 'a2_5GirlsTwoToFour', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(2-4)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(2-4)');
			$scope.checkA2s4with5('a2_A4GirlsTwoToFour', 'a2_A5GirlsTwoToFour', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)');
	
		};
		$scope.checkSectionA2Girls2fourTosix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Girls(4-6)', 'A.2.2. No. of pre-adoption foster care - out state : Girls(4-6)');
			$scope.checkA2s4with5('a2_4GirlsFourToSix', 'a2_5GirlsFourToSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(4-6)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(4-6)');
			$scope.checkA2s4with5('a2_A4GirlsFourToSix', 'a2_A5GirlsFourToSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)');
	
		};
		$scope.checkSectionA2Girls2greaterThansix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.2. No. of pre-adoption foster care - out state : Girls(>6)', 'A.2.2. No. of pre-adoption foster care - out state : Girls(>6)');
			$scope.checkA2s4with5('a2_4GirlsGreaterThanSix', 'a2_5GirlsGreaterThanSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(>6)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(>6)');
			$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix', 'a2_A5GirlsGreaterThanSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)');
	
		};
	
		// For A3
	
		$scope.checkSectionA2Boys3Zeroto2 = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(0-2)', 'A.2.3. No. of pre-adoptions foster care - inter country : Boys(0-2)');
			$scope.checkA2s4with5('a2_4BoysZeroToTwo', 'a2_5BoysZeroToTwo', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(0-2)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(0-2)');
			$scope.checkA2s4with5('a2_A4BoysZeroToTwo', 'a2_A5BoysZeroToTwo', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)');
	
		};
		$scope.checkSectionA2Boys3twoTofour = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(2-4)', 'A.2.3. No. of pre-adoptions foster care - inter country : Boys(2-4)');
			$scope.checkA2s4with5('a2_4BoysTwoToFour', 'a2_5BoysTwoToFour', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(2-4)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(2-4)');
			$scope.checkA2s4with5('a2_A4BoysTwoToFour', 'a2_A5BoysTwoToFour', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)');
	
		};
		$scope.checkSectionA2Boys3fourTosix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(4-6)', 'A.2.3. No. of pre-adoptions foster care - inter country : Boys(4-6)');
			$scope.checkA2s4with5('a2_4BoysFourToSix', 'a2_5BoysFourToSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(4-6)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(4-6)');
			$scope.checkA2s4with5('a2_A4BoysFourToSix', 'a2_A5BoysFourToSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)');
	
		};
		$scope.checkSectionA2Boys3greaterThansix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(>6)', 'A.2.3. No. of pre-adoptions foster care - inter country : Boys(>6)');
			$scope.checkA2s4with5('a2_4BoysGreaterThanSix', 'a2_5BoysGreaterThanSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Boys(>6)', 'A.2.4. Total no. of pre-adoptions foster care : Boys(>6)');
			$scope.checkA2s4with5('a2_A4BoysGreaterThanSix', 'a2_A5BoysGreaterThanSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)');
	
		};
		//
		$scope.checkSectionA2Girls3Zeroto2 = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(0-2)', 'A.2.3. No. of pre-adoptions foster care - inter country : Girls(0-2)');
			$scope.checkA2s4with5('a2_4GirlsZeroToTwo', 'a2_5GirlsZeroToTwo', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(0-2)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(0-2)');
			$scope.checkA2s4with5('a2_A4GirlsZeroToTwo', 'a2_A5GirlsZeroToTwo', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)');
	
		};
		$scope.checkSectionA2Girls3twoTofour = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(2-4)', 'A.2.3. No. of pre-adoptions foster care - inter country : Girls(2-4)');
			$scope.checkA2s4with5('a2_4GirlsTwoToFour', 'a2_5GirlsTwoToFour', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(2-4)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(2-4)');
			$scope.checkA2s4with5('a2_A4GirlsTwoToFour', 'a2_A5GirlsTwoToFour', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)');
	
		};
		$scope.checkSectionA2Girls3fourTosix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(4-6)', 'A.2.3. No. of pre-adoptions foster care - inter country : Girls(4-6)');
			$scope.checkA2s4with5('a2_4GirlsFourToSix', 'a2_5GirlsFourToSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(4-6)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(4-6)');
			$scope.checkA2s4with5('a2_A4GirlsFourToSix', 'a2_A5GirlsFourToSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)');
	
		};
		$scope.checkSectionA2Girls3greaterThansix = function(currentId, testId) {
	
			$scope.checkA2s4with5(currentId, testId, 'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(>6)', 'A.2.3. No. of pre-adoptions foster care - inter country : Girls(>6)');
			$scope.checkA2s4with5('a2_4GirlsGreaterThanSix', 'a2_5GirlsGreaterThanSix', 'A.2.5. No. of pre-adoption foster care through SAA-CCIs linkages : Girls(>6)', 'A.2.4. Total no. of pre-adoptions foster care : Girls(>6)');
			$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix', 'a2_A5GirlsGreaterThanSix', 'A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)', 'A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)');
	
		};
		
		
		//A.2.1 ends
		//-------------------------------------------------------------------------------
		//A.2.1.A starts
		$scope.checkSectionA2ABoys1Zeroto2=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Boys(0-2)','A.2.1. No. of pre-adoption foster care - in state : Boys(0-2)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysZeroToTwo','a2_A5BoysZeroToTwo','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys1twoTofour=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Boys(2-4)','A.2.1. No. of pre-adoption foster care - in state : Boys(2-4)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysTwoToFour','a2_A5BoysTwoToFour','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys1fourTosix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Boys(4-6)','A.2.1. No. of pre-adoption foster care - in state : Boys(4-6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysFourToSix','a2_A5BoysFourToSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys1greaterThansix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Boys(>6)','A.2.1. No. of pre-adoption foster care - in state : Boys(>6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysGreaterThanSix','a2_A5BoysGreaterThanSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)')){return false;}
			else {
				return true;
			};
		};
		//
		$scope.checkSectionA2AGirls1Zeroto2=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Girls(0-2)','A.2.1. No. of pre-adoption foster care - in state : Girls(0-2)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsZeroToTwo','a2_A5GirlsZeroToTwo','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls1twoTofour=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Girls(2-4)','A.2.1. No. of pre-adoption foster care - in state : Girls(2-4)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsTwoToFour','a2_A5GirlsTwoToFour','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls1fourTosix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Girls(4-6)','A.2.1. No. of pre-adoption foster care - in state : Girls(4-6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsFourToSix','a2_A5GirlsFourToSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls1greaterThansix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.1. No. of pre-adoption foster care - in state : Girls(>6)','A.2.1. No. of pre-adoption foster care - in state : Girls(>6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix','a2_A5GirlsGreaterThanSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)')){return false;}
			else {
				return true;
			};
		};
		//for A2
		$scope.checkSectionA2ABoys2Zeroto2=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Boys(0-2)','A.2.2. No. of pre-adoption foster care - out state : Boys(0-2)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysZeroToTwo','a2_A5BoysZeroToTwo','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys2twoTofour=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Boys(2-4)','A.2.2. No. of pre-adoption foster care - out state : Boys(2-4)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysTwoToFour','a2_A5BoysTwoToFour','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys2fourTosix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Boys(4-6)','A.2.2. No. of pre-adoption foster care - out state : Boys(4-6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysFourToSix','a2_A5BoysFourToSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys2greaterThansix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Boys(>6)','A.2.2. No. of pre-adoption foster care - out state : Boys(>6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysGreaterThanSix','a2_A5BoysGreaterThanSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)')){return false;}
			else {
				return true;
			};
		};
		//
		$scope.checkSectionA2AGirls2Zeroto2=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Girls(0-2)','A.2.2. No. of pre-adoption foster care - out state : Girls(0-2)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsZeroToTwo','a2_A5GirlsZeroToTwo','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls2twoTofour=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Girls(2-4)','A.2.2. No. of pre-adoption foster care - out state : Girls(2-4)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsTwoToFour','a2_A5GirlsTwoToFour','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls2fourTosix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Girls(4-6)','A.2.2. No. of pre-adoption foster care - out state : Girls(4-6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsFourToSix','a2_A5GirlsFourToSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls2greaterThansix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.2. No. of pre-adoption foster care - out state : Girls(>6)','A.2.2. No. of pre-adoption foster care - out state : Girls(>6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix','a2_A5GirlsGreaterThanSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)')){return false;}
			else {
				return true;
			};
		};
		
//		For A3
		
		$scope.checkSectionA2ABoys3Zeroto2=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(0-2)','A.2.3. No. of pre-adoptions foster care - inter country : Boys(0-2)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysZeroToTwo','a2_A5BoysZeroToTwo','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(0-2)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(0-2)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys3twoTofour=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(2-4)','A.2.3. No. of pre-adoptions foster care - inter country : Boys(2-4)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysTwoToFour','a2_A5BoysTwoToFour','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(2-4)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(2-4)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys3fourTosix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(4-6)','A.2.3. No. of pre-adoptions foster care - inter country : Boys(4-6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysFourToSix','a2_A5BoysFourToSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(4-6)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(4-6)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2ABoys3greaterThansix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Boys(>6)','A.2.3. No. of pre-adoptions foster care - inter country : Boys(>6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4BoysGreaterThanSix','a2_A5BoysGreaterThanSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Boys(>6)','A.2.a.4. Total no. of pre-adoptions foster care : Boys(>6)')){return false;}
			else {
				return true;
			};
		};
		//
		$scope.checkSectionA2AGirls3Zeroto2=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(0-2)','A.2.3. No. of pre-adoptions foster care - inter country : Girls(0-2)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsZeroToTwo','a2_A5GirlsZeroToTwo','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(0-2)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(0-2)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls3twoTofour=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(2-4)','A.2.3. No. of pre-adoptions foster care - inter country : Girls(2-4)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsTwoToFour','a2_A5GirlsTwoToFour','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(2-4)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(2-4)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls3fourTosix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(4-6)','A.2.3. No. of pre-adoptions foster care - inter country : Girls(4-6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsFourToSix','a2_A5GirlsFourToSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(4-6)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(4-6)')){return false;}
			else {
				return true;
			};
		};
		$scope.checkSectionA2AGirls3greaterThansix=function(currentId,testId){

			if(!$scope.checkA2s4with5(currentId,testId,'A.2.a.3. No. of pre-adoptions foster care - inter country : Girls(>6)','A.2.3. No. of pre-adoptions foster care - inter country : Girls(>6)')){return false;}
			else if(!$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix','a2_A5GirlsGreaterThanSix','A.2.a.5. No. of pre-adoption foster care through SAA CCIs linkages : Girls(>6)','A.2.a.4. Total no. of pre-adoptions foster care : Girls(>6)')){return false;}
			else {
				return true;
			};
		};
		
//		A.2.1.A. ends
		
	//A4-5 Test ends	
	// c And cA validation starts
		
		$scope.checkCwithCa=function(fourId,fiveId,msg,msg1){
			var bgc = document.getElementById(fiveId);
			var firstInput=Number(document.getElementById(fourId).value - 0);
			var secondInput=Number(document.getElementById(fiveId).value - 0);
			$scope.messageField1="Total number of "+msg;
			$scope.messageField2="total number of "+msg1;
			$scope.alertMessage ="value should be less than or equal to";
			
			if (firstInput < secondInput) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				
				bgc.value=null;
				$scope.saaForm[fiveId] = null;
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
		
		
//	c and cA validation Ends	
//		D with E starts
		$scope.checkDwithE=function(fourId,fiveId,msg,msg1,currentId){
			var bgc = document.getElementById(currentId);
			var firstInput=Number(document.getElementById(fourId).value - 0);
			var secondInput=Number(document.getElementById(fiveId).value - 0);
			$scope.messageField1="Total number of "+msg;
			$scope.messageField2="total number of "+msg1;
			$scope.alertMessage ="value should be less than or equal to";
			
			if (firstInput < secondInput) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				
				bgc.value=null;
				$scope.saaForm[currentId] = null;
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
		
		$scope.checkDawithEa=function(fourId,fiveId,msg,msg1,currentId){
			var bgc = document.getElementById(currentId);
			var firstInput=Number(document.getElementById(fourId).value - 0);
			var secondInput=Number(document.getElementById(fiveId).value - 0);
			$scope.messageField1="Total number of "+msg;
			$scope.messageField2="total number of "+msg1;
			$scope.alertMessage ="value should be less than or equal to";
			
			if (firstInput < secondInput) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				
				bgc.value=null;
				$scope.saaForm[currentId] = null;
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
		
		
		$scope.checkEwithEa=function(fourId,fiveId,msg,msg1){
			var bgc = document.getElementById(fiveId);
			var firstInput=Number(document.getElementById(fourId).value - 0);
			var secondInput=Number(document.getElementById(fiveId).value - 0);
			$scope.messageField1="Total number of "+msg;
			$scope.messageField2="total number of "+msg1;
			$scope.alertMessage ="value should be less than or equal to";
			
			if (firstInput < secondInput) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				
				bgc.value=null;
				$scope.saaForm[fiveId] = null;
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
		//// for E
		$scope.checkSectionE1BoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(0-2)','E.1. Placed in pre-adoption foster care (in-country) : Boys(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysZeroToTwo','e7_BoysZeroToTwo','E.7. Total children moved out in the reporting month : Boys(0-2)','D.1. Children in the reporting month (All Children in SAA) : Boys(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1BoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(2-4)','E.1. Placed in pre-adoption foster care (in-country) : Boys(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysTwoToFour','e7_BoysTwoToFour','E.7. Total children moved out in the reporting month : Boys(2-4)','D.1. Children in the reporting month (All Children in SAA) : Boys(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1BoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(4-6)','E.1. Placed in pre-adoption foster care (in-country) : Boys(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysFourToSix','e7_BoysFourToSix','E.7. Total children moved out in the reporting month : Boys(4-6)','D.1. Children in the reporting month (All Children in SAA) : Boys(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1BoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(>6)','E.1. Placed in pre-adoption foster care (in-country) : Boys(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysGreaterThanSix','e7_BoysGreaterThanSix','E.7. Total children moved out in the reporting month : Boys(>6)','D.1. Children in the reporting month (All Children in SAA) : Boys(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1GirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(0-2)','E.1. Placed in pre-adoption foster care (in-country) : Girls(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsZeroToTwo','e7_GirlsZeroToTwo','E.7. Total children moved out in the reporting month : Girls(0-2)','D.1. Children in the reporting month (All Children in SAA) : Girls(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1GirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(2-4)','E.1. Placed in pre-adoption foster care (in-country) : Girls(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsTwoToFour','e7_GirlsTwoToFour','E.7. Total children moved out in the reporting month : Girls(2-4)','D.1. Children in the reporting month (All Children in SAA) : Girls(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1GirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(4-6)','E.1. Placed in pre-adoption foster care (in-country) : Girls(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsFourToSix','e7_GirlsFourToSix','E.7. Total children moved out in the reporting month : Girls(4-6)','D.1. Children in the reporting month (All Children in SAA) : Girls(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1GirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(>6)','E.1. Placed in pre-adoption foster care (in-country) : Girls(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsGreaterThanSix','e7_GirlsGreaterThanSix','E.7. Total children moved out in the reporting month : Girls(>6)','D.1. Children in the reporting month (All Children in SAA) : Girls(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		//2
		$scope.checkSectionE2BoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(0-2)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysZeroToTwo','e7_BoysZeroToTwo','E.7. Total children moved out in the reporting month : Boys(0-2)','D.1. Children in the reporting month (All Children in SAA) : Boys(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2BoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(2-4)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysTwoToFour','e7_BoysTwoToFour','E.7. Total children moved out in the reporting month : Boys(2-4)','D.1. Children in the reporting month (All Children in SAA) : Boys(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2BoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(4-6)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysFourToSix','e7_BoysFourToSix','E.7. Total children moved out in the reporting month : Boys(4-6)','D.1. Children in the reporting month (All Children in SAA) : Boys(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2BoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(>6)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysGreaterThanSix','e7_BoysGreaterThanSix','E.7. Total children moved out in the reporting month : Boys(>6)','D.1. Children in the reporting month (All Children in SAA) : Boys(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2GirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(0-2)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsZeroToTwo','e7_GirlsZeroToTwo','E.7. Total children moved out in the reporting month : Girls(0-2)','D.1. Children in the reporting month (All Children in SAA) : Girls(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2GirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(2-4)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsTwoToFour','e7_GirlsTwoToFour','E.7. Total children moved out in the reporting month : Girls(2-4)','D.1. Children in the reporting month (All Children in SAA) : Girls(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2GirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(4-6)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsFourToSix','e7_GirlsFourToSix','E.7. Total children moved out in the reporting month : Girls(4-6)','D.1. Children in the reporting month (All Children in SAA) : Girls(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2GirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(>6)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsGreaterThanSix','e7_GirlsGreaterThanSix','E.7. Total children moved out in the reporting month : Girls(>6)','D.1. Children in the reporting month (All Children in SAA) : Girls(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		//3
		$scope.checkSectionE3BoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(0-2)','E.3. Restoration by CWC : Boys(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysZeroToTwo','e7_BoysZeroToTwo','E.7. Total children moved out in the reporting month : Boys(0-2)','D.1. Children in the reporting month (All Children in SAA) : Boys(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3BoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(2-4)','E.3. Restoration by CWC : Boys(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysTwoToFour','e7_BoysTwoToFour','E.7. Total children moved out in the reporting month : Boys(2-4)','D.1. Children in the reporting month (All Children in SAA) : Boys(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3BoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(4-6)','E.3. Restoration by CWC : Boys(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysFourToSix','e7_BoysFourToSix','E.7. Total children moved out in the reporting month : Boys(4-6)','D.1. Children in the reporting month (All Children in SAA) : Boys(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3BoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(>6)','E.3. Restoration by CWC : Boys(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysGreaterThanSix','e7_BoysGreaterThanSix','E.7. Total children moved out in the reporting month : Boys(>6)','D.1. Children in the reporting month (All Children in SAA) : Boys(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3GirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(0-2)','E.3. Restoration by CWC : Girls(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsZeroToTwo','e7_GirlsZeroToTwo','E.7. Total children moved out in the reporting month : Girls(0-2)','D.1. Children in the reporting month (All Children in SAA) : Girls(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3GirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(2-4)','E.3. Restoration by CWC : Girls(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsTwoToFour','e7_GirlsTwoToFour','E.7. Total children moved out in the reporting month : Girls(2-4)','D.1. Children in the reporting month (All Children in SAA) : Girls(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3GirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(4-6)','E.3. Restoration by CWC : Girls(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsFourToSix','e7_GirlsFourToSix','E.7. Total children moved out in the reporting month : Girls(4-6)','D.1. Children in the reporting month (All Children in SAA) : Girls(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3GirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(>6)','E.3. Restoration by CWC : Girls(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsGreaterThanSix','e7_GirlsGreaterThanSix','E.7. Total children moved out in the reporting month : Girls(>6)','D.1. Children in the reporting month (All Children in SAA) : Girls(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		//e4
		$scope.checkSectionE4BoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(0-2)','E.4. Transferred to other CCIs : Boys(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysZeroToTwo','e7_BoysZeroToTwo','E.7. Total children moved out in the reporting month : Boys(0-2)','D.1. Children in the reporting month (All Children in SAA) : Boys(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4BoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(2-4)','E.4. Transferred to other CCIs : Boys(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysTwoToFour','e7_BoysTwoToFour','E.7. Total children moved out in the reporting month : Boys(2-4)','D.1. Children in the reporting month (All Children in SAA) : Boys(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4BoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(4-6)','E.4. Transferred to other CCIs : Boys(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysFourToSix','e7_BoysFourToSix','E.7. Total children moved out in the reporting month : Boys(4-6)','D.1. Children in the reporting month (All Children in SAA) : Boys(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4BoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(>6)','E.4. Transferred to other CCIs : Boys(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysGreaterThanSix','e7_BoysGreaterThanSix','E.7. Total children moved out in the reporting month : Boys(>6)','D.1. Children in the reporting month (All Children in SAA) : Boys(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4GirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(0-2)','E.4. Transferred to other CCIs : Girls(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsZeroToTwo','e7_GirlsZeroToTwo','E.7. Total children moved out in the reporting month : Girls(0-2)','D.1. Children in the reporting month (All Children in SAA) : Girls(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4GirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(2-4)','E.4. Transferred to other CCIs : Girls(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsTwoToFour','e7_GirlsTwoToFour','E.7. Total children moved out in the reporting month : Girls(2-4)','D.1. Children in the reporting month (All Children in SAA) : Girls(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4GirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(4-6)','E.4. Transferred to other CCIs : Girls(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsFourToSix','e7_GirlsFourToSix','E.7. Total children moved out in the reporting month : Girls(4-6)','D.1. Children in the reporting month (All Children in SAA) : Girls(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4GirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(>6)','E.4. Transferred to other CCIs : Girls(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsGreaterThanSix','e7_GirlsGreaterThanSix','E.7. Total children moved out in the reporting month : Girls(>6)','D.1. Children in the reporting month (All Children in SAA) : Girls(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		//e5
		$scope.checkSectionE5BoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(0-2)','E.5. Due to death, if any : Boys(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysZeroToTwo','e7_BoysZeroToTwo','E.7. Total children moved out in the reporting month : Boys(0-2)','D.1. Children in the reporting month (All Children in SAA) : Boys(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5BoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(2-4)','E.5. Due to death, if any : Boys(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysTwoToFour','e7_BoysTwoToFour','E.7. Total children moved out in the reporting month : Boys(2-4)','D.1. Children in the reporting month (All Children in SAA) : Boys(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5BoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(4-6)','E.5. Due to death, if any : Boys(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysFourToSix','e7_BoysFourToSix','E.7. Total children moved out in the reporting month : Boys(4-6)','D.1. Children in the reporting month (All Children in SAA) : Boys(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5BoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(>6)','E.5. Due to death, if any : Boys(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysGreaterThanSix','e7_BoysGreaterThanSix','E.7. Total children moved out in the reporting month : Boys(>6)','D.1. Children in the reporting month (All Children in SAA) : Boys(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5GirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(0-2)','E.5. Due to death, if any : Girls(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsZeroToTwo','e7_GirlsZeroToTwo','E.7. Total children moved out in the reporting month : Girls(0-2)','D.1. Children in the reporting month (All Children in SAA) : Girls(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5GirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(2-4)','E.5. Due to death, if any : Girls(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsTwoToFour','e7_GirlsTwoToFour','E.7. Total children moved out in the reporting month : Girls(2-4)','D.1. Children in the reporting month (All Children in SAA) : Girls(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5GirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(4-6)','E.5. Due to death, if any : Girls(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsFourToSix','e7_GirlsFourToSix','E.7. Total children moved out in the reporting month : Girls(4-6)','D.1. Children in the reporting month (All Children in SAA) : Girls(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5GirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(>6)','E.5. Due to death, if any : Girls(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsGreaterThanSix','e7_GirlsGreaterThanSix','E.7. Total children moved out in the reporting month : Girls(>6)','D.1. Children in the reporting month (All Children in SAA) : Girls(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		//e6
		$scope.checkSectionE6BoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(0-2)','E.6. Any other : Boys(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysZeroToTwo','e7_BoysZeroToTwo','E.7. Total children moved out in the reporting month : Boys(0-2)','D.1. Children in the reporting month (All Children in SAA) : Boys(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6BoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(2-4)','E.6. Any other : Boys(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysTwoToFour','e7_BoysTwoToFour','E.7. Total children moved out in the reporting month : Boys(2-4)','D.1. Children in the reporting month (All Children in SAA) : Boys(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6BoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(4-6)','E.6. Any other : Boys(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysFourToSix','e7_BoysFourToSix','E.7. Total children moved out in the reporting month : Boys(4-6)','D.1. Children in the reporting month (All Children in SAA) : Boys(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6BoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(>6)','E.6. Any other : Boys(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_BoysGreaterThanSix','e7_BoysGreaterThanSix','E.7. Total children moved out in the reporting month : Boys(>6)','D.1. Children in the reporting month (All Children in SAA) : Boys(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6GirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(0-2)','E.6. Any other : Girls(0-2)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsZeroToTwo','e7_GirlsZeroToTwo','E.7. Total children moved out in the reporting month : Girls(0-2)','D.1. Children in the reporting month (All Children in SAA) : Girls(0-2)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6GirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(2-4)','E.6. Any other : Girls(2-4)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsTwoToFour','e7_GirlsTwoToFour','E.7. Total children moved out in the reporting month : Girls(2-4)','D.1. Children in the reporting month (All Children in SAA) : Girls(2-4)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6GirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(4-6)','E.6. Any other : Girls(4-6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsFourToSix','e7_GirlsFourToSix','E.7. Total children moved out in the reporting month : Girls(4-6)','D.1. Children in the reporting month (All Children in SAA) : Girls(4-6)',currentId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6GirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(>6)','E.6. Any other : Girls(>6)')){return false;}
			else if(!$scope.checkDwithE('d1_GirlsGreaterThanSix','e7_GirlsGreaterThanSix','E.7. Total children moved out in the reporting month : Girls(>6)','D.1. Children in the reporting month (All Children in SAA) : Girls(>6)',currentId)){return false;}
			else {
				return true;
			}
		};
		
		///////for E.a.1
		$scope.checkSectionE1ABoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(0-2)','E.1. Placed in pre-adoption foster care (in-country) : Boys(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysZeroToTwo','e7_ABoysZeroToTwo','E.a.7. Total children moved out in the reporting month : Boys(0-2)','D.2. Children with Special need in the reporting month : Boys(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1ABoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(2-4)','E.1. Placed in pre-adoption foster care (in-country) : Boys(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysTwoToFour','e7_ABoysTwoToFour','E.a.7. Total children moved out in the reporting month : Boys(2-4)','D.2. Children with Special need in the reporting month : Boys(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1ABoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(4-6)','E.1. Placed in pre-adoption foster care (in-country) : Boys(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysFourToSix','e7_ABoysFourToSix','E.a.7. Total children moved out in the reporting month : Boys(4-6)','D.2. Children with Special need in the reporting month : Boys(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1ABoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Boys(>6)','E.1. Placed in pre-adoption foster care (in-country) : Boys(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysGreaterThanSix','e7_ABoysGreaterThanSix','E.a.7. Total children moved out in the reporting month : Boys(>6)','D.2. Children with Special need in the reporting month : Boys(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1AGirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(0-2)','E.1. Placed in pre-adoption foster care (in-country) : Girls(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsZeroToTwo','e7_AGirlsZeroToTwo','E.a.7. Total children moved out in the reporting month : Girls(0-2)','D.2. Children with Special need in the reporting month : Girls(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1AGirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(2-4)','E.1. Placed in pre-adoption foster care (in-country) : Girls(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsTwoToFour','e7_AGirlsTwoToFour','E.a.7. Total children moved out in the reporting month : Girls(2-4)','D.2. Children with Special need in the reporting month : Girls(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1AGirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(4-6)','E.1. Placed in pre-adoption foster care (in-country) : Girls(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsFourToSix','e7_AGirlsFourToSix','E.a.7. Total children moved out in the reporting month : Girls(4-6)','D.2. Children with Special need in the reporting month : Girls(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE1AGirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.1. Placed in pre-adoption foster care (in-country) : Girls(>6)','E.1. Placed in pre-adoption foster care (in-country) : Girls(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsGreaterThanSix','e7_AGirlsGreaterThanSix','E.a.7. Total children moved out in the reporting month : Girls(>6)','D.2. Children with Special need in the reporting month : Girls(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		//2
		$scope.checkSectionE2ABoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(0-2)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysZeroToTwo','e7_ABoysZeroToTwo','E.a.7. Total children moved out in the reporting month : Boys(0-2)','D.2. Children with Special need in the reporting month : Boys(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2ABoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(2-4)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysTwoToFour','e7_ABoysTwoToFour','E.a.7. Total children moved out in the reporting month : Boys(2-4)','D.2. Children with Special need in the reporting month : Boys(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2ABoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(4-6)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysFourToSix','e7_ABoysFourToSix','E.a.7. Total children moved out in the reporting month : Boys(4-6)','D.2. Children with Special need in the reporting month : Boys(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2ABoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Boys(>6)','E.2. Placed in pre-adoption foster care (inter-country) : Boys(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysGreaterThanSix','e7_ABoysGreaterThanSix','E.a.7. Total children moved out in the reporting month : Boys(>6)','D.2. Children with Special need in the reporting month : Boys(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2AGirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(0-2)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsZeroToTwo','e7_AGirlsZeroToTwo','E.a.7. Total children moved out in the reporting month : Girls(0-2)','D.2. Children with Special need in the reporting month : Girls(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2AGirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(2-4)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsTwoToFour','e7_AGirlsTwoToFour','E.a.7. Total children moved out in the reporting month : Girls(2-4)','D.2. Children with Special need in the reporting month : Girls(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2AGirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(4-6)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsFourToSix','e7_AGirlsFourToSix','E.a.7. Total children moved out in the reporting month : Girls(4-6)','D.2. Children with Special need in the reporting month : Girls(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE2AGirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.2. Placed in pre-adoption foster care (inter-country) : Girls(>6)','E.2. Placed in pre-adoption foster care (inter-country) : Girls(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsGreaterThanSix','e7_AGirlsGreaterThanSix','E.a.7. Total children moved out in the reporting month : Girls(>6)','D.2. Children with Special need in the reporting month : Girls(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		//3
		$scope.checkSectionE3ABoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(0-2)','E.3. Restoration by CWC : Boys(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysZeroToTwo','e7_ABoysZeroToTwo','E.a.7. Total children moved out in the reporting month : Boys(0-2)','D.2. Children with Special need in the reporting month : Boys(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3ABoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(2-4)','E.3. Restoration by CWC : Boys(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysTwoToFour','e7_ABoysTwoToFour','E.a.7. Total children moved out in the reporting month : Boys(2-4)','D.2. Children with Special need in the reporting month : Boys(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3ABoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(4-6)','E.3. Restoration by CWC : Boys(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysFourToSix','e7_ABoysFourToSix','E.a.7. Total children moved out in the reporting month : Boys(4-6)','D.2. Children with Special need in the reporting month : Boys(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3ABoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Boys(>6)','E.3. Restoration by CWC : Boys(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysGreaterThanSix','e7_ABoysGreaterThanSix','E.a.7. Total children moved out in the reporting month : Boys(>6)','D.2. Children with Special need in the reporting month : Boys(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3AGirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(0-2)','E.3. Restoration by CWC : Girls(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsZeroToTwo','e7_AGirlsZeroToTwo','E.a.7. Total children moved out in the reporting month : Girls(0-2)','D.2. Children with Special need in the reporting month : Girls(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3AGirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(2-4)','E.3. Restoration by CWC : Girls(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsTwoToFour','e7_AGirlsTwoToFour','E.a.7. Total children moved out in the reporting month : Girls(2-4)','D.2. Children with Special need in the reporting month : Girls(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3AGirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(4-6)','E.3. Restoration by CWC : Girls(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsFourToSix','e7_AGirlsFourToSix','E.a.7. Total children moved out in the reporting month : Girls(4-6)','D.2. Children with Special need in the reporting month : Girls(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE3AGirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.3. Restoration by CWC : Girls(>6)','E.3. Restoration by CWC : Girls(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsGreaterThanSix','e7_AGirlsGreaterThanSix','E.a.7. Total children moved out in the reporting month : Girls(>6)','D.2. Children with Special need in the reporting month : Girls(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		//e4
		$scope.checkSectionE4ABoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(0-2)','E.4. Transferred to other CCIs : Boys(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysZeroToTwo','e7_ABoysZeroToTwo','E.a.7. Total children moved out in the reporting month : Boys(0-2)','D.2. Children with Special need in the reporting month : Boys(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4ABoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(2-4)','E.4. Transferred to other CCIs : Boys(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysTwoToFour','e7_ABoysTwoToFour','E.a.7. Total children moved out in the reporting month : Boys(2-4)','D.2. Children with Special need in the reporting month : Boys(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4ABoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(4-6)','E.4. Transferred to other CCIs : Boys(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysFourToSix','e7_ABoysFourToSix','E.a.7. Total children moved out in the reporting month : Boys(4-6)','D.2. Children with Special need in the reporting month : Boys(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4ABoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Boys(>6)','E.4. Transferred to other CCIs : Boys(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysGreaterThanSix','e7_ABoysGreaterThanSix','E.a.7. Total children moved out in the reporting month : Boys(>6)','D.2. Children with Special need in the reporting month : Boys(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4AGirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(0-2)','E.4. Transferred to other CCIs : Girls(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsZeroToTwo','e7_AGirlsZeroToTwo','E.a.7. Total children moved out in the reporting month : Girls(0-2)','D.2. Children with Special need in the reporting month : Girls(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4AGirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(2-4)','E.4. Transferred to other CCIs : Girls(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsTwoToFour','e7_AGirlsTwoToFour','E.a.7. Total children moved out in the reporting month : Girls(2-4)','D.2. Children with Special need in the reporting month : Girls(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4AGirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(4-6)','E.4. Transferred to other CCIs : Girls(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsFourToSix','e7_AGirlsFourToSix','E.a.7. Total children moved out in the reporting month : Girls(4-6)','D.2. Children with Special need in the reporting month : Girls(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE4AGirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.4. Transferred to other CCIs : Girls(>6)','E.4. Transferred to other CCIs : Girls(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsGreaterThanSix','e7_AGirlsGreaterThanSix','E.a.7. Total children moved out in the reporting month : Girls(>6)','D.2. Children with Special need in the reporting month : Girls(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		//e5
		$scope.checkSectionE5ABoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(0-2)','E.5. Due to death, if any : Boys(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysZeroToTwo','e7_ABoysZeroToTwo','E.a.7. Total children moved out in the reporting month : Boys(0-2)','D.2. Children with Special need in the reporting month : Boys(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5ABoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(2-4)','E.5. Due to death, if any : Boys(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysTwoToFour','e7_ABoysTwoToFour','E.a.7. Total children moved out in the reporting month : Boys(2-4)','D.2. Children with Special need in the reporting month : Boys(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5ABoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(4-6)','E.5. Due to death, if any : Boys(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysFourToSix','e7_ABoysFourToSix','E.a.7. Total children moved out in the reporting month : Boys(4-6)','D.2. Children with Special need in the reporting month : Boys(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5ABoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Boys(>6)','E.5. Due to death, if any : Boys(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysGreaterThanSix','e7_ABoysGreaterThanSix','E.a.7. Total children moved out in the reporting month : Boys(>6)','D.2. Children with Special need in the reporting month : Boys(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5AGirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(0-2)','E.5. Due to death, if any : Girls(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsZeroToTwo','e7_AGirlsZeroToTwo','E.a.7. Total children moved out in the reporting month : Girls(0-2)','D.2. Children with Special need in the reporting month : Girls(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5AGirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(2-4)','E.5. Due to death, if any : Girls(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsTwoToFour','e7_AGirlsTwoToFour','E.a.7. Total children moved out in the reporting month : Girls(2-4)','D.2. Children with Special need in the reporting month : Girls(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5AGirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(4-6)','E.5. Due to death, if any : Girls(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsFourToSix','e7_AGirlsFourToSix','E.a.7. Total children moved out in the reporting month : Girls(4-6)','D.2. Children with Special need in the reporting month : Girls(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE5AGirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.5. Due to death, if any : Girls(>6)','E.5. Due to death, if any : Girls(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsGreaterThanSix','e7_AGirlsGreaterThanSix','E.a.7. Total children moved out in the reporting month : Girls(>6)','D.2. Children with Special need in the reporting month : Girls(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		//e6
		$scope.checkSectionE6ABoysZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(0-2)','E.6. Any other : Boys(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysZeroToTwo','e7_ABoysZeroToTwo','E.a.7. Total children moved out in the reporting month : Boys(0-2)','D.2. Children with Special need in the reporting month : Boys(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6ABoystwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(2-4)','E.6. Any other : Boys(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysTwoToFour','e7_ABoysTwoToFour','E.a.7. Total children moved out in the reporting month : Boys(2-4)','D.2. Children with Special need in the reporting month : Boys(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6ABoysfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(4-6)','E.6. Any other : Boys(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysFourToSix','e7_ABoysFourToSix','E.a.7. Total children moved out in the reporting month : Boys(4-6)','D.2. Children with Special need in the reporting month : Boys(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6ABoysgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Boys(>6)','E.6. Any other : Boys(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_BoysGreaterThanSix','e7_ABoysGreaterThanSix','E.a.7. Total children moved out in the reporting month : Boys(>6)','D.2. Children with Special need in the reporting month : Boys(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6AGirlsZeroto2=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(0-2)','E.6. Any other : Girls(0-2)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsZeroToTwo','e7_AGirlsZeroToTwo','E.a.7. Total children moved out in the reporting month : Girls(0-2)','D.2. Children with Special need in the reporting month : Girls(0-2)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6AGirlstwoTofour=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(2-4)','E.6. Any other : Girls(2-4)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsTwoToFour','e7_AGirlsTwoToFour','E.a.7. Total children moved out in the reporting month : Girls(2-4)','D.2. Children with Special need in the reporting month : Girls(2-4)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6AGirlsfourTosix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(4-6)','E.6. Any other : Girls(4-6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsFourToSix','e7_AGirlsFourToSix','E.a.7. Total children moved out in the reporting month : Girls(4-6)','D.2. Children with Special need in the reporting month : Girls(4-6)',testId)){return false;}
			else {
				return true;
			}
		};
		$scope.checkSectionE6AGirlsgreaterThansix=function(currentId,testId){
			if(!$scope.checkEwithEa(currentId,testId,'E.a.6. Any other : Girls(>6)','E.6. Any other : Girls(>6)')){return false;}
			else if(!$scope.checkDawithEa('d2_GirlsGreaterThanSix','e7_AGirlsGreaterThanSix','E.a.7. Total children moved out in the reporting month : Girls(>6)','D.2. Children with Special need in the reporting month : Girls(>6)',testId)){return false;}
			else {
				return true;
			}
		};
		
		//Ea Ends
		$scope.checkH5Negetive=function(currentId){
			
			var bgc = document.getElementById(currentId);
			var firstInput = Number(document.getElementById("h_h1").value - 0);
			var secondInput = Number(document.getElementById("h_h2").value - 0);
			var thirdInput = Number(document.getElementById("h_h3").value - 0);
			var fourthInput= Number(document.getElementById("h_h4").value - 0);
			$scope.messageField1="Sum of (H.1. Number of PAPs on the 1st day of the reporting month + H.2. Number of PAPs registered during the month)";
			$scope.messageField2="sum of (H.3. Number of PAPs having children in pre-Adoption foster care (from any SAA) during the month + H.4. Number of PAPs rejected/withdrawn during the month)";
			$scope.alertMessage ="value should be greater than equal to";
			var fst=Number(firstInput-0)+Number(secondInput-0);
			var scnd=Number(thirdInput-0)+Number(fourthInput-0);
			
			if (fst < scnd) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				
				bgc.value=null;
				$scope.saaForm[currentId] = null;
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
		
//		D with E ends
		
//		f3,f4 with f1 starts
		
		$scope.checkBoysZerotoTwof1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_BoysZeroToTwo").value - 0);
			var fstInput = Number(document.getElementById("f3_BoysZeroToTwo").value - 0);
			var secInput = Number(document.getElementById("f4_BoysZeroToTwo").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Boys(0-2)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Boys(0-2)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkBoysTwotoFourf1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_BoysTwoToFour").value - 0);
			var fstInput = Number(document.getElementById("f3_BoysTwoToFour").value - 0);
			var secInput = Number(document.getElementById("f4_BoysTwoToFour").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Boys(2-4)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Boys(2-4)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkBoysFourtoSixf1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_BoysFourToSix").value - 0);
			var fstInput = Number(document.getElementById("f3_BoysFourToSix").value - 0);
			var secInput = Number(document.getElementById("f4_BoysFourToSix").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Boys(4-6)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Boys(4-6)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkBoysGreaterThanSixf1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_BoysGreaterThanSix").value - 0);
			var fstInput = Number(document.getElementById("f3_BoysGreaterThanSix").value - 0);
			var secInput = Number(document.getElementById("f4_BoysGreaterThanSix").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Boys(>6)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Boys(>6)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkGirlsZerotoTwof1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_GirlsZeroToTwo").value - 0);
			var fstInput = Number(document.getElementById("f3_GirlsZeroToTwo").value - 0);
			var secInput = Number(document.getElementById("f4_GirlsZeroToTwo").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Girls(0-2)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Girls(0-2)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkGirlsTwotoFourf1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_GirlsTwoToFour").value - 0);
			var fstInput = Number(document.getElementById("f3_GirlsTwoToFour").value - 0);
			var secInput = Number(document.getElementById("f4_GirlsTwoToFour").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Girls(2-4)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Girls(2-4)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkGirlsFourtoSixf1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_GirlsFourToSix").value - 0);
			var fstInput = Number(document.getElementById("f3_GirlsFourToSix").value - 0);
			var secInput = Number(document.getElementById("f4_GirlsFourToSix").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Girls(4-6)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Girls(4-6)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		$scope.checkGirlsGreaterThanSixf1withf3sumf4=function(colorId){
			var bgc = document.getElementById(colorId);
			var firstInput=Number(document.getElementById("f1_GirlsGreaterThanSix").value - 0);
			var fstInput = Number(document.getElementById("f3_GirlsGreaterThanSix").value - 0);
			var secInput = Number(document.getElementById("f4_GirlsGreaterThanSix").value - 0);
			var secondInput=Number(fstInput-0)+Number(secInput-0);
			$scope.messageField1="Sum of F.3. No. of orphaned/abandoned children on the last day of the reporting month and F.4. No. of surrendered children on the last day of the reporting month : Girls(>6)";
			$scope.messageField2="F.1. Children on the last day of the reporting month : Girls(>6)";
			$scope.alertMessage ="value should be less than or equal to";
			return commonFunctionBodyLessThanEqual(firstInput, secondInput, bgc,colorId);
		};
		
//		f3,f4 with f1 ends
		$scope.valuesEqualscheck = function(firstInput, secondInput,id,msg) {
			$scope.messageField1=msg;
			$scope.messageField2="";
			$scope.alertMessage = "";
			var bgc=document.getElementById(id);
			if (firstInput != secondInput) {
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
		angular.forEach($scope.saaForm, function(value, index) {
			if ($scope.negetiveTestVariable == true) {
				if (Number(value - 0) < 0) {
					$scope.negetiveTestVariable = false;
					document.getElementById(index).style.setProperty("background-color", "#DC143C", "important");
					document.getElementById(index).style.setProperty("color", "#FFFAF0", "important");
					document.getElementById(index).style.setProperty("border-color", "red", "important");
					enamo=index;
					$scope.messageField1="";
				  	$scope.messageField2="";
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
		
				
		/*var testb1_Boys_total=Number($scope.saaForm.b1_BoysZeroToTwo-0)+Number($scope.saaForm.b1_BoysTwoToFour-0)+
  			 Number($scope.saaForm.b1_BoysFourToSix-0)+Number($scope.saaForm.b1_BoysGreaterThanSix-0);
			 
		var testb1_Girls_total=Number($scope.saaForm.b1_GirlsZeroToTwo-0)+Number($scope.saaForm.b1_GirlsTwoToFour-0)+
			 Number($scope.saaForm.b1_GirlsFourToSix-0)+Number($scope.saaForm.b1_GirlsGreaterThanSix-0);
		
		var testb1_ABoys_total=Number($scope.saaForm.b1_ABoysZeroToTwo-0)+
             Number($scope.saaForm.b1_ABoysTwoToFour-0)+
             Number($scope.saaForm.b1_ABoysFourToSix-0)+
             Number($scope.saaForm.b1_ABoysGreaterThanSix-0);
			
		var testb1_AGirls_total=Number($scope.saaForm.b1_AGirlsZeroToTwo-0)+
             Number($scope.saaForm.b1_AGirlsTwoToFour-0)+
             Number($scope.saaForm.b1_AGirlsFourToSix-0)+
             Number($scope.saaForm.b1_AGirlsGreaterThanSix-0);
			if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_BoysTotal-0),testb1_Boys_total,'b1_BoysTotal','sum of B.1. No. of children on the first day of the reporting month(All Children SAA) boys should be equal to B.1. No. of children on the first day of the reporting month(All Children SAA) boys total')){return false;}
		else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_GirlsTotal-0),testb1_Girls_total,'b1_GirlsTotal','sum of B.1. No. of children on the first day of the reporting month(All Children SAA) girls should be equal to B.1. No. of children on the first day of the reporting month(All Children SAA) girls total')){return false;}
		else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_ABoysTotal-0),testb1_ABoys_total,'b1_ABoysTotal','sum of B.2. No. of special need children on the first day of the reporting month boys should be equal to B.2. No. of special need children on the first day of the reporting month boys total')){return false;}
		else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_AGirlsTotal-0),testb1_AGirls_total,'b1_AGirlsTotal','sum of B.2. No. of special need children on the first day of the reporting month girls should be equal to B.2. No. of special need children on the first day of the reporting month girls total')){return false;}
		else{*/
			$scope.saveSAA($scope.saaForm, 'save');
//		}
			
	};

	// submit function starts
	$scope.checkSubmit = function() {
		var testb1_Boys_total=Number($scope.saaForm.b1_BoysZeroToTwo-0)+Number($scope.saaForm.b1_BoysTwoToFour-0)+
			 Number($scope.saaForm.b1_BoysFourToSix-0)+Number($scope.saaForm.b1_BoysGreaterThanSix-0);
		 
	var testb1_Girls_total=Number($scope.saaForm.b1_GirlsZeroToTwo-0)+Number($scope.saaForm.b1_GirlsTwoToFour-0)+
		 Number($scope.saaForm.b1_GirlsFourToSix-0)+Number($scope.saaForm.b1_GirlsGreaterThanSix-0);
	
	var testb1_ABoys_total=Number($scope.saaForm.b1_ABoysZeroToTwo-0)+
        Number($scope.saaForm.b1_ABoysTwoToFour-0)+
        Number($scope.saaForm.b1_ABoysFourToSix-0)+
        Number($scope.saaForm.b1_ABoysGreaterThanSix-0);
		
	var testb1_AGirls_total=Number($scope.saaForm.b1_AGirlsZeroToTwo-0)+
        Number($scope.saaForm.b1_AGirlsTwoToFour-0)+
        Number($scope.saaForm.b1_AGirlsFourToSix-0)+
        Number($scope.saaForm.b1_AGirlsGreaterThanSix-0);
	
	if($scope.saaFormCSectionRepeatationArray.length>1){
		$scope.tempDataSubmit=$scope.saaFormCSectionRepeatationArray;
		if($scope.tempDataSubmit.length>1){
			for(var isumit=0;isumit<$scope.tempDataSubmit.length;isumit++){
				if (!accordionValidationC($scope.tempDataSubmit[isumit])) {
					$scope.tempDataSubmit.splice(isumit,1);

				}
		}
			$scope.saaFormCSectionRepeatationArray=$scope.tempDataSubmit;
			$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
			
		}
		$scope.saaFormCSectionRepeatationArray=$scope.tempDataSubmit;
		if(!$scope.saaFormCSectionRepeatationArray.length<0)
		$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
	
}
else {
	if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length-1])) {
		$scope.resetAccordC($scope.saaFormCSectionRepeatationArray.length-1);
	}
}
	//all ng-keyup function check starts
	
	/*if($scope.saaForm.dateOfVisit == null || $scope.saaForm.dateOfVisit == undefined){
		document.getElementById("dataOfVisit").focus();
	}
	else*/
	if(!$scope.checkA2s4with5('a2_4BoysZeroToTwo','a2_5BoysZeroToTwo','A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Boys(0-2)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Boys(0-2)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_4BoysTwoToFour','a2_5BoysTwoToFour','A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Boys(2-4)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Boys(2-4)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_4BoysFourToSix','a2_5BoysFourToSix','A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Boys(4-6)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Boys(4-6)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_4BoysGreaterThanSix','a2_5BoysGreaterThanSix','A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Boys(>6)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Boys(>6)')){$scope.testC=true;return false;}

	else if(!$scope.checkA2s4with5('a2_4GirlsZeroToTwo','a2_5GirlsZeroToTwo',' A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Girls0-2)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Girls0-2)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_4GirlsTwoToFour','a2_5GirlsTwoToFour',' A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Girls2-4)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Girls2-4)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_4GirlsFourToSix','a2_5GirlsFourToSix',' A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Girls4-6)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Girls4-6)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_4GirlsGreaterThanSix','a2_5GirlsGreaterThanSix',' A.2.5. No. of Pre-adoption Foster Care through SAA-CCIs linkages : Girls>6)', 'A.2.4. Total no. of Pre-adoptions Foster Care : Girls>6)')){$scope.testC=true;return false;}

	else if(!$scope.checkSectionA2ABoys1Zeroto2('a2_1BoysZeroToTwo','a2_A1BoysZeroToTwo')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys1twoTofour('a2_1BoysTwoToFour','a2_A1BoysTwoToFour')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys1fourTosix('a2_1BoysFourToSix','a2_A1BoysFourToSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys1greaterThansix('a2_1BoysGreaterThanSix','a2_A1BoysGreaterThanSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls1Zeroto2('a2_1GirlsZeroToTwo','a2_A1GirlsZeroToTwo')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls1twoTofour('a2_1GirlsTwoToFour','a2_A1GirlsTwoToFour')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls1fourTosix('a2_1GirlsFourToSix','a2_A1GirlsFourToSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls1greaterThansix('a2_1GirlsGreaterThanSix','a2_A1GirlsGreaterThanSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys2Zeroto2('a2_2BoysZeroToTwo','a2_A2BoysZeroToTwo')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys2twoTofour('a2_2BoysTwoToFour','a2_A2BoysTwoToFour')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys2fourTosix('a2_2BoysFourToSix','a2_A2BoysFourToSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys2greaterThansix('a2_2BoysGreaterThanSix','a2_A2BoysGreaterThanSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls2Zeroto2('a2_2GirlsZeroToTwo','a2_A2GirlsZeroToTwo')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls2twoTofour('a2_2GirlsTwoToFour','a2_A2GirlsTwoToFour')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls2fourTosix('a2_2GirlsFourToSix','a2_A2GirlsFourToSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls2greaterThansix('a2_2GirlsGreaterThanSix','a2_A2GirlsGreaterThanSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys3Zeroto2('a2_3BoysZeroToTwo','a2_A3BoysZeroToTwo')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys3twoTofour('a2_3BoysTwoToFour','a2_A3BoysTwoToFour')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys3fourTosix('a2_3BoysFourToSix','a2_A3BoysFourToSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2ABoys3greaterThansix('a2_3BoysGreaterThanSix','a2_A3BoysGreaterThanSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls3Zeroto2('a2_3GirlsZeroToTwo','a2_A3GirlsZeroToTwo')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls3twoTofour('a2_3GirlsTwoToFour','a2_A3GirlsTwoToFour')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls3fourTosix('a2_3GirlsFourToSix','a2_A3GirlsFourToSix')){$scope.testC=true;return false;}
	else if(!$scope.checkSectionA2AGirls3greaterThansix('a2_3GirlsGreaterThanSix','a2_A3GirlsGreaterThanSix')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4BoysZeroToTwo','a2_A5BoysZeroToTwo','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Boys(0-2)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Boys(0-2)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4BoysTwoToFour','a2_A5BoysTwoToFour','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Boys(2-4)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Boys(2-4)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4BoysFourToSix','a2_A5BoysFourToSix','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Boys(4-6)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Boys(4-6)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4BoysGreaterThanSix','a2_A5BoysGreaterThanSix','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Boys(>6)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Boys(>6)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4GirlsZeroToTwo','a2_A5GirlsZeroToTwo','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Girls0-2)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Girls0-2)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4GirlsTwoToFour','a2_A5GirlsTwoToFour','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Girls2-4)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Girls2-4)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4GirlsFourToSix','a2_A5GirlsFourToSix','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Girls4-6)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Girls4-6)')){$scope.testC=true;return false;}
	else if(!$scope.checkA2s4with5('a2_A4GirlsGreaterThanSix','a2_A5GirlsGreaterThanSix','A.2.a.5. No. of Pre-adoption Foster Care through SAA CCIs linkages : Girls>6)','A.2.a.4. Total no. of Pre-adoptions Foster Care : Girls>6)')){$scope.testC=true;return false;}

	else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_BoysTotal-0),testb1_Boys_total,'b1_BoysTotal','sum of B.1. No. of children on the first day of the reporting month(All Children SAA) boys should be equal to B.1. No. of children on the first day of the reporting month(All Children SAA) boys total')){$scope.testC=true;return false;}
	else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_GirlsTotal-0),testb1_Girls_total,'b1_GirlsTotal','sum of B.1. No. of children on the first day of the reporting month(All Children SAA) girls should be equal to B.1. No. of children on the first day of the reporting month(All Children SAA) girls total')){$scope.testC=true;return false;}
	else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_ABoysTotal-0),testb1_ABoys_total,'b1_ABoysTotal','sum of B.2. No. of special need children on the first day of the reporting month boys should be equal to B.2. No. of special need children on the first day of the reporting month boys total')){$scope.testC=true;return false;}
	else if(!$scope.valuesEqualscheck(Number($scope.saaForm.b1_AGirlsTotal-0),testb1_AGirls_total,'b1_AGirlsTotal','sum of B.2. No. of special need children on the first day of the reporting month girls should be equal to B.2. No. of special need children on the first day of the reporting month girls total')){$scope.testC=true;return false;}
	else if(!$scope.checkAll1Boys0to2()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1Boys2to4()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1Boys4to6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1BoysgreaterThan6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1Girls0to2()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1Girls2to4()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1Girls4to6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll1GirlsgreaterThan6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2Boys0to2()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2Boys2to4()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2Boys4to6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2BoysgreaterThan6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2Girls0to2()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2Girls2to4()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2Girls4to6()){$scope.testC=true;return false;}
	else if(!$scope.checkAll2GirlsgreaterThan6()){$scope.testC=true;return false;}
	else if(!$scope.checkSectionE1BoysZeroto2('e1_BoysZeroToTwo','e1_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1BoystwoTofour('e1_BoysTwoToFour','e1_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1BoysfourTosix('e1_BoysFourToSix','e1_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1BoysgreaterThansix('e1_BoysGreaterThanSix','e1_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1GirlsZeroto2('e1_GirlsZeroToTwo','e1_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1GirlstwoTofour('e1_GirlsTwoToFour','e1_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1GirlsfourTosix('e1_GirlsFourToSix','e1_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1GirlsgreaterThansix('e1_GirlsGreaterThanSix','e1_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2BoysZeroto2('e2_BoysZeroToTwo','e2_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2BoystwoTofour('e2_BoysTwoToFour','e2_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2BoysfourTosix('e2_BoysFourToSix','e2_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2BoysgreaterThansix('e2_BoysGreaterThanSix','e2_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2GirlsZeroto2('e2_GirlsZeroToTwo','e2_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2GirlstwoTofour('e2_GirlsTwoToFour','e2_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2GirlsfourTosix('e2_GirlsFourToSix','e2_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2GirlsgreaterThansix('e2_GirlsGreaterThanSix','e2_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3BoysZeroto2('e3_BoysZeroToTwo','e3_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3BoystwoTofour('e3_BoysTwoToFour','e3_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3BoysfourTosix('e3_BoysFourToSix','e3_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3BoysgreaterThansix('e3_BoysGreaterThanSix','e3_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3GirlsZeroto2('e3_GirlsZeroToTwo','e3_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3GirlstwoTofour('e3_GirlsTwoToFour','e3_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3GirlsfourTosix('e3_GirlsFourToSix','e3_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3GirlsgreaterThansix('e3_GirlsGreaterThanSix','e3_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4BoysZeroto2('e4_BoysZeroToTwo','e4_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4BoystwoTofour('e4_BoysTwoToFour','e4_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4BoysfourTosix('e4_BoysFourToSix','e4_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4BoysgreaterThansix('e4_BoysGreaterThanSix','e4_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4GirlsZeroto2('e4_GirlsZeroToTwo','e4_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4GirlstwoTofour('e4_GirlsTwoToFour','e4_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4GirlsfourTosix('e4_GirlsFourToSix','e4_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4GirlsgreaterThansix('e4_GirlsGreaterThanSix','e4_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5BoysZeroto2('e5_BoysZeroToTwo','e5_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5BoystwoTofour('e5_BoysTwoToFour','e5_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5BoysfourTosix('e5_BoysFourToSix','e5_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5BoysgreaterThansix('e5_BoysGreaterThanSix','e5_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5GirlsZeroto2('e5_GirlsZeroToTwo','e5_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5GirlstwoTofour('e5_GirlsTwoToFour','e5_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5GirlsfourTosix('e5_GirlsFourToSix','e5_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5GirlsgreaterThansix('e5_GirlsGreaterThanSix','e5_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6BoysZeroto2('e6_BoysZeroToTwo','e6_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6BoystwoTofour('e6_BoysTwoToFour','e6_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6BoysfourTosix('e6_BoysFourToSix','e6_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6BoysgreaterThansix('e6_BoysGreaterThanSix','e6_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6GirlsZeroto2('e6_GirlsZeroToTwo','e6_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6GirlstwoTofour('e6_GirlsTwoToFour','e6_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6GirlsfourTosix('e6_GirlsFourToSix','e6_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6GirlsgreaterThansix('e6_GirlsGreaterThanSix','e6_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1ABoysZeroto2('e1_BoysZeroToTwo','e1_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1ABoystwoTofour('e1_BoysTwoToFour','e1_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1ABoysfourTosix('e1_BoysFourToSix','e1_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1ABoysgreaterThansix('e1_BoysGreaterThanSix','e1_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1AGirlsZeroto2('e1_GirlsZeroToTwo','e1_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1AGirlstwoTofour('e1_GirlsTwoToFour','e1_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1AGirlsfourTosix('e1_GirlsFourToSix','e1_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE1AGirlsgreaterThansix('e1_GirlsGreaterThanSix','e1_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2ABoysZeroto2('e2_BoysZeroToTwo','e2_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2ABoystwoTofour('e2_BoysTwoToFour','e2_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2ABoysfourTosix('e2_BoysFourToSix','e2_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2ABoysgreaterThansix('e2_BoysGreaterThanSix','e2_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2AGirlsZeroto2('e2_GirlsZeroToTwo','e2_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2AGirlstwoTofour('e2_GirlsTwoToFour','e2_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2AGirlsfourTosix('e2_GirlsFourToSix','e2_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE2AGirlsgreaterThansix('e2_GirlsGreaterThanSix','e2_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3ABoysZeroto2('e3_BoysZeroToTwo','e3_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3ABoystwoTofour('e3_BoysTwoToFour','e3_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3ABoysfourTosix('e3_BoysFourToSix','e3_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3ABoysgreaterThansix('e3_BoysGreaterThanSix','e3_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3AGirlsZeroto2('e3_GirlsZeroToTwo','e3_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3AGirlstwoTofour('e3_GirlsTwoToFour','e3_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3AGirlsfourTosix('e3_GirlsFourToSix','e3_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE3AGirlsgreaterThansix('e3_GirlsGreaterThanSix','e3_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4ABoysZeroto2('e4_BoysZeroToTwo','e4_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4ABoystwoTofour('e4_BoysTwoToFour','e4_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4ABoysfourTosix('e4_BoysFourToSix','e4_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4ABoysgreaterThansix('e4_BoysGreaterThanSix','e4_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4AGirlsZeroto2('e4_GirlsZeroToTwo','e4_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4AGirlstwoTofour('e4_GirlsTwoToFour','e4_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4AGirlsfourTosix('e4_GirlsFourToSix','e4_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE4AGirlsgreaterThansix('e4_GirlsGreaterThanSix','e4_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5ABoysZeroto2('e5_BoysZeroToTwo','e5_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5ABoystwoTofour('e5_BoysTwoToFour','e5_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5ABoysfourTosix('e5_BoysFourToSix','e5_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5ABoysgreaterThansix('e5_BoysGreaterThanSix','e5_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5AGirlsZeroto2('e5_GirlsZeroToTwo','e5_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5AGirlstwoTofour('e5_GirlsTwoToFour','e5_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5AGirlsfourTosix('e5_GirlsFourToSix','e5_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE5AGirlsgreaterThansix('e5_GirlsGreaterThanSix','e5_AGirlsGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6ABoysZeroto2('e6_BoysZeroToTwo','e6_ABoysZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6ABoystwoTofour('e6_BoysTwoToFour','e6_ABoysTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6ABoysfourTosix('e6_BoysFourToSix','e6_ABoysFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6ABoysgreaterThansix('e6_BoysGreaterThanSix','e6_ABoysGreaterThanSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6AGirlsZeroto2('e6_GirlsZeroToTwo','e6_AGirlsZeroToTwo')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6AGirlstwoTofour('e6_GirlsTwoToFour','e6_AGirlsTwoToFour')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6AGirlsfourTosix('e6_GirlsFourToSix','e6_AGirlsFourToSix')){$scope.testC=true;return false;}
    else if(!$scope.checkSectionE6AGirlsgreaterThansix('e6_GirlsGreaterThanSix','e6_AGirlsGreaterThanSix')){$scope.testC=true;return false;}

	else if(!$scope.checkBoysZerotoTwof1withf3sumf4('f3_BoysZeroToTwo')){return false;}
	else if(!$scope.checkBoysTwotoFourf1withf3sumf4('f3_BoysTwoToFour')){return false;}
	else if(!$scope.checkBoysFourtoSixf1withf3sumf4('f3_BoysFourToSix')){return false;}
	else if(!$scope.checkBoysGreaterThanSixf1withf3sumf4('f3_BoysGreaterThanSix')){return false;}
	else if(!$scope.checkGirlsZerotoTwof1withf3sumf4('f3_GirlsZeroToTwo')){return false;}
	else if(!$scope.checkGirlsTwotoFourf1withf3sumf4('f3_GirlsTwoToFour')){return false;}
	else if(!$scope.checkGirlsFourtoSixf1withf3sumf4('f3_GirlsFourToSix')){return false;}
	else if(!$scope.checkGirlsGreaterThanSixf1withf3sumf4('f3_GirlsGreaterThanSix')){return false;}
	else if(!$scope.checkBoysZerotoTwof1withf3sumf4('f4_BoysZeroToTwo')){return false;}
	else if(!$scope.checkBoysTwotoFourf1withf3sumf4('f4_BoysTwoToFour')){return false;}
	else if(!$scope.checkBoysFourtoSixf1withf3sumf4('f4_BoysFourToSix')){return false;}
	else if(!$scope.checkBoysGreaterThanSixf1withf3sumf4('f4_BoysGreaterThanSix')){return false;}
	else if(!$scope.checkGirlsZerotoTwof1withf3sumf4('f4_GirlsZeroToTwo')){return false;}
	else if(!$scope.checkGirlsTwotoFourf1withf3sumf4('f4_GirlsTwoToFour')){return false;}
	else if(!$scope.checkGirlsFourtoSixf1withf3sumf4('f4_GirlsFourToSix')){return false;}
	else if(!$scope.checkGirlsGreaterThanSixf1withf3sumf4('f4_GirlsGreaterThanSix')){return false;}
	else if(!$scope.checkG51AwithF3()){return false;}
	else if(!$scope.checkH5Negetive('h_h1')){return false;}
	else if(!$scope.checkH5Negetive('h_h2')){return false;}
	else if(!$scope.checkH5Negetive('h_h3')){return false;}
	else if(!$scope.checkH5Negetive('h_h4')){return false;}
	else{
		$scope.saveSAA($scope.saaForm, 'submit');
	}
			
	};
		//
	$scope.checkGNegetive=function(currentId,targetId,msg){
		var bgc = document.getElementById(currentId);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;	
		$scope.messageField1="Sum of G.1 and G.2 "+msg+"";
		$scope.messageField2="total number of G.3 "+msg;
		$scope.alertMessage ="value can not be less than";	
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			$scope.saaForm[currentId] = null;
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
	$scope.checkGNegetive1=function(currentId,minusId,targetId,msg){
		var bgc = document.getElementById(currentId);
		var bgc1= document.getElementById(minusId);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;	
		$scope.messageField1="Sum of G.1 and G.2 "+msg;
		$scope.messageField2="total number of G.3"+msg;
		$scope.alertMessage ="value can not be less than";		
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			bgc1.value=null;
			$scope.saaForm[currentId] = null;
			$scope.saaForm[minusId] = null;
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
	
	$scope.jboysZeroto2Num=0;
	$scope.jboysTwoto4Num=0;
	$scope.jboysFourto6Num=0;
	$scope.jboysGreaterThan6Num=0;

	$scope.jgirlsZeroto2Num=0;
	$scope.jgirlsTwoto4Num=0;
	$scope.jgirlsFourto6Num=0;
	$scope.jgirlsGreaterThan6Num=0;     
	//-----------------------------------------
	$scope.showCDetails = true;
	$scope.showJ = false;

	//-----------------------------------------
	
	
	// submit function ends
	$scope.saaForm = {};

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
	
	var setAccDropdown = function(saaForm){
		if (saaForm.saaSectionCChildDeatailsList != null && saaForm.saaSectionCChildDeatailsList != undefined && saaForm.saaSectionCChildDeatailsList.length != 0){
			$scope.saaFormCSectionRepeatationArray = saaForm.saaSectionCChildDeatailsList;
			for (var i = 0; i < saaForm.saaSectionCChildDeatailsList.length; i++) {
				for (var j = 0; j < $scope.childGender.length; j++) {
					if ($scope.childGender[j].typeDetailsId == saaForm.saaSectionCChildDeatailsList[i].c_gender)
						$scope.saaFormCSectionRepeatationArray[i].c_gender = $scope.childGender[j];
				}
				for (var j = 0; j < $scope.childCategory.length; j++) {
					if ($scope.childCategory[j].typeDetailsId == saaForm.saaSectionCChildDeatailsList[i].c_saaCategoryName)
						$scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName = $scope.childCategory[j];
				}
				for (var j = 0; j < $scope.typeOfChild.length; j++) {
					if ($scope.typeOfChild[j].typeDetailsId == saaForm.saaSectionCChildDeatailsList[i].c_typeOfChild)
						$scope.saaFormCSectionRepeatationArray[i].c_typeOfChild = $scope.typeOfChild[j];
				}
				for (var j = 0; j < $scope.district.length; j++) {
					if ($scope.district[j].areaId == saaForm.saaSectionCChildDeatailsList[i].c_referredByCwc)
						$scope.saaFormCSectionRepeatationArray[i].c_referredByCwc = $scope.district[j];
				}
			}
		}
		
		if (saaForm.saaSectionCChildDeatails.length>0){
			$scope.saaFormCSectionRepeatationArray = saaForm.saaSectionCChildDeatails;
			for (var i = 0; i < saaForm.saaSectionCChildDeatails.length; i++) {
				for (var j = 0; j < $scope.childGender.length; j++) {
					if ($scope.childGender[j].typeDetailsId == saaForm.saaSectionCChildDeatails[i].c_gender)
						$scope.saaFormCSectionRepeatationArray[i].c_gender = $scope.childGender[j];
				}
				for (var j = 0; j < $scope.childCategory.length; j++) {
					if ($scope.childCategory[j].typeDetailsId == saaForm.saaSectionCChildDeatails[i].c_saaCategoryName)
						$scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName = $scope.childCategory[j];
				}
				for (var j = 0; j < $scope.typeOfChild.length; j++) {
					if ($scope.typeOfChild[j].typeDetailsId == saaForm.saaSectionCChildDeatails[i].c_typeOfChild)
						$scope.saaFormCSectionRepeatationArray[i].c_typeOfChild = $scope.typeOfChild[j];
				}
				for (var j = 0; j < $scope.district.length; j++) {
					if ($scope.district[j].areaId == saaForm.saaSectionCChildDeatails[i].c_referredByCwc)
						$scope.saaFormCSectionRepeatationArray[i].c_referredByCwc = $scope.district[j];
				}
			}
		}

		if (saaForm.saaSectionJs != null && saaForm.saaSectionJs != undefined && saaForm.saaSectionJs.length != 0){
			$scope.saaFormJSectionRepeatationArray = saaForm.saaSectionJs;
			for (var i = 0; i < saaForm.saaSectionJs.length; i++) {
				for (var j = 0; j < $scope.childGender.length; j++) {
					if ($scope.childGender[j].typeDetailsId == saaForm.saaSectionJs[i].j_gender)
						$scope.saaFormJSectionRepeatationArray[i].j_gender = $scope.childGender[j];
				}
				for (var j = 0; j < $scope.childCategory.length; j++) {
					if ($scope.childCategory[j].typeDetailsId == saaForm.saaSectionJs[i].j_saaCategoryName)
						$scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName = $scope.childCategory[j];
				}
				for (var j = 0; j < $scope.typeOfChild.length; j++) {
					if ($scope.typeOfChild[j].typeDetailsId == saaForm.saaSectionJs[i].j_typeOfChild)
						$scope.saaFormJSectionRepeatationArray[i].j_typeOfChild = $scope.typeOfChild[j];
				}
				for (var j = 0; j < $scope.district.length; j++) {
					if ($scope.district[j].areaId == saaForm.saaSectionJs[i].j_referredByCwc)
						$scope.saaFormJSectionRepeatationArray[i].j_referredByCwc = $scope.district[j];
				}
				for (var j = 0; j < $scope.reasonOfPendency.length; j++) {
					if ($scope.reasonOfPendency[j].typeDetailsId == saaForm.saaSectionJs[i].j_reasonOfPendency)
						$scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency = $scope.reasonOfPendency[j];
				}
			}
		}
		
		if (saaForm.saaSectionJ.length != 0){
			$scope.saaFormJSectionRepeatationArray = saaForm.saaSectionJ;
			for (var i = 0; i < saaForm.saaSectionJ.length; i++) {
				for (var j = 0; j < $scope.childGender.length; j++) {
					if ($scope.childGender[j].typeDetailsId == saaForm.saaSectionJ[i].j_gender)
						$scope.saaFormJSectionRepeatationArray[i].j_gender = $scope.childGender[j];
				}
				for (var j = 0; j < $scope.childCategory.length; j++) {
					if ($scope.childCategory[j].typeDetailsId == saaForm.saaSectionJ[i].j_saaCategoryName)
						$scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName = $scope.childCategory[j];
				}
				for (var j = 0; j < $scope.typeOfChild.length; j++) {
					if ($scope.typeOfChild[j].typeDetailsId == saaForm.saaSectionJ[i].j_typeOfChild)
						$scope.saaFormJSectionRepeatationArray[i].j_typeOfChild = $scope.typeOfChild[j];
				}
				for (var j = 0; j < $scope.district.length; j++) {
					if ($scope.district[j].areaId == saaForm.saaSectionJ[i].j_referredByCwc)
						$scope.saaFormJSectionRepeatationArray[i].j_referredByCwc = $scope.district[j];
				}
				for (var j = 0; j < $scope.reasonOfPendency.length; j++) {
					if ($scope.reasonOfPendency[j].typeDetailsId == saaForm.saaSectionJ[i].j_reasonOfPendency)
						$scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency = $scope.reasonOfPendency[j];
				}
			}
		}

		if (saaForm.saaTrainings != null && saaForm.saaTrainings != undefined && saaForm.saaTrainings.length != 0){
			$scope.saaTrainingDetailsRepetitionArray = saaForm.saaTrainings;
			for (var i = 0; i < saaForm.saaTrainings.length; i++) {
				for (var j = 0; j < $scope.trainingOrganisedBy.length; j++) {
					if ($scope.trainingOrganisedBy[j].typeDetailsId == saaForm.saaTrainings[i].trainingOrganisedBy)
						$scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
				}
			}	
		}
		
		if (saaForm.saaDetailsTrainings.length != 0){
			$scope.saaTrainingDetailsRepetitionArray = saaForm.saaDetailsTrainings;
			for (var i = 0; i < saaForm.saaDetailsTrainings.length; i++) {
				for (var j = 0; j < $scope.trainingOrganisedBy.length; j++) {
					if ($scope.trainingOrganisedBy[j].typeDetailsId == saaForm.saaDetailsTrainings[i].trainingOrganisedBy)
						$scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
				}
			}	
		}
		
	};
	
	var preareObject = function(saaForm) {
		saaForm.stateName="Bihar";
		saaForm.a_1BoysTotal= parseInt(document.getElementById('a_1BoysTotal').value);
		saaForm.a_1GirlsTotal= parseInt(document.getElementById('a_1GirlsTotal').value);
		saaForm.a_1GrandTotal= parseInt(document.getElementById('a_1GrandTotal').value);
		saaForm.a_2BoysTotal= parseInt(document.getElementById('a_2BoysTotal').value);
		saaForm.a_2GirlsTotal= parseInt(document.getElementById('a_2GirlsTotal').value);
		saaForm.a_2GrandTotal= parseInt(document.getElementById('a_2GrandTotal').value);
		saaForm.a_3BoysZeroToTwo= parseInt(document.getElementById('a_3BoysZeroToTwo').value);
		saaForm.a_3BoysTwoToFour= parseInt(document.getElementById('a_3BoysTwoToFour').value);
		saaForm.a_3BoysFourToSix= parseInt(document.getElementById('a_3BoysFourToSix').value);
		saaForm.a_3BoysGreaterThanSix= parseInt(document.getElementById('a_3BoysGreaterThanSix').value);
		saaForm.a_3BoysTotal= parseInt(document.getElementById('a_3BoysTotal').value);
		saaForm.a_3GirlsZeroToTwo= parseInt(document.getElementById('a_3GirlsZeroToTwo').value);
		saaForm.a_3GirlsTwoToFour= parseInt(document.getElementById('a_3GirlsTwoToFour').value);
		saaForm.a_3GirlsFourToSix= parseInt(document.getElementById('a_3GirlsFourToSix').value);
		saaForm.a_3GirlsGreaterThanSix= parseInt(document.getElementById('a_3GirlsGreaterThanSix').value);
		saaForm.a_3GirlsTotal= parseInt(document.getElementById('a_3GirlsTotal').value);
		saaForm.a_3GrandTotal= parseInt(document.getElementById('a_3GrandTotal').value);
		saaForm.a_A1BoysTotal= parseInt(document.getElementById('a_A1BoysTotal').value);
		saaForm.a_A1GirlsTotal= parseInt(document.getElementById('a_A1GirlsTotal').value);
		saaForm.a_A1GrandTotal= parseInt(document.getElementById('a_A1GrandTotal').value);
		saaForm.a_A2BoysTotal= parseInt(document.getElementById('a_A2BoysTotal').value);
		saaForm.a_A2GirlsTotal= parseInt(document.getElementById('a_A2GirlsTotal').value);
		saaForm.a_A2GrandTotal= parseInt(document.getElementById('a_A2GrandTotal').value);
		saaForm.a_A3BoysZeroToTwo= parseInt(document.getElementById('a_A3BoysZeroToTwo').value);
		saaForm.a_A3BoysTwoToFour= parseInt(document.getElementById('a_A3BoysTwoToFour').value);
		saaForm.a_A3BoysFourToSix= parseInt(document.getElementById('a_A3BoysFourToSix').value);
		saaForm.a_A3BoysGreaterThanSix= parseInt(document.getElementById('a_A3BoysGreaterThanSix').value);
		saaForm.a_A3BoysTotal= parseInt(document.getElementById('a_A3BoysTotal').value);
		saaForm.a_A3GirlsZeroToTwo= parseInt(document.getElementById('a_A3GirlsZeroToTwo').value);
		saaForm.a_A3GirlsTwoToFour= parseInt(document.getElementById('a_A3GirlsTwoToFour').value);
		saaForm.a_A3GirlsFourToSix= parseInt(document.getElementById('a_A3GirlsFourToSix').value);
		saaForm.a_A3GirlsGreaterThanSix= parseInt(document.getElementById('a_A3GirlsGreaterThanSix').value);
		saaForm.a_A3GirlsTotal= parseInt(document.getElementById('a_A3GirlsTotal').value);
		saaForm.a_A3GrandTotal= parseInt(document.getElementById('a_A3GrandTotal').value);
		saaForm.a1_1BoysTotal= parseInt(document.getElementById('a1_1BoysTotal').value);
		saaForm.a1_1GirlsTotal= parseInt(document.getElementById('a1_1GirlsTotal').value);
		saaForm.a1_1GrandTotal= parseInt(document.getElementById('a1_1GrandTotal').value);
		saaForm.a1_2BoysTotal= parseInt(document.getElementById('a1_2BoysTotal').value);
		saaForm.a1_2GirlsTotal= parseInt(document.getElementById('a1_2GirlsTotal').value);
		saaForm.a1_2GrandTotal= parseInt(document.getElementById('a1_2GrandTotal').value);
		saaForm.a1_3BoysZeroToTwo= parseInt(document.getElementById('a1_3BoysZeroToTwo').value);
		saaForm.a1_3BoysTwoToFour= parseInt(document.getElementById('a1_3BoysTwoToFour').value);
		saaForm.a1_3BoysFourToSix= parseInt(document.getElementById('a1_3BoysFourToSix').value);
		saaForm.a1_3BoysGreaterThanSix= parseInt(document.getElementById('a1_3BoysGreaterThanSix').value);
		saaForm.a1_3BoysTotal= parseInt(document.getElementById('a1_3BoysTotal').value);
		saaForm.a1_3GirlsZeroToTwo= parseInt(document.getElementById('a1_3GirlsZeroToTwo').value);
		saaForm.a1_3GirlsTwoToFour= parseInt(document.getElementById('a1_3GirlsTwoToFour').value);
		saaForm.a1_3GirlsFourToSix= parseInt(document.getElementById('a1_3GirlsFourToSix').value);
		saaForm.a1_3GirlsGreaterThanSix= parseInt(document.getElementById('a1_3GirlsGreaterThanSix').value);
		saaForm.a1_3GirlsTotal= parseInt(document.getElementById('a1_3GirlsTotal').value);
		saaForm.a1_3GrandTotal= parseInt(document.getElementById('a1_3GrandTotal').value);
		saaForm.a1_A1BoysTotal= parseInt(document.getElementById('a1_A1BoysTotal').value);
		saaForm.a1_A1GirlsTotal= parseInt(document.getElementById('a1_A1GirlsTotal').value);
		saaForm.a1_A1GrandTotal= parseInt(document.getElementById('a1_A1GrandTotal').value);
		saaForm.a1_A2BoysTotal= parseInt(document.getElementById('a1_A2BoysTotal').value);
		saaForm.a1_A2GirlsTotal= parseInt(document.getElementById('a1_A2GirlsTotal').value);
		saaForm.a1_A2GrandTotal= parseInt(document.getElementById('a1_A2GrandTotal').value);
		saaForm.a1_A3BoysZeroToTwo= parseInt(document.getElementById('a1_A3BoysZeroToTwo').value);
		saaForm.a1_A3BoysTwoToFour= parseInt(document.getElementById('a1_A3BoysTwoToFour').value);
		saaForm.a1_A3BoysFourToSix= parseInt(document.getElementById('a1_A3BoysFourToSix').value);
		saaForm.a1_A3BoysGreaterThanSix= parseInt(document.getElementById('a1_A3BoysGreaterThanSix').value);
		saaForm.a1_A3BoysTotal= parseInt(document.getElementById('a1_A3BoysTotal').value);
		saaForm.a1_A3GirlsZeroToTwo= parseInt(document.getElementById('a1_A3GirlsZeroToTwo').value);
		saaForm.a1_A3GirlsTwoToFour= parseInt(document.getElementById('a1_A3GirlsTwoToFour').value);
		saaForm.a1_A3GirlsFourToSix= parseInt(document.getElementById('a1_A3GirlsFourToSix').value);
		saaForm.a1_A3GirlsGreaterThanSix= parseInt(document.getElementById('a1_A3GirlsGreaterThanSix').value);
		saaForm.a1_A3GirlsTotal= parseInt(document.getElementById('a1_A3GirlsTotal').value);
		saaForm.a1_A3GrandTotal= parseInt(document.getElementById('a1_A3GrandTotal').value);
		saaForm.a2_1BoysTotal= parseInt(document.getElementById('a2_1BoysTotal').value);
		saaForm.a2_1GirlsTotal= parseInt(document.getElementById('a2_1GirlsTotal').value);
		saaForm.a2_1GrandTotal= parseInt(document.getElementById('a2_1GrandTotal').value);
		saaForm.a2_2BoysTotal= parseInt(document.getElementById('a2_2BoysTotal').value);
		saaForm.a2_2GirlsTotal= parseInt(document.getElementById('a2_2GirlsTotal').value);
		saaForm.a2_2GrandTotal= parseInt(document.getElementById('a2_2GrandTotal').value);
		saaForm.a2_3BoysTotal= parseInt(document.getElementById('a2_3BoysTotal').value);
		saaForm.a2_3GirlsTotal= parseInt(document.getElementById('a2_3GirlsTotal').value);
		saaForm.a2_3GrandTotal= parseInt(document.getElementById('a2_3GrandTotal').value);
		saaForm.a2_4BoysZeroToTwo= parseInt(document.getElementById('a2_4BoysZeroToTwo').value);
		saaForm.a2_4BoysTwoToFour= parseInt(document.getElementById('a2_4BoysTwoToFour').value);
		saaForm.a2_4BoysFourToSix= parseInt(document.getElementById('a2_4BoysFourToSix').value);
		saaForm.a2_4BoysGreaterThanSix= parseInt(document.getElementById('a2_4BoysGreaterThanSix').value);
		saaForm.a2_4BoysTotal= parseInt(document.getElementById('a2_4BoysTotal').value);
		saaForm.a2_4GirlsZeroToTwo= parseInt(document.getElementById('a2_4GirlsZeroToTwo').value);
		saaForm.a2_4GirlsTwoToFour= parseInt(document.getElementById('a2_4GirlsTwoToFour').value);
		saaForm.a2_4GirlsFourToSix= parseInt(document.getElementById('a2_4GirlsFourToSix').value);
		saaForm.a2_4GirlsGreaterThanSix= parseInt(document.getElementById('a2_4GirlsGreaterThanSix').value);
		saaForm.a2_4GirlsTotal= parseInt(document.getElementById('a2_4GirlsTotal').value);
		saaForm.a2_4GrandTotal= parseInt(document.getElementById('a2_4GrandTotal').value);
		saaForm.a2_5BoysTotal= parseInt(document.getElementById('a2_5BoysTotal').value);
		saaForm.a2_5GirlsTotal= parseInt(document.getElementById('a2_5GirlsTotal').value);
		saaForm.a2_5GrandTotal= parseInt(document.getElementById('a2_5GrandTotal').value);
		saaForm.a2_A1BoysTotal= parseInt(document.getElementById('a2_A1BoysTotal').value);
		saaForm.a2_A1GirlsTotal= parseInt(document.getElementById('a2_A1GirlsTotal').value);
		saaForm.a2_A1GrandTotal= parseInt(document.getElementById('a2_A1GrandTotal').value);
		saaForm.a2_A2BoysTotal= parseInt(document.getElementById('a2_A2BoysTotal').value);
		saaForm.a2_A2GirlsTotal= parseInt(document.getElementById('a2_A2GirlsTotal').value);
		saaForm.a2_A2GrandTotal= parseInt(document.getElementById('a2_A2GrandTotal').value);
		saaForm.a2_A3BoysTotal= parseInt(document.getElementById('a2_A3BoysTotal').value);
		saaForm.a2_A3GirlsTotal= parseInt(document.getElementById('a2_A3GirlsTotal').value);
		saaForm.a2_A3GrandTotal= parseInt(document.getElementById('a2_A3GrandTotal').value);
		saaForm.a2_A4BoysZeroToTwo= parseInt(document.getElementById('a2_A4BoysZeroToTwo').value);
		saaForm.a2_A4BoysTwoToFour= parseInt(document.getElementById('a2_A4BoysTwoToFour').value);
		saaForm.a2_A4BoysFourToSix= parseInt(document.getElementById('a2_A4BoysFourToSix').value);
		saaForm.a2_A4BoysGreaterThanSix= parseInt(document.getElementById('a2_A4BoysGreaterThanSix').value);
		saaForm.a2_A4BoysTotal= parseInt(document.getElementById('a2_A4BoysTotal').value);
		saaForm.a2_A4GirlsZeroToTwo= parseInt(document.getElementById('a2_A4GirlsZeroToTwo').value);
		saaForm.a2_A4GirlsTwoToFour= parseInt(document.getElementById('a2_A4GirlsTwoToFour').value);
		saaForm.a2_A4GirlsFourToSix= parseInt(document.getElementById('a2_A4GirlsFourToSix').value);
		saaForm.a2_A4GirlsGreaterThanSix= parseInt(document.getElementById('a2_A4GirlsGreaterThanSix').value);
		saaForm.a2_A4GirlsTotal= parseInt(document.getElementById('a2_A4GirlsTotal').value);
		saaForm.a2_A4GrandTotal= parseInt(document.getElementById('a2_A4GrandTotal').value);
		saaForm.a2_A5BoysTotal= parseInt(document.getElementById('a2_A5BoysTotal').value);
		saaForm.a2_A5GirlsTotal= parseInt(document.getElementById('a2_A5GirlsTotal').value);
		saaForm.a2_A5GrandTotal= parseInt(document.getElementById('a2_A5GrandTotal').value);
		if(saaForm.b1_BoysZeroToTwo==null){saaForm.b1_BoysZeroToTwo=0;}
		if(saaForm.b1_BoysTwoToFour==null){saaForm.b1_BoysTwoToFour=0;}
		if(saaForm.b1_BoysFourToSix==null){saaForm.b1_BoysFourToSix=0;}
		if(saaForm.b1_BoysGreaterThanSix==null){saaForm.b1_BoysGreaterThanSix=0;}
		if(saaForm.b1_BoysTotal==null){saaForm.b1_BoysTotal=0;}
		if(saaForm.b1_GirlsZeroToTwo==null){saaForm.b1_GirlsZeroToTwo=0;}
		if(saaForm.b1_GirlsTwoToFour==null){saaForm.b1_GirlsTwoToFour=0;}
		if(saaForm.b1_GirlsFourToSix==null){saaForm.b1_GirlsFourToSix=0;}
		if(saaForm.b1_GirlsGreaterThanSix==null){saaForm.b1_GirlsGreaterThanSix=0;}
		if(saaForm.b1_GirlsTotal==null){saaForm.b1_GirlsTotal=0;}
		if(saaForm.b1_GrandTotal==null){saaForm.b1_GrandTotal=0;}
		if(saaForm.b1_ABoysZeroToTwo==null){saaForm.b1_ABoysZeroToTwo=0;}
		if(saaForm.b1_ABoysTwoToFour==null){saaForm.b1_ABoysTwoToFour=0;}
		if(saaForm.b1_ABoysFourToSix==null){saaForm.b1_ABoysFourToSix=0;}
		if(saaForm.b1_ABoysGreaterThanSix==null){saaForm.b1_ABoysGreaterThanSix=0;}
		if(saaForm.b1_ABoysTotal==null){saaForm.b1_ABoysTotal=0;}
		if(saaForm.b1_AGirlsZeroToTwo==null){saaForm.b1_AGirlsZeroToTwo=0;}
		if(saaForm.b1_AGirlsTwoToFour==null){saaForm.b1_AGirlsTwoToFour=0;}
		if(saaForm.b1_AGirlsFourToSix==null){saaForm.b1_AGirlsFourToSix=0;}
		if(saaForm.b1_AGirlsGreaterThanSix==null){saaForm.b1_AGirlsGreaterThanSix=0;}
		if(saaForm.b1_AGirlsTotal==null){saaForm.b1_AGirlsTotal=0;}
		if(saaForm.b1_AGrandTotal==null){saaForm.b1_AGrandTotal=0;}
		
		if(saaForm.c1_BoysZeroToTwo==null){saaForm.c1_BoysZeroToTwo=0;}
		if(saaForm.c1_BoysTwoToFour==null){saaForm.c1_BoysTwoToFour=0;}
		if(saaForm.c1_BoysFourToSix==null){saaForm.c1_BoysFourToSix=0;}
		if(saaForm.c1_BoysGreaterThanSix==null){saaForm.c1_BoysGreaterThanSix=0;}
		if(saaForm.c1_BoysTotal==null){saaForm.c1_BoysTotal=0;}
		if(saaForm.c1_GirlsZeroToTwo==null){saaForm.c1_GirlsZeroToTwo=0;}
		if(saaForm.c1_GirlsTwoToFour==null){saaForm.c1_GirlsTwoToFour=0;}
		if(saaForm.c1_GirlsFourToSix==null){saaForm.c1_GirlsFourToSix=0;}
		if(saaForm.c1_GirlsGreaterThanSix==null){saaForm.c1_GirlsGreaterThanSix=0;}
		if(saaForm.c1_GirlsTotal==null){saaForm.c1_GirlsTotal=0;}
		if(saaForm.c1_GrandTotal==null){saaForm.c1_GrandTotal=0;}
		if(saaForm.c2_BoysZeroToTwo==null){saaForm.c2_BoysZeroToTwo=0;}
		if(saaForm.c2_BoysTwoToFour==null){saaForm.c2_BoysTwoToFour=0;}
		if(saaForm.c2_BoysFourToSix==null){saaForm.c2_BoysFourToSix=0;}
		if(saaForm.c2_BoysGreaterThanSix==null){saaForm.c2_BoysGreaterThanSix=0;}
		if(saaForm.c2_BoysTotal==null){saaForm.c2_BoysTotal=0;}
		if(saaForm.c2_GirlsZeroToTwo==null){saaForm.c2_GirlsZeroToTwo=0;}
		if(saaForm.c2_GirlsTwoToFour==null){saaForm.c2_GirlsTwoToFour=0;}
		if(saaForm.c2_GirlsFourToSix==null){saaForm.c2_GirlsFourToSix=0;}
		if(saaForm.c2_GirlsGreaterThanSix==null){saaForm.c2_GirlsGreaterThanSix=0;}
		if(saaForm.c2_GirlsTotal==null){saaForm.c2_GirlsTotal=0;}
		if(saaForm.c2_GrandTotal==null){saaForm.c2_GrandTotal=0;}
		if(saaForm.c3_BoysZeroToTwo==null){saaForm.c3_BoysZeroToTwo=0;}
		if(saaForm.c3_BoysTwoToFour==null){saaForm.c3_BoysTwoToFour=0;}
		if(saaForm.c3_BoysFourToSix==null){saaForm.c3_BoysFourToSix=0;}
		if(saaForm.c3_BoysGreaterThanSix==null){saaForm.c3_BoysGreaterThanSix=0;}
		if(saaForm.c3_BoysTotal==null){saaForm.c3_BoysTotal=0;}
		if(saaForm.c3_GirlsZeroToTwo==null){saaForm.c3_GirlsZeroToTwo=0;}
		if(saaForm.c3_GirlsTwoToFour==null){saaForm.c3_GirlsTwoToFour=0;}
		if(saaForm.c3_GirlsFourToSix==null){saaForm.c3_GirlsFourToSix=0;}
		if(saaForm.c3_GirlsGreaterThanSix==null){saaForm.c3_GirlsGreaterThanSix=0;}
		if(saaForm.c3_GirlsTotal==null){saaForm.c3_GirlsTotal=0;}
		if(saaForm.c3_GrandTotal==null){saaForm.c3_GrandTotal=0;}
		if(saaForm.c4_BoysZeroToTwo==null){saaForm.c4_BoysZeroToTwo=0;}
		if(saaForm.c4_BoysTwoToFour==null){saaForm.c4_BoysTwoToFour=0;}
		if(saaForm.c4_BoysFourToSix==null){saaForm.c4_BoysFourToSix=0;}
		if(saaForm.c4_BoysGreaterThanSix==null){saaForm.c4_BoysGreaterThanSix=0;}
		if(saaForm.c4_BoysTotal==null){saaForm.c4_BoysTotal=0;}
		if(saaForm.c4_GirlsZeroToTwo==null){saaForm.c4_GirlsZeroToTwo=0;}
		if(saaForm.c4_GirlsTwoToFour==null){saaForm.c4_GirlsTwoToFour=0;}
		if(saaForm.c4_GirlsFourToSix==null){saaForm.c4_GirlsFourToSix=0;}
		if(saaForm.c4_GirlsGreaterThanSix==null){saaForm.c4_GirlsGreaterThanSix=0;}
		if(saaForm.c4_GirlsTotal==null){saaForm.c4_GirlsTotal=0;}
		if(saaForm.c4_GrandTotal==null){saaForm.c4_GrandTotal=0;}
		if(saaForm.c5_BoysZeroToTwo==null){saaForm.c5_BoysZeroToTwo=0;}
		if(saaForm.c5_BoysTwoToFour==null){saaForm.c5_BoysTwoToFour=0;}
		if(saaForm.c5_BoysFourToSix==null){saaForm.c5_BoysFourToSix=0;}
		if(saaForm.c5_BoysGreaterThanSix==null){saaForm.c5_BoysGreaterThanSix=0;}
		if(saaForm.c5_BoysTotal==null){saaForm.c5_BoysTotal=0;}
		if(saaForm.c5_GirlsZeroToTwo==null){saaForm.c5_GirlsZeroToTwo=0;}
		if(saaForm.c5_GirlsTwoToFour==null){saaForm.c5_GirlsTwoToFour=0;}
		if(saaForm.c5_GirlsFourToSix==null){saaForm.c5_GirlsFourToSix=0;}
		if(saaForm.c5_GirlsGreaterThanSix==null){saaForm.c5_GirlsGreaterThanSix=0;}
		if(saaForm.c5_GirlsTotal==null){saaForm.c5_GirlsTotal=0;}
		if(saaForm.c5_GrandTotal==null){saaForm.c5_GrandTotal=0;}
		if(saaForm.c6_BoysZeroToTwo==null){saaForm.c6_BoysZeroToTwo=0;}
		if(saaForm.c6_BoysTwoToFour==null){saaForm.c6_BoysTwoToFour=0;}
		if(saaForm.c6_BoysFourToSix==null){saaForm.c6_BoysFourToSix=0;}
		if(saaForm.c6_BoysGreaterThanSix==null){saaForm.c6_BoysGreaterThanSix=0;}
		if(saaForm.c6_BoysTotal==null){saaForm.c6_BoysTotal=0;}
		if(saaForm.c6_GirlsZeroToTwo==null){saaForm.c6_GirlsZeroToTwo=0;}
		if(saaForm.c6_GirlsTwoToFour==null){saaForm.c6_GirlsTwoToFour=0;}
		if(saaForm.c6_GirlsFourToSix==null){saaForm.c6_GirlsFourToSix=0;}
		if(saaForm.c6_GirlsGreaterThanSix==null){saaForm.c6_GirlsGreaterThanSix=0;}
		if(saaForm.c6_GirlsTotal==null){saaForm.c6_GirlsTotal=0;}
		if(saaForm.c6_GrandTotal==null){saaForm.c6_GrandTotal=0;}
		if(saaForm.c1_ABoysZeroToTwo==null){saaForm.c1_ABoysZeroToTwo=0;}
		if(saaForm.c1_ABoysTwoToFour==null){saaForm.c1_ABoysTwoToFour=0;}
		if(saaForm.c1_ABoysFourToSix==null){saaForm.c1_ABoysFourToSix=0;}
		if(saaForm.c1_ABoysGreaterThanSix==null){saaForm.c1_ABoysGreaterThanSix=0;}
		if(saaForm.c1_ABoysTotal==null){saaForm.c1_ABoysTotal=0;}
		if(saaForm.c1_AGirlsZeroToTwo==null){saaForm.c1_AGirlsZeroToTwo=0;}
		if(saaForm.c1_AGirlsTwoToFour==null){saaForm.c1_AGirlsTwoToFour=0;}
		if(saaForm.c1_AGirlsFourToSix==null){saaForm.c1_AGirlsFourToSix=0;}
		if(saaForm.c1_AGirlsGreaterThanSix==null){saaForm.c1_AGirlsGreaterThanSix=0;}
		if(saaForm.c1_AGirlsTotal==null){saaForm.c1_AGirlsTotal=0;}
		if(saaForm.c1_AGrandTotal==null){saaForm.c1_AGrandTotal=0;}
		if(saaForm.c2_ABoysZeroToTwo==null){saaForm.c2_ABoysZeroToTwo=0;}
		if(saaForm.c2_ABoysTwoToFour==null){saaForm.c2_ABoysTwoToFour=0;}
		if(saaForm.c2_ABoysFourToSix==null){saaForm.c2_ABoysFourToSix=0;}
		if(saaForm.c2_ABoysGreaterThanSix==null){saaForm.c2_ABoysGreaterThanSix=0;}
		if(saaForm.c2_ABoysTotal==null){saaForm.c2_ABoysTotal=0;}
		if(saaForm.c2_AGirlsZeroToTwo==null){saaForm.c2_AGirlsZeroToTwo=0;}
		if(saaForm.c2_AGirlsTwoToFour==null){saaForm.c2_AGirlsTwoToFour=0;}
		if(saaForm.c2_AGirlsFourToSix==null){saaForm.c2_AGirlsFourToSix=0;}
		if(saaForm.c2_AGirlsGreaterThanSix==null){saaForm.c2_AGirlsGreaterThanSix=0;}
		if(saaForm.c2_AGirlsTotal==null){saaForm.c2_AGirlsTotal=0;}
		if(saaForm.c2_AGrandTotal==null){saaForm.c2_AGrandTotal=0;}
		if(saaForm.c3_ABoysZeroToTwo==null){saaForm.c3_ABoysZeroToTwo=0;}
		if(saaForm.c3_ABoysTwoToFour==null){saaForm.c3_ABoysTwoToFour=0;}
		if(saaForm.c3_ABoysFourToSix==null){saaForm.c3_ABoysFourToSix=0;}
		if(saaForm.c3_ABoysGreaterThanSix==null){saaForm.c3_ABoysGreaterThanSix=0;}
		if(saaForm.c3_ABoysTotal==null){saaForm.c3_ABoysTotal=0;}
		if(saaForm.c3_AGirlsZeroToTwo==null){saaForm.c3_AGirlsZeroToTwo=0;}
		if(saaForm.c3_AGirlsTwoToFour==null){saaForm.c3_AGirlsTwoToFour=0;}
		if(saaForm.c3_AGirlsFourToSix==null){saaForm.c3_AGirlsFourToSix=0;}
		if(saaForm.c3_AGirlsGreaterThanSix==null){saaForm.c3_AGirlsGreaterThanSix=0;}
		if(saaForm.c3_AGirlsTotal==null){saaForm.c3_AGirlsTotal=0;}
		if(saaForm.c3_AGrandTotal==null){saaForm.c3_AGrandTotal=0;}
		if(saaForm.c4_ABoysZeroToTwo==null){saaForm.c4_ABoysZeroToTwo=0;}
		if(saaForm.c4_ABoysTwoToFour==null){saaForm.c4_ABoysTwoToFour=0;}
		if(saaForm.c4_ABoysFourToSix==null){saaForm.c4_ABoysFourToSix=0;}
		if(saaForm.c4_ABoysGreaterThanSix==null){saaForm.c4_ABoysGreaterThanSix=0;}
		if(saaForm.c4_ABoysTotal==null){saaForm.c4_ABoysTotal=0;}
		if(saaForm.c4_AGirlsZeroToTwo==null){saaForm.c4_AGirlsZeroToTwo=0;}
		if(saaForm.c4_AGirlsTwoToFour==null){saaForm.c4_AGirlsTwoToFour=0;}
		if(saaForm.c4_AGirlsFourToSix==null){saaForm.c4_AGirlsFourToSix=0;}
		if(saaForm.c4_AGirlsGreaterThanSix==null){saaForm.c4_AGirlsGreaterThanSix=0;}
		if(saaForm.c4_AGirlsTotal==null){saaForm.c4_AGirlsTotal=0;}
		if(saaForm.c4_AGrandTotal==null){saaForm.c4_AGrandTotal=0;}
		if(saaForm.c5_ABoysZeroToTwo==null){saaForm.c5_ABoysZeroToTwo=0;}
		if(saaForm.c5_ABoysTwoToFour==null){saaForm.c5_ABoysTwoToFour=0;}
		if(saaForm.c5_ABoysFourToSix==null){saaForm.c5_ABoysFourToSix=0;}
		if(saaForm.c5_ABoysGreaterThanSix==null){saaForm.c5_ABoysGreaterThanSix=0;}
		if(saaForm.c5_ABoysTotal==null){saaForm.c5_ABoysTotal=0;}
		if(saaForm.c5_AGirlsZeroToTwo==null){saaForm.c5_AGirlsZeroToTwo=0;}
		if(saaForm.c5_AGirlsTwoToFour==null){saaForm.c5_AGirlsTwoToFour=0;}
		if(saaForm.c5_AGirlsFourToSix==null){saaForm.c5_AGirlsFourToSix=0;}
		if(saaForm.c5_AGirlsGreaterThanSix==null){saaForm.c5_AGirlsGreaterThanSix=0;}
		if(saaForm.c5_AGirlsTotal==null){saaForm.c5_AGirlsTotal=0;}
		if(saaForm.c5_AGrandTotal==null){saaForm.c5_AGrandTotal=0;}
		if(saaForm.c6_ABoysZeroToTwo==null){saaForm.c6_ABoysZeroToTwo=0;}
		if(saaForm.c6_ABoysTwoToFour==null){saaForm.c6_ABoysTwoToFour=0;}
		if(saaForm.c6_ABoysFourToSix==null){saaForm.c6_ABoysFourToSix=0;}
		if(saaForm.c6_ABoysGreaterThanSix==null){saaForm.c6_ABoysGreaterThanSix=0;}
		if(saaForm.c6_ABoysTotal==null){saaForm.c6_ABoysTotal=0;}
		if(saaForm.c6_AGirlsZeroToTwo==null){saaForm.c6_AGirlsZeroToTwo=0;}
		if(saaForm.c6_AGirlsTwoToFour==null){saaForm.c6_AGirlsTwoToFour=0;}
		if(saaForm.c6_AGirlsFourToSix==null){saaForm.c6_AGirlsFourToSix=0;}
		if(saaForm.c6_AGirlsGreaterThanSix==null){saaForm.c6_AGirlsGreaterThanSix=0;}
		if(saaForm.c6_AGirlsTotal==null){saaForm.c6_AGirlsTotal=0;}
		if(saaForm.c6_AGrandTotal==null){saaForm.c6_AGrandTotal=0;}
		saaForm.c1_BoysTotal= parseInt(document.getElementById('c1_BoysTotal').value);
		saaForm.c1_GirlsTotal= parseInt(document.getElementById('c1_GirlsTotal').value);
		saaForm.c1_GrandTotal= parseInt(document.getElementById('c1_GrandTotal').value);
		saaForm.c2_BoysTotal= parseInt(document.getElementById('c2_BoysTotal').value);
		saaForm.c2_GirlsTotal= parseInt(document.getElementById('c2_GirlsTotal').value);
		saaForm.c2_GrandTotal= parseInt(document.getElementById('c2_GrandTotal').value);
		saaForm.c3_BoysTotal= parseInt(document.getElementById('c3_BoysTotal').value);
		saaForm.c3_GirlsTotal= parseInt(document.getElementById('c3_GirlsTotal').value);
		saaForm.c3_GrandTotal= parseInt(document.getElementById('c3_GrandTotal').value);
		saaForm.c4_BoysTotal= parseInt(document.getElementById('c4_BoysTotal').value);
		saaForm.c4_GirlsTotal= parseInt(document.getElementById('c4_GirlsTotal').value);
		saaForm.c4_GrandTotal= parseInt(document.getElementById('c4_GrandTotal').value);
		saaForm.c5_BoysTotal= parseInt(document.getElementById('c5_BoysTotal').value);
		saaForm.c5_GirlsTotal= parseInt(document.getElementById('c5_GirlsTotal').value);
		saaForm.c5_GrandTotal= parseInt(document.getElementById('c5_GrandTotal').value);
		saaForm.c6_BoysZeroToTwo= parseInt(document.getElementById('c6_BoysZeroToTwo').value);
		saaForm.c6_BoysTwoToFour= parseInt(document.getElementById('c6_BoysTwoToFour').value);
		saaForm.c6_BoysFourToSix= parseInt(document.getElementById('c6_BoysFourToSix').value);
		saaForm.c6_BoysGreaterThanSix= parseInt(document.getElementById('c6_BoysGreaterThanSix').value);
		saaForm.c6_BoysTotal= parseInt(document.getElementById('c6_BoysTotal').value);
		saaForm.c6_GirlsZeroToTwo= parseInt(document.getElementById('c6_GirlsZeroToTwo').value);
		saaForm.c6_GirlsTwoToFour= parseInt(document.getElementById('c6_GirlsTwoToFour').value);
		saaForm.c6_GirlsFourToSix= parseInt(document.getElementById('c6_GirlsFourToSix').value);
		saaForm.c6_GirlsGreaterThanSix= parseInt(document.getElementById('c6_GirlsGreaterThanSix').value);
		saaForm.c6_GirlsTotal= parseInt(document.getElementById('c6_GirlsTotal').value);
		saaForm.c6_GrandTotal= parseInt(document.getElementById('c6_GrandTotal').value);
		saaForm.c1_ABoysTotal= parseInt(document.getElementById('c1_ABoysTotal').value);
		saaForm.c1_AGirlsTotal= parseInt(document.getElementById('c1_AGirlsTotal').value);
		saaForm.c1_AGrandTotal= parseInt(document.getElementById('c1_AGrandTotal').value);
		saaForm.c2_ABoysTotal= parseInt(document.getElementById('c2_ABoysTotal').value);
		saaForm.c2_AGirlsTotal= parseInt(document.getElementById('c2_AGirlsTotal').value);
		saaForm.c2_AGrandTotal= parseInt(document.getElementById('c2_AGrandTotal').value);
		saaForm.c3_ABoysTotal= parseInt(document.getElementById('c3_ABoysTotal').value);
		saaForm.c3_AGirlsTotal= parseInt(document.getElementById('c3_AGirlsTotal').value);
		saaForm.c3_AGrandTotal= parseInt(document.getElementById('c3_AGrandTotal').value);
		saaForm.c4_ABoysTotal= parseInt(document.getElementById('c4_ABoysTotal').value);
		saaForm.c4_AGirlsTotal= parseInt(document.getElementById('c4_AGirlsTotal').value);
		saaForm.c4_AGrandTotal= parseInt(document.getElementById('c4_AGrandTotal').value);
		saaForm.c5_ABoysTotal= parseInt(document.getElementById('c5_ABoysTotal').value);
		saaForm.c5_AGirlsTotal= parseInt(document.getElementById('c5_AGirlsTotal').value);
		saaForm.c5_AGrandTotal= parseInt(document.getElementById('c5_AGrandTotal').value);
		saaForm.c6_ABoysZeroToTwo= parseInt(document.getElementById('c6_ABoysZeroToTwo').value);
		saaForm.c6_ABoysTwoToFour= parseInt(document.getElementById('c6_ABoysTwoToFour').value);
		saaForm.c6_ABoysFourToSix= parseInt(document.getElementById('c6_ABoysFourToSix').value);
		saaForm.c6_ABoysGreaterThanSix= parseInt(document.getElementById('c6_ABoysGreaterThanSix').value);
		saaForm.c6_ABoysTotal= parseInt(document.getElementById('c6_ABoysTotal').value);
		saaForm.c6_AGirlsZeroToTwo= parseInt(document.getElementById('c6_AGirlsZeroToTwo').value);
		saaForm.c6_AGirlsTwoToFour= parseInt(document.getElementById('c6_AGirlsTwoToFour').value);
		saaForm.c6_AGirlsFourToSix= parseInt(document.getElementById('c6_AGirlsFourToSix').value);
		saaForm.c6_AGirlsGreaterThanSix= parseInt(document.getElementById('c6_AGirlsGreaterThanSix').value);
		saaForm.c6_AGirlsTotal= parseInt(document.getElementById('c6_AGirlsTotal').value);
		saaForm.c6_AGrandTotal= parseInt(document.getElementById('c6_AGrandTotal').value);
		saaForm.d1_BoysZeroToTwo= parseInt(document.getElementById('d1_BoysZeroToTwo').value);
		saaForm.d1_BoysTwoToFour= parseInt(document.getElementById('d1_BoysTwoToFour').value);
		saaForm.d1_BoysFourToSix= parseInt(document.getElementById('d1_BoysFourToSix').value);
		saaForm.d1_BoysGreaterThanSix= parseInt(document.getElementById('d1_BoysGreaterThanSix').value);
		saaForm.d1_BoysTotal= parseInt(document.getElementById('d1_BoysTotal').value);
		saaForm.d1_GirlsZeroToTwo= parseInt(document.getElementById('d1_GirlsZeroToTwo').value);
		saaForm.d1_GirlsTwoToFour= parseInt(document.getElementById('d1_GirlsTwoToFour').value);
		saaForm.d1_GirlsFourToSix= parseInt(document.getElementById('d1_GirlsFourToSix').value);
		saaForm.d1_GirlsGreaterThanSix= parseInt(document.getElementById('d1_GirlsGreaterThanSix').value);
		saaForm.d1_GirlsTotal= parseInt(document.getElementById('d1_GirlsTotal').value);
		saaForm.d1_GrandTotal= parseInt(document.getElementById('d1_GrandTotal').value);
		saaForm.d2_BoysZeroToTwo= parseInt(document.getElementById('d2_BoysZeroToTwo').value);
		saaForm.d2_BoysTwoToFour= parseInt(document.getElementById('d2_BoysTwoToFour').value);
		saaForm.d2_BoysFourToSix= parseInt(document.getElementById('d2_BoysFourToSix').value);
		saaForm.d2_BoysGreaterThanSix= parseInt(document.getElementById('d2_BoysGreaterThanSix').value);
		saaForm.d2_BoysTotal= parseInt(document.getElementById('d2_BoysTotal').value);
		saaForm.d2_GirlsZeroToTwo= parseInt(document.getElementById('d2_GirlsZeroToTwo').value);
		saaForm.d2_GirlsTwoToFour= parseInt(document.getElementById('d2_GirlsTwoToFour').value);
		saaForm.d2_GirlsFourToSix= parseInt(document.getElementById('d2_GirlsFourToSix').value);
		saaForm.d2_GirlsGreaterThanSix= parseInt(document.getElementById('d2_GirlsGreaterThanSix').value);
		saaForm.d2_GirlsTotal= parseInt(document.getElementById('d2_GirlsTotal').value);
		saaForm.d2_GrandTotal= parseInt(document.getElementById('d2_GrandTotal').value);
		saaForm.e1_BoysTotal= parseInt(document.getElementById('e1_BoysTotal').value);
		saaForm.e1_GirlsTotal= parseInt(document.getElementById('e1_GirlsTotal').value);
		saaForm.e1_GrandTotal= parseInt(document.getElementById('e1_GrandTotal').value);
		saaForm.e2_BoysTotal= parseInt(document.getElementById('e2_BoysTotal').value);
		saaForm.e2_GirlsTotal= parseInt(document.getElementById('e2_GirlsTotal').value);
		saaForm.e2_GrandTotal= parseInt(document.getElementById('e2_GrandTotal').value);
		saaForm.e3_BoysTotal= parseInt(document.getElementById('e3_BoysTotal').value);
		saaForm.e3_GirlsTotal= parseInt(document.getElementById('e3_GirlsTotal').value);
		saaForm.e3_GrandTotal= parseInt(document.getElementById('e3_GrandTotal').value);
		saaForm.e4_BoysTotal= parseInt(document.getElementById('e4_BoysTotal').value);
		saaForm.e4_GirlsTotal= parseInt(document.getElementById('e4_GirlsTotal').value);
		saaForm.e4_GrandTotal= parseInt(document.getElementById('e4_GrandTotal').value);
		saaForm.e5_BoysTotal= parseInt(document.getElementById('e5_BoysTotal').value);
		saaForm.e5_GirlsTotal= parseInt(document.getElementById('e5_GirlsTotal').value);
		saaForm.e5_GrandTotal= parseInt(document.getElementById('e5_GrandTotal').value);
		saaForm.e6_BoysTotal= parseInt(document.getElementById('e6_BoysTotal').value);
		saaForm.e6_GirlsTotal= parseInt(document.getElementById('e6_GirlsTotal').value);
		saaForm.e6_GrandTotal= parseInt(document.getElementById('e6_GrandTotal').value);
		saaForm.e7_BoysZeroToTwo= parseInt(document.getElementById('e7_BoysZeroToTwo').value);
		saaForm.e7_BoysTwoToFour= parseInt(document.getElementById('e7_BoysTwoToFour').value);
		saaForm.e7_BoysFourToSix= parseInt(document.getElementById('e7_BoysFourToSix').value);
		saaForm.e7_BoysGreaterThanSix= parseInt(document.getElementById('e7_BoysGreaterThanSix').value);
		saaForm.e7_BoysTotal= parseInt(document.getElementById('e7_BoysTotal').value);
		saaForm.e7_GirlsZeroToTwo= parseInt(document.getElementById('e7_GirlsZeroToTwo').value);
		saaForm.e7_GirlsTwoToFour= parseInt(document.getElementById('e7_GirlsTwoToFour').value);
		saaForm.e7_GirlsFourToSix= parseInt(document.getElementById('e7_GirlsFourToSix').value);
		saaForm.e7_GirlsGreaterThanSix= parseInt(document.getElementById('e7_GirlsGreaterThanSix').value);
		saaForm.e7_GirlsTotal= parseInt(document.getElementById('e7_GirlsTotal').value);
		saaForm.e7_GrandTotal= parseInt(document.getElementById('e7_GrandTotal').value);
		saaForm.e1_ABoysTotal= parseInt(document.getElementById('e1_ABoysTotal').value);
		saaForm.e1_AGirlsTotal= parseInt(document.getElementById('e1_AGirlsTotal').value);
		saaForm.e1_AGrandTotal= parseInt(document.getElementById('e1_AGrandTotal').value);
		saaForm.e2_ABoysTotal= parseInt(document.getElementById('e2_ABoysTotal').value);
		saaForm.e2_AGirlsTotal= parseInt(document.getElementById('e2_AGirlsTotal').value);
		saaForm.e2_AGrandTotal= parseInt(document.getElementById('e2_AGrandTotal').value);
		saaForm.e3_ABoysTotal= parseInt(document.getElementById('e3_ABoysTotal').value);
		saaForm.e3_AGirlsTotal= parseInt(document.getElementById('e3_AGirlsTotal').value);
		saaForm.e3_AGrandTotal= parseInt(document.getElementById('e3_AGrandTotal').value);
		saaForm.e4_ABoysTotal= parseInt(document.getElementById('e4_ABoysTotal').value);
		saaForm.e4_AGirlsTotal= parseInt(document.getElementById('e4_AGirlsTotal').value);
		saaForm.e4_AGrandTotal= parseInt(document.getElementById('e4_AGrandTotal').value);
		saaForm.e5_ABoysTotal= parseInt(document.getElementById('e5_ABoysTotal').value);
		saaForm.e5_AGirlsTotal= parseInt(document.getElementById('e5_AGirlsTotal').value);
		saaForm.e5_AGrandTotal= parseInt(document.getElementById('e5_AGrandTotal').value);
		saaForm.e6_ABoysTotal= parseInt(document.getElementById('e6_ABoysTotal').value);
		saaForm.e6_AGirlsTotal= parseInt(document.getElementById('e6_AGirlsTotal').value);
		saaForm.e6_AGrandTotal= parseInt(document.getElementById('e6_AGrandTotal').value);
		saaForm.e7_ABoysZeroToTwo= parseInt(document.getElementById('e7_ABoysZeroToTwo').value);
		saaForm.e7_ABoysTwoToFour= parseInt(document.getElementById('e7_ABoysTwoToFour').value);
		saaForm.e7_ABoysFourToSix= parseInt(document.getElementById('e7_ABoysFourToSix').value);
		saaForm.e7_ABoysGreaterThanSix= parseInt(document.getElementById('e7_ABoysGreaterThanSix').value);
		saaForm.e7_ABoysTotal= parseInt(document.getElementById('e7_ABoysTotal').value);
		saaForm.e7_AGirlsZeroToTwo= parseInt(document.getElementById('e7_AGirlsZeroToTwo').value);
		saaForm.e7_AGirlsTwoToFour= parseInt(document.getElementById('e7_AGirlsTwoToFour').value);
		saaForm.e7_AGirlsFourToSix= parseInt(document.getElementById('e7_AGirlsFourToSix').value);
		saaForm.e7_AGirlsGreaterThanSix= parseInt(document.getElementById('e7_AGirlsGreaterThanSix').value);
		saaForm.e7_AGirlsTotal= parseInt(document.getElementById('e7_AGirlsTotal').value);
		saaForm.e7_AGrandTotal= parseInt(document.getElementById('e7_AGrandTotal').value);
		saaForm.f1_BoysZeroToTwo= parseInt(document.getElementById('f1_BoysZeroToTwo').value);
		saaForm.f1_BoysTwoToFour= parseInt(document.getElementById('f1_BoysTwoToFour').value);
		saaForm.f1_BoysFourToSix= parseInt(document.getElementById('f1_BoysFourToSix').value);
		saaForm.f1_BoysGreaterThanSix= parseInt(document.getElementById('f1_BoysGreaterThanSix').value);
		saaForm.f1_BoysTotal= parseInt(document.getElementById('f1_BoysTotal').value);
		saaForm.f1_GirlsZeroToTwo= parseInt(document.getElementById('f1_GirlsZeroToTwo').value);
		saaForm.f1_GirlsTwoToFour= parseInt(document.getElementById('f1_GirlsTwoToFour').value);
		saaForm.f1_GirlsFourToSix= parseInt(document.getElementById('f1_GirlsFourToSix').value);
		saaForm.f1_GirlsGreaterThanSix= parseInt(document.getElementById('f1_GirlsGreaterThanSix').value);
		saaForm.f1_GirlsTotal= parseInt(document.getElementById('f1_GirlsTotal').value);
		saaForm.f1_GrandTotal= parseInt(document.getElementById('f1_GrandTotal').value);
		saaForm.f2_BoysZeroToTwo= parseInt(document.getElementById('f2_BoysZeroToTwo').value);
		saaForm.f2_BoysTwoToFour= parseInt(document.getElementById('f2_BoysTwoToFour').value);
		saaForm.f2_BoysFourToSix= parseInt(document.getElementById('f2_BoysFourToSix').value);
		saaForm.f2_BoysGreaterThanSix= parseInt(document.getElementById('f2_BoysGreaterThanSix').value);
		saaForm.f2_BoysTotal= parseInt(document.getElementById('f2_BoysTotal').value);
		saaForm.f2_GirlsZeroToTwo= parseInt(document.getElementById('f2_GirlsZeroToTwo').value);
		saaForm.f2_GirlsTwoToFour= parseInt(document.getElementById('f2_GirlsTwoToFour').value);
		saaForm.f2_GirlsFourToSix= parseInt(document.getElementById('f2_GirlsFourToSix').value);
		saaForm.f2_GirlsGreaterThanSix= parseInt(document.getElementById('f2_GirlsGreaterThanSix').value);
		saaForm.f2_GirlsTotal= parseInt(document.getElementById('f2_GirlsTotal').value);
		saaForm.f2_GrandTotal= parseInt(document.getElementById('f2_GrandTotal').value);
		saaForm.f3_BoysTotal= parseInt(document.getElementById('f3_BoysTotal').value);
		saaForm.f3_GirlsTotal= parseInt(document.getElementById('f3_GirlsTotal').value);
		saaForm.f3_GrandTotal= parseInt(document.getElementById('f3_GrandTotal').value);
		saaForm.f4_BoysTotal= parseInt(document.getElementById('f4_BoysTotal').value);
		saaForm.f4_GirlsTotal= parseInt(document.getElementById('f4_GirlsTotal').value);
		saaForm.f4_GrandTotal= parseInt(document.getElementById('f4_GrandTotal').value);
		saaForm.g1GrandTotalBoys= parseInt(document.getElementById('g1GrandTotalBoys').value);
		saaForm.g1GrandTotalGirls= parseInt(document.getElementById('g1GrandTotalGirls').value);
		saaForm.g2GrandTotalBoys= parseInt(document.getElementById('g2GrandTotalBoys').value);
		saaForm.g2GrandTotalGirls= parseInt(document.getElementById('g2GrandTotalGirls').value);
		saaForm.g3GrandTotalBoys= parseInt(document.getElementById('g3GrandTotalBoys').value);
		saaForm.g3GrandTotalGirls= parseInt(document.getElementById('g3GrandTotalGirls').value);
		saaForm.g4OrphanBoys= parseInt(document.getElementById('g4OrphanBoys').value);
		saaForm.g4OrphanGirls= parseInt(document.getElementById('g4OrphanGirls').value);
		saaForm.g4AbandonedBoys= parseInt(document.getElementById('g4AbandonedBoys').value);
		saaForm.g4AbandonedGirls= parseInt(document.getElementById('g4AbandonedGirls').value);
		saaForm.g4SurrenderedBoys= parseInt(document.getElementById('g4SurrenderedBoys').value);
		saaForm.g4SurrenderedGirls= parseInt(document.getElementById('g4SurrenderedGirls').value);
		saaForm.g4GrandTotalBoys= parseInt(document.getElementById('g4GrandTotalBoys').value);
		saaForm.g4GrandTotalGirls= parseInt(document.getElementById('g4GrandTotalGirls').value);
		saaForm.g5_2Total= parseInt(document.getElementById('g5_2Total').value);
		saaForm.g5_3Total= parseInt(document.getElementById('g5_3Total').value);
		saaForm.g5_4Total= parseInt(document.getElementById('g5_4Total').value);
		saaForm.g5_5LessThan60= parseInt(document.getElementById('g5_5LessThan60').value);
		saaForm.g5_5Between60To120= parseInt(document.getElementById('g5_5Between60To120').value);
		saaForm.g5_5GreaterThan120= parseInt(document.getElementById('g5_5GreaterThan120').value);
		saaForm.g5_5Total= parseInt(document.getElementById('g5_5Total').value);
		saaForm.g5_7Total= parseInt(document.getElementById('g5_7Total').value);
		saaForm.h_h5= parseInt(document.getElementById('h_h5').value);
		saaForm.h1_1Total= parseInt(document.getElementById('h1_1Total').value);
		saaForm.h1_2Total= parseInt(document.getElementById('h1_2Total').value);
		saaForm.h1_3Total= parseInt(document.getElementById('h1_3Total').value);
		saaForm.h1_4Total= parseInt(document.getElementById('h1_4Total').value);
		saaForm.h1_5NoChoice= parseInt(document.getElementById('h1_5NoChoice').value);
		saaForm.h1_5Girls= parseInt(document.getElementById('h1_5Girls').value);
		saaForm.h1_5Boys= parseInt(document.getElementById('h1_5Boys').value);
		saaForm.h1_5Siblings= parseInt(document.getElementById('h1_5Siblings').value);
		saaForm.h1_5Total= parseInt(document.getElementById('h1_5Total').value);
		saaForm.h1_5SplNeeds= parseInt(document.getElementById('h1_5SplNeeds').value);
		
		saaForm.monthName=document.getElementById('monName').value;
		saaForm.userId = Number(document.getElementById("uId").value);
		resetVarJNums();
		/*resetVarNums();*/
		if ($scope.selectedDistrict != undefined)
			saaForm.districtId = $scope.selectedDistrict.areaId;

		for (var i = 0; i < $scope.saaFormCSectionRepeatationArray.length; i++) {
			if ($scope.saaFormCSectionRepeatationArray[i].c_gender != null || $scope.saaFormCSectionRepeatationArray[i].c_gender != undefined)
				$scope.saaFormCSectionRepeatationArray[i].c_gender = $scope.saaFormCSectionRepeatationArray[i].c_gender.typeDetailsId;
			
			if ($scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName != null || $scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName != undefined)
				$scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName = $scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName.typeDetailsId;
			
			if ($scope.saaFormCSectionRepeatationArray[i].c_typeOfChild != null || $scope.saaFormCSectionRepeatationArray[i].c_typeOfChild != undefined)
				$scope.saaFormCSectionRepeatationArray[i].c_typeOfChild = $scope.saaFormCSectionRepeatationArray[i].c_typeOfChild.typeDetailsId;
			
			if ($scope.saaFormCSectionRepeatationArray[i].c_referredByCwc != null || $scope.saaFormCSectionRepeatationArray[i].c_referredByCwc != undefined)
				$scope.saaFormCSectionRepeatationArray[i].c_referredByCwc = $scope.saaFormCSectionRepeatationArray[i].c_referredByCwc.areaId;
			
		}
		saaForm.saaSectionCChildDeatails = $scope.saaFormCSectionRepeatationArray;
		
		for (var i = 0; i < $scope.saaFormJSectionRepeatationArray.length; i++) {
		
			
			if ($scope.saaFormJSectionRepeatationArray[i].j_gender != null || $scope.saaFormJSectionRepeatationArray[i].j_gender != undefined){
				$scope.saaFormJSectionRepeatationArray[i].j_gender = $scope.saaFormJSectionRepeatationArray[i].j_gender.typeDetailsId;
			}
			if($scope.saaFormJSectionRepeatationArray[i].j_gender==29){
				if($scope.saaFormJSectionRepeatationArray[i].j_age== -1 || $scope.saaFormJSectionRepeatationArray[i].j_age ==0 || $scope.saaFormJSectionRepeatationArray[i].j_age==1)
				{
					$scope.jboysZeroto2Num=$scope.jboysZeroto2Num+1;
				}
				else if($scope.saaFormJSectionRepeatationArray[i].j_age==2 || $scope.saaFormJSectionRepeatationArray[i].j_age==3)
				{
					$scope.jboysTwoto4Num=$scope.jboysTwoto4Num+1;
				}
				else if($scope.saaFormJSectionRepeatationArray[i].j_age==4 || $scope.saaFormJSectionRepeatationArray[i].j_age==5)
				{
					$scope.jboysFourto6Num=$scope.jboysFourto6Num+1;
				}
				else if($scope.saaFormJSectionRepeatationArray[i].j_age>5)
				{
					$scope.jboysGreaterThan6Num=$scope.jboysGreaterThan6Num+1;
				}
			}
			else if($scope.saaFormJSectionRepeatationArray[i].j_gender==30){
					
				if($scope.saaFormJSectionRepeatationArray[i].j_age== -1 || $scope.saaFormJSectionRepeatationArray[i].j_age==0 || $scope.saaFormJSectionRepeatationArray[i].j_age==1)
				{
					$scope.jgirlsZeroto2Num=$scope.jgirlsZeroto2Num+1;
				}
				else if($scope.saaFormJSectionRepeatationArray[i].j_age==2 || $scope.saaFormJSectionRepeatationArray[i].j_age==3)
				{
					$scope.jgirlsTwoto4Num=$scope.jgirlsTwoto4Num+1;
				}
				else if($scope.saaFormJSectionRepeatationArray[i].j_age==4 || $scope.saaFormJSectionRepeatationArray[i].j_age==5)
				{
					$scope.jgirlsFourto6Num=$scope.jgirlsFourto6Num+1;
				}
				else if($scope.saaFormJSectionRepeatationArray[i].j_age>5)
				{
					$scope.jgirlsGreaterThan6Num=$scope.jgirlsGreaterThan6Num+1;
				}
			}
			
			if ($scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName != null || $scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName != undefined)
				$scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName = $scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName.typeDetailsId;
			
			if ($scope.saaFormJSectionRepeatationArray[i].j_typeOfChild != null || $scope.saaFormJSectionRepeatationArray[i].j_typeOfChild != undefined)
				$scope.saaFormJSectionRepeatationArray[i].j_typeOfChild = $scope.saaFormJSectionRepeatationArray[i].j_typeOfChild.typeDetailsId;
			
			if ($scope.saaFormJSectionRepeatationArray[i].j_referredByCwc != null || $scope.saaFormJSectionRepeatationArray[i].j_referredByCwc != undefined)
				$scope.saaFormJSectionRepeatationArray[i].j_referredByCwc = $scope.saaFormJSectionRepeatationArray[i].j_referredByCwc.areaId;
			
			if ($scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency != null || $scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency != undefined)
				$scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency = $scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency.typeDetailsId;
		}
		saaForm.saaSectionJ = $scope.saaFormJSectionRepeatationArray;
		
		for (var i = 0; i < $scope.saaTrainingDetailsRepetitionArray.length; i++) {
			if ($scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy != null || $scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy != undefined)
				$scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy.typeDetailsId;
		}
		saaForm.saaDetailsTrainings = $scope.saaTrainingDetailsRepetitionArray;
	};
	var submitted = false;
	
	$scope.saveSAA = function(saaForm, clickType, submitConfirm) {
		$(".loader").show();
		var maximumLimitErrorC = Number(document.getElementById('c6_GrandTotal').value);
		var maximumLimitErrorJ = Number(document.getElementById('d1_GrandTotal').value);
		// sending the data to server
		if (clickType == 'save') {
			if($scope.saaFormCSectionRepeatationArray.length>1){
					$scope.tempData=$scope.saaFormCSectionRepeatationArray;
					if($scope.tempData.length>1){
						for(var isumit=0;isumit<$scope.tempData.length;isumit++){
							if (!accordionValidationC($scope.tempData[isumit])) {
								$scope.tempData.splice(isumit,1);
	
							}
							if($scope.addListStatus[isumit]==true){
								$scope.tempData.splice(isumit,1);
							}
					}
						$scope.saaFormCSectionRepeatationArray=$scope.tempData;
						$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
						
					}
					$scope.saaFormCSectionRepeatationArray=$scope.tempData;
					if(!$scope.saaFormCSectionRepeatationArray.length<0)
					$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
				
			}
			else {
				if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length-1]) || $scope.addListStatus[$scope.saaFormCSectionRepeatationArray.length-1]==true) {
					$scope.resetAccordC($scope.saaFormCSectionRepeatationArray.length-1);
				}
			}
			
				preareObject(saaForm);
			
				delete saaForm.undefined;	
				if(saaForm.saaSectionCChildDeatailsList)delete saaForm.saaSectionCChildDeatailsList;
				if(saaForm.saaSectionJs)delete saaForm.saaSectionJs;
				if(saaForm.saaTrainings)delete saaForm.saaTrainings;
				$http.post('saveSAA', saaForm).then(function(result) {
					console.log(result);
					if (result.status == 200) {
						$(".loader").fadeOut();
						$scope.success_msg = commonService.messages.save_success_msg;
						$('#successModalForSAASave').modal('show');
						
						/*resetVarNums();*/
						resetVarJNums();
					}
				}, function(error) {
					$(".loader").fadeOut();
					commonService.errSaveHttpFunction(error);
					console.log(error);
				});

		} else if (clickType == 'submit' && submitted == false) {
			$(".loader").fadeOut();
			
			if($scope.saaFormCSectionRepeatationArray.length>1){
				$scope.tempDataSubmit=$scope.saaFormCSectionRepeatationArray;
				if($scope.tempDataSubmit.length>1){
					for(var isumit=0;isumit<$scope.tempDataSubmit.length;isumit++){
						if (!accordionValidationC($scope.tempDataSubmit[isumit])) {
							$scope.tempDataSubmit.splice(isumit,1);

						}
						if($scope.addListStatus[isumit]==true){
							$scope.tempData.splice(isumit,1);
						}
				}
					$scope.saaFormCSectionRepeatationArray=$scope.tempDataSubmit;
					$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
					
				}
				$scope.saaFormCSectionRepeatationArray=$scope.tempDataSubmit;
				if(!$scope.saaFormCSectionRepeatationArray.length<0)
				$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
			
		}
		else {
			if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length-1]) || $scope.addListStatus[$scope.saaFormCSectionRepeatationArray.length-1]==true) {
				$scope.resetAccordC($scope.saaFormCSectionRepeatationArray.length-1);
			}
		}
			preareObject(saaForm);
			setAccDropdown(saaForm);
			if(allNegetiveTest() ==false){
	 			return false;
	 		 }
			if($scope.validateNoOfTraining($scope.saaForm.k1aNoOfTraining)){
				if (!accordionValidation($scope.saaTrainingDetailsRepetitionArray[$scope.saaTrainingDetailsRepetitionArray.length - 1])) {
					$scope.messageField1=commonService.messages.add_all_training_details;
					$scope.messageField2="";
					$scope.alertMessage = "";
					$('html,body').animate({
				        scrollTop: $('#accordion33').offset().top - 250},'slow');
					setAccDropdown(saaForm);
					$('#ErrAlertModal').modal('show');
				}else if ($scope.saaFormCSectionRepeatationArray.length==1 && (accordionValidationCfirstRow($scope.saaFormCSectionRepeatationArray[0])==true) && !accordionValidationC($scope.saaFormCSectionRepeatationArray[0])) {
					$scope.messageField1=commonService.messages.add_all_sectionC_details;
					$scope.messageField2="";
					$scope.alertMessage = "";
					setAccDropdown(saaForm);
					$('html,body').animate({
				        scrollTop: $('#accordion').offset().top - 250},'slow');
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');	
				}else if ($scope.saaFormCSectionRepeatationArray.length>1 && (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length - 1]))) {
					$scope.messageField1=commonService.messages.add_all_sectionC_details;
					$scope.messageField2="";
					$scope.alertMessage = "";
					setAccDropdown(saaForm);
					$('html,body').animate({
				        scrollTop: $('#accordion').offset().top - 250},'slow');
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');
				}else if ($scope.saaFormJSectionRepeatationArray.length==1 && (accordionValidationJfirstRow($scope.saaFormJSectionRepeatationArray[$scope.saaFormJSectionRepeatationArray.length - 1])==true)&& !accordionValidationJ($scope.saaFormJSectionRepeatationArray[0])) {
					$scope.messageField1=commonService.messages.add_all_sectionJ_details;
					$scope.messageField2="";
					$scope.alertMessage = "";
					setAccDropdown(saaForm);
					$('html,body').animate({
				        scrollTop: $('#accordion2').offset().top - 250},'slow');
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');	
				}else if ($scope.saaFormJSectionRepeatationArray.length>1 && (!accordionValidationJ($scope.saaFormJSectionRepeatationArray[$scope.saaFormJSectionRepeatationArray.length - 1]))) {
					$scope.messageField1=commonService.messages.add_all_sectionJ_details;
					$scope.messageField2="";
					$scope.alertMessage = "";
					setAccDropdown(saaForm);
					$('html,body').animate({
				        scrollTop: $('#accordion2').offset().top - 250},'slow');
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');
				}else if(maximumLimitErrorJ>0 &&  $scope.saaFormJSectionRepeatationArray.length > maximumLimitErrorJ){
					$scope.messageField1=commonService.messages.section_j_length_mismatch;
					$scope.messageField2="";
					$scope.alertMessage = "";
					setAccDropdown(saaForm);
					$('html,body').animate({
				        scrollTop: $('#accordion2').offset().top - 250},'slow');
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');
				}else{
					
					
					var maxD1_BoysZeroToTwo =Number(document.getElementById('d1_BoysZeroToTwo').value-0);
					var maxD1_BoysTwoToFour =Number(document.getElementById('d1_BoysTwoToFour').value-0);
					var maxD1_BoysFourToSix =Number(document.getElementById('d1_BoysFourToSix').value-0);
					var maxD1_BoysGreaterThanSix =Number(document.getElementById('d1_BoysGreaterThanSix').value-0);
					var maxD1_GirlsZeroToTwo =Number(document.getElementById('d1_GirlsZeroToTwo').value-0);
					var maxD1_GirlsTwoToFour =Number(document.getElementById('d1_GirlsTwoToFour').value-0);
					var maxD1_GirlsFourToSix =Number(document.getElementById('d1_GirlsFourToSix').value-0);
					var maxD1_GirlsGreaterThanSix =Number(document.getElementById('d1_GirlsGreaterThanSix').value-0);

					if(!$scope.checkSaveSubmitBoysA2A5ZerotoTwo()){ $(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitBoysA2A5TwoToFour()){$(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitBoysA2A5FourToSix()){$(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitBoysA2A5GreaterThanSix()){$(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitGirlsA2A5ZerotoTwo()){$(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitGirlsA2A5TwoToFour()){$(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitGirlsA2A5FourToSix()){$(".loader").fadeOut();}
	                else if(!$scope.checkSaveSubmitGirlsA2A5GreaterThanSix()){$(".loader").fadeOut();}
					else if (!(maxD1_BoysZeroToTwo >= $scope.jboysZeroto2Num)) {
						$scope.messageField1="Sum of total number of boys(0-2) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jboysZeroto2Num + ")";
						$scope.messageField2="total number of boys(0-2) in D1 (" + maxD1_BoysZeroToTwo + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_BoysTwoToFour >= $scope.jboysTwoto4Num)) {
						$scope.messageField1="Sum of total number of boys(2-4) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jboysTwoto4Num + ")";
						$scope.messageField2="total number of boys(2-4) in D1 (" + maxD1_BoysTwoToFour + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_BoysFourToSix >= $scope.jboysFourto6Num)) {
						$scope.messageField1="Sum of total number of boys(4-6) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jboysFourto6Num + ")";
						$scope.messageField2="total number of boys(4-6) in D1 (" + maxD1_BoysFourToSix + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_BoysGreaterThanSix >= $scope.jboysGreaterThan6Num)) {
						$scope.messageField1="Sum of total number of boys(>6) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jboysGreaterThan6Num + ")";
						$scope.messageField2="total number of boys(>6) in D1 (" + maxD1_BoysGreaterThanSix + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_GirlsZeroToTwo >= $scope.jgirlsZeroto2Num)) {
						$scope.messageField1="Sum of total number of girls(0-2) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jgirlsZeroto2Num + ")";
						$scope.messageField2="total number of girls(0-2) in D1 (" + maxD1_GirlsZeroToTwo + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_GirlsTwoToFour >= $scope.jgirlsTwoto4Num)) {
						$scope.messageField1="Sum of total number of girls(2-4) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jgirlsTwoto4Num + ")";
						$scope.messageField2="total number of girls(2-4) in D1 (" + maxD1_GirlsTwoToFour + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_GirlsFourToSix >= $scope.jgirlsFourto6Num)) {
						$scope.messageField1="Sum of total number of girls(4-6) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jgirlsFourto6Num + ")";
						$scope.messageField2="total number of girls(4-6) in D1 (" + maxD1_GirlsFourToSix + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					} else if (!(maxD1_GirlsGreaterThanSix >= $scope.jgirlsGreaterThan6Num)) {
						$scope.messageField1="Sum of total number of girls(>6) added in I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days)(" + $scope.jgirlsGreaterThan6Num + ")";
						$scope.messageField2="total number of girls(>6) in D1 (" + maxD1_GirlsGreaterThanSix + ")";
						$scope.alertMessage ="value should be equal or less than";
						resetVarJNums();
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						return false;
					}else if($scope.saaFormCSectionRepeatationArray.length>1){
							for(var isumit=0;isumit<$scope.saaFormCSectionRepeatationArray.length;isumit++){
								if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[isumit])) {
									var sum=isumit+1;
									$scope.messageField1="Please fill all the child details of C. New Admissions during the month child-"+sum;
									$scope.messageField2="";
									$scope.alertMessage ="";
									setAccDropdown(saaForm);
									$('html,body').animate({
								        scrollTop: $('#accordion').offset().top - 250},'slow');
									$(".loader").fadeOut();
									$('#ErrAlertModal').modal('show');
									
									return false;
								}
						}
							
						}else if ($scope.saaFormCSectionRepeatationArray.length==1 && (accordionValidationCfirstRow($scope.saaFormCSectionRepeatationArray[0])==true) && !accordionValidationC($scope.saaFormCSectionRepeatationArray[0])) {
							$scope.messageField1=commonService.messages.add_all_sectionC_details;
							$scope.messageField2="";
							$scope.alertMessage = "";
							setAccDropdown(saaForm);
							$('html,body').animate({
						        scrollTop: $('#accordion').offset().top - 250},'slow');
							$(".loader").fadeOut();
							$('#ErrAlertModal').modal('show');	
						}
						
						if($scope.saaFormJSectionRepeatationArray.length>1){
						for(var jsumit=0;jsumit<$scope.saaFormJSectionRepeatationArray.length;jsumit++){
							if (!accordionValidationJ($scope.saaFormJSectionRepeatationArray[jsumit])) {
								var sumJadd=jsumit+1;
								$scope.messageField1="Please fill all the child details of I. Details of Cases of Legally free for Adoption Pending before different CWC (for more than 60/120 days) child-"+sumJadd;
								$scope.messageField2="";
								$scope.alertMessage ="";
								setAccDropdown(saaForm);
								resetVarJNums();
								$('html,body').animate({
							        scrollTop: $('#accordion2').offset().top - 250},'slow');
								$(".loader").fadeOut();
								$('#ErrAlertModal').modal('show');
								
								return false;
							}
						}
					}else if ($scope.saaFormJSectionRepeatationArray.length==1 && (accordionValidationJfirstRow($scope.saaFormJSectionRepeatationArray[$scope.saaFormJSectionRepeatationArray.length - 1])==true)&& !accordionValidationJ($scope.saaFormJSectionRepeatationArray[0])) {
						$scope.messageField1=commonService.messages.add_all_sectionJ_details;
						$scope.messageField2="";
						$scope.alertMessage = "";
						setAccDropdown(saaForm);
						$('html,body').animate({
					        scrollTop: $('#accordion2').offset().top - 250},'slow');
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');	
					}
					if(!$scope.saaTrainingDetailsRepetitionArray.length<1){
							for(var ksumit=0;ksumit<$scope.saaTrainingDetailsRepetitionArray.length;ksumit++){
								if (!accordionValidation($scope.saaTrainingDetailsRepetitionArray[ksumit])) {
									var sumKadd=ksumit+1;
									$scope.messageField1=commonService.messages.add_all_specific_training_details+sumKadd;
									$scope.messageField2="";
									$scope.alertMessage ="";
									setAccDropdown(saaForm);
									$('html,body').animate({
								        scrollTop: $('#accordion33').offset().top - 250},'slow');
									$(".loader").fadeOut();
									$('#ErrAlertModal').modal('show');
									
									return false;
								}
							}
						}
						
					setAccDropdown(saaForm);
					$('#successModalForSAASubmit').modal('show');
				}
			}
		}
		if (submitConfirm == 'ok') {// here actual submission will be done
			preareObject(saaForm);
			if(saaForm.saaSectionCChildDeatailsList)delete saaForm.saaSectionCChildDeatailsList;
			if(saaForm.saaSectionJs)delete saaForm.saaSectionJs;
			if(saaForm.saaTrainings)delete saaForm.saaTrainings;
			// do whatever validation before submission here

			$http.post('submitSAA', saaForm).then(function(result) {
				console.log(result);
				if (result.status == 200) {
					$scope.success_msg = commonService.messages.submit_success_msg+saaForm.timeperiod.timePeriod;
					$('#successModalForSAASave').modal('show');
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
	
	$scope.autoSaveSAA = function(saaForm, clickType) {
		// sending the data to server
		if (clickType == 'save') {
			if($scope.saaFormCSectionRepeatationArray.length>1){
					$scope.tempData=$scope.saaFormCSectionRepeatationArray;
					if($scope.tempData.length>1){
						for(var isumit=0;isumit<$scope.tempData.length;isumit++){
							if (!accordionValidationC($scope.tempData[isumit])) {
								$scope.tempData.splice(isumit,1);
	
							}
							if($scope.addListStatus[isumit]==true){
								$scope.tempData.splice(isumit,1);
							}
					}
						$scope.saaFormCSectionRepeatationArray=$scope.tempData;
						$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
						
					}
					$scope.saaFormCSectionRepeatationArray=$scope.tempData;
					if(!$scope.saaFormCSectionRepeatationArray.length<0)
					$scope.allCandCa($scope.saaFormCSectionRepeatationArray.length-1);
				
			}
			else {
				if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length-1]) || $scope.addListStatus[$scope.saaFormCSectionRepeatationArray.length-1]==true) {
					$scope.resetAccordC($scope.saaFormCSectionRepeatationArray.length-1);
				}
			}
			
				preareObject(saaForm);
			
				delete saaForm.undefined;	
				if(saaForm.saaSectionCChildDeatailsList)delete saaForm.saaSectionCChildDeatailsList;
				if(saaForm.saaSectionJs)delete saaForm.saaSectionJs;
				if(saaForm.saaTrainings)delete saaForm.saaTrainings;
				$http.post('autoSaveSAA', saaForm).then(function(result) {
					console.log(result);
					if (result.status == 200) {
						$(".loader").fadeOut();
						$('#successModalForAutoSaveSAA').modal('show');
						resetVarJNums();
					}
				}, function(error) {
					commonService.checkSessionOut(error);
					console.log(error);
				});
			}	
		}; 
		$scope.testLastAccessedTime=function(){
			$http.post('testSeverCall').then(function(result) {
				//console.log("hello");
			}, function(error) {
				console.log(error);
			});
		}
	var getAge=function(dateString) {
	    var today  = lastDay;
	    var convDob=dateConvert(dateString);
	    var birthDate = new Date(convDob);
	    var age = today.getFullYear() - birthDate.getFullYear();
	    var m = today.getMonth() - birthDate.getMonth();
	    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
	        age--;
	    }
	    return age;
	};
	
	var resetVarJNums=function(){
		$scope.jboysZeroto2Num=0;
		$scope.jboysTwoto4Num=0;
		$scope.jboysFourto6Num=0;
		$scope.jboysGreaterThan6Num=0;

		$scope.jgirlsZeroto2Num=0;
		$scope.jgirlsTwoto4Num=0;
		$scope.jgirlsFourto6Num=0;
		$scope.jgirlsGreaterThan6Num=0;  
	};
	
	// getting refresh on saving @swarna
		$("input[type=number]").on("keydown", function(event) {
		/*resetVarNums();*/
		resetVarJNums();
	});

	$scope.refreshPage = function() {
		/*resetVarNums();*/
		resetVarJNums();
		$window.location.reload();
	};
   
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

	
	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.saaTrainingDetailsRepetitionArray[id].h1dTrainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.saaTrainingDetailsRepetitionArray[id].h1dTrainingToDate = date;
			}
		});
	};

	var checkDate = function(date, index){
		$scope.saaTrainingDetailsRepetitionArray[index].trainingToDate = date;
		if($scope.saaTrainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.saaTrainingDetailsRepetitionArray[index].trainingFromDate != undefined){
			var fromDay = new Date(dateConvert($scope.saaTrainingDetailsRepetitionArray[index].trainingFromDate));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
				$scope.messageField2="";
            	$scope.alertMessage =""; 
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.saaTrainingDetailsRepetitionArray[index].trainingToDate = null;
            }
		}else{
			$scope.messageField1=commonService.messages.select_training_from;
			$scope.messageField2="";
			$scope.alertMessage = "";
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.saaTrainingDetailsRepetitionArray[index].trainingToDate = null;
		}
	};
	$scope.initializeDatePicker = function(index) {
		
		$("#trainingFromDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if($scope.saaTrainingDetailsRepetitionArray[index].trainingToDate != null && $scope.saaTrainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.saaTrainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
						$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
						$scope.messageField2="";
		            	$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.saaTrainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.saaTrainingDetailsRepetitionArray[index].trainingFromDate = date;
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

	//------------------section I
	$scope.saaFormCSectionRepeatationObject={
		 saaSecCChildDeatailsId : null,
		 c_nameOfChild : null,
		 c_dateOfBirth : null,
		 c_age : null,
		 c_gender : null,
		 c_dateOfAdmission : null,
		 c_caringRegNoDate : null,
		 c_saaCategoryName : null,
		 c_typeOfChild : null,
		 c_referredByCwc : null,
		 c_dateOfpublication : null,
		 c_remarks : null,
		 saaId : null
	};
	$scope.saaFormCSectionRepeatationArray=[{
		 saaSecCChildDeatailsId : null,
		 c_nameOfChild : null,
		 c_dateOfBirth : null,
		 c_age : null,
		 c_gender : null,
		 c_dateOfAdmission : null,
		 c_caringRegNoDate : null,
		 c_saaCategoryName : null,
		 c_typeOfChild : null,
		 c_referredByCwc : null,
		 c_dateOfpublication : null,
		 c_remarks : null,
		 saaId : null
	}];
	var accordionValidationCfirstRow = function(secC){
		if((secC.c_nameOfChild == null || secC.c_nameOfChild =="")&&
				secC.c_age == null &&
				secC.c_gender == null &&
				secC.c_dateOfAdmission == null &&
				secC.c_saaCategoryName == null &&
				secC.c_typeOfChild == null &&
				secC.c_referredByCwc == null
		){
			return false;
		}else{
			return true;
		}
	};
	
	var accordionValidationC = function(secC){
		if((secC.c_nameOfChild == null || secC.c_nameOfChild =="" ||
				secC.c_age == null ||
				secC.c_gender == null ||
				secC.c_dateOfAdmission == null ||
				secC.c_saaCategoryName == null ||
				secC.c_typeOfChild == null ||
				secC.c_referredByCwc == null 
		)){
			return false;
		}else{
			return true;
		}
	};

		$scope.changeAccordingToAge=function(index){
	        $scope.saaFormCSectionRepeatationArray[index].c_dateOfBirth=null;
		};
		$scope.changeAccordingToAgeI=function(index){
	        $scope.saaFormJSectionRepeatationArray[index].j_dateOfBirth=null;
		};
		$scope.hidePlus=true;
		var comeTest=false;
		$scope.saveSubmitStatus=true;
		$scope.checkIdStatus=function(index){
			if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length - 1]) && index!=$scope.saaFormCSectionRepeatationArray.length - 1) {
				$scope.messageField1=commonService.messages.add_all_sectionC_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
				} 
			else{
			$scope.saveSubmitStatus=false;
			var comeTest=true;
			testC=false;
			for(var u=0;u<500;u++)
			{
			$scope.testbuttons[u]=false;
			}
			$scope.testbuttons[index]=true;
			$scope.addListStatus[index]=true;
			$scope.hidePlus=false;
			}
		};
		
		var indexNumber=[];
		var indexNumberA=[];
		$scope.addListStatus=[];
		$scope.testbuttons=[];
		$scope.loadStatusTest=function(){
			
			for(var u=1;u<500;u++)
			{
			$scope.addListStatus[$scope.saaFormCSectionRepeatationArray.length]=true;
			$scope.hidePlus=false;
			}
	
		};
				
		$scope.addListChildrenOprn = function(index1) {
			
		if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length - 1])) {
			$scope.messageField1=commonService.messages.add_all_sectionC_details;
			$scope.messageField2="";
			$scope.alertMessage = "";
			$('#ErrAlertModal').modal('show');
			return false;
			}
		if($scope.saaFormCSectionRepeatationArray.length>1){
			for(var isumitr=0;isumitr<$scope.saaFormCSectionRepeatationArray.length;isumitr++){
				if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[isumitr])) {
					var sum=isumitr+1;
					$scope.messageField1="Please fill all the child details of C. New Admissions during the month child-"+sum;
					$scope.messageField2="";
					$scope.alertMessage ="";
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');
					return false;
				}
			}
		}
//		else{
			
			var varName=indexNumber[index1];
			var varAName=indexNumberA[index1];
			
			if(varName == undefined){
				$scope.messageField1="";
				$scope.messageField2="";
				$scope.alertMessage ="Child details added successfully !";
			}
			else
			{
				if($scope.saaForm[varName]<1)
					$scope.saaForm[varName]=0;
				else
					$scope.saaForm[varName]=$scope.saaForm[varName]-1;	
				
				if($scope.saaForm[varAName]<1)
					$scope.saaForm[varAName]=0;
				else	
					$scope.saaForm[varAName]=$scope.saaForm[varAName]-1;	
				$scope.messageField1="";
				$scope.messageField2="";
				$scope.alertMessage ="Child details updated successfully !";		
			}
			$scope.allCandCa(index1);
			$scope.addListStatus[index1]=false;
			$scope.saveSubmitStatus=true;
			$scope.hidePlus=true;
			$scope.testC=true;
			if(comeTest=true){
				
				for(var u=0;u<500;u++)
				{
				$scope.testbuttons[u]=true;
				}
				comeTest=false;
				testC=true;
			}
			
			
			$('#successModalForChildDetails').modal('show');
			
//			}
		};
		
		$scope.allCandCa=function(index1){
			
			$scope.resetCAndCAsection();
			
			for(var index=0;index<$scope.saaFormCSectionRepeatationArray.length;index++)
			{
			// for boys
			if ($scope.saaFormCSectionRepeatationArray[index].c_gender.typeDetailsId == 29) {
	
				// for Normal
				if ($scope.saaFormCSectionRepeatationArray[index].c_typeOfChild.typeDetailsId == 37) {
	
					// for orphan
					if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 31) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							indexNumber[index]="c1_BoysZeroToTwo";
							$scope.saaForm.c1_BoysZeroToTwo=$scope.saaForm.c1_BoysZeroToTwo+1;
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_BoysTwoToFour=$scope.saaForm.c1_BoysTwoToFour+1;
							indexNumber[index]="c1_BoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_BoysFourToSix=$scope.saaForm.c1_BoysFourToSix+1;
							indexNumber[index]="c1_BoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_BoysGreaterThanSix=$scope.saaForm.c1_BoysGreaterThanSix+1;
							indexNumber[index]="c1_BoysGreaterThanSix";
						}
	
					} 
					// for Abandoned
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 32) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_BoysZeroToTwo=$scope.saaForm.c1_BoysZeroToTwo+1;
							indexNumber[index]="c1_BoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_BoysTwoToFour=$scope.saaForm.c1_BoysTwoToFour+1;
							indexNumber[index]="c1_BoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_BoysFourToSix=$scope.saaForm.c1_BoysFourToSix+1;
							indexNumber[index]="c1_BoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_BoysGreaterThanSix=$scope.saaForm.c1_BoysGreaterThanSix+1;
							indexNumber[index]="c1_BoysGreaterThanSix";
						}
					} 
					//for surrendered
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 33) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c2_BoysZeroToTwo=$scope.saaForm.c2_BoysZeroToTwo+1;
							indexNumber[index]="c2_BoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c2_BoysTwoToFour=$scope.saaForm.c2_BoysTwoToFour+1;
							indexNumber[index]="c2_BoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c2_BoysFourToSix=$scope.saaForm.c2_BoysFourToSix+1;
							indexNumber[index]="c2_BoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c2_BoysGreaterThanSix=$scope.saaForm.c2_BoysGreaterThanSix+1;
							indexNumber[index]="c2_BoysGreaterThanSix";
						}
					} 
					//droped in cradles
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 34) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c3_BoysZeroToTwo=$scope.saaForm.c3_BoysZeroToTwo+1;
							indexNumber[index]="c3_BoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c3_BoysTwoToFour=$scope.saaForm.c3_BoysTwoToFour+1;
							indexNumber[index]="c3_BoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c3_BoysFourToSix=$scope.saaForm.c3_BoysFourToSix+1;
							indexNumber[index]="c3_BoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c3_BoysGreaterThanSix=$scope.saaForm.c3_BoysGreaterThanSix+1;
							indexNumber[index]="c3_BoysGreaterThanSix";
						}
					} 
					//Recieved on transfers
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 35) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c4_BoysZeroToTwo=$scope.saaForm.c4_BoysZeroToTwo+1;
							indexNumber[index]="c4_BoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c4_BoysTwoToFour=$scope.saaForm.c4_BoysTwoToFour+1;
							indexNumber[index]="c4_BoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c4_BoysFourToSix=$scope.saaForm.c4_BoysFourToSix+1;
							indexNumber[index]="c4_BoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c4_BoysGreaterThanSix=$scope.saaForm.c4_BoysGreaterThanSix+1;
							indexNumber[index]="c4_BoysGreaterThanSix";
						}
					} 
					// disruptions if any
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 36) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c5_BoysZeroToTwo=$scope.saaForm.c5_BoysZeroToTwo+1;
							indexNumber[index]="c5_BoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c5_BoysTwoToFour=$scope.saaForm.c5_BoysTwoToFour+1;
							indexNumber[index]="c5_BoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c5_BoysFourToSix=$scope.saaForm.c5_BoysFourToSix+1;
							indexNumber[index]="c5_BoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c5_BoysGreaterThanSix=$scope.saaForm.c5_BoysGreaterThanSix+1;
							indexNumber[index]="c5_BoysGreaterThanSix";
						}
					}
				}
				// for Special children
				else if ($scope.saaFormCSectionRepeatationArray[index].c_typeOfChild.typeDetailsId == 38) {
	
	
					// for orphan
					if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 31) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_BoysZeroToTwo=$scope.saaForm.c1_BoysZeroToTwo+1;
							$scope.saaForm.c1_ABoysZeroToTwo=$scope.saaForm.c1_ABoysZeroToTwo+1;
							indexNumber[index]="c1_BoysZeroToTwo";
							indexNumberA[index]="c1_ABoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_BoysTwoToFour=$scope.saaForm.c1_BoysTwoToFour+1;
							$scope.saaForm.c1_ABoysTwoToFour=$scope.saaForm.c1_ABoysTwoToFour+1;
							indexNumber[index]="c1_BoysTwoToFour";
							indexNumberA[index]="c1_ABoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_BoysFourToSix=$scope.saaForm.c1_BoysFourToSix+1;
							$scope.saaForm.c1_ABoysFourToSix=$scope.saaForm.c1_ABoysFourToSix+1;
							indexNumber[index]="c1_BoysFourToSix";
							indexNumberA[index]="c1_ABoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_BoysGreaterThanSix=$scope.saaForm.c1_BoysGreaterThanSix+1;
							$scope.saaForm.c1_ABoysGreaterThanSix=$scope.saaForm.c1_ABoysGreaterThanSix+1;
							indexNumber[index]="c1_BoysGreaterThanSix";
							indexNumberA[index]="c1_ABoysGreaterThanSix";
						}
	
					} 
					// for Abandoned
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 32) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_BoysZeroToTwo=$scope.saaForm.c1_BoysZeroToTwo+1;
							$scope.saaForm.c1_ABoysZeroToTwo=$scope.saaForm.c1_ABoysZeroToTwo+1;
							indexNumber[index]="c1_BoysZeroToTwo";
							indexNumberA[index]="c1_ABoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_BoysTwoToFour=$scope.saaForm.c1_BoysTwoToFour+1;
							$scope.saaForm.c1_ABoysTwoToFour=$scope.saaForm.c1_ABoysTwoToFour+1;
							indexNumber[index]="c1_BoysTwoToFour";
							indexNumberA[index]="c1_ABoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_BoysFourToSix=$scope.saaForm.c1_BoysFourToSix+1;
							$scope.saaForm.c1_ABoysFourToSix=$scope.saaForm.c1_ABoysFourToSix+1;
							indexNumber[index]="c1_BoysFourToSix";
							indexNumberA[index]="c1_ABoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_BoysGreaterThanSix=$scope.saaForm.c1_BoysGreaterThanSix+1;
							$scope.saaForm.c1_ABoysGreaterThanSix=$scope.saaForm.c1_ABoysGreaterThanSix+1;
							indexNumber[index]="c1_BoysGreaterThanSix";
							indexNumberA[index]="c1_ABoysGreaterThanSix";
						}
					} 
					//for surrendered
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 33) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c2_BoysZeroToTwo=$scope.saaForm.c2_BoysZeroToTwo+1;
							$scope.saaForm.c2_ABoysZeroToTwo=$scope.saaForm.c2_ABoysZeroToTwo+1;
							indexNumber[index]="c2_BoysZeroToTwo";
							indexNumberA[index]="c2_ABoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c2_BoysTwoToFour=$scope.saaForm.c2_BoysTwoToFour+1;
							$scope.saaForm.c2_ABoysTwoToFour=$scope.saaForm.c2_ABoysTwoToFour+1;
							indexNumber[index]="c2_BoysTwoToFour";
							indexNumberA[index]="c2_ABoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c2_BoysFourToSix=$scope.saaForm.c2_BoysFourToSix+1;
							$scope.saaForm.c2_ABoysFourToSix=$scope.saaForm.c2_ABoysFourToSix+1;
							indexNumber[index]="c2_BoysFourToSix";
							indexNumberA[index]="c2_ABoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c2_BoysGreaterThanSix=$scope.saaForm.c2_BoysGreaterThanSix+1;
							$scope.saaForm.c2_ABoysGreaterThanSix=$scope.saaForm.c2_ABoysGreaterThanSix+1;
							indexNumber[index]="c2_BoysGreaterThanSix";
							indexNumberA[index]="c2_ABoysGreaterThanSix";
						}
					} 
					//droped in cradles
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 34) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c3_BoysZeroToTwo=$scope.saaForm.c3_BoysZeroToTwo+1;
							$scope.saaForm.c3_ABoysZeroToTwo=$scope.saaForm.c3_ABoysZeroToTwo+1;
							indexNumber[index]="c3_BoysZeroToTwo";
							indexNumberA[index]="c3_ABoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c3_BoysTwoToFour=$scope.saaForm.c3_BoysTwoToFour+1;
							$scope.saaForm.c3_ABoysTwoToFour=$scope.saaForm.c3_ABoysTwoToFour+1;
							indexNumber[index]="c3_BoysTwoToFour";
							indexNumberA[index]="c3_ABoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c3_BoysFourToSix=$scope.saaForm.c3_BoysFourToSix+1;
							$scope.saaForm.c3_ABoysFourToSix=$scope.saaForm.c3_ABoysFourToSix+1;
							indexNumber[index]="c3_BoysFourToSix";
							indexNumberA[index]="c3_ABoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c3_BoysGreaterThanSix=$scope.saaForm.c3_BoysGreaterThanSix+1;
							$scope.saaForm.c3_ABoysGreaterThanSix=$scope.saaForm.c3_ABoysGreaterThanSix+1;
							indexNumber[index]="c3_BoysGreaterThanSix";
							indexNumberA[index]="c3_ABoysGreaterThanSix";
						}
					} 
					//Recieved on transfers
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 35) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c4_BoysZeroToTwo=$scope.saaForm.c4_BoysZeroToTwo+1;
							$scope.saaForm.c4_ABoysZeroToTwo=$scope.saaForm.c4_ABoysZeroToTwo+1;
							indexNumber[index]="c4_BoysZeroToTwo";
							indexNumberA[index]="c4_ABoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c4_BoysTwoToFour=$scope.saaForm.c4_BoysTwoToFour+1;
							$scope.saaForm.c4_ABoysTwoToFour=$scope.saaForm.c4_ABoysTwoToFour+1;
							indexNumber[index]="c4_BoysTwoToFour";
							indexNumberA[index]="c4_ABoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c4_BoysFourToSix=$scope.saaForm.c4_BoysFourToSix+1;
							$scope.saaForm.c4_ABoysFourToSix=$scope.saaForm.c4_ABoysFourToSix+1;
							indexNumber[index]="c4_BoysFourToSix";
							indexNumberA[index]="c4_ABoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c4_BoysGreaterThanSix=$scope.saaForm.c4_BoysGreaterThanSix+1;
							$scope.saaForm.c4_ABoysGreaterThanSix=$scope.saaForm.c4_ABoysGreaterThanSix+1;
							indexNumber[index]="c4_BoysGreaterThanSix";
							indexNumberA[index]="c4_ABoysGreaterThanSix";
						}
					} 
					// disruptions if any
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 36) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c5_BoysZeroToTwo=$scope.saaForm.c5_BoysZeroToTwo+1;
							$scope.saaForm.c5_ABoysZeroToTwo=$scope.saaForm.c5_ABoysZeroToTwo+1;
							indexNumber[index]="c5_BoysZeroToTwo";
							indexNumberA[index]="c5_ABoysZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c5_BoysTwoToFour=$scope.saaForm.c5_BoysTwoToFour+1;
							$scope.saaForm.c5_ABoysTwoToFour=$scope.saaForm.c5_ABoysTwoToFour+1;
							indexNumber[index]="c5_BoysTwoToFour";
							indexNumberA[index]="c5_ABoysTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c5_BoysFourToSix=$scope.saaForm.c5_BoysFourToSix+1;
							$scope.saaForm.c5_ABoysFourToSix=$scope.saaForm.c5_ABoysFourToSix+1;
							indexNumber[index]="c5_BoysFourToSix";
							indexNumberA[index]="c5_ABoysFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c5_BoysGreaterThanSix=$scope.saaForm.c5_BoysGreaterThanSix+1;
							$scope.saaForm.c5_ABoysGreaterThanSix=$scope.saaForm.c5_ABoysGreaterThanSix+1;
							indexNumber[index]="c5_BoysGreaterThanSix";
							indexNumberA[index]="c5_ABoysGreaterThanSix";
						}
					}
				
				}
			}
			// for girls
			else if ($scope.saaFormCSectionRepeatationArray[index].c_gender.typeDetailsId == 30) {
	
	
				// for Normal
				if ($scope.saaFormCSectionRepeatationArray[index].c_typeOfChild.typeDetailsId == 37) {
	
					// for orphan
					if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 31) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_GirlsZeroToTwo=$scope.saaForm.c1_GirlsZeroToTwo+1;
							indexNumber[index]="c1_GirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_GirlsTwoToFour=$scope.saaForm.c1_GirlsTwoToFour+1;
							indexNumber[index]="c1_GirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_GirlsFourToSix=$scope.saaForm.c1_GirlsFourToSix+1;
							indexNumber[index]="c1_GirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_GirlsGreaterThanSix=$scope.saaForm.c1_GirlsGreaterThanSix+1;
							indexNumber[index]="c1_GirlsGreaterThanSix";
						}
	
					} 
					// for Abandoned
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 32) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_GirlsZeroToTwo=$scope.saaForm.c1_GirlsZeroToTwo+1;
							indexNumber[index]="c1_GirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_GirlsTwoToFour=$scope.saaForm.c1_GirlsTwoToFour+1;
							indexNumber[index]="c1_GirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_GirlsFourToSix=$scope.saaForm.c1_GirlsFourToSix+1;
							indexNumber[index]="c1_GirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_GirlsGreaterThanSix=$scope.saaForm.c1_GirlsGreaterThanSix+1;
							indexNumber[index]="c1_GirlsGreaterThanSix";
						}
					} 
					//for surrendered
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 33) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c2_GirlsZeroToTwo=$scope.saaForm.c2_GirlsZeroToTwo+1;
							indexNumber[index]="c2_GirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c2_GirlsTwoToFour=$scope.saaForm.c2_GirlsTwoToFour+1;
							indexNumber[index]="c2_GirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c2_GirlsFourToSix=$scope.saaForm.c2_GirlsFourToSix+1;
							indexNumber[index]="c2_GirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c2_GirlsGreaterThanSix=$scope.saaForm.c2_GirlsGreaterThanSix+1;
							indexNumber[index]="c2_GirlsGreaterThanSix";
						}
					} 
					//droped in cradles
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 34) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c3_GirlsZeroToTwo=$scope.saaForm.c3_GirlsZeroToTwo+1;
							indexNumber[index]="c3_GirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c3_GirlsTwoToFour=$scope.saaForm.c3_GirlsTwoToFour+1;
							indexNumber[index]="c3_GirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c3_GirlsFourToSix=$scope.saaForm.c3_GirlsFourToSix+1;
							indexNumber[index]="c3_GirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c3_GirlsGreaterThanSix=$scope.saaForm.c3_GirlsGreaterThanSix+1;
							indexNumber[index]="c3_GirlsGreaterThanSix";
						}
					} 
					//Recieved on transfers
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 35) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c4_GirlsZeroToTwo=$scope.saaForm.c4_GirlsZeroToTwo+1;
							indexNumber[index]="c4_GirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c4_GirlsTwoToFour=$scope.saaForm.c4_GirlsTwoToFour+1;
							indexNumber[index]="c4_GirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c4_GirlsFourToSix=$scope.saaForm.c4_GirlsFourToSix+1;
							indexNumber[index]="c4_GirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c4_GirlsGreaterThanSix=$scope.saaForm.c4_GirlsGreaterThanSix+1;
							indexNumber[index]="c4_GirlsGreaterThanSix";
						}
					} 
					// disruptions if any
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 36) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c5_GirlsZeroToTwo=$scope.saaForm.c5_GirlsZeroToTwo+1;
							indexNumber[index]="c5_GirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c5_GirlsTwoToFour=$scope.saaForm.c5_GirlsTwoToFour+1;
							indexNumber[index]="c5_GirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c5_GirlsFourToSix=$scope.saaForm.c5_GirlsFourToSix+1;
							indexNumber[index]="c5_GirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c5_GirlsGreaterThanSix=$scope.saaForm.c5_GirlsGreaterThanSix+1;
							indexNumber[index]="c5_GirlsGreaterThanSix";
						}
					}
				}
				// for Special children
				else if ($scope.saaFormCSectionRepeatationArray[index].c_typeOfChild.typeDetailsId == 38) {
	
	
					// for orphan
					if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 31) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_GirlsZeroToTwo=$scope.saaForm.c1_GirlsZeroToTwo+1;
							$scope.saaForm.c1_AGirlsZeroToTwo=$scope.saaForm.c1_AGirlsZeroToTwo+1;
							indexNumber[index]="c1_GirlsZeroToTwo";
							indexNumberA[index]="c1_AGirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_GirlsTwoToFour=$scope.saaForm.c1_GirlsTwoToFour+1;
							$scope.saaForm.c1_AGirlsTwoToFour=$scope.saaForm.c1_AGirlsTwoToFour+1;
							indexNumber[index]="c1_GirlsTwoToFour";
							indexNumberA[index]="c1_AGirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_GirlsFourToSix=$scope.saaForm.c1_GirlsFourToSix+1;
							$scope.saaForm.c1_AGirlsFourToSix=$scope.saaForm.c1_AGirlsFourToSix+1;
							indexNumber[index]="c1_GirlsFourToSix";
							indexNumberA[index]="c1_AGirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_GirlsGreaterThanSix=$scope.saaForm.c1_GirlsGreaterThanSix+1;
							$scope.saaForm.c1_AGirlsGreaterThanSix=$scope.saaForm.c1_AGirlsGreaterThanSix+1;
							indexNumber[index]="c1_GirlsGreaterThanSix";
							indexNumberA[index]="c1_AGirlsGreaterThanSix";
						}
	
					} 
					// for Abandoned
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 32) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c1_GirlsZeroToTwo=$scope.saaForm.c1_GirlsZeroToTwo+1;
							$scope.saaForm.c1_AGirlsZeroToTwo=$scope.saaForm.c1_AGirlsZeroToTwo+1;
							indexNumber[index]="c1_GirlsZeroToTwo";
							indexNumberA[index]="c1_AGirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c1_GirlsTwoToFour=$scope.saaForm.c1_GirlsTwoToFour+1;
							$scope.saaForm.c1_AGirlsTwoToFour=$scope.saaForm.c1_AGirlsTwoToFour+1;
							indexNumber[index]="c1_GirlsTwoToFour";
							indexNumberA[index]="c1_AGirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c1_GirlsFourToSix=$scope.saaForm.c1_GirlsFourToSix+1;
							$scope.saaForm.c1_AGirlsFourToSix=$scope.saaForm.c1_AGirlsFourToSix+1;
							indexNumber[index]="c1_GirlsFourToSix";
							indexNumberA[index]="c1_AGirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c1_GirlsGreaterThanSix=$scope.saaForm.c1_GirlsGreaterThanSix+1;
							$scope.saaForm.c1_AGirlsGreaterThanSix=$scope.saaForm.c1_AGirlsGreaterThanSix+1;
							indexNumber[index]="c1_GirlsGreaterThanSix";
							indexNumberA[index]="c1_AGirlsGreaterThanSix";
						}
					} 
					//for surrendered
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 33) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c2_GirlsZeroToTwo=$scope.saaForm.c2_GirlsZeroToTwo+1;
							$scope.saaForm.c2_AGirlsZeroToTwo=$scope.saaForm.c2_AGirlsZeroToTwo+1;
							indexNumber[index]="c2_GirlsZeroToTwo";
							indexNumberA[index]="c2_AGirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c2_GirlsTwoToFour=$scope.saaForm.c2_GirlsTwoToFour+1;
							$scope.saaForm.c2_AGirlsTwoToFour=$scope.saaForm.c2_AGirlsTwoToFour+1;
							indexNumber[index]="c2_GirlsTwoToFour";
							indexNumberA[index]="c2_AGirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c2_GirlsFourToSix=$scope.saaForm.c2_GirlsFourToSix+1;
							$scope.saaForm.c2_AGirlsFourToSix=$scope.saaForm.c2_AGirlsFourToSix+1;
							indexNumber[index]="c2_GirlsFourToSix";
							indexNumberA[index]="c2_AGirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c2_GirlsGreaterThanSix=$scope.saaForm.c2_GirlsGreaterThanSix+1;
							$scope.saaForm.c2_AGirlsGreaterThanSix=$scope.saaForm.c2_AGirlsGreaterThanSix+1;
							indexNumber[index]="c2_GirlsGreaterThanSix";
							indexNumberA[index]="c2_AGirlsGreaterThanSix";
						}
					} 
					//droped in cradles
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 34) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c3_GirlsZeroToTwo=$scope.saaForm.c3_GirlsZeroToTwo+1;
							$scope.saaForm.c3_AGirlsZeroToTwo=$scope.saaForm.c3_AGirlsZeroToTwo+1;
							indexNumber[index]="c3_GirlsZeroToTwo";
							indexNumberA[index]="c3_AGirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c3_GirlsTwoToFour=$scope.saaForm.c3_GirlsTwoToFour+1;
							$scope.saaForm.c3_AGirlsTwoToFour=$scope.saaForm.c3_AGirlsTwoToFour+1;
							indexNumber[index]="c3_GirlsTwoToFour";
							indexNumberA[index]="c3_AGirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c3_GirlsFourToSix=$scope.saaForm.c3_GirlsFourToSix+1;
							$scope.saaForm.c3_AGirlsFourToSix=$scope.saaForm.c3_AGirlsFourToSix+1;
							indexNumber[index]="c3_GirlsFourToSix";
							indexNumberA[index]="c3_AGirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c3_GirlsGreaterThanSix=$scope.saaForm.c3_GirlsGreaterThanSix+1;
							$scope.saaForm.c3_AGirlsGreaterThanSix=$scope.saaForm.c3_AGirlsGreaterThanSix+1;
							indexNumber[index]="c3_GirlsGreaterThanSix";
							indexNumberA[index]="c3_AGirlsGreaterThanSix";
						}
					} 
					//Recieved on transfers
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 35) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c4_GirlsZeroToTwo=$scope.saaForm.c4_GirlsZeroToTwo+1;
							$scope.saaForm.c4_AGirlsZeroToTwo=$scope.saaForm.c4_AGirlsZeroToTwo+1;
							indexNumber[index]="c4_GirlsZeroToTwo";
							indexNumberA[index]="c4_AGirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c4_GirlsTwoToFour=$scope.saaForm.c4_GirlsTwoToFour+1;
							$scope.saaForm.c4_AGirlsTwoToFour=$scope.saaForm.c4_AGirlsTwoToFour+1;
							indexNumber[index]="c4_GirlsTwoToFour";
							indexNumberA[index]="c4_AGirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c4_GirlsFourToSix=$scope.saaForm.c4_GirlsFourToSix+1;
							$scope.saaForm.c4_AGirlsFourToSix=$scope.saaForm.c4_AGirlsFourToSix+1;
							indexNumber[index]="c4_GirlsFourToSix";
							indexNumberA[index]="c4_AGirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c4_GirlsGreaterThanSix=$scope.saaForm.c4_GirlsGreaterThanSix+1;
							$scope.saaForm.c4_AGirlsGreaterThanSix=$scope.saaForm.c4_AGirlsGreaterThanSix+1;
							indexNumber[index]="c4_GirlsGreaterThanSix";
							indexNumberA[index]="c4_AGirlsGreaterThanSix";
						}
					} 
					// disruptions if any
					else if ($scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName.typeDetailsId == 36) {
						// for 0-2
						if ($scope.saaFormCSectionRepeatationArray[index].c_age < 2) {
							$scope.saaForm.c5_GirlsZeroToTwo=$scope.saaForm.c5_GirlsZeroToTwo+1;
							$scope.saaForm.c5_AGirlsZeroToTwo=$scope.saaForm.c5_AGirlsZeroToTwo+1;
							indexNumber[index]="c5_GirlsZeroToTwo";
							indexNumberA[index]="c5_AGirlsZeroToTwo";
						}
						// for 2-4
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 2 || $scope.saaFormCSectionRepeatationArray[index].c_age < 4) {
							$scope.saaForm.c5_GirlsTwoToFour=$scope.saaForm.c5_GirlsTwoToFour+1;
							$scope.saaForm.c5_AGirlsTwoToFour=$scope.saaForm.c5_AGirlsTwoToFour+1;
							indexNumber[index]="c5_GirlsTwoToFour";
							indexNumberA[index]="c5_AGirlsTwoToFour";
						}
						// for 4-6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age == 4 || $scope.saaFormCSectionRepeatationArray[index].c_age < 6) {
							$scope.saaForm.c5_GirlsFourToSix=$scope.saaForm.c5_GirlsFourToSix+1;
							$scope.saaForm.c5_AGirlsFourToSix=$scope.saaForm.c5_AGirlsFourToSix+1;
							indexNumber[index]="c5_GirlsFourToSix";
							indexNumberA[index]="c5_AGirlsFourToSix";
						}
						// for >6
						else if ($scope.saaFormCSectionRepeatationArray[index].c_age >= 6) {
							$scope.saaForm.c5_GirlsGreaterThanSix=$scope.saaForm.c5_GirlsGreaterThanSix+1;
							$scope.saaForm.c5_AGirlsGreaterThanSix=$scope.saaForm.c5_AGirlsGreaterThanSix+1;
							indexNumber[index]="c5_GirlsGreaterThanSix";
							indexNumberA[index]="c5_AGirlsGreaterThanSix";
						}
					}
				
				}
				
			}
		}
			
	};
	$scope.resetCAndCAsection=function(){
		$scope.saaForm.c1_BoysZeroToTwo=0;
		$scope.saaForm.c1_BoysTwoToFour=0;
		$scope.saaForm.c1_BoysFourToSix=0;
		$scope.saaForm.c1_BoysGreaterThanSix=0;
		$scope.saaForm.c1_BoysTotal=0;
		$scope.saaForm.c1_GirlsZeroToTwo=0;
		$scope.saaForm.c1_GirlsTwoToFour=0;
		$scope.saaForm.c1_GirlsFourToSix=0;
		$scope.saaForm.c1_GirlsGreaterThanSix=0;
		$scope.saaForm.c1_GirlsTotal=0;
		$scope.saaForm.c1_GrandTotal=0;
		$scope.saaForm.c2_BoysZeroToTwo=0;
		$scope.saaForm.c2_BoysTwoToFour=0;
		$scope.saaForm.c2_BoysFourToSix=0;
		$scope.saaForm.c2_BoysGreaterThanSix=0;
		$scope.saaForm.c2_BoysTotal=0;
		$scope.saaForm.c2_GirlsZeroToTwo=0;
		$scope.saaForm.c2_GirlsTwoToFour=0;
		$scope.saaForm.c2_GirlsFourToSix=0;
		$scope.saaForm.c2_GirlsGreaterThanSix=0;
		$scope.saaForm.c2_GirlsTotal=0;
		$scope.saaForm.c2_GrandTotal=0;
		$scope.saaForm.c3_BoysZeroToTwo=0;
		$scope.saaForm.c3_BoysTwoToFour=0;
		$scope.saaForm.c3_BoysFourToSix=0;
		$scope.saaForm.c3_BoysGreaterThanSix=0;
		$scope.saaForm.c3_BoysTotal=0;
		$scope.saaForm.c3_GirlsZeroToTwo=0;
		$scope.saaForm.c3_GirlsTwoToFour=0;
		$scope.saaForm.c3_GirlsFourToSix=0;
		$scope.saaForm.c3_GirlsGreaterThanSix=0;
		$scope.saaForm.c3_GirlsTotal=0;
		$scope.saaForm.c3_GrandTotal=0;
		$scope.saaForm.c4_BoysZeroToTwo=0;
		$scope.saaForm.c4_BoysTwoToFour=0;
		$scope.saaForm.c4_BoysFourToSix=0;
		$scope.saaForm.c4_BoysGreaterThanSix=0;
		$scope.saaForm.c4_BoysTotal=0;
		$scope.saaForm.c4_GirlsZeroToTwo=0;
		$scope.saaForm.c4_GirlsTwoToFour=0;
		$scope.saaForm.c4_GirlsFourToSix=0;
		$scope.saaForm.c4_GirlsGreaterThanSix=0;
		$scope.saaForm.c4_GirlsTotal=0;
		$scope.saaForm.c4_GrandTotal=0;
		$scope.saaForm.c5_BoysZeroToTwo=0;
		$scope.saaForm.c5_BoysTwoToFour=0;
		$scope.saaForm.c5_BoysFourToSix=0;
		$scope.saaForm.c5_BoysGreaterThanSix=0;
		$scope.saaForm.c5_BoysTotal=0;
		$scope.saaForm.c5_GirlsZeroToTwo=0;
		$scope.saaForm.c5_GirlsTwoToFour=0;
		$scope.saaForm.c5_GirlsFourToSix=0;
		$scope.saaForm.c5_GirlsGreaterThanSix=0;
		$scope.saaForm.c5_GirlsTotal=0;
		$scope.saaForm.c5_GrandTotal=0;
		$scope.saaForm.c6_BoysZeroToTwo=0;
		$scope.saaForm.c6_BoysTwoToFour=0;
		$scope.saaForm.c6_BoysFourToSix=0;
		$scope.saaForm.c6_BoysGreaterThanSix=0;
		$scope.saaForm.c6_BoysTotal=0;
		$scope.saaForm.c6_GirlsZeroToTwo=0;
		$scope.saaForm.c6_GirlsTwoToFour=0;
		$scope.saaForm.c6_GirlsFourToSix=0;
		$scope.saaForm.c6_GirlsGreaterThanSix=0;
		$scope.saaForm.c6_GirlsTotal=0;
		$scope.saaForm.c6_GrandTotal=0;
		$scope.saaForm.c1_ABoysZeroToTwo=0;
		$scope.saaForm.c1_ABoysTwoToFour=0;
		$scope.saaForm.c1_ABoysFourToSix=0;
		$scope.saaForm.c1_ABoysGreaterThanSix=0;
		$scope.saaForm.c1_ABoysTotal=0;
		$scope.saaForm.c1_AGirlsZeroToTwo=0;
		$scope.saaForm.c1_AGirlsTwoToFour=0;
		$scope.saaForm.c1_AGirlsFourToSix=0;
		$scope.saaForm.c1_AGirlsGreaterThanSix=0;
		$scope.saaForm.c1_AGirlsTotal=0;
		$scope.saaForm.c1_AGrandTotal=0;
		$scope.saaForm.c2_ABoysZeroToTwo=0;
		$scope.saaForm.c2_ABoysTwoToFour=0;
		$scope.saaForm.c2_ABoysFourToSix=0;
		$scope.saaForm.c2_ABoysGreaterThanSix=0;
		$scope.saaForm.c2_ABoysTotal=0;
		$scope.saaForm.c2_AGirlsZeroToTwo=0;
		$scope.saaForm.c2_AGirlsTwoToFour=0;
		$scope.saaForm.c2_AGirlsFourToSix=0;
		$scope.saaForm.c2_AGirlsGreaterThanSix=0;
		$scope.saaForm.c2_AGirlsTotal=0;
		$scope.saaForm.c2_AGrandTotal=0;
		$scope.saaForm.c3_ABoysZeroToTwo=0;
		$scope.saaForm.c3_ABoysTwoToFour=0;
		$scope.saaForm.c3_ABoysFourToSix=0;
		$scope.saaForm.c3_ABoysGreaterThanSix=0;
		$scope.saaForm.c3_ABoysTotal=0;
		$scope.saaForm.c3_AGirlsZeroToTwo=0;
		$scope.saaForm.c3_AGirlsTwoToFour=0;
		$scope.saaForm.c3_AGirlsFourToSix=0;
		$scope.saaForm.c3_AGirlsGreaterThanSix=0;
		$scope.saaForm.c3_AGirlsTotal=0;
		$scope.saaForm.c3_AGrandTotal=0;
		$scope.saaForm.c4_ABoysZeroToTwo=0;
		$scope.saaForm.c4_ABoysTwoToFour=0;
		$scope.saaForm.c4_ABoysFourToSix=0;
		$scope.saaForm.c4_ABoysGreaterThanSix=0;
		$scope.saaForm.c4_ABoysTotal=0;
		$scope.saaForm.c4_AGirlsZeroToTwo=0;
		$scope.saaForm.c4_AGirlsTwoToFour=0;
		$scope.saaForm.c4_AGirlsFourToSix=0;
		$scope.saaForm.c4_AGirlsGreaterThanSix=0;
		$scope.saaForm.c4_AGirlsTotal=0;
		$scope.saaForm.c4_AGrandTotal=0;
		$scope.saaForm.c5_ABoysZeroToTwo=0;
		$scope.saaForm.c5_ABoysTwoToFour=0;
		$scope.saaForm.c5_ABoysFourToSix=0;
		$scope.saaForm.c5_ABoysGreaterThanSix=0;
		$scope.saaForm.c5_ABoysTotal=0;
		$scope.saaForm.c5_AGirlsZeroToTwo=0;
		$scope.saaForm.c5_AGirlsTwoToFour=0;
		$scope.saaForm.c5_AGirlsFourToSix=0;
		$scope.saaForm.c5_AGirlsGreaterThanSix=0;
		$scope.saaForm.c5_AGirlsTotal=0;
		$scope.saaForm.c5_AGrandTotal=0;
		$scope.saaForm.c6_ABoysZeroToTwo=0;
		$scope.saaForm.c6_ABoysTwoToFour=0;
		$scope.saaForm.c6_ABoysFourToSix=0;
		$scope.saaForm.c6_ABoysGreaterThanSix=0;
		$scope.saaForm.c6_ABoysTotal=0;
		$scope.saaForm.c6_AGirlsZeroToTwo=0;
		$scope.saaForm.c6_AGirlsTwoToFour=0;
		$scope.saaForm.c6_AGirlsFourToSix=0;
		$scope.saaForm.c6_AGirlsGreaterThanSix=0;
		$scope.saaForm.c6_AGirlsTotal=0;
		$scope.saaForm.c6_AGrandTotal=0;
	};
	$scope.testC=false;
	$scope.resetAccordC=function(index){
		$scope.saaFormCSectionRepeatationArray[index].c_nameOfChild=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_dateOfBirth=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_age=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_gender=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_dateOfAdmission=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_caringRegNoDate=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_saaCategoryName=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_typeOfChild=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_referredByCwc=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_dateOfpublication=null;  
		$scope.saaFormCSectionRepeatationArray[index].c_remarks=null;  
		$scope.resetCAndCAsection();
	};
	
	$scope.resetAccordJ=function(index){
		$scope.saaFormJSectionRepeatationArray[index].j_nameOfChild=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_dateOfBirth=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_age=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_gender=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_dateOfAdmission=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_caringRegNoDate=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_saaCategoryName=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_typeOfChild=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_referredByCwc=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_dateOfpublication=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_reasonOfPendency=null;  
		$scope.saaFormJSectionRepeatationArray[index].j_reasonOfPendencyOther=null;  
	};
	
	$scope.deleteFromList=function(){
		var indNum=$scope.saaFormCSectionRepeatationArray.length - 1;
		$scope.addListChildrenOprn(indNum);
	};
	$scope.addNewDetailsC = function() {
		var maximumLimitErrorC = 500;
		if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length - 1])) {
			$scope.messageField1=commonService.messages.add_all_sectionC_details;
			$scope.messageField2="";
			$scope.alertMessage =""; 
			$('#ErrAlertModal').modal('show');
		} else {
			if ($scope.saaFormCSectionRepeatationArray.length != maximumLimitErrorC) {
				$scope.saaFormCSectionRepeatationArray[($scope.saaFormCSectionRepeatationArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.saaFormCSectionRepeatationObject));
			} else {
				document.getElementById('maximumLimitErrorC').innerHTML ="You can add details of maximum <b>" + maximumLimitErrorC + "</b> child/children";
			}
			$timeout(function() {
				document.getElementById('maximumLimitErrorC').innerHTML ="";
			}, 2000);
		}
	};
	$scope.deleteNewCdetails=function(){
		$scope.hidePlus=true;
		$scope.saaFormCSectionRepeatationArray.pop();
		for(var w=0;w<$scope.saaFormCSectionRepeatationArray.length;w++){
			$scope.testbuttons[w]=true;
		}
	};
	$scope.deleteConfirmCdetails = function() {
		if ($scope.saaFormCSectionRepeatationArray.length > 1) {
			$('#confirmationModalForSectionCdetails').modal('show');
		}
	};
		
	$scope.preSavedIndex=null;
	$scope.deleteConfirmC = function(index) {
		
		if (!accordionValidationC($scope.saaFormCSectionRepeatationArray[$scope.saaFormCSectionRepeatationArray.length - 1])) {
			$scope.messageField1=commonService.messages.add_all_sectionC_details;
			$scope.messageField2="";
			$scope.alertMessage = "";
			$('#ErrAlertModal').modal('show');
		}
		else if($scope.saaFormCSectionRepeatationArray.length > 1) {
			$scope.preSavedIndex=index;
			$('#confirmationModalForSectionI').modal('show');
		}
	};
	$scope.deleteNewDetailsC = function() {
		
		$scope.saaFormCSectionRepeatationArray.splice($scope.preSavedIndex,1);
		$scope.testC=true;
		 indexNumber.splice($scope.preSavedIndex,1);
         indexNumberA.splice($scope.preSavedIndex,1);
         $scope.allCandCa($scope.preSavedIndex);
         
		$scope.preSavedIndex=null;
	};
	//change maxdate
	$scope.initializeIDatePickers = function(index) {
		$("#dobDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			changeYear: true,
			yearRange:'-18Y:-0Y',
			maxDate : lastDay,
			onSelect : function(date) {

				$scope.saaFormCSectionRepeatationArray[index].c_dateOfBirth = date;
				$scope.saaFormCSectionRepeatationArray[index].c_age = getAge(date);
				$scope.$apply();
			},
		});
		$("#dobDatepicker1"+ index).on("click", function(){
			$("#dobDatepicker"+ index).focus();
		});
		$("#admissionDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay
		});
		$("#admissionDatepicker1"+ index).on("click", function(){
			$("#admissionDatepicker"+ index).focus();
		});
		
		$("#paperPublicationDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : currentday,
			minDate : firstDay
		});
		$("#paperPublicationDatepicker1"+ index).on("click", function(){
			$("#paperPublicationDatepicker"+ index).focus();
		});
	};
	//------------------section I
	
	//------------------section J
	$scope.saaFormJSectionRepeatationObject={
		 saaSectionJId : null,
		 j_nameOfChild : null,
		 j_dateOfBirth : null,
		 j_age : null,
		 j_gender : null,
		 j_dateOfAdmission : null,
		 j_caringRegNoDate : null,
		 j_saaCategoryName : null,
		 j_typeOfChild : null,
		 j_referredByCwc : null,
		 j_dateOfpublication : null,
		 j_reasonOfPendency : null,
		 j_reasonOfPendencyOther : null,
		 saaId : null
	};
	$scope.saaFormJSectionRepeatationArray=[{
		 saaSectionJId : null,
		 j_nameOfChild : null,
		 j_dateOfBirth : null,
		 j_age :null,
		 j_gender : null,
		 j_dateOfAdmission : null,
		 j_caringRegNoDate : null,
		 j_saaCategoryName : null,
		 j_typeOfChild : null,
		 j_referredByCwc : null,
		 j_dateOfpublication : null,
		 j_reasonOfPendency : null,
		 j_reasonOfPendencyOther : null,
		 saaId : null	
	}];
	
	var accordionValidationJfirstRow = function(secJ){
		if((secJ.j_nameOfChild == null || secJ.j_nameOfChild =="" )&&
				secJ.j_age == null &&
				secJ.j_gender == null &&
				secJ.j_dateOfAdmission == null &&
				secJ.j_saaCategoryName == null &&
				secJ.j_typeOfChild == null &&
				secJ.j_referredByCwc == null &&
				secJ.j_reasonOfPendency == null
		){
			return false;
		}else if(secJ.j_reasonOfPendency!=null && secJ.j_reasonOfPendency == 42 && (secJ.j_reasonOfPendencyOther == null || secJ.j_reasonOfPendencyOther.trim() =="")){
			return false;	
		}else{
			return true;
		}
	};
	var accordionValidationJ = function(secJ){
		if((secJ.j_nameOfChild == null || secJ.j_nameOfChild =="" ||
				secJ.j_age == null ||
				secJ.j_gender == null ||
				secJ.j_dateOfAdmission == null ||
				secJ.j_saaCategoryName == null ||
				secJ.j_typeOfChild == null ||
				secJ.j_referredByCwc == null ||
				secJ.j_reasonOfPendency == null
		)){
			return false;
		}else if(secJ.j_reasonOfPendency == 42 && (secJ.j_reasonOfPendencyOther == null || secJ.j_reasonOfPendencyOther.trim() =="")){
			return false;	
		}else{
			return true;
		}
	};
	
	$scope.addNewDetailsJ = function() {
		var maximumLimitErrorJ = Number(document.getElementById('d1_GrandTotal').value);
		if (!accordionValidationJ($scope.saaFormJSectionRepeatationArray[$scope.saaFormJSectionRepeatationArray.length - 1])) {
			$scope.messageField1=commonService.messages.add_all_sectionJ_details;
			$scope.messageField2="";
			$scope.alertMessage =""; 
			$('#ErrAlertModal').modal('show');
		} else {
			if ($scope.saaFormJSectionRepeatationArray.length != maximumLimitErrorJ) {
				$scope.saaFormJSectionRepeatationArray[($scope.saaFormJSectionRepeatationArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.saaFormJSectionRepeatationObject));
			} else {
				document.getElementById('maximumLimitErrorJ').innerHTML ="You can add details of maximum <b>" + maximumLimitErrorJ + "</b> child/children";
			}
			$timeout(function() {
				document.getElementById('maximumLimitErrorJ').innerHTML ="";
			}, 2000);
		}
	};
	
	$scope.deleteConfirmJ = function() {
		if ($scope.saaFormJSectionRepeatationArray.length > 1) {
			$('#confirmationModalForSectionJ').modal('show');
		}
	};
	$scope.deleteNewDetailsJ = function() {
		$scope.saaFormJSectionRepeatationArray.pop();
	};
	//change maxdate
	$scope.initializeJDatePickers = function(index) {
		$("#jdobDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			changeYear: true,
			yearRange:'-18Y:-0Y',
			maxDate : lastDayForJ,
			onSelect : function(date) {

				$scope.saaFormJSectionRepeatationArray[index].j_dateOfBirth = date;
				$scope.saaFormJSectionRepeatationArray[index].j_age = getAge(date);
				$scope.$apply();
			},
		});
		$("#jdobDatepicker1"+ index).on("click", function(){
			$("#jdobDatepicker"+ index).focus();
		});
		
		$("#jadmissionDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay
		});
		$("#jadmissionDatepicker1"+ index).on("click", function(){
			$("#jadmissionDatepicker"+ index).focus();
		});
		
		$("#jpaperPublicationDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : currentday,
			minDate : firstDay
		});
		$("#jpaperPublicationDatepicker1"+ index).on("click", function(){
			$("#jpaperPublicationDatepicker"+ index).focus();
		});
	};
	
	$scope.resetJOthers = function(saaSectionJ, qNo){
		switch (qNo){

		case 'j10':
				if (saaSectionJ.j_reasonOfPendency.typeDetailsId != 42)
					saaSectionJ.j_reasonOfPendencyOther = null;
				break;	
			default:
				break;
		}
	};
	//------------------section J
	// Accordion add new Functions @swarna

	$scope.saaTrainingDetailsObject = {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		trainingOrganisedBy : null,
		trainingOrganisedByOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLawsICPS : null,
		totCombinedTraining : null,
		totCPMIS : null,
		totTrackChild : null,
		totCLTS : null,
		totAdoptionRegualation : null,
		totCairing : null,
		totOthers : null,
		totOthersSpecify : null,
		tabManagerCoordinator : null,
		tabSocialWorkerChildhoodEducator : null,
		tabNurse : null,
		tabDoctor : null,
		tabAyah : null,
		tabChowkidar : null,
		tabOthers : null,
		tabOthersSpecify : null,
		saaId : null
	};
	$scope.saaTrainingDetailsRepetitionArray = [ {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		trainingOrganisedBy : null,
		trainingOrganisedByOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLawsICPS : null,
		totCombinedTraining : null,
		totCPMIS : null,
		totTrackChild : null,
		totCLTS : null,
		totAdoptionRegualation : null,
		totCairing : null,
		totOthers : null,
		totOthersSpecify : null,
		tabManagerCoordinator : null,
		tabSocialWorkerChildhoodEducator : null,
		tabNurse : null,
		tabDoctor : null,
		tabAyah : null,
		tabChowkidar : null,
		tabOthers : null,
		tabOthersSpecify : null,
		saaId : null
	} ];

	var topicOfTrainingValidation = function(training){
		if(training.totJjAct != true &&
				training.totPosco != true &&
				training.totChildRelatedLawsICPS != true &&
				training.totCombinedTraining != true &&
				training.totCPMIS != true &&
				training.totTrackChild != true &&
				training.totCLTS != true &&
				training.totAdoptionRegualation != true &&
				training.totCairing != true &&
				training.totOthers != true){
			return false;
		}else if(training.totOthers == true && (training.totOthersSpecify == null || training.totOthersSpecify.trim()=="")){
			return false;
		}else{
			return true;
		}
	};
	var trainingAttendedByValidation = function(training){
		if(training.tabManagerCoordinator != true &&
				training.tabSocialWorkerChildhoodEducator != true &&
				training.tabNurse != true &&
				training.tabDoctor != true &&
				training.tabAyah != true &&
				training.tabChowkidar != true &&
				training.tabOthers != true){
			return false;
		}else if(training.tabOthers == true && (training.tabOthersSpecify == null || training.tabOthersSpecify.trim()=="")){
			return false;
		}else{
			return true;
		}
	};
	var accordionValidation = function(training){
		if($scope.saaForm.k1WasTrainingHeldJJSysytem == 'true'){
			if((training.durationTraining == null ||
					training.trainingFromDate == null ||
					training.trainingToDate == null ||
					training.trainingOrganisedBy == null)){
				return false;
			}else if(training.trainingOrganisedBy.typeDetailsId == 28 && (training.trainingOrganisedByOthers == null || training.trainingOrganisedByOthers.trim() =="")){
				return false;
			}else if(!topicOfTrainingValidation(training)){
				return false;
			}else if(!trainingAttendedByValidation(training)){
				return false;
			}else{
				return true;
			}
		}else{
			return true;
		}
	};
	
	$scope.addNewDetails = function() {
//		document.getElementById("k1aNoOfTraining").blur();
		if($scope.validateNoOfTraining($scope.saaForm.k1aNoOfTraining)){
			if (!accordionValidation($scope.saaTrainingDetailsRepetitionArray[$scope.saaTrainingDetailsRepetitionArray.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
			} else {
				if ($scope.saaTrainingDetailsRepetitionArray.length != $scope.saaForm.k1aNoOfTraining) {
					$scope.saaTrainingDetailsRepetitionArray[($scope.saaTrainingDetailsRepetitionArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.saaTrainingDetailsObject));
				} else {
					document.getElementById('maximumLimit10Error').innerHTML ="You can add details of maximum <b>" + $scope.saaForm.k1aNoOfTraining + "</b> training details";
				}
				$timeout(function() {
					document.getElementById('maximumLimit10Error').innerHTML ="";
				}, 2000);
			}
		}
	};

	$scope.deleteConfirm = function() {
		document.getElementById("k1aNoOfTraining").blur();
		if ($scope.saaTrainingDetailsRepetitionArray.length > 1 && $scope.saaForm.k1aNoOfTraining >= $scope.saaTrainingDetailsRepetitionArray.length
				&& $scope.saaForm.k1aNoOfTraining!=undefined && $scope.saaForm.k1aNoOfTraining <= 10) {
			$('#confirmationModalForSAAdeleteAccordion').modal('show');
		}
	};
	$scope.deleteNewDetails = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML ="";
		if ($scope.saaTrainingDetailsRepetitionArray.length > 1) {
			$scope.saaTrainingDetailsRepetitionArray.pop();
		}
	};

	
	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.saaTrainingDetailsRepetitionArray[id].h1dTrainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.saaTrainingDetailsRepetitionArray[id].h1dTrainingToDate = date;
			}
		});
	};

	$scope.district = [];
	$http.get("getAreas").then(function(result) {
		console.log(result);
		// Pick out objects with areaLevel '3' for district.
		for (var i = 0; i < result.data.length; i++) {
			if (result.data[i].areaLevel == 3) {
				$scope.district.push(result.data[i]);
			}
		}
	}, function(error) {
		console.log(error);
	});
	$scope.timerForSave=function ($scope,$timeout) {
	    $scope.counterSeconds=1500;
	    $scope.onTimeout = function(){
	    	if( $scope.counterSeconds==0 ){
	    		console.log("over");
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
	    	if($scope.counterSeconds==300 && !$('#successModalForSAASave').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#successModalForSAASave').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSaveSAA($scope.saaForm, 'save');
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
    var lastDayForJ;
    var currentday;
    var yearsBack;
	$http.post("getLastSavedSAAData", currentUserId).then(function(result){
		if(result.data !=""){
			$scope.saaForm = result.data;
			if($scope.saaForm.saaSectionCChildDeatailsList!=null){
				for(var i=0;i<$scope.saaForm.saaSectionCChildDeatailsList.length;i++){
					if(i==$scope.saaForm.saaSectionCChildDeatailsList.length-1){
						if (!accordionValidationC($scope.saaForm.saaSectionCChildDeatailsList[$scope.saaForm.saaSectionCChildDeatailsList.length-1])){
							$scope.addListStatus[$scope.saaForm.saaSectionCChildDeatailsList.length-1]=true;
							$scope.hidePlus=false;
						}else{
							$scope.addListStatus[$scope.saaForm.saaSectionCChildDeatailsList.length-1]=false;
							$scope.hidePlus=true;
						}
					}else{
						$scope.addListStatus[i]=false;
					}
				}
			}else{
				$scope.addListStatus[0]=true;
			}
			todaysDate = new Date($scope.saaForm.timeperiod.startDate);
			lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
		    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
		    
		    lastDayForJ=new Date(todaysDate.getFullYear(), todaysDate.getMonth(), -60);
		    currentday=new Date($scope.saaForm.timeperiod.startDate-1);
		    yearsBack= new Date(todaysDate.getFullYear()-18, todaysDate.getMonth()-1, 1);		    
		    
			$(".accordionFromDatepicker").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDay,
				minDate : firstDay,
				onSelect: function(date){
					if(this.id.startsWith("trainingFromDatepicker")){
						if($scope.saaTrainingDetailsRepetitionArray[0].trainingToDate != null && $scope.saaTrainingDetailsRepetitionArray[0].trainingToDate != undefined){
							var fromDay = new Date(dateConvert(date));
							var toDay = new Date(dateConvert($scope.saaTrainingDetailsRepetitionArray[0].trainingToDate));
							if(toDay < fromDay){
								var index = this.id.split('trainingFromDatepicker')[1];
								$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
								$scope.messageField2="";
								$scope.alertMessage = "";
				            	$scope.$apply();
				    			$('#ErrAlertModal').modal('show');
				    			$("#trainingToDatepicker"+index).val(null);
				    			$scope.saaTrainingDetailsRepetitionArray[index].trainingToDate = null;
				            }
						}
						$scope.saaTrainingDetailsRepetitionArray[0].trainingFromDate = date;
		            }else if(this.id.startsWith("trainingToDatepicker")){
		            	checkDate(date, 0);
		            }
		        },
			});
			$(".dobDatepicker").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDay,
				minDate : yearsBack,
				yearRange:'-18Y:+0Y',
				changeYear: true,
				onSelect: function(date){
					$scope.saaFormCSectionRepeatationArray[0].c_dateOfBirth = date;
					$scope.saaFormCSectionRepeatationArray[0].c_age = getAge(date);
					$scope.$apply();
		        },
			});
			$(".dateOfAdmission").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDay,
				minDate : firstDay,
				onSelect: function(date){
					$scope.saaFormCSectionRepeatationArray[0].c_dateOfAdmission = date;
		        },
			});
			$(".dateOfpublication").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : currentday,
				minDate : firstDay,
				onSelect: function(date){
					$scope.saaFormCSectionRepeatationArray[0].c_dateOfpublication = date;
		        },
			});
			$(".jdobDatepicker").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDayForJ,
				minDate : yearsBack,
				yearRange:'-18Y:+0Y',
				changeYear: true,
				onSelect: function(date){
					$scope.saaFormJSectionRepeatationArray[0].j_dateOfBirth = date;
					$scope.saaFormJSectionRepeatationArray[0].j_age = getAge(date);
					$scope.$apply();
		        },
			});
			
			$(".jdateOfAdmission").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDay,
				minDate : firstDay,
				onSelect: function(date){
					$scope.saaFormJSectionRepeatationArray[0].j_dateOfAdmission = date;
		        },
			});
			
			$(".jdateOfpublication").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : currentday,
				minDate : firstDay,
				onSelect: function(date){
					$scope.saaFormJSectionRepeatationArray[0].j_dateOfpublication = date;
		        },
			});
			
			
			if($scope.saaForm.districtId != null){
				angular.forEach($scope.district, function(value, key) {
					if (value.id == $scope.saaForm.districtId) {
						$scope.selectedDistrict = value;
					}
				});
			}
			$scope.showJ = true;
		}
		if(!$scope.saaForm.submitted)
			$scope.timerForSave($scope,$timeout);
		if ($scope.saaForm.submitted) {
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		$scope.saaForm.k1WasTrainingHeldJJSysytem = $scope.saaForm.k1WasTrainingHeldJJSysytem!=null?$scope.saaForm.k1WasTrainingHeldJJSysytem.toString():null;
		
		$timeout(function() {
			if ($scope.saaForm.saaTrainings != null && $scope.saaForm.saaTrainings != undefined && $scope.saaForm.saaTrainings.length != 0)
				$scope.saaTrainingDetailsRepetitionArray = $scope.saaForm.saaTrainings;
			if ($scope.saaForm.saaTrainings != undefined) {
				for (var i = 0; i < $scope.saaForm.saaTrainings.length; i++) {
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
						if ($scope.trainingOrganisedBy[j].typeDetailsId == $scope.saaForm.saaTrainings[i].trainingOrganisedBy) {
							$scope.saaTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			if ($scope.saaForm.saaSectionCChildDeatailsList != null && $scope.saaForm.saaSectionCChildDeatailsList != undefined && $scope.saaForm.saaSectionCChildDeatailsList.length != 0){
				$scope.saaFormCSectionRepeatationArray = $scope.saaForm.saaSectionCChildDeatailsList;
				for (var i = 0; i < $scope.saaForm.saaSectionCChildDeatailsList.length; i++) {
					for (var j = 0; j < $scope.childGender.length; j++) {
						if ($scope.childGender[j].typeDetailsId == $scope.saaForm.saaSectionCChildDeatailsList[i].c_gender)
							$scope.saaFormCSectionRepeatationArray[i].c_gender = $scope.childGender[j];
					}
					for (var j = 0; j < $scope.childCategory.length; j++) {
						if ($scope.childCategory[j].typeDetailsId == $scope.saaForm.saaSectionCChildDeatailsList[i].c_saaCategoryName)
							$scope.saaFormCSectionRepeatationArray[i].c_saaCategoryName = $scope.childCategory[j];
					}
					for (var j = 0; j < $scope.typeOfChild.length; j++) {
						if ($scope.typeOfChild[j].typeDetailsId == $scope.saaForm.saaSectionCChildDeatailsList[i].c_typeOfChild)
							$scope.saaFormCSectionRepeatationArray[i].c_typeOfChild = $scope.typeOfChild[j];
					}
					for (var j = 0; j < $scope.district.length; j++) {
						if ($scope.district[j].areaId == $scope.saaForm.saaSectionCChildDeatailsList[i].c_referredByCwc)
							$scope.saaFormCSectionRepeatationArray[i].c_referredByCwc = $scope.district[j];
					}
				}
				
			}
			
			if ($scope.saaForm.saaSectionJs != null && $scope.saaForm.saaSectionJs != undefined && $scope.saaForm.saaSectionJs.length != 0){
				$scope.saaFormJSectionRepeatationArray = $scope.saaForm.saaSectionJs;
				for (var i = 0; i < $scope.saaForm.saaSectionJs.length; i++) {
					for (var j = 0; j < $scope.childGender.length; j++) {
						if ($scope.childGender[j].typeDetailsId == $scope.saaForm.saaSectionJs[i].j_gender)
							$scope.saaFormJSectionRepeatationArray[i].j_gender = $scope.childGender[j];
					}
					for (var j = 0; j < $scope.childCategory.length; j++) {
						if ($scope.childCategory[j].typeDetailsId == $scope.saaForm.saaSectionJs[i].j_saaCategoryName)
							$scope.saaFormJSectionRepeatationArray[i].j_saaCategoryName = $scope.childCategory[j];
					}
					for (var j = 0; j < $scope.typeOfChild.length; j++) {
						if ($scope.typeOfChild[j].typeDetailsId == $scope.saaForm.saaSectionJs[i].j_typeOfChild)
							$scope.saaFormJSectionRepeatationArray[i].j_typeOfChild = $scope.typeOfChild[j];
					}
					for (var j = 0; j < $scope.district.length; j++) {
						if ($scope.district[j].areaId == $scope.saaForm.saaSectionJs[i].j_referredByCwc)
							$scope.saaFormJSectionRepeatationArray[i].j_referredByCwc = $scope.district[j];
					}
					for (var j = 0; j < $scope.reasonOfPendency.length; j++) {
						if ($scope.reasonOfPendency[j].typeDetailsId == $scope.saaForm.saaSectionJs[i].j_reasonOfPendency)
							$scope.saaFormJSectionRepeatationArray[i].j_reasonOfPendency = $scope.reasonOfPendency[j];
					}
				}
			}
			$(".loader").fadeOut();
		}, 500);
		$timeout(function() {
			$scope.saaForm.k1aNoOfTraining = $scope.saaTrainingDetailsRepetitionArray.length;
			$(".loader").fadeOut();
		}, 500);

	}, function(error) {
		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});

	// division hide and show for H section on click of radio button

	$scope.showOther = function(value) {
		$scope.isVisible = value =="Y";
		if (value == 'Y')
			$scope.saaForm.i1Training = true;
		else if (value == 'N')
			$scope.saaForm.i1Training = false;
	};

	// type number will not accept exponential(e) @Swarna

	$(".removeExponentialValueE").keypress(function(event) {
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
			return false;
		}
	});
	$scope.validateNoOfTraining = function(val) {
		if (val == 0 || val == null) {
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage ="This value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.saaForm.k1aNoOfTraining = $scope.saaTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val > 10) {
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage ="The maximum value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.saaForm.k1aNoOfTraining = $scope.saaTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val < $scope.saaTrainingDetailsRepetitionArray.length) {
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage ="The value should not be less than the number of trainings you added.";
			$('#alertModal').modal('show');
			$scope.saaForm.k1aNoOfTraining = $scope.saaTrainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	$scope.clearMsg = function() {
		$scope.messageField1=undefined;
		$scope.messageField2=undefined;
		$scope.alertMessage = undefined;
	};

	$scope.clearTopicOfTrainingOthers = function(model) {
		model.totOthersSpecify = null;
	};
	$scope.clearTrainingAtendedByOthers = function(model) {
		model.tabOthersSpecify = null;
	};
	// for reset to zero
	$scope.resetToZeroaccd1 = function(value) {
		if (value == 'false') {
			$scope.saaTrainingDetailsRepetitionArray = [ {
				trainingId : null,
				durationTraining : null,
				trainingFromDate : null,
				trainingToDate : null,
				trainingOrganisedBy : null,
				trainingOrganisedByOthers : null,
				totJjAct : null,
				totPosco : null,
				totChildRelatedLawsICPS : null,
				totCombinedTraining : null,
				totCPMIS : null,
				totTrackChild : null,
				totCLTS : null,
				totAdoptionRegualation : null,
				totCairing : null,
				totOthers : null,
				totOthersSpecify : null,
				tabManagerCoordinator : null,
				tabSocialWorkerChildhoodEducator : null,
				tabNurse : null,
				tabDoctor : null,
				tabAyah : null,
				tabChowkidar : null,
				tabOthers : null,
				tabOthersSpecify : null,
				saaId : null
			} ];
		}
		$scope.saaForm.k1aNoOfTraining = $scope.saaTrainingDetailsRepetitionArray.length;
	};

	// the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers2 = function(saaTrainingDetails) {
		if (saaTrainingDetails.trainingOrganisedBy.typeDetailsId != 28)
			saaTrainingDetails.trainingOrganisedByOthers = null;
	};

});