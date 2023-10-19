<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Payment;
use App\Models\Room;


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
        if(auth()->user()->usertype == 'administrator'){
            $payments = Payment::sum('amountpaid');
            $tenants = Tenant::count();
            $rooms = Room::count();
            
            return view('home', compact('payments','tenants','rooms'));
            
     
        }else if(auth()->user()->usertype == 'tenant'){

            // Get tenant->roomid by email
            $tenant = Tenant::where('email', '=', auth()->user()->email)->first();
            
            // Get Payments 
            $payments = Payment::where('roomid', '=', $tenant->roomid)->where('tenantid', '=', $tenant->id)->get();

            return view('home', compact('payments'));

        }

    }
}
