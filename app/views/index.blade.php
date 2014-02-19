<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  ng-app="myApp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Laravel-angularJS</title>
		<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> -->
		<script type="text/javascript" src="app/js/jquery.min.js"></script>
		<script src="app/js/jquery-ui.js" type="text/javascript"></script>


	</head>

	<body>

		<div class="main-container" ng-view></div>



		<script src="app/lib/angular/angular.js"></script>
		<script src="app/lib/angular/angular-resource.min.js"></script>
		<script src="app/js/app.js"></script>
		<script src="app/js/services.js"></script>
		<script src="app/js/controllers.js"></script>
		<script src="app/js/filters.js"></script>
		<script src="app/js/directives.js"></script>
		<script src="app/js/date.js"></script>
		<script src="app/lib/angular/ui_bootstrap.js"></script>
		<script src="app/lib/angular/ui-bootstrap-tpls-0.9.0.min.js"></script>
		<script src="app/js/underscore.js"></script>
		<script>
			angular.module("myApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
		</script>
	</body>
</html>
