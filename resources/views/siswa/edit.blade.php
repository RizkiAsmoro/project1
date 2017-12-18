@extends('layout2')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">

      <h1>Edit Data SIswa</h1>
      @if($success)
        <div class="alert alert-success" role="alert">Data succesfully saved.</div>
      @endif
      <form class="form" method="POST">
        <div class="form-group">
          <label for="id_siswa">ID Siswa</label>
          <input type="text" class="form-control" id="id_siswa" name="id_siswa" placeholder="ID Siswa" value="{{ $siswa->id }}">
        </div>
        <div class="form-group">
          <label for="nama_siswa">Nama Siswa</label>
          <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Siswa" value="{{ $siswa->name }}">
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-small">Submit</button>
          <a class="btn btn-default" href="/siswa">Back to List</a>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
