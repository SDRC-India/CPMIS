cpmisApp.controller('cciOpenShelterController', function($scope, $http, $timeout, $window, commonService){
	$scope.openShelterCCI = {};
	$scope.Number = Number;
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
	$http.get("getDropdownItems").
	then(function(result){
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
		$scope.topicOfTraining = result.data.topicOfTraining;
		$scope.trainingAttendedBy = result.data.trainingAttendedBy;
		$scope.childSex = result.data.childSex;
		$scope.osType = result.data.osType;
		
	},function(error){
		console.log(error);
	});
	$http.get("getUserArea").
		then(function(result){
			$scope.selectedDistrict = result.data;
		},function(error){
			console.log(error);
	});
	 $http.get("getCciNameList").
		then(function(result){
			$scope.cciNameList = result.data;
		},function(error){
			console.log(error);
		});
	$scope.logout = function(){
		$http.post('logout').
		then(function(result){
			if(result.status == 200){
				window.location = "login";
			}
		},function(error){
			console.log(error);
			if(error.status == -1){
				alert("Server error.");
			}
		});
	};
	$scope.messageField1="";
	$scope.messageField2="";
	$scope.testCapacity=function(id)
	{
		var value=Number(document.getElementById(id).value-0);
		if(value>500){
			$scope.openShelterCCI[id] = null;
			document.getElementById(id).blur();
			$('#ErrAlertModal').modal('show');
			$scope.messageField1="Capacity can not be more than 500";
			$scope.messageField2="";
			$scope.alertMessage = "";
			
			}
	};
	
	// Save and submit validation starts
	var commonFunctionBody=function(firstInput,secondInput,bgc){
		
		 if(firstInput <secondInput)
		    {
		     bgc.style.setProperty("background-color", "#DC143C", "important");
		   	 bgc.style.setProperty("color", "#FFFAF0", "important");
		   	 bgc.style.setProperty("border-color", "red", "important");
		   	 $('#ErrAlertModal').modal('show');
		   	 window.setTimeout(function ()
   		     {bgc.focus();}, 0);
		 	 return false;
		    }
		    else
		   	{
		     bgc.style.removeProperty("background-color", "#DC143C", "important");
		   	 bgc.style.removeProperty("color", "#FFFAF0", "important");
		   	 bgc.style.removeProperty("border-color", "red", "important");
		
		   	 return true;
		   	}

	};
	var commonFunctionBodyEqualTo=function(firstInput,secondInput,bgc){
		
		 if(!(firstInput ==secondInput))
		    {
		     bgc.style.setProperty("background-color", "#DC143C", "important");
		   	 bgc.style.setProperty("color", "#FFFAF0", "important");
		   	 bgc.style.setProperty("border-color", "red", "important");
		   	 $('#ErrAlertModal').modal('show');
		   	 window.setTimeout(function ()
   		     {bgc.focus();}, 0);
		 	 return false;
		    }
		    else
		   	{
		     bgc.style.removeProperty("background-color", "#DC143C", "important");
		   	 bgc.style.removeProperty("color", "#FFFAF0", "important");
		   	 bgc.style.removeProperty("border-color", "red", "important");
		
		   	 return true;
		   	}

	};
	
	$scope.calculateWithC = function(id, modelId, yearRange){
		var sum = modelValue = 0;
		
		if(yearRange=='0-6'){
			sum = document.getElementById('d7Years0to6').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.7. Total no. of children referred(0-6)years";
			$scope.messageField2="C.1. Age distribution of children in the reporting month(0-6)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='7-11'){
			sum = document.getElementById('d7Years7to11').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.7. Total no. of children referred(7-11)years";
			$scope.messageField2="C.1. Age distribution of children in the reporting month(7-11)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='12-15'){
			sum = document.getElementById('d7Years12to15').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.7. Total no. of children referred(12-15)years";
			$scope.messageField2="C.1. Age distribution of children in the reporting month(12-15)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='16-18'){
			sum = document.getElementById('d7Years16to18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.7. Total no. of children referred(16-18)years";
			$scope.messageField2="C.1. Age distribution of children in the reporting month(16-18)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='>18'){
			sum = document.getElementById('d7YearsGreaterThan18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.7. Total no. of children referred(>18)years";
			$scope.messageField2="C.1. Age distribution of children in the reporting month(>18)years";
			$scope.alertMessage = "value can not exceed";
		}
		
		if(Number(sum) > Number(modelValue)){
			$scope.openShelterCCI[modelId] = null;
			$('#ErrAlertModal').modal('show');
		}
	};
	
	 $scope.checkD=function(){
			var bgc=document.getElementById('d7Total');
			var firstInput=parseInt(document.getElementById("cTotal").value);
			var secondInput =parseInt(document.getElementById("d7Total").value);
			$scope.messageField1="D.7. Total no. of children referred";
			$scope.messageField2="C.1. Age distribution of children in the reporting month";
			$scope.alertMessage = "value can not exceed";
			return commonFunctionBody(firstInput,secondInput,bgc);
		};
		
	 $scope.checkFTotal=function(){
			var bgc=document.getElementById('fTotal');
			var firstInput=parseInt(document.getElementById("eTotal").value);
			var secondInput =parseInt(document.getElementById("fTotal").value);
			$scope.messageField1="F.1. Total Children";
			$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
			$scope.alertMessage="value should be equal to";
			return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};
	 $scope.checkFMinority=function(){
			var bgc=document.getElementById('fMinority');
			var firstInput=parseInt(document.getElementById("fTotal").value);
			var secondInput =parseInt(document.getElementById("fMinority").value);
			$scope.messageField1="Total Number of Minority children";
			$scope.messageField2="F.1. Total Children";
			$scope.alertMessage="value can not exceed";
			return commonFunctionBody(firstInput,secondInput,bgc);
		};

	 $scope.checkG7=function(){
			var bgc=document.getElementById('g7Total');
			var firstInput=parseInt(document.getElementById("eTotal").value);
			var secondInput =parseInt(document.getElementById("g7Total").value);
			$scope.messageField1="G.7. Total no. of children attending any educational programme";
			$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
			$scope.alertMessage="value should be equal to";
			return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
		};
	$scope.checkH=function(){
		var bgc=document.getElementById('h5Total');
		var secondInput=parseInt(document.getElementById("eTotal").value);
		var firstInput =parseInt(document.getElementById("h5Total").value);
		$scope.messageField1="H.5. Total Children";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value should be equal to";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	$scope.checkI1=function(){
		var bgc=document.getElementById('i1Total');
		var atotalval=document.getElementById("aTotal").value;
		if(atotalval=="")
			atotalval=0;
		var firstInput=parseInt(atotalval);
		var secondInput =parseInt(document.getElementById("i1Total").value);
		$scope.messageField1="I.1.Children on the First day of the month";
		$scope.messageField2="A.1.Age distribution of Children on the first day of the reporting month";
		$scope.alertMessage="value should be equal to";
		return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};
	$scope.checkI2=function(){
		var bgc=document.getElementById('i2Total');
		var firstInput=parseInt(document.getElementById("b3Total").value);
		var secondInput =parseInt(document.getElementById("i2Total").value);
		$scope.messageField1="I.2.New Children Admitted in the Month";
		$scope.messageField2="B.3.Total No. of Children Referred";
		$scope.alertMessage="value should be equal to";
		return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};
	
	$scope.checkI3=function(){
		var bgc=document.getElementById('i3Total');
		var firstInput=parseInt(document.getElementById("d7Total").value);
		var secondInput =parseInt(document.getElementById("i3Total").value);
		$scope.messageField1="I.3.Children moved out in the month";
		$scope.messageField2="D.7.Total no. of children referred";
		$scope.alertMessage="value should be equal to";
		return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};
	
	$scope.checkI4=function(){
		var bgc=document.getElementById('i4Total');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("i4Total").value);
		$scope.messageField1="l.4.Total children on the Last day of the month";
		$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value should be equal to";
		return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	};
	
	$scope.checkJ4=function(){
		var bgc=document.getElementById('j4TotalNumberTotal');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("j4TotalNumberTotal").value);
		$scope.messageField1="J.4. Total";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value should be equal to";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK1=function(){
		var bgc=document.getElementById('k1');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k1").value);
		$scope.messageField1="K.1. No. of adoptable children";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK2=function(){
		var bgc=document.getElementById('k2');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k2").value);
		$scope.messageField1="K.2. No. of children with single parent";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK3=function(){
		var bgc=document.getElementById('k3');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k3").value);
		$scope.messageField1="K.3. No. of children without parental care/without adult support";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK4=function(){
		var bgc=document.getElementById('k4');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k4").value);
		$scope.messageField1="K.4. No. of children referred to Hospital/PHC/Clinics";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK5=function(){
		var bgc=document.getElementById('k5');
		var firstInput=parseInt(document.getElementById("cTotal").value);
		var secondInput =parseInt(document.getElementById("k5").value);
		$scope.messageField1="K.5. No. of children transferred to home within the state";
		$scope.messageField2="C.1. Age distribution of children in the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK6=function(){
		var bgc=document.getElementById('k6');
		var firstInput=parseInt(document.getElementById("cTotal").value);
		var secondInput =parseInt(document.getElementById("k6").value);
		$scope.messageField1="K.6. No. of children transferred to home outside the state";
		$scope.messageField2="C.1. Age distribution of children in the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK7=function(){
		var bgc=document.getElementById('k7');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k7").value);
		$scope.messageField1="K.7. No. of Case History Formats filled";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month ";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK8=function(){
		var bgc=document.getElementById('k8');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k8").value);
		$scope.messageField1="K.8. No. of Individual Care Plan (ICP) prepared";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK9=function(){
		var bgc=document.getElementById('k9');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k9").value);
		$scope.messageField1="K.9. No. of children referred for Psychiatric treatment";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK10=function(){
		var bgc=document.getElementById('k10');
		var firstInput=parseInt(document.getElementById("cTotal").value);
		var secondInput =parseInt(document.getElementById("k10").value);
		$scope.messageField1="K.10. No. of entries on Track Child Portal";
		$scope.messageField2="C.1. Age distribution of children in the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkK14=function(){
		var bgc=document.getElementById('k14');
		var firstInput=parseInt(document.getElementById("eTotal").value);
		var secondInput =parseInt(document.getElementById("k14").value);
		$scope.messageField1="K.14. Average no. of children visiting the center at day and night both";
		$scope.messageField2="E.1. Age distribution of children on the last day of the reporting month";
		$scope.alertMessage="value can not exceed";
		return commonFunctionBody(firstInput,secondInput,bgc);
	};
	
	$scope.checkINegetive=function(currentId,targetId,msg){
		var bgc = document.getElementById(currentId);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;
		$scope.messageField1="Sum of I.1. Children on the First day of the month and I.2. New Children Admitted in the Month "+msg+" children";
		$scope.messageField2="I.3. Children moved out in the month "+msg+" children";
		$scope.alertMessage = "value can not be less than";
		
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			$scope.openShelterCCI[currentId] = null;
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
	$scope.checkINegetive1=function(currentId,i3Id,targetId,msg){
		var bgc = document.getElementById(currentId);
		var bgc1= document.getElementById(i3Id);
		var firstInput=Number(document.getElementById(targetId).value - 0);
		var secondInput=0;	
		$scope.messageField1="Sum of I.1. Children on the First day of the month and I.2. New Children Admitted in the Month "+msg+" children";
		$scope.messageField2="I.3. Children moved out in the month "+msg+" children";
		$scope.alertMessage = "value can not be less than";
		if (firstInput < secondInput) {
			bgc.style.setProperty("background-color", "#DC143C", "important");
			bgc.style.setProperty("color", "#FFFAF0", "important");
			bgc.style.setProperty("border-color", "red", "important");
			bgc.value=null;
			bgc1.value=null;
			$scope.openShelterCCI[currentId] = null;
			$scope.openShelterCCI[i3Id] = null;
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

	 $("input[type='number']").keyup(function(){
		checkD();checkFTotal();checkFMinority();checkG7();checkH();checkI1();checkI2();checkI3();checkI4();checkJ4();removeNegetiveColor();
	});

		$scope.showHideBasedOnFlag=function(id,value){
			var idValue=document.getElementById(id).value;
			if(idValue>0)
				return true;
			else if (idValue == 0 || idValue == null) {
				$scope.openShelterCCI[value] = null;
				return false;
			}
				
		};
	//ends
		
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
				
				$scope.openShelterCCI[thisId] = valObj.oldVal;
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
	angular.forEach($scope.openShelterCCI, function(value, index) {
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
	//save and submit function
	$scope.checkSave= function() {
		$scope.saveOs($scope.openShelterCCI, 'save');
	};
	
	$scope.checkSubmit= function() {
		if(!$scope.checkD()){}        
	    else if(!$scope.checkFTotal()){}
	    else if(!$scope.checkFMinority()){}
	    else if(!$scope.checkG7()){}
	    else if(!$scope.checkH()){}
	    else if(!$scope.checkI1()){}
	    else if(!$scope.checkI2()){}    
	    else if(!$scope.checkI3()){}    
	    else if(!$scope.checkI4()){}    
	    else if(!$scope.checkJ4()){}    
	    else if(!$scope.checkK1()){}    
	    else if(!$scope.checkK2()){}    
	    else if(!$scope.checkK3()){}    
	    else if(!$scope.checkK4()){}    
	    else if(!$scope.checkK5()){}    
	    else if(!$scope.checkK6()){}    
	    else if(!$scope.checkK7()){}    
	    else if(!$scope.checkK8()){}    
	    else if(!$scope.checkK9()){}    
	    else if(!$scope.checkK10()){}    
	    else if(!$scope.checkK14()){}
	    else if(($scope.openShelterCCI.k15aMeetingChildrenCommittee == 'true') && ($scope.openShelterCCI.k15bCcMeetingDate == null || $scope.openShelterCCI.k15bCcMeetingDate == undefined)){
			document.getElementById("meetingdatepicker").focus();
	    } else if(($scope.openShelterCCI.k16aMeetingHomeManagementCommittee == 'true')&& ($scope.openShelterCCI.k16bHmMeetingDate == null || $scope.openShelterCCI.k16bHmMeetingDate == undefined)){
	    	document.getElementById("homeManagementdatepicker").focus();
	    } else if(($scope.openShelterCCI.k17aAnyOthersDetails == 'true')&& ($scope.openShelterCCI.k17bOtherDetailsDate == null || $scope.openShelterCCI.k17bOtherDetailsDate == undefined)){
			document.getElementById("Othermeetingdatepicker").focus();
	    }else{
	    	$scope.saveOs($scope.openShelterCCI, 'submit');
		}
	
	};
	
	//
	$scope.resetD6a= function(value) {
    	if (value == 0){
    		$scope.openShelterCCI.d6aSpecifyothers = null;
    	
    	}
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
	$scope.confirmNavigate = function() {
		$('#confirmationModalHomePage').modal('show');
	};
	$scope.confirmNavigate1=function(){
		$('#confirmationModalTermsPage').modal('show');
	};
	$scope.confirmNavigate2=function(){
		$('#confirmationModalDisclaimerPage').modal('show');
	};
	$scope.confirmNavigate3=function(){
		$('#confirmationModalPrivacyPage').modal('show');
	};
	$scope.confirmNavigate4=function(){
		$('#confirmationModalSitemapPage').modal('show');
	};
	
	$(".loader").show();
	var prepareObj = function(openShelterCCI){
		openShelterCCI.typeOfHome=document.getElementById("typeOfHomeId").value;
		openShelterCCI.aTotal=parseInt(document.getElementById('aTotal').value)==0?null:parseInt(document.getElementById('aTotal').value);                     
        openShelterCCI.b1Total=parseInt(document.getElementById('b1Total').value);                        
        openShelterCCI.b2Total=parseInt(document.getElementById('b2Total').value);                        

        openShelterCCI.b3Years0to6=parseInt(document.getElementById('b3Years0to6').value);
        openShelterCCI.b3Years7to11=parseInt(document.getElementById('b3Years7to11').value);
        openShelterCCI.b3Years12to15=parseInt(document.getElementById('b3Years12to15').value);
        openShelterCCI.b3Years16to18=parseInt(document.getElementById('b3Years16to18').value);
        openShelterCCI.b3YearsGreaterThan18=parseInt(document.getElementById('b3YearsGreaterThan18').value);
        openShelterCCI.b3Total=parseInt(document.getElementById('b3Total').value);                        

        openShelterCCI.cYears0to6=parseInt(document.getElementById('cYears0to6').value);
        openShelterCCI.cYears7to11=parseInt(document.getElementById('cYears7to11').value);
        openShelterCCI.cYears12to15=parseInt(document.getElementById('cYears12to15').value);
        openShelterCCI.cYears16to18=parseInt(document.getElementById('cYears16to18').value);
        openShelterCCI.cYearsGreaterThan18=parseInt(document.getElementById('cYearsGreaterThan18').value);
        openShelterCCI.cTotal=parseInt(document.getElementById('cTotal').value);

        openShelterCCI.d1Total=parseInt(document.getElementById('d1Total').value);
        openShelterCCI.d2Total=parseInt(document.getElementById('d2Total').value);
        openShelterCCI.d3Total=parseInt(document.getElementById('d3Total').value);
        openShelterCCI.d4Total=parseInt(document.getElementById('d4Total').value);
        openShelterCCI.d5Total=parseInt(document.getElementById('d5Total').value);
        openShelterCCI.d6Total=parseInt(document.getElementById('d6Total').value);

        openShelterCCI.d7Years0to6=parseInt(document.getElementById('d7Years0to6').value);
        openShelterCCI.d7Years7to11=parseInt(document.getElementById('d7Years7to11').value);
        openShelterCCI.d7Years12to15=parseInt(document.getElementById('d7Years12to15').value);
        openShelterCCI.d7Years16to18=parseInt(document.getElementById('d7Years16to18').value);
        openShelterCCI.d7YearsGreaterThan18=parseInt(document.getElementById('d7YearsGreaterThan18').value);
        openShelterCCI.d7Total=parseInt(document.getElementById('d7Total').value);

        openShelterCCI.eYears0to6=parseInt(document.getElementById('eYears0to6').value);
        openShelterCCI.eYears7to11=parseInt(document.getElementById('eYears7to11').value);
        openShelterCCI.eYears12to15=parseInt(document.getElementById('eYears12to15').value);
        openShelterCCI.eYears16to18=parseInt(document.getElementById('eYears16to18').value);
        openShelterCCI.eYearsGreaterThan18=parseInt(document.getElementById('eYearsGreaterThan18').value);
        openShelterCCI.eTotal=parseInt(document.getElementById('eTotal').value);

        openShelterCCI.fTotal=parseInt(document.getElementById('fTotal').value);
        openShelterCCI.g1Total=parseInt(document.getElementById('g1Total').value);
        openShelterCCI.g2Total=parseInt(document.getElementById('g2Total').value);
        openShelterCCI.g3Total=parseInt(document.getElementById('g3Total').value);
        openShelterCCI.g4Total=parseInt(document.getElementById('g4Total').value);
        openShelterCCI.g5Total=parseInt(document.getElementById('g5Total').value);
        openShelterCCI.g6Total=parseInt(document.getElementById('g6Total').value);

        openShelterCCI.g7Years0to6=parseInt(document.getElementById('g7Years0to6').value);
        openShelterCCI.g7Years7to11=parseInt(document.getElementById('g7Years7to11').value);
        openShelterCCI.g7Years12to15=parseInt(document.getElementById('g7Years12to15').value);
        openShelterCCI.g7Years16to18=parseInt(document.getElementById('g7Years16to18').value);
        openShelterCCI.g7YearsGreaterThan18=parseInt(document.getElementById('g7YearsGreaterThan18').value);
        openShelterCCI.g7Total=parseInt(document.getElementById('g7Total').value);

        openShelterCCI.h1Total=parseInt(document.getElementById('h1Total').value);
        openShelterCCI.h2Total=parseInt(document.getElementById('h2Total').value);
        openShelterCCI.h3Total=parseInt(document.getElementById('h3Total').value);
        openShelterCCI.h4Total=parseInt(document.getElementById('h4Total').value);

        openShelterCCI.h5Years0to6=parseInt(document.getElementById('h5Years0to6').value);
        openShelterCCI.h5Years7to11=parseInt(document.getElementById('h5Years7to11').value);
        openShelterCCI.h5Years12to15=parseInt(document.getElementById('h5Years12to15').value);
        openShelterCCI.h5Years16to18=parseInt(document.getElementById('h5Years16to18').value);
        openShelterCCI.h5YearsGreaterThan18=parseInt(document.getElementById('h5YearsGreaterThan18').value);
        openShelterCCI.h5Total=parseInt(document.getElementById('h5Total').value);

        openShelterCCI.i1Total=parseInt(document.getElementById('i1Total').value);
        openShelterCCI.i2Total=parseInt(document.getElementById('i2Total').value);
        openShelterCCI.i3Total=parseInt(document.getElementById('i3Total').value);

        openShelterCCI.i4DaysLessThan15=parseInt(document.getElementById('i4DaysLessThan15').value);
        openShelterCCI.i4Days16to30=parseInt(document.getElementById('i4Days16to30').value);
        openShelterCCI.i4Months1to3=parseInt(document.getElementById('i4Months1to3').value);
        openShelterCCI.i4MonthsgreaterThan3=parseInt(document.getElementById('i4MonthsgreaterThan3').value);
        openShelterCCI.i4Total=parseInt(document.getElementById('i4Total').value);

        openShelterCCI.j1TotalNumberTotal=parseInt(document.getElementById('j1TotalNumberTotal').value);
        openShelterCCI.j2TotalNumberTotal=parseInt(document.getElementById('j2TotalNumberTotal').value);
        openShelterCCI.j3TotalNumberTotal=parseInt(document.getElementById('j3TotalNumberTotal').value);

        openShelterCCI.j4Total0to30Days=parseInt(document.getElementById('j4Total0to30Days').value);
        openShelterCCI.j4TotalMonths1to2=parseInt(document.getElementById('j4TotalMonths1to2').value);
        openShelterCCI.j4TotalMonths2to3=parseInt(document.getElementById('j4TotalMonths2to3').value);
        openShelterCCI.j4TotalMonths3to4=parseInt(document.getElementById('j4TotalMonths3to4').value);
        openShelterCCI.j4TotalMonths4to12=parseInt(document.getElementById('j4TotalMonths4to12').value);
        openShelterCCI.j4TotalMonthsMoreThan1Year=parseInt(document.getElementById('j4TotalMonthsMoreThan1Year').value);
        openShelterCCI.j4TotalNumberTotal=parseInt(document.getElementById('j4TotalNumberTotal').value);
        for(var i=0; i<openShelterCCI.cciOpenShelterTrainings.length;i++){
			if(openShelterCCI.cciOpenShelterTrainings[i].trainingOrganisedBy != null || openShelterCCI.cciOpenShelterTrainings[i].trainingOrganisedBy != undefined)
				openShelterCCI.cciOpenShelterTrainings[i].trainingOrganisedBy = openShelterCCI.cciOpenShelterTrainings[i].trainingOrganisedBy.typeDetailsId;
		}
		openShelterCCI.userId = Number(document.getElementById("uId").value);
	};
	var submitted = false;
	$scope.saveOs = function(openShelterCCI, clickType, submitConfirm){
		$(".loader").show();
		
		if($scope.selectedDistrict != undefined)
			openShelterCCI.districtId = $scope.selectedDistrict.areaId;
		if($scope.selectedOsType != undefined)
			openShelterCCI.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if($scope.selectedChildSex != undefined)
			openShelterCCI.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;

		
		openShelterCCI.nameOfCCI =  $scope.cciNameList.cciName;
		openShelterCCI.cciOpenShelterTrainings = $scope.trainingDetailsRepetitionArray;
		
		if(clickType == 'save'){
				prepareObj(openShelterCCI);
				$http.post('saveCciOpenShelter', openShelterCCI).
				then(function(result){
					if(result.status == 200){
						$(".loader").fadeOut();
						$scope.success_msg = commonService.messages.save_success_msg;
						$('#confirmationModalForCCCH').modal('show');
					}
				},function(error){
					$(".loader").fadeOut();
					commonService.errSaveHttpFunction(error);
					console.log(error);
				});
			
		}else if(clickType=='submit' && submitted == false){
			$(".loader").fadeOut();
			if(!$scope.openShelterCCI.cciOpenShelterTrainings.length<1){
				for(var i=0;i<$scope.openShelterCCI.cciOpenShelterTrainings.length;i++){
					if (!accordionValidation($scope.openShelterCCI.cciOpenShelterTrainings[i])) {
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
			
			if (!accordionValidation($scope.openShelterCCI.cciOpenShelterTrainings[$scope.openShelterCCI.cciOpenShelterTrainings.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop: $('#accordion').offset().top - 250},'slow');
			}else{
				$('#confirmationModalForCHSUBMIT').modal('show');
			}
			if(allNegetiveTest() ==false){
	 			return false;
	 		 }
		}
		if(submitConfirm=='ok'){
			prepareObj(openShelterCCI);
			$http.post('submitCciOpenShelter', openShelterCCI).
			then(function(result){
				if(result.status == 200){
					$scope.success_msg = commonService.messages.submit_success_msg+openShelterCCI.timeperiod.timePeriod;
					$('#confirmationModalForCCCH').modal('show');
				}
			},function(error){
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
	$scope.autoSaveOs = function(openShelterCCI, clickType){
		
		if($scope.selectedDistrict != undefined)
			openShelterCCI.districtId = $scope.selectedDistrict.areaId;
		if($scope.selectedOsType != undefined)
			openShelterCCI.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if($scope.selectedChildSex != undefined)
			openShelterCCI.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;

		
		openShelterCCI.nameOfCCI =  $scope.cciNameList.cciName;
		openShelterCCI.cciOpenShelterTrainings = $scope.trainingDetailsRepetitionArray;
		
		if(clickType == 'save'){
				prepareObj(openShelterCCI);
				$http.post('autoSaveCciOpenShelter', openShelterCCI).
				then(function(result){
					if(result.status == 200){
						$(".loader").fadeOut();
						$('#successModalForAutoSaveOS').modal('show');
					}
				},function(error){
					commonService.checkSessionOut(error);
					console.log(error);
				});
		}
	};
	//getting refresh on saving  @swarna
	$scope.refreshPage = function(){
		 $window.location.reload();
	};
	// type number will not accept exponential(e)
	 $(".removeExponentialValueE").keypress(function(event) {
       if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
           return false;
       }
     });
	$scope.district = [];
	$http.get("getAreas").
	then(function(result){
		//Pick out objects with areaLevel '3' for district.
		for(var i=0; i< result.data.length; i++){
			if(result.data[i].areaLevel == 3){
				$scope.district.push(result.data[i]);
			}
		}
	},function(error){
		console.log(error);
	});
	
	//start from here
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
	    	if($scope.counterSeconds==300 && !$('#confirmationModalForCCCH').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#confirmationModalForCCCH').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSaveOs($scope.openShelterCCI, 'save');
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
	$http.post("getLastSavedCciOpenShelterData", currentUserId).
	then(function(result){
		if(result.data != "")
			$scope.openShelterCCI = result.data;
		if(!$scope.openShelterCCI.submitted)
			$scope.timerForSave($scope,$timeout);
		if($scope.openShelterCCI.submitted){
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		$scope.openShelterCCI.k15aMeetingChildrenCommittee = $scope.openShelterCCI.k15aMeetingChildrenCommittee==null?null:$scope.openShelterCCI.k15aMeetingChildrenCommittee.toString();
		$scope.openShelterCCI.k16aMeetingHomeManagementCommittee = $scope.openShelterCCI.k16aMeetingHomeManagementCommittee==null?null:$scope.openShelterCCI.k16aMeetingHomeManagementCommittee.toString();
		$scope.openShelterCCI.k17aAnyOthersDetails = $scope.openShelterCCI.k17aAnyOthersDetails==null?null:$scope.openShelterCCI.k17aAnyOthersDetails.toString();
		$scope.openShelterCCI.l1WastrainingHeld = $scope.openShelterCCI.l1WastrainingHeld==null?null:$scope.openShelterCCI.l1WastrainingHeld.toString();
		
		todaysDate = new Date($scope.openShelterCCI.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
		
		$("#datepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.openShelterCCI.monthyear = date;
			}	
		});
		
		$("#trainingDatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.openShelterCCI.j1cDateTraining = date;
			}	
		});
		$("#meetingdatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.openShelterCCI.k15bCcMeetingDate = date;
			}	
		});
		$("#homeManagementdatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.openShelterCCI.k16bHmMeetingDate = date;
			}	
		});
		$("#Othermeetingdatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.openShelterCCI.k17bOtherDetailsDate = date;
			}	
		});
		$(".accordionFromDatepicker").datepicker({
			dateFormat: "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if(this.id.startsWith("trainingFromDatepicker")){
					if($scope.trainingDetailsRepetitionArray[0].trainingToDate != null && $scope.trainingDetailsRepetitionArray[0].trainingToDate != undefined){
						var fromDay = new Date(dateConvert(date));
						var toDay = new Date(dateConvert($scope.trainingDetailsRepetitionArray[0].trainingToDate));
						if(toDay < fromDay){
							var index = this.id.split('trainingFromDatepicker')[1];
							$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
							$scope.messageField2="";
							$scope.alertMessage = "";
			            	$scope.$apply();
			    			$('#ErrAlertModal').modal('show');
			    			$("#trainingToDatepicker"+index).val(null);
			    			$scope.trainingDetailsRepetitionArray[index].trainingToDate = null;
			            }
					}
					$scope.trainingDetailsRepetitionArray[0].trainingFromDate = date;
	            }else if(this.id.startsWith("trainingToDatepicker")){
	            	checkDate(date, 0);
	            }
	        },
		});
		
		$timeout(function(){
			
			$scope.openShelterCCI.nameOfCCI = $scope.cciNameList.cciName;
			if($scope.openShelterCCI.districtId != null){
				for(var i=1; i<$scope.district.length;i++){
					if($scope.openShelterCCI.districtId == $scope.district[i].id)
						$scope.selectedDistrict = $scope.district[i];
				}
			}
			for(var i=0; i<$scope.childSex.length;i++){
				if($scope.openShelterCCI.typeOfInstitutions == $scope.childSex[i].typeDetailsId)
					$scope.selectedChildSex = $scope.childSex[i];
			}
			for(var i=0; i<$scope.osType.length;i++){
				if($scope.openShelterCCI.govtNonGovt == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType = $scope.osType[i];
			}
			if($scope.openShelterCCI.cciOpenShelterTrainings != null || $scope.openShelterCCI.cciOpenShelterTrainings != undefined)
				$scope.trainingDetailsRepetitionArray = $scope.openShelterCCI.cciOpenShelterTrainings;
			
			if($scope.openShelterCCI.cciOpenShelterTrainings != undefined){
				for(var i=0;i<$scope.openShelterCCI.cciOpenShelterTrainings.length;i++){
					$("#trainingFromDatepicker"+i).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
						minDate : firstDay,});
					$("#trainingToDatepicker"+i).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
						minDate : firstDay,});
					
					for(var j=0; j<$scope.trainingOrganisedBy.length; j++){
						if($scope.trainingOrganisedBy[j].typeDetailsId == $scope.openShelterCCI.cciOpenShelterTrainings[i].trainingOrganisedBy){
							$scope.trainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
					
					for(var j=0; j<$scope.topicOfTraining.length; j++){
						if($scope.topicOfTraining[j].typeDetailsId == $scope.openShelterCCI.cciOpenShelterTrainings[i].j1eTopicTraining){
							$scope.trainingDetailsRepetitionArray[i].j1eTopicTraining = $scope.topicOfTraining[j];
						}
					}
					
					for(var j=0; j<$scope.trainingAttendedBy.length; j++){
						if($scope.trainingAttendedBy[j].typeDetailsId == $scope.openShelterCCI.cciOpenShelterTrainings[i].j1fTrainingAttenedBy){
							$scope.trainingDetailsRepetitionArray[i].j1fTrainingAttenedBy = $scope.trainingAttendedBy[j];
						}
					}
				}
			}
			
		},500);
		$timeout(function(){
			$scope.openShelterCCI.l1aNoTrainingHeld = $scope.trainingDetailsRepetitionArray.length; 
			$(".loader").fadeOut();
		},500);
	},function(error){
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
		$scope.trainingDetailsRepetitionArray[index].trainingToDate = date;
		if($scope.trainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.trainingDetailsRepetitionArray[index].trainingFromDate != undefined){
			var fromDay = new Date(dateConvert($scope.trainingDetailsRepetitionArray[index].trainingFromDate));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
				$scope.messageField2="";
				$scope.alertMessage = "";
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.trainingDetailsRepetitionArray[index].trainingToDate = null;
            }
		}else{
			$scope.messageField1=commonService.messages.select_training_from;
			$scope.messageField2="";
			$scope.alertMessage = "";
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.trainingDetailsRepetitionArray[index].trainingToDate = null;
		}
	};
	//the following function is for initialization and setting the dates in date pickers.Pratyush
	$scope.initializeDatePicker = function(index){
		$("#trainingFromDatepicker"+index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if($scope.trainingDetailsRepetitionArray[index].trainingToDate != null && $scope.trainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.trainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
						$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
						$scope.messageField2="";
						$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.trainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.trainingDetailsRepetitionArray[index].trainingFromDate = date;
	        },
		});
		$("#trainingFromDatepicker1"+index).on("click", function(){
			$("#trainingFromDatepicker"+index).focus();
		});
		$("#trainingToDatepicker"+index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				checkDate(date, index);
	        },
		});
		$("#trainingToDatepicker1"+index).on("click", function(){
			$("#trainingToDatepicker"+index).focus();
		});
	};
	
	/*Accordian add new Functions(sswayamprava.sdrc.co.in)*/
	$scope.trainingDetailsObject={
		trainingId:null,
		durationTraining:null,
		trainingFromDate:null,
		trainingToDate:null,
		trainingOrganisedBy:null,
		traingOrganisedbyOthers:null,
		totJjAct:null,
		totPosco:null,
		totChildRelatedLaws:null,
		totCombinedTraining:null,
		totCpmis:null,
		totTrackChild:null,
		totClts:null,
		totOthers:null,
		totOthersSpecify:null,
		tabProjectCoordinatorCounsellor:null,
		tabSocialWorker:null,
		tabCareGiversBridgeCourseEducators:null,
		tabOutreachWorker:null,
		tabOthers:null,
		tabOthersSpecify:null,
		id:null
	};
	$scope.trainingDetailsRepetitionArray=[{
		trainingId:null,
		durationTraining:null,
		trainingFromDate:null,
		trainingToDate:null,
		trainingOrganisedBy:null,
		traingOrganisedbyOthers:null,
		totJjAct:null,
		totPosco:null,
		totChildRelatedLaws:null,
		totCombinedTraining:null,
		totCpmis:null,
		totTrackChild:null,
		totClts:null,
		totOthers:null,
		totOthersSpecify:null,
		tabProjectCoordinatorCounsellor:null,
		tabSocialWorker:null,
		tabCareGiversBridgeCourseEducators:null,
		tabOutreachWorker:null,
		tabOthers:null,
		tabOthersSpecify:null,
		id:null
	}];

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
		if($scope.openShelterCCI.l1WastrainingHeld == 'true'){
			if((training.durationTraining == null ||
					training.trainingFromDate == null ||
					training.trainingToDate == null ||
					training.trainingOrganisedBy == null ||
					training.tabProjectCoordinatorCounsellor == null ||
					training.tabSocialWorker == null ||
					training.tabCareGiversBridgeCourseEducators == null ||
					training.tabOutreachWorker == null ||
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
	$scope.clearTopicOfTrainingOthers = function(model) {
		model.totOthersSpecify = null;
	};
	$scope.resetTABOthers = function(value) {
		if ($scope.trainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.trainingDetailsRepetitionArray[value].tabOthers == null) {
			$scope.trainingDetailsRepetitionArray[value].tabOthersSpecify = null;
		}
	};
	$scope.addNewDetails = function(){
		if($scope.validateNoOfTraining($scope.openShelterCCI.l1aNoTrainingHeld)){
			if (!accordionValidation($scope.trainingDetailsRepetitionArray[$scope.trainingDetailsRepetitionArray.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.openShelterCCI.l1aNoTrainingHeld!=undefined && $scope.openShelterCCI.l1aNoTrainingHeld <= 10){
			    	if($scope.trainingDetailsRepetitionArray.length < $scope.openShelterCCI.l1aNoTrainingHeld){
			    		$scope.trainingDetailsRepetitionArray[($scope.trainingDetailsRepetitionArray.length-1)+1] = JSON.parse(JSON.stringify($scope.trainingDetailsObject));
			    	}else{
			    		document.getElementById('maximumLimit10Error').innerHTML = "You can add maximum <b>"+$scope.openShelterCCI.l1aNoTrainingHeld+"</b> Training Details";
			    	}
			    	$timeout(function(){
			    	    document.getElementById('maximumLimit10Error').innerHTML = "";
			    	},2000);
				}
			}
		}
	};
	$scope.deleteConfirm = function(){
		document.getElementById("l1aNoTrainingHeld").blur();
		 if($scope.trainingDetailsRepetitionArray.length > 1 && $scope.openShelterCCI.l1aNoTrainingHeld >= $scope.trainingDetailsRepetitionArray.length
				 && $scope.openShelterCCI.l1aNoTrainingHeld!=undefined && $scope.openShelterCCI.l1aNoTrainingHeld <= 10){
		 $('#deleteAccordion').modal('show');
		 }
	 };
	
	$scope.deleteNewDetails = function(){
    	$scope.maximumLimit10 = false;
    	document.getElementById('maximumLimit10Error').innerHTML = "";
	    if($scope.trainingDetailsRepetitionArray.length > 1){
	    	$scope.trainingDetailsRepetitionArray.pop();
	    }
	};
	//(Pratyush)the following two functions are for set date for from and to dates dynamically respectively.
	$scope.openFromDatePicker = function(id){
		$("#trainingFromDatepicker"+id).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.trainingDetailsRepetitionArray[id].trainingFromDate = date;
			}
		});
	};
		
	$scope.openToDatePicker = function(id){
		$("#trainingToDatepicker"+id).datepicker({dateFormat: "dd-mm-yy",maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.trainingDetailsRepetitionArray[id].trainingToDate = date;
			}
		});
	};
	
	$scope.validateNoOfTraining = function(val){
		if(val == 0 || val == null){
			$scope.alertMessage = "Number of Trainings Held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.openShelterCCI.l1aNoTrainingHeld = $scope.trainingDetailsRepetitionArray.length;
			return false;
		}else if(val > 10){
			$scope.alertMessage = "Number of Trainings Held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.openShelterCCI.l1aNoTrainingHeld = $scope.trainingDetailsRepetitionArray.length;
			return false;
		}else if(val < $scope.trainingDetailsRepetitionArray.length){
			$scope.alertMessage = "Number of Trainings Held value should not be less than the number of trainings you added.";
			$('#alertModal').modal('show');
			$scope.openShelterCCI.l1aNoTrainingHeld = $scope.trainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	$scope.clearMsg = function(){
		$scope.alertMessage =undefined;
		$scope.messageField1=undefined;
		$scope.messageField2=undefined;
	};
	 //for reset to zero
	$scope.resetToZeroaccdopn = function(value){
		if (value == 'false'){
			$scope.trainingDetailsRepetitionArray=[{
				trainingId:null,
				durationTraining:null,
				trainingFromDate:null,
				trainingToDate:null,
				trainingOrganisedBy:null,
				traingOrganisedbyOthers:null,
				totJjAct:null,
				totPosco:null,
				totChildRelatedLaws:null,
				totCombinedTraining:null,
				totCpmis:null,
				totTrackChild:null,
				totClts:null,
				totOthers:null,
				totOthersSpecify:null,
				tabProjectCoordinatorCounsellor:null,
				tabSocialWorker:null,
				tabCareGiversBridgeCourseEducators:null,
				tabOutreachWorker:null,
				tabOthers:null,
				tabOthersSpecify:null,
				id:null
			}];

			$scope.openShelterCCI.l1aNoTrainingHeld = $scope.trainingDetailsRepetitionArray.length;
	};
	};
	
	//the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers = function(trainingDetails){
		if(trainingDetails.trainingOrganisedBy.typeDetailsId != 4)
			trainingDetails.traingOrganisedbyOthers = null;
	};

	//the following function is for resetting the date field on No select
	$scope.resetDate = function(value, datepickerId){
		$('#'+datepickerId).datepicker("setDate", null);
		
		if(datepickerId == 'meetingdatepicker')
			$scope.openShelterCCI.k15bCcMeetingDate = null;
		else if(datepickerId == 'homeManagementdatepicker')
			$scope.openShelterCCI.k16bHmMeetingDate = null;
		else if(datepickerId == 'Othermeetingdatepicker')
			$scope.openShelterCCI.k17bOtherDetailsDate = null;
	};

});