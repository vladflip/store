<?php

class Category extends Eloquent {

	private static $cats = [
		'top' => [
			'куртка',
			'пиджак',
			'тренч',
			'пальто',
			'рубашка',
			'балахон',
			'худи',
			'джинсовка',
			'свитер',
			'лонгслив',
			'ветровка',
			'кардиган',
			'свитшот',
			'кофта',
			'олимпийка'
		],
		'bottom' => [
			'джинсы',

		]
	];

	protected $fillable = ['name', 'lft', 'rgt'];

	public $timestamps = false;

	protected $table = 'categories';

	public function items(){
		return $this->hasMany('Item');
	}

	public static function get(){
		var_dump(json_decode(json_encode(self::$cats)));
	}

}