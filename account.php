<?php require("header.php"); ?>


	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
		
			<?php echo $_SESSION["username"]; ?>
			
			
			
			<div class="section">
				<?php	
				$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
				$u = mysqli_query($con, "SELECT * FROM logins WHERE username = '".$_SESSION['username']."'");
				$roww = mysqli_fetch_assoc($u);
				if($_SESSION['logged in']){
					if($roww['usertype'] == "volunteer"){
						echo'
							<div>
								View Notifications
								<a href="notifs.php">Notifications</a>					
							</div>
							<div>
								View the projects which you have signed up to
								<a href="currentprojects.php">My Current Projects</a>					
							</div>
						';
					}
				}	
				?>
				
				<div>
					Change your details
					<a href="changedetails.php">Change details</a>					
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