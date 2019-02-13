<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index()
    {
        $events = \App\Events::paginate(4);
        $alumni = \App\Alumni::paginate(2);
        $contact = \App\Contact::paginate(1);
        $desc = \App\Deskripsi::paginate(2);

    	return view('guest.index', compact('events', 'alumni', 'contact', 'desc'));
    }

    public function murid(Request $request)
    {
    	$murid = \App\Murid::paginate(10);
    	$filter = $request->get('filter');

        if ($filter) {
            $murid = \App\Murid::where('nama', 'LIKE', "%$filter%")->paginate(10);
        }

    	return view('guest.students', compact('murid'));
    }

    public function guru(Request $request)
    {
        $guru = \App\Guru::paginate(10);
        $filter = $request->get('filter');

        if ($filter) {
            $guru = \App\Guru::where('nama', 'LIKE', "%$filter%")->paginate(10);
        }

        return view('guest.teachers', compact('guru'));
    }

    public function event(Request $request)
    {
        $events = \App\Events::paginate(10);
        $galeri = \App\Gallery::all();
        // $filter = $request->get('filter');

        // if ($filter) {
        //     $events = \App\Events::where('nama', 'LIKE', "%$filter%")->paginate(10);
        // }

        return view('guest.events', compact('events', 'galeri'));
    }

    public function galeri(Request $request)
    {
        $galeri = \App\Gallery::all();
        $cat = \App\Category::all();
        $filter = $request->get('filter');

        if ($filter) {
            $galeri = \App\Gallery::where('nama', 'LIKE', "%$filter%")->paginate(10);
        }

        return view('guest.gallery', compact('galeri', 'cat'));
    }

    public function detailEvent(Request $request, $id)
    {
        $event = \App\Events::findOrFail($id);
        $galeri = \App\Gallery::all();

        return view('guest.detail-event', compact('event', 'galeri'));
    }
}
