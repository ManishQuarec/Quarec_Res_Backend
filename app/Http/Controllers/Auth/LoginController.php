<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use App\Models\User;
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
    // protected $redirectTo ='dashboard';

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function login()
    {
        return view('auth/login');
    }

    public function LoginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->intended('dashboard')->withSuccess('Signed in');
                // return redirect()->route('admin.route');
            }else{
                return redirect()->route('home');
            }

        }
        else{
            return view('auth/login')->withSuccess('login details are not matched');
        }
    }
// register Controller
    public function register()
    {
        return view('auth.register');
    }

    public function registration(Request $request)
    {   
        $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|min:8|confirmed|max:255',
        'password_confirmation' => 'required',
    ]);
   
       $user=new User();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password=Hash::make($request->password);
       $res= $user->save();
      if($res){
        return view('auth/login')->withSuccess('login details are not matched');
      }
      else{
       
        return view('auth.register');
    }      

    }

    public function Logout()
    {
       Session::flush();
       Auth::logout();
       return redirect('/login')->withSuccess('logout successfully');

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
