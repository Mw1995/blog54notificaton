<?php

namespace App\Http\Controllers;

use DB;
use App\Quotation;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
class PageCont extends Controller
{
    
    function show(){
	return view('pages.one');
}

function chat(){

if(!Auth::guest())
	{  $posts=DB::table('_notification')->get();
       $users=DB::table('users')->get();
       $nowdate=Carbon::now();
        $pendingtasknum=DB::table('tasks')->where('dt_planned_ended','>=',$nowdate)->count();
        return view('pages.chat',compact('posts','users','pendingtasknum'));
		

	}
     
else
  return redirect()->guest('login');


}


}
