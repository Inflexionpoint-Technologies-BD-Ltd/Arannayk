<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        return view('admin.admin-content.media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.media.create');
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
            'tag' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,video',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Media::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.admin-content.media.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $media = Media::findOrFail($id);

        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'tag' => 'required',
            'image' => 'mimes:jpeg,jpg,png,video',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        } else {
            $inputs['image'] = $media->image;
        }

        $media->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Media $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $media->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("media.index");
    }
}
