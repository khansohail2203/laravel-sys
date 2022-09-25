<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illluminate\support\facades\DB;
use App\Models\lara;

class dummyApi extends Controller
{
    // //
    // function getData()
    // {
    //     return models::all();
        
    // }
    function search()
    {
        return lara::all();
    }
}
