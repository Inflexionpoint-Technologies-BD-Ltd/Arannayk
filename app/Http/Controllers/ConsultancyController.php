<?php

namespace App\Http\Controllers;

use App\Consultancy;
use App\Image;
use Illuminate\Http\Request;

class ConsultancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::where('type', 'concurrency')->get();
        $consultancies = Consultancy::all();
        return view('admin.admin-content.consultancy.index', compact('consultancies', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.consultancy.create');
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

            'content' => 'required',
            'files.*' => 'required|mimes:jpeg,png',
        ]);

        if (request('files')) {
            $files = $request->file('files');
            foreach ($files as $image) {
                $inputs['image'] = $image->store('photos');
                Image::create([
                    'image' => $inputs['image'],
                    'type' => 'concurrency'
                ]);
            }
        }


        Consultancy::create([
            'content' => $inputs['content']
        ]);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Consultancy $consultancy
     * @return \Illuminate\Http\Response
     */
    public function show(Consultancy $consultancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Consultancy $consultancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultancy $consultancy)
    {
        return view('admin.admin-content.consultancy.edit', compact('consultancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Consultancy $consultancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultancy $consultancy)
    {
        $inputs = \request()->validate([
            'content' => 'required',
            'files.*' => 'mimes:jpeg,png',
        ]);

        if (request('files')) {
            $files = $request->file('files');
            foreach ($files as $image) {
                $inputs['image'] = $image->store('photos');
                Image::create([
                    'image' => $inputs['image'],
                    'type' => 'concurrency'
                ]);
            }
        }


        $consultancy->update([
            'content' => $inputs['content']
        ]);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route("consultancy.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Consultancy $consultancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultancy $consultancy)
    {
        $consultancy->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("consultancy.index");
    }
}
