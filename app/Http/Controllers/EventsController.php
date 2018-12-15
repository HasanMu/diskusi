<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
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
        $events = \App\Events::paginate(5);
        $filter = $request->get('filter');

        if($filter)
        {
            $events = \App\Events::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('events.index', compact('user', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('events.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_event = new \App\Events;

        $new_event->nama = $request->get('nama');
        $new_event->deskripsi = $request->get('deskripsi');
        $new_event->waktu = $request->get('jam');
        $new_event->tanggal = $request->get('tanggal');
        $new_event->bulan = $request->get('bulan');
        $new_event->tempat = $request->get('tempat');

        $new_event->save();

        return redirect()->route('events.index')->with('status', 'Data events berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \app\User::all();
        $events = \App\Events::findOrFail($id);

        return view('events.show', compact('user', 'events'));
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
        $events = \App\Events::findOrFail($id);

        return view('events.edit', compact('user', 'events'));
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
        $events = \App\Events::findOrFail($id);

        $events->nama = $request->get('nama');
        $events->deskripsi = $request->get('deskripsi');
        $events->waktu = $request->get('jam');
        $events->tanggal = $request->get('tanggal');
        $events->bulan = $request->get('bulan');
        $events->tempat = $request->get('tempat');

        $events->save();

        return redirect()->route('events.index')->with('status', 'Data events berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
