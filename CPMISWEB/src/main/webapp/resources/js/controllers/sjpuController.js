cpmisApp.controller('SJPU_Controller', function($scope, $http, $timeout, $window, commonService) {
	$(".loader").show();
	$scope.Number = Number;
	var currentUserId = Number(document.getElementById("uId").value);

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

	$("#officeAddress").keyup(function() {
		if ($(this).val().length >= 150) {
			$scope.alertMessageShow = "You have reached a limit of 150 characters";
			$('#ErrAlertModal').modal('show');
			window.setTimeout(function() {
				bgc.focus();
			}, 0);
		}
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
	$scope.resetAccG = function(value) {
		if ($scope.sjpuTrainingDetailsRepetitionArray[value].tabOthers == 0 || $scope.sjpuTrainingDetailsRepetitionArray[value].tabOthers == null) {
			$scope.sjpuTrainingDetailsRepetitionArray[value].tabOthersSpecify = null;
		}
	};
	//
	$scope.resetA1 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a1BoysYears0to6 = null;
			$scope.sjpuForm.a1BoysYears7to11 = null;
			$scope.sjpuForm.a1BoysYears12to15 = null;
			$scope.sjpuForm.a1BoysYears16to18 = null;
			$scope.sjpuForm.a1BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a1GirlsYears0to6 = null;
			$scope.sjpuForm.a1GirlsYears7to11 = null;
			$scope.sjpuForm.a1GirlsYears12to15 = null;
			$scope.sjpuForm.a1GirlsYears16to18 = null;
			$scope.sjpuForm.a1GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetA2 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a2BoysYears0to6 = null;
			$scope.sjpuForm.a2BoysYears7to11 = null;
			$scope.sjpuForm.a2BoysYears12to15 = null;
			$scope.sjpuForm.a2BoysYears16to18 = null;
			$scope.sjpuForm.a2BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a2GirlsYears0to6 = null;
			$scope.sjpuForm.a2GirlsYears7to11 = null;
			$scope.sjpuForm.a2GirlsYears12to15 = null;
			$scope.sjpuForm.a2GirlsYears16to18 = null;
			$scope.sjpuForm.a2GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetA3 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a3BoysYears0to6 = null;
			$scope.sjpuForm.a3BoysYears7to11 = null;
			$scope.sjpuForm.a3BoysYears12to15 = null;
			$scope.sjpuForm.a3BoysYears16to18 = null;
			$scope.sjpuForm.a3BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a3GirlsYears0to6 = null;
			$scope.sjpuForm.a3GirlsYears7to11 = null;
			$scope.sjpuForm.a3GirlsYears12to15 = null;
			$scope.sjpuForm.a3GirlsYears16to18 = null;
			$scope.sjpuForm.a3GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetA4 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a4BoysYears0to6 = null;
			$scope.sjpuForm.a4BoysYears7to11 = null;
			$scope.sjpuForm.a4BoysYears12to15 = null;
			$scope.sjpuForm.a4BoysYears16to18 = null;
			$scope.sjpuForm.a4BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a4GirlsYears0to6 = null;
			$scope.sjpuForm.a4GirlsYears7to11 = null;
			$scope.sjpuForm.a4GirlsYears12to15 = null;
			$scope.sjpuForm.a4GirlsYears16to18 = null;
			$scope.sjpuForm.a4GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetA5 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a5BoysYears0to6 = null;
			$scope.sjpuForm.a5BoysYears7to11 = null;
			$scope.sjpuForm.a5BoysYears12to15 = null;
			$scope.sjpuForm.a5BoysYears16to18 = null;
			$scope.sjpuForm.a5BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a5GirlsYears0to6 = null;
			$scope.sjpuForm.a5GirlsYears7to11 = null;
			$scope.sjpuForm.a5GirlsYears12to15 = null;
			$scope.sjpuForm.a5GirlsYears16to18 = null;
			$scope.sjpuForm.a5GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetA6 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a6BoysYears0to6 = null;
			$scope.sjpuForm.a6BoysYears7to11 = null;
			$scope.sjpuForm.a6BoysYears12to15 = null;
			$scope.sjpuForm.a6BoysYears16to18 = null;
			$scope.sjpuForm.a6BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a6GirlsYears0to6 = null;
			$scope.sjpuForm.a6GirlsYears7to11 = null;
			$scope.sjpuForm.a6GirlsYears12to15 = null;
			$scope.sjpuForm.a6GirlsYears16to18 = null;
			$scope.sjpuForm.a6GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetA7 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.a7BoysYears0to6 = null;
			$scope.sjpuForm.a7BoysYears7to11 = null;
			$scope.sjpuForm.a7BoysYears12to15 = null;
			$scope.sjpuForm.a7BoysYears16to18 = null;
			$scope.sjpuForm.a7BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.a7GirlsYears0to6 = null;
			$scope.sjpuForm.a7GirlsYears7to11 = null;
			$scope.sjpuForm.a7GirlsYears12to15 = null;
			$scope.sjpuForm.a7GirlsYears16to18 = null;
			$scope.sjpuForm.a7GirlsYearsGreaterThan18 = null;
		}
	};

	//B

	$scope.resetB1 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.b1BoysYears0to6 = null;
			$scope.sjpuForm.b1BoysYears7to11 = null;
			$scope.sjpuForm.b1BoysYears12to15 = null;
			$scope.sjpuForm.b1BoysYears16to18 = null;
			$scope.sjpuForm.b1BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.b1GirlsYears0to6 = null;
			$scope.sjpuForm.b1GirlsYears7to11 = null;
			$scope.sjpuForm.b1GirlsYears12to15 = null;
			$scope.sjpuForm.b1GirlsYears16to18 = null;
			$scope.sjpuForm.b1GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetB2 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.b2BoysYears0to6 = null;
			$scope.sjpuForm.b2BoysYears7to11 = null;
			$scope.sjpuForm.b2BoysYears12to15 = null;
			$scope.sjpuForm.b2BoysYears16to18 = null;
			$scope.sjpuForm.b2BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.b2GirlsYears0to6 = null;
			$scope.sjpuForm.b2GirlsYears7to11 = null;
			$scope.sjpuForm.b2GirlsYears12to15 = null;
			$scope.sjpuForm.b2GirlsYears16to18 = null;
			$scope.sjpuForm.b2GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetB3 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.b3BoysYears0to6 = null;
			$scope.sjpuForm.b3BoysYears7to11 = null;
			$scope.sjpuForm.b3BoysYears12to15 = null;
			$scope.sjpuForm.b3BoysYears16to18 = null;
			$scope.sjpuForm.b3BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.b3GirlsYears0to6 = null;
			$scope.sjpuForm.b3GirlsYears7to11 = null;
			$scope.sjpuForm.b3GirlsYears12to15 = null;
			$scope.sjpuForm.b3GirlsYears16to18 = null;
			$scope.sjpuForm.b3GirlsYearsGreaterThan18 = null;
		}
	};

	// c

	$scope.resetC1 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.c1BoysYears0to6 = null;
			$scope.sjpuForm.c1BoysYears7to11 = null;
			$scope.sjpuForm.c1BoysYears12to15 = null;
			$scope.sjpuForm.c1BoysYears16to18 = null;
			$scope.sjpuForm.c1BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.c1GirlsYears0to6 = null;
			$scope.sjpuForm.c1GirlsYears7to11 = null;
			$scope.sjpuForm.c1GirlsYears12to15 = null;
			$scope.sjpuForm.c1GirlsYears16to18 = null;
			$scope.sjpuForm.c1GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetC2 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.c2BoysYears7to11 = null;
			$scope.sjpuForm.c2BoysYears12to15 = null;
			$scope.sjpuForm.c2BoysYears16to18 = null;
			$scope.sjpuForm.c2BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.c2GirlsYears7to11 = null;
			$scope.sjpuForm.c2GirlsYears12to15 = null;
			$scope.sjpuForm.c2GirlsYears16to18 = null;
			$scope.sjpuForm.c2GirlsYearsGreaterThan18 = null;
		}
	};

	$scope.resetC3 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.c3BoysYears7to11 = null;
			$scope.sjpuForm.c3BoysYears12to15 = null;
			$scope.sjpuForm.c3BoysYears16to18 = null;
			$scope.sjpuForm.c3BoysYearsGreaterThan18 = null;

			$scope.sjpuForm.c3GirlsYears7to11 = null;
			$scope.sjpuForm.c3GirlsYears12to15 = null;
			$scope.sjpuForm.c3GirlsYears16to18 = null;
			$scope.sjpuForm.c3GirlsYearsGreaterThan18 = null;
		}
	};
	//D

	$scope.resetD1New = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d1NewBoys = null;
			$scope.sjpuForm.d1NewGirls = null;
		}
	};

	$scope.resetD1Old = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d1OldBoys = null;
			$scope.sjpuForm.d1OldGirls = null;
		}
	};

	$scope.resetD2New = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d2NewBoys = null;
			$scope.sjpuForm.d2NewGirls = null;
		}
	};

	$scope.resetD2Old = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d2OldBoys = null;
			$scope.sjpuForm.d2OldGirls = null;
		}
	};

	$scope.resetD3New = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d3NewBoys = null;
			$scope.sjpuForm.d3NewGirls = null;
		}
	};

	$scope.resetD3Old = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d3OldBoys = null;
			$scope.sjpuForm.d3OldGirls = null;
		}
	};

	$scope.resetD4New = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d4NewBoys = null;
			$scope.sjpuForm.d4NewGirls = null;
		}
	};

	$scope.resetD4Old = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d4OldBoys = null;
			$scope.sjpuForm.d4OldGirls = null;
		}
	};

	$scope.resetD5New = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d5NewBoys = null;
			$scope.sjpuForm.d5NewGirls = null;
		}
	};

	$scope.resetD5Old = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d5OldBoys = null;
			$scope.sjpuForm.d5OldGirls = null;
		}
	};
	$scope.resetD6New = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d6NewBoys = null;
			$scope.sjpuForm.d6NewGirls = null;
		}
	};

	$scope.resetD6Old = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.d6OldBoys = null;
			$scope.sjpuForm.d6OldGirls = null;
		}
	};
	// F

	$scope.resetF1 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f1Male = null;
			$scope.sjpuForm.f1Female = null;
		}
	};

	$scope.resetF2 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f2Male = null;
			$scope.sjpuForm.f2Female = null;
		}
	};

	$scope.resetF3 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f3Male = null;
			$scope.sjpuForm.f3Female = null;
		}
	};

	$scope.resetF4 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f4Male = null;
			$scope.sjpuForm.f4Female = null;
		}
	};

	$scope.resetF5 = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f5Male = null;
			$scope.sjpuForm.f5Female = null;
		}
	};

	//F.6.1

	$scope.resetF6ia = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iaVictimsMale = null;
			$scope.sjpuForm.f6iaVictimsFemale = null;
			$scope.sjpuForm.f6iaAccusedMale = null;
			$scope.sjpuForm.f6iaAccusedFemale = null;
		}
	};

	$scope.resetF6ib = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6ibVictimsMale = null;
			$scope.sjpuForm.f6ibVictimsFemale = null;
			$scope.sjpuForm.f6ibAccusedMale = null;
			$scope.sjpuForm.f6ibAccusedFemale = null;
		}
	};

	$scope.resetF6ic = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6icVictimsMale = null;
			$scope.sjpuForm.f6icVictimsFemale = null;
			$scope.sjpuForm.f6icAccusedMale = null;
			$scope.sjpuForm.f6icAccusedFemale = null;
		}
	};

	$scope.resetF6id = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6idVictimsMale = null;
			$scope.sjpuForm.f6idVictimsFemale = null;
			$scope.sjpuForm.f6idAccusedMale = null;
			$scope.sjpuForm.f6idAccusedFemale = null;
		}
	};

	$scope.resetF6ie = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6ieVictimsMale = null;
			$scope.sjpuForm.f6ieVictimsFemale = null;
			$scope.sjpuForm.f6ieAccusedMale = null;
			$scope.sjpuForm.f6ieAccusedFemale = null;
		}
	};

	$scope.resetF6if = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6ifVictimsMale = null;
			$scope.sjpuForm.f6ifVictimsFemale = null;
			$scope.sjpuForm.f6ifAccusedMale = null;
			$scope.sjpuForm.f6ifAccusedFemale = null;
		}
	};

	$scope.resetF6ig = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6igVictimsMale = null;
			$scope.sjpuForm.f6igVictimsFemale = null;
			$scope.sjpuForm.f6igAccusedMale = null;
			$scope.sjpuForm.f6igAccusedFemale = null;
		}
	};
	//f6
	$scope.resetF6iia = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiaMale = null;
			$scope.sjpuForm.f6iiaFemale = null;
		}
	};
	$scope.resetF6iib = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iibMale = null;
			$scope.sjpuForm.f6iibFemale = null;
		}
	};
	$scope.resetF6iic = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iicMale = null;
			$scope.sjpuForm.f6iicFemale = null;
		}
	};
	$scope.resetF6iid = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iidMale = null;
			$scope.sjpuForm.f6iidFemale = null;
		}
	};
	$scope.resetF6iie = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iieMale = null;
			$scope.sjpuForm.f6iieFemale = null;
		}
	};
	$scope.resetF6iif = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iifMale = null;
			$scope.sjpuForm.f6iifFemale = null;
		}
	};

	//f6iii
	$scope.resetF6iiia = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiiaMale = null;
			$scope.sjpuForm.f6iiiaFemale = null;
		}
	};

	$scope.resetF6iiib = function(value) {
		if (value == 0 || value == null) {

			$scope.sjpuForm.f6iiibMale = null;
			$scope.sjpuForm.f6iiibFemale = null;
		}
	};

	$scope.resetF6iiic = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiicMale = null;
			$scope.sjpuForm.f6iiicFemale = null;
		}
	};

	$scope.resetF6iiid = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiidMale = null;
			$scope.sjpuForm.f6iiidFemale = null;
		}
	};

	$scope.resetF6iiie = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiieMale = null;
			$scope.sjpuForm.f6iiieFemale = null;
		}
	};

	$scope.resetF6iiif = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiifMale = null;
			$scope.sjpuForm.f6iiifFemale = null;
		}
	};

	$scope.resetF6iiig = function(value) {
		if (value == 0 || value == null) {
			$scope.sjpuForm.f6iiigMale = null;
			$scope.sjpuForm.f6iiigFemale = null;

		}
	};
	//
	$scope.resetPhoneNumber = function(model, errorId){
		if(model != null && !angular.isUndefined(model)){
			if (model!="" && model.length < 10){
				document.getElementById(errorId).innerHTML = "Please provide 10 digit phone number!";
				return false;
			}else{
				document.getElementById(errorId).innerHTML = "";
				return true;
			}
		}
	};
	$scope.resetPhoneMsg=function(){
		var phnNum=document.getElementById('officeTelephoneNo').value;
		if(phnNum.length > 5 && phnNum.length<=11 ){
			document.getElementById('ofcTelError').innerHTML=null;
		}
	};
	$scope.resetPhoneNumber11Digits = function(errorId){
		var phnNum=document.getElementById('officeTelephoneNo').value;
		if(phnNum.length < 6 && !(document.getElementById('officeTelephoneNo').value=="")){
			 document.getElementById(errorId).innerHTML=null;
			 document.getElementById(errorId).innerHTML="Please provide a minimum 6 digits valid telephone number !";
			 $('html,body').animate({
			        scrollTop: $('#officeTelephoneNo').offset().top - 250},'slow');
			return false;
		}
		else{
			return true;
		}
	};

	$scope.sjpuForm = {};

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
	
	var prepareObject = function(sjpuForm){
		sjpuForm.a1BoysTotal = parseInt(document.getElementById('a1BoysTotal').value);
		sjpuForm.a1GirlsTotal = parseInt(document.getElementById('a1GirlsTotal').value);
		sjpuForm.a1GrandTotal = parseInt(document.getElementById('a1GrandTotal').value);
		sjpuForm.a2BoysTotal = parseInt(document.getElementById('a2BoysTotal').value);
		sjpuForm.a2GirlsTotal = parseInt(document.getElementById('a2GirlsTotal').value);
		sjpuForm.a2GrandTotal = parseInt(document.getElementById('a2GrandTotal').value);
		sjpuForm.a3BoysTotal = parseInt(document.getElementById('a3BoysTotal').value);
		sjpuForm.a3GirlsTotal = parseInt(document.getElementById('a3GirlsTotal').value);
		sjpuForm.a3GrandTotal = parseInt(document.getElementById('a3GrandTotal').value);
		sjpuForm.a4BoysTotal = parseInt(document.getElementById('a4BoysTotal').value);
		sjpuForm.a4GirlsTotal = parseInt(document.getElementById('a4GirlsTotal').value);
		sjpuForm.a4GrandTotal = parseInt(document.getElementById('a4GrandTotal').value);
		sjpuForm.a5BoysTotal = parseInt(document.getElementById('a5BoysTotal').value);
		sjpuForm.a5GirlsTotal = parseInt(document.getElementById('a5GirlsTotal').value);
		sjpuForm.a5GrandTotal = parseInt(document.getElementById('a5GrandTotal').value);
		sjpuForm.a6BoysTotal = parseInt(document.getElementById('a6BoysTotal').value);
		sjpuForm.a6GirlsTotal = parseInt(document.getElementById('a6GirlsTotal').value);
		sjpuForm.a6GrandTotal = parseInt(document.getElementById('a6GrandTotal').value);
		sjpuForm.a7BoysTotal = parseInt(document.getElementById('a7BoysTotal').value);
		sjpuForm.a7GirlsTotal = parseInt(document.getElementById('a7GirlsTotal').value);
		sjpuForm.a7GrandTotal = parseInt(document.getElementById('a7GrandTotal').value);
		sjpuForm.a8TotalCases = parseInt(document.getElementById('a8TotalCases').value);
		sjpuForm.a8BoysYears0to6 = parseInt(document.getElementById('a8BoysYears0to6').value);
		sjpuForm.a8BoysYears7to11 = parseInt(document.getElementById('a8BoysYears7to11').value);
		sjpuForm.a8BoysYears12to15 = parseInt(document.getElementById('a8BoysYears12to15').value);
		sjpuForm.a8BoysYears16to18 = parseInt(document.getElementById('a8BoysYears16to18').value);
		sjpuForm.a8BoysYearsGreaterThan18 = parseInt(document.getElementById('a8BoysYearsGreaterThan18').value);
		sjpuForm.a8BoysTotal = parseInt(document.getElementById('a8BoysTotal').value);
		sjpuForm.a8GirlsYears0to6 = parseInt(document.getElementById('a8GirlsYears0to6').value);
		sjpuForm.a8GirlsYears7to11 = parseInt(document.getElementById('a8GirlsYears7to11').value);
		sjpuForm.a8GirlsYears12to15 = parseInt(document.getElementById('a8GirlsYears12to15').value);
		sjpuForm.a8GirlsYears16to18 = parseInt(document.getElementById('a8GirlsYears16to18').value);
		sjpuForm.a8GirlsYearsGreaterThan18 = parseInt(document.getElementById('a8GirlsYearsGreaterThan18').value);
		sjpuForm.a8GirlsTotal = parseInt(document.getElementById('a8GirlsTotal').value);
		sjpuForm.a8GrandTotal = parseInt(document.getElementById('a8GrandTotal').value);
		sjpuForm.b1BoysTotal = parseInt(document.getElementById('b1BoysTotal').value);
		sjpuForm.b1GirlsTotal = parseInt(document.getElementById('b1GirlsTotal').value);
		sjpuForm.b1GrandTotal = parseInt(document.getElementById('b1GrandTotal').value);
		sjpuForm.b2BoysTotal = parseInt(document.getElementById('b2BoysTotal').value);
		sjpuForm.b2GirlsTotal = parseInt(document.getElementById('b2GirlsTotal').value);
		sjpuForm.b2GrandTotal = parseInt(document.getElementById('b2GrandTotal').value);
		sjpuForm.b3BoysTotal = parseInt(document.getElementById('b3BoysTotal').value);
		sjpuForm.b3GirlsTotal = parseInt(document.getElementById('b3GirlsTotal').value);
		sjpuForm.b3GrandTotal = parseInt(document.getElementById('b3GrandTotal').value);
		sjpuForm.b4Total = parseInt(document.getElementById('b4Total').value);
		sjpuForm.b5aTotal = parseInt(document.getElementById('b5aTotal').value);
		sjpuForm.b5bTotal = parseInt(document.getElementById('b5bTotal').value);
		sjpuForm.b5cTotal = parseInt(document.getElementById('b5cTotal').value);
		sjpuForm.b5dTotal = parseInt(document.getElementById('b5dTotal').value);
		sjpuForm.b5eTotal = parseInt(document.getElementById('b5eTotal').value);
		sjpuForm.c1BoysTotal = parseInt(document.getElementById('c1BoysTotal').value);
		sjpuForm.c1GirlsTotal = parseInt(document.getElementById('c1GirlsTotal').value);
		sjpuForm.c1GrandTotal = parseInt(document.getElementById('c1GrandTotal').value);
		sjpuForm.c2BoysTotal = parseInt(document.getElementById('c2BoysTotal').value);
		sjpuForm.c2GirlsTotal = parseInt(document.getElementById('c2GirlsTotal').value);
		sjpuForm.c2GrandTotal = parseInt(document.getElementById('c2GrandTotal').value);
		sjpuForm.c3BoysTotal = parseInt(document.getElementById('c3BoysTotal').value);
		sjpuForm.c3GirlsTotal = parseInt(document.getElementById('c3GirlsTotal').value);
		sjpuForm.c3GrandTotal = parseInt(document.getElementById('c3GrandTotal').value);
		sjpuForm.c4TotalCases = parseInt(document.getElementById('c4TotalCases').value);
		sjpuForm.c4BoysYears7to11 = parseInt(document.getElementById('c4BoysYears7to11').value);
		sjpuForm.c4BoysYears12to15 = parseInt(document.getElementById('c4BoysYears12to15').value);
		sjpuForm.c4BoysYears16to18 = parseInt(document.getElementById('c4BoysYears16to18').value);
		sjpuForm.c4BoysYearsGreaterThan18 = parseInt(document.getElementById('c4BoysYearsGreaterThan18').value);
		sjpuForm.c4BoysTotal = parseInt(document.getElementById('c4BoysTotal').value);
		sjpuForm.c4GirlsYears7to11 = parseInt(document.getElementById('c4GirlsYears7to11').value);
		sjpuForm.c4GirlsYears12to15 = parseInt(document.getElementById('c4GirlsYears12to15').value);
		sjpuForm.c4GirlsYears16to18 = parseInt(document.getElementById('c4GirlsYears16to18').value);
		sjpuForm.c4GirlsYearsGreaterThan18 = parseInt(document.getElementById('c4GirlsYearsGreaterThan18').value);
		sjpuForm.c4GirlsTotal = parseInt(document.getElementById('c4GirlsTotal').value);
		sjpuForm.c4GrandTotal = parseInt(document.getElementById('c4GrandTotal').value);
		sjpuForm.d1Total = parseInt(document.getElementById('d1Total').value);
		sjpuForm.d2Total = parseInt(document.getElementById('d2Total').value);
		sjpuForm.d3Total = parseInt(document.getElementById('d3Total').value);
		sjpuForm.d4Total = parseInt(document.getElementById('d4Total').value);
		sjpuForm.d5Total = parseInt(document.getElementById('d5Total').value);
		sjpuForm.d6Total = parseInt(document.getElementById('d6Total').value);
		sjpuForm.f1Total = parseInt(document.getElementById('f1Total').value);
		sjpuForm.f2Total = parseInt(document.getElementById('f2Total').value);
		sjpuForm.f3Total = parseInt(document.getElementById('f3Total').value);
		sjpuForm.f4Total = parseInt(document.getElementById('f4Total').value);
		sjpuForm.f5Total = parseInt(document.getElementById('f5Total').value);
		sjpuForm.f6iaVictimsTotal = parseInt(document.getElementById('f6iaVictimsTotal').value);
		sjpuForm.f6iaAccusedTotal = parseInt(document.getElementById('f6iaAccusedTotal').value);
		sjpuForm.f6ibVictimsTotal = parseInt(document.getElementById('f6ibVictimsTotal').value);
		sjpuForm.f6ibAccusedTotal = parseInt(document.getElementById('f6ibAccusedTotal').value);
		sjpuForm.f6icVictimsTotal = parseInt(document.getElementById('f6icVictimsTotal').value);
		sjpuForm.f6icAccusedTotal = parseInt(document.getElementById('f6icAccusedTotal').value);
		sjpuForm.f6idVictimsTotal = parseInt(document.getElementById('f6idVictimsTotal').value);
		sjpuForm.f6idAccusedTotal = parseInt(document.getElementById('f6idAccusedTotal').value);
		sjpuForm.f6ieVictimsTotal = parseInt(document.getElementById('f6ieVictimsTotal').value);
		sjpuForm.f6ieAccusedTotal = parseInt(document.getElementById('f6ieAccusedTotal').value);
		sjpuForm.f6ifVictimsTotal = parseInt(document.getElementById('f6ifVictimsTotal').value);
		sjpuForm.f6ifAccusedTotal = parseInt(document.getElementById('f6ifAccusedTotal').value);
		sjpuForm.f6igVictimsTotal = parseInt(document.getElementById('f6igVictimsTotal').value);
		sjpuForm.f6igAccusedTotal = parseInt(document.getElementById('f6igAccusedTotal').value);
		sjpuForm.f6iTotalCases = parseInt(document.getElementById('f6iTotalCases').value);
		sjpuForm.f6iTotalVictimsMale = parseInt(document.getElementById('f6iTotalVictimsMale').value);
		sjpuForm.f6iTotalVictimsFemale = parseInt(document.getElementById('f6iTotalVictimsFemale').value);
		sjpuForm.f6iTotalVictimsTotal = parseInt(document.getElementById('f6iTotalVictimsTotal').value);
		sjpuForm.f6iTotalAccusedMale = parseInt(document.getElementById('f6iTotalAccusedMale').value);
		sjpuForm.f6iTotalAccusedFemale = parseInt(document.getElementById('f6iTotalAccusedFemale').value);
		sjpuForm.f6iTotalAccusedTotal = parseInt(document.getElementById('f6iTotalAccusedTotal').value);
		sjpuForm.f6iiaTotal = parseInt(document.getElementById('f6iiaTotal').value);
		sjpuForm.f6iibTotal = parseInt(document.getElementById('f6iibTotal').value);
		sjpuForm.f6iicTotal = parseInt(document.getElementById('f6iicTotal').value);
		sjpuForm.f6iidTotal = parseInt(document.getElementById('f6iidTotal').value);
		sjpuForm.f6iieTotal = parseInt(document.getElementById('f6iieTotal').value);
		sjpuForm.f6iifTotal = parseInt(document.getElementById('f6iifTotal').value);
		sjpuForm.f6iiiaTotal = parseInt(document.getElementById('f6iiiaTotal').value);
		sjpuForm.f6iiibTotal = parseInt(document.getElementById('f6iiibTotal').value);
		sjpuForm.f6iiicTotal = parseInt(document.getElementById('f6iiicTotal').value);
		sjpuForm.f6iiidTotal = parseInt(document.getElementById('f6iiidTotal').value);
		sjpuForm.f6iiieTotal = parseInt(document.getElementById('f6iiieTotal').value);
		sjpuForm.f6iiifTotal = parseInt(document.getElementById('f6iiifTotal').value);
		sjpuForm.f6iiigTotal = parseInt(document.getElementById('f6iiigTotal').value);
		for (var i = 0; i < sjpuForm.sjpuTrainings.length; i++) {
			if (sjpuForm.sjpuTrainings[i].trainingOrganisedBy != null || sjpuForm.sjpuTrainings[i].trainingOrganisedBy != undefined)
				sjpuForm.sjpuTrainings[i].trainingOrganisedBy = sjpuForm.sjpuTrainings[i].trainingOrganisedBy.typeDetailsId;
		}
		sjpuForm.userId = Number(document.getElementById("uId").value);
	};
	
	var submitted = false;
	$scope.saveSJPU = function(sjpuForm, clickType, submitConfirm) {
		
		if ($scope.selectedDistrict != undefined)
			sjpuForm.districtId = $scope.selectedDistrict.areaId;

		sjpuForm.sjpuTrainings = $scope.sjpuTrainingDetailsRepetitionArray;
		//sending the data to server
		if (clickType == 'save') {
			$(".loader").show();
			prepareObject(sjpuForm);
			$http.post('saveSJPU', sjpuForm).then(function(result) {
				if (result.status == 200) {
					$(".loader").fadeOut();
					$scope.success_msg = commonService.messages.save_success_msg;
					$('#successModalForSJPUSave').modal('show');
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSaveHttpFunction(error);
				console.log(error);
			});
		} else if (clickType == 'submit' && submitted == false) {
			if(!$scope.resetPhoneNumber11Digits('ofcTelError')){
				
				$scope.alertMessageShow = "Please provide a minimum 6 digits valid telephone number !";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				return false;
				
			}
			else if (hasEmailError) {
				$scope.alertMessageShow = "Please provide a correct email id!";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop : $('#emailIdofPerson').offset().top - 250
				}, 'slow');
			} else if (!angular.isUndefined($scope.sjpuForm.mobileNumber) && $scope.sjpuForm.mobileNumber!=null 
						&& !$scope.resetPhoneNumber($scope.sjpuForm.mobileNumber, 'mobileNoError')){
				$scope.alertMessageShow = "Please provide a 10 digit mobile number!";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				document.sjpuFormDetails.officeTelephoneNo.focus();
				$('html,body').animate({
					scrollTop : $('#mobileNumber').offset().top - 250
				}, 'slow');
			}else if($scope.sjpuForm.e1bDate == undefined && sjpuForm.e1aName == 'yes'){
		    	$( "#e1bDate1" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#e1bDate1').offset().top - 250},'slow');
		    	
		    }else if($scope.sjpuForm.e2bDate == undefined && sjpuForm.e2aName == 'yes'){
		    	$( "#e2bDate1" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#e2bDate1').offset().top - 250},'slow');
		    	
		    }else if($scope.sjpuForm.e3bDate == undefined && sjpuForm.e3aName == 'yes'){
		    	$( "#e3bDate1" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#e3bDate1').offset().top - 250},'slow');
		    	
		    }else if($scope.sjpuForm.e4bDate == undefined && sjpuForm.e4aName == 'yes'){
		    	$( "#e4bDate1" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#e4bDate1').offset().top - 250},'slow');
		    	
		    }else if($scope.sjpuForm.e5bDate == undefined && sjpuForm.e5aName == 'yes'){
		    	$( "#e5bDate1" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#e5bDate1').offset().top - 250},'slow');
		    	
		    }else if($scope.sjpuForm.e6bDate == undefined && sjpuForm.e6aName == 'yes'){
		    	$( "#e6bDate1" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#e6bDate1').offset().top - 250},'slow');
		    	
		    }else {	
			
			if(!$scope.sjpuForm.sjpuTrainings.length<1){
				for(var i=0;i<$scope.sjpuForm.sjpuTrainings.length;i++){
					if (!accordionValidation($scope.sjpuForm.sjpuTrainings[i])) {
						var sum=i+1;
						$scope.alertMessageShow = commonService.messages.add_all_specific_training_details+sum;
						$(".loader").fadeOut();
						$('#ErrAlertModal').modal('show');
						$('html,body').animate({
							scrollTop: $('#accordion').offset().top - 250},'slow');
						return false;
					}
				}
			}
			if (!accordionValidation($scope.sjpuForm.sjpuTrainings[$scope.sjpuForm.sjpuTrainings.length - 1])) {
				$scope.alertMessageShow = commonService.messages.add_all_training_details;
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({
					scrollTop: $('#accordion').offset().top - 250},'slow');
			}else{
				$('#successModalForSJPUSubmit').modal('show');
			}
			}
		}
		if (submitConfirm == 'ok') {
			prepareObject(sjpuForm);
			$http.post('submitSJPU', sjpuForm).then(function(result) {
				if (result.status == 200) {
					$scope.success_msg = commonService.messages.submit_success_msg+sjpuForm.timeperiod.timePeriod;
					$('#successModalForSJPUSave').modal('show');
				}
			}, function(error) {
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
$scope.autoSaveSJPU = function(sjpuForm, clickType) {
		
		if ($scope.selectedDistrict != undefined)
			sjpuForm.districtId = $scope.selectedDistrict.areaId;

		sjpuForm.sjpuTrainings = $scope.sjpuTrainingDetailsRepetitionArray;
		//sending the data to server
		if (clickType == 'save') {
			prepareObject(sjpuForm);
			$http.post('autoSaveSJPU', sjpuForm).then(function(result) {
				if (result.status == 200) {
					$(".loader").fadeOut();
					$('#successModalForAutoSaveSJPU').modal('show');
				}
			}, function(error) {
				commonService.checkSessionOut(error);
				$(".loader").fadeOut();
				alert("Error during save! Please contact admin.");
				console.log(error);
			});
		}
	};	
	//getting refresh on saving @swarna

	$scope.refreshPage = function() {
		$window.location.reload();
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
		$scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate = date;
		if($scope.sjpuTrainingDetailsRepetitionArray[index].trainingFromDate != null && $scope.sjpuTrainingDetailsRepetitionArray[index].trainingFromDate != undefined){
			var fromDay = new Date(dateConvert($scope.sjpuTrainingDetailsRepetitionArray[index].trainingFromDate));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
            	$scope.alertMessageShow = commonService.messages.training_to_not_les_than_training_from;
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate = null;
            }
		}else{
			$scope.alertMessageShow = commonService.messages.select_training_from;
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate = null;
		}
	};
	//the following function is for initialization and setting the dates in date pickers.
	$scope.initializeDatePicker = function(index) {
		$("#trainingFromDatepicker" + index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
	            if($scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate != null && $scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate));
					if(toDay < fromDay){
		            	$scope.alertMessageShow = commonService.messages.training_to_not_les_than_training_from;
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate = null;
		            }
				}
	            $scope.sjpuTrainingDetailsRepetitionArray[index].trainingFromDate = date;
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

	$scope.sjpuTrainingDetailsObject = {
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
		tabSpPolice : null,
		tabDySpPolice : null,
		tabSHO : null,
		tabCWPO : null,
		tabSocialWorker : null,
		tabOtherPoliceOfficial : null,
		tabChowkidar : null,
		tabOthers : null,
		tabOthersSpecify : null,
		sjpuId : null
	};
	$scope.sjpuTrainingDetailsRepetitionArray = [ {
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
		tabSpPolice : null,
		tabDySpPolice : null,
		tabSHO : null,
		tabCWPO : null,
		tabSocialWorker : null,
		tabOtherPoliceOfficial : null,
		tabChowkidar : null,
		tabOthers : null,
		tabOthersSpecify : null,
		sjpuId : null
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
		if($scope.sjpuForm.g1Training == 'true'){
			if((training.durationTraining == null ||
					training.trainingFromDate == null ||
					training.trainingToDate == null ||
					training.trainingOrganisedBy == null ||
					training.tabSpPolice == null ||
					training.tabDySpPolice == null ||
					training.tabSHO == null ||
					training.tabCWPO == null ||
					training.tabSocialWorker == null ||
					training.tabOtherPoliceOfficial == null ||
					training.tabChowkidar == null ||
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
		if($scope.validateNoOfTraining($scope.sjpuForm.g1aNoOfTrainings)){
			if (!accordionValidation($scope.sjpuTrainingDetailsRepetitionArray[$scope.sjpuTrainingDetailsRepetitionArray.length - 1])) {
				$scope.alertMessageShow = commonService.messages.add_all_training_details;
				$('#ErrAlertModal').modal('show');
			} else {
				if($scope.sjpuForm.g1aNoOfTrainings!=undefined && $scope.sjpuForm.g1aNoOfTrainings <= 10){
					if ($scope.sjpuTrainingDetailsRepetitionArray.length < $scope.sjpuForm.g1aNoOfTrainings) {
						$scope.sjpuTrainingDetailsRepetitionArray[($scope.sjpuTrainingDetailsRepetitionArray.length - 1) + 1] = JSON.parse(JSON.stringify($scope.sjpuTrainingDetailsObject));
					} else {
						document.getElementById('maximumLimit10Error').innerHTML = "You can add details of maximum <b>" + $scope.sjpuForm.g1aNoOfTrainings + "</b> Training Details";
					}
					$timeout(function(){
						document.getElementById('maximumLimit10Error').innerHTML = "";
					},2000);
				}
			}
		}
	};

	$scope.deleteConfirm = function() {
		document.getElementById("g1aNoOfTrainings").blur();
		if ($scope.sjpuTrainingDetailsRepetitionArray.length > 1 && $scope.sjpuForm.g1aNoOfTrainings >= $scope.sjpuTrainingDetailsRepetitionArray.length
				&& $scope.sjpuForm.g1aNoOfTrainings!=undefined && $scope.sjpuForm.g1aNoOfTrainings <= 10) {
			$('#confirmationModalForSJPUdeleteAccordion').modal('show');
		}
	};
	$scope.deleteNewDetails = function() {
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
		if ($scope.sjpuTrainingDetailsRepetitionArray.length > 1) {
			$scope.sjpuTrainingDetailsRepetitionArray.pop();
		}
	};

	$scope.openFromDatePicker = function(id) {
		$("#trainingFromDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.sjpuTrainingDetailsRepetitionArray[id].h1dTrainingFromDate = date;
			}
		});
	};

	$scope.openToDatePicker = function(id) {
		$("#trainingToDatepicker" + id).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect : function(date) {
				$scope.sjpuTrainingDetailsRepetitionArray[id].h1dTrainingToDate = date;
			}
		});
	};

	//reset the dates if user set the value as no or not available.
	$scope.resetDate = function(value, id) {
		if (value == 'no' || value == 'notavailable') {
			switch (id) {
			case 1:
				$scope.sjpuForm.e1bDate = null;
				break;
			case 2:
				$scope.sjpuForm.e2bDate = null;
				break;
			case 3:
				$scope.sjpuForm.e3bDate = null;
				break;
			case 4:
				$scope.sjpuForm.e4bDate = null;
				break;
			case 5:
				$scope.sjpuForm.e5bDate = null;
				break;
			case 6:
				$scope.sjpuForm.e6bDate = null;
				$scope.sjpuForm.e6NameOfMeeting = null;
				break;
			default:
				break;
			}
		}
	};

	//  @swarna

	$scope.district = [];
	$http.get("getAreas").then(function(result) {
		//Pick out objects with areaLevel '3' for district.
		for (var i = 0; i < result.data.length; i++) {
			if (result.data[i].areaLevel == 3) {
				$scope.district.push(result.data[i]);
			}
		}
	}, function(error) {
		console.log(error);
	});

	var hasEmailError = false;
	$scope.validateName = function(name, errorId) {
		if (name != undefined && name != null) {
			if (errorId == 'emailidError') {
				if(!name.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
					document.getElementById(errorId).innerHTML = "Please provide a correct email id";
					document.sjpuFormDetails.emailIdofPerson.focus();
					hasEmailError = true;
				}else {
					document.getElementById(errorId).innerHTML = "";
					hasEmailError = false;
				}
			}
		}else {
			document.getElementById(errorId).innerHTML = "";
			hasEmailError = false;
		}
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
	    	if($scope.counterSeconds==300 && !$('#successModalForSJPUSave').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#successModalForSJPUSave').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSaveSJPU($scope.sjpuForm, 'save');
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
	$http.post("getLastSavedSJPUData", currentUserId).then(function(result) {
		if (result.data != "") {
			$scope.sjpuForm = result.data;
			if($scope.sjpuForm.districtId != null){
				angular.forEach($scope.district, function(value, key) {
					if (value.id == $scope.sjpuForm.districtId) {
						$scope.selectedDistrict = value;
					}
				});
			}
		}
		todaysDate = new Date($scope.sjpuForm.timeperiod.startDate);
		lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
	    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
		
		$(".accordionFromDatepicker").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date){
				if(this.id.startsWith("trainingFromDatepicker")){
					if($scope.sjpuTrainingDetailsRepetitionArray[0].trainingToDate != null && $scope.sjpuTrainingDetailsRepetitionArray[0].trainingToDate != undefined){
						var fromDay = new Date(dateConvert(date));
						var toDay = new Date(dateConvert($scope.sjpuTrainingDetailsRepetitionArray[0].trainingToDate));
						if(toDay < fromDay){
							var index = this.id.split('trainingFromDatepicker')[1];
			            	$scope.alertMessageShow = commonService.messages.training_to_not_les_than_training_from;
			            	$scope.$apply();
			    			$('#ErrAlertModal').modal('show');
			    			$("#trainingToDatepicker"+index).val(null);
			    			$scope.sjpuTrainingDetailsRepetitionArray[index].trainingToDate = null;
			            }
					}
					$scope.sjpuTrainingDetailsRepetitionArray[0].trainingFromDate = date;
	            }else if(this.id.startsWith("trainingToDatepicker")){
	            	checkDate(date, 0);
	            }
	        },
		});
		$("#e1bDate").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
		});
		$("#e1bDate1").on("click", function(){
			$("#e1bDate").focus();
		});
		$("#e2bDate").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
		});
		$("#e2bDate1").on("click", function(){
			$("#e2bDate").focus();
		});
		$("#e3bDate").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
		});
		$("#e3bDate1").on("click", function(){
			$("#e3bDate").focus();
		});
		$("#e4bDate").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
		});
		$("#e4bDate1").on("click", function(){
			$("#e4bDate").focus();
		});
		$("#e5bDate").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
		});
		$("#e5bDate1").on("click", function(){
			$("#e5bDate").focus();
		});
		$("#e6bDate").datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
		});
		$("#e6bDate1").on("click", function(){
			$("#e6bDate").focus();
		});
		if(!$scope.sjpuForm.submitted)
			$scope.timerForSave($scope,$timeout);
		if ($scope.sjpuForm.submitted) {
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}

		$timeout(function() {
			if ($scope.sjpuForm.sjpuTrainings != null && $scope.sjpuForm.sjpuTrainings != undefined && $scope.sjpuForm.sjpuTrainings.length != 0)
				$scope.sjpuTrainingDetailsRepetitionArray = $scope.sjpuForm.sjpuTrainings;
			//the following condition is for setting the id of dropdowns selected by the user in training details
			if ($scope.sjpuForm.sjpuTrainings != undefined) {
				for (var i = 0; i < $scope.sjpuForm.sjpuTrainings.length; i++) {
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
						if ($scope.trainingOrganisedBy[j].typeDetailsId == $scope.sjpuForm.sjpuTrainings[i].trainingOrganisedBy) {
							$scope.sjpuTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			$(".loader").fadeOut();
		}, 500);
		$timeout(function() {
			$scope.sjpuForm.g1aNoOfTrainings = $scope.sjpuTrainingDetailsRepetitionArray.length;
			$(".loader").fadeOut();
		}, 500);
		$scope.sjpuForm.g1Training = $scope.sjpuForm.g1Training == null ? null : $scope.sjpuForm.g1Training.toString();
	}, function(error) {
		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});

	//division hide and show for H section on click of radio button

	$scope.showOther = function(value) {
		$scope.isVisible = value == "Y";
		if (value == 'Y')
			$scope.sjpuForm.g1Training = true;
		else if (value == 'N')
			$scope.sjpuForm.g1Training = false;
	};

	// type number will not accept exponential(e) @Swarna

	$(".removeExponentialValueE").keypress(function(event) {
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
			return false;
		}
	});
	$scope.validateNoOfTraining = function(val) {
		if (val == 0 || val == null) {
			$scope.alertMessage = "Number of Trainings Held value should be more than or equal to one";
			$('#alertModal').modal('show');
			$scope.sjpuForm.g1aNoOfTrainings = $scope.sjpuTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val > 10) {
			$scope.alertMessage = "Number of Trainings Held value should not exceed 10";
			$('#alertModal').modal('show');
			$scope.sjpuForm.g1aNoOfTrainings = $scope.sjpuTrainingDetailsRepetitionArray.length;
			return false;
		} else if (val < $scope.sjpuTrainingDetailsRepetitionArray.length) {
			$scope.alertMessage = "Number of Trainings Held value should not be less than the number of trainings you added.";
			$('#alertModal').modal('show');
			$scope.sjpuForm.g1aNoOfTrainings = $scope.sjpuTrainingDetailsRepetitionArray.length;
			return false;
		}else
			return true;
	};
	$scope.clearMsg = function() {
		$scope.alertMessage = undefined;
	};

	$scope.clearTopicOfTrainingOthers = function(model) {
		model.totOthersSpecify = null;
	};
	//for reset to zero

	$scope.resetToZeroaccd1 = function(value) {
		if (value == 'false') {
			$scope.sjpuTrainingDetailsRepetitionArray = [ {
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
				tabSpPolice : null,
				tabDySpPolice : null,
				tabSHO : null,
				tabCWPO : null,
				tabSocialWorker : null,
				tabOtherPoliceOfficial : null,
				tabChowkidar : null,
				tabOthers : null,
				tabOthersSpecify : null,
				sjpuId : null
			} ];
		}
		$scope.sjpuForm.g1aNoOfTrainings = $scope.sjpuTrainingDetailsRepetitionArray.length;
	};

	//the following function is for resetting the others field in the accordion
	$scope.resetAccordionOthers2 = function(sjpuTrainingDetails) {
		if (sjpuTrainingDetails.trainingOrganisedBy.typeDetailsId != 4)
			sjpuTrainingDetails.traingOrganisedbyOthers = null;
	};

});