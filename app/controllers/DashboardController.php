<?php
use Repository\formInput;

class DashboardController extends \BaseController {

	/**
	*@var app\Repository\formInput
	*/

	protected $photo;

	public function __construct(formInput $photo){
		$this->photo = $photo;

	}
	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{	
			$photo = photo::paginate(30);
		return View::make('dashboard.index',['photo'=>$photo], array('name'=>'Estella'));
	}


	public function editPage($id)
	{
		$photo = photo::find($id);
		return View::make('dashboard.editPage', ['photo'=>$photo], array('name'=>'Estella'));
	}

	public function editPageShow($Title)
	{
		$photo = photo::findOrFail($Title);
		return View::make('dashboard.editPage', ['photo'=>$photo]);
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /dashboard/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('dashboard.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dashboard
	 *
	 * @return Response
	 */
	public function store()
	{
			$photo=$this->photo->inData();
			return Redirect::to('dashboard');
		}

	/**
	 * Display the specified resource.
	 * GET /dashboard/{id}
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
	 * GET /dashboard/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$photo=$this->photo->upData($id);
		return Redirect:: to('dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dashboard/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}