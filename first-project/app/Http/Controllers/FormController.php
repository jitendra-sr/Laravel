<?php

namespace App\Http\Controllers;
use App\Rules\CustomRule;

use Illuminate\Http\Request;
// Http\Request is used to get the data from the form

class FormController extends Controller
{
    function addUser(Request $req)
    {
        $req->validate([
            'username' => 'required | min:3 | max:100',
            'email' => 'required|email',
            'city' => ['required', new CustomRule()],
            'skill' => 'required',
        ],[
            // array for Custom error messages only for this form
            'username.required' => 'Please enter your name',
            'email.email' => 'Please enter a valid email address',
        ]);
        echo "Form submitted successfully";


        print_r($req->input());
        echo $req->input('name') . "<br>";
        echo $req->has('name') . "<br>"; // check if the request has the name parameter
        echo $req->name . "<br>"; // same as above

        echo $req->method() . "<br>"; // get the request method
        echo $req->isMethod('post') . "<br>"; // check if the request method is post

        echo $req->url() . "<br>"; // get the url
        echo $req->fullUrl() . "<br>"; // get the full url
        echo $req->path() . "<br>"; // get the path

        echo $req->ip() . "<br>"; // get the ip address
        echo $req->header('User-Agent') . "<br>"; // get the user agent
    }
}

// if we have to customize the default error messages for complete project, then we have to publish the validation.php file and edit the message there
// php artisan lang:publish

// To make the custom rule work, we have to create a new rule using the command
// php artisan make:rule CustomRule
// This will create a new file in app/Rules directory
