@extends('layouts.admin')

@section('content')
@include('partials.errors')
<form>
    <h1>New Comic</h1>
    @csrf
    
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label text-warning">Project Name</label>
      <input type="text" class="form-control" id="title" aria-describedby="title" value="{{old('title')}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label text-warning">Description</label>
      <textarea class="form-control " name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
    </div>
    <div class="mb-3">
      <label for="post_image" class="form-label text-warning">Add an Image to your Project</label>
      <input class="form-control" type="file" id="post_image" name="post_image">
  </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>

@endsection