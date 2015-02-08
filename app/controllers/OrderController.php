<?php

class OrderController extends BaseController {
	public function showOrderList(){
		return View::make('order/show')
					->with('orders', Order::all());
	}
}