<?php 
error_reporting(E_ALL & ~E_NOTICE);
include('koneksi.php'); 

if (isset($_POST['pesan'])) {
	$guru = $_POST['namateacher'];
	$mapel = $_POST['mapel'];
	$pemesan = $_POST['pemesan'];

	$sql = 'insert into transaksibayar (id_teacher, id_mapel, id_pemesan) values ("'.$guru.'","'.$mapel.'","'.$pemesan.'")';

	$query = mysqli_query($conn, $sql);

	if ($query) {
		 echo "
            <script>
                alert('Pemesanan Berhasil, Permintaan Sedang diproses !!!');
                window.location='welcome.php';
            </script>
        ";
	} else {
		echo "
            <script>
                alert('Pemesanan Gagal, Permintaan Sedang diproses !!!');
                window.location='formpembayaran.php';
            </script>
        ";
	}
}

 ?>