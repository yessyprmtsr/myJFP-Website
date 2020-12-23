@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Transaction
                  </h1>									
    </div>
      <div id="page-inner">
        <div class="row" style="margin-top:30px">
            <div class="col-lg-6">
                <form action="{{ route('Transaction.update', $item->id)}}" method="POST">
                    @method('patch')
                    @csrf
            <h4>Data Pengirim</h4>
            <br>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pengirim</label>
            <input type="text" name="sender_name" class="form-control"  value="{{ $item->sender_name}}" id="exampleFormControlInput1"  disabled >
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nomor Telefon</label>
            <input type="number" name="sender_phone_number" class="form-control" value="{{ $item->sender_phone_number}}"id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama Barang</label>
            <input type="text" name="good_name" class="form-control" value="{{ $item->good_name}}" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Jenis Barang</label>
            <input type="text" name="good_type" class="form-control" value="{{ $item->good_type}}" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Berat Barang</label>
            <input type="number" name="good_weight" class="form-control" value="{{ $item->good_weight}}" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Service</label>
                <select  name="service" class="form-control" id="exampleFormControlSelect1" value="{{ $item->service}}" disabled>
                <option value="OKE">OKE</option>
                <option value="YES">YES</option>
                <option value="REGULER">REGULER</option>
                </select>
            </div>
            <div class="form-group">
                <label>Waktu Delivery</label>
                <div class="row">
                    <div class="col-lg-6">
                    <label for="inputZip">Tanggal</label>
                    <input type="date" class="form-control" name="date" value="{{ $item->date}}" disabled>
                    </div>
                    <div class="col-lg-6">
                    <label for="inputZip">Jam</label>
                    <input type="time" class="form-control" name="time"value="{{ $item->time}}"  disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Metode Pembayaran</label>
                <select name="payment" class="form-control" id="exampleFormControlSelect1" value="{{ $item->payment}}" disabled>
                <option value="Tunai">Tunai</option>
                <option value="Transfer">Transfer</option>
                <option value="Tunai">Tunai di Penerima</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Pengirim</label>
                <textarea name="sender_address" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{ $item->sender_address}}</textarea>
            </div>
            </div>
            <div class="col-lg-6">
            <h4>Data Penerima</h4>
            <br>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" name="receiver_name" class="form-control" id="exampleFormControlInput1" value="{{ $item->receiver_name}}" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nomor Telefon</label>
            <input type="number" name="receiver_phone_number" class="form-control" id="exampleFormControlInput1" value="{{ $item->receiver_phone_number}}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Penerima</label>
                <textarea name="receiver_address" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{ $item->receiver_address}}</textarea>
            </div>
            <div class="row">
            <div class="col-lg-10">
            <div class="form-group">
                <label for="exampleFormControlInput1">Total</label>
                <input type="number" name="total" class="form-control" id="exampleFormControlInput1" value="{{ $item->total}}" disabled >
                
            </div>
            </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="status_delivery" class="form-control" id="exampleFormControlSelect1" value="{{ $item->status_delivery}}">
                <option value="Diterima">Pesanan Diterima</option>
                <option value="Perjalanan">Dalam Perjalanan</option>
                <option value="Dibawa">Dibawa kurir</option>
                <option value="Warehouse">Di Warehouse</option>
                <option value="Diantar">Diantar</option>
                <option value="Diterima">Diterima</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" style="margin-left: 200px" class="btn btn-info">Update</button>
            </div> 
            </div>
            </div>
            </form>
            </div>
         </div>
@endsection

