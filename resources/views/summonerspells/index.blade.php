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
<div class="heading">
  <h2 style="text-align:center" >SİHİRDAR BÜYÜLERİ </h2>
</div
@foreach($spells->chunk(4) as $chunk)
<div class="row">
@foreach($chunk as $s)
    <div class="col-md-3">
      <a href="/sihirdar-buyuleri/{{$s->seo}}">
        <img src="/img/spell/{{$s->image}}" alt="">
        <p>{{$s->name}}</p>
      </a>
    </div>
  @endforeach
</div>
@endforeach
@endsection