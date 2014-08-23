<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('users.create')->with(array('title'=>'Sign Up'));

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {
	        echo "Validation Passed";
	    } else {
	        // validation has failed, display error messages
	         return View::make('users.create')->with('title','Sign Up')->withErrors($validator)->withInput();
   			//echo "Not Valid";
	    }
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}



	/**
	 * Login the specified resource from storage.
	 * Login /users/
	 *
	 * @param  none
	 * @return Response
	 */
	public function login()
	{
		//Return View
		return View::make('users.login')->with(array('title'=>'Login'));
	}

}