<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="mobile-web-app-capable" content="yes">
	<title>Rolling News</title>
	 <!--Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\rolling news\fontawesome-free-5.10.2-web\css\all.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	
	 <!--load font awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
</head>
<style type="text/css">
	/* social icons */
 #social-icon1.fa:hover {
    opacity: 0.7;
    color: white;
}

.fa-facebook {
	background-color: #3B5998;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

.fa-twitter {

	background-color: #55ACEE;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

.fa-google {

	background-color: #dd4b39;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

.fa-linkedin {
	background-color: #007bb5;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

.fa-youtube {
	background-color: #bb0000;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

.fa-instagram {
	background-color: #125688;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

.fa-pinterest {
	background-color: #cb2027;
	font-size: 10px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}

/*query-btn*/
.query-btn{
	background-color: black;
	color: white;
	padding: 2px 2px 2px 2px;
	border: 2px solid black;
	border-radius: 60px;
	margin-left: 20px;
	font-size: 60px;
	
}

.fa-book{
	background-color: #000;
	font-size: 30px;
    border-radius: 60px;
    padding: 6px 6px;
  color: white;
}
.fa-phone{
	background-color: #000;
	font-size: 30px;
    border-radius: 60px;
    padding: 6px 6px;
    margin-left: 5px;
  color: white;
}
/*search button*/
input.form-control{
	width: 35%;
  padding: 2px 0px;
  margin: 20px 0px 0px 10px;
  display: inline-block;
  border: 1px solid #000;
  box-sizing: border-box;
}
.btn2{
  color: white;
  background-color: black;
  margin : 13px 0 0 3px;
  height: 40px;
  width: auto;
  border-radius: 32px;
}

#icon-bar{
	background-color: #000;
	font-size: 30px;
	padding: 6px 6px;
  color: white;
  float: right;
}

/*news section*/
#news-section a{
   color: black;
}

/* Style the tab */
#tabs-rolling {
  float: left;
  border: 1px solid #ccc;
  background-color: #000;
  width: 30%;
  height: 550px;
}

/* Style the buttons inside the tab */
#tabs-rolling button {
  display: block;
  background-color: #fff;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
#tabs-rolling button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
#tabs-rolling button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  background-color: #000;
  color: #fff;
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 550px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.tabcontent p{
  text-align : center;
}

/*footer*/
#footer-bar{
 background-color: black;
 color: #fff;
 text-align: center;
}

/*Form css*/

/*code for top corner button*/
input {
  
    width: 85%;
    padding: 2px 0px;
    margin: 10px 10px 10px 10px;
    display: inline-block;
    border: 1px solid #000;
    box-sizing: border-box;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */


.close {
  position: absolute;
  right: 15px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
/*markquee*/
.linking{
    color: white;
}
.linking:hover{
    color: gray;
}
.btnmove{
    border-left: 55px solid black;
    border-right: 55px solid black;
    border-radius: 65%;
    color: black;
}
.btnmove a{
  color: black;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/*slide menu*/
  /* The Overlay (background) */
.overlay {
  /* Height & width depends on how you want to reveal the overlay (see JS below) */   
  height: 100%;
  width: 0;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  background-color: rgb(0,0,0); /* Black fallback color */
  background-color: rgba(0,0,0, 0.7); /* Black w/opacity */
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
  position: relative;
  top: 25%; /* 25% from the top */
  width: 100%; /* 100% width */
  text-align: center; /* Centered text/links */
  margin-top: 5px; /* 30px top margin to avoid conflict with the close button on smaller screens */
}

/* The navigation links inside the overlay */
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 16px;
  color: #fff;
  display: block; /* Display block instead of inline */
  transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
  color: #fff;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (min-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 10%;
  }
  .query-btn{
    font-size: 10px;
  }
  .responsive-img{
  width: 300px;
  justify-content: center;
 }
 .modal-content {
  background-image: url(img/mobform.png);
  background-repeat: no-repeat;
  background-color: #fefefe;
  margin: 5% auto 0 auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 70%; /* Could be more or less, depending on screen size */
  height: 460px;
}
}

/*navbar starting*/

.topnav {
  overflow: hidden;
  background-color: #000;
  color: #fff;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}







/*Media Query*/
@media (max-width: 425px) {
	#social-icon1{
		display: none;
	}
	#post-query{
		background-color: #000;
	}
	.query-btn{
    font-size: 10px;
  }
   .topnav{
    display: none;
   }
   
	/* Style the tab */
#tabs-rolling {
  float: left;
  border: 1px solid #ccc;
  background-color: #000;
  width: 50%;
  height: 480px;
}

/* Style the buttons inside the tab */
#tabs-rolling button {
  display: block;
  background-color: #fff;
  color: black;
  padding: 12px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
#tabs-rolling button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
#tabs-rolling button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  background-color: #000;
  color: #fff;
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 50%;
  border-left: none;
  height: 480px;
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.tabcontent p{
  text-align : center;
}
}


// Extra large devices (large desktops, 1200px and up)
@media (max-width: 1200px) {
   .fa-bars{
          display: none;
   }
   .modal-content {
  background-image: url(img/form.jpg);
  background-repeat: no-repeat;
  background-color: #fefefe;
  margin: 5% auto 0 auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 70%; /* Could be more or less, depending on screen size */
  height: 430px;
}

}



</style>
<body>
	<!-- header -->
<header>
	<div id="header">
		<div class="container-fluid header-section">
			<div class="row">
				<div class="col" id="social-icon1">
				<a href="https://www.facebook.com/Rolling-News-111521570189329/P" class="fa fa-facebook" ></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="https://www.linkedin.com/in/rolling-news-615b42190/" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-pinterest"></a><br>
                    
                    <form class="form-inline" action="/action_page.php">
    <input class="form-control" type="text" placeholder="What You Are Looking?">
    <button class="btn2" type="submit">Search</button>
  </form>
				</div>
				<div class="col" id="logo" style="margin-left: 15px;">
				<a href="http://rollingnews.in/"><img src="img/logo-rolling.jpg" alt="logo" class="responsive-img"></a>	
				</div>
				<div class="col" id="post-query">
					<a href="img/imgdik.jpg" class="fa fa-book"></a>
					<a href="" class="fa fa-phone" id="phn"></a>
					<button class="query-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Post Your Buy Requirement</button>
					<!--<a onclick="document.getElementById('id01').style.display='block'" class="fa fa-bars" id="icon-bar"></a>-->
					
					 <!-- slide menu -->
					<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="#">TMT Manufacturers</a>
    <a href="#"> Lubrication</a>
    <a href="#"> Hydraulics</a>
    <a href="Workshop-Machinery.html"> Workshop Machinery</a>
    <a href="Furnace-Manufacturers.html">Furnace Manufacturers</a>
  <a href="#">Rolling Mill Consultants</a>
  <a href="#">Steel traders</a>
 <a href="#">Bearings</a>
 <a href="Forging-Casting.html">Forging & Casting</a>
  </div>

</div>

<a onclick="openNav()" class="fa fa-bars" id="icon-bar"></a>
<!--slide menu end-->
					
					<div id="id01" class="modal">
  
                         <form class="modal-content animate"action="mail_handler.php" method="post">
                        <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          </div>
          
                       <h3 style="margin: 36px 0 0 5px;">TELL US <br> What Is Your Requirement?</h3>

                           <div class="container1">
    
                          	
			
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
		
			<input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
			
			<input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
			
			<input name="msg" class="inp" placeholder="Your requirement" required><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		
  
  

                                </form></div>
                                
					
				</div>
			</div>
		</div>
	</div>
</header>


<!-- navbar start -->
<div  class="topnav" id="myTopnav">
 
  <a  onclick="document.getElementById('id01').style.display='block'"><i></i>TMT Manufacturers</a> 
  <a onclick="document.getElementById('id01').style.display='block'"><i></i>Lubrication</a> 
  <a onclick="document.getElementById('id01').style.display='block'"><i></i>Hydraulics</a>  
  <a href="Workshop-Machinery.html"><i></i>Workshop Machinery</a>
  <a  href="Furnace-Manufacturers.html"><i></i>Furnace Manufacturers</a>
  <a  onclick="document.getElementById('id01').style.display='block'"><i></i> Rolling Mill Consultants</a>
  <a onclick="document.getElementById('id01').style.display='block'"><i></i>Steel traders</a>
  <a  onclick="document.getElementById('id01').style.display='block'"><i></i>Bearings</a>
  <a href="Forging-Casting.html">Forging & Casting</a>


</div>
<!-- end navbar -->
<!-- banner -->

<section id="banner">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/Nav bharat.jpg" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item">
      <img src="img/flying1.jpg" class="d-block w-100" alt="img2">
    </div>
  </div>
</div>
</section>

<!-- news section -->
<section id="news">
	<!-- News section -->
      <h2 style="text-align: center;">NEWS</h2><marquee class="btnmove" behavior="scroll" align="middle" direction="left"  onmouseover="this.stop()" onmouseout="this.start()"><< <a  class="linking" href="www.beloitdailynews.com/news/20190712/hot_humid_weather_rolling_in/">HOT, HUMID WEATHER ROLLING IN</a> >> <a class="linking" href="https://www.capitalsteel.net/news/blog/hot-and-cold-rolling-explained/"> >> HOT AND COLD ROLLING EXPLAINED</a> << <a class="linking" href="https://thethaiger.com/hot-news/events/tanks-rolling-into-bangkok-today-but-not-a-coup-army-2/"> >> BANGKOKTanks rolling into Bangkok today but not a coup! – Army << </a>
</marquee>
<!-- end news section -->
</section>


<!-- tabs section -->

<div class="container-fluid" id="tabs-rolling">
  <button class="tablinks" onclick="openCity(event, 'rolling')" id="defaultOpen">Rolling News</button>
  <button class="tablinks" onclick="document.getElementById('id01').style.display='block'">Join Free</button>
  <button class="tablinks" onclick="openCity(event, 'why')">Why Rolling News</button>
   <button class="tablinks" onclick="openCity(event, 'dealer')">Dealers</button>
    <button class="tablinks" onclick="openCity(event, 'launge')">Lounge</button>
     <button class="tablinks" onclick="openCity(event, 'employee')">Employee</button>
     <button class="tablinks" onclick="openCity(event, 'requirement')">Requirement</button>
</div>

<div id="rolling" class="tabcontent">
  <h3>Rolling News</h3>
  
</div>

<div id="why" class="tabcontent">
  <h3>Why Rolling News</h3>
   
</div>

<div id="join" class="tabcontent">
  <h3></h3>
  
</div>
<div id="dealer" class="tabcontent">
  <h3>Dealer</h3>
 
</div>

<div id="launge" class="tabcontent">
  <h3>Lounge</h3>
  
</div>

<div id="employee" class="tabcontent">
  <h3>Employee</h3>
  
</div>

<div id="requirement" class="tabcontent">
  <h3>Requirement</h3>
   
</div>

<!-- Footer -->
<footer>
  <div id="footer-bar"> <p>Appstar © Copyright 2019. All Rights Reserved.</p></div>
</footer>

<!--Phone Number -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
    $("#phn").click(function(){
    alert("Contact Us :  +91-9005701701.");
  });
});
 </script>



<!--slide menu scripts-->
<script type="text/javascript">
  /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<!-- tab Scripts -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>