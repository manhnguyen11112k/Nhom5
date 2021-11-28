<?php //session_start(); ?>
<?php
      
       // $t = $_SESSION['test'];
		$masp = $_GET['masp'];

		$conn = mysqli_connect("localhost","root","","shop");

		mysqli_query($conn,"SET shop 'utf8'");

		$sql = "select * from sanpham where masp = '$masp'";

		$kq = mysqli_query($conn, $sql);

		while($row = mysqli_fetch_assoc($kq))
		{
			$masp = $row["masp"];
			$tensp = $row["tensp"];
			$chitiet = $row["chitiet"];
			$gia = $row["gia"];
			$loaisp = $row["loaisp"];
			$anh = $row["anh"];
			
		}
		//$sql1 = "select id from  where taikhoan = '$t'";

		//$kq1 = mysqli_query($conn, $sql1)or die( mysqli_error($conn));
        //$row1 = mysqli_fetch_assoc($kq1);
       // echo abc;
		/*while($row1 != Null)
		{
			 $id1 = $row1["id"];
			 echo $id1;
			
		}*/

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="image/avt.ico" />
		<title>Xác nhận</title>
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
				margin-left: 550px;
				margin-top: 100px;
			}
		</style>
	</head>
	<body>
		<div id="chu-chay">
			<marquee>Xác nhận!</marquee>
		</div>
		<div id="main">
			<form action="themgiohang.php" method="post">
				<table border="1px">
					<tr>
						<th>
							Mã sản phẩm: 
						</th>
						<th>
							<input type="text" name="masp" value="<?php echo $masp ?>">
						</th>
					</tr>
					<tr>
						<th>
							Tên sản phẩm: 
						</th>
						<th>
							<input type="text" name="tensp" value ="<?php echo $tensp ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Chi tiết sản phẩm: 
						</th>
						<th>
							<input type="text" name="chitiet" value ="<?php echo $chitiet ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Giá : 
						</th>
						<th>
							<input type="text" name="gia" value ="<?php echo $gia ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Loại sản phẩm : 
						</th>
						<th>
							<input type="text" name="loaisp" value ="<?php echo $loaisp ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Ảnh : 
						</th>
						<th>
							<input type="text" name="anh" value ="<?php echo $anh ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Số lượng : 
						</th>
						<th>
							<input type="text" name="soluong" value =""><br>
						</th>
					</tr>
					<tr>
						<th>
							<input type="submit" value="Xác nhận">
						</th>
						<th>
							<button>
								<a href='trangchu.php' title='Quay lại'>Quay lại</a> 
							</button>
						</th>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>