<?php

namespace App\Http\Controllers;
use App\Models\Slide;

use Illuminate\Http\Request;

class homeController extends Controller
{
    private static function getData(){
        return 
        [
            [ 'id'=>1, 'title'=>'title 1', 'subtitle'=>'subtitle 1 ', 'description'=> 'this is a demo text for the first title', 'layout'=> 1],
            [ 'id'=>2, 'title'=>'title 2', 'subtitle'=>'subtitle 2 ', 'description'=> 'this is a demo text for the second title', 'layout'=> 2],
            [ 'id'=>3, 'title'=>'title 3', 'subtitle'=>'subtitle 3 ', 'description'=> 'this is a demo text for the third title', 'layout'=> 2],
            [ 'id'=>4, 'title'=>'title 4', 'subtitle'=>'subtitle 4 ', 'description'=> 'this is a demo text for the fourth title', 'layout'=> 1],
            [ 'id'=>5, 'title'=>'title 5', 'subtitle'=>'subtitle 5 ', 'description'=> 'this is a demo text for the fourth title', 'layout'=> 1]
        ]
        ;
    }

    public function index(){
        return view('index', [
            'slides' => self::getData()
        ]);
    }
}
