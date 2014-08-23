<?php
 class HomeController extends BaseController{
 	function index(){
 		return View::make('index')->with(array('title'=>'LaraForums'));
 	}
 } 