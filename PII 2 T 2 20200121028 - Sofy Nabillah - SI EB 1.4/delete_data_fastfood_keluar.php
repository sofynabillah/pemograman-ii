<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_fastfood_keluar where id_fastfood_keluar = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_fastfood_keluar.php'; </script>";

?>