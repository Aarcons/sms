<!DOCTYPE html>
<html id="sms-index">
<head>
	<title>Sms</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="lib/animate-master/animate.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="lib/typed.js-master/lib/typed.min.js"> -->
	<!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
	<script src="lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
  	<script src="lib/waypoints-master/lib/jquery.waypoints.min.js"></script>
  	
  	<style type="text/css">
  		@font-face {
		  font-family: Raleway;
		  src: url(fonts/Raleway/Raleway-Regular.ttf);
		}
		h1,h2,h3,h4,h5,h6,p,li{
			font-family: Raleway;
		}
		#sms-index{
			scroll-behavior: smooth;
		}
  		#main-navbar .navbar-brand img{
  			height: 80%;
  			width: 80%;
  		}
  		#main-navbar{
  			position: absolute;
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
		    top: 38%;
		    right: 29.5%;
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
			/*0%{top: 25.5rem; right: 16rem; height: 1%; width: 1%;}
			50% {top: 13.5rem; right: 22.8rem; height: 3%; width: 3%;}
			100% {top: 25.5rem; right: 32.5rem; height: 1%; width: 1%;}*/
			0%{top: 70.5%; right: 20.5%; height: 1%; width: 1%;}
			50% {top: 36%; right: 29%; height: 3%; width: 3%;}
			100% {top: 70%; right: 41.5%; height: 1%; width: 1%;}
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
			background-color: #2474ae;
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
		#tabs .nav-tabs{
			border: none;
		}
		#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
			border: none;
		}
		#tabs .nav-tabs .nav-link:hover{
			border: none;
		}
		#tabs .nav-item .active{
			border-bottom: 3px solid #0c6eb5;
			color: #0c6eb5;
			font-weight: 700;
		}
		#tabs .nav-link{
			color: #000;
			font-weight: 500;
			font-size: 1.1rem;
			display: grid;
		}
		#tabs .icon-container {
			background-color: #e8f0f9;
			padding: 1rem 1.1rem;
			border-radius: 50%;
			border: 1px solid #2474ae;
		}
		#tabs .icon-container i{
			vertical-align: middle;
		}
		#tabs .nav-item .active .icon-container{
			background-color: #2474ae;
		}
		#tabs .nav-item .active .icon-container i{
			color: #fff;
		}
		#tabs .tab-content-container{
			border-bottom: 1px dashed #2474ae;
		}
		#tabs .tab-content li::marker{
			color: #2474ae;
			font-size: 1.3rem;
		}
		#testimonial .carousel-indicators{
			top: 9rem;
		}
		#testimonial .carousel-indicators li{
			background-color: #000;
		}
		#testimonial .carousel-inner i{
			vertical-align: super;
		}
		#testimonial .testimonial-container a i{
			font-size: 3rem;
		}
		#testimonial .testimonial-container a{
			width: 2%;
		}
		#contact-footer .contact-footer-container{
			background-color: #2d2d2d;
			color: #fff;
		}
		#contact-footer .contact-form .form-control{
			font-size: 0.9rem;
			border-radius: 0;
		}
		#contact-footer .contact-head{
			border-bottom: 1px solid #fff;
		}
		#contact-footer .contact-form .sb-btn{
			background-color: #2474ae;
			color: #fff;
			border-radius: 5px;
		}
		#contact-footer .contact-form .sb-btn:hover{
			opacity: 0.8;
		}
		#price-table .price-table-tb{
			/*border: 1px solid #000;*/
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.3);
		}
		#price-table .price-table-tb td{
			/*border: 1px solid #000;*/
			border-left: none;
			border-right: none;
		}
		#price-table .price-table-tb td h4{
			font-size: 1.2rem;
			font-weight: 700;
			text-transform: uppercase;
		}
		#price-table .price-table-tb td h5{
			font-size: 1rem;
			font-weight: 600;
		}
		#price-table .price-table-tb td h6{
			font-weight: 600;
			/*text-transform: uppercase;*/
		}
		#price-table .price-table-tb .right-border{
			/*border-right: 1px solid #000;*/
		}
		#price-table .price-table-tb .start-row{
			background-color: #008df9;
			border-top: none;
			/*border-radius: 5px 5px 0 0;*/
			color: #fff;
		}
		#price-table .price-table-tb .start-row img{
			height: 70%;
		}
		#price-table .price-table-tb .last-row{
			border-bottom: none;
		}
		#price-table .price-table-tb .alternate{
			background-color: #eee;
		}
		#price-table .price-tb-list li{
			list-style-image: url(images/correct.svg);
		}
		#price-table .price-tb-list li::marker{
			font-size: 1.8rem;
		}
		#price-table .price-tb-cont-bg {
			background-color: #f5fafe;
		}
		#price-table .price-table-tb .sb-btn{
			background-color: #2474ae;
			color: #fff;
		}
		#price-table .price-table-tb .sb-btn:hover{
			opacity: 0.8;
		}
		#hero-banner .content p{
			position: absolute;
			top: 9rem;
		}
		#contact-footer .copyright{
			background-color: #2d2d2d;
		}
		@media screen and (max-width: 768px){
			#tabs .nav-item .active{
				border-bottom: none!important;
			}
			#sms-accordion .row h5{
				font-size: 1rem;
			}
			#testimonial .carousel-indicators{
				top: 24rem;
			}
			#hero-banner .hero-img{
	  			height: 70%;
	  			width: 70%;
	  		}
	  		.animated-bg i{
	  			top: 61%;
	  			right: 44%;
	  		}
	  		#hero-banner .content p{
	  			position: unset;
	  		}
	  		#hero-banner .heading{
	  			height: 8rem;
	  			width: 100%;
	  		}
	  		#hero-banner .wave{
	  			height: 32px;
	  		}
	  		#hero-banner .message{
				display: none;	  			
	  		}
	  		#main-navbar .navbar-brand img{
	  			height: 100%;
	  			width: 100%;
	  		}
		}
  	</style>

</head>
<body>
	<section id="main-navbar">
		<nav class="navbar navbar-expand-lg p-0">
		  <a class="navbar-brand col-3 logo" href="#"><img src="images/aarcons.png"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fas fa-bars text-white p-2"></i></span>
		    </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  	<ul class="list-unstyled d-flex social-icon mb-0 navbar-nav ml-auto text-right ">
			  	<li class="mr-md-3 mr-2 nav-item dropdown"><a href="#tabs" class="text-white nav-item">Benefits</a></li>
			  	<li class="mr-md-3 mr-2 nav-item dropdown"><a href="#price-table" class="text-white nav-item">Pricing</a></li>
			  	<li class="mr-md-3 mr-2 nav-item dropdown"><a href="#testimonial" class="text-white nav-item">Testimonial</a></li>
			  	<li class="mr-md-3 mr-2 nav-item dropdown"><a href="#contact-footer" class="text-white nav-item">Contact Us</a></li>
			  </ul>
		  </div>
		</nav>
	</section>
	<section id="hero-banner">
		<div class="container-fluid p-md-5">
			<div class="row pt-5">
				<div class="col-md-5  pt-5 content">
					<div class="heading">
						<h2 class="pt-5 ml-3 text-white"><span id="typed"></span></h2>
					</div>
					<p class="text-justify ml-3 text-white">Our passion to work hard and deliver excellent results. It could solve the needs of your customers and develop innovation.</p>
				</div>
				<div class="col-md-7 mt-md-5">
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
	<section id="tabs">
		<div class="container-fluid pt-3 pl-0 pr-0">
			<h4 class="text-center">We power messages that encourage millions of users to take a next step, everyday. <hr class="divider"></h4>
			<div class="tab-content-container d-flex justify-content-center mt-5 pl-3 pr-3" id="tab-carousel">
				<ul class="nav nav-tabs d-flex justify-content-center">
					<li class="nav-item ">
						<a href="#notify" class="nav-link active mb-4 mb-md-0" data-toggle="tab" title="notify">
							<span class="text-center mb-4"><span class="icon-container"><i class="fas fa-bell"></i></span></span>Notify Customers
						</a>
					</li>
					<li class="nav-item">
						<a href="#confirm-transactions" class="nav-link mb-4 mb-md-0" data-toggle="tab" title="confirm-transactions"><span class="text-center mb-4"><span class="icon-container"><i class="far fa-check-circle"></i></span></span>Confirm Transactions</a>
					</li>
					<li class="nav-item">
						<a href="#drive-sales" class="nav-link mb-4 mb-md-0" data-toggle="tab" title="drive-sales"><span class="text-center mb-4"><span class="icon-container"><i class="fas fa-comments-dollar"></i></span></span>Drive Sales & Marketing</a>
					</li>
					<li class="nav-item">
						<a href="#two-factor" class="nav-link mb-4 mb-md-0" data-toggle="tab" title="two-factor"><span class="text-center mb-4"><span class="icon-container"><i class="fas fa-user-lock"></i></span></span>2-Factor Authentication</a>
					</li>
					<li class="nav-item">
						<a href="#fraud-prevention" class="nav-link mb-4 mb-md-0" data-toggle="tab" title="fraud-prevention"><span class="text-center mb-4"><span class="icon-container"><i class="fas fa-fingerprint"></i></span></span>Fraud Prevention</a>
					</li>
				</ul>
			</div>
			<div class="tab-content mb-5">
				<div class="container-fluid tab-pane active" id="notify">
					<div class="row">
						<div class="col-md-6 order-1 order-md-1">
							<div class="img-col d-flex justify-content-center pt-5">
								<img src="images/notify2.png" style="height: 100%; width: 100%;">
							</div>
						</div>
						<div class="col-md-6 p-md-5 pt-3 pt-md-0 order-2 order-md-2">
							<h4 class="text-center mb-3">Notify Customers</h4>
							<h6 class="mb-4">Integrate our SMS API to send time-critical reminders and notifications.</h6>
							<ul>
								<li>Provide timely notifications about pending appointments, arrivals, and more so your customers stay engaged.</li>
								<li>You can allow a customer to confirm or reschedule an appointment or delivery from a text message - via SMS, MMS or voice.</li>
								<li>Enhanced multimedia features can be an opportunity to create those "wow" moments that strengthen customer relationships.</li>
								<li>Reduce missed appointments, delivery attempts, and support costs with automated notifications.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container-fluid tab-pane" id="confirm-transactions">
					<div class="row">
						<div class="col-md-6 p-md-5 pt-3 pt-md-0 order-2 order-md-1">
							<h4 class="text-center mb-3">Confirm Transactions</h4>
							<h6 class="mb-4">Send purchase receipts, ticket information, and order confirmations via an SMS message.</h6>
							<ul>
								<li>Get notifications either your order placed or not</li>
								<li>Stay connected with your Respective Bank through our SMS Alert and Request Facility</li>
								<li>Get your movie ticket and updated news through SMS alert</li>
								<li>Cancellation and confirmations alert</li>
							</ul>
						</div>
						<div class="col-md-6 order-1 order-md-2">
							<div class="img-col d-flex justify-content-center pt-5">
								<img src="images/confirm-transaction.png" style="height: 100%; width: 100%;">
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid tab-pane" id="drive-sales">
					<div class="row">
						<div class="col-md-6 order-1 order-md-2">
							<div class="img-col d-flex justify-content-center pt-5">
								<img src="images/marketing.png" style="height: 80%; width: 80%;">
							</div>
						</div>
						<div class="col-md-6 p-md-5 pt-3 pt-md-0 order-2 order-md-2">
							<h4 class="text-center mb-3">Drive Sales and Marketing</h4>
							<h6 class="mb-4">With high conversion rates, increase sales with SMS marketing campaigns.</h6>
							<ul>
								<li>Advertise your products with SMS campaigns to approach your new or existing customers.</li>
								<li>Increase your sales and drive your business to the next level</li>
								<li>Grow your business</li>
								<li>We Provide Awesome Services</li>
								<li>Exclusive design</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container-fluid tab-pane" id="two-factor">
					<div class="row">
						<div class="col-md-6 p-md-5 pt-3 pt-md-0 order-2 order-md-1">
							<h4 class="text-center mb-3">2-Factor Authentication</h4>
							<h6 class="mb-4">Time-based one-time passwords and SMS PIN codes for 2FA in a single API.</h6>
							<ul>
								<li>One of the most simple and convenient ways to combat on-line fraud.</li>
								<li>2FA provides a huge amount of protection for important accounts like your email, social media, and bank accounts.</li>
								<li>2FA puts users in control of how they verify their identity.</li>
								<li>Your business deserves best software</li>
							</ul>
						</div>
						<div class="col-md-6 order-1 order-md-2">
							<div class="img-col d-flex justify-content-center pt-5">
								<img src="images/two-factor.png" style="height: 90%; width: 90%;">
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid tab-pane" id="fraud-prevention">
					<div class="row">
						<div class="col-md-6 order-1 order-md-2">
							<div class="img-col d-flex justify-content-center pt-5">
								<img src="images/fraud-prevention.png" style="height: 80%; width: 80%;">
							</div>
						</div>
						<div class="col-md-6 p-md-5 pt-3 pt-md-0 order-2 order-md-1">
							<h4 class="text-center mb-3">Fraud Prevention</h4>
							<h6 class="mb-4">Industry-standard algorithms, approved IP addresses, & secure HTTPS API connections.</h6>
							<ul>
								<li>Trigger SMS, push, and voice notifications from account databases and fraud detection systems using the Azmarq API.</li>
								<li>Automate SMS and voice notifications such as password resets, low balance alerts, bill reminders, suspicious activity warnings, and other account changes for customers in countries around the world. Handle customer responses using two-way SMS or IVR.</li>
								<li>Shut down fraud faster and allow your customers to easily manage their account with SMS.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="message-about">
		<div class="container-fluid message-about-cont">
			<div class="row">
				<div class="col-md-6 pt-5 pb-5">
					<h4 class="text-center ">SMS MARKETING AND ALERTS MADE EASY<hr class="divider"></h4>
					<div class="accordion pl-md-4 pr-md-4" id="sms-accordion">
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
					<div class="img-div d-flex justify-content-center pt-5">
						<img src="images/message3.png" style="height: 65%; width: 65%;">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="testimonial">
		<div class="container-fluid pb-5 mb-3">
			<h4 class="text-center mt-5">What Our Client Say <hr class="divider"></h4>
			<div class="container mb-5 testimonial-container">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner mb-5 pl-md-5 pr-md-5">
				    <div class="carousel-item active">
			            <p class="text-center"><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
			            <i class="fas fa-quote-right"></i></p>
				    </div>
				    <div class="carousel-item">
			            <p class="text-center"><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="fas fa-quote-right"></i></p>
				    </div>
				    <div class="carousel-item">
			            <p class="text-center"><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="fas fa-quote-right"></i></p>
				    </div>
				  </div>
				  	<ol class="carousel-indicators">
			          <li data-target="#quote-carousel" data-slide-to="0" class="active">
			          </li>
			          <li data-target="#quote-carousel" data-slide-to="1">
			          </li>
			          <li data-target="#quote-carousel" data-slide-to="2">
			          </li>
			        </ol>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class=""><i class="fas fa-angle-left text-dark"></i></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class=""><i class="fas fa-angle-right text-dark"></i></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>		
			</div>
		</div>
	</section>
	<section id="price-table">
		<div class="container-fluid pb-5 pt-5 price-tb-cont-bg">
			<h4 class="text-center mb-4">Simple, Flexible Bulk Sms Pricing <hr class="divider"></h4>
			<div class="row">
				<div class="col-md-6">
					<div class="price-table-tb container pl-0 pr-0">
						<table class="container">
							<tr class="col-md-5">
								<td class="text-center p-2 mb-0 right-border start-row"><h4 class="mb-0">SMS Bundle</h4></td>
								<td class="text-center p-2 mb-0 right-border start-row"><h4 class="mb-0">Price Per SMS</h4></td>
								<td class="text-center p-2 mb-0  start-row"><h4 class="mb-0">Bundle Price</h4></td>
							</tr>
							<tr class="col-md-5">
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">10 Sms</h5></td>
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">FREE</h5></td>
								<td class="text-center p-2 mb-0 "><h5 class="mb-0">FREE</h5></td>
							</tr>
							<tr class="col-md-5 alternate">
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">10,000 Sms</h5></td>
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">18p/sms</h5></td>
								<td class="text-center p-2 mb-0 "><h5 class="mb-0">₹ 1800</h5></td>
							</tr>
							<tr class="col-md-5 ">
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">20,000 Sms</h5></td>
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">16p/sms</h5></td>
								<td class="text-center p-2 mb-0"><h5 class="mb-0">₹ 3200</h5></td>
							</tr>
							<tr class="alternate">
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">50,000 Sms</h5></td>
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">15p/sms</h5></td>
								<td class="text-center p-2 mb-0"><h5 class="mb-0">₹ 7500</h5></td>
							</tr>
							<tr class="">
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">1 Lakh Sms</h5></td>
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">13.5p/sms</h5></td>
								<td class="text-center p-2 mb-0"><h5 class="mb-0">₹ 13500</h5></td>
							</tr>
							<tr class="alternate">
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">Above 1 Lakh Sms</h5></td>
								<td class="text-center p-2 mb-0 right-border"><h5 class="mb-0">-</h5></td>
								<td class="text-center p-2 mb-0"><h5 class="mb-0"><a href="#contact-footer" class="sb-btn btn">Contact Sales</a></h5></td>
							</tr>
							<tr class="">
								<td class="text-center p-2 mb-0 last-row"><h6 class="mb-0">*GST applicable on all prices.</h6></td>
								<td class="text-center p-2 mb-0 last-row"></td>
								<td class="text-center p-2 mb-0 last-row"></td>
							</tr>
						</table>
					</div>
					<h6 class="pt-3">SMS bundle prices are inclusive of 2.5paisa per SMS DLT scrubbing charges.</h6>	
				</div>
				<div class="col-md-6">
					<h5 class=" text-center mt-4">Pay As You Go. No Hidden Setup Fees.</h5>
					<ul class="price-tb-list ml-3">
						<li>Lifetime Validity for SMS Credits</li>
						<li>Credits can be used for both Promotional & Transactional SMS</li>
						<li>Free access to web portal & SMS APIs</li>
					</ul>
					<p class="text-justify">Open up an easy, cost-effective 2-way communication channel with your customers and  prospects. Increase sales and customer satisfaction with smarter SMS campaigns, instant OTPs, notifications, and other award winning bulk SMS services. See how businesses are using bulk messaging to send crisis comms and go digital during COVID-19.</p>
				</div>
			</div>
			
		</div>
	</section>
	<section id="contact-footer">
		<div class="container-fluid contact-footer-container p-md-5 pt-4 pl-3 pr-3">
			<div class="row">
				<div class="col-md-4">
					<img src="images/aarcons.png" style="height: 3rem; ">
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
				</div>
				<div class="col-md-4">
					<h5 class="contact-head mb-3 pb-2">Contact Us</h5>
					<div class="form-div mb-5 mb-md-0">
						<form method="post" class="contact-form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your Name" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email Id" required>
							</div>
							<div class="form-group">
								<input type="tel" name="phone" class="form-control" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$" placeholder="Phone No." required>
							</div>
							<div class="form-group">
								<input type="text" name="subject" class="form-control" placeholder="Subject" required>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
							</div>
							<div class="d-flex justify-content-center">
								<button type="submit" class="btn sb-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<h5 class="ml-md-4 contact-head mb-3 pb-2">Get in Touch</h5>
					<div class="container-fluid ml-md-3">
						<div class="row">
							<div class="col-1">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="col-10 col-md-11">
								<p>Gyanodaya Campus, Gram: Kanawati, Neemuch (M.P) - 458441</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-10 col-md-11">
								<p>+91 7566075707</p>
							</div>
						</div>
						<div class="row">
							<div class="col-1">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="col-10 col-md-11">
								<p>aarambhnmh@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center copyright text-white p-2" style="border-top: 0.1px solid #fff;">
		&copy This Website is Copyrighted to <b>Aarambh E-Services Pvt. Ltd.</b><br>Designed and Developed By <a href="http://aarcon.in">Team Aarcons</a> (All Rights Reserved)
		</div>
	</section>
</body>
	<script src="lib/popperjs-1.16.0/javascript/popper.min.js"></script>
	<script src="lib/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script src="lib/typed.js-master/lib/typed.min.js"></script>
	<!-- <script type="text/javascript">
		var i = 0;
		var txt = "Manage your business communications in one place.";
		var z = 100;
		function typewriter(){
			if(i<txt.length){
				document.getElementById("type").innerHTML += txt.charAt(i);
				i++;
				setTimeout(typewriter, z);
			}
		}
		window.onload(typewriter());
		
		

	</script> -->
	<script type="text/javascript">
		 var typed2 = new Typed('#typed', {
		    strings: ['Scrub SMS', 'APIs Messaging', 'Transactional SMS','OTP SMS', 'Promotional SMS'],
		    typeSpeed: 80,
		    backSpeed: 50,
		    backDelay: 1500,
    		startDelay: 1000,
		    fadeOut: true,
		    loop: true,
		    cursorChar: "",
		  });

	</script>
	<script type="text/javascript">
		var tabChange = function() {
		  var tabs = $(".nav-tabs > li");
		  var active = tabs.filter(".active").removeClass("active");
		  var next = active.next("li").length
		    ? active.next("li")
		    : tabs.filter(":first-child")
		  next.addClass("active").find("a").tab("show")
		};
		var tabCycle = setInterval(tabChange, 2000);
		$(function() {
		  $(".nav-tabs a").click(function(e) {
		    e.preventDefault();
		    $(".nav-tabs .active").removeClass("active")
		    clearInterval(tabCycle);
		    $(this).tab("show");
		    $(this).parent().addClass("active");
		    setTimeout(function() {
		      tabCycle = setInterval(tabChange, 2000);
		    }, 5000);
		  });
		});

	</script>
</html>