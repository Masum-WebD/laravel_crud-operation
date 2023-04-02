<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogsRequest;
use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blogs::all();
        return view('Blog.index', compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogsRequest $request)
    {

        $blogs = new blogs;
        $blogs->title = $request->title;
        $blogs->short_description = $request->short_description;
        $blogs->description = $request->description;
        $blogs->save();
        return Redirect::to("/blog");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blogs::find($id);
        return view('Blog.details' , compact("blog"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=blogs::find($id);
        return view('Blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogsRequest $request)
    {


        $blog=blogs::find($request->blogId);
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;

        $blog->save();
        return Redirect::to("/blog");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = blogs::find($request->blogId);
        $blog->delete();
        return Redirect::to('/blog');
    }
}
