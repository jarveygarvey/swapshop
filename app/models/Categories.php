<?php

class Categories extends \Eloquent {
	protected $fillable = [];
	
	public function listings()
    {
        return $this->hasMany('listings');
    }
	
}