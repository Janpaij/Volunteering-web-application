<?php require("header.php"); ?>

	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<?php
	if(ISSET($_POST['createSubmit'])){
		$username = htmlentities($_POST['username']);
		$psw = htmlentities($_POST['psw']);
		$conPass = htmlentities($_POST['conPass']);
		$firstName = htmlentities($_POST['firstName']);
		$lastName = htmlentities($_POST['lastName']);
		$address = htmlentities($_POST['address']);
		$age = htmlentities($_POST['age']);
		$phoneNumber = htmlentities($_POST['phoneNumber']);
		$email = htmlentities($_POST['email']);
		$conEmail = htmlentities($_POST['conEmail']);
		$usertype = htmlentities($_POST['usertype']);
		$language = htmlentities(implode(",",$_POST['language']));
		$skill = htmlentities(implode(",",$_POST['skill']));
		if($username != "" && $psw != "" && $conPass != "" && $email != "" && $conEmail != ""){
			if($psw == $conPass){
				if($email == $conEmail){
					$con = mysqli_connect("localhost", "root", "", "morgan_stanley");					
					mysqli_query($con,"UPDATE logins SET username='".$username."', password='".sha1($psw)."', email='".$email."', usertype='".$usertype."', languages='".$language."', skills='".$skill."', address='".$address."', age='".$age."', firstName='".$firstName."', lastName='".$lastName."' WHERE username = '".$_SESSION['username']."'");
					
				}				
			}
		}
		echo' <div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> Your details have been updated.
			  </div>';

	}
?>
	
	<div id="content">
		<div>
			<h2>Change my details</h2>
			<form action='' method="post">
			  Username:<br>
			  <input type="text" name="username" placeholder="Username" ><br>
			  Password:<br>
			  <input type="password" name="psw" value="" placeholder="Password" ><br>			  
			  Re-enter password:<br>
			  <input type="password" name="conPass" value="" placeholder="Confirm Password" ><br>
			  First Name:<br>
			  <input type="text" name="firstName" placeholder="First Name" ><br>
			  Last Name:<br>
			  <input type="text" name="lastName" placeholder="Last Name" ><br>
			  Address:<br>
			  <input type="text" name="address" placeholder="Address" ><br>
			  Age:<br>
			  <input type="text" name="age" placeholder="Age"><br>
			  Preferred contact phone number:<br>
			  <input type="text" name="phoneNumber" placeholder = "Phone" > <br>
			  Email address:<br>
			  <input type="email" name="email" placeholder="Email" ><br>
			  Confirm Email address:<br>
			  <input type="email" name="conEmail" placeholder="Confirm Email" ><br>
			  User type:
			  <input type="radio" name="usertype" value="volunteer" checked> Volunteer
			  <input type="radio" name="usertype" value="organisation"> Organisation<br>
			  <fieldset>
				<legend>Languages:</legend>			  
				<input type="checkbox" name="language[]" value="Python"> Python<br>
				<input type="checkbox" name="language[]" value="Java"> Java<br>
				<input type="checkbox" name="language[]" value="C++"> C++<br>
				<input type="checkbox" name="language[]" value="HTML"> HTML<br>
				<input type="checkbox" name="language[]" value="CSS"> CSS<br>
			  </fieldset>
			  <fieldset>
				<legend>Skills:</legend>			
			  <input type="checkbox" name="skill[]" value="Web development"> Web development<br>
			  <input type="checkbox" name="skill[]" value="Server script"> Server script<br>
			  <input type="checkbox" name="skill[]" value="Front-end"> Front-end<br>
			  <input type="checkbox" name="skill[]" value="Back-end"> Back-end<br>
			  </fieldset>
			  <input type="submit" name="createSubmit" value="Create Account">
			</form>			
			
		</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<div id="connect">					
					<a target="_blank"><img src="images/Morg2.jpg"  /></a>
				</div>
				<div class="section">
					<ul>
						<li class="first"><a href="index.php">Home</a></li>
						<li><a href="login.php">Log In</a></li>
						<li><a href="projects.php">Projects</a></li>
						<li><a href="signup.php">Sign Up</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
					<p>&copy; Copyright 0000. Morgan Stanley. All Rights Reserved.</p>
					<p>
					<BR>
					<BR>
					<BR></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	
