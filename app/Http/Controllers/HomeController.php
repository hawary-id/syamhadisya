<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('name')->get();
        $projects = Project::with('category')->orderBy('id','DESC')->take(8)->get();
        return view('pages.home',[
            'skills' => $skills,
            'projects' => $projects
        ]);
    }

    public function projects()
    {
        $projects = Project::with('category')->orderBy('id','DESC')->get();
        return view('pages.projects',[
            'projects' => $projects
        ]);

    }
}
