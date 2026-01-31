<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class myapi extends Controller
{
    //
    function list($id=null){
       return $id?student::find($id):student::all();

    }
}
