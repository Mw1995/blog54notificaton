<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;
use App\sprint;
class SprintController extends Controller
{
    public function show()
    {   
    if(!Auth::guest())
	{
    	$id=Auth::user()->id;
        $pendingtasknum=DB::table('tasks')->where([['status','pending'],['user_id',$id],])->count();
        $sprints=DB::table('sprint')->where('project_id',1)->get();
        $nowdate=Carbon::now();
        return view('pages.showsprints',compact('pendingtasknum','sprints','nowdate'));
     }
     
       else
             return redirect()->guest('login');
    }

    public function delete()
{ 
    if(!Auth::guest())
      { 
  $sprint_id=request('sprint_id');
   DB::table('sprint')->where('id',  $sprint_id)->delete();
   DB::table('sprint_user')->where('sprint_id',  $sprint_id)->delete();
    return redirect('/sprints');
     }
      else
  return redirect()->guest('login');
}

 public function store()
{ 
   if(!Auth::guest())
  {
  $sprintname=request('sprinttitle');; 
  //$userid= request('user_id');
  $description=request('sprintdescription');
  $planned_ended_date=request('sprintdate');
  //$nowdate=Carbon::now(); 
  sprint::create([
                    'sprint_title'=>$sprintname,
                    'project_id'=>1,
                    'dt_estimated'=>$planned_ended_date,
                    'description'=>$description
                    ]);
 return redirect('/sprints');
  }
      else
  return redirect()->guest('login');
}
}
