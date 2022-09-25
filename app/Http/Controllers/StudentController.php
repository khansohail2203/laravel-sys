<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\student;


class StudentController extends Controller
{
    function welcome()
    {
        $data = student::all();
        return view('welcome',['students'=>$data]);
        return ["name"=>"sohail"];
    }


    function addStudent(Request $req)
    {
        $student = new student;
        $student ->firstName=$req->firstName;
        $student ->secondName=$req->secondName;
        $student ->age=$req->age;
        $student ->speciality=$req->speciality;
        $student->save();
        return redirect('welcome');
        
    }
    function delete($id)
    {
        $data = student::find($id);
        $data-> delete();
        return redirect('welcome');
    }
    
    function showdata($id)
    {
        $data=student::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data =student::find($req->id);
        $data->firstName=$req->firstName;
        $data->secondName=$req->secondName;
        $data->age=$req->age;
        $data->speciality=$req->speciality;
        $data->save();
        return redirect('welcome');
    }

    function Operations()
    {
        // return DB::table('students')
        // ->where('id',8)
        // ->get();

        // find table
        // return (array) DB::table('students')->find(9);
        
        // \count
        // return DB::table('students')->count();

        // insert \func
        // return DB::table ('students')
        // ->insert([
        //     'firstName'=>'randy',
        //     'secondName'=>'orton',
        //     'age'=>'23',
        //     'speciality'=>'wrestller'

        // ]);

        // update fn
        
        // return DB::table ('students')
        // ->where('id',16)
        // ->update([
        //     'firstName'=>'Randy',
        //     'secondName'=>'orton',
        //     'age'=>'23',
        //     'speciality'=>'WHC'

        // ]);

        // delete fn
        // return DB::table ('students')
        // ->where('id',11)->delete();

        // aggregate method
        // return DB::table('students')->sum('id');
        // return DB::table('students')->min('id');
        // return DB::table('students')->max('id');
        // return DB::table('students')->avg('id');

        //   

    }
    
 }

