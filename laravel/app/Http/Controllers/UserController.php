<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $user = User::orderBy('id')->get();

        return view('users.index', ['users' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'id' => 'required|numeric',
            'username' => 'required',
            'fullname' => 'required',
            'phoneNumber' => 'required|numeric',
            'email' => 'required|email'
        ]);

        User::create([
            'id' => $request->id,
            'username' => $request->username,
            'fullname' => $request->fullname,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email
        ]);

        return redirect('/users')->with('message', 'A new user has been added');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required'
        ]);

        $user->update($request->all());
        return redirect('/users')->with('message', "$user->id has been updated.");
    }
}
