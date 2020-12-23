@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Add Tracking
                  </h1>									
    </div>
      <div id="page-inner">
        <div class="row" style="margin-top:10px">
            <div class="col-lg-6">
            <h4>Data Tracking</h4>
            <br>
            <form action="{{ route('Tracking.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Booking Name</label>
                    <select name="transactions_id" class="form-control" id="name">
                        @foreach ($transactions as $item)
                        <option value="{{$item->id}}">{{$item->sender_name}}</option>
                        @endforeach  
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Courier Name</label>
                    <select name="sprinter_id" class="form-control" id="name">
                        @foreach ($sprinters as $sprinter)
                        <option value="{{$sprinter->id}}">{{$sprinter->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input  type="hidden" name="user_id" value="{{ auth()->user()->id}}" class="form-control" id="exampleFormControlInput1">
            <div class="form-group">
                <input type="submit" name="Add" value="Add" style="margin-left: 200px" class="btn btn-info">
            </div>
            </div>
            </div>
            </form>
            </div>
         </div>
@endsection

