<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class Patient_controller extends Controller
{
	public function index()
	{
		$data_patient = Patient::all();
		return view('patient.index', compact('data_patient'));
	}

	public function create(Request $request)
	{
		$id = $request->id;
		$name = $request->name;
		return view('patient.create', compact('id', 'name'));
	}

	public function vaccines()
	{
		$data_vaccine = Vaccine::all();
		return view('patient.vaccine', compact('data_vaccine'));
	}

	public function store(Request $request){
		$image_ktp = time() .'.'.$request->image_ktp->extension();

		$request->image_ktp->move(public_path('gambar'), $image_ktp);

		$patient_store = new Patient();

		$patient_store->name = $request->name;
		$patient_store->vaccine_id = $request->vaccine_id;
		$patient_store->name = $request->name;
		$patient_store->nik = $request->nik;
		$patient_store->alamat = $request->alamat;
		$patient_store->image_ktp = $image_ktp;
		$patient_store->no_hp = $request->no_hp;
		$patient_store->created_at = date('Y-m-d h:i:s');

		$patient_store->save();

		return redirect(route('patients'));
	}

	public function edit($id, Request $request){
		$data_patient = Patient::find($id);
		$data_vaccine = Vaccine::find($data_patient->vaccine_id);

		return view('patient.edit', compact('data_patient', 'data_vaccine'));
	}

	public function update($id, Request $request){
		$patient_update = Patient::find($id);

		$patient_update->name = $request->name;
		$patient_update->vaccine_id = $request->vaccine_id;
		$patient_update->name = $request->name;
		$patient_update->nik = $request->nik;
		$patient_update->alamat = $request->alamat;
		$patient_update->no_hp = $request->no_hp;
		$patient_update->updated_at = date('Y-m-d h:i:s');

		if($request->image_ktp == NULL){
			$patient_update->image_ktp = $patient_update->image_ktp;
		}else{
			$image_ktp = time() .'.'.$request->image_ktp->extension();
			$request->image_ktp->move(public_path('gambar'), $image_ktp);

			$patient_update->image_ktp = $image_ktp;
		}

		$patient_update->save();

		return redirect(route('patients'));
	}

	public function delete(Request $request){
		$patient_delete = Patient::find($request->id);

		$patient_delete->delete();

		return redirect(route('patients'));

	}
}
