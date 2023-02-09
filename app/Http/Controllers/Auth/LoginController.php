<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// mycode
use Illuminate\Support\Facades\Auth;
// ends mycode
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Blood;
use App\Models\Donor;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     // mycode
    //     $this->middleware('guest:admin')->except('logout');
    //     // ends mycode
    // }
    // public function login(Request $request)
    // {
    //     dd('dasdasdas');

    //     $input = $request->all();

    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->is_admin == 1) {
    //             dd('inner');
    //             return redirect()->route('admin_dashboard');
    //         }else{
    //             dd('outer');
    //             return redirect()->route('home');
    //         }
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }

    // }

    //mycode
    public function admin_dash(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $all_donors= Donor::get();
            $all_bloods= Blood::get();
            return view('admin.dashboard.index',compact('all_donors','all_bloods'));
            // return view('admin.dashboard.index');
        }
        // dd('nh chal rha');
        return back()->withInput($request->only('email', 'remember'));

    }
}

    // mycode



