<?php

require_once('koneksi.php');
include('assets/jawaban.php');
if(isset($_POST['post-test'])){
    $data = [$_POST['jawaban1'], $_POST['jawaban2'], $_POST['jawaban3'], $_POST['jawaban4']];
    $result = array_intersect($data, $jawabanSoal);
    $final_score = count($result) / count($jawabanSoal) * 100;
    $query = "SELECT username FROM `test` WHERE username = '".$_SESSION['user']['username']."'";
    $results = $koneksi->query($query);
    if ($results->num_rows > 0) {
        $sql = "update test set post_test='$final_score' where username='".$_SESSION['user']['username']."'";
    } else {
        $sql = "insert into test(username, post_test, post_test_datetime) values ('".$_SESSION['user']['username']."', '$final_score', '".date('Y-m-d H:i:s')."')"; 
    }
    
    if ($koneksi->query($sql) === TRUE) {
        $_SESSION['post-test'] = true;
        header('Location: results-score-posttest.php');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
    // var_dump($_SESSION['final_score_post']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAWAK LEARNING | POST TEST</title>
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
							</ol>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<center>
			<strong style="text-transform: capitalize; padding-left: 3%;font-size: 35px; margin: 0; color:purple">Selesaikan Post Test Untuk Menyelesaikan Pembelajaran Anda</strong>
		</center>
	</div>

	<div class="test">
		<div class="container">
			<form action="" method="post" enctype="multipart/form-data">
	
				<div class="pilgan">
					<div class="soal">
						<h5>1.	Mana dari gambar di bawah ini yang dilingkari merah merupakan fitur Go Food di aplikasi Go Jek?</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="GoFood">A. <img src="images/jawaban/01a.png" alt="" width="200px">
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="GoCar" >C. <img src="images/jawaban/01b.png" alt="" width="200px">
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="GoRide">B. <img src="images/jawaban/01c.png" alt="" width="200px">
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban1" value="GoSend">D. <img src="images/jawaban/01d.png" alt="" width="200px">
							</label>
						</div>
					</div>
				</div>
				<div class="pilgan">
					<div class="soal">
            <div class="soal-gambar">
              <center>
                <img src="images/soal/2.png" alt="" width="200px">
              </center>
            </div>
						<h5>2. Gambar yang diberi lingkaran merah di atas berfungsi untuk ….</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="Mencari Restoran">A. Mencari restoran
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="Mencari Driver">C. Mencari Driver
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="Mencari Tiket">B. Mencari Tiket
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban2" value="Mencari Promo">D. Mencari Promo
							</label>
						</div>
					</div>
				</div>
				<div class="pilgan">
					<div class="soal">
            <div class="soal-gambar">
              <center>
                <img src="images/soal/3.png" alt="" width="200px">
              </center>
            </div>
						<h5>3. Gambar yang diberi lingkaran merah di atas berfungsi untuk ….</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="jawaban3" value="Mencari Makan">A. Mencari Makanan
							</label>
							<label class="radio-inline">
								<input type="radio" name="jawaban3" value="Menambah Jumlah Makanan">C. Menambah Jumlah Makanan
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="Jawaban3" value="Menambah Promo">B. Menambah Promo
							</label>
							<label class="radio-inline">
								<input type="radio" name="Jawaban3" value="Mencari Promo">D. Mencari Promo
							</label>
						</div>
					</div>
				</div>
				<div class="pilgan">
					<div class="soal">
						<h5>4.	Mana gambar yang menunjuk ke fungsi untuk menambah jumlah makanan yang ingin dipesan?</h5>
					</div>
					<div class="jawaban" style="padding: 2%;">
						<div class="ac">
							<label class="radio-inline">
								<input type="radio" name="Jawaban4" value="Menambah Jumlah Makanan">A. <img src="images/jawaban/04a.png" alt="" width="200px">
							</label>
							<label class="radio-inline">
								<input type="radio" name="Jawaban4" value="Mengurangi Jumlah Makanan">C. <img src="images/jawaban/04a.png" alt="" width="200px">
							</label>
						</div>
						<div class="bd">
							<label class="radio-inline">
								<input type="radio" name="Jawaban4" value="Jenis Pembayaran">B. <img src="images/jawaban/04c.png" alt="" width="200px">
							</label>
							<label class="radio-inline">
								<input type="radio" name="Jawaban4" value="Menambah Pesanan yang Berbeda">D. <img src="images/jawaban/04d.png" alt="" width="200px">
							</label>
						</div>
					</div>
				</div>
				<div class="submit-pilgan">
					<button type="submit" name = "post-test" class="btn btn-primary">Submit</button>
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
