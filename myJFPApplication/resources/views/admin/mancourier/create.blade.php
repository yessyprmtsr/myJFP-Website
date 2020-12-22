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
            <div class="form-group">
            <label for="exampleFormControlInput1">ID Courier</label>
            <input type="number" name="namaPengirim" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Courier Name</label>
            <input type="number" name="phonePengirim" class="form-control" id="exampleFormControlInput1">
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

