<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function getHome(){
        return view('areas.home');
    }

    public function getParentesis(){
        return view('areas.parentesis');
    }

    public function getCuadrado(){
        return view('areas.cuadrado');
    }
}
