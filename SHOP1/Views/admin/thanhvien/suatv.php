<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql = "select * from thongtin where id = '$id'";

	$kq = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($kq)){
		$id = $row["id"];
		$ten = $row["ten"];
		$sdt = $row["sdt"];
		$mail = $row["email"];
		$diachi = $row["diachi"];
		$anh = $row["anh"];
		
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sửa thông tin thành viên</title>
		<style type="text/css">
			body{
				width: 100%;
				height: 500px;
			}
			#chu-chay{
				width: 1024px;
				margin-left: 150px;
				color: red;
				font-size: 20px;
				font-weight: bold;
				background: white;
				margin-top: -3.4px;
				text-align: center;
			}
			#main{
				width: 1024px;
				height: 500px;
			}
			#main form{
				margin-left: 500px;
				margin-top: 100px;
			}
		</style>
	</head>
	<body>
		<div id="chu-chay">
			<marquee>Sửa thông tin thành viên!</marquee>
		</div>
		<div id="main">
			<form action="../../../Controllers/admin/thanhvien/xuly_suatv.php" method="post" >
				<table border="1px">
					<tr>
						<th>
							ID : 
						</th>
						<th>
							<input type="text" name="id" value="<?php echo $id ?>"><br>
						</th>
					</tr>
					
					<tr>
						<th>
							Họ và tên : 
						</th>
						<th>
							<input type="text" name="hoten" value="<?php echo $ten ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Sdt : 
						</th>
						<th>
							<input type="text" name="sdta"
							value="<?php echo $sdt ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							EMAIL : 
						</th>
						<th>
							<input type="text" name="email" value="<?php echo $mail ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Địa chỉ : 
						</th>
						<th>
							<input type="text" name="diachi" value="<?php echo $diachi ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Ảnh : 
						</th>
						<th>
							<input type="text" name="anh" value="<?php echo $anh ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							<input type="submit" name ="suatv" value="Sửa">
						</th>
						<th>
							<button>
								<a href='hienthitv.php' title='Quay lại'>Quay lại</a> 
							</button>
						</th>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>