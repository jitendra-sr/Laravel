<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\View; 

class TmpCtlr extends Controller 
{
    function getUser(){
        // return "Jitendra";

        // return redirect('/home/profile/user');
        // return redirect()->to('/home/profile/user');

        // return to_route('hm', ['param' => 'value']);
        return redirect()->route('hm', ['param' => 'value']);
    }

    function passData($surname){
        return "Hello I am Jitendra $surname";
        // return view('passData', ['surname' => $surname]);
    }
    
    function nestedView(){
        if(View::exists('Folder.nesting')){
            return view('Folder.nesting');
        }
        else return "View not found";
    }
}

// We can create a controller using the template (<?php namespace App\Http\Controllers; use Illuminate\Http\Request; class TmpCtlr extends Controller { // })  or by the command: php artisan make:controller TmpCtlr

