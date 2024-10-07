<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MdController extends Controller
{
    public function index(){
        return view('md.index');
    }
}
