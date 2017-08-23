@extends('layouts.app')
@section('keywords')
<meta name="keywords" content="lol,kabiliyetler,ad,ap,tank,ormancı,jungle,mid,adc,sup,solo"/>
<title>lolcü | kabiliyetler</title>
@endsection
 @section('scripts') @endsection @section('content')
<div class="container">
  @foreach($masteries as $m)
  <div class="row">
    <a href="/kabiliyetler/{{$m->seo}}">
      <div class="col-md-2">
        <img src="/img/mastery/{{$m->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$m->name}}</p>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection