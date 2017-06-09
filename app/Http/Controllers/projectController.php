<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\project;

class projectController extends Controller
{
  
   
   public function show()
   { 

    if(!Auth::guest())
    {

    $id=Auth::user()->id;
    $pendingtasknum=DB::table('tasks')->where([['status','pending'],['user_id',$id],])->count();
    $proj=DB::table('projects')->get();
	return view('pages.showproject',compact('proj','pendingtasknum'));

    }
     
   else
     return redirect()->guest('login');
}



public function store(Request $request)
{   if(!Auth::guest())
    {

     $project= new project;
     $project->name=$request->name;
     $project->dt_created=$request->dt_created;
     $project->dt_ended=$request->dt_ended;
     $project->description=$request->description;



     $project->save();
     redirect()->action('projectController@show')->withInput();

     return back();

    }
     
      else
            return redirect()->guest('login');
	
}


public function edit(project $project)
{
    if(!Auth::guest())
    {
    return view('pages.editproject', compact('project'));

   
     }
     
   else
       return redirect()->guest('login');
}





}
