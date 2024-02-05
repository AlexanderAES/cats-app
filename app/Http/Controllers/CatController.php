<?php

namespace App\Http\Controllers;

use App\Models\Cat;

class CatController extends Controller
{
    public function index()
    {
        $allCats = Cat::AllCats(9);
        return view('gallery.cats', compact('allCats'));
    }
    public function showBySlug($slug)
    {
        $cat = Cat::bySlug($slug)->firstOrFail();
        return view('gallery.show', compact('cat'));

    }

}
