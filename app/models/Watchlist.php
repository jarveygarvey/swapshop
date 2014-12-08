<?php

class Watchlist extends \Eloquent {
	protected $fillable = ['listing_id', 'user_id'];
    protected $table = "watchlist";
	
	public function user()
    {
        return $this->hasMany('users');
    }

    public function listing()
    {
        return $this->hasMany('Listings');
    }
	
}