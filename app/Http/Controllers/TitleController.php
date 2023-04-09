<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title_first' => 'required|unique:titles',
        ]);

        Title::create($inputs);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Title $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Title $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        return view('admin.admin-content.title.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Title $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {

        $inputs = \request()->validate([
            'title_first' => 'required',

        ]);


        if (Photo::where('title', $title->title_first)->count() != 0) {
            Photo::where('title', $title->title_first)->update([
                'title' => $inputs['title_first']
            ]);
        }

        $title->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route('photo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Title $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        $title->delete();
        return back();
    }
}
