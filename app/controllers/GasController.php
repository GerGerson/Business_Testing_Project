<?php

class GasController extends BaseController {
	public function index(){
		$gas_value = array(array('#1' , 10),
							array("#2" , 7),
							array("#3" , 5)
		);		
					
		return View::make('gas', array('gas_value' => $gas_value));
	}
}