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
@endsection