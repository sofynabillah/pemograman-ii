<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_fastfood_masuk where id_fastfood_masuk = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_fastfood_masuk.php'; </script>";

?>