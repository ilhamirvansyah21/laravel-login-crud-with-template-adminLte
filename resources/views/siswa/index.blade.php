@extends('layouts.master')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
        @if(session('sukses'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('sukses') }}
        </div>
        @endif
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mahasiswa</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah data mahasiswa
                </button>
              </div>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$siswa->nama_depan}}</td>
                        <td>{{$siswa->nama_belakang}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>
                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus data {{ $siswa->nama_depan }}')">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>  
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/siswa/create" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                     
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

   




