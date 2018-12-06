<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\User::all();

        return view('admin.index', compact('user'));
        // return view('admin.show', compact('user'));
    }

    public function show($id)
    {
        $user = \App\User::findOrFail($id)->all();

        return view('admin.show', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = \App\User::findOrFail($id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if($request->file('image'))
        {
            if($user->avatars && file_exists(storage_path('app/public/'.$user->avatar))){
                \Storage::delete('public/'.$user->avatar);
            }
            $new_avatar = $request->file('image')->store('avatars', 'public');

            $user->avatars = $new_avatar;
        }

        $user->save();

        return redirect()->route('home.show', ['id' => $user->id])->with('status', 'Profil berhasil diperbarui!');
    }

    public function updatePassword(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:password'
        ]);

        $user = \App\User::findOrFail($id)->all();

        return redirect()->route('home.show', ['id' => $user->id])->with('status', 'Password berhasil diperbarui!');
    }
}
