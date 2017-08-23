@extends('layouts.app') 
@section('keywords')
<meta name="keywords" content="lol,kabiliyet,{{$mastery->name}},{{$mastery->seo}}adc,solo,mid,sup,jung,ormanci,top,destek,orta,"/>
<title>lolcü | {{$mastery->name}}</title>
@endsection

@section('scripts') @endsection @section('content')
<div class="container">
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
</div>
@endsection