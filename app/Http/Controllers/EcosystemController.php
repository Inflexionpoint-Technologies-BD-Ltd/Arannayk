<?php

namespace App\Http\Controllers;

use App\Ecosystem;
use Illuminate\Http\Request;

class EcosystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecosystems = Ecosystem::all();
        return view('admin.admin-content.ecosystem.index', compact('ecosystems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.ecosystem.create');
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
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        Ecosystem::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function show(Ecosystem $ecosystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecosystem $ecosystem)
    {
        return view('admin.admin-content.ecosystem.edit',compact('ecosystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecosystem $ecosystem)
    {
        $inputs = \request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else{
            $inputs['image'] = $ecosystem->image;
        }

        $ecosystem->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('ecosystem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecosystem $ecosystem)
    {
        $ecosystem->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("ecosystem.index");
    }
}
