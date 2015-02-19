<?php

class Item extends Eloquent{

	protected $fillable = ['price', 'description'];

	public $timestamps = false;

	public function seller(){
		return $this->belongsTo('Seller', 'seller_id');
	}

	public function category(){
		return $this->belongsTo('Category', 'category_id');
	}

}