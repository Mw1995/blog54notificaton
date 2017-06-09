<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;
use App\archive;
class TasksController extends Controller
{
    function show(){
      if(!Auth::guest())
      {
           $id=Auth::user()->id;
       $nowdate=Carbon::now();  
    // $proj=DB::table('projects')->get();
     $task=DB::table('tasks')->where('user_id',$id)->get();
     $pendingtasknum=DB::table('tasks')->where([['status','pending'],['user_id',$id],])->count();
     $inprogresstasknum=DB::table('tasks')->where([['status','in progress'],['tasks.user_id',$id],])->count();
     $completedtasknum=DB::table('tasks')->where([['status','completed'],['tasks.user_id',$id],])->count();
     $failedtasknum=DB::table('tasks')->where([['status','failed'],['tasks.user_id',$id],])->count();
     $deliveredtasknum=DB::table('tasks')->where([['status','delivered'],['tasks.user_id',$id],])->count();
     //$files=archive::all();
     // $projuser=DB::table('project_user')->where('user_id', $id)->value('project_id');
     $users=DB::table('users')->join('project_user','users.id','=','project_user.user_id')->get();
  return view('pages.showtask',compact('task','pendingtasknum','deliveredtasknum','failedtasknum','inprogresstasknum','users','completedtasknum'));
      }
    	else
  return redirect()->guest('login');
}
function show1()
{  if(!Auth::guest())
  {
  return view('/home');
  }
  else
  return redirect()->guest('login');
}
function markasaccepted(Request $t)
{   
  if(!Auth::guest())
  {
	$task_id=$t['task_id'];
  $task=DB::table('tasks')->where('id',$task_id)->update(['status'=>'in progress']);
  }
  else
  return redirect()->guest('login');
}
function markasdeclined(Request $t)
{  
   if(!Auth::guest())
  {
	$task_id=$t['task_id'];
  $task=DB::table('tasks')->where('id',$task_id)->update(['status'=>'declined']);
   }
      else
  return redirect()->guest('login');
}

function store()
{ 
   if(!Auth::guest())
  {
  $taskname=request('tasktitle');; 
  $userid= request('user_id');
  $planned_ended_date=request('taskdate');
  $nowdate=Carbon::now(); 
  $task=DB::table('tasks')->insertGetId(['user_id'=>$userid,'dt_planned_ended'=>$planned_ended_date,'dt_created'=>$nowdate,'status'=>'pending','sprint_id'=>1,'taskname'=>$taskname]);
 return redirect('/task');
  }
      else
  return redirect()->guest('login');
}


function delete()
{ 
    if(!Auth::guest())
      { 
  $task_id=request('task_id');
   DB::table('tasks')->where('id',  $task_id)->delete();
    return redirect('/task');
     }
      else
  return redirect()->guest('login');
}



}
