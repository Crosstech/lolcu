@extends('layouts.app')
@section('keywords')
<meta name="keywords" content="lol,rün,rünler,{{$rune->seo}},{{$rune->name}},ad,ap,adc,sup,mid,jung,solo"/>
<title>lolcü | {{$rune->name}}</title>
@endsection
 @section('scripts') @endsection @section('content')
<div class="container">
  <div class="row">
      <div class="col-md-2">
        <img src="/img/rune/{{$rune->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$rune->name}}</p>
        <p>{{$rune->description}}</p>
      </div>
  </div>
</div>
@endsection