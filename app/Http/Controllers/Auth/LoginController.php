<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



use Auth;
use Illuminate\Http\Request;
use App\Admin;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    
    protected $redirectTo = '/home';

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.auth.login', ['url' => 'admin']);
    }
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            // 'password' => 'required|min:20'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $user = auth()->guard('admin')->user();
            return redirect()->intended('/home/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
