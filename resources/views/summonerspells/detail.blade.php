@extends('layouts.app') 
@section('keywords')
<meta name="keywords" content="lol,{{$spell->name}},{{$spell->seo}},adc,sup,jung,mid,solo,tank,büyü,sihirdar,yetenek"/>
<title>lolcü | {{$spell->name}}</title>
@endsection
@section('scripts') @endsection @section('content')
<div class="container">
  <div class="row">
      <div class="col-md-2">
        <img src="/img/spell/{{$spell->image}}" alt="">
      </div>
      <div class="col-md-2">
        <p>{{$spell->name}}</p>
        <p>{{$spell->description}}</p>
      </div>
  </div>
</div>
@endsection