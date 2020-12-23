@extends('courier.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                     Delivery List
                  </h1>									
    </div>
      <div id="page-inner">
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Courier Name</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Receiver Name</th>
                <th scope="col">Goods Name</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tracks as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$item->sprinters->name}}</td>
                    <td>{{$item->transactions->sender_name}}</td>
                    <td>{{$item->transactions->receiver_name}}</td>
                    <td>{{$item->transactions->good_name}}</td>
                    <td>{{$item->status_delivery}}</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detail</button>
                        <a href="" class="btn btn-primary">Update</a>
                        <form action="" method="post" class="d-inline" >
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" >Delete</a>
                        </form>
                    </td>
                </tr>
               <!-- Modal -->
               <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
              
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Detail Delivery</h4>
                    </div>
                    <div class="modal-body">
                      <p>Courier Name: {{$item->sprinters->name}}</p>
                      <p>Sender Name: {{$item->transactions->sender_name}}</p>
                      <p>Sender Address: {{$item->transactions->sender_address}}</p>
                      <p>Sender Phone: {{$item->transactions->sender_phone_number}}</p>
                      <p>Receiver Name: {{$item->transactions->receiver_name}}</p>
                      <p>Receiver Address: {{$item->transactions->receiver_address}}</p>
                      <p>Receiver Phone: {{$item->transactions->receiver_phone_number}}</p></p>
                      <p>Good Name: {{$item->transactions->good_name}}</p>
                      <p>Good Weight: {{$item->transactions->good_weight}}</p>
                      <p>Good Type: {{$item->transactions->good_type}}</p>
                      <p>Date Pickup: {{$item->transactions->date}}</p>
                      <p>Time Pickup: {{$item->transactions->time}}</p>
                      <p>Status: {{$item->status_delivery}}</p>
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
              
    </div>
@endsection