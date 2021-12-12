<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class Vaccine_controller extends Controller
{
	public function index()
	{
		$data_vaccine = Vaccine::all();
		return view('vaccine.index', compact('data_vaccine'));
	}

	public function create()
	{
		return view('vaccine.create');
	}

	public function store(Request $request){
		$image = time() .'.'.$request->image->extension();

		$request->image->move(public_path('gambar'), $image);

		$vaccine_store = new Vaccine();

		$vaccine_store->name = $request->name;
		$vaccine_store->price = $request->price;
		$vaccine_store->description = $request->description;
		$vaccine_store->image = $image;

		$vaccine_store->save();

		return redirect(route('vaccines'));
	}

	public function edit($id, Request $request){
		$data_vaccine = Vaccine::find($id);

		return view('vaccine.edit', compact('data_vaccine'));
	}

	public function update($id, Request $request){
		$vaccine_update = Vaccine::find($id);

		$vaccine_update->name = $request->name;
		$vaccine_update->price = $request->price;
		$vaccine_update->description = $request->description;

		if($request->image == NULL){
			$vaccine_update->image = $vaccine_update->image;
		}else{
			$image = time() .'.'.$request->image->extension();
			$request->image->move(public_path('gambar'), $image);

			$vaccine_update->image = $image;
		}

		$vaccine_update->save();

		return redirect(route('vaccines'));
	}

	public function delete(Request $request){
		$vaccine_delete = Vaccine::find($request->id);

		$vaccine_delete->delete();

		return redirect(route('vaccines'));

	}
}
