@extends('layouts.app')
@section('keywords')
<meta name="keywords" content="lol,şampiyonlar,şampiyon,kaç k"/>
<title>lolcü | Şampiyonlar</title>
@endsection
 @section('scripts') @endsection @section('content')
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