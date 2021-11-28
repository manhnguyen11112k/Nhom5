<?php
if (isset($_POST['themsp'])) {
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

	$sql = "insert into sanpham(masp, tensp, nxb, xuatxu, baohanh, tinhtrang, chitiet, gia, loaisp, anh) values('$masp','$tensp','$nxb','$xuatxu','$baohanh','$tinhtrang','$chitiet','$gia', '$loaisp', '$anh') ";

	$kq = mysqli_query($conn, $sql);

	if($kq )
	{
		header("location: ../../../Views/admin/sanpham/hienthisp.php");
	}
}
?>