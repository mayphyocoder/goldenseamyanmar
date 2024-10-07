<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $activities = Activitie::all();
        return view('welcome', compact('jobs', 'activities'));
    }
}
