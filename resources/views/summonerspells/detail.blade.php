@extends('layouts.app')

@section('title')
 {{ $spell->name }}
@endsection
 
@section('keywords')
lol,{{$spell->name}},{{$spell->seo}},adc,sup,jung,mid,solo,tank,büyü,sihirdar,yetenek
@endsection

@section('scripts') 

@endsection 

@section('content')
<div class="row">
    <div class="col-md-2">
      <img src="/img/spell/{{$spell->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$spell->name}}</p>
      <p>{{$spell->description}}</p>
    </div>
</div>
<h2>{{$spell->name}} kullanan şampiyonlar</h2>
      @foreach($champions->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $c)
          <div class="col-md-3">
            <a href="/sampiyonlar/{{$c->name}}">
              <img src="/img/champion/{{$c->image}}" alt="">
              <p>{{$c->name}}</p>
              <p>{{$c->title}}</p>
            </a>
          </div>
          @endforeach
        </div>
      @endforeach
@endsection