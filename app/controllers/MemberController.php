<?php

class MemberController extends BaseController {	
	public function LoginCheck()
	{
		$email = Input::get('email');
		$password = hash('md5',Input::get('password'));
		//$SaveMode = Input::get('SaveMode');
		
		$data = DB::Select("SELECT * FROM user WHERE email = '". $email ."' AND password = '" . $password . "'");

		if (count($data) == 0){
			echo (string)count($data);
		}else{
			$e_time = 0;
			//$e_time = ($SaveMode == "false") ? 0 : time()+60*60*24*7;
			
			//Reset Cookie
			$this->resetCookie();
			
			setcookie("uid", $data[0]->uid, $e_time, "/");
			setcookie("email", $email, $e_time, "/");
			
			return "OK";
		}
	}
	
	public function Logout()
	{
		$this->resetCookie();
		return Redirect::to('/');
	}
	
	private function resetCookie(){
		setcookie("uid", "", 0);
		setcookie("email", "", 0);
	}
}