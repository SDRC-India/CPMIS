
/*
 * @author Swarna(swarnaprava@sdrc.co.in) 
 * 
 */

var cpmisApp = angular.module('cpmisApp', ['angular-md5']);
cpmisApp.controller('report_Controller', function($scope, $http, $timeout, $window, md5, $filter, commonService) {

	$(".loader").show();
	
	
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
	
	/**********report data ************/
	
	$http.get("resources/js/dummyJson/reportData.json").then(function(result) {
		
		$scope.periodicities = result.data.periodicities;

	}, function(error) {
		console.log(error);
	});
	
	
	
	$http.get('getSectorsForReport').success(function(data) {
		$scope.sectors = data;
		$scope.users=$filter('filter')($scope.sectors, {description:-1},true);
	},function(error){
		console.log(error);
	});
	
	
	
	$http.get('getTimeperiodForReport').success(function(data) {
		
		$scope.resultDetails = data;
		
	},function(error){
		console.log(error);
	});

	$scope.showReportTable = false;
	$scope.showQuarter = false;
	$scope.showMonth = false;
	
	$scope.selectUser = function(user){
		$scope.userName = user.value;
		$scope.reportTypename = undefined;
		$scope.reportTypename = "";
		$scope.reportName = undefined;
		$scope.reportName = "";
		$scope.periodicity = undefined;
		$scope.periodicity = "";
		$scope.monthName = "";
		$scope.monthName = undefined;
		$scope.quarterName = "";
		$scope.quarterName = undefined;
		$scope.showReportTable = false;
		$scope.reportTypes=$filter('filter')($scope.sectors, {description:user.key},true);
	};
	
	$scope.selectReportType = function(type){
		$scope.reportTypename = type.value;
		$scope.reportName = undefined;
		$scope.reportName = "";
		$scope.periodicity = undefined;
		$scope.periodicity = "";
		$scope.monthName = "";
		$scope.monthName = undefined;
		$scope.quarterName = "";
		$scope.quarterName = undefined;
		$scope.showReportTable = false;
		$http.get('getIndicatorsForReport?sector='+type.key).success(function(data) {
			$scope.reports = data;
		},function(error){
			console.log(error);
		});
	};
	
	$scope.selectReport = function(report){
		$scope.reportName = report.value;
		$scope.reportKey = report.key;
		$scope.periodicity = undefined;
		$scope.periodicity = "";
		$scope.monthName = "";
		$scope.monthName = undefined;
		$scope.quarterName = "";
		$scope.quarterName = undefined;
		$scope.showReportTable = false;
		if($scope.periodicity == undefined || $scope.periodicity == "" )
		{
		$scope.showMonth = false;
		$scope.showQuarter = false;
		}
	};
	
	$scope.selectPeriodicity = function(time){
		$scope.periodicity = time;
		$scope.showReportTable = false;
		$scope.timePeriod = [];
		
		for(var i = 0; i < $scope.resultDetails.length; i++)
			{
			if(time.timeId == "1"){
				$scope.showMonth = true;
				$scope.showQuarter = false;
				$scope.quarterName = "";
				$scope.quarterName = undefined;
				if($scope.resultDetails[i].groupName == "month")
				{
					$scope.timePeriod.push($scope.resultDetails[i]);
				}
				
			}else if(time.timeId == "2"){
				$scope.showQuarter = true;
				$scope.showMonth = false;
				$scope.monthName = "";
				$scope.monthName = undefined;
				if($scope.resultDetails[i].groupName == "quarter")
				{
					$scope.timePeriod.push($scope.resultDetails[i]);
				}
				
			}
		
			}
	};
	
	$scope.selectMonth = function(month){
		$scope.monthName = month;
		$scope.showReportTable = false;
	};
	
	$scope.selectQuarter = function(quarter){
		$scope.quarterName = quarter;
		$scope.showReportTable = false;
	};
	
	
	$scope.exportTableData = function(id){
		
		var link = document.createElement("a");
    	var htmls = "";
        var uri = 'data:application/vnd.ms-excel;base64,';
        var template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'; 
        var base64 = function(s) {
            return window.btoa(unescape(encodeURIComponent(s)));
        };

        var format = function(s, c) {
            return s.replace(/{(\w+)}/g, function(m, p) {
                return c[p];
            });
        };
        	var d = new Date();
        	link.download = "CPMIS_Report_"+ (d.getDate())+ "/" + (d.getMonth() + 1)+ "/" + (d.getFullYear()) +".xls";
        	
        var tab_text = "<table border='2px'><caption>&nbsp;<b style='font-size:20px;'>MIS Report of</b> &nbsp;:&nbsp;<b style='color:#0054a5; margin-right: 20px ; font-size:23px'>"+$scope.reportName+"</b><br>&nbsp;<br> <b style='font-size:20px;'>Time Period </b> &nbsp;:&nbsp;<b style='color:#0054a5; margin-right: 20px ; font-size:23px;'>"+($scope.periodicity.timeId == "1" ? $scope.monthName.value : $scope.quarterName.value)+"</b><br>&nbsp;<br></caption><br>&nbsp;<br><tr bgcolor='#41c484'>";
        
        var textRange; var j=0;
        tab = document.getElementById(id); // id of table

        for(j = 0 ; j < tab.rows.length ; j++) 
        {     
        	   
        	if(j==0)
			tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        	else
            tab_text=tab_text+"<tr style='text-align:left; vertical-align:middle;'>"+tab.rows[j].innerHTML+"</tr>";
            tab_text=tab_text+"</tr>";
        }
        
        tab_text=tab_text+"</table>"+"<br>"+"<br>";
        tab_text = tab_text + "<table style='border=none;' ><tr><td bgcolor='#79addc'>&nbsp;&nbsp;</td><td>Number</td></tr><tr><td bgcolor='#adf7b6'>&nbsp;&nbsp;</td><td>Row Percent</td></tr><tr><td bgcolor='#ffc09f'>&nbsp;&nbsp;</td><td>Column Percent</td></tr></table>";
        tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
        tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params


        var ctx = {
            worksheet : 'Report',
            table : tab_text
        };

        link.href = uri + base64(format(template, ctx));
        if(typeof InstallTrigger === 'undefined'){
        	link.click();
        }
        else{
        	window.location.href = link.href;
        }
    };
	
	
	
	$scope.showUnit = function(){
		if($scope.numberUnit == false  && $scope.rowPercentUnit == false && $scope.columnPercentUnit == false){
			$scope.alertMessage = "Please select at least one unit.";
			$('#ErrAlertModal').modal('show');
			
		}else if($scope.numberUnit == false  && $scope.rowPercentUnit == false && $scope.columnPercentUnit == true){
			$('.margin-bottom').css('margin-top',"6px");
			$('.margin-bottom').css('margin-bottom',"6px");
			$('.margin-bottom').css('padding',"8px");
			
		}else if($scope.numberUnit == false  && $scope.rowPercentUnit == true && $scope.columnPercentUnit == false){
			$('.margin-bottom-row').css('margin-top',"6px");
			$('.margin-bottom-row').css('margin-bottom',"6px");
			$('.margin-bottom-row').css('padding',"8px");
			
		}else if($scope.numberUnit == true  && $scope.rowPercentUnit == false && $scope.columnPercentUnit == false){
			$('.margin-bottom-number').css('margin-top',"6px");
			$('.margin-bottom-number').css('margin-bottom',"6px");
			$('.margin-bottom-number').css('padding',"8px");
			
		}else if($scope.numberUnit == true  && $scope.rowPercentUnit == true && $scope.columnPercentUnit == true){
			$('.margin-bottom-number').css('margin-top',"5px");
			$('.margin-bottom-number').css('margin-bottom',"0px");
			$('.margin-bottom-number').css('padding',"6px");
		}else if($scope.numberUnit == false){
			$('.static-header-container').css('margin-right',"0");
			
			}
		else if($scope.rowPercentUnit == false){
			$('.static-header-container').css('margin-right',"0");
			}
		else if($scope.columnPercentUnit == false){
			$('.static-header-container').css('margin-right',"0");
			}
	};
	
	$scope.searchResults = function(){
		
		var tableRows = document.getElementById("report-history").rows.length;
		if(tableRows < 5)
			$('.static-header-container').css('margin-right',"0");
		else
			$('.static-header-container').css('margin-right',"17");
		
	};
	
	$scope.submitReport = function(){
		if($scope.userName == undefined || $scope.userName == ""){
			$scope.alertMessage = "Please select institution type.";
			$('#ErrAlertModal').modal('show');
			
		}else if($scope.reportTypename == undefined || $scope.reportTypename == ""){
			$scope.alertMessage = "Please select report type.";
			$('#ErrAlertModal').modal('show');
			
		}else if($scope.reportName == undefined || $scope.reportName == ""){
			$scope.alertMessage = "Please select report name.";
			$('#ErrAlertModal').modal('show');
			
		}else if($scope.periodicity == undefined || $scope.periodicity == ""){
			$scope.alertMessage = "Please select periodicity.";
			$('#ErrAlertModal').modal('show');
			
		}else if($scope.monthName == "" || $scope.monthName == undefined  && $scope.periodicity.time_name =="Monthly"){
			$scope.alertMessage = "Please select month.";
			$('#ErrAlertModal').modal('show');
			
		}else if($scope.quarterName == "" || $scope.quarterName == undefined && $scope.periodicity.time_name =="Quarterly"){
			$scope.alertMessage = "Please select quarter.";
			$('#ErrAlertModal').modal('show');
			
		}else{
			$(".loader").show();
		
			$http.get("getReports?indicatorId=" + $scope.reportKey + "&timeperiodId=" +($scope.periodicity.timeId == "1" ? $scope.monthName.key : $scope.quarterName.key)).then(function successCallback(response){
				if (response.status == 200) {
					$scope.showReportTable = true;
					$scope.headers = response.data.headers;
					$scope.tableDetails = response.data.tableDetails;
					$scope.numberUnit = true;
					$scope.rowPercentUnit = true;
					$scope.columnPercentUnit = true;
					}
				
			}, function(error) {
				console.log(error);
			});
		
			$(".loader").fadeOut();
		}
	};
	
	$(".loader").fadeOut();
	
	$scope.confirmNavigate = function() {
		$('#confirmationModalHomePage').modal('show');
	};
});



cpmisApp.directive(
		"sdrcTableHeaderFix",
		function($window, $compile) {
			function link(scope, el) {
				var tableUniqClass = "";
				
				scope.$watch("tableuniqueclass", function(uniqClass) {
					tableUniqClass = uniqClass;
					function createStaticHeader(uniqClass){
						$("."+uniqClass).before('<div class="static-header-container"><div class="static-header"></div></div>');
					}
					if(uniqClass)
					createStaticHeader(uniqClass);	
				});
				
				scope.$watch("tabledata", function(data) {
					function fixTableHeader(uniqClass) {
						setTimeout(function(){
							
							if($("."+uniqClass)[0].offsetWidth >= $("."+uniqClass)[0].clientWidth){
								var i=0;rowWidthList=[];
								$("."+uniqClass).siblings(".static-header-container").find(".static-header").html($("."+uniqClass).html());
								$("."+uniqClass).siblings(".static-header-container").find(".static-header").find("table thead").css("visibility", "visible");
								$("."+uniqClass).scrollLeft(0);
								$("."+uniqClass).siblings(".static-header-container").height($("."+uniqClass).siblings(".static-header-container").find(".static-header table thead").height());
								$("."+uniqClass).css("margin-top", -$("."+uniqClass).siblings(".static-header-container").find(".static-header table thead").height()+"px");
//								$("."+uniqClass).parent()
								$("."+uniqClass).siblings(".static-header-container").css({
									 'overflow-x': 'hidden',
									 'overflow-y': 'hidden',
									 'position': 'relative',
									 'clear': 'both',
									 'border-bottom':'1px solid #ddd'
								});
								$("."+uniqClass).siblings(".static-header-container").find(".static-header").css({
									 'overflow-x': 'auto',
									 'overflow-y': 'hidden',
									 'background-color': '#FFF',
									
								});
								$("."+uniqClass).find("table").css({"margin-bottom": "0px"});
								$("."+uniqClass).find("table thead").css("visibility", "hidden");
								if($(window).width() > 845){
									if($("."+uniqClass)[0].offsetWidth == $("."+uniqClass)[0].clientWidth){
										if($("."+uniqClass).find("table").height() > $("."+uniqClass).height())
											$("."+uniqClass).siblings(".static-header-container").css({'margin-right': "0px"});
										else
											$("."+uniqClass).siblings(".static-header-container").css({'margin-right': "0px"});

									}
									else{
										if($("."+uniqClass).find("table").height() + 17 < 500)
											$("."+uniqClass).siblings(".static-header-container").css({'margin-right': "17px"});
										else
											$("."+uniqClass).siblings(".static-header-container").css({'margin-right': "0px"});

									}
																	}
//								$compile(angular.element(".static-header-container .static-header thead"))(angular.element("body").scope());
								var ignoreTableBodyScroll = false;
								var ignoreTableHeadScroll = false;
								$(".header-fixed-table").scroll(function(){
										if(!ignoreTableBodyScroll){
											ignoreTableHeadScroll = true;
										$(this).prev().find(".static-header").scrollLeft($(this).scrollLeft());
										
										}
									
										ignoreTableBodyScroll = false;
										
								}); 
								$(".static-header").scroll(function(){
									if(!ignoreTableHeadScroll){
										ignoreTableBodyScroll = true;
									$(this).parent().siblings(".header-fixed-table").scrollLeft($(this).scrollLeft());
									
									}
									ignoreTableHeadScroll = false;
								});
							}
						}, 200);
					};
					if(tableUniqClass && data)
						fixTableHeader(tableUniqClass);
				});
				
			}
			return {
				restrict : "A",
				scope : {
					tableuniqueclass : "=",
					tabledata : "="
				},
				link : link
			};
});
