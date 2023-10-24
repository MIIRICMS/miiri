<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function loginView()
    {
        return view('pages.guest.login');

    }
    public function login(Request $request)
    {
        $request->validate([
            "email"         => ['required'],
            "password"      => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }else{
            Auth::login($user);
        }

        return Redirect::route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route("home");
    }

    public function create()
    {
        return view('pages.admin.users.create');
    }

    public function store(Request $request)
    {

        Validator::make($request->all(),[
            "name"          =>  "required",
            "email"         =>  "required",
            "password"      =>  "required | confirmed",
        ])->validate();

        $user=User::create([
            'name'    => $request->name,
            'email'     => $request->email,
            'password'      => bcrypt($request->password),
        ]);

        return Redirect::route('dashboard',)->with('success','User created!');
    }
}
