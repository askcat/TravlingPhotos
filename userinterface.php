<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
	error_reporting(0);
	?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<title>
			Travling Photos
		</title>
		<link rel="stylesheet" href="css/lanrenzhijia.css">
		<link rel="stylesheet" href="css/original.css">
	</head>
	<body background="img/007.jpg" style="background-repeat: no-repeat;background-size:cover">
		<!-- 代码部分begin -->
		<header>
			<h1 class="logo">
				Travling Photos
			</h1>
			<div style="float:right">
				<a href="deletesession.php">
					退出
				</a>
			</div>
		</header>
		<div class="wrap">
			<div class="tabs">
				<a href="#" hidefocus="true" class="active">
					地图
				</a>
				<a href="#" hidefocus="true">
					照片
				</a>
				<a href="#" hidefocus="true">
					搜索
				</a>
			</div>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content-slide" >
							<div align="center">
								<button onclick="window.location.href='jingweidu.php'" style="width:280px; height:30px;">
									获取位置
								</button>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content-slide" >
							<div align="center" >
								<button onclick="window.location.href='scan.php'" style="width:280px; height:30px;">
									拍照
								</button>
								<br>
								<button onclick="window.location.href='gallary.php'" style="width:280px; height:30px;">
									你的照片集
								</button>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content-slide">
							<div align="center">
								<form action="searchplace.php" method="post" name="keyword">
									<input name="keyword" type="text" />
									<input  type="submit" value="搜索" />
							</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="http://www.lanrenzhijia.com/ajaxjs/jquery-1.10.1.min.js"></script>
		<script src="http://www.lanrenzhijia.com/ajaxjs/idangerous.swiper.min.js"></script>
		<script>var tabsSwiper = new Swiper('.swiper-container', {
	speed: 500,
	onSlideChangeStart: function() {
		$(".tabs .active").removeClass('active');
		$(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
	}
});
$(".tabs a").on('touchstart mousedown', function(e) {
	e.preventDefault()
	$(".tabs .active").removeClass('active');
	$(this).addClass('active');
	tabsSwiper.swipeTo($(this).index());
});
$(".tabs a").click(function(e) {
	e.preventDefault();
});</script>
		
	</body>
</html>