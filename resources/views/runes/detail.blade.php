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
      <p>Açıklama:{{$rune->description}}</p>
    </div>
</div>
<h2>{{$rune->name}} kullanan şampiyonlar</h2>
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