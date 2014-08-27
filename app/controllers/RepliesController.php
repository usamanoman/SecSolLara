<?php

class RepliesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /replies
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /replies/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		//
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /replies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		if(!Auth::check()){
			return Redirect::to('/');
		}
		$user_id=Auth::user()->id;
		$reply = new Reply;
		$reply->content=Input::get('content');
		$topic_id=Input::get('topic_id');
		$topic=Topic::find($topic_id);
		$reply->user_id=$user_id;
		$reply->forum_id=$topic->forum_id;
		$reply->topic_id=$topic->id;
		
		
		$reply->save();
		return Redirect::to('topic/'.$topic_id)->with('topic',$topic);
	}

	/**
	 * Display the specified resource.
	 * GET /replies/{id}
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
	 * GET /replies/{id}/edit
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
	 * PUT /replies/{id}
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
	 * DELETE /replies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}