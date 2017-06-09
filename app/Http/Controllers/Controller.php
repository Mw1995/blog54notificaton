<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function freichatx_get_hash($ses){

 if( Auth::check() ){
 if(is_file("C:/wamp64/www/laravel/scrum/public/freichat/hardcode.php")){
 require "C:/wamp64/www/laravel/scrum/public/freichat/hardcode.php";
 $temp_id = $ses . Auth::user()->id;
 return md5($temp_id);
 }else{
 echo "<script>alert('module freichatx says: hardcode.php file not found!');</script>";
 }
 }
 return 0;
}

}
