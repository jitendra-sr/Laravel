<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbCtlr extends Controller
{
    function getData(){
        // $users = DB::select('SELECT * FROM users;'); // Normal SQL query

        // DB query builder
        $users = DB::table('xyz')->get();
        // $users = DB::table('users')->where('id', 1)->first();
        
        $res = DB::table('xyz')->insert([
            'name' => 'Johny',
            'email' => 'johny@test.com',
            'batch' => 'BCA',
        ]); // Keep inserting on every refresh

        $res = DB::table('xyz')->where('id', 1)->update([
            'name' => 'Johny Lever',
        ]); // Update if found different
        
        $res = DB::table('xyz')->where('id', 5)->delete();

        return $users;
    }
}
