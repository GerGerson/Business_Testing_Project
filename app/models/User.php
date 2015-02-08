<?php
class User extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'UserInfo';
	

	public function getId(){
		return $this->record_id;
	}
	
	public function getLoginName(){
		return $this->login_name;
	}
	
	public function getLoginPassword(){
		return $this->login_password;
	}
	
	public function getUserNameChi(){
		return $this->user_chi_name;
	}
	
	public function getUserNameEng(){
		return $this->user_eng_name;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getPhone(){
		return $this->phone;
	}
	
	public function getAddress(){
		return $this->address;
	}
	
	public function getCreateAt(){
		return $this->create_time;
	}
	
	public function getUpdateAt(){
		return $this->last_updated;
	}
	
	public function setLoginName($loginName){
		$this->login_name = $loginName;
		return $this;
	}
	
	public function setLoginPassword($loginPassword){
		$this->login_password = $loginPassword;
		return $this;
	}
	
	public function setUserNameChi($name){
		$this->user_chi_name = $name;
		return $this;
	}
	
	public function setUserNameEng($name){
		$this->user_eng_name = $name;
		return $this;
	}
	
	public function setEmail($email){
		$this->email = $email;
		return $this;
	}
	
	public function setPhone($phone){
		$this->phone = $phone;
		return $this;
	}
	
	public function setAddress($address){
		$this->address = $address;
		return $this;
	}
	
	public function setCreateAt($date){
		$this->create_time = $date;
		return $this;
	}

}