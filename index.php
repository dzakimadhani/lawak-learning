<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAWAK LEARNING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/lawak-learning.css" title="default">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('template/navbar.php') ?>
	<!--
	<nav class="navbar navbar-expand-lg navbar-white bg-white sticky-top">
  		<a class="navbar-brand" href="index.html">
    		<img class="margin-logo" src="images/logo.png" alt="logo" width="200px">
  		</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
  			<ul class="nav navbar-nav ml-auto">
  				<li class="nav-item active">
  					<a href="register.html" class="btn mr-sm-4" style="color: white; background: purple; border-radius: 30px; width: 150px">Daftar</a>
					<a href="login.html" class="btn my-4 my-sm-0" style="color: white; background: purple; border-radius: 30px; width: 150px">Masuk</a>
  				</li>
  			</ul>
  		</div>
	</nav>
	-->
	<div>
		<section>
			<div class="jumbotron jumbotron-fluid">
				<div class="container body-jumbotron">
					<h1 class="intro-jumbotron" ><strong>Belajar lebih banyak,</strong></h1>
					<h1 class="intro-jumbotron" ><strong>mengenai GO FOOD.</strong></h1>
					<a class="btn float-right mulai-belajar" href="/pre-test.php">Mulai Belajar</a>
				</div>
			</div>
		</section>
	</div>

	<!--
	<section id="main" style="height: 100vh">
		<div class="jumbotron jumbotron-fluid" style="background-image: url('images/jumbotron.jpg'); height: 90vh;">
			<div class="container" style="padding-top: 10%;">
			<h1 class="display-4" style="text-align: right"><strong style="color:white;">Belajar lebih mudah,</strong></h1>
			<h1 class="display-4" style="text-align: right"><strong style="color:white;">dimana dan kapan saja.</strong></h1>
			<br>
			<a class="btn float-right" style="color: white; background: purple; border-radius: 30px; width: 150px; font-size: 17px" href="login.html">Mulai Belajar</a>
		</div>
		</div>
	</section>
	-->

	<section class="tentang">
		<div class="container">
		<h3><strong>Tentang LAWAK LEARNING</strong></h3>
		<br>
			<div class="row">

				<div class="col" style="padding-top: 10%">
					<h2 class="isi-tentang">APLIKASI UNTUK ANDA YANG INGIN BELAJAR LEBIH JAUH TENTANG</h2>
					<h2 class="isi-tentang">GO FOOD</h2>
					<br>
					<p class="info-tentang">Cari tahu lebih banyak tentang GO FOOD di sini.</p>
				</div>
				<div class="col">
					<img src="images/tentang.jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</section>


	<footer>
		<nav class="navbar navbar-white bg-white">
			<div class="container-fluid">
				<a class="navbar-brand"><img src="images/logo.png" width="200px" alt="" srcset=""></a>
				<figure class="form-inline" >
					<a href="http://facebook.com">
						<img src="images/facebook.png" width="35%">
					</a>
					<a href="http://instagram.com">
							<img src="images/instagram.png" width="35%">
					</a>
					<a href="http://twitter.com">
							<img src="images/twitter.png" width="35%">
					</a>
				</figure>
			</div>
		</nav>
	</footer>
</body>
</html>
