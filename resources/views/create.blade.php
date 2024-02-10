@extends('layouts.admin')

@section('content')
<form>
    <h1>New Comic</h1>
    @csrf
    @include('partials.errors')
    <form action="{{ route('admin.projects.store') }}" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-warning">Project Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('title')}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-warning">Description</label>
      <textarea class="form-control " name="description" id="" cols="30" rows="10">{{old('description')}}</textarea>
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>

@endsection