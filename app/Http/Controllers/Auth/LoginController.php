<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Illuminate\Http\Request;


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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
           'password' => 'required',
           'level' => 'required',
        ]);
        
        if('DB'::table('users')->where('email', $request->email)->first()) {
            if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
                if (auth()->user()->level == 'Admin') {
                    return redirect()->route('/admin');
                }
            
                if(auth()->user()->level == 'Pengguna'){
                    return redirect()->route('/pengguna');
                }
            }else{
                return redirect()->back()->withErrors(['Sandi salah'])
                ->withInput();
            }
        }else{
            return redirect()->back()->withErrors(['username Tidak terdaftar.'])
            ->withInput();
        }
    }
}