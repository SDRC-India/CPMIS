var sdrc_export = new function() {

	"use strict"
	this.root = "http://CPMIS_thimaticmap";
	this.init = function(rootUri) {
		this.root = rootUri;
		//console.log("in init");
	};

	// Please give container Id and export pdf btn ids
	this.export_pdf = function(containerId, exportPdfbtn) {
		$("#" + exportPdfbtn)
				.on("click",function(event) {
							event.preventDefault();
							
							$('#pdfDownloadBtn').html('<i class="fa fa-lg fa-download"></i> Download PDF <img src="resources/images/preloader.gif" />');
							
							var areaName = $("#area").val();
							console.log(areaName);
							if(areaName == 'India'){
								var imgJSON=[];
								d3.select("#mapsvg")
								.selectAll("path")
								.attr("style",function(d) {
									var node={};
									node['d'] = $(this).attr('d');
									node['fill'] = $(this).css('fill');
									node['stroke'] = $(this).css('stroke');
									imgJSON.push(node);
								});
								
								$.ajax({
									url:"exportImage1",
									method:'POST',
									data:JSON.stringify(imgJSON),
									contentType : 'application/json',
									success:function(result){
								    console.log(result);
								    $("#imgPath").val(result);
								    var topBottomContainer = $("#tbsection");
									var legendContainer = $("#legendsection");
									html2canvas(topBottomContainer,
											{
												allowTaint : true,
												taintTest : false,
												logging : true,
												onrendered : function(canvas) {
													var serverUrl = sdrc_export.root+ "/exportToPdf";
													
													$("#imageTopBottomBase64").val(canvas.toDataURL("image/png"));
													
													html2canvas(
															legendContainer,
															{
																useCORS : true,
																allowTaint : false,
																taintTest : false,
																logging : true,
																onrendered : function(canvas) {
																	var serverUrl = sdrc_export.root+ "/exportToPdf";

																	$("#imageLegendBase64").val(canvas.toDataURL("image/png"));
																	
//																	$("#exportForm").attr("action",serverUrl).submit();
																	$.ajax({
																		url:"exportToPdf",
																		method:'POST',
																		data:{
																			"imageTopBottomBase64":$("#imageTopBottomBase64").val(),
																				"imageLegendBase64":$("#imageLegendBase64").val() ,
																				 "imgPath" : $("#imgPath").val() , 
																		  
																		 "areaId"  : $("#areaId").val() , 
																		 "indicatorId": $("#indicatorId").val() , 
																		 "timePeriodId" : $("#timePeriodId").val() , 
																		 "sourceId" : $("#sourceId").val() ,  
																		 "childLevel" : $("#childLevel").val() , 
																		 "area" :  $("#area").val() , 
																		 "indicator" : $("#indicator").val() , 
																		 "timePeriod" : $("#timePeriod").val() , 
																		 "source" : $("#source").val() , 
																		 "sectorId"  : $("#sectorId").val() , 
																		 "secondTimeperiodId"  : '' , 
																		 "secondTimeperiod" : '',
																		 "sectorName"  : $("#sectorName").val() , 
																		 "subSectorName" :'' , 
																		 "subSectorKey" :  '' , 
																		 "granularitySpiderKey" :  '' , 
																		 "granularitySpiderValue" : ''
																		 },
																		 success:function(result){
																			 console.log(result);
																			var data = {"fileName" :result};
																			
//																			$.ajax({
//																				url:"downloadPDF",
//																				method:'post',
//																				data:{"fileName" : data} ,
//																				success:function(result){
//																					var serverData = result;
//																				}
//																			});
																			$.download("downloadPDF",data,'POST');
																			$('#pdfDownloadBtn').html('<i class="fa fa-lg fa-download"></i> Download PDF ');
																	  	}// end
																			// of
																			// success
																	});
																	
																}
															});
													
												}
											});
								  	}//end of success
								});
							}
							else if(areaName == 'Bihar')
							{
							d3.selectAll("svg").attr("version", 1.1)
							.attr("xmlns", "http://www.w3.org/2000/svg")
							.node().parentNode.innerHTML;

							d3.select("#mapsvg").selectAll("path").attr("style",function(d) {
								return  "fill:"+ $(this).css('fill')+";stroke:"+$(this).css('stroke');
							});
							//d3.select("#mapsvg").selectAll("path").attr('style', null);
							
							var samikshaMapg = $("samiksha-map").html();
							var imgsrc = 'data:image/svg+xml;base64,'+ btoa(samikshaMapg);
						    
							    var topBottomContainer = $("#tbsection");
								var legendContainer = $("#legendsection");
								html2canvas(topBottomContainer,
										{
											allowTaint : true,
											taintTest : false,
											logging : true,
											onrendered : function(canvas) {
												var serverUrl = sdrc_export.root+ "/exportToPdf";
												
												$("#imageTopBottomBase64").val(canvas.toDataURL("image/png"));
												
												html2canvas(
														legendContainer,
														{
															useCORS : true,
															allowTaint : false,
															taintTest : false,
															logging : true,
															onrendered : function(canvas) {
																var serverUrl = sdrc_export.root+"/api/exportToPdf.php";
			
																$("#imageLegendBase64").val(canvas.toDataURL("image/png"));
																
//																$("#exportForm").attr("action",serverUrl).submit();
																
																$.ajax({
																	url:serverUrl,
																	method:'POST',
																	data:{
																		"imageTopBottomBase64":$("#imageTopBottomBase64").val(),
																			"imageLegendBase64":$("#imageLegendBase64").val() ,
																			 "imgMap" : imgsrc , 
																	  
																	 "areaId"  : $("#areaId").val() , 
																	 "indicatorId": $("#indicatorId").val() , 
																	 "timePeriodId" : $("#timePeriodId").val() , 
																	 "sourceId" : $("#sourceId").val() ,  
																	 "childLevel" : $("#childLevel").val() , 
																	 "area" :  $("#area").val() , 
																	 "indicator" : $("#indicator").val() , 
																	 "timePeriod" : $("#timePeriod").val() , 
																	 "source" : $("#source").val() , 
																	 "sectorId"  : $("#sectorId").val() , 
																	 "secondTimeperiodId"  : '' , 
																	 "secondTimeperiod" : '',
																	 "sectorName"  : $("#sectorName").val() , 
																	 
																	 },
																	 success:function(result){
																		  console.log(result);
																		var data = {"fileName" :result};
																		//$.download("downloadPDF",data,'POST');
																		$('#pdfDownloadBtn').html('<i class="fa fa-lg fa-download"></i> Download PDF ');
																		$.download("api/downloadPDF.php",data,'POST');
																		//window.location='fragments/download/test.pdf';
																		//$("#down_load").html('asada');
																		//console.log("sdfsdf");
																		//$("#down_load").find("a").trigger("click");
																		//$("#down_load").html("");
																	 }
																});
															}
														});
												
											}
//										});
//							  	}//end of success
							});
								}
							
						
				});
	};
	
$.download = function(url, data, method) {
		// url and data options required
		if (url && data) {
			// data can be string of parameters or array/object
			data = typeof data == 'string' ? data : jQuery.param(data);
			// split params into form inputs
			
			var inputs = '';
			jQuery.each(data.split('&'), function() {
				var pair = this.split('=');
				inputs += '<input type="hidden" name="' + pair[0] + '" value="'	+ pair[1] + '" />';
			});
			// send request
			jQuery(
					'<form action="' + url + '" method="' + (method || 'post')
							+ '">' + inputs + '</form>').appendTo('body')
					.submit().remove();
			$(".loader").css("display", "none");
		};
};
	this.export_excel = function() {
		alert("excel exported");
	};

};
