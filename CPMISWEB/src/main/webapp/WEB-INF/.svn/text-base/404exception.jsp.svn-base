<!DOCTYPE html> 

<%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page import="java.io.PrintWriter"%>
<%@ page import="java.io.StringWriter"%>

<html lang="en">
<head>
<title>Unauthorized Access</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script src="resources/js/angular.min.js"></script>
<link rel="stylesheet" href="resources/css/font-awesome.min.css">
<link rel="stylesheet" href="resources/css/style.css">

</head>
<body ng-app="404ExceptionApp" ng-controller="LoginController" style="overflow: hidden">
<div id="wrapper" ng-click="doLogin()">
	<div class="content">
		<div class="container-fluid text-center" style="margin: 133px auto;text-align: center;">
    		<spring:url value="resources/image/exception.png" var="petsImage"/>
    		<img src="${petsImage}"/>

    		<h1>Error : 404</h1>
    		

    		<p>${exception.message}</p>

		</div>

	</div>
</div>
<!-- <script src="resources/js/jquery-min.js" ></script> -->
</body>
<script src="resources/js/controllers/loginController.js"></script>
</html>
