@extends('layouts.app')
 
@section('title')
 Rünler
@endsection

@section('keywords')
lol,ad,ap,adc,sup,jung,mid,solo,tank,rün,rünler
@endsection

@section('scripts') 

@endsection 

@section('content')
  @foreach($runes as $r)
  <div class="row">
    <a href="/runler/{{$r->seo}}">
      <div class="col-md-2">
        <img src="/img/rune/{{$r->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$r->name}}</p>
      </div>
    </a>
  </div>
  @endforeach
@endsection