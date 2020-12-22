@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Tracking
                  </h1>									
    </div>
      <div id="page-inner">
        <a href="\admin\tracking\create" class="btn btn-primary" >Add data</a> 
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
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Detail</h4>
                </div>
                <div class="modal-body">
                  <h4>Data Pengirim</h4>
                      <br>
                      <div class="form-group">
                      <label for="exampleFormControlInput1">ID Tracking</label>
                      <input type="text" name="namaPengirim" class="form-control" id="exampleFormControlInput1" disabled >
                      </div>
                      <div class="form-group">
                      <label for="exampleFormControlInput1">ID Courrier</label>
                      <input type="number" name="phonePengirim" class="form-control" id="exampleFormControlInput1" disabled>
                      </div>
                      <div class="form-group">
                      <label for="exampleFormControlInput1">ID Transaction</label>
                      <input type="text" name="namaBarang" class="form-control" id="exampleFormControlInput1" disabled>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
          
            </div>
          </div>
          
              
    </div>
@endsection