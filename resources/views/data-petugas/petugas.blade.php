
@extends('main')

@section('title', 'Data petugas')

@section('breadcrumb')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
<!-- 	<li class="breadcrumb-item"></li> -->
	<li class="breadcrumb-item active" aria-current="page">Data petugas</li>
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
                  <h6 class="m-0 font-weight-bold text-primary">Data petugas</h6>
                  <h3 class="card-header py-3 d-flex flex-row  justify-content-between"><a href="{{url('data-petugas/tambah')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah data</a></h3>
                </div>
                <div class="table-responsive p-2">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th width="15px">No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Alamat petugas</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>No Telpon</th>
                        <th>No Ijin Praktek</th>
                        <th>Jabatan</th>
                        <th width="15%" class="text-center"><i class="fa fa-cog"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                     @foreach ($petugas as $data)
                      
                      <tr>
                       <td>{{$loop->iteration}}</td>
                       <td>{{$data->nip}}</td>
                       <td>{{$data->nm_ptg}}</td>
                       <td>{{$data->alm_ptg}}</td>
                       <td>{{$data->jk_ptg}}</td>
                       <td>{{$data->tgl_lahir}}</td>
                       <td>{{$data->no_telp_ptg}}</td>
                       <td>{{$data->no_ijin_praktek}}</td>
                       <td>{{$data->jabatan}}</td>
                      
                        <td class="text-center">
                          <a href="{{url('data-petugas/edit',$data->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                          <a href="{{url('data-petugas/hapus',$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection

