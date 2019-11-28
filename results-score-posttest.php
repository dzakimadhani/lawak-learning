<?php

require_once('koneksi.php');
if(isset($_SESSION['post-test'])){
    $sql = "SELECT post_test, post_test_datetime FROM test WHERE username = '".$_SESSION['user']['username']."'";
    $result = $koneksi->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "0 results";
    }
}else{
    header('Location : /post-test.php');    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAWAK LEARNING | NILAI POST TEST</title>
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
									<a style="color:grey; " href="#">Post Test</a>
								</li>
								<li class="breadcrumb-item" aria-current="page" style="text-transform: capitalize; margin-top: 20px;">
									<a style="color:grey; " href="#">nilai</a>
								</li>
							</ol>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<center>
			<strong style="text-transform: capitalize; padding-left: 3%;font-size: 35px; margin: 0; color:purple">Nilai Post Test</strong>
		</center>
	</div>

	<div class="test">
		<div class="container">
			<div>
				<div class="header-skor">
					<h3 style="text-align: center;">Skor Post Test anda adalah</h3>
				</div>
				<div class="skor">
					<h1 style="text-align: center; margin-top: 80px; margin-bottom: 30px; font-size: 100px; font-weight: bold;"><?= $data['post_test'] ;?>%</h1>
					<center>
						<a href="/index.php" class="btn btn-primary">Home</a>
					</center>
				</div>
			</div>
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
