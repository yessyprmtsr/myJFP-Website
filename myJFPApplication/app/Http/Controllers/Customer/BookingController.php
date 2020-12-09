<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.book');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validasi
        //  $this->validate($request,[
        //     'sender_name' => 'required',
        //     'sender_phone_number' => 'required',
        //     'good_name' => 'required',
        //     'good_type' => 'required',
        //     'good_weight' => 'required',
        //     'service' => 'required',
        //     'payment' => 'required',
        //     'cover' => 'file|image',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'sender_address' => 'required',
        //     'receiver_name' => 'required',
        //     'receiver_phone_number' => 'required',
        //     'receiver_address' => 'required',  
        // ]);
        // $booking = new Transactions();
        // $booking->sender_name = $request->input('sender_name');
        // $booking->sender_phone_number = $request->input('sender_phone_number');
        // $booking->good_name = $request->input('good_name');
        // $booking->good_type = $request->input('good_type');
        // $booking->good_weight = $request->input('good_weight');
        // $booking->service = $request->input('service');
        // $booking->payment = $request->input('payment');
        // if($request->hasFile('cover')){
        //     $file = $request->file('cover');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . "." . $extension;
        //     $file->move('uploads/image/',$filename);
        //     $booking->cover = $filename;
        // } else {
        //     return $request;
        //     $booking->cover = "";
        // }
        // $booking->date = $request->input('date');
        // $booking->time = $request->input('time');
        // $booking->sender_address = $request->input('sender_address');
        // $booking->receiver_name = $request->input('receiver_name');
        // $booking->receiver_phone_number = $request->input('receiver_phone_number');
        // $booking->receiver_address = $request->input('receiver_address');
        // $booking->total = $request->input('total');
        // $booking->save();
        // return redirect()->route('home');
        $cover = null;
        if($request->hasFile('cover')){
            $cover = $request->file('cover')->store('public/assets/covers');
         }
        DB::table('transactions')->insert([
            'sender_name' => $request->sender_name,
            'sender_phone_number' => $request->sender_phone_number,
            'good_name' => $request->good_name,
            'good_type' => $request->good_type,
            'good_weight' => $request->good_weight,
            'service' => $request->service,
            'payment' => $request->payment,
            'cover' => $cover,
            'date' => $request->date,
            'time' => $request->time,
            'sender_address' => $request->sender_address,
            'receiver_name' => $request->receiver_name,
            'receiver_phone_number' => $request->receiver_phone_number,
            'receiver_address' => $request->receiver_address,
            'total' => $request->total
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
