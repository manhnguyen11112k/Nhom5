<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thành viên</title>
	<style>
	body{
		margin: 0;
		padding: 0;
		width: 100%;
		height: 600px;
		background: #090101;
	}
	#menu-top{
		margin-top: -15px;
		width: 100%;
		height: 50px;
		background: #FF3636;
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
		font-size: 18px;
	}
	#main{
		width: 100%;
		height: 550px;
		background: #4A4489;
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
			<tr>
				<th>STT</th>
				<th>ID</th>
				<th>Level</th>
				<th>Họ và tên</th>
				<th>Tài khoản</th>
				<th>Mật khẩu</th>
				<th>SDT</th>
				<th>EMAIL</th>
				<th>Địa chỉ</th>
				<th><a href="themtv.php">Thêm</a></th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			<?php
			$i = 0;
			foreach($post as $rs)
			?>
		    <tr>
		    	<th>
		    		<?= ++$i ?>
		    	</th>
		    	<th>
		    		<?= $rs['id']?>
		    	</th>
		    	<th>
		    		<?= $rs['hoten']?>
		    	</th>
		    	<th>
		    		<?= $rs['sdt']?>
		    	</th>
		    	<th>
		    		<?= $rs['email']?>
		    	</th>
		    	<th>
		    		<?= $rs['diachi']?>
		    	</th>
		    </tr>
		</table>
	</div>
</body>
</html>