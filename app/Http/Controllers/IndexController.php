<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Home page'
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'title' => 'About page'
        ]);
    }
}
