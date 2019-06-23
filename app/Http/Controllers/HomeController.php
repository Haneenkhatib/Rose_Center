<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $user=Auth::user();
        if($user->type=='C'){
            return view('website.rosecenter');

        }else if ($user->type=='A'){
            $usersnum = DB::table('users')->where('type','C')->count();
            $appointmentsnum =DB::table('appointments')->count();
            return view('controlpanel.home',
                ['usernum'=>$usersnum , 'appointmentsnum'=> $appointmentsnum]);

        }
    }
}
