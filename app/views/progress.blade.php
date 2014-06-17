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
							
					<!-- BEGIN PRODUCT LIST -->
					<div class="row product-list">
						<!-- PRODUCT ITEM START -->
						<?php for($i = 1;$i <= $numOfPhoto; $i++){?>
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="product-item" style="margin:3px">
									<div class="pi-img-wrapper">
										<img src="/photo/<?=$event?>/<?=$i?>.JPG" class="img-responsive" alt="">
										<div>
											<a href="/photo/<?=$event?>/<?=$i?>.JPG" class="btn btn-default fancybox-button">Zoom</a>
											<!--<a href="#product-pop-up_<?=$i?>" class="btn btn-default fancybox-fast-view">View</a>-->
										</div>
									</div>
									<h3><?=$photoDesc[$i - 1]?></h3>
									<!--<div class="pi-price">$29.00</div>-->
										<!--<a href="#" class="btn btn-default add2cart">Add to cart</a>-->
								</div>
							</div>
						<?php }?>
						<!-- PRODUCT ITEM END -->
					</div>
					<!-- END PRODUCT LIST -->
				</div>
				<!-- END TAB 1 -->
	
				<!-- BEGIN TAB 2 -->
				<div class="tab-pane" id="problem">
					<?php for($i = 1;$i < ($numOfProblem - 1);$i++){?>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<img src="/photo/<?=$event?>/problem/<?=$i?>/1_R.JPG" width="100%" height="100%" alt="layer image">
								<div class="row">
									<?php if($hasVideo[$i - 1]){ ?>
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<a href="/timeline/<?=$event?>/problem/<?=$i?>/photo" class="btn btn-block blue-madison"><i class="fa fa-camera top-news-icon"></i> </a>
										</div>	
										<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<a href="/timeline/<?=$event?>/problem/<?=$i?>/video" class="btn btn-block green-meadow"><i class="fa fa-video-camera top-news-icon"></i></a>
										</div>
									<?php }else{ ?>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<a href="/timeline/<?=$event?>/problem/<?=$i?>/photo" class="btn btn-block blue-madison"><i class="fa fa-camera top-news-icon"></i> </a>
										</div>	
									<?php } ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 note note-warning">
								<!--<h4 class="block">Warning! Some Header Goes Here</h4>-->
								<p><?=$problemDesc[$i - 1]?></p>
							</div>
						</div>
						<br>
					<?php } ?>
				<!-- END TAB 2 -->
				</div>
			</div>
		</div>
	</div>
</div>
@stop