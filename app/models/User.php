<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $hidden = array('password', 'remember_token');

	protected $fillable = ['login', 'token'];

	public $timestamps = false;

	public function seller(){
		return $this->hasOne('Seller');
	}

	public function orders(){
		return $this->hasMany('Order');
	}

	public static function notSeller(){
		return static::has('seller', '<', 1);
	}

	public function makeSimpleOrder($item){
		// нужно сделать простые запросы
		// - по айди товара взять айди продавца (DB а не елоквент) - 
		// - 
		$order = new Order;

	}
}
