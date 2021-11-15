<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<title>Document</title>
	<style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	body{
		font-family: Helvetica;
		font-size: 16px;
	}
	#top{
		float: left;
		height: 35px;
		width: 100%;
		background: #fb5530;
		box-sizing: border-box;
	}
	#top-left{
		margin-left: 40px;
		width: 95%;
		height: 35px;

	}
	#top-left ul li{
		float: left;
		list-style: none;
	}

	#top-left ul li a{
		display: block;
		padding: 0px 10px 0px 10px;
		text-decoration: none;
		color: white;
		border-right: 1px solid #ccc;
		margin-top: 9px;
		font-size: 14px;
	}
	#top-left .icon{
		padding-right: 480px; 
		letter-spacing: 2px;
	}
	#header{
		background-color: #fb5530;
		height: 140px;
	}
	#logo{
		float: left;
		padding-left: 50px;
		padding-top: 10px;
	}
	#search{
		float: left;
		width: 750px;
		margin-top: 25px;
		margin-left: 50px;
		background: white;

	}
	#search form input[type="text"]{
		width: 640px;
		height: 46px;
		border: none;
		text-indent: 10px;
	}
	#search form input[type="submit"]{
		height: 40px;
		width: 54px;
		margin-left: 50px;
		border: none;
		background: #fb5530 url(../../image/search.PNG) no-repeat center;
	}
	#gh{
		float: left;
		margin-left: 80px;
		margin-top: 30px;
	}
	.menu{
		width: 100%;
		height: 50px;
		background: #fb5530;
		margin-top: 2px;
	}
	.menu ul {
		margin-left: 70px;
	}
	.menu ul li{
		list-style: none;
		float: left;
		position: relative;
		padding: 17px 50px 12px 40px;
	}
	.menu ul li a{
		text-decoration: none;
		display: inline-block;
		color: white;
		font-size: 18px;
	}
	.menu li ul{
		display: none;
		position: absolute;
		width: 100%;
		margin-left: 0px;
	}
	.menu li > ul li{
		width: 100%;
		background: #fb5540;
		text-align: left;
		margin-bottom: 1px;
	}
	.menu li:hover > ul{
		display: block;			

	}
	.menu ul li:hover{
		background-color: #f69113;
	}
	.menu ul > li:hover > .submenu{
		display: block;

	}
	.menu li .submenu{
		position: absolute;
		left: 0;
		top: 51px;
	}
	#main{
		width: 95%;
		height: 700px;
		margin: 0 auto;
		border: 1px solid #fb5530;
		margin-top: 30px;
		box-sizing: border-box;
	}
	#main .card{
		margin-top: 20px;
		width: 100%;
		height: 700px;
	}
	#main .card ul li{
		margin-left: 30px;
		float: left;
		list-style: none;
		height: 400px;
		margin-right: 20px;

	}
	#main .card ul li img{
		width: 420px;
		height: 300px;
	}
	#main .card .mt{
		height: 200px;
	}
	#main .card .sp{
		margin-left: 80px;
	}
	#main .card ul li p img{
		border: 1px solid blue;
	}
	#main .card ul li p img:hover {
		border: 2px solid red;
	}
	footer{
		background: #fb5530;
		color: white;
		height: 200px;
		margin-top: 50px;
	}
	footer ul li{
		list-style: none;
		float: left;
		margin-left: 90px;
		margin-top: 30px;
	}
	footer ul li a{
		color: white;
		text-decoration: none;
	}
	
</style>
</head>
<body>
	<div id="top">
		<div id="top-left">
			<ul>
				<li><a href="#" >Nguyễn Đức Mạnh</a></li>
				<li><a href="">0982 43 1556</a></li>
				<li><a href="">Liên Sơn - Lương Sơn - Hòa Bình</a></li>
				<li><a style="border-right: none;" href="">Kết nối </li>
					<li class="icon"><a style="border-right: none; padding-left: 0px; " href=""><i class="fab fa-facebook"></i> <i class="fab fa-instagram"></i></a></a></li>
					<li><a href="">Đăng ký</a></li>
					<li><a style="border-right: none;"href="">Đăng nhập</a></li>
				</ul>
			</div>
		</div>
		<div id="header">
			<div id="logo">
				<img src="../../image/logo.png" alt="" width=" 220px" height="80px">
			</div>
			<div id="search">
				<form action="" method="">
					<input type="text" placeholder="Nhập nội dung tìm kiếm..." />
					<input type="submit" value="&nbsp;" />
				</form>
			</div>
			<div id="gh">
				<a href=""><img src="../../image/gh.PNG" alt=""></a>
			</div>
		</div>
		<div class="menu">
			<ul>
				<li><a href="">Danh mục sản phẩm</a>

					<ul class="submenu">
						<li><a href="">LapTop</a></li>
						<li><a href="">Linh kiện</a></li>
					</ul>

				</li>	
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="gioithieu.php">Giới Thiệu</a></li>
				<li><a href="chinhsach.php">Chính sách bảo hành</a></li>
				<li><a href="tuvan.php">Tư vấn</a></li>
				<li><a href="lienhe.php">Liên hệ</a></li>
			</ul>
		</div>
		<div id="main">
			
			<div class="card">
				<ul>
					<li>
						<img src="../../image/tt5_lt1.jpg" alt="">
						<p>
							<img src="../../image/tt5_lt1.jpg" alt="" style="width:80px; height:70px">
							<img src="../../image/tt_lt1.png" alt="" style="width:80px; height:70px">
							<img src="../../image/tt2_lt1.jpg" alt="" style="width:80px; height:70px">
							<img src="../../image/tt3_lt1.png" alt="" style="width:80px; height:70px">
							<img src="../../image/tt4_lt1.jpg" alt="" style="width:80px; height:70px">
						</p>
					</li>
					<li class="sp">
						<h3>Laptop MSI Modern 14 B5M 064VN</h3>
						<br>
						<p>mã sản phẩm</p>
						<br>
						<p>Nhà sản xuất : MSI</p>
							<br>

							<p>Xuất xứ : Chính hãng</p>
							<br>

							<p>Bảo hành : 12 Tháng</p>
							<br>

							<p>Tình trạng : Mới 100%</p>
							<br>
							<p>
								<h5 style="color:red; font-size: 18px;">2.499.000₫</h5>
							</p>
							<br>
							<a href="">Thêm vào giỏ hàng</a>
							<br>
							<br>
							<a href="">Mua hàng</a>
						</li>
					</ul>
					<ul>
						<li class="mt">
							<br>
							<h3>Mô tả sản phẩm</h3>
							<br>
							<p>Thông số kỹ thuật
								CPU	AMD Ryzen™ 5 5500U 2.1GHz upto 4.0GHz, 6 cores 12 threads
								RAM	8GB DDR4-3200Mhz ( x2 slot So-dimm )
								Ổ cứng	512GB NVMe PCIe Gen3
								Card đồ họa	AMD Radeon™ Graphics
								Màn hình	14.0 inch FHD (1920x1080), IPS-Level, 45% NTSC
								Cổng giao tiếp	1x Type-C USB3.2 Gen2
								3x Type-A USB3.2 Gen2
								1x (4K @ 30Hz) HDMI
								1x Mic-in/Headphone-out Combo Jack
								Audio	2 Loa
								Bàn phím	White backlight keyboard
								Đọc thẻ nhớ	Micro SD
								Chuẩn WIFI	802.11 ax Wi-Fi 6
								Bluetooth	Bluetooth v5.1
								Webcam	HD (30fps@720p)
								Hệ điều hành	Windows 10 Home
								Pin	3 Cell, 39Wh
								Trọng lượng	1.3 kg
								Màu sắc	Xám (Carbon Gray)
								Kích thước	319 x 220.2 x 16.9-18.1 mm
								Đánh giá chi tiết Laptop MSI Modern 14 B5M 014VN
								Hiệu năng vượt trội 
							MSI Modern 14 sở hữu bộ vi xử lý AMD 5000 - Thế hệ mới nhất hiện nay. Khi mà kết hợp với card tích hợp AMD Radeon mang lại hiệu năng cực kì mạnh mẽ để làm đồ họa, edit/render video và bạn có thể chơi mượt các tựa game online hiện nay trên chiếc laptop văn phòng này. </p>
						</li>
					</ul>
				</div>
			</div>
		</body>
		<footer>
			<ul>
				<li>
					<p>Cshop</p>
					<br>
					<p>Địa chỉ: Số 3 Ngõ 325 Vũ Hữu, Thanhh Xuân Bắc, Thanhh Xuân, Hà Nội</p>
					<p>Điện thoại: 0966900220 - 096.801.8880</p>
					<p>Email: doankhoiatk@gmail.com</p>
					<p>Web: http://laptoptuanminh.vn </p>
					<p>Facebook: https://www.facebook.com/laptop.tuanminh</p>
				</li>
				<li>
					<p>DỊCH VỤ KHÁCH HÀNG</p>
					<br>
					<p><a href="">Trợ giúp khách hàng</a></p>
					<p><a href="">Gửi đơn góp ý, khiếu nại</a></p>
					<p><a href="">Chính sách và quy định</a></p>
					<p><a href="">Gửi trả phản hồi của khách hàng</a></p>
				</li>
				<li>
					<p>Về chúng tôi</p>
					<br>
					<p><a href="">Giới thiệu về công ty</a></p>
					<p><a href="">Triết lý kinh doanh</a></p>
					<p><a href="">Hình thành và phát triển</a></p>
				</li>
			</ul>
		</footer>
		</html>