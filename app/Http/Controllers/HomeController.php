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
        $projects = Project::orderBy('id','DESC')->take(8)->get();
        return view('pages.home',[
            'skills' => $skills,
            'projects' => $projects
        ]);
    }
}
