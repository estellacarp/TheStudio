<?php namespace Repository;


use photo;
use Validator;
use Input;
use Redirect;



class formInput implements formInterface{

	public function inData(){

		$validation = Validator:: make(Input::all(), photo::$rules);

			if ($validation->fails()) {
				return Redirect::back()->withInput()->withErrors($validation->messages());
			}
			$photo = new photo;
			$photo->id = Input::get('id');
			$photo->Title = Input::get('Title');
			$photo->Desc = Input::get('Desc');
			$photo->Price = Input::get('Price');
			
			if (Input::hasFile('ImageBig')) {

				$img = Input::file('ImageBig');
				$this->attachImage($photo);

			}

			$photo->save();
			

	}

	public function attachImage($photo)
	{
		if (Input::hasFile('ImageBig')) {

		$img = Input::file('ImageBig');
			
		$nameBig = $photo->Title.'big';
		$nameSmall= $photo->Title.'small';
		$photo->ImageBig = $nameBig;
		$photo->Image= $nameSmall;

		$imageObjs = \Image::make($img);
		$imageObjs->resize(200, null, function ($constraint) {
	    	$constraint->aspectRatio();
		})->save(public_path().'/asset/image/'.$nameSmall .'.jpg');

		$imageObjb = \Image::make($img);
		$imageObjb->resize(500, null, function ($constraint) {
	    	$constraint->aspectRatio();
		})->save(public_path().'/asset/image/'.$nameBig .'.jpg');
	}

	}

	public function UpData($id){

		$photo = photo::find($id);
			$photo->Title  = Input::get('Title');
			$photo->Desc   = Input::get('Desc');
			$photo->Price = Input::get('Price');
			

			if (Input::hasFile('ImageBig')) {

				$img = Input::file('ImageBig');
				$this->attachImage($photo);

			}

			$photo->save();
			
			
	}
}