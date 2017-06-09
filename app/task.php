<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{   protected $table='tasks';
   // protected $fillable =['user_id','dt_planned_ended','tasktitle'];
    public function project() {
		return $this->belongsTo('App\Project');
	}
}
