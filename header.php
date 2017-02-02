<?php session_start(); 
	
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Charity web application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
	$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
	$u = mysqli_query($con, "SELECT * FROM logins WHERE username = '".$_SESSION['username']."'");
	$roww = mysqli_fetch_assoc($u);
	if($_SESSION['logged in']){
		if($roww['usertype'] == "organisation"){
			echo '
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="home.php"><img alt="Brand" src="images/Morg3.jpg"></a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li> <!-- Use that bootstrap align thing -->
					<li><a href="projects.php"><span class="glyphicon glyphicon-briefcase"></span> Projects</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
					<li><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search for users</a></li>					
				</ul>			
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
						<span class="caret"></span> My Account(';echo$roww['username'];echo') </a>
						<ul class="dropdown-menu">						
						 <li><a href="changedetails.php">Change Details</a></li>
						 <li><a href="logout.php">Log out</a></li> 
						</ul>
					</li>
				
				</ul>
			  </div>
			</nav>
			
			
			';
		} else{
			echo'
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="home.php">Charity Project</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li> <!-- Use that bootstrap align thing -->
						<li><a href="projects.php"><span class="glyphicon glyphicon-briefcase"></span> Projects</a></li>
						<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>	
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
							<span class="caret"></span> My Account(';echo$roww['username'];echo')</a>
							<ul class="dropdown-menu">
							 <li><a href="notifs.php">Notifications</a></li>
							 <li><a href="currentprojects.php">My Current Projects</a></li>
							 <li><a href="changedetails.php">Change Details</a></li>
							 <li><a href="logout.php">Log out</a></li> 
							</ul>
						</li>
					
					</ul>
				  </div>
				</nav>
				
				
						
			';
		}
		
	} else {
		echo '
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			  </button>
			  <a class="navbar-brand" href="home.php">Charity Project</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
			  <li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li> <!-- Use that bootstrap align thing -->
				<li><a href="projects.php"><span class="glyphicon glyphicon-briefcase"></span> Projects</a></li>
				<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
			  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			</ul>
			</div>
		  </div>
		</nav>
		
		';
	}

?>


	
			
