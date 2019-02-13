<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Alert;

class KelasController extends Controller
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
        $kelas = \App\Kelas::paginate(5);

        $filter = $request->get('filter');

        if ($filter) {
            $kelas = \App\Kelas::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('kelas.index', compact('user', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('kelas.create', compact('user'));
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
        $new_kelas = new \App\Kelas;

        $new_kelas->nama = $request->get('nama');
        $new_kelas->save();

        return redirect()
        ->route('class.index')->with('success', 'Kelas baru telah ditambahkan!');
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
        $kelas = \App\Kelas::findOrFail($id);

        return view('kelas.edit', compact('user', 'kelas'));
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
        $kelas = \App\Kelas::findOrFail($id);
        $user = \App\User::all();

        $kelas->nama = $request->get('nama');
        $kelas->save();

        return redirect()
        ->route('class.index')->with('success', 'Data kelas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Kelas::findOrFail($id);
        $delete->delete();

        return redirect()->route('class.index')->with('success', 'Data kelas berhasil dihapus!');
    
    }
}
