@extends('layouts.app')

@section('title')
 {{ $rune->name }}
@endsection

@section('keywords')
lol,rün,rünler,{{$rune->seo}},{{$rune->name}},ad,ap,adc,sup,mid,jung,solo
@endsection

@section('scripts') 

@endsection 

@section('content')
<div class="row">
    <div class="col-md-2">
      <img src="/img/rune/{{$rune->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$rune->name}}</p>
      <p>{{$rune->description}}</p>
    </div>
</div>
@endsection