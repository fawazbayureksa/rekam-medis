@extends('main')

@section('title','Ubah Data tindakan')

@section('breadcrumb')

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="./">Home</a></li>
  <li class="breadcrumb-item">Data tindakan</li>
  <li class="breadcrumb-item active" aria-current="page">Ubah tindakan</li>

</ol>

@endsection

@section('content')

<div class="row justify-content-center"> 
  
  <div class="col-md-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Ubah tindakan</h6> 
                  <h6 class="m-0 font-weight-bold text-primary"><a href="{{url
                    ('data-tindakan')}}" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a></h6>
                </div>
                <div class="card-body">
                  <form action="{{url('data-tindakan',$datatindakan->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                      <label for="">Nama tindakan</label>
                      <input type="text" class="form-control" value="{{$datatindakan->nm_tnd}}" name="nm_tindakan" 
                        placeholder="Masukkan nama tindakan">
                    </div>
                    <div class="form-group">
                      <label for="">Harga tindakan</label>
                      <input type="number" class="form-control" value="{{$datatindakan->harga}}" name="harga" 
                        placeholder="Masukkan harga tindakan">
                    </div>
              
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                  </form>
                </div>
              </div>
             </div>

@endsection
