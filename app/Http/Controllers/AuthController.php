<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth/register');
    }

    public function login()
    {
        return view('auth/login');
    }
    public function home()
    {
        return view('home');
    }
    public function cart()
    {
        return view('cart');
    }
    public function orders()
    {
        return view('orders');
    }


    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ])->validate();

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password)
        ]);
        return redirect()->route('login');
    }

    public function loginAction(Request $request): RedirectResponse
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        $authUserRole = Auth::user()->role;

        switch ($authUserRole) {
            case 1:
                return redirect()->intended(route('admin', absolute: false));
            case 2:
                return redirect()->intended(route('dashboard', absolute: false));
            default:
                throw ValidationException::withMessages([
                    'role' => trans('auth.role_not_found')
                ]);
        }

        // return redirect()->route('dashboard')->with('success');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
