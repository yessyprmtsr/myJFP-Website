<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sprinter;
use App\Models\User;
use App\Models\Tracking;
use App\Models\Transactions;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $jumlah_courier = Sprinter::all()->count();
        // $jumlah_customer = Sprinter::all()->count();
        $jumlah_transaction = Transactions::all()->count();
        $jumlah_tracking = Tracking::all()->count();
        $jumlah_customer = User::whereHas('roles', function($q){$q->where('name', 'user');})->get()->count();
        return view('admin.dashboard')
            ->with('jumlah_courier', $jumlah_courier)
            ->with('jumlah_transaction', $jumlah_transaction)
            ->with('jumlah_tracking', $jumlah_tracking)
            ->with('jumlah_customer', $jumlah_customer);
    }
}
