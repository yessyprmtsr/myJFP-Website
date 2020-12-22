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
            <div class="form-group">
                <input type="submit" name="submit" value="Update" style="margin-left: 200px" class="btn btn-info">
            </div>
            </div>
            </div>
            </form>
            </div>
         </div>
@endsection

