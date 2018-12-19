<?php
include("vtayar.php");
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hesabım | Fi Optik</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="sstylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +90 000 000 00 00</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="hesabım.php"><i class="fa fa-user"></i> Hesabım</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Favorilerim</a></li>
								
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Sepet </a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="giris.php"><i class="fa fa-lock"></i> Giriş </a></li>
								<li><a href="uyeol.php"><i class="fa fa-lock"></i> Üye Ol </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown"><a href="#">Üyelik Bilgilerim<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="girisbilgileriniguncelle.php"> Giriş Bilgilerimi Güncelle</a></li>
										<li><a href="hesapbilgilerimiguncelle.php">Hesap Bilgilerimi Güncelle</a></li> 
	                              
							</ul>
						</div>
                        <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown"><a href="siparislerim.php">Siparişlerim<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="siparisdetay.php"> Sipariş Detayları</a></li>
										
	                              
							</ul>
						</div>
                        <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown"><a href="#">Adreslerim<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="adresbilgileriniguncelle.php"> Adres Bilgilerini Güncelleme</a></li>
										
							</ul>
						</div>
                        <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown"><a href="#">Favorilerim<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                     
							</ul>
						</div>




					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Arama"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
    <div class="container" style="height:500px">
			<div class="row">
				<div class="col-sm-12">
					
					
				</div>
			</div>
		</div>			
			
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Fİ</span>OPTİK</h2>
							<p>Yaz kış demeden en çok kullanılan aksesuarlar arasında yer alan güneş gözlüklerine Fi Optik ayrıcalıklarıyla sahip olmaya ne dersiniz?</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>optik kılıf</p>
								<h2>20 TL</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>optik kılıf</p>
								<h2>20 TL</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>optik kılıf</p>
								<h2>20 TL</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>optik kılıf</p>
								<h2>20 TL</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p> Fi Optik </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Kurumsal</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hakkımızda</a></li>
								<li><a href="#">İletişim</a></li>
								<li><a href="#">Kullanıcı Sözleşmesi</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Yardım</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hesabım</a></li>
								<li><a href="#">Siparişlerim</a></li>
								<li><a href="#">İade ve Değişim</a></li>
								<li><a href="#">Teslimat ve Kargo</a></li>
								<li><a href="#">Güvenlik</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Kategoriler</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Kadın</a></li>
								<li><a href="#">Erkek</a></li>
								<li><a href="#">Çocuk</a></li>
								<li><a href="#">Aksesuarlar</a></li>
								<li><a href="#">Markalar</a></li>
								<li><a href="#">Tüm Güneş Gözlükleri</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Bizi Takip Edin</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Instagram</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2> </h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="E-mail Adresiniz" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>En son güncellemeleri alın <br/>
									sitemiz ve kendinizi yenileyin</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">  </p>
					<p class="pull-right">  <span><a target="_blank" href=" "> </a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>