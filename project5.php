<?php require("header.php"); ?>
	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />



<?php

	$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
	$q = mysqli_query($con, "SELECT * FROM projects WHERE projectNumber = '5'");
	$row = mysqli_fetch_assoc($q);
	if(ISSET($_POST['signUp'])){
		mysqli_query($con,"UPDATE logins SET signUp = '5' WHERE username = '".$_SESSION['username']."'");
		echo' <div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> You are now signed up to this project.
			  </div>';
		
	}
	if(ISSET($_POST['editProject'])){
		header("Location: editProject.php");

	
	}
	if(ISSET($_POST['deleteProject'])){
		mysqli_query($con,"DELETE FROM projects WHERE projectNumber = '5'");
		$number = 1;	
		$c = mysqli_query($con, "SELECT * FROM projects");
		while($rowww = mysqli_fetch_assoc($c)){
			if($rowww['projectNumber'] != $number){
				mysqli_query($con,"UPDATE projects SET projectNumber = '".$number."' WHERE projectTitle = '".$rowww['projectTitle']."'");
				$number++;
			} else{
				$number++;
			}
			
		}
		header("Location: projects.php");
	}
	if(ISSET($_POST['postMessage'])){
		$message = htmlentities($_POST['message']);
		mysqli_query($con,"INSERT INTO messages (username, projectNumber, message) VALUES ('".$_SESSION['username']."','1','".$message."')");
		echo' <div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Success!</strong> Your message has been posted.
			  </div>';
		
	}
?>
	
	<div id="content">
		<div id="about">
			<h2><?php echo $row['projectTitle'];  ?></h2>
			<span class="first">Brief description</span>
			<p> <?php echo $row['briefDes'];  ?> </p>			
			<?php echo "<img width='340' height='280' src='projectImages/".$row['image']."' alt='Project Picture'>"; ?>
			<span>Main description</span>
			<p> <?php echo $row['mainDes'];  ?> </p>
			<span>Languages and skills required for the project</span>
			<p>The languages which a volunteer working on this project is required to have a good understanding of are:<br> <?php echo $row['languages'];  ?><br><br>The skills which a volunteer working on this project is required to have are:<br><?php echo $row['skills'];  ?></p>
			<div class="details"><strong>Github repository</strong></div>
			<p><?php echo $row['github'];  ?></p><br><br>
			
			<?php
			$u = mysqli_query($con, "SELECT * FROM logins WHERE username = '".$_SESSION['username']."'");
			$roww = mysqli_fetch_assoc($u);
			if($_SESSION['logged in']){
				if($roww['signUp'] != "5"){
					if($roww['usertype'] == "volunteer"){
						echo'
						<form action="" method="post">			
							<input type="submit" name="signUp" value="Sign up to this project">
						</form>	
						';
					}
				}
				
				if($roww['usertype'] == "organisation"){
					$w = mysqli_query($con, "SELECT * FROM logins WHERE signUp = '5' ");
					
					echo'
					<div class="details"><strong>Volunteers who have signed up to this project</strong></div> ';
					while($ro = mysqli_fetch_assoc($w)){
					Echo"<p>";echo $ro['firstName'];Echo" ";echo $ro['lastName'];Echo",</p>";
					}
					echo'<br><br>
					
					<form action="" method="post">			
						<input type="submit" name="editProject" value="Edit this project">
						<input type="submit" name="deleteProject" value="Delete this project">
					</form>	
					';
				}
			}
			
			?>
		</div>
		
	</div> 
	<div id="content">
		<span>Project Progress: <span>	
		
		
	</div> 
	<div class="progress">
	  <div class="progress-bar progress-bar-striped active" role="progressbar"
	  aria-valuenow="<?php echo $row['progress'];  ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['progress'];  ?>%">
		<?php echo $row['progress'];  ?>%
	  </div>
	</div>
	
	<?php
	$t = mysqli_query($con, "SELECT * FROM messages");
		echo'<div id="content">
		  <div class="panel panel-default">
		  <div class="panel-heading">Messages</div>
		  <div class="panel-body"> ';
			while($roh = mysqli_fetch_assoc($t)){
			echo'
				<div id="content">
					<span>';echo $roh['username']; echo' says: ';echo $roh['message']; echo' </span>
				</div> 				
				';
		
			}
		echo' </div>
		</div>
		</div>		';
		
	
	if($_SESSION['logged in']){
		if($roww['signUp'] == "5"){
			if($roww['usertype'] == "volunteer"){
				echo'
				<div id="content">
					<form action="" method="post" >		
					 Post a message<br>
					<textarea name="message" rows="4" cols="50" required>
					</textarea><br>
					<input type="submit" name="postMessage" value="Post message">
				</form>			
				</div> 				
				';
			}
		}
	}
	?>
	
	
	
	
	
	


	
	<div id="footer">
		<div>
			<div>
				<div id="connect">					
					
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