<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Blog::with('user')->orderBy('id','DESC')->get();
        return view('pages.admin.blog.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store('assets/blog','public');
        $data['users_id'] = Auth::user()->id;
        Blog::create($data);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Blog::FindorFail($id);
        return view('pages.admin.blog.edit' ,[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Blog::findOrFail($id);
        if($request->photo){
            $path = public_path().'/storage/'.$item->image;
            File::delete($path);
            $data['image'] = $request->file('image')->store('assets/blog','public');
        }else{
            unset($data['image']);
        }
        $data['slug'] = Str::slug($request->title);
        $item->update($data);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Blog::findOrFail($id);
        File::delete(public_path().'/storage/'.$item->image);
        $item->delete();

        return redirect()->route('blog.index');
    }
}
