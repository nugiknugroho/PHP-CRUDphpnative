<?php

include ('koneksi.php');

session_start();

if(isset($_SESSION['save'])){
header("location: index.php");
}else{
  
}
?> 


<!DOCTYPE html> 
<html>
<head>
	<title>Guru Online</title>

	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/db.css">
	<link rel="stylesheet" type="text/css" href="db.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

  
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
   <div class="container-fluid">
      <div class="navbar-header">
        <h2><a href="hamur.php"><img src="logo3.png" width="150px" height="50px"></a></h2>
      </div>
      <ul class="nav navbar-nav navbar-right">
  
 <!--     <li class="nav-item active">
      <a class="nav-link" href="#"> Tentang Kami</a>
    </li> -->
          <li class="nav-item">
      <a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a>
    </li>
        

    <li class="nav-item">
      <a class="nav-link" href="daftar.php"><span class="glyphicon glyphicon-book"></span> Daftar</a>
    </li>
   
   
  </ul>
  </div>
  
</nav>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <h2>DAFTAR</h2>
  </div>
  
</nav>

		<div class="container">
			<div class="col-sm-8">
				<div class="kolom8">
					<form action="save.php" method="post">

	<h1 style="text-align: center;">Daftar</h1>
  
  <div class="form-group">
  	<label for="nama">Nama Lengkap</label>
  	<input type="nama" name="namalengkap" class="form-control" placeholder="Nama lengkap">
  </div>
  <div class="form-group">
  	<label for="ttl">Tempat Tanggal Lahir</label>
  	<input type="date" class="form-control"  name="ttlahir" placeholder="ttl">
  </div>
  <div class="form-group">
  	<label for="alamat">Alamat</label>
  	<input type="alamat" class="form-control" name="alamat" placeholder="ALamat">
  </div>
  <div class="form-group">
    <label for="alamat">Nomor Telepon / HP</label>
    <input type="alamat" class="form-control" name="no_telp" placeholder="No Selluler">
  </div>
 
  <div class="form-group">
    <label for="email">Username</label>
    <input type="username" class="form-control" name="nama" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="ndaftar">Daftar</button>
</form>
				</div>
			</div>

		<!-- 	<div class="col=sm-4">
				<div class="kolom4">
					<a href="home.html"><h3 style="color: green"><span class="glyphicon glyphicon-home"></span> Home</h3></a>
						<a href="profil1.html"><h3 style="color: green"><span class="glyphicon glyphicon-user"></span> Profil</h3></a>
						<a href="daftar1.html"><h3 style="color: green"><span class="glyphicon glyphicon-book"></span> Pendaftaran</h3></a>
				</div> -->
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
                                <p>Terms &amp; Condition</p>
                            </li>
                            <li>
                                <p>Privacy Policy</p>
                            </li>
                            <li>
                                <p>Project Protection</p>
                            </li>
                            <li>
                                <p>FAQ</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">CONTACT US</p>
                        <ul>
                          <li>Nugik : 085646473651</li>
                          <li>Melsa : 083386868366</li>
                          <li>Fahmi : 093039090329</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <p class="link-title">RESOURCHES</p>
                        <ul>
                            <li>
                                <p>Blog</p>
                            </li>
                            <li>
                                <p>Advertisement</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </footer>

</body>
</html>