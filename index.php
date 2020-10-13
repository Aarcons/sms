<!DOCTYPE html>
<html>
<head>
	<title>Sms</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="lib/animate-master/animate.min.css">
	<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="lib/animate-master/animate.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<script src="lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
  	<script src="lib/waypoints-master/lib/jquery.waypoints.min.js"></script>
  	<style type="text/css">
  		@font-face {
		  font-family: Raleway;
		  src: url(fonts/Raleway/Raleway-Regular.ttf);
		}
		h1,h2,h3,h4,h5,h6{
			font-family: Raleway;
		}
  		#main-navbar .navbar-brand img{
  			height: 80%;
  			width: 80%;
  		}
  		#main-navbar{
  			position: fixed;
  			z-index: 5
  		}
  		#hero-banner .hero-img{
  			height: 57%;
  			width: 57%;
  		}
  		#hero-banner .container-fluid{
  			background-color: #2273ae;
  			position: relative;
  		}
  		.animated-bg{
		  opacity: 0.4;
		}
		.animated-bg i {
		    top: 14rem;
		    right: 23.5rem;
		    position: absolute;
		    height: 50px;
		    width: 50px;
		    border-radius: 100%;
		    opacity: 0.3;
		    background: #fff;
		    -webkit-box-shadow: 0 15px 30px 0 #f3c4c3;
		    box-shadow: 0 15px 30px 0 #f3c4c3;
		    -webkit-transform: scale(1.3);
		    transform: scale(1.3);
		    -webkit-animation: ripple1 3s linear infinite;
		    animation: ripple1 3s linear infinite;
		}
		.animated-bg i:nth-child(2) {
		  -webkit-animation: ripple2 3s linear infinite;
		  animation: ripple2 3s linear infinite;
		}
		.animated-bg i:nth-child(3) {
		  -webkit-animation: ripple3 3s linear infinite;
		  animation: ripple3 3s linear infinite;
		}
		@keyframes ripple1{
		  0% {transform: scale(5.5); opacity: 0.3;}
		  100% {transform: scale(8.5); opacity: 0.0;}
		}
		@keyframes ripple2{
		  0% {transform: scale(3.5);}
		  100% {transform: scale(5.5);}
		}
		@keyframes ripple3{
		  0% {transform: scale(1.5);}
		  100% {transform: scale(3.5);}
		}
		#hero-banner .wave-area{
			height: 5%;
			width: 100%;
			position: absolute;
			bottom: 0;
			left: 0;
			background: #fff;
			z-index: 1;
		}
		#hero-banner .wave{
			background-image: url(images/wave.svg);
			background-repeat: repeat-x;
			position: absolute;
			bottom: 0;
			width: -webkit-fill-available;
			height: 100px;
			animation: wave 35s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
			transform: translate3d(0, 0, 0);
		}
		#hero-banner .wave:nth-of-type(2){
			bottom: 1rem;
			animation: wave 20s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
			opacity: 1;
		}
		@keyframes wave{
			0% {margin-left: 0;}
			100% {margin-left: -1600px;}
		}
		#hero-banner .message{
			position: absolute;
			animation: send 15s linear infinite;
			transform: translate3d(0, 0,0);
			top: 20rem;
			right: 1rem;
			z-index: 10;
			animation-fill-mode: forwards;
			background-image: url(images/message.png);
			height: 5%;
			width: 5%;
			background-size: contain;
			background-repeat: no-repeat;
		}
		@keyframes send{
			0%{top: 25.5rem; right: 16rem; height: 1%; width: 1%;}
			50% {top: 13.5rem; right: 22.8rem; height: 3%; width: 3%;}
			100% {top: 25.5rem; right: 32.5rem; height: 1%; width: 1%;}
		}
		.divider{
			background: #000;
			height: 0.1rem;
			width: 3rem;
		}
		#sms-accordion .row .counts{
			background-color: #fff0;
			border: 1px solid #cee1f8;
			color: #5e2ced;
			border-radius: 50%;
			vertical-align: middle;
			line-height: 0;
			padding: 0.8rem;
		}
		#sms-accordion .card-header{
			padding: 0.8rem;
		}
		#sms-accordion .row h5{
			vertical-align: middle;
			line-height: 1.5;
			font-size: 1.2rem;
		}
		#sms-accordion .card-header{
			background-color: #fff;
		}
		#sms-accordion .card-header:hover{
			background-color: #f5f5f5;
		}
		#sms-accordion .card-header:focus-within{
			background-color: #5e2ced;
		}
		#sms-accordion .card-header:focus-within h5{
			color: #fff!important;
		}
		#sms-accordion .card-header:focus-within .counts{
			background-color: #fff;
		}
		#sms-accordion .card-header .btn-link:hover{
			text-decoration: none;
		}
		#sms-accordion .card-header .btn-link:focus{
			text-decoration: none;
		}
		#message-about .message-about-cont{
			background-color: #f5fafe;
		}
  	</style>

</head>
<body>
	<section id="main-navbar">
		<nav class="navbar p-0">
		  <a class="navbar-brand col-3 logo" href="#"><img src="images/aarcons.png"></a>
		  <ul class="list-unstyled d-flex social-icon mb-0">
		  	<li class="mr-md-3 mr-2"><a href="#" class="text-white">About Us</a></li>
		  	<li class="mr-md-3 mr-2"><a href="#" class="text-white">Contact Us</a></li>
		  </ul>
		</nav>
	</section>
	<section id="hero-banner">
		<div class="container-fluid p-5">
			<div class="row pt-5">
				<div class="col-md-5 mt-5 pt-5">
					<h2 class="pt-5 ml-3 text-white">Manage your business communications in one place.</h2>
					<p class="text-justify ml-3 text-white">Our passion to work hard and deliver excellent results. It could solve the needs of your customers and develop innovation.</p>
				</div>
				<div class="col-md-7 mt-5">
					<div class="justify-content-center d-flex pt-5 mt-5">
						<img src="images/tower3.png" class="hero-img">
					</div>
				</div>
			</div>
			<div class="animated-bg"> 
			  <i></i> 
			  <i></i> 
			  <i></i> 
			</div>
			<div class="message">

			</div>
			<div class="wave-area">
				<div class="wave">
					
				</div>
				<div class="wave">
					
				</div>
			</div>
		</div>
	</section>
	<section id="message-about">
		<div class="container-fluid message-about-cont">
			<div class="row">
				<div class="col-md-6 pt-3 pb-3">
					<h3 class="text-center">SMS MARKETING AND ALERTS MADE EASY<hr class="divider"></h3>
					<div class="accordion" id="sms-accordion">
					  <div class="card">
					    <div class="card-header" id="sms-ac-1">
					      <h2 class="mb-0">
					        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#sms-ac-1-1" aria-expanded="true" aria-controls="sms-ac-1-1">
					        	<div class="row">
					        		<span class="counts">1</span>
			          				<h5 class="text-dark mb-0 ml-3">SIX CHARACTER SENDER ID</h5>
					        	</div>
					        </button>
					      </h2>
					    </div>
					
					    <div id="sms-ac-1-1" class="collapse" aria-labelledby="sms-ac-1" data-parent="#sms-accordion">
					      <div class="card-body">
					        We offer unrestricted 6 characters lengthy and alphabetic dispatcher or sender ID within our Transactional SMS portal.
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="sms-ac-2">
					      <h2 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#sms-ac-2-1" aria-expanded="false" aria-controls="sms-ac-2-1">
					          <div class="row">
					          	<span class="counts">2</span>
					          	<h5 class="text-dark mb-0 ml-3">GROUP MESSAGING</h5>
					          </div>
					        </button>
					      </h2>
					    </div>
					    <div id="sms-ac-2-1" class="collapse" aria-labelledby="sms-ac-2" data-parent="#sms-accordion">
					      <div class="card-body">
					        You can spare your gathering contacts number in our panel, and send bulk SMS to your own spared assemble at whatever time.
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="sms-ac-3">
					      <h2 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#sms-ac-3-1" aria-expanded="false" aria-controls="sms-ac-3-1">
					          <div class="row">
					          	<span class="counts">3</span>
					          	<h5 class="text-dark mb-0 ml-3">DELIVERY REPORTS</h5>
					          </div>
					        </button>
					      </h2>
					    </div>
					    <div id="sms-ac-3-1" class="collapse" aria-labelledby="sms-ac-3" data-parent="#sms-accordion">
					      <div class="card-body">
					      Our software will endow with you with instant Detailed Delivery Reports to find the delivery status of a scrupulous number.					       </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="sms-ac-4">
					      <h2 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#sms-ac-4-1" aria-expanded="false" aria-controls="sms-ac-4-1">
					          <div class="row">
					          	<span class="counts">4</span>
					          	<h5 class="text-dark mb-0 ml-3">CONTROL PANEL</h5>
					          </div>
					        </button>
					      </h2>
					    </div>
					    <div id="sms-ac-4-1" class="collapse" aria-labelledby="sms-ac-4" data-parent="#sms-accordion">
					      <div class="card-body">
					      Our online control panel is completely attributed which helps you to manage your account independent of time and place.				         </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-6 pt-3 pb-3">
					<div class="img-div d-flex justify-content-center">
						<img src="images/group-chat.png" style="height: 100%; width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
	<script src="lib/popperjs-1.16.0/javascript/popper.min.js"></script>
	<script src="lib/bootstrap-4.4.1/js/bootstrap.min.js"></script>
</html>