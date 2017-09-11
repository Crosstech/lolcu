@extends('layouts.app')

@section('title')
 Haftalık Ücretsiz Şampiyon Rotasyonu
@endsection

@section('keywords')
lol,haftalık,ücretsiz,şampiyon,rotasyon
@endsection

@section('scripts') 

@endsection 

@section('content')
<div class="heading">
  <h1 style="text-align:center" >Haftalık Ücretsiz Şampiyon Rotasyonu </h1>
</div>
<div class="row">
    @foreach($free_champions as $f)
    <div class="col-md-3">
        <a href="/sampiyonlar/{{$f->name}}">
        <img src="/img/champion/{{$f->image}}" alt="{{$f->name}} oynamak bu hafta ücretsiz!">
        <span>{{$f->name}}</span>
        </a>
    </div>
    @endforeach
</div>
@endsection