<?php

class Listings extends \Eloquent {
	protected $fillable = [];
	
	public function bids()
    {
        return $this->hasMany('bids');
    }

    public function users()
    {
        return $this->hasMany('users');
    }

    public function images()
    {
        return $this->hasMany('images');
    }

    public function watchlist()
    {
        return $this->belongsTo('watchlists');
    }
}