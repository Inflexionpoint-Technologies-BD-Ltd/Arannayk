<?php

namespace App\Http\Controllers;

use App\Project;
use App\Svg;
use Illuminate\Http\Request;

class SvgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $svgs = Svg::all();
        return view('admin.admin-content.sdg.index', compact('svgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }

        if (\request('sdg_type') == 'project'){
            Svg::create([
                'image' => $inputs['image'],
                'project_id' => request('sdg_id')
            ]);
        }

        if (\request('sdg_type') == 'archive'){
            Svg::create([
                'image' => $inputs['image'],
                'archive_id' => request('sdg_id')
            ]);
        }

        session()->flash("create","Data added successfully");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("admin.admin-content.sdg.create",compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function edit($svg)
    {
        $svg = Svg::find($svg);
        return view('admin.admin-content.sdg.edit', compact('svg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $svg)
    {

        $svg_data = Svg::findOrFail($svg);

        $inputs = \request()->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('photos');
        }else{
            $inputs['image'] = $svg_data->image;
        }

        $svg_data->update($inputs);
        session()->flash("update","Data updated successfully");
        return redirect()->route('svg.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Svg  $svg
     * @return \Illuminate\Http\Response
     */
    public function destroy($svg)
    {
        $svg_data = Svg::findOrFail($svg);
        $svg_data->delete();
        return redirect()->route('svg.index');

    }
}
