@extends('main')

@section('title','Tambah Data Obat')

@section('breadcrumb')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
	<li class="breadcrumb-item">Data obat</li>
	<li class="breadcrumb-item active" aria-current="page">Tambah Obat</li>

</ol>

@endsection

@section('content')

<div class="row justify-content-center"> 
	
	<div class="col-md-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Obat</h6> 
                  <h6 class="m-0 font-weight-bold text-primary"><a href="{{url
                    ('data-obat')}}" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a></h6>
                </div>
                <div class="card-body">
                  <form action="{{url('data-obat')}}" method="post">
                  	@csrf
                    <div class="form-group">
                      <label for="">Nama Obat</label>
                      <input type="text" class="form-control" value="" name="nm_obat" 
                        placeholder="Masukkan nama obat">
                    </div>
                    <div class="form-group">
                      <label for="">Harga Obat</label>
                      <input type="number" class="form-control" value="" name="harga" 
                        placeholder="Masukkan harga obat">
                    </div>
              
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                  </form>
                </div>
              </div>
             </div>

@endsection
