<!-- code for navbar and angular wiring inspired from lesson by rlewis37@cnm.edu-->
<!-- idea for an angularific personal website inspired by new.deepdivedylan.com-->

<?php require_once("php/partials/head-utils.php"); ?>
<body class="sfooter">
	<div class="sfooter-content">
		<!--begin header-->
		<?php require_once("php/partials/header.php"); ?>


		<!--begin main content-->
		<main>
			<div class="container fluid">
				<!--inject main content, use mainContent class to position different content... if needed-->
				<div ng-view></div>

			</div>
		</main>

	</div>

	<!--begin footer-->
	<?php require_once("php/partials/footer.php"); ?>

</body>


</html>