@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Transaction
                  </h1>									
    </div>
      <div id="page-inner">
        <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Transaction</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1202180311</td>
                <td>Adam Keren</td>
                <td>OTW</td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Detail</a>
                    <a href="\admin\transaction\update" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
          
              
    </div>
@endsection