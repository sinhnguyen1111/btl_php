<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="public/frontend/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="public/frontend/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="public/frontend/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="public/frontend/css/slicknav.min.css"/>
	<link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="public/frontend/css/magnific-popup.css"/>
	<link rel="stylesheet" href="public/frontend/css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="public/frontend/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="home.html" class="site-logo">
					<img src="public/frontend/img/logo.png" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<div class="user-panel">
						<a href="">Login</a> / <a href="">Register</a>
					</div>
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="home.html">Trang chủ</a></li>
						<li><a href="games.html">Sách</a>
							<ul class="sub-menu">
								<li><a href="game-single.html">Tin tức</a></li>
							</ul>
						</li>
						<li><a href="review.html">Liên hệ</a></li>
						
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="public/frontend/img/page-top-bg/1.jpg">
		<div class="page-info">
			<h2>Sách hay</h2>
			
		</div>
	</section>
	<!-- Page top end-->




	<!-- Games section -->
	<section class="games-section">
	<h3>Sách: <?php echo $detail['name']?></h3>
		<div class="container">
        
        
        
        <div>
            <?php echo $detail['content']?>
        </div>
			
				
			
		</div>
        
	</section>
	<!-- Games end-->


	<!-- Featured section -->
	
	<!-- Featured section end-->


	<!-- Newsletter section -->
	<!-- <section class="newsletter-section">
		<div class="container">
			<h2>Tìm kiếm</h2>
			<form class="newsletter-form" action="">
				<input type="text" placeholder=" tên sách,tên giác giả...">
				<button class="site-btn">tìm kiếm  <img src="public/frontend/img/icons/double-arrow.png" alt="#"/></button>
			</form>
		</div>
	</section> -->
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				<img src="public/frontend/img/footer-left-pic.png" alt="">
			</div>
			<div class="footer-right-pic">
				<img src="public/frontend/img/footer-right-pic.png" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="public/frontend//img/logo.png" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Games</a></li>
				<li><a href="">Reviews</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="public/frontend/js/jquery-3.2.1.min.js"></script>
	<script src="public/frontend/js/bootstrap.min.js"></script>
	<script src="public/frontend/js/jquery.slicknav.min.js"></script>
	<script src="public/frontend/js/owl.carousel.min.js"></script>
	<script src="public/frontend/js/jquery.sticky-sidebar.min.js"></script>
	<script src="public/frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="public/frontend/js/main.js"></script>

	</body>
</html>