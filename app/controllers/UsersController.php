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
		if(!Auth::check() ||  Auth::user()->role != 'Admin'){
			return Redirect::to('/');
		}
		$users = User::all();
		return View::make('users.index')->with(array('title'=>'All Users' , 'users' => $users));
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
		 
		    return View::make('users.create')->with(array('message'=>'Thanks for signing up!','title'=>'Sign Up'));
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
		if(isset($errors))
			$message="Some error occurred";
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
		if(!Auth::check()){
			return Redirect::to('/');
		}

		if(Auth::user()->role == 'Company'){
			$file = Input::file('company_logo');
			if(isset($file)){
				$destinationPath =public_path() . '/logo';
				$filename = str_random(4) . $file->getClientOriginalName();
				$upload_success = Input::file('company_logo')->move($destinationPath, $filename);
			}
		    $validator = Validator::make(Input::all(), User::$editrules);
		    if ($validator->passes()) {
		        $user= User::find($id);
		    	$user->firstname = Input::get('firstname');
			    $user->lastname = Input::get('lastname');
			    $user->password = Hash::make(Input::get('password'));
			    $user->company = Input::get('company');
			    if(isset($file)){
					$user->company_logo = $filename;
			    }
			    $user->save();
			    return Redirect::back()->with(array('title'=>'Edit Profile','user'=>$user));
			    
		    }else {
		         $user=User::find($id);
		         return Redirect::to('user/'.$id.'/edit')->withErrors($validator)->withInput()->with(array('title'=>'Edit Profile','user'=>$user,'message'=>'Hello'));
		    }

	    } 
	    else if(Auth::user()->role == 'User'  || Auth::user()->role == 'Admin'  ){
	    	$validator = Validator::make(Input::all(), User::$editrules);
		    if ($validator->passes()) {
		        $user= User::find($id);
		    	$user->firstname = Input::get('firstname');
			    $user->lastname = Input::get('lastname');
			    if(!empty($_POST['ispremium'] ) && isset($_POST['ispremium']))
			    	$user->ispremium = Input::get('ispremium');	
			    $user->password = Hash::make(Input::get('password'));
			    $user->save();

			    return Redirect::to('user/'.$id.'/edit')->with(array('title'=>'Edit Profile','user'=>$user));
			    
		    }else {
		        // validation has failed, display error messages

			    $user=User::find($id);
		         return Redirect::to('user/'.$id.'/edit')->with(array('title'=>'Edit Profile','user'=>$user))->withErrors($validator)->withInput();
	   			//echo "Not Valid";
		    }
	    }

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
		if(!Auth::check()){
			return Redirect::to('/');
		}
		User::destroy($id);
		Topic::where('user_id','=',$id)->delete();
		Reply::where('user_id','=',$id)->delete();
		Job::where('user_id','=',$id)->delete();
		
		return Redirect::to('user');
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

	

	public function logout(){
		Auth::logout();
    	return View::make('users.login')->with(array('message'=> 'Logged out!','title'=>'Login'));
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
		 
		    return View::make('users.create_admin')->with(array('message'=>'Admin added successfully','title'=>'Add Admin'));
	    } else {
	        // validation has failed, display error messages
	         return Redirect::to('user/createAdmin')->with('title','Add Admin')->withErrors($validator)->withInput();
   			//echo "Not Valid";
	    }
	}


	public function getPremium(){
		if(!Auth::check())
		{
			return Redirect::to('/');
		}
		else{
			return View::make('users/getPremium')->with('title','Become Premium Member');
		}
	}
}