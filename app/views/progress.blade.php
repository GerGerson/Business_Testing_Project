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
				<a href="#">工作進度 <?=$event?></a>
			</li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->
			
<div class="row">
	<div class="col-md-12 article-block">
		<div class="portlet-body ">
			<ul class="nav nav-tabs ">
				<li class="active">
					<a href="#photo" data-toggle="tab" id="tab_photo">工作進度圖</a>
				</li>
				<li class="">
					<a href="#problem" data-toggle="tab" id="tab_problem">問題<i class="fa fa-exclamation-circle top-news-icon"></i></a>
				</li>
									
			</ul>
			<div class="tab-content">
				<!-- BEGIN TAB 1 -->
				<div class="tab-pane active" id="photo">
					<?php for($i = 1;$i <= $numOfPhoto; $i++){?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
								<!-- BEGIN PORTLET-->
								<div class="portlet box blue-steel">
									<div class="portlet-title">
										<div class="caption">
											#<?=$i;?>
										</div>
										<div class="tools">
											<a href="" class="collapse">
											</a>
											<a href="" class="remove">
											</a>
										</div>
									</div>
									
									<div class="portlet-body">
										<ul class="list-group" style="margin:0px 10px 0px 10px;">
											<li class="list-group-item list-group-item-info">
													<?=$photoDesc[$i - 1]?>
											</li>
										</ul>
										
										<div class="sale-product">
											<div class="product-item">
												<div class="pi-img-wrapper">
													<img src="/photo/<?=$event?>/<?=$i?>.JPG" class="img-responsive" alt="">
													<div>
														<a href="/photo/<?=$event?>/<?=$i?>.JPG" class="btn btn-default fancybox-button">Zoom</a>
														<!--<a href="#product-pop-up_<?=$i?>" class="btn btn-default fancybox-fast-view">View</a>-->
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<!-- END PORTLET-->
							</div>	
						</div>
					<?php } ?>
				</div>
				<!-- END TAB 1 -->
	
				<!-- BEGIN TAB 2 -->
				<div class="tab-pane" id="problem">
					<?php for($i = 1;$i < $numOfProblem - 1; $i++){?>
						<div class="row">
							<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
								<!-- BEGIN PORTLET-->
								<div class="portlet box red-sunglo">
									<div class="portlet-title">
										<div class="caption">
											#<?=$i;?>
										</div>
										<div class="tools">
											<a href="" class="collapse">
											</a>
											<a href="" class="remove">
											</a>
										</div>
									</div>
									
									<div class="portlet-body">
										<ul class="list-group" style="margin:0px 10px 0px 10px;">
											<li class="list-group-item list-group-item-warning">
													<?=$problemDesc[$i - 1]?>
											</li>
										</ul>

										<div class="product-item">
											<img src="/photo/<?=$event?>/problem/<?=$i?>/1_R.JPG" width="100%" height="100%" alt="layer image">
											<div class="row">
												<?php if($hasVideo[$i - 1]){ ?>
													<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
														<a href="/timeline/<?=$event?>/problem/<?=$i?>/photo" class="btn btn-block btn-warning"><i class="fa fa-camera top-news-icon"></i> </a>
													</div>	
													<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
														<a href="/timeline/<?=$event?>/problem/<?=$i?>/video" class="btn btn-block btn-warning"><i class="fa fa-video-camera top-news-icon"></i></a>
													</div>
												<?php }else{ ?>
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<a href="/timeline/<?=$event?>/problem/<?=$i?>/photo" class="btn btn-block btn-warning"><i class="fa fa-camera top-news-icon"></i> </a>
													</div>	
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<!-- END PORTLET-->
							</div>	
						</div>
					<?php } ?>
				</div>
				<!-- END TAB 2 -->
			</div>
		</div>
	</div>
</div>
@stop