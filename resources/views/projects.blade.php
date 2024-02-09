@extends('layouts.admin')

@section('content')
<ul class="text-warning list-group mt-5 ml-5 ">
   @foreach ($projects as $project)
       <li class="list-group-item-dark">{{ $project->title }}</li>
       <li class="list-group-item-dark"> {{ $project->content }}</li>    
       <li class="list-group-item-dark"> {{ $project->slug }}</li> 
       <hr>   
               
   @endforeach
</ul>

@endsection