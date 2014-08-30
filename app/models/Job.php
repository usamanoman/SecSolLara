<?php

class Job extends \Eloquent {
	protected $fillable = [];

	public static $rules=array(
		'title'=>'required|min:2',
    	'content'=>'required|min:2',
    	'location'=>'required|min:2',
    	'skills'=>'required|min:2',
    	'type'=>'required|min:2',
    	'how_to_apply'=>'required|min:2',
    	'lastdate'=>'required|min:2|date',
    	'contract_type'=>'required|min:2',
    	'expected_sal'=>'required|min:2',
    		
    );
}