<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\User;

class GalleryController extends Controller
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
        // $gallery = \App\Gallery::all();
        $gallery = Gallery::paginate(5);
        $data = Gallery::all();
        $user = User::all();

        $filter = $request->get('filter');

        if ($filter) {
            $gallery = Gallery::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('gallery.index', compact('gallery', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();
        $cat = \App\Category::all();

        return view('gallery.create', compact('user', 'cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_image = new \App\Gallery;

        $new_image->nama = $request->get('nama');
        $image = $request->file('nama_foto');
        $new_image->cat_id = $request->get('kategori');

        if($image)
        {
            if($new_image->nama_foto && file_exists(storage_path('app/public'.$new_image->nama_foto)))
            {
                \Storage::delete('public/'.$new_image->nama_foto);
            }
            $new_images = $request->file('nama_foto')->store('galleries', 'public');

            $new_image->nama_foto = $new_images;
        }

        $new_image->save();

        return redirect()->route('galleries.index')->with('status', 'Data gallery berhasil diperbarui!');
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
        $selectid = \App\Gallery::findOrFail($id)->cat_id;
        $gallery = \App\Gallery::findOrFail($id);
        $gal = \App\Category::all();

        return view('gallery.edit', compact('user', 'gallery', 'selectid', 'gal'));
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
        $gallery = \App\Gallery::findOrFail($id);

        $gallery->nama = $request->get('nama');
        
        if($request->file('nama_foto'))
        {
            if($gallery->nama_foto && file_exists(storage_path('app/public'.$gallery->nama_foto)))
            {
                \Storage::delete('public/'.$gallery->nama_foto);
            }
            $new_images = $request->file('nama_foto')->store('galleries', 'public');

            $gallery->nama_foto = $new_images;
        }
        $gallery->cat_id = $request->get('kategori');
        $gallery->save();

        return redirect()->route('galleries.index')->with('status', 'Data gallery berhasil diperbarui!');
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
