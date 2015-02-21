<?php

class Categories extends Eloquent {

	private static $cats = [
		'верх' => [
			'легкое' => [
				'футболка' => [
					'лонгслив'
				],

				'майка'
			], 
			'среднее' => [
				'пиджак',

				'кофта' => [

					'r' => [
						'балахон',
						'худи',
						'кенгуру'
					],

					'реглан',

					'свитшот',

					'олимпийка',

					'r' => [
						'бомбер',
						'американка'
					],

					'кардиган'

				],

				'рубашка'
			],
			'тяжелое' => [
				'свитер',

				'куртка' => [
					'анорак',
					'харик',
					'ветровка',
					'джинсовка'
				],

				'пальто' => [
					'тренч',
					'дафлкот'
				]
			]
		],
		'низ' => [
			'легкое' => [
				'шорты',
				'юбка'
			]

		]
	];

	public static $bla = [
		'top' => [
			'среднее' => [

				'пиджак',

				'кофта' => [

					'реглан',

					'r' => [
						'бомбер',
						'американка'
					],
				],
			]
		],
		'bottom' => [
			'среднее' => [

				'пиджак',

				'кофта' => [

					'реглан',

					'r' => [
						'бомбер',
						'американка'
					],
				],
			]
		]
	];

	protected $fillable = ['name', 'lft', 'rgt'];

	public $timestamps = false;

	protected $table = 'categories';

	public function items(){
		return $this->hasMany('Item');
	}

	public static function get(){
		return self::$bla;
	}

	public static function measures(){
		return $this->belongsToMany('Measure', 'msrs_categories', 'category_id', 'msr_id');
	}

}