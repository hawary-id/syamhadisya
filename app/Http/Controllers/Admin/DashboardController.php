<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::count();
        $posts = Blog::count();
        $skills = Skill::count();
        $contacts = Contact::count();
        $new = Contact::orderBy('id','DESC')->first();
        $count = Contact::count();
        if($count > 0){
            $emails = Contact::where('id','<>',$new->id)->orderBy('id','DESC')->get();
        }else{
            $emails = 0;
        }

        return view('pages.admin.dashboard',[
            'projects' => $projects,
            'posts' => $posts,
            'skills' => $skills,
            'contacts' => $contacts,
            'new' => $new,
            'emails' => $emails,
            'count' => $count,
        ]);
    }

    public function projects()
    {
        return view('pages.admin.projects');
    }
}
