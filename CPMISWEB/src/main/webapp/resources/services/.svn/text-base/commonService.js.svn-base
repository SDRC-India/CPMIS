cpmisApp.service('commonService', commonService);
 
  function commonService($http, $q, $window,$timeout, md5) {	  
	  
	   this.checkSessionOut =function(error){
		   if(error.status === 307){
			   $("body").append('<div id="sessionOutMessage" class="modal fade"  data-keyboard="false" data-backdrop="static" tabindex="-1"'+
						 ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
						 'Auto save failed due to mainteance.</h3><a href="" onClick="window.location.reload(true);" class="btn btn-default errorOk" type="submit">'+
						 'OK</a></div></div></div></div>');
			   $("#sessionOutMessage").modal("show");
		   }else if(typeof error.data == 'string' && error.data.indexOf("You are not authorized to view this page. Please contact the system administrator if"+
													   " you may need any additional information.") != -1){
				$("body").append('<div id="sessionOutMessage" class="modal fade"  data-keyboard="false" data-backdrop="static" tabindex="-1"'+
								 ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
								 'Your Session has expired. Please login again</h3><a href="login" class="btn btn-default errorOk" type="submit">'+
								 'OK</a></div></div></div></div>');
				$("#sessionOutMessage").modal("show");
			}
		};
	   this.errSaveHttpStatusFunction= function(data){
		  if(data==500){
			   $("body").append('<div id="errSaveMessage" class="modal fade" data-keyboard="false" data-backdrop="static" '+
								'tabindex="-1" role="dialog"><div class="modal-dialog"><div class="col-md-12 modal-content modalView">'+
								'<div class="modal-header errorsmodal "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'+
								'<label class="modalMsg">Error</label></div><div class="modal-body"><h4 class="modal-title" id="myModalLabel">'+
								'Error occured while saving the form.</h4><p style="text-align: center"><button id="button3id" name="button3id" '+
								'class="btn btn-info errorModalClosebtn" type="submit" class="close"data-dismiss="modal"aria-hidden="true">OK</button>'+
								'</p></div></div></div>');
			   $("#errSaveMessage").modal("show");
		  }else  if(data==307){
			  $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
					  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
					  'Site is under maintenance. Please try after some time.</h3><a href="" onClick="window.location.reload(true);" class="btn btn-default errorOk" type="submit">'+
					  'OK</a></div></div></div></div>');
			  $("#sessionOutMessage").modal("show");
		  }else{
				 $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
								  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
								  'Your Session has expired. Please login again.</h3><a href="login" class="btn btn-default errorOk" type="submit">'+
								  'OK</a></div></div></div></div>');
				 $("#sessionOutMessage").modal("show");  
		  }
		  
	   };
	   this.errSaveHttpFunction= function(error){
			  if(error.status==500){
				   $("body").append('<div id="errSaveMessage" class="modal fade" data-keyboard="false" data-backdrop="static" '+
									'tabindex="-1" role="dialog"><div class="modal-dialog"><div class="col-md-12 modal-content modalView">'+
									'<div class="modal-header errorsmodal "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'+
									'<label class="modalMsg">Error</label></div><div class="modal-body"><h4 class="modal-title" id="myModalLabel">'+
									'Error occured while saving the form.</h4><p style="text-align: center"><button id="button3id" name="button3id" '+
									'class="btn btn-info errorModalClosebtn" type="submit" class="close"data-dismiss="modal"aria-hidden="true">OK</button>'+
									'</p></div></div></div>');
				   $("#errSaveMessage").modal("show");
			  }else  if(error.status==307){
				  $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
						  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
						  'Site is under maintenance. Please try after some time.</h3><a href="" onClick="window.location.reload(true);" class="btn btn-default errorOk" type="submit">'+
						  'OK</a></div></div></div></div>');
				  $("#sessionOutMessage").modal("show");
			  }else  if(error.status==403 && error.statusText=="You are logout from other system. Please login again."){
				  $("body").append('<div id="duplicateLoginMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
						  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h4>'+
						  'You are logout from other system. Please login again.</h4><a href="login" class="btn btn-default errorOk" type="submit">'+
						  'OK</a></div></div></div></div>');
				  $("#duplicateLoginMessage").modal("show");
			  }else{
					 $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
									  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
									  'Your Session has expired. Please login again.</h3><a href="login" class="btn btn-default errorOk" type="submit">'+
									  'OK</a></div></div></div></div>');
					 $("#sessionOutMessage").modal("show");  
			  }
			  
		   };
	   this.errSubmitHttpStatusFunction= function(data){
			  if(data==500){
				   $("body").append('<div id="errSubmitMessage" class="modal fade" data-keyboard="false" data-backdrop="static" '+
								'tabindex="-1" role="dialog"><div class="modal-dialog"><div class="col-md-12 modal-content modalView">'+
								'<div class="modal-header errorsmodal "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'+
								'<label class="modalMsg">Error</label></div><div class="modal-body"><h4 class="modal-title" id="myModalLabel">'+
								'Error occured while submitting the form.</h4><p style="text-align: center"><button id="button3id" name="button3id" '+
								'class="btn btn-info errorModalClosebtn" type="submit" class="close"data-dismiss="modal"aria-hidden="true">OK</button>'+
								'</p></div></div></div>');
				   $("#errSubmitMessage").modal("show");
			  }else  if(data==307){
				  $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
						  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
						  'Site is under maintenance. Please try after some time.</h3><a href="" onClick="window.location.reload(true);" class="btn btn-default errorOk" type="submit">'+
						  'OK</a></div></div></div></div>');
				  $("#sessionOutMessage").modal("show");
			  }else{
				 $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
								  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
								  'Your Session has expired. Please login again.</h3><a href="login" class="btn btn-default errorOk" type="submit">'+
								  'OK</a></div></div></div></div>');
				 $("#sessionOutMessage").modal("show");  
			  }
			  
	    };
	    this.errGetLastSaveDataHttpStatusFunction= function(data){
			  if(data==500){
				   $("body").append('<div id="errSubmitMessage" class="modal fade" data-keyboard="false" data-backdrop="static" '+
									'tabindex="-1" role="dialog"><div class="modal-dialog"><div class="col-md-12 modal-content modalView">'+
									'<div class="modal-header errorsmodal "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'+
									'<label class="modalMsg">Error</label></div><div class="modal-body"><h4 class="modal-title" id="myModalLabel">'+
									'Error occured while loading the form.</h4><p style="text-align: center"><button id="button3id" name="button3id" '+
									'class="btn btn-info errorModalClosebtn" type="submit" class="close"data-dismiss="modal"aria-hidden="true">OK</button>'+
									'</p></div></div></div>');
				   $("#errSubmitMessage").modal("show");
			  }
			  else{
				 $("body").append('<div id="sessionOutMessage" class="modal fade" data-keyboard="false" data-backdrop="static" tabindex="-1"'+
								  ' role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-body text-center"><h3>'+
								  'Your Session has expired. Please login again.</h3><a href="login" class="btn btn-default errorOk" type="submit">'+
								  'OK</a></div></div></div></div>');
				 $("#sessionOutMessage").modal("show");  
			  }
			  
	    };
	  	this.messages = {
	  		add_all_training_details:"Please fill all the details of last training.",
	  		add_all_specific_training_details:"Please fill all the details of training.",
	  		select_training_from:"Please select 'Training From' date",
	  		training_to_not_les_than_training_from:"'Training To' date can not be less than 'Training From' date.",
	  		after_submission_msg:"Form submitted for this month, cannot edit, save or submit further. Form will be available from the start of next month.",
	  		add_all_sectionC_details:"Please fill all the details of last child in C.(New Admissions during the month.)",
	  		add_all_sectionJ_details:"Please fill all the details of last child in I.",
	  		section_i_length_mismatch:"Number of children added in C should be equal to C.6 Grand Total",
	  		section_j_length_mismatch:"Number of children added in I should be equal to D.1 Grand Total",
	  		save_success_msg:"Form successfully saved",
	  		submit_success_msg:"Form successfully submitted for "
	  	};
	  	this.cci_e_negetive_err_msg = function(yearRange){
	  		return "Value of C("+yearRange+" years) can not be less than D total("+yearRange+" years)";
	  	};
	  	
	  	this.jjb_f_negetive_err_msg = function(yearRange){
	  		return "Value of C("+yearRange+" years) can not be less than E total("+yearRange+" years)";
	  	};
		/*
		 * change password validation and server interaction
		 * Pratyush
		 */
		this.cpModal = function(){
			$('#changePasswordModal').modal('show');
			$('#changePasswordError').css("color","red");
		};
		this.checkBlankAndValidate = function(obj, input){
			if(input=='currentPw' && obj.currentPw!=null){
				document.getElementById('changePasswordError').innerHTML = "";
			}else if(input=='newPw' && obj.newPw!=null){
				document.getElementById('changePasswordError').innerHTML = "";
				if(obj.confirmPw!=null&& obj.newPw!=obj.confirmPw){
					document.getElementById('changePasswordError').innerHTML = "Passwords do not match";
				}else{
					document.getElementById('changePasswordError').innerHTML = "";
				}
			}else if(input=='confirmPw' && obj.confirmPw!=null){
				document.getElementById('changePasswordError').innerHTML = "";
				if(obj.newPw!=null&& obj.confirmPw!=obj.newPw){
					document.getElementById('changePasswordError').innerHTML = "Passwords do not match";
				}else{
					document.getElementById('changePasswordError').innerHTML = "";
				}
			}else{
				document.getElementById('changePasswordError').innerHTML = "";
			}
		};
		
		this.changePassword = function(pwModel){

			if(pwModel.currentPw == null){
				document.getElementById('changePasswordError').innerHTML = "Please enter current password.";
			}else if(angular.isUndefined(pwModel.newPw)){
				document.getElementById('changePasswordError').innerHTML = "Please enter a vaild password (6-12 characters, only numbers and alphabets)";
			}else if(pwModel.confirmPw == null){
				document.getElementById('changePasswordError').innerHTML = "Please enter confirm password.";
			}else if(pwModel.newPw != pwModel.confirmPw){
				document.getElementById('changePasswordError').innerHTML = "New Password and Confirm Password do not match";
			}else{
				$(".loader").show();
				var serverObj={
						currentPw:md5.createHash(pwModel.currentPw),
						newPw:md5.createHash(pwModel.newPw)
				};
				$http.post("changePassword", serverObj).then(
				function(res){
					if(res.data.errorCode=="200"){
						$('#changePasswordError').css("color","#41c484");
						document.getElementById('changePasswordError').innerHTML = res.data.errorMessage;
						$(".loader").fadeOut();
						$timeout(function(){
							$('#changePasswordModal').modal('hide');
						},2000);
					}else{
						$(".loader").fadeOut();
						document.getElementById('changePasswordError').innerHTML = res.data.errorMessage;
					}
					$(".loader").fadeOut();
				},function(err){
					console.log(err);
					document.getElementById('changePasswordError').innerHTML = "Problem in changing password! Please try again.";
					$(".loader").fadeOut();
				});
			}
		};
  };
  cpmisApp.directive('onlyFourDigit', function($parse) {
		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, elem, attrs, ngModelCtrl) {
				angular.element(elem).on("keydown keyup", function(e) {
					if(e.keyCode == 16 || e.keyCode == 190 || e.keyCode ==107 || e.keyCode == 109 || e.keyCode == 189 || e.keyCode == 187 || e.keyCode == 69){
						e.preventDefault();
					};

					if (e.keyCode == 46 || e.keyCode == 8) {
						var num = this.value;
						var temp;
						if (num == "")
							temp = 0;
						else
							temp = num;

						if (this.value.length == 0) {
							ngModelCtrl.$setViewValue(null);
							ngModelCtrl.$render();
							var modelGetter1 = $parse(attrs['ngModel']);
							var modelSetter1 = modelGetter1.assign;
							modelSetter1(scope, null);
						}
						if (this.value == "") {
							ngModelCtrl.$setViewValue(null);
							ngModelCtrl.$render();
							var modelGetter1 = $parse(attrs['ngModel']);
							var modelSetter1 = modelGetter1.assign;
							modelSetter1(scope, null);
						}
					} 
					else if (Number(this.value) > 999 && this.value != "" && e.keyCode != 9) {
						e.preventDefault();
					}else 
						{
						var localVal=null;
						if(this.value=="")
							{
							var localVal=null;
							}
						else{
							var localVal=parseInt(this.value, 10);	
						}
						
						ngModelCtrl.$setViewValue(localVal);
						ngModelCtrl.$render();
						var modelGetter1 = $parse(attrs['ngModel']);
						var modelSetter1 = modelGetter1.assign;
						modelSetter1(scope, localVal);
					}
					if ((e.keyCode == 48 || e.keyCode == 96) && this.value.length == 1) {
						if ((this.value == 0)) {
							e.preventDefault();
						} else if (this.value == "") {
							e.preventDefault();
						}

					}

				});
			}
		};
	});
  cpmisApp.directive('onlyFourDigits', function($parse) {
		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, elem, attrs, ngModelCtrl) {
				angular.element(elem).on("keydown keyup", function(e) {
					if(e.keyCode == 16 || e.keyCode == 190 || e.keyCode ==107 || e.keyCode == 109 || e.keyCode == 189 || e.keyCode == 187 || e.keyCode == 69){
						e.preventDefault();
					};

					if (e.keyCode == 46 || e.keyCode == 8) {
						var num = this.value;
						var temp;
						if (num == "")
							temp = 0;
						else
							temp = num;

						if (this.value.length == 0) {
							ngModelCtrl.$setViewValue(null);
							ngModelCtrl.$render();
							var modelGetter1 = $parse(attrs['ngModel']);
							var modelSetter1 = modelGetter1.assign;
							modelSetter1(scope, null);
						}
						if (this.value == "") {
							ngModelCtrl.$setViewValue(null);
							ngModelCtrl.$render();
							var modelGetter1 = $parse(attrs['ngModel']);
							var modelSetter1 = modelGetter1.assign;
							modelSetter1(scope, null);
						}
					} 
					else if (Number(this.value) > 999 && this.value != "" && e.keyCode != 9) {
						e.preventDefault();
					}else 
						{
						var localVal=null;
						if(this.value=="")
							{
							var localVal=null;
							}
						else{
							var localVal=parseInt(this.value, 10);	
						}
						
						ngModelCtrl.$setViewValue(localVal);
						ngModelCtrl.$render();
						var modelGetter1 = $parse(attrs['ngModel']);
						var modelSetter1 = modelGetter1.assign;
						modelSetter1(scope, localVal);
					}
					if ((e.keyCode == 48 || e.keyCode == 96) && this.value.length == 1) {
						if ((this.value == 0)) {
							e.preventDefault();
						} else if (this.value == "") {
							e.preventDefault();
						}

					}

				});
			}
		}
	});
	cpmisApp.directive("limitTo", [ function() {
		return {
			restrict : "A",
			link : function(scope, elem, attrs) {
				var limit = parseInt(attrs.limitTo);
				angular.element(elem).on("keypress", function(e) {
					if (this.value.length == limit)
						e.preventDefault();
				});
			}
		};
	} ]);
  cpmisApp.directive('fiftyCharactersValidation', function() {

		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, element, attrs, ngModelCtrl) {
				if (!ngModelCtrl) {
					return;
				}
				ngModelCtrl.$parsers.push(function(val) {
					if (angular.isUndefined(val)) {
						var val = '';
					}
					var clean = val;
					if (!angular.isUndefined(clean) && clean != null) {
						var num = 0;
						if (clean != null && clean.length > 50) {
							num = clean.slice(0, 50);
							clean = num;
						}
						clean = clean.replace(/[^a-zA-z .]/g, '');
						clean = clean.replace('^', '');
						clean = clean.replace(/\\/g, '');
						clean = clean.replace('[', '');
						clean = clean.replace(']', '');
					}
					if (val !== clean) {
						ngModelCtrl.$setViewValue(clean);
						ngModelCtrl.$render();
					}
					if (val != null && val == "") {
						ngModelCtrl.$setViewValue(null);
						ngModelCtrl.$render();
					}
					return clean;
				});
			}
		};
	});
  
  cpmisApp.directive('hundredFiftyCharactersValidation', function() {

		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, element, attrs, ngModelCtrl) {
				if (!ngModelCtrl) {
					return;
				}

				ngModelCtrl.$parsers.push(function(val) {
					if (angular.isUndefined(val)) {
						var val = '';
					}

					var clean = val;
					if (!angular.isUndefined(clean) && clean!=null) {
						var num = 0;
						if (clean.length > 150) {
							num = clean.slice(0, 150);
							clean = num;
						}
						clean = clean.replace(/[^a-zA-z .]/g, '');
						clean = clean.replace('^', '');
						clean = clean.replace(/\\/g, '');
						clean = clean.replace('[', '');
						clean = clean.replace(']', '');

					}

					if (val !== clean) {
						ngModelCtrl.$setViewValue(clean);
						ngModelCtrl.$render();
					}
					if (val != null && val == "") {
						ngModelCtrl.$setViewValue(null);
						ngModelCtrl.$render();
					}
					return clean;
				});
			}
		};
	});
  cpmisApp.directive('passwordValidation', function() {
		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, element, attrs, ngModelCtrl) {
				if (!ngModelCtrl) {
					return;
				}
				ngModelCtrl.$parsers.push(function(val) {
					if (angular.isUndefined(val)) {
						var val = '';
					}
					var clean = val;
					if (!angular.isUndefined(clean)) {
						var num = 0;
						if (clean.length > 30) {
							num = clean.slice(0, 30);
							clean = num;
						}
						clean = clean.replace(/\\/g, '');
						clean = clean.replace('/', '');
						clean = clean.replace('_', '');
						clean=clean.replace(/\s/,'');
					}
					if (val !== clean) {
						ngModelCtrl.$setViewValue(clean);
						ngModelCtrl.$render();
					}
					return clean;
				});
				element.bind('keypress', function(event) {
					if (typeof InstallTrigger !== 'undefined') {
						if (event.charCode === 32) {
							event.preventDefault();
						}
					} else {
						if (event.keyCode === 32) {
							event.preventDefault();
						}
					}
				});
			}
		};
	});
  cpmisApp.directive('onlyTenDigits', function () {

    return {
        restrict: 'A',
        require: '?ngModel',
        link: function(scope, element, attrs, ngModelCtrl) {
  			if(!ngModelCtrl) {
  				return; 
  			}
  			
  			ngModelCtrl.$parsers.push(function(val) {
  				var temp = val;
  				if (angular.isUndefined(temp) || temp == null || isNaN(temp)) {
  					temp = '';
  				}else{
  					var clean = temp.toString().replace(/e[^0-9]/g, '');
  					var temp1 = clean;
  					if(isNaN(temp1)){
  						temp = '';
  						val = '';
  					}
  				}
  				if(!angular.isUndefined(temp)) {
  					if(temp == '' || temp == "")
  						temp = null;
  	            	 var num=null;
  	            	 if(temp != null){
  	            		 if(temp.toString().length>10 ){
  		            		 num =temp.toString().slice(0,10);
  		            		 temp= num;
  		            	 }
  	            	 }
  	             }
  				
//  				if (val !== clean) {
  					ngModelCtrl.$setViewValue(temp);
  					ngModelCtrl.$render();
//  				}
  				return temp;
  			});
  			
  			element.bind('keypress', function(event) {
  				if(event.keyCode === 32) {
  					event.preventDefault();
  				}
  			});
  		}
    };
  });
  cpmisApp.directive('twoFiftyCharactersValidation', function () {

    return {
        restrict: 'A',
        require: '?ngModel',
        link: function(scope, element, attrs, ngModelCtrl) {
  			if(!ngModelCtrl) {
  				return; 
  			}
  			ngModelCtrl.$parsers.push(function(val) {
  				if (angular.isUndefined(val)) {
  					var val = '';
  				}
  				var clean = val;
  				if(!angular.isUndefined(clean) && clean != null) {
  	            	 var num=0;
  	            	 if(clean.length>250 ){
  	            		 num =clean.slice(0,250);
  	            		 clean= num;
  	            	 }
  	            	clean = clean.replace(/[^a-zA-z .,]/g, '');
  	            	clean = clean.replace('^', '');
  	            	clean = clean.replace(/\\/g, '');
  	            	clean = clean.replace('[', '');
  	            	clean = clean.replace(']', '');
  	             }
  				
  				if (val !== clean) {
  					ngModelCtrl.$setViewValue(clean);
  					ngModelCtrl.$render();
  				}
  				if (val != null && val == "") {
					ngModelCtrl.$setViewValue(null);
					ngModelCtrl.$render();
				}
  				return clean;
  			});
  		}
    };
  });
  cpmisApp.filter('range', function() {
	  return function(input, total) {
	    total = parseInt(total);
	    for (var i=0; i<total; i++)
	      input.push(i);
	    return input;
	  };
	});
  cpmisApp.directive('elevenDigitsPhone', function () {

	    return {
	        restrict: 'A',
	        require: '?ngModel',
	        link: function(scope, element, attrs, ngModelCtrl) {
	  			if(!ngModelCtrl) {
	  				return; 
	  			}
	  			
	  			ngModelCtrl.$parsers.push(function(val) {
	  				var temp = val;
	  				if (angular.isUndefined(temp) || temp == null || isNaN(temp)) {
	  					temp = '';
	  				}else{
	  					var clean = temp.toString().replace(/e[^0-9]/g, '');
	  					var temp1 = clean;
	  					if(isNaN(temp1)){
	  						temp = '';
	  						val = '';
	  					}
	  				}
	  				if(!angular.isUndefined(temp)) {
	  					if(temp == '' || temp == "")
	  						temp = null;
	  	            	 var num=null;
	  	            	 if(temp != null){
    	            	 
	  	            		 var officeTelephoneNumber=document.getElementById('officeTelephoneNo').value;

    	            	 if(officeTelephoneNumber.length > 6 && officeTelephoneNumber.length<=11 ){
    	            		 var validofficeTelephoneNumber=setInterval(function(){
	  	            		
    	            			clearInterval(validofficeTelephoneNumber);
	  	            			clearInterval(invalidofficeTelephoneNumber);
	  	            			document.getElementById('ofcTelError').innerHTML=null;
	  		  	          		
    	            		 }, 0); 
	  	            			 
	  	          			 document.getElementById('ofcTelError').innerHTML=null;
	  	          		 }
	  	          		 else if(officeTelephoneNumber.length > 11 ){
	  	          			 
		  	          		var invalidofficeTelephoneNumber=setInterval(function(){
		  	          			
		  	          			clearInterval(invalidofficeTelephoneNumber);
		  	          			clearInterval(validofficeTelephoneNumber);
		  	          			document.getElementById('ofcTelError').innerHTML="Please provide a maximum 11 digits valid telephone number !";
		  	          			
		  	          		}, 0); 
	  	          			
	  	          		 }
	  	            		 
	  	            		 if(temp.toString().length>11 ){
	  	            			 	  	            			   	            			
	  		            		 num =temp.toString().slice(0,11);
	  		            		 temp= num;
	  		            	 }
		  	            		
	  	            	 }
	  	             }
	  				
	  					ngModelCtrl.$setViewValue(temp);
	  					ngModelCtrl.$render();
	  				return temp;
	  			});
	  			
	  			element.bind('keypress', function(event) {
	  				if(event.keyCode === 32) {
	  					event.preventDefault();
	  				}
	  			});
	  		}
	    };
	  });
  cpmisApp.directive('onlyTwoDigits', function($parse) {
		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, elem, attrs, ngModelCtrl) {
				angular.element(elem).on("keydown keyup", function(e) {
					if(e.keyCode == 16 || e.keyCode == 190 || e.keyCode ==107 || e.keyCode == 109 || e.keyCode == 189 || e.keyCode == 187 || e.keyCode == 69){
						e.preventDefault();
					};
					if (e.keyCode == 46 || e.keyCode == 8) {
						var num = this.value;
						var temp;
						if (num == "")
							temp = 0;
						else
							temp = num;

						if (this.value.length == 0) {
							ngModelCtrl.$setViewValue(null);
							ngModelCtrl.$render();
							var modelGetter1 = $parse(attrs['ngModel']);
							var modelSetter1 = modelGetter1.assign;
							modelSetter1(scope, null);
						}
						if (this.value == "") {
							ngModelCtrl.$setViewValue(null);
							ngModelCtrl.$render();
							var modelGetter1 = $parse(attrs['ngModel']);
							var modelSetter1 = modelGetter1.assign;
							modelSetter1(scope, null);
						}
					} 
					else if (Number(this.value) > 9 && this.value != "" && e.keyCode != 9) {
						e.preventDefault();
					}else 
						{
						var localVal=null;
						if(this.value=="")
							{
							var localVal=null;
							}
						else{
							var localVal=parseInt(this.value, 10);	
						}
						
						ngModelCtrl.$setViewValue(localVal);
						ngModelCtrl.$render();
						var modelGetter1 = $parse(attrs['ngModel']);
						var modelSetter1 = modelGetter1.assign;
						modelSetter1(scope, localVal);
					}
					if ((e.keyCode == 48 || e.keyCode == 96) && this.value.length == 1) {
						if ((this.value == 0)) {
							e.preventDefault();
						} else if (this.value == "") {
							e.preventDefault();
						}

					}

				});
			}
		}
	});
  
 cpmisApp.directive('twoFiftyCharactersValidationComma', function() {

		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, element, attrs, ngModelCtrl) {
				if (!ngModelCtrl) {
					return;
				}

				ngModelCtrl.$parsers.push(function(val) {
					if (angular.isUndefined(val)) {
						var val = '';
					}
					var clean = val;
					if (!angular.isUndefined(clean) && clean != null) {
						var num = 0;
						if (clean.length > 250) {
							num = clean.slice(0, 250);
							clean = num;
						}
						clean = clean.replace(/[^a-zA-z . ,]/g, '');
						clean = clean.replace('^', '');
						clean = clean.replace(/\\/g, '');
						clean = clean.replace('[', '');
						clean = clean.replace(']', '');

					}
					if (val !== clean) {
						ngModelCtrl.$setViewValue(clean);
						ngModelCtrl.$render();
					}
					if (val != null && val == "") {
						ngModelCtrl.$setViewValue(null);
						ngModelCtrl.$render();
					}
					return clean;
				});
			}
		};
	});
 cpmisApp.directive('fiftyCharactersValidationSaa', function() {

		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, element, attrs, ngModelCtrl) {
				if (!ngModelCtrl) {
					return;
				}
				ngModelCtrl.$parsers.push(function(val) {
					if (angular.isUndefined(val)) {
						var val = '';
					}
					var clean = val;
					if (!angular.isUndefined(clean) && clean != null) {
						var num = 0;
						if (clean != null && clean.length > 50) {
							num = clean.slice(0, 50);
							clean = num;
						}
					}
					if (val !== clean) {
						ngModelCtrl.$setViewValue(clean);
						ngModelCtrl.$render();
					}
					if (val != null && val == "") {
						ngModelCtrl.$setViewValue(null);
						ngModelCtrl.$render();
					}
					return clean;
				});
			}
		};
	});

cpmisApp.directive('hundredFiftyCharactersValidationSaa', function() {

		return {
			restrict : 'A',
			require : '?ngModel',
			link : function(scope, element, attrs, ngModelCtrl) {
				if (!ngModelCtrl) {
					return;
				}

				ngModelCtrl.$parsers.push(function(val) {
					if (angular.isUndefined(val)) {
						var val = '';
					}

					var clean = val;
					if (!angular.isUndefined(clean) && clean!=null) {
						var num = 0;
						if (clean.length > 150) {
							num = clean.slice(0, 150);
							clean = num;
						}
					}

					if (val !== clean) {
						ngModelCtrl.$setViewValue(clean);
						ngModelCtrl.$render();
					}
					if (val != null && val == "") {
						ngModelCtrl.$setViewValue(null);
						ngModelCtrl.$render();
					}
					return clean;
				});
			}
		};
	});

cpmisApp.directive('addressValidation', function() {

	return {
		restrict : 'A',
		require : '?ngModel',
		link : function(scope, element, attrs, ngModelCtrl) {
			if (!ngModelCtrl) {
				return;
			}

			ngModelCtrl.$parsers.push(function(val) {
				if (angular.isUndefined(val)) {
					var val = '';
				}

				var clean = val;
				if (!angular.isUndefined(clean) && clean!=null) {
					var num = 0;
					if (clean.length > 150) {
						num = clean.slice(0, 150);
						clean = num;
					}
					clean = clean.replace(/[^a-zA-z . 0-9 / -"'()#,-]/g, '');
					clean = clean.replace('^', '');
					clean = clean.replace(/\\/g, '');
					clean = clean.replace('[', '');
					clean = clean.replace(']', '');
					clean = clean.replace('_', '');
					clean = clean.replace('!', '');
				}

				if (val !== clean) {
					ngModelCtrl.$setViewValue(clean);
					ngModelCtrl.$render();
				}
				if (val != null && val == "") {
					ngModelCtrl.$setViewValue(null);
					ngModelCtrl.$render();
				}
				return clean;
			});
		}
	};
});
 