@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Mahasiswa</h3>
            </div>
            
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
             {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Depan</label>
                  <input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Belakang</label>
                  <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                    <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <input name="agama" type="text" class="form-control" placeholder="Agama" value="{{ $siswa->agama }}">
                </div>

                <div class="form-group">
                  <label>Textarea</label>
                  <textarea name="alamat" class="form-control" rows="3">{{ $siswa->alamat }}</textarea>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
          </div>
          
        </div>
    </div>
</section>

        
@endsection

