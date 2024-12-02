<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return '/dashboard'; // Redirect admin users to the dashboard
        }

        return '/home'; // Redirect regular users to home
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout()
    {
        Auth::logout(); // Logs out the user

        // Redirect to a specific route, e.g., login page
        return redirect('/')->with('success', 'You have successfully logged out.');
    }
}
