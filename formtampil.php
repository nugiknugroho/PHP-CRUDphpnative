<?php 
error_reporting(E_ALL & ~E_NOTICE);
include('koneksi.php');
session_start();

// if(isset($_SESSION['proses_cariguru'])){
// header("location: index.php");
// }else{
  
// }


// $mapel = $_POST['mapel'];

?>

 <!DOCTYPE html>
 <html>
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
   
<!--      <li class="nav-item active">
      <a class="nav-link" href="#"> Tentang Kami</a>
    </li> -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-book"></span> Pesan Guru</a>
        <ul class="dropdown-menu">
          <li><a href="formcariguru.php">Pilih Guru Sendiri</a></li>
   <!--        <li><a href="v_formpesan.php">Pilihkan Otomatis</a></li> -->
          
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
    <h2>DATA ORDER</h2>
    <h4> Selamat Datang Di Website Guru Online <!-- <b><?php echo $username;?></b> --></h4>
  </div>
  
</nav>
<div class="container">
	<div class="col-sm-8">
	<!-- <p style="font-family: veranda;">DALAM FORM INI, ANDA AKAN DIMUDAHKAN UNTUK MEMILIH SENDIRI GURU YANG AKAN ANDA PESAN MELALUI FORM PEMESANAN</p> -->
		<h2 style="text-align: center;">DATA ORDER</h2>
		<!-- <form action="formcariguru.php" method="POST">
				<label for="name">PENCARIAN GURU</label><br>
				<div class="form-group"><h6>JENJANG</h6>
        <select name="jenjang" style="width: 300px" id="jenjang" onchange="check(this);" class="form-control">
          <h6>JENJANG</h6>
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
        <h6>MAPEL</h6>
        <select name="mapel" style="width: 300px" id="mapel" disabled="true" class="form-control">
            <option value=""></option>
            <?php 
              $sql = 'SELECT * FROM mapel';
              $query = mysqli_query($conn, $sql);
              while ($data = mysqli_fetch_array($query)) {
              ?>
            <option value="<?php echo $data['id_mapel'];?>"><?php echo $data['mapel'];?></option>
            <?php } ?>   
        </select>
			</div>
      <input type="submit" name="simpan" class="btn btn-primary" value="CARI">
    </form><br>
     -->
      <table width="1000" border="5" cellpadding="0" cellspacing="0" align="center">
<tr>
  <td width="100" align="center" valign="middle" bgcolor="#00FFFF">No</td>
<td width="50" height="29" align="center" valign="middle"
bgcolor="#00FFFF">ID</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Jumlah Pertemuan</td>

<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Alamat</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Waktu</td>
<td width="100" align="center" valign="middle" bgcolor="#00FFFF">Durasi / jam</td>
<!-- <td width="100" align="center" valign="middle" bgcolor="#00FFFF">Silahkan Memilih</td> -->
</tr>
<?php 

$namapemesan = $_POST['pemesan'];

 $sql = "SELECT * FROM pemesanan";
//$sql = 'select * from pemesanan where pemesan = $namapemesan';
// $sql = "SELECT * FROM pemesanan WHERE pemesan= $namapemesan";
$query = mysqli_query($conn, $sql);
$no=0;
while ($data = mysqli_fetch_array($query)) {
$no++;    
?>
<tr>
  <td p align="center" bgcolor="#FFFFFF"><?php echo $no ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['id_pemesan']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['pemesan']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['jumlahpertemuan']; ?></td>

<td p align="center" bgcolor="#FFFFFF"><?php echo $data['alamat']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['waktupengajaran']; ?></td>
<td p align="center" bgcolor="#FFFFFF"><?php echo $data['durasi']; ?></td>
<!-- <td p align="center" bgcolor="#FFFFFF"><a href="v_formpesan.php">Pilih</a></td> -->

<?php } ?>    
</table>

       
			


    <p></p><br>

    <p></p><br>
    <p></p><br>
    <p></p><br>
    <p></p><br>
    <p></p><br>
    <p></p><br>
    <p></p><br>
	</div>


<!-- 	<div class="col-sm-4">
		<h2>Fitur Website</h2>
          <ul>
            <li> Mudah Untuk Belajar</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
            <li> Sangat mudah dan simpel untuk memesan guru</li>
          </ul>
	</div> -->
</div><br>

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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            function check(elem) {
              document.getElementById('mapel').disabled=!elem.selectedIndex;
            }
        </script>
        <script>
          function myFunction(){
            alert('$jenjang');
          }
        </script>
 </body>
 </html>