<?php
//App\Controllers\Auth\AdminLoginController; (ruta a esta clase)
namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    public function showAdminLoginForm(){
        return view('adminAuth.adminLogin');
    }
    public function adminLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email','remember'));
    }

    public function adminLogout () {
        //logout user
        Auth::guard('admin')->logout();
        // redirect to homepage
        return redirect('/');
    }
}
