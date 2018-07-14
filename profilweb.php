<!DOCTYPE html>  
<html lang="en">
<head>
	<title>Guru Online</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/db.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
 
</head> 
<body>

<!-- <nav class="navbar navbar-fixed-top navbar navbar-expand-sm bg-light navbar-light" id="header">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">GuruONLINE</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="active"><a <a href="hamur.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Grade
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="SD.html">SD</a></li>
          <li><a href="SMP.html">SMP</a></li>
          <li><a href="SMA.html">SMA</a></li>
        </ul>


						</li> 

						<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pendidikan</a></li>
          <li><a href="#">Sekolah</a></li>
          <li><a href="#">Perguruan</a></li>
        </ul>
      </li>
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paket
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="paket.html">Reguler</a></li>
          <li><a href="paket.html">Intensif</a></li>
          <li><a href="paket.html">Bebas</a></li>
        </ul>
      </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <li><a href="daftar.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
					 <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Cari</button>
    </form>
				</div>
			</div>
		</nav>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav> -->

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
      <div class="navbar-header">
        <h2>GURUONLINE</h2>
      </div>
      <ul class="nav navbar-nav navbar-right">
    <li class="nav-item active">
      <a class="nav-link" href="hamur.php"><span class="glyphicon glyphicon-home"></span> Home</a>
    </li>
     <li class="nav-item active">
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-home"></span> Tentang Kami</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="login.php" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
    </li> -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a>
        <ul class="dropdown-menu">
          <li><a href="login.php">Murid</a></li>
          <li><a href="loginguru.php">Guru</a></li>
          
        </ul>
      </li>
   
     <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span>Register</a>
        <ul class="dropdown-menu">
          <li><a href="daftar.php">Murid</a></li>
          <li><a href="daftarguru.php">Guru</a></li>
          
        </ul>
      </li>
    
   
  </ul>
  </div>
  
</nav>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <h2>TENTANG KAMI</h2>
  </div>
  
</nav>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides --> 
  <div class="carousel-inner" id="size">
    <div class="item active">
     <img src="melsa.jpg" alt="Chania" width="500px" height="200px"></a> 
      <div class="carousel-caption">
        <h3 style="color: red;">Website ini memudahkan siswa untuk mencari guru private</h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="nugik.jpg" alt="guru" width="500px" height="200px"></a>
      <div class="carousel-caption">
        <h3 style="color: red;">Website ini memudahkan siswa untuk mencari guru private</h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="fahmi.jpg" alt="New York" width="500px" height="200px"></a>
      <div class="carousel-caption">
        <h3 style="color: red;">Website ini memudahkan siswa untuk mencari guru private</h3>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div>
        </div>
      <footer id="footer">
         <div class="container">
            <div class="hidden-xs">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <h2 class="logo logo-footer">GURU ONLINE</h2>
                        <p class="desc">
                            Melsa Khairani Nasution
                            <br>Muhammad Nugik Nugroho
                            <br>Muhammad Fahmi Abidin
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">COMPANY</p>
                        <ul>
                            <li>
                                <a href="#">Terms &amp; Condition</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Project Protection</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">CONTACT US</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">RESOURCHES</p>
                        <ul>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Advertisement</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </footer>

		</div>
</body>
</html>