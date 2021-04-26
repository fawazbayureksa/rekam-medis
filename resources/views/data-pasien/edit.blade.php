@extends('main')

@section('title','Ubah Data Pasien')

@section('breadcrumb')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
	<li class="breadcrumb-item">Data Pasien</li>
	<li class="breadcrumb-item active" aria-current="page">Ubah Pasien</li>

</ol>

@endsection

@section('content')

<div class="row justify-content-center"> 
	
	<div class="col-md-8">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Ubah Pasien</h6> 
                  <h6 class="m-0 font-weight-bold text-primary"><a href="{{url
                    ('data-pasien')}}" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a></h6>
                </div>
                <div class="card-body">
                  <form action="{{url('data-pasien',$pasien->id)}}" method="post">
                  	@csrf
                    @method('patch')

                    <div class="form-group">
                      <label for="">No Klinik</label>
                      <input type="number" class="form-control" value="{{$pasien->no_klinik}}" name="noklinik" 
                        placeholder="Masukkan No Klinik
                        ">
                    </div>
                      <div class="form-group">
                      <label for="">Nama Pasien</label>
                      <input type="text" class="form-control" value="{{$pasien->nm_pasien}}" name="nama" 
                        placeholder="Masukkan Nama Pasien ...">
                    </div>
                    <div class="form-group">
                      <label for="">Alamat Pasien</label>
                      <textarea class="form-control" name="alm_pasien">{{$pasien->alm_pasien}}</textarea>
                    </div>
                     <div class="form-group">
                      <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="gender">
                        <option>-- Pilih --</option>
                        <option value="Pria" {{$pasien->jk_pasien == 'Pria'? 'selected':''}}>Pria</option>
                        <option value="Wanita" {{$pasien->jk_pasien == 'Wanita'? 'selected':''}}>Wanita</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" class="form-control" value="{{$pasien->tgl_lahir_pasien}}" name="tgl_lahir" 
                        >
                    </div>
                    <div class="form-group">
                      <label for="">Nomor Telepon</label>
                      <input type="tel" maxlength="13" class="form-control" value="{{$pasien->no_telp_pasien}}" name="no_telp" 
                        >
                    </div>
                    <div class="form-group">
                      <label>Umur</label>
                      <input type="num" value="{{$pasien->umur}}" name="umur" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                  </form>
                </div>
              </div>
             </div>

@endsection
