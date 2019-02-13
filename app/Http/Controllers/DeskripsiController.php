<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeskripsiController extends Controller
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
        $desc = \App\Deskripsi::all();

        return view('deskripsi.index', compact('user', 'desc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('deskripsi.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_desc = new \App\Deskripsi;

        $new_desc->judul = $request->get('judul');
        $new_desc->deskripsi = $request->get('desc');
        $new_desc->save();

        return redirect()->route('desc.index')->with('success', 'Data deskripsi berhasil ditambahkan!');
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
        $desc = \App\Deskripsi::findOrFail($id);
        $user = \App\User::all();

        return view('deskripsi.edit', compact('user', 'desc'));

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
        $desc = \App\Deskripsi::findOrFail($id);

        $desc->judul = $request->get('judul');
        $desc->deskripsi = $request->get('desc');
        $desc->save();

        return redirect()->route('desc.index')->with('success', 'Data deskripsi berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Deskripsi::findOrFail($id);
        $delete->delete();

        return redirect()->route('desc.index')->with('success', 'Data deskripsi berhasil dihapus!');
    }
}
