<?php

class Forum extends \Eloquent {
	protected $fillable = [];

	// each bear climbs many trees
	public function topics() {
		return $this->hasMany('Topic');
	}

	public function replies() {
		return $this->hasMany('Reply');
	}

	public static $rules=array(
		'title'=>'required|min:2',
    	'description'=>'required|min:2',
    );
}