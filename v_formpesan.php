<?php 

include('koneksi.php');

session_start();

if(isset($_SESSION['proses_pesan'])){
header("location: index.php");
}else{
  
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
        <h2><a href="welcome.php"><img src="logo3.png" width="150px" height="50px"></a></h2>
      </div>
      <ul class="nav navbar-nav navbar-right">
   
   <!--   <li class="nav-item active">
      <a class="nav-link" href="#"> Tentang Kami</a>
    </li> -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> Pesan Guru</a>
        <ul class="dropdown-menu">
          <li><a href="formcariguru.php">Pilih Guru Sendiri</a></li>
          <!-- <li><a href="v_formpesan.php">Pilihkan Otomatis</a></li> -->
          
        </ul>
      </li>
    
     <!-- <li class="nav-item">
      <a class="nav-link" href="daftar.php" ><span class="glyphicon glyphicon-book"></span> Register</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="listguru.php"><span class="glyphicon glyphicon-user"></span> Data Guru</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php" ><span class="glyphicon glyphicon-log-out"></span> Keluar</a>
    </li>
     
   
  </ul>
  </div>
  
</nav>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <h2>PEMESANAN</h2>
    <h4> Selamat Datang Di Website Guru Online <!-- <b><?php echo $username;?></b> --></h4>
  </div>
  
</nav>

<div class="container">
<div class="col-sm-8">
	<h1 style="text-align: center;">FORM PEMESANAN</h1>
	<form action="proses_pesan.php" method="post">
		<div class="form-group">
		<label for="name">Nama Lengkap Anda</label>
		<input type="text" name="pemesan" placeholder="Nama Anda" class="form-control"></input>
	</div>
	<div class="form-group">
		<label for="name">Mata Pelajaran</label><br>
		<select name="matkul" style="width: 100%; height: 30px">
			<option value=""> </option>
			<?php 
              $sql = 'SELECT * FROM mapel';
              $query = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_array($query)) {
              ?>
            <option value="<?php echo $data['id_mapel'];?>"><?php echo $data['mapel'];?></option>
            <?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label for="name">Jenjang Pendidikan</label>
		<select name="jenjang" style="width: 100%; height: 30px">
			<option value=""></option>
			<?php
          $sql = 'SELECT * FROM jenjang';
          $query = mysqli_query($conn,$sql);
          while($data= mysqli_fetch_array($query)){
            ?>
            <option value="<?php echo $data['id_jenjang'];?>"><?php echo $data['jenjang'];?></option>
            <?php } ?> 
			
		</select>
	</div>
  <div class="form-group">
		<label for="name">Jumlah Pertemuan</label>
		<select name="jumlahpertemuan" style="width: 100%; height: 30px">
			<option value=""></option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
		</select>
	</div>
	<div class="form-group">
		<label for="name">Alamat Lengkap</label><br>
		
		<textarea name="alamat" placeholder="MASUKKAN ALAMAT LENGKAP ANDA" cols="98" rows="5">
			
		</textarea>
	</div>
	<div class="form-group">
		<label for="name">Waktu Pertemuan</label>
			<input type="time" name="waktupengajaran" class="form-control">
				
			</input>
	</div>
  <div class="form-group">
    <label for="name">Durasi Pertemuan / Jam</label>
    <select name="durasi" style="width: 100%; height: 30px">
      <option value=""></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      
    </select>
  </div>
	<button type="submit" class="btn btn-primary" name="pesan">SELANJUTNYA >></button>	
	</form><br>
	
</div>
	<div class="col-sm-4">
					
          <h2>Fitur Website</h2>
          <ul>
            <li> Mudah Untuk Belajar</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
          </ul>


					
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