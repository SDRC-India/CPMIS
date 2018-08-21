cpmisApp.controller('DCPU_Controller', function($scope, $http, $timeout, $window, commonService){
	$(".loader").show();
	$scope.Number=Number;
	
	var currentUserId = Number(document.getElementById("uId").value);
	
	$http.get("getDropdownItems").
	then(function(result){
		$scope.trainingOrganisedBy = result.data.trainingOrganisedBy;
		$scope.ofcPremises = result.data.ofcPremises;
		$scope.osType = result.data.osType;
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
	$http.get("getUserArea").
	then(function(result){
		$scope.selectedDistrict = result.data;
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
				alert("Server error. Please contact admin.");
			}
		});
	};
    
	$("#datepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
		minDate : firstDay,
		onSelect: function(date) {
			$scope.dcpuForm.monthyear = date;
		}	
	});
	
	$("#trainingDatepicker").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
		minDate : firstDay,
		onSelect: function(date) {
			$scope.dcpuForm.h1dDate = date;
		}	
	});
	$("#m1bDatesMeetingDCPC1").on("click", function(){
	    $("#m1bDatesMeetingDCPC").focus();
	});
	$("#m2bDatesMeetingDSFCAC1").on("click", function(){
	    $("#m2bDatesMeetingDSFCAC").focus();
	});
	$("#m3bDatesMeetingChildLineAdvisory1").on("click", function(){
	    $("#m3bDatesMeetingChildLineAdvisory").focus();
	});
	$("#m4bDatesMeetingDistrictJudges1").on("click", function(){
	    $("#m4bDatesMeetingDistrictJudges").focus();
	});
	$("#m5bDatesMeetingCoordination1").on("click", function(){
	    $("#m5bDatesMeetingCoordination").focus();
	});
	$("#m6bDatesMeetingAHTU1").on("click", function(){
	    $("#m6bDatesMeetingAHTU").focus();
	});
	$("#m7bDatesMeetingCDPO1").on("click", function(){
	    $("#m7bDatesMeetingCDPO").focus();
	});
	$("#m8bDatesMeetingQuarterlyCWC1").on("click", function(){
	    $("#m8bDatesMeetingQuarterlyCWC").focus();
	});
	$("#m9bDatesMeetingReportDM1").on("click", function(){
	    $("#m9bDatesMeetingReportDM").focus();
	});
	$("#m10bDatesOfVisits1").on("click", function(){
	    $("#m10bDatesOfVisits").focus();
	});
	$("#m11bDatesOfVisits1").on("click", function(){
	    $("#m11bDatesOfVisits").focus();
	});
	$("#m12bDatesOfPrograms1").on("click", function(){
	    $("#m12bDatesOfPrograms").focus();
	});
	$("#m13bDatesOfActivities1").on("click", function(){
	    $("#m13bDatesOfActivities").focus();
	});
	var hasEmailError = false;
	$scope.validateName = function(name, errorId) {
		if (name != undefined && name != null) {
			if (errorId == 'emailidError') {
				if(!name.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
					document.getElementById(errorId).innerHTML = "Please provide a correct email id";
					document.dcpuFormDetails.emailIdofPerson.focus();
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
	
	$scope.dcpuForm = {};
	
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
			return false;
		}
	};
	
	$scope.resetG1b=function(value){
		if (value == 0 || value==null){
    		$scope.dcpuForm.g1bBoys = null;
    		$scope.dcpuForm.g1bGirls= null;
    	}
		if($scope.dcpuForm.g1aCases + $scope.dcpuForm.g1bCases > $scope.dcpuForm.g2Cases)
			$scope.dcpuForm.g3Cases = ($scope.dcpuForm.g1aCases + $scope.dcpuForm.g1bCases) - $scope.dcpuForm.g2Cases;
		else
			$scope.dcpuForm.g3Cases = 0;
		
		if($scope.dcpuForm.g1aCases + $scope.dcpuForm.g1bCases < $scope.dcpuForm.g2Cases)
			$scope.dcpuForm.g2Cases = 0;
	};
	
	$scope.resetG2=function(value){
		var bgc=document.getElementById('g2Cases');
		$scope.removeStyleId = bgc;
		
		if (value == 0 || value==null){
    		$scope.dcpuForm.g2Boys = null;
    		$scope.dcpuForm.g2Girls= null;
    	}
		if(value > Number(document.getElementById('g1cCases').value)){
			$scope.addStyle(bgc);
			$scope.dcpuForm.g2Cases = null;
			document.getElementById('g3Cases').value = $scope.dcpuForm.g1aCases + $scope.dcpuForm.g1bCases;
			$scope.label1 = "G.2. cases disposed by the JJB in the reporting month"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "G.1.c. total cases dealt by the JJB in the reporting month.";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.g3Cases = ($scope.dcpuForm.g1aCases + $scope.dcpuForm.g1bCases) - $scope.dcpuForm.g2Cases;
		}
	};
		
	$scope.resetG1bBoys=function(value){
		
		if($scope.dcpuForm.g1aBoys + $scope.dcpuForm.g1bBoys > $scope.dcpuForm.g2Boys)
			$scope.dcpuForm.g3Boys = ($scope.dcpuForm.g1aBoys + $scope.dcpuForm.g1bBoys) - $scope.dcpuForm.g2Boys;
		else
			$scope.dcpuForm.g3Boys = 0;
		
		if($scope.dcpuForm.g1aBoys + $scope.dcpuForm.g1bBoys < $scope.dcpuForm.g2Boys)
			$scope.dcpuForm.g2Boys = 0;
	};
	
	$scope.resetG2Boys=function(value){
		var bgc=document.getElementById('g2Boys');
		$scope.removeStyleId = bgc;
		
		if(value > Number(document.getElementById('g1cBoys').value)){
			$scope.addStyle(bgc);
			$scope.dcpuForm.g2Boys = null;
			document.getElementById('g3Boys').value = $scope.dcpuForm.g1aBoys + $scope.dcpuForm.g1bBoys;
			$scope.label1 = "G.2. cases disposed by the JJB in the reporting month:boys"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "G.1.c. total cases dealt by the JJB in the reporting month:boys.";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.g3Boys = ($scope.dcpuForm.g1aBoys + $scope.dcpuForm.g1bBoys) - $scope.dcpuForm.g2Boys;
		}
	};
	
	$scope.resetG1bGirls=function(value){
		
		if($scope.dcpuForm.g1aGirls + $scope.dcpuForm.g1bGirls > $scope.dcpuForm.g2Girls)
			$scope.dcpuForm.g3Girls = ($scope.dcpuForm.g1aGirls + $scope.dcpuForm.g1bGirls) - $scope.dcpuForm.g2Girls;
		else
			$scope.dcpuForm.g3Girls = 0;
		
		if($scope.dcpuForm.g1aGirls + $scope.dcpuForm.g1bGirls < $scope.dcpuForm.g2Girls)
			$scope.dcpuForm.g2Girls = 0;
	};
	
	$scope.resetG2Girls=function(value){
		var bgc=document.getElementById('g2Girls');
		$scope.removeStyleId = bgc;
		
		if(value > Number(document.getElementById('g1cGirls').value)){
			$scope.addStyle(bgc);
			$scope.dcpuForm.g2Girls = null;
			document.getElementById('g3Girls').value = $scope.dcpuForm.g1aGirls + $scope.dcpuForm.g1bGirls;
			$scope.label1 = "G.2. cases disposed by the JJB in the reporting month:girls"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "G.1.c. total cases dealt by the JJB in the reporting month:girls.";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.g3Girls = ($scope.dcpuForm.g1aGirls + $scope.dcpuForm.g1bGirls) - $scope.dcpuForm.g2Girls;
		}
	};
		
	$scope.resetH1b=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.h1bBoys = null;
    		$scope.dcpuForm.h1bGirls= null;
    		$scope.resetH1bBoys(0);
    		$scope.resetH1bGirls(0);
    	}
		if($scope.dcpuForm.h1aCases + $scope.dcpuForm.h1bCases > $scope.dcpuForm.h2Cases)
			$scope.dcpuForm.h3Cases = ($scope.dcpuForm.h1aCases + $scope.dcpuForm.h1bCases) - $scope.dcpuForm.h2Cases;
		else
			$scope.dcpuForm.h3Cases = 0;
		
		if($scope.dcpuForm.h1aCases + $scope.dcpuForm.h1bCases < $scope.dcpuForm.h2Cases)
			$scope.dcpuForm.h2Cases = 0;
	};
	
	$scope.resetH2=function(value)
	{
		var bgc=document.getElementById('h2Cases');
		$scope.removeStyleId = bgc;
		
		if (value == 0 || value==null){
    		$scope.dcpuForm.h2Boys = null;
    		$scope.dcpuForm.h2Girls= null;
    		$scope.resetH2Boys(0);
    		$scope.resetH2Girls(0);
    	}
		if(value > document.getElementById('h1cCases').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.h2Cases = null;
			document.getElementById('h3Cases').value = $scope.dcpuForm.h1aCases + $scope.dcpuForm.h1bCases;
			$scope.label1 = "H.2. cases disposed by the CWC in the reporting month"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "H.1.c. total cases dealt by the CWC in the reporting month";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.h3Cases = ($scope.dcpuForm.h1aCases + $scope.dcpuForm.h1bCases) - $scope.dcpuForm.h2Cases;
		}
	};
	
	$scope.resetH1bBoys=function(value){
		
		if($scope.dcpuForm.h1aBoys + $scope.dcpuForm.h1bBoys > $scope.dcpuForm.h2Boys)
			$scope.dcpuForm.h3Boys = ($scope.dcpuForm.h1aBoys + $scope.dcpuForm.h1bBoys) - $scope.dcpuForm.h2Boys;
		else
			$scope.dcpuForm.h3Boys = 0;
		
		if($scope.dcpuForm.h1aBoys + $scope.dcpuForm.h1bBoys < $scope.dcpuForm.h2Boys)
			$scope.dcpuForm.h2Boys = 0;
	};
	
	$scope.resetH2Boys=function(value){
		var bgc=document.getElementById('h2Boys');
		$scope.removeStyleId = bgc;
		
		if(value > document.getElementById('h1cBoys').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.h2Boys = null;
			document.getElementById('h3Boys').value = $scope.dcpuForm.h1aBoys + $scope.dcpuForm.h1bBoys;
			$scope.label1 = "H.2. cases disposed by the CWC in the reporting month:boys"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "H.1.c. total cases dealt by the CWC in the reporting month:boys";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.h3Boys = ($scope.dcpuForm.h1aBoys + $scope.dcpuForm.h1bBoys) - $scope.dcpuForm.h2Boys;
		}
	};
	
	$scope.resetH1bGirls=function(value){
		
		if($scope.dcpuForm.h1aGirls + $scope.dcpuForm.h1bGirls > $scope.dcpuForm.h2Girls)
			$scope.dcpuForm.h3Girls = ($scope.dcpuForm.h1aGirls + $scope.dcpuForm.h1bGirls) - $scope.dcpuForm.h2Girls;
		else
			$scope.dcpuForm.h3Girls = 0;
		
		if($scope.dcpuForm.h1aGirls + $scope.dcpuForm.h1bGirls < $scope.dcpuForm.h2Girls)
			$scope.dcpuForm.h2Girls = 0;
	};
	
	$scope.resetH2Girls=function(value){
		var bgc=document.getElementById('h2Girls');
		$scope.removeStyleId = bgc;
		
		if(value > document.getElementById('h1cGirls').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.h2Girls = null;
			document.getElementById('h3Girls').value = $scope.dcpuForm.h1aGirls + $scope.dcpuForm.h1bGirls;
			$scope.label1 = "H.2. cases disposed by the CWC in the reporting month:girls"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "H.1.c. total cases dealt by the CWC in the reporting month:girls";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.h3Girls = ($scope.dcpuForm.h1aGirls + $scope.dcpuForm.h1bGirls) - $scope.dcpuForm.h2Girls;
		}
	};
	
	//J.1.a.
	$scope.resetJ1b=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.j1bBoys = null;
    		$scope.dcpuForm.j1bGirls= null;
    	}
		if($scope.dcpuForm.j1aCases + $scope.dcpuForm.j1bCases > $scope.dcpuForm.j2Cases)
			$scope.dcpuForm.j3Cases = ($scope.dcpuForm.j1aCases + $scope.dcpuForm.j1bCases) - $scope.dcpuForm.j2Cases;
		else
			$scope.dcpuForm.j3Cases = 0;
		
		if($scope.dcpuForm.j1aCases + $scope.dcpuForm.j1bCases < $scope.dcpuForm.j2Cases)
			$scope.dcpuForm.j2Cases = 0;
	};
	
	$scope.resetJ2=function(value)
	{
		var bgc=document.getElementById('j2Cases');
		$scope.removeStyleId = bgc;
		if (value == 0 || value==null){
    		$scope.dcpuForm.j2Boys = null;
    		$scope.dcpuForm.j2Girls= null;
    	}
		if(value > document.getElementById('j1cCases').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.j2Cases = null;
			document.getElementById('j3Cases').value = $scope.dcpuForm.j1aCases + $scope.dcpuForm.j1bCases;
			$scope.label1 = "J.2. cases disposed by the children's court in the reporting month"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "J.1.c. total cases dealt by the children's court in the reporting month";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.j3Cases = ($scope.dcpuForm.j1aCases + $scope.dcpuForm.j1bCases) - $scope.dcpuForm.j2Cases;
		}
	};
	
	$scope.resetJ1bBoys=function(value){
		
		if($scope.dcpuForm.j1aBoys + $scope.dcpuForm.j1bBoys > $scope.dcpuForm.j2Boys)
			$scope.dcpuForm.j3Boys = ($scope.dcpuForm.j1aBoys + $scope.dcpuForm.j1bBoys) - $scope.dcpuForm.j2Boys;
		else
			$scope.dcpuForm.j3Boys = 0;
		
		if($scope.dcpuForm.j1aBoys + $scope.dcpuForm.j1bBoys < $scope.dcpuForm.j2Boys)
			$scope.dcpuForm.j2Boys = 0;
	};
	
	$scope.resetJ2Boys=function(value){
		var bgc=document.getElementById('j2Boys');
		$scope.removeStyleId = bgc;
		
		if(value > document.getElementById('j1cBoys').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.j2Boys = null;
			document.getElementById('j3Boys').value = $scope.dcpuForm.j1aBoys + $scope.dcpuForm.j1bBoys;
			$scope.label1 = "J.2. cases disposed by the children's court in the reporting month:boys"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "J.1.c. total cases dealt by the children's court in the reporting month:boys";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.j3Boys = ($scope.dcpuForm.j1aBoys + $scope.dcpuForm.j1bBoys) - $scope.dcpuForm.j2Boys;
		}
	};

	$scope.resetJ1bGirls=function(value){
		
		if($scope.dcpuForm.j1aGirls + $scope.dcpuForm.j1bGirls > $scope.dcpuForm.j2Girls)
			$scope.dcpuForm.j3Girls = ($scope.dcpuForm.j1aGirls + $scope.dcpuForm.j1bGirls) - $scope.dcpuForm.j2Girls;
		else
			$scope.dcpuForm.j3Girls = 0;
		
		if($scope.dcpuForm.j1aGirls + $scope.dcpuForm.j1bGirls < $scope.dcpuForm.j2Girls)
			$scope.dcpuForm.j2Girls = 0;
	};
	
	$scope.resetJ2Girls=function(value){
		var bgc=document.getElementById('j2Girls');
		$scope.removeStyleId = bgc;
		
		if(value > document.getElementById('j1cGirls').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.j2Girls = null;
			document.getElementById('j3Girls').value = $scope.dcpuForm.j1aGirls + $scope.dcpuForm.j1bGirls;
			$scope.label1 = "J.2. cases disposed by the children's court in the reporting month:girls"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "J.1.c. total cases dealt by the children's court in the reporting month:girls";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.j3Girls = ($scope.dcpuForm.j1aGirls + $scope.dcpuForm.j1bGirls) - $scope.dcpuForm.j2Girls;
		}
	};
	
	$scope.resetL1ibBoys=function(){
		
		if($scope.dcpuForm.l1iaBoys + $scope.dcpuForm.l1ibBoys > $scope.dcpuForm.l1idBoys)
			$scope.dcpuForm.l1ieBoys = ($scope.dcpuForm.l1iaBoys + $scope.dcpuForm.l1ibBoys) - $scope.dcpuForm.l1idBoys;
		else
			$scope.dcpuForm.l1ieBoys = 0;
		
		if($scope.dcpuForm.l1iaBoys + $scope.dcpuForm.l1ibBoys < $scope.dcpuForm.l1idBoys)
			$scope.dcpuForm.l1idBoys = 0;
	};
	
	$scope.resetL1idBoys=function(value){
		var bgc=document.getElementById('l1idBoys');
		$scope.removeStyleId = bgc;
		
		if(value > document.getElementById('l1icBoys').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.l1idBoys = null;
			document.getElementById('l1ieBoys').value = $scope.dcpuForm.l1iaBoys + $scope.dcpuForm.l1ibBoys;
			$scope.label1 = "L.1.i.d. children moved from the home in the reporting month:boys"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "L.1.i.c. total children in the reporting month:boys";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.l1ieBoys = ($scope.dcpuForm.l1iaBoys + $scope.dcpuForm.l1ibBoys) - $scope.dcpuForm.l1idBoys;
		}
	};
	$scope.resetL1ibGirls=function(){
		
		if($scope.dcpuForm.l1iaGirls + $scope.dcpuForm.l1ibGirls > $scope.dcpuForm.l1idGirls)
			$scope.dcpuForm.l1ieGirls = ($scope.dcpuForm.l1iaGirls + $scope.dcpuForm.l1ibGirls) - $scope.dcpuForm.l1idGirls;
		else
			$scope.dcpuForm.l1ieGirls = 0;
		
		if($scope.dcpuForm.l1iaGirls + $scope.dcpuForm.l1ibGirls < $scope.dcpuForm.l1idGirls)
			$scope.dcpuForm.l1idGirls = 0;
	};
	
	$scope.resetL1idGirls=function(value){
		var bgc=document.getElementById('l1idGirls');
		$scope.removeStyleId = bgc;
		
		if(value > document.getElementById('l1icGirls').value){
			$scope.addStyle(bgc);
			$scope.dcpuForm.l1idGirls = null;
			document.getElementById('l1ieGirls').value = $scope.dcpuForm.l1iaGirls + $scope.dcpuForm.l1ibGirls;
			$scope.label1 = "L.1.i.d. children moved from the home in the reporting month:girls"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = "L.1.i.c. total children in the reporting month:girls";
		}else{
			$scope.removeStyle(bgc);
			$scope.dcpuForm.l1ieGirls = ($scope.dcpuForm.l1iaGirls + $scope.dcpuForm.l1ibGirls) - $scope.dcpuForm.l1idGirls;
		}
	};
	$scope.resetTABOthers = function(obj){
		if(obj.tabOthers < 1){
			obj.trainingAttendedByOthers = null;
		}
	};
	//O.a.1
	$scope.resetOA1=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.oA1Male = null;
    		$scope.dcpuForm.oA1Female= null;
    	}
	};
	
	$scope.resetOA2=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.oA2Male = null;
    		$scope.dcpuForm.oA2Female= null;
    	}
	};
	
	$scope.resetOA3=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.oA3Male = null;
    		$scope.dcpuForm.oA3Female= null;
    	}
	};
	$scope.resetOA4=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.oA4Male = null;
    		$scope.dcpuForm.oA4Female= null;
    	}
	};
	//O.b.
	
	$scope.resetOB1=function(val1, val2, val3, id){
		var bgc=document.getElementById(id);
		if (val1 == 0 || val1==null){
    		$scope.dcpuForm.oB1Male = null;
    		$scope.dcpuForm.oB1Female= null;
    	}
		var oA3Cases = Number(document.getElementById('oA3Cases').value);
		if(val1+val2+val3 > oA3Cases){
			$scope.dcpuForm.oB1Cases = null;
			$scope.label1 = "The sum of O.b.1, O.b.2 and O.b.3"; 
			$scope.alertMessage="values should not exceed";
			$scope.label2 = "O.a.3. total number of cases("+oA3Cases+") in the month ";
			$scope.addStyle(bgc);
		}else{
			$scope.removeStyle(bgc);
			$scope.label1 = "";
			$scope.alertMessage = "";
			$scope.label2 = "";
		}
	};
	
	$scope.resetOB2=function(val1, val2, val3, id){
		var bgc=document.getElementById(id);
		if (val1 == 0 || val1==null){
    		$scope.dcpuForm.oB2Male = null;
    		$scope.dcpuForm.oB2Female= null;
    	}
		var oA3Cases = Number(document.getElementById('oA3Cases').value);
		if(val1+val2+val3 > oA3Cases){
			$scope.dcpuForm.oB2Cases = null;
			$scope.label1 = "The sum of O.b.1, O.b.2 and O.b.3"; 
			$scope.alertMessage="values should not exceed";
			$scope.label2 = "O.a.3. total number of cases("+oA3Cases+") in the month ";
			$scope.addStyle(bgc);
		}else{
			$scope.removeStyle(bgc);
			$scope.label1 = "";
			$scope.alertMessage = "";
			$scope.label2 = "";
		}
	};
	
	$scope.resetOB3=function(val1, val2, val3, id){
		var bgc=document.getElementById(id);
		if (val1 == 0 || val1==null){
    		$scope.dcpuForm.oB3Male = null;
    		$scope.dcpuForm.oB3Female= null;
    	}
		var oA3Cases = Number(document.getElementById('oA3Cases').value);
		if(val1+val2+val3 > oA3Cases){
			$scope.dcpuForm.oB3Cases = null;
			$scope.label1 = "The sum of O.b.1, O.b.2 and O.b.3"; 
			$scope.alertMessage="values should not exceed";
			$scope.label2 = "O.a.3. total number of cases("+oA3Cases+") in the month ";
			$scope.addStyle(bgc);
		}else{
			$scope.removeStyle(bgc);
			$scope.label1 = "";
			$scope.alertMessage = "";
			$scope.label2 = "";
		}
	};
	$scope.resetOBMaleFemale = function(val1, val2, val3, id, compId){
		var bgc=document.getElementById(id);
		var sum = val1+val2+val3;
		var compVal = document.getElementById(compId).value;
		if(sum > compVal){
			$scope.dcpuForm[id] = null;
			$scope.label1 = id.includes('Male')?"The sum of values of O.b.1, O.b.2 and O.b.3 male":"The sum of values of O.b.1, O.b.2 and O.b.3 female"; 
			$scope.alertMessage="should not exceed";
			$scope.label2 = id.includes('Male')?"the value of O.a.3. total number of of cases in the month-male("+compVal+").":"the value of O.a.3. total number of of cases in the month-female("+compVal+").";
			$scope.addStyle(bgc);
		}else{
			$scope.removeStyle(bgc);
			$scope.label1 = "";
			$scope.alertMessage = "";
			$scope.label2 = "";
		}
	};
	
	$scope.resetOB6=function(value)
	{
		if (value == 0 || value==null){
    		$scope.dcpuForm.oB6Male = null;
    		$scope.dcpuForm.oB6Female= null;
    	}
	};
	
	$scope.removeStyleId = "";
	
	$scope.addStyle = function(element){
		element.style.setProperty("background-color", "#DC143C", "important");
		element.style.setProperty("color", "#FFFAF0", "important");
		element.style.setProperty("border-color", "red", "important");
       	
       	element.blur();
       	$('#ErrAlertModal').modal('show');
	};
	
	$scope.removeStyle = function(element){
		element.style.removeProperty("background-color", "#DC143C", "important");
		element.style.removeProperty("color", "#FFFAF0", "important");
		element.style.removeProperty("border-color", "red", "important");
	};
	
	$scope.removeStyleOnModalOk = function(){
		$scope.removeStyleId.style.removeProperty("background-color", "#DC143C", "important");
		$scope.removeStyleId.style.removeProperty("color", "#FFFAF0", "important");
		$scope.removeStyleId.style.removeProperty("border-color", "red", "important");
		$scope.removeStyleId.focus();
		$('#ErrAlertModal').modal('hide');
	};
	
	$scope.calculateTotal = function(id){
		var bgc=document.getElementById(id);
		$scope.removeStyleId = bgc;
		//B
		if(id == 'b4c'){
			var c = $scope.dcpuForm.b4c==undefined?0:$scope.dcpuForm.b4c;
			var a = $scope.dcpuForm.b4a==undefined?0:$scope.dcpuForm.b4a;
			var b = $scope.dcpuForm.b4b==undefined?0:$scope.dcpuForm.b4b;
			if(c > a + b){
				$scope.dcpuForm.b4c = null;
				$scope.dcpuForm.b4d = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "B.4.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			}else{
				$scope.dcpuForm.b4d = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}	
		//C
		if(id == 'c4c'){
			var c = $scope.dcpuForm.c4c==undefined?0:$scope.dcpuForm.c4c;
			var a = $scope.dcpuForm.c4a==undefined?0:$scope.dcpuForm.c4a;
			var b = $scope.dcpuForm.c4b==undefined?0:$scope.dcpuForm.c4b;
			if(c > a + b){
				$scope.dcpuForm.c4c = null;
				$scope.dcpuForm.c4d = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "C.4.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			}else{
				$scope.dcpuForm.c4d = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//G
		if(id == 'g4c'){
			var c = $scope.dcpuForm.g4c==undefined?0:$scope.dcpuForm.g4c;
			var a = $scope.dcpuForm.g4a==undefined?0:$scope.dcpuForm.g4a;
			var b = $scope.dcpuForm.g4b==undefined?0:$scope.dcpuForm.g4b;
			if(c > a + b){
				$scope.dcpuForm.g4c = null;
				$scope.dcpuForm.g4d = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "G.4.c. total amount spent in the month"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			}else{
				$scope.dcpuForm.g4d = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//H
		if(id == 'h4c'){
			var c = $scope.dcpuForm.h4c==undefined?0:$scope.dcpuForm.h4c;
			var a = $scope.dcpuForm.h4a==undefined?0:$scope.dcpuForm.h4a;
			var b = $scope.dcpuForm.h4b==undefined?0:$scope.dcpuForm.h4b;
			if(c > a + b){
				$scope.dcpuForm.h4c = null;
				$scope.dcpuForm.h4d = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "H.4.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			}else{
				$scope.dcpuForm.h4d = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L1E
		if(id == 'l1iiicEcost'){
			var c = $scope.dcpuForm.l1iiicEcost==undefined?0:$scope.dcpuForm.l1iiicEcost;
			var a = $scope.dcpuForm.l1iiiaEcost==undefined?0:$scope.dcpuForm.l1iiiaEcost;
			var b = $scope.dcpuForm.l1iiibEcost==undefined?0:$scope.dcpuForm.l1iiibEcost;
			if(c > a + b){
				$scope.dcpuForm.l1iiicEcost = null;
				$scope.dcpuForm.l1iiidEcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.1.iii.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.1.iii.a. opening balance and L.1.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l1iiidEcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L1P
		if(id == 'l1iiicPcost'){
			var c = $scope.dcpuForm.l1iiicPcost==undefined?0:$scope.dcpuForm.l1iiicPcost;
			var a = $scope.dcpuForm.l1iiiaPcost==undefined?0:$scope.dcpuForm.l1iiiaPcost;
			var b = $scope.dcpuForm.l1iiibPcost==undefined?0:$scope.dcpuForm.l1iiibPcost;
			if(c > a + b){
				$scope.dcpuForm.l1iiicPcost = null;
				$scope.dcpuForm.l1iiidPcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.1.iii.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.1.iii.a. opening balance and L.1.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l1iiidPcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		
		//L2E
		if(id == 'l2iiicEcost'){
			var c = $scope.dcpuForm.l2iiicEcost==undefined?0:$scope.dcpuForm.l2iiicEcost;
			var a = $scope.dcpuForm.l2iiiaEcost==undefined?0:$scope.dcpuForm.l2iiiaEcost;
			var b = $scope.dcpuForm.l2iiibEcost==undefined?0:$scope.dcpuForm.l2iiibEcost;
			if(c > a + b){
				$scope.dcpuForm.l2iiicEcost = null;
				$scope.dcpuForm.l2iiidEcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.2.iii.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.2.iii.a. opening balance and L.2.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l2iiidEcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L2P
		if(id == 'l2iiicPcost'){
			var c = $scope.dcpuForm.l2iiicPcost==undefined?0:$scope.dcpuForm.l2iiicPcost;
			var a = $scope.dcpuForm.l2iiiaPcost==undefined?0:$scope.dcpuForm.l2iiiaPcost;
			var b = $scope.dcpuForm.l2iiibPcost==undefined?0:$scope.dcpuForm.l2iiibPcost;
			if(c > a + b){
				$scope.dcpuForm.l2iiicPcost = null;
				$scope.dcpuForm.l2iiidPcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.2.iii.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.2.iii.a. opening balance and L.2.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l2iiidPcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		
		//L3E
		if(id == 'l3iiicEcost'){
			var c = $scope.dcpuForm.l3iiicEcost==undefined?0:$scope.dcpuForm.l3iiicEcost;
			var a = $scope.dcpuForm.l3iiiaEcost==undefined?0:$scope.dcpuForm.l3iiiaEcost;
			var b = $scope.dcpuForm.l3iiibEcost==undefined?0:$scope.dcpuForm.l3iiibEcost;
			if(c > a + b){
				$scope.dcpuForm.l3iiicEcost = null;
				$scope.dcpuForm.l3iiidEcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.3.iii.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.3.iii.a. opening balance and L.3.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l3iiidEcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L3P
		if(id == 'l3iiicPcost'){
			var c = $scope.dcpuForm.l3iiicPcost==undefined?0:$scope.dcpuForm.l3iiicPcost;
			var a = $scope.dcpuForm.l3iiiaPcost==undefined?0:$scope.dcpuForm.l3iiiaPcost;
			var b = $scope.dcpuForm.l3iiibPcost==undefined?0:$scope.dcpuForm.l3iiibPcost;
			if(c > a + b){
				$scope.dcpuForm.l3iiicPcost = null;
				$scope.dcpuForm.l3iiidPcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.3.iii.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.3.iii.a. opening balance and L.3.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l3iiidPcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		
		//L4E
		if(id == 'l4iii1cEcost'){
			var c = $scope.dcpuForm.l4iii1cEcost==undefined?0:$scope.dcpuForm.l4iii1cEcost;
			var a = $scope.dcpuForm.l4iii1aEcost==undefined?0:$scope.dcpuForm.l4iii1aEcost;
			var b = $scope.dcpuForm.l4iii1bEcost==undefined?0:$scope.dcpuForm.l4iii1bEcost;
			if(c > a + b){
				$scope.dcpuForm.l4iii1cEcost = null;
				$scope.dcpuForm.l4iii1dEcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.4.iii.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.4.iii.a. opening balance and L.4.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l4iii1dEcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L4P
		if(id == 'l4iii1cPcost'){
			var c = $scope.dcpuForm.l4iii1cPcost==undefined?0:$scope.dcpuForm.l4iii1cPcost;
			var a = $scope.dcpuForm.l4iii1aPcost==undefined?0:$scope.dcpuForm.l4iii1aPcost;
			var b = $scope.dcpuForm.l4iii1bPcost==undefined?0:$scope.dcpuForm.l4iii1bPcost;
			if(c > a + b){
				$scope.dcpuForm.l4iii1cPcost = null;
				$scope.dcpuForm.l4iii1dPcost = a + b;
				$scope.addStyle(bgc);
				$scope.label1 = "L.4.iii.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.4.iii.a. opening balance and L.4.iii.b. amount received.";
			}else{
				$scope.dcpuForm.l4iii1dPcost = (a + b)-c;
				$scope.removeStyle(bgc);
			}
		}
		
		//L4iii
		if(id == 'l4iii2aTotalAmountSpent'){
			var a = $scope.dcpuForm.l4iii2aOpeningBalanceFirstDay==undefined?0:$scope.dcpuForm.l4iii2aOpeningBalanceFirstDay;
			var b = $scope.dcpuForm.l4iii2aTotalAmountReceived==undefined?0:$scope.dcpuForm.l4iii2aTotalAmountReceived;
			var c = $scope.dcpuForm.l4iii2aTotalAmountSpent==undefined?0:$scope.dcpuForm.l4iii2aTotalAmountSpent;
			if(c > a + b){
				$scope.dcpuForm.l4iii2aTotalAmountSpent = c = null;
				$scope.dcpuForm.l4iii2aClosingBalanceLastday = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.4.iii.2.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			
			}else{
				$scope.dcpuForm.l4iii2aClosingBalanceLastday = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L5iiiE
		if(id == 'l5iii1cEcost'){
			var a = $scope.dcpuForm.l5iii1aEcost==undefined?0:$scope.dcpuForm.l5iii1aEcost;
			var b = $scope.dcpuForm.l5iii1bEcost==undefined?0:$scope.dcpuForm.l5iii1bEcost;
			var c = $scope.dcpuForm.l5iii1cEcost==undefined?0:$scope.dcpuForm.l5iii1cEcost;
			if(c > a + b){
				$scope.dcpuForm.l5iii1cEcost = c = null;
				$scope.dcpuForm.l5iii1dEcost = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.5.iii.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.5.iii.a. opening balance and L.5.iii.b. amount received.";
			
			}else{
				$scope.dcpuForm.l5iii1dEcost = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L5iiiP
		if(id == 'l5iii1cPcost'){
			var a = $scope.dcpuForm.l5iii1aPcost==undefined?0:$scope.dcpuForm.l5iii1aPcost;
			var b = $scope.dcpuForm.l5iii1bPcost==undefined?0:$scope.dcpuForm.l5iii1bPcost;
			var c = $scope.dcpuForm.l5iii1cPcost==undefined?0:$scope.dcpuForm.l5iii1cPcost;
			if(c > a + b){
				$scope.dcpuForm.l5iii1cPcost = c = null;
				$scope.dcpuForm.l5iii1dPcost = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.5.iii.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.5.iii.a. opening balance and L.5.iii.b. amount received.";
			
			}else{
				$scope.dcpuForm.l5iii1dPcost = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L5iii2
		if(id == 'l5iii2cTotalAmountSpent'){
			var a = $scope.dcpuForm.l5iii2aOpeningBalanceFirstDay==undefined?0:$scope.dcpuForm.l5iii2aOpeningBalanceFirstDay;
			var b = $scope.dcpuForm.l5iii2bTotalAmountReceived==undefined?0:$scope.dcpuForm.l5iii2bTotalAmountReceived;
			var c = $scope.dcpuForm.l5iii2cTotalAmountSpent==undefined?0:$scope.dcpuForm.l5iii2cTotalAmountSpent;
			if(c > a + b){
				$scope.dcpuForm.l5iii2cTotalAmountSpent = c = null;
				$scope.dcpuForm.l5iii2dClosingBalanceLastday = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.5.iii.2.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			
			}else{
				$scope.dcpuForm.l5iii2dClosingBalanceLastday = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
//		L6iii1C
		if(id == 'l6iii1cEcost'){
			var a = $scope.dcpuForm.l6iii1aEcost==undefined?0:$scope.dcpuForm.l6iii1aEcost;
			var b = $scope.dcpuForm.l6iii1bEcost==undefined?0:$scope.dcpuForm.l6iii1bEcost;
			var c = $scope.dcpuForm.l6iii1cEcost==undefined?0:$scope.dcpuForm.l6iii1cEcost;
			if(c > a + b){
				$scope.dcpuForm.l6iii1cEcost = c = null;
				$scope.dcpuForm.l6iii1dEcost = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.6.iii.1.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.6.iii.1.a. opening balance and L.6.iii.1.b. amount received.";
			
			}else{
				$scope.dcpuForm.l6iii1dEcost = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
//		L6iii1P
		if(id == 'l6iii1cPcost'){
			var a = $scope.dcpuForm.l6iii1aPcost==undefined?0:$scope.dcpuForm.l6iii1aPcost;
			var b = $scope.dcpuForm.l6iii1bPcost==undefined?0:$scope.dcpuForm.l6iii1bPcost;
			var c = $scope.dcpuForm.l6iii1cPcost==undefined?0:$scope.dcpuForm.l6iii1cPcost;
			if(c > a + b){
				$scope.dcpuForm.l6iii1cPcost = c = null;
				$scope.dcpuForm.l6iii1dPcost = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.6.iii.1.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.6.iii.1.a. opening balance and L.6.iii.1.b. amount received.";
			
			}else{
				$scope.dcpuForm.l6iii1dPcost = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L.6.iii.2
		if(id == 'l6iii2cTotalAmountSpent'){
			var a = $scope.dcpuForm.l6iii2aOpeningBalanceFirstDay==undefined?0:$scope.dcpuForm.l6iii2aOpeningBalanceFirstDay;
			var b = $scope.dcpuForm.l6iii2bTotalAmountReceived==undefined?0:$scope.dcpuForm.l6iii2bTotalAmountReceived;
			var c = $scope.dcpuForm.l6iii2cTotalAmountSpent==undefined?0:$scope.dcpuForm.l6iii2cTotalAmountSpent;
			if(c > a + b){
				$scope.dcpuForm.l6iii2cTotalAmountSpent = c = null;
				$scope.dcpuForm.l6iii2dClosingBalanceLastday = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.6.iii.2.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			
			}else{
				$scope.dcpuForm.l6iii2dClosingBalanceLastday = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//	L7iii1C
		if(id == 'l7iii1cEcost'){
			var a = $scope.dcpuForm.l7iii1aEcost==undefined?0:$scope.dcpuForm.l7iii1aEcost;
			var b = $scope.dcpuForm.l7iii1bEcost==undefined?0:$scope.dcpuForm.l7iii1bEcost;
			var c = $scope.dcpuForm.l7iii1cEcost==undefined?0:$scope.dcpuForm.l7iii1cEcost;
			if(c > a + b){
				$scope.dcpuForm.l7iii1cEcost = c = null;
				$scope.dcpuForm.l7iii1dEcost = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.7.iii.1.c. total amount spent in the month:establishment cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.7.iii.1.a. opening balance and L.7.iii.1.b. amount received.";
			
			}else{
				$scope.dcpuForm.l7iii1dEcost = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//	L7iii1P
		if(id == 'l7iii1cPcost'){
			var a = $scope.dcpuForm.l7iii1aPcost==undefined?0:$scope.dcpuForm.l7iii1aPcost;
			var b = $scope.dcpuForm.l7iii1bPcost==undefined?0:$scope.dcpuForm.l7iii1bPcost;
			var c = $scope.dcpuForm.l7iii1cPcost==undefined?0:$scope.dcpuForm.l7iii1cPcost;
			if(c > a + b){
				$scope.dcpuForm.l7iii1cPcost = c = null;
				$scope.dcpuForm.l7iii1dPcost = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.7.iii.1.c. total amount spent in the month:programme cost";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of L.7.iii.1.a. opening balance and L.7.iii.1.b. amount received.";
			
			}else{
				$scope.dcpuForm.l7iii1dPcost = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L.7.iii.2
		if(id == 'l7ii2cTotalAmountSpent'){
			var a = $scope.dcpuForm.l7ii2aOpeningBalanceFirstDay==undefined?0:$scope.dcpuForm.l7ii2aOpeningBalanceFirstDay;
			var b = $scope.dcpuForm.l7ii2bTotalAmountReceived==undefined?0:$scope.dcpuForm.l7ii2bTotalAmountReceived;
			var c = $scope.dcpuForm.l7ii2cTotalAmountSpent==undefined?0:$scope.dcpuForm.l7ii2cTotalAmountSpent;
			if(c > a + b){
				$scope.dcpuForm.l7ii2cTotalAmountSpent = c = null;
				$scope.dcpuForm.l7ii2dClosingBalanceLastday = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "L.7.iii.2.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			
			}else{
				$scope.dcpuForm.l7ii2dClosingBalanceLastday = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//M23     m23cTotalAmountSpent
		if(id == 'm23cTotalAmountSpent'){
			var a = $scope.dcpuForm.m23aOpeningBalanceFirstDay==undefined?0:$scope.dcpuForm.m23aOpeningBalanceFirstDay;
			var b = $scope.dcpuForm.m23bTotalAmountReceived==undefined?0:$scope.dcpuForm.m23bTotalAmountReceived;
			var c = $scope.dcpuForm.m23cTotalAmountSpent==undefined?0:$scope.dcpuForm.m23cTotalAmountSpent;
			if(c > a + b){
				$scope.dcpuForm.m23cTotalAmountSpent = c = null;
				$scope.dcpuForm.m23dClosingBalanceLastday = (a+b)-c;
				$scope.addStyle(bgc);
				$scope.label1 = "M.23.c. total amount spent in the month";
				$scope.alertMessage="should not exceed";
				$scope.label2 = "the sum of opening balance and amount received.";
			
			}else{
				$scope.dcpuForm.m23dClosingBalanceLastday = (a+b)-c;
				$scope.removeStyle(bgc);
			}
		}
		//L.2.i.a boys
		if(id == 'l2idBoys'){
			var a = $scope.dcpuForm.l2iaBoys==undefined?0:$scope.dcpuForm.l2iaBoys;
			var b = $scope.dcpuForm.l2ibBoys==undefined?0:$scope.dcpuForm.l2ibBoys;
			var d = $scope.dcpuForm.l2idBoys==undefined?0:$scope.dcpuForm.l2idBoys;
			if(d > a + b){
				$scope.dcpuForm.l2idBoys = d = null;
				$scope.dcpuForm.l2ieBoys = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.2.i.d. children moved from the home in the reporting month:boys"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.2.i.c. total children in the reporting month:boys.";
			
			}else{
				$scope.dcpuForm.l2ieBoys = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.2.i.a girls
		if(id == 'l2idGirls'){
			var a = $scope.dcpuForm.l2iaGirls==undefined?0:$scope.dcpuForm.l2iaGirls;
			var b = $scope.dcpuForm.l2ibGirls==undefined?0:$scope.dcpuForm.l2ibGirls;
			var d = $scope.dcpuForm.l2idGirls==undefined?0:$scope.dcpuForm.l2idGirls;
			if(d > a + b){
				$scope.dcpuForm.l2idGirls = d = null;
				$scope.dcpuForm.l2ieGirls = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.2.i.d. children moved from the home in the reporting month:girls"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.2.i.c. total children in the reporting month:girls.";
			
			}else{
				$scope.dcpuForm.l2ieGirls = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.3.i.a boys l3idBoys
		if(id == 'l3idBoys'){
			var a = $scope.dcpuForm.l3iaBoys==undefined?0:$scope.dcpuForm.l3iaBoys;
			var b = $scope.dcpuForm.l3ibBoys==undefined?0:$scope.dcpuForm.l3ibBoys;
			var d = $scope.dcpuForm.l3idBoys==undefined?0:$scope.dcpuForm.l3idBoys;
			if(d > a + b){
				$scope.dcpuForm.l3idBoys = d = null;
				$scope.dcpuForm.l3ieBoys = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.3.i.d. children moved from the home in the reporting month:boys"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.3.i.c. total children in the reporting month:boys.";
			
			}else{
				$scope.dcpuForm.l3ieBoys = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.3.i.a girls
		if(id == 'l3idGirls'){
			var a = $scope.dcpuForm.l3iaGirls==undefined?0:$scope.dcpuForm.l3iaGirls;
			var b = $scope.dcpuForm.l3ibGirls==undefined?0:$scope.dcpuForm.l3ibGirls;
			var d = $scope.dcpuForm.l3idGirls==undefined?0:$scope.dcpuForm.l3idGirls;
			if(d > a + b){
				$scope.dcpuForm.l3idGirls = d = null;
				$scope.dcpuForm.l3ieGirls = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.3.i.d. children moved from the home in the reporting month:girls"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.3.i.c. total children in the reporting month:girls.";
			
			}else{
				$scope.dcpuForm.l3ieGirls = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.4.i.d.
		if(id == 'l4iaChildrenMovedFromHome'){
			var a = $scope.dcpuForm.l4iaChildrenOnFirstDay==undefined?0:$scope.dcpuForm.l4iaChildrenOnFirstDay;
			var b = $scope.dcpuForm.l4ibChildrenAdmitted==undefined?0:$scope.dcpuForm.l4ibChildrenAdmitted;
			var d = $scope.dcpuForm.l4iaChildrenMovedFromHome==undefined?0:$scope.dcpuForm.l4iaChildrenMovedFromHome;
			if(d > a + b){
				$scope.dcpuForm.l4iaChildrenMovedFromHome = d = null;
				$scope.dcpuForm.l4iaTotalChildrenLastday = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.4.i.d. children moved from the home in the reporting month"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.4.i.c. total children in the reporting month.";
			
			}else{
				$scope.dcpuForm.l4iaTotalChildrenLastday = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.5.i.d.
		if(id == 'l5idChildrenMovedFromHome'){
			var a = $scope.dcpuForm.l5iaChildrenFirstDay==undefined?0:$scope.dcpuForm.l5iaChildrenFirstDay;
			var b = $scope.dcpuForm.l5ibChildrenAdmitted==undefined?0:$scope.dcpuForm.l5ibChildrenAdmitted;
			var d = $scope.dcpuForm.l5idChildrenMovedFromHome==undefined?0:$scope.dcpuForm.l5idChildrenMovedFromHome;
			if(d > a + b){
				$scope.dcpuForm.l5idChildrenMovedFromHome = d = null;
				$scope.dcpuForm.l5ieTotalChildrenOnLastday = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.5.i.d. children moved from the home in the reporting month"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.5.i.c. total children in the reporting month.";
			
			}else{
				$scope.dcpuForm.l5ieTotalChildrenOnLastday = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.6.i.a. boys l6idBoys
		if(id == 'l6idBoys'){
			var a = $scope.dcpuForm.l6iaBoys==undefined?0:$scope.dcpuForm.l6iaBoys;
			var b = $scope.dcpuForm.l6ibBoys==undefined?0:$scope.dcpuForm.l6ibBoys;
			var d = $scope.dcpuForm.l6idBoys==undefined?0:$scope.dcpuForm.l6idBoys;
			if(d > a + b){
				$scope.dcpuForm.l6idBoys = d = null;
				$scope.dcpuForm.l6ieBoys = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.6.i.d. children moved from the home in the reporting month:boys"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.6.i.c. total children in the reporting month:boys.";
			
			}else{
				$scope.dcpuForm.l6ieBoys = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.6.i.a. girls
		if(id == 'l6idGirls'){
			var a = $scope.dcpuForm.l6iaGirls==undefined?0:$scope.dcpuForm.l6iaGirls;
			var b = $scope.dcpuForm.l6ibGirls==undefined?0:$scope.dcpuForm.l6ibGirls;
			var d = $scope.dcpuForm.l6idGirls==undefined?0:$scope.dcpuForm.l6idGirls;
			if(d > a + b){
				$scope.dcpuForm.l6idGirls = d = null;
				$scope.dcpuForm.l6ieGirls = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.6.i.d. children moved from the home in the reporting month:girls"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.6.i.c. total children in the reporting month:girls.";
			
			}else{
				$scope.dcpuForm.l6ieGirls = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.7.i.a. boys l7idBoys
		if(id == 'l7idBoys'){
			var a = $scope.dcpuForm.l7iaBoys==undefined?0:$scope.dcpuForm.l7iaBoys;
			var b = $scope.dcpuForm.l7ibBoys==undefined?0:$scope.dcpuForm.l7ibBoys;
			var d = $scope.dcpuForm.l7idBoys==undefined?0:$scope.dcpuForm.l7idBoys;
			if(d > a + b){
				$scope.dcpuForm.l7idBoys = d = null;
				$scope.dcpuForm.l7ieBoys = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.7.i.d. children moved from the home in the reporting month:boys"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.7.i.c. total children in the reporting month:boys.";
			
			}else{
				$scope.dcpuForm.l7ieBoys = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//L.7.i.a. girls
		if(id == 'l7idGirls'){
			var a = $scope.dcpuForm.l7iaGirls==undefined?0:$scope.dcpuForm.l7iaGirls;
			var b = $scope.dcpuForm.l7ibGirls==undefined?0:$scope.dcpuForm.l7ibGirls;
			var d = $scope.dcpuForm.l7idGirls==undefined?0:$scope.dcpuForm.l7idGirls;
			if(d > a + b){
				$scope.dcpuForm.l7idGirls = d = null;
				$scope.dcpuForm.l7ieGirls = (a+b)-d;
				$scope.addStyle(bgc);
				$scope.label1 = "L.7.i.d. children moved from the home in the reporting month:girls"; 
				$scope.alertMessage="should not exceed";
				$scope.label2 = "L.7.i.c. total children in the reporting month:girls.";
			
			}else{
				$scope.dcpuForm.l7ieGirls = (a+b)-d;
				$scope.removeStyle(bgc);
			}
		}
		//O.b.
		
	};


//	$scope.validateAmount = function(idz,checkId){
//		var bgc=document.getElementById(idz);
//		var secondInput =parseInt(document.getElementById(checkId).value);
//        if(secondInput<0){
//	         bgc.style.setProperty("background-color", "#DC143C", "important");
//	       	 bgc.style.setProperty("color", "#FFFAF0", "important");
//	       	 bgc.style.setProperty("border-color", "red", "important");
//	       	 
//	       	 $scope.alertMessage=" Closing balance can not be less than 0";
//	       	 $('#ErrAlertModal').modal('show');
//	      	
//	       	 bgc.value=0;			             
//        }else{
//	         bgc.style.removeProperty("background-color", "#DC143C", "important");
//	       	 bgc.style.removeProperty("color", "#FFFAF0", "important");
//	       	 bgc.style.removeProperty("border-color", "red", "important");
//	       	 $('#ErrAlertModal').modal('hide');
//       	}
//	};
	$("input[type='number']").keyup(function() {
		 removeNegetiveColor();
	});
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
	angular.forEach($scope.dcpuForm, function(value, index) {
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
	$scope.resetDate = function(model,id){
		if(model < 1 || angular.isUndefined(model)){
			switch (id) {
			case 'm1bDatesMeetingDCPC':
				$scope.dcpuForm.m1bDatesMeetingDCPC= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm2bDatesMeetingDSFCAC':
				$scope.dcpuForm.m2bDatesMeetingDSFCAC= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm3bDatesMeetingChildLineAdvisory':
				$scope.dcpuForm.m3bDatesMeetingChildLineAdvisory= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm4bDatesMeetingDistrictJudges':
				$scope.dcpuForm.m4bDatesMeetingDistrictJudges= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm5bDatesMeetingCoordination':
				$scope.dcpuForm.m5bDatesMeetingCoordination= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm6bDatesMeetingAHTU':
				$scope.dcpuForm.m6bDatesMeetingAHTU= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm7bDatesMeetingCDPO':
				$scope.dcpuForm.m7bDatesMeetingCDPO= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm10bDatesOfVisits':
				$scope.dcpuForm.m10bDatesOfVisits= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm11bDatesOfVisits':
				$scope.dcpuForm.m11bDatesOfVisits= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm12bDatesOfPrograms':
				$scope.dcpuForm.m12bDatesOfPrograms= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm13bDatesOfActivities':
				$scope.dcpuForm.m13bDatesOfActivities= null;
				$('#'+id).datepicker("setDate",null);
				break;	
			default:
				break;
			}
		}
	};
	
	$scope.resetDateonSelect = function(model,id){
		if(model == 'false'){
			switch (id) {
			case 'm8bDatesMeetingQuarterlyCWC':
				$scope.dcpuForm.m8bDatesMeetingQuarterlyCWC= null;
				$('#'+id).datepicker("setDate",null);
				break;
			case 'm9bDatesMeetingReportDM':
				$scope.dcpuForm.m9bDatesMeetingReportDM= null;
				$('#'+id).datepicker("setDate",null);
				break;	
			default:
				break;
			}
		}
	};
	
	var submitted = false;
	
	var prepareObject = function(dcpuForm){
		dcpuForm.b3OrphansBoysYearsBelow6=parseInt(document.getElementById('b3OrphansBoysYearsBelow6').value);
		dcpuForm.b3OrphansGirlsYearsBelow6=parseInt(document.getElementById('b3OrphansGirlsYearsBelow6').value);
		dcpuForm.b3OrphansTotalYearsBelow6=parseInt(document.getElementById('b3OrphansTotalYearsBelow6').value);
		dcpuForm.b3OrphansBoysYears6to18=parseInt(document.getElementById('b3OrphansBoysYears6to18').value);
		dcpuForm.b3OrphansGirlsYears6to18=parseInt(document.getElementById('b3OrphansGirlsYears6to18').value);
		dcpuForm.b3OrphansTotalYears6to18=parseInt(document.getElementById('b3OrphansTotalYears6to18').value);
		dcpuForm.b3OrphansBoysTotal=parseInt(document.getElementById('b3OrphansBoysTotal').value);
		dcpuForm.b3OrphansGirlsTotal=parseInt(document.getElementById('b3OrphansGirlsTotal').value);
		dcpuForm.b3OrphansTotal=parseInt(document.getElementById('b3OrphansTotal').value);
		dcpuForm.b3HIVBoysYearsBelow6=parseInt(document.getElementById('b3HIVBoysYearsBelow6').value);
		dcpuForm.b3HIVGirlsYearsBelow6=parseInt(document.getElementById('b3HIVGirlsYearsBelow6').value);
		dcpuForm.b3HIVTotalYearsBelow6=parseInt(document.getElementById('b3HIVTotalYearsBelow6').value);
		dcpuForm.b3HIVBoysYears6to18=parseInt(document.getElementById('b3HIVBoysYears6to18').value);
		dcpuForm.b3HIVGirlsYears6to18=parseInt(document.getElementById('b3HIVGirlsYears6to18').value);
		dcpuForm.b3HIVTotalYears6to18=parseInt(document.getElementById('b3HIVTotalYears6to18').value);
		dcpuForm.b3HIVBoysTotal=parseInt(document.getElementById('b3HIVBoysTotal').value);
		dcpuForm.b3HIVGirlsTotal=parseInt(document.getElementById('b3HIVGirlsTotal').value);
		dcpuForm.b3HIVTotal=parseInt(document.getElementById('b3HIVTotal').value);
		dcpuForm.b3LeprosyBoysYearsBelow6=parseInt(document.getElementById('b3LeprosyBoysYearsBelow6').value);
		dcpuForm.b3LeprosyGirlsYearsBelow6=parseInt(document.getElementById('b3LeprosyGirlsYearsBelow6').value);
		dcpuForm.b3LeprosyTotalYearsBelow6=parseInt(document.getElementById('b3LeprosyTotalYearsBelow6').value);
		dcpuForm.b3LeprosyBoysYears6to18=parseInt(document.getElementById('b3LeprosyBoysYears6to18').value);
		dcpuForm.b3LeprosyGirlsYears6to18=parseInt(document.getElementById('b3LeprosyGirlsYears6to18').value);
		dcpuForm.b3LeprosyTotalYears6to18=parseInt(document.getElementById('b3LeprosyTotalYears6to18').value);
		dcpuForm.b3LeprosyBoysTotal=parseInt(document.getElementById('b3LeprosyBoysTotal').value);
		dcpuForm.b3LeprosyGirlsTotal=parseInt(document.getElementById('b3LeprosyGirlsTotal').value);
		dcpuForm.b3LeprosyTotal=parseInt(document.getElementById('b3LeprosyTotal').value);
		dcpuForm.b3TotalBoysYearsBelow6=parseInt(document.getElementById('b3TotalBoysYearsBelow6').value);
		dcpuForm.b3TotalGirlsYearsBelow6=parseInt(document.getElementById('b3TotalGirlsYearsBelow6').value);
		dcpuForm.b3TotalTotalYearsBelow6=parseInt(document.getElementById('b3TotalTotalYearsBelow6').value);
		dcpuForm.b3TotalBoysYears6to18=parseInt(document.getElementById('b3TotalBoysYears6to18').value);
		dcpuForm.b3TotalGirlsYears6to18=parseInt(document.getElementById('b3TotalGirlsYears6to18').value);
		dcpuForm.b3TotalTotalYears6to18=parseInt(document.getElementById('b3TotalTotalYears6to18').value);
		dcpuForm.b3TotalBoysTotal=parseInt(document.getElementById('b3TotalBoysTotal').value);
		dcpuForm.b3TotalGirlsTotal=parseInt(document.getElementById('b3TotalGirlsTotal').value);
		dcpuForm.b3Total=parseInt(document.getElementById('b3Total').value);
		
		dcpuForm.c3=parseInt(document.getElementById('c3').value);
		
		dcpuForm.b1OrphansTotalYearsBelow6=parseInt(document.getElementById('b1OrphansTotalYearsBelow6').value)==0?null:parseInt(document.getElementById('b1OrphansTotalYearsBelow6').value);
		dcpuForm.b1OrphansTotalYears6to18=parseInt(document.getElementById('b1OrphansTotalYears6to18').value)==0?null:parseInt(document.getElementById('b1OrphansTotalYears6to18').value);
		dcpuForm.b1OrphansBoysTotal=parseInt(document.getElementById('b1OrphansBoysTotal').value)==0?null:parseInt(document.getElementById('b1OrphansBoysTotal').value);
		dcpuForm.b1OrphansGirlsTotal=parseInt(document.getElementById('b1OrphansGirlsTotal').value)==0?null:parseInt(document.getElementById('b1OrphansGirlsTotal').value);
		dcpuForm.b1OrphansTotal=parseInt(document.getElementById('b1OrphansTotal').value)==0?null:parseInt(document.getElementById('b1OrphansTotal').value);
		dcpuForm.b1HIVTotalYearsBelow6=parseInt(document.getElementById('b1HIVTotalYearsBelow6').value)==0?null:parseInt(document.getElementById('b1HIVTotalYearsBelow6').value);
		dcpuForm.b1HIVTotalYears6to18=parseInt(document.getElementById('b1HIVTotalYears6to18').value)==0?null:parseInt(document.getElementById('b1HIVTotalYears6to18').value);
		dcpuForm.b1HIVBoysTotal=parseInt(document.getElementById('b1HIVBoysTotal').value)==0?null:parseInt(document.getElementById('b1HIVBoysTotal').value);
		dcpuForm.b1HIVGirlsTotal=parseInt(document.getElementById('b1HIVGirlsTotal').value)==0?null:parseInt(document.getElementById('b1HIVGirlsTotal').value);
		dcpuForm.b1HIVTotal=parseInt(document.getElementById('b1HIVTotal').value)==0?null:parseInt(document.getElementById('b1HIVTotal').value);
		dcpuForm.b1LeprosyTotalYearsBelow6=parseInt(document.getElementById('b1LeprosyTotalYearsBelow6').value)==0?null:parseInt(document.getElementById('b1LeprosyTotalYearsBelow6').value);
		dcpuForm.b1LeprosyTotalYears6to18=parseInt(document.getElementById('b1LeprosyTotalYears6to18').value)==0?null:parseInt(document.getElementById('b1LeprosyTotalYears6to18').value);
		dcpuForm.b1LeprosyBoysTotal=parseInt(document.getElementById('b1LeprosyBoysTotal').value)==0?null:parseInt(document.getElementById('b1LeprosyBoysTotal').value);
		dcpuForm.b1LeprosyGirlsTotal=parseInt(document.getElementById('b1LeprosyGirlsTotal').value)==0?null:parseInt(document.getElementById('b1LeprosyGirlsTotal').value);
		dcpuForm.b1LeprosyTotal=parseInt(document.getElementById('b1LeprosyTotal').value)==0?null:parseInt(document.getElementById('b1LeprosyTotal').value);
		
		dcpuForm.b1TotalBoysYearsBelow6=parseInt(document.getElementById('b1TotalBoysYearsBelow6').value);
		dcpuForm.b1TotalGirlsYearsBelow6=parseInt(document.getElementById('b1TotalGirlsYearsBelow6').value);
		dcpuForm.b1TotalTotalYearsBelow6=parseInt(document.getElementById('b1TotalTotalYearsBelow6').value);
		dcpuForm.b1TotalBoysYears6to18=parseInt(document.getElementById('b1TotalBoysYears6to18').value);
		dcpuForm.b1TotalGirlsYears6to18=parseInt(document.getElementById('b1TotalGirlsYears6to18').value);
		dcpuForm.b1TotalTotalYears6to18=parseInt(document.getElementById('b1TotalTotalYears6to18').value);
		dcpuForm.b1TotalBoysTotal=parseInt(document.getElementById('b1TotalBoysTotal').value);
		dcpuForm.b1TotalGirlsTotal=parseInt(document.getElementById('b1TotalGirlsTotal').value);
		dcpuForm.b1Total=parseInt(document.getElementById('b1Total').value);
		
		
		dcpuForm.b2OrphansTotalYearsBelow6=parseInt(document.getElementById('b2OrphansTotalYearsBelow6').value);
		dcpuForm.b2OrphansTotalYears6to18=parseInt(document.getElementById('b2OrphansTotalYears6to18').value);
		dcpuForm.b2OrphansBoysTotal=parseInt(document.getElementById('b2OrphansBoysTotal').value);
		dcpuForm.b2OrphansGirlsTotal=parseInt(document.getElementById('b2OrphansGirlsTotal').value);
		dcpuForm.b2OrphansTotal=parseInt(document.getElementById('b2OrphansTotal').value);
		dcpuForm.b2HIVTotalYearsBelow6=parseInt(document.getElementById('b2HIVTotalYearsBelow6').value);
		dcpuForm.b2HIVTotalYears6to18=parseInt(document.getElementById('b2HIVTotalYears6to18').value);
		dcpuForm.b2HIVBoysTotal=parseInt(document.getElementById('b2HIVBoysTotal').value);
		dcpuForm.b2HIVGirlsTotal=parseInt(document.getElementById('b2HIVGirlsTotal').value);
		dcpuForm.b2HIVTotal=parseInt(document.getElementById('b2HIVTotal').value);
		dcpuForm.b2LeprosyTotalYearsBelow6=parseInt(document.getElementById('b2LeprosyTotalYearsBelow6').value);
		dcpuForm.b2LeprosyTotalYears6to18=parseInt(document.getElementById('b2LeprosyTotalYears6to18').value);
		dcpuForm.b2LeprosyBoysTotal=parseInt(document.getElementById('b2LeprosyBoysTotal').value);
		dcpuForm.b2LeprosyGirlsTotal=parseInt(document.getElementById('b2LeprosyGirlsTotal').value);
		dcpuForm.b2LeprosyTotal=parseInt(document.getElementById('b2LeprosyTotal').value);
		dcpuForm.b2TotalBoysYearsBelow6=parseInt(document.getElementById('b2TotalBoysYearsBelow6').value);
		dcpuForm.b2TotalGirlsYearsBelow6=parseInt(document.getElementById('b2TotalGirlsYearsBelow6').value);
		dcpuForm.b2TotalTotalYearsBelow6=parseInt(document.getElementById('b2TotalTotalYearsBelow6').value);
		dcpuForm.b2TotalBoysYears6to18=parseInt(document.getElementById('b2TotalBoysYears6to18').value);
		dcpuForm.b2TotalGirlsYears6to18=parseInt(document.getElementById('b2TotalGirlsYears6to18').value);
		dcpuForm.b2TotalTotalYears6to18=parseInt(document.getElementById('b2TotalTotalYears6to18').value);
		dcpuForm.b2TotalBoysTotal=parseInt(document.getElementById('b2TotalBoysTotal').value);
		dcpuForm.b2TotalGirlsTotal=parseInt(document.getElementById('b2TotalGirlsTotal').value);
		dcpuForm.b2Total=parseInt(document.getElementById('b2Total').value);
		dcpuForm.b3OrphansTotalYearsBelow6=parseInt(document.getElementById('b3OrphansTotalYearsBelow6').value);
		dcpuForm.b3OrphansTotalYears6to18=parseInt(document.getElementById('b3OrphansTotalYears6to18').value);
		dcpuForm.b3OrphansBoysTotal=parseInt(document.getElementById('b3OrphansBoysTotal').value);
		dcpuForm.b3OrphansGirlsTotal=parseInt(document.getElementById('b3OrphansGirlsTotal').value);
		dcpuForm.b3OrphansTotal=parseInt(document.getElementById('b3OrphansTotal').value);
		dcpuForm.b3HIVTotalYearsBelow6=parseInt(document.getElementById('b3HIVTotalYearsBelow6').value);
		dcpuForm.b3HIVTotalYears6to18=parseInt(document.getElementById('b3HIVTotalYears6to18').value);
		dcpuForm.b3HIVBoysTotal=parseInt(document.getElementById('b3HIVBoysTotal').value);
		dcpuForm.b3HIVGirlsTotal=parseInt(document.getElementById('b3HIVGirlsTotal').value);
		dcpuForm.b3HIVTotal=parseInt(document.getElementById('b3HIVTotal').value);
		dcpuForm.b3LeprosyTotalYearsBelow6=parseInt(document.getElementById('b3LeprosyTotalYearsBelow6').value);
		dcpuForm.b3LeprosyTotalYears6to18=parseInt(document.getElementById('b3LeprosyTotalYears6to18').value);
		dcpuForm.b3LeprosyBoysTotal=parseInt(document.getElementById('b3LeprosyBoysTotal').value);
		dcpuForm.b3LeprosyGirlsTotal=parseInt(document.getElementById('b3LeprosyGirlsTotal').value);
		dcpuForm.b3LeprosyTotal=parseInt(document.getElementById('b3LeprosyTotal').value);
		dcpuForm.b3TotalBoysYearsBelow6=parseInt(document.getElementById('b3TotalBoysYearsBelow6').value);
		dcpuForm.b3TotalGirlsYearsBelow6=parseInt(document.getElementById('b3TotalGirlsYearsBelow6').value);
		dcpuForm.b3TotalTotalYearsBelow6=parseInt(document.getElementById('b3TotalTotalYearsBelow6').value);
		dcpuForm.b3TotalBoysYears6to18=parseInt(document.getElementById('b3TotalBoysYears6to18').value);
		dcpuForm.b3TotalGirlsYears6to18=parseInt(document.getElementById('b3TotalGirlsYears6to18').value);
		dcpuForm.b3TotalTotalYears6to18=parseInt(document.getElementById('b3TotalTotalYears6to18').value);
		dcpuForm.b3TotalBoysTotal=parseInt(document.getElementById('b3TotalBoysTotal').value);
		dcpuForm.b3TotalGirlsTotal=parseInt(document.getElementById('b3TotalGirlsTotal').value);
		dcpuForm.b3Total=parseInt(document.getElementById('b3Total').value);
		dcpuForm.d1BoysTotal=parseInt(document.getElementById('d1BoysTotal').value);
		dcpuForm.d1GirlsTotal=parseInt(document.getElementById('d1GirlsTotal').value);
		dcpuForm.d1GrandTotal=parseInt(document.getElementById('d1GrandTotal').value);
		dcpuForm.d2BoysTotal=parseInt(document.getElementById('d2BoysTotal').value);
		dcpuForm.d2GirlsTotal=parseInt(document.getElementById('d2GirlsTotal').value);
		dcpuForm.d2GrandTotal=parseInt(document.getElementById('d2GrandTotal').value);
		dcpuForm.d3BoysYears0to6=parseInt(document.getElementById('d3BoysYears0to6').value);
		dcpuForm.d3BoysYears7to11=parseInt(document.getElementById('d3BoysYears7to11').value);
		dcpuForm.d3BoysYears12to15=parseInt(document.getElementById('d3BoysYears12to15').value);
		dcpuForm.d3BoysYears16to18=parseInt(document.getElementById('d3BoysYears16to18').value);
		dcpuForm.d3BoysYearsgreaterThan18=parseInt(document.getElementById('d3BoysYearsgreaterThan18').value);
		dcpuForm.d3BoysTotal=parseInt(document.getElementById('d3BoysTotal').value);
		dcpuForm.d3GirlsYears0to6=parseInt(document.getElementById('d3GirlsYears0to6').value);
		dcpuForm.d3GirlsYears7to11=parseInt(document.getElementById('d3GirlsYears7to11').value);
		dcpuForm.d3GirlsYears12to15=parseInt(document.getElementById('d3GirlsYears12to15').value);
		dcpuForm.d3GirlsYears16to18=parseInt(document.getElementById('d3GirlsYears16to18').value);
		dcpuForm.d3GirlsYearsgreaterThan18=parseInt(document.getElementById('d3GirlsYearsgreaterThan18').value);
		dcpuForm.d3GirlsTotal=parseInt(document.getElementById('d3GirlsTotal').value);
		dcpuForm.d3GrandTotal=parseInt(document.getElementById('d3GrandTotal').value);
		dcpuForm.e1BoysTotal=parseInt(document.getElementById('e1BoysTotal').value);
		dcpuForm.e1GirlsTotal=parseInt(document.getElementById('e1GirlsTotal').value);
		dcpuForm.e1GrandTotal=parseInt(document.getElementById('e1GrandTotal').value);
		dcpuForm.e2BoysTotal=parseInt(document.getElementById('e2BoysTotal').value);
		dcpuForm.e2GirlsTotal=parseInt(document.getElementById('e2GirlsTotal').value);
		dcpuForm.e2GrandTotal=parseInt(document.getElementById('e2GrandTotal').value);
		dcpuForm.e3BoysYears16to18=parseInt(document.getElementById('e3BoysYears16to18').value);
		dcpuForm.e3BoysYears18to21=parseInt(document.getElementById('e3BoysYears18to21').value);
		dcpuForm.e3BoysYearsGreaterThan21=parseInt(document.getElementById('e3BoysYearsGreaterThan21').value);
		dcpuForm.e3BoysTotal=parseInt(document.getElementById('e3BoysTotal').value);
		dcpuForm.e3GirlsYears16to18=parseInt(document.getElementById('e3GirlsYears16to18').value);
		dcpuForm.e3GirlsYears18to21=parseInt(document.getElementById('e3GirlsYears18to21').value);
		dcpuForm.e3GirlsYearsGreaterThan21=parseInt(document.getElementById('e3GirlsYearsGreaterThan21').value);
		dcpuForm.e3GirlsTotal=parseInt(document.getElementById('e3GirlsTotal').value);
		dcpuForm.e3GrandTotal=parseInt(document.getElementById('e3GrandTotal').value);
		dcpuForm.f1BoysTotal=parseInt(document.getElementById('f1BoysTotal').value);
		dcpuForm.f1GirlsTotal=parseInt(document.getElementById('f1GirlsTotal').value);
		dcpuForm.f1GrandTotal=parseInt(document.getElementById('f1GrandTotal').value);
		dcpuForm.f2BoysTotal=parseInt(document.getElementById('f2BoysTotal').value);
		dcpuForm.f2GirlsTotal=parseInt(document.getElementById('f2GirlsTotal').value);
		dcpuForm.f2GrandTotal=parseInt(document.getElementById('f2GrandTotal').value);
		dcpuForm.f3BoysYears0to6=parseInt(document.getElementById('f3BoysYears0to6').value);
		dcpuForm.f3BoysYears7to11=parseInt(document.getElementById('f3BoysYears7to11').value);
		dcpuForm.f3BoysYears12to15=parseInt(document.getElementById('f3BoysYears12to15').value);
		dcpuForm.f3BoysYears16to18=parseInt(document.getElementById('f3BoysYears16to18').value);
		dcpuForm.f3BoysYearsGreaterThan18=parseInt(document.getElementById('f3BoysYearsGreaterThan18').value);
		dcpuForm.f3BoysTotal=parseInt(document.getElementById('f3BoysTotal').value);
		dcpuForm.f3GirlsYears0to6=parseInt(document.getElementById('f3GirlsYears0to6').value);
		dcpuForm.f3GirlsYears7to11=parseInt(document.getElementById('f3GirlsYears7to11').value);
		dcpuForm.f3GirlsYears12to15=parseInt(document.getElementById('f3GirlsYears12to15').value);
		dcpuForm.f3GirlsYears16to18=parseInt(document.getElementById('f3GirlsYears16to18').value);
		dcpuForm.f3GirlsYearsGreaterThan18=parseInt(document.getElementById('f3GirlsYearsGreaterThan18').value);
		dcpuForm.f3GirlsTotal=parseInt(document.getElementById('f3GirlsTotal').value);
		dcpuForm.f3GrandTotal=parseInt(document.getElementById('f3GrandTotal').value);
		dcpuForm.f4ParvarishBoysTotal=parseInt(document.getElementById('f4ParvarishBoysTotal').value);
		dcpuForm.f4ParvarishGirlsTotal=parseInt(document.getElementById('f4ParvarishGirlsTotal').value);
		dcpuForm.f4ParvarishGrandTotal=parseInt(document.getElementById('f4ParvarishGrandTotal').value);
		dcpuForm.f4SponshorshipBoysTotal=parseInt(document.getElementById('f4SponshorshipBoysTotal').value);
		dcpuForm.f4SponshorshipGirlsTotal=parseInt(document.getElementById('f4SponshorshipGirlsTotal').value);
		dcpuForm.f4SponshorshipGrandTotal=parseInt(document.getElementById('f4SponshorshipGrandTotal').value);
		dcpuForm.f4FosterCareBoysTotal=parseInt(document.getElementById('f4FosterCareBoysTotal').value);
		dcpuForm.f4FosterCareGirlsTotal=parseInt(document.getElementById('f4FosterCareGirlsTotal').value);
		dcpuForm.f4FosterCareGrandTotal=parseInt(document.getElementById('f4FosterCareGrandTotal').value);
		dcpuForm.f4OthersBoysTotal=parseInt(document.getElementById('f4OthersBoysTotal').value);
		dcpuForm.f4OthersGirlsTotal=parseInt(document.getElementById('f4OthersGirlsTotal').value);
		dcpuForm.f4OthersGrandTotal=parseInt(document.getElementById('f4OthersGrandTotal').value);
		dcpuForm.f4ParvarishMinorityTotal=parseInt(document.getElementById('f4ParvarishMinorityTotal').value);
		dcpuForm.f4SponshorshipMinorityTotal=parseInt(document.getElementById('f4SponshorshipMinorityTotal').value);
		dcpuForm.f4FosterCareMinorityTotal=parseInt(document.getElementById('f4FosterCareMinorityTotal').value);
		dcpuForm.f4OthersMinorityTotal=parseInt(document.getElementById('f4OthersMinorityTotal').value);
		dcpuForm.g1aTotalCICL=parseInt(document.getElementById('g1aTotalCICL').value);
		dcpuForm.g1bTotalCICL=parseInt(document.getElementById('g1bTotalCICL').value);
		dcpuForm.g1cCases=parseInt(document.getElementById('g1cCases').value);
		dcpuForm.g1cBoys=parseInt(document.getElementById('g1cBoys').value);
		dcpuForm.g1cGirls=parseInt(document.getElementById('g1cGirls').value);
		dcpuForm.g1cTotalCICL=parseInt(document.getElementById('g1cTotalCICL').value);
		dcpuForm.g2TotalCICL=parseInt(document.getElementById('g2TotalCICL').value);
		dcpuForm.g3TotalCICL=parseInt(document.getElementById('g3TotalCICL').value);
		dcpuForm.h1aTotalCICL=parseInt(document.getElementById('h1aTotalCICL').value);
		dcpuForm.h1bTotalCICL=parseInt(document.getElementById('h1bTotalCICL').value);
		dcpuForm.h1cCases=parseInt(document.getElementById('h1cCases').value);
		dcpuForm.h1cBoys=parseInt(document.getElementById('h1cBoys').value);
		dcpuForm.h1cGirls=parseInt(document.getElementById('h1cGirls').value);
		dcpuForm.h1cTotalCICL=parseInt(document.getElementById('h1cTotalCICL').value);
		dcpuForm.h2TotalCICL=parseInt(document.getElementById('h2TotalCICL').value);
		dcpuForm.h3Cases=parseInt(document.getElementById('h3Cases').value);
		dcpuForm.h3Girls=parseInt(document.getElementById('h3Girls').value);
		dcpuForm.h3TotalCICL=parseInt(document.getElementById('h3TotalCICL').value);
		dcpuForm.i1Total=parseInt(document.getElementById('i1Total').value);
		dcpuForm.i2Total=parseInt(document.getElementById('i2Total').value);
		dcpuForm.i3Boys=parseInt(document.getElementById('i3Boys').value);
		dcpuForm.i3Girls=parseInt(document.getElementById('i3Girls').value);
		dcpuForm.i3Total=parseInt(document.getElementById('i3Total').value);
		dcpuForm.j1aTotalCICL=parseInt(document.getElementById('j1aTotalCICL').value);
		dcpuForm.j1bTotalCICL=parseInt(document.getElementById('j1bTotalCICL').value);
		dcpuForm.j1cCases=parseInt(document.getElementById('j1cCases').value);
		dcpuForm.j1cBoys=parseInt(document.getElementById('j1cBoys').value);
		dcpuForm.j1cGirls=parseInt(document.getElementById('j1cGirls').value);
		dcpuForm.j1cTotalCICL=parseInt(document.getElementById('j1cTotalCICL').value);
		dcpuForm.j2TotalCICL=parseInt(document.getElementById('j2TotalCICL').value);
		dcpuForm.j3TotalCICL=parseInt(document.getElementById('j3TotalCICL').value);
		dcpuForm.k1Total=parseInt(document.getElementById('k1Total').value);
		dcpuForm.k2aTotal=parseInt(document.getElementById('k2aTotal').value);
		dcpuForm.k2bTotal=parseInt(document.getElementById('k2bTotal').value);
		dcpuForm.k2cTotal=parseInt(document.getElementById('k2cTotal').value);
		dcpuForm.k2dTotal=parseInt(document.getElementById('k2dTotal').value);
		dcpuForm.k2Boys=parseInt(document.getElementById('k2Boys').value);
		dcpuForm.k2Girls=parseInt(document.getElementById('k2Girls').value);
		dcpuForm.k2Total=parseInt(document.getElementById('k2Total').value);
		dcpuForm.k3Total=parseInt(document.getElementById('k3Total').value);
		dcpuForm.k4Total=parseInt(document.getElementById('k4Total').value);
		dcpuForm.l1iaTotalCICL=parseInt(document.getElementById('l1iaTotalCICL').value);
		dcpuForm.l1ibTotalCICL=parseInt(document.getElementById('l1ibTotalCICL').value);
		dcpuForm.l1icBoys=parseInt(document.getElementById('l1icBoys').value);
		dcpuForm.l1icGirls=parseInt(document.getElementById('l1icGirls').value);
		dcpuForm.l1icTotalCICL=parseInt(document.getElementById('l1icTotalCICL').value);
		dcpuForm.l1idTotalCICL=parseInt(document.getElementById('l1idTotalCICL').value);
		dcpuForm.l1ieGirls=parseInt(document.getElementById('l1ieGirls').value);
		dcpuForm.l1ieTotalCICL=parseInt(document.getElementById('l1ieTotalCICL').value);
		dcpuForm.l1iiiaTotalCost=parseInt(document.getElementById('l1iiiaTotalCost').value);
		dcpuForm.l1iiibTotalCost=parseInt(document.getElementById('l1iiibTotalCost').value);
		dcpuForm.l1iiicTotalCost=parseInt(document.getElementById('l1iiicTotalCost').value);
		dcpuForm.l1iiidTotalCost=parseInt(document.getElementById('l1iiidTotalCost').value);
		dcpuForm.l2iaTotalCICL=parseInt(document.getElementById('l2iaTotalCICL').value);
		dcpuForm.l2ibTotalCICL=parseInt(document.getElementById('l2ibTotalCICL').value);
		dcpuForm.l2icBoys=parseInt(document.getElementById('l2icBoys').value);
		dcpuForm.l2icGirls=parseInt(document.getElementById('l2icGirls').value);
		dcpuForm.l2icTotalCICL=parseInt(document.getElementById('l2icTotalCICL').value);
		dcpuForm.l2idTotalCICL=parseInt(document.getElementById('l2idTotalCICL').value);
		dcpuForm.l2ieTotalCICL=parseInt(document.getElementById('l2ieTotalCICL').value);
		dcpuForm.l2iiiaTotalCost=parseInt(document.getElementById('l2iiiaTotalCost').value);
		dcpuForm.l2iiibTotalCost=parseInt(document.getElementById('l2iiibTotalCost').value);
		dcpuForm.l2iiicTotalCost=parseInt(document.getElementById('l2iiicTotalCost').value);
		dcpuForm.l2iiidEcost=parseInt(document.getElementById('l2iiidEcost').value);
		dcpuForm.l2iiidPcost=parseInt(document.getElementById('l2iiidPcost').value);
		dcpuForm.l2iiidTotalCost=parseInt(document.getElementById('l2iiidTotalCost').value);
		dcpuForm.l3iaTotalCICL=parseInt(document.getElementById('l3iaTotalCICL').value);
		dcpuForm.l3ibTotalCICL=parseInt(document.getElementById('l3ibTotalCICL').value);
		dcpuForm.l3icBoys=parseInt(document.getElementById('l3icBoys').value);
		dcpuForm.l3icGirls=parseInt(document.getElementById('l3icGirls').value);
		dcpuForm.l3icTotalCICL=parseInt(document.getElementById('l3icTotalCICL').value);
		dcpuForm.l3idTotalCICL=parseInt(document.getElementById('l3idTotalCICL').value);
		dcpuForm.l3ieTotalCICL=parseInt(document.getElementById('l3ieTotalCICL').value);
		dcpuForm.l3iiiaTotalCost=parseInt(document.getElementById('l3iiiaTotalCost').value);
		dcpuForm.l3iiibTotalCost=parseInt(document.getElementById('l3iiibTotalCost').value);
		dcpuForm.l3iiicTotalCost=parseInt(document.getElementById('l3iiicTotalCost').value);
		dcpuForm.l3iiidEcost=parseInt(document.getElementById('l3iiidEcost').value);
		dcpuForm.l3iiidPcost=parseInt(document.getElementById('l3iiidPcost').value);
		dcpuForm.l3iiidTotalCost=parseInt(document.getElementById('l3iiidTotalCost').value);
		dcpuForm.l4iaTotalChildren=parseInt(document.getElementById('l4iaTotalChildren').value);
		dcpuForm.l4iii1aTotalCost=parseInt(document.getElementById('l4iii1aTotalCost').value);
		dcpuForm.l4iii1bTotalCost=parseInt(document.getElementById('l4iii1bTotalCost').value);
		dcpuForm.l4iii1cTotalCost=parseInt(document.getElementById('l4iii1cTotalCost').value);
		dcpuForm.l4iii1dEcost=parseInt(document.getElementById('l4iii1dEcost').value);
		dcpuForm.l4iii1dPcost=parseInt(document.getElementById('l4iii1dPcost').value);
		dcpuForm.l4iii1dTotalCost=parseInt(document.getElementById('l4iii1dTotalCost').value);
		dcpuForm.l5icTotalChildren=parseInt(document.getElementById('l5icTotalChildren').value);
		dcpuForm.l5iii1aTotalCost=parseInt(document.getElementById('l5iii1aTotalCost').value);
		dcpuForm.l5iii1bTotalCost=parseInt(document.getElementById('l5iii1bTotalCost').value);
		dcpuForm.l5iii1cTotalCost=parseInt(document.getElementById('l5iii1cTotalCost').value);
		dcpuForm.l5iii1dTotalCost=parseInt(document.getElementById('l5iii1dTotalCost').value);
		dcpuForm.l6iaTotalCICL=parseInt(document.getElementById('l6iaTotalCICL').value);
		dcpuForm.l6ibTotalCICL=parseInt(document.getElementById('l6ibTotalCICL').value);
		dcpuForm.l6icBoys=parseInt(document.getElementById('l6icBoys').value);
		dcpuForm.l6icGirls=parseInt(document.getElementById('l6icGirls').value);
		dcpuForm.l6icTotalCICL=parseInt(document.getElementById('l6icTotalCICL').value);
		dcpuForm.l6idTotalCICL=parseInt(document.getElementById('l6idTotalCICL').value);
		dcpuForm.l6ieTotalCICL=parseInt(document.getElementById('l6ieTotalCICL').value);
		dcpuForm.l6iii1aTotalCost=parseInt(document.getElementById('l6iii1aTotalCost').value);
		dcpuForm.l6iii1bTotalCost=parseInt(document.getElementById('l6iii1bTotalCost').value);
		dcpuForm.l6iii1cTotalCost=parseInt(document.getElementById('l6iii1cTotalCost').value);
		dcpuForm.l6iii1dTotalCost=parseInt(document.getElementById('l6iii1dTotalCost').value);
		dcpuForm.l7iaTotalCICL=parseInt(document.getElementById('l7iaTotalCICL').value);
		dcpuForm.l7ibTotalCICL=parseInt(document.getElementById('l7ibTotalCICL').value);
		dcpuForm.l7icBoys=parseInt(document.getElementById('l7icBoys').value);
		dcpuForm.l7icGirls=parseInt(document.getElementById('l7icGirls').value);
		dcpuForm.l7icTotalCICL=parseInt(document.getElementById('l7icTotalCICL').value);
		dcpuForm.l7idTotalCICL=parseInt(document.getElementById('l7idTotalCICL').value);
		dcpuForm.l7ieTotalCICL=parseInt(document.getElementById('l7ieTotalCICL').value);
		dcpuForm.l7iii1aTotalCost=parseInt(document.getElementById('l7iii1aTotalCost').value);
		dcpuForm.l7iii1bTotalCost=parseInt(document.getElementById('l7iii1bTotalCost').value);
		dcpuForm.l7iii1cTotalCost=parseInt(document.getElementById('l7iii1cTotalCost').value);
		dcpuForm.l7iii1dEcost=parseInt(document.getElementById('l7iii1dEcost').value);
		dcpuForm.l7iii1dPcost=parseInt(document.getElementById('l7iii1dPcost').value);
		dcpuForm.l7iii1dTotalCost=parseInt(document.getElementById('l7iii1dTotalCost').value);
		
		dcpuForm.oA1Total=parseInt(document.getElementById('oA1Total').value);
		dcpuForm.oA2Total=parseInt(document.getElementById('oA2Total').value);
		dcpuForm.oA3Cases=parseInt(document.getElementById('oA3Cases').value);
		dcpuForm.oA3Male=parseInt(document.getElementById('oA3Male').value);
		dcpuForm.oA3Female=parseInt(document.getElementById('oA3Female').value);
		dcpuForm.oA3Total=parseInt(document.getElementById('oA3Total').value);
		dcpuForm.oA4Total=parseInt(document.getElementById('oA4Total').value);
		
		dcpuForm.oB1Total=parseInt(document.getElementById('oB1Total').value);
		dcpuForm.oB2Total=parseInt(document.getElementById('oB2Total').value);
		dcpuForm.oB3Total=parseInt(document.getElementById('oB3Total').value);
		
		dcpuForm.oB4Cases=parseInt(document.getElementById('oB4Cases').value);
		dcpuForm.oB4Male=parseInt(document.getElementById('oB4Male').value);
		dcpuForm.oB4Female=parseInt(document.getElementById('oB4Female').value);
		dcpuForm.oB4Total=parseInt(document.getElementById('oB4Total').value);
		
		dcpuForm.oB5Cases=parseInt(document.getElementById('oB5Cases').value);
		dcpuForm.oB5Male=parseInt(document.getElementById('oB5Male').value);
		dcpuForm.oB5Female=parseInt(document.getElementById('oB5Female').value);
		dcpuForm.oB5Total=parseInt(document.getElementById('oB5Total').value);
		
		dcpuForm.oB6Total=parseInt(document.getElementById('oB6Total').value);
		for(var i=0; i<dcpuForm.dcpuDetailsTrainings.length;i++){
			if(dcpuForm.dcpuDetailsTrainings[i].trainingOrganisedBy != null || dcpuForm.dcpuDetailsTrainings[i].trainingOrganisedBy != undefined)
				dcpuForm.dcpuDetailsTrainings[i].trainingOrganisedBy = dcpuForm.dcpuDetailsTrainings[i].trainingOrganisedBy.typeDetailsId;
		}
		dcpuForm.userId = Number(document.getElementById("uId").value);
	};
	$scope.savedcpu = function(dcpuForm, clickType, submitConfirm){
		$(".loader").show();
		   
		if($scope.selectedDistrict != undefined)
			dcpuForm.districtId = $scope.selectedDistrict.areaId;
		
		if($scope.selectedOfcPremises != undefined)
			dcpuForm.typeOfOficePremises = $scope.selectedOfcPremises.typeDetailsName;
		if($scope.selectedOsType != undefined)
			dcpuForm.l4iictypesOfCH = $scope.selectedOsType.typeDetailsId;
		if($scope.selectedOsType1 != undefined)
			dcpuForm.l5iicTypeOfCH = $scope.selectedOsType1.typeDetailsId;
		if($scope.selectedOsType2 != undefined)
			dcpuForm.i6iicTypeOfOS = $scope.selectedOsType2.typeDetailsId;
		if($scope.selectedOsType3 != undefined)
			dcpuForm.l7iicTypeSAA = $scope.selectedOsType3.typeDetailsId;
		
		dcpuForm.dcpuDetailsTrainings = $scope.dcpuTrainingDetailsRepetitionArray;
		//sending the data to server
		
		if(clickType == 'save'){
			prepareObject(dcpuForm);
			$(".loader").show();
			$http.post('saveDCPU', dcpuForm).then(function(result){
				if(result.status == 200){
					$(".loader").fadeOut();
					$scope.success_msg = commonService.messages.save_success_msg;
					$('#successModalFordcpuSave').modal('show');
				}
			},function(error){
				$(".loader").fadeOut();
				commonService.errSaveHttpFunction(error);
				console.log(error);
			});
		}
		else if(clickType=='submit' && submitted == false){
			$(".loader").fadeOut();
			$scope.clearMsg();
			if (hasEmailError) {
				$scope.clearMsg();
				$scope.label1 = "Please provide a correct email id!";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
				$('html,body').animate({scrollTop : $('#emailIdofPerson').offset().top - 250}, 'slow');
			}else if($scope.dcpuForm.m1bDatesMeetingDCPC == undefined && $scope.dcpuForm.m1aNoMeetingDCPC > 0 ){
		    	$( "#m1bDatesMeetingDCPC" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m1bDatesMeetingDCPC').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m2bDatesMeetingDSFCAC == undefined && $scope.dcpuForm.m2aNoMeetingDSFCAC > 0){
		    	$( "#m2bDatesMeetingDSFCAC" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m2bDatesMeetingDSFCAC').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m3bDatesMeetingChildLineAdvisory == undefined && $scope.dcpuForm.m3aNoMeetingChildLineAdvisory > 0){
		    	$( "#m3bDatesMeetingChildLineAdvisory" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m3bDatesMeetingChildLineAdvisory').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m4bDatesMeetingDistrictJudges == undefined  && $scope.dcpuForm.m4aNoMeetingDistrictJudges > 0){
		    	$( "#m4bDatesMeetingDistrictJudges" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m4bDatesMeetingDistrictJudges').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m5bDatesMeetingCoordination == undefined && $scope.dcpuForm.m5aNoMeetingCoordination > 0){
		    	$( "#m5bDatesMeetingCoordination" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m5bDatesMeetingCoordination').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m6bDatesMeetingAHTU == undefined && $scope.dcpuForm.m6aNoMeetingAHTU > 0){
		    	$( "#m6bDatesMeetingAHTU" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m6bDatesMeetingAHTU').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m7bDatesMeetingCDPO == undefined && $scope.dcpuForm.m7aNoMeetingCDPO > 0){
		    	$( "#m7bDatesMeetingCDPO" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m7bDatesMeetingCDPO').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m8bDatesMeetingQuarterlyCWC == undefined && $scope.dcpuForm.m8aNoMeetingQuarterlyCWC == 'true'){
		    	$( "#m8bDatesMeetingQuarterlyCWC" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m8bDatesMeetingQuarterlyCWC').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m9bDatesMeetingReportDM == undefined && $scope.dcpuForm.m9aNoMeetingReportDM == 'true'){ 
		    	$( "#m9bDatesMeetingReportDM" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m9bDatesMeetingReportDM').offset().top - 250},'slow');
		    
		    }else if($scope.dcpuForm.m10bDatesOfVisits == undefined && $scope.dcpuForm.m10aNoOfVisits > 0){
		    	$( "#m10bDatesOfVisits" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m10bDatesOfVisits').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m11bDatesOfVisits == undefined && $scope.dcpuForm.m11aNoOfVisits > 0){
		    	$( "#m11bDatesOfVisits" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m11bDatesOfVisits').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m12bDatesOfPrograms == undefined && $scope.dcpuForm.m12aNoOfPrograms > 0){
		    	$( "#m12bDatesOfPrograms" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m12bDatesOfPrograms').offset().top - 250},'slow');
		    	
		    }else if($scope.dcpuForm.m13bDatesOfActivities == undefined && $scope.dcpuForm.m13aNoOfActivities > 0){
		    	$( "#m13bDatesOfActivities" ).datepicker("show");
		    	$('html,body').animate({
			        scrollTop: $('#m13bDatesOfActivities').offset().top - 250},'slow');
		    }else if(!typeofReliefMandatory() && $scope.dcpuForm.o1a > 0){
		    	$scope.clearMsg();
		    	$scope.label1 = "Please select type of relief!";
				$(".loader").fadeOut();
				$('#ErrAlertModal').modal('show');
		    	$('html,body').animate({
			        scrollTop: $('#interimRelief').offset().top - 250},'slow');
		    }else{
		    	if(!$scope.dcpuForm.dcpuDetailsTrainings.length<1){
					for(var i=0;i<$scope.dcpuForm.dcpuDetailsTrainings.length;i++){
						if (!accordionValidation($scope.dcpuForm.dcpuDetailsTrainings[i])) {
							var sum=i+1;
							$scope.clearMsg();
							$scope.label1 = commonService.messages.add_all_specific_training_details+sum;
							$(".loader").fadeOut();
							$('#ErrAlertModal').modal('show');
							$('html,body').animate({
								scrollTop: $('#accordion').offset().top - 250},'slow');
							return false;
						}
					}
				}
		    	if (!accordionValidation($scope.dcpuForm.dcpuDetailsTrainings[$scope.dcpuForm.dcpuDetailsTrainings.length - 1])) {
		    		$scope.clearMsg();
					$scope.label1 = commonService.messages.add_all_training_details;
					$(".loader").fadeOut();
					$('#ErrAlertModal').modal('show');
					$('html,body').animate({
						scrollTop: $('#accordion').offset().top - 250},'slow');
				}
		    	if(allNegetiveTest() ==false){
		 			return false;
		 		 }
		    	else{
					$('#successModalFordcpuSubmit').modal('show');
				}
		    }
		}
		 if(submitConfirm=='ok'){
			prepareObject(dcpuForm);
			$http.post('submitDCPU', dcpuForm).
			then(function(result){
				if(result.status == 200){
					$scope.success_msg = commonService.messages.submit_success_msg+dcpuForm.timeperiod.timePeriod;
					$('#successModalFordcpuSave').modal('show');
				}
			},function(error){
				$(".loader").fadeOut();
				commonService.errSubmitHttpStatusFunction(error.status);
				console.log(error);
			});
		}
	};
	
	var typeofReliefMandatory = function(){
		if($scope.dcpuForm.o1bIR != true &&
				$scope.dcpuForm.o1bFR != true ){
			return false;
		}else{
			return true;
		}
	};
	
	$scope.autoSavedcpu = function(dcpuForm, clickType){
		   
		if($scope.selectedDistrict != undefined)
			dcpuForm.districtId = $scope.selectedDistrict.areaId;
		
		if($scope.selectedOfcPremises != undefined)
			dcpuForm.typeOfOficePremises = $scope.selectedOfcPremises.typeDetailsName;
		if($scope.selectedOsType != undefined)
			dcpuForm.l4iictypesOfCH = $scope.selectedOsType.typeDetailsId;
		if($scope.selectedOsType1 != undefined)
			dcpuForm.l5iicTypeOfCH = $scope.selectedOsType1.typeDetailsId;
		if($scope.selectedOsType2 != undefined)
			dcpuForm.i6iicTypeOfOS = $scope.selectedOsType2.typeDetailsId;
		if($scope.selectedOsType3 != undefined)
			dcpuForm.l7iicTypeSAA = $scope.selectedOsType3.typeDetailsId;
		
		dcpuForm.dcpuDetailsTrainings = $scope.dcpuTrainingDetailsRepetitionArray;
		//sending the data to server

		if(clickType == 'save'){
			prepareObject(dcpuForm);
			$http.post('autoSaveDCPU', dcpuForm).then(function(result){
				if(result.status == 200){
					$(".loader").fadeOut();
					$('#successModalForAutoSaveDCPU').modal('show');
				}
			},function(error){
				commonService.checkSessionOut(error);
				console.log(error);
			});
		}
	};	
	//getting refresh on saving @swarna
	
	$scope.refreshPage = function(){
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
		$scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo = date;
		if($scope.dcpuTrainingDetailsRepetitionArray[index].trainingFrom != null && $scope.dcpuTrainingDetailsRepetitionArray[index].trainingFrom != undefined){
			var fromDay = new Date(dateConvert($scope.dcpuTrainingDetailsRepetitionArray[index].trainingFrom));
			var toDay = new Date(dateConvert(date));
			if(toDay < fromDay){
				$scope.clearMsg();
            	$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
            	$scope.$apply();
    			$('#ErrAlertModal').modal('show');
    			$("#trainingToDatepicker"+index).val(null);
    			$scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo = null;
            }
		}else{
			$scope.clearMsg();
			$scope.label1 = commonService.messages.select_training_from;
        	$scope.$apply();
			$('#ErrAlertModal').modal('show');
			$("#trainingToDatepicker"+index).val(null);
			$scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo = null;
		}
	};
	//the following function is for initialization and setting the dates in date pickers.
	$scope.initializeDatePicker = function(index){
		$("#trainingFromDatepicker"+index).datepicker({
			dateFormat : "dd-mm-yy",
			maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
	            if($scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo != null && $scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo != undefined){
					var fromDay = new Date(dateConvert(date));
					var toDay = new Date(dateConvert($scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo));
					if(toDay < fromDay){
						$scope.clearMsg();
		            	$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
		            	$scope.$apply();
		    			$('#ErrAlertModal').modal('show');
		    			$("#trainingToDatepicker"+index).val(null);
		    			$scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo = null;
		            }
				}
	            $scope.dcpuTrainingDetailsRepetitionArray[index].trainingFrom = date;
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
	
	$scope.dcpuTrainingDetailsObject={
		trainingId:null,
		durationOfTraining:null,
		trainingFrom:null,
		trainingTo:null,
		trainingOrganisedBy:null,
		trainingOrganisedByOthers:null,
		totJjAct:null,
		totPosco:null,
		totChildRelatedLawsICPS:null,
		totCombinedTraining:null,
		totCpmis:null,	
		totTrackChild:null,	
		totClts:null,
		totOthers:null,
		totOthersSpecify:null,
		tabCWCMembersStaff:null,
		tabJJBMembersStaff:null,
		tabDCPUFunctionaries:null,
		tabSJPUFunctionaries:null,
		tabCCIFunctionaries:null,
		tabChildrenCourtFunctionaries:null,
		tabOthers:null,	
		trainingAttendedByOthers:null,
		dcpuId:null
	};
	$scope.dcpuTrainingDetailsRepetitionArray=[{
		trainingId:null,
		durationOfTraining:null,
		trainingFrom:null,
		trainingTo:null,
		trainingOrganisedBy:null,
		trainingOrganisedByOthers:null,
		totJjAct:null,
		totPosco:null,
		totChildRelatedLawsICPS:null,
		totCombinedTraining:null,
		totCpmis:null,	
		totTrackChild:null,	
		totClts:null,
		totOthers:null,
		totOthersSpecify:null,
		tabCWCMembersStaff:null,
		tabJJBMembersStaff:null,
		tabDCPUFunctionaries:null,
		tabSJPUFunctionaries:null,
		tabCCIFunctionaries:null,
		tabChildrenCourtFunctionaries:null,
		tabOthers:null,	
		trainingAttendedByOthers:null,
		dcpuId:null
	}];

	var topicOfTrainingValidation = function(training){
		if(training.totJjAct != true &&
				training.totPosco != true &&
				training.totChildRelatedLawsICPS != true &&
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
		if($scope.dcpuForm.n1Training == 'true'){
			if((training.durationOfTraining == null ||
					training.trainingFrom == null ||
					training.trainingTo == null ||
					training.trainingOrganisedBy == null ||
					training.tabCWCMembersStaff == null ||
					training.tabJJBMembersStaff == null ||
					training.tabDCPUFunctionaries == null ||
					training.tabSJPUFunctionaries == null ||
					training.tabCCIFunctionaries == null ||
					training.tabChildrenCourtFunctionaries == null ||
					training.tabOthers == null)){
				return false;
			}else if((training.trainingOrganisedBy.typeDetailsId == 4 && (training.trainingOrganisedByOthers == null || training.trainingOrganisedByOthers.trim() == "")) ||
					(training.tabOthers > 0 && (training.trainingAttendedByOthers == null || training.trainingAttendedByOthers.trim()==""))){
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
	
	$scope.addNewDetails = function(){
		if($scope.validateNoOfTraining($scope.dcpuForm.n1aNoOfTrainings)){
			if(!accordionValidation($scope.dcpuTrainingDetailsRepetitionArray[$scope.dcpuTrainingDetailsRepetitionArray.length - 1])){
				$scope.clearMsg();
				$scope.label1 = commonService.messages.add_all_training_details;
				$('#ErrAlertModal').modal('show');
			}else{
				if($scope.dcpuForm.n1aNoOfTrainings!=undefined && $scope.dcpuForm.n1aNoOfTrainings <= 10){
					if($scope.dcpuTrainingDetailsRepetitionArray.length < $scope.dcpuForm.n1aNoOfTrainings){
						$scope.dcpuTrainingDetailsRepetitionArray[($scope.dcpuTrainingDetailsRepetitionArray.length-1)+1] = 
							JSON.parse(JSON.stringify($scope.dcpuTrainingDetailsObject));
					}else{
						document.getElementById('maximumLimit10Error').innerHTML = "You can add details of maximum <b>"+$scope.dcpuForm.n1aNoOfTrainings+"</b> Training Details";
					}
					$timeout(function(){
						document.getElementById('maximumLimit10Error').innerHTML = "";
					},2000);
				}
			}
		}
	};
	
	$scope.deleteConfirm = function(){
		document.getElementById("n1aNoOfTrainings").blur();
		if($scope.dcpuTrainingDetailsRepetitionArray.length > 1 && $scope.dcpuForm.n1aNoOfTrainings >= $scope.dcpuTrainingDetailsRepetitionArray.length
				&& $scope.dcpuForm.n1aNoOfTrainings!=undefined && $scope.dcpuForm.n1aNoOfTrainings <= 10){
		 $('#confirmationModalFordcpudeleteAccordion').modal('show');
		}
	 };
	$scope.deleteNewDetails = function(){
		$scope.maximumLimit10 = false;
		document.getElementById('maximumLimit10Error').innerHTML = "";
	    if($scope.dcpuTrainingDetailsRepetitionArray.length > 1){
	    	$scope.dcpuTrainingDetailsRepetitionArray.pop();
	    }
	};   
	
	$scope.openFromDatePicker = function(id){
		$("#trainingFromDatepicker"+id).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.dcpuTrainingDetailsRepetitionArray[id].h1dTrainingFromDate = date;
			}
		});
	};
		
	$scope.openToDatePicker = function(id){
		$("#trainingToDatepicker"+id).datepicker({dateFormat: "dd-mm-yy",maxDate : lastDay,
			minDate : firstDay,
			onSelect: function(date) {
				$scope.dcpuTrainingDetailsRepetitionArray[id].h1dTrainingToDate = date;
			}
		});
	};   
	
	//  @swarna
	
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
	    	if($scope.counterSeconds==300 && !$('#successModalFordcpuSave').hasClass('in')){
	    		$scope.alertMessage="Your session will expire in 5 minutes. Please click on 'Save' button to continue session.";
	    		$('#successModalForcedSaveSAA').modal('show');
	    	}
	        if($scope.counterSeconds== 0)
	        	$scope.counterSeconds=0;
	        if($scope.counterSeconds==0 && !$('#successModalFordcpuSave').hasClass('in')){
	        	$scope.stop();
	        	$scope.autoSavedcpu($scope.dcpuForm, 'save');
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
	$http.post("getLastSavedDCPUData", currentUserId).
	then(function(result){
		if(result.data != ""){
			$scope.dcpuForm = result.data;
			if($scope.dcpuForm.districtId != null){
				angular.forEach($scope.district, function(value, key) {
					if (value.id == $scope.dcpuForm.districtId) {
						$scope.selectedDistrict = value;
					}
				});
			}
			
			if($scope.dcpuForm.districtId != null){
				angular.forEach($scope.district, function(value, key){
					if(value.id == $scope.dcpuForm.typeOfOficePremises){
						$scope.selectedOfcPremises = value;
					}
				});
			}
			todaysDate = new Date($scope.dcpuForm.timeperiod.startDate);
			lastDay  = new Date(todaysDate.getFullYear(), todaysDate.getMonth()-1, 0);
		    firstDay= new Date(todaysDate.getFullYear(), todaysDate.getMonth()-2, 1);
		    
		    $(".accordionFromDatepicker").datepicker({
				dateFormat: "dd-mm-yy",
				maxDate : lastDay,
				minDate : firstDay,
				onSelect: function(date){
					if(this.id.startsWith("trainingFromDatepicker")){
						if($scope.dcpuTrainingDetailsRepetitionArray[0].trainingTo != null && $scope.dcpuTrainingDetailsRepetitionArray[0].trainingTo != undefined){
							var fromDay = new Date(dateConvert(date));
							var toDay = new Date(dateConvert($scope.dcpuTrainingDetailsRepetitionArray[0].trainingTo));
							if(toDay < fromDay){
								var index = this.id.split('trainingFromDatepicker')[1];
								$scope.clearMsg();
				            	$scope.label1 = commonService.messages.training_to_not_les_than_training_from;
				            	$scope.$apply();
				    			$('#ErrAlertModal').modal('show');
				    			$("#trainingToDatepicker"+index).val(null);
				    			$scope.dcpuTrainingDetailsRepetitionArray[index].trainingTo = null;
				            }
						}
						$scope.dcpuTrainingDetailsRepetitionArray[0].trainingFrom = date;
		            }else if(this.id.startsWith("trainingToDatepicker")){
		            	checkDate(date, 0);
		            }
		        },
			});
			$("#m1bDatesMeetingDCPC").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m2bDatesMeetingDSFCAC").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m3bDatesMeetingChildLineAdvisory").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m4bDatesMeetingDistrictJudges").datepicker({dateFormat: "dd-mm-yy",maxDate : lastDay,minDate : firstDay,});
			$("#m5bDatesMeetingCoordination").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m6bDatesMeetingAHTU").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m7bDatesMeetingCDPO").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m8bDatesMeetingQuarterlyCWC").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m9bDatesMeetingReportDM").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m10bDatesOfVisits").datepicker({dateFormat: "dd-mm-yy",maxDate : lastDay,minDate : firstDay,});
			$("#m11bDatesOfVisits").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m12bDatesOfPrograms").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
			$("#m13bDatesOfActivities").datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
		    
			$scope.dcpuForm.h3Cases = ($scope.dcpuForm.h1aCases+$scope.dcpuForm.h1bCases)-$scope.dcpuForm.h2Cases;
			$scope.dcpuForm.h3Boys = ($scope.dcpuForm.h1aBoys+$scope.dcpuForm.h1bBoys)-$scope.dcpuForm.h2Boys;
			$scope.dcpuForm.h3Girls = ($scope.dcpuForm.h1aGirls+$scope.dcpuForm.h1bGirls)-$scope.dcpuForm.h2Girls;
			
			$scope.dcpuForm.j3Cases = ($scope.dcpuForm.j1aCases + $scope.dcpuForm.j1bCases) - $scope.dcpuForm.j2Cases;
			$scope.dcpuForm.j3Boys = ($scope.dcpuForm.j1aBoys + $scope.dcpuForm.j1bBoys) - $scope.dcpuForm.j2Boys;
			$scope.dcpuForm.j3Girls = ($scope.dcpuForm.j1aGirls + $scope.dcpuForm.j1bGirls) - $scope.dcpuForm.j2Girls;
			
			$scope.dcpuForm.l1ieBoys = ($scope.dcpuForm.l1iaBoys + $scope.dcpuForm.l1ibBoys) - $scope.dcpuForm.l1idBoys;
			$scope.dcpuForm.l1ieGirls = ($scope.dcpuForm.l1iaGirls + $scope.dcpuForm.l1ibGirls) - $scope.dcpuForm.l1idGirls;
			
			$scope.dcpuForm.l2ieBoys = ($scope.dcpuForm.l2iaBoys+$scope.dcpuForm.l2ibBoys)-$scope.dcpuForm.l2idBoys;
			$scope.dcpuForm.l2ieGirls = ($scope.dcpuForm.l2iaGirls+$scope.dcpuForm.l2ibGirls)-$scope.dcpuForm.l2idGirls;
			
			$scope.dcpuForm.l3ieBoys = ($scope.dcpuForm.l3iaBoys+$scope.dcpuForm.l3ibBoys)-$scope.dcpuForm.l3idBoys;
			$scope.dcpuForm.l3ieGirls = ($scope.dcpuForm.l3iaGirls+$scope.dcpuForm.l3ibGirls)-$scope.dcpuForm.l3idGirls;
			
			$scope.dcpuForm.l5ieTotalChildrenOnLastday = ($scope.dcpuForm.l5iaChildrenFirstDay+$scope.dcpuForm.l5ibChildrenAdmitted)-$scope.dcpuForm.l5idChildrenMovedFromHome;
			
			$scope.dcpuForm.l5iii1dEcost = ($scope.dcpuForm.l5iii1aEcost+$scope.dcpuForm.l5iii1bEcost)-$scope.dcpuForm.l5iii1cEcost;
			$scope.dcpuForm.l5iii1dPcost = ($scope.dcpuForm.l5iii1aPcost+$scope.dcpuForm.l5iii1bPcost)-$scope.dcpuForm.l5iii1cPcost;
			
			$scope.dcpuForm.l5iii2dClosingBalanceLastday = ($scope.dcpuForm.l5iii2aOpeningBalanceFirstDay+$scope.dcpuForm.l5iii2bTotalAmountReceived)-$scope.dcpuForm.l5iii2cTotalAmountSpent;
			
			$scope.dcpuForm.l6ieBoys = ($scope.dcpuForm.l6iaBoys+$scope.dcpuForm.l6ibBoys)-$scope.dcpuForm.l6idBoys;
			$scope.dcpuForm.l6ieGirls = ($scope.dcpuForm.l6iaGirls+$scope.dcpuForm.l6ibGirls)-$scope.dcpuForm.l6idGirls;
			
			$scope.dcpuForm.l6iii1dEcost = ($scope.dcpuForm.l6iii1aEcost+$scope.dcpuForm.l6iii1bEcost)-$scope.dcpuForm.l6iii1cEcost;
			$scope.dcpuForm.l6iii1dPcost = ($scope.dcpuForm.l6iii1aPcost+$scope.dcpuForm.l6iii1bPcost)-$scope.dcpuForm.l6iii1cPcost;
			
			$scope.dcpuForm.l6iii2dClosingBalanceLastday = ($scope.dcpuForm.l6iii2aOpeningBalanceFirstDay+$scope.dcpuForm.l6iii2bTotalAmountReceived)-$scope.dcpuForm.l6iii2cTotalAmountSpent;
			
			$scope.dcpuForm.l7ieBoys = ($scope.dcpuForm.l7iaBoys+$scope.dcpuForm.l7ibBoys)-$scope.dcpuForm.l7idBoys;
			$scope.dcpuForm.l7ieGirls = ($scope.dcpuForm.l7iaGirls+$scope.dcpuForm.l7ibGirls)-$scope.dcpuForm.l7idGirls;
			
			$scope.dcpuForm.l7iii1dEcost = ($scope.dcpuForm.l7iii1aEcost+$scope.dcpuForm.l7iii1bEcost)-$scope.dcpuForm.l7iii1cEcost;
			$scope.dcpuForm.l7iii1dPcost = ($scope.dcpuForm.l7iii1aPcost+$scope.dcpuForm.l7iii1bPcost)-$scope.dcpuForm.l7iii1cPcost;
			
			$scope.dcpuForm.l7ii2dClosingBalanceLastday = ($scope.dcpuForm.l7ii2aOpeningBalanceFirstDay+$scope.dcpuForm.l7ii2bTotalAmountReceived)-$scope.dcpuForm.l7ii2cTotalAmountSpent;
			
			$scope.dcpuForm.m23dClosingBalanceLastday = ($scope.dcpuForm.m23aOpeningBalanceFirstDay+$scope.dcpuForm.m23bTotalAmountReceived)-$scope.dcpuForm.m23cTotalAmountSpent;
			if($scope.dcpuForm.o1bFR == null)$scope.dcpuForm.o1bFR = false;
			if($scope.dcpuForm.o1bIR == null)$scope.dcpuForm.o1bIR = false;
			
			//pre production bug
			if($scope.dcpuForm.g3Cases == null)$scope.resetG1b(0);
			if($scope.dcpuForm.g3Boys == null)$scope.resetG1bBoys(0);
			if($scope.dcpuForm.g3Girls == null)$scope.resetG1bGirls(0);
			if($scope.dcpuForm.l1iiidEcost == null)$scope.calculateTotal('l1iiicEcost');
			if($scope.dcpuForm.l1iiidPcost == null)$scope.calculateTotal('l1iiicPcost');
			if($scope.dcpuForm.l4iaTotalChildrenLastday == null)$scope.calculateTotal('l4iaChildrenMovedFromHome');
		}
		if(!$scope.dcpuForm.submitted)
			$scope.timerForSave($scope,$timeout);
		if($scope.dcpuForm.submitted){
			$scope.clearMsg();
			$scope.alertMessage = commonService.messages.after_submission_msg;
			$('#alertModal').modal('show');
		}
		
		$timeout(function(){
			for(var i=0; i<$scope.osType.length;i++){
				if($scope.dcpuForm.l4iictypesOfCH == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType = $scope.osType[i];
			}
			for(var i=0; i<$scope.osType.length;i++){
				if($scope.dcpuForm.l5iicTypeOfCH == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType1 = $scope.osType[i];
			}
			for(var i=0; i<$scope.osType.length;i++){
				if($scope.dcpuForm.i6iicTypeOfOS == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType2 = $scope.osType[i];
			}
			for(var i=0; i<$scope.osType.length;i++){
				if($scope.dcpuForm.l7iicTypeSAA == $scope.osType[i].typeDetailsId)
					$scope.selectedOsType3 = $scope.osType[i];
			}
			for (var i = 0; i < $scope.ofcPremises.length; i++) {
				if ($scope.dcpuForm.typeOfOficePremises == $scope.ofcPremises[i].typeDetailsName)
					$scope.selectedOfcPremises = $scope.ofcPremises[i];
			}

			if($scope.dcpuForm.dcpuDetailsTrainings != null && $scope.dcpuForm.dcpuDetailsTrainings != undefined && $scope.dcpuForm.dcpuDetailsTrainings.length != 0)
				$scope.dcpuTrainingDetailsRepetitionArray = $scope.dcpuForm.dcpuDetailsTrainings;

			//the following condition is for setting the id of dropdowns selected by the user in training details
			if($scope.dcpuForm.dcpuDetailsTrainings != undefined){
				for(var i=0;i<$scope.dcpuForm.dcpuDetailsTrainings.length;i++){
					$("#trainingFromDatepicker"+i).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
					$("#trainingToDatepicker"+i).datepicker({dateFormat: "dd-mm-yy", maxDate : lastDay,minDate : firstDay,});
					
					for(var j=0; j<$scope.trainingOrganisedBy.length; j++){
						if($scope.trainingOrganisedBy[j].typeDetailsId == $scope.dcpuForm.dcpuDetailsTrainings[i].trainingOrganisedBy){
							$scope.dcpuTrainingDetailsRepetitionArray[i].trainingOrganisedBy = $scope.trainingOrganisedBy[j];
						}
					}
				}
			}
			$(".loader").fadeOut();
		},500);
		$timeout(function(){
			$scope.dcpuForm.n1aNoOfTrainings = $scope.dcpuTrainingDetailsRepetitionArray.length;
			$(".loader").fadeOut();
		},500);
		$scope.dcpuForm.n1Training = $scope.dcpuForm.n1Training==null?null:$scope.dcpuForm.n1Training.toString();
		$scope.dcpuForm.m8aNoMeetingQuarterlyCWC = $scope.dcpuForm.m8aNoMeetingQuarterlyCWC==null?null:$scope.dcpuForm.m8aNoMeetingQuarterlyCWC.toString();
		$scope.dcpuForm.m9aNoMeetingReportDM = $scope.dcpuForm.m9aNoMeetingReportDM==null?null:$scope.dcpuForm.m9aNoMeetingReportDM.toString();
		$scope.dcpuForm.m22ProgramConductedDCPU = $scope.dcpuForm.m22ProgramConductedDCPU==null?null:$scope.dcpuForm.m22ProgramConductedDCPU.toString();
		$scope.dcpuForm.o2 = $scope.dcpuForm.o2==null?null:$scope.dcpuForm.o2.toString();
		$scope.dcpuForm.o2a = $scope.dcpuForm.o2a==null?null:$scope.dcpuForm.o2a.toString();
		$scope.dcpuForm.o4 = $scope.dcpuForm.o4==null?null:$scope.dcpuForm.o4.toString();
	},function(error){
		$(".loader").fadeOut();
		commonService.errGetLastSaveDataHttpStatusFunction(error.status);
		console.log(error);
	});
	
	//division hide and show for H section on click of radio button
	
	 $scope.showOther = function (value){
		 $scope.isVisible = value == "Y";
		 if(value == 'Y')
			 $scope.dcpuForm.n1Training = true;
		 else if(value == 'N')
			 $scope.dcpuForm.n1Training = false;
	 };
	
	 // type number will not accept exponential(e) @Swarna
		$(".removeExponentialValueE").keypress(function(event) {
	        if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
	            return false;
	        }
	    });
		 $scope.validateNoOfTraining = function(val){
			if(val == 0 || val == null){
				$scope.clearMsg();
				$scope.alertMessage = "Number of trainings held : value should be more than or equal to one.";
				$('#alertModal').modal('show');
				$scope.dcpuForm.n1aNoOfTrainings = $scope.dcpuTrainingDetailsRepetitionArray.length;
				return false;
			}else if(val > 10){
				$scope.clearMsg();
				$scope.alertMessage = "Number of trainings held : value should not exceed 10";
				$('#alertModal').modal('show');
				$scope.dcpuForm.n1aNoOfTrainings = $scope.dcpuTrainingDetailsRepetitionArray.length;
				return false;
			}else if(val < $scope.dcpuTrainingDetailsRepetitionArray.length){
				$scope.clearMsg();
				$scope.alertMessage = "Number of trainings held : value should not be less than the number of trainings you added.";
				$('#alertModal').modal('show');
				$scope.dcpuForm.n1aNoOfTrainings = $scope.dcpuTrainingDetailsRepetitionArray.length;
				return false;
			}else
				return true;
		};
		$scope.clearMsg = function(){
			$scope.label1 = "";
			$scope.alertMessage = "";
			$scope.label2 = "";
		}; 
		
		$scope.clearTopicOfTrainingOthers = function(model){
			model.totOthersSpecify = null;
		};
		 //for reset to zero
		$scope.resetO2a = function(value){
			if(value=='false')
				$scope.dcpuForm.o2a = null;
		};
		
		$scope.resetO4abc = function(value){
			if(value=='false'){
				$scope.dcpuForm.o4a = null;
				$scope.dcpuForm.o4b = null;
				$scope.dcpuForm.o4c = null;
			}
		};
		
		$scope.resetOs = function(value, input){
			if(input == 'all' && value < 1){
				$scope.dcpuForm.o1bIR = false;
				$scope.dcpuForm.o1bFR = false;
				$scope.resetOs(false, 'interim');
				$scope.resetOs(false, 'final');
			}else if(input == 'interim' && value == false){
				$scope.dcpuForm.o1c = null;
				$scope.dcpuForm.o1e = null;
			}else if(input == 'final' && value == false){
				$scope.dcpuForm.o1d = null;
				$scope.dcpuForm.o1f = null;
			}
		};
		 
		$scope.resetToZeroaccd1 = function(value){
			if (value == 'false'){
				$scope.dcpuTrainingDetailsRepetitionArray=[{
					trainingId:null,
					durationOfTraining:null,
					trainingFrom:null,
					trainingTo:null,
					trainingOrganisedBy:null,
					trainingOrganisedByOthers:null,
					totJjAct:null,
					totPosco:null,
					totChildRelatedLawsICPS:null,
					totCombinedTraining:null,
					totCpmis:null,	
					totTrackChild:null,	
					totClts:null,
					totOthers:null,
					totOthersSpecify:null,
					tabCWCMembersStaff:null,
					tabJJBMembersStaff:null,
					tabDCPUFunctionaries:null,
					tabSJPUFunctionaries:null,
					tabCCIFunctionaries:null,
					tabChildrenCourtFunctionaries:null,
					tabOthers:null,	
					trainingAttendedByOthers:null,
					dcpuId:null
			    }];
			}
			$scope.dcpuForm.n1aNoOfTrainings = $scope.dcpuTrainingDetailsRepetitionArray.length;
		};

		//the following function is for resetting the others field in the accordion
        $scope.resetAccordionOthers2 = function(dcpuTrainingDetails){
        	if(dcpuTrainingDetails.trainingOrganisedBy.typeDetailsId != 4)
        		dcpuTrainingDetails.trainingOrganisedByOthers= null;
        };
		 
});