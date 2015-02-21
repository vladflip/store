<?php

class Seller extends Eloquent{

	protected $fillable = ['rating', 'n_sells',
	
	// DELETE IN PRODUCTION
	'user_id'];

	public $timestamps = false;

	public function user() {
		return $this->belongsTo('User', 'user_id');
	}

	public function items() {
		return $this->hasMany('Item');
	}

	public function orders() {
		return $this->hasMane('Order');
	}

	public function categories() {
		return $this->belongsToMany('Category', 'seller_categories', 'seller_id', 'category_id');
	}

}