@extends('layouts/main')

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
			將軍澳富寧花園裝修進度 <small> 已於 <?=$date?> 更新 </small>
			<!-- testing -->
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/">進度跟進時間表</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="/timeline/<?=$event?>">工作進度 <?=$event?></a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="/timeline/<?=$event?>#problem">問題</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				圖片
			</li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<div class="row">
	<div class="col-md-12 article-block">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="note note-warning">
					<p>
						<?=@$desc[$problem_id]?>
					</p>
				</div>
			</div>
		</div>
	
		<!-- BEGIN PRODUCT LIST -->
		<div class="row product-list">
			<!-- PRODUCT ITEM START -->
			<?php for($i = 1;$i <= $numOfPhoto; $i++){?>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<div class="product-item" style="margin:3px">
						<div class="pi-img-wrapper">
							<img src="/photo/<?=$event?>/problem/<?=$problem_id?>/<?=$i?>_R.JPG" class="img-responsive" alt="">
							<div>
								<a href="/photo/<?=$event?>/problem/<?=$problem_id?>/<?=$i?>.JPG" class="btn btn-default fancybox-button">Zoom</a>
								<!--<a href="#product-pop-up_<?=$i?>" class="btn btn-default fancybox-fast-view">View</a>-->
							</div>
						</div>
						<h3>
											
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
</div>
<!--<iframe width="1280px" height="720" src="//www.youtube.com/embed/M7lc1UVf-VE" frameborder="0" allowfullscreen></iframe>-->
@stop