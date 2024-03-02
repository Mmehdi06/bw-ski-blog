<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function promote(User $user)
    {
        if ($user->is_admin) {
            $user->is_admin = false;
        } else {
            $user->is_admin = true;
        }
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
