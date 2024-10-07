<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanController extends Controller
{
    public function index(){
        return view('advantage.index');
    }
}
