<?php

class Seller extends Eloquent{

	protected $fillable = ['rating', 'n_sells'];

	public $timestamps = false;

	public function user(){
		return $this->belongsTo('User', 'user_id');
	}

	public function items(){
		return $this->hasMany('Item');
	}

	public function orders(){
		return $this->hasMane('Order');
	}

}