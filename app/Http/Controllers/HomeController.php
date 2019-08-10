<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $appono=Appointment::all()->count();
        $userno=User::where('email','not like','%rose%')->count();
        return view('controlpanel.home',['appointments'=>$appono,'users'=>$userno]);

//        $user=Auth::user();
//        if($user->type=='C'){
//            return view('website.rosecenter');
//
//        }else if ($user->type=='A'){
//            return view('controlpanel.home');
//
//        }
    }
}
