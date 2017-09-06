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
        <p>Açıklaması: {{$item->plaintext}}</p>
        <p>Alış Fiyatı: {{$item->gold_buy}} Altın</p>
      </div>
  </div>
  <h2>{{$item->name}} kullanan şampiyonlar</h2>
      @foreach($champions->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $c)
          <div class="col-md-3">
            <a href="/sampiyonlar/{{$c->name}}">
              <img src="/img/champion/{{$c->image}}" alt="">
              <p>{{$c->name}}</p>
              <p>{{$c->title}}</p>
            </a>
          </div>
          @endforeach
        </div>
      @endforeach
@endsection