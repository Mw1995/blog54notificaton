<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\archive;
use Carbon\Carbon;
class uploadcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function handlefile(Request $request)
    {
        if(!Auth::guest())
      {
        if ($request->hasFile('file'))
        {
              # code...
            $file=$request->file('file'); //storin the file in this variable

             $allowedfiletypes=config('app.allowedfiletypes');
             $rules=[
               'file'=>'reqiured|mimes'.$allowedfiletypes

             ];
            $filename=$file->getClientOriginalName(); //getting the name from uploadded file

            $destinationpath=config('app.FileDestinationPath').'/'.$filename;
            $uploadded=Storage::put($destinationpath,file_get_contents($file->getRealPath()));
            // dd($request);
            if($uploadded)
            {

                 archive::create([
                    'file'=>$destinationpath,
                    'project_id'=>1,
                    'user_id'=>1,
                    'name'=>$filename
                    ]);

            }
         }
        
       return redirect()->to('/task');
      }
     
      else
          return redirect()->guest('login');

    }
}
