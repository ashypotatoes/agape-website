<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body bgcolor="#f6e6d6">
	<header>
		<div class="navbar">
			<a href="agapewebsite.html"> <img src="images/agapelogo2.jpg" alt="logo" class="nav-logo"> </a>

			<nav>
				<ul>
					<!-- <li><a href="#">About Us</a></li> -->
					<li><a href="leaders.html">Leaders</a></li>
					<li><a href="#">Media</a></li>
					<li><a href="contactus.html">Contact Us</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<form action="#">
		<legend> <b>Contact Us</b> </legend>

		<p id="contact-description">
			We'd love to hear from you! Feel free to send us a question or comment with the form below. <br>
			All submissions will be sent to our email, and we'll get back to you as soon as possible. <br>
		</p>

<!-- Get rid of classes for inputs? -->

		<label class="title">First Name</label> <span class="required">*</span><br>
			<input type="text" name="first-name" class="first-name-input"><br>

		<label class="title">Last Name</label> <span class="required">*</span><br>
			<input type="text" name="last-name" class="last-name-input"><br>

		<label class="title">Email</label> <span class="required">*</span> <br>
			<input type="text" name="email" class="email-input"> <br>

		<label class="title">Phone Number</label> <span class="required">*</span> <br>
			<input type="text" name="phone" class="phone-input"> <br>

		<label class="title"> Preferred Method of Contact:</label><br>
			<select name="pref-method">
				<option> Email </option>
				<option> Phone </option>
			</select> 
		<br>

		<label class="title">Subject</label> <span class="required">*</span> <br>
			<input type="text" name="subject" class="subject-input"> <br>

		<label class="title">Message</label> <span class="required">*</span> <br>
			<textarea name="message" cols="60" rows="15" id="message-input"></textarea> <br>

		<button type="submit" name="submit" value="Submit" id="submit-input">Submit</button>
	</form>
</body>
</html>