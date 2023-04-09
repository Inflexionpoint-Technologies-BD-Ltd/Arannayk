<?php

namespace App\Http\Controllers;

use App\Image;
use App\Top;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $top_navs = ["Forest","Biodiversity","Sustainability","Climate","Gender"];
        $images = Image::whereIn('type', $top_navs)->get();
//        return $images;
        $tops = Top::all();
        return view('admin.admin-content.top.index', compact('tops','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.top.create');

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
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        $inputs2 = \request()->validate([
            'files.*' => 'mimes:jpeg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Top::create($inputs);


        if (request('files')) {
            $files = $request->file('files');
            foreach ($files as $image) {
                $inputs['gg'] = $image->store('photos');
                Image::create([
                    'image' => $inputs['gg'],
                    'type' => \request('tag')
                ]);
            }
        }

        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Top $top
     * @return \Illuminate\Http\Response
     */
    public function show(Top $top)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Top $top
     * @return \Illuminate\Http\Response
     */
    public function edit(Top $top)
    {
        return view('admin.admin-content.top.edit', compact('top'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Top $top
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Top $top)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
            'tag' => 'required',
        ]);

        $inputs2 = \request()->validate([
            'files.*' => 'mimes:jpeg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        } else {
            $inputs['image'] = $top->image;
        }

        $top->update($inputs);


        if (request('files')) {
            $files = $request->file('files');
            foreach ($files as $image) {
                $inputs['gg'] = $image->store('photos');
                Image::create([
                    'image' => $inputs['gg'],
                    'type' => \request('tag')
                ]);
            }
        }
        session()->flash('edit', 'Data edited Successfully');
        return redirect()->route('top.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Top $top
     * @return \Illuminate\Http\Response
     */
    public function destroy(Top $top)
    {
        $top->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("top.index");
    }
}
