<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Đăng ký</title>
	<link rel="shortcut icon" href="image/avt.ico" />
	<style type="text/css">
		.dangky {
			margin-top: 30px;
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
			margin-left: 380px;
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<div id="chu-chay">
		<marquee>Đăng ký tài khoản người dùng!</marquee>
	</div>
	<div id="main">
		<form action="dangky.php" class="dangky" method="post" >
			<table border="1px" align="center">
				<tr>
					<th>
						ID : 
					</th>
					<th>
						<input type="text" name="id"><br>
					</th>
				</tr>
				<tr>
					<th>Level</th>
                    <th>
                        <select name="level">
                            <option value="0">Thành Viên</option>
                            <option value="1">Admin</option>
                        </select>
                    </th>
				</tr>
				<tr>
					<th>
						Tài khoản :
					</th>
					<th>
						<input type="text" name="username"><br>
					</th>
				</tr>
				<tr>
					<th>
						Mật khẩu : 
					</th>
					<th>
						<input type="text" name="password"><br>
					</th>
				</tr>
				<tr>
					<th>
						Họ và tên : 
					</th>
					<th>
						<input type="text" name="ten"><br>
					</th>
				</tr>
				<tr>
					<th>
						Email : 
					</th>
					<th>
						<input type="text" name="email"><br>
					</th>
				</tr>
				<tr>
					<th>
						SDT : 
					</th>
					<th>
						<input type="text" name="sdt"><br>
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
						Ảnh : 
					</th>
					<th>
						<input type="text" name="anh"><br>
					</th>
				</tr>
				<tr>
					<th>
						<input type="submit" name="dangky" value="Đăng ký">
					</th>
					<th>
						<button>
							<a href='dangnhap.php' title='Quay lại'>Quay lại</a> 
						</button>
					</th>
				</tr>
				<?php require '../../../Controllers/client/xuly_dangky.php';?> 
			</table>
		</form>
	</div>
</body>
</html>