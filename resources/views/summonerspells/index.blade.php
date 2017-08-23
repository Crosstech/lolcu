@extends('layouts.app')
@section('keywords')
<meta name="keywords" content="lol,adc,sup,jung,mid,solo,tank,büyü,yetenek,sihirdar,büyüleri"/>
<title>lolcü | Sihirdar Büyüleri</title>
@endsection
 @section('scripts') @endsection @section('content')
<div class="container">
  @foreach($spells as $s)
  <div class="row">
    <a href="/sihirdar-buyuleri/{{$s->seo}}">
      <div class="col-md-2">
        <img src="/img/spell/{{$s->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$s->name}}</p>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection