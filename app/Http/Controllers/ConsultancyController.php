<?php

namespace App\Http\Controllers;

use App\Consultancy;
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
        $consultancies = Consultancy::all();
        return view('admin.admin-content.consultancy.index', compact('consultancies'));
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
            'image_1' => 'required|mimes:jpeg,jpg,png',
            'image_2' => 'required|mimes:jpeg,jpg,png',
            'image_3' => 'required|mimes:jpeg,jpg,png',
        ]);

        if (request('image_1')) {
            $inputs['image_1'] = \request('image_1')->store('photos');
        }

        if (request('image_2')) {
            $inputs['image_2'] = \request('image_2')->store('photos');
        }
        if (request('image_3')) {
            $inputs['image_3'] = \request('image_3')->store('photos');
        }


        Consultancy::create($inputs);
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
            'image_1' => 'mimes:jpeg,jpg,png',
            'image_2' => 'mimes:jpeg,jpg,png',
            'image_3' => 'mimes:jpeg,jpg,png',
        ]);

        if (request('image_1')) {
            $inputs['image_1'] = \request('image_1')->store('photos');
        } else {
            $inputs['image_1'] = $consultancy->image_1;
        }

        if (request('image_2')) {
            $inputs['image_2'] = \request('image_2')->store('photos');
        } else {
            $inputs['image_2'] = $consultancy->image_2;
        }

        if (request('image_3')) {
            $inputs['image_3'] = \request('image_3')->store('photos');
        } else {
            $inputs['image_3'] = $consultancy->image_3;
        }


        $consultancy->update($inputs);
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
