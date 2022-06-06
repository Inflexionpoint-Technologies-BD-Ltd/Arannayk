<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.admin-content.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-content.slider.create');
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
            'text_content_1' => 'required',
            'text_content_2' => 'required',
            'text_content_3' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
            'serial' => 'required',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

//        dd($request->all());

        Slider::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.admin-content.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $inputs = \request()->validate([
            'text_content_1' => 'required',
            'text_content_2' => 'required',
            'text_content_3' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
            'serial' => 'required',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else {
            $inputs['image'] = $slider->image;
        }

//        dd($request->all());

        $slider->update($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("slider.index");
    }
}
