<?php require("header.php"); ?>

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
					$repeatCheck = mysqli_query($con, "SELECT * FROM logins WHERE username = '".$username."' OR email = '".$email."'");
					if($row = mysqli_fetch_assoc($repeatCheck)){
						// Add error
						Echo" This user exists already";
					} else{
						//Create user
						mysqli_query($con,"INSERT INTO logins (username, password, email, usertype, languages, skills, address, age, phoneNumber, firstName, lastName) VALUES ('".$username."','".sha1($psw)."','".$email."','".$usertype."','".$language."','".$skill."', '".$address."', '".$age."', '".$phoneNumber."', '".$firstName."', '".$lastName."')");
						Echo" Registration successful. You may now login ";
					}
				}				
			}
		}		

	}
?>
	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
			<div class="section">
				
				<div>
					Already have an account?
					<a href="login.php">Login!</a>
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div>
			<h2>Registration</h2>
			<form action='' method="post">
			  Username:<br>
			  <input type="text" name="username" placeholder="Username" required><br>
			  Password:<br>
			  <input type="password" name="psw" value="" placeholder="Password" required><br>			  
			  Re-enter password:<br>
			  <input type="password" name="conPass" value="" placeholder="Confirm Password" required><br>
			  First Name:<br>
			  <input type="text" name="firstName" placeholder="First Name" required><br>
			  Last Name:<br>
			  <input type="text" name="lastName" placeholder="Last Name" required><br>
			  Address:<br>
			  <input type="text" name="address" placeholder="Address" required><br>
			  Age:<br>
			  <input type="text" name="age" placeholder="Age"><br>
			  Preferred contact phone number:<br>
			  <input type="text" name="phoneNumber" placeholder = "Phone" required> <br>
			  Email address:<br>
			  <input type="email" name="email" placeholder="Email" required><br>
			  Confirm Email address:<br>
			  <input type="email" name="conEmail" placeholder="Confirm Email" required><br>
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
			<div>
				
				<div class="sidebar">
					<h3>Languages</h3>
					<ul>
						<li>
							<div>Python <span>+</span></div>
							<p>Curabitur trisque, nibh id ultrices or dapibus, velit nulla egestas tellus, ideas semper sapien mauris idiem sem. Sed convallis purus and vitae sem.</p>
						</li>
						<li>
							<div>Java <span>+</span></div>
							<p>Vehicula and nisi adipi scing. Vivamus pulvinar, lorem aces rhoncus scelerisque, odio dui mollis mi, eget pellentesque velit lorem vel enim.</p>
						</li>
						<li>
							<div>C ++ <span>+</span></div>
							<p>Sed elementum viverra ipsum ut scelerisque. Quisque nunc justo, tincidunt sit-ups amet pellentesque vel, vitae gravida lorem gets mission.</p>
						</li>
						<li>
							<div>HTML <span>+</span></div>
							<p>Set elementum viverra ipsum ut scelerisque. Quisque nunc justo, tincidunt sit-ups amet pellentesque vel, vitae gravida lorem gets mission.</p>
						</li>
						<li>
							<div>CSS <span>+</span></div>
							<p>Looking for more templates? Just browse through all our <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> and find what you're looking for.</p>
						</li>
					</ul>
				</div>
			</div>
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