<?php require("header.php"); ?>
	
	
	<meta charset="UTF-8" />
	<title>Projects</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<?php	
	$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
	$u = mysqli_query($con, "SELECT * FROM logins WHERE username = '".$_SESSION['username']."'");
	$roww = mysqli_fetch_assoc($u);
	if($_SESSION['logged in']){
		if($roww['usertype'] == "organisation"){
			echo'<div>
				<a href="startproject.php"><button type="button">Start a project</button></a>
			</div>';
		}
	}	
	?>
		
	
	<div id="content">
		<div>
			<h2>Projects</h2>
			<p>This page contains all the projects which are available to sign up for, along with their project name and brief description. For more details of the project, and to be able to sign up a project, click on the project image.</p>
			
			<ul>
				
				
				<?php
				
				
				
					$con = mysqli_connect("localhost", "root", "", "morgan_stanley");
					$q = mysqli_query($con, "SELECT * FROM projects");
					while($row = mysqli_fetch_assoc($q)){
						
						Echo"<li>";
						Echo"	<a href='project";echo$row['projectNumber'];Echo".php'>";
								echo "<img width='290' height='220' src='projectImages/".$row['image']."' alt='Project Picture' class='img-rounded'>";
						Echo"	</a>";
						Echo"	<div>";
						Echo"		<h3><a href='index.php'>";
									echo $row['projectTitle'];
						Echo"		</a></h3>";
						Echo"		<span>";
									echo $row['briefDes']; 
						Echo"		</span>";
						
						
										
						Echo"	</div>";	
						Echo"</li>";						
					}
					
										
				?>
				
			  <!--  <li>
					<a href="index.php"><img src="images/group-exercise.jpg" alt="Image" /></a>
					<div>
						<h3><a href="index.php">Project 1</a></h3>
						<ul>
							<li>Aliquam eget ligula et diam sollicitud</li>
							<li>Sed venenatis arcu a felis aliquet et</li>
							<li>Sed laoreet felis et ante</li>
							<li>Viverra arcu a felis aliquet</li>
							<li>Pellentesque consectetur tellus sed</li>
						</ul>
						<ul>
							<li>Diam sollicitud Aliquam eget ligula</li>
							<li>Venenatis arcu a felis aliquet</li>
							<li>Felis et antessed laoreet</li>
							<li>Consectetur tellus Pellensteque</li>
							<li>Ullamcorper ut interdum sollicitud</li>
						</ul>
					</div>
				</li>
				<li>
					<a href="index.php">
						
					</a>
					<div>
						<h3><a href="index.php">Vestibulum, lorem non scelerisque semper, tortor nisi suscipit magna, in faucibus augue id neque</a></h3>
						<span>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What's more, they're absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="http://www.freewebsitetemplates.com/about/termsofuse/">Terms of Use</a>.</span>
						<span>HOWEVER skilful a man may be in writing--however natural his style--no one can write history naturally. The array of facts which the historian has first to collect is far too great. In my own work I generally find that for perhaps a single paragraph 1 may have four or five hundred typed or hand-written slips of paper--extracts and notes from letters and books and documents.  </span>
						<span><form action='' method="post">										
							<input type="radio" name="usertype" value="organisation"> Sign up to this Project<br>
						</form>	</span>
					</div>
				</li>
				<li>
					<a href="index.php"><img src="images/group-exercise2.jpg" alt="Image" /></a>
					<div>
						<h3><a href="index.php">We Have More Templates for You</a></h3>
						<p>Looking for more templates? Just browse through all our <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> and find what you're looking for. But if you don't find any website template you can use, you can try our <a href="http://www.freewebsitetemplates.com/freewebdesign/">Free Web Design</a> service and tell us all about it. Maybe you're looking for something different, something special. And we love the challenge of doing something different and something special.</p>
					</div>
				</li>  -->
			</ul>
		</div>
	</div>
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