<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridController extends Controller
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
        $murid = \App\Murid::paginate(5);
        $user = \App\User::all();
        $filter = $request->get('filter');

        if ($filter) {
            $murid = \App\Murid::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('murid.index', compact('murid', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();
        $murid = \App\Kelas::all();

        return view('murid.create', compact('user', 'murid'));
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
        $new_murid = new \App\Murid;

        $new_murid->nis = $request->get('nis');
        $new_murid->nama = $request->get('nama');
        $new_murid->kelas_id = $request->get('kelas');
        $new_murid->alamat = $request->get('alamat');
        $new_murid->dob = $request->get('dob');
        $new_murid->save();

        return redirect()
        ->route('students.index', compact('user'))->with('status', 'Data murid berhasil ditambahkan!');
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
        $selectid = \App\Murid::findOrFail($id)->kelas_id;
        $murid = \App\Murid::findOrFail($id);
        $kelas = \App\Kelas::all();

        return view('murid.edit', compact('murid', 'user', 'kelas', 'selectid'));
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
        $murid = \App\Murid::findOrFail($id);

        $murid->nis = $request->get('nis');
        $murid->nama = $request->get('nama');
        $murid->kelas_id = $request->get('kelas');
        $murid->alamat = $request->get('alamat');
        $murid->dob = $request->get('dob');
        $murid->save();

        return redirect()->route('students.index')->with('status', 'Data murid berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Murid::findOrFail($id);
        $delete->delete();

        return redirect()->route('students.index')->with('status', 'Data murid berhasil dihapus!');
    }
}
