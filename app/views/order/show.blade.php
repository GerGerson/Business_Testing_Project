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
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			訂單列表 <small> </small>
			<!-- testing -->
		</h3>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
<!-- END PAGE HEADER-->

<hr/>
<div class="row">
	<div class="col-md-12">
		<input type="text" class="input input-medium" name="search" id="search"/>
		<button id="search_btn" class="btn btn-sm btn-default">Search</button>
	</div>
</div>

<hr/>

<div id="record_table_div" class="row">
	<div class="col-md-12">
		<table id="record_table" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>
						編號
					</th>
					<th>
						 用戶名稱
					</th>
					<th>
						電話號碼
					</th>
					<th>
						訂單名稱
					</th>
					<th>
						
					</th>
				</tr>
			</thead>
			<tbody id="order_table">
				@foreach($orders as $order)
					<tr>
						<td>{{$order->getRefId()}}</td>
						<td>{{$order->user->getUserNameChi()}}</td>
						<td>{{$order->user->getPhone()}}</td>
						<td>{{$order->getOrderName()}}</td>
						<td><a href="/gas/create/{{$order->getId()}}">新增讀數</a></td>
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
		$('#search_btn').click(function(){
			$.post("{{URL::route('front.order.search.post')}}",
                    {
                        search: $('#search').val()
                    })
                    .done(function(data){
                        $('#order_table tr').empty();
                        $.each(data, function(k, v){
                            //console.log("", v);
                            var row = $("<tr>");
                            var col = "";
                            
                            col += '<td>'+v.ref_id+'</td>';
							col += '<td>'+v.user.user_chi_name+'</td>';
							col += '<td>'+v.user.phone+'</td>';
							col += '<td>'+v.order_name+'</td>';
							col += '<td><a href="/gas/create/'+v.id+'">Add Gas Value </a></td>';
                            row.append(col);
                            $('#order_table tr:last').after(row);
                        });
                    });
		});
	});
</script>
@stop