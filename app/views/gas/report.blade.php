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



<div class="alert alert-info" id="info">
	<h2>安全指標簡介</h2>
	<hr/>
	<div class="row">
		<div class="col-md-3">
			<h4><b>無超標</b></h4>
		</div>
		<div class="col-md-3">
			<div class="progress progress-striped active" >
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">

				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3">
			<h4><b>超標</b></h4>
		</div>
		<div class="col-md-3">
			<div class="progress progress-striped active">
				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">

				</div>
			</div>
		</div>
	</div>
	
</div>
							
</hr>

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
						差距
					</th>
					<th colspan="2">
						安全指標
					</th>

					<th >超標</th>
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
		$('#info').hide();
		
		$('#order_selector').live('change', function(){
			var progress_value = 0;
			if($('#order_selector').val() != 0){
				$.get('/gas/getRecord/' +$('#order_selector').val())
					.done(function(graphData){
					
						$.get('/gas/getStandardValue')
							.done(function(standradValue){
								if(graphData.length > 0){
									//$('#record_graph_div').show();
									$('#record_table > tbody:last').empty();
									
									$.each(graphData, function(i, v){
										var standard_over_value = Math.round((v[1]/standradValue)*100);
										if(standard_over_value > 100){
											progress_value = 100;
										}else if(standard_over_value < 1){
											progress_value = 1;
										}else{
											progress_value = standard_over_value;
										}
										
										if(standard_over_value > 100){
											$('#record_table > tbody:last').append('<tr><td><h4>'+v[0]+'</h4></td><td><h4>'+v[1]+' ppm</h4></td><td><h4>'+standradValue+' ppm</h4></td><td><h4>+/-'+(Math.round(Math.abs(v[1] - standradValue) * 100)/ 100)+' ppm</h4></td><td colspan="2" style="width: 30%"><div class="progress progress-striped active"><div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></td><td class="danger"><h4>'+(standard_over_value/100)+'倍</h4></td></tr>');
										}else{
											$('#record_table > tbody:last').append('<tr><td><h4>'+v[0]+'</h4></td><td><h4>'+v[1]+' ppm</h4></td><td><h4>'+standradValue+' ppm</h4></td><td><h4>+/-'+(Math.round(Math.abs(v[1] - standradValue) * 100)/ 100)+' ppm</h4></td><td colspan="2"><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></td><td class="success"><h4>無超標</h4></td></tr>');
										}
									});
									$('#info').show();
									$('#record_table_div').show();
									$('#msg').hide();
									//Custom.chart(graphData, standradValue);
									
									
								}else{
									$('#record_table_div').hide();
									$('#msg').empty();
									$('#msg').append("No Data Found");
									$('#msg').show();
								}
							});
					});
			}else{
				$('#record_table_div').hide();
				$('#msg').empty();
				$('#msg').append("No Order Selected");
				$('#msg').show();
			}
		});
    });
</script>
@stop