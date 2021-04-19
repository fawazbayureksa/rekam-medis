
@extends('main')

@section('title', 'Data obat')

@section('breadcrumb')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
<!-- 	<li class="breadcrumb-item"></li> -->
	<li class="breadcrumb-item active" aria-current="page">Data obat</li>
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
                  <h6 class="m-0 font-weight-bold text-primary">Data Obat</h6>
                  <h3 class="card-header py-3 d-flex flex-row  justify-content-between"><a href="{{url('data-obat/tambah')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah data</a></h3>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th width="15px">No</th>
                        <th>Nama Obat</th>
                        <th>Harga Obat</th>
                        <th width="30%" class="text-center"><i class="fa fa-cog"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                     @foreach ($obat as $data)
                      
                      <tr>
                       <td>{{$loop->iteration}}</td>
                        <td>{{$data->nm_obat}}</td>
                        <td>@currency($data->harga)</td>
                        <td class="text-center">
                          <a href="{{url('data-obat/edit',$data->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Ubah</a>
                          <a href="{{url('data-obat/hapus',$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection

