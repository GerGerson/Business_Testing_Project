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
			Add Gas Record <small> {{$order->getOrderName()}} </small>
			<!-- testing -->
		</h3>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<hr/>

<div class="row">
	<div class="col-md-12">
		{{ Form::model($gas, ['route' => ['front.gas.store.post'], 'class' => 'form-horizontal group-border-dashed', 'method' => 'post', 'style' => 'border-radius: 0px;']) }}
			{{ Form::hidden('order_id', $order->getId()) }}	

			
			<div class="form-group">
				{{ Form::label('value', 'Value', ['class' => 'col-sm-3 control-label']) }}
				<div class="col-sm-6">
					{{ Form::text('value', '', ['class' => 'form-control', 'id' => 'value']) }}
				</div>
			</div>
			
			<div class="form-group">
				{{ Form::label('location', 'Location', ['class' => 'col-sm-3 control-label']) }}
				<div class="col-sm-6">
					{{ Form::text('location', '', ['class' => 'form-control', 'id' => 'location']) }}
				</div>
			</div>
			

			<div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
				
			</div>
			
		{{ Form::close() }}
	</div>
</div>

<hr/>

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
				</tr>
			</thead>
			<tbody>
				@foreach($order->gas as $g)
					<tr>
						<td>{{$g->getLocation()}}</td>
						<td>{{$g->getGasValue()}}</td>
					</tr>
				
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@stop

@section('script')

@stop