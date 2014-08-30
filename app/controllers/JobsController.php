<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /jobs
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		if(!Auth::check()){
			return Redirect::to('/');
		}
		$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
		$jobs=Job::orderBy('category')->get();
		return View::make('jobs.index')->with(array('title'=>'Job Listing','jobs'=>$jobs,'counts'=>$counts));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jobs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		if(!Auth::check()){
			return Redirect::to('/');
		}
		$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
		return View::make('jobs.create')->with(array('title'=>'Create A Job','counts'=>$counts));
		
			
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /jobs
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), Job::$rules);
 
	    if ($validator->passes()) {
	    	$job = new Job;
			$job->title = Input::get('title');
			$job->content = Input::get('content');
			$job->lastdate = Input::get('lastdate');
			$job->category = Input::get('category');
			$job->type = Input::get('type');
			$job->contract_type = Input::get('contract_type');
			$job->expected_sal = Input::get('expected_sal');
			$job->location = Input::get('location');
			$job->skills = Input::get('skills');
			$job->how_to_apply = Input::get('how_to_apply');
			$job->user_id =Auth::user()->id;
			$job->save();

			return Redirect::to('job/create')->with(array('message'=>'The forum has been created','title'=>'Create Job'));
	    }
	    else{
	    	 return Redirect::to('job/create')->with('title','Create Job')->withErrors($validator)->withInput();
	    }
	}

	/**
	 * Display the specified resource.
	 * GET /jobs/{id}
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
		$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
		$job=Job::find($id);
		return View::make('jobs.show')->with(array('title'=>'Job Listing','job'=>$job,'counts'=>$counts));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /jobs/{id}/edit
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
	 * PUT /jobs/{id}
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
	 * DELETE /jobs/{id}
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
		Job::destroy($id);
		return Redirect::to('job');
		
	}

}