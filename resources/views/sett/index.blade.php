@extends('layouts.master')
@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Sett</h3>
								<div class="right">
									<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> CREATE NEW </button>
									<!--<button type="button" class="btn"  data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>	-->
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
										<thead> 
											<tr>
												<th>Surat Masuk</th>
												<th>Surat Keluar</th>
												<th>Referensi</th>
												<th>ID User</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($data_sett as $sett)
											<tr>
												<td>{{$sett->surat_masuk}}</td>
												<td>{{$sett->surat_keluar}}</td>
												<td>{{$sett->referensi}}</td>
												<td>{{$sett->id_user}}</td>
												<td>
													<a href="/sett/{{$sett->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
													<a href="/sett/{{$sett->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
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
				        <form action="/sett/create" method="POST">
						  {{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Surat Masuk</label>
						    <input name="surat_masuk" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surat Masuk">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Surat Keluar</label>
						    <input name="surat_keluar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Surat Keluar">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Referensi</label>
						    <input name="referensi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Referensi">
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