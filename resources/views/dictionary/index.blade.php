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

<ul id="myList">
@foreach($items as $i)
<li>
  {{$i->name}}:{{$i->description}}
</li>

@endforeach
</ul>
@endsection
