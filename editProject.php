<?php require("header.php"); ?>

<?php
	if(ISSET($_POST['createSubmit'])){
		$title = htmlentities($_POST['title']);
		$brief = htmlentities($_POST['brief']);
		$main = htmlentities($_POST['main']);		
		$github = htmlentities($_POST['github']);
		$language = htmlentities(implode(",",$_POST['language']));
		$skill = htmlentities(implode(",",$_POST['skill']));		
		
		$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
		mysqli_query($con,"INSERT INTO projects (projectTitle, briefDes, mainDes, languages, skills, github) VALUES ('".$title."','".$brief."','".$main."','".$language."','".$skill."', '".$github."')");
		move_uploaded_file($_FILES['image']['tmp_name'], "projectImages/".$_FILES['image']['name']);
		$q = mysqli_query($con,"UPDATE projects SET image = '".$_FILES['image']['name']."' WHERE projectTitle = '".$title."'");
		
		$number = 1;	
		$c = mysqli_query($con, "SELECT * FROM projects");
		while($row = mysqli_fetch_assoc($c)){
			if($row['projectNumber'] != $number){
				mysqli_query($con,"UPDATE projects SET projectNumber = '".$number."' WHERE projectTitle = '".$row['projectTitle']."'");
				$number++;
			} else{
				$number++;
			}
			
		}
	}
?>	
	
	<meta charset="UTF-8" />
	<title>Edit Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<div id="content">
		<div>
			<h2>Edit project</h2>
			<form action='' method="post" enctype="multipart/form-data">
			  Project title:<br>
			  <input type="text" name="title" placeholder="Project title" required><br>
			  Brief description:<br>
			  <textarea name="brief" rows="4" cols="50" required>
			  </textarea><br>
			  Main description:<br>
			  <textarea name="main" rows="20" cols="50">
			  </textarea>		  
			  <fieldset>
				<legend>Languages required:</legend>			  
				<input type="checkbox" name="language[]" value="Python"> Python<br>
				<input type="checkbox" name="language[]" value="Java"> Java<br>
				<input type="checkbox" name="language[]" value="C++"> C++<br>
				<input type="checkbox" name="language[]" value="HTML"> HTML<br>
				<input type="checkbox" name="language[]" value="CSS"> CSS<br>
			  </fieldset>
			  <fieldset>
				<legend>Skills required:</legend>			
			   <input type="checkbox" name="skill[]" value="Web development"> Web development<br>
			   <input type="checkbox" name="skill[]" value="Server script"> Server script<br>
			   <input type="checkbox" name="skill[]" value="Front-end"> Front-end<br>
			   <input type="checkbox" name="skill[]" value="Back-end"> Back-end<br>
			  </fieldset>
			  Github link:<br>
			  <input type="url" name="github" placeholder="Github link"><br>
			  <input type="file" name="image" id="fileToUpload"><br>
				<input type="submit" name="createSubmit" value="Edit Project">
			</form>			
			
		</div>
	</div>
	
	
	<div id="footer">
		<div>
			<div>
				
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