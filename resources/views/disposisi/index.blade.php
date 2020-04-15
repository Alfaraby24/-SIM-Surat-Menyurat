@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Disposisi</h3>
								<div class="right">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> CREATE NEW </button>
									<!--<button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>	-->
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
										<thead> 
											<tr>
												<th>Tujuan</th>
												<th>Isi Disposisi</th>
												<th>Sifat</th>
												<th>Batas Waktu</th>
												<th>Catatan</th>
												<th>ID Surat</th>
												<th>ID User</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data_disposisi as $disposisi)
											<tr>
												<td>{{$disposisi->tujuan}}</td>
												<td>{{$disposisi->isi_disposisi}}</td>
												<td>{{$disposisi->sifat}}</td>
												<td>{{$disposisi->batas_waktu}}</td>
												<td>{{$disposisi->catatan}}</td>
												<td>{{$disposisi->id_surat}}</td>
												<td>{{$disposisi->id_user}}</td>
												<td>
													<a href="/disposisi/{{$disposisi->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
													<a href="/disposisi/{{$disposisi->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
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
				        <form action="/disposisi/create" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Tujuan</label>
						    <input name="tujuan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tujuan">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Isi Disposisi</label>
						    <textarea name="isi_disposisi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi Disposisi"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Sifat</label>
						    <input name="sifat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sifat">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Batas Waktu</label>
						    <input name="batas_waktu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Batas Waktu">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Catatan</label>
						    <textarea name="catatan" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Catatan"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">ID Surat</label>
						    <input name="id_surat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Surat">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">ID User</label>
						    <textarea name="id_user" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ID User"></textarea>
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