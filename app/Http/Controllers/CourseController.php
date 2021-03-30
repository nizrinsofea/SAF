<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index()
    {
        $course = DB::table('mdl_course')
                    ->select('id', 'category','summary','fullname','shortname')
                    ->get();
        
        return view('course', ['courses' => $course]);
    }
}
