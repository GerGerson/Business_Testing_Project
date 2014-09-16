<?php

class GasController extends BaseController {
	public function index(){
		$uid = $_COOKIE["uid"];
		if(!is_numeric($uid)){
			$uid = 0;
		}
		$data = DB::Select("SELECT * FROM `order` WHERE user_id = '". $uid ."'");
					
		return View::make('gas', array('orders' => $data));
	}
	
	//Testing
	
	public function getRecord($order_id){
		if(!is_numeric($order_id)){
			$order_id = 0;
		}
		$data = DB::Select("SELECT * FROM `gas_record` WHERE order_id = '". $order_id ."'");
		
		$i = 0;
		$gas_value = array();
		foreach($data as $d){
			$gas_value[$i] = array($d->location , round($d->gas_value, 2));
			$i++;
		}
		
		return $gas_value;
	}
	
	public function getStandardValue(){
		return 0.08;
	}
}