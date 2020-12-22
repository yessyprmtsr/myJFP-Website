@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Courier
                  </h1>									
    </div>
      <div id="page-inner">
        <div class="row" style="margin-top:10px">
            <div class="col-lg-6">
            <h4>Courier Data</h4>
            <br>
            <form action="{{ route('Courier.update', $kurir->id)}}" method="POST">
                @method('patch')
                @csrf
            <div class="form-group">
            <input  type="hidden" name="user_id" value="{{ auth()->user()->id}}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Courier Name</label>
                <input type="text" class="form-control" name="name" value="{{ $kurir->name }}" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Gender</label>
                <select name="gender" class="form-control" id="gender" value="{{ $kurir->gender }}">
                    <option value="Male">Male</option>
                    <option value="Female" >Female</option>
                </select>
                </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Address</label>
                <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1"
                        rows="3">{{ $kurir->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status</label>
                <select name="status_employee" class="form-control" id="status_employee" value="{{ $kurir->status_employee }}">
                    <option value="Active">Active</option>
                    <option value="NotActive" >NotActive</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" style="margin-left: 200px" class="btn btn-info">Update</button>
            </div>           
            </div>
            </div>
            </form>
            </div>
         </div>
@endsection

