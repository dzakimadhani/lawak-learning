<?php

session_start();

require_once("koneksi.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (username, name, email, password) VALUES ('".$username."','".$name."','".$email."','".$password."')";

    if ($koneksi->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
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
		<div class="container body-registrasi">
		    <div class="row">
		        <div class="mx-auto body-login-2">
		            <div class="card card-signin shadow">
		                <div class="card-body">
		                <figure class="figure mx-auto">
		                    <a href="#"><img src="images/logo.png" width="100%"></a>
		                    <figcaption class="figure-caption text-center">Belajar • Partisipasi • Terhubung</figcaption>
		                </figure>
		                <div class="form-signin">
                      <form class="" action="register.php" method="post">

		                	<div>
		                		<h5 class="text-center">
		                			<strong>Daftar</strong>
		                		</h5>
		                	</div>
		                    <div class="form-label-group">
		                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
		                    </div>
                        <div class="form-label-group">
		                        <input type="text" id="username" name="name" class="form-control" placeholder="Name" required autofocus>
		                    </div>
		                    <div class="form-label-group">
		                        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
		                    </div>
		                    <div class="form-label-group">
		                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
		                    </div>
		                    <div class="row">
		                    	<div class="col-6">
		                    		<a class="kembali-login" href=""><button class="btn btn-lg btn-block" type="">Kembali</button></a>
		                    	</div>
		                    	<div class="col-6">
		                    		<a class="masuk-login" href="#"><button class="btn btn-lg btn-block" name="register" type="submit">Daftar</button></a>
		                    	</div>
		                    </div>
                      </form>
                    </div>
		                <p class="text-center" style="padding-top: 10px;font-size: 12px">Dengan melanjutkan, anda menyetujui <strong>Ketentuan Layanan, Kebijakan Privasi</strong> IF-Learning</p>
	                	<div class="text-center" style="font-size: 12px;">Sudah punya akun? <a style="color: purple" href="login.html"><strong>Login</strong></a></div>
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
