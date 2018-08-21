<!DOCTYPE html> 

<%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page import="java.io.PrintWriter"%>
<%@ page import="java.io.StringWriter"%>

<html lang="en">
<head>
<link rel="shortcut icon" href="resources/image/svgIcons/favicon.ico" type="image/x-icon">
<title>Maintenance</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/angular.min.js"></script>

</head>
<body style="overflow: hidden">
<div id="wrapper" ng-click="doLogin()">
	<div class="content">
		<div class="container-fluid text-center" style="margin: 133px auto;text-align: center;">
    		<spring:url value="resources/image/maintenance.png" var="petsImage"/>
    		<img src="${petsImage}"/>

    		<h1>Site is under maintenance.<br> Please try after some time.</h1>
		</div>

	</div>
</div>
</body>
</html>
