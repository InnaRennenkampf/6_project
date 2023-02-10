<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function login()
    {
        $login = new Login();

        return viewWithCategories('login', ['login' => $login->all()]);
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function login_check(Request $request)
    {
        if (Auth::check())
        {
            return redirect()->intended(route('private'));
        }

        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){ //попытка аутентификации. если тру
            return redirect()->intended(route('private'));
        }
        return redirect(route('registration'))->withErrors([
            'email' => 'Не удалось авторизоваться'
            ]);

    }
}
