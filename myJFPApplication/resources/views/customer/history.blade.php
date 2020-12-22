@extends('customer.template.layout')
@section('content')

<div class="container">
    <h1 style="margin-top: 20px;text-align:center">History Booking</h1>
    <table class="table table-hover">
<thead>
<tr>
  <th scope="col">No</th>
  <th scope="col">Nama Pengirim</th>
  <th scope="col">Nama Penerima</th>
  <th scope="col">Nama Barang</th>
  <th scope="col">Berat Barang</th>
  <th scope="col">Total Bayar</th>
  <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
    @foreach ($transactions as $item)
<tr>
    <td>{{ $loop->iteration}}</td>
    <td>{{$item->sender_name}}</td>
    <td>{{$item->receiver_name}}</td>
    <td>{{$item->good_name}}</td>
    <td>{{$item->good_weight}}</td>
    <td>{{$item->total}}</td>
    <td>
        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
</tr>
@endforeach
</tbody>
    </table>
</div>

@endsection
