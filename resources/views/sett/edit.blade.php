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
									<form action="/sett/{{$sett->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Surat Masuk</label>
						    <input name="surat_masuk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->surat_masuk}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Surat Keluar</label>
						    <input name="surat_keluar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->surat_keluar}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Referensi</label>
						    <input name="referensi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->referensi}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ID User</label>
						    <textarea name="id_user" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$sett->id_user}}</textarea>
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
					  		<form action="/sett/{{$sett->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Surat Masuk</label>
						    <input name="surat_masuk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->surat_masuk}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Surat Keluar</label>
						    <input name="surat_keluar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->surat_keluar}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Referensi</label>
						    <input name="referensi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->referensi}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">ID User</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sett->id_user}}">
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