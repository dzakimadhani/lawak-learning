<?php

require_once('koneksi.php');
include('assets/jawaban.php');
if(isset($_POST['pre-test'])){
    $data = [$_POST['jawaban1'], $_POST['jawaban2'], $_POST['jawaban3'], $_POST['jawaban3']];
    // $jawaban = array_push($jawaban, $data);
    // var_dump($data);
    // var_dump($jawabanSoal);
    $result = array_intersect($data, $jawabanSoal);
    $final_score = count($result) / count($jawabanSoal) * 100;
    $_SESSION['final_score'] = $final_score;
    header('Location: results-score-pretest.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAWAK LEARNING | BERANDA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/lawak-learning.css" title="default">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="logo">
				<a class="navbar-brand" href="index.html">
		    		<img class="margin-logo" src="images/logo.png" alt="logo" width="200px">
		  		</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	  		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	  			<ul class="nav navbar-nav ml-auto">
	  				<li class="nav-item">
	  					<div class="dropdown">
	  						<a href="#" class="btn btn-login dropdown-toggle" data-toggle="dropdown">Dzaki Madhani</a>
	  						<div class="dropdown-menu">
	  							<a class="dropdown-item" href="#">Logout</a>
	  						</div>
	  					</div>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="btn  btn-login">Daftar</a>
	  				</li>
	  				<li class="nav-item">
	  					<a href="#" class="btn btn-login">Masuk</a>
	  				</li>
	  			</ul>
	  		</div>
		</nav>
	</div>
	
	<div class="status-bar" style="padding-left: 4%; padding-bottom: 15px; padding-top: 10px; padding-right: 4%">
		<div class="row">
			<div class="col-sm-8">
				<table style="width: 100%">
					<tr>
						<td style="vertical-align:bottom">
							<ol class="breadcrumb">
								<li class="breadcrumb-item" aria-current="page" style="text-transform: capitalize; margin-top: 20px;">
									<a style="color:grey; " href="">Home</a>
								</li>
								<li class="breadcrumb-item" aria-current="page" style="text-transform: capitalize; margin-top: 20px;">
									<a style="color:grey; " href="#">Pre Test</a>
								</li>
							</ol>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<center>
			<strong style="text-transform: capitalize; padding-left: 3%;font-size: 35px; margin: 0; color:purple">Pre Test</strong>
		</center>
	</div>

	<div class="test">
		<div class="container">
			<form>
				<div class="pilgan">
					<div class="soal">
						<h5>Di mana kita dapat menemukan fitur Go Food?</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="row abcd">
							<div class="col-md-6">
								<div>
									<input type="submit" class="btn btn-primary" value="Gojek">
								</div>
								<div>
									<input type="submit" class="btn btn-primary" value="Grab">
								</div>
							</div>
							<div class="col-md-6">
								<div>
									<input type="submit" class="btn btn-primary" value="Uber">
								</div>
								<div>
									<input type="submit" class="btn btn-primary" value="Traveloka">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	
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
