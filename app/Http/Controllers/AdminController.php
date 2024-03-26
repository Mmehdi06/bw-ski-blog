<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function show(): View
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create(): View
    {
        return view('admin.users.create');
    }

    public function promote(User $user): RedirectResponse
    {
        if ($user->is_admin) {
            $user->is_admin = false;
        } else {
            $user->is_admin = true;
        }
        $user->save();
        return redirect()->route('users.index');
    }

    public function store(storeUserRequest $request): RedirectResponse
    {
        $user = new User($request->validated());
        $user->save();
        return redirect()->route('users.index');
    }


    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
