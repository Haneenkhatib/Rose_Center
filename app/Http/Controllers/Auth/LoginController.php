<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
//        $role= Role::findById(2);
//        $pe rmission11=Permission::findById(4);
//        $permission22=Permission::findById(5);
//        $role->givePermissionTo($permission11);
//        $role->givePermissionTo($permission22);
//$rolee= Role::findById(1);
//        $permission1=Permission::findById(1);
//        $permission2=Permission::findById(2);
//        $permission3=Permission::findById(3);
//        $rolee->givePermissionTo($permission1);
//        $rolee->givePermissionTo($permission2);
//        $rolee->givePermissionTo($permission3);

        $user = Auth::user();
//        $roles = $user->hasrole('admin'); // Returns a collection
//        dd($user->hasRole('admin'));
//        dd($user->hasRole('user'));
        if($user->hasRole('user')){
            return 'website/home';
        }else{
            return 'controlpanel/home';
        }
    }
}
