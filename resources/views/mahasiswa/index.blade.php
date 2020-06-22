@extends('layouts.master')

@section('content')
<div class="div main">
    <div class="div main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Mahasiswa</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>

                                    </div>
                                    
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_mahasiswa as $mahasiswa)
                        <tr>
                            <td><a href="/mahasiswa/{{$mahasiswa->id}}/profile">{{$mahasiswa->nama}}</a></td>
                            <td>{{$mahasiswa->program_studi}}</td>
                            <td>{{$mahasiswa->tanggal_lahir}}</td>
                            <td>{{$mahasiswa->alamat}}</td>
                            <td>
                                <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data?')">Delete</a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Data Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form action="/mahasiswa/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">  
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">  
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Program Studi</label>
                            <select name="program_studi" class="form-control" id="exampleFormControlSelect1">
                            <option>Teknologi Listrik</option>
                            <option>Teknologi Rekayasa Internet</option>
                            <option>Elektronika dan Instrumentasi</option>
                            <option>Metrologi dan Instrumentasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label><br>
                            <input name="tanggal_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                                                
                        
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                        </div>
                    </div>
@stop


