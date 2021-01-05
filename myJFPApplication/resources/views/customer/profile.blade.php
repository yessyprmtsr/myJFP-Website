@extends('customer.template.layout')
@section('content')
<img src="{{ asset('assetscustomer/img/akun.png')}}" class="card-img-top" style="width:100px;height:100px;margin-left:auto;margin-right:auto;display:block;margin-top: 50px">
<h3 style="text-align: center;margin-top:30px">User Profile</h3>
<div class="col d-flex justify-content-center" style="margin-top: 50px; margin-bottom:50px">
<div class="card justify-content-center" style="width: 50rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Name: {{ auth()->user()->name}}</li>
      <li class="list-group-item">Email: {{ auth()->user()->email}}</li>
      <li class="list-group-item"><i>Created In: {{ auth()->user()->created_at}}</i></li>
    </ul>
  </div>
</div>
@endsection