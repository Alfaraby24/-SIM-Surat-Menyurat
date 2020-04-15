@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data</h3>
								</div>
								<div class="panel-body">
									<form action="/instansi/{{$instansi->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Institusi</label>
						    <input name="Institusi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->institusi}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$institusi->nama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Status</label>
						    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->status}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$instansi->alamat}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kepsek</label>
						    <input name="kepsek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->kepsek}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIP</label>
						    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->nip}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Website</label>
						    <input name="website" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->website}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->email}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Logo</label>
						    <input name="logo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->logo}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">ID User</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->id_user}}">
						  </div>
				      <div class="modal-footer">
						<button type="submit" class="btn btn-success">Update</button>
					  </div>
				      </form>						
				      </div>
				      </form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('content1')
		<h1>Edit Data Sett</h1>
		@if(session('berhasil'))
		<div class="alert alert-danger" role="alert">
			{{session('berhasil')}}
		</div>
		@endif
					  <div class="row">
					  	<div class="col-lg-12">
					  		<form action="/instansi/{{$instansi->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Institusi</label>
						    <input name="Institusi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->institusi}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->nama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Status</label>
						    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->status}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$instansi->alamat}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kepsek</label>
						    <input name="kepsek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->kepsek}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIP</label>
						    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->nip}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Website</label>
						    <input name="website" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->website}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->email}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Logo</label>
						    <input name="logo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->logo}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">ID User</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$instansi->id_user}}">
						  </div>
				      <div class="modal-footer">
						<button type="submit" class="btn btn-success">Update</button>
					  </div>
				      </form>						
				      </div>
				      </form>
					  	</div>
				  	  </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>

@endsection