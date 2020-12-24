@extends('courier.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                     Delivery List
                  </h1>									
    </div>
    @if (session('status'))
    <div class="alert alert-success">
         {{ session('status') }}
            </div>
    @endif
    @if (session('delete'))
    <div class="alert alert-danger">
         {{ session('delete') }}
            </div>
    @endif
      <div id="page-inner">
          @if (count($tracks) <= 0)
              <?php echo 'No Data Found' ?>
          @else
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
                    <td>{{$item->transactions->status_delivery}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{$item->id}}" data-target="#myModal{{$item->id}}">Detail</button>
                        <form class="btn-group" action="{{route('courier.update', [$item->id]) }}" method="post">
                          @method('PATCH')
                          @csrf
                          <button type="submit" class="btn btn-success btn-xs">UPDATE</button>
                      </form>
                        <form action="{{ route('courier.destroy',$item->id) }}" method="post" class="d-inline" >
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" >Delete</a>
                          </form>
                    </td>
                </tr>
               <!-- Modal -->
               <div id="myModal{{$item->id}}" class="modal fade" role="dialog">
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