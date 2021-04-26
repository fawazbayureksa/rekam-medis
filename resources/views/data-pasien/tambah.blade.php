@extends('main')

@section('title','Tambah Data Pasien')

@section('breadcrumb')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
	<li class="breadcrumb-item">Data Pasien</li>
	<li class="breadcrumb-item active" aria-current="page">Tambah Pasien</li>

</ol>

@endsection

@section('content')

<div class="row justify-content-center"> 
	
	<div class="col-md-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pasien</h6> 
                  <h6 class="m-0 font-weight-bold text-primary"><a href="{{url
                    ('data-pasien')}}" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a></h6>
                </div>
                <div class="card-body">
                  <form action="{{url('data-pasien')}}" method="post">
                  	@csrf
                    <div class="form-group">
                      <label for="">No Klinik</label>
                      <input type="number" class="form-control" value="" name="noklinik" 
                        placeholder="Masukkan No Klinik
                        ">
                    </div>
                    <div class="form-group">
                      <label for="">Nama Pasien</label>
                      <input type="text" class="form-control" value="" name="nama" 
                        placeholder="Masukkan Nama Pasien ...">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat Pasien</label>
                      <textarea class="form-control" name="alm_pasien"></textarea>
                    </div>
                     <div class="form-group">
                      <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="gender">
                        <option>-- Pilih --</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" class="form-control" value="" name="tgl_lahir" 
                        >
                    </div>
                    <div class="form-group">
                      <label for="">Nomor Telepon</label>
                      <input type="tel" maxlength="13" class="form-control" value="" name="no_telp" 
                        >
                    </div>
                    <div class="form-group">
                      <label>Umur</label>
                      <input type="num" name="umur" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                  </form>
                </div>
              </div>
             </div>

@endsection
