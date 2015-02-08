<?php

class MemberController extends BaseController {	
	public function SaveContact()
	{
		$contact_name = Input::get('name');
		$contact_method = Input::get('method');
		$contact_content = Input::get('content');
		
		DB::insert('INSERT INTO contact (name, contact, content) VALUES (?, ?, ?)', array($contact_name, $contact_method, $contact_content));
		
		return "OK";
	}

	public function LoginCheck()
	{
		$email = Input::get('email');
		$password = hash('md5',Input::get('password'));
		//$SaveMode = Input::get('SaveMode');
		
		$data = DB::Select("SELECT * FROM UserInfo WHERE email = '". $email ."' AND login_password = '" . $password . "'");

		if (count($data) == 0){
			echo (string)count($data);
		}else{
			$e_time = 0;
			//$e_time = ($SaveMode == "false") ? 0 : time()+60*60*24*7;
			
			//Reset Cookie
			$this->resetCookie();
			
			setcookie("uid", $data[0]->id, $e_time, "/");
			setcookie("email", $email, $e_time, "/");
			
			return "OK";
		}
	}
	
	public function Register()
	{
		$email = Input::get('email');
		$password = hash('md5',Input::get('password'));
		//$SaveMode = Input::get('SaveMode');
		
		DB::insert('INSERT INTO UserInfo (email, login_password) VALUES (?, ?)', array($email, $password));
		
		$data = DB::Select("SELECT * FROM UserInfo WHERE email = '". $email ."'");

		if (count($data) == 0){
			echo (string)count($data);
		}else{
			$e_time = 0;
			//$e_time = ($SaveMode == "false") ? 0 : time()+60*60*24*7;
			
			//Reset Cookie
			$this->resetCookie();
			
			setcookie("uid", $data[0]->id, $e_time, "/");
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
	
	public function IsLoggedUser(){
		$uid = $_COOKIE["uid"];
		if (isset($_COOKIE["uid"])){
			index();
		}else{
			return View::make('/main');
		}
	}
}