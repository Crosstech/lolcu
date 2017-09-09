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
<div class="heading">
  <h2 style="text-align:center" >KABİLİYETLER </h2>
</div
@foreach($masteries->chunk(4) as $chunk)
<div class="row">
@foreach($chunk as $m)
    <div class="col-md-3">
      <a href="/kabiliyetler/{{$m->seo}}">
        <img src="/img/mastery/{{$m->image}}" alt="">
        <p>{{$m->name}}</p>
      </a>
    </div>
  @endforeach
</div>
@endforeach
@endsection