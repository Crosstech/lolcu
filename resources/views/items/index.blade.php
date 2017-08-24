@extends('layouts.app')

@section('title')
 Eşyalar
@endsection

@section('keywords')
lol,esyalar,esya,set,esya seti
@endsection

@section('scripts') 

@endsection 

@section('content')
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
@endsection