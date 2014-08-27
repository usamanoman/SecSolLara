<?php

class Topic extends \Eloquent {
	protected $fillable = [];
	public function replies() {
		return $this->hasMany('Reply');
	}

	public function user()
    {
        return $this->belongsTo('User');
    }

    public static $rules = array(
    'title'=>'required|min:2',
    'content'=>'required|min:2',
    'keywords'=>'required|min:3',
    'forum_id'=>'required|numeric|min:1',
    
    );
}