
@extends('main')

@section('title', 'Data Pasien')

@section('breadcrumb')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
<!-- 	<li class="breadcrumb-item"></li> -->
	<li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
</ol>
@endsection

@section('content')
<div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
        
      </div>
    @endif
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
                  <h3 class="card-header py-3 d-flex flex-row  justify-content-between"><a href="{{url('data-pasien/tambah')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah data</a></h3>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th width="15px">No</th>
                        <th>No klinik</th>
                        <th>Alamat Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>No Telpon</th>
                        <th>Umur</th>
                        <th width="15%" class="text-center"><i class="fa fa-cog"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                     @foreach ($pasien as $data)
                      
                      <tr>
                       <td>{{$loop->iteration}}</td>
                        <td>{{$data->no_klinik}}</td>
                        <td>{{$data->alm_pasien}}</td>
                        <td>{{$data->jk_pasien}}</td>
                        <td>{{$data->tgl_lahir_pasien}}</td>
                        <td>{{$data->no_telp_pasien}}</td>
                        <td>{{$data->umur}}</td>
                      
                        <td class="text-center">
                          <a href="{{url('data-pasien/edit',$data->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                          <a href="{{url('data-pasien/hapus',$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection

