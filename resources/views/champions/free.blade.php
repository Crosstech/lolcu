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
    @if($f != null)
    <div class="col-md-2">
        <a href="/sampiyonlar/{{$f->seo}}" class="champion-item">
            <img src="/img/champion/{{$f->image}}" alt="{{$f->name}} oynamak bu hafta ücretsiz!" class="image">
            <p class="name">{{$f->name}}</p>
        </a>
    </div>
    @endif
    @endforeach
</div>
@endsection