<?php

class Item extends Eloquent{

	protected $fillable = [
	// DELETE IN PRODUCTION
		'seller_id',
		'category_id',
	// DELETE IN PRODUCTION
		
		'price', 
		'description',
		'main_pic',
		'views',
		'rate',
		'length',
		'sex'
	];

	public $timestamps = false;

	public function seller(){
		return $this->belongsTo('Seller', 'seller_id');
	}

	public function category(){
		return $this->belongsTo('Category', 'category_id');
	}

}