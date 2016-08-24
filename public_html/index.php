<!DOCTYPE html>
<html  lang="en" ng-app="PersonalSite">
	<head>

		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- set base for relative links - to enable pretty URLs -->
		<!--this needs to go before our angularific code-->
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/";?>">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

		<!-- Our Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!--Angular JS Libraries-->
		<?php $ANGULAR_VERSION = "1.5.8";?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION;?>/angular.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION;?>/angular-messages.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION;?>/angular-route.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION;?>/angular-animate.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.3/ui-bootstrap-tpls.min.js"></script>

		<!--angular base app goes after Angular Libraries -->
		<script src="angular/personal-site.js"></script>
		<!-- configuration files-->
		<script src="angular/route-config.js"></script>
		<!--directives-->


		<!--services, you won't always have them, but make sure they're in order with the controllers-->

		<!--controllers-->

	</head>
	<body>
		<header>

		</header>
		<main>
			<div class="container fluid">


			</div>

		</main>
		<footer>
			<div class="container fluid">
				<div class="row">
					<div class="col-xs-12">
						&copy;&nbsp;2016
					</div>

				</div>

			</div>

		</footer>

	</body>

</html>