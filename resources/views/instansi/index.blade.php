@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Instansi</h3>
								<div class="right">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> CREATE NEW </button>
									<!--<button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>	-->
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
										<thead> 
											<tr>
												<th>Institusi</th>
												<th>Nama</th>
												<th>Status</th>
												<th>Alamat</th>
												<th>Kepsek</th>
												<th>Nip</th>
												<th>Website</th>
												<th>Email</th>
												<th>Logo</th>
												<th>ID User</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data_instansi as $instansi)
											<tr>
												<td>{{$instansi->institusi}}</td>
												<td>{{$instansi->nama}}</td>
												<td>{{$instansi->status}}</td>
												<td>{{$instansi->alamat}}</td>
												<td>{{$instansi->kepsek}}</td>
												<td>{{$instansi->nip}}</td>
												<td>{{$instansi->website}}</td>
												<td>{{$instansi->email}}</td>
												<td>{{$instansi->logo}}</td>
												<td>{{$instansi->id_user}}</td>
												<td>
													<a href="/instansi/{{$instansi->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
													<a href="/instansi/{{$instansi->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
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
				        <form action="/instansi/create" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">institusi</label>
						    <input name="institusi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Institusi">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Status</label>
						    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kepsek</label>
						    <input name="kepsek" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kepsek">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIP</label>
						    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Website</label>
						    <input name="website" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Website">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Logo</label>
						    <input name="logo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Logo">
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