<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Sprinter;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sprinters = Sprinter::all();
        return view('\admin\mancourier\index', compact('sprinters'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $sprinters = User::all();
        $sprinters = User::whereHas('roles', function($q){$q->where('name', 'courier');})->get();
        return view('\admin\mancourier\create', compact('sprinters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('sprinters')->insert([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'status_employee' => $request->status_employee
        ]);
        // alihkan halaman ke halaman index courier
        return redirect()->route('Courier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sprinter $sprinters)
    {
        return view('Courier.show',compact('sprinters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kurir = Sprinter::find($id);
        return view('\admin\mancourier\update', compact('kurir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sprinter::find($id)->update($request->all());
        return redirect()->route('Courier.index')->with('status','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sprinter::find($id)->delete();
        return redirect()->route('Courier.index')->with('status','Delete Successfull');
    }
}
