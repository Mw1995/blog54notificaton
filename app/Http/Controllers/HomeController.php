<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(!Auth::guest())
    {
        $nowdate=Carbon::now();
        $posts =DB::table('_notification')->get();
        $users =DB::table('users')->get();
        $pendingtasknum=DB::table('tasks')->where('dt_planned_ended','>=',$nowdate)->count();
        return view('pages.chat',compact('posts','users','pendingtasknum'));
       }
     
      else
          return redirect()->guest('login');


    }
    public function show()
    {   
        if(!Auth::guest())
    {
        $nowdate=Carbon::now();
        $id=Auth::user()->id;
         $posts =DB::table('_notification')->get();
        $pendingtasknum=DB::table('tasks')->where([['status','pending'],['user_id',$id],])->count();
       return view('pages.calendar',compact('pendingtasknum','posts'));
      }
     
     else
             return redirect()->guest('login');



    }
}
