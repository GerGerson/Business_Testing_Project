<?php

class BookingController extends BaseController {
	public function submit(){
		$date = Input::get('date');
		$period = Input::get('period');
		$uid = $_COOKIE["uid"];
		$rid = 0;
		

		$rid = DB::table('reserve')->insertGetId(
			array('uid' => $uid, 'date' => $date, 'period' => $period)
		);
		
		return $rid;
	}
	
	public function getReservesByDate(){
		$date_from = Input::get('date_from');
		$date_to = Input::get('date_to');
		$data = null;
		
		$data = DB::select("SELECT * FROM reserve WHERE date BETWEEN '" . $date_from . "' AND '" . $date_to . "'");
		
		return $data;
	}
	
	public function checkReserve(){
		$date = Input::get('date');
		$period = Input::get('period');

		$data = DB::table('reserve')->where('date', $date)
									->where('period', $period)
									->first();
		
		if($data != null){
			return 'false';
		}else{
			return 'true';
		}
	}

}
?>