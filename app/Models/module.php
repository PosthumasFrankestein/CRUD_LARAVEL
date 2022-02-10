<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $table='module';

    //primary key
    public $primaryKey=null;

    public $timestamps = false;

    //every module has atleast one faculty
    public function faculty(){
        return $this->belongsTo('App\Models\faculty');
    }
}
