<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ModelCtlr extends Controller
{
    function getData()
    {
        $obj = new Student(); // Eloquent Model
        echo $obj->dummy(); // calling the dummy function from Student model 
        
        $stu = Student::all(); // get() also work same.
        // $stu = Student::where('name', 'johny')->first();
        // $stu = Student::find(1); // get record by id

        $res = Student::insert([
            'name' => 'Jani', 
            'email' => 'jani@test.com', 
            'batch' => 'MCA',
        ]);
        $res = Student::where('id', 1)->update([
            'name' => 'Bhidu',
        ]);
        $res = Student::where('id', 1)->delete();

        return view('dbview', ['data' => $stu]);

    }
}

// Note: If there is any query which result to only one record then we have to store it in an array or a variable and then convert it to array or object.
// $stu = [$stu]; // convert to array
// $stu = (object) $stu; // convert to object
