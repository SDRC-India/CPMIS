
/*
 * @author Swarna(swarnaprava@sdrc.co.in) 
 * 
 */

var cpmisApp = angular.module('cpmisApp', ['angular-md5']);
cpmisApp.controller('statusReport_Controller', function($scope, $http, $timeout, $window, md5, $filter, commonService) {
	
	setTimeout(function() {
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
	
	$scope.statusReportDefault = [];
	$scope.showReportTable = true;
	$scope.timeDefault = [];
	$http.get("getCurrentMonthStatus").then(function(result) {
			
			$scope.timeperiods= result.data.timeperiodJson;
			
			$scope.statusReports = result.data.dataJson;
			for (var i = 0; i < $scope.statusReports.length; i++) {
			if ($scope.statusReports[i].submissionStatus == true) {
				$scope.status = "Y";
			} else if ($scope.statusReports[i].submissionStatus == false) {
				$scope.status1 = "N";
			}
		}
			$scope.timeDefault.push($scope.timeperiods[0]);
			$scope.timePeriodsDetails = $scope.timeDefault[0].timeperiodName;
			
			
			$(".loader").fadeOut();}, 9000);
		}, function(error) {
			console.log(error);
		});

		
		$scope.selectPeriodicity = function(time){
			$scope.timePeriodsDetails = time.timeperiodName;
			$scope.timePeriodsIDDetails = time.timeperiodId;
		};
		
	
	$scope.showReportWithTimeperiod =  function()
	{
		setTimeout(function() {
			$(".loader").show();
		$http.get("submissionReportTimeperiod?timeperiodId=" + $scope.timePeriodsIDDetails).then(function successCallback(response){
			$(".loader").show();
			if (response.status == 200) {
				$scope.statusReports = response.data;
				$(".loader").fadeOut();
			}}, 3000);
		
		}, function(error) {
			console.log(error);
		});
	}
	
	$scope.searchBox = function(){
	var height = $(".status-report-details").height();
	if(height < 405 )
		{
		$('.static-header-container').css('margin-right',"0");
		}
	else {
		$('.static-header-container').css('margin-right',"17");
	}
	};
	
	var timeformat=function(date) 
	{
		  var h = date.getHours();
		  var m = date.getMinutes();
		  var x = h >= 12 ? 'pm' : 'am';
		  h = h % 12;
		  h = h ? h : 12;
		  m = m < 10 ? '0'+m: m;
		  var mytime= h + ':' + m + ' ' + x;
		  return mytime;
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
        	var prevDate=new Date();
        	prevDate = new Date(prevDate.setMonth(prevDate.getMonth() - 1));
        	link.download = "Status_Report_"+ (d.getDate())+ "/" + (d.getMonth() + 1)+ "/" + (d.getFullYear()) +".xls";
        	var monthNames = ["Jan", "Feb", "Mar", "Apr", 
        	                    "May", "Jun", "Jul", "Aug", 
        	                    "Sep", "Oct", "Nov", "Dec"
        	                   ];
 
        if($scope.timePeriodsDetails=="Current Month")
   		 {
   		   var tab_text= "<table border='2px'><caption>&nbsp;<b>The status of submissions made until "+d.getDate()+" "+monthNames[d.getMonth()]+" "+d.getFullYear()+"  "+timeformat(d)+" for the month of "+monthNames[prevDate.getMonth()]+" "+prevDate.getFullYear()+"</b></caption><tr bgcolor='#87AFC6'>";
   		 }
   		else
   		 {
   		   var tab_text= "<table border='2px'><caption>&nbsp;<b>The status of submissions made on "+$scope.timePeriodsDetails+"</b></caption><tr bgcolor='#87AFC6'>";
   	 	 }
        	
        var textRange; var j=0;
        tab = document.getElementById(id); // id of table

        for(j = 0 ; j < tab.rows.length ; j++) 
        {     
        	   
        	if(j==0)
			tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        	else
            tab_text=tab_text+"<tr style='text-align:left'>"+tab.rows[j].innerHTML+"</tr>";
        }

        tab_text=tab_text+"</table>";
        tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
        tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params


        var ctx = {
            worksheet : 'Worksheet',
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
	
	
$http.get("resources/js/dummyJson/misTableReportData.json").then(function(result) {
		
		$scope.tableDetails = result.data.tableDetails;

	}, function(error) {
		console.log(error);
	});
	
	
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
											$("."+uniqClass).siblings(".static-header-container").css({'margin-right': "0px"});
										else
											$("."+uniqClass).siblings(".static-header-container").css({'margin-right': "17px"});

									}
																	}
								var height = $(".status-report-details").height();
//								if(height < 405 )
//								if(){
									
//								}
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
