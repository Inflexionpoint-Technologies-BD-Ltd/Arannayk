<?php

namespace App\Http\Controllers;

use App\Press;
use Illuminate\Http\Request;

class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presses = Press::all();
        return view('admin.admin-content.press.index', compact('presses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.press.create');
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
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Press::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show(Press $press)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit(Press $press)
    {
        return view('admin.admin-content.press.edit',compact('press'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Press $press)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'tag' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else{
            $inputs['image'] = $press->image;
        }

        $press->update($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->route('press.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy(Press $press)
    {
        $press->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("press.index");
    }
}
