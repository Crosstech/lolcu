@extends('layouts.app')

@section('title')
 Lol Sözlüğü
@endsection

@section('keywords')
lol, sozluk, sözlük, ne demek, ne, demek
@endsection

@section('scripts') 

@endsection 

@section('content')

@foreach($items as $i)
<div class="heading">
  <h2 style="text-align:center" >SÖZLÜK </h2>
</div
<div class="row">
  <div class="col-md-1">{{$i->name}}:</div>
  <div class="col-md-9">{{$i->description}}</div>
</div>
@endforeach

@endsection