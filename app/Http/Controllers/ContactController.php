<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.admin-content.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.admin-content.contact.create');
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
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            'office_time' => 'nullable',

            'fb_link' => 'nullable',
            'yt_link' => 'nullable',
            'ln_link' => 'nullable',
            'twitter_link' => 'nullable',
            'flicker_link' => 'nullable',

            'rjsc' => 'nullable',

        ]);


        Contact::create($inputs);
        session()->flash('create', 'Data Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Contact $contact)
    {
        return view('admin.admin-content.contact.edit',compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $inputs = \request()->validate([
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            'office_time' => 'nullable',

            'fb_link' => 'nullable',
            'yt_link' => 'nullable',
            'ln_link' => 'nullable',
            'twitter_link' => 'nullable',
            'flicker_link' => 'nullable',

            'rjsc' => 'nullable',
        ]);


        $contact->update($inputs);
        session()->flash('create', 'Data Updated Successfully');
        return redirect()->route("contact.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('delete', 'Data Deleted Successfully');

        return redirect()->route("contact.index");
    }
}
