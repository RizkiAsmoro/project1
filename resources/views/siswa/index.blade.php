
@extends('layout2')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="well">

</div>

  <table class="table table-bordered">
  <tr>
  <th>Id</th>
  <th>Name</th>
  </tr>
  @foreach ($siswa as $siswas)
  <tr>
  <td>{{ $siswas->id}}</td>
  <td>{{ $siswas->name}}</td>
  </tr>  
  @endforeach

</table>
</div>
</div>
</div>

@endsection