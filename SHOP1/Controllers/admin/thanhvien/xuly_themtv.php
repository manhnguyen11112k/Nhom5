
<?php
if (isset($_POST['themtv'])) {
	$id = $_POST["id"];
	$ten = $_POST['ten'];
	$mail = $_POST['email'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$anh = $_POST['anh'];
	
	$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql1 = "insert into dangnhap(id, level, taikhoan, matkhau) values('$id', '', '', '') ";

	$kq1 = mysqli_query($conn, $sql1);

	$sql = "insert into thongtin(id, ten , email, sdt, diachi, anh) values('$id', '$ten', '$mail', '$sdt', '$diachi', '$anh') ";

	$kq = mysqli_query($conn, $sql);

	if($kq || $kq1)
	{
		header("location: ../../../Views/admin/thanhvien/hienthitv.php");
	}
	
}
?>