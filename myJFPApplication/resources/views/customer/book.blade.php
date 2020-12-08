@extends('customer.template.layout')
@section('content')
		<div class="container">
        <form action="" method="post">
            <h1 style="text-align: center;margin-top:10px">Booking Data</h1>
        <div class="row" style="margin-top:30px">
        <div class="col-lg-6">
        <h2>Data Pengirim</h2>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pengirim</label>
        <input type="text" name="namaPengirim" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="phonePengirim" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Barang</label>
        <input type="text" name="namaBarang" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Jenis Barang</label>
        <input type="text" name="jenisBarang" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Berat Barang</label>
        <input type="number" name="beratBarang" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Service</label>
            <select  name="jenisService" class="form-control" id="exampleFormControlSelect1">
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
				<input type="date" class="form-control" name="tanggalAntar">
                </div>
                <div class="col-lg-6">
                <label for="inputZip">Jam</label>
				<input type="time" class="form-control" name="waktuAntar">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Metode Pembayaran</label>
            <select name="bayar" class="form-control" id="exampleFormControlSelect1">
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
            <option value="Tunai">Tunai di Penerima</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Pengirim</label>
            <textarea name="alamatPengirim" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </div>
        <div class="col-lg-6">
        <h2>Data Penerima</h2>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" name="namaPenerima" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="phonePenerima" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Penerima</label>
            <textarea name="alamatPenerima" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row">
        <div class="col-lg-10">
        <div class="form-group">
            <label for="exampleFormControlInput1">Total</label>
            <input type="number" name="total" class="form-control" id="exampleFormControlInput1" disabled >
            <input type="hidden" name="total" class="form-control" id="exampleFormControlInput1" >
        </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
            <a class="btn btn-info" href="{{ route('booking.index')}}" name="count" style="margin-top: 30px">Count</a>
            </div>
        </div>
        </div>  
        <div class="form-group">
            <input type="submit" name="submit" value="Booking" style="margin-left: 200px" class="btn btn-info">
        </div>
        </div>
        </div>
        </form>
        </div>
@endsection