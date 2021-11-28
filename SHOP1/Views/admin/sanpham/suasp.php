<?php
$masp = $_GET['masp'];
$conn = mysqli_connect("localhost","root","","shop");

	mysqli_query($conn,"SET shop 'utf8'");

	$sql = "select * from sanpham where masp = '$masp'";

	$kq = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($kq)){
		$masp = $row["masp"];
		$tensp = $row["tensp"];
		$nxb = $row["nxb"];
		$xuatxu = $row["xuatxu"];
		$baohanh = $row["baohanh"];
		$tinhtrang = $row["tinhtrang"];
		$chitiet = $row["chitiet"];
		$gia = $row["gia"];
		$loaisp = $row["loaisp"];
		$anh = $row["anh"];
	}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>Sửa thông tin sản phẩm</title>
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
			<marquee>Sửa thông tin sản phẩm!</marquee>
		</div>
		<div id="main">
			<form action="../../../Controllers/admin/sanpham/xuly_sua.php" method="post" >
				<table border="1px">
					<tr>
						<th>
							Mã sản phẩn : 
						</th>
						<th>
							<input type="text" name="masp" value="<?php echo $masp ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Tên sản phẩm : 
						</th>
						<th>
							<input type="text" name="tensp" value="<?php echo $tensp ?>"><br>
						<th>
					</tr>
					<tr>
						<th>
							Nhà sản xuất : 
						</th>
						<th>
							<input type="text" name="nxb" value="<?php echo $nxb ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Xuất xứ : 
						</th>
						<th>
							<input type="text" name="xuatxu" value="<?php echo $xuatxu ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Bảo hành : 
						</th>
						<th>
							<input type="text" name="baohanh" value="<?php echo $baohanh ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Tình trạng : 
						</th>
						<th>
							<input type="text" name="tinhtrang" value="<?php echo $tinhtrang ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Mô tả chi tiết : 
						</th>
						<th>
							<input type="text" name="mota" value="<?php echo $chitiet ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Giá : 
						</th>
						<th>
							<input type="text" name="gia" value="<?php echo $gia ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Loại sản phẩm : 
						</th>
						<th>
							<input type="text" name="loaisp" value="<?php echo $loaisp ?>"><br>
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
							<input type="submit" value="Sửa">
						</th>
						<th>
							<button>
								<a href='hienthisp.php' title='Quay lại'>Quay lại</a> 
							</button>
						</th>
					</tr>

				</table>
			</form>
		</div>
	</body>
</html>