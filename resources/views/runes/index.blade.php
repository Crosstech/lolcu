@extends('layouts.app') 
@section('keywords')
<meta name="keywords" content="lol,ad,ap,adc,sup,jung,mid,solo,tank,rün,rünler"/>
<title>lolcü | rünler</title>
@endsection
@section('scripts') @endsection @section('content')
<div class="container">
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
</div>
@endsection