<!--
 @author Swarna (swarnaprava@sdrc.co.in)
 -->

<!DOCTYPE html>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ page import="java.io.*,java.util.*"%>
<%@ page import="javax.servlet.*,java.text.*"%>
<%@ page import="java.time.YearMonth"%>
<%@ page import="java.time.format.DateTimeFormatter"%>

<html lang="en">
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon"> 
<title>Server Error</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
     href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="resources/css/customLoader.css">
<link rel="stylesheet" href="resources/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans"
     rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">  

<style type="text/css">
.table>tbody>tr>td {
    vertical-align: middle !important;
}
.table>thead>tr>th{
	vertical-align: middle !important;
}
.autoSaveModal{
   z-index: 9998; 
}
.footerArea{
position: fixed !important;
}
</style>
     
</head>
<body ng-app="cpmisApp" ng-controller="ServerError_Controller" id="ServerError_Controller" class="ng-cloak"
     data-spy="scroll" data-target="#myScrollspy" data-offset="20">
     <!-- spinner -->
     <div id="spinner" class="loader" style="display: none;"></div>
     <div id="loader-mask" class="loader" style="display: none;"></div>
     <!-- /spinner -->
     <jsp:include page="fragments/header.jsp" />
     <!--      <div class="container"> -->
     <div id="wrapper" ng-click="doLogin()">
		<div class="content">
			<div class="container-fluid text-center" style="margin: 133px auto;text-align: center;">
	    		<spring:url value="resources/image/exception.png" var="petsImage"/>
	    		<img src="${petsImage}"/>
				<h1>500</h1>
	    		<h2>Internal Server Error !</h2>
	    		<p>${exception.message}</p>
	    		<p><a href="javascript:history.go(-1)">&laquo; Go Back</a></p>
			</div>
	
		</div>
	</div>
          
     
     <script src="resources/js/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="resources/js/bootstrap.min.js"></script>
     <script src="resources/js/angular.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="resources/js/controllers/ServerErrorController.js"></script>
	 
	 <script src="resources/services/commonService.js"></script>
	 <script src="resources/js/angular-md5.js"></script>
	  <jsp:include page="fragments/footer.jsp" /> 
	<script type="text/javascript">
	$(window).scroll(function() {
            	var windowHeight = $(window).scrollTop()+ $(window).height();
            	if (windowHeight == $(document).height())
				{
            		 $(".sectionBoxShdw").css({
                         "position" : "relative",
                         "top" : "10px",
                         "margin-bottom" : "66px"
                     });
                     $(".footerArea").css({
                         "position" : "fixed"                                    
                     });
				} 
				else{
					$(".sectionBoxShdw").css({
						"position" : "fixed",
						"top" : "82px",
						"margin-bottom" : "6px"
					});
					$(".footerArea").css({
						"position" : "fixed"
					});
			}});
	</script>

     <script type="text/javascript">
          window.addEventListener("hashchange", function() {
               scrollBy(0, 0);
          });
     </script>

     <!-- -------------------for fixed section -------------------------------------->
</body>
</html>









<%-- <!DOCTYPE html> 

<%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page import="java.io.PrintWriter"%>
<%@ page import="java.io.StringWriter"%>

<html lang="en">
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon">
<title>Please Login</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/angular.min.js"></script>
<link rel="stylesheet" href="resources/css/font-awesome.min.css">
<link rel="stylesheet" href="resources/css/style.css">

</head>
<body style="overflow: hidden">

<div id="wrapper" ng-click="doLogin()">
	<div class="content">
		<div class="container-fluid text-center" style="margin: 133px auto;text-align: center;">
    		<spring:url value="resources/image/exception.png" var="petsImage"/>
    		<img src="${petsImage}"/>

    		<h1>Internal Server Error.</h1>
    		<h2 class="access">Please <span style="color:#4a7196"><a style="text-decoration:none" href="login">login</a></span> to access this page.</h2>

    		<p>${exception.message}</p>

		</div>

	</div>
</div>
<!-- <script src="resources/js/jquery-min.js" ></script> -->
</body>
</html>
 --%>