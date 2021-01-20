<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
    	'employee_id',
		'firstname',
		'lastname',
		'date_of_birth',
		'education_qualification',
		'address',
		'email',
		'phone',
		'photo',
		'resume'
    ];
    public $timestamps = false;
}
