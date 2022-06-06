<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::all();
        return view('admin.admin-content.publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.publications.create');
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
            'image' => 'required|mimes:jpeg,jpg,png',
            'file_content' => 'required|mimes:jpeg,jpg,png,pdf',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        if (request('file_content')) {
            $inputs['file_content'] = \request('file_content')->store('photos');
        }

        Publication::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        return view('admin.admin-content.publications.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $inputs = \request()->validate([
            'image' => 'mimes:jpeg,jpg,png',
            'file_content' => 'mimes:jpeg,jpg,png,pdf',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else {
            $inputs['image'] = $publication->image;
        }

        if (request('file_content')) {
            $inputs['file_content'] = \request('file_content')->store('photos');
        }else {
            $inputs['file_content'] = $publication->file_content;
        }

        $publication->update($inputs);
        session()->flash('update', 'Data updated Successfully');
        return redirect()->route('publication.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("publication.index");
    }
}
