<?php

class Images extends \Eloquent {
	protected $fillable = ['listing_id', 'image_location'];
    protected $table = "images";
	

    public function listing()
    {
        return $this->belongsTo('listings');
    }
	
}