<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.allusers', compact('users'));
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);

        if (!Admin::where('user_id', $user->id)->exists()) {
            Admin::create(['user_id' => $user->id]);
        }

        return redirect()->route('users.index')->with('success', 'User has been made an admin.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
