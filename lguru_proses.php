<?php 

include('koneksi.php');
 

$username = $_POST['nama'];
$password = $_POST['password'];
$login = mysqli_query($conn, "select*from teacher where nama='$username' and password='$password'");
$result = mysqli_num_rows($login);
if ($result>0) {
	$user = mysqli_fetch_array($login);
	session_start();
	$_SESSION['nama']=$user['nama'];
	 echo "
            <script>
                alert('Login Berhasil !');
                window.location='welcome.php';
            </script>
        ";

}
else{

	// header("location:lojin.php"); 
	echo "LOGIN GAGAL";
}
 ?>