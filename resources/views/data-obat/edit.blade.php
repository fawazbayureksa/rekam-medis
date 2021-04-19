@extends('main')

@section('title','Ubah Data Obat')

@section('breadcrumb')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
	<li class="breadcrumb-item">Data obat</li>
	<li class="breadcrumb-item active" aria-current="page">Ubah Obat</li>

</ol>

@endsection

@section('content')

<div class="row justify-content-center"> 
	
	<div class="col-md-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Ubah Obat</h6> 
                  <h6 class="m-0 font-weight-bold text-primary"><a href="{{url
                    ('data-obat')}}" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a></h6>
                </div>
                <div class="card-body">
                  <form action="{{url('data-obat',$dataobat->id)}}" method="post">
                  	@csrf
                    @method('patch')
                    <div class="form-group">
                      <label for="">Nama Obat</label>
                      <input type="text" class="form-control" value="{{$dataobat->nm_obat}}" name="nm_obat" 
                        placeholder="Masukkan nama obat">
                    </div>
                    <div class="form-group">
                      <label for="">Harga Obat</label>
                      <input type="number" class="form-control" value="{{$dataobat->harga}}" name="harga" 
                        placeholder="Masukkan harga obat">
                    </div>
              
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                  </form>
                </div>
              </div>
             </div>

@endsection
