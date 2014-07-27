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
<title>測試 - 裝修進度跟進</title>
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
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../../assets/admin/pages/css/timeline.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body  class="page-header-fixed page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO 
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
		</div>
		 END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
		<div class="hor-menu hor-menu-light hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li>
					<a href="/">
					首頁
					</a>
				</li>
				<li class="active">
					<a href="/timeline">
					進度 <span class="selected">
					</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<div class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</div>
		<!-- END RESPONSIVE MENU TOGGLER -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- BEGIN HORIZONTAL RESPONSIVE MENU -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
				<li>
					<a href="/">
					首頁 <span class="selected">
					</span>
					</a>
				</li>
				<li class="active">
					<a href="/timeline">
					進度
					</a>
				</li>
			</ul>
		</div>
		<!-- END HORIZONTAL RESPONSIVE MENU -->
	</div>
	<!-- END SIDEBAR -->
	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="container">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					將軍澳富寧花園 <small>裝修進度跟進</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="\">進度跟進時間表</a>
							<i class="fa fa-angle-right"></i>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<ul class="timeline">
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/06/01
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-camera"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/06/01 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\1\1.JPG" alt="">
									工程進度圖 : 20張
									<br><br>
									問題發現圖 : 12張
								</div>
								<div class="timeline-footer">
									<a href="/timeline/1" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/06/11
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-camera"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/06/11 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\2\1.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\2\2.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\2\3.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\2\4.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\2\5.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\2\6.JPG" alt="">
								</div>
								<div class="timeline-footer">
									<a href="/timeline/2" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/06/16
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/06/16 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\3\1.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\3\2.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\3\3.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\3\4.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\3\5.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\3\6.JPG" alt="">
								</div>
								<div class="timeline-footer">
									<a href="/timeline/3" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/06/22
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/06/22 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\4\1.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\4\2.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\4\3.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\4\4.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\4\5.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\4\6.JPG" alt="">
								</div>
								<div class="timeline-footer">
									<a href="/timeline/4" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/06/29
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/06/29 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\5\1.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\5\2.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\5\3.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\5\4.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\5\5.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\5\6.JPG" alt="">
								</div>
								<div class="timeline-footer">
									<a href="/timeline/5" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/07/13
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/07/13 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\6\1.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\6\2.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\6\3.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\6\4.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\6\5.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\6\6.JPG" alt="">
								</div>
								<div class="timeline-footer">
									<a href="/timeline/6" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						
						<li class="timeline-blue-madison">
							<div class="timeline-time">
								<span class="time">
									2014/07/26
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="timeline-body">
								<h2>2014/07/26 工程進度圖、以及問題發現圖檢視</h2>
								<div class="timeline-content">
									<img class="timeline-img pull-left" src="\photo\7\1.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\7\2.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\7\3.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\7\4.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\7\5.JPG" alt="">
									<img class="timeline-img pull-left" src="\photo\7\6.JPG" alt="">
								</div>
								<div class="timeline-footer">
									<a href="/timeline/7" class="nav-link pull-right">
									詳情 <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</li>
						
						<li class="timeline-grey">
							<div class="timeline-time">
								<span class="date">
									2014/07/20
								</span>
							</div>
							<div class="timeline-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="timeline-body">
								<h2>待跟進</h2>
								<br><br><br>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; TBC.
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   
   //alert("hihi");
   //$("#here").animate({scrollTop: $(document).height()});
   //$('html,body').animate({scrollTop:$("#hereA").offset().top}, 'slow');
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52342378-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>