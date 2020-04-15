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
									<form action="/suratkeluar/{{$suratkeluar->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">No Agenda</label>
						    <input name="no_agenda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->no_agenda}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tujuan</label>
						    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tujuan}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">No Surat</label>
						    <input name="no_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->no_surat}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Isi</label>
						    <input name="isi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->isi}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Kode</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->kode}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Tangal Surat</label>
						    <input name="tgl_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tgl_surat}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Tanggal Catat</label>
						    <input name="tgl_catat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tgl_catat}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">File</label>
						    <input name="file" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->file}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Keterangan</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->keterangan}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">ID Surat</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->id_user}}">
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
		<h1>Edit Data Surat Masuk</h1>
		@if(session('berhasil'))
		<div class="alert alert-danger" role="alert">
			{{session('berhasil')}}
		</div>
		@endif
					  <div class="row">
					  	<div class="col-lg-12">
					  		<form action="/suratkeluar/{{$suratkeluar->id}}/update" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">No Agenda</label>
						    <input name="no_agenda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->no_agenda}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tujuan</label>
						    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tujuan}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">No Surat</label>
						    <input name="no_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->no_surat}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Isi</label>
						    <input name="isi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->isi}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Kode</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->kode}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Tangal Surat</label>
						    <input name="tgl_surat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tgl_surat}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Tanggal Catat</label>
						    <input name="tgl_catat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->tgl_catat}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">File</label>
						    <input name="file" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->file}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">Keterangan</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->keterangan}}">
						  </div>
						  <div class="form-group">
						    <label for="examplesInputEmail1">ID Surat</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$suratkeluar->id_user}}">
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