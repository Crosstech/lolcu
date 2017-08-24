@extends('layouts.app')

@section('title')
 Kabiliyetler
@endsection

@section('keywords')
lol,kabiliyetler,ad,ap,tank,ormancı,jungle,mid,adc,sup,solo
@endsection

@section('scripts') 

@endsection 

@section('content')
@foreach($masteries as $m)
<div class="row">
  <a href="/kabiliyetler/{{$m->seo}}">
    <div class="col-md-2">
      <img src="/img/mastery/{{$m->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$m->name}}</p>
    </div>
  </a>
</div>
@endforeach
@endsection