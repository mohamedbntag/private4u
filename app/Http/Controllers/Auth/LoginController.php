<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        /*if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'super-admin') {
                return redirect()->route('super.admin.dashboard');
            }
            else if (auth()->user()->type == 'teacher') {
                return redirect()->route('teacher.dashboard');
            }
            else if (auth()->user()->type == 'user') {
            return redirect()->route('user.dashboard');
            }
            else{
                return redirect()->route('dashboard');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }*/

    }

    public function redirectTo() {
        $role = Auth::user()->role;
        switch ($role) {
            case '0':
                return '/';
                break;
            case '1':
                return '/admin/index';
                break;
            case '2':
                return '/receiving/index';
                break;
            case '3':
                return '/operations/index';
                break;
            case '4':
                return '/monitor/index';
                break;
            case '5':
                return '/accountant/index';
                break;
            case '6':
                return '/teacher/index';
                break;

            default:
                return '/';
                break;
        }
    }


}
