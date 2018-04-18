<!DOCTYPE php>
<style type="text/css">
::-webkit-scrollbar {
display: none;
}
</style>
<php>
	<head>
	    <link rel="icon" href="images/logo.jpg">	
		<title>Projects</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/php5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/login.css" />	
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="whoami.php">Who am i?</a></li>
							<li><a href="project.php">Projects</a></li>
							<li><a href="contact.php">Contact</a></li>
			                <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>	
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Projects</h1>
							</header>
							<div class="content">
								<p>Below you can find a bunch of things that i am or will be tinkering with.</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- Two -->
							<section id="two" class="spotlights">
								<section>
									<a class="image">
										<img src="images/Script.jpg" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Past Projects</h3>
											</header>
											<p>Highlights of projects i have completed in the past</p>
											<ul class="actions">
												<li><a href="past.php" class="button">HighLights</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a class="image">
										<img src="images/raspicam.jpg" alt="" data-position="top center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Current Projects</h3>
											</header>
											<p>Have a look at things im currently working on (including this very website)</p>
											<ul class="actions">
												<li><a href="current.php" class="button">Have a peek!</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section>
									<a class="image">
										<img src="images/PepperTab.jpg" alt="" data-position="25% 25%" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Planned Projects</h3>
											</header>
											<p>Things i have planned for the future</p>
											<ul class="actions">
												<li><a href="planned.php" class="button">Interested?</a></li>
											</ul>
										</div>
									</div>
								</section>
							</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<h5>Have a look at my Github and Linkedin</h5><li>
								<a href="http://www.github.com/vithusel" target="_blank" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="http://www.linkedin.com/in/vithusel" target="_blank" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>							
							</ul>
							<sub> This website is powered by Raspberry Pi 3 Apache webserver</sub>
							<p></p>
							<sub><small> Design is forked from php5UP by Forty with my own changes added</small></sub>
							</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
        <!-- Login -->
			<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
    <div class="12u$">
	   <ul class="actions">
	<li><input type="submit" value="Login" class="special" /></li>
    </div>

    <div class="container" style="background-color:#242943">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Forgot Password?</a></span>
    </div>
  </form>
</div>	
	</body>
</php>