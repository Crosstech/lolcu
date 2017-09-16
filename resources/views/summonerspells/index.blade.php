@extends('layouts.app')

@section('title')
 Sihirdar Büyüleri
@endsection

@section('keywords')
lol,adc,sup,jung,mid,solo,tank,büyü,yetenek,sihirdar,büyüleri
@endsection

@section('scripts') 

@endsection 

@section('content')
<section id="spells">
<!-- <div class="title">
  <h1>SİHİRDAR BÜYÜLERİ</h1>
</div> -->
<div class="body">
  <div class="row">
    <div class="col-md-12 spell-list">
    @foreach($spells->chunk(6) as $chunk)
      <div class="row">
      @foreach($chunk as $s)
          <div class="col-md-2">
            <a href="/sihirdar-buyuleri/{{$s->seo}}" class="spell-item">
              <img src="/img/spell/{{$s->image}}" alt="{{ $s->name }}" class="image">
              <p class="name">{{$s->name}}</p>
            </a>
          </div>
        @endforeach
      </div>
      @endforeach
    @endsection
    </div>
  </div>
</div>
</section>


