@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Transaction
                  </h1>									
    </div>
    @if (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
            </div>
    @endif
    @if (count($transactions) <= 0)
    <?php echo 'No Data Found' ?>
    @else
      <div id="page-inner">
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Sender Phone</th>
                <th scope="col">Receiver Name</th>
                <th scope="col">Receiver Phone</th>
                <th scope="col">Good Name</th>
                <th scope="col">Good Weight</th>
                <th scope="col">Service</th>
                <th scope="col">Payment</th>
                <th scope="col">Proof Payment</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transactions as $item)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{ $item->sender_name}}</td>
                <td>{{ $item->sender_phone_number}}</td>
                <td>{{ $item->receiver_name}}</td>
                <td>{{ $item->receiver_phone_number}}</td>
                <td>{{ $item->good_name}}</td>
                <td>{{ $item->good_weight}}</td>
                <td>{{ $item->service}}</td>
                <td>{{ $item->payment}}</td>
                <td>
                  @if ($item->cover != NULL)
                  <img src={{asset ('/uploads/image/'.$item->cover)}} height="50px" width="50px">
                  @else
                  <p>Langsung ditempat</p>
                  @endif
                 
                </td>
                <td>{{ $item->total}}</td>
                <td>{{ $item->status_delivery}}</td>
                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{$item->id}}" data-target="#myModal{{$item->id}}">Detail</button>
                    <a href="{{ route('Transaction.edit', $item->id) }}" class="btn btn-primary">Update</a>
                    <form action="{{ route('Transaction.destroy',$item->id) }}" method="post" class="d-inline" >
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" >Delete</a>
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
          </div>  
@endsection