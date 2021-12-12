<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
	use HasFactory;
	public $timestamps = false;

	protected $table = 'vaccines';

	protected $fillable = [
		'id', 'name', 'price', 'description', 'image'
	];

	public function patient(){
    	return $this->hasMany('App\Models\Patient');
    }
}
