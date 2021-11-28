
<?php
if (isset($_POST['dangky'])) {
	$id = $_POST["id"];
	$level = $_POST["level"];
	$ten = $_POST['ten'];
	$mail = $_POST['email'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$anh = $_POST['anh'];
	$u = isset($_POST['username']) ? $_POST['username'] : "";
	$p = isset($_POST['password']) ? $_POST['password'] : "";

	$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql0 = "SELECT * FROM dangnhap WHERE taikhoan = '$u' OR id = '$id'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql0);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="register.php";</script>';
          
        // Dừng chương trình
        die ();
    }

	else{
		$sql1 = "insert into dangnhap(id, level, taikhoan, matkhau) values('$id', '$level', '$u', '$p') ";

		$kq1 = mysqli_query($conn, $sql1);

		$sql = "insert into thongtin(id, ten , email, sdt, diachi, anh) values('$id', '$ten', '$mail', '$sdt', '$diachi', '$anh') ";

		$kq = mysqli_query($conn, $sql);

		if($kq || $kq1)
		{
			header("location: dangnhap.php");
		}
	}
}
?>