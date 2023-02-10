<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('private'));
        }

        $credentials = $request->validate([
            'email' =>  'required|email',
            'password' => 'required'
        ]);

        if(User::where('email', $credentials['email'])->exists()){
            return redirect(route('registration'))->withErrors([
                'email' => 'Такой email уже зарегистрирован'
            ]);
        }

        $user = new User;
        $user->email = $request->input('email');
        $user->password = $request->input('password');;
        $user->save();

        Auth::login($user);
        return redirect(route('private'));
    }

    public function private() {
        return viewWithCategories('private');
    }
}
