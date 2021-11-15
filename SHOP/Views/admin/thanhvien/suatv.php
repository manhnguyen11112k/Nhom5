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
			<form action="" method="post" >
				<table border="1px">
					<tr>
						<th>
							ID : 
						</th>
						<th>
							<input type="text" name="id"><br>
						</th>
					</tr>
					<tr>
						<th>
							Level : 
						</th>
						<th>
							<input type="text" name="level"><br>
						</th>
					</tr>
					<tr>
						<th>
							Họ và tên : 
						</th>
						<th>
							<input type="text" name="hoten"><br>
						</th>
					</tr>
					<tr>
						<th>
							Tài khoản : 
						</th>
						<th>
							<input type="text" name="taikhoan"><br>
						</th>
					</tr>
					<tr>
						<th>
							Mật khẩu : 
						</th>
						<th>
							<input type="text" name="matkhau"><br>
						</th>
					</tr>
					<tr>
						<th>
							Sdt : 
						</th>
						<th>
							<input type="text" name="sdt"><br>
						</th>
					</tr>
					<tr>
						<th>
							EMAIL : 
						</th>
						<th>
							<input type="text" name="email"><br>
						</th>
					</tr>
					<tr>
						<th>
							Địa chỉ : 
						</th>
						<th>
							<input type="text" name="diachi"><br>
						</th>
					</tr>
					<tr>
						<th>
							<input type="submit" value="Sửa">
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