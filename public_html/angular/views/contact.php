<!-- code based on contact form found on new.deepdivedylan.com-->

<!-- disabled until I can figure out the submit feature-->

<div class="container-fluid">
	<h2>Let's Shredd!</h2>
	<p> Contact us for any or all of your web-development needs. If you would like to contact Robert Harding, please send him an email at roberthcontact0@gmail.com</p>

</div>

<form name="contactForm" id="contactForm" class="form-horizontal well" ng-controller="ContactFormController" ng-submit="submit(formData, contactForm.$valid);" action="php/contact/mailer.php" method="POST" novalidate>
	<div class="container-fluid">

		<div class="form-group">
			<label for="name">Name</label>
			<div class="input-group">

				<input class="form-control ng-untouched ng-pristine ng-invalid" id="name" name="name" ng-reflect-name="name"
						 type="text">
			</div>
			<div class="alert alert-danger" ng-reflect-hidden="true" hidden="">
				Name is required
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<div class="input-group">

				<input class="form-control ng-untouched ng-pristine ng-invalid" id="email" name="email" required=""
						 ng-reflect-model="" ng-reflect-name="email" type="email">
			</div>
			<div class="alert alert-danger" ng-reflect-hidden="true" hidden="">
				Email is required
			</div>
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<div class="input-group">

				<input class="form-control ng-untouched ng-pristine ng-invalid" id="subject" name="subject" required=""
						 ng-reflect-model="" ng-reflect-name="subject" type="text">
			</div>
			<div class="alert alert-danger" ng-reflect-hidden="true" hidden="">
				Subject is required
			</div>
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<textarea class="form-control ng-untouched ng-pristine ng-valid" cols="30" id="message" name="message" rows="10"
						 ng-reflect-model="" ng-reflect-name="message"></textarea>
		</div>

		<div class="form-group">
			<div class="g-recaptcha" data-sitekey="6Lc4rykTAAAAAOJEc81Qv3eVU36upLh3IRPPbsF5"></div>
			<button class="btn btn-lg btn-success" type="submit"   > Send</button>
			<button class="btn btn-lg btn-default" type="reset">Clear</button>
		</div>




	</div>

</form>
<!--this is the alert-->
<div class="container">
	<div class="row">
		<div id="output-area"></div>
	</div>
</div>
