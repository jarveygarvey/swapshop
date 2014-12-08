<?php

class Bids extends \Eloquent {
	protected $fillable = [];

	public function users()
    {
        return $this->belongsTo('users');
    }

    public function listing()
    {
        return $this->belongsTo('Listings');
    }

}