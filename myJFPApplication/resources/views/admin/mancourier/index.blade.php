@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Courier
                  </h1>									
    </div>
    @if (session('status'))
        <div class="alert alert-success">
             {{ session('status') }}
                </div>
        @endif
      <div id="page-inner">
        <a href="{{ route('Courier.create')}}" class="btn btn-primary" >Add data</a> 
        <br>
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Courier Name</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($sprinters as $kurir)
              <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$kurir->name}}</td>
                <td>{{$kurir->status_employee}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{$kurir->id}}" data-target="#myModal">Detail</button>
                    <a href="{{ route('Courier.edit', $kurir->id) }}" class="btn btn-primary">Update</a>
                    <form action="{{ route('Courier.destroy',$kurir->id) }}" method="post" class="d-inline" >
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" >Delete</a>
                    </form>
                </td>
              </tr>
          @endforeach 
            </tbody>
          </table>
          
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail</h4>
                </div>
                <div class="modal-body">
                    <h4>Courier Data</h4>
                    <br>
                    @if(isset($kurir->id))
                    <table>
                      <tr><td><strong>Name    :</strong></td><td>{{$kurir->name}}</td></tr>
                      <tr><td><strong>Gender  :</strong></td><td>{{$kurir->gender}}</td></tr>
                      <tr><td><strong>Address:</strong></td><td>{{$kurir->alamat}}</td></tr>
                      <tr><td><strong>Employee Status :</strong></td><td>{{$kurir->status_employee}}</td></tr>
              
                      </table>
                    @endif
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            </div>
          </div>
              
    </div>
@endsection