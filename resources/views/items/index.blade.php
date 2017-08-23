@extends('layouts.app')
@section('keywords')
<meta name="keywords" content="lol,esyalar,esya,set,esya seti,"/>
@endsection
@section('scripts') @endsection @section('content')
<div class="container">
  @foreach($items as $i)
  <div class="row">
    <a href="/esyalar/{{$i->seo}}">
      <div class="col-md-2">
        <img src="/img/item/{{$i->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$i->name}}</p>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection