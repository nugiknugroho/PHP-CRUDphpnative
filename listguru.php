 <?php 

include ('koneksi.php');

session_start();

if(isset($_SESSION['login_user'])){
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
        <h2><a href="welcome.php"><img src="logo3.png" width="150px" height="50px"></a></h2>
      </div>
      <ul class="nav navbar-nav navbar-right">
    
     <!-- <li class="nav-item active">
      <a class="nav-link" href="#"> Tentang Kami</a> -->

    
    <!--  <li class="nav-item">
      <a class="nav-link" href="daftar.php" ><span class="glyphicon glyphicon-book"></span> Register</a>
    </li> -->
   <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> Pesan Guru</a>
        <ul class="dropdown-menu">
          <li><a href="formcariguru.php">Pilih Guru Sendiri</a></li>
          <!-- <li><a href="v_formpesan.php">Pilihkan Otomatis</a></li> -->
          
        </ul>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> Data Guru</a>
    </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php" ><span class="glyphicon glyphicon-log-in"></span> Keluar</a>
    </li>
   
  </ul>
  </div>
  
</nav>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <h2>DATA GURU</h2>
    <h4> Selamat Datang Di Website Guru Online <!-- <b><?php echo $username;?></b> --></h4>
  </div>
  
</nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 style="text-align: center;">WEBSITE GURU ONLINE</h1>
           <div class="kolom8">
          
            <?php
  $sql = 'SELECT namateacher, pendidikan, jenjang, mapel, alamat, no_telp, hargaperjam , id_teacher FROM teacher, jenjang, mapel WHERE jenjang.id_jenjang=teacher.id_jenjang AND mapel.id_mapel=teacher.id_mapel';
  $query = mysqli_query($conn,$sql);
?>

<h2><strong><p align="center">Data Pengajar GuruOnline</p></strong></h2>
<table width="700" border="5" cellpadding="0" cellspacing="0" align="center">
<tr>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">No</td>
<td width="50" height="29" align="center" valign="middle"
bgcolor="#00FFFF">ID</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Pendidikan</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Jenjang</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Pengajar</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">No Telepon</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Harga/jam</td>

</tr>
<?php
$no=0;
while($data= mysqli_fetch_array($query)){
$no++;
?>
<tr>
<td p align="center" bgcolor="#FFFFFF"><?php echo $no ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['id_teacher']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['namateacher']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['pendidikan']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['jenjang']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['mapel']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['no_telp']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['hargaperjam']; ?></td>

</tr>




<?php
}
?>
</table>

          </div>
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
          <div class="kolom4">
          


          </div>
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
</body>
</html>