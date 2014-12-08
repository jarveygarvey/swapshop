<?php

class Sizes extends \Eloquent {
	protected $fillable = [];
	
	public function users()
    {
        return $this->belongsTo('users');
    }
	
}