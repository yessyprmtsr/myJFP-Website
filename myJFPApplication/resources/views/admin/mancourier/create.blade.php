@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Add Courier
                  </h1>									
    </div>
      <div id="page-inner">
        <div class="row" style="margin-top:10px">
            <div class="col-lg-6">
            <h4>Data Courier</h4>
            <br>
            <form action="{{ route('Courier.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">User Name</label>
                    <select name="user_id" class="form-control" id="name">
                        @foreach ($sprinters as $sprinter)
                        <option value="{{$sprinter->id}}">{{$sprinter->name}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Courier Name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female" >Female</option>
                </select>
                </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Address</label>
                <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Status</label>
                <select name="status_employee" class="form-control" id="status_employee">
                    <option value="Active">Active</option>
                    <option value="NotActive" >NotActive</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="Add" value="Add" style="margin-left: 200px" class="btn btn-info">
            </div>
            </div>
            </div>
            </form>
            </div>
         </div>
@endsection

