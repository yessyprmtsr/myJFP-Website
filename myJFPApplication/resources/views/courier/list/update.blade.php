@extends('courier.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Delivery Data
                  </h1>									
    </div>

      <div id="page-inner">
            <form action="{{ route('courier.update', $tracks->id)}}" method="POST">
                @method('patch')
                @csrf
            <h4>Data Status</h4>
            <br>
           
            <div class="form-group">
                <input  type="hidden" name="id" value="{{ $tracks->id}}" class="form-control" id="exampleFormControlInput1">
                <input  type="hidden" name="sprinter_id" value="{{ $tracks->sprinter_id}}" class="form-control" id="exampleFormControlInput1">
                <input  type="hidden" name="user_id" value="{{ $tracks->user_id}}" class="form-control" id="exampleFormControlInput1">
               
                </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="status_delivery" class="form-control" id="exampleFormControlSelect1">
                    <option value="Waiting" <?php if($tracks['status_delivery']=='Waiting') echo 'selected'; ?>>Pesanan Diterima</option>
                    <option value="Perjalanan"<?php if($tracks['status_delivery']=='Perjalanan') echo 'selected'; ?>>Dalam Perjalanan</option>
                    <option value="Dibawa"<?php if($tracks['status_delivery']=='Dibawa') echo 'selected'; ?>>Dibawa kurir</option>
                    <option value="Warehouse"<?php if($tracks['status_delivery']=='Warehouse') echo 'selected'; ?>>Di Warehouse</option>
                    <option value="Diantar"<?php if($tracks['status_delivery']=='Diantar') echo 'selected'; ?>>Diantar</option>
                    <option value="Diterima Penerima"<?php if($tracks['status_delivery']=='Diterima Penerima') echo 'selected'; ?>>Diterima Penerima</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" style="margin-left: 200px" class="btn btn-info">Save</button>
            </div>
            </form>
            </div>
            </div>
@endsection

