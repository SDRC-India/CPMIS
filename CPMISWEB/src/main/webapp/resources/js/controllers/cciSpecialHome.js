cpmisApp.controller('CCIController', function($scope, $http, $timeout, $window, commonService) {

	$scope.cciForm = {};
	$scope.parseInt = parseInt;
	var currentUserId = Number(document.getElementById("uId").value);

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
	$http.get("getDropdownItems").then(function(result) {
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
		$scope.topicOfTraining = result.data.topicOfTraining;
		$scope.trainingAttendedBy = result.data.trainingAttendedBy;
		$scope.childSex = result.data.childSex;
		$scope.osType = result.data.osType;

	}, function(error) {
		console.log(error);
	});

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

	$("#meetingDatepicker1").on("click", function(){
		$("#meetingDatepicker").focus();
	});
	
	$("#homeManagementDatepicker1").on("click", function(){
		$("#homeManagementDatepicker").focus();
	});
	$("#otherMeetingDatepicker1").on("click", function(){
		$("#otherMeetingDatepicker").focus();
	});
	
	$scope.messageField1="";
	$scope.messageField2="";
	$scope.testCapacity=function(id){
		var value=Number(document.getElementById(id).value-0);
		if(value>500){
			$scope.cciForm[id] = null;
			document.getElementById(id).blur();
			$('#ErrAlertModal').modal('show');
			$scope.messageField1="Capacity can not be more than 500";
			$scope.messageField2="";
			$scope.alertMessage = "";
		}
	};
	$scope.validateNoOfTraining = function(val){
		if(val == 0 || val == null){
			$scope.alertMessage = "Number of Trainings Held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.cciForm.l1aNoOfTraining = $scope.cciTrainingDetailsRepetitionArray.length;
			return false;
		}else if(val > 10){
			$scope.alertMessage = "Number of Trainings Held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.cciForm.l1aNoOfTraining = $scope.cciTrainingDetailsRepetitionArray.length;
			return false;
		}else if(val < $scope.cciTrainingDetailsRepetitionArray.length){
			$scope.alertMessage = "Number of Trainings Held value should not be less than the number of trainings you added.";
			$('#alertModal').modal('show');
			$scope.cciForm.l1aNoOfTraining = $scope.cciTrainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	// save and submit function starts
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

	$scope.checkD = function() {
		var bgc = document.getElementById('d10Total');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("d10Total").value - 0);
		$scope.messageField1="D.10.Total no. of children referred";
		$scope.messageField2="C.1.Total children in the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkF = function() {
		var bgc = document.getElementById('fTotal');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("fTotal").value - 0);
		$scope.messageField1="F.1. No. of Children";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};
	$scope.checkFMinority = function() {
		var bgc = document.getElementById('fMinority');
		var firstInput = Number(document.getElementById("fTotal").value - 0);
		var secondInput = Number(document.getElementById("fMinority").value - 0);
		$scope.messageField1="Total Number of minority children";
		$scope.messageField2="F.1.No. of Children";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkG = function() {
		var bgc = document.getElementById('g5Total');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("g5Total").value - 0);
		$scope.messageField1="G.5. Total no. of children attending any educational programme";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkH5 = function() {
		var bgc = document.getElementById('h5Total');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("h5Total").value - 0);
		$scope.messageField1="H.5. Total Children";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkI5 = function() {
		var bgc = document.getElementById('iTotalNumberTotal');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("iTotalNumberTotal").value - 0);
		$scope.messageField1="I.4.Total";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkJ1 = function() {
		var bgc = document.getElementById('j1Total');
		var firstInput = Number(document.getElementById('aTotal').value - 0);
		var secondInput = Number(document.getElementById("j1Total").value - 0);
		$scope.messageField1="J.1. Children on the First day of the month";
		$scope.messageField2="A.1. Age distribution of Children on the first day of the reporting month";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};

	$scope.checkJ2 = function() {
		var bgc = document.getElementById('j2Total');
		var firstInput = Number(document.getElementById("b3Total").value - 0);
		var secondInput = Number(document.getElementById("j2Total").value - 0);
		$scope.messageField1="J.2. New Children Admitted in the Month";
		$scope.messageField2="B.3. Total No. of Children Referred";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkJ3 = function() {
		var bgc = document.getElementById('j3Total');
		var firstInput = Number(document.getElementById("d10Total").value - 0);
		var secondInput = Number(document.getElementById("j3Total").value - 0);
		$scope.messageField1="J.3. Children moved out in the month";
		$scope.messageField2="D.10. Total no. of children referred";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkJ4 = function() {
		var bgc = document.getElementById('j4TotalNumberTotal');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("j4TotalNumberTotal").value - 0);
		$scope.messageField1="J.4. Total children on the Last day of the month";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value should be equal to";
		return commonFunctionBodyEqualTo(firstInput, secondInput, bgc);
	};

	$scope.checkK1 = function() {
		var bgc = document.getElementById('k1');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("k1").value - 0);
		$scope.messageField1="K.1. No. of children with single parent";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK2 = function() {
		var bgc = document.getElementById('k2');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("k2").value - 0);
		$scope.messageField1="K.2. No. of children without parental care/without adult support";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK3 = function() {
		var bgc = document.getElementById('k3');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("k3").value - 0);
		$scope.messageField1="K3. No. of children referred to Hospital/PHC/Clinics";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK4 = function() {
		var bgc = document.getElementById('k4');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("k4").value - 0);
		$scope.messageField1="K.4. No. of children transferred to home within the state";
		$scope.messageField2="C.1. Total children in the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK5 = function() {
		var bgc = document.getElementById('k5');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("k5").value - 0);
		$scope.messageField1="K.5. No. of children transferred to home outside the state";
		$scope.messageField2="C.1. Total children in the month by age";
		$scope.alertMessage = "value can not exceed ";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK6 = function() {
		var bgc = document.getElementById('k6');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("k6").value - 0);
		$scope.messageField1="K.6. No. of children transferred to Jail";
		$scope.messageField2="C.1. Total children in the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK9 = function() {
		var bgc = document.getElementById('k9');
		var firstInput = Number(document.getElementById("e1Total").value - 0);
		var secondInput = Number(document.getElementById("k9").value - 0);
		$scope.messageField1="K.9. No. of children referred for Psychiatric treatment";
		$scope.messageField2="E.1. Total children on the last day the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkK10 = function() {
		var bgc = document.getElementById('k10');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("k10").value - 0);
		$scope.messageField1="K.10. No. of children sent for After care";
		$scope.messageField2="C.1. Total children in the month by age";
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
		$scope.messageField2="E.1. Total children on the last day the month by age( value= "+firstInput+")";
		$scope.alertMessage = "value should be equal to ";
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

	$scope.checkK13 = function() {
		var bgc = document.getElementById('k13');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("k13").value - 0);
		$scope.messageField1="K.13. No. of entries on Track Child Portal";
		$scope.messageField2="C.1. Total children in the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};

	$scope.checkK15 = function() {
		var bgc = document.getElementById('k15');
		var firstInput = Number(document.getElementById("cTotal").value - 0);
		var secondInput = Number(document.getElementById("k15").value - 0);
		$scope.messageField1="K.15. No. of children sent for Sponsorship";
		$scope.messageField2="C.1. Total children in the month by age";
		$scope.alertMessage = "value can not exceed";
		return commonFunctionBody(firstInput, secondInput, bgc);
	};
	$scope.checkJNegetive=function(currentId,targetId,msg){
		var bgc = document.getElementById(currentId);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;	
		$scope.messageField1="Sum of J.1. Children on the First day of the month and J.2. New Children Admitted in the Month"+msg;
		$scope.messageField2="J.3. Children moved out in the month"+msg;
		$scope.alertMessage = "value can not be less than";		
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			$scope.cciForm[currentId] = null;
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
		$scope.messageField1="Sum of J.1. Children on the First day of the month and J.2. New Children Admitted in the Month"+msg;
		$scope.messageField2="J.3. Children moved out in the month"+msg;
		$scope.alertMessage = "value can not be less than";		
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			bgc1.value=null;
			$scope.cciForm[currentId] = null;
			$scope.cciForm[j3Id] = null;
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
		 checkD();checkF();checkFMinority();checkG();checkH5();checkI5();checkJ1();checkJ2();checkJ3();checkJ4();removeCheckK11n12();
		 removeNegetiveColor();
	});

	// save and submit function
	$scope.checkSave = function() {
			$scope.saveOH($scope.cciForm, 'save');
	};

	$scope.checkSubmit = function() {
		if (!$scope.checkD()) {
		} else if (!$scope.checkF()) {
		} else if (!$scope.checkFMinority()) {
		} else if (!$scope.checkG()) {
		} else if (!$scope.checkH5()) {
		} else if (!$scope.checkI5()) {
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
		} else if(($scope.cciForm.k16aMeetingChildrenCommittee == 'true') && ($scope.cciForm.k16CCDate == null || $scope.cciForm.k16CCDate == undefined)){
			document.getElementById("meetingDatepicker").focus();
		} else if(($scope.cciForm.k17aMeetingHomeManagementCommittee == 'true')&& ($scope.cciForm.k17HMDate == null || $scope.cciForm.k17HMDate == undefined)){
			document.getElementById("homeManagementDatepicker").focus();
		} else if(($scope.cciForm.k18aAnyOthersDetails == 'true')&& ($scope.cciForm.k18OtherDetailsDate == null || $scope.cciForm.k18OtherDetailsDate == undefined)){
			document.getElementById("otherMeetingDatepicker").focus();
		}else {
			$scope.saveOH($scope.cciForm, 'submit');
		}

	};
	// save and submit functions ends

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
				
				$scope.cciForm[thisId] = valObj.oldVal;
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
	angular.forEach($scope.cciForm, function(value, index) {
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
	$scope.calculateWithC = function(id, modelId, yearRange) {
		var sum = modelValue = 0;

		if (yearRange == '7-11') {
			sum = document.getElementById('d10Years7to11').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(7-11)years";
			$scope.messageField2="C.1.Total children in the month by age(7-11)years";
			$scope.alertMessage = "value can not exceed";
			if (modelId == 'd9aYears7to11' && document.getElementById('d9aTotal').value < 1)
				$scope.cciForm.d9Others = null;
		} else if (yearRange == '12-15') {
			sum = document.getElementById('d10Years12to15').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(12-15)years";
			$scope.messageField2="C.1.Total children in the month by age(12-15)years";
			$scope.alertMessage = "value can not exceed";
			if (modelId == 'd9aYears12to15' && document.getElementById('d9aTotal').value < 1)
				$scope.cciForm.d9Others = null;
		} else if (yearRange == '16-18') {
			sum = document.getElementById('d10Years16to18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(16-18)years";
			$scope.messageField2="C.1.Total children in the month by age(16-18)years";
			$scope.alertMessage = "value can not exceed";
			if (modelId == 'd9aYears16to18' && document.getElementById('d9aTotal').value < 1)
				$scope.cciForm.d9Others = null;
		} else if (yearRange == '>18') {
			sum = document.getElementById('d10YearsGreaterThan18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.10.Total no. of children referred(>18)years";
			$scope.messageField2="C.1.Total children in the month by age(>18)years";
			$scope.alertMessage = "value can not exceed";
			if (modelId == 'd9aYearsGreaterThan18' && document.getElementById('d9aTotal').value < 1)
				$scope.cciForm.d9Others = null;
		}

		if (Number(sum) > Number(modelValue)) {
			$scope.cciForm[modelId] = null;
			$('#ErrAlertModal').modal('show');
		}
	};

	$scope.Number = Number;

	$scope.clearTopicOfTrainingOthers = function(model) {
    	model.totOthersSpecify = null;
    };
    $scope.resetTABOthers = function(value) {
    	if ($scope.cciTrainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.cciTrainingDetailsRepetitionArray[value].tabOthers == null) {
        	$scope.cciTrainingDetailsRepetitionArray[value].tabOthersSpecify = null;
      }
    };
	
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
	var prepareObj = function(cciForm){
		cciForm.typeOfHome=document.getElementById("typeOfHomeId").value;
		cciForm.aTotal = Number(document.getElementById('aTotal').value)==0?null:Number(document.getElementById('aTotal').value);
		cciForm.b1Total = Number(document.getElementById('b1Total').value);
		cciForm.b2Total = Number(document.getElementById('b2Total').value);

		cciForm.b3Years7to11 = Number(document.getElementById('b3Years7to11').value);
		cciForm.b3Years12to15 = Number(document.getElementById('b3Years12to15').value);
		cciForm.b3Years16to18 = Number(document.getElementById('b3Years16to18').value);
		cciForm.b3YearsGreaterThan18 = Number(document.getElementById('b3YearsGreaterThan18').value);
		cciForm.b3Total = Number(document.getElementById('b3Total').value);

		cciForm.cYears7to11 = Number(document.getElementById('cYears7to11').value);
		cciForm.cYears12to15 = Number(document.getElementById('cYears12to15').value);
		cciForm.cYears16to18 = Number(document.getElementById('cYears16to18').value);
		cciForm.cYearsGreaterThan18 = Number(document.getElementById('cYearsGreaterThan18').value);
		cciForm.cTotal = Number(document.getElementById('cTotal').value);

		cciForm.d1Total = Number(document.getElementById('d1Total').value);
		cciForm.d2Total = Number(document.getElementById('d2Total').value);
		cciForm.d3Total = Number(document.getElementById('d3Total').value);
		cciForm.d4Total = Number(document.getElementById('d4Total').value);
		cciForm.d5Total = Number(document.getElementById('d5Total').value);
		cciForm.d6Total = Number(document.getElementById('d6Total').value);
		cciForm.d7Total = Number(document.getElementById('d7Total').value);
		cciForm.d8Total = Number(document.getElementById('d8Total').value);

		cciForm.d9aTotal = Number(document.getElementById('d9aTotal').value);

		cciForm.d10Years7to11 = Number(document.getElementById('d10Years7to11').value);
		cciForm.d10Years12to15 = Number(document.getElementById('d10Years12to15').value);
		cciForm.d10Years16to18 = Number(document.getElementById('d10Years16to18').value);
		cciForm.d10YearsGreaterThan18 = Number(document.getElementById('d10YearsGreaterThan18').value);
		cciForm.d10Total = Number(document.getElementById('d10Total').value);

		cciForm.e1Years7to11 = Number(document.getElementById('e1Years7to11').value);
		cciForm.e1Years12to15 = Number(document.getElementById('e1Years12to15').value);
		cciForm.e1Years16to18 = Number(document.getElementById('e1Years16to18').value);
		cciForm.e1YearsGreaterThan18 = Number(document.getElementById('e1YearsGreaterThan18').value);
		cciForm.e1Total = Number(document.getElementById('e1Total').value);

		cciForm.fTotal = Number(document.getElementById('fTotal').value);

		cciForm.g1Total = Number(document.getElementById('g1Total').value);
		cciForm.g2Total = Number(document.getElementById('g2Total').value);
		cciForm.g3Total = Number(document.getElementById('g3Total').value);
		cciForm.g4Total = Number(document.getElementById('g4Total').value);
		cciForm.g5Years7to11 = Number(document.getElementById('g5Years7to11').value);
		cciForm.g5Years12to15 = Number(document.getElementById('g5Years12to15').value);
		cciForm.g5Years16to18 = Number(document.getElementById('g5Years16to18').value);
		cciForm.g5YearsGreaterThan18 = Number(document.getElementById('g5YearsGreaterThan18').value);
		cciForm.g5Total = Number(document.getElementById('g5Total').value);

		cciForm.h1Total = Number(document.getElementById('h1Total').value);
		cciForm.h2Total = Number(document.getElementById('h2Total').value);
		cciForm.h3Total = Number(document.getElementById('h3Total').value);
		cciForm.h4Total = Number(document.getElementById('h4Total').value);

		cciForm.h5Years7to11 = Number(document.getElementById('h5Years7to11').value);
		cciForm.h5Years12to15 = Number(document.getElementById('h5Years12to15').value);
		cciForm.h5Years16to18 = Number(document.getElementById('h5Years16to18').value);
		cciForm.h5YearsGreaterThan18 = Number(document.getElementById('h5YearsGreaterThan18').value);
		cciForm.h5Total = Number(document.getElementById('h5Total').value);

		cciForm.iPettyTotal = Number(document.getElementById('iPettyTotal').value);
		cciForm.iSeriousTotal = Number(document.getElementById('iSeriousTotal').value);
		cciForm.iHeinousTotal = Number(document.getElementById('iHeinousTotal').value);

		cciForm.iTotal0to30Days = Number(document.getElementById('iTotal0to30Days').value);
		cciForm.iTotalMonths1to2 = Number(document.getElementById('iTotalMonths1to2').value);
		cciForm.iTotalMonths2to3 = Number(document.getElementById('iTotalMonths2to3').value);
		cciForm.iTotalMonths3to4 = Number(document.getElementById('iTotalMonths3to4').value);
		cciForm.iTotalMonths4to12 = Number(document.getElementById('iTotalMonths4to12').value);
		cciForm.iTotalMonthsMoreThan1Year = Number(document.getElementById('iTotalMonthsMoreThan1Year').value);
		cciForm.iTotalNumberTotal = Number(document.getElementById('iTotalNumberTotal').value);

		cciForm.j1Total = Number(document.getElementById('j1Total').value);
		cciForm.j2Total = Number(document.getElementById('j2Total').value);
		cciForm.j3Total = Number(document.getElementById('j3Total').value);
		cciForm.j4Total0to30Days = Number(document.getElementById('j4Total0to30Days').value);
		cciForm.j4TotalMonths1to2 = Number(document.getElementById('j4TotalMonths1to2').value);
		cciForm.j4TotalMonths2to3 = Number(document.getElementById('j4TotalMonths2to3').value);
		cciForm.j4TotalMonths3to4 = Number(document.getElementById('j4TotalMonths3to4').value);
		cciForm.j4TotalMonths4to12 = Number(document.getElementById('j4TotalMonths4to12').value);
		cciForm.j4TotalMonthsMoreThan1Year = Number(document.getElementById('j4TotalMonthsMoreThan1Year').value);
		cciForm.j4TotalNumberTotal = Number(document.getElementById('j4TotalNumberTotal').value);
		for (var i = 0; i < cciForm.cciHomeTrainings.length; i++) {
			if (cciForm.cciHomeTrainings[i].trainingOrganisedBy != null || cciForm.cciHomeTrainings[i].trainingOrganisedBy != undefined)
				cciForm.cciHomeTrainings[i].trainingOrganisedBy = cciForm.cciHomeTrainings[i].trainingOrganisedBy.typeDetailsId;
		}
		cciForm.userId = Number(document.getElementById("uId").value);
	};
	var submitted = false;
	$scope.saveOH = function(cciForm, clickType, submitConfirm) {
		$(".loader").show();
		cciForm.homeType = 'SH';
		
		if ($scope.selectedDistrict != undefined)
			cciForm.districtId = $scope.selectedDistrict.areaId;
		if ($scope.selectedOsType != undefined)
			cciForm.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if ($scope.selectedChildSex != undefined)
			cciForm.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;

		cciForm.nameOfCCI = $scope.cciNameList.cciName;
		cciForm.cciHomeTrainings = $scope.cciTrainingDetailsRepetitionArray;
		// show spinner here

		if (clickType == 'save') {
				prepareObj(cciForm);
				$http.post('saveCciSpecialHome', cciForm).then(function(result) {
					if (result.status == 200) {
						$(".loader").fadeOut();
						$scope.success_msg = commonService.messages.save_success_msg;
						$('#confirmationModalForCCCI').modal('show');
					}
				}, function(error) {
					$(".loader").fadeOut();
					commonService.errSaveHttpFunction(error);
					console.log(error);
				});
//			}	
		} else if (clickType == 'submit' && submitted == false) {
			$(".loader").fadeOut();
			if(!$scope.cciForm.cciHomeTrainings.length<1){
				for(var i=0;i<$scope.cciForm.cciHomeTrainings.length;i++){
					if (!accordionValidation($scope.cciForm.cciHomeTrainings[i])) {
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
			
			if (!accordionValidation($scope.cciForm.cciHomeTrainings[$scope.cciForm.cciHomeTrainings.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop: $('#accordion').offset().top - 250},'slow');
			}else{
				$('#confirmationModalForCCISUBMIT').modal('show');
			}
			if(allNegetiveTest() ==false){
	 			return false;
	 		 }
		}
		if (submitConfirm == 'ok') {
			prepareObj(cciForm);
			$http.post('submitCciSpecialHome', cciForm).then(function(result) {
				if (result.status == 200) {
					$scope.success_msg = commonService.messages.submit_success_msg+cciForm.timeperiod.timePeriod;
					$('#confirmationModalForCCCI').modal('show');
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
	$scope.autoSaveSH = function(cciForm, clickType) {
		cciForm.homeType = 'SH';
		
		if ($scope.selectedDistrict != undefined)
			cciForm.districtId = $scope.selectedDistrict.areaId;
		if ($scope.selectedOsType != undefined)
			cciForm.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if ($scope.selectedChildSex != undefined)
			cciForm.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;

		cciForm.nameOfCCI = $scope.cciNameList.cciName;
		cciForm.cciHomeTrainings = $scope.cciTrainingDetailsRepetitionArray;
		// show spinner here

		if (clickType == 'save') {
				prepareObj(cciForm);
				$http.post('autoSaveCciSplHome', cciForm).then(function(result) {
					if (result.status == 200) {
						$(".loader").fadeOut();
						$('#successModalForAutoSaveSH').modal('show');
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
	// type number will not accept exponential(e)

	$(".removeExponentialValueE").keypress(function(event) {
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57))
			return false;
	});
	// fixed section bar

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

	var dateObj = {};

	var dateConvert = function(fetchedDate) {
		var newDate = new Date(fetchedDate).toLocaleDateString();
		dateObj = {
			date : Number(newDate.split("/")[1]),
			month : Number(newDate.split("/")[0]),
			year : Number(newDate.split("/")[2])
		};
	};
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
	    	if($scope.counterSeconds==300 && !$('#confirmationModalForCCCI').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#confirmationModalForCCCI').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSaveSH($scope.cciForm, 'save');
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
    
	$http.post("getLastSavedCciSpecialHomeData", currentUserId).then(function(result) {
		if (result.data != "")
			$scope.cciForm = result.data;
		if(!$scope.cciForm.submitted)
			$scope.timerForSave($scope,$timeout);
		if ($scope.cciForm.submitted) {
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		
		todaysDate = new Date($scope.cciForm.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
	    
		$("#datepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciForm.monthyear = date;
			}
		});

		$("#").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciForm.j1cDateTraining = date;
			}
		});

		$("#meetingDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciForm.k16CCDate = date;
			}
		});

		$("#homeManagementDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciForm.k17HMDate = date;
			}
		});

		$("#otherMeetingDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciForm.k18OtherDetailsDate = date;
			}
		});
		$timeout(function() {
			$(".accordionFromDatepicker").datepicker({
				dateFormat : "dd-mm-yy",
				maxDate : lastDay,
				minDate : firstDay,
				onSelect: function(date){
					if(this.id.startsWith("trainingFromDatepicker")){
						if($scope.cciTrainingDetailsRepetitionArray[0].trainingToDate != null && $scope.cciTrainingDetailsRepetitionArray[0].trainingToDate != undefined){
							var fromDay = new Date(dateConvert(date));
							var toDay = new Date(dateConvert($scope.cciTrainingDetailsRepetitionArray[0].trainingToDate));
							if(toDay < fromDay){
								var index = this.id.split('trainingFromDatepicker')[1];
								$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
								$scope.messageField2="";
								$scope.alertMessage = "";
				            	$scope.$apply();
				    			$('#ErrAlertModal').modal('show');
				    			$("#trainingToDatepicker"+index).val(null);
				    			$scope.cciTrainingDetailsRepetitionArray[index].trainingToDate = null;
				            }
						}
						$scope.cciTrainingDetailsRepetitionArray[0].trainingFromDate = date;
		            }else if(this.id.startsWith("trainingToDatepicker")){
		            	checkDate(date, 0);
		            }
		        },
			});
			if ($scope.cciForm.monthyear != null || $scope.cciForm.monthyear != undefined) {
				dateConvert($scope.cciForm.monthyear);
				$('#datepicker').datepicker("setDate", new Date(dateObj.year, dateObj.month - 1, dateObj.date));
			}
			if ($scope.cciForm.j1cDateTraining != null || $scope.cciForm.j1cDateTraining != undefined) {
				dateConvert($scope.cciForm.j1cDateTraining);
				$('#trainingDatepicker1').datepicker("setDate", new Date(dateObj.year, dateObj.month - 1, dateObj.date));
			}

			$scope.cciForm.nameOfCCI = $scope.cciNameList.cciName;
			if($scope.cciForm.districtId != null){
				for (var i = 1; i < $scope.district.length; i++) {
					if ($scope.cciForm.districtId == $scope.district[i].id)
						$scope.selectedDistrict = $scope.district[i];
				}
			}
			for (var i = 0; i < $scope.childSex.length; i++) {
				if ($scope.cciForm.typeOfInstitutions == $scope.childSex[i].typeDetailsId)
					$scope.selectedChildSex = $scope.childSex[i];
			}
			for (var i = 0; i < $scope.osType.length; i++) {
				if ($scope.cciForm.govtNonGovt == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType = $scope.osType[i];
			}

			if ($scope.cciForm.cciHomeTrainings != null || $scope.cciForm.cciHomeTrainings != undefined)
				$scope.cciTrainingDetailsRepetitionArray = $scope.cciForm.cciHomeTrainings;

			if ($scope.cciForm.cciHomeTrainings != undefined) {
				for (var i = 0; i < $scope.cciForm.cciHomeTrainings.length; i++) {
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
						if ($scope.trainingOrganisedBy[j].typeDetailsId == $scope.cciForm.cciHomeTrainings[i].trainingOrganisedBy) {
							$scope.cciTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			$(".loader").fadeOut();
		}, 500);
		$timeout(function() {
			for (var i = 0; i < $scope.cciTrainingDetailsRepetitionArray.length; i++) {
				if ($scope.cciTrainingDetailsRepetitionArray[i].trainingFromDate != null || $scope.cciTrainingDetailsRepetitionArray[i].trainingFromDate != undefined) {
					dateConvert($scope.cciTrainingDetailsRepetitionArray[i].trainingFromDate);
					$('#trainingFromDatepicker' + i).datepicker("setDate", new Date(dateObj.year, dateObj.month - 1, dateObj.date));
				}
				if ($scope.cciTrainingDetailsRepetitionArray[i].trainingToDate != null || $scope.cciTrainingDetailsRepetitionArray[i].trainingToDate != undefined) {
					dateConvert($scope.cciTrainingDetailsRepetitionArray[i].trainingToDate);
					$('#trainingToDatepicker' + i).datepicker("setDate", new Date(dateObj.year, dateObj.month - 1, dateObj.date));
				}
			}
			$scope.cciForm.l1WasTrainingHeld = $scope.cciForm.l1WasTrainingHeld == null ? null : $scope.cciForm.l1WasTrainingHeld.toString();
			$scope.cciForm.k16aMeetingChildrenCommittee = $scope.cciForm.k16aMeetingChildrenCommittee == null ? null : $scope.cciForm.k16aMeetingChildrenCommittee.toString();
			$scope.cciForm.k17aMeetingHomeManagementCommittee = $scope.cciForm.k17aMeetingHomeManagementCommittee == null ? null : $scope.cciForm.k17aMeetingHomeManagementCommittee.toString();
			$scope.cciForm.k18aAnyOthersDetails = $scope.cciForm.k18aAnyOthersDetails == null ? null : $scope.cciForm.k18aAnyOthersDetails.toString();
			$scope.cciForm.l1aNoOfTraining = $scope.cciTrainingDetailsRepetitionArray.length;
			$(".loader").fadeOut();
		}, 500);
	}, function(error) {

		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});

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
		$scope.cciTrainingDetailsRepetitionArray[index].trainingToDate = date;
		if($scope.cciTrainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.cciTrainingDetailsRepetitionArray[index].trainingFromDate != undefined){
			var fromDay = new Date(dateConvert($scope.cciTrainingDetailsRepetitionArray[index].trainingFromDate));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
				$scope.messageField2="";
				$scope.alertMessage = "";
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.cciTrainingDetailsRepetitionArray[index].trainingToDate = null;
            }
		}else{
			$scope.messageField1= commonService.messages.select_training_from;
			$scope.messageField2="";
			$scope.alertMessage ="";
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.cciTrainingDetailsRepetitionArray[index].trainingToDate = null;
		}
	};
	// the following function is for initialization and setting
	// the dates in date pickers.Pratyush
	$scope.initializeDatePicker = function(index) {
		$("#trainingFromDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if($scope.cciTrainingDetailsRepetitionArray[index].trainingToDate != null && $scope.cciTrainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.cciTrainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
						$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
						$scope.messageField2="";
						$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.cciTrainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.cciTrainingDetailsRepetitionArray[index].trainingFromDate = date;
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
		if ($scope.cciTrainingDetailsRepetitionArray[index].trainingFromDate != null) {
			dateConvert($scope.cciTrainingDetailsRepetitionArray[index].trainingFromDate);
			$('#trainingFromDatepicker' + index).datepicker("setDate", new Date(dateObj.year, dateObj.month - 1, dateObj.date));
		}
		if ($scope.cciTrainingDetailsRepetitionArray[index].trainingToDate != null) {
			dateConvert($scope.cciTrainingDetailsRepetitionArray[index].trainingToDate);
			$('#trainingToDatepicker' + index).datepicker("setDate", new Date(dateObj.year, dateObj.month - 1, dateObj.date));
		}
	};
	/* Accordian add new Functions(sswayamprava.sdrc.co.in) */

	$scope.cciTrainingDetailsObject = {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		trainingOrganisedBy : null,
		traingOrganisedbyOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLaws : null,
		totCombinedTraining : null,
		totCpmis : null,
		totTrackChild : null,
		totClts : null,
		totOthers : null,
		totOthersSpecify : null,
		tabSuperintendent : null,
		tabProbationOfficerCaseWorker : null,
		tabCounsellor : null,
		tabHouseFatherMother : null,
		tabStoreKeeperCumAccountant : null,
		tabParamedicalStaff : null,
		tabOthers : null,
		tabOthersSpecify : null,
		homeId : null
	};
	$scope.cciTrainingDetailsRepetitionArray = [ {
		trainingId : null,
		durationTraining : null,
		trainingFromDate : null,
		trainingToDate : null,
		trainingOrganisedBy : null,
		traingOrganisedbyOthers : null,
		totJjAct : null,
		totPosco : null,
		totChildRelatedLaws : null,
		totCombinedTraining : null,
		totCpmis : null,
		totTrackChild : null,
		totClts : null,
		totOthers : null,
		totOthersSpecify : null,
		tabSuperintendent : null,
		tabProbationOfficerCaseWorker : null,
		tabCounsellor : null,
		tabHouseFatherMother : null,
		tabStoreKeeperCumAccountant : null,
		tabParamedicalStaff : null,
		tabOthers : null,
		tabOthersSpecify : null,
		homeId : null
	} ];
	var topicOfTrainingValidation = function(training){
		if(training.totJjAct != true &&
				training.totPosco != true &&
				training.totChildRelatedLaws != true &&
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
		if($scope.cciForm.l1WasTrainingHeld == 'true'){
			if((training.durationTraining == null ||
					training.trainingFromDate == null ||
					training.trainingToDate == null ||
					training.trainingOrganisedBy == null ||
					training.tabSuperintendent == null ||
					training.tabProbationOfficerCaseWorker == null ||
					training.tabCounsellor == null ||
					training.tabHouseFatherMother == null ||
					training.tabStoreKeeperCumAccountant == null ||
					training.tabParamedicalStaff == null ||
					training.tabOthers == null)){
				return false;
			}else if((training.trainingOrganisedBy.typeDetailsId == 4 && (training.traingOrganisedbyOthers == null || training.traingOrganisedbyOthers.trim() == "")) ||
					(training.tabOthers > 0 && (training.tabOthersSpecify == null || training.tabOthersSpecify.trim() == ""))){
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
		if($scope.validateNoOfTraining($scope.cciForm.l1aNoOfTraining)){
			if (!accordionValidation($scope.cciTrainingDetailsRepetitionArray[$scope.cciTrainingDetailsRepetitionArray.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.cciForm.l1aNoOfTraining!=undefined && $scope.cciForm.l1aNoOfTraining <= 10){
					if ($scope.cciTrainingDetailsRepetitionArray.length != $scope.cciForm.l1aNoOfTraining) {
						$scope.cciTrainingDetailsRepetitionArray[($scope.cciTrainingDetailsRepetitionArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.cciTrainingDetailsObject));
					}else {
						document.getElementById('maximumLimit10Error').innerHTML = "You can add maximum <b>" + $scope.cciForm.l1aNoOfTraining + "</b> Training Details";
					}
					$timeout(function() {
						document.getElementById('maximumLimit10Error').innerHTML = "";
					}, 2000);
				}
			}
		}
	};

	$scope.deleteConfirm = function() {
		document.getElementById("l1aNoOfTraining").blur();
		if ($scope.cciTrainingDetailsRepetitionArray.length > 1 && $scope.cciForm.l1aNoOfTraining >= $scope.cciTrainingDetailsRepetitionArray.length
				&& $scope.cciForm.l1aNoOfTraining!=undefined && $scope.cciForm.l1aNoOfTraining <= 10) {
			$('#deleteAccordion').modal('show');
		}
	};

	$scope.deleteNewDetails = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
		if ($scope.cciTrainingDetailsRepetitionArray.length > 1) {
			$scope.cciTrainingDetailsRepetitionArray.pop();
		}
	};

	// Function for set date for from and to dates dynamically
	// respectively.

	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciTrainingDetailsRepetitionArray[id].trainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.cciTrainingDetailsRepetitionArray[id].trainingToDate = date;
			}
		});
	};

	// for reset to zero

	$scope.resetToZeroaccdccioh = function(value) {
		if (value == 'false') {
			$scope.cciTrainingDetailsRepetitionArray = [ {
				trainingId : null,
				durationTraining : null,
				trainingFromDate : null,
				trainingToDate : null,
				trainingOrganisedBy : null,
				traingOrganisedbyOthers : null,
				totJjAct : null,
				totPosco : null,
				totChildRelatedLaws : null,
				totCombinedTraining : null,
				totCpmis : null,
				totTrackChild : null,
				totClts : null,
				totOthers : null,
				totOthersSpecify : null,
				tabSuperintendent : null,
				tabProbationOfficerCaseWorker : null,
				tabCounsellor : null,
				tabHouseFatherMother : null,
				tabStoreKeeperCumAccountant : null,
				tabParamedicalStaff : null,
				tabOthers : null,
				tabOthersSpecify : null,
				homeId : null
			} ];
		}
		$scope.cciForm.l1aNoOfTraining = $scope.cciTrainingDetailsRepetitionArray.length;
	};

	// the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers = function(cciTrainingDetails) {
		if (cciTrainingDetails.trainingOrganisedBy.typeDetailsId != 4)
			cciTrainingDetails.traingOrganisedbyOthers = null;
	};
	// the following function is for resetting the date field on No select
	$scope.resetDate = function(datepickerId) {
		$('#' + datepickerId).datepicker("setDate", null);
		if (datepickerId == 'meetingDatepicker')
			$scope.cciForm.k16CCDate = null;
		else if (datepickerId == 'homeManagementDatepicker')
			$scope.cciForm.k17HMDate = null;
		else if (datepickerId == 'otherMeetingDatepicker')
			$scope.cciForm.k18OtherDetailsDate = null;
	};
});