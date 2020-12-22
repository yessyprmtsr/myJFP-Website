@extends('customer.template.layout')
@section('content')

<div class="container">
<form action="{{ route('booking.store')}}" method="POST" enctype="multipart/form-data" method="POST" enctype="multipart/form-data">
    @csrf
        <h1 style="text-align: center;margin-top:10px">Booking Data</h1>
        <div class="row" style="margin-top:30px">
            <div class="col-lg-6">
               
                <h2>Data Pengirim</h2>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Pengirim</label>
    
                    {{-- @foreach ($users as $item)
                    <option value="{{$item->auth()->id}}">{{$item->id}}</option>
                    @endforeach --}}
                    <input  type="hidden" name="user_id" value="{{ auth()->user()->id}}" class="form-control" id="exampleFormControlInput1">
                    <input  type="text" name="sender_name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor Telefon</label>
                    <input  type="number" name="sender_phone_number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Barang</label>
                    <input  type="text" name="good_name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis Barang</label>
                    <input  type="text" name="good_type" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Berat Barang</label>
                    <input  type="number" name="good_weight" class="form-control" id="good_weight">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Service</label>
                    <select name="service" class="form-control" id="service" onchange="calculateAmount(this.value)">
                        <option value="0">--Choose Service--</option>
                        <option value="OKE">OKE</option>
                        <option value="REGULER" >REGULER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Waktu Delivery</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="inputZip">Tanggal</label>
                            <input type="date" name="date" class="form-control" name="tanggalAntar">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputZip">Jam</label>
                            <input type="time" name="time" class="form-control" name="waktuAntar">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Metode Pembayaran</label>
                        <select onchange="yesnoCheck(this);" name="payment" class="form-control"
                            id="exampleFormControlSelect1">
                            <option value="Tunai">Tunai</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Tunai di Penerima">Tunai di Penerima</option>
                        </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat Pengirim</label>
                    <textarea  name="sender_address" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Data Penerima</h2>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama</label>
                    <input  type="text" name="receiver_name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nomor Telefon</label>
                    <input  type="number" name="receiver_phone_number" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat Penerima</label>
                    <textarea  name="receiver_address" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="form-group">
                    <div id="ifYes" style="display: none;"class="form-group">
                        <label for="exampleFormControlInput1">Bukti Transfer</label>
                        <input type="file" name="cover" class="form-control" id="exampleFormControlInput1" >
                </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Total</label>
                            <input type="number" name="total" class="form-control" id="total" readonly>
                        </div>
                    </div>
                <div class="form-group">
                    <button type="submit" name="submit" style="margin-left: 200px" class="btn btn-info">Booking</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript"> </script>
        <script>
        function yesnoCheck(that) {
        if (that.value == "Transfer") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
}
    </script>
    <script>
        function calculateAmount(val) {
                var value2 = parseFloat($('#good_weight').val()) || 0;
                if(val == 'OKE'){
                   var service = 15000 * value2;
                } else if(val == 'REGULER') {
                    var service = 20000 * value2;
                } else {
                    var service = 0;
                }
                // var service = val * value2;
                // /*display the result*/
                var divobj = document.getElementById('total');
                divobj.value = service;
            }
    //  $(function(){
    //         $('#value1, #good_weight').keyup(function(){
    //            var value1 = parseFloat($('#value1').val()) || 0;
    //            var value2 = parseFloat($('#good_weight').val()) || 0;
    //            $('#total').val(value1 * value2);
    //         });
    //      });
    </script>

@endsection
