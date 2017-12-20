@extends('layout2')

@section('content')
<div class="container">
  <div class="well">
    <a class="btn btn-success" href="/siswa/edit/{{ $mahasiswa->id }}">Edit</a>

    <form method="POST" style="display:inline" action="/siswa/delete">
      <input type="hidden" name="id_siswa" value="{{ $mahasiswa->id }}" />
      <button type="submit" class="btn btn-danger">Delete</button>
      {{ csrf_field() }}
    </form>

    <a class="btn btn-default" href="/siswa">Back to List</a>
  </div>
  <table>
    <tr>
      <td width="100px">ID Siswa</td>
      <td>: {{ $mahasiswa->id }}</td>
    </tr>
    <tr>
      <td>Nama Siswa</td>
      <td>: {{ $mahasiswa->name }}</td>
    </tr>
    <td>Media</td>
    <table class="table table-bordered">
    <tr>
      <td>: {{ $mahasiswa->media }}</td>
    </tr>
    </table>
  </table>
</div>
@endsection
