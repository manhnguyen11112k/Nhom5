<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<title>Giới thiệu</title>
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
		padding-left: 100px;
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
		background: #fb5530 url(../../../image/search.PNG) no-repeat center;
	}
	#gh{
		float: left;
		margin-left: 60px;
		margin-top: 30px;
	}
	.menu{
		width: 100%;
		height: 50px;
		background: #fb5530;
		margin-top: 2px;
		margin-bottom: 30px;
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
		padding-top: 30px;
	    width: 90%;
	    border: 1px solid #fb5530;
		margin: 0px auto;
	}
	#main h5{
		padding: 0px 20px 10px 20px;
		color: red;
		font-size: 18px;
	}
	#main p{
		padding: 0px 20px 0px 20px;
		font-size: 17px;
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
		<?php
		$conn = mysqli_connect("localhost","root","","shop");
		mysqli_query($conn,"SET shop 'utf8'");
		$sql = "select * from dangnhap";
		$kq = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($kq);
		$rs = mysqli_fetch_array($kq);
		?>
		<div id="top-left">
			<ul>
				<li><a href="#" >Nguyễn Đức Mạnh</a></li>
				<li><a href="">0982 43 1556</a></li>
				<li><a href="">Liên Sơn - Lương Sơn - Hòa Bình</a></li>
				<li><a style="border-right: none;" href="">Kết nối </li>
					<li class="icon"><a style="border-right: none; padding-left: 0px; " href=""><i class="fab fa-facebook"></i> <i class="fab fa-instagram"></i></a></a></li>
					<?php
					if (isset($_SESSION['test'])==$rs[2]) {?>
						<li>
							<a href="#">
								<?php echo $_SESSION['test'] ?></a>
							</li>
							<li>
								<a href="dangxuat.php">Đăng xuất</a>
							</li>
						<?php } else {?>
							<li>
								<a href="dangky.php">Đăng ký</a>

							</li>
							<li>
								<a href="dangnhap.php#">Đăng nhập</a>
							</li>
						<?php }
						?>
				</ul>
			</div>
		</div>
		<div id="header">
			<div id="logo">
				<img src="../../../image/logo.png" alt="" width=" 220px" height="80px">
			</div>
			<div id="search">
				<form action="" method="">
					<input type="text" placeholder="Nhập nội dung tìm kiếm..." />
					<input type="submit" value="&nbsp;" />
				</form>
			</div>
			<div id="gh">
				<a href=""><img src="../../../image/gh.PNG" alt=""></a>
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
			<p>Bạn dự định mua laptop cũ? Bạn muốn sở hữu chiếc laptop tốt nhất với một giá thành thật sự hợp lý? Hãy đến Laptop Cshop – Chuyên laptop Đẹp và Chất. Chúng tôi không bán loại hàng rẻ nhất, nhưng chúng tôi bán loại hàng chất lượng nhất.</p>
			<br>
			<h5>1. Laptop Cshop – địa chỉ mua laptop cũ đáng tin cậy</h5>
			<br>

			<p>Chúng tôi chuyên mua bán laptop cũ – mới các loại, từ xách tay đến chính hãng. Hàng laptop cũ đa phần mới 99%, thường là hàng dùng lướt hoặc thanh lý từ các dự án dự phòng, hay hàng trôi bảo hành. 
				Mỗi chiếc máy chúng tôi nhập đều qua tuyển chọn, kiểm tra gắt gao, chứ không nhập xô bồ hàng lô như nhiều nơi. Nếu bạn lựa chọn đến với laptop Cshop, chúng tôi xin cam kết chắc chắn 2 điều:
				Thứ nhất: Chỉ bán hàng nguyên zin 100%
				Thứ hai: Chỉ bán hàng hình thức đẹp
				Ngoài ra, chúng tôi cũng quán triệt nguyên tắc bán hàng:
				KHÔNG đăng giá ảo, bán đúng giá niêm yết
				KHÔNG cộng thêm tiền chênh lệch hình thức, webcam, fingerprint… vào giá bán như  nhiều nơi khác.
			</p>
			<br>
			<h5>2. Laptop Cshop cung cấp linh – phụ kiện laptop giá rẻ</h5>
			<br>

			<p>Chúng tôi cung cấp tất cả linh kiện – phụ kiện laptop chính hãng với giá cả cạnh tranh. Đặc biệt đối với các khách hàng mua laptop sẽ được hỗ trợ mua linh – phụ kiện giá gốc, rẻ hơn ngoài thị trường 20-30%
			</p>
			<br>
			<h5>3. Laptop Cshop – địa chỉ sửa chữa và dịch vụ laptop uy tín
			</h5>
			<br>
			<p>Chúng tôi có kĩ thuật viên laptop kinh nghiệm gần 10 năm trong nghề, sẵn sàng hỗ trợ khi các bạn gặp các sự cố về laptop. Phục vụ nhiệt tình, nhanh chóng, chất lượng. Không chặt chém, không luộc đồ, kiểm tra tình trạng máy miễn phí, báo giá trước khi sửa và bạn sẽ được chứng kiến quá trình sửa chữa – thay thế - cài đặt.</p>
			<br>

			<p>Hãy lưu lại địa chỉ mua bán và cung cấp các dịch vụ laptop uy tín:</p>
			<br>

			<h5>Laptop Cshop
			</h5>

			<h5>Địa chỉ: Lương Sơn – Hòa Bình</h5>

			<h5>Hotline: 096.690.0230 – 096.801.8890</h5>
		</div>
	</body>
	<footer>
		<ul>
			<li>
				<p>Cshop</p>
				<br>
				<p>Địa chỉ: Số 8 Ngõ 329 Vũ Hữu, Thanhh Xuân Bắc, Thanhh Xuân, Hà Nội</p>
				<p>Điện thoại: 0966900230 - 096.801.8890</p>
				<p>Email: doankhoiatk@gmail.com</p>
				<p>Web: http://laptopcshop.vn </p>
				<p>Facebook: https://www.facebook.com/laptop.áhop</p>
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