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
					 10
				</div>
				<div class="desc">
					 位置#1讀數
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
					 9
				</div>
				<div class="desc">
					 位置#2讀數
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
					 位置#3讀數
				</div>
			</div>
			<a class="more" href="#">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 8
				</div>
				<div class="desc">
					 位置#4讀數
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
					 5
				</div>
				<div class="desc">
					 位置#5讀數
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
					 1
				</div>
				<div class="desc">
					 位置#6讀數
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

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>
						 位置#
					</th>
					<th>
						 讀數
					</th>
					<th>
						 標準值
					</th>
					<th>
						 讀數與標準值差
					</th>
					<th>
						 濃度水平
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						 1
					</td>
					<td class="">
						 10
					</td>
					<td class="">
						 2
					</td>
					<td class="danger">
						 500%
					</td>
					<td class="danger">
						 偏高
					</td>
				</tr>
				<tr>
					<td>
						 2
					</td>
					<td class="">
						 9
					</td>
					<td class="">
						 2
					</td>
					<td class="danger">
						 450%
					</td>
					<td class="danger">
						偏高
					</td>
				</tr>
				<tr>
					<td>
						 3
					</td>
					<td class="">
						 7
					</td>
					<td class="">
						 2
					</td>
					<td class="danger">
						 350%
					</td>
					<td class="danger">
						偏高
					</td>
				</tr>
				<tr>
					<td>
						 4
					</td>
					<td class="">
						 8
					</td>
					<td class="">
						 2
					</td>
					<td class="danger">
						 400%
					</td>
					<td class="danger">
						偏高
					</td>
				</tr>
				<tr>
					<td>
						 5
					</td>
					<td class="">
						 5
					</td>
					<td class="">
						 2
					</td>
					<td class="warning">
						 250%
					</td>
					<td class="warning">
						 中等
					</td>
				</tr>
				<tr>
					<td>
						 6
					</td>
					<td class="">
						1
					</td>
					<td class="">
						2
					</td>
					<td class="success">
						 50%
					</td>
					<td class="success">
						 低
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop