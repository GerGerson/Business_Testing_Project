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
				影片
			</li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
		<div id="video_msg" class="note note-warning">
			<p>
				<?=$arrDesc[$problem_id]?>
			</p>
		</div>
	</div>
</div>

<?php for($i = 0; $i < @sizeof($arrVideo[$problem_id]);$i++){?>

<div class="row" style="margin-bottom: 30px">
	<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6" >
		<div class="video-container">
			<iframe width="720px" height="480px" src="//www.youtube.com/embed/<?=$arrVideo[$problem_id][$i]?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<?php }?>

<div class="clearfix"></div>
@stop