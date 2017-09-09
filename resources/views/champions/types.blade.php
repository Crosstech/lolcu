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
<div class="heading">
  <h2 style="text-align:center" >{{$type}} Şampiyonlar </h2>
</div>
<div class="row">
@foreach($champions->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $c)
          <div class="col-md-3">
            <a href="/sampiyonlar/{{$c->name}}">
              <img src="/img/champion/{{$c->image}}" alt="">
              <p>{{$c->name}}</p>
            </a>
          </div>
          @endforeach
        </div>
      @endforeach
</div>
 
@endsection