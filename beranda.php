<?php 
    require_once('koneksi.php');
    
    require_once('login_check.php');
    
    $sql = "SELECT * FROM test WHERE username = '".$_SESSION['user']['username']."'";
    $result = $koneksi->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "0 results";
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
	<?php include('template/navbar.php') ?>
	<div>
		<section class="body-beranda">
		    <div class="container">
		    	<div class="card shadow card-video">
		    		<div class="judul-card-video">
		    			<h4>
		    				<strong></strong>
		    			</h4>
		    		</div>
		    		<iframe style="display:block; margin:0 auto;" width="896" height="504" src="https://www.youtube.com/embed/azn-w2lfpSU" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		    	</div>
		    </div>
		</section>
	</div>

	<div class="test">
		<div class="container">
			<div class="judul-histori">
				<center>
					<strong>Histori Test Anda</strong>
				</center>
			</div>
			<div class="row">
				<div class="col histori-test" disabled>
					<div class="card shadow">
						<div class="card-body">
							<div style="padding-bottom: 2%">
								<table>
									<tr>
										<td class="judul-test"><strong>PRE TEST</strong></td>
										<td><img src="images/medal.png" alt=""></td>
									</tr>
								</table>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: <?= $data['pre_test'] ?>%;"></div>
							</div>
							<figcaption>anda telah menyelesaikan <strong><?= $data['pre_test'] ?>%</strong></figcaption>
							<a class="btn btn-buka" href="matkul-pbd.html">Buka</a>
						</div>
					</div>
				</div>
				<div class="col histori-test" disabled>
					<div class="card shadow">
						<div class="card-body">
							<div style="padding-bottom: 2%">
								<table>
									<tr>
										<td class="judul-test"><strong>POST TEST</strong></td>
										<td><img src="images/medal.png" alt=""></td>
									</tr>
								</table>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: <?= $data['post_test'] ?>%"></div>
							</div>
							<figcaption>anda telah menyelesaikan <strong><?= $data['post_test'] ?>%</strong></figcaption>
							<a class="btn btn-buka" href="/post-test.php">Buka</a>
						</div>
					</div>
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
