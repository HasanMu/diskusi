<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class GuruController extends Controller
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
    public function index(Request $request)
    {
        $user = \App\User::all();
        $guru = \App\Guru::paginate(5);
        $filter = $request->get('filter');

        if ($filter) {
            $guru = \App\Guru::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('guru.index', compact('user', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('guru.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \App\User::all();
        $new_guru = new \App\Guru;

        $new_guru->nama = $request->get('nama');
        $new_guru->bidang_studi = $request->get('bidang_studi');
        $new_guru->alamat = $request->get('alamat');
        $new_guru->dob = $request->get('dob');

        $new_guru->save();

        return redirect()
        ->route('teachers.index', compact('user'))->with('success', 'Data guru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::all();
        $guru = \App\Guru::findOrFail($id);

        return view('guru.info', compact('guru', 'user'));
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
        $guru = \App\Guru::findOrFail($id);

        return view('guru.edit', compact('user', 'guru'));
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
        $guru = \App\Guru::findOrFail($id);
        $user = \App\User::all();

        $guru->nama = $request->get('nama');
        $guru->bidang_studi = $request->get('bidang_studi');
        $guru->alamat = $request->get('alamat');
        $guru->dob = $request->get('dob');
        $guru->save();

        return redirect()
        ->route('teachers.index', compact('user'))->with('success', 'Data guru berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Guru::findOrFail($id);
        $delete->delete();

        return redirect()->route('teachers.index')->with('success', 'Data guru berhasil dihapus!');
    }
}
