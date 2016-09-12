
<!-- Google Recaptcha as implemented is actually not meant for Angular websites. It works, but it is buggy and not mobile friendly -->
<!-- email function DOES work. I have tested it. However, the UX isn't stellar. This will turn into a week 11 project-->
<div class="container-fluid">
	<h2>Let's Shredd!</h2>
	<p> Contact us for any or all of your web-development needs. If you would like to contact Robert Harding, please send
		him an email at <u> <strong>robharding@shreddhed.net</strong></u>. For your convenience, we've provided the contact form below which will send an email directly to Robert.</p>
	<p>**if Google recaptcha is not displaying above the SEND button <strong>refresh</strong> the page until it shows</p>
</div>

<form name="contactForm" id="contactForm" class="form-horizontal well" ng-controller="ContactFormController"
		ng-submit="submit(formData, contactForm.$valid);" action="php/contact/mailer.php" method="POST" novalidate>


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
			<textarea class="form-control ng-untouched ng-pristine ng-valid" cols="30" id="message" name="message"
						 rows="10"
						 ng-reflect-model="" ng-reflect-name="message"></textarea>
		</div>


		<div class="form-group">
			<!--gogle recaptcha box-->
			<div class="g-recaptcha" data-sitekey="6Lc4rykTAAAAAOJEc81Qv3eVU36upLh3IRPPbsF5"></div>



			<button class="btn btn-lg btn-success" type="submit"> Send</button>
			<button class="btn btn-lg btn-default" type="reset">Clear</button>
		</div>
	<div class="container">
		<div class="row">
			<div id="output-area"></div>
		</div>
	</div>



</form>

<p>**Google recaptcha must be satisfied before this form will send an email to Robert</p>