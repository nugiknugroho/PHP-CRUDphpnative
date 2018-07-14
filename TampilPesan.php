<?php 
error_reporting(E_ALL & ~E_NOTICE);
include('koneksi.php');
if (isset($_POST['pesan'])) {
$namapemesan = $_POST['pemesan']; 
$jenjang = $_POST['jenjang'];
$mapel = $_POST['mapel']; 
$j_pertemuan = $_POST['jumlahpertemuan'];
$alamat = $_POST['alamat'];
$waktu = $_POST['waktupengajaran'];
$durasi = $_POST['durasi'];
// $sql = 'insert into pemesanan (pemesan, id_jenjang, id_mapel, jumlahpertemuan, alamat, waktupengajaran, durasi) values ("'.$namapemesan.'","'.$jenjang.'","'.$mapel.'","'.$j_pertemuan.'" ,"'.$alamat.'" ,"'.$waktu.'", "'.$durasi.'")';

$sql = 'select * from pemesanan where pemesan = $namapemesan';
$query = mysqli_query($conn,$sql);
if($query){
 echo "
            <script>
                alert('Pemesanan Berhasil, Permintaan Sedang diproses !!!');
                window.location='welcome.php';
            </script>
        "; 

}



else{
echo "
            <script>
                alert('Pemesanan Gagal, Coba Lagi Ya !!!');
                window.location='v_formpesan.php';
            </script>
        "; 
}
}


 ?>