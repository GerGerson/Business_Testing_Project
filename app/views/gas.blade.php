@extends('layouts/gas')

@section('horizontal_menu')
<ul class="nav navbar-nav">
	<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
	<li >
		<a href="/">
		首頁 
		</span>
		</a>
	</li>
	<li class="classic-menu-dropdown active">
		<a href="/timeline">
		進度<span class="selected">
		</a>
	</li>
</ul>
@stop

@section('page_sidebar_menu')
<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
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
@stop

@section('main_content')
<!-- BEGIN PAGE HEADER-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			氣體讀數 <small> 已於 - 更新 </small>
			<!-- testing -->
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/">首頁</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">氣體讀數</a>
			</li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->
<div class="row">
	<div class="col-md-4">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 5
				</div>
				<div class="desc">
					 最新讀數
				</div>
			</div>
			<a class="more" href="#">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
		
	<div class="col-md-4">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 7
				</div>
				<div class="desc">
					 上次讀數
				</div>
			</div>
			<a class="more" href="#">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 -40%
				</div>
				<div class="desc">
					 讀數+/-
				</div>
			</div>
			<a class="more" href="#">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
</div>
			
<div class="row">
	<div class="col-md-12 article-block">
		<div class="portlet-body ">
			<div class="portlet solid grey-cararra bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-bullhorn"></i>氣體讀數圖表
					</div>
				</div>
				<div class="portlet-body">
					<div id="site_activities_loading">
						<img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
					</div>
					<div id="site_activities_content" class="display-none">
						<div id="site_activities" style="height: 228px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop