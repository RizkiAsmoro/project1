
@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="well">

<p>Data Mahasiswa</p>

</div>
<a href="/siswa/add" class="btn btn-small btn-success">Insert Data</a>


  <table class="table table-bordered">
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Action</th>
  <th>Media</th>
  
  </tr>
  @foreach ($siswa as $siswas)
  <tr>
  <td>{{ $siswas->id}}</td>
  <td>{{ $siswas->name}}</td>
 <td><a href="/siswa/view/{{ $siswas->id }}" class="btn btn-small btn-success">View Data</a></td>
 <td><a href="/siswa/view/{{ $siswas->id }}">View</a></td>
  </tr>  
  @endforeach

</table>
</div>
</div>
</div>

@endsection