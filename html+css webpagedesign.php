<!DOCTYPE html>  
<html> 
    <head>
		<title>web page</title>
		<link href="webpagedesign.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<header id="topbar">
			<div class="topbarmain">
				<div class="container">
					<div class="topbarwrapper">
						<div class="phone">
						<i class="fas fa-phone"></i> Phone:01622-778083
						</div>
						<div class="Email">
						<i class="fas fa-envelope"></i> Email:shibbira089@gmail.com
						</div>
						<div class="social">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkdin"></i></a>
						</div>
					</div>
				</div>   
			</div>

			<div class="primarymenu">
				<div class="container">
					<div class="primarywrapper">
						<div class="logo">
						<img src="3f4393b6-88b6-4f3d-aca6-7c257bfa1014.jpg4.jpg5.jpg"/>
						</div>
						<div class="menu">
							<ul class="mainmenuitem">
								<li ><a href="">HOME</a></li>
								<li ><a href="">PAGES</a></li>
								<li ><a href="">SEVICES</a></li>
								<li ><a href="">PROJECTS</a></li>
								<li ><a href="">BLOG</a></li>
								<li ><a href="">CONTACT</a></li>
								<li ><a href="">S</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
	 
		<section  id="homeslider">
			<div class="container">
				<div class="slidercontent">
					<h1>Best quality Fashionable Wear Services</h1>
					<p>hello everyone how are you welcome to sobkichurbazar.com</p>
					<button id="sliderbuutton">With Us</button>
				</div>
			</div>
			<div class="sidernav">
				<span></span>
			</div>
		</section>    
				 
		<section id="Services">
			<div class="container">
				<div class="aboxwrapper">
					<div class="singlebox">
						<div class="aboxicon"><i class="fas fa-ambulance" aria-hidden="true"> </i></div>
						
						<div class="aboxtitle">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM s_one";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="aboxlink"><a href="#">Learn more</a></div>		  
					</div>
					<div class="singlebox">
						<div class="aboxicon"><class="fa fa-ambulance" aria-hidden="true"></i></div>
						<div class="aboxtitle">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM s_two";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="aboxlink"><a href="#">Learn more</a></div>		  
					</div>
					<div class="singlebox">
						<div class="aboxicon"><i class="fa fa-ambulance" aria-hidden="true"> </i></div>
						<div class="aboxtitle">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM s_three";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="aboxlink"><a href="#">Learn more</a></div>		  
					</div>
					<div class="singlebox">
						<div class="aboxicon"><i class="fa fa-ambulance" aria-hidden="true"> </i></div>
						<div class="aboxtitle">
							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM s_four";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="aboxlink"><a href="#">Learn more</a></div>		  
					</div>
				</div>
			</div>
		</section>

		<section id="ouradvantages">
			<div class="container">
				<div class="contents">
					<div class="ourimage">
					<img src="b7480ee5-12ae-4812-b31e-13c7dcc7f3d3.jpgsh.jpg"/>
					</div>
					<div class="ourdetails">
						<div class="titledec">
						<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM our_advantage";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h2>" . $row['title'] . "</h2>";
									echo "<p>" . $row['paragraph'] . "</p>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
						</div>
						<div class="facilities">
							<ul class="facilitiesleftul">
							
								<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph, one FROM best_quality";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<li>" . $row['title'] . "</li>";
									echo "<li>" . $row['paragraph'] . "</li>";
									echo "<li>" . $row['one'] . "</li>";	
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>

							</ul>
							<ul class="facilitiesrightul">
								<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT two, three, four FROM best_quality";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									
									
									echo "<li>" . $row['two'] . "</li>";
									echo "<li>" . $row['three'] . "</li>";
									echo "<li>" . $row['four'] . "</li>";	
								}
								}else {
								echo "0 results";
								}

								mysqli_close($conn);
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="contactbutton">
				<a href="#">GET STARTED</a>
				</div>
			</div>
		</section>
					  
		<section id="whybuyus">
			<div class="container">
				<div class="iconwrapper">
					<div class="sigleicons">
						<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM low_price_one";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
					</div>
					<div class="sigleicons">
						<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM low_price_two";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
					</div>
					<div class="sigleicons">
						<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM low_price_three";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
					</div>
					<div class="sigleicons">
						<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "shibbir";

								// Create connection
								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "SELECT title, paragraph FROM low_price_four";
								$result = mysqli_query($conn, $sql);

								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									echo "<h1>" . $row['title'] . "</h1>";
									echo "<h4>" . $row['paragraph'] . "</h4>";
								}
								} else {
								echo "0 results";
								}

								mysqli_close($conn);
							?>
					</div>
				</div>     
			</div>
			</div>  
		</section>

		<section id="blogpost">
			<div class="container">
				<div class="maintitle">
					<h2>MOREE FROM US</h2>
					<p>kmn aso valo asi kmn aso valo asi valo asi valo theko akasher thikanai citti likho
					shoki go amar mon vaala nai vala karap ja asy kopale</p>
				</div>
				<div class="postrwrapper">
					<div class="singlepost2">
						<div class="postimage"><img src="3215e547-e54c-4f66-ae3f-f864b4933aca2.jpg"></img></div>
						<div class="postinfo">
							<h5> DELIVERY TEAM</h5>
							<p>kmn aso valo asi valo asi valo asi
							valo theko akasher thikanai citti likho</p>
						</div>
					</div>
					<div class="singlepost2">
						<div class="postimage"><img src="2f5bf6ad-dc5f-47f6-aa1c-fc338ad7461e.jpg"></img></div>
						<div class="postinfo">
							<h5> DELIVERY TEAM</h5>
							<p>kmn aso valo asi valo asi valo asi
							valo theko akasher thikanai citti likho</p>
						</div>
					</div>
					<div class="singlepost2">
						<div class="postimage"><img src="a9cd15dc-6017-44ce-b179-b20997405b315.jpg"></img></div>
						<div class="postinfo">
							<h5> DELIVERY TEAM</h5>
							<p>kmn aso valo asi valo asi valo asi
							valo theko akasher thikanai citti likho</p>
						</div>
					</div>
					<div class="singlepost2">
						<div class="postimage"><img src="d3e8203a-7363-4213-bcf4-b5bc58f2a600.jpg"></img></div>
						<div class="postinfo">
							<h5> DELIVERY TEAMs</h5>
							<p>kmn aso valo asi valo asi valo asi
							valo theko akasher thikanai citti likho</p>
						</div>
					</div>	
				</div>
			</div>
		</section>
				   
		<section id="pricing">
			<div class="container">
				<div class="maintitle">
				<h2>PRODUCT PRICES PLAN</h2>
				<p>kmn aso valo asi kmn aso valo asi valo asi valo theko akasher thikanai citti likho
				shoki go amar mon vaala nai vala karap ja asy kopale</p>
				</div>
				<div class="tablelist">
					<div class="singeltable">
						<h3>START</h3> 
						<h1>$49  </h1>
						<span>/m</span>
						<ul>
							<li>Build with advance business</li>
							<li>customiz product</li>
							<li>Best agency market</li>
							<li>customer services</li>
							<li>Quick delivery</li>
							<li>up to 100 worker</li>
							<li>preorder service</li>
							<li>your choise</li>
						 </ul>
						<div class="tablebutton">
							<a href="#">GET STARTED</a>
						</div>
						<div class="singeltable">
							<h3>PRO</h3> 
							<h1>$49  </h1>
							<span>/m</span>
							<ul>
								<li>Build with advance business</li>
								<li>customiz product</li>
								<li>Best agency market</li>
								<li>customer services</li>
								<li>Quick delivery</li>
								<li>up to 100 worker</li>
								<li>preorder service</li>
								<li>your choise</li>
							 </ul>
							<div class="tablebutton">
								<a href="#">GET STARTED</a>
							</div>
							<div class="singeltable">
							<h3>PREMIUM</h3> 
							<h1>$49  </h1>
							<span>/m</span>
							<ul>
								<li>Build with advance business</li>
								<li>customiz product</li>
								<li>Best agency market</li>
								<li>customer services</li>
								<li>Quick delivery</li>
								<li>up to 100 worker</li>
								<li>preorder service</li>
								<li>your choise</li>
							</ul>
							<div class="tablebutton">
								<a href="#">GET STARTED</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>		   
	</body>
</html>	