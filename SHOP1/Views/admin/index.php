<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
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
			background: #fb5530;
		}
		#menu-top ul li{
			list-style: none;
			float: left;
			border: ;
			padding: 15px 10px 0px 20px;
		}
		#menu-top ul li a{
			text-decoration: none;
			color: white;
			font-size: 18px;
		}
		#main{
			width: 100%;
			height: 540px;
			margin-top: 50px;
		}
		#main ul li{
			border: 1px solid yellow;
			width: 30%;
			height: 150px;
			float: left;
			background: #fb5530;
			list-style: none;
			margin-left: 20px;
			text-align: center;
		}
		#main ul li a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
	<div id="menu-top">
		<?php
		$conn = mysqli_connect("localhost","root","","shop");
		mysqli_query($conn,"SET shop 'utf8'");
		$sql = "select * from dangnhap";
		$kq = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($kq);
		$rs = mysqli_fetch_array($kq);
		?>
		<ul>
			<?php
			if (isset($_SESSION['test'])==$rs[2]) {?>
				<li>
					<a href="#">
						<?php echo $_SESSION['test'] ?>
					</a>
				</li>	
			<?php } else {?>
				<li>
					<a href="#">Tài khoản</a>
				</li>
			<?php }
			?>
			<li><a href="../../Views/client/layout/index.php">Trang chủ</a></li>
		</ul>
	</div>
	<div id="main">
		<ul>
			<li>
				<div id="tv">
					<a href="thanhvien/hienthitv.php"><h1>Thành viên</h1></a>
				</div>
			</li>
			<li> 
				<div id="sp">
					<a href="sanpham/hienthisp.php"><h1>Sản phẩm</h1></a>
				</div>
			</li>
			<li>
				<div id="bv">
					<a href=""><h1>bài viết</h1></a>
				</div>
			</li>
		</ul>
	</div>
</body>
</html>