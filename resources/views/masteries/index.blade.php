@extends('layouts.app')

@section('title')
 Kabiliyetler
@endsection

@section('keywords')
lol,kabiliyetler,ad,ap,tank,ormancı,jungle,mid,adc,sup,solo
@endsection

@section('scripts') 

@endsection 

@section('content')
<section id="masteries">
<!-- <div class="title">
  <h1>KABİLİYETLER</h1>
</div> -->

<div class="body">
  <div class="row">
    <div class="col-md-12 mastery-list">
    @foreach($masteries->chunk(6) as $chunk)
    <div class="row">
    @foreach($chunk as $m)
        <div class="col-md-2">
          <a href="/kabiliyetler/{{$m->seo}}" class="mastery-item">
            <img src="/img/mastery/{{$m->image}}" alt="{{ $m->name }}" class="image">
            <p class="name">{{$m->name}}</p>
          </a>
        </div>
      @endforeach
    </div>
    @endforeach
    </div>
  </div>
</div>
</section>
@endsection