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
									<form action="/disposisi/{{$disposisi->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tujuan</label>
						    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$disposisi->tujuan}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Isi Disposisi</label>
						    <input name="isi_disposisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$disposisi->isi_disposisi}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Sifat</label>
						    <input name="sifat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$disposisi->sifat}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Batas Waktu</label>
						    <textarea name="batas_waktu" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->batas_waktu}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Catatan</label>
						    <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->catatan}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ID Surat</label>
						    <textarea name="id_surat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->id_surat}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ID User</label>
						    <textarea name="id_user" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->id_user}}</textarea>
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
		<h1>Edit Data Disposisi</h1>
		@if(session('berhasil'))
		<div class="alert alert-danger" role="alert">
			{{session('berhasil')}}
		</div>
		@endif
					  <div class="row">
					  	<div class="col-lg-12">
					  		<form action="/disposisi/{{$disposisi->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tujuan</label>
						    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$disposisi->tujuan}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Isi Disposisi</label>
						    <input name="isi_disposisi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$disposisi->isi_disposisi}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Sifat</label>
						    <input name="sifat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$disposisi->sifat}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Batas Waktu</label>
						    <textarea name="batas_waktu" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->batas_waktu}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Catatan</label>
						    <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->catatan}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ID Surat</label>
						    <textarea name="id_surat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->id_surat}}</textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ID user</label>
						    <textarea name="id_user" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$disposisi->id_user}}</textarea>
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