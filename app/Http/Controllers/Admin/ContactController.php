<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $items = Contact::orderBy('id','DESC')->get();
        return view('pages.admin.contact.index',[
            'items' => $items
        ]);
    }
}
