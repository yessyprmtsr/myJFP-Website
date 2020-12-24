@extends('admin.template.partial.layout')

@section('content')

<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Tracking
                  </h1>									
    </div>
      @if (session('delete'))
  <div class="alert alert-danger">
      {{ session('delete') }}
          </div>
  @endif
 
      <div id="page-inner">
        <a href="{{ route('Tracking.create')}}" class="btn btn-primary" >Add data</a> 
        <br>
        @if (count($trackings) <= 0)
        <?php echo 'No Data Found' ?>
        @else
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Sender Name</th>
                <th scope="col">Courier Name</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($trackings as $track)
                <tr>
                  <th scope="row">{{ $loop->iteration}}</th>
                  <td>{{$track->transactions->date}}</td>
                  <td>{{$track->transactions->sender_name}}</td>
                  <td>{{$track->sprinters->name}}</td>
                  <td>{{$track->transactions->status_delivery}}</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{$track->id}}" data-target="#myModal{{$track->id}}">Detail</button>
                      <form action="{{ route('Courier.destroy',$track->id) }}" method="post" class="d-inline" >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" >Delete</a>
                      </form>
                  </td>
                </tr>
                <div id="myModal{{$track->id}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Detail Delivery</h4>
                      </div>
                      <div class="modal-body">
                        <p>Courier Name: {{$track->sprinters->name}}</p>
                        <p>Sender Name: {{$track->transactions->sender_name}}</p>
                        <p>Sender Address: {{$track->transactions->sender_address}}</p>
                        <p>Receiver Name: {{$track->transactions->receiver_name}}</p>
                        <p>Receiver Address: {{$track->transactions->receiver_address}}</p>
                        <p>Good Name: {{$track->transactions->good_name}}</p>
                        <p>Date Pickup: {{$track->transactions->date}}</p>
                        <p>Time Pickup: {{$track->transactions->time}}</p>
                       
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                
                  </div>
                </div>
            @endforeach
              </tr>
              
            </tbody>
          </table>
@endif
          </div>
         
              
    </div>
@endsection