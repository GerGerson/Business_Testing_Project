@extends('layouts/booking')

@section('horizontal_menu')
<ul class="nav navbar-nav">
	<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
	<li >
		<a href="/">
		首頁 
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
		<div class="portlet box green-meadow calendar">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>Calendar
				</div>
			</div>
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<!-- BEGIN DRAGGABLE EVENTS PORTLET-->
						<h3 class="event-form-title">預約日期</h3>
						<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
							<input type="text" class="form-control" readonly>
							<span class="input-group-btn">
							<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
							</span>
						</div>
						<h3 class="event-form-title">時段</h3>
						<div>
							<select class="form-control">
								<option>時段一</option>
								<option>時段二</option>
								<option>時段三</option>
							</select>
							
						</div>
						<h3 class="event-form-title">電話</h3>
						<div>
							<input type="text" class="form-control">
						</div>

						<!-- END DRAGGABLE EVENTS PORTLET-->
					</div>
					<div class="col-md-9 col-sm-12">
						<div id="calendar" class="has-toolbar">
						</div>
					</div>
				</div>
				<!-- END CALENDAR PORTLET-->
			</div>
		</div>
	</div>
</div>
@stop