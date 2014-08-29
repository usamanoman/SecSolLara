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

		$job = new Job;
		$job->title = "Java Developer Required";
		$job->content = "Java Developer Required, experience should be more than 2 years and he should be expert in his work.";
		$job->lastdate = "2014-01-01";
		$job->category = "Full Time";
		$job->type = "Spy Person";
		$job->contract_type = "Yearly";
		$job->expected_sal = "$10,000";
		$job->location = "Azadi Square (SEA VIEW), Lahore";
		$job->skills = "Experience, Good Eyesight";
		$job->company = "The Azadi Corporation";
		$job->company_logo = "images/SSW.png";
		$job->how_to_apply = "Email us your CV at: k112119@nu.edu.pk";
		$job->user_id = 1;
		$job->save();
		
			
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
	}

}