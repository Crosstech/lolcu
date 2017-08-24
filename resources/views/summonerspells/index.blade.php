@extends('layouts.app')

@section('title')
 Sihirdar Büyüleri
@endsection

@section('keywords')
lol,adc,sup,jung,mid,solo,tank,büyü,yetenek,sihirdar,büyüleri
@endsection

@section('scripts') 

@endsection 

@section('content')
  @foreach($spells as $s)
  <div class="row">
    <a href="/sihirdar-buyuleri/{{$s->seo}}">
      <div class="col-md-2">
        <img src="/img/spell/{{$s->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$s->name}}</p>
      </div>
    </a>
  </div>
  @endforeach
@endsection