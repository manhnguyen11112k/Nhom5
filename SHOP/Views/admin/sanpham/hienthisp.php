<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sản Phẩm</title>
	<style>
	body{
		margin: 0;
		padding: 0;
		width: 100%;
		height: 600px;
		background: #4A4489;
	}
	#menu-top{
		margin-top: -15px;
		width: 100%;
		height: 50px;
		background: #160F35;
	}
	#menu-top ul li{
		list-style: none;
		float: left;
		padding: 15px 10px 0px 20px;
	}
 	#menu-top ul li a{
		text-decoration: none;
		display: block;
		color: white;
	}
	#main{
		width: 100%;
		height: 550px;
		background: #4A4489;
		margin-left: 150px;
		margin-top: 50px;
	}
</style>
</head>
<body>
	<div id="menu-top">
		<ul>
			<li><a href="../index.php">Quay lại</a></li>
			<li>
				<div id="search">
					<form action="" method="">
						<input type="text" placeholder="Nhập nội dung tìm kiếm..." />
						<input type="submit" value="Tìm kiếm" />
					</form>
				</div>
			</li>
		</ul>
		
	</div>
	<div id="main">
		<table style="border: 1px solid #CCC">
			<?php
			require('../../../Models/admin/database.php');
			$db = new database;
			$db->ketnoi();
			$db->dongketnoi();
			?>
			<tr>
				<th>STT</th>
				<th>Mã sp</th>
				<th>Tên sp</th>
				<th>Mô tả</th>
				<th>Ảnh</th>
				<th>Giá</th>
				<th><a href="themsp.php">Thêm</a></th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</table>

	</div>
</body>
</html>