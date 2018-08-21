cpmisApp.controller('placeofSafetyontroller', function($scope, $http, $timeout, $window, commonService) {

	$scope.placeofSafety = {};
	// converting total number string to integer

	$scope.Number = Number;
	//
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
	$http.get("getCciNameList").
	then(function(result){
		$scope.cciNameList = result.data;
	},function(error){
		console.log(error);
	});
	$http.get("getDropdownItems").then(function(result) {
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
		$scope.topicOfTraining = result.data.topicOfTraining;
		$scope.trainingAttendedBy = result.data.trainingAttendedBy;
		$scope.childSex = result.data.childSex;
		$scope.osType = result.data.osType;

	}, function(error) {
		console.log(error);
	});

	var currentUserId = Number(document.getElementById("uId").value);
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
	
	$("#meetingdatepicker1").on("click", function(){
		$("#meetingdatepicker").focus();
	});

	$("#homeManagementdatepicker1").on("click", function(){
		$("#homeManagementdatepicker").focus();
	});
	
	$("#Othermeetingdatepicker1").on("click", function(){
		$("#Othermeetingdatepicker").focus();
	});
	$(".loader").show();
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
	$scope.messageField1="";
	$scope.messageField2="";
	
	$scope.testCapacity=function(id)
	{
		var value=Number(document.getElementById(id).value-0);
		if(value>500){
			$scope.placeofSafety[id] = null;
			document.getElementById(id).blur();
			$('#ErrAlertModal').modal('show');
			$scope.messageField1="Capacity of the home: can not be more than 500";
			$scope.messageField2="";
			$scope.alertMessage = "";
			
			}
	};
	
	$scope.resetAccG = function(value) {
		if ($scope.posTrainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.posTrainingDetailsRepetitionArray[value].tabOthers == null) {
			$scope.posTrainingDetailsRepetitionArray[value].tabOthersSpecify = null;
		}
	};
	
	// submit function validation starts
	var commonFunctionBody = function(firstInput, secondInput, bgc) {

		if (firstInput < secondInput) {
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
	function removeCommonFunctionBodyEqualToK11andK12(firstInput, secondInput, bgc1,bgc2) {
		if (firstInput == secondInput) {
			bgc1.style.removeProperty("background-color", "#DC143C", "important");
			bgc1.style.removeProperty("color", "#FFFAF0", "important");
			bgc1.style.removeProperty("border-color", "red", "important");
			bgc2.style.removeProperty("background-color", "#DC143C", "important");
			bgc2.style.removeProperty("color", "#FFFAF0", "important");
			bgc2.style.removeProperty("border-color", "red", "important");
			return true;
		}
	};
	var commonFunctionBodyEqualToK11andK12 = function(firstInput, secondInput, bgc1,bgc2) {

		if (!(firstInput == secondInput)) {
			bgc1.style.setProperty("background-color", "#DC143C", "important");
			bgc1.style.setProperty("color", "#FFFAF0", "important");
			bgc1.style.setProperty("border-color", "red", "important");
			
			bgc2.style.setProperty("background-color", "#DC143C", "important");
			bgc2.style.setProperty("color", "#FFFAF0", "important");
			bgc2.style.setProperty("border-color", "red", "important");
			
			$('#ErrAlertModal').modal('show');
			window.setTimeout(function() {
				bgc1.focus();
				bgc2.focus();
			}, 0);
			return false;
		} else {
			bgc1.style.removeProperty("background-color", "#DC143C", "important");
			bgc1.style.removeProperty("color", "#FFFAF0", "important");
			bgc1.style.removeProperty("border-color", "red", "important");
			bgc2.style.removeProperty("background-color", "#DC143C", "important");
			bgc2.style.removeProperty("color", "#FFFAF0", "important");
			bgc2.style.removeProperty("border-color", "red", "important");

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
	$scope.calculateWithC = function(id, modelId, yearRange) {
		var sum = modelValue = 0;

		if (yearRange == '16-18') {
			sum = document.getElementById('d10Years16to18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(16-18)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(16-18)years";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '18-21') {
			sum = document.getElementById('d10Years18to21').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(18-21)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(18-21)years";
			$scope.alertMessage = "value can not exceed";
		} else if (yearRange == '>21') {
			sum = document.getElementById('d10YearsGreaterThan21').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(>18)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(>18)years";
			$scope.alertMessage = "value can not exceed";
		}

		if (Number(sum) > Number(modelValue)) {
			$scope.placeofSafety[modelId] = null;
			$('#ErrAlertModal').modal('show');
		}
	};
	$scope.checkD = function() {
		var bgc = document.getElementById('d10Total');
		var firstInput = parseInt(document.getElementById("c2Total").value);
		var secondInput = parseInt(document.getElementById("d10Total").value);
		$scope.messageField1="D.10.Total no. of children referred";
		$scope.messageField2="C.1.Age distribution of children in the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkF = function() {
		var bgc = document.getElementById('fTotal');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("fTotal").value);
		$scope.messageField1="F.1.Total children";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};
	$scope.checkFMinority = function() {
		var bgc = document.getElementById('fMinority');
		var firstInput = parseInt(document.getElementById("fTotal").value);
		var secondInput = parseInt(document.getElementById("fMinority").value);
		$scope.messageField1="Total number of minority children";
		$scope.messageField2="F.1.Total children";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	
	$scope.checkI4 = function() {
		var bgc = document.getElementById('iTotal');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("iTotal").value - 0);
		$scope.messageField1="I.4.Total";
		$scope.messageField2="E.1.Age distribution of Children on the last day of the reporting month";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkJ1 = function() {
		var bgc = document.getElementById('j1Total');
		var firstInput = Number(document.getElementById('aTotal').value - 0);
		var secondInput = Number(document.getElementById("j1Total").value - 0);
		$scope.messageField1="Total children in J.1.Children on the first day of the month";
		$scope.messageField2="A.1.Age distribution of Children on the first day of the reporting month";
		$scope.alertMessage = "value should be equal to";
		
		return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};

	$scope.checkJ2 = function() {
		var bgc = document.getElementById('j2Total');
		var firstInput = Number(document.getElementById("b3Total").value - 0);
		var secondInput = Number(document.getElementById("j2Total").value - 0);
		$scope.messageField1="Total children in J.2.New children admitted in the month";
		$scope.messageField2="B.3. Total no. of children referred";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkJ3 = function() {
		var bgc = document.getElementById('j3Total');
		var firstInput = Number(document.getElementById("d10Total").value - 0);
		var secondInput = Number(document.getElementById("j3Total").value - 0);
		$scope.messageField1="Total children in J.3. Children moved out in the month";
		$scope.messageField2="D.10. Total no. of children referred";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkJ4 = function() {
		var bgc = document.getElementById('j4Total');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("j4Total").value - 0);
		$scope.messageField1="Total children in J.4. Total children on the last day of the month";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month ";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};


	$scope.checkG5 = function() {
		var bgc = document.getElementById('g5Total');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("g5Total").value);
		$scope.messageField1="G.5. Total no. of children attending any educational program";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month" ;
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkH5 = function() {
		var bgc = document.getElementById('h5Total');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("h5Total").value);
		$scope.messageField1="H.5 Total children";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkI5 = function() {
		return true;
	};
	$scope.checkK1 = function() {
		var bgc = document.getElementById('k1');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("k1").value);
		$scope.messageField1="K.1. No. of children with single parent";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK2 = function() {
		var bgc = document.getElementById('k2');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("k2").value);
		$scope.messageField1="K.2. No. of children without parental care/without adult support";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK3 = function() {
		var bgc = document.getElementById('k3');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("k3").value);
		$scope.messageField1="K.3. No. of children referred to Hospital/PHC/Clinics";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK4 = function() {
		var bgc = document.getElementById('k4');
		var firstInput = parseInt(document.getElementById("c2Total").value);
		var secondInput = parseInt(document.getElementById("k4").value);
		$scope.messageField1="K.4. No. of children transferred to home within the state";
		$scope.messageField2="C.1.Age distribution of children in the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK5 = function() {
		var bgc = document.getElementById('k5');
		var firstInput = parseInt(document.getElementById("c2Total").value);
		var secondInput = parseInt(document.getElementById("k5").value);
		$scope.messageField1="K.5. No. of children transferred to home outside the state";
		$scope.messageField2="C.1.Age distribution of children in the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK6 = function() {
		var bgc = document.getElementById('k6');
		var firstInput = parseInt(document.getElementById("c2Total").value);
		var secondInput = parseInt(document.getElementById("k6").value);
		$scope.messageField1="K.6. No. of children transferred to Jail";
		$scope.messageField2="C.1.Age distribution of children in the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK9 = function() {
		var bgc = document.getElementById('k9');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("k9").value);
		$scope.messageField1="K.9. No. of children referred for Psychiatric treatment";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK10 = function() {
		var bgc = document.getElementById('k10');
		var firstInput = parseInt(document.getElementById("c2Total").value);
		var secondInput = parseInt(document.getElementById("k10").value);
		$scope.messageField1="K.10. No. of children sent for After care";
		$scope.messageField2="C.1.Age distribution of children in the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK11n12 = function() {
		var bgc1 = document.getElementById('k11');
		var bgc2 = document.getElementById('k12');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var firstK11 = Number(document.getElementById("k11").value - 0);
		var secondK12 = Number(document.getElementById("k12").value - 0);
		var secondInput = firstK11 + secondK12;
		$scope.messageField1="Sum of K.11.No. of first-time offender children and K.12.No. of repeat-offender children";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month( value= "+firstInput+")";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualToK11andK12(firstInput, secondInput, bgc1,bgc2);
	};
	
	var removeCheckK11n12 = function() {
		var bgc1 = document.getElementById('k11');
		var bgc2 = document.getElementById('k12');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var firstK11 = Number(document.getElementById("k11").value - 0);
		var secondK12 = Number(document.getElementById("k12").value - 0);
		var secondInput = firstK11 + secondK12;
		return removeCommonFunctionBodyEqualToK11andK12(firstInput, secondInput, bgc1,bgc2);
	};

	$scope.checkK13 = function() {
		var bgc = document.getElementById('k13');
		var firstInput = parseInt(document.getElementById("e1Total").value);
		var secondInput = parseInt(document.getElementById("k13").value);
		$scope.messageField1="K.13. No. of children charged for Petty offences";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK15 = function() {
		var bgc = document.getElementById('k15');
		var firstInput = parseInt(document.getElementById("c2Total").value);
		var secondInput = parseInt(document.getElementById("k15").value);
		$scope.messageField1="K.15. No. of children sent for Sponsorship";
		$scope.messageField2="C.1.Age distribution of children in the reporting month ";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	
	$scope.checkJNegetive=function(currentId,targetId,msg){
		var bgc = document.getElementById(currentId);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;	
		$scope.messageField1="Sum of J.1.Children on the first day of the month and J.2.New children Admitted in the Month "+msg+" children";
		$scope.messageField2="J.3. Children moved out in the month "+msg+" children";
		$scope.alertMessage = "value can not be less than";		
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			$scope.placeofSafety[currentId] = null;
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
	$scope.checkJNegetive1=function(currentId,j3Id,targetId,msg){
		var bgc = document.getElementById(currentId);
		var bgc1= document.getElementById(j3Id);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;	
		$scope.messageField1="Sum of J.1.Children on the first day of the month and J.2.New children admitted in the month "+msg+" children";
		$scope.messageField2="J.3. Children moved out in the month "+msg+" children";
		$scope.alertMessage = "value can not be less than";		
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			bgc1.value=null;
			$scope.placeofSafety[currentId] = null;
			$scope.placeofSafety[j3Id] = null;
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
	
	 $("input[type='number']").keyup(function() {
		 checkD();checkF();checkFMinority();checkG5();checkH5();checkI4();checkJ1();checkJ2();checkJ3();checkJ4();removeCheckK11n12();removeNegetiveColor();
	});
	 
	 $scope.showHideBasedOnFlag=function(id,value){
			var idValue=document.getElementById(id).value;
			if(idValue>0)
				return true;
			else if (idValue == 0 || idValue == null) {
				$scope.placeofSafety[value] = null;
				return false;
			}
				
		};
	// submit function validation ends
		
	//e section -ve value validation starts(Pratyush)
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
	 *In the following function, if any change in 'B section' will cause negetive number in 'E section'
	  then it will reset the value of the current input field with the value of valObj.oldVal(which was stored during focus) 
	  along with a message showing in a modal. 
	 */
	$scope.validateWithE = function(a, b, thisId, eId, yearRange){
		if(!$('#ErrAlertModal').hasClass('in')){
			var eVal = Number(document.getElementById(eId).value);
			if(eVal < 0){
				$scope.messageField1=commonService.cci_e_negetive_err_msg(yearRange);
				$scope.messageField2="";
				$scope.alertMessage = "";
				
				$scope.placeofSafety[thisId] = valObj.oldVal;
				$('html,body').animate({scrollTop : $('#'+thisId).offset().top - 250}, 'slow');
				$('#ErrAlertModal').modal('show');
			}
		}
	};
	//e section -ve value validation ends	
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
	angular.forEach($scope.placeofSafety, function(value, index) {
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
	// save and submit check method

	$scope.checkSave = function() {
			$scope.savePos($scope.placeofSafety, 'save');
	};

	$scope.checkSubmit = function() {
		if (!$scope.checkD()) {
		} else if (!$scope.checkF()) {
		} else if (!$scope.checkFMinority()) {
		} else if (!$scope.checkG5()) {
		} else if (!$scope.checkH5()) {
		} else if (!$scope.checkI4()) {
		} else if (!$scope.checkJ1()) {
		} else if (!$scope.checkJ2()) {
		} else if (!$scope.checkJ3()) {
		} else if (!$scope.checkJ4()) {
		} else if (!$scope.checkK1()) {
		} else if (!$scope.checkK2()) {
		} else if (!$scope.checkK3()) {
		} else if (!$scope.checkK4()) {
		} else if (!$scope.checkK5()) {
		} else if (!$scope.checkK6()) {
		} else if (!$scope.checkK9()) {
		} else if (!$scope.checkK10()) {
		} else if (!$scope.checkK11n12()) {
		} else if (!$scope.checkK13()) {
		} else if (!$scope.checkK15()) {
		} else if(($scope.placeofSafety.k16aMeetingChildrenCommitte == 'true') && ($scope.placeofSafety.k16bDate == null || $scope.placeofSafety.k16bDate == undefined)){
			document.getElementById("meetingdatepicker").focus();
		} else if(($scope.placeofSafety.k17aMeetingHomeManagementCommitte == 'true')&& ($scope.placeofSafety.k17bDate == null || $scope.placeofSafety.k17bDate == undefined)){
			document.getElementById("homeManagementdatepicker").focus();
		} else if(($scope.placeofSafety.k18aAnyOtherDetails == 'true')&& ($scope.placeofSafety.k18bDate == null || $scope.placeofSafety.k18bDate == undefined)){
			document.getElementById("Othermeetingdatepicker").focus();
		} else {
			$scope.savePos($scope.placeofSafety, 'submit');
		}

	};

	//
	$(".loader").show();
	var submitted = false;
	$scope.savePos = function(placeofSafety, clickType,submitConfirm) {
		$(".loader").show();
		placeofSafety.typeOfHome=document.getElementById("typeOfHomeId").value;
		
		placeofSafety.aTotal = parseInt(document.getElementById('aTotal').value)==0?null:parseInt(document.getElementById('aTotal').value);
		placeofSafety.b1Total = parseInt(document.getElementById('b1Total').value);
		placeofSafety.b2Total = parseInt(document.getElementById('b2Total').value);
		placeofSafety.b3Years16to18 = parseInt(document.getElementById('b3Years16to18').value);
		placeofSafety.b3Years18to21 = parseInt(document.getElementById('b3Years18to21').value);
		placeofSafety.b3YearsGreaterThan21 = parseInt(document.getElementById('b3YearsGreaterThan21').value);
		placeofSafety.b3Total = parseInt(document.getElementById('b3Total').value);

		placeofSafety.c2Years16to18 = parseInt(document.getElementById('c2Years16to18').value);
		placeofSafety.c2Years18to21 = parseInt(document.getElementById('c2Years18to21').value);
		placeofSafety.c2YearsGreaterThan21 = parseInt(document.getElementById('c2YearsGreaterThan21').value);
		placeofSafety.c2Total = parseInt(document.getElementById('c2Total').value);

		placeofSafety.d1Total = parseInt(document.getElementById('d1Total').value);
		placeofSafety.d2Total = parseInt(document.getElementById('d2Total').value);
		placeofSafety.d3Total = parseInt(document.getElementById('d3Total').value);
		placeofSafety.d4Total = parseInt(document.getElementById('d4Total').value);
		placeofSafety.d5Total = parseInt(document.getElementById('d5Total').value);
		placeofSafety.d6Total = parseInt(document.getElementById('d6Total').value);
		placeofSafety.d7Total = parseInt(document.getElementById('d7Total').value);
		placeofSafety.d8Total = parseInt(document.getElementById('d8Total').value);
		placeofSafety.d9aTotal = parseInt(document.getElementById('d9aTotal').value);

		placeofSafety.d10Years16to18 = parseInt(document.getElementById('d10Years16to18').value);
		placeofSafety.d10Years18to21 = parseInt(document.getElementById('d10Years18to21').value);
		placeofSafety.d10YearsGreaterThan21 = parseInt(document.getElementById('d10YearsGreaterThan21').value);
		placeofSafety.d10Total = parseInt(document.getElementById('d10Total').value);

		placeofSafety.e1Years16to18 = parseInt(document.getElementById('e1Years16to18').value);
		placeofSafety.e1Years18to21 = parseInt(document.getElementById('e1Years18to21').value);
		placeofSafety.e1YearsGreaterThan21 = parseInt(document.getElementById('e1YearsGreaterThan21').value);
		placeofSafety.e1Total = parseInt(document.getElementById('e1Total').value);

		placeofSafety.fTotal = parseInt(document.getElementById('fTotal').value);

		placeofSafety.g1Total = parseInt(document.getElementById('g1Total').value);
		placeofSafety.g2Total = parseInt(document.getElementById('g2Total').value);
		placeofSafety.g3Total = parseInt(document.getElementById('g3Total').value);
		placeofSafety.g4Total = parseInt(document.getElementById('g4Total').value);
		placeofSafety.g5Years16to18 = parseInt(document.getElementById('g5Years16to18').value);
		placeofSafety.g5Years18to21 = parseInt(document.getElementById('g5Years18to21').value);
		placeofSafety.g5YearsGreaterThan21 = parseInt(document.getElementById('g5YearsGreaterThan21').value);
		placeofSafety.g5Total = parseInt(document.getElementById('g5Total').value);

		placeofSafety.h1Total = parseInt(document.getElementById('h1Total').value);
		placeofSafety.h2Total = parseInt(document.getElementById('h2Total').value);
		placeofSafety.h3Total = parseInt(document.getElementById('h3Total').value);
		placeofSafety.h4Total = parseInt(document.getElementById('h4Total').value);
		placeofSafety.h5Years16to18 = parseInt(document.getElementById('h5Years16to18').value);
		placeofSafety.h5Years18to21 = parseInt(document.getElementById('h5Years18to21').value);
		placeofSafety.h5YearsGreaterThan21 = parseInt(document.getElementById('h5YearsGreaterThan21').value);
		placeofSafety.h5Total = parseInt(document.getElementById('h5Total').value);

		placeofSafety.iPettyTotal = parseInt(document.getElementById('iPettyTotal').value);
		placeofSafety.iSeriousTotal = parseInt(document.getElementById('iSeriousTotal').value);
		placeofSafety.iHeinousTotal = parseInt(document.getElementById('iHeinousTotal').value);
		placeofSafety.iTotalLessThan3m = parseInt(document.getElementById('iTotalLessThan3m').value);
		placeofSafety.iTotal3to6m = parseInt(document.getElementById('iTotal3to6m').value);
		placeofSafety.iTotal6to12m = parseInt(document.getElementById('iTotal6to12m').value);
		placeofSafety.iTotalGreaterThan12m = parseInt(document.getElementById('iTotalGreaterThan12m').value);
		placeofSafety.iTotal = parseInt(document.getElementById('iTotal').value);
		
		placeofSafety.j4LessThan3m = parseInt(document.getElementById('j4LessThan3m').value);
		placeofSafety.j4_3to6m = parseInt(document.getElementById('j4_3to6m').value);
		placeofSafety.j4_6to12m = parseInt(document.getElementById('j4_6to12m').value);
		placeofSafety.j4GreaterThan12m = parseInt(document.getElementById('j4GreaterThan12m').value);
		placeofSafety.j1Total = parseInt(document.getElementById('j1Total').value);
		placeofSafety.j2Total = parseInt(document.getElementById('j2Total').value);
		placeofSafety.j3Total = parseInt(document.getElementById('j3Total').value);
		placeofSafety.j4Total = parseInt(document.getElementById('j4Total').value);
		
		placeofSafety.userId = Number(document.getElementById("uId").value);
		if ($scope.selectedDistrict != undefined)
			placeofSafety.districtId = $scope.selectedDistrict.areaId;
		if ($scope.selectedOsType != undefined)
			placeofSafety.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if ($scope.selectedChildSex != undefined)
			placeofSafety.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;

		placeofSafety.nameOfCCI =  $scope.cciNameList.cciName;
		placeofSafety.cciPlaceOfSafetyTrainings = $scope.posTrainingDetailsRepetitionArray;
		// show spinner here
		// starts
		if(clickType == 'save'){
				$http.post('saveCciPlaceOfSafety', placeofSafety).
				then(function(result){
					if(result.status == 200){
						$(".loader").fadeOut();
						$scope.success_msg = commonService.messages.save_success_msg;
						$('#confirmationModalForPOCSAVE').modal('show');
					}
				},function(error){
					$(".loader").fadeOut();
					commonService.errSaveHttpFunction(error);
					console.log(error);
				});	
		}else if(clickType=='submit' && submitted == false){
			$(".loader").fadeOut();
			if(!$scope.placeofSafety.cciPlaceOfSafetyTrainings.length<1){
				for(var i=0;i<$scope.placeofSafety.cciPlaceOfSafetyTrainings.length;i++){
					if (!accordionValidation($scope.placeofSafety.cciPlaceOfSafetyTrainings[i])) {
						var sum=i+1;
						$scope.messageField1=commonService.messages.add_all_specific_training_details+sum;
						$scope.messageField2="";
						$scope.alertMessage = "";
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						$('html,body').animate({
							scrollTop: $('#accordion').offset().top - 250},'slow');
						
						return false;
					}
				}
			}
			
			if (!accordionValidation($scope.placeofSafety.cciPlaceOfSafetyTrainings[$scope.placeofSafety.cciPlaceOfSafetyTrainings.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop: $('#accordion').offset().top - 250},'slow');
			}else{
				$('#confirmationModalForPOCSUBMIT').modal('show');
			}	
			if(allNegetiveTest() ==false){
	 			return false;
	 		 }
		}
		if(submitConfirm=='ok'){
			$http.post('submitCciPlaceOfSafety', placeofSafety).
			then(function(result){
				if(result.status == 200){
					$scope.success_msg = commonService.messages.submit_success_msg+placeofSafety.timeperiod.timePeriod;
					$('#confirmationModalForPOCSAVE').modal('show');
				}
			},function(error){
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		};
	};
	
	$scope.autoSavePos = function(placeofSafety, clickType) {
		placeofSafety.typeOfHome=document.getElementById("typeOfHomeId").value;
		
		placeofSafety.aTotal = parseInt(document.getElementById('aTotal').value)==0?null:parseInt(document.getElementById('aTotal').value);
		placeofSafety.b1Total = parseInt(document.getElementById('b1Total').value);
		placeofSafety.b2Total = parseInt(document.getElementById('b2Total').value);
		placeofSafety.b3Years16to18 = parseInt(document.getElementById('b3Years16to18').value);
		placeofSafety.b3Years18to21 = parseInt(document.getElementById('b3Years18to21').value);
		placeofSafety.b3YearsGreaterThan21 = parseInt(document.getElementById('b3YearsGreaterThan21').value);
		placeofSafety.b3Total = parseInt(document.getElementById('b3Total').value);

		placeofSafety.c2Years16to18 = parseInt(document.getElementById('c2Years16to18').value);
		placeofSafety.c2Years18to21 = parseInt(document.getElementById('c2Years18to21').value);
		placeofSafety.c2YearsGreaterThan21 = parseInt(document.getElementById('c2YearsGreaterThan21').value);
		placeofSafety.c2Total = parseInt(document.getElementById('c2Total').value);

		placeofSafety.d1Total = parseInt(document.getElementById('d1Total').value);
		placeofSafety.d2Total = parseInt(document.getElementById('d2Total').value);
		placeofSafety.d3Total = parseInt(document.getElementById('d3Total').value);
		placeofSafety.d4Total = parseInt(document.getElementById('d4Total').value);
		placeofSafety.d5Total = parseInt(document.getElementById('d5Total').value);
		placeofSafety.d6Total = parseInt(document.getElementById('d6Total').value);
		placeofSafety.d7Total = parseInt(document.getElementById('d7Total').value);
		placeofSafety.d8Total = parseInt(document.getElementById('d8Total').value);
		placeofSafety.d9aTotal = parseInt(document.getElementById('d9aTotal').value);

		placeofSafety.d10Years16to18 = parseInt(document.getElementById('d10Years16to18').value);
		placeofSafety.d10Years18to21 = parseInt(document.getElementById('d10Years18to21').value);
		placeofSafety.d10YearsGreaterThan21 = parseInt(document.getElementById('d10YearsGreaterThan21').value);
		placeofSafety.d10Total = parseInt(document.getElementById('d10Total').value);

		placeofSafety.e1Years16to18 = parseInt(document.getElementById('e1Years16to18').value);
		placeofSafety.e1Years18to21 = parseInt(document.getElementById('e1Years18to21').value);
		placeofSafety.e1YearsGreaterThan21 = parseInt(document.getElementById('e1YearsGreaterThan21').value);
		placeofSafety.e1Total = parseInt(document.getElementById('e1Total').value);

		placeofSafety.fTotal = parseInt(document.getElementById('fTotal').value);

		placeofSafety.g1Total = parseInt(document.getElementById('g1Total').value);
		placeofSafety.g2Total = parseInt(document.getElementById('g2Total').value);
		placeofSafety.g3Total = parseInt(document.getElementById('g3Total').value);
		placeofSafety.g4Total = parseInt(document.getElementById('g4Total').value);
		placeofSafety.g5Years16to18 = parseInt(document.getElementById('g5Years16to18').value);
		placeofSafety.g5Years18to21 = parseInt(document.getElementById('g5Years18to21').value);
		placeofSafety.g5YearsGreaterThan21 = parseInt(document.getElementById('g5YearsGreaterThan21').value);
		placeofSafety.g5Total = parseInt(document.getElementById('g5Total').value);

		placeofSafety.h1Total = parseInt(document.getElementById('h1Total').value);
		placeofSafety.h2Total = parseInt(document.getElementById('h2Total').value);
		placeofSafety.h3Total = parseInt(document.getElementById('h3Total').value);
		placeofSafety.h4Total = parseInt(document.getElementById('h4Total').value);
		placeofSafety.h5Years16to18 = parseInt(document.getElementById('h5Years16to18').value);
		placeofSafety.h5Years18to21 = parseInt(document.getElementById('h5Years18to21').value);
		placeofSafety.h5YearsGreaterThan21 = parseInt(document.getElementById('h5YearsGreaterThan21').value);
		placeofSafety.h5Total = parseInt(document.getElementById('h5Total').value);

		placeofSafety.iPettyTotal = parseInt(document.getElementById('iPettyTotal').value);
		placeofSafety.iSeriousTotal = parseInt(document.getElementById('iSeriousTotal').value);
		placeofSafety.iHeinousTotal = parseInt(document.getElementById('iHeinousTotal').value);
		placeofSafety.iTotalLessThan3m = parseInt(document.getElementById('iTotalLessThan3m').value);
		placeofSafety.iTotal3to6m = parseInt(document.getElementById('iTotal3to6m').value);
		placeofSafety.iTotal6to12m = parseInt(document.getElementById('iTotal6to12m').value);
		placeofSafety.iTotalGreaterThan12m = parseInt(document.getElementById('iTotalGreaterThan12m').value);
		placeofSafety.iTotal = parseInt(document.getElementById('iTotal').value);
		
		placeofSafety.j4LessThan3m = parseInt(document.getElementById('j4LessThan3m').value);
		placeofSafety.j4_3to6m = parseInt(document.getElementById('j4_3to6m').value);
		placeofSafety.j4_6to12m = parseInt(document.getElementById('j4_6to12m').value);
		placeofSafety.j4GreaterThan12m = parseInt(document.getElementById('j4GreaterThan12m').value);
		placeofSafety.j1Total = parseInt(document.getElementById('j1Total').value);
		placeofSafety.j2Total = parseInt(document.getElementById('j2Total').value);
		placeofSafety.j3Total = parseInt(document.getElementById('j3Total').value);
		placeofSafety.j4Total = parseInt(document.getElementById('j4Total').value);
		
		placeofSafety.userId = Number(document.getElementById("uId").value);
		if ($scope.selectedDistrict != undefined)
			placeofSafety.districtId = $scope.selectedDistrict.areaId;
		if ($scope.selectedOsType != undefined)
			placeofSafety.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if ($scope.selectedChildSex != undefined)
			placeofSafety.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;

		placeofSafety.nameOfCCI =  $scope.cciNameList.cciName;
		placeofSafety.cciPlaceOfSafetyTrainings = $scope.posTrainingDetailsRepetitionArray;
		// show spinner here
		// starts
		if(clickType == 'save'){
				$http.post('autoSaveCciPlaceOfSafety', placeofSafety).
				then(function(result){
					if(result.status == 200){
						$(".loader").fadeOut();
						$('#successModalForAutoSavePOS').modal('show');
					}
				},function(error){
					commonService.checkSessionOut(error);
					console.log(error);
				});
//			}	
		}
	};
		
	// getting refresh on saving

	$scope.refreshPage = function() {
		$window.location.reload();
	};

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
	    	if($scope.counterSeconds==300 && !$('#confirmationModalForPOCSAVE').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#confirmationModalForPOCSAVE').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSavePos($scope.placeofSafety, 'save');
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
	$http.post("getLastSavedCciPlaceOfSafetyData", currentUserId).then(function(result) {

		if (result.data != "")
			$scope.placeofSafety = result.data;
		if(!$scope.placeofSafety.submitted)
			$scope.timerForSave($scope,$timeout);
		if ($scope.placeofSafety.submitted) {
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage =commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		todaysDate = new Date($scope.placeofSafety.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
	    
	    $("#datepicker").datepicker({
	    	dateFormat : "dd-mm-yy",
	    	maxDate : lastDay,
	    	minDate : firstDay,
	    	onSelect : function(date) {
	    		$scope.placeofSafety.monthyear = date;
	    	}
	    });
	    $("#meetingdatepicker").datepicker({
	    	dateFormat : "dd-mm-yy",
	    	maxDate : lastDay,
	    	minDate : firstDay,
	    });
	    $("#homeManagementdatepicker").datepicker({
	    	dateFormat : "dd-mm-yy",
	    	maxDate : lastDay,
	    	minDate : firstDay,
	    });
	    $("#Othermeetingdatepicker").datepicker({
	    	dateFormat : "dd-mm-yy",
	    	maxDate : lastDay,
	    	minDate : firstDay,
	    });
	    
		$timeout(function() {
			$(".accordionFromDatepicker").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDay,
				minDate : firstDay,
				onSelect: function(date){
					if(this.id.startsWith("trainingFromDatepicker")){
						if($scope.posTrainingDetailsRepetitionArray[0].trainingToDate != null && $scope.posTrainingDetailsRepetitionArray[0].trainingToDate != undefined){
							var fromDay = new Date(dateConvert(date));
							var toDay = new Date(dateConvert($scope.posTrainingDetailsRepetitionArray[0].trainingToDate));
							if(toDay < fromDay){
								var index = this.id.split('trainingFromDatepicker')[1];
								$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
								$scope.messageField2="";
								$scope.alertMessage = "";
				            	$scope.$apply();
				    			$('#ErrAlertModal').modal('show');
				    			$("#trainingToDatepicker"+index).val(null);
				    			$scope.posTrainingDetailsRepetitionArray[index].trainingToDate = null;
				            }
						}
						$scope.posTrainingDetailsRepetitionArray[0].trainingFromDate = date;
		            }else if(this.id.startsWith("trainingToDatepicker")){
		            	checkDate(date, 0);
		            }
		        },
			});
			
			$scope.placeofSafety.nameOfCCI = $scope.cciNameList.cciName;
			for (var i = 0; i < $scope.childSex.length; i++) {
				if ($scope.placeofSafety.typeOfInstitutions == $scope.childSex[i].typeDetailsId)
					$scope.selectedChildSex = $scope.childSex[i];
			}
			for (var i = 0; i < $scope.osType.length; i++) {
				if ($scope.placeofSafety.govtNonGovt == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType = $scope.osType[i];
			}

			if ($scope.placeofSafety.cciPlaceOfSafetyTrainings != null || $scope.placeofSafety.cciPlaceOfSafetyTrainings != undefined)
				$scope.posTrainingDetailsRepetitionArray = $scope.placeofSafety.cciPlaceOfSafetyTrainings;

			if ($scope.placeofSafety.cciPlaceOfSafetyTrainings != undefined) {
				for (var i = 0; i < $scope.placeofSafety.cciPlaceOfSafetyTrainings.length; i++) {
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

				}
			}
		}, 500);
		$timeout(function() {
			$scope.placeofSafety.k1aNoTrainingHeld = $scope.posTrainingDetailsRepetitionArray.length;
			$scope.placeofSafety.k1TrainingJJSystem = $scope.placeofSafety.k1TrainingJJSystem == null ? null : $scope.placeofSafety.k1TrainingJJSystem.toString();
			$scope.placeofSafety.k16aMeetingChildrenCommitte = $scope.placeofSafety.k16aMeetingChildrenCommitte == null ? null : $scope.placeofSafety.k16aMeetingChildrenCommitte.toString();
			$scope.placeofSafety.k17aMeetingHomeManagementCommitte = $scope.placeofSafety.k17aMeetingHomeManagementCommitte == null ? null : $scope.placeofSafety.k17aMeetingHomeManagementCommitte.toString();
			$scope.placeofSafety.k18aAnyOtherDetails = $scope.placeofSafety.k18aAnyOtherDetails == null ? null : $scope.placeofSafety.k18aAnyOtherDetails.toString();

			$(".loader").fadeOut();
		}, 500);
	}, function(error) {
		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});

	$scope.resetAccOthers = function(model, id){
		if(id=='tobOthers'){
			model.tobOthersSpecify = model.tobOthers?model.tobOthersSpecify:null;
		}else if(id=='totOthers'){
			model.totOthersSpecify = model.totOthers?model.totOthersSpecify:null;
		}
	};
	
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
		$scope.posTrainingDetailsRepetitionArray[index].trainingToDate = date;
		if($scope.posTrainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.posTrainingDetailsRepetitionArray[index].trainingFromDate != undefined){
			var fromDay = new Date(dateConvert($scope.posTrainingDetailsRepetitionArray[index].trainingFromDate));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
				$scope.messageField2="";
				$scope.alertMessage = "";
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.posTrainingDetailsRepetitionArray[index].trainingToDate = null;
            }
		}else{
			$scope.messageField1=commonService.messages.select_training_from;
			$scope.messageField2="";
			$scope.alertMessage = "";
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.posTrainingDetailsRepetitionArray[index].trainingToDate = null;
		}
	};
	// the following function is for initialization and setting the dates in
	// date pickers.Pratyush
	$scope.initializeDatePicker = function(index) {
		$("#trainingFromDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if($scope.posTrainingDetailsRepetitionArray[index].trainingToDate != null && $scope.posTrainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.posTrainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
						$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
						$scope.messageField2="";
						$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.posTrainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.posTrainingDetailsRepetitionArray[index].trainingFromDate = date;
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

	/* Accordian add new Functions(sswayamprava.sdrc.co.in) */

	$scope.posTrainingDetailsObject = {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		tobHighCourt : null,
		tobBySLSA : null,
		tobStateGovt : null,
		tobOthers : null,
		tobOthersSpecify : null,
		totJJAct : null,
		totPOCSOAct : null,
		totChildRelatedLawsICPS : null,
		totCombinedTraining : null,
		totCPMIS : null,
		totTrackChild : null,
		totCLTS : null,
		totOthers : null,
		totOthersSpecify : null,
		tabCwcMember : null,
		tabJjbStaff : null,
		tabDcpuStaff : null,
		tabSjpuStaff : null,
		tabCciStaff : null,
		tabStaffOfChildrenCourt : null,
		tabOthers : null,
		tabOthersSpecify : null,
		posId : null
	};
	$scope.posTrainingDetailsRepetitionArray = [ {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		tobHighCourt : null,
		tobBySLSA : null,
		tobStateGovt : null,
		tobOthers : null,
		tobOthersSpecify : null,
		totJJAct : null,
		totPOCSOAct : null,
		totChildRelatedLawsICPS : null,
		totCombinedTraining : null,
		totCPMIS : null,
		totTrackChild : null,
		totCLTS : null,
		totOthers : null,
		totOthersSpecify : null,
		tabCwcMember : null,
		tabJjbStaff : null,
		tabDcpuStaff : null,
		tabSjpuStaff : null,
		tabCciStaff : null,
		tabStaffOfChildrenCourt : null,
		tabOthers : null,
		tabOthersSpecify : null,
		posId : null
	} ];

	var topicOfTrainingValidation = function(training){
		if(training.totJJAct != true &&
				training.totPOCSOAct != true &&
				training.totChildRelatedLawsICPS != true &&
				training.totCombinedTraining != true &&
				training.totCPMIS != true &&
				training.totTrackChild != true &&
				training.totCLTS != true &&
				training.totOthers != true){
			return false;
		}else if(training.totOthers == true && (training.totOthersSpecify == null || training.totOthersSpecify.trim()=="")){
			return false;
		}else{
			return true;
		}
	};
	var trainingOrganisedBy = function(training){
		if(training.tobHighCourt != true &&
				training.tobBySLSA != true &&
				training.tobStateGovt != true &&
				training.tobOthers != true){
			return false;
		}else if(training.tobOthers == true && (training.tobOthersSpecify == null || training.tobOthersSpecify.trim()=="")){
			return false;
		}else{
			return true;
		}
	};
	var accordionValidation = function(training){
		if($scope.placeofSafety.k1TrainingJJSystem == 'true'){
			if((training.durationTraining == null ||
					training.trainingFromDate == null ||
					training.trainingToDate == null ||
					training.tabCwcMember == null ||
					training.tabJjbStaff == null ||
					training.tabDcpuStaff == null ||
					training.tabSjpuStaff == null ||
					training.tabCciStaff == null ||
					training.tabStaffOfChildrenCourt == null ||
					training.tabOthers == null)){
				return false;
			}else if(training.tabOthers > 0 && (training.tabOthersSpecify == null || training.tabOthersSpecify.trim()=="")){
				return false;
			}else if(!topicOfTrainingValidation(training)){
				return false;
			}else if(!trainingOrganisedBy(training)){
				return false;
			}else{
				return true;
			}
		}else{
			return true;
		}
	};
	
	$scope.addNewDetails = function() {
		if($scope.validateNoOfTraining($scope.placeofSafety.k1aNoTrainingHeld)){
			if (!accordionValidation($scope.posTrainingDetailsRepetitionArray[$scope.posTrainingDetailsRepetitionArray.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.placeofSafety.k1aNoTrainingHeld!=undefined && $scope.placeofSafety.k1aNoTrainingHeld <= 10){
					if ($scope.posTrainingDetailsRepetitionArray.length < $scope.placeofSafety.k1aNoTrainingHeld) {
						$scope.posTrainingDetailsRepetitionArray[($scope.posTrainingDetailsRepetitionArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.posTrainingDetailsObject));
					} else {
						document.getElementById('maximumLimit10Error').innerHTML = "You can add maximum <b>" + $scope.placeofSafety.k1aNoTrainingHeld + "</b> training details";
					}
					$timeout(function() {
						document.getElementById('maximumLimit10Error').innerHTML = "";
					}, 2000);
				}
			}
		}
	};
	$scope.deleteConfirm = function() {
		document.getElementById("j1aNoTrainingHeld").blur();
		if ($scope.posTrainingDetailsRepetitionArray.length > 1 && $scope.placeofSafety.k1aNoTrainingHeld >= $scope.posTrainingDetailsRepetitionArray.length
				&& $scope.placeofSafety.k1aNoTrainingHeld!=undefined && $scope.placeofSafety.k1aNoTrainingHeld <= 10) {
			$('#deleteAccordion').modal('show');
		}
	};

	$scope.deleteNewDetails = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
		if ($scope.posTrainingDetailsRepetitionArray.length > 1) {
			$scope.posTrainingDetailsRepetitionArray.pop();
		}
	};

	// Function for set date for from and to dates dynamically respectively.

	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.trainingDetailsRepetitionArray[id].trainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.trainingDetailsRepetitionArray[id].trainingToDate = date;
			}
		});
	};

	$scope.validateNoOfTraining = function(val) {
		if (val == 0 || val == null) {
			$scope.alertMessage = "Number of trainings held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.placeofSafety.k1aNoTrainingHeld = $scope.posTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val > 10) {
			$scope.alertMessage = "Number of trainings held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.placeofSafety.k1aNoTrainingHeld = $scope.posTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val < $scope.posTrainingDetailsRepetitionArray.length) {
			$scope.alertMessage = "Number of trainings held value should not be less than the number of trainings you added.";
			$('#alertModal').modal('show');
			$scope.placeofSafety.k1aNoTrainingHeld = $scope.posTrainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	$scope.clearMsg = function() {
		$scope.alertMessage =undefined;
		$scope.messageField1=undefined;
		$scope.messageField2=undefined;
	};

	$scope.resetToZeroaccdpos = function(value) {
		if (value == 'false') {
			$scope.posTrainingDetailsRepetitionArray = [ {
				trainingId : null,
				durationTraining : null,
				trainingFromDate : null,
				trainingToDate : null,
				tobHighCourt : null,
				tobBySLSA : null,
				tobStateGovt : null,
				tobOthers : null,
				tobOthersSpecify : null,
				totJJAct : null,
				totPOCSOAct : null,
				totChildRelatedLawsICPS : null,
				totCombinedTraining : null,
				totCPMIS : null,
				totTrackChild : null,
				totCLTS : null,
				totOthers : null,
				totOthersSpecify : null,
				tabCwcMember : null,
				tabJjbStaff : null,
				tabDcpuStaff : null,
				tabSjpuStaff : null,
				tabCciStaff : null,
				tabStaffOfChildrenCourt : null,
				tabOthers : null,
				tabOthersSpecify : null,
				posId : null
			} ];
		}
		$scope.placeofSafety.k1aNoTrainingHeld = $scope.posTrainingDetailsRepetitionArray.length;
	};
	// the following function is for resetting the date field on No select
	$scope.resetDate = function(datepickerId) {
		$('#' + datepickerId).datepicker("setDate", null);
		if (datepickerId == 'meetingdatepicker')
			$scope.placeofSafety.k16bDate = null;
		else if (datepickerId == 'homeManagementdatepicker')
			$scope.placeofSafety.k17bDate = null;
		else if (datepickerId == 'Othermeetingdatepicker')
			$scope.placeofSafety.k18bDate = null;
	};
});
// type number will not accept exponential(e)
$(".removeExponentialValueE").keypress(function(event) {
	if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
		return false;
	}
});