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
			Order List <small> </small>
			<!-- testing -->
		</h3>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<div id="record_table_div" class="row">
	<div class="col-md-12">
		<table id="record_table" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>
						 User Name Chi
					</th>
					<th>
						 User Name Eng
					</th>
					<th>
						Email
					</th>
					<th>
						 Order Name
					</th>
					<th>
						
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $order)
					<tr>
						<td>{{$order->user->getUserNameChi()}}</td>
						<td>{{$order->user->getUserNameEng()}}</td>
						<td>{{$order->user->getEmail()}}</td>
						<td>{{$order->getOrderName()}}</td>
						<td><a href="/gas/create/{{$order->getId()}}">Add Gas Value </a></td>
					</tr>
				@endforeach
				
				
			</tbody>
		</table>
	</div>
</div>

@stop

@section('script')

@stop