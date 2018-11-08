@extends('layouts.index')
@section('main')
<form action="/{{$todo->id}}" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" value="{{ $todo->nama }}" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <input name="_method" type="hidden" value="PUT">
  {{csrf_field()}}
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
@endsection