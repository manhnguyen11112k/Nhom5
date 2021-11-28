<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sản Phẩm</title>
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
	}
	#main table {
		margin: 0px auto;
		background: #A2F1F6;
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
	.pt{
		margin-top: -50px;
		height: 27px;
        background: #4CF9EB;

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
		<table style="border: 2px double red">
			<tr>
				<th>STT</th>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Nhà sản xuất</th>
				<th>Xuất xứ</th>
				<th>Bảo hành</th>
				<th>Tinh trạng</th>
				<th>Mô tả chi tiết</th>
				<th>Giá</th>
				<th>Loại sản phẩm</th>
				<th>Ảnh</th>
				<th><a href="themsp.php">Thêm</a></th>
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

				/*$kq = mysqli_query($conn, "SELECT * FROM sanpham");*/
				mysqli_query($conn,"SET shop 'utf8'");
					$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:8;
					$current_page = !empty($_GET['page'])?$_GET['page']:1;
					$offset = ($current_page - 1) * $item_per_page;
					$kq = mysqli_query($conn,"select * from sanpham order by 'id' ASC LIMIT ".$item_per_page."  OFFSET ".$offset." ");
					$totalRecords = mysqli_query($conn,"select * from sanpham where loaisp = 'laptop'");
					$totalRecords = $totalRecords->num_rows;
					$totalPages = ceil($totalRecords / $item_per_page);
				$i = 1;
				while ($rs = mysqli_fetch_assoc($kq)) {
					echo "<tr >";
					echo "<td>".$i."</td>";
					echo "<td>".$rs["masp"]."</td>";
					echo "<td>".$rs["tensp"]."</td>";
					echo "<td>".$rs["nxb"]."</td>";
					echo "<td>".$rs["xuatxu"]."</td>";
					echo "<td>".$rs["baohanh"]."</td>";
					echo "<td>".$rs["tinhtrang"]."</td>";
					echo "<td>".$rs["chitiet"]."</td>";
					echo "<td>".$rs["gia"]."</td>";
					echo "<td>".$rs["loaisp"]."</td>";
					?>
					<td>
						<img src="<?php echo $rs["anh"]?>" width="50px" height="50px">
					</td>
					<?php
					echo "<td> <a href ='themsp.php'> Thêm </a> </td>";
					echo "<td> <a href ='suasp.php?masp=".$rs['masp']."'> Sửa </a></td>";
					echo "<td> <a href ='../../../Controllers/admin/sanpham/xoasp.php?masp=".$rs['masp']."'> Xóa </a></td>";
					echo "</tr>";
					$i++;
				}
				?>
				<div class="pt">
						<?php
					include '../../client/layout/phantrang.php';
					?>
				</div>
			</table>
		</div>
		<div id="phantranghh">
			<?php 
		/*if ($current_page > 1 && $total_page > 1){
			echo '<a href="hienthisp.php?page='.($current_page-1).'">Prev</a> | ';
		}

				// Lặp khoảng giữa
		for ($i = 1; $i <= $total_page; $i++){
			    // Nếu là trang hiện tại thì hiển thị thẻ span
			    // ngược lại hiển thị thẻ a
			if ($i == $current_page){
				echo '<span>'.$i.'</span> | ';
			}
			else{
				echo '<a href="hienthisp.php?page='.$i.'">'.$i.'</a> | ';
			}
		}

				// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
		if ($current_page < $total_page && $total_page > 1){
			echo '<a href="hienthisp.php?page='.($current_page+1).'">Next</a> | ';
		}*/
		?>			
	</div>

</div>
</body>
</html>