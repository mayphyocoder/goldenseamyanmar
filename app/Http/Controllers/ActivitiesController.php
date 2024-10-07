<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function index()
    {
        return view('gallery.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $activities = Activitie::where('categorie_id', $id)->get();
        return view('gallery.show', compact('activities', 'category'));
    }
}
