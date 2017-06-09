<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class project extends Model
{
	//a project can have many tasks
    public function tasks() {
		return $this->hasMany('App\task');
	}


		public function sprints() {
		return $this->hasMany('App\sprint');
	}



		public function user() {
		return $this->belongsTo('App\User');
	}



}
