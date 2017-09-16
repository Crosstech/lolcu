@extends('layouts.app') 

@section('title')
 {{ $type }} Şampiyonlar
@endsection

@section('keywords')
lol,sampiyon,sihirdar,çar,{{$type}} şampiyonlar,{{$type}}
@endsection

@section('scripts')

@endsection

@section('content')
<section id="{{$type}}-champions">
  <div class="title">
    <h1>{{ $type }} Şampiyonlar</h1>
  </div>
  <div class="body">
  @foreach($champions->chunk(6) as $chunk)
    <div class="row">
      @foreach($chunk as $c)
      <div class="col-md-2">
        <a href="/sampiyonlar/{{ $c->seo }}" class="champion-item">
          <img src="/img/champion/{{ $c->image }}" alt="{{ $c->name }}" class="image">
          <p class="name">{{$c->name}}</p>
        </a>
      </div>
      @endforeach
    </div>
  @endforeach
  </div>
</section>
 
@endsection