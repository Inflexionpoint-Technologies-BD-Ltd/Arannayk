<?php

namespace App\Http\Controllers;

use App\Image;
use App\Photo;
use App\Svg;
use App\Title;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('admin.admin-content.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titles = Title::all();
        return view('admin.admin-content.photo.create', compact('titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
//            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $inputs2 = \request()->validate([
            'files.*' => 'required|mimes:jpeg,png',
        ]);

//        if (request('image')) {
//            $inputs['image'] = \request('image')->store('photos');
//        }

        if (request('files')) {
            $files = $request->file('files');
            foreach ($files as $image) {
                $inputs['image'] = $image->store('photos');
                Photo::create($inputs);

            }
        }

        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $titles = Title::all();
        return view('admin.admin-content.photo.edit', compact('photo', 'titles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
//            'image' => 'mimes:jpeg,jpg,png',

        ]);

//        $inputs = \request()->validate([
//
//            'files.*' => 'required|mimes:jpeg,png',
//
//        ]);

//        if (request('image')) {
//            $inputs['image'] = \request('image')->store('photos');
//        }else{
//            $inputs['image'] = $photo->image;
//        }

        $photo->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('photo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("photo.index");
    }
}
