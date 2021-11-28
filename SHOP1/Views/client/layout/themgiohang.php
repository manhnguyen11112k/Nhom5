<?php
	//$id = $_POST["id"];
	$tensp = $_POST['tensp'];
	$masp = $_POST['masp'];
	$chitiet = $_POST['chitiet'];
	$gia = $_POST['gia'];
	$loaisp = $_POST['loaisp'];
	$anh = $_POST['anh'];
	$soluong = $_POST['soluong'];
	$tien = $soluong * $gia;
	
	$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql = "insert into giohang (id, tensp, masp, gia, loaisp, anh, soluong, tien) values('', '$tensp', '$masp', '$gia', '$loaisp' '$anh', '$soluong', '$tien')";

	$kq = mysqli_query($conn, $sql);
	if($kq)
	{
		header("location: giohang.php");
	}
?>