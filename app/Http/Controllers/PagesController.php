<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        return view('project.home');
    }
    public function Projects()
    {
        return view('project.project-page');
    }
}
