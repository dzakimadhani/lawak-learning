<?php

require_once('koneksi.php');

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  // menyeleksi data admin dengan username dan password yang sesuai
  $data = mysqli_query($koneksi,"select * from users where username='".$username."'");

  // menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($data);
  $data = mysqli_fetch_array($data);
    if($cek > 0){
        if(password_verify($password, $data["password"])){
           // buat Session
           session_start();
           $_SESSION["user"] = $data;
           // login sukses, alihkan ke halaman timeline
           header("Location: pre-test.php");
       }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAWAK LEARNING | LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/lawak-learning.css" title="default">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body >
	<div class="background-login">
		<div class="container body-login">
		    <div class="row">
		        <div class="mx-auto body-login-2">
		            <div class="card card-signin shadow">
		                <div class="card-body">
		                <figure class="figure mx-auto">
		                    <a href="#"><img src="images/logo.png" width="100%"></a>
		                    <figcaption class="figure-caption text-center">Belajar • Partisipasi • Terhubung</figcaption>
		                </figure>
		                <div class="form-signin">
                      <form class="" action="login.php" method="post">

		                	<div>
		                		<h5 class="text-center">
		                			<strong>Masuk</strong>
		                		</h5>
		                	</div>
		                    <div class="form-label-group">
		                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
		                    </div>
		                    <div class="form-label-group">
		                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
		                    </div>
		                    <div class="row">
		                    	<div class="col-6">
		                    		<a class="kembali-login" href="/index.php"><button class="btn btn-lg btn-block" type="button">Kembali</button></a>
		                    	</div>
		                    	<div class="col-6">
		                    		<a class="masuk-login" href="#"><button class="btn btn-lg btn-block" name="login" type="submit">Masuk</button></a>
		                    	</div>
		                    </div>
                      </form>
                    </div>
		                <p class="text-center" style=" padding-top: 10px;font-size: 12px">Dengan melanjutkan, anda menyetujui <strong>Ketentuan Layanan, Kebijakan Privasi</strong> IF-Learning</p>

		                <div class="text-center" style="font-size: 12px;"><a href=""><strong>Lupa password</strong></a>?</div>
		                <div class="text-center" style="font-size: 12px;">Belum punya akun? <a href="register.html"><strong>Daftar</strong></a></div>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

	<!--
	<div class="container" style="height: 100vh; padding-top: 5%">
	    <div class="row">
	        <div class="mx-auto" style="padding-top: 5%">
	            <div class="card card-signin shadow" style="width: 350px; padding: 3%">
	                <div class="card-body">
	                <figure class="figure mx-auto">
	                    <a href="index.html"><img src="images/logo.png" width="100%"></a>
	                    <figcaption style="color: #C01C73; margin-top: 20px;" class="figure-caption text-center">Belajar • Partisipasi • Terhubung</figcaption>
	                </figure>
	                <div class="form-signin">
	                	<label for="inputEmail" style="padding-left: 15px"><h5 style="font-size: 20px;"><strong>Masuk</strong></h5></label>
	                    <div class="form-label-group">
	                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
	                    </div>
	                    <div class="form-label-group">
	                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	                    </div>
	                    <div class="row">
	                    	<div class="col-6">
	                    		<a style="text-decoration:none;" href="index.html"><button style="background-color: #E0156A !important;" class="btn btn-lg btn-block" type="submit">Kembali</button></a>
	                    	</div>
	                    	<div class="col-6">
	                    		<a style="text-decoration:none;" href="beranda.html"><button class="btn btn-lg btn-block" type="submit">Masuk</button></a>
	                    	</div>
	                    </div>
	                </div>
	                <p class="text-center" style=" padding-top: 10px;font-size: 12px">Dengan melanjutkan, anda menyetujui <strong>Ketentuan Layanan, Kebijakan Privasi</strong> IF-Learning</p>

	                <div class="text-center" style="font-size: 12px;"><a href=""><strong>Lupa password</strong></a>?</div>
	                <div class="text-center" style="font-size: 12px;">Belum punya akun? <a href="register.html"><strong>Daftar</strong></a></div>

	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	-->
</body>
</html>
