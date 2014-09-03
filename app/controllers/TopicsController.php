<?php

class TopicsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /topics
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /topics/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$forums = Forum::all();
		return View::make('topics.create')->with('forums',$forums);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /topics
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$validator = Validator::make(Input::all(), Topic::$rules);
 
	    if ($validator->passes()) {
	    	$user_id=Auth::user()->id;
	    	$topic = new Topic;
			$topic->title=Input::get('title');
			$topic->content=Input::get('content');
			$topic->keywords=Input::get('keywords');
			$topic->user_id=$user_id;
			$topic->forum_id=Input::get('forum_id');
			$topic->save();
			$forums = Forum::all();
			return View::make('topics.create')->with(array('message'=>'The topic has been posted in the forum','title'=>'Create Topic','forums'=>$forums));
	    }
	    else{
	    	 return Redirect::to('topic/create')->with('title','Create Topic')->withErrors($validator)->withInput();
	    }
		
	}

	/**
	 * Display the specified resource.
	 * GET /topics/{id}
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
		$topic=Topic::find($id);
		$forums=Forum::all();
		return View::make('topics.show')->with(array('topic'=>$topic,'forums'=>$forums));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /topics/{id}/edit
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
	 * PUT /topics/{id}
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
	 * DELETE /topics/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}