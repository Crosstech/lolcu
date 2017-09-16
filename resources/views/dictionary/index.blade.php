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

<section id="dictionary">
  <div class="title">
    <h1>SÖZLÜK</h1>
  </div>
  <div class="body content">
    <ul>
        @foreach($items as $i)
        <li class="dictionary-item">
          <span class="key">{{$i->name}}:</span>
          <span class="value">{{$i->description}}</span>
        </li>
        @endforeach
    </ul>
  </div>
</section>
@endsection