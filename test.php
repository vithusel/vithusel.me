<? php
echo '<!DOCTYPE HTML>';
echo '<script type="text/javascript">';
echo '<!--';
echo 'if (screen.width <= 699) {';
echo 'alert("This site works best on a Desktop, Loading mobile compatible site")';
echo '}';
echo '//-->';
echo '</script>';
echo '<html>';
echo '<head>';
echo '<link rel="icon" href="images/logo.jpg">';
echo '<title>Home Page</title>';
echo '<meta charset="utf-8" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />';
echo '<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->';
echo '<link rel="stylesheet" href="assets/css/main.css" />';
echo '<link rel="stylesheet" href="assets/css/login.css" />';
echo '<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->';
echo '<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->';
echo '</head>';
echo '<body>';
echo '';
echo '<!-- Wrapper -->';
echo '<div id="wrapper">';
echo '';
echo '<!-- Header -->';
echo '<header id="header" class="alt">';
echo '<nav>';
echo '<a href="#menu">Menu</a>';
echo '</nav>';
echo '</header>';
echo '';
echo '<!-- Menu -->';
echo '<nav id="menu">';
echo '<ul class="links">';
echo '<li><a href="index.html">Home</a></li>';
echo '<li><a href="whoami.html">Who am i?</a></li>';
echo '<li><a href="project.html">Projects</a></li>';
echo '<li><a href="contact.html">Contact</a></li>';
echo '<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>';
echo '</ul>';
echo '</nav>';
echo '';
echo '<!-- Banner -->';
echo '<section id="banner" class="major">';
echo '<div class="inner">';
echo '<header class="major">';
echo '<h1>Hi, my name is Vit</h1>';
echo '<span class="image">';
echo '<img src="images/pic12.jpg" alt="" />';
echo '</span>';
echo '</header>';
echo '<div class="content">';
echo '<p>I am a Network Engineer and a Junior Sys Admin </p>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '';
echo '<!-- Main -->';
echo '<div id="main">';
echo '';
echo '<!-- Two -->';
echo '<section id="two">';
echo '<div class="inner">';
echo '<header class="major">';
echo '<h2>About me</h2>';
echo '</header>';
echo '<p>I am a IT enthusiast. I have worked from computer shops to MSP's. I am called a tinkerer by many who know me and that comes from my curiosity to know all. My skills range from Board repair to Cisco Networking and windows scripting.</p>';
echo '<ul class="actions">';
echo '<li><a href="whoami.html" class="button next">Find out more</a></li>';
echo '</ul>';
echo '</div>';
echo '</section>';
echo '';
echo '</div>';
echo '<!-- One -->';
echo '<section id="one" class="tiles">';
echo '<article>';
echo '<span class="image">';
echo '<img src="images/pic01.jpg" alt="" />';
echo '</span>';
echo '<header class="major">';
echo '<h3><a href="past.html" class="link">Past Projects</a></h3>';
echo '<p>What i have acompished in the past</p>';
echo '</header>';
echo '</article>';
echo '<article>';
echo '<span class="image">';
echo '<img src="images/RaspberryPi.jpg" alt="" />';
echo '</span>';
echo '<header class="major">';
echo '<h3><a href="current.html" class="link">Current Projects</a></h3>';
echo '<p>Things im currently working on</p>';
echo '</header>';
echo '</article>';
echo '<article>';
echo '<span class="image">';
echo '<img src="images/PepperTab.jpg" alt="" />';
echo '</span>';
echo '<header class="major">';
echo '<h3><a href="planned.html" class="link">Planned Projects</a></h3>';
echo '<p>Whats in the pipeline?</p>';
echo '</header>';
echo '</article>';
echo '<article>';
echo '<span class="image">';
echo '<img src="images/pic06.jpg" alt="" />';
echo '</span>';
echo '<header class="major">';
echo '<h3><a href="contact.html" class="link"></a>Contact Details</h3>';
echo '</header>';
echo '</article>';
echo '</section>';
echo '';
echo '<!-- Footer -->';
echo '<footer id="footer">';
echo '<div class="inner">';
echo '<p>Checkout my Github and Linkedin</p>';
echo '<ul class="icons">';
echo '<li><a href="http://www.github.com/vithusel" target="_blank" class="icon fa-github"><span class="label">GitHub</span></a></li>';
echo '<li><a href="http://www.linkedin.com/in/vithusel" target="_blank" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>';
echo '<p> This website is powered by Raspberry Pi 3 Apache webserver</p>';
echo '<p> Design is forked from HTML5UP with my own changes added</p>';
echo '</div>';
echo '</footer>';
echo '';
echo '</div>';
echo '';
echo '<!-- Scripts -->';
echo '<script src="assets/js/jquery.min.js"></script>';
echo '<script src="assets/js/jquery.scrolly.min.js"></script>';
echo '<script src="assets/js/jquery.scrollex.min.js"></script>';
echo '<script src="assets/js/skel.min.js"></script>';
echo '<script src="assets/js/util.js"></script>';
echo '<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->';
echo '<script src="assets/js/main.js"></script>';
echo '<!-- Login -->';
echo '<div id="id01" class="modal">';
echo '';
echo '<form class="modal-content animate" action="/action_page.php">';
echo '<div class="imgcontainer">';
echo '<span onclick="location.href='index.html'" class="close" title="Close Modal">&times;</span>';
echo '<img src="images/img_avatar2.png" alt="Avatar" class="avatar">';
echo '</div>';
echo '';
echo '<div class="container">';
echo '<label for="uname"><b>Username</b></label>';
echo '<input type="text" placeholder="Enter Username" name="uname" required>';
echo '';
echo '<label for="psw"><b>Password</b></label>';
echo '<input type="password" placeholder="Enter Password" name="psw" required>';
echo '';
echo '<button type="submit">Login</button>';
echo '</div>';
echo '';
echo '<div class="container" style="background-color:#242943">';
echo '<button type="button" onclick="location.href='index.html'" class="cancelbtn">Cancel</button>';
echo '<span class="psw">Forgot <a href="#">password?</a></span>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '';
echo '</body>';
echo '</html>';
?>