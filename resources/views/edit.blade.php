@extends('layouts.admin')

@section('content')
<form>
    <h1>Edit Comic</h1>
    <form action="{{ route('admin.projects.update' ['id'=> $projects -> id]) }}" method="POST">
        @csrf

        @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-warning">Project Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->title}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-warning">Description</label>
      <textarea class="form-control " name="description" id="" cols="30" rows="10">{{$project->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
@endsection