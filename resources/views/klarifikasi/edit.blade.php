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
									<form action="/klarifikasi/{{$klarifikasi->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kode</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$klarifikasi->kode}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$klarifikasi->nama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Uraian</label>
						    <textarea name="uraian" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$klarifikasi->uraian}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">ID User</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$klarifikasi->id_user}}">
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
		<h1>Edit Data Klarifikasi</h1>
		@if(session('berhasil'))
		<div class="alert alert-danger" role="alert">
			{{session('berhasil')}}
		</div>
		@endif
					  <div class="row">
					  	<div class="col-lg-12">
					  		<form action="/klarifikasi/{{$klarifikasi->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kode</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$klarifikasi->kode}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$klarifikasi->nama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Uraian</label>
						    <textarea name="uraian" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$klarifikasi->uraian}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">ID User</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$klarifikasi->id_user}}">
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