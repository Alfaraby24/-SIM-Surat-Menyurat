@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Surat Keluar</h3>
								<div class="right">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> CREATE NEW </button>
									<!--<button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>	-->
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
										<thead> 
											<tr>
												<th>No Agenda</th>
												<th>Tujuan</th>
												<th>No Surat</th>
												<th>Isi</th>
												<th>Kode</th>
												<th>Tanggal surat</th>
												<th>Tanggal catat</th>
												<th>File</th>
												<th>Keterangan</th>
												<th>ID User</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data_suratkeluar as $suratkeluar)
											<tr>
												<td>{{$suratkeluar->no_agenda}}</td>
												<td>{{$suratkeluar->tujuan}}</td>
												<td>{{$suratkeluar->no_surat}}</td>
												<td>{{$suratkeluar->isi}}</td>
												<td>{{$suratkeluar->kode}}</td>
												<td>{{$suratkeluar->tgl_surat}}</td>
												<td>{{$suratkeluar->tgl_catat}}</td>
												<td>{{$suratkeluar->file}}</td>
												<td>{{$suratkeluar->keterangan}}</td>
												<td>{{$suratkeluar->id_user}}</td>
												<td>
													<a href="/suratkeluar/{{$suratkeluar->id}}/edit" class="btn 	btn-primary btn-sm">Edit</a>
													<a href="/suratkeluar/{{$suratkeluar->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="/suratkeluar/create" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">No Agenda</label>
						    <input name="no_agenda" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Agenda">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tujuan</label>
						    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">No Surat</label>
						    <input name="no_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Surat">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Isi</label>
						    <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kode</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tanggal Surat</label>
						    <input name="tgl_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Surat">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tanggal Catat</label>
						    <input name="tgl_catat" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Diterima">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">File</label>
						    <input name="file" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="File">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Keterangan</label>
						    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">ID User</label>
						    <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID User">
						  </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Submit</button>
				      </form>
				  	</div>
				    </div>
				  </div>
				</div>
			</div> 
@stop