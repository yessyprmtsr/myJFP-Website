@extends('admin.template.partial.layout')

@section('content')
<div id="page-wrapper">
    <div class="header"> 
                  <h1 class="page-header">
                      Management Transaction
                  </h1>									
    </div>
      <div id="page-inner">
        <div class="row" style="margin-top:30px">
            <div class="col-lg-6">
            <h4>Data Pengirim</h4>
            <br>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pengirim</label>
            <input type="text" name="namaPengirim" class="form-control" id="exampleFormControlInput1" disabled >
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nomor Telefon</label>
            <input type="number" name="phonePengirim" class="form-control" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama Barang</label>
            <input type="text" name="namaBarang" class="form-control" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Jenis Barang</label>
            <input type="text" name="jenisBarang" class="form-control" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Berat Barang</label>
            <input type="number" name="beratBarang" class="form-control" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Service</label>
                <select  name="jenisService" class="form-control" id="exampleFormControlSelect1" disabled>
                <option value="OKE">OKE</option>
                <option value="YES">YES</option>
                <option value="REGULER">REGULER</option>
                </select>
            </div>
            <div class="form-group">
                <label>Waktu Delivery</label>
                <div class="row">
                    <div class="col-lg-6">
                    <label for="inputZip">Tanggal</label>
                    <input type="date" class="form-control" name="tanggalAntar" disabled>
                    </div>
                    <div class="col-lg-6">
                    <label for="inputZip">Jam</label>
                    <input type="time" class="form-control" name="waktuAntar" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Metode Pembayaran</label>
                <select name="bayar" class="form-control" id="exampleFormControlSelect1" disabled>
                <option value="Tunai">Tunai</option>
                <option value="Transfer">Transfer</option>
                <option value="Tunai">Tunai di Penerima</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Pengirim</label>
                <textarea name="alamatPengirim" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
            </div>
            </div>
            <div class="col-lg-6">
            <h4>Data Penerima</h4>
            <br>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nama</label>
            <input type="text" name="namaPenerima" class="form-control" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Nomor Telefon</label>
            <input type="number" name="phonePenerima" class="form-control" id="exampleFormControlInput1" disabled>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Penerima</label>
                <textarea name="alamatPenerima" class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
            </div>
            <div class="row">
            <div class="col-lg-10">
            <div class="form-group">
                <label for="exampleFormControlInput1">Total</label>
                <input type="number" name="total" class="form-control" id="exampleFormControlInput1" disabled >
                <input type="hidden" name="total" class="form-control" id="exampleFormControlInput1" >
            </div>
            </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="bayar" class="form-control" id="exampleFormControlSelect1">
                <option value="Diterima">Pesanan Diterima</option>
                <option value="Perjalanan">Dalam Perjalanan</option>
                <option value="Dibawa">Dibawa kurir</option>
                <option value="Warehouse">Di Warehouse</option>
                <option value="Diantar">Diantar</option>
                <option value="Diterima">Diterima</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Kurir</label>
                <select name="bayar" class="form-control" id="exampleFormControlSelect1">
                <option value="Diterima">Adam</option>
                <option value="Perjalanan">Yessy</option>
                <option value="Dibawa">Daniel</option>
                <option value="Warehouse">Ryan</option>
                <option value="Diantar">Ayub</option>
                <option value="Diterima">Bebas</option>
                </select>
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

