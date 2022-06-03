<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required', 'min:10', 'max:255'],
            'username' => ['required', 'min:7', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255'],
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
