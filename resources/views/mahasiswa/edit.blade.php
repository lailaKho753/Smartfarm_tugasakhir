@extends('layouts.master')

@section('content')
<div class="div main">
    <div class="div main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama mahasiswa" value={{$mahasiswa->nama}}>  
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Program Studi</label>
                            <select name="program_studi" class="form-control" id="exampleFormControlSelect1">
                            <option @if($mahasiswa->program_studi == "Teknologi Listrik") selected @endif>Teknologi Listrik</option>
                            <option @if($mahasiswa->program_studi == "Teknologi Rekayasa Internet") selected @endif>Teknologi Rekayasa Internet</option>
                            <option @if($mahasiswa->program_studi == "Elektronika dan Instrumentasi") selected @endif>Elektronika dan Instrumentasi</option>
                            <option @if($mahasiswa->program_studi == "Metrologi dan Instrumentasi") selected @endif>Metrologi dan Instrumentasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label><br>
                            <input name="tanggal_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>


                        <button type="submit" class="btn btn-warning">Update</button>
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
      <h1>Edit Data Mahasiswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
            <div class="row">
            <div class="col lg-12">
            <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama mahasiswa" value={{$mahasiswa->nama}}>  
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Program Studi</label>
                            <select name="program_studi" class="form-control" id="exampleFormControlSelect1">
                            <option @if($mahasiswa->program_studi == "Teknologi Listrik") selected @endif>Teknologi Listrik</option>
                            <option @if($mahasiswa->program_studi == "Teknologi Rekayasa Internet") selected @endif>Teknologi Rekayasa Internet</option>
                            <option @if($mahasiswa->program_studi == "Elektronika dan Instrumentasi") selected @endif>Elektronika dan Instrumentasi</option>
                            <option @if($mahasiswa->program_studi == "Metrologi dan Instrumentasi") selected @endif>Metrologi dan Instrumentasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label><br>
                            <input name="tanggal_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mahasiswa->alamat}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                        </div>
            </div>
@endsection
    
