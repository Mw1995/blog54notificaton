<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sprint extends Model
{
    protected $table='sprint';
    public $fillable=['project_id','sprint_title','dt_estimated','dt_ended','evaluate','description'];
    }
