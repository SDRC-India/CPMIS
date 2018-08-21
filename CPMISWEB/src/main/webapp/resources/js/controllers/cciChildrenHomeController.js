cpmisApp.controller('cciChildrenHomeController', function($scope,$http,$timeout,$window, commonService){
	$scope.Number = Number;
	var currentUserId = Number(document.getElementById("uId").value);
	
	
	$http.get("getUserArea").
	then(function(result){
		$scope.selectedDistrict = result.data;
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
	$http.get("getCciNameList").
	then(function(result){
		$scope.cciNameList = result.data;
	},function(error){
		console.log(error);
	});
	$scope.messageField1="";
	$scope.messageField2="";
	$http.get("getDropdownItems").
	then(function(result){
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
		$scope.childSex = result.data.childSex;
		$scope.osType = result.data.osType;
		
	},function(error){
		console.log(error);
	});
	
	$scope.clearTopicOfTrainingOthers = function(model) {
		model.totOthersSpecify = null;
	};
	$scope.resetTABOthers = function(value) {
		if ($scope.cciChTrainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.cciChTrainingDetailsRepetitionArray[value].tabOthers == null) {
			$scope.cciChTrainingDetailsRepetitionArray[value].tabOthersSpecify = null;
		}
	};
	$scope.testCapacity=function(id){
		var value=Number(document.getElementById(id).value-0);
		if(value>500){
			$scope.childrenHome[id] = null;
			document.getElementById(id).blur();
			$('#ErrAlertModal').modal('show');
			$scope.messageField1="Capacity of the home : can not be more than 500";
			$scope.messageField2="";
			$scope.alertMessage = "";
		}
	};
	
	$scope.showHideBasedOnFlag=function(id,value){
		var idValue=document.getElementById(id).value;
		if(idValue>0)
			return true;
		else if (idValue == 0 || idValue == null) {
			$scope.childrenHome[value] = null;
			return false;
		}
			
	};
	// save and submit function starts
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
	function removeCommonFunctionBodyEqualToK14andK15(firstInput, secondInput, bgc1,bgc2) {
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
	var commonFunctionBodyEqualToK14andK15 = function(firstInput, secondInput, bgc1,bgc2) {

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
			sum = document.getElementById('d8Years0to6').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.8.Total no. of children referred(0-6)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(0-6)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='7-11'){
			sum = document.getElementById('d8Years7to11').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.8.Total no. of children referred(7-11)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(7-11)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='12-15'){
			sum = document.getElementById('d8Years12to15').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.8.Total no. of children referred(12-15)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(12-15)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='16-18'){
			sum = document.getElementById('d8Years16to18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.8.Total no. of children referred(16-18)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(16-18)years";
			$scope.alertMessage = "value can not exceed";
		}else if(yearRange=='>18'){
			sum = document.getElementById('d8YearsGreaterThan18').value;
			modelValue = document.getElementById(id).value;
			$scope.messageField1="D.8.Total no. of children referred(>18)years";
			$scope.messageField2="C.1.Age distribution of children in the reporting month(>18)years";
			$scope.alertMessage = "value can not exceed";
		}
		
		if(Number(sum) > Number(modelValue)){
			$scope.childrenHome[modelId] = null;
			$('#ErrAlertModal').modal('show');
		}
	};
	
	 $scope.checkD=function(){
	      var bgc=document.getElementById('d8Total');
	      var firstInput=Number(document.getElementById('cTotal').value-0);
	      var secondInput =Number(document.getElementById('d8Total').value-0);
	      $scope.messageField1="D.8.Total no. of children referred";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkF=function(){
	      var bgc=document.getElementById('fTotal');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("fTotal").value-0);
	      $scope.messageField1="F.1.Total children";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	    };
	    $scope.checkFMinority=function(){
	      var bgc=document.getElementById('fMinority');
	      var firstInput=Number(document.getElementById("fTotal").value-0);
	      var secondInput =Number(document.getElementById("fMinority").value-0);
	      $scope.messageField1="Total number of minority children";
	  	  $scope.messageField2="F.1.Total children";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkG=function(){
	      var bgc=document.getElementById('g8Total');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("g8Total").value-0);
	      $scope.messageField1="G.8.Total no. of children attending any educational programme";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	    };
	    $scope.checkH5=function(){
	      var bgc=document.getElementById('h5Total');
	      var secondInput=Number(document.getElementById("e1Total").value-0);
	      var firstInput =Number(document.getElementById("h5Total").value-0);
	      $scope.messageField1="H.5.Total children";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkI5=function(){
	      var bgc=document.getElementById('iTotalNumberTotal');
	      var secondInput=Number(document.getElementById("e1Total").value-0);
	      var firstInput =Number(document.getElementById("iTotalNumberTotal").value-0);
	      $scope.messageField1="I.8.Total";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	    };
	    $scope.checkJ1=function(){
	      var bgc=document.getElementById('j1TotalNumberTotal');
	      var firstInput=Number(document.getElementById("aTotal").value-0);
	      var secondInput =Number(document.getElementById("j1TotalNumberTotal").value-0);
	      $scope.messageField1="J.1.Children on the first day of the month";
	  	  $scope.messageField2="A.1.Age distribution of Children on the First day of the reporting month";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	     };
	    
	    $scope.checkJ2=function(){
	      var bgc=document.getElementById('j2TotalNumberTotal');
	      var firstInput=Number(document.getElementById("b3Total").value-0);
	      var secondInput =Number(document.getElementById("j2TotalNumberTotal").value-0);
	      $scope.messageField1="J.2.New children admitted in the month";
	  	  $scope.messageField2="B.3.Total No. of children Admitted";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	    };
	    $scope.checkJ3=function(){
	      var bgc=document.getElementById('j3TotalNumberTotal');
	      var firstInput=Number(document.getElementById("d8Total").value-0);
	      var secondInput =Number(document.getElementById("j3TotalNumberTotal").value-0);
	      $scope.messageField1="J.3.Children moved out in the month";
	  	  $scope.messageField2="D.8.Total no. of children referred";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkJ4=function(){
	      var bgc=document.getElementById('j4TotalNumberTotal');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("j4TotalNumberTotal").value-0);
	      $scope.messageField1="J.4.Total children on the Last day of the month";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value should be equal to";
	      return commonFunctionBodyEqualTo(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkK1=function(){
	      var bgc=document.getElementById('k1');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("k1").value-0);
	      $scope.messageField1="K.1.No. of adoptable children";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK2=function(){
	      var bgc=document.getElementById('k2');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("k2").value-0);
	      $scope.messageField1="K.2.No. of children with single parent";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK3=function(){
	      var bgc=document.getElementById('k3');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("k3").value-0);
	      $scope.messageField1="K.3.No. of children without parental care/without adult support";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK4=function(){
	      var bgc=document.getElementById('k4');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k4").value-0);
	      $scope.messageField1="K.4.No. of children referred by Dhawa Dal";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK5=function(){
	      var bgc=document.getElementById('k5');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k5").value-0);
	      $scope.messageField1="K.5.No. of children referred by Childline";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK6=function(){
	      var bgc=document.getElementById('k6');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k6").value-0);
	      $scope.messageField1="K.6.No. of children referred by NGO/Others";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK7=function(){
	      var bgc=document.getElementById('k7');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k7").value-0);
	      $scope.messageField1="K.7.No. of children referred by SJPU/Police/CWPO";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkK8=function(){
	      var bgc=document.getElementById('k8');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("k8").value-0);
	      $scope.messageField1="K.8.No. of children referred to Hospital/PHC/Clinics";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkK9=function(){
	      var bgc=document.getElementById('k9');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k9").value-0);
	      $scope.messageField1="K.9.No. of children transferred to home within the state";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkK10=function(){
	      var bgc=document.getElementById('k10');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k10").value-0);
	      $scope.messageField1="K.10.No. of children transferred to home outside the state";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    
	    $scope.checkK13=function(){
	      var bgc=document.getElementById('k13');
	      var firstInput=Number(document.getElementById("e1Total").value-0);
	      var secondInput =Number(document.getElementById("k13").value-0);
	      $scope.messageField1="K.13.No. of children referred for psychiatric treatment";
	  	  $scope.messageField2="E.1.Age distribution of children on the last day of the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    
		$scope.checkK14n15 = function() {
			var bgc1 = document.getElementById('k14');
			var bgc2 = document.getElementById('k15');
			var firstInput = Number(document.getElementById("e1Total").value - 0);
			var firstK11 = Number(document.getElementById("k14").value - 0);
			var secondK12 = Number(document.getElementById("k15").value - 0);
			var secondInput = firstK11 + secondK12;
			$scope.messageField1="Sum of K.14.No. of first time admissions children and K.15.No. of multiple admissions children";
		  	$scope.messageField2="E.1.Age distribution of children on the last day of the reporting month( value= "+firstInput+")";
			$scope.alertMessage = "value should be equal to";
			return commonFunctionBodyEqualToK14andK15(firstInput, secondInput, bgc1,bgc2);
		};
		
		var removeCheckK14n15 = function() {
			var bgc1 = document.getElementById('k14');
			var bgc2 = document.getElementById('k15');
			var firstInput = Number(document.getElementById("e1Total").value - 0);
			var firstK11 = Number(document.getElementById("k14").value - 0);
			var secondK12 = Number(document.getElementById("k15").value - 0);
			var secondInput = firstK11 + secondK12;
			return removeCommonFunctionBodyEqualToK14andK15(firstInput, secondInput, bgc1,bgc2);
		};
	    
	    $scope.checkK16=function(){
	      var bgc=document.getElementById('k16');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k16").value-0);
	      $scope.messageField1="K.16.No. of children sent for After care";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK17=function(){
	      var bgc=document.getElementById('k17');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k17").value-0);
	      $scope.messageField1="K.17.No. of entries on Track Child Portal";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkK19=function(){
	      var bgc=document.getElementById('k19');
	      var firstInput=Number(document.getElementById("cTotal").value-0);
	      var secondInput =Number(document.getElementById("k19").value-0);
	      $scope.messageField1="K.19.No. of children sent for Sponsorship";
	  	  $scope.messageField2="C.1.Age distribution of children in the reporting month";
	      $scope.alertMessage="value can not exceed";
	      return commonFunctionBody(firstInput,secondInput,bgc);
	    };
	    $scope.checkJNegetive=function(currentId,targetId,msg){
			var bgc = document.getElementById(currentId);
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
				$scope.childrenHome[currentId] = null;
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
		  	$scope.messageField2="J.3.Children moved out in the month "+msg+" children";
			$scope.alertMessage = "value can not be less than";		
			if (firstInput < secondInput) {
				bgc.style.setProperty("background-color", "#DC143C", "important");
				bgc.style.setProperty("color", "#FFFAF0", "important");
				bgc.style.setProperty("border-color", "red", "important");
				bgc.value=null;
				bgc1.value=null;
				$scope.childrenHome[currentId] = null;
				$scope.childrenHome[j3Id] = null;
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

	    $("input[type='number']").keyup(function()
	    {
	    	checkD();checkF();checkFMinority();checkG();checkH5();checkI5();checkJ1();checkJ2();checkJ3();checkJ4();removeCheckK14n15();removeNegetiveColor();
	    });

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
		$scope.validateWithE = function(a, b, model, eId, yearRange, id){
			if(!$('#ErrAlertModal').hasClass('in')){
				var eVal = Number(document.getElementById(eId).value);
				if(eVal < 0){
					$scope.messageField1=commonService.cci_e_negetive_err_msg(yearRange);
					$scope.messageField2="";
					$scope.alertMessage = "";
					
					$scope.childrenHome[model] = valObj.oldVal;
					$('html,body').animate({scrollTop : $('#'+id).offset().top - 250}, 'slow');
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
		angular.forEach($scope.childrenHome, function(value, index) {
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
	    
		//save and submit check method
		
		$scope.checkSave= function() {
	         
			$scope.saveCH($scope.childrenHome, 'save');
		};
		$scope.checkSubmit= function() {
			
			 if(!$scope.checkD()){}
	         else if(!$scope.checkF()){}
	         else if(!$scope.checkFMinority()){}        
	         else if(!$scope.checkG()){}
	         else if(!$scope.checkH5()){}
	         else if(!$scope.checkI5()){}
	         else if(!$scope.checkJ1()){}        
	         else if(!$scope.checkJ2()){}
	         else if(!$scope.checkJ3()){}        
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
	         else if(!$scope.checkK13()){}
	         else if(!$scope.checkK14n15()){}
	         else if(!$scope.checkK16()){}
	         else if(!$scope.checkK17()){}
	         else if(!$scope.checkK19()){}
	         else if(($scope.childrenHome.k19aMeetingChildrenCommittee == 'true') && ($scope.childrenHome.k19ccMeetingDate == null || $scope.childrenHome.k19ccMeetingDate == undefined)){
	        	 document.getElementById("meetingdatepicker").focus();
	         } else if(($scope.childrenHome.k20aMeetingHomeManagementCommittee == 'true')&& ($scope.childrenHome.k20hmMeetingDate == null || $scope.childrenHome.k20hmMeetingDate == undefined)){
	        	 document.getElementById("homeManagementdatepicker").focus();
	         } else if(($scope.childrenHome.k21aAnyOthersDetails == 'true')&& ($scope.childrenHome.k21OtherDetailsDate == null || $scope.childrenHome.k21OtherDetailsDate == undefined)){
	        	 document.getElementById("Othermeetingdatepicker").focus();
	         }
			 else{
				 $scope.saveCH($scope.childrenHome, 'submit');
			 }
		
		};	
	
	// save and submit functions validation ends
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
	$(".loader").show();
	
	var todaysDate;
	var lastDay;
    var firstDay;	
	
	$("#meetingdatepicker1").on("click", function(){
		$("#meetingdatepicker").focus();
	});
	
	$("#homeManagementdatepicker1").on("click", function(){
		$("#homeManagementdatepicker").focus();
	});
	
	$("#Othermeetingdatepicker1").on("click", function(){
		$("#Othermeetingdatepicker").focus();
	});
	$scope.childrenHome = {};
	
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
	var prepareObj = function(childrenHome){
		childrenHome.typeOfHome=document.getElementById('typeOfHomeId').value;
		childrenHome.aTotal=parseInt(document.getElementById('aTotal').value)==0?null:parseInt(document.getElementById('aTotal').value);                     
		childrenHome.b1Total=parseInt(document.getElementById('b1Total').value);                        
		childrenHome.b2Total=parseInt(document.getElementById('b2Total').value);                        
		childrenHome.b3Years0to6=parseInt(document.getElementById('b3Years0to6').value);
		childrenHome.b3Years7to11=parseInt(document.getElementById('b3Years7to11').value);
		childrenHome.b3Years12to15=parseInt(document.getElementById('b3Years12to15').value);
		childrenHome.b3Years16to18=parseInt(document.getElementById('b3Years16to18').value);
		childrenHome.b3YearsGreaterThan18=parseInt(document.getElementById('b3YearsGreaterThan18').value);
		childrenHome.b3Total=parseInt(document.getElementById('b3Total').value);                        
		childrenHome.cYears0to6=parseInt(document.getElementById('cYears0to6').value);
		childrenHome.cYears7to11=parseInt(document.getElementById('cYears7to11').value);
		childrenHome.cYears12to15=parseInt(document.getElementById('cYears12to15').value);
		childrenHome.cYears16to18=parseInt(document.getElementById('cYears16to18').value);
		childrenHome.cYearsGreaterThan18=parseInt(document.getElementById('cYearsGreaterThan18').value);
		childrenHome.cTotal=parseInt(document.getElementById('cTotal').value);
		childrenHome.d1Total=parseInt(document.getElementById('d1Total').value);
		childrenHome.d2Total=parseInt(document.getElementById('d2Total').value);
		childrenHome.d3Total=parseInt(document.getElementById('d3Total').value);
		childrenHome.d4Total=parseInt(document.getElementById('d4Total').value);
		childrenHome.d5Total=parseInt(document.getElementById('d5Total').value);
		childrenHome.d6Total=parseInt(document.getElementById('d6Total').value);
		childrenHome.d7aTotal=parseInt(document.getElementById('d7aTotal').value);
		childrenHome.d8Years0to6=parseInt(document.getElementById('d8Years0to6').value);
		childrenHome.d8Years7to11=parseInt(document.getElementById('d8Years7to11').value);
		childrenHome.d8Years12to15=parseInt(document.getElementById('d8Years12to15').value);
		childrenHome.d8Years16to18=parseInt(document.getElementById('d8Years16to18').value);
		childrenHome.d8YearsGreaterThan18=parseInt(document.getElementById('d8YearsGreaterThan18').value);
		childrenHome.d8Total=parseInt(document.getElementById('d8Total').value);
		childrenHome.e1Years0to6=parseInt(document.getElementById('e1Years0to6').value);
		childrenHome.e1Years7to11=parseInt(document.getElementById('e1Years7to11').value);
		childrenHome.e1Years12to15=parseInt(document.getElementById('e1Years12to15').value);
		childrenHome.e1Years16to18=parseInt(document.getElementById('e1Years16to18').value);
		childrenHome.e1YearsGreaterThan18=parseInt(document.getElementById('e1YearsGreaterThan18').value);
		childrenHome.e1Total=parseInt(document.getElementById('e1Total').value);
		childrenHome.fTotal=parseInt(document.getElementById('fTotal').value);
		childrenHome.g1Total=parseInt(document.getElementById('g1Total').value);
		childrenHome.g2Total=parseInt(document.getElementById('g2Total').value);
		childrenHome.g3Total=parseInt(document.getElementById('g3Total').value);
		childrenHome.g4Total=parseInt(document.getElementById('g4Total').value);
		childrenHome.g5Total=parseInt(document.getElementById('g5Total').value);
		childrenHome.g6Total=parseInt(document.getElementById('g6Total').value);
		childrenHome.g7Total=parseInt(document.getElementById('g7Total').value);
		childrenHome.g8Years0to6=parseInt(document.getElementById('g8Years0to6').value);
		childrenHome.g8Years7to11=parseInt(document.getElementById('g8Years7to11').value);
		childrenHome.g8Years12to15=parseInt(document.getElementById('g8Years12to15').value);
		childrenHome.g8Years16to18=parseInt(document.getElementById('g8Years16to18').value);
		childrenHome.g8YearsGreaterThan18=parseInt(document.getElementById('g8YearsGreaterThan18').value);
		childrenHome.g8Total=parseInt(document.getElementById('g8Total').value);
		childrenHome.h1Total=parseInt(document.getElementById('h1Total').value);
		childrenHome.h2Total=parseInt(document.getElementById('h2Total').value);
		childrenHome.h3Total=parseInt(document.getElementById('h3Total').value);
		childrenHome.h4Total=parseInt(document.getElementById('h4Total').value);
		childrenHome.h5Years0to6=parseInt(document.getElementById('h5Years0to6').value);
		childrenHome.h5Years7to11=parseInt(document.getElementById('h5Years7to11').value);
		childrenHome.h5Years12to15=parseInt(document.getElementById('h5Years12to15').value);
		childrenHome.h5Years16to18=parseInt(document.getElementById('h5Years16to18').value);
		childrenHome.h5YearsGreaterThan18=parseInt(document.getElementById('h5YearsGreaterThan18').value);
		childrenHome.h5Total=parseInt(document.getElementById('h5Total').value);
		childrenHome.iOrphanTotal=parseInt(document.getElementById('iOrphanTotal').value);
		childrenHome.iRunAwayTotal=parseInt(document.getElementById('iRunAwayTotal').value);
		childrenHome.iLegallYFreeForAdoptionTotal=parseInt(document.getElementById('iLegallYFreeForAdoptionTotal').value);
		childrenHome.iChildLabourTotal=parseInt(document.getElementById('iChildLabourTotal').value);
		childrenHome.iTraffickedTotal=parseInt(document.getElementById('iTraffickedTotal').value);
		childrenHome.iVicxtimOfSexualTotal=parseInt(document.getElementById('iVicxtimOfSexualTotal').value);
		childrenHome.iOtherChildrenTotal=parseInt(document.getElementById('iOtherChildrenTotal').value);
		childrenHome.iTotal0to30Days=parseInt(document.getElementById('iTotal0to30Days').value);
		childrenHome.iTotalMonths1to2=parseInt(document.getElementById('iTotalMonths1to2').value);
		childrenHome.iTotalMonths2to3=parseInt(document.getElementById('iTotalMonths2to3').value);
		childrenHome.iTotalMonths3to4=parseInt(document.getElementById('iTotalMonths3to4').value);
		childrenHome.iTotalMonths4to12=parseInt(document.getElementById('iTotalMonths4to12').value);
		childrenHome.iTotalMonthsMoreThan1Year=parseInt(document.getElementById('iTotalMonthsMoreThan1Year').value);
		childrenHome.iTotalNumberTotal=parseInt(document.getElementById('iTotalNumberTotal').value);
		childrenHome.j1TotalNumberTotal=parseInt(document.getElementById('j1TotalNumberTotal').value);
		childrenHome.j2TotalNumberTotal=parseInt(document.getElementById('j2TotalNumberTotal').value);
		childrenHome.j3TotalNumberTotal=parseInt(document.getElementById('j3TotalNumberTotal').value);
		childrenHome.j4Total0to30Days=parseInt(document.getElementById('j4Total0to30Days').value);
		childrenHome.j4TotalMonths1to2=parseInt(document.getElementById('j4TotalMonths1to2').value);
		childrenHome.j4TotalMonths2to3=parseInt(document.getElementById('j4TotalMonths2to3').value);
		childrenHome.j4TotalMonths3to4=parseInt(document.getElementById('j4TotalMonths3to4').value);
		childrenHome.j4TotalMonths4to12=parseInt(document.getElementById('j4TotalMonths4to12').value);
		childrenHome.j4TotalMonthsMoreThan1Year=parseInt(document.getElementById('j4TotalMonthsMoreThan1Year').value);
		childrenHome.j4TotalNumberTotal=parseInt(document.getElementById('j4TotalNumberTotal').value);
		for(var i=0; i<childrenHome.cciChildrenHomeTrainings.length;i++){
			if(childrenHome.cciChildrenHomeTrainings[i].trainingOrganisedBy != null || childrenHome.cciChildrenHomeTrainings[i].trainingOrganisedBy != undefined)
				childrenHome.cciChildrenHomeTrainings[i].trainingOrganisedBy = childrenHome.cciChildrenHomeTrainings[i].trainingOrganisedBy.typeDetailsId;
			
		}
		childrenHome.userId = Number(document.getElementById("uId").value);
	};
	var submitted = false;
	$scope.saveCH = function(childrenHome, clickType, submitConfirm){
		$(".loader").show();
		if($scope.selectedDistrict != undefined)
			childrenHome.districtId = $scope.selectedDistrict.areaId;
		if($scope.selectedOsType != undefined)
			childrenHome.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if($scope.selectedChildSex != undefined)
			childrenHome.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;
		
		childrenHome.nameOfCCI =  $scope.cciNameList.cciName;
		childrenHome.cciChildrenHomeTrainings = $scope.cciChTrainingDetailsRepetitionArray;
		
		//sending the data to server
		if(clickType == 'save'){
				prepareObj(childrenHome);
				$http.post('saveCciChildrenHome', childrenHome).
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
			//}	
		}else if(clickType=='submit' && submitted == false){
			$(".loader").fadeOut();
			if(!$scope.childrenHome.cciChildrenHomeTrainings.length<1){
				for(var i=0;i<$scope.childrenHome.cciChildrenHomeTrainings.length;i++){
					if (!accordionValidation($scope.childrenHome.cciChildrenHomeTrainings[i])) {
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
			
			if (!accordionValidation($scope.childrenHome.cciChildrenHomeTrainings[$scope.childrenHome.cciChildrenHomeTrainings.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage = "";
				$(".loader").fadeOut();
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
			prepareObj(childrenHome);
			$http.post('submitCciChildrenHome', childrenHome).
			then(function(result){
				if(result.status == 200){
					$scope.success_msg = commonService.messages.submit_success_msg+childrenHome.timeperiod.timePeriod;
					$('#confirmationModalForCCCH').modal('show');
				}
			},function(error){
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
	$scope.autoSaveCH = function(childrenHome, clickType){
		if($scope.selectedDistrict != undefined)
			childrenHome.districtId = $scope.selectedDistrict.areaId;
		if($scope.selectedOsType != undefined)
			childrenHome.govtNonGovt = $scope.selectedOsType.typeDetailsId;
		if($scope.selectedChildSex != undefined)
			childrenHome.typeOfInstitutions = $scope.selectedChildSex.typeDetailsId;
		
		childrenHome.nameOfCCI =  $scope.cciNameList.cciName;
		childrenHome.cciChildrenHomeTrainings = $scope.cciChTrainingDetailsRepetitionArray;
		
		//sending the data to server
		if(clickType == 'save'){
				prepareObj(childrenHome);
				$http.post('autoSaveCciChildrenHome', childrenHome).
				then(function(result){
					if(result.status == 200){
						$(".loader").fadeOut();
						$('#successModalForAutoSaveCH').modal('show');
					}
				},function(error){
					commonService.checkSessionOut(error);
					console.log(error);
				});
			}
	};	
	//getting refresh on saving 
	
	$scope.refreshPage = function(){
		 $window.location.reload();
	};
	
	// type number will not accept exponential(e) @Swarna
	 $(".removeExponentialValueE").keypress(function(event) {
       if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
           return false;
       }
   });
	//fixed section bar
		
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
	        	$scope.autoSaveCH($scope.childrenHome, 'save');
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
	$http.post("getLastSavedCciChildrenHomeData", currentUserId).
	then(function(result){
		if(result.data != "")
	$scope.childrenHome = result.data;
		if(!$scope.childrenHome.submitted)
			$scope.timerForSave($scope,$timeout);
		if($scope.childrenHome.submitted){
			$scope.messageField1="";
			$scope.messageField2="";
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		
		todaysDate = new Date($scope.childrenHome.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
		$(".accordionFromDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if(this.id.startsWith("trainingFromDatepicker")){
					if($scope.cciChTrainingDetailsRepetitionArray[0].trainingToDate != null && $scope.cciChTrainingDetailsRepetitionArray[0].trainingToDate != undefined){
						var fromDay = new Date(dateConvert(date));
						var toDay = new Date(dateConvert($scope.cciChTrainingDetailsRepetitionArray[0].trainingToDate));
						if(toDay < fromDay){
							var index = this.id.split('trainingFromDatepicker')[1];
							$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
							$scope.messageField2="";
							$scope.alertMessage = "";
			            	$scope.$apply();
			    			$('#ErrAlertModal').modal('show');
			    			$("#trainingToDatepicker"+index).val(null);
			    			$scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate = null;
			            }
					}
					$scope.cciChTrainingDetailsRepetitionArray[0].trainingFromDate = date;
	            }else if(this.id.startsWith("trainingToDatepicker")){
	            	checkDate(date, 0);
	            }
	        },
		});
		$("#datepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.childrenHome.monthyear = date;
			}	
		});
		
		$("#trainingDatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.childrenHome.j1cDateTraining = date;
			}	
		});

	    $("#meetingdatepicker").datepicker({dateFormat: "dd-mm-yy",maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.childrenHome.k19ccMeetingDate = date;
			}	
		});

		$("#homeManagementdatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.childrenHome.k20hmMeetingDate = date;
			}	
		});

		$("#Othermeetingdatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.childrenHome.k21OtherDetailsDate = date;
			}	
		});
		$timeout(function(){
			
			$scope.childrenHome.nameOfCCI = $scope.cciNameList.cciName;
			for(var i=0; i<$scope.childSex.length;i++){
				if($scope.childrenHome.typeOfInstitutions == $scope.childSex[i].typeDetailsId)
					$scope.selectedChildSex = $scope.childSex[i];
			}
			for(var i=0; i<$scope.osType.length;i++){
				if($scope.childrenHome.govtNonGovt == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType = $scope.osType[i];
			}
			$scope.childrenHome.l1wasTrainingHeld = $scope.childrenHome.l1wasTrainingHeld == undefined?null:$scope.childrenHome.l1wasTrainingHeld.toString();
			$scope.childrenHome.k19aMeetingChildrenCommittee = $scope.childrenHome.k19aMeetingChildrenCommittee == undefined?null:$scope.childrenHome.k19aMeetingChildrenCommittee.toString();
			$scope.childrenHome.k20aMeetingHomeManagementCommittee = $scope.childrenHome.k20aMeetingHomeManagementCommittee == undefined?null:$scope.childrenHome.k20aMeetingHomeManagementCommittee.toString();
			$scope.childrenHome.k21aAnyOthersDetails = $scope.childrenHome.k21aAnyOthersDetails == undefined?null:$scope.childrenHome.k21aAnyOthersDetails.toString();
			if($scope.childrenHome.cciChildrenHomeTrainings != null || $scope.childrenHome.cciChildrenHomeTrainings != undefined)
				$scope.cciChTrainingDetailsRepetitionArray = $scope.childrenHome.cciChildrenHomeTrainings;
			
			if($scope.childrenHome.cciChildrenHomeTrainings != undefined){
				for(var i=0;i<$scope.childrenHome.cciChildrenHomeTrainings.length;i++){
					$("#trainingFromDatepicker"+i).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
						minDate : firstDay,});
					$("#trainingToDatepicker"+i).datepicker({dateFormat: "dd-mm-yy",maxDate : lastDay,
						minDate : firstDay,});
					
					for(var j=0; j<$scope.trainingOrganisedBy.length; j++){
						if($scope.trainingOrganisedBy[j].typeDetailsId == $scope.childrenHome.cciChildrenHomeTrainings[i].trainingOrganisedBy){
							$scope.cciChTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			$(".loader").fadeOut();
		},500);
		$timeout(function(){
			$scope.childrenHome.l1aNoTrainingHeld = $scope.cciChTrainingDetailsRepetitionArray.length; 
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
		$scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate = date;
		if($scope.cciChTrainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.cciChTrainingDetailsRepetitionArray[index].trainingFromDate != undefined){
			var fromDay = new Date(dateConvert($scope.cciChTrainingDetailsRepetitionArray[index].trainingFromDate));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
				$scope.messageField2="";
				$scope.alertMessage = "";
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate = null;
            }
		}else{
			$scope.messageField1=commonService.messages.select_training_from;
			$scope.messageField2="";
			$scope.alertMessage = "";
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate = null;
		}
	};
	//the following function is for initialization and setting the dates in date pickers.Pratyush
	$scope.initializeDatePicker = function(index){
		$("#trainingFromDatepicker"+index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
	            if($scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate != null && $scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
						$scope.messageField1=commonService.messages.training_to_not_les_than_training_from;
						$scope.messageField2="";
						$scope.alertMessage = "";
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.cciChTrainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.cciChTrainingDetailsRepetitionArray[index].trainingFromDate = date;
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
	
	/* Accordian add new Functions(sswayamprava.sdrc.co.in) */

	$scope.CciChTrainingDetailsObject = {
		trainingId:null,
		chId:null,
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
		tabSuperintendent:null,
		tabProbationOfficerCaseWorker:null,
		tabCounsellor:null,
		tabHouseFatherMother:null,
		tabStoreKeeperCumAccountant:null,
		tabParamedicalStaff:null,
		tabOthers:null,
		tabOthersSpecify:null
	};
	$scope.cciChTrainingDetailsRepetitionArray = [{
		trainingId:null,
		chId:null,
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
		tabSuperintendent:null,
		tabProbationOfficerCaseWorker:null,
		tabCounsellor:null,
		tabHouseFatherMother:null,
		tabStoreKeeperCumAccountant:null,
		tabParamedicalStaff:null,
		tabOthers:null,
		tabOthersSpecify:null
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
		if($scope.childrenHome.l1wasTrainingHeld == 'true'){
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
		if($scope.validateNoOfTraining($scope.childrenHome.l1aNoTrainingHeld)){
			if (!accordionValidation($scope.cciChTrainingDetailsRepetitionArray[$scope.cciChTrainingDetailsRepetitionArray.length - 1])) {
				$scope.messageField1=commonService.messages.add_all_training_details;
				$scope.messageField2="";
				$scope.alertMessage =""; 
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.childrenHome.l1aNoTrainingHeld!=undefined && $scope.childrenHome.l1aNoTrainingHeld <= 10){
					if ($scope.cciChTrainingDetailsRepetitionArray.length < $scope.childrenHome.l1aNoTrainingHeld) {
						$scope.cciChTrainingDetailsRepetitionArray[($scope.cciChTrainingDetailsRepetitionArray.length - 1) + 1] = JSON
								.parse(JSON
										.stringify($scope.CciChTrainingDetailsObject));
					} else {
						document.getElementById('maximumLimit10Error').innerHTML = "You can add maximum <b>" + $scope.childrenHome.l1aNoTrainingHeld + "</b> training details";
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
		 if ($scope.cciChTrainingDetailsRepetitionArray.length > 1 && $scope.childrenHome.l1aNoTrainingHeld >= $scope.cciChTrainingDetailsRepetitionArray.length
				 && $scope.childrenHome.l1aNoTrainingHeld!=undefined && $scope.childrenHome.l1aNoTrainingHeld <= 10){
			 $('#deleteAccordion').modal('show');
		 }
			
	 };
	
	$scope.deleteNewDetails = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
		if ($scope.cciChTrainingDetailsRepetitionArray.length > 1) {
			$scope.cciChTrainingDetailsRepetitionArray.pop();
		}
	};



	//Function for set date for from and to dates dynamically respectively.
	
	$scope.openFromDatePicker = function(id){
		$("#trainingFromDatepicker"+id).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.cciChTrainingDetailsRepetitionArray[id].trainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id){
		$("#trainingToDatepicker"+id).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.cciChTrainingDetailsRepetitionArray[id].trainingToDate = date;
			}
		});
	};   

	$scope.validateNoOfTraining = function(val){
		if(val == 0 || val == null){
			$scope.alertMessage = "Number of trainings held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.childrenHome.l1aNoTrainingHeld = $scope.cciChTrainingDetailsRepetitionArray.length;
			return false;
		}else if(val > 10){
			$scope.alertMessage = "Number of trainings held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.childrenHome.l1aNoTrainingHeld = $scope.cciChTrainingDetailsRepetitionArray.length;
			return false;
		}else if(val < $scope.cciChTrainingDetailsRepetitionArray.length){
			$scope.alertMessage = "Number of trainings held value should not be less than the number of trainings you added.";
			$('#alertModal').modal('show');
			$scope.childrenHome.l1aNoTrainingHeld = $scope.cciChTrainingDetailsRepetitionArray.length;
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
 
	$scope.resetToZeroaccdhome = function(value){
		if (value == 'false'){
			$scope.cciChTrainingDetailsRepetitionArray = [{
				trainingId:null,
				chId:null,
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
				tabSuperintendent:null,
				tabProbationOfficerCaseWorker:null,
				tabCounsellor:null,
				tabHouseFatherMother:null,
				tabStoreKeeperCumAccountant:null,
				tabParamedicalStaff:null,
				tabOthers:null,
				tabOthersSpecify:null
			}];
		}
		$scope.childrenHome.l1aNoTrainingHeld = $scope.cciChTrainingDetailsRepetitionArray.length;
	};



	//the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers = function(CciChTrainingDetails){
		if(CciChTrainingDetails.trainingOrganisedBy.typeDetailsId != 4)
			CciChTrainingDetails.traingOrganisedbyOthers = null;
	};


	$scope.resetToZeroaccdcci= function(value){
		if (value == 'false'){
			$scope.cciChTrainingDetailsRepetitionArray = [{
				trainingId:null,
				chId:null,
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
				tabSuperintendent:null,
				tabProbationOfficerCaseWorker:null,
				tabCounsellor:null,
				tabHouseFatherMother:null,
				tabStoreKeeperCumAccountant:null,
				tabParamedicalStaff:null,
				tabOthers:null,
				tabOthersSpecify:null
			}];
	
		}
		$scope.childrenHome.l1aNoTrainingHeld = $scope.cciChTrainingDetailsRepetitionArray.length;
	};


	//the following function is for resetting the date field on No select
	$scope.resetDate = function(datepickerId){
		$('#'+datepickerId).datepicker("setDate", null);
		if(datepickerId == 'meetingdatepicker')
			$scope.childrenHome.k19ccMeetingDate = null;
		else if(datepickerId == 'homeManagementdatepicker')
			$scope.childrenHome.k20hmMeetingDate = null;
		else if(datepickerId == 'Othermeetingdatepicker')
			$scope.childrenHome.k21OtherDetailsDate = null;
	};
	
});