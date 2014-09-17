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
			$job->category = Input::get('category');
			$job->type = Input::get('type');
			$job->contract_type = Input::get('contract_type');
			$job->expected_sal = Input::get('expected_sal');
			$job->location = Input::get('location');
			$job->skills = Input::get('skills');
			$job->poc_email = Input::get('poc_email');
			$job->poc_phone = Input::get('poc_phone');
			$job->application_page = Input::get('application_page');
			$job->user_id =Auth::user()->id;
			$job->save();
			$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
			$headers = 'From: k112119@nu.edu.pk' . "\r\n" .
		    'Reply-To: k112119@nu.edu.pk' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
			mail ( "k112119@nu.edu.pk" , "A Job has been posted." , "A job has been posted in security solution worldwide: http://www.nextdime.com/secsol/public/job"  ,$headers);
			return View::make('jobs.create')->with(array('message'=>'The job has been created','title'=>'Create Job','counts'=>$counts));
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
		if(!Auth::check()){
			return Redirect::to('/');
		}
		$job=Job::find($id);
		$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
		return View::make('jobs.edit')->with(array('title'=>'Edit Job','job'=>$job,'counts'=>$counts));
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

		if(!Auth::check()){
			return Redirect::to('/');
		}
		$validator = Validator::make(Input::all(), Job::$rules);
 
	    if ($validator->passes()) {
	    	$job =  Job::find($id);
			$job->title = Input::get('title');
			$job->content = Input::get('content');
			$job->category = Input::get('category');
			$job->type = Input::get('type');
			$job->contract_type = Input::get('contract_type');
			$job->expected_sal = Input::get('expected_sal');
			$job->location = Input::get('location');
			$job->skills = Input::get('skills');
			$job->poc_email = Input::get('poc_email');
			$job->poc_phone = Input::get('poc_phone');
			$job->application_page = Input::get('application_page');
			$job->user_id =Auth::user()->id;
			$job->save();
		 	$job=Job::find($id);
			$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
			return View::make('jobs.edit')->with(array('title'=>'Edit Job','job'=>$job,'counts'=>$counts,'message'=>'Job has been updated successfully'));
		    
	    }else {
	        // validation has failed, display error messages
	        $user=User::find($id);
	        $job=Job::find($id);
			$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
			return Redirect::to('job/'.$id.'/edit')->with(array('title'=>'Edit Job','job'=>$job,'counts'=>$counts))->withErrors($validator)->withInput();
   			//echo "Not Valid";
	    } 
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


	public function search(){
		if(!Auth::check()){
			return Redirect::to('/');
		}
		$counts=Job::groupBy('category')->get(array('category',DB::raw('count(*) as cnt')));
		$jobs=Job::where('type',Input::get('query'))->orderBy('category')->get();
		return View::make('jobs.index')->with(array('title'=>'Job Listing','jobs'=>$jobs,'counts'=>$counts));



	}

}