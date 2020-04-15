@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Klarifikasi</h3>
								<div class="right">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> CREATE NEW </button>
									<!--<button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>	-->
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
										<thead> 
											<tr>
												<th>Kode</th>
												<th>Nama</th>
												<th>Uraian</th>
												<th>ID User</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data_klarifikasi as $klarifikasi)
											<tr>
												<td>{{$klarifikasi->kode}}</td>
												<td>{{$klarifikasi->nama}}</td>
												<td>{{$klarifikasi->uraian}}</td>
												<td>{{$klarifikasi->id_user}}</td>
												<td>
													<a href="/klarifikasi/{{$klarifikasi->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
													<a href="/klarifikasi/{{$klarifikasi->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
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
				        <form action="/klarifikasi/create" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kode</label>
						    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Uraian</label>
						    <textarea name="uraian" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Uraian"></textarea>
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