<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth::User()->userType == 'admin') 
        {
            return 'AdminPortel';
        }
        else
        {
            return 'FarmerPotel';
            
            // if (Auth::User()->status != 'pending') 
            // {
                
            //     if(Auth::User()->profile == 'teacher')
            //     {
            //         return 'teacherPortel';
            //     }
            //     elseif(Auth::User()->profile == 'student')
            //     {
            //         return 'studentPortel';
            //     }
            // }
            // else
            // {   
            // Auth::logout();
            
            // return ('/login');
            
            // }
        }
        
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
}
