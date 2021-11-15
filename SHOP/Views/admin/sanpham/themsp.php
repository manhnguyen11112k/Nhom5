<!DOCTYPE html>
<html>
	<head>
		<title>Thêm thông tin sản phẩm</title>
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
			<marquee>Thêm thông tin sản phẩm!</marquee>
		</div>
		<div id="main">
			<form action="" method="post" >
				<table border="1px">
					<tr>
						<th>
							Mã sp : 
						</th>
						<th>
							<input type="text" name="ma"><br>
						</th>
					</tr>
					<tr>
						<th>
							Tên sp : 
						</th>
						<th>
							<input type="text" name="ten"><br>
						</th>
					</tr>
					<tr>
						<th>
							Mô tả : 
						</th>
						<th>
							<input type="text" name="mota"><br>
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
							Giá : 
						</th>
						<th>
							<input type="text" name="gia"><br>
						</th>
					</tr>
					
					<tr>
						<th>
							<input type="submit" value="Thêm">
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