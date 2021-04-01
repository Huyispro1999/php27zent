<?php

	include 'welcome.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- CSS only -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	
	<style>
		.navbar-brand{
			font-weight: bold;
			font-family: monospace;
			font-size: 28px;
		}
		.navbar-dark .navbar-nav .nav-link{
			font-size: 14px;
			font-weight: 700;
		}
		.navbar-dark .navbar-nav .nav-item{
			margin: 0 15px;
		}
		.background{
			
			background-image: url(../images/bg-masthead.jpg);
			background-size: cover;
			height: auto;
			
		}
		.bg-dark{
			background-color: transparent;
		}
		.row h1{
			font-size: 55px;
			text-align: center;
			padding-top: 4%;
		}
		.btn1{
			background-color: #ff5722;
			color: white;
			border-radius: 15px;
			border-color: #ff5722;
			margin-bottom: 5%;
		} 
		.background1{
			background-color: #ff5722e0;
			color: white;
		}
		.btn2{
			background-color: white;
			color: black;
			border-radius: 15px;
			border-color: white;
			margin-bottom: 5%;
		} 
		.icon{
			font-size: 45px;
			color: orange;
		}
		.gallary{
			padding-left: 0;
			padding-right: 0;
			
			border: 1px solid white;
		}
		.background2{
			background-color: black;
			color: white;
		}
		.icon2{
			font-size: 30px;
		}
		.contact:hover{
			color: orange;
			cursor: pointer;
		}
		p:hover{
			transform: scale(1.07);
			color: #0f25a0;
			cursor: pointer;
		}
		.gallary:hover img{
			transform: scale(1.009);
			cursor: pointer;

		}
		h4:hover{
			color: red;
			cursor: pointer;
		}
		.navbar-dark .navbar-brand:hover{
			
			color: black;
			background-color: white;
			border-radius: 11px;
			opacity: 0.5;
		}
		.navbar-dark .navbar-nav .nav-link:hover{
			/*color: violet;*/
			background-color: white;
			border-radius: 10px;
			opacity: 0.7;
			color: black;
		}
		
	</style>
</head>
<body>
	<div class="container-fluid background">
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark ">
  	<div class="container-fluid">
    <a class="navbar-brand" href="#">START BOOTSTRAP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- col-auto starts -->
    <div class="col-auto">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="#">SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="#">PORTFOLID</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="#">CONTACT</a>
        </li>
    </ul>
    </div>
    <!-- col-auto ends -->
    </div>
  </div>
</nav>
	<div class="row text-light">
		<h1>YOUR FAVORITE SOURCE OF FREE BOOTSTRAP THEMES</h1>
		<hr style="height: 4px;background-color: orange;width: 10%">
		<p align="center" style="font-size: 30px;padding-top: 1%">Start bootstrap can help you build better website using the Bootstrap CSS framework just download your template and strat going,no string attached</p>
		<div class="container text-center"><button type="button" class="btn btn-primary btn-lg btn1">FIND OUT MORE</button></div>
	</div>
</div>
</div>
<div class="container-fluid background1">
	<div class="container">
	<h3 align="center" style="padding-top: 5%">We 've got what you need !</h3>
	<hr style="height: 4px;background-color: white;width: 8.8%">
	<p align="center" style="font-size: 30px;padding-top: 1%">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open-source,free to download,and easy to use.No strings attached</p>
	<div class="container text-center"><button type="button" class="btn btn-primary btn-lg btn2">GET STARTED!</button></div>
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<h3 align="center" style="padding-top: 4%">At Your Service</h3>
		<hr style="height: 4px;background-color: orange;width: 10%">
		<div class="row" style="padding-top: 4%;padding-bottom: 5%">
			<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="container text-center"><i class="fa fa-diamond icon" aria-hidden="true"></i></div>
					<h4 align="center">Sturdy Templates</h4>
					<p align="center">Our template are updated regularly so they don't break.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="container text-center"><i class="fa fa-paper-plane icon" aria-hidden="true"></i></div>
					<h4 align="center">Ready to ship</h4>
					<p align="center">You can use this theme as is,or you can make change!.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="container text-center"><i class="fa fa-newspaper-o icon" aria-hidden="true"></i></div>
					<h4 align="center">Up to date</h4>
					<p align="center">We update dependencies to keep things fresh.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
					<div class="container text-center"><i class="fa fa-heart icon" aria-hidden="true"></i></div>
					<h4 align="center">Made with love</h4>
					<p align="center">You have to make your websites with love these days.</p>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-4 gallary">
			<img src="..//images/1.jpg" alt="" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 gallary">
			<img src="..//images/2.jpg" alt="" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 gallary">
			<img src="..//images/3.jpg" alt="" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 gallary">
			<img src="..//images/4.jpg" alt="" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 gallary">
			<img src="..//images/5.jpg" alt="" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-4 gallary">
			<img src="..//images/6.jpg" alt="" width="100%">
		</div>
	</div>
</div>
<div class="container-fluid background2">
	<h3 align="center" style="padding-top: 4%">Free Download at Start Bootstrap!</h3>
	<div class="container text-center">
		<button type="button" class="btn btn-primary btn-lg btn2" style="margin-top: 2%;margin-bottom: 5%">DOWNLOAD NOW</button>
	</div>
</div>
<div class="container-fluid">
	<h3 align="center" style="padding-top: 4%">Let's Get In Touch!</h3>
	<div class="container">
		<hr style="height: 4px;background-color: orange;width: 10%">
		<p align="center" style="font-size: 25px">Ready to start your next project with us? That 's great! Give us a call or send us an email and we will get back as soon as possible</p>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 2%;margin-bottom: 4%">
				<div class="container text-center"><i class="fa fa-phone icon2" aria-hidden="true"></i></div>
				<p align="center" class="contact">034-542-8338</p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6" style="margin-top: 2%;margin-bottom: 4%">
				<div class="container text-center"><i class="fa fa-envelope-o icon2" aria-hidden="true"></i></div>
				<p align="center" class="contact">huyrooney32@gmail.com</p>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>