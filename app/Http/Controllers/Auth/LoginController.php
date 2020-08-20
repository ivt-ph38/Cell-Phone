<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;

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
    public function form_login()
    {
        return view('admin.login.login');
    }
    public function login(LoginRequest $request)
    {
        $data = $request->only('email','password');
    // -- kiem tra email va password --//
    if(\Auth::attempt($data)){
        $request->session()->regenerate();
        return redirect()->route('home');
        }
        return redirect()->back()->with(['error'=>'Email, Password not match!']);
    }
}
