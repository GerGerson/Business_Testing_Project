<?php
class Gas extends Entity{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'gas_record';
	
	/**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order() {
        return $this->belongsTo('Order');
    }
	
	public function getGasValue(){
		return $this->gas_value;
	}
	
	public function getLocation(){
		return $this->location;
	}
	
	public function setGasValue($value){
		$this->gas_value = $value;
		return $this;
	}
	
	public function setLocation($location){
		$this->location = $location;
		return $this;
	}
	
	
}