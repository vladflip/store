<?php

class Order extends Eloquent{

	public $timestamps = false;

	public function customer(){
		return $this->belongsTo('User', 'user_id');
	}

	public function seller(){
		return $this->belongsTo('Seller', 'seller_id');
	}

	public function items(){
		return $this->belongsToMany('Item', 'order_items', 'order_id', 'item_id');
	}
	
}