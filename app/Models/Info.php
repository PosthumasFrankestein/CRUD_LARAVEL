<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //table name
    protected $table='info';

    //primary key
    public $primaryKey='id';

    public $timestamps = false;

    // datas to fill
    protected $fillable = [
		'name','email','phone','address','dob','nationality','faculty','module','gender',
	];
}