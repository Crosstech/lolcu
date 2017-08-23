@extends('layouts.app') 
@section('keywords')
<meta name="keywords" content="lol,sampiyon,sihirdar,çar,{{$champion->name}},build,eşya,set, eşya seti,rün,dizilim,rün dizilimi,rünler"/>
<title>lolcü | {{$champion->name}}</title>
@endsection
@section('scripts') @endsection @section('content')
<div class="container">
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
</div>
@endsection