<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\admin;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm() {
        return view('auth.login');
    }
    //attempt to Login
    public function login(UserLoginRequest $request) 
    {
        if(Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard');
    }
        if(! User::where('username', $request->username)->where('password', bcrypt($request->password))->first() ) {
            return redirect()->back()
                ->withInput($request->only('username'))
                ->withErrors(['status' => 'Incorrect username or password.']);
        }
    }

    public function logout() {
        Auth::guard('user')->logout();
        return redirect()->route('login');
    }


}
