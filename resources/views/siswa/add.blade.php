@extends('layout2')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">

      <h1>Add Mahasiswa</h1>
      @if($success)
        <div class="alert alert-success" role="alert">Data succesfully saved.</div>
      @endif
      <form class="form" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="id">Id Siswa</label>
          <input type="text" class="form-control" id="id_siswa" name="id_siswa" placeholder="Id Siswa">
        </div>
        <div class="form-group">
          <label for="name">Nama Siswa</label>
          <input type="text" class="form-control" id="name_siswa" name="name_siswa" placeholder="Nama Siswa">
        </div>
        
        <div class="form-group">
          <label for="name">Media</label>
          <input type="file" class="form-control" id="media_siswa" name="media_siswa" placeholder="Media Siswa">
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
