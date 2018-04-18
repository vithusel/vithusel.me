<!DOCTYPE php>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "current-mobile.php";
}
//-->
</script>
<style type="text/css">
::-webkit-scrollbar {
display: none;
}
</style>
<php>
  <head>
      <link rel="icon" href="images/logo.jpg">  
    <title>Planned Projects</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!--[if lte IE 8]><script src="assets/js/ie/php5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/login.css" />	
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  </head>
  <body>
        <!-- Header -->
          <header id="header">
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

  <!-- Main -->
          <div id="main" class="alt">

            <!-- One -->
              <section id="one">
                <div class="inner">
                  <header class="major">
                    <h1>Planned Projects</h1>
                  </header>
                  <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
                  <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
                </div>
              </section>

          </div>

<style>
body, php {
  height: 100%;
  margin: 0;
}

.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4{
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/PepperTab.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("images/android.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("images/pic12.jpg");
  min-height: 400px;
}

.bgimg-4 {
  background-image: url("images/pic12.jpg");
  min-height: 100%
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
        background-attachment: scroll;
    }
}
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">SCROLL DOWN</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Pepper Tab</h3>
  <p> This project is essentially a custom tablet built using a Raspberry Pi as its core. Unfortunately I have put this on hold for the moment purely due to cost of parts and lack of time to work on this. However this device would be able to run Raspbian and Android. There is still a lot of planning work to do prior to a first prototype since i would like functions such as GPS and networks (4G) to be available. Understandably this means i need to spend time considering hardware (if i want to solder directly to board) and if i am able to acompalish integrating hardware so that it is stable.</p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="font-size:25px;color: #f7f7f7;">Android modifications</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>I always want the latest software on my personal devices, Unfortunalty Android devices are not supported for as long as they last physically so i (where i can) modify my devices to ensure they are as up to date as possible.</p>
    <p>This involes things such as, Kernel Modifications, Android system modifications (Frameworks), System Tuning and debloating, Creating TWRP compatible Scripts with required checks (to avoid bricking).
	</div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div>

<div class="bgimg-4">
  <div class="caption">
    <span class="border">test!</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">COOL!</span>
  </div>
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