<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $category = \App\Category::all();
        $category = \App\Category::paginate(5);

        $filter = $request->get('filter');

        if ($filter) {
            $category = \App\Category::where('nama', 'LIKE', "%$filter%")->paginate(5);
        }

        return view('gallery.category.index', compact('user', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \App\User::all();

        return view('gallery.category.create', compact('user'));
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
        $new_cat = new \App\Category;

        $new_cat->nama = $request->get('nama');
        $new_cat->save();

        return redirect()
        ->route('categories.index', compact('user'))->with('success', 'Data kategori berhasil ditambahkan!');

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
        $category = \App\Category::findOrFail($id);

        return view('gallery.category.edit', compact('category', 'user'));
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
        $cat = \App\Category::findOrFail($id);

        $cat->nama = $request->get('nama');
        $cat->save();

        return redirect()->route('categories.index')->with('success', 'Data kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = \App\Category::findOrFail($id);

        $delete->delete();

        return redirect()->route('categories.index')->with('success', 'Data alumni berhasil dihapus!');
    }
}
