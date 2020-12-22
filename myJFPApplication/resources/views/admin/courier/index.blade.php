@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Tracking
                  </h1>									
    </div>
      <div id="page-inner">
        <a href="#" class="btn btn-primary" >Add data</a> 
        <br> 
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Courier</th>
                <th scope="col">Courier Name</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>123456789</td>
                <td>Adam Kencangna</td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Detail</a>
                    <a href="\admin\tracking\update" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
          
              
    </div>
@endsection