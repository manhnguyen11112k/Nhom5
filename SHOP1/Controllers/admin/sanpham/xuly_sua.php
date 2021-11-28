<?php
	$masp = $_POST["masp"];
	$tensp = $_POST['tensp'];
	$nxb = $_POST['nxb'];
	$xuatxu = $_POST['xuatxu'];
	$baohanh = $_POST['baohanh'];
	$tinhtrang = $_POST["tinhtrang"];
	$chitiet = $_POST['mota'];
	$gia = $_POST['gia'];
	$loaisp = $_POST['loaisp'];
	$anh = $_POST['anh'];
	
	$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql = "update sanpham set tensp = '$tensp', nxb = '$nxb', xuatxu = '$xuatxu', baohanh = '$baohanh', tinhtrang = '$tinhtrang', chitiet = '$chitiet', gia = '$gia', loaisp = '$loaisp', anh = '$anh' where masp = '$masp'";

	$kq = mysqli_query($conn, $sql);

	if($kq )
	{
		header("location: ../../../Views/admin/sanpham/hienthisp.php");
	}
?>