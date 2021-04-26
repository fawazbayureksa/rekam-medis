@extends('main')

@section('title','Registrasi')

@section('breadcrumb')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
<!-- 	<li class="breadcrumb-item"></li> -->
	<li class="breadcrumb-item active" aria-current="page">Data Registrasi</li>
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
                  <h6 class="m-0 font-weight-bold text-primary">Data Registrasi Periksa</h6>
                </div>
                <div class="card-body">
                	<form method="post" action="{{url('data-registrasi/simpan')}}">
                		@csrf
                		<div class="row">
                			<div class="col-md-6">
		                		<div class="form-group">
		                			<label>No Registrasi</label>
		                			<input type="text" name="no_regis" class="form-control">
		                		</div>
                			</div>
                			<div class="col-md-6">
		                		<div class="form-group">
		                			<label>Nama Pasien</label>
		                			<select class="form-control" name="nm_pasien">
		                				<option>-- Pilih --</option>
		                				@foreach ($pasien as $data)
		                				<option value="{{$data->nm_pasien}}">{{$data->nm_pasien}}</option>
		                				@endforeach
		                			</select>
		                		</div>
                			</div>
                			<div class="col-md-6">
                				<div class="form-group">
                					<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
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
                        <th>No Registrasi</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal Registrasi</th>
                        {{-- <th>Jam Registrasi</th> --}}
                        <th width="15%" class="text-center"><i class="fa fa-cog"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                    
                     @foreach ($regis as $data)
                      
                      <tr>
                       <td>{{$loop->iteration}}</td>
                        <td>{{$data->no_regis}}</td>
                        <td>{{$data->nm_pasien}}</td>
                        <td>{{$data->waktu}}</td>
                       
                      
                        <td class="text-center">
                          <a href="{{url('data-registrasi/hapus',$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
			</div>
		</div>
		
	</div>
	
@endsection