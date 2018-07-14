<?php 

include('koneksi.php');
 

$username = $_POST['nama'];
$password = md5($_POST['password']);
$login = mysqli_query($conn, "select*from user where nama='$username' and password='$password'");
$result = mysqli_num_rows($login);
if ($result>0) {
	$user = mysqli_fetch_array($login);
	session_start();
	$_SESSION['nama']=$user['nama'];
	//header("location:welcome.php");
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


