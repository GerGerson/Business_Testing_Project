<?php

class OrderController extends BaseController {
	public function showOrderList(){
		return View::make('order/show')
					->with('orders', Order::all());
	}
	
	public function search(){
		$search = Input::get('search');
		$orders = Order::where('ref_id', 'LIKE', '%'.$search.'%')->with('user')->get();
		 
		 return $orders;
	}
}