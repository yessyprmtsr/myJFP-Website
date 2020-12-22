<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transactions;
use App\Models\User;
use App\Http\Controllers\Customer\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view('customer.home');
    }
    public function about()
    {
        return view('customer.about');
    }
    public function login()
    {
        return view('customer.login');
    }
    public function service()
    {
        return view('customer.service');
    }
    public function history()
    {
        $transactions = auth()->user()->transactions;
        // $transactions = Transactions::all();
        return view('customer.history',compact('transactions'));
        // $userId = Auth::user()->id;
        // $data['data'] = DB::table('publications')->where('user_id', $userId)->get();
    }

}
