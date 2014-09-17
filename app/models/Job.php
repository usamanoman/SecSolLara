<?php

class Job extends \Eloquent {
	protected $fillable = [];

	public static $rules=array(
		'title'=>'required|min:2',
    	'content'=>'required|min:2',
    	'location'=>'required|min:2',
    	'skills'=>'required|min:2',
    	'type'=>'required|min:2',
    	'poc_phone'=>'required|min:6',
    	'poc_email'=>'required|min:4|email',
        'application_page' => 'required|url',
    	'contract_type'=>'required|min:2',
    	'expected_sal'=>'required|min:2',
    		
    );

    public function user()
    {
        return $this->belongsTo('User');
    }
}