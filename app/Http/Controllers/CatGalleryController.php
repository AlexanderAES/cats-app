<?php

namespace App\Http\Controllers;

use App\Models\Cat;

class CatGalleryController extends Controller
{
    public function index()
    {
        $allCats = Cat::AllCats(9);
        return view('gallery.cats', compact('allCats'));

    }
}
