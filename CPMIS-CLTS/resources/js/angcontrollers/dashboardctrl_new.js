function ValueObject(key, value) {
	this.key = key;
	this.value = value;
}
function DashboardController($scope, $http, $window, $timeout, cfpLoadingBar) {

	var w = angular.element($window);
	$scope.getWindowDimensions = function() {
		return {
			"h" : w.height(),
			"w" : (w.width() * 90 / 100)
		};
	};
	// this is to make sure that scope gets changes as window get resized.
	w.on("resize", function() {
		$scope.$apply();
	});
	// Scope properties
	// $scope.indicators = [ new ValueObject("1", "Select Indicator") ];---
	$scope.indicators = [];
	$scope.timeformats = [];
	$scope.sectors = [];// [ new ValueObject("1", "Basic Info") ];
	$scope.utdata = [];
	$scope.legends = [];
	$scope.topPerformers = [];
	$scope.bottomPerformers = [];
	$scope.sources = [];
	$scope.ldata = [];
	$scope.PCldata = "";
	$scope.cldata = [];

	// select the first user of the list
	$scope.selectedMapAreaType = "District";
	$scope.selectedTimeperiod = $scope.timeformats[0];
	$scope.selectedSector = $scope.sectors[0];
	$scope.selectedIndicator = $scope.indicators[0];
	$scope.selectedSource = $scope.sources[0];
	$scope.selectedGranularity = new ValueObject("IND0010", "Bihar");
	$scope.selectedChildAreaLevel = 2;
	$scope.isTrendVisible = true;
	$scope.selectedArea = [];
	$scope.show = false;
	$scope.shouldDrilldown = true;
	$scope.disablePdf = false;
	$scope.shoulddisappear=true;
	$scope.isColumnVisible = false;
	$scope.isLineVisible = false;
	$scope.primary_url = "";
	$scope.query = "";
	// Scope methods
	// expose a callable method for sectors
	$scope.selectSector = function(sector) {
		cfpLoadingBar.start();
		$scope.selectedSector = sector;
		$scope.getindicators();
	};
	// expose a callable method to the view
	$scope.selectIndicator = function(indicator) {
		cfpLoadingBar.start();
		$scope.selectedIndicator = indicator;
		$scope.getsources();
	};
	// expose a callable method to the source
	$scope.selectSource = function(source) {
		cfpLoadingBar.start();
		$scope.selectedSource = source;
		$scope.gettimeperiods();
	};
	// expose a callable method for time period
	$scope.selectTimeperiod = function(timeformat) {
		cfpLoadingBar.start();
		$scope.selectedTimeperiod = timeformat;
		$scope.getutdata();
	};
	
	$scope.clearList = function(){
		$("#searchText")[0].value = "";
		$scope.query = "";
		
//		$scope.$apply();
	};
	
	// expose a callable method Map areaType
	$scope.selectMapAreaType = function(mapAreaType, sg, sl, sd) {
		$scope.closeViz();
		$scope.selectedMapAreaType = mapAreaType;
		var mapUrl = "";
		switch (mapAreaType) {
		case "District":
			mapUrl = "resources/geomaps/India.json";

			$scope.selectedChildAreaLevel = 2;
			$scope.shouldDrilldown = true;
			$scope.selectedGranularity = new ValueObject("IND0010", "Bihar");
			break;
		default:
			mapUrl = "resources/geomaps/Bihar.json";
			break;
		}
		$(".backbtn").toggleClass("hidden", true);

		$scope.primary_url = mapUrl;

		if (sg && sl) {

			$scope.selectedChildAreaLevel = sl;
			$scope.shouldDrilldown = sd;
			$scope.selectedGranularity = sg;
			$scope.primary_url = "resources/geomaps/"
					+ $scope.selectedGranularity.value + ".json";
		}
		$scope.mapSetup($scope.primary_url, function() {
			cfpLoadingBar.start();
			$scope.getutdata();
		});
	};
	$scope.showViz = function(areacode) {
		if (areacode && $scope.selectedArea != areacode) {
			
			$scope.isTrendVisible = true;
			document.getElementsByClassName("trend-viz animate-show")[0].style.display = "block";
			// TODO: this is fishy i am changing
			// visualization in angular context. i should
			// not be doing $scope.$apply().
			$scope.selectedArea = areacode;
			$scope.cldata = [];
			$scope.ldata = [];
			$scope.PCldata ="";
			if($scope.selectedArea.properties.utdata != null){
			if( $scope.timeformats.length >1){
				$scope.lineChartValue($scope.selectedArea.properties.utdata.areaNid);
				$scope.isColumnVisible = false;
			}
			else{
				
				$scope.columnChartdataValue($scope.selectedArea.properties.utdata.areaNid);
				$scope.isColumnVisible = true;
			}
			}
			else{
				$scope.closeViz();
			}
			
		} else {

			$scope.isTrendVisible = false;
			$scope.selectedArea = [];
		}
		$scope.$apply();
	};
	$scope.closeViz = function() {
		$scope.isTrendVisible = false;
		$scope.cldata = [];
		$scope.ldata = [];
		$scope.PCldata ="";
	};

	$scope.start = function() {
		cfpLoadingBar.start();
		$(".right-arrow").click(function() {
			if (processStatus.requestRunning) {
				return;
			}
			processStatus.startProcess();
			if ($(".active-sector").length == 0) {
				$(".sectorlist").first().addClass("active-sector");
			}
			var activeElement = $(".active-sector");
			$visiblesec_width = $(".sector_wrap").outerWidth(true);

			$prevWidth = 0;
			activeElement.prevAll().each(function() {
				$prevWidth += parseInt($(this).outerWidth(true), 10);
			});

			$ulwidth = 0;
			$(".sectorlist").each(function(index) {
				$ulwidth += parseInt($(this).outerWidth(true), 10);
			});

			// get length of all lists present before active lists
			if ($visiblesec_width + $prevWidth < $ulwidth) {
				$(".sectorlists").animate({
					"left" : "-=" + activeElement.outerWidth(true)
				}, 300, function() {
					activeElement.removeClass("active-sector");
					activeElement.next().addClass("active-sector");
					processStatus.endProcess();
				});
			} else {
//				$(".right-arrow").addClass("disable");
				processStatus.endProcess();
			}
		});
		$(".left-arrow").click(function() {

			if (processStatus.requestRunning) {
				return;
			}
			processStatus.startProcess();

			var activeElement = $(".active-sector");
			if (activeElement.prev()) {
				$prevWidth = 0;
				activeElement.prevAll().each(function() {
					$prevWidth += parseInt($(this).outerWidth(true), 10);
				});

				if ($prevWidth > 0) {
					$(".sectorlists").animate({
						"left" : "+=" + activeElement.prev().outerWidth(true)
					}, 300, function() {
						activeElement.removeClass("active-sector");
						activeElement.prev().addClass("active-sector");
						processStatus.endProcess();
					});
				} else {
//					$(".left-arrow").addClass("disable");
					processStatus.endProcess();
				}
			} else {
//				$(".left-arrow").addClass("disable");
				processStatus.endProcess();
			}

		});

					$http.get("get_sectors.php").success(function(data) {
										console.log(data);
										$scope.sectors = data;
										if ($scope.sectors) {
											$scope.selectedSector = $scope.sectors[0];
											//console.log("get_indicators.php?sector="+$scope.selectedSector.key_val);
											$http.get("get_indicators.php?sector="+$scope.selectedSector.key_val)
													.success(function(data) {
														      
																$scope.indicators = data;
																if ($scope.indicators) {
																	
																	$scope.selectedIndicator = $scope.indicators[0];
																	
																	$http.get("sources.php?iusnid="+ $scope.selectedIndicator.IUSNId).success(function(data) {
																		console.log(data);
																		$scope.sources = data;
																		if($scope.sources && $scope.sources.length>0) {
																			$scope.selectedSource = $scope.sources[0];
																			$http.get("timeperiod.php?iusnid="+ $scope.selectedIndicator.IUSNId + "&sourceNid="+ $scope.selectedSource.key_val).success(function(data){
																				$scope.timeformats = data;
																				if($scope.timeformats && $scope.timeformats.length>0){
																					
																					$scope.selectedTimeperiod =$scope.timeformats[0];
																					var sl = $scope.selectedChildAreaLevel;
																					
																					var smap =  $scope.selectedMapAreaType;
																					
																					var sg =$scope.selectedGranularity;
																					var sd = $scope.shouldDrilldown;
																					
																					$scope.selectMapAreaType(smap,sg,sl,sd);
																				}else{
																					var sl = $scope.selectedChildAreaLevel;
																					
																					var smap = $scope.selectedMapAreaType;
																					
																					var sg = $scope.selectedGranularity;
																					var sd = $scope.shouldDrilldown;
																					
																					$scope.selectMapAreaType(smap,sg,sl,sd);
																				}
																				
																			});
																			
																		}
																	});
																	
																}
															});
										}
									});

//				});

	};

	$scope.getindicators = function() {
		var url= "get_indicators.php";
		var query = "";
		if ($scope.selectedSector)
			query += "sector=" + $scope.selectedSector.key_val + "&";
		if (query != "")
			url += "?" + query.trim("&");
		$http.get(url).success(function(data) {
					$scope.indicators = data;
					if ($scope.indicators) {
						$scope.selectedIndicator = $scope.indicators[0];
						$scope.getsources();
					}else{
						$scope.getsources();
					}
					if($scope.selectedArea.length != 0){
					if($scope.selectedArea.properties.utdata != null ){
					if( $scope.timeformats.length >1 ){
						$scope.lineChartValue();
						$scope.isColumnVisible = false;
					

					}
					else{
						$scope.columnChartdataValue();
						$scope.isColumnVisible = true;
						
					}
					}
					}
				});
	};
	
	$scope.getsources = function() {
		var url= "sources.php";
		var query = "";
		if ($scope.selectedIndicator)
			query += "iusnid=" + $scope.selectedIndicator.IUSNId+ "&";
		if (query != "")
			url += "?" + query.trim("&");
		$http.get(url).success(function(data) {
			console.log($scope.selectedSource);
					$scope.sources = data;
					if ($scope.sources) {
						$scope.selectedSource = $scope.sources[0];
						$scope.gettimeperiods();
					}else{
						$scope.gettimeperiods();
					}
					if($scope.selectedArea.length != 0){
					if($scope.selectedArea.properties.utdata != null){
					if( $scope.timeformats.length >1){
						$scope.lineChartValue();
						$scope.isColumnVisible = false;
					

					}
					else{
						$scope.columnChartdataValue();
						$scope.isColumnVisible = true;
					}
					}
					}
				});

	};
	
	$scope.gettimeperiods = function() {
		var url= "timeperiod.php";
		var query = "";
		if ($scope.selectedIndicator)
			query += "iusnid=" + $scope.selectedIndicator.IUSNId+ "&";
		if ($scope.selectedSource)
			query += "sourceNid=" + $scope.selectedSource.key_val+ "&";
		if (query != "")
			url += "?" + query.trim("&");
		$http.get(url).success(function(data) {

					$scope.timeformats = data;
					if ($scope.timeformats) {
						$scope.selectedTimeperiod = $scope.timeformats[0];
						$scope.getutdata();
					}else{
						$scope.getutdata();
					}
					if($scope.selectedArea.length != 0){
					if($scope.selectedArea.properties.utdata != null){
					if( $scope.timeformats.length >1){
						$scope.lineChartValue();
						$scope.isColumnVisible = false;
					

					}
					else{
						$scope.columnChartdataValue();
						$scope.isColumnVisible = true;
					}
					}
					}
				});

	};

	$scope.getutdata = function() {
		// resetting all the data
		cfpLoadingBar.start();
		$scope.utdata = [];
		$scope.legends = [];
		$scope.topPerformers = [];
		$scope.bottomPerformers = [];
		var url = "get_data.php";
  
		var query = "";
		if ($scope.selectedIndicator)
			query += "IUSNId=" + $scope.selectedIndicator.IUSNId
					+ "&";
		if ($scope.selectedGranularity)
			query += "areaId=" + $scope.selectedGranularity.key + "&";
		if ($scope.selectedSource)
			query += "sourceNid=" + $scope.selectedSource.key_val+ "&";
		if ($scope.selectedTimeperiod)
			query += "timeperiodId=" + $scope.selectedTimeperiod.key_val + "&";
		
		if ($scope.selectedChildAreaLevel)
			query += "childLevel=" + $scope.selectedChildAreaLevel + "&";
		if (query != "")
			url += "?" + query.trim("&");
		 console.log(url);
		$http.get(url).success(function(data) {
			console.log(data);
			$scope.utdata = data[0];
		    $scope.legends = data[1].legends ? data[1].legends : [];
			
			if ($scope.legends && $scope.legends.length > 0) {
				for (var i = 0; i < data[1].legends.length; i++) {
					console.log( data[1].legends[i]);
					$scope.legends[i].key_val = data[1].legends[i].key_val == 'Not Available' ? data[1].legends[i].key_val
							: parseFloat(data[1].legends[i].key_val
									.split(' - ')[0])
									+ ' - '
									+ parseFloat(data[1].legends[i].key_val
											.split(' - ')[1]);
				}
			}
			else{
				$scope.legends=[{"key_val":"Not Available","value":"fifthslices"}];
			}
			
			if( data[2].topPerformers.length>1)
			{
				$scope.topPerformers = data[2].topPerformers;
				if($scope.topPerformers ){
					for (var i = 0; i < data[2].topPerformers.length; i++) {
						$scope.topPerformers[i] = data[2].topPerformers[i].split(' - ')[0] + ' - ' + parseFloat(data[2].topPerformers[i].split(' - ')[1]);
					}
				}
			}
			else{
				$scope.topPerformers={};
				
			}
			if( data[2].bottomPerformers.length>1)
			{
			$scope.bottomPerformers = data[2].bottomPerformers;
			if($scope.bottomPerformers){
				for (var i = 0; i < data[2].bottomPerformers.length; i++) {
					$scope.bottomPerformers[i] = data[2].bottomPerformers[i].split(' - ')[0] + ' - ' + parseFloat(data[2].bottomPerformers[i].split(' - ')[1]);
				}
			}
			}
			else{
				$scope.bottomPerformers={};
			}
			
			
			//console.log($scope.legends.length);
			document.getElementById("legendsection").style.display = $scope.legends.length > 0 ? 'block' : 'none'; 
			document.getElementById("tbsection").style.display = $scope.legends.length > 0 ? 'block' : 'none'; 
			
			cfpLoadingBar.complete();
		});
	};
	
	$scope.lineChartValue = function() {
		console.log('lineData.php?IUSNId=' + $scope.selectedIndicator.IUSNId
						+ '&areaId=' + $scope.selected_areacode +'&sourceNid='+ $scope.selectedSource.key_val+
						'&timeperiodId='+ $scope.selectedTimeperiod.key_val);
		$http.get(

				'lineData.php?IUSNId=' + $scope.selectedIndicator.IUSNId
						+ '&areaId=' + $scope.selected_areacode +'&sourceNid='+ $scope.selectedSource.key_val+
						'&timeperiodId='+ $scope.selectedTimeperiod.key_val)

				.success(function(data) {
					console.log(data);
				  //if(data.length <=100){
//					 $scope.isnodata = false;
					$scope.cldata = [];
					$scope.ldata = data;
					$scope.PCldata = data[0][0];
					if($scope.PCldata.percentageChange == 0.00){
						$scope.PCldata ="";
					}
					$scope.isColumnVisible = false;
//					$scope.lineChartValue();
					if(data.length == 0){
						$scope.closeViz();
					}
					//}
					// console.log(data);
				});
	};

	$scope.columnChartdataValue = function() {
		$http.get(

				'ColData?iusNid=' + $scope.selectedIndicator.description
						+ '&areaNid=' + $scope.selectedArea.properties.utdata.areaNid)

				.success(function(data) {
//					 $scope.isnodata = false;
					$scope.ldata = [];
					$scope.cldata = data;
					$scope.PCldata ="";
					$scope.isColumnVisible = true;
//					$scope.columnChartdataValue();
					if(data.length == 0){
						$scope.closeViz();
					}
					// console.log(data);
				});
	};

	$scope.complete = function() {
		cfpLoadingBar.complete();
	};

	// fake the initial load so first time users can see the bar right away:
	$scope.start();
//	$scope.fakeIntro = true;
//	$timeout(function() {
//		$scope.complete();
//		$scope.fakeIntro = false;
//	}, 30000);
	$scope.style = function() {

	};
}
