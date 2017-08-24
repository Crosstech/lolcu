@extends('layouts.app') 

@section('title')
 {{ $mastery->name }}
@endsection

@section('keywords')
lol,kabiliyet,{{$mastery->name}},{{$mastery->seo}}adc,solo,mid,sup,jung,ormanci,top,destek,orta
@endsection

@section('scripts') 
@endsection 
@section('content')
<div class="row">
    <div class="col-md-2">
      <img src="/img/mastery/{{$mastery->image}}" alt="">
    </div>
    <div class="col-md-2">
      <p>{{$mastery->name}}</p>
      <p>{{$mastery->description1}}</p>
      <p>{{$mastery->description2}}</p>
      <p>{{$mastery->description3}}</p>
      <p>{{$mastery->description4}}</p>
      <p>{{$mastery->description5}}</p>
    </div>
</div>
@endsection