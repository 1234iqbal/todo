@extends('layouts.index')
@section('main')
<form action="/todo" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
 @foreach($todo as $key => $todos)
  <tbody>
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{ $todos->nama }}</td>
      <td><a href="/{{$todos->id}}"><button type="button" class="btn btn-outline-secondary">Edit</button></a></td>
      <td>

      <form action="/{{$todos->id}}" method="post">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-outline-secondary" name="submit">delete</button>
        </form>

      </td>
    </tr>
  </tbody>
@endforeach
</table>
@endsection