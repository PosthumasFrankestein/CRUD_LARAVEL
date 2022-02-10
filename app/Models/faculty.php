<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $table='faculty';

    //primary key
    public $primaryKey='id';

    public $timestamps = false;

    //faculty has many modules
    public function modules(){
        return $this->hasMany('App\Models\module');
      }
}
