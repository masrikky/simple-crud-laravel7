<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View all data
        $blogs = DB::table('blogs')->orderBy('id', 'desc')->get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create new content
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate response
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Blogs::create($request->all());
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blogs, $id)
    {
        //$url_segment = Request::segment(2);
        $blogs = Blogs::find($id);
        return view('blogs.show', ['blogs' => $blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blogs, $id)
    {
        //
        $blogs = Blogs::find($id);
        return view('blogs.edit', ['blogs' => $blogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blogs, $id)
    {
        //Retrieve user input
        $title = $request->input('title');
        $description = $request->input('description');

        $request = DB::table('blogs')->where('id', '=', $id)->update(['title' => $title, 'description' => $description]);
        $blogs->update(array($request));
        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blogs, $id)
    {
        //
        $blogs = Blogs::where('id' , '=' , $id)->firstorfail()->delete();
        return redirect()->route('blogs.index');
    }
}
