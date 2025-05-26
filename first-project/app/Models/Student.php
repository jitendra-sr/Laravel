<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model ie. Eloquent ORM (Object Relational Mapping) is used to interact with the database efficiently.

// Model name should be singular while table name should be plural then it will automatically connect with the table.
// Model name should be in PascalCase (UpperCamelCase) while table name should be in snake_case (lowercase with underscores).
// Eg: Model name: Student, Table name: students

class Student extends Model
{
    protected $table = 'xyz'; // if name of the table is not same as the model name then we can specify the table name.
    public $timestamps = false; // laravel by default keep track of created_at and updated_at columns in the table. If we want to update a record without specifying the upadated_at column then we have to set this property to false.

    function dummy()
    {
        return 'dummy function from Student model';
    }
}
