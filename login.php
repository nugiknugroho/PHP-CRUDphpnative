 <?php 

include ('koneksi.php');

if(isset($_SESSION['login_user'])){
header("location: index.php");
}

 ?> 


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



<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <div class="navbar-header">
        <h2><a href="hamur.php"><img src="logo3.png" width="150px" height="50px"></a></h2>
      </div>
      <ul class="nav navbar-nav navbar-right">
    
    <!--  <li class="nav-item active">
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
    <h2>MASUK</h2>
  </div>
  
</nav>



<div class="container">
  <div class="col-sm-8">
    <div class="kolom8">
      <form action="l_proses.php" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" name="nama" class="form-control" id="email" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">MASUK</button>
</form>
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
      
				
			</div>

		</div>
</body>
</html>