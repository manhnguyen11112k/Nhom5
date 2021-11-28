<?php
if (isset($_POST['suatv'])) {
	$id = $_POST["id"];
	$ten = $_POST['hoten'];
	$sdt = $_POST["sdta"];
	$mail = $_POST['email'];
	$diachi = $_POST['diachi'];
	$anh = $_POST['anh'];

	$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");
	$sql1 = "update dangnhap set level ='', taikhoan ='', matkhau='' where id = '$id'";

	$kq1 = mysqli_query($conn, $sql1);

	$sql = "update thongtin set ten ='$ten', email ='$mail', sdt='$sdt',
	diachi ='$diachi', anh ='$anh' where id = '$id'";

	$kq = mysqli_query($conn, $sql);


	if($kq || $kq1)
	{
		header("location: ../../../Views/admin/thanhvien/hienthitv.php");
	}
}
?>