<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.3
Version: 1.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>測試 - 裝修進度跟進 - 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
<!-- END GLOBAL MANDATORY STYLES -->

<!-- Page level plugin styles START -->
<link href="../../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
<link href="../../assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"><!-- for slider-range -->
<link href="../../assets/global/plugins/rateit/src/rateit.css" rel="stylesheet" type="text/css">
<!-- Page level plugin styles END -->

<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>

<link href="../../assets/frontend/pages/css/style-shop.css" rel="stylesheet" type="text/css">

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						將軍澳富寧花園裝修進度 <small> 已於 2014年6月2日 更新 </small>
						<!-- testing -->
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="/">進度跟進時間表</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">工作進度 1</a>
							<i class="fa fa-angle-right"></i>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12 blog-page">
					<div class="row">
						<div class="col-md-12 article-block">
						
							<div class="tabbable-custom ">
								<ul class="nav nav-tabs ">
									<li class="active">
										<a href="#tab_5_1" data-toggle="tab">工作進度圖</a>
									</li>
									<li class="">
										<a href="#tab_5_2" data-toggle="tab">問題<i class="fa fa-exclamation-circle top-news-icon"></i></a>
										
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_5_1">
									
										<!-- BEGIN PRODUCT LIST -->
										<div class="row product-list">
											<!-- PRODUCT ITEM START -->
											<?php for($i = 1;$i <= 20; $i++){?>
												<div class="col-md-3 col-sm-4 col-xs-12">
													<div class="product-item" style="margin:3px">
														<div class="pi-img-wrapper">
															<img src="../../photo/1/<?=$i?>.JPG" class="img-responsive" alt="">
															<div>
																<a href="../../photo/1/<?=$i?>.JPG" class="btn btn-default fancybox-button">Zoom</a>
																<!--<a href="#product-pop-up_<?=$i?>" class="btn btn-default fancybox-fast-view">View</a>-->
															</div>
														</div>
														<h3>
														
															<?php
														switch ($i) {
															case 1;
																echo "大門";
																break;
															case 2;
																echo "大門原入牆櫃位置";
																break;
															case 3;
																echo "大廰影出大門";
																break;
															case 4;
																echo "大門走廊影出大廰";
																break;
															case 5;
																echo "大門走廊及大廰之間電線、銅喉路軌           ";
																break;
															case 6;
																echo "大廰A";
																break;
															case 7;
																echo "大廰B";
																break;
															case 8;
																echo "大廰C(向客房方向影出)";
																break;
															case 9;
																echo "廚房A";
																break;
															case 10;
																echo "廚房B(煤氣錶)";
																break;
															case 11;
																echo "廚房C(電線)";
																break;
															case 12;
																echo "廚房D";
																break;
															case 13;
																echo "廁所A(浴缸位置)";
																break;
															case 14;
																echo "廁所B";
																break;
															case 15;
																echo "廁所C(座廁位置)";
																break;
															case 16;
																echo "廁所D(抽氣位置)";
																break;	
															case 17;
																echo "客房A";
																break;
															case 18;
																echo "客房B";
																break;
															case 19;
																echo "客房C";
																break;
															case 20;
																echo "主人房";
																break;
														}
													?>
														
														</h3>
														<!--<div class="pi-price">$29.00</div>-->
															<!--<a href="#" class="btn btn-default add2cart">Add to cart</a>-->
													</div>
												</div>
											<?php }?>
											<!-- PRODUCT ITEM END -->
										</div>
										<!-- END PRODUCT LIST -->
									</div>
									<div class="tab-pane" id="tab_5_2">
										<div class="row product-list">
											<!-- PRODUCT ITEM START -->
											<?php for($i = 21;$i <= 23; $i++){?>
												<div class="col-md-3 col-sm-4 col-xs-12">
													<div class="product-item" style="margin:3px">
														<div class="pi-img-wrapper">
															<img src="../../photo/1/<?=$i?>.JPG" class="img-responsive" alt="">
															<div>
																<a href="../../photo/1/<?=$i?>.JPG" class="btn btn-default fancybox-button">Zoom</a>
																<!--<a href="#product-pop-up_<?=$i?>" class="btn btn-default fancybox-fast-view">View</a>-->
															</div>
														</div>
														<h3>
														
															<?php
														switch ($i) {
															case 21;
																echo "問題1";
																break;
															case 22;
																echo "問題2";
																break;
															case 23;
																echo "問題3";
																break;
														}
													?>
														
														</h3>
														<!--<div class="pi-price">$29.00</div>-->
															<!--<a href="#" class="btn btn-default add2cart">Add to cart</a>-->
													</div>
												</div>
											<?php }?>
											<!-- PRODUCT ITEM END -->
										</div>
									
										<div class="blog-tag-data">
											
										
											<div class="row" style="margin:15px">
											<?php for($i = 24;$i <= 32; $i++){?>
												<!--BEGIN Image 1 -->
												<img src="/photo/1/<?=$i?>_t.jpg" alt="">
												<!--END Image 1 -->
							
											
											<?php }?>
											
											</div>
										</div>
										<!-- BEGIN Image 1 description -->
											<div>
												<blockquote class="hero">
													<p>
														按解鎖看更多圖
													</p>
													<small><button type="button" class="btn red" disabled>解鎖</button>(功能開發中)</small>
												</blockquote>
											</div>
											<!-- END Image 1 description -->
									</div>
								</div>
							</div>
						</div>
						<!--end col-md-9-->
						<!--
						<div class="col-md-3 blog-sidebar">
							<h3>其他工作進度</h3>
							<div class="top-news">
								<a href="#" class="btn red">
									<span>
										工作進度 2
									</span>
									<em>於 2014年6月9日 更新</em>
									<em>
										<i class="fa fa-square-o"></i>
										未更新 
									</em>
									<i class="fa fa-exclamation-circle top-news-icon"></i>
								</a>
								
								<a href="#" class="btn green">
									<span>
										工作進度 3
									</span>
									<em>於 2014年6月16日 更新</em>
									<em>
										<i class="fa fa-square-o"></i>
										未更新 
									</em>
									<i class="fa fa-exclamation-circle top-news-icon"></i>
								</a>
								
								<a href="#" class="btn blue">
									<span>
										工作進度 4
									</span>
									<em>於 2014年6月23日 更新</em>
									<em>
										<i class="fa fa-square-o"></i>
										未更新 
									</em>
									<i class="fa fa-exclamation-circle top-news-icon"></i>
								</a>
								
							</div>
							<div class="space20">
							</div>
						</div>
						<!--end col-md-3-->
					</div>
						
					<div class="row">
							
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2013 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->





<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>


<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="../../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="../../assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='../../assets/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="../../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
    <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->

    <script src="../../assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    
    <!-- END PAGE LEVEL JAVASCRIPTS -->

<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>