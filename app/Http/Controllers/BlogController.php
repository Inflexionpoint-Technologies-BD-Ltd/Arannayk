<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.admin-content.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'tag' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'image_2' => 'nullable|mimes:jpeg,jpg,png',
            'image_3' => 'nullable|mimes:jpeg,jpg,png',
            'image_4' => 'nullable|mimes:jpeg,jpg,png',
            'image_5' => 'nullable|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        if (request('image_2')) {
            $inputs['image_2'] = \request('image_2')->store('photos');
        }

        if (request('image_3')) {
            $inputs['image_3'] = \request('image_3')->store('photos');
        }

        if (request('image_4')) {
            $inputs['image_4'] = \request('image_4')->store('photos');
        }

        if (request('image_5')) {
            $inputs['image_5'] = \request('image_5')->store('photos');
        }


        Blog::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.admin-content.blog.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'tag' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'image_2' => 'nullable|mimes:jpeg,jpg,png',
            'image_3' => 'nullable|mimes:jpeg,jpg,png',
            'image_4' => 'nullable|mimes:jpeg,jpg,png',
            'image_5' => 'nullable|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else{
            $inputs['image'] = $blog->image;
        }


        if (request('image_2')) {
            $inputs['image_2'] = \request('image_2')->store('photos');
        }else{
            $inputs['image_2'] = $blog->image_2;
        }

        if (request('image_3')) {
            $inputs['image_3'] = \request('image_3')->store('photos');
        }else{
            $inputs['image_3'] = $blog->image_3;
        }

        if (request('image_4')) {
            $inputs['image_4'] = \request('image_4')->store('photos');
        }else{
            $inputs['image_4'] = $blog->image_4;
        }

        if (request('image_5')) {
            $inputs['image_5'] = \request('image_5')->store('photos');
        }else{
            $inputs['image_5'] = $blog->image_5;
        }

        $blog->update($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("blog.index");
    }
}
