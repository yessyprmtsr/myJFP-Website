@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Tracking
                  </h1>									
    </div>
      <div id="page-inner">
        <a href="{{ route('Tracking.create')}}" class="btn btn-primary" >Add data</a> 
        <br> 
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Tracking</th>
                <th scope="col">ID Courrier</th>
                <th scope="col">ID Transaction</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>123424901</td>
                <td>Ganteng</td>
                <td>234472181</td>
                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Detail</button>
                    <a href="\admin\tracking\update" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>

          </div>
          
              
    </div>
@endsection