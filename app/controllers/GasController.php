<?php

class GasController extends BaseController {
	public function index(){
		$uid = $_COOKIE["uid"];
		if(!is_numeric($uid)){
			$uid = 0;
		}
		$data = DB::Select("SELECT * FROM `order` WHERE user_id = '". $uid ."'");
					
		return View::make('gas/report', array('orders' => $data));
	}
	
	//Testing
	
	public function getRecord($order_id){
		if(!is_numeric($order_id)){
			$order_id = 0;
		}
		//$data = DB::Select("SELECT * FROM `gas_record` WHERE order_id = '". $order_id ."'");
		
		$data = Order::find($order_id);
		
		$i = 0;
		$gas_value = array();
		foreach($data->gas as $d){
			$gas_value[$i] = array($d->getLocation() , round($d->getGasValue(), 2));
			$i++;
		}
		
		return $gas_value;
	}
	
	public function getStandardValue(){
		return 0.08;
	}
	
	
	
	public function createGasRecord($id){
		$gas = new Gas;
		return View::make('gas/create')
					->with('order', Order::find($id))
					->with('gas', $gas);
	}
	
	public function storeGasRecord(){
		$orderId = Input::get('order_id');
		$value = Input::get('value');
		$location = Input::get('location');
		
		$gas = new Gas;
		
		$order = Order::find($orderId);
		$gas->order()->associate($order);
		
		$gas->setGasValue($value);
		$gas->setLocation($location);
		$gas->save();
		
		return Redirect::route('front.gas.create.get', ['id' => $orderId]);
	}
	
	public function deleteGasRecord($id, $order_id){
		$gas = Gas::find($id)->delete();
		return Redirect::route('front.gas.create.get', ['id' => $order_id]);
	}
}