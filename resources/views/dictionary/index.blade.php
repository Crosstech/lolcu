@extends('layouts.app')
@section('keywords')
<meta name="keywords" content="lol,sozluk,sözlükç ne demek,ne, demek"/>
<title>lolcü | Lol Sözlüğü</title>
@endsection
 @section('scripts') @endsection @section('content')
@foreach($items as $i)
<div class="row">
  <div class="col-md-1">{{$i->name}}:</div>
  <div class="col-md-9">{{$i->description}}</div>
</div>
@endforeach
@endsection