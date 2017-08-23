@extends('layouts.app') @section('scripts') @endsection @section('content')
<div class="container">
  @foreach($icons as $i)
  <div class="row">
      <div class="col-md-2">
        <img src="/img/profileicon/{{$i->image}}" alt="">
      </div>
  </div>
  @endforeach
</div>
@endsection