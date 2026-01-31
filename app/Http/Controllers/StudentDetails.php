<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class StudentDetails extends Controller
{
    //
    function StudentDetails($id){
        return student::find($id);
    }
    function add(Request $req){
        $student=new Student;
        $student->name=$req->name;
        $student->email=$req->email;
        $student->mobile_no=$req->mobile_no;
        $result=$student->save();
        if($result){
            Return ["return"=>"data hasbeen saved ..."];
        }
        else{
            Return ["return"=>"data not saved ..."];
        }

        return [];
    }
}
