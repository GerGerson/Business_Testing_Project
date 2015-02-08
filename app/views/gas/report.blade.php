@extends('layouts/gas')
@section('horizontal_menu')
<ul class="nav navbar-nav" >
	<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
	<li>
		<a href="/logout">
		登出 
		</span>
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
			氣體讀數 <small> </small>
			<!-- testing -->
		</h3>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<div class="row">
	<div class="col-md-12">
		<select id="order_selector">
			<option value="0"> --- Select a Order --- </option>
			@foreach($orders as $order)
				<?php 
					$datetime = new DateTime($order->created_at);
				?>
				<option value="{{{$order->id}}}">{{{$order->order_name}}} [ <?=$datetime->format('Y-m-d')?> ]</option>
			@endforeach
		</select>
	</div>
</div>


<hr/>



<div class="row">
	<div class="col-md-12">
		<div id="msg" class="alert alert-warning">
			No Order Selected
		</div>
	</div>
</div>

			
<div id="record_graph_div" class="row">
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

<div class="line">
	<hr/>
</div>

<div id="record_table_div" class="row">
	<div class="col-md-12">
		<table id="record_table" class="table table-bordered table-hover">
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
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</div>
@stop

@section('script')
<script>
    jQuery(document).ready(function() {    
	
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		//Layout.initImageZoom();
		Index.init();
		//gas_value);
		
		$('#record_graph_div').hide();
		$('#record_table_div').hide();
		$('.line').hide();
		
		$('#order_selector').live('change', function(){
			if($('#order_selector').val() != 0){
				$.get('/gas/getRecord/' +$('#order_selector').val())
					.done(function(graphData){
					
						$.get('/gas/getStandardValue')
							.done(function(standradValue){
								if(graphData.length > 0){
									$('#record_graph_div').show();
									$('#record_table > tbody:last').empty();
									
									$.each(graphData, function(i, v){
										var standard_over_value = Math.round((v[1]/standradValue)*100);
										if(standard_over_value >= 200){
											$('#record_table > tbody:last').append('<tr><td>'+v[0]+'</td><td>'+v[1]+' ppm</td><td>'+standradValue+' ppm</td><td class="danger">'+standard_over_value+'%</td></tr>');
										}else if(standard_over_value > 50 && standard_over_value < 200){
											$('#record_table > tbody:last').append('<tr><td>'+v[0]+'</td><td>'+v[1]+' ppm</td><td>'+standradValue+' ppm</td><td class="warning">'+standard_over_value+'%</td></tr>');
										}else{
											$('#record_table > tbody:last').append('<tr><td>'+v[0]+'</td><td>'+v[1]+' ppm</td><td>'+standradValue+' ppm</td><td class="success">'+standard_over_value+'%</td></tr>');
										}
									});
									
									$('#record_table_div').show();
									$('.line').show();
									$('#msg').hide();
									Custom.chart(graphData, standradValue);
									
									
								}else{
									$('#record_graph_div').hide();
									$('#record_table_div').hide();
									$('.line').hide();
									$('#msg').empty();
									$('#msg').append("No Data Found");
									$('#msg').show();
								}
							});
					});
			}else{
				$('#record_graph_div').hide();
				$('#record_table_div').hide();
				$('.line').hide();
				$('#msg').empty();
				$('#msg').append("No Order Selected");
				$('#msg').show();
			}
		});
    });
</script>
@stop