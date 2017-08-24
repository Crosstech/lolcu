@extends('layouts.app')

@section('title')
 {{ $item->name }}
@endsection
 
@section('keywords')
lol,esya,{{$item->seo}},{{$item->name}},ad,ap,yetenek,atak,saldırı,gücü,hızı
@endsection

@section('scripts') 

@endsection 

@section('content')
  <div class="row">
      <div class="col-md-2">
        <img src="/img/item/{{$item->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$item->name}}</p>
        <p>{{$item->plaintext}}</p>
      </div>
  </div>
@endsection