<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{ 
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo()
    {        
        return route('users-list');
        // switch (auth()->user()->role) {
        //     case 'foo':
        //         return route('foo.home');

        //     case 'bar':
        //         return route('bar.home');

        //     default:
        //         auth()->logout();
        //         return route('web.welcome');
        // }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Login
    public function showLoginForm()
    {
        $pageConfigs = ['bodyCustomClass' => 'bg-full-screen-image'];

        return view(
            '/auth/login',
            [
                'pageConfigs' => $pageConfigs
            ]
        );
    }
}
