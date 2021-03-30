<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index()
    {
        $event = DB::table('mdl_event')
                    ->select('id', 'name','description','location')
                    ->get();
        
        return view('event', ['events' => $event]);
    }
}
