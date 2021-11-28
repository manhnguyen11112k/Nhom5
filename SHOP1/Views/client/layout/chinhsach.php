<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<title>Chính sách</title>
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
		margin-top: 30px;
	}
	#main h3{
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
			<h3>CHÍNH SÁCH BẢO HÀNH TẠI LAPTOP Cshop</h3>
			<br>
			<p>*Lưu ý: Các thiết bị bảo hành phải trong thời gian bảo hành và còn nguyên tem và phiếu bảo hành của Laptop Cshop</p>
			<br>


			<h3>A. ĐỐI VỚI MÁY BÁN ĐÃ QUA SỬ DỤNG</h3>
			<br>

			<p>1. Trong 07 ngày đầu tiên, khách hàng được quyền đổi máy laptop khác tuỳ ý miễn phí (không phải thanh toán phí sử dụng) mà không cần lý do. Khách chỉ cần phải thanh toán/nhận lại khoản tiền chênh lệch giữa giá máy tại thời điểm mua và máy khách hàng muốn đổi sang (Đổi sang máy có sẵn tại cửa hàng). Nếu quá thời gian này, Laptop Cshop sẽ áp dụng chính sách bảo hành 01 đổi 01 linh kiện (Thời gian bảo hành được xác định từ thời điểm mua hàng lần đầu tiên, không tính thời gian đổi trả). Trường hợp trả lại máy chỉ áp dụng cho 07 ngày mua máy đầu tiên với các lỗi liên quan đến phần cứng (Bo mạch chủ, cpu, ram, card màn hình, ổ cứng, màn hình).
			</p>
			<p>2. Bảo hành 01 đổi 01 với linh kiện trong thời gian bảo hành bị lỗi mà có đủ điều kiện bảo hành.</p>
			<p>• Nếu linh kiện thay thế không có sẵn, cần phải đặt hàng thì Laptop Cshop sẽ giải quyết trong thời gian tối đa 01 tuần (không kể ngày Chủ nhật và ngày nghỉ lễ). Nếu quá thời gian 01 tuần mà chưa có linh kiện thay thế, Laptop Cshop sẽ tiến hành đổi sang máy tương tự khác cho Quý khách hàng.
			</p>
			<p>• Nếu Quý khách hàng không đồng ý đổi sang máy tương tự khác, Laptop Cshop sẽ nhập một chiếc máy khác cùng model và cấu hình như máy khách đã mua để đổi trong thời hạn tối đa là 01 tháng.
			</p>
			<p>3. Pin và sạc bảo hành 03 tháng, không bảo hành pin chai; Màn hình được bảo hành trong trường hợp có từ 05 điểm chết trở lên.
			</p>
			<p>4. Không bảo hành với các tùy chọn cấu hình cộng thêm mà không tính thêm chi phí (bàn phím có led, trackpoint, cảm biến vân tay, webcam), màn hình bảo hành theo độ phân giải, không phân biệt loại tấm nền màn hình là TN hay IPS.
			</p>
			<p>6. KHÔNG bảo hành máy đối với trường hợp mất toàn bộ tem mặt trước hoặc mặt sau, nhưng vẫn giữ bảo hành đối với các phần linh kiện được nâng cấp - thay thế, nếu linh kiện đó còn tem của Laptop Cshop và của nhà cung cấp.
			</p>

			<p>6. KHÔNG bảo hành máy đối với trường hợp mất toàn bộ tem mặt trước hoặc mặt sau, nhưng vẫn giữ bảo hành đối với các phần linh kiện được nâng cấp - thay thế, nếu linh kiện đó còn tem của Laptop Cshop và của nhà cung cấp.</p>

			<p>8. Trường hợp sản phẩm mua tại Laptop Tuấn Minh hoạt động bình thường và trong thời gian còn bảo hành, mà khách hàng muốn bán lại máy tính, laptop vì lý do cá nhân, áp dụng giá thu mua như sau:
			</p>
			<p>• Trong 15 ngày đầu tiên kể từ ngày mua, cửa hàng thu mua lại với giá 80% giá bán ban đầu.</p>
			<p>• Kể từ ngày thứ 16 trở đi, Laptop Cshop sẽ căn cứ theo giá nhập sản phẩm tại thời điểm đó để đưa ra giá thu mua.</p>
			<p>* Mức giá thu mua ở trên chưa bao gồm các khoản trừ có thể phát sinh khi sản phẩm có sự thay đổi về ngoại hình, chất lượng do người sử dụng gây ra. (Ví dụ: máy bị rơi, vỡ, biến dạng, gãy cổng kết nối). Không phân biệt linh kiện lắp trong máy là linh kiện cũ hay linh kiện mới.
			</p>
			<br>

			<h3>B. ĐỐI VỚI MÁY BÁN MỚI</h3>

			<p>Bảo hành tại các TTBH của hãng hoặc Laptop Cshop nhận gửi bảo hành máy tại hãng cho khách hàng khi sản phẩm đáp ứng đủ điều kiện bảo hành của hãng: Sản phẩm phải còn nguyên tem bảo hành, không cấn móp, rơi vỡ, không có nước hoặc côn trùng xâm nhập vào, màn hình không vỡ, không chảy mực, không bị chập cháy. 
			</p>
			<br>
			<h3>ĐỊA CHỈ NHẬN BẢO HÀNH</h3>

			<p>Thời gian tiếp nhận bảo hành sản phẩm từ13h30 đến 19h tất cả các ngày trong tuần (trừ ngày nghỉ Lễ, Tết ).</p>

			<p>Địa chỉ: Lương Sơn - HN</p>

			<p>Hotline: 096.690.0260 - 096.801.8890</p>
		</div>
	</body>
	<footer>
		<ul>
			<li>
				<p>Cshop</p>
				<br>
				<p>Địa chỉ: Số 8 Ngõ 329 Vũ Hữu, Thanhh Xuân Bắc, Thanhh Xuân, Hà Nội</p>
				<p>Điện thoại: 0966900220 - 096.801.8880</p>
				<p>Email: doankhoiatk@gmail.com</p>
				<p>Web: http://laptopcshop.vn </p>
				<p>Facebook: https://www.facebook.com/laptop.Cshop</p>
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