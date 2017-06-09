<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archive extends Model
{
    protected $table='archives';
    public $fillable=['file','project_id','user_id','name'];
}
