<?php
$id= $_GET['id'];
$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql1 = "delete from dangnhap where id = '$id' ";

	$kq1 = mysqli_query($conn, $sql1);

	$sql = "delete from thongtin where id = '$id' ";

	$kq = mysqli_query($conn, $sql);

	if($kq || $)
	{
		header("location: ../../../Views/admin/thanhvien/hienthitv.php");
	}
?>