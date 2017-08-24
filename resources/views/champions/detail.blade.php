@extends('layouts.app') 

@section('title')
 {{ $champion->name }}
@endsection

@section('keywords')
lol,sampiyon,sihirdar,çar,{{$champion->name}},build,eşya,set, eşya seti,rün,dizilim,rün dizilimi,rünler
@endsection

@section('scripts') 
@endsection 

@section('content')
  <div class="row">
    <div class="col-md-2">
      <img src="/img/champion/{{$champion->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$champion->name}}</p>
      <p>{{$champion->title}}</p>
    </div>
    <div class="col-md-5">
      <p>{{$champion->description}}</p>
    </div>
  </div>
@endsection