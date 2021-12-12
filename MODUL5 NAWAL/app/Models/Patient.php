<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	use HasFactory;
	public $timestamps = false;

	protected $table = 'patients';

	protected $fillable = [
		'id', 'vaccine_id', 'name', 'nik', 'alamat', 'image_ktp', 'no_hp', 'created_at', 'updated_at'
	];

	 public function vaccine(){
    	return $this->belongsTo('App\Models\Vaccine');
    }
}
