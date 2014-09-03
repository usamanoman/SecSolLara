<?php

class ForumsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /forums
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		if(!Auth::check()){
			return Redirect::to('/');
		}
		$forums=Forum::all();
		return View::make('forums.index')->with('forums',$forums);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /forums/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		
		return View::make('forums.create')->with('title','Create A Forum');	
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /forums
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		/*
		$forum = new Forum;
		$forum->title="Games";
		$forum->description="This section contains games and its related information";
		$forum->save();*/

		$validator = Validator::make(Input::all(), Forum::$rules);
 
	    if ($validator->passes()) {
	    	$topic = new Forum;
			$topic->title=Input::get('title');
			$topic->description=Input::get('description');
			$topic->save();
			return View::make('forums.create')->with(array('message'=>'The forum has been created','title'=>'Create Forum'));
	    }
	    else{
	    	 return Redirect::to('forum/create')->with('title','Create Forum')->withErrors($validator)->withInput();
	    }

	}

	/**
	 * Display the specified resource.
	 * GET /forums/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

		if(!Auth::check()){
			return Redirect::to('/');
		}
		$forum=Forum::find($id);
		$forums=Forum::all();
		return View::make('forums.show')->with(array('title'=>'Forum Topics','forum'=>$forum,'forums'=>$forums));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /forums/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		if(!Auth::check()){
			return Redirect::to('/');
		}
		$forum=Forum::find($id);
		$forums=Forum::all();
		
		return View::make('forums.edit')->with(array('title'=>'Edit Forum','forum'=>$forum,'forums'=>$forums));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /forums/{id}
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
		$validator = Validator::make(Input::all(), Forum::$rules);
 
	    if ($validator->passes()) {
	    	$forum =  Forum::find($id);
			$forum->title = Input::get('title');
			$forum->description = Input::get('description');
			$forum->save();
		 	$forum=Forum::find($id);
			$forums=Forum::all();
			return View::make('forums.edit')->with(array('title'=>'Edit Forum','forum'=>$forum,'forums'=>$forums,'message'=>'Forum has been updated successfully.'));
		    
	    }else {
	        // validation has failed, display error messages
	        $forum=Forum::find($id);
			$forums=Forum::all();
			return Redirect::to('forum/'.$id.'/edit')->with(array('title'=>'Edit Forum','forum'=>$forum,'forums'=>$forums))->withErrors($validator)->withInput();
   			//echo "Not Valid";
	    } 
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /forums/{id}
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
		Forum::destroy($id);
		Topic::where('forum_id','=',$id)->delete();
		Reply::where('forum_id','=',$id)->delete();
		return Redirect::to('forum');
	}

}