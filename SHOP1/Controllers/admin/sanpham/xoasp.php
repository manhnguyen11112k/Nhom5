<?php
$masp = $_GET['masp'];
$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql = "delete from sanpham where masp = '$masp' ";

	$kq = mysqli_query($conn, $sql);

	if($kq )
	{
		header("location: ../../../Views/admin/sanpham/hienthisp.php");
	}
?>