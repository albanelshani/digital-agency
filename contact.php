<!DOCTYPE html>
<html lang="en">
<head>
	<title>ContactUs</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/mail.svg"/>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form  class="contact-Form" action="contactForm.php"  onsubmit="return verify()" method="POST" class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input id="inputF" class="input2" type="text" placeholder="Name" name="name">
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input  id="inputS" class="input2" type="email" placeholder="Email" name="email">
						
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea id="inputTh" class="input2" placeholder="Message" name="message"></textarea>
						
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" name="submit" class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
					<p id="message"></p>
				</form>
			</div>
		</div>
	</div>





	<!---<script src="js/main.js"></script> ---->

	
</body>
</html>
