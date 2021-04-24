@extends('main')

@section('title','Ubah Data Petugas')

@section('breadcrumb')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="./">Home</a></li>
	<li class="breadcrumb-item">Data Petugas</li>
	<li class="breadcrumb-item active" aria-current="page">Tambah Petugas</li>

</ol>
@endsection

@section('content')


<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card mb-2">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Petugas</h6> 
                  <h6 class="m-0 font-weight-bold text-primary"><a href="{{url
                    ('data-petugas')}}" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a></h6>
            </div>
                <div class="card-body">
					<form method="post" action="{{url('data-petugas',$petugas->id)}}">
						@csrf
						@method('patch')
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" name="nip" value="{{$petugas->nip}}" class="form-control" placeholder="Masukkan Nip ..." autocomplete="off" readonly>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" name="nama" value="{{$petugas->nm_ptg}}" class="form-control" placeholder="Masukkan Nama ..." autocomplete="off" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<textarea name="alm_ptg" style="height: 70px" class="form-control" placeholder="Masukkan Alamat ...">{{$petugas->alm_ptg}}</textarea>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label style="font-size:14px" class="mb-0 mt-0">Tanggal lahir</label>
									<input type="date" name="tgl_lahir" value="{{$petugas->tgl_lahir}}"
									class="form-control" autocomplete="off">

								</div >
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								 <div class="form-group">
								 	<label style="font-weight: bold">Jenis Kelamin</label>
								 	<div class="row">
								 	<div class="col-md-4">
					                      <input type="radio" name="jk" id="pria" value="Pria" {{$petugas->jk_ptg == 'Pria'? 'checked':''}}>
					                      <label for="pria">Pria</label>
								 		</div>
				                      <div class="col-md-4">
					                   	   <input type="radio" name="jk" id="wanita" value="wanita" {{$petugas->jk_ptg == 'wanita'? 'checked':''}}>
					                       <label for="wanita">Wanita</label>
				                   	   </div>
								 	</div>
		                    	</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Jabatan</label>
				                      <select class="form-control" name="jabatan">
				                        <option >-- Pilih --</option>
				                        <option value="Dokter" {{$petugas->jabatan == 'Dokter'? 'selected':''}}>Dokter</option>
				                        <option value="Perawat" {{$petugas->jabatan == 'Perawat'? 'selected':''}}>Perawat</option>
				                        <option value="Petugas" {{$petugas->jabatan == 'Petugas'? 'selected':''}}>Petugas</option>
				                      </select>
								</div>
							</div>
						</div>
					<div class="row justify-content-start">
							<div class="col-md-5">
						<div class="form-group">
							<input type="number" name="no_praktek" value="{{$petugas->no_ijin_praktek}}" placeholder="Masukkan No Praktek" class="form-control" autocomplete="off">
						</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" name="no_telp" value="{{$petugas->no_telp_ptg}}"  maxlength="13" class="form-control" placeholder="Masukkan No Telepon ..." autocomplete="off">
								</div>
							</div>
					</div>
					<div class="row justify-content-center">
					<div class="col-md-5">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

@endsection