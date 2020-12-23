@extends('customer.template.layout')
@section('content')

<div class="container">
    <h1 style="margin-top: 20px;text-align:center">History Booking</h1>
    @if (count($transactions) <= 0)
    <?php echo 'No Data Found' ?>
@else
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{$item->id}}" data-target="#myModal{{$item->id}}"><i class="fa fa-eye"></i></button>
        <form action="{{ route('booking.destroy',$item->id) }}" method="post" class="d-inline" >
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" ><i class="fa fa-trash"></i></a>
          </form>
    </td>
</tr>
<div id="myModal{{$item->id}}" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4>Data Booking</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Sender Name: {{$item->sender_name}}</p>
          <p>Sender Address: {{$item->sender_address}}</p>
          <p>Sender Phone: {{$item->sender_phone_number}}</p>
          <p>Receiver Name: {{$item->receiver_name}}</p>
          <p>Receiver Address: {{$item->receiver_address}}</p>
          <p>Receiver Phone: {{$item->receiver_phone_number}}</p></p>
          <p>Good Name: {{$item->good_name}}</p>
          <p>Good Weight: {{$item->good_weight}}</p>
          <p>Good Type: {{$item->good_type}}</p>
          <p>Service: {{$item->service}}</p>
          <p>Payment: {{$item->payment}}</p>
          <p>Date Pickup: {{$item->date}}</p>
          <p>Time Pickup: {{$item->time}}</p>
          <p>Total: {{$item->total}}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
@endforeach
</tbody>
    </table>
    @endif
</div>

@endsection
