@extends('layouts.app')

@section('title')
 Şampiyonlar
@endsection

@section('keywords')
lol,şampiyonlar,şampiyon,kaç k
@endsection

@section('scripts') 

@endsection 

@section('content')

<div class="container">
  @foreach($champions as $c)
  <div class="row">
    <a href="/sampiyonlar/{{$c->name}}">
      <div class="col-md-2">
        <img src="/img/champion/{{$c->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$c->name}}</p>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection