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
          <!-- logout -->
          <?php if(isset($_SESSION['user'])) { ?>
            <li class="nav-item">
              <div class="dropdown">
                <a href="#" class="btn btn-login dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['user']['username'] ?></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/logout.php">Logout</a>
                </div>
              </div>
            </li>
          <?php }else{ ?>
            <li class="nav-item">
              <a href="/register.php" class="btn btn-login">Daftar</a>
            </li>
            <li class="nav-item">
              <a href="/login.php" class="btn btn-login">Masuk</a>
            </li>
          <?php } ?>
        </ul>
      </div>
  </nav>
</div>
