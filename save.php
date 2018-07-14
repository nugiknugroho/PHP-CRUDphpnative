<?php
error_reporting(E_ALL & ~E_NOTICE);
include('koneksi.php');
if(isset($_POST['ndaftar'])){ //['ttambah'] merupakan name dari button di form tambah
$namalengkap = $_POST['namalengkap']; 
$ttlahir = $_POST['ttlahir'];
$alamat = $_POST['alamat']; 
$no_telp = $_POST['no_telp'];
$username = $_POST['nama'];
$password = md5($_POST['password']);
$sql = 'insert into user (namalengkap, ttlahir, alamat, no_telp, nama, password) values ("'.$namalengkap.'","'.$ttlahir.'","'.$alamat.'","'.$no_telp.'" ,"'.$username.'" ,"'.$password.'")';
$query = mysqli_query($conn,$sql);
if($query){
 echo "
            <script>
                alert('Registrasi Berhasil!');
                window.location='login.php';
            </script>
        "; 

}



else{
echo 'Gagal';
}
}

if(isset($_POST['nambah'])){ //['ttambah'] merupakan name dari button di form tambah
$namalengkap = $_POST['namateacher']; 
$pendidikan = $_POST['pendidikan'];
$jenjang = $_POST['jenjang'];
$mapel = $_POST['mapel'];
$alamat = $_POST['alamat']; 
$no_telp = $_POST['no_telp'];
$username = $_POST['nama'];
$password = $_POST['password'];
$sql = 'insert into teacher (namateacher, pendidikan, id_jenjang, id_mapel, alamat, no_telp, nama, password) values ("'.$namalengkap.'","'.$pendidikan.'", "'.$jenjang.'", "'.$mapel.'", "'.$alamat.'","'.$no_telp.'" ,"'.$username.'" ,"'.$password.'")';
$query = mysqli_query($conn,$sql);
if($query){
 echo "
            <script>
                alert('Register Berhasil !');
                window.location='loginguru.php';
            </script>
        ";
 //kode ini supaya jika data setelah

}
else{
echo 'Gagal';
}
}
?>