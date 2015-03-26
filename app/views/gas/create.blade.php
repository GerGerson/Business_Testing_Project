@extends('layouts/gas')
@section('horizontal_menu')
<ul class="nav navbar-nav" >
	<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
	<li>
		<a href="/logout">
		X 
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
	<div class="col-xs-12 col-md-4 col-md-offset-4">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			新增讀數 <br/><small> {{$order->getOrderName()}} - {{{$order->user->getUserNameChi()}}} - {{{$order->user->phone}}} - {{{$order->getRefId()}}}</small>
			<!-- testing -->
		</h3>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<hr/>

<div class="row">
	<div class="col-xs-12 col-md-4 col-md-offset-4">
		{{ Form::model($gas, ['route' => ['front.gas.store.post'], 'class' => 'form-horizontal group-border-dashed', 'method' => 'post', 'style' => 'border-radius: 0px;']) }}
			{{ Form::hidden('order_id', $order->getId()) }}	

			
			<div class="form-group">
				{{ Form::label('value', '讀數', ['class' => 'col-sm-3 control-label']) }}
				<div class="col-sm-6">
					{{ Form::text('value', '', ['class' => 'form-control', 'id' => 'value']) }}
				</div>
			</div>
			
			<div class="form-group">
				{{ Form::label('location', '地點', ['class' => 'col-sm-3 control-label']) }}
				<div class="col-sm-6">
					<input type="hidden" id="location" name="location" class="form-control select2" >
				</div>
			</div>
			

			<div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<button class="btn btn-primary" type="submit">新增</button>
				</div>
				
			</div>
			
		{{ Form::close() }}
	</div>
</div>

<hr/>

<div id="record_table_div" class="row">
	<div class="col-xs-12 col-md-4 col-md-offset-4">
		<table id="record_table" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>
						 位置#
					</th>
					<th style="text-align: right">
						 讀數(ppm)
					</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($order->gas as $g)
					<tr>
						<td>{{$g->getLocation()}}</td>
						<td style="text-align: right">{{{number_format($g->getGasValue(), 2, '.', '')}}}</td>
						<td><a href="{{ URL::route('front.gas.delete.get', ['id' => $g->id, 'order_id' => $order->id]) }}">刪除</a></td>
					</tr>
				
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop

@section('script')
<script>
$(document).ready(function(){
	$("#location").select2({
            tags: ["大門", "大廳", "客廳", "飯廳", "廁所1", "廁所2", "主人房", "主人房廁所", "客房1", "客房2", "客房3"]
	});
});
</script>
@stop