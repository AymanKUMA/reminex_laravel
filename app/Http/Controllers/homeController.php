<?php

namespace App\Http\Controllers;

use App\Models\alert;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'alerts' => alert::all(),
            'slides' => Slide::all()
        ]);
    }
}
