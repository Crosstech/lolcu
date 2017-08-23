@extends('layouts.app') 
@section('keywords')
<meta name="keywords" content="lol,esya,{{$item->seo}},{{$item->name}},ad,ap,yetenek,atak,saldırı,gücü,hızı"/>
<title>lolcü | {{$item->name}}</title>
@endsection
@section('scripts') @endsection @section('content')
<div class="container">
  <div class="row">
      <div class="col-md-2">
        <img src="/img/item/{{$item->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$item->name}}</p>
        <p>{{$item->plaintext}}</p>
      </div>
  </div>
</div>
@endsection