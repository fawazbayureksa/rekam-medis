@extends('main')

@section('title','Data Petugas')

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
					<form method="post" action="{{url('data-petugas')}}">
						@csrf
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" name="nip" class="form-control" placeholder="Masukkan Nip ..." autocomplete="off">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" name="nama"  class="form-control" placeholder="Masukkan Nama ..." autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<textarea name="alm_ptg" style="height: 70px" class="form-control" placeholder="Masukkan Alamat ..."></textarea>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label style="font-size:14px" class="mb-0 mt-0">Tanggal lahir</label>
									<input type="date" name="tgl_lahir" placeholder="Tanggal lahir" class="form-control" autocomplete="off">

								</div >
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								 <div class="form-group">
								 	<label style="font-weight: bold">Jenis Kelamin</label>
								 	<div class="row">
								 	<div class="col-md-4">
					                      <input type="radio" name="jk" id="pria" value="Pria" >
					                      <label for="pria">Pria</label>
								 		</div>
				                      <div class="col-md-4">
					                   	   <input type="radio" name="jk" id="wanita" value="wanita">
					                       <label for="wanita">Wanita</label>
				                   	   </div>
								 	</div>
		                    	</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Jabatan</label>
				                      <select class="form-control" name="jabatan">
				                        <option>-- Pilih --</option>
				                        <option value="Dokter">Dokter</option>
				                        <option value="Perawat">Perawat</option>
				                        <option value="Petugas">Petugas</option>
				                      </select>
								</div>
							</div>
						</div>
					<div class="row justify-content-start">
							<div class="col-md-5">
						<div class="form-group">
							<input type="number" name="no_praktek" placeholder="Masukkan No Praktek" class="form-control" autocomplete="off">
						</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<input type="text" name="no_telp" maxlength="13" class="form-control" placeholder="Masukkan No Telepon ..." autocomplete="off">
								</div>
							</div>
					</div>
					<div class="row justify-content-start">
							<div class="col-md-5">
						<div class="form-group">
							<input type="password" name="pass" placeholder="Masukkan password" class="form-control" autocomplete="off">
						</div>
					</div>
					<div class="col-md-5">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>

@endsection