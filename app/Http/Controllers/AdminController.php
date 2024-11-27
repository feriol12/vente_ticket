<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
        $events = Event::all();
        return view('admin.dashboard',compact('events'));
    }
}
