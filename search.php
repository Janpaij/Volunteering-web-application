<?php require("header.php"); ?>
	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />


	
	
	<div id="content">
		<div>
			<h2>Search for a user</h2>
			<form action='' method="post">
			  First Name:<br>
			  <input type="text" name="firstName" value="" placeholder="Username" required><br>
			  Last Name Name:<br>
			  <input type="text" name="lastName" value="" placeholder="Username" required><br><br>
			  <input type="submit" name="createSearch" value="Search">			  
			</form>
			
			<?php	
				if(ISSET($_POST['createSearch'])){
					$firstName = htmlentities($_POST['firstName']);
					$lastName = htmlentities($_POST['lastName']);
					$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
					$q = mysqli_query($con, "SELECT * FROM logins WHERE firstName = '".$firstName."' AND lastName = '".$lastName."'");
					$row = mysqli_fetch_assoc($q);	
					
					
					echo'<div id="contact">';
						echo'<p>Username :';echo $row['username'];echo' </p>
						<p>First Name :';echo $row['firstName'];echo'</p>
						<p>Last Name :';echo $row['lastName'];echo'</p>
						<p>Age :';echo $row['age'];echo'</p>
						<p>Address :';echo $row['address'];echo'</p>
						<p>Email:';echo $row['email'];echo'</p>
						<p>Phone number:';echo $row['phoneNumber'];echo'</p>
						<p>Languages :';echo $row['languages'];echo'</p>
						<p>Skills :';echo $row['skills'];echo'</p>
						<p><a href="search.php"><button type="button">Start a new Search</button></a></p>	
					</div> ';
					
					
				}
				
					
			?>

			
			
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