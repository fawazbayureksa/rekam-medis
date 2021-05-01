@extends('main')
@section('title','Data Pemeriksaan')
@section('breadcrumb')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
<!-- 	<li class="breadcrumb-item"></li> -->
	<li class="breadcrumb-item active" aria-current="page">Data Pemeriksaan</li>
</ol> 	
@endsection
@section('content')
	
		<div class="row">
		<div class="col-md-12">
		 @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Cek Laboratorium</h6>
                </div>
                <div class="card-body">
                	<form method="post" action="{{url('data-ceklab/simpan')}}">
                		@csrf
                		<div class="row">
                			<div class="col-md-6">
                				<div class="form-group">
		                          <label>No Rawat</label>
		                          <input type="number" name="norawat" class="form-control" min="0" autocomplete="off">
		                        </div>
		                		<div class="form-group">
		                         <label>Nama Pasien</label>
		                          <select class="form-control" name="nm_pasien">
		                            <option>-- Pilih --</option>
		                          	@foreach($pasien as $ps)
		                            <option value="{{$ps->id}}">{{$ps->nm_pasien}}</option>
		                            @endforeach
		                          </select>
		                        </div>
		                		<div class="form-group">
		                			<label>Nama Dokter</label>
		                			<select class="form-control" name="nm_dokter">
		                				<option>-- Pilih --</option>
		                				@foreach($dokter as $dr)
		                				<option value="{{$dr->id}}">{{$dr->nm_ptg}}</option>
		                				@endforeach
		                			</select>
		                		</div>
		                		<div class="form-group">
		                			<label>Nama Obat</label>
		                			<select class="form-control" name="nm_obat">
		                				<option>-- Pilih --</option>
		                				@foreach($obat as $key)
		                				<option value="{{$key->id}}">{{$key->nm_obat}}</option>
		                				@endforeach
		                			</select>
		                		</div>
		                		 <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
                			</div>
                			<div class="col-md-6">

		                        <div class="form-group">
		                          <label>Diagnosa</label>
		                          <textarea class="form-control" name="diagnosa"></textarea>
		                        </div> 
		                        <div class="form-group">
		                          <label>Berat Badan</label>
		                          <input type="number" name="berat" class="form-control" autocomplete="off">
		                        </div>
		                        <div class="form-group">
		                          <label>Tensi</label>
		                          <input type="number" name="tensi" class="form-control" autocomplete="off">
		                        </div>
		                        <div class="form-group">
		                          <label>Suhu Tubuh</label>
		                          <input type="number" name="suhu" class="form-control" autocomplete="off">
		                        </div>
		                        <div class="form-group">
		                          <label>Keterangan</label>
		                          <textarea class="form-control" name="ket"></textarea>
		                        </div>
	                      	</div>
                		</div>
                	</form>
                	<hr>
                	 <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th width="15px">No</th>
                        <th>Nama Pasien</th>
                        <th>Nama Petugas</th>
                        <th>Jenis</th>
                        <th>Hasil</th>
                        <th>Ket</th>
                        <th>Harga</th>
                        <th>No Layanan</th>
                        <th width="15%" class="text-center"><i class="fa fa-cog"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                   {{--  
                     @foreach ($ceklab as $dat)
                      
                      <tr>
                       <td>{{$loop->iteration}}</td>
                        <td>{{$dat->nm_pasien}}</td>
                        <td>{{$dat->nm_ptg}}</td>
                        <td>{{$dat->nm_ceklab}}</td>
                        <td>{{$dat->hasil_cek}}</td>
                        <td>{{$dat->ket}}</td>
                        <td>{{$dat->harga}}</td>
                        <td>{{$dat->no_layanan}}</td> --}}
                       
                      
                        <td class="text-center">
                          {{-- <a href="{{url('data-registrasi/hapus',$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a> --}}
                        </td>
                      </tr>
                      {{-- @endforeach --}}
                    </tbody>
                  </table>
                </div>
			</div>
		</div>
		
	</div>

@endsection