<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thành viên</title>
	<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		font-family: Helvetica;
		font-size: 15px;
	}
	#menu-top{
		width: 100%;
		height: 60px;
		background: #fb5530;
	}
	#menu-top ul li{
		list-style: none;
		float: left;
	}
	#menu-top ul li a{
		text-decoration: none;
		display: block;
		font-size: 17px;
		padding: 19px 20px 0px 40px;
		color: white;
	}
	#menu-top ul li a:hover{
		color: red;
	}
	#search{
		margin-top: 10px;
		width: 500px;
        height: 40px;
        padding-top: 5px;
        margin: 11px 0px 0px 40px;
		background: white;
		position: relative;

	}
	#search form input[type="text"]{
		width: 435px;
		height: 30px;
		border: none;
		position: absolute;
		text-indent: 10px;
	}
	#search form input[type="submit"]{
		height: 31px;
		position: absolute;
		width: 50px;
		margin-left: 445px;
		border: none;
		background: #fb5530 url(../../../image/search.PNG) no-repeat center;
	}
	#main{
		width: 100%;
		height: 550px;
		box-sizing: border-box;
		padding-top: 50px;
		background: #3AF3CA;
	}
	#main table {
		margin: 0px auto;
		background: white;

	}
	#main table a{
		text-decoration: none;
		display: block;
		color: blue;
	}
	#main table tr th{
		padding: 10px 10px 10px 10px;
		text-align: center;

	}
	#main table tr td{
		padding: 10px 10px 10px 10px;
		text-align: center;

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
						<input type="submit" value="" />
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
				<th>Họ và tên</th>
				<th>SDT</th>
				<th>EMAIL</th>
				<th>Địa chỉ</th>
				<th>Ảnh</th>
				<th><a href="themtv.php">Thêm</a></th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			<?php 
				$conn = mysqli_connect("localhost","root","","shop");
				/*$sql = 'select count(masp) as total from sanpham';
				$kq = mysqli_query($conn, $sql);
				$rs = mysqli_fetch_assoc($kq);
				$total_records = $rs['total'];
						// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
				$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
				$limit = 8;
						// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
						// tổng số trang
				$total_page = ceil($total_records / $limit);

						// Giới hạn current_page trong khoảng 1 đến total_page
				if ($current_page > $total_page){
					$current_page = $total_page;
				}
				else if ($current_page < 1){
					$current_page = 1;
				}
						// Tìm Start
				$start = ($current_page - 1) * $limit;
						// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
						// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
				$kq = mysqli_query($conn, "SELECT * FROM sanpham LIMIT $start, $limit");*/

				$kq = mysqli_query($conn, "SELECT * FROM thongtin");
				$i = 1;
				while ($rs = mysqli_fetch_assoc($kq)) {
					echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td>".$rs["id"]."</td>";
					echo "<td>".$rs["ten"]."</td>";
					echo "<td>".$rs["sdt"]."</td>";
					echo "<td>".$rs["email"]."</td>";
					echo "<td>".$rs["diachi"]."</td>";
					?>
					<td>
						<img src="<?php echo $rs["anh"]?>" width="50px" height="50px">
					</td>
					<?php

					echo "<td> <a href ='themtv.php'> Thêm </a> </td>";
					echo "<td> <a href ='suatv.php?id=".$rs['id']."'> Sửa </a></td>";
					echo "<td> <a href ='../../../Controllers/admin/thanhvien/xoatv.php?id=".$rs['id']."'> Xóa </a></td>";
					echo "</tr>";
					$i++;
				}
			?>
		</table>
	</div>
</body>
</html>