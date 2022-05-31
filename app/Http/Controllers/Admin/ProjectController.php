<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Project::with('category')->orderBy('name')->get();
        return view('pages.admin.project.index',[
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
        $items = Category::orderBy('name')->get();
        return view('pages.admin.project.create',[
            'items' => $items
        ]);
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
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/project/cover','public');
        $data['page'] = $request->file('page')->store('assets/project/page','public');
        Project::create($data);
        return redirect()->route('project.index');
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
        $item = Project::with('category')->FindOrFail($id);
        $categories = Category::where('id','<>',$item->categories_id)->orderBy('name')->get();
        return view('pages.admin.project.edit' ,[
            'item' => $item,
            'categories' => $categories
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
        $data['slug'] = Str::slug($request->name);
        $item = Project::findOrFail($id);
        if($request->photo){
            $path = public_path().'/storage/'.$item->photo;
            File::delete($path);
            $data['photo'] = $request->file('photo')->store('assets/project/cover','public');
        }else{
            unset($data['photo']);
        }
        if($request->page){
            $path = public_path().'/storage/'.$item->page;
            File::delete($path);
            $data['page'] = $request->file('page')->store('assets/project/page','public');
        }else{
            unset($data['page']);
        }
        $item->update($data);
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Project::findOrFail($id);
        File::delete(public_path().'/storage/'.$item->photo);
        File::delete(public_path().'/storage/'.$item->page);
        $item->delete();

        return redirect()->route('project.index');
    }
}
