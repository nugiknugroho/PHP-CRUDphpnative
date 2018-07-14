<table>
<tr><td>Nama</td></tr>
<?php 

include('koneksi.php');
$jenjang = $_POST['jenjang'];
$mapel = $_POST['mapel'];
$sql = "SELECT * FROM teacher WHERE id_jenjang='".$jenjang."' AND id_mapel='".$mapel."'";
$query = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($query)) {
    
?>
<tr><td><?php echo $data['namateacher']; ?></td></tr>
<?php } ?>    
</table>
