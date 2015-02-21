<?php

class Measure extends Eloquent {

	protected $table = 'msrs';

	protected $fillable = ['name'];

	public $timestamps = false;

}