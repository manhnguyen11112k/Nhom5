<?php

session_start();
if (isset($_POST['dangnhap'])) {

	$u = isset($_POST['username']) ? $_POST['username'] : "";
	$p = isset($_POST['password']) ? $_POST['password'] : "";
	$_SESSION['test'] = $_POST['username'];
	$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");


	$sql = "select taikhoan, matkhau, level from dangnhap where taikhoan ='$u' and matkhau = '$p'";
	$kq = mysqli_query($conn,$sql);
	$num_rows = mysqli_num_rows($kq);
	$rs = mysqli_fetch_array($kq);
	if (!$u || !$p ) {
		echo "Bạn đang để trống tài khoản hoặc mật khẩu!";
	}
	else{
		if ($num_rows==0) {
			echo "Tên đăng nhập hoặc mật khẩu không đúng !";
		}
		else if($num_rows)
		{
			if($rs['level'] == 1){
				header("location: ../../../Views/admin/index.php");
				echo "<script>alert('Vui lòng đăng nhập lại')</script>";
			}
			else if($rs['level'] == 0){
				header("location: ../../../Views/client/layout/index.php");
				echo "<script>alert('Vui lòng')</script>";
			}
			else{
				echo "Lỗi đăng nhập!";
			}
		}
	}
	session_write_close();
}
?>