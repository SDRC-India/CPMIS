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
	//$scope.selectedMapAreaType = "";
	$scope.selectedTimeperiod = $scope.timeformats[0];
	console.log($scope.sectors[0]);
	$scope.selectedSector ="";
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
			mapUrl = "resources/geomaps/Bihar.json";

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
				
				
				
				//console.log($scope.sectors);
					$http.get("get_sectors.php").success(function(data) {
					
										$scope.sectors = data;
										if ($scope.sectors) {
											
											$scope.selectedSector = $scope.sectors[0];
											
											$http.get("get_indicators.php?sector="+ $scope.selectedSector.IC_NId)
													.success(function(data) {
																$scope.indicators = data;
																console.log($scope.indicators[0]);
																if ($scope.indicators) {
																	
																	$scope.selectedIndicator = $scope.indicators[0].Indicator_Name+','
																	$scope.indicators[0].Subgroup_Val+
																	($scope.indicators[0].Unit_Name);
																	
																	$http.get("sources.php?ic_nid="+$scope.selectedSector.IC_NId).success(function(data) {
																		$scope.sources = data;
																		console.log($scope.sources);
																		if($scope.sources && $scope.sources.length>0) {
																			$scope.selectedSource = $scope.sources[3].IC_Name;
																			
																			$http.get("timeperiod.php").success(function(data){
																				$scope.timeformats = data;
																				console.log($scope.timeformats);
																				if($scope.timeformats && $scope.timeformats.length>0){
																					
																					$scope.selectedTimeperiod = $scope.timeformats[0].TimePeriod;
																					var sl = $scope.selectedChildAreaLevel;
																					
																					var smap =  $scope.selectedMapAreaType;
																					
																					var sg = $scope.selectedGranularity;
																					var sd =  $scope.shouldDrilldown;
																					console.log(sl);
																					console.log(smap);
																					console.log(sg);
																					console.log(sd);
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
		var url= "indicators";
		var query = "";
		if ($scope.selectedSector)
			query += "sector=" + $scope.selectedSector.IC_NId + "&";
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
		var url= "sources";
		var query = "";
		if ($scope.selectedIndicator)
			query += "iusnid=" + $scope.selectedIndicator.description+ "&";
		if (query != "")
			url += "?" + query.trim("&");
		$http.get(url).success(function(data) {
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
		var url= "timeperiod";
		var query = "";
		if ($scope.selectedIndicator)
			query += "iusnid=" + $scope.selectedIndicator.description+ "&";
		if ($scope.selectedSource)
			query += "sourceNid=" + $scope.selectedSource.key+ "&";
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
		var url = "get_data.php?IUSNId=1&areaId=2&sourceNid=43&timeperiodId=1";

		/*var query = "";
		if ($scope.selectedIndicator)
			query += "indicatorId=" + $scope.selectedIndicator.description
					+ "&";
		if ($scope.selectedGranularity)
			query += "areaId=" + $scope.selectedGranularity.key + "&";
		if ($scope.selectedSource)
			query += "sourceNid=" + $scope.selectedSource.key+ "&";
		if ($scope.selectedTimeperiod)
			query += "timeperiodId=" + $scope.selectedTimeperiod.key + "&";
		
		if ($scope.selectedChildAreaLevel)
			query += "childLevel=" + $scope.selectedChildAreaLevel + "&";
		if (query != "")
			url += "?" + query.trim("&");*/
		$http.get(url).success(function(data) {
			
			
			//$scope.utdata = data;
			$scope.utdata = {"dataCollection":[{"id":null,"areaCode":"IND010001","areaName":"Pashchim Champaran","value":"3.5","unit":"percentage","rank":"37","cssClass":"firstslices","percentageChange":"23.60","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":3.5,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":27.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":53.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":52.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":53.9,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010002","areaName":"Purba Champaran","value":"13.1","unit":"percentage","rank":"32","cssClass":"firstslices","percentageChange":"24.20","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":13.1,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":37.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":41.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":42.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":44.0,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010003","areaName":"Sheohar","value":"17.2","unit":"percentage","rank":"27","cssClass":"secondslices","percentageChange":"10.20","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":17.2,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":27.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":61.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":68.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":69.1,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010004","areaName":"Sitamarhi","value":"31.0","unit":"percentage","rank":"8","cssClass":"thirdslices","percentageChange":"5.80","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":31.0,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":36.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":64.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":64.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":69.6,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010005","areaName":"Madhubani","value":"17.4","unit":"percentage","rank":"25","cssClass":"secondslices","percentageChange":"25.70","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":17.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":43.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":77.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":82.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":87.8,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010006","areaName":"Supaul","value":"15.0","unit":"percentage","rank":"28","cssClass":"secondslices","percentageChange":"26.50","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":15.0,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":41.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":66.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":70.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":72.6,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010007","areaName":"Araria","value":"22.1","unit":"percentage","rank":"18","cssClass":"secondslices","percentageChange":"11.20","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":22.1,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":33.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":52.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":54.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":59.9,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010008","areaName":"Kishanganj","value":"6.3","unit":"percentage","rank":"36","cssClass":"firstslices","percentageChange":"17.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":6.3,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":23.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":26.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":26.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":32.2,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010009","areaName":"Purnia","value":"27.8","unit":"percentage","rank":"10","cssClass":"thirdslices","percentageChange":"11.60","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":27.8,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":39.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":76.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":79.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":80.9,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010010","areaName":"Katihar","value":"9.7","unit":"percentage","rank":"35","cssClass":"firstslices","percentageChange":"25.10","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":9.7,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":34.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":61.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":62.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":69.3,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010011","areaName":"Madhepura","value":"22.4","unit":"percentage","rank":"17","cssClass":"secondslices","percentageChange":"22.80","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":22.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":45.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":72.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":73.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":80.2,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010012","areaName":"Saharsa","value":"24.7","unit":"percentage","rank":"14","cssClass":"thirdslices","percentageChange":"18.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":24.7,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":43.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":66.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":68.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":74.8,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010013","areaName":"Darbhanga","value":"23.4","unit":"percentage","rank":"16","cssClass":"secondslices","percentageChange":"22.40","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":23.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":45.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":64.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":60.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":68.9,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010014","areaName":"Muzaffarpur","value":"36.1","unit":"percentage","rank":"5","cssClass":"fourthslices","percentageChange":"18.80","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":36.1,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":54.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":53.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":58.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":64.2,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010015","areaName":"Gopalganj","value":"40.5","unit":"percentage","rank":"2","cssClass":"fourthslices","percentageChange":"16.90","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":40.5,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":57.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":74.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":69.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":74.8,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010016","areaName":"Siwan","value":"38.5","unit":"percentage","rank":"4","cssClass":"fourthslices","percentageChange":"13.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":38.5,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":51.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":69.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":73.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":76.6,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010017","areaName":"Saran","value":"35.9","unit":"percentage","rank":"6","cssClass":"fourthslices","percentageChange":"31.10","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":35.9,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":67.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":77.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":76.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":79.7,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010018","areaName":"Vaishali","value":"24.6","unit":"percentage","rank":"15","cssClass":"thirdslices","percentageChange":"34.70","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":24.6,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":59.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":73.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":70.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":76.5,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010019","areaName":"Samastipur","value":"14.3","unit":"percentage","rank":"30","cssClass":"secondslices","percentageChange":"33.50","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":14.3,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":47.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":83.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":75.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":84.3,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010020","areaName":"Begusarai","value":"17.3","unit":"percentage","rank":"26","cssClass":"secondslices","percentageChange":"23.70","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":17.3,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":41.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":62.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":62.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":65.2,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010021","areaName":"Khagaria","value":"19.7","unit":"percentage","rank":"19","cssClass":"secondslices","percentageChange":"32.60","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":19.7,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":52.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":81.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":79.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":84.8,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010022","areaName":"Bhagalpur","value":"43.4","unit":"percentage","rank":"1","cssClass":"fourthslices","percentageChange":"6.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":43.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":49.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":66.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":65.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":68.0,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010023","areaName":"Banka","value":"25.3","unit":"percentage","rank":"13","cssClass":"thirdslices","percentageChange":"12.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":25.3,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":37.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":67.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":71.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":65.7,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010024","areaName":"Munger","value":"26.9","unit":"percentage","rank":"11","cssClass":"thirdslices","percentageChange":"16.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":26.9,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":43.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":72.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":75.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":74.4,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010025","areaName":"Lakhisarai","value":"18.4","unit":"percentage","rank":"22","cssClass":"secondslices","percentageChange":"18.20","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":18.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":36.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":59.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":62.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":67.3,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010026","areaName":"Sheikhpura","value":"17.8","unit":"percentage","rank":"24","cssClass":"secondslices","percentageChange":"26.60","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":17.8,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":44.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":71.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":74.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":78.2,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010027","areaName":"Nalanda","value":"18.4","unit":"percentage","rank":"22","cssClass":"secondslices","percentageChange":"36.80","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":18.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":55.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":61.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":67.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":74.8,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010028","areaName":"Patna","value":"39.2","unit":"percentage","rank":"3","cssClass":"fourthslices","percentageChange":"-0.10","isPositiveTrend":false,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":39.2,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":39.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":66.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":71.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":76.0,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010029","areaName":"Bhojpur","value":"32.2","unit":"percentage","rank":"7","cssClass":"thirdslices","percentageChange":"1.10","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":32.2,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":33.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":64.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":67.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":67.9,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010030","areaName":"Buxar","value":"19.5","unit":"percentage","rank":"21","cssClass":"secondslices","percentageChange":"13.80","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":19.5,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":33.3,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":61.4,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":64.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":67.8,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010031","areaName":"Kaimur (Bhabua)","value":"11.0","unit":"percentage","rank":"34","cssClass":"firstslices","percentageChange":"13.90","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":11.0,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":24.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":66.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":71.0,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":69.1,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010032","areaName":"Rohtas","value":"26.6","unit":"percentage","rank":"12","cssClass":"thirdslices","percentageChange":"14.90","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":26.6,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":41.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":66.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":66.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":70.4,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010033","areaName":"Aurangabad","value":"28.8","unit":"percentage","rank":"9","cssClass":"thirdslices","percentageChange":"31.90","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":28.8,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":60.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":69.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":74.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":78.6,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010034","areaName":"Gaya","value":"12.4","unit":"percentage","rank":"33","cssClass":"firstslices","percentageChange":"23.30","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":12.4,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":35.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":61.2,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":61.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":69.3,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010035","areaName":"Nawada","value":"19.6","unit":"percentage","rank":"20","cssClass":"secondslices","percentageChange":"26.90","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":19.6,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":46.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":60.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":63.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":73.1,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010036","areaName":"Jamui","value":"14.7","unit":"percentage","rank":"29","cssClass":"secondslices","percentageChange":"4.40","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":14.7,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":19.1,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":36.6,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":38.8,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":50.0,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false},{"id":null,"areaCode":"IND010037","areaName":"Jehanabad","value":"14.2","unit":"percentage","rank":"31","cssClass":"secondslices","percentageChange":"30.50","isPositiveTrend":true,"dataSeries":null,"lineSeries":[{"source":"DLHS","date":"2002-2004","value":14.2,"rank":null,"percentageChange":null},{"source":"DLHS","date":"2007-2008","value":44.7,"rank":null,"percentageChange":null},{"source":"AHS","date":"2010-2011","value":70.5,"rank":null,"percentageChange":null},{"source":"AHS","date":"2011-2012","value":74.9,"rank":null,"percentageChange":null},{"source":"AHS","date":"2012-2013","value":79.1,"rank":null,"percentageChange":null}],"columnSeries":[],"columnVisible":false}],"legends":[{"key":"3.5 - 13.47","value":"firstslices","description":null},{"key":"13.48 - 23.45","value":"secondslices","description":null},{"key":"23.46 - 33.42","value":"thirdslices","description":null},{"key":"33.43 - 43.4","value":"fourthslices","description":null},{"key":"Not Available","value":"fifthslices","description":null}],"topPerformers":["Bhagalpur - 43.4","Gopalganj - 40.5","Patna - 39.2"],"bottomPerformers":["Katihar - 9.7","Kishanganj - 6.3","Pashchim Champaran - 3.5"]};
			$scope.legends = data.legends ? data.legends : [];
			
			if ($scope.legends && $scope.legends.length > 0) {
				for (var i = 0; i < data.legends.length; i++) {
					$scope.legends[i].key = data.legends[i].key == 'Not Available' ? data.legends[i].key
							: parseFloat(data.legends[i].key
									.split(' - ')[0])
									+ ' - '
									+ parseFloat(data.legends[i].key
											.split(' - ')[1]);
				}
			}
			$scope.topPerformers = data.topPerformers;
			if($scope.topPerformers ){
				for (var i = 0; i < data.topPerformers.length; i++) {
					$scope.topPerformers[i] = data.topPerformers[i].split(' - ')[0] + ' - ' + parseFloat(data.topPerformers[i].split(' - ')[1]);
				}
			}
			$scope.bottomPerformers = data.bottomPerformers;
			if($scope.bottomPerformers){
				for (var i = 0; i < data.bottomPerformers.length; i++) {
					$scope.bottomPerformers[i] = data.bottomPerformers[i].split(' - ')[0] + ' - ' + parseFloat(data.bottomPerformers[i].split(' - ')[1]);
				}
			}
			
			document.getElementById("legendsection").style.display = $scope.legends.length > 0 ? 'block' : 'none'; 
			document.getElementById("tbsection").style.display = $scope.legends.length > 0 ? 'block' : 'none'; 
			
			cfpLoadingBar.complete();
		});
	};
	
	$scope.lineChartValue = function() {
		$http.get(

				'lineData?iusNid=' + $scope.selectedIndicator.description
						+ '&areaNid=' + $scope.selectedArea.properties.utdata.areaNid)

				.success(function(data) {
					if(data.length <=100){
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
					}
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
