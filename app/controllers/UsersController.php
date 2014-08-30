<?php

class UsersController extends \BaseController {
	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
	}
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
	        $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->role = Input::get('role');
		    $user->save();
		 
		    return Redirect::to('user/create')->with(array('message'=>'Thanks for registering!','title'=>'Sign Up'));
	    } else {
	        // validation has failed, display error messages
	         return Redirect::to('user/create')->with('title','Sign Up')->withErrors($validator)->withInput();
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
		if(!Auth::check()){
			return Redirect::to('/');
		}
		$user=User::find($id);
		return View::make('users.edit')->with(array('title'=>'Edit Profile','user'=>$user));
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

		$destinationPath = '';
	    $filename        = '';

	    if (Input::hasFile('image')) {
	        $file            = Input::file('image');
	        $destinationPath = '/img/';
	        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
	    }


	    $pizza = Pizza::create(['name'       => Input::get('name'),
	                           'price'       => Input::get('price'),
	                           'ingredients' => Input::get('ingredients'),
	                           'active'      => Input::get('active'),
	                           'path'        => $destinationPath . $filename]);

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


	public function postlogin(){
		$validator = Validator::make(Input::all(), User::$loginrules);
 
	    if ($validator->passes()) {
	        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), true)) {
			    return Redirect::to('forum');
			}
	    } else {
	        // validation has failed, display error messages
	         return Redirect::to('user/login')->with('title','Login')->withErrors($validator)->withInput();
   			//echo "Not Valid";
	    }
	}

	public function panel(){
		if(!Auth::check()){
			return Redirect::to('/');
		}
		else{
			return View::make('users.panel')->with(array('title'=>'Welcome'));
		}
	}

	public function logout(){
		Auth::logout();
    	return Redirect::to('user/login')->with('message', 'Your are now logged out!');
	}


	public function createAdmin(){
		if(!Auth::check()){
			return Redirect::to('/');
		}
		return View::make('users.create_admin')->with(array('title'=>'Create Admin'));
	}
	public function storeAdmin(){
		if(!Auth::check()){
			return Redirect::to('/');
		}
		$validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {
	        $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->role = Input::get('role');
		    $user->save();
		 
		    return Redirect::to('user/createAdmin')->with(array('message'=>'Thanks for registering!','title'=>'Add Admin'));
	    } else {
	        // validation has failed, display error messages
	         return Redirect::to('user/createAdmin')->with('title','Add Admin')->withErrors($validator)->withInput();
   			//echo "Not Valid";
	    }
	}
}