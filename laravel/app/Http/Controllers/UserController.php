<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user){
        $fields = $request->validate([
            'username' => 'string',
            'fullname' => 'string',
            'phoneNumber' => 'string',
            'email' => 'string|email',
        ]);

        $user->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $user->id . 'has been update.'
        ]);

    }

    public function store(Request $request, User $user){
        $fields = $request->validate([
            'username' => 'string',
            'fullname' => 'string',
            'phoneNumber' => 'string',
            'email' => 'string|email',
        ]);

        $fields['phoneNumber'] = $request->filled('phoneNumber') ? $request->input('phoneNumber') : null;

        $user = $user->create($fields);



        return response()->json([
            'status' => 'OK',
            'user' => $user,
            'message' => 'User with ID#' . $user->id . 'has been updated.'
        ]);

    }

    public function destroy(User $user) {
        $name = $user->fullName;
        $user->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The user $name has been deleted."
        ]);
    }

    public function index() {
        $users = User::orderBy('id')->get();

        return response()->json($users);
    }

    public function view(User $user) {

        return response()->json($user);
    }
}
