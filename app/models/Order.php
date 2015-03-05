<?php
class Order extends Entity{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'order';
	
	/**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('User');
    }
	
	/**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gas()
    {
        return $this->hasMany('Gas');
    }
	
	public function getOrderName(){
		return $this->order_name;
	}
	
	public function getRefId(){
		return $this->ref_id;
	}
	
	public function setOrderName($name){
		$this->order_name = $name;
		return $this;
	}
	
	public function setRefId($refId){
		$this->ref_id = $refId;
		return $this;
	}

}