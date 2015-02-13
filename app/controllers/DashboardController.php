<?php

use repository\formInput;

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
		return View::make('dashboard.index',['photo'=>$photo], array('name'=>'Asher'));
	}


	public function editPage()
	{
		
		return View::make('dashboard.editPage');
	}

	public function editPageShow($id)
	{
		$photo = photo::findOrFail($id);
		return View::make('dashboard.editPage', ['photo'=>$photo]);
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
		$photo = Photo::find($id);
		$photo-> delete();

		return Redirect:: to('dashboard');
	}

}