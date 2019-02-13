<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
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
        $alumni = \App\Alumni::paginate(5);
        $filter = $request->get('filter');

        if ($filter) {
            $alumni = \App\Alumni::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('alumni.index', compact('user', 'alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('alumni.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_alumni = new \App\Alumni;

        $new_alumni->nama = $request->get('nama');
        $foto = $request->file('foto');
        $new_alumni->pekerjaan = $request->get('pekerjaan');
        $new_alumni->deskripsi = $request->get('deskripsi');

        if($foto)
        {
            if($new_alumni->foto && file_exists(storage_path('app/public'.$new_alumni->foto)))
            {
                \Storage::delete('public/'.$new_alumni->foto);
            }
            $foto_baru = $request->file('foto')->store('alumni', 'public');

            $new_alumni->foto = $foto_baru;
        }

        $new_alumni->save();

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil ditambahkan!');
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
        $alumni = \App\Alumni::findOrFail($id);

        return view('alumni.edit', compact('user', 'alumni'));
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
        $alumni = \App\Alumni::findOrFail($id);

        $alumni->nama = $request->get('nama');
        $alumni->pekerjaan = $request->get('pekerjaan');
        $alumni->deskripsi = $request->get('deskripsi');

        if($request->file('foto'))
        {
            if($alumni->foto && file_exists(storage_path('app/public'.$alumni->foto)))
            {
                \Storage::delete('public/'.$alumni->foto);
            }
            $new_images = $request->file('foto')->store('alumni', 'public');

            $alumni->foto = $new_images;
        }

        $alumni->save();

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Alumni::findOrFail($id);

        $delete->delete();

        return redirect()->route('alumni.index')->with('success', 'Data alumni berhasil dihapus!');
    }
}
