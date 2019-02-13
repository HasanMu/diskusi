<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::all();
        $contact = \App\Contact::all();

        return view('contact.index', compact('user', 'contact'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('contact.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_contact = new \App\Contact;

        $new_contact->tempat = $request->get('tempat');
        $new_contact->email = $request->get('email');
        $new_contact->nohp = $request->get('nohp');
        $new_contact->facebook = $request->get('facebook');
        $new_contact->google = $request->get('google');
        $new_contact->twitter = $request->get('twitter');
        $new_contact->pinterest = $request->get('pinterest');
        $new_contact->save();

        return redirect()->route('contact.index')->with('success', 'Data contact berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::all();
        $data = \App\Contact::findOrFail($id);

        return view('contact.edit', compact('user', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = \App\Contact::findOrFail($id);

        $contact->tempat = $request->get('tempat');
        $contact->email = $request->get('email');
        $contact->nohp = $request->get('nohp');
        $contact->facebook = $request->get('facebook');
        $contact->google = $request->get('google');
        $contact->twitter = $request->get('twitter');
        $contact->pinterest = $request->get('pinterest');
        $contact->save();

        return redirect()->route('contact.index')->with('success', 'Data contact berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Contact::findOrFail($id);
        $delete->delete();

        return redirect()->route('contact.index')->with('success', 'Data contact berhasil dihapus!!');
    }
}
