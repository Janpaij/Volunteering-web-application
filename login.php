<?php require("header.php"); ?>

<?php
	if($_SESSION['logged in']){
		header("Location:home.php");		
	}
	if(ISSET ($_POST['submit'])){
		$username = htmlentities($_POST['username']);
		$psw = htmlentities($_POST['psw']);
		$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
		$sql = mysqli_query($con, "SELECT * FROM logins");
		while($row = mysqli_fetch_assoc($sql)){
			if($row["username"] == $username){
				if($row["password"] == sha1($psw)){
					$_SESSION['logged in'] = true;
					$_SESSION['username'] = $username;
				}
			}
		}
		if($_SESSION['logged in']){
			header("Location:login.php");			
		} else {
			echo "The details you have entered are incorrect";
		}
	}
?>
	<meta charset="UTF-8" />
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	

		<div>
			<div class="section">
				
				<div>
					If you haven't already signed up,
					<a href="signup.php">Make an account</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="content">
		<div id="about">
			
		</div>
		<form action='' method="post">
		  User name:<br>
		  <input type="text" name="username" value="" placeholder="Username" required><br>
		  User password:<br>
		  <input type="password" name="psw" value="" placeholder="Password" required><br>
		  <input type="submit" name="submit" value="Login">
		</form>
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