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
  <title>LAWAK LEARNING | PRE TEST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/lawak-learning.css" title="default">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <?php include('template/navbar.php'); ?>

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
			<strong style="text-transform: capitalize; padding-left: 3%;font-size: 35px; margin: 0; color:purple">Selesaikan Pre Test Terlebih Dahulu Untuk Dapat Mengakses Konten Video</strong>
		</center>
	</div>

	<div class="test">
		<div class="container">
      <form class="" action="pre-test.php" method="post">
				<div class="pilgan">
					<div class="soal">
						<h5>1. Di mana kita dapat menemukan fitur Go Food?</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="gojek">A. [Gojek]
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="grab">C. Grab
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="uber">B. Uber
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="traveloka">D. Traveloka
							</label>
						</div>
					</div>
				</div>
				<div class="pilgan">
					<div class="soal">
						<h5>2. Go Food adalah layanan untuk ....</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="delivery makanan">A. [delivery makanan]
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="antar barang">C. antar barang
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="transportasi">B. transportasi
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="pesan tiket">D. pesan tiket
							</label>
						</div>
					</div>
				</div>
				<div class="pilgan">
					<div class="soal">
						<h5>3. Apa yang bisa kita beli di Go Food?</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban3" value="makanan">A. Makanan
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban3" value="minuman">C. Minuman
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="jawaban3" value="makanan ringan">B. Makanan ringan
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban3" value="semua benar">D. [semua benar]
							</label>
						</div>
					</div>
				</div>
				<div class="pilgan">
					<div class="soal">
						<h5>4. Di mana kita dapat menginstall Go Food?</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban4" value="smartphones">A. [Smartphones]
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban4" value="laptop">C. Laptop
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="jawaban4" value="PC">B. PC
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban4" value="smartwatch">D. Smartwatch
							</label>
						</div>
					</div>
				</div>
				<div class="submit-pilgan">
					<button type="submit" class="btn btn-primary" name="pre-test">Submit</button>
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
